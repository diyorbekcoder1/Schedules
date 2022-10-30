@extends('admin.layouts.newapp')
@section('sidebar')
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

        <li class=" nav-item"><a href="{{route('faculties.index')}}"><i class="feather icon-user"></i><span class="menu-title" data-i18n="Email">Owner</span></a>
        </li>

    </ul>
@endsection
@section('content')
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">

                    <div class="text-center pt-1">
                        <h1>Owner add Admins</h1>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form method="post" action="{{route('register.post')}}">
                                @method('POST')
                                @csrf
                                <div class="form-body">
                                    <div class="row ">

                                        <div class="col-md-6 col-12">
                                            <div class="form-label-group">
                                                <input type="text" id="first-name-column" class="form-control" placeholder="Name" name="name">
                                                <label for="first-name-column">Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-label-group">
                                                <input type="text" id="last-name-column" class="form-control" placeholder="UserName" name="username">
                                                <label for="last-name-column">UserName</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-label-group">
                                                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" required>
                                                <label for="inputEmail">Email</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-label-group">
                                                <input type="password" id="country-floating" class="form-control" name="password" placeholder="Password">
                                                <label for="country-floating">Password</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12  ">
                                            <div class="form-label-group">
                                                <input type="password" id="company-column" class="form-control" name="password_confirmation" placeholder="Password_confirmation">
                                                <label for="company-column">Confirm Password</label>
                                            </div>
                                        </div>


                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
