
let isCounting = false;
let startCounting = function() {
    if(isCounting == false) {
        isCounting = true;
        let countTime = 0;
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
    
}