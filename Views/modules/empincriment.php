<div class="content-wrapper">
    <section class="content-header">
        <h1>User Management</h1>
        <ol class="breadcrumb">
            <li>
                <a href="home"><i class="fa fa-dashboard"></i> Home</a>
            </li>
            <li class="active">Employee Incriments</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Employee Incriments</h3>
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
                <?php
                $item = 'id';
                $value = $_GET['userId'];
                $employeeList = EmployeeController::crtShowEmployeeList($item, $value);
                // var_dump($employeeList); 
                ?>
                <div class="row">
                    <form method="POST" enctype="multipart/form-data">
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
                                <label for="">Incriment Type</label>
                                <select name="incriments_type" id="incriments_type" class="form-control">
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
                                <label for="">Incriment Amount</label>
                                <input type="text" class="form-control" name="incriments_salary" id="incriments_salary" placeholder="Enter Incriment Amount">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Incriment Date</label>
                                <input type="date" class="form-control" name="effected_date" id="effected_date" placeholder="Enter Incriment Date">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Incriment Description</label>
                                <input type="hidden" name="present_salary" id="present_salary" value="<?php echo $employeeList['salary']; ?>">
                                <textarea name="remark" id="remark" cols="4" rows="2" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <?php
                        $createIncriment = new EmployeeincrimentsController();
                        $createIncriment->crtCreateEmployeeincriments();
                        ?>
                    </form>
                </div>


 


            </div>

            <div class="box-footer">Footer</div>
        </div>
    </section>




</div>