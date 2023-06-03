<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    {{-- <h1 class="h3 mb-0 text-gray-800">Dashboard</h1> --}}
    <a href="
    {{ Request::is('dashboard/gallery') ? '/dashboard/gallery/create' : '' }}
    "
        class="
        {{ Request::is('dashboard') ? 'd-none' : '' }}
        {{ Request::is('dashboard/gallery/*') ? 'd-none' : '' }}
        {{ Request::is('dashboard/product*') ? 'd-none' : '' }}
        {{ Request::is('dashboard/ship/*') ? 'd-none' : '' }}
        {{ Request::is('dashboard/testimony*') ? 'd-none' : '' }}
        {{ Request::is('dashboard/article*') ? 'd-none' : '' }}
        btn btn-sm btn-primary shadow-sm">
        <i class="bi bi-plus-square mr-2"></i> Add
        {{ Request::is('dashboard/gallery') ? 'Photo' : '' }}
        {{ Request::is('dashboard/ship') ? 'Ship' : '' }}
        {{ Request::is('dashboard/product') ? 'Product' : '' }}
    </a>
</div>
