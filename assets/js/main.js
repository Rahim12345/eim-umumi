$(document).ready(function () {
    $('.search-close').click(function () {
        $('.search-block').hide();
        $('.nav-search').show();
    });

    $('#search').click(function () {
        $('.nav-search').hide();
        $('.search-block').show();
    });
});