-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2017 at 02:21 PM
-- Server version: 5.7.14-log
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ideas`
--

-- --------------------------------------------------------

--
-- Table structure for table `labels`
--

CREATE TABLE `labels` (
  `labelId` int(11) NOT NULL,
  `label` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labels`
--

INSERT INTO `labels` (`labelId`, `label`) VALUES
(1, 'Draft'),
(2, 'Inbox'),
(3, 'Sent');

-- --------------------------------------------------------

--
-- Table structure for table `map_users_messages`
--

CREATE TABLE `map_users_messages` (
  `messageId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `labelId` int(11) NOT NULL,
  `isRead` bit(1) NOT NULL,
  `isStarred` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `map_users_messages`
--

INSERT INTO `map_users_messages` (`messageId`, `userId`, `labelId`, `isRead`, `isStarred`) VALUES
(71, 2, 3, b'1', b'0'),
(72, 2, 2, b'1', b'0'),
(73, 5, 3, b'1', b'1'),
(74, 5, 2, b'1', b'0'),
(76, 4, 2, b'0', b'0'),
(77, 27, 3, b'1', b'0'),
(79, 27, 3, b'1', b'0'),
(82, 4, 2, b'0', b'0'),
(83, 4, 3, b'1', b'0'),
(84, 4, 3, b'1', b'1'),
(85, 4, 2, b'0', b'0'),
(86, 2, 3, b'1', b'0'),
(87, 2, 2, b'0', b'0'),
(88, 5, 3, b'1', b'1'),
(89, 5, 2, b'0', b'0'),
(90, 4, 2, b'0', b'0'),
(91, 3, 3, b'0', b'0'),
(92, 3, 2, b'0', b'0'),
(93, 5, 3, b'1', b'0'),
(94, 5, 2, b'0', b'0'),
(95, 4, 3, b'1', b'1'),
(96, 2, 2, b'1', b'0'),
(97, 2, 2, b'1', b'0'),
(100, 5, 2, b'1', b'0'),
(101, 1, 3, b'1', b'0'),
(103, 2, 2, b'0', b'0'),
(104, 2, 2, b'0', b'0'),
(105, 2, 2, b'0', b'0'),
(106, 2, 3, b'1', b'0'),
(107, 2, 3, b'0', b'0'),
(108, 3, 3, b'0', b'0'),
(109, 3, 2, b'0', b'0'),
(110, 5, 3, b'0', b'0'),
(111, 5, 2, b'0', b'0'),
(112, 3, 3, b'1', b'0'),
(113, 3, 2, b'0', b'0'),
(114, 3, 3, b'1', b'0'),
(115, 4, 3, b'1', b'0'),
(117, 4, 3, b'1', b'0'),
(118, 4, 2, b'1', b'0'),
(119, 3, 3, b'1', b'0'),
(120, 3, 2, b'1', b'0'),
(121, 4, 3, b'1', b'0'),
(122, 4, 2, b'1', b'0'),
(126, 2, 3, b'1', b'0'),
(127, 2, 2, b'0', b'0'),
(128, 2, 3, b'1', b'0'),
(129, 2, 2, b'1', b'0'),
(130, 3, 3, b'1', b'0'),
(131, 3, 2, b'1', b'0'),
(132, 3, 3, b'1', b'0'),
(133, 3, 3, b'1', b'0'),
(134, 5, 3, b'1', b'0'),
(135, 5, 2, b'1', b'0'),
(136, 5, 1, b'1', b'0'),
(137, 22, 2, b'0', b'0'),
(140, 5, 3, b'1', b'0'),
(141, 5, 1, b'1', b'0'),
(152, 5, 1, b'0', b'0'),
(153, 5, 3, b'1', b'0'),
(154, 5, 3, b'1', b'0'),
(155, 5, 1, b'0', b'0'),
(156, 5, 1, b'1', b'0'),
(160, 5, 3, b'0', b'1'),
(161, 5, 2, b'0', b'0'),
(162, 1, 3, b'1', b'0'),
(163, 5, 2, b'1', b'0'),
(164, 3, 2, b'1', b'0'),
(165, 8, 1, b'0', b'0'),
(166, 3, 3, b'1', b'0'),
(167, 39, 3, b'1', b'0'),
(170, 48, 3, b'1', b'0'),
(171, 48, 2, b'0', b'0'),
(172, 36, 2, b'0', b'0'),
(173, 48, 2, b'1', b'0'),
(174, 39, 2, b'1', b'0'),
(175, 38, 3, b'0', b'0'),
(176, 38, 2, b'0', b'0'),
(177, 1, 2, b'1', b'0'),
(178, 5, 2, b'1', b'0'),
(179, 3, 2, b'1', b'0'),
(180, 39, 3, b'0', b'0'),
(181, 39, 2, b'0', b'0'),
(182, 36, 1, b'0', b'0'),
(183, 33, 3, b'1', b'0'),
(184, 33, 2, b'0', b'0'),
(185, 3, 2, b'1', b'0'),
(186, 3, 2, b'1', b'0'),
(187, 34, 1, b'0', b'0'),
(189, 36, 2, b'1', b'0'),
(190, 35, 1, b'0', b'0'),
(191, 48, 3, b'0', b'1'),
(192, 48, 2, b'0', b'0'),
(193, 33, 3, b'0', b'0'),
(194, 33, 2, b'0', b'0'),
(195, 48, 1, b'1', b'0'),
(196, 5, 2, b'1', b'0'),
(197, 48, 3, b'0', b'0'),
(198, 48, 2, b'0', b'0'),
(199, 48, 1, b'0', b'0'),
(200, 40, 1, b'1', b'0'),
(201, 48, 3, b'1', b'0'),
(202, 32, 3, b'0', b'0'),
(203, 32, 2, b'0', b'0'),
(204, 48, 2, b'1', b'0'),
(205, 39, 1, b'0', b'0'),
(207, 39, 2, b'0', b'0'),
(208, 38, 1, b'0', b'0'),
(209, 39, 1, b'1', b'0'),
(210, 36, 1, b'1', b'0'),
(212, 5, 1, b'1', b'0'),
(213, 5, 1, b'1', b'0'),
(214, 5, 2, b'0', b'0'),
(217, 36, 3, b'1', b'0'),
(218, 36, 2, b'0', b'0'),
(219, 5, 3, b'1', b'0'),
(220, 5, 2, b'0', b'0'),
(221, 5, 3, b'1', b'0'),
(222, 5, 2, b'0', b'0'),
(223, 5, 1, b'1', b'0'),
(224, 5, 3, b'1', b'0'),
(225, 5, 3, b'1', b'0'),
(226, 5, 2, b'0', b'0'),
(227, 5, 3, b'1', b'0'),
(228, 5, 2, b'0', b'0'),
(229, 5, 3, b'1', b'0'),
(230, 5, 2, b'0', b'0'),
(231, 5, 3, b'1', b'0'),
(232, 5, 2, b'0', b'0'),
(233, 5, 3, b'1', b'0'),
(234, 5, 2, b'0', b'0'),
(235, 5, 2, b'0', b'0'),
(236, 48, 3, b'1', b'0'),
(237, 48, 2, b'0', b'0'),
(238, 106, 3, b'1', b'0'),
(239, 106, 2, b'1', b'0'),
(240, 105, 3, b'1', b'0'),
(241, 105, 2, b'0', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `messageId` int(11) NOT NULL,
  `subject` varchar(10000) NOT NULL,
  `body` varchar(10000) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `authorId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`messageId`, `subject`, `body`, `date`, `authorId`) VALUES
(71, 'tet-sent', 'test-sent', '2017-07-27 10:09:56', 27),
(72, 'tet-sent', 'test-sent', '2017-07-27 10:09:56', 27),
(73, 'test-sent2', 'test-sent2', '2017-07-27 10:10:23', 27),
(74, 'test-sent2', 'test-sent2', '2017-07-27 10:10:23', 27),
(75, '555', '555', '2017-07-27 10:15:09', 27),
(76, '555', '555', '2017-07-27 10:15:09', 27),
(77, 'Self', '7777', '2017-07-27 10:15:51', 27),
(78, 'Self', '7777', '2017-07-27 10:15:51', 27),
(79, 'Hope that you are doing great. We will meet when I come there', 'Merge attaches the Entity to the Entity Manager as Managed. The reason it was needed in OP\'s case is that the entity was not managed (detached). This occurred because it was instantiated and was never persisted/retrieved because it had already existed (according to the OP). Thus requiring an update rather than persistence. So in the OP the Entity Manager attempted to persist the new object, was unable too since it was already there, and since the new object wasn\'t managed, an update didn\'t occur either.', '2017-07-27 10:24:49', 27),
(80, 'Hope that you are doing great. We will meet when I come there', 'Merge attaches the Entity to the Entity Manager as Managed. The reason it was needed in OP\'s case is that the entity was not managed (detached). This occurred because it was instantiated and was never persisted/retrieved because it had already existed (according to the OP). Thus requiring an update rather than persistence. So in the OP the Entity Manager attempted to persist the new object, was unable too since it was already there, and since the new object wasn\'t managed, an update didn\'t occur either.', '2017-07-27 10:24:49', 27),
(81, 'asasass gfg  gf ', ' ddf     ', '2017-07-27 10:26:06', 27),
(82, 'asasass gfg  gf ', ' ddf     ', '2017-07-27 10:26:06', 27),
(83, 'aas', 'sassa', '2017-07-28 11:36:22', 27),
(84, 'qqq', 'wwww', '2017-07-28 07:18:55', 27),
(85, 'qqq', 'wwww', '2017-07-28 07:18:56', 27),
(86, '44', '444', '2017-07-28 07:35:42', 27),
(87, '44', '444', '2017-07-28 07:35:42', 27),
(88, 'Enthada', 'Ammalukkutteee', '2017-07-28 10:02:57', 27),
(89, 'Enthada', 'Ammalukkutteee', '2017-07-28 10:02:57', 27),
(90, 'aas', 'sassa', '2017-07-28 11:36:22', 27),
(91, 'aa', 'sss', '2017-07-28 11:37:14', 27),
(92, 'aa', 'sss', '2017-07-28 11:37:14', 27),
(93, 'Enthada-Kutty1', 'Ammalu-Kutty1', '2017-07-31 06:26:04', 27),
(94, 'Enthada-Kutty1', 'Ammalu-Kutty1', '2017-07-31 06:26:04', 27),
(95, 'sd1', 'dssd123', '2017-07-31 09:28:33', 27),
(96, '9990', '9990', '2017-07-31 11:53:25', 27),
(97, '66667', '66667', '2017-07-31 12:24:50', 27),
(98, '787878', '787878', '2017-07-31 12:32:39', 27),
(99, '7878', '7878', '2017-07-31 12:33:18', 27),
(100, '88990', '88990', '2017-07-31 12:34:13', 27),
(101, '00001', '00001', '2017-08-01 07:47:43', 27),
(102, 'S2222', 'S2222', '2017-08-01 07:48:46', 27),
(103, 'S555', 'S555', '2017-08-01 07:50:45', 27),
(104, 'S777', 'S777', '2017-08-01 07:51:47', 27),
(105, 'D444', 'D444', '2017-08-01 07:53:36', 27),
(106, 'T55567', 'T55567', '2017-08-01 08:00:14', 27),
(107, 'R444', 'R444', '2017-08-01 08:00:39', 27),
(108, 'Y777', 'Y777', '2017-08-01 08:02:36', 27),
(109, 'Y777', 'Y777', '2017-08-01 08:02:42', 27),
(110, 'A222', 'A222', '2017-08-01 08:08:24', 27),
(111, 'A222', 'A222', '2017-08-01 08:08:26', 27),
(112, '8', '8', '2017-08-01 10:15:42', 27),
(113, '8', '8', '2017-08-01 10:15:42', 27),
(114, '234', '234', '2017-08-01 10:16:18', 27),
(115, 'rrr', 'rrr', '2017-08-01 10:37:01', 27),
(116, 'rrr', 'rrr', '2017-08-01 10:37:07', 27),
(117, '0008', '0008', '2017-08-01 10:49:00', 27),
(118, '0008', '0008', '2017-08-01 10:49:00', 27),
(119, '3232', '3232', '2017-08-01 10:58:41', 27),
(120, '3232', '3232', '2017-08-01 10:58:41', 27),
(121, '60', '60', '2017-08-01 11:39:00', 27),
(122, '60', '60', '2017-08-01 11:39:00', 27),
(123, 'S444', 'S444', '2017-08-01 15:51:18', 27),
(124, 'S555', 'S555', '2017-08-01 15:55:41', 27),
(125, 'N555', 'N555', '2017-08-01 15:57:11', 27),
(126, 'N555', 'N555', '2017-08-01 15:58:52', 27),
(127, 'N555', 'N555', '2017-08-01 15:58:52', 27),
(128, 'N666', 'N666', '2017-08-01 15:59:21', 27),
(129, 'N666', 'N666', '2017-08-01 15:59:21', 27),
(130, 'SR8889', 'SR8889', '2017-08-01 18:08:12', 27),
(131, 'SR8889', 'SR8889', '2017-08-01 18:08:12', 27),
(132, '65', 'hahahaaaa', '2017-08-01 19:05:09', 27),
(133, 'uuu1', 'uuu1aa555r', '2017-08-12 12:24:12', 27),
(134, '<script>Test</script>', '<script>Test</script>', '2017-08-02 07:16:12', 27),
(135, '<script>Test</script>', '<script>Test</script>', '2017-08-02 07:16:12', 27),
(136, '[removed]999Sub[removed]', 'hahahatttt', '2017-08-02 07:42:43', 27),
(137, 'aa', 'aaa', '2017-08-03 02:45:33', 27),
(138, 'Transaction-Subject', 'Transaction-Message', '2017-08-10 10:05:04', 27),
(140, 'TRN-SUB', 'TRN-MSG', '2017-08-10 10:21:06', 27),
(141, 'M8S', 'M8Mqq', '2017-08-10 12:24:38', 27),
(152, 'New Compose123', 'New Message123', '2017-08-10 14:51:05', 27),
(153, 'New Compose1234', 'New Message1234', '2017-08-14 05:47:51', 27),
(154, 'New Compose1234ss', 'New Message1234ss', '2017-08-10 15:04:46', 27),
(155, 'New Compose123', 'New Message123', '2017-08-10 15:05:17', 27),
(156, 'New ComposeYYY', 'New MessageYYY', '2017-08-12 12:24:53', 27),
(157, 'New ComposeYYY', 'New MessageYYY', '2017-08-10 15:11:20', 27),
(160, 'New ComposeAAA', 'New MessageAAA', '2017-08-10 15:16:50', 27),
(161, 'New ComposeAAA', 'New MessageAAA', '2017-08-10 15:16:50', 27),
(162, '212', '212', '2017-08-11 11:09:03', 27),
(163, 'New Compose1234ss', 'New Message1234ss', '2017-08-10 15:04:46', 27),
(164, '65', 'hahahaaaa', '2017-08-01 19:05:09', 27),
(165, '555', '555', '2017-08-12 06:14:14', 27),
(166, 'T1', 'T1', '2017-08-13 06:19:44', 27),
(167, 'Hel-Sub', 'Hel-Msg', '2017-08-12 06:56:13', 27),
(170, '555', '555', '2017-08-12 10:01:13', 27),
(171, '666-Send', '666-Send', '2017-08-12 10:03:03', 27),
(172, 'ppp', 'ppp', '2017-08-12 10:08:35', 27),
(173, '555', '555', '2017-08-12 10:01:13', 27),
(174, 'Hel-Sub', 'Hel-Msg', '2017-08-12 06:56:13', 27),
(175, 'Mine', 'Mine', '2017-08-12 12:17:04', 27),
(176, 'Mine', 'Mine', '2017-08-12 12:17:04', 27),
(177, '212', '212', '2017-08-11 11:09:03', 27),
(178, 'TRN-SUB', 'TRN-MSG', '2017-08-10 10:21:06', 27),
(179, 'uuu1', 'uuu1aa555r', '2017-08-12 12:24:12', 27),
(180, '555', '555', '2017-08-12 12:24:35', 27),
(181, '555', '555', '2017-08-12 12:24:35', 27),
(182, 'dd', 'kk', '2017-08-13 06:19:03', 27),
(183, 'pp', 'pp', '2017-08-13 06:19:14', 27),
(184, 'pp', 'pp', '2017-08-13 06:19:14', 27),
(185, 'T1', 'T1', '2017-08-13 06:19:34', 27),
(186, 'T1', 'T1', '2017-08-13 06:19:44', 27),
(187, 'q', 'q', '2017-08-14 03:25:40', 27),
(188, '113', '113', '2017-08-14 03:26:43', 27),
(189, '113', '113', '2017-08-14 03:26:43', 27),
(190, '666', '666', '2017-08-14 03:32:10', 99),
(191, 'Hello', 'Hello', '2017-08-14 03:32:26', 99),
(192, 'Hello', 'Hello', '2017-08-14 03:32:26', 99),
(193, '1111', '11111', '2017-08-14 03:32:48', 99),
(194, '1111', '11111', '2017-08-14 03:32:48', 99),
(195, '6565656', '56565655', '2017-08-14 05:47:46', 27),
(196, 'New Compose1234', 'New Message1234', '2017-08-14 05:47:51', 27),
(197, '33', '33', '2017-08-14 05:47:59', 27),
(198, '33', '33', '2017-08-14 05:47:59', 27),
(199, 'aaaa', 'aaaaa', '2017-08-14 05:52:47', 27),
(200, 'aaa', 'aaa', '2017-08-14 06:37:45', 27),
(201, 'Compose', 'Compose-Messagess', '2017-08-14 06:38:03', 27),
(202, 'Subject-Sent', 'Message-Sent', '2017-08-14 06:37:34', 27),
(203, 'Subject-Sent', 'Message-Sent', '2017-08-14 06:37:34', 27),
(204, 'Compose', 'Compose-Messagess', '2017-08-14 06:38:03', 27),
(205, 'dssd', 'ss', '2017-08-14 06:38:42', 27),
(206, '666', '6666', '2017-08-14 06:39:34', 27),
(207, '666', '6666', '2017-08-14 06:39:34', 27),
(208, 'aa', 'aaa', '2017-08-14 06:41:49', 27),
(209, '22222', '2222', '2017-08-14 06:48:59', 27),
(210, '6666', '6666', '2017-08-14 06:49:43', 27),
(212, 'New Compose123', 'New Message123', '2017-08-15 06:29:06', 27),
(213, 'New Compose8888', 'New Message8888', '2017-08-15 06:30:06', 27),
(214, 'New Compose90', 'New Message90', '2017-08-15 06:38:12', 27),
(217, 'qqqq', 'qqqq', '2017-08-15 06:50:36', 27),
(218, 'qqqq', 'qqqq', '2017-08-15 06:50:36', 27),
(219, 'New Compose90', 'New Message90', '2017-08-15 06:51:15', 27),
(220, 'New Compose90', 'New Message90', '2017-08-15 06:51:15', 27),
(221, 'New Compose91', 'New Message91', '2017-08-15 06:54:50', 27),
(222, 'New Compose91', 'New Message91', '2017-08-15 06:54:50', 27),
(223, 'New Compose911', 'New Message911', '2017-08-15 06:57:41', 27),
(224, 'New Compose9123', 'New Compose9123', '2017-08-15 07:09:47', 27),
(225, 'New Compose913', 'New Message913', '2017-08-15 06:59:54', 27),
(226, 'New Compose913', 'New Message913', '2017-08-15 06:59:54', 27),
(227, 'New Compose914', 'New Message914', '2017-08-15 07:00:24', 27),
(228, 'New Compose914', 'New Message914', '2017-08-15 07:00:24', 27),
(229, 'New Compose914', 'New Message914', '2017-08-15 07:00:30', 27),
(230, 'New Compose914', 'New Message914', '2017-08-15 07:00:30', 27),
(231, 'New Compose915', 'New Message915', '2017-08-15 07:01:24', 27),
(232, 'New Compose915', 'New Message915', '2017-08-15 07:01:24', 27),
(233, 'New Compose916', 'New Message916', '2017-08-15 07:02:19', 27),
(234, 'New Compose916', 'New Message916', '2017-08-15 07:02:19', 27),
(235, 'New Compose9123', 'New Compose9123', '2017-08-15 07:09:47', 27),
(236, 'First', 'First', '2017-08-15 08:04:35', 106),
(237, 'First', 'First', '2017-08-15 08:04:35', 106),
(238, 'ccc', 'ccc', '2017-08-15 08:04:49', 106),
(239, 'ccc', 'ccc', '2017-08-15 08:04:49', 106),
(240, 'aaa111', 'aaaa111', '2017-08-15 08:05:38', 106),
(241, 'aaa111', 'aaaa111', '2017-08-15 08:05:38', 106);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `employeeId` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `password` char(96) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `employeeId`, `email`, `firstname`, `lastname`, `password`) VALUES
(1, '', 'sreejith@orchidapps.com', 'Sreejith', 'C J', '1234'),
(2, '', 'suma@orchidapps.com', 'Suma', 'N', '123'),
(3, '', 'sreeji.cj@gmail.com', 'Sreejith', 'C J', 'pwd1234'),
(4, '', 'sreeji.cj@gmail.com', 'Sreejith', 'C J', 'pwd1234'),
(5, '', 'ima@orchidapps.com', 'Ima', 'Ammalu', '12345'),
(6, '', 'renjith@orchidapps.com', 'Renjith', 'C', '1234'),
(7, '', 'sreejith123@orchidapps.com', 'Sreejith', 'CJ', '123'),
(8, '', 'sums@orchidapps.com', 'Sums', 'N', '1234'),
(9, '', 'sreejith12@orchidapps.com', 'Sreejith', 'CJ12', '123'),
(10, '', 'sreejith6@orchidapps.com', 'Sreejith', 'CJ6', '123'),
(11, '', 'sreejith666@orchidapps.com', 'Sree', 'Jith', '123'),
(12, '', 'sreejith5@orchidapps.com', 'Sree', 'Jith5', '1234'),
(13, '', 'aaa@orchidapps.com', 'aaa', 'aaa', '123'),
(14, '', 'sreejith777@orchidapps.com', 'Sree', '123', '1234'),
(15, '', 'sreejith155@orchidapps.com', 'Sreejith', 'C', '1234'),
(16, '', 'sreejith01@orchidapps.com', 'Sreee', '1234', '1234'),
(17, '', 'sreejith001@orchidapps.com', 'Sree', 'Jith', '1234'),
(18, '', 'sreeji@orchidapps.com', 'Sreeji', 'th', '1234'),
(19, '', 'suma.n@orchidapps.com', 'Suma', 'N', '1234'),
(20, '', 'ram.kumar@orchidapps.com', 'Ram', 'Kumar', '12345'),
(21, '', 'supriya@orchidapps.com', 'Supriya', 'N', '1234'),
(22, '', 'meera@orchidapps.com', 'Meera', 'P', '123'),
(23, '', 'sreejith0011@orchidapps.com', 'Sree', '1222', '123'),
(24, '', 'sreejith00121@orchidapps.com', 'Sreejith1', '666', '1234'),
(25, '', 'sumangala@orchidapps.com', 'Sumangala', 'N', '12345'),
(26, '', 'rishan@orchidapps.com', 'Rishan', 'P', '$2y$10$sUqacfLVMmOn0.BtX8nZDOOoHc2L4Bxod/F5L0.LEOmWDnMGrPoyG'),
(27, '', 's@orchid.com', 'Sandhya', 'S', '$2y$10$jPeybJwhazkrfYLDsNwpuu5jjIV8SGo4U0iIbFnYABVIEqsI7oEWG'),
(28, '', 'k@orchidapps.com', 'k', 'p', '$2y$10$w9E8D96LoJivhoWLEpoSke1LwimcmnKYHt9CG3LPvLd5nlm3f8n3m'),
(29, '', 'vish@orchidapps.com', 'Vish', 'Navi', '$2y$10$ejCUlZQGeGUldRZR/oJhEuQHOHCUknPQVeA8KddLu49roTkuWGHra'),
(30, '00001', 'paru@orchidapps.com', 'Paru', 'Kutty', '$2y$10$V8JQ4T1FWzNQ2ReTTNi1B.AfjwutB2lpofC7FQMM9W7t2HKAk5y/6'),
(31, '5555', 'anu@orchid.com', 'Anu', 'M', '$2y$10$Uuzkp4ohP.kS4JIDcPR2kOOlLA7TKCjxEbpKhsb8CkFsoSkfcDSpq'),
(32, '222', '222@orchid.com', '222', '222', '$2y$10$EmHchTAc0Ft3l1SPOSlvauqhxqTAQrhFVTmdn/Tp03lppm./eNY7W'),
(33, '1212', '12@orchid.com', '1212@orchid.com', '1212', '$2y$10$IrBhIJKQld3scszPgzxmKOGCHWYelZ7bY1FumyX7I6Yvapw2e.W.i'),
(34, '666', '6@orchid.com', '6', '6', '$2y$10$YmIfUl3.RsBMv.uDwdcsIe338vn9/xLBrrnyqty/vcjs9zWdldrdq'),
(35, '77', '77@orchid.com', '77', '77', '$2y$10$/Lsj4dCLs8Xv7Dv044ohue6z6XZFGzmTwAd09WQSdsG9WaczmKsO2'),
(36, '1', '1@orchid.com', '1', '1', '$2y$10$/8fiPIa1l8KX3bPSKAqHdutX42mpkuBMySecuQA3EmDMxUsg05gvK'),
(37, '88', '88@orchid.com', '88', '88', '$2y$10$rdn9CyyUYdPsK7bHKpNiUOO7x2j.0jp.kmhJkW3lM9waxiHDnFMNy'),
(38, '444', '44@orchid.com', '4444', '4444', '$2y$10$t2g7LWsKHQl21dL87Tn5z.Nm0Eg6Yclpie/9osLrCrx0dODagPSPG'),
(39, '11', '11@orchid.com', '11', '11', '$2y$10$2zfKIomEIHbHR4osIhW/nedAH6UgMCvDwnrVR4Od9CFGO8XX3gYZC'),
(40, '33', '33@orchid.com', '33', '33', '$2y$10$pW/1IKgKT5lC.tj.PVETf.pOxzRwKGPYAr2miF4viQC40il3QsxF6'),
(41, '77', '777@orchid.com', '77', '77', '$2y$10$jxLpByVj2qYKulq3QdpFlOn4z.uW9OjCrfT/DSsFoHtN/jgZzu.YW'),
(42, '99', '99@orchid.com', '99', '99', '$2y$10$xUTDeFCSuqD1O44MIw76E.cxhYI5nHodEXJSvrw7pr3FfR6zBBx/i'),
(43, '990', '990@orchid.com', '990', '990', '$2y$10$lM6.PxNjTYhBAblgeo.8VuwT7yyIzTQXCWKtJfvj2MldZx6AAsjR6'),
(44, '43', '43@orchid.com', '43', '43', '$2y$10$zNek2gwxuJ9x1jFqFC6amuokZGstc8Ds/XF1S/HwpbKjhlnBOOV8u'),
(45, '86', '86@orchid.com', '86', '86', '$2y$10$4IWI8vla8SfjgF//M2BQ/.98laLRL4IOQ8FIuxyraq4/kGpnnOVN.'),
(46, '91', '91@orchid.com', '91', '91', '$2y$10$zWnQDwT4AuaQsEE98jZdzu3KvzWWkqP9al1nPnF5aKqZjJWqfJwnm'),
(47, '36', '36@orchid.com', '36', '36', '$2y$10$kJ3iA5lMObs6nXqB35yXvOB2CyzNAbviGuHXFipzzsWpyqGAJXDka'),
(48, '005', '005@orchid.com', '005', '005', '$2y$10$W5wQ/0nWGNMniY8Bi8UTSevQJElkQLtrkWm06webvdJIcN6Dkx5Qy'),
(49, '909', '909@orchid.com', '909', '909', '$2y$10$oiJtocnkZfuiqchjv0oFRey.Sq.NuPZTPexj5xADc1OuFlDFAeEIC'),
(50, '707', '707@orchid.com', '707', '707', '$2y$10$c287D/eq1Y/2POsBEt7wO.wDJHrXmBoTK7.uYpISx7Z1E8h/QwGeS'),
(51, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$agJLCqLs/iAaykJEyBFo0OP7Xi9Q6UA7VHhUHGLIBXuzCA2uTN6eu'),
(52, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$n4AD7Cu3X8iAmPCmLMMqUOwi06gK0U.pkq1y3BQ5JjByCiCsMzU0a'),
(53, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$E6/wpNmwrPnAX5ulnIvRzeehOHdE1P2zyh79bg022lp6rkj/zXGjS'),
(54, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$ieLb4Yqj59weG/973btpd.0jVZvSP6CL7ArI1ckPSAy66NfVUV9Di'),
(55, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$cCENDLobU9XZAixgpR77Guf09VAostsZOIAB5y7ZnVeJv13ZLDWT6'),
(56, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$oJcT3v9s9txf.zSQeQVD/.ScPOKW3ZZBGUUdEJPe8zUICqiLVik5O'),
(57, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$DUA8oimyohkXmoLqXXEoj.Lcqz.ZXAW.KHT8tvzEEvP7X7BokrdZm'),
(58, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$O0fD8tL0qEjNapezxtuFx./kD7ju4nuiWOxb4Fs4fxXWKty1QMK0e'),
(59, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$rs339W9rLe0RRn8z9.BczOwrwHNFI6e0wTQaQqtPlEjWVXrC1R1Ei'),
(60, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$QRMzjgDaYy1dhXdb1PV8oObPtBhpQRX8eHAM1J808c8w9aFikFqB.'),
(61, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$UCUOvN45VBvSbjHjtqEwjexho6hYCcukjpB4D8uxS4qlmlUojkKjK'),
(62, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$9qZ9pxw4fvCZSMh9WDE8zuvSFc2CiSrCwzD83zqWtTG.lgOqJondK'),
(63, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$MjSdl8tvVTGYO5mdPTAGmu3mGvBdM2Qc9YckNOf/w48dLuguuqRP6'),
(64, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$UBS0M8fBQ.TEZtPS6VpS5eBR1n5aGUqDhFrqWevlpdQNeNIs3Drg6'),
(65, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$rSxIhiKRozii.JRP2od6yeVnUh3LOoHkuWWK4pVHkYM9fgSGLX.Zi'),
(66, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$DdeB4.k6ixoE23VlsBLwyeSnyvOsesRYw9FygAtoBvcDAPHgTD36C'),
(67, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$yYN9NOzp1KdyP77624CWBeAhOPyKUmEQKTVF44.kVMRDvR5iJROOi'),
(68, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$J2fpsI7RLaorcRJ3gFZm2e/l3pyyvJ1skM7GB.hFIgJq2FW/XdYku'),
(69, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$hbxxC4Y7gIAimdlbFx5oK.OnOkcoODY1U3O9GiVgH3jdfvdglxCn.'),
(70, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$T.SndBbjGFaRkCLB2mgyxe1/ChKlnMRP0WLhpbPkf50GPpsLdGJBC'),
(71, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$n3xgFDiMxJ.JaK6UL5tQEeZqJSvG27nUn5eECyGN3rP2rmwdVbuz6'),
(72, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$NNYplHzt8GM.9298pPHqtOEoiywNhBx13xofwTLAghHTRHh8z8Imy'),
(73, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$F1THo.6NPKdDew89aZDHRuC0nQob4b5nYA68ECEcDOcXKbjQW8n7O'),
(74, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$7uDGR7wzhivggXBxAygJR.ii6BTtEYp1XbsAGF6fFR5KI1ww5Nj0K'),
(75, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$aStccQOICgL2Gj4OwLj4oOpuqM8TqiaD0HYpFzzEWG4QwxKPe2qem'),
(76, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$DtkA090SRLuvJ2WsgpCWxOmFL/gwt0.sc9UfIWovqS8zpsJC3w1nq'),
(77, '66', '66@orchid.com', '66', '66', '$2y$10$viUCbSFyCbSz6LWXUBUoKOMqdUJQtiiBL6pAdE1Bp4gBH.TOcYTP2'),
(78, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$2W/tijlRbVtizyYODG841eSFsqeTohoVdy6upilR95bGl7YQ3aCIq'),
(79, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$PCRlt2tLQkpKVmT8r2TdYOQyIMhnyiacZ2PjJJbOk/OUogTns4hS2'),
(80, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$PN29UZTa57OwZZVeWCZbqOn7UhHv8PPhWhlMR09s2HaYn2L7kySpS'),
(81, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$wnqJlpPcJ5k33jv4ukxpmeUbieJiV/pBJXSHCDL3h.LmAZaNoHP.O'),
(82, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$ywPS/.ScwiJiSiNR4ecjaeC1yBbwu.3AG67UACBIf7tDh16dAolWe'),
(83, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$3VaxgwLDAXFC6XlU2T82a.Lj1xrqtwwkI2styw4Vbb3KBuLRrmrsO'),
(84, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$tvgqzMehTmdDGgF6PciWZe7YOp1dLVPvPbGfooVJC92ZrV8zGwbki'),
(85, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$9lzFVDvxxf1910g.RbejB.S2ogvJj5S1IJ1ihW1HcYDNXHO4zrY4q'),
(86, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$JC.EVcCocPf5bfTT1uzD1uF6bMXStk5BWqcTRJbfIfb7rLCwdbmBq'),
(87, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$UhT7xfb0c5tFLqrK6x1lEe2OU5hv9HTDXgVARCqdiL2GASEXUah7q'),
(88, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$QWA/9PuBa7K69.oAs49vwOzJjeeSnGGHvjwc//ZaJ9viMYtXxa/Iu'),
(89, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$nvSiVY3flG6kAoJ2wIjODeycOsTdo6UMGkm/GUc5BXGinIHDrp/qu'),
(90, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$CTEZuqradeWd39mZs5.pku5vK297p5Llrq4luHS8j0opo3q7QTC26'),
(91, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$G6/K0bWidZRD9BmN.A0p8OoHkuYTENAJzahI4QMMHTdwwZ593H/ae'),
(92, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$c9p/yjXE0ZGbCWe9vHo.AO9kpY88vALD2EedO0iPlpxkrMtSaYu0y'),
(93, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$XsRE33LwZWpSE97LaJh1POdV1Fbm/fmmlzwHr7GH4cgeyfOl9jAgy'),
(94, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$/Gh/a46bLtN/yXnibA2M5.9OcJWoC8eayXZCK2/SwG3526i29Yive'),
(95, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$p1er51NG9nEvyaJZlOoR/ex7vN1I7DuGFiCR2sLNFTby.2Fmc4mAO'),
(96, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$6R25Iyk.LXFN3XeC7jvmCuUim2JcsmzkuhMBszkheLRU3e.ATJ7LC'),
(97, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$8v0w/aHnVncszwZVgAwMfei4Z.ZydOT/teyzr361VkH4jxbGCd2cG'),
(98, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$iSf4gfmC5wmF2XWitTSfYunRgf6wD/2lbxA7obSm2lz8FvYF.LazC'),
(99, '707', '7078@orchid.com', '707', '707', '$2y$10$RsbColyDIusnWkmmBmjVMuhmTjiG/QQc3H8veq8eZ5AhbN8.YzIl2'),
(100, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$/RXWorbenW.FaGHPgyNtXO3wfTBD6iBsco1yR61PwKQRq3xKgRTCC'),
(101, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$sQPZc/SeP6QqVKMYJi2IUe.PVocoGC3MCDcn5QNGUOQfdLfjCdYsa'),
(102, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$GHK1o3yKKATHHyL9StcpcOzrR63zIZBl9DjqcY6f2TcvpueZ.ZUPW'),
(103, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$dpXpLDWVU/Twwy3XGrPUFuhdNkSBnDyHQb3DB3pEUMSgo7YvtESxm'),
(104, '9999', '9999@orchid.com', '9999', '9999', '$2y$10$h3OB/AV0kF7RN8drSPIEp.VLxFMd6msxWvGdp6DmsFe7xoVHYeLLq'),
(105, '1000', '1000@orchid.com', '1000', '1000', '$2y$10$Bmq5vOFprR3y8AS1O3VRjuWPz6gj/.iA.jl7wkkJrQ3SR/IqJHxvW'),
(106, '009', '009@orchid.com', '009', '009', '$2y$10$mvnJfQI3XztTZdFn5l6PtOAkLlKHrNYFrjZVc1nG02Vp0De6hOi5e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `labels`
--
ALTER TABLE `labels`
  ADD PRIMARY KEY (`labelId`);

--
-- Indexes for table `map_users_messages`
--
ALTER TABLE `map_users_messages`
  ADD PRIMARY KEY (`messageId`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messageId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD KEY `userId` (`userId`),
  ADD KEY `userId_2` (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `labels`
--
ALTER TABLE `labels`
  MODIFY `labelId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
