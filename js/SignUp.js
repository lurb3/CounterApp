let signUpUser = function() {
     let loginInput = document.getElementById('login').value;
     let emailInput = document.getElementById('email').value;
         $.ajax({
             type: "POST",
             url: "https://gustavomonteiro.pt/counterapp/api/Login/registerUser.php" ,
             data: { 
                 login: loginInput,
                 email: emailInput,
             },
             success: function(data){
               },
         });
 }