let plan;
/* Cargar Modal */

function cotizar(id) {
    plan = id;
    $("#m_cotizador").modal("show");

}

function envio_cotizacion() {
    $("#m_cotizador").modal("hide");
    data = $('#cotizacionform').serialize() + '&plan=' + plan;
   
    $.ajax({
        type: "POST",
        url: "php/cotizacion.php",
        data: data,

        success: function (response) {
   
            data = JSON.parse(response);

            if (data == 0) {
                toastr["error"]("", "Para cotizar Tezlik, ingresa todos los datos ");
            } else if (data == 1) {
                toastr["success"]("Tu cotizacion va en camino");
            }
        }
    });

}
