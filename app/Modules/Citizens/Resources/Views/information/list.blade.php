@include('citizens::includes.session')
@extends('master')
@section('content')

    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0"
         xmlns="http://www.w3.org/1999/html">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('admin::dashboard')}}">Dashboard</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-messages">
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Smith</strong>
                                <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Smith</strong>
                                <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Smith</strong>
                                <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>Read All Messages</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-messages -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-tasks">
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Task 1</strong>
                                    <span class="pull-right text-muted">40% Complete</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Task 2</strong>
                                    <span class="pull-right text-muted">20% Complete</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        <span class="sr-only">20% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Task 3</strong>
                                    <span class="pull-right text-muted">60% Complete</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Task 4</strong>
                                    <span class="pull-right text-muted">80% Complete</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Tasks</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-tasks -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> New Comment
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                <span class="pull-right text-muted small">12 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-envelope fa-fw"></i> Message Sent
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-tasks fa-fw"></i> New Task
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-alerts -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">

                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Citizenship<span
                                class="fa arrow"></span></a>
                    <ul class="nav nav-second-level" class="active">
                        <li>
                            <a href="{{route('citizens::addCitizensDetails')}}">Add Citizenship information</a>
                        </li>
                        <li>
                            <a href="{{route('citizens::listinformation')}}">View Citizenship informations</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span
                                    class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div class="container" style="width:870px;">
        <a class="btn btn-primary -align-right" href="{{ route('citizens::addCitizensDetails') }}">
            Add Citizens Information</a>
        <p>

            {!! Form::Open(['route'=>'citizens::search','method'=>'GET','class'=>'input-group custom-search-form','role'=>'search']) !!}

            {!! Form::text('q',null,['class'=>'form-control','placeholder'=>'search'])!!}
        </p>
        <button class="btn btn-default" type="button">
            <i class="fa fa-search"></i>
        </button>
    {!! Form::close()!!}
    <!-- /input-group -->
        </li>
        {!! Form::open(['route' => 'citizens:citizen.destroy','method'=>'DELETE','id'=>'formDelete']) !!}
        <table class="table -align-justify">
            <tr class="table-bordered">
                <th>
                    <a href="{{route('citizens:citizen.sort') }}?order={{$order}}&attr=name"> Name</a>
                </th>
                <th>
                    <a href="{{route('citizens:citizen.sort') }}?order={{$order}}&attr=dob">Date of birth</a>
                </th>
                <th>
                    <a href="{{route('citizens:citizen.sort') }}?order={{$order}}&attr=age">Age</a>
                </th>
                <th>
                    <a href="{{route('citizens:citizen.sort') }}?order={{$order}}&attr=father_name">Father Name</a>
                </th>
                <th>
                    <a href="{{route('citizens:citizen.sort') }}?order={{$order}}&attr=mother_name">Mother Name</a>
                </th>
                <th>
                    <a href="{{route('citizens:citizen.sort') }}?order={{$order}}&attr=grandfather_name">Grandfather
                        Name</a>
                </th>
                <th>
                    <a href="{{route('citizens:citizen.sort') }}?order={{$order}}&attr=permanent_address">Permanent
                        address</a>
                </th>
                <th>
                    <a href="{{route('citizens:citizen.sort') }}?order={{$order}}&attr=description">Description</a>
                </th>
                <th>Image</th>
                <th>Action</th>
                <th></th>
                <th>
                    <input type="checkbox" id="checkAll" name="delete">
                </th>
                <th>
                    <input type="button" onClick="confirmAndSubmit()" value="Delete">
                </th>

            </tr>
            @foreach($citizens as $citizen)

                <tr>
                    <td>{{$citizen->name}}</td>
                    <td>{{$citizen->dob}}</td>
                    <td>{{$citizen->age}}</td>
                    <td>{{$citizen->father_name}}</td>
                    <td>{{$citizen->mother_name}}</td>
                    <td>{{$citizen->grandfather_name}}</td>
                    <td>{{$citizen->permanent_address}}</td>
                    <td>{{$citizen->description}}</td>
                    <td>
                        @if($citizen->image)
                            <img src="{{ Image::Url(asset('/uploads/'.$citizen->image),140,140) }}"
                                 alt="{{ $citizen->name }}" class="img-thumbnail"/>
                        @else
                            <img src="{{ asset('asset/images/no_image.png') }}" alt="">
                        @endif
                    </td>

                    <td>
                        <a href="{{ route('citizens::editcitizens', $citizen->id) }}">EDIT</a>
                        <a href="{{ route('citizens::deletecitizen', $citizen->id) }}">DELETE</a>

                    </td>
                    <td>

                    <td>
                        <input type="checkbox" name="toDelete[]" value="{{$citizen->id}}" class="checkItem">
                    </td>
                    {!! Form::close() !!}
                </tr>

            @endforeach


        </table>
        {!! Form::close() !!}
        {{--//for pagination--}}
        {{$citizens->links()}}
    </div>
@stop


