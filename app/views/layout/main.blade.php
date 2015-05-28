<!DOCTYPE html>
<html>
    <head>
        <title>Marigold</title>
        
        <style>
/*Basic style*/
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	margin: 0;
	padding: 0;
	color: #000;
}


ul, ol, dl {
	padding: 0;
	margin: 0;
}

a img { 
	border: none;
}
a:link {
	color: #000;
	text-decoration: none; 
}
a:visited {
    color: #000;
	text-decoration: none;
}
a:hover, a:active, a:focus { 
	text-decoration: none;
	color:#09F;
}

.container {
	width: 960px;
	background-color: #FFF;
	margin: 0 auto; 
}


.content {

	padding: 10px 0;
}

.fltrt {  
	float: right;
	margin-left: 8px;
}
.fltlft { 
	float: left;
	margin-right: 8px;
}
.clearfloat { 
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}
/*Basic style*/
/*menu style*/
.navcont{
	width:960px;
	margin:0 auto;
	background:#fff;
	height:45px;
}

.nav {
	height: 45px;
	background: transparent url(http://i50.tinypic.com/bj0nm.png) center bottom no-repeat;
	padding-bottom: 7px;
    margin-bottom: 23px;
}

.nav ul {
	margin:0;
	box-shadow: 0px 1px 2px -1px rgba(0, 0, 0, 0.4);
    -webkit-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.2);
	
}

.nav ul li {
	font: 13px Verdana, 'Lucida Grande';
	cursor: pointer;
	-webkit-transition: padding .05s linear;
	-moz-transition: padding .05s linear;
	-ms-transition: padding .05s linear;
	-o-transition: padding .05s linear;
	transition: padding .05s linear;
	background: transparent url(http://i46.tinypic.com/21c5h93.png) left center no-repeat;
}
.nav li:first-child
{
background:none;
}
.nav ul li.drop {
	position: relative;
}
.nav ul > li {
	display: inline-block;
}
.nav ul li a {
	line-height: 45px;
	padding: 0 20px;
	height: 45px;
	color: #777;
}
.nav ul li a:hover {
	color:#09F;
}

.dropOut .triangle {
	width: 0;
	height: 0;
	position: absolute;
	border-left: 8px solid transparent;
	border-right: 8px solid transparent;
	border-bottom: 8px solid white;
	top: -8px;
	left: 50%;
	margin-left: -8px;
}
.dropdownContain {
	width: 200px;
	position: absolute;
	z-index: 2;
	left: 60%;
	margin-left: -100px; /* half of width */
	top: -400px;
}
.dropOut {
	width: 200px;
	background: white;
	float: left;
	position: relative;
	margin-top: 0px;
	opacity: 0;
	-webkit-box-shadow: 0 1px 6px rgba(0,0,0,.15);
	-moz-box-shadow: 0 1px 6px rgba(0,0,0,.15);
	box-shadow: 0 1px 6px rgba(0,0,0,.15);
	-webkit-transition: all .2s ease-out;
	-moz-transition: all .2s ease-out;
	-ms-transition: all .2s ease-out;
	-o-transition: all .2s ease-out;
	transition: all .2s ease-out;
}

.dropOut ul {
	float: left;
	padding: 0 0;
}
.dropOut ul li {
	text-align: left;
	background: transparent url(http://i50.tinypic.com/303efm1.png) center top repeat-x;
	float: left;
	width: 155px;
	padding: 12px 0 10px 15px;
	margin: 0px 15px;
	color: #777;
}
.dropOut li:first-child
{
background:none;
}

.dropOut ul li:hover {
	color:#09F;
	-webkit-transition: all 200ms ease-in;
    -o-transition: all 200ms ease-in;
    -moz-transition: all 200ms ease-in;
}

ul li:hover a { color:#09F;
	-webkit-transition: all 200ms ease-in;
    -o-transition: all 200ms ease-in;
    -moz-transition: all 200ms ease-in;
 }
ul li:hover .dropdownContain { top: 45px; }
ul li:hover .underline { border-bottom-color: #777; }
ul li:hover .dropOut { opacity: 1; margin-top: 8px; }
/*menu style*/


  .piedavajums{
      position: absolute;
      top: 80px;
      left: 42px;
      font-family: "Myseo_Slab_500", sans-serif;
      text-transform: uppercase;
      display: inline;
  }
  .piedavajums a{
      color: #3698C1;
      text-decoration: none;
      margin-left: 10px;
      font-size: 10px;
  }
  .sign img{
      position: relative;
      top: 115px;
      left:37%;
  }
  .sign .form{
      position: absolute;
      top: 155px;
      left:40%;
  }
  .sign a{
      color: #3698C1;
      text-decoration: none;
      margin-left: 40px;
      font-size: 10px;
  }
  .profile a{
     color: #3698C1;
      text-decoration: none;
      margin-left: 10px;
      font-size: 10px;
  }
 .registration{
       position: absolute;
      top: 150px;
      left:370px;
  }
  .registration a{
      color: #3698C1;
      text-decoration: none;
      margin-left: 10px;
      font-size: 10px;
  }
 .rāmis{
      position: relative;
      top: 150px;
  } 
  .rāmis .title h2 {
   width: 100%; 
   text-align: center; 
   border-bottom: 1px solid #000; 
   line-height: 0.1em;
    
} 
 .latvuraksti{
      position: relative;
      top: 550px;
  } 
  .latvuraksti .title h2 {
   width: 100%; 
   text-align: center; 
   border-bottom: 1px solid #000; 
   line-height: 0.1em;
    
} 
.raksti{
    width: 600px;
    margin: 0 auto;
    padding-bottom: 40px;
}

#slider{
    width: 600px;
    height: 400px;
    border: 3px solid #000000;
    border-radius: 5px;
    position: relative;
}
#slider .slider-content{
    width: 600px;
    height: 400px;
    overflow: hidden;
    position: relative;
}
#slider ul.slider-list{
    position: absolute;
    left: 0;
}
#slider .slider-list li{
    float: left;
    width: 600px;
    height: 400px;
    position: relative;
}
#slider .prev,
#slider .next{
    width: 39px;
    height: 50px;
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    background: url("img/slide-arrow.png") no-repeat 0 0;
    margin: auto;
    text-indent: -9999px;
}
#slider .next{
    left: auto;
    right: 0;
    background-position: 100% 0;
}
.pagination li {
    display: inline;
    margin-left: 0.5em;
    margin-right: 0.5em;
}
.paginations li {
    display: inline;
    margin-left: 0.5em;
    margin-right: 0.5em;
}
.pagination {
    left: 0;
    margin: auto;
    right: 0;
    text-align: center;
}.paginations {
    left: 0;
    margin: auto;
    right: 0;
    text-align: center;
}
.paginations li {
    background: #000;
    display: inline-block;
    height: 15px;
    margin: 0 3px;
    width: 15px;
    border-radius: 50%;
    text-indent: -9999px;
    box-shadow: 0 0 3px 1px #FFF;
    opacity: 0.9;
    cursor: pointer;
}
.paginations li.current{
    opacity: 1;
    box-shadow: 0 0 1px 2px #ff0000;
}

.slide-text {
    color: #fff;
    font-size: 13px;
    left: 50px;
    line-height: 16px;
    position: absolute;
    top: 50px;
    width: 400px;
    opacity: 0;
    -webkit-transition: all 1.5s ease;
    -moz-transition: all 1.5s ease;
    -o-transition: all 1.5s ease;
    -ms-transition: all 1.5s ease;
    transition: all 1.5s ease;
    background-color: rgba(0, 0, 0, 0.2);
    padding: 10px;
}
.slide-text.show{
    opacity: 1;
}

.slide-text.second{
    background-color: rgba(255, 255, 255, 0.2);
    bottom: 50px;
    color: #000;
    left: auto;
    right: 50px;
    top: auto;
    width: 300px;
}
   .atsauksmes{
      position: relative;
      top: 200px;
  }
 .atsauksmes h2 {
   width: 100%; 
   text-align: center; 
   border-bottom: 1px solid #000; 
   line-height: 0.1em;
    
} 

blockquote {
font-family: Georgia, serif;
font-size: 18px;
font-style: italic;
width: 250px;
margin: 0.25em 0;
padding: 0.35em 40px;
line-height: 1.45;
position: absolute;
color: #383838;
}

blockquote:before {
display: block;
padding-left: 10px;
content: "\201C";
font-size: 80px;
position: absolute;
left: -20px;
top: -20px;
color: #7a7a7a;
}

blockquote cite {
color: #999999;
font-size: 14px;
display: block;
margin-top: 5px;
}
 
blockquote cite:before {
content: "\2014 \2009";
}

.title h2 span { 
    background:#fff; 
    padding:0 10px; 
}

.atsauksmes .atsauksme-left
{
    padding:20px 30px;
}
.atsauksmes .atsauksme-middle
{   
    width: 200px;
    padding:0 500px;
    position: absolute;
}

.atsauksme-right{
    width: 250px;
    padding: 0 900px;
}
#container{
    width: 100%;
    position: absolute;
}
html {
    
    background-image: radial-gradient(circle, hsla(0,0%,100%,.1), hsla(0,0%,0%,.75)),
                      linear-gradient(left, transparent 50%, hsla(0,0%,0%,.01) 50%);
    background-position: 50% 75%, 50% 50%;
    background-repeat: no-repeat, repeat;
    background-size: 150% 150%, 3em 3em;
    font-size: 100%;
    min-height: 100%;
}
  

/*SLIDER*/
.galery {
  position: relative;
  height: 500px;
  width: 960px;
  overflow: hidden;
  margin: 0 auto;
}

.big {
  position: absolute;
  top:900px;
  left:20px;

  -webkit-transition: top 1s ease;
  -moz-transition: top 1s ease;
  -o-transition: top 1s ease;
  -ms-transition: top 1s ease;
  transition: top 1s ease;
}


.galery a {
  float: left;
  margin: 20px;
}

.galery a:hover .thumb {
  -webkit-box-shadow: 0px 0px 15px rgba(0,0,0,0.5);
  -moz-box-shadow: 0px 0px 15px rgba(0,0,0,0.5);
  box-shadow: 0px 0px 15px rgba(0,0,0,0.5);
}

.galery a:hover .big {
  top: 260px;
}

.featured {
  top: 260px;
  left: 20px;
  z-index: -3;
}

	#slider-wrapper{
		width: 1024px;
		height: auto;
		margin: 20px auto;
		text-align: center;
	}
	
	#dots{
		cursor: default;
	}
	
	ul{
		padding: 0;
		margin: 0;
	}
	
	#dots li{
		display: inline-block;
			*display: inline;
			zoom: 1.0;
		background: #61676D;
		width: 10px;
		height: 10px;
		border-radius: 8px;
		margin: 0 2px;
		cursor: pointer;
	}
	
	#dots li.active, #dots li:hover{
		background: #c4c9cf;
	}

	#image-slider{
		width: 923px;
		height: 500px;
		position: relative;
		margin-top: 10px;
		overflow: hidden;
		display: inline-block;
			*display: inline;
			zoom: 1.0;
	}
	///
	#slider-wrapper:before{
		content: '';
		width: 974px;
		height: 52px;
		display: block;
		position: absolute;
		left: 50%;
		margin-left: -487px;
		top: 375px;
		background: url(http://www.derekhilldesign.com/projects/slider-header/images/shadow.png) center center no-repeat;
	}
	#image-slider ul{
		width: 923px;
		height: 343px;
		position: relative;
	}
	#image-slider ul li{
		display: inline-block;
			*display: inline;
			zoom: 1.0;
		position: absolute;
		top: 0;
		left: -923px;
	}
	
	#image-slider ul li.active-img{
		left: 0;
	}
	.next-img{
		z-index: 9999;
	}
	
        
        
	#nav-bar{
		width: 923px;
		position: absolute;
		z-index: 999999;
		bottom: -3px;
	}
	
	#nav-bar a{
		display: inline-block;
			*display: block;
			zoom: 1.0;
		width: 231px;
		text-align: center;
		height: 26px;
		padding-top: 9px;
		color: #fff;
		overflow: hidden;
		font-size: 21px;
		text-shadow: 0 1px 5px #000;
		text-decoration: none;
		position: relative;
		background: rgba(2, 19, 32, 0.9);
		-webkit-transition: padding-top .25s;
		-moz-transition: padding-top .25s;
		transition: padding-top .25s;
	}
	
	#nav-bar a:first-child{
		width: 230px;
	}
	
	#nav-bar a div{
		height: 0;
		width: 231px;
		overflow: hidden;
		position: absolute;
		left: 0;
		bottom: 0;
	}
	
	#nav-bar a div img{
		position: absolute;
		left: 0;
		bottom: 0;
		opacity: 0.3;
	}
	
	#nav-bar a:hover{
		padding-top: 317px;
		box-shadow: 0 0 5px #000;
	}
	
	#nav-bar a:hover div{
		height: 343px;
	}
        
        //cenas accordion
.css-script-menu h1 {
  text-align: center;
  font-family: Montserrat, sans-serif;
  color: #333;
  margin-top:150px;
}

.accordion {
  width: 100%;
  max-width: 1080px;
  height: 350px;
  overflow: hidden;
  margin: 50px auto;
}

.accordion ul {
  width: 100%;
  display: table;
  table-layout: fixed;
  margin: 0;
  padding: 0;
}

.accordion ul li {
  display: table-cell;
  vertical-align: bottom;
  position: relative;
  width: 16.666%;
  height: 350px;
  background-repeat: no-repeat;
  background-position: center center;
  transition: all 500ms ease;
}

.accordion ul li div {
  display: block;
  overflow: hidden;
  width: 100%;
}

.accordion ul li div a {
  display: block;
  height: 350px;
  width: 100%;
  position: relative;
  z-index: 3;
  vertical-align: bottom;
  padding: 15px 20px;
  box-sizing: border-box;
  color: #fff;
  text-decoration: none;
  font-family: Open Sans, sans-serif;
  transition: all 200ms ease;
}

.accordion ul li div a * {
  opacity: 0;
  margin: 0;
  width: 100%;
  text-overflow: ellipsis;
  position: relative;
  z-index: 5;
  white-space: nowrap;
  overflow: hidden;
  -webkit-transform: translateX(-20px);
  transform: translateX(-20px);
  -webkit-transition: all 400ms ease;
  transition: all 400ms ease;
}

.accordion ul li div a h2 {
  font-family: Goudy Old Style,Garamond,Big Caslon,Times New Roman,serif;
  text-overflow: clip;
  font-size: 22px;
  text-transform: uppercase;
  margin-bottom: 2px;
  top: 260px;
}

.accordion ul li div a p {
    font-family: Goudy Old Style,Garamond,Big Caslon,Times New Roman,serif;
  top: 260px;
  font-size: 13.5px;
}

.accordion ul li:nth-child(1) { background-image: url("https://s-media-cache-ak0.pinimg.com/736x/96/c2/00/96c200b8effb042084e8e91f877c4b8a.jpg"); }

.accordion ul li:nth-child(2) { background-image: url("http://www.music.lv/upload/pages/16/DSC_0075.jpg"); }

.accordion ul li:nth-child(3) { background-image: url("https://unsplash.it/650/350?image=673"); }

.accordion ul li:nth-child(4) { background-image: url("https://unsplash.it/650/350?image=672"); }

.accordion ul li:nth-child(5) { background-image: url("https://unsplash.it/650/350?image=671"); }

.accordion ul li:nth-child(6) { background-image: url("https://unsplash.it/650/350?image=670"); }

.accordion ul:hover li { width: 8%; }

.accordion ul:hover li:hover { width: 60%; }

.accordion ul:hover li:hover a { background: rgba(0, 0, 0, 0.4); }

.accordion ul:hover li:hover a * {
  opacity: 1;
  -webkit-transform: translateX(0);
  transform: translateX(0);
}
 @media screen and (max-width: 600px) {

.accordion { height: auto; }

.accordion ul li,
.accordion ul li:hover,
.accordion ul:hover li,
.accordion ul:hover li:hover {
  position: relative;
  display: table;
  table-layout: fixed;
  width: 100%;
  -webkit-transition: none;
  transition: none;
}
}
//šūšanas un izšūšanas bildes
.galerija {
    top:100px;
}
.galerija label[for] { cursor: pointer; }

.galerija input[type="checkbox"] { display: none; }


.galerija .lightbox {
  width: 100%;
  position: fixed;
  top: 0;
  left: 0;
  min-height: 100%;
  z-index: 1;
  overflow: auto;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition: -webkit-transform .75s ease-out;
  transition: transform .75s ease-out;
}

.galerija .lightbox img {
  position: fixed;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  max-width: 96%;
  max-height: 96%;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.25);
}

.galerija input[type="checkbox"]:checked + .lightbox {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.galerija input[type="checkbox"]:checked ~ .grid { opacity: .125; }

.galerija .grid {
  position: absolute;
  left: 15px;
  height: 100%;
  z-index: 0;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-wrap: wrap;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-align-items: flex-start;
  -ms-flex-align: start;
  align-items: flex-start;
  -webkit-align-content: flex-start;
  -ms-flex-line-pack: start;
  align-content: flex-start;
  padding: 20px;
  text-align: center;
  -webkit-transition: opacity .75s;
  transition: opacity .75s;
}

.galerija .grid .grid-item {
  width: 20%;
  display: inline-block;
  padding: 20px;
  opacity: .75;
  -webkit-transition: opacity .5s;
  transition: opacity .5s;
}

.galerija .grid .grid-item:hover { opacity: 1; }
@media screen and (max-width: 1024px) {

.galerija .grid .grid-item { width: 50%; }
}
@media screen and (max-width: 480px) {

.galerija .grid .grid-item { width: 100%; }
}

.galerija .grid img {
  max-width: 100%;
  max-height: 100%;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.25);}
  
  
  
  // Cenas 
.navsec{
	width:960px;
	margin:0 auto;
	background:#fff;
	height:45px;
}

.dav {
	height: 45px;
	background: transparent url(http://i50.tinypic.com/bj0nm.png) center bottom no-repeat;
	padding-bottom: 7px;
    margin-bottom: 23px;
}

.dav ul {
	margin:0;
	box-shadow: 0px 1px 2px -1px rgba(0, 0, 0, 0.4);
    -webkit-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.2);
	
}

.dav ul li {
	font: 13px Verdana, 'Lucida Grande';
	cursor: pointer;
	-webkit-transition: padding .05s linear;
	-moz-transition: padding .05s linear;
	-ms-transition: padding .05s linear;
	-o-transition: padding .05s linear;
	transition: padding .05s linear;
	background: transparent url(http://i46.tinypic.com/21c5h93.png) left center no-repeat;
}
.dav li:first-child
{
background:none;
}
.dav ul li.drop {
	position: relative;
}
.dav ul > li {
	display: inline-block;
}
.dav ul li a {
	line-height: 45px;
	padding: 0 20px;
	height: 45px;
	color: #777;
}
.dav ul li a:hover {
	color:#09F;
}

ul li:hover a { color:#09F;
	-webkit-transition: all 200ms ease-in;
    -o-transition: all 200ms ease-in;
    -moz-transition: all 200ms ease-in;
 }
ul li:hover .dropdownContain { top: 45px; }
ul li:hover .underline { border-bottom-color: #777; }
ul li:hover .dropOut { opacity: 1; margin-top: 8px; }

.product h3 {
    font-family: Goudy Old Style,Garamond,Big Caslon,Times New Roman,serif;
    font-size: 24px;
}
.product ul{
    padding: 20px;
}
.product ul.products li {
   
    width: 200px;
    padding:55px;
    display: inline-block;
    vertical-align: top;
    *display: inline;
    *zoom: 1;
}
.button {
        
        -moz-box-shadow:inset 0px 1px 0px 0px #ffe0b5;
        -webkit-box-shadow:inset 0px 1px 0px 0px #ffe0b5;
        box-shadow:inset 0px 1px 0px 0px #ffe0b5;
        
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #fbb450), color-stop(1, #ffdbd7));
        background:-moz-linear-gradient(top, #fbb450 5%, #ffdbd7 100%);
        background:-webkit-linear-gradient(top, #fbb450 5%, #ffdbd7 100%);
        background:-o-linear-gradient(top, #fbb450 5%, #ffdbd7 100%);
        background:-ms-linear-gradient(top, #fbb450 5%, #ffdbd7 100%);
        background:linear-gradient(to bottom, #fbb450 5%, #ffdbd7 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fbb450', endColorstr='#ffdbd7',GradientType=0);
        
        background-color:#fbb450;
        
        -moz-border-radius:7px;
        -webkit-border-radius:7px;
        border-radius:7px;
        
        border:1px solid #c97e1c;
        
        display:inline-block;
        color:#ffffff;
     
        font-size:17px;
        font-weight:bold;
        font-family: ubuntu mono;
        padding:6px 11px;
        text-decoration:none;
        
        text-shadow:0px 1px 0px #8f7f24;
        width: 118px;
        height: 30px;
        
    }
    .button:hover {
        
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ffdbd7), color-stop(1, #fbb450));
        background:-moz-linear-gradient(top, #ffdbd7 5%, #fbb450 100%);
        background:-webkit-linear-gradient(top, #ffdbd7 5%, #fbb450 100%);
        background:-o-linear-gradient(top, #ffdbd7 5%, #fbb450 100%);
        background:-ms-linear-gradient(top, #ffdbd7 5%, #fbb450 100%);
        background:linear-gradient(to bottom, #ffdbd7 5%, #fbb450 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffdbd7', endColorstr='#fbb450',GradientType=0);
        
        background-color:#ffdbd7;
    }
    .button:active {
        position:relative;
        top:1px;
    }
    table{
        border:none !important;
        border-bottom: 1px solid #ddd !important;
        border-collapse: collapse;
        border-spacing: 0;
        text-align: left;
        margin: 0 0 1.625em;
        width: 100%;
    }
    tr th{
        border: none !important;
        color:#666;
        font-size: 10px;
        font-weight: 500;
        letter-spacing: 0.1em;
        line-height: 2.6em;
        text-transform: uppercase;
        padding: 10px 30px 5px 20px;
    }
    td{
        font-size: 10px;
        font-weight: 500;
        letter-spacing: 0.1em;
        line-height: 2.6em;
        text-transform: uppercase;
        border: none !important;
        border-top: 1px solid #ddd !important;
        padding: 10px 30px 5px 20px;
    }
    .entry-title{
        text-align: center;
        font-size: 30px;
        font-weight: 500;
        letter-spacing: 0.1em;
        line-height: 2.6em;
        text-transform: uppercase;
    }
    .entry{
        text-align: justify;
        font-family: Goudy Old Style,Garamond,Big Caslon,Times New Roman,serif; 
        
        clear: both;
        font-size: 30px;
       margin-top: 30px;
       margin-bottom: 10px;
       color: #404040;
        line-height: 1.5em;
        padding: 20px 10px 0px 20px;
    }
    .entry-center{
        text-align: center;
        font-family: Goudy Old Style,Garamond,Big Caslon,Times New Roman,serif; 
        
        clear: both;
        font-size: 30px;
       margin-top: 30px;
       margin-bottom: 10px;
       color: #404040;
        line-height: 1.5em;
        padding: 20px 10px 0px 20px;
    }
    .entry, .entry a{
        color: #222;
        text-decoration: none;
    }
    .entry :hover{
        color:#1982d1;
    }
    .entry-meta{
        color:#666;
        clear: both;
        font-size: 12px;
        line-height: 18px;
        padding: 0px 0px 0px 20px;
    }
    .control-group{
        text-align: left;
        font-size: 15px;
        font-weight: 500;
        letter-spacing: 0.1em;
        line-height: 2.6em;
        text-transform: uppercase;
        padding: 0px 0px 0px 20px;
    }
    #primary{
        width: 700px ;
  margin-left: auto ;
  margin-right: auto ;
    }
    #antiprimary{
        width: 1125px ;
  margin-left: auto ;
  margin-right: auto ;
    }
    .body{
        text-align: justify;
        font-family: Goudy Old Style,Garamond,Big Caslon,Times New Roman,serif; 
        font-size: 20px;
    }
    table.show-post{
        border-bottom: 1px solid #fff !important;
        text-align: center;
        margin: 0 0 1.625em;
        width: 100%;
    }
    table.show-post td{
        border-top: 2px solid #ddd !important;
        font-size: 12px;
       
        
    }
    table.show-product{
        border-bottom: 1px solid #ddd !important;
        text-align: center;
        margin: 0 0 1.625em;
        width: 100%;
    }
    table.show-product td{
        border-top: 1px solid #fff !important;
        font-size: 12px;
       
        
    }
     table.show-first{
        border-bottom: 1px solid #fff !important;
        text-align: center;
        margin: 0 0 1.625em;
        width: 100%;
    }
    table.show-first td{
        border-top: 1px solid #fff !important;
        font-size: 12px;
       
        
    }
    table.sign-in{
        border-bottom: 1px solid #ddd !important;
        text-align: center;
        margin: 0 0 1.625em;
        width: 100%;
    }
    table.sign-in td{
        border-top: 1px solid #ddd !important;
        font-size: 12px;
       
        
    }
    .entry-sign{
        text-align: center;
        font-family: Goudy Old Style,Garamond,Big Caslon,Times New Roman,serif; 
       clear: both;
        font-size: 30px;
       margin-top: 30px;
       margin-bottom: 10px;
       color: #404040;
        line-height: 1.5em;
        padding: 20px 10px 0px 20px;
    }
   
</style>

    </head>
    <body>
        
       
        
        @include ('layout.navigation')
        
        @if(Session::has('global'))
        <p>{{Session::get('global')}}</p>
        @endif
        
        @yield('content')
    </body>
</html>
