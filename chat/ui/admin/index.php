<?php
declare(strict_types = 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Chat Application | Equation - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="../styles/admin/assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link href="../styles/admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../styles/admin/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="../styles/admin/assets/css/apps/mailing-chat.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
</head>
<body>
    <!-- Tab Mobile View Header -->
    <header class="tabMobileView header navbar fixed-top d-lg-none">
        <div class="nav-toggle">
                <a href="javascript:void(0);" class="nav-link sidebarCollapse" data-placement="bottom">
                    <i class="flaticon-menu-line-2"></i>
                </a>
            <a href="index.php" class=""> <img src="../styles/admin/assets/img/logo-3.png" class="img-fluid" alt="logo"></a>
        </div>
        <ul class="nav navbar-nav">
            <li class="nav-item d-lg-none"> 
                <form class="form-inline justify-content-end" role="search">
                    <label>
                        <input type="text" class="form-control search-form-control mr-3">
                    </label>
                </form>
            </li>
        </ul>
    </header>
    <!-- Tab Mobile View Header -->

    <!--  BEGIN NAVBAR  -->
    <header class="header navbar fixed-top navbar-expand-sm expand-header" style="margin: 0 0 0 0;">
        <ul class="navbar-nav flex-row mr-lg-auto ml-lg-0  ml-auto">
            <li class="nav-item dropdown message-dropdown ml-lg-4">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="flaticon-mail-10"></span><span class="badge badge-primary">13</span>
                </a>
                <div class="dropdown-menu  position-absolute" aria-labelledby="messageDropdown">
                    <a class="dropdown-item title" href="javascript:void(0);">
                        <i class="flaticon-chat-line mr-3"></i><span>You have 13 new messages</span>
                    </a>
                    <a class="dropdown-item" href="javascript:void(0);">
                        <div class="media">
                            <div class="usr-img online mr-3">
                                <img class="usr-img rounded-circle" src="../styles/admin/assets/img/90x90.jpg" alt="Generic placeholder image">
                            </div>
                            <div class="media-body">
                                <div class="mt-0">
                                    <p class="text mb-0">Browse latest projects...</p>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <p class="meta-user-name mb-0">Kara Young</p>
                                    <p class="meta-time mb-0  align-self-center">1 min ago</p>
                                </div>
                            </div>
                        </div>

                        <div class="media">
                            <div class="usr-img mr-3">
                                <img class="usr-img rounded-circle" src="../styles/admin/assets/img/90x90.jpg" alt="Generic placeholder image">
                            </div>
                            <div class="media-body">
                                <div class="mt-0">
                                    <p class="text mb-0">Design, Development and...</p>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <p class="meta-user-name mb-0">Amy Diaz</p>
                                    <p class="meta-time mb-0  align-self-center">5 mins ago</p>
                                </div>
                            </div>
                        </div>

                        <div class="media">
                            <div class="usr-img online mr-3">
                                <img class="usr-img rounded-circle" src="../styles/admin/assets/img/90x90.jpg" alt="Generic placeholder image">
                            </div>
                            <div class="media-body">
                                <div class="mt-0">
                                    <p class="text mb-0">We can ensure...</p>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <p class="meta-user-name mb-0">Shaun Park</p>
                                    <p class="meta-time mb-0  align-self-center">1 day ago</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a class="footer dropdown-item" href="javascript:void(0);">
                        <div class="btn btn-info mb-3 mr-2 btn-rounded"><i class="flaticon-arrow-right mr-3"></i> View more</div>
                    </a>
                </div>
            </li>

            <li class="nav-item dropdown notification-dropdown ml-3">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="flaticon-bell-4"></span><span class="badge badge-success">15</span>
                </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                    <a class="dropdown-item title" href="javascript:void(0);">
                        <i class="flaticon-bell-13 mr-3"></i> <span>You have 15 new notifications</span>
                    </a>

                    <a class="dropdown-item text-center  p-1" href="javascript:void(0);">

                        <div class="notification-list ">
                            
                            <div class="notification-item position-relative  mb-3">
                                <div class="c-dropdown text-right">
                                    <span id="c-dropdonbtn" class="c-dropbtn mr-2"><i class="flaticon-dots"></i></span>
                                    <div class="c-dropdown-content">
                                        <div class="c-dropdown-item">View</div>
                                        <div class="c-dropdown-item">Delete</div>
                                    </div>
                                </div>
                               
                                <h6 class="mb-1">5 new members joined today</h6>
                                <p><span class="meta-time">1 minute ago</span> . <span class="meta-member-notification">4 members</span></p>
                                <ul class="list-inline badge-collapsed-img mt-3">
                                    <li class="list-inline-item chat-online-usr">
                                        <img src="../styles/admin/assets/img/90x90.jpg" alt="admin-profile" class="ml-0">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img src="../styles/admin/assets/img/90x90.jpg" alt="admin-profile">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img src="../styles/admin/assets/img/90x90.jpg" alt="admin-profile">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img src="../styles/admin/assets/img/90x90.jpg" alt="admin-profile">
                                    </li>
                                </ul>

                            </div>

                            <div class="notification-item position-relative  mb-3">

                                <div class="c-dropdown text-right">
                                    <span id="c-dropdonbtn2" class="c-dropbtn mr-2"><i class="flaticon-dots"></i></span>
                                    <div class="c-dropdown-content">
                                        <div class="c-dropdown-item">View</div>
                                        <div class="c-dropdown-item">Delete</div>
                                    </div>
                                </div>
                                
                                <h6 class="mb-1">Very long description...</h6>
                                <p><span class="meta-time">5 minutes ago</span> . <span class="meta-member-notification">5 members</span></p>
                                <ul class="list-inline badge-collapsed-img mt-3">
                                    <li class="list-inline-item chat-online-usr">
                                        <img alt="admin-profile" src="../styles/admin/assets/img/90x90.jpg" class="ml-0">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img alt="admin-profile" src="../styles/admin/assets/img/90x90.jpg">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img alt="admin-profile" src="../styles/admin/assets/img/90x90.jpg">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img alt="admin-profile" src="../styles/admin/assets/img/90x90.jpg">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img alt="admin-profile" src="../styles/admin/assets/img/90x90.jpg">
                                    </li>
                                </ul>

                            </div>

                            <div class="notification-item position-relative  mb-3">
                                <div class="c-dropdown text-right">
                                    <span class="c-dropbtn mr-2"><i class="flaticon-dots"></i></span>
                                    <div class="c-dropdown-content">
                                        <div class="c-dropdown-item">View</div>
                                        <div class="c-dropdown-item">Delete</div>
                                    </div>
                                </div>
                                
                                <h6 class="mb-1">New item are in queue</h6>
                                <p><span class="meta-time">25 minutes ago</span> . <span class="meta-member-notification">3 members</span></p>
                                <ul class="list-inline badge-collapsed-img mt-3">
                                    <li class="list-inline-item chat-online-usr">
                                        <img alt="admin-profile" src="../styles/admin/assets/img/90x90.jpg" class="ml-0">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img alt="admin-profile" src="../styles/admin/assets/img/90x90.jpg">
                                    </li>
                                    <li class="list-inline-item chat-online-usr">
                                        <img alt="admin-profile" src="../styles/admin/assets/img/90x90.jpg">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </a>
                    <a class="footer dropdown-item text-center p-2">
                        <span class="mr-1">View All</span>
                        <div class="btn btn-gradient-warning rounded-circle"><i class="flaticon-arrow-right flaticon-circle-p"></i></div>
                    </a>
                </div>
            </li>
        </ul>
    </header>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container sidebar-closed sbar-open" id="container">
        <div class="overlay show"></div>
        <div class="cs-overlay"></div>


        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title" style="margin-top: 0">

                    </div>
                </div>

                <div class="chat-section layout-spacing">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-4 mb-md-0 mb-5">
                            <div class="card usr-profile">
                                <div class="card-body text-center">

                                    <div class="usr-profile-section pb-5">
                                        <div class="usr-img">
                                            <img alt="admin-profile" src="../styles/admin/assets/img/100x100.jpg" class="img-fluid">
                                        </div>
                                        <h4 class="usr-name mt-3">Alma Clarke</h4>
                                        <p class="usr-email mt-3">alma.clarke@mail.com</p>
                                        <div class="options mt-4">
                                            <i class="flaticon-gear-5"></i>
                                            <i class="flaticon-mail-fill"></i>
                                            <i class="flaticon-bell-14"></i>
                                        </div>
                                    </div>

                                    <div class="usr-media-files text-left mt-4 pb-3">
                                        <h4>Media (6)</h4>
                                        <ul class="list-inline text-center">
                                            <li class="list-inline-item">
                                                <img class="" src="../styles/admin/assets/img/90x90.jpg" alt="Generic placeholder image">
                                            </li>
                                            <li class="list-inline-item">
                                                <img class="" src="../styles/admin/assets/img/90x90.jpg" alt="Generic placeholder image">
                                            </li>
                                            <li class="list-inline-item">
                                                <img class="" src="../styles/admin/assets/img/90x90.jpg" alt="Generic placeholder image">
                                            </li>
                                            <li class="list-inline-item">
                                                <img class="" src="../styles/admin/assets/img/90x90.jpg" alt="Generic placeholder image">
                                            </li>
                                            <li class="list-inline-item">
                                                <img class="" src="../styles/admin/assets/img/90x90.jpg" alt="Generic placeholder image">
                                            </li>
                                            <li class="list-inline-item">
                                                <img class="" src="../styles/admin/assets/img/90x90.jpg" alt="Generic placeholder image">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8 col-md-8">
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-5 col-md-5">
                                            <div class="status-list-section pr-md-4">
                                                <div class="mb-5 pb-4 search-form">
                                                    <form class="form-inline">
                                                        <input class="form-control w-100" type="search" placeholder="Search" aria-label="Search">
                                                    </form>
                                                </div>
                                                <ul class="list-unstyled">
                                                </ul>

                                                <div class="template-list-users d-none">
                                                    <li class="chat-messages-template media online pb-4 pt-4" id="">
                                                        <div class="media-body">
                                                            <h5 class="mt-0 mb-1 name-user"></h5>
                                                            <p class="usr-status"></p>
                                                        </div>
                                                        <span class="message-badge single-value d-none"></span>
                                                        <img class="ml-3" src="../styles/admin/assets/img/90x90.jpg" alt="Generic placeholder image">
                                                    </li>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-lg-7 col-md-7">
                                            <div class="mail-chat-system">
                                                <div class="chat_window">
                                                    <div class="row top_menu">
                                                        <div class="col-md-12 add-chat">
                                                            <button class="btn btn-gradient-warning btn-rounded"><i class="flaticon-chat-fill-1"></i> New Chat</button>
                                                            <div class="options float-xl-right float-md-left float-sm-right d-block">
                                                                <i class="flaticon-settings-7 mt-xl-0 mt-md-3 mt-sm-0 mt-3"></i>
                                                                <i class="flaticon-email-fill  mt-xl-0 mt-md-3 mt-sm-0 mt-3"></i>
                                                                <i class="flaticon-copy-document  mt-xl-0 mt-md-3 mt-sm-0 mt-3"></i>
                                                                <i class="flaticon-delete-can-fill-2  mt-xl-0 mt-md-3 mt-sm-0 mt-3"></i>
                                                                <i class="flaticon-share-4  mt-xl-0 mt-md-3 mt-sm-0 mt-3"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="chat-messages pl-0">

                                                    </ul>
                                                    <div class="chat-bottom-section clearfix">
                                                        <div class="input-group mb-3 message_input_wrapper">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="flaticon-link-2"></i></span>
                                                                <span class="input-group-text"><i class="flaticon-happy-smiling"></i></span>
                                                            </div>
                                                            <label>
                                                                <input type="text" class="message_input form-control" id="new_message" placeholder="Type here...">
                                                            </label>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text br-0"><i class="flaticon-send-fill-1"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="message_template d-none">
                                                    <div class="message">
                                                        <div class="text_wrapper">
                                                            <div class="text"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--  END CONTENT PART  -->
    </div>
    <!-- END MAIN CONTAINER -->
    
    <!--  BEGIN FOOTER  -->
    <footer class="footer-section theme-footer">

        <div class="footer-section-1  sidebar-theme" style="width: 0">
            
        </div>

        <div class="footer-section-2 container-fluid">
            <div class="row">
                <div id="toggle-grid" class="col-xl-7 col-md-6 col-sm-6 col-12 text-sm-left text-center">

                </div>
                <div class="col-xl-5 col-md-6 col-sm-6 col-12">
                    <ul class="list-inline mb-0 d-flex justify-content-sm-end justify-content-center mr-sm-3 ml-sm-0 mx-3">
                        <li class="list-inline-item  mr-3">
                            <p class="bottom-footer">&#xA9; 2020 </p>
                        </li>
                        <li class="list-inline-item align-self-center">
                            <div class="scrollTop"><i class="flaticon-up-arrow-fill-1"></i></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--  END FOOTER  -->
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="../styles/admin/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="../js/cookie.js"></script>
    <script src="../styles/admin/bootstrap/js/popper.min.js"></script>
    <script src="../styles/admin/bootstrap/js/bootstrap.min.js"></script>
    <script src="../styles/admin/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../styles/admin/assets/js/app.js"></script>
    
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="../styles/admin/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="../styles/admin/assets/js/apps/custom-mailbox.js"></script>
    <!-- <script src="list-users.js"></script> -->
    <script src="mailbox-chat.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
</body>
</html>