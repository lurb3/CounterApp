let showSignOutModal = function() {
  $('.modalBg').show();
  $('.modalSignOut').show();
}

let endSession = function() {
	userData = {};
	deleteCookie("userInfo");
	location.assign("./index.php");
}

let hideSignOutModal = function() {
	$('.modalBg').hide();
	$('.modalSignOut').hide();
}