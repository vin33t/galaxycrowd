<?php include('header.php');?>
<!-- / main menu-->

<div class="app-content content container-fluid">
<div class="content-wrapper bg-white">
<div class="content-body">
    <h1>Received Donations</h1><hr>
      <ul class="nav nav-tabs tabs-design mt-2" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link" href="add-fund.php" role="tab">Add Fund</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="received-donations.php" role="tab">Received Donations</a>
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
    
    <form method="" action="">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Select Floor</label>
                            <select name="" class="form-control">
                                <option value=''>--- Select ---</option>
                                    <optgroup label="Basic Contribution ">
                                        <option value="1:1">Floor1</option>
                                        <option value="1:2">Floor2</option>
                                        <option value="1:3">Floor3</option>
                                        <option value="1:4">Floor4</option>
                                        <option value="1:5">Floor5</option>
                                        <option value="1:6">Floor6</option>
                                        <option value="1:7">Floor7</option>
                                    </optgroup>
                                    <optgroup label="Standard Contribution ">
                                      <option value="2:1">Floor1</option>
                                      <option value="2:2">Floor2</option>
                                      <option value="2:3">Floor3</option>
                                      <option value="2:4">Floor4</option>
                                      <option value="2:5">Floor5</option>
                                      <option value="2:6">Floor6</option>
                                      <option value="2:7">Floor7</option>
                                    </optgroup>
                                    <optgroup label="Premium Contribution">
                                    <option value="3:1">Floor1</option>
                                    <option value="3:2">Floor2</option>
                                    <option value="3:3">Floor3</option>
                                    <option value="3:4">Floor4</option>
                                    <option value="3:5">Floor5</option>
                                    <option value="3:6">Floor6</option>
                                    <option value="3:7">Floor7</option>
                                    </optgroup>  
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Status</label>
                            <select name="" class="form-control">
                                <option value="">All</option>
                                <option value="">Confiormed</option>
                                <option value="">Pending</option>
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
                    <div class="col-md-6">
                        <div class="form-group">
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
                            <th>From Username</th>
                            <th>Invited by</th>
                            <th>Referral Group</th>
                            <th>Donation Floor</th>
                            <th>Payment Mode</th>
                            <th>Currency</th>
                            <th>Received Amount</th>
                            <th>Charges</th>
                            <th>Reward Amount</th>
                            <th>Net Amount</th>
                            <th>Floor</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>06-Sep-2016 21:32:49</td>
                            <td>DHILLONTRAVEL</td>
                            <td>balrajaggarwal</td>
                            <td>barmanand</td>
                            <td>Basic Contribution - 2</td>
                            <td>OSContributionWallet</td>
                            <td>INR</td>
                            <td>780.00</td>
                            <td>130.00</td>
                            <td>0.00</td>
                            <td>650.00</td>
                            <td>2</td>
                            <td><span class="badge bg-success">Confirmed</span></td>
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