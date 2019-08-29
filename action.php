<?php
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $age = $_POST['age'];
    $email = $_POST['emails'];
    $gender = $_POST['gender'];
    $province = $_POST['select'];
    $interest = $_POST['interest'];
    $meass = $_POST['message'];
    echo $user ."</br>";
    echo $pass;
    echo $age;
    echo $email;
    echo $gender;
    echo $province;
    echo $meass;
    foreach($interest as $value) {
        echo $value;
    }
    if(isset($_POST["submit"])) {
        $pictureName = $_FILES["pic"]["name"];
        $pictureLocation = $_FILES["pic"]["tmp_name"];
        move_uploaded_file($pictureLocation,'image/'. $pictureName);
        echo "<img src ='image/$pictureName'/>";
    }
?>