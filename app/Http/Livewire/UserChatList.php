<?php

namespace App\Http\Livewire;


use Livewire\Component;
use Illuminate\View\View;
use App\Models\Conversation;
use Illuminate\Database\Eloquent\Collection;

class UserChatList extends Component
{
    /**
     * @return Collection
     */
    public function getConversationsProperty(): Collection
    {
        return Conversation::query()
            ->where('from_user_id', auth()->id())
            ->orWhere('to_user_id', auth()->id())
            ->with(['from', 'to'])
            ->withCount(['unreadMessage'])
            ->get();
    }
    /**
     * @return View
     */
    public function render(): View
    {
        return view('livewire.user-chat-list');
    }
}
