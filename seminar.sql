-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 10:33 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seminar`
--

-- --------------------------------------------------------

--
-- Table structure for table `sem`
--

CREATE TABLE `sem` (
  `sname` varchar(1000) NOT NULL,
  `det` varchar(1000) NOT NULL,
  `lin` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem`
--

INSERT INTO `sem` (`sname`, `det`, `lin`) VALUES
('arthitist', 'seminar coducted online on zoom time:31 may 2:00pm-4:00pm', 'https://clideo.com/compress-video'),
('medicare101', 'seminar coducted online on zoom time:31 may 2:00pm-4:00pm fees:200', 'https://www.google.com/search?q=how+to+delete+one+row+from+table+in+mysql+using+button&oq=&aqs=chrome.0.69i59i450l8.917958472j0j15&sourceid=chrome&ie=UTF-8');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
