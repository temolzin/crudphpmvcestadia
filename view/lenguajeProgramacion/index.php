<?php
    require 'view/menu.php';
    $menu = new Menu();
    $menu->header('lenguajeProgramacion');
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-right">
                <button class="btn btn-success" data-toggle='modal' data-target='#modalRegistrarlenguajeProgramacion'> <i class="fas fa-plus-circle"></i> Registrar Lenguaje de Programación </button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabla de Lenguajes de Programación</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTablelenguajeProgramacion" name="dataTablelenguajeProgramacion" class="table table-bordered table-hover dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Paradigma</th>
                                    <th>Creador</th>
                                    <th>Fecha de Creación</th>
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
<div class="modal fade" id="modalRegistrarlenguajeProgramacion" tabindex="-1" role="dialog" aria-labelledby="modalRegistrarlenguajeProgramacion" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-success">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Registrar Lenguaje de Programación <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->

                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formRegistrarlenguajeProgramacion" name="formRegistrarlenguajeProgramacion" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" class="form-control" id="nombreLenguajeProgramacion" name="nombreLenguajeProgramacion" placeholder="Nombre"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Paradigma (*)</label>
                                    <input type="text" class="form-control" id="paradigmaLenguajeProgramacion" name="paradigmaLenguajeProgramacion" placeholder="Paradigma"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Creador (*)</label>
                                    <input type="text" class="form-control" id="creadorLenguajeProgramacion" name="creadorLenguajeProgramacion" placeholder="Creador"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Fecha de Creación (*)</label>
                                    <input type="date" class="form-control" id="fechaCreacionLenguajeProgramacion" name="fechaCreacionLenguajeProgramacion" />
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
<div class="modal fade" id="modalActualizarlenguajeProgramacion" tabindex="-1" role="dialog" aria-labelledby="modalActualizarlenguajeProgramacion" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-warning">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Actualizar Lenguaje de Programación <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formActualizarlenguajeProgramacion" name="formActualizarlenguajeProgramacion">
                    <div class="card-body">
                        <div style="display: none;" class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Matrícula (*)</label>
                                    <input type="text" class="form-control" id="idLenguajeProgramacionActualizar" name="idLenguajeProgramacionActualizar" placeholder="Id lenguajeProgramacion"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" class="form-control" id="nombreLenguajeProgramacionActualizar" name="nombreLenguajeProgramacionActualizar" placeholder="Nombre"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Paradigma (*)</label>
                                    <input type="text" class="form-control" id="paradigmaLenguajeProgramacionActualizar" name="paradigmaLenguajeProgramacionActualizar" placeholder="Paradigma"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Creador (*)</label>
                                    <input type="text" class="form-control" id="creadorLenguajeProgramacionActualizar" name="creadorLenguajeProgramacionActualizar" placeholder="Creador"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Fecha de Creación (*)</label>
                                    <input type="date" class="form-control" id="fechaCreacionLenguajeProgramacionActualizar" name="fechaCreacionLenguajeProgramacionActualizar" />
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

<!--------------------------------------------------------- Modal DetallelenguajeProgramacion----------------------------------------------->
<div class="modal fade" id="modalDetallelenguajeProgramacion" tabindex="-1" role="dialog" aria-labelledby="modalDetallelenguajeProgramacion" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-primary">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Detalle del Lenguaje de Programación <small> &nbsp;(*) Campos requeridos</small></h4>
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
                                    <label>Matrícula (*)</label>
                                    <input disabled type="text" class="form-control" id="idLenguajeProgramacionConsultar" name="idLenguajeProgramacionConsultar" placeholder="Id lenguajeProgramacion" readonly/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" class="form-control" id="nombreLenguajeProgramacionConsultar" name="nombreLenguajeProgramacionConsultar" placeholder="Nombre" readonly/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Paradigma (*)</label>
                                    <input type="text" class="form-control" id="paradigmaLenguajeProgramacionConsultar" name="paradigmaLenguajeProgramacionConsultar" placeholder="Paradigma" readonly/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Creador (*)</label>
                                    <input type="text" class="form-control" id="creadorLenguajeProgramacionConsultar" name="creadorLenguajeProgramacionConsultar" placeholder="Creador" readonly/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Fecha de Creación (*)</label>
                                    <input type="date" class="form-control" id="fechaCreacionLenguajeProgramacionConsultar" name="fechaCreacionLenguajeProgramacionConsultar" readonly/>
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

<!-- ****************************** Modal Eliminar lenguajeProgramacion *************************************************-->
<div class="modal fade" id="modalEliminarlenguajeProgramacion" tabindex="-1" role="dialog" aria-labelledby="modalEliminarlenguajeProgramacion" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form role="form" id="formEliminarLenguajeProgramacion" name="formActualizarLenguajeProgramacion">
                <input type="text" hidden id="idEliminarLenguajeProgramacion" name="idEliminarLenguajeProgramacion">
                <div class="modal-body text-center text-danger">¿Realmente deseas eliminar este lenguajeProgramacion?</div>
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
        mostrarlenguajeProgramacions();
        enviarFormularioRegistrar();
        enviarFormularioActualizar();
        eliminarRegistro();
    });

    var mostrarlenguajeProgramacions = function() {
        var tablelenguajeProgramacion = $('#dataTablelenguajeProgramacion').DataTable({
            "processing": true,
            "ajax": {
                "url": "<?php echo constant('URL');?>lenguajeProgramacion/read"
            },
            "columns": [
                { "data": "id_lenguajeProgramacion" },
                { "data": "nombre_lenguajeProgramacion" },
                { "data": "paradigma_lenguajeProgramacion" },
                { "data": "creador_lenguajeProgramacion" },
                { "data": "fecha_creacion_lenguajeProgramacion" },
                {data:null,
                    "defaultContent":
                        `<button class='consulta btn btn-primary' data-toggle='modal' data-target='#modalDetallelenguajeProgramacion' title="Ver Detalles"><i class="fa fa-eye"></i></button>
                         <button class='editar btn btn-warning' data-toggle='modal' data-target='#modalActualizarlenguajeProgramacion' title="Editar Datos"><i class="fa fa-edit"></i></button>
                         <button class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminarlenguajeProgramacion' title="Eliminar Registro"><i class="far fa-trash-alt"></i></button>`
                }
            ],
            responsive: true,
            autoWidth: false,
            language: idiomaDataTable,
            lengthChange: true,
            buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
            dom: 'Bfltip'
        });
        obtenerdatosDT(tablelenguajeProgramacion);
    }

    var obtenerdatosDT = function (table) {
        $('#dataTablelenguajeProgramacion tbody').on('click', 'tr', function() {
            var data = table.row(this).data();
            var idEliminar = $('#idEliminarLenguajeProgramacion').val(data.id_lenguajeProgramacion);

            var idActualizar = $("#idLenguajeProgramacionActualizar").val(data.id_lenguajeProgramacion);
            var nombreActualizar = $("#nombreLenguajeProgramacionActualizar").val(data.nombre_lenguajeProgramacion);
            var paradigmaActualizar = $("#paradigmaLenguajeProgramacionActualizar").val(data.paradigma_lenguajeProgramacion);
            var creadorActualizar = $("#creadorLenguajeProgramacionActualizar").val(data.creador_lenguajeProgramacion);
            var fechaActualizar = $("#fechaCreacionLenguajeProgramacionActualizar").val(data.fecha_creacion_lenguajeProgramacion);

            var idConsulta = $("#idLenguajeProgramacionConsultar").val(data.id_lenguajeProgramacion);
            var nombreConsulta = $("#nombreLenguajeProgramacionConsultar").val(data.nombre_lenguajeProgramacion);
            var paradigmaConsulta = $("#paradigmaLenguajeProgramacionConsultar").val(data.paradigma_lenguajeProgramacion);
            var creadorConsulta = $("#creadorLenguajeProgramacionConsultar").val(data.creador_lenguajeProgramacion);
            var fechaConsulta = $("#fechaCreacionLenguajeProgramacionConsultar").val(data.fecha_creacion_lenguajeProgramacion)
        });
    }

    var enviarFormularioRegistrar = function () {
        $.validator.setDefaults({
            submitHandler: function () {
                var datos = $('#formRegistrarlenguajeProgramacion').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>lenguajeProgramacion/insert",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "El lenguajeProgramacion ha sido registrado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>lenguajeProgramacion";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al registrar el lenguajeProgramacion. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formRegistrarlenguajeProgramacion').validate({
            rules: {
                nombrelenguajeProgramacion: {
                    required: true
                },
                apellidoslenguajeProgramacion: {
                    required: true
                },
            },
            messages: {
                nombrelenguajeProgramacion: {
                    required: "Ingresa un nombre"
                },
                paradigmalenguajeProgramacion: {
                    required: "Ingresa un partadigma"
                },
                creadorlenguajeProgramacion: {
                    required: "Ingresa un creador"
                },
                fechaCreacionlenguajeProgramacion: {
                    required: "Ingresa una fecha de creación"
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
                var datos = $('#formActualizarlenguajeProgramacion').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>lenguajeProgramacion/update",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "El lenguajeProgramacion ha sido Actualizado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>lenguajeProgramacion";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al Actualizar el lenguajeProgramacion. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formActualizarlenguajeProgramacion').validate({
            rules: {
                nombrelenguajeProgramacionActualizar: {
                    required: true
                },
                apellidoslenguajeProgramacionActualizar: {
                    required: true
                }
            },
            messages: {
                nombrelenguajeProgramacion: {
                    required: "Ingresa un nombre"
                },
                paradigmalenguajeProgramacion: {
                    required: "Ingresa un partadigma"
                },
                creadorlenguajeProgramacion: {
                    required: "Ingresa un creador"
                },
                fechaCreacionlenguajeProgramacion: {
                    required: "Ingresa una fecha de creación"
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
        $( "#formEliminarLenguajeProgramacion" ).submit(function( event ) {
            event.preventDefault();
            var datos = $('#formEliminarLenguajeProgramacion').serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo constant('URL');?>lenguajeProgramacion/delete",
                data: datos,
                success: function (data) {
                    if (data == 'ok') {
                        Swal.fire(
                            "¡Éxito!",
                            "El lenguaje Programacion ha sido eliminado correctamente",
                            "success"
                        ).then(function () {
                            window.location = "<?php echo constant('URL');?>lenguajeProgramacion";
                        })
                    } else {
                        Swal.fire (
                            "¡Error!",
                            "Ha ocurrido un error al eliminar el lenguajeProgramacion. " + data,
                            "error"
                        );
                    }
                },
            });
        });
    }

    /*var dataTableFunction = function () {
        var table = $("#dataTablelenguajeProgramacion").DataTable({
            responsive: true,
            language: idiomaDataTable,
            lengthChange: true,
            buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
            dom: 'Bfltip'
        });

        table.buttons().container().appendTo('#dataTablelenguajeProgramacion_wrapper .col-md-6:eq(0)');
    }*/
</script>
