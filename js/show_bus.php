
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
