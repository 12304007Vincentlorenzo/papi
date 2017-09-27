<?php 
session_start(); 
if(empty($_SESSION['ID'])) {?>
<html>
	<head>
		<title>Jaya Makmur Abadi</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="stylesheet" href="main.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-grid.min.css">
		<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
		<link rel="stylesheet" href="css/login.css">
	</head>
	<body>
		<!--<div class="container">
			<form class="form-signin">
				<h2 class="form-signin-heading">Please sign in</h2>
				<label for="inputEmail" class="sr-only">Email address</label>
				<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
				<label for="inputPassword" class="sr-only">Password</label>
				<input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
				<div class="checkbox">
					<label>
						<input type="checkbox" value="remember-me"> Remember me
					</label>
				</div>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
			</form>
		</div>-->
		<div id="fullscreen_bg" class="fullscreen_bg"/>
		<div class="container">
			<form class="form-signin" id='login' action='logic/dologin.php' method='post' accept-charset='UTF-8'>
				<h1 class="form-signin-heading">Sign In</h1>
				<input type="text" class="form-control" name="user" placeholder="Username" required="" autofocus="">
				<input type="password" class="form-control" name="passwd" placeholder="Password" required="">
				<div id="errMsg">
					<?php if(!empty($_SESSION['errMsg'])) {?> <span style="color:red; font-size:11px; padding-left:175px;"> <?php echo $_SESSION['errMsg'];?> </span> <?php } ?>
				</div>
				<?php unset($_SESSION['errMsg']); ?>
				<button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">
					Sign In
				</button>
			</form>
		</div>
	</body>
</html>
<?php }else{header("Location: teamregis.php");} ?>