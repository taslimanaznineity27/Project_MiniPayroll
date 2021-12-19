<div class="content-wrapper">
  <section class="content-header">
    <h1>Announcements Management</h1>
    <ol class="breadcrumb">
      <li>
        <a href="home"><i class="fa fa-dashboard"></i> HoAnnouncementsme</a>
      </li>
      <li class="active">Announcements Management</li>
    </ol>
  </section>
  <section class="content">
    <div class="box">
      <div class="box-header with-border">
        <button class="btn btn-primary">
          <a href="addannounc" style="color: white;"> Add Announcements</a>
        </button>
        
      </div>
      <div class="box-body">
        <table class="table table-bordered table-striped dt-responsive tables" width="100%">
          <thead>
            <tr>
              <th style="width:10px">#</th>
              <th>Title</th>
              <th>Published For</th>
              <th>Company</th>
              <th>Start Date</th>
              <th>End Date</th>
              <th>Aciton </th>
            </tr>
          </thead>
          <tbody>
            <?php
            $item = null;
            $value = null;
            $announcements = AnnouncementContorller::ctrShowAnnouncement($item, $value);
            // var_dump($announcements);

            foreach ($announcements as $key => $announcement) {
              echo '<tr>
              <td>' . ($key + 1) . '</td>
              <td>' . $announcement["title"] . '</td>
              <td>' . $announcement["department_id"] . '</td>
              <td>' . $announcement["company_id"] . '</td>
              <td>' . $announcement["start_date"] . '</td>
              <td>' . $announcement["end_date"] . '</td>
              <td>
                <div class="btn-group">
                  <button class="btn btn-warning btnEditAnnouncement" idAnnouncement="' . $announcement["id"] . '" data-toggle="modal" data-target="#editAnnouncement"><i class="fa fa-pencil"></i></button>
                  <button class="btn btn-danger btnDeleteAnnouncement" idAnnouncement="' . $announcement["id"] . '"><i class="fa fa-times"></i></button>
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