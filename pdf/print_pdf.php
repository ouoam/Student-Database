<?php

require_once('header.php');

include_once("../include/db.php");
$data = getAllData();

// set document information
$pdf->SetTitle('Student Database Export');
$pdf->SetSubject('Database Export');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, 'หอพัก จุลินทิรา');

// ---------------------------------------------------------
foreach($data as $val){
	// add a page
	$pdf->AddPage();

	$pdf->Image('../upload/'.$val['pic'], '', '', '', 40, '', '', 'N', true, 300, 'C', false, false, 1, false, false, false);

	// infomation part


	$pdf->ln(8);
	$pdf->SetFont(PDF_FONT_NAME_DATA, 'B', PDF_FONT_SIZE_DATA);
	$pdf->Cell(0, 0, 'ข้อมูลส่วนตัว', 1, 1, '');
	$pdf->ln(2);

	$pdf->SetFont(PDF_FONT_NAME_DATA, 'B', PDF_FONT_SIZE_DATA);
	$pdf->Cell(26, 0, 'คำนำหน้าชื่อ : ', 0, 0, '');
	$pdf->SetFont(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA);
	$pdf->Cell(18, 0, $val['pName'], 'B', 0, 'C');
	$pdf->SetFont(PDF_FONT_NAME_DATA, 'B', PDF_FONT_SIZE_DATA);
	$pdf->Cell(9, 0, 'ชื่อ : ', 0, 0, '');
	$pdf->SetFont(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA);
	$pdf->Cell(49, 0, $val['fName'], 'B', 0, 'C');
	$pdf->SetFont(PDF_FONT_NAME_DATA, 'B', PDF_FONT_SIZE_DATA);
	$pdf->Cell(19, 0, 'นามสกุล : ', 0, 0, '');
	$pdf->SetFont(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA);
	$pdf->Cell(49, 0, $val['lName'], 'B', 1, 'C');

	$pdf->SetFont(PDF_FONT_NAME_DATA, 'B', PDF_FONT_SIZE_DATA);
	$pdf->Cell(44, 0, 'เลขประจำตัวประชาชน : ', 0, 0, '');
	$pdf->SetFont(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA);
	$pdf->Cell(50, 0, format_ppID($val['ppID']), 'B', 0, 'C');
	$pdf->SetFont(PDF_FONT_NAME_DATA, 'B', PDF_FONT_SIZE_DATA);
	$pdf->Cell(25, 0, 'รหัสนักเรียน : ', 0, 0, '');
	$pdf->SetFont(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA);
	$pdf->Cell(24, 0, sprintf("%05d", $val['stdID']), 'B', 0, 'C');
	$pdf->SetFont(PDF_FONT_NAME_DATA, 'B', PDF_FONT_SIZE_DATA);
	$pdf->Cell(12, 0, 'รุ่นที่ : ', 0, 0, '');
	$pdf->SetFont(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA);
	$pdf->Cell(15, 0, $val['gen'], 'B', 1, 'C');

	$pdf->SetFont(PDF_FONT_NAME_DATA, 'B', PDF_FONT_SIZE_DATA);
	$pdf->Cell(16, 0, 'ชื่อเล่น : ', 0, 0, '');
	$pdf->SetFont(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA);
	$pdf->Cell(20, 0, $val['nName'], 'B', 0, 'C');
	$pdf->SetFont(PDF_FONT_NAME_DATA, 'B', PDF_FONT_SIZE_DATA);
	$pdf->Cell(16, 0, 'วันเกิด : ', 0, 0, '');
	$pdf->SetFont(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA);
	$pdf->Cell(30, 0, format_date($val['bDay']), 'B', 0, 'C');
	$pdf->SetFont(PDF_FONT_NAME_DATA, 'B', PDF_FONT_SIZE_DATA);
	$pdf->Cell(18, 0, 'หมู่เลือด : ', 0, 0, '');
	$pdf->SetFont(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA);
	$pdf->Cell(10, 0, $val['blood'], 'B', 0, 'C');
	$pdf->SetFont(PDF_FONT_NAME_DATA, 'B', PDF_FONT_SIZE_DATA);
	$pdf->Cell(28, 0, 'เบอร์โทรศัพท์ : ', 0, 0, '');
	$pdf->SetFont(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA);
	$pdf->Cell(32, 0, format_phone($val['phone']), 'B', 1, 'C');

	$pdf->SetFont(PDF_FONT_NAME_DATA, 'B', PDF_FONT_SIZE_DATA);
	$pdf->Cell(18, 0, 'เชื้อชาติ : ', 0, 0, '');
	$pdf->SetFont(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA);
	$pdf->Cell(29, 0, $val['origin'], 'B', 0, 'C');
	$pdf->SetFont(PDF_FONT_NAME_DATA, 'B', PDF_FONT_SIZE_DATA);
	$pdf->Cell(18, 0, 'สัญชาติ : ', 0, 0, '');
	$pdf->SetFont(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA);
	$pdf->Cell(29, 0, $val['national'], 'B', 0, 'C');
	$pdf->SetFont(PDF_FONT_NAME_DATA, 'B', PDF_FONT_SIZE_DATA);
	$pdf->Cell(27, 0, 'โรคประจำตัว : ', 0, 0, '');
	$pdf->SetFont(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA);
	$pdf->Cell(49, 0, $val['sick'], 'B', 1, 'C');

	$pdf->ln(8);
	$pdf->SetFont(PDF_FONT_NAME_DATA, 'B', PDF_FONT_SIZE_DATA);
	$pdf->Cell(0, 0, 'ที่อยู่ที่สามารถติดต่อได้', 1, 1, '');
	$pdf->ln(2);

	$pdf->SetFont(PDF_FONT_NAME_DATA, 'B', PDF_FONT_SIZE_DATA);
	$pdf->Cell(21, 0, 'บ้านเลขที่ : ', 0, 0, '');
	$pdf->SetFont(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA);
	$pdf->Cell(22, 0, $val['addNo'], 'B', 0, 'C');
	$pdf->SetFont(PDF_FONT_NAME_DATA, 'B', PDF_FONT_SIZE_DATA);
	$pdf->Cell(9, 0, 'หมู่ : ', 0, 0, '');
	$pdf->SetFont(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA);
	$pdf->Cell(9, 0, $val['addArea'], 'B', 0, 'C');
	$pdf->SetFont(PDF_FONT_NAME_DATA, 'B', PDF_FONT_SIZE_DATA);
	$pdf->Cell(17, 0, 'หมู่บ้าน : ', 0, 0, '');
	$pdf->SetFont(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA);
	$pdf->Cell(40, 0, $val['addVill'], 'B', 0, 'C');
	$pdf->SetFont(PDF_FONT_NAME_DATA, 'B', PDF_FONT_SIZE_DATA);
	$pdf->Cell(12, 0, 'ซอย : ', 0, 0, '');
	$pdf->SetFont(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA);
	$pdf->Cell(40, 0, $val['addRoad'], 'B', 1, 'C');

	$pdf->SetFont(PDF_FONT_NAME_DATA, 'B', PDF_FONT_SIZE_DATA);
	$pdf->Cell(12, 0, 'ถนน : ', 0, 0, '');
	$pdf->SetFont(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA);
	$pdf->Cell(37, 0, $val['addStreet'], 'B', 0, 'C');
	$pdf->SetFont(PDF_FONT_NAME_DATA, 'B', PDF_FONT_SIZE_DATA);
	$pdf->Cell(25, 0, 'ตำบล/แขวง : ', 0, 0, '');
	$pdf->SetFont(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA);
	$pdf->Cell(36, 0, $val['addSubDis'], 'B', 0, 'C');
	$pdf->SetFont(PDF_FONT_NAME_DATA, 'B', PDF_FONT_SIZE_DATA);
	$pdf->Cell(23, 0, 'อำเภอ/เขต : ', 0, 0, '');
	$pdf->SetFont(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA);
	$pdf->Cell(37, 0, $val['addDis'], 'B', 1, 'C');

	$pdf->SetFont(PDF_FONT_NAME_DATA, 'B', PDF_FONT_SIZE_DATA);
	$pdf->Cell(16, 0, 'จังหวัด : ', 0, 0, '');
	$pdf->SetFont(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA);
	$pdf->Cell(40, 0, $val['addPro'], 'B', 0, 'C');
	$pdf->SetFont(PDF_FONT_NAME_DATA, 'B', PDF_FONT_SIZE_DATA);
	$pdf->Cell(26, 0, 'รหัสไปรษณีย์ : ', 0, 0, '');
	$pdf->SetFont(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA);
	$pdf->Cell(25, 0, $val['addZip'], 'B', 1, 'C');

	$pdf->ln(8);
	$pdf->SetFont(PDF_FONT_NAME_DATA, 'B', PDF_FONT_SIZE_DATA);
	$pdf->Cell(0, 0, 'ผู้ปกครอง', 1, 1, '');
	$pdf->ln(2);

	$pdf->SetFont(PDF_FONT_NAME_DATA, 'B', PDF_FONT_SIZE_DATA);
	$pdf->Cell(15, 0, 'บิดา', 0, 0, '');
	$pdf->Cell(9, 0, 'ชื่อ : ', 0, 0, '');
	$pdf->SetFont(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA);
	$pdf->Cell(61, 0, $val['ffName'], 'B', 0, 'C');
	$pdf->SetFont(PDF_FONT_NAME_DATA, 'B', PDF_FONT_SIZE_DATA);
	$pdf->Cell(19, 0, 'นามสกุล : ', 0, 0, '');
	$pdf->SetFont(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA);
	$pdf->Cell(66, 0, $val['flName'], 'B', 1, 'C');

	$pdf->SetFont(PDF_FONT_NAME_DATA, 'B', PDF_FONT_SIZE_DATA);
	$pdf->Cell(15, 0, '', 0, 0, '');
	$pdf->Cell(27, 0, 'เบอร์โทรศัพท์ : ', 0, 0, '');
	$pdf->SetFont(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA);
	$pdf->Cell(43, 0, format_phone($val['fPhone']), 'B', 0, 'C');
	$pdf->SetFont(PDF_FONT_NAME_DATA, 'B', PDF_FONT_SIZE_DATA);
	$pdf->Cell(14, 0, 'อาชีพ : ', 0, 0, '');
	$pdf->SetFont(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA);
	$pdf->Cell(71, 0, $val['fJob'], 'B', 1, 'C');

	$pdf->SetFont(PDF_FONT_NAME_DATA, 'B', PDF_FONT_SIZE_DATA);
	$pdf->Cell(15, 0, 'มารดา', 0, 0, '');
	$pdf->Cell(9, 0, 'ชื่อ : ', 0, 0, '');
	$pdf->SetFont(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA);
	$pdf->Cell(61, 0, $val['mfName'], 'B', 0, 'C');
	$pdf->SetFont(PDF_FONT_NAME_DATA, 'B', PDF_FONT_SIZE_DATA);
	$pdf->Cell(19, 0, 'นามสกุล : ', 0, 0, '');
	$pdf->SetFont(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA);
	$pdf->Cell(66, 0, $val['mlName'], 'B', 1, 'C');

	$pdf->SetFont(PDF_FONT_NAME_DATA, 'B', PDF_FONT_SIZE_DATA);
	$pdf->Cell(15, 0, '', 0, 0, '');
	$pdf->Cell(27, 0, 'เบอร์โทรศัพท์ : ', 0, 0, '');
	$pdf->SetFont(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA);
	$pdf->Cell(43, 0, format_phone($val['mPhone']), 'B', 0, 'C');
	$pdf->SetFont(PDF_FONT_NAME_DATA, 'B', PDF_FONT_SIZE_DATA);
	$pdf->Cell(14, 0, 'อาชีพ : ', 0, 0, '');
	$pdf->SetFont(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA);
	$pdf->Cell(71, 0, $val['mJob'], 'B', 1, 'C');
}

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('export.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
