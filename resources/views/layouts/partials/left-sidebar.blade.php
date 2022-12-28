<!-- start chat-left sidebar -->
<div class="chat-leftsidebar me-lg-1 ms-lg-0">
    <div class="tab-content">
        <!-- Start Profile tab-pane -->
        <div class="tab-pane" id="pills-user" role="tabpanel" aria-labelledby="pills-user-tab">
            <!-- Start profile content -->
            <div>
                <div class="px-4 pt-4">
                    <div class="user-chat-nav float-end">
                        <div class="dropdown">
                            <a href="#" class="font-size-18 text-muted dropdown-toggle" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="ri-more-2-fill"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item" href="#">Action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Another action</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="mb-0">My Profile</h4>
                </div>

                <div class="text-center p-4 border-bottom">
                    <div class="mb-4">
                        <img src="{{ asset('chat-ui/images/users/avatar-1.jpg') }}"
                            class="rounded-circle avatar-lg img-thumbnail" />
                    </div>

                    <h5 class="font-size-16 mb-1 text-truncate">Patricia Smith</h5>
                    <p class="text-muted text-truncate mb-1">
                        <i class="ri-record-circle-fill font-size-10 text-success me-1 ms-0 d-inline-block"></i>
                        Active
                    </p>
                </div>
                <!-- End profile user -->

                <!-- Start user-profile-desc -->
                <div class="p-4 user-profile-desc" data-simplebar="init">
                    <div class="text-muted">
                        <p class="mb-4">
                            If several languages coalesce, the grammar of the resulting language is more
                            simple and regular than that of the individual.
                        </p>
                    </div>

                    <div id="tab-profile" class="accordion">
                        <div class="accordion-item card border mb-2">
                            <div class="accordion-header" id="about2">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#about" aria-expanded="true" aria-controls="about">
                                    <h5 class="font-size-14 m-0">
                                        <i class="ri-user-2-line me-2 ms-0 ms-0 align-middle d-inline-block"></i>
                                        About
                                    </h5>
                                </button>
                            </div>
                            <div id="about" class="accordion-collapse collapse show" aria-labelledby="about2"
                                data-bs-parent="#tab-profile">
                                <div class="accordion-body">
                                    <div>
                                        <p class="text-muted mb-1">Name</p>
                                        <h5 class="font-size-14">Patricia Smith</h5>
                                    </div>

                                    <div class="mt-4">
                                        <p class="text-muted mb-1">Email</p>
                                        <h5 class="font-size-14">adc@123.com</h5>
                                    </div>

                                    <div class="mt-4">
                                        <p class="text-muted mb-1">Time</p>
                                        <h5 class="font-size-14">11:40 AM</h5>
                                    </div>

                                    <div class="mt-4">
                                        <p class="text-muted mb-1">Location</p>
                                        <h5 class="font-size-14 mb-0">California, USA</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End About card -->

                        <div class="card accordion-item border">
                            <div class="accordion-header" id="attach-file2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#attach-file" aria-expanded="false" aria-controls="attach-file">
                                    <h5 class="font-size-14 m-0">
                                        <i class="ri-attachment-line me-2 ms-0 ms-0 align-middle d-inline-block"></i>
                                        Attached Files
                                    </h5>
                                </button>
                            </div>
                            <div id="attach-file" class="accordion-collapse collapse" aria-labelledby="attach-file2"
                                data-bs-parent="#tab-profile">
                                <div class="accordion-body">
                                    <div class="card p-2 border mb-2">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm me-3 ms-0">
                                                <div
                                                    class="avatar-title bg-soft-primary text-primary rounded font-size-20">
                                                    <i class="ri-file-text-fill"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="text-start">
                                                    <h5 class="font-size-14 mb-1">Admin-A.zip</h5>
                                                    <p class="text-muted font-size-13 mb-0">12.5 MB</p>
                                                </div>
                                            </div>

                                            <div class="ms-4 me-0">
                                                <ul class="list-inline mb-0 font-size-18">
                                                    <li class="list-inline-item">
                                                        <a href="#" class="text-muted px-1">
                                                            <i class="ri-download-2-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item dropdown">
                                                        <a class="dropdown-toggle text-muted px-1" href="#"
                                                            role="button" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            <i class="ri-more-fill"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another
                                                                action</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card p-2 border mb-2">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm me-3 ms-0">
                                                <div
                                                    class="avatar-title bg-soft-primary text-primary rounded font-size-20">
                                                    <i class="ri-image-fill"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="text-start">
                                                    <h5 class="font-size-14 mb-1">Image-1.jpg</h5>
                                                    <p class="text-muted font-size-13 mb-0">4.2 MB</p>
                                                </div>
                                            </div>

                                            <div class="ms-4 me-0">
                                                <ul class="list-inline mb-0 font-size-18">
                                                    <li class="list-inline-item">
                                                        <a href="#" class="text-muted px-1">
                                                            <i class="ri-download-2-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item dropdown">
                                                        <a class="dropdown-toggle text-muted px-1" href="#"
                                                            role="button" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            <i class="ri-more-fill"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another
                                                                action</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card p-2 border mb-2">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm me-3 ms-0">
                                                <div
                                                    class="avatar-title bg-soft-primary text-primary rounded font-size-20">
                                                    <i class="ri-image-fill"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="text-start">
                                                    <h5 class="font-size-14 mb-1">Image-2.jpg</h5>
                                                    <p class="text-muted font-size-13 mb-0">3.1 MB</p>
                                                </div>
                                            </div>

                                            <div class="ms-4 me-0">
                                                <ul class="list-inline mb-0 font-size-18">
                                                    <li class="list-inline-item">
                                                        <a href="#" class="text-muted px-1">
                                                            <i class="ri-download-2-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item dropdown">
                                                        <a class="dropdown-toggle text-muted px-1" href="#"
                                                            role="button" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            <i class="ri-more-fill"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another
                                                                action</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card p-2 border mb-2">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm me-3 ms-0">
                                                <div
                                                    class="avatar-title bg-soft-primary text-primary rounded font-size-20">
                                                    <i class="ri-file-text-fill"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="text-start">
                                                    <h5 class="font-size-14 mb-1">Landing-A.zip</h5>
                                                    <p class="text-muted font-size-13 mb-0">6.7 MB</p>
                                                </div>
                                            </div>

                                            <div class="ms-4 me-0">
                                                <ul class="list-inline mb-0 font-size-18">
                                                    <li class="list-inline-item">
                                                        <a href="#" class="text-muted px-1">
                                                            <i class="ri-download-2-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item dropdown">
                                                        <a class="dropdown-toggle text-muted px-1" href="#"
                                                            role="button" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            <i class="ri-more-fill"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another
                                                                action</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Attached Files card -->
                    </div>
                    <!-- end profile-user-accordion -->
                </div>
                <!-- end user-profile-desc -->
            </div>
            <!-- End profile content -->
        </div>
        <!-- End Profile tab-pane -->

        <!-- Start chats tab-pane -->
        <div class="tab-pane fade show active" id="pills-chat" role="tabpanel" aria-labelledby="pills-chat-tab">
            <!-- Start chats content -->
            <div>
                <div class="px-4 pt-4">
                    <h4 class="mb-4">Chats</h4>
                    <div class="search-box chat-search-box">
                        <div class="input-group mb-3 bg-light input-group-lg rounded">
                            <div class="input-group-prepend">
                                <button type="button" class="btn btn-link text-muted pr-1 text-decoration-none">
                                    <i class="ri-search-line search-icon font-size-18"></i>
                                </button>
                            </div>
                            <input type="text" placeholder="Search messages or users"
                                class="form-control bg-light" />
                            <button title="Create Chat" type="button" data-bs-toggle="modal"
                                data-bs-target="#add-user"
                                class="btn text-decoration-none text-muted font-size-18 py-0 btn-link">
                                <i class="ri-user-add-line"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Search Box-->
                </div>
                <!-- .p-4 -->

                <!-- Start user status -->
                <div class="px-4 pb-4" dir="ltr">
                    <div class="owl-carousel owl-theme" id="user-status-carousel">
                        <div class="item">
                            <a href="#" class="user-status-box">
                                <div class="avatar-xs mx-auto d-block chat-user-img online">
                                    <img src="{{ asset('chat-ui/images/users/avatar-2.jpg') }}" alt="user-img"
                                        class="img-fluid rounded-circle" />
                                    <span class="user-status"></span>
                                </div>

                                <h5 class="font-size-13 text-truncate mt-3 mb-1">Patrick</h5>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="user-status-box">
                                <div class="avatar-xs mx-auto d-block chat-user-img online">
                                    <img src="{{ asset('chat-ui/images/users/avatar-4.jpg') }}" alt="user-img"
                                        class="img-fluid rounded-circle" />
                                    <span class="user-status"></span>
                                </div>

                                <h5 class="font-size-13 text-truncate mt-3 mb-1">Doris</h5>
                            </a>
                        </div>

                        <div class="item">
                            <a href="#" class="user-status-box">
                                <div class="avatar-xs mx-auto d-block chat-user-img online">
                                    <img src="{{ asset('chat-ui/images/users/avatar-5.jpg') }}" alt="user-img"
                                        class="img-fluid rounded-circle" />
                                    <span class="user-status"></span>
                                </div>

                                <h5 class="font-size-13 text-truncate mt-3 mb-1">Emily</h5>
                            </a>
                        </div>

                        <div class="item">
                            <a href="#" class="user-status-box">
                                <div class="avatar-xs mx-auto d-block chat-user-img online">
                                    <img src="{{ asset('chat-ui/images/users/avatar-6.jpg') }}" alt="user-img"
                                        class="img-fluid rounded-circle" />
                                    <span class="user-status"></span>
                                </div>

                                <h5 class="font-size-13 text-truncate mt-3 mb-1">Steve</h5>
                            </a>
                        </div>

                        <div class="item">
                            <a href="#" class="user-status-box">
                                <div class="avatar-xs mx-auto d-block chat-user-img online">
                                    <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                        T
                                    </span>
                                    <span class="user-status"></span>
                                </div>

                                <h5 class="font-size-13 text-truncate mt-3 mb-1">Teresa</h5>
                            </a>
                        </div>
                    </div>
                    <!-- end user status carousel -->
                </div>
                <!-- end user status -->

                <!-- Start chat-message-list -->
                <div>
                    <h5 class="mb-3 px-3 font-size-16">Recent</h5>
                    <div class="chat-message-list px-2" data-simplebar="init">
                        @livewire('user-chat-list')
                    </div>
                </div>
                <!-- End chat-message-list -->
            </div>
            <!-- Start chats content -->
        </div>
        <!-- End chats tab-pane -->

        <!-- Start groups tab-pane -->
        <div class="tab-pane" id="pills-groups" role="tabpanel" aria-labelledby="pills-groups-tab">
            <!-- Start Groups content -->
            <div>
                <div class="p-4">
                    <div class="user-chat-nav float-end">
                        <div data-bs-toggle="tooltip" data-bs-placement="bottom" title="Create group">
                            <!-- Button trigger modal -->
                            <button type="button"
                                class="btn btn-link text-decoration-none text-muted font-size-18 py-0"
                                data-bs-toggle="modal" data-bs-target="#addgroup-exampleModal">
                                <i class="ri-group-line me-1 ms-0"></i>
                            </button>
                        </div>
                    </div>
                    <h4 class="mb-4">Groups</h4>

                    <!-- Start add group Modal -->
                    <div class="modal fade" id="addgroup-exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="addgroup-exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title font-size-16" id="addgroup-exampleModalLabel">
                                        Create New Group
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body p-4">
                                    <form>
                                        <div class="mb-4">
                                            <label for="addgroupname-input" class="form-label">Group
                                                Name</label>
                                            <input type="text" class="form-control" id="addgroupname-input"
                                                placeholder="Enter Group Name" />
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label">Group Members</label>
                                            <div class="mb-3">
                                                <button class="btn btn-light btn-sm" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#groupmembercollapse"
                                                    aria-expanded="false" aria-controls="groupmembercollapse">
                                                    Select Members
                                                </button>
                                            </div>

                                            <div class="collapse" id="groupmembercollapse">
                                                <div class="card border">
                                                    <div class="card-header">
                                                        <h5 class="font-size-15 mb-0">Contacts</h5>
                                                    </div>
                                                    <div class="card-body p-2">
                                                        <div data-simplebar style="max-height: 150px">
                                                            <div>
                                                                <div class="p-3 fw-bold text-primary">
                                                                    A
                                                                </div>

                                                                <ul class="list-unstyled contact-list">
                                                                    <li>
                                                                        <div class="form-check">
                                                                            <input type="checkbox"
                                                                                class="form-check-input"
                                                                                id="memberCheck1" checked />
                                                                            <label class="form-check-label"
                                                                                for="memberCheck1">Albert
                                                                                Rodarte</label>
                                                                        </div>
                                                                    </li>

                                                                    <li>
                                                                        <div class="form-check">
                                                                            <input type="checkbox"
                                                                                class="form-check-input"
                                                                                id="memberCheck2" />
                                                                            <label class="form-check-label"
                                                                                for="memberCheck2">Allison
                                                                                Etter</label>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>

                                                            <div>
                                                                <div class="p-3 fw-bold text-primary">
                                                                    C
                                                                </div>

                                                                <ul class="list-unstyled contact-list">
                                                                    <li>
                                                                        <div class="form-check">
                                                                            <input type="checkbox"
                                                                                class="form-check-input"
                                                                                id="memberCheck3" />
                                                                            <label class="form-check-label"
                                                                                for="memberCheck3">Craig
                                                                                Smiley</label>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>

                                                            <div>
                                                                <div class="p-3 fw-bold text-primary">
                                                                    D
                                                                </div>

                                                                <ul class="list-unstyled contact-list">
                                                                    <li>
                                                                        <div class="form-check">
                                                                            <input type="checkbox"
                                                                                class="form-check-input"
                                                                                id="memberCheck4" />
                                                                            <label class="form-check-label"
                                                                                for="memberCheck4">Daniel
                                                                                Clay</label>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>

                                                            <div>
                                                                <div class="p-3 fw-bold text-primary">
                                                                    I
                                                                </div>

                                                                <ul class="list-unstyled contact-list">
                                                                    <li>
                                                                        <div class="form-check">
                                                                            <input type="checkbox"
                                                                                class="form-check-input"
                                                                                id="memberCheck5" />
                                                                            <label class="form-check-label"
                                                                                for="memberCheck5">Iris
                                                                                Wells</label>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>

                                                            <div>
                                                                <div class="p-3 fw-bold text-primary">
                                                                    J
                                                                </div>

                                                                <ul class="list-unstyled contact-list">
                                                                    <li>
                                                                        <div class="form-check">
                                                                            <input type="checkbox"
                                                                                class="form-check-input"
                                                                                id="memberCheck6" />
                                                                            <label class="form-check-label"
                                                                                for="memberCheck6">Juan
                                                                                Flakes</label>
                                                                        </div>
                                                                    </li>

                                                                    <li>
                                                                        <div class="form-check">
                                                                            <input type="checkbox"
                                                                                class="form-check-input"
                                                                                id="memberCheck7" />
                                                                            <label class="form-check-label"
                                                                                for="memberCheck7">John
                                                                                Hall</label>
                                                                        </div>
                                                                    </li>

                                                                    <li>
                                                                        <div class="form-check">
                                                                            <input type="checkbox"
                                                                                class="form-check-input"
                                                                                id="memberCheck8" />
                                                                            <label class="form-check-label"
                                                                                for="memberCheck8">Joy
                                                                                Southern</label>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>

                                                            <div>
                                                                <div class="p-3 fw-bold text-primary">
                                                                    M
                                                                </div>

                                                                <ul class="list-unstyled contact-list">
                                                                    <li>
                                                                        <div class="form-check">
                                                                            <input type="checkbox"
                                                                                class="form-check-input"
                                                                                id="memberCheck9" />
                                                                            <label class="form-check-label"
                                                                                for="memberCheck9">Michael
                                                                                Hinton</label>
                                                                        </div>
                                                                    </li>

                                                                    <li>
                                                                        <div class="form-check">
                                                                            <input type="checkbox"
                                                                                class="form-check-input"
                                                                                id="memberCheck10" />
                                                                            <label class="form-check-label"
                                                                                for="memberCheck10">Mary
                                                                                Farmer</label>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>

                                                            <div>
                                                                <div class="p-3 fw-bold text-primary">
                                                                    P
                                                                </div>

                                                                <ul class="list-unstyled contact-list">
                                                                    <li>
                                                                        <div class="form-check">
                                                                            <input type="checkbox"
                                                                                class="form-check-input"
                                                                                id="memberCheck11" />
                                                                            <label class="form-check-label"
                                                                                for="memberCheck11">Phillis
                                                                                Griffin</label>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>

                                                            <div>
                                                                <div class="p-3 fw-bold text-primary">
                                                                    R
                                                                </div>

                                                                <ul class="list-unstyled contact-list">
                                                                    <li>
                                                                        <div class="form-check">
                                                                            <input type="checkbox"
                                                                                class="form-check-input"
                                                                                id="memberCheck12" />
                                                                            <label class="form-check-label"
                                                                                for="memberCheck12">Rocky
                                                                                Jackson</label>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>

                                                            <div>
                                                                <div class="p-3 fw-bold text-primary">
                                                                    S
                                                                </div>

                                                                <ul class="list-unstyled contact-list">
                                                                    <li>
                                                                        <div class="form-check">
                                                                            <input type="checkbox"
                                                                                class="form-check-input"
                                                                                id="memberCheck13" />
                                                                            <label class="form-check-label"
                                                                                for="memberCheck13">Simon
                                                                                Velez</label>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="addgroupdescription-input"
                                                class="form-label">Description</label>
                                            <textarea class="form-control" id="addgroupdescription-input" rows="3" placeholder="Enter Description"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-link" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                    <button type="button" class="btn btn-primary">Create Groups</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End add group Modal -->

                    <div class="search-box chat-search-box">
                        <div class="input-group rounded-3">
                            <span class="input-group-text text-muted bg-light pe-1 ps-3" id="basic-addon1">
                                <i class="ri-search-line search-icon font-size-18"></i>
                            </span>
                            <input type="text" class="form-control bg-light" placeholder="Search groups..."
                                aria-label="Search groups..." aria-describedby="basic-addon1" />
                        </div>
                    </div>
                    <!-- Search Box-->
                </div>

                <!-- Start chat-group-list -->
                <div class="p-4 chat-message-list chat-group-list" data-simplebar>
                    <ul class="list-unstyled chat-list">
                        <li>
                            <a href="#" class="chat-list-item">
                                <div class="d-flex align-items-center">
                                    <div class="chat-user-img me-3 ms-0">
                                        <div class="avatar-xs">
                                            <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                G
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="text-truncate font-size-14 mb-0">#General</h5>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="chat-list-item">
                                <div class="d-flex align-items-center">
                                    <div class="chat-user-img me-3 ms-0">
                                        <div class="avatar-xs">
                                            <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                R
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="text-truncate font-size-14 mb-0">
                                            #Reporting
                                            <span class="badge badge-soft-danger rounded-pill float-end">+23</span>
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="chat-list-item">
                                <div class="d-flex align-items-center">
                                    <div class="chat-user-img me-3 ms-0">
                                        <div class="avatar-xs">
                                            <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                D
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="text-truncate font-size-14 mb-0">#Designers</h5>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="chat-list-item">
                                <div class="d-flex align-items-center">
                                    <div class="chat-user-img me-3 ms-0">
                                        <div class="avatar-xs">
                                            <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                D
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="text-truncate font-size-14 mb-0">
                                            #Developers
                                            <span class="badge badge-soft-danger rounded-pill float-end">New</span>
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="chat-list-item">
                                <div class="d-flex align-items-center">
                                    <div class="chat-user-img me-3 ms-0">
                                        <div class="avatar-xs">
                                            <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                P
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="text-truncate font-size-14 mb-0">#Project-alpha</h5>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="chat-list-item">
                                <div class="d-flex align-items-center">
                                    <div class="chat-user-img me-3 ms-0">
                                        <div class="avatar-xs">
                                            <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                B
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="text-truncate font-size-14 mb-0">#Snacks</h5>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End chat-group-list -->
            </div>
            <!-- End Groups content -->
        </div>
        <!-- End groups tab-pane -->

        <!-- Start contacts tab-pane -->
        <div class="tab-pane" id="pills-contacts" role="tabpanel" aria-labelledby="pills-contacts-tab">
            <!-- Start Contact content -->
            <div>
                <div class="p-4">
                    <div class="user-chat-nav float-end">
                        <div data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add Contact">
                            <!-- Button trigger modal -->
                            <button type="button"
                                class="btn btn-link text-decoration-none text-muted font-size-18 py-0"
                                data-bs-toggle="modal" data-bs-target="#addContact-exampleModal">
                                <i class="ri-user-add-line"></i>
                            </button>
                        </div>
                    </div>
                    <h4 class="mb-4">Contacts</h4>

                    <!-- Start Add contact Modal -->
                    <div class="modal fade" id="addContact-exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="addContact-exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title font-size-16" id="addContact-exampleModalLabel">
                                        Add Contact
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body p-4">
                                    <form>
                                        <div class="mb-3">
                                            <label for="addcontactemail-input" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="addcontactemail-input"
                                                placeholder="Enter Email" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="addcontact-invitemessage-input" class="form-label">Invatation
                                                Message</label>
                                            <textarea class="form-control" id="addcontact-invitemessage-input" rows="3" placeholder="Enter Message"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-link" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                    <button type="button" class="btn btn-primary">Invite Contact</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Add contact Modal -->

                    <div class="search-box chat-search-box">
                        <div class="input-group bg-light input-group-lg rounded-3">
                            <div class="input-group-prepend">
                                <button class="btn btn-link text-decoration-none text-muted pe-1 ps-3" type="button">
                                    <i class="ri-search-line search-icon font-size-18"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control bg-light" placeholder="Search users.." />
                        </div>
                    </div>
                    <!-- End search-box -->
                </div>
                <!-- end p-4 -->

                <!-- Start contact lists -->
                <div class="p-4 chat-message-list chat-group-list" data-simplebar>
                    <div>
                        <div class="p-3 fw-bold text-primary">A</div>

                        <ul class="list-unstyled contact-list">
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-14 m-0">Albert Rodarte</h5>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="text-muted dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Share <i
                                                    class="ri-share-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Block <i
                                                    class="ri-forbid-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Remove
                                                <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-14 m-0">Allison Etter</h5>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="text-muted dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Share <i
                                                    class="ri-share-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Block <i
                                                    class="ri-forbid-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Remove
                                                <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- end contact list A -->

                    <div class="mt-3">
                        <div class="p-3 fw-bold text-primary">C</div>

                        <ul class="list-unstyled contact-list">
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-14 m-0">Craig Smiley</h5>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="text-muted dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Share <i
                                                    class="ri-share-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Block <i
                                                    class="ri-forbid-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Remove
                                                <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- end contact list C -->

                    <div class="mt-3">
                        <div class="p-3 fw-bold text-primary">D</div>

                        <ul class="list-unstyled contact-list">
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-14 m-0">Daniel Clay</h5>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="text-muted dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Share <i
                                                    class="ri-share-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Block <i
                                                    class="ri-forbid-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Remove
                                                <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-14 m-0">Doris Brown</h5>
                                    </div>

                                    <div class="dropdown">
                                        <a href="#" class="text-muted dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Share <i
                                                    class="ri-share-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Block <i
                                                    class="ri-forbid-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Remove
                                                <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- end contact list D -->

                    <div class="mt-3">
                        <div class="p-3 fw-bold text-primary">I</div>

                        <ul class="list-unstyled contact-list">
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-14 m-0">Iris Wells</h5>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="text-muted dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Share <i
                                                    class="ri-share-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Block <i
                                                    class="ri-forbid-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Remove
                                                <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- end contact list I -->

                    <div class="mt-3">
                        <div class="p-3 fw-bold text-primary">J</div>

                        <ul class="list-unstyled contact-list">
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-14 m-0">Juan Flakes</h5>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="text-muted dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Share <i
                                                    class="ri-share-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Block <i
                                                    class="ri-forbid-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Remove
                                                <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-14 m-0">John Hall</h5>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="text-muted dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Share <i
                                                    class="ri-share-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Block <i
                                                    class="ri-forbid-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Remove
                                                <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-14 m-0">Joy Southern</h5>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="text-muted dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Share <i
                                                    class="ri-share-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Block <i
                                                    class="ri-forbid-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Remove
                                                <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- end contact list J -->

                    <div class="mt-3">
                        <div class="p-3 fw-bold text-primary">M</div>

                        <ul class="list-unstyled contact-list">
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-14 m-0">Mary Farmer</h5>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="text-muted dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Share <i
                                                    class="ri-share-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Block <i
                                                    class="ri-forbid-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Remove
                                                <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-14 m-0">Mark Messer</h5>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="text-muted dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Share <i
                                                    class="ri-share-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Block <i
                                                    class="ri-forbid-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Remove
                                                <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-14 m-0">Michael Hinton</h5>
                                    </div>

                                    <div class="dropdown">
                                        <a href="#" class="text-muted dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Share <i
                                                    class="ri-share-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Block <i
                                                    class="ri-forbid-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Remove
                                                <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- end contact list M -->

                    <div class="mt-3">
                        <div class="p-3 fw-bold text-primary">O</div>

                        <ul class="list-unstyled contact-list">
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-14 m-0">Ossie Wilson</h5>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="text-muted dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Share <i
                                                    class="ri-share-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Block <i
                                                    class="ri-forbid-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Remove
                                                <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- end contact list O -->

                    <div class="mt-3">
                        <div class="p-3 fw-bold text-primary">P</div>

                        <ul class="list-unstyled contact-list">
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-14 m-0">Phillis Griffin</h5>
                                    </div>

                                    <div class="dropdown">
                                        <a href="#" class="text-muted dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Share <i
                                                    class="ri-share-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Block <i
                                                    class="ri-forbid-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Remove
                                                <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-14 m-0">Paul Haynes</h5>
                                    </div>

                                    <div class="dropdown">
                                        <a href="#" class="text-muted dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Share <i
                                                    class="ri-share-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Block <i
                                                    class="ri-forbid-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Remove
                                                <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- end contact list P -->

                    <div class="mt-3">
                        <div class="p-3 fw-bold text-primary">R</div>

                        <ul class="list-unstyled contact-list">
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-14 m-0">Rocky Jackson</h5>
                                    </div>

                                    <div class="dropdown">
                                        <a href="#" class="text-muted dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Share <i
                                                    class="ri-share-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Block <i
                                                    class="ri-forbid-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Remove
                                                <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- end contact list R -->

                    <div class="mt-3">
                        <div class="p-3 fw-bold text-primary">S</div>

                        <ul class="list-unstyled contact-list">
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-14 m-0">Sara Muller</h5>
                                    </div>

                                    <div class="dropdown">
                                        <a href="#" class="text-muted dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Share <i
                                                    class="ri-share-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Block <i
                                                    class="ri-forbid-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Remove
                                                <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-14 m-0">Simon Velez</h5>
                                    </div>

                                    <div class="dropdown">
                                        <a href="#" class="text-muted dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Share <i
                                                    class="ri-share-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Block <i
                                                    class="ri-forbid-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Remove
                                                <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-14 m-0">Steve Walker</h5>
                                    </div>

                                    <div class="dropdown">
                                        <a href="#" class="text-muted dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Share <i
                                                    class="ri-share-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Block <i
                                                    class="ri-forbid-line float-end text-muted"></i></a>
                                            <a class="dropdown-item" href="#">Remove
                                                <i class="ri-delete-bin-line float-end text-muted"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- end contact list S -->
                </div>
                <!-- end contact lists -->
            </div>
            <!-- Start Contact content -->
        </div>
        <!-- End contacts tab-pane -->

        <!-- Start settings tab-pane -->
        <div class="tab-pane" id="pills-setting" role="tabpanel" aria-labelledby="pills-setting-tab">
            <!-- Start Settings content -->
            <div>
                <div class="px-4 pt-4">
                    <h4 class="mb-0">Settings</h4>
                </div>

                <div class="text-center border-bottom p-4">
                    <div class="mb-4 profile-user">
                        <img src="{{ asset('chat-ui/images/users/avatar-1.jpg') }}"
                            class="rounded-circle avatar-lg img-thumbnail" />
                        <button type="button"
                            class="btn btn-light bg-light avatar-xs p-0 rounded-circle profile-photo-edit">
                            <i class="ri-pencil-fill"></i>
                        </button>
                    </div>

                    <h5 class="font-size-16 mb-1 text-truncate">Patricia Smith</h5>
                    <div class="dropdown d-inline-block mb-1">
                        <a class="text-muted dropdown-toggle pb-1 d-block" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Available <i class="mdi mdi-chevron-down"></i>
                        </a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Available</a>
                            <a class="dropdown-item" href="#">Busy</a>
                        </div>
                    </div>
                </div>
                <!-- End profile user -->

                <!-- Start User profile description -->
                <div class="p-4 user-profile-desc" data-simplebar>
                    <div id="settingprofile" class="accordion">
                        <div class="accordion-item card border mb-2">
                            <div class="accordion-header" id="personalinfo1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#personalinfo" aria-expanded="true"
                                    aria-controls="personalinfo">
                                    <h5 class="font-size-14 m-0">Personal Info</h5>
                                </button>
                            </div>
                            <div id="personalinfo" class="accordion-collapse collapse show"
                                aria-labelledby="personalinfo1" data-bs-parent="#settingprofile">
                                <div class="accordion-body">
                                    <div class="float-end">
                                        <button type="button" class="btn btn-light btn-sm">
                                            <i class="ri-edit-fill me-1 ms-0 align-middle"></i> Edit
                                        </button>
                                    </div>

                                    <div>
                                        <p class="text-muted mb-1">Name</p>
                                        <h5 class="font-size-14">Patricia Smith</h5>
                                    </div>

                                    <div class="mt-4">
                                        <p class="text-muted mb-1">Email</p>
                                        <h5 class="font-size-14">adc@123.com</h5>
                                    </div>

                                    <div class="mt-4">
                                        <p class="text-muted mb-1">Time</p>
                                        <h5 class="font-size-14">11:40 AM</h5>
                                    </div>

                                    <div class="mt-4">
                                        <p class="text-muted mb-1">Location</p>
                                        <h5 class="font-size-14 mb-0">California, USA</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end personal info card -->

                        <div class="accordion-item card border mb-2">
                            <div class="accordion-header" id="privacy1">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#privacy" aria-expanded="false"
                                    aria-controls="privacy">
                                    <h5 class="font-size-14 m-0">Privacy</h5>
                                </button>
                            </div>
                            <div id="privacy" class="accordion-collapse collapse" aria-labelledby="privacy1"
                                data-bs-parent="#settingprofile">
                                <div class="accordion-body">
                                    <div class="py-3">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h5 class="font-size-13 mb-0 text-truncate">
                                                    Profile photo
                                                </h5>
                                            </div>
                                            <div class="dropdown ms-2 me-0">
                                                <button class="btn btn-light btn-sm dropdown-toggle w-sm"
                                                    type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    Everyone <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Everyone</a>
                                                    <a class="dropdown-item" href="#">selected</a>
                                                    <a class="dropdown-item" href="#">Nobody</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="py-3 border-top">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h5 class="font-size-13 mb-0 text-truncate">Last seen</h5>
                                            </div>
                                            <div class="ms-2 me-0">
                                                <div class="form-check form-switch">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="privacy-lastseenSwitch" checked />
                                                    <label class="form-check-label"
                                                        for="privacy-lastseenSwitch"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="py-3 border-top">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h5 class="font-size-13 mb-0 text-truncate">Status</h5>
                                            </div>
                                            <div class="dropdown ms-2 me-0">
                                                <button class="btn btn-light btn-sm dropdown-toggle w-sm"
                                                    type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    Everyone <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Everyone</a>
                                                    <a class="dropdown-item" href="#">selected</a>
                                                    <a class="dropdown-item" href="#">Nobody</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="py-3 border-top">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h5 class="font-size-13 mb-0 text-truncate">
                                                    Read receipts
                                                </h5>
                                            </div>
                                            <div class="ms-2 me-0">
                                                <div class="form-check form-switch">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="privacy-readreceiptSwitch" checked />
                                                    <label class="form-check-label"
                                                        for="privacy-readreceiptSwitch"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="py-3 border-top">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h5 class="font-size-13 mb-0 text-truncate">Groups</h5>
                                            </div>
                                            <div class="dropdown ms-2 me-0">
                                                <button class="btn btn-light btn-sm dropdown-toggle w-sm"
                                                    type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    Everyone <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Everyone</a>
                                                    <a class="dropdown-item" href="#">selected</a>
                                                    <a class="dropdown-item" href="#">Nobody</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end privacy card -->

                        <div class="accordion-item card border mb-2">
                            <div class="accordion-header" id="security1">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#security" aria-expanded="false"
                                    aria-controls="security">
                                    <h5 class="font-size-14 m-0">Security</h5>
                                </button>
                            </div>
                            <div id="security" class="accordion-collapse collapse" aria-labelledby="security1"
                                data-bs-parent="#settingprofile">
                                <div class="accordion-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="font-size-13 mb-0 text-truncate">
                                                Show security notification
                                            </h5>
                                        </div>
                                        <div class="ms-2 me-0">
                                            <div class="form-check form-switch">
                                                <input type="checkbox" class="form-check-input"
                                                    id="security-notificationswitch" />
                                                <label class="form-check-label"
                                                    for="security-notificationswitch"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end security card -->

                        <div class="accordion-item card border mb-2">
                            <div class="accordion-header" id="help1">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    <h5 class="font-size-14 m-0">Help</h5>
                                </button>
                            </div>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="help1"
                                data-bs-parent="#settingprofile">
                                <div class="accordion-body">
                                    <div class="py-3">
                                        <h5 class="font-size-13 mb-0">
                                            <a href="#" class="text-body d-block">FAQs</a>
                                        </h5>
                                    </div>
                                    <div class="py-3 border-top">
                                        <h5 class="font-size-13 mb-0">
                                            <a href="#" class="text-body d-block">Contact</a>
                                        </h5>
                                    </div>
                                    <div class="py-3 border-top">
                                        <h5 class="font-size-13 mb-0">
                                            <a href="#" class="text-body d-block">Terms & Privacy
                                                policy</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end profile-setting-accordion -->
                </div>
                <!-- End User profile description -->
            </div>
            <!-- Start Settings content -->
        </div>
        <!-- End settings tab-pane -->
    </div>
    <!-- end tab content -->
</div>
<!-- end chat-left sidebar -->
