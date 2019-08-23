<?php require_once("common/header.php"); ?>

<div id="loginPage" style="margin-auto; text-align:center;">
	<div class="loginContainer">
		<img class="logo mb-4" src="images/logo.svg"/>

		<div class="mb-3">
			<input class="loginInputField" placeholder="UserName" id="login" type="text"></input>
		</div>

		<div>
			<input class="loginInputField" placeholder="EmailAddress" id="email" type="text"></input>
		</div>

		<div class="mt-3 text-center">
			<button class="loginButton mr-4" id="SingInBtn" onclick="signInUser()">REGISTER</button>
			<button class="loginButton" id="SignUpBtn" onclick="signUpUser()">LOGIN</button>
		</div>
	</div>
</div>

<?php require_once("common/footer.php"); ?>
