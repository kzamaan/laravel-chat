<?php

namespace App\Http\Livewire;

use App\Events\ConversationCreated;
use App\Events\MessageCreated;
use App\Events\MessageSeenTime;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;
use Livewire\Component;
use App\Models\Conversation;
use App\Models\Message;
use App\Models\User;
use Faker\Core\Number;
use Illuminate\Support\Facades\Auth;

class LiveMessage extends Component
{

    public $conversation, $newMessage, $messageText, $isSelected = false;

    protected $listeners = [
        'refreshMessage' => 'getMessage',
        'refreshConversation' => 'getConversationsProperty'
    ];

    /**
     * @return void
     */
    public function sendMessage(): void
    {
        $this->validate([
            'messageText' => 'required'
        ]);

        if (!isset($this->conversation->id)) {
            $conversation = Conversation::create([
                'from_user_id' => Auth::id(),
                'to_user_id' => $this->newMessage->id
            ]);
            $conversationId = $conversation->id;
            broadcast(new ConversationCreated($conversation))->toOthers();
        } else {
            $conversationId = $this->conversation->id;
        }

        $message = Message::create([
            'conversation_id' => $conversationId,
            'user_id' => Auth::id(),
            'message' => $this->messageText
        ]);
        broadcast(new MessageCreated($message))->toOthers();
        $this->messageText = null;
        $this->getMessage($conversationId);
    }

    /**
     * @param $id
     * @return void
     */
    public function getMessage($conversationId): void
    {
        $this->isSelected = true;
        $this->newMessage = null;
        $this->conversation = Conversation::with(['from', 'to', 'messages'])->find($conversationId);
        $this->dispatchBrowserEvent('scroll-bottom');
        $this->emit('connect', $this->conversation);
        $this->updateMessageStatus($conversationId);
    }

    /**
     * @return Collection
     */
    public function getConversationsProperty(): Collection
    {
        return Conversation::query()
            ->where('from_user_id', Auth::id())
            ->orWhere('to_user_id', Auth::id())
            ->with(['from', 'to'])
            ->withCount(['unreadMessage'])
            ->get();
    }

    /**
     * @param $id
     * @return void
     */
    public function updateMessageStatus($conversationId): void
    {
        Message::query()
            ->where('conversation_id', $conversationId)
            ->where('user_id', '!=', Auth::id())
            ->where('is_seen', false)
            ->update(['is_seen' => true]);
        $this->updateMessageSeenTime($conversationId);
    }

    /**
     * @param $id
     * @return void
     */
    public function updateMessageSeenTime($conversationId): void
    {
        $messages = Message::query()
            ->where('conversation_id', $conversationId)
            ->where('user_id', '!=', Auth::id())
            ->whereNull('seen_at')->get();

        if ($messages->count() > 0) {
            $messages->each(function ($message) {
                $message->update(['seen_at' => now()]);
            });
            $message = $messages->last();
            broadcast(new MessageSeenTime($message))->toOthers();
        }
    }

    public function updateMessageSeenAt($id)
    {
        Message::query()
            ->where('id', $id)
            ->whereNull('seen_at')
            ->update(['seen_at' => now()]);
    }

    /**
     * @param $id
     * @return void
     */
    public function startNewMessage($id): void
    {
        $this->conversation = null;
        $this->isSelected = true;
        $this->newMessage = User::find($id);
    }

    /**
     * @return bool
     */
    public function hasNewMessage(): bool
    {
        $message = Conversation::query()->whereHas('messages', function ($query) {
            return $query->where('is_seen', 0);
        })->count();

        return (bool)$message;
    }

    /**
     * @return Collection
     */
    public function getUsersProperty(): Collection
    {
        $ids = array_merge(
            [Auth::id()],
            $this->conversations->pluck('from_user_id')->toArray(),
            $this->conversations->pluck('to_user_id')->toArray()
        );
        return User::query()->whereNotIn('id', $ids)->get();
    }

    /**
     * @return View
     */
    public function render(): View
    {
        return view('livewire.live-message');
    }
}
