@extends('backend.master')
@section('site-title')
Department List
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
                        <span>Departments</span>
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
            <h3 class="page-title">Department Management
                <small> Department-list </small>
            </h3>
            <!-- END PAGE TITLE-->

                        <!-- BEGIN PAGE CONTENT-->
                        <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                <a class="btn green" data-toggle="modal" href="#static">
                                    Add New Department
                                    <i class="fa fa-plus"></i> </a>
                                <hr>
                                <div class="portlet box blue">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-briefcase"></i>Department List
                                        </div>
                                        <div class="tools">
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th>
                                                    ID
                                                </th>
                                                <th>
                                                    Department Name
                                                </th>
                                                <th>
                                                    Designations
                                                </th>
                                                <th>
                                                    Action
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr id="row1">
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    PHP
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>   Fresher PHP Developer</li>
                                                        <li>   Senior PHP Developer</li>
                                                    </ol>
                                                </td>
                                                <td class=" ">
                                                    <a class="btn purple"  data-toggle="modal" href="#edit_static" onclick="showEdit(1,'PHP')"><i class="fa fa-edit"></i> View/Edit</a>
                                                    <a class="btn red" href="javascript:;" onclick="del(1,'PHP')"><i class="fa fa-trash"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr id="row2">
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    Android Developer
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>   Fresher Android Developer</li>
                                                        <li>   Senior Android Developer</li>
                                                    </ol>
                                                </td>
                                                <td class=" ">
                                                    <a class="btn purple"  data-toggle="modal" href="#edit_static" onclick="showEdit(2,'Android Developer')"><i class="fa fa-edit"></i> View/Edit</a>
                                                    <a class="btn red" href="javascript:;" onclick="del(2,'Android Developer')"><i class="fa fa-trash"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr id="row3">
                                                <td>
                                                    3
                                                </td>
                                                <td>
                                                    Human Resource
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>   Assistant Manager </li>
                                                        <li>   Manager</li>
                                                    </ol>
                                                </td>
                                                <td class=" ">
                                                    <a class="btn purple"  data-toggle="modal" href="#edit_static" onclick="showEdit(3,'Human Resource')"><i class="fa fa-edit"></i> View/Edit</a>
                                                    <a class="btn red" href="javascript:;" onclick="del(3,'Human Resource')"><i class="fa fa-trash"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr id="row4">
                                                <td>
                                                    4
                                                </td>
                                                <td>
                                                    Data Collection
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>   Assistant Surveyor </li>
                                                        <li>   Surveyor</li>
                                                    </ol>
                                                </td>
                                                <td class=" ">
                                                    <a class="btn purple"  data-toggle="modal" href="#edit_static" onclick="showEdit(4,'Data Collection')"><i class="fa fa-edit"></i> View/Edit</a>
                                                    <a class="btn red" href="javascript:;" onclick="del(4,'Data Collection')"><i class="fa fa-trash"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr id="row5">
                                                <td>
                                                    5
                                                </td>
                                                <td>
                                                    Web Designer
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>   Front End Developer</li>
                                                    </ol>
                                                </td>
                                                <td class=" ">
                                                    <a class="btn purple"  data-toggle="modal" href="#edit_static" onclick="showEdit(5,'Web Designer')"><i class="fa fa-edit"></i> View/Edit</a>
                                                    <a class="btn red" href="javascript:;" onclick="del(5,'Web Designer')"><i class="fa fa-trash"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr id="row208">
                                                <td>
                                                    208
                                                </td>
                                                <td>
                                                    fsdfsdfsd
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>   sdfsdfsd</li>
                                                    </ol>
                                                </td>
                                                <td class=" ">
                                                    <a class="btn purple"  data-toggle="modal" href="#edit_static" onclick="showEdit(208,'fsdfsdfsd')"><i class="fa fa-edit"></i> View/Edit</a>
                                                    <a class="btn red" href="javascript:;" onclick="del(208,'fsdfsdfsd')"><i class="fa fa-trash"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr id="row209">
                                                <td>
                                                    209
                                                </td>
                                                <td>
                                                    aaaaa
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>   aaa</li>
                                                    </ol>
                                                </td>
                                                <td class=" ">
                                                    <a class="btn purple"  data-toggle="modal" href="#edit_static" onclick="showEdit(209,'aaaaa')"><i class="fa fa-edit"></i> View/Edit</a>
                                                    <a class="btn red" href="javascript:;" onclick="del(209,'aaaaa')"><i class="fa fa-trash"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr id="row210">
                                                <td>
                                                    210
                                                </td>
                                                <td>
                                                    ssss
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>   sss</li>
                                                        <li>   ssss</li>
                                                    </ol>
                                                </td>
                                                <td class=" ">
                                                    <a class="btn purple"  data-toggle="modal" href="#edit_static" onclick="showEdit(210,'ssss')"><i class="fa fa-edit"></i> View/Edit</a>
                                                    <a class="btn red" href="javascript:;" onclick="del(210,'ssss')"><i class="fa fa-trash"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr id="row211">
                                                <td>
                                                    211
                                                </td>
                                                <td>
                                                    asf
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>   da</li>
                                                        <li>   d</li>
                                                    </ol>
                                                </td>
                                                <td class=" ">
                                                    <a class="btn purple"  data-toggle="modal" href="#edit_static" onclick="showEdit(211,'asf')"><i class="fa fa-edit"></i> View/Edit</a>
                                                    <a class="btn red" href="javascript:;" onclick="del(211,'asf')"><i class="fa fa-trash"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr id="row212">
                                                <td>
                                                    212
                                                </td>
                                                <td>
                                                    HU
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>   1</li>
                                                        <li>   2</li>
                                                        <li>   3</li>
                                                        <li>   4</li>
                                                    </ol>
                                                </td>
                                                <td class=" ">
                                                    <a class="btn purple"  data-toggle="modal" href="#edit_static" onclick="showEdit(212,'HU')"><i class="fa fa-edit"></i> View/Edit</a>
                                                    <a class="btn red" href="javascript:;" onclick="del(212,'HU')"><i class="fa fa-trash"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr id="row213">
                                                <td>
                                                    213
                                                </td>
                                                <td>
                                                    Ke toan
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>   ke toan tong hop</li>
                                                        <li>   ke toan thue</li>
                                                    </ol>
                                                </td>
                                                <td class=" ">
                                                    <a class="btn purple"  data-toggle="modal" href="#edit_static" onclick="showEdit(213,'Ke toan')"><i class="fa fa-edit"></i> View/Edit</a>
                                                    <a class="btn red" href="javascript:;" onclick="del(213,'Ke toan')"><i class="fa fa-trash"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr id="row214">
                                                <td>
                                                    214
                                                </td>
                                                <td>
                                                    hhh
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>   ggg</li>
                                                        <li>   fff</li>
                                                    </ol>
                                                </td>
                                                <td class=" ">
                                                    <a class="btn purple"  data-toggle="modal" href="#edit_static" onclick="showEdit(214,'hhh')"><i class="fa fa-edit"></i> View/Edit</a>
                                                    <a class="btn red" href="javascript:;" onclick="del(214,'hhh')"><i class="fa fa-trash"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr id="row215">
                                                <td>
                                                    215
                                                </td>
                                                <td>
                                                    .net
                                                </td>
                                                <td>
                                                    <ol>
                                                    </ol>
                                                </td>
                                                <td class=" ">
                                                    <a class="btn purple"  data-toggle="modal" href="#edit_static" onclick="showEdit(215,'.net')"><i class="fa fa-edit"></i> View/Edit</a>
                                                    <a class="btn red" href="javascript:;" onclick="del(215,'.net')"><i class="fa fa-trash"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr id="row216">
                                                <td>
                                                    216
                                                </td>
                                                <td>
                                                    Animation
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>   2D Animation</li>
                                                        <li>   3D Animation</li>
                                                        <li>   3D Modeling</li>
                                                        <li>   Live Action</li>
                                                        <li>   Rendering</li>
                                                        <li>   CG</li>
                                                    </ol>
                                                </td>
                                                <td class=" ">
                                                    <a class="btn purple"  data-toggle="modal" href="#edit_static" onclick="showEdit(216,'Animation')"><i class="fa fa-edit"></i> View/Edit</a>
                                                    <a class="btn red" href="javascript:;" onclick="del(216,'Animation')"><i class="fa fa-trash"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr id="row217">
                                                <td>
                                                    217
                                                </td>
                                                <td>
                                                    123
                                                </td>
                                                <td>
                                                    <ol>
                                                    </ol>
                                                </td>
                                                <td class=" ">
                                                    <a class="btn purple"  data-toggle="modal" href="#edit_static" onclick="showEdit(217,'123')"><i class="fa fa-edit"></i> View/Edit</a>
                                                    <a class="btn red" href="javascript:;" onclick="del(217,'123')"><i class="fa fa-trash"></i> Delete</a>
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
                        <div id="static" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">Close</button>
                                        <h4 class="modal-title"><strong><i class="fa fa-plus"></i> New Department</strong></h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="portlet-body form">
                                            <!-- BEGIN FORM-->
                                            <form method="POST" action="" class="form-horizontal ">
                                                <input name="_token" type="hidden" value="VOzwdkh4A1oZmGLFSswRKL52qvtDgW0ggpfiCzkB">
                                                <div class="form-body">
                                                    <p class="text-success">
                                                        Department
                                                    </p>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <input class="form-control form-control-inline " name="deptName" type="text" value="" placeholder="Department"/>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <p class="text-success">
                                                        Designations
                                                    </p>
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <input class="form-control form-control-inline input-medium " name="designation[0]" type="text" value="" placeholder="Designation #1"/>
                                                        </div>
                                                        <div class="col-md-6">
                                                        </div>
                                                    </div>
                                                    <div id="insertBefore"></div>
                                                    <button type="button" id="plusButton" class="btn btn-sm green form-control-inline">
                                                        More Designations <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                                <div class="form-actions">
                                                    <div class="row">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            <button type="submit" data-loading-text="Submitting..." class="demo-loading-btn btn green"><i class="fa fa-check"></i> Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- END FORM-->
                                        </div>
                                    </div>
                                    <!-- END EXAMPLE TABLE PORTLET-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="edit_static" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title"><strong><i class="fa fa-edit"></i> Edit Department</strong></h4>
                                </div>
                                <div class="modal-body">
                                    <div class="portlet-body form">
                                        <!-- BEGIN FORM-->
                                        <form method="POST" action="http://froiden.cloudapp.net/hrm_demo" accept-charset="UTF-8" class="form-horizontal" id="edit_form">
                                            <input name="_method" type="hidden" value="PATCH"><input name="_token" type="hidden" value="VOzwdkh4A1oZmGLFSswRKL52qvtDgW0ggpfiCzkB">
                                            <div class="form-body">
                                                <p class="text-success">
                                                    Department
                                                </p>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <input class="form-control form-control-inline " name="deptName" id="edit_deptName" type="text" value="" placeholder="Department" />
                                                    </div>
                                                </div>
                                                <div id="deptresponse"></div>
                                                <div id="insertBefore_edit"></div>
                                                <button type="button" id="plus_edit_Button" class="btn btn-sm green form-control-inline">
                                                    More Designations <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                            <br>
                                            <div class="note note-warning">
                                                <strong>Note:</strong> Deleting/Empting a designation will delete all the <strong>Employees</strong> associated with it
                                            </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button type="submit" data-loading-text="Updating..." class="demo-loading-btn btn green"><i class="fa fa-edit"></i> Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- END FORM-->
                                    </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                            </div>
                        </div>
                    </div>
                </div>
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
@endsection