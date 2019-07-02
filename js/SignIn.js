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
                console.log(JSON.parse(data));
              },
              error: function(data){
                console.log(JSON.parse(data));
              },
        });
    }
    submitData();
}