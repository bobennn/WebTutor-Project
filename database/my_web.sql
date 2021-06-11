-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26 มี.ค. 2020 เมื่อ 06:40 PM
-- เวอร์ชันของเซิร์ฟเวอร์: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_web`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `comment`
--

CREATE TABLE `comment` (
  `cm_id` int(11) NOT NULL,
  `ref_c_id` int(11) NOT NULL,
  `cm_detail` text NOT NULL,
  `cm_status` int(1) NOT NULL DEFAULT 0 COMMENT '0 = hide, 1 =show',
  `cm_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='เก็บข้อมูลการแสดงความคิดเห็นต่อสินค้า';

--
-- dump ตาราง `comment`
--

INSERT INTO `comment` (`cm_id`, `ref_c_id`, `cm_detail`, `cm_status`, `cm_date`) VALUES
(1, 10, 'ดีมากกกกก', 1, '2020-03-24 18:41:52'),
(2, 10, 'น่าสนใจ', 1, '2020-03-24 18:42:04'),
(3, 4, 'รับคนสนใจหารายได้เสริม\r\n\r\nการทำงานของเราเป็นแบบ social network maketing เป็นระบบใหม่\r\n\r\nทางบริษัทจะมีเว็ปไซต์ให้คุณ1-3 เว็ป เพียงแค่ให้คุณไปโปรโมทหรือโฆษณาให้บริษัทสามารถทำงานอย่ที่บ้านได้\r\n\r\nจะมีการรับรายได้อยู่2แบบคือ part - time ทำเพียงไม่นานจะได้ประมาณ3000-5000\r\n\r\nส่วน full - time จะอยู่ที่ 10000-20000 อาจจะมากกว่านี้ ถ้าคุณสนใจให้กรอก ที่อยู่ของคุณ จังหวัด และ เบอร์โทรติดต่อกลับ\r\n\r\nบริษัทเราสามารถทำได้ตั้งแต่ อายุ 15+ ส่งมาทาง Rachapon1996@gmail.com หรือ Pin : 22B5C3F7\r\n\r\nhttp://www.job2income.com/?id=rachapon', 0, '2020-03-24 18:43:38');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `course`
--

CREATE TABLE `course` (
  `c_id` int(11) NOT NULL,
  `ref_m_id` int(11) NOT NULL DEFAULT 0 COMMENT 'รหัสของคนเพิ่มข้อมูล',
  `ref_t_id` int(11) NOT NULL COMMENT 'รหัสประเภทวิชา',
  `c_name` varchar(150) NOT NULL COMMENT 'ชื่อคอร์ส',
  `c_detail` text NOT NULL,
  `c_price` float(10,2) NOT NULL,
  `c_view` int(11) NOT NULL DEFAULT 0,
  `c_datesave` timestamp NOT NULL DEFAULT current_timestamp(),
  `c_status` int(1) NOT NULL DEFAULT 1 COMMENT 'สถานะการแสดง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ตารางเก็บข้อมูลคอร์ส';

--
-- dump ตาราง `course`
--

INSERT INTO `course` (`c_id`, `ref_m_id`, `ref_t_id`, `c_name`, `c_detail`, `c_price`, `c_view`, `c_datesave`, `c_status`) VALUES
(1, 3, 6, 'เคมีสำหรับ ม.4-6', '<p><span style=\"font-size:22px\">คอร์สติวเนื้อหาสำหรับเตรียมสอบภายในห้องเรียน หรือเตรียมสอบเข้ามหาวิทยาลัย </span></p>\r\n\r\n<p><span style=\"font-size:22px\">รับสอนนักเรียนที่ไม่มีพื้นฐานหรือไม่เข้าใจเนื้อหาที่เรียน&nbsp;<img alt=\"enlightened\" src=\"http://127.0.0.1/web1/ckeditor/plugins/smiley/images/lightbulb.png\" style=\"height:23px; width:23px\" title=\"enlightened\" /></span></p>\r\n\r\n<p><span style=\"font-size:22px\"><span style=\"background-color:#2ecc71\">เน้นให้ผู้เรียนมีความเข้าใจในเนื้อหามากกว่ากการจดจำ</span></span><br />\r\n&nbsp;</p>\r\n', 200.00, 5, '2020-03-22 11:46:09', 0),
(2, 3, 1, 'คณิตศาสตร์มัธยมปลาย ม.4-6', '<p><span style=\"font-size:22px\">ติวเนื้อหาสำหรับเ<span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"background-color:#f1c40f\">ตรียมเตรียมสอบเข้ามหาวิทยาลัย</span></span> หรือเพิ่มเกรด </span></p>\r\n\r\n<p><span style=\"font-size:22px\">รับสอนนักเรียนที่ไม่มีพื้นฐานหรือไม่เข้าใจเนื้อหาที่เรียน<img alt=\"enlightened\" src=\"http://127.0.0.1/web1/ckeditor/plugins/smiley/images/lightbulb.png\" style=\"height:23px; width:23px\" title=\"enlightened\" /> </span></p>\r\n\r\n<p><span style=\"font-size:22px\">เน้นให้ผู้เรียนมีความเข้าใจในเนื้อหามากขึ้น<img alt=\"yes\" src=\"http://127.0.0.1/web1/ckeditor/plugins/smiley/images/thumbs_up.png\" style=\"height:23px; width:23px\" title=\"yes\" /> </span></p>\r\n\r\n<p><span style=\"font-size:22px\">พร้อม<span class=\"marker\">ข้อสอบเก่า10ปีย้อนหลัง</span> </span></p>\r\n\r\n<p><span style=\"font-size:22px\">สามารถนัดเรียนตัวต่อตัว หรือเป็นกลุ่ม 3-5 คนได้</span></p>\r\n', 200.00, 10, '2020-03-22 11:48:02', 0),
(3, 3, 5, 'ฟิสิกส์เพิ่มเกรด (สำหรับน้อง ม.4-ม.6)', '<p><span style=\"font-size:18px\">ฟิสิกส์เพิ่มเกรด(สำหรับน้อง ม.4-ม.6) </span></p>\r\n\r\n<p><span style=\"font-size:18px\">เป็นคอร์สสำหรับ<span style=\"background-color:#2ecc71\">ทบทวนเพื่อนเตรียมสอบเก็บคะแนน</span> สามารถเลือกเรียนได้ตามเนื้อหา ม.4-ม.6</span></p>\r\n\r\n<p><img alt=\"yes\" src=\"http://127.0.0.1/web1/ckeditor/plugins/smiley/images/thumbs_up.png\" style=\"height:23px; width:23px\" title=\"yes\" /></p>\r\n', 200.00, 6, '2020-03-22 11:50:40', 1),
(4, 4, 4, 'ภาษาอังกฤษเบื้องต้น สำหรับผู้ที่ต้องการปูพื้นฐานใหม่ทั้งหมด', '<p><span style=\"font-size:20px\"><span style=\"background-color:#f1c40f\">คอร์สติวภาษาอังกฤษเบื้องต้น&nbsp;</span></span></p>\r\n\r\n<p><span style=\"font-size:20px\"><span style=\"color:#16a085\">- เริ่มสอนใหม่หมด </span></span></p>\r\n\r\n<p><span style=\"font-size:20px\"><span style=\"color:#c0392b\">- ตั้งแต่แกรมม่าเบื้องต้น</span> </span></p>\r\n\r\n<p><span style=\"font-size:20px\"><span style=\"color:#8e44ad\">- คำศัพท์</span>&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:20px\"><span style=\"color:#f39c12\">- ประโยคสนทนาต่างๆ</span> </span></p>\r\n\r\n<p><span style=\"font-size:20px\">เพื่อเป็นการปูพื้นฐานที่ดีในการเรียนต่อไปในอนาคต&nbsp;<img alt=\"wink\" src=\"http://127.0.0.1/web1/ckeditor/plugins/smiley/images/wink_smile.png\" style=\"height:23px; width:23px\" title=\"wink\" /><img alt=\"wink\" src=\"http://127.0.0.1/web1/ckeditor/plugins/smiley/images/wink_smile.png\" style=\"height:23px; width:23px\" title=\"wink\" /></span></p>\r\n', 250.00, 5, '2020-03-22 12:14:03', 1),
(5, 4, 10, 'GAT เชื่อมโยง สำหรับผู้ไม่มีพื้นฐาน เข้าใจง่าย', '<p><span style=\"font-size:20px\">คอร์สติว <span style=\"background-color:#f1c40f\">GAT เชื่อมโยง</span>โดยผู้สอนผู้มีประสบการณ์สอบได้<span style=\"color:#e74c3c\"> 150 เต็ม</span>ทุกครั้ง </span></p>\r\n\r\n<p><span style=\"font-size:20px\">- ไม่ต้องทำโจทย์เยอะ เพียงแค่เข้าใจก็ทำได้</span></p>\r\n', 250.00, 3, '2020-03-22 12:17:24', 0),
(6, 5, 1, 'ปรับพื้นฐานคณิตศาสตร์ ม.ต้น รับสอนตั้งแต่เบื้องต้นถึงตะลุยโจทย์!!', '<p><span style=\"font-size:20px\">ปรับพื้นฐานเนื้อหาเปิดเทอม <span style=\"background-color:#f1c40f\">ปรับเกรด ปรับทักษะด้านการคำนวณ</span> </span></p>\r\n\r\n<p><span style=\"font-size:20px\">ติดต่อมาได้เลยครับ **รับสอนบริเวณในเกษตร กพส.&nbsp;ครับ**</span></p>\r\n', 250.00, 5, '2020-03-22 12:26:17', 0),
(7, 6, 1, 'แคลคูลัส1 Final', '<p><span style=\"font-size:22px\">คลคูลัส1final&nbsp;<img alt=\"enlightened\" src=\"http://127.0.0.1/web1/ckeditor/plugins/smiley/images/lightbulb.png\" style=\"height:23px; width:23px\" title=\"enlightened\" /></span></p>\r\n\r\n<p><span style=\"font-size:20px\">- การประยุกต์อุพันธ์ </span></p>\r\n\r\n<p><span style=\"font-size:20px\">- เทคนิคการอินทิเกรต </span></p>\r\n\r\n<p><span style=\"font-size:20px\">- การประยุกต์อินทิกรัล </span></p>\r\n\r\n<p><span style=\"font-size:20px\">- อินทิกรัลไม่ตรงแบบ</span></p>\r\n', 300.00, 0, '2020-03-22 12:36:54', 0),
(8, 6, 1, 'แคลคูลัส1 Midterm', '<p><span style=\"font-size:22px\"><span style=\"background-color:#f1c40f\">แคล1 midterm ลิมิตและความต่อเนื่อง อนุพันธ์ อินทิเกรต อดิศัย</span></span></p>\r\n', 300.00, 0, '2020-03-22 12:38:03', 0),
(9, 6, 1, 'Linear algebra1', '<p><span style=\"font-size:28px\"><span style=\"background-color:#f1c40f\">Linear1</span></span></p>\r\n\r\n<p><span style=\"font-size:20px\"><img alt=\"enlightened\" src=\"http://127.0.0.1/web1/ckeditor/plugins/smiley/images/lightbulb.png\" style=\"height:23px; width:23px\" title=\"enlightened\" />ระบบสมการเชิงเส้นและเมทริกซ์ </span></p>\r\n\r\n<p><span style=\"font-size:20px\"><img alt=\"enlightened\" src=\"http://127.0.0.1/web1/ckeditor/plugins/smiley/images/lightbulb.png\" style=\"height:23px; width:23px\" title=\"enlightened\" />การแปลงเชิงเส้นและพีชคณิตเมทริกซ์ </span></p>\r\n\r\n<p><span style=\"font-size:20px\"><img alt=\"enlightened\" src=\"http://127.0.0.1/web1/ckeditor/plugins/smiley/images/lightbulb.png\" style=\"height:23px; width:23px\" title=\"enlightened\" />ค่าลักษณะเฉพาะและเวกเตอร์ลักษณะเฉพาะ </span></p>\r\n\r\n<p><span style=\"font-size:20px\"><img alt=\"enlightened\" src=\"http://127.0.0.1/web1/ckeditor/plugins/smiley/images/lightbulb.png\" style=\"height:23px; width:23px\" title=\"enlightened\" />เรขาคณิตเชิงเส้นและฐานหลักเชิงตั้งฉาก</span></p>\r\n', 300.00, 2, '2020-03-22 12:39:23', 1),
(10, 5, 10, 'การบ้านเด็กประถม', '<p><span style=\"font-size:20px\">สอนการบ้านน้องประถมทุกวิชา <span style=\"background-color:#f1c40f\">เน้นในสิ่งที่น้องไม่เข้าใจจากชั้นเรียน</span> </span></p>\r\n\r\n<p><span style=\"font-size:20px\">เหมาะสำหรับผู้ปกครองที่ไม่มีเวลาสอนการบ้านน้อง&nbsp;<img alt=\"yes\" src=\"http://127.0.0.1/web1/ckeditor/plugins/smiley/images/thumbs_up.png\" style=\"height:23px; width:23px\" title=\"yes\" /></span></p>\r\n\r\n<p><span style=\"font-size:20px\">ติดต่อมาได้เลยครับ <span style=\"color:#c0392b\">**รับสอนบริเวณในเกษตร กพส.&nbsp;ครับ**</span></span></p>\r\n', 200.00, 5, '2020-03-22 12:44:45', 1),
(11, 7, 7, 'ชีววิทยาเพิ่มเกรดม.4-ม.6', '<p><span style=\"font-size:20px\">เนื้อหาอิงกับที่สอนในห้องเรืยนเป็นหลัก <span style=\"color:#c0392b\">เพื่อเพิ่มเกรด</span> เน้นการทำความเข้าใจ มี<span style=\"color:#e67e22\">วิดีโอประกอบการสอน</span> เพื่อสามารถต่อยอดความรู้ได้ เมื่อเจอโจทย์ มีโจทย์ให้ฝึกทำ ทั้งในระดับทั่วไป และเข้ามหาลัยอีกด้วย</span></p>\r\n', 150.00, 2, '2020-03-25 08:42:09', 1);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `course_type`
--

CREATE TABLE `course_type` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ตารางเก็บข้อมูลประเภทสินค้า';

--
-- dump ตาราง `course_type`
--

INSERT INTO `course_type` (`t_id`, `t_name`) VALUES
(1, 'คณิตศาสตร์'),
(2, 'วิทยาศาสตร์'),
(3, 'ภาษาไทย'),
(4, 'ภาษาต่างประเทศ'),
(5, 'ฟิสิกส์'),
(6, 'เคมี'),
(7, 'ชีววิทยา'),
(8, 'สังคมศึกษา'),
(10, 'อื่นๆ');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `login_log`
--

CREATE TABLE `login_log` (
  `log_id` int(11) NOT NULL COMMENT 'ประวัติการlogin',
  `ref_m_id` int(11) NOT NULL COMMENT 'idของคนlogin',
  `log_date` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'เวลาที่loginล่าสุด'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='เก็บประวัติการ login ';

--
-- dump ตาราง `login_log`
--

INSERT INTO `login_log` (`log_id`, `ref_m_id`, `log_date`) VALUES
(1, 3, '2020-03-22 09:44:56'),
(2, 3, '2020-03-22 12:00:27'),
(3, 3, '2020-03-22 12:01:50'),
(4, 4, '2020-03-22 12:07:54'),
(5, 5, '2020-03-22 12:22:11'),
(6, 6, '2020-03-22 12:30:41'),
(7, 5, '2020-03-22 12:42:19'),
(8, 4, '2020-03-22 13:05:34'),
(9, 4, '2020-03-22 13:06:50'),
(10, 4, '2020-03-22 18:08:15'),
(11, 3, '2020-03-22 18:31:20'),
(12, 6, '2020-03-22 18:32:04'),
(13, 5, '2020-03-22 18:32:50'),
(14, 4, '2020-03-22 18:33:29'),
(15, 3, '2020-03-22 18:33:59'),
(16, 2, '2020-03-22 18:58:29'),
(17, 3, '2020-03-22 19:48:10'),
(18, 4, '2020-03-24 18:16:12'),
(19, 4, '2020-03-24 18:16:12'),
(20, 7, '2020-03-25 08:12:11'),
(21, 7, '2020-03-25 08:40:37');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `member`
--

CREATE TABLE `member` (
  `m_id` int(11) NOT NULL,
  `m_username` varchar(20) NOT NULL,
  `m_password` varchar(50) NOT NULL,
  `m_fname` varchar(50) NOT NULL,
  `m_lname` varchar(50) NOT NULL,
  `m_email` varchar(50) NOT NULL,
  `m_gender` varchar(20) NOT NULL COMMENT 'เพศ',
  `m_phone` varchar(20) NOT NULL,
  `m_line` varchar(50) NOT NULL,
  `m_img` varchar(50) NOT NULL COMMENT 'รูปประจำตัว',
  `m_level` varchar(10) NOT NULL DEFAULT 'MEMBER' COMMENT 'ระดับผู้ใช้',
  `m_datesave` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'เวลาที่มีการเพิ่มข้อมูล',
  `m_graduate` varchar(100) NOT NULL COMMENT 'จบจาก',
  `m_faculy` varchar(100) NOT NULL COMMENT 'คณะ',
  `m_experience` varchar(300) NOT NULL COMMENT 'ประสบการณ์สั้นๆ',
  `m_img_edu` varchar(100) NOT NULL COMMENT 'รูปใบรับรองการศึกษา',
  `m_confirm_date` datetime NOT NULL COMMENT 'เวลาที่แจ้งยืนยันตัว',
  `m_status` int(1) NOT NULL DEFAULT 0 COMMENT 'สถานะยืนยันตัว'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ตารางข้อมูลสมาชิก';

--
-- dump ตาราง `member`
--

INSERT INTO `member` (`m_id`, `m_username`, `m_password`, `m_fname`, `m_lname`, `m_email`, `m_gender`, `m_phone`, `m_line`, `m_img`, `m_level`, `m_datesave`, `m_graduate`, `m_faculy`, `m_experience`, `m_img_edu`, `m_confirm_date`, `m_status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin', '', '', '', '', '7472378820200322_163643.png', 'ADMIN', '2020-03-22 09:27:36', '', '', '', '', '0000-00-00 00:00:00', 0),
(2, 'admin2', 'c84258e9c39059a89ab77d846ddab909', 'admin2', 'admin2', 'admin2@gmail.com', 'ชาย', '9999999999', 'admin2', '36017376020181222_113934.png', 'MEMBER', '2020-03-22 09:41:17', '', '', '', '', '0000-00-00 00:00:00', 0),
(3, 'Teerapan', '29e748da4225349e992c1ef0b2856c15', 'ธีร​พันธุ์', 'สิงขรรค์', 'teerapan021139@gmail.com', 'ชาย', '0647676964', 'teerapan2213', '161861879420200322_164530.jpg', 'MEMBER', '2020-03-22 09:44:39', 'มหาวิทยาลัย​ราชภัฏ​บ้าน​สมเด็จ​เจ้าพระยา', 'วิทยาศาสตร์​และ​เทคโนโลยี', 'รับสอนวิชาคณิตศาสตร์ ฟิสิกส์ และเคมี ในระดับมัธยมศึกษา สอนตามเอกสารของผู้เรียน โดยมีเนื้อหาประกอบจากเอกสารของผู้สอน ดำเนินการสอนโดยเกริ่นเนื้อหา และทำแบบฝึกหัดเป็นหลักเพื่อให้เกิดความเข้าใจชัดเจน ผู้เรียนสามารถซักถามข้อสงสัยที่มาจากโรงเรียนได้', '', '0000-00-00 00:00:00', 0),
(4, 'Rungnapaporn', '53ba370fd73decfca53fa8963a73f23a', 'รุ่งนภาพร', 'ติ่งทอง', 'Rungnapaporn.nui@gmail.com', 'หญิง', '0809299440', 'Nuy1603', '99833911320200322_200723.jpg', 'MEMBER', '2020-03-22 12:07:25', 'Kasetsart University Kamphaeng saen campus', 'เกษตร กำแพงแสน', 'ภาษาอังกฤษ GAT  /ปรับพื้นฐาน,สนทนาพื้นฐาน/ สอนการบ้าน /เพิ่มเกรด มีประสบการณ์สอนในทุกวิชาน้า  เรียนเดี่ยวหรือกลุ่มก็ได้ คนสอนใจดีใจเย็น ไม่เหวี่ยงแน่นอนจ้า  ถ้าไม่เข้าใจตรงไหน', '210397374820200325_013658.jpg', '2020-03-25 01:36:37', 0),
(5, 'namcnai', '6efa9a75c489d133581a39251af3c1b8', 'นำชัย', 'น้ำใจดี', 'namcnai@hotmail.com', 'ชาย', '0877501530', 'Namchaidee', '187350912520200322_192231.jpg', 'MEMBER', '2020-03-22 12:21:18', 'มหาวิทยาลัยเทคโนโลยีราชมงคลกรุงเทพ', 'เทคโนโลยีคหกรรมศาสตร์', 'สอนติวก่อนสอบให้รุ่นน้อง และเพื่อนๆที่รู้จัก ปรับเกรดระดับชั้นม.ปลาย สอนคอร์สเนื้อหามหาวิทยาลัยแทนอาจารย์ที่กวดวิชาเป็นระยะเวลาหนึ่ง', '', '0000-00-00 00:00:00', 0),
(6, 'Khemanit', 'e807f1fcf82d132f9bb018ca6738a19f', 'เขมนิจ', 'ศิริวัฒนาพร', 'Khemanitt.1278@gmail.com', 'หญิง', '0875643421', 'Khemanittttt', '169607385120200322_193115.jpg', 'MEMBER', '2020-03-22 12:30:26', 'มหาวิทยาลัยศิลปากร', 'วิทยาศาสตร์', 'เคยเป็นผู้ช่วยสอนวิชาปฏิบัติการฟิสิกส์ 1 และ 2 (สอนนักศึกษาปี 1) และติวให้เพื่อนในช่วงก่อนสอบสมัยที่เรียนปริญญาตรีครับ ส่วนรูปแบบการสอนจะเป็นเน้นทำโจทย์', '', '0000-00-00 00:00:00', 0),
(7, 'Kiie_suchada', '0c0de89c4631bfdc58b3c1db55c1f41e', 'สุชาดา', 'ศรีพูนทรัพย์', 'Sriphunhat_37@hotmail.com', 'หญิง', '0990123494', 'Kee9956', '17297525920200325_154420.jpg', 'MEMBER', '2020-03-25 08:12:00', 'มหาวิทยาลัยเกษตรศาสตร์วิทยาเขตกำแพงแสน', 'เกษตร', 'มีประสบการณ์ชีววิทยาค่อนข้างมากกกก', '', '0000-00-00 00:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`cm_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `course_type`
--
ALTER TABLE `course_type`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `login_log`
--
ALTER TABLE `login_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`m_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `cm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `course_type`
--
ALTER TABLE `course_type`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login_log`
--
ALTER TABLE `login_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ประวัติการlogin', AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
