
let isCounting = false;
let countTime = 0;
let startCounting = function() {
    if(isCounting == false) {
        isCounting = true;
        let el = document.getElementById('showCount');
        let cancel;

        let incrementSeconds = function() {
            countTime += 1;
            el.innerText = "You have been working for " + countTime + " seconds.";
        }
        cancel = setInterval(incrementSeconds, 1000);
    }  
}

let saveCounting = function() {
    isCounting = false;
    function submitData() {
        // function below will run clear.php?h=michael
        $.ajax({
            type: "GET",
            url: "./common/saveData.php" ,
            data: { time: countTime },
            success : function() { 

                location.reload();

            }
        });
    }
    submitData();
}