<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="index.css" />
<script type="text/javascript">
	function render(){
		if($(window).width() >= 768){
			$("#sub-menu").css("position", "fixed");
			$("#sub-menu").css("right", $(document).width() - ($("#content").offset().left + $("#content").outerWidth()));
			$("#sub-menu").css("display", "block");
			$("#main-menu").css("position", "fixed");
			$("#main-menu").css("right", $(document).width() - ($("#content").offset().left + $("#content").outerWidth()));
			$("#main-menu").css("top", ($("#main-menu-container").outerHeight() - $("#main-menu").outerHeight()));
			$(".main-sub-menu-item").css("display", "none");
			$("#logo").css("width", "160px");
			$("#logo").css("margin", "20px");
			$("#content").css("margin", "50px 0px 0px 0px");
			$("#logo").attr("src", "images/logo-bordered.png");
			$("#logo").css("position", "relative");
			$("#logo").css("top", "-20px");
			$("#main-menu-container").css("height", "130px");
		}
		else{
			$("#sub-menu").css("display", "none");
			$("#main-menu").css("position", "");
			$(".main-sub-menu-item").css("display", "block");
			$("#logo").css("width", "40px");
			$("#logo").css("margin", "5px");
			$("#content").css("margin", "50px 0px 0px 0px");
			$("#logo").attr("src", "images/logo.png");
			$("#logo").css("position", "relative");
			$("#logo").css("top", "0px");
			$("#main-menu-container").css("height", "60px");
		}
	}
	$(document).ready(function(){
		render();
	});
	$(window).on("resize",function(){
		render();
	});
</script>