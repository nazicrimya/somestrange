$(document).ready(function() {
	$.get("../views/main/index.php", function(data){
			$("#main_page").html(data);
	});
	
	$('#nav #main').click(function() {
		$.get("../views/main/index.php", function(data){
				$("#main_page").html(data);
		});
		window.location.href = "/";
	});

	$('#nav #login').click(function() {
		$.get("../views/login/index.php", function(data){
				$("#main_page").html(data);
		});
	});

	$('#nav #register').click(function() {
		$.get("../views/register/index.php", function(data){
				$("#main_page").html(data);
		});
	});

	$('#nav #about').click(function() {
		$.get("../views/about/index.php", function(data){
				$("#main_page").html(data);
		});
	});

	$('#nav #post').click(function() {
		$.get("../views/post/index.php", function(data){
				$("#main_page").html(data);
		});
	});

	$('#nav #exit').click(function() {
		$.ajax({
			url: "/",
			type: "POST", 
			data: "exit=True"
		});
		window.location.href = "/";
	});
}); 