<?php
    require 'view/menu.php';
    $menu = new Menu();
    $menu->header('cake');
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-right">
                <button class="btn btn-success" data-toggle='modal' data-target='#modalRegisterCake'> <i class="fas fa-plus-circle"></i> Registrar Pastel </button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabla De Pasteles </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTableCake" name="dataTableCake" class="table table-bordered table-hover dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre del Pastel</th>
                                    <th>Sabor del Pastel</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                    <th>Fecha</th>
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
<div class="modal fade" id="modalRegisterCake" tabindex="-1" role="dialog" aria-labelledby="modalRegisterCake" aria-hidden="true">
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
                <form role="form" id="formRegisterCake" name="formRegisterCake" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre del Pastel (*)</label>
                                    <input type="text" class="form-control" id="nameCake" name="nameCake" placeholder="Nombre del Pastel"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Sabor (*)</label>
                                    <input type="text" class="form-control" id="flavorCake" name="flavorCake" placeholder="Sabor del Pastel "/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Cantidad (*)</label>
                                    <input type="text" class="form-control" id="amountCake" name="amountCake" placeholder="Cantidad"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="text" class="form-control" id="priceCake" name="priceCake" placeholder="Precio"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Fecha (*)</label>
                                    <input type="date" class="form-control" id="dateCake" name="dateCake" placeholder="Fecha"/>
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
<div class="modal fade" id="modalUpdateCake" tabindex="-1" role="dialog" aria-labelledby="modalUpdateCake" aria-hidden="true">
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
                <form role="form" id="formUpdateCake" name="formUpdateCake">
                    <div class="card-body">
                        <div style="display: none;" class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Identificador (*)</label>
                                    <input type="text" class="form-control" id="idUpdateCake" name="idUpdateCake" placeholder="ID Pastel"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" class="form-control" id="namecakeUpdate" name="namecakeUpdate" placeholder="Nombre del Pastel"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Sabor del Pastel (*)</label>
                                    <input type="text" class="form-control" id="flavorcakeUpdate" name="flavorcakeUpdate" placeholder="Sabor del Pastel "/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Cantidad (*)</label>
                                    <input type="text" class="form-control" id="amountcakeUpdate" name="amountcakeUpdate" placeholder="Cantidad "/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="text" class="form-control" id="pricecakeUpdate" name="pricecakeUpdate" placeholder="Precio "/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Fecha (*)</label>
                                    <input type="date" class="form-control" id="datecakeUpdate" name="datecakeUpdate" placeholder="Fecha "/>
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

<!--------------------------------------------------------- Modal DetalleDeporte----------------------------------------------->
<div class="modal fade" id="modalDetailCake" tabindex="-1" role="dialog" aria-labelledby="modalDetailCake" aria-hidden="true">
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
                                    <label>Identificador (*)</label>
                                    <input disabled type="text" class="form-control" id="id_cakeConsul" name="id_cakeConsul" placeholder="Id"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre del Pastel (*)</label>
                                    <input type="text" disabled class="form-control" id="nameCakeConsul" name="nameCakeConsul" placeholder="Nombre del Pastel"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Sabor del Pastel (*)</label>
                                    <input type="text" disabled class="form-control" id="flavorCakeConsul" name="flavorCakeConsul" placeholder="Sabor del Pastel"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Cantidad (*)</label>
                                    <input type="text" disabled class="form-control" id="amountCakeConsul" name="amountCakeConsul" placeholder="Cantidad"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Precio(*)</label>
                                    <input type="text" disabled class="form-control" id="priceCakeConsul" name="priceCakeConsul" placeholder="Precio"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Fecha(*)</label>
                                    <input type="text" disabled class="form-control" id="dateCakeConsul" name="dateCakeConsul" placeholder="Fecha"/>
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
<div class="modal fade" id="modalDeleteCake" tabindex="-1" role="dialog" aria-labelledby="modalDeleteCake" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form role="form" id="formDeleteCake" name="formUpdateCake">
                <input type="text" hidden id="idDeleteCake" name="idDeleteCake">
                <div class="modal-body text-center text-danger">¿Realmente deseas eliminar el Pastel?</div>
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
        showCake();
        enviarFormularioRegistrar();
        enviarFormularioActualizar();
        eliminarRegistro();
    });

    var showCake = function() {
        var table = $('#dataTableCake').DataTable({
            "processing": true,
            "ajax": {
                "url": "<?php echo constant('URL');?>cake/read"
            },
            "columns": [
                { "data": "id_cake" },
                { "data": "name_cake" },
                { "data": "flavor_cake" },
                { "data": "amount_cake" },
                { "data": "price_cake" },
                { "data": "date_Cake" },
                {data:null,
                    "defaultContent":
                        `<button class='consulta btn btn-primary' data-toggle='modal' data-target='#modalDetailCake' title="Ver Detalles"><i class="fa fa-eye"></i></button>
                         <button class='editar btn btn-warning' data-toggle='modal' data-target='#modalUpdateCake' title="Editar Datos"><i class="fa fa-edit"></i></button>
                         <button class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalDeleteCake' title="Eliminar Registro"><i class="far fa-trash-alt"></i></button>`
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
        $('#dataTableCake tbody').on('click', 'tr', function() {
            var data = table.row(this).data();
            var idEliminar = $('#idDeleteCake').val(data.id_cake);

            var idActualizar = $("#idUpdateCake").val(data.id_cake);
            var namecakeUpdate = $("#namecakeUpdate").val(data.name_cake);
            var flavorcakeUpdate = $("#flavorcakeUpdate").val(data.flavor_cake);
            var amountcakeUpdate = $("#amountcakeUpdate").val(data.amount_cake);
            var pricecakeUpdate = $("#pricecakeUpdate").val(data.price_cake);
            var datecakeUpdate = $("#datecakeUpdate").val(data.date_Cake);
            

            var idConsulta = $("#id_cakeConsul").val(data.id_cake);
            var nameConsul = $("#nameCakeConsul").val(data.name_cake);
            var flavorConsul = $("#flavorCakeConsul").val(data.flavor_cake);
            var amountConsul = $("#amountCakeConsul").val(data.amount_cake);
            var priceConsul = $("#priceCakeConsul").val(data.price_cake);
            var dateConsul = $("#dateCakeConsul").val(data.date_Cake);
        });
    }

    var enviarFormularioRegistrar = function () {
        $.validator.setDefaults({
            submitHandler: function () {
                var datos = $('#formRegisterCake').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>cake/insert",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "El Pastel se registro de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>cake";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al registrar el Pastel. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formRegisterCake').validate({
            rules: {
                nameCake: {
                    required: true
                },
                flavorCake: {
                    required: true
                },
                amountCake: {
                    required: true
                },
                priceCake: {
                    required: true
                },
                dateCake: {
                    required: true
                },
            },
            messages: {
                nameCake: {
                    required: "Ingresa un nombre de Pastel"
                },
                flavorCake: {
                    required: "Ingresa un Sabor de Patel"
                },
                amountCake: {
                    required: "Ingresa la cantidad"
                },
                priceCake: {
                    required: "Ingresa el precio"
                },
                dateCake: {
                    required: "Ingresa la fecha"
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
                var datos = $('#formUpdateCake').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>cake/update",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "La Pastel se Actualizo de Manera Correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>cake";
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
        $('#formUpdateCake').validate({
            rules: {   
                nameCakeUpdate: {
                    required: true
                },
                flavorCakeUpdate: {
                    required: true
                },
                amountCakeUpdate: {
                    required: true
                },
                priceCakeUpdate: {
                    required: true
                },
                datecakeUpdate: {
                    required: true
                },
            },
            messages: {
                nameCake: {
                    required: "Ingresa un nombre del Pastel"
                },
                flavorCake: {
                    required: "Ingresa un Sabor de Patel"
                },
                amountCake: {
                    required: "Ingresa la cantidad"
                },
                priceCake: {
                    required: "Ingresa el precio"
                },
                dateCake: {
                    required: "Ingresa la fecha"
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
        $( "#formDeleteCake" ).submit(function( event ) {
            event.preventDefault();
            var datos = $('#formDeleteCake').serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo constant('URL');?>cake/delete",
                data: datos,
                success: function (data) {
                    if (data == 'ok') {
                        Swal.fire(
                            "¡Éxito!",
                            "El Pastel ha sido eliminado correctamente",
                            "success"
                        ).then(function () {
                            window.location = "<?php echo constant('URL');?>cake";
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
