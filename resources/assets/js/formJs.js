$(document).ready(function() {
    // CPG OLD
    $('.patch').click(function  () {
        if($('.cover').hasClass('escondido') && $('.patch').hasClass('cs-active')){
            $('.cover').removeClass('escondido');
            $('.cover').addClass('visible');
        }
    });

    $('.cs-options ul li').click(function  () {
        $('.cover').removeClass('visible');
        $('.cover').addClass('escondido');
    });
    
    // Image Upload
    $(".nicefileinput").nicefileinput({
        label : 'BUSCAR' // Spanish label
    });

    $('#link_terminos').click(function  () {
        $('#terminos').prop('checked', true);
    });

    // fix pais
    $('#pli .cs-options li').click(function () {
        var pais = $('#pais_id').val();
        if(pais != '1'){
            $("#provincia_id").val(null);
            $('#provLi').hide();
        }else{
            $('#provLi').show();
        }
    });

    var pais = $('#pais_id').val();
    if(pais != '1'){
        $("#provincia_id").val(null);
        $('#provLi').hide();
    }else{
        $('#provLi').show();
    }

    // image Preview
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#previewImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $('input[type=file]').change(function () {
        readURL(this);
    });
    
});