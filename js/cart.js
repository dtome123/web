function tinhtien(id, tien, soluong) {
    capnhat(id, soluong);
    $('[data="' + id + '"]').attr("thanhtien", tien * soluong);
    $('[data="' + id + '"]').text(tien * soluong);
    $('[data="' + id + '"]').number(true, 0);
    tongtien();
}

function tongtien() {
    var s = 0;
    $(".ttien").each(function() {
        // element == this
        s += parseInt($(this).attr("thanhtien"));
    });
    $("#tongtien").text(s)
    s = s + parseInt($("#charge").text());
    $('#total').text(s);
    formatnum();
    return s;
}

function formatnum() {
    $("#tongtien").number(true, 0);
    $("#charge").number(true, 0);
    $("#total").number(true, 0);
}


function capnhat(a, sl) {
    $.get("xuli/capnhat.php", {
        key: a,
        value: sl
    });
}

function tru(a, tien) {
    var str = '[name ="' + a + '"]';
    var sl = $(str).val();
    if (sl > 1) {
        sl--;
        $(str).val(sl);
    }
    /* capnhat(a, sl); */
    tinhtien(a, tien, sl);
}

function cong(a, tien) {
    var str = '[name ="' + a + '"]';
    var sl = $(str).val();
    if (sl < 20) {
        sl++;
        $(str).val(sl);
    }
    /* capnhat(a, sl); */
    tinhtien(a, tien, sl);
}

function i2(a, tien) {
    var str = '[name ="' + a + '"]';
    var sl = $(str).val();
    if (sl > 20) {
        $('.so').val(20);
        sl = 20;
    }
    /* capnhat(a, sl); */
    tinhtien(a, tien, sl);
}

function in_so(evt) {

    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode == 59 || charCode == 46)
        return true;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
$(document).ready(function() {
    $(".so").blur(function() {
        if ($(this).val() == "") {
            $(this).val(1);
            var a = $(this).attr("name");
            capnhat(a, 1);
            var gia = $('[idGia="' + a + '"]').attr("gia")
            $('[data="' + a + '"]').attr("thanhtien", gia);
            $('[data="' + a + '"]').text($('[idGia="' + a + '"]').text());
            tongtien();

        }
    });
    $(".them").click(function() {
        /* $.post('xuli/xuligiohang.php', {
            
        }); */
        /* $.post('xuli/xuligiohang.php', { id: $(this).attr("number"), xuat: 1 }, function(data) {
            $("#sl").text(data);
        }); */

    });
    $(".xoa").click(function() {
        var a = $(this).attr("idXoa");
        var r = confirm("Bạn có muốn xóa");
        var s = "";
        if (r == true) {
            $.get("xuli/xoa.php", {
                id: a
            }, function(data) {
                if (data == 0)
                    $('main').html('<div id="empty" class="container"><h3>Không có sản phẩm nào trong giỏ hàng </h3><button id="back"> Quay lại trang trước </button></div> <script>$("#back").click(function() {history.back();});</script>');
                else {
                    $('[data-id=' + a + ']').html("");
                    $("#sl").text(parseInt($("#sl").text()) - 1);
                    tongtien();
                }

            })
        }

    });
    $('#back').click(function() {
        history.back();

    });

    tongtien();


});