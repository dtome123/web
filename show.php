
<?php 
    require "condb/DataProvider.php";
    
    if(isset($_GET['theloai'])){
      // so dong tren 1 trang
        $rowsPerPage = 8;
        $pageNum=1;
        // mac dinh hien thi trang 1
        /* echo $_SESSION['page']; */
        /* if(isset($_SESSION['page'])){  
        $pageNum = $_SESSION['page'];
        }else */ /* $pageNum=1; */
        /* echo $pageNum; */
        if(isset($_GET['page']))
        {
          $pageNum =  $_GET['page'];
        } 
        
        
        
        // neu co tham so $_GET['page'] thi su dung no la trang hien thi
        
        
        // dem chi so cua mau tin dau tien
        $offset = ($pageNum - 1) * $rowsPerPage;
        $sql="SELECT * FROM sanpham ";
        if($_GET['theloai']!='all'){
          $sql.="WHERE matheloai='".$_GET['theloai']."'";
        }
        
        
          
        
        if(isset($_GET['tim']))
          $sql.= " where TenSP like '%".$_GET['tim']."%' ";
        $ord=0;
        //loc san pham bang order, mac dinh =0 là không có lọc
        if(isset($_GET['order']))
          $ord=$_GET['order'];
          
          if($ord==0){
            $sql.="";
          }
          if($ord==1){
            $sql.=" ORDER BY MaSP DESC ";
          }
          if($ord==2){
            $sql.=" ORDER BY MaSP ASC ";
          }
          if($ord==3){
            $sql.=" ORDER BY GIA ASC ";
          }
          if($ord==4){
            $sql.="ORDER BY GIA DESC ";
          }

        

        $sql.="LIMIT $offset,$rowsPerPage ";
        /* echo $sql;  */
        $result=DataProvider::executeQuery($sql);
        while ($row=mysqli_fetch_array($result)){
        $row["Gia"]=number_format($row['Gia'],0,",",".");
        echo '<!-- Card -->
        <div class="card col-6 col-sm-4 col-md-3 view overlay zoom hoverable"  style="margin-bottom:15px">
        
          <!-- Card image -->
          <a href="chitiet.php?id='.$row["MaSP"].'">
          <div class="view overlay">
          <img class="card-img-top" src="images/sanpham/'.$row['Hinh'].'" alt="Card image cap" style="margin-top:20px;height:170px">
          <a href="#!">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
      
        <!-- Card content -->
        <div class="card-body" style="margin-top:-5px ; font-size:1em">
      
          <!-- Title -->
          <h4 class="card-title" data-toggle="tooltip" title="'.$row['TenSP'].'" data-placement="top">'.$row['TenSP'].'</h4>
          <!-- Text -->
          <p class="card-text gia" >Giá: '.$row['Gia'].' VNĐ</p>
          <!-- Button -->
          <button class="btn btn-primary blue-gradient them" number="'.$row['MaSP'].'" style="font-size:0.95em" >Thêm vào giỏ </button>
      
        </div>
          </a>
        
        </div>
        <!-- Card -->';
        }
        //dem so mau tin 
        if($_GET['theloai']!='all')
          $sql="SELECT count(*) as numrows From sanpham Where matheloai='".$_GET['theloai']."'"  ;
        else 
          if(!isset($_GET['tim'])){
            $sql="SELECT count(*) as numrows From sanpham";
          }
          else
            $sql="SELECT count(*) as numrows From sanpham Where TenSP like '%".$_GET['tim']."%'";
        
        $result=DataProvider::executeQuery($sql);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        $numrows=$row['numrows'];
        if($numrows>0){
          // Tong so trang se hien thi
          $maxpage=ceil($numrows/$rowsPerPage);
          // hien thi lien ket den tung trang
          $self = "sanpham.php";
          $nav  = ''; 
                  
          for($page = 1; $page <= $maxpage; $page++)
          {
            if ($page == $pageNum)
            {
                $nav .= '<li class="page-item page-link active page pagenum" style="background-color:aqua" page="-1"><button> '.$page.'</button></li> '; // khong can tao link cho trang hien hanh
            }
            else
            {

                $nav .= '<li class="page-item page-link page pagenum" page="'.$page.'"> <button>'.$page.'</button></li> ';
            }
          }

          // tao lien ket den trang truoc & trang sau, trang dau, trang cuoi
          if ($pageNum > 1)
          {
            $page  = $pageNum - 1;
            $prev  = ' <li class="page-item page-link page" page="'.$page.'"><button>[Trang trước]</button></li> ';

            $first = ' <li class="page-item page-link page" page="1"><button>[Trang đầu]</button></li> ';
          }
          else
          {
            $prev  = '&nbsp;'; // dang o trang 1, khong can in lien ket trang truoc
            $first = '&nbsp;'; // va lien ket trang dau
          }

          if ($pageNum < $maxpage)
          {
            $page = $pageNum + 1;
            $next = '<li class="page-item page-link page" page="'.$page.'"><button>[Trang kế]</button></li> ';

            $last = '<li class="page-item page-link page" page="'.$maxpage.'"><button>[Trang cuối]</button></li>';
          }
          else
          {
            $next = '&nbsp;'; // dang o trang cuoi, khong can in lien ket trang ke
            $last = '&nbsp;'; // va lien ket trang cuoi
          }

          // hien thi cac link lien ket trang
          echo '<nav aria-label="Page navigation example" style="margin:auto;margin-bottom:50px"><ul class="pagination" >'. $first . $prev . $nav . $next . $last . '</ul></nav>';
          //ẩn hiện thanh menu mini
          $an=0;
        }
        else{
          echo '<div id="empty" class="container">
                    <h3>
                        Không tìm thấy kết quả "'.$_GET['tim'].'"
                    </h3>
                </div>';
          //ẩn hiện thanh menu mini
          $an=1;
        }
          
    }

?>

<script>
$(".page").click(function() {
    var pg = $(this).attr("page");
    if (pg > 0) {
        $.get("show.php", {
            theloai: "<?php echo $_GET['theloai'] ?>",
            page: pg,
            order:<?php echo $ord; ?>
        }, function(data) {
            $(".show").html(data);
        })
        $("body,html").animate({
            scrollTop: 800
        }, "slow");
        $.get("xuli/xulipage.php",{page:pg});
    }
})

$('[data-toggle="tooltip"]').tooltip();

$(".them").click(function() {
    var masp=$(this).attr("number");
    $.post('xuli/tontaitronggio.php',{id:masp},function(data){
      if(data==1){
        
        var r=confirm("Sản phẩm đã có trong giỏ bạn có muốn thêm số lượng")
        if(r==true){
          $.post('xuli/xuligiohang.php', { id:masp,xuat:1 },function(data){
            $("#sl").text(data);
          });
          alert("Đã tăng số lượng");
        }
      }
      else {
        $.post('xuli/xuligiohang.php', { id:masp,xuat:1 },function(data){
            $("#sl").text(data);
          });
          alert("Đã thêm vào giỏ");
      }
        
    })
    
    /* alert($(this).attr("number")); */
});
$(document).ready(function () {
  //thu gon nút phân trang
  var a;//lấy gia trị trang đang chọn
  $('.pagenum').each(function () {
    if($(this).attr('page')==-1)  
      a=$(this).text()
  })
  $('.pagenum').each(function () {
    var o=$(this);
     if(o.text()>2 && ((a-o.text())>2 || ((o.text()-a)>2 && o.text()<$('.pagenum').length-1)))
     {
       o.text("...")
       o.attr("none","1")
        /* o.css("background-color", "yellow"); */  
     }
    /*o.css('display','none') */
  })
  $('[none=1]:first').attr('none',2) 
  $('[none=1]:last').attr('none',2)
  $('[none=1]').css('display','none')
  var n1=parseInt($('[none=2]:first').attr('page'));
  var n2=parseInt($('[none=2]:last').attr('page'));
  if((n1<a && n2<a )|| (n1>a && n2>a)){
    $('[none=2]:last').css('display','none');
    
  }
  $('[none=2]:first').attr('page','-2');
  $('[none=2]:last').attr('page','-2');
    
  //ẩn hiện thanh menu mini
  var an=<?php echo $an ?>;
  if(an==1)
    $('#menu_mini').html("");
  
});
</script>

