<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('assets/Admin/images/CKC-1.jpg') }}" type="image/ico" />

    <title>Admin | Đăng Nhập</title>

    <!-- Bootstrap -->
    <link href="{{ asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('assets/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset('assets/vendors/animate.css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('assets/build/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">

            <form action="{{ route('xu-ly-dang-nhap-admin') }}" method="POST">

              @csrf
              
              <h1>Đăng Nhập Admin</h1>

              @if($errors->any())
                <div class="alert alert-danger alert-dismissible" role="alert">

                  <ul style="text-align: left;">
                    @foreach($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>

                </div>
              @endif

              @if(session('thongbaothatbai'))
              <div class="alert alert-danger alert-dismissible" role="alert">

                <ul style="text-align: left;">
                  {{ session('thongbaothatbai') }}
                </ul>

              </div>
              @endif

              <div>
                <input type="text" id="ten_tai_khoan_admin" name="ten_tai_khoan_admin" class="form-control" placeholder="Tên tài khoản" />
              </div>
              <div>
                <input type="password" id="mat_khau_admin" name="mat_khau_admin" class="form-control" placeholder="Mật khẩu" />
              </div>
              <div>
                <button type="submit" class="btn btn-default submit">Đăng nhập</button>
                <a class="reset_pass" href="#">Quên mật khẩu?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link"></p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> <span>DoAnTotNghiep</span></h1>
                </div>
              </div>

            </form>

          </section>
        </div>
      </div>
    </div>
  </body>
</html>
