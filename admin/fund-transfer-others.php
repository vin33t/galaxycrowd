<?php include('header.php');?>
<!-- / main menu-->

<div class="app-content content container-fluid">
<div class="content-wrapper bg-white">
<div class="content-body">
    <h1>Fund Transfer to Others</h1><hr>
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
          <a class="nav-link active" href="fund-transfer-others.php" role="tab">Fund Transfer to Others</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="transfer-history.php" role="tab">Transfer History</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="transaction-report.php" role="tab">Transaction Report</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ewallet.php" role="tab">eWallet</a>
        </li>
      </ul>
    
    <form method="" action="">
        <div class="row">
            <div class="form-group">
                <div class="col-md-2">
                    <label>From Wallet</label>
                </div>
                <div class="col-sm-6">
                    <select class="form-control">
                        <option value="">--- Select Wallet ---</option>
                        <option value="">OS Donation Wallet</option>
                    </select>
                </div>
            </div>
        </div> 
        <div class="row">
            <div class="form-group">
                <div class="col-md-2">
                    <label>From Currency</label>
                </div>
                <div class="col-sm-6">
                    <select class="form-control">
                        <option value="">--- Select Currency ---</option>
                        <option value="">INR</option>
                    </select>
                </div>
            </div>
        </div> 
        <div class="row">
            <div class="form-group">
                <div class="col-md-2">
                    <label>Available Balance</label>
                </div>
                <div class="col-sm-6">
                    Insufficient Balance
                </div>
            </div>
        </div> 
        </div>
    </form>
</div>   
</div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

<?php include('footer.php');?>