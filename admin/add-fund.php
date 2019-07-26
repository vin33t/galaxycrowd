<?php include('header.php');?>
<!-- / main menu-->
<div class="app-content content container-fluid">
  <div class="content-wrapper bg-white">
    <div class="content-body">
      <h1>Withdrawals</h1><hr>
      <ul class="nav nav-tabs tabs-design mt-2" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" href="add-fund.php" role="tab">Add Fund</a>
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
          <a class="nav-link" href="transaction-report.php" role="tab">Transaction Report</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ewallet.php" role="tab">eWallet</a>
        </li>
      </ul>
        
        <div class="row">
            <div class="col-md-3 col-xs-6 text-center">
                <a href="javascript:void(0)" data-toggle="modal" data-target="#addFund">
                <img src="images/payment-1.png" alt="payment" class="img-fluid mt-1 mb-1"/><br>
                Credit/Debit Card/Net Banking CashFree- Indian Users only
                </a>
            </div>
            <div class="col-md-3 col-xs-6 text-center">
                <a href="javascript:void(0)" data-toggle="modal" data-target="#addFund">
                <img src="images/payment-2.png" alt="payment" class="img-fluid mt-1 mb-1"/><br>
                Credit/Debit Card/Net Banking EBS -Indian Users only
                </a>
            </div>
            <div class="col-md-3 col-xs-6 text-center">
                <a href="javascript:void(0)" data-toggle="modal" data-target="#addFund">
                <img src="images/payment-3.png" alt="payment" class="img-fluid mt-1 mb-1"/><br>
                Accept Debit/Credit Card & Paypal
                </a>
            </div>
            <div class="col-md-3 col-xs-6 text-center">
                <a href="javascript:void(0)" data-toggle="modal" data-target="#addFund">
                <img src="images/payment-4.png" alt="payment" class="img-fluid mt-1 mb-1"/><br>
                Accept Bitcoin
                </a>
            </div>
            <div class="col-md-3 col-xs-6 text-center">
                <a href="javascript:void(0)" data-toggle="modal" data-target="#addFund">
                <img src="images/payment-5.png" alt="payment" class="img-fluid mt-1 mb-1"/><br>
                Pay through PayTM Wallet
                </a>
            </div>
        </div>
    </div>
  </div>
</div>

<!-- ////////////////////////////////////////////////////////////////////////////-->
<?php include('footer.php');?>