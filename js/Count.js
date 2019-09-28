
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
    let dataPass = {
	    time: countTime,
	    user: userData.userid,
    }

    let categories = document.getElementById("categories");
    categories = categories.options[categories.selectedIndex].value;

    if(categories != 'New') {
	    dataPass['categories'] = categories;
    }

    let subject = document.getElementById("subjects");
    subject = subject.options[subject.selectedIndex].value;

    if(subject != 'New') {
	    dataPass['subject']  = subject;
    }

	$.ajax({
	type: "POST",
	url: "https://gustavomonteiro.pt/counterapp/api/saveTime/saveTime.php" ,
	dataPass,
	success : function() { 
		console.log(dataPass);
	}
	});
}