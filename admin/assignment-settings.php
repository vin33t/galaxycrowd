<?php include('header.php');?>
<!-- / main menu-->
<div class="app-content content container-fluid">
<div class="content-wrapper bg-white">
<div class="content-body">
<h1>Manual Transfer Settings</h1><hr>
<div class="row">
<div class="col-md-6">
<div class="card">
<div class="card-header bg-light h4 p-1">Bank Transfer</div>
<div class="card-body p-1">
<form method="post" action="">
  <div class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label>Handling Currency</label> :
      </div>
      <div class="col-md-8">
        <select class="form-control">
          <option>Select Currency</option>
          <option value="1">USD</option>
          <option value="2">INR</option>
          <option value="3">IDR</option>
        </select>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label>Account type</label> :
      </div>
      <div class="col-md-8">
        <select class="form-control">
          <option>Select Account Type</option>
          <option value="saving">Saving</option>
          <option value="current">Current</option>
        </select>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label>Nick Name</label> :
      </div>
      <div class="col-md-8">
        <input type="text" placeholder="Enter Nick Name" class="form-control" class="form-control"/>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label>Account Holder Name</label> :
      </div>
      <div class="col-md-8">
        <input type="text" placeholder="Account Holder Name" class="form-control" class="form-control" value="balrajaggarwal"/>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label>Account Number</label> :
      </div>
      <div class="col-md-8">
        <input type="text" placeholder="Enter Account Number" class="form-control" class="form-control"/>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label>Bank Name</label> :
      </div>
      <div class="col-md-8">
        <input type="text" placeholder="Enter Bank Name" class="form-control" class="form-control"/>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label>Bank Branch</label> :
      </div>
      <div class="col-md-8">
        <input type="text" placeholder="Enter Bank Branch" class="form-control" class="form-control"/>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label>Bank/IFSC Code</label> :
      </div>
      <div class="col-md-8">
        <input type="text" placeholder="Enter Bank/IFSC Code" class="form-control" class="form-control"/>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label>Status</label> :
      </div>
      <div class="col-md-8">
        <select class="form-control">
          <option value="in-active">In-Active</option>
          <option value="active">Active</option>
        </select>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label>Security Pin *</label> :
      </div>
      <div class="col-md-8">
        <input type="password" placeholder="" class="form-control" class="form-control" name="********"/>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Add New</button>
    </div>
  </div>
</form>
</div>
</div>
</div>

<div class="col-md-6">
<div class="card">
<div class="card-header bg-light h4 p-1">PayPal Payment</div>
<div class="card-body p-1">
<form method="post" action="">
  <div class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label>Handling Currency</label> :
      </div>
      <div class="col-md-8">
        <select class="form-control">
          <option>Select Currency</option>
          <option value="1">USD</option>
          <option value="2">INR</option>
          <option value="3">IDR</option>
        </select>
      </div>
    </div>
  </div>
    <div class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label>Paypal Account ID</label> :
      </div>
      <div class="col-md-8">
        <input type="text" placeholder="Paypal Account ID" class="form-control" class="form-control" value="balrajaggarwal"/>
      </div>
    </div>
  </div>
    <div class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label>Account Name</label> :
      </div>
      <div class="col-md-8">
        <input type="text" placeholder="Enter Account Name" class="form-control" class="form-control"/>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label>Status</label> :
      </div>
      <div class="col-md-8">
        <select class="form-control">
          <option value="in-active">In-Active</option>
          <option value="active">Active</option>
        </select>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label>Security Pin *</label> :
      </div>
      <div class="col-md-8">
        <input type="password" placeholder="" class="form-control" class="form-control" name="********"/>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Update Now</button>
    </div>
  </div>
</form>
</div>
</div>
</div>

<div class="col-md-6">
<div class="card">
<div class="card-header bg-light h4 p-1">Perfect Money</div>
<div class="card-body p-1">
<form method="post" action="">
  <div class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label>Handling Currency</label> :
      </div>
      <div class="col-md-8">
        <select class="form-control">
          <option>Select Currency</option>
          <option value="1">USD</option>
          <option value="2">INR</option>
          <option value="3">IDR</option>
        </select>
      </div>
    </div>
  </div>
    <div class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label>Perfect Money Account ID</label> :
      </div>
      <div class="col-md-8">
        <input type="text" placeholder="Paypal Account ID" class="form-control" class="form-control" value="UAF$741"/>
        <span class="text-danger">Please Enter the valid Perfect Money ID Ex:U1234567</span>
      </div>
    </div>
  </div>
    <div class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label>Account Name</label> :
      </div>
      <div class="col-md-8">
        <input type="text" placeholder="Enter Account Name" class="form-control" class="form-control"/>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label>Status</label> :
      </div>
      <div class="col-md-8">
        <select class="form-control">
          <option value="in-active">In-Active</option>
          <option value="active">Active</option>
        </select>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label>Security Pin *</label> :
      </div>
      <div class="col-md-8">
        <input type="password" placeholder="" class="form-control" class="form-control" name="********"/>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Update Now</button>
    </div>
  </div>
</form>
</div>
</div>
</div>

<div class="col-md-6">
<div class="card">
<div class="card-header bg-light h4 p-1">Payza Payment</div>
<div class="card-body p-1">
<form method="post" action="">
  <div class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label>Handling Currency</label> :
      </div>
      <div class="col-md-8">
        <select class="form-control">
          <option>Select Currency</option>
          <option value="1">USD</option>
          <option value="2">INR</option>
          <option value="3">IDR</option>
        </select>
      </div>
    </div>
  </div>
    <div class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label>Payza Account Email-ID</label> :
      </div>
      <div class="col-md-8">
        <input type="text" placeholder="Payza Account Email-ID" class="form-control" class="form-control" value="balrajaggarwal"/>
        <span class="text-danger">Please enter a valid email address</span>
      </div>
    </div>
  </div>
    <div class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label>Account Name</label> :
      </div>
      <div class="col-md-8">
        <input type="text" placeholder="Enter Account Name" class="form-control" class="form-control"/>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label>Status</label> :
      </div>
      <div class="col-md-8">
        <select class="form-control">
          <option value="in-active">In-Active</option>
          <option value="active">Active</option>
        </select>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label>Security Pin *</label> :
      </div>
      <div class="col-md-8">
        <input type="password" placeholder="" class="form-control" class="form-control" name="********"/>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Update Now</button>
    </div>
  </div>
</form>
</div>
</div>
</div>

<div class="col-md-6">
<div class="card">
<div class="card-header bg-light h4 p-1">Skrill Payment</div>
<div class="card-body p-1">
<form method="post" action="">
  <div class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label>Handling Currency</label> :
      </div>
      <div class="col-md-8">
        <select class="form-control">
          <option>Select Currency</option>
          <option value="1">USD</option>
          <option value="2">INR</option>
          <option value="3">IDR</option>
        </select>
      </div>
    </div>
  </div>
    <div class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label>Skrill Account Email-ID</label> :
      </div>
      <div class="col-md-8">
        <input type="text" placeholder="Payza Account Email-ID" class="form-control" class="form-control" value="balrajaggarwal"/>
        <span class="text-danger">Please enter a valid email address</span>
      </div>
    </div>
  </div>
    <div class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label>Account Name</label> :
      </div>
      <div class="col-md-8">
        <input type="text" placeholder="Enter Account Name" class="form-control" class="form-control"/>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label>Status</label> :
      </div>
      <div class="col-md-8">
        <select class="form-control">
          <option value="in-active">In-Active</option>
          <option value="active">Active</option>
        </select>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label>Security Pin *</label> :
      </div>
      <div class="col-md-8">
        <input type="password" placeholder="" class="form-control" class="form-control" name="********"/>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Update Now</button>
    </div>
  </div>
</form>
</div>
</div>
</div>

<div class="col-md-6">
<div class="card">
<div class="card-header bg-light h4 p-1">BKash Payment</div>
<div class="card-body p-1">
<form method="post" action="">
  <div class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label>Handling Currency</label> :
      </div>
      <div class="col-md-8">
        <select class="form-control">
          <option>Select Currency</option>
          <option value="1">USD</option>
          <option value="2">INR</option>
          <option value="3">IDR</option>
        </select>
      </div>
    </div>
  </div>
    <div class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label>BKash Account Number</label> :
      </div>
      <div class="col-md-8">
        <input type="text" placeholder="BKash Account Number" class="form-control" class="form-control" value="balrajaggarwal"/>
        <span class="text-danger">Please enter the Account Number</span>
      </div>
    </div>
  </div>
    <div class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label>Account Name</label> :
      </div>
      <div class="col-md-8">
        <input type="text" placeholder="Enter Account Name" class="form-control" class="form-control"/>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label>Status</label> :
      </div>
      <div class="col-md-8">
        <select class="form-control">
          <option value="in-active">In-Active</option>
          <option value="active">Active</option>
        </select>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label>Security Pin *</label> :
      </div>
      <div class="col-md-8">
        <input type="password" placeholder="" class="form-control" class="form-control" name="********"/>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Update Now</button>
    </div>
  </div>
</form>
</div>
</div>
</div>

<div class="col-md-6">
<div class="card">
<div class="card-header bg-light h4 p-1">Solid Trust Payment</div>
<div class="card-body p-1">
<form method="post" action="">
  <div class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label>Handling Currency</label> :
      </div>
      <div class="col-md-8">
        <select class="form-control">
          <option>Select Currency</option>
          <option value="1">USD</option>
          <option value="2">INR</option>
          <option value="3">IDR</option>
        </select>
      </div>
    </div>
  </div>
    <div class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label>Solid Trust Pay Account User Name</label> :
      </div>
      <div class="col-md-8">
        <input type="text" placeholder="Solid Trust Pay Account User Name" class="form-control" class="form-control" value="balrajaggarwal"/>
      </div>
    </div>
  </div>
    <div class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label>Account Name</label> :
      </div>
      <div class="col-md-8">
        <input type="text" placeholder="Enter Account Name" class="form-control" class="form-control"/>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label>Status</label> :
      </div>
      <div class="col-md-8">
        <select class="form-control">
          <option value="in-active">In-Active</option>
          <option value="active">Active</option>
        </select>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-md-4">
        <label>Security Pin *</label> :
      </div>
      <div class="col-md-8">
        <input type="password" placeholder="" class="form-control" class="form-control" name="********"/>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Update Now</button>
    </div>
  </div>
</form>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<?php include('footer.php');?>