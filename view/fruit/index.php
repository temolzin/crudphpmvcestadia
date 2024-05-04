<?php
    require 'view/menu.php';
    $menu = new Menu();
    $menu->header('fruit');
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-right">
                <button class="btn btn-success" data-toggle='modal' data-target='#modalRegistrarFruit'> <i class="fas fa-plus-circle"></i> Registrar Fruit </button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabla Fruit</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTableFruit" name="dataTableFruit" class="table table-bordered table-hover dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Peso</th>
                                    <th>Color</th>
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
<div class="modal fade" id="modalRegistrarFruit" tabindex="-1" role="dialog" aria-labelledby="modalRegistrarFruit" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-success">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Fruit <small> &nbsp;Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->

                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formRegistrarFruit" name="formRegistrarFruit" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control" id="nameFruit" name="nameFruit" placeholder="Nombre"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Descripcion</label>
                                    <input type="text" class="form-control" id="descriptionFruit" name="descriptionFruit" placeholder="Descripcion"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Peso</label>
                                    <input type="text" class="form-control" id="weightFruit" name="weightFruit" placeholder="Peso"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Color</label>
                                    <input type="text" class="form-control" id="colorFruit" name="colorFruit" placeholder="Color"/>
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
<div class="modal fade" id="modalActualizarFruit" tabindex="-1" role="dialog" aria-labelledby="modalActualizarFruit" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-warning">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Fruit <small> &nbsp; Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formActualizarFruit" name="formActualizarFruit">
                    <div class="card-body">
                        <div style="display: none;" class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Identificador (*)</label>
                                    <input type="text" class="form-control" id="idFruitActualizar" name="idFruitActualizar" placeholder="Matrícula"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control" id="nameFruitActualizar" name="nameFruitActualizar" placeholder="Nombre"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Descripcion</label>
                                    <input type="text" class="form-control" id="descriptionFruitActualizar" name="descriptionFruitActualizar" placeholder="Descripcion "/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Peso</label>
                                    <input type="text" class="form-control" id="weightFruitActualizar" name="weightFruitActualizar" placeholder="Peso"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Color</label>
                                    <input type="text" class="form-control" id="colorFruitActualizar" name="colorFruitActualizar" placeholder="Color"/>
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

<!--------------------------------------------------------- Modal DetalleFruit----------------------------------------------->
<div class="modal fade" id="modalDetalleFruit" tabindex="-1" role="dialog" aria-labelledby="modalDetalleFruit" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-primary">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Fruit <small> &nbsp;Campos requeridos</small></h4>
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
                                    <label>Identificador</label>
                                    <input disabled type="text" class="form-control" id="idFruitConsultar" name="idFruitConsultar" placeholder="Matrícula"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" disabled class="form-control" id="nameFruitConsultar" name="nameFruitConsultar" placeholder="Nombre"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Descripcion</label>
                                    <input type="text" disabled class="form-control" id="descriptionFruitConsultar" name="descriptionFruitConsultar" placeholder="Descripcion"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Peso</label>
                                    <input type="text" disabled class="form-control" id="weightFruitConsultar" name="weightFruitConsultar" placeholder="Peso"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Color</label>
                                    <input type="text" disabled class="form-control" id="colorFruitConsultar" name="colorFruitConsultar" placeholder="Color"/>
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

<!-- ****************************** Modal Eliminar Fruit *************************************************-->
<div class="modal fade" id="modalEliminarFruit" tabindex="-1" role="dialog" aria-labelledby="modalEliminarFruit" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Fruit</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form role="form" id="formEliminarFruit" name="formActualizarFruit">
                <input type="text" hidden id="idEliminarFruit" name="idEliminarFruit">
                <div class="modal-body text-center text-danger">¿Realmente deseas eliminar esta Fruit?</div>
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
        mostrarFruit();
        enviarFormularioRegistrar();
        enviarFormularioActualizar();
        eliminarRegistro();
    });

    var mostrarFruit = function() {
        var table = $('#dataTableFruit').DataTable({
            "processing": true,
            "ajax": {
                "url": "<?php echo constant('URL');?>fruit/read"
            },
            "columns": [
                { "data": "id_fruit" },
                { "data": "name_fruit" },
                { "data": "description_fruit" },
                { "data": "weight_fruit" },
                { "data": "color_fruit" },
                {data:null,
                    "defaultContent":
                        `<button class='consulta btn btn-primary' data-toggle='modal' data-target='#modalDetalleFruit' title="Ver Detalles"><i class="fa fa-eye"></i></button>
                         <button class='editar btn btn-warning' data-toggle='modal' data-target='#modalActualizarFruit' title="Editar Datos"><i class="fa fa-edit"></i></button>
                         <button class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminarFruit' title="Eliminar Registro"><i class="far fa-trash-alt"></i></button>`
                }
            ],
            responsive: true,
            autoWidth: false,
            language: idiomaDataTable,
            lengthChange: true,
            buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
            dom: 'Bfltip'
        });
        obtenerdatosDT(table);
    }

    var obtenerdatosDT = function (table) {
        $('#dataTableFruit tbody').on('click', 'tr', function() {
            var data = table.row(this).data();
            var idEliminar = $('#idEliminarFruit').val(data.id_fruit);

            var idFruitActualizar = $("#idFruitActualizar").val(data.id_fruit);
            var nameFruitActualizar = $("#nameFruitActualizar").val(data.name_fruit);
            var descriptionFruitActualizar = $("#descriptionFruitActualizar").val(data.description_fruit);
            var weightFruitActualizar = $("#weightFruitActualizar").val(data.weight_fruit);
            var colorFruitActualizar = $("#colorFruitActualizar").val(data.color_fruit);

            var idConsulta = $("#idFruitConsultar").val(data.id_fruit);
            var nameConsulta = $("#nameFruitConsultar").val(data.name_fruit);
            var descriptionConsulta = $("#descriptionFruitConsultar").val(data.description_fruit);
            var weightConsulta = $("#weightFruitConsultar").val(data.weight_fruit);
            var colorConsulta = $("#colorFruitConsultar").val(data.color_fruit);
        });
    }

    var enviarFormularioRegistrar = function () {
        $.validator.setDefaults({
            submitHandler: function () {
                var datos = $('#formRegistrarFruit').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>fruit/insert",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "La Fruit ha sido registrado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>fruit";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al registrar la Fruit. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formRegistrarFruit').validate({
            rules: {
                nameFruit: {
                    required: true
                },
                descriptionFruit: {
                    required: true
                },
                weightFruit: {
                    required: true
                },
                colorFruit: {
                    required: true
                },
            },
            messages: {
                nameFruit: {
                    required: "Ingresa un nombre"
                },
                descriptionFruit: {
                    required: "Ingresa una descripcion"
                },
                weightFruit: {
                    required: "Ingresa el peso"
                },
                colorFruit: {
                    required: "Ingresa el color"
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
                var datos = $('#formActualizarFruit').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>fruit/update",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "La Fruit ha sido Actualizado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>fruit";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al Actualizar la Fruit. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formActualizarFruit').validate({
            rules: {
                nameFruitActualizar: {
                    required: true
                },
                descriptionFruitActualizar: {
                    required: true
                },
                weightFruitActualizar: {
                    required: true
                },
                colorFruitActualizar: {
                    required: true
                }
            },
            messages: {
                nameFruitActualizar: {
                    required: "Ingresa un nombre"
                },
                descriptionFruitActualizar: {
                    required: "Ingresa una descripcion"
                },
                weightFruitActualizar: {
                    required: "Ingresa el peso"
                },
                colorFruitActualizar: {
                    required: "Ingresa el color"
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
        $( "#formEliminarFruit" ).submit(function( event ) {
            event.preventDefault();
            var datos = $('#formEliminarFruit').serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo constant('URL');?>fruit/delete",
                data: datos,
                success: function (data) {
                    if (data == 'ok') {
                        Swal.fire(
                            "¡Éxito!",
                            "La Fruit ha sido eliminado correctamente",
                            "success"
                        ).then(function () {
                            window.location = "<?php echo constant('URL');?>fruit";
                        })
                    } else {
                        Swal.fire (
                            "¡Error!",
                            "Ha ocurrido un error al eliminar la Fruit. " + data,
                            "error"
                        );
                    }
                },
            });
        });
    }

</script>
