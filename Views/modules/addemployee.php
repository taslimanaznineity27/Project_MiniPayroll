<div class="content-wrapper">
  <section class="content-header">
    <h1>User Management</h1>
    <ol class="breadcrumb">
      <li>
        <a href="home"><i class="fa fa-dashboard"></i> Home</a>
      </li>
      <li class="active">Add Employee</li>
    </ol>
  </section>
  <section class="content">
    <div class="box">
      <div class="box-header with-border">
        <button class="btn btn-primary">
          <a href="employeeinfo" style="color: white;">Employee List</a>
        </button>
      </div>
      <div class="box-header with-border">
        <h3 class="box-title">Add Employee Informations</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i>
          </button>
        </div>
      </div>
      <div class="box-body">
        <div class="row">
          <form method="POST" enctype="multipart/form-data">
            <div class="col-sm-6">
              <h3 class="box-title">Personal Information</h3>
              <div class="form-group">
                <label for="full_name">Full Name</label>
                <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Enter First Name">
              </div>
              <div class="form-group">
                <label for="fname">Father Name</label>
                <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter Last Name">
              </div>
              <div class="form-group">
                <label for="mname">Mother Name</label>
                <input type="text" class="form-control" id="mname" name="mname" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Address">
              </div>

            </div>


            <div class="col-sm-3">
              <h4 class="box-title">Officeail Information</h4>
              <div class="form-group">
                <label for="exampleInputEmail1">Company Name</label>
                <select class="form-control" id="company_id" name="company_id">
                  <option>Select Company Name</option>
                  <?php



                  $item = null;
                  $value1 = null;
                  $company_name = CompanyController::ctrShowCompanies($item, $value1);
                  foreach ($company_name as $key => $value) {
                    echo '<option value="' . $value["id"] . '">' . $value["company_name"] . '</option>';
                  }
                  ?>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Departments</label>
                <select class="form-control" id="dept_id" name="dept_id">
                  <option>Select Departments</option>
                  <?php
                  $item = null;
                  $value1 = null;
                  $company_name = DepartmentController::ctrShowDepartments($item, $value1);
                  foreach ($company_name as $key => $value) {
                    echo '<option value="' . $value["id"] . '">' . $value["department_name"] . '</option>';
                  }
                  ?>

                </select>
              </div>

              <div class="form-group">
                <label for="desig_id" id="desig_id" name="desig_id">Designations</label>
                <select class="form-control" id="desig_id" name="desig_id">
                  <option>Select Designations</option>
                  <?php
                  $item = null;
                  $value1 = null;
                  $company_name = DesignationsController::ctrShowDesignations($item, $value1);
                  foreach ($company_name as $key => $value) {
                    echo '<option value="' . $value["id"] . '">' . $value["designation_name"] . '</option>';
                  }
                  ?>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Religion</label>
                <select class="form-control" name="religion" id="religion">
                  <option>Select Religion</option>
                  <option value="Islam">Islam</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Other">Other</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Sex</label>
                <select class="form-control" name="gender" id="gender">
                  <option>Select Sex</option>
                  <option>Male</option>
                  <option>Female</option>
                </select>
              </div>
            </div>

            
            <div class="col-sm-3">
              <h4 class="box-title">Other Information</h4>
              <div class="form-group">
                <label for="Date of Birth">Date of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob" placeholder="Enter Date of Birth">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Date of Joining</label>
                <input type="date" class="form-control" id="joining_date" name="joining_date" placeholder="Enter Date of Joining">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Salary</label>
                <input type="text" class="form-control" id="salary" name="salary" placeholder="Enter Salary">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Country Name</label>
                <select class="form-control" name="conttries_id" id="conttries_id">
                  <option>Select Country</option>
                  <?php

                  $item = null;
                  $value1 = null;
                  $country_name = CountryController::crlShowCountry($item, $com_value);
                  // var_dump($country_name);
                  foreach ($country_name as $key => $value) {
                    echo '<option value="' . $value["id"] . '">' . $value["name"] . '</option>';
                  }
                  ?>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="image" name="image">
                <img class="thumbnail preview" src="views/img/users/default/anonymous.png" width="100px">
                <p class="help-block">Upload Your JPGE Image</p>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Save</button>
              </div>
              <div class="col-xs-4">
                <button class="btn btn-danger btn-block btn-flat"> Data Clear</button>
              </div>
              <div class="col-xs-4">
                <button class="btn btn-info btn-block btn-flat"> Update Informations</button>
              </div>
            </div>
            <?php
            $createEmployee = new EmployeeController();
            $createEmployee->ctrCreateEmployee();
            // var_dump($createEmployee);
            ?>
          </form>

        </div>
      </div>
    </div>
</div>
</section>
</div>