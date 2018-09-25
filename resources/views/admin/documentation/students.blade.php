@extends('admin.layouts.app')
@section('content')
    @include('admin.includes.sidebar')
    @include('admin.includes.top-nav')
        <!-- page content -->
        @include('admin.includes.top-info')
        
         <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <button type="button" class="btn btn-primary pull-right" id="newDocStudents">New Documentation - Students</button>

                <div class="clearfix"></div>
                <div class="row" id="newDocStudentsRow" style="display: none;">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Add New Documentation - Students</h2>
                        
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
                        <br />
                        <form id="newDocStudentsForm" enctype="multipart/form-data" method="post" action="/admin/storenewdocumentation" data-parsley-validate class="form-horizontal form-label-left">
                          {{ csrf_field() }}
                          <input type="hidden" name="category_id" value="1" >
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title/Description <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Documentation/Details <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <textarea class="summernote form-control col-md-7 col-xs-12" id="postBody" name="post_body"></textarea>
                            </div>
                          </div>
                         
                          <div class="ln_solid"></div>
                          <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                              <button class="btn btn-primary" type="button" id="closeNewDocStudents">Close</button>
                              <button type="submit" class="btn btn-success" id="ajaxSubmitNewDocStudents">Publish Documentation</button>
                            </div>
                          </div>

                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script type="text/javascript">
                  jQuery(document).ready(function(){

                                                  
                      $("#newDocStudents").click(function(){
                         $("#newDocStudentsRow").show(1000);
                      });
                      $("#closeNewDocStudents").click(function(){
                         $("#newDocStudentsRow").hide(1000);
                      });
                   });
                </script>

                <div class="x_panel">
                  <div class="x_title">
                    <h2>Documentation Table - Students<small></small></h2>
                    
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
