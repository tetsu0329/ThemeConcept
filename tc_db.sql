-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2017 at 11:52 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouttable`
--

CREATE TABLE IF NOT EXISTS `abouttable` (
  `id` int(11) NOT NULL,
  `content` varchar(10000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abouttable`
--

INSERT INTO `abouttable` (`id`, `content`) VALUES
(1, '<p><br></p><p><span style="font-size: 18px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non mi vel quam dapibus elementum at sit amet libero. Quisque pretium lobortis augue interdum condimentum. Praesent ut feugiat odio. Morbi eleifend, magna sed fringilla mattis, ante orci fringilla lorem, id feugiat ex ipsum nec magna. Pellentesque cursus ultrices facilisis. Proin vitae felis mi. Quisque venenatis sit amet libero ac posuere. Etiam at dolor justo. Sed nec malesuada turpis. Nullam finibus vel orci sit amet egestas. Curabitur malesuada convallis eros quis pretium. In egestas neque vitae ipsum facilisis condimentum. Cras gravida felis a convallis cursus. Duis at lectus tincidunt mi tristique commodo ut quis justo. Nullam semper, metus bibendum accumsan fermentum, neque dui commodo metus, sed condimentum enim arcu quis dolor. Sed non diam ac enim cursus finibus. Aliquam scelerisque, leo nec malesuada vestibulum, justo tortor vulputate justo, rhoncus fringilla risus enim vehicula lorem. Fusce sed placerat nunc.</span></p><footer><span style="font-size: 14px;">From ThemeConcept</span></footer>');

-- --------------------------------------------------------

--
-- Table structure for table `contacttable`
--

CREATE TABLE IF NOT EXISTS `contacttable` (
  `id` int(11) NOT NULL,
  `facebook` varchar(1000) NOT NULL,
  `instagram` varchar(1000) NOT NULL,
  `pinterest` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `contactno` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacttable`
--

INSERT INTO `contacttable` (`id`, `facebook`, `instagram`, `pinterest`, `email`, `contactno`) VALUES
(1, 'http://www.facebook.com/themeconcepts', 'http://www.instagram.com', 'http://www.pinterest.com', 'qwertyuiop@gmail.com', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `producttable`
--

CREATE TABLE IF NOT EXISTS `producttable` (
  `productID` int(11) NOT NULL,
  `productCode` varchar(100) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `productDescription` varchar(1000) NOT NULL,
  `productCategory` varchar(100) NOT NULL,
  `productQuantity` varchar(100) NOT NULL,
  `productPrice` varchar(100) NOT NULL,
  `frontpic` varchar(1000) NOT NULL,
  `backpic` varchar(1000) NOT NULL,
  `sidepic` varchar(1000) NOT NULL,
  `frontpic_thumb` varchar(1000) NOT NULL,
  `sidepic_thumb` varchar(1000) NOT NULL,
  `backpic_thumb` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producttable`
--

INSERT INTO `producttable` (`productID`, `productCode`, `productName`, `productDescription`, `productCategory`, `productQuantity`, `productPrice`, `frontpic`, `backpic`, `sidepic`, `frontpic_thumb`, `sidepic_thumb`, `backpic_thumb`) VALUES
(1, 'PV-01', 'Blazers 1', 'black blazers and coats', 'Blazers', '3999', '1000', 'uploads/4.png', 'uploads/5.png', 'uploads/c7.png', 'uploads/c4.jpg', 'uploads/c6.jpg', 'uploads/c5.jpg'),
(2, 'PV-03', 'dress', 'korean dress', 'Dress', '8000', '200', 'uploads/1.jpg', 'uploads/2ne1-cl-sister-harin-w-korea-magazine-january-2016-photos.png', 'uploads/36813_baps-daehyun.jpg', 'uploads/4a728bb9f0615c505714d05eed2564ed_full.jpg', 'uploads/4minutes-kim-clridens-fall-winter-2015-lookbook-photos (2).png', 'uploads/4minutes-kim-clridens-fall-winter-2015-lookbook-photos (3).png'),
(3, 'PV-11', 'Blazers 2', 'black and gray coats', 'Blazers', '100', '3999', 'uploads/2.png', 'uploads/7.png', 'uploads/8.png', 'uploads/a2.jpg', 'uploads/a8.jpg', 'uploads/a7.jpg'),
(4, 'PV-11', 'Dress 2', 'dress', 'Blouses', '80', '3999', 'uploads/1.png', 'uploads/2.png', 'uploads/3.png', 'uploads/1.jpg', 'uploads/3.jpg', 'uploads/2.jpg'),
(5, 'PV-14', 'xxxx', 'xxxxxx', 'Dress', '8000', '200', 'uploads/10931159_447739235386222_334387276755299085_n.jpg', 'uploads/12208296_141114839579204_1463150955191736662_n.jpg', 'uploads/b805f63608eb9697f95944873d14992db93f2c58_hq.jpg', 'uploads/11811325_10153566908893885_3659307297319528900_n.png.jpg', 'uploads/CL2.jpg', 'uploads/11745583_10153550422568885_2006552987703458643_n.png.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slidertable`
--

CREATE TABLE IF NOT EXISTS `slidertable` (
  `id` int(11) NOT NULL,
  `category` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slidertable`
--

INSERT INTO `slidertable` (`id`, `category`, `image`) VALUES
(11, '', 'sliders/1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE IF NOT EXISTS `usertable` (
  `userID` int(11) NOT NULL,
  `userFname` varchar(1000) NOT NULL,
  `userLname` varchar(1000) NOT NULL,
  `userEmail` varchar(1000) NOT NULL,
  `userMobileNo` varchar(1000) NOT NULL,
  `userAddress` varchar(1000) NOT NULL,
  `userCity` varchar(1000) NOT NULL,
  `userBarangay` varchar(1000) NOT NULL,
  `userZip` varchar(1000) NOT NULL,
  `userInstruction` varchar(10000) NOT NULL,
  `userNewsLetter` varchar(1000) NOT NULL,
  `userPassword` varchar(1000) NOT NULL,
  `userType` varchar(1000) NOT NULL,
  `userStatus` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`userID`, `userFname`, `userLname`, `userEmail`, `userMobileNo`, `userAddress`, `userCity`, `userBarangay`, `userZip`, `userInstruction`, `userNewsLetter`, `userPassword`, `userType`, `userStatus`) VALUES
(10, 'Rey', 'Lumagui', 'reylumagui0329@gmail.com', '09355738099', '#4 Guevarra St. Dasmarinas, Cavite', 'Makati', 'Mumbai', '4114', 'meet up at SM caloocan', 'reylumagui00@yahoo.com', 'greenlock1997', 'Newsletter', 'Active'),
(11, 'Joshua', 'Blando', 'auhsoj.hermosa@gmail.com', '09294888273', '#23 Area E Dasmarinas Cavite', 'Makati', 'New', '4221', 'cash on delivery', 'joshuablando112@yahoo.com', 'zxczxc123123', 'Normal', 'Active'),
(12, 'zxc', 'zxc jr', 'czxcz@yahoo.com', '03921391231', 'zcxzxc', 'Caloocan', 'Barangay', '123', '', 'zczxcxz@yahoo.com', 'zxc', 'Newsletter', 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouttable`
--
ALTER TABLE `abouttable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacttable`
--
ALTER TABLE `contacttable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producttable`
--
ALTER TABLE `producttable`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `slidertable`
--
ALTER TABLE `slidertable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouttable`
--
ALTER TABLE `abouttable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contacttable`
--
ALTER TABLE `contacttable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `producttable`
--
ALTER TABLE `producttable`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `slidertable`
--
ALTER TABLE `slidertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
