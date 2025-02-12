<?php
echo xdebug_info();
?>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<button onclick="chamaTeste()">Teste</button>


<script>
    function chamaTeste(){
        var jqxhr = $.get("http://localhost:8989/solicitacoes_form_xml.php", { t: "1" })
        .done(function() {
            alert("success");
        })
        .fail(function() {
            alert( "error" );
        })
        .always(function() {
            alert( "finished" );
        });        
       

    }

</script>
