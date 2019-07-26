<?php include('header.php');?>
<!-- / main menu-->
<div class="app-content content container-fluid">
  <div class="content-wrapper bg-white">
    <div class="content-body">
      <h1>Add Campaign</h1><hr>
      <ul class="nav nav-tabs mt-2" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#edit-campaign" role="tab">Edit/Update Campaign</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#campaign-preferences" role="tab">Campaign Preferences</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#campaign-perks" role="tab">Campaign Perks</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#campaign-images-videos" role="tab">Campaign Images/Videos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#campaign-updates" role="tab">Campaign Updates</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#campaign-comments" role="tab">Campaign Comments</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#campaign-subscriber" role="tab">Campaign Subscriber</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="edit-campaign" role="tabpanel" aria-labelledby="home-tab">
          <h3 class="mt-2">Recipient</h3>
          <p class="text-muted">TIP Who should funds be sent to?</p>
          <ul class="nav nav-tabs tabs-design mt-2" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#all" role="tab">All</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#someone-else" role="tab">Someone Else</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#business" role="tab">A Business</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#charity" role="tab">A Charity</a>
            </li>
          </ul>
          <div id="myTabContent1" class="tab-content">
            <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="home-tab">
              <form method="" action="">
                <div class="form-group mt-2">
                  <div class="row">
                    <div class="col-md-3"><label>Full Name</label></div>
                    <div class="col-md-9">Balraj Aggarwal</div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>Email Address</label></div>
                    <div class="col-md-9">balrajaggarwal002@gmail.com</div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>State</label></div>
                    <div class="col-md-9">Chandigarh</div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>Country</label></div>
                    <div class="col-md-9">India</div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>My Campaign Category *</label></div>
                    <div class="col-md-9">
                      <select class="form-control">
                        <option value="1" >Adoption</option>
                        <option value="2" >Animals</option>
                        <option value="3" >Art</option>
                        <option value="4" >Buy a Car</option>
                        <option value="5" >Buy a Home</option>
                        <option value="6" >Cancer Treatment</option>
                        <option value="7" >Churches & Religious Organizations</option>
                        <option value="8" >Organizations</option>
                        <option value="9" >Community</option>
                        <option value="10" >Crafts</option>
                        <option value="11" >Creative Projects</option>
                        <option value="12" >Dance</option>
                        <option value="13" >Design</option>
                        <option value="14" >Design a Website</option>
                        <option value="15" >Develop a Software</option>
                        <option value="16" >Education</option>
                        <option value="17" >Emergencies</option>
                        <option value="18" >Events</option>
                        <option value="19" >Family</option>
                        <option value="20" >Fashion</option>
                        <option value="21" >Film/Video</option>
                        <option value="22" >Food</option>
                        <option value="23" >For Individuals</option>
                        <option value="24" >For Kids</option>
                        <option value="25" >Fraternities and Sororities</option>
                        <option value="26" >Games</option>
                        <option value="27" >Get Out of Debt</option>
                        <option value="28" >Groups</option>
                        <option value="29" >Holidays</option>
                        <option value="30" >Medical & Health</option>
                        <option value="31" >Memorials & Funerals</option>
                        <option value="32" >Military & Veterans</option>
                        <option value="33" >Neighbours</option>
                        <option value="34" >Nonprofits & Charity</option>
                        <option value="35" >Pets</option>
                        <option value="36" >Politics and Public Office</option>
                        <option value="37" >Publish a Book</option>
                        <option value="38" >Repay a Loan</option>
                        <option value="39" >Run/Walk/Rides</option>
                        <option value="40" selected>Schools</option>
                        <option value="41" >Sports</option>
                        <option value="42" >To Fund My Business</option>
                        <option value="43" >To Have a Good Life</option>
                        <option value="44" >To Start a Business</option>
                        <option value="45" >Trip</option>
                        <option value="46" >Weddings & Honeymoons</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>Title of your Campaign *</label></div>
                    <div class="col-md-9"><input type="text" placeholder="" name="" value="" class="form-control"/></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>My Fundraising Target</label></div>
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
                      <span class="text-danger">Enter Minimum target amount 50000 INR ₹</span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>Short URL *</label></div>
                    <div class="col-md-9"><input type="text" placeholder="" name="" value="" class="form-control" disabled/></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>Story of the Project/Campaign *</label></div>
                    <div class="col-md-9"><textarea id="summernote" name="editordata" class="form-control" value=""></textarea></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>Upload your campaign image</label></div>
                    <div class="col-md-9">
                      <input type="file" id="upload_campaign_image" name="" value style="display:none;"/>
                      <label for="upload_campaign_image" class="btn btn-danger"><i class="icon-upload"></i> Upload</label><br>
                      <img src="images/upload-image.jpg" alt="upload image" class="img-fluid"/>
                      <div class="bg-light p-1 mt-2"><p class="m-0">TIP Project image needs to be at least 1200px by 650px. We suggest using a photograph with a clean and simple design. File dimensions : at least 1200px (wide) by 650px (high) - Max file size : 5MB - Accepted file formats : JPG, PNG or GIF.</p></div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>Campaign Video</label></div>
                    <div class="col-md-9">
                      <label>Vimeo Video</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text pl-1 pr-1">
                            <input type="radio" name="video"/>
                          </div>
                        </div>
                        <input type="text" class="form-control" name="" value="http://www.vimeo.com/">
                      </div>
                      <label class="mt-1">YouTube Video</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text pl-1 pr-1">
                            <input type="radio" name="video"/>
                          </div>
                        </div>
                        <input type="text" class="form-control" name="" value="http://www.youtube.com/watch?v=">
                      </div>
                      <div class="bg-light p-1 mt-2">
                        <ul class="pl-1 l-height-auto">
                          <li>Simply upload your video to vimeo.com and type in your video's URL here - it's completely free. <br>
                            <b>For example:</b> if your video's URL was www.vimeo.com/123456, you'd just need to type in 123456.<br>
                          <b>Note:</b> if your video is set to private, you will need to have a pro account.</li>
                          <li>We can also embed your project video from YouTube. Simply upload your video to youtube.com and enter your video url code here. <br>
                            <b>Note:</b> You should only include the letters and numbers between "watch?v=" and "&feature=youtu.be".<br>
                          <b>For example:</b> if your URL is "www.youtube.com/watch?v=87ObToBepkM&feature=youtu.be" or "https://youtu.be/87ObToBepkM", enter 87ObToBepkM only.</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-4"><label>Your Website URL</label></div>
                        <div class="col-md-8"><input type="text" placeholder="www.yourerbsite.com" name="" value="" class="form-control"/></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-4"><label>Your LinkedIn URL</label></div>
                        <div class="col-md-8"><input type="text" placeholder="www.yourerbsite.com" name="" value="" class="form-control"/></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-4"><label>Your Facebook URL</label></div>
                        <div class="col-md-8"><input type="text" placeholder="www.yourerbsite.com" name="" value="" class="form-control"/></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-4"><label>Your Twitter URL</label></div>
                        <div class="col-md-8"><input type="text" placeholder="www.yourerbsite.com" name="" value="" class="form-control"/></div>
                      </div>
                    </div>
                  </div>
                </div><hr>
                <div class="form-group">
                  <p><b>I have read and agree to the Terms & Conditions.</b></p>
                  <div><input type="checkbox" name=""/> I hereby confirm and agree with the company's terms and policies and declare that I have understood all the terms carefully. I also agree that I am creating my own campaign and all the contents, facts, figures, circumstances, rewards and promises that I might have published in my campaign, are the sole responsibility of me myself and company does not have any role to play in that. Content of my campaign cannot be held against the company in any situation whatsoever.</div>
                  <div class="mt-1 mb-1"><input type="checkbox" name=""/> I also agree and understand that OnlineSensor is not any kind of business opportunity and I have signed up on this platform to raise funds for my campaigns/projects and that I have signed up after carefully understanding the entire business model. I clearly understand that there are no investment or returns involved on this platform and I may or may not be able to raise money.</div>
                  <div class="bg-light p-1">
                    <p class="p-0"><b>Review/Feedback</b><br> Once you submit your campaigns/projects for review, we sometimes offer tips and advice to help give it the best chance of succeeding. When we provide the review/feedback, you'll find it here.
                    </p>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Create Campaign</button>
              </form>
            </div>
            <div class="tab-pane fade show" id="someone-else" role="tabpanel" aria-labelledby="home-tab">
              <form method="" action="">
                <div class="form-group mt-2">
                  <div class="row">
                    <div class="col-md-3"><label>Recipient's Full Name</label></div>
                    <div class="col-md-9"><input type="text" placeholder="" name="" value="" class="form-control"/></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>Recipient's Last Name</label></div>
                    <div class="col-md-9"><input type="text" placeholder="" name="" value="" class="form-control"/></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>Full Name</label></div>
                    <div class="col-md-9">Balraj Aggarwal</div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>Email Address</label></div>
                    <div class="col-md-9">balrajaggarwal002@gmail.com</div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>State</label></div>
                    <div class="col-md-9">Chandigarh</div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>Country</label></div>
                    <div class="col-md-9">India</div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>My Campaign Category *</label></div>
                    <div class="col-md-9">
                      <select class="form-control">
                        <option value="1" >Adoption</option>
                        <option value="2" >Animals</option>
                        <option value="3" >Art</option>
                        <option value="4" >Buy a Car</option>
                        <option value="5" >Buy a Home</option>
                        <option value="6" >Cancer Treatment</option>
                        <option value="7" >Churches & Religious Organizations</option>
                        <option value="8" >Organizations</option>
                        <option value="9" >Community</option>
                        <option value="10" >Crafts</option>
                        <option value="11" >Creative Projects</option>
                        <option value="12" >Dance</option>
                        <option value="13" >Design</option>
                        <option value="14" >Design a Website</option>
                        <option value="15" >Develop a Software</option>
                        <option value="16" >Education</option>
                        <option value="17" >Emergencies</option>
                        <option value="18" >Events</option>
                        <option value="19" >Family</option>
                        <option value="20" >Fashion</option>
                        <option value="21" >Film/Video</option>
                        <option value="22" >Food</option>
                        <option value="23" >For Individuals</option>
                        <option value="24" >For Kids</option>
                        <option value="25" >Fraternities and Sororities</option>
                        <option value="26" >Games</option>
                        <option value="27" >Get Out of Debt</option>
                        <option value="28" >Groups</option>
                        <option value="29" >Holidays</option>
                        <option value="30" >Medical & Health</option>
                        <option value="31" >Memorials & Funerals</option>
                        <option value="32" >Military & Veterans</option>
                        <option value="33" >Neighbours</option>
                        <option value="34" >Nonprofits & Charity</option>
                        <option value="35" >Pets</option>
                        <option value="36" >Politics and Public Office</option>
                        <option value="37" >Publish a Book</option>
                        <option value="38" >Repay a Loan</option>
                        <option value="39" >Run/Walk/Rides</option>
                        <option value="40" selected>Schools</option>
                        <option value="41" >Sports</option>
                        <option value="42" >To Fund My Business</option>
                        <option value="43" >To Have a Good Life</option>
                        <option value="44" >To Start a Business</option>
                        <option value="45" >Trip</option>
                        <option value="46" >Weddings & Honeymoons</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>Title of your Campaign *</label></div>
                    <div class="col-md-9"><input type="text" placeholder="" name="" value="" class="form-control"/></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>My Fundraising Target</label></div>
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
                      <span class="text-danger">Enter Minimum target amount 50000 INR ₹</span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>Short URL *</label></div>
                    <div class="col-md-9"><input type="text" placeholder="" name="" value="" class="form-control" disabled/></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>Story of the Project/Campaign *</label></div>
                    <div class="col-md-9"><textarea id="summernote1" name="editordata" class="form-control" value=""></textarea></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>Upload your campaign image</label></div>
                    <div class="col-md-9">
                      <input type="file" id="upload_campaign_image" name="" value style="display:none;"/>
                      <label for="upload_campaign_image" class="btn btn-danger"><i class="icon-upload"></i> Upload</label><br>
                      <img src="images/upload-image.jpg" alt="upload image" class="img-fluid"/>
                      <div class="bg-light p-1 mt-2"><p class="m-0">TIP Project image needs to be at least 1200px by 650px. We suggest using a photograph with a clean and simple design. File dimensions : at least 1200px (wide) by 650px (high) - Max file size : 5MB - Accepted file formats : JPG, PNG or GIF.</p></div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>Campaign Video</label></div>
                    <div class="col-md-9">
                      <label>Vimeo Video</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text pl-1 pr-1">
                            <input type="radio" name="video"/>
                          </div>
                        </div>
                        <input type="text" class="form-control" name="" value="http://www.vimeo.com/">
                      </div>
                      <label class="mt-1">YouTube Video</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text pl-1 pr-1">
                            <input type="radio" name="video"/>
                          </div>
                        </div>
                        <input type="text" class="form-control" name="" value="http://www.youtube.com/watch?v=">
                      </div>
                      <div class="bg-light p-1 mt-2">
                        <ul class="pl-1 l-height-auto">
                          <li>Simply upload your video to vimeo.com and type in your video's URL here - it's completely free. <br>
                            <b>For example:</b> if your video's URL was www.vimeo.com/123456, you'd just need to type in 123456.<br>
                          <b>Note:</b> if your video is set to private, you will need to have a pro account.</li>
                          <li>We can also embed your project video from YouTube. Simply upload your video to youtube.com and enter your video url code here. <br>
                            <b>Note:</b> You should only include the letters and numbers between "watch?v=" and "&feature=youtu.be".<br>
                          <b>For example:</b> if your URL is "www.youtube.com/watch?v=87ObToBepkM&feature=youtu.be" or "https://youtu.be/87ObToBepkM", enter 87ObToBepkM only.</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-4"><label>Your Website URL</label></div>
                        <div class="col-md-8"><input type="text" placeholder="www.yourerbsite.com" name="" value="" class="form-control"/></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-4"><label>Your LinkedIn URL</label></div>
                        <div class="col-md-8"><input type="text" placeholder="www.yourerbsite.com" name="" value="" class="form-control"/></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-4"><label>Your Facebook URL</label></div>
                        <div class="col-md-8"><input type="text" placeholder="www.yourerbsite.com" name="" value="" class="form-control"/></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-4"><label>Your Twitter URL</label></div>
                        <div class="col-md-8"><input type="text" placeholder="www.yourerbsite.com" name="" value="" class="form-control"/></div>
                      </div>
                    </div>
                  </div>
                </div><hr>
                <div class="form-group">
                  <p><b>I have read and agree to the Terms & Conditions.</b></p>
                  <div><input type="checkbox" name=""/> I hereby confirm and agree with the company's terms and policies and declare that I have understood all the terms carefully. I also agree that I am creating my own campaign and all the contents, facts, figures, circumstances, rewards and promises that I might have published in my campaign, are the sole responsibility of me myself and company does not have any role to play in that. Content of my campaign cannot be held against the company in any situation whatsoever.</div>
                  <div class="mt-1 mb-1"><input type="checkbox" name=""/> I also agree and understand that OnlineSensor is not any kind of business opportunity and I have signed up on this platform to raise funds for my campaigns/projects and that I have signed up after carefully understanding the entire business model. I clearly understand that there are no investment or returns involved on this platform and I may or may not be able to raise money.</div>
                  <div class="bg-light p-1">
                    <p class="p-0"><b>Review/Feedback</b><br> Once you submit your campaigns/projects for review, we sometimes offer tips and advice to help give it the best chance of succeeding. When we provide the review/feedback, you'll find it here.
                    </p>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Create Campaign</button>
              </form>
            </div>
            <div class="tab-pane fade show" id="business" role="tabpanel" aria-labelledby="home-tab">
              <form method="" action="">
                <div class="form-group mt-2">
                  <div class="row">
                    <div class="col-md-3"><label>Recipient Business Name</label></div>
                    <div class="col-md-9"><input type="text" placeholder="" name="" value="" class="form-control"/></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>Legal Representative First Name</label></div>
                    <div class="col-md-9"><input type="text" placeholder="" name="" value="" class="form-control"/></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>Legal Representative Last Name</label></div>
                    <div class="col-md-9"><input type="text" placeholder="" name="" value="" class="form-control"/></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>Full Name</label></div>
                    <div class="col-md-9">Balraj Aggarwal</div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>Email Address</label></div>
                    <div class="col-md-9">balrajaggarwal002@gmail.com</div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>State</label></div>
                    <div class="col-md-9">Chandigarh</div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>Country</label></div>
                    <div class="col-md-9">India</div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>My Campaign Category *</label></div>
                    <div class="col-md-9">
                      <select class="form-control">
                        <option value="1" >Adoption</option>
                        <option value="2" >Animals</option>
                        <option value="3" >Art</option>
                        <option value="4" >Buy a Car</option>
                        <option value="5" >Buy a Home</option>
                        <option value="6" >Cancer Treatment</option>
                        <option value="7" >Churches & Religious Organizations</option>
                        <option value="8" >Organizations</option>
                        <option value="9" >Community</option>
                        <option value="10" >Crafts</option>
                        <option value="11" >Creative Projects</option>
                        <option value="12" >Dance</option>
                        <option value="13" >Design</option>
                        <option value="14" >Design a Website</option>
                        <option value="15" >Develop a Software</option>
                        <option value="16" >Education</option>
                        <option value="17" >Emergencies</option>
                        <option value="18" >Events</option>
                        <option value="19" >Family</option>
                        <option value="20" >Fashion</option>
                        <option value="21" >Film/Video</option>
                        <option value="22" >Food</option>
                        <option value="23" >For Individuals</option>
                        <option value="24" >For Kids</option>
                        <option value="25" >Fraternities and Sororities</option>
                        <option value="26" >Games</option>
                        <option value="27" >Get Out of Debt</option>
                        <option value="28" >Groups</option>
                        <option value="29" >Holidays</option>
                        <option value="30" >Medical & Health</option>
                        <option value="31" >Memorials & Funerals</option>
                        <option value="32" >Military & Veterans</option>
                        <option value="33" >Neighbours</option>
                        <option value="34" >Nonprofits & Charity</option>
                        <option value="35" >Pets</option>
                        <option value="36" >Politics and Public Office</option>
                        <option value="37" >Publish a Book</option>
                        <option value="38" >Repay a Loan</option>
                        <option value="39" >Run/Walk/Rides</option>
                        <option value="40" selected>Schools</option>
                        <option value="41" >Sports</option>
                        <option value="42" >To Fund My Business</option>
                        <option value="43" >To Have a Good Life</option>
                        <option value="44" >To Start a Business</option>
                        <option value="45" >Trip</option>
                        <option value="46" >Weddings & Honeymoons</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>Title of your Campaign *</label></div>
                    <div class="col-md-9"><input type="text" placeholder="" name="" value="" class="form-control"/></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>My Fundraising Target</label></div>
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
                      <span class="text-danger">Enter Minimum target amount 50000 INR ₹</span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>Short URL *</label></div>
                    <div class="col-md-9"><input type="text" placeholder="" name="" value="" class="form-control" disabled/></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>Story of the Project/Campaign *</label></div>
                    <div class="col-md-9"><textarea id="summernote2" name="editordata" class="form-control" value=""></textarea></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>Upload your campaign image</label></div>
                    <div class="col-md-9">
                      <input type="file" id="upload_campaign_image" name="" value style="display:none;"/>
                      <label for="upload_campaign_image" class="btn btn-danger"><i class="icon-upload"></i> Upload</label><br>
                      <img src="images/upload-image.jpg" alt="upload image" class="img-fluid"/>
                      <div class="bg-light p-1 mt-2"><p class="m-0">TIP Project image needs to be at least 1200px by 650px. We suggest using a photograph with a clean and simple design. File dimensions : at least 1200px (wide) by 650px (high) - Max file size : 5MB - Accepted file formats : JPG, PNG or GIF.</p></div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>Campaign Video</label></div>
                    <div class="col-md-9">
                      <label>Vimeo Video</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text pl-1 pr-1">
                            <input type="radio" name="video"/>
                          </div>
                        </div>
                        <input type="text" class="form-control" name="" value="http://www.vimeo.com/">
                      </div>
                      <label class="mt-1">YouTube Video</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text pl-1 pr-1">
                            <input type="radio" name="video"/>
                          </div>
                        </div>
                        <input type="text" class="form-control" name="" value="http://www.youtube.com/watch?v=">
                      </div>
                      <div class="bg-light p-1 mt-2">
                        <ul class="pl-1 l-height-auto">
                          <li>Simply upload your video to vimeo.com and type in your video's URL here - it's completely free. <br>
                            <b>For example:</b> if your video's URL was www.vimeo.com/123456, you'd just need to type in 123456.<br>
                          <b>Note:</b> if your video is set to private, you will need to have a pro account.</li>
                          <li>We can also embed your project video from YouTube. Simply upload your video to youtube.com and enter your video url code here. <br>
                            <b>Note:</b> You should only include the letters and numbers between "watch?v=" and "&feature=youtu.be".<br>
                          <b>For example:</b> if your URL is "www.youtube.com/watch?v=87ObToBepkM&feature=youtu.be" or "https://youtu.be/87ObToBepkM", enter 87ObToBepkM only.</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-4"><label>Your Website URL</label></div>
                        <div class="col-md-8"><input type="text" placeholder="www.yourerbsite.com" name="" value="" class="form-control"/></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-4"><label>Your LinkedIn URL</label></div>
                        <div class="col-md-8"><input type="text" placeholder="www.yourerbsite.com" name="" value="" class="form-control"/></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-4"><label>Your Facebook URL</label></div>
                        <div class="col-md-8"><input type="text" placeholder="www.yourerbsite.com" name="" value="" class="form-control"/></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-4"><label>Your Twitter URL</label></div>
                        <div class="col-md-8"><input type="text" placeholder="www.yourerbsite.com" name="" value="" class="form-control"/></div>
                      </div>
                    </div>
                  </div>
                </div><hr>
                <div class="form-group">
                  <p><b>I have read and agree to the Terms & Conditions.</b></p>
                  <div><input type="checkbox" name=""/> I hereby confirm and agree with the company's terms and policies and declare that I have understood all the terms carefully. I also agree that I am creating my own campaign and all the contents, facts, figures, circumstances, rewards and promises that I might have published in my campaign, are the sole responsibility of me myself and company does not have any role to play in that. Content of my campaign cannot be held against the company in any situation whatsoever.</div>
                  <div class="mt-1 mb-1"><input type="checkbox" name=""/> I also agree and understand that OnlineSensor is not any kind of business opportunity and I have signed up on this platform to raise funds for my campaigns/projects and that I have signed up after carefully understanding the entire business model. I clearly understand that there are no investment or returns involved on this platform and I may or may not be able to raise money.</div>
                  <div class="bg-light p-1">
                    <p class="p-0"><b>Review/Feedback</b><br> Once you submit your campaigns/projects for review, we sometimes offer tips and advice to help give it the best chance of succeeding. When we provide the review/feedback, you'll find it here.
                    </p>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Create Campaign</button>
              </form>
            </div>
            <div class="tab-pane fade show" id="charity" role="tabpanel" aria-labelledby="home-tab">
              <form method="" action="">
                <div class="form-group mt-2">
                  <div class="row">
                    <div class="col-md-3"><label>Full Name</label></div>
                    <div class="col-md-9">Balraj Aggarwal</div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>Email Address</label></div>
                    <div class="col-md-9">balrajaggarwal002@gmail.com</div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>State</label></div>
                    <div class="col-md-9">Chandigarh</div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>Country</label></div>
                    <div class="col-md-9">India</div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>My Campaign Category *</label></div>
                    <div class="col-md-9">
                      <select class="form-control">
                        <option value="1" >Adoption</option>
                        <option value="2" >Animals</option>
                        <option value="3" >Art</option>
                        <option value="4" >Buy a Car</option>
                        <option value="5" >Buy a Home</option>
                        <option value="6" >Cancer Treatment</option>
                        <option value="7" >Churches & Religious Organizations</option>
                        <option value="8" >Organizations</option>
                        <option value="9" >Community</option>
                        <option value="10" >Crafts</option>
                        <option value="11" >Creative Projects</option>
                        <option value="12" >Dance</option>
                        <option value="13" >Design</option>
                        <option value="14" >Design a Website</option>
                        <option value="15" >Develop a Software</option>
                        <option value="16" >Education</option>
                        <option value="17" >Emergencies</option>
                        <option value="18" >Events</option>
                        <option value="19" >Family</option>
                        <option value="20" >Fashion</option>
                        <option value="21" >Film/Video</option>
                        <option value="22" >Food</option>
                        <option value="23" >For Individuals</option>
                        <option value="24" >For Kids</option>
                        <option value="25" >Fraternities and Sororities</option>
                        <option value="26" >Games</option>
                        <option value="27" >Get Out of Debt</option>
                        <option value="28" >Groups</option>
                        <option value="29" >Holidays</option>
                        <option value="30" >Medical & Health</option>
                        <option value="31" >Memorials & Funerals</option>
                        <option value="32" >Military & Veterans</option>
                        <option value="33" >Neighbours</option>
                        <option value="34" >Nonprofits & Charity</option>
                        <option value="35" >Pets</option>
                        <option value="36" >Politics and Public Office</option>
                        <option value="37" >Publish a Book</option>
                        <option value="38" >Repay a Loan</option>
                        <option value="39" >Run/Walk/Rides</option>
                        <option value="40" selected>Schools</option>
                        <option value="41" >Sports</option>
                        <option value="42" >To Fund My Business</option>
                        <option value="43" >To Have a Good Life</option>
                        <option value="44" >To Start a Business</option>
                        <option value="45" >Trip</option>
                        <option value="46" >Weddings & Honeymoons</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>Title of your Campaign *</label></div>
                    <div class="col-md-9"><input type="text" placeholder="" name="" value="" class="form-control"/></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>My Fundraising Target</label></div>
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
                      <span class="text-danger">Enter Minimum target amount 50000 INR ₹</span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>Short URL *</label></div>
                    <div class="col-md-9"><input type="text" placeholder="" name="" value="" class="form-control" disabled/></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>Story of the Project/Campaign *</label></div>
                    <div class="col-md-9"><textarea id="summernote2" name="editordata" class="form-control" value=""></textarea></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>Upload your campaign image</label></div>
                    <div class="col-md-9">
                      <input type="file" id="upload_campaign_image" name="" value style="display:none;"/>
                      <label for="upload_campaign_image" class="btn btn-danger"><i class="icon-upload"></i> Upload</label><br>
                      <img src="images/upload-image.jpg" alt="upload image" class="img-fluid"/>
                      <div class="bg-light p-1 mt-2"><p class="m-0">TIP Project image needs to be at least 1200px by 650px. We suggest using a photograph with a clean and simple design. File dimensions : at least 1200px (wide) by 650px (high) - Max file size : 5MB - Accepted file formats : JPG, PNG or GIF.</p></div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>Campaign Video</label></div>
                    <div class="col-md-9">
                      <label>Vimeo Video</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text pl-1 pr-1">
                            <input type="radio" name="video"/>
                          </div>
                        </div>
                        <input type="text" class="form-control" name="" value="http://www.vimeo.com/">
                      </div>
                      <label class="mt-1">YouTube Video</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text pl-1 pr-1">
                            <input type="radio" name="video"/>
                          </div>
                        </div>
                        <input type="text" class="form-control" name="" value="http://www.youtube.com/watch?v=">
                      </div>
                      <div class="bg-light p-1 mt-2">
                        <ul class="pl-1 l-height-auto">
                          <li>Simply upload your video to vimeo.com and type in your video's URL here - it's completely free. <br>
                            <b>For example:</b> if your video's URL was www.vimeo.com/123456, you'd just need to type in 123456.<br>
                          <b>Note:</b> if your video is set to private, you will need to have a pro account.</li>
                          <li>We can also embed your project video from YouTube. Simply upload your video to youtube.com and enter your video url code here. <br>
                            <b>Note:</b> You should only include the letters and numbers between "watch?v=" and "&feature=youtu.be".<br>
                          <b>For example:</b> if your URL is "www.youtube.com/watch?v=87ObToBepkM&feature=youtu.be" or "https://youtu.be/87ObToBepkM", enter 87ObToBepkM only.</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-4"><label>Your Website URL</label></div>
                        <div class="col-md-8"><input type="text" placeholder="www.yourerbsite.com" name="" value="" class="form-control"/></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-4"><label>Your LinkedIn URL</label></div>
                        <div class="col-md-8"><input type="text" placeholder="www.yourerbsite.com" name="" value="" class="form-control"/></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-4"><label>Your Facebook URL</label></div>
                        <div class="col-md-8"><input type="text" placeholder="www.yourerbsite.com" name="" value="" class="form-control"/></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-4"><label>Your Twitter URL</label></div>
                        <div class="col-md-8"><input type="text" placeholder="www.yourerbsite.com" name="" value="" class="form-control"/></div>
                      </div>
                    </div>
                  </div>
                </div><hr>
                <div class="form-group">
                  <p><b>I have read and agree to the Terms & Conditions.</b></p>
                  <div><input type="checkbox" name=""/> I hereby confirm and agree with the company's terms and policies and declare that I have understood all the terms carefully. I also agree that I am creating my own campaign and all the contents, facts, figures, circumstances, rewards and promises that I might have published in my campaign, are the sole responsibility of me myself and company does not have any role to play in that. Content of my campaign cannot be held against the company in any situation whatsoever.</div>
                  <div class="mt-1 mb-1"><input type="checkbox" name=""/> I also agree and understand that OnlineSensor is not any kind of business opportunity and I have signed up on this platform to raise funds for my campaigns/projects and that I have signed up after carefully understanding the entire business model. I clearly understand that there are no investment or returns involved on this platform and I may or may not be able to raise money.</div>
                  <div class="bg-light p-1">
                    <p class="p-0"><b>Review/Feedback</b><br> Once you submit your campaigns/projects for review, we sometimes offer tips and advice to help give it the best chance of succeeding. When we provide the review/feedback, you'll find it here.
                    </p>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Create Campaign</button>
              </form>
            </div>
          </div>
          </div>

          <div class="tab-pane fade show" id="campaign-preferences" role="tabpanel">
            <form method="" action="">
                <div class="form-group mt-2">
                  <div class="row">
                    <div class="col-md-3"><label>Subsscribe for Update</label></div>
                    <div class="col-md-9"><input type="checkbox" name="" value="" checked/></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>Send update notification mail</label></div>
                    <div class="col-md-9"><input type="checkbox" name="" value="" checked/></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>Show Email(Please Verify your E-mail ID)</label></div>
                    <div class="col-md-9"><input type="checkbox" name="" value=""/></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3"><label>Show Mobile No.(Please Verify your Mobile No.)</label></div>
                    <div class="col-md-9"><input type="checkbox" name="" value=""/></div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary" name="">Save</button>
            </form>
          </div>

        <div class="tab-pane fade show" id="campaign-perks" role="tabpanel">
            <div class="row mt-2">
                  <div class="col-md-9">
                    <form class="form-inline">
                      <input type="text" placeholder="Search Item" class="form-control" name="" value=""/>
                      <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                  </div>
                  <div class="col-md-3 text-right">
                    <a href="add-perk.php" class="btn btn-success">Add Perk</a>
                  </div>
                </div><hr>
                <div class="row">
                  <div class="col-md-4">
                    <img src="images/portfolio.jpg" alt="portfolio" class="img-fluid"/>
                  </div>
                  <div class="col-md-8">
                    <h2>Help me raise funds (FDGZFKYZ)</h2>
                    <span class="mr-1"><b>Created On</b> : 27-Jan-2016 05:33:05</span>
                    <span class="mr-1"><b>Status</b> : Draft</span>
                    <span><b>Assigned / Max Perks</b> : 0/1</span>
                    <p><b>Contribution Amount</b> : 500 INR</p>
                    <p>Shipping Location</p>
                    <p><b>Barbados</b> : 20 INR</p>
                  </div>
                </div><hr>
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
            
            <div class="tab-pane fade show" id="campaign-images-videos" role="tabpanel">
            <div class="row mt-2">
                  <div class="col-md-12 text-right">
                    <a href="" class="btn btn-warning">Add Video</a>
                    <a href="#" class="btn btn-danger">Add Image</a>
                  </div>
                </div><hr>
                <div class="row">
                  <div class="col-md-12">
                      <div class="table-responsive">
                          <table class="table table-bordered">
                              <thead>
                                  <tr>
                                      <th>Image/Video</th>
                                      <th>Status</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td><img src="images/fund-saving.jpg" alt="portfolio" class="img-fluid"/></td>
                                      <td><span class="badge badge-warning">Draft</span></td>
                                      <td><a hrf="#" class="btn btn-info">Submit for Approval</a> &nbsp;&nbsp; <a href="#" class="btn btn-danger">Delete</a></td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
                </div><hr>
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
            
            <div class="tab-pane fade show" id="campaign-updates" role="tabpanel">
            <div class="row mt-2">
                <div class="col-md-9">
                    <form class="form-inline">
                      <input type="text" placeholder="Search Item" class="form-control" name="" value=""/>
                      <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                  </div>
                  <div class="col-md-3 text-right">
                    <a href="javascript:void(0)" class="btn btn-success" data-toggle="modal" data-target="#addUpdate">Add Update</a>
                  </div>
                </div><hr>
                <div class="row">
                  <div class="col-md-12">
                      <div class="table-responsive">
                          <table class="table table-bordered">
                              <thead>
                                  <tr>
                                      <th>Message</th>
                                      <th>Status</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</td>
                                      <td><span class="badge badge-warning">Draft</span></td>
                                      <td><a hrf="#" class="btn btn-info">Submit for Approval</a> &nbsp;&nbsp; <a href="#" class="btn btn-danger">Delete</a></td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
                </div><hr>
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
            
            <div class="tab-pane fade show" id="campaign-comments" role="tabpanel">
            <div class="row mt-2">
                <div class="col-md-12">
                    <form class="form-inline">
                      <input type="text" placeholder="Search Item" class="form-control" name="" value=""/>
                      <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                  </div>
                </div><hr>
                <div class="row">
                  <div class="col-md-12">
                      <div class="table-responsive">
                          <table class="table table-bordered">
                              <thead>
                                  <tr>
                                      <th>&nbsp;</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td class="text-center"><b>No data found</b></td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
                </div><hr>
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
            
            <div class="tab-pane fade show" id="campaign-subscriber" role="tabpanel">
            <div class="row mt-2">
                <div class="col-md-12">
                    <form class="form-inline">
                      <input type="text" placeholder="Search Item" class="form-control" name="" value=""/>
                      <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                  </div>
                </div><hr>
                <div class="row">
                  <div class="col-md-12">
                      <div class="table-responsive">
                          <table class="table table-bordered">
                              <thead>
                                  <tr>
                                      <th>Create On</th>
                                      <th>User Details</th>
                                      <th>Campaign Details</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td colspan="3" class="text-center"><b>No data found</b></td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
                </div><hr>
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
    </div>
  </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<?php include('footer.php');?>