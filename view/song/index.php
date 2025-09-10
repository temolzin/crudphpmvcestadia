<?php
    require 'view/menu.php';
    $menu = new Menu();
    $menu->header('song');
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-right">
                <button class="btn btn-success" data-toggle='modal' data-target='#modalRegistrarSong'> <i class="fas fa-plus-circle"></i> Registrar Song </button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabla Song</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTableSong" name="dataTableSong" class="table table-bordered table-hover dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Artista</th>
                                    <th>Duracion</th>
                                    <th>Disquera</th>
                                    <th>Año de lanzamiento</th>
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
<!-- **************** MODAL REGISTRAR **************** -->
<div class="modal fade" id="modalRegistrarSong" tabindex="-1" role="dialog" aria-labelledby="modalRegistrarSong" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-success">
                <div class="card-header">
                    <h4 class="card-title">Registrar Song <small>(*) Requeridos</small></h4>
                </div>
                <form id="formRegistrarSong" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" class="form-control" id="name_song" name="name_song" placeholder="Nombre"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Artista (*)</label>
                                    <input type="text" class="form-control" id="artist_song" name="artist_song" placeholder="Artista"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Duración (*)</label>
                                    <input type="text" class="form-control" id="duration_song" name="duration_song" placeholder="Ej: 03:45"/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Disquera (*)</label>
                                    <input type="text" class="form-control" id="record_song" name="record_song" placeholder="Disquera"/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Año de lanzamiento (*)</label>
                                    <input type="text" class="form-control" id="year_launch_song" name="year_launch_song" placeholder="YYYY"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- **************** MODAL ACTUALIZAR **************** -->
<div class="modal fade" id="modalUpdateSong" tabindex="-1" role="dialog" aria-labelledby="modalUpdateSong" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-warning">
                <div class="card-header">
                    <h4 class="card-title">Update Song</h4>
                </div>
                <form id="formUpdateSong">
                    <div class="card-body">
                        <input type="hidden" id="idSongUpdate" name="idSongUpdate"/>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" class="form-control" id="nameSongUpdate" name="nameSongUpdate"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Artista (*)</label>
                                    <input type="text" class="form-control" id="artistSongUpdate" name="artistSongUpdate"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Duración (*)</label>
                                    <input type="text" class="form-control" id="durationSongUpdate" name="durationSongUpdate"/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Disquera (*)</label>
                                    <input type="text" class="form-control" id="recordSongUpdate" name="recordSongUpdate"/>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Año de lanzamiento (*)</label>
                                    <input type="text" class="form-control" id="yearlaunchSongUpdate" name="yearlaunchSongUpdate"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-warning">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!--------------------------------------------------------- Modal DetalleSong----------------------------------------------->
<div class="modal fade" id="modalDetalleSong" tabindex="-1" role="dialog" aria-labelledby="modalDetalleSong" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-primary">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between " >
                        <h4 class="card-title">Song <small> &nbsp;(*) Campos requeridos</small></h4>
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
                                    <label>Matrícula (*)</label>
                                    <input disabled type="text" class="form-control" id="idSongConsultar" name="idSongConsultar" placeholder="Matrícula"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nombre (*)</label>
                                    <input type="text" disabled class="form-control" id="nameSongConsultar" name="nameSongConsultar" placeholder="Nombre"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Artista (*)</label>
                                    <input type="text" disabled class="form-control" id="artistSongConsultar" name="artistSongConsultar" placeholder="Artista"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Artista (*)</label>
                                    <input type="text" disabled class="form-control" id="durationSongConsultar" name="durationSongConsultar" placeholder="duracion"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Artista (*)</label>
                                    <input type="text" disabled class="form-control" id="recordSongConsultar" name="recordSongConsultar" placeholder="disquera"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Artista (*)</label>
                                    <input type="text" disabled class="form-control" id="yearlaunchSongConsultar" name="yearlaunchSongConsultar" placeholder="añolanzamiento"/>
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

<!-- ****************************** Modal Eliminar Song *************************************************-->
<div class="modal fade" id="modalEliminarSong" tabindex="-1" role="dialog" aria-labelledby="modalEliminarSong" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form role="form" id="formEliminarSong" name="formUpdateSong">
                <input type="text" hidden id="idEliminarSong" name="idEliminarSong">
                <div class="modal-body text-center text-danger">¿Realmente deseas eliminar este Song?</div>
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
        mostrarSongs();
        enviarFormularioRegistrar();
        enviarFormularioUpdate();
        eliminarRegistro();
    });

    var mostrarSongs = function() {
        var tableSong = $('#dataTableSong').DataTable({
            "processing": true,
            "ajax": {
                "url": "<?php echo constant('URL');?>song/read"
            },
            "columns": [
                { "data": "id_song" },
                { "data": "name_song" },
                { "data": "artist_song" },
                { "data": "duration_song" },
                { "data": "record_song" },
                { "data": "year_launch_song" },
                {data:null,
                    "defaultContent":
                        `<button class='consulta btn btn-primary' data-toggle='modal' data-target='#modalDetalleSong' title="Ver Detalles"><i class="fa fa-eye"></i></button>
                         <button class='editar btn btn-warning' data-toggle='modal' data-target='#modalUpdateSong' title="Editar Datos"><i class="fa fa-edit"></i></button>
                         <button class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminarSong' title="Eliminar Registro"><i class="far fa-trash-alt"></i></button>`
                }
            ],
            responsive: true,
            autoWidth: false,
            language: idiomaDataTable,
            lengthChange: true,
            buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
            dom: 'Bfltip'
        });
        obtenerdatosDT(tableSong);
    }

    var obtenerdatosDT = function (table) {
        $('#dataTableSong tbody').on('click', 'tr', function() {
            var data = table.row(this).data();
            var idEliminar = $('#idEliminarSong').val(data.id_song);

            var idUpdate = $("#idSongUpdate").val(data.id_song);
            var nameSongUpdate = $("#nameSongUpdate").val(data.name_song);
            var artistSongUpdate = $("#artistSongUpdate").val(data.artist_song);
            var durationSongUpdate = $("#durationSongUpdate").val(data.duration_song);
            var recordSongUpdate = $("#recordSongUpdate").val(data.record_song);
            var yearlaunchSongUpdate = $("#yearlaunchSongUpdate").val(data.year_launch_song);

            var idConsulta = $("#idSongConsultar").val(data.id_song);
            var nameConsulta = $("#nameSongConsultar").val(data.name_song);
            var artistConsulta = $("#artistSongConsultar").val(data.artist_song);
            var durationConsulta = $("#durationSongConsultar").val(data.duration_song);
            var recordConsula =  $("#recordSongConsultar").val(data.record_song);
            var yearlaunchConsulta = $("#yearlaunchSongConsultar").val(data.year_launch_song)
        });
    }

var enviarFormularioRegistrar = function () {
    $.validator.setDefaults({
        submitHandler: function () {
            var datos = $('#formRegistrarSong').serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo constant('URL');?>song/insert",
                data: datos,
                success: function (data) {
                    if (data == 'ok') {
                        Swal.fire(
                            "¡Éxito!",
                            "La cancion ha sido registrada de manera correcta",
                            "success"
                        ).then(function () {
                            window.location = "<?php echo constant('URL');?>song";
                        })
                    } else {
                        Swal.fire(
                            "¡Error!",
                            "Ha ocurrido un error al registrar el Song. " + data,
                            "error"
                        );
                    }
                },
            });
        }
    });

    $('#formRegistrarSong').validate({
        rules: {
            nombreSong: {
                required: true
            },
            apellidosSong: {
                required: true
            },
            duracionSong: {
                required: true
            },
            disqueraSong: {
                required: true
            },
            anioSong: {
                required: true,
                digits: true,
                minlength: 4,
                maxlength: 4
            }
        },
        messages: {
            nombreSong: {
                required: "Ingresa un nombre"
            },
            apellidosSong: {
                required: "Ingresa un apellido"
            },
            duracionSong: {
                required: "Ingresa la duración de la canción"
            },
            disqueraSong: {
                required: "Ingresa la disquera"
            },
            anioSong: {
                required: "Ingresa el año de lanzamiento",
                digits: "Solo se permiten números",
                minlength: "Debe ser un año válido (4 dígitos)",
                maxlength: "Debe ser un año válido (4 dígitos)"
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


var enviarFormularioUpdate = function () {
    $.validator.setDefaults({
        submitHandler: function () {
            var datos = $('#formUpdateSong').serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo constant('URL');?>song/update",
                data: datos,
                success: function (data) {
                    if (data == 'ok') {
                        Swal.fire(
                            "¡Éxito!",
                            "La Song ha sido actualizada de manera correcta",
                            "success"
                        ).then(function () {
                            window.location = "<?php echo constant('URL');?>song";
                        })
                    } else {
                        Swal.fire(
                            "¡Error!",
                            "Ha ocurrido un error al actualizar el Song. " + data,
                            "error"
                        );
                    }
                },
            });
        }
    });

    $('#formUpdateSong').validate({
        rules: {
            nombreSongUpdate: {
                required: true
            },
            apellidosSongUpdate: {
                required: true
            },
            duracionSongUpdate: {
                required: true
            },
            disqueraSongUpdate: {
                required: true
            },
            anioSongUpdate: {
                required: true,
                digits: true,
                minlength: 4,
                maxlength: 4
            }
        },
        messages: {
            nameSongUpdate: {
                required: "Ingresa un nombre"
            },
            artistSongUpdate: {
                required: "Ingresa un apellido"
            },
            durationSongUpdate: {
                required: "Ingresa la duración de la canción"
            },
            recordsSongUpdate: {
                required: "Ingresa la disquera"
            },
            yearlaunchSongUpdate: {
                required: "Ingresa el año de lanzamiento",
                digits: "Solo se permiten números",
                minlength: "Debe ser un año válido (4 dígitos)",
                maxlength: "Debe ser un año válido (4 dígitos)"
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
        $( "#formEliminarSong" ).submit(function( event ) {
            event.preventDefault();
            var datos = $('#formEliminarSong').serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo constant('URL');?>song/delete",
                data: datos,
                success: function (data) {
                    if (data == 'ok') {
                        Swal.fire(
                            "¡Éxito!",
                            "El Song ha sido eliminado correctamente",
                            "success"
                        ).then(function () {
                            window.location = "<?php echo constant('URL');?>song";
                        })
                    } else {
                        Swal.fire (
                            "¡Error!",
                            "Ha ocurrido un error al eliminar el Song. " + data,
                            "error"
                        );
                    }
                },
            });
        });
    }

    /*var dataTableFunction = function () {
        var table = $("#dataTableSong").DataTable({
            responsive: true,
            language: idiomaDataTable,
            lengthChange: true,
            buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
            dom: 'Bfltip'
        });

        table.buttons().container().appendTo('#dataTableSong_wrapper .col-md-6:eq(0)');
    }*/
</script>
