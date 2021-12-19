<div class="content-wrapper">
    <section class="content-header">
        <h1>User Management</h1>
        <ol class="breadcrumb">
            <li>
                <a href="home"><i class="fa fa-dashboard"></i> Home</a>
            </li>
            <li class="active">User Attencedance Management</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Attencedance Management</h3>
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
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="5%">SL</th>
                                <th>Name</th>
                                <th>Employee ID</th>
                                <th>Date </th>
                                <th>Login </th>
                                <th>Log Out </th>
                                <th>Status </th>
                                <th width="20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $item = null;
                            $value = null;
                            $empattnView  = EmployeeAtteController::ctrShowEmployeeAtte($item, $value);
                            // var_dump($empattnView);
                            foreach ($empattnView as $key => $value)
                                //get employee name
                            // $item = 'id';
                            // $com_value = $value["empoloyee_id"];
                            // $emp_name = EmployeeController::crtShowEmployeeList($item, $com_value);
                        
                                echo '
                                    <tr>
                                        <td>' . ($key + 1) . '</td>
                                        <td>' . $value["empoloyee_id"] . '</td>
                                        <td>' . $value["empoloyee_id"] . '</td>
                                        <td>' . $value["atten_date"] . '</td>
                                        <td>' . $value["login"] . '</td>
                                        <td>' . $value["logout"] . '</td>
                                        <td>' . $value["atten_status"] . '</td>
                            
                                <td>
                                <div class="btn-group">
                                    
                                    <a href="index.php?route=viewempprofile&userId=' . $value["empoloyee_id"] . '" class="btn btn-info btn-xs"><i class="fa fa-eye"></i></a>                        
                                    <button class="btn btn-danger btn-xs btnDeleteUser" userId="' . $value["empoloyee_id"] . '" attDate="' . $value["atten_date"] .'"><i class="fa fa-times"></i></button>
                                </div>  
                                </td>
                        </tr>';                            
                            ?>

                        </tbody>
                        <tfoot>
                        </tfoot>
                    </table>
                </div>



            </div>
            <div class="box-footer">Footer</div>
        </div>
    </section>
</div>