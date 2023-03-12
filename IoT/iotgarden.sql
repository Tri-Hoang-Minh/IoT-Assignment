-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 02:56 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iotgarden`
--

-- --------------------------------------------------------

--
-- Table structure for table `auto`
--

CREATE TABLE `auto` (
  `Temperature1` int(11) NOT NULL,
  `Temperature2` int(11) NOT NULL,
  `Humidity1` int(11) NOT NULL,
  `Humidity2` int(11) NOT NULL,
  `Light1` int(11) NOT NULL,
  `Light2` int(11) NOT NULL,
  `Mois1` int(11) NOT NULL,
  `Mois2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auto`
--

INSERT INTO `auto` (`Temperature1`, `Temperature2`, `Humidity1`, `Humidity2`, `Light1`, `Light2`, `Mois1`, `Mois2`) VALUES
(25, 1, 95, 1, 200, 1, 80, 1);

-- --------------------------------------------------------

--
-- Table structure for table `control`
--

CREATE TABLE `control` (
  `Den1` int(11) NOT NULL,
  `Den2` int(11) NOT NULL,
  `Bom1` int(11) NOT NULL,
  `Bom2` int(11) NOT NULL,
  `Ps1` int(11) NOT NULL,
  `Ps2` int(11) NOT NULL,
  `Rc1` int(11) NOT NULL,
  `Rc2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `control`
--

INSERT INTO `control` (`Den1`, `Den2`, `Bom1`, `Bom2`, `Ps1`, `Ps2`, `Rc1`, `Rc2`) VALUES
(0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `display`
--

CREATE TABLE `display` (
  `Temperature1` int(11) NOT NULL,
  `Temperature2` int(11) NOT NULL,
  `Humidity1` int(11) NOT NULL,
  `Humidity2` int(11) NOT NULL,
  `Light1` int(11) NOT NULL,
  `Light2` int(11) NOT NULL,
  `Mois1` int(11) NOT NULL,
  `Mois2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `display`
--

INSERT INTO `display` (`Temperature1`, `Temperature2`, `Humidity1`, `Humidity2`, `Light1`, `Light2`, `Mois1`, `Mois2`) VALUES
(30, 35, 90, 20, 1000, 10, 100, 10);

-- --------------------------------------------------------

--
-- Table structure for table `humidity1`
--

CREATE TABLE `humidity1` (
  `id` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `humidity2`
--

CREATE TABLE `humidity2` (
  `id` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `id1`
--

CREATE TABLE `id1` (
  `id1` int(11) NOT NULL,
  `id2` int(11) NOT NULL,
  `id3` int(11) NOT NULL,
  `id4` int(11) NOT NULL,
  `id5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `id2`
--

CREATE TABLE `id2` (
  `id1` int(11) NOT NULL,
  `id2` int(11) NOT NULL,
  `id3` int(11) NOT NULL,
  `id4` int(11) NOT NULL,
  `id5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `id3`
--

CREATE TABLE `id3` (
  `id1` int(11) NOT NULL,
  `id2` int(11) NOT NULL,
  `id3` int(11) NOT NULL,
  `id4` int(11) NOT NULL,
  `id5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `id4`
--

CREATE TABLE `id4` (
  `id1` int(11) NOT NULL,
  `id2` int(11) NOT NULL,
  `id3` int(11) NOT NULL,
  `id4` int(11) NOT NULL,
  `id5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `id5`
--

CREATE TABLE `id5` (
  `id1` int(11) NOT NULL,
  `id2` int(11) NOT NULL,
  `id3` int(11) NOT NULL,
  `id4` int(11) NOT NULL,
  `id5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `id6`
--

CREATE TABLE `id6` (
  `id1` int(11) NOT NULL,
  `id2` int(11) NOT NULL,
  `id3` int(11) NOT NULL,
  `id4` int(11) NOT NULL,
  `id5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `id7`
--

CREATE TABLE `id7` (
  `id1` int(11) NOT NULL,
  `id2` int(11) NOT NULL,
  `id3` int(11) NOT NULL,
  `id4` int(11) NOT NULL,
  `id5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `id8`
--

CREATE TABLE `id8` (
  `id1` int(11) NOT NULL,
  `id2` int(11) NOT NULL,
  `id3` int(11) NOT NULL,
  `id4` int(11) NOT NULL,
  `id5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `light1`
--

CREATE TABLE `light1` (
  `id` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `light1`
--

INSERT INTO `light1` (`id`, `value`, `date`) VALUES
(0, 30, '2023-01-03 08:53:27'),
(1, 30, '2023-01-03 08:53:27');

-- --------------------------------------------------------

--
-- Table structure for table `light2`
--

CREATE TABLE `light2` (
  `id` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `light2`
--

INSERT INTO `light2` (`id`, `value`, `date`) VALUES
(0, 30, '2023-01-03 08:53:27'),
(1, 30, '2023-01-03 08:53:27');

-- --------------------------------------------------------

--
-- Table structure for table `mode`
--

CREATE TABLE `mode` (
  `Mode1` int(11) NOT NULL,
  `Mode2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mois1`
--

CREATE TABLE `mois1` (
  `id` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mois1`
--

INSERT INTO `mois1` (`id`, `value`, `date`) VALUES
(0, 30, '2023-01-03 08:53:27'),
(1, 30, '2023-01-03 08:53:27');

-- --------------------------------------------------------

--
-- Table structure for table `mois2`
--

CREATE TABLE `mois2` (
  `id` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mois2`
--

INSERT INTO `mois2` (`id`, `value`, `date`) VALUES
(0, 30, '2023-01-03 08:53:27'),
(1, 30, '2023-01-03 08:53:27');

-- --------------------------------------------------------

--
-- Table structure for table `schedule1`
--

CREATE TABLE `schedule1` (
  `id` int(11) NOT NULL,
  `date_start` datetime NOT NULL,
  `date_stop` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule1`
--

INSERT INTO `schedule1` (`id`, `date_start`, `date_stop`) VALUES
(0, '2023-01-03 00:00:00', '2023-01-03 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `schedule2`
--

CREATE TABLE `schedule2` (
  `id` int(11) NOT NULL,
  `date_start` date NOT NULL,
  `date_stop` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `schedule3`
--

CREATE TABLE `schedule3` (
  `id` int(11) NOT NULL,
  `date_start` date NOT NULL,
  `date_stop` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `schedule4`
--

CREATE TABLE `schedule4` (
  `id` int(11) NOT NULL,
  `date_start` date NOT NULL,
  `date_stop` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `schedule5`
--

CREATE TABLE `schedule5` (
  `id` int(11) NOT NULL,
  `date_start` date NOT NULL,
  `date_stop` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `schedule6`
--

CREATE TABLE `schedule6` (
  `id` int(11) NOT NULL,
  `date_start` date NOT NULL,
  `date_stop` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `schedule7`
--

CREATE TABLE `schedule7` (
  `id` int(11) NOT NULL,
  `date_start` date NOT NULL,
  `date_stop` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `schedule8`
--

CREATE TABLE `schedule8` (
  `id` int(11) NOT NULL,
  `date_start` date NOT NULL,
  `date_stop` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `Den1` int(11) NOT NULL,
  `Ps1` int(11) NOT NULL,
  `Bom1` int(11) NOT NULL,
  `Rc1` int(11) NOT NULL,
  `Den2` int(11) NOT NULL,
  `Ps2` int(11) NOT NULL,
  `Bom2` int(11) NOT NULL,
  `Rc2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`Den1`, `Ps1`, `Bom1`, `Rc1`, `Den2`, `Ps2`, `Bom2`, `Rc2`) VALUES
(0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `temperature1`
--

CREATE TABLE `temperature1` (
  `id` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temperature1`
--

INSERT INTO `temperature1` (`id`, `value`, `date`) VALUES
(0, 30, '2023-01-03 08:53:27'),
(1, 30, '2023-01-03 08:53:27');

-- --------------------------------------------------------

--
-- Table structure for table `temperature2`
--

CREATE TABLE `temperature2` (
  `id` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('admin', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
