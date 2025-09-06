<?php
    require 'view/menu.php';
    $menu = new Menu();
    $menu->header('videogame');
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-right">
                <button class="btn btn-success" data-toggle='modal' data-target='#modalRegistrarVideogame'> <i class="fas fa-plus-circle"></i> Registrar Videogame </button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabla Videogame</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTableVideogame" name="dataTableVideogame" class="table table-bordered table-hover dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>title_videogame</th>
                                    <th>Género</th>
                                    <th>Precio</th>
                                    <th>Fecha de lanzamiento</th>
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
<div class="modal fade" id="modalRegistrarVideogame" tabindex="-1" role="dialog" aria-labelledby="modalRegistrarVideogame" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-success">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Videogame <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->

                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formRegistrarVideogame" name="formRegistrarVideogame" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Título del Videogame (*)</label>
                                    <input type="text" class="form-control" id="title_videogame" name="title_videogame" placeholder="Titulo"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Género (*)</label>
                                    <input type="text" class="form-control" id="gender_videogame" name="gender_videogame" placeholder="Género de videojuego"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="text" class="form-control" id="price_videogame" name="price_videogame" placeholder="Precio"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Fecha de lanzamiento (*)</label>
                                    <input type="date" class="form-control" id="release_date_videogame" name="release_date_videogame" placeholder="Fecha de lanzamiento"/>
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
<div class="modal fade" id="modalActualizarVideogame" tabindex="-1" role="dialog" aria-labelledby="modalActualizarVideogame" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-warning">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Videogame <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formActualizarVideogame" name="formActualizarVideogame">
                <div class="card-body">
                        <div style="display: none;" class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Id (*)</label>
                                    <input type="text" class="form-control" id="idVideogameActualizar" name="idVideogameActualizar" placeholder="Id"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Título del Videogame (*)</label>
                                    <input type="text" class="form-control" id="title_videogameActualizar" name="title_videogameActualizar" placeholder="Titulo"/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Género (*)</label>
                                    <input type="text" class="form-control" id="gender_videogameActualizar" name="gender_videogameActualizar" placeholder="Género de videojuego"/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="text" class="form-control" id="price_videogameActualizar" name="price_videogameActualizar" placeholder="Precio"/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Fecha de lanzamiento (*)</label>
                                    <input type="date" class="form-control" id="release_date_videogameActualizar" name="release_date_videogameActualizar" placeholder="Fecha de lanzamiento"/>
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

<!--------------------------------------------------------- Modal DetalleVideogame----------------------------------------------->
<div class="modal fade" id="modalDetalleVideogame" tabindex="-1" role="dialog" aria-labelledby="modalDetalleVideogame" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-primary">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Videogame <small> &nbsp;(*) Campos requeridos</small></h4>
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
                                    <label>Título del Videogame (*)</label>
                                    <input type="text" class="form-control" id="title_videogameConsultar" name="title_videogameConsultar" placeholder="Titulo"/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Género (*)</label>
                                    <input type="text" class="form-control" id="gender_videogameConsultar" name="gender_videogameConsultar" placeholder="Género de videojuego"/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="text" class="form-control" id="price_videogameConsultar" name="price_videogameConsultar" placeholder="Precio"/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Fecha de lanzamiento (*)</label>
                                    <input type="date" class="form-control" id="release_date_videogameConsultar" name="release_date_videogameConsultar" placeholder="Fecha de lanzamiento"/>
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

<!-- ****************************** Modal Eliminar Videogame *************************************************-->
<div class="modal fade" id="modalEliminarVideogame" tabindex="-1" role="dialog" aria-labelledby="modalEliminarVideogame" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form role="form" id="formEliminarVideogame" name="formActualizarVideogame">
                <input type="text" hidden id="idEliminarVideogame" name="idEliminarVideogame">
                <div class="modal-body text-center text-danger">¿Realmente deseas eliminar este Videogame?</div>
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
        mostrarVideogames();
        enviarFormularioRegistrar();
        enviarFormularioActualizar();
        eliminarRegistro();
    });

    var mostrarVideogames = function() {
        var tableVideogame = $('#dataTableVideogame').DataTable({
            "processing": true,
            "ajax": {
                "url": "<?php echo constant('URL');?>videogame/read"
            },
            "columns": [
                { "data": "id_videogame" },
                { "data": "title_videogame" },
                { "data": "gender_videogame" },
                { "data": "price_videogame" },
                { "data": "release_date_videogame" },
                {data:null,
                    "defaultContent":
                        `<button class='consulta btn btn-primary' data-toggle='modal' data-target='#modalDetalleVideogame' title="Ver Detalles"><i class="fa fa-eye"></i></button>
                         <button class='editar btn btn-warning' data-toggle='modal' data-target='#modalActualizarVideogame' title="Editar Datos"><i class="fa fa-edit"></i></button>
                         <button class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminarVideogame' title="Eliminar Registro"><i class="far fa-trash-alt"></i></button>`
                }
            ],
            responsive: true,
            autoWidth: false,
            language: idiomaDataTable,
            lengthChange: true,
            buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
            dom: 'Bfltip'
        });
        obtenerdatosDT(tableVideogame);
    }

    var obtenerdatosDT = function (table) {
        $('#dataTableVideogame tbody').on('click', 'tr', function() {
            var data = table.row(this).data();

            var idEliminar = $('#idEliminarVideogame').val(data.id_videogame);

            var idActualizar = $("#idVideogameActualizar").val(data.id_videogame);
            var nombrevideogameactualizar = $("#title_videogameActualizar").val(data.title_videogame);
            var cantidadvideogameactualizar = $("#gender_videogameActualizar").val(data.gender_videogame);
            var preciovideogameActualizar =$("#price_videogameActualizar").val(data.price_videogame);
            var saborvideogameActualizar =$("#release_date_videogameActualizar").val(data.release_date_videogame);

            var idConsulta = $("#idVideogameConsultar").val(data.id_videogame);
            var nombreConsulta = $("#title_videogameConsultar").val(data.title_videogame);
            var cantidadvideogameconsultar = $("#gender_videogameConsultar").val(data.gender_videogame);
            var preciovideogameconsultar =$("#price_videogameConsultar").val(data.price_videogame);
            var saborvideogameconsultar =$("#release_date_videogameConsultar").val(data.release_date_videogame);
        });
    }

    var enviarFormularioRegistrar = function () {
        $.validator.setDefaults({
            submitHandler: function () {
                var datos = $('#formRegistrarVideogame').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>videogame/insert",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "El Videogame ha sido registrada de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>videogame";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al registrar el Videogame. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formRegistrarVideogame').validate({
            rules: {
                title_videogame: {
                    required: true
                },
                gender_videogame: {
                    required: true
                },
                price_videogame: {
                    required: true
                },
                release_date_videogame: {
                    required: true
                }
            },
            messages: {
                title_videogame: {
                    required: "INGRESA UN NOMBRE"
                },
                gender_videogame: {
                    required: "INGRESA UN CANTIDAD"
                },
                price_videogame: {
                    required: "INGRESA UN # DE PRECIO"
                },
                release_date_videogame: {
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
                var datos = $('#formActualizarVideogame').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>videogame/update",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "La Videogame ha sido Actualizada de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>videogame";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al Actualizar el Videogame. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formActualizarVideogame').validate({
            rules: {
                idmatriculaActualizar: {
                    required: true,
                    number: true
                },
                title_videogameActualizar: {
                    required: true
                },
                gender_videogameActualizar: {
                    required: true
                },
                price_videogameActualizar: {
                    required: true
                },
                release_date_videogameActualizar: {
                    required: true
                }
            },
            messages: {
                title_videogameActualizar: {
                    required: "INGRESA UN TITULO"
                },
                gender_videogameActualizar: {
                    required: "INGRESA UN GÉNERO"
                },
                price_videogameActualizar: {
                    required: "INGRESA UN # DE PRECIO"
                },
                release_date_videogameActualizar: {
                    required: "INGRESA UNA FECHA"
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
        $( "#formEliminarVideogame" ).submit(function( event ) {
            event.preventDefault();
            var datos = $('#formEliminarVideogame').serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo constant('URL');?>videogame/delete",
                data: datos,
                success: function (data) {
                    if (data == 'ok') {
                        Swal.fire(
                            "¡Éxito!",
                            "El Videogame ha sido eliminada correctamente",
                            "success"
                        ).then(function () {
                            window.location = "<?php echo constant('URL');?>videogame";
                        })
                    } else {
                        Swal.fire (
                            "¡Error!",
                            "Ha ocurrido un error al eliminar el Videogame. " + data,
                            "error"
                        );
                    }
                },
            });
        });
    }

    /*var dataTableFunction = function () {
        var table = $("#dataTableVideogame").DataTable({
            responsive: true,
            language: idiomaDataTable,
            lengthChange: true,
            buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
            dom: 'Bfltip'
        });

        table.buttons().container().appendTo('#dataTableVideogame_wrapper .col-md-6:eq(0)');
    }*/
</script>
