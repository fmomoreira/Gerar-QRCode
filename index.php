<?php

namespace chillerlan\QRCodeExamples;

use chillerlan\QRCode\{QRCode, QROptions};

require_once __DIR__.'./vendor/autoload.php';

$data = 'https://www.linkedin.com/in/felipemoreirafrontend/';

//quick and simple:


$options = new QROptions([
	'version'    => 5,
	'outputType' => QRCode::OUTPUT_MARKUP_SVG,
	'eccLevel'   => QRCode::ECC_L,
]);

// invoke a fresh QRCode instance
$qrcode = new QRCode($options);

// and dump the output
$qrcode->render($data);

// ...with additional cache file
$qrcode->render($data, './img/file.svg');
