<?php include('header.php');?>
<!-- / main menu-->

<div class="app-content content container-fluid">
<div class="content-wrapper bg-white">
<div class="content-body">
    <h1>Direct Contributors</h1><hr>
    <ul class="nav nav-tabs tabs-design mt-2">
        <li class="nav-item">
          <a class="nav-link active" href="direct-contributors.php">Direct Contributors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="assigned-contributors.php">Assigned Contributors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="flexible-contributors.php">Flexible Contributors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contribution-viewer.php">Contribution Viewer</a>
        </li>
    </ul>
    
    <form method="" action="">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>From Date</label>
                            <input type="date" class="form-control" placeholder="" name=""/>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>To Date</label>
                            <input type="date" class="form-control" placeholder="" name=""/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>&nbsp;</label><br>
                            <button type="submit" class="btn btn-primary" name="">Search</button>&nbsp; 
                            <button type="submit" class="btn btn-success" name="">Export</button>&nbsp;
                            <button type="submit" class="btn btn-danger" name="">Print</button>&nbsp;
                            <button type="submit" class="btn btn-warning" name="">Reset</button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="table-responsive mt-2">
                <table class="table table-bordered">
                    <thead class="bg-light">
                        <tr>
                            <th>Signed Up On</th>
                            <th>Username</th>
                            <th>Mobile Number</th>
                            <th>Email Address</th>
                            <th>Name</th>
                            <th>Last Contribution</th>
                            <th>Contribution Status</th>
                            <th>Contributors Group</th>
                            <th>Status</th>
                            <th>Last Donated On</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>30-Aug-2016</td>
                            <td>DHILLONTRAVEL</td>
                            <td>7696095602</td>
                            <td>karamjit.dhillon1978@gmail.com</td>
                            <td>KARAMJIT SINGH</td>
                            <td>Basic Contribution - 2</td>
                            <td>2</td>
                            <td>barmanand</td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td>07-Sep-2016</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <div class="row">
            <div class="col-md-12 text-right">
                <ul class="pagination">
                  <li class="page-item"><a class="page-link" href="#"><i class="icon-angle-left"></i> Previous</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item active"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next <i class="icon-angle-right"></i></a></li>
                </ul>
            </div>
        </div>    
</div>   
</div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

<?php include('footer.php');?>