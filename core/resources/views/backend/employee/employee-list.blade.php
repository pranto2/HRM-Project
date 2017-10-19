@extends('backend.master')
@section('site-title')
    Employee List
@endsection
@section('main-content')
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <!-- BEGIN PAGE BAR -->
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <a href="{{route('admin.dashboard')}}">Home</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span>Employees</span>
                    </li>
                </ul>
                <div class="page-toolbar">
                    <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                        <i class="icon-calendar"></i>&nbsp;
                        <span class="thin uppercase hidden-xs"></span>&nbsp;
                        <i class="fa fa-angle-down"></i>
                    </div>
                </div>
            </div>
            <!-- END PAGE BAR -->
            @if(Session::has('msg'))
                <script>
                    $(document).ready(function(){
                        swal("{{Session::get('msg')}}","", "success");
                    });
                </script>
        @endif
        <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title">Employee Management
                <small></small>
            </h3>
            <!-- END PAGE TITLE-->




            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div id="load">
                    </div>
                    <a href="{{route('employee.add')}}" class="btn green">
                        Add New Employee <i class="fa fa-plus"></i>
                    </a>
                    <hr>
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-users"></i>Employees List
                            </div>
                            <div class="tools">
                            </div>
                        </div>
                        <div class="portlet-body">
                            <table class="table table-striped table-bordered table-hover" id="sample_employees">
                                <thead>
                                <tr>
                                    <th class="text-center">
                                        EmployeeID
                                    </th>
                                    <th class="text-center">
                                        Image
                                    </th>
                                    <th style="text-align: center">
                                        Name
                                    </th>
                                    <th class="text-center">
                                        Dept/Designation
                                    </th>
                                    <th class="text-center">
                                        At Work
                                    </th>
                                    <th class="text-center">
                                        Phone
                                    </th>
                                    <th class="text-center">
                                        Status
                                    </th>
                                    <th class="text-center">
                                        Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr id="row4563150648">
                                    <td>
                                        4563150648
                                    </td>
                                    <td class="text-center">
                                        <img src="http://froiden.cloudapp.net/hrm_demo/profileImages/default.jpg" height="80px" alt="ProfileImage">
                                    </td>
                                    <td>
                                        Antonio Lima
                                    </td>
                                    <td>
                                        <p>Department: <strong>Android Developer</strong></p>
                                        <p>Designation: <strong>Senior Android Developer</strong></p>
                                    </td>
                                    <td class="text-center">
                                        3 year 3 month 4 day
                                    </td>
                                    <td>
                                        (311)431-1227x334
                                    </td>
                                    <td>
                                        <span class="label label-sm label-success"> active </span>
                                    </td>
                                    <td class="">
                                        <p> <a class="btn purple" href="{{route('employee.edit')}}"><i class="fa fa-edit"></i> View/Edit</a></p>
                                        <p>    <a class="btn red" style="width: 105px;" href="javascript:;" onclick="del(4563150648,'Antonio Lima')"><i class="fa fa-trash"></i> Delete</a></p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>
            <!-- END PAGE CONTENT-->
            <div id="deleteModal" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">Confirmation</h4>
                        </div>
                        <div class="modal-body" id="info">
                            <p>
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn default">Cancel</button>
                            <button type="button" data-dismiss="modal" class="btn red" id="delete"><i class="fa fa-trash"></i> Delete</button>
                        </div>
                    </div>
                </div>
            </div>










        </div>
    </div>
@endsection