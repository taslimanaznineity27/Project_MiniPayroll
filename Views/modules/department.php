<div class="content-wrapper">
  <section class="content-header">
    <h1>Department Management</h1>
    <ol class="breadcrumb">
      <li>
        <a href="home"><i class="fa fa-dashboard"></i> Home</a>
      </li>
      <li class="active">Department Management</li>
    </ol>
  </section>
  <section class="content">
    <div class="box">
      <div class="box-header with-border">
        <button class="btn btn-primary">
          <a href="adddept" style="color: white;"> Add Department</a>
        </button>
      </div>
      <div class="box-body">
        <table class="table table-bordered table-striped dt-responsive tables" width="100%">
          <thead>
            <tr>
              <th style="width:10px">#</th>
              <th>Department Name</th>
              <th>Company</th>
              <th>Department Head</th>
              <th>is_active</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $item = null;
            $value = null;

            $departments = DepartmentController::ctrShowDepartments($item, $value);
            // var_dump($departments);
            foreach ($departments as $key => $department) {
              echo '<tr>
                      <td>' . ($key + 1) . '</td>
                      <td>' . $department["department_name"] . '</td>
                      <td>' . $department["company_id"] . '</td>
                      <td>' . $department["department_head"] . '</td>
                      <td>' . $department["is_active"] . '</td>
                      <td>
                        <div class="btn-group"
                          <button class="btn btn-warning btnEditDepartment" ><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger btnDeleteDepartment"><i class="fa fa-times"></i></button>
                        </div>
                      </td>
                    </tr>';
            }


            ?>


          </tbody>

        </table>
      </div>



      <div class="box-footer">Footer</div>
    </div>
  </section>
</div>