<?php include('header.php');?>
<!-- / main menu-->
<div class="app-content content container-fluid">
  <div class="content-wrapper bg-white">
    <div class="content-body">
      <h1>Withdrawals</h1><hr>
      <ul class="nav nav-tabs tabs-design mt-2" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#withdraw_fund" role="tab">Withdraw your Fund</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#pending" role="tab">Pending</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#processing" role="tab">Processing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#transferred" role="tab">Transferred</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#cancelled" role="tab">Cancelled</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="withdraw_fund" role="tabpanel" aria-labelledby="home-tab">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"><b>No Record Found</b></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="tab-pane fade show" id="pending" role="tabpanel" aria-labelledby="home-tab">
            <h3>Pending Withdrawals</h3>
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
                            <th>Requested On</th>
                            <th>Payment Mode</th>
                            <th>Currency</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Transaction Id</th>
                            <th>Expected Date of Credit	</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="8" class="text-center"><b>No Record Found</b></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="tab-pane fade show" id="processing" role="tabpanel" aria-labelledby="home-tab">
            <h3>Processing Withdrawals</h3>
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
                            <th>Requested On</th>
                            <th>Payment Mode</th>
                            <th>Currency</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Transaction Id</th>
                            <th>Expected Date of Credit	</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="8" class="text-center"><b>No Record Found</b></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="tab-pane fade show" id="transferred" role="tabpanel" aria-labelledby="home-tab">
           <h3>Transferred Withdrawals</h3>
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
                            <th>Requested On</th>
                            <th>Payment Mode</th>
                            <th>Currency</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Transaction Id</th>
                            <th>Expected Date of Credit	</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="8" class="text-center"><b>No Record Found</b></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="tab-pane fade show" id="cancelled" role="tabpanel" aria-labelledby="home-tab">
           <h3>Cancelled Withdrawals</h3>
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
                            <th>Requested On</th>
                            <th>Payment Mode</th>
                            <th>Currency</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Transaction Id</th>
                            <th>Expected Date of Credit	</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="8" class="text-center"><b>No Record Found</b></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


      </div>
    </div>
  </div>
</div>

<!-- ////////////////////////////////////////////////////////////////////////////-->
<?php include('footer.php');?>