<?php

require_once('header.php');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, 'หอพัก จุลินทิรา');

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN + 5));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// set JPEG quality
$pdf->setJPEGQuality(100);

$pdf->SetFont(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA);

// ---------------------------------------------------------

// add a page
$pdf->AddPage();

$pdf->Image('../upload/9d56e587c748cf6f73e4b72ce4541384', '', '', 60, 40, '', '', 'N', true, 300, 'C', false, false, 1, false, false, false);
$pdf->ln(5);
$pdf->SetFont(PDF_FONT_NAME_DATA, 'U', PDF_FONT_SIZE_DATA);
$pdf->Cell(0, 0, 'ข้อมูลส่วนตัว', 1, 1, '', 0, '', 0);

$pdf->SetFont(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA);
$pdf->Cell(28, 0, 'รหัสประชาชน : ', 0, 0, '', 0, '', 0);
$pdf->Cell(57, 0, '1669900401096', 'B', 0, 'C', 0, '', 0);
$pdf->Cell(25, 0, 'รหัสนักเรียน : ', 0, 0, '', 0, '', 0);
$pdf->Cell(25, 0, '03597', 'B', 0, 'C', 0, '', 0);
$pdf->Cell(12, 0, 'รุ่นที่ : ', 0, 0, '', 0, '', 0);
$pdf->Cell(23, 0, '20', 'B', 1, 'C', 0, '', 0);

$pdf->Cell(26, 0, 'คำนำหน้าชื่อ : ', 0, 0, '', 0, '', 0);
$pdf->Cell(18, 0, 'นาย', 'B', 0, '', 0, '', 0);
$pdf->Cell(9, 0, 'ชื่อ : ', 0, 0, '', 0, '', 0);
$pdf->Cell(50, 0, 'ภูมิไผท', 'B', 0, '', 0, '', 0);
$pdf->Cell(18, 0, 'นามสกุล : ', 0, 0, '', 0, '', 0);
$pdf->Cell(50, 0, 'จันทรศรีวงศ์', 'B', 0, '', 0, '', 0);
$pdf->Cell(15, 0, 'ชื่อเล่น : ', 0, 0, '', 0, '', 0);
$pdf->Cell(40, 0, 'อู๋', 'B', 1, '', 0, '', 0);



// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('export.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
