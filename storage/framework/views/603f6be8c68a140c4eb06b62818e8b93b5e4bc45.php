<!--Header section start-->
<header class="topbar clearfix">
    <!--navbar Logo section left-->
    <div class="topbar-left">
        <div class="main-logo m-0 p-0">
            <a href="index.html" class="logo">
                <span>
                   <img src="http://www.madcoderz.com/madol/asset/images/logo.svg" alt="madol">
                </span>
                <i><img src="http://www.madcoderz.com/madol/asset/images/icon-logo.svg" alt="madol"></i>
            </a>
        </div>
    </div>
    <!--Topbar Logo section end-->
    <!--navbar menu section right-->
    <nav class="navbar-main navbar navbar-full d-flex flex-nowrap flex-row">
        <ul class="navbar-nav nav-left d-flex flex-row pl-0 mb-0 order-1">
            <li class="nav-item text-center d-block">
                <a href="javascript:void(0)" class="sidebar-toggle text-center">
                    <i class="icon-menu"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav d-flex flex-row nav-right pl-0 mb-0 m-20 order-2">
            <li class="dropdown dropdown-list d-none d-sm-block">
                <a href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link arrow-none">
                    <i class="icon-grid grid-icon position-relative"></i>
                </a>
                <div class="dropdown-menu dropdown-box-grid">
                    <a class="dropdown-icon-menu pt-3 pb-3 " href="mail.html">
                        <i class="icon-envelope-open d-block"></i> <span>Mail</span>
                    </a>
                    <a class="dropdown-icon-menu pt-3 pb-3" href="chat.html"><i class="icon-bubbles d-block"></i> <span>Messages</span>
                    </a>
                    <a class="dropdown-icon-menu pt-3 pb-3" href="javascript:void(0)"><i class="icon-bag d-block"></i> <span>Orders</span>
                    </a>
                    <a class="dropdown-icon-menu pt-3 pb-3" href="fullcalendar.html"><i class="icon-calendar d-block"></i> <span>Calender</span>
                    </a>
                </div>
            </li>
            <li class="dropdown notification-list d-none d-sm-block">
                <a href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link arrow-none">
                    <i class="icon-bell notification-icon position-relative"></i>
                    <span class="badge badge-pill badge-info">0</span>
                </a>
                <div class="dropdown-menu dropdown-box hw45">
                    <div class="scroolbar-notification">
                        <div class="d-flex flex-row p-3">
                            <a href="javascript:void(0)">
                                <img src="http://www.madcoderz.com/madol/asset/images/user/thumb/default-thumb.jpg" alt="Notification" class="list-thumbnail rounded-circle">
                            </a>
                            <div class="pl-2">
                                <a href="javascript:void(0)">
                                    <p class="text-medium mb-1">Jhon Doe just sent a new comment!</p>
                                    <p class="text-muted text-small mb-0">09.07.2018 11.45</p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex flex-row p-3">
                            <a href="javascript:void(0)">
                                <img src="http://www.madcoderz.com/madol/asset/images/user/thumb/default-thumb.jpg" alt="Notification" class="list-thumbnail rounded-circle">
                            </a>
                            <div class="pl-2">
                                <a href="javascript:void(0)">
                                    <p class="text-medium mb-1">Jhon Doe just sent a new comment!</p>
                                    <p class="text-muted text-small mb-0">09.07.2018 11.45</p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex flex-row p-3">
                            <a href="javascript:void(0)">
                                <img src="http://www.madcoderz.com/madol/asset/images/user/thumb/default-thumb.jpg" alt="Notification" class="list-thumbnail rounded-circle">
                            </a>
                            <div class="pl-2">
                                <a href="javascript:void(0)">
                                    <p class="text-medium mb-1">Jhon Doe just sent a new comment!</p>
                                    <p class="text-muted text-small mb-0">09.07.2018 11.45</p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex flex-row p-3">
                            <a href="javascript:void(0)">
                                <img src="http://www.madcoderz.com/madol/asset/images/user/thumb/default-thumb.jpg" alt="Notification" class="list-thumbnail rounded-circle">
                            </a>
                            <div class="pl-2">
                                <a href="javascript:void(0)">
                                    <p class="mb-1 text-medium">Jhon Doe just sent a new comment!</p>
                                    <p class="text-muted text-small mb-0">09.07.2018 11.45</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0)" class="text-primary">
                            <p class="pt-3 text-uppercase">View All</p>
                        </a>
                    </div>
                </div>
            </li>
            <li class="dropdown nav-profile hw35 pr-3">
                <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                <a href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link arrow-none">
                    <img src="http://www.madcoderz.com/madol/asset/images/user/thumb/default-thumb.jpg" alt="" class="list-thumbnail rounded-circle">
                </a>
                <div class="dropdown-menu hw45 dropdown-box-grid">
                    <ul class="dropdown-inner p-2">
                        
                        <li class="pb-3">
                            <div class="dd-userbox d-flex flex-row">
                                <div class="dd-img">
                                    <img alt="madol" src="http://www.madcoderz.com/madol/asset/images/user/thumb/default-thumb.jpg" class="rounded-circle">
                                </div>
                                <div class="dd-info">
                                    <h4>Vesa J Helenius</h4>
                                    <p>example@example.com</p>
                                </div>
                            </div>
                        </li>
                        <li class="main pb-3">
                            <a href="profile.html"><i class="icon-user mr-2"></i> Profile</a>
                        </li>
                        <li class="main pb-3">
                            <a href="javascript:void(0)"><i class="icon-key mr-2"></i> Change Password</a>
                        </li>
                        <li class="main pb-3">
                            <a href="javascript:void(0)"><i class="icon-settings mr-2"></i> Configuration</a>
                        </li>
                        <li class="main pb-3">
                            <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="icon-logout mr-2"></i> Sign Out</a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>
                        </li>
                    </ul>
                </div>
                <?php endif; ?>
            </li>
        </ul>
    </nav>
    <!--navbar menu section right end-->
</header><?php /**PATH F:\madcoderz\htdocs\boilar-plate\resources\views/partials/_header.blade.php ENDPATH**/ ?>