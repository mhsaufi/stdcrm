-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2019 at 04:17 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attachment`
--

INSERT INTO `attachment` (`att_id`, `att_name`, `att_filename`, `att_path`, `item_type`, `item_id`, `created_at`, `updated_at`) VALUES
(1, 'blog3_2-1024x682.jpg', 'blog3_2-1024x682.jpg', 'gallery/company/1/Prl1BA3xTzNLm3cTGNEDQudRfmGFtfnXFq6a6FWs.jpeg', 'gallery', 1, '2019-11-25 06:12:12', '2019-11-25 06:12:12'),
(2, 'dewan_raja_muda_musa_weevent_venue_02.jpg', 'dewan_raja_muda_musa_weevent_venue_02.jpg', 'gallery/company/1/UgaHNbUFFd32xQxCaQpdTGZWCD4jt7E8sV7weabm.jpeg', 'gallery', 1, '2019-11-25 06:12:12', '2019-11-25 06:12:12'),
(3, 'Dewan-Kahwin-Putrajaya-Featured-Image.jpg', 'Dewan-Kahwin-Putrajaya-Featured-Image.jpg', 'gallery/company/1/DmQWIb01nIcAlKbCCMkY9RJeR9UmIQb1xZotZFh0.jpeg', 'gallery', 1, '2019-11-25 06:12:12', '2019-11-25 06:12:12'),
(4, 'Dewan-Kahwin-Restoran-Terapung-DSaji-KL-Titiwangsa-Hall.jpg', 'Dewan-Kahwin-Restoran-Terapung-DSaji-KL-Titiwangsa-Hall.jpg', 'gallery/company/1/fvxqS3L33OyTTAs9E8uXF7LxMsAe6G58DSpoaXUg.jpeg', 'gallery', 1, '2019-11-25 06:12:13', '2019-11-25 06:12:13');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `company_name` text NOT NULL,
  `company_contact` text,
  `company_email` text,
  `company_ssm` text,
  `company_website` text,
  `company_address` text,
  `company_logo` text,
  `company_type_id` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `company_contact`, `company_email`, `company_ssm`, `company_website`, `company_address`, `company_logo`, `company_type_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Aneka Wedding', '0325525466', 'anekawedding@gmail.com', '123456789', 'aneka.com', 'Lot 312-A Horizon, Jalan Ampang, Golden Triangle, Kuala Lumpur city centre, 50088', 'avatar/company/1/V5ki675Zi98L0nQwbdWDD9jGYiprZVQXOUzhPMFV.jpeg', 'wp', 1, '2019-11-25 05:50:53', '2019-11-25 05:52:31'),
(2, 'PL Graphics', '0125546454', 'pl@gmail.com', '123456789', 'none', '113, Jalan Tuanku Abdul Rahman, 50100 Kuala Lumpur, Malaysia', 'avatar/company/2/nZy8hmR5zIjTSMSLdbHIs6hJ6BnD4Q9pGuPG2Thn.png', 'wp', 2, '2019-11-25 06:16:56', '2019-11-25 06:17:39'),
(3, 'Jaya Catering', '0112511146', 'jayacatering@yahoo.com', '123456789', 'jayacatering.com.my', 'No 31, Jalan Elektron U16/92, Denai Alam, 40160 Shah Alam, Selangor', 'avatar/company/3/yttwZffEmzT51YfZciCOpYKNBW257icyMA6qdMTK.jpeg', 'wp', 3, '2019-11-25 06:32:25', '2019-11-25 06:33:25');

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
(1, 9, 1),
(2, 12, 1),
(3, 16, 1),
(4, 20, 1),
(5, 21, 1),
(6, 27, 1),
(7, 1, 2),
(8, 2, 2),
(9, 3, 2),
(10, 14, 2),
(11, 21, 2),
(12, 27, 2),
(13, 8, 3),
(14, 22, 3);

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

-- --------------------------------------------------------

--
-- Table structure for table `company_crm`
--

CREATE TABLE `company_crm` (
  `crm_id` int(11) NOT NULL,
  `promotion_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_package`
--

CREATE TABLE `company_package` (
  `package_id` int(11) NOT NULL,
  `package_title` text NOT NULL,
  `package_detail` text NOT NULL,
  `package_price` int(11) NOT NULL DEFAULT '0',
  `package_pax` int(11) NOT NULL DEFAULT '0',
  `package_category` text COMMENT 'company_category',
  `package_post` int(11) NOT NULL DEFAULT '0',
  `company_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_package`
--

INSERT INTO `company_package` (`package_id`, `package_title`, `package_detail`, `package_price`, `package_pax`, `package_category`, `package_post`, `company_id`, `created_at`, `updated_at`) VALUES
(1, 'Platinum Wedding Hall Full Package', 'PHA+UGVsYW1pbiB3aXRoIHN0YW5kYXJkIGhhbGwgc2l6ZSB3aXRoIGZ1bGwgc2V0IG9mIGFjY2Vzc29yaWVzIChBbGwgcGVsYW1pbiBkZXNpZ24gY2FuIGJlIGNvbmZpcm0gdXBvbiBkaXNjdXNzKS48L3A+PHA+PHN0cm9uZz5EZXRhaWxzPC9zdHJvbmc+PC9wPgo8b2w+PGxpPlJlZCBDYXJwZXQgKyBFaWdodCAoOCkgPGEgaHJlZj0iaHR0cHM6Ly93d3cud2VkZGluZy5jb20ubXkvMzMtZmxvcmlzdCIgY2xhc3M9InBtc2lsIiB0aXRsZT0iR2V0IHRoZSBwZXJmZWN0IGZsb3dlcnMgZm9yIHlvdXIgd2VkZGluZyBvbmxpbmUiIHRhcmdldD0iX2JsYW5rIj5mbG93ZXI8L2E+IHN0YW5kYXJkJm5ic3A7KyBHYXplYm8gQXJjaC48L2xpPjxsaT5OZXcgQmVyc2FuZGluZyBkcmVzcyBmb3IgdGhlIDxhIGhyZWY9Imh0dHBzOi8vd3d3LndlZGRpbmcuY29tLm15LzE2LWJyaWRlIiBjbGFzcz0icG1zaWwiIHRpdGxlPSJTZWUgbW9yZSBoZXJlIiB0YXJnZXQ9Il9ibGFuayI+YnJpZGU8L2E+ICZhbXA7IDxhIGhyZWY9Imh0dHBzOi8vd3d3LndlZGRpbmcuY29tLm15LzE5LWdyb29tIiBjbGFzcz0icG1zaWwiIHRpdGxlPSJFdmVyeXRoaW5nIHlvdSBuZWVkIGZvciBhIGdyb29tIG9ubGluZSIgdGFyZ2V0PSJfYmxhbmsiPmdyb29tPC9hPiB3aXRoIGFjY2Vzc29yaWVzLCBtYWtlIHVwICZhbXA7IGZyZXNoIGZsb3dlciBicmlkYWwgYm91cXVldC48L2xpPjxsaT5UaGlydHkgKDMwKSB1bml0cyBvZiByb3VuZCB0YWJsZSB3aXRoIHRhYmxlIHRvcCAmYW1wOyBjbG90aC48L2xpPjxsaT4yNDAgdW5pdHMgb2YgcGxhc3RpYyBjaGFpciB3aXRoIGNvdmVyIHBsdXMgdGhlbWUgcmliYm9uLjwvbGk+PGxpPkZyZWUgc2l4dHkgKDYwKSB1bml0cyBvZiBwbGFzdGljIGNoYWlyIHdpdGggY292ZXIgcGx1cyB0aGVtZSByaWJib24uPC9saT48L29sPjxwPjxicj48L3A+PHA+PHN0cm9uZz5PdXIgU3RhbmRhcmQgRm9vZCBTdXBwbHk8L3N0cm9uZz48L3A+Cjx1bD48bGk+TmFzaSBCcml5YW5pIEAgTmFzaSBNaW55YWsgQCBOYXNpIEh1amFuIFBhbmFzICZhbXA7IE5hc2kgUHV0aWguPC9saT48bGk+QXlhbSBtYXNhayBtZXJhaC48L2xpPjxsaT5EYWdpbmcgTWFzYWxhIEAgRGFnaW5nIEhpdGFtIEAgRGFnaW5nIFJlbmRhbmcuPC9saT48bGk+RGFsY2EuPC9saT48bGk+UGFqZXJpIE5lbmFzLjwvbGk+PGxpPlBhcGVkb20uPC9saT48bGk+Q29yZGlhbCBkcmluayAmYW1wOyBPcmFuZ2UgZnJ1aXQuPC9saT48bGk+PHN0cm9uZz4qKihBbGwgbWVudSBpcyBzdWJqZWN0IHRvIGNoYW5nZSBmcm9tIHRoZSBvd25lciAmYW1wOyB0aGUgPGEgaHJlZj0iaHR0cHM6Ly93d3cud2VkZGluZy5jb20ubXkvNTAtY2F0ZXJpbmciIGNsYXNzPSJwbXNpbCIgdGl0bGU9IkdldCB0aGUgYmVzdCBjYXRlcmluZyBmb3IgeW91ciB3ZWRkaW5nIG9ubGluZSIgdGFyZ2V0PSJfYmxhbmsiPmNhdGVyaW5nPC9hPiBzaWRlKS48L3N0cm9uZz48L2xpPjxsaT48c3Ryb25nPjxicj48L3N0cm9uZz48L2xpPjxsaT48YnI+PHA+PHN0cm9uZz5GcmVlIENvbXBsaW1lbnQgUGFja2FnZTwvc3Ryb25nPjwvcD4KPC9saT48bGk+UEEgc3lzdGVtIHdpdGggREogY3VtIGVtY2VlLjwvbGk+PGxpPjgwMCBzZXQgb2Ygd2VkZGluZyBnaWZ0LjwvbGk+PGxpPlRlaCBUYXJpayAmYW1wOyBCdWJ1aCBLYWNhbmcgdG8gYmUgc2VydmUgb25seSBhZnRlciAyOjMwcG0uPC9saT48bGk+VGhyZWUgKDMpIHRpZXIgb2Ygd2VkZGluZyBjYWtlLjwvbGk+PGxpPkZvdXIgKDQpIHNldCBvZiBEb21lIGZvciBWSVAgaW52aXRlZCBndWVzdC48L2xpPjxsaT5Ud28gKDIpIHVuaXRzIG9mIHNxdWFyZSB0YWJsZSB3aXRoIHRhYmxlIGNsb3RoICZhbXA7IHNraXJ0aW5nIGZvciByZWNlcHRpb24uPC9saT48bGk+VHdvICgyKSB1bml0cyBvZiBzcXVhcmUgdGFibGUgd2l0aCB0YWJsZSBjbG90aCAmYW1wOyBza2lydGluZyBmb3IgUEEgc3lzdGVtLjwvbGk+PGxpPlR3byAoMikgdW5pdHMgb2Ygc3F1YXJlIHRhYmxlIHdpdGggdGFibGUgY2xvdGggJmFtcDsgc2tpcnRpbmcgZm9yIHByZXNlbnQuPC9saT48bGk+VGVuICgxMCkgdW5pdHMgb2Ygc3F1YXJlIHRhYmxlIHdpdGggdGFibGUgY2xvdGggZm9yIHN0YW5kIGJ5IHVzZS4gPC9saT48L3VsPjxwPjxzdHJvbmc+SG93IHRvIEJ1eTwvc3Ryb25nPjwvcD4KPHVsPjxsaT5DYWxsIG9yIHdoYXRzYXBwIEN1c3RvbWVyIFNlcnZpY2UgQCArMDE2LTc3MSA1ODgwJm5ic3A7dG8gY2hlY2sgb24gYXZhaWxhYmlsaXR5IChwcm92aWRlIHVzIHlvdXIgd2VkZGluZyBkYXRlcykuPC9saT48bGk+T25saW5lIHBheW1lbnQgb2YgZGVwb3NpdCBhcyBpbml0aWFsIGNvbmZpcm1hdGlvbi48L2xpPjxsaT5UaGUgcmVtYWluIGJhbGFuY2UgaXMgcGF5YWJsZSAxNCBkYXlzIGluIHByaW9yIHRvIHRoZSBib29rZWQgZGF5LjwvbGk+PC91bD48cD4gPC9wPgo8cD48c3Ryb25nPlRlcm1zIGFuZCBDb25kaXRpb25zJm5ic3A7PC9zdHJvbmc+PC9wPgo8dWw+PGxpPlByaWNlIGRvIG5vdCBpbmNsdWRpbmcgdHJhbnNwb3J0YXRpb24gZmVlcy48L2xpPjxsaT5UaW1lIGFuZCBwbGFjZSBvZiB3ZWRkaW5nIHdpbGwgYmUgZGVjaWRlZCBieSBjdXN0b21lcnMuPC9saT48bGk+U3RhbmRhcmQgYm9va2luZyBpcyByZXF1aXJlIGlzIHdpdGhpbiA1IG1vbnRoIGJlZm9yZSB0aGUgZnVuY3Rpb24uPC9saT48L3VsPjxwPjxicj48L3A+PHVsPjxsaT48c3Ryb25nPjwvc3Ryb25nPjxicj48L2xpPjwvdWw+PHA+IDwvcD4=', 19000, 1000, NULL, 0, 1, '2019-11-25 05:59:27', '2019-11-25 05:59:27'),
(2, 'Standard Muhibbah Dome Set', 'PHA+PHN0cm9uZz5TdGFuZGFyZCBNdWhpYmJhaCBEb21lIFNldDwvc3Ryb25nPiZuYnNwOwo8L3A+PHVsPjxsaT5STTg5OS4wMCAvIHBlciB0YWJsZSBvZiAxMCBwZXJzb25zPC9saT48bGk+MzAwIHBlcnNvbnMgJmFtcDsgYWJvdmU8L2xpPjwvdWw+PHA+PHN0cm9uZz5QcmUtV2VkZGluZyBGcmVlYmllczwvc3Ryb25nPjwvcD48cD48YnI+PC9wPjx1bD48bGk+UHJlLTxhIGhyZWY9Imh0dHBzOi8vd3d3LndlZGRpbmcuY29tLm15LzQxLXBob3RvZ3JhcGh5IiBjbGFzcz0icG1zaWwiIHRpdGxlPSJHZXQgeW91ciB3ZWRkaW5nIHBob3RvZ3JhcGhlciBvbmxpbmUiIHRhcmdldD0iX2JsYW5rIj53ZWRkaW5nIHBob3RvZ3JhcGh5PC9hPiB3aXRoaW4gdGhlIGhvdGVscyBsdXNoIGdhcmRlbnMgJmFtcDsgZ29sZiBzdXJyb3VuZGluZ3MgKHBob3RvZ3JhcGhlciBvbiBvd24gYXJyYW5nZW1lbnQpLjwvbGk+PGxpPk9uZSAoMSkgZGF5LXVzZSByb29tIHdpdGggbHVuY2ggZm9yIHR3byAoMikgcGVyc29ucy48L2xpPjxsaT5Gb3IgdGhlIHdlZGRpbmcgY2VsZWJyYXRpb248L2xpPjxsaT5Eb21lIFNldCBNZW51IFNlbGVjdGlvbi48L2xpPjxsaT48YSBocmVmPSJodHRwczovL3d3dy53ZWRkaW5nLmNvbS5teS8zMS1kZWNvcmF0aW9uLWtpdHMtcGFja2FnZXMiIGNsYXNzPSJwbXNpbCIgdGl0bGU9IkdldCB0aGUgcGVyZmVjdCBkZWNvcmF0aW9uIGZvciB5b3VyIHdlZGRpbmcgb25saW5lIiB0YXJnZXQ9Il9ibGFuayI+RGVjb3JhdGlvbjwvYT4gb2YgYnJpZGFsIGhpZ2ggdGFibGUgd2l0aCBzY2FsbG9waW5nLjwvbGk+PGxpPkZsb3JhbCBjZW50ZXJwaWVjZSBmb3IgYnJpZGFsIHRhYmxlICZhbXA7IGd1ZXN0IHRhYmxlLjwvbGk+PGxpPkEgYmVhdXRpZnVsbHkgY3JhZnRlZCBmcmVzaCBmbG9yYWwgYXJjaC48L2xpPjxsaT5XZWRkaW5nIGJhY2tkcm9wIHBhbmVsLjwvbGk+PGxpPk1lbnUgY2FyZCBmb3IgYWxsIHRhYmxlcy48L2xpPjxsaT5SZWQgY2FycGV0IGZvciB3ZWRkaW5nIG1hcmNoIGZyb20gaGFsbCBlbnRyYW5jZSB0byBicmlkYWwgdGFibGUuPC9saT48bGk+QSBiZWF1dGlmdWxseSBkZXNpZ25lZCBmaXZlLWxpZXIgd2VkZGluZyBkdW1teSBjYWtlIGZvciB0aGUgY2FrZSBjdXR0aW5nIGNlcmVtb255LjwvbGk+PGxpPkNoYWlyIGNvdmVyIHdpdGggZ29sZCBjaGFpciByaWJib24gZm9yIGJhbnF1ZXQgY2hhaXJzLjwvbGk+PGxpPkZyZWUtZmxvdyBvZiBzb2Z0IGRyaW5rcyAoZnJvbSBtYXggc2VydmluZyBvZiAzIGhvdXJzKTwvbGk+PGxpPkZyZWUtZmxvdyBvZiBjb3JkaWFsIHRocm91Z2hvdXQgbHVuY2gvZGlubmVyIHJlY2VwdGlvbi48L2xpPjxsaT5QcmUtbHVuY2gvZGlubmVyIGNvY2t0YWlsIHdpdGggY29yZGlhbCBkcmlua3MgYW5kIHRpZGJpdHMuPC9saT48bGk+QSB3ZWRkaW5nIGd1ZXN0IGJvb2sgYXMgYSBrZWVwc2FrZS48L2xpPjxsaT5Vc2FnZSBvZiBzdGFuZGFyZCBpbi1ob3VzZSBQQSBzeXN0ZW0uPC9saT48bGk+T25lICgxKSB1bml0IG9mIExDRCBwcm9qZWN0b3IgZHVyaW5nIHRoZSBldmVudC48L2xpPjwvdWw+PHA+PHN0cm9uZz5Gb3IgVGhlIENlbGVicmF0ZWQgQ291cGxlPC9zdHJvbmc+PC9wPgo8cD4gPC9wPgo8dWw+PGxpPjNEMk4gc3RheSBpbiBCcmlkYWwgU3VpdGUgd2l0aCBhIGZyZXNoIGJhc2tldCBvZiBmcnVpdHMgYW5kIGJyZWFrZmFzdCBpbiBiZWQgZm9yIG9uZSAoMSkgZGF5LjwvbGk+PGxpPkEgY2FuZGxlIGxpZ2h0IGRpbm5lciB3aXRoIGEgYm90dGxlIHdpdGggc3BhcmtsaW5nIGp1aWNlIGF0IENhZsOpIExhdmlzdGEuPC9saT48bGk+MWtnIGNha2UgaW4gdGhlIEJyaWRhbCBTdWl0ZS48L2xpPjxsaT5PbmUgKDEpIGJvdHRsZSBvZiBzcGFya2xpbmcganVpY2UgaW4gdGhlIEJyaWRhbCBTdWl0ZS48L2xpPjxsaT5MYXRlIGNoZWNrLW91dCB1bnRpbCAzUE0gZnJvbSBCcmlkYWwgU3VpdGUuPC9saT48L3VsPjxwPiA8L3A+CjxwPjxzdHJvbmc+Rm9yIEZhbWlseSBhbmQgRnJpZW5kczwvc3Ryb25nPjwvcD4KPHVsPjxsaT5PbmUgKDEpIERlbHV4ZSByb29tIHdpdGggYnJlYWtmYXN0IGZvciB0d28gKDIpIHBlcnNvbnMgZm9yIDFOMkQgc3RheS48L2xpPjxsaT5TcGVjaWFsIHJvb20gcmF0ZSBmb3IgZmFtaWx5IG1lbWJlcnMgYW5kIGZyaWVuZHMgKHN1YmplY3QgdG8gcm9vbSBhdmFpbGFiaWxpdHkgdXBvbiBjb25maXJtYXRpb24pPC9saT48bGk+VGhyZWUgKDMpIHZhbGV0IHBhcmtpbmcgKGZvciBicmlkYWxzIGFuZCBwYXJlbnRzIGNhcik8L2xpPjwvdWw+PHA+PHN0cm9uZz5Gb3IgdGhlIEd1ZXN0PC9zdHJvbmc+PC9wPgo8dWw+PGxpPkluZGl2aWR1YWxseSB3cmFwcGVkIGdpdmVhd2F5IGNha2VzIE9SIGNob2NvbGF0ZSBwcmFsaW5lcy48L2xpPjxsaT5QYXJraW5nIGZvciBhbGwgaW52aXRlZCBndWVzdHMuPC9saT48bGk+TU9SRSBHVUVTVFMsIE1PUkUgRlJFRUJJRS48L2xpPjwvdWw+PHA+PGVtPjxzdHJvbmc+Rm9yIGNvbmZpcm1hdGlvbiBvZiAyNSB0YWJsZXMgYW5kIGFib3ZlLCB0aGUgYWJvdmUgcGFja2FnZSB3aWxsIGJlIGFkZGVkIHdpdGggdGhlIGZvbGxvd2luZyA6PC9zdHJvbmc+PC9lbT48L3A+CjxwPjxzdHJvbmc+RnJlZS13ZWRkaW5nIGZyZWViaWVzPC9zdHJvbmc+PC9wPgo8dWw+PGxpPk1lZXQgaW4tbGF3cyBmb29kIHRhc3RpbmcgZm9yIDEwICh0ZW4pIHBlcnNvbnMuICh1cG9uIHJlY2VpdmluZyBvZiA3MCUgZGVwb3NpdCkuPC9saT48bGk+TW9yZSBmb3IgVGhlIFdlZGRpbmcgQ2VsZWJyYXRpb248L2xpPjxsaT5Gb3VyICg0KSB1bml0cyBvZiBCdW5nYSBNYW5nZ2FyLjwvbGk+PGxpPlVzYWdlIG9mIFZJUCBIb2xkaW5nIHJvb20uPC9saT48bGk+Rmlyc3QgY291cnNlIGZvb2QgcHJlc2VudGF0aW9uIGJ5IHRoZSBIb3RlbC48L2xpPjxsaT5TaXggKDYpIHVuaXRzIG9mIGZsb3JhbCBzdGFuZCBhbG9uZyB0aGUgcmVkIGNhcnBldCBhaXNsZS48L2xpPjxsaT5DaG9pY2Ugb2YgY29sb3JlZCBjaGFpciByaWJib24gZm9yIGJhbnF1ZXQgY2hhaXJzIChmcm9tIGhvdGVsIHNlbGVjdGlvbikuPC9saT48L3VsPjxwPjxzdHJvbmc+TW9yZSBGb3IgZmFtaWx5IGFuZCBmcmllbmRzPC9zdHJvbmc+PC9wPgo8dWw+PGxpPlR3byAoMikgRGVsdXhlIHJvb20gd2l0aCBicmVha2Zhc3QgZm9yIHR3byAoMikgcGVyc29ucyBmb3IgMU4yRCBzdGF5LjwvbGk+PC91bD48cD48c3Ryb25nPk1vcmUgZm9yIHRoZSBHdWVzdHM8L3N0cm9uZz48L3A+Cjx1bD48bGk+Q2FuZHkgYmFyIGNvdW50ZXIgc2V0dXAgZm9yIDEwMCBwZXJzb25zLjwvbGk+PC91bD48cD48c3Ryb25nPlBvc3QtZXZlbiBGcmVlYmllczwvc3Ryb25nPjwvcD4KPHVsPjxsaT4yRDFOIHN0YXkgaW4gdGhlIFN1aXRlIHdpdGggYnJlYWtmYXN0IG9uIHlvdXIgMXN0IHllYXIgd2VkZGluZyBhbm5pdmVyc2FyeS48L2xpPjxsaT5EaW1zdW0gbHVuY2ggZm9yIDEwIHBlcnNvbnMuIChwcmlvciByZXNlcnZhdGlvbiBpcyByZXF1aXJlZCkuPC9saT48L3VsPjxwPjxzdHJvbmc+VGVybXMgJmFtcDsgQ29uZGl0aW9uczwvc3Ryb25nPjwvcD4KPHVsPjxsaT5EZXBvc2l0IHBhaWQgZm9yIHRoZSBhYm92ZS1tZW50aW9uZWQgY29uZmlybWF0aW9uIHRvIHNlY3VyZSB0aGUgYm9va2luZyBpcyBub24tcmVmdW5kYWJsZS48L2xpPjxsaT4xc3QgZGVwb3NpdCBSTTUsMDAwIHJlY2VpdmVkIHRvIHNlY3VyZSB0aGUgYm9va2luZzwvbGk+PGxpPjcwJSBkZXBvc2l0ICZndDsgNjAgZGF5cyBiZWZvcmUgdGhlIGZ1bmN0aW9uPC9saT48bGk+QmFsYW5jZSBwYXltZW50IHRvIGJlIHNldHRsZWQgb25lKDEpIHdlZWsgYmVmb3JlIHRoZSBmdW5jdGlvbi48L2xpPjxsaT5HcmFuZCA8YSBocmVmPSJodHRwczovL3d3dy53ZWRkaW5nLmNvbS5teS8zMzctYmFsbHJvb20iIGNsYXNzPSJwbXNpbCIgdGl0bGU9IkdldCB0aGUgYmVzdCBiYWxscm9vbSBmb3IgeW91ciB3ZWRkaW5nIG9ubGluZSIgdGFyZ2V0PSJfYmxhbmsiPkJhbGxyb29tPC9hPiByZXF1aXJlZCBtaW4gb2YgMzAgdGFibGVzICZhbXA7IGFib3ZlIG1heCBjYXBhY2l0eSBvZiAzNyB0YWJsZXMuPC9saT48bGk+QSBtaW5pbXVtIHJlc2VydmF0aW9uIGlzIHJlcXVpcmVkIHRvIGJlIGVsaWdpYmxlIGZvciB0aGUgZnVsbCBwYWNrYWdlLjwvbGk+PC91bD48cD48c3Ryb25nPjwvc3Ryb25nPjwvcD48cD48c3Ryb25nPjxicj48L3N0cm9uZz48L3A+', 899, 10, NULL, 0, 1, '2019-11-25 06:03:39', '2019-11-25 06:03:39'),
(3, 'PAKEJ INARA', 'PGRpdiBjbGFzcz0icGFyYWdyYXBoIj48Zm9udCBzaXplPSIzIj48Zm9udCBjb2xvcj0iIzAwMDAwMCI+PGVtPjEuIEthZCBrYWh3aW4gV2FybmEgUGVudWg8L2VtPjwvZm9udD48YnI+PGZvbnQgY29sb3I9IiMwMDAwMDAiPjxlbT4yLiBTYW1wdWwgU3VyYXQ8L2VtPjwvZm9udD48YnI+PGZvbnQgY29sb3I9IiMwMDAwMDAiPjxlbT4zLiBCYW50aW5nJm5ic3A7IDEga2VwaW5nPC9lbT48L2ZvbnQ+PGJyPjxmb250IGNvbG9yPSIjMDAwMDAwIj48ZW0+NC4gUGVudW5qdWsgQXJhaCAyIGtlcGluZzwvZW0+PC9mb250Pjxicj48Zm9udCBjb2xvcj0iIzAwMDAwMCI+PGVtPjUuIFJlcGxpa2EgS2FkJm5ic3A7IENlayBLYWh3aW4gS29zb25nJm5ic3A7IDEga2VwaW5nPC9lbT48L2ZvbnQ+PC9mb250Pjxicj48ZW0+PGZvbnQgc2l6ZT0iMyIgY29sb3I9IiMyYTJhMmEiPjYuIFByb3AmbmJzcDsgJm5ic3A7UGVya2Fod2luYW48YnI+4oCLNy4gRnJlZSBtYXN1ayBnYW1iYXI8L2ZvbnQ+PC9lbT48L2Rpdj4KCgoJCQkJCQoJCQkJCQkJCQoJCQkJCQoJCQkJCQkKCjxkaXYgY2xhc3M9InBhcmFncmFwaCI+PGVtPjxmb250IHNpemU9IjMiIGNvbG9yPSIjMmEyYTJhIj44LiBLYWQgS2Fod2luIE9ubGluZTxicj45LiBGcmVlIERlc2lnbiBLYWQgS2Fod2luIExvdmVseTxicj4xMC4gRnJlZSBBcnR3b3JrPGJyPjExLiBGcmVlIFZvdWNoZXIgRGlzY291bnQmbmJzcDsgMzAlIEJhbnRpbmcsIEJhbm5lciZuYnNwOyAmYW1wOyBQZW51bmp1ayBBcmFoPGJyPjEyLiBGcmVlIFZvdWNoZXIgRGlzY291bnQmbmJzcDsgMjUlIEJ1dHRvbiBCYWRnZSZuYnNwOyAmYW1wOyBTdGlja2VyPGJyPjEzLiBQcm9tb3NpIFBlbmdoYW50YXJhbiZuYnNwOyBTZW1lbmFuanVuZyAmYW1wOyBTYWJhaCBTYXJhd2FrPC9mb250PjwvZW0+PC9kaXY+PGRpdiBjbGFzcz0icGFyYWdyYXBoIj48ZW0+PGZvbnQgc2l6ZT0iMyIgY29sb3I9IiMyYTJhMmEiPjxicj48L2ZvbnQ+PC9lbT48L2Rpdj48ZGl2IGNsYXNzPSJwYXJhZ3JhcGgiPjxicj48ZGl2IGNsYXNzPSJwYXJhZ3JhcGgiPjxmb250IGNvbG9yPSIjMmEyYTJhIj4qS2FkICZhbXA7Jm5ic3A7ICZuYnNwOyZuYnNwOzxlbT7igIs8L2VtPjwvZm9udD48ZW0gc3R5bGU9ImNvbG9yOnJnYigwLCAwLCAwKSI+UmVwbGlrYSBDZWsgS2Fod2luIFdhcm5hIFBlbnVoPC9lbT48Zm9udCBjb2xvcj0iIzJhMmEyYSI+IGJlcmt1YWxpdGkmbmJzcDsgdGlkYWsmbmJzcDsgbXVkYWggTHVudHVyIHRhaGFuIEFpciB0ZWJhbCAyNjBnc208YnI+KkJhbnRpbmcgLEJhbm5lciAmYW1wOyBQZW51bmp1ayBBcmFoIFdhcm5hIFBlbnVoIGJlcmt1YWl0aSZuYnNwOyB0YXJwYXVsaW4gMzAwZ3NtIFRhaGFuIEN1YWNhJm5ic3A7PGJyPipCdXR0b24gQmFkZ2UgV2FybmEgUGVudWgmbmJzcDsgJm5ic3A7Jm5ic3A7PC9mb250PjxzcGFuIHN0eWxlPSJjb2xvcjpyZ2IoMjksIDMzLCA0MSkiPnNhaXogNThtbSAic3RhbmRhcmQgQnV0dG9uIEJhZGdlIHNhaXoiIGRlbmdhbiZuYnNwOyAmbmJzcDsmbmJzcDtMYXBpc2FuIG15bGFyIHlhbmcga2FsaXMgYWlyIGRhbiBtZW5naGFsYW5nIGRhcmkgd2FybmEgcHVkYXI8L3NwYW4+PC9kaXY+PGRpdiBjbGFzcz0icGFyYWdyYXBoIj48c3BhbiBzdHlsZT0iY29sb3I6cmdiKDI5LCAzMywgNDEpIj48YnI+PC9zcGFuPjwvZGl2PjxkaXYgY2xhc3M9InBhcmFncmFwaCI+PGJyPjxkaXYgY2xhc3M9InBhcmFncmFwaCIgc3R5bGU9InRleHQtYWxpZ246Y2VudGVyOyI+PHN0cm9uZz48Zm9udCBzaXplPSI0Ij48Zm9udCBjb2xvcj0iIzJhMmEyYSI+SGFyZ2EgUHJvbW9zaSBiYWdpIGhhcmdhIGthZCBrYWh3aW4gUG9za2FkIDQieCA2IjwvZm9udD48L2ZvbnQ+PC9zdHJvbmc+PGJyPjxzdHJvbmc+PGZvbnQgY29sb3I9IiNhODJlMmUiPlBlbmdoYW50YXJhbiBwZXJjdW1hIHVudHVrPGJyPuKAi1NlbWVuYW5qdW5nIG1hbGF5c2lhISE8L2ZvbnQ+PC9zdHJvbmc+PGJyPjxicj48Zm9udCBjb2xvcj0iIzJhMmEyYSI+PHNwYW4+MzAwICZuYnNwOyBrZXBpbmcgJm5ic3A7ICZuYnNwOz0gMC41NSBzZW4gc2VrZXBpbmc8L3NwYW4+PGJyPjxzcGFuPjUwMCAmbmJzcDsga2VwaW5nICZuYnNwOyAmbmJzcDs9IDAuMzYgc2VuIHNla2VwaW5nPC9zcGFuPjxicj48c3Bhbj44MDAgJm5ic3A7IGtlcGluZyAmbmJzcDsgJm5ic3A7PSAwLjI2IHNlbiBzZWtlcGluZzwvc3Bhbj48YnI+PHNwYW4+MTAwMCBrZXBpbmcgJm5ic3A7ICZuYnNwOyA9IDAuMjMgc2VuIHNla2VwaW5nPC9zcGFuPjxicj48c3Bhbj4xNTAwIGtlcGluZyAmbmJzcDsgJm5ic3A7ID0gMC4yMiBzZW4gc2VrZXBpbmc8L3NwYW4+PGJyPjxzcGFuPjIwMDAga2VwaW5nICZuYnNwOyAmbmJzcDsgPSAwLjIwIHNlbiBzZWtlcGluZzwvc3Bhbj48YnI+PGJyPmZyZWUgZW52ZWxvcGUsbXNrIGdhbWJhcixhcnR3b3JrPGJyPlNwZWZpa2FzaSBrYWQgS2Fod2luPGJyPkxpcGF0YW4gOiA8c3Bhbj4xMDVtbSB4IDE0OG1tPC9zcGFuPiZuYnNwOzwvZm9udD7igIs8YnI+PGZvbnQgY29sb3I9IiMyYTJhMmEiPktlcnRhcyA7IEFydCBDYXJkIDI2MGdzbSh0ZWJhbCk8YnI+V2FybmEgOiBXYXJuYSBQZW51aDxicj50ZXJtdXJhaCBrYXQgcGFzYXJhbiB4Y2F5ZSBsZWggc2VydmV5PC9mb250PjwvZGl2PjxzcGFuIHN0eWxlPSJjb2xvcjpyZ2IoMjksIDMzLCA0MSkiPjwvc3Bhbj48L2Rpdj48ZW0+PC9lbT48L2Rpdj4=', 231, 600, NULL, 0, 2, '2019-11-25 06:22:55', '2019-11-25 06:22:55'),
(4, 'PAKEJ INARA B', 'PGRpdiBjbGFzcz0icGFyYWdyYXBoIj48Zm9udCBzaXplPSIzIj48Zm9udCBjb2xvcj0iIzAwMDAwMCI+PGVtPjEuIEthZCBrYWh3aW4gV2FybmEgUGVudWg8L2VtPjwvZm9udD48YnI+PGZvbnQgY29sb3I9IiMwMDAwMDAiPjxlbT4yLiBTYW1wdWwgU3VyYXQ8L2VtPjwvZm9udD48YnI+PGZvbnQgY29sb3I9IiMwMDAwMDAiPjxlbT4zLiBCYW50aW5nJm5ic3A7IDEga2VwaW5nPC9lbT48L2ZvbnQ+PGJyPjxmb250IGNvbG9yPSIjMDAwMDAwIj48ZW0+NC4gUGVudW5qdWsgQXJhaCAyIGtlcGluZzwvZW0+PC9mb250Pjxicj48Zm9udCBjb2xvcj0iIzAwMDAwMCI+PGVtPjUuIFJlcGxpa2EgS2FkJm5ic3A7IENlayBLYWh3aW4gS29zb25nJm5ic3A7IDEga2VwaW5nPC9lbT48L2ZvbnQ+PC9mb250Pjxicj48ZW0+PGZvbnQgc2l6ZT0iMyIgY29sb3I9IiMyYTJhMmEiPjYuIFByb3AmbmJzcDsgJm5ic3A7UGVya2Fod2luYW48YnI+4oCLNy4gRnJlZSBtYXN1ayBnYW1iYXI8L2ZvbnQ+PC9lbT48L2Rpdj4KCgoJCQkJCQoJCQkJCQkJCQoJCQkJCQoJCQkJCQkKCjxkaXYgY2xhc3M9InBhcmFncmFwaCI+PGVtPjxmb250IHNpemU9IjMiIGNvbG9yPSIjMmEyYTJhIj44LiBLYWQgS2Fod2luIE9ubGluZTxicj45LiBGcmVlIERlc2lnbiBLYWQgS2Fod2luIExvdmVseTxicj4xMC4gRnJlZSBBcnR3b3JrPGJyPjExLiBGcmVlIFZvdWNoZXIgRGlzY291bnQmbmJzcDsgMzAlIEJhbnRpbmcsIEJhbm5lciZuYnNwOyAmYW1wOyBQZW51bmp1ayBBcmFoPGJyPjEyLiBGcmVlIFZvdWNoZXIgRGlzY291bnQmbmJzcDsgMjUlIEJ1dHRvbiBCYWRnZSZuYnNwOyAmYW1wOyBTdGlja2VyPGJyPjEzLiBQcm9tb3NpIFBlbmdoYW50YXJhbiZuYnNwOyBTZW1lbmFuanVuZyAmYW1wOyBTYWJhaCBTYXJhd2FrPC9mb250PjwvZW0+PC9kaXY+PGRpdiBjbGFzcz0icGFyYWdyYXBoIj48ZW0+PGZvbnQgc2l6ZT0iMyIgY29sb3I9IiMyYTJhMmEiPjxicj48L2ZvbnQ+PC9lbT48L2Rpdj48ZGl2IGNsYXNzPSJwYXJhZ3JhcGgiPjxicj48ZW0+PGZvbnQgc2l6ZT0iMyIgY29sb3I9IiMyYTJhMmEiPjxzdHJvbmc+PGZvbnQgc2l6ZT0iNCI+PGZvbnQgY29sb3I9IiMyYTJhMmEiPkhhcmdhIFByb21vc2kgYmFnaSBoYXJnYSBrYWQga2Fod2luIFBvc2thZCA0InggOSImbmJzcDs8L2ZvbnQ+PC9mb250Pjwvc3Ryb25nPjxzdHJvbmc+PGZvbnQgY29sb3I9IiM1Y2JjZTAiPiZuYnNwOzwvZm9udD48YnI+PGZvbnQgY29sb3I9IiNhODJlMmUiPlBlbmdoYW50YXJhbiBwZXJjdW1hIHVudHVrPGJyPuKAi3NlbWVuYW5qdW5nIG1hbGF5c2lhISE8L2ZvbnQ+PC9zdHJvbmc+PGJyPjxicj48Zm9udCBjb2xvcj0iIzJhMmEyYSI+MzAwICZuYnNwOyBrZXBpbmcgJm5ic3A7ICZuYnNwOz0gMC43NCBzZW4gc2VrZXBpbmc8YnI+NTAwICZuYnNwOyBrZXBpbmcgJm5ic3A7ICZuYnNwOz0gMC40NyBzZW4gc2VrZXBpbmc8YnI+ODAwICZuYnNwOyBrZXBpbmcgJm5ic3A7ICZuYnNwOz0gMC4zMiBzZW4gc2VrZXBpbmc8YnI+MTAwMCBrZXBpbmcgJm5ic3A7ICZuYnNwOyA9IDAuMjcgc2VuIHNla2VwaW5nPGJyPjE1MDAga2VwaW5nICZuYnNwOyAmbmJzcDsgPSAwLjI1IHNlbiBzZWtlcGluZzxicj4yMDAwIGtlcGluZyAmbmJzcDsgJm5ic3A7ID0gMC4yMiBzZW4gc2VrZXBpbmc8YnI+PGJyPmZyZWUgZW52ZWxvcGUsbXNrIGdhbWJhcixhcnR3b3JrPGJyPlNwZWZpa2FzaSBrYWQgS2Fod2luPGJyPkxpcGF0YW4gOiA8L2ZvbnQ+PHNwYW4gc3R5bGU9ImNvbG9yOnJnYig0MiwgNDIsIDQyKSI+OTBtbSB4IDIxNm1tJm5ic3A7PC9zcGFuPuKAizxicj48Zm9udCBjb2xvcj0iIzJhMmEyYSI+S2VydGFzIDsgQXJ0IENhcmQgMjYwZ3NtKHRlYmFsKTxicj5XYXJuYSA6IFdhcm5hIFBlbnVoPGJyPnRlcm11cmFoIGthdCBwYXNhcmFuIHhjYXllIGxlaCBzZXJ2ZXk8L2ZvbnQ+PC9mb250PjwvZW0+PC9kaXY+', 270, 800, NULL, 0, 2, '2019-11-25 06:25:51', '2019-11-25 06:25:51'),
(5, 'PAKEJ INARA C', 'PHAgc3R5bGU9InRleHQtYWxpZ246IGNlbnRlcjsiPlBha2VqIGluaSB1bnR1ayBrYWQga2Fod2luIGplbmlzJm5ic3A7PHN0cm9uZz5QT1NLQUQ8L3N0cm9uZz4mbmJzcDsoc2VrZXBpbmcgZGFuIHRpYWRhIGxpcGF0YW4pJm5ic3A7ICZuYnNwO3wmbmJzcDsgJm5ic3A7VGVyYmFoYWdpIGtlcGFkYSZuYnNwOzxzdHJvbmc+NDwvc3Ryb25nPiZuYnNwO3BpbGloYW48c3Ryb25nPiZuYnNwO3NhaXo8L3N0cm9uZz4mbmJzcDsoIEEsIEIsIEMgZGFuIEQgKSZuYnNwOyAmbmJzcDt8Jm5ic3A7ICZuYnNwO01pbmltdW0gdGVtcGFoYW4gc2VyZW5kYWggMTAwcGNzPGJyPgpNYXRlcmlhbCBrZXJ0YXMgdGViYWwgZGFyaSBqZW5pcyBBcnRjYXJkIDI2MGdzbSZuYnNwOyAmbmJzcDt8Jm5ic3A7ICZuYnNwO0FkYTxzdHJvbmc+Jm5ic3A7OSBGUkVFIElURU08L3N0cm9uZz4mbmJzcDtkYWxhbSBwYWtlaiBpbmkmbmJzcDsgJm5ic3A7fCZuYnNwOyAmbmJzcDs8c3Ryb25nPkZsZWtzaWJlbDwvc3Ryb25nPiZuYnNwO3VudHVrJm5ic3A7PHN0cm9uZz5kb3duZ3JhZGU8L3N0cm9uZz4mbmJzcDthdGF1Jm5ic3A7PHN0cm9uZz51cGdyYWRlPC9zdHJvbmc+Jm5ic3A7aXRlbTwvcD4KPHAgc3R5bGU9InRleHQtYWxpZ246IGNlbnRlcjsiPjxzdHJvbmc+U2FpeiBBIDombmJzcDs0eDZpbmNoIHwgU2FpeiBCIDogNHg4aW5jaCB8IFNhaXogQyA6IDZ4NmluY2ggfCBTYWl6IEQgOiA2eDhpbmNoPC9zdHJvbmc+PC9wPjxwIHN0eWxlPSJ0ZXh0LWFsaWduOiBjZW50ZXI7Ij48c3Ryb25nPjxicj48L3N0cm9uZz48L3A+PHAgc3R5bGU9InRleHQtYWxpZ246IGNlbnRlcjsiPjxicj48L3A+PG9sPjxsaSBzdHlsZT0idGV4dC1hbGlnbjogbGVmdDsiPjxzdHJvbmc+UGhvdG9ib290aCA2eDZmdCAxcGNzPC9zdHJvbmc+Jm5ic3A7KERlc2lnbiBib2xlaCBwaWxpaCBkYXJpcGFkYSBrb2xla3NpIGthbWkpPC9saT48bGkgc3R5bGU9InRleHQtYWxpZ246IGxlZnQ7Ij48c3Ryb25nPkJhbm5lciAzeDZmdCAxcGNzPC9zdHJvbmc+Jm5ic3A7KERlc2lnbiBzYW1hIGRlbmdhbiBwaWxpaGFuIGRlc2lnbiBrYWQpPC9saT48bGkgc3R5bGU9InRleHQtYWxpZ246IGxlZnQ7Ij48c3Ryb25nPkJ1bnRpbmcgMng1ZnQgMnBjczwvc3Ryb25nPiZuYnNwOyhEZXNpZ24gc2FtYSBkZW5nYW4gcGlsaWhhbiBkZXNpZ24ga2FkKTwvbGk+PGxpIHN0eWxlPSJ0ZXh0LWFsaWduOiBsZWZ0OyI+PHN0cm9uZz5Sb2FkIFNpZ24gMS41eDJmdCA0cGNzJm5ic3A7PC9zdHJvbmc+KERlc2lnbiBzYW1hIGRlbmdhbiBwaWxpaGFuIGRlc2lnbiBrYWQpPC9saT48bGkgc3R5bGU9InRleHQtYWxpZ246IGxlZnQ7Ij48c3Ryb25nPkJ1dHRvbiBCYWRnZSA1OG1tIDIwcGNzPC9zdHJvbmc+Jm5ic3A7KERlc2lnbiBzYW1hIGRlbmdhbiBwaWxpaGFuIGRlc2lnbiBrYWQpPC9saT48bGkgc3R5bGU9InRleHQtYWxpZ246IGxlZnQ7Ij48c3Ryb25nPlN0aWNrZXIgNDBtbSAyMDBwY3M8L3N0cm9uZz4mbmJzcDsoRGVzaWduIHNhbWEgZGVuZ2FuIHBpbGloYW4gZGVzaWduIGthZCk8L2xpPjxsaSBzdHlsZT0idGV4dC1hbGlnbjogbGVmdDsiPjxzdHJvbmc+UHJvcHMgMTVwY3M8L3N0cm9uZz4mbmJzcDsoUmFuZG9tICZhbXA7IFJlYWR5bWFkZSk8L2xpPjxsaSBzdHlsZT0idGV4dC1hbGlnbjogbGVmdDsiPjxzdHJvbmc+U2FtcHVsIFB1dGloPC9zdHJvbmc+Jm5ic3A7KE1lbmdpa3V0IEt1YW50aXRpIEthZCk8L2xpPjxsaSBzdHlsZT0idGV4dC1hbGlnbjogbGVmdDsiPjxzdHJvbmc+S3Vwb24gRGlza2F1bjwvc3Ryb25nPiZuYnNwOyhSTTMwLiBUZXJpbWEgc2VsZXBhcyBrYWQgc2lhcC4gVCZhbXA7Uyk8L2xpPjwvb2w+PGgyIHN0eWxlPSJ0ZXh0LWFsaWduOiBjZW50ZXI7Ij48c3Ryb25nPkxFQklIIElTVElNRVdBIEZsZWtzaWJlbDwvc3Ryb25nPjwvaDI+CjxwIHN0eWxlPSJ0ZXh0LWFsaWduOiBjZW50ZXI7Ij5QYWtlaiBrYWQga2Fod2luIGthbGkgaW5pIGxlYmloIGZsZWtzaWJlbAogZGVuZ2FuIGthbWkgbWVtYmVyaWthbiBhbmRhIHBlbHVhbmcgdW50dWsgZG93bmdyYWRlIHBha2VqIChtZW5nZ3VndXJrYW4KIHNlYmFoYWdpYW4gaXRlbSkgZGVuZ2FuIHNlZGlraXQgcGVub2xha2FuIGhhcmdhIGRhbiB1cGdyYWRlIGl0ZW0gCih1cGdyYWRlIHNhaXogbGViaWggYmVzYXIpIGRlbmdhbiBoYW55YSBzZWRpa2l0IHBlbmFtYmFoYW4gaGFyZ2EuPC9wPjxwIHN0eWxlPSJ0ZXh0LWFsaWduOiBjZW50ZXI7Ij48c3Ryb25nPjwvc3Ryb25nPjwvcD4=', 210, 300, NULL, 0, 2, '2019-11-25 06:28:10', '2019-11-25 06:28:10'),
(6, 'PAKEJ STANDARD', 'PHAgc3R5bGU9InRleHQtYWxpZ246IGNlbnRlcjsiPjxzcGFuIHN0eWxlPSJmb250LWZhbWlseTogdGFob21hLCBhcmlhbCwgaGVsdmV0aWNhLCBzYW5zLXNlcmlmOyBmb250LXNpemU6IDEzcHg7Ij5OYXNpIEJlcmlhbmkgLyBNaW55YWsgLyBIdWphbiBQYW5hcyA4MCUgPC9zcGFuPjxicj48c3BhbiBzdHlsZT0iZm9udC1mYW1pbHk6IHRhaG9tYSwgYXJpYWwsIGhlbHZldGljYSwgc2Fucy1zZXJpZjsgZm9udC1zaXplOiAxM3B4OyI+TmFzaSBQdXRpaDwvc3Bhbj48YnI+PHNwYW4gc3R5bGU9ImZvbnQtZmFtaWx5OiB0YWhvbWEsIGFyaWFsLCBoZWx2ZXRpY2EsIHNhbnMtc2VyaWY7IGZvbnQtc2l6ZTogMTNweDsgY29sb3I6ICNmZmZlZjk7Ij48c3BhbiBzdHlsZT0iY29sb3I6IHJnYigwLCAwLCAwKTsiPkF5YW0gTWFzYWsgTWVyYWggLyBHb3JlbmcgQmVyZW1wYWggLzwvc3Bhbj4gZXRjPC9zcGFuPjxicj4KPHNwYW4gc3R5bGU9ImNvbG9yOiAjZmZmZWY5OyI+PHNwYW4gc3R5bGU9ImZvbnQtZmFtaWx5OiB0YWhvbWEsIGFyaWFsLCBoZWx2ZXRpY2EsIHNhbnMtc2VyaWY7IGZvbnQtc2l6ZTogMTNweDsiPkRhZ2luZwpIaXRhbSAvIFJlbmRhbmcgLyBLdXppIC8gS2FyaSBLZW50YW5nIC8gZXRjPGJyPkRhbGNhIFNheXVyIDxicj4KQWNhciBKZWxhdGFoIC8gQWNhciBCdWFoIDxicj4KQnVhaCBPcmVuJm5ic3A7PGJyPgpBaXIgQ2VuZG9sJm5ic3A7PGJyPgoKPC9zcGFuPjxzcGFuIHN0eWxlPSJmb250LWZhbWlseTogdGFob21hLCBhcmlhbCwgaGVsdmV0aWNhLCBzYW5zLXNlcmlmOyBmb250LXNpemU6IDEzcHg7Ij5BaXIgbWluZXJhbCAoUi5PKSZuYnNwOzxicj48L3NwYW4+PHNwYW4gc3R5bGU9ImZvbnQtZmFtaWx5OiB0YWhvbWEsIGFyaWFsLCBoZWx2ZXRpY2EsIHNhbnMtc2VyaWY7IGZvbnQtc2l6ZTogMTNweDsiPlNhbWJhbCBTb3RvbmcgLyBVbGFtICZhbXA7IFNhbWJhbCBCZWxhY2FuIDUwJSA8L3NwYW4+PC9zcGFuPjwvcD48cCBzdHlsZT0idGV4dC1hbGlnbjogY2VudGVyOyI+PGJyPjwvcD48cCBzdHlsZT0idGV4dC1hbGlnbjogY2VudGVyOyI+PHN0cm9uZz48c3BhbiBzdHlsZT0iZm9udC1mYW1pbHk6IHRhaG9tYSwgYXJpYWwsIGhlbHZldGljYSwgc2Fucy1zZXJpZjsgZm9udC1zaXplOiAxM3B4OyBjb2xvcjogIzI3YTVhYzsiPlRFQSBDT1JORVIgUEVSQ1VNQTwvc3Bhbj48L3N0cm9uZz48L3A+CjxwIHN0eWxlPSJ0ZXh0LWFsaWduOiBjZW50ZXI7Ij48c3BhbiBzdHlsZT0iZm9udC1mYW1pbHk6IHRhaG9tYSwgYXJpYWwsIGhlbHZldGljYSwgc2Fucy1zZXJpZjsgZm9udC1zaXplOiAxM3B4OyI+VGVoIFRhcmlrIDMwJSA8L3NwYW4+PGJyPjxzcGFuIHN0eWxlPSJmb250LWZhbWlseTogdGFob21hLCBhcmlhbCwgaGVsdmV0aWNhLCBzYW5zLXNlcmlmOyBmb250LXNpemU6IDEzcHg7Ij5CdWJ1ciAgS2FjYW5nIDMwJSA8L3NwYW4+PGJyPjxzcGFuIHN0eWxlPSJmb250LWZhbWlseTogdGFob21hLCBhcmlhbCwgaGVsdmV0aWNhLCBzYW5zLXNlcmlmOyBmb250LXNpemU6IDEzcHg7Ij5LZWsgUGVuZ2FudGluIDIgVGluZ2thdCA8L3NwYW4+PC9wPjxwIHN0eWxlPSJ0ZXh0LWFsaWduOiBjZW50ZXI7Ij48c3BhbiBzdHlsZT0iZm9udC1mYW1pbHk6IHRhaG9tYSwgYXJpYWwsIGhlbHZldGljYSwgc2Fucy1zZXJpZjsgZm9udC1zaXplOiAxM3B4OyI+PC9zcGFuPjwvcD48cCBzdHlsZT0idGV4dC1hbGlnbjogY2VudGVyOyI+PGJyPjxzcGFuIHN0eWxlPSJjb2xvcjogI2ZmZmVmOTsiPjxzcGFuIHN0eWxlPSJmb250LWZhbWlseTogdGFob21hLCBhcmlhbCwgaGVsdmV0aWNhLCBzYW5zLXNlcmlmOyBmb250LXNpemU6IDEzcHg7Ij48c3Ryb25nPjxzcGFuIHN0eWxlPSJmb250LWZhbWlseTogdGFob21hLCBhcmlhbCwgaGVsdmV0aWNhLCBzYW5zLXNlcmlmOyBmb250LXNpemU6IDEzcHg7IGNvbG9yOiAjMjdhNWFjOyI+UEVSS0hJRE1BVEFOPC9zcGFuPjwvc3Ryb25nPjwvc3Bhbj48L3NwYW4+PC9wPjxwIHN0eWxlPSJ0ZXh0LWFsaWduOiBjZW50ZXI7Ij48YnI+PHNwYW4gc3R5bGU9ImNvbG9yOiAjZmZmZWY5OyI+PHNwYW4gc3R5bGU9ImZvbnQtZmFtaWx5OiB0YWhvbWEsIGFyaWFsLCBoZWx2ZXRpY2EsIHNhbnMtc2VyaWY7IGZvbnQtc2l6ZTogMTNweDsiPjxzdHJvbmc+PHNwYW4gc3R5bGU9ImZvbnQtZmFtaWx5OiB0YWhvbWEsIGFyaWFsLCBoZWx2ZXRpY2EsIHNhbnMtc2VyaWY7IGZvbnQtc2l6ZTogMTNweDsgY29sb3I6ICMyN2E1YWM7Ij48c3BhbiBzdHlsZT0iZm9udC1mYW1pbHk6IHRhaG9tYSwgYXJpYWwsIGhlbHZldGljYSwgc2Fucy1zZXJpZjsgZm9udC1zaXplOiAxM3B4OyI+Jm5ic3A7UGVsYXlhbiBCZXJ1bmlmb3JtIDEyIG9yYW5nIDwvc3Bhbj48YnI+PHNwYW4gc3R5bGU9ImZvbnQtZmFtaWx5OiB0YWhvbWEsIGFyaWFsLCBoZWx2ZXRpY2EsIHNhbnMtc2VyaWY7IGZvbnQtc2l6ZTogMTNweDsiPsODwoPDgsKiw4PCgsOCwoDDg8KCw4LCoiAmbmJzcDtTZXR0aW5nIE1lamEgTWFrYW4gQmVyYWRhYiArIERlY288L3NwYW4+PGJyPjxzcGFuIHN0eWxlPSJmb250LWZhbWlseTogdGFob21hLCBhcmlhbCwgaGVsdmV0aWNhLCBzYW5zLXNlcmlmOyBmb250LXNpemU6IDEzcHg7Ij7Dg8KDw4LCosODwoLDgsKAw4PCgsOCwqIgJm5ic3A7MiArIDEgQnVmZmV0IFN0YXRpb248L3NwYW4+PGJyPjxzcGFuIHN0eWxlPSJmb250LWZhbWlseTogdGFob21hLCBhcmlhbCwgaGVsdmV0aWNhLCBzYW5zLXNlcmlmOyBmb250LXNpemU6IHNtYWxsOyI+w4PCg8OCwqLDg8KCw4LCgMODwoLDgsKiICZuYnNwOzIgdW5pdCBEb21lIFZJUCArIEN1dGxlcmllczwvc3Bhbj48YnI+PHNwYW4gc3R5bGU9ImNvbG9yOiByZ2IoMCwgMCwgMCk7Ij4KPHNwYW4gc3R5bGU9ImZvbnQtZmFtaWx5OiB0YWhvbWEsIGFyaWFsLCBoZWx2ZXRpY2EsIHNhbnMtc2VyaWY7IGZvbnQtc2l6ZTogMTNweDsiPsODwoPDgsKiw4PCgsOCwoDDg8KCw4LCoiZuYnNwO1NhcnVuZyBLZXJ1c2kgKyBSaWJib24gdXRrIFZJUCA8L3NwYW4+PGJyPgo8c3BhbiBzdHlsZT0iZm9udC1mYW1pbHk6IHRhaG9tYSwgYXJpYWwsIGhlbHZldGljYSwgc2Fucy1zZXJpZjsgZm9udC1zaXplOiAxM3B4OyI+w4PCg8OCwqLDg8KCw4LCgMODwoLDgsKiICZuYnNwOzEgVW5pdCBNZWphIEtlazwvc3Bhbj48YnI+CjxzcGFuIHN0eWxlPSJmb250LWZhbWlseTogdGFob21hLCBhcmlhbCwgaGVsdmV0aWNhLCBzYW5zLXNlcmlmOyBmb250LXNpemU6IDEzcHg7Ij7Dg8KDw4LCosODwoLDgsKAw4PCgsOCwqIgMjEgVW5pdCBNZWphIEhhZGlhaCArIERvb3JnaWZ0IDwvc3Bhbj48YnI+PHNwYW4gc3R5bGU9ImZvbnQtZmFtaWx5OiB0YWhvbWEsIGFyaWFsLCBoZWx2ZXRpY2EsIHNhbnMtc2VyaWY7IGZvbnQtc2l6ZTogMTNweDsiPsODwoPDgsKiw4PCgsOCwoDDg8KCw4LCoiAmbmJzcDtQQSBzeXN0ZW0gJmFtcDsgREo8L3NwYW4+PGJyPjxzcGFuIHN0eWxlPSJmb250LWZhbWlseTogdGFob21hLCBhcmlhbCwgaGVsdmV0aWNhLCBzYW5zLXNlcmlmOyBmb250LXNpemU6IDEzcHg7Ij7Dg8KDw4LCosODwoLDgsKAw4PCgsOCwqIgJm5ic3A7MSB1bml0IGhpYXNhbiBtZWphIGtlazwvc3Bhbj48YnI+PHNwYW4gc3R5bGU9ImZvbnQtZmFtaWx5OiB0YWhvbWEsIGFyaWFsLCBoZWx2ZXRpY2EsIHNhbnMtc2VyaWY7IGZvbnQtc2l6ZTogMTNweDsiPsODwoPDgsKiw4PCgsOCwoDDg8KCw4LCoiAmbmJzcDsxIHVuaXQgbWVqYSBoYWRpYWg8L3NwYW4+PGJyPjwvc3Bhbj48c3BhbiBzdHlsZT0iZm9udC1mYW1pbHk6IHRhaG9tYSxhcmlhbCxoZWx2ZXRpY2Esc2Fucy1zZXJpZjsgZm9udC1zaXplOiAxM3B4OyBjb2xvcjogI2ZmZmVmOTsiPjxzcGFuIHN0eWxlPSJjb2xvcjogcmdiKDAsIDAsIDApOyI+w4PCg8OCwqLDg8KCw4LCgMODwoLDgsKiICZuYnNwO1BBIHNpc3RlbSAmYW1wOyBESiA8L3NwYW4+PC9zcGFuPjwvc3Bhbj48L3N0cm9uZz48L3NwYW4+PC9zcGFuPjwvcD48cCBzdHlsZT0idGV4dC1hbGlnbjogY2VudGVyOyI+PGJyPjxzcGFuIHN0eWxlPSJjb2xvcjogI2ZmZmVmOTsiPjxzcGFuIHN0eWxlPSJmb250LWZhbWlseTogdGFob21hLCBhcmlhbCwgaGVsdmV0aWNhLCBzYW5zLXNlcmlmOyBmb250LXNpemU6IDEzcHg7Ij48c3Ryb25nPjxzcGFuIHN0eWxlPSJmb250LWZhbWlseTogdGFob21hLCBhcmlhbCwgaGVsdmV0aWNhLCBzYW5zLXNlcmlmOyBmb250LXNpemU6IDEzcHg7IGNvbG9yOiAjMjdhNWFjOyI+PHNwYW4gc3R5bGU9ImZvbnQtZmFtaWx5OiB0YWhvbWEsYXJpYWwsaGVsdmV0aWNhLHNhbnMtc2VyaWY7IGZvbnQtc2l6ZTogMTNweDsgY29sb3I6ICNmZmZlZjk7Ij48c3BhbiBzdHlsZT0iY29sb3I6IHJnYigwLCAwLCAwKTsiPjxzdHJvbmc+PHNwYW4gc3R5bGU9ImZvbnQtZmFtaWx5OiB0YWhvbWEsIGFyaWFsLCBoZWx2ZXRpY2EsIHNhbnMtc2VyaWY7IGZvbnQtc2l6ZTogMTNweDsgY29sb3I6ICMyN2E1YWM7Ij5ERVdBTjwvc3Bhbj48L3N0cm9uZz48L3NwYW4+PC9zcGFuPjwvc3Bhbj48L3N0cm9uZz48L3NwYW4+PC9zcGFuPjwvcD48cCBzdHlsZT0idGV4dC1hbGlnbjogY2VudGVyOyI+PGJyPjxzcGFuIHN0eWxlPSJmb250LWZhbWlseTogdGFob21hLCBhcmlhbCwgaGVsdmV0aWNhLCBzYW5zLXNlcmlmOyBmb250LXNpemU6IDEzcHg7Ij48c3Ryb25nPjxzcGFuIHN0eWxlPSJmb250LWZhbWlseTogdGFob21hLCBhcmlhbCwgaGVsdmV0aWNhLCBzYW5zLXNlcmlmOyBmb250LXNpemU6IDEzcHg7Ij48c3BhbiBzdHlsZT0iZm9udC1mYW1pbHk6IHRhaG9tYSwgYXJpYWwsIGhlbHZldGljYSwgc2Fucy1zZXJpZjsgZm9udC1zaXplOiAxM3B4OyI+PHN0cm9uZz48c3BhbiBzdHlsZT0iZm9udC1mYW1pbHk6IHRhaG9tYSwgYXJpYWwsIGhlbHZldGljYSwgc2Fucy1zZXJpZjsgZm9udC1zaXplOiAxM3B4OyI+PHNwYW4gc3R5bGU9ImZvbnQtZmFtaWx5OiB0YWhvbWEsIGFyaWFsLCBoZWx2ZXRpY2EsIHNhbnMtc2VyaWY7IGZvbnQtc2l6ZTogMTNweDsiPiAmbmJzcDsyMCBVbml0IE1lamEgTWFrYW4gVGV0YW11ICsgQWxhcyA8L3NwYW4+PGJyPjxzcGFuIHN0eWxlPSJmb250LWZhbWlseTogdGFob21hLCBhcmlhbCwgaGVsdmV0aWNhLCBzYW5zLXNlcmlmOyBmb250LXNpemU6IDEzcHg7Ij7Dg8KDw4LCosODwoLDgsKAw4PCgsOCwqIgJm5ic3A7MjAwIEtlcnVzaSBQbGFzdGlrIFRldGFtdSA8L3NwYW4+PC9zcGFuPjwvc3Ryb25nPjwvc3Bhbj48L3NwYW4+PC9zdHJvbmc+PC9zcGFuPjwvcD4=', 12900, 1000, NULL, 0, 3, '2019-11-25 14:42:34', '2019-11-25 06:42:34');

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
(1, 1, 7),
(2, 1, 8),
(3, 1, 9),
(4, 1, 23),
(5, 2, 4),
(6, 2, 8),
(7, 2, 13),
(8, 2, 22),
(9, 3, 14),
(10, 4, 14),
(11, 5, 14),
(12, 6, 8),
(13, 6, 13),
(14, 6, 22);

-- --------------------------------------------------------

--
-- Table structure for table `company_package_post`
--

CREATE TABLE `company_package_post` (
  `pp_id` int(11) NOT NULL,
  `pp_content` text NOT NULL,
  `pp_attachment` int(11) NOT NULL DEFAULT '0' COMMENT 'att_id',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_promotion`
--

CREATE TABLE `company_promotion` (
  `promotion_id` int(11) NOT NULL,
  `promotion_title` text NOT NULL,
  `promotion_price` text NOT NULL,
  `promotion_pax` text NOT NULL,
  `promotion_detail` text NOT NULL,
  `promotion_post` int(11) DEFAULT '0' COMMENT 'pp_id',
  `company_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_external`
--

CREATE TABLE `event_external` (
  `ee_id` int(11) NOT NULL,
  `ee_title` text NOT NULL,
  `location` text,
  `description` text,
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `time_start` time DEFAULT NULL,
  `time_end` time DEFAULT NULL,
  `poster` text,
  `url` text,
  `posted_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_external`
--

INSERT INTO `event_external` (`ee_id`, `ee_title`, `location`, `description`, `date_start`, `date_end`, `time_start`, `time_end`, `poster`, `url`, `posted_by`, `created_at`, `updated_at`) VALUES
(1, '23rd KLPJ Wedding Fair 2020 Kuala Lumpur Convention Centre 11 & 12 January 2020', 'Kuala Lumpur Convention Centre, Kuala Lumpur City Centre, 50088 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur', '23rd KLPJ Wedding Fair 2020 on 11 & 12 January 2020 at Kuala Lumpur Convention Centre (KLCC), Kuala Lumpur is the premium wedding expo in Malaysia since 2008. For couples who wish to tie-the-knot in Year 2020 and beyond, begin your wedding planning here! Find your preferred Pre-Wedding Photography Studio from Malaysia\'s Award Winning Top Bridal Houses here from PJ SS2, Damansara, Kuala Lumpur, Johor Bahru and Penang. Walk and sit wherever you wish - there will be no limitations of where you must go or sit! Our hopes and desires are for couples to make their wedding planning experience an exciting, meaningful and comfortable in a unique and inspiring space!', '2020-01-11', '2020-01-12', '11:15:00', '23:15:00', 'admin/event/1/uArmWGpJm2Nef1bWLRumA1ybhKOO3E1aHUObu8Cd.jpeg', 'https://www.klpj.com.my/', 5, '2019-11-25 07:16:14', '2019-11-25 07:16:14');

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
  `phone` text COLLATE utf8mb4_unicode_ci,
  `fullname` text COLLATE utf8mb4_unicode_ci,
  `dob` date DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `state` text COLLATE utf8mb4_unicode_ci,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dp` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `role_id` int(11) DEFAULT '5',
  `company_id` int(11) NOT NULL DEFAULT '0' COMMENT '0= for client user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `fullname`, `dob`, `address`, `state`, `email_verified_at`, `password`, `dp`, `created_at`, `updated_at`, `remember_token`, `status_id`, `role_id`, `company_id`) VALUES
(1, 'Habib', 'habibmohdsaufi@gmail.com', '0125456556', 'Muhammad Habib bin Mohd Saufi', '1982-11-20', 'No 21, Jalan Gemilng 7\nTaman Duta, 50480 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur', 'Pahang', NULL, '$2y$10$c0.2XaxD/ZanP4IkCbRTy.3/ZIg5RhK9hwEIjIPxA1HJCAhmD/h8.', 'avatar/user/1/96R1pRWMpqXz0LMI7emdrT8oldH1BhxpVgrDwUww.jpeg', '2019-11-25 05:50:53', '2019-11-25 05:55:55', NULL, '1', 3, 1),
(2, 'Razman Hassan', 'habib@kasatria.com', '0173685866', 'Razman Hassan bin Hj Salleh', NULL, NULL, NULL, NULL, '$2y$10$s5/eVa/0heWrZtCEDdkbH.bxpzcrtclsjQgke0pWfgjqY78KgLfJm', 'avatar/user/2/j0wIzddxsTob1ZHsursa02LmWETgAl8Sghik8CdX.png', '2019-11-25 06:16:56', '2019-11-25 06:18:17', NULL, '1', 3, 2),
(3, 'Humaira Salleh', 'humaira@gmail.com', '0136568848', 'Nur Humaira binti Salleh', NULL, NULL, NULL, NULL, '$2y$10$55J04OGi4pGaGvp2Iy1/o.JjXE4uJkB6sX8xH5QypprTHwlO9ZTvy', NULL, '2019-11-25 06:32:25', '2019-11-25 06:32:25', NULL, '1', 3, 3),
(4, 'Alyn Azren', 'alynazren@gmail.com', '0172193819', 'Nur Amalina binti Azren', NULL, NULL, 'Selangor', NULL, '$2y$10$IyIDT.WSIqL1mythMUr3DefpJWjjtGNfdY7qLVWpzWr41JoKbxQMu', 'avatar/user/4/Gc0CUEV1st9QO1QYA6X8Die0KSw5zf7dDgDqPrIb.jpeg', '2019-11-25 06:44:04', '2019-11-25 06:49:37', NULL, '1', 5, 0),
(5, 'Amalina', 'online.support@savethedate-my.com', '0172193819', 'Amalina Azren', NULL, NULL, NULL, NULL, '$2y$10$c0.2XaxD/ZanP4IkCbRTy.3/ZIg5RhK9hwEIjIPxA1HJCAhmD/h8.', NULL, '2019-11-25 15:11:39', '2019-11-25 15:11:39', NULL, '1', 0, 0);

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
(4, 'Vendor Staff'),
(5, 'Customer');

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
  `we_venue` text,
  `we_desc` text,
  `we_remark` text,
  `package_id` int(11) NOT NULL DEFAULT '0',
  `company_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `wes_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wevent`
--

INSERT INTO `wevent` (`we_id`, `we_title`, `we_date`, `we_time1`, `we_time2`, `we_venue`, `we_desc`, `we_remark`, `package_id`, `company_id`, `user_id`, `wes_id`, `created_at`, `updated_at`) VALUES
(1, 'Aniza & Ramli', '2020-04-24', '00:00:00', '00:00:00', NULL, NULL, NULL, 1, 1, 4, 1, '2019-11-25 14:53:20', '2019-11-25 06:53:20');

-- --------------------------------------------------------

--
-- Table structure for table `wevent_agreement`
--

CREATE TABLE `wevent_agreement` (
  `a_id` int(11) NOT NULL,
  `we_id` int(11) NOT NULL,
  `party_id` int(11) NOT NULL,
  `party_type` text NOT NULL,
  `party_agree` int(1) NOT NULL DEFAULT '0',
  `remark` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wevent_inbox`
--

CREATE TABLE `wevent_inbox` (
  `i_id` int(11) NOT NULL,
  `i_sender_id` text NOT NULL,
  `i_recipient_id` int(11) NOT NULL,
  `i_type_id` int(11) NOT NULL,
  `i_subject` text,
  `i_content` text,
  `i_item_id` int(11) DEFAULT NULL,
  `i_status_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wevent_inbox`
--

INSERT INTO `wevent_inbox` (`i_id`, `i_sender_id`, `i_recipient_id`, `i_type_id`, `i_subject`, `i_content`, `i_item_id`, `i_status_id`, `created_at`, `updated_at`) VALUES
(1, '0', 2, 4, '', '', 1, 1, '2019-11-25 15:08:54', '2019-11-25 07:08:54');

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
  `wet_payment` int(11) NOT NULL DEFAULT '0',
  `tc_id` int(11) NOT NULL,
  `ts_id` int(11) NOT NULL,
  `wet_remark` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wevent_timeline`
--

INSERT INTO `wevent_timeline` (`wet_id`, `wet_subject`, `wet_desc`, `wet_datetime`, `we_id`, `wet_owner`, `user_id`, `wet_payment`, `tc_id`, `ts_id`, `wet_remark`, `created_at`, `updated_at`) VALUES
(1, 'First Meet Up', 'PHA+QmVyaWt1dCBhZGFsYWggaXNpIHBlcmJpbmNhbmdhbiA6IDwvcD48cD4tIG1lbmdhbWJpbCBQTCBHcmFwaGljIHNlYmFnYWkgd2FraWwgYmFoYWdpYW4ga2FkIGplbXB1dGFuIGRhbiB2aWRlb2dyYXBoeTwvcD48cD4tIG1lbmVudHVrYW4gbWVudSB1bnR1ayBoYXJpIG5pa2FoIGRhbiBzYW5kaW5nPC9wPjxwPjxicj48L3A+PHA+UGVydGVtdWFuIGRpYWRha2FuIGRpIENhZmV0YXJpYSBUTkIgS0wgU2VudHJhbC48YnI+PC9wPg==', '2019-11-28 23:03:00', 1, 1, 4, 1500, 1, 2, NULL, '2019-11-25 15:07:54', '2019-11-25 07:07:54');

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
(1, 1, 1),
(2, 2, 1);

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
  MODIFY `att_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
  MODIFY `cct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `company_contact`
--
ALTER TABLE `company_contact`
  MODIFY `company_contact_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company_crm`
--
ALTER TABLE `company_crm`
  MODIFY `crm_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company_package`
--
ALTER TABLE `company_package`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `company_package_category_tag`
--
ALTER TABLE `company_package_category_tag`
  MODIFY `cpct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
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
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `event_external`
--
ALTER TABLE `event_external`
  MODIFY `ee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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
  MODIFY `we_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wevent_agreement`
--
ALTER TABLE `wevent_agreement`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wevent_inbox`
--
ALTER TABLE `wevent_inbox`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wevent_status`
--
ALTER TABLE `wevent_status`
  MODIFY `wes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `wevent_timeline`
--
ALTER TABLE `wevent_timeline`
  MODIFY `wet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wevent_vendors`
--
ALTER TABLE `wevent_vendors`
  MODIFY `wev_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
