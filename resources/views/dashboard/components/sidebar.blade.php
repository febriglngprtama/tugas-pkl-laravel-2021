<!-- Sidebar -->
<aside class="bg-dark ">
    <ul class=" navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
            {{-- <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div> --}}
            <div class="sidebar-brand-text mx-3">BTS</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
            <a class="nav-link" href="/dashboard">
                <i class="fas fa-fw fa-tachometer-alt fs-6"></i>
                <span class="fs-6">Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        {{-- <!-- Heading -->
        <div class="sidebar-heading">
            Interface ID
        </div> --}}

        {{--  nav item - schedule BTS --}}
        <li class="nav-item
         {{ Request::is('dashboard/schedule*') ? 'active' : '' }}
         ">
            <a class="nav-link" href="/dashboard/schedule">
                <i class="bi bi-calendar2-week fs-6"></i>
                <span class="fs-6">Schedule</span>
            </a>
        </li>

        {{--  nav item - Member BTS --}}
        <li class="nav-item
         {{ Request::is('dashboard/member*') ? 'active' : '' }}
         ">
            <a class="nav-link" href="/dashboard/member">
                <i class="bi bi-people-fill fs-6"></i>
                <span class="fs-6">Member</span>
            </a>
        </li>

        {{--  nav item - Album BTS --}}
        <li class="nav-item
         {{ Request::is('dashboard/album*') ? 'active' : '' }}
         ">
            <a class="nav-link" href="/dashboard/album">
                <i class="bi bi-file-music fs-6"></i>
                <span class="fs-6">Album</span>
            </a>
        </li>

        {{--  nav item - Song BTS --}}
        <li class="nav-item
         {{ Request::is('dashboard/song*') ? 'active' : '' }}
         ">
            <a class="nav-link" href="/dashboard/song">
                <i class="bi bi-disc fs-6"></i>
                <span class="fs-6">Song</span>
            </a>
        </li>
    </ul>
</aside>
<!-- End of Sidebar -->
