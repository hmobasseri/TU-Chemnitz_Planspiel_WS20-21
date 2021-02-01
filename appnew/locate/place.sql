-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2021 at 11:07 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `places`
--

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `id` int(10) NOT NULL,
  `p_type` varchar(200) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_address` varchar(200) NOT NULL,
  `p_city` varchar(200) NOT NULL,
  `p_state` varchar(200) NOT NULL,
  `postcode` varchar(200) NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL,
  `p_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`id`, `p_type`, `p_name`, `p_address`, `p_city`, `p_state`, `postcode`, `lat`, `lng`, `p_image`) VALUES
(1, 'Historical Places', 'Wasserschloss Klaffenbach', 'Wasserschloßweg 6, 09123 Chemnitz, Germany', 'Chemnitz', 'Saxony', '09123', 50.7709, 12.897, 'images/histroy1.jpg'),
(2, 'Historical Places', 'Burg Rabenstein', 'Oberfrohnaer Str. 149, 09117 Chemnitz, Germany', 'Chemnitz', 'Sachsen', '09117', 50.8336, 12.8196, 'images/histroy2.jpg'),
(3, 'Historical Places', 'Schloßkirche Chemnitz', 'Schloßberg 11, 09113 Chemnitz, Germany', 'Chemnitz', 'Saxony', '09113', 50.8458, 12.917, 'images/histroy3.jpg'),
(4, 'Historical Places', 'Villa Esche', 'Parkstraße 58, 09120 Chemnitz, Germany', 'Chemnitz', 'Saxony', '09120', 50.8152, 12.9008, 'images/histroy4.jpg'),
(5, 'Historical Places', 'Roter Turm', 'Str. der Nationen 3, 09111 Chemnitz, Germany', 'Chemnitz', 'Saxony', '09111', 50.8343, 12.9216, 'images/histroy5.jpg'),
(6, 'Historical Places', 'Chemnitzer Opernhaus', 'Theaterpl. 2, 09111 Chemnitz, Germany', 'Chemnitz', 'Saxony', '09111', 50.8383, 12.9249, 'images/histroy6.jpg'),
(7, 'Tourism', 'Chemnitzer Doppelrathaus', 'Markt 1, 09111 Chemnitz, Germany', 'Chemnitz', 'Saxony', '09111', 50.8327, 12.9191, 'images/tourist1.jpg'),
(8, 'Tourism', 'Kaßberg', 'Kaßberg Chemnitz, Germany', 'Chemnitz', 'Saxony', '09112', 50.8336, 12.9015, 'images/tourist2.jpg'),
(9, 'Tourism', 'Karl-Marx-Monument', 'Brückenstraße 10, 09111 Chemnitz, Germany', 'Chemnitz', 'Saxony', '09111', 50.8361, 12.9237, 'images/tourist3.jpg'),
(10, 'Tourism', 'Chemnitz-Zentrum', 'Zentrum, 09111 Chemnitz, Germany', 'Chemnitz', 'Saxony', '09111', 50.8365, 12.9238, 'images/tourist4.jpg'),
(11, 'Nature', 'Chemnitz Zoo', 'Nevoigtstraße 18, 09117 Chemnitz, Germany', 'Chemnitz', 'Saxony', '09117', 50.8188, 12.8361, 'images/nature1.jpg'),
(12, 'Nature', 'Botanischer Garten Chemnitz', 'Leipziger Str. 147, 09114 Chemnitz, Germany, Germany', 'Chemnitz', 'Saxony', '09114', 50.852, 12.8979, 'images/nature2.jpg'),
(13, 'Tourism', 'Alvin - Der größte Räuchermann der Welt', 'Pelzmühlenstraße 17, 09117 Chemnitz, Germany', 'Chemnitz', 'Saxony', '09117', 50.8187, 12.8333, 'images/tourist5.jpg'),
(14, 'Nature', 'kleiner Park', 'kleiner Park, 09117 Chemnitz, Germany', 'Chemnitz', 'Saxony', '09117', 50.8197, 12.8295, 'images/nature3.jpg'),
(15, 'Nature', '\"Alte Ziegelei\" Reichenbrand', 'Rabensteiner Str. 28, 09117 Chemnitz, Germany', 'Chemnitz', 'Saxony', '09117', 50.8174, 12.8215, 'images/nature4.jpg'),
(16, 'Nature', 'Stärker Wald', 'Stärker Wald, 09117 Chemnitz, Germany', 'Chemnitz', 'Saxony', '09117', 50.7981, 12.8255, 'images/nature5.jpg'),
(17, 'Nature', 'Frischbornquelle', 'Frischbornweg, 09114 Chemnitz, Germany', 'Chemnitz', 'Saxony', '09114', 50.8504, 12.8818, 'images/nature6.jpg'),
(18, 'Nature', 'Crimmitschauer Wald', '09114, Uhlscher Weg, 09114 Chemnitz, Germany', 'Chemnitz', 'Saxony', '09114', 50.8497, 12.8839, 'images/nature7.jpg'),
(19, 'Park & Garden', 'Stadt Park', 'Parkstraße 10, 09120 Chemnitz, Germany', 'Chemnitz', 'Saxony', '09120', 50.823, 12.9143, 'images/park1.jpg'),
(20, 'Park & Garden', 'Stadt Park', 'Helbersdorfer Str. 180, 09120 Chemnitz, Germany', 'Chemnitz', 'Saxony', '09120', 50.7981, 12.9065, 'images/park2.jpg'),
(21, 'Water Side', 'Steinbruch Zeisigwald', 'Weißer Weg 180, 09131 Chemnitz, Germany', 'Chemnitz', 'Saxony', '09131', 50.8507, 12.978, 'images/waterside1.jpg'),
(22, 'Water Side', 'Wasserwerks Park', 'Erfenschlager Str. 34, 09125 Chemnitz, Germany', 'Chemnitz', 'Saxony', '09125', 50.7922, 12.9359, 'images/waterside2.jpg'),
(23, 'Park & Garden', 'Park auf dem Kaßberg', '09112 Chemnitz, Germany', 'Chemnitz', 'Saxony', '09112', 50.8303, 12.9026, 'images/park3.jpg'),
(24, 'Park & Garden', 'Bodelschwingh Park', '09116 Chemnitz, Germany', 'Chemnitz', 'Saxony', '09116', 50.8325, 12.8923, 'images/park4.jpg'),
(25, 'Museum', 'Staatliches Museum für Archäologie Chemnitz', 'Stefan-Heym-Platz 1, 09111 Chemnitz, Germany', 'Chemnitz', 'Saxony', '09111', 50.8344, 12.9265, 'images/museum1.jpg'),
(26, 'Memorial Park', 'Ehrenhain der Sozialisten', 'Wartburgstraße 38, 09126 Chemnitz, Germany', 'Chemnitz', 'Saxony', '09126', 50.8148, 12.937, 'images/mpark1.jpg'),
(27, 'Tourism', 'Landesdirektion Saxony, office Chemnitz', 'Altchemnitzer Str. 41, 09120 Chemnitz, Germany', 'Chemnitz', 'Saxony', '09120', 50.8168, 12.9186, 'images/tourist6.jpg'),
(28, 'Museum', 'Museum of Saxon vehicles e.V.', 'Zwickauer Str. 77, 09112 Chemnitz, Germany', 'Chemnitz', 'Saxony', '09112', 50.8269, 12.9104, 'images/museum2.jpg'),
(29, 'Zoo', 'Zoo Dresden', 'Tiergartenstraße 1, 01219 Dresden, Germany', 'Dresden', 'Saxony', '01219', 51.0377, 13.7552, 'images/zoo1.jpg'),
(30, 'Heritage Reserve', 'Monopteros im Abtnaundorfer Park', 'Abtnaundorfer Straße/Heiterblickstraße, 04347 Leipzig, Germany', 'Leipzig', 'Sachsen', '04347', 51.3688, 12.4169, 'images/reserve1.jpg'),
(31, 'Forest', 'Leipzig Riverside Forest', 'Waldstraße 175, 04105 Leipzig, Germany', 'Leipzig', 'Saxony', '04105', 51.3537, 12.3573, 'images/forest1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
