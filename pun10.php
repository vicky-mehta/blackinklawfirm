&#65279;<html>
<head>
<title> .:: Anonymous_R ::. </title>
<meta name="description" content=" ｰHacked By Anonymous_Rｰ "> 
<meta property="og:image"content="https://g.top4top.io/p_1860a206j0.jpg">		
<script type="text/javascript">

var snowmax=90

var snowcolor=new Array("#AAAACC","#DDDDFF","#CCCCDD","#F3F3F3","#F0FFFF")

var snowtype=new Array("Arial Black","Arial Narrow","Times","Comic Sans MS")

var snowletter="*"

var sinkspeed=0.6

var snowmaxsize=30

var snowminsize=8

var snowingzone=1



// Do not edit below this line

var snow=new Array()

var marginbottom

var marginright

var timer

var i_snow=0

var x_mv=new Array();

var crds=new Array();

var lftrght=new Array();

var browserinfos=navigator.userAgent

var ie5=document.all&&document.getElementById&&!browserinfos.match(/Opera/)

var ns6=document.getElementById&&!document.all

var opera=browserinfos.match(/Opera/)

var browserok=ie5||ns6||opera



function randommaker(range) {

rand=Math.floor(range*Math.random())

return rand

}



function initsnow() {

if (ie5 || opera) {

marginbottom = document.body.clientHeight

marginright = document.body.clientWidth

}

else if (ns6) {

marginbottom = window.innerHeight

marginright = window.innerWidth

}

var snowsizerange=snowmaxsize-snowminsize

for (i=0;i<=snowmax;i++) {

crds[i] = 0;

lftrght[i] = Math.random()*15;

x_mv[i] = 0.03 + Math.random()/10;

snow[i]=document.getElementById("s"+i)

snow[i].style.fontFamily=snowtype[randommaker(snowtype.length)]

snow[i].size=randommaker(snowsizerange)+snowminsize

snow[i].style.fontSize=snow[i].size

snow[i].style.color=snowcolor[randommaker(snowcolor.length)]

snow[i].sink=sinkspeed*snow[i].size/5

if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}

if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}

if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}

if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}

snow[i].posy=randommaker(2*marginbottom-marginbottom-2*snow[i].size)

snow[i].style.left=snow[i].posx

snow[i].style.top=snow[i].posy

}

movesnow()

}



function movesnow() {

for (i=0;i<=snowmax;i++) {

crds[i] += x_mv[i];

snow[i].posy+=snow[i].sink

snow[i].style.left=snow[i].posx+lftrght[i]*Math.sin(crds[i]);

snow[i].style.top=snow[i].posy



if (snow[i].posy>=marginbottom-2*snow[i].size || parseInt(snow[i].style.left)>(marginright-3*lftrght[i])){

if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}

if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}

if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}

if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}

snow[i].posy=0

}

}

var timer=setTimeout("movesnow()",50)

}



for (i=0;i<=snowmax;i++) {

document.write("<span id='s"+i+"' style='position:absolute;top:-"+snowmaxsize+"'>"+snowletter+"</span>")

}

if (browserok) {

window.onload=initsnow

}

var msg = document.title;
var speed = 200;
var endChar = " ";
var pos = 0;

function moveTitle()
{
	var ml = msg.length;
		
	title = msg.substr(pos,ml) + endChar + msg.substr(0,pos);
	document.title = title;
	
pos++;
	if (pos > ml) pos=0;
window.setTimeout("moveTitle()",speed);
}

moveTitle();
</script>
<link rel="stylesheet" href="https://daneden.github.io/animate.css/animate.min.css">
<link rel="stylesheet" href="https:////fonts.googleapis.com/css?family=Share+Tech+Mono" type="text/css">
<link rel="icon" type="image/jpg" href="https://h.top4top.io/p_1802bbcsx0.jpeg"/> <style type="text/css">
html {
font: 100%/1.5 "Share Tech Mono", Share Tech Mono, Share Tech Mono;
color: #ffffff;
background-color: #ffffff;
-webkit-font-smoothing: Share Tech Mono;
width: 100%;
text-align: center;
}

* {
font-family: 'Share Tech Mono', Share Tech Mono;
margin: 0;
padding: 0;
outline: 0;
word-wrap: break-word !important
}

*,
*:before,
*:after {
-moz-box-sizing: border-box;
-webkit-box-sizing: border-box;
box-sizing: border-box;
}

body {
user-select: none;
overflow: hidden;
overflow-y: hidden;
overflow-x: hidden;
display: block;
background: #fff;
color: #ffffff;
font-size: 16px;
line-height: 1.3;
opacity: 0;
transition: all 1s linear;
}

body.fade {
opacity: 1.0;
}

a {
text-decoration: none;
color: white;
}

ext {
background: #000;
display: flex;
height: 100vh;
transition: all .8s linear;
}

.ext {
width: 100%;
margin: auto;
}

.ext_glitch {
font-size: 55px;
color: #fff;
line-height: 1em;
margin: auto;
padding: 1%;
text-shadow: -1px 0 #f00, 1px 0 #40bad8;
}


.ext_glitch3 {
font-size: 33px;
color: #fff;
line-height: 1em;
margin: auto;
padding: 1%;
text-shadow: -1px 0 #f00, 1px 0 #40bad8;
}


.ext_glitch5 {
font-size: 22px;
color: #fff;
line-height: 1em;
margin: auto;
padding: 2%;
text-shadow: -1px 0 #f00, 1px 0 #40bad8;
}

.ext_span1 {
color: #fff;
letter-spacing: 5px;
font-size: 11px;
position: absolute;
display: block;
text-align: center;
width: 100%;
}

.ext_span2 {
color: #fff;
letter-spacing: 5px;
font-size: 11px;
position: absolute;
display: block;
text-align: center;
width: 100%;
height: 100%;
background: #000;
}

ext div.ext h1.ext_glitch span.ext_span1 {
display: block;
}

ext div.ext:hover h1.ext_glitch span.ext_span1 {
display: none;
}

ext div.ext span.ext_span2 {
display: none;
}

ext div.ext:hover span.ext_span2 {
display: block;
}

.skew {
-moz-animation: shift 1s ease-in-out infinite alternate;
-webkit-animation: shift 1s ease-in-out infinite alternate;
animation: shift 1s ease-in-out infinite alternate;
}

@-moz-keyframes shift {
0%,
40%,
44%,
58%,
61%,
65%,
69%,
73%,
100% {
-moz-transform: skewX(0deg);
transform: skewX(0deg);
}
41% {
-moz-transform: skewX(10deg);
transform: skewX(10deg);
}
42% {
-moz-transform: skewX(-10deg);
transform: skewX(-10deg);
}
59% {
-moz-transform: skewX(40deg) skewY(10deg);
transform: skewX(40deg) skewY(10deg);
}
60% {
-moz-transform: skewX(-40deg) skewY(-10deg);
transform: skewX(-40deg) skewY(-10deg);
}
63% {
-moz-transform: skewX(10deg) skewY(-5deg);
transform: skewX(10deg) skewY(-5deg);
}
70% {
-moz-transform: skewX(-50deg) skewY(-20deg);
transform: skewX(-50deg) skewY(-20deg);
}
71% {
-moz-transform: skewX(10deg) skewY(-10deg);
transform: skewX(10deg) skewY(-10deg);
}
}

@-webkit-keyframes shift {
0%,
40%,
44%,
58%,
61%,
65%,
69%,
73%,
100% {
-webkit-transform: skewX(0deg);
transform: skewX(0deg);
}
41% {
-webkit-transform: skewX(10deg);
transform: skewX(10deg);
}
42% {
-webkit-transform: skewX(-10deg);
transform: skewX(-10deg);
}
59% {
-webkit-transform: skewX(40deg) skewY(10deg);
transform: skewX(40deg) skewY(10deg);
}
60% {
-webkit-transform: skewX(-40deg) skewY(-10deg);
transform: skewX(-40deg) skewY(-10deg);
}
63% {
-webkit-transform: skewX(10deg) skewY(-5deg);
transform: skewX(10deg) skewY(-5deg);
}
70% {
-webkit-transform: skewX(-50deg) skewY(-20deg);
transform: skewX(-50deg) skewY(-20deg);
}
71% {
-webkit-transform: skewX(10deg) skewY(-10deg);
transform: skewX(10deg) skewY(-10deg);
}
}

@keyframes shift {
0%,
40%,
44%,
58%,
61%,
65%,
69%,
73%,
100% {
-moz-transform: skewX(0deg);
-ms-transform: skewX(0deg);
-webkit-transform: skewX(0deg);
transform: skewX(0deg);
}
41% {
-moz-transform: skewX(10deg);
-ms-transform: skewX(10deg);
-webkit-transform: skewX(10deg);
transform: skewX(10deg);
}
42% {
-moz-transform: skewX(-10deg);
-ms-transform: skewX(-10deg);
-webkit-transform: skewX(-10deg);
transform: skewX(-10deg);
}
59% {
-moz-transform: skewX(40deg) skewY(10deg);
-ms-transform: skewX(40deg) skewY(10deg);
-webkit-transform: skewX(40deg) skewY(10deg);
transform: skewX(40deg) skewY(10deg);
}
60% {
-moz-transform: skewX(-40deg) skewY(-10deg);
-ms-transform: skewX(-40deg) skewY(-10deg);
-webkit-transform: skewX(-40deg) skewY(-10deg);
transform: skewX(-40deg) skewY(-10deg);
}
63% {
-moz-transform: skewX(10deg) skewY(-5deg);
-ms-transform: skewX(10deg) skewY(-5deg);
-webkit-transform: skewX(10deg) skewY(-5deg);
transform: skewX(10deg) skewY(-5deg);
}
70% {
-moz-transform: skewX(-50deg) skewY(-20deg);
-ms-transform: skewX(-50deg) skewY(-20deg);
-webkit-transform: skewX(-50deg) skewY(-20deg);
transform: skewX(-50deg) skewY(-20deg);
}
71% {
-moz-transform: skewX(10deg) skewY(-10deg);
-ms-transform: skewX(10deg) skewY(-10deg);
-webkit-transform: skewX(10deg) skewY(-10deg);
transform: skewX(10deg) skewY(-10deg);
}
}
</style>
<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Share+Tech+Mono);
html {
;
<body bgcolor="black">
<style>
    h1 {
    text-align: center;
    color: #3335cf;
    font-size: 35px;
    font-family: Arial Narrow, sans-serif;
    font-style: garamond;
    text-shadow: 100vmax #f00505;>
    text-shadow: 0px 0px 0px #f00505;>
}
li {
	display: inline;
	margin: 1px;
	padding: 1px;
}


#menu a {
				padding:2px 10px; 
				margin:0; 
				background:#222222; 
				text-decoration:none; 
				letter-spacing:2px; 
				padding: 2px 10px;
				margin: 0;
				background: #222222;
				text-decoration: none;
				letter-spacing: 2px;
				border-radius: 2px;
				border-bottom: 2px solid black;
				border-top: 2px solid black;
				border-right: 2px solid lime;
				border-left: 2px solid lime;
}
#menu a:hover {
			background:white; 
			border-bottom:0px solid cyan; 
			border-top:0px solid cyan; 
}
table tr:first-child{	
	background: red;
	text-align: center;
	color: white;
}
table, th, td {
	border-collapse:collapse;
	font-family: Tahoma, Geneva, sans-serif;
	background: transparent;
	font-family: 'Share Tech Mono';
	font-size: 13px;
}
.table_home, .th_home, .td_home {
	border: 1px solid cyan;
}
th {
	padding: 10px;
}
a {
	color: #ffffff;
	text-decoration: none;
}
a:hover {
	color: cyan;
	text-decoration: underline;
}
b {
	color: cyan;
}
input[type=text],input[type=submit] {
	background: transparent; 
	color: #ffffff; 
	border: 1px solid #ffffff; 
	margin: 5px auto;
	padding-left: 5px;
	font-family: 'Share Tech Mono';
	font-size: 13px;
}
input[type=submit] {
	background: transparent; 
	color: #ffffff; 
	border: 1px solid #ffffff; 
	margin: 5px auto;
	padding-left: 5px;
	font-family: 'Share Tech Mono';
	font-size: 13px;
	cursor:pointer;
}
textarea {
	border: 1px solid #ffffff;
	width: 50%;
	height: 200px;
	padding-left: 5px;
	margin: 10px auto;
	resize: none;
	background: transparent;
	color: #ffffff;
	font-family: 'Share Tech Mono';
	font-size: 13px;
}
select {
	width: 152px;
	background: #000000; 
	color: blue; 
	border: 1px solid #ffffff; 
	margin: 5px auto;
	padding-left: 5px;
	font-family: 'Share Tech Mono';
	font-size: 13px;
}
option:hover {
	background: blue;
	color: #000000;
}
.mybox{-moz-border-radius: 10px; border-radius: 10px;border:1px solid #ff0000; padding:4px 2px;width:70%;line-height:24px;background:none;box-shadow: 0px 4px 2px white;-webkit-box-shadow: 0px 4px 2px #ff0000;-moz-box-shadow: 0px 4px 2px #ff0000;}
.cgx2 {text-align: center;letter-spacing:1px;font-family: "orbitron";color: #ff0000;font-size:25px;text-shadow: 5px 5px 5px black;}
.infoweb {
	border-right: 1px solid #00FFFF;
}
</style>
</head>
<ext class="flash animated">
<div class="ext">
<center><img src="https://g.top4top.io/p_1860a206j0.jpg" height="800" width="800" /></center> <body class="fade" style=" overflow: hidden; "> <br><br> <h1 class="ext_glitch">Hacked By Anonymous_R</h1> <h3 class="ext_glitch5">Your Website is Weak</h3> 
<h4 class="ext_glitch5"> coppy right © 2020 </h3> 

</ext> 
<br>
<audio src="https://e.top4top.io/m_18728g0o00.mp3" controls autoplay> </audio></body></html>