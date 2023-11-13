Autocomplete-using-PHP-MySQL-and-jQuery
=======================================

Autocomplete using PHP/MySQL and jQuery


Installation
=======================================
Import country Table into your database

````sql

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=45 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(1, 'china'),
(2, 'united states'),
(3, 'india'),
(4, 'japan'),
(5, 'brazil'),
(6, 'russia'),
(7, 'germany'),
(8, 'nigeria'),
(9, 'united kingdom'),
(10, 'france'),
(11, 'mexico'),
(12, 'south korea'),
(13, 'indonesia'),
(14, 'philippines'),
(15, 'egypt'),
(16, 'vietnam'),
(17, 'turkey'),
(18, 'italy'),
(19, 'spain'),
(20, 'canada'),
(21, 'poland'),
(22, 'argentina'),
(23, 'colombia'),
(24, 'iran'),
(25, 'south africa'),
(26, 'malaysia'),
(27, 'pakistan'),
(28, 'australia'),
(29, 'thailand'),
(30, 'morocco'),
(31, 'taiwan'),
(32, 'netherlands'),
(33, 'ukraine'),
(34, 'saudi arabia'),
(35, 'kenya'),
(36, 'venezuela'),
(37, 'peru'),
(38, 'romania'),
(39, 'chile'),
(40, 'uzbekistan'),
(41, 'bangladesh'),
(42, 'kazakhstan'),
(43, 'belgium'),
(44, 'sweden');

````

Chnage your database credentials accordinng to your database in ajax_refresh.php

````php

function connect() {
    return new PDO('mysql:host=localhost;dbname=DATABASE_NAME', 'DATABASE_USER', 'YOUR_DATABASE_PASSWORD', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}


````






