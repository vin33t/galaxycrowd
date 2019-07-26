<?php include('header.php');?>
<!-- / main menu-->
<div class="app-content content container-fluid">
  <div class="content-wrapper bg-white">
    <div class="content-body">
      <h1>Add Perk</h1><hr>
                <form method="" action="">
            <div class="form-group mt-2">
              <div class="row">
                <div class="col-md-3"><label>Perk Type</label></div>
                <div class="col-md-9">
                    <select name="" class="form-control">
                        <option value="">Product</option>
                        <option value="">Service</option>
                    </select>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-3"><label>Perk Name</label></div>
                <div class="col-md-9"><input type="text" name="" value="" placeholder="" class="form-control"/></div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-3"><label>Perk Description</label></div>
                <div class="col-md-9"><textarea id="summernote" name="editordata" class="form-control" value=""></textarea></div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-3"><label>Perk Image</label></div>
                <div class="col-md-9">
                  <input type="file" id="upload_perk_image" name="" value style="display:none;"/>
                  <label for="upload_perk_image" class="btn btn-danger"><i class="icon-upload"></i> Upload</label><br>
                  <img src="images/upload-image.jpg" alt="upload image" class="img-fluid"/>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-3"><label>Contribution Amount</label></div>
                <div class="col-md-9">
                  <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <select class="form-control">
                        <option value="2" data-minigoal = "50000" selected='selected'>INR ₹</option>
                        <option value="1" data-minigoal = "1000" >USD $</option>
                        <option value="9" data-minigoal = "1000" >EUR €</option>
                        <option value="10" data-minigoal = "1000" >GBP £</option>
                        <option value="13" data-minigoal = "1" >BTC ฿</option>
                      </select>
                    </div>
                  </div>
                  <input type="number" class="form-control" name="" value="0">
                </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-3"><label>Number Available</label></div>
                <div class="col-md-9"><input type="number" class="form-control" name="" placeholder=""/></div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-3"><label>Estimated Delivery Date</label></div>
                <div class="col-md-9"><input type="date" placeholder="" name="" value="" class="form-control"/></div>
              </div>
            </div>
            
            <div class="form-group">
              <div class="row">
                <div class="col-md-3"><label>Shipping Location</label></div>
                <div class="col-md-9"><input type="checkbox" id="perk-shipping-location-show" placeholder="" name="" value=""/>
                <div id="perk-shipping-location-div" class="mt-1" style="display:none;">
                    <form method="" >
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Shipping Address</th>
                                        <th>Shipping Fee</th>
                                        <th><button type="button" onclick="addPerkLocation();" class="btn btn-warning">Add Location</button></th>
                                    </tr>
                                </thead>
                                <tbody id="perkRowAdd">
                                    <tr>
                                        <td>
                                            <select class="form-control" name="country">
                                                <option value="">World Wide</option>
                                                <option value="">India</option>
                                                <option value="">USA</option>
                                                <option value="">Dubai</option>
                                            </select>
                                        </td>
                                        <td>
                                          <div class="input-group">
                                              <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                  <select class="form-control">
                                                    <option value="2" data-minigoal = "50000" selected='selected'>INR ₹</option>
                                                    <option value="1" data-minigoal = "1000" >USD $</option>
                                                    <option value="9" data-minigoal = "1000" >EUR €</option>
                                                    <option value="10" data-minigoal = "1000" >GBP £</option>
                                                    <option value="13" data-minigoal = "1" >BTC ฿</option>
                                                  </select>
                                                </div>
                                              </div>
                                              <input type="number" class="form-control" name="" value="0">
                                            </div>  
                                        </td>
                                        <td>&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
                </div>
              </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-primary">Create Campaign</button>
          </form>
    </div>
  </div>
</div>

<!-- ////////////////////////////////////////////////////////////////////////////-->
<?php include('footer.php');?>