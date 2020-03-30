<!-- Page Wrapper -->
<div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-mobile"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Tivia <sup>Cell</sup></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="{{ url('/home') }}"><i class="fas fa-fw fa-tachometer-alt"></i><span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">Menu</div>

  <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active"><a class="nav-link" href="{{ route('user.index') }}"><i class="fas fa-fw fa-user"></i><span>Users</span></a></li>
      <li class="nav-item active"><a class="nav-link" href="{{ route('categories.index') }}"><i class="fas fa-fw fa-list-alt"></i><span>Categories</span></a></li>
      <li class="nav-item active"><a class="nav-link" href="{{ route('product.index') }}"><i class="fas fa-fw fa-cube"></i><span>Products</span></a></li>
      <li class="nav-item active"><a class="nav-link" href="index.html"><i class="fas fa-fw fa-plus"></i><span>Stock In</span></a></li>
      <li class="nav-item active"><a class="nav-link" href="index.html"><i class="fas fa-fw fa-minus"></i><span>Stock Out</span></a></li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->