-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 17, 2021 at 05:00 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `piib`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi_perkuliahan_mentoring`
--

CREATE TABLE `absensi_perkuliahan_mentoring` (
  `id_absensi` int(5) NOT NULL,
  `id_riwayat_perkuliahan_mentoring` int(5) DEFAULT NULL,
  `id_peserta` int(5) DEFAULT NULL,
  `status` int(1) DEFAULT 0,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absensi_perkuliahan_mentoring`
--

INSERT INTO `absensi_perkuliahan_mentoring` (`id_absensi`, `id_riwayat_perkuliahan_mentoring`, `id_peserta`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 0, '2021-08-15', '2021-08-15 20:22:03'),
(2, 1, 2, 0, '2021-08-15', '2021-08-15 20:22:05'),
(3, 1, 3, 0, '2021-08-15', '2021-08-15 20:22:07'),
(4, 1, 4, 0, '2021-08-15', '2021-08-15 20:22:09'),
(5, 1, 5, 0, '2021-08-15', '2021-08-15 20:22:11'),
(6, 2, 1, 0, '2021-08-15', '2021-08-15 20:22:15'),
(7, 3, 1, 0, '2021-08-15', '2021-08-15 20:22:17'),
(8, 2, 2, 0, '2021-08-15', '2021-08-15 20:22:23'),
(9, 2, 3, 0, '2021-08-15', '2021-08-15 20:22:27'),
(10, 2, 4, 0, '2021-08-15', '2021-08-15 20:22:29'),
(11, 2, 5, 0, '2021-08-15', '2021-08-15 20:22:31');

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_detail_anggota_grub`
-- (See below for the actual view)
--
CREATE TABLE `data_detail_anggota_grub` (
`id_grub` int(5)
,`nama_grub` varchar(100)
,`deskripsi` text
,`nama_mentor` varchar(100)
,`id_peserta` int(5)
,`nama_lengkap` varchar(50)
,`alamat` text
,`desa` text
,`kecamatan` text
,`kabupaten` text
,`semester` int(2)
,`jurusan` text
,`foto` text
,`telpon` varchar(20)
,`email` varchar(50)
,`username` varchar(20)
,`created_at` date
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_detail_produk_pergrub`
-- (See below for the actual view)
--
CREATE TABLE `data_detail_produk_pergrub` (
`id_grub` int(5)
,`nama_grub` varchar(100)
,`id_produk` int(5)
,`nama` varchar(100)
,`deskripsi` text
,`jenis` varchar(50)
,`pengunggah` varchar(50)
,`photo` text
,`link_video` text
,`link_website` text
,`link_playstore` text
,`link_appstore` text
,`link_ig` text
,`link_fb` text
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_riwayat_perkuliahan`
-- (See below for the actual view)
--
CREATE TABLE `data_riwayat_perkuliahan` (
`id_riwayat_perkuliahan_mentoring` int(5)
,`deskripsi` text
,`id_peserta` int(5)
,`nama_lengkap` varchar(50)
,`link_meeting` text
,`kategori` varchar(50)
,`nama_pengisi` varchar(100)
,`pengunggah` text
,`tgl_pelaksanaan` date
);

-- --------------------------------------------------------

--
-- Table structure for table `data_wilayah`
--

CREATE TABLE `data_wilayah` (
  `kode` varchar(13) NOT NULL,
  `nama` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_wilayah`
--

INSERT INTO `data_wilayah` (`kode`, `nama`) VALUES
('52', 'NUSA TENGGARA BARAT'),
('52.01', 'LOMBOK BARAT'),
('52.01.01', 'Gerung'),
('52.01.01.1001', 'Gerung Utara'),
('52.01.01.1004', 'Dasan Geres'),
('52.01.01.1011', 'Gerung Selatan'),
('52.01.01.2002', 'Kebon Ayu'),
('52.01.01.2003', 'Gapuk'),
('52.01.01.2005', 'Suka Makmur'),
('52.01.01.2006', 'Banyu Urip'),
('52.01.01.2007', 'Babussalam'),
('52.01.01.2008', 'Dasan Tapen'),
('52.01.01.2009', 'Beleke'),
('52.01.01.2010', 'Tempos'),
('52.01.01.2012', 'Mesanggok'),
('52.01.01.2013', 'Taman Ayu'),
('52.01.01.2014', 'Giri Tembesi'),
('52.01.02', 'Kediri'),
('52.01.02.2001', 'Kediri'),
('52.01.02.2002', 'Montong Are'),
('52.01.02.2003', 'Jagaraga Indah'),
('52.01.02.2004', 'Gelogor'),
('52.01.02.2005', 'Rumak'),
('52.01.02.2006', 'Banyumulek'),
('52.01.02.2007', 'Ombe Baru'),
('52.01.02.2008', 'Dasan Baru'),
('52.01.02.2009', 'Kediri Selatan'),
('52.01.02.2010', 'Lelede'),
('52.01.03', 'Narmada'),
('52.01.03.2001', 'Lembuak'),
('52.01.03.2002', 'Nyur Lembang'),
('52.01.03.2003', 'Peresak'),
('52.01.03.2004', 'Keru'),
('52.01.03.2005', 'Batu Kuta'),
('52.01.03.2006', 'Tanak Beak'),
('52.01.03.2007', 'Sedau'),
('52.01.03.2008', 'Suranadi'),
('52.01.03.2009', 'Selat'),
('52.01.03.2010', 'Lebah Sempage'),
('52.01.03.2011', 'Sesaot'),
('52.01.03.2012', 'Dasan Tereng'),
('52.01.03.2013', 'Badrain'),
('52.01.03.2014', 'Sembung'),
('52.01.03.2015', 'Kramat Jaya'),
('52.01.03.2016', 'Grimax Indah'),
('52.01.03.2017', 'Pakuan'),
('52.01.03.2018', 'Golong'),
('52.01.03.2019', 'Mekarsari'),
('52.01.03.2020', 'Buwun Sejati'),
('52.01.03.2021', 'Narmada'),
('52.01.07', 'Sekotong'),
('52.01.07.2001', 'Sekotong Tengah'),
('52.01.07.2002', 'Sekotong Barat'),
('52.01.07.2003', 'Pelangan'),
('52.01.07.2004', 'Buwun Mas'),
('52.01.07.2005', 'Kedaro'),
('52.01.07.2006', 'Batu Putih'),
('52.01.07.2007', 'Gili Gede Indah'),
('52.01.07.2008', 'Cendi Manik'),
('52.01.07.2009', 'Taman Baru'),
('52.01.08', 'Labuapi'),
('52.01.08.2001', 'Bengkel'),
('52.01.08.2002', 'Merembu'),
('52.01.08.2003', 'Bagik Polak'),
('52.01.08.2004', 'Telagawaru'),
('52.01.08.2005', 'Perampuan'),
('52.01.08.2006', 'Bajur'),
('52.01.08.2007', 'Terong Tawah'),
('52.01.08.2008', 'Kuranji'),
('52.01.08.2009', 'Karang Bongkot'),
('52.01.08.2010', 'Labuapi'),
('52.01.08.2011', 'Bagik Polak Barat'),
('52.01.08.2012', 'Kuranji Dalang'),
('52.01.09', 'Gunungsari'),
('52.01.09.2001', 'Gunungsari'),
('52.01.09.2002', 'Midang'),
('52.01.09.2003', 'Sesele'),
('52.01.09.2004', 'Kekait'),
('52.01.09.2005', 'Kekeri'),
('52.01.09.2006', 'Mambalan'),
('52.01.09.2007', 'Dopang'),
('52.01.09.2008', 'Penimbung'),
('52.01.09.2009', 'Taman Sari'),
('52.01.09.2010', 'Jatisela'),
('52.01.09.2011', 'Guntur Macan'),
('52.01.09.2012', 'Mekar Sari'),
('52.01.09.2013', 'Ranjok'),
('52.01.09.2014', 'Gelangsar'),
('52.01.09.2015', 'Jeringo'),
('52.01.09.2016', 'Bukittinggi'),
('52.01.12', 'Lingsar'),
('52.01.12.2001', 'Lingsar'),
('52.01.12.2002', 'Batu Kumbang'),
('52.01.12.2003', 'Sigerongan'),
('52.01.12.2004', 'Duman'),
('52.01.12.2005', 'Karang Bayan'),
('52.01.12.2006', 'Langko'),
('52.01.12.2007', 'Dasan Geria'),
('52.01.12.2008', 'Peteluan Indah'),
('52.01.12.2009', 'Gegerung'),
('52.01.12.2010', 'Batu Mekar'),
('52.01.12.2011', 'Giri Madia'),
('52.01.12.2012', 'Bug-Bug'),
('52.01.12.2013', 'Gegelang'),
('52.01.12.2014', 'Saribaye'),
('52.01.12.2015', 'Gontoran'),
('52.01.13', 'Lembar'),
('52.01.13.2001', 'Lembar'),
('52.01.13.2002', 'Jembatan Kembar'),
('52.01.13.2003', 'Mareje'),
('52.01.13.2004', 'Sekotong Timur'),
('52.01.13.2005', 'Labuan Tereng'),
('52.01.13.2006', 'Jembatan Gantung'),
('52.01.13.2007', 'Lembar Selatan'),
('52.01.13.2008', 'Mareje Timur'),
('52.01.13.2009', 'Jembatan Kembar Timur'),
('52.01.13.2010', 'Eyat Mayang'),
('52.01.14', 'Batu Layar'),
('52.01.14.2001', 'Batulayar'),
('52.01.14.2002', 'Meninting'),
('52.01.14.2003', 'Sandik'),
('52.01.14.2004', 'Lembah Sari'),
('52.01.14.2005', 'Senteluk'),
('52.01.14.2006', 'Senggigi'),
('52.01.14.2007', 'Bengkaung'),
('52.01.14.2008', 'Pusuk Lestari'),
('52.01.14.2009', 'Batu Layar Barat'),
('52.01.15', 'Kuripan'),
('52.01.15.2001', 'Kuripan'),
('52.01.15.2002', 'Jagaraga'),
('52.01.15.2003', 'Kuripan Utara'),
('52.01.15.2004', 'Kuripan Selatan'),
('52.01.15.2005', 'Kuripan Timur'),
('52.01.15.2006', 'Giri Sasak'),
('52.02', 'LOMBOK TENGAH'),
('52.02.01', 'Praya'),
('52.02.01.1001', 'Praya'),
('52.02.01.1002', 'Leneng'),
('52.02.01.1003', 'Gerunung'),
('52.02.01.1004', 'Semayan'),
('52.02.01.1005', 'Perapen'),
('52.02.01.1006', 'Tiwugalih'),
('52.02.01.1007', 'Gonjak'),
('52.02.01.1008', 'Panji Sari'),
('52.02.01.1009', 'Renteng'),
('52.02.01.2010', 'Mertak Tombok'),
('52.02.01.2011', 'Aik Mual'),
('52.02.01.2012', 'Montong Terep'),
('52.02.01.2013', 'Jago'),
('52.02.01.2014', 'Bunut Baok'),
('52.02.01.2015', 'Mekar Damai'),
('52.02.02', 'Jonggat'),
('52.02.02.2001', 'Barejulat'),
('52.02.02.2002', 'Ubung'),
('52.02.02.2003', 'Jelantik'),
('52.02.02.2004', 'Labulia'),
('52.02.02.2005', 'Batu Tulis'),
('52.02.02.2006', 'Perina'),
('52.02.02.2007', 'Pengenjek'),
('52.02.02.2008', 'Puyung'),
('52.02.02.2009', 'Nyerot'),
('52.02.02.2010', 'Sukarara'),
('52.02.02.2011', 'Gemel'),
('52.02.02.2012', 'Bonjeruk'),
('52.02.02.2013', 'Bunkate'),
('52.02.03', 'Batukliang'),
('52.02.03.2001', 'Bujak'),
('52.02.03.2002', 'Selebung'),
('52.02.03.2003', 'Peresak'),
('52.02.03.2004', 'Mantang'),
('52.02.03.2005', 'Aik Darek'),
('52.02.03.2006', 'Tampak Siring'),
('52.02.03.2007', 'Barabali'),
('52.02.03.2008', 'Beber'),
('52.02.03.2009', 'Pagutan'),
('52.02.03.2010', 'Mekar Bersatu'),
('52.02.04', 'Pujut'),
('52.02.04.2001', 'Sengkol'),
('52.02.04.2002', 'Segala Anyar'),
('52.02.04.2003', 'Sukadana'),
('52.02.04.2004', 'Teruwai'),
('52.02.04.2005', 'Pengengat'),
('52.02.04.2006', 'Kawo'),
('52.02.04.2007', 'Gapura'),
('52.02.04.2008', 'Rembitan'),
('52.02.04.2009', 'Kuta'),
('52.02.04.2010', 'Pengembur'),
('52.02.04.2011', 'Tumpak'),
('52.02.04.2012', 'Mertak'),
('52.02.04.2013', 'Prabu'),
('52.02.04.2014', 'Tanak Awu'),
('52.02.04.2015', 'Ketara'),
('52.02.04.2016', 'Bangket Parak'),
('52.02.05', 'Praya Barat'),
('52.02.05.2001', 'Bonder'),
('52.02.05.2002', 'Banyu Urip'),
('52.02.05.2003', 'Mangkung'),
('52.02.05.2004', 'Kateng'),
('52.02.05.2005', 'Setanggor'),
('52.02.05.2006', 'Penujak'),
('52.02.05.2007', 'Selong Blanak'),
('52.02.05.2008', 'Mekar Sari'),
('52.02.05.2009', 'Batujai'),
('52.02.05.2010', 'Tanak Rarang'),
('52.02.06', 'Praya Timur'),
('52.02.06.2001', 'Sukaraja'),
('52.02.06.2002', 'Beleka'),
('52.02.06.2003', 'Semoyang'),
('52.02.06.2004', 'Mujur'),
('52.02.06.2005', 'Landah'),
('52.02.06.2006', 'Sengkerang'),
('52.02.06.2007', 'Bilelando'),
('52.02.06.2008', 'Ganti'),
('52.02.06.2009', 'Marong'),
('52.02.06.2010', 'Kidang'),
('52.02.07', 'Janapria'),
('52.02.07.2001', 'Lekor'),
('52.02.07.2002', 'Langko'),
('52.02.07.2003', 'Janapria'),
('52.02.07.2004', 'Loang Maka'),
('52.02.07.2005', 'Saba'),
('52.02.07.2006', 'Bakan'),
('52.02.07.2007', 'Durian'),
('52.02.07.2008', 'Pendem'),
('52.02.07.2009', 'Selebung Rembiga'),
('52.02.07.2010', 'Kerembong'),
('52.02.07.2011', 'Jango'),
('52.02.07.2012', 'Setuta'),
('52.02.08', 'Pringgarata'),
('52.02.08.2001', 'Pringarata'),
('52.02.08.2002', 'Sepakek'),
('52.02.08.2003', 'Murbaya'),
('52.02.08.2004', 'Bagu'),
('52.02.08.2005', 'Sintung'),
('52.02.08.2006', 'Bilebante'),
('52.02.08.2007', 'Pemepek'),
('52.02.08.2008', 'Menemeng'),
('52.02.08.2009', 'Arjangka'),
('52.02.08.2010', 'Taman Indah'),
('52.02.08.2011', 'Sisik'),
('52.02.09', 'Kopang'),
('52.02.09.2001', 'Lendang Are'),
('52.02.09.2002', 'Monggas'),
('52.02.09.2003', 'Muncan'),
('52.02.09.2004', 'Bebuak'),
('52.02.09.2005', 'Kopang Rembiga'),
('52.02.09.2006', 'Dasan Baru'),
('52.02.09.2007', 'Montong Gamang'),
('52.02.09.2008', 'Darmaji'),
('52.02.09.2009', 'Wajageseng'),
('52.02.09.2010', 'Aik Bual'),
('52.02.09.2011', 'Semparu'),
('52.02.10', 'Praya Tengah'),
('52.02.10.1001', 'Gerantung'),
('52.02.10.1002', 'Jontlak'),
('52.02.10.1003', 'Sasake'),
('52.02.10.2004', 'Jurang Jaler'),
('52.02.10.2005', 'Beraim'),
('52.02.10.2006', 'Batunyala'),
('52.02.10.2007', 'Lajut'),
('52.02.10.2008', 'Pengadang'),
('52.02.10.2009', 'Kelebuh'),
('52.02.10.2010', 'Pejanggik'),
('52.02.10.2011', 'Dakung'),
('52.02.10.2012', 'Prai Meke'),
('52.02.11', 'Praya Barat Daya'),
('52.02.11.2001', 'Montong Sapah'),
('52.02.11.2002', 'Ungga'),
('52.02.11.2003', 'Kabul'),
('52.02.11.2004', 'Pelambik'),
('52.02.11.2005', 'Darek'),
('52.02.11.2006', 'Ranggagata'),
('52.02.11.2007', 'Pandan Indah'),
('52.02.11.2008', 'Serage'),
('52.02.11.2009', 'Montong Ajan'),
('52.02.11.2010', 'Batu Jangkih'),
('52.02.11.2011', 'Teduh'),
('52.02.12', 'Batukliang Utara'),
('52.02.12.2001', 'Lantan'),
('52.02.12.2002', 'Setiling'),
('52.02.12.2003', 'Tanak Beak'),
('52.02.12.2004', 'Aik Bukaq'),
('52.02.12.2005', 'Teratak'),
('52.02.12.2006', 'Aik Berik'),
('52.02.12.2007', 'Mas-mas'),
('52.02.12.2008', 'Karang Sidemen'),
('52.03', 'LOMBOK TIMUR'),
('52.03.01', 'Keruak'),
('52.03.01.2001', 'Tanjung Luar'),
('52.03.01.2002', 'Pijot'),
('52.03.01.2003', 'Selebung Ketangga'),
('52.03.01.2004', 'Sepit'),
('52.03.01.2005', 'Batu Putik'),
('52.03.01.2006', 'Senyiur'),
('52.03.01.2007', 'Keruak'),
('52.03.01.2008', 'Ketapang Raya'),
('52.03.01.2009', 'Pijot Utara'),
('52.03.01.2010', 'Dane Rase'),
('52.03.01.2011', 'Ketangga Jeraeng'),
('52.03.01.2012', 'Mendana Raya'),
('52.03.01.2013', 'Setungkep Lingsar'),
('52.03.01.2014', 'Montong Belae'),
('52.03.01.2015', 'Pulau Maringkik'),
('52.03.02', 'Sakra'),
('52.03.02.2001', 'Suwangi'),
('52.03.02.2002', 'Sakra'),
('52.03.02.2003', 'Kabar'),
('52.03.02.2004', 'Rumbuk'),
('52.03.02.2005', 'Keselet'),
('52.03.02.2006', 'Sakra Selatan'),
('52.03.02.2007', 'Rumbuk Timur'),
('52.03.02.2008', 'Suwangi Timur'),
('52.03.02.2009', 'Moyot'),
('52.03.02.2010', 'Songak'),
('52.03.02.2011', 'Peresak'),
('52.03.02.2012', 'Kuang Baru'),
('52.03.03', 'Terara'),
('52.03.03.2001', 'Jenggik'),
('52.03.03.2002', 'Rarang'),
('52.03.03.2003', 'Suradadi'),
('52.03.03.2004', 'Santong'),
('52.03.03.2005', 'Terara'),
('52.03.03.2006', 'Sukadana'),
('52.03.03.2007', 'Rarang Selatan'),
('52.03.03.2008', 'Leming'),
('52.03.03.2009', 'Lando'),
('52.03.03.2010', 'Rarang Tengah'),
('52.03.03.2011', 'Embung Raja'),
('52.03.03.2012', 'Selagik'),
('52.03.03.2013', 'Embung Kandong'),
('52.03.03.2014', 'Kalianyar'),
('52.03.03.2015', 'Rarang Batas'),
('52.03.03.2016', 'Pandan Duri'),
('52.03.04', 'Sikur'),
('52.03.04.2001', 'Semaya'),
('52.03.04.2002', 'Sikur'),
('52.03.04.2003', 'Montong Baan'),
('52.03.04.2004', 'Loyok'),
('52.03.04.2005', 'Kota Raja'),
('52.03.04.2006', 'Tete Batu'),
('52.03.04.2007', 'Kembang Kuning'),
('52.03.04.2008', 'Montong Baan Selatan'),
('52.03.04.2009', 'Gelora'),
('52.03.04.2010', 'Darmasari'),
('52.03.04.2011', 'Tetebatu Selatan'),
('52.03.04.2012', 'Jeruk Manis'),
('52.03.04.2013', 'Sikur Selatan'),
('52.03.04.2014', 'Sikur Barat'),
('52.03.05', 'Masbagik'),
('52.03.05.2001', 'Kesik'),
('52.03.05.2002', 'Paokmotong'),
('52.03.05.2003', 'Masbagik Selatan'),
('52.03.05.2004', 'Masbagik Timur'),
('52.03.05.2005', 'Masbagik Utara'),
('52.03.05.2006', 'Danger'),
('52.03.05.2007', 'Lendang Nangka'),
('52.03.05.2008', 'Masbagik Utara Baru'),
('52.03.05.2009', 'Lendang Nangka Utara'),
('52.03.05.2010', 'Kumbang'),
('52.03.06', 'Sukamulia'),
('52.03.06.2001', 'Setanggor'),
('52.03.06.2002', 'Jantuk'),
('52.03.06.2003', 'Padamara'),
('52.03.06.2004', 'Dasan Lekong'),
('52.03.06.2005', 'Sukamulia'),
('52.03.06.2006', 'Paok Pampang'),
('52.03.06.2007', 'Sukamulia Timur'),
('52.03.06.2008', 'Nyiur Tebel'),
('52.03.06.2009', 'Setanggor Selatan'),
('52.03.07', 'Selong'),
('52.03.07.1001', 'Pancor'),
('52.03.07.1002', 'Selong'),
('52.03.07.1003', 'Kelayu Selatan'),
('52.03.07.1004', 'Denggen'),
('52.03.07.1005', 'Sekarteja'),
('52.03.07.1006', 'Majidi'),
('52.03.07.1007', 'Rakam'),
('52.03.07.1008', 'Sandu Baya'),
('52.03.07.1009', 'Kembang Sari'),
('52.03.07.1010', 'Kelayu Utara'),
('52.03.07.1011', 'Kelaju Jorong'),
('52.03.07.2012', 'Danggen Timur'),
('52.03.08', 'Pringgabaya'),
('52.03.08.2001', 'Bagik Papan'),
('52.03.08.2002', 'Apit Aik'),
('52.03.08.2003', 'Kerumut'),
('52.03.08.2004', 'Pohgading'),
('52.03.08.2005', 'Batuyang'),
('52.03.08.2006', 'Pringgabaya'),
('52.03.08.2007', 'Labuhan Lombok'),
('52.03.08.2008', 'Pringgabaya Utara'),
('52.03.08.2009', 'Pohgading Timur'),
('52.03.08.2010', 'Teko'),
('52.03.08.2011', 'Anggaraksa'),
('52.03.08.2012', 'Tanak Gadang'),
('52.03.08.2013', 'Gunung Malang'),
('52.03.08.2014', 'Seruni Mumbul'),
('52.03.08.2015', 'Telaga Waru'),
('52.03.09', 'Aikmel'),
('52.03.09.2002', 'Aikmel'),
('52.03.09.2003', 'Kalijaga'),
('52.03.09.2004', 'Kembang Kerang'),
('52.03.09.2007', 'Aikmel Utara'),
('52.03.09.2008', 'Kalijaga Timur'),
('52.03.09.2009', 'Kalijaga Selatan'),
('52.03.09.2010', 'Aikmel Barat'),
('52.03.09.2011', 'Kembang Kerang Daya'),
('52.03.09.2014', 'Toya'),
('52.03.09.2019', 'Kalijaga Tengah'),
('52.03.09.2020', 'Bagik Nyaka Santri'),
('52.03.09.2021', 'Aik Prapa'),
('52.03.09.2023', 'Aikmel Timur'),
('52.03.09.2024', 'Keroya'),
('52.03.10', 'Sambelia'),
('52.03.10.2001', 'Obel-obel'),
('52.03.10.2002', 'Belanting'),
('52.03.10.2003', 'Sambalia'),
('52.03.10.2004', 'Labuhan Pandan'),
('52.03.10.2005', 'Sugian'),
('52.03.10.2006', 'Darakunci'),
('52.03.10.2007', 'Bagik Manis'),
('52.03.10.2008', 'Dadap'),
('52.03.10.2009', 'Madayin'),
('52.03.10.2010', 'Senanggalih'),
('52.03.10.2011', 'Padak Guar'),
('52.03.11', 'Montong Gading'),
('52.03.11.2001', 'Pringga Jurang'),
('52.03.11.2002', 'Montong Betok'),
('52.03.11.2003', 'Kilang'),
('52.03.11.2004', 'Perian'),
('52.03.11.2005', 'Jenggik Utara'),
('52.03.11.2006', 'Pringgajurang Utara'),
('52.03.11.2007', 'Pesanggrahan'),
('52.03.11.2008', 'Lendang Belo'),
('52.03.12', 'Pringgasela'),
('52.03.12.2001', 'Rempung'),
('52.03.12.2002', 'Pringgasela'),
('52.03.12.2003', 'Jurit'),
('52.03.12.2004', 'Pengadangan'),
('52.03.12.2005', 'Aik Dewa'),
('52.03.12.2006', 'Jurit Baru'),
('52.03.12.2007', 'Pringgasela Selatan'),
('52.03.12.2008', 'Pengadangan Barat'),
('52.03.12.2009', 'Timbanuh'),
('52.03.12.2010', 'Pringgasela Timur'),
('52.03.13', 'Suralaga'),
('52.03.13.2001', 'Anjani'),
('52.03.13.2002', 'Tebaban'),
('52.03.13.2003', 'Kerongkong'),
('52.03.13.2004', 'Bagik Payung'),
('52.03.13.2005', 'Suralaga'),
('52.03.13.2006', 'Bagik Payung Selatan'),
('52.03.13.2007', 'Tumbuh Mulia'),
('52.03.13.2008', 'Dasan Borok'),
('52.03.13.2009', 'Gerung Permai'),
('52.03.13.2010', 'Dames Damai'),
('52.03.13.2011', 'Bagik Payung Timur'),
('52.03.13.2012', 'Waringin'),
('52.03.13.2013', 'Gapuk'),
('52.03.13.2014', 'Bintang Rinjani'),
('52.03.13.2015', 'Paok Lombok'),
('52.03.14', 'Wanasaba'),
('52.03.14.2001', 'Mamben Daya'),
('52.03.14.2002', 'Mamben Lauk'),
('52.03.14.2003', 'Wanasaba'),
('52.03.14.2004', 'Karang Baru'),
('52.03.14.2005', 'Bebidas'),
('52.03.14.2006', 'Tembeng Putik'),
('52.03.14.2007', 'Wanasaba Lauk'),
('52.03.14.2008', 'Beriri Jarak'),
('52.03.14.2009', 'Bandok'),
('52.03.14.2010', 'Mamben Baru'),
('52.03.14.2011', 'Otak Rarangan'),
('52.03.14.2012', 'Jineng'),
('52.03.14.2013', 'Wanasaba Daya'),
('52.03.14.2014', 'Karang Baru Timur'),
('52.03.15', 'Sembalun'),
('52.03.15.2001', 'Sembalun Bumbung'),
('52.03.15.2002', 'Sembalun Lawang'),
('52.03.15.2003', 'Sajang'),
('52.03.15.2004', 'Bilok Petung'),
('52.03.15.2005', 'Sembalun'),
('52.03.15.2006', 'Sembalun Timba Gading'),
('52.03.16', 'Suwela'),
('52.03.16.2001', 'Selaparang'),
('52.03.16.2002', 'Ketangga'),
('52.03.16.2003', 'Suntalangu'),
('52.03.16.2004', 'Suela'),
('52.03.16.2005', 'Sapit'),
('52.03.16.2006', 'Perigi'),
('52.03.16.2007', 'Mekar Sari'),
('52.03.16.2008', 'Puncak Jeringo'),
('52.03.17', 'Labuhan Haji'),
('52.03.17.1004', 'Tanjung'),
('52.03.17.1005', 'Suryawangi'),
('52.03.17.1007', 'Ijobalit'),
('52.03.17.1012', 'Geres'),
('52.03.17.2001', 'Labuhan Haji'),
('52.03.17.2002', 'Peneda Gandor'),
('52.03.17.2003', 'Teros'),
('52.03.17.2006', 'Korleko'),
('52.03.17.2008', 'Kertasari'),
('52.03.17.2009', 'Tirtanadi'),
('52.03.17.2010', 'Banjarsari'),
('52.03.17.2011', 'Korleko Selatan'),
('52.03.18', 'Sakra Timur'),
('52.03.18.2001', 'Gelanggang'),
('52.03.18.2002', 'Surabaya'),
('52.03.18.2003', 'Lepak'),
('52.03.18.2004', 'Gereneng'),
('52.03.18.2005', 'Montong Tangi'),
('52.03.18.2006', 'Menceh'),
('52.03.18.2007', 'Lepak Timur'),
('52.03.18.2008', 'Surabaya Utara'),
('52.03.18.2009', 'Gereneng Timur'),
('52.03.18.2010', 'Lenting'),
('52.03.19', 'Sakra Barat'),
('52.03.19.2001', 'Sukarara'),
('52.03.19.2002', 'Gunung Rajak'),
('52.03.19.2003', 'Rensing'),
('52.03.19.2004', 'Bungtiang'),
('52.03.19.2005', 'Pengkelak Mas'),
('52.03.19.2006', 'Borok Toyang'),
('52.03.19.2007', 'Rensing Raya'),
('52.03.19.2008', 'Pematung'),
('52.03.19.2009', 'Jerogunung'),
('52.03.19.2010', 'Pejaring'),
('52.03.19.2011', 'Boyemare'),
('52.03.19.2012', 'Montong Beter'),
('52.03.19.2013', 'Mengkuru'),
('52.03.19.2014', 'Gadungmas'),
('52.03.19.2015', 'Kembang Are Sampai'),
('52.03.19.2016', 'Rensing Bat'),
('52.03.19.2017', 'Tanak Kaken'),
('52.03.19.2018', 'Gerisak Semanggeleng'),
('52.03.20', 'Jerowaru'),
('52.03.20.2001', 'Batu Nampar'),
('52.03.20.2002', 'Sukaraja'),
('52.03.20.2003', 'Jerowaru'),
('52.03.20.2004', 'Pemongkong'),
('52.03.20.2005', 'Sekaroh'),
('52.03.20.2006', 'Pandan Wangi'),
('52.03.20.2007', 'Wakan'),
('52.03.20.2008', 'Kwang Rundun'),
('52.03.20.2009', 'Ekas Buana'),
('52.03.20.2010', 'Sepapan'),
('52.03.20.2011', 'Seriwe'),
('52.03.20.2012', 'Pene'),
('52.03.20.2013', 'Batunampar Selatan'),
('52.03.20.2014', 'Sukadamai'),
('52.03.20.2015', 'Pare Mas'),
('52.03.21', 'Lenek'),
('52.03.21.2001', 'Lenek'),
('52.03.21.2002', 'Lenek Lauk'),
('52.03.21.2003', 'Lenek Daya'),
('52.03.21.2004', 'Lenek Baru'),
('52.03.21.2005', 'Lenek Kali Bambang'),
('52.03.21.2006', 'Lenek Pasiraman'),
('52.03.21.2007', 'Lenek Ramban Biak'),
('52.03.21.2008', 'Lenek Duren'),
('52.03.21.2009', 'Sukarema'),
('52.03.21.2010', 'Kalijaga Baru'),
('52.04', 'SUMBAWA'),
('52.04.02', 'Lunyuk'),
('52.04.02.2001', 'Lunyuk Rea'),
('52.04.02.2002', 'Lunyuk Ode'),
('52.04.02.2003', 'Jamu'),
('52.04.02.2007', 'Pada Suka'),
('52.04.02.2008', 'Suka Maju'),
('52.04.02.2009', 'Perung'),
('52.04.02.2010', 'Emang Lestari'),
('52.04.05', 'Alas'),
('52.04.05.2001', 'Luar'),
('52.04.05.2002', 'Baru'),
('52.04.05.2003', 'Kalimango'),
('52.04.05.2004', 'Marente'),
('52.04.05.2005', 'Juran Alas'),
('52.04.05.2006', 'Dalam'),
('52.04.05.2007', 'Pulau Bungin'),
('52.04.05.2012', 'Labuhan Alas'),
('52.04.06', 'Utan'),
('52.04.06.2001', 'Stowe Brang'),
('52.04.06.2002', 'Labuhan Bajo'),
('52.04.06.2003', 'Pukat'),
('52.04.06.2004', 'Orong Bawa'),
('52.04.06.2005', 'Jorok'),
('52.04.06.2006', 'Motong'),
('52.04.06.2007', 'Tengah'),
('52.04.06.2008', 'Sebedo'),
('52.04.06.2012', 'Bale Brang'),
('52.04.07', 'Batu Lanteh'),
('52.04.07.2001', 'Batu Rotok'),
('52.04.07.2002', 'Tangkam Pulit'),
('52.04.07.2003', 'Bao Desa'),
('52.04.07.2004', 'Tepal'),
('52.04.07.2005', 'Batu Dulang'),
('52.04.07.2006', 'Kelungkung'),
('52.04.08', 'Sumbawa'),
('52.04.08.1001', 'Samapuin'),
('52.04.08.1002', 'Brang Bara'),
('52.04.08.1003', 'Pekat'),
('52.04.08.1004', 'Seketeng'),
('52.04.08.1005', 'Bugis'),
('52.04.08.1006', 'Lempeh'),
('52.04.08.1007', 'Brang Biji'),
('52.04.08.1008', 'Uma Sima'),
('52.04.09', 'Moyo Hilir'),
('52.04.09.2001', 'Moyo'),
('52.04.09.2002', 'Kakiang'),
('52.04.09.2003', 'Ngeru'),
('52.04.09.2004', 'Berare'),
('52.04.09.2005', 'Poto'),
('52.04.09.2009', 'Serading'),
('52.04.09.2010', 'Olat Rawa'),
('52.04.09.2011', 'Batu Bangka'),
('52.04.09.2013', 'Moyo Mekar'),
('52.04.09.2014', 'Labuhan Ijuk'),
('52.04.10', 'Moyo Hulu'),
('52.04.10.2001', 'Sempe'),
('52.04.10.2002', 'Semamung'),
('52.04.10.2003', 'Sebasang'),
('52.04.10.2004', 'Batu Tering'),
('52.04.10.2005', 'Batu Bulan'),
('52.04.10.2006', 'Mokong'),
('52.04.10.2007', 'Pernek'),
('52.04.10.2008', 'Leseng'),
('52.04.10.2009', 'Lito'),
('52.04.10.2010', 'Marga Karya'),
('52.04.10.2011', 'Maman'),
('52.04.10.2012', 'Brang Rea'),
('52.04.11', 'Ropang'),
('52.04.11.2002', 'Lebin'),
('52.04.11.2003', 'Lebangkar'),
('52.04.11.2008', 'Ropang'),
('52.04.11.2009', 'Lawin'),
('52.04.11.2010', 'Ranan'),
('52.04.12', 'Lape'),
('52.04.12.2003', 'Lape'),
('52.04.12.2005', 'Labuhan Kuris'),
('52.04.12.2006', 'Dete'),
('52.04.12.2009', 'Hijrah'),
('52.04.13', 'Plampang'),
('52.04.13.2003', 'Muer'),
('52.04.13.2004', 'Plampang'),
('52.04.13.2005', 'Teluk Santong'),
('52.04.13.2006', 'Sepayung'),
('52.04.13.2007', 'Sepakat'),
('52.04.13.2008', 'UPT. Perode SP I'),
('52.04.13.2009', 'UPT. Perode SP II'),
('52.04.13.2010', 'UPT Perode SP III'),
('52.04.13.2012', 'Selanteh'),
('52.04.13.2013', 'Brang Kolong'),
('52.04.13.2014', 'Usar'),
('52.04.14', 'Empang'),
('52.04.14.2001', 'Boal'),
('52.04.14.2002', 'Jotang'),
('52.04.14.2003', 'Empang Atas'),
('52.04.14.2004', 'Empang Bawa'),
('52.04.14.2005', 'Ongko'),
('52.04.14.2012', 'Lamenta'),
('52.04.14.2013', 'Gapit'),
('52.04.14.2014', 'Pamanto'),
('52.04.14.2015', 'Bunga Eja'),
('52.04.14.2016', 'Jotang Beru'),
('52.04.17', 'Alas Barat'),
('52.04.17.2001', 'Mapin Rea'),
('52.04.17.2002', 'Mapin Kebak'),
('52.04.17.2003', 'Labuhan Mapin'),
('52.04.17.2004', 'Lekong'),
('52.04.17.2005', 'Gontar'),
('52.04.17.2006', 'Usar Mapin'),
('52.04.17.2007', 'Gontar Baru'),
('52.04.17.2008', 'Mapin Beru'),
('52.04.18', 'Labuhan Badas'),
('52.04.18.2001', 'Labuhan Badas'),
('52.04.18.2002', 'Karang Dima'),
('52.04.18.2003', 'Labuhan Sumbawa'),
('52.04.18.2004', 'Labuhan Aji'),
('52.04.18.2005', 'Sebotok'),
('52.04.18.2006', 'Bajo Medang'),
('52.04.18.2007', 'Bugis Medang'),
('52.04.19', 'Labangka'),
('52.04.19.2001', 'Labangka'),
('52.04.19.2002', 'Sekokat'),
('52.04.19.2003', 'Suka Mulya'),
('52.04.19.2004', 'Suka Damai'),
('52.04.19.2005', 'Jaya Makmur'),
('52.04.20', 'Buer'),
('52.04.20.2001', 'Tarusa'),
('52.04.20.2002', 'Juru Mapin'),
('52.04.20.2003', 'Kalabeso'),
('52.04.20.2004', 'Labuhan Burung'),
('52.04.20.2005', 'Pulau Kaung'),
('52.04.20.2006', 'Buin Baru'),
('52.04.21', 'Rhee'),
('52.04.21.2001', 'Rhee'),
('52.04.21.2002', 'Sampe'),
('52.04.21.2003', 'Luk'),
('52.04.21.2004', 'Rhee Loka'),
('52.04.22', 'Unter Iwes'),
('52.04.22.2001', 'Pelat'),
('52.04.22.2002', 'Kerekeh'),
('52.04.22.2003', 'Boak'),
('52.04.22.2004', 'Jorok'),
('52.04.22.2005', 'Kerato'),
('52.04.22.2006', 'Pungka'),
('52.04.22.2007', 'Uma Beringin'),
('52.04.22.2008', 'Nijang'),
('52.04.23', 'Moyo Utara'),
('52.04.23.2001', 'Pungkit'),
('52.04.23.2002', 'Sebewe'),
('52.04.23.2003', 'Penyaring'),
('52.04.23.2004', 'Kukin'),
('52.04.23.2005', 'Baru Tahan'),
('52.04.23.2006', 'Songkar'),
('52.04.24', 'Maronge'),
('52.04.24.2001', 'Simu'),
('52.04.24.2002', 'Maronge'),
('52.04.24.2003', 'Pamasar'),
('52.04.24.2004', 'Labuhan Sangoro'),
('52.04.25', 'Tarano'),
('52.04.25.2001', 'Bantulante'),
('52.04.25.2002', 'Labuhan Bontong'),
('52.04.25.2003', 'Labuhan Aji'),
('52.04.25.2004', 'Labuhan Jambu'),
('52.04.25.2005', 'Mata'),
('52.04.25.2006', 'Tolo Oi'),
('52.04.25.2007', 'Banda'),
('52.04.25.2008', 'Labuhan Pidang'),
('52.04.26', 'Lopok'),
('52.04.26.2001', 'Pungkit'),
('52.04.26.2002', 'Berora'),
('52.04.26.2003', 'Lopok'),
('52.04.26.2004', 'Langam'),
('52.04.26.2005', 'Mamak'),
('52.04.26.2006', 'Lopok Beru'),
('52.04.26.2007', 'Tatede'),
('52.04.27', 'Lenangguar'),
('52.04.27.2001', 'Tatebal'),
('52.04.27.2002', 'Lenangguar'),
('52.04.27.2003', 'Ledang'),
('52.04.27.2004', 'Telaga'),
('52.04.28', 'Orong Telu'),
('52.04.28.2001', 'Senawang'),
('52.04.28.2002', 'Kelawis'),
('52.04.28.2003', 'Mungkin'),
('52.04.28.2004', 'Sebeok'),
('52.04.29', 'Lantung'),
('52.04.29.2001', 'Lantung'),
('52.04.29.2002', 'Sepukur'),
('52.04.29.2003', 'Ai Mual'),
('52.04.29.2004', 'Padesa'),
('52.05', 'DOMPU'),
('52.05.01', 'Dompu'),
('52.05.01.1001', 'Bada'),
('52.05.01.1002', 'Bali'),
('52.05.01.1003', 'Potu'),
('52.05.01.1004', 'Karijawa'),
('52.05.01.1005', 'Dora Tangga'),
('52.05.01.1006', 'Kandai I'),
('52.05.01.2007', 'O o'),
('52.05.01.2008', 'Katua'),
('52.05.01.2009', 'Karamabura'),
('52.05.01.2010', 'Mbawi'),
('52.05.01.2011', 'Dore Bara'),
('52.05.01.2012', 'Kareke'),
('52.05.01.2013', 'Mangge Nae'),
('52.05.01.2014', 'Manggeasi'),
('52.05.01.2015', 'Sori Sakolo'),
('52.05.02', 'Kempo'),
('52.05.02.2001', 'Kempo'),
('52.05.02.2002', 'Ta a'),
('52.05.02.2003', 'Soro'),
('52.05.02.2004', 'Konte'),
('52.05.02.2005', 'Tolo Kalo'),
('52.05.02.2006', 'Songgaja'),
('52.05.02.2007', 'Doro Kobo'),
('52.05.02.2008', 'Soro Barat'),
('52.05.03', 'Hu u'),
('52.05.03.2001', 'Rasa Bou'),
('52.05.03.2002', 'Daha'),
('52.05.03.2003', 'Hu u'),
('52.05.03.2004', 'Adu'),
('52.05.03.2005', 'Cempi Jaya'),
('52.05.03.2006', 'Merada'),
('52.05.03.2007', 'Jala'),
('52.05.03.2008', 'Sawe'),
('52.05.04', 'Kilo'),
('52.05.04.2001', 'Malaju'),
('52.05.04.2002', 'Lasi'),
('52.05.04.2003', 'Mbuju'),
('52.05.04.2004', 'Kiwu'),
('52.05.04.2005', 'Taropo'),
('52.05.04.2006', 'Karama'),
('52.05.05', 'Woja'),
('52.05.05.1001', 'Monta Baru'),
('52.05.05.1002', 'Kandai II'),
('52.05.05.1003', 'Simpasai'),
('52.05.05.2004', 'Saneo'),
('52.05.05.2005', 'Wawonduru'),
('52.05.05.2006', 'Matua'),
('52.05.05.2007', 'Nowa'),
('52.05.05.2008', 'Bara'),
('52.05.05.2009', 'Mada Prama'),
('52.05.05.2010', 'Riwo'),
('52.05.05.2011', 'Mumbu'),
('52.05.05.2012', 'Sera Kapi'),
('52.05.05.2013', 'Raba Baka'),
('52.05.05.2014', 'Baka Jaya'),
('52.05.06', 'Pekat'),
('52.05.06.2001', 'Pekat'),
('52.05.06.2002', 'Nangamiro'),
('52.05.06.2003', 'Kadindi'),
('52.05.06.2004', 'Beringin Jaya'),
('52.05.06.2005', 'Sori Nomo'),
('52.05.06.2006', 'Tambora'),
('52.05.06.2007', 'Doro Peti'),
('52.05.06.2008', 'Karombo'),
('52.05.06.2009', 'Kadindi Barat'),
('52.05.06.2010', 'Nangakara'),
('52.05.06.2011', 'Sori Tatanga'),
('52.05.06.2012', 'Calabai'),
('52.05.07', 'Manggalewa'),
('52.05.07.2001', 'Soriutu'),
('52.05.07.2002', 'Banggo'),
('52.05.07.2003', 'Kwangko'),
('52.05.07.2004', 'Lanci Jaya'),
('52.05.07.2005', 'Suka Damai'),
('52.05.07.2006', 'Nusa Jaya'),
('52.05.07.2007', 'Doromelo'),
('52.05.07.2008', 'Nangatumpu'),
('52.05.07.2009', 'Kampasi Meci'),
('52.05.07.2010', 'Teka Sire'),
('52.05.07.2011', 'Anamina'),
('52.05.07.2012', 'Tanju'),
('52.05.08', 'Pajo'),
('52.05.08.2001', 'Ranggo'),
('52.05.08.2002', 'Jambu'),
('52.05.08.2003', 'Lepadi'),
('52.05.08.2004', 'Lune'),
('52.05.08.2005', 'Woko'),
('52.05.08.2006', 'Tembal Lae'),
('52.06', 'BIMA'),
('52.06.01', 'Monta'),
('52.06.01.2005', 'Tolotangga'),
('52.06.01.2006', 'Sondo'),
('52.06.01.2007', 'Simpasai'),
('52.06.01.2008', 'Sie'),
('52.06.01.2009', 'Tangga'),
('52.06.01.2010', 'Monta'),
('52.06.01.2011', 'Sakuru'),
('52.06.01.2012', 'Baralau'),
('52.06.01.2014', 'Tolouwi'),
('52.06.01.2015', 'Wilamaci'),
('52.06.01.2016', 'Pela'),
('52.06.01.2017', 'Tangga Baru'),
('52.06.01.2018', 'Nontotera'),
('52.06.01.2019', 'Waro'),
('52.06.02', 'Bolo'),
('52.06.02.2001', 'Tambe'),
('52.06.02.2002', 'Rasabau'),
('52.06.02.2003', 'Rato'),
('52.06.02.2004', 'Kananga'),
('52.06.02.2005', 'Leu'),
('52.06.02.2006', 'Timu'),
('52.06.02.2007', 'Bontokape'),
('52.06.02.2008', 'Sondosia'),
('52.06.02.2009', 'Nggembe'),
('52.06.02.2010', 'Sanolo'),
('52.06.02.2011', 'Tumpu'),
('52.06.02.2012', 'Rada'),
('52.06.02.2013', 'Kara'),
('52.06.02.2014', 'Darussalam'),
('52.06.03', 'Woha'),
('52.06.03.2001', 'Keli'),
('52.06.03.2002', 'Tenga'),
('52.06.03.2003', 'Tente'),
('52.06.03.2004', 'Rabakodo'),
('52.06.03.2005', 'Samili'),
('52.06.03.2006', 'Kalampa'),
('52.06.03.2007', 'Risa'),
('52.06.03.2008', 'Pandai'),
('52.06.03.2009', 'Donggobolo'),
('52.06.03.2010', 'Dadibou'),
('52.06.03.2011', 'Talabiu'),
('52.06.03.2012', 'Naru'),
('52.06.03.2013', 'Nisa'),
('52.06.03.2014', 'Waduwani'),
('52.06.03.2015', 'Penapali'),
('52.06.04', 'Belo'),
('52.06.04.2001', 'Ncera'),
('52.06.04.2002', 'Lido'),
('52.06.04.2003', 'Ngali'),
('52.06.04.2004', 'Renda'),
('52.06.04.2005', 'Cenggu'),
('52.06.04.2006', 'Runggu'),
('52.06.04.2014', 'Soki'),
('52.06.04.2015', 'Roka'),
('52.06.04.2016', 'Diha'),
('52.06.05', 'Wawo'),
('52.06.05.2001', 'Tarlawi'),
('52.06.05.2005', 'Ntori'),
('52.06.05.2006', 'Maria'),
('52.06.05.2007', 'Pesa'),
('52.06.05.2008', 'Raba'),
('52.06.05.2011', 'Kambilo'),
('52.06.05.2012', 'Maria Utara'),
('52.06.05.2013', 'Kombo'),
('52.06.05.2014', 'Rianmau'),
('52.06.06', 'Sape'),
('52.06.06.2001', 'Sari'),
('52.06.06.2002', 'Boke'),
('52.06.06.2003', 'Jia'),
('52.06.06.2004', 'Bugis'),
('52.06.06.2005', 'Naru'),
('52.06.06.2006', 'Rasabou'),
('52.06.06.2007', 'Sangia'),
('52.06.06.2008', 'Na e'),
('52.06.06.2009', 'Rai O i'),
('52.06.06.2010', 'Parangina'),
('52.06.06.2011', 'Kowo'),
('52.06.06.2012', 'Buncu'),
('52.06.06.2013', 'Poja'),
('52.06.06.2014', 'Bajo Pulo'),
('52.06.06.2015', 'Naru Barat'),
('52.06.06.2016', 'Tanah Putih'),
('52.06.06.2017', 'Lamera'),
('52.06.06.2018', 'Oi Maci'),
('52.06.07', 'Wera'),
('52.06.07.2001', 'Ntoke'),
('52.06.07.2002', 'Pai'),
('52.06.07.2003', 'Nunggi'),
('52.06.07.2004', 'Tawali'),
('52.06.07.2005', 'Hadirasa'),
('52.06.07.2006', 'Wora'),
('52.06.07.2007', 'Sangiang'),
('52.06.07.2008', 'Bala'),
('52.06.07.2009', 'Oi Tui'),
('52.06.07.2010', 'Tadewa'),
('52.06.07.2011', 'Nanga Wera'),
('52.06.07.2012', 'Ranggasolo'),
('52.06.07.2013', 'Kalajena'),
('52.06.07.2014', 'Mandala'),
('52.06.08', 'Donggo'),
('52.06.08.2005', 'Dori Dungga'),
('52.06.08.2006', 'Kala'),
('52.06.08.2007', 'O o'),
('52.06.08.2008', 'Mbawa'),
('52.06.08.2009', 'Palama'),
('52.06.08.2010', 'Rora'),
('52.06.08.2012', 'Mpili'),
('52.06.08.2013', 'Bumi Pajo'),
('52.06.08.2014', 'Ndano Na e'),
('52.06.09', 'Sanggar'),
('52.06.09.2001', 'Piong'),
('52.06.09.2002', 'Boro'),
('52.06.09.2003', 'Kore'),
('52.06.09.2004', 'Taloko'),
('52.06.09.2005', 'Oi Saro'),
('52.06.09.2006', 'Sandue'),
('52.06.10', 'Ambalawi'),
('52.06.10.2001', 'Nipa'),
('52.06.10.2002', 'Tolowata'),
('52.06.10.2003', 'Rite'),
('52.06.10.2004', 'Mawu'),
('52.06.10.2005', 'Talapiti'),
('52.06.10.2006', 'Kole'),
('52.06.11', 'Langgudu'),
('52.06.11.2001', 'Waworada'),
('52.06.11.2002', 'Karumbu'),
('52.06.11.2003', 'Rupe'),
('52.06.11.2004', 'Kalodu'),
('52.06.11.2005', 'Kawuwu'),
('52.06.11.2006', 'Doro Oo'),
('52.06.11.2007', 'Laju'),
('52.06.11.2008', 'Kangga'),
('52.06.11.2009', 'Karampi'),
('52.06.11.2010', 'Waduruka'),
('52.06.11.2011', 'Dumu'),
('52.06.11.2012', 'Rompo'),
('52.06.11.2013', 'Sarae Ruma'),
('52.06.11.2014', 'Pusu'),
('52.06.11.2015', 'Sambane'),
('52.06.12', 'Lambu'),
('52.06.12.2001', 'Kaleo'),
('52.06.12.2002', 'Simpasai'),
('52.06.12.2003', 'Mangge'),
('52.06.12.2004', 'Lanta'),
('52.06.12.2005', 'Nggelu'),
('52.06.12.2006', 'Rato'),
('52.06.12.2007', 'Sumi'),
('52.06.12.2008', 'Soro'),
('52.06.12.2009', 'Lambu'),
('52.06.12.2010', 'Hidirasa'),
('52.06.12.2011', 'Lanta Barat'),
('52.06.12.2012', 'Melayu'),
('52.06.12.2013', 'Sangga'),
('52.06.12.2014', 'Monta Baru'),
('52.06.13', 'Madapangga'),
('52.06.13.2001', 'Woro'),
('52.06.13.2002', 'Campa'),
('52.06.13.2003', 'Mpuri'),
('52.06.13.2004', 'Ndano'),
('52.06.13.2005', 'Monggo'),
('52.06.13.2006', 'Dena'),
('52.06.13.2007', 'Rade'),
('52.06.13.2008', 'Tonda'),
('52.06.13.2009', 'Bolo'),
('52.06.13.2010', 'Madawau'),
('52.06.13.2011', 'Ncandi'),
('52.06.14', 'Tambora'),
('52.06.14.2001', 'Labuhan Kenanga'),
('52.06.14.2002', 'Kawinda Nae'),
('52.06.14.2003', 'Kawinda Toi'),
('52.06.14.2004', 'Oi Panihi'),
('52.06.14.2005', 'Oi Bura'),
('52.06.14.2006', 'Oi Katupa'),
('52.06.14.2007', 'Rasabou'),
('52.06.15', 'Soromandi'),
('52.06.15.2001', 'Bajo'),
('52.06.15.2002', 'Punti'),
('52.06.15.2003', 'Wadukopa'),
('52.06.15.2004', 'Kanata'),
('52.06.15.2005', 'Sai'),
('52.06.15.2006', 'Sampungu'),
('52.06.15.2007', 'Lewintana'),
('52.06.16', 'Parado'),
('52.06.16.2001', 'Parado Wane'),
('52.06.16.2002', 'Parado Rato'),
('52.06.16.2003', 'Kuta'),
('52.06.16.2004', 'Kanca'),
('52.06.16.2005', 'Lere'),
('52.06.17', 'Lambitu'),
('52.06.17.2001', 'Kabaro'),
('52.06.17.2002', 'Kuta'),
('52.06.17.2003', 'Sambori'),
('52.06.17.2004', 'Teta'),
('52.06.17.2005', 'Ka owa'),
('52.06.17.2006', 'Londu'),
('52.06.18', 'Palibelo'),
('52.06.18.2001', 'Panda'),
('52.06.18.2002', 'Belo'),
('52.06.18.2003', 'Tolongondoa'),
('52.06.18.2004', 'Tonggorisa'),
('52.06.18.2005', 'Teke'),
('52.06.18.2006', 'Ntonggu'),
('52.06.18.2007', 'Nata'),
('52.06.18.2008', 'Dore'),
('52.06.18.2009', 'Roi'),
('52.06.18.2011', 'Ragi'),
('52.06.18.2012', 'Padolo'),
('52.06.18.2013', 'Bre'),
('52.07', 'SUMBAWA BARAT'),
('52.07.01', 'Jereweh'),
('52.07.01.2001', 'Goa'),
('52.07.01.2002', 'Belo'),
('52.07.01.2003', 'Beru'),
('52.07.01.2009', 'Dasan Anyar'),
('52.07.02', 'Taliwang'),
('52.07.02.1004', 'Menala'),
('52.07.02.1005', 'Kuang'),
('52.07.02.1006', 'Bugis'),
('52.07.02.1007', 'Dalam'),
('52.07.02.1008', 'Sampir'),
('52.07.02.1012', 'Telaga Bertong'),
('52.07.02.1019', 'Arab Kenangan'),
('52.07.02.2001', 'Labuhan Lalar'),
('52.07.02.2009', 'Lalar Liang'),
('52.07.02.2010', 'Labuhan Kertasari'),
('52.07.02.2011', 'Seloto'),
('52.07.02.2013', 'Tamekan'),
('52.07.02.2014', 'Banjar'),
('52.07.02.2015', 'Batu Putih'),
('52.07.02.2020', 'Sermong'),
('52.07.03', 'Seteluk'),
('52.07.03.2001', 'Meraran'),
('52.07.03.2002', 'Air Suning'),
('52.07.03.2003', 'Rempe'),
('52.07.03.2004', 'Seteluk Atas'),
('52.07.03.2005', 'Seteluk Tengah'),
('52.07.03.2008', 'Kelanir'),
('52.07.03.2011', 'Tapir'),
('52.07.03.2013', 'Lamusung'),
('52.07.03.2014', 'Seran'),
('52.07.03.2015', 'Desaloka'),
('52.07.04', 'Sekongkang'),
('52.07.04.2001', 'Sekongkang Atas'),
('52.07.04.2002', 'Sekongkang Bawah'),
('52.07.04.2003', 'Tongo'),
('52.07.04.2004', 'Ai Kangkung'),
('52.07.04.2005', 'Tatar'),
('52.07.04.2006', 'Talonang Baru'),
('52.07.04.2007', 'Kemuning'),
('52.07.05', 'Brang Rea'),
('52.07.05.2001', 'Desa Beru'),
('52.07.05.2002', 'Tepas'),
('52.07.05.2003', 'Bangkat Monteh'),
('52.07.05.2004', 'Sapugara Bree'),
('52.07.05.2005', 'Tepas Sepakat'),
('52.07.05.2006', 'Lamuntet'),
('52.07.05.2007', 'Rarak Ronges'),
('52.07.05.2008', 'Moteng'),
('52.07.05.2009', 'Seminar Salit'),
('52.07.06', 'Poto Tano'),
('52.07.06.2001', 'Senayan'),
('52.07.06.2002', 'Mantar'),
('52.07.06.2003', 'Kiantar'),
('52.07.06.2004', 'Poto Tano'),
('52.07.06.2005', 'UPT Tambak Sari'),
('52.07.06.2006', 'Kokarlian'),
('52.07.06.2007', 'Tebo'),
('52.07.06.2008', 'Tuananga'),
('52.07.07', 'Brang Ene'),
('52.07.07.2001', 'Mura'),
('52.07.07.2002', 'Kalimantong'),
('52.07.07.2003', 'Lampok'),
('52.07.07.2004', 'Manemeng'),
('52.07.07.2005', 'Mujahiddin'),
('52.07.07.2006', 'Mataiyang'),
('52.07.08', 'Maluk'),
('52.07.08.2001', 'Maluk'),
('52.07.08.2002', 'Benete'),
('52.07.08.2003', 'Bukit Damai'),
('52.07.08.2004', 'Mantun'),
('52.07.08.2005', 'Pasir Putih'),
('52.08', 'LOMBOK UTARA'),
('52.08.01', 'Tanjung'),
('52.08.01.2001', 'Tanjung'),
('52.08.01.2002', 'Sokong'),
('52.08.01.2003', 'Jenggala'),
('52.08.01.2004', 'Tegal Maja'),
('52.08.01.2005', 'Sigar Penjalin'),
('52.08.01.2006', 'Medana'),
('52.08.01.2007', 'Teniga'),
('52.08.02', 'Gangga'),
('52.08.02.2001', 'Gondang'),
('52.08.02.2002', 'Bentek'),
('52.08.02.2003', 'Genggelang'),
('52.08.02.2004', 'Rempek'),
('52.08.02.2005', 'Sambik Bangkol'),
('52.08.03', 'Kayangan'),
('52.08.03.2001', 'Kayangan'),
('52.08.03.2002', 'Santong'),
('52.08.03.2003', 'Selengen'),
('52.08.03.2004', 'Sesait'),
('52.08.03.2005', 'Gumantar'),
('52.08.03.2006', 'Salut'),
('52.08.03.2007', 'Dangiang'),
('52.08.03.2008', 'Pendua'),
('52.08.04', 'Bayan'),
('52.08.04.2001', 'Bayan'),
('52.08.04.2002', 'Loloan'),
('52.08.04.2003', 'Anyar'),
('52.08.04.2004', 'Sukadana'),
('52.08.04.2005', 'Akat Akar'),
('52.08.04.2006', 'Senaru'),
('52.08.04.2007', 'Mumbul Sari'),
('52.08.04.2008', 'Sambik Elen'),
('52.08.04.2009', 'Karang Bajo'),
('52.08.05', 'Pemenang'),
('52.08.05.2001', 'Pemenang Timur'),
('52.08.05.2002', 'Pemenang Barat'),
('52.08.05.2003', 'Gili Indah'),
('52.08.05.2004', 'Malaka'),
('52.71', 'MATARAM'),
('52.71.01', 'Ampenan'),
('52.71.01.1004', 'Ampenan Selatan'),
('52.71.01.1005', 'Ampenan Tengah'),
('52.71.01.1006', 'Pejeruk'),
('52.71.01.1007', 'Ampenan Utara'),
('52.71.01.1008', 'Taman Sari'),
('52.71.01.1009', 'Banjar'),
('52.71.01.1010', 'Kebun Sari'),
('52.71.01.1011', 'Pajarakan Karya'),
('52.71.01.1012', 'Dayan Peken'),
('52.71.01.1013', 'Bintaro'),
('52.71.02', 'Mataram'),
('52.71.02.1001', 'Pagesangan'),
('52.71.02.1002', 'Mataram Timur'),
('52.71.02.1008', 'Pagutan'),
('52.71.02.1009', 'Pagesangan Barat'),
('52.71.02.1010', 'Pagesangan Timur'),
('52.71.02.1011', 'Pejanggik'),
('52.71.02.1012', 'Punia'),
('52.71.02.1013', 'Pagutan Timur'),
('52.71.02.1014', 'Pagutan Barat'),
('52.71.03', 'Cakranegara'),
('52.71.03.1004', 'Cakranegara Selatan'),
('52.71.03.1005', 'Cakranegara Barat'),
('52.71.03.1006', 'Cakranegara Timur'),
('52.71.03.1007', 'Cakranegara Utara'),
('52.71.03.1009', 'Sayang-sayang'),
('52.71.03.1010', 'Cakranegara Selatan Baru'),
('52.71.03.1011', 'Sapta Marga'),
('52.71.03.1012', 'Cilinaya'),
('52.71.03.1013', 'Mayura'),
('52.71.03.1014', 'Karang Taliwang'),
('52.71.04', 'Sekarbela'),
('52.71.04.1001', 'Karang Pule'),
('52.71.04.1002', 'Tanjung Karang'),
('52.71.04.1003', 'Jempong Baru'),
('52.71.04.1004', 'Tanjung Karang Permai'),
('52.71.04.1005', 'Kekalik Jaya'),
('52.71.05', 'Selaprang'),
('52.71.05.1001', 'Mataram Barat'),
('52.71.05.1002', 'Dasan Agung'),
('52.71.05.1003', 'Monjok'),
('52.71.05.1004', 'Karang Baru'),
('52.71.05.1005', 'Rembiga'),
('52.71.05.1006', 'Gomong'),
('52.71.05.1007', 'Dasan Agung Baru'),
('52.71.05.1008', 'Monjok Timur'),
('52.71.05.1009', 'Monjok Barat'),
('52.71.06', 'Sandubaya'),
('52.71.06.1001', 'Dasan Cermen'),
('52.71.06.1002', 'Babakan'),
('52.71.06.1003', 'Bertais'),
('52.71.06.1004', 'Selagalas'),
('52.71.06.1005', 'Abian Tubuh Baru'),
('52.71.06.1006', 'Turida'),
('52.71.06.1007', 'Mandalika'),
('52.72', 'BIMA'),
('52.72.01', 'RasanaE Barat'),
('52.72.01.1001', 'Paruga'),
('52.72.01.1002', 'NaE'),
('52.72.01.1003', 'SaraE'),
('52.72.01.1004', 'Tanjung'),
('52.72.01.1013', 'Pane'),
('52.72.01.1014', 'Dara'),
('52.72.02', 'RasanaE Timur'),
('52.72.02.1004', 'Kumbe'),
('52.72.02.1008', 'Lampe'),
('52.72.02.1009', 'Dodu'),
('52.72.02.1011', 'Nungga'),
('52.72.02.1018', 'Kodo'),
('52.72.02.1019', 'Oi Foo'),
('52.72.02.1020', 'Lelamase'),
('52.72.02.1021', 'Oimbo'),
('52.72.03', 'Asakota'),
('52.72.03.1001', 'Melayu'),
('52.72.03.1002', 'Jatiwangi'),
('52.72.03.1003', 'Jatibaru'),
('52.72.03.1004', 'Kolo'),
('52.72.03.1005', 'Jaibaru Timur'),
('52.72.03.1006', 'Ole'),
('52.72.04', 'Raba'),
('52.72.04.1001', 'Penaraga'),
('52.72.04.1002', 'Rontu'),
('52.72.04.1003', 'PenanaE'),
('52.72.04.1004', 'Kendo'),
('52.72.04.1005', 'Ntobo'),
('52.72.04.1006', 'Nitu'),
('52.72.04.1007', 'Rabangodu Selatan'),
('52.72.04.1008', 'Rabadompu Timur'),
('52.72.04.1009', 'Rite'),
('52.72.04.1010', 'Rabadompu Barat'),
('52.72.04.1011', 'Rabangodu Utara'),
('52.72.05', 'Mpunda'),
('52.72.05.1001', 'Monggonao'),
('52.72.05.1002', 'Sadia'),
('52.72.05.1003', 'Santi'),
('52.72.05.1004', 'Sambinae'),
('52.72.05.1005', 'Penatoi'),
('52.72.05.1006', 'Lewirato'),
('52.72.05.1007', 'Mande'),
('52.72.05.1008', 'Panggi'),
('52.72.05.1009', 'Manggemaci'),
('52.72.05.1010', 'Matakando');

-- --------------------------------------------------------

--
-- Table structure for table `detail_grub`
--

CREATE TABLE `detail_grub` (
  `id_detail_grub` int(5) NOT NULL,
  `id_grub` int(5) DEFAULT NULL,
  `id_peserta` int(5) DEFAULT NULL,
  `status` int(1) DEFAULT 0,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_grub`
--

INSERT INTO `detail_grub` (`id_detail_grub`, `id_grub`, `id_peserta`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 0, '2021-08-15', '2021-08-15 20:14:55'),
(2, 1, 2, 0, '2021-08-15', '2021-08-15 20:14:58'),
(3, 1, 3, 0, '2021-08-15', '2021-08-15 20:14:59'),
(4, 1, 4, 0, '2021-08-15', '2021-08-15 20:15:02'),
(5, 1, 5, 0, '2021-08-15', '2021-08-15 20:15:04');

-- --------------------------------------------------------

--
-- Table structure for table `detail_produk`
--

CREATE TABLE `detail_produk` (
  `id_detail_produk` int(5) NOT NULL,
  `id_produk` int(5) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `file_docx` text DEFAULT NULL,
  `file_pdf` text DEFAULT NULL,
  `file_pptx` text DEFAULT NULL,
  `status` int(1) DEFAULT 0,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_produk`
--

INSERT INTO `detail_produk` (`id_detail_produk`, `id_produk`, `nama`, `deskripsi`, `kategori`, `file_docx`, `file_pdf`, `file_pptx`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Farm IOT', 'Produk IOT yang dapat digunakan monitoring suhu kelembapan tanaman hidroponik', 'Aplikasi', NULL, NULL, NULL, 0, '2021-08-15', '2021-08-15 20:10:01'),
(2, 1, 'Lades (Lapak Desa)', 'Platform matketplace untuk menjual kebutuhan desa.', 'Aplikasi', NULL, NULL, NULL, 0, '2021-08-15', '2021-08-15 20:10:43'),
(3, 1, 'Smart Pondok', 'Platform yang mempertemukan kebutuhan wali santri dan santri dalam 1 aplikasi.', 'Aplikasi', NULL, NULL, NULL, 0, '2021-08-15', '2021-08-15 20:11:16'),
(4, 2, 'Guru Kreatif', 'Layanan Digitalisasi Pendidikan dengan menyediakan jasa Content Creator untuk upgrade sistem pembelajaran.', 'Website', NULL, NULL, NULL, 0, '2021-08-15', '2021-08-15 20:11:52'),
(5, 3, 'Teman Wisata', 'Platform yang menyediakan informasi destinasi wisata, penginapan hingga layanan tour guide untuk menemani wisatawan.', 'Web/Aplikasi', NULL, NULL, NULL, 0, '2021-08-15', '2021-08-15 20:12:36'),
(6, 4, 'Taok Tindok', 'Aplikasi yang menyediakan informasi penginapan: kos, kontrakan, hotel hingga desa wisata.', 'Aplikasi', NULL, NULL, NULL, 0, '2021-08-15', '2021-08-15 20:13:27'),
(7, 5, 'E-Artshop', 'Website marketplace untuk penjualan hasil dari kerajinan dari seluruh Indonesia.', 'Website', NULL, NULL, NULL, 0, '2021-08-15', '2021-08-15 20:13:56');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(5) NOT NULL,
  `nama_event` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `scope` varchar(100) DEFAULT NULL,
  `tgl_event` date DEFAULT NULL,
  `status` int(1) DEFAULT 0,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `nama_event`, `deskripsi`, `scope`, `tgl_event`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sharing Session: Validasi Ide Bisnis dengan Bisnis Model Canvas', 'Bisnis Model Canvas merupakah salah satu tool terbaik untuk menguji sebuah ide bisnis sebelum rilis ke publik. Melalui BMC (Bisnis Model Canvas) Anda akan dapat memahami 9 elemen penting yang harus di validasi dari sebuah ide sebelum dinyatakan layak untuk terjun ke pasar.', 'Umum', '2021-08-24', 0, '2021-08-15', '2021-08-17 17:08:07'),
(2, 'Sharing Session: Memetakan Bisnis Sosial Berkelanjutan melalui SMBC', 'Sosial Bisnis Model Canvas merupakah salah satu tool terbaik untuk menguji sebuah ide sosial bisnis. SBMC (Sosial Bisnis Model Canvas) tidak jauh berbeda dengan BMC (Bisnis Model Canvas) namun SBMC punya elemen tambahan yang digunakan untuk menguji dan akurasi suatu ide sosial.', 'Umum', '2021-08-13', 0, '2021-08-15', '2021-08-17 17:08:13'),
(3, 'Materi 1: Empati Map Canvas', 'Empati Map Canvas adalah fasilitas / alat yang digunakan untuk mengidentifikasi kebutuhan pasar (Customer Discovery). Melalui EMC Anda akan lebih memahami pain dan gain sebuah produk terhadap perspektif pelanggan.', 'Internal', '2021-08-26', 0, '2021-08-15', '2021-08-17 17:08:18'),
(4, 'Materi 2: Agile', 'Agile merupakan metodologi dalam manajemen proyek dan tim. Agile identik dengan dekomposisi pekerjaan dan fleksebilitas kerja Tim. Agile memiliki keunggulan dapat memaksimalkan delivery product.', 'Internal', '2021-08-27', 0, '2021-08-15', '2021-08-17 17:08:24'),
(5, 'Materi 3: Fundraising', 'Fundraising merupakan tahapan untuk menggaet pendanaan pada sebuah Startup. Pada fase ini startup sudah memiliki produk dengan analisa market yang kuat dan pitching merupakan metode yang digunakan untuk meyakinkan para investor untuk mendanai startup tersebut.', 'Internal', '2021-08-20', 0, '2021-08-15', '2021-08-17 17:08:28');

-- --------------------------------------------------------

--
-- Table structure for table `grub`
--

CREATE TABLE `grub` (
  `id_grub` int(5) NOT NULL,
  `nama_grub` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `nama_mentor` varchar(100) DEFAULT NULL,
  `status` int(1) DEFAULT 0,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grub`
--

INSERT INTO `grub` (`id_grub`, `nama_grub`, `deskripsi`, `nama_mentor`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Farm IOT', 'Startup yang menyelesaikan solusi untuk bidang pertanian, dengan menawarkan produk layanan yang berbasis IOT.', 'Muhammad Ali, M.Si', 0, '2021-08-15', '2021-08-15 19:20:44'),
(2, 'Guru Kreatif', 'Startup yang fokus pada isu Digitalisasi Pendidikan dengan menawarkan layanan yang kreatif untuk meningkatkan kualitas pembelajaran berbasis Digital.', 'Taufik Akbar, M.Kom', 0, '2021-08-15', '2021-08-15 19:22:22'),
(3, 'Teman Wisata', 'Startup yang bergerak dalam sektor Pariwisata dengan manghadirkan platform Temanwisata.id yang dapat memudahkan wisatawan dalam mencari dan memilih destinasi wisata.', 'Mahfuz, M.Kom', 0, '2021-08-15', '2021-08-15 19:23:59'),
(4, 'Taok Tindok', 'Startup yang menyediakan layanan penginapan dan desa wisata super lengkap sehingga dapat meningkatkan dan menawarkan kualitas liburan Anda.', 'Mahfuz, M.Kom', 0, '2021-08-15', '2021-08-15 19:25:31'),
(5, 'E-Artshop', 'Startup penyedia produk-produk kerajinan yang berpusat di daerah-daerah wisata seperti Loyok, Peringgasela, Sekarbela dan Senggigi.', 'Mahfuz, M.Kom', 0, '2021-08-15', '2021-08-15 19:26:48');

-- --------------------------------------------------------

--
-- Table structure for table `minat`
--

CREATE TABLE `minat` (
  `id_minat` int(5) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `kategori` text DEFAULT NULL,
  `status` int(1) DEFAULT 0,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `minat`
--

INSERT INTO `minat` (`id_minat`, `nama`, `kategori`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Teknologi Pertanian', 'Pertanian', 0, '2021-08-15', '2021-08-15 19:09:30'),
(2, 'Ecommerce', 'Teknologi', 0, '2021-08-15', '2021-08-15 19:09:51'),
(3, 'Teknologi Kesehatan', 'Kesehatan', 0, '2021-08-15', '2021-08-15 19:10:21'),
(4, 'Elearning', 'Pendidikan', 0, '2021-08-15', '2021-08-15 19:14:25'),
(5, 'Internet Of Thing', 'Teknologi', 0, '2021-08-15', '2021-08-15 19:16:01');

-- --------------------------------------------------------

--
-- Table structure for table `peminatan`
--

CREATE TABLE `peminatan` (
  `id_peminatan` int(5) NOT NULL,
  `id_minat` int(5) DEFAULT NULL,
  `id_peserta` int(5) DEFAULT NULL,
  `status` int(1) DEFAULT 0,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminatan`
--

INSERT INTO `peminatan` (`id_peminatan`, `id_minat`, `id_peserta`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 0, '2021-08-15', '2021-08-15 19:17:41'),
(2, 1, 2, 0, '2021-08-15', '2021-08-15 19:17:45'),
(3, 2, 2, 0, '2021-08-15', '2021-08-15 19:17:48'),
(4, 3, 3, 0, '2021-08-15', '2021-08-15 19:17:52'),
(5, 4, 4, 0, '2021-08-15', '2021-08-15 19:17:58'),
(6, 4, 5, 0, '2021-08-15', '2021-08-15 19:18:00'),
(7, 4, 1, 0, '2021-08-15', '2021-08-15 19:18:02');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id_peserta` int(5) NOT NULL,
  `nim` varchar(20) DEFAULT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `desa` text DEFAULT NULL,
  `kecamatan` text DEFAULT NULL,
  `kabupaten` text DEFAULT NULL,
  `provinsi` text DEFAULT NULL,
  `tempat_lahir` text DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `semester` int(2) DEFAULT 1,
  `jurusan` text DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telpon` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  `link_portfolio` text DEFAULT NULL,
  `link_website` text DEFAULT NULL,
  `link_linkedin` text DEFAULT NULL,
  `link_facebook` text DEFAULT NULL,
  `is_activated` int(1) DEFAULT 0,
  `status` int(1) DEFAULT 0,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `foto` text DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id_peserta`, `nim`, `nama_lengkap`, `jenis_kelamin`, `alamat`, `desa`, `kecamatan`, `kabupaten`, `provinsi`, `tempat_lahir`, `tanggal_lahir`, `semester`, `jurusan`, `email`, `telpon`, `username`, `password`, `level`, `link_portfolio`, `link_website`, `link_linkedin`, `link_facebook`, `is_activated`, `status`, `created_at`, `updated_at`, `foto`) VALUES
(1, '16610033', 'Abdika Anggi Wardana', 'Laki-laki', 'Jln. pokmotong-kotaraja', 'Gelora', 'Sikur', 'Lombok timur', 'Nusa Tenggara Barat', 'Rungkang', '1997-01-17', 8, 'Pendidikan Informatika', 'abdika17@gmail.com', '085934880601', 'peserta1', '$2y$10$ueRFkmIMYq9Fg.N96b13zOT40oSe0Kd2TBa0t9KNZF.2cY3n8mk.W', 'peserta', 'https://nice17.gitub.io', '', '', 'https://facebook.com/abdika.nice17', 1, 0, '2021-08-02', '2021-08-09 00:20:55', 'default.jpg'),
(2, '12121212', 'abdika', 'Laki-laki', 'peserta2 alamat', 's', 's', 's', 'sssss', 's', '2021-08-09', 12, 's', 'coba@gmaiil.com', '22', 'peserta2', '$2y$10$7.J8ot1YCpqEo14W9Rs8M.RzFW9ZkCPhHQiyEUSkku.82U3oFIL0W', 'peserta', NULL, NULL, NULL, NULL, 1, 0, '2021-08-03', '2021-08-14 17:43:38', 'default.jpg'),
(3, '12345', 'rizal', 'Laki-laki', 'telkom', 'xl', 'axis', 'im3', 'ok', 'ss', '2021-08-03', 1, NULL, 'rizalduino@gmail.com', '000', 'fullstack', NULL, 'peserta', NULL, NULL, NULL, NULL, 0, 0, '2021-08-14', '2021-08-14 17:50:19', 'default.jpg'),
(4, 'tessaja', 'tessaja', 'Laki-laki', 'tessaja', 'tessaja', 'tessaja', 'tessaja', 'tessaja', 'tessaja', '2021-08-03', 0, NULL, 'tessaja', 'tessaja', 'tessaja', '$2y$10$Rco93wJGtGnyZpHsgkXNiuLSGXvppYBHrJvFoyub1mvXrY3nwIxCm', 'peserta', NULL, NULL, NULL, NULL, 1, 0, '2021-08-14', '2021-08-14 18:08:18', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `peserta_gld`
--

CREATE TABLE `peserta_gld` (
  `id_gld` int(5) NOT NULL,
  `id_grub` int(5) DEFAULT NULL,
  `status` int(1) DEFAULT 0,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peserta_gld`
--

INSERT INTO `peserta_gld` (`id_gld`, `id_grub`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 0, '2021-08-15', '2021-08-15 20:23:23'),
(2, 2, 0, '2021-08-15', '2021-08-15 20:23:26'),
(3, 3, 0, '2021-08-15', '2021-08-15 20:23:27'),
(4, 4, 0, '2021-08-15', '2021-08-15 20:23:29'),
(5, 5, 0, '2021-08-15', '2021-08-15 20:23:31');

-- --------------------------------------------------------

--
-- Table structure for table `peserta_startup_academy`
--

CREATE TABLE `peserta_startup_academy` (
  `id_sah` int(5) NOT NULL,
  `id_grub` int(5) DEFAULT NULL,
  `status` int(1) DEFAULT 0,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peserta_startup_academy`
--

INSERT INTO `peserta_startup_academy` (`id_sah`, `id_grub`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 0, '2021-08-15', '2021-08-15 20:23:53'),
(2, 2, 0, '2021-08-15', '2021-08-15 20:23:55'),
(3, 3, 0, '2021-08-15', '2021-08-15 20:23:57'),
(4, 4, 0, '2021-08-15', '2021-08-15 20:23:58'),
(5, 5, 0, '2021-08-15', '2021-08-15 20:24:00');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(5) NOT NULL,
  `id_grub` int(5) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `jenis` varchar(50) DEFAULT NULL,
  `pengunggah` varchar(50) DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `link_video` text DEFAULT NULL,
  `link_website` text DEFAULT NULL,
  `link_playstore` text DEFAULT NULL,
  `link_appstore` text DEFAULT NULL,
  `link_ig` text DEFAULT NULL,
  `link_fb` text DEFAULT NULL,
  `status` int(1) DEFAULT 0,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_grub`, `nama`, `deskripsi`, `jenis`, `pengunggah`, `photo`, `link_video`, `link_website`, `link_playstore`, `link_appstore`, `link_ig`, `link_fb`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Farm IOT', 'Produk IOT yang dapat digunakan monitoring suhu kelembapan tanaman hidroponik', 'Aplikasi', 'L. Erwin Edi Hamidi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-08-15', '2021-08-15 20:01:21'),
(2, 2, 'Guru Kreatif', 'Layanan Digitalisasi Pendidikan dengan menyediakan jasa Content Creator untuk upgrade sistem pembelajaran.', 'Website', 'Arman Hadi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-08-15', '2021-08-15 20:04:53'),
(3, 3, 'Teman Wisata', 'Platform yang menyediakan informasi destinasi wisata, penginapan hingga layanan tour guide untuk menemani wisatawan.', 'Web/Aplikasi', 'Ishak Badawi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-08-15', '2021-08-15 20:04:56'),
(4, 4, 'Taok Tindok', 'Aplikasi yang menyediakan informasi penginapan: kos, kontrakan, hotel hingga desa wisata.', 'Aplikasi', 'Amirul Hasan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-08-15', '2021-08-15 20:12:54'),
(5, 5, 'E-Artshop', 'Website marketplace untuk penjualan hasil dari kerajinan dari seluruh Indonesia.', 'Website', 'M. Halim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-08-15', '2021-08-15 20:12:57');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_perkuliahan_mentoring`
--

CREATE TABLE `riwayat_perkuliahan_mentoring` (
  `id_riwayat_perkuliahan_mentoring` int(5) NOT NULL,
  `nama_pengisi` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `link_meeting` text DEFAULT NULL,
  `file_docx` text DEFAULT NULL,
  `file_pdf` text DEFAULT NULL,
  `file_pptx` text DEFAULT NULL,
  `pengunggah` text DEFAULT NULL,
  `status` int(1) DEFAULT 0,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayat_perkuliahan_mentoring`
--

INSERT INTO `riwayat_perkuliahan_mentoring` (`id_riwayat_perkuliahan_mentoring`, `nama_pengisi`, `deskripsi`, `kategori`, `link_meeting`, `file_docx`, `file_pdf`, `file_pptx`, `pengunggah`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Ali, M.Si', 'Sharing Session: Validasi Ide Bisnis dengan Bisnis Model Canvas', 'Webinar', '-', NULL, NULL, NULL, 'Admin', 0, '2021-08-15', '2021-08-15 20:19:21'),
(2, 'Muhammad Ali, M.Si', 'Sharing Session: Memetakan Bisnis Sosial Berkelanjutan melalui SMBC', 'Webinar', '-', NULL, NULL, NULL, 'Admin', 0, '2021-08-15', '2021-08-15 20:19:35'),
(3, 'Mahfuz, M.Kom', 'Materi 1: Empati Map Canvas', 'Pertemuan', '-', NULL, NULL, NULL, 'Admin', 0, '2021-08-15', '2021-08-15 20:20:32'),
(4, 'Mahfuz, M.Kom', 'Materi 2: Agile', 'Pertemuan', '-', NULL, NULL, NULL, 'Admin', 0, '2021-08-15', '2021-08-15 20:20:46'),
(5, 'Mahfuz, M.Kom', 'Materi 3: Fundraising', 'Pertemuan', '-', NULL, NULL, NULL, 'Admin', 0, '2021-08-15', '2021-08-15 20:20:57');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `desa` text DEFAULT NULL,
  `kecamatan` text DEFAULT NULL,
  `kabupaten` text DEFAULT NULL,
  `provinsi` text DEFAULT NULL,
  `tempat_lahir` text DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `semester` int(2) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telpon` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  `is_activated` int(1) DEFAULT 0,
  `status` int(1) DEFAULT 0,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `foto` text DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nip`, `nama_lengkap`, `jenis_kelamin`, `alamat`, `desa`, `kecamatan`, `kabupaten`, `provinsi`, `tempat_lahir`, `tanggal_lahir`, `semester`, `email`, `telpon`, `username`, `password`, `level`, `is_activated`, `status`, `created_at`, `updated_at`, `foto`) VALUES
(1, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'mentor@gmail.com', NULL, 'mentor1', '$2y$10$Ou.OZAZVVveikzJeeT.aw.avDVnDnj.pGpjgoGNi5tugH8oaqNcmi', 'mentor', 1, 0, '2021-08-02 15:20:56', '2021-08-14 16:02:45', 'default.jpg'),
(2, '16610033', 'pak admin', 'Laki-laki', 'alamt admin sih', 'cari di google', 'kecmatan apa saja', 'apa ya', 'provensi rahasi', 'rahasia', '2021-08-20', 9, 'admin@gamil.com', '0859348806012', 'admin', '$2y$10$YNeyF9jk3Z1hCTRmH8ZObu2Y5oE.Fn5FLd0FgQzRbsZqTWtoePr3e', 'admin', 1, 0, '2021-08-04 18:50:19', '2021-08-14 18:54:14', '2_admin.jpg'),
(3, '16610033', 'abdika anggi wardana', 'Laki-laki', 'Rungkang gelora kecamatan sikur', 'Gelora', 'Sikur', 'Lombok timur', 'Nusa Tenggara Barat', 'Rungkang', '1997-12-01', 10, 'coba@gmaiil.com', '085934880601', 'super', '$2y$10$BzdxqChJxuXh12v3aqPws.hu16nHpOvk2Wv6Cw0xerVJV3YaEq7FK', 'super', 1, 0, '2021-08-04 18:52:14', '2021-08-14 19:08:18', '3_super.jpg'),
(4, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'coba@gmaiil.com', NULL, 'mentor2', '$2y$10$Ou.OZAZVVveikzJeeT.aw.avDVnDnj.pGpjgoGNi5tugH8oaqNcmi', 'mentor', 1, 0, '2021-08-02 15:20:56', '2021-08-14 13:12:34', 'default.jpg'),
(5, '16610033', 'sdfsdf', 'Laki-laki', 'lsjd', 'ljsl', 'jj', 'ljl', 'ljlj', 'kjlkj', '2021-08-03', 2, NULL, NULL, 'mentor3', NULL, 'mentor', 0, 0, '2021-08-14 13:22:46', '2021-08-14 17:44:18', 'default.jpg'),
(6, 'admin2', 'admin2', 'Laki-laki', 'admin2', 'admin2', 'admin2', 'admin2', 'admin2', 'admin2', '2021-07-27', 0, 'admin2', 'admin2', 'admin2', '$2y$10$WKkohu1Sgzv0cJBrVWkLn.Eg9TWLKYHrtAaHMqpy64seLMhZWm4wy', 'admin', 0, 0, '2021-08-14 18:56:03', NULL, 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `verify`
--

CREATE TABLE `verify` (
  `id_verify` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure for view `data_detail_anggota_grub`
--
DROP TABLE IF EXISTS `data_detail_anggota_grub`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_detail_anggota_grub`  AS SELECT `g`.`id_grub` AS `id_grub`, `g`.`nama_grub` AS `nama_grub`, `g`.`deskripsi` AS `deskripsi`, `g`.`nama_mentor` AS `nama_mentor`, `dg`.`id_peserta` AS `id_peserta`, `p`.`nama_lengkap` AS `nama_lengkap`, `p`.`alamat` AS `alamat`, `p`.`desa` AS `desa`, `p`.`kecamatan` AS `kecamatan`, `p`.`kabupaten` AS `kabupaten`, `p`.`semester` AS `semester`, `p`.`jurusan` AS `jurusan`, `p`.`foto` AS `foto`, `p`.`telpon` AS `telpon`, `p`.`email` AS `email`, `p`.`username` AS `username`, `p`.`created_at` AS `created_at` FROM ((`grub` `g` join `detail_grub` `dg`) join `peserta` `p`) WHERE `g`.`id_grub` = `dg`.`id_grub` AND `dg`.`id_peserta` = `p`.`id_peserta` ;

-- --------------------------------------------------------

--
-- Structure for view `data_detail_produk_pergrub`
--
DROP TABLE IF EXISTS `data_detail_produk_pergrub`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_detail_produk_pergrub`  AS SELECT `g`.`id_grub` AS `id_grub`, `g`.`nama_grub` AS `nama_grub`, `p`.`id_produk` AS `id_produk`, `p`.`nama` AS `nama`, `p`.`deskripsi` AS `deskripsi`, `p`.`jenis` AS `jenis`, `p`.`pengunggah` AS `pengunggah`, `p`.`photo` AS `photo`, `p`.`link_video` AS `link_video`, `p`.`link_website` AS `link_website`, `p`.`link_playstore` AS `link_playstore`, `p`.`link_appstore` AS `link_appstore`, `p`.`link_ig` AS `link_ig`, `p`.`link_fb` AS `link_fb` FROM (`grub` `g` join `produk` `p`) WHERE `g`.`id_grub` = `p`.`id_grub` ;

-- --------------------------------------------------------

--
-- Structure for view `data_riwayat_perkuliahan`
--
DROP TABLE IF EXISTS `data_riwayat_perkuliahan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_riwayat_perkuliahan`  AS SELECT `rm`.`id_riwayat_perkuliahan_mentoring` AS `id_riwayat_perkuliahan_mentoring`, `rm`.`deskripsi` AS `deskripsi`, `p`.`id_peserta` AS `id_peserta`, `p`.`nama_lengkap` AS `nama_lengkap`, `rm`.`link_meeting` AS `link_meeting`, `rm`.`kategori` AS `kategori`, `rm`.`nama_pengisi` AS `nama_pengisi`, `rm`.`pengunggah` AS `pengunggah`, `rm`.`created_at` AS `tgl_pelaksanaan` FROM ((`absensi_perkuliahan_mentoring` `am` join `riwayat_perkuliahan_mentoring` `rm`) join `peserta` `p`) WHERE `am`.`id_peserta` = `p`.`id_peserta` AND `am`.`id_riwayat_perkuliahan_mentoring` = `rm`.`id_riwayat_perkuliahan_mentoring` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi_perkuliahan_mentoring`
--
ALTER TABLE `absensi_perkuliahan_mentoring`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indexes for table `detail_grub`
--
ALTER TABLE `detail_grub`
  ADD PRIMARY KEY (`id_detail_grub`);

--
-- Indexes for table `detail_produk`
--
ALTER TABLE `detail_produk`
  ADD PRIMARY KEY (`id_detail_produk`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `grub`
--
ALTER TABLE `grub`
  ADD PRIMARY KEY (`id_grub`);

--
-- Indexes for table `minat`
--
ALTER TABLE `minat`
  ADD PRIMARY KEY (`id_minat`);

--
-- Indexes for table `peminatan`
--
ALTER TABLE `peminatan`
  ADD PRIMARY KEY (`id_peminatan`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indexes for table `peserta_gld`
--
ALTER TABLE `peserta_gld`
  ADD PRIMARY KEY (`id_gld`);

--
-- Indexes for table `peserta_startup_academy`
--
ALTER TABLE `peserta_startup_academy`
  ADD PRIMARY KEY (`id_sah`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `riwayat_perkuliahan_mentoring`
--
ALTER TABLE `riwayat_perkuliahan_mentoring`
  ADD PRIMARY KEY (`id_riwayat_perkuliahan_mentoring`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `verify`
--
ALTER TABLE `verify`
  ADD PRIMARY KEY (`id_verify`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi_perkuliahan_mentoring`
--
ALTER TABLE `absensi_perkuliahan_mentoring`
  MODIFY `id_absensi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `detail_grub`
--
ALTER TABLE `detail_grub`
  MODIFY `id_detail_grub` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `detail_produk`
--
ALTER TABLE `detail_produk`
  MODIFY `id_detail_produk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `grub`
--
ALTER TABLE `grub`
  MODIFY `id_grub` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `minat`
--
ALTER TABLE `minat`
  MODIFY `id_minat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `peminatan`
--
ALTER TABLE `peminatan`
  MODIFY `id_peminatan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_peserta` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `peserta_gld`
--
ALTER TABLE `peserta_gld`
  MODIFY `id_gld` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `peserta_startup_academy`
--
ALTER TABLE `peserta_startup_academy`
  MODIFY `id_sah` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `riwayat_perkuliahan_mentoring`
--
ALTER TABLE `riwayat_perkuliahan_mentoring`
  MODIFY `id_riwayat_perkuliahan_mentoring` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `verify`
--
ALTER TABLE `verify`
  MODIFY `id_verify` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
