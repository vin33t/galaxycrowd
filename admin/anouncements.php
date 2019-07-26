<?php include('header.php');?>
<!-- / main menu-->
<div class="app-content content container-fluid">
  <div class="content-wrapper bg-white">
    <div class="content-body">
      <h1>Announcements</h1><hr>
      <ul class="nav nav-tabs tabs-design mt-2" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" href="anouncements.php" role="tab">Announcements</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="downloads.php" role="tab">Downloads</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../policy-and-procedures.php" role="tab">Policies & Procedures</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../terms-of-use.php" role="tab">Terms of Use</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../privacy-policy.php" role="tab">Privacy Policy</a>
        </li>
      </ul>

         <div class="table-responsive mt-2">
                <table class="table table-bordered">
                    <thead class="bg-light">
                        <tr>
                            <th>Uploaded On</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="7" class="text-center"><b>No Record Found</b></td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </div>
  </div>
</div>

<!-- ////////////////////////////////////////////////////////////////////////////-->
<?php include('footer.php');?>