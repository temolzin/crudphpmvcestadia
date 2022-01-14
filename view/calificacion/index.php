<?php
    require 'view/menu.php';
    $menu = new Menu();
    $menu->header('calificacion');
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-right">
                <button class="btn btn-success" data-toggle='modal' data-target='#modalRegistrarCalificacion'> <i class="fas fa-plus-circle"></i> Registrar Calificacion </button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabla Calificacion</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTableCalificacion" name="dataTableCalificacion" class="table table-bordered table-hover dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>Calificacion</th>
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
<div class="modal fade" id="modalRegistrarCalificacion" tabindex="-1" role="dialog" aria-labelledby="modalRegistrarCalificacion" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-success">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Calificacion <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->

                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formRegistrarCalificacion" name="formRegistrarCalificacion" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" class="form-control" id="nombreAlumno" name="nombreAlumno" placeholder="Nombre"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Apellido Paterno (*)</label>
                                    <input type="text" class="form-control" id="apellidoPaterno" name="apellidoPaterno" placeholder="Apellido Paterno"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Apellido Materno (*)</label>
                                    <input type="text" class="form-control" id="apellidoMaterno" name="apellidoMaterno" placeholder="Apellido Materno"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Calificacion (*)</label>
                                    <input type="text" class="form-control" id="calificacion" name="calificacion" placeholder="Calificacion"/>
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
<div class="modal fade" id="modalActualizarCalificacion" tabindex="-1" role="dialog" aria-labelledby="modalActualizarCalificacion" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-warning">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Calificacion <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formActualizarCalificacion" name="formActualizarCalificacion">
                    <div class="card-body">
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" class="form-control" id="nombreAlumnoActualizar" name="nombreAlumnoActualizar" placeholder="Nombre"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Apellido Paterno (*)</label>
                                    <input type="text" class="form-control" id="apellidoPaternoActualizar" name="apellidoPaternoActualizar" placeholder="Apellido Paterno"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Apellido Materno (*)</label>
                                    <input type="text" class="form-control" id="apellidoMaternoActualizar" name="apellidoMaternoActualizar" placeholder="Apellido Materno"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Calificacion (*)</label>
                                    <input type="text" class="form-control" id="calificacionActualizar" name="calificacionActualizar" placeholder="Calificacion"/>
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

<!--------------------------------------------------------- Modal DetalleCalificacion----------------------------------------------->
<div class="modal fade" id="modalDetCalificacion" tabindex="-1" role="dialog" aria-labelledby="modalDetalleCalificacion" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-primary">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Calificacion <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formConsulta" name="formConsulta">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" disabled class="form-control" id="nombreAlumnoConsultar" name="nombreAlumnoConsultar" placeholder="Nombre"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Apellido Paterno (*)</label>
                                    <input type="text" disabled class="form-control" id="apellidoPaternoConsultar" name="apellidoPaternoConsultar" placeholder="Apellido Materno"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Apellido Materno (*)</label>
                                    <input type="text" disabled class="form-control" id="apellidoMaternoConsultar" name="apellidoMaternoConsultar" placeholder="Apellido Materno"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Calificacion (*)</label>
                                    <input type="text" disabled class="form-control" id="calificacionConsultar" name="calificacionConsultar" placeholder="Calificacion"/>
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

<!-- ****************************** Modal Eliminar Calificacion *************************************************-->
<div class="modal fade" id="modalEliminarCalificacion" tabindex="-1" role="dialog" aria-labelledby="modalEliminarCalificacion" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form role="form" id="formEliminarCalificacion" name="formActualizarCalificacion">
                <input type="text" hidden id="idEliminarCalificacion" name="idEliminarCalificacion">
                <div class="modal-body text-center text-danger">¿Realmente deseas eliminar esta Calificacion?</div>
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
        mostrarCalificacion();
        enviarFormularioRegistrar();
        enviarFormularioActualizar();
        eliminarRegistro();
    });

    var mostrarCalificacion = function() {
        var tableCalificacion = $('#dataTableCalificacion').DataTable({
            "processing": true,
            "ajax": {
                "url": "<?php echo constant('URL');?>calificacion/read"
            },
            "columns": [
                { "data": "id_calificacion" },
                { "data": "nombre_alumno" },
                { "data": "apppat_alumno" },
                { "data": "appmat_alumno" },
                { "data": "calificacion" },
                {data:null,
                    "defaultContent":
                        `<button class='consulta btn btn-primary' data-toggle='modal' data-target='#modalDetalleCalificacion' title="Ver Detalles"><i class="fa fa-eye"></i></button>
                         <button class='editar btn btn-warning' data-toggle='modal' data-target='#modalActualizarCalificacion' title="Editar Datos"><i class="fa fa-edit"></i></button>
                         <button class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminarCalificacion' title="Eliminar Registro"><i class="far fa-trash-alt"></i></button>`
                }
            ],
            responsive: true,
            autoWidth: false,
            language: idiomaDataTable,
            lengthChange: true,
            buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
            dom: 'Bfltip'
        });
        obtenerdatosDT(tableCalificacion);
    }

    var obtenerdatosDT = function (table) {
        $('#dataTableCalificacion tbody').on('click', 'tr', function() {
            var data = table.row(this).data();
            var idEliminar = $('#idEliminarCalificacion').val(data.id_calificacion);

            var idActualizar = $("#idCalificacionActualizar").val(data.id_calificacion);
            var nombreActualizar = $("#nombreAlumnoActualizar").val(data.nombre_alumno);
            var apellidoPaternoActualizar = $("#apellidoPaternoActualizar").val(data.apppat_alumno);
            var apellidoMaternoActualizar = $("#apellidoMaternoActualizar").val(data.appmat_alumno);
            var calificacionActualizar = $("#calificacionActualizar").val(data.calificacion);

            var idConsultar = $("#idCalificacionConsultar").val(data.id_calificacion);
            var nombreConsulta = $("#nombreAlumnoConsultar").val(data.nombre_alumno);
            var apellidoPaternoConsulta = $("#apellidoPaternoConsultar").val(data.apppat_alumno);
            var apellidoMaternoConsulta = $("#apellidoMaternoConsultar").val(data.appmat_alumno);
            var calificacionConsulta = $("#calificacionConsultar").val(data.calificacion);
        });
    }

    var enviarFormularioRegistrar = function () {
        $.validator.setDefaults({
            submitHandler: function () {
                var datos = $('#formRegistrarCalificacion').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>calificacion/insert",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "La Calificacion ha sido registrado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>calificacion";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al registrar la Calificacion. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formRegistrarCalificacion').validate({
            rules: {
                nombreAlumno: {
                    required: true
                },
                apellidoPaterno: {
                    required: true
                },
                apellidoMaterno: {
                    required: true
                },
                calidicacion: {
                    required: true
                },
            },
            messages: {
                nombreAlumno: {
                    required: "Ingrese su nombre"
                },
                apellidoPaterno: {
                    required: "Ingrese su apellido paterno"
                },
                apellidoMaterno: {
                    required: "Ingrese su apellido materno"
                },
                calificacion: {
                    required: "Ingrese tu calificacion"
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
                var datos = $('#formActualizarCalificacion').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>calificacion/update",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "La Calificacion ha sido Actualizado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>calificacion";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al Actualizar la Calificacion. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formActualizarCalificacion').validate({
            rules: {
                nombreAlumnoActualizar: {
                    required: true
                },
                apellidoPaternoActualizar: {
                    required: true
                },
                apellidoMaternoActualizar: {
                    required: true
                },
                calificacionActualizar: {
                    required: true
                }
            },
            messages: {
                nombreAlumnoActualizar: {
                    required: "Ingrese su nombre"
                },
                apellidoPaternoActualizar: {
                    required: "Ingrese su apellido paterno"
                },
                apellidoMaternoActualizar: {
                    required: "Ingrese su apellido materno"
                },
                calificacionActualizar: {
                    required: "Ingrese su calificacion"
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
        $( "#formEliminarCalificacion" ).submit(function( event ) {
            event.preventDefault();
            var datos = $('#formEliminarCalificacion').serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo constant('URL');?>calificacion/delete",
                data: datos,
                success: function (data) {
                    if (data == 'ok') {
                        Swal.fire(
                            "¡Éxito!",
                            "La Calificacion ha sido eliminado correctamente",
                            "success"
                        ).then(function () {
                            window.location = "<?php echo constant('URL');?>calificacion";
                        })
                    } else {
                        Swal.fire (
                            "¡Error!",
                            "Ha ocurrido un error al eliminar la Calificacion. " + data,
                            "error"
                        );
                    }
                },
            });
        });
    }

    /*var dataTableFunction = function () {
        var table = $("#dataTableCalificacion").DataTable({
            responsive: true,
            language: idiomaDataTable,
            lengthChange: true,
            buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
            dom: 'Bfltip'
        });

        table.buttons().container().appendTo('#dataTableCalificacion_wrapper .col-md-6:eq(0)');
    }*/
</script>
