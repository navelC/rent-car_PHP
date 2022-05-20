<?php session_start();
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['limit'])){
        $default = $_POST['limit'];
        setcookie('limit',$default,time() + (365 * 24 * 60 * 60), "/");
    }
?>
<head>
    <link href="Public/client/css/bootstrap.css" rel='stylesheet' type='text/css' />
     <link href="Public/client/css/all.min.css" rel='stylesheet' type='text/css' />
    <script src="Public/client/js/jquery-2.2.3.min.js"></script>
    <script src="Public/client/js/bootstrap.js"></script>
     <link href="Public/client/css/style.css" rel='stylesheet' type='text/css' />

</head>
<header class="bg-black">
    <div class="container">
       <nav class="navbar navbar-expand-lg row black  " >
          <a class="navbar-brand col-2" href="#" style="color: #3d581b !important; font-size: 30px ">RentC</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="col-1"></div>
          <form class="form-inline my-2 my-lg-0 col-6">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
          <div class="col-1"></div>
          <span class="navbar-text black col-2">
          <?php if (isset($_SESSION['user'])){ ?>
               <div class="dropdown" >
                <div class="dropbtn"><?php echo $_SESSION['user']['name'] ?></div>
                <div class="dropdown-content">
                  <a href="?controller=profile">Thông tin cá nhân</a>
                  <a href="#">Quản lý tin đăng</a>
                  <a href="?controller=logout">Đăng xuất</a>
                </div>
              </div>
             <?php } else echo '<a href="?controller=signin">đăng nhập</a>'; ?>   |
              <a href="">đăng tin</a>
          </span>
        </nav>
    </div>
</header>
<section class="sticky">
      <div class="container">
        <div class="sticky" id="sticky" >
          <div class="area-inner">
            <div class="area-content">
              <div class="list-menu">
                <h2 class="item-menu">
                  <a href="">
                    <span ></span>
                    <span >xe điện</span>
                  </a>
                </h2>
                 <h2 class="item-menu">
                  <a href="">xe máy</a>
                </h2>
                 <h2 class="item-menu">
                  <a class="menu-link" href="">
                    </svg></span>
                    <span>xe 4 chỗ</span>
                  </a>
                </h2>
                 <h2 class="item-menu">
                  <a href="">xe 7 chỗ</a>
                </h2>
                <h2 class="item-menu">
                  <a href="">xe du lịch</a>
                </h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php if(isset($_GET['controller']) && $_GET['controller']=='profile');  else{?>
    <div class="container">
      <img class="banner" src="Public/client/img/banner_vne25.jpg">
    </div>
    <?php } ?>
<script type="text/javascript">
    function addcart(id) {
        $.post('Ajax/addcart.php', {id:id});
        alert('Thêm sản phẩm vào giỏ hàng thành công');
    }
    window.onscroll = function(){
      var x = $(window).scrollTop();
      if(x>115){
         $('.sticky').css({                   
            position: 'sticky',
        });
      }
    else  $('.sticky').css({                   
            position: 'static',
        });
  }
</script>