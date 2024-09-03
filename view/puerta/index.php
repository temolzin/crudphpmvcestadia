<?php
    require 'view/menu.php';
    $menu = new Menu();
    $menu->header('puerta');
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-right">
                <button class="btn btn-success" data-toggle='modal' data-target='#modalRegistrarpuerta'> <i class="fas fa-plus-circle"></i> Registrar Puerta </button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabla puertas</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTablepuerta" name="dataTablepuerta" class="table table-bordered table-hover dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>material</th>
                                    <th>precio</th>
                                    <th>altura</th>
                                    <th>anchura</th>
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
<div class="modal fade" id="modalRegistrarpuerta" tabindex="-1" role="dialog" aria-labelledby="modalRegistrarpuerta" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-success">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">puerta <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->

                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formRegistrarpuerta" name="formRegistrarpuerta" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>material (*)</label>
                                    <input type="text" class="form-control" id="materialpuerta" name="materialpuerta" placeholder="material"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>precio (*)</label>
                                    <input type="text" class="form-control" id="precio" name="precio" placeholder="precio"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>altura (*)</label>
                                    <input type="text" class="form-control" id="altura" name="altura" placeholder="altura"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>anchura (*)</label>
                                    <input type="text" class="form-control" id="anchura" name="anchura" placeholder="anchura"/>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">Registrar puerta</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--------------------------------------------------------- Modal Actualizar----------------------------------------------->
<div class="modal fade" id="modalActualizarpuerta" tabindex="-1" role="dialog" aria-labelledby="modalActualizarpuerta" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-warning">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">puerta <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formActualizarpuerta" name="formActualizarpuerta">
                    <div class="card-body">
                        <div style="display: none;" class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>idpuerta (*)</label>
                                    <input type="text" class="form-control" id="idpuertaActualizar" name="idpuertaActualizar" placeholder="idpuerta"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>material (*)</label>
                                    <input type="text" class="form-control" id="materialpuertaActualizar" name="materialpuertaActualizar" placeholder="material puerta"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>precio (*)</label>
                                    <input type="text" class="form-control" id="preciopuertaActualizar" name="preciopuertaActualizar" placeholder="precio"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>altura (*)</label>
                                    <input type="text" class="form-control" id="alturapuertaActualizar" name="alturapuertaActualizar" placeholder="altura"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>anchura (*)</label>
                                    <input type="text" class="form-control" id="anchurapuertaActualizar" name="anchurapuertaActualizar" placeholder="anchura"/>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-warning">Actualizar puerta</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--------------------------------------------------------- Modal DetallePuerta----------------------------------------------->
<div class="modal fade" id="modalDetallepuerta" tabindex="-1" role="dialog" aria-labelledby="modalDetallepuerta" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-primary">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">puerta <small> &nbsp;(*) Campos requeridos</small></h4>
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
                                    <label>Idpuerta (*)</label>
                                    <input disabled type="text" class="form-control" id="idpuertaConsultar" name="idpuertaConsultar" placeholder="Idpuerta"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>material (*)</label>
                                    <input type="text" disabled class="form-control" id="materialpuertaConsultar" name="materialpuertaConsultar" placeholder="material puerta"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>precio (*)</label>
                                    <input type="text" disabled class="form-control" id="preciopuertaConsultar" name="preciopuertaConsultar" placeholder="precio"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>altura (*)</label>
                                    <input type="text" disabled class="form-control" id="alturapuertaConsultar" name="alturapuertaConsultar" placeholder="altura"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>anchura (*)</label>
                                    <input type="text" disabled class="form-control" id="anchurapuertaConsultar" name="anchurapuertaConsultar" placeholder="anchura"/>
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
<div class="modal fade" id="modalEliminarpuerta" tabindex="-1" role="dialog" aria-labelledby="modalEliminarpuerta" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form role="form" id="formEliminarpuerta" name="formActualizarpuerta">
                <input type="text" hidden id="idEliminarpuerta" name="idEliminarpuerta">
                <div class="modal-body text-center text-danger">¿Realmente deseas eliminar esta puerta?</div>
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
        mostrarpuertas();
        enviarFormularioRegistrar();
        enviarFormularioActualizar();
        eliminarRegistro();
    });

    var mostrarpuertas = function() {
        var tablepuerta = $('#dataTablepuerta').DataTable({
            "processing": true,
            "ajax": {
                "url": "<?php echo constant('URL');?>puerta/read"
            },
            "columns": [
                { "data": "puerta_id" },
                { "data": "puerta_material" },
                { "data": "puerta_precio" },
                { "data": "puerta_altura" },
                { "data": "puerta_anchura" },
                {data: null,
                    "defaultContent":
                        `<button class='consulta btn btn-primary' data-toggle='modal' data-target='#modalDetallepuerta' title="Ver Detalles"><i class="fa fa-eye"></i></button>
                         <button class='editar btn btn-warning' data-toggle='modal' data-target='#modalActualizarpuerta' title="Editar Datos"><i class="fa fa-edit"></i></button>
                         <button class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminarpuerta' title="Eliminar Registro"><i class="far fa-trash-alt"></i></button>`
                }
            ],
            responsive: true,
            autoWidth: false,
            language: idiomaDataTable,
            lengthChange: true,
            buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
            dom: 'Bfltip'
        });
        obtenerdatosDT(tablepuerta);
    }

    var obtenerdatosDT = function (table) { 
        $('#dataTablepuerta tbody').on('click', 'tr', function() {
            var data = table.row(this).data();
            var idEliminar = $('#idEliminarpuerta').val(data.puerta_id);

            var idActualizar = $("#idpuertaActualizar").val(data.puerta_id);
            var materialpuertaActualizar = $("#materialpuertaActualizar").val(data.puerta_material);
            var preciopuertaActualizar = $("#preciopuertaActualizar").val(data.puerta_precio);
            var alturapuertaActualizar = $("#alturapuertaActualizar").val(data.puerta_altura);
            var anchurapuertaActualizar = $("#anchurapuertaActualizar").val(data.puerta_anchura);

            var idConsulta = $("#idpuertaConsultar").val(data.puerta_id);
            var materialConsulta = $("#materialpuertaConsultar").val(data.puerta_material);
            var precioConsulta = $("#preciopuertaConsultar").val(data.puerta_precio);
            var alturaConsulta = $("#alturapuertaConsultar").val(data.puerta_altura);
            var anchuraConsulta = $("#anchurapuertaConsultar").val(data.puerta_anchura);
        });
    }
    
    var enviarFormularioRegistrar = function () {
        $.validator.setDefaults({
            submitHandler: function () {
                var datos = $('#formRegistrarpuerta').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>puerta/insert",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "La puerta ha sido registrado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>puerta";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al registrar la puerta. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formRegistrarpuerta').validate({
            rules: {
                materialpuerta: {
                    required: true
                },
                precio: {
                    required: true
                },
                altura: {
                    required: true
                },
                anchura: {
                    required: true
                },
            },
            messages: {
                materialpuerta: {
                    required: "Ingresa el material de la puerta"
                },
                precio: {
                    required: "Ingresa el precio de la puerta"
                },
                altura: {
                    required: "Ingresa la altura de la puerta"
                },
                anchura: {
                    required: "Ingresa la anchura de la puerta"
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
                var datos = $('#formActualizarpuerta').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>puerta/update",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "La puerta ha sido Actualizado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>puerta";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al Actualizar la puerta. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formActualizarpuerta').validate({
            rules: {
                materialpuertaActualizar: {
                    required: true
                },
                preciopuertaActualizar: {
                    required: true
                },
                alturapuertaActualizar: {
                    required: true
                },
                anchurapuertaActualizar: {
                    required: true
                }
            },
            messages: {
                materialActualizar: {
                    required: "Ingresa el material de la puerta"
                },
                preciopuertaActualizar: {
                    required: "Ingresa el precio de la puerta"
                },
                alturapuertaActualizar: {
                    required: "Ingresa la altura de la puerta"
                },
                anchurapuertaActualizar: {
                    required: "Ingresa la anchura de la puerta"
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
        $( "#formEliminarpuerta" ).submit(function( event ) {
            event.preventDefault();
            var datos = $('#formEliminarpuerta').serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo constant('URL');?>puerta/delete",
                data: datos,
                success: function (data) {
                    if (data == 'ok') {
                        Swal.fire(
                            "¡Éxito!",
                            "La puerta ha sido eliminado correctamente",
                            "success"
                        ).then(function () {
                            window.location = "<?php echo constant('URL');?>puerta";
                        })
                    } else {
                        Swal.fire (
                            "¡Error!",
                            "Ha ocurrido un error al eliminar la puerta. " + data,
                            "error"
                        );
                    }
                },
            });
        });
    }
</script>
