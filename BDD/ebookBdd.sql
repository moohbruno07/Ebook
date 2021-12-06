-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2021 at 02:59 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minprjct`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id_a` int(10) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(60) NOT NULL,
  `state` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id_a`, `email`, `password`, `state`) VALUES
(1, 'aymen@gmail.com', '1111', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

CREATE TABLE `basket` (
  `id_basket` int(10) NOT NULL,
  `id_b` int(10) NOT NULL,
  `pic_b` varchar(30) NOT NULL,
  `title` varchar(20) NOT NULL,
  `prix` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id_bil` int(10) NOT NULL,
  `price_t` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id_b` int(10) NOT NULL,
  `title` varchar(20) NOT NULL,
  `writer` varchar(20) NOT NULL,
  `nbr_pg` int(3) NOT NULL,
  `prix` int(5) NOT NULL,
  `pic_b` varchar(30) NOT NULL,
  `basket` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id_b`, `title`, `writer`, `nbr_pg`, `prix`, `pic_b`, `basket`) VALUES
(3, 'Cowboy Country', 'Chris Sandford', 159, 2000, 'book10.png', 1),
(2, 'Evil Under The Sun', 'Agatha Christe', 360, 3600, 'book2.png', 1),
(1, 'The Body In Library', 'Agatha Christe', 360, 3100, 'book1.png', 1),
(4, 'Dracula', 'Braw Stoker', 233, 1400, 'book13.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `book_c`
--

CREATE TABLE `book_c` (
  `id_bc` int(11) NOT NULL,
  `category_code` int(11) NOT NULL,
  `id_book` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book_c`
--

INSERT INTO `book_c` (`id_bc`, `category_code`, `id_book`) VALUES
(1, 3, 2),
(2, 5, 4),
(3, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE `commande` (
  `id_cmd` int(10) NOT NULL,
  `id_b` int(10) NOT NULL,
  `qut` int(10) NOT NULL,
  `ccp` int(20) NOT NULL,
  `addrs` varchar(50) NOT NULL,
  `id_p` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_c` int(10) NOT NULL,
  `id_m` int(10) NOT NULL,
  `id_w` int(10) NOT NULL,
  `id_b` int(10) NOT NULL,
  `text_c` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE `evaluation` (
  `id_e` int(10) NOT NULL,
  `id_w` int(10) NOT NULL,
  `id_m` int(10) NOT NULL,
  `id_b` int(10) NOT NULL,
  `nbr_e` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluation`
--

INSERT INTO `evaluation` (`id_e`, `id_w`, `id_m`, `id_b`, `nbr_e`) VALUES
(1, 1, 1, 1, 8),
(2, 1, 1, 2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `gategory`
--

CREATE TABLE `gategory` (
  `id_g` int(10) NOT NULL,
  `name_g` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gategory`
--

INSERT INTO `gategory` (`id_g`, `name_g`) VALUES
(1, 'Romance'),
(2, 'Fairy Tales'),
(3, 'Mystrey'),
(4, 'Science'),
(5, 'Fiction'),
(6, 'Sport'),
(7, 'Computer Science'),
(8, 'History'),
(9, 'Coocking');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_m` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `fav_writer` varchar(20) NOT NULL,
  `typecompte` varchar(15) NOT NULL,
  `pic` varchar(30) NOT NULL COMMENT 'img/',
  `romance` int(11) NOT NULL DEFAULT 0,
  `computerscience` int(11) NOT NULL DEFAULT 0,
  `coocking` int(11) NOT NULL DEFAULT 0,
  `sport` int(11) NOT NULL DEFAULT 0,
  `science` int(11) NOT NULL DEFAULT 0,
  `history` int(11) NOT NULL DEFAULT 0,
  `fiction` int(11) NOT NULL DEFAULT 0,
  `mystrey` int(11) NOT NULL DEFAULT 0,
  `fairytales` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_m`, `name`, `password`, `email`, `fav_writer`, `typecompte`, `pic`, `romance`, `computerscience`, `coocking`, `sport`, `science`, `history`, `fiction`, `mystrey`, `fairytales`) VALUES
(65, 'azeeza', '123', 'zaeza@m.com', 'zaeazeza', 'member', 'favicon.ico', 1, 0, 0, 0, 0, 0, 0, 0, 0),
(75, 'aymen', '0000', 'aymen07@gmail.com', 'hero', 'member', 'IMG20190707134613.jpg', 1, 0, 0, 0, 0, 0, 0, 0, 0),
(76, 'aymen', '0000', 'aymen07@gmail.com', 'hero', 'member', 'IMG20190707134613.jpg', 0, 0, 0, 0, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id_r` int(10) NOT NULL,
  `id_w` int(10) NOT NULL,
  `id_b` int(10) NOT NULL,
  `text_r` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `writer`
--

CREATE TABLE `writer` (
  `id_w` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `typecompt` varchar(15) NOT NULL,
  `pic` varchar(30) NOT NULL,
  `romance` int(2) NOT NULL,
  `computerscience` int(2) NOT NULL,
  `coocking` int(2) NOT NULL,
  `sport` int(2) NOT NULL,
  `science` int(2) NOT NULL,
  `history` int(2) NOT NULL,
  `fiction` int(2) NOT NULL,
  `mystrey` int(2) NOT NULL,
  `fairytales` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_a`);

--
-- Indexes for table `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id_basket`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id_bil`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id_b`);

--
-- Indexes for table `book_c`
--
ALTER TABLE `book_c`
  ADD PRIMARY KEY (`id_bc`);

--
-- Indexes for table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_cmd`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_c`);

--
-- Indexes for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`id_e`);

--
-- Indexes for table `gategory`
--
ALTER TABLE `gategory`
  ADD PRIMARY KEY (`id_g`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_m`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_r`);

--
-- Indexes for table `writer`
--
ALTER TABLE `writer`
  ADD PRIMARY KEY (`id_w`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id_a` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `basket`
--
ALTER TABLE `basket`
  MODIFY `id_basket` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id_bil` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id_b` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `book_c`
--
ALTER TABLE `book_c`
  MODIFY `id_bc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_cmd` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_c` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `evaluation`
--
ALTER TABLE `evaluation`
  MODIFY `id_e` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gategory`
--
ALTER TABLE `gategory`
  MODIFY `id_g` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_m` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_r` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `writer`
--
ALTER TABLE `writer`
  MODIFY `id_w` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
