require('./bootstrap');

$(function () {
    // load the laravel csrf token
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    isWindows = navigator.platform.indexOf('Win') > -1 ? true : false;

    if (isWindows){
        // if we are on windows OS we activate the perfectScrollbar function
        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();
        $('html').addClass('perfect-scrollbar-on');
    } else {
        $('html').addClass('perfect-scrollbar-off');
    }

    // Select 2
    $('select').not('.no-select2').not('.smaller_s2').not('[multiple]').select2({
        theme: "bootstrap",
        language: {
            noResults: function() {
                return "No se encontraron resultados.";
            }
        }
    });

    // Tooltips with HTML
    $('.html_tooltip').tooltip({
        html: true,
        placement: 'auto'
    })

    // Fechas
    $('.datepicker').flatpickr({
        format: 'DD/MM/YYYY',
        dateFormat: "d/m/Y",
        maxDate: "1/01/2005",
        minDate: "1/01/1975",
        locale: 'es'
    });

    // Image Upload
    $(".nicefileinput").nicefileinput({
        label : 'BUSCAR' // Spanish label
    });

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

    // Fix pais
    $('#pais_id').on('change', function () {
        var pais = $('#pais_id').val();
        console.log('dale');
        if(pais != '1'){
            $("#provincia_id").val(null);
            $('#provLi').hide();
            $('.alturaForm').parent().addClass('clear');
        }else{
            $('#provLi').show();
            $('.alturaForm').parent().removeClass('clear');
        }
    });

    var pais = $('#pais_id').val();
    if(pais != '1'){
        $("#provincia_id").val(null);
        $('#provLi').hide();
        $('.alturaForm').parent().addClass('clear');
    }else{
        $('#provLi').show();
        $('.alturaForm').parent().removeClass('clear');
    }

});


