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
                        
                        <a href="index.php?route=viewempprofile&userId=' . $value["id"] . '" class="btn btn-info btn-xs"><i class="fa fa-eye"></i></a>                        
                        <button class="btn btn-danger btn-xs btnDeleteUser" userId="' . $value["id"] . '" username="' . $value["full_name"] . '" userPhoto="' . $value["image"] . '"><i class="fa fa-times"></i></button>
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