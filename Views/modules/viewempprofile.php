<div class="content-wrapper">
    <?php
    $item = 'id';
    $value = $_GET['userId'];
    $employeeList = EmployeeController::crtShowEmployeeList($item, $value);
    ?>
    <section class="content-header">
        <h1>Employee Profile</h1>
        <ol class="breadcrumb">
            <li>
                <a href="home"><i class="fa fa-dashboard"></i> Home</a>
            </li>
            <li class="active">Employee Profile</li>
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
                <h3 class="box-title">Employee Profile Informations</h3>
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
                                <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Enter First Name" value="<?php echo ($employeeList['full_name']); ?>">
                            </div>
                            <div class="form-group">
                                <label for="fname">Father Name</label>
                                <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter Last Name" value="<?php echo ($employeeList['fname']); ?>">
                            </div>
                            <div class="form-group">
                                <label for="mname">Mother Name</label>
                                <input type="text" class="form-control" id="mname" name="mname" placeholder="Enter email" value="<?php echo ($employeeList['mname']); ?>">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone" value="<?php echo ($employeeList['phone']); ?>">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Address" value="<?php echo ($employeeList['email']); ?>">
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
                                    ?>
                                        <option value="<?php echo ($value["id"]); ?>" <?php if ($employeeList['company_id'] == $value["id"]) {
                                                                                            echo 'selected';
                                                                                        } ?>><?php echo ($value["company_name"]); ?>
                                        </option>
                                    <?php
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
                                    ?>
                                        <option value="<?php echo ($value["id"]); ?>" <?php if ($employeeList['dept_id'] == $value["id"]) {
                                                                                            echo 'selected';
                                                                                        } ?>><?php echo ($value["department_name"]); ?>
                                        </option>
                                    <?php
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
                                    // echo ($employeeList['desig_id']);

                                    foreach ($company_name as $key => $value) {
                                    ?>
                                        <option value="<?php echo ($value["id"]); ?>" <?php if ($employeeList['desig_id'] == $value["id"]) {
                                                                                            echo 'selected';
                                                                                        } ?>><?php echo ($value["designation_name"]); ?>
                                        </option>
                                    <?php
                                    } 
                                    ?>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Religion</label>
                                <select class="form-control" name="religion" id="religion">
                                    <option>Select Religion</option>
                                    <option value="Islam" <?php echo $employeeList['religion'] == 'Islam' ? 'selected' : '' ?>>Islam</option>
                                    <option value="Hindu" <?php echo $employeeList['religion'] == 'Hindu' ? 'selected' : '' ?>>Hindu</option>
                                    <option value="Other" <?php echo $employeeList['religion'] == 'Other' ? 'selected' : '' ?>>Other</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Sex</label>
                                <select class="form-control" name="gender" id="gender">
                                    <option>Select Sex</option>
                                    <option value="Male" <?php echo $employeeList['gender'] == 'Male' ? 'selected' : '' ?>>Male</option>
                                    <option value="Female" <?php echo $employeeList['gender'] == 'Female' ? 'selected' : '' ?>>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <h4 class="box-title">Other Information</h4>
                            <div class="form-group">
                                <label for="Date of Birth">Date of Birth</label>
                                <input type="date" class="form-control" id="dob" name="dob" placeholder="Enter Date of Birth" value="<?php echo ($employeeList['dob']); ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Date of Joining</label>
                                <input type="date" class="form-control" id="joining_date" name="joining_date" placeholder="Enter Date of Joining" value="<?php echo ($employeeList['joining_date']); ?>">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Salary</label>
                                <input type="text" class="form-control" id="salary" name="salary" placeholder="Enter Salary" value="<?php echo ($employeeList['salary']); ?>">
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
                                    foreach ($company_name as $key => $value) {
                                    ?>
                                        <option value="<?php echo ($value["id"]); ?>" <?php if ($employeeList['conttries_id'] == $value["id"]) {
                                                                                            echo 'selected';
                                                                                        } ?>><?php echo ($value["name"]); ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <?php
                                var_dump($country_name["name"]);
                                ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <input type="file" id="image" name="image">
                                <img class="thumbnail preview" src="<?php echo ($employeeList['image']); ?>" width="100px">
                                <p class="help-block">Upload Your JPGE Image</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-3">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">Edit Employee</button>
                            </div>
                            <?php
                            echo '
                                    <div class="col-xs-3">
                                    <a href="index.php?route=empincriment&userId=' . $employeeList["id"] . '" class="btn btn-success btn-block btn-flat">Incriments</a>                        
                                   </div>
                                 ';
                            ?>
                            <?php
                            echo '
                                    <div class="col-xs-3">
                                    <a href="index.php?route=emppromotion&userId=' . $employeeList["id"] . '" class="btn btn-warning btn-block btn-flat">Promotions</a>                        
                                   </div>
                                 ';
                            ?>
                            <?php
                            echo '
                                    <div class="col-xs-3">
                                    <a href="index.php?route=empleaveinfo&userId=' . $employeeList["id"] . '" class="btn btn-info btn-block btn-flat">Leave Application</a>                        
                                   </div>
                                 ';
                            ?>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>


</div>