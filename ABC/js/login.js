$('#log').click(function(){
	var usr = $('#user').val();
	if(usr == ""){
		$('#user').css('background','#FF0000');
	}
	var pwd = $('#pass').val();
	$.ajax({
		type: 'POST',
		url: 'check_login.php',
		data: {user:usr,pass:pwd}
	}).done(function(){
		$('#logText').html("Bienvenido "+usr);
		//window.location.replace("dashboard.php");
	}).fail(function(data){
		$('#logText').html("El Usuario no tiene Acceso");
	});
});