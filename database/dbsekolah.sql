-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Des 2023 pada 06.36
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `nama`, `nip`, `jabatan`, `foto`) VALUES
(21, 'Feri Fitriansyah, S.Pd', '197605051998031007', 'Kepala Sekolah', '656a8db4087b8.png'),
(22, 'Agus Saputra, S.Pdi', '-', 'Guru Agama', '656a90a915f61.png'),
(23, 'Lestari, S.Pd', '-', 'Guru Pendidikan Jasmani dan Olahraga', '656a90b238be7.png'),
(24, 'Fatimah Indah Yuni Astuti, S.Pdi', '-', 'Wali Kelas 6', '656a90bccd554.png'),
(25, 'Suci Annisa', '-', 'Wali Kelas 5', '656a90c52f6a7.png'),
(26, 'Ely Setiawati, S.Pdi', '-', 'Wali Kelas 4', '656a90d37fb51.png'),
(27, 'Elyani, S.Pdi', '-', 'Wali Kelas 3', '656a90dd64ba2.png'),
(28, 'Siti Anisa, S.Pd', '-', 'Wali Kelas 2', '656a90e5e5e16.png'),
(29, 'Saudah, S.Pdi', '-', 'Wali Kelas 1', '656a90ef55dde.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `judul`, `deskripsi`, `gambar`) VALUES
(4, 'Upacara Bendera', 'Kegiatan upacara merupakan suatu acara formal yang diadakan dengan tujuan tertentu, baik dalam lingkup pemerintahan, pendidikan, maupun keagamaan. Upacara sering kali dilaksanakan untuk memperingati atau merayakan suatu peristiwa penting, seperti peringatan hari kemerdekaan, upacara bendera di sekolah, atau upacara keagamaan dalam berbagai tradisi. Upacara memiliki aturan dan tata cara tertentu, termasuk penggunaan simbol-simbol dan serangkaian langkah formal yang dilakukan oleh peserta upacara.', '6567e9eb4d6f8.jpg'),
(5, 'Senam Pagi', 'Senam pagi adalah kegiatan olahraga ringan yang dilakukan pada pagi hari sebagai sarana untuk meningkatkan kesehatan dan kebugaran tubuh. Kegiatan ini umumnya melibatkan gerakan-gerakan sederhana seperti peregangan, gerakan kardio, dan latihan pernapasan. Senam pagi memiliki beberapa manfaat, antara lain meningkatkan aliran darah, mengoptimalkan fungsi jantung dan paru-paru, serta memberikan kekuatan dan kekendalan pada otot', '656e983dee59c.jpg'),
(8, 'Mengaji Pagi', 'Mengaji pagi merupakan kegiatan membaca dan mempelajari isi Al-Qur&#039;an yang dilakukan pada pagi hari. Kegiatan ini memiliki makna spiritual dan keagamaan yang dalam dalam Islam, dianggap sebagai suatu amalan yang bernilai tinggi. Pada umumnya, mengaji pagi melibatkan pembacaan ayat-ayat Al-Qur&#039;an dengan tujuan untuk memahami ajaran dan nilai-nilai yang terkandung di dalamnya. Aktivitas ini seringkali dilakukan secara perorangan atau dalam kelompok kecil di lingkungan rumah, masjid, atau lembaga pendidikan agama.\r\nMengaji pagi tidak hanya mencakup aspek membaca, tetapi juga memahami makna dan konteks ayat-ayat Al-Qur&#039;an. Kegiatan ini dapat menjadi momen introspeksi dan refleksi spiritual, di mana seorang individu dapat merenungkan ajaran agama Islam dan mengaitkannya dengan kehidupan sehari-hari. Mengaji pagi juga dianggap sebagai sarana untuk mendekatkan diri kepada Allah, meningkatkan keimanan, serta memperkuat hubungan spiritual antara seorang muslim dengan penciptanya.', '656e9f3f293c0.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'syauqy', '$2y$10$o86VvpCsFixSheXsN/wyOOr5yvc3mnkPMMCOhfnKc8MhxhGe9hvXC'),
(2, 'admin', '$2y$10$zN1zMu2sUpV/zkZ5fuSv0eSeLRzyO5UXXZEIazw04wDITA1X6Md2y');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
