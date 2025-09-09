<?php
    require 'view/menu.php';
    $menu = new Menu();
    $menu->header('song');
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-right">
                <button class="btn btn-success" data-toggle='modal' data-target='#modalRegisterSong'> <i class="fas fa-plus-circle"></i> Register Song </button>
                <button class="btn btn-success" data-toggle='modal' data-target='#modalRegistrarSong'> <i class="fas fa-plus-circle"></i> Registrar Song </button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Song Table</h3>
                    </div
                        <h3 class="card-title">Tabla Song</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTableSong" name="dataTableSong" class="table table-bordered table-hover dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Artist</th>
                                    <th>Album</th>
                                    <th>Year</th>
                                    <th>Options</th
                                      
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

<div class="modal fade" id="modalRegisterSong" tabindex="-1" role="dialog" aria-labelledby="modalRegisterSong" aria-hidden="true"
<!--*****************************************MODALS****************************************-->
<!-- **************** MODAL REGISTRAR **************** -->
<div class="modal fade" id="modalRegistrarSong" tabindex="-1" role="dialog" aria-labelledby="modalRegistrarSong" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-success">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h4 class="card-title">Song <small> &nbsp;(*) Required fields</small></h4>
                        <button type="button" class="close d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                </div>
                <form role="form" id="formRegisterSong" name="formRegisterSong" method="post">
                    <h4 class="card-title">Registrar Song <small>(*) Requeridos</small></h4>
                </div>
                <form id="formRegistrarSong" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Title (*)</label>
                                    <input type="text" class="form-control" id="titleSong" name="title" placeholder="Title"/>
                                    <label>Nombre (*)</label>
                                    <input type="text" class="form-control" id="name_song" name="name_song" placeholder="Nombre"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Artist (*)</label>
                                    <input type="text" class="form-control" id="artistSong" name="artist" placeholder="Artist"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Album (*)</label>
                                    <input type="text" class="form-control" id="albumSong" name="album" placeholder="Album"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Year (*)</label>
                                    <input type="number" class="form-control" id="yearSong" name="year" placeholder="Year"/>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success">Register</button>
                        </div>
                    </div>

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
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h4 class="card-title">Song <small> &nbsp;(*) Required fields</small></h4>
                        <button type="button" class="close d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                </div>
                <form role="form" id="formUpdateSong" name="formUpdateSong">
                    <div class="card-body">
                        <div style="display: none;" class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>ID (*)</label>
                                    <input type="text" class="form-control" id="idSongUpdate" name="idSongUpdate" placeholder="ID"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Title (*)</label>
                                    <input type="text" class="form-control" id="titleSongUpdate" name="titleUpdate" placeholder="Title"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Artist (*)</label>
                                    <input type="text" class="form-control" id="artistSongUpdate" name="artistUpdate" placeholder="Artist"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Album (*)</label>
                                    <input type="text" class="form-control" id="albumSongUpdate" name="albumUpdate" placeholder="Album"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Year (*)</label>
                                    <input type="number" class="form-control" id="yearSongUpdate" name="yearUpdate" placeholder="Year"/>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-warning">Update</button>
                        </div>
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


<div class="modal fade" id="modalDetailSong" tabindex="-1" role="dialog" aria-labelledby="modalDetailSong" aria-hidden="true">
<!--------------------------------------------------------- Modal DetalleSong----------------------------------------------->
<div class="modal fade" id="modalDetalleSong" tabindex="-1" role="dialog" aria-labelledby="modalDetalleSong" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-primary">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h4 class="card-title">Song Details</h4>
                        <button type="button" class="close d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                </div>
                <form role="form" id="formDetailSong" name="formDetailSong">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" disabled class="form-control" id="titleSongDetail" name="titleSongDetail" placeholder="Title"/>
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
                                    <label>Artist</label>
                                    <input type="text" disabled class="form-control" id="artistSongDetail" name="artistSongDetail" placeholder="Artist"/>
                                    <label>Artista (*)</label>
                                    <input type="text" disabled class="form-control" id="durationSongConsultar" name="durationSongConsultar" placeholder="duracion"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Album</label>
                                    <input type="text" disabled class="form-control" id="albumSongDetail" name="albumSongDetail" placeholder="Album"/>
                                    <label>Artista (*)</label>
                                    <input type="text" disabled class="form-control" id="recordSongConsultar" name="recordSongConsultar" placeholder="disquera"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Year</label>
                                    <input type="text" disabled class="form-control" id="yearSongDetail" name="yearSongDetail" placeholder="Year"/>
                                    <label>Artista (*)</label>
                                    <input type="text" disabled class="form-control" id="yearlaunchSongConsultar" name="yearlaunchSongConsultar" placeholder="añolanzamiento"/>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalDeleteSong" tabindex="-1" role="dialog" aria-labelledby="modalDeleteSong" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Delete Record</h5>
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
            <form role="form" id="formDeleteSong" name="formDeleteSong">
                <input type="text" hidden id="idSongDelete" name="idSongDelete">
                <div class="modal-body text-center text-danger">Do you really want to delete this Song?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-danger" type="submit">Delete</button>
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
        showSongs();
        submitRegisterForm();
        submitUpdateForm();
        submitDeleteForm();
    });

    var showSongs = function() {

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
                { "data": "id" },
                { "data": "title" },
                { "data": "artist" },
                { "data": "album" },
                { "data": "year" },
                {data:null,
                    "defaultContent":
                        `<button class='detail btn btn-primary' data-toggle='modal' data-target='#modalDetailSong' title="View Details"><i class="fa fa-eye"></i></button>
                         <button class='edit btn btn-warning' data-toggle='modal' data-target='#modalUpdateSong' title="Edit"><i class="fa fa-edit"></i></button>
                         <button class='delete btn btn-danger' data-toggle='modal' data-target='#modalDeleteSong' title="Delete"><i class="far fa-trash-alt"></i></button>`
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
        getSongData(tableSong);
        window.tableSong = tableSong; 
    }

    var getSongData = function (table) {
        $('#dataTableSong tbody').on('click', 'tr', function() {
            var data = table.row(this).data();
            $('#idSongDelete').val(data.id);

            $("#idSongUpdate").val(data.id);
            $("#titleSongUpdate").val(data.title);
            $("#artistSongUpdate").val(data.artist);
            $("#albumSongUpdate").val(data.album);
            $("#yearSongUpdate").val(data.year);

            $("#titleSongDetail").val(data.title);
            $("#artistSongDetail").val(data.artist);
            $("#albumSongDetail").val(data.album);
            $("#yearSongDetail").val(data.year);
        });
    }

    var submitRegisterForm = function () {
        $.validator.setDefaults({
            submitHandler: function () {
                var datos = $('#formRegisterSong').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>song/insert",
                    data: datos,
                    success: function (data) {
                        if (data.trim() == 'ok') {
                            Swal.fire(
                                "Success!",
                                "The song has been registered successfully.",
                                "success"
                            );
                            $('#modalRegisterSong').modal('hide');
                            $('#formRegisterSong')[0].reset();
                            $('#dataTableSong').DataTable().ajax.reload(null, false);
                        } else {
                            Swal.fire(
                                "Error!",
                                "There was an error registering the song. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formRegisterSong').validate({
            rules: {
                title: { required: true },
                artist: { required: true },
                album: { required: true },
                year: { required: true }
            },
            messages: {
                title: { required: "Enter a title" },
                artist: { required: "Enter an artist" },
                album: { required: "Enter an album" },
                year: { required: "Enter a year" }
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

    var submitUpdateForm = function () {
        $.validator.setDefaults({
            submitHandler: function () {
                var datos = $('#formUpdateSong').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo constant('URL');?>song/update",
                    data: datos,
                    success: function (data) {
                        if (data.trim() == 'ok') {
                            Swal.fire(
                                "Success!",
                                "The song has been updated successfully.",
                                "success"
                            );
                            $('#modalUpdateSong').modal('hide');
                            $('#formUpdateSong')[0].reset();
                            $('#dataTableSong').DataTable().ajax.reload(null, false);
                        } else {
                            Swal.fire(
                                "Error!",
                                "There was an error updating the song. " + data,
                                "error"
                            );
                        }
                    },
                });
            }
        });
        $('#formUpdateSong').validate({
            rules: {
                titleUpdate: { required: true },
                artistUpdate: { required: true },
                albumUpdate: { required: true },
                yearUpdate: { required: true }
            },
            messages: {
                titleUpdate: { required: "Enter a title" },
                artistUpdate: { required: "Enter an artist" },
                albumUpdate: { required: "Enter an album" },
                yearUpdate: { required: "Enter a year" }
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

    var submitDeleteForm = function () {
        $("#formDeleteSong").submit(function( event ) {
            event.preventDefault();
            var datos = $('#formDeleteSong').serialize();
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
                    if (data.trim() == 'ok') {
                        Swal.fire(
                            "Success!",
                            "The song has been deleted successfully.",
                            "success"
                        );
                        $('#modalDeleteSong').modal('hide');
                        $('#formDeleteSong')[0].reset();
                        $('#dataTableSong').DataTable().ajax.reload(null, false);
                    } else {
                        Swal.fire (
                            "Error!",
                            "There was an error deleting the song. " + data,
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
</script>
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
