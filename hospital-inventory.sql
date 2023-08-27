-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2023 at 01:33 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital-inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors-name`
--

CREATE TABLE `doctors-name` (
  `did` bigint(255) NOT NULL,
  `dname` varchar(255) NOT NULL,
  `dfathername` varchar(255) NOT NULL,
  `dmobilenumber` varchar(255) NOT NULL,
  `daddress` varchar(255) NOT NULL,
  `dspecilization` varchar(255) NOT NULL,
  `demail` varchar(255) NOT NULL,
  `dpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors-name`
--

INSERT INTO `doctors-name` (`did`, `dname`, `dfathername`, `dmobilenumber`, `daddress`, `dspecilization`, `demail`, `dpassword`) VALUES
(2, 'Dr.Zain(Orthopedics)', 'Shoukat Abbas', '3893840398', 'People\'s coloney #2 Faisalabad', 'Bone specialists ', 'zain@gmail.com', 'admin'),
(3, 'Dr.Sharahaz(Neurologists)', 'usman ali', '283928329', 'People\'s coloney #2 Faisalabad', 'Brain specialists', 'shahraz@gmail.com', 'admin'),
(4, 'Dr.Abdullaha(Dermatologists)', 'Shahbaz', '393493', 'People\'s coloney #2 Faisalabad', 'Skin Specilists ', 'abdullaha@gmail.com', 'admin'),
(5, 'Dr.Zulqarnain(pulmonologist)\r\n', 'Huzaifa', '300348390', 'People\'s coloney\' #2 Faisalabd', 'Lung specialists', 'zulqarnain@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `patient_record`
--

CREATE TABLE `patient_record` (
  `pid` bigint(255) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `pfather_name` varchar(255) NOT NULL,
  `pemail` varchar(255) NOT NULL,
  `pmobile_number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `cdoctorname` varchar(255) NOT NULL,
  `pdate` varchar(255) NOT NULL,
  `ptime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_record`
--

INSERT INTO `patient_record` (`pid`, `patient_name`, `pfather_name`, `pemail`, `pmobile_number`, `password`, `cpassword`, `cdoctorname`, `pdate`, `ptime`) VALUES
(12, 'Khalid', 'Ali', 'usman@gmail.com', '93939843', 'usman', 'usman', '3', '2023-01-02', '08:49'),
(19, 'Zain', 'Shoukat', 'Zain@gmail.com', '3334343', 'sss', 'sss', '3', '2023-01-10', '13:20'),
(23, 'Noah Frazier', 'Ross French', 'wyfoqal@mailinator.com', '+1 (578) 272-4578', 'ad', 'ad', '3', '2013-04-21', '14:10'),
(24, '', '', 'ch@gmail.com', '', 'ad', '', '5', '', ''),
(26, 'muneeb', 'usman', 'muneeb@gmail.com', '0330934', 'admin', 'admin', '3', '2023-01-17', '12:58'),
(27, 'vali', 'vali', 'a@gmail.com', '03032124907', 'Commando@426', '', '', '', ''),
(28, 'Hamza', 'Husnain', 'hamza@gmail.com', '03013454678', 'Hamza@123', 'Hamza@123', 'Choose a doctor', '2023-01-19', '14:13'),
(29, 'zain', 'Husnan', 'haamaza@gmail.com', '03032123903', 'Shahid@123', 'Shahid@123', '2', '2023-01-26', '14:19'),
(30, 'Zain2', 'Shoukat', 'shahid@gmail.com', '0301345467', 'Shahid123', 'Shahid123', '2', '2023-01-23', '02:37'),
(31, 'Justina', '', '', '', '', 'Hatim@123', '4', '2023-03-05', '20:45'),
(32, '3', '', 'ms1429699@gmail.com', '03032123405', 'Shahid@2124', 'Shahid@2124', '5', '2023-02-08', '12:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors-name`
--
ALTER TABLE `doctors-name`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `patient_record`
--
ALTER TABLE `patient_record`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors-name`
--
ALTER TABLE `doctors-name`
  MODIFY `did` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patient_record`
--
ALTER TABLE `patient_record`
  MODIFY `pid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
