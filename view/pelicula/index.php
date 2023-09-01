<?php
    require 'view/menu.php';
    $menu = new Menu();
    $menu->header('pelicula');
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-right">
                <button class="btn btn-success" data-toggle='modal' data-target='#modalRegistrarPelicula'> <i class="fas fa-plus-circle"></i> Registrar Pelicula </button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabla Peliculas</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTablePelicula" name="dataTablePelicula" class="table table-bordered table-hover dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Género</th>
                                    <th>Fecha de lanzamiento</th>
                                    <th>Descripción</th>
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
<div class="modal fade" id="modalRegistrarPelicula" tabindex="-1" role="dialog" aria-labelledby="modalRegistrarPelicula" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-success">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Pelicula <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->

                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formRegistrarPelicula" name="formRegistrarPelicula" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" class="form-control" id="nombrePelicula" name="nombrePelicula" placeholder="Nombre"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Género (*)</label>
                                    <input type="text" class="form-control" id="genero" name="genero" placeholder="Género"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Fecha de lanzamiento (*)</label>
                                    <input type="date" class="form-control" id="fechaLanzamiento" name="fechaLanzamiento" placeholder="Fecha de lanzamiento"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Descripción (*)</label>
                                    <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion"/>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">Registrar Pelicula</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--------------------------------------------------------- Modal Actualizar----------------------------------------------->
<div class="modal fade" id="modalActualizarPelicula" tabindex="-1" role="dialog" aria-labelledby="modalActualizarPelicula" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-warning">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Pelicula <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formActualizarPelicula" name="formActualizarPelicula">
                    <div class="card-body">
                        <div style="display: none;" class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>idPelicula (*)</label>
                                    <input type="text" class="form-control" id="idPeliculaActualizar" name="idPeliculaActualizar" placeholder="idPelicula"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" class="form-control" id="nombrePeliculaActualizar" name="nombrePeliculaActualizar" placeholder="Nombre pelicula"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Género (*)</label>
                                    <input type="text" class="form-control" id="generoPeliculaActualizar" name="generoPeliculaActualizar" placeholder="Género"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Fecha de lanzamiento (*)</label>
                                    <input type="date" class="form-control" id="fechaPeliculaActualizar" name="fechaPeliculaActualizar" placeholder="fecha de publicación"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Descripción (*)</label>
                                    <input type="text" class="form-control" id="descripcionPelciulaActualizar" name="descripcionPelciulaActualizar" placeholder="Descripción"/>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-warning">Actualizar pelicula</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--------------------------------------------------------- Modal DetalleAlumno----------------------------------------------->
<div class="modal fade" id="modalDetallePelicula" tabindex="-1" role="dialog" aria-labelledby="modalDetallePelicula" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-primary">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Pelicula <small> &nbsp;(*) Campos requeridos</small></h4>
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
                                    <label>IdPelicula (*)</label>
                                    <input disabled type="text" class="form-control" id="idPeliculaConsultar" name="idPeliculaConsultar" placeholder="IdPelicula"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" disabled class="form-control" id="nombrePeliculaConsultar" name="nombrePeliculaConsultar" placeholder="Nombre Pelicula"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Género (*)</label>
                                    <input type="text" disabled class="form-control" id="generoPeliculaConsultar" name="generoPeliculaConsultar" placeholder="Género"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>fecha de lanzamiento (*)</label>
                                    <input type="date" disabled class="form-control" id="fechaPeliculaConsultar" name="fechaPeliculaConsultar" placeholder="Fecha de lanzamiento"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Descripción (*)</label>
                                    <input type="text" disabled class="form-control" id="descripcionPeliculaConsultar" name="descripcionPeliculaConsultar" placeholder="Descripción"/>
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

<!-- ****************************** Modal Eliminar Alumno *************************************************-->
<div class="modal fade" id="modalEliminarPelicula" tabindex="-1" role="dialog" aria-labelledby="modalEliminarPelicula" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form role="form" id="formEliminarPelicula" name="formActualizarPelicula">
                <input type="text" hidden id="idEliminarPelicula" name="idEliminarPelicula">
                <div class="modal-body text-center text-danger">¿Realmente deseas eliminar esta pelicula?</div>
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
        mostrarPeliculas();
        enviarFormularioRegistrar();
        enviarFormularioActualizar();
        eliminarRegistro();
    });

    var mostrarPeliculas = function() {
        var tablePelicula = $('#dataTablePelicula').DataTable({
            "processing": true,
            "ajax": {
                "url": "<?php echo constant('URL');?>pelicula/read"
            },
            "columns": [
                { "data": "id_pelicula" },
                { "data": "nombre_pelicula" },
                { "data": "genero" },
                { "data": "fecha_lanzamiento" },
                { "data": "descripcion" },
                {data: null,
                    "defaultContent":
                        `<button class='consulta btn btn-primary' data-toggle='modal' data-target='#modalDetallePelicula' title="Ver Detalles"><i class="fa fa-eye"></i></button>
                         <button class='editar btn btn-warning' data-toggle='modal' data-target='#modalActualizarPelicula' title="Editar Datos"><i class="fa fa-edit"></i></button>
                         <button class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminarPelicula' title="Eliminar Registro"><i class="far fa-trash-alt"></i></button>`
                }
            ],
            responsive: true,
            autoWidth: false,
            language: idiomaDataTable,
            lengthChange: true,
            buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
            dom: 'Bfltip'
        });
        obtenerdatosDT(tablePelicula);
    }

    var obtenerdatosDT = function (table) {
        $('#dataTablePelicula tbody').on('click', 'tr', function() {
            var data = table.row(this).data();
            var idEliminar = $('#idEliminarPelicula').val(data.id_pelicula);

            var idActualizar = $("#idPeliculaActualizar").val(data.id_pelicula);
            var nombrePeliculaActualizar = $("#nombrePeliculaActualizar").val(data.nombre_pelicula);
            var generoPeliculaActualizar = $("#generoPeliculaActualizar").val(data.genero);
            var fechaPeliculaActualizar = $("#fechaPeliculaActualizar").val(data.fecha_lanzamiento);
            var descripcionPelciulaActualizar = $("#descripcionPelciulaActualizar").val(data.descripcion);

            var idConsulta = $("#idPeliculaConsultar").val(data.id_pelicula);
            var nombreConsulta = $("#nombrePeliculaConsultar").val(data.nombre_pelicula);
            var generoConsulta = $("#generoPeliculaConsultar").val(data.genero);
            var fechaConsulta = $("#fechaPeliculaConsultar").val(data.fecha_lanzamiento);
            var descripcionConsulta = $("#descripcionPeliculaConsultar").val(data.descripcion);
        });
    }

    var enviarFormularioRegistrar = function () {
        $.validator.setDefaults({
            submitHandler: function () {
                var datos = $('#formRegistrarPelicula').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>pelicula/insert",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "La Pelicula ha sido registrado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>pelicula";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al registrar la Pelicula. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formRegistrarPelicula').validate({
            rules: {
                nombrePelicula: {
                    required: true
                },
                genero: {
                    required: true
                },
                fechaLanzamiento: {
                    required: true
                },
                descripcion: {
                    required: true
                },
            },
            messages: {
                nombrePelicula: {
                    required: "Ingresa un nombre a la pelicula"
                },
                genero: {
                    required: "Ingresa un género de pelicula"
                },
                fechaLanzamiento: {
                    required: "Ingresa la fecha de lanzamiento"
                },
                descripcion: {
                    required: "Ingresa una descripción de la pleicula"
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
                var datos = $('#formActualizarPelicula').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>pelicula/update",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "La Pelicula ha sido Actualizado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>pelicula";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al Actualizar la Pelicula. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formActualizarPelicula').validate({
            rules: {
                nombrePeliculaActualizar: {
                    required: true
                },
                generoPeliculaActualizar: {
                    required: true
                },
                fechaPeliculaActualizar: {
                    required: true
                },
                descripcionPelciulaActualizar: {
                    required: true
                }
            },
            messages: {
                nombreActualizar: {
                    required: "Ingresa un nombre a la pelicula"
                },
                generoPeliculaActualizar: {
                    required: "Ingresa un género de pelicula"
                },
                fechaPeliculaActualizar: {
                    required: "Ingresa la fecha de lanzamiento"
                },
                descripcionPelciulaActualizar: {
                    required: "Ingresa una descripción de la pleicula"
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
        $( "#formEliminarPelicula" ).submit(function( event ) {
            event.preventDefault();
            var datos = $('#formEliminarPelicula').serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo constant('URL');?>pelicula/delete",
                data: datos,
                success: function (data) {
                    if (data == 'ok') {
                        Swal.fire(
                            "¡Éxito!",
                            "La pelicula ha sido eliminado correctamente",
                            "success"
                        ).then(function () {
                            window.location = "<?php echo constant('URL');?>pelicula";
                        })
                    } else {
                        Swal.fire (
                            "¡Error!",
                            "Ha ocurrido un error al eliminar la pelicula. " + data,
                            "error"
                        );
                    }
                },
            });
        });
    }

    /*var dataTableFunction = function () {
        var table = $("#dataTableAlumno").DataTable({
            responsive: true,
            language: idiomaDataTable,
            lengthChange: true,
            buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
            dom: 'Bfltip'
        });

        table.buttons().container().appendTo('#dataTableAlumno_wrapper .col-md-6:eq(0)');
    }*/
</script>
