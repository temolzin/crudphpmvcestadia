<?php
    require 'view/menu.php';
    $menu = new Menu();
    $menu->header('gato');
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-right">
                <button class="btn btn-success" data-toggle='modal' data-target='#modalRegistrargato'> <i class="fas fa-plus-circle"></i> Registrar Gato </button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabla Gato</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTablegato" name="dataTablegato" class="table table-bordered table-hover dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Peso kg</th>
                                    <th>Altura</th>
                                    <th>Color</th>
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
<div class="modal fade" id="modalRegistrargato" tabindex="-1" role="dialog" aria-labelledby="modalRegistrargato" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-success">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Gato <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->

                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formRegistrargato" name="formRegistrargato" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" class="form-control" id="nombregato" name="nombregato" placeholder="Nombre"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Peso kg (*)</label>
                                    <input type="text" class="form-control" id="peso" name="peso" placeholder="Peso kg"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Altura cm (*)</label>
                                    <input type="text" class="form-control" id="altura" name="altura" placeholder="Altura cm"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Color (*)</label>
                                    <input type="text" class="form-control" id="color" name="color" placeholder="Color"/>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">Registrar Gato</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--------------------------------------------------------- Modal Actualizar----------------------------------------------->
<div class="modal fade" id="modalActualizargato" tabindex="-1" role="dialog" aria-labelledby="modalActualizargato" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-warning">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Gato <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formActualizargato" name="formActualizargato">
                    <div class="card-body">
                        <div style="display: none;" class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>idgato (*)</label>
                                    <input type="text" class="form-control" id="idgatoActualizar" name="idgatoActualizar" placeholder="idgato"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" class="form-control" id="nombregatoActualizar" name="nombregatoActualizar" placeholder="Nombre gato"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Peso kg (*)</label>
                                    <input type="text" class="form-control" id="pesogatoActualizar" name="pesogatoActualizar" placeholder="Peso kg"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Altura cm (*)</label>
                                    <input type="text" class="form-control" id="alturagatoActualizar" name="alturagatoActualizar" placeholder="Altura cm"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Color (*)</label>
                                    <input type="text" class="form-control" id="colorgatoActualizar" name="colorgatoActualizar" placeholder="Color"/>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-warning">Actualizar Gato</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--------------------------------------------------------- Modal Detallegato----------------------------------------------->
<div class="modal fade" id="modalDetallegato" tabindex="-1" role="dialog" aria-labelledby="modalDetallegato" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-primary">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Gato <small> &nbsp;(*) Campos requeridos</small></h4>
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
                                    <label>Idgato (*)</label>
                                    <input disabled type="text" class="form-control" id="idgatoConsultar" name="idgatoConsultar" placeholder="Idgato"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" disabled class="form-control" id="nombregatoConsultar" name="nombregatoConsultar" placeholder="Nombre gato"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Peso kg (*)</label>
                                    <input type="text" disabled class="form-control" id="pesogatoConsultar" name="pesogatoConsultar" placeholder="Peso kg"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Altura cm (*)</label>
                                    <input type="text" disabled class="form-control" id="alturagatoConsultar" name="alturagatoConsultar" placeholder="Altura cm"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Color (*)</label>
                                    <input type="text" disabled class="form-control" id="colorgatoConsultar" name="colorgatoConsultar" placeholder="Color"/>
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
<div class="modal fade" id="modalEliminargato" tabindex="-1" role="dialog" aria-labelledby="modalEliminargato" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <form role="form" id="formEliminargato" name="formActualizargato">
                <input type="text" hidden id="idEliminargato" name="idEliminargato">
                <div class="modal-body text-center text-danger">¿Realmente deseas eliminar esta gato?</div>
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
        mostrargatos();
        enviarFormularioRegistrar();
        enviarFormularioActualizar();
        eliminarRegistro();
    });

    var mostrargatos = function() {
        var tablegato = $('#dataTablegato').DataTable({
            "processing": true,
            "ajax": {
                "url": "<?php echo constant('URL');?>gato/read"
            },
            "columns": [
                { "data": "gato_id" },
                { "data": "gato_nombre" },
                { "data": "gato_peso" },
                { "data": "gato_altura" },
                { "data": "gato_color" },
                {data: null,
                    "defaultContent":
                        `<button class='consulta btn btn-primary' data-toggle='modal' data-target='#modalDetallegato' title="Ver Detalles"><i class="fa fa-eye"></i></button>
                         <button class='editar btn btn-warning' data-toggle='modal' data-target='#modalActualizargato' title="Editar Datos"><i class="fa fa-edit"></i></button>
                         <button class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminargato' title="Eliminar Registro"><i class="far fa-trash-alt"></i></button>`
                }
            ],
            responsive: true,
            autoWidth: false,
            language: idiomaDataTable,
            lengthChange: true,
            buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
            dom: 'Bfltip'
        });
        obtenerdatosDT(tablegato);
    }

    var obtenerdatosDT = function (table) { 
        $('#dataTablegato tbody').on('click', 'tr', function() {
            var data = table.row(this).data();
            var idEliminar = $('#idEliminargato').val(data.gato_id);

            var idActualizar = $("#idgatoActualizar").val(data.gato_id);
            var nombregatoActualizar = $("#nombregatoActualizar").val(data.gato_nombre);
            var pesogatoActualizar = $("#pesogatoActualizar").val(data.gato_peso);
            var alturagatoActualizar = $("#alturagatoActualizar").val(data.gato_altura);
            var colorgatoActualizar = $("#colorgatoActualizar").val(data.gato_color);

            var idConsulta = $("#idgatoConsultar").val(data.gato_id);
            var nombreConsulta = $("#nombregatoConsultar").val(data.gato_nombre);
            var pesoConsulta = $("#pesogatoConsultar").val(data.gato_peso);
            var alturaConsulta = $("#alturagatoConsultar").val(data.gato_altura);
            var colorConsulta = $("#colorgatoConsultar").val(data.gato_color);
        });
    }
    
    var enviarFormularioRegistrar = function () {
        $.validator.setDefaults({
            submitHandler: function () {
                var datos = $('#formRegistrargato').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>gato/insert",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "El gato ha sido registrado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>gato";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al registrar la gato. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formRegistrargato').validate({
            rules: {
                nombregato: {
                    required: true
                },
                peso: {
                    required: true
                },
                altura: {
                    required: true
                },
                color: {
                    required: true
                },
            },
            messages: {
                nombregato: {
                    required: "Ingresa el nombre de la gato"
                },
                peso: {
                    required: "Ingresa el peso de la gato"
                },
                altura: {
                    required: "Ingresa la altura de la gato"
                },
                color: {
                    required: "Ingresa la color de la gato"
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
                var datos = $('#formActualizargato').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>gato/update",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "El gato ha sido Actualizado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>gato";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al Actualizar la gato. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formActualizargato').validate({
            rules: {
                nombregatoActualizar: {
                    required: true
                },
                pesogatoActualizar: {
                    required: true
                },
                alturagatoActualizar: {
                    required: true
                },
                colorgatoActualizar: {
                    required: true
                }
            },
            messages: {
                nombreActualizar: {
                    required: "Ingresa el nombre de la gato"
                },
                pesogatoActualizar: {
                    required: "Ingresa el peso de la gato"
                },
                alturagatoActualizar: {
                    required: "Ingresa la altura de la gato"
                },
                colorgatoActualizar: {
                    required: "Ingresa la color de la gato"
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
        $( "#formEliminargato" ).submit(function( event ) {
            event.preventDefault();
            var datos = $('#formEliminargato').serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo constant('URL');?>gato/delete",
                data: datos,
                success: function (data) {
                    if (data == 'ok') {
                        Swal.fire(
                            "¡Éxito!",
                            "El gato ha sido eliminado correctamente",
                            "success"
                        ).then(function () {
                            window.location = "<?php echo constant('URL');?>gato";
                        })
                    } else {
                        Swal.fire (
                            "¡Error!",
                            "Ha ocurrido un error al eliminar la gato. " + data,
                            "error"
                        );
                    }
                },
            });
        });
    }
</script>
