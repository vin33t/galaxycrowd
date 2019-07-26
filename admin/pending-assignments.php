<?php include('header.php');?>
<!-- / main menu-->
<div class="app-content content container-fluid">
  <div class="content-wrapper bg-white">
    <div class="content-body">
      <h1>My Assignments</h1><hr>
      <ul class="nav nav-tabs tabs-design mt-2" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#pending" role="tab">Pending</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#confirmed" role="tab">Confirmed</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#denied" role="tab">Denied</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#disputed" role="tab">Disputed</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="pending" role="tabpanel" aria-labelledby="home-tab">
            <form method="" action="">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Assignment ID</label>
                            <input type="text" class="form-control" placeholder="Assignment ID" name=""/>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Sender/Receiver Name</label>
                            <input type="text" class="form-control" placeholder="Sender/Receiver Name" name=""/>
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
                            <button type="submit" class="btn btn-primary" name="">Search</button> &nbsp; 
                            <button type="submit" class="btn btn-warning" name="">Reset</button>
                        </div>
                    </div>
                </div>
            </form>
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

        <div class="tab-pane fade show" id="confirmed" role="tabpanel" aria-labelledby="home-tab">
            <form method="" action="">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Assignment ID</label>
                            <input type="text" class="form-control" placeholder="Assignment ID" name=""/>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Sender/Receiver Name</label>
                            <input type="text" class="form-control" placeholder="Sender/Receiver Name" name=""/>
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
                            <button type="submit" class="btn btn-primary" name="">Search</button> &nbsp; 
                            <button type="submit" class="btn btn-warning" name="">Reset</button>
                        </div>
                    </div>
                </div>
            </form>
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

        <div class="tab-pane fade show" id="denied" role="tabpanel" aria-labelledby="home-tab">
            <form method="" action="">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Assignment ID</label>
                            <input type="text" class="form-control" placeholder="Assignment ID" name=""/>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Sender/Receiver Name</label>
                            <input type="text" class="form-control" placeholder="Sender/Receiver Name" name=""/>
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
                            <button type="submit" class="btn btn-primary" name="">Search</button> &nbsp; 
                            <button type="submit" class="btn btn-warning" name="">Reset</button>
                        </div>
                    </div>
                </div>
            </form>
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

        <div class="tab-pane fade show" id="disputed" role="tabpanel" aria-labelledby="home-tab">
            <form method="" action="">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Assignment ID</label>
                            <input type="text" class="form-control" placeholder="Assignment ID" name=""/>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Sender/Receiver Name</label>
                            <input type="text" class="form-control" placeholder="Sender/Receiver Name" name=""/>
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
                            <button type="submit" class="btn btn-primary" name="">Search</button> &nbsp; 
                            <button type="submit" class="btn btn-warning" name="">Reset</button>
                        </div>
                    </div>
                </div>
            </form>
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


      </div>
    </div>
  </div>
</div>

<!-- ////////////////////////////////////////////////////////////////////////////-->
<?php include('footer.php');?>