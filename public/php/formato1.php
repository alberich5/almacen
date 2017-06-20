<?php



require_once dirname(__FILE__).'/PHPWord-master/src/PhpWord/Autoloader.php';
\PhpOffice\PhpWord\Autoloader::register();
//se especifica que tipo de documnto se va a usar del phpword
use PhpOffice\PhpWord\TemplateProcessor;

$templateWord = new TemplateProcessor('formato1.docx');
//variables captadas desde el formulario de index
$total = $_GET['total'];

//se recorre toda la cadena para imprimir los articulos que se compraron
$art="";
for ($i=0; $i <$total ; $i++) { 
	$art.=$_GET['nom'.$i.'']."-";
}



$area=$_GET['cli0'];
$dia=date('d');
$mes=date('m');
$ano=date('y');

$templateWord->setValue('articulo',$art);
$templateWord->setValue('area',$area);
$templateWord->setValue('dia',$dia);
$templateWord->setValue('mes',$mes);
$templateWord->setValue('ano',$ano);

$tim =time();
// --- Guardamos el documento
$templateWord->saveAs('mante/descarga'.$tim.'.docx');

header("Content-Disposition: attachment; filename=descarga".$tim.".docx; charset=iso-8859-1");

echo file_get_contents('mante/descarga'.$tim.'.docx');


        
?>

