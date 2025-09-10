<?php
    require 'view/menu.php';
    $menu = new Menu();
    $menu->header('weather');
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-right">
                <button class="btn btn-success" data-toggle='modal' data-target='#modalRegistrarWeather'> <i class="fas fa-plus-circle"></i> Registrar Weather </button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabla Weather</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTableWeather" name="dataTableWeather" class="table table-bordered table-hover dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--*****************************************MODALS****************************************-->
<!--------------------------------------------------------- Modal Registrar----------------------------------------------->
<div class="modal fade" id="modalRegistrarWeather" tabindex="-1" role="dialog" aria-labelledby="modalRegistrarWeather" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-success">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Weather <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->

                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formRegistrarWeather" name="formRegistrarWeather" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre del Weather (*)</label>
                                    <input type="text" class="form-control" id="nombreWeather" name="nombreWeather" placeholder="Nombre"/>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">Registrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--------------------------------------------------------- Modal Actualizar----------------------------------------------->
<div class="modal fade" id="modalActualizarWeather" tabindex="-1" role="dialog" aria-labelledby="modalActualizarWeather" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-warning">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Weather <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formActualizarWeather" name="formActualizarWeather">
                <div class="card-body">
                        <div style="display: none;" class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Id (*)</label>
                                    <input type="text" class="form-control" id="idWeatherActualizar" name="idWeatherActualizar" placeholder="Id"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" class="form-control" id="nombreWeatherActualizar" name="nombreWeatherActualizar" placeholder="Nombre"/>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-warning">Actualizar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--------------------------------------------------------- Modal DetalleWeather----------------------------------------------->
<div class="modal fade" id="modalDetalleWeather" tabindex="-1" role="dialog" aria-labelledby="modalDetalleWeather" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-primary">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Weather <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formConsulta" name="formConsulta">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" class="form-control" id="nombreWeatherConsultar" name="nombreWeatherConsultar" placeholder="Nombre"/>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ****************************** Modal Eliminar Weather *************************************************-->
<div class="modal fade" id="modalEliminarWeather" tabindex="-1" role="dialog" aria-labelledby="modalEliminarWeather" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form role="form" id="formEliminarWeather" name="formActualizarWeather">
                <input type="text" hidden id="idEliminarWeather" name="idEliminarWeather">
                <div class="modal-body text-center text-danger">¿Realmente deseas eliminar este Weather?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-danger" type="submit">Eliminar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
    $menu->footer();
?>

<script>

    $(document).ready(function (){
        mostrarWeathers();
        enviarFormularioRegistrar();
        enviarFormularioActualizar();
        eliminarRegistro();
    });

    var mostrarWeathers = function() {
        var tableWeather = $('#dataTableWeather').DataTable({
            "processing": true,
            "ajax": {
                "url": "<?php echo constant('URL');?>weather/read"
            },
            "columns": [
                { "data": "id_weather" },
                { "data": "name_weather" },
                {data:null,
                    "defaultContent":
                        `<button class='consulta btn btn-primary' data-toggle='modal' data-target='#modalDetalleWeather' title="Ver Detalles"><i class="fa fa-eye"></i></button>
                         <button class='editar btn btn-warning' data-toggle='modal' data-target='#modalActualizarWeather' title="Editar Datos"><i class="fa fa-edit"></i></button>
                         <button class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminarWeather' title="Eliminar Registro"><i class="far fa-trash-alt"></i></button>`
                }
            ],
            responsive: true,
            autoWidth: false,
            language: idiomaDataTable,
            lengthChange: true,
            buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
            dom: 'Bfltip'
        });
        obtenerdatosDT(tableWeather);
    }

    var obtenerdatosDT = function (table) {
        $('#dataTableWeather tbody').on('click', 'tr', function() {
            var data = table.row(this).data();

            var idEliminar = $('#idEliminarWeather').val(data.id_weather);

            var idActualizar = $("#idWeatherActualizar").val(data.id_weather);
            var nombreweatheractualizar = $("#nombreWeatherActualizar").val(data.name_weather);
            var idConsulta = $("#idWeatherConsultar").val(data.id_weather);
            var nombreConsulta = $("#nombreWeatherConsultar").val(data.name_weather);
        });
    }

    var enviarFormularioRegistrar = function () {
        $.validator.setDefaults({
            submitHandler: function () {
                var datos = $('#formRegistrarWeather').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>weather/insert",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "El Weather ha sido registrada de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>weather";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al registrar el Weather. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formRegistrarWeather').validate({
            rules: {
                nombreWeather: {
                    required: true
                }
            },
            messages: {
                nombreWeather: {
                    required: "INGRESA UN NOMBRE"
                }
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    }

    var enviarFormularioActualizar = function () {
        $.validator.setDefaults({
            submitHandler: function () {
                var datos = $('#formActualizarWeather').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>weather/update",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "La Weather ha sido Actualizada de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>weather";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al Actualizar el Weather. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formActualizarWeather').validate({
            rules: {
                idmatriculaActualizar: {
                    required: true,
                    number: true
                },
                nombreWeatherActualizar: {
                    required: true
                }
            },
            messages: {
                nombreWeatherActualizar: {
                    required: "INGRESA UN NOMBRE"
                }
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    }

    var eliminarRegistro = function () {
        $( "#formEliminarWeather" ).submit(function( event ) {
            event.preventDefault();
            var datos = $('#formEliminarWeather').serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo constant('URL');?>weather/delete",
                data: datos,
                success: function (data) {
                    if (data == 'ok') {
                        Swal.fire(
                            "¡Éxito!",
                            "El Weather ha sido eliminada correctamente",
                            "success"
                        ).then(function () {
                            window.location = "<?php echo constant('URL');?>weather";
                        })
                    } else {
                        Swal.fire (
                            "¡Error!",
                            "Ha ocurrido un error al eliminar el Weather. " + data,
                            "error"
                        );
                    }
                },
            });
        });
    }
</script>
