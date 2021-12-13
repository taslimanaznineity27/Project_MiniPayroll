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
      <li class="active">Employee Leave</li>
    </ol>
  </section>
  <section class="content">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Employee Leave</h3>
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
                <label for="">Leave Type</label>
                <select name="leave_purposes" id="leave_purposes" class="form-control">
                  <option value="">Select Leave Type</option>
                  <option value="Sick Leave">Sick Leave</option>
                  <option value="Casual Leave">Casual Leave</option>
                  <option value="Special Leave">Special Leave</option>
                  <option value="Other Leave">Other Leave</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Leave Start Date</label>
                <input type="date" class="form-control" name="leave_start_date" id="leave_start_date" placeholder="Enter Incriment Date">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Leave End Date</label>
                <input type="date" class="form-control" name="leave_end_date" id="leave_end_date" placeholder="Enter Incriment Date">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="">Remarks </label>
                <input type="text" class="form-control" name="remarks" id="remarks" placeholder="Enter Incriment Date">
              </div>
            </div>
            <div class="col-md-12">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <?php
            $createEmployeeLeave = new EmployeeleaveController();
            $createEmployeeLeave->ctrCreateEmployeeLeave();
            ?>
          </form>
        </div>
      </div>

      <div class="box-footer">Footer</div>
    </div>
  </section>
</div>