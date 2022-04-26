
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/lstyle.css">
    <title>Document</title>
</head>
<body>
    <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="box">
            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>
            <div class="container">
                <div class="form">
                    <h2>Login Form</h2>
                    <form method="post" action="loginCredential.php">
                        <div class="inputBox">
                            <input type="text" placeholder="Username" name="txtUsername-chk" >
                        </div>
                        <div class="inputBox">
                            <input type="password" placeholder="Password" name="txtPassword-chk">
                        </div>
                        <div class="inputBox">
                            <input type="submit" value="LogIn"">
                        </div>
                        <p class="forget">Forgot Password ? <a href="#">Click Here</a></p>
                        <p class="forget">Don't have an account ? <a href="#">Sign up</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>