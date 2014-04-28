$(document).ready(function(){
	showContent('server');
	$(document).on('click','nav ul li', function(){
		console.log("click");
		showContent($(this).attr('id'));
	});
});

function showContent(id){
	$('nav ul li').removeClass('active');
	$('#'+ id).addClass('active');
	$('article').hide();
	$('.'+ id).show();
}
