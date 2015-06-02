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

.right {
    float:right;
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
	font: 12px Verdana, 'Lucida Grande';
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
 .latvian{
      position: relative;
      top: 250px;
  } 
  .latvian .title h2 {
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
   .review{
      position: relative;
      top: 10px;
  }
 .review h2 {
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

.review .atsauksme-left
{
    padding:20px 30px;
}
.rev .atsauksme-middle
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
        //cenas accordion
.css-script-menu h1 {
  text-align: center;
  font-family: Montserrat, sans-serif;
  color: #333;
  margin-top:150px;
}

.accordion {
  width: 100%;
  max-width: 800px;
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

.accordion ul li:nth-child(1) { background-image: url("http://i.imgur.com/Y46VPFj.jpg"); }

.accordion ul li:nth-child(2) { background-image: url("http://i.imgur.com/Wrdujmp.jpg"); }

.accordion ul li:nth-child(3) { background-image: url("http://i.imgur.com/c2pxlGR.jpg"); }

.accordion ul li:nth-child(4) { background-image: url("http://i.imgur.com/kSDxKlm.jpg"); }

.accordion ul li:nth-child(5) { background-image: url("http://i.imgur.com/Y3ebVcF.jpg"); }

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
    .right h4{
        height:10px;
    }
    .entry-center-under{
        text-align: center;
        font-family: Goudy Old Style,Garamond,Big Caslon,Times New Roman,serif; 
        clear: both;
        font-size: 24px;
       margin-top: 24px;
       margin-bottom: 10px;
       color: #404040;
        line-height: 1.5em;
        padding: 0px 10px 0px 20px;
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
    
    
    
    @font-face {
    font-family: 'WebSymbolsRegular';
    src: url('http://html5css3demos.bplaced.net/css3-slider-v3/websymbols-regular-webfont.eot');
    src: url('http://html5css3demos.bplaced.net/css3-slider-v3/websymbols-regular-webfont.eot?#iefix') format('embedded-opentype'), url('http://html5css3demos.bplaced.net/css3-slider-v3/websymbols-regular-webfont.woff') format('woff'), url('http://html5css3demos.bplaced.net/css3-slider-v3/websymbols-regular-webfont.ttf') format('truetype'), url('http://html5css3demos.bplaced.net/css3-slider-v3/websymbols-regular-webfont#WebSymbolsRegular') format('svg');
}


h1 { color: white }

#slideshow-wrap {
    display: block;
    height: 480px;
    min-width: 260px;
    max-width: 320px;
    margin: auto;
    -webkit-box-shadow: 0px 0px 5px rgba(0,0,0,.8);
    -moz-box-shadow: 0px 0px 5px rgba(0,0,0,.8);
    box-shadow: 0px 0px 5px rgba(0,0,0,.8);
    margin-top: 20px;
    position: relative;
}

#slideshow-inner {
    width: 100%;
    height: 100%;
    background-color: rgb(0,0,0);
    overflow: hidden;
    position: relative;
}

#slideshow-inner>ul {
    list-style: none;
    height: 100%;
    width: 500%;
    overflow: hidden;
    position: relative;
    left: 0px;
    -webkit-transition: left .8s cubic-bezier(0.77, 0, 0.175, 1);
    -moz-transition: left .8s cubic-bezier(0.77, 0, 0.175, 1);
    -o-transition: left .8s cubic-bezier(0.77, 0, 0.175, 1);
    transition: left .8s cubic-bezier(0.77, 0, 0.175, 1);
}

#slideshow-inner>ul>li {
    width: 20%;
    height: 320px;
    float: left;
    position: relative;
}

#slideshow-inner>ul>li>img {
    margin: auto;
    height: 150%;
}

#slideshow-wrap input[type=radio] {
    position: absolute;
    left: 50%;
    bottom: 15px;
    z-index: 100;
    visibility: hidden;
}

#slideshow-wrap label:not(.arrows):not(.show-description-label) {
    position: absolute;
    left: 50%;
    bottom: -45px;
    z-index: 100;
    width: 12px;
    height: 12px;
    background-color: rgba(200,200,200,1);
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    cursor: pointer;
    -webkit-box-shadow: 0px 0px 3px rgba(0,0,0,.8);
    -moz-box-shadow: 0px 0px 3px rgba(0,0,0,.8);
    box-shadow: 0px 0px 3px rgba(0,0,0,.8);
    -webkit-transition: background-color .2s;
    -moz-transition: background-color .2s;
    -o-transition: background-color .2s;
    transition: background-color .2s;
}

#slideshow-wrap label:not(.arrows):active { bottom: -46px }

#slideshow-wrap input[type=radio]#button-1:checked~label[for=button-1] { background-color: rgba(100,100,100,1) }

#slideshow-wrap input[type=radio]#button-2:checked~label[for=button-2] { background-color: rgba(100,100,100,1) }

#slideshow-wrap input[type=radio]#button-3:checked~label[for=button-3] { background-color: rgba(100,100,100,1) }

#slideshow-wrap input[type=radio]#button-4:checked~label[for=button-4] { background-color: rgba(100,100,100,1) }

#slideshow-wrap input[type=radio]#button-5:checked~label[for=button-5] { background-color: rgba(100,100,100,1) }

#slideshow-wrap label[for=button-1] { margin-left: -36px }

#slideshow-wrap label[for=button-2] { margin-left: -18px }

#slideshow-wrap label[for=button-4] { margin-left: 18px }

#slideshow-wrap label[for=button-5] { margin-left: 36px }

#slideshow-wrap input[type=radio]#button-1:checked~#slideshow-inner>ul { left: 0 }

#slideshow-wrap input[type=radio]#button-2:checked~#slideshow-inner>ul { left: -100% }

#slideshow-wrap input[type=radio]#button-3:checked~#slideshow-inner>ul { left: -200% }

#slideshow-wrap input[type=radio]#button-4:checked~#slideshow-inner>ul { left: -300% }

#slideshow-wrap input[type=radio]#button-5:checked~#slideshow-inner>ul { left: -400% }

label.arrows {
    font-family: 'WebSymbolsRegular';
    font-size: 25px;
    color: rgb(255,255,240);
    position: absolute;
    top: 50%;
    margin-top: -25px;
    display: none;
    opacity: 0.7;
    cursor: pointer;
    z-index: 1000;
    background-color: transparent;
    -webkit-transition: opacity .2s;
    -moz-transition: opacity .2s;
    -o-transition: opacity .2s;
    transition: opacity .2s;
    text-shadow: 0px 0px 3px rgba(0,0,0,.8);
}

label.arrows:hover { opacity: 1 }

label.arrows:active { margin-top: -23px }

input[type=radio]#button-1:checked~.arrows#arrow-2, input[type=radio]#button-2:checked~.arrows#arrow-3, input[type=radio]#button-3:checked~.arrows#arrow-4, input[type=radio]#button-4:checked~.arrows#arrow-5 {
    right: -30px;
    display: block;
}

input[type=radio]#button-2:checked~.arrows#arrow-1, input[type=radio]#button-3:checked~.arrows#arrow-2, input[type=radio]#button-4:checked~.arrows#arrow-3, input[type=radio]#button-5:checked~.arrows#arrow-4 {
    left: -30px;
    display: block;
    -webkit-transform: scaleX(-1);
    -moz-transform: scaleX(-1);
    -ms-transform: scaleX(-1);
    -o-transform: scaleX(-1);
    transform: scaleX(-1);
}

input[type=radio]#button-2:checked~.arrows#arrow-1 { left: -19px }

input[type=radio]#button-3:checked~.arrows#arrow-2 { left: -37px }

input[type=radio]#button-5:checked~.arrows#arrow-4 { left: -73px }

.description {
    position: absolute;
    top: 0;
    left: 0;
    width: 260px;
    font-family: 'Yanone Kaffeesatz';
    z-index: 1000;
}

.description input { visibility: hidden }

.description label {
    font-family: 'WebSymbolsRegular';
    background-color: rgba(255,255,240,1);
    position: relative;
    left: -17px;
    top: 00px;
    width: 40px;
    height: 27px;
    display: inline-block;
    text-align: center;
    padding-top: 7px;
    border-bottom-right-radius: 15px;
    cursor: pointer;
    opacity: 0;
    -webkit-transition: opacity .2s;
    -moz-transition: opacity .2s;
    -o-transition: opacity .2s;
    transition: opacity .2s;
    z-index: 5;
    color: rgb(20,20,20);
}

#slideshow-inner>ul>li:hover .description label { opacity: 1 }

.description input[type=checkbox]:checked~label { opacity: 1 }

.description .description-text {
    background-color: rgba(255,255,230,.5);
    padding-left: 45px;
    padding-top: 25px;
    padding-right: 15px;
    padding-bottom: 15px;
    position: relative;
    top: -35px;
    z-index: 4;
    opacity: 0;
    -webkit-transition: opacity .2s;
    -moz-transition: opacity .2s;
    -o-transition: opacity .2s;
    transition: opacity .2s;
    color: rgb(20,20,20);
}

.description input[type=checkbox]:checked~.description-text { opacity: 1 }
   
.bottom{
    top: 1000px;
}
footer{
    float: bottom;
    position: static;
  margin: 80px 0 0;
  min-width: 768px;
  height: 80px;
  background: rgba(200,200,200,1);;
}
br {
   display: block;
   margin: 20px;
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
        .success{
            
        }
        .message{
     
}
.info{
     background-color: #4ea5cd;
     border-color: #3b8eb5;
}
.error,.warning, .success{
    -webkit-background-size: 20px 20px;
     -moz-background-size: 20px 20px;
     background-size: 20px 20px;
     background-image: -webkit-gradient(linear, left top, right bottom,
                color-stop(.25, rgba(255, 255, 255, .05)), color-stop(.25, transparent),
                color-stop(.5, transparent), color-stop(.5, rgba(255, 255, 255, .05)),
                color-stop(.75, rgba(255, 255, 255, .05)), color-stop(.75, transparent),
                         to(transparent));
     background-image: -webkit-linear-gradient(135deg, rgba(255, 255, 255, .05) 25%, transparent 25%,
                         transparent 50%, rgba(255, 255, 255, .05) 50%, rgba(255, 255, 255, .05) 75%,
                         transparent 75%, transparent);
     background-image: -moz-linear-gradient(135deg, rgba(255, 255, 255, .05) 25%, transparent 25%,
                         transparent 50%, rgba(255, 255, 255, .05) 50%, rgba(255, 255, 255, .05) 75%,
                         transparent 75%, transparent);
     background-image: -ms-linear-gradient(135deg, rgba(255, 255, 255, .05) 25%, transparent 25%,
                          transparent 50%, rgba(255, 255, 255, .05) 50%, rgba(255, 255, 255, .05) 75%,
                          transparent 75%, transparent);
     background-image: -o-linear-gradient(135deg, rgba(255, 255, 255, .05) 25%, transparent 25%,
                          transparent 50%, rgba(255, 255, 255, .05) 50%, rgba(255, 255, 255, .05) 75%,
                           transparent 75%, transparent);
     background-image: linear-gradient(135deg, rgba(255, 255, 255, .05) 25%, transparent 25%,
                           transparent 50%, rgba(255, 255, 255, .05) 50%, rgba(255, 255, 255, .05) 75%,
                            transparent 75%, transparent);
     -moz-box-shadow: inset 0 -1px 0 rgba(255,255,255,.4);
     -webkit-box-shadow: inset 0 -1px 0 rgba(255,255,255,.4);
     box-shadow: inset 0 -1px 0 rgba(255,255,255,.4);
     width: 100%;
     border: 1px solid;
     color: #fff;
     text-align: center;
     position: absolute;
     _position: absolute;
     text-shadow: 0 1px 0 rgba(0,0,0,.5);
     -webkit-animation: animate-bg 5s linear infinite;
     -moz-animation: animate-bg 5s linear infinite;
}
.error{
     background-color: #de4343;
     border-color: #c43d3d;
}

.warning{
     background-color: #eaaf51;
     border-color: #d99a36;
     -webkit-background-size: 20px 20px;
     -moz-background-size: 20px 20px;
     background-size: 20px 20px;
     background-image: -webkit-gradient(linear, left top, right bottom,
                color-stop(.25, rgba(255, 255, 255, .05)), color-stop(.25, transparent),
                color-stop(.5, transparent), color-stop(.5, rgba(255, 255, 255, .05)),
                color-stop(.75, rgba(255, 255, 255, .05)), color-stop(.75, transparent),
                         to(transparent));
     background-image: -webkit-linear-gradient(135deg, rgba(255, 255, 255, .05) 25%, transparent 25%,
                         transparent 50%, rgba(255, 255, 255, .05) 50%, rgba(255, 255, 255, .05) 75%,
                         transparent 75%, transparent);
     background-image: -moz-linear-gradient(135deg, rgba(255, 255, 255, .05) 25%, transparent 25%,
                         transparent 50%, rgba(255, 255, 255, .05) 50%, rgba(255, 255, 255, .05) 75%,
                         transparent 75%, transparent);
     background-image: -ms-linear-gradient(135deg, rgba(255, 255, 255, .05) 25%, transparent 25%,
                          transparent 50%, rgba(255, 255, 255, .05) 50%, rgba(255, 255, 255, .05) 75%,
                          transparent 75%, transparent);
     background-image: -o-linear-gradient(135deg, rgba(255, 255, 255, .05) 25%, transparent 25%,
                          transparent 50%, rgba(255, 255, 255, .05) 50%, rgba(255, 255, 255, .05) 75%,
                           transparent 75%, transparent);
     background-image: linear-gradient(135deg, rgba(255, 255, 255, .05) 25%, transparent 25%,
                           transparent 50%, rgba(255, 255, 255, .05) 50%, rgba(255, 255, 255, .05) 75%,
                            transparent 75%, transparent);
     -moz-box-shadow: inset 0 -1px 0 rgba(255,255,255,.4);
     -webkit-box-shadow: inset 0 -1px 0 rgba(255,255,255,.4);
     box-shadow: inset 0 -1px 0 rgba(255,255,255,.4);
     width: 100%;
     border: 1px solid;
     color: #fff;
     text-align: center;
     position: absolute;
     _position: absolute;
     text-shadow: 0 1px 0 rgba(0,0,0,.5);
     -webkit-animation: animate-bg 5s linear infinite;
     -moz-animation: animate-bg 5s linear infinite;
}

.success{
     background-color: #61b832;
     border-color: #55a12c;
     -webkit-background-size: 20px 20px;
     -moz-background-size: 20px 20px;
     background-size: 20px 20px;
     background-image: -webkit-gradient(linear, left top, right bottom,
                color-stop(.25, rgba(255, 255, 255, .05)), color-stop(.25, transparent),
                color-stop(.5, transparent), color-stop(.5, rgba(255, 255, 255, .05)),
                color-stop(.75, rgba(255, 255, 255, .05)), color-stop(.75, transparent),
                         to(transparent));
     background-image: -webkit-linear-gradient(135deg, rgba(255, 255, 255, .05) 25%, transparent 25%,
                         transparent 50%, rgba(255, 255, 255, .05) 50%, rgba(255, 255, 255, .05) 75%,
                         transparent 75%, transparent);
     background-image: -moz-linear-gradient(135deg, rgba(255, 255, 255, .05) 25%, transparent 25%,
                         transparent 50%, rgba(255, 255, 255, .05) 50%, rgba(255, 255, 255, .05) 75%,
                         transparent 75%, transparent);
     background-image: -ms-linear-gradient(135deg, rgba(255, 255, 255, .05) 25%, transparent 25%,
                          transparent 50%, rgba(255, 255, 255, .05) 50%, rgba(255, 255, 255, .05) 75%,
                          transparent 75%, transparent);
     background-image: -o-linear-gradient(135deg, rgba(255, 255, 255, .05) 25%, transparent 25%,
                          transparent 50%, rgba(255, 255, 255, .05) 50%, rgba(255, 255, 255, .05) 75%,
                           transparent 75%, transparent);
     background-image: linear-gradient(135deg, rgba(255, 255, 255, .05) 25%, transparent 25%,
                           transparent 50%, rgba(255, 255, 255, .05) 50%, rgba(255, 255, 255, .05) 75%,
                            transparent 75%, transparent);
     -moz-box-shadow: inset 0 -1px 0 rgba(255,255,255,.4);
     -webkit-box-shadow: inset 0 -1px 0 rgba(255,255,255,.4);
     box-shadow: inset 0 -1px 0 rgba(255,255,255,.4);
     width: 100%;
     border: 1px solid;
     color: #fff;
     text-align: center;
     position: absolute;
     _position: absolute;
     text-shadow: 0 1px 0 rgba(0,0,0,.5);
     -webkit-animation: animate-bg 5s linear infinite;
     -moz-animation: animate-bg 5s linear infinite;
}

.message h5{
     margin: 0 0 5px 0;
}

@-webkit-keyframes animate-bg{
    from {
       background-position: 0 0;
    }
    to {
       background-position: -80px 0;
    }
}

@-moz-keyframes animate-bg{
    from {
       background-position: 0 0;
    }
    to {
       background-position: -80px 0;
    }
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

