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
        <button class="btn btn-primary" data-toggle="modal" data-target="#addUser">
          Add User
        </button>
      </div>
      <div class="box-body">
        <table class="table table-bordered table-striped dt-responsive tables" width="100%">
          <thead>
            <tr>
              <th style="width:10px">#</th>
              <th>Name</th>
              <th>User</th>
              <th>Role</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Address</th>
              <th>Photo</th>
              <th>State</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $item =null;
            $value =null;

            $user = ControllerUsers::crtShowUsers($item, $value);
            // var_dump($user['username']);

            // foreach($user as $key => $value){
            //   echo $value['username'];
            // }
            foreach ($user as $key => $value) {
              echo '<tr>
                <td>'.($key+1).'</td>
                <td>'.$value["username"].'</td>
                <td>'.$value["email"].'</td>
                <td>'.$value["password"].'</td>
                <td>'.$value["profile_photo"].'</td>
                <td>'.$value["profile_bg"].'</td>
                <td>'.$value["role_users_id"].'</td>
                <td>'.$value["is_active"].'</td>
                <td>'.$value["last_login_ip"].'</td>
                <td>'.$value["last_login_date"].'</td>
                <td>
                  <div class="btn-group">
                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                  </div>
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