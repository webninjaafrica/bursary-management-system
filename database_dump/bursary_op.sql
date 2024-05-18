-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2024 at 07:16 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bursary_op`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(350) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(230) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `username`, `password`) VALUES
(1, 'MP', 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `bursary`
--

CREATE TABLE `bursary` (
  `bursary_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(23) NOT NULL,
  `address` varchar(350) NOT NULL,
  `file_attachment` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `admission_no` varchar(255) NOT NULL,
  `ward` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `term` varchar(255) NOT NULL,
  `disability` varchar(255) NOT NULL,
  `orphaned` varchar(255) NOT NULL,
  `reason` varchar(1200) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_of_appication` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `amount_awarded` int(11) DEFAULT NULL,
  `application_status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bursary`
--

INSERT INTO `bursary` (`bursary_id`, `name`, `phone`, `gender`, `address`, `file_attachment`, `photo`, `school`, `admission_no`, `ward`, `year`, `term`, `disability`, `orphaned`, `reason`, `username`, `password`, `date_of_appication`, `amount_awarded`, `application_status`) VALUES
(2, 'Kelvin Magochi', '0111808341', 'Male', 'Nairobi', 'uploads/fotor-ai-2024051817371.jpg', 'uploads/fotor-ai-20240518173428.jpg', 'ST Thomas Catholic Academy', '1234', 'Starehe', '2024/2025', '1', 'No', 'No', 'Unable to pay', '0111808341', '1234', '2024-05-17 21:00:00', 40000, 'Awarded');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `page_id` int(11) NOT NULL,
  `title` varchar(456) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`page_id`, `title`, `content`, `date`) VALUES
(1, 'how to apply', ' To apply for a bursary, simply click on the \'Apply Now\' button above. You will be redirected to a secure online application portal where you will need to create an account and fill out the application form. Please ensure that you have all required documents and information ready, including your academic records, identification documents, and proof of financial need. Once you have completed the application form, you will be required to submit it online. After submitting your application, you will receive an email confirmation from our team. If your application is selected, you will be contacted by our team to discuss further details. Good luck with your application!', '0000-00-00 00:00:00'),
(2, 'about', ' The online bursary application website is a user-friendly platform that enables students to apply for financial aid and scholarships from the comfort of their own homes. The website features a simple and intuitive interface, with clear and concise instructions guiding applicants through the application process. Users can easily create an account, upload required documents, and submit their applications, all within a secure and reliable environment. The website also provides access to a comprehensive database of available bursaries and scholarships, allowing students to search and filter opportunities by criteria such as degree level, field of study, and location.', '0000-00-00 00:00:00'),
(3, 'terms and conditions', ' Terms and Conditions\r\n\r\nBy accessing and using this website (the \"Website\"), you agree to be bound by these terms and conditions (\"Terms and Conditions\") as well as our Privacy Policy, which is incorporated herein by reference. The Website is owned and operated by [Name of Organization], a [type of organization] (the \"Organization\"). The purpose of this Website is to provide a platform for individuals to apply for bursaries and other forms of financial assistance (the \"Bursary\") offered by the Organization. By accessing and using this Website, you acknowledge that you have read, understood, and agreed to be bound by these Terms and Conditions, including but not limited to the following: You are at least 18 years old and have the capacity to enter into a binding agreement; You are the sole owner of the information you provide on the Website, and such information is accurate and complete; You will not use the Website for any illegal or unauthorized purposes; You will not attempt to hack or compromise the security of the Website; You will not use the Website for any commercial or promotional purposes without the prior written consent of the Organization; The Organization reserves the right to modify or discontinue the Website at any time, without notice; The Organization reserves the right to terminate your access to the Website at any time, without notice; Any dispute arising out of or related to these Terms and Conditions shall be resolved through [method of dispute resolution]; These Terms and Conditions shall be governed by and construed in accordance with [applicable law]. By submitting your application, you acknowledge that you have read, understood, and agreed to be bound by these Terms and Conditions.', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bursary`
--
ALTER TABLE `bursary`
  ADD PRIMARY KEY (`bursary_id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`page_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bursary`
--
ALTER TABLE `bursary`
  MODIFY `bursary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
