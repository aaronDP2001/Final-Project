<?php
ob_start ();
session_start();
require "php/config.php";
require_once "php/functions.php";
$user = new login_registration_class();

?>

<?php 
$pageTitle = "Student login";
include "header.php";
?>
    <script type="text/javascript">
      window.history.forward();
    </script>
	<div class="loginform fix">
		<div class="msg "><h3><i class="fa fa-user" aria-hidden="true"></i> Student login</h3></div>
		<div class="access">
		
			<?php
			if($_SERVER['REQUEST_METHOD'] == "POST"){
						$username = $_POST['user'];
						$psw  = $_POST['psw'];

						if(empty($username) or empty($psw)){
							echo "<p style='color:red;text-align:center;'>Field must not be empty.</p>";
						}else{
							$psw = md5($psw);
							$login = $user->fct_login($username, $psw);
							if($login){
								header('Location: index2.php');
							}else{
								echo "<p style='color:red;text-align:center'>Incorrect Username or password</p>";
							}
						}
					}
				?>
				
			<form action="" method="post">
				<input type="text" name="user" placeholder="Username" />
				<input type="password" name="psw" placeholder="Password" />
				<input style="color:#ddd;background:#3498db" type="submit" value="Login" />
			</form>
		</div>
		<p >Not Registered? <a href="stt_reg.php">Create an account</a></p>
	</div>

<?php
 include "footer.php"; 
  ob_end_flush() ; 
?>