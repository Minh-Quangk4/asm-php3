<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/dist/output.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
   <!-- <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css"> -->
   <link rel="stylesheet" href="../../config/plugins/fontawesome-free/css/all.min.css">
   <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>
<body class="max-w-full">
  <div class="max-w-full">
    <div class=" backdrop-grayscale-0 bg-white/10 h "></div>
     <header class=" backdrop-grayscale-0 bg-white/10 h " >
        <nav class="header-nav container" >
            <ul style="background-color: #000; color:#fff" id="nav" class="nav d-none btn btn-info  justify-content-center  d-lg-flex">
               
                <li class=" nav-item d-none d-md-flex active  text-white"><a style="display:block;margin-top:4px" href="index.php "><img width="30px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFu9CkeOQw9T0-9zdJlELuPIwCwRHDGYRs2g&s" alt=""></a></li>
                
                <li class=" nav-item d-none d-md-flex active  text-white"><a class="nav-link text-light" href="{{route('home')}}">Trang chủ</a></li>
              
                <li class="nav-item d-none d-md-flex "><a href="{{route('shop')}}" class="nav-link text-light"  >Sản phẩm</a></li>
                
               
                <li class="nav-item d-none d-md-flex "><a href="{{route('adda')}}" class="nav-link text-light"  >Giới thiệu</a></li>
              
                <li class="nav-item dropdown">
                    <a class="nav-link text-light dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Danh mục
                    </a>
                    <ul class="dropdown-menu text-red-500" aria-labelledby="navbarDropdown">
                     
                      <!-- <li><hr class="dropdown-divider"></li> -->
                    </ul>
                  </li>
                <ul class=" ">
                    <form class="d-flex" action="index.php#" method="POST">
                        <input class="form-control me-2"  name="keyword" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-success" type="submit">Search</button>
                      </form>
                </ul>
                <ul>
                    <a class="text-light" href="index.php?act=cart">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                      </svg>
                    </a>

                    <?php
                  if(isset($_SESSION['user_name'])){
                     extract($_SESSION['user_name']);
                  ?> 
                  <a style="margin-left:10px" href="index.php?act=thongtintk"><i class="fa fa-user" ></i></a>
                  <a style="margin-left:10px" href="index.php?act=dangxuat">Đăng Xuất</a>
                  
                  <?php }else{ ?>
                </ul>
                <a href="login.php" class="text-light mt-1 mx-5">
                <i class="fa fa-user" >Đăng nhập</i>
                </a>
              </ul>
              <?php } ?>
                  </div>

                  <div class="contaier mt-1">
<div id="carouselExampleControls" class="text-center container carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img style="width:100%;height:500px" src="https://ctmobile.vn/upload/IPHONE%2015/banner%2015-01-01.png" class=" d-block " alt="...">
    </div>
    <div class="carousel-item">
      <img style="width:100%; height:500px" src="https://file.hstatic.net/1000347078/collection/banner-nhom-apple-iphone-chinh-hang_5a8ae06c90e4459d88dcb986ef5feff5.png" class="d-block " alt="...">
    </div>
    <div class="carousel-item">
      <img style="width:100%; height:500px" src="https://didongmoi.com.vn/upload/images/post/banner-iphone-15-min.jpg" class="d-block " alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</nav>
              
        