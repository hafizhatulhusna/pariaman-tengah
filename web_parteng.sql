-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 19, 2023 at 01:53 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_parteng`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_instansi`
--

CREATE TABLE `data_instansi` (
  `id` int(11) NOT NULL,
  `nama_upt` varchar(100) NOT NULL,
  `alamat_upt` text NOT NULL,
  `telp` varchar(15) NOT NULL,
  `no_wa` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_instansi`
--

INSERT INTO `data_instansi` (`id`, `nama_upt`, `alamat_upt`, `telp`, `no_wa`, `email`, `website`) VALUES
(1, 'KECAMATAN PARIAMAN TENGAH', 'Jl. Jend. Sudirman, Alai Gelombang, Pariaman Tengah, Kota Pariaman, Sumatera Barat 25511', '(0751) 123456', '081234567891', 'pariamantengah@pariamankota.go.id', 'pariamantengah.pariamankota.go.id');

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `pendidikan_terakhir` varchar(100) NOT NULL,
  `skpd` varchar(100) NOT NULL,
  `satker` varchar(100) NOT NULL,
  `bidang` varchar(100) NOT NULL,
  `pangkat` varchar(20) NOT NULL,
  `golongan` varchar(5) NOT NULL,
  `jabatan` varchar(200) NOT NULL,
  `status_pegawai` varchar(10) NOT NULL,
  `lokasi_foto` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(100) NOT NULL,
  `kategori_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_nama`, `kategori_status`) VALUES
(1, 'Menu', 1),
(2, 'Slider', 1),
(3, 'Kata Sambutan', 1),
(4, 'Layanan Kami', 1),
(5, 'Berita Terbaru', 1),
(6, 'Galeri', 1),
(7, 'Pengumuman', 1),
(8, 'Artikel', 2),
(9, 'Program Unggulan', 1),
(10, 'Berita Pendidikan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `media_social`
--

CREATE TABLE `media_social` (
  `sosmed_id` int(11) NOT NULL,
  `sosmed_icon` varchar(250) NOT NULL,
  `sosmed_url` varchar(250) NOT NULL,
  `sosmed_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media_social`
--

INSERT INTO `media_social` (`sosmed_id`, `sosmed_icon`, `sosmed_url`, `sosmed_status`) VALUES
(2, '1', 'tes', 1),
(3, '2', 'tes', 1),
(4, '3', 'tes', 1),
(5, '4', 'tes', 1),
(7, '5', 'tes', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu_managemen`
--

CREATE TABLE `menu_managemen` (
  `menu_id` int(11) NOT NULL,
  `menu_parent` int(11) DEFAULT '0',
  `menu_nama` varchar(200) NOT NULL,
  `menu_type` varchar(30) NOT NULL,
  `menu_item` varchar(255) NOT NULL,
  `menu_order` int(11) NOT NULL,
  `menu_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_managemen`
--

INSERT INTO `menu_managemen` (`menu_id`, `menu_parent`, `menu_nama`, `menu_type`, `menu_item`, `menu_order`, `menu_status`) VALUES
(76, NULL, 'Beranda', 'statis_page', '3', 1, 1),
(77, NULL, 'Profil', 'link', '#', 2, 1),
(79, 77, 'Visi Misi', 'post', '2', 2, 1),
(80, NULL, 'Layanan', 'statis_page', '#', 3, 1),
(81, 80, 'Jenis Layanan', 'post', '3', 3, 1),
(83, 77, 'Profil Dinas', 'post', '4', 1, 1),
(84, 77, 'Struktur Organisasi', 'post', '5', 3, 1),
(85, 80, 'Visi, Misi dan Motto Pelayanan', 'post', '6', 1, 1),
(86, 80, 'Maklumat Pelayanan', 'post', '7', 2, 1),
(87, 80, 'Standar Pelayanan', 'post', '22', 4, 1),
(98, 80, 'Indeks Kepuasan Masyarakat', 'post', '18', 5, 1),
(99, 80, 'Alur Pengaduan', 'post', '19', 5, 1),
(101, NULL, 'Pengaduan', 'statis_page', '2', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1527920853),
('m150214_044831_init_user', 1527922737);

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `posting_id` int(11) NOT NULL,
  `homepage_kategori` int(11) NOT NULL,
  `posting_category` int(11) NOT NULL DEFAULT '0',
  `posting_menu` int(11) NOT NULL,
  `posting_judul` varchar(255) NOT NULL,
  `posting_icon` varchar(255) DEFAULT NULL,
  `posting_image_utama` varchar(255) DEFAULT NULL,
  `posting_deskripsi` text NOT NULL,
  `posting_status` int(11) NOT NULL,
  `posting_layout` int(11) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `trans_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`posting_id`, `homepage_kategori`, `posting_category`, `posting_menu`, `posting_judul`, `posting_icon`, `posting_image_utama`, `posting_deskripsi`, `posting_status`, `posting_layout`, `create_at`, `update_at`, `create_by`, `update_by`, `trans_ip`) VALUES
(1, 5, 2, 39, 'Disdikpora Kota Pariaman Berikan Pelatihan Kepada Guru Olahraga Se-Kota Pariaman', NULL, '/uploads/posting/image_utama/21b80d7ccdf07deee24d821102a74818.jpeg', '<p><strong>Kominfo Kota Pariaman --</strong> Untuk meningkatkan prestasi olahraga di Kota Pariaman, Pemerintah Kota Pariaman melalui Dinas Pendidikan Pemuda dan Olahraga (Disdikpora), mengadakan kegiatan &ldquo;Pelatihan Keterampilan Gerak Dasar (FMS) dan Identifikasi Bakat Olahraga di Kota Pariaman&rdquo;, yang diikuti oleh guru-guru pendidikan olahraga tingkat SD dan SLTP se-Kota Pariaman.</p>\r\n\r\n<p>Pelatihan tersebut langsung diberikan oleh Narasumber Prof. Dr. Syahrial Bakhtiar, M.Pd, seorang Peneliti/Pengembang Keterampilan Gerak Dasar (FMS) dan e-Talent Identification in Sport. Beliau adalah Dosen dari Fakultas Ilmu Keolahragaan Universitas Negeri Padang.</p>\r\n\r\n<p>Kegiatan Pelatihan tersebut langsung dibuka oleh Kepala Dinas Dikpora Kota Pariaman Kanderi, bertempat di Aula Balaikota Pariaman, Selasa (19/10).</p>\r\n\r\n<p>&ldquo;Untuk meningkatkan kemajuan daerah dibidang olahraga dan prestasi olahraga, perlu adanya pelatihan diberikan kepada guru-guru olahraga di Kota Pariaman ini. &nbsp;Bapak dan Ibu harus bisa menjadi motivator dan inspirator dalam memberikan pemahaman tentang pentingnya gerak bagi anak, sekaligus memberikan pembelajaran bagi mereka tentang nilai dan karakter melalui olahraga, serta mampu mengembangkan kemampuan kordinasi untuk membantu proses perkembangan gerak&nbsp; dan fisik anak yang optimal&rdquo;, ujar Kanderi.</p>\r\n\r\n<p>Seperti yang kita ketahui bersama, ada potensi anak-anak dari sisi akademiknya bagus, ada juga dari sisi non akademiknya yang bagus, dan juga ada ada anak-anak yang memiliki kedua potensi tersebut, yaitu dari sisi akademik dan non akademiknya bagus.</p>\r\n\r\n<p>Tapi saat ini semua potensi itu menentukan keberhasilan anak-anak kita dimasa depan, jadi kalau kita di sekolah kita selalu memberikan dorongan dan support kepada anak-anak didik kita untuk bisa mencapai potensi-potensi tersebut baik dari sisi akademik maupun sisi non akademik. Karena saat ini dari sisi non akademik tersebut juga telah menjanjikan kehidupan yang lebih baik lagi , apalagi jika memiliki prestasi yang baik dibidang tersebut.</p>\r\n\r\n<p>&ldquo;Semoga dengan adanya pelatihan ini bapak dan ibuk bisa melahirkan anak-anak berprestasi, baik secara akademik maupun secara non akademik. Hargailah anak-anak kita yang mempunyai prestasi diluar akademik, karena prestasi diluar akademik tersebut, juga menjanjikan kehidupan yang lebih baik buat mereka&rdquo;, tegas Kanderi.</p>\r\n\r\n<p>Sementara itu Syahrial Bakhtiar mengatakan, bahwa sejak awal anak-anak harus dibekali dengan keterampilan gerak dasar, sebagai modal bagi anak untuk aktif dalam berolahraga, karena dengan adanya keterampilan gerak dasar sebagai modal bagi anak untuk aktif dalam berolahraga, akan bisa membantu anak untuk mempelajari berbagai teknik olahraga di kemudian hari.</p>\r\n\r\n<p>Syahrial Bakhtiar menekankan, bahwa melalui pembelajaran gerak dasar inilah budaya hidup sehat dan aktif bisa menjadi sebuah kebiasaan di tengah-tengah masyarakat, sebagai upaya untuk mengurangi beban negara terhadap permasalahan kesehatan di Indonesia.&nbsp;(tachi)</p>\r\n', 1, 1, '2022-09-02 10:38:19', NULL, 1, NULL, '127.0.0.1'),
(2, 1, 0, 77, 'Visi Misi', NULL, NULL, '<p><span style=\"color:#e74c3c\"><span style=\"font-size:28px\"><strong>Visi Kota Pariaman :</strong></span></span></p>\r\n\r\n<p><span style=\"color:#3498db\"><span style=\"font-size:24px\"><strong>&quot;PARIAMAN KOTA WISATA, PERDAGANGAN, JASA YANG RELIGIUS DAN BERBUDAYA&quot;</strong></span></span></p>\r\n\r\n<p><span style=\"color:#e74c3c\"><span style=\"font-size:28px\"><strong>Misi Kota Pariaman</strong></span></span></p>\r\n\r\n<ol>\r\n	<li><span style=\"font-size:20px\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Mewujudkan Pengelolaan Wisata Kota Yang Maju, Religius, Tertib dan Berbudaya</span></span></li>\r\n	<li><span style=\"color:#3498db\"><span style=\"font-size:20px\"><u><strong><em><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Mewujudkan Kehidupan Masyarakat yang Berbudaya dan Berkualitas</span></em></strong></u></span></span></li>\r\n	<li><span style=\"font-size:20px\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Mewujudkan Pemerintahan yang Handal dan Prima</span></span></li>\r\n	<li><span style=\"font-size:20px\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Mewujudkan Kota Pesisir Modern, Dinamis dan Berwawasan Lingkungan Hidup</span></span></li>\r\n	<li><span style=\"font-size:20px\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Memperkuat Ekonomi Kerakyatan (Kreatif) yang Berbasis Lokal dan Budaya Masyarakat</span></span></li>\r\n</ol>\r\n', 1, 1, '2022-09-02 15:20:02', '2022-09-03 15:06:33', 1, 1, '172.16.100.112'),
(3, 1, 0, 80, 'Jenis Layanan', NULL, NULL, '<p><span style=\"font-size:24px\">JENIS - JENIS PELAYANAN</span></p>\r\n\r\n<ol>\r\n	<li><span style=\"font-size:22px\">Pengurusan Mutasi Siswa</span></li>\r\n	<li><span style=\"font-size:22px\">Pembuatan Pengganti Ijazah Hilang/ Rusak</span></li>\r\n	<li><span style=\"font-size:22px\">Penerbitan Nomor Pokok Sekolah Nasional (NPSN)</span></li>\r\n	<li><span style=\"font-size:22px\">Rekomendasi Mutasi Pendidik dan Tenaga Kependidikan (PTK)</span></li>\r\n	<li><span style=\"font-size:22px\">Pengurusan Tunjangan Pendidikan</span></li>\r\n	<li><span style=\"font-size:22px\">Pengurusan Rekomendasi Teknis Izin Pendirian Satuan Pendidikan</span></li>\r\n	<li><span style=\"font-size:22px\">Pengesahan Kurikulum Tingkat Satuan Pendidikan (KTSP)</span></li>\r\n	<li><span style=\"font-size:22px\">Pengesahan Fotocopy Ijazah</span></li>\r\n	<li><span style=\"font-size:22px\">Layanan Penerimaan Peserta Didik baru (PPDB)</span></li>\r\n	<li><span style=\"font-size:22px\">Pelayanan Dapodik</span></li>\r\n</ol>\r\n', 1, 1, '2022-09-02 15:42:00', '2022-09-03 15:10:10', 1, 1, '172.16.100.112'),
(4, 1, 0, 77, 'Profil Dinas Pendidikan Pemuda dan Olahraga Kota Pariaman', NULL, NULL, '<table class=\"Table\" style=\"border:undefined; width:354.15pt\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">1</span></span></p>\r\n			</td>\r\n			<td style=\"width:124.2pt\">\r\n			<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Nama Dinas</span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">:</span></span></p>\r\n			</td>\r\n			<td style=\"width:212.1pt\">\r\n			<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Dinas Pendidikan Pemuda dan Olahraga</span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">2</span></span></p>\r\n			</td>\r\n			<td style=\"width:124.2pt\">\r\n			<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Alamat</span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">:</span></span></p>\r\n			</td>\r\n			<td style=\"width:212.1pt\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td style=\"width:124.2pt\">\r\n			<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">a. Jalan</span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">:</span></span></p>\r\n			</td>\r\n			<td style=\"width:212.1pt\">\r\n			<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Rohana Kudus No. 44 A</span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td style=\"width:124.2pt\">\r\n			<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">b. Desa/Kelurahan</span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">:</span></span></p>\r\n			</td>\r\n			<td style=\"width:212.1pt\">\r\n			<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Kelurahan Taratak</span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td style=\"width:124.2pt\">\r\n			<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">c. Kecamatan</span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">:</span></span></p>\r\n			</td>\r\n			<td style=\"width:212.1pt\">\r\n			<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Pariaman Tengah</span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td style=\"width:124.2pt\">\r\n			<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">d. Kota</span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">:</span></span></p>\r\n			</td>\r\n			<td style=\"width:212.1pt\">\r\n			<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Kota Pariaman</span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td style=\"width:124.2pt\">\r\n			<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">e. Propinsi</span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">:</span></span></p>\r\n			</td>\r\n			<td style=\"width:212.1pt\">\r\n			<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Sumatera Barat</span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">3</span></span></p>\r\n			</td>\r\n			<td style=\"width:124.2pt\">\r\n			<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Telepon / Fax</span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">:</span></span></p>\r\n			</td>\r\n			<td style=\"width:212.1pt\">\r\n			<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">-</span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">4</span></span></p>\r\n			</td>\r\n			<td style=\"width:124.2pt\">\r\n			<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">e-mail</span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">:</span></span></p>\r\n			</td>\r\n			<td style=\"width:212.1pt\">\r\n			<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">disdikpora@pariamankota.go.id</span></span></p>\r\n\r\n			<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">disdikporakotapariaman@gmail.com</span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">5</span></span></p>\r\n			</td>\r\n			<td style=\"width:124.2pt\">\r\n			<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Kepala Dinas</span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">:</span></span></p>\r\n			</td>\r\n			<td style=\"width:212.1pt\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td style=\"width:124.2pt\">\r\n			<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">a. Nama</span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">:</span></span></p>\r\n			</td>\r\n			<td style=\"width:212.1pt\">\r\n			<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Drs. Kanderi, MM</span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td style=\"width:124.2pt\">\r\n			<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">b. NIP</span></span></p>\r\n			</td>\r\n			<td>\r\n			<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">:</span></span></p>\r\n			</td>\r\n			<td style=\"width:212.1pt\">\r\n			<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">197709102011011003</span></span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, 1, '2022-09-03 09:09:33', '2022-09-03 09:22:02', 1, 1, '172.16.100.112'),
(5, 1, 0, 83, 'Struktur Organisasi', NULL, NULL, '<p>STRUKTUR ORGANISASI</p>\r\n\r\n<table border=\"1\" cellspacing=\"0\" class=\"MsoTableGrid\" style=\"border-collapse:collapse; border:solid windowtext 1.0pt\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"width:28.1pt\">\r\n			<p style=\"text-align:center\"><strong>No</strong></p>\r\n			</td>\r\n			<td style=\"width:120.5pt\">\r\n			<p style=\"text-align:center\"><strong>Nama</strong></p>\r\n			</td>\r\n			<td style=\"width:248.05pt\">\r\n			<p style=\"text-align:center\"><strong>Jabatan</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:28.1pt\">\r\n			<p>1.</p>\r\n			</td>\r\n			<td style=\"width:120.5pt\">\r\n			<p>Drs. Kanderi, MM</p>\r\n			</td>\r\n			<td style=\"width:248.05pt\">\r\n			<p>Kepala Dinas</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:28.1pt\">\r\n			<p>2.</p>\r\n			</td>\r\n			<td style=\"width:120.5pt\">\r\n			<p>Hertati Taher, SE</p>\r\n			</td>\r\n			<td style=\"width:248.05pt\">\r\n			<p>Sekretaris</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:28.1pt\">\r\n			<p>3.</p>\r\n			</td>\r\n			<td style=\"width:120.5pt\">\r\n			<p>Qadri Eka Putra, ST</p>\r\n			</td>\r\n			<td style=\"width:248.05pt\">\r\n			<p>Kasubag Umum dan Program</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:28.1pt\">\r\n			<p>4.</p>\r\n			</td>\r\n			<td style=\"width:120.5pt\">\r\n			<p>Erwi Mariati, S.Sos, MM</p>\r\n			</td>\r\n			<td style=\"width:248.05pt\">\r\n			<p>Kasubag Keuangan</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:28.1pt\">\r\n			<p>5.</p>\r\n			</td>\r\n			<td style=\"width:120.5pt\">\r\n			<p>Yurnal, S.Pd, M.Pd</p>\r\n			</td>\r\n			<td style=\"width:248.05pt\">\r\n			<p>Kabid Pendidikan Dasar</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:28.1pt\">\r\n			<p>6.</p>\r\n			</td>\r\n			<td style=\"width:120.5pt\">\r\n			<p>Dasrinawati, S.Pd</p>\r\n			</td>\r\n			<td style=\"width:248.05pt\">\r\n			<p>Kasi Kurikulum dan Peserta Didik Dikdas</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:28.1pt\">\r\n			<p>7.</p>\r\n			</td>\r\n			<td style=\"width:120.5pt\">\r\n			<p>Mulyadi, S.Pd, MM</p>\r\n			</td>\r\n			<td style=\"width:248.05pt\">\r\n			<p>Kasi Kelembagaan dan Sarana Prasarana Dikdas</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:28.1pt\">\r\n			<p>8.</p>\r\n			</td>\r\n			<td style=\"width:120.5pt\">\r\n			<p>Rifnahayati, S.Pd</p>\r\n			</td>\r\n			<td style=\"width:248.05pt\">\r\n			<p>Kasi Pendidik dan Tenaga Kependidikan Dikdas</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:28.1pt\">\r\n			<p>9.</p>\r\n			</td>\r\n			<td style=\"width:120.5pt\">\r\n			<p>Hendri Jalal, S.Pd, MM</p>\r\n			</td>\r\n			<td style=\"width:248.05pt\">\r\n			<p>Kabid Pendidikan dan Pembinaan PAUD, Non Formal</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:28.1pt\">\r\n			<p>10.</p>\r\n			</td>\r\n			<td style=\"width:120.5pt\">\r\n			<p>Misrawati, S.Ag</p>\r\n			</td>\r\n			<td style=\"width:248.05pt\">\r\n			<p>Kasi Kurikulum dan Peserta Didik PNF</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:28.1pt\">\r\n			<p>11.</p>\r\n			</td>\r\n			<td style=\"width:120.5pt\">\r\n			<p>Haris Mendra, SE, MM</p>\r\n			</td>\r\n			<td style=\"width:248.05pt\">\r\n			<p>Kasi Kelembagaan dan Sarana Prasarana PNF</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:28.1pt\">\r\n			<p>12.</p>\r\n			</td>\r\n			<td style=\"width:120.5pt\">\r\n			<p>Emriko, S.Sos, MM</p>\r\n			</td>\r\n			<td style=\"width:248.05pt\">\r\n			<p>Kasi Pendidik dan Tenaga Kependidikan PNF</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:28.1pt\">\r\n			<p>13.</p>\r\n			</td>\r\n			<td style=\"width:120.5pt\">\r\n			<p>Salmi, SE</p>\r\n			</td>\r\n			<td style=\"width:248.05pt\">\r\n			<p>Kabid Pemuda dan Olahraga</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:28.1pt\">\r\n			<p>14.</p>\r\n			</td>\r\n			<td style=\"width:120.5pt\">\r\n			<p>Hendra Arifin, ST, M.Si</p>\r\n			</td>\r\n			<td style=\"width:248.05pt\">\r\n			<p>Kasi Pemuda</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:28.1pt\">\r\n			<p>15.</p>\r\n			</td>\r\n			<td style=\"width:120.5pt\">\r\n			<p>Nurkhalis, S.Pd</p>\r\n			</td>\r\n			<td style=\"width:248.05pt\">\r\n			<p>Kasi Olahraga</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:28.1pt\">\r\n			<p>16.</p>\r\n			</td>\r\n			<td style=\"width:120.5pt\">\r\n			<p>Muhammad Ilham, SE</p>\r\n			</td>\r\n			<td style=\"width:248.05pt\">\r\n			<p>Kasi Penghargaan Prestasi</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, 1, '2022-09-03 09:30:03', '2022-09-03 09:55:33', 1, 1, '172.16.100.112'),
(6, 7, 0, 80, 'Visi, Misi dan Motto Pelayanan', NULL, NULL, '<p><span style=\"font-size:26px\"><strong>VISI</strong></span></p>\r\n\r\n<p><span style=\"font-size:24px\"><strong>&quot;MENJADI UNIT PELAYANAN PUBLIK YANG MAMPU MEMENUHI STANDAR PELAYANAN&quot;</strong></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:26px\"><strong>MISI</strong></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:24px\">Meningkatkan Kualitas Pelayanan</span></li>\r\n	<li><span style=\"font-size:24px\">Meningkatkan Sumber Daya Manusia Bidang Pelayanan</span></li>\r\n	<li><span style=\"font-size:24px\">Menciptakan Inovasi Pelayanan</span></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:26px\"><strong>MOTTO</strong></span></p>\r\n\r\n<p><span style=\"font-size:24px\"><strong>&quot;CEPAT DAN PROFESIONAL&quot;</strong></span></p>\r\n', 1, 1, '2022-09-03 10:10:05', '2022-09-03 15:08:43', 1, 1, '172.16.100.112'),
(7, 1, 0, 80, 'Maklumat Pelayanan', NULL, '/uploads/posting/image_utama/1e7f82019a9a60b25a85154570365203.jpg', '<p>MAKLUMAT PELAYANAN</p>\r\n', 1, 1, '2022-09-03 11:56:20', '2022-09-06 08:14:42', 1, 1, '172.16.100.112'),
(9, 1, 0, 0, 'Kontak Kami', NULL, NULL, '<p><span style=\"font-size:18px\">Kontak Kami</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Call Center :</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Alamat :</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Jalan Rohana Kudus nomor 44, Kel. Taratak, Kec. Pariaman Tengah Kota Pariaman</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Email :</span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">disdikporakotapariaman@gmail.com</span></span></p>\r\n', 1, 1, '2022-09-03 12:11:31', '2022-09-03 15:10:51', 1, 1, '172.16.100.112'),
(15, 1, 0, 93, 'Kartu Pariaman Pintar (KPP)', NULL, NULL, '<p>Peraturan Walikota Pariaman nomor 16 tahun 2020 tentang Petunjuk Teknis Pemberian Bantuan Biaya Personal Pendidikan bagi Peserta Didik dari Keluarga Tidak Mampu melalui Kartu Pariaman Pintar</p>\r\n\r\n<p><a href=\"/uploads/filepdf/c9114e1f17508cf688d4b3b51f4e6e43.pdf\">Perwako nomor 16 tahun 2020</a></p>\r\n', 1, 1, '2022-09-05 09:39:09', '2022-09-06 09:30:45', 1, 1, '172.16.100.112'),
(16, 1, 0, 93, 'Insentif PTK Honorer PAUD, SD dan SMP', NULL, NULL, '<p>1. Paraturan Walikota Pariaman nomor 51 tahun 2019 tentang Petunjuk Teknis Pemberian Insentif Pendidik dan Tenaga Kependidikan Pendidikan Anak Usia Dini bukan Pegawai Negeri</p>\r\n\r\n<p><a href=\"/uploads/filepdf/aaa1abf59f9d94d6df07b32221b36174.pdf\">Perwako nomor 51 tahun 2019</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>2. Peraturan Walikota Pariaman nomor 10 tahun 2020 tentang Petunjuk Teknis Pemberian Insentif bagi Guru Tidak Tetap/ Pegawai Tidak Tetap Sekolah Dasar Negeri dan Sekolah Menengah Pertama Negeri di Lingkungan Pemerintah Kota Pariaman</p>\r\n\r\n<p><a href=\"/uploads/filepdf/05d10196752589b85c92bcddedfa2545.pdf\">Perwako nomor 10 tahun 2020</a></p>\r\n', 1, 1, '2022-09-05 10:05:35', '2022-09-06 09:35:01', 1, 1, '172.16.100.112'),
(17, 1, 0, 93, 'Pendidikan Gratis', NULL, NULL, '<p>1. Peraturan Walikota Pariaman nomor 28 tahun 2009 tentang Pelaksanaan Wajib Belajar 12 tahun Kota Pariaman</p>\r\n\r\n<p><a href=\"/uploads/filepdf/8b6de96746adf5c8c4e1ee9ca53ae9cf.pdf\">Perwako nomor 28 tahun 2009</a></p>\r\n\r\n<p>2. Peraturan Walikota Pariaman nomor 15 tahun 2019 tentang Pedoman Pemberian Dana Bantuan Keuangan Bersifat Khusus kepada Pemerintah Provinsi Sumatera Barat</p>\r\n\r\n<p><a href=\"/uploads/filepdf/5fc5cabbbecffe2a5a18dcf7672e29c3.pdf\">Perwako nomor 15 tahun 2019</a></p>\r\n', 1, 1, '2022-09-05 10:26:36', '2022-09-06 09:38:00', 1, 1, '172.16.100.112'),
(18, 1, 0, 80, 'Hasil Kepuasan Masyarakat', NULL, NULL, '<p>Hasil Survey Kepuasan Masyarakat</p>\r\n\r\n<p><a href=\"/uploads/filepdf/aec69c48d8044166d36548bdf430309a.pdf\">Laporan Hasil Survey Kepuasan Masyarakat Tahun 2022</a></p>\r\n', 1, 1, '2022-09-05 10:33:11', '2022-09-06 10:56:31', 1, 1, '172.16.100.112'),
(19, 1, 0, 80, 'Alur Pengaduan', NULL, '/uploads/posting/image_utama/2f573ca8dee0fade315bcb3f6afea37a.jpg', '<p>Alur Pengaduan</p>\r\n', 1, 1, '2022-09-06 08:05:07', '2022-09-06 09:46:00', 1, 1, '172.16.100.112'),
(21, 1, 0, 100, 'Survey Kepuasan Masyarakat', NULL, NULL, '<p>Survey Kepuasan Masyarakat</p>\r\n\r\n<p><a href=\"https://bit.ly/3QmH6AM\">Survey Kepuasan Masyarakat</a></p>\r\n', 1, 1, '2022-09-06 10:34:39', NULL, 1, NULL, '172.16.100.112'),
(22, 2, 0, 87, 'Standar Pelayanan', NULL, NULL, '<p>Standar Pelayanan</p>\r\n\r\n<p><a href=\"/uploads/filepdf/42d4cb53c930706870d18520d2fec6ce.pdf\">Standar Pelayanan</a></p>\r\n', 1, 1, '2022-09-06 10:46:44', NULL, 1, NULL, '172.16.100.112'),
(23, 1, 0, 93, 'Satu Keluarga Satu Sarjana (SAGA SAJA)', NULL, NULL, '<p>Peraturan Walikota Pariaman Nomor 34 tahun 2019 tentang Petunjuk Teknis Pemberian Beasiswa bagi Mahasiswa pada Miskin Program Satu Keluarga Satu Sarjana</p>\r\n\r\n<p><a href=\"/uploads/filepdf/7b6220dbbca7af2a3d84139583f91cb7.pdf\">Perwako nomor 34 tahun 2019</a></p>\r\n\r\n<p>Peraturan Walikota Pariaman nomor 16 tahun 2021 tentang Perubahan atas Peraturan Walikota Pariaman Nomor 34 tahun 2019 tentang Petunjuk Teknis Pemberian Beasiswa bagi Mahasiswa pada Miskin Program Satu Keluarga Satu Sarjana</p>\r\n\r\n<p><a href=\"/uploads/filepdf/059584df90a7d33093f19fe0a96f2f2c.pdf\">Perwako nomor 16 tahun 2021</a></p>\r\n\r\n<p>Buku Saku Program Satu Keluarga Satu Sarjana</p>\r\n\r\n<p><a href=\"/uploads/filepdf/aeed0076f5c062d19ee08e8755554887.pdf\">Buku Saku Saga Saja</a></p>\r\n', 1, 1, '2022-09-07 10:54:10', '2022-09-07 14:21:50', 1, 1, '172.16.100.112'),
(24, 3, 12, 76, 'Sambutan Camat Pariaman Tengah Kota Pariaman', NULL, '/uploads/posting/image_utama/32cdac3123656c70a65104936a0d19d3.jpg', '<p>Website ini dimaksudkan sebagai sarana publikasi untuk memberikan Informasi dan gambaran tentang potensi Kecamatan Pariaman Tengah Kota Pariaman serta meningkatkan pelayanan kepada masyarakat untuk mengakses informasi. Melalui keberadaan website ini kiranya masyarakat dapat mengetahui seluruh informasi tentang kebijakan Pemerintah Kota Pariaman, khususnya Kecamatan Pariama Tengah.<br />\r\n<br />\r\nKritik dan saran juga sangat Kami harapkan demi penyempurnaan website ini dimasa datang. Semoga keberadaan website ini memberikan manfaat bagi kita semua. Amin...</p>\r\n', 1, 1, '2022-09-08 13:26:13', '2023-05-18 18:12:21', 1, 1, '127.0.0.1'),
(25, 9, 13, 76, 'Beasiswa SAGA SAJA', '/uploads/posting/icon/88820a6d3c8d5d3243b562da09a72d42.png', '/uploads/posting/image_utama/82b7d25414ed98dfa51ea823add83f55.png', '<p>Program Saga Saja merupakan program ungulan Pemerintah Kota Pariaman di bawah kepemimpinan Wali Kota Pariaman Genius Umar dan Wakil Wali Kota Pariaman Mardison Mahyuddin.</p>\r\n', 1, 1, '2022-09-08 13:56:36', '2022-09-09 10:13:17', 1, 1, '127.0.0.1'),
(26, 9, 13, 76, 'Kartu Pariaman Pintar', '/uploads/posting/icon/b4e6be59b3c4a06fa4c53cd58db649cb.png', '/uploads/posting/image_utama/391aa55c17b88343f78c1af7686d0195.png', '<p>Isi Deskripsi</p>\r\n', 1, 1, '2022-09-08 13:58:36', '2022-09-09 10:23:13', 1, 1, '127.0.0.1'),
(27, 9, 13, 76, 'Pendidikan Gratis', '/uploads/posting/icon/274cb050ffd01dd13c10191025ffb2f0.png', '/uploads/posting/image_utama/baaa6a9e9f884f5ebf72ad964b4ad009.png', '<p>isi deskripsi</p>\r\n', 1, 1, '2022-09-08 14:01:47', '2022-09-09 10:23:28', 1, 1, '127.0.0.1'),
(28, 10, 15, 76, 'Berita 1', NULL, '/uploads/posting/image_utama/7764fa0201185766df50220584cdd5f2.jpeg', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 1, 1, '2022-09-08 16:50:51', NULL, 1, NULL, '127.0.0.1'),
(29, 4, 16, 76, 'Layanan 1', '/uploads/posting/icon/46c144540d1b4e9c3fbdacd8e3ff35d6.png', NULL, '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>Persyaratan:</p>\r\n\r\n<ol>\r\n	<li>a</li>\r\n	<li>b</li>\r\n	<li>&nbsp;</li>\r\n</ol>\r\n', 1, 1, '2022-09-08 16:54:11', '2023-05-18 18:16:42', 1, 1, '127.0.0.1'),
(30, 4, 16, 76, 'Layanan 2', '/uploads/posting/icon/5d57c5cc075ef27148bb712868ca8e96.png', NULL, '<p><strong>Isi Deskripsi </strong>(is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.)</p>\r\n\r\n<p>Persyaratan:</p>\r\n\r\n<ol>\r\n	<li>q</li>\r\n	<li>w</li>\r\n	<li>&nbsp;</li>\r\n</ol>\r\n', 1, 1, '2022-09-08 17:23:37', '2023-05-18 18:16:53', 1, 1, '127.0.0.1'),
(31, 4, 16, 76, 'Layanan 3', '/uploads/posting/icon/50aba897870a98034ebfddc3961dee26.png', NULL, '<p><strong>Isi Deskripsi (</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. )</p>\r\n\r\n<p>Persyaratan:</p>\r\n\r\n<ol>\r\n	<li>q</li>\r\n	<li>c</li>\r\n</ol>\r\n', 1, 1, '2022-09-08 17:25:41', '2023-05-18 18:17:06', 1, 1, '127.0.0.1'),
(32, 4, 16, 76, 'Layanan 4', '/uploads/posting/icon/cc7eab3904147355d8cce228ac9989e0.png', NULL, '<p><strong>Isi Deskrispi</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>Persyaratan:</p>\r\n\r\n<ol>\r\n	<li>a</li>\r\n	<li>s</li>\r\n</ol>\r\n', 1, 1, '2022-09-08 17:59:46', '2023-05-18 18:17:15', 1, 1, '127.0.0.1'),
(33, 4, 16, 76, 'Layanan 5', '/uploads/posting/icon/3cb73b19a3301125f70e0287d118b78b.png', NULL, '<p><strong>Isi Deskripsi</strong> (is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. )</p>\r\n\r\n<p>Persyaratan:</p>\r\n\r\n<ol>\r\n	<li>a</li>\r\n	<li>s</li>\r\n</ol>\r\n', 1, 1, '2022-09-08 18:09:26', '2023-05-18 18:17:21', 1, 1, '127.0.0.1'),
(34, 9, 13, 76, 'Insentif PTK Honorer PUD, SD dan SMP', '/uploads/posting/icon/24cc5f14474724c0a2bf209acdeb04cd.png', NULL, '<p>isi deskripsi</p>\r\n', 1, 1, '2022-09-09 10:25:35', NULL, 1, NULL, '127.0.0.1'),
(35, 6, 4, 76, 'Galeri 1', NULL, '/uploads/posting/image_utama/9b4bcf0346dc49208e0d28b49c60b392.jpg', '<p>Deksripsi</p>\r\n', 1, 1, '2022-09-09 15:27:06', NULL, 1, NULL, '127.0.0.1'),
(36, 6, 4, 76, 'Galeri 2', NULL, '/uploads/posting/image_utama/49c84f7f1f7c12bfa3786943aed8d61b.jpeg', '<p>deskripsi</p>\r\n', 1, 1, '2022-09-09 15:33:22', NULL, 1, NULL, '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `posting_kategori`
--

CREATE TABLE `posting_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posting_kategori`
--

INSERT INTO `posting_kategori` (`id_kategori`, `nama_kategori`) VALUES
(0, 'Tak Berkategori'),
(1, 'Pengumuman'),
(2, 'Berita'),
(3, 'Tipe Page'),
(4, 'Galeri'),
(6, 'Artikel'),
(10, 'Tugas dan Fungsi'),
(12, 'Kata Sambutan'),
(13, 'Program Unggulan'),
(15, 'Berita Pendidikan'),
(16, 'Layanan Kami');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nim` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `kode_jurusan` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `timezone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `user_id`, `created_at`, `updated_at`, `full_name`, `nim`, `kode_jurusan`, `timezone`) VALUES
(1, 1, '2018-06-01 23:58:57', '2021-05-26 20:07:36', 'Suci Ramadhani', '', '', 'Africa/Conakry'),
(18, 18, '2020-12-07 20:05:26', '2020-12-07 20:05:26', 'Admin Website', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `can_admin` smallint(6) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `created_at`, `updated_at`, `can_admin`) VALUES
(1, 'Super Admin', '2018-06-01 23:58:56', NULL, 1),
(2, 'Admin Website', '2018-06-01 23:58:56', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_image` varchar(255) NOT NULL,
  `text_utama` varchar(100) DEFAULT NULL,
  `text_bagian_atas` varchar(100) DEFAULT NULL,
  `text_bagian_bawah` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_image`, `text_utama`, `text_bagian_atas`, `text_bagian_bawah`) VALUES
(7, '/uploads/slider/7cb76f04912e93afd8e66f64407419db.jpg', 'PARTENG SEGEH', 'PEMERINTAHAN KOTA PARIAMAN', 'Selamat Datang di Website Kecamatan Pariaman Tengah');

-- --------------------------------------------------------

--
-- Table structure for table `statis_page`
--

CREATE TABLE `statis_page` (
  `id_page` int(11) NOT NULL,
  `nama_page` varchar(50) NOT NULL,
  `url_page` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statis_page`
--

INSERT INTO `statis_page` (`id_page`, `nama_page`, `url_page`) VALUES
(1, 'Data Pegawai', '/site/pegawai-opd'),
(2, 'Hubungi Kami', 'site/hubungi-kami'),
(3, 'Beranda', 'site/index'),
(4, 'Download Dok&App', 'site/unggah-doc-apl'),
(6, 'Sarana dan Prasarana', 'site/sarana'),
(9, 'Survey IKM', 'site/ikm');

-- --------------------------------------------------------

--
-- Table structure for table `t_setting`
--

CREATE TABLE `t_setting` (
  `no_urut` int(11) NOT NULL,
  `grup_setting` varchar(150) NOT NULL,
  `nama_setting` varchar(50) NOT NULL,
  `nilai_setting` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_setting`
--

INSERT INTO `t_setting` (`no_urut`, `grup_setting`, `nama_setting`, `nilai_setting`) VALUES
(0, 'Profil OPD/UPT', 'Alamat', 'Jl. Imam Bonjol No 44 Pariaman, Desa Cimparuah, Kecamatan Pariaman Tengah Kota Pariaman, 25511'),
(4, 'Data Pegawai', 'Bidang', '[\"337\",\"338\",\"339\",\"340\"]'),
(0, 'Profil OPD/UPT', 'e-mail', 'diskominfo@pariamankota.go.id'),
(1, 'Data Pegawai', 'Jenis Web', 'OPD'),
(6, 'Profil OPD/UPT', 'NIP Pimpinan', '197204011993031005 --'),
(5, 'Profil OPD/UPT', 'Pimpinan', 'Hendri, S.Sos ---'),
(3, 'Data Pegawai', 'Satker', 'O29'),
(2, 'Data Pegawai', 'SKPD', 'O29'),
(0, 'Profil OPD/UPT', 'Tanggal Berdiri', '2000-01-01'),
(0, 'Profil OPD/UPT', 'Telpon dan Fax', '0812345678');

-- --------------------------------------------------------

--
-- Table structure for table `unggah_file`
--

CREATE TABLE `unggah_file` (
  `id_unggah` int(11) NOT NULL,
  `jenis_unggah` varchar(30) NOT NULL,
  `nama_unggah` varchar(100) NOT NULL,
  `keterangan_unggah` text,
  `lokasi_unggah` varchar(255) DEFAULT NULL,
  `alamat_url` varchar(255) DEFAULT NULL,
  `tanggal_unggah` date NOT NULL,
  `unggah_oleh` int(11) NOT NULL,
  `status_unggah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `status` smallint(6) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auth_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `access_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logged_in_ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logged_in_at` timestamp NULL DEFAULT NULL,
  `created_ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL,
  `banned_reason` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `role_id`, `status`, `email`, `username`, `password`, `auth_key`, `access_token`, `logged_in_ip`, `logged_in_at`, `created_ip`, `created_at`, `updated_at`, `banned_at`, `banned_reason`) VALUES
(1, 1, 2, 'neo@neo.com', 'super admin', '$2y$13$kvnj9UV9329wPqeVq99ltOUCk3f.wIVbLy3wlaILUiMtLxdhmUbke', '91C7Z0a4DJ_nIEHuYIARxOevTx-3hpdf', 'oS4BmhbLU9Y9-1fhYc1264hkxxBvJVx9', '127.0.0.1', '2023-05-18 03:58:39', NULL, '2018-06-01 23:58:56', '2020-12-10 20:38:31', NULL, NULL),
(18, 2, 1, 'adminweb@gmail.com', 'webadmin', '$2y$13$49H/.b47HD53.pDunNxz1.vVmfedyzGZ0UdODBFKgZhGutMxe7wd2', NULL, NULL, '127.0.0.1', '2022-09-01 18:48:42', NULL, '2020-12-07 20:05:26', '2021-09-10 02:58:18', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_auth`
--

CREATE TABLE `user_auth` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `provider_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `provider_attributes` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `type` smallint(6) NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `expired_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `user_id`, `type`, `token`, `data`, `created_at`, `expired_at`) VALUES
(1, 1, 2, 'EGmE6BNaZo3yFc7Pyf_0Ff6ECMnwniMz', 'sucicigo@gmail.com', '2020-12-10 20:38:29', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_instansi`
--
ALTER TABLE `data_instansi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `media_social`
--
ALTER TABLE `media_social`
  ADD PRIMARY KEY (`sosmed_id`);

--
-- Indexes for table `menu_managemen`
--
ALTER TABLE `menu_managemen`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`posting_id`);

--
-- Indexes for table `posting_kategori`
--
ALTER TABLE `posting_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_user_id` (`user_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `statis_page`
--
ALTER TABLE `statis_page`
  ADD PRIMARY KEY (`id_page`);

--
-- Indexes for table `t_setting`
--
ALTER TABLE `t_setting`
  ADD PRIMARY KEY (`nama_setting`);

--
-- Indexes for table `unggah_file`
--
ALTER TABLE `unggah_file`
  ADD PRIMARY KEY (`id_unggah`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email` (`email`),
  ADD UNIQUE KEY `user_username` (`username`),
  ADD KEY `user_role_id` (`role_id`);

--
-- Indexes for table `user_auth`
--
ALTER TABLE `user_auth`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_auth_provider_id` (`provider_id`),
  ADD KEY `user_auth_user_id` (`user_id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_token_token` (`token`),
  ADD KEY `user_token_user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_instansi`
--
ALTER TABLE `data_instansi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media_social`
--
ALTER TABLE `media_social`
  MODIFY `sosmed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menu_managemen`
--
ALTER TABLE `menu_managemen`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
  MODIFY `posting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `posting_kategori`
--
ALTER TABLE `posting_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `statis_page`
--
ALTER TABLE `statis_page`
  MODIFY `id_page` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `unggah_file`
--
ALTER TABLE `unggah_file`
  MODIFY `id_unggah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_auth`
--
ALTER TABLE `user_auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_role_id` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);

--
-- Constraints for table `user_auth`
--
ALTER TABLE `user_auth`
  ADD CONSTRAINT `user_auth_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user_token`
--
ALTER TABLE `user_token`
  ADD CONSTRAINT `user_token_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
