-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2015 at 11:44 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `xhesishopinventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `customerID` int(11) NOT NULL AUTO_INCREMENT,
  `customerName` varchar(25) DEFAULT NULL,
  `customerAddress` varchar(50) DEFAULT NULL,
  `customerCity` varchar(25) DEFAULT NULL,
  `customerState` varchar(25) DEFAULT NULL,
  `customerEmail` varchar(50) DEFAULT NULL,
  `customerPhone` varchar(70) DEFAULT NULL,
  `customerGender` varchar(25) NOT NULL,
  PRIMARY KEY (`customerID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerID`, `customerName`, `customerAddress`, `customerCity`, `customerState`, `customerEmail`, `customerPhone`, `customerGender`) VALUES
(2, 'xhesi', 'rr dibres', 'tirana', 'al', 'xhesi@yahoo.com', '654654654', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE IF NOT EXISTS `employers` (
  `employerID` int(11) NOT NULL AUTO_INCREMENT,
  `employerName` varchar(25) DEFAULT NULL,
  `employerGender` varchar(25) NOT NULL,
  `employerAddress` varchar(50) DEFAULT NULL,
  `employerCity` varchar(25) DEFAULT NULL,
  `employerState` varchar(25) DEFAULT NULL,
  `employerEmail` varchar(50) DEFAULT NULL,
  `employerPhone` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`employerID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`employerID`, `employerName`, `employerGender`, `employerAddress`, `employerCity`, `employerState`, `employerEmail`, `employerPhone`) VALUES
(1, 'xhesi3', 'Female', ' sss', 'tirana', 'al', 'xhesi@yahoo.com', '6654564');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `productID` int(7) NOT NULL AUTO_INCREMENT,
  `productName` varchar(30) DEFAULT NULL,
  `productCategory` varchar(30) DEFAULT NULL,
  `productDescription` varchar(100) DEFAULT NULL,
  `productAmount` int(15) DEFAULT NULL,
  `productCost` int(15) DEFAULT NULL,
  `productTotalCost` int(50) DEFAULT NULL,
  `productRegistrationDate` date DEFAULT NULL,
  PRIMARY KEY (`productID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `productName`, `productCategory`, `productDescription`, `productAmount`, `productCost`, `productTotalCost`, `productRegistrationDate`) VALUES
(1, 'soap', 'Bath & Body', 'soap with peach', 30, 50, 1500, '2015-02-16'),
(2, 'cream strawberry1', 'Bath & Body', ' ', 50, 50, 2500, '2015-02-16'),
(11, 'ss', 'Bath & Body', 'ss', 55, 55, 3025, '2015-02-16');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE IF NOT EXISTS `suppliers` (
  `supplierID` int(11) NOT NULL AUTO_INCREMENT,
  `supplierName` varchar(25) DEFAULT NULL,
  `supplierGender` varchar(25) NOT NULL,
  `supplierAddress` varchar(50) DEFAULT NULL,
  `supplierCity` varchar(25) DEFAULT NULL,
  `supplierState` varchar(25) DEFAULT NULL,
  `supplierEmail` varchar(50) DEFAULT NULL,
  `supplierPhone` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`supplierID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplierID`, `supplierName`, `supplierGender`, `supplierAddress`, `supplierCity`, `supplierState`, `supplierEmail`, `supplierPhone`) VALUES
(1, 'aaa', 'Male', ' aaa', 'klkj', 'kjj', 'jkj', ''),
(5, 'ss', 'Male', 'kjkjk', 'l', 'lj', 'jlj', 'ljljlj');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`) VALUES
(1, 's', 's', 's');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
