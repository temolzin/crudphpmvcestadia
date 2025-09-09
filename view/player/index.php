<?php
    require 'view/menu.php';
    $menu = new Menu();
    $menu->header('player');
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-right">
                <button class="btn btn-success" data-toggle='modal' data-target='#modalCreatePlayer'> <i class="fas fa-plus-circle"></i> Registrar Jugador </button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabla Jugador</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTablePlayer" name="dataTablePlayer" class="table table-bordered table-hover dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Edad</th>
                                    <th>Posición</th>
                                    <th>Número de Camiseta</th>
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
<!--------------------------------------------------------- Modal Crate----------------------------------------------->
<div class="modal fade" id="modalCreatePlayer" tabindex="-1" role="dialog" aria-labelledby="modalCreatePlayer" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-success">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Jugador <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->

                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formCreatePlayer" name="formCreatePlayer" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" class="form-control" id="firstNamePlayer" name="firstName" placeholder="Nombre"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Apellidos (*)</label>
                                    <input type="text" class="form-control" id="lastNamePlayer" name="lastName" placeholder="Apellidos"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Edad (*)</label>
                                    <input type="number" class="form-control" id="agePlayer" name="age" placeholder="Edad"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Posición (*)</label>
                                    <input type="text" class="form-control" id="positionPlayer" name="position" placeholder="Posición"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Número de Camiseta (*)</label>
                                    <input type="number" class="form-control" id="jerseyNumber" name="jerseyNumber" placeholder="Número de Camiseta"/>
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

<!--------------------------------------------------------- Modal Update----------------------------------------------->
<div class="modal fade" id="modalUpdatePlayer" tabindex="-1" role="dialog" aria-labelledby="modalUpdatePlayer" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-warning">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Jugador <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formUpdatePlayer" name="formUpdatePlayer">
                    <div class="card-body">
                        <div style="display: none;" class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Matrícula (*)</label>
                                    <input type="text" class="form-control" id="idPlayerUpdate" name="idPlayerUpdate" placeholder="Matrícula"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" class="form-control" id="firstNamePlayerUpdate" name="firstNamePlayerUpdate" placeholder="Nombre"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Apellidos (*)</label>
                                    <input type="text" class="form-control" id="lastNamePlayerUpdate" name="lastNamePlayerUpdate" placeholder="Apellidos"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Edad (*)</label>
                                    <input type="text" class="form-control" id="agePlayerUpdate" name="agePlayerUpdate" placeholder="Edad"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Posición (*)</label>
                                    <input type="text" class="form-control" id="positionPlayerUpdate" name="positionPlayerUpdate" placeholder="Posición"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Numero de Camiseta (*)</label>
                                    <input type="text" class="form-control" id="jerseyNumberPlayerUpdate" name="jerseyNumberPlayerUpdate" placeholder="Numero de Camiseta"/>
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

<!--------------------------------------------------------- Modal read Player----------------------------------------------->
<div class="modal fade" id="modalReadPlayer" tabindex="-1" role="dialog" aria-labelledby="modalReadPlayer" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-primary">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Jugador <small> &nbsp;(*) Campos requeridos</small></h4>
                        <button type="button" class="close  d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!---->
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" id="formRead" name="formRead">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" disabled class="form-control" id="firstNamePlayerRead" name="firstNamePlayerRead" placeholder="Nombre"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Apellidos (*)</label>
                                    <input type="text" disabled class="form-control" id="lastNamePlayerRead" name="lastNamePlayerRead" placeholder="Apellidos"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Edad (*)</label>
                                    <input type="text" disabled class="form-control" id="agePlayerRead" name="agePlayerRead" placeholder="Edad"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Posición (*)</label>
                                    <input type="text" disabled class="form-control" id="positionPlayerRead" name="positionPlayerRead" placeholder="Posición"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Número de Camiseta (*)</label>
                                    <input type="text" disabled class="form-control" id="jerseyNumberPlayerRead" name="jerseyNumberPlayerRead" placeholder="Número de Camiseta"/>
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

<!-- ****************************** Modal Delete Player *************************************************-->
<div class="modal fade" id="modalDeletePlayer" tabindex="-1" role="dialog" aria-labelledby="modalDeletePlayer" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form role="form" id="formDeletePlayer" name="formUpdatePlayer">
                <input type="text" hidden id="idDeletePlayer" name="idDeletePlayer">
                <div class="modal-body text-center text-danger">¿Realmente deseas eliminar este Jugador?</div>
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
        showPlayers();
        sendFormRegister();
        sendFormUpdate();
        deleteRegister();
    });

    var showPlayers = function() {
        var tablePlayer = $('#dataTablePlayer').DataTable({
            "processing": true,
            "ajax": {
                "url": "<?php echo constant('URL');?>player/read"
            },
            "columns": [
                { "data": "idPlayer" },
                { "data": "firstNamePlayer" },
                { "data": "lastNamePlayer" },
                { "data": "agePlayer" },
                { "data": "positionPlayer" },
                { "data": "jerseyNumberPlayer" },
                {data:null,
                    "defaultContent":
                        `<button class='consulta btn btn-primary' data-toggle='modal' data-target='#modalReadPlayer' title="Ver Detalles"><i class="fa fa-eye"></i></button>
                         <button class='editar btn btn-warning' data-toggle='modal' data-target='#modalUpdatePlayer' title="Editar Datos"><i class="fa fa-edit"></i></button>
                         <button class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalDeletePlayer' title="Eliminar Registro"><i class="far fa-trash-alt"></i></button>`
                }
            ],
            responsive: true,
            autoWidth: false,
            language: idiomaDataTable,
            lengthChange: true,
            buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
            dom: 'Bfltip'
        });
        obtenerdatosDT(tablePlayer);
    }

    var obtenerdatosDT = function (table) {
        $('#dataTablePlayer tbody').on('click', 'tr', function() {
            var data = table.row(this).data();
            var idDelete = $('#idDeletePlayer').val(data.idPlayer);

            var idUpdate = $("#idPlayerUpdate").val(data.idPlayer);
            var firstNamePlayerUpdate = $("#firstNamePlayerUpdate").val(data.firstNamePlayer);
            var lastNamePlayerUpdate = $("#lastNamePlayerUpdate").val(data.lastNamePlayer);
            var agePlayerUpdate = $("#agePlayerUpdate").val(data.agePlayer);
            var positionPlayerUpdate = $("#positionPlayerUpdate").val(data.positionPlayer);
            var jerseyNumberPlayerUpdate = $("#jerseyNumberPlayerUpdate").val(data.jerseyNumberPlayer);


            var idRead = $("#idPlayerRead").val(data.idPlayer);
            var firstNamePlayer = $("#firstNamePlayerRead").val(data.firstNamePlayer);
            var lastNamePlayer = $("#lastNamePlayerRead").val(data.lastNamePlayer);
            var agePlayer = $("#agePlayerRead").val(data.agePlayer);
            var positionPlayer = $("#positionPlayerRead").val(data.positionPlayer);
            var jerseyNumberPlayer = $("#jerseyNumberPlayerRead").val(data.jerseyNumberPlayer);
        });
    }

    var sendFormRegister = function () {
        $.validator.setDefaults({
            submitHandler: function () {
                var datos = $('#formCreatePlayer').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>player/insert",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "La Player ha sido registrado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>player";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al registrar el Player. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formCreatePlayer').validate({
            rules: {
                firstName: {
                    required: true
                },
                lastName: {
                    required: true
                },
                age: {
                    required: true
                },
                position: {
                    required: true
                },
                jerseyNumber: {
                    required: true
                }
            },
            messages: {
                firstName: {
                    required: "Ingresa un nombre"
                },
                lastName: {
                    required: "Ingresa un apellido"
                },
                age: {
                    required: "Ingresa la edad"
                },
                positionPlayer: {
                    required: "Ingresa la posición"
                },
                jerseyNumberPlayer: {
                    required: "Ingresa el número de camiseta"
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

    var sendFormUpdate = function () {
        $.validator.setDefaults({
            submitHandler: function () {
                var datos = $('#formUpdatePlayer').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>player/update",
                    data: datos,
                    success: function (data) {
                        if (data == 'ok') {
                            Swal.fire(
                                "¡Éxito!",
                                "El jugador ha sido Actualizado de manera correcta",
                                "success"
                            ).then(function () {
                                window.location = "<?php echo constant('URL');?>player";
                            })
                        } else {
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al Actualizar el jugador. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formUpdatePlayer').validate({
            rules: {
                firstNamePlayerUpdate: {
                    required: true
                },
                lastNamePlayerUpdate: {
                    required: true
                },
                agePlayerUpdate: {
                    required: true
                },
                positionPlayerUpdate: {
                    required: true
                },
                jerseyNumberPlayerUpdate: {
                    required: true
                }
            },
            messages: {
                firstNamePlayerUpdate: {
                    required: "Ingresa un nombre"
                },
                lastNamePlayerUpdate: {
                    required: "Ingresa un apellido"
                },
                agePlayerUpdate: {
                    required: "Ingresa la edad"
                },
                positionPlayerUpdate: {
                    required: "Ingresa la posición"
                },
                jerseyNumberPlayerUpdate: {
                    required: "Ingresa el número de camiseta"
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

    var deleteRegister = function () {
        $( "#formDeletePlayer" ).submit(function( event ) {
            event.preventDefault();
            var datos = $('#formDeletePlayer').serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo constant('URL');?>player/delete",
                data: datos,
                success: function (data) {
                    if (data == 'ok') {
                        Swal.fire(
                            "¡Éxito!",
                            "El Jugador ha sido eliminado correctamente",
                            "success"
                        ).then(function () {
                            window.location = "<?php echo constant('URL');?>player";
                        })
                    } else {
                        Swal.fire (
                            "¡Error!",
                            "Ha ocurrido un error al eliminar el Jugador. " + data,
                            "error"
                        );
                    }
                },
            });
        });
    }

    /*var dataTableFunction = function () {
        var table = $("#dataTablePlayer").DataTable({
            responsive: true,
            language: idiomaDataTable,
            lengthChange: true,
            buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
            dom: 'Bfltip'
        });

        table.buttons().container().appendTo('#dataTablePlayer_wrapper .col-md-6:eq(0)');
    }*/
</script>
