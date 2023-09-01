<?php
    require 'view/menu.php';
    $menu = new Menu();
    $menu->header('Auto');
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-right">
                <button class="btn btn-success" data-toggle='modal' data-target='#modalRegistrarAuto'> <i class="fas fa-plus-circle"></i> Registrar Auto </button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabla Auto</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTableAuto" name="dataTableAuto" class="table table-bordered table-hover dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                    <th>Color</th>
                                    <th>Año</th>
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
<div class="modal fade" id="modalRegistrarAuto" tabindex="-1" role="dialog" aria-labelledby="modalRegistrarAuto" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-success">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Auto <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->

                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formRegistrarAuto" name="formRegistrarAuto" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Marca (*)</label>
                                    <input type="text" class="form-control" id="marcaAuto" name="marcaAuto" placeholder="Marca"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Modelo (*)</label>
                                    <input type="text" class="form-control" id="modeloAuto" name="modeloAuto" placeholder="Modelo"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Color (*)</label>
                                    <input type="text" class="form-control" id="colorAuto" name="colorAuto" placeholder="Color"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Año (*)</label>
                                    <input type="text" class="form-control" id="anioAuto" name="anioAuto" placeholder="Año"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="text" class="form-control" id="precioAuto" name="precioAuto" placeholder="$Precio"/>
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
<div class="modal fade" id="modalActualizarAuto" tabindex="-1" role="dialog" aria-labelledby="modalActualizarAuto" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-warning">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Auto <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formActualizarAuto" name="formActualizarAuto">
                    <div class="card-body">
                        <div class="row">
                        <div class="col-lg-6">
                                <div class="form-group">
                                    <label>ID (*)</label>
                                    <input type="text" class="form-control" id="idAutoActualizar" name="idAutoActualizar" placeholder="ID"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Marca (*)</label>
                                    <input type="text" class="form-control" id="marcaAutoActualizar" name="marcaAutoActualizar" placeholder="Marca"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Modelo (*)</label>
                                    <input type="text" class="form-control" id="modeloAutoActualizar" name="modeloAutoActualizar" placeholder="Modelo"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Color (*)</label>
                                    <input type="text" class="form-control" id="colorAutoActualizar" name="colorAutoActualizar" placeholder="Color"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Año (*)</label>
                                    <input type="text" class="form-control" id="anioAutoActualizar" name="anioAutoActualizar" placeholder="Año"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="text" class="form-control" id="precioAutoActualizar" name="precioAutoActualizar" placeholder="Precio"/>
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

<!--------------------------------------------------------- Modal DetalleAuto----------------------------------------------->
<div class="modal fade" id="modalDetalleAuto" tabindex="-1" role="dialog" aria-labelledby="modalDetalleAuto" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-primary">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Auto <small> &nbsp;(*) Campos requeridos</small></h4>
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
                                    <label>ID (*)</label>
                                    <input disabled type="text" class="form-control" id="idAutoConsultar" name="idAutoConsultar" placeholder="ID"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Marca (*)</label>
                                    <input type="text" disabled class="form-control" id="marcaAutoConsultar" name="marcaAutoConsultar" placeholder="Marca"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Modelo (*)</label>
                                    <input type="text" disabled class="form-control" id="modeloAutoConsultar" name="modeloAutoConsultar" placeholder="Modelo"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Color (*)</label>
                                    <input type="text" disabled class="form-control" id="colorAutoConsultar" name="colorAutoConsultar" placeholder="Color"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Año (*)</label>
                                    <input type="text" disabled class="form-control" id="anioAutoConsultart" name="anioAutoConsultar" placeholder="Año"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input type="text" disabled class="form-control" id="precioAutoConsultar" name="precioAutoConsultar" placeholder="Precio"/>
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

<!-- ****************************** Modal Eliminar Auto *************************************************-->
<div class="modal fade" id="modalEliminarAuto" tabindex="-1" role="dialog" aria-labelledby="modalEliminarAuto" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form role="form" id="formEliminarAuto" name="formActualizarAuto">
                <input type="text" hidden id="idEliminarAuto" name="idEliminarAuto">
                <div class="modal-body text-center text-danger">¿Realmente deseas eliminar este Auto?</div>
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
        mostrarAutos();
        enviarFormularioRegistrar();
        enviarFormularioActualizar();
        eliminarRegistro();
    });

    var mostrarAutos = function() {
        var tableAuto = $('#dataTableAuto').DataTable({
            "processing": true,
            "ajax": {
                "url": "<?php echo constant('URL');?>auto/read"
            },
            "columns": [
                { "data": "id_auto" },
                { "data": "marca_auto" },
                { "data": "modelo_auto" },
                { "data": "anio_auto" },
                { "data": "color_auto" },
                { "data": "precio_auto" },
                {data:null,
                    "defaultContent":
                        `<button class='consulta btn btn-primary' data-toggle='modal' data-target='#modalDetalleAuto' title="Ver Detalles"><i class="fa fa-eye"></i></button>
                         <button class='editar btn btn-warning' data-toggle='modal' data-target='#modalActualizarAuto' title="Editar Datos"><i class="fa fa-edit"></i></button>
                         <button class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminarAuto' title="Eliminar Registro"><i class="far fa-trash-alt"></i></button>`
                }
            ],
            responsive: true,
            autoWidth: false,
            language: idiomaDataTable,
            lengthChange: true,
            buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
            dom: 'Bfltip'
        });
        obtenerdatosDT(tableAuto);
    }


var obtenerdatosDT = function (table) {
        $('#dataTableAuto tbody').on('click', 'tr', function() {
            var data = table.row(this).data();
            var idEliminar = $('#idEliminarAuto').val(data.id_auto);

            var idActualizar = $("#idAutoActualizar").val(data.id_auto);
            var marcaAutoActualizar = $("#marcaAutoActualizar").val(data.marca_auto);
            var modelo = $("#modeloAutoActualizar").val(data.modelo_auto);
            var color = $("#colorAutoActualizar").val(data.color_auto);
            var anio = $("#anioAutoActualizar").val(data.anio_auto);
            var precio = $("#precioAutoActualizar").val(data.precio_auto);

            var idConsulta = $("#idAutoConsultar").val(data.id_auto);
            var marcaConsulta = $("#marcaAutoConsultar").val(data.marca_auto);
            var modelo = $("#modeloAutoConsultar").val(data.modelo_auto);
            var color = $("#colorAutoConsultar").val(data.color_auto);
            var anio = $("#anioAutoConsultar").val(data.anio_auto);
            var precio = $("#precioAutoConsultar").val(data.precio_auto);
        });
    }

    var enviarFormularioRegistrar = function () {
        $.validator.setDefaults({
            submitHandler: function () {
                var datos = $('#formRegistrarAuto').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>auto/insert",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "El Auto ha sido registrado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>auto";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al registrar el Auto. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formRegistrarAuto').validate({
            rules: {
                marcaAuto: {
                    required: true
                },
                modeloAuto: {
                    required: true
                },
                colorAuto: {
                    required: true
                },
                anioAuto: {
                    required: true
                },
                precioAuto: {
                    required: true
                }
            },
            messages: {
                marcaAuto: {
                    required: "Ingresa la marca del auto"
                },
                modeloAuto: {
                    required: "Ingresa el modelo del auto"
                },
                colorAuto: {
                    required: "Ingresa el color del auto"
                },
                anioAuto: {
                    required: "Ingresa el año del auto"
                },
                precioAuto: {
                    required: "Ingresa el precio del auto"
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
                var datos = $('#formActualizarAuto').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>auto/update",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "El Auto ha sido Actualizado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>auto";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al Actualizar el Auto. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });

    $('#formActualizarAuto').validate({
        rules: {
            marcaAutoActualizar: {
                required: true
            },
            modeloAutoActualizar: {
                required: true
            },
            colorAutoActualizar: {
                required: true
            },
            anioAutoActualizar: {
                required: true
            },
            precioAutoActualizar: {
                required: true
            }
        },
        messages: {
            marcaAutoActualizar: {
                required: "Ingresa la marca del auto"
            },
            modeloAutoActualizar: {
                required: "Ingresa el modelo del auto"
            },
            colorAutoActualizar: {
                required: "Ingresa el color del auto"
            },
            anioAutoActualizar: {
                required: "Ingresa el año del auto"
            },
            precioAutoActualizar: {
                required: "Ingresa el precio del auto"
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
        $( "#formEliminarAuto" ).submit(function( event ) {
            event.preventDefault();
            var datos = $('#formEliminarAuto').serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo constant('URL');?>auto/delete",
                data: datos,
                success: function (data) {
                    if (data == 'ok') {
                        Swal.fire(
                            "¡Éxito!",
                            "El Auto ha sido eliminado correctamente",
                            "success"
                        ).then(function () {
                            window.location = "<?php echo constant('URL');?>auto";
                        })
                    } else {
                        Swal.fire (
                            "¡Error!",
                            "Ha ocurrido un error al eliminar la Auto. " + data,
                            "error"
                        );
                    }
                },
            });
        });
    }

</script>
