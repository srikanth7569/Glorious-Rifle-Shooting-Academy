-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 28, 2020 at 11:34 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ioms_v2`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

DROP TABLE IF EXISTS `about_us`;
CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `slider1` text NOT NULL,
  `slider2` text NOT NULL,
  `slider3` text NOT NULL,
  `who_we_are` text NOT NULL,
  `what_we_do` text NOT NULL,
  `team_members` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `accesslog`
--

DROP TABLE IF EXISTS `accesslog`;
CREATE TABLE `accesslog` (
  `sl_no` bigint(20) NOT NULL,
  `action_page` varchar(50) DEFAULT NULL,
  `action_done` text,
  `remarks` text NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `entry_date` datetime DEFAULT NULL,
  `is_sync` tinyint(4) NOT NULL DEFAULT '0',
  `is_modify` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

DROP TABLE IF EXISTS `batch`;
CREATE TABLE `batch` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `course_id` int(11) NOT NULL,
  `batch_time` varchar(50) NOT NULL,
  `start_date` varchar(30) NOT NULL,
  `end_date` varchar(30) NOT NULL,
  `faculty` int(11) NOT NULL,
  `faculty_agreed_fees` int(11) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `img` text NOT NULL,
  `description` text NOT NULL,
  `author_type` tinyint(4) NOT NULL,
  `author_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1=approved,0=unapproved',
  `category` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `courseCode` varchar(30) NOT NULL,
  `category_id` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `duration_type` varchar(20) NOT NULL,
  `fees` int(11) NOT NULL,
  `description` text NOT NULL,
  `learning_outcomes` text,
  `image` text NOT NULL,
  `no_of_lec` int(11) DEFAULT NULL,
  `no_of_quizz` int(11) NOT NULL,
  `skill_level` tinyint(4) NOT NULL DEFAULT '1',
  `language` int(11) NOT NULL,
  `assessments` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=No,1=Yes',
  `cc_chapter` text,
  `cc_chapter_detail` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `email_status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `course_category`
--

DROP TABLE IF EXISTS `course_category`;
CREATE TABLE `course_category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

DROP TABLE IF EXISTS `currency`;
CREATE TABLE `currency` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `symbol` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`id`, `name`, `code`, `symbol`) VALUES
(1, 'Leke1', 'ALL', 'Lek'),
(2, 'Dollars', 'USD', '$'),
(3, 'Afghanis', 'AFN', '؋'),
(4, 'Pesos', 'ARS', '$'),
(5, 'Guilders', 'AWG', 'ƒ'),
(6, 'Dollars', 'AUD', '$'),
(7, 'New Manats', 'AZN', 'ман'),
(8, 'Dollars', 'BSD', '$'),
(9, 'Dollars', 'BBD', '$'),
(10, 'Rubles', 'BYR', 'p.'),
(11, 'Euro', 'EUR', '€'),
(12, 'Dollars', 'BZD', 'BZ$'),
(13, 'Dollars', 'BMD', '$'),
(14, 'Bolivianos', 'BOB', '$b'),
(15, 'Convertible Marka', 'BAM', 'KM'),
(16, 'Pula', 'BWP', 'P'),
(17, 'Leva', 'BGN', 'лв'),
(18, 'Reais', 'BRL', 'R$'),
(19, 'Pounds', 'GBP', '£'),
(20, 'Dollars', 'BND', '$'),
(21, 'Riels', 'KHR', '៛'),
(22, 'Dollars', 'CAD', '$'),
(23, 'Dollars', 'KYD', '$'),
(24, 'Pesos', 'CLP', '$'),
(25, 'Yuan Renminbi', 'CNY', '¥'),
(26, 'Pesos', 'COP', '$'),
(27, 'Colón', 'CRC', '₡'),
(28, 'Kuna', 'HRK', 'kn'),
(29, 'Pesos', 'CUP', '₱'),
(30, 'Koruny', 'CZK', 'Kč'),
(31, 'Kroner', 'DKK', 'kr'),
(32, 'Pesos', 'DOP ', 'RD$'),
(33, 'Dollars', 'XCD', '$'),
(34, 'Pounds', 'EGP', '£'),
(35, 'Colones', 'SVC', '$'),
(36, 'Pounds', 'FKP', '£'),
(37, 'Dollars', 'FJD', '$'),
(38, 'Cedis', 'GHC', '¢'),
(39, 'Pounds', 'GIP', '£'),
(40, 'Quetzales', 'GTQ', 'Q'),
(41, 'Pounds', 'GGP', '£'),
(42, 'Dollars', 'GYD', '$'),
(43, 'Lempiras', 'HNL', 'L'),
(44, 'Dollars', 'HKD', '$'),
(45, 'Forint', 'HUF', 'Ft'),
(46, 'Kronur', 'ISK', 'kr'),
(47, 'Rupees', 'INR', 'Rp'),
(48, 'Rupiahs', 'IDR', 'Rp'),
(49, 'Rials', 'IRR', '﷼'),
(50, 'Pounds', 'IMP', '£'),
(51, 'New Shekels', 'ILS', '₪'),
(52, 'Dollars', 'JMD', 'J$'),
(53, 'Yen', 'JPY', '¥'),
(54, 'Pounds', 'JEP', '£'),
(55, 'Tenge', 'KZT', 'лв'),
(56, 'Won', 'KPW', '₩'),
(57, 'Won', 'KRW', '₩'),
(58, 'Soms', 'KGS', 'лв'),
(59, 'Kips', 'LAK', '₭'),
(60, 'Lati', 'LVL', 'Ls'),
(61, 'Pounds', 'LBP', '£'),
(62, 'Dollars', 'LRD', '$'),
(63, 'Switzerland Francs', 'CHF', 'CHF'),
(64, 'Litai', 'LTL', 'Lt'),
(65, 'Denars', 'MKD', 'ден'),
(66, 'Ringgits', 'MYR', 'RM'),
(67, 'Rupees', 'MUR', '₨'),
(68, 'Pesos', 'MXN', '$'),
(69, 'Tugriks', 'MNT', '₮'),
(70, 'Meticais', 'MZN', 'MT'),
(71, 'Dollars', 'NAD', '$'),
(72, 'Rupees', 'NPR', '₨'),
(73, 'Guilders', 'ANG', 'ƒ'),
(74, 'Dollars', 'NZD', '$'),
(75, 'Cordobas', 'NIO', 'C$'),
(76, 'Nairas', 'NGN', '₦'),
(77, 'Krone', 'NOK', 'kr'),
(78, 'Rials', 'OMR', '﷼'),
(79, 'Rupees', 'PKR', '₨'),
(80, 'Balboa', 'PAB', 'B/.'),
(81, 'Guarani', 'PYG', 'Gs'),
(82, 'Nuevos Soles', 'PEN', 'S/.'),
(83, 'Pesos', 'PHP', 'Php'),
(84, 'Zlotych', 'PLN', 'zł'),
(85, 'Rials', 'QAR', '﷼'),
(86, 'New Lei', 'RON', 'lei'),
(87, 'Rubles', 'RUB', 'руб'),
(88, 'Pounds', 'SHP', '£'),
(89, 'Riyals', 'SAR', '﷼'),
(90, 'Dinars', 'RSD', 'Дин.'),
(91, 'Rupees', 'SCR', '₨'),
(92, 'Dollars', 'SGD', '$'),
(93, 'Dollars', 'SBD', '$'),
(94, 'Shillings', 'SOS', 'S'),
(95, 'Rand', 'ZAR', 'R'),
(96, 'Rupees', 'LKR', '₨'),
(97, 'Kronor', 'SEK', 'kr'),
(98, 'Dollars', 'SRD', '$'),
(99, 'Pounds', 'SYP', '£'),
(100, 'New Dollars', 'TWD', 'NT$'),
(101, 'Baht', 'THB', '฿'),
(102, 'Dollars', 'TTD', 'TT$'),
(103, 'Lira', 'TRY', 'TL'),
(104, 'Liras', 'TRL', '£'),
(105, 'Dollars', 'TVD', '$'),
(106, 'Hryvnia', 'UAH', '₴'),
(107, 'Pesos', 'UYU', '$U'),
(108, 'Sums', 'UZS', 'лв'),
(109, 'Bolivares Fuertes', 'VEF', 'Bs'),
(110, 'Dong', 'VND', '₫'),
(111, 'Rials', 'YER', '﷼'),
(112, 'Zimbabwe Dollars', 'ZWD', 'Z$');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

DROP TABLE IF EXISTS `designation`;
CREATE TABLE `designation` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `email_setting`
--

DROP TABLE IF EXISTS `email_setting`;
CREATE TABLE `email_setting` (
  `id` int(11) NOT NULL,
  `type` tinyint(4) NOT NULL COMMENT '1=for enquiry;2=for subscriber',
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email_setting`
--

INSERT INTO `email_setting` (`id`, `type`, `subject`, `message`, `status`) VALUES
(2, 1, 'subject test11', '<p>message test</p>\r\n', 1),
(3, 2, 'subject title for subscriber', '<p>message to subscribers</p>\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

DROP TABLE IF EXISTS `enquiry`;
CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `father_name` varchar(30) NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `email` varchar(30) NOT NULL,
  `cnic` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `courseID` int(11) NOT NULL,
  `preferredTime` varchar(30) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `remarks` text NOT NULL,
  `handledBy` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL,
  `department` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email_status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_status`
--

DROP TABLE IF EXISTS `enquiry_status`;
CREATE TABLE `enquiry_status` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `event_content` text NOT NULL,
  `date` varchar(30) NOT NULL,
  `start_time` varchar(30) NOT NULL,
  `end_time` varchar(30) NOT NULL,
  `location` text NOT NULL,
  `image` text NOT NULL,
  `total_slots` int(11) DEFAULT '0',
  `booked_slots` int(11) DEFAULT '0',
  `cost` int(11) NOT NULL DEFAULT '0',
  `members` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

DROP TABLE IF EXISTS `expense`;
CREATE TABLE `expense` (
  `id` int(11) NOT NULL,
  `date` varchar(30) NOT NULL,
  `title` varchar(50) NOT NULL,
  `expense_category` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `expense_category`
--

DROP TABLE IF EXISTS `expense_category`;
CREATE TABLE `expense_category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `pos_id` int(11) NOT NULL,
  `jobType` tinyint(4) NOT NULL DEFAULT '1' COMMENT '2=from web',
  `name` varchar(50) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `img` varchar(100) DEFAULT NULL,
  `address` text NOT NULL,
  `course` text NOT NULL,
  `qualification` text NOT NULL,
  `experience` varchar(30) NOT NULL,
  `doj` varchar(30) NOT NULL,
  `fb` text NOT NULL,
  `twitter` text NOT NULL,
  `instagram` text NOT NULL,
  `detail` text,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

DROP TABLE IF EXISTS `fee`;
CREATE TABLE `fee` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `receiptNo` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL,
  `batchID` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

DROP TABLE IF EXISTS `guests`;
CREATE TABLE `guests` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `img` text NOT NULL,
  `designation_id` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `send_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0=read,1=inbox;2=sent;3=draft'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `img` text NOT NULL,
  `description` text NOT NULL,
  `category` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

DROP TABLE IF EXISTS `salary`;
CREATE TABLE `salary` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `month` varchar(30) NOT NULL,
  `year` int(11) NOT NULL,
  `basic` int(11) NOT NULL,
  `deduction` int(11) NOT NULL,
  `gross` int(11) NOT NULL,
  `tax` int(11) NOT NULL,
  `net_salary` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=unpaid,1=paid'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sec_menu_item`
--

DROP TABLE IF EXISTS `sec_menu_item`;
CREATE TABLE `sec_menu_item` (
  `menu_id` int(11) NOT NULL,
  `menu_title` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_url` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `module` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_menu` int(11) DEFAULT NULL,
  `is_report` tinyint(1) DEFAULT NULL,
  `createby` int(11) NOT NULL,
  `createdate` datetime NOT NULL,
  `is_sync` tinyint(4) NOT NULL DEFAULT '0',
  `is_modify` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sec_role_permission`
--

DROP TABLE IF EXISTS `sec_role_permission`;
CREATE TABLE `sec_role_permission` (
  `id` bigint(20) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `can_access` tinyint(1) NOT NULL,
  `can_create` tinyint(1) NOT NULL,
  `can_edit` tinyint(1) NOT NULL,
  `can_delete` tinyint(1) NOT NULL,
  `createby` int(11) NOT NULL,
  `createdate` datetime NOT NULL,
  `is_sync` tinyint(4) NOT NULL DEFAULT '0',
  `is_modify` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sec_role_tbl`
--

DROP TABLE IF EXISTS `sec_role_tbl`;
CREATE TABLE `sec_role_tbl` (
  `role_id` int(11) NOT NULL,
  `role_name` text NOT NULL,
  `role_description` text NOT NULL,
  `create_by` int(11) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL,
  `role_status` int(11) NOT NULL DEFAULT '1',
  `is_sync` tinyint(4) NOT NULL DEFAULT '0',
  `is_modify` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sec_user_access_tbl`
--

DROP TABLE IF EXISTS `sec_user_access_tbl`;
CREATE TABLE `sec_user_access_tbl` (
  `role_acc_id` int(11) NOT NULL,
  `fk_role_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `is_sync` tinyint(4) NOT NULL DEFAULT '0',
  `is_modify` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

DROP TABLE IF EXISTS `setting`;
CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `institute_name` varchar(50) NOT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `fb_link` varchar(50) DEFAULT NULL,
  `twitter_link` varchar(50) DEFAULT NULL,
  `regNoPrefix` varchar(30) NOT NULL,
  `receiptNoPrefix` varchar(30) NOT NULL,
  `currency` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `institute_name`, `logo`, `email`, `phone`, `address`, `fb_link`, `twitter_link`, `regNoPrefix`, `receiptNoPrefix`, `currency`) VALUES
(2, 'Stepup ITS', 'assets/img/icons/2020-03-18/A.png', 'info@stepupsp.com', '03170757743', 'ABC', 'fb.com', 'twitter.com', 'SIFSD01', 'SIFSD01', 79);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL,
  `status` tinyint(4) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `regType` int(11) NOT NULL,
  `regNo` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cnic` varchar(50) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `father_mobile` varchar(30) NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `image` text,
  `city` varchar(50) NOT NULL,
  `address` text,
  `courseID` int(11) NOT NULL,
  `batchID` int(11) NOT NULL,
  `student_agreed_fee` int(11) NOT NULL,
  `department` varchar(50) DEFAULT NULL,
  `semester` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

DROP TABLE IF EXISTS `subscriber`;
CREATE TABLE `subscriber` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_rating`
--

DROP TABLE IF EXISTS `teacher_rating`;
CREATE TABLE `teacher_rating` (
  `id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` int(2) NOT NULL,
  `review` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `theme_setting`
--

DROP TABLE IF EXISTS `theme_setting`;
CREATE TABLE `theme_setting` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `layout` tinyint(4) NOT NULL,
  `sidebar_color` tinyint(4) NOT NULL,
  `theme_color` varchar(30) NOT NULL,
  `mini_sidebar` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `theme_setting`
--

INSERT INTO `theme_setting` (`id`, `uid`, `layout`, `sidebar_color`, `theme_color`, `mini_sidebar`) VALUES
(1, 1, 1, 2, 'white', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `type` tinyint(4) DEFAULT NULL COMMENT '1=teacher,2=student',
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `about` text,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `password_reset_token` varchar(20) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `last_logout` datetime DEFAULT NULL,
  `ip_address` varchar(14) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT '0',
  `is_sync` tinyint(4) NOT NULL DEFAULT '0',
  `is_modify` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `type`, `firstname`, `lastname`, `about`, `email`, `password`, `password_reset_token`, `image`, `last_login`, `last_logout`, `ip_address`, `status`, `is_admin`, `is_sync`, `is_modify`) VALUES
(1, NULL, 'admin', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur voluptatum alias molestias minus quod dignissimos.', 'admin@admin.com', '0192023a7bbd73250516f069df18b500', NULL, NULL, '2020-05-28 11:01:11', '2020-05-18 12:35:57', '192.168.100.11', NULL, 1, 0, 0),
(2, 2, 'test', NULL, NULL, '33333-3333333-3', 'e0212f9d1c1c62cb09906fa20d26e505', NULL, NULL, '2020-04-15 17:08:34', '2020-04-15 12:17:00', '::1', NULL, 0, 0, 0),
(3, 2, 'tttt', NULL, NULL, '11111-1111111-1', 'dc1600139d4826d99b663e4c043868b6', NULL, NULL, '2020-04-20 19:52:08', '2020-04-20 19:50:02', '192.168.100.11', NULL, 0, 0, 0),
(4, 2, 'Ali Almahir', NULL, NULL, '23456-7865433-3', '42dbf8060d233f78657304c40e510314', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accesslog`
--
ALTER TABLE `accesslog`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_category`
--
ALTER TABLE `course_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_setting`
--
ALTER TABLE `email_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry_status`
--
ALTER TABLE `enquiry_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense_category`
--
ALTER TABLE `expense_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sec_menu_item`
--
ALTER TABLE `sec_menu_item`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `sec_role_permission`
--
ALTER TABLE `sec_role_permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sec_role_tbl`
--
ALTER TABLE `sec_role_tbl`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `sec_user_access_tbl`
--
ALTER TABLE `sec_user_access_tbl`
  ADD PRIMARY KEY (`role_acc_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_rating`
--
ALTER TABLE `teacher_rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theme_setting`
--
ALTER TABLE `theme_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `accesslog`
--
ALTER TABLE `accesslog`
  MODIFY `sl_no` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_category`
--
ALTER TABLE `course_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `email_setting`
--
ALTER TABLE `email_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enquiry_status`
--
ALTER TABLE `enquiry_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expense_category`
--
ALTER TABLE `expense_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fee`
--
ALTER TABLE `fee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sec_menu_item`
--
ALTER TABLE `sec_menu_item`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sec_role_permission`
--
ALTER TABLE `sec_role_permission`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sec_role_tbl`
--
ALTER TABLE `sec_role_tbl`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sec_user_access_tbl`
--
ALTER TABLE `sec_user_access_tbl`
  MODIFY `role_acc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher_rating`
--
ALTER TABLE `teacher_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `theme_setting`
--
ALTER TABLE `theme_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
