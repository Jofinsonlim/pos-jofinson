$(document).ready(function(){

    $(' #button_pesan').on('click', function(e) {
        $('#form_data').show();
        $('#about_us').hide();
        $('#button_pesan').hide();
        $('#button_x').show();

    });

    $(' #button_x').on('click', function(e) {
        $('#form_data').hide();
        $('#about_us').show();
        $('#button_pesan').show();
        $('#button_x').hide();

    });

    $(' #reservasi_pdf').on('click', function(e) {
            $("form").attr("target", "_blank");
            $(' #inputp').attr('action','http://localhost:8080/home/print_pdf')
    });
    



})
