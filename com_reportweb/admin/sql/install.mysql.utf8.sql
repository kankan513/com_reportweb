DROP TABLE IF EXISTS `#__package`;
DROP TABLE IF EXISTS `#__wms_information`;
DROP TABLE IF EXISTS `#__package_detail`;
DROP TABLE IF EXISTS `#__package_detail_sub`;
DROP TABLE IF EXISTS `#__package_name`;
 
CREATE TABLE `#__package` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `package_name_id` int(11) NOT NULL,
  `package_detail_id` int(11) NOT NULL,
  `package_detail_sub_id` int(11) NOT NULL,
  `package_package` varchar(255) NOT NULL,
  `package_practical` varchar(255) NOT NULL,
  `package_remark` text,
  `package_wms_information` int(11) NOT NULL,
   PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

CREATE TABLE `#__wms_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `package_id` int(11) NOT NULL,
  `website_name` varchar(255) NOT NULL,
  `ma_contact_expire` date NOT NULL,
  `domain_expire` date NOT NULL,
  `hosting_expire` date NOT NULL,
   PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

CREATE TABLE `#__package_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
   PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

CREATE TABLE `#__package_detail_sub` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `package_detail_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
   PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

CREATE TABLE `#__package_name` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
   PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

INSERT INTO `#__package_detail` (`name`) VALUES
('ด้านตรวจสอบเว็บไซต์/ระบบ'),
('ด้านการออกแบบกราฟฟิก'),
('ด้านการลงข้อมูล'),
('ด้าน Social Media'),
('ด้านการโฆษณา/SEO');

INSERT INTO `#__package_detail_sub` (`package_detail_id`, `name`) VALUES
('1', 'ตรวจสอบเว็บไซต์ให้พร้อมใช้งานได้ตลอดเวลา'),
('1', 'ตรวจสอบดูแล การเชื่อมต่อกับเซิฟเวอร์'),
('1', 'ตรวจสอบการโจมตีของไวรัส,มัลแวร์,แฮกเกอร์'),
('1', 'ตรวจสอบและแก้ไขโปรแกรมภายในเว็บไซต์'),
('1', 'สำรองข้อมูลภายในเว็บไซต์'),
('2', 'ออกแบบ/แก้ไข/ปรับเปลี่ยน Banner, Highlight'),
('2', 'ออกแบบ/ปรับเปลี่ยน Intro Page'),
('2', 'ออกแบบ/ปรับเปลี่ยนรูปแบบ สีสัน โครงร่างเว็บไซต์'),
('3', 'อัพเดท/แก้ไข ข้อความ เนื้อหา Static Content (By Cus.)'),
('3', 'อัพเดท/แก้ไข ข่าวสาร บทความ Dynamic Content (By Cus.)'),
('3', 'อัพเดท/แก้ไขรูปภาพกิจกรรม,สินค้า,บริการ(By Cus.)'),
('3', 'จัดหาข้อมูล/ข่าวสาร/รูปภาพ/บทความ (By DiTC)'),
('3', 'อัพโหลดรูปภาพ/วีดีโอ (By Cus.)'),
('4', 'ตรวจสอบ ดูแล Social Media'),
('4', 'อัพเดท/แก้ไข ข้อความ เนื้อหา Dynamic Content (By Cus.)'),
('4', 'จัดหาข้อมูล/ข่าวสาร/รูปภาพ/บทความ (By DiTC)'),
('4', 'อัพโหลดรูปภาพ/วีดีโอ (By Cus.)'),
('5', 'พัฒนาเว็บไซต์ให้รองรับ SEO'),
('5', 'รายงานผู้เข้าชมเว็บไซต์');
