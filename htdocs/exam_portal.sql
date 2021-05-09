-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2021 at 09:02 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `aptitude`
--

CREATE TABLE `aptitude` (
  `Sl. No.` int(3) NOT NULL,
  `question` varchar(200) NOT NULL,
  `option1` varchar(100) NOT NULL,
  `option2` varchar(100) NOT NULL,
  `option3` varchar(100) NOT NULL,
  `option4` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aptitude`
--

INSERT INTO `aptitude` (`Sl. No.`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(1, 'Rs. 1200 is lent out at 5% p.a. simple interest for 3 years. Find the amount after 3 years.', 'Rs. 1380', 'Rs. 1290', 'Rs. 1470', 'Rs. 1200', 'A'),
(2, 'If A and B together can complete a piece of work in 15 days and B alone in 20 days, in how many days A alone can complete the work?', '60', '45', '40', '30', 'A'),
(3, 'In a 100m race, A can give B 10m and C 28m. In the same race B can give C:', '18m', '20m', '27m', '9m', 'B'),
(4, 'If log 2 = 0.3010 and log 3 = 0.4771, the value of log 512 base 5 is:', '2.870', '2.967', '3.876', '3.912', 'C'),
(5, 'It was Sunday on Jan 1, 2006. What was the day of the week Jan1, 2010?', 'Sunday', 'Saturday', 'Friday', 'Wednesday', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `c`
--

CREATE TABLE `c` (
  `Sl. No.` int(3) NOT NULL,
  `question` varchar(100) NOT NULL,
  `option1` varchar(50) NOT NULL,
  `option2` varchar(50) NOT NULL,
  `option3` varchar(50) NOT NULL,
  `option4` varchar(50) NOT NULL,
  `answer` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `c`
--

INSERT INTO `c` (`Sl. No.`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(1, 'What is the output of this statement \'printf(\"%d\",(a++))\'?', 'The value of (a+1)', 'The current value of a', 'Error message', 'Garbage value', 'B'),
(2, 'Why is a macro used in place of a function?', 'It reduces execution time.', 'It reduces code size.', 'It increases execution time.', 'It increases code size.', 'D'),
(3, 'In the C language, the constant is defined ______.', 'Before main', 'After main', 'Anywhere but starting on a new line.', 'None of the above', 'C'),
(4, 'Which one of the following is a loop construct that will always be executed once?', 'for', 'while', 'switch', 'do.. while...', 'D'),
(5, 'How many characters can a string hold when declared as follows?\r\n\r\nChar name[20];', '18', '19', '20', 'None of the above', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `currentaffairs`
--

CREATE TABLE `currentaffairs` (
  `Sl. No.` int(3) NOT NULL,
  `question` varchar(200) NOT NULL,
  `option1` varchar(100) NOT NULL,
  `option2` varchar(100) NOT NULL,
  `option3` varchar(100) NOT NULL,
  `option4` varchar(100) NOT NULL,
  `answer` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `currentaffairs`
--

INSERT INTO `currentaffairs` (`Sl. No.`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(1, 'The recently approved Mineral Laws (Amendment) Ordinance 2020 has done away with so called captive end-use criteria of which mineral/natural resource.', 'Coal', 'Gas Hydrates', 'Natural Gas', 'Crude Oil', 'A'),
(2, 'The Indian Meteorological Department(IMD) recently celebrated its 145th foundation day. IMD functions under which ministry?', 'Ministry of chemicals and fertilizers.', 'Ministry of Environment, Forest and Climate change', 'Ministry of mines', 'Ministry of Earth Sciences', 'D'),
(3, 'Which State recently announced to provide credit guarantee of loans for higher education.', 'Odisha', 'Haryana', 'Jharkhand', 'Bihar', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `dbms`
--

CREATE TABLE `dbms` (
  `Sl. No.` int(3) NOT NULL,
  `question` varchar(100) NOT NULL,
  `option1` varchar(100) NOT NULL,
  `option2` varchar(100) NOT NULL,
  `option3` varchar(100) NOT NULL,
  `option4` varchar(100) NOT NULL,
  `answer` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dbms`
--

INSERT INTO `dbms` (`Sl. No.`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(1, 'A Database Management System is a type of ________ software.', 'It is a type of system software.', 'It is a kind of application software.', 'It is a kind of general software.', 'Both A and C', 'A'),
(2, 'The term \"NTFS\" refers to which one of the following:', 'New technology file system', 'New tree file system', 'New table type file system', 'Both A and C', 'A'),
(3, 'Which one of the following can be used to extract or filter the data and information from the data w', 'Data redundancy', 'Data recovery tool', 'Data mining', 'Both B and C', 'C'),
(4, 'Which one of the following refers to the \"Data about Data\"?', 'Directory', 'Subdata', 'Warehouse', 'Metadata', 'D'),
(5, 'To which of the following the term \"DBA\" referred?', 'Data bank administrator', 'Database Administrator', 'Data Administrator ', 'None of the Above', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `exam_subjects`
--

CREATE TABLE `exam_subjects` (
  `#` int(3) NOT NULL,
  `exam` varchar(50) NOT NULL,
  `mark` int(4) NOT NULL DEFAULT 5,
  `duration` time NOT NULL,
  `time_date` date NOT NULL,
  `value` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_subjects`
--

INSERT INTO `exam_subjects` (`#`, `exam`, `mark`, `duration`, `time_date`, `value`) VALUES
(1, 'Python', 5, '00:01:00', '2021-05-15', 'python'),
(2, 'DBMS', 5, '00:05:00', '2021-05-18', 'dbms'),
(3, 'Objective C', 5, '00:15:00', '2021-04-21', 'c'),
(4, 'Aptitude', 5, '00:15:00', '2021-04-24', 'aptitude');

-- --------------------------------------------------------

--
-- Table structure for table `python`
--

CREATE TABLE `python` (
  `Sl. No.` int(3) NOT NULL,
  `question` varchar(100) NOT NULL,
  `option1` varchar(50) NOT NULL,
  `option2` varchar(50) NOT NULL,
  `option3` varchar(50) NOT NULL,
  `option4` varchar(50) NOT NULL,
  `answer` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `python`
--

INSERT INTO `python` (`Sl. No.`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(1, 'What is the maximum possible length of an identifier?', '16', '32', '64', 'None of the above', 'D'),
(2, 'Which character in python is used to make a single line comment?', '/', '//', '#', '!', 'C'),
(3, 'What is the method inside the class in python language?', 'Object', 'Function', 'Attribute', 'Argument', 'B'),
(4, 'Which of the following is not a keyword in python language?', 'val', 'raise', 'try', 'with', 'A'),
(5, 'Which of the following operators is the correct option for power(a,b)?', 'a ^ b', 'a ** b', 'a ^^ b', 'a ^* b', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Name` text NOT NULL,
  `ID` int(10) UNSIGNED NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Age` int(3) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Gender` text NOT NULL,
  `College Address` text NOT NULL,
  `Branch` text NOT NULL,
  `Technical Skills` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `Resume` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Name`, `ID`, `Password`, `Age`, `Email`, `Gender`, `College Address`, `Branch`, `Technical Skills`, `Resume`) VALUES
('Biplab', 1111, '1234', 21, 'biplab@xyz.com', 'Male', 'Silicon Institute of Technology', 'CSE', 'C,Java', 0x433a78616d7070096d70706870414441352e746d70),
('Aexki', 8239498, '1234', 21, 'aexkithatsme@gmail.com', 'Male', '1540/28 soubhagya nagar', 'CSE', 'Python,C', 0x433a78616d7070096d70706870364330392e746d70);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aptitude`
--
ALTER TABLE `aptitude`
  ADD PRIMARY KEY (`Sl. No.`);

--
-- Indexes for table `c`
--
ALTER TABLE `c`
  ADD PRIMARY KEY (`Sl. No.`);

--
-- Indexes for table `currentaffairs`
--
ALTER TABLE `currentaffairs`
  ADD PRIMARY KEY (`Sl. No.`);

--
-- Indexes for table `dbms`
--
ALTER TABLE `dbms`
  ADD PRIMARY KEY (`Sl. No.`);

--
-- Indexes for table `exam_subjects`
--
ALTER TABLE `exam_subjects`
  ADD PRIMARY KEY (`#`);

--
-- Indexes for table `python`
--
ALTER TABLE `python`
  ADD PRIMARY KEY (`Sl. No.`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
