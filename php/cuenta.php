<?php 	

	/*session_start();
	

	if (!isset($_SESSION['email'])) {
		header('Location: cuenta.php');
	 }
	 
	 echo 'session_id(): ' . session_id(); 
  echo "<br />\n"; 
  echo 'session_name(): ' . session_name(); 
  echo "<br />\n"; 
  print_r(session_get_cookie_params()); 
    */
    session_start();
    if (!isset($_SESSION['email'])) {
      header('Location: ../index.html');
    }
    else
    {

      $almacen=print_r($_SESSION,true);

      //echo $almacen;
      $pattern = '/[a-z\d._%+-]+@[a-z\d.-]+\.[a-z]{2,4}\b/i';
  $subject = $almacen;
  preg_match ( $pattern, $subject, $matches );
  $dato=$matches[0];

    }
	
/*
    //Inicializar la sesión
    session_start();
    if (isset($_SESSION['email'])) {
        //asignar a variable
	
	
//todo codigo


        //asegurar que no tenga "", <, > o &
	} else {
        //No existe username en la sesión
        header('Location: http://url-de-tu-web.com/login.php');
    }  */
	 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tu cuenta</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://kit.fontawesome.com/8ef5c15328.js" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" ></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" ></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	
	

	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.littlesnippets.net/css/codepen-result.css">
	
    <link rel="stylesheet" type="text/css" href="../media/assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="../media/assets/css/demo.css">
	<link rel="stylesheet" type="text/css" href="../media/assets/css/frm.css">
</head>
<body>

	<div class="w3-container w3-black w3-center">
		<h1>BIENVENIDO </h1>
		
	</div>

	<form class="w3-container" action="controller_login.php" method="post">
		<input type="hidden" name="salir" value="salir">
		<button class="w3-btn w3-green">Salir</button>
	</form>

<section class="pricing py-5">
<h1 class="text-center">Se parte de una gran comunidad</h1>
<h1></h2>
  <div class="container">
    <div class="row">
      <!-- Free Tier -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Gratis</h5>
            <h6 class="card-price text-center">$0<span class="period">/month</span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Acceso las 24 horas al dia</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Acceso a 2 reportes al año</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Herramientas Básicas</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Acceso a la app</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Sin soporte de chat con especialistas</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Limite de reportes</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Sección VIP </li>
              
            </ul>
            <a  id="a_dato1" href="#creditCardForm" class="btn btn-block btn-primary text-uppercase">Suscribir</a>
          </div>
        </div>
      </div>
      <!-- Plus Tier -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Mediano</h5>
            <h6 class="card-price text-center">$9<span class="period">/month</span></h6>
            <hr>
            <ul class="fa-ul">
			<li><span class="fa-li"><i class="fas fa-check"></i></span>Acceso las 24 horas al dia</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Acceso a 2 reportes al año</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Herramientas Básicas</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Acceso a la app</li>
              <li><span class="fa-li"><i class="fas  fa-check"></i></span>Soporte de chat con especialistas</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Limite de reportes</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Sección VIP </li>
            </ul>
            <a  id="a_dato2" href="#creditCardForm" class="btn btn-block btn-primary text-uppercase">Suscribir</a>
          </div>
        </div>
      </div>
      <!-- Pro Tier -->
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Profesional</h5>
            <h6 class="card-price text-center">$49<span class="period">/month</span></h6>
            <hr>
            <ul class="fa-ul">
			<li><span class="fa-li"><i class="fas fa-check"></i></span>Acceso las 24 horas al dia</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Herramientas Básicas</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Acceso a la app</li>
              <li><span class="fa-li"><i class="fas  fa-check"></i></span>Soporte de chat con especialistas</li>
              <li><span class="fa-li"><i class="fas  fa-check"></i></span>Sin Limite de reportes</li>
              <li><span class="fa-li"><i class="fas  fa-check"></i></span>Sección VIP </li>
			  <li><span class="fa-li"><i class="fas  fa-check"></i></span>Mejores funcionalidades </li>
            </ul>
            <a id="a_dato3" href="#creditCardForm" class="btn btn-block btn-primary text-uppercase">Suscribir</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>









	<div class="creditCardForm" id="creditCardForm">
    <div class="heading">
        <h1>¡Sube de nivel!</h1>
    </div>
    <div class="payment">
        <form  action="comprar.php" method="POST">
		<input type="hidden" id="id_user" class="id_user" name="id_user" value="<?php echo $dato;
?>">
            <div class="form-group owner">
                <label for="owner">Nombre</label>
                <input type="text" class="form-control" id="owner" name="owner">
            </div>
            <div class="form-group CVV">
                <label for="cvv">CVV</label>
                <input type="text" class="form-control" id="cvv" name="cvv">
            </div>
            <div class="form-group" id="card-number-field">
                <label for="cardNumber">Card Number</label>
                <input type="text" class="form-control" id="cardNumber" name="cardNumber">
            </div>
            <div class="form-group" id="expiration-date" >
                <label>Expiration Date</label>
                <select name="expiration-m">
                    <option value="01">January</option>
                    <option value="02">February </option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                <select name="expiration-y"> 
                    <option value="16"> 2016</option>
                    <option value="17"> 2017</option>
                    <option value="18"> 2018</option>
                    <option value="19"> 2019</option>
                    <option value="20"> 2020</option>
                    <option value="21"> 2021</option>
                </select>
            </div>
            <div class="form-group" id="credit_cards">
                <img src="../media/assets/images/visa.jpg" id="visa">
                <img src="../media/assets/images/mastercard.jpg" id="mastercard">
                <img src="../media/assets/images/amex.jpg" id="amex">
            </div>
			<div class="form-group" id="desc" >
                <label>Elige tú plan</label>
                <select name="plan" id="plan" >
                    <option value="1">Gratis</option>
                    <option value="2">Medio </option>
                    <option value="3">Profesional</option>
                </select>
            </div>
			<script>
			$(document).ready(function(){
	$("select[name=plan]").change(function(){
		   // alert($('select[name=plan]').val());
		   if($(this).val()==1)
		   {
			$('input[name=price]').val(0);

		   }

		   if($(this).val()==2)
		   {
			$('input[name=price]').val(9);

		   }
		   if($(this).val()==3)
		   {
			$('input[name=price]').val(49);

		   }
        });
		
});
			</script>
 				
			
			
			
			<input type="hidden" id="price" class="price" name="price"  value="0">
            <div class="form-group" id="pay-now">
                <button name="insertar" type="submit" >Confirm</button>
            </div>
        </form>
    </div>
</div>







<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

    <script src="../media/assets/js/jquery.payform.min.js" charset="utf-8"></script>
    <script src="../media/assets/js/script.js"></script>

<script type="text/javascript">
$(document).ready(function(){
$("#a_dato1").click(function(){
	document.getElementById("plan").value=1;
	document.getElementById("price").value=0;
});
});
</script>

<script type="text/javascript">
$(document).ready(function(){
$("#a_dato2").click(function(){
	document.getElementById("plan").value=2;
	document.getElementById("price").value=9;
});
});
</script>

<script type="text/javascript">
$(document).ready(function(){
$("#a_dato3").click(function(){
	document.getElementById("plan").value=3;
	document.getElementById("price").value=49;
});
});
</script>
</body>
</html>