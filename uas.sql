-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Mar 2019 pada 04.35
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `role_id`) VALUES
(1, 'yudhistira', '1234', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun`
--

CREATE TABLE `tahun` (
  `id` int(11) NOT NULL,
  `nama_tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tahun`
--

INSERT INTO `tahun` (`id`, `nama_tahun`) VALUES
(1, 1900),
(2, 1901),
(3, 1902),
(4, 1903),
(5, 1904),
(6, 1905),
(7, 1906),
(8, 1907),
(9, 1908),
(10, 1909),
(11, 1910),
(12, 1911),
(13, 1912),
(14, 1913),
(15, 1914),
(16, 1915),
(17, 1916),
(18, 1917),
(19, 1918),
(20, 1919),
(21, 1920),
(22, 1921),
(23, 1922),
(24, 1923),
(25, 1924),
(26, 1925),
(27, 1926),
(28, 1927),
(29, 1928),
(30, 1929),
(31, 1930),
(32, 1931),
(33, 1932),
(34, 1933),
(35, 1934),
(36, 1935),
(37, 1936),
(38, 1937),
(39, 1938),
(40, 1939),
(41, 1940),
(42, 1941),
(43, 1942),
(44, 1943),
(45, 1944),
(46, 1945),
(47, 1946),
(48, 1947),
(49, 1948),
(50, 1949),
(51, 1950),
(52, 1951),
(53, 1952),
(54, 1953),
(55, 1954),
(56, 1955),
(57, 1956),
(58, 1957),
(59, 1958),
(60, 1959),
(61, 1960),
(62, 1961),
(63, 1962),
(64, 1963),
(65, 1964),
(66, 1965),
(67, 1966),
(68, 1967),
(69, 1968),
(70, 1969),
(71, 1970),
(72, 1971),
(73, 1972),
(74, 1973),
(75, 1974),
(76, 1975),
(77, 1976),
(78, 1977),
(79, 1978),
(80, 1979),
(81, 1980),
(82, 1981),
(83, 1982),
(84, 1983),
(85, 1984),
(86, 1985),
(87, 1986),
(88, 1987),
(89, 1988),
(90, 1989),
(91, 1990),
(92, 1991),
(93, 1992),
(94, 1993),
(95, 1994),
(96, 1995),
(97, 1996),
(98, 1997),
(99, 1998),
(100, 1999),
(101, 2000),
(102, 2001),
(103, 2002),
(104, 2003),
(105, 2004),
(106, 2005),
(107, 2006),
(108, 2007),
(109, 2008),
(110, 2009),
(111, 2010),
(112, 2011),
(113, 2012),
(114, 2013),
(115, 2014),
(116, 2015),
(117, 2016),
(118, 2017),
(119, 2018),
(120, 2019);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tahun`
--
ALTER TABLE `tahun`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tahun`
--
ALTER TABLE `tahun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
