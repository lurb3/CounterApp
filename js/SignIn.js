let signInUser = function() {
    let loginInput = document.getElementById('login');
    let emailInput = document.getElementById('email');

    function submitData() {
        $.ajax({
            type: "GET",
            url: "./Login/loginUser.php" ,
            data: { 
                login: loginInput,
                email: emailInput,
            },
            success : function() { 
                location.assign("../main.php");
            }
        });
    }
    submitData();
}