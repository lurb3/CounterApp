let insertOpt = function(selectName) {
    let newOpt = prompt('Enter a name for the new thing:');

    if(newOpt) {
        
        let newValue = new Option(newOpt, newOpt);

        if(userData[selectName]) {
            let insert = true;
            for(i=0; i<userData[selectName].length;i++) {
                if(userData[selectName][i]['name'] == newValue.value) {
                    insert = false;
                }
            }

            if(insert) {
                $('select[name='+selectName+']').append(newValue);
            }
        } else {
            $('select[name='+selectName+']').append(newValue);
        }

        (function insertNewOpt(){
            $.ajax({
                type: "GET",
                url: "./common/saveOpt.php" ,
                data: { 
                    userid: userData.userid,
                    type: selectName,
                    name: newValue.value,
                },
                success: function(data){
                    //location.assign("./Login/registerUser.php?login="+loginInput+"&email="+emailInput);
                   console.log("New record");
                  },
            });
        })();
    }

}

let fillOpt = function() {
    if(userData.categories) {
        let categoriesOption = document.getElementById('categories');
        for(i=0; i<userData.categories.length; i++) {
            let newValue = new Option(userData.categories[i].name, userData.categories[i].name);
            $(categoriesOption).append(newValue);
        }
    }

    if(userData.subjects) {
        let subjectOption = document.getElementById('subjects');
        for(i=0; i<userData.subjects.length; i++) {
            let newValue = new Option(userData.subjects[i].name, userData.subjects[i].name);
            $(subjectOption).append(newValue);
        }
    }
}
