<div class="nav loc position-sticky">
            
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav"
                    aria-expanded="false" aria-label="Toggle navigation" style="font-size:15px;margin-top: 1px;height:30px">
                    <!-- <span class="navbar-toggler-icon"></span> -->
                    Menu 
                </button>
                <div id="my-nav" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a href="#" class="menu_item">Chiến thuật</a></li>
                        <li class="nav-item"><a href="#" class="menu_item">Giải trí/nhóm</a></li>
                        <li class="nav-item"><a href="#" class="menu_item">Trẻ em</a></li>
                        <li class="nav-item"><a href="#" class="menu_item">Gia đình</a></li>
                    </ul>
                </div>
            </nav>

            <div class="dropdown nav-item">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Lọc
                </button>
                <div class="dropdown-menu loc" aria-labelledby="dropdownMenuButton">
                    <li class="nav-item">

                        <?php echo '<a href="sanpham.php?theloai='.$_GET['theloai'].'&order=1" class="choose" >'?>
                        Mới nhất </a>

                    </li>
                    <li class="nav-item">


                        <?php echo '<a href="sanpham.php?theloai='.$_GET['theloai'].'&order=2" class="choose" >'?>
                        Bán chạy nhất </a>

                    </li>
                    <li class="nav-item">

                        <?php echo '<a href="sanpham.php?theloai='.$_GET['theloai'].'&order=3" class="choose" >'?>
                        Giá thấp</a>

                    </li>
                    <li class="nav-item">


                        <?php echo '<a href="sanpham.php?theloai='.$_GET['theloai'].'&order=4" class="choose">'?>Giá cao
                        </a>


                    </li>

                </div>
            </div>
            <div>
                <form class="src-form">
                    <input type="text" placeholder="Search here">
                    <button type="submit"><i class="ion-search"></i></a></button>
                </form>
            </div>

        </div>


        <li class="nav-item">

                            <?php 
                        if(isset($_GET['tim']))
                            $tim="&tim=".$_GET['tim'];
                        else
                            $tim='';
                        echo '<a href="sanpham.php?theloai='.$_GET['theloai'].'&order=1'.$tim.'" class="choose">'
                    ?>Mới nhất </a>

                        </li>
                        <li class="nav-item">


                            <?php 
                             echo '<a href="sanpham.php?theloai='.$_GET['theloai'].'&order=2'.$tim.'" class="choose">'
                        ?>
                            Bán chạy nhất </a>

                        </li>
                        <li class="nav-item">

                            <?php 
                            echo '<a href="sanpham.php?theloai='.$_GET['theloai'].'&order=3'.$tim.'" class="choose">'
                        ?>
                            Giá thấp</a>

                        </li>
                        <li class="nav-item">


                            <?php 
                            echo '<a href="sanpham.php?theloai='.$_GET['theloai'].'&order=4'.$tim.'" class="choose">'
                        ?>Giá cao
                            </a>


                        </li>