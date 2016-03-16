<?php 
$mimeType = 'application/vnd.android.package-archive';
$fileName = 'Dice.apk';
$path = $_SERVER['DOCUMENT_ROOT'] . '/Dice/' . $fileName;

if (file_exists($path)) {
	// Send the file
	header('Content-Description: File Transfer');
	header('Content-type: ' . $mimeType);
	header('Content-Disposition: attachment; filename="' . $fileName . '"');
	header('Content-Length: ' . filesize($path));
	readfile($path);
	exit;
} 
else {
	// 404
	echo "Sorry the file is either being updated, or it has been deleted.";
}
			
?>
