$(document).ready(function () {
        $('#menu').ReSmenu({
            maxWidth: 780,
            textBefore: 'MENU',
            activeClass:  'active'
        });

    	$('#img-arrow').click(function () {
        		$.scrollTo('#medica', 2500);
        	});
});