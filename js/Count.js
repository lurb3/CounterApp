
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
    let selectedUser = document.getElementById("selectedUser");
    let category = document.getElementById("category");
    let subject = document.getElementById("subject");
    function submitData() {
        // function below will run clear.php?h=michael
        $.ajax({
            type: "GET",
            url: "./common/saveData.php" ,
            data: { 
                time: countTime,
                user: selectedUser.options[selectedUser.selectedIndex].value,
                category: category.options[category.selectedIndex].value,
                subject: subject.options[subject.selectedIndex].value,
            },
            success : function() { 
                location.reload();
            }
        });
    }
    submitData();
}

$('select[name=things]').change(function() {

});

let insertOpt = function(selectName) {
        let newCategory = prompt('Enter a name for the new thing:');
        let newValue = new Option(newCategory, newCategory);
        $('select[name='+selectName+']').append(newValue);
}