<div class="content-wrapper">
  <section class="content-header">
    <h1>Designations Management</h1>
    <ol class="breadcrumb">
      <li>
        <a href="home"><i class="fa fa-dashboard"></i> Designations</a>
      </li>
      <li class="active">Designations Management</li>
    </ol>
  </section>
  <section class="content">
    <div class="box">
      <div class="box-header with-border">
        <button class="btn btn-primary">
          <a href="adddesign" style="color: white;"> Add Designations</a>
        </button>
      </div>
      <div class="box-body">
        <table class="table table-bordered table-striped dt-responsive tables" width="100%">
          <thead>
            <tr>
              <th style="width:10px">#</th>
              <th>Designations Name</th>
              <th>Company</th>
              <th>Department</th>
              <th>is_active</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $item = null;
            $value = null;
            $designations = DesignationsController::ctrShowDesignations($item, $value);
            // var_dump($designations);

            foreach ($designations as $key => $value) {
              echo '<tr>
              <td>' . ($key + 1) . '</td>
              <td>' . $value["designation_name"] . '</td>
              <td>' . $value["company_id"] . '</td>
              <td>' . $value["department_id"] . '</td>
              <td>' . $value["is_active"] . '</td>
              <td>
                <div class="btn-group">
                  <button class="btn btn-warning btnEditDesignation" data-toggle="modal" data-target="#editDesignation" idDesignation="' . $value["id"] . '"><i class="fa fa-pencil"></i></button>
                  <button class="btn btn-danger btnDeleteDesignation" idDesignation="' . $value["id"] . '"><i class="fa fa-times"></i></button>
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