-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 04, 2020 at 03:58 PM
-- Server version: 10.1.44-MariaDB-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paidrqdf_carsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `aia`
--

CREATE TABLE `aia` (
  `id` int(11) NOT NULL,
  `project_name` text,
  `project_number` text,
  `contract_number` text,
  `contract_date` text,
  `agreement_number` varchar(20) DEFAULT NULL,
  `period_to` varchar(20) DEFAULT NULL,
  `period_from` varchar(20) DEFAULT NULL,
  `job_no` text,
  `to_type` text,
  `to_name` text,
  `to_address1` text,
  `to_address2` text,
  `to_city` text,
  `to_state` text,
  `to_zip` text,
  `to_country` text,
  `from_type` text,
  `from_name` text,
  `from_address1` text,
  `from_address2` text,
  `from_city` text,
  `from_state` text,
  `from_zip` text,
  `from_country` text,
  `retainage` text,
  `work_description` text,
  `scheduled_value` text,
  `period_value` text,
  `bill_percentage` text,
  `created_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `contract_for` varchar(200) DEFAULT NULL,
  `o_work_description` text,
  `o_scheduled_value` text,
  `o_period_value` text,
  `o_bill_percentage` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aia`
--

INSERT INTO `aia` (`id`, `project_name`, `project_number`, `contract_number`, `contract_date`, `agreement_number`, `period_to`, `period_from`, `job_no`, `to_type`, `to_name`, `to_address1`, `to_address2`, `to_city`, `to_state`, `to_zip`, `to_country`, `from_type`, `from_name`, `from_address1`, `from_address2`, `from_city`, `from_state`, `from_zip`, `from_country`, `retainage`, `work_description`, `scheduled_value`, `period_value`, `bill_percentage`, `created_time`, `contract_for`, `o_work_description`, `o_scheduled_value`, `o_period_value`, `o_bill_percentage`) VALUES
(51, 'tester', 'yt-234', 'te-1233', '03/04/2020', 't-234', '03/09/2020', '03/09/2020', 'vf-23', '3', '234', 'address...', NULL, 'moscow', 'test', '34256', 'RU', '1', 'from name', 'from address', NULL, 'moscow', 'state', '30495', 'US', '100', '[\"www\",\"33\",\"44\",null]', '[\"100\",\"200\",\"500\",\"600\"]', '[\"0\",null,null,null]', '[\"10\",\"20\",\"10\",\"20\"]', '2020-03-04 04:09:42', 't-345', '[null,null]', '[\"200\",\"300\"]', '[\"0\",null]', '[\"10\",\"30\"]');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `code` varchar(8) DEFAULT NULL,
  `capital` varchar(30) DEFAULT NULL,
  `name` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `code`, `capital`, `name`) VALUES
(1, 'AF', 'Kabul', 'Afghanistan'),
(2, 'AX', 'Mariehamn', 'Aland Islands'),
(3, 'AL', 'Tirana', 'Albania'),
(4, 'DZ', 'Algiers', 'Algeria'),
(5, 'AS', 'Pago Pago', 'American Samoa'),
(6, 'AD', 'Andorra la Vella', 'Andorra'),
(7, 'AO', 'Luanda', 'Angola'),
(8, 'AI', 'The Valley', 'Anguilla'),
(9, 'AG', 'St. John\'s', 'Antigua and Barbuda'),
(10, 'AR', 'Buenos Aires', 'Argentina'),
(11, 'AM', 'Yerevan', 'Armenia'),
(12, 'AW', 'Oranjestad', 'Aruba'),
(13, 'AU', 'Canberra', 'Australia'),
(14, 'AT', 'Vienna', 'Austria'),
(15, 'AZ', 'Baku', 'Azerbaijan'),
(16, 'BS', 'Nassau', 'Bahamas'),
(17, 'BH', 'Manama', 'Bahrain'),
(18, 'BD', 'Dhaka', 'Bangladesh'),
(19, 'BB', 'Bridgetown', 'Barbados'),
(20, 'BY', 'Minsk', 'Belarus'),
(21, 'BE', 'Brussels', 'Belgium'),
(22, 'BZ', 'Belmopan', 'Belize'),
(23, 'BJ', 'Porto-Novo', 'Benin'),
(24, 'BM', 'Hamilton', 'Bermuda'),
(25, 'BT', 'Thimphu', 'Bhutan'),
(26, 'BO', 'Sucre', 'Bolivia'),
(27, 'BQ', 'Kralendijk', 'Bonaire, Sint Eustatius and Saba'),
(28, 'BA', 'Sarajevo', 'Bosnia and Herzegovina'),
(29, 'BW', 'Gaborone', 'Botswana'),
(30, 'BR', 'Brasília', 'Brazil'),
(31, 'IO', 'Diego Garcia', 'British Indian Ocean Territory'),
(32, 'BN', 'Bandar Seri Begawan', 'Brunei Darussalam'),
(33, 'BG', 'Sofia', 'Bulgaria'),
(34, 'BF', 'Ouagadougou', 'Burkina Faso'),
(35, 'BI', 'Bujumbura', 'Burundi'),
(36, 'CV', 'Praia', 'Cabo Verde'),
(37, 'KH', 'Phnom Penh', 'Cambodia'),
(38, 'CM', 'Yaoundé', 'Cameroon'),
(39, 'CA', 'Ottawa', 'Canada'),
(40, 'KY', 'George Town', 'Cayman Islands'),
(41, 'CF', 'Bangui', 'Central African Republic'),
(42, 'TD', 'N\'Djamena', 'Chad'),
(43, 'CL', 'Santiago', 'Chile'),
(44, 'CN', 'Beijing', 'China'),
(45, 'CX', 'Flying Fish Cove', 'Christmas Island'),
(46, 'CC', 'West Island', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Bogotá', 'Colombia'),
(48, 'KM', 'Moroni', 'Comoros'),
(49, 'CK', 'Avarua', 'Cook Islands'),
(50, 'CR', 'San José', 'Costa Rica'),
(51, 'HR', 'Zagreb', 'Croatia'),
(52, 'CU', 'Havana', 'Cuba'),
(53, 'CW', 'Willemstad', 'Curaçao'),
(54, 'CY', 'Nicosia', 'Cyprus'),
(55, 'CZ', 'Prague', 'Czech Republic'),
(56, 'CI', 'Yamoussoukro', 'Côte d\'Ivoire'),
(57, 'CD', 'Kinshasa', 'Democratic Republic of the Congo'),
(58, 'DK', 'Copenhagen', 'Denmark'),
(59, 'DJ', 'Djibouti', 'Djibouti'),
(60, 'DM', 'Roseau', 'Dominica'),
(61, 'DO', 'Santo Domingo', 'Dominican Republic'),
(62, 'EC', 'Quito', 'Ecuador'),
(63, 'EG', 'Cairo', 'Egypt'),
(64, 'SV', 'San Salvador', 'El Salvador'),
(65, 'GQ', 'Malabo', 'Equatorial Guinea'),
(66, 'ER', 'Asmara', 'Eritrea'),
(67, 'EE', 'Tallinn', 'Estonia'),
(68, 'ET', 'Addis Ababa', 'Ethiopia'),
(69, 'FK', 'Stanley', 'Falkland Islands'),
(70, 'FO', 'Tórshavn', 'Faroe Islands'),
(71, 'FM', 'Palikir', 'Federated States of Micronesia'),
(72, 'FJ', 'Suva', 'Fiji'),
(73, 'FI', 'Helsinki', 'Finland'),
(74, 'MK', 'Skopje', 'Former Yugoslav Republic of Macedonia'),
(75, 'FR', 'Paris', 'France'),
(76, 'GF', 'Cayenne', 'French Guiana'),
(77, 'PF', 'Papeete', 'French Polynesia'),
(78, 'TF', 'Saint-Pierre, Réunion', 'French Southern Territories'),
(79, 'GA', 'Libreville', 'Gabon'),
(80, 'GM', 'Banjul', 'Gambia'),
(81, 'GE', 'Tbilisi', 'Georgia'),
(82, 'DE', 'Berlin', 'Germany'),
(83, 'GH', 'Accra', 'Ghana'),
(84, 'GI', 'Gibraltar', 'Gibraltar'),
(85, 'GR', 'Athens', 'Greece'),
(86, 'GL', 'Nuuk', 'Greenland'),
(87, 'GD', 'St. George\'s', 'Grenada'),
(88, 'GP', 'Basse-Terre', 'Guadeloupe'),
(89, 'GU', 'Hagåtña', 'Guam'),
(90, 'GT', 'Guatemala City', 'Guatemala'),
(91, 'GG', 'Saint Peter Port', 'Guernsey'),
(92, 'GN', 'Conakry', 'Guinea'),
(93, 'GW', 'Bissau', 'Guinea-Bissau'),
(94, 'GY', 'Georgetown', 'Guyana'),
(95, 'HT', 'Port-au-Prince', 'Haiti'),
(96, 'VA', 'Vatican City', 'Holy See'),
(97, 'HN', 'Tegucigalpa', 'Honduras'),
(98, 'HK', 'Hong Kong', 'Hong Kong'),
(99, 'HU', 'Budapest', 'Hungary'),
(100, 'IS', 'Reykjavik', 'Iceland'),
(101, 'IN', 'New Delhi', 'India'),
(102, 'ID', 'Jakarta', 'Indonesia'),
(103, 'IR', 'Tehran', 'Iran'),
(104, 'IQ', 'Baghdad', 'Iraq'),
(105, 'IE', 'Dublin', 'Ireland'),
(106, 'IM', 'Douglas', 'Isle of Man'),
(107, 'IL', 'Jerusalem', 'Israel'),
(108, 'IT', 'Rome', 'Italy'),
(109, 'JM', 'Kingston', 'Jamaica'),
(110, 'JP', 'Tokyo', 'Japan'),
(111, 'JE', 'Saint Helier', 'Jersey'),
(112, 'JO', 'Amman', 'Jordan'),
(113, 'KZ', 'Astana', 'Kazakhstan'),
(114, 'KE', 'Nairobi', 'Kenya'),
(115, 'KI', 'South Tarawa', 'Kiribati'),
(116, 'KW', 'Kuwait City', 'Kuwait'),
(117, 'KG', 'Bishkek', 'Kyrgyzstan'),
(118, 'LA', 'Vientiane', 'Laos'),
(119, 'LV', 'Riga', 'Latvia'),
(120, 'LB', 'Beirut', 'Lebanon'),
(121, 'LS', 'Maseru', 'Lesotho'),
(122, 'LR', 'Monrovia', 'Liberia'),
(123, 'LY', 'Tripoli', 'Libya'),
(124, 'LI', 'Vaduz', 'Liechtenstein'),
(125, 'LT', 'Vilnius', 'Lithuania'),
(126, 'LU', 'Luxembourg City', 'Luxembourg'),
(127, 'MO', 'Macau', 'Macau'),
(128, 'MG', 'Antananarivo', 'Madagascar'),
(129, 'MW', 'Lilongwe', 'Malawi'),
(130, 'MY', 'Kuala Lumpur', 'Malaysia'),
(131, 'MV', 'Malé', 'Maldives'),
(132, 'ML', 'Bamako', 'Mali'),
(133, 'MT', 'Valletta', 'Malta'),
(134, 'MH', 'Majuro', 'Marshall Islands'),
(135, 'MQ', 'Fort-de-France', 'Martinique'),
(136, 'MR', 'Nouakchott', 'Mauritania'),
(137, 'MU', 'Port Louis', 'Mauritius'),
(138, 'YT', 'Mamoudzou', 'Mayotte'),
(139, 'MX', 'Mexico City', 'Mexico'),
(140, 'MD', 'Chișinău', 'Moldova'),
(141, 'MC', 'Monaco', 'Monaco'),
(142, 'MN', 'Ulaanbaatar', 'Mongolia'),
(143, 'ME', 'Podgorica', 'Montenegro'),
(144, 'MS', 'Little Bay, Brades, Plymouth', 'Montserrat'),
(145, 'MA', 'Rabat', 'Morocco'),
(146, 'MZ', 'Maputo', 'Mozambique'),
(147, 'MM', 'Naypyidaw', 'Myanmar'),
(148, 'NA', 'Windhoek', 'Namibia'),
(149, 'NR', 'Yaren District', 'Nauru'),
(150, 'NP', 'Kathmandu', 'Nepal'),
(151, 'NL', 'Amsterdam', 'Netherlands'),
(152, 'NC', 'Nouméa', 'New Caledonia'),
(153, 'NZ', 'Wellington', 'New Zealand'),
(154, 'NI', 'Managua', 'Nicaragua'),
(155, 'NE', 'Niamey', 'Niger'),
(156, 'NG', 'Abuja', 'Nigeria'),
(157, 'NU', 'Alofi', 'Niue'),
(158, 'NF', 'Kingston', 'Norfolk Island'),
(159, 'KP', 'Pyongyang', 'North Korea'),
(160, 'MP', 'Capitol Hill', 'Northern Mariana Islands'),
(161, 'NO', 'Oslo', 'Norway'),
(162, 'OM', 'Muscat', 'Oman'),
(163, 'PK', 'Islamabad', 'Pakistan'),
(164, 'PW', 'Ngerulmud', 'Palau'),
(165, 'PA', 'Panama City', 'Panama'),
(166, 'PG', 'Port Moresby', 'Papua New Guinea'),
(167, 'PY', 'Asunción', 'Paraguay'),
(168, 'PE', 'Lima', 'Peru'),
(169, 'PH', 'Manila', 'Philippines'),
(170, 'PN', 'Adamstown', 'Pitcairn'),
(171, 'PL', 'Warsaw', 'Poland'),
(172, 'PT', 'Lisbon', 'Portugal'),
(173, 'PR', 'San Juan', 'Puerto Rico'),
(174, 'QA', 'Doha', 'Qatar'),
(175, 'CG', 'Brazzaville', 'Republic of the Congo'),
(176, 'RO', 'Bucharest', 'Romania'),
(177, 'RU', 'Moscow', 'Russia'),
(178, 'RW', 'Kigali', 'Rwanda'),
(179, 'RE', 'Saint-Denis', 'Réunion'),
(180, 'BL', 'Gustavia', 'Saint Barthélemy'),
(181, 'SH', 'Jamestown', 'Saint Helena, Ascension and Tristan da Cunha'),
(182, 'KN', 'Basseterre', 'Saint Kitts and Nevis'),
(183, 'LC', 'Castries', 'Saint Lucia'),
(184, 'MF', 'Marigot', 'Saint Martin'),
(185, 'PM', 'Saint-Pierre', 'Saint Pierre and Miquelon'),
(186, 'VC', 'Kingstown', 'Saint Vincent and the Grenadines'),
(187, 'WS', 'Apia', 'Samoa'),
(188, 'SM', 'San Marino', 'San Marino'),
(189, 'ST', 'São Tomé', 'Sao Tome and Principe'),
(190, 'SA', 'Riyadh', 'Saudi Arabia'),
(191, 'SN', 'Dakar', 'Senegal'),
(192, 'RS', 'Belgrade', 'Serbia'),
(193, 'SC', 'Victoria', 'Seychelles'),
(194, 'SL', 'Freetown', 'Sierra Leone'),
(195, 'SG', 'Singapore', 'Singapore'),
(196, 'SX', 'Philipsburg', 'Sint Maarten'),
(197, 'SK', 'Bratislava', 'Slovakia'),
(198, 'SI', 'Ljubljana', 'Slovenia'),
(199, 'SB', 'Honiara', 'Solomon Islands'),
(200, 'SO', 'Mogadishu', 'Somalia'),
(201, 'ZA', 'Pretoria', 'South Africa'),
(202, 'GS', 'King Edward Point', 'South Georgia and the South Sandwich Islands'),
(203, 'KR', 'Seoul', 'South Korea'),
(204, 'SS', 'Juba', 'South Sudan'),
(205, 'ES', 'Madrid', 'Spain'),
(206, 'LK', 'Sri Jayawardenepura Kotte, Col', 'Sri Lanka'),
(207, 'PS', 'Ramallah', 'State of Palestine'),
(208, 'SD', 'Khartoum', 'Sudan'),
(209, 'SR', 'Paramaribo', 'Suriname'),
(210, 'SJ', 'Longyearbyen', 'Svalbard and Jan Mayen'),
(211, 'SZ', 'Lobamba, Mbabane', 'Swaziland'),
(212, 'SE', 'Stockholm', 'Sweden'),
(213, 'CH', 'Bern', 'Switzerland'),
(214, 'SY', 'Damascus', 'Syrian Arab Republic'),
(215, 'TW', 'Taipei', 'Taiwan'),
(216, 'TJ', 'Dushanbe', 'Tajikistan'),
(217, 'TZ', 'Dodoma', 'Tanzania'),
(218, 'TH', 'Bangkok', 'Thailand'),
(219, 'TL', 'Dili', 'Timor-Leste'),
(220, 'TG', 'Lomé', 'Togo'),
(221, 'TK', 'Nukunonu, Atafu,Tokelau', 'Tokelau'),
(222, 'TO', 'Nukuʻalofa', 'Tonga'),
(223, 'TT', 'Port of Spain', 'Trinidad and Tobago'),
(224, 'TN', 'Tunis', 'Tunisia'),
(225, 'TR', 'Ankara', 'Turkey'),
(226, 'TM', 'Ashgabat', 'Turkmenistan'),
(227, 'TC', 'Cockburn Town', 'Turks and Caicos Islands'),
(228, 'TV', 'Funafuti', 'Tuvalu'),
(229, 'UG', 'Kampala', 'Uganda'),
(230, 'UA', 'Kiev', 'Ukraine'),
(231, 'AE', 'Abu Dhabi', 'United Arab Emirates'),
(232, 'GB', 'London', 'United Kingdom'),
(233, 'UM', 'Washington, D.C.', 'United States Minor Outlying Islands'),
(234, 'US', 'Washington, D.C.', 'United States of America'),
(235, 'UY', 'Montevideo', 'Uruguay'),
(236, 'UZ', 'Tashkent', 'Uzbekistan'),
(237, 'VU', 'Port Vila', 'Vanuatu'),
(238, 'VE', 'Caracas', 'Venezuela'),
(239, 'VN', 'Hanoi', 'Vietnam'),
(240, 'VG', 'Road Town', 'Virgin Islands (British)'),
(241, 'VI', 'Charlotte Amalie', 'Virgin Islands (U.S.)'),
(242, 'WF', 'Mata-Utu', 'Wallis and Futuna'),
(243, 'EH', 'Laayoune', 'Western Sahara'),
(244, 'YE', 'Sana\'a', 'Yemen'),
(245, 'ZM', 'Lusaka', 'Zambia'),
(246, 'ZW', 'Harare', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_11_26_013919_create_orders_table', 1),
(5, '2019_11_26_063552_create_pickers_table', 1),
(6, '2019_12_09_222330_create_warehouses_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `name` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `remember_token` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rose@tr24.de', '$2y$10$k7w2tzIjG9vQhH1bMpdI6O58SNmryRDn.R.VQ6D6FJJzfFqdSOxbq', 'D7mcms7ZM2RDPKBCrlJxucukEZMXNl7JmnFLEJGEwQqvdv2ht0bKgb9IYIUh', '2020-01-15 11:22:52', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aia`
--
ALTER TABLE `aia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aia`
--
ALTER TABLE `aia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
