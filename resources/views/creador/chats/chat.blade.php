@extends('layouts.panel2')

@section('content')
<div class="container-fluid pt-3">
            <div class="row removable">
                <div class="col-lg-12 px-sm-0">
                    <div class="card shadow-none px-0 bg-transparent mt-0 mb-4">
                        <div class="card-body px-0 pb-0">
                            <div class="px-0 pb-4">
                                <div class="row flex-row">
                                    <div class="col-lg-3 mb-4">
                                        <div class="card max-height-vh-70 h-100 overflow-auto overflow-x-hidden mb-5 mb-lg-0" style="max-height: 70vh;">
                                            <form class="card-header">
                                                <div class="input-group mb-0">
                                                    <input type="text" placeholder="Search" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-search"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="card-body p-2">
                                                <a href="javascript:;" class="d-block p-2 rounded-lg bg-gradient-primary">
                                                    <div class="d-flex p-2">
                                                        <img alt="Image" src="https://images.unsplash.com/photo-1529068755536-a5ade0dcb4e8?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzV8fHBvcnRyYWl0fGVufDB8MnwwfHw%3D&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=60" class="avatar shadow">
                                                        <div class="ml-2">
                                                            <div class="justify-content-between align-items-center">
                                                                <h4 class="text-white mb-0 mt-1">Andrew Jahna<span class="badge badge-success"></span>
                                                                </h4>
                                                                <p class="text-white mb-0 text-xs font-weight-normal">Job: Senior Java Developer</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript:;" class="d-block p-2">
                                                    <div class="d-flex p-2">
                                                        <img alt="Image" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cG9ydHJhaXR8ZW58MHwyfDB8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=60" class="avatar">
                                                        <div class="ml-2">
                                                            <div class="justify-content-between align-items-center">
                                                                <h4 class="mb-0 mt-1">Charlie Watson
                                                                    <span class="badge badge-success"></span>
                                                                </h4>
                                                                <p class="mb-0 text-xs font-weight-normal text-muted">Job: Senior UX Designer</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card max-height-vh-70" style="max-height: 70vh;">
                                            <div class="card-header shadow-xl">
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <div class="d-flex align-items-center">
                                                            <div class="ms-3">
                                                                <h3 class="mb-0 d-block">Chat - Krumzi</h3>
                                                                <span class="text-sm text-muted"><span class="font-weight-bold">Job: Senior UX Designer</span> | Design Team</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body overflow-auto overflow-x-hidden">
                                                <div class="row justify-content-start mb-4">
                                                    <div class="col-auto">
                                                        <div class="card ">
                                                            <div class="card-body p-2">
                                                                <p class="mb-1">
                                                                    It contains a lot of good lessons about effective practices
                                                                </p>
                                                                <div class="d-flex align-items-center text-sm opacity-6">
                                                                    <i class="far fa-clock mr-1" aria-hidden="true"></i>
                                                                    <small>3:14am</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-end text-right mb-4">
                                                    <div class="col-auto">
                                                        <div class="card bg-gradient-primary text-white">
                                                            <div class="card-body p-2">
                                                                <p class="mb-1">
                                                                    Can it generate daily design links that include essays and data visualizations ?<br>
                                                                </p>
                                                                <div class="d-flex align-items-center justify-content-end text-sm opacity-6">
                                                                    <i class="fa fa-check-double mr-1 text-xs" aria-hidden="true"></i>
                                                                    <small>4:42pm</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col-md-12 text-center">
                                                        <span class="badge text-dark">Wed, 3:27pm</span>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-start mb-4">
                                                    <div class="col-auto">
                                                        <div class="card ">
                                                            <div class="card-body p-2">
                                                                <p class="mb-1">
                                                                    Yeah! Responsive Design is geared towards those trying to build web apps
                                                                </p>
                                                                <div class="d-flex align-items-center text-sm opacity-6">
                                                                    <i class="far fa-clock mr-1" aria-hidden="true"></i>
                                                                    <small>4:31pm</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-end text-right mb-4">
                                                    <div class="col-auto">
                                                        <div class="card bg-gradient-primary text-white">
                                                            <div class="card-body p-2">
                                                                <p class="mb-1">
                                                                    Excellent, I want it now !
                                                                </p>
                                                                <div class="d-flex align-items-center justify-content-end text-sm opacity-6">
                                                                    <i class="fa fa-check-double mr-1 text-xs" aria-hidden="true"></i>
                                                                    <small>4:42pm</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-start mb-4">
                                                    <div class="col-auto">
                                                        <div class="card ">
                                                            <div class="card-body p-2">
                                                                <p class="mb-1">
                                                                    You can easily get it; The content here is all free
                                                                </p>
                                                                <div class="d-flex align-items-center text-sm opacity-6">
                                                                    <i class="far fa-clock mr-1" aria-hidden="true"></i>
                                                                    <small>4:42pm</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-end text-right mb-4">
                                                    <div class="col-auto">
                                                        <div class="card bg-gradient-primary text-white">
                                                            <div class="card-body p-2">
                                                                <p class="mb-1">
                                                                    Awesome, blog is important source material for anyone who creates apps? <br>
                                                                    Beacuse these blogs offer a lot of information about website development.
                                                                </p>
                                                                <div class="d-flex align-items-center justify-content-end text-sm opacity-6">
                                                                    <i class="fa fa-check-double mr-1 text-xs" aria-hidden="true"></i>
                                                                    <small>4:42pm</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-start mb-4">
                                                    <div class="col-5">
                                                        <div class="card ">
                                                            <div class="card-body p-2">
                                                                <div class="col-12 p-0">
                                                                    <img src="https://images.unsplash.com/photo-1585565804112-f201f68c48b4?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="Rounded image" class="img-fluid mb-2 rounded-lg">
                                                                </div>
                                                                <div class="d-flex align-items-center text-sm opacity-6">
                                                                    <i class="far fa-clock mr-1" aria-hidden="true"></i>
                                                                    <small>4:47pm</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-end text-right mb-4">
                                                    <div class="col-auto">
                                                        <div class="card bg-gradient-primary text-white">
                                                            <div class="card-body p-2">
                                                                <p class="mb-0">
                                                                    At the end of the day … the native dev apps is where users are
                                                                </p>
                                                                <div class="d-flex align-items-center justify-content-end text-sm opacity-6">
                                                                    <i class="fa fa-check-double mr-1 text-xs" aria-hidden="true"></i>
                                                                    <small>4:42pm</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-start">
                                                    <div class="col-auto">
                                                        <div class="card ">
                                                            <div class="card-body p-2">
                                                                <p class="mb-0 text-sm">
                                                                    Charlie is Typing...
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer d-block">
                                                <form class="align-items-center">
                                                    <div class="input-group mb-3">
                                                        <input type="text" placeholder="Search" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="fa fa-paper-plane"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>





                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card max-height-vh-70 h-100 overflow-auto overflow-x-hidden mb-5 mb-lg-0" style="max-height: 70vh;">
                                            <div class="card-body p-2">
                                                <a href="javascript:;" class="d-block p-2">
                                                </a>
                                                <div class="p-2 text-center">
                                                    <a href="javascript:;" class="d-block p-2">
                                                        <img alt="Image" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxzZWFyY2h8Njh8fHBvcnRyYWl0fGVufDB8MnwwfHw%3D&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=60" class="avatar avatar-lg shadow mb-0">
                                                    </a>
                                                    <div class="ml-2 mt-0 mb-0 text-center">
                                                        <div class="justify-content-between align-items-center">
                                                            <h3 class="mb-0 mt-1"></h3>
                                                            <p class="mb-0 text-sm text-dark font-weight-normal">Endava</p>
                                                            <a href="#" class="text-sm ">Perfil</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="my-3">
                                                <div class="mx-3">
                                                    <h4 class="mb-0">Applied for</h4>
                                                    <p class="text-sm text-muted font-weight-normal">Job: Krumzi</p>
                                                </div>
                                                <hr class="my-3">
                                                <div class="mx-3">
                                                    <div class="d-flex align-items-center mb-3">
                                                        <i class="fa fa-envelope opacity-7"></i>
                                                        <div class="ml-3">
                                                            <h5 class="mb-0">Email</h5>
                                                            <span class="text-sm text-primary">user@user.com
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="d-flex align-items-center">
                                                        <i class="fa fa-phone opacity-7"></i>
                                                        <div class="ml-3">
                                                            <h5 class="mb-0">Phone</h5>
                                                            <span class="text-sm text-primary">0723922012
                                                            </span>
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection