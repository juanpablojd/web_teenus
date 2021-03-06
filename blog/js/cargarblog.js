
let id = localStorage.getItem('articuloId');

$(document).ready(function () {

    $.ajax({
        type: "GET",
        url: `./php/c_blog.php?operacion=2&articulo=${id}`,
        /* data: `operacion=2&articulo=${id}`, */
        /* data: { operacion: 2, id_articulo: id }, */

        success: function (response) {
            let info = JSON.parse(response);

            /* $('#titulo').html(info.title).css('fontsize','20px');*/
            $('.titulo').html(info.title);
            $('.tituloBlog').append(`<h2 id="titulo" style="color:white">${info.title}</h2>`);
            $('.vistas').append(`<li><a href="#"><i class="far fa-user"></i> Teenus SAS</a></li>
            <li><a href="#" id='visitas'><i class="far fa-eye"></i> ${info.hits}</a></li>`);
            $('.excert').html(info.content);
            $('.imgNoticia').append(`<img class="img-fluid imgNoticia" src="${info.photo}" alt="" width=80%></img>`);

            $.ajax({
                type: "POST",
                url: "./php/c_blog.php",
                data: { operacion: 1 },

                success: function (response) {
                    let info = JSON.parse(response);
                    moment.locale('es');

                    $.each(info.data, function (ind, elem) {
                        var m = moment(`${elem.created_at}`, "YYYY-MM-DD HH:mm:ss");
                        $('.recentpost').append(`<div class="media post_item">
                                                    <img src="${elem.photo}" alt="post" style="width:30%">
                                                        <div class="media-body">
                                                            <a href="single-blog.html">
                                                                <h3>${elem.title}</h3>
                                                            </a>
                                                            <p>`+ m.fromNow() + `</p>
                                                        </div>
                                                    </div>`);
                    })
                }
            });
        }
    });
});

/* Compartir en redes sociales */


