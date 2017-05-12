<?php



require_once dirname(__FILE__).'/PHPWord-master/src/PhpWord/Autoloader.php';
\PhpOffice\PhpWord\Autoloader::register();
//se especifica que tipo de documnto se va a usar del phpword
use PhpOffice\PhpWord\TemplateProcessor;

$templateWord = new TemplateProcessor('formato1.docx');
//variables captadas desde el formulario de index
	
$nombre = $_GET['nom'];
$cantidad = $_GET['cant'];
$unidad = $_GET['uni'];
$dia=date('d');
$mes=date('m');
$ano=date('y');




// --- Asignamos valores a la plantilla
$templateWord->setValue('articulo',$nombre);
$templateWord->setValue('cant',$cantidad);
$templateWord->setValue('unidad',$unidad);
$templateWord->setValue('dia',$dia);
$templateWord->setValue('mes',$mes);
$templateWord->setValue('ano',$ano);



// --- Guardamos el documento
$templateWord->saveAs('mante/hola.docx');

header("Content-Disposition: attachment; filename=hola.docx; charset=iso-8859-1");

echo file_get_contents('mante/hola.docx');


        
?>

