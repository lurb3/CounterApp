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

let totalTime = function() {
    let sum = 0;

	for(i=0; i<userData.subjects.length; i++) {
		sum += Number(userData.subjects[i].time);
	}
  
	for(i=0; i<userData.categories.length; i++) {
		sum += Number(userData.categories[i].time);
	}
	return sum;
}

let totalElem = document.getElementById("totalTime");
totalElem.innerHTML += totalTime() + ' seconds';