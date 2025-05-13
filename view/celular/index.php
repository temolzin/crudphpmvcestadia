<?php
    require 'view/menu.php';
    $menu = new Menu();
    $menu->header('celular');
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-right">
                <button class="btn btn-success" data-toggle='modal' data-target='#modalRegistrarcelular'> <i class="fas fa-plus-circle"></i> Registrar Celular </button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabla Celular</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTablecelular" name="dataTablecelular" class="table table-bordered table-hover dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Marca</th>
                                    <th>Precio</th>
                                    <th>Imei</th>
                                    <th>Almacenamiento</th>
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
<div class="modal fade" id="modalRegistrarcelular" tabindex="-1" role="dialog" aria-labelledby="modalRegistrarcelular" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-success">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Celular <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->

                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formRegistrarcelular" name="formRegistrarcelular" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Marca (*)</label>
                                    <input type="text" class="form-control" id="materialcelular" name="materialcelular" placeholder="Marca"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="text" class="form-control" id="precio" name="precio" placeholder="Precio"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Imei (*)</label>
                                    <input type="text" class="form-control" id="altura" name="altura" placeholder="Imei"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Almacenamiento (*)</label>
                                    <input type="text" class="form-control" id="anchura" name="anchura" placeholder="Almacenamiento"/>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">Registrar Celular</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--------------------------------------------------------- Modal Actualizar----------------------------------------------->
<div class="modal fade" id="modalActualizarcelular" tabindex="-1" role="dialog" aria-labelledby="modalActualizarcelular" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-warning">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Celular <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formActualizarcelular" name="formActualizarcelular">
                    <div class="card-body">
                        <div style="display: none;" class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>id celular (*)</label>
                                    <input type="text" class="form-control" id="idcelularActualizar" name="idcelularActualizar" placeholder="idcelular"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Marca (*)</label>
                                    <input type="text" class="form-control" id="materialcelularActualizar" name="materialcelularActualizar" placeholder="Marca"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="text" class="form-control" id="preciocelularActualizar" name="preciocelularActualizar" placeholder="Precio"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Imei (*)</label>
                                    <input type="text" class="form-control" id="alturacelularActualizar" name="alturacelularActualizar" placeholder="Imei"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Almacenamiento (*)</label>
                                    <input type="text" class="form-control" id="anchuracelularActualizar" name="anchuracelularActualizar" placeholder="Almacenamiento"/>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-warning">Actualizar Celular</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--------------------------------------------------------- Modal Detallecelular----------------------------------------------->
<div class="modal fade" id="modalDetallecelular" tabindex="-1" role="dialog" aria-labelledby="modalDetallecelular" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-primary">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Celular <small> &nbsp;(*) Campos requeridos</small></h4>
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
                                    <label>Id celular (*)</label>
                                    <input disabled type="text" class="form-control" id="idcelularConsultar" name="idcelularConsultar" placeholder="Idcelular"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>  Marca (*)</label>
                                    <input type="text" disabled class="form-control" id="materialcelularConsultar" name="materialcelularConsultar" placeholder="Marca"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="text" disabled class="form-control" id="preciocelularConsultar" name="preciocelularConsultar" placeholder="Precio"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Imei (*)</label>
                                    <input type="text" disabled class="form-control" id="alturacelularConsultar" name="alturacelularConsultar" placeholder="Imei"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Almacenamiento (*)</label>
                                    <input type="text" disabled class="form-control" id="anchuracelularConsultar" name="anchuracelularConsultar" placeholder="Almacenamiento"/>
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

<!-- ****************************** Modal Eliminar Alumno *************************************************-->
<div class="modal fade" id="modalEliminarcelular" tabindex="-1" role="dialog" aria-labelledby="modalEliminarcelular" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form role="form" id="formEliminarcelular" name="formActualizarcelular">
                <input type="text" hidden id="idEliminarcelular" name="idEliminarcelular">
                <div class="modal-body text-center text-danger">¿Realmente deseas eliminar este celular?</div>
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
        mostrarcelulars();
        enviarFormularioRegistrar();
        enviarFormularioActualizar();
        eliminarRegistro();
    });

    var mostrarcelulars = function() {
        var tablecelular = $('#dataTablecelular').DataTable({
            "processing": true,
            "ajax": {
                "url": "<?php echo constant('URL');?>celular/read"
            },
            "columns": [
                { "data": "celular_id" },
                { "data": "celular_material" },
                { "data": "celular_precio" },
                { "data": "celular_altura" },
                { "data": "celular_anchura" },
                {data: null,
                    "defaultContent":
                        `<button class='consulta btn btn-primary' data-toggle='modal' data-target='#modalDetallecelular' title="Ver Detalles"><i class="fa fa-eye"></i></button>
                         <button class='editar btn btn-warning' data-toggle='modal' data-target='#modalActualizarcelular' title="Editar Datos"><i class="fa fa-edit"></i></button>
                         <button class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminarcelular' title="Eliminar Registro"><i class="far fa-trash-alt"></i></button>`
                }
            ],
            responsive: true,
            autoWidth: false,
            language: idiomaDataTable,
            lengthChange: true,
            buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
            dom: 'Bfltip'
        });
        obtenerdatosDT(tablecelular);
    }

    var obtenerdatosDT = function (table) { 
        $('#dataTablecelular tbody').on('click', 'tr', function() {
            var data = table.row(this).data();
            var idEliminar = $('#idEliminarcelular').val(data.celular_id);

            var idActualizar = $("#idcelularActualizar").val(data.celular_id);
            var materialcelularActualizar = $("#materialcelularActualizar").val(data.celular_material);
            var preciocelularActualizar = $("#preciocelularActualizar").val(data.celular_precio);
            var alturacelularActualizar = $("#alturacelularActualizar").val(data.celular_altura);
            var anchuracelularActualizar = $("#anchuracelularActualizar").val(data.celular_anchura);

            var idConsulta = $("#idcelularConsultar").val(data.celular_id);
            var materialConsulta = $("#materialcelularConsultar").val(data.celular_material);
            var precioConsulta = $("#preciocelularConsultar").val(data.celular_precio);
            var alturaConsulta = $("#alturacelularConsultar").val(data.celular_altura);
            var anchuraConsulta = $("#anchuracelularConsultar").val(data.celular_anchura);
        });
    }
    
    var enviarFormularioRegistrar = function () {
        $.validator.setDefaults({
            submitHandler: function () {
                var datos = $('#formRegistrarcelular').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>celular/insert",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "El celular ha sido registrado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>celular";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al registrar la celular. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formRegistrarcelular').validate({
            rules: {
                materialcelular: {
                    required: true
                },
                precio: {
                    required: true
                },
                altura: {
                    required: true
                },
                anchura: {
                    required: true
                },
            },
            messages: {
                materialcelular: {
                    required: "Ingresa la marca del celular"
                },
                precio: {
                    required: "Ingresa el precio del celular"
                },
                altura: {
                    required: "Ingresa el imei del celular"
                },
                anchura: {
                    required: "Ingresa el almacenamiento del celular"
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
                var datos = $('#formActualizarcelular').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>celular/update",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "El celular ha sido Actualizado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>celular";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al Actualizar el celular. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formActualizarcelular').validate({
            rules: {
                materialcelularActualizar: {
                    required: true
                },
                preciocelularActualizar: {
                    required: true
                },
                alturacelularActualizar: {
                    required: true
                },
                anchuracelularActualizar: {
                    required: true
                }
            },
            messages: {
                materialcelularActualizar: {
                    required: "Ingresa la marca del celular"
                },
                preciocelularActualizar: {
                    required: "Ingresa el precio del celular"
                },
                alturacelularActualizar: {
                    required: "Ingresa el imei del celular"
                },
                anchuracelularActualizar: {
                    required: "Ingresa el almacenamiento celular"
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
        $( "#formEliminarcelular" ).submit(function( event ) {
            event.preventDefault();
            var datos = $('#formEliminarcelular').serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo constant('URL');?>celular/delete",
                data: datos,
                success: function (data) {
                    if (data == 'ok') {
                        Swal.fire(
                            "¡Éxito!",
                            "La celular ha sido eliminado correctamente",
                            "success"
                        ).then(function () {
                            window.location = "<?php echo constant('URL');?>celular";
                        })
                    } else {
                        Swal.fire (
                            "¡Error!",
                            "Ha ocurrido un error al eliminar la celular. " + data,
                            "error"
                        );
                    }
                },
            });
        });
    }
</script>
