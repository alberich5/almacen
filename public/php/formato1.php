<?php



require_once dirname(__FILE__).'/PHPWord-master/src/PhpWord/Autoloader.php';
\PhpOffice\PhpWord\Autoloader::register();
//se especifica que tipo de documnto se va a usar del phpword
use PhpOffice\PhpWord\TemplateProcessor;

$templateWord = new TemplateProcessor('formato1.docx');
//variables captadas desde el formulario de index
$total = $_GET['total'];

//se recorre toda la cadena para imprimir los articulos que se compraron
$var="";
for ($i=0; $i <$total ; $i++) { 
	$var.=$_GET['nom'.$i.'']."-";
}

echo $var;


        
?>

