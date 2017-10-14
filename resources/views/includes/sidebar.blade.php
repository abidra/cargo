<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <!-- search form -->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class=" treeview {{ Request::is ("users","admins","usermanagements") ? 'active' : '' }}">
                <a href="#"><i class="fa fa-users"></i><span> Users Management </span>
                    <i class="fa fa-angle-left pull-right">
                    </i>
                </a>
                <ul class="treeview-menu">
{{--                    <li class="{{ Request::is ("users") ? 'active' : '' }}"><a href="{{ route('admin.users') }}">Users</a></li>--}}
                    <li class="{{ Request::is ("admins") ? 'active' : '' }}"><a href="{{ route('admins.index') }}">Admins</a></li>
                    <li class="{{ Request::is ("usermanagements") ? 'active' : '' }}"><a href="{{ route('usermanagements.index') }}">Role Management</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-barcode"></i> <span>Invoice</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-line-chart"></i> <span>Report</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>