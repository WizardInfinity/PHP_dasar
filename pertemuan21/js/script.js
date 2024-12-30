$(document).ready(function () {
    //hilangkan button cari
    $('#tombol-cari').hide();

    //event ketika keyword ditulis
    $('#keyword').on('keyup', function(){
        //munculkan icon loading
        $('.loader').show();

        //ajax menggunakan load
        // $('#container').load('ajax/karakter.php?keyword=' + $('#keyword').val());

        $.get('ajax/karakter.php?keyword=' + $('#keyword').val(), function(data){
            $('#container').html(data);
            $('.loader').hide();
        });
    });
});