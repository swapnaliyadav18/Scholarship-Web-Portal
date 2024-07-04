-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2024 at 01:15 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swp`
--

-- --------------------------------------------------------

--
-- Table structure for table `addscheme`
--

CREATE TABLE `addscheme` (
  `id` int(10) NOT NULL,
  `scheme` varchar(100) NOT NULL,
  `sdate` varchar(10) NOT NULL,
  `edate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addscheme`
--

INSERT INTO `addscheme` (`id`, `scheme`, `sdate`, `edate`) VALUES
(1, 'Post Matric Scholarship scheme ( Government of india ) ', '2024-03-30', '2024-04-26'),
(3, 'Post Matric Scholarship scheme ( Government of india )', '', '2024-05-25'),
(4, 'Post Matric Scholarship ( Government of india ) post', '', '2024-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `clgclerk`
--

CREATE TABLE `clgclerk` (
  `c_id` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `collegename` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clgclerk`
--

INSERT INTO `clgclerk` (`c_id`, `fname`, `lname`, `collegename`, `mobile`, `email`, `username`, `password`, `date`) VALUES
(1, 'Vilas', 'Yadav', 'MIT College of Engineering', '9876541865', 'vilasyadav@gmail.com', 'vilasyadav@gmail.com', '123', '2024-03-22'),
(2, 'Ajay', 'Patil', 'Dr.D.Y.Patil centre for management and research, c', '8767657864', 'ajaypatil@gamil.com', 'ajaypatil@gamil.com', '456', '2024-03-22'),
(3, 'Karan', 'Shinde', 'Fergusson College', '7866554941', 'karanshinde@gmail.com', 'karanshinde@gmail.com', '789', '2024-03-22'),
(4, 'Ishaan', 'Kadam', 'Modern College of Arts, Science and Commerce', '9877659763', 'ishaankadam@gmail.com', '	ishaankadam@gmail.com', '123', '2024-03-22'),
(5, 'Maanas', 'Agrawal', 'Sinhgad College of Engineering', '9758865359', 'maanasagrawal@gamil.com', 'maanasagrawal@gamil.com', '456', '2024-03-22'),
(6, 'Nitesh', 'Rathod', 'P.D.V.P college,tasgaon', '8456837453', 'niteshrathod@gmail.com', 'niteshrathod@gmail.com', '789', '2024-03-22'),
(7, 'Raghav', 'Singh', 'D.Y. Patil College of Engineering', '7455845648', 'raghavsingh@gmail.com', 'raghavsingh@gmail.com', '123', '2024-03-22'),
(8, 'Tanish', 'Pawar', 'SGM college, karad', '9758755784', 'tanishpawar@gmail.com', 'tanishpawar@gmail.com', '789', '2024-03-22'),
(9, 'Shivansh', 'More', ' International Institute of Information Technology', '7568675473', 'shivanshmore@gmail.com', 'shivanshmore@gmail.com', '123', '2024-03-22'),
(10, 'DATTATRAY', 'MANE', 'PDVP College Tasgaon', '09168240307', 'buntymane47@gmail.com', 'admin', 'admin', '2024-03-25');

-- --------------------------------------------------------

--
-- Table structure for table `clgprinciple`
--

CREATE TABLE `clgprinciple` (
  `p_id` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `collegename` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `collegename`
--

CREATE TABLE `collegename` (
  `id` int(11) NOT NULL,
  `college` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `collegename`
--

INSERT INTO `collegename` (`id`, `college`) VALUES
(1, 'MIT College of Engineering'),
(2, 'Dr.D.Y.Patil centre for management and research, chikhali '),
(3, 'Fergusson College'),
(4, 'Modern College of Arts, Science and Commerce'),
(5, 'Sinhgad College of Engineering'),
(6, 'P.D.V.P college,tasgaon'),
(7, 'D.Y. Patil College of Engineering'),
(8, 'SGM college, karad'),
(9, ' International Institute of Information Technology, Pune'),
(10, 'Mahatma Phule College Of Arts Commerce & Science, Pune'),
(11, 'PDVP College Tasgaon');

-- --------------------------------------------------------

--
-- Table structure for table `deptclerk`
--

CREATE TABLE `deptclerk` (
  `dc_id` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `collegename` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deptclerk`
--

INSERT INTO `deptclerk` (`dc_id`, `fname`, `lname`, `collegename`, `mobile`, `email`, `username`, `password`, `date`) VALUES
(1, 'Utkarsh', 'Jadhav', 'MIT College of Engineering', '9843575684', 'utkarshjadhav@gmail.com', 'utkarshjadhav@gmail.com', '123', '2024-03-22'),
(2, 'priti', 'More', 'Dr.D.Y.Patil centre for management and research, c', '7234543463', 'pritimore@gmail.com', 'pritimore@gmail.com', '456', '2024-03-22'),
(3, 'Nilesh', 'Patil', 'Fergusson College', '8455968794', 'nileshpatil@gmail.com', 'nileshpatil@gmail.com', '789', '2024-03-22'),
(4, 'Aanya', 'Kadam', 'Modern College of Arts, Science and Commerce', '7653438472', 'aanyakadam@gmail.com', 'aanyakadam@gmail.com', '123', '2024-03-22'),
(5, 'Sonali', 'Patil', 'Modern College of Arts, Science and Commerce', '9763547863', 'sonalipatil@gmail.com', 'sonalipatil@gmail.com', '456', '2024-03-22'),
(6, ' Gayatri', 'Shinde', 'Sinhgad College of Engineering', '8654933576', 'gayatrishinde@gmail.com', 'gayatrishinde@gmail.com', '789', '2024-03-22'),
(7, 'Viraj', 'Mane', 'P.D.V.P college,tasgaon', '8745367564', 'virajmane@gmail.com', 'virajmane@gmail.com', '123', '2024-03-22'),
(8, 'Pranav', 'Yadav', 'SGM college, karad', '9784564845', 'pranavyadav@gmail.com', 'pranavyadav@gmail.com', '456', '2024-03-22'),
(9, ' Kalyani', 'Rajput', ' International Institute of Information Technology', '8675476455', 'kalyanirajput@gmail.com', 'kalyanirajput@gmail.com', '789', '2024-03-22'),
(10, 'Ruturaj', 'Gaikwad', 'Mahatma Phule College Of Arts Commerce & Science', '9467456753', 'ruturajgaikwad@gmail.com', 'ruturajgaikwad@gmail.com', '123', '2024-03-22');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `apro` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `st_add`
--

CREATE TABLE `st_add` (
  `id` int(10) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `dist` varchar(50) NOT NULL,
  `tal` varchar(50) NOT NULL,
  `village` varchar(50) NOT NULL,
  `pincode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `st_contact`
--

CREATE TABLE `st_contact` (
  `id` int(11) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL,
  `ticket` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `st_crt_c`
--

CREATE TABLE `st_crt_c` (
  `id` int(11) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `adyear` varchar(50) NOT NULL,
  `instate` varchar(50) NOT NULL,
  `indist` varchar(50) NOT NULL,
  `intal` varchar(50) NOT NULL,
  `qlevel` varchar(50) NOT NULL,
  `stream` varchar(50) NOT NULL,
  `clgname` varchar(100) NOT NULL,
  `course` varchar(50) NOT NULL,
  `yos` varchar(50) NOT NULL,
  `c&cti` varchar(50) NOT NULL,
  `mode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `st_info`
--

CREATE TABLE `st_info` (
  `id` int(10) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `adhar` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `bod` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `perentmobile` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `mstatus` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `fincome` varchar(50) NOT NULL,
  `distype` varchar(50) NOT NULL,
  `account_no` varchar(50) NOT NULL,
  `ifsc` varchar(50) NOT NULL,
  `bname` varchar(50) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `st_otr`
--

CREATE TABLE `st_otr` (
  `id` int(10) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `faname` varchar(50) NOT NULL,
  `occ` varchar(50) NOT NULL,
  `salari` varchar(50) NOT NULL,
  `maname` varchar(50) NOT NULL,
  `occs` varchar(50) NOT NULL,
  `salaris` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `st_pastq`
--

CREATE TABLE `st_pastq` (
  `id` int(10) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `universiy` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `dist` varchar(50) NOT NULL,
  `tal` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `stream` varchar(50) NOT NULL,
  `clgname` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `yoss` varchar(50) NOT NULL,
  `c&com` varchar(50) NOT NULL,
  `mode` varchar(50) NOT NULL,
  `adyear` varchar(50) NOT NULL,
  `passyear` varchar(50) NOT NULL,
  `result` varchar(50) NOT NULL,
  `percentage` varchar(50) NOT NULL,
  `attempt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addscheme`
--
ALTER TABLE `addscheme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `clgclerk`
--
ALTER TABLE `clgclerk`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `clgprinciple`
--
ALTER TABLE `clgprinciple`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `collegename`
--
ALTER TABLE `collegename`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deptclerk`
--
ALTER TABLE `deptclerk`
  ADD PRIMARY KEY (`dc_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `st_add`
--
ALTER TABLE `st_add`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `st_crt_c`
--
ALTER TABLE `st_crt_c`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `st_info`
--
ALTER TABLE `st_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `st_otr`
--
ALTER TABLE `st_otr`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addscheme`
--
ALTER TABLE `addscheme`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clgclerk`
--
ALTER TABLE `clgclerk`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `clgprinciple`
--
ALTER TABLE `clgprinciple`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `collegename`
--
ALTER TABLE `collegename`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `deptclerk`
--
ALTER TABLE `deptclerk`
  MODIFY `dc_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_add`
--
ALTER TABLE `st_add`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_crt_c`
--
ALTER TABLE `st_crt_c`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_info`
--
ALTER TABLE `st_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_otr`
--
ALTER TABLE `st_otr`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
