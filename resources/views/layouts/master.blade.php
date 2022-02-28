
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
    <link rel="stylesheet" href="{{asset('public/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <!--<link rel="stylesheet" href="{{asset('public/assets/fonts/fontawesome-all.min.css')}}">-->
    <!--<link rel="stylesheet" href="{{asset('public/assets/fonts/font-awesome.min.css')}}">-->
    <!--<link rel="stylesheet" href="{{asset('public/assets/fonts/fontawesome5-overrides.min.css')}}">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha512-9BwLAVqqt6oFdXohPLuNHxhx36BVj5uGSGmizkmGkgl3uMSgNalKc/smum+GJU/TTP0jy0+ruwC3xNAk3F759A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('public/assets/css/Filter.css')}}">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: rgb(74,47,74);min-height: 607px;width: 127px;">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#" style="width: 172.094px;padding-right: 17px;">
                    <div class="sidebar-brand-icon rotate-n-15"><img src="assets/img/clipboard-image.png" style="width: 41px;height: 28.7031px;transform: rotate(16deg);padding-top: 0px;"></div>
                    <div class="sidebar-brand-text mx-3"><span style="margin-top: 0px;padding-top: 0px;">ENKPAY</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link active" href="index.html"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="user.html"><i class="fas fa-user"></i><span>Users</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="hardware.html"><i class="fa fa-fax"></i><span>Hardware Inventory</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="login.html"><i class="fa fa-list-ul"></i><span>Bill Payment</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="register.html"><i class="fa fa-bank"></i><span>Bank Transfer</span></a><a class="nav-link" href="register.html"><i class="fa fa-mobile"></i><span>App Settings</span></a><a class="nav-link" href="register.html"><i class="fa fa-gears"></i><span>Settings</span></a></li>
                </ul><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button>
                <div class="text-center d-none d-md-inline"></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ..."><button class="btn btn-primary py-0" type="button" style="background: rgb(126,3,121);"><i class="fas fa-search"></i></button></div>
                        </form>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 12, 2019</span>
                                                <p>A new monthly report is ready to download!</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 7, 2019</span>
                                                <p>$290.29 has been deposited into your account!</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 2, 2019</span>
                                                <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">7</span><i class="fas fa-envelope fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar4.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                                <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar2.jpeg">
                                                <div class="status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                                <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar3.jpeg">
                                                <div class="bg-warning status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                                <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar5.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
                                                <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">Admin</span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                @yield('content')
            </div>
            <footer class="bg-white sticky-footer">
                <!--<div id="content">-->
                <!--    <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">-->
                <!--        <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>-->
                <!--            <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">-->
                <!--                <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ..."><button class="btn btn-primary py-0" type="button" style="background: rgb(126,3,121);"><i class="fas fa-search"></i></button></div>-->
                <!--            </form>-->
                <!--            <ul class="navbar-nav flex-nowrap ms-auto">-->
                <!--                <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>-->
                <!--                    <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">-->
                <!--                        <form class="me-auto navbar-search w-100">-->
                <!--                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">-->
                <!--                                <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>-->
                <!--                            </div>-->
                <!--                        </form>-->
                <!--                    </div>-->
                <!--                </li>-->
                <!--                <li class="nav-item dropdown no-arrow mx-1">-->
                <!--                    <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>-->
                <!--                        <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">-->
                <!--                            <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">-->
                <!--                                <div class="me-3">-->
                <!--                                    <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>-->
                <!--                                </div>-->
                <!--                                <div><span class="small text-gray-500">December 12, 2019</span>-->
                <!--                                    <p>A new monthly report is ready to download!</p>-->
                <!--                                </div>-->
                <!--                            </a><a class="dropdown-item d-flex align-items-center" href="#">-->
                <!--                                <div class="me-3">-->
                <!--                                    <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>-->
                <!--                                </div>-->
                <!--                                <div><span class="small text-gray-500">December 7, 2019</span>-->
                <!--                                    <p>$290.29 has been deposited into your account!</p>-->
                <!--                                </div>-->
                <!--                            </a><a class="dropdown-item d-flex align-items-center" href="#">-->
                <!--                                <div class="me-3">-->
                <!--                                    <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>-->
                <!--                                </div>-->
                <!--                                <div><span class="small text-gray-500">December 2, 2019</span>-->
                <!--                                    <p>Spending Alert: We've noticed unusually high spending for your account.</p>-->
                <!--                                </div>-->
                <!--                            </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </li>-->
                <!--                <li class="nav-item dropdown no-arrow mx-1">-->
                <!--                    <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">7</span><i class="fas fa-envelope fa-fw"></i></a>-->
                <!--                        <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">-->
                <!--                            <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">-->
                <!--                                <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar4.jpeg">-->
                <!--                                    <div class="bg-success status-indicator"></div>-->
                <!--                                </div>-->
                <!--                                <div class="fw-bold">-->
                <!--                                    <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>-->
                <!--                                    <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>-->
                <!--                                </div>-->
                <!--                            </a><a class="dropdown-item d-flex align-items-center" href="#">-->
                <!--                                <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar2.jpeg">-->
                <!--                                    <div class="status-indicator"></div>-->
                <!--                                </div>-->
                <!--                                <div class="fw-bold">-->
                <!--                                    <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>-->
                <!--                                    <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>-->
                <!--                                </div>-->
                <!--                            </a><a class="dropdown-item d-flex align-items-center" href="#">-->
                <!--                                <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar3.jpeg">-->
                <!--                                    <div class="bg-warning status-indicator"></div>-->
                <!--                                </div>-->
                <!--                                <div class="fw-bold">-->
                <!--                                    <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>-->
                <!--                                    <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>-->
                <!--                                </div>-->
                <!--                            </a><a class="dropdown-item d-flex align-items-center" href="#">-->
                <!--                                <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar5.jpeg">-->
                <!--                                    <div class="bg-success status-indicator"></div>-->
                <!--                                </div>-->
                <!--                                <div class="fw-bold">-->
                <!--                                    <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>-->
                <!--                                    <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>-->
                <!--                                </div>-->
                <!--                            </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                    <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>-->
                <!--                </li>-->
                <!--                <div class="d-none d-sm-block topbar-divider"></div>-->
                <!--                <li class="nav-item dropdown no-arrow">-->
                <!--                    <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">Admin</span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg"></a>-->
                <!--                        <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>-->
                <!--                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </li>-->
                <!--            </ul>-->
                <!--        </div>-->
                <!--    </nav>-->
                <!--    <div class="container" style="margin: 11px;">-->
                <!--        <div class="row">-->
                <!--            <div class="col-md-6">-->
                <!--                <h2 class="text-start text-dark mb-4">Hardware Invetory</h2>-->
                <!--            </div>-->
                <!--            <div class="col-md-6" style="text-align: right;"><button class="btn btn-secondary text-end border rounded-0" type="submit">Add New&nbsp;</button></div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    <div class="container">-->
                <!--        <div class="row">-->
                <!--            <div class="col-md-6 col-xl-3 mb-4" style="width: 388.25px;">-->
                <!--                <div class="card shadow border-start-primary py-2" style="width: 307px;">-->
                <!--                    <div class="card-body">-->
                <!--                        <div class="row align-items-center no-gutters" style="width: 284px;">-->
                <!--                            <div class="col me-2">-->
                <!--                                <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>BIG POS</span></div>-->
                <!--                                <div class="text-dark fw-bold h5 mb-0"><span>5,000</span></div>-->
                <!--                            </div>-->
                <!--                            <div class="col-auto"><i class="fas fa-calculator fa-2x text-gray-300"></i></div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <div class="col-md-6 col-xl-3 mb-4" style="width: 388.25px;">-->
                <!--                <div class="card shadow border-start-success py-2" style="width: 323px;padding: 8px 0px;">-->
                <!--                    <div class="card-body" style="width: 282px;">-->
                <!--                        <div class="row align-items-center no-gutters" style="width: 276px;">-->
                <!--                            <div class="col me-2" style="width: 261px;">-->
                <!--                                <div class="text-uppercase text-success fw-bold text-xs mb-1"><span>MPOS</span></div>-->
                <!--                                <div class="text-dark fw-bold h5 mb-0"><span>12,000</span></div>-->
                <!--                            </div>-->
                <!--                            <div class="col-auto"><i class="fas fa-calculator fa-2x text-gray-300" style="width: 0px;"></i></div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <div class="col-md-6 col-xl-3 mb-4">-->
                <!--                <div class="card shadow border-start-info py-2" style="width: 301px;">-->
                <!--                    <div class="card-body">-->
                <!--                        <div class="row align-items-center no-gutters">-->
                <!--                            <div class="col me-2">-->
                <!--                                <div class="text-uppercase text-info fw-bold text-xs mb-1"><span style="color: var(--bs-pink);">REPAIR</span></div>-->
                <!--                                <div class="row g-0 align-items-center">-->
                <!--                                    <div class="col-auto">-->
                <!--                                        <div class="text-dark fw-bold h5 mb-0 me-3"><span>10</span></div>-->
                <!--                                    </div>-->
                <!--                                </div>-->
                <!--                            </div>-->
                <!--                            <div class="col-auto"><i class="fas fa-calculator fa-2x text-gray-300"></i></div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    <div class="container-fluid">-->
                <!--        <div class="card shadow">-->
                <!--            <div class="card-header py-3">-->
                <!--                <p class="text-primary m-0 fw-bold">Hardware List</p>-->
                <!--            </div>-->
                <!--            <div class="card-body">-->
                <!--                <div class="row">-->
                <!--                    <div class="col-md-6 text-nowrap">-->
                <!--                        <div id="dataTable_length-1" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Show&nbsp;<select class="d-inline-block form-select form-select-sm">-->
                <!--                                    <option value="10" selected="">10</option>-->
                <!--                                    <option value="25">25</option>-->
                <!--                                    <option value="50">50</option>-->
                <!--                                    <option value="100">100</option>-->
                <!--                                </select>&nbsp;</label></div>-->
                <!--                    </div>-->
                <!--                    <div class="col-md-6">-->
                <!--                        <div class="text-md-end dataTables_filter" id="dataTable_filter-1"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">-->
                <!--                    <table class="table my-0" id="dataTable">-->
                <!--                        <thead>-->
                <!--                            <tr>-->
                <!--                                <th>Device ID</th>-->
                <!--                                <th>Owner</th>-->
                <!--                                <th>State</th>-->
                <!--                                <th>Status</th>-->
                <!--                                <th>Action</th>-->
                <!--                            </tr>-->
                <!--                        </thead>-->
                <!--                        <tbody>-->
                <!--                            <tr>-->
                <!--                                <td>MT345356474</td>-->
                <!--                                <td>&nbsp;Adejimi Tolulope</td>-->
                <!--                                <td>Lagos</td>-->
                <!--                                <td>Active</td>-->
                <!--                                <td style="border-color: rgb(74,47,74);color: rgb(74,47,74);text-decoration: underline;font-size: 14px;" href="edit-user.html">Edit</td>-->
                <!--                            </tr>-->
                <!--                            <tr>-->
                <!--                                <td>MT345356474</td>-->
                <!--                                <td>Angelica Ramos</td>-->
                <!--                                <td>Ondo</td>-->
                <!--                                <td>Active</td>-->
                <!--                                <td style="border-color: rgb(74,47,74);color: rgb(74,47,74);text-decoration: underline;font-size: 14px;">Edit</td>-->
                <!--                            </tr>-->
                <!--                            <tr>-->
                <!--                                <td>MT345356474</td>-->
                <!--                                <td>Ashton Cox</td>-->
                <!--                                <td>Lokoja</td>-->
                <!--                                <td>Repair</td>-->
                <!--                                <td style="border-color: rgb(74,47,74);color: rgb(74,47,74);text-decoration: underline;font-size: 14px;">Edit</td>-->
                <!--                            </tr>-->
                <!--                            <tr>-->
                <!--                                <td>MT345356474</td>-->
                <!--                                <td>Bradley Greer</td>-->
                <!--                                <td>Ogun</td>-->
                <!--                                <td>Active</td>-->
                <!--                                <td style="border-color: rgb(74,47,74);color: rgb(74,47,74);text-decoration: underline;font-size: 14px;">Edit</td>-->
                <!--                            </tr>-->
                <!--                            <tr>-->
                <!--                                <td>MT345356474</td>-->
                <!--                                <td>Brenden Wagner</td>-->
                <!--                                <td>Ondo</td>-->
                <!--                                <td>Active</td>-->
                <!--                                <td style="border-color: rgb(74,47,74);color: rgb(74,47,74);text-decoration: underline;font-size: 14px;">Edit</td>-->
                <!--                            </tr>-->
                <!--                            <tr>-->
                <!--                                <td>MT345356474</td>-->
                <!--                                <td>Kola Kunle</td>-->
                <!--                                <td>Lagos</td>-->
                <!--                                <td>Active</td>-->
                <!--                                <td style="border-color: rgb(74,47,74);color: rgb(74,47,74);text-decoration: underline;font-size: 14px;">Edit</td>-->
                <!--                            </tr>-->
                <!--                            <tr>-->
                <!--                                <td>MT345356474<br></td>-->
                <!--                                <td>Kola Kunle</td>-->
                <!--                                <td>Lagos</td>-->
                <!--                                <td>Active</td>-->
                <!--                                <td style="border-color: rgb(74,47,74);color: rgb(74,47,74);text-decoration: underline;font-size: 14px;">Edit</td>-->
                <!--                            </tr>-->
                <!--                            <tr>-->
                <!--                                <td>MT345356474</td>-->
                <!--                                <td>Kola Kunle</td>-->
                <!--                                <td>Oyo</td>-->
                <!--                                <td>Active</td>-->
                <!--                                <td style="border-color: rgb(74,47,74);color: rgb(74,47,74);text-decoration: underline;font-size: 14px;">Edit</td>-->
                <!--                            </tr>-->
                <!--                            <tr>-->
                <!--                                <td>MT345356474</td>-->
                <!--                                <td>Kola Kunle</td>-->
                <!--                                <td>Oyo</td>-->
                <!--                                <td>Active</td>-->
                <!--                                <td style="border-color: rgb(74,47,74);color: rgb(74,47,74);text-decoration: underline;font-size: 14px;">Edit</td>-->
                <!--                            </tr>-->
                <!--                            <tr>-->
                <!--                                <td>MT345356474</td>-->
                <!--                                <td>Kola Kunle</td>-->
                <!--                                <td>Lagos</td>-->
                <!--                                <td>Active</td>-->
                <!--                                <td style="border-color: rgb(74,47,74);color: rgb(74,47,74);text-decoration: underline;font-size: 14px;">Edit</td>-->
                <!--                            </tr>-->
                <!--                        </tbody>-->
                <!--                        <tfoot>-->
                <!--                            <tr>-->
                <!--                                <td><strong>Device ID</strong></td>-->
                <!--                                <td><strong>Name</strong></td>-->
                <!--                                <td><strong>State</strong></td>-->
                <!--                                <td><strong>Action</strong></td>-->
                <!--                                <td></td>-->
                <!--                                <td></td>-->
                <!--                            </tr>-->
                <!--                        </tfoot>-->
                <!--                    </table>-->
                <!--                </div>-->
                <!--                <div class="row">-->
                <!--                    <div class="col-md-6 align-self-center">-->
                <!--                        <p id="dataTable_info-1" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>-->
                <!--                    </div>-->
                <!--                    <div class="col-md-6">-->
                <!--                        <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">-->
                <!--                            <ul class="pagination">-->
                <!--                                <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>-->
                <!--                                <li class="page-item active"><a class="page-link" href="#">1</a></li>-->
                <!--                                <li class="page-item"><a class="page-link" href="#">2</a></li>-->
                <!--                                <li class="page-item"><a class="page-link" href="#">3</a></li>-->
                <!--                                <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>-->
                <!--                            </ul>-->
                <!--                        </nav>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span><br><br><strong>© 2022 Enkwave Dynamic Technologies</strong><br><br></span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="{{asset('public/assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/assets/js/theme.js')}}"></script>
</body>

</html>