-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 12, 2021 at 03:02 AM
-- Server version: 5.7.11
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dblatihan21`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbinput`
--

CREATE TABLE `tbinput` (
  `idx` int(255) NOT NULL,
  `kdskpd` varchar(255) DEFAULT NULL,
  `skpd` varchar(255) DEFAULT NULL,
  `nospp` varchar(255) DEFAULT NULL,
  `nilaispp` varchar(255) DEFAULT NULL,
  `nospm` varchar(255) DEFAULT NULL,
  `nilaispm` varchar(255) DEFAULT NULL,
  `tanggal` varchar(255) DEFAULT NULL,
  `jenispjk` varchar(255) DEFAULT NULL,
  `nilaipajak` varchar(255) DEFAULT NULL,
  `npwp` varchar(255) DEFAULT NULL,
  `idbilling` varchar(255) DEFAULT NULL,
  `ntpn` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbinput`
--

INSERT INTO `tbinput` (`idx`, `kdskpd`, `skpd`, `nospp`, `nilaispp`, `nospm`, `nilaispm`, `tanggal`, `jenispjk`, `nilaipajak`, `npwp`, `idbilling`, `ntpn`) VALUES
(33, 'P-02', 'DINAS KESEHATAN', '00113/SPM-NH/2.04.01.01/2020', '10000000', '10526/SP2D-NH/2.04.01.01/2020', '10000000', '2021-07-08', '411123', '2000', '00.115.738.7-654.000', '024762473780086', '037C75B7FL9HM4RM'),
(34, 'P-02', 'DINAS KESEHATAN', '00114/SPM-NH/2.04.01.01/2020', '15000000', '10529/SP2D-NH/2.04.01.01/2020', '15000000', '2021-07-08', '411123', '2000', '00.115.738.7-654.000', '024762473780086', '037C75B7FL9HM4RK');

-- --------------------------------------------------------

--
-- Table structure for table `tbskpd`
--

CREATE TABLE `tbskpd` (
  `idopd` varchar(255) DEFAULT NULL,
  `kdskpd` varchar(255) DEFAULT NULL,
  `nmskpd` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbskpd`
--

INSERT INTO `tbskpd` (`idopd`, `kdskpd`, `nmskpd`) VALUES
('1', 'P-01', 'DINAS PENDIDIKAN'),
('2', 'P-02', 'DINAS KESEHATAN'),
('3', 'P-03', 'RUMAH SAKIT UMUM DAERAH KANJURUHAN KEPANJEN'),
('4', 'P-04', 'DINAS PEKERJAAN UMUM BINA MARGA'),
('5', 'P-05', 'DINAS PEKERJAAN UMUM SUMBER DAYA AIR'),
('6', 'P-06', 'DINAS PERUMAHAN KAWASAN PERMUKIMAN DAN CIPTA KARYA'),
('7', 'P-07', 'BADAN PERENCANAAN PEMBANGUNAN DAERAH'),
('8', 'P-08', 'DINAS PERHUBUNGAN'),
('9', 'P-09', 'DINAS LINGKUNGAN HIDUP'),
('10', 'P-10', 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL'),
('11', 'P-11', 'DINAS PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK'),
('12', 'P-12', 'DINAS PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA'),
('13', 'P-13', 'DINAS SOSIAL'),
('14', 'P-14', 'DINAS TENAGA KERJA'),
('15', 'P-15', 'DINAS KOPERASI DAN USAHA MIKRO'),
('16', 'P-16', 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU'),
('17', 'P-17', 'DINAS KEBUDAYAAN DAN PARIWISATA'),
('18', 'P-18', 'DINAS PEMUDA DAN OLAH RAGA'),
('19', 'P-19', 'BADAN KESATUAN BANGSA DAN POLITIK'),
('20', 'P-20', 'SATUAN POLISI PAMONG PRAJA'),
('21', 'P-21', 'PEJABAT NEGARA (BUPATI DAN WAKIL BUPATI)'),
('22', 'P-22', 'SEKRETARIAT DAERAH'),
('23', 'P-23', 'SEKRETARIAT DEWAN'),
('24', 'P-24', 'BADAN KEUANGAN DAN ASET DAERAH'),
('25', 'P-25', 'BADAN PENELITIAN DAN PENGEMBANGAN'),
('26', 'P-26', 'INSPEKTORAT KABUPATEN MALANG'),
('27', 'P-27', 'BADAN PENDAPATAN DAERAH'),
('28', 'P-28', 'DINAS KOMUNIKASI DAN INFORMATIKA'),
('29', 'P-29', 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA'),
('30', 'P-30', 'DINAS KETAHANAN PANGAN'),
('31', 'P-31', 'DINAS PEMBERDAYAAN MASYARAKAT DAN DESA'),
('32', 'P-32', 'DINAS PERPUSTAKAAN DAN KEARSIPAN'),
('33', 'P-33', 'DINAS TANAMAN PANGAN, HORTIKULTURA DAN PERKEBUNAN'),
('34', 'P-34', 'DINAS PETERNAKAN DAN KESEHATAN HEWAN'),
('35', 'P-35', 'DINAS PERTANAHAN'),
('36', 'P-36', 'DINAS PERIKANAN'),
('37', 'P-37', 'DINAS PERINDUSTRIAN DAN PERDAGANGAN                                   '),
('38', 'P-38', 'BADAN PENANGGULANGAN BENCANA DAERAH'),
('39', 'P-39', 'RUMAH SAKIT UMUM DAERAH LAWANG'),
('40', 'P-40', 'KECAMATAN PUJON'),
('41', 'P-41', 'KECAMATAN NGANTANG'),
('42', 'P-42', 'KECAMATAN KASEMBON'),
('43', 'P-43', 'KECAMATAN SINGOSARI'),
('44', 'P-44', 'KECAMATAN LAWANG'),
('45', 'P-45', 'KECAMATAN SINGOSARI'),
('46', 'P-46', 'KECAMATAN DAU'),
('47', 'P-47', 'KECAMATAN TUMPANG'),
('48', 'P-48', 'KECAMATAN PAKIS'),
('49', 'P-49', 'KECAMATAN JABUNG'),
('50', 'P-50', 'KECAMATAN PONCOKUSUMO'),
('51', 'P-51', 'KECAMATAN BULULAWANG'),
('52', 'P-52', 'KECAMATAN WAJAK'),
('53', 'P-53', 'KECAMATAN TAJINAN'),
('54', 'P-54', 'KECAMATAN GONDANGLEGI'),
('55', 'P-55', 'KECAMATAN PAGELARAN'),
('56', 'P-56', 'KECAMATAN TUREN'),
('57', 'P-57', 'KECAMATAN DAMPIT'),
('58', 'P-58', 'KECAMATAN TIRTOYUDO'),
('59', 'P-59', 'KECAMATAN AMPELGADING'),
('60', 'P-60', 'KECAMATAN SUMBERMANJING WETAN'),
('61', 'P-61', 'KECAMATAN KEPANJEN'),
('62', 'P-62', 'KECAMATAN PAKISAJI'),
('63', 'P-63', 'KECAMATAN WAGIR'),
('64', 'P-64', 'KECAMATAN NGAJUM'),
('65', 'P-65', 'KECAMATAN WONOSARI'),
('66', 'P-66', 'KECAMATAN SUMBERPUCUNG'),
('67', 'P-67', 'KECAMATAN KROMENGAN'),
('68', 'P-68', 'KECAMATAN PAGAK'),
('69', 'P-69', 'KECAMATAN KALIPARE'),
('70', 'P-70', 'KECAMATAN DONOMULYO'),
('71', 'P-71', 'KECAMATAN BANTUR'),
('72', 'P-72', 'KECAMATAN GEDANGAN');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kdpjk`
--

CREATE TABLE `tb_kdpjk` (
  `idpjk` varchar(255) DEFAULT NULL,
  `kdid` varchar(255) DEFAULT NULL,
  `kodepajak` varchar(255) DEFAULT NULL,
  `jenispajak` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kdpjk`
--

INSERT INTO `tb_kdpjk` (`idpjk`, `kdid`, `kodepajak`, `jenispajak`) VALUES
('1', '1', '411121', 'Pajak Penghasilan 21'),
('2', '2', '411122', 'Pajak Penghasilan 22'),
('3', '3', '411123', 'Pajak Penghasilan 23'),
('4', '4', '411126', 'Pajak Penghasilan '),
('5', '5', '411128', 'Pajak Pasal 4 (2)'),
('6', '6', '411211', 'PPN');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` varchar(255) DEFAULT NULL,
  `nmuser` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `nmuser`, `username`, `password`) VALUES
('1', 'user', 'user', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbinput`
--
ALTER TABLE `tbinput`
  ADD PRIMARY KEY (`idx`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbinput`
--
ALTER TABLE `tbinput`
  MODIFY `idx` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
