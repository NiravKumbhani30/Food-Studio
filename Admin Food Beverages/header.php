<div class="topbar">

    <nav class="navbar-custom">
        <ul class="list-unstyled topbar-nav float-right mb-0">
            <li class="dropdown hide-phone">
                <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#"
                    role="button" aria-haspopup="false" aria-expanded="false">
                    <i data-feather="search" class="topbar-icon"></i>
                </a>

                <div class="dropdown-menu dropdown-menu-right dropdown-lg p-0">

                    <div class="app-search-topbar">
                        <form action="#" method="get">
                            <input type="search" onkeyup="getdata('<?php echo $_SESSION['identity']; ?>','search',this.value);" name="search" class="from-control top-search mb-0"
                                placeholder="Search here...">
                            <button type="submit"><i class="ti-search"></i></button>
                        </form>
                    </div>
                </div>
            </li>

            <li class="dropdown notification-list">

                <div class="dropdown-menu dropdown-menu-right dropdown-lg pt-0">

                    <h6
                        class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
                        Notifications <span class="badge badge-primary badge-pill">2</span>
                    </h6>
                    <div class="notification-menu" data-simplebar>

                        <a href="#" class="dropdown-item py-3">
                            <small class="float-right text-muted pl-2">2 min ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <i data-feather="shopping-cart" class="align-self-center icon-xs"></i>
                                </div>
                                <div class="media-body align-self-center ml-2 text-truncate">
                                    <h6 class="my-0 font-weight-normal text-dark">Your order is placed</h6>
                                    <small class="text-muted mb-0">Dummy text of the printing and industry.</small>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="dropdown-item py-3">
                            <small class="float-right text-muted pl-2">10 min ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <img src="assets/images/users/user-4.jpg" alt="" class="thumb-sm rounded-circle">
                                </div>
                                <div class="media-body align-self-center ml-2 text-truncate">
                                    <h6 class="my-0 font-weight-normal text-dark">Meeting with designers</h6>
                                    <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="dropdown-item py-3">
                            <small class="float-right text-muted pl-2">40 min ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <i data-feather="users" class="align-self-center icon-xs"></i>
                                </div>
                                <div class="media-body align-self-center ml-2 text-truncate">
                                    <h6 class="my-0 font-weight-normal text-dark">UX 3 Task complete.</h6>
                                    <small class="text-muted mb-0">Dummy text of the printing.</small>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="dropdown-item py-3">
                            <small class="float-right text-muted pl-2">1 hr ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <img src="assets/images/users/user-5.jpg" alt="" class="thumb-sm rounded-circle">
                                </div>
                                <div class="media-body align-self-center ml-2 text-truncate">
                                    <h6 class="my-0 font-weight-normal text-dark">Your order is placed</h6>
                                    <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="dropdown-item py-3">
                            <small class="float-right text-muted pl-2">2 hrs ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <i data-feather="check-circle" class="align-self-center icon-xs"></i>
                                </div>
                                <div class="media-body align-self-center ml-2 text-truncate">
                                    <h6 class="my-0 font-weight-normal text-dark">Payment Successfull</h6>
                                    <small class="text-muted mb-0">Dummy text of the printing.</small>
                                </div>
                            </div>
                        </a>
                    </div>

                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                        View all <i class="fi-arrow-right"></i>
                    </a>
                </div>
            </li>

            <li class="dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#"
                    role="button" aria-haspopup="false" aria-expanded="false">
                    <span class="ml-1 nav-user-name hidden-sm">Welcome</span>
                    <img src="assets/images/logo-black1.png" alt="profile-user" class="rounded-circle thumb-xs" />
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="logout.php" class="dropdown-item"><i data-feather="power"
                            class="align-self-center icon-xs icon-dual mr-1"></i> Logout</a>
                </div>
            </li>
        </ul>

        <ul class="list-unstyled topbar-nav mb-0">
            <li>
                <button class="nav-link button-menu-mobile">
                    <i data-feather="menu" class="align-self-center topbar-icon"></i>
                </button>
            </li>

        </ul>
    </nav>

</div>