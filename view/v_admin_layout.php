<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị</title>
    <link rel="shortcut icon" type="view/image/png" href="<?=$base_url ?>upload/logo.png"/>
    <link rel="stylesheet" href="<?=$base_url?>view/bootstrap-5.3.2-dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 p-0 bg-success collapse collapse-horizontal show" style="min-height: 100vh;" id="openMenu">
                <img class="m-2" src="https://google-cdn.digitop.vn/stay-play-2022/prod/public/images/logo.svg" width="190px">
                <div class="list-group list-group-item-success m-3">
                    <a href="<?=$base_url?>admin/dashboard" class="list-group-item list-group-item-action <?=(strpos($view_name,'dashboard'))?'active':''?>">
                      Tổng quan
                    </a>
                    <a href="<?=$base_url?>admin/user" class="list-group-item list-group-item-action <?=(strpos($view_name,'user'))?'active':''?>">Tài khoản</a>
                    <a href="<?=$base_url?>admin/category" class="list-group-item list-group-item-action <?=(strpos($view_name,'category'))?'active':''?>">Loại Hàng</a>
                    <a href="<?=$base_url?>admin/product" class="list-group-item list-group-item-action <?=(strpos($view_name,'product'))?'active':''?>">Sản Phẩm</a>
                    <a href="<?=$base_url?>admin/comment" class="list-group-item list-group-item-action <?=(strpos($view_name,'comment'))?'active':''?>">Bình Luận</a>
                    <a href="<?=$base_url?>admin/history" class="list-group-item list-group-item-action <?=(strpos($view_name,'history'))?'active':''?>">Đơn Hàng</a>
                </div>
            </div>
            <div class="col-md p-0">
                <nav class="navbar navbar-expand-lg bg-success" data-bs-theme="dark">
                    <div class="container-fluid">
                        <button class="btn btn-outline-light me-2" type="button" data-bs-toggle="collapse" data-bs-target="#openMenu" aria-expanded="false" aria-controls="openMenu">
                            <i class="fa-solid fa-bars"></i>
                        </button>                        
                      <a class="navbar-brand" href="#">Stay & Play</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Xin chào, <?=$_SESSION['user']['HoTen']?>
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="<?=$base_url?>page/home">Xem trang chủ</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="<?=$base_url?>user/logout">Đăng xuất</a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                </nav>
                <div class="container">
                  <?php include_once 'view/v_'.$view_name.'.php'; ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/fef2f1d7be.js" crossorigin="anonymous"></script>
    <script src="<?=$base_url?>view/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>