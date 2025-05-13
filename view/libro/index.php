<?php
    require 'view/menu.php';
    $menu = new Menu();
    $menu->header('libro');
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-right">
                <button class="btn btn-success" data-toggle='modal' data-target='#modalRegistrarlibro'> <i class="fas fa-plus-circle"></i> Registrar Libro </button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabla Libros</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTablelibro" name="dataTablelibro" class="table table-bordered table-hover dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Titulo</th>
                                    <th>Autor</th>
                                    <th>Genero</th>
                                    <th>Editorial</th>
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
<div class="modal fade" id="modalRegistrarlibro" tabindex="-1" role="dialog" aria-labelledby="modalRegistrarlibro" aria-hidden="true">
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
                <form role="form" id="formRegistrarlibro" name="formRegistrarlibro" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Titulo (*)</label>
                                    <input type="text" class="form-control" id="titulolibro" name="titulolibro" placeholder="Titulo"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Autor (*)</label>
                                    <input type="text" class="form-control" id="autor" name="autor" placeholder="Autor"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Genero (*)</label>
                                    <input type="text" class="form-control" id="genero" name="genero" placeholder="Genero"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Editorial (*)</label>
                                    <input type="text" class="form-control" id="editorial" name="editorial" placeholder="Editorial"/>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">Registrar Libro</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--------------------------------------------------------- Modal Actualizar----------------------------------------------->
<div class="modal fade" id="modalActualizarlibro" tabindex="-1" role="dialog" aria-labelledby="modalActualizarlibro" aria-hidden="true">
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
                <form role="form" id="formActualizarlibro" name="formActualizarlibro">
                    <div class="card-body">
                        <div style="display: none;" class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Idlibro (*)</label>
                                    <input type="text" class="form-control" id="idlibroActualizar" name="idlibroActualizar" placeholder="Idlibro"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Titulo (*)</label>
                                    <input type="text" class="form-control" id="titulolibroActualizar" name="titulolibroActualizar" placeholder="Titulo libro"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Autor (*)</label>
                                    <input type="text" class="form-control" id="autorlibroActualizar" name="autorlibroActualizar" placeholder="Autor"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Genero (*)</label>
                                    <input type="text" class="form-control" id="generolibroActualizar" name="generolibroActualizar" placeholder="Genero"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Editorial (*)</label>
                                    <input type="text" class="form-control" id="editoriallibroActualizar" name="editoriallibroActualizar" placeholder="Editorial"/>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-warning">Actualizar Libro</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--------------------------------------------------------- Modal Detallelibro----------------------------------------------->
<div class="modal fade" id="modalDetallelibro" tabindex="-1" role="dialog" aria-labelledby="modalDetallelibro" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-primary">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">libro <small> &nbsp;(*) Campos requeridos</small></h4>
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
                                    <label>Idlibro (*)</label>
                                    <input disabled type="text" class="form-control" id="idlibroConsultar" name="idlibroConsultar" placeholder="Idlibro"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Titulo (*)</label>
                                    <input type="text" disabled class="form-control" id="titulolibroConsultar" name="titulolibroConsultar" placeholder="titulo libro"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Autor (*)</label>
                                    <input type="text" disabled class="form-control" id="autorlibroConsultar" name="autorlibroConsultar" placeholder="autor"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Genero (*)</label>
                                    <input type="text" disabled class="form-control" id="generolibroConsultar" name="generolibroConsultar" placeholder="genero"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Editorial (*)</label>
                                    <input type="text" disabled class="form-control" id="editoriallibroConsultar" name="editoriallibroConsultar" placeholder="editorial"/>
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
<div class="modal fade" id="modalEliminarlibro" tabindex="-1" role="dialog" aria-labelledby="modalEliminarlibro" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form role="form" id="formEliminarlibro" name="formActualizarlibro">
                <input type="text" hidden id="idEliminarlibro" name="idEliminarlibro">
                <div class="modal-body text-center text-danger">¿Realmente deseas eliminar este libro?</div>
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
        mostrarlibros();
        enviarFormularioRegistrar();
        enviarFormularioActualizar();
        eliminarRegistro();
    });

    var mostrarlibros = function() {
        var tablelibro = $('#dataTablelibro').DataTable({
            "processing": true,
            "ajax": {
                "url": "<?php echo constant('URL');?>libro/read"
            },
            "columns": [
                { "data": "libro_id" },
                { "data": "libro_titulo" },
                { "data": "libro_autor" },
                { "data": "libro_genero" },
                { "data": "libro_editorial" },
                {data: null,
                    "defaultContent":
                        `<button class='consulta btn btn-primary' data-toggle='modal' data-target='#modalDetallelibro' title="Ver Detalles"><i class="fa fa-eye"></i></button>
                         <button class='editar btn btn-warning' data-toggle='modal' data-target='#modalActualizarlibro' title="Editar Datos"><i class="fa fa-edit"></i></button>
                         <button class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminarlibro' title="Eliminar Registro"><i class="far fa-trash-alt"></i></button>`
                }
            ],
            responsive: true,
            autoWidth: false,
            language: idiomaDataTable,
            lengthChange: true,
            buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
            dom: 'Bfltip'
        });
        obtenerdatosDT(tablelibro);
    }

    var obtenerdatosDT = function (table) { 
        $('#dataTablelibro tbody').on('click', 'tr', function() {
            var data = table.row(this).data();
            var idEliminar = $('#idEliminarlibro').val(data.libro_id);

            var idActualizar = $("#idlibroActualizar").val(data.libro_id);
            var titulolibroActualizar = $("#titulolibroActualizar").val(data.libro_titulo);
            var autorlibroActualizar = $("#autorlibroActualizar").val(data.libro_autor);
            var generolibroActualizar = $("#generolibroActualizar").val(data.libro_genero);
            var editoriallibroActualizar = $("#editoriallibroActualizar").val(data.libro_editorial);

            var idConsulta = $("#idlibroConsultar").val(data.libro_id);
            var tituloConsulta = $("#titulolibroConsultar").val(data.libro_titulo);
            var autorConsulta = $("#autorlibroConsultar").val(data.libro_autor);
            var generoConsulta = $("#generolibroConsultar").val(data.libro_genero);
            var editorialConsulta = $("#editoriallibroConsultar").val(data.libro_editorial);
        });
    }
    
    var enviarFormularioRegistrar = function () {
        $.validator.setDefaults({
            submitHandler: function () {
                var datos = $('#formRegistrarlibro').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>libro/insert",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "La libro ha sido registrado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>libro";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al registrar la libro. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formRegistrarlibro').validate({
            rules: {
                titulolibro: {
                    required: true
                },
                autor: {
                    required: true
                },
                genero: {
                    required: true
                },
                editorial: {
                    required: true
                },
            },
            messages: {
                titulolibro: {
                    required: "Ingresa el titulo del libro"
                },
                autor: {
                    required: "Ingresa el autor del libro"
                },
                genero: {
                    required: "Ingresa el genero del libro"
                },
                editorial: {
                    required: "Ingresa la editorial del libro"
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
                var datos = $('#formActualizarlibro').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>libro/update",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "El libro ha sido actualizado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>libro";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al Actualizar el libro. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formActualizarlibro').validate({
            rules: {
                titulolibroActualizar: {
                    required: true
                },
                autorlibroActualizar: {
                    required: true
                },
                generolibroActualizar: {
                    required: true
                },
                editoriallibroActualizar: {
                    required: true
                }
            },
            messages: {
                tituloActualizar: {
                    required: "Ingresa el titulo del libro"
                },
                autorlibroActualizar: {
                    required: "Ingresa el autor del libro"
                },
                generolibroActualizar: {
                    required: "Ingresa el genero del libro"
                },
                editoriallibroActualizar: {
                    required: "Ingresa la editorial del libro"
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
        $( "#formEliminarlibro" ).submit(function( event ) {
            event.preventDefault();
            var datos = $('#formEliminarlibro').serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo constant('URL');?>libro/delete",
                data: datos,
                success: function (data) {
                    if (data == 'ok') {
                        Swal.fire(
                            "¡Éxito!",
                            "El libro ha sido eliminado correctamente",
                            "success"
                        ).then(function () {
                            window.location = "<?php echo constant('URL');?>libro";
                        })
                    } else {
                        Swal.fire (
                            "¡Error!",
                            "Ha ocurrido un error al eliminar El libro. " + data,
                            "error"
                        );
                    }
                },
            });
        });
    }
</script>
