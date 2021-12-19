<div class="content-wrapper">
  <section class="content-header">
    <h1>Company Management</h1>
    <ol class="breadcrumb">
      <li>
        <a href="home"><i class="fa fa-dashboard"></i> Home</a>
      </li>
      <li class="active">Company Management</li>
    </ol>
  </section>
  <section class="content">
    <div class="box">
      <div class="box-header with-border">

        <button class="btn btn-primary">
          <a href="addcompany" style="color: white;"> Add Company</a>
        </button>

      </div>
      <div class="box-body">
        <table class="table table-bordered table-striped dt-responsive tables" width="100%">
          <thead>
            <tr>
              <th style="width:10px">#</th>
              <th>Company</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Country</th>
              <th>City</th>
              <th>Aciton </th>
            </tr>
          </thead>
          <tbody>
            <?php
            $item = null;
            $value = null;
            $companies = CompanyController::ctrShowCompanies($item, $value);
            // var_dump($companies);
            foreach ($companies as $key => $company) {
              echo '<tr>
                      <td>' . ($key + 1) . '</td>
                      <td>' . $company["company_name"] . '</td>
                      <td>' . $company["email"] . '</td>
                      <td>' . $company["contact_no"] . '</td>
                      <td>' . $company["location_id"] . '</td>
                      <td>' . $company["location_id"] . '</td>
                      <td>
                        <div class="btn-group">
                          <button class="btn btn-warning btnEditCompany"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger btnDeleteCompany"><i class="fa fa-times"></i></button>
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