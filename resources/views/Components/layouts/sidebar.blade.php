<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{url('/admin')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    {{-- Students --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/admin/students')}}"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-user"></i>
            <span>Students</span>
        </a>
    </li>

    {{-- Teachers --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('admin/teachers')}}"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-user"></i>
            <span>Teachers</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('admin/groups')}}"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-users"></i>
            <span>Groups</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('admin/subjects')}}"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-book"></i>
            <span>Subjects</span>
        </a>
    </li>

</ul>
<!-- End of Sidebar -->