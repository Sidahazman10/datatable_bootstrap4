<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Engine Component</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <style type="text/css">
    .img-thumbnailE {
        max-width: 100%;
        width: auto;
        height: auto;
        display: block;
        margin-left: auto;
        padding-top: 20px;
        margin-right: auto;


    }

    .img-thumbnail {

        min-width: 280px !important;
        max-width: 100%;
        width: auto;
        height: auto;
        display: block;
        margin-left: auto;
        padding-top: 1%;
        margin-right: auto;

    }

    .img-thumbnailB {

        min-width: 200px !important;
        max-width: 100%;
        width: auto;
        height: auto;
        display: block;
        margin-left: auto;
        margin-top: 1%;
        margin-right: auto;

    }
    </style>
</head>

<body style="background: url(https://wallpaperaccess.com/full/1994610.jpg) no-repeat center fixed;
background-size: cover;">
    <br>
    <div class="container">
        <div class="card" style="background-color:#575d91;">
            <h3 class="text-center"
                style="margin-top:1%;color: white; text-shadow: 2px 2px 3px black, 0 0 25px #575d91, 0 0 5px #575d91;text-align:center;margin-bottom:1%;max-width:100%;">
                DATATABLES BOOTSTRAP </h3>

        </div>
        <br>
        <div class="card">

            <div class="card-header">
                <i class="fa fa-microchip"></i><strong> FIND COMPONENT</strong>
            </div>

            <div class="card-body">
                <div class="col-9"><button type="button" id="add_button" data-toggle="modal" data-target="#userModal"
                        style="background-color:#575d91;color:white;" class="btn btn-sm mr-3">Add Component</button><a
                        href="https://datatables.net/examples/styling/bootstrap4" class="btn btn-sm mr-3"
                        style="background-color:#938fbd;color:white;" title="Datatable">Datatable</i></a></div>
            </div>
        </div>
    </div>

    <br>
    <div class="datatable">
        <div class="container">
            <div class="card" style="background-color:white;">
                <div class="container2">
                    <div class="table-responsive">
                        <table id="user_data" class="table table-bordered table-hover">
                            <thead>
                                <tr style="background-color:#575d91;color:white;">
                                    <th width="15%">Image</th>
                                    <th width="20%">Brand </th>
                                    <th width="15%">Name</th>
                                    <th width="6%">Code</th>
                                    <th width="2%">Edit</th>
                                    <th width="2%">Delete</th>
                                </tr>
                            </thead>
                        </table><br>
                    </div>
                </div>
            </div>
        </div><br>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js">
        </script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js">
        </script>
</body>

</html>

<div id="userModal" class="modal fade">
    <div class="modal-dialog">
        <form method="post" id="user_form" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#575d91;color:white;">
                    <h4 class="modal-title">Add Component</h4><button type=" button" class="close" data-dismiss="modal"
                        style="color:white;">&times;
                    </button>
                </div>
                <div class=" modal-body"><label>Enter Component Name</label><input type="text" name="first_name"
                        id="first_name" class="form-control" /><br /><label>Enter Position Code</label><input
                        type="text" name="last_name" id="last_name" class="form-control" /><br /><label>Select
                        Component Image</label><input type="file" name="user_image" id="user_image" /><span
                        id="user_uploaded_image"></span><br /><br />
                    <p>Select Brand images</p><input type="file" name="user_image2" id="user_image2" /><span
                        id="user_uploaded_image2"></span><br /><br />
                </div>
                <div class="modal-footer"><input type="hidden" name="user_id" id="user_id" /><input type="hidden"
                        name="operation" id="operation" /><a href="https://datatables.net/examples/styling/bootstrap4"
                        class="btn btn-sm mr-3" style="background-color:#575d91;color:white;"
                        title="Datatable">Datatable</i></a><input type="submit" name="action" id="action"
                        class="btn btn-sm" style="background-color:#938fbd;color:white;" value="Add" /></div>
            </div>
        </form>
    </div>
</div>


<br>



<script type="text/javascript" language="javascript">
(function($) {
        $(document).ready(function() {
                $('#add_button').click(function() {
                        $('#user_form')[0].reset();
                        $('.modal-title').text(
                            "Add Component "
                        );
                        $('#action').val("Add");
                        $('#operation').val("Add");
                        $('#user_uploaded_image').html('');
                        $('#user_uploaded_image2').html('');
                    }

                );

                var dataTable = $('#user_data').DataTable({

                        "processing": true,
                        "serverSide": true,
                        "order": [],
                        "ajax": {
                            url: "fetch.php",
                            type: "POST"
                        }

                        ,
                        "columnDefs": [{
                                "targets": [0, 3, 4],
                                "orderable": false,
                            }

                            ,
                        ],

                    }

                );

                $(document).on('submit', '#user_form', function(event) {
                        event.preventDefault();
                        var firstName = $('#first_name').val();
                        var lastName = $('#last_name').val();
                        var extension = $('#user_image').val().split('.').pop().toLowerCase();
                        var extension = $('#user_image2').val().split('.').pop().toLowerCase();

                        if (extension != '') {
                            if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                                alert("Invalid Image File");
                                $('#user_image').val('');
                                $('#user_image2').val('');

                                return false;
                            }
                        }

                        if (firstName != '' && lastName != '') {
                            $.ajax({

                                    url: "insert.php",
                                    method: 'POST',
                                    data: new FormData(this),
                                    contentType: false,
                                    processData: false,
                                    success: function(data) {
                                        alert(data);
                                        $('#user_form')[0].reset();
                                        $('#userModal').modal('hide');
                                        dataTable.ajax.reload();
                                    }
                                }

                            );
                        } else {
                            alert("Both Fields are Required");
                        }
                    }

                );




                $(document).on('click', '.update', function() {
                        var user_id = $(this).attr("id");

                        $.ajax({

                                url: "fetch_single.php",
                                method: "POST",
                                data: {
                                    user_id: user_id
                                }

                                ,
                                dataType: "json",
                                success: function(data) {
                                    $('#userModal').modal('show');
                                    $('#first_name').val(data.first_name);
                                    $('#last_name').val(data.last_name);
                                    $('.modal-title').text("Edit / View ");
                                    $('#user_id').val(user_id);
                                    $('#user_uploaded_image').html(data.user_image);
                                    $('#user_uploaded_image2').html(data.user_image2);
                                    $('#action').val("Edit");
                                    $('#operation').val("Edit");
                                }
                            }

                        )
                    }

                );

                $(document).on('click', '.delete', function() {
                        var user_id = $(this).attr("id");

                        if (confirm("Are you sure you want to delete this?")) {
                            $.ajax({

                                    url: "delete.php",
                                    method: "POST",
                                    data: {
                                        user_id: user_id
                                    }

                                    ,
                                    success: function(data) {
                                        alert(data);
                                        dataTable.ajax.reload();
                                    }
                                }

                            );
                        } else {
                            return false;
                        }
                    }

                );


            }

        );
    }

)(jQuery);
</script>