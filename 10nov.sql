-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2019 at 03:56 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `std_crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `attachment`
--

CREATE TABLE `attachment` (
  `att_id` int(11) NOT NULL,
  `att_name` text NOT NULL,
  `att_filename` text NOT NULL,
  `att_path` text NOT NULL,
  `item_type` text NOT NULL,
  `item_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attachment`
--

INSERT INTO `attachment` (`att_id`, `att_name`, `att_filename`, `att_path`, `item_type`, `item_id`, `created_at`, `updated_at`) VALUES
(1, 'example-slide-1.jpg', 'example-slide-1.jpg', 'gallery/company/2/bisZkWKtwydlVPTDaOprv5iSK54b5X0aFmYKuVtT.jpeg', 'gallery', 2, '2019-10-20 03:20:07', '2019-10-20 03:20:07'),
(2, 'IMG_6255.JPG', 'IMG_6255.JPG', 'gallery/company/2/tfv72wWIbZeupP87itPv9OLOqGHjgTlEWze7MF3j.jpeg', 'gallery', 2, '2019-10-20 03:21:20', '2019-10-20 03:21:20'),
(3, 'IMG_6560.JPG', 'IMG_6560.JPG', 'gallery/company/2/p7aCdePnaSv2HD2TZxlPnUVXKlBiQBjBXcz1wYIm.jpeg', 'gallery', 2, '2019-10-20 03:21:22', '2019-10-20 03:21:22'),
(4, 'IMG_6708.JPG', 'IMG_6708.JPG', 'gallery/company/2/Sr6i0a3FnRWuXMLSHgMz3786cqn96HZ3ZFqdOUvu.jpeg', 'gallery', 2, '2019-10-20 03:21:22', '2019-10-20 03:21:22'),
(5, 'IMG_7156.JPG', 'IMG_7156.JPG', 'gallery/company/2/ZucNKMNiKTYZ2PAH88wuZx7UC2wWui8BmUkWBbvr.jpeg', 'gallery', 2, '2019-10-20 03:21:23', '2019-10-20 03:21:23'),
(6, 'meja.jpg', 'meja.jpg', 'gallery/company/2/0pLzCatmy95uC4mJeufyvmNyGBGKFAbKHorjWwGJ.jpeg', 'gallery', 2, '2019-10-20 03:21:24', '2019-10-20 03:21:24'),
(7, 'ad.jpg', 'ad.jpg', 'gallery/company/2/4EL0yKMNmxb7NnzqqAXYT4b7Oc5GnTRduSBfVR8J.jpeg', 'gallery', 2, '2019-10-20 03:23:02', '2019-10-20 03:23:02'),
(8, 'Cool Stream Moss Coverd Rocks Wp TW.png', 'Cool Stream Moss Coverd Rocks Wp TW.png', 'gallery/company/2/9h7XF1CuQsap6OU06um1ECNVk8Ecvo3B2MMtTUvY.png', 'gallery', 2, '2019-10-20 03:23:03', '2019-10-20 03:23:03'),
(9, 'cool-sunflowers-HD_wallpapers.jpg', 'cool-sunflowers-HD_wallpapers.jpg', 'gallery/company/2/I9xsYpv2YqIIzouSP9HWGt2KNCn8dIGQH23VvqD2.jpeg', 'gallery', 2, '2019-10-20 03:23:03', '2019-10-20 03:23:03'),
(10, 'cool-wallpaper- (200).jpg', 'cool-wallpaper- (200).jpg', 'gallery/company/2/T77gxFjHywPP1BGFn8D2O4eiDHSXrzNbvIMFwEB4.jpeg', 'gallery', 2, '2019-10-20 03:23:03', '2019-10-20 03:23:03');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `company_name` text NOT NULL,
  `company_contact` text DEFAULT NULL,
  `company_email` text DEFAULT NULL,
  `company_ssm` text DEFAULT NULL,
  `company_website` text DEFAULT NULL,
  `company_address` text DEFAULT NULL,
  `company_logo` text DEFAULT NULL,
  `company_type_id` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `company_contact`, `company_email`, `company_ssm`, `company_website`, `company_address`, `company_logo`, `company_type_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Puri Pujangga Hotel', '0389274128', 'sales@puripujangga.com.my', '0123890248', NULL, 'Puri Pujangga Hotel, UKM Bangi, Selangor', 'avatar/company/1/FZavOINp0Jdyfr2lKqEvQLc3ZZt9PKMPn3EnTflJ.jpeg', 'wp', 1, '2019-10-12 05:19:09', '2019-10-12 05:20:30'),
(2, 'CT3 Catering & Canopy', '0374924854', 'ct3cnc@gmail.com', '0147185114', NULL, '252 Jalan Seri Melati, Kuantan, Pahang', 'avatar/company/2/RNBhVepcxkQ62K9eGg67lThmOWhdKtluskVB5gwl.jpeg', 'wp', 2, '2019-10-12 05:31:33', '2019-10-17 06:03:18'),
(3, 'Rasa Nusantara', '0183557736', 'rasanusantara7@gmail.com', '22221468000', NULL, '22-G Jalan 4 Taman Industri Lembah Jaya, Ampang', 'avatar/company/3/2Evqx2kEnyV94GPaghkdgYqIeZxBCH7b6xjMr6DZ.jpeg', 'wp', 3, '2019-10-12 05:47:17', '2019-10-12 05:48:16');

-- --------------------------------------------------------

--
-- Table structure for table `company_category`
--

CREATE TABLE `company_category` (
  `cc_id` int(11) NOT NULL,
  `cc_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_category`
--

INSERT INTO `company_category` (`cc_id`, `cc_title`) VALUES
(1, 'Photography'),
(2, 'Videography'),
(3, 'Band/DJ'),
(4, 'Bakery'),
(5, 'Florist'),
(6, 'Transportation'),
(7, 'Officiant'),
(8, 'Catering'),
(9, 'Venue'),
(10, 'Jewelers'),
(11, 'Bridal Salons'),
(12, 'Decor'),
(13, 'Desserts'),
(14, 'Invitation'),
(15, 'Lighting'),
(16, 'Photo Booth'),
(17, 'Variety Acts'),
(18, 'Accessories'),
(19, 'Hair & Makeup'),
(20, 'Props'),
(21, 'Entertainment'),
(22, 'Cakes'),
(23, 'Hotels & Resorts'),
(24, 'Suits'),
(25, 'Celebrant'),
(26, 'Gowns'),
(27, 'PA System'),
(28, 'Pelamin');

-- --------------------------------------------------------

--
-- Table structure for table `company_category_tag`
--

CREATE TABLE `company_category_tag` (
  `cct_id` int(11) NOT NULL,
  `cc_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company_category_tag`
--

INSERT INTO `company_category_tag` (`cct_id`, `cc_id`, `company_id`) VALUES
(1, 8, 1),
(2, 9, 1),
(3, 20, 1),
(4, 21, 1),
(5, 23, 1),
(6, 8, 2),
(7, 9, 2),
(8, 1, 3),
(9, 3, 3),
(10, 8, 3),
(11, 10, 3),
(12, 17, 3),
(13, 19, 3),
(14, 24, 3),
(15, 26, 3),
(16, 3, 4),
(17, 21, 4),
(18, 2, 5),
(19, 2, 6),
(20, 2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `company_contact`
--

CREATE TABLE `company_contact` (
  `company_contact_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `contact_type` int(11) NOT NULL COMMENT '1 for company, 2 for user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_contact`
--

INSERT INTO `company_contact` (`company_contact_id`, `company_id`, `contact_id`, `contact_type`) VALUES
(6, 2, 5, 2),
(7, 2, 4, 2),
(8, 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `company_crm`
--

CREATE TABLE `company_crm` (
  `crm_id` int(11) NOT NULL,
  `promotion_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_package`
--

CREATE TABLE `company_package` (
  `package_id` int(11) NOT NULL,
  `package_title` text NOT NULL,
  `package_detail` text NOT NULL,
  `package_price` int(11) NOT NULL DEFAULT 0,
  `package_pax` int(11) NOT NULL DEFAULT 0,
  `package_category` text DEFAULT NULL COMMENT 'company_category',
  `package_post` int(11) NOT NULL DEFAULT 0,
  `company_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_package`
--

INSERT INTO `company_package` (`package_id`, `package_title`, `package_detail`, `package_price`, `package_pax`, `package_category`, `package_post`, `company_id`, `created_at`, `updated_at`) VALUES
(1, 'Package : Basic', 'PGRpdiBhbGlnbj0iY2VudGVyIj48b2w+PGxpPi0gTWFsYXkgQnVmZmV0IE1lbnU8L2xpPjxsaT4tIEJhc2ljIERlY29yYXRpb248L2xpPjxsaT4tIE1lamEgQmVyYWRhYiBmb3IgMTAgcGF4PC9saT48bGk+LSBTdGFuZGFyZCBQQSBTeXN0ZW08L2xpPjxsaT4tIFJvc3RydW0gYW5kIG1pY3JvcGhvbmU8L2xpPjxsaT4tIFN0YWdlPC9saT48bGk+LSBSZWQgY2FycGV0IHRvIHBlbGFtaW48YnI+PC9saT48bGk+LSBTdGFuZGFyZCB0YWJsZSBzZXR1cCB3aXRoIHRhYmxlIGNsb3RoLCBjaGFpciBjb3ZlciBhbmQgbmFwa2luPC9saT48bGk+LSBGdWxseSBhaXIgY29uZGl0aW9uZWQgaGFsbDwvbGk+PGxpPi0gVklQIGRvbWUgc2V0IGZvciAyIHRhYmxlczwvbGk+PGxpPjxicj48L2xpPjxsaT4gPGJyPjwvbGk+PC9vbD48L2Rpdj4=', 19, 1000, NULL, 0, 1, '2019-10-12 05:27:24', '2019-10-12 05:27:24'),
(2, 'Pakej WOW CT3', 'PHA+PGI+TWVudTwvYj48L3A+PHVsPjxsaT4tIE5hc2kgTWlueWFrIGF0YXUgQmVyaWFuaSA4MCU8L2xpPjxsaT4tIE5hc2kgUHV0aWggMjAlPC9saT48bGk+LSBBeWFtIE1hc2FrIE1lcmFoPC9saT48bGk+LSBEYWdpbmcgTWFzYWsgSGl0YW08L2xpPjxsaT4tIERhbGNhIENhbXB1cjwvbGk+PGxpPi0gUGFwYWRvbTwvbGk+PGxpPi0gQWlyIEtvcmRpYWwgU2lyYXA8L2xpPjxsaT4tIEJ1YWg8L2xpPjwvdWw+PHA+PGI+Q2F0ZXJpbmc8L2I+PC9wPjx1bD48bGk+LSAyNSBtZWphIGJ1bGF0ICsgMjUwIGtlcnVzaSBiZXJzYXJ1bmc8L2xpPjxsaT4tIDIgbWVqYSBWVklQICsga2VydXNpIGJlcnNhcnVuZzwvbGk+PGxpPi0gbWVqYSBiZXJhZGFiICsgZGVjbyArIG1ha2FuYW4gcGVuZ2FudGluICh1ZGFuZyBwYW5qYXQsIGF5YW0gZ29sZWssIGJ1YWggZGVjbyk8L2xpPjxsaT4tIGtlayAyIHRpbmdrYXQ8L2xpPjxsaT4tIDIgc3Rlc2VuIGJ1ZmZldDwvbGk+PGxpPi0gMTAgcHJhbXVzYWppPC9saT48L3VsPjxwPjxiPlBlbGFtaW48L2I+PC9wPjx1bD48bGk+LSAxIHNldCBwZWxhbWluPC9saT48bGk+LSBiYW50YWwgKyBraXBhcyB0YW5nYW48L2xpPjxsaT4tIHNldCByZW5qaXM8L2xpPjxsaT4tIGhpYXNhbiBwaW50dSBnZXJiYW5nPC9saT48bGk+LSBzZXBhc2FuZyBwZXJzYWxpbmFuIEwvUDwvbGk+PGxpPi0gMXggbWFrZXVwPGJyPjwvbGk+PC91bD48cD48Yj5QaG90b2dyYXBoeTwvYj48L3A+PHVsPjxsaT4tIG5pa2FoIHNhbmRpbmcgaGFyaSB5YW5nIHNhbWE8L2xpPjxsaT4tIGN1c3RvbSBhbGJ1bTwvbGk+PGxpPi0gZnJhbWUgZ2FtYmFyIDhSPC9saT48bGk+LSB1bmxpbWl0ZWQgcGljdHVyZSB0YWtlbjwvbGk+PGxpPi0gYWxsIGltYWdlIGluIHBlbmRyaXZlIDhHQjwvbGk+PC91bD48cD48Yj5LYWQgamVtcHV0YW48L2I+PC9wPjx1bD48bGk+LSAzNTAga2VwaW5nIGthZCArIGVudmVsb3A8L2xpPjxsaT4tIEJ1bnRpbmc8L2xpPjxsaT4tIGRlc2lnbjwvbGk+PC91bD48cD48Yj5ESi8gUEEgc3lzdGVtPC9iPjxicj48L3A+', 14000, 1000, NULL, 0, 2, '2019-10-12 05:39:28', '2019-10-12 05:39:28'),
(3, 'Pakej Terbaik CT3', 'PHA+PHA+PGI+TWVudTwvYj48L3A+PHVsPjxsaT4tIE5hc2kgTWlueWFrIGF0YXUgQmVyaWFuaSA4MCU8L2xpPjxsaT4tIE5hc2kgUHV0aWggMjAlPC9saT48bGk+LSBBeWFtIE1hc2FrIE1lcmFoPC9saT48bGk+LSBEYWdpbmcgTWFzYWsgSGl0YW08L2xpPjxsaT4tIERhbGNhIENhbXB1cjwvbGk+PGxpPi0gUGFwYWRvbTwvbGk+PGxpPi0gQWlyIEtvcmRpYWwgU2lyYXA8L2xpPjxsaT4tIFRlaCBUYXJpazxicj48L2xpPjxsaT4tIEJ1YWg8L2xpPjxsaT4tIEFnYXItYWdhciA1MCU8L2xpPjxsaT4tIEJ1YnVyIHB1bHV0IGhpdGFtIDUwJTxicj48L2xpPjwvdWw+PHA+PGI+Q2F0ZXJpbmc8L2I+PC9wPjx1bD48bGk+LSAyNSBtZWphIGJ1bGF0ICsgMjUwIGtlcnVzaSBiZXJzYXJ1bmc8L2xpPjxsaT4tIDIgbWVqYSBWVklQICsga2VydXNpIGJlcnNhcnVuZzwvbGk+PGxpPi0gbWVqYSBiZXJhZGFiICsgZGVjbyArIG1ha2FuYW4gcGVuZ2FudGluICh1ZGFuZyBwYW5qYXQsIGF5YW0gZ29sZWssIGJ1YWggZGVjbywgaWthbiBzaWFrYXAgc3dlZXQgc291cik8L2xpPjxsaT4tIGtlayAzIHRpbmdrYXQ8L2xpPjxsaT4tIDIgc3Rlc2VuIGJ1ZmZldDwvbGk+PGxpPi0gMTAgcHJhbXVzYWppPC9saT48L3VsPjxwPjxiPlBlbGFtaW48L2I+PC9wPjx1bD48bGk+LSAxIHNldCBwZWxhbWluPC9saT48bGk+LSBiYW50YWwgKyBraXBhcyB0YW5nYW48L2xpPjxsaT4tIHNldCByZW5qaXM8L2xpPjxsaT4tIGhpYXNhbiBwaW50dSBnZXJiYW5nPC9saT48bGk+LSBzZXBhc2FuZyBwZXJzYWxpbmFuIEwvUDwvbGk+PGxpPi0gMXggbWFrZXVwPC9saT48bGk+LSByZWQgY2FycGV0PC9saT48bGk+LSBBaXNsZSBXYWxrd2F5PGJyPjwvbGk+PC91bD48cD48Yj5QaG90b2dyYXBoeTwvYj48L3A+PHVsPjxsaT4tIG5pa2FoIHNhbmRpbmc8YnI+PC9saT48bGk+LSBjdXN0b20gYWxidW08L2xpPjxsaT4tIGZyYW1lIGdhbWJhciA4UjwvbGk+PGxpPi0gdW5saW1pdGVkIHBpY3R1cmUgdGFrZW48L2xpPjxsaT4tIGFsbCBpbWFnZSBpbiBwZW5kcml2ZSA4R0I8L2xpPjwvdWw+PHA+PGI+S2FkIGplbXB1dGFuPC9iPjwvcD48dWw+PGxpPi0gMzUwIGtlcGluZyBrYWQgKyBlbnZlbG9wPC9saT48bGk+LSBCdW50aW5nPC9saT48bGk+LSBkZXNpZ248L2xpPjwvdWw+PGI+REovIFBBIHN5c3RlbTwvYj48L3A+PHA+PGI+UEVSQ1VNQSBLYW1iaW5nIEdvbGVrIFNlZWtvcjxicj48L2I+PC9wPg==', 16800, 1000, NULL, 0, 2, '2019-10-12 05:43:08', '2019-10-12 05:43:08'),
(4, 'Pakej Perkahwinan Lengkap', 'PHA+PGI+TWVudTwvYj48L3A+PHVsPjxsaT4tIE5hc2kgTWlueWFrPC9saT48bGk+LSBOYXNpIFB1dGloIDEwJTwvbGk+PGxpPi0gQXlhbSBNYXNhayBNZXJhaDwvbGk+PGxpPi0gRGFnaW5nIE1hc2FrIEhpdGFtPC9saT48bGk+LSBEYWxjYSBTYXl1cjwvbGk+PGxpPi0gQWNhciBCdWFoPC9saT48bGk+LSBNaW51bWFuIFNlanVrIENvcmRpYWw8L2xpPjxsaT4tIFRlaCBUYXJpazwvbGk+PGxpPi0gQnVidXIgUHVsdXQgSGl0YW08L2xpPjxsaT4tIEJ1YWggT3JlbjwvbGk+PGxpPi0ga2VrIDMgVGluZ2thdDwvbGk+PC91bD48cD48Yj5NZWphIFBlbmdhbnRpbiA8L2I+PC9wPjx1bD48bGk+LSAxIE1lamEgTWFrYW4gQmVyYWRhYjwvbGk+PGxpPi0gMiBLZXJ1c2kgTWVtcGVsYWk8L2xpPjwvdWw+PHA+PGI+TWVqYSBUZXRhbXU8L2I+PC9wPjx1bD48bGk+LSAzMCBtZWphIGJ1bGF0ICsgYWxhczwvbGk+PGxpPi0gMzAwIGtlcnVzaTwvbGk+PGxpPi0gMiBzZXQgbWVqYSBidWZmZXQ8L2xpPjxsaT4tIHBlbGF5YW4gYmVydW5pZm9ybTwvbGk+PC91bD48cD48Yj5QZWxhbWluPC9iPjwvcD48dWw+PGxpPi0gUGVsYW1pbiwgZGV3YW4gYXRhdSBydW1haDwvbGk+PGxpPi0gd2Fsa3dheTwvbGk+PGxpPi0ga2FycGV0PC9saT48bGk+LSBzZXQgcmVuamlzPC9saT48L3VsPjxwPjxiPkFuZGFtYW48L2I+PC9wPjx1bD48bGk+LSBCYWp1IHNhbmRpbmcgTFAgMTwvbGk+PGxpPi0gTWFrZXVwIExQIDE8L2xpPjwvdWw+PHA+PGI+UEEgU3lzdGVtICZhbXA7IERKPC9iPjwvcD48cD48Yj5QaG90b2dyYXBoZXI8L2I+PC9wPjxwPi0gc2FuZGluZyArIG91dGRvb3I8L3A+PHA+PHNwYW4gc3R5bGU9ImJhY2tncm91bmQtY29sb3I6IHJnYigyNTUsIDI1NSwgMjU1KTsiPjxzcGFuIHN0eWxlPSJjb2xvcjogcmdiKDI1NSwgMCwgMCk7Ij48Yj48c3BhbiBzdHlsZT0iZm9udC1zaXplOiAxOHB4OyI+UEVSQ1VNQSBCRVJMSUFOIDAuMWN0PC9zcGFuPjwvYj48L3NwYW4+PC9zcGFuPjxicj48L3A+PHA+PGJyPjwvcD48cD48YnI+PC9wPg==', 20000, 1000, NULL, 0, 3, '2019-10-12 05:56:16', '2019-10-12 05:56:16');

-- --------------------------------------------------------

--
-- Table structure for table `company_package_category_tag`
--

CREATE TABLE `company_package_category_tag` (
  `cpct_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `cc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_package_category_tag`
--

INSERT INTO `company_package_category_tag` (`cpct_id`, `package_id`, `cc_id`) VALUES
(1, 1, 8),
(2, 1, 9),
(3, 1, 27),
(4, 1, 28),
(5, 2, 1),
(6, 2, 3),
(7, 2, 8),
(8, 2, 14),
(9, 2, 27),
(10, 2, 28),
(11, 3, 1),
(12, 3, 3),
(13, 3, 8),
(14, 3, 14),
(15, 3, 22),
(16, 3, 28),
(17, 4, 1),
(18, 4, 3),
(19, 4, 8),
(20, 4, 12),
(21, 4, 19),
(22, 4, 20),
(23, 4, 27),
(24, 4, 28);

-- --------------------------------------------------------

--
-- Table structure for table `company_package_post`
--

CREATE TABLE `company_package_post` (
  `pp_id` int(11) NOT NULL,
  `pp_content` text NOT NULL,
  `pp_attachment` int(11) NOT NULL DEFAULT 0 COMMENT 'att_id',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_promotion`
--

CREATE TABLE `company_promotion` (
  `promotion_id` int(11) NOT NULL,
  `promotion_title` text NOT NULL,
  `promotion_detail` text NOT NULL,
  `promotion_post` int(11) NOT NULL DEFAULT 0 COMMENT 'pp_id',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_reviews`
--

CREATE TABLE `company_reviews` (
  `review_id` int(11) NOT NULL,
  `review_user_id` int(11) DEFAULT NULL,
  `review_user` text NOT NULL,
  `review_rate` int(11) NOT NULL,
  `review_text` text NOT NULL,
  `company_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_reviews`
--

INSERT INTO `company_reviews` (`review_id`, `review_user_id`, `review_user`, `review_rate`, `review_text`, `company_id`, `created_at`, `updated_at`) VALUES
(1, 5, 'Siti Sarah', 3, 'Saya bagi 3 star sebab saya dengar dari orang, company ni bagus. Tapi saya sendiri x try pun lagi..huhu', 2, '2019-10-20 02:01:11', '2019-10-20 02:01:11'),
(2, 4, 'Mustaqim', 5, 'Terbaik terbaik! Saya kawin dulu amik dengan dorang la...i totally recommend this company untuk korang. Nanti dorang akan bagi beriyani free...', 2, '2019-10-20 02:23:56', '2019-10-20 02:23:56');

-- --------------------------------------------------------

--
-- Table structure for table `event_external`
--

CREATE TABLE `event_external` (
  `ee_id` int(11) NOT NULL,
  `ee_title` text NOT NULL,
  `location` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `time_start` time DEFAULT NULL,
  `time_end` time DEFAULT NULL,
  `poster` text DEFAULT NULL,
  `url` text DEFAULT NULL,
  `posted_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_external`
--

INSERT INTO `event_external` (`ee_id`, `ee_title`, `location`, `description`, `date_start`, `date_end`, `time_start`, `time_end`, `poster`, `url`, `posted_by`, `created_at`, `updated_at`) VALUES
(5, '23rd KLPJ Wedding Fair 2020', 'Kuala Lumpur Convention Centre (KLCC)', '23rd KLPJ Wedding Fair, The Real Largest Wedding Fair, will feature Malaysia’s Top 10 Bridal Houses & Bridal Studios. Dare we say, our wedding exhibitors are Malaysia’s finest wedding suppliers! KLPJ Wedding Fair is filled with creative vendors that have been thoughtfully curated. They are Malaysian’s favourite – highly recommended, highly recognised, strong branding & reputations, and most importantly friendly customer service.', '2020-01-11', '2020-01-12', '10:00:00', '22:45:00', 'admin/event/5/pzGRi5HIjrLyZrsb5ebcSHfrlEjdfI1ApbPz5I2F.jpeg', 'https://gowhere.my/info/23rd-klpj-wedding-fair-2020-january-2020/', 13, '2019-11-10 06:47:44', '2019-11-10 06:47:44'),
(6, 'Pameran Pengantin KahwinJe by KLPJ Wedding Fair', 'Mid Valley Megamall', 'Pameran Pengantin KahwinJe by KLPJ merupakan festival perkahwinan original yang terunggul di Malaysia. Hanya dianjurkan dua kali setahun di Mid Valley, Pameran Pengantin KahwinJe by KLPJ 2019 memaparkan gabungan pakej-pakej perkahwinan terbaik dari Perak, Pahang, Negeri Sembilan, Johor dan juga Selangor, terutamanya dari kawasan Klang Valley (Gombak, Melawati, Wangsa Maju, Ampang, Kepong, Cheras, Kuala Lumpur, Petaling Jaya, Subang, Puchong, Seri Kembangan, Kajang, Bangi, Shah Alam & Klang).', '2019-09-20', '2019-09-22', '10:00:00', '22:45:00', 'admin/event/6/kARKeKPv4vDzo5bK2FTUmCY8kgwUlQoGyevUNfjT.jpeg', 'https://www.ticket2u.com.my/event/13726/pameran-pengantin-kahwinje-by-klpj-wedding-fair-(september-2019)', 13, '2019-11-10 06:51:57', '2019-11-10 06:51:58');

-- --------------------------------------------------------

--
-- Table structure for table `inbox_type`
--

CREATE TABLE `inbox_type` (
  `i_type_id` int(11) NOT NULL,
  `i_type_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inbox_type`
--

INSERT INTO `inbox_type` (`i_type_id`, `i_type_title`) VALUES
(1, 'Mail'),
(2, 'B2C Invitation'),
(3, 'C2B Declination'),
(4, 'B2B Invitation'),
(5, 'B2B Declination'),
(6, 'C2B Invitation'),
(7, 'B2C Declination'),
(8, 'X2B');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE `template` (
  `template_id` int(11) NOT NULL,
  `template_content` longtext NOT NULL,
  `template_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`template_id`, `template_content`, `template_name`) VALUES
(1, 'PHA+PGI+PGI+PGltZyBzcmM9ImRhdGE6aW1hZ2UvcG5nO2Jhc2U2NCxpVkJPUncwS0dnb0FBQUFOU1VoRVVnQUFBbzRBQUFHV0NBWUFBQUQyWXdLTEFBQUFDWEJJV1hNQUFBc1RBQUFMRXdFQW1wd1lBQUFBR1hSRldIUlRiMlowZDJGeVpRQkJaRzlpWlNCSmJXRm5aVkpsWVdSNWNjbGxQQUFBT2Y5SlJFRlVlTnJzbmZ0MTA4enpoemUvdy8vSnQ0TDRyU0NtZ29nSzhGdEJSQVdFQ2hBVllDcUlVZ0ZPQlZFcXdLa0FwNEkzcVlDZkJvOWdNYjVySmUzbGVjN1JNZGRZR3UzbHM3TXpzeWMvZnZ3d0FHRE15Y25KdVA0NDA5L0s1L2pBSHpHdnIyZjk5WFBkdCtaWUZTQ1o4U096Zmp2UzZ4QXE2OWVNSCtCdlcwYzRRbUlEKzJqTmRkN3hWeitxb0p4Ym53c21Cb0RneG85bVFUbkUrTEhRYTY3Q3N1S3RBTUlSd00wQVA5TEJYYTZzcDhHOXphUXcxd21oWWpJQUdIejhPTFBHam1ZYzhYWDhlTkx4NDlkVmp5RUwzaUlnSEFGMmV3SXlhN0EvRGZ5UlJFeFdPaEZVVEFRQW5TODBNK3M2RC95UkdqRlo2ZmpCemdZZ0hJR0J2djZZV0FQOWFlU1AvR2hOQWpOYUFFQ3I4ZU5zWmZ3NGoveVJYM1Q4bUxFUUJZUWpwRFRZWnpyWVR4SVk2SGR4eHlRQWNOUmlNNit2aThUTjBTeEVTN3lSZ0hDRUdNVmlyZ1ArS1JiWk9BbVVJaVFSa1FDSXhRTjUwa1VvSWhJUWpoRDBZSDl0OEN3ZVErT0pGQkg1akRrZ3dmSGpUSVVpWXZFNEVUbGxFUW9JUndobHNKK29ZUFJsc0c5S1lPeUxKT2I0NGhWOVVRRTV4WXNBaVl3aGpXZnhyV2RDN0JBQk52Sm9zU3lMMEpLWWFrQTRnbStEL1VqRllqNlE2SG93djJ1alZjWlIwVjJybkVjekdheGVmVTRPajVZWEFTOGt4TGJnYk1hUFB2dFVJd2p0dXF3Lys1YXJjbHBXTWZGTXg0enhRSXRxZWRaU0Y2R01INEJ3aE1FRy9Fd0gvTDY5QXcvbWQzWnk1WUVOR2lHWm1lNDlsaS9XQkxDZ0ZVTEE0OGRZeDQrcm5nUmlaVHdwMm04bENXWURDTW5iK2lvWVB3RGhDSDBPZXMxMjlHV1BYeHRNM0o5VlQyN2M4Y1J3YTlqR2hqQVhuRVdINDhlRCtWMy8wUHRDMmdNbS96eW9nS3hvbFFoSGdLNEd1RndIL0w2Mms1cnRsVExrMWJGdXhka2VCdGYyWXdLQWxNZVBhT3FqRGhUMncvaUJjQVRveEVOUTlpd1laU0FySTdWbjQ0bDA3V0ZnQW9CVUJPT2Rpc1VvTTRldHVNOXJCQ1FnSENFMHdTZ0RmbDliMGhLL2R4MnJZTnppWVhDOVRjVUVBREVLeGdmenU5YnBjeUkySEVKQTN1azR2S0FWSXh3QkRoRXprc0hiWjlMTEo1TjR4cDk2SW5QamJwdEtKdHFjQ1FBQ1huQkdFYTdpU0VDV1BZL0p0eW9neWNKR09BTHNYTjErN1BGckgxWGNrT0R4NTd0b0JLU0x5WmNzU3VocndWazZhck4zdXBDc3NPeGZvbnhtK3ZNK3Z1allNY1g2Q0VlQTFRRnBvb04rbjNVWXY5VHQ5aHJyYjMwdnJrcVd5QVF3TmRSeGcyNFduRk5IYmJRMGxKcmF4OTVpcHo2OWowKzZ3RWZJSXh5QlFjaXBsK0NRQ1NLcFdFWkg3eWszN1dPZG50VDJuQ1FCTHRxbHRNZWlaWnRrVVhPYzdjWHVIM3YrV3JhdkVZN0F3Tk5yMEhVelNXUnNUYmZ5TnJnSWxpZitFZHEwdzB6RjNrWExzWUFGWkx2M2tPdDc2SHNNejFsOElod2hyY0ZHdGo5TDAvK0pCY1F6dWhlUWJUME9uK3IzVVdCUk9LRGR0ZDJXeHNQb2ZqeXZUUC9IdmJMNFJEaENJb05NWWZyZjNtaEVZOFpFNGZ4OWpzeHlxN0ROUkU3OEV1elQxbHpFUVNkZlBTRXk4WWpYR09FSWtRc00yVnE0R09EclJaaU1tU3c2ZmIrWmFiOTErTVVzTXloNVQ3QTZkb2d3YUJNSFRXM0FlTVZqODM1enhvNncrRDlNQUZzR2xOd3N6MjRkUWpUS2luVENnTkl0NGkyc0w1azRQcWpOaitHOXRCUDFMQUUweVMvekZxSlJGbzF2NnJZNVFUUjJQZ2JJZXhxcTcwcUc5MElYc0JCSy84YmpDR3NHL1NIS05xenltcGpHSU44N0hvUzAyOURJdFBjeXNpMDluS1BnWnNCYklHNGE0UWlCRGg3aWZaS3Q2Zk1CYitNRGhXTUhiUU50WTlMSW5reXozYlF0c1VNUzNQRHZVUHI5MVlDM0lHMEFMelBDRVFKYmNmWmRvbUdWaDdwTlpyeU53ZHNDM2tmWXQ2Mk1qQU12STk0bWIvcDlaWVlKVDdJWG5oT1M3aENPd0VwejN3RmpoTkR3cWwzZ2ZZUnQ3YU90bDVITWZQL2VxU3pjN3oyNEZYYWVQSVhrR0FhSnMvcWFleUFhQlRKelBVTUZuNFF2UEJ6NUkwUlFmSzNiMkV5OUdSREh1REdxTHhGN24xdUlSdkZJanhHTjN2VjVlUjlmUExpVnorTFFZTnp3c1AvamNVeDY4UGNobnZHWDU2RnVpeVBlaXRmdHBURHRhbm15QlJWSE8yanJaYVNHWHdBT2hmcGpZWVlOVzJxZ2xxOW40SEZNZDJESXpES1c1ZHlUV3lwNEszNmpNV2h2elBGbGUyUVN1cS9iM2hRdlFwQmpoZ3N2WXlNQ0VJMSs5M1VSYWI1c0UwdTg1VndkSGVERFdJREhNY2tKSURmRGxsMVlCVzlqV08zSFJRQTlzVzNoalJsdEUrZHV6ZExUaU9jb25INitNSDU0SFkwdVdET3k3b2NIanlPaTBRY0lnQTRJbWZpMWFQaHRpeDhqbm02OGp3R0lCNGxQMVRHampZQ1FSQWN5N0FQcjUyWVp5dVFMMHY0cURocndZRnpBNDRobzlJRC9NYUVrM2FiRSt6akJrK0RkdTNWeHhqUnhyV0czQVZrZ2Z2UHcxdDRSN2pBY2VCeVo0SWZtRHRFWUxqcDR2emJIeHowSzRuMzhwc2szTVB4WTBYZ1p2N1lValJMUFNOWjAyUDE3cmdzNzM3alJPUTBRanBDWWFCU283eGZINURKV29kQ0dqMUlhaWlENFFjZUt6Q3pqMnRvZU55cmxtekpPQUlrQ1g4ZG94Q1BDRVJJVWpVTEZXNHBDUElwQXlNeng5UjRiSk9IbW01WjhnZjdHQ2ZFeVNxeXhGSDV1bXd4eEs2Yy9zWk1RRFQ2UDBZakhJY1lMWWh3UmpRUHlVcmMvRWlQaWEzZWxjVk5RWGtSb2p0ZXE4L2Zsc3A0cnAzMUV1S2lvUC83emVSNHhaRnYzQ2g3SGVEdjd4SFBSS05EUkkwU3laMDI3ak9zR09mdDRqdmV4MDNHaU1NdmtCeGVpOFIyaU1jcisvR3pheFRCM1RaTnRUWWdMd2hGYWVoREtBRzRWNFJpM2VIem5hRkw0ekpHRjdzY0lQV3IwbzZNZlNaWnIzUGcrVmpmaWtURUM0UWhIVEFoTmNlYlRBRzZYR0tpNHhXUHBTRHdLa3F5eG9JYWJrekhpMnJRdjRONGducWpYaU1ib1dRUndqNGhIaENORUxocERXTVdDWCtKUjJ2VlhpYUZrY2pocWZIQnhaT0NxYUNTMkRPSG9FN0lZSWx3QzRRZ0hNSFhrUmVnTFBJNkl4Mk9ReEp1NWxvNkIvVVRqUkJkcWw0NStKS0lSZk9XS3VHaUVJK3czTWVUR1RTWXJRQWppc1RteXNNQzZXOGNGVjhXOEVZMFFFcDlaV0NJY1lmdmtJTWt3dU9jaE5mRW9VRFI4ODdnZ0U2ZUl1N2NPZnl5aUVVS0JoRHFFSTJ5aE5PSEVOUUxpMGJWNHBHajRuNExSTHVaOTd2QkhJeG9oSkU1TkdOVkZFSTdRK3lRUldseWpEYXRCeEtOTFpIdEtzaXBIQ1k4SDRubXQ2dXQ5Qno5K2dtaUV3SGpMZ2hMaENIOU9FbGxIRTBSZnNMMll0bmo4MHNHUGJvcUdUeEljRHdxekxPYmR4VUpTNmpSV3RGd0lrQ0xseFNUQ0VWWXBNUUVFTEI3RkUzRGJ3WTl1eXZZa0VlTmtsZG41Mk5GWFVOd2Jzb0R2blMxcmhDUG9aRkVZdC9GTFE4QldOZUl4TjhzenFidEFra0tpTHR1ajFSUmNsdGxaNVJiUkNCRnd5ZUVCRHNlZGVsREFDdUZORnFQNjQzc0VqL0pRdDcrTU41cDhlMjRLMTNjWnEvdXBibXRGWkRZcmpkdU02WFdpTWFlRlF0M2VGaVo4UjRVa2Q0MzA3RzFvQVI3SE1JbkZBNERIRVl3TzVKa083RjBSVGRtZWpzcnNyUEpZWHlRVlFNTjVCTTl3U3B0Mk5BYmhjUXh5MHJpUFNEU2M4RlpCMjNhVEVkeGxhU2tScDBYZDdxYUIya2p1dSt1RU9Ed3pzTm92djBYMFNQL1ViWHZCbXowZVBJN2hFVldoYndvM2c3V0ltUGZnRVJCUjJwVHRPUXVwbjRqSDFQUlRSU0ZETklKRmJHTjB3U3RGT0thMDhzdE51RFViVXhtVW9KMTRMRTAzWlhwV2tXU1NSUWdCODFxSDdsdFBmZjhkdFJvaDhqSDZpdkk4Q01lVWlIR2xsUEZhWVVVOGlsQjY2T0dybXJJOVV4KzlqM29DVEZYLzhuTlBYMGtHTmFReVJuTkViNXV4aVJqSFFGN1UwdHQ0RStHalBkVnRrTlVmL0NXYTZvK0Y2ZThvelNmajBja282Z2t0ZTN6K3gvclo4ZjdEdW43NFg2U1BSNnpqa2VCeERJY2kwdWM2WjlzQVZ0RVl1ejYza1NWcjlKdldSeDEwb3E0dkVZeGZleFNOTHozYkdzSWhZMDRGaEdPWXE3N014RkVPWVJOTVdyQk9QRmIxeDZlZXYvYmpVT2RkYTZLWWVEeXZldjdxSE04TEpEZzJFK3VJY0l5YTJHdFA1YnhpMkNBZXhTdncwUFBYTnVkZDk5WXVyWE9tKzE0Z2ZxbHRQS09sUWFLTGV1YWVZOFlyWWh3OWYwSHhuQkt6aTlka2M4S0dQdEIzdktQTm5WbDY1SjQ3N04rbDZlN0l3RzFJa1c5Szc4Q210aW1pNmlieXgzeXAyejhIVVJ3SUhrZFdSTDVBUlg5WWl3cWJvZnBCWitkZGF3Sk1sK2RNN3h4YkVJMlErTnh6MnVmT0FzSVI2THh1bVlSVWtCbDZGNCt5blhvMzBOZkw5dkc5cThRWlRZQ1I1K2t6QVdhVlQzajRZVXNielFaYzBQUSs5L0RHRDJ3ZmJGVjczWGtuT3Jta3dpZU5hUU5ZSzdqTWNGdldEYks5T3prMm1VUW41TklNbSt6MlVOOS9Sb3VDTGUyMFNrZzRDcFRtT1FBOGpxeUVmT0thTERmWXhBQWxldFlocDdjY2xUaWpIc3Y3Z1VXamxON0phVTJ3WTNGem1kaGo0M1ZFT05LWUEwVThTUVd2SGJhSXg4b010MlZ0dDlNYjJXN2VKN3hDRmtONnp2UkhEMHc0eGJNQ3U5cElncy9NWXVxUXhRVmIxZDZ1K2xMYnByWjVvd0lCWUYzZjhHSEx1dUZuOGV4TjdWVTlrMU5QN3BYVFlXQlgzNUlreGMrSlBqN2IxWHVDeDlGZnNvU2Z2U1JSQmphaFc5YStaT0dMSUpURW1lbXF1TlVFbUJ0UFJLT1EwM3BnaTJpVVJVWEJuQXM3MndvZVIyODdzYXg4emhNMndWM2ROb2s3Z1cxOXBESit4V0k5cWppVFJVL3BXZitWUXQrVXZJSk5mVW5hclBTbkMrWWNRRGlHMllsSEpvMmkzN3Y0VUxmUEtXYUFnUHFKYkYyZmVuaFBJMm8yd3BhK0pBdWRxOFROUURId1BXR3Iyazh5VFBDVHp4Um5oVTFvUE5JbnoyN3IxRU5UWFNNYUFkRzR1Ky9xZGowZ0hCR09nWE9EZUlRdGlFZjZCVE5zUkdvMmxwZ0JOb2pHSE5ISTNJdHdqQU5XUFloSDJBUFBFbVY4Qk52QUp0RW9pNjRiTElGd1BManRFT1BvWFdlV0dJdi9zTVJhM3VFOWdRMzlwakxwRlMzZXhXM2RYMWh3d2JyK0l1TW9uc2EvZWFyN3pBZ3pJQnhENjlDeTRybkhFa3lHUUw5cEFRa3hzSzZmaUdOaXhpSnJLLytqMzJ5SHJXci95RERCVnE3a0ZBNk9KZ1FiTGNCOWl5VitNV1h5Z3hYUktDRlFjMFRqVGdnVlF6Z0dCNEpvTjgxNXdkVGNBcHZDa0NnanlIWmJnUm5BRW8wUzYvck5wRjBiZUY4eVRJQndSRGpHaVpROStTb0IzcHd5QTRLVzU2SHVKd2t4OEZzd2pqVCs5elBXMkJ2bWsxM3RpaGhIN3pyNnMvR3pGcHpQUE5WWHp2bldvSXNJMlk1TDFiTWk1WGN5V2dLb2w3RmdQcUVQdVFhUG8zL1F5UTlIUklLY0Z6d2o5akZ0Tks2dlNOZ0VCYTBnZWNFNHRyeU16Q2VId3h5Q2NBeXF3N1BLYWNkYnM0eDlaUEpNV3p5V1pubHVkR3JjNG5WUGV2NDQwOXFNRXN0SUFzenhFQWVLY0lURWtCWDJ4M29BWFZBMFBHbFNqUE5qd1pTdWFKVDJ2cWl2OTFqRGlUMUhXQUhoR0FxVUFYQzdhcFFUWnlvOHVlbWhucmVIaEI3NWt5WUhRVm9DSjVkRnNtRmIyalVJUjRSak1KRE41Ujdac3JsSFFDWkpLbDVIS1VGRU5ubWFndkhHc0xVS0NFY0FCQ1MwNThlUEg1SmRuVUpSY0lwOUl4akJMU05NZ0hBTUJUeU8vUXBJQ29qSFR4SDU4K0Z0UkRBQ3doSGhtRERFT1BZcklMODJTVFFVRVk4VGpmdUwyZXRZNEcyTVZpeEtsblNodFgwUmpJQndCUENFY3gyVUZ6cElzOUtNVUZ4RitseHl0Q0RleHZnRW85UmhMT3RmL2xkZkh3MUpMNEJ3QlBDU1V4Mmt2MnNoOFF5VHhFSEVYc2VDdHh1VllNeTFjTGZVWWJ6Q0lvQndCQWdIS1NSK3I5dlkxMnhqSTdJODVFa0xuVVBZWWxIT2twNWEyOUVVN2dhRUkwREF5RGEyMUVmN1Q3MlFKTk1FU29SZXg0SzNHclJnYkx5TDM4MnlhRGZiMFlCd0JJZ004VUkyeVRURVFpSzJoZ1J2WTVoaWNZeDNFUkNPQU9raFhrZzdGaEl2WkNCRTVIVXNlSnZCaU1VejlTNUtUVkdKWGNTN0NBaEhnSVJwdkpEUDZra1lZUkpFVjhmZ2JReERNRGFaMGJKWUVlL2lCVllCaENNQU5JZ0hRVHdKMzdXd2VJNUovQ1FDcnlPaTBWK3h1T3BkdkRKNEZ3SGhDQUE3a0xpbEc3eVFYbE1FZXQrY0V1T25ZTXlzdW90NEZ3SGhDTDB5eHdUUjhKY1hrckkrZnFCZXg3c0FiNTB6cWYwUmkyZGFxa3ZhMHIyaDdpSWdIR0VnbUJUaTVLY1gwaXhQcHlrbC9nbVREQy9DdUdjNFFqRGEza1VwMWNVeGdNekZDRWNBNkF6eFFvcG40cHZFUWVHRkhJNGZQMzVVOWNkRFFMZDhpN2R4TUxHSWR6RTkyUDFET0FKNGg4UkI0WVVjbGpLZ2V5MTRYYjBMUnJ5TEFPdjZScjJLeFFvZURWUzZvb1UwZVRUTDdjZ1ozcVhlK3R3aUFFSHdVTGVIakxmVlMzc1kxUis1WGdqRmRIbWp1eEt3Qmp5T0FQNkFGN0ovcHR3alNDRi9LZWh2bGtjQWZrUTBwZzJpY1VkL3dlUG8xZUFsUXVFYmxnQUx2SkRkOWptSk1mM1A0MXVVZ3Q4ajNsUW43MTdzbWh1OGkvQzNjRHpCQ3B2QjQraFhZeVVnRjFiQkM5bHRueE14N25OQmNMeU43Z1VqM2tYWXVsakRCRHY2RUI1SDd3WTFYZ2pzQWkrazJ6N25zNmYvZjd4akorOTRaUEF1d240UVU3d0RQSTRlTmxwTUFEdkFDK2tROWZRL2VuaHJsT0JwTHhqeExzS2hMREFCd2pFMG1DaGdYNmdMNlE0ZnQ0UkxYc3RSWW5GVVg0Vm16SCt0cjdkWUJSQ09DTWVZSWM0UmpnRXZaRHRtbnQzUEU1bWRCd3RHdkl2QUhJeHdwTkVDSEFoZXlDUHdNRW1HcEpqOXhLSjlxZ3ZlUlhEQkFoUHM2SGNreDNnM0VGS1NCMXp6WXBZZXRTbVorMXY3M2tURmh3LzhVNzhySnJETjd5b3p5MFFYanY4RDE0dElTdkVnSElNY0ZIa3AwQlZrWkcvdmUyS1QwNkhmVWYxdUNEWDQrOTJjcVZpOE5teERBMzF2TU5pcTluZHlCK2dDT3haeXFtVks0RGMreERxeVRmMm5ZQnh6WmpUMEJEc3lDRWNhTDhBR3hLdjJ2cjYrUzBLQmJ2MkJINkp0eG12NEtSZ2xQbGZHUWduZFlVc2FtSHNSanJDRkNoTkFqMGhDd2Iwa0dLU2VUS014b0VPZUhIR1hjZ2lCSnJzVUdqSWdudkVMdWljZ0hCR09RT01GUHprM3Y3ZXhpNFMzc2F0RXYzdEl3VGl5dHFPbGxNNHAzUkVHV0RoV1dBSGhHR3JqRmVINGdpVmdJRTUxOHY2dU5TRlRFNUN6Ukw5N0NNR1kxWmRNMWxKN2tlMW9HQkpPYlVNNEJnOHJIL0NCS3hXUVZTcHhrUFhDYlRiUXd1MHhsUkk4R2hJaFk5eDlmVjNTellBNUYrRUlOR0tJQzVuYzd4TVNrRVAwditpOWpTb1lSUnpmSUJpQlBvOXdCQ1lSU0VkQS9reWtvZi9SNS9jUWkyY3JncEZ5T3VBZHhEY2UwS2NwQU83MWdMdGdrQVhQa1F6a29oNUh5dGpFamxrbWF2Um14OXFHb3dodGVLMFh5UzdnTTFMTllJSVo5Z09QbzkvZ2RRVGYrWm1KSFpzSFVrdmk5Rm1JdjRwSk1FcFd2bG1lK1V1R05ERFhJaHlCeVFRZ0NRRlpNbkVoR0lHNUZsYjZPbHZWM2cvR1BweWRDM0Fvd1c5aHkxRjNabmxxU2VmVWRqb0pXVEFhdHFRaFhEaWYra0R3T1BvUExuUUlFZHNER1dUc1VJK255TndGTEJwenN6eXdBQThqaEVxSkNSQ09DRWNBdndUazE0REwrTXpvNCtzRkkxblN3QnlMY0FRUDBXTEVUMWdDQWlmVU9wQlZKTi9oU2pCbUNFYUlpTHRVaXU0akhGa1JBWVF1SUlNNHlyQ0hVMlNDT0MzR09ocndIc0VJekswSVIvQ2ZLU2FBeUdpT01pdzF1Y0pucWxRbkxoSDM5VFV6SEEwSThmRVNXLzFaaENQOFFqMFNITUFPc1FwSVNhQXBQQmFRczBCL2RodkJLS1YxWkZMOVhsOXZhYVlRSVlqR1k4Y0h5dkVFOHFLV21hbGZzUVJFakpjbGZEbzhSY2JMMDJLMEZpT2xkU0IyL2lHKzhUandPQVlDU1RLUUFFMEpuN2xQQ1RRZG5pSlRlU1lZbTB4cFN1dEE3SkFVZzNCTWhnSVRRQUpjbUdVQ3pjeWpCSnF5ZzUvcHhUYTFsZmhDcGpTa0Fua0RiY1lNdHFvRGVsbkxMYk1GM2dCSWpFOHkwS3ZuYjZpKzUvd1VtYUZQaTFGUkxvdlJLNW9ZSk1SRDNmY3l6SEE4ZUJ3RFFpZE9Wa3FRR3JKMU91Z1oyQjJjSWpQb2FURWF4emhITkVLQ0ZKZ0E0WmdhSWh4Zk1BTWtobmpaYjdTQStGRG55czQ4L1ZtSENNWUpjWXlRTU9KdHJEQUR3akVwOERwQzRrZ3R3VzhEMVgrc1BQMVord2pHa2NZeFNtVUc0aGdoVlFwTTRHQThJY1l4d0plMm5ERG5UQUNRT09KNWwvSTkweDc3bm9zQlUwNkxHZmQwdnpKV1NHbWRqelFYU0J4aUd4MkJ4ekZBMU92SXlnbFNSN1phUC9kY3ZzZEZiR0xWazJpYzZBSVQwUWpBbklsd1JEeitMSkw4aUNVQWZwWHZtZmF3ZmUwaU5ySHNXREN5TFEzd0o3ZkVOam9jWTlpcUR2amxMYjBzOTFnQzRCZXlmWDNkMWVreldzTG1lNXY3cSsvdHJNTXhvVENjK2dLd09pYU1LZmp0RGp5T0FhTXJxRHNzQWZBTE8vdDYxRUdmazhtbmphZS9rMnhxeVRTWExYdER0alRBS2xORUk4SVIvaVEzbE9jQldFV3lyK2NkMVg2c0J2cS9tMFJqWVpiRnlTOTQ3UUIvSUlsb0JXWkFPSUlGaVRJQUcybThqNjVMOTh3RytyK3JndkZNWXhsSmZnRll6elVtY0E4eGpyRzh5T1VFY29rbEFOWWkyOHNUVjF0VzZ1VTdsR2RYcFlPMENIcGwySllHMk1TWHVyOGhIQkdPc0dVaUdabGw2UTBtRW9EMVNFaEhwc2NIaHR6WDgvcmpodGNKc0JFNUhuUTg1UG4yTWNOV2RTU29KNFhWRmNCbVpGSDFiY2d6cngySXhtdEVJOEJPSm9oR2hDUHNKeDdMK3VNV1N3QnM1U1pFOFNpeG12WEhaMTRmd0ZZK2hMNnI0UDFZeEZaMVpDK1U0d2dCOXVWZFYvVWVPeEtOVjd3eWdLMXdyQ0RDRVk2Y1pBaWNCNGhFUENJYUFmWkNZcGhIYkZGM0QxdlZFYUp1ZXVJZEFYWnpvMmM2K3lvYWMwUWp3RjVraUVhRUk3UVRqNlVoM2hGZ0gwcjEwdnNvR2ttRUFkZ05jWTE5amsxc1ZVZitncGZIa0hHaUJNQjJ2TnJtSXR3RVlHOXU2MzZiWXdhRUk3aWJnRWlXQWRnUEx3THI2Yk1BZXlOSENvNHhRNyt3VlIwNTZrR1JHQzdPc3diWXp1V1JKOEs0cGtRMEF1eEVpbnhubUdHQXhTMGV4MFJlOURJQjRDdVdBTmpKbTNwY3JBYnFwNUxVUnExR2dPMUVjUW9Vd2hGQ0VJKzVJZGdlWUJlREhGZkdzYUVBaU1ZUVlLczZJVFRUK2dPV0FOaUtiQk1YQTN4dmlXZ0UyTWsxb25GWThEaW0rTklwS0F5d0Q3MXRXYk1iQUxBWHdaejJoSEFFeENOQWV2U1NzYWxaMUF1RHR4RUEwUmdBYkZVbml0YTlva0E0d0dZdTFCUFlOUVdpRVFEUkdBcDRIRk52QUhnZUFiYlJhV0Z3VFlqNWpwa0JFSTJoZ01jeGNmQThBbXhGUElGZG52dGVZR0lBUkdOSTRIR0VaVU5ZRmo3K2lDVUEvcUlUcnlQZVJnQkVZNGpnY1lTZjFCMVVoT003TEFId0YxMTVIUXRNQzdCMm9mWUcwZWd2ZUJ6aHp3YXhUQWFZR29MMUFXeWU2ckZ5NUxDZnljL0Myd2p3dDJpa3VMZm40SEdFUDlCVlhtWTQyeHJBNXR4eGhuV09TUUgrNE5Fc1QyeENOSG9PSGtkWTN6Q1dIcEZaZlYxZ0RZRGx4T2Fxcm1QZHZ5UmVFcTgrd0pJN1dVejFmY3duSEFjZVIxaEwzWUVYWnVsNXZNTWFBRCtSdW82dGhhTjZMaEdOQUV1KzFQUE5CTkdJY0lRNHhPT3pkR2pEK2RZQURTNlNaSExNQ1BBekhPcmZlbzY1eGhSaHdWWTE3TmRRVGs0eXM5eTZ4bE1DU1U5MjlaaDUxcUlmalF4Sk1RQVN6NWdUenhnbWVCeGhMK29PWHRVZk11azlZQTFJbU5OYS9FMWEvUDhKSm9URStXTEluRVk0UWpMaVViYXVNOFBXTmFSTkcvR1hZejVJbEY5YjA4UXpoZzFiMVhCY3cxa21DWlNHckd0SWNBSThacnVhYldwSUdMS21Jd0tQSXh5RmJETm9hWkpQV0FNUzQ5anRhcmFwSWJsRmxsbDZHY21hUmpnQy9CS1FSZjN4MmhEN0NHbVJJUndCdGlKZVJqbmpmWVlwNG9LdGFuRFhtRGl1RU5MaG9DTUk2NzRoVzl2L1lUWklvVytZNWJaMGhTbmlCSThqT0VPUEs1VEo5QXZXZ01nNTE1akZmY2t3R1VTT2JFdC9rZ1VWb2hIaENIQ0llSHpXZ3E1c1gwUHNaQjM5VzREUXVEWExjNllMVElGd0JEaFdRTTYxZE04YnN5ejJDb0J3QklnTGNRNjhyc2Y2WEkrcGhRUWd4aEg2YVdqTCtFZFpqWjVqRFlpRXZlSWNpVytFU0FWandaWjBtdUJ4aEY2UStFZWRaTitaWmZBMFFPaWNxeWpjeFJoVFFVU0M4WTNzSmlFYUVZNEFmUXZJZncweGtCQSsrNGpDREROQjROd2hHQUhoQ0VNTHlKa1ZBNG1BaEZEWlJ4VGljWVJRa2FTWGY3U0FONElSRUk3Z2hZQ3NWRUQrbzRNVVFFaU1IZjBiQUYvNFdWWkhCU05KTC9BWEpNZUFYdzF5V1JzdnJ5OHA2VU1oY2ZDZG5Ra3lkWnRta0lVZzJySlpIdUJRY2p3Z0lCd2hSQUY1WmdsSU1ySEJXK294OUdSTE84N3FqM3VzQkI0ajVkS21lb0FEd0U3WXFnWmZKMk1wSkQ2MU1yR0pnd1JmRnpuWmxyOGVZU0h3bENaRGVveG9CSVFqeENZaVN5dVJoamhJOEkwemhDTUVSSlB3UW9ZMElCd2hlZ0VwaVRTNVdTYlN5SG5ZTDFnRlBHQjg1TjhCOUlYRUwwckN5LzlJZUFHRUk2UW9JQmQ2SHZhb3ZqNFlDb3JEc0p3ZCtYY0FYU1B4aSs4azVFZk9rU2JwQlZ4QWNnekUwWkJQVGlabW1VaHppVFdnWng0MGxHSmR1NVNKbXVvQTBEZXlIVjJ5RlEwSVI0RGRBbkprbG1kaVQ1aXdvU2NlSmNGZ1EzdGtnSVcra05DZHBwek9Bbk1Bd2hIZ01BRkpPUi9valhVbGVYUVI4eDNyUU5jTEYwTTVIVUE0QWpnVmtXeGp3eERDTVRQVWNJVHVZRHNhQm9Ia0dFaGhVcDlaeHhxU2pRMWRMRTdJbm9ZK1dNMk9SalFDd2hHZ1F3RnBaMk5MVWZGSHJBS09XSmM5alpnRVY5elYxNzlrUndQQ0VXQVlBZm1zUmNWbFluOXRsbHMrZUNHaER6RUpzQzh5SnNrT2lSVHJuc2pPQ1NZQmhDUEE4Q0p5cmtYRlIyYnBoYVFtSkNBU1lVamtLRUNwdlhnbU95UmtTQVBDRWNCUEFkbDRJVVZBTmtjYjRvV0VmV0ZiR3RwZ2V4Y3pNcVRCWjE1aEFvQy9SR1JWZjFSYTBxZkp5TDdBTW5BZ0dTYUFIWWgzc1VRb1FramdjUVRZTENDSmhRUUExelNaMFhnWElVandPQUxzSnlMblpsbFFYRXF2NVBwcjZrSUN3TDVJWm5SSmtnc2dIQUdPUkUvV0dHMFJhNVduSWxJOEJLWGVmeU1pT1owR0FGYVJrbCtsQ2tadlMraG9XTTYyT04wNUpZQUE0UWcrSUlMcjQ1YkI3TFY2K3J4RXN4MEx1ZlNVRUhtZUsxNHJRTks4V0dKeEhzZzlTeXozelphL2w0VEJpbGNMQWpHTzRMdXdEQUx4am1wWm4vOFppb3VuQ0ZuVklGdlJkaG1kZVVEM1B1SDFBY0lSWWlBTDdZWlhFbW80NGpBZHFPT1lKcExvOHNIOEx0SmRCdm9jYjNtVmdIQ0VHTGpRT01JZ2FZNDRGQTlFL2R0L3pkSWpBUUJoSXd0QnFiRHdSbzhBbklaY3BMc2VZL0UyQXNJUm9pS0tRVTB5S2NVallaWmIyZUtoNElRYWdMQ1E4Qk1KUXhHeG1QdWF2SmZxR0FzSVI0Q0dQS2FIMGEzc0tTZlVBQVNCZmFMTFdNTlFvc2t1dGc0NUFFQTRRalRJZG5XVWlRZFdRbzJJU0JKcXdtYU9DYUlpbGZPaVJUU2U4cm9CNFFpeGtjZjhjSnhRRXdYVXVBdWZGRTkwd2RzSUNFZGdjQXRjUk03eFFnTDBpaVN0L2F1SkxrWEUzc1UvMEcxcXNxa0I0UWhSY2g3cmR2VVdBWWtYRXFBN2JPL2lKTkZqQVBFMkFzSVJvaVpQOWNIeFFnWUxjWS8rMGNRdUp1VmRaRXdGaENNd3lLVXBJTmQ1SWNGZmtVamNveC9ZbWRHcHhDNXVSZXZqWHRJMEFPRUlNWE5Lb2RvL1JPVGNPdUtRdXBERGcwajBqNTkxRnhQSWpENEd4bEpBT0FLRFhhSUMwcTRMS2FmVFBHQVZiMkNyZWhpYVUxM0dlQmMza21NQ1FEaENDbHhwSmlDc0Y1RnlPazFtbG1ka2swelRyKzJyTlgrTUY3SS9wSzAzeVM0eG5lcmlIRTAwdk1BU2dIQ0VWTURydUZ2RUxLeGtHcGxNMmNZZWhnVW02QnhwMjgxMmRNRjI5RjdrbUFBUWpzQ2dCK3NFNUxOT3BpSWczeUVnTytOaGs0REhOSjNhdkttOVdHSU94bEJBT0FKczRsSXpBdUV3RVZraUlEdGoyNVkwcFpQY0ltMzNqV1pIenpESFlXaUNJVWNNQXNJUldESER3UUpTdHJDSmdYVEQvRWhSQ1ljSnhxYitZb1U1am9aUUgwQTRBc0lSamhLUWhWbkdRRklMc2oyTExYK0h5R2xIay9SQ2huUkxOTEh3Q2tzQXdoRlNSSTRnekRCRGEvSDRyRWswVWt5Y0xkWGptUi81ZDdDZEJ4V01FcWVMNTdZOWVCc0I0UWhKazJNQ1p3SnlycWZSU0NGeHRxK1BzTitXdjE1Z29ZT1JOdml2eGpGaVAzZGNZd0pBT0VMU3EyZHFPam9YUU5QNlF3UWszc2Y5ZWRoRFZDTEc5K2V1dmtZa3ZyaEZFd3FwM1FnSVIwZ2F5UXhrNjhXOWVGeW85L0VUMXRpTHVhTi9rem9pcmlYNVpjSzJkQ2ZnYlFTRUk0Qmh1N3BMQVZuVUgyOE1wWHQyVVRuNk55a2pIbTZTWHhnckFlRUkwRG1YZW53V2RDTWVSZkNJZlRuL0d1SFlGYmQ2cHZRQ1UzUkRQVWFLYUtSMkl5QWNBUlMyWUxvVmo4OTYvdlVYclBFWGovdHNxMUozY0NQdk5Lc2ZHQ01CNFFqUUcxZWNKTk9MZ0pUSjV4MlcrSU5EQk9FZDV2cUZ4RE8rWm11NmU3UnNHVWt4Z0hBRVdDSEhCTDJJUjVub1h4dXloQnNPeWZ5dE1OZFBKSjR4MjFIQ0NOeFJZQUpBT0FMOHpUV2xlWG9UanpMaFo0aEg4M0xnRmpUbFpSQ052YUxleGtzc0FRaEhnTCtSd0cvaWVQb1ZqeU9UZHIzSDJZRTJXeVJ1cjBZMFVtcW5Qd3BNQUFoSGdNM2dkZXhYUElvQXlCSVdROGQ0RUV0RUkvUUIza1pBT0FMc1JyeU9VOHlBZU95Qmx5TlBOa2x4dXhyUk9Bd0ZKZ0NFSThCdXlMQWVSanptSnEyWXg5bVJ0bG9rSnJJUmpRT0F0eEVRamdDSGdkZXhmL0VvTVk4cEhmOVkwajUzSWdzSmpnOE1yMzBDSUJ3aE9kN3FpaHY2Rlk5Vi9mRWhnVWQ5YWxuUWUyYlM4TTdtbkFiVFAvWFlKMG1DNTFnQ0VJNEFyTGhERUkvaVRZdjllTUpwU3hzOW0vaGpIYjhjR1FNSzdVU2pKQWNXV0FJUWpnQ0hjMTRQb2d5Z3c1Q2JlRDFxTDQ0V0pURnZWejhoWGdaZDFIQW1OU0FjQVk3a21rU1ovdEh0eVZpRjBjeEZ6SjdHaE1icW1jMkphK3dmRGMrNXdoS0FjQVE0SGxsNWw1aGhFUEZZbUtYbktUWUtUMytXTHp5MGpQK0U0MFRqR1dNZDlNa3JUQUFSYzFrUHFybWVzUXo5aXNjUlZ0aHFIeEZZSjFnQ0hFQkNEUFFLSGtlSW5Ta255Z0JBak5SajI3aisrSWdsQU9FSTRBNjJyQUVnUnRISUZqVWdIQUU2NHEzV053TUFpSVdpdmk0d0F5QWNBVG9hWk1teUJvQVkwQ3pxOTFnQ0VJNEEzU0ZiMWhRbEJvRFFSZU1aWXhrTUNWblZrQklYVWhoY3k4VkFPcFBzd3NSYkdQbXhiczlqM25SU2xJWkMzekFnZUJ3aE5UNXlsblU2YURIcW1FOXFtZktXazFvSVNhejJXeXdCQ0VlQWZwbFJvaWNwUkZ6RmVBemlFelZLa3hLTjRsbitqQ1VBNFFqUVA4UTdKb1I2SFdOODN3VnZOeG5SU0Z3aklCd0JCa1pPbFdHYkx4MWtpeThtcnlQZXhyU1FkODNwTUlCd0JCaVk5N1Y0bkdDRytJa3cxckhncmFhQkpQUVo0aG9CNFFqZ3owcGVZNGNnZm1LSmRYekUyNWlNYUpTRkxVY0tBc0lSd0NOT1ZUeVNMQk01Nm5Vc0luZ1VUa0ZLUXpUS2dwWUZBaUFjQVR4RWp1MGk4RHdOOFNoZXg4ZUFIK0d1Zm9hS054bTlhR3pPb2FaZUl5QWNBVHlGWkpsMENOVmo5Mkx3TnFaQ2FUaUhHaENPQU40anlUSTVab2diOWRqZEJuanIwL3JlRjd6QnVORUZMTWt3Z0hBRUNJUWJUcFpKZ2huM0RCNktSbG00dnNjU2dIQUVDR3lDSnRNNmVoYWgzZkNQSHovbXZMYW9SYU1zV0crd0JDQWNBY0xqMUhBc1lkUUVLTUllZVd0UmkwWlpxT0pSQm9RalFNRElLUTBWNGpGcVFoSmp6N3l1YUVXampER1ZJWU1hRUk0QXdTTlpqU1ZtaUphUXhGakY2MEkwQWlBY0Fmem5iVDI0SXg0Qm9DdlJTTmtkUURnQ1JNWVY0akZLMlA2Rklaa2lHZ0hoQ0JDM2VNd3hRMVNRcFF5RG9BdlJLeXdCQ0VlQXVMbEJQRVpGaGdrQTBRaUFjQVJBUEFJQW9oRUE0UWlBZUlRa0dXR0M0RVZqZ1dnRWhDTUE0aEhDSmFUVGdSQ09ZWXRHR1NzK1lnbEFPQUlnSGhHUFlVN2tVZ29scE5wNUhJRVp0bWprS0VGQU9BSUE0akZnc3NEdTk3UnVaeU5lVzNDaXNVUTBBc0lSSUJ5ZTZ1dEJMOFFqaEN3Y1E3M24xRVZqbHpHTkw5YjQ5b0xGQWVFSWNEZ3lnSDZvcjljL2Z2dzRxYTlSZldWeTFYLzJUMzNkSWg1Qm1YRFBFTEJvL0ZKZnY4YTMranFUTWEvK3N6ZjE5Y21FZFE0N0lCd0Jla2NFNFQ4NmdFN3I2Ni9DenZXZkxlb3IxNEcxS3cva0RTZk1CREdwUzd6Z2VZQzMvbFpqTThIZnRuWFdzV2k4MDdIdXVyNmUxNHh6VlgwVjlUWHVlS3dEaENOQWtNaFc5QnNSaENJTTkva1BPckJtOVMvLzFmL3ZHbzRuOUovcmdPODk1L1g1S3hyTjh1enBMa1RqZzQ1MWt5UEhPcmF5QWVFSXlTTmJNV01aSEkvNXovWC9tOGxXdGxsdTY3Z2VWRVU4Vm5pSHZKM2NRNjZsZDgxYjlMSmRqVlEwdWo1N1doYTM3M1EzNWVpeHppempZOW0rQm9RakpDMGFzM1ZiTlVjTXFvVloxc2o3NHZnZUwyVWlJUk1XNGVXWWMySnB2Uk9Oc2kwOGR5d2FaVEg3U2VPMFN3ZmpuTnpmeE9CNUJJUWpKSWdNZkJNWG90RWFWSjhsWnNnc0UyanVITjZyVENSem5WaGcrQWxlUkh3TVJaZ0x2Tm5ldENrUjhaVnhXeE8wU1h3cFhONnJibkdUWUFVSVIwaU9ZdDhZbjJNR1Zva2hNbTZEeW1WQytZYVh5QXZLU0o1REVuc0tYdWZnb25GcWxqVWFYWWxHR1hNMkpyNDRHdU1xNDM1M0JSQ09BTjd5SkZuVFhYK0pGVlQrenJoTG9DSGpldGhKWGp6S2x4RTkwdnY2bVRMZTdDQnRTVEtuUllDOWQvUWpKZlRtamNZeExucDRCRmwwc0dVTkNFZElncUxQTDVQWUlzY0pOSkkwTXlmdXNmZUpmbXppOU5DVmJGa1AwcGJtamhZaFRlTEwwVWwrUjQ1cjRzMWtFUXNJUjRpZUZ4ZEI0a2NPdENJNlJPeTUyT0pwNGg2Sk5lcG5vaGRoSlZtbGZaMUxMVzNrcnFmdmtpM3JpcmZjVzFzU3IvVTMwNzRHNklzdVJzZERqV2sxVTk0b0lCd2hkbVpEZnZsS0FrM2IrRWNSTVY5bDZ4cVBVZWVpc1RMOUZQc1dNZkJPNDlNbUtnejY0SUlRaU83YmtXNU5mM2J3NCtTd2dwRVc2WDRlNnBsMFM1enlQSUJ3QklSakh3T3V4aisrY1REd1NqM0JPYkZxbllyR2l4NityaWtQVlZydHBOQTIwa2NzR1VYbnUydEhzZ2dRa2RWMmE3cEpmTW1IRkl3cjBHWUE0UWpSOHFKRmJMMUJFMmdrM3FsdEFvMTR3KzRsUXhQdlk1Q2k4VlpGNDdwakx1VWVScWFmWTk4UWo0N2JVSDNKbVBQVnRBdHo2RHZ4SmJqRk9DQWNBYnFnOHZYRzFNc2tBckp0QW8xa2FPSjliRC9oajNvU2pmS3UvOTNsUWRJUUIzbW5IM29TajV4WTFMNE41V2JwWlh6YnNuMzBudmh5NE5pMU1OMGN1d29JUndDRTQ0NEIrTmxLb0xsdDhhTWE3K09Nek91akpud1JhSzVQOEZpSGVCREhoM2pCdFl6VWE5TjlYRmx6WWhGRjV3OXZQMk9OWld4VG03RkpmQmtObVBnU3pkZ0tDRWVBcUFjM0ZaQzVhWjlBSTU0TzhUNXlRc2orazc0STkzdlRiZmEwaUlJUHgyNDd5bmEyaGpkMG5UaHpvZUl4cDJYczFYYk9kSnYvbTJrWHkzaXJDNHJDb3poR2hDTWdIQ0U5MXNXUGVYNi9MaEpvUkFESjhYZ0xCTURXU1gra1hxS3VqeEpzdkl4VEIrMURSRzdYM2tkcFB6ZnF2V2J4c1Zrd3lydVFSY0JWeTdieFdzTVdGb0daQWVFSUNFZUlqb2RRYjN3bGdlYlkrTWRHQUNBZy81NzRaZEozVll4NUUwMHNvOVBrQnN2NytNRjBtM245bHNYSFZzSDQwUnp2cFpiNHdDYnhaUjZpTGJSTmM0b01JQndoS3VhaFA0REdPbzFNdXdTYWMwdEFKcjJGTGJHTVlvZVdrLzQrU0RIdlVaY1ovZXJCRkFIWlpkSHdadkdSZE95amVxZGRDTVltOFdYa2ErSkxhbU1zSUJ3QmJCWXhQSVNWUUNNVGQ5c0VtbVlMdTB4SkNGamIwdmVtMjZMZVRjMjk2ejVpMVRTMFFlb0Z1cWdOdWczeHpIN1Rkak5LYktFaGk3ZnZEZ1JqU0lrdkNFZEFPRUtTUkRXb3FVakl6VExHcmMwMnZFeCtWeW9FSkpIbU9sWXhvSUt4bWZpNzNKYTJ0eDRYQTdRTlY3VkJkeUh0NW52TUFyTHhMcXBuK3Q2MGkyRTBKc3pFbDMxNU5nQUlSNGlJUll3UHBURnVtVmw2bWRxS0JNbWkvYXhpSUJvUnFaNmltUXJHcXc2L1N1enZ6ZGFqdzlxZ2h3akljUVR0WmF4dGYyNStleGZiZXFZZmRERVJZdUxMdmxRRzRKQytWbmNHckFCRERmU0YyWkVOVzdmUGswUnNrZGNmRXUvbU1tYnZVU2VGeXJlVGQ3YllRUVN2Yk50ZW0rN1BtQmJCV1BpODdhaXhyTmQ2blhiOGRZL2FCbWNoZU5YVU5wbGVFOGZ0UmRyR2RTajlwcTNnTnN0U1JOdDRFMGs4SnlBY0lYTGgrQ1Jlb0lUczBZaUV2Q1BSSk42VHVZckp1UzhlRkVzc3luUDNjVXlnOTRKeFE5dklleExVZ2lUcnpIVFI0VXM3RVlIVFhGbEhiU1c0dHVISXRydUVBTUlSRUk0UWhIQjgwTzNjRkcwaklxSG9XQ1M4cUpDVTYxa0Y1WFBYcFVVc0FaRHBkZDZUV1I5VUZGUVJ0STNybmtTMjBIaXU1N3JnNktOOU5ON0VrVjZYUGJTTmFRb2VSb1FqSUJ3QjRSaTNqVElWa0pjOWYzVWpLbzBsTEJ2Mm5VQ2FTZCtvQ0RqclVlell6ekZUd2JpSXNHMklpTHdhNE9zZnRFMXNhaVBieURhMGtjc0Jua09TWHNyVVJaSEdoVjRnSEFIaENLRUx4MXZOUU1aV3krM2NaaHY3Rkl2c0pLaDR2Wlp0bys5dDdOQ1I3ZWpTTEQyTVpCUXYyMUMxUTdnakhPRVhaRldEenl3d3dSSXQ0eVBCK2lJUy9qWGRGb3dPV1JCSUpyTFVZSlRTS1dVS3drQnJoRTQxSGxqS1BIMHgzWmJ6Q1JIeFBOK3FBQnBGV2xZSG9CZGVZUUtBNElTQ2JMMDJaeEJQOUhxYnFEbWErTHN5MUdQZkhMY05zY0hQTEd5TkZjeU4rNHpqa0dpU2ZHWUlSUUNFSTBEcUlrRW13bEt1RlJHWm1YaTNzMTlVS0ZZcUJoYTBoTDFGWktidDR6TGl4MjVpV3B1TWNNVGlmaXdpYnhlQWNBU0FUU0pTZnErSkU4MFY4b1RRSk9sVUtnUXEzdmJSSWxLdWFXVHRRM2l3aENMSDV4MHZIQUVRamdBSkM0WEtXTm5QbGxCb1N1SDR1blhaMUpyc3BmUUw3ZU5YK3hoYjdXUGtzWmg4TW4rV0JtSWhBWUJ3QklBZWhNS1pKU0pIK3RsWHVaem1qTzdLK2x5dzdUeG8rMmpFdWxrUmswMDl4Yk9lMjRqRXJqYTFSUmZhUGhDSkFBaEhTSnlxNWQvRDhVS2htWlQvc3JFbEtvMGxHSTVoWVg1dmdUM2pQUXhTVEc3c2g1YXdOSmFvUElaZk5TQVJoOTZPeFN6cTRIZmZwNDRqQUFBQUFDQWNBUUFBQUFEaENBQUFBQUFJUndBQUFBQkFPQUlBQUFBQXdoRUFBQUFBRUk0QUFBQUFBQWhIQUFBQUFFQTRBZ0FBQUFEQ0VRQUFBQUFRamdBQUFBQ0FjQVFBQUFBQWhDTUFBQUFBSUJ3QkFBQUFBQkNPQUFBQUFJQndCQUFBQUFDRUl3QUFBQUFnSEFFQUFBQUE0UWdBQUFBQUNFY0FBQUFBUURnQ0FBQUFBQ0FjQVFBQUFBRGhDQUFBQUFBSVJ3QUFBQUJBT0FJQUFBQUF3aEVBQUFBQUVJNEFBQUFBZ0hBRUFBQUFBRUE0QWdBQUFBRENFUUFBQUFBUWpnQUFBQUNBY0FRQUFBQUFoQ01BQUFBQUlCd0JBQUFBQU9FSUFBQUFBSUJ3QkFBQUFBQ0VJd0FBQUFBZ0hBRUFBQUFBNFFnQUFBQUFDRWNBQUFBQVFEZ0NBQUFBQU1JUkFBQUFBQURoQ0FBQUFBQUlSd0FBQUFCQU9BSUFBQUFBd2hFQUFBQUFFSTRBQUFBQWdIQUVBQUFBQUlRakFBQUFBQURDRVFBQUFBQVFqZ0FBQUFDQWNBUUFBQUFBaENNQUFBQUFJQndCQUFBQUFPRUlBQUFBQUFoSEFBQUFBQUNFSXdBQUFBQWdIQUVBQUFBQTRRZ0FBQUFBQ0VjQUFBQUFRRGdDQUFBQUFNSVJBQUFBQUJDT0FBQUFBQUFJUndBQUFBQndKeHhQVGs3TzZvK3N2c2I2dVk2NVhsWDlzeFpCRzJQNXZHUDk3WFA5UEhPUDcyL1JsYjNyNzVIdk9HdmViLzA5endNOWI5YkJqL1h1dlhyV3JqcWp0bnMxNERObVhiei8rdWVPNm8vUjBNKzM3bjRjTTlnNEVFRC9PZGJtaTlEbnpIM0hieC82Umsveml6ZjlabVVlZHpxT3J4V085UmZtOVlkY2x3Zit6SWY2S254c0pIc2F1cXcvcnZTM0x6SVkrRFJZNmdUL24vNzJxYjYzVVVmZkk4OThPclFONnZ2b3doMytVRDlQWm1CMUFMM3ZRVGllRFBpTVA3cDQvL1hQTGVxUGowTS8zN3I3Y2N5YlVNZDF6MjB1WTZ6WWRWYmJ0NHpJSnFJZmJueHVQeDNOTDk3MG0vcjVxaU0wM0Y3aitQK3RycHoweTI3V2ZPR1RDa1A3ZWxyNU4vSi83dXVmTVExMDFYaGwvZEdwaW1kdlVBRjNxNzg5NzJMRnBCMytWSDliNG1VQUFPZ01HV3ZmeXB3ckMzWVZvVEd3K2h6WHZPcDRlR1VKaHJHdWZFNnR2eGVSTWpQTGJlam5EVUtqMmM3T3RRTUk3K1hQNi8rVEIyU0w2eFdSZks1LzVwc0lMaTJCbStzN2M0bjl6bng1OWx0OWJoY2doUDlla0VnYjJ0dGIxcFgzRHB6enh1SFBJcnhqUHo3c2Fhc21QRVQ2ejZVbElqL1cvV3NpNDNDb0lUVjYvK2NyYytsYmNjNzR0RFYveUE2QjViMExjY3g3ZEMzY1gxbmliMmFKeHNkOUc2NEtTdm0vTS9XQWxkcFFydXJmbXhERW96NS9jNTkzK2p6aWRSV3ZYdTdURnNMUCtJS1RreWZMeG9XcnpxaGUxMHRMRlBqU3lSZHNrd0VjdFNDQWZwa2ZZUGVaTmU3bU9ybkxISHdoRG9INno2OEQzYjV1Uk1xTEN1UHYrdnZDZUxhTGx3alByc2VDLzdOZTlMa2xHck5qVmp0NmMyUDlHVWFGelRnQXcrYVdhSjVxaDM2eC9zNDNwaXYzN29yQytuVkpmd01BNkZ6Z3k4SzQwTG56UWY5WTVxTWI5ZDRGZzg3M2pmTmhxczZINXBrbTZxU0J3UG0vTmVKajBpYXVUZjl2cnVMeFRTRHU5bWFGSkFrbnpiWjhJODR1ZThxK09vVFN0YkRWRHQwTVVpOHhCV29EQUFRaUlHV3V1YlhIZXZWSWhzTDFHdWREWVlsaFloMWpFSTRxR0JwdjQ1Mkw3VWtSaS9VMURtR3JSSk5CemxjYXVOM29qVytOM1FvUEVNNGRyVW9uNWsrdkt3QUE5RCsrNTVaNFBEV0I3UDZzSkpqZU5scENkY0NUajNNcEhDa2N6Wi8xMjFJTWdQNFZqMkY3MmJUUk41MzNyWWVyUHRmYjFkY2JSRE1BQVBRdkhwdVFyMHQxY0lReWw2N09UMExSQ09GQW5nVjJDTWRrMFMzb2l3ME5mZlhQQ3M4R2xyazFzTFFTdGhxWDB0amhMdWFpdEFBQWdYQzk0ZGMrenFWMmd1bkRhb2lhT21WZWZKeEw0UWpodUxLZFBFbTRZMDQzaURPZkEzdGRlUjN4TmdJQStPVWNxS3o1NThMelJGT1pmM2FGT2pWL2Z1NWgzZ0FjSWh5YkZZTFZPSk9JUVZBUFhWTjM4blpMUWxBanBMd0w3RjFaeGVWSDJzRk9pcEhrb0JuZEFnQWdLdWRBMTF6dk1ZZVUxcThMWG0zNHd0RitpWi9sNkwwRTB1YUxmUnF4aXJNbmp6dHVhYTNpanZFWWt4UURBT0FoS3lMTVM0L2psZ1RUMVdkWm1OOTVBNWVCWll2RHFuQlVsL2c3Njg4bE0rby9GWkI1YkNKeXhjdTJUNkZyMjhYdW0zaHN1eUpsbXhvQXdGK2FIY0ZMVCsrdm1YZGs5MnZYanBXM2VRTndvSEJVOFNpaVFZNm9lbG9Sa0RjcUl1Y3FKSzhsUGlGd01kbFU2Rjl0eUpzb2phZUJ2U3NGVmc5S2tsbEppcm5sWEdvQUFPK1lXMk8yVi9PdXhpbzJncmJjTlllczVBMWM0WFVNazFjckw3V3FQMGJxVlJPUDNGdnJyeS8wdXJJYWpZak1xcmtDeXNiZEp4N0R0b3NjUGkvaThiM1J3RjdQYWxTV1Z1ZTlOdnZIWW9iaWJaVHpXeis2V0xsenRuTHl5UGptY3ZIbmJYdXl6aFJ2eXljOTJRU0d3UlpqWTUxdmZadExoWDFEbmFiV2ZDVmFnN2JWTFpjT3h3STUxS1Y2dFVFb2lZaG80aHd6dmV5amhCck9WVWhlNlVBbDVXR21QcDg2b3FLNDhUWWUwbUNuS2h5Yi8rZk5oQ0gyMXNudzNQdys4M1NYSGM2c1JjQVQ1OXBDSWtnZitZZ1pBRnJQcFNQelo0THBZcy81YXFaT0orbUxzb001WmJjckxGN3RlTUhOQ1NVenE3R01WVVNPMTRoSjhVamVxSWpKUFJVampWamNKeDdEdHNXaWZxNWJGVnMvQTNzOTg3Q1dPaUgrTExDNmgzalAxOWpFVng0Y3JiSVhkSGxJaUUrT2ZnNkxTdGcybHpieno2SC9WOExneElrek1jVFhkOG1UUS9zdWRnckhEUUpLWWhSV1l5NHlGU0p2clZYOWZmMTM3M3p5UG1vOFJwUDlkY3dxcHpTL3ZYU0Y4U3ZMdWhHT2pTamNaZmZyWXdUMFFGUnNsWUdyUllqTGNBVmRKSHZwd2FUUFJNUEkrclVYcDd1dFNUQTlkSEVoYzg1VWhXT0JjT3lVaGV1eG9QWEpNU0sreFBWY1g5S0kvakcvQTErRkc4K0tsclpaSWEwV1pQVXFzRmU5bjNmNjI2MmxEbFlFOUl4dEFnQUFieG5iODYwbjkyUW5tQjR6bHo2YlAwdko1YnptY0hCNjVLQ0lGMTNOMzFwLzdFVnRRQlZTemJiNmJZdHRacnVUK05iWXB5c2RleE81Yis4SEFBRCttcmZFczlkVXZuanc2TmFhT2VTcHhhNWlLTVhOb1V2aGFBbElhUVJOV1o5TFQwb0lGQzdFMGtwQjhHdWZ5aU9vUjNScnNmS1ZwSmkvemhRRkFBRHZCSnBRZVNKbTVaN09IY3lsQy9OblFmQ00xNTJ3Y0ZUc1ZjaDQ0SVkrc3NTUzhFM1MwNCs5ckU3VEJQYjZSTk9SVHplNC8vTU43d2dBQVB6Q3g1SnBoZlhyenkzbjBxc05jeE1rS2h4OThtVGxQWFVpSHloM1BQZXZwQmlmeXlZQkFLU01ITFpoZmpzcEhueW80ckVTSCs4YUNvSUh3aXVyTVR3NzNyWWNlZEw1eml5eDVESXRYV3dtTVpNL3o0amVwNUI0SDJpeDhyVmxnMVk2UGFJUkFNQlAwU2p6WjJIOVVlSEpyZG4zNGFyYzA4ajg5andlY29BRkRDVWM2d1phcVFCNjFCTlJYR1Z0MmR2VFEyYUN5VmJ5cit3dlYybnBtaTMreldyc1BwVzBLYzM2c2tHNTlXOUlpZ0VBOEU4MG51bDgwc3hiZHo3VVJGNUpNSDF3V2VKRm5DLzZ2TG1VdUtMU2g5L1lXOVVYcnNURVNremgwOEFKR0VVWFltbmx6RTJ2QW50MWtIbHNoTE1NUkN2djVDR2c0eUVCQUZJU2paWDVuVW45WlB5Si9ldGtMbDM1ZVNJZThUZ0dJQnlsVWI3bzd5WEdvR3FUS1d5dGxocktBVHVockdLYXJkbmJEbFl4ZGtmS1BYdTNka2VjR0x5TkFBQStpMFlacHhlV2FKUjVlZUtEOTIzTkViV3VkOWltbGc3SmFRMmVDMGYxUEdYV1N4Tlg5T0tZZ3B6cWRiTlhTNDhEaTVUckRTTFBDU3ZsYjN3TDdKMVo3L1RhL0ZsM2EwYlRCd0FZWHBESlhLc2hZMS9ONysxcG1WY3lqOHFsZFQyWE5zY2JDeFFFOTV4WCt0TG1LdnJreFoxcjQ1VlRYMFQwbFdaNXVraTFvZUdQemU4akJ5K3N2L3JwWWg5cXRhVFBZOGRqTERyNkt1bEVOMWJuOHNMTnJra3lNMTBsMnUrbERMQ2RabnEwbXl0S3R1b2hBVkhpc3M4c3FNS3dGL21lWVV2aXdSdGJjNVROM1pCejV6cHhhL281b3JZd2Z5YkowTjdjTUhJOEZsU3ZMS0V4VnhFb1gvQmUvL2hVZi8yKy9ydW0wVFFyb0xHMU9scEZzbnF2QjI3NGVaY3JKTXR1cFFwc0h3Tjc3WTRZc25DODNEREFIdDN3alI3V0RoQXhMcy9RZm1BaTM0dXJsall1ZkVpRVdjRk9NSjEyTmIvSllyNmVQMFUwdjYydkMwM1dyV2hTclRsM1BCYjhXY2RSejUwV3BTOW5Ua3VxL2RQS3Z6KzFKdkZWMGZpaWd2RWZPVGxtU1BHMEpqbW42OFpueHhQbXZyUVc5YXJaeDFUZDRta0RBUEFDbVRORktIM1FlZE5Yb1ZUMDZIalk5OWhjR0pDVHVxSHVJOExHNW5kNUhma1U4ZEVJUS9GQUxudzZ1azVkNjgzOUxyb1dTeXZmOSt5WkxlVDlqZnF5aGVON3p6cjYwWFBLUFRoNUw4K2hIRm5aMVQzYi9jdWpraW1qRG43ME04ZVR1ckY1YUY2MHZ2dTdQZTc3WWl2ZGpUMExiTXhyN3RrMWkvOFhZQUJNMWNJTWJlSXBSUUFBQUFCSlJVNUVya0pnZ2c9PSIgYWx0PSIiIHN0eWxlPSJ3aWR0aDogMTAwLjMzM3B4OyBoZWlnaHQ6IDYyLjI2MjJweDsgZmxvYXQ6IGxlZnQ7IiBjbGFzcz0ibm90ZS1mbG9hdC1sZWZ0Ij48L2I+PC9iPjwvcD48cD48YnI+PC9wPjxwPjxicj48L3A+PHA+PGJyPjxiPjxiPjxiPjxzcGFuIGlkPSJwcmludF9zdWJqZWN0IiBzdHlsZT0iZm9udC1zaXplOiAxMnB4OyI+U1VCSkVDVCA6IDxicj48L3NwYW4+PC9iPjwvYj48L2I+PC9wPjxwPjxiPjxzcGFuIHN0eWxlPSJmb250LXNpemU6IDEycHg7IiBpZD0icHJpbnRfcGljIj5QSUMgOiA8YnI+PC9zcGFuPjwvYj48L3A+PHA+PGI+PHNwYW4gc3R5bGU9ImZvbnQtc2l6ZTogMTJweDsiIGlkPSJwcmludF9kYXRlIj5EQVRFICZhbXA7IFRJTUUgOiA8L3NwYW4+PC9iPjxicj48L3A+PHA+PC9wPjxocj4=', 'Header Printed Timeline'),
(2, 'PHA+PC9wPjxocj4NCjxkaXYgc3R5bGU9ImRpc3BsYXk6IGZsZXg7ZmxleC1kaXJlY3Rpb246IHJvdztqdXN0aWZ5LWNvbnRlbnQ6IHNwYWNlLWJldHdlZW47Ij4NCjxkaXY+DQo8c21hbGw+PGVtPkNvcHlyaWdodCA8c3BhbiBzdHlsZT0iY29sb3I6ICNDQzAwNjY7Ij48Yj5TYXZlIFRoZSBEYXRlIDwvYj48L3NwYW4+PHNwYW4gaWQ9InByaW50X3llYXIiPiAyMDE5PC9zcGFuPjwvZW0+PC9zbWFsbD4NCjwvZGl2Pg0KPGRpdiBpZD0icHJpbnRfcHJpbnRlZF9kYXRlIj4NClByaW50ZWQgb24gMjMgTm92IDIwMTkgMTI6MzJQTQ0KPC9kaXY+DQo8L2Rpdj4=', 'Footer Printed Timeline');

-- --------------------------------------------------------

--
-- Table structure for table `timeline_category`
--

CREATE TABLE `timeline_category` (
  `tc_id` int(11) NOT NULL,
  `tc_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timeline_category`
--

INSERT INTO `timeline_category` (`tc_id`, `tc_title`) VALUES
(1, 'Meeting'),
(2, 'Fitting'),
(3, 'Phone Call'),
(4, 'Food Testing'),
(5, 'Collection'),
(6, 'Video Recording'),
(7, 'Photo Shooting'),
(8, 'Venue Visit'),
(9, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `timeline_status`
--

CREATE TABLE `timeline_status` (
  `ts_id` int(11) NOT NULL,
  `ts_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timeline_status`
--

INSERT INTO `timeline_status` (`ts_id`, `ts_title`) VALUES
(1, 'Pending'),
(2, 'Approved'),
(3, 'Disapproved'),
(4, 'Cancelled');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fullname` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `role_id` int(11) DEFAULT 5,
  `company_id` int(11) NOT NULL DEFAULT 0 COMMENT '0= for client user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `fullname`, `dob`, `address`, `state`, `email_verified_at`, `password`, `dp`, `created_at`, `updated_at`, `remember_token`, `status_id`, `role_id`, `company_id`) VALUES
(1, 'Asnaniar', 'sales@puripujangga.com.my', '0129191553', 'Asnaniar Ahmad', '0000-00-00', '0', '0', NULL, '$2y$10$Yf30ZLVHo9jGVHf6LnViO.fiCqpCmlWc4KGC4Rad01nyFi9QhVV9S', NULL, '2019-10-12 05:19:09', '2019-10-12 05:19:10', NULL, '1', 3, 1),
(2, 'Muzaimah', 'muzaimahuhammad@gmail.com', '0173914073', 'Muzaimah Muhammad', '0000-00-00', '0', '0', NULL, '$2y$10$Z/eYbdiNau5nFPRA4YbUkOduhk/umvQdZ5CtfXPCgwTbzKYFndAZi', 'avatar/user/2/WZNXp6P2jx1PmxyJ45UbC4NN36FwHuERzzDtcMpz.jpeg', '2019-10-12 05:31:33', '2019-10-17 06:10:43', NULL, '1', 3, 2),
(3, 'Dina', 'dina@gmail.com', '0183557736', 'Nurdina Kamalasari', '0000-00-00', '0', '0', NULL, '$2y$10$WaPowhhno9/G61DMxGnc2epKtVvEol/9vleS2i3UGlp3OOf7ztI52', NULL, '2019-10-12 05:47:17', '2019-10-12 05:47:17', NULL, '1', 3, 3),
(4, 'Mustaqim', 'mustaqimwow@gmail.com', NULL, 'Mustaqim Ahmad bin Abdul Rashid', '0000-00-00', '0', '0', NULL, '$2y$10$W1234vOsns5GTgJ5egv54uvoKqb/jvu1Zxv.L//ib48QVERnQkpbS', NULL, '2019-10-12 05:59:37', '2019-10-12 05:59:37', NULL, '1', 5, 0),
(5, 'Siti Sarah', 'ctsara@gmail.com', NULL, 'Siti Sarah binti Saidin', '0000-00-00', '0', '0', NULL, '$2y$10$tnm.W4FobHhMmnWTZJ8LkORPBQCafI/9MZX7zCfFmsTcuYEUYsVaS', NULL, '2019-10-12 06:00:38', '2019-10-12 06:00:38', NULL, '1', 5, 0),
(6, 'Jamal', 'jamal@gmail.com', NULL, 'Jamal Abdillah', '0000-00-00', '0', '0', NULL, '$2y$10$4Ebw30b3oDM3FA4rxSZ5GORofa68DhfNk89Xw9P.zBA/NfkSjFMlG', NULL, '2019-10-12 20:51:57', '2019-10-12 20:51:57', NULL, '1', 5, 0),
(7, 'Mellisa', 'alynazren@gmail.com', '0123456789', 'Mellisa Gordon', '1989-10-30', 'No.007, Jalan UK', 'Selangor', NULL, '$2y$10$Yf30ZLVHo9jGVHf6LnViO.fiCqpCmlWc4KGC4Rad01nyFi9QhVV9S', NULL, '2019-10-12 21:29:24', '2019-10-26 03:24:25', 'Qzz6SJ1PVLGefzi4DwaGlMXzR6yOe0', '1', 5, 0),
(8, 'asd', 'aasd@gmail.com', '5', 'asddas', '0000-00-00', '0', '0', NULL, '$2y$10$9YjbzLWQW1m3gj3Dxu0cWewUsrl9yGf1MfV50ySCcyUAu71./urYi', NULL, '2019-10-12 21:35:28', '2019-10-12 21:35:28', NULL, '1', 3, 5),
(9, 'ass', 'sdfsd@gmail.com', '566', 'asd', '0000-00-00', '0', '0', NULL, '$2y$10$UeNfj8X6iRXkNxDYjWviV.pr.Q4oE4lIszW3fy5OVzridRFvOgnU2', NULL, '2019-10-12 21:37:02', '2019-10-12 21:37:03', NULL, '1', 3, 6),
(10, 'asda', 'asdas@gmail.com', '4584', 'asdasdas', '0000-00-00', '0', '0', NULL, '$2y$10$yKZ/6q4VzgvnNXkx2lBe7eHkfbNVGzJ4x76wB6J3vWb.GQ7WTwyaC', NULL, '2019-10-12 21:39:50', '2019-10-12 21:39:50', NULL, '1', 3, 7),
(11, 'Abdul Rahman', 'rahman@gmail.com', NULL, 'Abdul Rahman bin Rashid', '0000-00-00', '0', '0', NULL, '$2y$10$1NhyFpfaIjdH/RYgaWAmkuKgcJpxOEUYKV5EMWHmWmtgaSvQwJI1C', NULL, '2019-10-13 00:48:30', '2019-10-13 00:48:30', NULL, '1', 5, 0),
(12, 'Habib Saufi', 'habibmohdsaufi@gmail.com', '0126547382', 'Muhammad Habib bin Mohd Saufi', '0000-00-00', '0', '0', NULL, '$2y$10$AeevUuOWjZyOCNmDwBBBh.I1geU4WBUMCic0ca1PGaP1woFWRFn5m', NULL, '2019-10-17 05:48:30', '2019-10-17 05:48:30', NULL, '1', 5, 0),
(13, 'Alyn Azren', 'admin@savethedate-my.com', NULL, 'Nur Amalina binti Azren', '0000-00-00', '', '', NULL, '$2y$10$Z/eYbdiNau5nFPRA4YbUkOduhk/umvQdZ5CtfXPCgwTbzKYFndAZi', NULL, '2019-11-08 16:28:10', '2019-11-08 16:28:10', NULL, '1', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_role`
--

CREATE TABLE `users_role` (
  `role_id` int(11) NOT NULL,
  `role_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_role`
--

INSERT INTO `users_role` (`role_id`, `role_title`) VALUES
(1, 'Admin'),
(2, 'Wedding Planner'),
(3, 'Vendor'),
(4, 'Customer'),
(5, 'undeclared');

-- --------------------------------------------------------

--
-- Table structure for table `users_status`
--

CREATE TABLE `users_status` (
  `status_id` int(11) NOT NULL,
  `status_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_status`
--

INSERT INTO `users_status` (`status_id`, `status_title`) VALUES
(1, 'Active'),
(2, 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `wevent`
--

CREATE TABLE `wevent` (
  `we_id` int(11) NOT NULL,
  `we_title` text NOT NULL,
  `we_date` date NOT NULL,
  `we_time1` time NOT NULL DEFAULT '00:00:00',
  `we_time2` time NOT NULL DEFAULT '00:00:00',
  `we_venue` text DEFAULT NULL,
  `we_desc` text DEFAULT NULL,
  `we_remark` text DEFAULT NULL,
  `package_id` int(11) NOT NULL DEFAULT 0,
  `company_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `wes_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wevent`
--

INSERT INTO `wevent` (`we_id`, `we_title`, `we_date`, `we_time1`, `we_time2`, `we_venue`, `we_desc`, `we_remark`, `package_id`, `company_id`, `user_id`, `wes_id`, `created_at`, `updated_at`) VALUES
(1, 'Siti Sarah & Shuib', '2020-01-31', '00:00:00', '00:00:00', 'Dewan Serbaguna MPA Ampang', NULL, NULL, 3, 2, 5, 1, '2019-10-12 14:18:26', '2019-10-12 06:18:26'),
(2, 'Mustaqim Muslihah', '2020-03-20', '11:00:00', '16:30:00', 'Dewan Veillaris Bangi', 'Perkahwinan Mustaqim dan Muslihah', NULL, 4, 3, 4, 1, '2019-10-12 14:31:42', '2019-10-12 06:31:42'),
(3, 'Romio dan juler', '2019-10-11', '00:00:00', '00:00:00', NULL, 'Mooo gurau jaa', NULL, 3, 2, 5, 4, '2019-10-12 16:17:16', '2019-10-12 08:17:16'),
(4, 'Jamal Kahwin', '2019-11-23', '12:52:00', '12:52:00', 'Jalan Merbuta 2', 'Perkahwinan Jamal dan isteri ketiga', NULL, 2, 2, 6, 1, '2019-10-13 04:58:31', '2019-10-12 20:58:31');

-- --------------------------------------------------------

--
-- Table structure for table `wevent_agreement`
--

CREATE TABLE `wevent_agreement` (
  `a_id` int(11) NOT NULL,
  `we_id` int(11) NOT NULL,
  `party_id` int(11) NOT NULL,
  `party_type` text NOT NULL,
  `party_agree` int(1) NOT NULL DEFAULT 0,
  `remark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wevent_agreement`
--

INSERT INTO `wevent_agreement` (`a_id`, `we_id`, `party_id`, `party_type`, `party_agree`, `remark`) VALUES
(1, 1, 2, 'company', 0, ''),
(2, 1, 5, 'client', 0, ''),
(3, 2, 3, 'company', 0, ''),
(4, 2, 2, 'company', 0, ''),
(5, 2, 4, 'client', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `wevent_inbox`
--

CREATE TABLE `wevent_inbox` (
  `i_id` int(11) NOT NULL,
  `i_sender_id` text NOT NULL,
  `i_recipient_id` int(11) NOT NULL,
  `i_type_id` int(11) NOT NULL,
  `i_subject` text DEFAULT NULL,
  `i_content` text DEFAULT NULL,
  `i_item_id` int(11) DEFAULT NULL,
  `i_status_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wevent_inbox`
--

INSERT INTO `wevent_inbox` (`i_id`, `i_sender_id`, `i_recipient_id`, `i_type_id`, `i_subject`, `i_content`, `i_item_id`, `i_status_id`, `created_at`, `updated_at`) VALUES
(1, 'ctsara@gmail.com', 2, 8, 'Tukar Menu', 'Boleh tukar menu tak? Sebab ada yang allergic', 8, 1, '2019-10-20 15:21:16', '2019-10-20 07:21:16'),
(2, '3', 4, 2, '', '', 2, 1, '2019-10-12 14:31:42', '2019-10-12 06:31:42'),
(3, '3', 2, 4, '', '', 2, 1, '2019-10-12 14:32:48', '2019-10-12 06:32:48'),
(4, '2', 6, 2, '', '', 4, 1, '2019-10-13 04:58:31', '2019-10-12 20:58:31');

-- --------------------------------------------------------

--
-- Table structure for table `wevent_status`
--

CREATE TABLE `wevent_status` (
  `wes_id` int(11) NOT NULL,
  `wes_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wevent_status`
--

INSERT INTO `wevent_status` (`wes_id`, `wes_title`) VALUES
(1, 'Active'),
(2, 'Inactive'),
(3, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `wevent_timeline`
--

CREATE TABLE `wevent_timeline` (
  `wet_id` int(11) NOT NULL,
  `wet_subject` text NOT NULL,
  `wet_desc` longtext NOT NULL,
  `wet_datetime` datetime NOT NULL,
  `we_id` int(11) NOT NULL,
  `wet_owner` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `wet_payment` int(11) NOT NULL DEFAULT 0,
  `tc_id` int(11) NOT NULL,
  `ts_id` int(11) NOT NULL,
  `wet_remark` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wevent_timeline`
--

INSERT INTO `wevent_timeline` (`wet_id`, `wet_subject`, `wet_desc`, `wet_datetime`, `we_id`, `wet_owner`, `user_id`, `wet_payment`, `tc_id`, `ts_id`, `wet_remark`, `created_at`, `updated_at`) VALUES
(7, 'Subject 2', 'PHA+VGhpczxicj48L3A+', '2019-10-17 23:46:00', 1, 2, 5, 0, 1, 2, NULL, '2019-10-12 15:46:32', '2019-10-12 07:46:32'),
(8, 'Subject 3', 'PHA+U3ViamVjdCBjcm9zcyBldmVudDwvcD4=', '2019-10-17 23:47:00', 2, 4, 2, 0, 1, 2, NULL, '2019-10-12 15:48:08', '2019-10-12 07:48:08'),
(9, 'Subject 4', 'PHA+T29vPGJyPjwvcD4=', '2019-11-21 10:01:00', 1, 2, 5, 0, 4, 3, 'Doesnt fit', '2019-10-15 03:48:33', '2019-10-14 19:48:33'),
(10, 'Subject 5', 'PHA+T29vPGJyPjwvcD4=', '2019-12-24 10:01:00', 1, 2, 5, 0, 4, 1, NULL, '2019-10-15 02:01:53', '2019-10-14 18:01:53'),
(11, 'Subject 6', 'PHA+T29vb29zc3M8YnI+PC9wPg==', '2019-10-24 23:52:00', 1, 2, 5, 8000, 7, 2, NULL, '2019-10-17 13:51:10', '2019-10-17 05:51:10'),
(12, 'Subject 7', 'PHA+dGhpcyBpcyBzdWJqZWN0IDc8YnI+PC9wPg==', '2020-01-16 23:56:00', 1, 2, 5, 0, 7, 2, NULL, '2019-10-19 06:18:47', '2019-10-19 06:18:47'),
(13, 'Di sini', 'PHA+VGVzdGluZyBmdWxsIGZpbHRlcjxicj48L3A+', '2020-01-11 11:23:00', 2, 2, 3, 300, 2, 1, NULL, '2019-10-19 06:18:57', '2019-10-19 06:18:57'),
(14, 'Try Reflecting the last timeline', 'PHA+SGVyZSB0aGUgYXR0YWNobWVudDxicj48L3A+', '2019-12-26 11:48:00', 1, 5, 2, 3500, 2, 2, NULL, '2019-10-15 03:52:53', '2019-10-14 19:52:53');

-- --------------------------------------------------------

--
-- Table structure for table `wevent_vendors`
--

CREATE TABLE `wevent_vendors` (
  `wev_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `we_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wevent_vendors`
--

INSERT INTO `wevent_vendors` (`wev_id`, `company_id`, `we_id`) VALUES
(1, 2, 1),
(2, 3, 2),
(3, 2, 2),
(4, 2, 3),
(5, 2, 4),
(6, 3, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attachment`
--
ALTER TABLE `attachment`
  ADD PRIMARY KEY (`att_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `company_category`
--
ALTER TABLE `company_category`
  ADD PRIMARY KEY (`cc_id`);

--
-- Indexes for table `company_category_tag`
--
ALTER TABLE `company_category_tag`
  ADD PRIMARY KEY (`cct_id`);

--
-- Indexes for table `company_contact`
--
ALTER TABLE `company_contact`
  ADD PRIMARY KEY (`company_contact_id`);

--
-- Indexes for table `company_crm`
--
ALTER TABLE `company_crm`
  ADD PRIMARY KEY (`crm_id`);

--
-- Indexes for table `company_package`
--
ALTER TABLE `company_package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `company_package_category_tag`
--
ALTER TABLE `company_package_category_tag`
  ADD PRIMARY KEY (`cpct_id`);

--
-- Indexes for table `company_package_post`
--
ALTER TABLE `company_package_post`
  ADD PRIMARY KEY (`pp_id`);

--
-- Indexes for table `company_promotion`
--
ALTER TABLE `company_promotion`
  ADD PRIMARY KEY (`promotion_id`);

--
-- Indexes for table `company_reviews`
--
ALTER TABLE `company_reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `event_external`
--
ALTER TABLE `event_external`
  ADD PRIMARY KEY (`ee_id`);

--
-- Indexes for table `inbox_type`
--
ALTER TABLE `inbox_type`
  ADD PRIMARY KEY (`i_type_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`template_id`);

--
-- Indexes for table `timeline_category`
--
ALTER TABLE `timeline_category`
  ADD PRIMARY KEY (`tc_id`);

--
-- Indexes for table `timeline_status`
--
ALTER TABLE `timeline_status`
  ADD PRIMARY KEY (`ts_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_role`
--
ALTER TABLE `users_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `users_status`
--
ALTER TABLE `users_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `wevent`
--
ALTER TABLE `wevent`
  ADD PRIMARY KEY (`we_id`);

--
-- Indexes for table `wevent_agreement`
--
ALTER TABLE `wevent_agreement`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `wevent_inbox`
--
ALTER TABLE `wevent_inbox`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `wevent_status`
--
ALTER TABLE `wevent_status`
  ADD PRIMARY KEY (`wes_id`);

--
-- Indexes for table `wevent_timeline`
--
ALTER TABLE `wevent_timeline`
  ADD PRIMARY KEY (`wet_id`);

--
-- Indexes for table `wevent_vendors`
--
ALTER TABLE `wevent_vendors`
  ADD PRIMARY KEY (`wev_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attachment`
--
ALTER TABLE `attachment`
  MODIFY `att_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company_category`
--
ALTER TABLE `company_category`
  MODIFY `cc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `company_category_tag`
--
ALTER TABLE `company_category_tag`
  MODIFY `cct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `company_contact`
--
ALTER TABLE `company_contact`
  MODIFY `company_contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `company_crm`
--
ALTER TABLE `company_crm`
  MODIFY `crm_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_package`
--
ALTER TABLE `company_package`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `company_package_category_tag`
--
ALTER TABLE `company_package_category_tag`
  MODIFY `cpct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `company_package_post`
--
ALTER TABLE `company_package_post`
  MODIFY `pp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_promotion`
--
ALTER TABLE `company_promotion`
  MODIFY `promotion_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_reviews`
--
ALTER TABLE `company_reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event_external`
--
ALTER TABLE `event_external`
  MODIFY `ee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `inbox_type`
--
ALTER TABLE `inbox_type`
  MODIFY `i_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `template`
--
ALTER TABLE `template`
  MODIFY `template_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `timeline_category`
--
ALTER TABLE `timeline_category`
  MODIFY `tc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `timeline_status`
--
ALTER TABLE `timeline_status`
  MODIFY `ts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users_role`
--
ALTER TABLE `users_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users_status`
--
ALTER TABLE `users_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wevent`
--
ALTER TABLE `wevent`
  MODIFY `we_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wevent_agreement`
--
ALTER TABLE `wevent_agreement`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wevent_inbox`
--
ALTER TABLE `wevent_inbox`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wevent_status`
--
ALTER TABLE `wevent_status`
  MODIFY `wes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wevent_timeline`
--
ALTER TABLE `wevent_timeline`
  MODIFY `wet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `wevent_vendors`
--
ALTER TABLE `wevent_vendors`
  MODIFY `wev_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
