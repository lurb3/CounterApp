let insertOpt = function(selectName) {
    let newCategory = prompt('Enter a name for the new thing:');
    if(newCategory) {   
        let newValue = new Option(newCategory, newCategory);
        $('select[name='+selectName+']').append(newValue);
    }
}

let fillOpt = function() {
    let categoryOption = document.getElementById('category');
    let subjectOption = document.getElementById('subject');

    for(i=0; i<userInfo.category.length; i++) {
        let newValue = new Option(userInfo.category[i].name, userInfo.category[i].name);
        $(categoryOption).append(newValue);
    }
    
    for(i=0; i<userInfo.subjects.length; i++) {
        let newValue = new Option(userInfo.subjects[i].name, userInfo.subjects[i].name);
        $(subjectOption).append(newValue);
    }
}

fillOpt();