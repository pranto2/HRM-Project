@extends('backend.master')
@section('site-title')
    Transaction Purpose
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
                        <span>Account Transaction</span>
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
            @if(Session::has('msg'))
                <script>
                    $(document).ready(function(){
                        swal("{{Session::get('msg')}}","", "success");
                    });
                </script>
        @endif
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title">Transaction Management
                <small> </small>
            </h3>
            <!-- END PAGE TITLE-->
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet-body">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#tab_1_1" data-toggle="tab"> Income Purpose</a>
                            </li>
                            <li>
                                <a href="#tab_1_2" data-toggle="tab"> Expense Purpose</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="tab_1_1">
                                <form action="{{route('income.post')}}" method="post" id="form_sample_1" class="form-horizontal">
                                    {{csrf_field()}}

                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Date
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-4">
                                                <div class="col-md-3">
                                                    <input class="form-control form-control-inline input-medium date-picker" size="16" type="text" name="date" />
                                                    <span class="help-block"> Select date </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">Income Source
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-4">
                                                <select class="form-control" name="income_id" required>
                                                    <option value="">Select...</option>
                                                    @foreach($in as $income)
                                                        <option value="{{ $income->id }}">{{$income->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">Amount
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-4">
                                                <input type="number" name="amount" data-required="1" class="form-control" required/> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Note (Not Required)
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-4">
                                                <input type="text" name="note" data-required="1" class="form-control" /> </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn green">Submit</button>
                                                <button type="button" class="btn grey-salsa btn-outline">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- END FORM-->
                            </div>
                            <div class="tab-pane fade" id="tab_1_2">
                                <!-- BEGIN FORM-->
                                <form action="{{route('expense.post')}}" method="post" id="form_sample_1" class="form-horizontal">
                                    {{csrf_field()}}

                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Date
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-4">
                                                <div class="col-md-3">
                                                    <input class="form-control form-control-inline input-medium date-picker" size="16" type="text" name="date" />
                                                    <span class="help-block"> Select date </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">Expense Source
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-4">
                                                <select class="form-control" name="expense_id" required>
                                                    <option value="">Select...</option>
                                                    @foreach($out as $expense)
                                                        <option value="{{$expense->id}}">{{$expense->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">Amount
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-4">
                                                <input type="number" name="amount" data-required="1" class="form-control" required/> </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">Note (Not Required)
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-4">
                                                <input type="text" name="note" data-required="1" class="form-control" /> </div>
                                        </div>

                                    </div>

                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn green">Submit</button>
                                                <button type="button" class="btn grey-salsa btn-outline">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- END FORM-->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
@endsection