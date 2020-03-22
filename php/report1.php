<html>
<head>
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
<style>
	.leyendaH {text-align:center;}
	.leyenda  ul {list-style-type:none;padding:0 10px;}
	.leyendaH ul {display:inline-block;}
	.leyenda  ul>li {font-size:14px;}
	.leyendaH ul>li {float:left;margin-right:10px;}
	.leyenda  ul>li>span {width:12px;height:12px;display:inline-block;margin-right:3px;}
	</style>
<?php 

require_once('usuario.php');
	require_once('crud_usuario.php');
  require_once('conexion.php');
  
	session_start();
	if (!isset($_SESSION['email'])) {
		header('Location: index.php');
	}
?>

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
          <h1 class="mb-0 site-logo"><a href="index.html" class="mb-0">Report</a></h1>
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
                  <li><a href="#" class="nav-link">Reporte de enfermedades</a></li>
                  <li><a href="#" class="nav-link">Reporte de usuarios</a></li>
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
            
            <!--<div style="float:left;margin-right:50px;">
	<canvas id="canvas1"></canvas>
	<div id="leyenda1" class="leyenda"></div>
</div> -->
 

	<canvas id="canvas2"></canvas>
	<div id="leyenda2" class="leyenda leyendaH"></div>

 
<?php
echo "<table style='border: solid 1px black;'>";
 echo "<tr><th>Enfermedades</th><th>Conteo</th></tr>";

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
    $stmt = $conn->prepare("SELECT datos, COUNT(*) FROM users WHERE datos = 1 GROUP BY datos");
    $stmt->execute();
    $stmt1 = $conn->prepare("SELECT datos, COUNT(*) FROM users WHERE datos = 2 GROUP BY datos");
    $stmt1->execute();
	$stmt2 = $conn->prepare("SELECT datos, COUNT(*) FROM users WHERE datos = 3 GROUP BY datos");
	$stmt2->execute();
	$stmt3 = $conn->prepare("SELECT datos, COUNT(*) FROM users WHERE datos = 4 GROUP BY datos");
	$stmt3->execute();
	$stmt4 = $conn->prepare("SELECT datos, COUNT(*) FROM users WHERE datos = 5 GROUP BY datos");
	$stmt4->execute();
	$stmt5= $conn->prepare("SELECT datos, COUNT(*) FROM users WHERE datos = 6 GROUP BY datos");
	$stmt5->execute();
	$stmt6= $conn->prepare("SELECT datos, COUNT(*) FROM users WHERE datos = 7 GROUP BY datos");
    $stmt6->execute();
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	$result1 = $stmt1->setFetchMode(PDO::FETCH_ASSOC);
	$result2 = $stmt2->setFetchMode(PDO::FETCH_ASSOC);
	$result3 = $stmt3->setFetchMode(PDO::FETCH_ASSOC);
	$result4 = $stmt4->setFetchMode(PDO::FETCH_ASSOC);
	$result5 = $stmt5->setFetchMode(PDO::FETCH_ASSOC);
	$result6 = $stmt6->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
      
    }
    foreach(new TableRows(new RecursiveArrayIterator($stmt1->fetchAll())) as $k1=>$v1) {
      echo $v1;
  }
  foreach(new TableRows(new RecursiveArrayIterator($stmt2->fetchAll())) as $k2=>$v2) {
	echo $v2;
}
foreach(new TableRows(new RecursiveArrayIterator($stmt3->fetchAll())) as $k3=>$v3) {
	echo $v3;
}
foreach(new TableRows(new RecursiveArrayIterator($stmt4->fetchAll())) as $k4=>$v4) {
	echo $v4;
}
foreach(new TableRows(new RecursiveArrayIterator($stmt5->fetchAll())) as $k5=>$v5) {
	echo $v5;
}
foreach(new TableRows(new RecursiveArrayIterator($stmt6->fetchAll())) as $k6=>$v6) {
	echo $v6;
}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>


<script>
var e1,e2,e3,e4,e5,e6,e7;

function enf1()
{
e1=<?php 
$db=Db::conectar();
$select=$db->prepare('SELECT datos, COUNT(*) FROM users WHERE datos = 1');
$select1=$db->prepare('SELECT datos, COUNT(datos) from users WHERE datos!=0');
$select->execute();
$select1->execute();
$registro=$select->fetch();
$registro1=$select1->fetch();
$x=$registro[1];
$y=$registro1[1];
echo ($x*100)/$y;
?>;
return e1;
}

function enf2()
{
e2=<?php 
$db2=Db::conectar();
$select2=$db2->prepare('SELECT datos, COUNT(*) FROM users WHERE datos = 2');
$select3=$db2->prepare('SELECT datos, COUNT(datos) from users WHERE datos!=0');
$select2->execute();
$select3->execute();
$registro2=$select2->fetch();
$registro3=$select3->fetch();
$x1=$registro2[1];
$y1=$registro3[1];
echo ($x1*100)/$y1;
?>;
return e2;

}

const  enf3 = () =>
{
	e3 = <?php 
$db=Db::conectar();
$select=$db->prepare('SELECT datos, COUNT(*) FROM users WHERE datos = 3');
$select1=$db->prepare('SELECT datos, COUNT(datos) from users WHERE datos!=0');
$select->execute();
$select1->execute();
$registro=$select->fetch();
$registro1=$select1->fetch();
$x=$registro[1];
$y=$registro1[1];
echo ($x*100)/$y;
?>;
		return e3 ;
}

const  enf4 = () =>
{

e4 =<?php 
$db=Db::conectar();
$select=$db->prepare('SELECT datos, COUNT(*) FROM users WHERE datos = 4');
$select1=$db->prepare('SELECT datos, COUNT(datos) from users WHERE datos!=0');
$select->execute();
$select1->execute();
$registro=$select->fetch();
$registro1=$select1->fetch();
$x=$registro[1];
$y=$registro1[1];
echo ($x*100)/$y;
?>;

return e4;
}

const  enf5 = () =>
{
e5=<?php 
$db=Db::conectar();
$select=$db->prepare('SELECT datos, COUNT(*) FROM users WHERE datos = 5');
$select1=$db->prepare('SELECT datos, COUNT(datos) from users WHERE datos!=0');
$select->execute();
$select1->execute();
$registro=$select->fetch();
$registro1=$select1->fetch();
$x=$registro[1];
$y=$registro1[1];
echo ($x*100)/$y;
?>;

return e5;

}


const  enf6 = () =>
{

e6=<?php 
$db=Db::conectar();
$select=$db->prepare('SELECT datos, COUNT(*) FROM users WHERE datos = 6');
$select1=$db->prepare('SELECT datos, COUNT(datos) from users WHERE datos!=0');
$select->execute();
$select1->execute();
$registro=$select->fetch();
$registro1=$select1->fetch();
$x=$registro[1];
$y=$registro1[1];
echo ($x*100)/$y;
?>;

return e6;


}

const  enf7 = () =>
{

e7=<?php 
$db=Db::conectar();
$select=$db->prepare('SELECT datos, COUNT(*) FROM users WHERE datos = 7');
$select1=$db->prepare('SELECT datos, COUNT(datos) from users WHERE datos!=0');
$select->execute();
$select1->execute();
$registro=$select->fetch();
$registro1=$select1->fetch();
$x=$registro[1];
$y=$registro1[1];
echo ($x*100)/$y;
?>;

return e7;
}


function main(){

var miPastel=function(canvasId,width,height,valores) {
	this.canvas=document.getElementById(canvasId);;
	this.canvas.width=width;
	this.canvas.height=height;
	this.radio=Math.min(this.canvas.width/2,this.canvas.height/2)
	this.context=this.canvas.getContext("2d");
	this.valores=valores;
	this.tamanoDonut=0;
 
	/**
	 * Dibujar frafica
	 */
	this.dibujar=function() {
		this.total=this.getTotal();
		var valor=0;
		var inicioAngulo=0;
		var angulo=0;
 
		// oopciones
		for(var i in this.valores)
		{
			valor=valores[i]["valor"];
			color=valores[i]["color"];
			angulo=2*Math.PI*valor/this.total;
 
			this.context.fillStyle=color;
			this.context.beginPath();
			this.context.moveTo(this.canvas.width/2, this.canvas.height/2);
			this.context.arc(this.canvas.width/2, this.canvas.height/2, this.radio, inicioAngulo, (inicioAngulo+angulo));
			this.context.closePath();
			this.context.fill();
			inicioAngulo+=angulo;
		}
	}
 
	/**
	 * Dibuja un gráfico de pastel con una redonda en medio en modo de donut
	 * Tiene que recibir:
	 *	el tamaño de la redonda central (0 no hay redonda - 1 es todo)
	 *	el color de la redonda
	 */
	this.dibujarDonut=function(tamano,color) {
		this.tamanoDonut=tamano;
		this.dibujar();
 
		// creamos un circulo del color recibido en medio
		this.context.fillStyle=color;
		this.context.beginPath();
		this.context.moveTo(this.canvas.width/2, this.canvas.height/2);
		this.context.arc(this.canvas.width/2, this.canvas.height/2, this.radio*tamano, 0, 2*Math.PI);
		this.context.closePath();
		this.context.fill();
	}
 
	/**
	 * Pone el tanto por ciento de cada uno de los valores
	 * Tiene que recibir:
	 *	el color del texto
	 */
	this.ponerPorCiento=function(color){
		var valor=0.0;
		var etiquetaX=0;
		var etiquetaY=0;
		var inicioAngulo=0;
		var angulo=0;
		var texto="";
		var incrementar=0;
 
		// si hemos dibujado un donut, tenemos que incrementar el valor del radio
		// para que quede centrado
		if(this.tamanoDonut)
			incrementar=(this.radio*this.tamanoDonut)/2;
 
		this.context.font="bold 12pt Calibri";
		this.context.fillStyle=color;
		for(var i in this.valores)
		{
			valor=valores[i]["valor"];
			angulo=2*Math.PI*valor/this.total;
 
			// calculamos la posición del texto
			etiquetaX=this.canvas.width/2+(incrementar+this.radio/2)*Math.cos(inicioAngulo+angulo/2);
			etiquetaY=this.canvas.height/2+(incrementar+this.radio/2)*Math.sin(inicioAngulo+angulo/2);
 
			texto=Math.round(100*valor/this.total);
 
			// movemos la posición unos pixels si estamos en la parte izquierda
			// del pastel para que quede mas centrado
			if(etiquetaX<this.canvas.width/2)
				etiquetaX-=10;
 
			// ponemos los valores
			this.context.beginPath();
			this.context.fillText(texto+"%", etiquetaX, etiquetaY);
			this.context.stroke();
 
			inicioAngulo+=angulo;
		}
	}
 
	/**
	 * Function que devuelve la suma del total de los valores recibidos en el array
	 */
	this.getTotal=function() {
		var total=0;
		for(var i in this.valores)
		{
			total+=valores[i]["valor"];
		}
		return total;
	}
 
	/**
	 * Función que devuelve una lista (<ul><li>) con la leyenda
	 * Tiene que recibir el id donde poner la leyenda
	 */
	this.ponerLeyenda=function(leyendaId) {
		var codigoHTML="<ul class='leyenda'>";
 
		for(var i in this.valores)
		{
			codigoHTML+="<li><span style='background-color:"+valores[i]["color"]+"'></span>"+i+"</li>";
		}
		codigoHTML+="</ul>";
		document.getElementById(leyendaId).innerHTML=codigoHTML;
	}
}
 
// definimos los valores de nuestra gráfica
var valores={
	"Ninguna":{valor:enf1(),color:"blue"},

	"Respiratoria":{valor:enf2(),color:"Yellow"},
	"Corazon":{valor:enf3(),color:"red"},
	"Sindrome":{valor:enf4(),color:"green"},
	"VIH":{valor:enf5(),color:"Orange"},
	"Hepatitis":{valor:enf6(),color:"Cyan"},
  "Diabetes":{valor:enf7(),color:"Aquamarine"}
  
}
 
// generamos el primer pastel
/*
var pastel=new miPastel("canvas1",300,300,valores);
pastel.dibujar();
pastel.ponerPorCiento("white");
pastel.ponerLeyenda("leyenda1");

*/
 
// generamos el segundo pastel
var pastel=new miPastel("canvas2",300,300,valores);
pastel.dibujarDonut(0.5,"white");
pastel.ponerPorCiento("white");
pastel.ponerLeyenda("leyenda2");

}



main();


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
<script src="../bundle.js"></script>

<!--Finaliza todo etiquetas del cuerpo-->
</body>
</html>
