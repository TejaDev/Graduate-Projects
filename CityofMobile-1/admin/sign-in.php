<?php
include("header-login.php");

?>

<div id="page-wrapper" class="sign-in-wrapper">
				<div class="graphs">
					<div class="sign-in-form">
						<div class="sign-in-form-top">
							<p><span>Sign In to</span> <a href="index.html">Admin</a></p>
						</div>
						<div class="signin">
							
							<form action="sessionlogin.php" method="post">
							<div class="log-input">
								<div class="log-input-left">
								   <input type="text" name="txtusername" class="user" value="Yourname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email address:';}"/>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="log-input">
								<div class="log-input-left">
								   <input type="password" name="txtpassword" class="lock" value="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email address:';}"/>
								</div>
								<div class="clearfix"> </div>
							</div>
							<input type="submit" value="Login to your account" name="btnlogin">
						</form>	 
						</div>
						
					</div>
				</div>
			</div>
<?php
include("footer.php");
?>