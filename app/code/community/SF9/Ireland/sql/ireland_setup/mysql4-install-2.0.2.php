<?php

$installer = $this;

$installer->startSetup();

$installer->run("

-- phpMyAdmin SQL Dump
-- version 3.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 02, 2011 at 04:04 PM
-- Server version: 5.1.44
-- PHP Version: 5.2.13

SET SQL_MODE='NO_AUTO_VALUE_ON_ZERO';


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `magento-141`
--

-- --------------------------------------------------------

--
-- Table structure for table `shipping_anpost`
--

DROP TABLE IF EXISTS {$this->getTable('shipping_anpost')};
CREATE TABLE {$this->getTable('shipping_anpost')} (
  `pk` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `website_id` int(11) NOT NULL DEFAULT '0',
  `dest_country_id` varchar(4) NOT NULL DEFAULT '0',
  `dest_region_id` int(10) NOT NULL DEFAULT '0',
  `dest_city` varchar(30) NOT NULL DEFAULT '''''',
  `dest_zip` varchar(10) NOT NULL DEFAULT '''''',
  `dest_zip_to` varchar(10) NOT NULL DEFAULT '''''',
  `condition_name` varchar(20) NOT NULL DEFAULT '''''',
  `condition_from_value` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `condition_to_value` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `price` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `cost` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `delivery_type` varchar(255) NOT NULL DEFAULT '''''',
  PRIMARY KEY (`pk`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=339 ;

--
-- Dumping data for table `shipping_anpost`
--

INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(1, 1, 'IE', 0, '', '', '', 'package_weight', 0.0000, 0.2500, 2.2000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(2, 1, 'IE', 0, '', '', '', 'package_weight', 0.2500, 0.5000, 2.7000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(3, 1, 'IE', 0, '', '', '', 'package_weight', 0.5000, 1.0000, 3.8500, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(4, 1, 'IE', 0, '', '', '', 'package_weight', 1.0000, 1.5000, 6.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(5, 1, 'IE', 0, '', '', '', 'package_weight', 1.5000, 2.0000, 7.5000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(6, 1, 'IE', 0, '', '', '', 'package_weight', 2.0000, 2.5000, 8.7000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(7, 1, 'IE', 0, '', '', '', 'package_weight', 2.5000, 3.0000, 9.8000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(8, 1, 'IE', 0, '', '', '', 'package_weight', 3.0000, 3.5000, 11.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(9, 1, 'IE', 0, '', '', '', 'package_weight', 3.5000, 4.0000, 12.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(10, 1, 'IE', 0, '', '', '', 'package_weight', 4.0000, 4.5000, 13.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(11, 1, 'IE', 0, '', '', '', 'package_weight', 4.5000, 5.0000, 14.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(12, 1, 'IE', 0, '', '', '', 'package_weight', 5.0000, 6.0000, 15.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(13, 1, 'IE', 0, '', '', '', 'package_weight', 6.0000, 7.0000, 16.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(14, 1, 'IE', 0, '', '', '', 'package_weight', 7.0000, 8.0000, 17.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(15, 1, 'IE', 0, '', '', '', 'package_weight', 8.0000, 9.0000, 18.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(16, 1, 'IE', 0, '', '', '', 'package_weight', 9.0000, 10.0000, 19.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(17, 1, 'IE', 0, '', '', '', 'package_weight', 10.0000, 11.0000, 20.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(18, 1, 'IE', 0, '', '', '', 'package_weight', 11.0000, 12.0000, 21.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(19, 1, 'IE', 0, '', '', '', 'package_weight', 12.0000, 13.0000, 22.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(20, 1, 'IE', 0, '', '', '', 'package_weight', 13.0000, 14.0000, 23.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(21, 1, 'IE', 0, '', '', '', 'package_weight', 14.0000, 15.0000, 24.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(22, 1, 'IE', 0, '', '', '', 'package_weight', 15.0000, 16.0000, 25.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(23, 1, 'IE', 0, '', '', '', 'package_weight', 16.0000, 17.0000, 26.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(24, 1, 'IE', 0, '', '', '', 'package_weight', 17.0000, 18.0000, 27.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(25, 1, 'IE', 0, '', '', '', 'package_weight', 18.0000, 19.0000, 28.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(26, 1, 'IE', 0, '', '', '', 'package_weight', 19.0000, 20.0000, 29.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(27, 1, 'GB', 0, '', 'BT%%', '', 'package_weight', 0.0000, 0.2500, 2.2000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(28, 1, 'GB', 0, '', 'BT%%', '', 'package_weight', 0.2500, 0.5000, 2.7000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(29, 1, 'GB', 0, '', 'BT%%', '', 'package_weight', 0.5000, 1.0000, 3.8500, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(30, 1, 'GB', 0, '', 'BT%%', '', 'package_weight', 1.0000, 1.5000, 6.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(31, 1, 'GB', 0, '', 'BT%%', '', 'package_weight', 1.5000, 2.0000, 7.5000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(32, 1, 'GB', 0, '', 'BT%%', '', 'package_weight', 2.0000, 2.5000, 8.7000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(33, 1, 'GB', 0, '', 'BT%%', '', 'package_weight', 2.5000, 3.0000, 9.8000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(34, 1, 'GB', 0, '', 'BT%%', '', 'package_weight', 3.0000, 3.5000, 11.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(35, 1, 'GB', 0, '', 'BT%%', '', 'package_weight', 3.5000, 4.0000, 12.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(36, 1, 'GB', 0, '', 'BT%%', '', 'package_weight', 4.0000, 4.5000, 13.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(37, 1, 'GB', 0, '', 'BT%%', '', 'package_weight', 4.5000, 5.0000, 14.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(38, 1, 'GB', 0, '', 'BT%%', '', 'package_weight', 5.0000, 6.0000, 15.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(39, 1, 'GB', 0, '', 'BT%%', '', 'package_weight', 6.0000, 7.0000, 16.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(40, 1, 'GB', 0, '', 'BT%%', '', 'package_weight', 7.0000, 8.0000, 17.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(41, 1, 'GB', 0, '', 'BT%%', '', 'package_weight', 8.0000, 9.0000, 18.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(42, 1, 'GB', 0, '', 'BT%%', '', 'package_weight', 9.0000, 10.0000, 19.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(43, 1, 'GB', 0, '', 'BT%%', '', 'package_weight', 10.0000, 11.0000, 20.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(44, 1, 'GB', 0, '', 'BT%%', '', 'package_weight', 11.0000, 12.0000, 21.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(45, 1, 'GB', 0, '', 'BT%%', '', 'package_weight', 12.0000, 13.0000, 22.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(46, 1, 'GB', 0, '', 'BT%%', '', 'package_weight', 13.0000, 14.0000, 23.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(47, 1, 'GB', 0, '', 'BT%%', '', 'package_weight', 14.0000, 15.0000, 24.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(48, 1, 'GB', 0, '', 'BT%%', '', 'package_weight', 15.0000, 16.0000, 25.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(49, 1, 'GB', 0, '', 'BT%%', '', 'package_weight', 16.0000, 17.0000, 26.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(50, 1, 'GB', 0, '', 'BT%%', '', 'package_weight', 17.0000, 18.0000, 27.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(51, 1, 'GB', 0, '', 'BT%%', '', 'package_weight', 18.0000, 19.0000, 28.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(52, 1, 'GB', 0, '', 'BT%%', '', 'package_weight', 19.0000, 20.0000, 29.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(53, 1, 'GB', 0, '', '', '', 'package_weight', 0.0000, 0.2500, 2.7000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(54, 1, 'GB', 0, '', '', '', 'package_weight', 0.2500, 0.5000, 3.5000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(55, 1, 'GB', 0, '', '', '', 'package_weight', 0.5000, 1.0000, 4.8500, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(56, 1, 'GB', 0, '', '', '', 'package_weight', 1.0000, 1.5000, 7.5000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(57, 1, 'GB', 0, '', '', '', 'package_weight', 1.5000, 2.0000, 10.7500, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(58, 1, 'GB', 0, '', '', '', 'package_weight', 2.0000, 2.5000, 10.7500, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(59, 1, 'GB', 0, '', '', '', 'package_weight', 2.5000, 3.0000, 27.5000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(60, 1, 'GB', 0, '', '', '', 'package_weight', 3.0000, 3.5000, 31.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(61, 1, 'GB', 0, '', '', '', 'package_weight', 3.5000, 4.0000, 33.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(62, 1, 'GB', 0, '', '', '', 'package_weight', 4.0000, 4.5000, 35.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(63, 1, 'GB', 0, '', '', '', 'package_weight', 4.5000, 5.0000, 37.5000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(64, 1, 'GB', 0, '', '', '', 'package_weight', 5.0000, 6.0000, 40.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(65, 1, 'GB', 0, '', '', '', 'package_weight', 6.0000, 7.0000, 41.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(66, 1, 'GB', 0, '', '', '', 'package_weight', 7.0000, 8.0000, 42.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(67, 1, 'GB', 0, '', '', '', 'package_weight', 8.0000, 9.0000, 43.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(68, 1, 'GB', 0, '', '', '', 'package_weight', 9.0000, 10.0000, 44.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(69, 1, 'GB', 0, '', '', '', 'package_weight', 10.0000, 11.0000, 45.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(70, 1, 'GB', 0, '', '', '', 'package_weight', 11.0000, 12.0000, 46.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(71, 1, 'GB', 0, '', '', '', 'package_weight', 12.0000, 13.0000, 47.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(72, 1, 'GB', 0, '', '', '', 'package_weight', 13.0000, 14.0000, 48.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(73, 1, 'GB', 0, '', '', '', 'package_weight', 14.0000, 15.0000, 49.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(74, 1, 'GB', 0, '', '', '', 'package_weight', 15.0000, 16.0000, 50.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(75, 1, 'GB', 0, '', '', '', 'package_weight', 16.0000, 17.0000, 51.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(76, 1, 'GB', 0, '', '', '', 'package_weight', 17.0000, 18.0000, 52.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(77, 1, 'GB', 0, '', '', '', 'package_weight', 18.0000, 19.0000, 53.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(78, 1, 'GB', 0, '', '', '', 'package_weight', 19.0000, 20.0000, 54.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(79, 1, 'EU', 0, '', '', '', 'package_weight', 0.0000, 0.2500, 2.7000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(80, 1, 'EU', 0, '', '', '', 'package_weight', 0.2500, 0.5000, 3.5000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(81, 1, 'EU', 0, '', '', '', 'package_weight', 0.5000, 1.0000, 4.8500, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(82, 1, 'EU', 0, '', '', '', 'package_weight', 1.0000, 1.5000, 7.5000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(83, 1, 'EU', 0, '', '', '', 'package_weight', 1.5000, 2.0000, 10.7500, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(84, 1, 'EU', 0, '', '', '', 'package_weight', 2.0000, 2.5000, 10.7500, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(85, 1, 'EU', 0, '', '', '', 'package_weight', 2.5000, 3.0000, 34.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(86, 1, 'EU', 0, '', '', '', 'package_weight', 3.0000, 3.5000, 38.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(87, 1, 'EU', 0, '', '', '', 'package_weight', 3.5000, 4.0000, 44.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(88, 1, 'EU', 0, '', '', '', 'package_weight', 4.0000, 4.5000, 48.5000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(89, 1, 'EU', 0, '', '', '', 'package_weight', 4.5000, 5.0000, 52.5000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(90, 1, 'EU', 0, '', '', '', 'package_weight', 5.0000, 6.0000, 55.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(91, 1, 'EU', 0, '', '', '', 'package_weight', 6.0000, 7.0000, 58.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(92, 1, 'EU', 0, '', '', '', 'package_weight', 7.0000, 8.0000, 61.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(93, 1, 'EU', 0, '', '', '', 'package_weight', 8.0000, 9.0000, 64.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(94, 1, 'EU', 0, '', '', '', 'package_weight', 9.0000, 10.0000, 67.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(95, 1, 'EU', 0, '', '', '', 'package_weight', 10.0000, 11.0000, 70.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(96, 1, 'EU', 0, '', '', '', 'package_weight', 11.0000, 12.0000, 73.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(97, 1, 'EU', 0, '', '', '', 'package_weight', 12.0000, 13.0000, 76.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(98, 1, 'EU', 0, '', '', '', 'package_weight', 13.0000, 14.0000, 79.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(99, 1, 'EU', 0, '', '', '', 'package_weight', 14.0000, 15.0000, 82.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(100, 1, 'EU', 0, '', '', '', 'package_weight', 15.0000, 16.0000, 85.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(101, 1, 'EU', 0, '', '', '', 'package_weight', 16.0000, 17.0000, 88.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(102, 1, 'EU', 0, '', '', '', 'package_weight', 17.0000, 18.0000, 91.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(103, 1, 'EU', 0, '', '', '', 'package_weight', 18.0000, 19.0000, 94.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(104, 1, 'EU', 0, '', '', '', 'package_weight', 19.0000, 20.0000, 97.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(105, 1, '!E', 0, '', '', '', 'package_weight', 0.0000, 0.2500, 2.7000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(106, 1, '!E', 0, '', '', '', 'package_weight', 0.2500, 0.5000, 3.5000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(107, 1, '!E', 0, '', '', '', 'package_weight', 0.5000, 1.0000, 4.8500, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(108, 1, '!E', 0, '', '', '', 'package_weight', 1.0000, 1.5000, 10.4000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(109, 1, '!E', 0, '', '', '', 'package_weight', 1.5000, 2.0000, 16.6000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(110, 1, '!E', 0, '', '', '', 'package_weight', 2.0000, 2.5000, 16.6000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(111, 1, '!E', 0, '', '', '', 'package_weight', 2.5000, 3.0000, 34.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(112, 1, '!E', 0, '', '', '', 'package_weight', 3.0000, 3.5000, 38.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(113, 1, '!E', 0, '', '', '', 'package_weight', 3.5000, 4.0000, 44.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(114, 1, '!E', 0, '', '', '', 'package_weight', 4.0000, 4.5000, 48.5000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(115, 1, '!E', 0, '', '', '', 'package_weight', 4.5000, 5.0000, 52.5000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(116, 1, '!E', 0, '', '', '', 'package_weight', 5.0000, 6.0000, 55.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(117, 1, '!E', 0, '', '', '', 'package_weight', 6.0000, 7.0000, 60.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(118, 1, '!E', 0, '', '', '', 'package_weight', 7.0000, 8.0000, 65.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(119, 1, '!E', 0, '', '', '', 'package_weight', 8.0000, 9.0000, 70.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(120, 1, '!E', 0, '', '', '', 'package_weight', 9.0000, 10.0000, 75.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(121, 1, '!E', 0, '', '', '', 'package_weight', 10.0000, 11.0000, 80.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(122, 1, '!E', 0, '', '', '', 'package_weight', 11.0000, 12.0000, 85.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(123, 1, '!E', 0, '', '', '', 'package_weight', 12.0000, 13.0000, 90.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(124, 1, '!E', 0, '', '', '', 'package_weight', 13.0000, 14.0000, 95.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(125, 1, '!E', 0, '', '', '', 'package_weight', 14.0000, 15.0000, 100.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(126, 1, '!E', 0, '', '', '', 'package_weight', 15.0000, 16.0000, 105.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(127, 1, '!E', 0, '', '', '', 'package_weight', 16.0000, 17.0000, 110.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(128, 1, '!E', 0, '', '', '', 'package_weight', 17.0000, 18.0000, 115.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(129, 1, '!E', 0, '', '', '', 'package_weight', 18.0000, 19.0000, 120.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(130, 1, '!E', 0, '', '', '', 'package_weight', 19.0000, 20.0000, 125.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(131, 1, '0', 0, '', '', '', 'package_weight', 0.0000, 0.2500, 2.7000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(132, 1, '0', 0, '', '', '', 'package_weight', 0.2500, 0.5000, 3.5000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(133, 1, '0', 0, '', '', '', 'package_weight', 0.5000, 1.0000, 4.8500, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(134, 1, '0', 0, '', '', '', 'package_weight', 1.0000, 1.5000, 10.4000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(135, 1, '0', 0, '', '', '', 'package_weight', 1.5000, 2.0000, 16.6000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(136, 1, '0', 0, '', '', '', 'package_weight', 2.0000, 2.5000, 16.6000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(137, 1, '0', 0, '', '', '', 'package_weight', 2.5000, 3.0000, 34.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(138, 1, '0', 0, '', '', '', 'package_weight', 3.0000, 3.5000, 38.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(139, 1, '0', 0, '', '', '', 'package_weight', 3.5000, 4.0000, 44.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(140, 1, '0', 0, '', '', '', 'package_weight', 4.0000, 4.5000, 48.5000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(141, 1, '0', 0, '', '', '', 'package_weight', 4.5000, 5.0000, 52.5000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(142, 1, '0', 0, '', '', '', 'package_weight', 5.0000, 6.0000, 55.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(143, 1, '0', 0, '', '', '', 'package_weight', 6.0000, 7.0000, 60.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(144, 1, '0', 0, '', '', '', 'package_weight', 7.0000, 8.0000, 65.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(145, 1, '0', 0, '', '', '', 'package_weight', 8.0000, 9.0000, 70.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(146, 1, '0', 0, '', '', '', 'package_weight', 9.0000, 10.0000, 75.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(147, 1, '0', 0, '', '', '', 'package_weight', 10.0000, 11.0000, 80.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(148, 1, '0', 0, '', '', '', 'package_weight', 11.0000, 12.0000, 85.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(149, 1, '0', 0, '', '', '', 'package_weight', 12.0000, 13.0000, 90.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(150, 1, '0', 0, '', '', '', 'package_weight', 13.0000, 14.0000, 95.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(151, 1, '0', 0, '', '', '', 'package_weight', 14.0000, 15.0000, 100.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(152, 1, '0', 0, '', '', '', 'package_weight', 15.0000, 16.0000, 105.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(153, 1, '0', 0, '', '', '', 'package_weight', 16.0000, 17.0000, 110.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(154, 1, '0', 0, '', '', '', 'package_weight', 17.0000, 18.0000, 115.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(155, 1, '0', 0, '', '', '', 'package_weight', 18.0000, 19.0000, 120.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(156, 1, '0', 0, '', '', '', 'package_weight', 19.0000, 20.0000, 125.0000, 0.0000, 'Standard Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(157, 1, 'IE', 0, '', '', '', 'package_weight', 0.0000, 0.2500, 5.2500, 0.0000, 'Registered Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(158, 1, 'IE', 0, '', '', '', 'package_weight', 0.2500, 0.5000, 5.7500, 0.0000, 'Registered Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(159, 1, 'IE', 0, '', '', '', 'package_weight', 0.5000, 1.0000, 6.7500, 0.0000, 'Registered Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(160, 1, 'IE', 0, '', '', '', 'package_weight', 1.0000, 1.5000, 9.5000, 0.0000, 'Registered Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(161, 1, 'IE', 0, '', '', '', 'package_weight', 1.5000, 2.0000, 12.0000, 0.0000, 'Registered Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(162, 1, 'IE', 0, '', '', '', 'package_weight', 2.0000, 2.5000, 12.7500, 0.0000, 'Registered Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(163, 1, 'IE', 0, '', '', '', 'package_weight', 2.5000, 3.0000, 13.7500, 0.0000, 'Registered Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(164, 1, 'IE', 0, '', '', '', 'package_weight', 3.0000, 3.5000, 15.2500, 0.0000, 'Registered Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(165, 1, 'IE', 0, '', '', '', 'package_weight', 3.5000, 4.0000, 16.2500, 0.0000, 'Registered Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(166, 1, 'IE', 0, '', '', '', 'package_weight', 4.0000, 4.5000, 17.2500, 0.0000, 'Registered Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(167, 1, 'IE', 0, '', '', '', 'package_weight', 4.5000, 5.0000, 18.2500, 0.0000, 'Registered Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(168, 1, 'IE', 0, '', '', '', 'package_weight', 5.0000, 6.0000, 19.2500, 0.0000, 'Registered Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(169, 1, 'IE', 0, '', '', '', 'package_weight', 6.0000, 7.0000, 20.2500, 0.0000, 'Registered Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(170, 1, 'IE', 0, '', '', '', 'package_weight', 7.0000, 8.0000, 21.2500, 0.0000, 'Registered Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(171, 1, 'IE', 0, '', '', '', 'package_weight', 8.0000, 9.0000, 22.2500, 0.0000, 'Registered Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(172, 1, 'IE', 0, '', '', '', 'package_weight', 9.0000, 10.0000, 23.2500, 0.0000, 'Registered Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(173, 1, 'IE', 0, '', '', '', 'package_weight', 10.0000, 11.0000, 24.2500, 0.0000, 'Registered Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(174, 1, 'IE', 0, '', '', '', 'package_weight', 11.0000, 12.0000, 25.2500, 0.0000, 'Registered Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(175, 1, 'IE', 0, '', '', '', 'package_weight', 12.0000, 13.0000, 26.2500, 0.0000, 'Registered Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(176, 1, 'IE', 0, '', '', '', 'package_weight', 13.0000, 14.0000, 27.2500, 0.0000, 'Registered Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(177, 1, 'IE', 0, '', '', '', 'package_weight', 14.0000, 15.0000, 28.2500, 0.0000, 'Registered Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(178, 1, 'IE', 0, '', '', '', 'package_weight', 15.0000, 16.0000, 29.2500, 0.0000, 'Registered Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(179, 1, 'IE', 0, '', '', '', 'package_weight', 16.0000, 17.0000, 30.2500, 0.0000, 'Registered Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(180, 1, 'IE', 0, '', '', '', 'package_weight', 17.0000, 18.0000, 31.2500, 0.0000, 'Registered Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(181, 1, 'IE', 0, '', '', '', 'package_weight', 18.0000, 19.0000, 32.2500, 0.0000, 'Registered Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(182, 1, 'IE', 0, '', '', '', 'package_weight', 19.0000, 20.0000, 33.2500, 0.0000, 'Registered Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(183, 1, 'IE', 0, '', '', '', 'package_weight', 0.0000, 0.2500, 7.0500, 0.0000, 'Express Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(184, 1, 'IE', 0, '', '', '', 'package_weight', 0.2500, 0.5000, 8.3500, 0.0000, 'Express Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(185, 1, 'IE', 0, '', '', '', 'package_weight', 0.5000, 1.0000, 10.4500, 0.0000, 'Express Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(186, 1, 'IE', 0, '', '', '', 'package_weight', 1.0000, 1.5000, 14.1000, 0.0000, 'Express Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(187, 1, 'IE', 0, '', '', '', 'package_weight', 1.5000, 2.0000, 14.1000, 0.0000, 'Express Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(188, 1, 'IE', 0, '', '', '', 'package_weight', 2.0000, 2.5000, 15.1000, 0.0000, 'Express Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(189, 1, 'IE', 0, '', '', '', 'package_weight', 2.5000, 3.0000, 16.1000, 0.0000, 'Express Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(190, 1, 'IE', 0, '', '', '', 'package_weight', 3.0000, 3.5000, 17.1000, 0.0000, 'Express Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(191, 1, 'IE', 0, '', '', '', 'package_weight', 3.5000, 4.0000, 18.1000, 0.0000, 'Express Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(192, 1, 'IE', 0, '', '', '', 'package_weight', 4.0000, 4.5000, 19.1000, 0.0000, 'Express Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(193, 1, 'IE', 0, '', '', '', 'package_weight', 4.5000, 5.0000, 20.1000, 0.0000, 'Express Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(194, 1, 'IE', 0, '', '', '', 'package_weight', 5.0000, 6.0000, 21.1000, 0.0000, 'Express Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(195, 1, 'IE', 0, '', '', '', 'package_weight', 6.0000, 7.0000, 22.1000, 0.0000, 'Express Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(196, 1, 'IE', 0, '', '', '', 'package_weight', 7.0000, 8.0000, 23.1000, 0.0000, 'Express Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(197, 1, 'IE', 0, '', '', '', 'package_weight', 8.0000, 9.0000, 24.1000, 0.0000, 'Express Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(198, 1, 'IE', 0, '', '', '', 'package_weight', 9.0000, 10.0000, 25.1000, 0.0000, 'Express Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(199, 1, 'IE', 0, '', '', '', 'package_weight', 10.0000, 11.0000, 26.1000, 0.0000, 'Express Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(200, 1, 'IE', 0, '', '', '', 'package_weight', 11.0000, 12.0000, 27.1000, 0.0000, 'Express Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(201, 1, 'IE', 0, '', '', '', 'package_weight', 12.0000, 13.0000, 28.1000, 0.0000, 'Express Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(202, 1, 'IE', 0, '', '', '', 'package_weight', 13.0000, 14.0000, 29.1000, 0.0000, 'Express Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(203, 1, 'IE', 0, '', '', '', 'package_weight', 14.0000, 15.0000, 30.1000, 0.0000, 'Express Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(204, 1, 'IE', 0, '', '', '', 'package_weight', 15.0000, 16.0000, 31.1000, 0.0000, 'Express Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(205, 1, 'IE', 0, '', '', '', 'package_weight', 16.0000, 17.0000, 32.1000, 0.0000, 'Express Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(206, 1, 'IE', 0, '', '', '', 'package_weight', 17.0000, 18.0000, 33.1000, 0.0000, 'Express Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(207, 1, 'IE', 0, '', '', '', 'package_weight', 18.0000, 19.0000, 34.1000, 0.0000, 'Express Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(208, 1, 'IE', 0, '', '', '', 'package_weight', 19.0000, 20.0000, 35.1000, 0.0000, 'Express Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(209, 1, 'IE', 0, '', '', '', 'package_weight', 0.0000, 0.2500, 15.9000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(210, 1, 'IE', 0, '', '', '', 'package_weight', 0.2500, 0.5000, 22.8500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(211, 1, 'IE', 0, '', '', '', 'package_weight', 0.5000, 1.0000, 22.8500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(212, 1, 'IE', 0, '', '', '', 'package_weight', 1.0000, 1.5000, 25.0000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(213, 1, 'IE', 0, '', '', '', 'package_weight', 1.5000, 2.0000, 25.0000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(214, 1, 'IE', 0, '', '', '', 'package_weight', 2.0000, 2.5000, 27.0000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(215, 1, 'IE', 0, '', '', '', 'package_weight', 2.5000, 3.0000, 28.9000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(216, 1, 'IE', 0, '', '', '', 'package_weight', 3.0000, 3.5000, 30.8500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(217, 1, 'IE', 0, '', '', '', 'package_weight', 3.5000, 4.0000, 32.9000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(218, 1, 'IE', 0, '', '', '', 'package_weight', 4.0000, 4.5000, 34.8500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(219, 1, 'IE', 0, '', '', '', 'package_weight', 4.5000, 5.0000, 36.8500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(220, 1, 'IE', 0, '', '', '', 'package_weight', 5.0000, 6.0000, 38.8500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(221, 1, 'IE', 0, '', '', '', 'package_weight', 6.0000, 7.0000, 40.8500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(222, 1, 'IE', 0, '', '', '', 'package_weight', 7.0000, 8.0000, 42.8500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(223, 1, 'IE', 0, '', '', '', 'package_weight', 8.0000, 9.0000, 44.8500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(224, 1, 'IE', 0, '', '', '', 'package_weight', 9.0000, 10.0000, 46.8500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(225, 1, 'IE', 0, '', '', '', 'package_weight', 10.0000, 11.0000, 48.8500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(226, 1, 'IE', 0, '', '', '', 'package_weight', 11.0000, 12.0000, 50.8500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(227, 1, 'IE', 0, '', '', '', 'package_weight', 12.0000, 13.0000, 52.8500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(228, 1, 'IE', 0, '', '', '', 'package_weight', 13.0000, 14.0000, 54.8500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(229, 1, 'IE', 0, '', '', '', 'package_weight', 14.0000, 15.0000, 56.8500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(230, 1, 'IE', 0, '', '', '', 'package_weight', 15.0000, 16.0000, 58.8500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(231, 1, 'IE', 0, '', '', '', 'package_weight', 16.0000, 17.0000, 60.8500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(232, 1, 'IE', 0, '', '', '', 'package_weight', 17.0000, 18.0000, 62.8500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(233, 1, 'IE', 0, '', '', '', 'package_weight', 18.0000, 19.0000, 64.9500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(234, 1, 'IE', 0, '', '', '', 'package_weight', 19.0000, 20.0000, 66.8500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(235, 1, 'GB', 0, '', '', '', 'package_weight', 0.0000, 0.2500, 26.3500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(236, 1, 'GB', 0, '', '', '', 'package_weight', 0.2500, 0.5000, 42.1000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(237, 1, 'GB', 0, '', '', '', 'package_weight', 0.5000, 1.0000, 46.0500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(238, 1, 'GB', 0, '', '', '', 'package_weight', 1.0000, 1.5000, 50.0500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(239, 1, 'GB', 0, '', '', '', 'package_weight', 1.5000, 2.0000, 54.0000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(240, 1, 'GB', 0, '', '', '', 'package_weight', 2.0000, 2.5000, 57.8500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(241, 1, 'GB', 0, '', '', '', 'package_weight', 2.5000, 3.0000, 61.8500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(242, 1, 'GB', 0, '', '', '', 'package_weight', 3.0000, 3.5000, 65.8500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(243, 1, 'GB', 0, '', '', '', 'package_weight', 3.5000, 4.0000, 69.7000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(244, 1, 'GB', 0, '', '', '', 'package_weight', 4.0000, 4.5000, 73.7000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(245, 1, 'GB', 0, '', '', '', 'package_weight', 4.5000, 5.0000, 77.5000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(246, 1, 'GB', 0, '', '', '', 'package_weight', 5.0000, 6.0000, 81.5000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(247, 1, 'GB', 0, '', '', '', 'package_weight', 6.0000, 7.0000, 85.5000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(248, 1, 'GB', 0, '', '', '', 'package_weight', 7.0000, 8.0000, 89.5000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(249, 1, 'GB', 0, '', '', '', 'package_weight', 8.0000, 9.0000, 93.5000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(250, 1, 'GB', 0, '', '', '', 'package_weight', 9.0000, 10.0000, 97.5000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(251, 1, 'GB', 0, '', '', '', 'package_weight', 10.0000, 11.0000, 101.5000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(252, 1, 'GB', 0, '', '', '', 'package_weight', 11.0000, 12.0000, 105.5000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(253, 1, 'GB', 0, '', '', '', 'package_weight', 12.0000, 13.0000, 109.5000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(254, 1, 'GB', 0, '', '', '', 'package_weight', 13.0000, 14.0000, 113.5000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(255, 1, 'GB', 0, '', '', '', 'package_weight', 14.0000, 15.0000, 117.5000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(256, 1, 'GB', 0, '', '', '', 'package_weight', 15.0000, 16.0000, 121.5000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(257, 1, 'GB', 0, '', '', '', 'package_weight', 16.0000, 17.0000, 125.5000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(258, 1, 'GB', 0, '', '', '', 'package_weight', 17.0000, 18.0000, 129.5000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(259, 1, 'GB', 0, '', '', '', 'package_weight', 18.0000, 19.0000, 133.5000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(260, 1, 'GB', 0, '', '', '', 'package_weight', 19.0000, 20.0000, 137.5000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(261, 1, 'EU', 0, '', '', '', 'package_weight', 0.0000, 0.2500, 32.3500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(262, 1, 'EU', 0, '', '', '', 'package_weight', 0.2500, 0.5000, 52.7000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(263, 1, 'EU', 0, '', '', '', 'package_weight', 0.5000, 1.0000, 59.2000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(264, 1, 'EU', 0, '', '', '', 'package_weight', 1.0000, 1.5000, 65.8500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(265, 1, 'EU', 0, '', '', '', 'package_weight', 1.5000, 2.0000, 72.4000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(266, 1, 'EU', 0, '', '', '', 'package_weight', 2.0000, 2.5000, 79.0000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(267, 1, 'EU', 0, '', '', '', 'package_weight', 2.5000, 3.0000, 85.5500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(268, 1, 'EU', 0, '', '', '', 'package_weight', 3.0000, 3.5000, 92.1000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(269, 1, 'EU', 0, '', '', '', 'package_weight', 3.5000, 4.0000, 98.7000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(270, 1, 'EU', 0, '', '', '', 'package_weight', 4.0000, 4.5000, 105.2500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(271, 1, 'EU', 0, '', '', '', 'package_weight', 4.5000, 5.0000, 111.8500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(272, 1, 'EU', 0, '', '', '', 'package_weight', 5.0000, 6.0000, 122.4000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(273, 1, 'EU', 0, '', '', '', 'package_weight', 6.0000, 7.0000, 132.9500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(274, 1, 'EU', 0, '', '', '', 'package_weight', 7.0000, 8.0000, 133.5000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(275, 1, 'EU', 0, '', '', '', 'package_weight', 8.0000, 9.0000, 144.0500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(276, 1, 'EU', 0, '', '', '', 'package_weight', 9.0000, 10.0000, 154.6000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(277, 1, 'EU', 0, '', '', '', 'package_weight', 10.0000, 11.0000, 155.1500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(278, 1, 'EU', 0, '', '', '', 'package_weight', 11.0000, 12.0000, 165.7000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(279, 1, 'EU', 0, '', '', '', 'package_weight', 12.0000, 13.0000, 176.2000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(280, 1, 'EU', 0, '', '', '', 'package_weight', 13.0000, 14.0000, 186.7500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(281, 1, 'EU', 0, '', '', '', 'package_weight', 14.0000, 15.0000, 197.3000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(282, 1, 'EU', 0, '', '', '', 'package_weight', 15.0000, 16.0000, 207.8500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(283, 1, 'EU', 0, '', '', '', 'package_weight', 16.0000, 17.0000, 218.4000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(284, 1, 'EU', 0, '', '', '', 'package_weight', 17.0000, 18.0000, 228.9500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(285, 1, 'EU', 0, '', '', '', 'package_weight', 18.0000, 19.0000, 239.5000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(286, 1, 'EU', 0, '', '', '', 'package_weight', 19.0000, 20.0000, 250.0500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(287, 1, '!E', 0, '', '', '', 'package_weight', 0.0000, 0.2500, 26.7500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(288, 1, '!E', 0, '', '', '', 'package_weight', 0.2500, 0.5000, 43.5400, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(289, 1, '!E', 0, '', '', '', 'package_weight', 0.5000, 1.0000, 48.9300, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(290, 1, '!E', 0, '', '', '', 'package_weight', 1.0000, 1.5000, 54.4000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(291, 1, '!E', 0, '', '', '', 'package_weight', 1.5000, 2.0000, 59.8400, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(292, 1, '!E', 0, '', '', '', 'package_weight', 2.0000, 2.5000, 65.2700, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(293, 1, '!E', 0, '', '', '', 'package_weight', 2.5000, 3.0000, 70.7000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(294, 1, '!E', 0, '', '', '', 'package_weight', 3.0000, 3.5000, 76.1300, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(295, 1, '!E', 0, '', '', '', 'package_weight', 3.5000, 4.0000, 81.5600, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(296, 1, '!E', 0, '', '', '', 'package_weight', 4.0000, 4.5000, 87.0000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(297, 1, '!E', 0, '', '', '', 'package_weight', 4.5000, 5.0000, 92.4300, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(298, 1, '!E', 0, '', '', '', 'package_weight', 5.0000, 6.0000, 101.1500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(299, 1, '!E', 0, '', '', '', 'package_weight', 6.0000, 7.0000, 109.8700, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(300, 1, '!E', 0, '', '', '', 'package_weight', 7.0000, 8.0000, 118.5900, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(301, 1, '!E', 0, '', '', '', 'package_weight', 8.0000, 9.0000, 127.3100, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(302, 1, '!E', 0, '', '', '', 'package_weight', 9.0000, 10.0000, 136.0300, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(303, 1, '!E', 0, '', '', '', 'package_weight', 10.0000, 11.0000, 144.7500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(304, 1, '!E', 0, '', '', '', 'package_weight', 11.0000, 12.0000, 153.4700, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(305, 1, '!E', 0, '', '', '', 'package_weight', 12.0000, 13.0000, 162.1900, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(306, 1, '!E', 0, '', '', '', 'package_weight', 13.0000, 14.0000, 170.9100, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(307, 1, '!E', 0, '', '', '', 'package_weight', 14.0000, 15.0000, 179.6300, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(308, 1, '!E', 0, '', '', '', 'package_weight', 15.0000, 16.0000, 188.3500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(309, 1, '!E', 0, '', '', '', 'package_weight', 16.0000, 17.0000, 197.0700, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(310, 1, '!E', 0, '', '', '', 'package_weight', 17.0000, 18.0000, 205.7900, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(311, 1, '!E', 0, '', '', '', 'package_weight', 18.0000, 19.0000, 214.5100, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(312, 1, '!E', 0, '', '', '', 'package_weight', 19.0000, 20.0000, 223.2300, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(313, 1, '0', 0, '', '', '', 'package_weight', 0.0000, 0.2500, 29.3000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(314, 1, '0', 0, '', '', '', 'package_weight', 0.2500, 0.5000, 49.2000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(315, 1, '0', 0, '', '', '', 'package_weight', 0.5000, 1.0000, 57.9000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(316, 1, '0', 0, '', '', '', 'package_weight', 1.0000, 1.5000, 66.6000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(317, 1, '0', 0, '', '', '', 'package_weight', 1.5000, 2.0000, 75.3000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(318, 1, '0', 0, '', '', '', 'package_weight', 2.0000, 2.5000, 84.1000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(319, 1, '0', 0, '', '', '', 'package_weight', 2.5000, 3.0000, 92.8000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(320, 1, '0', 0, '', '', '', 'package_weight', 3.0000, 3.5000, 101.5000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(321, 1, '0', 0, '', '', '', 'package_weight', 3.5000, 4.0000, 110.3000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(322, 1, '0', 0, '', '', '', 'package_weight', 4.0000, 4.5000, 119.0000, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(323, 1, '0', 0, '', '', '', 'package_weight', 4.5000, 5.0000, 127.7500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(324, 1, '0', 0, '', '', '', 'package_weight', 5.0000, 6.0000, 140.7500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(325, 1, '0', 0, '', '', '', 'package_weight', 6.0000, 7.0000, 153.7500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(326, 1, '0', 0, '', '', '', 'package_weight', 7.0000, 8.0000, 166.7500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(327, 1, '0', 0, '', '', '', 'package_weight', 8.0000, 9.0000, 179.7500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(328, 1, '0', 0, '', '', '', 'package_weight', 9.0000, 10.0000, 192.7500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(329, 1, '0', 0, '', '', '', 'package_weight', 10.0000, 11.0000, 205.7500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(330, 1, '0', 0, '', '', '', 'package_weight', 11.0000, 12.0000, 218.7500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(331, 1, '0', 0, '', '', '', 'package_weight', 12.0000, 13.0000, 231.7500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(332, 1, '0', 0, '', '', '', 'package_weight', 13.0000, 14.0000, 244.7500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(333, 1, '0', 0, '', '', '', 'package_weight', 14.0000, 15.0000, 257.7500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(334, 1, '0', 0, '', '', '', 'package_weight', 15.0000, 16.0000, 270.7500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(335, 1, '0', 0, '', '', '', 'package_weight', 16.0000, 17.0000, 283.7500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(336, 1, '0', 0, '', '', '', 'package_weight', 17.0000, 18.0000, 296.7500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(337, 1, '0', 0, '', '', '', 'package_weight', 18.0000, 19.0000, 309.7500, 0.0000, 'Courier Post');
INSERT INTO `{$this->getTable('shipping_anpost')}` VALUES(338, 1, '0', 0, '', '', '', 'package_weight', 19.0000, 20.0000, 322.7500, 0.0000, 'Courier Post');



DELETE FROM `{$this->getTable('directory_country_region')}` WHERE country_id = 'IE';

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'AN', 'Co. Antrim');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'AR', 'Co. Armagh');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'CN', 'Co. Cavan');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'CW', 'Co. Carlow');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'CE', 'Co. Clare');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'CK', 'Co. Cork');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'DY', 'Co. Derry');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'DL', 'Co. Donegal');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'DW', 'Co. Down');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D1', 'Dublin 1');
INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D2', 'Dublin 2');
INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D3', 'Dublin 3');
INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D4', 'Dublin 4');
INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D5', 'Dublin 5');
INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D6', 'Dublin 6');
INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D7', 'Dublin 7');
INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D8', 'Dublin 8');
INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D9', 'Dublin 9');
INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D10', 'Dublin 10');
INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D11', 'Dublin 11');
INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D12', 'Dublin 12');
INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D13', 'Dublin 13');
INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D14', 'Dublin 14');
INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D15', 'Dublin 15');
INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D16', 'Dublin 16');
INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D17', 'Dublin 17');
INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D18', 'Dublin 18');
INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D19', 'Dublin 19');
INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D20', 'Dublin 20');
INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D21', 'Dublin 21');
INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D22', 'Dublin 22');
INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D23', 'Dublin 23');
INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'D24', 'Dublin 24');
INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'DN', 'Co. Dublin');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'FE', 'Co. Fermanagh');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'GY', 'Co. Galway');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'KY', 'Co. Kerry');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'KE', 'Co. Kildare');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'KK', 'Co. Kilkenny');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'LS', 'Co. Laois');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'LM', 'Co. Leitrim');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'LK', 'Co. Limerick');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'LD', 'Co. Longford');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'LH', 'Co. Louth');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'MO', 'Co. Mayo');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'MH', 'Co. Meath');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'MN', 'Co. Monaghan');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'OY', 'Co. Offaly');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'RN', 'Co. Roscommon');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'SO', 'Co. Sligo');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'TP', 'Co. Tipperary');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'TY', 'Co. Tyrone');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'WD', 'Co. Waterford');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'WX', 'Co. Wexford');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'WH', 'Co. Westmeath');

INSERT INTO `{$this->getTable('directory_country_region')}` (`country_id`, `code`, `default_name`) VALUES ('IE', 'WW', 'Co. Wicklow');




   ");

$installer->endSetup();


