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
                        <span>Award</span>
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
            <h3 class="page-title">Add New Award
                <small> </small>
            </h3>
            <!-- END PAGE TITLE-->



            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->

                    <div id="load">



                    </div>
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-edit"></i>Add New Award
                            </div>
                            <div class="tools">
                            </div>
                        </div>

                        <div class="portlet-body form">

                            <!------------------------ BEGIN FORM---------------------->
                            <form method="POST" action="{{route('award.post')}}" accept-charset="UTF-8" class="form-horizontal form-bordered">
                                {{csrf_field()}}
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Award Name: <span class="required">
                                        * </span>
                                        </label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="award_name" placeholder="Award Name" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Gift Item: <span class="required">
                                            * </span>
                                        </label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="gift" placeholder="Gift"  >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Cash price: ( <span class="fa fa-usd"></span> )</label>

                                        <div class="col-md-6">
                                            <input type="number" class="form-control" name="price" placeholder="CashPrice" >
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Employee name:</label>

                                        <div class="col-md-8">
                                            <select class="form-control input-xlarge select2me" name="employee_name" required>
                                                <option value="name">somthing</option>
                                                <option value="name">somthing</option>
                                                <option value="name">somthing</option>
                                            </select>

                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Month:</label>

                                            <div class="col-md-3">
                                                <select class="form-control select2me" name="month" required>
                                                    <option value="" selected="selected">Month</option>
                                                    <option value="january"   >January</option>
                                                    <option value="february" >February</option>
                                                    <option value="march"    >March</option>
                                                    <option value="april"    >April</option>
                                                    <option value="may"      >May</option>
                                                    <option value="june"     >June</option>
                                                    <option value="july"     >July</option>
                                                    <option value="august"   >August</option>
                                                    <option value="september" >September</option>
                                                    <option value="october">October</option>
                                                    <option value="november" >November</option>
                                                    <option value="december" >December</option>
                                                </select>

                                            </div>

                                            <label class="col-md-2 control-label">Year:</label>

                                            <div class="col-md-3">
                                                <select class="form-control select2me" name="year" required>
                                                    <option value="2017" selected="selected">2017</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2020">2020</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="demo-loading-btn btn green"><i class="fa fa-check"></i> Submit</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!------------------------- END FORM ----------------------->

                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->

                </div>
            </div>
            <!-- END PAGE CONTENT-->




            </div>


        </div>
    </div>
@endsection