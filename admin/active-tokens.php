<?php include('header.php');?>
<!-- / main menu-->
<div class="app-content content container-fluid">
  <div class="content-wrapper bg-white">
    <div class="content-body">
      <h1>Contributions Used</h1><hr>
      <ul class="nav nav-tabs tabs-design mt-2" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link" href="transfer-tokens.php" role="tab">Transfer System Fees Code</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="active-tokens.php" role="tab">Contributions Used</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="used-tokens.php" role="tab">System Fees Code Used</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="transfered-tokens.php" role="tab">System Fees Code Transferred</a>
        </li>
      </ul>
        
         <div class="table-responsive mt-2">
                <table class="table table-bordered">
                    <thead class="bg-light">
                        <tr>
                            <th>Sr. No</th>
                            <th>Date</th>
                            <th>Promo Code</th>
                            <th>Contribution Status</th>
                            <th>Amount</th>
                            <th>Currency</th>
                            <th>From</th>
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