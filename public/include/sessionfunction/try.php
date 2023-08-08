	<script>
				$('document').ready(function(){
					$('#btn_postForum').click(function(){
						$('#forums_content').append('<h3>'+ $('#txt_forum').val() +'</h3>');
						
					});
				});
			</script>