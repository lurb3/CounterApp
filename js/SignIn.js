let signInUser = function() {
    let loginInput = document.getElementById('login').value;
    let emailInput = document.getElementById('email').value;

    function submitData() {
        $.ajax({
            type: "GET",
            url: "./Login/loginUser.php" ,
            data: { 
                login: loginInput,
                email: emailInput,
            },
            success: function(data){
                let receiveRequest = JSON.parse(data);
                if(receiveRequest.status == 'success') {
                  location.assign("./main.php");
                } else {
                  alert("Wrong credentials");
                }
              },
        });
    }
    submitData();
}