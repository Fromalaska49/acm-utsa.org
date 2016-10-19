*
	transition: all .2s ease;

#main-menu-container
	background-color: #204972;
	color: #fff;
	height: 130px;

.navbar-collapse
	background-color: #204972;

.navbar, .navbar > div, .navbar-header
	height: 130px;

.navbar
	margin-bottom: 0;
	border-style: none;

.navbar-brand
	padding: 0;
	height: 130px;

#logo
	width: 160px;
	margin: 0;

#menu-container
	postion: fixed;
	top: 0;
	left: 0;
	right: 0;

.nav
	&>li
		&>a
			color: #fff;
			&:hover
				background-color: #296097;

.icon-bar
	background-color: #fff;

@media (min-width: 833px) and (max-width: 992px), (min-width: 1057px) and (max-width: 1200px), (min-width: 1265px)
	.navbar-brand
		margin-left: -65px !important;


@media (max-width: 767px)
	#logo
		height: 129px;
		width: 129px;
	.navbar-brand
		margin: 0 auto !important;
	#menu-container
		position: absolute;

#sub-menu-container
	padding: 0;

@media (max-width: 767px)
	#sub-menu-container
		display: none;

#sub-menu
	background-color: #ccc;
	padding: 0;
	margin: 0;

.sub-menu-item
	margin:0px 0px 0px -4px;
	padding:20px;
	display:inline-block;
	color:white;
	text-shadow:0px 0px 1px #000;

	&:hover
		color: #fff;
		text-decoration: none;


#sub-menu-item-1
	background-color:#217dba;

#sub-menu-item-1:hover
	background-color:#3498db;


#sub-menu-item-2
	background-color:#007184;

#sub-menu-item-2:hover
	background-color:#009cb8;


#sub-menu-item-3
	background-color:#2a844a;

#sub-menu-item-3:hover
	background-color:#36ab5f;


#sub-menu-item-4
	background-color:#87c115;

#sub-menu-item-4:hover
	background-color:#a5e723;

#content
	margin-top: 50px;
	background-color: #ccc;
	min-height: 1000px;
