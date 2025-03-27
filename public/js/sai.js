$(function() {
    $('form.form').on("submit", function(event) {
        $("#bt_salvar").prop("disabled", true);
        event.preventDefault(); // Prevent the form from submitting via the browser
        var form = $(this);
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize(),
            beforeSend: function(){
                $("#bt_salvar").prop('disabled', true);//desabilito
            },
            success: function(data){
                location.reload();
            }
        }).fail(function(response) {
            $("#bt_salvar").prop('disabled', false);
            $('#alert-form').find(".print-error-msg").find("ul").html('');
            $('#alert-form').find(".print-error-msg").css('display','block');
            $.each(response.responseJSON.errors, function( key, value ) {
                if(value){
                    $('#alert-form').find(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                }
            });
            if(response.responseJSON.message){
                $('#alert-form').find(".print-error-msg").find("ul").append('<li>Erro no processamento da requisição</li>');
            }
        });
    });
});
