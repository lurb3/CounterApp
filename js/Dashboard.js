let getAllStatistics = function() {
    function submitData() {
        let userid = userInfo.user[0].userid;

        $.ajax({
            type: "GET",
            url: "./Dashboard/getStatistics.php" ,
            data: { 
                userid: userid,
            },
            success: function(data){
                let receiveRequest = JSON.parse(data);
                console.log(receiveRequest);
                userInfo.dashboard = receiveRequest;
                /*if(receiveRequest.status == 'success') {
                  console.log("Yeap");
                } else {
                    console.log("Nope");
                }*/
              },
        });
    }
    submitData();
}