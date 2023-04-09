$(document).on('submit', '#FormSendUpdate', function(e) {
    e.preventDefault();
    const objData =  {
        type: 'update',
        data: $('#FormSendUpdate').serializeArray()
    };
    var result = validarMonto(objData['data'][4]['value']);
    if(!result) {
        validacionEfect(false);
        $.post("referencias_controller.php", objData, function(response) {
            var resp = jQuery.parseJSON(response);
            if(resp.STATUS ==  'SUCCESS') {
                window.location.replace('http://localhost/proyecto_netflix/referencias.php');
            }else{
                alert(resp.MESSAGES);
            }
        })
    } else {
        validacionEfect(true);
    }
})

function validarMonto(monto) {
    var response;
    var parseMonto = parseFloat(monto);
    var result = Number.isInteger(parseMonto);
    if(result) {
        var split = monto.split('.');
        response = (split[0]+'.00' == monto) ? false : true;
    } else {
        response = false;
    }

    return response;
}

function validacionEfect(swicth) {
    if(swicth) {
        var message = `
            <span style="color: red; margin-bottom: 20px">El monto debe ser decimal, ejem: 15.00</span>
        `;
        $('#monto').css({
            'border-color' : 'red'
        });
        $('#monto').focus();
        $('#alertMessages').html(message);
    } else {
        $('#monto').css({
            'border-color' : 'silver'
        });
        $('#alertMessages').html('');
    }
}