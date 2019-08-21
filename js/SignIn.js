let signInUser = function() {
    let loginInput = document.getElementById('login').value;
    let emailInput = document.getElementById('email').value;

    function submitData() {
        $.ajax({
            type: "GET",
            url: "https://gustavomonteiro.pt/counterapp/api/Login/loginUser.php" ,
            data: {
                login: loginInput,
                email: emailInput,
            },
            success: function(data){
              results = JSON.parse(data);
              setCookie('userInfo', JSON.stringify(results));
				setUserData();
              location.assign("./main.php");
              },
        });

    }
    submitData();
}
