<?php include "includes/database.php";

    $user = mysqli_real_escape_string($connection,$_POST['username']);
    $pass = $_POST['password'];
	$tag = $_POST['tag'];
	if (isset($tag) && $tag !== '') {
		if ($tag == 'login') {
            $query = "SELECT * FROM users WHERE users_username = '$user'";
            $result = mysqli_query($connection,$query);
            $row = mysqli_fetch_assoc($result);
            if ($user === $row['users_username'] && $pass === $row['users_password']){
                echo true;
            }else {
                echo false;
            }
           
            
		}
	}
?>