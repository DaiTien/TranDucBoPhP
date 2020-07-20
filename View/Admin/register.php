
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
<div class="wrapper">
    <h2>Sign Up</h2>
    <p>Please fill this form to create an account.</p>
    <form action="?c=indexadmin&a=signUp" method="post">
        <div class="form-group ">
            <label>Username</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class="form-group ">
            <label>Password</label>
            <input type="password" name="password" class="form-control" >
        </div>
        <div class="form-group ">
            <label>Confirm Password</label>
            <input type="password" name="confirm_password" class="form-control" >
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Submit">
            <input type="reset" class="btn btn-default" value="Reset">
        </div>
        <p style="color: red">
            <?php
                if (isset($_GET['r']))
                {
                    if ($_GET['r'] == 1)
                    {
                        echo $_GET['action'] . ' Account Thành Công';
                    }else if($_GET['r'] == 2){
                        echo 'Confirm Password Không Đúng, vui lòng đăng ký lại';
                    } else
                    {
                        echo 'UserName bạn đăng ký đã tồn tại, vui lòng đăng ký lại';
                    }
                }
            ?>
        </p>
        <p>Already have an account? <a href="?c=indexadmin&a=index">Login here</a>.</p>
    </form>
</div>
</body>
</html>