<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="myfile">
        <input type="submit" value="Upload">
    </form>

    <?php
        define("PROJECT_DIR", dirname(__FILE__));


        /**
         * To delete the file
         */
        if( unlink( PROJECT_DIR . "/forsell.png" ) ){
            echo "File Deleted sucessfully!!!";
        }


        /**
         * To check file exists
         */
        if( file_exists( PROJECT_DIR . "/forsell.png" ) ){
            echo "File Exists!!!";
        }


        if( isset( $_FILES['myfile'] ) ){

            /**
             * Upload >> PHP - Temporary file upload >> return file data >> upload to required destination using that temporary file
             * 
             * 
             * array(
             *      'name' => file name,
             *      'tmp_name' => temporary name whether file has been uploaded in php,
             *      'size' => file size,
             *      'error' => ,
             *      'type' => 'image/png', 'image/jpeg'
             * )
             */

            $temp_file = $_FILES['myfile']['tmp_name'];
            $filename = $_FILES['myfile']['name'];

            $destination = PROJECT_DIR . "/$filename";

            if( move_uploaded_file($temp_file, $destination) ){
                echo "Uploaded Successfully!!!";
            }else{
                echo "Something went wrong while uploading!!!";
            }
        }
    ?>

</body>
</html>