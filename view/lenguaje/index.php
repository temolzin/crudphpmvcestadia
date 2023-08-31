<?php
    require 'view/menu.php';
    $menu = new Menu();
    $menu->header('lenguaje');
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-right">
                <button class="btn btn-success" data-toggle='modal' data-target='#modalRegistrarLenguaje'> <i class="fas fa-plus-circle"></i> Registrar Lenguaje </button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabla Lenguaje</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTableLenguaje" name="dataTableLenguaje" class="table table-bordered table-hover dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Paradigma</th>
                                    <th>Creador</th>
                                    <th>Fecha de Creación</th>
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
<div class="modal fade" id="modalRegistrarLenguaje" tabindex="-1" role="dialog" aria-labelledby="modalRegistrarLenguaje" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-success">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Lenguaje de Programación <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->

                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formRegistrarLenguaje" name="formRegistrarLenguaje" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" class="form-control" id="nombreLenguaje" name="nombreLenguaje" placeholder="Nombre"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Paradigma (*)</label>
                                    <input type="text" class="form-control" id="paradigmaLenguaje" name="paradigmaLenguaje" placeholder="Paradigma"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Creador (*)</label>
                                    <input type="text" class="form-control" id="creadorLenguaje" name="creadorLenguaje" placeholder="Creador"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Fecha de Creación (*)</label>
                                    <input type="date" class="form-control" id="fechaCreacionLenguaje" name="fechaCreacionLenguaje" />
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
<div class="modal fade" id="modalActualizarLenguaje" tabindex="-1" role="dialog" aria-labelledby="modalActualizarLenguaje" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-warning">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Lenguaje de Programación <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formActualizarLenguaje" name="formActualizarLenguaje">
                    <div class="card-body">
                        <div style="display: none;" class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Matrícula (*)</label>
                                    <input type="text" class="form-control" id="idLenguajeActualizar" name="idLenguajeActualizar" placeholder="Id Lenguaje"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" class="form-control" id="nombreLenguajeActualizar" name="nombreLenguajeActualizar" placeholder="Nombre"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Paradigma (*)</label>
                                    <input type="text" class="form-control" id="paradigmaLenguajeActualizar" name="paradigmaLenguajeActualizar" placeholder="Paradigma"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Creador (*)</label>
                                    <input type="text" class="form-control" id="creadorLenguajeActualizar" name="creadorLenguajeActualizar" placeholder="Creador"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Fecha de Creación (*)</label>
                                    <input type="date" class="form-control" id="fechaCreacionActualizar" name="fechaCreacionActualizar" />
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

<!--------------------------------------------------------- Modal DetalleLenguaje----------------------------------------------->
<div class="modal fade" id="modalDetalleLenguaje" tabindex="-1" role="dialog" aria-labelledby="modalDetalleLenguaje" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-primary">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Lenguaje <small> &nbsp;(*) Campos requeridos</small></h4>
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
                                    <input disabled type="text" class="form-control" id="idLenguajeConsultar" name="idLenguajeConsultar" placeholder="Id Lenguaje" readonly/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" class="form-control" id="nombreLenguajeConsultar" name="nombreLenguajeConsultar" placeholder="Nombre" readonly/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Paradigma (*)</label>
                                    <input type="text" class="form-control" id="paradigmaLenguajeConsultar" name="paradigmaLenguajeConsultar" placeholder="Paradigma" readonly/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Creador (*)</label>
                                    <input type="text" class="form-control" id="creadorLenguajeConsultar" name="creadorLenguajeConsultar" placeholder="Creador" readonly/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Fecha de Creación (*)</label>
                                    <input type="date" class="form-control" id="fechaCreacionLenguajeConsultar" name="fechaCreacionLenguajeConsultar" readonly/>
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

<!-- ****************************** Modal Eliminar Lenguaje *************************************************-->
<div class="modal fade" id="modalEliminarLenguaje" tabindex="-1" role="dialog" aria-labelledby="modalEliminarLenguaje" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form role="form" id="formEliminarLenguaje" name="formActualizarLenguaje">
                <input type="text" hidden id="idEliminarLenguaje" name="idEliminarLenguaje">
                <div class="modal-body text-center text-danger">¿Realmente deseas eliminar este Lenguaje?</div>
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
        mostrarLenguajes();
        enviarFormularioRegistrar();
        enviarFormularioActualizar();
        eliminarRegistro();
    });

    var mostrarLenguajes = function() {
        var tableLenguaje = $('#dataTableLenguaje').DataTable({
            "processing": true,
            "ajax": {
                "url": "<?php echo constant('URL');?>Lenguaje/read"
            },
            "columns": [
                { "data": "id_lenguaje" },
                { "data": "nombre_lenguaje" },
                { "data": "paradigma_lenguaje" },
                { "data": "creador_lenguaje" },
                { "data": "fecha_creacion_lenguaje" },
                {data:null,
                    "defaultContent":
                        `<button class='consulta btn btn-primary' data-toggle='modal' data-target='#modalDetalleLenguaje' title="Ver Detalles"><i class="fa fa-eye"></i></button>
                         <button class='editar btn btn-warning' data-toggle='modal' data-target='#modalActualizarLenguaje' title="Editar Datos"><i class="fa fa-edit"></i></button>
                         <button class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminarLenguaje' title="Eliminar Registro"><i class="far fa-trash-alt"></i></button>`
                }
            ],
            responsive: true,
            autoWidth: false,
            language: idiomaDataTable,
            lengthChange: true,
            buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
            dom: 'Bfltip'
        });
        obtenerdatosDT(tableLenguaje);
    }

    var obtenerdatosDT = function (table) {
        $('#dataTableLenguaje tbody').on('click', 'tr', function() {
            var data = table.row(this).data();
            var idEliminar = $('#idEliminarLenguaje').val(data.id_lenguaje);

            var idActualizar = $("#idLenguajeActualizar").val(data.id_lenguaje);
            var nombreLenguajeActualizar = $("#nombreLenguajeActualizar").val(data.nombre_lenguaje);
            var apellido = $("#paradigmaLenguajeActualizar").val(data.paradigma_lenguaje);
            var nombreLenguajeActualizar = $("#creadorLenguajeActualizar").val(data.creador_lenguaje);
            var apellido = $("#fechaCreacionActualizar").val(data.fecha_creacion_lenguaje);

            var idConsulta = $("#idLenguajeConsultar").val(data.id_lenguaje);
            var nombreConsulta = $("#nombreLenguajeConsultar").val(data.nombre_lenguaje);
            var apellidoConsulta = $("#paradigmaLenguajeConsultar").val(data.paradigma_lenguaje);
            var nombreConsulta = $("#creadorLenguajeConsultar").val(data.creador_lenguaje);
            var apellidoConsulta = $("#fechaCreacionLenguajeConsultar").val(data.fecha_creacion_lenguaje)
        });
    }

    var enviarFormularioRegistrar = function () {
        $.validator.setDefaults({
            submitHandler: function () {
                var datos = $('#formRegistrarLenguaje').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>Lenguaje/insert",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "La Lenguaje ha sido registrado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>Lenguaje";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al registrar el Lenguaje. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formRegistrarLenguaje').validate({
            rules: {
                nombreLenguaje: {
                    required: true
                },
                apellidosLenguaje: {
                    required: true
                },
            },
            messages: {
                nombreLenguaje: {
                    required: "Ingresa un nombre"
                },
                paradigmaLenguaje: {
                    required: "Ingresa un partadigma"
                },
                creadorLenguaje: {
                    required: "Ingresa un creador"
                },
                fechaCreacionLenguaje: {
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
                var datos = $('#formActualizarLenguaje').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>Lenguaje/update",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "La Lenguaje ha sido Actualizado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>Lenguaje";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al Actualizar el Lenguaje. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formActualizarLenguaje').validate({
            rules: {
                nombreLenguajeActualizar: {
                    required: true
                },
                apellidosLenguajeActualizar: {
                    required: true
                }
            },
            messages: {
                nombreLenguaje: {
                    required: "Ingresa un nombre"
                },
                paradigmaLenguaje: {
                    required: "Ingresa un partadigma"
                },
                creadorLenguaje: {
                    required: "Ingresa un creador"
                },
                fechaCreacionLenguaje: {
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
        $( "#formEliminarLenguaje" ).submit(function( event ) {
            event.preventDefault();
            var datos = $('#formEliminarLenguaje').serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo constant('URL');?>Lenguaje/delete",
                data: datos,
                success: function (data) {
                    if (data == 'ok') {
                        Swal.fire(
                            "¡Éxito!",
                            "El Lenguaje ha sido eliminado correctamente",
                            "success"
                        ).then(function () {
                            window.location = "<?php echo constant('URL');?>Lenguaje";
                        })
                    } else {
                        Swal.fire (
                            "¡Error!",
                            "Ha ocurrido un error al eliminar el Lenguaje. " + data,
                            "error"
                        );
                    }
                },
            });
        });
    }

    /*var dataTableFunction = function () {
        var table = $("#dataTableLenguaje").DataTable({
            responsive: true,
            language: idiomaDataTable,
            lengthChange: true,
            buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
            dom: 'Bfltip'
        });

        table.buttons().container().appendTo('#dataTableLenguaje_wrapper .col-md-6:eq(0)');
    }*/
</script>
