-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jan 02, 2023 at 12:00 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yahoodie`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idAdmin`, `username`, `password`) VALUES
(1, 'raihan', 'raihan1234'),
(2, 'satria', 'satria1234'),
(3, 'fachrul', 'fachrul1234'),
(4, 'alif', 'alif1234');

-- --------------------------------------------------------

--
-- Table structure for table `hoodie`
--

CREATE TABLE `hoodie` (
  `kodeHoodie` int NOT NULL,
  `idAdmin` int NOT NULL,
  `namaHoodie` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `ukuran` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `stock` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hoodie`
--

INSERT INTO `hoodie` (`kodeHoodie`, `idAdmin`, `namaHoodie`, `tipe`, `ukuran`, `harga`, `stock`, `gambar`) VALUES
(1, 1, 'Basic Hoodie Black', 'Hoodie', 'S', '150000', '25', 'https://drive.google.com/uc?export=view&id=1vv91t_o1itAMRRCEjbfhjN8ec8Hn_Ow9'),
(2, 1, 'Basic Hoodie Black', 'Hoodie', 'M', '150000', '30', 'https://drive.google.com/uc?export=view&id=1vv91t_o1itAMRRCEjbfhjN8ec8Hn_Ow9'),
(3, 1, 'Basic Hoodie Black', 'Hoodie', 'L', '150000', '32', 'https://drive.google.com/uc?export=view&id=1vv91t_o1itAMRRCEjbfhjN8ec8Hn_Ow9'),
(4, 1, 'Basic Hoodie Black', 'Hoodie', 'XL', '150000', '35', 'https://drive.google.com/uc?export=view&id=1vv91t_o1itAMRRCEjbfhjN8ec8Hn_Ow9'),
(5, 1, 'Basic Hoodie Black', 'Hoodie', 'XXL', '150000', '19', 'https://drive.google.com/uc?export=view&id=1vv91t_o1itAMRRCEjbfhjN8ec8Hn_Ow9'),
(6, 2, 'Black Zipper', 'Zipper', 'S', '75000', '23', 'https://drive.google.com/uc?export=view&id=1-ipMtTBgnSV4p4Y5HICbMGlbBMJMFRvM'),
(7, 2, 'Black Zipper', 'Zipper', 'M', '75000', '22', 'https://drive.google.com/uc?export=view&id=1-ipMtTBgnSV4p4Y5HICbMGlbBMJMFRvM'),
(8, 2, 'Black Zipper', 'Zipper', 'L', '75000', '26', 'https://drive.google.com/uc?export=view&id=1-ipMtTBgnSV4p4Y5HICbMGlbBMJMFRvM'),
(9, 2, 'Black Zipper', 'Zipper', 'XL', '75000', '28', 'https://drive.google.com/uc?export=view&id=1-ipMtTBgnSV4p4Y5HICbMGlbBMJMFRvM'),
(10, 2, 'Black Zipper', 'Zipper', 'XXL', '75000', '24', 'https://drive.google.com/uc?export=view&id=1-ipMtTBgnSV4p4Y5HICbMGlbBMJMFRvM'),
(11, 3, 'Basic Hoodie White', 'Hoodie', 'S', '150000', '32', 'https://drive.google.com/uc?export=view&id=1_oq10nQ4efNqRvj_zPh4yHmIggrUaYlT'),
(12, 3, 'Basic Hoodie White', 'Hoodie', 'M', '150000', '29', 'https://drive.google.com/uc?export=view&id=1_oq10nQ4efNqRvj_zPh4yHmIggrUaYlT'),
(13, 3, 'Basic Hoodie White', 'Hoodie', 'L', '150000', '25', 'https://drive.google.com/uc?export=view&id=1_oq10nQ4efNqRvj_zPh4yHmIggrUaYlT'),
(14, 3, 'Basic Hoodie White', 'Hoodie', 'XL', '150000', '27', 'https://drive.google.com/uc?export=view&id=1_oq10nQ4efNqRvj_zPh4yHmIggrUaYlT'),
(15, 3, 'Basic Hoodie White', 'Hoodie', 'XXL', '150000', '22', 'https://drive.google.com/uc?export=view&id=1_oq10nQ4efNqRvj_zPh4yHmIggrUaYlT'),
(16, 4, 'Dry Hoodie', 'Hoodie', 'S', '250000', '20', 'https://drive.google.com/uc?export=view&id=1_8xrL2Lr2BjDcxZXYWpUk-5mLtldAEQb'),
(17, 4, 'Dry Hoodie', 'Hoodie', 'M', '250000', '17', 'https://drive.google.com/uc?export=view&id=1_8xrL2Lr2BjDcxZXYWpUk-5mLtldAEQb'),
(18, 4, 'Dry Hoodie', 'Hoodie', 'L', '250000', '30', 'https://drive.google.com/uc?export=view&id=1_8xrL2Lr2BjDcxZXYWpUk-5mLtldAEQb'),
(19, 4, 'Dry Hoodie', 'Hoodie', 'XL', '250000', '27', 'https://drive.google.com/uc?export=view&id=1_8xrL2Lr2BjDcxZXYWpUk-5mLtldAEQb'),
(20, 4, 'Dry Hoodie', 'Hoodie', 'XXL', '250000', '15', 'https://drive.google.com/uc?export=view&id=1_8xrL2Lr2BjDcxZXYWpUk-5mLtldAEQb'),
(21, 1, 'Relaxed Fit Hoodie', 'Hoodie', 'S', '20000', '19', 'https://drive.google.com/uc?export=view&id=1YfazvsRCt60sXv1nDoI4EbtgSqKLJd50'),
(22, 1, 'Relaxed Fit Hoodie', 'Hoodie', 'M', '20000', '16', 'https://drive.google.com/uc?export=view&id=1YfazvsRCt60sXv1nDoI4EbtgSqKLJd50'),
(23, 1, 'Relaxed Fit Hoodie', 'Hoodie', 'L', '20000', '22', 'https://drive.google.com/uc?export=view&id=1YfazvsRCt60sXv1nDoI4EbtgSqKLJd50'),
(24, 1, 'Relaxed Fit Hoodie', 'Hoodie', 'XL', '20000', '20', 'https://drive.google.com/uc?export=view&id=1YfazvsRCt60sXv1nDoI4EbtgSqKLJd50'),
(25, 1, 'Relaxed Fit Hoodie', 'Hoodie', 'XXL', '20000', '15', 'https://drive.google.com/uc?export=view&id=1YfazvsRCt60sXv1nDoI4EbtgSqKLJd50'),
(26, 2, 'Cloud Rain Hoodie', 'Hoodie', 'S', '250000', '24', 'https://drive.google.com/uc?export=view&id=1nyLwfkwAIOtMv6k0IdHP38oluh5t5ViG'),
(27, 2, 'Cloud Rain Hoodie', 'Hoodie', 'M', '250000', '20', 'https://drive.google.com/uc?export=view&id=1nyLwfkwAIOtMv6k0IdHP38oluh5t5ViG'),
(28, 2, 'Cloud Rain Hoodie', 'Hoodie', 'L', '250000', '26', 'https://drive.google.com/uc?export=view&id=1nyLwfkwAIOtMv6k0IdHP38oluh5t5ViG'),
(29, 2, 'Cloud Rain Hoodie', 'Hoodie', 'XL', '250000', '23', 'https://drive.google.com/uc?export=view&id=1nyLwfkwAIOtMv6k0IdHP38oluh5t5ViG'),
(30, 2, 'Cloud Rain Hoodie', 'Hoodie', 'XXL', '250000', '14', 'https://drive.google.com/uc?export=view&id=1nyLwfkwAIOtMv6k0IdHP38oluh5t5ViG'),
(31, 3, 'Street Hoodie', 'Street', 'S', '300000', '25', 'https://drive.google.com/uc?export=view&id=1Qt9OXTP4xf3iJKEwrCUU_YIMmifsJ8X6'),
(32, 3, 'Street Hoodie', 'Street', 'M', '300000', '22', 'https://drive.google.com/uc?export=view&id=1Qt9OXTP4xf3iJKEwrCUU_YIMmifsJ8X6'),
(33, 3, 'Street Hoodie', 'Street', 'L', '300000', '27', 'https://drive.google.com/uc?export=view&id=1Qt9OXTP4xf3iJKEwrCUU_YIMmifsJ8X6'),
(34, 3, 'Street Hoodie', 'Street', 'XL', '300000', '30', 'https://drive.google.com/uc?export=view&id=1Qt9OXTP4xf3iJKEwrCUU_YIMmifsJ8X6'),
(35, 3, 'Street Hoodie', 'Street', 'XXL', '300000', '17', 'https://drive.google.com/uc?export=view&id=1Qt9OXTP4xf3iJKEwrCUU_YIMmifsJ8X6'),
(36, 4, 'Basic Hoodie Brown', 'Hoodie', 'S', '150000', '23', 'https://drive.google.com/uc?export=view&id=1QGly-O7HUnRv2RstgQCwUj2-YVvFz73V'),
(37, 4, 'Basic Hoodie Brown', 'Hoodie', 'M', '150000', '21', 'https://drive.google.com/uc?export=view&id=1QGly-O7HUnRv2RstgQCwUj2-YVvFz73V'),
(38, 4, 'Basic Hoodie Brown', 'Hoodie', 'L', '150000', '26', 'https://drive.google.com/uc?export=view&id=1QGly-O7HUnRv2RstgQCwUj2-YVvFz73V'),
(39, 4, 'Basic Hoodie Brown', 'Hoodie', 'XL', '150000', '28', 'https://drive.google.com/uc?export=view&id=1QGly-O7HUnRv2RstgQCwUj2-YVvFz73V'),
(40, 4, 'Basic Hoodie Brown', 'Hoodie', 'XXL', '150000', '14', 'https://drive.google.com/uc?export=view&id=1QGly-O7HUnRv2RstgQCwUj2-YVvFz73V'),
(41, 1, 'Basic Hoodie Blue', 'Hoodie', 'S', '150000', '25', 'https://drive.google.com/uc?export=view&id=1A8eY7DWHlxr4BZcRhzaJ5egly-vs7uDO'),
(42, 1, 'Basic Hoodie Blue', 'Hoodie', 'M', '150000', '30', 'https://drive.google.com/uc?export=view&id=1A8eY7DWHlxr4BZcRhzaJ5egly-vs7uDO'),
(43, 1, 'Basic Hoodie Blue', 'Hoodie', 'L', '150000', '32', 'https://drive.google.com/uc?export=view&id=1A8eY7DWHlxr4BZcRhzaJ5egly-vs7uDO'),
(44, 1, 'Basic Hoodie Blue', 'Hoodie', 'XL', '150000', '35', 'https://drive.google.com/uc?export=view&id=1A8eY7DWHlxr4BZcRhzaJ5egly-vs7uDO'),
(45, 1, 'Basic Hoodie Blue', 'Hoodie', 'XXL', '150000', '26', 'https://drive.google.com/uc?export=view&id=1A8eY7DWHlxr4BZcRhzaJ5egly-vs7uDO'),
(46, 2, 'Pullover Hoodie', 'Pullover', 'S', '150000', '23', 'https://drive.google.com/uc?export=view&id=1K_o5JUHOWw15UauBrbEERrL9wAdpiuYi'),
(47, 2, 'Pullover Hoodie', 'Pullover', 'M', '150000', '26', 'https://drive.google.com/uc?export=view&id=1K_o5JUHOWw15UauBrbEERrL9wAdpiuYi'),
(48, 2, 'Pullover Hoodie', 'Pullover', 'L', '150000', '28', 'https://drive.google.com/uc?export=view&id=1K_o5JUHOWw15UauBrbEERrL9wAdpiuYi'),
(49, 2, 'Pullover Hoodie', 'Pullover', 'XL', '150000', '30', 'https://drive.google.com/uc?export=view&id=1K_o5JUHOWw15UauBrbEERrL9wAdpiuYi'),
(50, 2, 'Pullover Hoodie', 'Pullover', 'XXL', '150000', '21', 'https://drive.google.com/uc?export=view&id=1K_o5JUHOWw15UauBrbEERrL9wAdpiuYi'),
(51, 3, 'Fur Hoodie', 'Fur', 'S', '170000', '21', 'https://drive.google.com/uc?export=view&id=1924wuznxIUKnHYIoEjWqyIQ_SFmjVZCH'),
(52, 3, 'Fur Hoodie', 'Fur', 'M', '170000', '24', 'https://drive.google.com/uc?export=view&id=1924wuznxIUKnHYIoEjWqyIQ_SFmjVZCH'),
(53, 3, 'Fur Hoodie', 'Fur', 'L', '170000', '20', 'https://drive.google.com/uc?export=view&id=1924wuznxIUKnHYIoEjWqyIQ_SFmjVZCH'),
(54, 3, 'Fur Hoodie', 'Fur', 'XL', '170000', '26', 'https://drive.google.com/uc?export=view&id=1924wuznxIUKnHYIoEjWqyIQ_SFmjVZCH'),
(55, 3, 'Fur Hoodie', 'Fur', 'XXL', '170000', '15', 'https://drive.google.com/uc?export=view&id=1924wuznxIUKnHYIoEjWqyIQ_SFmjVZCH'),
(56, 4, 'Sporty Hoodie', 'Sporty', 'S', '160000', '15', 'https://drive.google.com/uc?export=view&id=1Kdxl5UWox8E5kpCp6zDYXCKi6hxUGHco'),
(57, 4, 'Sporty Hoodie', 'Sporty', 'M', '160000', '20', 'https://drive.google.com/uc?export=view&id=1Kdxl5UWox8E5kpCp6zDYXCKi6hxUGHco'),
(58, 4, 'Sporty Hoodie', 'Sporty', 'L', '160000', '21', 'https://drive.google.com/uc?export=view&id=1Kdxl5UWox8E5kpCp6zDYXCKi6hxUGHco'),
(59, 4, 'Sporty Hoodie', 'Sporty', 'XL', '160000', '24', 'https://drive.google.com/uc?export=view&id=1Kdxl5UWox8E5kpCp6zDYXCKi6hxUGHco'),
(60, 4, 'Sporty Hoodie', 'Sporty', 'XXL', '160000', '18', 'https://drive.google.com/uc?export=view&id=1Kdxl5UWox8E5kpCp6zDYXCKi6hxUGHco'),
(61, 1, 'Sleeveless Hoodie', 'Sleeveless', 'S', '145000', '32', 'https://drive.google.com/uc?export=view&id=18hqYvIaqmEnR6Sl8d8qqRd4Fcu47WGV6'),
(62, 1, 'Sleeveless Hoodie', 'Sleeveless', 'M', '145000', '34', 'https://drive.google.com/uc?export=view&id=18hqYvIaqmEnR6Sl8d8qqRd4Fcu47WGV6'),
(63, 1, 'Sleeveless Hoodie', 'Sleeveless', 'L', '145000', '35', 'https://drive.google.com/uc?export=view&id=18hqYvIaqmEnR6Sl8d8qqRd4Fcu47WGV6'),
(64, 1, 'Sleeveless Hoodie', 'Sleeveless', 'XL', '145000', '30', 'https://drive.google.com/uc?export=view&id=18hqYvIaqmEnR6Sl8d8qqRd4Fcu47WGV6'),
(65, 1, 'Sleeveless Hoodie', 'Sleeveless', 'XXL', '145000', '27', 'https://drive.google.com/uc?export=view&id=18hqYvIaqmEnR6Sl8d8qqRd4Fcu47WGV6'),
(66, 2, 'Flanel Hoodie', 'Flanel', 'S', '170000', '35', 'https://drive.google.com/uc?export=view&id=1_SOpL24bFB-NPwGPGABW__FIaYtnGFr4'),
(67, 2, 'Flanel Hoodie', 'Flanel', 'M', '170000', '32', 'https://drive.google.com/uc?export=view&id=1_SOpL24bFB-NPwGPGABW__FIaYtnGFr4'),
(68, 2, 'Flanel Hoodie', 'Flanel', 'L', '170000', '30', 'https://drive.google.com/uc?export=view&id=1_SOpL24bFB-NPwGPGABW__FIaYtnGFr4'),
(69, 2, 'Flanel Hoodie', 'Flanel', 'XL', '170000', '34', 'https://drive.google.com/uc?export=view&id=1_SOpL24bFB-NPwGPGABW__FIaYtnGFr4'),
(70, 2, 'Flanel Hoodie', 'Flanel', 'XXL', '170000', '25', 'https://drive.google.com/uc?export=view&id=1_SOpL24bFB-NPwGPGABW__FIaYtnGFr4'),
(71, 3, 'Knit Hoodie', 'Knit', 'S', '150000', '22', 'https://drive.google.com/uc?export=view&id=1ZdVuAfMqw4YT4RyHjYstjzn_5RFvWI3r'),
(72, 3, 'Knit Hoodie', 'Knit', 'M', '150000', '24', 'https://drive.google.com/uc?export=view&id=1ZdVuAfMqw4YT4RyHjYstjzn_5RFvWI3r'),
(73, 3, 'Knit Hoodie', 'Knit', 'L', '150000', '26', 'https://drive.google.com/uc?export=view&id=1ZdVuAfMqw4YT4RyHjYstjzn_5RFvWI3r'),
(74, 3, 'Knit Hoodie', 'Knit', 'XL', '150000', '28', 'https://drive.google.com/uc?export=view&id=1ZdVuAfMqw4YT4RyHjYstjzn_5RFvWI3r'),
(75, 3, 'Knit Hoodie', 'Knit', 'XXL', '150000', '19', 'https://drive.google.com/uc?export=view&id=1ZdVuAfMqw4YT4RyHjYstjzn_5RFvWI3r'),
(76, 4, 'Basic Hoodie Red', 'Hoodie', 'S', '150000', '25', 'https://drive.google.com/uc?export=view&id=1CvIzXF0cR8eMDFLS3-rCegLB3WxRhT6e'),
(77, 4, 'Basic Hoodie Red', 'Hoodie', 'M', '150000', '30', 'https://drive.google.com/uc?export=view&id=1CvIzXF0cR8eMDFLS3-rCegLB3WxRhT6e'),
(78, 4, 'Basic Hoodie Red', 'Hoodie', 'L', '150000', '32', 'https://drive.google.com/uc?export=view&id=1CvIzXF0cR8eMDFLS3-rCegLB3WxRhT6e'),
(79, 4, 'Basic Hoodie Red', 'Hoodie', 'XL', '150000', '35', 'https://drive.google.com/uc?export=view&id=1CvIzXF0cR8eMDFLS3-rCegLB3WxRhT6e'),
(80, 4, 'Basic Hoodie Red', 'Hoodie', 'XXL', '150000', '19', 'https://drive.google.com/uc?export=view&id=1CvIzXF0cR8eMDFLS3-rCegLB3WxRhT6e'),
(81, 1, 'Basic Hoodie Yellow', 'Hoodie', 'S', '150000', '32', 'https://drive.google.com/uc?export=view&id=1FIAj7IJME6sWgKMJO4GFL1dpe3-UNgMz'),
(82, 1, 'Basic Hoodie Yellow', 'Hoodie', 'M', '150000', '29', 'https://drive.google.com/uc?export=view&id=1FIAj7IJME6sWgKMJO4GFL1dpe3-UNgMz'),
(83, 1, 'Basic Hoodie Yellow', 'Hoodie', 'L', '150000', '25', 'https://drive.google.com/uc?export=view&id=1FIAj7IJME6sWgKMJO4GFL1dpe3-UNgMz'),
(84, 1, 'Basic Hoodie Yellow', 'Hoodie', 'XL', '150000', '27', 'https://drive.google.com/uc?export=view&id=1FIAj7IJME6sWgKMJO4GFL1dpe3-UNgMz'),
(85, 1, 'Basic Hoodie Yellow', 'Hoodie', 'XXL', '150000', '22', 'https://drive.google.com/uc?export=view&id=1FIAj7IJME6sWgKMJO4GFL1dpe3-UNgMz'),
(86, 2, 'Crewneck Hoodie', 'Crewneck', 'S', '160000', '23', 'https://drive.google.com/uc?export=view&id=1hVCaxNIhc9yIiZOz8XTTEcE996hLZ-KQ'),
(87, 2, 'Crewneck Hoodie', 'Crewneck', 'M', '160000', '21', 'https://drive.google.com/uc?export=view&id=1hVCaxNIhc9yIiZOz8XTTEcE996hLZ-KQ'),
(88, 2, 'Crewneck Hoodie', 'Crewneck', 'L', '160000', '26', 'https://drive.google.com/uc?export=view&id=1hVCaxNIhc9yIiZOz8XTTEcE996hLZ-KQ'),
(89, 2, 'Crewneck Hoodie', 'Crewneck', 'XL', '160000', '28', 'https://drive.google.com/uc?export=view&id=1hVCaxNIhc9yIiZOz8XTTEcE996hLZ-KQ'),
(90, 2, 'Crewneck Hoodie', 'Crewneck', 'XXL', '160000', '14', 'https://drive.google.com/uc?export=view&id=1hVCaxNIhc9yIiZOz8XTTEcE996hLZ-KQ'),
(91, 3, 'Jumper Hoodie', 'Jumper', 'S', '150000', '25', 'https://drive.google.com/uc?export=view&id=1dwVqJhw6D1uy65fbNKUmCrLU2nQfE_6a'),
(92, 3, 'Jumper Hoodie ', 'Jumper', 'M', '150000', '30', 'https://drive.google.com/uc?export=view&id=1dwVqJhw6D1uy65fbNKUmCrLU2nQfE_6a'),
(93, 3, 'Jumper Hoodie ', 'Jumper', 'L', '150000', '32', 'https://drive.google.com/uc?export=view&id=1dwVqJhw6D1uy65fbNKUmCrLU2nQfE_6a'),
(94, 3, 'Jumper Hoodie ', 'Jumper', 'XL', '150000', '35', 'https://drive.google.com/uc?export=view&id=1dwVqJhw6D1uy65fbNKUmCrLU2nQfE_6a'),
(95, 3, 'Jumper Hoodie ', 'Jumper', 'XXL', '150000', '26', 'https://drive.google.com/uc?export=view&id=1dwVqJhw6D1uy65fbNKUmCrLU2nQfE_6a'),
(96, 4, 'Basic Hoodie Pink', 'Hoodie', 'S', '150000', '23', 'https://drive.google.com/uc?export=view&id=1aH0Yhx4EiqGHft2l84pybwcFuCMs_jUQ'),
(97, 4, 'Basic Hoodie Pink', 'Hoodie', 'M', '150000', '26', 'https://drive.google.com/uc?export=view&id=1aH0Yhx4EiqGHft2l84pybwcFuCMs_jUQ'),
(98, 4, 'Basic Hoodie Pink', 'Hoodie', 'L', '150000', '28', 'https://drive.google.com/uc?export=view&id=1aH0Yhx4EiqGHft2l84pybwcFuCMs_jUQ'),
(99, 4, 'Basic Hoodie Pink', 'Hoodie', 'XL', '150000', '30', 'https://drive.google.com/uc?export=view&id=1aH0Yhx4EiqGHft2l84pybwcFuCMs_jUQ'),
(100, 4, 'Basic Hoodie Pink', 'Hoodie', 'XXL', '150000', '20', 'https://drive.google.com/uc?export=view&id=1aH0Yhx4EiqGHft2l84pybwcFuCMs_jUQ');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `idOwner` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`idOwner`, `username`, `password`) VALUES
(1, 'arya', 'arya1234');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int NOT NULL,
  `idUser` int NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` int NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `idUser`, `tanggal_pembelian`, `total_pembelian`, `alamat`) VALUES
(1, 1, '2022-12-31', 150000, ''),
(16, 2, '2022-12-31', 150000, ''),
(17, 5, '2022-12-31', 550000, ''),
(18, 24, '2023-01-01', 500000, 'Jl. Telekomunikasi. 1, Terusan Buahbatu - Bojongsoang, Telkom University, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257. No Penerima: (022) 7564108'),
(19, 8, '2023-01-01', 715000, 'BTN Pasir Sembung Blok C 30, Sirnagalih, Kec. Cilaku, Kabupaten Cianjur, Jawa Barat, 43285.\r\nNo HP: 085798169697'),
(20, 17, '2023-01-01', 620000, 'Perumahan Bekasi Jaya Indah, Duren Jaya, Bekasi Timur, Bekasi City, West Java\r\nNo HP: 08123456789'),
(21, 22, '2023-01-01', 300000, 'Jl. Merdeka No.56, Citarum, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40115\r\nNo HP: (022) 4230850'),
(22, 2, '2023-01-02', 150000, 'Rumah gw'),
(23, 105, '2023-01-02', 150000, 'jalan jalaln '),
(24, 102, '2023-01-02', 150000, 'Jl. Telekomunikasi Jl. Terusan Buah Batu, Sukapura, Kost Pondok Asmara');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_produk`
--

CREATE TABLE `pembelian_produk` (
  `id_pembelian_produk` int NOT NULL,
  `id_pembelian` int NOT NULL,
  `kodeHoodie` int NOT NULL,
  `jumlah` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembelian_produk`
--

INSERT INTO `pembelian_produk` (`id_pembelian_produk`, `id_pembelian`, `kodeHoodie`, `jumlah`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 1),
(13, 16, 2, 1),
(14, 17, 2, 1),
(15, 17, 12, 1),
(16, 17, 28, 1),
(17, 18, 19, 1),
(18, 18, 27, 1),
(19, 19, 17, 1),
(20, 19, 38, 1),
(21, 19, 53, 1),
(22, 19, 62, 1),
(23, 20, 8, 2),
(24, 20, 32, 1),
(25, 20, 68, 1),
(26, 21, 96, 1),
(27, 21, 71, 1),
(28, 22, 2, 1),
(29, 23, 1, 1),
(30, 24, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `reviewhoodie`
--

CREATE TABLE `reviewhoodie` (
  `idReview` int NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `rating` int DEFAULT NULL,
  `komentar` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviewhoodie`
--

INSERT INTO `reviewhoodie` (`idReview`, `username`, `rating`, `komentar`) VALUES
(4, 'yaya', 5, 'Bahannya bagus, adminnya ramah, mantap'),
(5, 'Raihan', 3, 'adminnya mangstab'),
(6, 'ingrid', 1, 'pengirimannya lama, pembayarannya susah'),
(7, 'clinton', 4, 'ya pokoknya bagus.'),
(8, 'drake', 5, 'desain hoodienya bagus'),
(9, 'clark', 5, 'hmmm oke sih'),
(10, 'madewijaya', 5, 'aku suka sekali <3'),
(11, 'aryafikriii', 4, 'Mantap');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUser` int NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUser`, `fullname`, `username`, `password`) VALUES
(1, 'Yaya Aja', 'yaya', 'aya1234'),
(2, 'Vanna Acosta', 'vanna', 'vanna1234'),
(3, 'Ingrid Mueller', 'ingrid', 'ingrid1234'),
(4, 'Clinton Valentine', 'clinton', 'clinton1234'),
(5, 'Drake Welch', 'drake', 'drake1234'),
(6, 'Aquila Sawyer', 'aquila', 'aquila1234'),
(7, 'Caleb Christensen', 'caleb', 'caleb1234'),
(8, 'Damian Taylor', 'damian', 'damian1234'),
(9, 'Nina Rowe', 'nina', 'nina1234'),
(10, 'dominic Mccarthy', 'dominic', 'dominic1234'),
(11, 'Indigo Reid', 'indigo', 'indigo1234'),
(12, 'Anastasia Conner', 'anastasia', 'anastasia1234'),
(13, 'Keefe Higgins', 'keefe', 'keefe1234'),
(14, 'Ulric Gilmore', 'ulric', 'ulric1234'),
(15, 'jonah Goff', 'jonah', 'jonah1234'),
(16, 'Lysandra Preston', 'lysandra', 'lysandra1234'),
(17, 'Fachrul Febriana', 'arul', 'arul1234'),
(18, 'Alif Faidhil', 'alif', 'alip1234'),
(19, 'Raihan Atsal', 'rehan', 'raihan1234'),
(20, 'Clark Gates', 'clark', 'clark1234'),
(21, 'Hasad Mullins', 'hasad', 'hasad1234'),
(22, 'Jamalia Navarro', 'jamalia', 'jamalia1234'),
(23, 'Charles Carroll', 'charles', 'charles1234'),
(24, 'Yuri Mccar', 'yuri', 'yuri1234'),
(25, 'tatyana Baxter', 'tatyana', 'tatyana1234'),
(26, 'Vance Meyer', 'vance', 'vance1234'),
(27, 'Zenia Drake', 'zenia', 'enia1234'),
(28, 'Aidan Harrison', 'aidan', 'aidan1234'),
(29, 'Irma Cole', 'irma', 'irma1234'),
(30, 'Ella Duke', 'ella', 'ella1234'),
(31, 'Hilda Blanchard', 'hilda', 'hilda1234'),
(32, 'Marsden Mcguire', 'marsden', 'marsden1234'),
(33, 'Basia Nichols', 'hilda', 'basia1234'),
(34, 'Idona Bradley', 'idona', 'idona1234'),
(35, 'Emmanuel Harrell', 'emmanuel', 'emmanuel1234'),
(36, 'Otto Glenn', 'otto', 'otto1234'),
(37, 'Forrest Mcmahon', 'forrest', 'forrest1234'),
(38, 'pascale Graves', 'pascale', 'pascale1234'),
(39, 'Salvador Joyce', 'salvador', 'salvador1234'),
(40, 'Kim Parsons', 'kim', 'kim1234'),
(41, 'Bryar Graves', 'bryar', 'bryar1234'),
(42, 'Athena Meadows', 'athena', 'athena1234'),
(43, 'Callum Galloway', 'callum', 'Callum1234'),
(44, 'Tate Diaz', 'tate', 'tate1234'),
(45, 'Damon Maldonado', 'damon', 'damon1234'),
(46, 'Tanek Smith', 'Tanek', 'Tanek1234'),
(47, 'Alden Payne', 'Alden', 'Alden1234'),
(48, 'Doris Ramsey', 'Doris', 'Doris1234'),
(49, 'Serina Todd', 'Todd', 'Todd1234'),
(50, 'Tasha Jones', 'Tasha', 'Tasha1234'),
(51, 'Gillian Bates', 'Gillian', 'Gillian1234'),
(52, 'Fritz Velez', 'Fritz', 'Fritz1234'),
(53, 'Sydnee Coffey', 'Coffey', 'Coffey1234'),
(54, 'Brian Kaufman', 'Kaufman', 'Kaufman1234'),
(55, 'Martina Cohen', 'Martina', 'Martina1234'),
(56, 'Diana York', 'Diana', 'Diana1234'),
(57, 'Vivian Pearson', 'Vivian', 'Vivian1234'),
(58, 'Dacey Graves', 'Dacey', 'Dacey1234'),
(59, 'Bell Wolf', 'Bell', 'Bell1234'),
(60, 'Ignacia Fulton', 'ignacia', 'ignacia1234'),
(61, 'Shelly White', 'Shelly', 'Shelly1234'),
(62, 'Mia Gardner', 'Gardner', 'Gardner1234'),
(63, 'Yolanda Osborn', 'Yolanda', 'Yolanda1234'),
(64, 'Aspen Parrish', 'Aspen', 'Aspen1234'),
(65, 'Tanek Vargas', 'Tanek', 'Tanek1234'),
(66, 'Dominic Burt', 'Dominic', 'Dominic1234'),
(67, 'Felicia Donaldson', 'Felicia', 'Felicia1234'),
(68, 'Logan Hensley', 'Logan', 'Logan1234'),
(69, 'Addison Spears', 'addison', 'addison1234'),
(70, 'Henry Larson', 'Henry', 'Henry1234'),
(71, 'Seth Wilkerson', 'Seth', 'Seth1234'),
(72, 'Kieran Mathis', 'Kieran', 'Kieran1234'),
(73, 'Brian Holman', 'Brian', 'Brian1234'),
(74, 'Francis Munoz', 'Francis', 'Francis1234'),
(75, 'Bertha West', 'Bertha', 'Bertha1234'),
(76, 'Gabriel Holland', 'Gabriel', 'Gabriel1234'),
(77, 'Hoyt Carrillo', 'Hoyt', 'Hoyt1234'),
(78, 'Charles Watson', 'Watsons', 'Watsons1234'),
(79, 'Christopher Lindsay', 'Lindsay', 'Lindsay1234'),
(80, 'Reagan Bennett', 'Bennett', 'Bennett12345'),
(81, 'Barrett Barrera', 'Barrera', 'Barrera1234'),
(82, 'Dorian Fuller', 'orian', 'orian1234'),
(83, 'Inga Orr', 'nga', 'nga1234'),
(84, 'Adam Tucker', 'ucker', 'ucker1234'),
(85, 'Christopher Sears', 'ears', 'ears1234'),
(86, 'Callie Howell', 'owell', 'owell1234'),
(87, 'Mara Whitehead', 'hitehead', 'hitehead1234'),
(88, 'Karly Hartman', 'Karly', 'Karly1234'),
(89, 'Lesley Lester', 'Lesley', 'Lesley1234'),
(90, 'Ori Vaughn', 'Ori', 'Ori1234'),
(91, 'Beau Durham', 'urham', 'urham1234'),
(92, 'Alika Malone', 'Malone', 'Malone1234'),
(93, 'Carol Bright', 'right', 'right1234'),
(94, 'Christopher Maynard', 'aynard', 'aynard1234'),
(95, 'Lael Newman', 'Newman', 'Newman1234'),
(96, 'Fulton Kramer', 'ulton', 'ulton1234'),
(97, 'Joshua Hewitt', 'oshua', 'oshua1234'),
(98, 'Cade Baldwin', 'adeBal', 'adeBal1234'),
(99, 'Zorita Hayden', 'oritaH', 'oritaH1234'),
(100, 'Germaine Barlow', 'maine', 'maine1234'),
(102, 'arya fikriansyah', 'aryafikriii', 'arya1234'),
(103, 'satria aji', 'satriaaa', 'satria1234'),
(104, 'dewa made wijaya ', 'madewijayya ', 'Jaya2202'),
(105, 'Dewa Made Wijaya', 'madewijaya', 'jaya2202'),
(106, 'Ryan Oktaviandi Susilo Wibowo', 'bukanyayan', 'rahasia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `hoodie`
--
ALTER TABLE `hoodie`
  ADD PRIMARY KEY (`kodeHoodie`),
  ADD KEY `idAdmin` (`idAdmin`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`idOwner`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_produk`);

--
-- Indexes for table `reviewhoodie`
--
ALTER TABLE `reviewhoodie`
  ADD PRIMARY KEY (`idReview`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hoodie`
--
ALTER TABLE `hoodie`
  MODIFY `kodeHoodie` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `idOwner` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  MODIFY `id_pembelian_produk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `reviewhoodie`
--
ALTER TABLE `reviewhoodie`
  MODIFY `idReview` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hoodie`
--
ALTER TABLE `hoodie`
  ADD CONSTRAINT `hoodie_ibfk_1` FOREIGN KEY (`idAdmin`) REFERENCES `admin` (`idAdmin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
