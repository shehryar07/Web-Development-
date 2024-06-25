-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2022 at 03:59 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsum_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_form`
--

CREATE TABLE `cart_form` (
  `cart_Form_id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` int(30) NOT NULL,
  `Color` varchar(30) NOT NULL,
  `Model` varchar(30) NOT NULL,
  `Numebrs` int(30) NOT NULL,
  `Adress_1` varchar(50) NOT NULL,
  `City` text NOT NULL,
  `Region` varchar(30) NOT NULL,
  `Postal` int(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `Date/Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `car_cattegories`
--

CREATE TABLE `car_cattegories` (
  `Car_Cattegories_id` int(255) NOT NULL,
  `Honda` varchar(30) NOT NULL,
  `Suzuki` varchar(30) NOT NULL,
  `BMD` varchar(30) NOT NULL,
  `Royal_Rolls` varchar(30) NOT NULL,
  `Ferrari` varchar(30) NOT NULL,
  `RWD` text NOT NULL,
  `mercedes` varchar(30) NOT NULL,
  `kia` varchar(20) NOT NULL,
  `MG` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_cattegories`
--

INSERT INTO `car_cattegories` (`Car_Cattegories_id`, `Honda`, `Suzuki`, `BMD`, `Royal_Rolls`, `Ferrari`, `RWD`, `mercedes`, `kia`, `MG`) VALUES
(2, 'Honda', 'Suzuki', 'BMD', 'Royal Rolls', 'Ferrari', 'RWD', 'Mercedes-Benz', 'Kia ', 'MG');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `Contact_Form_id` int(255) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Subject` varchar(30) NOT NULL,
  `Massage` varchar(255) NOT NULL,
  `Date/time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer_login_form`
--

CREATE TABLE `customer_login_form` (
  `Customer_login_form_id` int(255) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email_Adress` varchar(30) NOT NULL,
  `Date/Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `popular_vehicles`
--

CREATE TABLE `popular_vehicles` (
  `Popular_Vehicles_id` int(11) NOT NULL,
  `Ferrari` varchar(11) NOT NULL,
  `BMW` varchar(11) NOT NULL,
  `Prado` varchar(11) NOT NULL,
  `Tesla` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `popular_vehicles`
--

INSERT INTO `popular_vehicles` (`Popular_Vehicles_id`, `Ferrari`, `BMW`, `Prado`, `Tesla`) VALUES
(1, 'Ferrari', 'BMW', 'Prado', 'Tesla');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `Services_id` int(255) NOT NULL,
  `Car_Selling` varchar(30) NOT NULL,
  `Parts_Repair` varchar(30) NOT NULL,
  `Car_Insurance` varchar(30) NOT NULL,
  `Battery_Replacement` varchar(30) NOT NULL,
  `Oil_Change` varchar(30) NOT NULL,
  `Support` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`Services_id`, `Car_Selling`, `Parts_Repair`, `Car_Insurance`, `Battery_Replacement`, `Oil_Change`, `Support`) VALUES
(1, 'Car Selling', 'Parts Repair', 'Car Insurance', 'Battery Replacement', 'Oil Change', '24/7 Support');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `Subscribers_id` int(11) NOT NULL,
  `Email` varchar(11) NOT NULL,
  `Date_Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_login_form`
--

CREATE TABLE `user_login_form` (
  `User_login_form_id` int(255) NOT NULL,
  `name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `Date/time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_form`
--
ALTER TABLE `cart_form`
  ADD PRIMARY KEY (`cart_Form_id`);

--
-- Indexes for table `car_cattegories`
--
ALTER TABLE `car_cattegories`
  ADD PRIMARY KEY (`Car_Cattegories_id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`Contact_Form_id`);

--
-- Indexes for table `customer_login_form`
--
ALTER TABLE `customer_login_form`
  ADD PRIMARY KEY (`Customer_login_form_id`);

--
-- Indexes for table `popular_vehicles`
--
ALTER TABLE `popular_vehicles`
  ADD PRIMARY KEY (`Popular_Vehicles_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`Services_id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`Subscribers_id`);

--
-- Indexes for table `user_login_form`
--
ALTER TABLE `user_login_form`
  ADD PRIMARY KEY (`User_login_form_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_form`
--
ALTER TABLE `cart_form`
  MODIFY `cart_Form_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `car_cattegories`
--
ALTER TABLE `car_cattegories`
  MODIFY `Car_Cattegories_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `Contact_Form_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_login_form`
--
ALTER TABLE `customer_login_form`
  MODIFY `Customer_login_form_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `popular_vehicles`
--
ALTER TABLE `popular_vehicles`
  MODIFY `Popular_Vehicles_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `Services_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `Subscribers_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_login_form`
--
ALTER TABLE `user_login_form`
  MODIFY `User_login_form_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
