function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function deleteCookie(name) { setCookie(name, '', -1); }

// Insert User Name into User field
let userData = {};
let setUserData = function() {
	 userData = JSON.parse(getCookie('userInfo'));
}
if(getCookie('userInfo')) {

// Fill Subjects fields
let subjectSelect = document.getElementById("subjects");
let categoriesSelect = document.getElementById("categories");

for(i=0; i<userData.subjects.length; i++) {
    let option = document.createElement('option');
    option.value = userData.subjects[i].name;
    option.innerHTML = userData.subjects[i].name;
    subjectSelect.appendChild(option);
}

for(i=0; i<userData.categories.length; i++) {
    let option = document.createElement('option');
    option.value = userData.categories[i].name;
    option.innerHTML = userData.categories[i].name;
    categoriesSelect.appendChild(option);
}
}






//getAllStatistics();
