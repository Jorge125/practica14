<!DOCTYPE html>
<html>
<script>
function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9,.]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
</script>
<title></title>
<head>
<h1>OPERACIONES MATEMATICAS</h1>
<hr color="blue" size=3>
</head>
<body>
<LINK REL=StyleSheet HREF="style.css" TYPE="text/css" MEDIA=screen>
<h1>Practica 14</h1>
<br>
<center><table border="1" style="width:80%" border: red>
<tr>
<th scope="col"><p>Datos</p></th>
<th scope="col"><p> Resultados</p></th>
</tr>
<tr>
<td>
<center><form action="" method="POST" name="CALCULADORA">
  <p>Numero 1:</p>
  <input type="text" name="numero1" value="" placeholder="introduce un digito" onkeypress="return valida(event)" >
  <br> 
  <p>Numero 2:</p>   
  <input type="text" name="numero2" value="" placeholder="introduce un digito" onkeypress="return valida(event)">
  <br>
   <input class="button" type="submit" name="submit" value="calcular">
   <br>
   
<br>
  </form>
</center> 
</td>
<td>
<?php
$n1=1;
$n2=1;
$n1=isset($_POST['numero1']) ? $_POST['numero1'] : null ;
$n2=isset($_POST['numero2']) ? $_POST['numero2'] : null ;;
$suma=$n1+$n2;
$resta=$n1-$n2;

$multiplicacion=$n1*$n2;


echo "<center><p> suma = ".$suma. " </p>";
echo "<p> resta = ".$resta. " </p>";
echo "<p> division = ".$n1/$n2. " </p>";
echo "<p> multiplicacion = ".$multiplicacion. " </p></center>";
?>
</td>
</tr>
</table>
</body>
<hr color="blue" size=2>
<footer>

<p class="foo" >licenciatura en sistemas computacionales</p>
<p class="foo">Programacion de Aplicaciones Web</p>
<p class="foo">Jorge Arturo Morales Herrera</p>
<p class="foo">5.B</p>

</footer>

</html>