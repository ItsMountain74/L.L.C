<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <!--div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div-->
        <div class="sidebar-brand-text mx-3">L.L.C<sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('team.index') }}">
            <span>Team</span></a>
    </li>
    <hr class="sidebar-divider d-none d-md-block">


    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('service.index') }}">
            <span>Services</span></a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('contact.index') }}">
            <span>Recieved mails</span></a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <li class="nav-item">
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button class="btn btn-danger w-100" type="submit">Logout</button>
        </form>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
</ul>