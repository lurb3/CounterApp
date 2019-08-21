
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

    let categories = document.getElementById("categories");
    categories = categories.options[categories.selectedIndex].value;

    let subject = document.getElementById("subject");
    subject = subject.options[subject.selectedIndex].value;

	$.ajax({
	type: "POST",
	url: "https://gustavomonteiro.pt/counterapp/api/saveTime/saveTime.php" ,
	data: { 
		time: countTime,
		user: userData.userid,
		categories: categories,
		subject: subject,
	},
	success : function() { 
		location.reload();
	}
	});
}