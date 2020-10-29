/* cargar blog especifico para lectura  */

function cargarlecturaBlog(id) {
    
    $.ajax({
        type: "POST",
        url: "./php/blog.php",
        data: { operacion: 2, id_articulo: id },

        success: function (response) {
            let info = JSON.parse(response);
            title=info.title;
            $('.titulo').append(`<h2>${title}</h2>`);
            $('#titulo').html(info.title);
            window.location.href = './single-blog.php';
        }
    });
};

