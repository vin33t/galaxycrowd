<?php include('header.php');?>
<!-- / main menu-->
<div class="app-content content container-fluid">
  <div class="content-wrapper bg-white">
    <div class="content-body">
      <h1>IP Access Settings</h1><hr>
        <div class="row">
            <div class="col-md-3">
                <div class="bg-light p-1">
                    <h5 class="mb-1">IP security status</h5>
                    <button type="button" class="btn btn-success">Enable</button>
                    <button type="button" class="btn btn-danger" disabled>Disable</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="bg-light p-1">
                    <h5 class="mb-1">TAC/Security Code Access Status</h5>
                    <button type="button" class="btn btn-success" disabled>Enable</button>
                    <button type="button" class="btn btn-danger">Disable</button>
                </div>
            </div>
        </div>
        <form method="" action="" class="mt-2">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Enter your preferred IP Address</label>
                            <input type="text" class="form-control" placeholder="Enter IP Address" name=""/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>&nbsp;</label><br>
                            <button type="submit" class="btn btn-primary" name="">Add</button>&nbsp; 
                            <button type="submit" class="btn btn-warning" name="">Reset</button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="table-responsive mt-2">
                <table class="table table-bordered">
                    <thead class="bg-light">
                        <tr>
                            <th>Sr. No</th>
                            <th>IP Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="3" class="text-center"><b>No Record Found</b></td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </div>
  </div>
</div>

<!-- ////////////////////////////////////////////////////////////////////////////-->
<?php include('footer.php');?>