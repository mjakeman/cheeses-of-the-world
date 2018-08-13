-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2018 at 11:35 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cheese_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tcheeses`
--

CREATE TABLE `tcheeses` (
  `cheese_id` int(11) NOT NULL,
  `cheese_name` text NOT NULL,
  `cheese_price` float NOT NULL DEFAULT '9.99',
  `cheese_description` text NOT NULL,
  `cheese_flavour_id` int(11) NOT NULL,
  `cheese_milk_type_id` int(11) NOT NULL,
  `cheese_origin_id` int(11) NOT NULL,
  `cheese_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tcheeses`
--

INSERT INTO `tcheeses` (`cheese_id`, `cheese_name`, `cheese_price`, `cheese_description`, `cheese_flavour_id`, `cheese_milk_type_id`, `cheese_origin_id`, `cheese_image`) VALUES
(1, 'Cheddar', 12.95, 'Delicious English Cheddar hand-crafted in Somerset for your personal enjoyment.', 1, 1, 47, 'Cheddar-1534062924.png'),
(2, 'Stilton', 34.95, 'Authentic Blue Stilton, crafted in the county of Derbyshire. Certified origin.', 5, 1, 47, 'Stilton-1534062946.png'),
(3, 'Brie', 7.95, 'Authentic French Brie crafted in the North of France. Pasteurised.', 1, 1, 15, 'Brie-1534062953.png'),
(4, 'Camembert', 6.49, 'Classic French Camembert for your enjoyment. Made in Camembert, Normandy - Certified Origin.', 1, 1, 15, 'Camembert-1534062959.png'),
(5, 'Bleu de Gex', 17.95, 'Soft, creamy, and powerful. This exclusive blue cheese has been handcrafted for your personal enjoyment in Jura, France. Unpasteurised.', 4, 1, 15, 'Bleu de Gex-1534062966.png'),
(6, 'Tyrolean Grey', 11.95, 'Authentic Tyrolean grey cheese from the Tyrolean Alps, Austria. Certified Origin.', 5, 1, 4, 'Tyrolean Grey Cheese-1534055930.png'),
(7, 'Feta', 6.45, 'Crafted in Greece, this Feta Cheese is ideal for all your salad-related needs.', 4, 4, 18, 'Feta-1534064313.png'),
(8, 'Edam', 4.95, 'One of the world\'s most popular cheeses, our Goat\'s milk Edam comes direct to you from the Netherlands.', 2, 2, 33, 'Edam-1534064816.png'),
(9, 'GruyÃ¨re', 12.95, 'Delicious, Nutty GruyÃ¨re hand-crafted in Fribourg, Switzerland. Certified Origin.', 1, 1, 45, 'GruyÃ¨re-1534064982.png'),
(10, 'Emmental', 14.95, 'Dating back to ancient times, Emmental is one of the longest produced cheeses in the world. Our cheese comes straight from Emmental, Switzerland, to give you the authentic taste of the Swiss.', 2, 1, 45, 'Emmental-1534065097.png'),
(11, 'Halloumi', 4.95, 'A popular Middle Eastern cheese best eaten grilled.', 4, 3, 10, 'Halloumi-1534065411.png'),
(12, 'Akkawi', 7.94, 'A Soft and Salty cheese crafted in Acre, Israel.', 1, 1, 84, 'Akkawi-1534065561.png'),
(13, 'Domiati', 6.95, 'The most popular cheese in Egypt, this Domiati has been perfectly crafted to find just the right balance of salty goodness.', 1, 1, 81, 'Domiati-1534065754.png'),
(14, 'Baladi', 11.95, 'Crafted in the middle east, this cheese has a mild, yet rich flavour.', 2, 2, 94, 'Baladi-1534066092.png'),
(15, 'Shanklish', 19.93, 'Exclusive, aged Shanklish for your tasting pleasure.', 5, 1, 94, 'Shanklish-1534066237.png'),
(16, 'Paneer', 6.95, 'Fresh, hand-crafted Indian Cottage Cheese.', 1, 1, 54, 'Paneer-1534066519.png'),
(17, 'Sakura', 16.95, 'The Cherry Blossom Cheese. Award winning Japanese soft cheese, flavoured with mountain cherry leaves.', 1, 1, 56, 'Sakura-1534066721.png'),
(18, 'Cheddar (Royal Addition)', 34.95, 'Released in 2013 to commemorate the birth of Prince George, &quot;Westminster William and Kate Royal Addition Cheddar&quot; is an exclusive Cheddar that is guaranteed to blow away all others.', 1, 1, 47, 'Royal Addition Cheddar-1534067029.png'),
(19, 'Oka', 12.95, 'A soft and creamy cheese with a distinct flavour.', 1, 1, 99, 'Oka-1534067428.png'),
(20, 'Monterey Jack', 9.95, 'A semi-hard cheese made in Monterey, California.', 4, 1, 102, 'Monterey Jack-1534067614.png'),
(21, 'Cotija', 8.45, 'A hard cow\'s milk cheese from Mexico.', 4, 1, 101, 'Cotija-1534067866.png'),
(22, 'Queijo Branco', 6.95, 'A creamy, soft, white cheese from Brazil.', 4, 1, 125, 'Queijo Branco-1534068146.png'),
(23, 'Cremoso', 5.45, 'Argentina\'s most popular cheese, our Cremoso is full of mild and creamy goodness.', 2, 1, 123, 'Cremoso-1534068390.png'),
(24, 'Cheddar (New Zealand)', 7.45, 'Delicious Cheddar produced in Wellington, New Zealand.', 2, 1, 142, 'New Zealand Cheddar-1534069318.png'),
(25, 'Wagasi', 13.95, 'A common cheese in Benin, Africa. Soft in texture and mild in flavour.', 2, 1, 151, 'Wagasi-1534069584.png');

-- --------------------------------------------------------

--
-- Table structure for table `tcountries`
--

CREATE TABLE `tcountries` (
  `country_id` int(11) NOT NULL,
  `country_name` text NOT NULL,
  `country_region_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tcountries`
--

INSERT INTO `tcountries` (`country_id`, `country_name`, `country_region_id`) VALUES
(1, 'Albania', 1),
(2, 'Andorra', 1),
(3, 'Armenia', 1),
(4, 'Austria', 1),
(5, 'Belarus', 1),
(6, 'Belgium', 1),
(7, 'Bosnia and Herzegovina', 1),
(8, 'Bulgaria', 1),
(9, 'Croatia', 1),
(10, 'Cyprus', 1),
(11, 'Czech Republic', 1),
(12, 'Denmark', 1),
(13, 'Estonia', 1),
(14, 'Finland', 1),
(15, 'France', 1),
(16, 'Georgia', 1),
(17, 'Germany', 1),
(18, 'Greece', 1),
(19, 'Hungary', 1),
(20, 'Iceland', 1),
(21, 'Ireland', 1),
(22, 'Italy', 1),
(23, 'Kosovo', 1),
(24, 'Latvia', 1),
(25, 'Liechtenstein', 1),
(26, 'Lithuania', 1),
(27, 'Luxembourg', 1),
(28, 'Macedonia', 1),
(29, 'Malta', 1),
(30, 'Moldova', 1),
(31, 'Monaco', 1),
(32, 'Montenegro', 1),
(33, 'Netherlands', 1),
(34, 'Norway', 1),
(35, 'Poland', 1),
(36, 'Portugal', 1),
(37, 'Romania', 1),
(38, 'Russia', 1),
(39, 'San Marino', 1),
(40, 'Serbia', 1),
(41, 'Slovakia', 1),
(42, 'Slovenia', 1),
(43, 'Spain', 1),
(44, 'Sweden', 1),
(45, 'Switzerland', 1),
(46, 'Ukraine', 1),
(47, 'United Kingdom', 1),
(48, 'Vatican City', 1),
(49, 'Bangladesh', 2),
(50, 'Bhutan', 2),
(51, 'Brunei', 2),
(52, 'Cambodia', 2),
(53, 'China', 2),
(54, 'India', 2),
(55, 'Indonesia', 2),
(56, 'Japan', 2),
(57, 'Kazakhstan', 2),
(58, 'North Korea', 2),
(59, 'South Korea', 2),
(60, 'Kyrgyzstan', 2),
(61, 'Laos', 2),
(62, 'Malaysia', 2),
(63, 'Maldives', 2),
(64, 'Mongolia', 2),
(65, 'Myanmar', 2),
(66, 'Nepal', 2),
(67, 'Philippines', 2),
(68, 'Singapore', 2),
(69, 'Sri Lanka', 2),
(70, 'Taiwan', 2),
(71, 'Tajikistan', 2),
(72, 'Thailand', 2),
(73, 'Turkmenistan', 2),
(74, 'Uzbekistan', 2),
(75, 'Vietnam', 2),
(76, 'Pakistan', 2),
(77, 'Afghanistan', 3),
(78, 'Algeria', 3),
(79, 'Azerbaijan', 3),
(80, 'Bahrain', 3),
(81, 'Egypt', 3),
(82, 'Iran', 3),
(83, 'Iraq', 3),
(84, 'Israel', 3),
(85, 'Jordan', 3),
(86, 'Kuwait', 3),
(87, 'Lebanon', 3),
(88, 'Libya', 3),
(89, 'Morocco', 3),
(90, 'Oman', 3),
(91, 'Qatar', 3),
(92, 'Saudi Arabia', 3),
(93, 'Somalia', 3),
(94, 'Syria', 3),
(95, 'Tunisia', 3),
(96, 'Turkey', 3),
(97, 'United Arab Emirates', 3),
(98, 'Yemen', 3),
(99, 'Canada', 4),
(100, 'Greenland', 4),
(101, 'Mexico', 5),
(102, 'United States of America', 4),
(103, 'Antigua and Barbuda', 5),
(104, 'Bahamas', 5),
(105, 'Barbados', 5),
(106, 'Belize', 5),
(107, 'Costa Rica', 5),
(108, 'Cuba', 5),
(109, 'Dominica', 5),
(110, 'Dominican Republic', 5),
(111, 'El Salvador', 5),
(112, 'Grenada', 5),
(113, 'Guatemala', 5),
(114, 'Haiti', 5),
(115, 'Honduras', 5),
(116, 'Jamaica', 5),
(117, 'Nicaragua', 5),
(118, 'Panama', 5),
(119, 'Saint Kitts and Nevis', 5),
(120, 'Saint Lucia', 5),
(121, 'Saint Vincent and the Grenadines', 5),
(122, 'Trinidad and Tobago', 5),
(123, 'Argentina', 6),
(124, 'Bolivia', 6),
(125, 'Brazil', 6),
(126, 'Chile', 6),
(127, 'Colombia', 6),
(128, 'Ecuador', 6),
(129, 'Guyana', 6),
(130, 'Paraguay', 6),
(131, 'Peru', 6),
(132, 'Suriname', 6),
(133, 'Uruguay', 6),
(134, 'Venezuela', 6),
(135, 'Australia', 7),
(136, 'East Timor', 7),
(137, 'Fiji', 7),
(138, 'Kiribati', 7),
(139, 'Marshall Islands', 7),
(140, 'Federated States of Micronesia', 7),
(141, 'Nauru', 7),
(142, 'New Zealand', 7),
(143, 'Palau', 7),
(144, 'Papua New Guinea', 7),
(145, 'Samoa', 7),
(146, 'Solomon Islands', 7),
(147, 'Tonga', 7),
(148, 'Tuvalu', 7),
(149, 'Vanuatu', 7),
(150, 'Angola', 8),
(151, 'Benin', 8),
(152, 'Botswana', 8),
(153, 'Burkina Faso', 8),
(154, 'Burundi', 8),
(155, 'Cameroon', 8),
(156, 'Cape Verde', 8),
(157, 'Central African Republic', 8),
(158, 'Chad', 8),
(159, 'Comoros', 8),
(160, 'Republic of the Congo', 8),
(161, 'Democratic Republic of the Congo', 8),
(162, 'Cote d\'Ivoire', 8),
(163, 'Djibouti', 8),
(164, 'Equatorial Guinea', 8),
(165, 'Eritrea', 8),
(166, 'Zimbabwe', 8),
(167, 'Ethiopia', 8),
(168, 'Gabon', 8),
(169, 'Gambia', 8),
(170, 'Ghana', 8),
(171, 'Guinea', 8),
(172, 'Guinea-Bissau', 8),
(173, 'Kenya', 8),
(174, 'Lesotho', 8),
(175, 'Liberia', 8),
(176, 'Madagascar', 8),
(177, 'Malawi', 8),
(178, 'Mali', 8),
(179, 'Mauritania', 8),
(180, 'Mauritius', 8),
(181, 'Mozambique', 8),
(182, 'Namibia', 8),
(183, 'Niger', 8),
(184, 'Nigeria', 8),
(185, 'Rwanda', 8),
(186, 'Sao Tome and Principe', 8),
(187, 'Senegal', 8),
(188, 'Seychelles', 8),
(189, 'Sierra Leone', 8),
(190, 'South Africa', 8),
(191, 'South Sudan', 8),
(192, 'Sudan', 8),
(193, 'Swaziland', 8),
(194, 'Tanzania', 8),
(195, 'Togo', 8),
(196, 'Uganda', 8),
(197, 'Zambia', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tflavour`
--

CREATE TABLE `tflavour` (
  `flavour_id` int(11) NOT NULL,
  `flavour_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tflavour`
--

INSERT INTO `tflavour` (`flavour_id`, `flavour_name`) VALUES
(1, 'Medium'),
(2, 'Mild'),
(4, 'Strong'),
(5, 'Very Strong');

-- --------------------------------------------------------

--
-- Table structure for table `tmilktype`
--

CREATE TABLE `tmilktype` (
  `milk_type_id` int(11) NOT NULL,
  `milk_type_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmilktype`
--

INSERT INTO `tmilktype` (`milk_type_id`, `milk_type_name`) VALUES
(1, 'Cow'),
(2, 'Goat'),
(3, 'Mixed'),
(4, 'Sheep');

-- --------------------------------------------------------

--
-- Table structure for table `tregions`
--

CREATE TABLE `tregions` (
  `region_id` int(11) NOT NULL,
  `region_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tregions`
--

INSERT INTO `tregions` (`region_id`, `region_name`) VALUES
(1, 'Europe'),
(2, 'Asia'),
(3, 'Middle East & North Africa'),
(4, 'North America'),
(5, 'Central America'),
(6, 'South America'),
(7, 'Oceania'),
(8, 'Africa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tcheeses`
--
ALTER TABLE `tcheeses`
  ADD PRIMARY KEY (`cheese_id`),
  ADD KEY `origin_fkey` (`cheese_origin_id`) USING BTREE,
  ADD KEY `milk_type_fkey` (`cheese_milk_type_id`) USING BTREE,
  ADD KEY `flavour_fkey` (`cheese_flavour_id`) USING BTREE;

--
-- Indexes for table `tcountries`
--
ALTER TABLE `tcountries`
  ADD PRIMARY KEY (`country_id`),
  ADD KEY `region_fkey` (`country_region_id`) USING BTREE;

--
-- Indexes for table `tflavour`
--
ALTER TABLE `tflavour`
  ADD PRIMARY KEY (`flavour_id`);

--
-- Indexes for table `tmilktype`
--
ALTER TABLE `tmilktype`
  ADD PRIMARY KEY (`milk_type_id`);

--
-- Indexes for table `tregions`
--
ALTER TABLE `tregions`
  ADD PRIMARY KEY (`region_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tcheeses`
--
ALTER TABLE `tcheeses`
  MODIFY `cheese_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tcountries`
--
ALTER TABLE `tcountries`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;

--
-- AUTO_INCREMENT for table `tflavour`
--
ALTER TABLE `tflavour`
  MODIFY `flavour_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tmilktype`
--
ALTER TABLE `tmilktype`
  MODIFY `milk_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tregions`
--
ALTER TABLE `tregions`
  MODIFY `region_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tcheeses`
--
ALTER TABLE `tcheeses`
  ADD CONSTRAINT `flavour` FOREIGN KEY (`cheese_flavour_id`) REFERENCES `tflavour` (`flavour_id`),
  ADD CONSTRAINT `milk_type` FOREIGN KEY (`cheese_milk_type_id`) REFERENCES `tmilktype` (`milk_type_id`),
  ADD CONSTRAINT `origin` FOREIGN KEY (`cheese_origin_id`) REFERENCES `tcountries` (`country_id`);

--
-- Constraints for table `tcountries`
--
ALTER TABLE `tcountries`
  ADD CONSTRAINT `region` FOREIGN KEY (`country_region_id`) REFERENCES `tregions` (`region_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
