@extends('admin.layouts.newapp')
@section('sidebar')

    <div class="horizontal-menu-wrapper">
        <div
            class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-without-dd-arrow navbar-shadow menu-border"
            role="navigation" data-menu="menu-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mr-auto"><a class="navbar-brand"
                                                    href="../../../html/ltr/horizontal-menu-template/index.html">
                            <div class="brand-logo"></div>
                            <h2 class="brand-text mb-0">Vuexy</h2>
                        </a></li>
                    <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                                class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                                class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                                data-ticon="icon-disc"></i></a></li>
                </ul>
            </div>
            <!-- Horizontal menu content-->
            <div class="navbar-container main-menu-content" data-menu="menu-container">
                <!-- include ../../../includes/mixins-->
                <div class="cloc d-flex justify-content-lg-between">

                    <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                        <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link"
                                                                              href="index.html"
                                                                              data-toggle="dropdown"><i
                                    class="feather icon-home"></i><span data-i18n="Dashboard">Dashboard</span></a>
                            <ul class="dropdown-menu">

                                <li data-menu=""><a class="dropdown-item" href="{{route('owner.index')}}"
                                                    data-toggle="dropdown" data-i18n="eCommerce"><i
                                            class="feather icon-users"></i>Owner</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="{{route('faculties.index')}}"
                                                    data-toggle="dropdown" data-i18n="eCommerce"><i
                                            class="feather icon-clipboard"></i>Faculties</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="{{route('courses.index')}}"
                                                    data-toggle="dropdown" data-i18n="eCommerce"><i
                                            class="feather icon-list"></i>Courses</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="{{route('groups.index')}}"
                                                    data-toggle="dropdown" data-i18n="eCommerce"><i
                                            class="feather icon-align-center"></i>Groups</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="{{route('schedules.index')}}"
                                                    data-toggle="dropdown" data-i18n="eCommerce"><i
                                            class="feather icon-calendar"></i>Schedules</a>
                                </li>


                            </ul>
                        </li>

                    </ul>
                    <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                        <li class="dropdown nav-item"><a><i></i><span>{{date("Y-m-d h:i:s") }}</span></a>

                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <section class="tooltip-validations" id="tooltip-validation">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">schedules add </h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">

                            <form method="post" class="needs-validation" action="{{route('schedules.store')}}"
                                  enctype="multipart/form-data">
                                @method('POST')
                                @csrf

                                <div class="col-md-12 col-12 ">
                                    <label for="validationTooltip01">Start_lesson</label>
                                    <input type="text" class="form-control" name="start_lesson" id="validationTooltip01"
                                           required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-12 col-12 ">
                                    <label for="validationTooltip01">End_lesson</label>
                                    <input type="text" class="form-control" name="end_lesson" id="validationTooltip01"
                                           required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-12 col-12 ">
                                    <label for="validationTooltip01">Science_name</label>
                                    <input type="text" class="form-control" name="science_name" id="validationTooltip01"
                                           required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-12 col-12 ">
                                    <label for="validationTooltip01">Room</label>
                                    <input type="text" class="form-control" name="room" id="validationTooltip01"
                                           required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-12 col-12 ">
                                    <label for="validationTooltip01">Science_type</label>
                                    <input type="text" class="form-control" name="science_type" id="validationTooltip01"
                                           required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-12 col-12 ">
                                    <label for="validationTooltip01">Teacher</label>
                                    <input type="text" class="form-control" name="teacher" id="validationTooltip01"
                                           required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for=""></label><select name="group_id" id="" class="form-control mt-1">
                                            <option hidden>Select Groups</option>

                                            @foreach($grops_id as $grops)
                                                <option value="{{$grops->id}}">{{$grops->name}}</option>

                                            @endforeach

                                        </select>
                                        @error('description')
                                        <span style="color: red">{{$message}} </span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for=""></label><select name="week_id" id="" class="form-control mt-1">
                                            <option hidden>Select Weeks</option>

                                            @foreach($week_id as $grops)
                                                <option value="{{$grops->id}}">{{$grops->name}}</option>

                                            @endforeach

                                        </select>
                                        @error('description')
                                        <span style="color: red">{{$message}} </span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-12 ">
                                    <label for="validationTooltip01">Status</label>
                                    <select class="form-control " name="status">

                                        <option value="1">Active</option>
                                        <option value="0">No Active</option>
                                    </select>
                                </div>


                                <button class="btn btn-primary mt-4" type="submit">Submit</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
