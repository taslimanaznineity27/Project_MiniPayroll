<div class="content-wrapper">
    <section class="content-header">
        <h1>User Management</h1>
        <ol class="breadcrumb">
            <li>
                <a href="home"><i class="fa fa-dashboard"></i> Home</a>
            </li>
            <li class="active">Employee Attendence Management</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">

            <div class="box-header with-border">
                <h3 class="box-title">Employee Attendence Management</h3>
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
                    <button class="btn btn-primary">
                        <a href="empattview" style="color: white;">Employee Attendance List</a>
                    </button>
                    <div class="col">
                        <form method="post">
                            <div class="row">
                                <div class="col-12">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Attendance Date <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="date" name="atten_date" class="form-control">
                                                </div>
                                            </div>
                                        </div> <!-- // End Col md 6 -->
                                    </div>
                                    <!-- // end Row  -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table table-bordered table-striped" style="width: 100%">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="1" class="text-center" style="vertical-align: middle;">Sl</th>
                                                        <th rowspan="2" class="text-center" style="vertical-align: middle;">Employee List</th>
                                                        <th rowspan="2" class="text-center" style="vertical-align: middle;">Login Logout
                                                        </th>
                                                        <th colspan="4" class="text-center" style="vertical-align: middle; width: 30%">Attendance
                                                            Status</th>
                                                    </tr>

                                                </thead>

                                                <tbody>
                                                    <?php
                                                    $item = null;
                                                    $value = null;
                                                    $employees = EmployeeController::crtShowEmployeeList($item, $value);
                                                    // var_dump($employees);
                                                    foreach ($employees as $key => $employee) {
                                                        // var_dump($key);
                                                        echo '<br>';
                                                        var_dump($employee['id']);
                                                    ?>
                                                        <tr id="div<?php echo $key; ?>" class="text-center">
                                                            <td class="text-center"><?php echo $key + 1; ?></td>
                                                            <input type="hidden" name="employee_id[]" value="<?php echo $employee['id']; ?>">
                                                            <td class="text-center"><?php echo $employee["full_name"]; ?></td>
                                                            <td class="text-center">
                                                                <input type="time" name="login[]" id="logout<?php echo $key; ?>" class=" form-control">
                                                            </td>
                                                            <td class="text-center">
                                                                <input type="time" name="logout[]" id="logout<?php echo $key; ?>" class="form-control">
                                                            </td>

                                                            <td colspan="2">
                                                                <div class="switch-toggle  switch-candy">

                                                                    <input name="atten_status<?php echo $key; ?>" type="radio" value="Present" id="present<?php echo $key; ?>" checked="checked">
                                                                    <label for="present<?php echo $key; ?>">Present</label>

                                                                    <input name="atten_status<?php echo $key; ?>" value="Leave" type="radio" id="leave<?php echo $key; ?>">
                                                                    <label for="leave<?php echo $key; ?>">Leave</label>

                                                                    <input name="atten_status<?php echo $key; ?>" value="Absent" type="radio" id="absent<?php echo $key; ?>">
                                                                    <label for="absent<?php echo $key; ?>">Absent</label>

                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- // End Col md 12 -->
                                    </div>
                                    <!-- // end Row  -->
                                    <div class="text-xs-right">
                                        <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
                                    </div>
                                </div>
                            </div>
                            <?php
                            $employeeAttend = new EmployeeAtteController();
                            $employeeAttend->ctrCreateEmployeeAtte();
                            ?>
                        </form>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
        </div>

    </section>
    <div class="box-footer">
        Footer
    </div>
</div>

</div>

</div>