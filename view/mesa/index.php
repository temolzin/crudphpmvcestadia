<?php
    require 'view/menu.php';
    $menu = new Menu();
    $menu->header('mesa');
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-right">
                <button class="btn btn-success" data-toggle='modal' data-target='#modalRegistrarMesa'> <i class="fas fa-plus-circle"></i> Registrar Mesa </button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabla Mesas</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTableMesa" name="dataTableMesa" class="table table-bordered table-hover dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Material</th>
                                    <th>Altura</th>
                                    <th>Acabado</th>
                                    <th>Precio</th>
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
<!--------------------------------------------------------- Modal Registrar Mesa----------------------------------------------->
<div class="modal fade" id="modalRegistrarMesa" tabindex="-1" role="dialog" aria-labelledby="modalRegistrarMesa" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-success">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Registro de mesas <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->

                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formRegistrarMesa" name="formRegistrarMesa" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Material (*)</label>
                                    <select class="form-control" id="materialMesa" name="materialMesa">
                                        <option value="Madera">Madera</option>
                                        <option value="Metal">Metal</option>
                                        <option value="Ceramica">Ceramica</option>
                                        <option value="Vidrio">Vidrio</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Altura (*)</label>
                                    <input type="text" class="form-control" id="alturaMesa" name="alturaMesa" step=".01" placeholder="Altura" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Acabado (*)</label>
                                    <select class="form-control" id="acabadoMesa" name="acabadoMesa">
                                        <option value="Tallado">Tallado</option>
                                        <option value="Barnizado">Barnizado</option>
                                        <option value="Flotante">Flotante</option>
                                        <option value="Lijado">Lijado</option>
                                        <option value="Pintura">Pintura</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="number" class="form-control" id="precioMesa" name="precioMesa" step=".01" placeholder="Precio"/>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">Registrar Mesa</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--------------------------------------------------------- Modal Actualizar----------------------------------------------->
<div class="modal fade" id="modalActualizarMesa" tabindex="-1" role="dialog" aria-labelledby="modalActualizarMesa" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-warning">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Actualizar mesa <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formActualizarMesa" name="formActualizarMesa">
                    <div class="card-body">
                        <div style="display: none;" class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>idMesa (*)</label>
                                    <input type="text" class="form-control" id="idMesaActualizar" name="idMesaActualizar" placeholder="idMesa"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Material (*)</label>
                                    <select class="form-control" id="materialMesaActualizar" name="materialMesaActualizar">
                                        <option value="Madera">Madera</option>
                                        <option value="Metal">Metal</option>
                                        <option value="Ceramica">Ceramica</option>
                                        <option value="Vidrio">Vidrio</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Altura (*)</label>
                                    <input type="number" class="form-control" id="alturaMesaActualizar" name="alturaMesaActualizar" step=".01" placeholder="Altura"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Acabado (*)</label>
                                    <select class="form-control" id="acabadoMesaActualizar" name="acabadoMesaActualizar">
                                        <option value="Tallado">Tallado</option>
                                        <option value="Barnizado">Barnizado</option>
                                        <option value="Flotante">Flotante</option>
                                        <option value="Lijado">Lijado</option>
                                        <option value="Pintura">Pintura</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="number" class="form-control" id="precioMesaActualizar" name="precioMesaActualizar" step=".01" placeholder="Precio"/>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-warning">Actualizar mesa</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--------------------------------------------------------- Modal DetalleMesa----------------------------------------------->
<div class="modal fade" id="modalDetalleMesa" tabindex="-1" role="dialog" aria-labelledby="modalDetalleMesa" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-primary">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Información de la mesa <small> &nbsp;(*) Campos requeridos</small></h4>
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
                                    <label>IdMesa (*)</label>
                                    <input disabled type="text" class="form-control" id="idMesaConsultar" name="idMesaConsultar" placeholder="IdMesa"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Material (*)</label>
                                    <input type="text" disabled class="form-control" id="materialMesaConsultar" name="materialMesaConsultar" placeholder="Material Mesa"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Altura (*)</label>
                                    <input type="number" disabled class="form-control" id="alturaMesaConsultar" name="alturaMesaConsultar" step=".01" placeholder="Altura"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Acabado (*)</label>
                                    <input type="text" disabled class="form-control" id="acabadoMesaConsultar" name="acabadoMesaConsultar" placeholder="Acabado"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="number" disabled class="form-control" id="precioMesaConsultar" name="precioMesaConsultar" step=".01" placeholder="Precio"/>
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

<!-- ****************************** Modal Eliminar Mesa *************************************************-->
<div class="modal fade" id="modalEliminarMesa" tabindex="-1" role="dialog" aria-labelledby="modalEliminarMesa" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form role="form" id="formEliminarMesa" name="formActualizarMesa">
                <input type="text" hidden id="idEliminarMesa" name="idEliminarMesa">
                <div class="modal-body text-center text-danger">¿Realmente deseas eliminar esta mesa?</div>
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
        mostrarMesas();
        enviarFormularioRegistrar();
        enviarFormularioActualizar();
        eliminarRegistro();
    });

    var mostrarMesas = function() {
        var tableMesa = $('#dataTableMesa').DataTable({
            "processing": true,
            "ajax": {
                "url": "<?php echo constant('URL');?>mesa/read"
            },
            "columns": [
                { "data": "id_mesa" },
                { "data": "material" },
                { "data": "altura" },
                { "data": "acabado" },
                { "data": "precio" },
                {data: null,
                    "defaultContent":
                        `<button class='consulta btn btn-primary' data-toggle='modal' data-target='#modalDetalleMesa' title="Ver Detalles"><i class="fa fa-eye"></i></button>
                         <button class='editar btn btn-warning' data-toggle='modal' data-target='#modalActualizarMesa' title="Editar Datos"><i class="fa fa-edit"></i></button>
                         <button class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminarMesa' title="Eliminar Registro"><i class="far fa-trash-alt"></i></button>`
                }
            ],
            responsive: true,
            autoWidth: false,
            language: idiomaDataTable,
            lengthChange: true,
            buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
            dom: 'Bfltip'
        });
        obtenerdatosDT(tableMesa);
    }

    var obtenerdatosDT = function (table) { 
        $('#dataTableMesa tbody').on('click', 'tr', function() {
            var data = table.row(this).data();
            var idEliminar = $('#idEliminarMesa').val(data.id_mesa);

            var idMesaActualizar = $("#idMesaActualizar").val(data.id_mesa);
            var materialMesaActualizar = $("#materialMesaActualizar").val(data.material);
            var alturaMesaActualizar = $("#alturaMesaActualizar").val(data.altura);
            var acabadoMesaActualizar = $("#acabadoMesaActualizar").val(data.acabado);
            var precioMesaActualizar = $("#precioMesaActualizar").val(data.precio);

            var idConsulta = $("#idMesaConsultar").val(data.id_mesa);
            var materialConsulta = $("#materialMesaConsultar").val(data.material);
            var alturaConsulta = $("#alturaMesaConsultar").val(data.altura);
            var acabadoConsulta = $("#acabadoMesaConsultar").val(data.acabado);
            var precioConsulta = $("#precioMesaConsultar").val(data.precio);
        });
    }
    
    var enviarFormularioRegistrar = function () {
        $.validator.setDefaults({
            submitHandler: function () {
                var datos = $('#formRegistrarMesa').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>mesa/insert",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "La mesa ha sido registrado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>mesa";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al registrar la mesa. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formRegistrarMesa').validate({
            rules: {
                materialMesa: {
                    required: true
                },
                alturaMesa: {
                    required: true
                },
                acabadoMesa: {
                    required: true
                },
                precioMesa: {
                    required: true
                },
            },
            messages: {
                nombreMesa: {
                    required: "Ingresa material de la mesa"
                },
                alturaMesa: {
                    required: "Ingresa altura de mesa"
                },
                acabadoMesa: {
                    required: "Ingresa acabado de la mesa"
                },
                precioMesa: {
                    required: "Ingresa precio de la mesa"
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
                var datos = $('#formActualizarMesa').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>mesa/update",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "La mesa ha sido Actualizado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>mesa";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al Actualizar la mesa. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formActualizarMesa').validate({
            rules: {
                materialMesaActualizar: {
                    required: true
                },
                alturaMesaActualizar: {
                    required: true
                },
                acabadoMesaActualizar: {
                    required: true
                },
                precioMesaActualizar: {
                    required: true
                }
            },
            messages: {
                materialMesaActualizar: {
                    required: "Ingresa material de la mesa"
                },
                alturaMesaActualizar: {
                    required: "Ingresa altura de la mesa"
                },
                acabadoMesaActualizar: {
                    required: "Ingresa acabado de la mesa"
                },
                precioMesaActualizar: {
                    required: "Ingresa precio de la mesa"
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
        $( "#formEliminarMesa" ).submit(function( event ) {
            event.preventDefault();
            var datos = $('#formEliminarMesa').serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo constant('URL');?>mesa/delete",
                data: datos,
                success: function (data) {
                    if (data == 'ok') {
                        Swal.fire(
                            "¡Éxito!",
                            "La mesa ha sido eliminado correctamente",
                            "success"
                        ).then(function () {
                            window.location = "<?php echo constant('URL');?>mesa";
                        })
                    } else {
                        Swal.fire (
                            "¡Error!",
                            "Ha ocurrido un error al eliminar la mesa. " + data,
                            "error"
                        );
                    }
                },
            });
        });
    }
</script>
