-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 01 Oca 2019, 19:36:54
-- Sunucu sürümü: 5.6.13
-- PHP Sürümü: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `admintable`
--
CREATE DATABASE IF NOT EXISTS `admintable` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `admintable`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `postid` int(11) NOT NULL AUTO_INCREMENT,
  `postTitle` varchar(11) CHARACTER SET latin5 NOT NULL,
  `email` varchar(50) CHARACTER SET latin5 NOT NULL,
  `content` varchar(5000) CHARACTER SET latin5 NOT NULL,
  PRIMARY KEY (`postid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Tablo döküm verisi `comments`
--

INSERT INTO `comments` (`postid`, `postTitle`, `email`, `content`) VALUES
(0, 'lorem', 'loremipsum@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec augue felis, hendrerit non condimentum vitae, fringilla a ipsum. In aliquam, tellus vitae consequat viverra, lectus magna congue sem, in pellentesque risus lectus eget odio. Pellentesque non urna felis. Nulla convallis ut ipsum in venenatis. Vestibulum porttitor tincidunt lacus, eget sollicitudin turpis venenatis vel. Phasellus vel gravida leo, sed dignissim magna. Praesent lobortis lobortis mi at pellentesque. Aenean et molestie ligula. Etiam a tincidunt lectus. Aliquam odio elit, luctus convallis dignissim eu, viverra quis urna. Etiam dictum orci id euismod dignissim. Aliquam aliquet nibh a sapien pellentesque, sit amet dignissim odio maximus. Ut pharetra tortor quis posuere aliquet. Cras commodo justo non purus laoreet, non viverra libero maximus. Phasellus congue sem ac hendrerit iaculis.'),
(1, 'asdsadas', 'lorem@ipsum.com', 'Aenean lobortis eros id neque placerat vehicula. Integer et porta est. Aliquam ac orci a sapien rutrum pretium. Vestibulum commodo rhoncus nisl, id mattis risus maximus in. Donec dapibus eleifend augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam felis at nunc fringilla interdum. Cras venenatis fringilla sapien et gravida. Ut mollis leo quis viverra ultricies. Vivamus in sapien faucibus, posuere velit vitae, luctus tortor. Sed id vehicula justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam accumsan justo sed massa viverra tincidunt. Sed tempus magna non lacus commodo fringilla. Curabitur velit diam, euismod a purus sed, feugiat interdum risus.'),
(2, 'newlorem', 'lorrem@gmail.com', 'Proin rhoncus ultricies est ut sagittis. Fusce quis eleifend quam. Aenean eget purus imperdiet, ullamcorper velit efficitur, venenatis tellus. Fusce eget velit fringilla, feugiat enim vitae, facilisis ex. Praesent semper nulla a lorem accumsan accumsan. Praesent vel porta metus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur lobortis hendrerit libero, et efficitur risus tempus in. Nulla pharetra risus facilisis ante suscipit varius.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(1000) CHARACTER SET latin5 NOT NULL,
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`username`, `password`, `userid`) VALUES
('admin', 'admin', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
