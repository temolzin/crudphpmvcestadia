<?php
    require 'view/menu.php';
    $menu = new Menu();
    $menu->header('makeup');
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-right">
                <button class="btn btn-success" data-toggle='modal' data-target='#modalRegisterMakeup'>
                    <i class="fas fa-plus-circle"></i> Registrar Maquillaje
                </button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabla Maquillaje</h3>
                    </div>
                    <div class="card-body">
                        <table id="dataTableMakeup" class="table table-bordered table-hover dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Marca</th>
                                    <th>Tipo</th>
                                    <th>Precio</th>
                                    <th>Stock</th>
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

<!-- Modal Registrar Maquillaje -->
<div class="modal fade" id="modalRegisterMakeup" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-success">
                <div class="card-header">
                    <h4 class="card-title">Maquillaje <small>(*) Campos requeridos</small></h4>
                    <button type="button" class="close d-sm-inline-block text-white" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="formRegisterMakeup" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Marca (*)</label>
                                    <input type="text" class="form-control" id="brand" name="brand" placeholder="Marca"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Tipo (*)</label>
                                    <input type="text" class="form-control" id="type" name="type" placeholder="Tipo"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="text" class="form-control" id="price" name="price" placeholder="Precio"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Stock (*)</label>
                                    <input type="text" class="form-control" id="stock" name="stock" placeholder="Stock"/>
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

<!-- Modal Actualizar Maquillaje -->
<div class="modal fade" id="modalUpdateMakeup" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-warning">
                <div class="card-header">
                    <h4 class="card-title">Maquillaje <small>(*) Campos requeridos</small></h4>
                    <button type="button" class="close d-sm-inline-block text-white" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="formUpdateMakeup">
                    <div class="card-body">
                        <input type="hidden" id="idUpdate" name="idUpdate">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" class="form-control" id="nameUpdate" name="nameUpdate" placeholder="Nombre"/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Marca (*)</label>
                                    <input type="text" class="form-control" id="brandUpdate" name="brandUpdate" placeholder="Marca"/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Tipo (*)</label>
                                    <input type="text" class="form-control" id="typeUpdate" name="typeUpdate" placeholder="Tipo"/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="text" class="form-control" id="priceUpdate" name="priceUpdate" placeholder="Precio"/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Stock (*)</label>
                                    <input type="text" class="form-control" id="stockUpdate" name="stockUpdate" placeholder="Stock"/>
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

<!-- Modal Detalle Maquillaje -->
<div class="modal fade" id="modalDetailMakeup" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-primary">
                <div class="card-header">
                    <h4 class="card-title">Maquillaje <small>(*) Campos requeridos</small></h4>
                    <button type="button" class="close d-sm-inline-block text-white" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="formDetailMakeup">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" class="form-control" id="nameDetail" name="nameDetail" placeholder="Nombre" readonly/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Marca (*)</label>
                                    <input type="text" class="form-control" id="brandDetail" name="brandDetail" placeholder="Marca" readonly/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Tipo (*)</label>
                                    <input type="text" class="form-control" id="typeDetail" name="typeDetail" placeholder="Tipo" readonly/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="text" class="form-control" id="priceDetail" name="priceDetail" placeholder="Precio" readonly/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Stock (*)</label>
                                    <input type="text" class="form-control" id="stockDetail" name="stockDetail" placeholder="Stock" readonly/>
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

<!-- Modal Eliminar Maquillaje -->
<div class="modal fade" id="modalDeleteMakeup" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title">Eliminar Registro</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form id="formDeleteMakeup">
                <input type="hidden" id="idDelete" name="idDelete">
                <div class="modal-body text-center text-danger">¿Deseas eliminar este maquillaje?</div>
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
    showMakeups();
    submitFormRegister();
    submitFormUpdate();
    deleteRecord();
});

var showMakeups = function() {
    var tableMakeup = $('#dataTableMakeup').DataTable({
        "processing": true,
        "ajax": {
            "url": "<?php echo constant('URL');?>makeup/read"
        },
        "columns": [
            { "data": "id" },
            { "data": "name" },
            { "data": "brand" },
            { "data": "type" },
            { "data": "price" },
            { "data": "stock" },
            {data:null,
                "defaultContent":
                    `<button class='view btn btn-primary' data-toggle='modal' data-target='#modalDetailMakeup'><i class="fa fa-eye"></i></button>
                     <button class='edit btn btn-warning' data-toggle='modal' data-target='#modalUpdateMakeup'><i class="fa fa-edit"></i></button>
                     <button class='delete btn btn-danger' data-toggle='modal' data-target='#modalDeleteMakeup'><i class="far fa-trash-alt"></i></button>`
            }
        ],
        responsive: true,
        autoWidth: false,
        language: typeof idiomaDataTable !== 'undefined' ? idiomaDataTable : {},
        lengthChange: true,
        buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
        dom: 'Bfltip'
    });
    getDataFromDT(tableMakeup);
}

var getDataFromDT = function (table) {
    $('#dataTableMakeup tbody').on('click', 'tr', function() {
        var data = table.row(this).data();
        if (!data) return; 
        $("#idDelete").val(data.id);
        $("#idUpdate").val(data.id);
        $("#nameUpdate").val(data.name);
        $("#brandUpdate").val(data.brand);
        $("#typeUpdate").val(data.type);
        $("#priceUpdate").val(data.price);
        $("#stockUpdate").val(data.stock);

        $("#nameDetail").val(data.name);
        $("#brandDetail").val(data.brand);
        $("#typeDetail").val(data.type);
        $("#priceDetail").val(data.price);
        $("#stockDetail").val(data.stock);
    });
}

var submitFormRegister = function () {
    $.validator.setDefaults({
        submitHandler: function () {
            var datos = $('#formRegisterMakeup').serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo constant('URL');?>makeup/insert",
                data: datos,
                success: function (data) {
                    if (data.trim() == 'ok') {
                        Swal.fire("¡Éxito!", "El maquillaje ha sido registrado correctamente.", "success")
                        .then(function () { window.location = "<?php echo constant('URL');?>makeup"; });
                    } else {
                        Swal.fire("¡Error!", "Ha ocurrido un error al registrar el maquillaje. " + data, "error");
                    }
                },
                error: function(xhr, status, err) {
                    Swal.fire("¡Error!", "Error de red: " + err, "error");
                }
            });
        }
    });
    $('#formRegisterMakeup').validate({
        rules: {
            name: { required: true },
            brand: { required: true },
            type: { required: true },
            price: { required: true },
            stock: { required: true }
        },
        messages: {
            name: { required: "Ingresa un nombre" },
            brand: { required: "Ingresa una marca" },
            type: { required: "Ingresa un tipo" },
            price: { required: "Ingresa un precio" },
            stock: { required: "Ingresa el stock" }
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element) { $(element).addClass('is-invalid'); },
        unhighlight: function (element) { $(element).removeClass('is-invalid'); }
    });
}

var submitFormUpdate = function () {
    $.validator.setDefaults({
        submitHandler: function () {
            var datos = $('#formUpdateMakeup').serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo constant('URL');?>makeup/update",
                data: datos,
                success: function (data) {
                    if (data.trim() == 'ok') {
                        Swal.fire("¡Éxito!", "El maquillaje ha sido actualizado correctamente.", "success")
                        .then(function () { window.location = "<?php echo constant('URL');?>makeup"; });
                    } else {
                        Swal.fire("¡Error!", "Ha ocurrido un error al actualizar el maquillaje. " + data, "error");
                    }
                },
                error: function(xhr, status, err) {
                    Swal.fire("¡Error!", "Error de red: " + err, "error");
                }
            });
        }
    });
    $('#formUpdateMakeup').validate({
        rules: {
            nameUpdate: { required: true },
            brandUpdate: { required: true },
            typeUpdate: { required: true },
            priceUpdate: { required: true },
            stockUpdate: { required: true }
        },
        messages: {
            nameUpdate: { required: "Ingresa un nombre" },
            brandUpdate: { required: "Ingresa una marca" },
            typeUpdate: { required: "Ingresa un tipo" },
            priceUpdate: { required: "Ingresa un precio" },
            stockUpdate: { required: "Ingresa el stock" }
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element) { $(element).addClass('is-invalid'); },
        unhighlight: function (element) { $(element).removeClass('is-invalid'); }
    });
}

var deleteRecord = function () {
    $("#formDeleteMakeup").submit(function(event) {
        event.preventDefault();
        var datos = $('#formDeleteMakeup').serialize();
        $.ajax({
            type: "POST",
            url: "<?php echo constant('URL');?>makeup/delete",
            data: datos,
            success: function (data) {
                if (data.trim() == 'ok') {
                    Swal.fire("¡Éxito!", "El maquillaje ha sido eliminado correctamente.", "success")
                    .then(function () { window.location = "<?php echo constant('URL');?>makeup"; });
                } else {
                    Swal.fire("¡Error!", "Ha ocurrido un error al eliminar el maquillaje. " + data, "error");
                }
            },
            error: function(xhr, status, err) {
                Swal.fire("¡Error!", "Error de red: " + err, "error");
            }
        });
    });
}
</script>
    /*var dataTableFunction = function () {
        var table = $("#dataTableDulce").DataTable({
            responsive: true,
            language: idiomaDataTable,
            lengthChange: true,
            buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
            dom: 'Bfltip'
        });

        table.buttons().container().appendTo('#dataTableDulce_wrapper .col-md-6:eq(0)');
    }*/


