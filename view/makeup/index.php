<?php
    require 'view/menu.php';
    $menu = new Menu();
    $menu->header('makeup');
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-right">
                <button class="btn btn-success" data-toggle='modal' data-target='#modal_register_makeup'>
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
                        <table id="data_table_makeup" class="table table-bordered table-hover dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>nombre</th>
                                    <th>marca</th>
                                    <th>tipo</th>
                                    <th>precio</th>
                                    <th>stock</th>
                                    <th>opciones</th>
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
<div class="modal fade" id="modal_register_makeup" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-success">
                <div class="card-header">
                    <h4 class="card-title">Maquillaje <small>(*) Campos requeridos</small></h4>
                    <button type="button" class="close d-sm-inline-block text-white" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form_register_makeup" method="post">
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
<div class="modal fade" id="modal_update_makeup" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-warning">
                <div class="card-header">
                    <h4 class="card-title">Maquillaje <small>(*) Campos requeridos</small></h4>
                    <button type="button" class="close d-sm-inline-block text-white" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form_update_makeup">
                    <div class="card-body">
                        <input type="hidden" id="id_update" name="id_update">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" class="form-control" id="name_update" name="name_update" placeholder="Nombre"/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Marca (*)</label>
                                    <input type="text" class="form-control" id="brand_update" name="brand_update" placeholder="Marca"/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Tipo (*)</label>
                                    <input type="text" class="form-control" id="type_update" name="type_update" placeholder="Tipo"/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="text" class="form-control" id="price_update" name="price_update" placeholder="Precio"/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Stock (*)</label>
                                    <input type="text" class="form-control" id="stock_update" name="stock_update" placeholder="Stock"/>
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
<div class="modal fade" id="modal_detail_makeup" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-primary">
                <div class="card-header">
                    <h4 class="card-title">Maquillaje <small>(*) Campos requeridos</small></h4>
                    <button type="button" class="close d-sm-inline-block text-white" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form_detail_makeup">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" class="form-control" id="name_detail" name="name_detail" placeholder="Nombre" readonly/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Marca (*)</label>
                                    <input type="text" class="form-control" id="brand_detail" name="brand_detail" placeholder="Marca" readonly/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Tipo (*)</label>
                                    <input type="text" class="form-control" id="type_detail" name="type_detail" placeholder="Tipo" readonly/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="text" class="form-control" id="price_detail" name="price_detail" placeholder="Precio" readonly/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Stock (*)</label>
                                    <input type="text" class="form-control" id="stock_detail" name="stock_detail" placeholder="Stock" readonly/>
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
<div class="modal fade" id="modal_delete_makeup" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title">Eliminar Registro</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form id="form_delete_makeup">
                <input type="hidden" id="id_delete" name="id_delete">
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
    show_makeups();
    submit_form_register();
    submit_form_update();
    delete_record();
});

var show_makeups = function() {
    var table_makeup = $('#data_table_makeup').DataTable({
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
                    `<button class='view btn btn-primary' data-toggle='modal' data-target='#modal_detail_makeup'><i class="fa fa-eye"></i></button>
                     <button class='edit btn btn-warning' data-toggle='modal' data-target='#modal_update_makeup'><i class="fa fa-edit"></i></button>
                     <button class='delete btn btn-danger' data-toggle='modal' data-target='#modal_delete_makeup'><i class="far fa-trash-alt"></i></button>`
            }
        ],
        responsive: true,
        autoWidth: false,
        language: typeof idiomaDataTable !== 'undefined' ? idiomaDataTable : {},
        lengthChange: true,
        buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
        dom: 'Bfltip'
    });
    get_data_from_dt(table_makeup);
}

var get_data_from_dt = function (table) {
    $('#data_table_makeup tbody').on('click', 'tr', function() {
        var data = table.row(this).data();
        if (!data) return; 
        $("#id_delete").val(data.id);
        $("#id_update").val(data.id);
        $("#name_update").val(data.name);
        $("#brand_update").val(data.brand);
        $("#type_update").val(data.type);
        $("#price_update").val(data.price);
        $("#stock_update").val(data.stock);

        $("#name_detail").val(data.name);
        $("#brand_detail").val(data.brand);
        $("#type_detail").val(data.type);
        $("#price_detail").val(data.price);
        $("#stock_detail").val(data.stock);
    });
}

var submit_form_register = function () {
    $.validator.setDefaults({
        submitHandler: function () {
            var datos = $('#form_register_makeup').serialize();
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
    
    $('#form_register_makeup').validate({
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

var submit_form_update = function () {
    $.validator.setDefaults({
        submitHandler: function () {
            var datos = $('#form_update_makeup').serialize();
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
    $('#form_update_makeup').validate({
        rules: {
            name_update: { required: true },
            brand_update: { required: true },
            type_update: { required: true },
            price_update: { required: true },
            stock_update: { required: true }
        },
        messages: {
            name_update: { required: "Ingresa un nombre" },
            brand_update: { required: "Ingresa una marca" },
            type_update: { required: "Ingresa un tipo" },
            price_update: { required: "Ingresa un precio" },
            stock_update: { required: "Ingresa el stock" }
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

var delete_record = function () {
    $("#form_delete_makeup").submit(function(event) {
        event.preventDefault();
        var datos = $('#form_delete_makeup').serialize();
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


