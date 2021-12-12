<div class="content-wrapper">
    <section class="content-header">
        <h1>User Management</h1>
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
                div class="row">
                <div class="col">
                    <form method="post" action="{{ route('employee.attn.store') }}">
                        @csrf
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
                                </div> <!-- // end Row  -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-bordered table-striped" style="width: 100%">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2" class="text-center" style="vertical-align: middle;">Sl</th>
                                                    <th rowspan="2" class="text-center" style="vertical-align: middle;">Employee List</th>
                                                    <th rowspan="2" class="text-center" style="vertical-align: middle;">Employee Login Logout
                                                    </th>
                                                    <th colspan="3" class="text-center" style="vertical-align: middle; width: 30%">Attendance
                                                        Status</th>
                                                </tr>
                                                {{-- <tr>
                                                                <th class="text-center btn present_all"
                                                                    style="display: table-cell; background-color: #000000">
                                                                    Present</th>
                                                                <th class="text-center btn leave_all"
                                                                    style="display: table-cell; background-color: #000000">
                                                                    Leave</th>

                                                            </tr> --}}

                                                {{-- <tr>


                                                                <th class="text-center btn present_all"
                                                                    style="display: table-cell; background-color: #000000">
                                                                    Present</th>
                                                                <th class="text-center btn leave_all"
                                                                    style="display: table-cell; background-color: #000000">
                                                                    Leave</th>
                                                                <th class="text-center btn absent_all"
                                                                    style="display: table-cell; background-color: #000000">
                                                                    Absent</th>
                                                            </tr> --}}
                                            </thead>

                                            <tbody>
                                                @foreach ($employees as $key => $employee)
                                                {{-- @dd($employee->id) --}}

                                                <tr id="div{{ $employee->id }}" class="text-center">
                                                    <input type="hidden" name="employee_id[]" value="{{ $employee->id }}">
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $employee->name }}</td>
                                                    <td colspan="3">
                                                        <div class="switch-toggle switch-3 switch-candy">
                                                            <label for="login">Login</label>
                                                            <input name="login[]" type="datetime-local" id="login{{ $key }}">
                                                            <label for="logout{{ $key }}">Logout</label>
                                                            <input name="logout[]" type="datetime-local" id="logout{{ $key }}">
                                                        </div>
                                                    </td>
                                                    <td colspan="2">
                                                        <div class="switch-toggle switch-2 switch-candy">

                                                            <input name="atten_status{{ $key }}" type="radio" value="Present" id="present{{ $key }}" checked="checked">
                                                            <label for="present{{ $key }}">Present</label>

                                                            <input name="atten_status{{ $key }}" value="Leave" type="radio" id="leave{{ $key }}">
                                                            <label for="leave{{ $key }}">Leave</label>

                                                            <input name="atten_status{{ $key }}" value="Absent" type="radio" id="absent{{ $key }}">
                                                            <label for="absent{{ $key }}">Absent</label>

                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div> <!-- // End Col md 12 -->
                                </div> <!-- // end Row  -->
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