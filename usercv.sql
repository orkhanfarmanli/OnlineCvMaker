-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2016 at 04:21 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usercv`
--

-- --------------------------------------------------------

--
-- Table structure for table `usercv`
--

CREATE TABLE `usercv` (
  `cv_id` int(11) NOT NULL,
  `cv_name` varchar(255) NOT NULL,
  `cv_job` varchar(255) NOT NULL,
  `cv_bday` date NOT NULL,
  `cv_about` text NOT NULL,
  `cv_phone` varchar(20) NOT NULL,
  `cv_email` varchar(255) NOT NULL,
  `cv_social` varchar(255) NOT NULL,
  `cv_web` varchar(255) NOT NULL,
  `cv_adress` varchar(255) NOT NULL,
  `cv_img` varchar(255) NOT NULL,
  `cv_awards` varchar(255) NOT NULL,
  `cv_edu1` varchar(255) NOT NULL,
  `cv_edu2` varchar(255) NOT NULL,
  `cv_edu3` varchar(255) NOT NULL,
  `cv_edu_date1` date NOT NULL,
  `cv_edu_date2` date NOT NULL,
  `cv_edu_date3` date NOT NULL,
  `cv_edu_status1` varchar(255) NOT NULL,
  `cv_edu_status2` varchar(255) NOT NULL,
  `cv_edu_status3` varchar(255) NOT NULL,
  `cv_edu_about1` text NOT NULL,
  `cv_edu_about2` text NOT NULL,
  `cv_edu_about3` text NOT NULL,
  `cv_work1` varchar(255) NOT NULL,
  `cv_work2` varchar(255) NOT NULL,
  `cv_work3` varchar(255) NOT NULL,
  `cv_work4` varchar(255) NOT NULL,
  `cv_work_date1` date NOT NULL,
  `cv_work_date2` date NOT NULL,
  `cv_work_date3` date NOT NULL,
  `cv_work_date4` date NOT NULL,
  `cv_work_status1` varchar(255) NOT NULL,
  `cv_work_status2` varchar(255) NOT NULL,
  `cv_work_status3` varchar(255) NOT NULL,
  `cv_work_status4` varchar(255) NOT NULL,
  `cv_work_about1` text NOT NULL,
  `cv_work_about2` text NOT NULL,
  `cv_work_about3` text NOT NULL,
  `cv_work_about4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usercv`
--

INSERT INTO `usercv` (`cv_id`, `cv_name`, `cv_job`, `cv_bday`, `cv_about`, `cv_phone`, `cv_email`, `cv_social`, `cv_web`, `cv_adress`, `cv_img`, `cv_awards`, `cv_edu1`, `cv_edu2`, `cv_edu3`, `cv_edu_date1`, `cv_edu_date2`, `cv_edu_date3`, `cv_edu_status1`, `cv_edu_status2`, `cv_edu_status3`, `cv_edu_about1`, `cv_edu_about2`, `cv_edu_about3`, `cv_work1`, `cv_work2`, `cv_work3`, `cv_work4`, `cv_work_date1`, `cv_work_date2`, `cv_work_date3`, `cv_work_date4`, `cv_work_status1`, `cv_work_status2`, `cv_work_status3`, `cv_work_status4`, `cv_work_about1`, `cv_work_about2`, `cv_work_about3`, `cv_work_about4`) VALUES
(10, 'Vahab Valiyev', 'Junior Web Developer', '1996-03-11', 'Something interesting asdas etc.', '994504265511', 'valiyev.vahab@gmail.com', 'fb.com vahab.veliyev', 'www.qss.az', 'Baku, Mir Jalal 34', 'image/file2050.jpg', ' Hecbishey', 'FRITL', 'Araz Kurslari', 'Qafqaz University', '2013-05-31', '2012-05-31', '2018-05-31', 'School', 'Course', 'Bakalavr', 'Nothing about it', 'Estagfurullah', 'World Economy', 'Google ', 'Facebook', 'Twitter', 'Dropbox', '2016-03-02', '2016-03-01', '2016-03-04', '2016-03-03', ' Web Developer', 'Software developer', 'Web Developer', 'Software Developer', 'No information', 'No information', 'Developer ishte lan', 'Developer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usercv`
--
ALTER TABLE `usercv`
  ADD PRIMARY KEY (`cv_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usercv`
--
ALTER TABLE `usercv`
  MODIFY `cv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
