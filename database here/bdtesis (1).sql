-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2017 a las 20:06:23
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdtesis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(12) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `firstname`, `middlename`, `lastname`) VALUES
(1, 'admin', 'admin', 'Administrator', '', ''),
(2, 'BRYAN', 'BRYAN123', 'BRYAN', 'NELSON', 'Hernandez Garcia ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `book_title` varchar(50) NOT NULL,
  `book_description` varchar(200) NOT NULL,
  `book_category` varchar(50) NOT NULL,
  `book_author` varchar(60) NOT NULL,
  `date_publish` varchar(25) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `book`
--

INSERT INTO `book` (`book_id`, `book_title`, `book_description`, `book_category`, `book_author`, `date_publish`, `qty`) VALUES
(1, 'English 1', 'Learning English', 'History', 'San Juan', '1999-10-18', 25),
(2, 'Literatura', 'Fundamentos de lengua literatura ', 'Lenguague ', 'Mr. Hamilton', '2005-09-10', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `borrowing`
--

CREATE TABLE `borrowing` (
  `borrow_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `student_no` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `borrowing`
--

INSERT INTO `borrowing` (`borrow_id`, `book_id`, `student_no`, `qty`, `date`, `status`) VALUES
(3, 1, 101054, 1, '2017-10-26', 'Returned'),
(4, 1, 101054, 1, '2017-11-10', 'Borrowed'),
(5, 1, 12020, 1, '2017-11-11', 'Borrowed');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha_student`
--

CREATE TABLE `ficha_student` (
  `ficha_id` int(5) NOT NULL,
  `nro_ficha` int(5) NOT NULL,
  `student_id` int(5) NOT NULL,
  `name_student` varchar(30) NOT NULL,
  `goal_recuperation` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ficha_student`
--

INSERT INTO `ficha_student` (`ficha_id`, `nro_ficha`, `student_id`, `name_student`, `goal_recuperation`, `description`) VALUES
(4, 117, 8, 'Maria Garcia Burgos ', 'refuerzo', 'Academico'),
(5, 3, 117, 'Maria Garcia Burgos ', 'refuerzo', 'Academico'),
(6, 112, 120, 'Lola Burgos', 'Refuerzo academico en literatura, unidad 1', 'mejora ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_no` varchar(8) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `course` varchar(8) NOT NULL,
  `section` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `student`
--

INSERT INTO `student` (`student_id`, `student_no`, `firstname`, `middlename`, `lastname`, `course`, `section`) VALUES
(1, '101054', 'Ruby', '', 'Diamon', 'BSIT', '2B'),
(2, '12020', 'Bryan ', 'Nelson', 'Hernandez Garcia ', '8vo', 'C'),
(7, '12', 'LOLA', 'LAURA', 'BURGOS MONTAÃ‘O', '8vo', 'A');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indices de la tabla `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indices de la tabla `borrowing`
--
ALTER TABLE `borrowing`
  ADD PRIMARY KEY (`borrow_id`);

--
-- Indices de la tabla `ficha_student`
--
ALTER TABLE `ficha_student`
  ADD PRIMARY KEY (`ficha_id`);

--
-- Indices de la tabla `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `borrowing`
--
ALTER TABLE `borrowing`
  MODIFY `borrow_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `ficha_student`
--
ALTER TABLE `ficha_student`
  MODIFY `ficha_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
