<?php
session_start();

if (isset($_SESSION['usuario'])) {
    header("Location: ../dashboard");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once("../layouts/head.php"); ?>
    </head>
    <body class="page-body login-page">


        <div class="login-container">

            <div class="row">

                <div class="col-sm-6">

                    <script type="text/javascript">
                        jQuery(document).ready(function ($)
                        {
                            // Reveal Login form
                            setTimeout(function () {
                                $(".fade-in-effect").addClass('in');
                            }, 1);


                            // Validation and Ajax action
                            $("form#login").validate({
                                rules: {
                                    username: {
                                        required: true
                                    },
                                    passwd: {
                                        required: true
                                    }
                                },
                                messages: {
                                    username: {
                                        required: 'Please enter your username.'
                                    },
                                    passwd: {
                                        required: 'Please enter your password.'
                                    }
                                },
                                // Form Processing via AJAX
                                submitHandler: function (form)
                                {
                                    show_loading_bar(70); // Fill progress bar to 70% (just a given value)

                                    var opts = {
                                        "closeButton": true,
                                        "debug": false,
                                        "positionClass": "toast-top-full-width",
                                        "onclick": null,
                                        "showDuration": "300",
                                        "hideDuration": "1000",
                                        "timeOut": "5000",
                                        "extendedTimeOut": "1000",
                                        "showEasing": "swing",
                                        "hideEasing": "linear",
                                        "showMethod": "fadeIn",
                                        "hideMethod": "fadeOut"
                                    };

                                    $.ajax({
                                        url: "../../login_check.php",
                                        method: 'POST',
                                        data: {
                                            do_login: true,
                                            username: $(form).find('#username').val(),
                                            passwd: $(form).find('#passwd').val(),
                                        },
                                        success: function (resp)
                                        {
                                            show_loading_bar({
                                                delay: .5,
                                                pct: 100,
                                                finish: function () {

                                                    //console.log(resp);
                                                    // Redirect after successful login page (when progress bar reaches 100%)
                                                    if ($.trim(resp) == 'success!') {
                                                        window.location.href = '../dashboard/';
                                                    } else {
                                                        toastr.error("You have entered wrong password, please try again. User and password is strong>demo/demo</strong> :)", "Invalid Login!", opts);
                                                        $(form).find('#passwd').select();
                                                    }
                                                }
                                            });

                                        }
                                    });

                                }
                            });

                            // Set Form focus
                            $("form#login .form-group:has(.form-control):first .form-control").focus();
                        });
                    </script>

                    <!-- Errors container -->
                    <div class="errors-container">


                    </div>

                    <!-- Add class "fade-in-effect" for login form effect -->
                    <form method="post" role="form" id="login" class="login-form fade-in-effect">

                        <div class="login-header">
                            <a href="../dashboard/" class="logo">
                                <img src="../../resources/xenon-theme/images/logo@2x.png" alt="" width="80" />
                                <span>log in</span>
                            </a>

                            <p>Dear user, log in to access the admin area!</p>
                        </div>


                        <div class="form-group">
                            <label class="control-label" for="username">Username</label>
                            <input type="text" class="form-control input-dark" name="username" id="username" autocomplete="off" />
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="passwd">Password</label>
                            <input type="password" class="form-control input-dark" name="passwd" id="passwd" autocomplete="off" />
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-dark  btn-block text-left">
                                <i class="fa-lock"></i>
                                Log In
                            </button>
                        </div>

                        <div class="login-footer">
                            <a href="#">Forgot your password?</a>

                            <div class="info-links">
                                <a href="#">ToS</a> -
                                <a href="#">Privacy Policy</a>
                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

        <?php require_once("../layouts/bottom.php"); ?>

    </body>
</html>