<?php



require_once dirname(__FILE__).'/PHPWord-master/src/PhpWord/Autoloader.php';
\PhpOffice\PhpWord\Autoloader::register();
//se especifica que tipo de documnto se va a usar del phpword
use PhpOffice\PhpWord\TemplateProcessor;

$templateWord = new TemplateProcessor('formato1.docx');
//variables captadas desde el formulario de index
	






// --- Guardamos el documento
$templateWord->saveAs('mante/'.$nuevo.'.docx');

header("Content-Disposition: attachment; filename=".$nuevo.".docx; charset=iso-8859-1");

echo file_get_contents('mante/'.$nuevo.'.docx');


        
?>

