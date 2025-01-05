-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2024 at 04:24 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `neozipper`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image_another` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `image`, `email`, `password`, `image_another`) VALUES
(1, 'admin@gmail.com', 'Faysal Kabir Munna.jpg', 'admin@gmail.com', '123456', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `cust_id`, `product_id`, `quantity`) VALUES
(28, 5, 42, 1),
(86, 4, 42, 1),
(87, 4, 40, 1),
(88, 4, 41, 1),
(89, 4, 37, 1),
(90, 5, 40, 1),
(91, 5, 13, 1),
(92, 1, 42, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(100) CHARACTER SET latin1 NOT NULL,
  `fontawesome-icon` varchar(100) CHARACTER SET latin1 NOT NULL,
  `bg_image` varchar(250) COLLATE utf8mb4_croatian_ci DEFAULT NULL,
  `tmnl_image` varchar(255) COLLATE utf8mb4_croatian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_croatian_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `fontawesome-icon`, `bg_image`, `tmnl_image`) VALUES
(1, 'Others', '<i class=\"fa-brands fa-freebsd\"></i>', NULL, 'others.png'),
(59, 'Pet Cave', ' <i class=\"fa-brands fa-freebsd\"></i>', ' ', 'Pet Bed.jpg'),
(60, 'Placemat', '<i class=\"fa-brands fa-freebsd\"></i>', NULL, 'placemat-01.png'),
(61, 'Coasters', '<i class=\"fa-brands fa-freebsd\"></i>', NULL, 'coaster.png'),
(62, 'Door Mate', '<i class=\"bi bi-activity\"></i>', NULL, 'category image another.png'),
(85, 'Birds Nest', ' <i class=\"bi bi-pip-fill\"></i>', ' ', 'Birds Nest.jpg'),
(89, 'Baskets', ' <i class=\"bi bi-activity\"></i>', NULL, 'Basket.jpg'),
(97, 'Fresh Vegetables', 'Fresh Vegetables', ' ', '');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `comment` text NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `reply_of` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comment`, `post_id`, `created_at`, `reply_of`) VALUES
(4, 'Sazzadul Islam Sakib ', 'sakib@gmail.com', 'Day by day juts are disappearing.', 92, '2023-10-05 17:35:06', 0),
(5, 'hi', 'faysal@gmail.com', 'no', 92, '2024-09-09 05:52:09', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_image_upload` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `address1`, `address2`, `phone`, `email`, `contact_image_upload`, `company_name`, `created_at`) VALUES
(18, 'Ms. Rebeka Islam', 'Narayanganj', 'Narayanganj 02', '01723590948', 'faysal@neozipper.com', '', 'Fakir Apparels', '2024-11-21'),
(19, 'Farhan Chowdhury', 'Room ', 'Room ', '01723590946', 'faysal@neozipper.com', '', 'Room ', '2024-11-21'),
(20, 'Ms. Arisha Kabir Mishmi', 'Trishal', 'Mymensingh', '0198404562', 'faysal@neozipper.com', '', 'Sweet girl', '2024-11-21'),
(21, 'Sakib Al-Hasan', 'Mirpur', 'Mirpur', '011723590976', 'sakib@gmail.com', '', 'Neo Zipper', '2024-11-21'),
(26, 'Ms. Arisha Kabir Mishmi', 'Trishal', 'Mymensingh', '0198404562', 'faysal@neozipper.com', '', 'Sweet girl', '2024-11-19'),
(27, 'Mr. Farhan', 'Dhaka', 'Uttara sec-12', '01723590946', 'farhan@gmail.com', '', 'None', '2024-11-26');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `cust_email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `cust_pass` varchar(100) CHARACTER SET latin1 NOT NULL,
  `cust_add` varchar(200) COLLATE utf8mb4_croatian_ci NOT NULL,
  `cust_city` varchar(200) COLLATE utf8mb4_croatian_ci NOT NULL,
  `cust_postalcode` int(6) NOT NULL,
  `cust_number` int(15) NOT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_croatian_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `cust_email`, `cust_pass`, `cust_add`, `cust_city`, `cust_postalcode`, `cust_number`, `created_at`) VALUES
(4, 'Hamza Mughal', 'mhamzaq869@gmail.com', '123123', 'Trishal Mymensingh', 'Mymensingh', 2220, 1982404562, NULL),
(5, 'demo', 'demo@gmail.com', 'hamza123', '', '', 0, 0, NULL),
(6, 'cvbvcb', 'faysalkabir573@gmail.com', 'dsfsdfsd', '', '', 0, 0, NULL),
(7, 'Faysal', 'faysalkabir573@gmail.com', '123123', '', '2024-11-11', 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_fullname` varchar(100) NOT NULL,
  `customer_address` varchar(225) NOT NULL,
  `customer_city` varchar(50) NOT NULL,
  `customer_pcode` int(11) NOT NULL,
  `customer_phonenumber` varchar(100) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_amount` int(11) NOT NULL,
  `invoice_no` int(11) NOT NULL,
  `products_qty` int(11) NOT NULL,
  `order_date` varchar(100) NOT NULL,
  `order_status` varchar(100) NOT NULL,
  `note` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`order_id`, `customer_id`, `customer_email`, `customer_fullname`, `customer_address`, `customer_city`, `customer_pcode`, `customer_phonenumber`, `product_id`, `product_amount`, `invoice_no`, `products_qty`, `order_date`, `order_status`, `note`) VALUES
(72, 5, 'demo@gmail.com', 'demo', 'lahore cantt', 'lahore', 54840, '03224987258', 32, 65000, 1637501531, 1, '23-08-2020', 'delivered', ''),
(73, 5, 'demo@gmail.com', 'demo', 'lahore cantt', 'lahore', 54840, '03224987258', 34, 14600, 1637501531, 1, '23-08-2020', 'pending', ''),
(77, 5, 'demo@gmail.com', 'Faysal', 'trishal', 'lahore', 54840, '03224987258', 32, 65000, 1637501531, 1, '21-11-2024', 'verified', ''),
(78, 5, 'demo@gmail.com', 'Rifat', 'trishal', 'lahore', 54840, '03224987258', 32, 65000, 1637505106, 1, '21-11-2024', 'verified', ''),
(79, 0, 'faysalkabir@gmail.com', 'xcx', 'xcxc', '', 0, '01982404562', 0, 0, 0, 0, '', '', '12123'),
(80, 0, 'faysalkabir@gmail.com', 'xcx', 'xcxc', '', 0, '01982404562', 0, 0, 0, 0, '', '', '12123'),
(81, 0, 'faysalkabir@gmail.com', 'xcx', 'xcxc', '', 0, '01982404562', 0, 0, 0, 0, '', '', '12123'),
(82, 0, 'nai@gmail.com', 'Faysal Kabir', 'Trishal', '', 0, '01982404562', 0, 0, 0, 0, '', '', 'nothing'),
(83, 0, 'faysalkabir@gmail.com', 'xcx', 'xcxc', '', 0, '01982404562', 0, 0, 0, 0, '', '', '12123'),
(84, 2020, 'faysalkabir@gmail.com', 'munna', 'trishal', '', 0, '01982404562', 0, 0, 0, 0, '', '', 'cv '),
(85, 45555, 'fay@neo.com', 'Faysal', 'sd', '', 0, '0172359', 0, 0, 0, 0, '', '', 'xdcdzxc'),
(86, 45555, 'fay@neo.com', 'Faysal', 'sd', '', 0, '0172359', 0, 0, 0, 0, '', '', 'xdcdzxc'),
(87, 555, 'faysalkabir@gmail.com', 'hi', 'fghfd', '', 0, '01982404562', 0, 0, 0, 0, '', '', 'nai'),
(88, 555, 'faysalkabir@gmail.com', 'hi', 'fghfd', '', 0, '01982404562', 0, 0, 0, 0, '', '', 'nai'),
(89, 0, 'nai@gmail.com', 'Faysal Kabir', 'Trishal', '', 0, '01982404562', 0, 0, 0, 0, '', '', 'nothing'),
(90, 2252, 'faysalkabir@gmail.com', 'h', 'hhh', '', 0, '5', 0, 0, 0, 0, '', '', '52552'),
(91, 0, '', 's', '', '', 0, '', 0, 0, 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `customize`
--

CREATE TABLE `customize` (
  `site_title` varchar(100) NOT NULL,
  `favicon` varchar(100) NOT NULL,
  `main_logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customize_header`
--

CREATE TABLE `customize_header` (
  `id` int(11) NOT NULL,
  `site_title` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image_another` varchar(11) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `whatsapp_number` varchar(12) NOT NULL,
  `facebook` varchar(251) NOT NULL,
  `youtube` varchar(250) NOT NULL,
  `instagram` varchar(250) NOT NULL,
  `linkedin` varchar(250) NOT NULL,
  `twitter` varchar(250) NOT NULL,
  `lead_mail` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customize_header`
--

INSERT INTO `customize_header` (`id`, `site_title`, `image`, `email`, `password`, `image_another`, `contact_number`, `whatsapp_number`, `facebook`, `youtube`, `instagram`, `linkedin`, `twitter`, `lead_mail`) VALUES
(1, 'Welcome to our family', '6649146b6febe.png', 'admin@gmail.com', '', 'slider.jpeg', '01723590946', '01982404562', 'https://localhost/wp-80/admin/blog_pro_view', 'https://localhost/wp-80/admin/blog_pro_view', 'https://localhost/wp-80/admin/blog_pro_view', 'https://localhost/wp-80/admin/blog_pro_view', 'https://localhost/wp-80/admin/blog_pro_view', 'faysal@neozipper.com'),
(0, '', '', '', '', '', '01723590946', '01982404562', '', '', '', '', '', 'faysal@neozipper.com');

-- --------------------------------------------------------

--
-- Table structure for table `furniture_product`
--

CREATE TABLE `furniture_product` (
  `pid` int(11) NOT NULL,
  `title` varchar(80) NOT NULL,
  `category` int(11) NOT NULL,
  `detail` text NOT NULL,
  `price` int(11) NOT NULL,
  `size` varchar(40) NOT NULL,
  `image` varchar(200) NOT NULL,
  `anotherimg` varchar(300) NOT NULL,
  `date` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `furniture_product`
--

INSERT INTO `furniture_product` (`pid`, `title`, `category`, `detail`, `price`, `size`, `image`, `anotherimg`, `date`, `status`) VALUES
(32, 'code-40796', 1, '<p><strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=32\" target=\"_blank\">Click for inquiry</a></p>\r\n', 0, '25W*25H', 'Betel Nut Shell Plate-1.jpg', '', '21-08-2020', 'draft'),
(34, 'Betel Nuts Plate-2', 1, '<p><strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=34\" target=\"_blank\">Click for inquiry</a></p>\r\n', 0, '25W*25H', 'Betel Nuts Plate-2.jpg', 'final.jpg', '21-08-2020', 'draft'),
(43, 'Jute Made Hat', 1, '<p><strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=43\" target=\"_blank\">Click for inquiry</a></p>\r\n', 5000, '', 'Jute Made Hat.jpg', '', '05-08-2023', 'draft'),
(44, 'Placemats 001', 60, '<p><strong>Size</strong>: 38 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=44\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: handmade<br />\r\n<strong>Description:</strong> 100% jute, natural colour</p>\r\n', 3, '25*25', 'Place Mat 001.jpg', '', '09-08-2023', 'publish'),
(45, 'Placemats 002', 60, '<p><strong>Product Name: </strong>Placemats 002<br />\r\n<strong>Size:</strong><br />\r\n<strong>Price:</strong> <a href=\"https://bdhandicrafts.biz/inquiry?product_id=45\" target=\"_blank\">Click for inquiry</a><br />\r\nMade by: handmade<br />\r\nDescription: 100% jute,<strong> <span class=\"marker\">natural colour</span></strong></p>\r\n', 3, '25W*25H', 'Place Mat 002.jpg', '', '09-08-2023', 'publish'),
(46, 'Placemats 003', 60, '<p><strong>Product Name: </strong>Placemats 003<br />\r\n<strong>Size:</strong><br />\r\n<strong>Price:</strong> <a href=\"https://bdhandicrafts.biz/inquiry?product_id=46\" target=\"_blank\">Click for inquiry</a><br />\r\nMade by: handmade<br />\r\nDescription: 100% jute, natural colour</p>\r\n', 3, '25W*25H', 'Place Mat 003.jpg', '', '09-08-2023', 'publish'),
(48, 'Placemats 005', 60, '<p><strong>Product Name: </strong>Placemats 005<br />\r\n<strong>Size:</strong><br />\r\n<strong>Price:</strong> <a href=\"https://bdhandicrafts.biz/inquiry?product_id=48\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by:</strong> handmade<br />\r\n<strong>Description:</strong> 100% jute, natural colour</p>\r\n\r\n<p>&nbsp;</p>\r\n', 3, '25W*25H', 'Place Mat 005.jpg', '', '09-08-2023', 'publish'),
(49, 'Placemats 006', 60, '<p><strong>Product Name: </strong>Placemats 006<br />\r\n<strong>Size:</strong><br />\r\n<strong>Price:</strong> <a href=\"https://bdhandicrafts.biz/inquiry?product_id=49\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by:</strong> handmade<br />\r\n<strong>Description:</strong> 100% jute, natural colour</p>\r\n', 3, '25W*25H', 'Place Mat 006.jpg', '', '09-08-2023', 'publish'),
(50, 'Placemats 007', 60, '<p><strong>Product Name: </strong>Placemats 007<br />\r\n<strong>Size:</strong><br />\r\n<strong>Price:</strong> <a href=\"https://bdhandicrafts.biz/inquiry?product_id=50\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: handmade<br />\r\n<strong>Description:</strong> 100% jute, natural colour</p>\r\n', 3, '25W*25H', 'Place Mat 007.jpg', '', '09-08-2023', 'publish'),
(51, 'Placemats 008', 60, '<p><strong>Product Name: </strong>Placemats 009<br />\r\n<strong>Size:</strong><br />\r\n<strong>Price:</strong> <a href=\"https://bdhandicrafts.biz/inquiry?product_id=51\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Description:</strong> 100% jute, natural colour</p>\r\n', 3, '25W*25H', 'Place Mat 009.jpg', '', '09-08-2023', 'publish'),
(52, 'Placemats 009', 60, '<p><strong>Product Name: </strong>Placemats 009<br />\r\n<strong>Size:</strong><br />\r\n<strong>Price:</strong> <a href=\"https://bdhandicrafts.biz/inquiry?product_id=52\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: handmade<br />\r\n<strong>Description:</strong> 100% jute, natural colour</p>\r\n', 3, '25W*25H', 'Place Mat 009.jpg', '', '09-08-2023', 'publish'),
(53, 'Coaster 001', 61, '<p><strong>Product Name:</strong> Coaster 001<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=53\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: handmade<br />\r\n<strong>Description:</strong> 100% jute</p>\r\n', 2, '25W*25H', 'Coaster 001.jpg', '', '09-08-2023', 'publish'),
(54, 'Coaster 002', 61, '<p><strong>Product Name:</strong> Coaster<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=54\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: handmade<br />\r\n<strong>Description:</strong> 100% jute</p>\r\n', 2, '25W*25H', 'Coaster 002.jpg', '', '09-08-2023', 'publish'),
(55, 'Coaster 003', 61, '<p><strong>Product Name:</strong> Coaster<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=55\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: handmade<br />\r\n<strong>Description:</strong> 100% jute</p>\r\n', 2, '25W*25H', 'Coaster 003.jpg', '', '09-08-2023', 'publish'),
(56, 'Coaster 004', 61, '<p><strong>Product Name:</strong> Coaster<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=56\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: handmade<br />\r\n<strong>Description:</strong> 100% jute</p>\r\n', 2, '25W*25H', 'Coaster 004.jpg', '', '09-08-2023', 'publish'),
(57, 'Coaster 005', 61, '<p><strong>Product Name:</strong> Coaster<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=57\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: handmade<br />\r\n<strong>Description:</strong> 100% jute</p>\r\n', 2, '25W*25H', 'Coaster 005.jpg', '', '09-08-2023', 'publish'),
(59, 'Coaster 007', 61, '<p><strong>Product Name:</strong> Coaster<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=59\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: handmade<br />\r\n<strong>Description:</strong> 100% jute</p>\r\n', 2, '25W*25H', 'Coaster 007 (2).jpg', '', '09-08-2023', 'publish'),
(60, 'Coaster 008', 61, '<p><strong>Product Name:</strong> Coaster<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=60\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: handmade<br />\r\n<strong>Description:</strong> 100% jute</p>\r\n', 2, '25W*25H', 'Coaster 008.jpg', '', '09-08-2023', 'publish'),
(61, 'Coaster 009', 61, '<p><strong>Product Name:</strong> Coaster<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=61\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: handmade<br />\r\n<strong>Description:</strong> 100% jute</p>\r\n', 2, '25W*25H', 'Coaster 009.jpg', '', '09-08-2023', 'publish'),
(62, 'Coaster 010', 61, '<p><strong>Product Name:</strong> Coaster<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=62\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: handmade<br />\r\n<strong>Description:</strong> 100% jute</p>\r\n', 2, '25W*25H', 'Coaster 010.jpg', '', '09-08-2023', 'publish'),
(63, 'Coaster 011', 61, '<p><strong>Product Name:</strong> Coaster<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=63\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: handmade<br />\r\n<strong>Description:</strong> 100% jute</p>\r\n', 2, '25W*25H', 'Coaster 011.jpg', '', '09-08-2023', 'draft'),
(65, 'Door Mat 001', 62, '<p><strong>Product Name: Door mat</strong><br />\r\n<strong>Size:</strong><br />\r\n<strong>Price:</strong> <a href=\"https://bdhandicrafts.biz/inquiry?product_id=65\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by:</strong> handmade<br />\r\n<strong>Description:</strong> 100% jute</p>\r\n', 11, '25w*25h', 'Door mat 0061.jpg', '', '09-08-2023', 'publish'),
(66, 'Door Mat 002', 62, '<p><strong>Product Name:</strong> Door mat<br />\r\n<strong>Size:</strong> 70x100 cm<br />\r\n<strong>Price:</strong> <a href=\"https://bdhandicrafts.biz/inquiry?product_id=66\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by:</strong> handmade<br />\r\n<strong>Description:</strong> 100% jute</p>\r\n', 11, '25w*25h', 'Door mat 002.jpg', '', '09-08-2023', 'publish'),
(67, 'Door Mat 003', 62, '<p><strong>Product Name:</strong> Door mat<br />\r\n<strong>Size:</strong> 70x100 cm<br />\r\n<strong>Price:</strong> <a href=\"https://bdhandicrafts.biz/inquiry?product_id=67\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by:</strong> handmade<br />\r\n<strong>Description:</strong> 100% jute</p>\r\n', 11, '25w*25h', 'Door mat 003.jpg', '', '09-08-2023', 'publish'),
(68, 'Door Mat 004', 62, '<p><strong>Product Name:</strong> Door mat<br />\r\n<strong>Size:</strong> 70x100 cm<br />\r\n<strong>Price:</strong> <a href=\"https://bdhandicrafts.biz/inquiry?product_id=68\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by:</strong> handmade<br />\r\n<strong>Description:</strong> 100% jute</p>\r\n', 11, '25w*25h', 'Door mat 004.jpg', '', '09-08-2023', 'publish'),
(69, 'Door Mat 005', 62, '<p><strong>Product Name:</strong> Door mat<br />\r\n<strong>Size:</strong> 70x100 cm<br />\r\n<strong>Price:</strong> <a href=\"https://bdhandicrafts.biz/inquiry?product_id=69\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by:</strong> handmade<br />\r\n<strong>Description:</strong> 100% jute</p>\r\n', 11, '25w*25h', 'Door mat 005.jpg', '', '09-08-2023', 'publish'),
(70, 'Door Mat 006', 62, '<p><strong>Product Name:</strong> Door mat<br />\r\n<strong>Size:</strong> 70x100 cm<br />\r\n<strong>Price:</strong> <a href=\"https://bdhandicrafts.biz/inquiry?product_id=70\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by:</strong> handmade<br />\r\n<strong>Description:</strong> 100% jute</p>\r\n', 11, '70x100 cm', 'Door mat 006.jpg', '', '09-08-2023', 'publish'),
(71, 'Door Mat 007', 62, '<p><br />\r\n<strong>Product Name:</strong> Door mat<br />\r\n<strong>Size:</strong> 70x100 cm<br />\r\n<strong>Price:</strong> <a href=\"https://bdhandicrafts.biz/inquiry?product_id=71\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by:</strong> handmade<br />\r\n<strong>Description:</strong> 100% jute</p>\r\n', 11, '70x100 cm', 'Door mat 007.jpg', '', '09-08-2023', 'publish'),
(93, 'Door Mat 008', 62, '<p><strong>Product Name:</strong> Door mat<br />\r\n<strong>Size:</strong> 70x100 cm<br />\r\n<strong>Price:</strong> <a href=\"https://bdhandicrafts.biz/inquiry?product_id=93\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by:</strong> handmade<br />\r\n<strong>Description:</strong> 100% jute</p>\r\n', 11, '25w*25h', 'Door mat 008.jpg', '', '11-10-2023', 'publish'),
(94, 'Door Mat 009', 62, '<p><strong>Product Name:</strong> Door mat<br />\r\n<strong>Size:</strong> 70x100 cm<br />\r\n<strong>Price:</strong> <a href=\"https://bdhandicrafts.biz/inquiry?product_id=94\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by:</strong> handmade<br />\r\n<strong>Description:</strong> 100% jute</p>\r\n', 3, '25w*25h', 'Door mat 009.jpg', '', '11-10-2023', 'publish'),
(95, 'Basket 001', 89, '<p><strong>Product Name: </strong>Basket 001<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=95\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: handmade<br />\r\n<strong>Description:</strong> 100% jute</p>\r\n', 0, '25W*25H', 'Basket 001.jpg', '', '18-10-2023', 'publish'),
(96, 'Basket 002', 89, '<p><strong>Product Name: </strong>Basket 002<br />\r\n<strong>Size:</strong>&nbsp;<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=96\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: hhandmade<br />\r\n<strong>Description:</strong> Sea Grass</p>\r\n', 0, '25W*25H', 'Basket 002.jpg', '', '18-10-2023', 'publish'),
(97, 'Basket 003', 89, '<p><strong>Product Name: </strong>Basket 001<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=97\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: handmade<br />\r\n<strong>Description:</strong> 100% jute</p>\r\n', 0, '25W*25H', 'Basket 003.jpg', '', '18-10-2023', 'publish'),
(98, 'Bag 001', 84, '<p><strong>Product Name: </strong>Basket 001<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=98\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: handmade<br />\r\n<strong>Description:</strong> 100% jute</p>\r\n', 0, '25W*25H', 'Bag 001.jpg', '', '18-10-2023', 'publish'),
(99, 'Bag 002', 84, '<p><strong>Product Name: </strong>Bag 002<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=99\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: handmade<br />\r\n<strong>Description:</strong> 100% jute</p>\r\n', 0, '25W*25H', 'Bag 002.jpg', '', '18-10-2023', 'publish'),
(100, 'Bag 003', 84, '<p><strong>Product Name: </strong>Bag 003<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=100\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: handmade<br />\r\n<strong>Description:</strong> 100% jute</p>\r\n', 0, '25W*25H', 'Bag 003.jpg', '', '18-10-2023', 'publish'),
(101, 'Birds Nest 001', 85, '<p><strong>Product Name: </strong>Birds Nest 001<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=101\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: handmade<br />\r\n<strong>Description:</strong> 100% jute</p>\r\n', 0, '25W*25H', 'Birds nest.jpg', '', '18-10-2023', 'publish'),
(102, 'Birds Nest 002', 85, '<p><strong>Product Name: </strong>Birds Nest 001<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=102\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: handmade<br />\r\n<strong>Description:</strong> 100% jute</p>\r\n', 0, '25W*25H', 'Birds Nest 002.jpg', '', '18-10-2023', 'publish'),
(103, 'Birds Nest 003', 85, '<p><strong>Product Name: </strong>Birds Nest 003<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=103\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: handmade<br />\r\n<strong>Description:</strong> 100% jute</p>\r\n', 0, '25W*25H', 'Birds Nest 003.jpg', '', '18-10-2023', 'publish'),
(104, 'Pet Cave 001', 59, '<p><strong>Product Name: </strong>Pet Cave 001<br />\r\n<strong>Size:</strong><br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=104\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: handmade<br />\r\n<strong>Description:</strong> Sea Grass and Straw</p>\r\n', 0, '25W*25H', 'Pet Cave 001.jpg', '', '19-10-2023', 'publish'),
(105, 'Pet Cave 002', 59, '<p><strong>Product Name: </strong>Pet Cave 002<br />\r\n<strong>Size:</strong><br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=105\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: handmade<br />\r\n<strong>Description:</strong> Sea Grass and Straw</p>\r\n', 0, '25W*25H', 'Pet Cave 002.jpg', '', '19-10-2023', 'publish'),
(106, 'Pet Cave 003', 59, '<p><strong>Product Name: </strong>Pet Cave 003<br />\r\n<strong>Size:</strong><br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=106\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: handmade<br />\r\n<strong>Description:</strong> Sea Grass and Straw</p>\r\n', 0, 'Pet Cave 001', 'Pet Cave 003.jpg', '', '19-10-2023', 'publish'),
(107, 'Pet Cave 004', 59, '<p><strong>Product Name: </strong>Pet Cave 004<br />\r\n<strong>Size:</strong><br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=107\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: handmade<br />\r\n<strong>Description:</strong> Sea Grass and Straw</p>\r\n', 0, '25W*25H', 'Pet Cave 004.jpg', '', '19-10-2023', 'publish'),
(108, 'Birds Nest 004', 85, '<p><strong>Product Name: </strong>Birds Nest 004<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=108\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: handmade<br />\r\n<strong>Description:</strong> Sea Grass and Straw</p>\r\n', 0, '25W*25H', 'Birds Nest 004.jpg', '', '19-10-2023', 'publish'),
(109, 'Birds Nest 005', 85, '<p><strong>Product Name: </strong>Birds Nest 005<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=109\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: handmade<br />\r\n<strong>Description:</strong> 100% jute</p>\r\n', 0, '25W*25H', 'Birds Nest 005.jpg', '', '19-10-2023', 'publish'),
(110, 'Basket 004', 89, '<p><strong>Product Name: </strong>Basket 004<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=110\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: Sea Grass<br />\r\n<strong>Description:</strong></p>\r\n', 0, '25W*25H', 'Basket 004.jpg', '', '19-10-2023', 'publish'),
(111, 'Basket 005', 89, '<p><strong>Product Name: </strong>Basket 005<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=111\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: Sea Grass<br />\r\n<strong>Description:</strong></p>\r\n', 0, '25W*25H', 'basket 005.jpg', '', '19-10-2023', 'publish'),
(112, 'Basket 006', 89, '<p><strong>Product Name: </strong>Basket 006<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=112\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: Sea Grass<br />\r\n<strong>Description:</strong></p>\r\n', 0, '25W*25H', 'basket 006.jpg', '', '19-10-2023', 'publish'),
(113, 'Basket 007', 89, '<p><strong>Product Name: </strong>Basket 007<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=114\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: Sea Grass<br />\r\n<strong>Description:</strong></p>\r\n', 0, '25W*25H', 'basket 007.jpg', '', '19-10-2023', 'publish'),
(114, 'Basket 008', 89, '<p><strong>Product Name: </strong>Basket 008<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=114\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: Sea Grass<br />\r\n<strong>Description:</strong></p>\r\n', 0, '25W*25H', 'basket 008.jpg', '', '19-10-2023', 'publish'),
(115, 'Basket 009', 89, '<p><strong>Product Name: </strong>Basket 009<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=115\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: Sea Grass<br />\r\n<strong>Description:</strong></p>\r\n', 0, '25W*25H', 'basket 009.jpg', '', '19-10-2023', 'publish'),
(116, 'Basket 010', 89, '<p><strong>Product Name: </strong>Basket 010<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=116\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: Sea Grass<br />\r\n<strong>Description:</strong></p>\r\n', 0, '25W*25H', 'basket 010.jpg', '', '19-10-2023', 'publish'),
(117, 'Basket 011', 89, '<p><strong>Product Name: </strong>Basket 011<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=117\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: Sea Grass<br />\r\n<strong>Description:</strong></p>\r\n', 0, '25W*25H', 'basket 011.jpg', '', '19-10-2023', 'publish'),
(118, 'Basket 012', 89, '<p><strong>Product Name: </strong>Basket 012<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=118\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: Sea Grass<br />\r\n<strong>Description:</strong></p>\r\n', 0, '25W*25H', 'basket 012.jpg', '', '19-10-2023', 'publish'),
(119, 'Basket 013', 89, '<p><strong>Product Name: </strong>Basket 013<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=119\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: Sea Grass<br />\r\n<strong>Description:</strong></p>\r\n', 0, '25W*25H', 'basket 013.jpg', '', '19-10-2023', 'publish'),
(120, 'Basket 014', 89, '<p><strong>Product Name: </strong>Basket 014<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=120\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: Sea Grass<br />\r\n<strong>Description:</strong></p>\r\n', 0, '25W*25H', 'basket 014.jpg', '', '19-10-2023', 'publish'),
(121, 'Basket 015', 89, '<p><strong>Product Name: </strong>Basket 015<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=121\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: Sea Grass<br />\r\n<strong>Description:</strong></p>\r\n', 0, '25W*25H', 'basket 015.jpg', '', '19-10-2023', 'publish'),
(122, 'Basket 016', 89, '<p><strong>Product Name: </strong>Basket 016<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=121\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: Sea Grass<br />\r\n<strong>Description:</strong></p>\r\n', 0, '25W*25H', 'basket 016.jpg', '', '19-10-2023', 'publish'),
(123, 'Basket 017', 89, '<p><strong>Product Name: </strong>Basket 016<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=123\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: Sea Grass<br />\r\n<strong>Description:</strong></p>\r\n', 0, '25W*25H', 'basket 017.jpg', '', '19-10-2023', 'publish'),
(124, 'Bag 004', 84, '<p><strong>Product Name: </strong>Bag 004<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=124\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: handmade<br />\r\n<strong>Description:</strong> 100% jute</p>\r\n', 0, '25W*25H', 'Bag 004.jpg', '', '19-10-2023', 'publish'),
(125, 'Bag 005', 84, '<p><strong>Product Name: </strong>Bag 005<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=125\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: 100% jute<br />\r\n<strong>Description:</strong></p>\r\n', 0, '25W*25H', 'Bag 005.jpg', '', '19-10-2023', 'publish'),
(126, 'Bag 006', 84, '<p><strong>Product Name: </strong>Bag 006<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=126\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: 100% jute<br />\r\n<strong>Description:</strong></p>\r\n', 0, '25W*25H', 'Bag 006.jpg', '', '19-10-2023', 'publish'),
(127, 'Bag 007', 84, '<p><strong>Product Name: </strong>Bag 007<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=127\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: 100% jute<br />\r\n<strong>Description:</strong></p>\r\n', 0, '25W*25H', 'Bag 007.jpg', '', '19-10-2023', 'publish'),
(128, 'Bag 008', 84, '<p><strong>Product Name: </strong>Bag 008<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=128\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: 100% jute<br />\r\n<strong>Description:</strong></p>\r\n', 0, '25W*25H', 'Bag 008.jpg', '', '19-10-2023', 'publish'),
(129, 'Bag 009', 84, '<p><strong>Product Name: </strong>Bag 009<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=129\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: 100% jute<br />\r\n<strong>Description:</strong></p>\r\n', 0, '25W*25H', 'Bag 009.jpg', '', '19-10-2023', 'publish'),
(130, 'Bag 010', 84, '<p><strong>Product Name: </strong>Bag 010<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=130\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: 100% jute<br />\r\n<strong>Description:</strong></p>\r\n', 0, '25W*25H', 'Bag 010.jpg', '', '19-10-2023', 'publish'),
(131, 'Bag 011', 84, '<p><strong>Product Name: </strong>Bag 011<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=131\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: 100% jute<br />\r\n<strong>Description:</strong></p>\r\n', 0, '25W*25H', 'Bag 011.jpg', '', '19-10-2023', 'publish'),
(132, 'Bag 012', 84, '<p><strong>Product Name: </strong>Bag 012<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=132\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: 100% jute<br />\r\n<strong>Description:</strong></p>\r\n', 0, '25W*25H', 'Bag 0012.jpg', '', '19-10-2023', 'publish'),
(133, 'Bag 013', 84, '<p><strong>Product Name: </strong>Bag 013<br />\r\n<strong>Size:</strong> 20 cm<br />\r\n<strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=133\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: 100% jute<br />\r\n<strong>Description:</strong></p>\r\n', 0, '25W*25H', 'Bag 013.jpg', '', '19-10-2023', 'publish'),
(134, 'Placemats 010', 60, '<p><strong>Product Name: </strong>Placemats 010<br />\r\n<strong>Size:</strong><br />\r\n<strong>Price:</strong> <a href=\"https://bdhandicrafts.biz/inquiry?product_id=134\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: handmade<br />\r\n<strong>Description:</strong> 100% jute, natural colour</p>\r\n', 3, '25W*25H', 'Placemats 010.jpg', '', '19-10-2023', 'publish'),
(135, 'Placemats 011', 60, '<p><strong>Product Name: </strong>Placemats 011<br />\r\n<strong>Size:</strong><br />\r\n<strong>Price:</strong> <a href=\"https://bdhandicrafts.biz/inquiry?product_id=135\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: handmade<br />\r\n<strong>Description:</strong> 100% jute, natural colour</p>\r\n', 3, '25W*25H', 'Placemats 011.jpg', '', '19-10-2023', 'publish'),
(136, 'Placemats 012', 60, '<p><strong>Product Name: </strong>Placemats 012<br />\r\n<strong>Size:</strong><br />\r\n<strong>Price:</strong> <a href=\"https://bdhandicrafts.biz/inquiry?product_id=136\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: handmade<br />\r\n<strong>Description:</strong> 100% jute, natural colour</p>\r\n', 3, '25W*25H', 'Placemats 012.jpg', '', '19-10-2023', 'publish'),
(137, 'Placemats 013', 60, '<p><strong>Product Name: </strong>Placemats 013<br />\r\n<strong>Size:</strong><br />\r\n<strong>Price:</strong> <a href=\"https://bdhandicrafts.biz/inquiry?product_id=137\" target=\"_blank\">Click for inquiry</a><br />\r\n<strong>Made by</strong>: handmade<br />\r\n<strong>Description:</strong> 100% jute, natural colour</p>\r\n', 3, '25W*25H', 'Placemats 013.jpg', '', '19-10-2023', 'publish'),
(138, 'Cusion Seat', 1, '<p><strong>Price</strong>: <a href=\"https://bdhandicrafts.biz/inquiry?product_id=138\" target=\"_blank\">Click for inquiry</a></p>\r\n', 0, '25W*25H', 'Cusion Seat.jpg', '', '19-10-2023', 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `ID` int(11) NOT NULL,
  `notice_content` varchar(250) NOT NULL,
  `notice_title` varchar(250) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`ID`, `notice_content`, `notice_title`, `created_at`) VALUES
(3, '100% Secure delivery without contacting the courier', '100% Delivery ', '2024-11-10'),
(4, 'Supper Value Deals - Save more with coupons', 'Supper Value ', '2024-11-10'),
(5, 'Supper Value Deals - Save more with coupons', 'Supper Value ', '2024-11-10'),
(6, 'Supper Value Deals - Save more with coupons', 'Supper Value ', '2024-11-11');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_id` int(250) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `quantity` int(250) NOT NULL,
  `price` int(250) NOT NULL,
  `total` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_list` int(100) NOT NULL,
  `post_title` varchar(1003) NOT NULL,
  `post_description` varchar(10000) NOT NULL,
  `post_image` varchar(250) NOT NULL,
  `post_image_thumbnail` varchar(300) NOT NULL,
  `date` varchar(300) NOT NULL,
  `time` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_list`, `post_title`, `post_description`, `post_image`, `post_image_thumbnail`, `date`, `time`) VALUES
(92, 'Jute Products in Bangladesh                        ', '<p><strong>Jute Products in Bangladesh</strong></p>\r\n\r\n<p><strong>Jute Products: </strong></p>\r\n\r\n<p>Jute produced in Bangladesh was once the mainstay of the economy. But in order to meet the demand of the time, jute has been replaced by plastic products which are harmful to the environment and health. But again, in time, eco-conscious consumers around the world are being encouraged to use eco-friendly products, especially jute products.</p>\r\n\r\n<p><strong>Abstract:</strong></p>\r\n\r\n<p>Jute is an ancient agricultural and one of the major cash crops of Bangladesh. Jute is one of the most eco-friendly and sustainable crops. It helps in soil fertility, formation and restoration. The leaves of the jute tree enrich the soil fertility for sustainable agriculture and its nutritional value as a vegetable. As an alternative to wood, jute sticks are used as fuel which prevents deforestation. Jute was once called the &lsquo;Golden Fiber&rsquo; of Bangladesh. The contribution of jute sector in the economy of Bangladesh is immense. In Bangladesh, economic, agricultural, industrial and commercial perspectives but the current and future prosperity and growth of this industry is at risk. A favorable environment has not yet been created for the development of jute industry in Bangladesh. There are many problems in this industry, such as; Lack of scientific knowledge and modern equipment, lack of quality seeds, low productivity, lack of government patronage, lack of skilled workers, lack of capital, lack of training of entrepreneurs, natural disasters, global market conflicts and economic crisis etc.</p>\r\n\r\n<p>In order to overcome the above problems, the government has taken various steps to diversify and utilize jute products through the Jute Diversification Promotion Center (JDPC). In recent times, considering the domestic and international market demand of Bangladesh and the global expansion of the jute industry, the government has declared 282 types of attractive jute goods as diversified jute products. At present about 700 entrepreneurs are producing various types of eye-catching jute products in Bangladesh, most of which are being exported abroad. Jute has been recognized as an important sector since time immemorial. Therefore, the potential for jute is much higher with the growing global concern for the environment.</p>\r\n\r\n<p><strong>The following is a list of some of the jute products produced or manufactured from jute-</strong></p>\r\n\r\n<p><strong>Jute Bags:</strong></p>\r\n\r\n<p>A wide variety of bags are being made from jute fabric for daily use. Its demand is also increasing worldwide. Shopping bags for the market, travel bags for travel, promotion bags for promotion of products or organizations are being made of jute fabrics. Jute fabrics are also being made in various fashionable design bags for women to use. Among the other bags made from jute are handbags, jute beach bags, jute Christmas bags, jute sling bags, jute sacking bags, jute bottle bags, lunch bags etc.</p>\r\n\r\n<p><strong>Home Decor Items:</strong></p>\r\n\r\n<p>Jute products are widely and commonly used for designing and aesthetic purposes. Especially for wall decoration, different items of jute are used. Such as; embroidered paintings, framed products, framed photographs, tapestries, framed mirrors, toys, table lamps, wall hangings, plant hanger, door mat, table mat, owl, door chain, Elephants, hacking pockets storage, key holders, etc.</p>\r\n\r\n<p><strong>Jute for craftworks: </strong></p>\r\n\r\n<p>Sketchbook, notebook cover, pen keeper, cards of salutation, frame for a picture, a folder for containing document, gift container, tissue box, Pen Stand, Flowers, Basket, slip pad holder, jute coasters, jute hammocks, jute lampshades, jute Jewelry and stationery, doll, toys, etc.</p>\r\n\r\n<p><strong>Jute textile:</strong></p>\r\n\r\n<p>Jute hessian cloth or burlap, jute geotextiles, jute yarn, jute carpet cloth (CBC), jute hydrocarbon free cloth, jute canvas.</p>\r\n\r\n<p><strong>Jute apparel: </strong></p>\r\n\r\n<p>Jute jacket, jute footwear, jute fashion accessories.</p>\r\n\r\n<p>Jute furnishings: Jute mats and ropes, jute cushion covers, jute fabrics, jute blinds, jute rugs, jute carpets.</p>\r\n\r\n<p><strong>What is BD Handicrafts doing?</strong></p>\r\n\r\n<p>The history, heritage, culture and values of jute are closely linked with the history of Bangladesh. BD Handicrafts is working to highlight this glorious history of Bangladesh all over the world. BD Handicrafts is providing training on making diversified jute products to empower women and marketing their products. Thus, BD Handicrafts is playing an important role in the socio-economic development of rural women.</p>\r\n\r\n<h3><strong>Source:</strong> <em>Different Online Portal</em></h3>\r\n', '02.jpg', '05.jpg', '27-09-2023', '12:02:48pm'),
(99, 'WATER HYACINTH: A UNIQUE SOURCE OF SUSTAINABLE MATERIALS AND PRODUCTS ', '<p>Sustainability is not only good for the planet - it is one of the hottest trends in modern interior and office design. More and more decorators and homeowners are looking to invest in products that are beautiful and durable, but made of durable fabrics and materials.</p>\r\n\r\n<p>WHAT IS WATER HYACIN?</p>\r\n\r\n<p>Water Hyacinth is a floating plant with beautiful purple flowers. It is native to South America, but has appeared in most of the southern United States, wherever there are no permanent freezes. It also invaded parts of Africa, Asia and Europe.</p>\r\n\r\n<p>Water hyacinth can form thick mats that cover the entire surface of ponds, choking native species and the oxygen in the water. Fish cannot survive in water without oxygen, so it is important to control plant growth. In some states such as Texas, Florida, and California, having a water hyacinth on your property is illegal due to how ubiquitous it can be.</p>\r\n\r\n<p>Wicker made of water hyacinth is extremely ecological; it grows so fast and so densely that in some places it is considered an invasive species.</p>\r\n\r\n<p>Craftsmen and farmers are constantly looking for new uses for a hardy, stubborn plant, and wicker has become one of the best, most profitable options. Craftsmen around the world are developing new ways of weaving it and are constantly creating new products from it.</p>\r\n\r\n<p>WHAT WATER HYACIN IS USED FOR</p>\r\n\r\n<p>The desire to control the water hyacinth has made it challenging to find ways to remove it from waterways and use it in a productive, sustainable way. Some of the most popular uses so far include:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>&nbsp;Feeding livestock</p>\r\n	</li>\r\n\r\n	<li><p>&nbsp;Water purification</p></li>\r\n	<li><p>&nbsp;Paper making</p></li>\r\n	<li><p>&nbsp;Cooking and eating</p></li>\r\n	<li><p>&nbsp;Bioenergy creation</p></li>\r\n	<li><p>&nbsp;Weaving furniture and decorative items</p></li>\r\n</ul>\r\n\r\n\r\n\r\n<p><strong>Source:</strong></p>\r\n\r\n<p>\r\nBy Monika Kepinska\r\n\r\nSep 12, 2022\r\n</p>\r\n', 'hogla pata.jpg', 'WATER HYACINTH.jpg', '08-10-2023', '11:08:00am'),
(101, 'Why Water Hyacinth Is A Sustainable Material?', '<p>For a long time, water hyacinth has been widely used by people in Vietnam in daily life with many uses. From making animal feed to using it to create handicraft products. So with so many uses as above, is water hyacinth a sustainable source of raw materials? The answer will be in the blog below.</p>\r\n\r\n<h2><strong>What is Water hyacinth?</strong></h2>\r\n\r\n<p>Water hyacinth&nbsp;is an aquatic, herbaceous plant that floats in water or in moist places. The plant grows about 30 cm high with round, green, smooth, and smooth leaves, and long, narrow arched veins. Leaves entwined like petals. These leaves are then cut and dried so that they can be woven in baskets and other home decor and home furniture products.&nbsp;</p>\r\n\r\n<h2><strong>Sustainable and Local Sourcing</strong></h2>\r\n\r\n<p>Water hyacinth has a very fast reproduction time, doubling in number every 2 weeks. They grow in many ponds and lakes in Vietnam, which provides an abundant source of raw materials for people to use. Using water hyacinth in production is also a way to protect the environment. Because of its very fast growth characteristics, it clogs the water flow and accelerates the decomposition of other aquatic species. Releases methane, a greenhouse gas that is 34 times more impactful than&nbsp;<a href=\"https://en.wikipedia.org/wiki/Carbon_dioxide\">CO2</a>.</p>\r\n\r\n<h2><strong>Environmentally Friendly Production</strong></h2>\r\n\r\n<p>The entire production process of water hyacinth is done manually and therefore they are completely eco-friendly. After being harvested, the conductor will cut off the stalks and leaves to get the middle part. Next, they will be dried and then twisted into strings with various sizes and thicknesses. Depending on the size of the product, people can choose to weave baskets or decorative household items.</p>\r\n\r\n<h2><strong>Source:</strong></h2>\r\n\r\n<p>www.simpledecor.vn</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'hyacinth is a sustania main.jpg', 'hyacinth is a sustania.jpg', '-2025', '12:06:10pm');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `comment` text NOT NULL,
  `review_star` int(11) NOT NULL,
  `review_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `reply_of` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `email`, `comment`, `review_star`, `review_id`, `created_at`, `reply_of`) VALUES
(6, 'munna', 'faysalkabir573@gmail.com', 'That\'s a good product', 0, 43, '2023-09-27 18:14:57', 0),
(7, 'Nazifa Islam', 'nazifaakter1314@gmail.com', 'It\'s a amazing', 0, 43, '2023-09-27 18:32:28', 0),
(8, 'Mishmi', 'faysal@gmail.com', 'amazing', 0, 43, '2023-10-05 17:32:58', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sample`
--

CREATE TABLE `sample` (
  `Id` int(250) NOT NULL,
  `person_name` varchar(250) NOT NULL,
  `phone` int(250) NOT NULL,
  `factory_name` varchar(250) NOT NULL,
  `buyer_name` varchar(250) NOT NULL,
  `ref` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sample`
--

INSERT INTO `sample` (`Id`, `person_name`, `phone`, `factory_name`, `buyer_name`, `ref`) VALUES
(4, '12', 1723590946, '14', 'TEMA', 'DK-SN-6060'),
(34, '14', 1982404562, '15', 'NAI', 'DK-SN-6060'),
(36, '13', 1982404562, '14', 'munna', 'DK-SN-6060'),
(37, '16', 198404562, '16', 'TEMA', 'DK-SN-6060');

-- --------------------------------------------------------

--
-- Table structure for table `sample_req_type`
--

CREATE TABLE `sample_req_type` (
  `ID` int(3) DEFAULT NULL,
  `DK-SN` int(50) NOT NULL,
  `DK-PP` int(50) NOT NULL,
  `DK-TS` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `slider_images`
--

CREATE TABLE `slider_images` (
  `id` int(11) NOT NULL,
  `alt` varchar(100) NOT NULL,
  `image_path` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider_images`
--

INSERT INTO `slider_images` (`id`, `alt`, `image_path`) VALUES
(4, '2.jpg', '2.jpg'),
(8, '1', '1.jpg'),
(5, '3', '4.jpg'),
(9, '4', '4.jpg'),
(10, '4', '4.jpg'),
(11, '6', '6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`) VALUES
(1, 'hi@gmail.com'),
(2, 'faysalkabir573@gmail.com'),
(3, 'faysalkabir573@gmail.com'),
(4, 'faysalkabir573@gmail.com'),
(5, 'faysalkabir573@gmail.com'),
(6, 'faysalkabir573@gmail.com'),
(7, 'faysalkabir573@gmail.com'),
(8, 'faysalkabir573@gmail.com'),
(9, 'sdfsdf@gmail.com'),
(10, 'sdfsdf@gmail.com'),
(11, 'sdfsdf@gmail.com'),
(12, 'faysalkabir573@gmail.com'),
(13, 'faysalkabir573@gmail.com'),
(14, 'FAAY@GMAIL.COM'),
(15, 'FAAY@GMAIL.COM'),
(16, 'FAAY@GMAIL.COM'),
(17, 'faysalkabir573@gmail.com'),
(18, 'chuya13142@gmail.com'),
(19, 'faysalkabir573@gmail.com'),
(20, 'faysalkabir573@gmail.com'),
(21, 'faysalkabir573@gmail.com'),
(22, 'faysalkabir573@gmail.com'),
(23, 'dsfdfdsf@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comments_post_id` (`post_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `customize_header`
--
ALTER TABLE `customize_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `furniture_product`
--
ALTER TABLE `furniture_product`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_list`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_reviews_post_id` (`review_id`);

--
-- Indexes for table `sample`
--
ALTER TABLE `sample`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `sample_req_type`
--
ALTER TABLE `sample_req_type`
  ADD PRIMARY KEY (`DK-SN`);

--
-- Indexes for table `slider_images`
--
ALTER TABLE `slider_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `furniture_product`
--
ALTER TABLE `furniture_product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `order_id` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_list` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sample`
--
ALTER TABLE `sample`
  MODIFY `Id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `sample_req_type`
--
ALTER TABLE `sample_req_type`
  MODIFY `DK-SN` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider_images`
--
ALTER TABLE `slider_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_comments_post_id` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_list`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
