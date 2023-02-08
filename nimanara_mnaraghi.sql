-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 07, 2023 at 10:15 AM
-- Server version: 5.7.40-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nimanara_mnaraghi`
--

-- --------------------------------------------------------

--
-- Table structure for table `artwork`
--

CREATE TABLE `artwork` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `width` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `theme_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `style_id` int(11) DEFAULT NULL,
  `technic_id` int(11) DEFAULT NULL,
  `description` text COLLATE utf8_persian_ci,
  `view` int(11) NOT NULL DEFAULT '0',
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `featured` smallint(6) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `artwork`
--

INSERT INTO `artwork` (`id`, `title`, `code`, `width`, `height`, `theme_id`, `category_id`, `style_id`, `technic_id`, `description`, `view`, `created_at`, `updated_at`, `status`, `featured`) VALUES
(1, '', NULL, 50, 70, 1, 1, 1, 1, '', 0, 1464793351, 1467392317, 0, 1),
(2, '', NULL, 30, 40, 4, 1, 6, 1, '', 3, 1464874712, 1467392320, 0, 1),
(3, '', NULL, 30, 24, 6, 1, 4, 1, '', 0, 1464874881, 1467392321, 0, 1),
(4, '', NULL, 30, 40, 1, 1, 7, 1, '', 0, 1464875130, 1467392322, 0, 1),
(5, '', NULL, 30, 40, 2, 1, 7, 1, '', 1, 1464875268, 1467392325, 0, 1),
(6, '', NULL, 40, 30, 6, 1, 6, 1, '', 0, 1464875421, 1467392325, 0, 0),
(7, '', NULL, 30, 40, 6, 1, 1, 1, '', 0, 1464875549, 1467392330, 0, 0),
(8, '', 1601, 70, 70, 3, 1, 7, 1, '', 2, 1467392381, 1467395521, 1, 0),
(9, '', 1602, 32, 32, 3, 1, 7, 1, '', 3, 1467392410, 1467395595, 1, 0),
(10, '', 1603, 70, 70, 3, 1, 7, 1, '', 1, 1467392444, 1467395645, 1, 0),
(11, '', 1604, 70, 70, 3, 1, 7, 1, '', 2, 1467392517, 1467395706, 1, 0),
(12, '', 1605, 80, 80, 3, 1, 7, 1, '', 2, 1467392554, 1467395770, 1, 0),
(13, '', 1606, 80, 80, 3, 1, 7, 1, '', 0, 1467392635, 1467395814, 1, 0),
(14, '', 1607, 80, 80, 3, 1, 7, 1, '', 1, 1467392671, 1467395868, 1, 0),
(15, '', 1608, 70, 70, 3, 1, 7, 1, '', 2, 1467392744, 1467405502, 1, 0),
(16, '', 1609, 70, 70, 3, 1, 7, 1, '', 1, 1467392775, 1467405550, 1, 0),
(17, '', 1610, 70, 50, 3, 1, 7, 1, '', 3, 1467392821, 1467405951, 1, 0),
(18, '', 1611, 70, 50, 3, 1, 7, 1, '', 1, 1467392842, 1467405916, 1, 1),
(19, '', 1612, 70, 50, 3, 1, 7, 1, '', 0, 1467392870, 1467407397, 1, 1),
(20, '', 1613, 70, 50, 3, 1, 7, 1, '', 1, 1467392900, 1467406036, 1, 1),
(21, '', 1614, 70, 50, 3, 1, 7, 1, '', 2, 1467392925, 1467406112, 1, 0),
(22, '', 1615, 70, 50, 3, 1, 7, 1, '', 1, 1467392953, 1467406157, 1, 1),
(23, '', 1616, 70, 50, 3, 1, 7, 1, '', 0, 1467392997, 1467406211, 1, 0),
(24, '', 1617, 70, 50, 3, 1, 7, 1, '', 1, 1467393024, 1467406248, 1, 0),
(25, '', 1618, 25, 25, 3, 1, 7, 1, '', 0, 1467393078, 1467406295, 1, 0),
(26, '', 1619, 18, 36, 3, 1, 7, 1, '', 0, 1467393105, 1467406338, 1, 0),
(27, '', 1620, 24, 34, 3, 1, 7, 1, '', 0, 1467393135, 1467406405, 1, 0),
(28, '', 1621, 24, 34, 3, 1, 7, 1, '', 1, 1467393170, 1467407309, 1, 1),
(29, '', 1622, 13, 18, 3, 1, 7, 1, '', 1, 1467393204, 1467406687, 1, 0),
(30, '', 1623, 13, 18, 3, 1, 7, 1, '', 1, 1467393247, 1467406771, 1, 0),
(31, '', 1625, 40, 30, 3, 1, 7, 1, '', 0, 1467393279, 1467406846, 1, 0),
(33, '', 1624, 18, 24, 3, 1, 7, 1, '', 0, 1467393456, 1467409116, 1, 0),
(34, '', 1626, 100, 70, 3, 1, 7, 1, '', 1, 1469393395, 1469393395, 1, 1),
(35, '', 1627, 100, 50, 3, 1, 7, 1, '', 1, 1469393519, 1469393519, 1, 1),
(36, '', 1628, 100, 100, 3, 1, 7, 1, '', 4, 1469393608, 1469393632, 1, 1),
(37, '', 1629, 100, 100, 3, 1, 7, 1, '', 5, 1469393698, 1469393698, 1, 1),
(38, '', 1630, 100, 70, 3, 1, 7, 1, '', 9, 1471276271, 1471279057, 1, 1),
(39, '', 1631, NULL, NULL, 3, 1, NULL, 2, '', 0, 1480853562, 1480885040, 1, 0),
(40, '', 1632, 50, 50, 3, 1, 7, 1, '', 0, 1480853733, 1480885072, 1, 0),
(41, '', 1633, 20, 20, 3, 1, 7, 1, '', 1, 1480853797, 1480885205, 1, 0),
(42, '', 1634, 20, 20, 3, 1, 7, 1, '', 5, 1480853841, 1480885383, 1, 0),
(43, '', 1635, 20, 20, 3, 1, 7, 1, '', 1, 1480853931, 1480885345, 1, 0),
(44, '', 1636, 20, 20, 3, 1, 7, 1, '', 1, 1480853980, 1480885140, 1, 0),
(45, '', 1637, 30, 30, 3, 1, 7, 1, '', 8, 1480854042, 1480885109, 1, 0),
(46, '', 1638, 30, 30, 3, 1, 7, 1, '', 1, 1480854094, 1480885306, 1, 0),
(47, '', 1639, 30, 30, 3, 1, 7, 1, '', 1, 1480854206, 1480885275, 1, 0),
(48, '', 1640, 50, 50, 3, 1, 7, 1, '', 1, 1480854327, 1480885246, 1, 0),
(49, '', 1641, 30, 30, 1, 1, 7, 1, '', 1, 1480854413, 1480884937, 1, 0),
(50, 'Rain 11', 1642, 20, 20, 3, 1, 7, 1, '', 3, 1481923754, 1499037054, 1, 1),
(51, 'Rain 3', 1643, 20, 20, 3, 1, 7, 1, '', 1, 1481924263, 1499036955, 1, 0),
(52, 'Rain 4', 1644, 20, 20, 3, 1, 7, 1, '', 1, 1481924442, 1499036935, 1, 0),
(53, 'Rain 5', 1645, 20, 20, 3, 1, 7, 1, '', 2, 1481924878, 1499036915, 1, 0),
(54, 'Rain 6', 1646, 20, 20, 3, 1, 7, 1, '', 1, 1481925068, 1499036872, 1, 0),
(55, 'Rain 12', 1647, 20, 20, 3, 1, 7, 1, '', 2, 1481925182, 1499036828, 1, 0),
(56, 'Rain 13', 1648, 20, 20, 3, 1, 7, 1, '', 1, 1481925252, 1499036778, 1, 0),
(57, 'Rain 14', 1649, 20, 20, 3, 1, 7, 1, '', 1, 1481925338, 1499036633, 1, 0),
(58, 'Rain 16', 1650, 30, 30, 3, 1, 7, 1, '', 0, 1499034026, 1499036596, 1, 1),
(59, 'Rain 15', 1651, 30, 30, 3, 1, 7, 1, '', 0, 1499034104, 1499036444, 1, 0),
(60, 'Friends 2', 1652, 50, 50, 3, 1, 7, 1, '', 0, 1499034259, 1499036411, 1, 0),
(61, 'Uprising', 1653, 50, 50, 3, 1, 7, 1, '', 2, 1499034358, 1499036373, 1, 0),
(62, 'Rain 7', 1654, 50, 50, 3, 1, 7, 1, '', 0, 1499034501, 1499034501, 1, 0),
(63, 'Death 2', 1655, 50, 50, 3, 1, 7, 1, '', 0, 1499034627, 1499034627, 1, 0),
(64, 'Growth', 1656, 50, 50, 3, 1, 7, 1, '', 1, 1499034699, 1499034699, 1, 0),
(65, 'Memory', 1657, 20, 20, 3, 1, 7, 1, '', 2, 1499034798, 1499034798, 1, 0),
(66, 'Victory', 1658, 50, 50, 3, 1, 7, 1, '', 0, 1499034886, 1499034886, 1, 0),
(67, 'Good Days', 1659, 50, 50, 3, 1, 7, 1, '', 2, 1499034985, 1499036332, 1, 1),
(68, 'Flowers', 1660, 50, 50, 3, 1, 7, 1, '', 0, 1499035085, 1499035085, 1, 0),
(69, 'Death 1', 1661, 70, 70, 3, 1, 7, 1, '', 4, 1499035161, 1499036471, 1, 1),
(70, 'Sea', 1662, 50, 50, 3, 1, 7, 1, '', 0, 1499035228, 1499035228, 1, 0),
(71, 'Dream 1', 1663, 50, 50, 3, NULL, 7, 1, '', 0, 1499035287, 1499035287, 1, 0),
(72, 'Rain 18', 1664, 30, 30, 3, 1, 7, 1, '', 0, 1499035377, 1499035377, 1, 0),
(73, 'Rain 17', 1665, 30, 30, 3, 1, 7, 1, '', 4, 1499035456, 1499035456, 1, 0),
(74, 'Dream 2', 1666, 50, 50, 3, 1, 7, 1, '', 3, 1499035707, 1499036476, 1, 1),
(75, 'Hot Midnight', 1667, 50, 50, 3, 1, 7, 1, '', 4, 1499035781, 1566849478, 1, 1),
(76, 'Morning', 1668, 80, 80, 3, 1, 7, 1, '', 0, 1499035944, 1499036303, 0, 0),
(77, '', 1669, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 1551398488, 1551398619, 1, 0),
(78, '', 1670, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 1551398541, 1551398645, 1, 0),
(79, '', 1671, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 1551398576, 1551398662, 1, 0),
(80, '', 1672, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 1551398719, 1551398719, 1, 0),
(81, '', 1673, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 1551398767, 1551398767, 1, 0),
(82, '', 1674, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, 1551398825, 1551398825, 1, 0),
(83, '', 1675, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 1551398941, 1551398941, 1, 0),
(84, '', 1676, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 1551398988, 1551398988, 1, 0),
(85, '', 1677, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, 1551399063, 1551399582, 1, 0),
(86, '', 1678, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, 1551399466, 1551399582, 1, 0),
(87, '', 1679, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, 1551399525, 1551399525, 1, 0),
(88, '', 1680, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 1551399725, 1551399725, 1, 0),
(89, '', 1681, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, 1551399827, 1551399827, 1, 0),
(90, '', 1682, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 1551399868, 1551399868, 1, 0),
(91, '', 1683, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, 1551399954, 1551399954, 1, 0),
(92, '', 1684, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 1551400000, 1551400000, 1, 0),
(93, '', 1685, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, 1551400041, 1551400041, 1, 0),
(94, '', 1686, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 1551400160, 1551400160, 1, 0),
(95, '', 1687, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 1551400194, 1551400194, 1, 0),
(96, '', 1688, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 1551400229, 1551400229, 1, 0),
(97, '', 1689, NULL, NULL, NULL, NULL, NULL, NULL, '', 3, 1551400401, 1551400401, 1, 0),
(98, '', 1690, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, 1551400474, 1551400474, 1, 0),
(99, '', 1691, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, 1551400602, 1551400602, 1, 0),
(100, '', 1692, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 1551400644, 1551400644, 1, 0),
(101, '', 1693, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 1551400704, 1551400704, 1, 0),
(102, '', 1694, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, 1551400792, 1551400792, 1, 0),
(103, '', 1695, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, 1551400837, 1551400837, 1, 0),
(104, '', 1696, NULL, NULL, NULL, NULL, NULL, NULL, '', 3, 1551400893, 1551400893, 1, 0),
(105, '', 1697, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, 1551400925, 1551400925, 1, 0),
(106, '', 1698, NULL, NULL, NULL, NULL, NULL, NULL, '', 8, 1551401032, 1551401032, 1, 0),
(107, '', 1699, NULL, NULL, NULL, NULL, NULL, NULL, '', 3, 1551401075, 1551401075, 1, 0),
(108, '', 1700, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 1551401756, 1584945032, 1, 0),
(109, '', 1701, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 1603023611, 1603023641, 1, 1),
(110, '', 1702, NULL, NULL, NULL, NULL, NULL, NULL, '', 1, 1603023849, 1603023849, 1, 1),
(111, '', 1703, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 1603023945, 1603023945, 1, 1),
(112, '', 1704, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 1603023994, 1603023994, 1, 1),
(113, '', 1705, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 1603024032, 1603024032, 1, 1),
(114, '', 1706, 60, 30, NULL, NULL, NULL, NULL, '', 0, 1603024068, 1603024553, 1, 1),
(115, '', 1707, 60, 30, NULL, NULL, NULL, 1, '', 1, 1603024110, 1603024517, 1, 1),
(116, '', 1708, 60, 30, NULL, NULL, NULL, 1, '', 1, 1603024146, 1603024495, 1, 1),
(117, '', 1709, 60, 30, NULL, NULL, NULL, 1, '', 0, 1603024180, 1603024472, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `artwork_id` int(11) NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`artwork_id`, `order`) VALUES
(47, 1),
(85, 1),
(86, 1),
(99, 1),
(102, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`) VALUES
(1, 'Painting');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8_persian_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `style`
--

CREATE TABLE `style` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `style`
--

INSERT INTO `style` (`id`, `title`) VALUES
(1, 'Experssion'),
(2, 'Symbolism'),
(3, 'Fantasy'),
(4, 'Impressionism'),
(5, 'Art Deco'),
(6, 'Surrealism'),
(7, 'Abstract'),
(8, 'Realism');

-- --------------------------------------------------------

--
-- Table structure for table `technic`
--

CREATE TABLE `technic` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `technic`
--

INSERT INTO `technic` (`id`, `title`) VALUES
(1, 'Oil on Canvas'),
(2, 'Acrylic on Canvas');

-- --------------------------------------------------------

--
-- Table structure for table `theme`
--

CREATE TABLE `theme` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `theme`
--

INSERT INTO `theme` (`id`, `title`) VALUES
(1, 'Flower'),
(2, 'Nature'),
(3, 'Abstraction'),
(4, 'Imagination'),
(5, 'Water'),
(6, 'Tree');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artwork`
--
ALTER TABLE `artwork`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`artwork_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `style`
--
ALTER TABLE `style`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technic`
--
ALTER TABLE `technic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artwork`
--
ALTER TABLE `artwork`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `style`
--
ALTER TABLE `style`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `technic`
--
ALTER TABLE `technic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `theme`
--
ALTER TABLE `theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
