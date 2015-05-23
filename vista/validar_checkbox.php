<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
$id=$_POST['numdocper'];

require_once('conexion.php');

$save=mysql_query("INSERT INTO tbdatospersona (numdocper) VALUES ('$id')");

if($_POST['checkbox'] != "")
{
		 if(is_array($_POST['checkbox']))
         {
       		 // realizamos el ciclo
       		 while(list($key,$value) = each($_POST['checkbox'])) 
        	{
				$sql=mysql_query("INSERT INTO tbservibas (pertenece_a, tbservibas) VALUES ('$id','$value')");
       	 	}
   		 }
}
