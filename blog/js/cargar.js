let articulo_Id;

//Carga todos los articulos en el blog general

$(document).ready(function () {
    $.ajax({
        type: "GET",
        url: "./php/c_blog.php",
        data:  "operacion=1" ,

        success: function (response) {

            let info = JSON.parse(response);
            $('.blog_left_sidebar').html('');

            $.each(info.data, function (ind, elem) {

                //obtiene el texto corto del articulo
                var longitud = 157;
                if (elem.content.length > longitud) {
                    var texto = $(elem.content).text().substring(0, longitud);
                    var indiceUltimoEspacio = texto.lastIndexOf(' ');
                    texto = texto.substring(0, indiceUltimoEspacio) + '...';
                    var primeraParte = '' + texto + '';
                };

                //obtiene el dia de la fecha
                let dia = elem.created_at.substring(8, 10);
                let mes = elem.created_at.substring(5, 7);
                let year = elem.created_at.substring(0, 4);

                $('.blog_left_sidebar').append(`<article class="blog_item">
                <div class="blog_item_img">
                    <img class="card-img rounded-0" src="${elem.photo}" alt="blog" style="width: 80%;">
                    <a href="#" class="blog_item_date">
                        <h3>${dia}</h3>
                        <p>${mes} - ${year}</p>
                    </a></div>
                <div class="blog_details">
                    <a class="d-inline-block">
                        <div class='title' id='title'>
                            <h2 id=${elem.id_notice} onclick="cargarlecturaBlog(id);">${elem.title}</h2>
                        </div>
                    </a>
                    <p>${primeraParte}</p>
                    <ul class="blog-info-link">
                        <li><a href="#"><i class="fa fa-user"></i> Teenus SAS</a></li>
                        <li><a href="#"><i class="fa fa-eye"></i> ${elem.hits} Vistas</a></li>
                    </ul>
                </div>
            </article>`);
            });
        }
    });
});

/* cambiar cursor */

$('#6').mouseover(function (e) {
    e.preventDefault();

    $('.title').css('cursor', 'pointer');
});



/* cargar blog especifico para lectura  */

function cargarlecturaBlog(id) {
    localStorage.setItem('articuloId', id);
    window.location.href = './blog.php';
};

