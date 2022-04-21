<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>

    <form action="" method="post">
        <input type="email" name="email" placeholder="Enter name">
        <input type="password" name="password" placeholder="Enter password">
        <input type="submit" value="Login">
    </form>

    <?php
        session_start();

        if( isset( $_POST['email'] ) && !empty( $_POST['email'] ) ){
            if( isset( $_POST['password'] ) && !empty( $_POST['password'] ) ){
                
                //validating user
                if( isset( $_SESSION['email'] ) ){

                    if( $_SESSION['email'] == $_POST['email'] && $_SESSION['password'] == $_POST['password'] ){
                        echo "Login Successfully";
                        $_SESSION['login'] = true;
                    }else{
                        if( $_SESSION['email'] != $_POST['email'] ){
                            echo "Incorrect Email Address!!!";
                        }
                        if( $_SESSION['password'] != $_POST['password'] ){
                            echo "Incorrect Password!!!";
                        }
                    }

                }else{
                    echo "Please register first!!!";
                }

            }
        }

        if( isset( $_SESSION['login'] ) ){
            echo "
                <p>Name: {$_SESSION['name']}</p>
                <p>Email: {$_SESSION['email']}</p>

                <a href='http://localhost/learn/logout.php'>Logout</a>
            ";
        }
    ?>

</body>

</html>