<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>Quite Light</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">
    <!-- Stylesheets -->
    <link href="plugin-frameworks/bootstrap.min.css" rel="stylesheet">
    <link href="fonts/ionicons.css" rel="stylesheet">
    <link href="common/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/fonts.css">
    <script src="plugin-frameworks/jquery.js"></script>
    <script src="plugin-frameworks/bootstrap.min.js"></script>
    <script src="common/scripts.js"></script>
    
    <style>
    #so {
        width: 40px;
        height: 30px;
        color: #898989;
        border: 1px solid #ccc;
        text-shadow: 0 1px 0 rgba(255, 255, 255, 0.75);
        border-radius: 3px;
        box-shadow: 0 1px 2px rgba(25, 25, 25, 0.25) inset, -1px 1px #fff;
        transition: all 0.3s linear;
        text-align: center;
    }
    </style>
    <script>
    function tru() {
        var sl = $('#so').val();
        if (sl > 1) {
            sl--;
            $('#so').val(sl);
        }
    }

    function cong() {
        var sl = $('#so').val();
        if (sl < 20) {
            sl++;
            $('#so').val(sl);
        }
    }
	function i2() {
		var sl = $('#so').val();
		if (sl > 20)
			$('#so').val(20);
	}
    function in_so(evt) {
			
		var charCode = (evt.which) ? evt.which : event.keyCode;
       if(charCode == 59 || charCode == 46)
		return true;
       if (charCode > 31 && (charCode < 48 || charCode > 57))
		  return false;
	   return true;
	}
    $(document).ready(function () {
        $("#so").blur(function () { 
         if($(this).val()=="")
            $(this).val(1);
    });
    });
  
    </script>
</head>

<body>

    <?php 
        include "header.php"
    ?>


    <div class="slider-main h-200x h-sm-auto pos-relative pt-95 pb-25">
        <div class="img-bg bg-16 bg-layer-6"></div>
    </div><!-- slider-main -->


    <section class="bg-1-white ptb-0">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12 col-lg-9 ptb-50  pr-md-15">
                    <div class="row">
                        <div class="col-7">
                            <img src="images/1.jpg" alt="">
                        </div>
                        <div class="col-5">
                            <div id="name" style="font-family:taviraj;font-size: 50px;">
                                Ma soi
                            </div>
                            <div id="c">
                                Số lượng:
                                <input type="button" value="-" onclick="tru()"
                                    style="height: 30px; border: none;width: 20px">
                                <input type="text" value="1" id="so" name="sl" onkeydown="return in_so(event)" onkeyup="i2()" >
                                <input type="button" value="+" onclick="cong()"
                                    style="height: 30px;width: 20px; border: none">
                                <p>
                                    Giá: <span id="gia"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-----------------Noi dung chi tiet----------->
                    <div>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis nemo pariatur animi fugit
                        rem excepturi odit quam maxime, nostrum perspiciatis eius! Odit facere voluptatum, ipsam
                        asperiores exercitationem voluptas quo veniam.
                    </div>

                    <!-----------------comment----------->
                    <div class="brdr-grey-1 mt-50 mt-sm-20"></div>


                    <h4 class="mb-30 mt-20 clearfix"><b>Bình luận</b></h4>

                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
                            <form class="form-block form-h-55 form-plr-20 form-bg-white">
                                <div class="row">

                                    <div class="col-sm-12 mb-30">
                                        <textarea class="ptb-20 min-h-200x" placeholder="Comment"></textarea>
                                    </div><!-- col-sm-12-->

                                </div><!-- row-->
                                <button class="btn-b-lg btn-brdr-grey plr-25 color-ash" type="submit"><b>Đăng bình
                                        luận</b></button>

                            </form>
                        </div><!-- col-sm-6-->
                    </div><!-- row-->







                </div><!-- col-sm-9 -->


            </div><!-- row -->
        </div><!-- container -->
    </section>


    <?php 
        include "footer.html"
    ?>

    <!-- SCIPTS -->




</body>

</html>