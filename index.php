<?php require_once("common/header.php"); ?> 

<div style="width:100%; height:100px;">
    <div style="margin-auto; text-align:center;">
      <h1>Counter App!</h1>
      <p id="showCount"></p>

      <div style="margin-bottom:20px;">
        <div style="display:inline-block; margin-right:20px;">
          <span>Login: </span>
          <input id="login" type="text"></input>
        </div>

        <div style="display:inline-block">
          <span>Email: </span>
          <input id="email" type="text"></input>
        </div>
      </div>

      <button id="SingInBtn" onclick="signInUser()">Sign In</button>
      <button id="SignUpBtn" onclick="signUpUser()">Sign Up</button>
    </div>
  </div>

<?php require_once("common/footer.php"); ?> 