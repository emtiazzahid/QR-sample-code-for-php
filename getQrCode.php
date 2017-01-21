<?php 
	require_once('src/QrCode.php');
	use Endroid\QrCode\QrCode;

	$qr = new QrCode();
	$qr
		->setText('This is my first QR Code')
	    ->setSize(300)
	    ->setPadding(10)
	    ->setErrorCorrection('high')
	    ->setForegroundColor(['r' => 0, 'g' => 0, 'b' => 0, 'a' => 0])
	    ->setBackgroundColor(['r' => 255, 'g' => 255, 'b' => 255, 'a' => 0])
	    ->setLabel('Scan the code')
	    ->setLabelFontSize(16)
	    ->setImageType(QrCode::IMAGE_TYPE_PNG)
	    ->render();
?>