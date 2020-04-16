<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <title>Registration Form</title>
</head>
<body>
	<div class="h2">LITKINDOM</div>
    <div class="signup-form">
        <h1>SignUp Form</h1>
        <div class="txt">
            <form action="process.php" method="POST">
                <i class="fa fa-user"></i>
                <input type="text" placeholder="UserName" name="Uname">
        </div>
        <div class="txt">
            <i class="fa fa-envelope"></i>
            <input type="email" placeholder="Email" name="Email">
        </div>
        <div class="txt">
            <i class="fa fa-lock"></i>
            <input type="password" placeholder="Password" name="Password">
        </div>
        <div class="txt">
            <i class="fa fa-lock"></i>
            <input type="password" placeholder="Confirm Password" name="CPassword">
        </div>
            <button class="btn" name="btn">Signup</button>
        </form>

    </div>
    
</body>
</html>