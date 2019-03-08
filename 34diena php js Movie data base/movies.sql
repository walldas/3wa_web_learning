-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 27, 2017 at 04:24 
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` year(4) NOT NULL,
  `length` int(3) NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `trailer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `year`, `length`, `img`, `trailer`, `description`) VALUES
(1, 'Batman', 2008, 120, 'http://vignette4.wikia.nocookie.net/batman-movie/images/0/00/The_Dark_Knight_Rises_Movie_Poster.jpg/revision/latest?cb=20140617194536', 'https://www.youtube.com/watch?v=EXeTwQWrcwY', 'Lorem ipsum bla bla bla bla bla bla bla bla bla bla'),
(2, 'Superman', 2013, 60, 'http://3.bp.blogspot.com/-BRvK3aoih-M/VeuIwG4xuLI/AAAAAAAAD_Q/C6UNjH2tTqs/s1600/Publicity-Photo-superman-the-movie-20409114-1009-1400.jpg', 'https://www.youtube.com/watch?v=-DaPBBOHfsA', 'Lorem ipsum bla bla bla bla bla bla bla bla bla bla'),
(5, 'Batman vs Superman', 2016, 111, 'http://i.imgur.com/4UzZRto.jpg', 'https://www.youtube.com/watch?v=bha24P9uw-E', 'Lorem ipsum bla bla bla bla bla bla bla bla bla bla'),
(6, 'Terminator', 1984, 240, 'https://images-na.ssl-images-amazon.com/images/M/MV5BZDM2YjYwYWMtMWZlNi00ZDQxLWExMDctMDAzNzQ0OTkzZjljXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SY1000_CR0,0,675,1000_AL_.jpg', 'https://www.youtube.com/watch?v=UdwkJRBX6eM', 'Lorem ipsum bla bla bla bla bla bla bla bla bla bla'),
(7, 'Z world war', 2014, 111, 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTg0NTgxMjIxOF5BMl5BanBnXkFtZTcwMDM0MDY1OQ@@._V1_.jpg', 'https://www.youtube.com/watch?v=Md6Dvxdr0AQ', 'Lorem ipsum bla bla bla bla bla bla bla bla bla bla'),
(8, 'The Note Boon', 2011, 61, 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTk3OTM5Njg5M15BMl5BanBnXkFtZTYwMzA0ODI3._V1_.jpg', 'https://www.youtube.com/watch?v=FC6biTjEyZw', 'Lorem ipsum bla bla bla bla bla bla bla bla bla bla'),
(9, 'UP2', 2012, 0, 'coo.jpg', 'https://www.youtube.com/watch?v=pkqzFUhGPJg', 'Lorem ipsum bla bla bla bla bla bla bla bla bla bla'),
(10, 'Dragon', 2009, 134, 'https://images-na.ssl-images-amazon.com/images/M/MV5BMjA5NDQyMjc2NF5BMl5BanBnXkFtZTcwMjg5ODcyMw@@._V1_SY1000_CR0,0,672,1000_AL_.jpg', 'https://www.youtube.com/watch?v=oKiYuIsPxYk', 'Lorem ipsum bla bla bla bla bla bla bla bla bla bla'),
(11, 'The Call', 2013, 145, 'https://images-na.ssl-images-amazon.com/images/M/MV5BMjExNDkzNjAwOV5BMl5BanBnXkFtZTcwMDMzMzQwOQ@@._V1_SY1000_CR0,0,674,1000_AL_.jpg', 'https://www.youtube.com/watch?v=N2I85cPlhk0', 'Lorem ipsum bla bla bla bla bla bla bla bla bla bla'),
(12, 'The Avangers', 2016, 141, 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTk2NTI1MTU4N15BMl5BanBnXkFtZTcwODg0OTY0Nw@@._V1_SY1000_CR0,0,675,1000_AL_.jpg', 'https://www.youtube.com/watch?v=eOrNdBpGMv8', 'Lorem ipsum bla bla bla bla bla bla bla bla bla bla');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
