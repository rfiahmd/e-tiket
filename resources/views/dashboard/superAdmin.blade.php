@php
    $title = 'Dashboard » Admin';
    $titleHeader = '<li><strong style="margin: 0 8px;">/</strong>Dashboard</li>';
@endphp

@extends('layouts.template')

@section('content')
    <div class="container-fluid default-dashboard dashboard-2">
        <div class="row widget-grid">
            <div class="col-xl-6 col-md-6 proorder-xl-1 proorder-md-1">
                <div class="card profile-greeting p-0">
                    <div class="card-body">
                        <div class="img-overlay">
                            <h1 class="mt-3">Hello, {{ auth()->user()->role }} {{ auth()->user()->name }}!</h1>
                            <p class="mt-2">Selamat datang di Sistem E-Tiket Wisata Sumenep, solusi mudah dan cepat untuk
                                menikmati pesona wisata Sumenep!</p>
                            <p><strong>. . .</strong></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 proorder-xl-2 proorder-md-2">
                <div class="card">
                    <div class="card-body project-status-col">
                        <div class="row">
                            <div class="col-6">
                                <div class="btn-light1-primary b-r-10">
                                    <div class="upcoming-box">
                                        <div class="upcoming-icon bg-primary"> <img
                                                src="{{ asset('') }}assets/Admin-Mofi/assets/images/dashboard-2/svg-icon/calendar.png"
                                                alt=""></div>
                                        <p>5 Projects</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="btn-light1-secondary b-r-10">
                                    <div class="upcoming-box">
                                        <div class="upcoming-icon bg-secondary"> <img
                                                src="{{ asset('') }}assets/Admin-Mofi/assets/images/dashboard-2/svg-icon/check.png"
                                                alt=""></div>
                                        <p>27 Projects</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="btn-light1-warning b-r-10">
                                    <div class="upcoming-box mb-0">
                                        <div class="upcoming-icon bg-warning"> <img
                                                src="{{ asset('') }}assets/Admin-Mofi/assets/images/dashboard-2/svg-icon/processing.png"
                                                alt=""></div>
                                        <p>13 Projects</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="btn-light1-tertiary b-r-10">
                                    <div class="upcoming-box mb-0">
                                        <div class="upcoming-icon bg-tertiary"> <img
                                                src="{{ asset('') }}assets/Admin-Mofi/assets/images/dashboard-2/svg-icon/total.png"
                                                alt=""></div>
                                        <p>47 Projects</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-5 proorder-xl-3 proorder-md-3">
                <div class="card shifts-char-box">
                    <div class="card-header card-no-border pb-0">
                        <div class="header-top">
                            <h4>Shifts Overview </h4>
                            <div class="d-flex align-items-center gap-3">
                                <div class="dropdown icon-dropdown">
                                    <button class="btn dropdown-toggle" id="userdropdown16" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="icon-more-alt"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown16"><a
                                            class="dropdown-item" href="#">Weekly</a><a class="dropdown-item"
                                            href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <div class="overview" id="shifts-overview"></div>
                            </div>
                            <div class="col-7 shifts-overview">
                                <div class="d-flex gap-2">
                                    <div class="flex-shrink-0"><span class="bg-primary"> </span></div>
                                    <div class="flex-grow-1">
                                        <h6>New</h6>
                                    </div><span>86</span>
                                </div>
                                <div class="d-flex gap-2">
                                    <div class="flex-shrink-0"><span class="bg-secondary"></span></div>
                                    <div class="flex-grow-1">
                                        <h6>Waiting for approval</h6>
                                    </div><span>210</span>
                                </div>
                                <div class="d-flex gap-2">
                                    <div class="flex-shrink-0"><span class="bg-warning"> </span></div>
                                    <div class="flex-grow-1">
                                        <h6>Assigned</h6>
                                    </div><span>95</span>
                                </div>
                                <div class="d-flex gap-2">
                                    <div class="flex-shrink-0"><span class="bg-tertiary"></span></div>
                                    <div class="flex-grow-1">
                                        <h6>Cancelled</h6>
                                    </div><span>37</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-xl-7 box-col-12 proorder-xl-8 proorder-md-9">
                <div class="card">
                    <div class="card-header card-no-border pb-0">
                        <div class="header-top">
                            <h4>Sales Statistic</h4>
                            <div class="dropdown icon-dropdown">
                                <button class="btn dropdown-toggle" id="userdropdown14" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown14"><a
                                        class="dropdown-item" href="#">Weekly</a><a class="dropdown-item"
                                        href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body sale-statistic">
                        <div class="row">
                            <div class="col-3 statistic-icon">
                                <div class="light-card balance-card widget-hover">
                                    <div class="icon-box"><img
                                            src="{{ asset('') }}assets/Admin-Mofi/assets/images/dashboard/icon/customers.png"
                                            alt=""></div>
                                    <div> <span class="f-w-500 f-light">Customers</span>
                                        <h5 class="mt-1 mb-0">1.736</h5>
                                    </div>
                                    <div class="ms-auto text-end">
                                        <div class="dropdown icon-dropdown">
                                            <button class="btn dropdown-toggle" id="incomedropdown" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                                    class="icon-more-alt"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="incomedropdown">
                                                <a class="dropdown-item" href="#">Today</a><a class="dropdown-item"
                                                    href="#">Tomorrow</a><a class="dropdown-item"
                                                    href="#">Yesterday </a>
                                            </div>
                                        </div><span class="f-w-600 font-success">+3,7%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 statistic-icon">
                                <div class="light-card balance-card widget-hover">
                                    <div class="icon-box"><img
                                            src="{{ asset('') }}assets/Admin-Mofi/assets/images/dashboard/icon/revenue.png"
                                            alt=""></div>
                                    <div> <span class="f-w-500 f-light">Revenue</span>
                                        <h5 class="mt-1 mb-0">$9.247 </h5>
                                    </div>
                                    <div class="ms-auto text-end">
                                        <div class="dropdown icon-dropdown">
                                            <button class="btn dropdown-toggle" id="expensedropdown" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                                    class="icon-more-alt"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="expensedropdown"><a class="dropdown-item"
                                                    href="#">Today</a><a class="dropdown-item"
                                                    href="#">Tomorrow</a><a class="dropdown-item"
                                                    href="#">Yesterday </a></div>
                                        </div><span class="f-w-600 font-danger">-0,10%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 statistic-icon">
                                <div class="light-card balance-card widget-hover">
                                    <div class="icon-box"><img
                                            src="{{ asset('') }}assets/Admin-Mofi/assets/images/dashboard/icon/profit.png"
                                            alt=""></div>
                                    <div> <span class="f-w-500 f-light">Profit</span>
                                        <h5 class="mt-1 mb-0">80%</h5>
                                    </div>
                                    <div class="ms-auto text-end">
                                        <div class="dropdown icon-dropdown">
                                            <button class="btn dropdown-toggle" id="cashbackdropdown" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                                    class="icon-more-alt"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="cashbackdropdown"><a class="dropdown-item"
                                                    href="#">Today</a><a class="dropdown-item"
                                                    href="#">Tomorrow</a><a class="dropdown-item"
                                                    href="#">Yesterday </a></div>
                                        </div><span class="f-w-600 font-success">+11,6%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="chart-dash-2-line"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-xl-5 box-col-7 proorder-xl-9 proorder-md-10">
                <div class="card">
                    <div class="card-header card-no-border pb-0">
                        <div class="header-top">
                            <h4>Sales by Product</h4>
                            <div class="dropdown icon-dropdown">
                                <button class="btn dropdown-toggle" id="userdropdown15" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="icon-more-alt"></i></button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown15"><a
                                        class="dropdown-item" href="#">Weekly</a><a class="dropdown-item"
                                        href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body sales-product px-0 pb-0">
                        <div class="table-responsive theme-scrollbar">
                            <table class="table display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Files Name</th>
                                        <th>Amount</th>
                                        <th>% Sold</th>
                                        <th>Progressbar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0"><img
                                                        src="{{ asset('') }}assets/Admin-Mofi/assets/images/dashboard/product/1.png"
                                                        alt="">
                                                </div>
                                                <div class="flex-grow-1"><a href="list-products.html">
                                                        <h5>Touch sensor Lamp</h5>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td> $ 7.938</td>
                                        <td> 52.93%</td>
                                        <td>
                                            <div class="progress progress-striped-primary b-r-2">
                                                <div class="progress-bar" role="progressbar" style="width: 70%"
                                                    aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0"><img
                                                        src="{{ asset('') }}assets/Admin-Mofi/assets/images/dashboard/product/2.png"
                                                        alt="">
                                                </div>
                                                <div class="flex-grow-1"><a href="list-products.html">
                                                        <h5>Bluetooth headphone</h5>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td> $ 2.937</td>
                                        <td> 12.52%</td>
                                        <td>
                                            <div class="progress progress-striped-secondary b-r-2">
                                                <div class="progress-bar" role="progressbar" style="width: 40%"
                                                    aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0"><img
                                                        src="{{ asset('') }}assets/Admin-Mofi/assets/images/dashboard/product/3.png"
                                                        alt="">
                                                </div>
                                                <div class="flex-grow-1"><a href="list-products.html">
                                                        <h5>Apple watch series 8</h5>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td> $ 1.923</td>
                                        <td> 84.12%</td>
                                        <td>
                                            <div class="progress progress-striped-warning b-r-2">
                                                <div class="progress-bar" role="progressbar" style="width: 60%"
                                                    aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0"><img
                                                        src="{{ asset('') }}assets/Admin-Mofi/assets/images/dashboard/product/4.png"
                                                        alt="">
                                                </div>
                                                <div class="flex-grow-1"><a href="list-products.html">
                                                        <h5>Macbook Pro M1</h5>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td> $ 5.538</td>
                                        <td> 01.41%</td>
                                        <td>
                                            <div class="progress progress-striped-tertiary b-r-2">
                                                <div class="progress-bar" role="progressbar" style="width: 80%"
                                                    aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0"><img
                                                        src="{{ asset('') }}assets/Admin-Mofi/assets/images/dashboard/product/5.png"
                                                        alt="">
                                                </div>
                                                <div class="flex-grow-1"><a href="list-products.html">
                                                        <h5>iphone 12 Pro max</h5>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td> $ 8.258</td>
                                        <td> 14.34%</td>
                                        <td>
                                            <div class="progress progress-striped-primary b-r-2">
                                                <div class="progress-bar" role="progressbar" style="width: 50%"
                                                    aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 proorder-xl-5 box-col-7 proorder-md-5">
                <div class="card">
                    <div class="card-header card-no-border pb-0">
                        <div class="header-top">
                            <h4>Projects</h4>
                            <div class="dropdown icon-dropdown">
                                <button class="btn dropdown-toggle" id="userdropdown0" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="icon-more-alt"></i></button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown0"><a
                                        class="dropdown-item" href="#">Weekly</a><a class="dropdown-item"
                                        href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0 projects px-0">
                        <div class="table-responsive theme-scrollbar">
                            <table class="table display" id="selling-product" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Files Name</th>
                                        <th>File Type</th>
                                        <th>Date</th>
                                        <th>Sizes</th>
                                        <th>Author </th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0"><img
                                                        src="{{ asset('') }}assets/Admin-Mofi/assets/images/dashboard/project/1.png"
                                                        alt="">
                                                </div>
                                                <div class="flex-grow-1 ms-2"><a href="product-page.html">
                                                        <h6>Rules Post on Dribble</h6>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td class="project-dot">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0"><span class="bg-primary"></span></div>
                                                <div class="flex-grow-1">
                                                    <h6>Document</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td> 12 Aug 2024</td>
                                        <td> 200 Kb</td>
                                        <td>Monry Hasu</td>
                                        <td class="text-center">
                                            <div class="dropdown icon-dropdown">
                                                <button class="btn dropdown-toggle" id="userdropdown" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="icon-more-alt"></i></button>
                                                <div class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="userdropdown"><a class="dropdown-item"
                                                        href="#">Weekly</a><a class="dropdown-item"
                                                        href="#">Monthly</a><a class="dropdown-item"
                                                        href="#">Yearly</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0"><img
                                                        src="{{ asset('') }}assets/Admin-Mofi/assets/images/dashboard/project/2.png"
                                                        alt="">
                                                </div>
                                                <div class="flex-grow-1 ms-2"><a href="product-page.html">
                                                        <h6>Login & Sign Up Ui</h6>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td class="project-dot">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0"><span class="bg-secondary"></span></div>
                                                <div class="flex-grow-1">
                                                    <h6>Animation</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td> 19 Mar 2024</td>
                                        <td> 3,5 Mb</td>
                                        <td>Alex Madus</td>
                                        <td class="text-center">
                                            <div class="dropdown icon-dropdown">
                                                <button class="btn dropdown-toggle" id="userdropdown2" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="icon-more-alt"></i></button>
                                                <div class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="userdropdown2"><a class="dropdown-item"
                                                        href="#">Weekly</a><a class="dropdown-item"
                                                        href="#">Monthly</a><a class="dropdown-item"
                                                        href="#">Yearly</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0"><img
                                                        src="{{ asset('') }}assets/Admin-Mofi/assets/images/dashboard/project/3.png"
                                                        alt="">
                                                </div>
                                                <div class="flex-grow-1 ms-2"><a href="product-page.html">
                                                        <h6>Nft website Pages</h6>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td class="project-dot">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0"><span class="bg-warning"></span></div>
                                                <div class="flex-grow-1">
                                                    <h6>Image</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td> 30 Jun 2024</td>
                                        <td> 800 Kb</td>
                                        <td>Nomru Nalij</td>
                                        <td class="text-center">
                                            <div class="dropdown icon-dropdown">
                                                <button class="btn dropdown-toggle" id="userdropdown3" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="icon-more-alt"></i></button>
                                                <div class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="userdropdown3"><a class="dropdown-item"
                                                        href="#">Weekly</a><a class="dropdown-item"
                                                        href="#">Monthly</a><a class="dropdown-item"
                                                        href="#">Yearly</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0"><img
                                                        src="{{ asset('') }}assets/Admin-Mofi/assets/images/dashboard/project/4.png"
                                                        alt="">
                                                </div>
                                                <div class="flex-grow-1 ms-2"><a href="product-page.html">
                                                        <h6>Square Dashboard</h6>
                                                    </a></div>
                                            </div>
                                        </td>
                                        <td class="project-dot">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0"><span class="bg-tertiary"></span></div>
                                                <div class="flex-grow-1">
                                                    <h6>Document</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td> 24 Oct 2024</td>
                                        <td> 2,8 Mb</td>
                                        <td>Willium sen</td>
                                        <td class="text-center">
                                            <div class="dropdown icon-dropdown">
                                                <button class="btn dropdown-toggle" id="userdropdown4" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="icon-more-alt"></i></button>
                                                <div class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="userdropdown4"><a class="dropdown-item"
                                                        href="#">Weekly</a><a class="dropdown-item"
                                                        href="#">Monthly</a><a class="dropdown-item"
                                                        href="#">Yearly</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
