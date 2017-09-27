<?php
  session_start();
  include 'connection.php';
	if(isset($_POST["submit"])){
		if(!empty($_POST['user']) && !empty($_POST['passwd'])) {
			$user=$_POST['user'];
			$pass=$_POST['passwd'];
			echo $user;
			echo $pass;
			$query=mysqli_query($conn, "SELECT * from user where username ='".$user."' and password='".$pass."';");
			
			if (mysqli_num_rows($query)==1)
			{
				$row=mysqli_fetch_assoc($query);
				$_SESSION['ID'] = $row['username'];
				$_SESSION['name'] = $row['name'];
				header("Location: ../main.php");
			} else {
				$_SESSION['errMsg'] = "Invalid username or password";
				header("Location: ../login.php");
			}
		} else {
			$_SESSION['errMsg'] = "Please insert your user or pass";
			header("Location: ../login.php");
		}
	}
?>