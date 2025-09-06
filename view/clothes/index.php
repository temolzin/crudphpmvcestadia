<?php
    require 'view/menu.php';
    $menu = new Menu();
    $menu->header('clothes');
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-right">
                <button class="btn btn-success" data-toggle='modal' data-target='#modalRegistrarClothes'> <i class="fas fa-plus-circle"></i> Registrar Prenda </button>
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
<div class="modal fade" id="modalRegistrarClothes" tabindex="-1" role="dialog" aria-labelledby="modalRegistrarClothes" aria-hidden="true">
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
                <form role="form" id="formRegistrarClothes" name="formRegistrarClothes" method="post">
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
<div class="modal fade" id="modalActualizarClothes" tabindex="-1" role="dialog" aria-labelledby="modalActualizarClothes" aria-hidden="true">
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
                <form role="form" id="formActualizarClothes" name="formActualizarClothes">
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
                                    <input type="text" class="form-control" id="productUpdate" name="productUpdate" placeholder="Ej: Falda"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Categoria (*)</label>
                                    <input type="text" class="form-control" id="categoryUpdate" name="categoryUpdate" placeholder="Ej: Mujer"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Talla (*)</label>
                                    <input type="text" class="form-control" id="sizeUpdate" name="sizeUpdate" placeholder="Ej: Mediano"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="text" class="form-control" id="priceUpdate" name="priceUpdate" placeholder="Ej: 149.99"/>
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
<div class="modal fade" id="modalDetalleClothes" tabindex="-1" role="dialog" aria-labelledby="modalDetalleClothes" aria-hidden="true">
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
                <form role="form" id="formConsulta" name="formConsulta">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Matrícula (*)</label>
                                    <input disabled type="text" class="form-control" id="clothesIdConsultar" name="clothesIdConsultar" placeholder="Matricula"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Producto (*)</label>
                                    <input type="text" disabled class="form-control" id="productConsultar" name="productConsultar" placeholder="Ej: Falda"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Categoria (*)</label>
                                    <input type="text" disabled class="form-control" id="categoryConsultar" name="categoryConsultar" placeholder="Ej: Mujer"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Talla (*)</label>
                                    <input type="text" disabled class="form-control" id="sizeConsultar" name="sizeConsultar" placeholder="Ej: Mediano"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="text" disabled class="form-control" id="priceConsultar" name="priceConsultar" placeholder="Ej: 149.99"/>
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
<div class="modal fade" id="modalEliminarClothes" tabindex="-1" role="dialog" aria-labelledby="modalEliminarClothes" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form role="form" id="formEliminarClothes" name="formActualizarClothes">
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
        mostrarClothes();
        enviarFormularioRegistrar();
        enviarFormularioActualizar();
        eliminarRegistro();
    });

    var mostrarClothes = function() {
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
                        `<button class='consulta btn btn-primary' data-toggle='modal' data-target='#modalDetalleClothes' title="Ver Detalles"><i class="fa fa-eye"></i></button>
                         <button class='editar btn btn-warning' data-toggle='modal' data-target='#modalActualizarClothes' title="Editar Datos"><i class="fa fa-edit"></i></button>
                         <button class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminarClothes' title="Eliminar Registro"><i class="far fa-trash-alt"></i></button>`
                }
            ],
            responsive: true,
            autoWidth: false,
            language: idiomaDataTable,
            lengthChange: true,
            buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
            dom: 'Bfltip'
        });
        obtenerdatosDT(tableClothes);
    }

    var obtenerdatosDT = function (table) {
        $('#dataTableClothes tbody').on('click', 'tr', function() {
            var data = table.row(this).data();
            var idEliminar = $('#clothesIdDelete').val(data.id_clothes);

            var idActualizar = $("#clothesIdUpdate").val(data.id_clothes);
            var productActualizar = $("#productUpdate").val(data.products_clothes);
            var categoryActualizar = $("#categoryUpdate").val(data.categories_clothes);
            var sizeActualizar = $("#sizeUpdate").val(data.size_clothes);
            var priceActualizar = $("#priceUpdate").val(data.price_clothes);

            var idConsultar = $("#clothesIdConsultar").val(data.id_clothes);
            var productConsultar = $("#productConsultar").val(data.products_clothes);
            var categoryConsultar = $("#categoryConsultar").val(data.categories_clothes);
            var sizeConsultar = $("#sizeConsultar").val(data.size_clothes);
            var priceConsultar = $("#priceConsultar").val(data.price_clothes);
        });
    }

    var enviarFormularioRegistrar = function () {
        $.validator.setDefaults({
            submitHandler: function () {
                var datos = $('#formRegistrarClothes').serialize();
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
        $('#formRegistrarClothes').validate({
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

    var enviarFormularioActualizar = function () {
        $.validator.setDefaults({
            submitHandler: function () {
                var datos = $('#formActualizarClothes').serialize();
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
        $('#formActualizarClothes').validate({
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

    var eliminarRegistro = function () {
        $( "#formEliminarClothes" ).submit(function( event ) {
            event.preventDefault();
            var datos = $('#formEliminarClothes').serialize();
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
