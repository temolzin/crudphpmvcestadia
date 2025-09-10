<?php
    require 'view/menu.php';
    $menu = new Menu();
    $menu->header('dulce');
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-right">
                <button class="btn btn-success" data-toggle='modal' data-target='#modalRegistrarDulce'> <i class="fas fa-plus-circle"></i> Registrar Dulce </button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabla Dulce</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTableDulce" name="dataTableDulce" class="table table-bordered table-hover dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                    <th>Sabor</th>
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
<div class="modal fade" id="modalRegistrarDulce" tabindex="-1" role="dialog" aria-labelledby="modalRegistrarDulce" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-success">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Dulce <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->

                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formRegistrarDulce" name="formRegistrarDulce" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre del Dulce (*)</label>
                                    <input type="text" class="form-control" id="nombreDulce" name="nombreDulce" placeholder="Nombre"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Cantidad (*)</label>
                                    <input type="text" class="form-control" id="cantidadDulce" name="cantidadDulce" placeholder="Piezas o Kg."/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="text" class="form-control" id="precioDulce" name="precioDulce" placeholder="Precio"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Sabor (*)</label>
                                    <input type="text" class="form-control" id="saborDulce" name="saborDulce" placeholder="Sabor"/>
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
<div class="modal fade" id="modalActualizarDulce" tabindex="-1" role="dialog" aria-labelledby="modalActualizarDulce" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-warning">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Dulce <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formActualizarDulce" name="formActualizarDulce">
                <div class="card-body">
                        <div style="display: none;" class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Id (*)</label>
                                    <input type="text" class="form-control" id="idDulceActualizar" name="idDulceActualizar" placeholder="Id"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" class="form-control" id="nombreDulceActualizar" name="nombreDulceActualizar" placeholder="Nombre"/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Cantidad (*)</label>
                                    <input type="text" class="form-control" id="cantidadDulceActualizar" name="cantidadDulceActualizar" placeholder="Cantidad"/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="text" class="form-control" id="precioDulceActualizar" name="precioDulceActualizar" placeholder="Precio"/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Sabor (*)</label>
                                    <input type="text" class="form-control" id="saborDulceActualizar" name="saborDulceActualizar" placeholder="Sabor"/>
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

<!--------------------------------------------------------- Modal DetalleDulce----------------------------------------------->
<div class="modal fade" id="modalDetalleDulce" tabindex="-1" role="dialog" aria-labelledby="modalDetalleDulce" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-primary">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Dulce <small> &nbsp;(*) Campos requeridos</small></h4>
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
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" class="form-control" id="nombreDulceConsultar" name="nombreDulceConsultar" placeholder="Nombre"/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Cantidad (*)</label>
                                    <input type="text" class="form-control" id="cantidadDulceConsultar" name="cantidadDulceConsultar" placeholder="Cantidad"/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="text" class="form-control" id="precioDulceConsultar" name="precioDulceConsultar" placeholder="Precio"/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Sabor (*)</label>
                                    <input type="text" class="form-control" id="saborDulceConsultar" name="saborDulceConsultar" placeholder="Sabor"/>
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

<!-- ****************************** Modal Eliminar Dulce *************************************************-->
<div class="modal fade" id="modalEliminarDulce" tabindex="-1" role="dialog" aria-labelledby="modalEliminarDulce" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form role="form" id="formEliminarDulce" name="formActualizarDulce">
                <input type="text" hidden id="idEliminarDulce" name="idEliminarDulce">
                <div class="modal-body text-center text-danger">¿Realmente deseas eliminar este Dulce?</div>
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
        mostrarDulces();
        enviarFormularioRegistrar();
        enviarFormularioActualizar();
        eliminarRegistro();
    });

    var mostrarDulces = function() {
        var tableDulce = $('#dataTableDulce').DataTable({
            "processing": true,
            "ajax": {
                "url": "<?php echo constant('URL');?>dulce/read"
            },
            "columns": [
                { "data": "id_dulce" },
                { "data": "nombre_dulce" },
                { "data": "cantidad_dulce" },
                { "data": "precio_dulce" },
                { "data": "sabor_dulce" },
                {data:null,
                    "defaultContent":
                        `<button class='consulta btn btn-primary' data-toggle='modal' data-target='#modalDetalleDulce' title="Ver Detalles"><i class="fa fa-eye"></i></button>
                         <button class='editar btn btn-warning' data-toggle='modal' data-target='#modalActualizarDulce' title="Editar Datos"><i class="fa fa-edit"></i></button>
                         <button class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminarDulce' title="Eliminar Registro"><i class="far fa-trash-alt"></i></button>`
                }
            ],
            responsive: true,
            autoWidth: false,
            language: idiomaDataTable,
            lengthChange: true,
            buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
            dom: 'Bfltip'
        });
        obtenerdatosDT(tableDulce);
    }

    var obtenerdatosDT = function (table) {
        $('#dataTableDulce tbody').on('click', 'tr', function() {
            var data = table.row(this).data();

            var idEliminar = $('#idEliminarDulce').val(data.id_dulce);

            var idActualizar = $("#idDulceActualizar").val(data.id_dulce);
            var nombredulceactualizar = $("#nombreDulceActualizar").val(data.nombre_dulce);
            var cantidaddulceactualizar = $("#cantidadDulceActualizar").val(data.cantidad_dulce);
            var preciodulceActualizar =$("#precioDulceActualizar").val(data.precio_dulce);
            var sabordulceActualizar =$("#saborDulceActualizar").val(data.sabor_dulce);

            var idConsulta = $("#idDulceConsultar").val(data.id_dulce);
            var nombreConsulta = $("#nombreDulceConsultar").val(data.nombre_dulce);
            var cantidaddulceconsultar = $("#cantidadDulceConsultar").val(data.cantidad_dulce);
            var preciodulceconsultar =$("#precioDulceConsultar").val(data.precio_dulce);
            var sabordulceconsultar =$("#saborDulceConsultar").val(data.sabor_dulce);
        });
    }

    var enviarFormularioRegistrar = function () {
        $.validator.setDefaults({
            submitHandler: function () {
                var datos = $('#formRegistrarDulce').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>dulce/insert",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "El Dulce ha sido registrada de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>dulce";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al registrar el Dulce. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formRegistrarDulce').validate({
            rules: {
                nombreDulce: {
                    required: true
                },
                cantidadDulce: {
                    required: true
                },
                precioDulce: {
                    required: true
                },
                saborDulce: {
                    required: true
                }
            },
            messages: {
                nombreDulce: {
                    required: "INGRESA UN NOMBRE"
                },
                cantidadDulce: {
                    required: "INGRESA UN CANTIDAD"
                },
                precioDulce: {
                    required: "INGRESA UN # DE PRECIO"
                },
                saborDulce: {
                    required: "INGRESA UN # DE SABOR"
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
                var datos = $('#formActualizarDulce').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>dulce/update",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "La Dulce ha sido Actualizada de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>dulce";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al Actualizar el Dulce. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formActualizarDulce').validate({
            rules: {
                idmatriculaActualizar: {
                    required: true,
                    number: true
                },
                nombreDulceActualizar: {
                    required: true
                },
                cantidadDulceActualizar: {
                    required: true
                },
                precioDulceActualizar: {
                    required: true
                },
                saborDulceActualizar: {
                    required: true
                }
            },
            messages: {
                nombreDulceActualizar: {
                    required: "INGRESA UN NOMBRE"
                },
                cantidadDulceActualizar: {
                    required: "INGRESA UN CANTIDAD"
                },
                precioDulceActualizar: {
                    required: "INGRESA UN # DE PRECIO"
                },
                saborDulceActualizar: {
                    required: "INGRESA UN # DE SABOR"
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
        $( "#formEliminarDulce" ).submit(function( event ) {
            event.preventDefault();
            var datos = $('#formEliminarDulce').serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo constant('URL');?>dulce/delete",
                data: datos,
                success: function (data) {
                    if (data == 'ok') {
                        Swal.fire(
                            "¡Éxito!",
                            "El Dulce ha sido eliminada correctamente",
                            "success"
                        ).then(function () {
                            window.location = "<?php echo constant('URL');?>dulce";
                        })
                    } else {
                        Swal.fire (
                            "¡Error!",
                            "Ha ocurrido un error al eliminar el Dulce. " + data,
                            "error"
                        );
                    }
                },
            });
        });
    }

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
</script>
