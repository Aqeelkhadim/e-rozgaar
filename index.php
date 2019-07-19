<!--<html>-->
<!--<form action="login_process.php" method="post">-->
<!--	email<input type="text" name="email">-->
<!--	password<input type="password" name="pass">-->
<!--	<input type="submit" name="">-->
<!--</form>-->
<!---->


<!DOCTYPE html>
<html lang="en">
<head>
    <title>All island Neurology Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="util.css">
    <link rel="stylesheet" type="text/css" href="main.css">
    <script src="main.js"></script>
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
            <form class="form-horizontal login100-form validate-form flex-sb flex-w" method="POST"
                  action="login_process.php">
                <span class="login100-form-title p-b-32">
						Account Login
					</span>

                <span class="txt1 p-b-11">
						Email
					</span>
                <div class="wrap-input100 validate-input m-b-36" data-validate="Username is required">
                    <input id="email" type="email" class="form-control input100" name="email"  placeholder="Please enter login-id for login" required >
                </div>

                <span class="txt1 p-b-11">
						Password
					</span>
                <div class="wrap-input100 validate-input m-b-12" data-validate="Password is required">
                    <input id="password" type="password" class="form-control input100" name="pass" placeholder="please enter password" required>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>

</body>
</html>

