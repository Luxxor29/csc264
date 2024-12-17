-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2024 at 09:33 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appletravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(9) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `picture`) VALUES
(1, 'admin', '123', 'admin@example.com', 'adminpic/admin1.jpg'),
(2, 'admin2', '11', 'admin2@gmail.com', 'adminpic/admin2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `BOOKING_ID` int(5) NOT NULL,
  `BOOKING_DATE` date NOT NULL,
  `PACKAGE_ID` int(5) NOT NULL,
  `PAX` int(5) NOT NULL,
  `DEPARTURE_DATE` date NOT NULL,
  `RETURN_DATE` date NOT NULL,
  `TOTAL_PRICE` decimal(7,2) NOT NULL,
  `USER_ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`BOOKING_ID`, `BOOKING_DATE`, `PACKAGE_ID`, `PAX`, `DEPARTURE_DATE`, `RETURN_DATE`, `TOTAL_PRICE`, `USER_ID`) VALUES
(1, '2024-12-17', 2, 2, '2024-12-24', '2024-12-29', 2600.00, 1),
(2, '2024-12-17', 2, 2, '2024-12-24', '2024-12-29', 2600.00, 1),
(3, '2024-12-17', 2, 2, '2024-12-24', '2024-12-29', 2600.00, 1),
(4, '2024-12-17', 18, 5, '2025-04-10', '2025-04-17', 56000.00, 4),
(5, '2024-12-17', 8, 1, '2025-06-10', '2025-06-13', 744.00, 1),
(6, '2024-12-17', 11, 2, '2025-04-01', '2025-04-07', 1418.00, 11);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `PACKAGE_ID` int(11) NOT NULL,
  `PACKAGE_NAME` varchar(40) NOT NULL,
  `PACKAGE_DESC` varchar(255) NOT NULL,
  `PACKAGE_PRICE` double(9,2) NOT NULL,
  `PACKAGE_DURATION` varchar(50) NOT NULL,
  `PACKAGE_AVAILABILITY` enum('Available','Not Available') NOT NULL,
  `PACKAGE_DATE` date DEFAULT NULL,
  `PACKAGE_IMG_PATH` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`PACKAGE_ID`, `PACKAGE_NAME`, `PACKAGE_DESC`, `PACKAGE_PRICE`, `PACKAGE_DURATION`, `PACKAGE_AVAILABILITY`, `PACKAGE_DATE`, `PACKAGE_IMG_PATH`) VALUES
(1, 'Antarctica', 'Discover the pristine beauty of glaciers, penguins, and untouched wilderness at the Earth\'s southernmost point.', 46000.00, '13D12N', 'Available', '2025-09-27', 'packagepic/antartica.jpg'),
(2, 'Bali', 'Experience tropical paradise with stunning beaches, vibrant culture, and lush green landscapes.', 1300.00, '4D2N', 'Available', '2024-12-24', 'packagepic/bali.jpg'),
(3, 'Cartagena', 'Explore this colorful Colombian city with its colonial architecture, rich history, and Caribbean charm.', 3040.00, '3D2N', 'Available', '2025-02-13', 'packagepic/cartagena.jpg'),
(4, 'Dongdaemun', 'Dive into Seoul\'s bustling fashion and shopping district, blending tradition with modernity.', 9050.00, '6D4N', 'Available', '2025-05-23', 'packagepic/dongdaemun.jpg'),
(5, 'Dubai', 'Indulge in luxury, futuristic skyscrapers, and desert adventures in the heart of the UAE.', 7870.00, '4D2N', 'Available', '2025-02-20', 'packagepic/dubai.jpg'),
(6, 'Egypt', 'Uncover ancient wonders, including the Pyramids of Giza and the Nile’s timeless allure.', 34800.00, '12D11N', 'Available', '2025-02-21', 'packagepic/egypt.jpeg'),
(7, 'Europe ', 'Embark on a journey through diverse cultures, historic landmarks, and breathtaking landscapes.', 704.00, '1D1N', 'Available', '2025-04-23', 'packagepic/europe.jpg'),
(8, 'Fuji', 'Admire the iconic Mount Fuji and its serene surroundings, a symbol of Japan\'s natural beauty', 744.00, '2D1N', 'Available', '2025-06-10', 'packagepic/fuji.jpg'),
(9, 'Gyeongbokgung', 'Step back in time at this majestic Korean palace, showcasing royal history and traditional architecture', 846.00, '4D3N', 'Available', '2024-12-18', 'packagepic/gyeongbokgung.jpg'),
(10, 'Kinabalu', 'Climb the majestic Mount Kinabalu and explore its rich biodiversity in Malaysian Borneo.', 264.00, '1D1N', 'Available', '2025-07-17', 'packagepic/kinabalu.jpeg'),
(11, 'London', 'Discover the vibrant blend of history, culture, and modern life in the UK’s capital.', 709.00, '5D3N', 'Available', '2025-04-01', 'packagepic/london.jpg'),
(12, 'Melbourne', 'Enjoy the cultural capital of Australia with its art, coffee, and stunning coastal drives.', 15020.00, '5D3N', 'Available', '2025-04-17', 'packagepic/melbourne.jpg'),
(13, 'Rome', 'Walk through history in the Eternal City, home to the Colosseum and Vatican treasures.', 13810.00, '5D3N', 'Available', '2025-08-15', 'packagepic/rome.jpg'),
(14, 'San Francisco', 'Experience the charm of this Californian city with its iconic Golden Gate Bridge and cable cars.', 15740.00, '6D4N', 'Available', '2025-04-19', 'packagepic/sanfrancisco.jpg'),
(15, 'Santorini', 'Relax in Greece’s picturesque island, famed for its whitewashed buildings and stunning sunsets.', 11690.00, '4D2N', 'Available', '2025-02-22', 'packagepic/santorini.jpg'),
(16, 'Sydney', 'Explore Australia’s harbor city with its Opera House, beautiful beaches, and vibrant lifestyle.', 15050.00, '6D4N', 'Available', '2025-05-28', 'packagepic/sydney.jpg'),
(17, 'Taj Mahal (India)', 'Witness the architectural wonder and symbol of eternal love in India’s Agra.\r\n', 8100.00, '4D2N', 'Available', '2025-04-15', 'packagepic/tajmahal.jpg'),
(18, 'Great Wall of China', 'Walk along this ancient marvel that stretches across breathtaking landscapes.', 11200.00, '6D4N', 'Available', '2025-04-10', 'packagepic/wallchina.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PAYMENT_ID` int(3) NOT NULL,
  `FINAL_PRICE` double(9,2) NOT NULL,
  `PAYMENT_DATE` date NOT NULL,
  `BOOKING_ID` int(3) NOT NULL,
  `PAYMENT_STATUS` enum('PAID','IN PROCESS','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PAYMENT_ID`, `FINAL_PRICE`, `PAYMENT_DATE`, `BOOKING_ID`, `PAYMENT_STATUS`) VALUES
(1, 2600.00, '2024-12-18', 2, 'PAID'),
(2, 2600.00, '2024-12-18', 3, 'PAID'),
(3, 56000.00, '2024-12-18', 4, 'PAID'),
(4, 744.00, '2024-12-18', 5, 'PAID'),
(5, 1418.00, '2024-12-18', 6, 'PAID');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(9) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(1, 'ATHIRAH', 'c20ad4d76fe97759aa27a0c99bff6710', 'athirah@gmail.com'),
(2, 'ALYA', 'c20ad4d76fe97759aa27a0c99bff6710', 'alya@gmail.com'),
(3, 'FATIN', 'c20ad4d76fe97759aa27a0c99bff6710', 'fatin@gmail.com'),
(4, 'LUQ', 'c20ad4d76fe97759aa27a0c99bff6710', 'luqman@gmail.com'),
(5, 'IQMAL', 'c20ad4d76fe97759aa27a0c99bff6710', 'iqmal@gmail.com'),
(6, 'H666', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'harith666@gmail.com'),
(7, 'Hafiz0', 'c1576b545a2eaca25de49f6112298166', 'abdulhafiz@gmail.com'),
(8, 'AKMAL', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'akmalfauzan@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`BOOKING_ID`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`PACKAGE_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PAYMENT_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `BOOKING_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `PACKAGE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PAYMENT_ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
