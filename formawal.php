<?php 
session_start();
error_reporting(0);
	$user = array(
					"user" => "Deshinta",
					"pass"	=> "jurnal"
				);
	if(isset($_POST['submit'])){
		if($_POST['username']==$user['user']&& $_POST['pass']==$user['pass']){

			$_SESSION["username"]=$_POST['username'];
			echo "Selamat,Login Berhasil";
		}else{
			display_login_form();
			echo "<p> Username atau Password Anda Salah </p>";
		}
	}
	else{
		display_login_form();
	}
	function display_login_form(){?>
		<form action="proses.php" method="POST">
		<label for="username">Username : </label>
		<input type="text" name="username" id="username"><br><br>
		<label for="passord">Password :</label> 
		<input type="password" name="password" id="password">
		<br><br>
		<input type="submit" name="submit" value="Login">
	</form>

<?php } ?>
