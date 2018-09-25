@extends('admin.layouts.app')
@section('content')
    @include('admin.includes.sidebar')
    @include('admin.includes.top-nav')
        <!-- page content -->
        @include('admin.includes.top-info')

         <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <button type="button" class="btn btn-primary pull-right">New Documentation</button>
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Users Table<small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>User Code</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Date Created</th>
                          <th>status</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        @foreach($users as $user)
                          <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->registration_code}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>
                              @if($user->is_admin == 1)
                                Admin User
                              @else
                                User
                              @endif
                            </td>
                            <td>
                              <a class="btn btn-danger" href="#" role="button">Delete</a>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

         
        </div>
        <!-- /page content -->   
    @include('admin.includes.footer')                     
@endsection
