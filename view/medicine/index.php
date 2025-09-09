<?php
    require 'view/menu.php';
    $menu = new Menu();
    $menu->header('medicine');
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-right">
                <button class="btn btn-success" data-toggle='modal' data-target='#modalRegistrarMedicamento'> <i class="fas fa-plus-circle"></i> Registrar Medicamento </button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabla Medicamento</h3>
                    </div>
                    <div class="card-body">
                        <table id="dataTableMedicamento" name="dataTableMedicamento" class="table table-bordered table-hover dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Precio</th>
                                    <th>Laboratorio</th>
                                    <th>Caducidad</th>
                                    <th>Gramaje</th>
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

<!-- Modal Registrar Medicamento -->
<div class="modal fade" id="modalRegistrarMedicamento" tabindex="-1" role="dialog" aria-labelledby="modalRegistrarMedicamento" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-success">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h4 class="card-title">Medicamento <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                </div>
                <form role="form" id="formRegistrarMedicamento" name="formRegistrarMedicamento" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre"/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Precio"/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Laboratorio (*)</label>
                                    <input type="text" class="form-control" id="laboratory" name="laboratory" placeholder="Laboratorio"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Caducidad (*)</label>
                                    <input type="date" class="form-control" id="expiration" name="expiration" placeholder="Caducidad"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Gramaje (*)</label>
                                    <input type="text" class="form-control" id="weigth" name="weigth" placeholder="Gramaje"/>
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

<!-- Modal Actualizar Medicamento -->
<div class="modal fade" id="modalActualizarMedicamento" tabindex="-1" role="dialog" aria-labelledby="modalActualizarMedicamento" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-warning">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h4 class="card-title">Medicamento <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                </div>
                <form role="form" id="formActualizarMedicamento" name="formActualizarMedicamento">
                    <div class="card-body">
                        <input type="hidden" id="idActualizar" name="idActualizar"/>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" class="form-control" id="nameActualizar" name="nameActualizar" placeholder="Nombre"/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="number" step="0.01" class="form-control" id="priceActualizar" name="priceActualizar" placeholder="Precio"/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Laboratorio (*)</label>
                                    <input type="text" class="form-control" id="laboratoryActualizar" name="laboratoryActualizar" placeholder="Laboratorio"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Caducidad (*)</label>
                                    <input type="date" class="form-control" id="expirationActualizar" name="expirationActualizar" placeholder="Caducidad"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Gramaje (*)</label>
                                    <input type="text" class="form-control" id="weigthActualizar" name="weigthActualizar" placeholder="Gramaje"/>
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

<!-- Modal Detalle Medicamento -->
<div class="modal fade" id="modalDetalleMedicamento" tabindex="-1" role="dialog" aria-labelledby="modalDetalleMedicamento" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-primary">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h4 class="card-title">Medicamento <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                </div>
                <form role="form" id="formConsultaMedicamento" name="formConsultaMedicamento">
                    <div class="card-body">
                        <input type="hidden" id="idConsultar" name="idConsultar"/>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" disabled class="form-control" id="nameConsultar" name="nameConsultar" placeholder="Nombre"/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="text" disabled class="form-control" id="priceConsultar" name="priceConsultar" placeholder="Precio"/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Laboratorio (*)</label>
                                    <input type="text" disabled class="form-control" id="laboratoryConsultar" name="laboratoryConsultar" placeholder="Laboratorio"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Caducidad (*)</label>
                                    <input type="text" disabled class="form-control" id="expirationConsultar" name="expirationConsultar" placeholder="Caducidad"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Gramaje (*)</label>
                                    <input type="text" disabled class="form-control" id="weigthConsultar" name="weigthConsultar" placeholder="Gramaje"/>
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

<!-- Modal Eliminar Medicamento -->
<div class="modal fade" id="modalEliminarMedicamento" tabindex="-1" role="dialog" aria-labelledby="modalEliminarMedicamento" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form role="form" id="formEliminarMedicamento" name="formEliminarMedicamento">
                <input type="hidden" id="idEliminar" name="idEliminar">
                <div class="modal-body text-center text-danger">¿Realmente deseas eliminar este Medicamento?</div>
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
        mostrarMedicamentos();
        enviarFormularioRegistrarMedicamento();
        enviarFormularioActualizarMedicamento();
        eliminarRegistroMedicamento();
    });

    var mostrarMedicamentos = function() {
        var tableMedicamento = $('#dataTableMedicamento').DataTable({
            "processing": true,
            "ajax": {
                "url": "<?php echo constant('URL');?>medicine/read"
            },
            "columns": [
                { "data": "id" },
                { "data": "name" },
                { "data": "price" },
                { "data": "laboratory" },
                { "data": "expiration" },
                { "data": "weigth" },
                {data:null,
                    "defaultContent":
                        `<button class='consulta btn btn-primary' data-toggle='modal' data-target='#modalDetalleMedicamento' title="Ver Detalles"><i class="fa fa-eye"></i></button>
                         <button class='editar btn btn-warning' data-toggle='modal' data-target='#modalActualizarMedicamento' title="Editar Datos"><i class="fa fa-edit"></i></button>
                         <button class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminarMedicamento' title="Eliminar Registro"><i class="far fa-trash-alt"></i></button>`
                }
            ],
            responsive: true,
            autoWidth: false,
            language: idiomaDataTable,
            lengthChange: true,
            buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
            dom: 'Bfltip'
        });
        obtenerdatosDTMedicamento(tableMedicamento);
    }

    var obtenerdatosDTMedicamento = function (table) {
        $('#dataTableMedicamento tbody').on('click', 'tr', function() {
            var data = table.row(this).data();
            $('#idEliminar').val(data.id);

            $("#idActualizar").val(data.id);
            $("#nameActualizar").val(data.name);
            $("#priceActualizar").val(data.price);
            $("#laboratoryActualizar").val(data.laboratory);
            $("#expirationActualizar").val(data.expiration);
            $("#weigthActualizar").val(data.weigth);

            $("#idConsultar").val(data.id);
            $("#nameConsultar").val(data.name);
            $("#priceConsultar").val(data.price);
            $("#laboratoryConsultar").val(data.laboratory);
            $("#expirationConsultar").val(data.expiration);
            $("#weigthConsultar").val(data.weigth);
        });
    }

    var enviarFormularioRegistrarMedicamento = function () {
        $.validator.setDefaults({
            submitHandler: function () {
                var datos = $('#formRegistrarMedicamento').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>medicine/insert",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "El Medicamento ha sido registrado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>medicine";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al registrar el Medicamento. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formRegistrarMedicamento').validate({
            rules: {
                name: { required: true },
                price: { required: true, number: true },
                laboratory: { required: true },
                expiration: { required: true },
                weigth: { required: true }
            },
            messages: {
                name: { required: "Ingresa un nombre" },
                price: { required: "Ingresa un precio", number: "Debe ser un número" },
                laboratory: { required: "Ingresa un laboratorio" },
                expiration: { required: "Ingresa la fecha de caducidad" },
                weigth: { required: "Ingresa el Gramaje" }
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

    var enviarFormularioActualizarMedicamento = function () {
        $.validator.setDefaults({
            submitHandler: function () {
                var datos = $('#formActualizarMedicamento').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>medicine/update",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "El Medicamento ha sido actualizado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>medicine";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al actualizar el Medicamento. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formActualizarMedicamento').validate({
            rules: {
                nameActualizar: { required: true },
                priceActualizar: { required: true, number: true },
                laboratoryActualizar: { required: true },
                expirationActualizar: { required: true },
                weigthActualizar: { required: true }
            },
            messages: {
                nameActualizar: { required: "Ingresa un nombre" },
                priceActualizar: { required: "Ingresa un precio", number: "Debe ser un número" },
                laboratoryActualizar: { required: "Ingresa un laboratorio" },
                expirationActualizar: { required: "Ingresa la fecha de caducidad" },
                weigthActualizar: { required: "Ingresa el Gramaje" }
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

    var eliminarRegistroMedicamento = function () {
        $("#formEliminarMedicamento").submit(function( event ) {
            event.preventDefault();
            var datos = $('#formEliminarMedicamento').serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo constant('URL');?>medicine/delete",
                data: datos,
                success: function (data) {
                    if (data == 'ok') {
                        Swal.fire(
                            "¡Éxito!",
                            "El Medicamento ha sido eliminado correctamente",
                            "success"
                        ).then(function () {
                            window.location = "<?php echo constant('URL');?>medicine";
                        })
                    } else {
                        Swal.fire (
                            "¡Error!",
                            "Ha ocurrido un error al eliminar el Medicamento. " + data,
                            "error"
                        );
                    }
                },
            });
        });
    }
</script>
