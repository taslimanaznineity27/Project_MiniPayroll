<div class="content-wrapper">

  <section class="content-header">

    <h1>

      Employee Management

    </h1>

    <ol class="breadcrumb">

      <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>

      <li class="active">Dashboard</li>

    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">

        <button class="btn btn-primary">
          <a href="addemployee" style="color: white;">Add Employee</a>


        </button>

      </div>

      <div class="box-body">

        <table class="table table-bordered table-striped dt-responsive tables" width="100%">

          <thead>

            <tr>

              <th style="width:10px">#</th>
              <th>Name Of Employee</th>
              <th>Card No</th>
              <th>Phone Number</th>
              <th>Sex</th>
              <th>Religion</th>
              <th>Joining Date</th>
              <th>Company Name</th>
              <th>Departments</th>
              <th>Designation</th>

              <th>Status</th>
              <th>Photo</th>
              <th>Actions</th>

            </tr>

          </thead>

          <tbody>

            <?php

            $item = null;
            $value = null;

            $employeeList = EmployeeController::crtShowEmployeeList($item, $value);

            // var_dump($employeeList);

            foreach ($employeeList as $key => $value) {

              echo '

                  <tr>
                    <td>' . ($key + 1) . '</td>
                    <td>' . $value["full_name"] . '</td>
                    <td>' . $value["id_no"] . '</td>
                    <td>' . $value["phone"] . '</td>
                    <td>' . $value["gender"] . '</td>
                    <td>' . $value["religion"] . '</td>
                    <td>' . $value["joining_date"] . '</td>';
              // get company name 
              $item = 'id';
              $com_value = $value["company_id"];
              $company_name = CompanyController::ctrShowCompanies($item, $com_value);

              // get Dep   name 
              $item = 'id';
              $dep_value = $value["dept_id"];
              $dept_name = DepartmentController::ctrShowDepartments($item, $dep_value);

              // get Degi   name
              $item = 'id';
              $deg_value = $value["desig_id"];
              $deg_name = DesignationsController::ctrShowDesignations($item, $deg_value);


              echo  '<td>' . $company_name['company_name'] . '</td>
                    <td>' . $dept_name['department_name'] . '</td>
                    <td>' . $deg_name['designation_name'] . '</td>';


              if ($value["status"] != 0) {

                echo '<td><button class="btn btn-success btnActivate btn-xs" userId="' . $value["id"] . '" userStatus="0">Activated</button></td>';
              } else {

                echo '<td><button class="btn btn-danger btnActivate btn-xs" userId="' . $value["id"] . '" userStatus="1">Deactivated</button></td>';
              }

              if ($value["image"] != "") {

                echo '<td><img src="' . $value["image"] . '" class="img-thumbnail" width="40px"></td>';
              } else {

                echo '<td><img src="views/img/users/default/anonymous.png" class="img-thumbnail" width="40px"></td>';
              }


              echo '

                    <td>

                      <div class="btn-group">

                        <button class="btn btn-warning btnEditUser" idUser="' . $value["id"] . '" data-toggle="modal" data-target="#editUser"><i class="fa fa-pencil"></i></button>
                        <button class="btn btn-warning btnEditUser" idUser="' . $value["id"] . '" data-toggle="modal" data-target="#editUser"><i class="fa fa-pencil"></i></button>
                        <button class="btn btn-danger btnDeleteUser" userId="' . $value["id"] . '" username="' . $value["full_name"] . '" userPhoto="' . $value["image"] . '"><i class="fa fa-times"></i></button>

                      </div>  

                    </td>

                  </tr>';
            }

            ?>

          </tbody>

        </table>

      </div>

    </div>

  </section>

</div>

<!--=====================================
=            module add user            =
======================================-->

<!-- Modal -->
<!-- <div id="addUser" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <!-- Modal content-->
<div class="modal-content">

  <form role="form" method="POST" enctype="multipart/form-data">

    <!--=====================================
        HEADER
        ======================================-->

    <div class="modal-header" style="background: #3c8dbc; color: #fff">

      <button type="button" class="close" data-dismiss="modal">&times;</button>

      <h4 class="modal-title">Add user</h4>

    </div>

    <!--=====================================
        BODY
        ======================================-->

    <div class="modal-body">

      <div class="box-body">

        <!--Input name -->
        <div class="form-group">

          <div class="input-group">

            <span class="input-group-addon"><i class="fa fa-user"></i></span>

            <input class="form-control input-lg" type="text" name="newName" placeholder="Add name" required>

          </div>

        </div>

        <!-- input username -->
        <div class="form-group">

          <div class="input-group">

            <span class="input-group-addon"><i class="fa fa-key"></i></span>

            <input class="form-control input-lg" type="text" id="newUser" name="newUser" placeholder="Add username" required>

          </div>

        </div>

        <!-- input password -->
        <div class="form-group">

          <div class="input-group">

            <span class="input-group-addon"><i class="fa fa-lock"></i></span>

            <input class="form-control input-lg" type="password" name="newPasswd" placeholder="Add password" required>

          </div>

        </div>

        <!-- input profile -->
        <div class="form-group">

          <div class="input-group">

            <span class="input-group-addon"><i class="fa fa-key"></i></span>

            <select class="form-control input-lg" name="newProfile">

              <option value="">Select profile</option>
              <option value="administrator">Administrator</option>
              <option value="special">Special</option>
              <option value="seller">Seller</option>

            </select>

          </div>

        </div>

        <!-- Uploading image -->
        <div class="form-group">

          <div class="panel">Upload image</div>

          <input class="newPics" type="file" name="newPhoto">

          <p class="help-block">Maximum size 2Mb</p>

          <img class="thumbnail preview" src="views/img/users/default/anonymous.png" width="100px">

        </div>

      </div>

    </div>

    <!--=====================================
        FOOTER
        ======================================-->

    <div class="modal-footer">

      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>

      <button type="submit" class="btn btn-primary">Save</button>

    </div>

    <?php
    $createUser = new ControllerUsers();
    $createUser->ctrCreateUser();
    ?>

  </form>

</div>

</div>

</div> -->
<!--====  End of module add user  ====-->

<!--=====================================
=            module edit user            =
======================================-->

<!-- Modal -->
<!-- <div id="editUser" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <!-- Modal content-->
<div class="modal-content">

  <form role="form" method="POST" enctype="multipart/form-data">

    <!--=====================================
        HEADER
        ======================================-->

    <div class="modal-header" style="background: #3c8dbc; color: #fff">

      <button type="button" class="close" data-dismiss="modal">&times;</button>

      <h4 class="modal-title">Edit user</h4>

    </div>

    <!--=====================================
        BODY
        ======================================-->

    <div class="modal-body">

      <div class="box-body">

        <!--Input name -->
        <div class="form-group">

          <div class="input-group">

            <span class="input-group-addon"><i class="fa fa-user"></i></span>

            <input class="form-control input-lg" type="text" id="EditName" name="EditName" placeholder="Edit name" required>

          </div>

        </div>

        <!-- input username -->
        <div class="form-group">

          <div class="input-group">

            <span class="input-group-addon"><i class="fa fa-key"></i></span>

            <input class="form-control input-lg" type="text" id="EditUser" name="EditUser" placeholder="Edit username" readonly>

          </div>

        </div>

        <!-- input password -->
        <div class="form-group">

          <div class="input-group">

            <span class="input-group-addon"><i class="fa fa-lock"></i></span>

            <input class="form-control input-lg" type="password" name="EditPasswd" placeholder="Add new password">

            <input type="hidden" name="currentPasswd" id="currentPasswd">

          </div>

        </div>

        <!-- input profile -->
        <div class="form-group">

          <div class="input-group">

            <span class="input-group-addon"><i class="fa fa-key"></i></span>

            <select class="form-control input-lg" name="EditProfile">

              <option value="" id="EditProfile"></option>
              <option value="administrator">Administrator</option>
              <option value="special">Special</option>
              <option value="seller">Seller</option>

            </select>

          </div>

        </div>

        <!-- Uploading image -->
        <div class="form-group">

          <div class="panel">Upload image</div>

          <input class="newPics" type="file" name="editPhoto">

          <p class="help-block">Maximum size 2Mb</p>

          <img class="thumbnail preview" src="views/img/users/default/anonymous.png" alt="" width="100px">

          <input type="hidden" name="currentPicture" id="currentPicture">

        </div>

      </div>

    </div>

    <!--=====================================
        FOOTER
        ======================================-->

    <div class="modal-footer">

      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>

      <button type="submit" class="btn btn-primary">Edit User</button>

    </div>

    <?php
    $editUser = new ControllerUsers();
    $editUser->ctrEditUser();
    ?>

  </form>

</div>

</div>

</div> -->

<?php

// $deleteUser = new ControllerUsers();
// $deleteUser->ctrDeleteUser();

?>