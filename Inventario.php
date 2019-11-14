<!DOCTYPE html>
<html>
<head>
    <title>Inventario</title>
</head>
<body>
    <?php
	//Guarda el valor de la ID tienda introducida en el index y lo pasa a una variable en esta pagina
	$_SESSION["tienda"] = strtolower($_POST["tienda"]);
	$tienda=$_SESSION["tienda"];
    //Guarda el valor de la ID codigo y lo pasa a una variable
    $_SESSION["codigo"] = ($_POST["codigo"]);
    $codigo=$_SESSION["codigo"];
    //Guarda el valor de la ID desc y lo pasa a una variable
    $_SESSION["desc"] = strtolower($_POST["desc"]);
	$desc=$_SESSION["desc"];
    //Guarda el valor de la ID cantidad y lo pasa a una variable	
	$_SESSION["cantidad"] = ($_POST["cantidad"]);
	$cantidad=$_SESSION["cantidad"];
    //Guarda el valor de la ID tienda y lo pasa a una variable	
    $_SESSION["tienda"]=$_POST["tienda"];
    //Saca por pantalla el nombre de la tienda junto al texto "Indentario de:" para que se sepa el inventario de que tienda es
    echo "Inventario de: ".$_SESSION["tienda"].$tienda;
    //Creamos un array, donde se guardaran los valores
    $array=array();
    $array["$codigo"]=$desc;
    
    $_SESSION["completo"]=array();
    ?>
    
    <form action="#" method="post">
        <p>Codigo <input type="number" name="codigo" value="<?php echo $_SESSION["codigo"]; ?>"></p>
        <br>
        <p>Descripcion <input type="text" name="desc" value="<?php echo $_SESSION["desc"]; ?>" placeholder="Descripcion"></p>
        <br>
		<p>Cantidad <input type="number" name="cantidad" min="0" value="<?php echo $_SESSION["cantidad"]; ?>" placeholder="Stock"></p>
        <br>
        <input type="submit" name="submit">
        <br><br>
        <?php
        if (isset($_POST["submit"])){
            //Si codigo y descripcion estan vacios se pide que se llenen los campos
            if($_SESSION["codigo"]=="" && $_SESSION["desc"]==""){
                echo "<b>Por favor, rellene los campos de codigo y descripcion</b>";
            };
            //Si la cantidad es inferior a 0 se pide que se introduzca una cifra valida
			if($_SESSION["cantidad"<0]){
				echo "<b>Introduzca una cantidad valida</b>";
			}
           //Saca las variables de codigo, descripcion y cantidad por pantalla
            echo $_SESSION["codigo"]. "<br>";
			echo $_SESSION["desc"]."<br>";
			echo $_SESSION["cantidad"]."<br>";
            $_SESSION["completo"][$codigo]=$desc;
            
    }
        ?>
</form>
</body>
</html>