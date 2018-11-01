
public_path = window.location.pathname.split("/public")[0]+'/public/'; // Path to Public folder

//=======================================================
// EVENTS FOR NA BAR CLICKS
//=======================================================


// -- HOME PAGE
$('body').on('click', '#home', function(e){
	$('.container-content').hide();
	$('#home-content').show();
});


// -- PASTORS MESSAGE
$('body').on('click', '#pastormessage', function(e){
	$('.container-content').hide();
	$('#pastormessage-content').show();
});

// -- CHILDRENS CORNER
$('body').on('click', '#kidscorner', function(e){
	$('.container-content').hide();
	$('#kidscorner-content').show();
});


// -- RESUME
$('body').on('click', '#matthewhopp', function(e){
	$('.container-content').hide();
	$('#matthewhopp-content').show();
});




//============================
// test,,, delete me
// ===========================
$('body').on('click', '#test1', function(e){
	$.get(public_path + 'about', function(htmlResponse){
		$('#about-ajax').html(htmlResponse);
	});
});