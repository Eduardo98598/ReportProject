<?php 

require_once('usuario.php');
	require_once('crud_usuario.php');
  require_once('conexion.php');
  
  session_start();
  if (!isset($_SESSION['email'])) {
	  header('Location: ../index.html');
  }
?>
<html>
<head>
<style>
.barra {
 
	display: flex;
	flex-direction: row;
	flex-wrap: nowrap;
	justify-content: flex-start;
	align-items: stretch;
	align-content: stretch;
  
    }
    #myCanvas {
        float:left;
       
    }
    legend{
        font-family:Arial;
        font-size:5px;
        float:right;
        margin-top:50px;
        max-height: 1px;
        display: flex;
       
    }
    #tip {
        background-color:white;
        border:1px solid #808080;
        position:absolute;
        left:-200px;
        top:100px;
    }
    </style>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Report</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Favicons -->
  <link href="../img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <!-- Vendor CSS Files -->
 <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
 <link href="..//assets/vendor/aos/aos.css" rel="stylesheet">
 <link href="../assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
 <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

 <link href="../css/style.css" rel="stylesheet">
<link href="../css/stylelog.css" rel="stylesheet">



</head>




<body>
<!--Inicia todo etiquetas del cuerpo-->
  <!-- ======= Mobile Menu ======= -->
  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>
<!-- ======= Header ======= -->
<header class="site-navbar js-sticky-header site-navbar-target" role="banner">

    <div class="container">
      <div class="row align-items-center">

        <div class="col-6 col-lg-2">
          <h1 class="mb-0 site-logo"><a href="root.php" class="mb-0">Report</a></h1>
        </div>

        <div class="col-12 col-md-10 d-none d-lg-block">
          <nav class="site-navigation position-relative text-right" role="navigation">

            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
              <li class="active"><a href="root.php" class="nav-link">Inicio</a></li>
              <li><a href="#" class="nav-link">Agregar</a></li>
              <li><a href="#" class="nav-link">Membresias</a></li>

              <li class="has-children">
                <a href="#" class="nav-link">Reportes</a>
                <ul class="dropdown">
                  <li><a href="report1.php" class="nav-link">Reporte de enfermedades</a></li>
                  <li><a href="report2.php" class="nav-link">Reporte de usuarios</a></li>
                </ul>
              </li>
              
            </ul>
          </nav>
        </div>

        <div class="col-6 d-inline-block d-lg-none ml-md-0 py-3" style="position: relative; top: 3px;">

          <a href="#" class="burger site-menu-toggle js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
            <span></span>
          </a>
        </div>

      </div>
    </div>

  </header>
  
  <section class="hero-section" id="hero">

    <div class="wave">

      <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
            <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
          </g>
        </g>
      </svg>

    </div>

    

    <div class="container">
    
      <div class="row align-items-center">
        <div class="col-12 hero-text-image">
          <div class="row">
		  
         
            <div class="wrapper fadeInDown">
			<div class="barra">
      <canvas id="myCanvas"></canvas>
        <legend for="myCanvas"></legend>
        <canvas id="tip" width=100 height=25></canvas>
        </div>
          
        
       

        <ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Total de usuarios con plan
    <span id="total" class="badge badge-primary badge-pill">0</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Total facturado
    <span id="fact" class="badge badge-primary badge-pill">0</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Usuarios con visa
    <span id="visa" class="badge badge-primary badge-pill">0</span>
  </li>

  <li class="list-group-item d-flex justify-content-between align-items-center">
    Usuarios con Mastercard
    <span id="master" class="badge badge-primary badge-pill">0</span>
  </li>

  <li class="list-group-item d-flex justify-content-between align-items-center">
    Usuarios con Amex
    <span id="amex" class="badge badge-primary badge-pill">0</span>
  </li>
</ul>
            
            <!--<div style="float:left;margin-right:50px;">
	<canvas id="canvas1"></canvas>
	<div id="leyenda1" class="leyenda"></div>
</div> -->
 <!--Abre etiquetas para ser llamado con JS-->

 <!--codigo php para mostrar la cantidad de datos que existen por enfermedad -->
<?php
echo "<table style='border: solid 1px black;'>";
 echo "<tr><th>Planes</th><th>Conteo</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

//$servername = "localhost";
//$username = "username";
//$password = "password";
//$dbname = "myDBPDO";

try {
    //$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn=Db::conectar();
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT plan, COUNT(*) FROM shop WHERE plan = 1 GROUP BY plan");
    $stmt->execute();
    $stmt1 = $conn->prepare("SELECT plan, COUNT(*) FROM shop WHERE plan = 2 GROUP BY plan");
    $stmt1->execute();
	$stmt2 = $conn->prepare("SELECT plan, COUNT(*) FROM shop WHERE plan = 3 GROUP BY plan");
	$stmt2->execute();
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	$result1 = $stmt1->setFetchMode(PDO::FETCH_ASSOC);
	$result2 = $stmt2->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
      
    }
    foreach(new TableRows(new RecursiveArrayIterator($stmt1->fetchAll())) as $k1=>$v1) {
      echo $v1;
  }
  foreach(new TableRows(new RecursiveArrayIterator($stmt2->fetchAll())) as $k2=>$v2) {
	echo $v2;
}

}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>
 
 <script>
// se preparan variables con sql 
var visaCount=<?php 
$db=Db::conectar();
$select=$db->prepare('SELECT  card,COUNT(card) FROM shop WHERE card LIKE "4%"');
$select->execute();
$registro=$select->fetch();
echo $registro[1];
?>;

var masterCount=<?php 
$db=Db::conectar();
$select=$db->prepare('SELECT  card,COUNT(card) FROM shop WHERE card LIKE "5%"');
$select->execute();
$registro=$select->fetch();
echo $registro[1];
?>;

var amexCount=<?php 
$db=Db::conectar();
$select=$db->prepare('SELECT  card,COUNT(card) FROM shop WHERE card LIKE "3%"');
$select->execute();
$registro=$select->fetch();
echo $registro[1];
?>;



//SELECT  COUNT(card) FROM shop WHERE card LIKE '5%';
console.log(visaCount);
var globalFact=<?php 
$db=Db::conectar();
$select=$db->prepare('SELECT price, sum(price) from shop');
$select->execute();
$registro=$select->fetch();
echo $registro[1];
?>;
//console.log(globalFact);

var p1=<?php 
$db=Db::conectar();
$select=$db->prepare('SELECT plan, COUNT(*) FROM shop WHERE plan = 1');
$select->execute();
$registro=$select->fetch();
echo $registro[1];
?>;

var p2=<?php 
$db=Db::conectar();
$select=$db->prepare('SELECT plan, COUNT(*) FROM shop WHERE plan = 2');
$select->execute();
$registro=$select->fetch();
echo $registro[1];
?>;


var p3=<?php 
$db=Db::conectar();
$select=$db->prepare('SELECT plan, COUNT(*) FROM shop WHERE plan = 3');
$select->execute();
$registro=$select->fetch();
echo $registro[1];
?>;

//todas funciones para rescatar

const planx = (x)=>
{

return x;

  
}


const plany = (y)=>
{

return y;

  
}


const planz = (z)=>
{

return z;

  
}


const total = (x,y,z)=>
{

return x+y+z;

  
}



const totalFact = (total)=>
{

return total;

  
}



const visa = (x)=>
{

return x;

  
}


const master= (y)=>
{

return y;

  
}


const amex= (z)=>
{

return z;

  
}
//funcion que muestra los textos en los contenedores
function mostrar()
{

  window.onload = function what(){
		document.getElementById("total").innerHTML=""+total(p1,p2,p3);
    document.getElementById("fact").innerHTML="$"+totalFact(globalFact);
    document.getElementById("visa").innerHTML=""+visa(visaCount);
    document.getElementById("master").innerHTML=""+master(masterCount);
    document.getElementById("amex").innerHTML=""+amex(amexCount);

};
  
}





/**
 * Funcion para dibujar una linea
 */
function drawLine(ctx, startX, startY, endX, endY,color) {
    ctx.save();
    ctx.strokeStyle = color;
    ctx.beginPath();
    ctx.moveTo(startX,startY);
    ctx.lineTo(endX,endY);
    ctx.stroke();
    ctx.restore();
}
 
/**
 * Funcion para dibujar un rectangulo

 */
function drawBar(ctx, upperLeftCornerX, upperLeftCornerY, width, height,color) {
    ctx.save();
    ctx.fillStyle=color;
    ctx.fillRect(upperLeftCornerX,upperLeftCornerY,width,height);
    ctx.restore();
}


/**
 * Clase para crear el gráfico de barras
 
 */
var BarChart = function(options) {
    this.name = options.name;
    this.data = options.data
    this.canvas = options.canvas;
    this.ctx = this.canvas.getContext("2d");
    this.tip = options.tip;
    this.ctxTip = this.tip.getContext("2d");
    this.colors = options.colors;
    this.dots=[];
    that=this;
 
    this.draw = function(){
        var padding=30;
 
        var maxValue = Math.max(...Object.values(this.data));
        var canvasActualHeight = this.canvas.height - padding * 2;
        var canvasActualWidth = this.canvas.width - padding - 10;
 
        var gridScale = Math.round(maxValue/8);
 
        // dibujamos el grid
        var gridValue = 0;
        while (gridValue <= maxValue){
            var gridY = canvasActualHeight * (1 - gridValue/maxValue) + padding;
            drawLine(
                this.ctx,
                0,
                gridY,
                this.canvas.width,
                gridY,
                "#e1e1e1"
            );
 
            // dibujamos los numeros en el grid
            this.ctx.save();
            this.ctx.fillStyle = "#808080";
            this.ctx.textBaseline="bottom";
            this.ctx.font = "bold 10px Arial";
            this.ctx.fillText(gridValue, 10,gridY - 2);
            this.ctx.restore();
 
            gridValue+=gridScale;
        }
 
        // dibujamos las barras
        var barIndex = 0;
        var numberOfBars = Object.keys(this.data).length;
        var barSize = (canvasActualWidth)/numberOfBars;
 
        for (categ in this.data){
            let val = this.data[categ];
            let barHeight = Math.round( canvasActualHeight * val/maxValue) ;
            drawBar(
                this.ctx,
                padding + barIndex * barSize,
                this.canvas.height - barHeight - padding,
                barSize,
                barHeight,
                this.colors[barIndex%this.colors.length]
            );
            let x=padding + barIndex * barSize;
            let y=this.canvas.height - barHeight - padding;
            this.dots.push({x:x, y:y, w:(x+barSize), h:(y+barHeight)});
            barIndex++;
        }
 
        // dibujamos el nombre
        this.ctx.save();
        this.ctx.textBaseline="bottom";
        this.ctx.textAlign="center";
        this.ctx.fillStyle = "#000000";
        this.ctx.font = "bold 5px Arial";
        this.ctx.fillText(this.name, this.canvas.width/2,this.canvas.height);
        this.ctx.restore();
 
        // dibujamos la leyenda
        barIndex = 0;
        var legend = document.querySelector("legend[for='myCanvas']");
        var ul = document.createElement("ul");
        legend.append(ul);
        for (categ in this.data){
            let li = document.createElement("li");
            li.style.listStyle = "none";
            li.style.borderLeft = "5px solid "+this.colors[barIndex%this.colors.length];
           
            li.style.padding = "0px";
            li.textContent = categ+" ("+this.data[categ]+")";
            ul.append(li);
            barIndex++;
        }
    }
 
    /**
     * Funcion para mostrar el tooltip
     */
    this.handleMouseMove=function(e){
        mouseX=parseInt(e.clientX-(e.clientX-e.offsetX));
        mouseY=parseInt(e.clientY-(e.clientY-e.offsetY));
 
        for (let i = 0; i < this.dots.length; i++) {
            let dot = this.dots[i];
            if(mouseX>dot.x && mouseX<dot.w && mouseY>dot.y && mouseY<dot.h)
            {
                let rect=this.canvas.getBoundingClientRect();
                this.tip.style.left = (dot.x + rect.left - 10) + "px";
                this.tip.style.top = (dot.y + rect.top + 10) + "px";
                this.ctxTip.clearRect(0, 0, this.tip.width, this.tip.height);
                let text=Object.keys(this.data)[i];
                this.ctxTip.fillText(text+" ("+this.data[text]+")", 5, 15);
                return;
            }
        }
        this.tip.style.left = "-200px";
    }
 
    this.canvas.addEventListener("mousemove",function(e){that.handleMouseMove(e);});
}
 
var myCanvas = document.getElementById("myCanvas");
var myTip = document.getElementById("tip");
myCanvas.width = 300;
myCanvas.height = 300;
 
//var MisNiveles = {
    
//};


//objeto que recibe las caracteristicas
 
var myBarChart = new BarChart(
    {
        canvas:myCanvas,
        tip:myTip,
        data:{"Total":total(p1,p2,p3),"Gratis": planx(p1),"Medio": plany(p2),"Premiun": planz(p3)},
        name:"",
        colors:["#a55ca5","#67b6c7","#bccd7a","#eb9743", "#a58787", "#a53939"]
    }
);
myBarChart.draw();
mostrar();
//facturado();


</script>


<!--
	codigo php
	$db=Db::conectar();
$select=$db->prepare('SELECT datos, COUNT(*) FROM users WHERE datos = 1');
$select1=$db->prepare('SELECT datos, COUNT(datos) from users WHERE datos!=0');
$select->execute();
$select1->execute();
$registro=$select->fetch();
$registro1=$select1->fetch();
$x=$registro[1];
$y=$registro1[1];
echo $x*100/$y;-->





          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
 


  

<!--inicia todo recurso de BootStrap-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--Inicia todo JAvascript-->
<!-- Vendor JS Files -->
<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="../assets/vendor/php-email-form/validate.js"></script>
<script src="../assets/vendor/aos/aos.js"></script>
<script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="../assets/vendor/jquery-sticky/jquery.sticky.js"></script>
<script src="../js/main.js"></script>
<!--<script src="../querys.js" ></script>-->

<!--Finaliza todo etiquetas del cuerpo-->
</body>
</html>
