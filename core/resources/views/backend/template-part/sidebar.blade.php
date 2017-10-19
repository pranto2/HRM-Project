<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <li class="sidebar-toggler-wrapper hide">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler"> </div>
                <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>
            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
            <li class="sidebar-search-wrapper">
                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                <form class="sidebar-search  " action="page_general_search_3.html" method="POST">
                    <a href="javascript:;" class="remove">
                        <i class="icon-close"></i>
                    </a>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                                        <a href="javascript:;" class="btn submit">
                                            <i class="icon-magnifier"></i>
                                        </a>
                                    </span>
                    </div>
                </form>
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            <li class="nav-item start @php echo "active",(request()->path() != 'dashboard')?:"";@endphp">
                <a href="{{route('admin.dashboard')}}" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                </a>
            </li>
            <li class="nav-item start @php echo "active",(request()->path() != 'department')?:"";@endphp">
                <a href="{{route('admin.department')}}" class="nav-link nav-toggle">
                    <i class="icon-briefcase"></i>
                    <span class="title">Departments</span>
                    <span class="selected"></span>
                </a>
            </li>

            <li class="nav-item @if( request()->path() == 'accounts' || request()->path() == 'employee' ) active open @endif
            @if( request()->path() == 'employee' || request()->path() == 'employee/add-employee' ) active open @endif
            @if( request()->path() == 'employee' || request()->path() == 'employee/edit-employee' ) active open @endif">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-user"></i>
                    <span class="title">Employees</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  @if( request()->path() == 'employee' ) active open @endif">
                        <a href="{{route('employee.list')}}" class="nav-link ">
                            <span class="title">Employee List</span>
                        </a>
                    </li>
                    <li class="nav-item  @if( request()->path() == 'somthing' ) active open @endif">
                        <a href="#" class="nav-link ">
                            <span class="title">If Necessary</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="heading">
                <h3 class="uppercase">Account Management</h3>
            </li>
            <li class="nav-item @if( request()->path() == 'accounts' || request()->path() == 'accounts/transaction' ) active open @endif">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-assistive-listening-systems"></i>
                    <span class="title">Account Management</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  @if( request()->path() == 'accounts' ) active open @endif">
                        <a href="{{route('account.index')}}" class="nav-link ">
                            <span class="title">In/Out Purpose</span>
                        </a>
                    </li>
                    <li class="nav-item  @if( request()->path() == 'accounts/transaction' ) active open @endif">
                        <a href="{{route('trans.index')}}" class="nav-link ">
                            <span class="title">Transaction Purpose</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="heading">
                <h3 class="uppercase">Site Management</h3>
            </li>
            <li class="nav-item @if( request()->path() == 'site-management' || request()->path() == 'features-management' ) active open @endif">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">Management</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  @if( request()->path() == 'site-management' ) active open @endif">
                        <a href="{{route('site-management.index')}}" class="nav-link ">
                            <span class="title">Manage Items</span>
                        </a>
                    </li>
                    <li class="nav-item  @if( request()->path() == 'features-management' ) active open @endif">
                        <a href="{{route('features-management.index')}}" class="nav-link ">
                            <span class="title">Manage Feature</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="heading">
                <h3 class="uppercase">Page Management
                    @php
                        $url = request()->path();
                        $url = Find_fist_int($url);
                    @endphp
                </h3>
            </li>
            <li class="nav-item @if(request()->path() == "page-management" || request()->path() == "page-management/create" || request()->path() == "page-management/{$url}/edit") active open @endif">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-tags"></i>
                    <span class="title">Pages</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  @if(request()->path() == "page-management/create") active open @endif ">
                        <a href="{{route('page-management.create')}}" class="nav-link ">
                            <span class="title">Create A Page</span>
                        </a>
                    </li>
                    <li class="nav-item @if(request()->path() == "page-management" || request()->path() == "page-management/{$url}/edit") active open @endif ">
                        <a href="{{route('page-management.index')}}" class="nav-link ">
                            <span class="title">Manage Pages</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="heading">
                <h3 class="uppercase">Category Management</h3>
            </li>
            <li class="nav-item @if(request()->path() == "category" || request()->path() == "sub-category") active open @endif">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-tags"></i>
                    <span class="title">Category</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  @if(request()->path() == "category") active open @endif ">
                        <a href="{{route('category.index')}}" class="nav-link ">
                            <span class="title">Category</span>
                        </a>
                    </li>
                    <li class="nav-item @if(request()->path() == "sub-category") active open @endif ">
                        <a href="{{route('sub-category.index')}}" class="nav-link ">
                            <span class="title">Sub Category</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="heading">
                <h3 class="uppercase">Plan Management</h3>
            </li>
            <li class="nav-item @if( request()->path() == "plan-management" ) active open @endif">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-list-alt"></i>
                    <span class="title">Plan</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  @if(request()->path() == "plan-management") active open @endif ">
                        <a href="{{route('plan-management.index')}}" class="nav-link ">
                            <span class="title">All Plan</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="heading">
                <h3 class="uppercase">Deposit Method</h3>
            </li>
            <li class="nav-item @if( request()->path() == "deposit" ) active open @endif">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-money"></i>
                    <span class="title">Deposit</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  @if(request()->path() == "deposit") active open @endif ">
                        <a href="{{route('deposit.index')}}" class="nav-link ">
                            <span class="title">All Deposit Method</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="heading">
                <h3 class="uppercase">Advertisement Management</h3>
            </li>
            <li class="nav-item @if( request()->path() == "advertisement" ) active open @endif">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-buysellads"></i>
                    <span class="title">Advertisement</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  @if(request()->path() == "advertisement") active open @endif ">
                        <a href="{{route('advertisement.index')}}" class="nav-link ">
                            <span class="title">Advertisement Manage</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="heading">
                <h3 class="uppercase">Location Management</h3>
            </li>
            <li class="nav-item @if( request()->path() == "location" ) active open @endif">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-map-marker"></i>
                    <span class="title">Location</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  @if(request()->path() == "location") active open @endif ">
                        <a href="{{route('location.index')}}" class="nav-link ">
                            <span class="title">Location Manage</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="heading">
                <h3 class="uppercase">Currency Management</h3>
            </li>
            <li class="nav-item @if( request()->path() == "currency" ) active open @endif">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-usd"></i>
                    <span class="title">Currency</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  @if(request()->path() == "currency") active open @endif ">
                        <a href="{{route('currency.index')}}" class="nav-link ">
                            <span class="title">Currency Manage</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="heading">
                <h3 class="uppercase">Website Management</h3>
            </li>
            <li class="nav-item @if( request()->path() == "section-management" || request()->path() == "section-management/home" || request()->path() == "site-info" || request()->path() == "footer-management" || request()->path() == "menu-management") active open @endif">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-briefcase"></i>
                    <span class="title">Web Management</span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu" style="display: block;">
                    <li @if( request()->path() == "section-management/home") class="nav-item open" @else class="nav-item" @endif>
                        <a href="{{route('section.management.home')}}" class="nav-link nav-toggle">
                            <span class="title">Section Management</span>
                        </a>
                    </li>
                    <li @if( request()->path() == "site-info") class="nav-item open" @else class="nav-item" @endif>
                        <a href="{{route('site.info.index')}}" class="nav-link nav-toggle">
                            <span class="title">Site Info Management</span>
                        </a>
                    </li>
                    <li @if( request()->path() == "menu-management") class="nav-item open" @else class="nav-item" @endif>
                        <a href="{{route('menu.management')}}" class="nav-link nav-toggle">
                            <span class="title">Menu Management</span>
                        </a>
                    </li>
                    <li @if( request()->path() == "footer-management") class="nav-item open" @else class="nav-item" @endif>
                        <a href="{{route('footer.management')}}" class="nav-link nav-toggle">
                            <span class="title">Footer Widget Management</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->