<?php
include 'PDFMerger.php';

$pdf = new PDFMerger;

session_start();

$fileNames = array();
$pageNum = array();
$fileNames = $_SESSION['NamesOfFiles'];
$pageNum = $_SESSION['PageNumOfFiles'];

$len = count($fileNames);

for($x = 0; $x < $len; $x++) {
    echo $fileNames[$x];
    echo "<br>";
	$pdf->addPDF($fileNames[$x],$pageNum[$x]);
}
$pdf->merge('file','uploads/TEST2.pdf');
// $pdf->merge('download','TEST2.pdf');

/* $pdf->addPDF('uploads/one.pdf', '1, 3, 4')
	->addPDF('uploads/two.pdf', '1-2')
	->addPDF('uploads/three.pdf', 'all')
	->merge('file', 'uploads/TEST2.pdf');	*/
	
echo "All PDFs merged!!!";
	
	//REPLACE 'file' WITH 'browser', 'download', 'string', or 'file' for output options
	//You do not need to give a file path for browser, string, or download - just the name.
?>