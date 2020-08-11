<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('assets/Admin/images/CKC-1.jpg') }}" type="image/ico" />

    <title>Admin | Quản Trị CSDL</title>

    <!-- Bootstrap -->
    <link href="{{ asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('assets/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="{{ asset('assets/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css') }}" rel="stylesheet"/>


    @yield('css')


    <!-- Custom Theme Style -->
    <link href="{{ asset('assets/build/css/custom.min.css') }}" rel="stylesheet">

    <script>
      isBool = true;

      function showHidden1(){
        if(isBool){
          document.getElementById("mat_khau").setAttribute("type", "text");
          isBool = false;
        }else{
          document.getElementById("mat_khau").setAttribute("type", "password");
          isBool = true;
        }
      }

      function showHidden2(){
        if(isBool){
          document.getElementById("nhap_lai_mat_khau").setAttribute("type", "text");
          isBool = false;
        }else{
          document.getElementById("nhap_lai_mat_khau").setAttribute("type", "password");
          isBool = true;
        }
      }

      function showHidden3(){
        if(isBool){
          document.getElementById("mat_khau_cu").setAttribute("type", "text");
          isBool = false;
        }else{
          document.getElementById("mat_khau_cu").setAttribute("type", "password");
          isBool = true;
        }
      }

      function showHidden4(){
        if(isBool){
          document.getElementById("nhap_lai_mat_khau_moi").setAttribute("type", "text");
          isBool = false;
        }else{
          document.getElementById("nhap_lai_mat_khau_moi").setAttribute("type", "password");
          isBool = true;
        }
      }

      function showHidden5(){
        if(isBool){
          document.getElementById("mat_khau_admin_cu").setAttribute("type", "text");
          isBool = false;
        }else{
          document.getElementById("mat_khau_admin_cu").setAttribute("type", "password");
          isBool = true;
        }
      }

      function showHidden6(){
        if(isBool){
          document.getElementById("mat_khau_admin").setAttribute("type", "text");
          isBool = false;
        }else{
          document.getElementById("mat_khau_admin").setAttribute("type", "password");
          isBool = true;
        }
      }

      function showHidden7(){
        if(isBool){
          document.getElementById("nhap_lai_mat_khau_admin_moi").setAttribute("type", "text");
          isBool = false;
        }else{
          document.getElementById("nhap_lai_mat_khau_admin_moi").setAttribute("type", "password");
          isBool = true;
        }
      }
    </script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <div class="site_title"><i class="fa fa-paw"></i> <span>DoAnTotNghiep</span></div>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            @foreach($dsQuanTriVien as $quantrivien)
              <div class="profile clearfix">
                <div class="profile_pic">
                  <img src="{{ asset('images/admin/'.$quantrivien->anh_dai_dien_admin) }}" class="img-circle profile_img">
                </div>
                <div class="profile_info">
                  <span>Welcome,</span>
                  <h2>{{ $quantrivien->ho_ten_admin }}</h2>
                </div>
              </div>
            @endforeach
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{ route('trang-chu-admin') }}"><i class="fa fa-bar-chart"></i>Trang Chủ</a>
                  </li>

                  <li><a href="{{ route('tai-khoan.danh-sach') }}"><i class="fa fa-unlock-alt"></i>Tài Khoản</a>
                  </li>

                  <li><a><i class="fa fa-image"></i>Hình Ảnh<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('slider.danh-sach') }}">Slider</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-shopping-cart"></i>Sản Phẩm Chung<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('san-pham.danh-sach') }}">Sản Phẩm</a></li>
                      <li><a href="{{ route('loai-san-pham.danh-sach') }}">Loại Sản Phẩm</a></li>
                      <li><a href="{{ route('hinh-thuc-san-pham.danh-sach') }}">Hình Thức Sản Phẩm</a></li>
                    </ul>
                  </li>

                  <li><a href="{{ route('nha-xuat-ban.danh-sach') }}"><i class="fa fa-home"></i>Nhà Xuất Bản</a>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('dang-xuat-admin') }}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        @include('Admin/partials/navigation')

        <!-- page content -->
        <div class="right_col" role="main">


              @yield('main-content')


        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Doantotnghiep - Follow Me by <a href="https://www.facebook.com/IT.Q9.Tony">Facebook</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('assets/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
   <script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('assets/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('assets/vendors/nprogress/nprogress.js') }}"></script>
    <!-- jQuery custom content scroller -->
    <script src="{{ asset('assets/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>


    @yield('js')


    <!-- Custom Theme Scripts -->
    <script src="{{ asset('assets/build/js/custom.min.js') }}"></script>
  </body>
</html>
