-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2023 at 06:42 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meowcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `user` varchar(16) NOT NULL,
  `pass` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`user`, `pass`) VALUES
('admin', 'meowcare');

-- --------------------------------------------------------

--
-- Table structure for table `tb_basispengetahuan`
--

CREATE TABLE `tb_basispengetahuan` (
  `ID` int(11) NOT NULL,
  `kode_penyakit` varchar(16) DEFAULT NULL,
  `kode_gejala` varchar(16) DEFAULT NULL,
  `mb` double DEFAULT NULL,
  `md` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_basispengetahuan`
--

INSERT INTO `tb_basispengetahuan` (`ID`, `kode_penyakit`, `kode_gejala`, `mb`, `md`) VALUES
(319, 'PK01', 'G06', 1, 0.4),
(320, 'PK01', 'G21', 1, 0.2),
(321, 'PK01', 'G35', 1, 0),
(322, 'PK02', 'G02', 1, 0.4),
(323, 'PK02', 'G22', 1, 0.2),
(324, 'PK02', 'G30', 1, 0),
(325, 'PK03', 'G09', 1, 0),
(326, 'PK03', 'G11', 1, 0.2),
(327, 'PK03', 'G14', 1, 0),
(328, 'PK03', 'G19', 1, 0.4),
(329, 'PK04', 'G03', 1, 0.2),
(330, 'PK04', 'G07', 1, 0),
(331, 'PK04', 'G08', 1, 0.2),
(332, 'PK04', 'G10', 1, 0.2),
(333, 'PK05', 'G13', 1, 0),
(334, 'PK05', 'G15', 1, 0.4),
(335, 'PK05', 'G16', 1, 0.2),
(336, 'PK06', 'G01', 1, 0.2),
(337, 'PK06', 'G21', 1, 0.4),
(338, 'PK06', 'G22', 1, 0.2),
(339, 'PK06', 'G23', 1, 0.2),
(340, 'PK07', 'G04', 1, 0.2),
(341, 'PK07', 'G18', 1, 0.4),
(342, 'PK07', 'G32', 1, 0),
(343, 'PK08', 'G01', 1, 0.4),
(344, 'PK08', 'G15', 1, 0.2),
(345, 'PK08', 'G33', 1, 0),
(346, 'PK09', 'G36', 1, 0.4),
(347, 'PK09', 'G37', 1, 0),
(348, 'PK09', 'G38', 1, 0),
(349, 'PK09', 'G39', 1, 0.2),
(350, 'PK10', 'G12', 1, 0.2),
(351, 'PK10', 'G18', 1, 0.4),
(352, 'PK10', 'G34', 1, 0),
(353, 'PK11', 'G17', 1, 0.4),
(354, 'PK11', 'G20', 1, 0),
(355, 'PK11', 'G24', 1, 0),
(356, 'PK11', 'G25', 1, 0.2),
(357, 'PK12', 'G26', 1, 0.4),
(358, 'PK12', 'G27', 1, 0.4),
(359, 'PK12', 'G28', 1, 0),
(360, 'PK12', 'G29', 1, 0.2),
(361, 'PK12', 'G31', 1, 0.2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `kode_gejala` varchar(16) NOT NULL,
  `nama_gejala` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gejala`
--

INSERT INTO `tb_gejala` (`kode_gejala`, `nama_gejala`) VALUES
('G01', 'Demam'),
('G02', 'Muntah - muntah'),
('G03', 'Bersin - bersin'),
('G04', 'Nafsu makan menurun'),
('G05', 'Berat badan menurun'),
('G06', 'Lemas'),
('G07', 'Mata mengeluarkan kotoran'),
('G08', 'Mata berair dan merah'),
('G09', 'Keluar cairan berwarna hijau pada hidung'),
('G10', 'Hidung berlendir'),
('G11', 'Hidung tersumbat'),
('G12', 'Mulut berbau busuk'),
('G13', 'Sariawan parah'),
('G14', 'Konjungtivitis (Peradangan pada mata)'),
('G15', 'Ginggivitis (Peradangan pada gusi)'),
('G16', 'Stomatitis (Peradangan pada mulut)'),
('G17', 'Hipersalivasi (Keluar air liur yang berlebihan)'),
('G18', 'Kesulitan bernapas'),
('G19', 'Sesak napas'),
('G20', 'Mengalami kejang - kejang'),
('G21', 'Diare'),
('G22', 'Dehidrasi'),
('G23', 'Depresi'),
('G24', 'Menjadi agresif'),
('G25', 'Pincang tiba - tiba'),
('G26', 'Luka pada kulit'),
('G27', 'Sering menggaruk luka'),
('G28', 'Kulit berkerak'),
('G29', 'Iritasi atau kemerahan pada kulit'),
('G30', 'Bulu terlihat kusam dan kering'),
('G31', 'Bulu rontok pada daerah luka'),
('G32', 'Pembesaran perut yang tidak lazim pada kucing'),
('G33', 'Pembengkakan kelenjar getah bening'),
('G34', 'Terdapat benjolan pada area tubuh'),
('G35', 'Terdapat cacing pada kotoran kucing'),
('G36', 'Sering buang air kecil'),
('G37', 'Kesulitan saat buang air kecil'),
('G38', 'Urin mengeluarkan darah'),
('G39', 'Urin yang dikeluarkan sedikit bahkan tidak ada');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil`
--

CREATE TABLE `tb_hasil` (
  `id` int(5) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl` varchar(255) NOT NULL,
  `hasil_konsultasi` varchar(255) NOT NULL,
  `kepercayaan` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hasil`
--

INSERT INTO `tb_hasil` (`id`, `nik`, `nama`, `no_hp`, `jk`, `alamat`, `tgl`, `hasil_konsultasi`, `kepercayaan`) VALUES
(527, '', 'Fauzia', '08999977788', 'Perempuan', 'Jakarta Timur', '01:43 WIB - 23 Agustus 2023', 'Diabetes', '40'),
(526, '', 'Sifa Fauzia', '087701805740', 'Perempuan', 'Jakarta Timur', '01:43 WIB - 23 Agustus 2023', '', ''),
(542, '', 'Sifa', '088011113336', 'Perempuan', 'Jakarta Timur', '08:14 WIB - 26 Agustus 2023', 'Scabies', '60'),
(587, '', 'Sifa Fauzia', '08777711111', 'Perempuan', 'Jakarta Timur', '14:53 WIB - 26 Agustus 2023', '', ''),
(588, '', 'Sifa Fauzia', '08777711111', 'Perempuan', 'Jakarta Timur', '14:54 WIB - 26 Agustus 2023', '', ''),
(589, '', 'Sifa Fauzia', '08777711111', 'Perempuan', 'Jakarta Timur', '14:54 WIB - 26 Agustus 2023', 'Cacingan', '60'),
(590, '', 'Sifa Fauzia', '08777711111', 'Perempuan', 'Jakarta Timur', '14:54 WIB - 26 Agustus 2023', '', ''),
(578, '', 'Fauzi', '08777711111', 'Laki-laki', 'Jakarta Timur', '08:59 WIB - 26 Agustus 2023', 'Rabies', '36'),
(616, '', 'Sifa Fauzia', '08777711111', 'Perempuan', 'Jakarta Timur', '23:39 WIB - 01 September 2023', '', ''),
(617, '', 'Sifa Fauzia', '08777711111', 'Perempuan', 'Jakarta Timur', '23:39 WIB - 01 September 2023', 'Rhinotracheitis ', '80'),
(618, '', 'Sifa Fauzia', '08777711111', 'Perempuan', 'Jakarta Timur', '23:39 WIB - 01 September 2023', '', ''),
(619, '', 'Sifa Fauzia', '08777711111', 'Perempuan', 'Jakarta Timur', '23:39 WIB - 01 September 2023', 'Scabies', '60'),
(586, '', 'Sifa Fauzia', '08777711111', 'Perempuan', 'Jakarta Timur', '09:04 WIB - 26 Agustus 2023', 'Lower Urinary Tract Disorder', '23.04');

-- --------------------------------------------------------

--
-- Table structure for table `tb_konsultasi`
--

CREATE TABLE `tb_konsultasi` (
  `ID` int(11) NOT NULL,
  `kode_gejala` varchar(16) DEFAULT NULL,
  `jawaban` varchar(6) DEFAULT 'Tidak'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_konsultasi`
--

INSERT INTO `tb_konsultasi` (`ID`, `kode_gejala`, `jawaban`) VALUES
(1, 'G06', 'Tidak'),
(2, 'G21', 'Tidak'),
(3, 'G02', 'Tidak'),
(4, 'G22', 'Tidak'),
(5, 'G09', 'Tidak'),
(6, 'G11', 'Tidak'),
(7, 'G03', 'Tidak'),
(8, 'G07', 'Tidak'),
(9, 'G13', 'Tidak'),
(10, 'G15', 'Tidak'),
(11, 'G04', 'Tidak'),
(12, 'G18', 'Tidak'),
(13, 'G01', 'Tidak'),
(14, 'G36', 'Tidak'),
(15, 'G37', 'Tidak'),
(16, 'G12', 'Tidak'),
(17, 'G17', 'Ya'),
(18, 'G20', 'Ya'),
(19, 'G24', 'Ya'),
(20, 'G25', 'Ya'),
(21, 'G26', 'Ya'),
(22, 'G27', 'Tidak'),
(23, 'G28', 'Tidak');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `kode_penyakit` varchar(16) NOT NULL,
  `nama_penyakit` varchar(255) DEFAULT NULL,
  `keterangan` text NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`kode_penyakit`, `nama_penyakit`, `keterangan`, `solusi`) VALUES
('PK01', 'Cacingan', 'Cacing adalah salah satu jenis endoparasit yang bisa menyerang kucing peliharaan. Walaupun tidak terdengar serius, cacingan dapat menyebabkan banyak gejala yang bervariasi dari ringan hingga berat atau fatal pada individu yang terserang. Jenis cacing yang dapat menyerang, diantaranya adalah dari jenis nematoda (cacing gilig) dan cestoda (cacing pita). Pada golongan nematoda ada banyak spesies cacing yang dapat menyerang kucing di saluran pencernaan misalnya Ancylostoma sp. (cacing kait) dan Toxocara sp. Cacing. Sedangkan pada golongan cestoda atau cacing pita, pada saluran pencernaan kucing biasanya dari spesies Dipylidium caninum.', '- Ada banyak perawatan yang bisa dilakukan untuk mengatasi kucing cacingan, mulai dari obat-obatan cair, krim, butiran, tablet, bahkan cairan yang akan direkomendasikan oleh dokter hewan.\r\n-	Mengatasi kucing cacingan sebenarnya cukup sederhana, hanya perlu memperhatikan beberapa penyebab kucing cacingan dan lebih menjaga kebersihan. Selain itu, agar kucing Anda terhindar dari penyakit cacingan, pastikan untuk selalu memberikannya makanan kucing yang bergizi.'),
('PK02', 'Diabetes', 'Diabetes pada kucing adalah penyakit kompleks yang disebabkan oleh kurangnya hormon insulin atau respons yang tidak memadai terhadap insulin. Penyebab pasti diabetes tidak diketahui. Genetika, penyakit pankreas, obat-obatan tertentu dan protein abnormal di pankreas dapat berperan dalam menyebabkan gangguan ini.\r\nFaktor terpenting dalam perkembangan diabetes tampaknya adalah obesitas, jenis kelamin (kucing jantan lebih sering terserang daripada betina) dan usia.', '- Kucing penderita diabetes pada masa-masa awal saat pertama kali didiagnosis dapat melakukan diet tinggi serat\r\n- Suntikan insulin diperlukan untuk mengatur glukosa darah\r\n- Jika diabetes yang diderita kucing sudah terlanjut parah sebaiknya dilakukan perawatan intensif di rumah sakit hewan. \r\n- Hindari pemberian makanan tinggi glukosa terhadap kucing penderita diabetes.'),
('PK03', 'Feline Chlamydia ', 'Feline Chlamydia pada kucing disebabkan oleh infeksi virus Chlamydia felis. Penyakit ini menyebabkan gangguan kelainan pada mata dan jika bertambah parah bisa menyebabkan pneumonia (peradangan paru-paru).', '1. Apabila kucing Anda mengalami gejala di atas, segera bawa ke dokter hewan untuk memastikan penyakit yang menyerang kucing dan mendapatklan pengobatan yang sesuai. Pemberian antibiotik tetrasiklin mungkin dilakukan. Pada mata juga diberikan salep yang mengandung tetrasiklin.\r\n2. Membersihkan cairan yang keluar dari mata dan hidung dapat mempercepat kesembuhan\r\n3. Pisahkan kucing dari kucing lain untuk mencegah penularan. \r\n4. Selalu cuci tangan sebelum dan sesudah kontak dengan kucing serta etap jaga kebersihan kandangnya\r\n5. Pemberian vitamin untuk meningkatkan daya tahan tubuhnya juga penting dilakukan. \r\n'),
('PK04', 'Rhinotracheitis ', 'Rhinotracheitis merupakan gangguan umum pada kucing maupun anak kucing. Gangguan ini disebabkan oleh virus herpes yang bisa menyebabkan permasalahan pada saluran pernafasan bagian atas terutama trakea.', '1. Lakukan perbaikan nutrisi agar tidak dehidrasi jika diperlukan dapat diinfus. \r\n2. Memberi antibiotik untuk mencegah infeksi sekunder dari bakteri. Serta pemberian obat untuk pernafasan dan mata. \r\n3. Satu-satunya pencegahan terhadap Rhinotrachetitis adalah dengan vaksin tricat atau tetracat.'),
('PK05', 'Feline Calicivirus', 'Feline calicivirus adalah virus yang sangat umum menyerang ras kucing.\r\nPenyakit flu kucing ini disebabkan oleh virus dari keluarga caliciviridae yang dapat masuk melalui mulut, hidung dan mata ketika si kucing tidak sengaja menyentuh barang-barang yang sudah terkontaminasi virus tersebut.  ', '1. Kucing bisa terinfeksi virus ini berkali-kali sepanjang hidupnya. Pencegahan terbaik untuk menghindari infeksi virus calici adalah dengan melakukan vaksinasi.\r\n2. Vaksinasi paling efektif ketika diberikan pada tanggal yang tetap dengan vaksinasi booster pada waktu tertentu\r\n3. Jaga cairan tubuh kucing agar tetap terhidrasi.\r\n4. Pastikan kucing untuk tetap makan.\r\n5. Jaga kebersihan hidung dan mata kucing.'),
('PK06', 'Feline Panleukopenia (FPLV)', 'Feline Panleukopenia merupakan penyakit yang disebabkan oleh infeksi Feline Parvovirus. Infeksi virus tersebut menyebabkan peradangan pada sistem pencernaan kucing dan juga menyerang sum-sum tulang sehingga jumlah sel darah putih di dalam tubuh akan turun. Ketika sel darah putih berkurang otomatis sistem pertahanan tubuh juga akan melemah', '1. Hingga saat ini, belum ada pengobatan yang dapat menyembuhkan panleukopenia pada kucing. \r\n2. Penanganan hanya diberikan untuk meringankan gejala yang dialami kucing ketika terkena penyakit ini dan mencegah terjadinya komplikasi yang berbahaya. Misalnya, jika kucing mengalami dehidrasi saat terkena panleukopenia, sebaiknya kucing diinfus, sedangkan gejala muntah dan diare bisa diobati dengan pemberian obat-obatan.\r\n3. Berikan antibiotik untuk mencegah infeksi bakteri yang berisiko terjadi selama kucing sakit. Ini karena panleukopenia bisa membuat imunitas tubuh kucing melemah, sehingga rentan terkena infeksi.\r\n4. Untuk pencegahan agar kucing lain tidak tertular, berikan vaksin untuk mencegah panleukopenia.'),
('PK07', 'Feline Infectious Peritonitis (FIP)', 'Feline Infectious Peritonitis (FIP) adalah penyakit yang disebabkan oleh virus Feline Coronavirus (FCoV) pada kucing. FIP disebabkan oleh hasil mutasi virus FCoV pada kucing. FCOV atau Feline Coronavirus adalah jenis virus yang dapat menyebar melalui air liur, feses, dan urine dari kucing yang terinfeksi, dan dapat menular ke kucing lain melalui kontak dengan lingkungan yang terkontaminasi oleh virus ', 'Untuk saat ini FIP dapat disembuhkan dengan obat antivirus GS-441524. Dalam beberapa tahun terakhir, semakin banyak dokter yang menggunakan GS-441524 untuk merawati FIP, dan penggunaannya telah menyebar secara global, menyelamatkan banyak kucing FIP. Segera bawa kucing ke dokter hewan untuk diberikan obat GS-441524 baik diberikan melalui injeksi maupun oral.'),
('PK08', 'Feline Immunodeficiency Virus (FIV)', 'Feline Immunodeficiency Virus (FIV) merupakan salah satu penyakit yang disebabkan oleh virus yang menyerang sistem kekebalan tubuh kucing. Virus ini berjalan lambat pada tubuh kucing. Kucing yang terinfeksi biasanya tidak menunjukkan gejala selama beberapa tahun setelah terinfeksi. Meskipun begitu, ketika virus ini menyerang, kekebalan tubuh kucing akan menjadi semakin lemah. Lemahnya kekebalan tubuh menyebabkan tubuh tidak dapat mengatasi adanya serangan dari berbagai sumber penyakit lainnya sehingga muncul infeksi tambahan.', '1. Memberikan makanan yang baik dan melengkapi kebutuhan nutrisi kucing. Berikan makanan organik untuk kucing. 2. Memelihara kucing di dalam rumah untuk menghindarinya dari resiko penyakit lainnya. 3. Perhatikan perubahan yang terjadi pada kucing Anda baik dari perubahan pola makan, kebiasaan, hingga perubahan perilaku. - Pastikan kucing anda telah disterilisasi. 4. Bawa kucing secara rutin ke dokter hewan untuk melakukan cek kesehatan dan tes darah, minimal enam bulan sekali. 5. Berikan vitamin untuk meningkatkan daya tahan tubuh dan nafsu makannya.'),
('PK09', 'Lower Urinary Tract Disorder', 'Penyakit saluran kemih pada kucing yang memengaruhi kondisi kandung kemih dan uretra (saluran yang mengalirkan urine ke kandung kemih). Penyakit ini ditandai dengan pembentukan kristal (paling sering struvite) di dalam VU (kandung kemih). ', '1. Apabila kucing anda mengalami susah membuang air kecil dan disertai kencing berdarah, segera bawa kucing anda ke dokter hewan\r\n2. Dokter hewan akan memberikan obat untuk menjaga kesehatan saluran urinari kucing. Pemberian antibiotik untuk infeksi sekunder akibat bakteri, serta pemberian anti inflamasi dan analgesik.\r\n3. Pemberian fluid therapy (infus) dapat membantu jika terjadi dehidrasi.\r\n4. Pemasangan kateter untuk melancarkan urinasi\r\n5. Apabila penyakit sudah disertai cystitis (Peradangan pada kandung kemih) maka harus segera dilakukan operasi. Tindakan operatif yang dilakukan yaitu Cystotomy (Pembedahan kandung kemih) dan Urethrotomy (Pembedahan uretra).\r\n6. Setelah dilakukannya terapi pada kucing, dokter hewan akan memberikan rekomendasi pakan untuk mengurangi terjadinya kristal pada urin\r\n7. Pemberian terapi supportif untuk membantu melarutkan kristal struvit maupun kalsium oksalat.'),
('PK10', 'Kanker', 'Kanker pada kucing kucing dapat terpusat pada satu area tubuh tertentu. Tumor dapat muncul dan menyebar ke seluruh tubuh dimana sel dapat tumbuh dengan cepat dan menyerang bagian tubuh kucing. Faktor keturunan dan lingkungan seringkali menjadi dua penyebab utama kanker pada kucing.', 'Sebaiknya periksakan kepada dokter hewan karena kanker pada kucing tidak dapat ditangani sendiri dirumah. Pilihan pengobatan bervariasi dan bergantung pada jenis dan stadium kanker. Perawatan umum termasuk pembedahan, kemoterapi, radiasi dan imunoterapi atau kombinasi terapi.'),
('PK11', 'Rabies', 'Rabies merupakan penyakit menular akut yang menyerang susunan saraf pusat yang diakibatkan oleh Lyssavirus. Rabies termasuk salah satu penyakit zoonosis, penyakit zoonosis adalah penyakit yang menular dari hewan ke manusia. Virus rabies dapat menular melalui air liur, gigitan atau cakaran serta jilatan pada kulit yang terluka oleh hewan yang terinfeksi rabies.', 'Mencegah lebih baik dibandingkan dengan mengobati atau mengatasi. Hal itu dikarenakan tidak ada obat yang cocok untuk kucing yang mengalami rabies. Kucing yang terkena rabies itu harus segera diatasi agar tidak menular kepada manusia. Manusia yang bisa terkena virus ini pun bisa berisiko mengalami kematian. Sebaiknya segera berikan vaksinasi rabies untuk kucing anda.'),
('PK12', 'Scabies', 'Scabies pada kucing merupakan suatu penyakit kulit yang disebabkan oleh infestasi parasit luar sejenis tungau (tidak bisa dilihat tanpa alat bantu mikroskop) yang hidupnya di folikel kulit. Penyakit tersebut muncul dengan ditandai kerusakan jaringan kulit, apabila tidak segera dilakukan tindakan pengobatan kucing tersebut akan mengalami infeksi sekunder (pembusukan) akibat mikroorganisme pembusuk.', '1. Berikan obat anti radang / anti inflamasi serta obat anti parasit kepada kucing. 2. Berikan juga antibiotik secara injeksi untuk mempermudah penyembuhan luka. 3. Mandikan kucing dengan shampo anti parasit secara rutin. 4. Hindari kontak langsung dengan kucing yang menderita scabies, sebaiknya gunakan sarung tangan dan masker.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `ID` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `tgl` varchar(255) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pesan`
--

INSERT INTO `tb_pesan` (`ID`, `nama`, `email`, `no_hp`, `tgl`, `pesan`) VALUES
(72, 'Sifa Fauzia', 'sifafauzia308@gmail.com', '087777771111', '01:44 WIB - 23 Agustus 2023', 'Sangat membantu'),
(73, 'Sifa Fauzia', 'sifafauzia308@gmail.com', '08777711111', '16:55 WIB - 26 Agustus 2023', 'lucu'),
(74, 'Sifa Fauzia', 'sif', '08777711111', '16:56 WIB - 26 Agustus 2023', 'lucu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `tb_basispengetahuan`
--
ALTER TABLE `tb_basispengetahuan`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`kode_gejala`);

--
-- Indexes for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_konsultasi`
--
ALTER TABLE `tb_konsultasi`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`kode_penyakit`);

--
-- Indexes for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_basispengetahuan`
--
ALTER TABLE `tb_basispengetahuan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=362;

--
-- AUTO_INCREMENT for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=620;

--
-- AUTO_INCREMENT for table `tb_konsultasi`
--
ALTER TABLE `tb_konsultasi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
