<div class="content-wrapper">
    <?php
    $item = 'id';
    $value = $_GET['userId'];
    $employeeList = EmployeeController::crtShowEmployeeList($item, $value);
    // var_dump($employeeList);
    ?>
    <section class="content-header">
        <h1>User Management</h1>
        <ol class="breadcrumb">
            <li>
                <a href="home"><i class="fa fa-dashboard"></i> Home</a>
            </li>
            <li class="active">Employee Promotions</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Employee Promotions</h3>
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
                <!-- //create emlpoyee incriment from here -->
                <div class="row">
                    <form action="" method="post">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Employee Name</label>
                                <select name="employee_id" id="employee_id" class="form-control">
                                    <option value="<?php echo $employeeList['id']; ?>" readonly><?php echo $employeeList['full_name']; ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Promotions Type</label>
                                <select name="promotion_type" id="promotion_type" class="form-control">
                                    <option value="">Select Incriment Type</option>
                                    <option value="Yearly">Yearly</option>
                                    <option value="Monthly">Monthly</option>
                                    <option value="Special">Special</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Old Degicnation</label>
                                <select name="old_deg_id" id="old_deg_id" class="form-control">
                                    
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
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">New Degicnation</label>
                                <select name="new_deg_id" id="new_deg_id" class="form-control">
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
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Promotions Date </label>
                                <input type="date" class="form-control" name="effected_date" id="effected_date" placeholder="Enter Incriment Date">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <?php 
                        $createEmployeePromotion = new EmployeepromotinController();
                        $createEmployeePromotion->ctrCreateEmployeePromotion();
                        ?>



                    </form>
                </div>
            </div>

            <div class="box-footer">Footer</div>
        </div>
    </section>
</div>