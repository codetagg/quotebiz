@extends('service_provider.layout.app')
@section('title', 'Quotes')

@section('styling')
 <link rel="stylesheet" href="{{ asset('frontend-assets/assets/css/editors/quill.css?ver=2.9.1') }}">
@endsection
@section('content')

 <!-- content @s -->
                   <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-msg">
                                    <div class="nk-msg-aside">
                                        <div class="nk-msg-nav">
                                            <ul class="nk-msg-menu">
                                              
                                                <li class="nk-msg-menu-item active"><a href="">Active</a></li>
                                                <li class="nk-msg-menu-item"><a href="">Won</a></li>
                                                <li class="nk-msg-menu-item"><a href="">Done</a></li>
                                                <li class="nk-msg-menu-item"><a href="">Lost</a></li>
                                               
                                                <li class="nk-msg-menu-item ml-auto"><a href="" class="search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a></li>
                                            </ul><!-- .nk-msg-menu -->
                                            <div class="search-wrap" data-search="search">
                                                <div class="search-content">
                                                    <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                                    <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by user or message">
                                                    <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                                </div>
                                            </div><!-- .search-wrap -->
                                        </div><!-- .nk-msg-nav -->
                                        <div class="nk-msg-list" data-simplebar>
                                            <div class="nk-msg-item current" data-msg-id="1">
                                                <div class="nk-msg-media user-avatar">
                                                    <img src="{{asset('/images/avatar/b-sm.jpg') }}" alt="">
                                                </div>
                                                <div class="nk-msg-info">
                                                    <div class="nk-msg-from">
                                                        <div class="nk-msg-sender">
                                                            <div class="name">Abu Bin Ishtiyak</div>
                                                            <div class="lable-tag dot bg-pink"></div>
                                                        </div>
                                                        <div class="nk-msg-meta">
                                                            <div class="attchment"><em class="icon ni ni-clip-h"></em></div>
                                                            <div class="date">12 Jan</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-msg-context">
                                                        <div class="nk-msg-text">
                                                            <h6 class="title">Unable to select currency when booking.</h6>
                                                            <p>Hello team, I am facing problem as i can not book a page.</p>
                                                        </div>
                                                        <div class="nk-msg-lables">
                                                            <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .nk-msg-item -->
                                            <div class="nk-msg-item is-unread" data-msg-id="3">
                                                <div class="nk-msg-media user-avatar bg-purple">
                                                    <span>MJ</span>
                                                </div>
                                                <div class="nk-msg-info">
                                                    <div class="nk-msg-from">
                                                        <div class="nk-msg-sender">
                                                            <div class="name">Mayme Johnston</div>
                                                        </div>
                                                        <div class="nk-msg-meta">
                                                            <div class="date">11 Jan</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-msg-context">
                                                        <div class="nk-msg-text">
                                                            <h6 class="title">I can not submit kyc application</h6>
                                                            <p>Hello support! I can not upload my documents on kyc application.</p>
                                                        </div>
                                                        <div class="nk-msg-lables">
                                                            <div class="unread"><span class="badge badge-primary">2</span></div>
                                                            <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .nk-msg-item -->
                                            <div class="nk-msg-item" data-msg-id="1">
                                                <div class="nk-msg-media user-avatar bg-success">
                                                    <span>EA</span>
                                                </div>
                                                <div class="nk-msg-info">
                                                    <div class="nk-msg-from">
                                                        <div class="nk-msg-sender">
                                                            <div class="name">Ethan Anderson</div>
                                                        </div>
                                                        <div class="nk-msg-meta">
                                                            <div class="date">16 Dec, 2019</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-msg-context">
                                                        <div class="nk-msg-text">
                                                            <h6 class="title">Unable to select currency when booking.</h6>
                                                            <p>Hello team, I am facing problem as i can not book a room.</p>
                                                        </div>
                                                        <div class="nk-msg-lables">
                                                            <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .nk-msg-item -->
                                            <div class="nk-msg-item" data-msg-id="1">
                                                <div class="nk-msg-media user-avatar">
                                                    <img src="{{asset('/images/avatar/c-sm.jpg') }}" alt="">
                                                </div>
                                                <div class="nk-msg-info">
                                                    <div class="nk-msg-from">
                                                        <div class="nk-msg-sender">
                                                            <div class="name">Jose Peterson</div>
                                                            <div class="lable-tag dot bg-pink"></div>
                                                        </div>
                                                        <div class="nk-msg-meta">
                                                            <div class="date">14 Dec, 2019</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-msg-context">
                                                        <div class="nk-msg-text">
                                                            <h6 class="title">Have not received bitcoin yet.</h6>
                                                            <p>Hey! I recently bitcoin from you. But still have not received yet.</p>
                                                        </div>
                                                        <div class="nk-msg-lables">
                                                            <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .nk-msg-item -->
                                            <div class="nk-msg-item" data-msg-id="12">
                                                <div class="nk-msg-media user-avatar">
                                                    <img src="{{asset('/images/avatar/d-sm.jpg') }}" alt="">
                                                </div>
                                                <div class="nk-msg-info">
                                                    <div class="nk-msg-from">
                                                        <div class="nk-msg-sender">
                                                            <div class="name">Amanda Moore</div>
                                                        </div>
                                                        <div class="nk-msg-meta">
                                                            <div class="date">12 Dec, 2019</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-msg-context">
                                                        <div class="nk-msg-text">
                                                            <h6 class="title">Wallet needs to verify.</h6>
                                                            <p>Hello, I already varified my Wallet but it still showing needs to verify alert.</p>
                                                        </div>
                                                        <div class="nk-msg-lables">
                                                            <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .nk-msg-item -->
                                        </div><!-- .nk-msg-list -->
                                    </div><!-- .nk-msg-aside -->
                                    <div class="nk-msg-body bg-white profile-shown">
                                        <div class="nk-msg-head">
                                           <div class="row">
                                               <div class="col-md-3">
                                                  <div class=" d-none d-lg-block">
                                                        <a href="html/lms/courses.html" class="d-flex align-items-center">
                                                            <div class="user-avatar sq bg-purple">
                                                                <span>GD</span>
                                                            </div>
                                                            <div class="ml-3">
                                                                <h6 class="title mb-1">Graphics Design</h6>
                                                                <span class="sub-text">4 SubCategories</span>
                                                                <span class="sub-text">Posted 24m ago</span>
                                                            </div>
                                                        </a>
                                                      <div class="mt-3">
                                                            <ul class="chat-profile-options pl-1">
                                                                <li><a class="chat-option-link" href="#"><em class="icon icon-circle bg-light ni ni-edit-alt"></em><span class="lead-text text-muted pl-1">043xxxx xxx</span></a></li>
                                                                <li><a class="chat-option-link chat-search-toggle" href="#"><em class="icon icon-circle bg-light ni ni-search"></em><span class="lead-text text-muted pl-1">djxxx@gmail.com</span></a></li>
                                                                <li><a class="chat-option-link" href="#"><em class="icon icon-circle bg-light ni ni-circle-fill"></em><span class="lead-text text-muted pl-1">Melbourne</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div> 
                                               </div>
                                                 <div class="col-md-2 col-sm-12 d-sm-block .d-md-none d-lg-none">
                                                    <div class="row mb-3">
                                                      
                                                   <div class=" col-sm-4 d-lg-none"><a href="#" class="btn btn-icon btn-trigger nk-msg-hide ml-n1"><em class="icon ni ni-arrow-left"></em></a></div>
                                                <ul class="col-sm-4 nk-msg-actions">
                                                    <li><a href="#" class="btn btn-dim btn-sm btn-outline-light"><em class="icon ni ni-check"></em><span>Mark as Won</span></a></li>
                                                    <!-- <li><span class="badge badge-dim badge-success badge-sm"><em class="icon ni ni-check"></em><span>Closed</span></span></li> -->
                                                    <li class="d-lg-none"><a href="#" class="btn btn-icon btn-sm btn-white btn-light profile-toggle"><em class="icon ni ni-info-i"></em></a></li>
                                                    <li class="dropdown">
                                                        <a href="#" class="btn btn-icon btn-sm btn-white btn-light dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="#"><em class="icon ni ni-user-add"></em><span>Actions / Controls</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-archive"></em><span>Change Status</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-done"></em><span>Mark as Won</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                               </div>
                                           </div>
                                               <div class="col-md-7 col-sm-2 mt-3">
                                                <div class="row">
                                                  
                                                   <div class=" col-md-4 col-sm-4">
                                                        <h6 class="title mb-1">Budget</h6>
                                                        <span class="sub-text">$800</span>
                                                    </div>
                                                    <div class=" col-md-4 col-sm-4">
                                                        <h6 class="title mb-1">Job Date</h6>
                                                        <span class="sub-text">27/07/2022</span>
                                                    </div>
                                                    <div class=" col-md-4 col-sm-4">
                                                        <h6 class="title mb-1">Job Location</h6>
                                                        <span class="sub-text">Doncaster</span>
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <h6 class="title mb-1">Comment</h6>
                                                        <span class="sub-text">I need someone wash my car sometime next week. Could someone please contact me ASAP</span>
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <p style="font-size: 16px;"><b>Customers appreciate information specific to their job.</b></p>  
                                                           
                                                            <div class="card-inner p-0">
                                                                <!-- Create the editor container -->
                                                                <div class="quill-minimal">
                                                                    <h3>This is a heading 3</h3>
                                                                    <br>
                                                                    <p>Hello World!</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="col-12 mt-2 mb-2">
                                                    <div class="custom-control ">
                                                        <input type="checkbox" class="custom-control-input" id="latest-sale">
                                                        <label class="custom-control-label" for="latest-sale"><b>Save this comment as a template</b></label>
                                                    </div>
                                                </div>

                                                </div>
                                               </div>
                                               <div class="col-md-2 col-sm-12 d-none d-lg-block">
                                                   <div class="d-lg-none"><a href="#" class="btn btn-icon btn-trigger nk-msg-hide ml-n1"><em class="icon ni ni-arrow-left"></em></a></div>
                                                <ul class="nk-msg-actions">
                                                    <li><a href="#" class="btn btn-dim btn-sm btn-outline-light"><em class="icon ni ni-check"></em><span>Mark as Won</span></a></li>
                                                    <!-- <li><span class="badge badge-dim badge-success badge-sm"><em class="icon ni ni-check"></em><span>Closed</span></span></li> -->
                                                    <li class="d-lg-none"><a href="#" class="btn btn-icon btn-sm btn-white btn-light profile-toggle"><em class="icon ni ni-info-i"></em></a></li>
                                                    <li class="dropdown">
                                                        <a href="#" class="btn btn-icon btn-sm btn-white btn-light dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="#"><em class="icon ni ni-user-add"></em><span>Actions / Controls</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-archive"></em><span>Change Status</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-done"></em><span>Mark as Won</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                               </div>
                                               <div class="col-md-6">
                                               </div>
                                               <div class="col-md-6 mt-4" style="display: inherit;">
                                                <div >
                                                <h4 class="p-2" style="width: 150px;">10 Credits</h4>
                                                </div>
                                                
                                                <div class="input-group mb-3">
                                                 <label style="position: absolute;bottom: 41px;">Amount</label>
                                                  <input type="text" class="form-control rounded-left" style="height: 50px" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                  <div class="input-group-append">
                                                    <button class="btn btn-success" style="background-color: #816bff !important;border-color: #816bff !important" id="basic-addon2">Send Quote</button>
                                                  </div>
                                                </div>
                                               </div>
                                           </div>
                                            <div class="nk-msg-head-meta">
                                               
                                                    
                                                
                                            </div>
                                            
                                            <a href="#" class="nk-msg-profile-toggle profile-toggle active"><em class="icon ni ni-arrow-left"></em></a>
                                        </div><!-- .nk-msg-head -->
                                      <div class="nk-chat-body" id="chatbody">
                                        <div class="nk-chat-panel" data-simplebar>
                                            <div class="chat is-you">
                                                <div class="chat-avatar">
                                                    <div class="user-avatar bg-purple">
                                                        <span>IH</span>
                                                    </div>
                                                </div>
                                                <div class="chat-content">
                                                    <div class="chat-bubbles">
                                                        <div class="chat-bubble">
                                                            <div class="chat-msg"> Hello! </div>
                                                            <ul class="chat-msg-more">
                                                                <li class="d-none d-sm-block"><a href="#" class="btn btn-icon btn-sm btn-trigger"><em class="icon ni ni-reply-fill"></em></a></li>
                                                                <li>
                                                                    <div class="dropdown">
                                                                        <a href="#" class="btn btn-icon btn-sm btn-trigger dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li class="d-sm-none"><a href="#"><em class="icon ni ni-reply-fill"></em> Reply</a></li>
                                                                                <li><a href="#"><em class="icon ni ni-pen-alt-fill"></em> Edit</a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash-fill"></em> Remove</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="chat-bubble">
                                                            <div class="chat-msg"> I found an issues when try to purchase the product. </div>
                                                            <ul class="chat-msg-more">
                                                                <li class="d-none d-sm-block"><a href="#" class="btn btn-icon btn-sm btn-trigger"><em class="icon ni ni-reply-fill"></em></a></li>
                                                                <li>
                                                                    <div class="dropdown">
                                                                        <a href="#" class="btn btn-icon btn-sm btn-trigger dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li class="d-sm-none"><a href="#"><em class="icon ni ni-reply-fill"></em> Reply</a></li>
                                                                                <li><a href="#"><em class="icon ni ni-pen-alt-fill"></em> Edit</a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash-fill"></em> Remove</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <ul class="chat-meta">
                                                        <li>Iliash Hossain</li>
                                                        <li>29 Apr, 2020 4:28 PM</li>
                                                    </ul>
                                                </div>
                                            </div><!-- .chat -->
                                            <div class="chat is-me">
                                                <div class="chat-content">
                                                    <div class="chat-bubbles">
                                                        <div class="chat-bubble">
                                                            <div class="chat-msg"> Thanks for inform. We just solved the issues. Please check now. </div>
                                                            <ul class="chat-msg-more">
                                                                <li class="d-none d-sm-block"><a href="#" class="btn btn-icon btn-sm btn-trigger"><em class="icon ni ni-reply-fill"></em></a></li>
                                                                <li>
                                                                    <div class="dropdown">
                                                                        <a href="#" class="btn btn-icon btn-sm btn-trigger dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-sm">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li class="d-sm-none"><a href="#"><em class="icon ni ni-reply-fill"></em> Reply</a></li>
                                                                                <li><a href="#"><em class="icon ni ni-pen-alt-fill"></em> Edit</a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash-fill"></em> Remove</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <ul class="chat-meta">
                                                        <li>Abu Bin Ishtiyak</li>
                                                        <li>29 Apr, 2020 4:12 PM</li>
                                                    </ul>
                                                </div>
                                            </div><!-- .chat -->
                                            <div class="chat is-you">
                                                <div class="chat-avatar">
                                                    <div class="user-avatar bg-purple">
                                                        <span>IH</span>
                                                    </div>
                                                </div>
                                                <div class="chat-content">
                                                    <div class="chat-bubbles">
                                                        <div class="chat-bubble">
                                                            <div class="chat-msg"> This is really cool. </div>
                                                            <ul class="chat-msg-more">
                                                                <li class="d-none d-sm-block"><a href="#" class="btn btn-icon btn-sm btn-trigger"><em class="icon ni ni-reply-fill"></em></a></li>
                                                                <li>
                                                                    <div class="dropdown">
                                                                        <a href="#" class="btn btn-icon btn-sm btn-trigger dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li class="d-sm-none"><a href="#"><em class="icon ni ni-reply-fill"></em> Reply</a></li>
                                                                                <li><a href="#"><em class="icon ni ni-pen-alt-fill"></em> Edit</a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash-fill"></em> Remove</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="chat-bubble">
                                                            <div class="chat-msg"> It’s perfect. Thanks for letting me know. </div>
                                                            <ul class="chat-msg-more">
                                                                <li class="d-none d-sm-block"><a href="#" class="btn btn-icon btn-sm btn-trigger"><em class="icon ni ni-reply-fill"></em></a></li>
                                                                <li>
                                                                    <div class="dropdown">
                                                                        <a href="#" class="btn btn-icon btn-sm btn-trigger dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li class="d-sm-none"><a href="#"><em class="icon ni ni-reply-fill"></em> Reply</a></li>
                                                                                <li><a href="#"><em class="icon ni ni-pen-alt-fill"></em> Edit</a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash-fill"></em> Remove</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <ul class="chat-meta">
                                                        <li>Iliash Hossain</li>
                                                        <li>29 Apr, 2020 4:28 PM</li>
                                                    </ul>
                                                </div>
                                            </div><!-- .chat -->
                                            <div class="chat-sap">
                                                <div class="chat-sap-meta"><span>12 May, 2020</span></div>
                                            </div><!-- .chat-sap -->
                                            <div class="chat is-you">
                                                <div class="chat-avatar">
                                                    <div class="user-avatar bg-purple">
                                                        <span>IH</span>
                                                    </div>
                                                </div>
                                                <div class="chat-content">
                                                    <div class="chat-bubbles">
                                                        <div class="chat-bubble">
                                                            <div class="chat-msg"> Hey, I am facing problem as i can not login into application. Can you help me to reset my password? </div>
                                                            <ul class="chat-msg-more">
                                                                <li class="d-none d-sm-block"><a href="#" class="btn btn-icon btn-sm btn-trigger"><em class="icon ni ni-reply-fill"></em></a></li>
                                                                <li>
                                                                    <div class="dropdown">
                                                                        <a href="#" class="btn btn-icon btn-sm btn-trigger dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li class="d-sm-none"><a href="#"><em class="icon ni ni-reply-fill"></em> Reply</a></li>
                                                                                <li><a href="#"><em class="icon ni ni-pen-alt-fill"></em> Edit</a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash-fill"></em> Remove</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <ul class="chat-meta">
                                                        <li>3:49 PM</li>
                                                    </ul>
                                                </div>
                                            </div><!-- .chat -->
                                            <div class="chat is-me">
                                                <div class="chat-content">
                                                    <div class="chat-bubbles">
                                                        <div class="chat-bubble">
                                                            <div class="chat-msg"> Definately. We are happy to help you. </div>
                                                            <ul class="chat-msg-more">
                                                                <li class="d-none d-sm-block"><a href="#" class="btn btn-icon btn-sm btn-trigger"><em class="icon ni ni-reply-fill"></em></a></li>
                                                                <li>
                                                                    <div class="dropdown">
                                                                        <a href="#" class="btn btn-icon btn-sm btn-trigger dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-sm">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li class="d-sm-none"><a href="#"><em class="icon ni ni-reply-fill"></em> Reply</a></li>
                                                                                <li><a href="#"><em class="icon ni ni-pen-alt-fill"></em> Edit</a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash-fill"></em> Remove</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <ul class="chat-meta">
                                                        <li>3:55 PM</li>
                                                    </ul>
                                                </div>
                                            </div><!-- .chat -->
                                            <div class="chat is-you">
                                                <div class="chat-avatar">
                                                    <div class="user-avatar bg-purple">
                                                        <span>IH</span>
                                                    </div>
                                                </div>
                                                <div class="chat-content">
                                                    <div class="chat-bubbles">
                                                        <div class="chat-bubble">
                                                            <div class="chat-msg"> Thank you! Let me know when it done. </div>
                                                            <ul class="chat-msg-more">
                                                                <li class="d-none d-sm-block"><a href="#" class="btn btn-icon btn-sm btn-trigger"><em class="icon ni ni-reply-fill"></em></a></li>
                                                                <li>
                                                                    <div class="dropdown">
                                                                        <a href="#" class="btn btn-icon btn-sm btn-trigger dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li class="d-sm-none"><a href="#"><em class="icon ni ni-reply-fill"></em> Reply</a></li>
                                                                                <li><a href="#"><em class="icon ni ni-pen-alt-fill"></em> Edit</a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash-fill"></em> Remove</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <ul class="chat-meta">
                                                        <li>3:49 PM</li>
                                                    </ul>
                                                </div>
                                            </div><!-- .chat -->
                                            <div class="chat is-me">
                                                <div class="chat-content">
                                                    <div class="chat-bubbles">
                                                        <div class="chat-bubble">
                                                            <div class="chat-msg"> We just reset your account. Please check your email for verification. </div>
                                                            <ul class="chat-msg-more">
                                                                <li class="d-none d-sm-block"><a href="#" class="btn btn-icon btn-sm btn-trigger"><em class="icon ni ni-reply-fill"></em></a></li>
                                                                <li>
                                                                    <div class="dropdown">
                                                                        <a href="#" class="btn btn-icon btn-sm btn-trigger dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-sm">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li class="d-sm-none"><a href="#"><em class="icon ni ni-reply-fill"></em> Reply</a></li>
                                                                                <li><a href="#"><em class="icon ni ni-pen-alt-fill"></em> Edit</a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash-fill"></em> Remove</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="chat-bubble">
                                                            <div class="chat-msg"> Please confirm if your got email </div>
                                                            <ul class="chat-msg-more">
                                                                <li class="d-none d-sm-block"><a href="#" class="btn btn-icon btn-sm btn-trigger"><em class="icon ni ni-reply-fill"></em></a></li>
                                                                <li>
                                                                    <div class="dropdown">
                                                                        <a href="#" class="btn btn-icon btn-sm btn-trigger dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-sm">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li class="d-sm-none"><a href="#"><em class="icon ni ni-reply-fill"></em> Reply</a></li>
                                                                                <li><a href="#"><em class="icon ni ni-pen-alt-fill"></em> Edit</a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash-fill"></em> Remove</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <ul class="chat-meta">
                                                        <li><span>Now</span> <em class="icon ni ni-check-circle-fill"></em></li>
                                                    </ul>
                                                </div>
                                            </div><!-- .chat -->
                                        </div><!-- .nk-chat-panel -->
                                        <div id="box">
                                            <h5 style="margin-top: 22px;color: white">Send A Quote to connect with your potential customer!</h5>
                                            <p style="color: white">Granted contact detail to provide a quote. Instant messaging. voice / video calling, image / file sharing and more ...</p>
                                        </div>
                                        <div class="nk-chat-editor">
                                            <div class="nk-chat-editor-upload  ml-n1">
                                                <a href="#" class="btn btn-sm btn-icon btn-trigger text-primary toggle-opt" data-target="chat-upload"><em class="icon ni ni-plus-circle-fill"></em></a>
                                                <div class="chat-upload-option" data-content="chat-upload">
                                                    <ul class="">
                                                        <li><a href="#"><em class="icon ni ni-img-fill"></em></a></li>
                                                        <li><a href="#"><em class="icon ni ni-camera-fill"></em></a></li>
                                                        <li><a href="#"><em class="icon ni ni-mic"></em></a></li>
                                                        <li><a href="#"><em class="icon ni ni-grid-sq"></em></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="nk-chat-editor-form">
                                                <div class="form-control-wrap">
                                                    <textarea class="form-control form-control-simple no-resize" rows="1" id="default-textarea" placeholder="Type your message..."></textarea>
                                                </div>
                                            </div>
                                            <ul class="nk-chat-editor-tools g-2">
                                                <li>
                                                    <a href="#" class="btn btn-sm btn-icon btn-trigger text-primary"><em class="icon ni ni-happyf-fill"></em></a>
                                                </li>
                                                <li>
                                                    <button class="btn btn-round btn-primary btn-icon"><em class="icon ni ni-send-alt"></em></button>
                                                </li>
                                            </ul>
                                        </div><!-- .nk-chat-editor -->
                                       
                                    </div><!-- .nk-chat-body -->

                                        <div class="nk-msg-profile visible" data-simplebar>
                                          <div class="user-card user-card-s2 my-4">
                                                <div class="user-avatar md bg-purple">
                                                    <span>IH</span>
                                                </div>
                                                <div class="user-info">
                                                    <h5>Iliash Hossain</h5>
                                                    <span class="sub-text">Active 35m ago</span>
                                                </div>
                                                <div class="user-card-menu dropdown">
                                                    <a href="#" class="btn btn-icon btn-sm btn-trigger dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em class="icon ni ni-eye"></em><span>View Profile</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-na"></em><span>Block Messages</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-profile">
                                                <div class="chat-profile-group">
                                                    <a href="#" class="chat-profile-head" data-toggle="collapse" data-target="#chat-options">
                                                        <h6 class="title overline-title">Options</h6>
                                                        <span class="indicator-icon"><em class="icon ni ni-chevron-down"></em></span>
                                                    </a>
                                                    <div class="chat-profile-body collapse show" id="chat-options">
                                                        <div class="chat-profile-body-inner">
                                                            <ul class="chat-profile-options">
                                                                <li><a class="chat-option-link" href="#"><em class="icon icon-circle bg-light ni ni-edit-alt"></em><span class="lead-text">Nickname</span></a></li>
                                                                <li><a class="chat-option-link chat-search-toggle" href="#"><em class="icon icon-circle bg-light ni ni-search"></em><span class="lead-text">Search In Conversation</span></a></li>
                                                                <li><a class="chat-option-link" href="#"><em class="icon icon-circle bg-light ni ni-circle-fill"></em><span class="lead-text">Change Theme</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div><!-- .chat-profile-group -->
                                                <div class="chat-profile-group">
                                                    <a href="#" class="chat-profile-head" data-toggle="collapse" data-target="#chat-settings">
                                                        <h6 class="title overline-title">Settings</h6>
                                                        <span class="indicator-icon"><em class="icon ni ni-chevron-down"></em></span>
                                                    </a>
                                                    <div class="chat-profile-body collapse show" id="chat-settings">
                                                        <div class="chat-profile-body-inner">
                                                            <ul class="chat-profile-settings">
                                                                <li>
                                                                    <div class="custom-control custom-control-sm custom-switch">
                                                                        <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                                                        <label class="custom-control-label" for="customSwitch2">Notifications</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a class="chat-option-link" href="#">
                                                                        <em class="icon icon-circle bg-light ni ni-bell-off-fill"></em>
                                                                        <div>
                                                                            <span class="lead-text">Ignore Messages</span>
                                                                            <span class="sub-text">You won’t be notified when message you.</span>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="chat-option-link" href="#">
                                                                        <em class="icon icon-circle bg-light ni ni-alert-fill"></em>
                                                                        <div>
                                                                            <span class="lead-text">Something Wrong</span>
                                                                            <span class="sub-text">Give feedback and report conversion.</span>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div><!-- .chat-profile-group -->
                                                <div class="chat-profile-group">
                                                    <a href="#" class="chat-profile-head" data-toggle="collapse" data-target="#chat-photos">
                                                        <h6 class="title overline-title">Shared Photos</h6>
                                                        <span class="indicator-icon"><em class="icon ni ni-chevron-down"></em></span>
                                                    </a>
                                                    <div class="chat-profile-body collapse show" id="chat-photos">
                                                        <div class="chat-profile-body-inner">
                                                            <ul class="chat-profile-media">
                                                                <li><a href="#"><img src="{{asset('/images/slides/slide-a.jpg') }}" alt=""></a></li>
                                                                <li><a href="#"><img src="{{asset('/images/slides/slide-b.jpg') }}" alt=""></a></li>
                                                                <li><a href="#"><img src="{{asset('/images/slides/slide-c.jpg') }}" alt=""></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div><!-- .chat-profile-group -->
                                            </div> <!-- .chat-profile -->
                                        </div><!-- .nk-msg-profile -->
                                    </div><!-- .nk-msg-body -->
                                </div><!-- .nk-msg -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
@endsection
@section('script')
    <script src="{{ asset('frontend-assets/assets/js/apps/chats.js?ver=2.9.1') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/apps/messages.js?ver=2.9.1') }}"></script>
   
    <script src="{{ asset('frontend-assets/assets/js/libs/editors/quill.js?ver=2.9.1') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/editors.js?ver=2.9.1') }}"></script>
    <script type="text/javascript">
        $(".nk-msg-item").click(function(){
            $("#chatbody").addClass("nkchatbody");
        });
    </script>
@endsection