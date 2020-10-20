
$(document).ready(function () {

    $('#alertError').hide();
    $('#alertExito').hide();
    $('#alertEmail').hide();
    $('#alertNombre').hide();
    $('#alertTelefono').hide();
    $('#alertMensaje').hide();


    $("#btnEnviar").click(function (e) {
        e.preventDefault();
        if (validaForm()) {

            nombre = $('#nombre').val();
            telefono = $('#telefono').val();
            email = $('#email').val();
            producto = $("#select1 option:selected").val();
            mensaje = $('#mensaje').val();

            data = {
                nombre: nombre,
                telefono: telefono,
                email: email,
                producto: producto,
                mensaje: mensaje,
            }


            $.ajax({
                type: "POST",
                url: "../assets/controller/contact.php",
                data: data,

                success: function (response) {
                    if (response > 0) {
                        $("#alertExito").delay(500).fadeIn("slow");
                        $("#alertExito").fadeOut(7000);


                        $('#nombre').val('');
                        $('#telefono').val('');
                        $('#email').val('');
                        $("#select1 option[value=" + 0 + "]").attr("selected", true);
                        //producto = $("#select1 option:selected").val();
                        $('#mensaje').val('');

                    } else {
                        //$("#alertError").delay(500).fadeIn("slow");
                        setTimeout(function () { $("#alertError").fadeOut(1500); }, 3000);
                    }
                }
            });

        }
    });
});

/* validar formulario */

function validaForm() {

    let nombre = $("#nombre").val();
    let telefono = $("#telefono").val();
    let email = $("#email").val();
    let mensaje = $("#mensaje").val();
    let producto = $("#select1 option:selected").val();

    if (nombre.length < 0 || telefono.length < 0 || email.length < 0 || mensaje.length < 0 || producto == 0) {
        $("#alertError").fadeIn("slow");
        $("#alertError").fadeOut(7000);
        return false;
    } else if (nombre.length < 5) {
        $("#alertNombre").fadeIn("slow");
        $("#alertNombre").fadeOut(7000);
        return false;
    } else if (telefono.length < 7) {
        $("#alertTelefono").fadeIn("slow");
        $("#alertTelefono").fadeOut(7000);
        return false;
    } else if (mensaje.length < 10) {
        $("#alertMensaje").fadeIn("slow");
        $("#alertMensaje").fadeOut(7000);
        return false;
    } else if ($("#email").val().indexOf('@', 0) == -1 || $("#email").val().indexOf('.', 0) == -1) {
        $("#alertEmail").fadeIn("slow");
        $("#alertEmail").fadeOut(7000);
        return false;
    }
    return true;
}



