<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="index.css" />
<script type="text/javascript">
	function render(){
		if($(window).width() >= 768){
			var right_spacing = $(document).width() - ($("#content").offset().left + $("#content").outerWidth());
			var $sub_menu = $("#sub-menu");
			var $main_menu = $("#main-menu");
			var $logo = $("#logo");
			$sub_menu.css("position", "fixed");
			$sub_menu.css("right", right_spacing + "px");
			$sub_menu.css("display", "block");
			$main_menu.css("position", "fixed");
			$main_menu.css("right", right_spacing + "px");
			$main_menu.css("top", "80px");//($("#main-menu-container").outerHeight() - $("#main-menu").outerHeight()));
			$main_menu.css("margin", "0px");
			$logo.css("width", "160px");
			$logo.css("margin", "20px");
			$logo.attr("src", "images/logo-bordered.png");
			$logo.css("position", "relative");
			$logo.css("top", "-20px");
			$(".main-sub-menu-item").css("display", "none");
			$("#content").css("margin", "50px 0px 0px 0px");
			$("#main-menu-container").css("height", "130px");
			$(".navbar").css("background-color", "");
		}
		else{
			var $logo = $("#logo");
			$logo.css("width", "40px");
			$logo.css("margin", "5px");
			$logo.attr("src", "images/logo.png");
			$logo.css("position", "relative");
			$logo.css("top", "0px");
			$("#sub-menu").css("display", "none");
			$("#main-menu").css("position", "");
			$(".main-sub-menu-item").css("display", "block");
			$("#content").css("margin", "50px 0px 0px 0px");
			$("#main-menu-container").css("height", "60px");
			$(".navbar").css("background-color", "#204972");
		}
	}
	$(document).ready(function(){
		render();
	});
	$(window).on("resize",function(){
		render();
	});
</script>