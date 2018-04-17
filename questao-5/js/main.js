$(document).ready(function() {
    $('[data-val]').on('click', function() {
        let field = $(this).attr('data-val');
        $('ul li').removeClass('active');
        $(this).addClass('active');
        $('.form').addClass('hidden');
        $('.form.form-'+field).removeClass('hidden');
    });
});