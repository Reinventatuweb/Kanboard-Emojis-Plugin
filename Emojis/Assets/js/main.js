$(document).ready(function() {

	if($(".text-editor textarea").length>0){
		$(".text-editor textarea").emojionePicker({
			pickerTop : 5,
			pickerRight : 5,
			type : "unicode",
		});
		// console.log("emojis");
	}

	// $(".js-modal-large").click(function(){

	// 	window.setTimeout( function(){

	// 		$("#modal-overlay .text-editor-write-mode textarea").emojionePicker({
	// 			pickerTop : 5,
	// 			pickerRight : 5,
	// 			type : "unicode",
	// 		});
	// 	}, 1000 );

	// });	
	

	emojione.emojiSize = 32;
	emojione.ascii = true;

	$(".markdown").each(function(){
		var comentario_html = $(this).html();
		$(this).html(emojione.toImage(comentario_html ) );
	});

	$(".text-editor-toolbar i.fa-eye").parent().on("click", function(){

		window.setTimeout( function(){

			var preview_comment_html = $(".text-editor-preview-area.markdown").html();
			
			$(".text-editor-preview-area.markdown").html(emojione.toImage(preview_comment_html ) );

			console.log("preview");
			// console.log(preview_comment_html);

		}, 1000 );

		
	});
	
	

});