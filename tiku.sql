-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 06:36 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiku2`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `sinopsis` text DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `tanggal_rilis` date DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `judul`, `sinopsis`, `keterangan`, `tanggal_rilis`, `foto`) VALUES
(1, 'Frozen 2', 'Ditetapkan tiga tahun setelah peristiwa film pertama, ceritanya mengikuti Elsa, Anna, Kristoff, Olaf, dan Sven yang memulai perjalanan melampaui kerajaan Arendelle mereka untuk menemukan asal mula kekuatan magis Elsa dan menyelamatkan kerajaan mereka setelah suara misterius memanggil Elsa', '1 jam 43 menit', '2019-11-20', 'marvel.png'),
(2, 'FORD V FERRARI', 'Berdasarkan kisah nyata yang luar biasa dari Carroll Shelby, seorang perancang mobil visioner dari Amerika bersama Ken Miles, seorang pembalap Inggris yang tak kenal takut. Mereka bersama-sama berjuang menghadapi campur tangan perusahaan, undang-undang fisika, dan masalah pribadi mereka sendiri ketika membangun mobil balap revolusioner bagi Ford Motor Company untuk menantang mobil balap buatan Enzo Ferrari yang mendomniasi 24 Jam Le Mans di Perancis pada tahun 1966.', '2 jam 32 menit', '2019-11-15', 'now.jpg'),
(3, 'Habibie Ainun 3', '\"Suatu hari, kita akan bertemu kembali dalam dimensi yang lain,\" ucapnya sambil menatap mata dan menggenggam tangan Habibie.\"Saya merindukanmu,\" balas Habibie dalam bahasa Jerman.\r\n\r\nSetelahnya, adegan berganti tentang kehidupan Ainun yang bercita-cita meneruskan pendidikan di bidang kedokteran. Ainun menghadapi ragam tekanan tentang pilihan menjadi dokter yang dianggap sangsi untuk seorang wanita.\r\n\"Perasaan sentimentil perempuan yang dibalut oleh indra perasa yang lebih tajam dari laki-laki membuat ilmu kedokteran tidak cocok,\" ujar seorang pria kepada Ainun.\r\nNamun, Ainun kemudian kukuh melanjutkan keinginannya atas dukungan Habibie dan sang ayah yang diperankan Lukman Sardi.\r\n', '2 jam 12 menit', '2019-05-30', 'spiderman.png');

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `id_identitas` int(3) NOT NULL,
  `nik` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `usia` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id_identitas`, `nik`, `nama`, `usia`) VALUES
(1, '2147483647', 'Dian afriza', 20),
(2, '2147483647', 'Dian afriza', 20),
(3, '2147483647', 'Deni dian savitri', 22),
(4, '2147483647', 'Aviana astuti', 22),
(5, '3324116785', 'Bukan', 22),
(6, '3324116785', 'sopo', 21),
(7, '3324578902', 'Dian afriza', 22),
(8, '3324578902', 'Feri', 21),
(9, '3324578902', 'Aviana astuti', 21),
(10, '3324116785', 'Dandy aulia akbar', 22),
(11, '3324116785', 'Dian afriza', 22),
(12, '3324116785', 'Deni dian savitri', 22),
(13, '3324578902', 'Bukan', 21),
(14, '3324578902', 'Aviana astuti', 22),
(15, '3324578902', 'Deni dian savitri', 22),
(16, '3324116785', 'Saya sendiri', 21),
(17, '3324578902', 'Saya sendiri', 21),
(18, '3324116785', 'Saya sendiri', 21),
(19, '3324578701', 'yogi', 23),
(20, '112', 'Pertiwi', 21),
(21, '112', 'Pertiwi', 21),
(22, '112', 'hanny', 21),
(23, '112', 'Pertiwi', 21),
(24, '112', 'Pertiwi', 21),
(25, '112', 'Pertiwi', 21),
(26, '112', 'taufik', 21);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(15) NOT NULL,
  `jadwal` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `jadwal`) VALUES
(1, 'Siang'),
(2, 'Sore');

-- --------------------------------------------------------

--
-- Table structure for table `kursi`
--

CREATE TABLE `kursi` (
  `id_kursi` int(11) NOT NULL,
  `nokur` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kursi`
--

INSERT INTO `kursi` (`id_kursi`, `nokur`) VALUES
(1, 'A1'),
(2, 'A2'),
(3, 'A3'),
(4, 'A4'),
(5, 'B1'),
(6, 'B2'),
(7, 'B3'),
(8, 'B4'),
(9, 'C1'),
(10, 'C2'),
(11, 'C3'),
(12, 'C4'),
(13, 'D1'),
(14, 'D2'),
(15, 'D3'),
(16, 'D4'),
(17, 'E1'),
(18, 'E2'),
(19, 'E3'),
(20, 'E4');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_film` int(11) DEFAULT NULL,
  `tanggal_nonton` date DEFAULT NULL,
  `id_jadwal` int(11) DEFAULT NULL,
  `nokur` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_film`, `tanggal_nonton`, `id_jadwal`, `nokur`) VALUES
(59, 1, '2021-06-02', 2, 'E1'),
(60, 2, '2021-06-02', 2, 'C4'),
(61, 2, '2021-06-02', 2, 'C4'),
(62, 2, '2021-06-02', 2, 'C4'),
(63, 1, '2021-06-09', 1, 'E4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `kursi`
--
ALTER TABLE `kursi`
  ADD PRIMARY KEY (`id_kursi`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id_identitas` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
