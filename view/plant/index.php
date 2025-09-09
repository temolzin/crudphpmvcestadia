<?php
    require 'view/menu.php';
    $menu = new Menu();
    $menu->header('plant');
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-right">
                <button class="btn btn-success" data-toggle='modal' data-target='#modalRegistrarPlant'> <i class="fas fa-plus-circle"></i> Registrar Planta </button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabla Planta</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTablePlant" name="dataTablePlant" class="table table-bordered table-hover dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre de la planta</th>
                                    <th>Precio de la planta</th>
                                    <th>Disponibilidad</th>
                                    <th>Tamaño de la planta (cm)</th>
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
<div class="modal fade" id="modalRegistrarPlant" tabindex="-1" role="dialog" aria-labelledby="modalRegistrarPlant" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-success">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Planta <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->

                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formRegistrarPlant" name="formRegistrarPlant" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre de la planta (*)</label>
                                    <input type="text" class="form-control" id="plantName" name="plantName" placeholder="Nombre"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Precio de la planta (*)</label>
                                    <input type="text" class="form-control" id="price" name="price" placeholder="Precios"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Disponibilidad (*)</label>
                                    <input type="text" class="form-control" id="availability" name="availability" placeholder="Disponibilidad"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Tamaño de la planta (cm) (*)</label>
                                    <input type="text" class="form-control" id="size" name="size" placeholder="Tamaño"/>
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
<div class="modal fade" id="modalActualizarPlant" tabindex="-1" role="dialog" aria-labelledby="modalActualizarPlant" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-warning">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Planta <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formActualizarPlant" name="formActualizarPlant">
                    <div class="card-body">
                    <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Matrícula (*)</label>
                                    <input type="text" class="form-control" id="plantIdUpdate" name="plantIdUpdate" placeholder="Matricula"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre de la planta (*)</label>
                                    <input type="text" class="form-control" id="plantNameUpdate" name="plantNameUpdate" placeholder="Nombre"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Precio de la planta (*)</label>
                                    <input type="text" class="form-control" id="priceUpdate" name="priceUpdate" placeholder="Precio"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Disponibilidad (*)</label>
                                    <input type="text" class="form-control" id="availabilityUpdate" name="availabilityUpdate" placeholder="Disponibilidad"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Tamaño de la planta (cm) (*)</label>
                                    <input type="text" class="form-control" id="sizeUpdate" name="sizeUpdate" placeholder="Tamaño"/>
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

<!--------------------------------------------------------- Modal DetallePlant----------------------------------------------->
<div class="modal fade" id="modalDetallePlant" tabindex="-1" role="dialog" aria-labelledby="modalDetallePlant" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-primary">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Planta <small> &nbsp;(*) Campos requeridos</small></h4>
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
                                    <input disabled type="text" class="form-control" id="plantIdConsultar" name="plantIdConsultar" placeholder="Matricula"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre de la planta (*)</label>
                                    <input type="text" disabled class="form-control" id="plantNameConsultar" name="plantNameConsultar" placeholder="Nombre"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Precio de la planta (*)</label>
                                    <input type="text" disabled class="form-control" id="priceConsultar" name="priceConsultar" placeholder="Precio"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Disponibilidad (*)</label>
                                    <input type="text" disabled class="form-control" id="availabilityConsultar" name="availabilityConsultar" placeholder="Disponibilidad"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Tamaño de la planta (cm) (*)</label>
                                    <input type="text" disabled class="form-control" id="sizeConsultar" name="sizeConsultar" placeholder="Tamaño"/>
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

<!-- ****************************** Modal EliminarPlant *************************************************-->
<div class="modal fade" id="modalEliminarPlant" tabindex="-1" role="dialog" aria-labelledby="modalEliminarPlant" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form role="form" id="formEliminarPlant" name="formActualizarPlant">
                <input type="text" hidden id="idEliminarPlant" name="plantIdDelete">
                <div class="modal-body text-center text-danger">¿Realmente deseas eliminar esta Planta?</div>
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
        mostrarPlant();
        enviarFormularioRegistrar();
        enviarFormularioActualizar();
        eliminarRegistro();
    });

    var mostrarPlant = function() {
        var tablePlant = $('#dataTablePlant').DataTable({
            "processing": true,
            "ajax": {
                "url": "<?php echo constant('URL');?>plant/read"
            },
            "columns": [
                { "data": "plant_id" },
                { "data": "plant_name" },
                { "data": "plant_price" },
                { "data": "plant_availability" },
                { "data": "plant_size" },
                {data:null,
                    "defaultContent":
                        `<button class='consulta btn btn-primary' data-toggle='modal' data-target='#modalDetallePlant' title="Ver Detalles"><i class="fa fa-eye"></i></button>
                         <button class='editar btn btn-warning' data-toggle='modal' data-target='#modalActualizarPlant' title="Editar Datos"><i class="fa fa-edit"></i></button>
                         <button class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminarPlant' title="Eliminar Registro"><i class="far fa-trash-alt"></i></button>`
                }
            ],
            responsive: true,
            autoWidth: false,
            language: idiomaDataTable,
            lengthChange: true,
            buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
            dom: 'Bfltip'
        });
        obtenerdatosDT(tablePlant);
    }

    var obtenerdatosDT = function (table) {
        $('#dataTablePlant tbody').on('click', 'tr', function() {
            var data = table.row(this).data();
            var idEliminar = $('#idEliminarPlant').val(data.plant_id);

            var idActualizar = $("#plantIdUpdate").val(data.plant_id);
            var nombreActualizar = $("#plantNameUpdate").val(data.plant_name);
            var priceActualizar = $("#priceUpdate").val(data.plant_price);
            var availabityActualizar = $("#availabilityUpdate").val(data.plant_availability);
            var sizeActualizar = $("#sizeUpdate").val(data.plant_size);

            var idConsultar = $("#plantIdConsultar").val(data.plant_id);
            var nombreConsulta = $("#plantNameConsultar").val(data.plant_name);
            var priceConsulta = $("#priceConsultar").val(data.plant_price);
            var availabityConsulta = $("#availabilityConsultar").val(data.plant_availability);
            var sizeConsulta = $("#sizeConsultar").val(data.plant_size);
        });
    }

    var enviarFormularioRegistrar = function () {
        $.validator.setDefaults({
            submitHandler: function () {
                var datos = $('#formRegistrarPlant').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>plant/insert",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "La planta ha sido registrado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>plant";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al registrar la planta. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formRegistrarPlant').validate({
            rules: {
                plantName: {
                    required: true
                },
                price: {
                    required: true
                },
                availability: {
                    required: true
                },
                size: {
                    required: true
                },
            },
            messages: {
                plantName: {
                    required: "Ingrese el nombre"
                },
                price: {
                    required: "Ingrese el precio"
                },
                availability: {
                    required: "Ingrese si esta disponible o no"
                },
                size: {
                    required: "Ingrese el tamaño"
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
                var datos = $('#formActualizarPlant').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>plant/update",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "La planta ha sido actualizada de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>plant";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al actualizar la planta. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formActualizarPlant').validate({
            rules: {
                plantIdUpdate: {
                    required: true,
                    number: true
                },
                plantNameUpdate: {
                    required: true
                },
                priceUpdate: {
                    required: true
                },
                availabilityUpdate: {
                    required: true
                },
                sizeUpdate: {
                    required: true
                }
            },
            messages: {
                plantIdUpdate: {
                    required: "Ingrese su matrícula",
                    number: "Sólo números"
                },
                plantNameUpdate: {
                    required: "Ingrese el nombre"
                },
                priceUpdate: {
                    required: "Ingrese el precio"
                },
                availabilityUpdate: {
                    required: "Ingrese si esta disponible o no"
                },
                sizeUpdate: {
                    required: "Ingrese el tamaño"
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
        $( "#formEliminarPlant" ).submit(function( event ) {
            event.preventDefault();
            var datos = $('#formEliminarPlant').serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo constant('URL');?>plant/delete",
                data: datos,
                success: function (data) {
                    if (data == 'ok') {
                        Swal.fire(
                            "¡Éxito!",
                            "La Planta ha sido eliminada correctamente",
                            "success"
                        ).then(function () {
                            window.location = "<?php echo constant('URL');?>plant";
                        })
                    } else {
                        Swal.fire (
                            "¡Error!",
                            "Ha ocurrido un error al eliminar la Planta. " + data,
                            "error"
                        );
                    }
                },
            });
        });
    }

    /*var dataTableFunction = function () {
        var table = $("#dataTableMaestro").DataTable({
            responsive: true,
            language: idiomaDataTable,
            lengthChange: true,
            buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
            dom: 'Bfltip'
        });

        table.buttons().container().appendTo('#dataTableMaestro_wrapper .col-md-6:eq(0)');
    }*/
</script>
