$(function() {

    $('input[name=submit]').click(function(e) {
        e.preventDefault();
        if ($('.form').valid()) {
            var serialize = $('.form').serialize();
            var btn = $(this);
            Utils.ajax("/admin/funcao-atividade/cadastrar", "post",
                    serialize, btn);
        }
    });
});


