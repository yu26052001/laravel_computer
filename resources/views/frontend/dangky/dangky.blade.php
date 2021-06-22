
<!DOCTYPE html>
<html lang="en">
    <head>
        <!--Required meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Đăng ký|Nguồn Sống Việt Store</title>
        
        <link rel="icon" href="/favicon.ico">
        <link rel="canonical" href="https://mysite.com/mypage">
        <link rel="stylesheet" href={{asset('../css/reset.css')}}>
        <link rel="stylesheet" href={{asset('../css/index.css')}}>
        <link rel="stylesheet" href={{asset('../css/body1.css')}}>
        <link rel="stylesheet" href={{asset('../css/bootstrap-4.4.1-dist/css/bootstrap.min.css')}}>
        <link rel="stylesheet" href={{asset('../css/noi-chien-chan-khong-magic-korea.css')}}>
        <script src={{asset('"../css/fontawesome-free-5.15.3-web/js/all.js"')}}></script>
        <link rel="stylesheet" href="../css/fontawesome-free-5.15.3-web/css/all.css">
        <script src="https://kit.fontawesome.com/73cd1eca7b.js" crossorigin="anonymous"></script>
        <!-- Bootstrap CSS
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/bootstrap-4.6.0-dist/css/bootstrap-grid.min.css">\ -->
        
    </head>
    <body>
      <!-- end banner slide show -->
      <main class="container-fluid">
        <div class="card card-custom">
            <div class="card-body">
                <div class="container">
        <form action="dangki bg-primary" id="form">
            <H2 class="H2 text-uppercase font-weight-bold text-center text-red">Đăng kí thành viên</H2>
            <div class="form-group">
            <label for="">Nhập họ tên</label>
              <input type="text"
                class="form-control" name="name" id="txtTen"  placeholder="Nhập tên của bạn" onblur="checkTen()" required>
                <span class="text-danger" id="tbTen">*</span>
            </div>
            <div class="form-group">
                <label for="">Giới tính:</label>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="gioitinh" id=""  checked>
                    Nam
                  </label>
                </div>
            <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="gioitinh" id=""  >
                    Nữ
                  </label>
                </div>
            </div>
            <div class="form-group">
                <input type="email"
                  class="form-control" name="" id="txtemail" placeholder="Nhập email của bạn" onblur="checkEmail()" required>
                  <span class="text-danger" id="tbemail">*</span>
            </div>

            <div class="form-group">
                <input type="password" class="form-control" name="" id="txtpass"  placeholder="Nhập mật khẩu của bạn" onblur="ktraMK()" required>
                <span class="text-danger" id="tbpass">*</span>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="" id="txtpass2"  placeholder="Nhập lại mật khẩu của bạn" onblur="ktralaiMK()" required>
                <span class="text-danger" id="tbpass2">*</span>
            </div>
            <div class="form-group">
                <input type="tel"
                  class="form-control" name="" id="txtphone"  placeholder="Nhập số điện thoại" onblur="ktraphone()" required>
                  <span class="text-danger" id="tbphone">*</span>
            </div>
            <div class="">
                <span id="thongbao" class="text-danger"></span>
            </div>
            <button type="button" id="btnDangki" class="btn btn-primary" onclick="myfunction()">
                Đăng kí
            </button>
            <!-- link đến trang chủ -->
            <a href="#">Bạn đã có tài khoản?</a>
        </form>
    </div>
            </div>
        </div>
        
    </footer>
        <script src={{asset('../js/jquery-3.6.0.js')}}></script>
    <script src={{asset('../js/dangkithanhvien.js')}}></script>
    <script src={{asset('../js/jquery-3.4.1.slim.min.js')}}></script>
    <script src={{asset('../js/popper.min.js')}}></script>
    <script src={{asset('../css/bootstrap-4.4.1-dist/js/bootstrap.min.js')}}></script>
        <!--Optional JavaScript-->
        <!--jQuery first, then Popper.js, then Bootstrap JS-->
        <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
    </body>
</html>