<?php require_once("common/header.php"); ?>
<div class="container">
	<div class="row">
		<div class="col-12" id="loginPage" style="margin-auto; text-align:center;">
			<div class="loginContainer">
				<img class="logo mb-4" src="images/logo.svg"/>

				<div class="mb-3">
					<input class="loginInputField" placeholder="UserName" id="login" type="text"></input>
				</div>

				<div>
					<input class="loginInputField" placeholder="EmailAddress" id="email" type="text"></input>
				</div>

				<div class="mt-3 text-center">
					<button class="loginButton mr-4" id="SignUpBtn" onclick="signUpUser()">REGISTER</button>
					<button class="loginButton" id="SingInBtn" onclick="signInUser()">LOGIN</button>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require_once("common/footer.php"); ?>
