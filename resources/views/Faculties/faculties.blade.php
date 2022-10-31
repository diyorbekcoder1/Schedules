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

    <section class="no-padding-top">
        <div class="container-fluid">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <div class="row">
                <div class="title"><a
                        class="btn btn-primary mr-1 mb-1" href="{{route('faculties.create')}}">Faculties add</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            {{--                            <th>Links</th>--}}
                            <th>Status</th>
                            <th>Create_at</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @if(isset($posts))
                            @foreach($posts as $key => $data_c)
                                <tr>
                                    <th scope="row">{{++$key}}</th>
                                    <td>{{substr($data_c->name, 0, 20)}}</td>
                                    {{--                                    <td>{{substr($data_c->link, 0, 20)}}</td>--}}
                                    <td>
                                <span style=" padding: 10px 20px 10px 20px; border-radius: 30px; " ;
                                      class="badge bg-{{ $data_c->status === 1 ? 'success' : 'danger' }}">
                                    {{$data_c->status === 1 ? 'active' : 'inactive'}}
                                </span>
                                    </td>
                                    <td>{{substr($data_c->created_at, 0, 20)}}</td>

                                    <td>
{{--                                        <a href="" class="btn btn-success">View</a>--}}
                                        <a href="{{route('faculties.edit', $data_c)}}" class="btn btn-primary">Edit</a>
                                        <form class="d-inline" action="{{route('faculties.destroy', $data_c->id)}}"
                                              method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Sure Want Delete?')"
                                                    class="btn btn-danger">Delete
                                            </button>
                                        </form>


                                    </td>

                                </tr>

                            @endforeach

                        @endif

                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </section>

@endsection
