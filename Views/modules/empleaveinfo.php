<div class="content-wrapper">
  <section class="content-header">
    <h1>Employee Management</h1>
    <ol class="breadcrumb">
      <li>
        <a href="home"><i class="fa fa-dashboard"></i> Home</a>
      </li>
      <li class="active">User Management</li>
    </ol>
  </section>
  <section class="content">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Title</h3>
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
        iv class="row">
        <div class="col">
          <form method="post" action="{{ route('employee.leave.store') }}">
            @csrf
            <div class="row">
              <div class="col-12">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <h5>Employee Name <span class="text-danger">*</span></h5>
                      <div class="controls">
                        <select name="employee_id" required="" class="form-control">
                          <option value="" selected="" disabled="">Select Employee
                            Name</option>
                          @foreach ($employees as $employee)
                          <option value="{{ $employee->id }}">
                            {{ $employee->name }}
                          </option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div> <!-- // end col md-6 -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <h5>Start Date <span class="text-danger">*</span></h5>
                      <div class="controls">
                        <input type="date" name="leave_start_date" class="form-control">
                      </div>
                    </div>
                  </div> <!-- // end col md-6 -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <h5>Leave Purpose <span class="text-danger">*</span></h5>
                      <div class="controls">
                        <select name="leave_purpose_id" id="leave_purpose_id" required="" class="form-control">
                          <option value="" selected="" disabled="">Select Leave purpose</option>
                          @foreach ($leave_purpose as $leave)
                          <option value="{{ $leave->id }}">
                            {{ $leave->leave_purpose }}
                          </option>
                          @endforeach
                          <option value="0">New Purpose</option>
                        </select>
                        <input type="text" name="name" id="add_another" class="form-control" placeholder="Write Purpose" style="display: none; margin: 4px;">
                      </div>
                    </div>
                  </div> <!-- // end col md-6 -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <h5>End Date <span class="text-danger">*</span></h5>
                      <div class="controls">
                        <input type="date" name="leave_end_date" class="form-control">
                      </div>
                    </div>
                  </div> <!-- // end col md-6 -->
                </div> <!-- // end row -->
                <div class="text-xs-right">
                  <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
                </div>
          </form>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.box-body -->
</div>

</div>
<div class="box-footer">Footer</div>
</div>
</section>
</div>