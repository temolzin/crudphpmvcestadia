<?php
    require 'view/menu.php';
    $menu = new Menu();
    $menu->header('deporte');
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-right">
                <button class="btn btn-success" data-toggle='modal' data-target='#modalRegistrarDeporte'> <i class="fas fa-plus-circle"></i> Registrar Deporte </button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabla Deporte</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTableDeporte" name="dataTableDeporte" class="table table-bordered table-hover dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Numero de Participantes</th>
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
<div class="modal fade" id="modalRegistrarDeporte" tabindex="-1" role="dialog" aria-labelledby="modalRegistrarDeporte" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-success">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Deporte <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->

                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formRegistrarDeporte" name="formRegistrarDeporte" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" class="form-control" id="nombreDeporte" name="nombreDeporte" placeholder="Nombre"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Descripcion (*)</label>
                                    <input type="text" class="form-control" id="descripcionDeporte" name="descripcionDeporte" placeholder="Descripcion"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Numero de Participantes (*)</label>
                                    <input type="text" class="form-control" id="numParticipantesDeporte" name="numParticipantesDeporte" placeholder="Numero de participantes"/>
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
<div class="modal fade" id="modalActualizarDeporte" tabindex="-1" role="dialog" aria-labelledby="modalActualizarDeporte" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-warning">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Deporte <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formActualizarDeporte" name="formActualizarDeporte">
                    <div class="card-body">
                        <div style="display: none;" class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Identificador (*)</label>
                                    <input type="text" class="form-control" id="idDeporteActualizar" name="idDeporteActualizar" placeholder="Matrícula"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" class="form-control" id="nombreDeporteActualizar" name="nombreDeporteActualizar" placeholder="Nombre"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Descripcion (*)</label>
                                    <input type="text" class="form-control" id="descripcionDeporteActualizar" name="descripcionDeporteActualizar" placeholder="Descripcion "/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Numero de participantes (*)</label>
                                    <input type="text" class="form-control" id="numParticipantesDeporteActualizar" name="numParticipantesDeporteActualizar" placeholder="Numero de participantes"/>
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

<!--------------------------------------------------------- Modal DetalleDeporte----------------------------------------------->
<div class="modal fade" id="modalDetalleDeporte" tabindex="-1" role="dialog" aria-labelledby="modalDetalleDeporte" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-primary">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Deporte <small> &nbsp;(*) Campos requeridos</small></h4>
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
                                <div class="form-group">
                                    <label>Identificador (*)</label>
                                    <input disabled type="text" class="form-control" id="idDeporteConsultar" name="idDeporteConsultar" placeholder="Matrícula"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" disabled class="form-control" id="nombreDeporteConsultar" name="nombreDeporteConsultar" placeholder="Nombre"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Descripcion (*)</label>
                                    <input type="text" disabled class="form-control" id="descripcionDeporteConsultar" name="descripcionDeporteConsultar" placeholder="Descripcion"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Numero de participantes (*)</label>
                                    <input type="text" disabled class="form-control" id="numParticipantesDeporteConsultar" name="numParticipantesDeporteConsultar" placeholder="Numero de participantes"/>
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

<!-- ****************************** Modal Eliminar Deporte *************************************************-->
<div class="modal fade" id="modalEliminarDeporte" tabindex="-1" role="dialog" aria-labelledby="modalEliminarDeporte" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form role="form" id="formEliminarDeporte" name="formActualizarDeporte">
                <input type="text" hidden id="idEliminarDeporte" name="idEliminarDeporte">
                <div class="modal-body text-center text-danger">¿Realmente deseas eliminar este Deporte?</div>
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
        mostrarDeportes();
        enviarFormularioRegistrar();
        enviarFormularioActualizar();
        eliminarRegistro();
    });

    var mostrarDeportes = function() {
        var table = $('#dataTableDeporte').DataTable({
            "processing": true,
            "ajax": {
                "url": "<?php echo constant('URL');?>deporte/read"
            },
            "columns": [
                { "data": "id_deporte" },
                { "data": "nombre_deporte" },
                { "data": "descripcion_deporte" },
                { "data": "num_participantes_deporte" },
                {data:null,
                    "defaultContent":
                        `<button class='consulta btn btn-primary' data-toggle='modal' data-target='#modalDetalleDeporte' title="Ver Detalles"><i class="fa fa-eye"></i></button>
                         <button class='editar btn btn-warning' data-toggle='modal' data-target='#modalActualizarDeporte' title="Editar Datos"><i class="fa fa-edit"></i></button>
                         <button class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminarDeporte' title="Eliminar Registro"><i class="far fa-trash-alt"></i></button>`
                }
            ],
            responsive: true,
            autoWidth: false,
            language: idiomaDataTable,
            lengthChange: true,
            buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
            dom: 'Bfltip'
        });
        obtenerdatosDT(table);
    }

    var obtenerdatosDT = function (table) {
        $('#dataTableDeporte tbody').on('click', 'tr', function() {
            var data = table.row(this).data();
            var idEliminar = $('#idEliminarDeporte').val(data.id_deporte);

            var idActualizar = $("#idDeporteActualizar").val(data.id_deporte);
            var nombreDeporteActualizar = $("#nombreDeporteActualizar").val(data.nombre_deporte);
            var descripcion = $("#descripcionDeporteActualizar").val(data.descripcion_deporte);
            var numParticipantes = $("#numParticipantesDeporteActualizar").val(data.num_participantes_deporte);

            var idConsulta = $("#idDeporteConsultar").val(data.id_deporte);
            var nombreConsulta = $("#nombreDeporteConsultar").val(data.nombre_deporte);
            var descripcionConsulta = $("#descripcionDeporteConsultar").val(data.descripcion_deporte);
            var numParticipantesConsulta = $("#numParticipantesDeporteConsultar").val(data.num_participantes_deporte);
        });
    }

    var enviarFormularioRegistrar = function () {
        $.validator.setDefaults({
            submitHandler: function () {
                var datos = $('#formRegistrarDeporte').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>deporte/insert",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "El Deporte ha sido registrado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>deporte";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al registrar el Deporte. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formRegistrarDeporte').validate({
            rules: {
                nombreDeporte: {
                    required: true
                },
                descripcionDeporte: {
                    required: true
                },
                numParticipantesDeporte: {
                    required: true
                },
            },
            messages: {
                nombreDeporte: {
                    required: "Ingresa un nombre"
                },
                descripcionDeporte: {
                    required: "Ingresa una descripcion"
                },
                numParticipantesDeporte: {
                    required: "Ingresa el numero de participantes"
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
                var datos = $('#formActualizarDeporte').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>deporte/update",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "La Deporte ha sido Actualizado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>deporte";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al Actualizar el Deporte. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formActualizarDeporte').validate({
            rules: {
                nombreDeporteActualizar: {
                    required: true
                },
                descripcionDeporteActualizar: {
                    required: true
                },
                numParticipantesDeporteActualizar: {
                    required: true
                }
            },
            messages: {
                nombreActualizar: {
                    required: "Ingresa un nombre"
                },
                descripcionDeporteActualizar: {
                    required: "Ingresa una descripcion"
                },
                numParticipantesDeporteActualizar: {
                    required: "Ingresa el numero de participantes"
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
        $( "#formEliminarDeporte" ).submit(function( event ) {
            event.preventDefault();
            var datos = $('#formEliminarDeporte').serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo constant('URL');?>deporte/delete",
                data: datos,
                success: function (data) {
                    if (data == 'ok') {
                        Swal.fire(
                            "¡Éxito!",
                            "El Deporte ha sido eliminado correctamente",
                            "success"
                        ).then(function () {
                            window.location = "<?php echo constant('URL');?>deporte";
                        })
                    } else {
                        Swal.fire (
                            "¡Error!",
                            "Ha ocurrido un error al eliminar el Deporte. " + data,
                            "error"
                        );
                    }
                },
            });
        });
    }

</script>
