$(document).ready(function () {
    $(window).ready(function () {
        $('#menu').ReSmenu({
            maxWidth: 780,
            textBefore: 'MENU',
            activeClass:  'active'
        });
            $('#img_arrow').click(function () {
                $.scrollTo('#medica', 2500);
            });
    });
});