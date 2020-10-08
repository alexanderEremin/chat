<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Chat Application | Equation - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="../styles/guess/assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link href="../styles/guess/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../styles/guess/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="../styles/guess/assets/css/apps/mailing-chat.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
</head>
<body>
    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container sidebar-closed sbar-open" id="container">
        <div class="overlay show"></div>
        <div class="cs-overlay"></div>


        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="container">
                <div class="chat-section layout-spacing">
                    <div class="row">
                        <div class="col-xl-8 col-lg-6 col-md-8">
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-5 col-md-5">
                                            <div class="status-list-section pr-md-4">
                                                <ul class="list-unstyled">
                                                    <li class="media online pb-4 pt-4">
                                                        <div class="media-body">
                                                            <h5 class="mt-0 mb-1" id="user_name"> Administrator</h5>
                                                            <p class="usr-status" id="user_status">online</p>
                                                        </div>
                                                        <img class="ml-3" src="../styles/guess/assets/img/90x90.jpg" alt="Generic placeholder image">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-lg-7 col-md-7">
                                            <div class="mail-chat-system">
                                                <div class="chat_window">
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
                                                        <div class="avatar"></div>
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
    <script src="../styles/guess/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="../js/cookie.js"></script>
    <script src="../styles/guess/bootstrap/js/popper.min.js"></script>
    <script src="../styles/guess/bootstrap/js/bootstrap.min.js"></script>
    <script src="../styles/guess/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../styles/guess/assets/js/app.js"></script>
    
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="../styles/guess/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="../styles/guess/assets/js/apps/custom-mailbox.js"></script>
    <script src="../js/cookie.js"></script>
    <script src="chat.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
</body>
</html>