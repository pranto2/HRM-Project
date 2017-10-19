@extends('backend.master')
@section('site-title')
    Add New Employee
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
                        <span>Add Employee</span>
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
            <h3 class="page-title">Add New Employee
            </h3>
            <!-- END PAGE TITLE-->


<form method="POST" action="http://froiden.cloudapp.net/hrm_demo/admin/employees" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
    <input name="_token" type="hidden" value="VOzwdkh4A1oZmGLFSswRKL52qvtDgW0ggpfiCzkB">
    <div class="row ">
        <div class="col-md-6 col-sm-6">
            <div class="portlet box purple-wisteria">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-calendar"></i>Personal Details
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="form-body">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                        <img src="">
                                    </div>
                                    <span class="btn red btn-outline btn-file">
            <span class="fileinput-new"> Select image </span>
            <span class="fileinput-exists"> Change </span>
            <input type="file" name="icon"> </span>
                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Name <span class="required">* </span></label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="fullName" placeholder="Employee Name" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Father's Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="fatherName" placeholder="Father Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Date of Birth</label>
                            <div class="col-md-3">
                                <div class="input-group input-medium date date-picker"  data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                    <input type="text" class="form-control" name="date_of_birth" readonly value="">
                                    <span class="input-group-btn">
               <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
               </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Gender</label>
                            <div class="col-md-9">
                                <select class="form-control" name="gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Phone</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="mobileNumber" placeholder="Contact Number" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Local Address</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="localAddress" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Permanent Address</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="permanentAddress" rows="3"></textarea>
                            </div>
                        </div>
                        <h4><strong>Account Login</strong></h4>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Email<span class="required">* </span></label>
                            <div class="col-md-9">
                                <input type="text" name="email" class="form-control" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Password<span class="required">* </span></label>
                            <div class="col-md-9">
                                <input type="hidden" name="oldpassword">
                                <input type="text" name="password" class="form-control" value="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="portlet box red-sunglo">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-calendar"></i>Company Details
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Employee ID<span class="required">* </span></label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="employeeID" placeholder="Employee ID" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Department</label>
                            <div class="col-md-9">
                                <select class="form-control select2me" id="department" onchange="dept();return false;" name="department">
                                    <option value="1">PHP</option>
                                    <option value="2">Android Developer</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Designation</label>
                            <div class="col-md-9">
                                <select  class="select2me form-control" name="designation" id="designation" >
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Date of Joining</label>
                            <div class="col-md-3">
                                <div class="input-group input-medium date date-picker"  data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                    <input type="text" class="form-control" name="joiningDate" readonly value="">
                                    <span class="input-group-btn">
               <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
               </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Joining Salary</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="currentSalary" placeholder="Current Salary" value="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portlet box red-sunglo">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-calendar"></i>Bank Account Details
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Account Holder Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="accountName" placeholder="Account Holder Name" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Account Number</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="accountNumber" placeholder="Account Number" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Bank Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="bank" placeholder="BANK Name" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">IFSC Code</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="ifsc" placeholder="IFSC Code" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">PAN Number </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="pan" placeholder="PAN Number" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Branch</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="branch" placeholder="BRANCH" value="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix">
        <div class="row ">
            <div class="col-md-12 col-sm-12">
                <div class="portlet box purple-wisteria">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-calendar"></i>Documents
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-2">Resume</label>
                                <div class="col-md-5">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="input-group input-large">
                                            <div class="form-control uneditable-input" data-trigger="fileinput">
                                                <i class="fa fa-file fileinput-exists"></i>&nbsp; <span class="fileinput-filename">
                        </span>
                                            </div>
                                            <span class="input-group-addon btn default btn-file">
                                             <span class="fileinput-new">
                                                 Select file </span>
                                                 <span class="fileinput-exists">
                                                 Change </span>
                                                 <input type="file" name="resume">
                                             </span>
                                            <a href="#" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput">
                                                Remove </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Offer Letter</label>
                                <div class="col-md-5">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="input-group input-large">
                                            <div class="form-control uneditable-input" data-trigger="fileinput">
                                                <i class="fa fa-file fileinput-exists"></i>&nbsp; <span class="fileinput-filename">
                        </span>
                                            </div>
                                            <span class="input-group-addon btn default btn-file">
                     <span class="fileinput-new">
                     Select file </span>
                     <span class="fileinput-exists">
                     Change </span>
                     <input type="file" name="offerLetter">
                     </span>
                                            <a href="#" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput">
                                                Remove </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Joining Letter</label>
                                <div class="col-md-5">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="input-group input-large">
                                            <div class="form-control uneditable-input" data-trigger="fileinput">
                                                <i class="fa fa-file fileinput-exists"></i>&nbsp; <span class="fileinput-filename">
                        </span>
                                            </div>
                                            <span class="input-group-addon btn default btn-file">
                     <span class="fileinput-new">
                     Select file </span>
                     <span class="fileinput-exists">
                     Change </span>
                     <input type="file" name="joiningLetter">
                     </span>
                                            <a href="#" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput">
                                                Remove </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Contract and Agreement</label>
                                <div class="col-md-5">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="input-group input-large">
                                            <div class="form-control uneditable-input" data-trigger="fileinput">
                                                <i class="fa fa-file fileinput-exists"></i>&nbsp; <span class="fileinput-filename">
                        </span>
                                            </div>
                                            <span class="input-group-addon btn default btn-file">
                     <span class="fileinput-new">
                     Select file </span>
                     <span class="fileinput-exists">
                     Change </span>
                     <input type="file" name="contract">
                     </span>
                                            <a href="#" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput">
                                                Remove </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">ID Proof</label>
                                <div class="col-md-5">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="input-group input-large">
                                            <div class="form-control uneditable-input" data-trigger="fileinput">
                                                <i class="fa fa-file fileinput-exists"></i>&nbsp; <span class="fileinput-filename">
                        </span>
                                            </div>
                                            <span class="input-group-addon btn default btn-file">
                     <span class="fileinput-new">
                     Select file </span>
                     <span class="fileinput-exists">
                     Change </span>
                     <input type="file" name="IDProof">
                     </span>
                                            <a href="#" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput">
                                                Remove </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix">
        </div>
        <div class="form-actions">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" data-loading-text="Submitting..." class="demo-loading-btn btn green">
                                <i class="fa fa-plus"></i>	Submit </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
    </div>
</form>



        </div>
    </div>
@endsection