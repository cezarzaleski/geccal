/**
 * Funções utilitárias
 */
var Utils = {
    //
    edition: function(url) {
        $('a#excluir').show();
        var option = true;
        $('td input[type=checkbox]').click(function() {
            var idCheck = $(this).attr('rel');
            option = false;
            var check = false;
            $("td input[type=checkbox]:checked").each(function() {
                check = true;
            });
            if (check) {
                $('td[rel="' + idCheck + '"]').each(function() {
                    if ($(this).text() == "Ativo") {
                        $('a#excluir').show();
                    }
                });
            } else {
                $('div#excluir').hide();
            }
        });
        $('tbody tr td.link').click(function() {
            option = true;

        });
        $('tbody tr.pointer').click(function() {
            var id = $(this).attr('rel');
            if (option) {
                location.href = url + id;
            }
        });
    },
    ajax: function(url, type, serialize, btn) {
        $.ajax({
            url: url,
            dataType: 'text',
            type: type,
            data: serialize,
            beforeSend: function() {
                btn.button('loading');
            },
            complete: function() {
                btn.button('reset');
            },
            success: function(data, textStatus) {
                var objJson = $.parseJSON(data);
                if (!objJson.error)
                {
                    $('#myModal #myModalLabel').html("SUCESSO");
                    
                } else
                {
                    $('#myModal #myModalLabel').html("ERRO");
                }
                $('#myModal').modal('show');
                $('#myModal .modal-body').html(objJson.message);
            },
            error: function(xhr, er) {
                window.reload();
            }
        });
    }
};