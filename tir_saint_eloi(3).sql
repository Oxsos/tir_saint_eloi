-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 04 juil. 2018 à 11:40
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
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `name`, `content`, `Autor`) VALUES
(1, 'Lorem ipsum', '<p>Et Epigonus quidem amictu tenus philosophus, ut apparuit, prece frustra temptata, sulcatis lateribus mortisque metu admoto turpi confessione cogitatorum socium, quae nulla erant, fuisse firmavit cum nec vidisset quicquam nec audisset penitus expers forensium rerum; Eusebius vero obiecta fidentius negans, suspensus in eodem gradu constantiae stetit latrocinium illud esse, non iudicium clamans. Et licet quocumque oculos flexeris feminas adfatim multas spectare cirratas, quibus, si nupsissent, per aetatem ter iam nixus poterat suppetere liberorum, ad usque taedium pedibus pavimenta tergentes iactari volucriter gyris, dum exprimunt innumera simulacra, quae finxere fabulae theatrales.</p>\r\n\r\n<p><iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/nHQ8awqJInQ\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe></p>\r\n\r\n<p>Et olim licet otiosae sint tribus pacataeque centuriae et nulla suffragiorum certamina set Pompiliani redierit securitas temporis, per omnes tamen quotquot sunt partes terrarum, ut domina suscipitur et regina et ubique patrum reverenda cum auctoritate canities populique Romani nomen circumspectum et verecundum. Cum saepe multa, tum memini domi in hemicyclio sedentem, ut solebat, cum et ego essem una et pauci admodum familiares, in eum sermonem illum incidere qui tum forte multis erat in ore. Meministi enim profecto, Attice, et eo magis, quod P. Sulpicio utebare multum, cum is tribunus plebis capitali odio a Q. Pompeio, qui tum erat consul, dissideret, quocum coniunctissime et amantissime vixerat, quanta esset hominum vel admiratio vel querella. Illud tamen te esse admonitum volo, primum ut qualis es talem te esse omnes existiment ut, quantum a rerum turpitudine abes, tantum te a verborum libertate seiungas; deinde ut ea in alterum ne dicas, quae cum tibi falso responsa sint, erubescas. Quis est enim, cui via ista non pateat, qui isti aetati atque etiam isti dignitati non possit quam velit petulanter, etiamsi sine ulla suspicione, at non sine argumento male dicere? Sed istarum partium culpa est eorum, qui te agere voluerunt; laus pudoris tui, quod ea te invitum dicere videbamus, ingenii, quod ornate politeque dixisti.</p>\r\n', 'Auteur'),
(16, 'Championnats de France', '<p>Et voil&agrave; ! L’aventure Tarbaise des championnats de France est termin&eacute;e pour nous. D&eacute;sol&eacute;es pour les nouvelles tardives mais nous &eacute;tions trop occup&eacute;s &agrave; f&ecirc;ter notre r&eacute;ussite hier !</p>\r\n\r\n<p>Bernadette a particip&eacute; &agrave; son premier championnat de France et en sort RAVIE ! Elle a de quoi puisqu’elle gagne 14 places au classement national et s’inscrit donc 42eme sur 56 dans la cat&eacute;gorie Dame 2, avec un score de 376,8/400.</p>\r\n\r\n<p>Carine a grappill&eacute; aussi quelques 19 places et termine 56eme sur 86 d<span class=\"text_exposed_show\">ans la cat&eacute;gorie Dame 1 avec un score de 392,7/400. </span></p>\r\n\r\n<div class=\"text_exposed_show\">\r\n<p>On ne l&acirc;ches rien, reprise rapide des entra&icirc;nements pour faire encore mieux en 2019. Nous sommes motiv&eacute;es comme jamais pour l’ann&eacute;e prochaine, et nous esp&eacute;rons bien avoir la compagnie de la gente masculine pour porter les couleurs du club au niveau national</p>\r\n\r\n<p>Voici quelques photos (qualit&eacute; portable donc soyez indulgents ahah)</p>\r\n\r\n<p><img alt=\"\" src=\"/tir_saint_eloi/inc/KCfinder/img/images/27545294_2040274742926936_1169382021661700681_n.jpg\" /></p>\r\n</div>\r\n', 'Auteur'),
(13, ' quae finxere fabulae', '<p>Et Epigonus quidem amictu tenus philosophus, ut apparuit, prece frustra temptata, sulcatis lateribus mortisque metu admoto turpi confessione cogitatorum socium, quae nulla erant, fuisse firmavit cum nec vidisset quicquam nec audisset penitus expers forensium rerum; Eusebius vero obiecta fidentius negans, suspensus in eodem gradu constantiae stetit latrocinium illud esse, non iudicium clamans. Et licet quocumque oculos flexeris feminas adfatim multas spectare cirratas, quibus, si nupsissent, per aetatem ter iam nixus poterat suppetere liberorum, ad usque taedium pedibus pavimenta tergentes iactari volucriter gyris, dum exprimunt innumera simulacra, quae finxere fabulae theatrales.</p>\r\n\r\n<p><img alt=\"\" src=\"/tir_saint_eloi/inc/KCfinder/img/images/le-tir-c-est-canon.jpg\" style=\"width: 320px; height: 156px;\" /></p>\r\n', 'Auteur'),
(15, 'Lorem ipsum dolor', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia.</p>\r\n\r\n<p> </p>\r\n\r\n<p><img alt=\"\" src=\"/tir_saint_eloi/inc/KCfinder/img/images/27540590_2040274696260274_6159725810125064726_n%281%29.jpg\" /></p>\r\n', 'Auteur'),
(20, 'test', '<p>Et olim licet otiosae sint tribus pacataeque centuriae et nulla suffragiorum certamina set Pompiliani redierit securitas temporis, per omnes tamen quotquot sunt partes terrarum, ut domina suscipitur et regina et ubique patrum reverenda cum auctoritate canities populique Romani nomen circumspectum et verecundum.</p>\r\n\r\n<p><img alt=\"\" height=\"325\" src=\"/tir_saint_eloi/inc/KCfinder/img/images/27545294_2040274742926936_1169382021661700681_n.jpg\" width=\"434\" /></p>\r\n\r\n<p>Cum saepe multa, tum memini domi in hemicyclio sedentem, ut solebat, cum et ego essem una et pauci admodum familiares, in eum sermonem illum incidere qui tum forte multis erat in ore. Meministi enim profecto, Attice, et eo magis, quod P. Sulpicio utebare multum, cum is tribunus plebis capitali odio a Q. Pompeio, qui tum erat consul, dissideret, quocum coniunctissime et amantissime vixerat, quanta esset hominum vel admiratio vel querella. Illud tamen te esse admonitum volo, primum ut qualis es talem te esse omnes existiment ut, quantum a rerum turpitudine abes, tantum te a verborum libertate seiungas; deinde ut ea in alterum ne dicas, quae cum tibi falso responsa sint, erubescas. Quis est enim, cui via ista non pateat, qui isti aetati atque etiam isti dignitati non possit quam velit petulanter, etiamsi sine ulla suspicione, at non sine argumento male dicere? Sed istarum partium culpa est eorum, qui te agere voluerunt; laus pudoris tui, quod ea te invitum dicere videbamus, ingenii, quod ornate politeque dixisti.</p>\r\n', 'Benjamin Champaloux');

-- --------------------------------------------------------

--
-- Structure de la table `competition`
--

DROP TABLE IF EXISTS `competition`;
CREATE TABLE IF NOT EXISTS `competition` (
  `id_comp` int(11) NOT NULL AUTO_INCREMENT,
  `nom_comp` varchar(255) NOT NULL,
  `date_comp` varchar(255) NOT NULL,
  PRIMARY KEY (`id_comp`),
  UNIQUE KEY `id_comp` (`id_comp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `page`
--

INSERT INTO `page` (`id`, `nom`, `content`) VALUES
(13, 'contact', 'la lalalallalalalalall'),
(2, 'acceuil-FFtir', '<h1 style=\"text-align: center;\"><a href=\"http://www.fftir.org/fr/accueil\"><img alt=\"\" src=\"/tir_saint_eloi/inc/KCfinder/img/images/logofft%281%29.png\" /></a></h1>\r\n\r\n<h1 style=\"text-align: center;\"><strong>La F&eacute;d&eacute;ration Fran&ccedil;aise de Tir</strong></h1>\r\n\r\n<p style=\"text-align: center;\">Actuellement, au niveau mondial, le Tir est en nombre de licenci&eacute;s le troisi&egrave;me sport individuel pratiqu&eacute;e et la cinqui&egrave;me discipline olympique.</p>\r\n\r\n<p style=\"text-align: center;\">Le tir est donc un sport &agrave; part enti&egrave;re en m&ecirc;me temps qu&#39;un loisir; sport d&#39;adresse au m&ecirc;me titre que le golf ou le tir &agrave; l&#39;arc, il est accessible &agrave;</p>\r\n\r\n<p style=\"text-align: center;\">tous d&egrave;s l&#39;adolescence permettant &agrave; toute la famille de se retrouver autour de la pratique d&#39;une activit&eacute; sportive. Il est soumis au r&egrave;gles de la </p>\r\n\r\n<p style=\"text-align: center;\">F&eacute;d&eacute;ration Fran&ccedil;aise de Tir. Pour plus d&#39;infos sur cette derni&egrave;re <a href=\"http://www.fftir.org/fr/accueil\">cliquez ici.</a></p>\r\n'),
(3, 'acceuil-tir', '<h1 style=\"text-align: center;\"><strong>Le tir, plus qu&#39;un sport!</strong></h1>\r\n\r\n<p style=\"text-align: justify;\">Sport complet, le tir sportif n&eacute;cessite une bonne forme physique et mentale ; c&#39;est une &eacute;cole de concentration et de ma&icirc;trise de soi ; comme beaucoup d&#39;autres sports, il pr&ocirc;ne les valeurs fondamentales du respect de la r&egrave;gle, du respect de soi et des autres. Par essence, il bannit la violence. Il est pratiqu&eacute; dans des stands de tir, en toute s&eacute;curit&eacute;, par des personnes issues de toutes les classes sociales. Il est une source d&#39;enrichissement de soi en d&eacute;veloppant les valeurs d&#39;engagement, de pers&eacute;v&eacute;rance, du go&ucirc;t de l&#39;effort. Plus sp&eacute;cifiquement, le tir sportif enseigne la concentration, l&#39;humilit&eacute; et la sagesse. Par l&#39;apprentissage de la ma&icirc;trise de l&#39;esprit et du corps, il est id&eacute;al pour ma&icirc;triser la gestion du stress. Le tir sportif apporte l&#39;&eacute;quilibre.</p>\r\n\r\n<p style=\"text-align: justify;\">Contrairement aux id&eacute;es re&ccedil;ues, le tir sportif n&#39;est pas class&eacute; dans la cat&eacute;gorie des \"sport &agrave; risques\". Les compagnies d&#39;assurance, notamment, constatent que les accidents dans le cadre de sa pratique r&eacute;guli&egrave;re sont rarissimes, dans les stands, les tireurs sont encadr&eacute;s par des moniteurs form&eacute;s de mani&egrave;re rigoureuse au respect des r&egrave;gles de s&eacute;curit&eacute;.</p>\r\n\r\n<p style=\"text-align: center;\"><img alt=\"\" src=\"/tir_saint_eloi/inc/KCfinder/img/images/le-tir-c-est-canon.jpg\" /></p>\r\n'),
(4, 'nos activités', 'cc'),
(5, 'adulte', 'cc'),
(6, 'Le stand', 'cc'),
(7, 'Le club', 'cc'),
(8, 'Ecole de tir', '<h4 style=\"text-align: center;\">L’&eacute;cole de tir a lieu le Mercredi de 14h &agrave; 15h30, elle permet aux enfants et aux jeunes de pratiquer le tir sportif, elle se r&eacute;partie en 3 cat&eacute;gories :</h4>\r\n\r\n<p> </p>\r\n\r\n<p style=\"text-align: center;\"><a href=\"http://tir_saint_eloi/activité.php\">Voir toutes nos activit&eacute;s.</a></p>\r\n'),
(9, 'L\'équipe', 'cc'),
(10, 'Handisport', 'cc'),
(11, 'Histoire du club', '<p>cc</p>\r\n'),
(12, 'resultat', 'coucou');

-- --------------------------------------------------------

--
-- Structure de la table `resultat`
--

DROP TABLE IF EXISTS `resultat`;
CREATE TABLE IF NOT EXISTS `resultat` (
  `id_result` int(11) NOT NULL AUTO_INCREMENT,
  `id_tireur` int(11) NOT NULL,
  `id_comp` int(11) NOT NULL,
  `resultat` varchar(255) NOT NULL,
  PRIMARY KEY (`id_result`),
  UNIQUE KEY `id_tireur` (`id_tireur`),
  UNIQUE KEY `id_comp` (`id_comp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tireur`
--

DROP TABLE IF EXISTS `tireur`;
CREATE TABLE IF NOT EXISTS `tireur` (
  `id_tireur` int(11) NOT NULL AUTO_INCREMENT,
  `nom_tireur` varchar(255) NOT NULL,
  PRIMARY KEY (`id_tireur`),
  UNIQUE KEY `id_tireur` (`id_tireur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `resultat`
--
ALTER TABLE `resultat`
  ADD CONSTRAINT `resultat_ibfk_1` FOREIGN KEY (`id_comp`) REFERENCES `competition` (`id_comp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `tireur`
--
ALTER TABLE `tireur`
  ADD CONSTRAINT `tireur_ibfk_1` FOREIGN KEY (`id_tireur`) REFERENCES `resultat` (`id_tireur`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
