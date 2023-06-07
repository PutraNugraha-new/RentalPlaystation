-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 06, 2023 at 02:29 AM
-- Server version: 5.7.33
-- PHP Version: 8.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_amaco`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'site Administrator'),
(2, 'user', 'Reguler User');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 2),
(2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'workputranugraha803@gmail.com', 2, '2023-06-03 05:21:10', 1),
(2, '::1', 'workputranugraha803@gmail.com', 2, '2023-06-03 05:43:14', 1),
(3, '::1', 'workputranugraha803@gmail.com', 2, '2023-06-03 08:51:58', 1),
(4, '::1', 'workputranugraha803@gmail.com', 2, '2023-06-03 08:54:12', 1),
(5, '::1', 'workputranugraha803@gmail.com', 2, '2023-06-03 08:57:45', 1),
(6, '::1', 'workputranugraha803@gmail.com', 2, '2023-06-03 08:59:14', 1),
(7, '::1', 'workputranugraha803@gmail.com', 2, '2023-06-03 08:59:56', 1),
(8, '::1', 'workputranugraha803@gmail.com', 2, '2023-06-03 09:42:33', 1),
(9, '::1', 'workputranugraha803@gmail.com', 2, '2023-06-03 10:00:40', 1),
(10, '::1', 'workputranugraha803@gmail.com', 2, '2023-06-03 11:52:01', 1),
(11, '::1', 'workputranugraha803@gmail.com', 2, '2023-06-03 12:06:19', 1),
(12, '::1', 'workputranugraha803@gmail.com', 2, '2023-06-03 12:07:42', 1),
(13, '::1', 'workputranugraha803@gmail.com', 2, '2023-06-03 12:16:51', 1),
(14, '::1', 'adminAmaco', NULL, '2023-06-04 08:02:29', 0),
(15, '::1', 'workputranugraha803@gmail.com', 2, '2023-06-04 08:02:39', 1),
(16, '::1', 'workputranugraha803@gmail.com', 2, '2023-06-04 08:54:56', 1),
(17, '::1', 'workputranugraha803@gmail.com', 2, '2023-06-04 08:56:09', 1),
(18, '::1', 'workputranugraha803@gmail.com', 2, '2023-06-04 09:17:57', 1),
(19, '::1', 'workputranugraha803@gmail.com', 2, '2023-06-04 09:20:46', 1),
(20, '::1', 'workputranugraha803@gmail.com', 2, '2023-06-04 09:25:48', 1),
(21, '::1', 'workputranugraha803@gmail.com', 2, '2023-06-04 09:33:01', 1),
(22, '::1', 'workputranugraha803@gmail.com', 2, '2023-06-04 09:33:43', 1),
(23, '::1', 'workputranugraha803@gmail.com', 2, '2023-06-04 12:24:06', 1),
(24, '::1', 'workputranugraha803@gmail.com', 2, '2023-06-04 13:28:24', 1),
(25, '::1', 'workputranugraha803@gmail.com', 2, '2023-06-04 13:46:13', 1),
(26, '::1', 'workputranugraha803@gmail.com', 2, '2023-06-05 06:00:03', 1),
(27, '::1', 'workputranugraha803@gmail.com', 2, '2023-06-05 06:06:25', 1),
(28, '::1', 'simpandrive803@gmail.com', 3, '2023-06-05 06:47:10', 1),
(29, '::1', 'workputranugraha803@gmail.com', 2, '2023-06-05 07:05:48', 1),
(30, '::1', 'workputranugraha803@gmail.com', 2, '2023-06-05 11:33:42', 1),
(31, '::1', 'workputranugraha803@gmail.com', 2, '2023-06-05 13:57:34', 1),
(32, '::1', 'workputranugraha803@gmail.com', 2, '2023-06-05 14:28:50', 1),
(33, '::1', 'workputranugraha803@gmail.com', 2, '2023-06-06 01:41:40', 1),
(34, '::1', 'workputranugraha803@gmail.com', 2, '2023-06-06 02:11:36', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-users', 'manage all users'),
(2, 'manage profile', 'manage user\'s profile');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1685765819, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_identitas` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `tgl_lahir`, `no_telp`, `alamat`, `no_identitas`, `created_at`, `updated_at`) VALUES
(109, 'Pearlie Mayer', '1977-03-01', '+1-430-717-1651', '68280 Karine Grove\nEast Turner, AZ 50476', '15378810', '2023-06-05 07:52:59', '2023-06-05 07:52:59'),
(111, 'Prof. Gabriel Greenfelder', '1978-07-25', '+1 (781) 555-76', '54869 West Haven Suite 279\nCarolynborough, MS 80866-7836', '993548892', '2023-06-05 07:52:59', '2023-06-05 07:52:59'),
(112, 'Mr. Brown Lang IV', '2020-09-27', '+1-847-910-2576', '803 Spinka Expressway\nSouth Anne, AZ 43324', '215092216', '2023-06-05 07:52:59', '2023-06-05 07:52:59'),
(113, 'Mrs. Lillian Bashirian', '1986-06-17', '+1 (308) 464-63', '4336 Schiller Fork\nBrennanberg, ID 39690', '333689359', '2023-06-05 07:52:59', '2023-06-05 07:52:59'),
(114, 'Warren Greenholt', '2011-03-15', '510-267-6625', '39411 Mills Plains\nStephaniamouth, WA 74102', '418160485', '2023-06-05 07:52:59', '2023-06-05 07:52:59'),
(115, 'Myra Yundt', '1996-03-01', '+1.513.742.6268', '525 Giovani Stream Apt. 639\nNew Stefan, UT 16385-0699', '304524738', '2023-06-05 07:53:00', '2023-06-05 07:53:00'),
(116, 'Clint Lubowitz', '2004-03-15', '475.609.7601', '5912 Rahul Square Suite 031\nEast Kearaborough, IL 07421', '319066895', '2023-06-05 07:53:00', '2023-06-05 07:53:00'),
(117, 'Stacy Bogisich', '1981-09-12', '470.927.5323', '483 Randal Oval\nKuphalfort, MS 31517', '278221975', '2023-06-05 07:53:00', '2023-06-05 07:53:00'),
(118, 'Mauricio Spinka', '1977-11-15', '678.222.7759', '30230 Luther Brook Suite 524\nZulaufmouth, MO 42990-4510', '424378099', '2023-06-05 07:53:00', '2023-06-05 07:53:00'),
(119, 'Devyn Farrell', '2000-09-18', '+1 (661) 585-21', '5295 Eleonore Keys\nBreitenbergton, WI 57848-2680', '358497052', '2023-06-05 07:53:00', '2023-06-05 07:53:00'),
(120, 'Evie Littel', '1980-09-09', '+1 (630) 677-79', '4143 Citlalli Squares\nNew Travis, OK 53454-3607', '711063187', '2023-06-05 07:53:00', '2023-06-05 07:53:00'),
(121, 'Josefina Bayer', '2018-01-14', '234-902-6591', '48812 Jerde Route\nCristianfurt, ND 20724-2677', '476733608', '2023-06-05 07:53:00', '2023-06-05 07:53:00'),
(122, 'Alfreda Hand', '2017-12-24', '+13178482437', '6783 Hollie Landing\nNarcisoberg, IL 15676', '551098867', '2023-06-05 07:53:00', '2023-06-05 07:53:00'),
(123, 'Prof. Emily Will I', '2020-10-08', '+1.949.920.1492', '32837 Shania Forge\nNew Kennithshire, NM 17876-8680', '313015327', '2023-06-05 07:53:00', '2023-06-05 07:53:00'),
(124, 'Kira Rolfson', '1972-05-12', '1-734-236-5445', '8638 Wolff Island Suite 969\nCristophertown, LA 63319-7538', '107567792', '2023-06-05 07:53:00', '2023-06-05 07:53:00'),
(125, 'Dr. Vicente Walsh', '1982-10-17', '845-955-8852', '5267 Bogan Centers Suite 241\nAmosbury, ME 34935', '779775277', '2023-06-05 07:53:00', '2023-06-05 07:53:00'),
(126, 'Prof. Clarissa McKenzie MD', '2007-07-07', '1-779-964-4926', '15037 Mercedes Hollow\nWest Cartershire, MO 36175-8001', '841450157', '2023-06-05 07:53:00', '2023-06-05 07:53:00'),
(127, 'Kali McGlynn', '2014-01-22', '+1 (737) 408-33', '8600 Emmanuelle Plains Apt. 538\nNew Demarcoton, DC 35039', '455290269', '2023-06-05 07:53:00', '2023-06-05 07:53:00'),
(128, 'Mrs. Ada Jones IV', '2010-02-14', '1-904-494-7640', '79053 Ezequiel Mill\nArmstrongville, ME 97638', '583084540', '2023-06-05 07:53:01', '2023-06-05 07:53:01'),
(129, 'Tillman Hettinger', '2007-08-27', '+1.283.615.2365', '9638 Wade Corner Apt. 665\nLake Joanyhaven, IL 91146', '837746287', '2023-06-05 07:53:01', '2023-06-05 07:53:01'),
(130, 'Melody Mills Jr.', '1997-06-11', '1-283-353-0516', '45975 Stanford Islands\nNew Brennan, AK 61672', '634429056', '2023-06-05 07:53:01', '2023-06-05 07:53:01'),
(131, 'Akeem Legros', '2010-07-11', '234-565-8050', '77840 Jayce Divide\nRicemouth, ID 02990', '828646211', '2023-06-05 07:53:01', '2023-06-05 07:53:01'),
(132, 'Asa Jones', '1985-08-21', '810.415.1989', '4330 Waters Tunnel Apt. 758\nSisterport, ND 25099', '24918835', '2023-06-05 07:53:01', '2023-06-05 07:53:01'),
(133, 'Prof. Arnaldo Bauch PhD', '2005-11-25', '+1.901.927.2657', '102 Schuppe Lodge\nBlairhaven, SD 44920-3198', '197896619', '2023-06-05 07:53:01', '2023-06-05 07:53:01'),
(134, 'Clay Lind DDS', '2008-07-09', '1-757-678-9818', '290 Joana Throughway Suite 239\nVeummouth, MA 03500-4221', '504821361', '2023-06-05 07:53:01', '2023-06-05 07:53:01'),
(135, 'Prof. Valentine Lowe IV', '1977-10-25', '+1-940-641-9786', '1398 O\'Conner Skyway\nFadelstad, NY 40468', '492603805', '2023-06-05 07:53:01', '2023-06-05 07:53:01'),
(136, 'Prof. Carmine Labadie II', '2016-04-23', '928-543-1359', '372 Jacinthe Vista\nZakarytown, NC 16061', '286100403', '2023-06-05 07:53:01', '2023-06-05 07:53:01'),
(137, 'Prof. Kylee Christiansen', '1985-08-08', '(678) 575-2949', '132 Keeley Land Apt. 600\nGradystad, KS 61484-7422', '748928643', '2023-06-05 07:53:01', '2023-06-05 07:53:01'),
(138, 'Prof. Madelyn Feil III', '2010-01-02', '610.928.8965', '885 Hyman Union Suite 733\nEloystad, WY 30864', '855955100', '2023-06-05 07:53:01', '2023-06-05 07:53:01'),
(139, 'Dwight Baumbach', '1974-10-09', '320.887.5946', '473 Eloisa Views\nLake Willard, NM 16254-7183', '921721552', '2023-06-05 07:53:01', '2023-06-05 07:53:01'),
(140, 'Antone Bechtelar', '1999-11-30', '203.800.0139', '5799 Stephania Circles\nRowantown, KY 00774-2720', '274204866', '2023-06-05 07:53:01', '2023-06-05 07:53:01'),
(141, 'Audra Smith', '2011-08-07', '+16515750076', '1477 Reyes Cliff\nJosiahbury, HI 09991', '55135170', '2023-06-05 07:53:02', '2023-06-05 07:53:02'),
(142, 'Dr. Hannah Goyette MD', '2016-10-20', '1-330-757-8262', '5212 Lind Coves Apt. 289\nRosamondland, MA 15398-9234', '262188965', '2023-06-05 07:53:02', '2023-06-05 07:53:02'),
(143, 'Shyann Kuphal', '1983-05-18', '+1-269-548-3199', '931 Lola Island Apt. 656\nLake Brycenview, AZ 92412-2654', '796522968', '2023-06-05 07:53:02', '2023-06-05 07:53:02'),
(144, 'Ellie Mills', '2007-04-24', '+1 (463) 668-01', '31630 Wyman Skyway\nGleichnerstad, NH 00510-5421', '725338811', '2023-06-05 07:53:02', '2023-06-05 07:53:02'),
(145, 'Gerry Casper III', '1970-05-06', '1-747-729-6953', '4405 Paucek Dale\nNorth Athenafurt, NH 21216-1512', '402692014', '2023-06-05 07:53:02', '2023-06-05 07:53:02'),
(146, 'Adrienne Windler', '2010-01-23', '+15397955972', '94164 Alexandrea Fork\nStrackeport, RI 88990-2890', '795401346', '2023-06-05 07:53:02', '2023-06-05 07:53:02'),
(147, 'Bernadine Purdy', '1992-11-11', '(847) 777-2307', '57886 Prosacco Knoll\nKihnberg, AR 39025-2878', '915393741', '2023-06-05 07:53:02', '2023-06-05 07:53:02'),
(148, 'Thurman Ruecker IV', '1993-01-10', '925.540.6185', '9411 Little Spur\nPort Darrionport, NC 95376-6789', '937117364', '2023-06-05 07:53:02', '2023-06-05 07:53:02'),
(149, 'Tiara Zieme', '2000-08-16', '469.221.9402', '12793 Harry Lights Apt. 429\nNorth Madalyn, KS 09293-3812', '711838997', '2023-06-05 07:53:02', '2023-06-05 07:53:02'),
(150, 'Dr. Margaretta Rowe IV', '1991-11-02', '+18057189551', '58231 Tyshawn Dam Apt. 789\nNorth Christian, MT 16058-0996', '578903568', '2023-06-05 07:53:02', '2023-06-05 07:53:02'),
(151, 'Dr. Moriah Jaskolski', '2015-01-10', '408-860-8685', '8298 Carter Land\nLake Louie, ID 61715-8301', '220715095', '2023-06-05 07:53:02', '2023-06-05 07:53:02'),
(152, 'Janiya Roob PhD', '1990-07-14', '585-716-6989', '654 Brakus River Apt. 803\nPricemouth, NM 09008', '362458537', '2023-06-05 07:53:02', '2023-06-05 07:53:02'),
(153, 'Mr. Jermey Hayes IV', '2004-11-29', '(463) 342-4597', '63192 Orn Hills\nLucasville, MT 84669-9694', '393875682', '2023-06-05 07:53:02', '2023-06-05 07:53:02'),
(154, 'Faye Harvey', '2003-12-31', '1-626-596-2453', '9593 Wintheiser Stravenue Suite 022\nNorth Jarrellport, NM 40153', '728212525', '2023-06-05 07:53:02', '2023-06-05 07:53:02'),
(155, 'Miss Karlie Christiansen II', '2017-05-23', '(864) 510-6077', '3058 Gutmann Port Suite 793\nWest Laylabury, PA 26458', '268737305', '2023-06-05 07:53:02', '2023-06-05 07:53:02'),
(156, 'Micah Mayer', '2009-07-19', '+1-218-966-1106', '80781 Jazmyn Spur Suite 766\nEichmannhaven, OR 53273', '927693729', '2023-06-05 07:53:02', '2023-06-05 07:53:02'),
(157, 'Delores Eichmann', '2001-04-21', '515.585.8128', '705 Runte Burg Apt. 607\nEast Burdette, TX 13735', '297176964', '2023-06-05 07:53:02', '2023-06-05 07:53:02'),
(158, 'Cali McGlynn', '1990-12-24', '539-484-5273', '255 Ebba Prairie Apt. 070\nVeumfort, FL 74852-2558', '480992695', '2023-06-05 07:53:03', '2023-06-05 07:53:03'),
(159, 'Zack Hagenes', '2013-05-11', '+1-430-413-8558', '9557 Howe Pass\nGreenfelderberg, MT 52224-3912', '551251765', '2023-06-05 07:53:03', '2023-06-05 07:53:03'),
(160, 'Vella Hane', '2014-01-20', '318-224-8790', '71445 Hermiston Light Apt. 155\nFerryshire, VT 07989', '368046060', '2023-06-05 07:53:03', '2023-06-05 07:53:03'),
(161, 'George Hill', '2021-11-22', '(820) 247-8825', '68709 Wisozk Dam\nSouth Hipolitoview, NV 31037', '909485749', '2023-06-05 07:53:03', '2023-06-05 07:53:03'),
(162, 'Elise Heller V', '1996-06-14', '239.319.4420', '982 Mante Passage Apt. 998\nNicolasland, RI 19507-1806', '576001930', '2023-06-05 07:53:03', '2023-06-05 07:53:03'),
(163, 'Hilton Parisian', '1993-10-17', '657-467-2308', '722 Paucek Causeway Apt. 833\nBodetown, NV 39654', '2636700', '2023-06-05 07:53:03', '2023-06-05 07:53:03'),
(164, 'Deja Collier', '1976-05-22', '(805) 926-6141', '14513 Hyatt Landing\nSouth Itzel, AR 82584', '210119786', '2023-06-05 07:53:03', '2023-06-05 07:53:03'),
(165, 'Gilbert Buckridge', '2012-04-29', '571-594-5048', '594 Dicki Forge Apt. 769\nMorarstad, TN 62937', '845323994', '2023-06-05 07:53:03', '2023-06-05 07:53:03'),
(166, 'Prof. Oren Rau', '1995-07-28', '216.524.1840', '100 Farrell Course Apt. 189\nEast Salmashire, NH 77800', '426707296', '2023-06-05 07:53:03', '2023-06-05 07:53:03'),
(167, 'Leonora Reichert', '1985-11-20', '1-571-765-2734', '489 Savion Field Suite 341\nSouth Deshaun, MA 54303', '523629519', '2023-06-05 07:53:03', '2023-06-05 07:53:03'),
(168, 'Prof. Irving Eichmann PhD', '1994-10-22', '701-229-4921', '85724 Pietro Street Apt. 172\nNew Bettie, HI 45048-6870', '768331811', '2023-06-05 07:53:03', '2023-06-05 07:53:03'),
(169, 'Bernadine Stoltenberg', '2020-12-30', '908-342-5346', '934 Delores Way Suite 808\nKuvalisport, AR 89115-4018', '593443600', '2023-06-05 07:53:03', '2023-06-05 07:53:03'),
(170, 'Georgiana Bogan', '2011-09-02', '(407) 376-2024', '74296 Walton Turnpike\nAubreeport, ID 32855', '302412503', '2023-06-05 07:53:03', '2023-06-05 07:53:03'),
(171, 'Miss Blanche Fadel DDS', '1972-04-02', '940-996-4269', '927 Conroy Lodge\nSkilesborough, WI 06522-1515', '182747413', '2023-06-05 07:53:03', '2023-06-05 07:53:03'),
(172, 'Trycia Torp', '1998-01-25', '509-202-3532', '6570 Amara Shores\nNew Taureanberg, KS 90534', '779199821', '2023-06-05 07:53:03', '2023-06-05 07:53:03'),
(173, 'Mrs. Patricia Feest', '2015-10-03', '+1-682-416-3004', '95813 Guillermo Square\nShirleystad, MD 26599', '848310006', '2023-06-05 07:53:03', '2023-06-05 07:53:03'),
(174, 'Mr. Owen Botsford', '2010-07-08', '586.413.5603', '622 White Mall\nPerryburgh, WY 87665', '165869067', '2023-06-05 07:53:03', '2023-06-05 07:53:03'),
(175, 'Kim Gorczany', '2002-08-25', '+16268282846', '51043 Kuvalis Shore Suite 286\nJovannyfort, ND 47545-1217', '60418204', '2023-06-05 07:53:04', '2023-06-05 07:53:04'),
(176, 'Aileen Runte DVM', '1984-02-29', '(283) 981-6762', '182 Mina Plains\nEast Gretchen, MO 52267-6637', '584073815', '2023-06-05 07:53:04', '2023-06-05 07:53:04'),
(177, 'Prof. Albin Tremblay', '1976-12-15', '1-804-581-7201', '1879 Wilderman Corners Suite 436\nJeremyborough, IN 82905', '573555977', '2023-06-05 07:53:04', '2023-06-05 07:53:04'),
(178, 'Deanna Schimmel', '1976-04-08', '1-936-757-7257', '841 Torp Cove Apt. 896\nAnaburgh, DC 62033', '539278462', '2023-06-05 07:53:04', '2023-06-05 07:53:04'),
(179, 'Jeffrey Harber', '2005-04-04', '+1 (612) 495-80', '9416 Jarred Tunnel Suite 084\nSouth Sheridanborough, ID 47635-2973', '700947895', '2023-06-05 07:53:04', '2023-06-05 07:53:04'),
(180, 'Dr. Nico Hoppe MD', '1997-02-25', '904.992.8780', '3490 Kaya Neck\nVonRuedenstad, RI 27245', '324645640', '2023-06-05 07:53:04', '2023-06-05 07:53:04'),
(181, 'Rosalinda Halvorson', '1990-08-23', '(620) 286-6102', '3682 Geraldine Street\nHintzmouth, CT 28550-7779', '560315361', '2023-06-05 07:53:04', '2023-06-05 07:53:04'),
(182, 'Colin Crooks', '1972-11-12', '910-512-0362', '226 Wintheiser Unions\nNew Lewishaven, NJ 28139-7751', '565606592', '2023-06-05 07:53:04', '2023-06-05 07:53:04'),
(183, 'Ms. Susan Bogan', '1983-11-15', '+1 (234) 444-60', '5161 Corkery Park\nLake Estrella, GA 12782-2315', '65667528', '2023-06-05 07:53:04', '2023-06-05 07:53:04'),
(184, 'Rollin Hane', '1972-03-23', '+1-918-477-1889', '6238 Donnelly View\nSawaynburgh, TN 53985', '590472356', '2023-06-05 07:53:04', '2023-06-05 07:53:04'),
(185, 'Karli Beier', '2011-12-08', '+1 (440) 301-32', '791 Hackett Common\nNellafurt, DC 89875-3936', '68720337', '2023-06-05 07:53:04', '2023-06-05 07:53:04'),
(186, 'Chaz Bradtke', '1973-03-11', '+18182314952', '645 Nash Lock\nLake Marionbury, OK 23204-5636', '937889050', '2023-06-05 07:53:04', '2023-06-05 07:53:04'),
(187, 'Dr. Davonte Auer', '1985-10-19', '(646) 641-8662', '865 Kling Lock Suite 975\nDaughertyport, OK 68063-3356', '612503136', '2023-06-05 07:53:04', '2023-06-05 07:53:04'),
(188, 'Miss Taryn Aufderhar DVM', '1998-07-05', '+1 (240) 229-61', '94346 Adelle Camp Suite 557\nJerdehaven, NE 79260', '529784344', '2023-06-05 07:53:04', '2023-06-05 07:53:04'),
(189, 'Angelica Kassulke V', '1978-03-04', '+1 (737) 476-38', '647 Cartwright Vista\nNorth Edwin, VA 29024-5001', '974356827', '2023-06-05 07:53:04', '2023-06-05 07:53:04'),
(190, 'Margaret Moore IV', '2015-08-31', '(585) 344-0988', '794 Jan Points\nClotildeland, VT 74436', '682096087', '2023-06-05 07:53:04', '2023-06-05 07:53:04'),
(191, 'Julius Baumbach', '1991-07-21', '(682) 279-6948', '5692 Parker Spur\nStreichberg, IL 63296', '153758551', '2023-06-05 07:53:04', '2023-06-05 07:53:04'),
(192, 'Kendrick Kub Jr.', '2013-09-08', '+1-408-733-0614', '64453 Jan Ports Suite 867\nPriceborough, NE 31734', '36212998', '2023-06-05 07:53:05', '2023-06-05 07:53:05'),
(193, 'Kassandra Hessel', '1990-01-13', '305-810-8938', '13329 Ted Branch\nJohathanbury, AL 45028', '594804154', '2023-06-05 07:53:05', '2023-06-05 07:53:05'),
(194, 'Dexter McLaughlin', '1989-02-10', '+1-720-729-9671', '5083 Thiel Ports\nNorth Lorenahaven, FL 59327-4919', '487853872', '2023-06-05 07:53:05', '2023-06-05 07:53:05'),
(195, 'Ferne Schuppe', '2013-07-15', '1-828-785-1574', '9399 Hane Street Suite 425\nNorth Jabari, KS 42009', '637031999', '2023-06-05 07:53:05', '2023-06-05 07:53:05'),
(196, 'Rebeca Nitzsche', '2012-09-04', '1-678-626-8661', '9828 Arvilla Inlet\nLake Trevaburgh, TN 91108', '430592344', '2023-06-05 07:53:05', '2023-06-05 07:53:05'),
(197, 'Catalina Brakus', '1987-01-28', '773.735.4294', '819 Brekke Manor\nChristianastad, OK 39354-5805', '730411095', '2023-06-05 07:53:05', '2023-06-05 07:53:05'),
(198, 'Dasia Ortiz IV', '1987-10-09', '+1 (928) 724-88', '76388 Isabell Station Suite 024\nSouth Bailee, DE 22579', '412620678', '2023-06-05 07:53:05', '2023-06-05 07:53:05'),
(199, 'Dr. Betsy Fisher III', '1994-05-24', '+1 (571) 624-68', '57371 Shanna Extensions\nHellermouth, MO 05681-3738', '297522499', '2023-06-05 07:53:05', '2023-06-05 07:53:05'),
(200, 'Cassidy Wunsch', '2015-09-24', '703.216.1134', '5389 Elisha Squares\nClaudialand, SD 08043-1291', '803116759', '2023-06-05 07:53:05', '2023-06-05 07:53:05'),
(201, 'Mrs. Myriam Larkin', '1988-11-22', '+1 (320) 989-78', '896 Predovic Loop\nNew Santina, MD 44392-6422', '640319657', '2023-06-05 07:53:05', '2023-06-05 07:53:05'),
(202, 'Emmet Schmeler', '1978-10-03', '+1.951.268.6721', '85633 Grover Isle\nEast Moises, TN 55131', '994234658', '2023-06-05 07:53:05', '2023-06-05 07:53:05'),
(203, 'Sean Keebler', '2014-09-10', '920-460-5596', '189 Fritsch Garden\nSantaport, AK 68839', '711898852', '2023-06-05 07:53:05', '2023-06-05 07:53:05'),
(204, 'Murray Durgan', '2019-04-30', '747.451.4740', '712 Yundt Knoll\nEmeliechester, TN 35390-0282', '792435589', '2023-06-05 07:53:05', '2023-06-05 07:53:05'),
(205, 'Jennyfer Harber DDS', '2011-02-21', '1-727-225-6490', '69759 Israel Wall Suite 421\nPort Claudiamouth, FL 52842', '782733889', '2023-06-05 07:53:05', '2023-06-05 07:53:05'),
(206, 'Alexandra Zemlak', '2012-12-21', '1-308-944-5823', '114 Predovic River Apt. 162\nDaynefort, NH 44536', '408618990', '2023-06-05 07:53:05', '2023-06-05 07:53:05'),
(207, 'Velda Pfannerstill', '1997-10-08', '(772) 230-1358', '311 Nitzsche Meadow Apt. 093\nPort Arlene, CO 86661', '884416492', '2023-06-05 07:53:05', '2023-06-05 07:53:05'),
(208, 'Monserrat Ondricka', '1982-12-19', '(352) 292-3622', '894 Lula Inlet\nLake Arnold, NM 28336-9194', '170869641', '2023-06-05 07:53:05', '2023-06-05 07:53:05');

-- --------------------------------------------------------

--
-- Table structure for table `playstation`
--

CREATE TABLE `playstation` (
  `id_ps` int(11) NOT NULL,
  `nama_ps` varchar(50) NOT NULL,
  `tipe_ps` varchar(50) NOT NULL,
  `harga_sewa` int(10) NOT NULL,
  `tgl_pembelian` date NOT NULL,
  `jumlah_unit` int(5) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playstation`
--

INSERT INTO `playstation` (`id_ps`, `nama_ps`, `tipe_ps`, `harga_sewa`, `tgl_pembelian`, `jumlah_unit`, `created_at`, `updated_at`) VALUES
(1, 'PS 3', 'Slim', 5000, '2023-05-21', 10, '2023-05-20 17:28:27', '2023-05-20 17:28:27'),
(2, 'PS 4', 'Fat', 6000, '2023-05-22', 10, '2023-05-22 03:48:37', '2023-05-22 03:48:37'),
(4, 'PS 2', 'slim', 4000, '2023-06-05', 15, '2023-06-05 11:59:12', '2023-06-05 11:59:12');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `no_transaksi` int(11) NOT NULL,
  `tgl_peminjaman` datetime NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_ps` int(11) NOT NULL,
  `harga_sewa` int(50) NOT NULL,
  `lama_peminjaman` varchar(50) NOT NULL,
  `tunai` int(100) NOT NULL,
  `total_harga` int(100) NOT NULL,
  `kembalian` int(20) DEFAULT NULL,
  `status_peminjaman` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`no_transaksi`, `tgl_peminjaman`, `id_pelanggan`, `id_ps`, `harga_sewa`, `lama_peminjaman`, `tunai`, `total_harga`, `kembalian`, `status_peminjaman`, `created_at`, `updated_at`) VALUES
(7, '2023-06-05 15:02:00', 114, 2, 6000, '12', 80000, 72000, 8000, 'Selesai', '2023-06-05 08:02:50', '2023-06-05 12:00:02'),
(8, '2023-06-05 15:04:00', 115, 2, 6000, '12', 100000, 72000, 28000, 'Disewa', '2023-06-05 08:04:22', '2023-06-05 08:04:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT 'default.svg',
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_wa` varchar(15) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `fullname`, `user_image`, `jenis_kelamin`, `alamat`, `no_wa`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'workputranugraha803@gmail.com', 'Admin Amacoo', 'default.svg', 'Pria', 'PalangkaRayaa', '0821345678900', 'adminAmaco', '$2y$10$PHvhTC.Ny0iYwdptW/CRn.LEjyErTbZhjzIO.TtSD911M53RulXS6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-06-03 05:17:19', '2023-06-06 02:11:49', NULL),
(3, 'simpandrive803@gmail.com', NULL, 'default.svg', NULL, NULL, NULL, 'userAmaco', '$2y$10$iQ2DnX2CeTMLHx9zFTQ8je5zAC/lVkhyn9rtt0Uzxee.TQ3fGUpSW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-06-05 06:46:51', '2023-06-05 06:46:51', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `playstation`
--
ALTER TABLE `playstation`
  ADD PRIMARY KEY (`id_ps`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no_transaksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT for table `playstation`
--
ALTER TABLE `playstation`
  MODIFY `id_ps` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `no_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
