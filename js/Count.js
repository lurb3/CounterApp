
let isCounting = false;
let countTime = 0;
let startCounting = function() {
    if(isCounting == false) {
        isCounting = true;
        let counterText = document.getElementById('showCount');
        let cancel;

        let incrementSeconds = function() {
            countTime += 1;
            counterText.innerText = "You have been working for " + countTime + " seconds.";
        }
        cancel = setInterval(incrementSeconds, 1000);
    }  
}

let saveCounting = function() {
    isCounting = false;

    let category = document.getElementById("category");
    category = category.options[category.selectedIndex].value;

    let subject = document.getElementById("subject");
    subject = subject.options[subject.selectedIndex].value;


    function submitData() {
        $.ajax({
            type: "GET",
            url: "./common/saveData.php" ,
            data: { 
                time: countTime,
                user: arrayFromPhp['userid'],
                category: category,
                subject: subject,
            },
            success : function() { 
                location.reload();
            }
        });
    }
    submitData();
}