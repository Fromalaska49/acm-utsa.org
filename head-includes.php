<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="index.css" />
<script type="text/javascript">
	$(document).ready(function(){
		$("#sub-menu").css("position", "fixed");
		$("#sub-menu").css("right", $(document).width() - ($('#content').offset().left + $('#content').outerWidth()));
	});
	$(window).on("resize",function(){
		$("#sub-menu").css("position", "fixed");
		$("#sub-menu").css("right", $(document).width() - ($('#content').offset().left + $('#content').outerWidth()));
	});
</script>