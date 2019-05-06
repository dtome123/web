
<header>
    <div class="img-bg bg-1 bg-layer-4"></div>
    <a class="logo" href="index.php" ><img src="images/sys/logo.png" alt="Logo" style="width:100px;height:80px" ><img src="images/sys/name.png" alt="" style="height:80px" id="name_web"></a>
    <div style="height: 4.6em;border: 1px solid #aaa">

        <!--  <div style="float:right;margin-right:100px;margin-top:10px;width:100px ">
                <p class="border">Đăng nhập</p>
                <p class="border">Đăng kí</p>
        </div> -->
        <div class="btn-group" style="float:right;margin-right:70px;margin-top:15px;width:130px ">
            <button type="button" class="btn btn-danger">Tài khoản</button>
            <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu" >
                <!-- Xuat hien khi dang nhap -->
                <?php require('common.php');
                 if(isLogined()){ ?>
                <a class="dropdown-item" href="#">Thông tin</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Đăng xuất</a>
                <?php }
                else{?>
                <a class="dropdown-item" href="login.php">Đăng nhập</a>
                <a class="dropdown-item" href="register.php">Đăng kí</a>
                <?php }?>
            </div>
        </div>
        <!-- <span style="" ><a href="cart.php" id="img_cart" ><img src="images/sys/cart.png"  alt="" style="margin-right:20px" ><span  id="sl">1</span></a></span> -->
        <span style="float:right;margin-top:12px;margin-right:10px"><a href="cart.php" id="img_cart"><img
                    src="images/sys/cart.png" alt=""></a>
            <div id="sl" class="border" style="color:white">
                <?php if(isset($_SESSION['cart'])) echo count($_SESSION['cart']); else echo 0; ?> </div>
        </span>
        <a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>
    </div>
    <div class="right-area">
        <form class="src-form" action="sanpham.php">
            <button type="submit"><i class="ion-search"></i></a></button>
            <input type="text" name="theloai" value="all" style="display:none" placeholder="Search here">
            <input type="text" name="tim" placeholder="Search here">
        </form>
        <!-- src-form -->
    </div>
    <!-- right-area -->

    <ul class="main-menu" id="main-menu" style="float: left;margin-top:10px">
        <li><a href="index.php">Home</a></li>
        <li><a href="#" class="menu_item">Chiến thuật</a></li>
        <li><a href="#" class="menu_item">Giải trí/nhóm</a></li>
        <li><a href="#" class="menu_item">Trẻ em</a></li>
        <li><a href="#" class="menu_item">Gia đình</a></li>
    </ul>
    <script>
    $('.menu_item').click(function() {
        $.get("xuli/repage.php", {
            re: 1
        });

    });
    $(document).ready(function() {
        var l = $(".menu_item").length;
        var theloai = new Array("MC", "AN", "GT", "GD")
        var i = 0;
        $(".menu_item").each(function() {
            $(this).attr("href", "sanpham.php?theloai=" + theloai[i]);
            i++;
        });

    });
    </script>
    <script src="common/scripts.js"></script>
    <div class="clearfix"></div>

</header>