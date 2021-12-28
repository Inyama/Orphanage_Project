<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/flexboxgrid.css">
</head>
<body>
    <header role="banner">
        <h1>Log in</h1>
    </header>
    
    <hr>
    <?php
        include_once('actions/controller.php');
    ?>

    <main role="main" class="main">
        <center><?php echo isset($resp) ? $resp : ''; ?></center>
        <form id="login-form" action="" method="post">
            <dl>
                <div class="flex">
                    <dt><label for="login-email">Email address</label></dt>
                    <dd>
                        <input type="email" id="email" name="email" id="login-email" placeholder="User Email" class="space" />
                        <!-- <span id="email-error" class="error-msg">Please insert a email address</span> -->
                    </dd>
                </div>

                <div class="flex height">
                    <dt><label for="login-password" class="shift">Password</label></dt>
                    <dd>
                        <input type="password" id="password" name="password" id="login-password" placeholder="User Password" class="space" />
                        <!-- <span id="password-error" class="error-msg">Please insert a password</span> -->
                    </dd>
                </div>
            </dl>
            <p><a href="index.php"><input type="submit" name="login-submit" id="login-submit" value="Log In" class="login" /></a></p>
        </form>
        <!-- <div id="msg" class="text-center"></div> -->
    </main>
    
    <hr>

    <footer role="contentinfo">
        <p>Lorem ipsum dolor sit amet... &copy; 2020</p>
    </footer>
    
    <script src="js/jquery.js"></script>
    <script src="form.js"></script>
</body>
<!-- <script src="welcome.js"></script> -->
</html>