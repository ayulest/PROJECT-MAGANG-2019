-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2019 at 10:53 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `kd_berita` int(5) NOT NULL,
  `judul_berita` text CHARACTER SET utf8,
  `isi_berita` text CHARACTER SET utf8,
  `tgl_berita` text CHARACTER SET utf8,
  `image` text CHARACTER SET utf8,
  `penulis_berita` text CHARACTER SET utf8
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`kd_berita`, `judul_berita`, `isi_berita`, `tgl_berita`, `image`, `penulis_berita`) VALUES
(13, 'Peningkatan Penyusunan Tata Naskah Kerjasama', 'www.dinkesjatengprov.go.idâ€“Dinas Kesehatan Provinsi Jawa Tengah mengadakan pertemuan tentang KERJASAMA, yang dimaksudkan agar SDM dapat menyusun konsep kerjasama secara benar sesuai tata aturan yang berlaku serta meningkatkan pengetahuan tentang penyusunan tata naskah kerjasama, MOU dan perjanjian kerjasama yang benar.\r\n\r\nPertemuan ini dilaksanakan pada 30-31 Juli 2019 di hotel Grasia Semarang.\r\n\r\n(humas dinkesprov jateng, 31/7)', '31 Juli 2019', 'https://dinkesjatengprov.go.id/v2018/storage/2019/08/Kerjasama-2019-620x330.jpg', 'dinkesjatengprov'),
(14, 'Penilaian Top 20 Terbaik KIPP UPT Balkesmas Magelang, dengan Inovasi â€œSOWANâ€', 'www.dinkes.jatengprov.go.idâ€“Selasa, 6 Agustus 2019, UPT Dinas Kesehatan Provinsi Jawa Tengah yaitu  Balkesmas Magelang masuk dalam Top 20 terbaik Kompetisi Informasi Pelayanan Publik (KIPP).  Dan siang ini dilaksanakan penilaian untuk menuju Top 10 terbaik KIPP.\r\n\r\nBalkesmas Magelang membuat inovasi bernama SOWAN (Supportiv, Observatif, Well being, Action Nursing).   SOWAN merupakan intervensi secara menyeluruh pada aspek biologis, psiko-sosial dan spriritual untuk membantu pasien mengurangi dampak pengobatan lama, memandirikan pasien menyelesaikan pengobatan dan tetap produktif.  Kelebihan inovasi ini adalah memodifikasi intervensi yang mengutamakan integritas layanan kuratif sekaligus preventif dan promotif, mempermudah prosedur layanan, sumber dana relatif kecil, melibatkan keluarga/masyarakat dan lintas sektor.\r\n\r\n(humas dinkesprov jateng, 7/8)', '7 Agustus 2019', 'https://dinkesjatengprov.go.id/v2018/storage/2019/08/Sowan2-1-620x330.jpg', 'dinkesjatengprov'),
(15, 'Launching Ruangan Laktasi Balkesmas Wilayah Klaten', 'www.dinkesjatengprov.go.idâ€“Jumat, 9 Agustus 2019.  Dalam rangka memperingati pekan ASI sedunia tahun 2019, salah satu UPT Dinas Kesehatan Provinsi Jawa Tengah, Balkesmas Wilayah Klaten berkomitmen untuk memberikan yang terbaik untuk masyarakat maupun pegawai perempuan khususnya para ibu menyusui.\r\n\r\nTepat pada tanggal, 9 Agustus 2019, ruang laktasi Balkesmas Wilayah Klaten telah resmi dibuka oleh Kepala Dinas Kesehatan Provinsi Jawa Tengah,  dr Yulianto Prabowo,M.Kes.\r\n\r\nPada acara launching tersebut, beliau menyampaikan apresiasi terhadap ruang laktasi yang disediakan oleh Balkesmas Wilayah Klaten dan semoga dapat bermanfaat untuk pegawai maupun pengunjung agar tetap bisa memberikan ASI kepada bayi nya baik secara langsung maupun ASI perah.\r\n\r\nSelain berfungsi sebagai ruang laktasi, ruang tersebut juga sebagai ruang baby care. Diruang ini nantinya dapat dilakukan konseling menyusui maupun konseling dalam merawat sang buah hati.\r\n\r\n(humas dinkesprov, 9/8)', '9 Agustus 2019', 'https://dinkesjatengprov.go.id/v2018/storage/2019/08/Laktasi-Balkesmas-Klaten-620x330.jpg', 'dinkesjatengprov'),
(16, 'Verifikasi ODF (Open Defecation Free) di Kabupaten Kudus', 'www.dinkes.jatengprov.go.idâ€“Hari ini Seksi Kesehatan Lingkungan & Kesehatan Kerja OR melaksanakan Verifikasi ODF (Open Defecation Free) di Kabupaten Kudus.\r\n\r\nTim penilaian ODF terdiri dari Dinas Kesehatan Provinsi dan lintas program (Promosi Kesehatan), PKK Provinsi, Dinas Lingkungan Hidup, Biro Kesra, Dinas Pendidikan, Dispermasdes, PU bina marga, HAKLI, dari teman â€“ teman kabupaten sekitar yaitu Kabupaten Temanggung, Demak, Kabupaten Tegal, Jepara, dan Pati.\r\n\r\nSebelum  verifikasi dimulai, tim disambut oleh Plt.Bupati Kudus Bapak H. M. HARTOPO, ST, MM, MH.\r\n\r\nVerifikasi ODF ini nantinya akan menentukan apakah Kabupaten Kudus nanti bisa mendapat predikat ODF atau belum.\r\n\r\n(humas dinkesprov 12/8)', '12 Agustus 2019', 'https://dinkesjatengprov.go.id/v2018/storage/2019/08/ODF-Kudus-620x330.jpg', 'dinkesjatengprov'),
(17, 'Orientasi Optimalisasi Germas dan Pencegahan Stunting', 'www.dinkes.jatengprov.go.idâ€“Ini adalah Orientasi Optimalisasi Germas dan Pencegahan Stunting Bagi Dharma Wanita Persatuan Provinsi Jawa Tengah, dimana para pengurus Dharma Wanita se-Jawa Tengah berkumpul untuk membahas isu Germas dan Stunting pada 20/8.\r\n\r\nAcara dibuka oleh Bapak Sekda Provinsi Jawa Tengah, Dr. Ir. Sri Puryono Karto Soedarmo, MP dan dilanjutkan penandatanganan komitmen oleh Bapak Sekda.  Penyampaian materi tentang Peranan Dharma Wanita Persatuan dalam Program Penurunan Stunting disampaikan oleh Ibu Wien Ritola Tasmaya, Ketua Umum Dharmawanita Persatuan.\r\n\r\nSesi talkshow dengan 2 narasumber yaitu Dr. Rita Ramayulus, DCN, M.Kes yang menyampaikan tentang Pola Pengasuhan Gizi untuk Pencegahan dan Penanganan Stunting, dan narasumber dari Dinas Ketahanan Pangan, Ir. Ignatius Hariyanta Nugraha, M.Si dengan judul Kawasan Rumah Pangan Lestari. Sesi talkshow ini dimoderatori oleh Bapak Muji Purnomo, SE, M.Si.\r\n\r\nSesi selanjutnya diisi oleh Kepala Dinas Kesehatan Provinsi Jawa Tengah, dr. Yulianto Prabowo, M.Kes yang menyampaikan tentang Kebijakan Daerah dalam Optimalisasi Gernas dan Pencegahan Stunting dan dimoderatori oleh Kasie Promkes dan Pemberdayaan Masyarakat Dinas Kesehatan Provinsi Jawa Tengah, Rita Utrajani, SKM, M.Kes.\r\n\r\nSemoga melalui acara ini, dapat meningkatkan peran Dharma Wanita dalam Optimalisasi Germas dan Program Penurunan Stunting, karena wanita berperan penting dalam tumbuh kembang anak-anak bangsa. (humas dinkesprov jateng, 20/8)\r\n\r\n', '20 Agustus 2019', 'https://dinkesjatengprov.go.id/v2018/storage/2019/08/Stunting-DWP-620x330.jpg', 'dinkesjatengprov'),
(18, 'Pembukaan Pesta Rakyat Jawa Tengah', 'www.dinkesjatengprov.go.idâ€“Pembukaan Pesta Rakyat Jawa Tengah berlangsung, dimulai  hari ini 23 Agustus 2019 dibuka langsung oleh Gubernur Jateng, Bapak Ganjar Pranowo.  Serangkaian acara yaitu sambutan dari Bupati Kab Wonogiri, Sekda Jateng dan Gubernur Jateng dilanjutkan dengan penyerahan medali untuk para pemenang Asean School Games 2019, bantuan RTLH, bantuan lomba berprestasi, dan bantuan kursi roda bagi teman2 difabel.\r\n\r\nSelain itu penampilan tari Kethek Ogleng dan pemukulan kentongan oleh siswa â€“ siswa pramuka sangat memukau. Pak Ganjar Pranowo dan Ibu Atiqoh berkesemapatan untuk berfoto bareng bersama pemain nya. \r\n\r\nBuat yang belum sempat datang untuk menyaksikan, acara masih akan berlangsung sampai dengan Hari Minggu besok 25 Agustus 2019. Kenapa harus datang langsung kesini? Karena masih banyak kegiatan menarik lainnya. Pesan Gubernur adalah untuk selalu jaga kebersihan, terutama dari sampah plastik.  Tidak perlu membawa botol plastik karena disediakan air minum dengan gelas yang eco friendly untuk umum.  (humas dinkesprov jateng. 23/8)', '23 Agustus 2019', 'https://dinkesjatengprov.go.id/v2018/storage/2019/08/Pesta-Rakyat-620x330.jpg', 'dinkesjatengprov');

-- --------------------------------------------------------

--
-- Table structure for table `infografis`
--

CREATE TABLE `infografis` (
  `kd_infografis` int(11) NOT NULL,
  `judul` text CHARACTER SET utf8,
  `gambar` text CHARACTER SET utf8
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infografis`
--

INSERT INTO `infografis` (`kd_infografis`, `judul`, `gambar`) VALUES
(1, 'Infografis kesehatan dari Kasus Kematian Ibu Hamil Triwulan 1 Tahun 2019', 'https://dinkesjatengprov.go.id/v2018/storage/2019/08/Kasus-kematian-ibu-hamil-TW-1-2019.jpeg'),
(2, 'Infografis kesehatan dari Kasus Kematian Bayi Triwulan 1 Tahun 2019', 'https://dinkesjatengprov.go.id/v2018/storage/2019/07/Kasus-Kematian_Bayi-TW-1-2019.jpg'),
(3, 'Infografis kesehatan dari Kasus Kematian Balita Triwulan 1 Tahun 2019', 'https://dinkesjatengprov.go.id/v2018/storage/2019/08/Kematian-Balita-Jateng-Tw-1-2019.jpg'),
(4, 'Infografis kesehatan dari Kasus Balita Gizi Buruk Triwulan 1 Tahun 2019', 'https://dinkesjatengprov.go.id/v2018/storage/2019/08/KASUS-BALITA-GIZI-BURUK.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `kd_slider` int(5) NOT NULL,
  `slide_img` text CHARACTER SET utf8
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`kd_slider`, `slide_img`) VALUES
(2, 'https://dinkesjatengprov.go.id/v2018/storage/2019/08/Dirgahayu-RI-74.jpg'),
(4, 'https://dinkesjatengprov.go.id/v2018/storage/2019/08/bahagia.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `table_login`
--

CREATE TABLE `table_login` (
  `kd_admin` int(5) NOT NULL,
  `nama` text,
  `password` text,
  `status` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_login`
--

INSERT INTO `table_login` (`kd_admin`, `nama`, `password`, `status`) VALUES
(1, 'admin', '123', NULL),
(2, 'ayu', '245', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`kd_berita`);

--
-- Indexes for table `infografis`
--
ALTER TABLE `infografis`
  ADD PRIMARY KEY (`kd_infografis`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`kd_slider`);

--
-- Indexes for table `table_login`
--
ALTER TABLE `table_login`
  ADD PRIMARY KEY (`kd_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `kd_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `infografis`
--
ALTER TABLE `infografis`
  MODIFY `kd_infografis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `kd_slider` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `table_login`
--
ALTER TABLE `table_login`
  MODIFY `kd_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
