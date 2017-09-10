-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 21, 2017 at 01:08 AM
-- Server version: 5.5.51-38.2
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vantage_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_info`
--

CREATE TABLE IF NOT EXISTS `about_info` (
  `id` int(11) NOT NULL,
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `subject` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'short note about to show on front div',
  `type` int(11) NOT NULL COMMENT '1=about company 2=resort 3=vip resort 4=other facility',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1=active 0=blocked',
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `about_info`
--

INSERT INTO `about_info` (`id`, `details`, `image`, `subject`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, '<p class="MsoNormal" style="text-align: center;"><span style="font-size: 12px; font-family: Arial;">We practice only drup-free treatments without drugs or surgery.</span></p><p class="MsoNormal" style="text-align: center;"><span style="font-family: Arial;"><span style="font-size: 12px;">Vantage Natural Health Resort, based in Pattaya, is an innovative practice for a complete aproach to health and well-being.&nbsp;</span><span style="font-size: 12px;">As well as treating whole body we offer a successful program which enables people with diabetes type 2 to live a drug free and healthy life.</span></span></p><p class="MsoNormal" style="text-align: center;"><span style="font-size: 12px; font-family: Arial;">This is a different approach from conventional treatments, which tend to treat the symptoms of the disease, rather than to find and eliminate the cause.</span></p><p class="MsoNormal" style="text-align: center;"><span style="font-size: 12px; font-family: Arial;">Experience shows us that the only way the body can be truly healed through a systematic approach which first and foremost include detoxification, nutritional programs and physical activities.</span></p><p class="MsoNormal"></p><p style="box-sizing: border-box; margin: 0px 0px 10px; line-height: 1.6; color: rgb(0, 0, 0); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px;"></p><p></p><p class="MsoNormal" style="text-align: center; box-sizing: border-box; margin: 0px 0px 10px; line-height: 1.6; color: rgb(0, 0, 0); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="font-size: 12px; font-family: Arial;">For clients requiring or desiring to stay with us while undertaking therapy or cleansing protocols The Vantage Resort will ensure you have everything needed for a recuperating relaxing time. This includes an organic healthy food restaurant, detox bar, sauna and fitness centre.</span></p><p class="MsoNormal" style="text-align: center; box-sizing: border-box; margin: 0px 0px 10px; line-height: 1.6; color: rgb(0, 0, 0); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><span style="font-size: 12px; font-family: Arial;">All the facilities are designed not only for patients’\r\nconvenience, but serve the treatment purpose: Vantage Resort is located at a\r\nquiet, clean area of Pattaya, eliminating the fumes and dust; Vantage\r\nRestaurant serves the organic halal food, according to the diet plan; and the\r\nVantage Detox bar provides unique healthy cocktails and herbal smoothies, made\r\nof organic fresh fruits and vegetables, to give the boost and detox the body.</span></p>', '', 'Vantage Natural Health Resort, based in Pattaya, is an innovative practice for a complete approach to health and well-being.  As well as treating whole body we offer a successful program which enables people with diabetes type 2 to live a drug free and healthy life. \r\n', 1, 1, '2016-12-12', '2017-01-10 12:44:22'),
(2, '<p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">WELCOME to VANTAGE RESORT &amp; SPA where you will feel just\nat home</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><o:p style="font-family: Arial;"><span style="font-size: 12px;">&nbsp;</span></o:p></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Get 5-star services at 3-star cost</span><span style="font-size: 12px; font-family: Arial;">&nbsp;</span></p><ul><li style="text-align: left; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">In our Organic Restaurant, you can enjoy our Halal food.</span></li><li style="text-align: left; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">You can pray in your room or can walk only 5 minutes to pray\nin</span></li><li style="text-align: left; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Masjid Jamiul Islam Mosque.</span></li><li style="text-align: left; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Our Hotel is non-alcoholic.</span></li><li style="text-align: left; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Smoking is allowed only in a separate area.</span></li></ul><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><o:p style="font-family: Arial;"><span style="font-size: 12px;">&nbsp;</span></o:p></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">The red thread to Vantage Resort can be described with two\nkey words:</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 14px; font-weight: bold;">Health and Wellness.</span></p>', '', 'Vantage is the first and the best muslim hotel in Pattaya.\nWELCOME to VANTAGE RESORT & SPA where you can find yourself as you are at home. ', 2, 1, NULL, '2017-01-10 18:04:51'),
(3, '<p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-weight: bold;">VIP Resort</span></p>', '', 'VIP Resort', 3, 1, NULL, '2017-01-10 17:56:45'),
(4, '<p class="MsoNoSpacing" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 14px; font-weight: bold;">FACILITATING WITH ALL YOU NEED&nbsp;</span></p><span style="font-size: 12px;">\n\n</span><p class="MsoNoSpacing" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px; font-weight: bold;">Superior room features:</span></p><ul><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Single (king-size bed) or\ndouble room</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Kitchen cabinet, dining zone</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Balcony with variety of views</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Working desk and dressing table</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Electronic door lock</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">24 hours’ room service</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Complimentary Wi-Fi</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">32/41 inches TV-set</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Satellite/Cable TV</span></li></ul><span style="font-size: 12px;">\n\n</span><p class="MsoNoSpacing" style="line-height: 1.2;"><o:p style="font-family: Arial;"><span style="font-size: 12px;">&nbsp;</span></o:p></p><span style="font-size: 12px;">\n\n</span><p class="MsoNoSpacing" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px; font-weight: bold;">Personal care products:</span>\n<br class="Apple-interchange-newline"></p><ul><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Shower and sink</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Water heating</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Free toiletries</span></li></ul><p class="MsoNoSpacing" style="line-height: 1.2;"><span style="font-family: Arial;"><br></span></p><p class="MsoNoSpacing" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px; font-weight: bold;">Room Equipment’s:</span></p><ul><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Wardrobe</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Bedside tables</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Electronic safe</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Aircon</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Fridge</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Hairdryer</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Jug kettle</span></li></ul><span style="font-size: 12px;">\n\n</span><p class="MsoNoSpacing" style="line-height: 1.2;"><o:p style="font-family: Arial;"><span style="font-size: 12px;">&nbsp;</span></o:p></p><span style="font-size: 12px;">\n\n</span><p class="MsoNoSpacing" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px; font-weight: bold;">Hotel facilities:</span></p><ul><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Parking</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Sauna</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Fitness</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Swimming pool</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Taxi/Car rental</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Laundry</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Business corner</span></li></ul><span style="font-size: 12px;">\n\n</span><p class="MsoNoSpacing" style="line-height: 1.2;"><o:p style="font-family: Arial;"><span style="font-size: 12px;">&nbsp;</span></o:p></p><span style="font-size: 12px;">\n\n</span><p class="MsoNoSpacing" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px; font-weight: bold;">Refreshments:</span></p><ul><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Free drinking water</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Free coffee/tea</span></li></ul><p class="MsoNoSpacing" style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">&nbsp;</span></p><span style="font-size: 12px;">\n\n</span><p class="MsoNoSpacing" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px; font-weight: bold;">Executive and Suit room special features:</span></p><ul><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">sound mini-system &nbsp; &nbsp; &nbsp; </span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">coffee maker &nbsp; &nbsp; &nbsp; </span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">electronic scale &nbsp; </span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">full-size bath(44 sqm rooms)</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">bathrobe and slippers &nbsp;</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">fresh newspaper &nbsp;</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">iron and desk &nbsp; &nbsp; &nbsp;</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">daily fresh Thai</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">organic fruits</span></li></ul><span style="font-size: 12px;">\n\n</span><p class="MsoNoSpacing" style="line-height: 1.2;"><o:p style="font-family: Arial;"><span style="font-size: 12px;">&nbsp;</span></o:p></p><span style="font-size: 12px;">\n\n</span><p class="MsoNoSpacing" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px; font-weight: bold;">Available room sizes:</span></p><ul><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Superior (37 sqm)</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Executive (37/44 sqm)</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Suite (47/57 sqm)</span></li></ul>', '', 'Resort Facilities', 4, 1, NULL, '2017-01-10 15:43:40'),
(5, '<p style="line-height: 1.2;"><span style="font-family: Arial;"><br></span></p><table class="table table-bordered"><tbody><tr><td><span style="font-family: Arial; font-size: 12px;">6-00 AM&nbsp;</span></td><td><span style="font-family: Arial; font-size: 12px;">wake-up and drink 1 glass of Vantage formulated\nspecial water</span></td></tr><tr><td><span style="font-family: Arial; font-size: 12px;">6-40 AM&nbsp;</span></td><td><span style="font-family: Arial; font-size: 12px;">Organic green tea or Organic coffee with Coconut oil</span></td></tr><tr><td><span style="font-family: Arial; font-size: 12px;">7-00 AM&nbsp;</span></td><td><span style="font-family: Arial; font-size: 12px;">20min. Special fitness program</span></td></tr><tr><td><span style="font-family: Arial; font-size: 12px;">8-30 AM&nbsp;</span></td><td><span style="font-family: Arial; font-size: 12px;">Breakfast/Organic Herbal- protein smoothies</span></td></tr><tr><td><span style="font-family: Arial; font-size: 12px;">10-30 AM&nbsp;</span></td><td><p class="MsoNormal" style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Detox/ Cleansing programs. In between Organic Green tea with\nCoconut oil&nbsp;</span><span style="font-family: Arial; font-size: 12px; background-color: transparent;">Launch. After launch 30-40 mins rest/ short\nsleep(14-00---15-00PM)</span></p></td></tr><tr><td><span style="font-family: Arial; font-size: 12px;">13-00 PM&nbsp;</span></td><td><span style="font-family: Arial; font-size: 12px;">Organic mixed vegetable/ fruit juices according to\nhealth condition with</span></td></tr><tr><td><span style="font-family: Arial; font-size: 12px;">16-00 PM&nbsp;</span></td><td><p class="MsoNormal" style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Flaxseed oil. (Free activities in Vantage resort: libraries,\nTable Tennis, Badminton, Basketball, Gym)</span></p></td></tr><tr><td><span style="font-family: Arial; font-size: 12px;">18-00 PM&nbsp;</span></td><td><p class="MsoNormal" style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Dinner (After Dinner free activities: Saunas, Gym,\nswimming,Massages in Vantage resort.Sea beach, city tour.)</span></p></td></tr><tr><td><span style="font-family: Arial; font-size: 12px;">21-00 PM&nbsp;</span></td><td><span style="font-family: Arial; font-size: 12px;">Go to bed!</span></td></tr></tbody></table><p style="line-height: 1.2;"><br></p>', '', 'timeline', 5, 1, NULL, '2017-01-10 07:19:31'),
(6, '<p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 14px; font-weight: bold;">BANGKOK-PATTAYA CONNECTION&nbsp;</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">The easiest way to reach Vantage Resort will be by\nBangkok-Pattaya motorway, taking a side turn marked with Vantage sign within\ncity limit. Just let the driver to follow the Vantage direction boards along\nthe road and 10 minutes later we will welcome you at the lobby.&nbsp;</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;"><br></span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 14px; font-weight: bold;">COMING FROM PATTAYA CITY CENTRE (SUKHUMVIT)&nbsp;</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Follow the Sukhumvit road until you get opposite the Index\nLiving Mall. Take a turn into Soi Siam Country Club and follow the direction\nboards of Vantage Resort until you reach Soi 7. Take a left turn, then, after\nyou get opposite Eastiny hotel, the right one. 100 meters later take one more\nright turn and here you are! &nbsp;</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;"><br></span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 14px; font-weight: bold;">TRANSPORT FACILITY&nbsp;</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">If you want the easiest way to reach Vantage Resort, just\ngive us a call or send us an e-mail.</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">By our vehicle you will be here in no time.&nbsp;</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;"><br></span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 14px; font-weight: bold;">CONTACT US</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial;"><span style="font-size: 12px;">Address: 24/42, Soi Mabsong Kaimuay 17/1, Mabsong</span><span style="font-size: 12px;">&nbsp; </span><span style="font-size: 12px;">Kaimuay road, Moo 5, Nongprue, Banglamung,\nChonburi, Thailand, 20150 </span></span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Phone: +66 038-405-383</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Fax: +66 038-405-384</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Cell: 094-326-7766, 094-326-7722</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">E-mail: contact@vantage-resort.com</span></p><p style="line-height: 1.2;"><span style="font-size: 12px;"></span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Website: www.vantage-resort.com</span></p>', '', 'loccation details', 6, 1, NULL, '2017-01-08 09:32:11'),
(7, '<p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-weight: bold;"><span style="font-size: 14px; font-family: Arial;">COMPLETE GUIDE TOWARDS HEALTHY LIFESTYLE&nbsp;</span>\n</span><br class="Apple-interchange-newline"></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-size: 14px; font-family: Arial;"><br></span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial; font-weight: bold;"><span style="font-size: 14px;">MAKE FOOD YOUR DRUG AND DRUG YOUR FOOD</span>&nbsp;</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;"><br></span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Vantage Natural Health Resort, based in Pattaya, is the\nresult of our endless efforts to make human kind healthy without using drugs at\nall. Here in vantage we treat the symptoms of the disease, rather than to find\nand eliminate the cause.&nbsp;</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Drugs heal us in a short time but has long term health risks\nand here we offer you to make and keep healthy from inside which stays longer\nthan any other healing process.&nbsp;</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;"><br></span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-size: 14px; font-family: Arial; font-weight: bold;">‘Nature is the best healer for us as we are a part of it’</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial;"><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span><span style="font-size: 12px;">\n\n</span></span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial; font-weight: bold;">- Mr. Rahman M.D</span></p>', '', 'Vantage Natural Health Centre', 7, 1, NULL, '2017-01-08 11:48:29');

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `id` int(11) NOT NULL,
  `country` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `house_no` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `street_no` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cell` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL COMMENT '1=company address',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1=active 0=blocked',
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `country`, `city`, `house_no`, `street_no`, `others`, `phone`, `fax`, `cell`, `email`, `website`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Thailand, 20150 ', 'Moo 5, Nongprue, Banglamung, Chonburi', '24/42, Soi Mabsong Kaimuay 17/1', 'Mabsong  Kaimuay road', '', '+66 038-405-383', '+66 038-405-384', '094-326-7766__//094-326-7722', 'info@vantage-health.org', 'www.vantage-health.com', 1, 1, NULL, '2016-12-21 11:38:36');

-- --------------------------------------------------------

--
-- Table structure for table `all_pic`
--

CREATE TABLE IF NOT EXISTS `all_pic` (
  `id` int(11) NOT NULL,
  `image` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL COMMENT '1=resort 2=vip resort 3=other facility',
  `cat_id` int(11) NOT NULL,
  `room_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1=active 0=blocked',
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `all_pic`
--

INSERT INTO `all_pic` (`id`, `image`, `type`, `cat_id`, `room_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'resort_1.jpg', 1, 1, 'Resort Picture 1', 1, '2017-01-12', '2017-01-12 14:27:42'),
(2, 'vip_resort_26.jpg', 2, 2, 'Acqua Apartment 1', 1, '2017-01-12', '2017-01-12 09:52:00'),
(3, 'resort_3.jpg', 1, 1, 'Resort Picture 3', 1, '2017-01-12', '2017-01-12 14:28:39'),
(5, 'resort_5.jpg', 1, 1, 'Resort Picture 4', 1, '2017-01-12', '2017-01-12 14:29:43'),
(6, 'resort_6.jpg', 1, 1, 'Resort Picture 5', 1, '2017-01-12', '2017-01-12 14:30:07'),
(7, 'resort_7.jpg', 1, 1, 'Resort Picture 6', 1, '2017-01-12', '2017-01-12 14:30:29'),
(8, 'resort_8.jpg', 1, 1, 'Resort Picture 7', 1, '2017-01-12', '2017-01-12 14:30:56'),
(9, 'other_9.jpg', 3, 6, 'Service1', 1, '2017-01-12', '2017-01-12 14:56:46'),
(10, 'other_10.jpg', 3, 6, 'Service2', 1, '2017-01-12', '2017-01-12 14:57:51'),
(11, 'other_11.jpg', 3, 6, 'Service3', 1, '2017-01-12', '2017-01-12 14:58:37'),
(12, 'other_12.jpg', 3, 6, 'Service4', 1, '2017-01-12', '2017-01-12 14:59:18'),
(13, 'other_13.jpg', 3, 6, 'Service5', 1, '2017-01-12', '2017-01-12 15:00:29'),
(14, 'other_14.jpg', 3, 6, 'Service6', 1, '2017-01-12', '2017-01-12 15:01:12'),
(15, 'vip_resort_15.jpg', 2, 3, 'Amazan Residence 1', 1, '2017-01-12', '2017-01-12 15:12:55'),
(16, 'vip_resort_16.jpg', 2, 3, 'Amazan Residence 2', 1, '2017-01-12', '2017-01-12 15:13:22'),
(17, 'vip_resort_17.jpg', 2, 3, 'Amazan Residence 3', 1, '2017-01-12', '2017-01-12 15:13:43'),
(18, 'vip_resort_18.jpg', 2, 3, 'Amazan Residence 4', 1, '2017-01-12', '2017-01-12 15:14:02'),
(19, 'vip_resort_19.jpg', 2, 3, 'Amazan Residence 5', 1, '2017-01-12', '2017-01-12 15:14:21'),
(20, 'vip_resort_20.jpg', 2, 4, 'Penthouse 1', 1, '2017-01-12', '2017-01-12 15:16:15'),
(21, 'vip_resort_21.jpg', 2, 4, 'Penthouse 2', 1, '2017-01-12', '2017-01-12 15:16:41'),
(22, 'vip_resort_22.jpg', 2, 4, 'Penthouse 3', 1, '2017-01-12', '2017-01-12 15:17:00'),
(23, 'vip_resort_23.jpg', 2, 4, 'Penthouse 4', 1, '2017-01-12', '2017-01-12 15:40:53'),
(24, 'vip_resort_24.jpg', 2, 4, 'Penthouse 5', 1, '2017-01-12', '2017-01-12 15:41:23'),
(26, 'resort_2.jpg', 1, 1, 'Resort Picture 2', 1, '2017-01-12', '2017-01-12 09:52:05'),
(27, 'vip_resort_27.jpg', 2, 2, 'Acqua Apartment 2', 1, '2017-01-12', '2017-01-12 15:44:26'),
(28, 'vip_resort_28.jpg', 2, 2, 'Acqua Apartment 3', 1, '2017-01-12', '2017-01-12 15:45:46'),
(30, 'vip_resort_30.jpg', 2, 2, 'Acqua Apartment 4', 1, '2017-01-12', '2017-01-12 15:47:53'),
(31, 'vip_resort_31.jpg', 2, 2, 'Acqua Apartment 5', 1, '2017-01-12', '2017-01-12 15:48:31'),
(32, 'vip_resort_32.jpg', 2, 5, 'Talay Villa 1', 1, '2017-01-16', '2017-01-16 15:52:13'),
(33, 'vip_resort_33.jpg', 2, 5, 'Talay Villa 2', 1, '2017-01-16', '2017-01-16 15:53:16'),
(34, 'vip_resort_34.jpg', 2, 5, 'Talay Villa 3', 1, '2017-01-16', '2017-01-16 15:53:51'),
(35, 'vip_resort_35.jpg', 2, 5, 'Talay Villa 4', 1, '2017-01-16', '2017-01-16 15:55:04'),
(36, 'vip_resort_36.jpg', 2, 5, 'Talay Villa 5', 1, '2017-01-16', '2017-01-16 15:56:19');

-- --------------------------------------------------------

--
-- Table structure for table `company_info`
--

CREATE TABLE IF NOT EXISTS `company_info` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `facebookLink` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `googlePlusLink` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `twitterLink` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `youtubeLink` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `linkedinLink` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mailAddress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mailFrom` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `favIcon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `footerText` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `footerLink` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `footerLindAddress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `headerTitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1=active 0=blocked',
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `company_info`
--

INSERT INTO `company_info` (`id`, `name`, `facebookLink`, `googlePlusLink`, `twitterLink`, `youtubeLink`, `linkedinLink`, `mailAddress`, `mailFrom`, `contact`, `logo`, `favIcon`, `footerText`, `footerLink`, `footerLindAddress`, `headerTitle`, `website`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Vantage', '', '', '', '', '', 'info@vantage-health.org', 'information@vantage-health.org', '+66038405-383', 'logo.png', 'logo.png', '2016 Vantage. Developed by', 'Geeks n Technology', 'http://www.geeksntechnology.com', '', 'www.vantage-health.org', 1, NULL, '2017-01-10 14:35:35');

-- --------------------------------------------------------

--
-- Table structure for table `condition_table`
--

CREATE TABLE IF NOT EXISTS `condition_table` (
  `id` int(11) NOT NULL,
  `package` int(11) NOT NULL,
  `service` int(11) NOT NULL,
  `treatment` int(11) NOT NULL,
  `testimonial` int(11) NOT NULL,
  `team` int(11) NOT NULL,
  `support` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1=active 0=blocked',
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `condition_table`
--

INSERT INTO `condition_table` (`id`, `package`, `service`, `treatment`, `testimonial`, `team`, `support`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 5, 4, 5, 5, 7, 1, NULL, '2017-01-08 11:00:54');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profession` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1=admin 2=doctor 3=client',
  `contact` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `fb` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `youtube` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `googolePlus` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `office` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1=active 0=blocked',
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `profession`, `designation`, `image`, `type`, `contact`, `address`, `fb`, `mail`, `twitter`, `youtube`, `linkedin`, `googolePlus`, `office`, `details`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mr. Rakhman ', '', '', 'emp_1.jpg', 1, '', '', '', 'admin@gmail.com', '', '', '', '', '', 'Mr. Rakhman is a medical doctor. He has finished his M.D in USSR in 1987 and finished hisPh.D in cardiology 1992. From 1992 he started his electronics business in Russia.\n\nBack in 2014 he started to develop health problems such as joint pain and blood pressure. He visited doctors but it did not cure him well and he stopped taking medicines. He started his search for natural remedies and begin to study.\n', 1, NULL, '2016-12-27 04:49:28'),
(3, 'Mr. Abc', 'asd', 'asd', 'emp_3.png', 2, '123456', 'asd', '', 'doc@gmail.com', '', '', '', '', 'asd', '', 1, '2016-12-27', '2017-01-03 16:58:12'),
(4, 'client', 'asd', '', 'emp_4.jpg', 3, '123456', 'asd', '', 'user@gmail.com', '', '', '', '', '', '', 1, '2016-12-27', '2017-01-12 16:16:36'),
(5, 'client2', 'asd', '', 'emp_5.jpg', 3, '123', 'asd', '', 'client2@gmail.com', '', '', '', '', '', '', 1, '2016-12-27', '2016-12-27 12:13:42'),
(7, 'Name1', 'Profession', '', 'emp_7.jpg', 3, '01416114946', 'address123', '', 'email@gmail.com', '', '', '', '', '', '', 2, '2017-01-09', '2017-01-09 16:00:31');

-- --------------------------------------------------------

--
-- Table structure for table `gallerycategory`
--

CREATE TABLE IF NOT EXISTS `gallerycategory` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1=active 0=inactive',
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gallerycategory`
--

INSERT INTO `gallerycategory` (`id`, `name`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Fitness and Swimming', 0, 1, NULL, '2016-12-13 11:04:04'),
(2, 'Food', 0, 1, NULL, '2016-12-13 11:04:19'),
(3, 'Restaurant', 0, 1, '2017-01-08', '2017-01-08 12:28:36');

-- --------------------------------------------------------

--
-- Table structure for table `gallerypic`
--

CREATE TABLE IF NOT EXISTS `gallerypic` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT '1' COMMENT '1=active 0=inactive',
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gallerypic`
--

INSERT INTO `gallerypic` (`id`, `cat_id`, `sub_cat_id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(3, 2, 2, 'Banana Split Ice-Cream', 'gallery_2_3.jpg', 1, '2017-01-08', '2017-01-08 11:34:32'),
(4, 3, 4, 'Restaurant', 'gallery_3_4.jpg', 1, '2017-01-08', '2017-01-08 12:32:29'),
(5, 3, 4, 'Restaurant 2', 'gallery_3_5.jpg', 1, '2017-01-08', '2017-01-08 12:38:30'),
(8, 3, 5, 'wellness bar 1', 'gallery_3_8.jpg', 1, '2017-01-08', '2017-01-08 13:31:21'),
(9, 1, 7, 'Swimming', 'gallery_1_9.JPG', 1, '2017-01-08', '2017-01-08 13:33:43'),
(11, 3, 5, 'Wellness bar 2', 'gallery_3_11.jpg', 1, '2017-01-08', '2017-01-08 13:35:27'),
(12, 2, 2, 'Crepe Banana', 'gallery_2_12.jpg', 1, '2017-01-08', '2017-01-08 13:37:08'),
(13, 2, 3, 'Spices', 'gallery_2_13.jpg', 1, '2017-01-08', '2017-01-08 13:39:40'),
(14, 2, 3, 'Spaghetti Seafood', 'gallery_2_14.jpg', 1, '2017-01-08', '2017-01-08 13:40:27'),
(15, 2, 3, 'Spaghetti carbonara', 'gallery_2_15.jpg', 1, '2017-01-08', '2017-01-08 13:41:58'),
(16, 2, 10, 'Cabbage Salad', 'gallery_2_16.jpg', 1, '2017-01-10', '2017-01-10 17:41:13'),
(17, 2, 10, 'Cutlets', 'gallery_2_17.jpg', 1, '2017-01-10', '2017-01-10 17:42:24'),
(18, 2, 10, 'Ukha', 'gallery_2_18.jpg', 1, '2017-01-10', '2017-01-10 17:43:07'),
(19, 2, 10, 'Solyanka', 'gallery_2_19.jpg', 1, '2017-01-10', '2017-01-10 17:43:32'),
(20, 1, 6, 'Fitness 1', 'gallery_1_20.jpg', 1, '2017-01-10', '2017-01-10 18:10:33'),
(21, 1, 6, 'Fitness 2', 'gallery_1_21.jpg', 1, '2017-01-10', '2017-01-10 18:11:19'),
(22, 2, 1, 'Alur Vorta', 'gallery_2_22.jpg', 1, '2017-01-11', '2017-01-11 11:31:28'),
(23, 3, 5, 'Wellness Bar 3', 'gallery_3_23.jpg', 1, '2017-01-11', '2017-01-11 11:32:04'),
(24, 3, 5, 'Wellness Bar 4', 'gallery_3_24.jpg', 1, '2017-01-11', '2017-01-11 11:33:18'),
(25, 2, 1, 'Bagun Vorta', 'gallery_2_25.jpg', 1, '2017-01-11', '2017-01-11 11:33:28'),
(26, 2, 1, 'Bhuna Khichuri', 'gallery_2_26.jpg', 1, '2017-01-11', '2017-01-11 11:35:50'),
(27, 3, 4, 'Restaurant 3', 'gallery_3_27.jpg', 1, '2017-01-11', '2017-01-11 11:36:11'),
(28, 3, 4, 'Restaurant 4', 'gallery_3_28.jpg', 1, '2017-01-11', '2017-01-11 11:36:33'),
(29, 3, 4, 'Restaurant 5', 'gallery_3_29.jpg', 1, '2017-01-11', '2017-01-11 11:36:53'),
(30, 2, 1, 'Chira with yogurt', 'gallery_2_30.jpg', 1, '2017-01-11', '2017-01-11 11:37:35'),
(31, 2, 1, 'Chira', 'gallery_2_31.jpg', 1, '2017-01-11', '2017-01-11 11:38:29'),
(33, 2, 1, 'Dherosh Vaji', 'gallery_2_33.jpg', 1, '2017-01-11', '2017-01-11 11:40:48'),
(34, 2, 1, 'Dry Shemai', 'gallery_2_34.jpg', 1, '2017-01-11', '2017-01-11 11:41:38'),
(35, 2, 1, 'Egg Vuna', 'gallery_2_35.jpg', 1, '2017-01-11', '2017-01-11 11:42:17'),
(36, 2, 1, 'Fish Vuna', 'gallery_2_36.jpg', 1, '2017-01-11', '2017-01-11 11:43:00'),
(37, 2, 1, 'Korolla Vaji', 'gallery_2_37.jpg', 1, '2017-01-11', '2017-01-11 11:43:43'),
(38, 2, 1, 'Lamb Vuna', 'gallery_2_38.jpg', 1, '2017-01-11', '2017-01-11 11:44:39'),
(39, 2, 1, 'Noodles Shemai', 'gallery_2_39.jpg', 1, '2017-01-11', '2017-01-11 11:46:19'),
(40, 2, 1, 'Steam rice', 'gallery_2_40.jpg', 1, '2017-01-11', '2017-01-11 11:47:49');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_sub_cat`
--

CREATE TABLE IF NOT EXISTS `gallery_sub_cat` (
  `sub_cat_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_cat_name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery_sub_cat`
--

INSERT INTO `gallery_sub_cat` (`sub_cat_id`, `cat_id`, `sub_cat_name`, `status`) VALUES
(1, 2, 'Bangla', 1),
(2, 2, 'Desserts', 1),
(3, 2, 'Italian', 1),
(4, 3, 'Restaurants', 1),
(5, 3, 'Wellness Bar', 1),
(6, 1, 'Fitness', 1),
(7, 1, 'Swimming', 1),
(8, 2, 'Thai', 1),
(9, 2, 'Steakes', 1),
(10, 2, 'Russain', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1=user 2=doctor 3=admin 0=super admin',
  `temp_password` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1=active 0=blocked',
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `emp_id`, `email`, `password`, `type`, `temp_password`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 3, '', 1, NULL, '2017-01-03 16:49:44'),
(3, 3, 'doc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2, '', 1, '2016-12-27', '2017-01-12 17:01:35'),
(4, 4, 'user@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '', 1, '2016-12-27', '2017-01-12 16:46:31'),
(5, 5, 'client2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '', 1, '2016-12-27', '2016-12-27 12:13:42'),
(6, 6, 'xyz@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 2, '', 1, '2016-12-31', '2017-01-01 02:35:36'),
(7, 7, 'email@gmail.com', 'c33367701511b4f6020ec61ded352059', 1, '', 0, '2017-01-09', '2017-01-09 16:00:31');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE IF NOT EXISTS `package` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `subject` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'short note about this package . to show on front div',
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT '1' COMMENT '1=active 0=blocked ',
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `name`, `subject`, `details`, `status`, `created_at`, `updated_at`) VALUES
(1, '3 days/2 nights program', 'Accompanying person will get free accommodation. All other services including food will be charged as per Vantage Health Centre Pricing Policy.', '<span style="font-size: 12px; font-family: Arial;">\r\n\r\n</span><span style="font-size: 12px; font-family: Arial;">\r\n\r\n</span><span style="font-size: 12px; font-family: Arial;">\r\n\r\n</span><span style="font-size: 12px; font-family: Arial;">\r\n\r\n</span><span style="font-size: 12px; font-family: Arial;">\r\n\r\n</span><span style="font-size: 12px; font-family: Arial;">\r\n\r\n</span><span style="font-size: 12px; font-family: Arial;">\r\n\r\n</span><span style="font-size: 12px; font-family: Arial;">\r\n\r\n</span><span style="font-size: 12px; font-family: Arial;">\r\n\r\n</span><span style="font-size: 12px; font-family: Arial;">\r\n\r\n</span><span style="font-size: 12px; font-family: Arial;">\r\n\r\n</span><span style="font-size: 12px; font-family: Arial;">\r\n\r\n</span><span style="font-size: 12px; font-family: Arial;">\r\n\r\n</span><ul><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Free accommodation in Vantage resort with one\r\naccompanying person</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Live blood analysis </span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">3 times Organic food according to the patient''s health\r\ncondition in Vantage Organic Healthy Food Restaurant.</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Organic Vegetables juices &amp; herbal smoothies in\r\nWellness &amp; Detox Bar</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Organic green tea &amp; coffee with coconut oil</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">supply of Alkaline &amp; Ozonized water</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Colon Hydrotherapy with Rectal Ozone insufflation </span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Ozone Sauna Therapy</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Foot Detox</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Special fitness program with Oxygen therapy</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Far Infrared sauna</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Swimming in Oxygenated water</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Stress management program </span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Sporting activities like Badminton, table tennis,\r\nbasketball etc.</span></li></ul><span style="font-size: 12px; font-family: Arial;">\r\n\r\n</span><p class="MsoNoSpacing" style="line-height: 1.2;"><o:p><span style="font-size: 12px; font-family: Arial;">&nbsp;</span></o:p></p><span style="font-size: 12px; font-family: Arial;">\r\n\r\n</span><p class="MsoNoSpacing" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial;"><span style="font-size: 12px;">***</span><span style="font-size: 12px;">&nbsp;<span style="font-weight: bold;"> </span></span><span style="font-size: 12px;"><span style="font-weight: bold;">Accompanying\r\nperson</span> will get free accommodation. All other services including food will be\r\ncharged as per Vantage Health Centre Pricing Policy.</span></span></p>', 1, '2017-01-01', '2017-01-10 07:06:57'),
(2, '6 nights/ 7 days program ', 'supplements if necessary. \r\none-day island tour and free sea beach & free city tour.', '<span style="font-size: 12px; font-family: Arial;">\r\n\r\n</span><span style="font-size: 12px; font-family: Arial;">\r\n\r\n</span><span style="font-size: 12px; font-family: Arial;">\r\n\r\n</span><span style="font-size: 12px; font-family: Arial;">\r\n\r\n</span><span style="font-size: 12px; font-family: Arial;">\r\n\r\n</span><span style="font-size: 12px; font-family: Arial;">\r\n\r\n</span><span style="font-size: 12px; font-family: Arial;">\r\n\r\n</span><span style="font-size: 12px; font-family: Arial;">\r\n\r\n</span><span style="font-size: 12px; font-family: Arial;">\r\n\r\n</span><span style="font-size: 12px; font-family: Arial;">\r\n\r\n</span><span style="font-size: 12px; font-family: Arial;">\r\n\r\n</span><span style="font-size: 12px; font-family: Arial;">\r\n\r\n</span><span style="font-size: 12px; font-family: Arial;">\r\n\r\n</span><ul><li style="text-align: left; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Free accommodation in Vantage resort with one\r\naccompanying person</span></li><li style="text-align: left; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Live blood analysis </span></li><li style="text-align: left; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">3 times Organic food according to the patient''s health\r\ncondition in Vantage Organic Healthy Food Restaurant.</span></li><li style="text-align: left; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Organic Vegetables juices &amp; herbal smoothies in\r\nWellness &amp; Detox Bar</span></li><li style="text-align: left; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Organic green tea &amp; coffee with coconut oil</span></li><li style="text-align: left; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">supply of Alkaline &amp; Ozonized water</span></li><li style="text-align: left; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Colon Hydrotherapy with Rectal Ozone insufflation </span></li><li style="text-align: left; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Ozone Sauna Therapy</span></li><li style="text-align: left; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Foot Detox</span></li><li style="text-align: left; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Special fitness program with Oxygen therapy</span></li><li style="text-align: left; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Far Infrared sauna</span></li><li style="text-align: left; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Swimming in Oxygenated water</span></li><li style="text-align: left; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Stress management program </span></li><li style="text-align: left; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Sporting activities like Badminton, table tennis,\r\nbasketball etc.</span></li><li style="text-align: left; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">supplements if necessary </span></li><li style="text-align: left; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">one-day island tour and free sea beach &amp;&nbsp;</span><span style="font-family: Arial; font-size: 12px;">free city tour</span></li></ul>', 1, '2016-12-12', '2017-01-10 13:11:05'),
(3, '14 nights/ 15 days ', '1 more Island tour + 1 Bangkok tour + whole day fishing in group of 8 people', '<span style="font-size: 12px; font-family: Arial;">\n\n</span><span style="font-size: 12px; font-family: Arial;">\n\n</span><span style="font-size: 12px; font-family: Arial;">\n\n</span><span style="font-size: 12px; font-family: Arial;">\n\n</span><span style="font-size: 12px; font-family: Arial;">\n\n</span><span style="font-size: 12px; font-family: Arial;">\n\n</span><span style="font-size: 12px; font-family: Arial;">\n\n</span><span style="font-size: 12px; font-family: Arial;">\n\n</span><span style="font-size: 12px; font-family: Arial;">\n\n</span><span style="font-size: 12px; font-family: Arial;">\n\n</span><span style="font-size: 12px; font-family: Arial;">\n\n</span><span style="font-size: 12px; font-family: Arial;">\n\n</span><span style="font-size: 12px; font-family: Arial;">\n\n</span><ul><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Free accommodation in Vantage resort with one\naccompanying person</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Live blood analysis </span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">3 times Organic food according to the patient''s health\ncondition in Vantage Organic Healthy Food Restaurant.</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Organic Vegetables juices &amp; herbal smoothies in\nWellness &amp; Detox Bar</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Organic green tea &amp; coffee with coconut oil</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">supply of Alkaline &amp; Ozonized water</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Colon Hydrotherapy with Rectal Ozone insufflation </span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Ozone Sauna Therapy</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Foot Detox</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Special fitness program with Oxygen therapy</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Far Infrared sauna</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Swimming in Oxygenated water</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Stress management program </span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Sporting activities like Badminton, table tennis,\nbasketball etc.</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">additional facilities will be:</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">supplements if necessary </span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">one-day island tour and free sea beach &amp; free city tour</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Electro acupuncture</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">1 more Island tour + 1 Bangkok tour + whole day fishing in group of 8 people</span></li></ul>', 1, '2016-12-12', '2017-01-10 07:20:08'),
(4, '30 days program ', 'Cry lipolysis to remove excess fat and 2 days’ tour to Cho Chang and 1-month supplement supply according to patient''s health condition', '<p style="line-height: 1.2;"></p><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><ul><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Free accommodation in Vantage resort with one\r\naccompanying person</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Live blood analysis </span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">3 times Organic food according to the patient''s health\r\ncondition in Vantage Organic Healthy Food Restaurant.</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Organic Vegetables juices &amp; herbal smoothies in\r\nWellness &amp; Detox Bar</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Organic green tea &amp; coffee with coconut oil</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">supply of Alkaline &amp; Ozonized water</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Colon Hydrotherapy with Rectal Ozone insufflation </span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Ozone Sauna Therapy</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Foot Detox</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Special fitness program with Oxygen therapy</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Far Infrared sauna</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Swimming in Oxygenated water</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Stress management program</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Sporting\r\nactivities like Badminton, table tennis, basketball etc</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">supplements if necessary </span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">one-day island tour and free sea beach &amp; free city tour</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Electro acupuncture</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">1 more Island tour + 1 Bangkok tour + whole day fishing in group of 8 people</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Cry lipolysis to remove excess fat</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">2 days’ tour to Cho Chang</span></li><li style="line-height: 1.2;"><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px; line-height: 107%; font-family: Arial;">1-month\r\nsupplement supply according to patient''s health condition</span></li></ul>', 1, '2016-12-12', '2017-01-10 13:23:40');

-- --------------------------------------------------------

--
-- Table structure for table `resort_category`
--

CREATE TABLE IF NOT EXISTS `resort_category` (
  `id` int(11) NOT NULL,
  `resort_cat_name` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `cat_description` text,
  `cat_image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `resort_category`
--

INSERT INTO `resort_category` (`id`, `resort_cat_name`, `type`, `cat_description`, `cat_image`, `status`) VALUES
(1, 'Resort', 1, '', '', 1),
(2, 'Acqua Apartment', 2, '', '', 1),
(3, 'Amazon Residence', 2, '<p>Amazon Residence<br></p>', 'resort_cat56.jpg', 1),
(4, 'Penthouse', 2, '', '', 1),
(5, 'Talay Villa', 2, '', '', 1),
(6, 'Resort Service', 3, '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `subject` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'short not about service to show on front div',
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1=active 0=blocked',
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`, `subject`, `details`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Technology of Cry Lipolysis', 'Cry lipolysis is a non-invasive procedure that gently and effectively removes fat from targeted areas of the body that have not responded to traditional diet and exercise. ', '<p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Cry lipolysis is a non-invasive procedure that gently and\r\neffectively removes fat from targeted areas of the body that have not responded\r\nto traditional diet and exercise.</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;"><br></span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 14px; font-weight: bold;">Candidates for Cry lipolysis:</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Cry lipolysis is not designed to remove large volumes of fat\r\nlike conventional liposuction procedures. Cry lipolysis is considered a less\r\ninvasive alternative for patients with modest-sized fat bulges.</span></p><p class="MsoNormal" style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;"><br></span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;"><span style="font-weight: bold;">Benefits:</span> Cry lipolysis is most effective in removing fat\r\nfro</span><span style="font-size: 12px; font-family: Arial;">&nbsp;</span></p><ul><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">The Abdomen</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Love Handles (Flanks)</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Back</span></li></ul><p class="MsoNormal" style="line-height: 1.2;"><o:p style="font-family: Arial;"><span style="font-size: 12px;">&nbsp;</span></o:p></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px; font-weight: bold;">As a completely non-invasive procedure, Cry lipolysis\r\nrequires:</span><span style="font-size: 12px; font-family: Arial;">&nbsp;</span></p><ul><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">No downtime </span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">No anesthesia</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">No incisions</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">No pain</span></li></ul><p class="MsoNormal" style="line-height: 1.2;"><o:p style="font-family: Arial;"><span style="font-size: 12px;">&nbsp;</span></o:p></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px; font-weight: bold;">Results:</span></p><p class="MsoNormal" align="left" style="line-height: 1.2;"><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">The results of the Cry lipolysis procedure are usually\r\nvisible two to four months after treatment, and will continue to improve for\r\nsix months.</span></p>', '', 1, '2016-12-12', '2017-01-10 14:31:26'),
(2, 'Far Infrared sauna', 'Electromagnetic waves between visible light and the microwave are called infrared waves. Far infrared wave technology has become a preferred method in the fields of healing of many adult diseases as it elevates internal body temperature to melt away old waste products.', '<p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Electromagnetic waves between visible light and the\r\nmicrowave are called infrared waves.</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><o:p style="font-family: Arial;"><span style="font-size: 12px;">&nbsp;</span></o:p></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Far infrared wave technology has become a preferred method\r\nin the fields of healing of many adult diseases as it elevates internal body\r\ntemperature to melt away old waste products.</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><o:p style="font-family: Arial;"><span style="font-size: 12px;">&nbsp;</span></o:p></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Since a FIR wave is not blocked by oxygen or nitrogen\r\nmolecules, it radiates directly onto our body and penetrate a couple of inches\r\ninto our body.</span></p><p class="MsoNormal" style="line-height: 1.2;"><o:p style="font-family: Arial;"><span style="font-size: 12px;">&nbsp;</span></o:p></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">FIR wave treatment is beneficial for:</span></p><ul><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Stress-Induced Diseases</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Chronic Diarrhea</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Numbness</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Shoulder, Back and Knee Pain</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Rheumatism</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Low Blood Pressure</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Diabetes</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Asthma</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Gout</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Cancer</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Adult Diseases</span></li></ul>', '', 1, '2016-12-12', '2017-01-10 14:11:39'),
(3, 'Ionic foot bath', 'Gentle, safe and not compromising (because it bypasses the gastro-intestinal system) non-invasive treatment of one’s body, using slight-current foot bath. Most people can benefit from an ionic detox', '<p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Gentle, safe and not compromising (because it bypasses the\r\ngastro-intestinal system) non-invasive treatment of one’s body, using\r\nslight-current foot bath. Most people can benefit from an ionic detox. It is\r\nespecially good for those suffering from GI disorders, skin conditions, fungal\r\nor yeast infections. Ionic foot bath allows to reduce the acidity, leading to\r\nalkaline body, thus creating conditions for diseases recuperation.</span></p><p class="MsoNormal" style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">\r\n\r\n</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">The ionic detox is contraindicated for those who have a\r\npacemaker and open sores or lesions on his/her feet. People with Diabetes Type\r\nI should use this therapy with precaution.</span></p>', '', 1, '2016-12-05', '2017-01-10 14:21:51'),
(4, 'VIBROACUSTIC THERAPY', 'Microvibrations are present in every living organism and play there the same role as Brownian motion in non-living environment. In the case when Brownian motion stops (e.g. when the temperature equals absolute zero) the chemical reactions stop ', '<p class="MsoNormal" style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Micro vibrations are present in every living organism and\r\nthere are two ways to compensate the deficit of Micro vibrations.</span></p><p class="MsoNormal" style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">One is from the energy of muscle activities like fitness,\r\nbreathing exercise, electrotherapy.</span></p><p class="MsoNormal" style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Another is from external generator of Micro vibrations which\r\nis called Vibroacoustic equipment’s.healthy pH level in order to function\r\nproperly.</span></p><p class="MsoNormal" style="line-height: 1.2;"><o:p style="font-family: Arial;"><span style="font-size: 12px;">&nbsp;</span></o:p></p><p class="MsoNormal" style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px; font-weight: bold;"><span style="font-size: 14px;">Treatment zones:</span> </span></p><p class="MsoNormal" style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">vibroacoustic treatment covers several treatment zones\r\nwithin a single procedure. The main treatment zones usually are the zone of\r\npathology and the zones which don’t have their “OWN” muscle tissue </span></p><ul><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Kidneys</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Liver</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Spinal Column</span></li></ul><p class="MsoNormal" style="line-height: 1.2;"><o:p style="font-family: Arial;"><span style="font-size: 12px;">&nbsp;</span></o:p></p><p class="MsoNormal" style="line-height: 1.2;"><span style="font-family: Arial; font-size: 14px; font-weight: bold;">Health Benefits:</span></p><p class="MsoNormal" style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Vibroacoustic therapy at the liver zone accelerates the\r\ndetoxification of the body from acidic waste accumulations and considerably\r\ndiminishes allergic manifestations.</span></p><p class="MsoNormal" style="line-height: 1.2;"><o:p style="font-family: Arial;"><span style="font-size: 12px;">&nbsp;</span></o:p></p><p class="MsoNormal" style="line-height: 1.2;"><span style="font-family: Arial; font-size: 14px; font-weight: bold;">Vibroacoustic therapy at the spinal cord zone:</span></p><ul><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Increases the quantity of ancestral stem cells, coming\r\ninto blood.</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">A particular spine zone often innervates pathological\r\narea, even a small edema or pinch of a nerve root often causes a disease</span></li><li style="line-height: 1.2;"><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span></li><li style="line-height: 1.2;"><span style="font-family: Arial;"><span style="font-size: 12px;">Accelerates the\r\nhealing process by increasing microcirculation and intensifying immune\r\nreactions.</span></span></li></ul>', '', 1, '2016-12-12', '2017-01-10 14:27:17'),
(5, 'Kangen Alakaline Antioxidant water ', 'A healthy body is mild alkaline with a pH level of 7.35 to 7.45. A slight drop in acidic blood Ph, may pose some health concerns. As we grow older, our chemical and physiological pH balancing mechanisms begin to deteriorate', '<p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Water constitutes an intrinsic part of our daily life and a\r\nmere 2% drop in our body’s water supply can trigger sign of dehydration.&nbsp;</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;"><br></span></p><span style="font-size: 12px;">\r\n\r\n</span><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">A healthy body is mild alkaline with a pH level of 7.35 to\r\n7.45. A slight drop in acidic blood Ph, may pose some health concerns. As we\r\ngrow older, our chemical and physiological pH balancing mechanisms begin to\r\ndeteriorate&nbsp;</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;"><br></span></p><span style="font-size: 12px;">\r\n\r\n</span><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Therefore, it is important that we maintain a healthy pH\r\nlevel in order to function properly.&nbsp;</span></p><p class="MsoNormal" style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;"><br></span></p><span style="font-size: 12px;">\r\n\r\n</span><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px; font-weight: bold;">What does Kangen Alkaline Antioxidant water do for you?</span></p><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><ul><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Alkalize the body by neutralizing acidic wastes that build\r\nup in the body over time to promote pH balance in the body</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Slows down Oxidation; with antioxidant properties to slow\r\ndown oxidation damage caused by free radical’s attack.</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Helps to Hydrate better: With better penetration of smaller\r\nwater molecule cluster size into cells to deliver nutrients and oxygen, and\r\ndischarge wastes out of the body.</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Energizes &amp; Revitalizes: For increased blood circulation\r\nand improved body metabolism. Thus, the body is recharged with more energy and\r\nvigor.</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Detoxifies: By flushing out acidic wastes out of the body\r\nreadily. Body is more at ease with enhanced internal cleansing.</span></li></ul>', '', 1, '2016-12-12', '2017-01-10 13:59:46');

-- --------------------------------------------------------

--
-- Table structure for table `sitevisitor`
--

CREATE TABLE IF NOT EXISTS `sitevisitor` (
  `id` int(11) NOT NULL,
  `today_visit` int(11) NOT NULL,
  `total_visit` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1=active 0=blocked',
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sitevisitor`
--

INSERT INTO `sitevisitor` (`id`, `today_visit`, `total_visit`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 450, 1, NULL, '2017-01-21 08:16:47');

-- --------------------------------------------------------

--
-- Table structure for table `sms_list`
--

CREATE TABLE IF NOT EXISTS `sms_list` (
  `id` int(11) NOT NULL,
  `sender` int(11) NOT NULL,
  `receiver` int(11) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `is_attached` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=no 1=yes',
  `is_replied` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1=not 2=replied',
  `sms_type` tinyint(11) DEFAULT NULL COMMENT '1=admin 2=doctor 3=client',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1=active 0=inactive',
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sms_list`
--

INSERT INTO `sms_list` (`id`, `sender`, `receiver`, `content`, `is_attached`, `is_replied`, `sms_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, 1, 'hello', 0, 1, 3, 1, '2016-12-26 00:00:00', '2016-12-25 23:01:10'),
(2, 6, 1, 'hello2', 0, 1, 3, 1, '2016-12-26 00:00:00', '2016-12-26 05:03:43'),
(3, 6, 1, 'hai', 0, 1, 3, 1, '2016-12-26 11:04:26', '2016-12-26 05:04:26'),
(4, 1, 5, 'hello', 0, 1, 1, 1, '2016-12-26 01:49:27', '2016-12-26 07:49:27'),
(5, 1, 6, 'reply', 0, 1, 1, 1, '2016-12-26 01:54:01', '2016-12-26 07:54:01'),
(6, 6, 1, '2nd txt', 0, 1, 3, 1, '2016-12-26 02:17:34', '2016-12-26 08:17:34'),
(7, 1, 6, 'reply 2', 0, 1, 1, 1, '2016-12-26 02:17:52', '2016-12-26 08:17:52'),
(8, 12, 5, 'hai', 0, 1, 2, 1, '2016-12-26 05:37:49', '2016-12-26 11:39:38'),
(9, 12, 6, 'fdgfgdfg', 0, 1, 2, 1, '2016-12-26 05:39:56', '2016-12-26 11:39:56'),
(10, 4, 1, 'hello', 0, 1, 3, 1, '2016-12-27 12:01:17', '2016-12-27 18:01:17'),
(11, 4, 1, 'hello2', 0, 1, 3, 1, '2016-12-27 12:02:40', '2016-12-27 18:02:40'),
(12, 1, 4, 'abc', 0, 1, 1, 1, '2017-01-01 02:39:13', '2017-01-01 08:39:13');

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE IF NOT EXISTS `support` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1=modal 2=link 3=modal nd unchangable',
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1=active 0=blocked',
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`id`, `name`, `details`, `type`, `link`, `position`, `status`, `created_at`, `updated_at`) VALUES
(1, 'About Us', '', 2, 'home#about', 1, 1, NULL, '2016-12-22 06:49:04'),
(2, 'Service', '', 2, 'service', 2, 1, NULL, '2016-12-22 06:47:50'),
(3, 'Contact Us', '', 2, 'contact', 3, 1, NULL, '2016-12-22 06:48:50'),
(4, 'Login', '', 2, 'Login', 4, 1, NULL, '2016-12-22 06:47:56'),
(5, 'Enroll', '', 2, 'Enroll', 5, 1, NULL, '2016-12-25 18:29:34'),
(6, 'Term and Condition', '<p>tehfhyhfhf</p>', 1, '', 6, 1, '2016-12-24', '2016-12-25 18:07:16');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  `subject` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'short note about this person. to show on front div',
  `image` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1=active 0=blocked',
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `emp_id`, `details`, `subject`, `image`, `status`, `role`, `created_at`, `updated_at`) VALUES
(1, 1, '<p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 14px; font-weight: bold;">AN EXTRA ORDINARY IDEA FROM AN ORDINARY MAN</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">&nbsp;</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Mr. Rahman M.D in USSR in 1987</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Ph.D. in cardiology 1992.&nbsp;</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">The dream of staying fully fit and not having regular drugs\r\nwas first seen by Mr. Rahman Back in 2014. At that time he started to face some\r\ncommon health problems like Joint Pain and Blood Pressure which are considered\r\nto be okay to have after reaching mid age of life and doctors provide regular\r\nmedicines for these. But he was not among the common man, he started to look\r\nfor a complete remediation.</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><o:p style="font-family: Arial;"><span style="font-size: 12px;">&nbsp;</span></o:p></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">His search for remediation led him to natural and organic\r\nresources. And he started to study this natural and at the same time scientific\r\nfield. All his findings were at first tested upon him because of his trust to\r\nthis remediation process and guess what, it worked!!!!!!!!!!</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><o:p style="font-family: Arial;"><span style="font-size: 12px;">&nbsp;</span></o:p></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Mr. Rahman successfully found an alternate option for total\r\nremediation of the treatments which are considered incurable. With his success\r\nnow he wants to share this remedy with the people of this world.</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">icines. Like- Cancer, diabetes, autoimmune diseases etc.</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><o:p style="font-family: Arial;"><span style="font-size: 12px;">&nbsp;</span></o:p></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><o:p style="font-family: Arial;"><span style="font-size: 12px;">&nbsp;</span></o:p></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 14px; font-weight: bold;">‘God made your body to heal itself, all you have to do is to\r\nhelp it. Drugs don''t do that’&nbsp;</span></p><p class="MsoNormal" style="line-height: 1.2;"><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px; font-weight: bold;">- Mr. Rahman M.D</span></p>', 'The dream of staying fully fit and not having regular drugs was first seen by Mr. Rahman Back in 2014. At that time he started to face some common health problems like Joint Pain and Blood Pressure which are considered to be okay to have after reaching mid age of life and doctors provide regular medicines for these. But he was not among the common man, he started to look for a complete remediation.', 'team_1.JPG', 1, 'Founder', '2016-12-12', '2017-01-10 12:59:04');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE IF NOT EXISTS `testimonial` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1=active 0=inactive',
  `image` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `emp_id`, `details`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 0, 'This Resort offers all you are dreaming about a relaxing and luxurious time out from daily work.\r\n                                                    \r\n                                                  \r\n                                                    \r\n                                                    \r\n                                                    ', 1, '', NULL, '2017-01-01 02:42:43'),
(2, 0, 'Stayed in the Vantage for 3 nights. The experience was top notch. Rooms are luxurious and the staff is friendly and helpful. Don''t miss the management drinks.\r\n                                                    \r\n                                                    \r\n                                                    ', 1, '', NULL, '2017-01-01 02:42:50'),
(3, 0, 'Great location. Very friendly staff and good food.\r\n                                                    \r\n                                                    \r\n                                                    \r\n                                                    ', 1, '', NULL, '2017-01-01 02:43:00');

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE IF NOT EXISTS `treatment` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `subject` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'short note about this treatment  to show on front div',
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1=active 0=blocked',
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`id`, `name`, `subject`, `details`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Diabetes II management ', 'There is a staggering amount of misinformation on diabetes, a growing epidemic that afflicts more than 26 million in the United States only. The sad truth is this: it could be your very OWN physician perpetuating this misinformation. ABC', '<p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-size: 14px; font-family: Arial; font-weight: bold;">LIVE LIFE TO THE FULLEST</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Diabetes is a growing epidemic. Most diabetics find\r\nthemselves in a black hole of helplessness. The bigger concern is that more\r\nthan half of those with Type II diabetes patients are not even aware they have diabetes.</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;"><br></span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial; font-weight: bold;">The signs of diabetes:</span></p><ul><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Excessive thirst</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Extreme hunger (even after eating)</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Nausea</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Unusual gain or loss of weight</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Increased fatigue Irritability</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Blurred vision</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Slow healing of wounds</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Frequent infections</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Numbness or tingling in hands and/or feet (skin, urinary,\r\nvagina)</span></li></ul><p class="MsoNormal" style="line-height: 1.2;"><o:p><span style="font-size: 12px; font-family: Arial;">&nbsp;</span></o:p></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">“Treating” diabetes by merely concentrating on lowering\r\nblood sugar can be a dangerous approach. On the other hand, taking medicine can\r\nactually spell greater trouble for Type 2 diabetes patients, as it will worsen\r\ntheir insulin resistance over time. </span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">The only known way to reestablish proper insulin signaling\r\nis through your diet. This can have a more profound influence on your health\r\nthan any known drug or modality of medical treatment</span></p><p class="MsoNormal" style="line-height: 1.2;"><o:p><span style="font-size: 12px; font-family: Arial;">&nbsp;</span></o:p></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-size: 14px; font-family: Arial; font-weight: bold;">EFFECTIVE DIABETES DIET AND LIFESTYLE TIPS</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial; font-weight: bold;"><br></span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-weight: bold;"><span style="font-size: 14px; font-family: Arial;">LIVE LIFE TO THE FULLEST</span><span style="font-family: Arial; font-size: 14px;">&nbsp;</span></span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">There are 4 simple yet effective ways to increase your\r\ninsulin sensitivity and prevent or reverse diabetes Exercise.</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;"><br></span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial; font-weight: bold;">Effective diabetes diet and lifestyle tips</span></p><ul><li style="text-align: left; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Eliminate ALL sugars and grains – even “healthful” ones like\r\nwhole, org Avoid breads, pasta, cereals, rice, potatoes, and corn. you may want\r\nto avoid fruits as well.</span><span style="font-family: Arial; font-size: 12px;">&nbsp;</span></li><li style="text-align: left; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Get plenty of omega-3 fats from a quality, animal-based\r\nsource. Monitor your fasting insulin level.</span><span style="font-family: Arial; font-size: 12px;">&nbsp;</span></li><li style="text-align: left; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Get probiotics. Your gut is a living ecosystem of a\r\nmultitude of bacteria. The better bacteria you have, the stronger your\r\nimmunity.</span></li></ul><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><o:p><span style="font-size: 12px; font-family: Arial;">&nbsp;</span></o:p></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">After the program:</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial;"><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span><span style="font-size: 12px;">\r\n\r\n</span></span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial; font-weight: bold;">you can live your life to the fullest, 100% diabetes free!</span></p>', 1, NULL, '2017-01-08 17:22:06'),
(2, 'LIVE BLOOD ANALYSIS', 'Live blood analysis is a revolutionary technique that enables both the practitioner and you to observe blood cells – there and then. Only one drop of blood is necessary and you see your cells magnified 10 thousand times moving around right in front of you, on our video monitor.', '<p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">The quality of the blood is vital to healthy, disease-free\r\nexistence. Live blood analysis enables us to see your blood exactly as it\r\nbehaves inside your body, giving a clear picture of your health at a cellular\r\nlevel. Clean oxygenated blood is necessary for the good health. Conventional\r\ntesting does not allow for the actual quality of the blood to be understood as\r\nit only counts cells.</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">&nbsp;</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 14px; font-weight: bold;">Who benefits from Live Blood Analysis?</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 12px; font-weight: bold;">Live blood analysis will be beneficial for the patients\r\nhaving:</span></p><ul><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Allergies</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Arthritis</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Asthma</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Gout</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Congestion</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Depression</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Diabetes</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Infections</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Constipation</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Low energy</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Migraines</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Inflammations</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Blood pressure</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">High cholesterol</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Weight problems</span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Skin/hair problems</span></li></ul>', 1, NULL, '2017-01-08 17:19:14'),
(3, 'OZONE SPA THERAPY', 'Ozone (O³) is activated oxygen (O²), and in a short period of time the O³ molecule will revert back to oxygen. During this short half life cycle, the O³ molecule can therefore be used for sanitation and sterilization purposes. ', '<p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 14px; font-weight: bold;">OXYGEN FOR LIFE</span></p>\r\n<p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial; font-weight: bold;">Ozone:</span></p>\r\n<p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Ozone inactivates viruses, bacteria, yeast, fungus and\r\nprotozoa. it is used for sterilizing purposes, neutralizing pollutants and even\r\npreventing contamination of airborne diseases such as flu or tuberculosis.</span></p>\r\n<p class="MsoNormal" style="line-height: 1.2;"><o:p><span style="font-size: 12px; font-family: Arial;">&nbsp;</span></o:p></p>\r\n<p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-size: 14px; font-family: Arial; font-weight: bold;">Diseases that benefit from ozone spa therapy</span></p>\r\n<ul style="padding-left:30px;">\r\n<li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Acne</span></li>\r\n<li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Colitis</span></li>\r\n<li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">High blood pressure</span></li>\r\n<li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Arthritis</span></li>\r\n<li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Cystitis</span></li>\r\n<li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Infected wounds</span></li>\r\n<li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Athletic injuries</span></li>\r\n<li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Diabetes</span></li>\r\n<li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Insomnia</span></li>\r\n<li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Candidiasis</span></li>\r\n<li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Hepatitis</span></li>\r\n<li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Menopause</span></li>\r\n<li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Fungal infections</span></li>\r\n<li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Gastritis</span></li>\r\n<li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Muscle pain</span></li>\r\n<li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Tensions</span></li>\r\n<li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Cardiovascular</span></li>\r\n<li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Gout</span></li>\r\n<li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Obesity</span></li>\r\n<li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Hepatitis</span></li>\r\n<li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Psoriasis</span></li>\r\n<li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Almost all skin diseases</span></li>\r\n<li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Colds</span></li>\r\n<li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Flu</span></li>\r\n<li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Fever</span></li>\r\n<li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Herpes </span></li>\r\n<li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Chronic fatigue and other venereal disease</span></li>\r\n</ul>', 1, NULL, '2017-01-08 17:17:23'),
(4, 'COLON HYDROTHERAPY', 'The colon is important to cleansing and detoxification because it removes the waste and other toxins. Discomfort in the colon usually manifests itself as diarrhea or constipation. ', '<p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-family: Arial; font-size: 14px; font-weight: bold;">STAY HEALTHY WITH A CLEAN COLON</span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">The colon is important to cleansing and detoxification\r\nbecause it removes the waste and other toxins. Discomfort in the colon usually\r\nmanifests itself as diarrhea or constipation. </span></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Unfortunately, our response to this is usually a laxative,\r\nto “force” the elimination of the waste. But many toxins are left behind and\r\nreabsorbed, producing pathogenic bacteria. This leads to aches and pain in the\r\nback, joints, stomach, head, and other organs.</span></p><p class="MsoNormal" style="line-height: 1.2;"><o:p><span style="font-size: 12px; font-family: Arial;">&nbsp;</span></o:p></p><p class="MsoNormal" style="text-align: center; line-height: 1.2;"><span style="font-size: 14px; font-family: Arial; font-weight: bold;">COLON HYDROTHERAPY BLOCKS THE BUILDUP OF THESE TOXINS:</span></p><ul><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Constipation, Irritable Bowel Syndrome, parasites </span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Abdominal gas, bloating, diarrhea, belching or flatulence</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Foul breath, body odors</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Unhealthy skin; PSORIASIS, SHINGLES, ECZEMA, BLEMISHES, ACNE</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Feeling and looking older</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Swollen joints, aching joins, neuritis and neuralgia, back\r\nand muscle aches</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Dark circles under the eyes; dull, glassy, bloodshot eyes</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Sluggish, confused thinking, mind fog, loss of memory,\r\ndifficulty concentrating,</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">difficulty making decisions</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Headaches, migraines</span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Irritability, anxiety, nervousness</span></li><li style="line-height: 1.2;"><span style="font-family: Arial;"><span style="font-size: 12px;">Poor posture</span><span style="font-size: 12px;">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Fatigue</span></li><li style="line-height: 1.2;"><span style="font-family: Arial;"><span style="font-size: 12px;">Insomnia</span><span style="font-size: 12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Brittle hair, nails</span></li><li style="line-height: 1.2;"><span style="font-family: Arial;"><span style="font-size: 12px;">Allergies</span><span style="font-size: 12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Coated tongue</span></li><li style="line-height: 1.2;"><span style="font-family: Arial;"><span style="font-size: 12px;">Hemorrhoids</span><span style="font-size: 12px;">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></li><li style="line-height: 1.2;"><span style="font-size: 12px; font-family: Arial;">Cold, flu, sinusitis</span></li><li style="line-height: 1.2;"><span style="font-family: Arial;"><span style="font-size: 12px;">Gout</span><span style="font-size: 12px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></span></li><li style="line-height: 1.2;"><span style="font-family: Arial; font-size: 12px;">Sexual dysfunctions</span></li></ul>', 1, '2017-01-08', '2017-01-08 17:08:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_info`
--
ALTER TABLE `about_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_pic`
--
ALTER TABLE `all_pic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_info`
--
ALTER TABLE `company_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `condition_table`
--
ALTER TABLE `condition_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallerycategory`
--
ALTER TABLE `gallerycategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallerypic`
--
ALTER TABLE `gallerypic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_sub_cat`
--
ALTER TABLE `gallery_sub_cat`
  ADD PRIMARY KEY (`sub_cat_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resort_category`
--
ALTER TABLE `resort_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sitevisitor`
--
ALTER TABLE `sitevisitor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_list`
--
ALTER TABLE `sms_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_info`
--
ALTER TABLE `about_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `all_pic`
--
ALTER TABLE `all_pic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `company_info`
--
ALTER TABLE `company_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `condition_table`
--
ALTER TABLE `condition_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `gallerycategory`
--
ALTER TABLE `gallerycategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `gallerypic`
--
ALTER TABLE `gallerypic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `gallery_sub_cat`
--
ALTER TABLE `gallery_sub_cat`
  MODIFY `sub_cat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `resort_category`
--
ALTER TABLE `resort_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sitevisitor`
--
ALTER TABLE `sitevisitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sms_list`
--
ALTER TABLE `sms_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
