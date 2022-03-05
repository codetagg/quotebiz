@extends('super_admin.layout.app')
@section('title', 'Service Categories
')
@section('content')


 <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Service Categories</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>You have total 8 Categories</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-filter-alt"></em><span>Filtered By</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>Web Development</span></a></li>
                                                                        <li><a href="#"><span>Mobile Application</span></a></li>
                                                                        <li><a href="#"><span>Graphics Design</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalCreate"><em class="icon ni ni-plus"></em><span>Add Category</span></a></li>
                                                    </ul>
                                                </div>
                                            </div><!-- .toggle-wrap -->
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs">
                                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                                            <div class="card h-100">
                                                <div class="card-inner">
                                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                                        <a href="html/lms/courses.html" class="d-flex align-items-center">
                                                            <div class="user-avatar sq bg-purple"><span>GD</span></div>
                                                            <div class="ml-3">
                                                                <h6 class="title mb-1">Graphics Design</h6>
                                                                <span class="sub-text">4 SubCategories</span>
                                                            </div>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 mr-n1" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="#" data-toggle="modal" data-target="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit Category</span></a></li>
                                                                    <li><a data-toggle="modal" data-target="#modalDelete" href="#"><em class="icon ni ni-delete"></em><span>Delete Category</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p>Website Design & Develop the website with web applications</p>
                                                    <ul class="d-flex flex-wrap g-1">
                                                        <li><span class="badge badge-dim badge-primary">Photoshop</span></li>
                                                        <li><span class="badge badge-dim badge-danger">Adobe Illustrator</span></li>
                                                        <li><span class="badge badge-dim badge-info">Logo Design</span></li>
                                                        <li><span class="badge badge-dim badge-warning">Drawing</span></li>
                                                        <li><span class="badge badge-dim badge-secondary">Figma</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                                            <div class="card h-100">
                                                <div class="card-inner">
                                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                                        <a href="html/lms/courses.html" class="d-flex align-items-center">
                                                            <div class="user-avatar sq bg-warning"><span>WD</span></div>
                                                            <div class="ml-3">
                                                                <h6 class="title mb-1">Web Development</h6>
                                                                <span class="sub-text">5 SubCategories</span>
                                                            </div>
                                                        </a>
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 mr-n1" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="#" data-toggle="modal" data-target="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit Category</span></a></li>
                                                                    <li><a data-toggle="modal" data-target="#modalDelete" href="#"><em class="icon ni ni-delete"></em><span>Delete Category</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p>Website Design & Develop the website with web applications</p>
                                                    <ul class="d-flex flex-wrap g-1">
                                                        <li><span class="badge badge-dim badge-primary">Responsive Design</span></li>
                                                        <li><span class="badge badge-dim badge-danger">Wordpress Customization</span>
                                                        </li>
                                                        <li><span class="badge badge-dim badge-info">Theme Development</span></li>
                                                        <li><span class="badge badge-dim badge-warning">Bootstrap</span></li>
                                                        <li><span class="badge badge-dim badge-secondary">HTML & CSS Grid</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                                            <div class="card h-100">
                                                <div class="card-inner">
                                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                                        <a href="html/lms/courses.html" class="d-flex align-items-center">
                                                            <div class="user-avatar sq bg-info"><span>MA</span></div>
                                                            <div class="ml-3">
                                                                <h6 class="title mb-1">Mobile Application</h6>
                                                                <span class="sub-text">4 SubCategories</span>
                                                            </div>
                                                        </a>
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 mr-n1" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="#" data-toggle="modal" data-target="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit Category</span></a></li>
                                                                    <li><a data-toggle="modal" data-target="#modalDelete" href="#"><em class="icon ni ni-delete"></em><span>Delete Category</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p>Website Design & Develop the website with web applications</p>
                                                    <ul class="d-flex flex-wrap g-1">
                                                        <li><span class="badge badge-dim badge-primary">Mobile App Design</span></li>
                                                        <li><span class="badge badge-dim badge-danger">User Interface</span></li>
                                                        <li><span class="badge badge-dim badge-info">Design Thinking</span></li>
                                                        <li><span class="badge badge-dim badge-warning">Prototyping</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                                            <div class="card h-100">
                                                <div class="card-inner">
                                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                                        <a href="html/lms/courses.html" class="d-flex align-items-center">
                                                            <div class="user-avatar sq bg-purple"><span>GD</span></div>
                                                            <div class="ml-3">
                                                                <h6 class="title mb-1">Graphics Design</h6>
                                                                <span class="sub-text">4 SubCategories</span>
                                                            </div>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 mr-n1" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="#" data-toggle="modal" data-target="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit Category</span></a></li>
                                                                    <li><a data-toggle="modal" data-target="#modalDelete" href="#"><em class="icon ni ni-delete"></em><span>Delete Category</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p>Website Design & Develop the website with web applications</p>
                                                    <ul class="d-flex flex-wrap g-1">
                                                        <li><span class="badge badge-dim badge-primary">Photoshop</span></li>
                                                        <li><span class="badge badge-dim badge-danger">Adobe Illustrator</span></li>
                                                        <li><span class="badge badge-dim badge-info">Logo Design</span></li>
                                                        <li><span class="badge badge-dim badge-warning">Drawing</span></li>
                                                        <li><span class="badge badge-dim badge-secondary">Figma</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                                            <div class="card h-100">
                                                <div class="card-inner">
                                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                                        <a href="html/lms/courses.html" class="d-flex align-items-center">
                                                            <div class="user-avatar sq bg-warning"><span>WD</span></div>
                                                            <div class="ml-3">
                                                                <h6 class="title mb-1">Web Development</h6>
                                                                <span class="sub-text">5 SubCategories</span>
                                                            </div>
                                                        </a>
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 mr-n1" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="#" data-toggle="modal" data-target="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit Category</span></a></li>
                                                                    <li><a data-toggle="modal" data-target="#modalDelete" href="#"><em class="icon ni ni-delete"></em><span>Delete Category</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p>Website Design & Develop the website with web applications</p>
                                                    <ul class="d-flex flex-wrap g-1">
                                                        <li><span class="badge badge-dim badge-primary">Responsive Design</span></li>
                                                        <li><span class="badge badge-dim badge-danger">Wordpress Customization</span>
                                                        </li>
                                                        <li><span class="badge badge-dim badge-info">Theme Development</span></li>
                                                        <li><span class="badge badge-dim badge-warning">Bootstrap</span></li>
                                                        <li><span class="badge badge-dim badge-secondary">HTML & CSS Grid</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                                            <div class="card h-100">
                                                <div class="card-inner">
                                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                                        <a href="html/lms/courses.html" class="d-flex align-items-center">
                                                            <div class="user-avatar sq bg-info"><span>MA</span></div>
                                                            <div class="ml-3">
                                                                <h6 class="title mb-1">Mobile Application</h6>
                                                                <span class="sub-text">4 SubCategories</span>
                                                            </div>
                                                        </a>
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 mr-n1" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="#" data-toggle="modal" data-target="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit Category</span></a></li>
                                                                    <li><a data-toggle="modal" data-target="#modalDelete" href="#"><em class="icon ni ni-delete"></em><span>Delete Category</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p>Website Design & Develop the website with web applications</p>
                                                    <ul class="d-flex flex-wrap g-1">
                                                        <li><span class="badge badge-dim badge-primary">Mobile App Design</span></li>
                                                        <li><span class="badge badge-dim badge-danger">User Interface</span></li>
                                                        <li><span class="badge badge-dim badge-info">Design Thinking</span></li>
                                                        <li><span class="badge badge-dim badge-warning">Prototyping</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                                            <div class="card h-100">
                                                <div class="card-inner">
                                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                                        <a href="html/lms/courses.html" class="d-flex align-items-center">
                                                            <div class="user-avatar sq bg-purple"><span>GD</span></div>
                                                            <div class="ml-3">
                                                                <h6 class="title mb-1">Graphics Design</h6>
                                                                <span class="sub-text">4 SubCategories</span>
                                                            </div>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 mr-n1" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="#" data-toggle="modal" data-target="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit Category</span></a></li>
                                                                    <li><a data-toggle="modal" data-target="#modalDelete" href="#"><em class="icon ni ni-delete"></em><span>Delete Category</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p>Website Design & Develop the website with web applications</p>
                                                    <ul class="d-flex flex-wrap g-1">
                                                        <li><span class="badge badge-dim badge-primary">Photoshop</span></li>
                                                        <li><span class="badge badge-dim badge-danger">Adobe Illustrator</span></li>
                                                        <li><span class="badge badge-dim badge-info">Logo Design</span></li>
                                                        <li><span class="badge badge-dim badge-warning">Drawing</span></li>
                                                        <li><span class="badge badge-dim badge-secondary">Figma</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                                            <div class="card h-100">
                                                <div class="card-inner">
                                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                                        <a href="html/lms/courses.html" class="d-flex align-items-center">
                                                            <div class="user-avatar sq bg-warning"><span>WD</span></div>
                                                            <div class="ml-3">
                                                                <h6 class="title mb-1">Web Development</h6>
                                                                <span class="sub-text">5 SubCategories</span>
                                                            </div>
                                                        </a>
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 mr-n1" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="#" data-toggle="modal" data-target="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit Category</span></a></li>
                                                                    <li><a data-toggle="modal" data-target="#modalDelete" href="#"><em class="icon ni ni-delete"></em><span>Delete Category</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p>Website Design & Develop the website with web applications</p>
                                                    <ul class="d-flex flex-wrap g-1">
                                                        <li><span class="badge badge-dim badge-primary">Responsive Design</span></li>
                                                        <li><span class="badge badge-dim badge-danger">Wordpress Customization</span></li>
                                                        <li><span class="badge badge-dim badge-info">Theme Development</span></li>
                                                        <li><span class="badge badge-dim badge-warning">Bootstrap</span></li>
                                                        <li><span class="badge badge-dim badge-secondary">HTML & CSS Grid</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
@endsection
@section('script')


@endsection