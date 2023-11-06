-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Nov 2023 pada 05.32
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisata semarang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota atlas`
--

CREATE TABLE `kota atlas` (
  `Id_Wisata` int(10) NOT NULL,
  `Nama_Wisata` varchar(100) NOT NULL,
  `Alamat_Wisata` varchar(200) NOT NULL,
  `Deskripsi_Wisata` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kota atlas`
--

INSERT INTO `kota atlas` (`Id_Wisata`, `Nama_Wisata`, `Alamat_Wisata`, `Deskripsi_Wisata`) VALUES
(1, 'Kota Lama', 'Tanjung mas, kec. Semarang Utara', 'Kota Lama merupakan sebuah kawasan cagar budaya di mana terdapat gedung-gedung tua dan bersejarah peninggalan Hindia Belanda yang berusia ratusan tahun. Pada masa itu, kawasan ini merupakan pusat pemerintahan. Arsitektur gedung-gedungnya bergaya khas Eropa dengan pintu utama dan jendela berukuran besar, elemen dekoratif, dan langit-langit yang tinggi.  Beberapa spot yang ramai dan menarik untuk dikunjungi, antara lain Gereja Blenduk, Taman Srigunting, Gedung Asuransi Jiwasraya, Gedung Bank Mandiri Mpu Tantular, Rumah Akar samping Gedung Jiwasraya, Gedung Oudetrap, Semarang Art Gallery, De Spiegel, Marba, dan masih banyak lagi lainnya.'),
(2, 'Lawang Sewu', 'Jl. Pemuda No.160, Sekayu', 'Lawang Sewu udah menjadi simbol dari Kota Semarang. Setiap orang yang datang ke Ibu Kota Jawa Tengah ini biasanya menyempatkan mampir ke wisata sejarah tersebut. Arsitektur bangunan yang unik ditambah dengan cerita masyarakat perihal misteri tempat ini, membuat banyak orang semakin penasaran. Di balik uniknya bangunan khas Belanda ini, ternyata ada sejarah yang menarik untuk digali.\r\n'),
(3, 'Masjid Agung Jawa Tengah', 'Jl. Gajah Raya', 'Masjid Agung Jawa Tengah adalah yang Lerbesar dan termegah serta merupakan ikon dan kebanggaan masyarakat provinsi tersebut. Masjid ini juga merupakan salah satu masjid terbesar di Indonesia. alah satu ciri khas masjid ini adalah enam buah payung hidrolik raksasa yang berada di teras masjid. Payung yang dapat membuka dan menutup secara otomatis ini mengadopsi model yang terdapat di Masjid Nabawi, Madinah, Arab Saudi. Dengan tinggi masing-masing 20 meter dan bentangan hingga 14 meter, payung ini berfungsi sebagai atap kala jumlah jamaah tengah meluap.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
