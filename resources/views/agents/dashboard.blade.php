@extends('layouts.master')
@section('content')
<div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Admin Dashboard</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-3 mb-4" style="width: 388.25px;">
                            <div class="card shadow border-start-primary py-2" style="width: 307px;">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters" style="width: 284px;">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Total profit</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span>N40,000</span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-dollar-sign fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4" style="width: 388.25px;">
                            <div class="card shadow border-start-success py-2" style="width: 323px;padding: 8px 0px;">
                                <div class="card-body" style="width: 282px;">
                                    <div class="row align-items-center no-gutters" style="width: 276px;">
                                        <div class="col me-2" style="width: 261px;">
                                            <div class="text-uppercase text-success fw-bold text-xs mb-1"><span>Total(in)</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span>N140,000</span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-dollar-sign fa-2x text-gray-300" style="width: 0px;"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-info py-2" style="width: 301px;">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-info fw-bold text-xs mb-1"><span style="color: var(--bs-pink);">total (out)</span></div>
                                            <div class="row g-0 align-items-center">
                                                <div class="col-auto">
                                                    <div class="text-dark fw-bold h5 mb-0 me-3"><span>N100,000</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-dollar-sign fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-bottom: 42px;">
                        <div class="col-md-6 col-xl-3 mb-4" style="width: 388.25px;">
                            <div class="card shadow border-start-primary py-2" style="width: 307px;">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters" style="width: 284px;">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>total agents</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span>4,000</span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-user-tie fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4" style="width: 388.25px;padding-right: 14px;padding-left: 10px;">
                            <div class="card shadow border-start-success py-2" style="width: 323px;padding: 8px 0px;">
                                <div class="card-body" style="width: 282px;">
                                    <div class="row align-items-center no-gutters" style="width: 276px;">
                                        <div class="col me-2" style="width: 261px;">
                                            <div class="text-uppercase text-success fw-bold text-xs mb-1"><span style="color: rgb(0,6,4);">Total users</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span>5000</span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-user-friends fa-2x text-gray-300" style="width: 0px;"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-info py-2" style="width: 301px;">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-info fw-bold text-xs mb-1"><span style="color: var(--bs-pink);">pending request</span></div>
                                            <div class="row g-0 align-items-center">
                                                <div class="col-auto">
                                                    <div class="text-dark fw-bold h5 mb-0 me-3"><span>10</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-caret-square-down fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<div class="container-fluid">
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Recent transactions</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length-1" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Show&nbsp;<select class="d-inline-block form-select form-select-sm">
                                                <option value="10" selected="">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>&nbsp;</label></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter-1"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Transaction ID</th>
                                            <th>Transaction Type</th>
                                            <th>Amount</th>
                                            <th>Agent/User</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>TXSHDHDS2636POS</td>
                                            <td>CASH-OUT</td>
                                            <td>4,989</td>
                                            <td>Akin</td>
                                            <td>12/01/2022</td>
                                            <td style="border-radius: 10;border-style: solid;border-color: rgb(3,129,0);color: rgb(1,119,6);">Successful</td>
                                        </tr>
                                        <tr>
                                            <td>TXSHDHDS2636RE<br></td>
                                            <td>MTN RECHARGE CARD<br></td>
                                            <td>100</td>
                                            <td>Akin</td>
                                            <td>12/01/2022<br></td>
                                            <td style="border-radius: 10;border-style: solid;border-color: rgb(3,129,0);color: rgb(1,119,6);">Successful <br></td>
                                        </tr>
                                        <tr></tr>
                                        <tr>
                                            <td>TXSHDG556636DA<br></td>
                                            <td>AIRTEL DATA<br></td>
                                            <td>2,500</td>
                                            <td>Bello<br></td>
                                            <td>10/01/2022<br></td>
                                            <td style="border-radius: 10;border-style: solid;border-color: rgb(3,129,0);color: rgb(1,119,6);">Successful<br></td>
                                        </tr>
                                        <tr>
                                            <td>TXSHDG556636CA<br></td>
                                            <td>GOTV</td>
                                            <td>3,500</td>
                                            <td>Kola</td>
                                            <td>10/01/2022<br></td>
                                            <td style="border-radius: 10;border-style: solid;border-color: rgb(3,129,0);color: rgb(1,119,6);">Successful<br></td>
                                        </tr>
                                        <tr>
                                            <td>TXSHDG556636TR<br></td>
                                            <td>BANK TRANSFER</td>
                                            <td>5,000</td>
                                            <td>Ben</td>
                                            <td>06/01/2022<br></td>
                                            <td style="border-radius: 10;border-style: solid;border-color: rgb(3,129,0);color: rgb(1,119,6);">Successful<br></td>
                                        </tr>
                                        <tr></tr>
                                        <tr>
                                            <td>TXSHDHDS2636POS<br></td>
                                            <td>CASH-OUT</td>
                                            <td>15,495</td>
                                            <td>Akin</td>
                                            <td>04/01/2022<br></td>
                                            <td style="border-radius: 10;color: rgb(183,0,22);border-style: solid;border-color: rgb(205,4,64);">Failed<br></td>
                                        </tr>
                                        <tr>
                                            <td>TXSHDHDS2636POS<br></td>
                                            <td>CASH-OUT</td>
                                            <td>985</td>
                                            <td>Basmus</td>
                                            <td>04/01/2022<br></td>
                                            <td style="border-radius: 10;color: rgb(183,0,22);border-style: solid;border-color: rgb(205,4,64);">Failed</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td><strong>Transaction ID<br></strong></td>
                                            <td><strong>Transaction Type<br></strong></td>
                                            <td><strong>Amount<br></strong></td>
                                            <td><strong>Agent/User<br></strong></td>
                                            <td><strong>Date<br></strong></td>
                                            <td><strong>Status<br></strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info-1" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection