-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 10:57 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reo`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `member_last` varchar(15) NOT NULL,
  `member_first` varchar(15) NOT NULL,
  `member_status` varchar(10) NOT NULL,
  `member_contact` varchar(30) NOT NULL,
  `member_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `member_last`, `member_first`, `member_status`, `member_contact`, `member_address`) VALUES
(3, 'Han', 'Ethan', 'active', '0210222333', '255 Queens St\r\nAuckland CBD\r\n1010');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(50) NOT NULL,
  `subcat_name` varchar(30) NOT NULL,
  `menu_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `subcat_name`, `menu_price`) VALUES
(5, 'Pancake', 'Breakfast', '25.00'),
(6, 'Chicken and peas', 'Lunch', '75.00'),
(7, 'Whole roasted sirloin', 'Dinner', '100.00'),
(11, 'BBQ Bacon', 'Breakfast', '25.00'),
(12, 'Gourmet Old English Beef Sausages', 'Breakfast', '25.00'),
(13, 'Scrambled and fried eggs', 'Breakfast', '25.00'),
(14, 'Grilled basil tomatoes', 'Breakfast', '25.00'),
(15, 'Fresh bap buns and sliced bread', 'Breakfast', '25.00'),
(16, 'Smoked Salmon and Chive sandwich', 'Lunch', '75.00'),
(17, 'Rare beef and smoked tomato sandwich', 'Lunch', '75.00'),
(18, 'Quinoa, pumpkin, grilled red onion, slow roasted t', 'Lunch', '75.00'),
(19, 'Beetroot, goat cheese, candied walnuts, rocket sal', 'Lunch', '75.00'),
(20, 'Crab and avocado sandwich', 'Lunch', '75.00'),
(21, 'Rolled pork belly with salsa verde', 'Dinner', '100.00'),
(22, 'Baked fish, fennel, mustard and caper', 'Dinner', '100.00'),
(23, 'Smoked salmon, coriander, baby cos, mango dressing', 'Dinner', '100.00'),
(24, 'White chocolate, strawberry trifle', 'Dinner', '100.00'),
(25, 'Espresso cheesecake', 'Dinner', '100.00');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `fullname`, `email`, `subject`, `message`, `date`) VALUES
(1, 'Abhishek Roy', 'roy.abhishek@hotmail.com', 'Christmas Party', 'Hi I would like to organize a Christmas Party.', '2020-10-03 12:51:41');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `payment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `amount`, `rid`, `payment_date`) VALUES
(3, 250, 63, '2020-10-10');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `rid` int(11) NOT NULL,
  `r_date` date NOT NULL,
  `r_time` time NOT NULL,
  `r_last` varchar(30) NOT NULL,
  `r_first` varchar(30) NOT NULL,
  `r_contact` varchar(30) NOT NULL,
  `r_email` varchar(50) NOT NULL,
  `r_address` varchar(100) NOT NULL,
  `r_ocassion` varchar(50) NOT NULL,
  `r_theme` varchar(30) NOT NULL,
  `payable` decimal(10,2) NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  `r_status` varchar(10) NOT NULL,
  `date_reserved` date NOT NULL,
  `r_code` varchar(10) NOT NULL,
  `nop` int(11) NOT NULL,
  `subcat_name` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `mop` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`rid`, `r_date`, `r_time`, `r_last`, `r_first`, `r_contact`, `r_email`, `r_address`, `r_ocassion`, `r_theme`, `payable`, `balance`, `r_status`, `date_reserved`, `r_code`, `nop`, `subcat_name`, `price`, `mop`) VALUES
(61, '2020-09-25', '12:00:00', 'lee', 'Jamie', '0210600600', 'j.lee@hotmail.com', 'Auckland', 'Birthday', 'Birthday', '1000.00', '1000.00', 'pending', '2020-09-23', 'cPoDN36Xe6', 10, 'Lunch', '100.00', 'Bank Transfer'),
(62, '0000-00-00', '00:00:00', 'Sharma', 'Pooja', '0210500504', 'psharma@gmail.com', 'Auckland', '', '', '0.00', '0.00', '', '2020-09-24', '8RPMerO3KV', 0, '', '0.00', ''),
(63, '2020-10-21', '07:40:00', 'Sharma', 'Pooja', '0210600600', 'psharma@gmail.com', 'Auckland', 'Christmas Party', 'Birthday', '250.00', '0.00', 'Approved', '2020-10-10', 'mMhKwQ5EGd', 10, 'Breakfast', '25.00', 'Cash'),
(64, '2020-11-02', '22:40:00', 'Han', 'Ethan', '0210222333', 'ethan.han@gmail.com', 'Auckland', 'Cocktail Party', 'Halloween', '1000.00', '1000.00', 'pending', '2020-10-10', '5mJioSOlNB', 10, 'Dinner', '100.00', 'Cash'),
(65, '0000-00-00', '00:00:00', 'Roy', 'Abhishek', '0210500504', 'roy.abhishek@hotmail.com', '255 Queens St\r\nAuckland CBD\r\n1010', '', '', '0.00', '0.00', '', '2020-10-10', 'tOUsbJtUdE', 0, '', '0.00', ''),
(66, '2020-10-14', '12:00:00', 'Roy', 'Abhishek', '021012011201', 'roy.abhishek@hotmail.com', '255 Queens St\r\nAuckland CBD\r\n1010', 'Birthday', 'Halloween', '5000.00', '5000.00', 'pending', '2020-10-13', 'cbarDeJGR4', 50, 'Dinner', '100.00', 'Bank Transfer');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcat_id` int(11) NOT NULL,
  `subcat_name` varchar(30) NOT NULL,
  `sub_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcat_id`, `subcat_name`, `sub_price`) VALUES
(11, 'Breakfast', '25.00'),
(12, 'Lunch', '75.00'),
(13, 'Dinner', '100.00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `full_name`, `username`, `password`, `status`) VALUES
(2, 'Abhishek Roy', 'admin', '12345', 'active'),
(3, 'Sam Willis', 'sam', '12345', 'inactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcat_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
