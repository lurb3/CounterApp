let signUpUser = function() {
     let loginInput = document.getElementById('login').value;
     let emailInput = document.getElementById('email').value;
 
     function submitData() {
         $.ajax({
             type: "GET",
             url: "./Login/registerUser.php" ,
             data: { 
                 login: loginInput,
                 email: emailInput,
             },
             success: function(data){
                 let receiveRequest = JSON.parse(data);
                 //location.assign("./Login/registerUser.php?login="+loginInput+"&email="+emailInput);
                console.log(receiveRequest);
               },
         });
     }
     submitData();
 }