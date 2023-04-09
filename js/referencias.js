$(function() {
    $('#formRef').on('submit', function(e) {
        e.preventDefault();
        var arrData = $('#formRef').serializeArray();

        const objData = {
            type: 'insert',
            data: arrData
        };
        
        $.post('referencias_controller.php', objData, function(response) {
            var resp = jQuery.parseJSON(response);
            if(resp.STATUS ==  'SUCCESS') {
                alert('Registro exitoso!');
                setTimeout(() => {
                    window.location.reload();
                }, 300)
            }else{
                alert('Transferencia ya existe!');
            }
        })
    })
})