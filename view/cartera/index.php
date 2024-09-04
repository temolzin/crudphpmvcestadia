<?php
    require 'view/menu.php';
    $menu = new Menu();
    $menu->header('cartera');
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-right">
                <button class="btn btn-success" data-toggle='modal' data-target='#modalRegistrarCartera'> <i class="fas fa-plus-circle"></i> Registrar Cartera</button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabla Cartera</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTableCartera" name="dataTableCartera" class="table table-bordered table-hover dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Material</th>
                                    <th>color</th>
                                    <th>Modelo</th>
                                    <th>Marca</th>
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
<div class="modal fade" id="modalRegistrarCartera" tabindex="-1" role="dialog" aria-labelledby="modalRegistrarCartera" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-success">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Cartera <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->

                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formRegistrarCartera" name="formRegistrarCartera" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Material (*)</label>
                                    <input type="text" class="form-control" id="material" name="material" placeholder="Material"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Color (*)</label>
                                    <input type="text" class="form-control" id="color" name="color" placeholder="Color"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Modelo(*)</label>
                                    <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Modelo"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Marca (*)</label>
                                    <input type="text" class="form-control" id="marca" name="marca" placeholder="Marca"/>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">Registrar Cartera</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--------------------------------------------------------- Modal Actualizar----------------------------------------------->
<div class="modal fade" id="modalActualizarCartera" tabindex="-1" role="dialog" aria-labelledby="modalActualizarCartera" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-warning">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Cartera <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formActualizarCartera" name="formActualizarCartera">
                    <div class="card-body">
                        <div style="display: none;" class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>idCartera (*)</label>
                                    <input type="text" class="form-control" id="idCarteraActualizar" name="idCarteraActualizar" placeholder="idCartera"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Material (*)</label>
                                    <input type="text" class="form-control" id="materialCarteraActualizar" name="materialCarteraActualizar" placeholder="Material"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Color (*)</label>
                                    <input type="text" class="form-control" id="colorCarteraActualizar" name="colorCarteraActualizar" placeholder="Color"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Modelo (*)</label>
                                    <input type="text" class="form-control" id="modeloCarteraActualizar" name="modeloCarteraActualizar" placeholder="Modelo"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Marca (*)</label>
                                    <input type="text" class="form-control" id="marcaCarteraActualizar" name="marcaCarteraActualizar" placeholder="Marca"/>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-warning">Actualizar Cartera</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--------------------------------------------------------- Modal DetalleAlumno----------------------------------------------->
<div class="modal fade" id="modalDetalleCartera" tabindex="-1" role="dialog" aria-labelledby="modalDetalleCartera" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-primary">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Cartera <small> &nbsp;(*) Campos requeridos</small></h4>
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
                                    <label>IdCartera (*)</label>
                                    <input disabled type="text" class="form-control" id="idCarteraConsultar" name="idCarteraConsultar" placeholder="IdCartera "/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Material (*)</label>
                                    <input type="text" disabled class="form-control" id="materialCarteraConsultar" name="materialCarteraConsultar" placeholder="Material"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Color (*)</label>
                                    <input type="text" disabled class="form-control" id="colorCarteraConsultar" name="colorCarteraConsultar" placeholder="Color"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Modelo (*)</label>
                                    <input type="text" disabled class="form-control" id="modeloCarteraConsultar" name="modeloCarteraConsultar" placeholder="Modelo"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Marca (*)</label>
                                    <input type="text" disabled class="form-control" id="marcaCarteraConsultar" name="marcaCarteraConsultar" placeholder="Marca"/>
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

<!-- ****************************** Modal Eliminar cartera *************************************************-->
<div class="modal fade" id="modalEliminarCartera" tabindex="-1" role="dialog" aria-labelledby="modalEliminarCartera" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form role="form" id="formEliminarCartera" name="formActualizarCartera">
                <input type="text" hidden id="idEliminarCartera" name="idEliminarCartera">
                <div class="modal-body text-center text-danger">¿Realmente deseas eliminar esta cartera?</div>
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
        mostrarCartera();
        enviarFormularioRegistrar();
        enviarFormularioActualizar();
        eliminarRegistro();
    });

    var mostrarCartera = function() {
        var tableCartera = $('#dataTableCartera').DataTable({
            "processing": true,
            "ajax": {
                "url": "<?php echo constant('URL');?>cartera/read"
            },
            "columns": [
                { "data": "id_cartera" },
                { "data": "material" },
                { "data": "color" },
                { "data": "modelo" },
                { "data": "marca" },
                {data: null,
                    "defaultContent":
                        `<button class='consulta btn btn-primary' data-toggle='modal' data-target='#modalDetalleCartera' title="Ver Detalles"><i class="fa fa-eye"></i></button>
                         <button class='editar btn btn-warning' data-toggle='modal' data-target='#modalActualizarCartera' title="Editar Datos"><i class="fa fa-edit"></i></button>
                         <button class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminarCartera' title="Eliminar Registro"><i class="far fa-trash-alt"></i></button>`
                }
            ],
            responsive: true,
            autoWidth: false,
            language: idiomaDataTable,
            lengthChange: true,
            buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
            dom: 'Bfltip'
        });
        obtenerdatosDT(tableCartera);
    }

    var obtenerdatosDT = function (table) { 
        $('#dataTableCartera tbody').on('click', 'tr', function() {
            var data = table.row(this).data();
            var idEliminar = $('#idEliminarCartera').val(data.id_cartera);

            var idActualizar = $("#idCarteraActualizar").val(data.id_cartera);
            var materialCarteraActualizar = $("#materialCarteraActualizar").val(data.material);
            var colorCarteraActualizar = $("#colorCarteraActualizar").val(data.color);
            var modeloCarteraActualizar = $("#modeloCarteraActualizar").val(data.modelo);
            var marcaCarteraActualizar = $("#marcaCarteraActualizar").val(data.marca);

            var idConsulta = $("#idCarteraConsultar").val(data.id_cartera);
            var materialConsulta = $("#materialCarteraConsultar").val(data.material);
            var colorConsulta = $("#colorCarteraConsultar").val(data.color);
            var modeloConsulta = $("#modeloCarteraConsultar").val(data.modelo);
            var marcaConsulta = $("#marcaCarteraConsultar").val(data.marca);
        });
    }
    
    var enviarFormularioRegistrar = function () {
        $.validator.setDefaults({
            submitHandler: function () {
                var datos = $('#formRegistrarCartera').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>cartera/insert",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "La Cartera ha sido registrado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>cartera";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al registrar la Cartera. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formRegistrarCartera').validate({
            rules: {
                material: {
                    required: true
                },
                color: {
                    required: true
                },
                modelo: {
                    required: true
                },
                marca: {
                    required: true
                },
            },
            messages: {
                material: {
                    required: "Ingresa un material a la Cartera"
                },
                color: {
                    required: "Ingresa un género de Cartera"
                },
                modelo: {
                    required: "Ingresa el modelo"
                },
                marca: {
                    required: "Ingresa una marca"
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
                var datos = $('#formActualizarCartera').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>cartera/update",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "La Cartera ha sido Actualizado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>cartera";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al Actualizar la Cartera. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formActualizarCartera').validate({
            rules: {
                materialCarteraActualizar: {
                    required: true
                },
                colorCarteraActualizar: {
                    required: true
                },
                modeloCarteraActualizar: {
                    required: true
                },
                marcaCarteraActualizar: {
                    required: true
                }
            },
            messages: {
                materialActualizar: {
                    required: "Ingresa el material a la Cartera"
                },
                colorCarteraActualizar: {
                    required: "Ingresa un género de cartera"
                },
                modeloCarteraActualizar: {
                    required: "Ingresa el modelo de cartera"
                },
                marcaCarteraActualizar: {
                    required: "Ingresa una marca de cartera"
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
        $( "#formEliminarCartera" ).submit(function( event ) {
            event.preventDefault();
            var datos = $('#formEliminarCartera').serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo constant('URL');?>cartera/delete",
                data: datos,
                success: function (data) {
                    if (data == 'ok') {
                        Swal.fire(
                            "¡Éxito!",
                            "La Cartera ha sido eliminado correctamente",
                            "success"
                        ).then(function () {
                            window.location = "<?php echo constant('URL');?>cartera";
                        })
                    } else {
                        Swal.fire (
                            "¡Error!",
                            "Ha ocurrido un error al eliminar la cartera. " + data,
                            "error"
                        );
                    }
                },
            });
        });
    }
</script>
