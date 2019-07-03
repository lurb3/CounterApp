$( document ).ready(function() {
    let loggedUser = document.getElementById("loggedUser");
    loggedUser.innerHTML = userInfo.user[0].name;

    getAllStatistics();
});