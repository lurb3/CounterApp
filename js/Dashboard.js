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
                insertStats(receiveRequest);
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

let insertStats = function(data) {
    let inserData = document.getElementById("inserData");

    userInfo.dashboard = data;

    for(i=0; i< userInfo.dashboard.length; i++) {
        let divElem = document.createElement("DIV");
        divElem.innerHTML = userInfo.dashboard[i].name;
        inserData.appendChild(divElem);
    }
}