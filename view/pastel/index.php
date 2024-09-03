<?php
    require 'view/menu.php';
    $menu = new Menu();
    $menu->header('pastel');
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-right">
                <button class="btn btn-success" data-toggle='modal' data-target='#modalRegistrarPastel'> <i class="fas fa-plus-circle"></i> Registrar Pastel </button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabla Pasteles</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTablePastel" name="dataTablePastel" class="table table-bordered table-hover dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tipo</th>
                                    <th>Precio</th>
                                    <th>Sabor</th>
                                    <th>Capas</th>
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
<div class="modal fade" id="modalRegistrarPastel" tabindex="-1" role="dialog" aria-labelledby="modalRegistrarPastel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-success">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Pastel <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->

                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formRegistrarPastel" name="formRegistrarPastel" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Tipo (*)</label>
                                    <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Tipo"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="text" class="form-control" id="precio" name="precio" placeholder="$ Precio"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label> Sabor (*)</label>
                                    <input type="text" class="form-control" id="sabor" name="sabor" placeholder="Sabor"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Capas (*)</label>
                                    <input type="text" class="form-control" id="capas" name="capas" placeholder="Capas"/>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">Registrar Pastel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--------------------------------------------------------- Modal Actualizar----------------------------------------------->
<div class="modal fade" id="modalActualizarPastel" tabindex="-1" role="dialog" aria-labelledby="modalActualizarPastel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-warning">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Pastel <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formActualizarPastel" name="formActualizarPastel">
                    <div class="card-body">
                        <div style="display: none;" class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>idPastel (*)</label>
                                    <input type="text" class="form-control" id="idPastelActualizar" name="idPastelActualizar" placeholder="idPastel"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Tipo (*)</label>
                                    <input type="text" class="form-control" id="tipoPastelActualizar" name="tipoPastelActualizar" placeholder="Tipo de pastel"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="text" class="form-control" id="precioPastelActualizar" name="precioPastelActualizar" placeholder="$ Precio"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Sabor (*)</label>
                                    <input type="text" class="form-control" id="saborPastelActualizar" name="saborPastelActualizar" placeholder="Sabor del pastel"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Capas (*)</label>
                                    <input type="text" class="form-control" id="capasPastelActualizar" name="capasPastelActualizar" placeholder="Capas"/>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-warning">Actualizar pastel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--------------------------------------------------------- Modal DetallePastel----------------------------------------------->
<div class="modal fade" id="modalDetallePastel" tabindex="-1" role="dialog" aria-labelledby="modalDetallePastel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-primary">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Pastel <small> &nbsp;(*) Campos requeridos</small></h4>
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
                                    <label>IdPastel (*)</label>
                                    <input disabled type="text" class="form-control" id="idPastelConsultar" name="idPastelConsultar" placeholder="IdPastel"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Tipo(*)</label>
                                    <input type="text" disabled class="form-control" id="tipoPastelConsultar" name="tipoPastelConsultar" placeholder="Nombre Pastel"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="text" disabled class="form-control" id="precioPastelConsultar" name="precioPastelConsultar" placeholder="$ Precio"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Sabor (*)</label>
                                    <input type="text" disabled class="form-control" id="saborPastelConsultar" name="saborPatelConsultar" placeholder="Sabor del pastel"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Capas (*)</label>
                                    <input type="text" disabled class="form-control" id="capasPastelConsultar" name="capasPastelConsultar" placeholder="Capas"/>
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

<!-- ****************************** Modal Eliminar Pastel *************************************************-->
<div class="modal fade" id="modalEliminarPastel" tabindex="-1" role="dialog" aria-labelledby="modalEliminarPastel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form role="form" id="formEliminarPastel" name="formActualizarPastel">
                <input type="text" hidden id="idEliminarPastel" name="idEliminarPastel">
                <div class="modal-body text-center text-danger">¿Realmente deseas eliminar este pastel?</div>
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
        mostrarPastel();
        enviarFormularioRegistrar();
        enviarFormularioActualizar();
        eliminarRegistro();
    });

    var mostrarPastel = function() {
        var tablePastel = $('#dataTablePastel').DataTable({
            "processing": true,
            "ajax": {
                "url": "<?php echo constant('URL');?>pastel/read"
            },
            "columns": [
                { "data": "pastel_id" },
                { "data": "tipo" },
                { "data": "precio" },
                { "data": "sabor" },
                { "data": "capas" },
                {data: null,
                    "defaultContent":
                        `<button class='consulta btn btn-primary' data-toggle='modal' data-target='#modalDetallePastel' title="Ver Detalles"><i class="fa fa-eye"></i></button>
                         <button class='editar btn btn-warning' data-toggle='modal' data-target='#modalActualizarPastel' title="Editar Datos"><i class="fa fa-edit"></i></button>
                         <button class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminarPastel' title="Eliminar Registro"><i class="far fa-trash-alt"></i></button>`
                }
            ],
            responsive: true,
            autoWidth: false,
            language: idiomaDataTable,
            lengthChange: true,
            buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
            dom: 'Bfltip'
        });
        obtenerdatosDT(tablePastel);
    }

    var obtenerdatosDT = function (table) { 
        $('#dataTablePastel tbody').on('click', 'tr', function() {
            var data = table.row(this).data();
            var idEliminar = $('#idEliminarPastel').val(data.pastel_id);

            var idPastelActualizar = $("#idPastelActualizar").val(data.pastel_id);
            var tipoPastelActualizar = $("#tipoPastelActualizar").val(data.tipo);
            var precioPastelActualizar = $("#precioPastelActualizar").val(data.precio);
            var saborPastelActualizar = $("#saborPastelActualizar").val(data.sabor);
            var capasPastelActualizar = $("#capasPastelActualizar").val(data.capas);
            

            var idPastelConsulta = $("#idPastelConsultar").val(data.pastel_id);
            var tipoPastelConsultar = $("#tipoPastelConsultar").val(data.tipo);
            var precioPastelConsultar = $("#precioPastelConsultar").val(data.precio);
            var saborPastelConsultar = $("#saborPastelConsultar").val(data.sabor);
            var capasPastelConsultar = $("#capasPastelConsultar").val(data.capas);
        });
    }
    
    var enviarFormularioRegistrar = function () {
        $.validator.setDefaults({
            submitHandler: function () {
                var datos = $('#formRegistrarPastel').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>pastel/insert",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "El pastel ha sido registrado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>pastel";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al registrar el pastel. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formRegistrarPastel').validate({
            rules: {
                tipo: {
                    required: true
                },
                precio: {
                    required: true
                },
                sabor: {
                    required: true
                },
                capas: {
                    required: true
                },
            },
            messages: {
                tipo: {
                    required: "Ingresa un nombre al Pastel"
                },
                precio: {
                    required: "Ingresa el precio del Pastel"
                },
                sabor: {
                    required: "Ingresa el sabor del Pastel"
                },
                capas: {
                    required: "Ingresa el número de capas del Pastel"
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
                var datos = $('#formActualizarPastel').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>pastel/update",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "El Pastel ha sido Actualizado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>pastel";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al Actualizar el Pastel. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formActualizarPastel').validate({
            rules: {
                tipoPastelaActualizar: {
                    required: true
                },
                precioPastelActualizar: {
                    required: true
                },
                saborPastelActualizar: {
                    required: true
                },
                capasPastelActualizar: {
                    required: true
                }
            },
            messages: {
                tipoPastelaActualizar: {
                    required: "Ingresa un nombre al Pastel"
                },
                precioPastelActualizar: {
                    required: "Ingresa el precio del Pastel"
                },
                saborPastelActualizar: {
                    required: "Ingresa el sabor del Pastel"
                },
                capasPastelActualizar: {
                    required: "Ingresa el número de capas del Pastel"
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
        $( "#formEliminarPastel" ).submit(function( event ) {
            event.preventDefault();
            var datos = $('#formEliminarPastel').serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo constant('URL');?>pastel/delete",
                data: datos,
                success: function (data) {
                    if (data == 'ok') {
                        Swal.fire(
                            "¡Éxito!",
                            "El Pastel ha sido eliminado correctamente",
                            "success"
                        ).then(function () {
                            window.location = "<?php echo constant('URL');?>pastel";
                        })
                    } else {
                        Swal.fire (
                            "¡Error!",
                            "Ha ocurrido un error al eliminar el Pastel. " + data,
                            "error"
                        );
                    }
                },
            });
        });
    }
</script>
