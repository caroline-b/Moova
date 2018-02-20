// GA

(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-104099104-1', 'auto');
ga('send', 'pageview');

// FOOTER

$("#partenaires_marques").click(function(){
	if($("#collapseMarques").is(":visible")){
		$("#collapseMarques").fadeOut();
		$("footer .fa").removeClass('fa-angle-double-down');
		$("footer .fa").addClass('fa-angle-double-right');
	} else {
		$("#collapseMarques").fadeIn();
		$("footer .fa").addClass('fa-angle-double-down');
		$("footer .fa").removeClass('fa-angle-double-right');
	}
});	


// REALISATION

var height_cale_rwd	= $('.item').height()+15;
$('#cale_rwd').css({ 'padding-top': height_cale_rwd+'px' })