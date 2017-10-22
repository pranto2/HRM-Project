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

                                            @foreach($dep as $key=>$deps)
                                            <tr id="row1">
                                                <td>
                                                    {{$key+1}}
                                                </td>
                                                <td>
                                                    {{$deps->name}}
                                                </td>
                                                @php
                                                    $designations = \App\Designation::where('dept_id', $deps->id)->get();
                                                @endphp
                                                <td>
                                                    @foreach($designations as $designation)
                                                    <ul>
                                                        <li>{{ $designation->deg_name }}</li>
                                                    </ul>
                                                    @endforeach
                                                </td>
                                                <td>
                                                    <a class="btn purple"  data-toggle="modal" href="#edit_static" onclick="showEdit(1,'PHP')"><i class="fa fa-edit"></i> View/Edit</a>
                                                    <a class="btn red" href="{{route('department.delete', $deps->id)}}"><i class="fa fa-trash"></i> Delete</a>
                                                </td>
                                            </tr>
                                            @endforeach
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
                                            <form method="POST" action="{{route('department.post')}}" class="form-horizontal ">
                                                {{csrf_field()}}
                                                <div class="form-body">
                                                    <p class="text-success">
                                                        Department
                                                    </p>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <input class="form-control form-control-inline " name="name" type="text" value="" placeholder="Department Name"/>
                                                        </div>
                                                    </div>

                                                    <hr>
                                                    {{--dugignation--}}
                                                    <div class="form-group">
                                                        <label class="text-success"> Designation : </label>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="description" style="width: 100%;border: 1px solid #ddd;padding: 10px;border-radius: 5px" >
                                                                    <div class="row">
                                                                        <div class="col-md-12" id="planDescriptionContainer">
                                                                            <div class="input-group">
                                                                                <input name="deg_name" class="form-control margin-top-10" type="text" required placeholder="Designation Name">
                                                                                <span class="input-group-btn">
                                                                                    <button class="btn btn-danger margin-top-10 delete_desc" type="button"><i class='fa fa-times'></i></button></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-12 text-right margin-top-10">
                                                                            <button id="btnAddDescription" type="button" class="btn btn-sm grey-mint pullri">Add Designation</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
                </div>
@endsection
@section('script')
    <script>
        var max = 1;
        $(document).ready(function () {
            $("#btnAddDescription").on('click', function () {
                appendPlanDescField($("#planDescriptionContainer"));
            });

            $(document).on('click', '.delete_desc', function () {
                $(this).closest('.input-group').remove();
            });
        });

        function appendPlanDescField(container) {
            max++;
            container.append(
                '<div class="input-group">' +
                '<input name="description'+max+'" value="" class="form-control margin-top-10" type="text" required placeholder="Designation">\n' +
                '<span class="input-group-btn">'+
                '<button class="btn btn-danger margin-top-10 delete_desc" type="button"><i class="fa fa-times"></i></button>' +
                '</span>' +
                '</div>'
            );
        }
    </script>
@endsection