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
  `package_package` int(11) NOT NULL,
  `package_practical` int(11) NOT NULL,
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