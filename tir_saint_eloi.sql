-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 22 mai 2018 à 16:33
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tir_saint_eloi`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `pseudo`, `pass`, `email`) VALUES
(10, 'FabienMazoin', '$2y$10$TKxG4gnccV9MHYtNEbBYYuCeFbOCxChKStIA6IX/1GEZMEvXvQhru', 'FabienMazoin@gmail.com'),
(3, 'tiita', '$2y$10$qgt4mU.gIkjWh4tA.Q8WAusRwbt9KZFQf5evnQ.PNQjkebk5P/wRm', 'tiitanyum@gmail.com'),
(11, 'SupAdminTirSaintEloi', '$2y$10$lvFIMBcLJUVgoKeXhbuAYOhQls7ck/MRWIlSJD/qeGgwP4WOni8PW', 'tirsainteloi@gmail.com'),
(12, 'PandoreDeveloppement', '$2y$10$H5mwn6xrjfbVx5kCtfYEWOEWlNn2o95VLh1zLHV2tX5q9HWjIg9.6', 'champaloux.benjamin@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `Autor` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `name`, `content`, `Autor`) VALUES
(1, 'Lorem ipsum', '<p>Et Epigonus quidem amictu tenus philosophus, ut apparuit, prece frustra temptata, sulcatis lateribus mortisque metu admoto turpi confessione cogitatorum socium, quae nulla erant, fuisse firmavit cum nec vidisset quicquam nec audisset penitus expers forensium rerum; Eusebius vero obiecta fidentius negans, suspensus in eodem gradu constantiae stetit latrocinium illud esse, non iudicium clamans. Et licet quocumque oculos flexeris feminas adfatim multas spectare cirratas, quibus, si nupsissent, per aetatem ter iam nixus poterat suppetere liberorum, ad usque taedium pedibus pavimenta tergentes iactari volucriter gyris, dum exprimunt innumera simulacra, quae finxere fabulae theatrales.<img alt=\"\" src=\"http://localhost/tir_saint_eloi/img/wonder-woman.jpg\" style=\"height:387px; width:689px\" /></p>\r\n<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/LEJRyAovRdQ\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>\r\n\r\n<p>Et olim licet otiosae sint tribus pacataeque centuriae et nulla suffragiorum certamina set Pompiliani redierit securitas temporis, per omnes tamen quotquot sunt partes terrarum, ut domina suscipitur et regina et ubique patrum reverenda cum auctoritate canities populique Romani nomen circumspectum et verecundum. Cum saepe multa, tum memini domi in hemicyclio sedentem, ut solebat, cum et ego essem una et pauci admodum familiares, in eum sermonem illum incidere qui tum forte multis erat in ore. Meministi enim profecto, Attice, et eo magis, quod P. Sulpicio utebare multum, cum is tribunus plebis capitali odio a Q. Pompeio, qui tum erat consul, dissideret, quocum coniunctissime et amantissime vixerat, quanta esset hominum vel admiratio vel querella. Illud tamen te esse admonitum volo, primum ut qualis es talem te esse omnes existiment ut, quantum a rerum turpitudine abes, tantum te a verborum libertate seiungas; deinde ut ea in alterum ne dicas, quae cum tibi falso responsa sint, erubescas. Quis est enim, cui via ista non pateat, qui isti aetati atque etiam isti dignitati non possit quam velit petulanter, etiamsi sine ulla suspicione, at non sine argumento male dicere? Sed istarum partium culpa est eorum, qui te agere voluerunt; laus pudoris tui, quod ea te invitum dicere videbamus, ingenii, quod ornate politeque dixisti.</p>\r\n', 'tiita'),
(6, 'test article 2', 'cqze;cbqihdciydciudhciuhdciu', 'vqzervazev'),
(7, 'test article 3', 'vqzervazev cqze;cbqihdciydciudhciuhdciu', 'vqzervazev'),
(8, 'c w wd wd qd dfs fg fg', 'sdffb sdfbfsgbdgfbsdfbbsg stg sg', 'sgsergz'),
(9, 'sregsrg', 'sgzerhsrtrtnsdfvwdsvqzz gqergqergqzrg qrzgqergq eeqfqerg esrg erg rg regs rgzersgqrffa ', 'qrgqrgq ');

-- --------------------------------------------------------

--
-- Structure de la table `page`
--

DROP TABLE IF EXISTS `page`;
CREATE TABLE IF NOT EXISTS `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `page`
--

INSERT INTO `page` (`id`, `nom`, `content`) VALUES
(1, 'contact', '<p>COUCOU</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a ante ligula. Suspendisse condimentum sodales nulla, ut porttitor mauris bibendum vitae. Curabitur imperdiet mi at porttitor pellentesque. Phasellus porta nec tellus sed dapibus. Curabitur dictum luctus nunc, quis tempus urna auctor nec. Integer nec elit a nibh ullamcorper dignissim. Maecenas quam purus, dapibus id nunc sed, feugiat ornare diam. Quisque non gravida lorem. Integer maximus odio eleifend, tincidunt ex a, dictum orci. Aliquam ut lacinia nibh. Sed dapibus aliquam magna, sed ornare enim mattis eu. Etiam facilisis quam libero. Morbi porttitor sodales sem ut ornare. Nunc malesuada urna quis elit feugiat semper. Pellentesque accumsan efficitur porta. Mauris efficitur blandit lectus a condimentum. Curabitur a magna in felis lacinia ultricies. Suspendisse potenti. Duis magna mi, sollicitudin non tincidunt nec, pulvinar id nulla. Nulla semper suscipit lectus, non ultrices dui eleifend id. Sed posuere cursus lectus ac porttitor. Nullam porttitor, magna ut vulputate dapibus, lacus ante tincidunt diam, ac aliquet mauris enim non tortor. Vestibulum lacinia sem non turpis blandit, eget tincidunt nunc feugiat. Suspendisse ullamcorper purus eget ultrices condimentum. Aenean ante lacus, tincidunt sed aliquet at, accumsan sit amet lorem. Curabitur id tristique turpis. Praesent condimentum ante lectus, sed interdum risus rhoncus sed. Phasellus semper viverra velit, sed rhoncus metus varius sed. Duis rutrum aliquam lacus, vel gravida sapien vehicula sit amet. Nam at rhoncus lorem. Vestibulum dapibus pretium lorem vel semper. Sed at metus id augue tristique sagittis. Cras lobortis nisl vel iaculis bibendum. Ut eu sem tempor, convallis odio vel, cursus nisi. Nunc at tincidunt nulla. Phasellus ultrices odio nulla, id sodales neque commodo vel. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc id maximus lacus. Quisque eu ipsum tincidunt ipsum vehicula pretium. Pellentesque commodo viverra sem ut tempus. Quisque convallis nisi at purus hendrerit, nec finibus libero maximus. Nam finibus, sem at congue blandit, nulla nisi commodo urna, vel tristique nisi tellus nec enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi commodo augue est, eget pellentesque metus sollicitudin vel. Nunc cursus porta condimentum. Sed at aliquam enim. Suspendisse potenti. Nam tempor mattis auctor. Etiam porta venenatis diam lacinia aliquet. Fusce egestas imperdiet dui in pellentesque. Donec augue risus, pulvinar quis pellentesque eget, dignissim vitae lorem. Sed vel egestas massa, eu condimentum risus. Aenean at urna in felis dictum suscipit at quis eros. Nam eu elementum sapien. Proin mollis diam erat, non maximus mi congue eget. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc fringilla mauris a lacus sollicitudin eleifend. Nullam quis rhoncus magna, eget dignissim arcu. Integer venenatis leo vitae leo consectetur, congue maximus mauris molestie. Maecenas at posuere mauris. Nam non blandit massa. Nunc sapien nulla, pretium in rutrum a, bibendum id nibh. Donec iaculis nunc vitae magna ornare porttitor. Ut erat libero, aliquet vel enim vel, suscipit dapibus justo. Mauris vel mauris sed odio eleifend porta ac quis sem. Aliquam pretium bibendum ipsum.</p>\r\n');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
