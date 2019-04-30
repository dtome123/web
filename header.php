<header>
    <div class="img-bg bg-1 bg-layer-4"></div>
    <a class="logo" href="#"><img src="images/logo-white.png" alt="Logo"></a>
    <div style="height: 4.6em;border: 1px solid #aaa">

        <span style="float:right"><img src="images/sys/acc.jpg" id="acc" alt=""></span>
        <!-- <span style="" ><a href="cart.php" id="img_cart" ><img src="images/sys/cart.png"  alt="" style="margin-right:20px" ><span  id="sl">1</span></a></span> -->
        <span style="float:right;margin-top:12px;margin-right:10px"><a href="cart.php" id="img_cart" ><img src="images/sys/cart.png"  alt=""  ></a><div id="sl" class="border" style=""> <?php if(isset($_SESSION['cart'])) echo count($_SESSION['cart']); else echo 0; ?> </div></span>
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

    <ul class="main-menu" id="main-menu" style="float: left;">
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
            var theloai = new Array("MC", "AN", "TM", "GD")
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