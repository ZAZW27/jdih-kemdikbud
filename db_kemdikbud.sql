-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2023 at 04:01 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kemdikbud`
--

-- --------------------------------------------------------

--
-- Table structure for table `bpp_dokumen`
--

CREATE TABLE `bpp_dokumen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `OPD` varchar(255) NOT NULL,
  `peraturan` varchar(255) NOT NULL,
  `judul_dok` varchar(255) NOT NULL,
  `status_dok` enum('Paraf Koordinasi','Selesai') NOT NULL,
  `keterangan_dok` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bpp_dokumen`
--

INSERT INTO `bpp_dokumen` (`id`, `OPD`, `peraturan`, `judul_dok`, `status_dok`, `keterangan_dok`, `created_at`, `updated_at`) VALUES
(1, 'Badan Pengelola Keuangan Daerah', 'PERATURAN WALIKOTA', 'PERUBAHAN ATAS KEPUTUSAN WALI KOTA NOMOR 188.45-611/2022 TENTANG STANDAR HARGA SATUAN PEMERINTAH KOTA BALIKPAPAN TAHUN ANGGARAN 2023', 'Paraf Koordinasi', 'PERUBAHAN ATAS KEPUTUSAN WALI KOTA NOMOR 188.45-611/2022 TENTANG STANDAR HARGA SATUAN PEMERINTAH KOTA BALIKPAPAN TAHUN ANGGARAN 2023', '2023-11-15 02:48:16', NULL),
(2, 'Badan Kepegawaian dan Pengembangan Sumber Daya Manusia', 'PERATURAN WALIKOTA', 'PERUBAHAN ATAS KEPUTUSAN WALI KOTA NOMOR 188.45-113/2023 TENTANG TIM PENYELESAIAN IZIN PERKAWINAN DAN PERCERAIAN PEGAWAI NEGERI SIPIL DI LINGKUNGAN PEMERINTAH KOTA BALIKPAPAN', 'Paraf Koordinasi', 'PROSES PARAF KOORDINASI (SILAHKAN DIAMBIL DI BAGIAN HUKUM)', '2023-11-15 02:50:39', NULL),
(3, 'Dinas Pertanahan dan Penataan Ruang', 'PERATURAN WALIKOTA', 'PEDOMAN PEMBANGUNAN PERUMAHAN BAGI MASYARAKAT BERPENGHASILAN RENDAH DI KOTA BALIKPAPAN	', 'Paraf Koordinasi', 'PROSES PARAF KOORDINASI (SILAHKAN DIAMBIL DI BAGIAN HUKUM)\r\n', '2023-11-15 02:50:39', NULL),
(4, 'Bagian Pemerintahan', '', 'PERUBAHAN ATAS KEPUTUSAN WALI KOTA NOMOR 188.45-40/2023 TENTANG PEMBERIAN HONORARIUM KEPADA KETUA RUKUN TETANGGA DI LINGKUNGAN PEMERINTAH KOTA BALIKPAPAN TAHUN 2023	', 'Paraf Koordinasi', 'PROSES PARAF KOORDINASI (SILAHKAN DIAMBIL DI BAGIAN HUKUM)\r\n', '2023-11-15 02:50:39', NULL),
(5, 'Badan Pengelola Pajak Daerah dan Retribusi Daerah	', 'PERATURAN WALIKOTA', 'PERUBAHAN PENETAPAN TARGET PENERIMAAN PAJAK DAERAH DAN RETRIBUSI DAERAH KOTA BALIKPAPAN TAHUN 2023 BERDASARKAN PERUBAHAN ANGGARAN PENDAPATAN DAN BELANJA DAERAH TAHUN ANGGARAN 2023	', 'Paraf Koordinasi', 'PROSES PARAF KOORDINASI (SILAHKAN DIAMBIL DI BAGIAN HUKUM)\r\n', '2023-11-15 02:50:39', NULL),
(6, 'Badan Pengelola Keuangan Daerah	', 'PERATURAN WALIKOTA', 'PENEMPATAN DANA DEPOSITO PEMERINTAH KOTA BALIKPAPAN PADA PT BANK PEMBANGUNAN DAERAH KALIMANTAN TIMUR DAN KALIMANTAN UTARA KANTOR CABANG BALIKPAPAN	', 'Paraf Koordinasi', 'SELESAI (SILAHKAN DIAMBIL DIBAGIAN HUKUM)\r\n', '2023-11-15 02:50:39', NULL),
(7, 'Dinas Pemberdayaan Perempuan, Perlindungan Anak dan Keluarga Berencana	', 'PERATURAN WALIKOTA', 'PEMBERIAN BANTUAN BERUPA BARANG KEPADA ANAK STUNTING DAN IBU HAMIL KEKURANGAN ENERGI KRONIS DI KOTA BALIKPAPAN TAHUN ANGGARAN 2023	', 'Paraf Koordinasi', 'SELESAI (SILAHKAN DIAMBIL DIBAGIAN HUKUM)\r\n', '2023-11-15 02:50:39', NULL),
(8, 'Inspektorat', 'INSTRUKSI WALIKOTA', 'PANITIA PELAKSANA KEGIATAN HARI ANTIKORUPSI SEDUNIA PEMERINTAH KOTA BALIKPAPAN TAHUN 2023', 'Selesai', 'SELESAI (SILAHKAN DIAMBIL DIBAGIAN HUKUM)\r\n', '2023-11-15 02:54:24', NULL),
(9, 'Inspektorat	', 'KEPUTUSAN WALIKOTA', 'HONORARIUM PANITIA PELAKSANA KEGIATAN DAN DANA PEMBINAAN PEMENANG LOMBA DALAM RANGKA MEMPERINGATI HARI ANTIKORUPSI SEDUNIA TAHUN 2023	', 'Selesai', 'SELESAI (SILAHKAN DIAMBIL DIBAGIAN HUKUM)\r\n', '2023-11-15 02:54:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bpp_produk_hukum`
--

CREATE TABLE `bpp_produk_hukum` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipe_dokumen` enum('PERATURAN PERUNDANG-UNDANGAN') NOT NULL,
  `judul` varchar(255) NOT NULL,
  `nama_pengarang` varchar(255) NOT NULL,
  `tipe_pengarang` enum('Badan Organisasi') NOT NULL,
  `jenis_pengarang` enum('Pengarang Utama') NOT NULL,
  `nomor_peraturan` int(11) NOT NULL,
  `id_jenis_peraturan` bigint(20) UNSIGNED NOT NULL,
  `tempat_penetapan` varchar(255) NOT NULL,
  `tanggal_penetapan` date NOT NULL,
  `tanggal_pengundangan` date NOT NULL,
  `id_tahun_peraturan` bigint(20) UNSIGNED NOT NULL,
  `sumber` varchar(255) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `tipe_subjek` enum('Topik') NOT NULL,
  `jenis_subjek` enum('Primary') NOT NULL,
  `id_status_peraturan` bigint(20) UNSIGNED NOT NULL,
  `catatan` text NOT NULL,
  `bahasa` enum('Bahasa Indonesia','Bahasa Inggris') NOT NULL,
  `dilihat` int(11) NOT NULL,
  `diunduh` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bpp_produk_hukum`
--

INSERT INTO `bpp_produk_hukum` (`id`, `tipe_dokumen`, `judul`, `nama_pengarang`, `tipe_pengarang`, `jenis_pengarang`, `nomor_peraturan`, `id_jenis_peraturan`, `tempat_penetapan`, `tanggal_penetapan`, `tanggal_pengundangan`, `id_tahun_peraturan`, `sumber`, `subjek`, `tipe_subjek`, `jenis_subjek`, `id_status_peraturan`, `catatan`, `bahasa`, `dilihat`, `diunduh`, `file`, `created_at`, `updated_at`) VALUES
(1, 'PERATURAN PERUNDANG-UNDANGAN', 'Peraturan Daerah Kota Balikpapan Nomor 1 Tahun 2022 Tentang Pelayanan Kepemudaan', 'Pemerintah Kota Balikpapan', 'Badan Organisasi', 'Pengarang Utama', 1, 16, 'Kota Balikpapan', '2022-05-18', '2022-05-19', 24, 'LD 2022 (1) : 15 hal, TLD (61) 6 hal', 'Pemuda', 'Topik', 'Primary', 1, 'sembarang ini catatan apa aja yang penting ada catatatannya', 'Bahasa Indonesia', 423, 123, '', NULL, NULL),
(2, 'PERATURAN PERUNDANG-UNDANGAN', 'Peraturan Wali Kota Balikpapan Nomor 1 Tahun 2023 Tentang Teknis Pemberian Tunjangan Hari Raya Dan Gaji Ketiga Belas Yang Bersumber Dari Anggaran Pendapatan Dan Belanja Daerah Tahun 2023', 'Pemerintah Kota Balikpapan', 'Badan Organisasi', 'Pengarang Utama', 1, 17, 'Kota Balikpapan', '2023-04-06', '2023-04-06', 25, 'BD (1) 2023 : 7 hlm', 'THR', 'Topik', 'Primary', 1, '', 'Bahasa Indonesia', 891, 812, '', NULL, NULL),
(3, 'PERATURAN PERUNDANG-UNDANGAN', 'Kesepakatan Bersama Antara Pemerintah Kota Balikpapan Dan Perhimpunan Peternak Sapi Dan Kerbau Indonesia Provinsi Kalimantan Timur Nomor 197/01/kb/ii/2022 Dan Nomor 01/i/mou/dpd-Ppski/ Tentang Kerja Sama Pengelolaan Kotoran/ Limbah Sapi Dan Pembuatan Form', 'Pemerintah Kota Balikpapan', 'Badan Organisasi', 'Pengarang Utama', 1, 20, 'Kota Balikpapan', '2022-02-03', '2022-11-14', 24, '', 'Pengelolaan Limbah Sapi', 'Topik', 'Primary', 1, '', 'Bahasa Indonesia', 219, 163, '', NULL, NULL),
(4, 'PERATURAN PERUNDANG-UNDANGAN', 'Surat Edaran Wali Kota Balikpapan Nomor 300/112/pem Tentang Penutupan Sementara Kegiatan Usaha Hiburan Dan Arena Bola Sodok (Billiard) Dalam Rangka Hari Raya Nyepi Tahun 2023, Bulan Suci Ramadhan Dan Hari Raya Idul Fitri 1444 Hijriah', 'Pemerintah Kota Balikpapan', 'Badan Organisasi', 'Pengarang Utama', 112, 18, 'Kota Balikpapan', '2023-05-14', '2023-05-14', 25, '', 'SURAT EDARAN TENTANG PENUTUPAN SEMENTARA TEMPAT HIBURAN MALAM DAN BILLIARD', 'Topik', 'Primary', 1, '', 'Bahasa Indonesia', 923, 327, '', NULL, NULL),
(5, 'PERATURAN PERUNDANG-UNDANGAN', 'Peraturan Daerah Kota Balikpapan Nomor 10 Tahun 2020 Tentang Anggaran Pendapatan Dan Belanja Daerah Tahun Anggaran 2021', 'Pemerintah Kota Balikpapan', 'Badan Organisasi', 'Pengarang Utama', 10, 22, 'Kota Balikpapan', '2020-12-30', '2020-12-30', 22, 'LD 2020 (10) : 7 hal', 'APBD 2021', 'Topik', 'Primary', 1, '', 'Bahasa Indonesia', 433, 420, '', NULL, NULL),
(6, 'PERATURAN PERUNDANG-UNDANGAN', 'Peraturan Wali Kota Balikpapan Nomor 9 Tahun 2019 Tentang Pencabutan Peraturan Wali Kota Nomor 16 Tahun 2010 Tentang Organisasi Tata Kerja Dan Uraian Tugas Sekretariat Dewan Pengurus Korps Pegawai Republik Indonesia Kota Balikpapan', 'Pemerintah Kota Balikpapan', 'Badan Organisasi', 'Pengarang Utama', 9, 23, 'Kota Balikpapan', '2019-02-11', '2019-02-12', 21, 'BD 2019 (9) : 2 hal', 'Pengurus KORPRI', 'Topik', 'Primary', 1, '', 'Bahasa Indonesia', 912, 812, '', NULL, NULL),
(7, 'PERATURAN PERUNDANG-UNDANGAN', 'Peraturan Wali Kota Balikpapan Nomor 4 Tahun 2015 Tentang Tarif Pelayanan Kesehatan Pada Rumah Sakit Umum Daerah Balikpapan Kelas C', 'Pemerintah Kota Balikpapan', 'Badan Organisasi', 'Pengarang Utama', 4, 21, 'Kota Balikpapan', '2015-02-09', '2015-02-09', 17, 'BD 2015 (4) : 53 hal', 'Tarif Pelayanan Kesehatan RSUD', 'Topik', 'Primary', 1, '', 'Bahasa Indonesia', 324, 291, '', NULL, NULL),
(8, 'PERATURAN PERUNDANG-UNDANGAN', 'Kesepakatan Bersama Antara Pemerintah Kota Balikpapan Dan Pt Pertamina Hulu Mahakam Dan Pt Pertamina Hulu Sanga Sanga Dan Pt Pertamina Hulu Kalimantan Timur Tentang Pengelolaan Taman Tematik Orchidarium Dan Perlindungan Keanekaragaman Hayati Di Kebun Raya', 'Pemerintah Kota Balikpapan', 'Badan Organisasi', 'Pengarang Utama', 5, 20, 'Kota Balikpapan', '2022-05-23', '2022-11-15', 24, '', 'Taman Tematik, Orchidarium', 'Topik', 'Primary', 1, '', 'Bahasa Indonesia', 105, 144, '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_peraturan`
--

CREATE TABLE `jenis_peraturan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenis_peraturan`
--

INSERT INTO `jenis_peraturan` (`id`, `jenis`, `created_at`, `updated_at`) VALUES
(1, 'Undang-undang', NULL, NULL),
(2, 'Peraturan Pemerintah', NULL, NULL),
(3, 'Peraturan Presiden', NULL, NULL),
(4, 'Keputusan Presiden', NULL, NULL),
(5, 'Instrusksi Presiden', NULL, NULL),
(6, 'Peraturan Menteri', NULL, NULL),
(7, 'Keputusan Menteri', NULL, NULL),
(8, 'Instruksi Menteri', NULL, NULL),
(9, 'Surat Edaran Menteri', NULL, NULL),
(10, 'Peraturan Bersama Menteri', NULL, NULL),
(11, 'Keputusan Bersama Menteri', NULL, NULL),
(12, 'Peraturan Eselon I', NULL, NULL),
(13, 'Keputusan Eselon I', NULL, NULL),
(14, 'Surat Edaran Eselon I', NULL, NULL),
(15, 'Peraturan Lainnya', NULL, NULL),
(16, 'Peraturan Daerah', NULL, NULL),
(17, 'Peraturan Wali Kota', NULL, NULL),
(18, 'Surat Edaran Wali Kota ', NULL, NULL),
(20, 'MOU', NULL, NULL),
(21, 'Instruksi Wali Kota', NULL, NULL),
(22, 'Rancangan Peraturan Daerah', NULL, NULL),
(23, 'Rancangan Peraturan Wali Kota', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_01_054542_tbl_pengumuman', 1),
(7, '2023_11_01_063649_create_beritas_table', 1),
(8, '2023_11_05_045141_create_pengumumen_table', 2),
(9, '2023_11_05_045141_create_tbl_pengumuman_table', 3),
(13, '2023_11_06_071330_tbl_berita_terkait', 5),
(19, '2023_11_07_082515_nomor_peraturan', 6),
(20, '2023_11_07_082525_tahun_peraturan', 6),
(21, '2023_11_07_082530_jenis_peraturan', 6),
(22, '2023_11_07_082536_subjek_peraturan', 6),
(23, '2023_11_07_082540_status_peraturan', 6),
(29, '2023_11_07_082547_tbl_peraturan', 7),
(30, '2023_11_10_004052_rename_tbl', 8),
(31, '2023_11_10_004053_rename_tbl', 9),
(32, '2023_11_10_004054_rename_tbl', 10),
(45, '2023_11_11_114021_t_t_p__j_d_i_h', 12),
(47, '2023_11_12_234617_survey_pengunjung', 13),
(48, '2023_11_14_014021_produk_hukum', 14),
(49, '2023_11_15_024005_bpp_dokumen', 15),
(50, '2023_11_15_064414_tbl_galeri', 16),
(53, '2014_10_12_000000_create_users_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `nomor_peraturan`
--

CREATE TABLE `nomor_peraturan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nomor_peraturan`
--

INSERT INTO `nomor_peraturan` (`id`, `nomor`, `created_at`, `updated_at`) VALUES
(1, '47/M/2023', NULL, NULL),
(2, '60', NULL, NULL),
(3, '58', NULL, NULL),
(4, '5', NULL, NULL),
(5, '55', NULL, NULL),
(6, '54', NULL, NULL),
(7, '271/O/2023', NULL, NULL),
(8, '258/P/2023', NULL, NULL),
(9, '259/P/2023', NULL, NULL),
(10, '260/P/2023', NULL, NULL),
(11, '262/P/2023', NULL, NULL),
(12, '270/P/2023', NULL, NULL),
(13, '19', NULL, NULL),
(14, '20', NULL, NULL),
(15, '53', NULL, NULL),
(16, '52', NULL, NULL),
(17, '51', NULL, NULL),
(18, '50', NULL, NULL),
(19, '17', NULL, NULL),
(20, '49', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `status_branch`
--

CREATE TABLE `status_branch` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `status_branch`
--

INSERT INTO `status_branch` (`id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Berlaku', NULL, NULL),
(2, 'Tidak Berlaku', NULL, NULL),
(3, 'Dicabut', NULL, NULL),
(4, 'Mencabut', NULL, NULL),
(5, 'Diubah', NULL, NULL),
(6, 'Mengubah', NULL, NULL),
(7, 'Tidak memilki daya guna', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subjek_peraturan`
--

CREATE TABLE `subjek_peraturan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjek_peraturan`
--

INSERT INTO `subjek_peraturan` (`id`, `subjek`, `created_at`, `updated_at`) VALUES
(1, 'Administrasi', '2023-11-08 01:15:03', NULL),
(2, 'Bahasa', '2023-11-08 01:15:03', NULL),
(3, 'Bantuan/Pendanaan Pendidikan', '2023-11-08 01:15:03', NULL),
(4, 'Buku', '2023-11-08 01:15:03', NULL),
(5, 'Kebudayaan', '2023-11-08 01:15:03', NULL),
(6, 'Organisasi', '2023-11-08 01:15:03', NULL),
(7, 'Pengawasan', '2023-11-08 01:15:03', NULL),
(8, 'Pengelolaan Satuan Pendidikan', '2023-11-08 01:15:03', NULL),
(9, 'Pendidikan dan Tenaga Kependidikan', '2023-11-08 01:15:03', NULL),
(10, 'Pendidikan Tinggi', '2023-11-08 01:15:03', NULL),
(11, 'Perizinan', '2023-11-08 01:15:03', NULL),
(12, 'Urusan Penmerintahan dan Pemerintahan Daerah', '2023-11-08 01:15:03', NULL),
(13, 'Riset dan Teknologi', '2023-11-08 01:15:03', NULL),
(14, 'Lainnya', '2023-11-08 01:15:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `survey_pengunjung`
--

CREATE TABLE `survey_pengunjung` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `topic` varchar(255) NOT NULL,
  `rate` enum('Sangat Setuju','Setuju','Kurang Setuju','Tidak Setuju') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `survey_pengunjung`
--

INSERT INTO `survey_pengunjung` (`id`, `topic`, `rate`, `created_at`, `updated_at`) VALUES
(41, 'survey UI', 'Sangat Setuju', '2023-11-12 21:07:28', '2023-11-12 21:07:28'),
(42, 'search UX survey', 'Sangat Setuju', '2023-11-12 21:07:28', '2023-11-12 21:07:28'),
(43, 'kelengkapan dokumen', 'Sangat Setuju', '2023-11-12 21:07:28', '2023-11-12 21:07:28'),
(44, 'validasi dokumen/hukum', 'Sangat Setuju', '2023-11-12 21:07:28', '2023-11-12 21:07:28'),
(45, 'survey UI', 'Setuju', '2023-11-12 21:07:36', '2023-11-12 21:07:36'),
(46, 'search UX survey', 'Setuju', '2023-11-12 21:07:36', '2023-11-12 21:07:36'),
(47, 'kelengkapan dokumen', 'Setuju', '2023-11-12 21:07:36', '2023-11-12 21:07:36'),
(48, 'validasi dokumen/hukum', 'Setuju', '2023-11-12 21:07:36', '2023-11-12 21:07:36'),
(49, 'survey UI', 'Kurang Setuju', '2023-11-12 21:07:42', '2023-11-12 21:07:42'),
(50, 'search UX survey', 'Kurang Setuju', '2023-11-12 21:07:42', '2023-11-12 21:07:42'),
(51, 'kelengkapan dokumen', 'Kurang Setuju', '2023-11-12 21:07:42', '2023-11-12 21:07:42'),
(52, 'validasi dokumen/hukum', 'Kurang Setuju', '2023-11-12 21:07:42', '2023-11-12 21:07:42'),
(53, 'survey UI', 'Tidak Setuju', '2023-11-12 21:07:47', '2023-11-12 21:07:47'),
(54, 'search UX survey', 'Tidak Setuju', '2023-11-12 21:07:47', '2023-11-12 21:07:47'),
(55, 'kelengkapan dokumen', 'Tidak Setuju', '2023-11-12 21:07:47', '2023-11-12 21:07:47'),
(56, 'validasi dokumen/hukum', 'Tidak Setuju', '2023-11-12 21:07:47', '2023-11-12 21:07:47'),
(57, 'survey UI', 'Sangat Setuju', '2023-11-12 21:07:55', '2023-11-12 21:07:55'),
(58, 'search UX survey', 'Setuju', '2023-11-12 21:07:55', '2023-11-12 21:07:55'),
(59, 'kelengkapan dokumen', 'Kurang Setuju', '2023-11-12 21:07:55', '2023-11-12 21:07:55'),
(60, 'validasi dokumen/hukum', 'Tidak Setuju', '2023-11-12 21:07:55', '2023-11-12 21:07:55'),
(61, 'survey UI', 'Tidak Setuju', '2023-11-12 21:08:01', '2023-11-12 21:08:01'),
(62, 'search UX survey', 'Kurang Setuju', '2023-11-12 21:08:01', '2023-11-12 21:08:01'),
(63, 'kelengkapan dokumen', 'Setuju', '2023-11-12 21:08:01', '2023-11-12 21:08:01'),
(64, 'validasi dokumen/hukum', 'Sangat Setuju', '2023-11-12 21:08:01', '2023-11-12 21:08:01'),
(65, 'survey UI', 'Setuju', '2023-11-12 21:08:07', '2023-11-12 21:08:07'),
(66, 'search UX survey', 'Kurang Setuju', '2023-11-12 21:08:07', '2023-11-12 21:08:07'),
(67, 'kelengkapan dokumen', 'Sangat Setuju', '2023-11-12 21:08:07', '2023-11-12 21:08:07'),
(68, 'validasi dokumen/hukum', 'Kurang Setuju', '2023-11-12 21:08:07', '2023-11-12 21:08:07'),
(69, 'survey UI', 'Tidak Setuju', '2023-11-12 21:35:14', '2023-11-12 21:35:14'),
(70, 'search UX survey', 'Tidak Setuju', '2023-11-12 21:35:14', '2023-11-12 21:35:14'),
(71, 'kelengkapan dokumen', 'Tidak Setuju', '2023-11-12 21:35:14', '2023-11-12 21:35:14'),
(72, 'validasi dokumen/hukum', 'Tidak Setuju', '2023-11-12 21:35:14', '2023-11-12 21:35:14'),
(73, 'survey UI', 'Tidak Setuju', '2023-11-12 21:35:21', '2023-11-12 21:35:21'),
(74, 'search UX survey', 'Tidak Setuju', '2023-11-12 21:35:21', '2023-11-12 21:35:21'),
(75, 'kelengkapan dokumen', 'Tidak Setuju', '2023-11-12 21:35:21', '2023-11-12 21:35:21'),
(76, 'validasi dokumen/hukum', 'Tidak Setuju', '2023-11-12 21:35:21', '2023-11-12 21:35:21'),
(77, 'survey UI', 'Tidak Setuju', '2023-11-12 21:35:27', '2023-11-12 21:35:27'),
(78, 'search UX survey', 'Tidak Setuju', '2023-11-12 21:35:27', '2023-11-12 21:35:27'),
(79, 'kelengkapan dokumen', 'Tidak Setuju', '2023-11-12 21:35:27', '2023-11-12 21:35:27'),
(80, 'validasi dokumen/hukum', 'Tidak Setuju', '2023-11-12 21:35:27', '2023-11-12 21:35:27'),
(81, 'survey UI', 'Sangat Setuju', '2023-11-14 17:09:34', '2023-11-14 17:09:34'),
(82, 'search UX survey', 'Sangat Setuju', '2023-11-14 17:09:34', '2023-11-14 17:09:34'),
(83, 'kelengkapan dokumen', 'Sangat Setuju', '2023-11-14 17:09:34', '2023-11-14 17:09:34'),
(84, 'validasi dokumen/hukum', 'Sangat Setuju', '2023-11-14 17:09:34', '2023-11-14 17:09:34'),
(85, 'survey UI', 'Sangat Setuju', '2023-11-14 17:10:31', '2023-11-14 17:10:31'),
(86, 'search UX survey', 'Sangat Setuju', '2023-11-14 17:10:31', '2023-11-14 17:10:31'),
(87, 'kelengkapan dokumen', 'Sangat Setuju', '2023-11-14 17:10:31', '2023-11-14 17:10:31'),
(88, 'validasi dokumen/hukum', 'Sangat Setuju', '2023-11-14 17:10:31', '2023-11-14 17:10:31'),
(89, 'survey UI', 'Tidak Setuju', '2023-11-14 19:17:54', '2023-11-14 19:17:54'),
(90, 'search UX survey', 'Tidak Setuju', '2023-11-14 19:17:54', '2023-11-14 19:17:54'),
(91, 'kelengkapan dokumen', 'Tidak Setuju', '2023-11-14 19:17:54', '2023-11-14 19:17:54'),
(92, 'validasi dokumen/hukum', 'Tidak Setuju', '2023-11-14 19:17:54', '2023-11-14 19:17:54'),
(93, 'survey UI', 'Sangat Setuju', '2023-11-16 16:34:27', '2023-11-16 16:34:27'),
(94, 'search UX survey', 'Sangat Setuju', '2023-11-16 16:34:27', '2023-11-16 16:34:27'),
(95, 'kelengkapan dokumen', 'Sangat Setuju', '2023-11-16 16:34:27', '2023-11-16 16:34:27'),
(96, 'validasi dokumen/hukum', 'Sangat Setuju', '2023-11-16 16:34:27', '2023-11-16 16:34:27'),
(97, 'survey UI', 'Sangat Setuju', '2023-11-25 20:52:29', '2023-11-25 20:52:29'),
(98, 'search UX survey', 'Tidak Setuju', '2023-11-25 20:52:29', '2023-11-25 20:52:29'),
(99, 'kelengkapan dokumen', 'Sangat Setuju', '2023-11-25 20:52:29', '2023-11-25 20:52:29'),
(100, 'validasi dokumen/hukum', 'Sangat Setuju', '2023-11-25 20:52:29', '2023-11-25 20:52:29');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_branch`
--

CREATE TABLE `tahun_branch` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tahun_branch`
--

INSERT INTO `tahun_branch` (`id`, `tahun`, `created_at`, `updated_at`) VALUES
(1, '1999', '2023-11-08 01:09:43', '2023-11-08 01:09:43'),
(2, '2000', '2023-11-08 01:09:43', '2023-11-08 01:09:43'),
(3, '2001', '2023-11-08 01:09:43', '2023-11-08 01:09:43'),
(4, '2002', '2023-11-08 01:09:43', '2023-11-08 01:09:43'),
(5, '2003', '2023-11-08 01:09:43', '2023-11-08 01:09:43'),
(6, '2004', '2023-11-08 01:09:43', '2023-11-08 01:09:43'),
(7, '2005', '2023-11-08 01:09:43', '2023-11-08 01:09:43'),
(8, '2006', '2023-11-08 01:09:43', '2023-11-08 01:09:43'),
(9, '2007', '2023-11-08 01:09:43', '2023-11-08 01:09:43'),
(10, '2008', '2023-11-08 01:09:43', '2023-11-08 01:09:43'),
(11, '2009', '2023-11-08 01:09:43', '2023-11-08 01:09:43'),
(12, '2010', '2023-11-08 01:09:43', '2023-11-08 01:09:43'),
(13, '2011', '2023-11-08 01:09:43', '2023-11-08 01:09:43'),
(14, '2012', '2023-11-08 01:09:43', '2023-11-08 01:09:43'),
(15, '2013', '2023-11-08 01:09:43', '2023-11-08 01:09:43'),
(16, '2014', '2023-11-08 01:09:43', '2023-11-08 01:09:43'),
(17, '2015', '2023-11-08 01:09:43', '2023-11-08 01:09:43'),
(18, '2016', '2023-11-08 01:09:43', '2023-11-08 01:09:43'),
(19, '2017', '2023-11-08 01:09:43', '2023-11-08 01:09:43'),
(20, '2018', '2023-11-08 01:09:43', '2023-11-08 01:09:43'),
(21, '2019', '2023-11-08 01:09:43', '2023-11-08 01:09:43'),
(22, '2020', '2023-11-08 01:09:43', '2023-11-08 01:09:43'),
(23, '2021', '2023-11-08 01:09:43', '2023-11-08 01:09:43'),
(24, '2022', '2023-11-08 01:09:43', '2023-11-08 01:09:43'),
(25, '2023', '2023-11-08 01:09:43', '2023-11-08 01:09:43'),
(26, '2024', '2023-11-08 01:09:43', '2023-11-08 01:09:43');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` text NOT NULL,
  `gambar_berita` varchar(255) NOT NULL,
  `dilihat` int(11) NOT NULL,
  `tautan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id`, `judul`, `tema`, `tanggal`, `isi`, `gambar_berita`, `dilihat`, `tautan`, `created_at`, `updated_at`) VALUES
(1, 'Peningkatan Pemahaman Advokasi Hukum dan Inventarisasi Permasalahan Hukum pada Unit Pelaksana Teknis (UPT) di Lingkungan Kemendikbudristek', 'Advokasi Hukum', '2023-10-31', 'Mataram – Biro Hukum Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi (Kemendikbudristek) menyelenggarakan kegiatan Peningkatan Pemahaman Advokasi Hukum dan Inventarisasi Permasalahan Hukum pada Unit Pelaksana Teknis (UPT) di Lingkungan Kemendikbudristek. Kegiatan ini bertujuan untuk meningkatkan pemahaman Unit Pelaksana Teknis tentang advokasi hukum guna menyelesaikan masalah dan kasus hukum yang mungkin ada dan persiapan di masa yang akan datang.\r\n\r\nKegiatan ini dilaksanakan pada tanggal 27 Oktober 2023 yang bertempat di Kota Mataram, Nusa Tenggara Barat dengan mengundang 117 peserta dari Unit Pelaksana Teknis (UPT) di lingkungan Kemendikbudristek. Dalam kesempatan kali ini, narasumber yang dihadirkan dari Otoritas Jasa Keuangan (OJK), Direktorat Jenderal Kekayaan Negara (DJKN) Kementerian Keuangan, Lembaga Kebijakan Pengadaan Barang/Jasa Pemerintah (LKPP), dan Kejaksaan Tinggi Nusa Tenggara Barat.\r\n\r\nDalam laporannya, Kepala Biro Hukum, Ineke Indraswati, S.H., M.H. menyampaikan bahwa “Peserta diharapkan setelah mengikuti kegiatan ini dapat menambah wawasan tentang penyelesaian permasalahan hukum, baik secara litigasi maupun non litigasi pada satuan organisasi masing-masing.”\r\n\r\nKegiatan secara resmi dibuka oleh Staf Ahli Bidang Regulasi Kemendikbudristek (SAM Regulasi), Nur Syarifah, S.H., LL.M. yang dalam arahannya menyampaikan bahwa “Kegiatan ini merupakan kesempatan yang baik untuk Unit Pelaksana Teknis (UPT) agar dapat meningkatkan pengetahuan dan pemahaman mengenai penyelesaian masalah hukum dan perkara yang ada”.\r\n\r\nNarasumber pertama yang dihadirkan adalah Horas V.M. Tarihoran yang merupakan Direktur Literasi dan Edukasi Keuangan, Bidang Edukasi dan Perlindungan Konsumen, Otoritas Jasa Keuangan (OJK) dengan materi Pengenalan OJK, Perencanaan Keuangan, Waspada Investasi dan Pinjaman Online Ilegal. “OJK mempunyai tugas dalam melindungi kepentingan Konsumen/Masyarakat melalui tindakan Preventif seperti pemberian informasi & edukasi, Pelayanan pengaduan, Market intelligence dan pengawasan market conduct. Sedangkan secara Kuratif dilakukan seperti penyelesaian pengaduan, tindakan penghentian kegiatan, Alternative dispute resolution dan Pembelaan hukum.” ujarnya.\r\n\r\nNarasumber kedua yang dihadirkan adalah Utama Teguhwibawa, S.H., M.M. yang merupakan Kepala Seksi pada Direktorat Hukum dan Humas, Direktorat Jenderal Kekayaan Negara (DJKN) Kementerian Keuangan dengan materi: Permasalahan Hukum dalam rangka Pengamanan BMN di lingkungan Kemendikbudristek. Dalam paparannya, beliau menyampaikan bahwa “Pengamanan Barang Milik Negara dilakukan melalui tertib administrasi seperti bukti sertifikat dan bukti perolehan, pengamanan fisik seperti pemagaran, dan pengamanan hukum yang dapat dilakukan dalam setiap tingkat peradilan.” Beliau menambahkan bahwa “Tindak lanjut penanganan permasalahan BMN yang dikuasai oleh pihak lain, yaitu pendekatan persuasif, dan apabila gagal maka dilanjutkan upaya pelaporan kepada pihak yang berwenang.” ujarnya.\r\n\r\nNarasumber ketiga yang dihadirkan adalah Arif Budiman Anwar yang merupakan Analis Kebijakan Madya, Direktort Penanganan Permasalahan (LKPP) dengan materi: Pengadaan Barang/Jasa Pemerintah dan Permasalahannya. Beliau menyatakan bahwa “Penyebab terjadinya Permasalahan Hukum dalam pelaksanaan pengadaan barang/jasa adalah perencanaan yang kurang matang karena tidak didukung justifikasi teknis yang kuat serta dilakukan terburu-buru. Selain itu kurangnya transparansi dalam prosesnya dan keputusan yang diambil tidak didukung justifikasi dan dokumentasi yang lengkap.” Beliau melanjutkan bahwa “Lemahnya pengendalian kontrak, adanya niat jahat, dan ketidakharmonisan regulasi antara aturan satu dengan yang lain bertentangan menyebabkan adanya permasalahan hukum dalam pelaksanaan pengadaan barang/jasa.”\r\n\r\nNarasumber keempat yang dihadirkan adalah I Wayan Riyana, S.H., M.H. yang merupakan Asisten Intelejen, Kejaksaan Tinggi Nusa Tenggara Barat dengan materi: Pencegahan Tindak Pidana oleh PNS/ASN dalam Pelaksanaan Jabatan. Dalam presentasinya beliau menjelaskan bahwa “Pemahaman terhadap korupsi perlu ditingkatkan dalam rangka pencegahan korupsi seperti pemberian literasi dan pendampingan untuk proyek strategis.” Beliau melanjutkan bahwa “Sektor pendidikan dapat membuat program seperti Jaksa Garda Desa sebagai bentuk peran Kejaksaan dalam memberikan pendampingan, pengawalan, dan memaksimalkan pengelolaan keuangan desa serta meminimalkan permasalahan yang dihadapi oleh perangkat desa untuk memberikan manfaat bagi masyarakat desa.”\r\n\r\nKegiatan ini terselenggara dengan sukses, hal ini dapat dilihat dari interaksi melalui pertanyaan-pertanyaan dari peserta ke narasumber karena materi yang dibawakan terkait dengan pekerjaan sehari-hari. Menurut para peserta, kegiatan seperti ini sangat diharapkan karena selain meningkatkan pemahaman dan wawasan terkait penanganan masalah hukum dan perkara serta bermanfaat bagi para pemangku kebijakan di Unit Pelaksana Teknis (UPT).', '1700699116.jpg', 120, '', '2023-11-05 09:12:58', '2023-11-22 16:25:16'),
(2, 'Peningkatan Pembinaan dan Pemahaman Penyusunan Peraturan Perguruan Tinggi (PTN) di Lingkungan Kemendikbudristek', 'Regulasi', '2023-10-12', 'Semarang – Biro Hukum Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi (Kemendikbudristek) menyelenggarakan kegiatan Pembinaan dan Pemahaman Penyusunan Peraturan Perguruan Tinggi di Lingkungan Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi Tahun 2023 pada tanggal 12 Oktober 2023. Kegiatan ini diselenggarakan dalam rangka pembinaan dan peningkatan pemahaman bagi pimpinan perguruan tinggi dan organ perguruan tinggi dalam penyusunan peraturan internal perguruan tinggi dan penyusunan kerja sama di lingkungan masing-masing perguruan tinggi.\r\n\r\nPeserta undangan yang hadir dalam kegiatan ini merupakan pimpinan perguruan tinggi dan organ perguruan tinggi yang berasal dari 141 Perguruan Tinggi Negeri (PTN) di lingkungan Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi.\r\n\r\nKepala Biro Hukum, Ineke Indraswati, S.H., M.H. dalam laporannya menyampaikan bahwa “tujuan diselenggarakannya kegiatan ini untuk meningkatkan pemahaman dalam penyusunan peraturan internal perguruan tinggi di lingkungan masing-masing perguruan tinggi sehingga peraturan internal perguruan tinggi dapat harmonis dan sesuai dengan asas pembentukan peraturan perundang-undangan yang baik.”\r\n\r\nKegiatan secara resmi dibuka oleh Staf Ahli Bidang Regulasi Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi (SAM Regulasi), Nur Syarifah, S.H., LL.M. Dalam arahannya, beliau menyampaikan bahwa “Kegiatan ini merupakan kesempatan yang baik untuk seluruh peserta untuk dapat meningkatkan pengetahuan dan pemahaman mengenai pembentukan peraturan perundang-undangan yang nantinya akan terkait dengan penyusunan peraturan atau kebijakan serta perjanjian kerja sama dan nota kesepahaman di lingkungan perguruan tinggi Bapak dan Ibu berdasarkan materi yang akan disampaikan oleh para nara sumber”.\r\n\r\nAgenda selanjutnya merupakan paparan dari pemateri sesi pertama, Prof. Dr. Wicipto Setiadi, S.H., M.H. dari UPN Veteran Jakarta yang menyampaikan materi Teknik Penyusunan Peraturan Perundang-Undangan. “Teknik penyusunan peraturan pemimpin perguruan tinggi sesuai dengan teknik penyusunan peraturan perundang-undangan yang diatur dalam Undang-Undang Nomor 12 Tahun 2011 tentang Pembentukan Peraturan Perundang-Undangan sebagaimana telah beberapa kali diubah, terakhir dengan Undang-Undang Nomor 13 Tahun 2022 tentang Perubahan Kedua atas Undang-Undang Nomor 12 Tahun 2011 tentang Pembentukan Peraturan Perundang-Undangan terutama terletak pada Lampiran II,” tutur Wicipto.\r\n\r\nPemateri sesi kedua, Dr. Radian Salman, S.H., LL.M. dari Universitas Airlangga menyampaikan materi Penyusunan Peraturan Perguruan Tinggi Negeri. “Adanya kebutuhan pengaturan internal untuk mendukung proses penyelenggaran pendidikan di lingkungan masing-masing perguruan tinggi, hal tersebut harus mengacu pada Statuta dan Organisasi dan Tata Kerja pada masing-masing perguruan tinggi”, ujar Radian.\r\n\r\nSelanjutnya, pemateri sesi ketiga, Dr. Heribertus Jaka Triyana, S.H., LL.M., M.A. dari Universitas Gadjah Mada menyampaikan materi Tata Cara Penyusunan Perjanjian Kerja Sama (MoU) Perguruan Tinggi Negeri. “Membuat MoU itu mudah, tapi yang sulit adalah pelaksanaannya, sehingga perlu dibuat pemetaan mengenai kebutuhan, penanggung jawab, dan hasil yang diinginkan”, pungkas Jaka.\r\n\r\nTerakhir, pada sesi keempat diisi dengan diskusi dan inventarisasi permasalahan regulasi internal perguruan tinggi negeri oleh SAM Regulasi, Nur Syarifah, S.H., LL.M. dan Kepala Biro Hukum, Ineke Indraswati, S.H., M.H.\r\n\r\nSalah satu peserta yang antusias dalam acara ini yakni Bapak Andi dari Universitas Brawijaya menyampaikan permasalahan dalam penyusunan peraturan rektor mengenai organisasi dan tata kerja unsur yang berada di bawah rektor apabila terdapat penambahan organ yang ada dalam Lampiran. Menanggapi pertanyaan tersebut, Kepala Biro Hukum, Ineke Indraswati, S.H., M.H. menyampaikan bahwa perubahan tersebut dapat ditambahkan dalam Lampiran baru. Lebih lanjut, SAM Regulasi, Nur Syarifah, S.H., LL.M. menyampaikan bahwa apabila dimungkinkan dapat disisipkan perubahan tersebut diantara Lampiran yang ada atau dapat mengubah Lampiran yang sudah ada.\r\n\r\n', 'berita-17.jpg', 120, '', '2023-11-04 09:13:35', '2023-11-05 09:13:40'),
(3, 'Peningkatan Pemahaman Advokasi Hukum dan Inventarisasi Permasalahan Hukum pada Perguruan Tinggi Negeri (PTN) di Lingkungan Kemendikbudristek', 'Regulasi', '2023-09-16', 'Denpasar - Dalam rangka meningkatkan pemahaman dalam advokasi hukum dan mengetahui permasalahan hukum yang ada di lingkungan Perguruan Tinggi Negeri (PTN), maka Biro Hukum menyelenggarakan kegiatan Peningkatan Pemahaman Advokasi Hukum dan Inventarisasi Permasalahan Hukum pada Perguruan Tinggi Negeri di Lingkungan Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi.\r\n\r\nKegiatan yang dilaksanakan pada tanggal 14 September 2023 dilaksanakan di Denpasar, Bali dan dihadiri oleh 141 peserta dari Perguruan Tinggi Negeri (PTN) di lingkungan Kemendikbudristek dan turut mengundang narasumber sebagai berikut:\r\n1. Dr. H. Yodi Martono Wahyunadi, S.H., M.H. (Hakim Agung Kamar Tata Usaha Negara, Mahkamah Agung) dengan materi: Implikasi Keputusan Tata Usaha Negara dalam konteks Pejabat Administrasi Negara di Perguruan Tinggi Negeri;\r\n2. Teguh Utama Wibawa (Kepala Seksi Advokasi, Direktorat Hukum dan Humas, DJKN Kementerian Keuangan) dengan materi: Penanganan Permasalahan Hukum dalam rangka Pengamanan BMN di lingkungan Kemendikbudristek;\r\n3. Arif Budiman Anwar (Plt. Direktur Penanganan Permasalahan LKPP) dengan materi: Penyimpangan dalam Pengadaan Barang/Jasa Pemerintah; dan\r\n4. Dr. R. Narendra Jatna, S.H., LL.M. (Kepala Kejaksaan tinggi Bali) dengan materi: Pencegahan Tindak Pidana oleh PNS/ASN Dalam Pelaksanaan Jabatan.\r\n\r\n\"Tujuan dari diadakannya kegiatan ini adalah untuk menambah wawasan tentang penyusunan kontrak dan penyelesaian permasalahan hukum dalam pengadaan barang dan jasa pada satuan organisasi masing-masing,\" ujar Kepala Biro Hukum, Ineke Indraswati.\r\n\r\nKegiatan ini terselenggara dengan sukses, hal ini dapat dilihat dari interaksi antara peserta kegiatan dengan narasumber karena materi yang dibawakan berhubungan dengan pekerjaan sehari-hari. Menurut peserta, kegiatan seperti ini sangat diharapkan karena dapat memberikan pemahaman dan wawasan sewrta bermanfaat bagi para pemangku kebijakan di Perguruan Tinggi.\r\n\r\n', 'berita-16.jpg', 120, '', '2023-11-01 09:13:46', '2023-11-01 09:13:54'),
(4, 'Kemendikbudristek terbitkan Permendikbudristek tentang Penjaminan Mutu Pendidikan Tinggi\r\n', 'Regulasi', '2023-08-31', 'Penjaminan Mutu Pendidikan Tinggi merupakan kegiatan sistemik untuk meningkatkan mutu Pendidikan Tinggi secara berencana dan berkelanjutan. Penjaminan mutu pada pendidikan tinggi dilakukan melalui penetapan, pelaksanaan, evaluasi, pengendalian, dan peningkatan Standar Pendidikan Tinggi (SPT).\r\n\r\nSistem Penjaminan Mutu Pendidikan Tinggi (SPM Dikti) adalah rangkaian unsur dan proses terkait mutu pendidikan tinggi yang saling berkaitan dan tersusun secara teratur dalam menjamin dan meningkatkan mutu pendidikan tinggi secara berencana dan berkelanjutan.\r\n\r\nKementerian Pendidikan, Kebudayaan, Riset, dan Teknologi Republik Indonesia menerbitkan Permendikbudristek Nomor 53 Tahun 2023 Tentang Penjaminan Mutu Pendidikan Tinggi.\r\n\r\n', 'berita-5.jpg', 120, '', '2023-11-02 09:13:58', '2023-11-02 09:14:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita_terkait`
--

CREATE TABLE `tbl_berita_terkait` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_id` int(11) NOT NULL,
  `id_berita` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_berita_terkait`
--

INSERT INTO `tbl_berita_terkait` (`id`, `group_id`, `id_berita`) VALUES
(1, 1, 3),
(2, 1, 1),
(3, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` text NOT NULL,
  `exerpt` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`id`, `gambar`, `judul`, `exerpt`, `created_at`, `updated_at`) VALUES
(1, 'sepinggan.jpg', 'Pembinaan Kelompok Keluarga Sadar Hukum Tahun 2023 (Lamaru)', 'Pembinaan Kelompok Keluarga Sadar Hukum Tahun 2023 (Lamaru)', NULL, NULL),
(2, 'sepinggan.jpg', 'Pembinaan Kelompok Keluarga Sadar Hukum Tahun 2023 (Sepinggan)', 'Pembinaan Kelompok Keluarga Sadar Hukum Tahun 2023 (Sepinggan)', NULL, NULL),
(3, 'kariangau.jpg', 'Pembinaan Kelompok Keluarga Sadar Hukum Tahun 2023 (Kariangau)', 'Pembinaan Kelompok Keluarga Sadar Hukum Tahun 2023 (Kariangau)', NULL, NULL),
(4, 'gsi.jpg', 'Pembinaan Kelompok Keluarga Sadar Hukum Tahun 2023 (Gunung Sari Ilir)', 'Pembinaan Kelompok Keluarga Sadar Hukum Tahun 2023 (Gunung Sari Ilir)', NULL, NULL),
(5, 'karjo.jpg', 'Pembinaan Kelompok Keluarga Sadar Hukum Tahun 2023 (Karang Joang)', 'Pembinaan Kelompok Keluarga Sadar Hukum Tahun 2023 (Karang Joang)', NULL, NULL),
(6, 'telagasari.jpg', 'Pembinaan Kelompok Keluarga Sadar Hukum Tahun 2023 (Telaga Sari)', 'Pembinaan Kelompok Keluarga Sadar Hukum Tahun 2023 (Telaga Sari)', NULL, NULL),
(7, 'img20230223092355.jpg', 'Pembinaan Kelompok Keluarga Sadar Hukum Tahun 2023 (Margo Mulyo)', 'Pembinaan Kelompok Keluarga Sadar Hukum Tahun 2023 (Margo Mulyo)', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `unduh` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`id`, `judul`, `tema`, `unduh`, `created_at`, `updated_at`) VALUES
(1, 'Ikhtisar Data Pendidikan Tahun 2022/2023', 'Pendidikan', '', '2023-11-05 10:06:06', '2023-11-05 10:06:06'),
(2, 'Statistik Kebudayaan Tahun 2023', 'Kebudayaan', '', '2023-11-05 10:06:06', '2023-11-05 10:06:06'),
(3, 'APK/APM PAUD, SD, SMP, dan SM Tahun 2022/2023', 'Pendidikan', '', '2023-11-05 10:06:06', '2023-11-05 10:06:06'),
(4, 'Statistik Kebahasaan dan Kesastraan Tahun 2023', 'Bahasa', '', '2023-11-05 10:06:06', '2023-11-05 10:06:06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peraturan`
--

CREATE TABLE `tbl_peraturan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipe_dokumen` varchar(255) NOT NULL,
  `judul_peraturan` varchar(255) NOT NULL,
  `tajuk_entri_pertama` varchar(255) NOT NULL,
  `nomor_id` bigint(20) UNSIGNED NOT NULL,
  `tahun_id` bigint(20) UNSIGNED NOT NULL,
  `jenis_id` bigint(20) UNSIGNED NOT NULL,
  `tmpt_penetapan` varchar(255) NOT NULL,
  `tgl_penetapan` date NOT NULL,
  `tgl_pengundangan` date NOT NULL,
  `sumber` varchar(255) NOT NULL,
  `subjek_id` bigint(20) UNSIGNED NOT NULL,
  `status_id` bigint(20) UNSIGNED NOT NULL,
  `detail_status` varchar(255) NOT NULL,
  `bahasa` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `bidang_hukum` varchar(255) NOT NULL,
  `view` int(11) NOT NULL,
  `download` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_peraturan`
--

INSERT INTO `tbl_peraturan` (`id`, `tipe_dokumen`, `judul_peraturan`, `tajuk_entri_pertama`, `nomor_id`, `tahun_id`, `jenis_id`, `tmpt_penetapan`, `tgl_penetapan`, `tgl_pengundangan`, `sumber`, `subjek_id`, `status_id`, `detail_status`, `bahasa`, `lokasi`, `bidang_hukum`, `view`, `download`, `created_at`, `updated_at`) VALUES
(1, 'Peraturan Perundang-undangan', 'Pedoman Pelaksanaan Peraturan Menteri Pendidikan dan Kebudayaan Nomor 1 Tahun 2021 tentang Penerimaan Peserta Didik Baru pada Taman Kanak-Kanak, Sekolah Dasar, Sekolah Menengah Pertama, Sekolah Menengah Atas, dan Sekolah Menengah Kejuruan', 'Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi', 1, 25, 13, 'DKI Jakarta', '2021-10-30', '0000-00-00', '', 8, 1, 'Baru', 'Indonesia', 'Biro Hukum. Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi.', '', 213, 0, NULL, NULL),
(2, 'Peraturan Perundang-undangan', 'Perubahan atas Peraturan Menteri Pendidikan, Kebudayaan, Riset, dan Teknologi Nomor 35 Tahun 2021 tentang Organisasi dan Tata Kerja Lembaga Layanan Pendidikan Tinggi', 'Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi', 2, 25, 6, 'DKI Jakarta', '2019-10-13', '2023-10-17', 'Berita Negara', 6, 1, 'Mengubah Peraturan Menteri Nomor 35 Tahun 2021', 'Indonesia', 'Biro Hukum. Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi.', 'Himpunan Peraturan', 231, 412, NULL, NULL),
(3, 'Peraturan Perundang-undangan', 'Organisasi dan Tata Kerja Universitas Negeri Gorontalo', 'Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi', 3, 25, 6, 'Jakarta', '2023-09-26', '2023-09-29', 'Berita Negara', 6, 1, 'Mencabut Peraturan Lainnya Nomor 11 Tahun 2015', 'Indonesia', 'Biro Hukum. Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi.', 'Himpunan Peraturan', 4, 0, NULL, NULL),
(4, 'Peraturan Perundang-undangan', 'Surat Edaran Menteri Nomor 5 Tahun 2023 tentang Pembayaran Tunjangan Kinerja Pegawai di Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi', 'Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi', 4, 25, 9, 'DKI Jakarta', '2023-09-25', '0000-00-00', '', 1, 1, 'Mencabut Nomor\r\n', 'Indonesia', 'Biro Hukum. Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi.', 'Himpunan Peraturan', 124, 0, NULL, NULL),
(5, 'Peraturan Perundang-undangan', 'Peraturan Menteri Pendidikan, Kebudayaan, Riset, dan Teknologi Nomor 55 Tahun 2023 tentang Organisasi dan Tata Kerja Universitas Bangka Belitung', 'Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi', 5, 25, 6, 'Jakarta', '2023-09-20', '2023-09-21', 'Berita Negeri', 6, 1, 'Mencabut Peraturan Menteri Nomor 50 Tahun 2016', 'Indonesia', 'Biro Hukum. Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi.', 'Himpunan Peraturan', 65, 0, NULL, NULL),
(6, 'Peraturan Perundang-undangan', 'Peraturan Menteri Pendidikan, Kebudayaan, Riset, dan Teknologi Nomor 54 Tahun 2023 tentang Organisasi dan Tata Kerja Universitas Mataram', 'Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi', 6, 25, 6, 'Jakarta', '2023-09-08', '2023-09-18', 'Berita Negara', 6, 1, 'Mencabut Peraturan Menteri Nomor 116 Tahun 2014', 'Indonesia', 'Biro Hukum. Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi.', 'Himpunan Peraturan', 87, 0, NULL, NULL),
(7, 'Peraturan Perundang-undangan', 'Keputusan Menteri Pendidikan, Kebudayaan, Riset, dan Teknologi Nomor 271/O/2023 tentang Kelas Jabatan Badan Pengembangan dan Pembinaan Bahasa Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi', 'Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi', 7, 25, 7, 'Jakarta', '2022-08-23', '0000-00-00', '', 1, 1, 'Mencabut Keputusan Menteri Nomor 23/O/', 'Indonesia', 'Biro Hukum. Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi.', 'Himpunan Peraturan', 231, 0, NULL, NULL),
(8, 'Peraturan Perundang-undangan', 'Penerima Dana Bantuan Operasional Sekolah Kinerja bagi Sekolah yang Melaksanakan Program Sekolah Penggerak dan Sekolah yang Memiliki Prestasi Tahun Anggaran 2023', 'Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi', 8, 25, 7, 'DKI Jakarta', '2020-08-21', '0000-00-00', '', 3, 1, 'Baru', 'Indonesia', 'Biro Hukum. Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi.', '', 439, 0, NULL, NULL),
(9, 'Peraturan Perundang-undangan', 'Penerima Dana Bantuan Operasional Sekolah Kinerja bagi Sekolah yang Memiliki Kemajuan Terbaik Tahun Anggaran 2023', 'Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi', 9, 25, 7, 'DKI Jakarta', '2023-08-21', '0000-00-00', '', 3, 1, 'Baru', 'Indonesia', 'Biro Hukum. Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi.', '', 1343, 0, NULL, NULL),
(10, 'Peraturan Perundang-undangan', 'Penerima Dana Bantuan Operasional Penyelenggaraan Pendidikan Kesetaraan Kinerja Tahun Anggaran 2023', 'Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi', 10, 25, 7, 'DKI Jakarta', '2023-08-21', '0000-00-00', '', 14, 1, 'Baru', 'Indonesia', 'Biro Hukum. Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi.', '', 2873, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ttp_jdih`
--

CREATE TABLE `ttp_jdih` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `jabatan_dlm_tim` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ttp_jdih`
--

INSERT INTO `ttp_jdih` (`id`, `nama`, `jabatan`, `jabatan_dlm_tim`) VALUES
(1, 'Elyzabeth E.R.L Toruan,S.H.,M.H', 'Kepala Bagian Hukum Sekretariat Daerah Kota Balikpapan', 'Ketua TIM JDIH'),
(2, 'Dodi Hartanto, S.H', 'Penyuluh Hukum', 'Sekretaris TIM JDIH'),
(3, 'Didik Budianto, S.Kom', 'Pranata Komputer Ahli Muda', 'Anggota TIM JDIH'),
(4, 'Annisa Vitri Viramisyah, A.Md', 'Pranata Humas Ahli Muda', 'Anggota TIM JDIH'),
(5, 'Esty Anggraeni, S.H.,M.H', 'Pengelola Informasi Produk Hukum', 'Anggota TIM JDIH'),
(6, 'Adi Prasetyo Nugroho, S.Kom', 'Pranata Komputer Pertama', 'Anggota TIM JDIH'),
(7, 'Indra Yoga Permana, A.Md', 'Pranata Komputer Pelaksana', 'Anggota TIM JDIH'),
(8, 'Fachri Arpani, A.Md', 'Tenaga Bantuan pada Bagian Hukum Setda Kota Balikpapan', 'Anggota TIM JDIH'),
(9, 'A. Wirfan Indra Jaya, S.H	', 'Tenaga Bantuan pada Bagian Humpro Setda Kota Balikpapan', 'Anggota TIM JDIH');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL DEFAULT 'none',
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `profile` text DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `role` enum('admin','user','moderator') NOT NULL DEFAULT 'user',
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `profile`, `no_hp`, `address`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'zharif', 'none', 'zharifazizzulkarnain@gmail.com', NULL, '$2y$12$IoGorkaidnh3K0/A3X8.KOkfwnCCrt6WPXD65HKopoatD7Ilk8ro.', NULL, NULL, NULL, 'user', 'active', '0dHtEsQ7t1xkapTSD6swa9z8ZpPsjcu6wz1G2VgglSqFJOWGPyRGr1EOqVew', '2023-11-26 01:15:10', '2023-11-26 01:15:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bpp_dokumen`
--
ALTER TABLE `bpp_dokumen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bpp_produk_hukum`
--
ALTER TABLE `bpp_produk_hukum`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bpp_produk_hukum_id_jenis_peraturan_foreign` (`id_jenis_peraturan`),
  ADD KEY `bpp_produk_hukum_id_tahun_peraturan_foreign` (`id_tahun_peraturan`),
  ADD KEY `bpp_produk_hukum_id_status_peraturan_foreign` (`id_status_peraturan`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jenis_peraturan`
--
ALTER TABLE `jenis_peraturan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nomor_peraturan`
--
ALTER TABLE `nomor_peraturan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nomor` (`nomor`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `status_branch`
--
ALTER TABLE `status_branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjek_peraturan`
--
ALTER TABLE `subjek_peraturan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey_pengunjung`
--
ALTER TABLE `survey_pengunjung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tahun_branch`
--
ALTER TABLE `tahun_branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_berita_terkait`
--
ALTER TABLE `tbl_berita_terkait`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_berita_terkait_id_berita_foreign` (`id_berita`);

--
-- Indexes for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_peraturan`
--
ALTER TABLE `tbl_peraturan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_peraturan_nomor_id_foreign` (`nomor_id`),
  ADD KEY `tbl_peraturan_tahun_id_foreign` (`tahun_id`),
  ADD KEY `tbl_peraturan_jenis_id_foreign` (`jenis_id`),
  ADD KEY `tbl_peraturan_subjek_id_foreign` (`subjek_id`),
  ADD KEY `tbl_peraturan_status_id_foreign` (`status_id`);

--
-- Indexes for table `ttp_jdih`
--
ALTER TABLE `ttp_jdih`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bpp_dokumen`
--
ALTER TABLE `bpp_dokumen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `bpp_produk_hukum`
--
ALTER TABLE `bpp_produk_hukum`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_peraturan`
--
ALTER TABLE `jenis_peraturan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `nomor_peraturan`
--
ALTER TABLE `nomor_peraturan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status_branch`
--
ALTER TABLE `status_branch`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subjek_peraturan`
--
ALTER TABLE `subjek_peraturan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `survey_pengunjung`
--
ALTER TABLE `survey_pengunjung`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `tahun_branch`
--
ALTER TABLE `tahun_branch`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_berita_terkait`
--
ALTER TABLE `tbl_berita_terkait`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_peraturan`
--
ALTER TABLE `tbl_peraturan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ttp_jdih`
--
ALTER TABLE `ttp_jdih`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bpp_produk_hukum`
--
ALTER TABLE `bpp_produk_hukum`
  ADD CONSTRAINT `bpp_produk_hukum_id_jenis_peraturan_foreign` FOREIGN KEY (`id_jenis_peraturan`) REFERENCES `jenis_peraturan` (`id`),
  ADD CONSTRAINT `bpp_produk_hukum_id_status_peraturan_foreign` FOREIGN KEY (`id_status_peraturan`) REFERENCES `status_branch` (`id`),
  ADD CONSTRAINT `bpp_produk_hukum_id_tahun_peraturan_foreign` FOREIGN KEY (`id_tahun_peraturan`) REFERENCES `tahun_branch` (`id`);

--
-- Constraints for table `tbl_berita_terkait`
--
ALTER TABLE `tbl_berita_terkait`
  ADD CONSTRAINT `tbl_berita_terkait_id_berita_foreign` FOREIGN KEY (`id_berita`) REFERENCES `tbl_berita` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_peraturan`
--
ALTER TABLE `tbl_peraturan`
  ADD CONSTRAINT `tbl_peraturan_jenis_id_foreign` FOREIGN KEY (`jenis_id`) REFERENCES `jenis_peraturan` (`id`),
  ADD CONSTRAINT `tbl_peraturan_nomor_id_foreign` FOREIGN KEY (`nomor_id`) REFERENCES `nomor_peraturan` (`id`),
  ADD CONSTRAINT `tbl_peraturan_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `status_branch` (`id`),
  ADD CONSTRAINT `tbl_peraturan_subjek_id_foreign` FOREIGN KEY (`subjek_id`) REFERENCES `subjek_peraturan` (`id`),
  ADD CONSTRAINT `tbl_peraturan_tahun_id_foreign` FOREIGN KEY (`tahun_id`) REFERENCES `tahun_branch` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
