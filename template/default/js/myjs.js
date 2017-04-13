
$(document).ready(function() {
	// 导航特效
	$("#nav li a").wrapInner( '<span class="out"></span>' );
	
	$("#nav li a").each(function() {
		$( '<span class="over">' +  $(this).text() + '</span>' ).appendTo( this );
	});

	$("#nav li a").hover(function() {
		$(".out",	this).stop().animate({'bottom':	'60px'},	300); // move down - hide
		$(".over",	this).stop().animate({'bottom':	'0px'},		300); // move down - show

	}, function() {
		$(".out",	this).stop().animate({'bottom':	'0px'},		300); // move up - show
		$(".over",	this).stop().animate({'bottom':	'-60px'},	300); // move up - hide
	});

	
});

function getInfo(id) {
    $.ajax({
        type: "POST",
        url: "WebUserControl/Contact/GetInfo.ashx",
        cache: false,
        async: false,
        data: { ID: id },
        success: function (data) {
            data = eval(data);
            var length = data.length;
            if (length > 0) {
                ShowMap(data[0]["Image"], data[0]["NewsTitle"], data[0]["Address"], data[0]["Phone"], data[0]["NewsTags"], data[0]["NewsNum"]);
            }
        }
    });
}
function ShowMap(zuobiao, name, addrsee, phone, chuanzhen, zoom) {
    var arrzuobiao = zuobiao.split(',');
    var map = new BMap.Map("allmap");
    map.centerAndZoom(new BMap.Point(arrzuobiao[0], arrzuobiao[1]), zoom);
    map.addControl(new BMap.NavigationControl());
    var marker = new BMap.Marker(new BMap.Point(arrzuobiao[0], arrzuobiao[1]));
    map.addOverlay(marker);
    var infoWindow = new BMap.InfoWindow('<p style="color: #bf0008;font-size:14px;">' + name + '</p><p>地址：' + addrsee + '</p><p>电话：' + phone + '</p><p>手机：' + chuanzhen + '</p>');
    marker.addEventListener("click", function () {
        this.openInfoWindow(infoWindow);
    });
    marker.openInfoWindow(infoWindow);
}