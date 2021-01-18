<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
       {{--  <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div> --}}
        <span class="material-icons sidebar-brand-icon ">
            local_fire_department
        </span>
        <div class="sidebar-brand-text mx-2">FIRE_EXTINGUISHER</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href=" {{route('admin.dashboard')}} ">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBanner" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-image"></i>
          <span>Banners</span>
        </a>
        <div id="collapseBanner" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Banner Options:</h6>
            <a class="collapse-item" href="{{route('admin.banner')}}">Banners</a>
            <a class="collapse-item" href="{{route('admin.add.banner')}}">Thêm Banners</a>
          </div>
        </div>
      </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Shop
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
{{-- Brands --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-table"></i>
            <span>Quản lý thương hiệu</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Nghiệp vụ:</h6>
                <a class="collapse-item" href="{{route('admin.brand')}}">Thương hiệu</a>
                <a class="collapse-item" href="{{route('admin.add.brand')}}">Thêm Thương hiệu</a>
            </div>
        </div>
    </li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#categoryCollapse" aria-expanded="true" aria-controls="categoryCollapse">
      <i class="fas fa-sitemap"></i>
      <span>Quản lý danh mục</span>
    </a>
    <div id="categoryCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Nghiệp vụ:</h6>
        <a class="collapse-item" href="{{route('admin.category')}}">Danh mục </a>
        <a class="collapse-item" href="{{route('admin.add.category')}}">Thêm danh mục </a>
      </div>
    </div>
</li>
{{-- Products --}}
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#productCollapse" aria-expanded="true" aria-controls="productCollapse">
      <i class="fas fa-cubes"></i>
      <span>Quản lý sản phẩm </span>
    </a>
    <div id="productCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Nghiệp vụ :</h6>
        <a class="collapse-item" href="{{route('admin.list.product')}}">Sản phẩm </a>
        <a class="collapse-item" href="{{route('admin.add.product')}}">Thêm sản phẩm</a>
      </div>
    </div>
</li>

{{-- Shipping --}}
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#shippingCollapse" aria-expanded="true" aria-controls="shippingCollapse">
      <i class="fas fa-truck"></i>
      <span>Shipping</span>
    </a>
    <div id="shippingCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Shipping Options:</h6>
        <a class="collapse-item" href="{{route('admin.shipping')}}">Shipping</a>
        <a class="collapse-item" href="{{route('admin.add.shipping')}}">Thêm Shipping</a>
      </div>
    </div>
</li>

<!--Orders -->
<li class="nav-item">
    <a class="nav-link" href="{{route('admin.order')}}">
        <i class="fas fa-hammer fa-chart-area"></i>
        <span>Đặt hàng</span>
    </a>
</li>

{{--  <!-- Reviews -->
<li class="nav-item">
    <a class="nav-link" href="{{route('admin.review')}}">
        <i class="fas fa-comments"></i>
        <span>Đánh giá sản phẩm </span></a>
</li>
  --}}

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Posts
</div>

<!-- Posts -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#postCollapse" aria-expanded="true" aria-controls="postCollapse">
    <i class="fas fa-fw fa-folder"></i>
    <span>Bài viết</span>
  </a>
  <div id="postCollapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Nghiệp vụ:</h6>
      <a class="collapse-item" href="{{route('admin.post')}}">Bài viết</a>
      <a class="collapse-item" href="{{route('admin.add.post')}}">Thêm bài viết</a>
    </div>
  </div>
</li>

 <!-- Category -->
 <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#postCategoryCollapse" aria-expanded="true" aria-controls="postCategoryCollapse">
      <i class="fas fa-sitemap fa-folder"></i>
      <span>Danh mục bài viết</span>
    </a>
    <div id="postCategoryCollapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Nghiệp vụ:</h6>
        <a class="collapse-item" href="{{route('admin.postCategory')}}">Danh mục</a>
        <a class="collapse-item" href="{{route('admin.add.postCategory')}}">Thêm danh mục</a>
      </div>
    </div>
  </li>

  <!-- Tags -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tagCollapse" aria-expanded="true" aria-controls="tagCollapse">
        <i class="fas fa-tags fa-folder"></i>
        <span>Tags</span>
    </a>
    <div id="tagCollapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Tag Options:</h6>
        <a class="collapse-item" href="{{route('admin.tag')}}">Tag</a>
        <a class="collapse-item" href="{{route('admin.add.tag')}}">Thêm Tag</a>
        </div>
    </div>
</li>

{{--    <!-- Comments -->
  <li class="nav-item">
    <a class="nav-link" href="">
        <i class="fas fa-comments fa-chart-area"></i>
        <span>Comments</span>
    </a>
  </li>  --}}


<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">
 <!-- Heading -->
<div class="sidebar-heading">
    General Settings
</div>

<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#couponCollapse" aria-expanded="true" aria-controls="tagCollapse">
      <i class="fas fa-tags fa-folder"></i>
      <span>Coupon</span>
  </a>
  <div id="couponCollapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Tag Options:</h6>
      <a class="collapse-item" href="{{route('admin.coupon')}}">Danh mục Mã giảm giá</a>
      <a class="collapse-item" href="{{route('admin.add.coupon')}}">Thêm mã giảm giá</a>
      </div>
  </div>
</li>
 <!-- Users -->
 <li class="nav-item">
    <a class="nav-link" href="{{route('admin.users')}}">
        <i class="fas fa-users"></i>
        <span>Users</span></a>
</li>
 <!-- General settings -->
 <li class="nav-item">
    <a class="nav-link" href="">
        <i class="fas fa-cog"></i>
        <span>Settings</span></a>
</li>

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>


</ul>
<!-- End of Sidebar -->