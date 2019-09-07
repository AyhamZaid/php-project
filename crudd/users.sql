-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07 سبتمبر 2019 الساعة 12:12
-- إصدار الخادم: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modo3`
--

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `Role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `password`, `created_at`, `Role`) VALUES
(5, 'AyhamZaid', 'amar.zaiserdd.az@gmail', 785878213, '$2y$10$mLok4k0.NNzpw7xFyVuHau9TZIiiNy7zhZhKdLL8LQPY0ZO1EGHZS', '2019-09-03 12:41:30', 'Admin'),
(6, 'Ammar', 'amar.amar.az@gmail.com', 777577577, '$2y$10$r8aw2zuLb/psAmS8DIIhEOlME3l9ziIa/1Qodl.HODBWcfYNryAge', '2019-09-03 12:41:59', ''),
(7, 'mohammad', 'ama.az@gmail.com', 797878787, '$2y$10$Z5boyQWRsO1JPVfI832JC.BVZPD23Nrbkhw7bD.DlFp2cWIh63L06', '2019-09-03 12:43:42', ''),
(8, 'ayhamddvdd', 'ayham.zaid.az@gmail.dffsf', 2147483647, '$2y$10$x2FXZifqYSf/sjG.xK5Zqu2CYKEuEP8wc0D9l4U8YI0YN9biyo1jy', '2019-09-03 12:52:09', ''),
(10, 'ali', 'ali.gmail@yohoo.com', 2147483647, '$2y$10$5kz3S8LrD.RTxGZmkQAhb.YtKkkFqEQA5Bhxi2y1irGN.Rdh2YvOW', '2019-09-03 14:54:38', ''),
(20, 'AMAL', 'ayham.za@gmail.com', 794455334, '$2y$10$qIpwSSVIT5ud94UOjvWixuxPS/M.xOn4LWbv.dpelR6j6bPYLmJe2', '2019-09-03 16:42:58', ''),
(30, 'beno12', 'beno.aszZZ@gmail.com', 2147483647, '$2y$10$4XPnJ7J1Fnvv3UpyEhPIgONm/B3atYGNMInjOLwCbua9UOAhnWc.2', '2019-09-03 17:13:15', ''),
(31, 'Hani', 'hani@gmail.com', 2147483647, '$2y$10$NyinaRF8Bu0eov20DZV8Z.sZh92vUapU7nz1J3gesxyMUdnPkXASi', '2019-09-03 17:14:53', ''),
(36, 'Admin123', 'ayham.zaid.az@dfgs', 20345310, '$2y$10$GXdvlEZGUbfDzpEaxsuBrOobi/gwhQ4FXfLHrdrWM.gKch4W8KRg.', '2019-09-03 22:43:28', ''),
(41, 'Ayham', 'ayham.zaid.az@gail.com', 785878231, '', '2019-09-03 23:31:15', ''),
(42, 'Ayhamerfhdgd', 'ayham.zaid.az@gmfgfgfail.dffsfs', 2147483647, '', '2019-09-03 23:31:34', ''),
(43, 'NewUser', 'ayham.zaid@gmail.com', 2147483647, '$2y$10$EBS5szb2T5iokoZwyE5ob.Qc3eBbXaXGB0BYiSvA0eQ6kpJgkUDbO', '2019-09-03 23:38:46', ''),
(44, 'old', 'ayham.zaid.az@gmail.com', 78543322, '', '2019-09-03 23:39:45', ''),
(45, 'new', 'ayham.az@gmail.com', 2147483647, '$2y$10$.yqDsE9MYp6pJPd3xlVbzu/NL0cHsvBuQxz0C.acUvy4A77R.idXO', '2019-09-03 23:43:32', ''),
(46, 'sgsgsdf', 'ayham.zaisdd.az@gmail.com', 2147483647, '', '2019-09-03 23:43:48', ''),
(49, 'Admin', 'fgzdgszdhzg@gdhd', 66634523, '$2y$10$LMGEI/ZmhU1IZhBExONjyOCQ.O1WO4bBRLpDNvxZpenIyVcgPQq2i', '2019-09-04 00:06:32', ''),
(52, 'Dark web', 'dark.web@gmail.com', 0, '$2y$10$FCmD54tDgjRxvzmvysFug.p89oEG20IQl5cs4BA1D5PbHVnIjeS1m', '2019-09-04 10:00:27', ''),
(53, 'Asem', 'asem@gmail.com', 2147483647, '', '2019-09-04 11:53:01', ''),
(54, 'Ahamd', 'ahamd@gmail.com', 2147483647, '$2y$10$DdxlUbORy2Kk28lK.gpes.JJPp9efSPgjTZ9cieXfEzGyhtug4sjK', '2019-09-04 16:58:54', ''),
(55, '', '', 0, '', '2019-09-05 00:06:07', ''),
(68, 'AWS', 'AWS@gmail.com', 2147483647, '$2y$10$.EnmpLHsSD0epVtUVw3S5.UA70apvZoPmnrHku0AoFYcaLlRf8gj.', '2019-09-05 00:12:02', ''),
(69, 'aaaa', 'a.az@gmail.com', 2147483647, '$2y$10$TnEJTlLbC5md3Ub.cbhSKeIuBfeu5RCZ.eEJ1BnnXqCo375DzHApG', '2019-09-05 00:51:00', ''),
(71, 'sfhrhgrs', 'a.advz@gmail.com', 2147483647, '$2y$10$Y6ENl4jGPSTpm0fuRjZ6Uus5/uY6YNVDCMMTHGI/KO81dM4anKFyu', '2019-09-05 00:56:23', ''),
(72, 'y5edhd', 'a.adrgdhvz@gmail.com', 2147483647, '$2y$10$U348fIZPH.5Nb/3RmAID0.crRCrpfWnJyVOWwn/yzzlQiOL7uHWHe', '2019-09-05 00:57:17', ''),
(73, 'gdnx', 'a.adrgdhdgdgdvz@gmail.com', 2147483647, '$2y$10$3SBtJ2ELFfZjqvpZp4L61.vQuXJs/CS8GIvD/1UzJb12KvCaXCXU2', '2019-09-05 00:58:05', ''),
(74, 'Admin2341', 'ayham.zdgdfaid.az@gmail.com', 2147483647, '$2y$10$OxY1b5vauHWMA07BdJCaYOWRnTw7Dzr/NTJNcfXERK5DfSzQi5qLG', '2019-09-06 12:58:13', ''),
(75, 'Admin12', 'Admin', 42523532, '$2y$10$VLcbDkCzTqWlIkZc4TmuP.Xp77lOrUimq821pu17mpJ5vm0paa5Xy', '2019-09-06 13:42:12', ''),
(76, 'Admin2', 'Admin@gmail.com', 1234565432, '$2y$10$vB/kBu7R3lQJmhyL9MSgz.PUQGUVlOs/ecXPhjhYV.mPj7vNjxZVm', '2019-09-06 13:49:29', ''),
(83, 'NEW Admin', 'Admin@srgsgsfgsg', 24143413, '', '2019-09-06 22:05:55', ''),
(86, 'AAaaa', 'Admin@gmail', 453543, '$2y$10$xjQih.O3tdKFNfbOmBie/u6sdlqAr06P80csvPbgsTDGuyUggr1OG', '2019-09-06 22:07:11', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
