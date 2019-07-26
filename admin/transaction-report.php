<?php include('header.php');?>
<!-- / main menu-->

<div class="app-content content container-fluid">
<div class="content-wrapper bg-white">
<div class="content-body">
    <h1>Transaction Report</h1><hr>
      <ul class="nav nav-tabs tabs-design mt-2" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link" href="add-fund.php" role="tab">Add Fund</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="received-donations.php" role="tab">Received Donations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="direct-donations.php" role="tab">Direct Donations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="internal-wallet-transfer.php" role="tab">Internal Wallet Transfer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="fund-transfer-others.php" role="tab">Fund Transfer to Others</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="transfer-history.php" role="tab">Transfer History</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="transaction-report.php" role="tab">Transaction Report</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ewallet.php" role="tab">eWallet</a>
        </li>
      </ul>
    
    <form method="" action="">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" placeholder="Enter Username" name=""/>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Select Wallet</label>
                            <select name="" class="form-control">
                                <option>--- Select Wallet ---</option>
                                <option value="2">OS Contribution Wallet</option>
                                <option value="4">Coin Wallet</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Select Currency</label>
                            <select name="" class="form-control">
                                <option>--- Select Currency ---</option>
                                <option value="">INR</option>
                            </select>
                        </div>
                    </div>
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
                    <div class="col-md-3">
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
                            <th>Date</th>
                            <th>Description</th>
                            <th>Transaction Type</th>
                            <th>Wallet</th>
                            <th>Amount</th>
                            <th>Balance</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>08-Feb-2017 08:04:45</td>
                            <td>Fund Transfer to others (To newsaini)</td>
                            <td>Debit</td>
                            <td>OS Contribution Wallet</td>
                            <td>INR -775.00</td>
                            <td>INR 0.00</td>
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