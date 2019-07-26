<?php include('header.php');?>
<!-- / main menu-->

<div class="app-content content container-fluid">
<div class="content-wrapper bg-white">
<div class="content-body">
    <h1>eWallet</h1><hr>
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
          <a class="nav-link" href="transaction-report.php" role="tab">Transaction Report</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="ewallet.php" role="tab">eWallet</a>
        </li>
      </ul>
    <div class="row wallet-div">
        <div class="col-md-12">
            <h3>OS Donation Wallet</h3>
        </div>
        <div class="col-md-3">
            <div class="standard-gradient p-1 mt-1 text-white">
                <div class="media">
                    <div class="media-left media-middle pr-1"><img src="images/wallet.png" alt="wallet" class="media-object" style="width:70px;"/></div>
                    <div class="media-body media-middle">
                        Current Balance
                        <h2>INR 12,442.00</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="premium-gradient p-1 mt-1 text-white">
                <div class="media">
                    <div class="media-left media-middle pr-1"><img src="images/wallet.png" alt="wallet" class="media-object" style="width:70px;"/></div>
                    <div class="media-body media-middle">
                        Withdrawable
                        <h2>INR 784,40.00</h2>
                    </div>
                </div>
            </div>
        </div>
    </div><br><hr>
    <div class="row wallet-div">
        <div class="col-md-12">
            <h3>OS Contribution Wallet <a href="add-fund.php" class="btn btn-primary float-right">Add Fund</a></h3>
        </div>
        <div class="col-md-3">
            <div class="standard-gradient p-1 mt-1 text-white">
                <div class="media">
                    <div class="media-left media-middle pr-1"><img src="images/wallet.png" alt="wallet" class="media-object" style="width:70px;"/></div>
                    <div class="media-body media-middle">
                        Current Balance
                        <h2>INR 2,442.00</h2>
                    </div>
                </div>
            </div>
        </div>
    </div><br><hr>
    <div class="row wallet-div">
        <div class="col-md-12">
            <h3>Coin Wallet <a href="add-fund.php" class="btn btn-primary float-right">Add Fund</a></h3>
        </div>
    </div>
</div>   
</div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

<?php include('footer.php');?>