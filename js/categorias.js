$('#unidade').change(function(){
    var uni = $(this).val();
    $.ajax({
        url: 'categorias.php',
        type: 'post',
        data: {acao:uni},
        beforeSend:function(){
            $('#categoria').empty().html('<option valoe="" disabled selected> Carregando Categorias</option>')
        },
        success:function(retorno){
            console.log(retorno);
            $('#categoria').empty().html(retorno);
        }
    })
})