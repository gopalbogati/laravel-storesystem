@extends('citizens::layouts.citizens-layout')
@section('navcontent')
    <div class="container">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
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
                    <br><br>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i><span
                                    class="fa arrow"></span></a>
                        <ul class="nav nav-second-level" class="active">
                            <li>
                                <a href="{{route('citizens::addCitizensDetails')}}">Add Citizenship information</a>
                            </li>
                            <li>
                                <a href="{{route('citizens::listinformation')}}">View all information</a>
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
    <div id="page-wrapper" style="min-height: 372px;">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Edit Informations</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Edit Details:
                    </div>
                    <div class="panel-body">
                        <div class="row">

                            <div class="col-lg-6">
                                <form role="form" action="{{route('citizens::updatecitizen',$citizen->id)}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label>Person Name:</label>
                                        <input class="form-control" placeholder="Enter the name of a person" name="name" value="{{ $citizen->name }}">
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Date of birth:</label>
                                        <input class="form-control" placeholder="2062-02-04" name="dob" value="{{ $citizen->dob}}">
                                        <span class="text-danger">{{ $errors->first('dob') }}</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Age</label>
                                        <input class="form-control" placeholder="Enter age of person" name="age" value="{{ $citizen->age}}">
                                        <span class="text-danger">{{ $errors->first('age') }}</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Father Name:</label>
                                        <input class="form-control" placeholder="Enter father name of person" name="father_name" value="{{ $citizen->father_name }}">
                                        <span class="text-danger">{{ $errors->first('father_name') }}</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Mother Name:</label>
                                        <input class="form-control" placeholder="Enter mother name of person" name="mother_name" value="{{ $citizen->mother_name }}">
                                        <span class="text-danger">{{ $errors->first('mother_name') }}</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Grandfather Name:</label>
                                        <input class="form-control" placeholder="Enter grandfather name of person" name="grandfather_name" value="{{ $citizen->grandfather_name }}">
                                        <span class="text-danger">{{ $errors->first('grandfather_name') }}</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Permanent address:</label>
                                        <input class="form-control" placeholder="Enter permanent address of a person" name="permanent_address" value="{{ $citizen->permanent_address }}">
                                        <span class="text-danger">{{ $errors->first('permanent_address') }}</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Upload images:</label>
                                        <input type="hidden" name="old_image" value="{{$citizen->image}}">
                                        <input type="file" name="image" value="{{ $citizen->image }}">
                                        <span class="text-danger">{{ $errors->first('image') }}</span>
                                        <td>
                                            @if($citizen->image)
                                                <img src="{{ Image::Url(asset('/uploads/'.$citizen->image),100,100) }}"
                                                     alt="{{ $citizen->name }}" class="img-thumbnail"/>
                                            @else
                                                <img src="{{ asset('asset/images/no_image.png') }}" alt="">
                                            @endif
                                        </td>
                                    </div>
                                    <div class="form-group">
                                        <label>Description:</label>
                                        <textarea class="form-control" rows="3" name="description" >{{ $citizen->description }}</textarea>
                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                    </div>


                                    <button type="submit" class="btn btn-default">Submit Button</button>
                                    <button type="reset" class="btn btn-default">Reset Button</button>
                                </form>
                            </div>
                            <!-- /.col-lg-6 (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
    </div>
    </div>
@endsection
