
<div class="swiper-container swiper2 container border" height= "300px" style="margin-top:20px;width:100%;padding: 27px  ">
    <div class="swiper-wrapper">
        <?php 
             require "condb/DataProvider.php";
             $sql="SELECT * FROM sanpham";
             $sql.=" LIMIT 10";
             $result=DataProvider::executeQuery($sql);
            while ($row=mysqli_fetch_array($result)){
                echo '<div class="swiper-slide">
                        <div class="card view overlay zoom hoverable card2" style="">

                            <!-- Card image -->
                            <a href="chitiet.php?id='.$row["MaSP"].'">
                                <div class="view overlay">
                                    <img class="card-img-top" src="images/sanpham/'.$row['Hinh'].'" alt="Card image cap" style="">
                                    <a href="#!">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>

                                <!-- Card content -->
                                <div class="card-body" style="margin-top:-5px ; font-size:1em">

                                    <!-- Title -->
                                    <h4 class="card-title" data-toggle="tooltip" title="'.$row['TenSP'].'" data-placement="top">'.$row['TenSP'].'</h4>
                                    <!-- Text -->
                                    <p class="card-text gia">Giá: '.number_format($row['Gia'],0,",",".").' VNĐ</p>
                                    <!-- Button -->

                                </div>
                            </a>

                        </div>
                    </div>';
            }
         ?>
        
    </div>
    
   
    <div class="swiper-button-next swiper-button-next2 border" ></div>
    <div class="swiper-button-prev swiper-button-prev2 border" ></div>
</div>

<script>
        var grp = 5;
        if ($(window).width() < 450)
            grp = 2;
        else 
            if ($(window).width() < 800)
                grp = 3;
        var swiper = new Swiper('.swiper2', {
            slidesPerView: grp,
            spaceBetween: 30,
            slidesPerGroup: grp,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: '.swiper-pagination2',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next2',
                prevEl: '.swiper-button-prev2',
            },
             autoplay: {
                 delay: 4000,
                 disableOnInteraction: false,
             },
        });
        $(document).ready(function () {
            if($(window).width()<600){
                $(".swiper2").height("220px");
                
            }
        });
    </script>