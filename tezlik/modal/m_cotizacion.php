<!-- modal cotizador -->

<div class="modal fade" id="m_cotizador" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <!-- <div class="container"> -->
                <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Cotizar</div>
                            <!-- <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div> -->
                        </div>

                        <div style="padding-top:30px" class="panel-body">
                            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                            <form id="cotizacionform" class="form-horizontal" role="form">

                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <input id="nombres" type="text" class="form-control" name="nombres" value="" placeholder="Nombres y Apellidos" required>
                                </div>

                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                    <input type="number" id="telefono"  class="form-control" name="telefono" placeholder="telefono" required>
                                </div>

                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                    <input id="email" type="email" class="form-control" name="email" placeholder="email" required>
                                </div>

                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-industry" aria-hidden="true"></i></span>
                                    <input id="empresa" type="text" class="form-control" name="empresa" placeholder="Empresa" required>
                                </div>

                                <div style="margin-top:10px" class="form-group">
                                    <div class="col-sm-12 controls btn-enviar">
                                        <a id="btn-enviar" onclick="envio_cotizacion();" class="btn btn-primary">Enviar</a>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
                                            Tendras tu cotización tan pronto le des clic en Enviar
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>