-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 20 Décembre 2017 à 12:20
-- Version du serveur :  5.7.20-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `grand_restaurant` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `grand_restaurant`;


DROP TABLE IF EXISTS `plat`;
CREATE TABLE `plat` (
  `plat_id` int(11) NOT NULL,
  `plat_nom` varchar(50) NOT NULL,
  `plat_prix` float(20) NOT NULL,
  `plat_url_image_big` varchar(45) NOT NULL,
  `plat_url_image_miniature` varchar(45) NOT NULL,
  `plat_description` varchar(45)NOT NULL,
  `plat_ingredients` varchar(45)NOT NULL,
  `plat_allergenes` varchar(45)NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `plat` (`plat_id`, `plat_nom`, `plat_prix`, `plat_url_image_big`, `plat_url_image_miniature`,`plat_description`,`plat_ingredients`,`plat_allergenes`) VALUES
(1,'Omelette aux truffes',20.5, '#','#','Omelette fritte avec des truffes fraiches',' oeux et truffes','oueuf huile champignon'),
(2,'Homard à l\'amoricaine',20.5,'#','#','Homard avec du riz servi en sauce','Homard des mers chaudes riz tomates', 'crustaces'),
(3,'Dindes aux marrons',13.5,'#','#','Dinde avec ses marrons servi entiere','dindes marrons et crèmes', 'volaille et marrons creme'),
(4,'Haricot de mouton',11.5,'#','#','Piece de mouton servie avec ses haricots','mouton haricots lauriers carottes','viande et feculent'),
(5,'Gigot d\'Agneau',12.5,'#','#','Agneau  pomme de terres et carottes','Agneau  pomme de terres et carottes', 'viande feculent legumes ');


DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE `newsletter` (
  `newsletter_id` int(11) NOT NULL,
  `newsletter_mail` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `newsletter` (`newsletter_id`, `newsletter_mail`) VALUES
(1, 'scaphydata@free.fr'), 
(2, 'scaphydata@hotmail.com'),
(3, 'scaphydata@yahoo.com');


DROP TABLE IF EXISTS `actu`;
CREATE TABLE `actu` (
  `actu_id` int(10) NOT NULL,
  `actu_titre` varchar(50) NOT NULL,
  `actu_contenu` varchar(50) NOT NULL,
  `actu_image` varchar(45) NOT NULL,
  `actu_date` date
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `actu` (`actu_id`, `actu_titre`, `actu_contenu`, `actu_image`, `actu_date`) VALUES
(1, 'lorem', 'Lorem ipsum dolor sit amet consectetur ','#', '2018-01-01'),
(2, 'Etiam', 'Etiam ut quam cursus, bibendum erat laoreet','#','20180-01-02'),
(3, 'Nunc ', 'Posuere felis in magna viverra volutpat. Donec non ante', '#','20180-01-03');




DROP TABLE IF EXISTS `teimoignage`;
CREATE TABLE `teimoignage` (
  `teimoignage_id` int(11) NOT NULL,
  `teimoignage_contenu` varchar(15) NOT NULL,
  `teimoignage_note` int(10) NOT NULL
 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `teimoignage` (`teimoignage_id`, `teimoignage_contenu`, `teimoignage_note`) VALUES
(1, 'Donec maximus, massa consequat interdum ornare, mauris libero mollis nunc', 25),
(2, 'Donec maximus, massa consequat interdum ornare, mauris libero mollis nunc', 50),
(3, 'Donec maximus, massa consequat interdum ornare, mauris libero mollis nunc', 75);

--		ALTER TABLE `customers`
--		  ADD PRIMARY KEY (`customerNumber`),
--		  ADD KEY `salesRepEmployeeNumber` (`salesRepEmployeeNumber`);
--		ALTER TABLE `employees`
--		  ADD PRIMARY KEY (`employeeNumber`),
--		  ADD KEY `reportsTo` (`reportsTo`),
--		ALTER TABLE `offices`
--		  ADD PRIMARY KEY (`officeCode`);
--
--
--		ALTER TABLE `orderdetails`
--		  ADD PRIMARY KEY (`orderNumber`,`productCode`),
--		  ADD KEY `productCode` (`productCode`);
--
--		ALTER TABLE `orders`
--		  ADD PRIMARY KEY (`orderNumber`),
--		  ADD KEY `customerNumber` (`customerNumber`);
--
--
--		ALTER TABLE `payments`
--		  ADD PRIMARY KEY (`customerNumber`,`checkNumber`);
--		ALTER TABLE `productlines`
--		  ADD PRIMARY KEY (`productLine`);
--
--		ALTER TABLE `products`
--		  ADD PRIMARY KEY (`productCode`),
--		  ADD KEY `productLine` (`productLine`);
--
--
--		ALTER TABLE `customers`
--		  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`salesRepEmployeeNumber`) REFERENCES `employees` (`employeeNumber`);
--
--
--		ALTER TABLE `employees`
--		  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`reportsTo`) REFERENCES `employees` (`employeeNumber`),
--		  ADD CONSTRAINT `employees_ibfk_2` FOREIGN KEY (`officeCode`) REFERENCES `offices` (`officeCode`);
--
--
--		ALTER TABLE `orderdetails`
--		  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`orderNumber`) REFERENCES `orders` (`orderNumber`),
--		  ADD CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`productCode`) REFERENCES `products` (`productCode`);
--
		--
		-- Contraintes pour la table `orders`
		--
--		  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customerNumber`) REFERENCES `customers` (`customerNumber`);
--
--		--
		-- Contraintes pour la table `payments`
		--
--		ALTER TABLE `payments`
--  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`customerNumber`) REFERENCES `customers` (`customerNumber`);

--
-- Contraintes pour la table `products`
--
--  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`productLine`) REFERENCES `productlines` (`productLine`);

--/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
--/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
--