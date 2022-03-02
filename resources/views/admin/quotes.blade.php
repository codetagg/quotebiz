@extends('admin.layout.app')
@section('title', 'Quotes')
@section('content')


<!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between g-3">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Quotes </h3>
                                            <div class="nk-block-des text-soft">
                                                <!-- <p>Parmanemt and part-time employee's payroll</p> -->
                                            </div>
                                        </div>
                                        <div class="nk-block-head-content">
                                            <a href="html/crm/employee-salary-list.html" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                            <a href="html/crm/employee-salary-list.html" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <ul class="nav nav-tabs nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#parmanent"><em class="icon ni ni-user-circle"></em><span>Quote Requests</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#part-time"><em class="icon ni ni-repeat"></em><span>Quotes Sent </span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content mt-0">
                                            <div class="tab-pane active" id="parmanent">
                                                <div class="nk-tb-list nk-tb-ulist border-bottom border-light">
                                                    <div class="nk-tb-item nk-tb-head">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid">
                                                                <label class="custom-control-label" for="uid"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col"><span class="sub-text">Name</span></div>
                                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Position</span></div>
                                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Account Number</span></div>
                                                        <div class="nk-tb-col tb-col-mb"><span class="sub-text">Basic</span></div>
                                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Highest</span></div>
                                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Overtime</span></div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1 my-n1">
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#"><em class="icon ni ni-mail"></em><span>Send Email to All</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-delete"></em><span>Suspend Selected</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Seleted</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid1">
                                                                <label class="custom-control-label" for="uid1"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar bg-primary">
                                                                    <span>AB</span>
                                                                </div>
                                                                <div class="user-info">
                                                                    <span class="tb-lead">Abu Bin Ishtiyak <span class="dot dot-success d-md-none ml-1"></span></span>
                                                                    <span>info@softnio.com</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>MD</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>9834/paypal</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>$700</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>$960</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>$400</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Suspend">
                                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#" data-toggle="modal" data-target="#salaryEdit"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#salaryRemove"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid2">
                                                                <label class="custom-control-label" for="uid2"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar">
                                                                    <img src="./images/avatar/c-sm.jpg" alt="">
                                                                </div>
                                                                <div class="user-info">
                                                                    <span class="tb-lead">Alan Butler <span class="dot dot-info d-md-none ml-1"></span></span>
                                                                    <span>butler@example.com</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>Executive</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>7623/paypal</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>$690</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>$800</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>$390</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Suspend">
                                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#" data-toggle="modal" data-target="#salaryEdit"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#salaryRemove"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid3">
                                                                <label class="custom-control-label" for="uid3"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar bg-warning">
                                                                    <span>VL</span>
                                                                </div>
                                                                <div class="user-info">
                                                                    <span class="tb-lead">Victoria Lynch <span class="dot dot-success d-md-none ml-1"></span></span>
                                                                    <span>victoria@example.com</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>Manager</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>7459/Payoneer</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>$789</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>$850</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>$378</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Suspend">
                                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#" data-toggle="modal" data-target="#salaryEdit"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#salaryRemove"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid4">
                                                                <label class="custom-control-label" for="uid4"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar bg-success">
                                                                    <span>PN</span>
                                                                </div>
                                                                <div class="user-info">
                                                                    <span class="tb-lead">Patrick Newman <span class="dot dot-success d-md-none ml-1"></span></span>
                                                                    <span>patrick@example.com</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>Product Manager</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>8659/Payoneer</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>$760</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>$8480</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>$430</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Suspend">
                                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#" data-toggle="modal" data-target="#salaryEdit"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#salaryRemove"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid5">
                                                                <label class="custom-control-label" for="uid5"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar">
                                                                    <img src="./images/avatar/d-sm.jpg" alt="">
                                                                </div>
                                                                <div class="user-info">
                                                                    <span class="tb-lead">Jane Harris <span class="dot dot-warning d-md-none ml-1"></span></span>
                                                                    <span>harris@example.com</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>Project Manager</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>8976/Payoneer</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>$760</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>$848</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>$460</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Suspend">
                                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#" data-toggle="modal" data-target="#salaryEdit"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#salaryRemove"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid6">
                                                                <label class="custom-control-label" for="uid6"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar bg-purple">
                                                                    <span>EW</span>
                                                                </div>
                                                                <div class="user-info">
                                                                    <span class="tb-lead">Emma Walker <span class="dot dot-success d-md-none ml-1"></span></span>
                                                                    <span>walker@example.com</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>Jr. Project Manager</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>9256/paypal</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>$650</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>$750</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>$290</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Suspend">
                                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#" data-toggle="modal" data-target="#salaryEdit"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#salaryRemove"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid7">
                                                                <label class="custom-control-label" for="uid7"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar">
                                                                    <img src="./images/avatar/a-sm.jpg" alt="">
                                                                </div>
                                                                <div class="user-info">
                                                                    <span class="tb-lead">Alan Butler <span class="dot dot-info d-md-none ml-1"></span></span>
                                                                    <span>alan@example.com</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>Senior Executive</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>8745/payoneer</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>$740</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>$790</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>$310</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Suspend">
                                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#" data-toggle="modal" data-target="#salaryEdit"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#salaryRemove"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid8">
                                                                <label class="custom-control-label" for="uid8"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar bg-warning">
                                                                    <span>VL</span>
                                                                </div>
                                                                <div class="user-info">
                                                                    <span class="tb-lead">Victoria Lynch <span class="dot dot-success d-md-none ml-1"></span></span>
                                                                    <span>victoria@example.com</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>Junior Executive</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>7945/payoneer</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>$650</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>$720</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>$360</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Suspend">
                                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#" data-toggle="modal" data-target="#salaryEdit"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#salaryRemove"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid9">
                                                                <label class="custom-control-label" for="uid9"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar bg-success">
                                                                    <span>PN</span>
                                                                </div>
                                                                <div class="user-info">
                                                                    <span class="tb-lead">Patrick Newman <span class="dot dot-success d-md-none ml-1"></span></span>
                                                                    <span>patrick@example.com</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>Sr. Engineer</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>7456/paypal</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>$680</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>$740</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>$380</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Suspend">
                                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#" data-toggle="modal" data-target="#salaryEdit"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#salaryRemove"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid10">
                                                                <label class="custom-control-label" for="uid10"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar">
                                                                    <img src="./images/avatar/c-sm.jpg" alt="">
                                                                </div>
                                                                <div class="user-info">
                                                                    <span class="tb-lead">Jane Harris <span class="dot dot-warning d-md-none ml-1"></span></span>
                                                                    <span>harris@example.com</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>Jr. Engineer</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>7125/paypal</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>$605</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>$680</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>$350</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Suspend">
                                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#" data-toggle="modal" data-target="#salaryEdit"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#salaryRemove"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                </div>
                                                <!-- .nk-tb-list -->
                                                <div class="card-inner">
                                                    <div class="nk-block-between-md g-3">
                                                        <div class="g">
                                                            <ul class="pagination justify-content-center justify-content-md-start">
                                                                <li class="page-item"><a class="page-link" href="#"><em class="icon ni ni-chevrons-left"></em></a></li>
                                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                                <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                                                <li class="page-item"><a class="page-link" href="#">7</a></li>
                                                                <li class="page-item"><a class="page-link" href="#"><em class="icon ni ni-chevrons-right"></em></a></li>
                                                            </ul>
                                                            <!-- .pagination -->
                                                        </div>
                                                        <div class="g">
                                                            <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                                                <div>Page</div>
                                                                <div>
                                                                    <select class="form-select form-select-sm" data-search="on" data-dropdown="xs center">
                                                                        <option value="page-1">1</option>
                                                                        <option value="page-2">2</option>
                                                                        <option value="page-4">4</option>
                                                                        <option value="page-5">5</option>
                                                                        <option value="page-6">6</option>
                                                                        <option value="page-7">7</option>
                                                                        <option value="page-8">8</option>
                                                                        <option value="page-9">9</option>
                                                                        <option value="page-10">10</option>
                                                                        <option value="page-11">11</option>
                                                                        <option value="page-12">12</option>
                                                                        <option value="page-13">13</option>
                                                                        <option value="page-14">14</option>
                                                                        <option value="page-15">15</option>
                                                                        <option value="page-16">16</option>
                                                                        <option value="page-17">17</option>
                                                                        <option value="page-18">18</option>
                                                                        <option value="page-19">19</option>
                                                                        <option value="page-20">20</option>
                                                                    </select>
                                                                </div>
                                                                <div>OF 102</div>
                                                            </div>
                                                        </div>
                                                        <!-- .pagination-goto -->
                                                    </div>
                                                    <!-- .nk-block-between -->
                                                </div>
                                            </div>
                                            <!--tab pan active-->
                                            <div class="tab-pane" id="part-time">
                                                <div class="nk-tb-list nk-tb-ulist border-bottom border-light">
                                                    <div class="nk-tb-item nk-tb-head">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid">
                                                                <label class="custom-control-label" for="uid"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col"><span class="sub-text">Name</span></div>
                                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Position</span></div>
                                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Account Number</span></div>
                                                        <div class="nk-tb-col tb-col-mb"><span class="sub-text">Basic</span></div>
                                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Highest</span></div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1 my-n1">
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#"><em class="icon ni ni-mail"></em><span>Send Email to All</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-delete"></em><span>Suspend Selected</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Seleted</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid11">
                                                                <label class="custom-control-label" for="uid11"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar bg-success">
                                                                    <span>IB</span>
                                                                </div>
                                                                <div class="user-info">
                                                                    <span class="tb-lead">Ifrat Binte <span class="dot dot-success d-md-none ml-1"></span></span>
                                                                    <span>ifrat@example.com</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>Sr. Developer</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>9834/payoneer</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>$800</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>$990</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Suspend">
                                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#" data-toggle="modal" data-target="#salaryEdit"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#salaryRemove"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid12">
                                                                <label class="custom-control-label" for="uid12"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar">
                                                                    <img src="./images/avatar/c-sm.jpg" alt="">
                                                                </div>
                                                                <div class="user-info">
                                                                    <span class="tb-lead">Alan Butler <span class="dot dot-info d-md-none ml-1"></span></span>
                                                                    <span>butler@example.com</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>Executive</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>7623/paypal</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>$690</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>$800</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Suspend">
                                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#" data-toggle="modal" data-target="#salaryEdit"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#salaryRemove"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid13">
                                                                <label class="custom-control-label" for="uid13"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar bg-warning">
                                                                    <span>VL</span>
                                                                </div>
                                                                <div class="user-info">
                                                                    <span class="tb-lead">Victoria Lynch <span class="dot dot-success d-md-none ml-1"></span></span>
                                                                    <span>victoria@example.com</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>Manager</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>7459/Payoneer</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>$789</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>$850</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Suspend">
                                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#" data-toggle="modal" data-target="#salaryEdit"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#salaryRemove"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid14">
                                                                <label class="custom-control-label" for="uid14"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar bg-success">
                                                                    <span>PN</span>
                                                                </div>
                                                                <div class="user-info">
                                                                    <span class="tb-lead">Patrick Newman <span class="dot dot-success d-md-none ml-1"></span></span>
                                                                    <span>patrick@example.com</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>Product Manager</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>8659/Payoneer</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>$760</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>$8480</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Suspend">
                                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#" data-toggle="modal" data-target="#salaryEdit"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#salaryRemove"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid15">
                                                                <label class="custom-control-label" for="uid15"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar">
                                                                    <img src="./images/avatar/d-sm.jpg" alt="">
                                                                </div>
                                                                <div class="user-info">
                                                                    <span class="tb-lead">Jane Harris <span class="dot dot-warning d-md-none ml-1"></span></span>
                                                                    <span>harris@example.com</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>Project Manager</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>8976/Payoneer</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>$760</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>$848</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Suspend">
                                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#" data-toggle="modal" data-target="#salaryEdit"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#salaryRemove"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid16">
                                                                <label class="custom-control-label" for="uid16"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar bg-purple">
                                                                    <span>EW</span>
                                                                </div>
                                                                <div class="user-info">
                                                                    <span class="tb-lead">Emma Walker <span class="dot dot-success d-md-none ml-1"></span></span>
                                                                    <span>walker@example.com</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>Jr. Project Manager</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>9256/paypal</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>$650</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>$750</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Suspend">
                                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#" data-toggle="modal" data-target="#salaryEdit"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#salaryRemove"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid17">
                                                                <label class="custom-control-label" for="uid17"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar">
                                                                    <img src="./images/avatar/a-sm.jpg" alt="">
                                                                </div>
                                                                <div class="user-info">
                                                                    <span class="tb-lead">Alan Butler <span class="dot dot-info d-md-none ml-1"></span></span>
                                                                    <span>alan@example.com</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>Senior Executive</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>8745/payoneer</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>$740</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>$790</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Suspend">
                                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#" data-toggle="modal" data-target="#salaryEdit"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#salaryRemove"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid18">
                                                                <label class="custom-control-label" for="uid18"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar bg-warning">
                                                                    <span>VL</span>
                                                                </div>
                                                                <div class="user-info">
                                                                    <span class="tb-lead">Victoria Lynch <span class="dot dot-success d-md-none ml-1"></span></span>
                                                                    <span>victoria@example.com</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>Junior Executive</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>7945/payoneer</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>$650</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>$720</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Suspend">
                                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#" data-toggle="modal" data-target="#salaryEdit"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#salaryRemove"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid19">
                                                                <label class="custom-control-label" for="uid19"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar bg-success">
                                                                    <span>PN</span>
                                                                </div>
                                                                <div class="user-info">
                                                                    <span class="tb-lead">Patrick Newman <span class="dot dot-success d-md-none ml-1"></span></span>
                                                                    <span>patrick@example.com</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>Sr. Engineer</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>7456/paypal</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>$680</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>$740</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Suspend">
                                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#" data-toggle="modal" data-target="#salaryEdit"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#salaryRemove"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid20">
                                                                <label class="custom-control-label" for="uid20"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar">
                                                                    <img src="./images/avatar/c-sm.jpg" alt="">
                                                                </div>
                                                                <div class="user-info">
                                                                    <span class="tb-lead">Jane Harris <span class="dot dot-warning d-md-none ml-1"></span></span>
                                                                    <span>harris@example.com</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>Jr. Engineer</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>7125/paypal</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>$605</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>$680</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Suspend">
                                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#" data-toggle="modal" data-target="#salaryEdit"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a href="#" data-toggle="modal" data-target="#salaryRemove"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                </div>
                                                <!-- .nk-tb-list -->
                                                <div class="card-inner">
                                                    <div class="nk-block-between-md g-3">
                                                        <div class="g">
                                                            <ul class="pagination justify-content-center justify-content-md-start">
                                                                <li class="page-item"><a class="page-link" href="#"><em class="icon ni ni-chevrons-left"></em></a></li>
                                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                                <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                                                <li class="page-item"><a class="page-link" href="#">7</a></li>
                                                                <li class="page-item"><a class="page-link" href="#"><em class="icon ni ni-chevrons-right"></em></a></li>
                                                            </ul>
                                                            <!-- .pagination -->
                                                        </div>
                                                        <div class="g">
                                                            <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                                                <div>Page</div>
                                                                <div>
                                                                    <select class="form-select form-select-sm" data-search="on" data-dropdown="xs center">
                                                                        <option value="page-1">1</option>
                                                                        <option value="page-2">2</option>
                                                                        <option value="page-4">4</option>
                                                                        <option value="page-5">5</option>
                                                                        <option value="page-6">6</option>
                                                                        <option value="page-7">7</option>
                                                                        <option value="page-8">8</option>
                                                                        <option value="page-9">9</option>
                                                                        <option value="page-10">10</option>
                                                                        <option value="page-11">11</option>
                                                                        <option value="page-12">12</option>
                                                                        <option value="page-13">13</option>
                                                                        <option value="page-14">14</option>
                                                                        <option value="page-15">15</option>
                                                                        <option value="page-16">16</option>
                                                                        <option value="page-17">17</option>
                                                                        <option value="page-18">18</option>
                                                                        <option value="page-19">19</option>
                                                                        <option value="page-20">20</option>
                                                                    </select>
                                                                </div>
                                                                <div>OF 102</div>
                                                            </div>
                                                        </div>
                                                        <!-- .pagination-goto -->
                                                    </div>
                                                    <!-- .nk-block-between -->
                                                </div>
                                            </div>
                                            <!--tab pan-->
                                        </div>
                                        <!--tab content-->
                                    </div>
                                    <!--card-->
                                </div>
                                <!--nk block-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
@endsection
@section('script')


@endsection