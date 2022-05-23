<!doctype html>
<html lang="en">
<?php include('database.php');?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Font-Awsome link -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

    <title>EMS</title>
</head>

<body>
    <!-- Add Modal -->
    <div class="modal fade" id="employee_addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white">
                    <h4 class="modal-title" id="exampleModalLabel">Add Employee</h4>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="error-message">

                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="">Full Name</label>
                            <input type="text" class="form-control name" name="name" id="name">
                        </div>

                        <div class="col-md-6">
                            <label for="">Email</label>
                            <input type="text" class="form-control email" name="email" id="email">
                        </div>

                        <div class="col-md-6">
                            <label for="">Phone</label>
                            <input type="text" class="form-control phone" name="phone" id="phone">
                        </div>

                        <div class="col-md-4">
                            <label for="">Gender</label>
                            <br />
                            <div class="form-check form-check-inline">
                                <input class="form-check-input gender" type="radio" name="gender" id="gender"
                                    value="male" checked>
                                <label class="form-check-label" for="male">male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input gender" type="radio" name="gender" id="gender"
                                    value="female" checked>
                                <label class="form-check-label" for="female">female</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input gender" type="radio" name="gender" id="gender"
                                    value="transgender" checked>
                                <label class="form-check-label" for="transgender">transgender</label>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="">Date Of Birth</label>
                            <input type="date" class="form-control birth_date" name="birth_date" id="birth_date">
                        </div>

                        <div class="col-md-4">
                            <label for="">Marital Status</label>
                            <br />
                            <div class="form-check form-check-inline">
                                <input class="form-check-input marital_status" type="radio" name="marital_status"
                                    id="marital_status" value="married" checked>
                                <label class="form-check-label" for="marital_status">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input marital_status" type="radio" name="marital_status"
                                    id="marital_status" value="unmarried" checked>
                                <label class="form-check-label" for="marital_status">No</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="">Occupation</label>
                            <input type="text" class="form-control occupation" name="occupation" id="occupation">
                        </div>

                        <div class="col-md-6">
                            <label for="">Nationality</label>
                            <input type="text" class="form-control nationality" name="nationality" id="nationality">
                        </div>

                        <div class="col-md-6">
                            <label for="">Present Address</label>
                            <input type="text" class="form-control present_address" name="present_address"
                                id="present_address">
                        </div>

                        <div class="col-md-6">
                            <label for="">Permanent Address</label>
                            <input type="text" class="form-control permanent_address" name="permanent_address"
                                id="permanent_address">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-md employee_add_ajax">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <!-- View Modal -->
    <div class="modal fade" id="employee_viewModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Employee Details View</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5 class="mb-2"><strong>Full Name : </strong><span class="name_view" style="color:grey"></span>
                    </h5>
                    <h5 class="mb-2"><strong>Email : </strong><span class="email_view" style="color:grey"></span></h5>
                    <h5 class="mb-2"><strong>Phone : </strong><span class="phone_view" style="color:grey"></span></h5>
                    <h5 class="mb-2"><strong>Gender : </strong><span class="gender_view" style="color:grey"></span></h5>
                    <h5 class="mb-2"><strong>Birth Date : </strong><span class="birth_date_view"
                            style="color:grey"></span></h5>
                    <h5 class="mb-2"><strong>Marital Status : </strong><span class="marital_status_view"
                            style="color:grey"></span>
                    </h5>
                    <h5 class="mb-2"><strong>Occupation : </strong><span class="occupation_view"
                            style="color:grey"></span></h5>
                    <h5 class="mb-2"><strong>Present Address : </strong><span class="present_address_view"
                            style="color:grey"></span>
                    </h5>
                    <h5 class="mb-2"><strong>Permanent Address : </strong><span class="permanent_address_view"
                            style="color:grey"></span></h5>
                    <h5 class="mb-2"><strong>Nationality : </strong><span class="nationality_view"
                            style="color:grey"></span></h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Update Modal -->
    <div class="modal fade" id="employee_updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white">
                    <h4 class="modal-title" id="exampleModalLabel">Update Employee</h4>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" id="edit_id">
                        <div class="col-md-12">
                            <div class="error-message">

                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="">Full Name</label>
                            <input type="text" class="form-control name_update" name="name" id="name">
                        </div>

                        <div class="col-md-6">
                            <label for="">Email</label>
                            <input type="text" class="form-control email_update" name="email" id="email">
                        </div>

                        <div class="col-md-6">
                            <label for="">Phone</label>
                            <input type="text" class="form-control phone_update" name="phone" id="phone">
                        </div>

                        <div class="col-md-4">
                            <label for="">Gender</label>
                            <br />
                            <div class="form-check form-check-inline">
                                <input type="radio" id="gender" name="gender" class="form-check-input gender_update"
                                    <?php if (isset($gender) && $gender =="male") echo "checked";?> value="male">male
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="gender" name="gender" class="form-check-input gender_update"
                                    <?php if (isset($gender) && $gender=="female") echo "checked";?>
                                    value="female">female

                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="gender" name="gender" class="form-check-input gender_update"
                                    <?php if (isset($gender) && $gender=="transgender") echo "checked";?>
                                    value="transgender">transgender
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="">Date Of Birth</label>
                            <input type="date" class="form-control birth_date_update" name="birth_date" id="birth_date">
                        </div>

                        <div class="col-md-4">
                            <label for="">Marital Status</label>
                            <br />
                            <div class="form-check form-check-inline">
                                <input type="radio" id="maritalStatus" name="maritalStatus"
                                    class="form-check-input marital_status_update"
                                    <?php if (isset($maritalStatus) && $maritalStatus=="married") echo "checked";?>
                                    value="yes" required>Yes
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="maritalStatus" name="maritalStatus"
                                    class="form-check-input marital_status_update"
                                    <?php if (isset($maritalStatus) && $maritalStatus=="unmarried") echo "checked";?>
                                    value="no" required>No
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="">Occupation</label>
                            <input type="text" class="form-control occupation_update" name="occupation" id="occupation">
                        </div>

                        <div class="col-md-6">
                            <label for="">Nationality</label>
                            <input type="text" class="form-control nationality_update" name="nationality"
                                id="nationality">
                        </div>

                        <div class="col-md-6">
                            <label for="">Present Address</label>
                            <input type="text" class="form-control present_address_update" name="present_address"
                                id="present_address">
                        </div>

                        <div class="col-md-6">
                            <label for="">Permanent Address</label>
                            <input type="text" class="form-control permanent_address_update" name="permanent_address"
                                id="permanent_address">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-md employee_update_ajax">Update</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Container for table data in the view -->
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h2><span class="float-left mt-2">Employee Information</span></h2>
                        <div class="float-right mb-2">
                            <button type="button" class="btn btn-success" data-toggle="modal"
                                data-target="#employee_addModal">
                                Add New Employee
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="show-message">

                        </div>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-center m-2" style="text-transform:uppercase">
                                    <th scope="col">#</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Date Of Birth</th>
                                    <th scope="col">Occupation</th>
                                    <th scope="col">Martial Status</th>
                                    <th scope="col">Nationality</th>
                                    <th scope="col">Present Address</th>
                                    <th scope="col">Permanent Address</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody class="employeeData">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>









    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.5/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>










    <script>
    $(document).ready(function() {
        fetchdata();


        //edit data on click to modal edit button
        $(document).on("click", "#edit_id", function() {
            var emp_id = $(this).closest('tr').find('.emp_id').text();
            // alert(emp_id);

            $.ajax({
                type: "POST",
                url: "./crud-operations/update.php",
                data: {
                    'checking_update': true,
                    'emp_id': emp_id,
                },
                success: function(response) {
                    console.log(response);

                    $.each(response, function(key, empUpdate) {
                        // console.log(empUpdate['name']);
                        $('.name_update').val(empUpdate['name']);
                        $('.email_update').val(empUpdate['email']);
                        $('.phone_update').val(empUpdate['phone']);
                        $('.gender_update').val(empUpdate['gender']);
                        $('.birth_date_update').val(empUpdate['birth_date']);
                        $('.marital_status_update').val(empUpdate[
                            'marital_status']);
                        $('.occupation_update').val(empUpdate['occupation']);
                        $('.nationality_update').val(empUpdate['nationality']);
                        $('.present_address_update').val(empUpdate[
                            'present_address']);
                        $('.permanent_address_update').val(empUpdate[
                            'permanent_address']);
                    });

                    $('#employee_updateModal').modal('show');
                }
            });
        });

        //view data on click to modal view button
        $(document).on("click", "#view_id", function() {
            var emp_id = $(this).closest('tr').find('.emp_id').text();
            // alert(emp_id);

            $.ajax({
                type: "POST",
                url: "./crud-operations/view.php",
                data: {
                    'checking_view': true,
                    'emp_id': emp_id,
                },
                success: function(response) {
                    // console.log(response);

                    $.each(response, function(key, empView) {
                        // console.log(value['name']);
                        $('.name_view').text(empView['name']);
                        $('.email_view').text(empView['email']);
                        $('.phone_view').text(empView['phone']);
                        $('.gender_view').text(empView['gender']);
                        $('.birth_date_view').text(empView['birth_date']);
                        $('.marital_status_view').text(empView['marital_status']);
                        $('.occupation_view').text(empView['occupation']);
                        $('.nationality_view').text(empView['nationality']);
                        $('.present_address_view').text(empView['present_address']);
                        $('.permanent_address_view').text(empView[
                            'permanent_address']);
                    });

                    $('#employee_viewModal').modal('show');
                }
            });

        });

        //insert data to database
        $('.employee_add_ajax').click(function(e) {
            e.preventDefault();

            var name = $('.name').val();
            var email = $('.email').val();
            var phone = $('.phone').val();
            var gender = $('.gender').val();
            var birth_date = $('.birth_date').val();
            var maritalStatus = $('.marital_status').val();
            var occupation = $('.occupation').val();
            var nationality = $('.nationality').val();
            var present_address = $('.present_address').val();
            var permanent_address = $('.permanent_address').val();

            //<--- checking if input fields are passing data when the submit button of the modal is clicked -->
            // console.log(name); 

            //validation
            if (name != '' && email != '' && phone != '' && gender != '' && birth_date != '' &&
                maritalStatus != '' && occupation != '' && nationality != '' && present_address != '' &&
                permanent_address != '') {
                $.ajax({
                    type: "POST",
                    url: "./crud-operations/insert.php",
                    data: {
                        'checking_add': true,
                        'name': name,
                        'email': email,
                        'phone': phone,
                        'gender': gender,
                        'birth_date': birth_date,
                        'maritalStatus': maritalStatus,
                        'occupation': occupation,
                        'nationality': nationality,
                        'present_address': present_address,
                        'permanent_address': permanent_address,
                    },
                    success: function(response) {
                        // console.log(response);
                        $('#employee_addModal').modal('hide');
                        $('.show-message').append('\
                            <div class="alert alert-success alert-dismissible fade show" role="alert">\
                                <strong> Data ' + response + '!</strong>\
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                                    <span aria-hidden="true">&times;</span>\
                                </button>\
                            </div>');

                        //cleaning the existing employee table in the view
                        $('.employeeData').html("");

                        //fetch all the new data from the database to show in the view.
                        fetchdata();

                        //To male the modal inputs empty, without reloading the whole view page so make it happen we make the modal input values empty after each addition of new employee. The modal input values will be empty in the next addition of another new employee.
                        $('.name').val("");
                        $('.email').val("");
                        $('.phone').val("");
                        $('.gender').val("");
                        $('.birth_date').val("");
                        $('.marital_status').val("");
                        $('.occupation').val("");
                        $('.nationality').val("");
                        $('.present_address').val("");
                        $('.permanent_address').val("");
                    }
                });
            } else {
                // console.log("please enter all fields");
                $('.error-message').append('\
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">\
                        <strong>Please!</strong> Enter all of the flieds.\
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                            <span aria-hidden="true">&times;</span>\
                        </button>\
                    </div>');
            }
        });
    });

    //fetch data  database
    function fetchdata() {
        $.ajax({
            type: "GET",
            url: "./crud-operations/fetch.php",
            success: function(response) {
                //<-- checking if the data from the database is fetched and shown to the browser console -->
                // console.log(response);

                $.each(response, function(key, value) {
                    // console.log(value['name']);
                    $('.employeeData').append('<tr>' +
                        '<th class="emp_id"> ' + value['id'] + ' </th> \
                            <td> ' + value['name'] + ' </td> \
                            <td> ' + value['email'] + ' </td> \
                            <td> ' + value['phone'] + ' </td> \
                            <td> ' + value['gender'] + ' </td> \
                            <td> ' + value['birth_date'] + ' </td>\
                            <td> ' + value['occupation'] + ' </td> \
                            <td> ' + value['marital_status'] + ' </td> \
                            <td> ' + value['nationality'] + ' </td> \
                            <td> ' + value['present_address'] + ' </td> \
                            <td> ' + value['permanent_address'] + ' </td> \
                            <td>\
                            <a href="#" role="button" name="view" id="view_id" class="btn btn-primary btn-md mb-2 d-grid gap-2 mb-2"><i class="fa fa-eye"></i></a>\
                            <a href="#" role="button" name="update" id="edit_id" class="btn btn-warning btn-md mb-2 d-grid gap-2 mb-2"><i class="fa fa-edit"></i></a>\
                            <a href="#" type="button" role="button" name="delete" id="delele_id" class="btn btn-danger btn-md mb-2 d-grid gap-2 mb-2" onclick="return confirm("Are you sure you want to delete this item?");"><i class="fa fa-trash"></i></a>\
                            </td>\
                        </tr>');
                });
            }
        });
    }
    </script>

</body>

</html>