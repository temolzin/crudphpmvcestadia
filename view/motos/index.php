<?php
    require 'view/menu.php';
    $menu = new Menu();
    $menu->header('motos');
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-right">
                <button class="btn btn-success" data-toggle='modal' data-target='#modalRegistrarMotos'> <i class="fas fa-plus-circle"></i> Registrar Motos </button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabla Motos</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTableMotos" name="dataTableMotos" class="table table-bordered table-hover dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                    <th>CC</th>
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
<div class="modal fade" id="modalRegistrarMotos" tabindex="-1" role="dialog" aria-labelledby="modalRegistrarMotos" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-success">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Motos <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->

                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formRegistrarMotos" name="formRegistrarMotos" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Marca (*)</label>
                                    <input type="text" class="form-control" id="marca" name="marca" placeholder="Marca"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Modelo (*)</label>
                                    <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Modelo"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>CC (*)</label>
                                    <input type="number" class="form-control" id="cc" name="cc" placeholder="CC"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="number" class="form-control" id="precio" name="precio" placeholder="Precio"/>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">Registrar motocicleta</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--------------------------------------------------------- Modal Actualizar----------------------------------------------->
<div class="modal fade" id="modalActualizarMotos" tabindex="-1" role="dialog" aria-labelledby="modalActualizarMotos" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-warning">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Motos <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formActualizarMotos" name="formActualizarMotos">
                    <div class="card-body">
                        <div style="display: none;" class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>id_Moto (*)</label>
                                    <input type="text" class="form-control" id="idMotosActualizar" name="idMotosActualizar" placeholder="id_Moto"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Marca (*)</label>
                                    <input type="text" class="form-control" id="marcaMotosActualizar" name="marcaMotosActualizar" placeholder="Marca"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Modelo (*)</label>
                                    <input type="text" class="form-control" id="modeloMotosActualizar" name="modeloMotosActualizar" placeholder="Modelo"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>CC (*)</label>
                                    <input type="number" class="form-control" id="ccMotosActualizar" name="ccMotosActualizar" placeholder="CC"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="text" class="form-control" id="precioMotosActualizar" name="precioMotosActualizar" placeholder="Precio"/>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-warning">Actualizar motocicleta</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--------------------------------------------------------- Modal DetalleAlumno----------------------------------------------->
<div class="modal fade" id="modalDetalleMotos" tabindex="-1" role="dialog" aria-labelledby="modalDetalleMotos" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-primary">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Motos <small> &nbsp;(*) Campos requeridos</small></h4>
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
                                    <label>Id_Moto (*)</label>
                                    <input disabled type="text" class="form-control" id="idMotosConsultar" name="idMotosConsultar" placeholder="Id_Moto"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Marca (*)</label>
                                    <input type="text" disabled class="form-control" id="marcaMotosConsultar" name="marcaMotosConsultar" placeholder="Marca"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Modelo (*)</label>
                                    <input type="text" disabled class="form-control" id="modeloMotosConsultar" name="modeloMotosConsultar" placeholder="Modelo"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>CC (*)</label>
                                    <input type="number" disabled class="form-control" id="ccMotosConsultar" name="ccMotosConsultar" placeholder="CC"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="text" disabled class="form-control" id="precioMotosConsultar" name="precioMotosConsultar" placeholder="Precio"/>
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
<div class="modal fade" id="modalEliminarMotos" tabindex="-1" role="dialog" aria-labelledby="modalEliminarMotos" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form role="form" id="formEliminarMotos" name="formActualizarMotos">
                <input type="text" hidden id="idEliminarMotos" name="idEliminarMotos">
                <div class="modal-body text-center text-danger">¿Realmente deseas eliminar esta motocicleta?</div>
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
        mostrarMotos();
        enviarFormularioRegistrar();
        enviarFormularioActualizar();
        eliminarRegistro();
    });

    var mostrarMotos = function() {
        var tableMotos = $('#dataTableMotos').DataTable({
            "processing": true,
            "ajax": {
                "url": "<?php echo constant('URL');?>motos/read"
            },
            "columns": [
                { "data": "id_moto" },
                { "data": "marca" },
                { "data": "modelo" },
                { "data": "cc" },
                { "data": "precio" },
                {data: null,
                    "defaultContent":
                        `<button class='consulta btn btn-primary' data-toggle='modal' data-target='#modalDetalleMotos' title="Ver Detalles"><i class="fa fa-eye"></i></button>
                         <button class='editar btn btn-warning' data-toggle='modal' data-target='#modalActualizarMotos' title="Editar Datos"><i class="fa fa-edit"></i></button>
                         <button class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminarMotos' title="Eliminar Registro"><i class="far fa-trash-alt"></i></button>`
                }
            ],
            responsive: true,
            autoWidth: false,
            language: idiomaDataTable,
            lengthChange: true,
            buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
            dom: 'Bfltip'
        });
        obtenerdatosDT(tableMotos);
    }

    var obtenerdatosDT = function (table) { 
        $('#dataTableMotos tbody').on('click', 'tr', function() {
            var data = table.row(this).data();
            var idEliminar = $('#idEliminarMotos').val(data.id_moto);

            var idActualizar = $("#idMotosActualizar").val(data.id_moto);
            var marcaMotosActualizar = $("#marcaMotosActualizar").val(data.marca);
            var modeloMotosActualizar = $("#modeloMotosActualizar").val(data.modelo);
            var ccMotosActualizar = $("#ccMotosActualizar").val(data.cc);
            var precioMotosActualizar = $("#precioMotosActualizar").val(data.precio);

            var idConsulta = $("#idMotosConsultar").val(data.id_moto);
            var marcaConsulta = $("#marcaMotosConsultar").val(data.marca);
            var modeloConsulta = $("#modeloMotosConsultar").val(data.modelo);
            var ccConsulta = $("#ccMotosConsultar").val(data.cc);
            var precioConsulta = $("#precioMotosConsultar").val(data.precio);
        });
    }
    
    var enviarFormularioRegistrar = function () {
        $.validator.setDefaults({
            submitHandler: function () {
                var datos = $('#formRegistrarMotos').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>motos/insert",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "La Motocicleta ha sido registrado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>motos";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al registrar la Motocicleta. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formRegistrarMotos').validate({
            rules: {
                marca: {
                    required: true
                },
                modelo: {
                    required: true
                },
                cc: {
                    required: true
                },
                precio: {
                    required: true
                },
            },
            messages: {
                marca: {
                    required: "Ingresa la marca de la motocicleta"
                },
                modelo: {
                    required: "Ingresa el modelo de la motocicleta"
                },
                cc: {
                    required: "Ingresa la cilindrada de la motocicleta"
                },
                precio: {
                    required: "Ingresa el precio de la motocicleta"
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
                var datos = $('#formActualizarMotos').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>motos/update",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "La Motocicleta ha sido Actualizado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>motos";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al Actualizar la Motocicleta. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formActualizarMotos').validate({
            rules: {
                marcaMotosActualizar: {
                    required: true
                },
                modeloMotosActualizar: {
                    required: true
                },
                ccMotosActualizar: {
                    required: true
                },
                precioMotosActualizar: {
                    required: true
                }
            },
            messages: {
                marcaActualizar: {
                    required: "Ingresa la marca de la motocicleta"
                },
                modeloMotosActualizar: {
                    required: "Ingresa el modelo de la motocicleta"
                },
                ccMotosActualizar: {
                    required: "Ingresa la cilindrada de la motocicleta"
                },
                precioMotosActualizar: {
                    required: "Ingresa el precio de la motocicleta"
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
        $( "#formEliminarMotos" ).submit(function( event ) {
            event.preventDefault();
            var datos = $('#formEliminarMotos').serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo constant('URL');?>motos/delete",
                data: datos,
                success: function (data) {
                    if (data == 'ok') {
                        Swal.fire(
                            "¡Éxito!",
                            "La motocicleta ha sido eliminado correctamente",
                            "success"
                        ).then(function () {
                            window.location = "<?php echo constant('URL');?>motos";
                        })
                    } else {
                        Swal.fire (
                            "¡Error!",
                            "Ha ocurrido un error al eliminar la motocicletas. " + data,
                            "error"
                        );
                    }
                },
            });
        });
    }
</script>
