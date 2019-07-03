let insertOpt = function(selectName) {
    let newCategory = prompt('Enter a name for the new thing:');

    if(newCategory) {

        let flag = false;

        /*
            TODO :
                \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

                ***** Fix this part *****
                
                Get a solution to loop categories / subjects

                    - Make ajax call;
                    - read select options;
                    - insert data into userInfo object;
                    - Or any other solution

                Solution:
                    
                    - Create a sub page to create categories / subjects
                    - On this page user should be able to insert several categories / subjects

                \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
        */

        for(i=0; i<userInfo[selectName].length; i++) {

            if(newCategory != userInfo[selectName][i].name) {
                flag = true;
            } else {
                alert("Category already exists");
                flag = false;
                break;
            }
        }

        if(flag) {
            let newValue = new Option(newCategory, newCategory);
            $('select[name='+selectName+']').append(newValue);
            userInfo[selectName];
            fillOpt();
        }

    }

}

let fillOpt = function() {
    let categoryOption = document.getElementById('category');
    let subjectOption = document.getElementById('subjects');

    for(i=0; i<userInfo.category.length; i++) {
        let newValue = new Option(userInfo.category[i].name, userInfo.category[i].name);
        $(categoryOption).append(newValue);
    }
    
    for(i=0; i<userInfo.subjects.length; i++) {
        let newValue = new Option(userInfo.subjects[i].name, userInfo.subjects[i].name);
        $(subjectOption).append(newValue);
    }
}
