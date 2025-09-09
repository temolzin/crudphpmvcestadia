<?php
    require 'view/menu.php';
    $menu = new Menu();
    $menu->header('player');
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-right">
                <button class="btn btn-success" data-toggle='modal' data-target='#modalRegistrarPlayer'> <i class="fas fa-plus-circle"></i> Registrar Jugador </button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabla Jugador</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTablePlayer" name="dataTablePlayer" class="table table-bordered table-hover dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Edad</th>
                                    <th>Posición</th>
                                    <th>Número de Camiseta</th>
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
<div class="modal fade" id="modalRegistrarPlayer" tabindex="-1" role="dialog" aria-labelledby="modalRegistrarPlayer" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-success">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Jugador <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->

                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formRegistrarPlayer" name="formRegistrarPlayer" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" class="form-control" id="nombrePlayer" name="firstName" placeholder="Nombre"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Apellidos (*)</label>
                                    <input type="text" class="form-control" id="apellidosPlayer" name="lastName" placeholder="Apellidos"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Edad (*)</label>
                                    <input type="number" class="form-control" id="edadPlayer" name="age" placeholder="Edad"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Posición (*)</label>
                                    <input type="text" class="form-control" id="posicionPlayer" name="position" placeholder="Posición"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Número de Camiseta (*)</label>
                                    <input type="number" class="form-control" id="numeroCamiseta" name="jerseyNumber" placeholder="Número de Camiseta"/>
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
<div class="modal fade" id="modalActualizarPlayer" tabindex="-1" role="dialog" aria-labelledby="modalActualizarPlayer" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-warning">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Jugador <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formActualizarPlayer" name="formActualizarPlayer">
                    <div class="card-body">
                        <div style="display: none;" class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Matrícula (*)</label>
                                    <input type="text" class="form-control" id="idPlayerActualizar" name="idPlayerActualizar" placeholder="Matrícula"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" class="form-control" id="nombrePlayerActualizar" name="nombrePlayerActualizar" placeholder="Nombre"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Apellidos (*)</label>
                                    <input type="text" class="form-control" id="apellidosPlayerActualizar" name="apellidosPlayerActualizar" placeholder="Apellidos"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Edad (*)</label>
                                    <input type="text" class="form-control" id="edadPlayerActualizar" name="edadPlayerActualizar" placeholder="Edad"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Posición (*)</label>
                                    <input type="text" class="form-control" id="posicionPlayerActualizar" name="posicionPlayerActualizar" placeholder="Posición"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Numero de Camiseta (*)</label>
                                    <input type="text" class="form-control" id="numeroCamisetaPlayerActualizar" name="numeroCamisetaPlayerActualizar" placeholder="Numero de Camiseta"/>
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

<!--------------------------------------------------------- Modal Detalle Player----------------------------------------------->
<div class="modal fade" id="modalDetallePlayer" tabindex="-1" role="dialog" aria-labelledby="modalDetallePlayer" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-primary">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Jugador <small> &nbsp;(*) Campos requeridos</small></h4>
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
                                    <input type="text" disabled class="form-control" id="nombrePlayerConsultar" name="nombrePlayerConsultar" placeholder="Nombre"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Apellidos (*)</label>
                                    <input type="text" disabled class="form-control" id="apellidoPlayerConsultar" name="apellidoPlayerConsultar" placeholder="Apellidos"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Edad (*)</label>
                                    <input type="text" disabled class="form-control" id="edadPlayerConsultar" name="edadPlayerConsultar" placeholder="Edad"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Posición (*)</label>
                                    <input type="text" disabled class="form-control" id="posicionPlayerConsultar" name="posicionPlayerConsultar" placeholder="Posición"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Número de Camiseta (*)</label>
                                    <input type="text" disabled class="form-control" id="numeroCamisetaPlayerConsultar" name="numeroCamisetaPlayerConsultar" placeholder="Número de Camiseta"/>
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

<!-- ****************************** Modal Eliminar Player *************************************************-->
<div class="modal fade" id="modalEliminarPlayer" tabindex="-1" role="dialog" aria-labelledby="modalEliminarPlayer" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form role="form" id="formEliminarPlayer" name="formActualizarPlayer">
                <input type="text" hidden id="idEliminarPlayer" name="idEliminarPlayer">
                <div class="modal-body text-center text-danger">¿Realmente deseas eliminar este Jugador?</div>
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
        mostrarPlayers();
        enviarFormularioRegistrar();
        enviarFormularioActualizar();
        eliminarRegistro();
    });

    var mostrarPlayers = function() {
        var tablePlayer = $('#dataTablePlayer').DataTable({
            "processing": true,
            "ajax": {
                "url": "<?php echo constant('URL');?>player/read"
            },
            "columns": [
                { "data": "id_player" },
                { "data": "nombre_player" },
                { "data": "apellidos_player" },
                { "data": "edad_player" },
                { "data": "posicion_player" },
                { "data": "numero_camiseta" },
                {data:null,
                    "defaultContent":
                        `<button class='consulta btn btn-primary' data-toggle='modal' data-target='#modalDetallePlayer' title="Ver Detalles"><i class="fa fa-eye"></i></button>
                         <button class='editar btn btn-warning' data-toggle='modal' data-target='#modalActualizarPlayer' title="Editar Datos"><i class="fa fa-edit"></i></button>
                         <button class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminarPlayer' title="Eliminar Registro"><i class="far fa-trash-alt"></i></button>`
                }
            ],
            responsive: true,
            autoWidth: false,
            language: idiomaDataTable,
            lengthChange: true,
            buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
            dom: 'Bfltip'
        });
        obtenerdatosDT(tablePlayer);
    }

    var obtenerdatosDT = function (table) {
        $('#dataTablePlayer tbody').on('click', 'tr', function() {
            var data = table.row(this).data();
            var idEliminar = $('#idEliminarPlayer').val(data.id_player);

            var idActualizar = $("#idPlayerActualizar").val(data.id_player);
            var nombrePlayerActualizar = $("#nombrePlayerActualizar").val(data.nombre_player);
            var apellido = $("#apellidosPlayerActualizar").val(data.apellidos_player);
            var edad = $("#edadPlayerActualizar").val(data.edad_player);
            var posicion = $("#posicionPlayerActualizar").val(data.posicion_player);
            var numeroCamiseta = $("#numeroCamisetaPlayerActualizar").val(data.numero_camiseta);


            var idConsulta = $("#idPlayerConsultar").val(data.id_player);
            var nombreConsulta = $("#nombrePlayerConsultar").val(data.nombre_player);
            var apellidoConsulta = $("#apellidoPlayerConsultar").val(data.apellidos_player);
            var edadConsulta = $("#edadPlayerConsultar").val(data.edad_player);
            var posicionConsulta = $("#posicionPlayerConsultar").val(data.posicion_player);
            var numeroCamisetaConsulta = $("#numeroCamisetaPlayerConsultar").val(data.numero_camiseta);
        });
    }

    var enviarFormularioRegistrar = function () {
        $.validator.setDefaults({
            submitHandler: function () {
                var datos = $('#formRegistrarPlayer').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>player/insert",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "La Player ha sido registrado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>player";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al registrar el Player. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formRegistrarPlayer').validate({
            rules: {
                nombrePlayer: {
                    required: true
                },
                apellidosPlayer: {
                    required: true
                },
                edadPlayer: {
                    required: true
                },
                posicionPlayer: {
                    required: true
                },
                numeroCamiseta: {
                    required: true
                }
            },
            messages: {
                nombrePlayer: {
                    required: "Ingresa un nombre"
                },
                apellidosPlayer: {
                    required: "Ingresa un apellido"
                },
                edadPlayer: {
                    required: "Ingresa la edad"
                },
                posicionPlayer: {
                    required: "Ingresa la posición"
                },
                numeroCamiseta: {
                    required: "Ingresa el número de camiseta"
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
                var datos = $('#formActualizarPlayer').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>player/update",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "El jugador ha sido Actualizado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>player";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al Actualizar el jugador. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formActualizarPlayer').validate({
            rules: {
                nombrePlayerActualizar: {
                    required: true
                },
                apellidosPlayerActualizar: {
                    required: true
                },
                edadPlayerActualizar: {
                    required: true
                },
                posicionPlayerActualizar: {
                    required: true
                },
                numeroCamisetaPlayerActualizar: {
                    required: true
                }
            },
            messages: {
                nombreActualizar: {
                    required: "Ingresa un nombre"
                },
                apellidosPlayerActualizar: {
                    required: "Ingresa un apellido"
                },
                edadPlayerActualizar: {
                    required: "Ingresa la edad"
                },
                posicionPlayerActualizar: {
                    required: "Ingresa la posición"
                },
                numeroCamisetaPlayerActualizar: {
                    required: "Ingresa el número de camiseta"
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
        $( "#formEliminarPlayer" ).submit(function( event ) {
            event.preventDefault();
            var datos = $('#formEliminarPlayer').serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo constant('URL');?>player/delete",
                data: datos,
                success: function (data) {
                    if (data == 'ok') {
                        Swal.fire(
                            "¡Éxito!",
                            "El Jugador ha sido eliminado correctamente",
                            "success"
                        ).then(function () {
                            window.location = "<?php echo constant('URL');?>player";
                        })
                    } else {
                        Swal.fire (
                            "¡Error!",
                            "Ha ocurrido un error al eliminar el Jugador. " + data,
                            "error"
                        );
                    }
                },
            });
        });
    }

    /*var dataTableFunction = function () {
        var table = $("#dataTablePlayer").DataTable({
            responsive: true,
            language: idiomaDataTable,
            lengthChange: true,
            buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
            dom: 'Bfltip'
        });

        table.buttons().container().appendTo('#dataTablePlayer_wrapper .col-md-6:eq(0)');
    }*/
</script>
