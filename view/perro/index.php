<?php
    require 'view/menu.php';
    $menu = new Menu();
    $menu->header('perro');
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-right">
                <button class="btn btn-success" data-toggle='modal' data-target='#modalRegistrarPerro'> <i class="fas fa-plus-circle"></i> Registrar Perro </button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabla Perros</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTablePerro" name="dataTablePerro" class="table table-bordered table-hover dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Raza</th>
                                    <th>Edad</th>
                                    <th>Sexo</th>
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
<!--------------------------------------------------------- Modal Registrar Perro----------------------------------------------->
<div class="modal fade" id="modalRegistrarPerro" tabindex="-1" role="dialog" aria-labelledby="modalRegistrarPerro" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-success">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Perro <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->

                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formRegistrarPerro" name="formRegistrarPerro" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" class="form-control" id="nombrePerro" name="nombrePerro" placeholder="Nombre"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Raza (*)</label>
                                    <input type="text" class="form-control" id="razaPerro" name="razaPerro" placeholder="Raza"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Edad (años) (*)</label>
                                    <input type="numeric" class="form-control" id="edadPerro" name="edadPerro" placeholder="Edad"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Sexo (*)</label>
                                    <input type="text" class="form-control" id="sexoPerro" name="sexoPerro" placeholder="Sexo"/>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">Registrar Perro</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--------------------------------------------------------- Modal Actualizar Perro ----------------------------------------------->
<div class="modal fade" id="modalActualizarPerro" tabindex="-1" role="dialog" aria-labelledby="modalActualizarPerro" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-warning">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Perro <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formActualizarPerro" name="formActualizarPerro">
                    <div class="card-body">
                        <div style="display: none;" class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>idPerro (*)</label>
                                    <input type="text" class="form-control" id="idPerroActualizar" name="idPerroActualizar" placeholder="idPerro"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" class="form-control" id="nombrePerroActualizar" name="nombrePerroActualizar" placeholder="Nombre perro"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Raza (*)</label>
                                    <input type="text" class="form-control" id="razaPerroActualizar" name="razaPerroActualizar" placeholder="Raza"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Edad (*)</label>
                                    <input type="numeric" class="form-control" id="edadPerroActualizar" name="edadPerroActualizar" placeholder="edad de publicación"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Sexo (*)</label>
                                    <input type="text" class="form-control" id="sexoPerroActualizar" name="sexoPerroActualizar" placeholder="Sexo"/>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-warning">Actualizar perro</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--------------------------------------------------------- Modal Detalle Perro ----------------------------------------------->
<div class="modal fade" id="modalDetallePerro" tabindex="-1" role="dialog" aria-labelledby="modalDetallePerro" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-primary">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Perro <small> &nbsp;(*) Campos requeridos</small></h4>
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
                                    <label>IdPerro (*)</label>
                                    <input disabled type="text" class="form-control" id="idPerroConsultar" name="idPerroConsultar" placeholder="IdPerro"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" disabled class="form-control" id="nombrePerroConsultar" name="nombrePerroConsultar" placeholder="Nombre Perro"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Raza (*)</label>
                                    <input type="text" disabled class="form-control" id="razaPerroConsultar" name="razaPerroConsultar" placeholder="Raza"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Edad (*)</label>
                                    <input type="numeric" disabled class="form-control" id="edadPerroConsultar" name="edadPerroConsultar" placeholder="Edad"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Sexo (*)</label>
                                    <input type="text" disabled class="form-control" id="sexoPerroConsultar" name="sexoPerroConsultar" placeholder="Sexo"/>
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

<!---------------------------------------- Modal Eliminar Perro ---------------------------------------------------------------->
<div class="modal fade" id="modalEliminarPerro" tabindex="-1" role="dialog" aria-labelledby="modalEliminarPerro" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form role="form" id="formEliminarPerro" name="formEliminarPerro">
                <input type="text" hidden id="idEliminarPerro" name="idEliminarPerro">
                <div class="modal-body text-center text-danger">¿Realmente deseas eliminar esta perro?</div>
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
        mostrarPerros();
        enviarFormularioRegistrar();
        enviarFormularioActualizar();
        eliminarRegistro();
    });

    var mostrarPerros = function() {
        var tablePerro = $('#dataTablePerro').DataTable({
            "processing": true,
            "ajax": {
                "url": "<?php echo constant('URL');?>perro/read"
            },
            "columns": [
                { "data": "id_perro" },
                { "data": "nombre_perro" },
                { "data": "raza_perro" },
                { "data": "edad_perro" },
                { "data": "sexo_perro" },
                {data: null,
                    "defaultContent":
                        `<button class='consulta btn btn-primary' data-toggle='modal' data-target='#modalDetallePerro' title="Ver Detalles"><i class="fa fa-eye"></i></button>
                         <button class='editar btn btn-warning' data-toggle='modal' data-target='#modalActualizarPerro' title="Editar Datos"><i class="fa fa-edit"></i></button>
                         <button class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminarPerro' title="Eliminar Registro"><i class="far fa-trash-alt"></i></button>`
                }
            ],
            responsive: true,
            autoWidth: false,
            language: idiomaDataTable,
            lengthChange: true,
            buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
            dom: 'Bfltip'
        });
        obtenerdatosDT(tablePerro);
    }

    var obtenerdatosDT = function (table) { 
        $('#dataTablePerro tbody').on('click', 'tr', function() {
            var data = table.row(this).data();
            var idEliminar = $('#idEliminarPerro').val(data.id_perro);

            var idActualizar = $("#idPerroActualizar").val(data.id_perro);
            var nombrePerroActualizar = $("#nombrePerroActualizar").val(data.nombre_perro);
            var razaPerroActualizar = $("#razaPerroActualizar").val(data.raza_perro);
            var edadPerroActualizar = $("#edadPerroActualizar").val(data.edad_perro);
            var sexoPerroActualizar = $("#sexoPerroActualizar").val(data.sexo_perro);

            var idConsulta = $("#idPerroConsultar").val(data.id_perro);
            var nombreConsulta = $("#nombrePerroConsultar").val(data.nombre_perro);
            var razaConsulta = $("#razaPerroConsultar").val(data.raza_perro);
            var edadConsulta = $("#edadPerroConsultar").val(data.edad_perro);
            var sexoConsulta = $("#sexoPerroConsultar").val(data.sexo_perro);
        });
    }
    
    var enviarFormularioRegistrar = function () {
        $.validator.setDefaults({
            submitHandler: function () {
                var datos = $('#formRegistrarPerro').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>perro/insert",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "El perro ha sido registrado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>perro";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al registrar al perro. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formRegistrarPerro').validate({
            rules: {
                nombrePerro: {
                    required: true
                },
                razaPerro: {
                    required: true
                },
                edadPerro: {
                    required: true
                },
                sexoPerro: {
                    required: true
                },
            },
            messages: {
                nombrePerro: {
                    required: "Ingresa el nombre del perro"
                },
                razaPerro: {
                    required: "Ingresa la raza del perro"
                },
                edadPerro: {
                    required: "Ingresa la edad del perro"
                },
                sexoPerro: {
                    required: "Ingresa el sexo del perro"
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
                var datos = $('#formActualizarPerro').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>perro/update",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "El perro se ha actualizado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>perro";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al actualizar al perro. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formActualizarPerro').validate({
            rules: {
                nombrePerroActualizar: {
                    required: true
                },
                razaPerroActualizar: {
                    required: true
                },
                edadPerroActualizar: {
                    required: true
                },
                sexoPerroActualizar: {
                    required: true
                }
            },
            messages: {
                nombreActualizar: {
                    required: "Ingresa el nombre del perro"
                },
                razaPerroActualizar: {
                    required: "Ingresa la raza del perro"
                },
                edadPerroActualizar: {
                    required: "Ingresa la edad del perro"
                },
                sexoPerroActualizar: {
                    required: "Ingresa el sexo del perro"
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
        $( "#formEliminarPerro" ).submit(function( event ) {
            event.preventDefault();
            var datos = $('#formEliminarPerro').serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo constant('URL');?>perro/delete",
                data: datos,
                success: function (data) {
                    if (data == 'ok') {
                        Swal.fire(
                            "¡Éxito!",
                            "El perro ha sido eliminado correctamente",
                            "success"
                        ).then(function () {
                            window.location = "<?php echo constant('URL');?>perro";
                        })
                    } else {
                        Swal.fire (
                            "¡Error!",
                            "Ha ocurrido un error al eliminar al perro. " + data,
                            "error"
                        );
                    }
                },
            });
        });
    }
</script>
