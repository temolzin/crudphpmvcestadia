<?php
    require 'view/menu.php';
    $menu = new Menu();
    $menu->header('origami');
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-right">
                <button class="btn btn-success" data-toggle='modal' data-target='#modalRegistrarorigami'> <i class="fas fa-plus-circle"></i> Registrar Origami</button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabla origami</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTableorigami" name="dataTableorigami" class="table table-bordered table-hover dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Material</th>
                                    <th>Precio</th>
                                    <th>Tamaño</th>
                                    <th>Total pieza</th>
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
<div class="modal fade" id="modalRegistrarorigami" tabindex="-1" role="dialog" aria-labelledby="modalRegistrarorigami" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-success">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Origami <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->

                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formRegistrarorigami" name="formRegistrarorigami" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Material (*)</label>
                                    <input type="text" class="form-control" id="materialorigami" name="materialorigami" placeholder="Material"/>
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
                                    <label>Tamaño (*)</label>
                                    <input type="text" class="form-control" id="tamanio" name="tamanio" placeholder="Tamaño"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Total pieza (*)</label>
                                    <input type="text" class="form-control" id="totalpieza" name="total_piezas" placeholder="Total pieza"/>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">Registrar origami</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--------------------------------------------------------- Modal Actualizar----------------------------------------------->
<div class="modal fade" id="modalActualizarorigami" tabindex="-1" role="dialog" aria-labelledby="modalActualizarorigami" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-warning">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Origami <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formActualizarorigami" name="formActualizarorigami">
                    <div class="card-body">
                        <div style="display: none;" class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>idorigami (*)</label>
                                    <input type="text" class="form-control" id="idorigamiActualizar" name="idorigamiActualizar" placeholder="idorigami"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Material (*)</label>
                                    <input type="text" class="form-control" id="materialorigamiActualizar" name="materialorigamiActualizar" placeholder="Material"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="text" class="form-control" id="precioorigamiActualizar" name="precioorigamiActualizar" placeholder="Precio"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Tamaño (*)</label>
                                    <input type="text" class="form-control" id="tamanioorigamiActualizar" name="tamanioorigamiActualizar" placeholder="Tamaño"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Total pieza (*)</label>
                                    <input type="text" class="form-control" id="totalpiezaorigamiActualizar" name="totalpiezaorigamiActualizar" placeholder="Total pieza"/>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-warning">Actualizar origami</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--------------------------------------------------------- Modal DetallePuerta----------------------------------------------->
<div class="modal fade" id="modalDetalleorigami" tabindex="-1" role="dialog" aria-labelledby="modalDetalleorigami" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-primary">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Origami <small> &nbsp;(*) Campos requeridos</small></h4>
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
                                    <label>Idorigami (*)</label>
                                    <input disabled type="text" class="form-control" id="idorigamiConsultar" name="idorigamiConsultar" placeholder="Idpuerta"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Material (*)</label>
                                    <input type="text" disabled class="form-control" id="materialorigamiConsultar" name="materialorigamiConsultar" placeholder="Material"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="text" disabled class="form-control" id="precioorigamiConsultar" name="precioorigamiConsultar" placeholder="Precio"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Tamaño (*)</label>
                                    <input type="text" disabled class="form-control" id="tamanioorigamiConsultar" name="tamanioorigamiConsultar" placeholder="Tamaño"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Total pieza (*)</label>
                                    <input type="text" disabled class="form-control" id="totalpiezaorigamiConsultar" name="totalpiezaConsultar" placeholder="Total pieza"/>
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
<div class="modal fade" id="modalEliminarorigami" tabindex="-1" role="dialog" aria-labelledby="modalEliminarorigami" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form role="form" id="formEliminarorigami" name="formActualizarorigami">
                <input type="text" hidden id="idEliminarorigami" name="idEliminarorigami">
                <div class="modal-body text-center text-danger">¿Realmente deseas eliminar esta origami?</div>
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
        mostrarorigami();
        enviarFormularioRegistrar();
        enviarFormularioActualizar();
        eliminarRegistro();
    });

    var mostrarorigami = function() {
        var tableorigami = $('#dataTableorigami').DataTable({
            "processing": true,
            "ajax": {
                "url": "<?php echo constant('URL');?>origami/read"
            },
            "columns": [
                { "data": "origami_id" },
                { "data": "origami_material" },
                { "data": "origami_precio" },
                { "data": "origami_tamanio" },
                { "data": "origami_total_piezas" },
                {data: null,
                    "defaultContent":
                        `<button class='consulta btn btn-primary' data-toggle='modal' data-target='#modalDetalleorigami' title="Ver Detalles"><i class="fa fa-eye"></i></button>
                         <button class='editar btn btn-warning' data-toggle='modal' data-target='#modalActualizarorigami' title="Editar Datos"><i class="fa fa-edit"></i></button>
                         <button class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminarorigami' title="Eliminar Registro"><i class="far fa-trash-alt"></i></button>`
                }
            ],
            responsive: true,
            autoWidth: false,
            language: idiomaDataTable,
            lengthChange: true,
            buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
            dom: 'Bfltip'
        });
        obtenerdatosDT(tableorigami);
    }

    var obtenerdatosDT = function (table) { 
        $('#dataTableorigami tbody').on('click', 'tr', function() {
            var data = table.row(this).data();
            var idEliminar = $('#idEliminarorigami').val(data.origami_id);

            var idActualizar = $("#idorigamiActualizar").val(data.origami_id);
            var materialorigamiActualizar = $("#materialorigamiActualizar").val(data.origami_material);
            var precioorigamiActualizar = $("#precioorigamiActualizar").val(data.origami_precio);
            var tamanioorigamiActualizar = $("#tamanioorigamiActualizar").val(data.origami_tamanio);
            var totalpiezapuertaActualizar = $("#totalpiezaorigamiActualizar").val(data.origami_total_piezas);

            var idConsulta = $("#idorigamiConsultar").val(data.origami_id);
            var materialConsulta = $("#materialorigamiConsultar").val(data.origami_material);
            var precioConsulta = $("#precioorigamiConsultar").val(data.origami_precio);
            var tamanioConsulta = $("#tamanioorigamiConsultar").val(data.origami_tamanio);
            var totalpiezaConsulta = $("#totalpiezaorigamiConsultar").val(data.origami_total_piezas);
        });
    }
    
    var enviarFormularioRegistrar = function () {
        $.validator.setDefaults({
            submitHandler: function () {
                var datos = $('#formRegistrarorigami').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>origami/insert",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "La origami ha sido registrado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>origami";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al registrar la origami. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formRegistrarorigami').validate({
            rules: {
                materialorigami: {
                    required: true
                },
                precio: {
                    required: true
                },
                tamanio: {
                    required: true
                },
                totalpieza: {
                    required: true
                },
            },
            messages: {
                materialorigami: {
                    required: "Ingresa el material de la origami"
                },
                precio: {
                    required: "Ingresa el precio de la origami"
                },
                tamanio: {
                    required: "Ingresa la tamaño de la origami"
                },
                totalpieza: {
                    required: "Ingresa la total piezas de la origami"
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
                var datos = $('#formActualizarorigami').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>origami/update",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "El origami ha sido Actualizado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>origami";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al Actualizar el origami. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formActualizarorigami').validate({
            rules: {
                materialorigamiActualizar: {
                    required: true
                },
                precioorigamiActualizar: {
                    required: true
                },
                tamanioorigamiActualizar: {
                    required: true
                },
                totalpiezaorigamiActualizar: {
                    required: true
                }
            },
            messages: {
                materialActualizar: {
                    required: "Ingresa el material del origami"
                },
                precioorigamiActualizar: {
                    required: "Ingresa el precio del origami"
                },
                tamanioorigamiActualizar: {
                    required: "Ingresa el tamaño del origami"
                },
                totalpiezaorigamiActualizar: {
                    required: "Ingresa el total piezas de origami"
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
        $( "#formEliminarorigami" ).submit(function( event ) {
            event.preventDefault();
            var datos = $('#formEliminarorigami').serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo constant('URL');?>origami/delete",
                data: datos,
                success: function (data) {
                    if (data == 'ok') {
                        Swal.fire(
                            "¡Éxito!",
                            "El origami ha sido eliminado correctamente",
                            "success"
                        ).then(function () {
                            window.location = "<?php echo constant('URL');?>origami";
                        })
                    } else {
                        Swal.fire (
                            "¡Error!",
                            "Ha ocurrido un error al eliminar el origami. " + data,
                            "error"
                        );
                    }
                },
            });
        });
    }
</script>