<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Sumon Rahman">
    <meta name="description" content="">
    <meta name="keywords" content="fijar precios, costos, rentabilidad, objetivo">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Tezlik.</title>
    <!-- Place favicon.ico in the root directory -->
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="../css/pdf.css">
    <!-- fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="contenedor">
        <div class="cabecera">
            <img src="../../assets/img/logo/logo-Teenus.png" width="20%" alt="Logo">
            <div class="datosEmpresa">
                <h3 class="data">Dirección: Cra 55cbis # 160-18</h5>
                    <h3 class="data">Telefono: 031+3586996</h5>
            </div>
            <h1 id="cotizacionNumero">Cotizacion No 001.</h1>

        </div>

        <div class="cliente">
            <div class="fecha">
                <h3 class="data"> <b>Atencion:</b> Martha Lucia Olmos</h3>
                <h3 class="data">fecha: <?php setlocale(LC_ALL, "es_ES");
                                        echo date("d") . "-" . date("M") . "-" . date("Y"); ?> </h3>
            </div>
            <h3 class="data"><b>Email:</b> martha.olmos@teenus.com.co</h3>
            <h3 class="data"><b>Teléfono:</b> 3175125191</h3>
            <h3 class="data"><b>Empresa:</b> Teenus SAS</h3>
        </div>
        <div class="plan" style="text-align: center; color:chocolate;">
            <h3>Emprendedores - Microempresa</h3>
        </div>
        <div class="body">

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col" class="centrado">Cantidad</th>
                        <th scope="col" class="centrado">Descripción</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" class="centrado">1</th>
                        <td>Software en la Nube</td>

                    </tr>
                    <tr>
                        <th scope="row" class="centrado">2</th>
                        <td>Todas las funcionalidades</td>

                    </tr>
                    <tr>
                        <th scope="row" class="centrado">3</th>
                        <td>Soporte Ilimitado</td>

                    </tr>
                    <tr>
                        <th scope="row" class="centrado">4</th>
                        <td>80 Referencias</td>

                    </tr>
                    <tr>
                        <th scope="row" class="centrado">5</th>
                        <td>1 usuario</td>

                    </tr>

                </tbody>
            </table>

            <div class="modalidad">
                <h3>Escoge la forma de pago que más te convenga - Flexibilizamos todos nuestros planes</h3>
            </div>

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col" class="centrado">Tiempo/Mes</th>
                        <th scope="col" class="centrado">Precio mes</th>
                        <th scope="col" class="centrado">Total</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" class="centrado">12</th>
                        <td class="derecha">$ 50.000</td>
                        <td class="derecha">$ 600.000</td>
                    </tr>
                    <tr>
                        <th scope="row" class="centrado">6</th>
                        <td class="derecha">$ 55.000</td>
                        <td class="derecha">$ 330.000</td>

                    </tr>
                    <tr>
                        <th scope="row" class="centrado">3</th>
                        <td class="derecha">$ 60.000</td>
                        <td class="derecha">$ 180.000</td>
                    </tr>

                </tbody>
            </table>
            <div>
                <h3>Tezlik cuenta con la mejor tecnología para que sus datos siempre cuenten con la mayor seguridad</h3>
                <h3>Servidor LiteSpeed, Imunify360, JetBackup, CloudFlare, Certificado SSL, Discos SSD NVMe, MagicSPAM. Transferencia de 700GB</h3>
            </div>
        </div>
    </div>
</body>

</html>