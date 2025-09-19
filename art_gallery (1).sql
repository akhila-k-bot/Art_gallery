-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2024 at 10:10 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `art_gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(50) NOT NULL,
  `a_phone` bigint(10) NOT NULL,
  `a_email` varchar(50) NOT NULL,
  `a_address` varchar(50) NOT NULL,
  `a_password` varchar(50) NOT NULL,
  `a_image` varchar(250) NOT NULL,
  `a_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_phone`, `a_email`, `a_address`, `a_password`, `a_image`, `a_date`) VALUES
(1, 'ADMIN', 7559802508, 'admin@gmail.com', 'Mangalore', 'admin', '', '2023-06-22');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `cat_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_date`) VALUES
(1, 'Acrylic Paintings', '2023-06-28'),
(2, 'Mandala', '2023-06-28'),
(3, 'Landscape', '2023-06-28'),
(4, 'Pencil Drawing', '2023-06-28'),
(5, 'Illustration Work', '2023-07-01'),
(8, 'bottle painting', '2024-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `ch_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `ch_fname` varchar(50) NOT NULL,
  `ch_lname` varchar(50) NOT NULL,
  `ch_add` varchar(50) NOT NULL,
  `ch_email` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `ch_state` varchar(50) NOT NULL,
  `ch_pincode` int(20) NOT NULL,
  `ch_status` varchar(110) NOT NULL,
  `ch_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`ch_id`, `p_id`, `c_id`, `ch_fname`, `ch_lname`, `ch_add`, `ch_email`, `country`, `ch_state`, `ch_pincode`, `ch_status`, `ch_date`) VALUES
(12, 99, 10, 'Akhila', 'rao', 'kasaragod', 'akhila@gmail.com', 'India', 'KA', 671321, 'accept', '2024-05-24'),
(17, 0, 10, 'sumitra', 'p', 'bandiyod', 'sumitra10@gmail.com', 'India', 'KL', 123455, '', '2024-05-30'),
(18, 0, 11, 'sumitra', 'p', 'mangalore', 'sumitra@gmail.com', 'India', 'KA', 345678, '', '2024-05-30'),
(19, 0, 12, 'pushparaj', 's', 'chennai', 'pushparajsalian@gmail.com', 'India', 'TN', 123987, '', '2024-05-30'),
(20, 0, 12, 'pushparaj', 'p', 'kumble', 'pushparajsalian@gmail.com', 'India', 'KA', 734565, '', '2024-05-30'),
(21, 0, 12, 'pushparaj', 'p', 'kasaragod', 'pushparajsalian@gmail.com', 'India', 'LA', 123455, '', '2024-05-30'),
(22, 0, 13, 'ankith', 's', 'mangalore', 'ankithsalian@gmail.com', 'India', 'KA', 671321, '', '2024-05-30'),
(23, 0, 10, 'Akhila', 'rao', 'kasaragod', 'akhila@gmail.com', 'Armenia', 'HR', 671321, '', '2024-05-30'),
(24, 0, 10, 'Akhila', 'rao', 'kasaragod', 'akhila@gmail.com', 'Armenia', 'HR', 671321, '', '2024-05-30'),
(25, 100, 10, 'Akhila', 'rao', 'mangalore', 'akhila@gmail.com', 'Antartica', 'DL', 671321, 'reject', '2024-05-30'),
(26, 100, 10, 'Akhila', 'rao', 'mangalore', 'akhila@gmail.com', 'Antartica', 'DL', 671321, 'accept', '2024-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_email` varchar(100) NOT NULL,
  `c_address` varchar(100) NOT NULL,
  `c_password` varchar(50) NOT NULL,
  `c_image` varchar(250) NOT NULL,
  `c_date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_name`, `c_email`, `c_address`, `c_password`, `c_image`, `c_date`) VALUES
(1, 'shobhitha', 'shobhithavijaya08@gmail.com', 'kumbla', 'poojary', 'uploader/1688186456626.jpg', '2023-07-01'),
(2, 'jahnavi', 'jaanu@gmail.com', 'mangalore', 'jaanu', '', '2023-07-01'),
(3, 'Suraksha', 'suraksha@gmail.com', 'kumbla', 'suru', '', '2023-07-01'),
(4, 'kawshitha', 'kaushiganiga08@gmail.com', 'mangalore', 'salian', 'uploader/1688186456626.jpg', '2023-07-06'),
(5, 'kavya', 'key@gmail.com', 'zzzzzzzzzz', 'Aa!1Aa!1', '', '2024-05-20'),
(6, 'sowmya', 'sowmya@gmail.com', 'mangalore', 'sowmya', '', '2024-05-20'),
(7, 'akhila kunder', 'akhilasalian10@gmail.com', 'mangalore', '12345', '', '2024-05-23'),
(9, 'arya', 'arya@gmail.com', 'mangalore', 'Arya_223', '', '2024-05-24'),
(10, 'akhila', 'akhila@gmail.com', 'mangalore', 'Akhila_123', '', '2024-05-24'),
(11, 'sumitra', 'sumitra@gmail.com', 'mangalore', 'Sumitra_123', '', '2024-05-30'),
(12, 'pushparaj', 'pushparajsalian@gmail.com', 'chennai', 'Pushparaj_123', '', '2024-05-30'),
(13, 'ankith', 'ankithsalian@gmail.com', 'mangalore', 'Ankith_123', '', '2024-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `f_msg` longtext NOT NULL,
  `f_date` date NOT NULL DEFAULT current_timestamp(),
  `f_name` varchar(200) NOT NULL,
  `f_email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `f_msg`, `f_date`, `f_name`, `f_email`) VALUES
(7, 'Helloo Adminn', '2024-05-20', 'sowmya', 'sowmya@gmail.com'),
(8, 'nice product', '2024-05-23', 'akhila', 'akhilasalian10@gmail.com'),
(13, 'good customer care', '2024-05-25', 'akhila', 'akhilasalian10@gmail.c'),
(14, 'awesome painting', '2024-05-30', 'sumitra', 'sumitra@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(250) NOT NULL,
  `p_image` varchar(250) NOT NULL,
  `p_price` decimal(50,2) NOT NULL,
  `p_description` longtext NOT NULL,
  `s_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `p_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_image`, `p_price`, `p_description`, `s_id`, `cat_id`, `p_status`) VALUES
(56, 'warli bottle art', 'uploader/bottleart4.jpg', 1500.00, '', 0, 8, ''),
(57, 'floral bottle painting', 'uploader/bottlepainting.jpg', 1500.00, '', 0, 8, ''),
(58, ' warli bottle painting', 'uploader/btleart3.jpg', 2500.00, '', 0, 8, ''),
(59, 'bottle painting', 'uploader/bt.jpg', 500.00, '', 0, 8, ''),
(60, 'bottle painting', 'uploader/th (11).jpg', 200.00, '', 0, 8, ''),
(61, 'portrait', 'uploader/pencilart.jpg', 1500.00, '', 0, 4, ''),
(62, 'adiyogi', 'uploader/adiyogi (2).jpg', 200.00, '', 0, 4, ''),
(63, 'shivaji', 'uploader/shivaji.jpg', 500.00, '', 0, 4, ''),
(64, 'thrishul', 'uploader/trushul.jpg', 200.00, '', 0, 4, ''),
(66, 'bottle painting', 'uploader/th (2).jpg', 300.00, '', 0, 8, ''),
(67, 'bottle painting', 'uploader/th (4).jpg', 1500.00, '', 0, 0, ''),
(69, 'bottle painting', 'uploader/th (5).jpg', 450.00, '', 0, 8, ''),
(70, 'bottle painting', 'uploader/th (9).jpg', 1500.00, '', 0, 8, ''),
(73, 'warli mandala', 'uploader/warli mandala.jpg', 1500.00, '', 0, 2, ''),
(74, 'mandala', 'uploader/md12.jpg', 1500.00, '', 0, 2, ''),
(75, 'mandala', 'uploader/warli.jpg', 300.00, '', 0, 2, ''),
(76, 'mandala', 'uploader/md11.jpg', 500.00, '', 0, 2, ''),
(77, ' adiyogi mandala', 'uploader/md10.jpg', 300.00, '', 0, 2, ''),
(78, 'mandala', 'uploader/md9.jpg', 450.00, '', 0, 2, ''),
(79, 'mandala', 'uploader/md8.jpg', 200.00, '', 0, 2, ''),
(80, 'mandala', 'uploader/md7.jpg', 1500.00, '', 0, 2, ''),
(81, 'mandala', 'uploader/md6.jpg', 1500.00, '', 0, 2, ''),
(82, 'mandala', 'uploader/md5.jpg', 1500.00, '', 0, 2, ''),
(83, 'mandala', 'uploader/md4.jpg', 1500.00, '', 0, 2, ''),
(84, 'mandala', 'uploader/md3.jpg', 1500.00, '', 0, 2, ''),
(85, 'mandala', 'uploader/md2.jpg', 500.00, '', 0, 2, ''),
(86, 'mandala', 'uploader/mandala2.jpg', 500.00, '', 0, 2, ''),
(87, 'mandala', 'uploader/mandala1.jpg', 1500.00, '', 0, 2, ''),
(99, 'bottle painting', 'uploader/photo_2024-05-21_16-17-14.jpg', 1500.00, '', 0, 8, ''),
(100, 'boho art', 'uploader/bohoart.jpg', 1500.00, 'boho art on areca leaf', 0, 1, ''),
(101, 'adiyogi', 'uploader/adiyogi (2).jpg', 500.00, '', 0, 1, ''),
(102, 'boho art', 'uploader/bohoart2.jpg', 1500.00, '', 0, 1, ''),
(103, 'kathakali', 'uploader/katakali.jpg', 1500.00, '', 0, 1, ''),
(104, 'deer', 'uploader/nature.jpg', 500.00, '', 0, 1, ''),
(105, 'krishna paiting', 'uploader/krishna.jpg', 450.00, '', 0, 1, ''),
(106, 'sunrise', 'uploader/sunset.jpg', 450.00, '', 0, 1, ''),
(107, 'radhe', 'uploader/radha.jpg', 200.00, '', 0, 1, ''),
(108, 'cd painting', 'uploader/cd.jpg', 450.00, '', 0, 1, ''),
(109, 'beach', 'uploader/sea.jpg', 450.00, '', 0, 1, ''),
(114, 'girl', 'uploader/GIRL PNG.jpg', 450.00, '', 0, 5, ''),
(120, 'illustration', 'uploader/6.jpg', 450.00, '', 0, 5, ''),
(123, 'illustration', 'uploader/12.jpg', 450.00, '', 0, 5, ''),
(124, 'landscape', 'uploader/1.jpg', 450.00, '', 0, 3, ''),
(125, 'nature', 'uploader/2.jpg', 1500.00, '', 0, 3, ''),
(126, 'flower', 'uploader/3.jpg', 450.00, '', 0, 3, ''),
(127, 'nature', 'uploader/4.jpg', 450.00, '', 0, 3, ''),
(129, 'window', 'uploader/10.jpg', 1500.00, '', 0, 3, ''),
(130, 'nature', 'uploader/18.jpg', 450.00, '', 0, 3, ''),
(131, 'river view', 'uploader/20.jpg', 1500.00, '', 0, 3, ''),
(132, 'roadway', 'uploader/5.jpg', 450.00, '', 0, 3, ''),
(133, 'flower', 'uploader/19.jpg', 450.00, '', 0, 0, ''),
(134, 'woman with red lipstick', 'uploader/8.jpg', 1500.00, '', 0, 5, ''),
(135, 'woman with sunglasses', 'uploader/9.jpg', 450.00, '', 0, 5, ''),
(136, 'illustration', 'uploader/14.jpg', 450.00, '', 0, 5, ''),
(138, 'landscape', 'uploader/19.jpg', 200.00, '', 0, 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`ch_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `ch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
