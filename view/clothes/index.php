<?php
    require 'view/menu.php';
    $menu = new Menu();
    $menu->header('clothes');
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-right">
                <button class="btn btn-success" data-toggle='modal' data-target='#modalRegisterClothes'> <i class="fas fa-plus-circle"></i> Registrar Prenda </button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabla Prendas</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTableClothes" name="dataTableClothes" class="table table-bordered table-hover dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Producto</th>
                                    <th>Categoría</th>
                                    <th>Talla</th>
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
<!--------------------------------------------------------- Modal Registrar----------------------------------------------->
<div class="modal fade" id="modalRegisterClothes" tabindex="-1" role="dialog" aria-labelledby="modalRegisterClothes" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-success">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Registrar Prenda <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->

                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formRegisterClothes" name="formRegisterClothes" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Producto (*)</label>
                                    <input type="text" class="form-control" id="product" name="product" placeholder="Ej: Falda"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Categoría (*)</label>
                                    <input type="text" class="form-control" id="category" name="category" placeholder="Ej: Mujer" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Talla (*)</label>
                                    <input type="text" class="form-control" id="size" name="sizeclothes" placeholder="Ej: Mediano" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="text" class="form-control" id="price" name="price" placeholder="Ej: 149.99" />
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
<div class="modal fade" id="modalUpdateClothes" tabindex="-1" role="dialog" aria-labelledby="modalUpdateClothes" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-warning">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Actualizar prenda <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formUpdateClothes" name="formUpdateClothes">
                    <div class="card-body">
                    <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Matrícula (*)</label>
                                    <input type="text" class="form-control" id="clothesIdUpdate" name="clothesIdUpdate" placeholder="Matricula"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Producto (*)</label>
                                    <input type="text" class="form-control" id="clothesProductUpdate" name="clothesProductUpdate" placeholder="Ej: Falda"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Categoria (*)</label>
                                    <input type="text" class="form-control" id="clothesCategoryUpdate" name="clothesCategoryUpdate" placeholder="Ej: Mujer"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Talla (*)</label>
                                    <input type="text" class="form-control" id="clothesSizeUpdate" name="clothesSizeUpdate" placeholder="Ej: Mediano"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="text" class="form-control" id="clothesPriceUpdate" name="clothesPriceUpdate" placeholder="Ej: 149.99"/>
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

<!--------------------------------------------------------- Modal DetalleClothes----------------------------------------------->
<div class="modal fade" id="modalDetailClothes" tabindex="-1" role="dialog" aria-labelledby="modalDetailClothes" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-primary">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Detalle de la prenda <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formConsult" name="formConsult">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Matrícula (*)</label>
                                    <input disabled type="text" class="form-control" id="clothesIdConsult" name="clothesIdConsult" placeholder="Matricula"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Producto (*)</label>
                                    <input type="text" disabled class="form-control" id="productConsult" name="productConsult" placeholder="Ej: Falda"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Categoria (*)</label>
                                    <input type="text" disabled class="form-control" id="categoryConsult" name="categoryConsult" placeholder="Ej: Mujer"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Talla (*)</label>
                                    <input type="text" disabled class="form-control" id="sizeConsult" name="sizeConsult" placeholder="Ej: Mediano"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="text" disabled class="form-control" id="priceConsult" name="priceConsult" placeholder="Ej: 149.99"/>
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

<!-- ****************************** Modal EliminarClothes *************************************************-->
<div class="modal fade" id="modalDeleteClothes" tabindex="-1" role="dialog" aria-labelledby="modalDeleteClothes" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form role="form" id="formDeleteClothes" name="formUpdateClothes">
                <input type="text" hidden id="clothesIdDelete" name="clothesIdDelete">
                <div class="modal-body text-center text-danger">¿Realmente deseas eliminar esta Clothesa?</div>
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
        showClothes();
        sendRegisterForm();
        sendUpdateForm();
        deleteRegister();
    });

    var showClothes = function() {
        var tableClothes = $('#dataTableClothes').DataTable({
            "processing": true,
            "ajax": {
                "url": "<?php echo constant('URL');?>clothes/read"
            },
            "columns": [
                { "data": "id_clothes" },
                { "data": "products_clothes" },
                { "data": "categories_clothes" },
                { "data": "size_clothes" },
                { "data": "price_clothes" },
                {data:null,
                    "defaultContent":
                        `<button class='consulta btn btn-primary' data-toggle='modal' data-target='#modalDetailClothes' title="Ver Detalles"><i class="fa fa-eye"></i></button>
                         <button class='editar btn btn-warning' data-toggle='modal' data-target='#modalUpdateClothes' title="Editar Datos"><i class="fa fa-edit"></i></button>
                         <button class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalDeleteClothes' title="Eliminar Registro"><i class="far fa-trash-alt"></i></button>`
                }
            ],
            responsive: true,
            autoWidth: false,
            language: idiomaDataTable,
            lengthChange: true,
            buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
            dom: 'Bfltip'
        });
        getDataDT(tableClothes);
    }

    var getDataDT = function (table) {
        $('#dataTableClothes tbody').on('click', 'tr', function() {
            var data = table.row(this).data();
            var idDelete = $('#clothesIdDelete').val(data.id_clothes);

            var idUpdate = $("#clothesIdUpdate").val(data.id_clothes);
            var productUpdate = $("#clothesProductUpdate").val(data.products_clothes);
            var categoryUpdate = $("#clothesCategoryUpdate").val(data.categories_clothes);
            var sizeUpdate = $("#clothesSizeUpdate").val(data.size_clothes);
            var priceUpdate = $("#clothesPriceUpdate").val(data.price_clothes);

            var idConsultar = $("#clothesIdConsult").val(data.id_clothes);
            var productConsult = $("#productConsult").val(data.products_clothes);
            var categoryConsult = $("#categoryConsult").val(data.categories_clothes);
            var sizeConsult = $("#sizeConsult").val(data.size_clothes);
            var priceConsult = $("#priceConsult").val(data.price_clothes);
        });
    }

    var sendRegisterForm = function () {
        $.validator.setDefaults({
            submitHandler: function () {
                var datos = $('#formRegisterClothes').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>clothes/insert",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "La prenda ha sido registrado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>clothes";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al registrar la prenda. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formRegisterClothes').validate({
            rules: {
                product: {
                    required: true
                },
                category: {
                    required: true
                },
                size: {
                    required: true
                },
                price: {
                    required: true
                },
            },
            messages: {
                product: {
                    required: "Ingrese el nombre de la prenda"
                },
                category: {
                    required: "Ingrese la categoria"
                },
                size: {
                    required: "Ingrese la talla"
                },
                price: {
                    required: "Ingrese el precio"
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

    var sendUpdateForm = function () {
        $.validator.setDefaults({
            submitHandler: function () {
                var datos = $('#formUpdateClothes').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>clothes/update",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "La prenda ha sido actualizada de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>clothes";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al actualizar la prenda. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formUpdateClothes').validate({
            rules: {
                product: {
                    required: true
                },
                category: {
                    required: true
                },
                size: {
                    required: true
                },
                price: {
                    required: true
                },
            },
            messages: {
                product: {
                    required: "Ingrese el nombre de la prenda"
                },
                category: {
                    required: "Ingrese la categoria"
                },
                size: {
                    required: "Ingrese la talla"
                },
                price: {
                    required: "Ingrese el precio"
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

    var deleteRegister = function () {
        $( "#formDeleteClothes" ).submit(function( event ) {
            event.preventDefault();
            var datos = $('#formDeleteClothes').serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo constant('URL');?>clothes/delete",
                data: datos,
                success: function (data) {
                    if (data == 'ok') {
                        Swal.fire(
                            "¡Éxito!",
                            "La prenda ha sido eliminada correctamente",
                            "success"
                        ).then(function () {
                            window.location = "<?php echo constant('URL');?>clothes";
                        })
                    } else {
                        Swal.fire (
                            "¡Error!",
                            "Ha ocurrido un error al eliminar la prenda. " + data,
                            "error"
                        );
                    }
                },
            });
        });
    }
</script>
