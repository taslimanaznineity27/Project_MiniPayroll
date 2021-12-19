<div class="content-wrapper">
  <section class="content-header">
    <h1>Locations Management</h1>
    <ol class="breadcrumb">
      <li>
        <a href="home"><i class="fa fa-dashboard"></i> Home</a>
      </li>
      <li class="active">Locations Management</li>
    </ol>
  </section>
  <section class="content">
    <div class="box">
      <div class="box-header with-border">
        
        <button class="btn btn-primary">
          <a href="addlocation" style="color: white;"> Add Locations</a>
        </button>

      </div>
      <div class="box-body">
        <table class="table table-bordered table-striped dt-responsive tables" width="100%">
          <thead>
            <tr>
              <th style="width:10px">#</th>
              <th>Locations</th>
              <th>Locations Head</th>
              <th>Address Line 1</th>
              <th>Address Line 2</th>
              <th>City</th>
              <th>State</th>
              <th>Country</th>
              <th>Zip</th>
              <th>Aciton </th>
            </tr>
          </thead>
          <tbody>
            <?php
            $item = null;
            $value = null;

            $locations = LocationsController::crtShowLocation($item, $value);
            // var_dump($locations);
            foreach ($locations as $key => $location) {
              echo '<tr>
                        <td>' . ($key + 1) . '</td>
                        <td>' . $location["location_name"] . '</td>
                        <td>' . $location["address1"] . '</td>
                        <td>' . $location["address2"] . '</td>
                        <td>' . $location["city"] . '</td>
                        <td>' . $location["state"] . '</td>
                        <td>' . $location["state"] . '</td>
                        <td>' . $location["country"] . '</td>
                        <td>' . $location["zip"] . '</td>
                        <td>
                          <div class="btn-group">
                            <button class="btn btn-warning btnEditLocation" data-toggle="modal" data-target="#editUser" data-id="' . $location["id"] . '"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger btnDeleteLocation" data-toggle="modal" data-target="#deleteUser" data-id="' . $location["id"] . '"><i class="fa fa-times"></i></button>
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