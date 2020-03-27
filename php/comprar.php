<?php
require_once('conexion.php');
    
if(isset($_POST['insertar'])){
///////////// Informacion enviada por el formulario /////////////
$id_user=$_POST['id_user'];
$name=$_POST['owner'];
$cvv=$_POST['cvv'];
$card=$_POST['cardNumber'];
$exp_m=$_POST['expiration-m'];
$exp_y=$_POST['expiration-y'];
$plan=$_POST['plan'];
$price=$_POST['price'];
$date = date('Y-m-d');
///////// Fin informacion enviada por el formulario /// 
$db=DB::conectar();
////////////// Insertar a la tabla la informacion generada /////////
$sql="insert into shop(id_user,name,cvv,card,exp_m,exp_y,plan,price,date) values(:id_user,:name,:cvv,:card,:exp_m,:exp_y,:plan,:price,:date)";
    
$sql = $db->prepare($sql);
    
$sql->bindParam(':id_user',$id_user,PDO::PARAM_STR);
$sql->bindParam(':name',$name,PDO::PARAM_STR);
$sql->bindParam(':cvv',$cvv,PDO::PARAM_STR);
$sql->bindParam(':card',$card,PDO::PARAM_STR);
$sql->bindParam(':exp_m',$exp_m,PDO::PARAM_STR);
$sql->bindParam(':exp_y',$exp_y,PDO::PARAM_STR);
$sql->bindParam(':plan',$plan,PDO::PARAM_STR);
$sql->bindParam(':price',$price,PDO::PARAM_STR);
$sql->bindParam(':date',$date,PDO::PARAM_STR);
    
$sql->execute();

$lastInsertId = $db->lastInsertId();
if($lastInsertId>0){

//echo "<div class='content alert alert-primary' > Gracias .. Tu Nombre es : $nombres  </div>";
}
else{
   echo "<div class='content alert alert-danger'> No se pueden agregar datos, comuníquese con el administrador  </div>";

print_r($sql->errorInfo()); 
}
}// Cierra envio de guardado
?>