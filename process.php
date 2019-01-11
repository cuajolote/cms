<?php include "includes/database.php" ?>
<?php
    $user = $_POST['username'];
    mysqli_real_escape_string($user);
    $pass = $_POST['password'];
	$tag = $_POST['tag'];
	if (isset($tag) && $tag !== '') {
		if ($tag == 'login') {
            $query = "SELECT * FROM users WHERE users_username LIKE '%$user%'";
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