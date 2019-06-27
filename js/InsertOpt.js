let insertOpt = function(selectName) {
    let newCategory = prompt('Enter a name for the new thing:');
    let newValue = new Option(newCategory, newCategory);
    $('select[name='+selectName+']').append(newValue);
}