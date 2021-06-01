// Change Img
// SlideToggle
$(document).ready(function () {
    $('#m_nav li img').click(function () {
	$('#content').slideToggle('normal');
    });
});
// Rollover
$(document).ready(function(){
	// Posts
	$("#content li>img").each(function () {
		rollsrc = $(this).attr("src");
		rollON = rollsrc.replace(/.gif$/gi, "_o.gif");
		$("<img>").attr("src", rollON);
	});

	$("#content li>a").mouseover(function () {
		imgsrc = $(this).children("img").attr("src");
		matches = imgsrc.match(/_o/);
		if (!matches) {
			imgsrcON = imgsrc.replace(/.gif$/gi, "_o.gif");
			$(this).children("img").attr("src", imgsrcON);
		}
	});

	$("#content li>a").mouseout(function () {
		$(this).children("img").attr("src", imgsrc);
	});

});