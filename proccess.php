<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php
    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $fileName = $_FILES['file']['name'];
        $fileLocation = $_FILES['file']['tmp_name'];
        move_uploaded_file($fileLocation, "image/".$fileName);
            echo "Username:" . $username ."<br>";
            echo "Password:" . $password ."<br>";
            echo "<img src='image/$fileName'>";
    }
?>