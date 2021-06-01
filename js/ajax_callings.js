$(document).ready(function(){
	SexyLightbox.initialize({color:'black'});
	
	$("img").each(function(){
		var w = $( this ).attr("width");
		var h = $( this ).attr("height");
		var src = $( this ).attr("src");
		if( $( this ).attr("alt") == "phpthumb")
			$(this).attr("src", "phpthumb/phpThumb1062.html?src=../" + src + "&w=" + w + "&h=" + h);
	});
});
	
function ajax_noticiaList( pag ){
	$(document).ready(function(){
		document.getElementById("center-content").innerHTML = "<div class='waiting'></div>";
		$("#center-content").load( "ajax_request126a.html?noticiaList=" + pag + "&noCache=" + Math.random() );
		
		$.ajax({
			type: "GET",
			url: "ajax_request.php",
			data: "noticiaList=" + pag + "&noCache=" + Math.random(),
			success: function(msg){
				$("#center-content").css("display","none");
				$("#center-content").fadeIn("slow");
			}
		});
		
	});
}

function ajax_videoShow( id ){
	$(document).ready(function(){
		document.getElementById("videos-player").innerHTML = "<div class='waiting'></div>";
		$("#videos-player").load( "ajax_requestdb69.html?videoShow=" + id + "&noCache=" + Math.random() );
		
		$.ajax({
			type: "GET",
			url: "ajax_request.php",
			data: "videoShow=" + id + "&noCache=" + Math.random(),
			success: function(msg){
				$("#videos-player").css("display","none");
				$("#videos-player").fadeIn("slow");
			}
		});
		
	});
}

function ajax_sendContato(){
	$(document).ready(function(){
		$('#btnEnviar').attr('value', 'enviando contato...');
		$("#frm_contato-sending").fadeIn("slow");

		var parametri1 = $("input").serialize();
		var parametri2 = $("textarea").serialize();
		var parametri = parametri1 +'&'+ parametri2;

		$.ajax({
			type: "POST",
			url: "ajax_request.php",
			data: parametri,
			success: function(msg){
				if( msg == "" ){

				}
				//alert(msg);
				$('#frm_contato-sending span').php( msg);
				$('#btnEnviar').attr('value', 'enviar');
			}
		});
	});
}