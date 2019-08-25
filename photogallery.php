
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link rel = "icon" type = "image/webp" href = "img/SCHEMLOGO.webp">
    

    <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="external/css/bootstrap.css">
    <script src="external/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="external/css/w3.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Rozha+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css?family=Vollkorn" rel="stylesheet">
    <script src="external/js/jquery-3.4.1.slim.min.js"></script>
    <script src="external/js/popper.js" ></script>

    <title>School of Chemical Science</title>
    <style type="text/css">



.sfqlinks a:hover {
  opacity: 1 !important;
  text-decoration: none;
}
      
/* from here       */
  

.itopnav {
  overflow: hidden;
  background-color: #0c2461;
  
}
.itopnav a {
  float: left;
  display: block;
  color:#f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-weight:bold;
  font-family: 'Source Sans Pro', sans-serif;
  font-size:20px;
  opacity: 0.7;
}
.iactive {
  
  color: white;
}
.itopnav .icon {
  display: none;
}
.idropdown {
  float: left;
  overflow: hidden;
}
.idropdown .idropbtn {
  font-weight:bold;
  font-family: 'Source Sans Pro', sans-serif;
  font-size:20px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  margin: 0;
}
.idropbtn {
  opacity:0.6;
}
.idropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index:5;
}
.idropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block ;
  text-align: left;
}
.itopnav a:hover, .idropdown:hover .idropbtn {
  /*background-color: #555;*/
  color: white;
  opacity: 1;
}
.idropdown-content a:hover {
  background-color: #ddd;
  color: black;
}
.idropdown:hover .idropdown-content {
  display: block;
}
@media screen and (max-width: 600px) {
  .itopnav a:not(:first-child), .idropdown .idropbtn {
    display: none;
  }
  .itopnav a.icon {
    float: right;
    display: block;
  }
}
@media screen and (max-width: 600px) {
  .itopnav.responsive {position: relative;}
  .itopnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .itopnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .itopnav.responsive .idropdown {float: none;}
  .itopnav.responsive .idropdown-content {position: relative;}
  .itopnav.responsive .idropdown .idropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
} 
#colch:hover {
    color:white !important;
  
}  
 
    .motionpic {
  margin: 0;
  padding: 0;
  color: #222;
  background-color: #111;
  overflow: hidden;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 2em;
}
canvas {
  background-color: #0c2461;
}
      
/* from here       */
   @media only screen and (max-width: 1350px) {
  .pseudocont{
    display:none;
  }
}
@media only screen and (max-width: 500px) {
  .mapouter,.gmap_canvas,#gmap_canvas{
    width:350px;
  }
}
 

/*div.gallery {*/
/*  margin: 5px;*/
/*  border: 1px solid #ccc;*/
/*  float: left;*/
/*  width: 180px;*/
/*}*/

/*div.gallery:hover {*/
/*  border: 1px solid #777;*/
/*}*/

/*div.gallery img {*/
/*  width: 100%;*/
/*  height: 150px;*/
/*}*/

/*div.desc {*/
/*  padding: 15px;*/
/*  text-align: center;*/
/*}*/

#rig {
    max-width:100%;
    margin:0 auto; /*center aligned*/
    padding:0;
    font-size:0; /* Remember to change it back to normal font size if have captions */
    list-style:none;
    /*background-color:#000;*/

}
#rig li {
    display: inline-block;
    *display:inline;/*for IE6 - IE7*/
    width:25%;
    vertical-align:middle;
    box-sizing:border-box;
    margin:0;
    padding:0;
}
        
/* The wrapper for each item */
.rig-cell {
    /*margin:12px;
    box-shadow:0 0 6px rgba(0,0,0,0.3);*/
    display:block;
    position: relative;
    overflow:hidden;
}
        
/* If have the image layer */
.rig-img {
    display:block;
    width: 100%;
    height: auto;
    border:none;
    transform:scale(1);
    transition:all 1s;
}

#rig li:hover .rig-img {
    transform:scale(1.05);
}
        
/* If have the overlay layer */
.rig-overlay {
    position: absolute;
    /* display:block; */
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    margin: auto;
    background: rgb(12,36,97,0.6) url(img/link.png) no-repeat center 20%;
    background-size:50px 50px;
    opacity:0;
    filter:alpha(opacity=0);/*For IE6 - IE8*/
    transition:all 0.6s;
    display:none;
}
#rig li:hover .rig-overlay {
    opacity:0.8;
}

/* If have captions */
.rig-text {
    /* display:block; */
    padding:0 30px;
    box-sizing:border-box;
    position:absolute;
    left:0;
    width:100%;
    text-align:center;
    text-transform:capitalize;
    font-size:18px;
    font-weight:bold;
    font-family: 'Oswald', sans-serif;
    font-weight:normal!important;
    top:40%;
    color:white;
    opacity:0;
    filter:alpha(opacity=0);/*For older IE*/
    transform:translateY(-20px);
    transition:all .3s;
    display:none;
}
#rig li:hover .rig-text {
    transform:translateY(0px);
    opacity:0.9;
}

@media (max-width: 9000px) {
    #rig li {
        width:25%;
    }
}

@media (max-width: 700px) {
    #rig li {
        width:33.33%;
    }
}

@media (max-width: 550px) {
    #rig li {
        width:50%;
    }
}

#f3{
  display:none;
}
      @media only screen and (max-width: 1000px) {
  .motionpic, #can{
    display:none;
  }
  #f3{
    font-size:3.6vw !important;
    position: absolute !important;
    right:3% !important;
  }
}
@media only screen and (max-width: 640px) {
  
  #f3{
    display:none !important;
  }
  
}
@media only screen and (max-width: 1180px) {
  
  #f1,#f2{
    display:none;
  }
  #f3{
    display:block;
    align-content: center;
  }
  
}

.pgal{
    padding:1%;
    margin-bottom:40px;
}

.pgal > h3{
    margin-bottom : 25px;
    margin-left : 50px;
}

.pgal .row{
    margin-top: 50px;
}
nav ul li a{
    color:#9d9d9d;
    text-decoration:none !important;
}

nav ul li a:hover{
    color:white;
}
    </style>
  </head>
  <body style="background-color: #E9E6DF;overflow-x:hidden;">
    	<div id="load"></div>
    <div id="contents">
        
    </div>
    <div class="container-fluid" style="width:100% !important; padding:0% !important; margin:0% !important; " >
      <div class="pseudocont" style=" box-shadow: 0 20px 20px 0 rgba(0, 0, 0, 1); position:fixed;
      z-index:3 !important;"  >
      <nav class="navbar navbar-inverse" id="pseudoheader" style="background-color: #0c2461; position:fixed; z-index:0 !important;width:100%; border:0px;">
  <div class="container-fluid" id="pseudocontent" style="font-family: 'Source Sans Pro', sans-serif; font-weight:bold;font-size:18px;" >
    <div class="navbar-header" >
      <a class="navbar-brand" style="font-family: serif; font-size : 20px; color:white; font-weight:normal; padding-top:8px; " href="index.php">SCHOOL OF CHEMICAL SCIENCES</a>
    </div>
    <ul class="nav navbar-nav navbar-left">
      <li><a href="index.php"><span style="font-size: 1.2em; color: #9d9d9d; ">
            <i class="fas fa-home"></i>
            </span></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-left">
      <li> <a href="aboutus.php" style="color:#9d9d9d;">About Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-left">
      <li><div class="idropdown" >
        <button class="idropbtn" id="colch" style="font-size:18px; color: #9d9d9d; opacity:1;">Staff 
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="idropdown-content">
          <a href="facultyprofile.php" target="_blank">Staff Profile</a>
          <a onclick="document.getElementById('id01').style.display='block'">Update</a>
         </div>
      </div></li>
    </ul>
    <ul class="nav navbar-nav navbar-left">
      <li><div class="idropdown" >
    <button class="idropbtn" id="colch" style="font-size:18px; color: #9d9d9d; opacity:1;">Admission 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="idropdown-content">
      <a href="http://www.dauniv.ac.in/admissions.php" target="_blank">Admission Procedure</a>
      <a href="courses.php" >Programmes</a>
      <a href="POs.php">POs, PSOs, COs</a>
     </div>
  </div>
  </li>
    </ul>
    <ul class="nav navbar-nav navbar-left">
      <li><div class="idropdown" >
    <button class="idropbtn" id="colch"   style="font-size:18px; color: #9d9d9d; opacity:1;">
      Research 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="idropdown-content" >
      <a href="https://drive.google.com/open?id=1WYIIxCGyLvN1EAmxif02OaI1jSpxHx5C" target="_blank">Lab Profile 1</a>
      <a href="https://drive.google.com/open?id=1ToNP922GnnRP4Ex9Q_8C2wLIB6OX0nxM" target="_blank">Lab Profile 2</a>
      <a href="https://drive.google.com/open?id=1n9znm1frZsMoqX2-KOdaJyFK_QhcuK2F" target="_blank">Lab Profile 3</a>
    </div>
  </div></li>
    </ul>
    <ul class="nav navbar-nav navbar-left">
      <li><a href="student.php">Students</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-left">
      <li> <div class="idropdown">
    <button class="idropbtn" style="font-size:18px; color: white; opacity:1;" >Activities 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="idropdown-content">
      <a href="activities.php">Guest Of Honour</a>
      <a href="photogallery.php" >Gallery</a>
      
      
     </div>
  </div></li>
    </ul>
    <ul class="nav navbar-nav navbar-left">
      <li><a href="http://www.iqac.dauniv.ac.in/" target="_blank">IQAC</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-left">
      <li><a href="alumni.php">Alumni</a></li>
    </ul>
    

  </div>
</nav>
</div>
<p id="f1" style="font-size:2.7vw; color:white; position:absolute;  top:30px; right:20%; z-index:5; font-family:serif; font-weight:bold; ">SCHOOL OF CHEMICAL SCIENCES
</p>
<p id="f2" style="font-size:2.7vw; color:white; position:absolute;  top:110px; right:28%; z-index:5; font-family: 'Rozha One', serif; font-weight:bold;">रसायन विज्ञान अध्ययनशाला  
</p>
<p id="f3" align="center" style="font-size:3vw; color:white; position:absolute;  top:50px; right:25%; z-index:5; font-family:serif; font-weight:bold; ">SCHOOL OF CHEMICAL<br> SCIENCES
</p>

      
     


    <nav class="" style="background-color: #0c2461; position:relative; z-index:4 !important; width:100%; padding-top:10px;margin-bottom:-23px;
    box-shadow: 0 20px 20px 0 rgba(0, 0, 0, 0.2);">
    <a href="http://www.dauniv.ac.in/">
    <div class = "schoolName" style="  border-style:solid;
      border-width: thin;
      border-color: white;
      height:160px;
      width: 150px;
      display:inline-block;
      margin-left:3%;
      margin-top:20px;
      margin-bottom:10px;
      ">
      <img src= "img/davvlogo.webp" width="100%" height="100%" >
      
     
    </div>
    </a>
    <a href="index.php">
     <div class="logopane" style="
     margin-left: 2%;
     width:150px;
     height:160px;
     border-style:solid;
     border-width: thin;
     border-color: white;
     display:inline-block;
     margin-top:20px;
     margin-bottom:10px;
     ">
       <img src="img/SCHEMLOGO.webp" height="100%" width="100%">
      
      </div></a>
      
<div class="motionpic" style = "height :220px;width : 220px;position: absolute;right:2%; top:10px; ">
        <canvas id="can" style="background-color: #0c2461;">
        </canvas>
       
      </div>
      
      <script media="screen and (max-width:1020px)">
         // particules
         var viewportWidth = $(window).width();
         if (viewportWidth > 1000)
         {
class Point {
  constructor(x, y) {
    this.pos = {
      x: x,
      y: y
    };
    this.old_pos = {
      x: x,
      y: y
    };
    this.radius = Utl.random(10,15);
    let color_id = Math.floor(Utl.random(0,colorTheme.length));
    this.color = colorTheme[color_id];
    this.target = {
      x:W/2,
      y:H/2
    };
    this.linked = false;
    this.connected_to = [];
    this.is_dragged = false;
  }
  draw() {
    ctx.fillStyle=this.color; 
    ctx.beginPath();
    ctx.arc(this.pos.x, this.pos.y, this.radius, 0, 2 * Math.PI, false);
    ctx.fill();
    ctx.closePath();
    if(Utl.distance(pointer.pos,this.pos)<this.radius){
    ctx.fillStyle=selection_color;
    ctx.beginPath();
    ctx.arc(this.pos.x, this.pos.y, this.radius-10, 0, 2 * Math.PI, false);
    ctx.fill();
    ctx.closePath();
  }
    
  }
  update() {
    let vx = (this.pos.x - this.old_pos.x) * 0.96,
    vy = (this.pos.y - this.old_pos.y) * 0.96;
    this.old_pos.x = this.pos.x;
    this.old_pos.y = this.pos.y;
    this.pos.x += vx;
    this.pos.y += vy;
    if(!this.linked){
    let angle = Utl.angleFrom(this.pos,this.target)
    this.pos.x += Math.cos(angle) * 0.2;
    this.pos.y += Math.sin(angle) * 0.2;
    }
    if(pointer.active && pointer.target === false){
      if(Utl.distance(pointer.pos,this.pos)<this.radius){
      pointer.offset.x = pointer.pos.x - this.pos.x;
      pointer.offset.y = pointer.pos.y - this.pos.y;
      this.being_dragged = true;
      pointer.target = this;
      }
    }
    if(this.being_dragged && pointer.drag){
      this.pos.x = pointer.pos.x - pointer.offset.x;
      this.pos.y = pointer.pos.y - pointer.offset.y;
    }
        if(this.pos.x + this.radius > W) {
          this.pos.x = W - this.radius;
          this.old_pos.x = this.pos.x + vx * 0.2;
        }
        else if(this.pos.x < this.radius) {
          this.pos.x = this.radius;
          this.old_pos.x = this.pos.x + vx * 0.2;
        }
        if(this.pos.y + this.radius > H) {
          this.pos.y = H - this.radius;
          this.old_pos.y = this.pos.y + vy * 0.2;
        }
        else if(this.pos.y < this.radius) {
          this.pos.y = this.radius;
          this.old_pos.y = this.pos.y + vy * 0.2;
        }
  }
}
class Stick{
  constructor(point_array,stick_array,p0,p1,min_distance){
    this.point_array = point_array;
    this.stick_array = stick_array;
    this.p0 = this.point_array[p0];
    this.p1 = this.point_array[p1];
    let distance = Utl.distance(this.p0.pos,this.p1.pos);
    this.min_distance = min_distance;
    this.length = Math.max(min_distance,distance) + Utl.random(10,80);
    this.maxLength = this.length + 100;
    this.max_link_width = Math.min(3,8);
  }
  update(){
        let dx = this.p1.pos.x - this.p0.pos.x,
        dy = this.p1.pos.y - this.p0.pos.y,
        distance = Math.sqrt(dx * dx + dy * dy);
        if(distance  > this.maxLength){
          this.p0.connected_to[this.point_array.indexOf(this.p1)] = false;
          this.p1.connected_to[this.point_array.indexOf(this.p0)] = false;
          this.stick_array.splice(this.stick_array.indexOf(this), 1);
        }
        let difference = this.length - distance,
        percent = difference / distance /60,
        offsetX = dx * percent,
        offsetY = dy * percent;
        this.p0.pos.x -= offsetX;
        this.p0.pos.y -= offsetY;
        this.p1.pos.x += offsetX;
        this.p1.pos.y += offsetY;
  }
  draw(){
    let distance = Utl.distance(this.p1.pos,this.p0.pos);
    ctx.lineWidth = Utl.map(distance,this.min_distance,this.maxLength,this.max_link_width,0);
    ctx.strokeStyle=link_color;
    ctx.beginPath();
    ctx.moveTo(this.p0.pos.x,this.p0.pos.y);
    ctx.lineTo(this.p1.pos.x,this.p1.pos.y);
    ctx.stroke();
  }
}
// synapse.js
Utl = {};
Utl.distance = function(p1, p2) {
  return Math.hypot(p1.x - p2.x, p1.y - p2.y);
};
Utl.random = function(min, max) {
  return min + Math.random() * (max - min);
};
Utl.angleFrom = function(p1,p2){
  return Math.atan2(p2.y - p1.y, p2.x - p1.x)
};
Utl.map = function(a,b,c,d,e){
  return(a-b)/(c-b)*(e-d)+d;
};
class Synapse{
  constructor(){
    this.points = [];
    this.sticks = [];
    this.number_point = 15;
    for (var i = 0; i < this.number_point; i++) {
      this.points.push(new Point(Utl.random(0,W),Utl.random(0,H)));
    }
  }
  updatePoints(){
    for (let p = this.points.length - 1; p >= 0; p--) {
      this.points[p].update();
        for (let others = this.points.length - 1; others >= 0; others--) {
          if(this.points[p] === this.points[others]) continue;
          let min_distance = this.points[p].radius + this.points[others].radius;
          if(Utl.distance(this.points[p].pos,this.points[others].pos) < min_distance){
            if(this.points[p].connected_to[others] === true) continue;
            this.sticks.push(new Stick(this.points,this.sticks,p,others,min_distance));
            this.points[p].linked = true;
            this.points[p].connected_to[others] = true;
          }
        }
    }
  }
  renderPoints() {
    for (var i = this.points.length - 1; i >= 0; i--) {
      this.points[i].draw();
    }
  }
  renderSticks(){
    for (var i = this.sticks.length - 1; i >= 0; i--) {
      this.sticks[i].draw();
    }
  }
  updateSticks(){
    for (var i = this.sticks.length - 1; i >= 0; i--) {
      this.sticks[i].update();
    }
  }
  update(){
     this.updatePoints();
     this.updateSticks();
    
  }
  draw(){
    this.renderSticks();
    this.renderPoints();
  }
}
let canvas = document.getElementById("can"),
  ctx = canvas.getContext("2d");
let W = canvas.width = 220;
    H = canvas.height = 220;
document.addEventListener("mousedown", event => pointerDown(event), false);
document.addEventListener("mouseup", event => pointerUp(event), false);
document.addEventListener("mousemove", event => pointerMove(event), false);
colorTheme = ["#3fc778","#00a383","#007dc7","#bcb7c5","#ea71bd","#e1534a","#ad3e50","#f29546","#e33247"];
selection_color = "#ffce00";
link_color = "#ffffff";
// colorTheme = ["#007dc7","#ea71bd","#64468d"];
// link_color = "#332041";
let pointer = {
  pos:{
    x:0,
    y:0
  },
  offset:{
    x:0,
    y:0
  },
  active:false,
  drag:false,
  target:false,
}
function pointerDown(event){
  pointer.active = true;
}
function pointerUp(event){
  if(!pointer.drag){
    console.log("simple clique");
  }
  if(pointer.target.being_dragged){
    pointer.target.being_dragged = false;
    pointer.target = false;
  }
  pointer.active = false;
  pointer.drag = false;
}
function pointerMove(event){
  if(pointer.active){
    pointer.drag = true;
  }
  updatePointerPosition(event);
}
function updatePointerPosition(event){
    pointer.pos.x = event.pageX - canvas.offsetLeft;
    pointer.pos.y = event.pageY - canvas.offsetTop;
}
let memory_cloud = new Synapse();
function main_loop() {
  ctx.clearRect(0,0,W,H);
  memory_cloud.update();
  memory_cloud.draw();
  requestAnimationFrame(main_loop);
}
main_loop();
         
         }
</script>


  <div class="itopnav" id="myTopnav" style="margin-left: 2%;">
  <a href="index.php" ><span style="font-size: 1.2em; color: white;  ">
            <i class="fas fa-home" ></i>
            </span></a>
    <a href="aboutus.php" >About Us</a>
    <div class="idropdown">
    <button class="idropbtn"  >Staff 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="idropdown-content">
      <a href="facultyprofile.php">Staff</a>
      <a onclick="document.getElementById('id01').style.display='block'" >Update</a>
     </div>
  </div>
    
  <div class="idropdown">
    <button class="idropbtn" >Admission 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="idropdown-content">
      <a href="http://www.dauniv.ac.in/admissions.php" target="_blank">Admission Procedure</a>
      <a href="courses.php" >Programmes</a>
      <a href="POs.php" >POs, PSOs, COs</a>
     </div>
  </div>
  <div class="idropdown" style="">
    <button class="idropbtn" >Research 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="idropdown-content" >
      <a href="https://drive.google.com/open?id=1WYIIxCGyLvN1EAmxif02OaI1jSpxHx5C" target="_blank">Lab Profile 1</a>
      <a href="https://drive.google.com/open?id=1ToNP922GnnRP4Ex9Q_8C2wLIB6OX0nxM" target="_blank">Lab Profile 2</a>
      <a href="https://drive.google.com/open?id=1n9znm1frZsMoqX2-KOdaJyFK_QhcuK2F" target="_blank">Lab Profile 3</a>
    </div>
  </div> 
  <a href="student.php">Students</a>
  <div class="idropdown">
    <button class="idropbtn" style="opacity:1;">Activities 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="idropdown-content">
      <a href="activities.php">Guest Of Honour</a>
      <a href="photogallery.php" >Gallery</a>
      
      
     </div>
  </div>
  <a href="http://www.iqac.dauniv.ac.in/" target="_blank">IQAC</a>
  <a href="alumni.php">Alumni</a>
  
  <a href="javascript:void(0);" style="font-size:25px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
</nav>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "itopnav") {
    x.className += " responsive";
  } else {
    x.className = "itopnav";
  }
}
  
  
  
</script>
<div class="pgal" >
<?php
include 'connect.php';
$sql = "SELECT Event, DateOfEvent, COUNT(ID) FROM PhotoGallery GROUP BY Event ORDER BY DateOfUpload DESC";
$result1 = $conn->query($sql);


if ($result1->num_rows > 0) {
    // output data of each row
    while($row1 = $result1->fetch_assoc()) {
     $Event= $row1['Event'];   
     $sql = "SELECT ImgLoc, ID FROM PhotoGallery WHERE Event= '$Event' ORDER BY ID ASC";
     $result2 = $conn->query($sql);
        
     echo '<div class="row"><h3 style="margin-left:20px; font-weight:bold;">'.$row1['Event'].' , '.$row1['DateOfEvent'].'</h3><ul id="rig" >' ;
      
        if ($result2->num_rows > 0) {
    // output data of each row
    while($row2 = $result2->fetch_assoc()) {
        
        echo '<li><a class="rig-cell" href="'.$row2['ImgLoc'].'"><img class="rig-img" src="uploads/PhotoGallery/'.$row2['ImgLoc'].'"><span class="rig-overlay"></span></a></li>' ;
        
    }
} else {
    echo "0 results";
}
        
        echo '</ul></div>' ;
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<!--<div class="pgal" style=" padding:1%; margin-bottom:40px;">-->
<!--<div class="row" style="margin-top: 50px;">-->


<!--<h3 style = "margin-bottom : 25px;margin-left : 50px;"> Seminar March 7, 2019</h3>-->
<!--<ul id="rig">-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="DSC_6859.webp">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Seminar</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="DSC_6864.webp">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Consectetur Adipiscing</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="DSC_6887.webp">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Vivamus ut Felis</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="DSC_6892.webp">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Curabitur tempus</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="DSC_6895.webp">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Sed et nunc luctus</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="DSC_6897.webp">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Suspendisse tellus</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="DSC_6939.webp">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">pellentesque odio</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="DSC_6963.webp">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Nam euismod</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="DSC_6965.webp">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Vestibulum ultricies</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="DSC_7007.webp">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">quis interdum sapien</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="DSC_7075.webp">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Maecenas vitae</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="DSC_7090.webp">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Proin Scelerisque</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="DSC_7371.webp">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Proin Scelerisque</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="DSC_7375.webp">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Proin Scelerisque</span>-->
<!--        </a>-->
<!--    </li>-->
    
<!--</ul>-->



<!--<h3 style = "margin-left : 50px;margin-bottom : 25px;"> Seminar March 24, 2018</h3>-->
<!--<ul id="rig">-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/Seminar2018.webp">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Seminar</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/sem1.webp">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Consectetur Adipiscing</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/sem2.webp">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Vivamus ut Felis</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/sem3.webp">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Curabitur tempus</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/sem4.webp">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Sed et nunc luctus</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/sem5.webp">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Suspendisse tellus</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/sem6.webp">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">pellentesque odio</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/sem7.webp">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Nam euismod</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/sem8.webp">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Vestibulum ultricies</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/sem9.webp">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">quis interdum sapien</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/sem10.webp">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Maecenas vitae</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/sem11.webp">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Proin Scelerisque</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/sem12.webp">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Proin Scelerisque</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/sem13.webp">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Proin Scelerisque</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/sem14.webp">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Proin Scelerisque</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/sem15.webp">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Proin Scelerisque</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/sem16.webp">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Proin Scelerisque</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/sem17.webp">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Proin Scelerisque</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/sem18.webp">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Proin Scelerisque</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/sem19.webp">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Proin Scelerisque</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/sem20.webp">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Proin Scelerisque</span>-->
<!--        </a>-->
<!--    </li>-->
<!--</ul>-->

<!--</div>-->





<!--<div class="row" style="margin-top: 50px;">-->


<!--<h3> Workshop Aug 2, 2017</h3>-->
<!--<ul id="rig">-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/Workshop2017.JPG">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Seminar</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/w1.JPG">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Consectetur Adipiscing</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/w2.JPG">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Vivamus ut Felis</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/w3.JPG">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Curabitur tempus</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/w4.JPG">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Sed et nunc luctus</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/w5.JPG">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Suspendisse tellus</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/w6.JPG">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">pellentesque odio</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/w7.JPG">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Nam euismod</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/w8.JPG">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Vestibulum ultricies</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/w9.JPG">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">quis interdum sapien</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/w10.JPG">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Maecenas vitae</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/w11.JPG">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Proin Scelerisque</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/w12.JPG">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Proin Scelerisque</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/w13.JPG">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Proin Scelerisque</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/w14.JPG">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Proin Scelerisque</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/w15.JPG">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Proin Scelerisque</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/w16.JPG">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Proin Scelerisque</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/w17.JPG">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Proin Scelerisque</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/w19.JPG">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Proin Scelerisque</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/w20.JPG">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Proin Scelerisque</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/w21.JPG">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Proin Scelerisque</span>-->
<!--        </a>-->
<!--    </li>-->
    
<!--</ul>-->

<!--</div>-->

<!--<div class="row" style="margin-top: 50px;">-->


<!--<h3  style = "margin-left : 50px;margin-bottom : 25px;"> Seminar March 21, 2017</h3>-->
<!--<ul id="rig">-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/sem21.JPG">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Seminar</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/sem22.JPG">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Consectetur Adipiscing</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/sem23.JPG">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Vivamus ut Felis</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/sem24.JPG">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Curabitur tempus</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/sem25.JPG">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Sed et nunc luctus</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/sem26.JPG">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Suspendisse tellus</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/sem27.JPG">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">pellentesque odio</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/sem28.JPG">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Nam euismod</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/sem29.JPG">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text">Vestibulum ultricies</span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/sem30.JPG">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text"></span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/sem31.JPG">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text"></span>-->
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a class="rig-cell" href="#">-->
<!--            <img class="rig-img" src="img/sem32.JPG">-->
<!--            <span class="rig-overlay"></span>-->
<!--            <span class="rig-text"></span>-->
<!--        </a>-->
<!--    </li>-->
    
<!--</ul>-->
<!--</div>-->
<!--</div>-->
</div>




<div class="smallfooter" style="background-color:#0c2461 !important; display:block; font-family: 'Source Sans Pro', sans-serif; margin-top: 30px; ">

  

    <div class="col-md-3" style="float:left; background-color:inherit; min-height: 500px; " >
         <a href="index.php">
         <div class = "schoolName" style="  border-style:solid;
           border-width: thin;
           border-color: white;
           height:140px;
           width:140px;
           margin-left:5%;
           margin-top:10px;">
          <img src="img/SCHEMLOGO.webp" height="138px" width="138px">
         </div>
       </a>
       <div class="sfqlinks" style="color:white !important;"  >
       <ul style=" list-style-type: none; color:white !important; text-decoration:none; font-size:18px;">
         <li style="margin-top:30px;" >
         <a style="color:white !important; font-weight:bold; opacity:0.6;" href="http://www.dauniv.ac.in/">DAVV</a>
         </li>
         <li style="margin-top:15px;" >
         <a style="color:white !important; font-weight:bold; opacity:0.6;"href="aboutus.php">About Us</a>
         </li>
         <li style="margin-top:15px;" >
         <a style="color:white !important; font-weight:bold; opacity:0.6;" href="https://maps.google.com/?cid=6646430206762351224">Campus Map</a>
         </li>
         <li style="margin-top:15px;" >
         <a style="color:white !important; font-weight:bold; opacity:0.6;" href="aboutdev.php">About Developers</a>
         </li>
 
       </ul>
     </div>
   </div>
     <div class="col-md-4" style="float:left; background-color:inherit; min-height: 500px;  " >
     <div class = "contact" >
       <br>
           <a style = " color : white; font-size : 22px; "><b>Contact Us</b></a>
           
           <p style = "color : white; font-size : 18px; font-weight:500; opacity:0.7;">
             <span style="font-size: 1.2em; color: white; opacity:1;">
           <i class="fas fa-map-marker-alt"></i>
         </span>School of Chemical Sciences, <br>
             Devi Ahilya Vishwavidyalaya,<br>Takshashila Campus,<br>Khandwa Road,<br>Indore (M.P.)-452001,India<br><br>
             <span style="font-size: 1.2em; color: white; opacity:1;">
             <i class="fas fa-phone"></i>
             </span>Contact No. - 0731-2460208 <br><br>
             <span style="font-size: 1.2em; color: white; opacity:1;">
             <i class="fas fa-envelope"></i>
             </span>Email ID: drashoksharma2001@yahoo.com<br><br>
           &copy; 2019 School Of Chemical Sciences</p>
        </div> 
       
     </div>
       
    
 
    <div class="col-md-5" style="float:left;  padding:2%; background-color:inherit; min-height: 500px; " >
     <div class="mapouter" style="outline:solid 20px white; margin-top:30px; margin-bottom:10px;"><div class="gmap_canvas"><iframe style="width:100%;" height="350" id="gmap_canvas" src="https://maps.google.com/maps?q=School%20of%20chemical%20sciences%2CDAVV%2C%20KHANDWA%20ROAD&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de/webdesign-muenster/"></a></div>
     <style>.mapouter{text-align:right;height:350px;width:90%;}.gmap_canvas {overflow:hidden;background:none!important;height:350px;width:100%;}
     </style></div>
 
 </div>
 
 </div>



  </body>
  </html>
