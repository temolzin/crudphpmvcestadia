<?php
    require 'view/menu.php';
    $menu = new Menu();
    $menu->header('libro');
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-right">
                <button class="btn btn-success" data-toggle='modal' data-target='#modalRegistrarLibro'> <i class="fas fa-plus-circle"></i> Registrar Libro </button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabla Libro</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTableLibro" name="dataTableLibro" class="table table-bordered table-hover dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Precio</th>
                                    <th>Autor</th>
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
<div class="modal fade" id="modalRegistrarLibro" tabindex="-1" role="dialog" aria-labelledby="modalRegistrarLibro" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-success">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Libro <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->

                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formRegistrarLibro" name="formRegistrarLibro" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" class="form-control" id="nombreLibro" name="nombreLibro" placeholder="Nombre"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="text" class="form-control" id="precioLibro" name="precioLibro" placeholder="Precio"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Autor (*)</label>
                                    <input type="text" class="form-control" id="autorLibro" name="autorLibro" placeholder="Autor"/>
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
<div class="modal fade" id="modalActualizarLibro" tabindex="-1" role="dialog" aria-labelledby="modalActualizarLibro" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-warning">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Libro <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formActualizarLibro" name="formActualizarLibro">
                    <div class="card-body">
                        <div style="display: none;" class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Id (*)</label>
                                    <input type="text" class="form-control" id="idLibroActualizar" name="idLibroActualizar" placeholder="Id"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" class="form-control" id="nombreLibroActualizar" name="nombreLibroActualizar" placeholder="Nombre"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="text" class="form-control" id="precioLibroActualizar" name="precioLibroActualizar" placeholder="Precio"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Autor (*)</label>
                                    <input type="text" class="form-control" id="autorLibroActualizar" name="autorLibroActualizar" placeholder="Autor"/>
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

<!--------------------------------------------------------- Modal DetalleLibro----------------------------------------------->
<div class="modal fade" id="modalDetalleLibro" tabindex="-1" role="dialog" aria-labelledby="modalDetalleLibro" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-primary">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Libro <small> &nbsp;(*) Campos requeridos</small></h4>
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
                                    <label>Id (*)</label>
                                    <input disabled type="text" class="form-control" id="idLibroConsultar" name="idLibroConsultar" placeholder="Id"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" disabled class="form-control" id="nombreLibroConsultar" name="nombreLibroConsultar" placeholder="Nombre"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="text" disabled class="form-control" id="precioLibroConsultar" name="precioLibroConsultar" placeholder="Precio"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Autor (*)</label>
                                    <input type="text" disabled class="form-control" id="autorLibroConsultar" name="autorLibroConsultar" placeholder="Autor"/>
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

<!-- ****************************** Modal Eliminar Libro *************************************************-->
<div class="modal fade" id="modalEliminarLibro" tabindex="-1" role="dialog" aria-labelledby="modalEliminarLibro" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form role="form" id="formEliminarLibro" name="formActualizarLibro">
                <input type="text" hidden id="idEliminarLibro" name="idEliminarLibro">
                <div class="modal-body text-center text-danger">¿Realmente deseas eliminar este Libro?</div>
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
<<<<<<< Updated upstream
        mostrarLibros();
=======
        mostrarLibro();
>>>>>>> Stashed changes
        enviarFormularioRegistrar();
        enviarFormularioActualizar();
        eliminarRegistro();
    });

<<<<<<< Updated upstream
    var mostrarLibros = function() {
=======
    var mostrarLibro = function() {
>>>>>>> Stashed changes
        var tableLibro = $('#dataTableLibro').DataTable({
            "processing": true,
            "ajax": {
                "url": "<?php echo constant('URL');?>libro/read"
            },
            "columns": [
                { "data": "id_libro" },
                { "data": "nombre_libro" },
                { "data": "precio_libro" },
                { "data": "autor_libro" },
                {data:null,
                    "defaultContent":
                        `<button class='consulta btn btn-primary' data-toggle='modal' data-target='#modalDetalleLibro' title="Ver Detalles"><i class="fa fa-eye"></i></button>
                         <button class='editar btn btn-warning' data-toggle='modal' data-target='#modalActualizarLibro' title="Editar Datos"><i class="fa fa-edit"></i></button>
                         <button class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminarLibro' title="Eliminar Registro"><i class="far fa-trash-alt"></i></button>`
                }
            ],
            responsive: true,
            autoWidth: false,
            language: idiomaDataTable,
            lengthChange: true,
            buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
            dom: 'Bfltip'
        });
        obtenerdatosDT(tableLibro);
    }

    var obtenerdatosDT = function (table) {
        $('#dataTableLibro tbody').on('click', 'tr', function() {
            var data = table.row(this).data();
            var idEliminar = $('#idEliminarLibro').val(data.id_libro);

            var idActualizar = $("#idLibroActualizar").val(data.id_libro);
            var nombreLibroActualizar = $("#nombreLibroActualizar").val(data.nombre_libro);
            var precio = $("#precioLibroActualizar").val(data.precio_libro);
            var autor = $("#autorLibroActualizar").val(data.autor_libro);

            var idConsulta = $("#idLibroConsultar").val(data.id_libro);
            var nombreConsulta = $("#nombreLibroConsultar").val(data.nombre_libro);
            var precioConsulta = $("#precioLibroConsultar").val(data.precio_libro);
            var autorConsulta = $("#autorLibroConsultar").val(data.autor_libro);
        });
    }

    var enviarFormularioRegistrar = function () {
        $.validator.setDefaults({
            submitHandler: function () {
                var datos = $('#formRegistrarLibro').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>libro/insert",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "El Libro ha sido registrado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>libro";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al registrar el Libro. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formRegistrarLibro').validate({
            rules: {
                nombreLibro: {
                    required: true
                },
                precioLibro: {
                    required: true
                },
                autorLibro: {
                    required: true
                },
            },
            messages: {
                nombreLibro: {
                    required: "Ingresa el nombre del libro"
                },
                precioLibro: {
                    required: "Ingresa su precio"
                },
                autorLibro: {
                    required: "Ingresa el Autor"
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
                var datos = $('#formActualizarLibro').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>libro/update",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "El Libro ha sido Actualizado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>libro";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al Actualizar el Libro. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formActualizarLibro').validate({
            rules: {
                nombreLibroActualizar: {
                    required: true
                },
                precioLibroActualizar: {
                    required: true
                },
                autorLibroActualizar: {
                    required: true
                }
            },
            messages: {
                nombreActualizar: {
                    required: "Ingresa el nombre del libro"
                },
                precioLibroActualizar: {
                    required: "Ingresa un precio"
                },
                autorLibroActualizar: {
                    required: "Ingresa el autor"
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
        $( "#formEliminarLibro" ).submit(function( event ) {
            event.preventDefault();
            var datos = $('#formEliminarLibro').serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo constant('URL');?>libro/delete",
                data: datos,
                success: function (data) {
                    if (data == 'ok') {
                        Swal.fire(
                            "¡Éxito!",
                            "El Libro ha sido eliminado correctamente",
                            "success"
                        ).then(function () {
                            window.location = "<?php echo constant('URL');?>libro";
                        })
                    } else {
                        Swal.fire (
                            "¡Error!",
                            "Ha ocurrido un error al eliminar el Libro. " + data,
                            "error"
                        );
                    }
                },
            });
        });
    }

    /*var dataTableFunction = function () {
        var table = $("#dataTableLibro").DataTable({
            responsive: true,
            language: idiomaDataTable,
            lengthChange: true,
            buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
            dom: 'Bfltip'
        });

        table.buttons().container().appendTo('#dataTableLibro_wrapper .col-md-6:eq(0)');
    }*/
</script>
