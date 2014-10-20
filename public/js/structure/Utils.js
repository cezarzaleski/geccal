/**
 * Funções utilitárias
 */
var Utils = {
    //
    edition: function(url) {
        var option = true;
//        $('a#excluir button').show();
        $('td input[type=checkbox]').click(function() {
            
            var idCheck = $(this).attr('rel');
            option = false;
            var check = false;
            $("td input[type=checkbox]:checked").each(function() {
                check = true;
            });
            if (check) {
                $('tr[rel="' + idCheck + '"]').each(function() {
                    alert('tr[rel="' + idCheck + '"]');
//                    if ($(this).text() === "Ativo") {
                    if ($(this).chetext() === "Ativo") {
                        $('a#excluir button').show();
                    }
                });
            } else {
                $('div#excluir button').hide();
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
    ajax: function(url, type, serialize, btn, redirect) {
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
//                alert(data);
//                return;
                var message;
                var objJson = $.parseJSON(data);
                if (!objJson.error)
                {
                    $('#myModal #myModalLabel').html("SUCESSO");
                    message = objJson.message;

                } else
                {
                    $('#myModal #myModalLabel').html("ERRO");
                    message = "Por favor, entre em contato com o Administrador.";
                }
                $('#myModal').modal('show');
                $('#myModal .modal-body').html(message);
                if(redirect){
                    $('.close').click(function() {
                    location.href = redirect;
                });
                }
                
            },
            error: function(xhr, er) {
                window.reload();
            }
        });
    }
};