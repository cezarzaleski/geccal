$(function() {
    var url = window.location;
    var urlString = url.toString();
    var urlArray = urlString.split("/");
    $("ul.navbar-left li").each(function() {
        var modulo = $(this).children('a').attr('rel');
        if (modulo == urlArray[3]) {
            $(this).addClass("active");
        } else {
            $(this).removeClass("active");
        }
    });

    // configuracoes dataTables
    $.extend(true, $.fn.dataTable.defaults, {
        "bPaginate": true,
        "bLengthChange": true,
        "bFilter": true,
        "bFixedHeader": true,
        "bSort": true,
        "bInfo": true,
        "bAutoWidth": true,
        "bStateSave": true,
        "oLanguage": {
            "sProcessing": "Processando...",
            "sLengthMenu": "Mostrar _MENU_ registros por página",
            "sZeroRecords": "Nenhum Registro Encontrado...",
            "sInfo": "Paginação _START_ de _END_, Total _TOTAL_ registros",
            "sInfoEmpty": "Paginação 0 de 0, Total 0 registros",
            "sInfoFiltered": "(Filtrado de _MAX_ registros ao todo)",
            "sSearch": "Procurar: ",
            "sNext": "Próximo",
            "sLoadingRecords": "carregando...",
            "oPaginate": {
                "sPrevious": "Anterior",
                "sNext": "Próximo",
                "sFirst": "Primeira",
                "sLast": "Última",
                "sZeroRecords": "Nenhum Registro Encontrado..."
            }
        }
    });
    var oTable = $('#dataTables').dataTable();
    $('#selectAll').click(function(e) {
        var chk = $(this).prop('checked');
        $('input', oTable.$('tr', {
            "filter": "applied"
        })).prop('checked', chk);
    });


/*validação de formulário
 * 
 */
    jQuery.validator.setDefaults({
        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });

    $('.form').validate();
});
