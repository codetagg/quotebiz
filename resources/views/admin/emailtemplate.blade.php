@extends('admin.layout.app')
@section('title', 'Email Templates
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
                                            <h3 class="nk-block-title page-title">Email Templates</h3>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li><a href="#" class="btn btn-white btn-outline-light"><em class="icon ni ni-plus"></em><span>Add Task</span></a></li>
                                                        <li><a href="#" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add Board</span></a></li>
                                                    </ul>
                                                </div>
                                            </div><!-- .toggle-wrap -->
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div id="kanban" class="nk-kanban"><div class="kanban-container" style="width: 1280px;"><div data-id="_open" data-order="1" class="kanban-board" style="width: 320px; margin-left: 0px; margin-right: 0px;"><header class="kanban-board-header kanban-light"><div class="kanban-title-board">
                <div class="kanban-title-content">
                    <h6 class="title">Quote Request Received</h6>
                    <span class="badge badge-pill badge-outline-light text-dark">3</span>
                </div>
                <div class="kanban-title-content">
                    <div class="drodown">
                        <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mr-n1" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="link-list-opt no-bdr">
                                <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit Board</span></a></li>
                                <li><a href="#"><em class="icon ni ni-plus-sm"></em><span>Add Task</span></a></li>
                                <li><a href="#"><em class="icon ni ni-plus-sm"></em><span>Add Option</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
                      <main class="kanban-drag">
                        <div class="kanban-item">
                            <div class="kanban-item-title">
                                <h6 class="title">Email notification to customer</h6>

                                <div class="drodown">

                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <div class="user-avatar-group">
                                            <div class="user-avatar xs bg-primary"><span>A</span></div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="link-list-opt no-bdr p-3 g-2">
                                            <li>
                                                <div class="user-card">
                                                    <div class="user-avatar sm bg-primary">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-name">
                                                        <span class="tb-lead">Abu Bin Ishtiyak</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="#" data-toggle="modal" data-target="#editDataDash"><em class="icon ni ni-edit"></em></a>
                            </div>
                            <div class="kanban-item-text">
                                <p>Update the new UI design for @dashlite template with based on feedback.</p>
                            </div>
                            <ul class="kanban-item-tags">
                                <li><span class="badge badge-info">Email</span></li>
                                <li><span class="badge badge-warning">SMS</span></li>
                            </ul>
                            <div class="kanban-item-meta">
                                <ul class="kanban-item-meta-list">
                                    <li class="text-danger"><em class="icon ni ni-calendar"></em><span>Send Immedialely</span></li>
                                    <li><em class="icon ni ni-notes"></em><span>Design</span></li>
                                </ul>
                                <ul class="kanban-item-meta-list">
                                    <li><em class="icon ni ni-clip"></em><span>1</span></li>
                                    <li><em class="icon ni ni-comments"></em><span>4</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="kanban-item">
                            <div class="kanban-item-title">
                                <h6 class="title">Email notification to all SPs</h6>
                                <div class="drodown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <div class="user-avatar-group">
                                            <div class="user-avatar xs bg-dark"><span>S</span></div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="link-list-opt no-bdr p-3 g-2">
                                            <li>
                                                <div class="user-card">
                                                    <div class="user-avatar sm bg-dark">
                                                        <span>SD</span>
                                                    </div>
                                                    <div class="user-name">
                                                        <span class="tb-lead">Sara Dervishi</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <a href="#" data-toggle="modal" data-target="#editDataDash"><em class="icon ni ni-edit"></em></a>
                            </div>
                            <div class="kanban-item-text">
                                <p>Start implementing new design in Coding @dashlite.</p>
                            </div>
                            <ul class="kanban-item-tags">
                                <li><span class="badge badge-info">Email</span></li>
                                <li><span class="badge badge-danger">SMS</span></li>
                            </ul>
                            <div class="kanban-item-meta">
                                <ul class="kanban-item-meta-list">
                                    <li><em class="icon ni ni-calendar"></em><span>Send after 3</span></li>
                                    <li><em class="icon ni ni-notes"></em><span>Forntend</span></li>
                                </ul>
                                <ul class="kanban-item-meta-list">
                                    <li><em class="icon ni ni-comments"></em><span>2</span></li>
                                </ul>
                            </div>
                        </div>
                       </main>
                       <footer>
                        <button class="kanban-add-task btn btn-block"><em class="icon ni ni-plus-sm"></em><span>Add another task</span>
                        </button>
                    </footer>
                </div>
                <div data-id="_in_progress" data-order="2" class="kanban-board" style="width: 320px; margin-left: 0px; margin-right: 0px;"><header class="kanban-board-header kanban-primary"><div class="kanban-title-board">
                <div class="kanban-title-content">
                    <h6 class="title">Quote Sent</h6>
                    <span class="badge badge-pill badge-outline-light text-dark">4</span>
                </div>
                <div class="kanban-title-content">
                    <div class="drodown">
                        <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mr-n1" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="link-list-opt no-bdr">
                                <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit Board</span></a></li>
                                <li><a href="#"><em class="icon ni ni-plus-sm"></em><span>Add Task</span></a></li>
                                <li><a href="#"><em class="icon ni ni-plus-sm"></em><span>Add Option</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="kanban-drag">
            <div class="kanban-item">
                            <div class="kanban-item-title">
                                <h6 class="title">Email notification sent to customer</h6>
                                <div class="drodown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <div class="user-avatar-group">
                                            <div class="user-avatar xs bg-danger"><span>V</span></div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="link-list-opt no-bdr p-3 g-2">
                                            <li>
                                                <div class="user-card">
                                                    <div class="user-avatar sm bg-danger">
                                                        <span>VL</span>
                                                    </div>
                                                    <div class="user-name">
                                                        <span class="tb-lead">Victoria Lynch</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                 <a href="#" data-toggle="modal" data-target="#editDataDash"><em class="icon ni ni-edit"></em></a>
                            </div>
                            <div class="kanban-item-text">
                                <p>Keyword recarch for @techyspec business profile and there other websites, to improve ranking.</p>
                            </div>
                            <ul class="kanban-item-tags">
                                <li><span class="badge badge-dark">Email</span></li>
                                <li><span class="badge badge-success">SMS</span></li>
                            </ul>
                            <div class="kanban-item-meta">
                                <ul class="kanban-item-meta-list">
                                    <li><em class="icon ni ni-calendar"></em><span>Send after 3</span></li>
                                    <li><em class="icon ni ni-notes"></em><span>Recharch</span></li>
                                </ul>
                                <ul class="kanban-item-meta-list">
                                    <li><em class="icon ni ni-clip"></em><span>31</span></li>
                                    <li><em class="icon ni ni-comments"></em><span>21</span></li>
                                </ul>
                            </div>
                        </div>
                       </main>
                       <footer>
                        <button class="kanban-add-task btn btn-block"><em class="icon ni ni-plus-sm"></em><span>Add another task</span>
                        </button>
                    </footer>
                </div>
                <div data-id="_to_review" data-order="3" class="kanban-board" style="width: 320px; margin-left: 0px; margin-right: 0px;"><header class="kanban-board-header kanban-warning"><div class="kanban-title-board">
                <div class="kanban-title-content">
                    <h6 class="title">Quote Won</h6>
                    <span class="badge badge-pill badge-outline-light text-dark">2</span>
                </div>
                <div class="kanban-title-content">
                    <div class="drodown">
                        <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mr-n1" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="link-list-opt no-bdr">
                                <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit Board</span></a></li>
                                <li><a href="#"><em class="icon ni ni-plus-sm"></em><span>Add Task</span></a></li>
                                <li><a href="#"><em class="icon ni ni-plus-sm"></em><span>Add Option</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
            <main class="kanban-drag">
                <div class="kanban-item">
                            <div class="kanban-item-title">
                                <h6 class="title">Email notification to the SP that won the job</h6>
                                <div class="drodown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <div class="user-avatar-group">
                                            <div class="user-avatar xs bg-purple">
                                                <span>A</span>
                                            </div>
                                            <div class="user-avatar xs bg-success">
                                                <span>B</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="link-list-opt no-bdr p-3 g-2">
                                            <li>
                                                <div class="user-card">
                                                    <div class="user-avatar sm bg-primary">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-name">
                                                        <span class="tb-lead">Abu Bin Ishtiyak</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="user-card">
                                                    <div class="user-avatar sm bg-success">
                                                        <span>BA</span>
                                                    </div>
                                                    <div class="user-name">
                                                        <span class="tb-lead">Butler Alan</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                 <a href="#" data-toggle="modal" data-target="#editDataDash"><em class="icon ni ni-edit"></em></a>
                            </div>
                            <div class="kanban-item-text">
                                <p>Complete website development for Oberlo limited.</p>
                            </div>
                            <ul class="kanban-item-tags">
                                <li><span class="badge badge-info">Email</span></li>
                                <li><span class="badge badge-danger">SMS</span></li>
                            </ul>
                            <div class="kanban-item-meta">
                                <ul class="kanban-item-meta-list">
                                    <li class="text-danger"><em class="icon ni ni-calendar"></em><span>Send Immediately</span></li>
                                    <li><em class="icon ni ni-notes"></em><span>Backend</span></li>
                                </ul>
                                <ul class="kanban-item-meta-list">
                                    <li><em class="icon ni ni-clip"></em><span>16</span></li>
                                    <li><em class="icon ni ni-comments"></em><span>25</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="kanban-item">
                            <div class="kanban-item-title">
                                <h6 class="title">Email notification to all SPs that sent quotes that lost the job</h6>
                                <div class="drodown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <div class="user-avatar-group">
                                            <div class="user-avatar xs bg-pink"><span>P</span></div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="link-list-opt no-bdr p-3 g-2">
                                            <li>
                                                <div class="user-card">
                                                    <div class="user-avatar sm bg-pink">
                                                        <span>PN</span>
                                                    </div>
                                                    <div class="user-name">
                                                        <span class="tb-lead">Patrick Newman</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                 <a href="#" data-toggle="modal" data-target="#editDataDash"><em class="icon ni ni-edit"></em></a>
                            </div>
                            <div class="kanban-item-text">
                                <p>Design and develop app for Getsocio IOS.</p>
                            </div>
                            <ul class="kanban-item-tags">
                                <li><span class="badge badge-dark">Getsocio</span></li>
                                <li><span class="badge badge-light">IOS</span></li>
                            </ul>
                            <div class="kanban-item-meta">
                                <ul class="kanban-item-meta-list">
                                    <li class="text-danger"><em class="icon ni ni-calendar"></em><span>4d Due</span></li>
                                    <li><em class="icon ni ni-notes"></em><span>Forntend</span></li>
                                </ul>
                                <ul class="kanban-item-meta-list">
                                    <li><em class="icon ni ni-clip"></em><span>3</span></li>
                                    <li><em class="icon ni ni-comments"></em><span>5</span></li>
                                </ul>
                            </div>
                        </div>
                    </main>
                    <footer>
                        <button class="kanban-add-task btn btn-block"><em class="icon ni ni-plus-sm"></em><span>Add another task</span>
                        </button>
                    </footer>
                </div>
               <div data-id="_completed" data-order="4" class="kanban-board" style="width: 320px; margin-left: 0px; margin-right: 0px;">
                <header class="kanban-board-header kanban-success">
                <div class="kanban-title-board">
                            <div class="kanban-title-content">
                                <h6 class="title">Quote Done</h6>
                                <span class="badge badge-pill badge-outline-light text-dark">1</span>
                            </div>
                            <div class="kanban-title-content">
                                <div class="drodown">
                                    <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mr-n1" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="link-list-opt no-bdr">
                                            <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit Board</span></a></li>
                                            <li><a href="#"><em class="icon ni ni-plus-sm"></em><span>Add Task</span></a></li>
                                            <li><a href="#"><em class="icon ni ni-plus-sm"></em><span>Add Option</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            </div>
                            </header>
                          <main class="kanban-drag">
                            <div class="kanban-item">
                            <div class="kanban-item-title">
                                <h6 class="title">Email notification to SP to encourage them to get feedback</h6>
                                <div class="drodown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <div class="user-avatar-group">
                                            <div class="user-avatar xs bg-purple">
                                                <span>A</span>
                                            </div>
                                            <div class="user-avatar xs bg-success">
                                                <span>B</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="link-list-opt no-bdr p-3 g-2">
                                            <li>
                                                <div class="user-card">
                                                    <div class="user-avatar sm bg-primary">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-name">
                                                        <span class="tb-lead">Abu Bin Ishtiyak</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="user-card">
                                                    <div class="user-avatar sm bg-success">
                                                        <span>BA</span>
                                                    </div>
                                                    <div class="user-name">
                                                        <span class="tb-lead">Butler Alan</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                 <a href="#" data-toggle="modal" data-target="#editDataDash"><em class="icon ni ni-edit"></em></a>
                            </div>
                            <div class="kanban-item-text">
                                <p>Complete website development for Oberlo limited.</p>
                            </div>
                            <ul class="kanban-item-tags">
                                <li><span class="badge badge-info">Email</span></li>
                                <li><span class="badge badge-danger">SMS</span></li>
                            </ul>
                            <div class="kanban-item-meta">
                                <ul class="kanban-item-meta-list">
                                    <li class="text-danger"><em class="icon ni ni-calendar"></em><span>Send after 2</span></li>
                                    <li><em class="icon ni ni-notes"></em><span>Backend</span></li>
                                </ul>
                                <ul class="kanban-item-meta-list">
                                    <li><em class="icon ni ni-clip"></em><span>16</span></li>
                                    <li><em class="icon ni ni-comments"></em><span>25</span></li>
                                </ul>
                            </div>
                        </div>
                            <div class="kanban-item">
                            <div class="kanban-item-title">
                                <h6 class="title"> Email notification to customer to go and complete the feedback</h6>
                                <div class="drodown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <div class="user-avatar-group">
                                            <div class="user-avatar xs bg-purple">
                                                <span>A</span>
                                            </div>
                                            <div class="user-avatar xs bg-success">
                                                <span>B</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="link-list-opt no-bdr p-3 g-2">
                                            <li>
                                                <div class="user-card">
                                                    <div class="user-avatar sm bg-primary">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-name">
                                                        <span class="tb-lead">Abu Bin Ishtiyak</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="user-card">
                                                    <div class="user-avatar sm bg-success">
                                                        <span>BA</span>
                                                    </div>
                                                    <div class="user-name">
                                                        <span class="tb-lead">Butler Alan</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                 <a href="#" data-toggle="modal" data-target="#editDataDash"><em class="icon ni ni-edit"></em></a>
                            </div>
                            <div class="kanban-item-text">
                                <p>Complete website development for Oberlo limited.</p>
                            </div>
                            <ul class="kanban-item-tags">
                                <li><span class="badge badge-info">Email</span></li>
                                <li><span class="badge badge-danger">SMS</span></li>
                            </ul>
                            <div class="kanban-item-meta">
                                <ul class="kanban-item-meta-list">
                                    <li class="text-danger"><em class="icon ni ni-calendar"></em><span>Send Immediatly</span></li>
                                    <li><em class="icon ni ni-notes"></em><span>Backend</span></li>
                                </ul>
                                <ul class="kanban-item-meta-list">
                                    <li><em class="icon ni ni-clip"></em><span>16</span></li>
                                    <li><em class="icon ni ni-comments"></em><span>25</span></li>
                                </ul>
                            </div>
                        </div>
                    </main>
                    <footer><button class="kanban-add-task btn btn-block"><em class="icon ni ni-plus-sm"></em><span>Add another task</span></button></footer></div>
                        </div>
                    </div>
                </div>
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
                <!-- content @e -->
@endsection
@section('script')


@endsection