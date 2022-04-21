<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
</head>

<body>

    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter name">
        <input type="email" name="email" placeholder="Enter email">
        <input type="password" name="password" placeholder="Enter password">
        <input type="submit" value="Save Details">
    </form>


    <?php
        session_start();
        
        if( isset( $_POST['name'] ) ){
            $_SESSION['name'] = $_POST['name'];
        }

        if( isset( $_POST['email'] ) ){
            $_SESSION['email'] = $_POST['email'];
        }

        if( isset( $_POST['password'] ) ){
            $_SESSION['password'] = $_POST['password'];
            echo "Register Successfully!!!";
        }

        // echo "Register Successfully!!!";
    ?>

</body>

</html>