  <!-- select region modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="region">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title mb-4">Select Your Country</h5>
                    <div class="nk-country-region">
                        <ul class="country-list text-center gy-2">
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/arg.png" alt="" class="country-flag">
                                    <span class="country-name">Argentina</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/aus.png" alt="" class="country-flag">
                                    <span class="country-name">Australia</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/bangladesh.png" alt="" class="country-flag">
                                    <span class="country-name">Bangladesh</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/canada.png" alt="" class="country-flag">
                                    <span class="country-name">Canada <small>(English)</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">Centrafricaine</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">China</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/french.png" alt="" class="country-flag">
                                    <span class="country-name">France</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/germany.png" alt="" class="country-flag">
                                    <span class="country-name">Germany</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/iran.png" alt="" class="country-flag">
                                    <span class="country-name">Iran</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/italy.png" alt="" class="country-flag">
                                    <span class="country-name">Italy</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/mexico.png" alt="" class="country-flag">
                                    <span class="country-name">México</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/philipine.png" alt="" class="country-flag">
                                    <span class="country-name">Philippines</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/portugal.png" alt="" class="country-flag">
                                    <span class="country-name">Portugal</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/s-africa.png" alt="" class="country-flag">
                                    <span class="country-name">South Africa</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/spanish.png" alt="" class="country-flag">
                                    <span class="country-name">Spain</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/switzerland.png" alt="" class="country-flag">
                                    <span class="country-name">Switzerland</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/uk.png" alt="" class="country-flag">
                                    <span class="country-name">United Kingdom</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/english.png" alt="" class="country-flag">
                                    <span class="country-name">United State</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div><!-- .modal -->
    <!-- Department -->
    <div class="modal fade" id="addData">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross-sm"></em>
                </a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Add Employee</h5>
                    <form action="#" class="mt-2">
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="name"> Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="name" placeholder="Abu Bin Istiak">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="email"> Email</label>
                                    <div class="form-control-wrap">
                                        <input type="email" class="form-control" id="email" placeholder="info@softnio.com">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Department</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select">
                                            <option value="default_option">Select Department</option>
                                            <option value="bangladesh">Information Technology</option>
                                            <option value="canada">Finance</option>
                                            <option value="england">Marketing</option>
                                            <option value="pakistan">Human Resource</option>
                                            <option value="usa">Graphics</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="code">Designation</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="code" placeholder="Software developer">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="phone">Phone</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="phone" placeholder="+124 394-1787">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Address(Lane)</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select">
                                            <option value="default_option">Select Address</option>
                                            <option value="dhaka">House 165, Lane No 3, Mohakhali DOHS,Dhaka</option>
                                            <option value="london">199 Bishopsgate, London</option>
                                            <option value="mumbai">Narottam Morarji Marg, Mumbai</option>
                                            <option value="kualalampur">Ipoh, Johor Bahru, Kualalampur</option>
                                            <option value="spain">Gran Vía, Madrid.</option>
                                            <option value="usa">182/A Y-ra, Boston</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label">Varified</label>
                                    <div class="form-control-wrap">
                                        <ul class="custom-control-group g-3 align-center flex-wrap">
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" checked="" id="Check1">
                                                    <label class="custom-control-label" for="Check1">Email</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" checked="" id="Check2">
                                                    <label class="custom-control-label" for="Check2">KYC</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <button data-dismiss="modal" type="submit" class="btn btn-primary">Add Employee</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- .Edit Modal-Content -->
    <div class="modal fade" id="editData">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross-sm"></em>
                </a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Edit Employee</h5>
                    <form action="#" class="mt-2">
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="edit-name"> Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="edit-name" value="Abu Bin Istiak">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="edit-email"> Email</label>
                                    <div class="form-control-wrap">
                                        <input type="email" class="form-control" id="edit-email" value="info@softnio.com">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="dept">Department</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select" id="dept">
                                            <option value="default_option">Select Department</option>
                                            <option value="bangladesh">Information Technology</option>
                                            <option value="canada">Finance</option>
                                            <option value="england">Marketing</option>
                                            <option value="pakistan">Human Resource</option>
                                            <option value="usa">Graphics</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="edit-code">Designation</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="edit-code" value="Software developer">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="edit-phone">Phone</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="edit-phone" value="+124 394-1787">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Address(Lane)</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select">
                                            <option value="default_option">Select Address</option>
                                            <option value="dhaka">House 165, Lane No 3, Mohakhali DOHS,Dhaka</option>
                                            <option value="london">199 Bishopsgate, London</option>
                                            <option value="mumbai">Narottam Morarji Marg, Mumbai</option>
                                            <option value="kualalampur">Ipoh, Johor Bahru, Kualalampur</option>
                                            <option value="spain">Gran Vía, Madrid.</option>
                                            <option value="usa">182/A Y-ra, Boston</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Varified</label>
                                    <div class="form-control-wrap">
                                        <ul class="custom-control-group g-3 align-center flex-wrap">
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" checked="" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">Email</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" checked="" id="customCheck2">
                                                    <label class="custom-control-label" for="customCheck2">KYC</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <button data-dismiss="modal" type="submit" class="btn btn-primary">Update Employee</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- .Edit Modal-Content -->
    <div class="modal fade" id="deleteData">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross"></em></a>
                <div class="modal-body modal-body-sm text-center">
                    <div class="nk-modal py-4">
                        <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-cross bg-danger"></em>
                        <h4 class="nk-modal-title">Are You Sure ?</h4>
                        <div class="nk-modal-text mt-n2">
                            <p class="text-soft">This item will be removed permanently.</p>
                        </div>
                        <ul class="d-flex justify-content-center gx-4 mt-4">
                            <li>
                                <button data-dismiss="modal" id="deleteEvent" class="btn btn-success">Yes, Delete it</button>
                            </li>
                            <li>
                                <button data-dismiss="modal" data-toggle="modal" data-target="#editEventPopup" class="btn btn-danger btn-dim">Cancel</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .Delete Modal-content -->
    <!-- Dashboard -->
    <div class="modal fade" id="editDataDash">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
                <div class="modal-header">
                    <h5 class="modal-title">Edit Information</h5>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="form-group">
                            <label class="form-label" for="dept-name">Dept. Name</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="dept-name" value="Finance">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="author-name">Author Name</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="author-name" value="Abu Bin Istiak">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="designtn">Designation</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="designtn" value="Admin">
                            </div>
                        </div>
                        <div class="form-group">
                            <button data-dismiss="modal" type="submit" class="btn btn-primary">Save Informations</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- .Edit Modal-Content -->