-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2019 at 11:53 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id_data` int(11) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `nilai` int(11) NOT NULL,
  `minat_jurusan` varchar(100) NOT NULL,
  `kode_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id_data`, `nama_siswa`, `nilai`, `minat_jurusan`, `kode_jurusan`) VALUES
(11, 'Raden Muhammad Daud Yusuf Pradjasoejatma', 85, 'IPA', 1),
(12, 'Hardi Kusuma', 82, 'IPA', 1),
(13, 'Nisrina Aisyah Syafiah', 80, 'IPA', 1),
(14, 'Nurul Aulia Chairunnisa', 76, 'IPA', 1),
(15, 'Erika', 73, 'IPA', 1),
(16, 'Muhammad Alfan Ibnu Munawar', 73, 'IPA', 1),
(17, 'Shinta Aryani Saputri', 72, 'IPA', 1),
(18, 'Bastian Nasution', 71, 'IPA', 1),
(19, 'Karisma Nursyifa', 70, 'IPA', 1),
(20, 'Aisyah', 69, 'IPA', 1),
(21, 'Muhammad Abdul Azis', 69, 'IPA', 1),
(22, 'Rosana Setyaningrum', 68, 'IPA', 1),
(23, 'Oktaviani Siti Barokah', 68, 'IPA', 1),
(24, 'Sity Nadira Huzaimah', 68, 'IPA', 1),
(25, 'Suci Rahma Yanti', 67, 'IPA', 1),
(26, 'Muhammad Refi Ramadhani', 67, 'IPA', 1),
(27, 'Sabrina Tijani Sari', 67, 'IPA', 1),
(28, 'Muhammad Rizky Aulia', 67, 'IPA', 1),
(29, 'Sarah Maulani Azzahra', 67, 'IPA', 1),
(30, 'Isma Lestari', 66, 'IPA', 1),
(31, 'Dimas Cahyaning Tyas', 65, 'IPA', 1),
(32, 'Gilang Putra Ramanda', 65, 'IPA', 1),
(33, 'Nazwa Maola', 65, 'IPA', 1),
(34, 'Siti Amelinda Suryadi', 65, 'IPA', 1),
(35, 'Siti Nazwa Hamidah', 65, 'IPA', 1),
(36, 'Thia Purnama Sari', 64, 'IPA', 1),
(37, 'Aulia Hanun', 64, 'IPA', 1),
(38, 'Rhaniah Apriciana', 64, 'IPA', 1),
(39, 'Ainni Sahhan Putri Rosadi', 64, 'IPA', 1),
(40, 'Satrio Bayu Karsari', 64, 'IPA', 1),
(41, 'Siti Aidah', 64, 'IPA', 1),
(42, 'Tedy Soerya', 63, 'IPA', 1),
(43, 'Chintia Nurlianti', 63, 'IPA', 1),
(44, 'Dewi Nadia', 62, 'IPA', 1),
(45, 'Dwi Rahmawiah', 62, 'IPA', 1),
(46, 'Viena Rizka Aryanto', 62, 'IPA', 1),
(47, 'Anindita Damayanti', 62, 'IPA', 1),
(48, 'Siti Riva Rosdiyanti', 62, 'IPA', 1),
(49, 'Perdiansyah', 61, 'IPA', 1),
(50, 'Dhivani Ayunda Prasetyo', 61, 'IPA', 1),
(51, 'Saskia Ariani', 61, 'IPA', 1),
(52, 'M. Ariel Ardiansyah', 60, 'IPA', 1),
(53, 'Nor Hafizah', 60, 'IPA', 1),
(54, 'R.Herliana Rahmawati', 60, 'IPA', 1),
(55, 'Karmila Sugi Pangestu', 60, 'IPA', 1),
(56, 'Siti Nurhabibah', 60, 'IPA', 1),
(57, 'Muhammad Dhafin Hidayat', 60, 'IPA', 1),
(58, 'Hendrian Maulana', 60, 'IPA', 1),
(59, 'Riska Dwi Nadilla', 60, 'IPA', 1),
(60, 'Ahmad Nawawi', 59, 'IPA', 1),
(61, 'Cut Mutiara Yuanita', 59, 'IPA', 1),
(62, 'Mochammad Reza Ardi Anandika', 59, 'IPA', 1),
(63, 'Rio Putra Bernando', 59, 'IPA', 1),
(64, 'Resya Rachma Nuraisha', 59, 'IPA', 1),
(65, 'Mutiarahmah Yunessa', 58, 'IPA', 1),
(66, 'Yani Handayani', 58, 'IPA', 1),
(67, 'Zenobia Jaya Saputra', 58, 'IPA', 1),
(68, 'Alpiah', 58, 'IPA', 1),
(69, 'Dimas Ghalib Acarya', 58, 'IPA', 1),
(70, 'Elva Cello Cinta', 58, 'IPA', 1),
(71, 'Fitria Rizki Rahmaviani', 57, 'IPA', 1),
(72, 'Noer Mutia', 57, 'IPA', 1),
(73, 'Siti Nazwa Nabila', 57, 'IPA', 1),
(74, 'Naila Azalah', 57, 'IPA', 1),
(75, 'Nova Aulia Adz Dzikr', 57, 'IPA', 1),
(76, 'Siti Nurlaela', 57, 'IPA', 1),
(77, 'Raka Muhamad Abdillah', 57, 'IPA', 1),
(78, 'Azzahra Fazriani', 57, 'IPA', 1),
(79, 'Amelia Ananda Wahyudin', 57, 'IPA', 1),
(80, 'Moch Faisal Fajar Pratama', 57, 'IPA', 1),
(81, 'Siti Anisa', 56, 'IPA', 1),
(82, 'Revan Fernando', 56, 'IPA', 1),
(83, 'Najwa Maisa Azhari', 56, 'IPA', 1),
(84, 'Nanda Ayu Febrilia', 56, 'IPA', 1),
(85, 'Dehan Hendriawan', 55, 'IPA', 1),
(86, 'Siti Salmatussadiah', 55, 'IPA', 1),
(87, 'Maulidya Dewi Rahayu', 55, 'IPA', 1),
(88, 'Novi Yanti', 55, 'IPA', 1),
(89, 'Elfrida Nur Sita', 55, 'IPA', 1),
(90, 'Muhamad Irfan', 55, 'IPA', 1),
(91, 'Tasya Nurcahya', 55, 'IPA', 1),
(92, 'Lulu Legisti Apriani', 55, 'IPA', 1),
(93, 'Wardatun Naza', 54, 'IPA', 1),
(94, 'Siti Arfa Hijrianitya', 54, 'IPA', 1),
(95, 'Sukma Hami Wijaya', 54, 'IPA', 1),
(96, 'Silvanya Aulia Nisa', 53, 'IPA', 1),
(97, 'Azahra Fauziah', 53, 'IPA', 1),
(98, 'Muhamad Al Pajari', 53, 'IPA', 1),
(99, 'Siti Zahra', 53, 'IPA', 1),
(100, 'Viola Vionita Sulaeman', 53, 'IPA', 1),
(101, 'Muhammad Maulana Ahdan', 53, 'IPA', 1),
(102, 'Shafa Davina Ferriany', 52, 'IPA', 1),
(103, 'Herlina Indah Pajarwati', 52, 'IPA', 1),
(104, 'Bambang Aprillianto', 52, 'IPA', 1),
(105, 'Delvita Aulia Ramdani', 52, 'IPA', 1),
(106, 'Muhammad Sultan Maulana', 52, 'IPA', 1),
(107, 'Siti Annisa Khairu', 51, 'IPA', 1),
(108, 'Siti Nurahmah', 51, 'IPA', 1),
(109, 'Amelia Rahmah', 50, 'IPA', 1),
(110, 'Resyiana Saffira Rustandi', 50, 'IPA', 1),
(111, 'Cindi Susilawati', 50, 'IPA', 1),
(112, 'Elsi Sapitri', 50, 'IPA', 1),
(113, 'Aidil Akbar', 50, 'IPA', 1),
(114, 'Habibie Reza Pahlevhi', 50, 'IPA', 1),
(115, 'Aa Muhammad Firdaus', 49, 'IPA', 1),
(116, 'Nadira Alfisania', 49, 'IPA', 1),
(117, 'Trie Cinta Lestari', 49, 'IPA', 1),
(118, 'Satria Yoni Prana Muslim', 49, 'IPA', 1),
(119, 'Dimas Akbar Septiandi', 49, 'IPA', 1),
(120, 'Muhammad Rhenji Ramadhan', 48, 'IPA', 1),
(121, 'Solih', 48, 'IPA', 1),
(122, 'Syeila Analia Agustin', 48, 'IPA', 1),
(123, 'Muhammad Ezarizki Eugene Ramadhani', 48, 'IPA', 1),
(124, 'Muhammad Ghifari Fauzan Faridz', 48, 'IPA', 1),
(125, 'Ledia Rizkika Ardila', 47, 'IPA', 1),
(126, 'Muhamad Rizky Maulana', 47, 'IPA', 1),
(127, 'Muhammad Rizal Abdullah Rizky', 47, 'IPA', 1),
(128, 'Siti Syarah Syaqinah Husein', 47, 'IPA', 1),
(129, 'Novia Herawati', 47, 'IPA', 1),
(130, 'Feriska Zennita Wibowo', 47, 'IPA', 1),
(131, 'Ipan Maulana Sadikin', 47, 'IPA', 1),
(132, 'Raksa Setiaji', 46, 'IPA', 1),
(133, 'Dwi Atmaja Bakti', 46, 'IPA', 1),
(134, 'Muhammad Syafiq Syafrizal', 45, 'IPA', 1),
(135, 'Siti Indah Permatasari', 45, 'IPA', 1),
(136, 'Siti Patimah Tuzahra', 45, 'IPA', 1),
(137, 'Mutiara Sulasti Batubara', 45, 'IPA', 1),
(138, 'Sunia Meliyani', 44, 'IPA', 1),
(139, 'Prahmana Arya Monoarfa', 44, 'IPA', 1),
(140, 'Zalfa Naila Bulqiyah', 44, 'IPA', 1),
(141, 'Sintya Sofianita', 44, 'IPA', 1),
(142, 'Elita Nur Ilahi', 44, 'IPA', 1),
(143, 'Tanti Handayani', 44, 'IPA', 1),
(144, 'Anzani Maharani', 44, 'IPA', 1),
(145, 'Muhamad Fajri Putra Alfansyah', 43, 'IPA', 1),
(146, 'Nurul Narulita', 43, 'IPA', 1),
(147, 'Riska Permata Putri', 42, 'IPA', 1),
(148, 'Malisadinia Arsyi', 41, 'IPA', 1),
(149, 'M. Luthvi Fadilah Sinni Pabate', 41, 'IPA', 1),
(150, 'Siti Nazwa Alifha Zalianti', 41, 'IPA', 1),
(151, 'Indah Kurnia Lestari', 40, 'IPA', 1),
(152, 'Intan Tresna Ayu', 40, 'IPA', 1),
(153, 'M. Damar Ramadhan', 39, 'IPA', 1),
(154, 'Lidia Trianjani', 39, 'IPA', 1),
(155, 'M Ikhsan Maulana', 38, 'IPA', 1),
(156, 'Gema Yasin Barokah', 38, 'IPA', 1),
(157, 'Muhammad Ariq Dzaky Zenaldi', 37, 'IPA', 1),
(158, 'M. Aksal Reisaldi', 20, 'IPA', 1),
(159, 'Luky Ramadhan', 20, 'IPA', 1),
(160, 'Lela Tikro Nurhasanah', 20, 'IPA', 1),
(161, 'Muhamad Fikri Maulana', 20, 'IPA', 1),
(162, 'Nur Hikmah', 20, 'IPS', 2),
(163, 'Nur Khansa Al Qodariah', 73, 'IPS', 2),
(164, 'Fariza Ananta Hijran', 70, 'IPS', 2),
(165, 'Zikra Aulia', 70, 'IPS', 2),
(166, 'Satria Ramdani', 69, 'IPS', 2),
(167, 'Nurul Hikmah Dwi Sukma', 67, 'IPS', 2),
(168, 'Alisa Desti Megantari', 66, 'IPS', 2),
(169, 'Adisa Fatyra', 64, 'IPS', 2),
(170, 'Halimatuz Zahra', 64, 'IPS', 2),
(171, 'Anisa Fauziah', 63, 'IPS', 2),
(172, 'Iska Siti Nahara Maulida', 63, 'IPS', 2),
(173, 'Fadia Khazani Shangira Putri', 62, 'IPS', 2),
(174, 'Syeevha Nurmaharaini', 62, 'IPS', 2),
(175, 'Wahyu Sholihin', 61, 'IPS', 2),
(176, 'Rima', 61, 'IPS', 2),
(177, 'Muhamad Haykal Rafli', 61, 'IPS', 2),
(178, 'Vina Rahmawati', 61, 'IPS', 2),
(179, 'Muhamad Fazri Fathurahman', 61, 'IPS', 2),
(180, 'Haikal Arfansyah', 60, 'IPS', 2),
(181, 'Rahma Maulidinda Akhmad Syam', 60, 'IPS', 2),
(182, 'Fani Febriana', 60, 'IPS', 2),
(183, 'Saqina Nezsya Febrian', 60, 'IPS', 2),
(184, 'Sina Andini Yuniar', 60, 'IPS', 2),
(185, 'Renata Julianti', 60, 'IPS', 2),
(186, 'Dilla Dayana Syafitri', 60, 'IPS', 2),
(187, 'Dessy Abdi Pratiwi', 60, 'IPS', 2),
(188, 'Ayu Wandira', 59, 'IPS', 2),
(189, 'Muhamad Al Bagir', 59, 'IPS', 2),
(190, 'Cahya Tanzani', 58, 'IPS', 2),
(191, 'Muhamad Rival', 58, 'IPS', 2),
(192, 'Ega Puspita Sari', 58, 'IPS', 2),
(193, 'Muthia Az-Zahra A.W', 58, 'IPS', 2),
(194, 'Nanda Violista Pebrian', 58, 'IPS', 2),
(195, 'Zulfikry Ruswandi', 58, 'IPS', 2),
(196, 'Muhamad Alfariz', 58, 'IPS', 2),
(197, 'Saskia Salsabila', 58, 'IPS', 2),
(198, 'Virly Ananda Shalsabilla', 58, 'IPS', 2),
(199, 'Aditya Ramadhan', 57, 'IPS', 2),
(200, 'Hilman Fakhrizal', 57, 'IPS', 2),
(201, 'Siti Marsela Apriliani', 57, 'IPS', 2),
(202, 'Adinda Rachma Azahra', 56, 'IPS', 2),
(203, 'Safrian Syah Zibran', 56, 'IPS', 2),
(204, 'Syahrir Akbar', 56, 'IPS', 2),
(205, 'Muh. Dipal Saputra', 56, 'IPS', 2),
(206, 'Maulia Adinda Rahmi', 56, 'IPS', 2),
(207, 'Ufi Lestifah', 56, 'IPS', 2),
(208, 'Mochamad Zikri Rizaldi', 56, 'IPS', 2),
(209, 'Siti Wilda Fatia', 56, 'IPS', 2),
(210, 'Dinda Albania Nisfa Putri', 56, 'IPS', 2),
(211, 'M. Wahyudi S', 56, 'IPS', 2),
(212, 'Riska Nur Halimah', 56, 'IPS', 2),
(213, 'Ana Tasya  Maharani', 55, 'IPS', 2),
(214, 'Mochamad Rayhan Abi Sukmana', 55, 'IPS', 2),
(215, 'Siti Shena Aladawiyah', 55, 'IPS', 2),
(216, 'Prihatini Gusliandra', 55, 'IPS', 2),
(217, 'Siti Agisni Maharani', 55, 'IPS', 2),
(218, 'Mutiara Putri Rahmadanti', 55, 'IPS', 2),
(219, 'Muhamad Baghir Octavandy', 54, 'IPS', 2),
(220, 'Nurul Fazrin Maulida', 54, 'IPS', 2),
(221, 'Syafana Fairuzahira', 54, 'IPS', 2),
(222, 'Anggita Mayu Lestari', 54, 'IPS', 2),
(223, 'Ayu  Andini', 54, 'IPS', 2),
(224, 'Melani Herlina', 54, 'IPS', 2),
(225, 'Siti Zahra Meylida', 54, 'IPS', 2),
(226, 'Muhammad Rafli', 53, 'IPS', 2),
(227, 'Chikal Azriela Syachrani', 53, 'IPS', 2),
(228, 'Muhamad Rizki Januar', 53, 'IPS', 2),
(229, 'Ratu Nurhilwa', 53, 'IPS', 2),
(230, 'Riska Destia Sari', 53, 'IPS', 2),
(231, 'Lora Amelia', 53, 'IPS', 2),
(232, 'Daffa Naufal Arya Putra', 52, 'IPS', 2),
(233, 'Mohamad Rizki Gunawan', 52, 'IPS', 2),
(234, 'Qiandra Afdan Dinata', 52, 'IPS', 2),
(235, 'Lukman Mauludi', 52, 'IPS', 2),
(236, 'Ananda Putri Rahmawati', 52, 'IPS', 2),
(237, 'Ani Widiyayanti', 52, 'IPS', 2),
(238, 'Muhamad Wildan Ashari', 52, 'IPS', 2),
(239, 'Reni Noviani', 52, 'IPS', 2),
(240, 'Vini', 52, 'IPS', 2),
(241, 'Muhammad Samsul Maarif', 52, 'IPS', 2),
(242, 'Erina Indriani', 51, 'IPS', 2),
(243, 'Ferry Ramdhansyah', 51, 'IPS', 2),
(244, 'Havidi Rahman', 51, 'IPS', 2),
(245, 'Supriyadi', 51, 'IPS', 2),
(246, 'Muhammad Agung Saputra', 50, 'IPS', 2),
(247, 'Siti Salmah Hardiyanti', 50, 'IPS', 2),
(248, 'Dias Putra', 50, 'IPS', 2),
(249, 'Muhamad Adi Setiawan', 50, 'IPS', 2),
(250, 'Bayu Darma Susilo', 50, 'IPS', 2),
(251, 'Fitri', 50, 'IPS', 2),
(252, 'Moh Rivaldi Soleh', 50, 'IPS', 2),
(253, 'Abdul Malik Dzulkarnaen', 49, 'IPS', 2),
(254, 'Dini Azmawaroh Nasution', 49, 'IPS', 2),
(255, 'Agistia Samrotul Oktofinda', 49, 'IPS', 2),
(256, 'Avril Lina Nurkartini', 49, 'IPS', 2),
(257, 'Muhamad Haikal Rizky Ramdhani', 49, 'IPS', 2),
(258, 'Siti Nurul Fauziah', 49, 'IPS', 2),
(259, 'Bilal Gibran Wijaya', 49, 'IPS', 2),
(260, 'Mohamad Agis Fadillah', 49, 'IPS', 2),
(261, 'Rosalinda Salfira', 48, 'IPS', 2),
(262, 'Mariam Mahmudah', 48, 'IPS', 2),
(263, 'Aris Riansyah', 48, 'IPS', 2),
(264, 'Fiqri Hadi Pratama', 48, 'IPS', 2),
(265, 'Reza Saputra', 48, 'IPS', 2),
(266, 'Dimas Darmawan', 48, 'IPS', 2),
(267, 'Bunga Aprillia Putrinuriani', 48, 'IPS', 2),
(268, 'Muhammad Abdullah Giyandafha', 48, 'IPS', 2),
(269, 'Moch. Rangga Paturohman', 47, 'IPS', 2),
(270, 'Ananda Ersa Saputra', 47, 'IPS', 2),
(271, 'Mochamad Riziq', 47, 'IPS', 2),
(272, 'Reza Bambang Muhzi Saputra', 47, 'IPS', 2),
(273, 'Citra Patmawati', 47, 'IPS', 2),
(274, 'Muhamad Fathi Alfiansyah', 47, 'IPS', 2),
(275, 'M. Meyzal Kesyahda', 47, 'IPS', 2),
(276, 'Muhamad Jidan Andhika Faturrohman', 47, 'IPS', 2),
(277, 'Fitria Agustina', 47, 'IPS', 2),
(278, 'Muhammad Zidan Zaelani', 46, 'IPS', 2),
(279, 'Rika Rahayu', 46, 'IPS', 2),
(280, 'Agi Andriansyah', 46, 'IPS', 2),
(281, 'Diana Febrianti Akbar', 46, 'IPS', 2),
(282, 'Yuniarti', 45, 'IPS', 2),
(283, 'Fasya Salsabilla Rahman', 45, 'IPS', 2),
(284, 'Dinda Fatmawati Bachri', 45, 'IPS', 2),
(285, 'Sephia Octapiani', 45, 'IPS', 2),
(286, 'Deva Nanda Delvia', 44, 'IPS', 2),
(287, 'Adih Permana Putra', 44, 'IPS', 2),
(288, 'Siti Juliyanti', 44, 'IPS', 2),
(289, 'M. Andi Rezky Jalil', 44, 'IPS', 2),
(290, 'Putri Elyna', 44, 'IPS', 2),
(291, 'Rayhan Saumil Akhmal', 44, 'IPS', 2),
(292, 'Muhamad Erlan Permana', 43, 'IPS', 2),
(293, 'Ahmad Nursyabani', 43, 'IPS', 2),
(294, 'Theresya Oktaviani', 43, 'IPS', 2),
(295, 'Rehan Anugrah Sukarta', 42, 'IPS', 2),
(296, 'Devia Hermawati', 42, 'IPS', 2),
(297, 'Reyvanka Bimo Aptari Rusyana', 42, 'IPS', 2),
(298, 'Siti Julpa', 42, 'IPS', 2),
(299, 'Resti Priliandari Sutisna', 42, 'IPS', 2),
(300, 'Muhamad Revdinal Syahbani', 42, 'IPS', 2),
(301, 'Muhammad Cipta Nugraha', 41, 'IPS', 2),
(302, 'Gilang Rizki', 41, 'IPS', 2),
(303, 'Rizky Ramadan', 41, 'IPS', 2),
(304, 'Muhamad Ardiansyah', 38, 'IPS', 2),
(305, 'Ariya Wiranata', 37, 'IPS', 2),
(306, 'Dinda Sekar Ayuningrum', 36, 'IPS', 2),
(307, 'Muhamad Akram Marzuki', 35, 'IPS', 2),
(308, 'Muhamad Dabyan Rajas Wahab', 34, 'IPS', 2),
(309, 'Putri Parahyangan', 34, 'IPS', 2),
(310, 'M. Haikal Sultoni', 32, 'IPS', 2),
(311, 'Khahfi Abdul Syah', 20, 'IPS', 2),
(312, 'Siti Rahmawati', 62, 'IPA', 1),
(313, 'Nur Kesya Amalia', 57, 'IPA', 1),
(314, 'Mochamad Fachri Anugrah', 56, 'IPA', 1),
(315, 'M. Aggi Al Mugitsu', 56, 'IPA', 1),
(316, 'Muhammad Rizky Ramadhan', 56, 'IPA', 1),
(317, 'M. Syahrul Abdullah', 52, 'IPA', 1),
(318, 'Muhamad Furqon', 50, 'IPA', 1),
(319, 'Sultan Al-Kadzim Al-Atas', 46, 'IPA', 1),
(320, 'Muhamad Friza Mahatir', 45, 'IPA', 1),
(321, 'M. Boni Dwi Putra', 45, 'IPA', 1),
(322, 'Hendra Suryana', 42, 'IPA', 1),
(323, 'Muhamad Shamil Ghazi Yaraghi', 42, 'IPA', 1),
(324, 'Yoga Kusumawardhana', 36, 'IPA', 1),
(325, 'M. Argi Erdian', 35, 'IPA', 1),
(326, 'Farhan Al Faluthi', 23, 'IPA', 1),
(327, 'Alfin Oktarianto Putra', 20, 'IPA', 1),
(328, 'Muhamad Reza Wardana', 20, 'IPA', 1),
(329, 'Muhamad Gilang Darmawan', 20, 'IPA', 1),
(330, 'Indah Novita Sari', 20, 'IPA', 1),
(331, 'Irnawati', 20, 'IPA', 1),
(332, 'Rizky Febriansyah', 20, 'IPA', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_jurusan`
--

CREATE TABLE `kriteria_jurusan` (
  `id_kriteria` int(11) NOT NULL,
  `nilai_center` int(11) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `kode_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria_jurusan`
--

INSERT INTO `kriteria_jurusan` (`id_kriteria`, `nilai_center`, `jurusan`, `kode_jurusan`) VALUES
(1, 75, 'IPA', 1),
(2, 50, 'IPS', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id_data`);

--
-- Indexes for table `kriteria_jurusan`
--
ALTER TABLE `kriteria_jurusan`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=333;

--
-- AUTO_INCREMENT for table `kriteria_jurusan`
--
ALTER TABLE `kriteria_jurusan`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
