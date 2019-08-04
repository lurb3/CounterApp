let signInUser = function() {
    let loginInput = document.getElementById('login').value;
    let emailInput = document.getElementById('email').value;

    function submitData() {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

          var myObj = JSON.parse(this.responseText);
          console.log(myObj);

          if(myObj.status == 'Success') {
            location.replace("./main.php");
          }

        } else {
          console.log("nope");
        }
      };
      xmlhttp.open("GET", "./Login/loginUser.php?login=" + loginInput + "&email=" + emailInput , true);
      xmlhttp.send();
    }
    submitData();
}