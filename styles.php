a {
	outline: none;
}

ul.icons {
	list-style:			none;
	padding:  			0;
	margin:				0;
}

#iconContainer {
	width:				100%;
	overflow:			auto;
	padding:			0 0 50px 0;
}

ul.icons li {
	width:				220px;
	overflow:			hidden;
	float:				left;
	margin:				5px 5px;
	padding:			3px;
	background-color:	white;
	color:				black;
	font-size:			12px;
	display:			block;
}

ul.icons li:hover {
	background-color:	#ddd;
	color:				#333;
}

.icon_link {
	cursor:				pointer;
}

ul.icons li p.icon_content {
	font-size:			14px;
	font-weight:		bold;
	margin:				0 0 3px 0;
	width:				220px;
	white-space:		nowrap;
	overflow: 			hidden;
	color:				black;
}

ul.icons li .image_holder {
	width:				218px;
	height:				140px;
	overflow:			hidden;
	border:				1px solid #ddd;	
	background-color:	#ddd;
}
ul.icons li:hover .image_holder {
	border:				1px solid #ddd;
}
ul.icons li img { 
	margin-top:			0;
}

.grid_title {
	font-size:			160%;
	font-weight:		bold;
}

#middle-column.no_right_bar {
	margin-right:		0;
}

#middle-column.no_left_bar {
	margin-left:		0;
}

/** Shadebox stuff from here down **/

/*#shadebox_content {
	position:		absolute;
	width:			800px;
	top:			100px;
	left:			50%;
	margin-left:	-400px;
	z-index:		100001;
}*/


div#shadebox_overlay {
	position:		absolute;
	top:			0;
	left:			0;
	width:			100%;
	height:			500px;
	background:		black;
	/* for IE */
  	filter:alpha(opacity=70);
  	/* CSS3 standard */
  	opacity:0.7;	
	z-index:		100000;
	cursor:			pointer;
}

#shadebox_close {
	position:		absolute;
	top:			-10px;
	right:			-10px;
	cursor:			pointer;
}