﻿<?php defined('SYSPATH') or die('No direct access allowed.');

return array
(
	'server_url'	=>	'http://preview.jitarsabank.com/',
	'server_email'	=>	'JitArsa Bank <JitArsaBank@gmail.com>',
	
	'password_salt'	=>	'abcdefg',

 	'user_roles'		=>	array(
								'volunteer'		=>	'0',
								'organization'	=>	'1',
								'admin'			=>	'2'
							),
	
 	'event_status'		=>	array(
								'1'	=>	__('open'),
								'0'	=>	'close',
								'2'	=>	'draft'
							),
	'provices'			=> array('จังหวัด',
								'กรุงเทพมหานคร', 'กระบี่', 'กาญจนบุรี', 'กาฬสินธุ์', 'กำแพงเพชร', 'ขอนแก่น', 'จันทบุรี', 'ฉะเชิงเทรา', 'ชลบุรี', 'ชัยนาท', 'ชัยภูมิ', 'ชุมพร', 
								'เชียงราย', 'เชียงใหม่', 'ตรัง', 'ตราด', 'ตาก', 'นครนายก', 'นครปฐม', 'นครพนม', 'นครราชสีมา', 'นครศรีธรรมราช', 'นครสวรรค์', 'นนทบุรี', 
								'นราธิวาส', 'น่าน', 'บึงกาฬ', 'บุรีรัมย์', 'ปทุมธานี', 'ประจวบคีรีขันธ์', 'ปราจีนบุรี', 'ปัตตานี', 'พระนครศรีอยุธยา', 'พังงา', 'พัทลุง', 'พิจิตร', 'พิษณุโลก', 
								'เพชรบุรี', 'เพชรบูรณ์', 'แพร่', 'พะเยา', 'ภูเก็ต', 'มหาสารคาม', 'มุกดาหาร', 'แม่ฮ่องสอน', 'ยะลา', 'ยโสธร', 'ร้อยเอ็ด', 'ระนอง', 'ระยอง', 'ราชบุรี', 'ลพบุรี', 
								'ลำปาง', 'ลำพูน', 'เลย', 'ศรีสะเกษ', 'สกลนคร', 'สงขลา', 'สตูล', 'สมุทรปราการ', 'สมุทรสงคราม', 'สมุทรสาคร', 'สระแก้ว', 'สระบุรี', 'สิงห์บุรี', 'สุโขทัย', 
								'สุพรรณบุรี', 'สุราษฎร์ธานี', 'สุรินทร์', 'หนองคาย', 'หนองบัวลำภู', 'อ่างทอง', 'อุดรธานี', 'อุทัยธานี', 'อุตรดิตถ์', 'อุบลราชธานี',  'อำนาจเจริญ'
							),
	'jobs'				=> array('ประเภทงานอาสา',
								'งานอาสาทั่วไป', 'กู้ภัยและฟื้นฟูจากภัยพิบัติ', 'หัตถกรรมและงานฝีมือ เย็บ ปัก ถัก ร้อย', 'ศาสนาและปฏิบัติธรรม', 'ศิลปวัฒนธรรม ท่องเที่ยว ดนตรี กีฬา นันทนาการ', 'อาหารและโภชนาการ', 
								'สิ่งแวดล้อมและการเกษตร', 'ก่อสร้างและงานช่างเทคนิค', 'ประสานงานและบริหารจัดการ', 'เด็กและเยาวชน', 'สตรี', 'ผู้สูงอายุและครอบครัว', 'ผู้พิการ', 'ไอที และคอมพิวเตอร์กราฟฟิค', 
								'สื่อ สื่อสาร ประชาสัมพันธ์ และการตลาด', 'สุนัข แมว และสัตว์เลี้ยง', 'กฎหมาย', 'สุขภาพและสาธารณสุข', 'การศึกษาและฝึกอบรม'
							),
	'skills'			=> array(
								 'การขับขี่พาหนะ (จักรยานยนต์/รถยนต์)', 'ว่ายน้ำ'
							),	
	'languates'			=> array(
								'อังกฤษ', 'จีน', 'เยอรมัน', 'ญี่ปุ่น' 
							),	
	'technicals'			=> array(
								'ช่างอิเล็กทรอนิคส์', 'ช่างโลหะ', 'ช่างไฟฟ้า', 'ช่างประปา', 'ช่างไม้ ช่างสี', 'ช่างปูน'
							),	
	'days'				=> array(
								 'อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'
							),
	'thai_day_arr'		=> array("อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์"), 
	'thai_month_arr'    =>array(    
								"1"=>"มกราคม",  
								"2"=>"กุมภาพันธ์",  
								"3"=>"มีนาคม",  
								"4"=>"เมษายน",  
								"5"=>"พฤษภาคม",  
								"6"=>"มิถุนายน",   
								"7"=>"กรกฎาคม",  
								"8"=>"สิงหาคม",  
								"9"=>"กันยายน",  
								"10"=>"ตุลาคม",  
								"11"=>"พฤศจิกายน",  
								"12"=>"ธันวาคม"                    
								),

	'all_skills' 	=> array ( 
							  '1000' => array ( 
												'1100' => array( '11011', '11012', '1102'),
												'12001' => array('12011', '12021', '12031', '12041','12051T'),
												'12002' => array('12012', '12022', '12032', '12042','12052T'),
												'12003' => array('12013', '12023', '12033', '12043','12053T'),
												'1300' => array('1301', '1302', '1303', '1304'),
												'1400' => array('1401T', '1402T', '1403', '1404'),
												'xx'   => array('0001T'),
												 ),
							   '2000' => array(
											    '2100' => array( '2101', '2102', '2103', '2104', '2105', '2106', '2107'),
												'2200' => array('2201T', '2202T', '2203T', '2204T'),
												'2300' => array('2301T', '2302T', '2303', '2304', '2305', '2306', '2307'),
												'2400' => array('2401', '2402', '2403', '2404', '2405', '2406T'),	
												'2500' => array('2501', '2502', '2503', '2504', '2505'),
												'2600' => array('2601', '2602', '2603', '2604', '2605', '2606', '2607', '2608', '2609'),
												'2700' => array('2701T', '2702T', '2703T'),
												'2800' => array('2801T', '2802T', '2803', '2804', '2805'),
												'xx'   => array('0002T'),
											   ),
							   
							  ),
	'worddict'		=> array( 	
							'xx'   => '',
							'0001T'   => 'อื่นๆ โปรดระบุ',
							'0002T'   => 'อื่นๆ โปรดระบุ',
							'1000' => '1. ความสามารถพิเศษ (Special Skill)',
							'1100' => 'ทักษะทั่วไป',
							'11011' => 'การขับขี่พาหนะ จักรยานยนต์',
							'11012' => 'การขับขี่พาหนะ รถยนต์',
							'1102' => 'ว่ายน้ำ',
							'12001' => 'การใช้ภาษา "สื่อสารได"้',
							'12011' => 'อังกฤษ',
							'12021' => 'จีน',
							'12031' => 'เยอรมัน',
							'12041' => 'ฝรั่งเศส',
							'12051T' => 'อื่นๆ (ให้ระบุ)',
							'12002' => 'การใช้ภาษา "อ่านเขียนได้"',
							'12012' => 'อังกฤษ',
							'12022' => 'จีน',
							'12032' => 'เยอรมัน',
							'12042' => 'ฝรั่งเศส',
							'12052T' => 'อื่นๆ (ให้ระบุ)',
							'12003' => 'การใช้ภาษา "แปลได้"',
							'12013' => 'อังกฤษ',
							'12023' => 'จีน',
							'12033' => 'เยอรมัน',
							'12043' => 'ฝรั่งเศส',
							'12053T' => 'อื่นๆ (ให้ระบุ)',
							'1300' => 'งานดูแล',
							'1301' => 'ทำอาหาร',
							'1302' => 'เลี้ยงเด็ก',
							'1303' => 'ดูแลคนชรา',
							'1304' => 'เย็บปักถักร้อย',
							'1400' => 'นันทนาการ',
							'1401T' => 'เล่นดนตรี (ระบุชนิดเครื่องดนตรี)',
							'1402T' => 'สอนกีฬา (ระบุชนิดกีฬา)',
							'1403' => 'วาดภาพ (ภาพเหมือน/การ์ตูน/ฯลฯ)',
							'1404' => 'เต้นรำ',
							'2000' => '2. ทักษะวิชาชีพ (Professional Skill)',
							'2100' => 'งานช่างเทคนิค',
							'2101' => 'ช่างอิเลคทรอนิคส์',
							'2102' => 'ช่างไฟฟ้า',
							'2103' => 'ช่างไม้',
							'2104' => 'ช่างปูน',
							'2105' => 'ช่างโลหะ',
							'2106' => 'ช่างประปา',
							'2107' => 'ช่างสี',
							'2200' => 'วิทยาศาสตร์และเทคโนโลยี',
							'2201T' => 'วิทยาศาสตร์ (ระบุสาขา)',
							'2202T' => 'คอมพิวเตอร์และไอที (ระบุสาขา)',
							'2203T' => 'วิศวกรรม (ระบุสาขา)',
							'2204T' => 'สถาปัตยกรรม (ระบุสาขา)',
							'2300' => 'สุขภาพ',
							'2301T' => 'แพทย์ (ระบุสาขา)',
							'2302T' => 'พยาบาล (ระบุสาขา)',
							'2303' => 'ทันตแพทย์',
							'2304' => 'เทคนิคการแพทย์',
							'2305' => 'เภสัชศาสตร์',
							'2306' => 'สาธารณสุข',
							'2307' => 'สัตวแพทย์',
							'2400' => 'สังคมศาตร์และมนุษย์ศาสตร์',
							'2401' => 'กฎหมาย',
							'2402' => 'ประวัติศาสตร์',
							'2403' => 'เศรษฐศาสตร์',
							'2404' => 'บรรณารักษ์',
							'2405' => 'สังคมสงเคราะห์',
							'2406T' => 'อื่นๆ (ระบุสาขา)',	
							'2500' => 'บริหารธุรกิจ',
							'2501' => 'การบัญชี',
							'2502' => 'การเงิน',
							'2503' => 'การตลาด',
							'2504' => 'การบริหารจัดการ',
							'2505' => 'บริหารธุรกิจ',
							'2600' => 'ศิลปวัฒนธรรม',
							'2601' => 'การละคร',
							'2602' => 'วรรณศิลป์',
							'2603' => 'โบราณคดี',
							'2604' => 'ภาพยนตร์',
							'2605' => 'โทรทัศน์/วิทยุ',
							'2606' => 'การโฆษณาและประชาสัมพันธ์',
							'2607' => 'วารสารศาสตร์',
							'2608' => 'จิตรกรรมและประติมากรรม',
							'2609' => 'ออกแบบและตกแต่งภายใน',
							'2700' => 'การศึกษา',
							'2701T' => 'งานสอน (ระบุสาขา)',
							'2702T' => 'งานประเมิน (ระบุสาขา)',
							'2703T' => 'งานวิจัย (ระบุสาขา)',
							'2800' => 'สิ่งแวดล้อมและการเกษตร',
							'2801T' => 'สิ่งแวดล้อม (ระบุสาขา)',
							'2802T' => 'การเกษตร (ระบุสาขา)',
							'2803' => 'สัตวบาล',
							'2804' => 'การประมง',
							'2805' => 'วนศาสตร์',
							)
);