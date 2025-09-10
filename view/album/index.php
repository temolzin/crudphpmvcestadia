<?php

require 'view/menu.php';
$menu = new Menu();
$menu->header('album');
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-right">
                <button class="btn btn-success" data-toggle='modal' data-target='#modalRegisterAlbum'> <i class="fas fa-plus-circle"></i> Register Album </button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Album Table</h3>
                    </div>
                    <div class="card-body">
                        <table id="dataTableAlbum" name="dataTableAlbum" class="table table-bordered table-hover dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Artist</th>
                                    <th>Album</th>
                                    <th>Year</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Register Album Modal -->
<div class="modal fade" id="modalRegisterAlbum" tabindex="-1" role="dialog" aria-labelledby="modalRegisterAlbum" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-success">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h4 class="card-title">Album <small> &nbsp;(*) Required fields</small></h4>
                        <button type="button" class="close d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                </div>
                <form role="form" id="formRegisterAlbum" name="formRegisterAlbum" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Title (*)</label>
                                    <input type="text" class="form-control" id="titleAlbum" name="title" placeholder="Title"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Artist (*)</label>
                                    <input type="text" class="form-control" id="artistAlbum" name="artist" placeholder="Artist"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Album (*)</label>
                                    <input type="text" class="form-control" id="albumAlbum" name="album" placeholder="Album"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Year (*)</label>
                                    <input type="number" class="form-control" id="yearAlbum" name="year" placeholder="Year"/>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Album Modal -->
<div class="modal fade" id="modalUpdateAlbum" tabindex="-1" role="dialog" aria-labelledby="modalUpdateAlbum" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-warning">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h4 class="card-title">Album <small> &nbsp;(*) Required fields</small></h4>
                        <button type="button" class="close d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                </div>
                <form role="form" id="formUpdateAlbum" name="formUpdateAlbum">
                    <div class="card-body">
                        <div style="display: none;" class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>ID (*)</label>
                                    <input type="text" class="form-control" id="idAlbumUpdate" name="idAlbumUpdate" placeholder="ID"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Title (*)</label>
                                    <input type="text" class="form-control" id="titleAlbumUpdate" name="titleUpdate" placeholder="Title"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Artist (*)</label>
                                    <input type="text" class="form-control" id="artistAlbumUpdate" name="artistUpdate" placeholder="Artist"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Album (*)</label>
                                    <input type="text" class="form-control" id="albumAlbumUpdate" name="albumUpdate" placeholder="Album"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Year (*)</label>
                                    <input type="number" class="form-control" id="yearAlbumUpdate" name="yearUpdate" placeholder="Year"/>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-warning">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Detail Album Modal -->
<div class="modal fade" id="modalDetailAlbum" tabindex="-1" role="dialog" aria-labelledby="modalDetailAlbum" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-primary">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h4 class="card-title">Album Details</h4>
                        <button type="button" class="close d-sm-inline-block text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                </div>
                <form role="form" id="formDetailAlbum" name="formDetailAlbum">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" disabled class="form-control" id="titleAlbumDetail" name="titleAlbumDetail" placeholder="Title"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Artist</label>
                                    <input type="text" disabled class="form-control" id="artistAlbumDetail" name="artistAlbumDetail" placeholder="Artist"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Album</label>
                                    <input type="text" disabled class="form-control" id="albumAlbumDetail" name="albumAlbumDetail" placeholder="Album"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Year</label>
                                    <input type="text" disabled class="form-control" id="yearAlbumDetail" name="yearAlbumDetail" placeholder="Year"/>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete Album Modal -->
<div class="modal fade" id="modalDeleteAlbum" tabindex="-1" role="dialog" aria-labelledby="modalDeleteAlbum" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Delete Record</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form role="form" id="formDeleteAlbum" name="formDeleteAlbum">
                <input type="text" hidden id="idAlbumDelete" name="idAlbumDelete">
                <div class="modal-body text-center text-danger">Do you really want to delete this Album?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-danger" type="submit">Delete</button>
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
    showAlbums();
    submitRegisterForm();
    submitUpdateForm();
    submitDeleteForm();
});

var showAlbums = function() {
    var tableAlbum = $('#dataTableAlbum').DataTable({
        "processing": true,
        "ajax": {
            "url": "<?php echo constant('URL');?>album/read"
        },
        "columns": [
            { "data": "id" },
            { "data": "title" },
            { "data": "artist" },
            { "data": "album" },
            { "data": "year" },
            {data:null,
                "defaultContent":
                    `<button class='detail btn btn-primary' data-toggle='modal' data-target='#modalDetailAlbum' title="View Details"><i class="fa fa-eye"></i></button>
                     <button class='edit btn btn-warning' data-toggle='modal' data-target='#modalUpdateAlbum' title="Edit"><i class="fa fa-edit"></i></button>
                     <button class='delete btn btn-danger' data-toggle='modal' data-target='#modalDeleteAlbum' title="Delete"><i class="far fa-trash-alt"></i></button>`
            }
        ],
        responsive: true,
        autoWidth: false,
        language: idiomaDataTable,
        lengthChange: true,
        buttons: ['copy', 'excel', 'csv', 'pdf', 'colvis'],
        dom: 'Bfltip'
    });
    getAlbumData(tableAlbum);
    window.tableAlbum = tableAlbum; 
}

var getAlbumData = function (table) {
    $('#dataTableAlbum tbody').on('click', 'tr', function() {
        var data = table.row(this).data();
        $('#idAlbumDelete').val(data.id);

        $("#idAlbumUpdate").val(data.id);
        $("#titleAlbumUpdate").val(data.title);
        $("#artistAlbumUpdate").val(data.artist);
        $("#albumAlbumUpdate").val(data.album);
        $("#yearAlbumUpdate").val(data.year);

        $("#titleAlbumDetail").val(data.title);
        $("#artistAlbumDetail").val(data.artist);
        $("#albumAlbumDetail").val(data.album);
        $("#yearAlbumDetail").val(data.year);
    });
}

var submitRegisterForm = function () {
    $.validator.setDefaults({
        submitHandler: function () {
            var datos = $('#formRegisterAlbum').serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo constant('URL');?>album/insert",
                data: datos,
                success: function (data) {
                    if (data.trim() == 'ok') {
                        Swal.fire(
                            "Success!",
                            "The album has been registered successfully.",
                            "success"
                        );
                        $('#modalRegisterAlbum').modal('hide');
                        $('#formRegisterAlbum')[0].reset();
                        $('#dataTableAlbum').DataTable().ajax.reload(null, false);
                    } else {
                        Swal.fire(
                            "Error!",
                            "There was an error registering the album. " + data,
                            "error"
                        );
                    }
                },
            });
        }
    });
    $('#formRegisterAlbum').validate({
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
            var datos = $('#formUpdateAlbum').serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo constant('URL');?>album/update",
                data: datos,
                success: function (data) {
                    if (data.trim() == 'ok') {
                        Swal.fire(
                            "Success!",
                            "The album has been updated successfully.",
                            "success"
                        );
                        $('#modalUpdateAlbum').modal('hide');
                        $('#formUpdateAlbum')[0].reset();
                        $('#dataTableAlbum').DataTable().ajax.reload(null, false);
                    } else {
                        Swal.fire(
                            "Error!",
                            "There was an error updating the album. " + data,
                            "error"
                        );
                    }
                },
            });
        }
    });
    $('#formUpdateAlbum').validate({
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
    $("#formDeleteAlbum").submit(function( event ) {
        event.preventDefault();
        var datos = $('#formDeleteAlbum').serialize();
        $.ajax({
            type: "POST",
            url: "<?php echo constant('URL');?>album/delete",
            data: datos,
            success: function (data) {
                if (data.trim() == 'ok') {
                    Swal.fire(
                        "Success!",
                        "The album has been deleted successfully.",
                        "success"
                    );
                    $('#modalDeleteAlbum').modal('hide');
                    $('#formDeleteAlbum')[0].reset();
                    $('#dataTableAlbum').DataTable().ajax.reload(null, false);
                } else {
                    Swal.fire (
                        "Error!",
                        "There was an error deleting the album. " + data,
                        "error"
                    );
                }
            },
        });
    });
}
</script>
