@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-md-3">
		<div class="card mb-4">
			<div class="card-header container-fluid">
			  <div class="row">
				<div class="col-md-8">
				  <h3>Event</h3>
				</div>
				<div class="col-md-4 btn-group">
				  <a href="#"><button class="btn btn-primary custom-btn btn-sm"><i class="i-Receipt"></i></button></a>
				  <a href="{{route('inkubator.event-calendar')}}"><button class="btn btn-primary custom-btn btn-sm"><i class="i-Calendar-4"></i></button></a>
				</div>
			  </div>
			</div>
			<div class="card-body">
				<div class="create_event_wrap">

				</div>
			</div>
		</div>
	</div>
	<div class="col-md-9">
                <div id="task-manager-list">
                    <!--  content area -->
                    <div class="content">
                        <!--  task manager table -->
                        <div class="card" id="card">

                            <div class="card-body" id="card-body">
                                <div class="search ul-task-manager__search-inline">
                                    <nav class="navbar">
                                        <form class="form-inline">
                                            <label class="col-sm-2 col-form-label mr-2" for="inputEmail3">Filter:</label>
                                            <input class="form-control mr-sm-2" id="filterInput" type="search" placeholder="type to filter" aria-label="Search" />
                                        </form>
                                    </nav>
                                    <label><span>Show:</span>
                                        <select>
                                            <option value="15">15</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="75">75</option>
                                            <option value="100">100</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered custom-sm-width" id="names">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Event Description</th>
                                                <th scope="col">Priority</th>
                                                <th scope="col">Latest Update</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Assigned Users</th>
                                                <th scope="col"><a href="href"><span class="checkmarks">
                                                            <div class="checkmark_stem"></div>
                                                            <div class="checkmark_kick"></div>
                                                        </span></a></th>
                                            </tr>
                                        </thead>
                                        <thead class="thead-light">
                                            <tr>
                                                <th colspan="7">Last Week</th>
                                            </tr>
                                        </thead>
                                        <tbody id="names">
                                            <!-- --------------------------- tr1 -------------------------------------------->
                                            <tr id="names">
                                                <th class="head-width" scope="row">#1</th>
                                                <td class="collection-item">
                                                    <div class="font-weight-bold"><a href="#">Update User profile page</a></div>
                                                    <div class="text-muted">A small river named Duden flows by their place and supplies it..</div>
                                                </td>
                                                <td class="custom-align">
                                                    <div class="btn-group">
                                                        <button class="btn btn-danger custom-btn btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Blocker

                                                        </button>
                                                        <div class="dropdown-menu ul-task-manager__dropdown-menu"><a class="dropdown-item" href="#"><span class="ul-task-manager__dot bg-primary mr-2"></span>Blocker</a><a class="dropdown-item" href="#"><span class="ul-task-manager__dot bg-danger mr-2"></span>High Priority</a><a class="dropdown-item" href="#"><span class="ul-task-manager__dot bg-warning mr-2"></span>Normal Priority</a><a class="dropdown-item" href="#"><span class="ul-task-manager__dot bg-success mr-2"></span>Low Priority</a></div>
                                                    </div>
                                                </td>
                                                <td class="custom-align">
                                                    <div class="d-inline-flex align-items-center calendar align-middle"><i class="i-Calendar-4"></i><span>12 January 2015</span></div>
                                                </td>
                                                <td class="custom-align">
                                                    <select class="custom-select task-manager-list-select" id="inputGroupSelect01">
                                                        <option selected="selected">Choose...</option>
                                                        <option value="1">Open</option>
                                                        <option value="2">On hold</option>
                                                        <option value="3">Resolved</option>
                                                        <option value="3">Duplicate</option>
                                                        <option value="3">Invalid</option>
                                                        <option value="3">Wontfix</option>
                                                        <option value="3">Closed</option>
                                                    </select>
                                                </td>
                                                <td class="custom-align"><img class="rounded-circle m-0 ul-task-manager__avatar" src="{{ asset('theme/images/faces/1.jpg')}}" alt="alt" /><img class="rounded-circle m-0 ul-task-manager__avatar" src="{{ asset('theme/images/faces/1.jpg')}}" alt="alt" /><i class="i-Add font-custom-table"></i></td>
                                                <td class="custom-align"><span id="menu-toggle">
                                                        <div class="dropdown"><i class="i-Align-Right custom-font-down-arrow" data-toggle="dropdown"></i>
                                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Check In</a><a class="dropdown-item" href="#">Attach Screenshot 2</a><a class="dropdown-item" href="#">Reassign</a><a class="dropdown-item" href="#">Edit Task</a><a class="dropdown-item" href="#">Remove</a></div>
                                                        </div>
                                                    </span></td>
                                            </tr>
                                            <!-- ------------------------------ end of tr1 -------------------------------------->
                                            <!--  table row 2 -->
                                            <tr>
                                                <th scope="row">#2</th>
                                                <td class="collection-item">
                                                    <div class="font-weight-bold"><a href="#">Not Update User profile page</a></div>
                                                    <div class="text-muted">A small river named Duden flows by their place and supplies it..</div>
                                                </td>
                                                <td class="custom-align">
                                                    <div class="btn-group">
                                                        <button class="btn btn-success custom-btn btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Low

                                                        </button>
                                                        <div class="dropdown-menu ul-task-manager__dropdown-menu"><a class="dropdown-item" href="#"><span class="ul-task-manager__dot bg-primary mr-2"></span>Blocker</a><a class="dropdown-item" href="#"><span class="ul-task-manager__dot bg-warning mr-2"></span>High Priority</a><a class="dropdown-item" href="#"><span class="ul-task-manager__dot bg-danger mr-2"></span>Normal Priority</a><a class="dropdown-item" href="#"><span class="ul-task-manager__dot bg-info mr-2"></span>Low Priority</a></div>
                                                    </div>
                                                </td>
                                                <td class="custom-align">
                                                    <div class="d-inline-flex align-items-center calendar"><i class="i-Calendar-4"></i><span>12 January 2015</span>
                                                        <!--  <input size="16" type="text" value="2012-06-15 14:45" readonly class="form_datetime"> -->
                                                    </div>
                                                </td>
                                                <td class="custom-align">
                                                    <select class="custom-select task-manager-list-select" id="inputGroupSelect01">
                                                        <option selected="selected">Choose...</option>
                                                        <option value="1">Open</option>
                                                        <option value="2">On hold</option>
                                                        <option value="3">Resolved</option>
                                                        <option value="3">Duplicate</option>
                                                        <option value="3">Invalid</option>
                                                        <option value="3">Wontfix</option>
                                                        <option value="3">Closed</option>
                                                    </select>
                                                </td>
                                                <td class="custom-align"><img class="rounded-circle m-0 ul-task-manager__avatar" src="{{ asset('theme/images/faces/1.jpg')}}" alt="alt" /><img class="rounded-circle m-0 ul-task-manager__avatar" src="{{ asset('theme/images/faces/1.jpg')}}" alt="alt" /><i class="i-Add font-custom-table"></i></td>
                                                <td class="custom-align"><span id="menu-toggle">
                                                        <div class="dropdown"><i class="i-Align-Right custom-font-down-arrow" data-toggle="dropdown"></i>
                                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Check In</a><a class="dropdown-item" href="#">Attach Screenshot 2</a><a class="dropdown-item" href="#">Reassign</a><a class="dropdown-item" href="#">Edit Task</a><a class="dropdown-item" href="#">Remove</a></div>
                                                        </div>
                                                    </span></td>
                                            </tr>
                                            <!--  end of table row 2 -->
                                        </tbody>
                                        <thead class="thead-light">
                                            <tr>
                                                <th colspan="7">2 Days Ago</th>
                                            </tr>
                                        </thead>
                                        <!--  table row 3 -->
                                        <tbody>
                                            <tr>
                                                <th scope="row">#3</th>
                                                <td class="collection-item">
                                                    <div class="font-weight-bold"><a href="#">Update User profile page</a></div>
                                                    <div class="text-muted">A small river named Duden flows by their place and supplies it..</div>
                                                </td>
                                                <td class="custom-align">
                                                    <div class="btn-group">
                                                        <button class="btn btn-warning text-white custom-btn btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            High

                                                        </button>
                                                        <div class="dropdown-menu ul-task-manager__dropdown-menu"><a class="dropdown-item" href="#"><span class="ul-task-manager__dot bg-primary mr-2"></span>Blocker</a><a class="dropdown-item" href="#"><span class="ul-task-manager__dot bg-danger mr-2"></span>High Priority</a><a class="dropdown-item" href="#"><span class="ul-task-manager__dot bg-success mr-2"></span>Normal Priority</a><a class="dropdown-item" href="#"><span class="ul-task-manager__dot bg-warning mr-2"></span>Low Priority</a></div>
                                                    </div>
                                                </td>
                                                <td class="custom-align">
                                                    <div class="d-inline-flex align-items-center calendar"><i class="i-Calendar-4"></i><span>12 January 2015</span></div>
                                                </td>
                                                <td class="custom-align">
                                                    <select class="custom-select task-manager-list-select" id="inputGroupSelect01">
                                                        <option selected="selected">Choose...</option>
                                                        <option value="1">Open</option>
                                                        <option value="2">On hold</option>
                                                        <option value="3">Resolved</option>
                                                        <option value="3">Duplicate</option>
                                                        <option value="3">Invalid</option>
                                                        <option value="3">Wontfix</option>
                                                        <option value="3">Closed</option>
                                                    </select>
                                                </td>
                                                <td class="custom-align"><img class="rounded-circle m-0 ul-task-manager__avatar" src="{{ asset('theme/images/faces/1.jpg')}}" alt="alt" /><img class="rounded-circle m-0 ul-task-manager__avatar" src="{{ asset('theme/images/faces/1.jpg')}}" alt="alt" /><i class="i-Add font-custom-table"></i></td>
                                                <td class="custom-align"><span id="menu-toggle">
                                                        <div class="dropdown"><i class="i-Align-Right custom-font-down-arrow" data-toggle="dropdown"></i>
                                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Check In</a><a class="dropdown-item" href="#">Attach Screenshot 2</a><a class="dropdown-item" href="#">Reassign</a><a class="dropdown-item" href="#">Edit Task</a><a class="dropdown-item" href="#">Remove</a></div>
                                                        </div>
                                                    </span></td>
                                            </tr>
                                            <!--  end of table row 3 -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer text-muted">
                                <div class="row align-items-center">
                                    <div class="col"><span>Showing 1 to 25 of 25 entries</span></div>
                                    <div class="col">
                                        <ul class="pagination justify-content-end">
                                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  end of task manager table -->
                    </div>
                    <!--  end of content area -->
                </div>
	</div>
</div>
@endsection
