#
# TABLE STRUCTURE FOR: camas
#

DROP TABLE IF EXISTS `camas`;

CREATE TABLE `camas` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `idRoom` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `idRoom` (`idRoom`),
  CONSTRAINT `camas_ibfk_1` FOREIGN KEY (`idRoom`) REFERENCES `habitaciones` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4;

INSERT INTO `camas` (`ID`, `idRoom`) VALUES (36, 1);
INSERT INTO `camas` (`ID`, `idRoom`) VALUES (38, 1);
INSERT INTO `camas` (`ID`, `idRoom`) VALUES (47, 1);
INSERT INTO `camas` (`ID`, `idRoom`) VALUES (35, 5);
INSERT INTO `camas` (`ID`, `idRoom`) VALUES (59, 5);
INSERT INTO `camas` (`ID`, `idRoom`) VALUES (43, 6);
INSERT INTO `camas` (`ID`, `idRoom`) VALUES (56, 11);
INSERT INTO `camas` (`ID`, `idRoom`) VALUES (46, 12);
INSERT INTO `camas` (`ID`, `idRoom`) VALUES (49, 12);
INSERT INTO `camas` (`ID`, `idRoom`) VALUES (50, 12);
INSERT INTO `camas` (`ID`, `idRoom`) VALUES (51, 12);
INSERT INTO `camas` (`ID`, `idRoom`) VALUES (31, 13);
INSERT INTO `camas` (`ID`, `idRoom`) VALUES (45, 13);
INSERT INTO `camas` (`ID`, `idRoom`) VALUES (44, 15);
INSERT INTO `camas` (`ID`, `idRoom`) VALUES (42, 16);
INSERT INTO `camas` (`ID`, `idRoom`) VALUES (54, 16);
INSERT INTO `camas` (`ID`, `idRoom`) VALUES (55, 16);
INSERT INTO `camas` (`ID`, `idRoom`) VALUES (37, 17);
INSERT INTO `camas` (`ID`, `idRoom`) VALUES (32, 18);
INSERT INTO `camas` (`ID`, `idRoom`) VALUES (58, 18);
INSERT INTO `camas` (`ID`, `idRoom`) VALUES (48, 19);
INSERT INTO `camas` (`ID`, `idRoom`) VALUES (53, 20);
INSERT INTO `camas` (`ID`, `idRoom`) VALUES (41, 22);
INSERT INTO `camas` (`ID`, `idRoom`) VALUES (34, 23);
INSERT INTO `camas` (`ID`, `idRoom`) VALUES (60, 23);
INSERT INTO `camas` (`ID`, `idRoom`) VALUES (39, 24);
INSERT INTO `camas` (`ID`, `idRoom`) VALUES (33, 25);
INSERT INTO `camas` (`ID`, `idRoom`) VALUES (52, 25);
INSERT INTO `camas` (`ID`, `idRoom`) VALUES (57, 25);


#
# TABLE STRUCTURE FOR: equipos
#

DROP TABLE IF EXISTS `equipos`;

CREATE TABLE `equipos` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` char(50) DEFAULT NULL,
  `und_total` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `tipo` (`tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

INSERT INTO `equipos` (`ID`, `tipo`, `und_total`) VALUES (1, 'dolor', 36);
INSERT INTO `equipos` (`ID`, `tipo`, `und_total`) VALUES (2, 'nihil', 29);
INSERT INTO `equipos` (`ID`, `tipo`, `und_total`) VALUES (3, 'dolores', 22);
INSERT INTO `equipos` (`ID`, `tipo`, `und_total`) VALUES (4, 'sapiente', 10);
INSERT INTO `equipos` (`ID`, `tipo`, `und_total`) VALUES (5, 'hic', 26);
INSERT INTO `equipos` (`ID`, `tipo`, `und_total`) VALUES (6, 'assumenda', 5);
INSERT INTO `equipos` (`ID`, `tipo`, `und_total`) VALUES (7, 'occaecati', 8);
INSERT INTO `equipos` (`ID`, `tipo`, `und_total`) VALUES (8, 'sit', 21);
INSERT INTO `equipos` (`ID`, `tipo`, `und_total`) VALUES (9, 'est', 4);
INSERT INTO `equipos` (`ID`, `tipo`, `und_total`) VALUES (10, 'et', 39);
INSERT INTO `equipos` (`ID`, `tipo`, `und_total`) VALUES (11, 'iste', 16);
INSERT INTO `equipos` (`ID`, `tipo`, `und_total`) VALUES (12, 'minima', 13);
INSERT INTO `equipos` (`ID`, `tipo`, `und_total`) VALUES (13, 'eos', 36);
INSERT INTO `equipos` (`ID`, `tipo`, `und_total`) VALUES (14, 'omnis', 33);
INSERT INTO `equipos` (`ID`, `tipo`, `und_total`) VALUES (15, 'quae', 3);
INSERT INTO `equipos` (`ID`, `tipo`, `und_total`) VALUES (16, 'dolore', 4);
INSERT INTO `equipos` (`ID`, `tipo`, `und_total`) VALUES (17, 'amet', 27);
INSERT INTO `equipos` (`ID`, `tipo`, `und_total`) VALUES (18, 'perferendis', 0);
INSERT INTO `equipos` (`ID`, `tipo`, `und_total`) VALUES (19, 'libero', 32);
INSERT INTO `equipos` (`ID`, `tipo`, `und_total`) VALUES (20, 'odio', 31);


#
# TABLE STRUCTURE FOR: habitaciones
#

DROP TABLE IF EXISTS `habitaciones`;

CREATE TABLE `habitaciones` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;

INSERT INTO `habitaciones` (`ID`) VALUES (1);
INSERT INTO `habitaciones` (`ID`) VALUES (2);
INSERT INTO `habitaciones` (`ID`) VALUES (3);
INSERT INTO `habitaciones` (`ID`) VALUES (4);
INSERT INTO `habitaciones` (`ID`) VALUES (5);
INSERT INTO `habitaciones` (`ID`) VALUES (6);
INSERT INTO `habitaciones` (`ID`) VALUES (7);
INSERT INTO `habitaciones` (`ID`) VALUES (8);
INSERT INTO `habitaciones` (`ID`) VALUES (9);
INSERT INTO `habitaciones` (`ID`) VALUES (10);
INSERT INTO `habitaciones` (`ID`) VALUES (11);
INSERT INTO `habitaciones` (`ID`) VALUES (12);
INSERT INTO `habitaciones` (`ID`) VALUES (13);
INSERT INTO `habitaciones` (`ID`) VALUES (14);
INSERT INTO `habitaciones` (`ID`) VALUES (15);
INSERT INTO `habitaciones` (`ID`) VALUES (16);
INSERT INTO `habitaciones` (`ID`) VALUES (17);
INSERT INTO `habitaciones` (`ID`) VALUES (18);
INSERT INTO `habitaciones` (`ID`) VALUES (19);
INSERT INTO `habitaciones` (`ID`) VALUES (20);
INSERT INTO `habitaciones` (`ID`) VALUES (21);
INSERT INTO `habitaciones` (`ID`) VALUES (22);
INSERT INTO `habitaciones` (`ID`) VALUES (23);
INSERT INTO `habitaciones` (`ID`) VALUES (24);
INSERT INTO `habitaciones` (`ID`) VALUES (25);
INSERT INTO `habitaciones` (`ID`) VALUES (26);
INSERT INTO `habitaciones` (`ID`) VALUES (27);
INSERT INTO `habitaciones` (`ID`) VALUES (28);
INSERT INTO `habitaciones` (`ID`) VALUES (29);
INSERT INTO `habitaciones` (`ID`) VALUES (30);


#
# TABLE STRUCTURE FOR: pacientes
#

DROP TABLE IF EXISTS `pacientes`;

CREATE TABLE `pacientes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` char(128) DEFAULT NULL,
  `diagnostico` char(128) DEFAULT NULL,
  `prioridad` enum('baja','media','alta') DEFAULT NULL,
  `idMedico` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `idMedico` (`idMedico`),
  CONSTRAINT `pacientes_ibfk_1` FOREIGN KEY (`idMedico`) REFERENCES `usuarios` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;

INSERT INTO `pacientes` (`ID`, `nombre`, `diagnostico`, `prioridad`, `idMedico`) VALUES (1, 'consectetur', 'Quia modi nihil rerum doloribus aliquid ut accusantium.', 'media', 1);
INSERT INTO `pacientes` (`ID`, `nombre`, `diagnostico`, `prioridad`, `idMedico`) VALUES (2, 'omnis', 'Sunt molestias quam doloremque maxime aspernatur cum.', 'baja', 2);
INSERT INTO `pacientes` (`ID`, `nombre`, `diagnostico`, `prioridad`, `idMedico`) VALUES (3, 'totam', 'Animi velit voluptatem ut accusamus facilis veniam.', 'alta', 3);
INSERT INTO `pacientes` (`ID`, `nombre`, `diagnostico`, `prioridad`, `idMedico`) VALUES (4, 'accusamus', 'Nemo numquam velit iure et.', 'baja', 4);
INSERT INTO `pacientes` (`ID`, `nombre`, `diagnostico`, `prioridad`, `idMedico`) VALUES (5, 'qui', 'Iste natus assumenda quia fuga facilis voluptas.', 'baja', 5);
INSERT INTO `pacientes` (`ID`, `nombre`, `diagnostico`, `prioridad`, `idMedico`) VALUES (6, 'est', 'Porro optio perferendis aliquid omnis est quos praesentium unde.', 'alta', 6);
INSERT INTO `pacientes` (`ID`, `nombre`, `diagnostico`, `prioridad`, `idMedico`) VALUES (7, 'praesentium', 'Tempore ut necessitatibus reiciendis fugiat sapiente totam.', 'media', 7);
INSERT INTO `pacientes` (`ID`, `nombre`, `diagnostico`, `prioridad`, `idMedico`) VALUES (8, 'neque', 'Nemo a nemo expedita eum.', 'baja', 8);
INSERT INTO `pacientes` (`ID`, `nombre`, `diagnostico`, `prioridad`, `idMedico`) VALUES (9, 'nam', 'Sapiente voluptatem est non blanditiis ab iusto adipisci modi.', 'baja', 9);
INSERT INTO `pacientes` (`ID`, `nombre`, `diagnostico`, `prioridad`, `idMedico`) VALUES (10, 'qui', 'Qui molestias at ipsum est molestias dolores temporibus.', 'media', 10);
INSERT INTO `pacientes` (`ID`, `nombre`, `diagnostico`, `prioridad`, `idMedico`) VALUES (11, 'error', 'Facere recusandae ut voluptate quia fugit commodi nam.', 'media', 11);
INSERT INTO `pacientes` (`ID`, `nombre`, `diagnostico`, `prioridad`, `idMedico`) VALUES (12, 'et', 'Aliquam expedita velit minima et enim.', 'baja', 12);
INSERT INTO `pacientes` (`ID`, `nombre`, `diagnostico`, `prioridad`, `idMedico`) VALUES (13, 'sed', 'Labore possimus ut rerum reprehenderit nihil mollitia.', 'media', 13);
INSERT INTO `pacientes` (`ID`, `nombre`, `diagnostico`, `prioridad`, `idMedico`) VALUES (14, 'dolores', 'Nam sed impedit non dolor suscipit perferendis.', 'baja', 14);
INSERT INTO `pacientes` (`ID`, `nombre`, `diagnostico`, `prioridad`, `idMedico`) VALUES (15, 'odit', 'Quis qui ex voluptatibus quia atque qui.', 'alta', 15);
INSERT INTO `pacientes` (`ID`, `nombre`, `diagnostico`, `prioridad`, `idMedico`) VALUES (16, 'rerum', 'Consequatur ut cum et et ad.', 'baja', 16);
INSERT INTO `pacientes` (`ID`, `nombre`, `diagnostico`, `prioridad`, `idMedico`) VALUES (17, 'fugiat', 'Esse quia veritatis aut quia aut eveniet ipsa.', 'baja', 17);
INSERT INTO `pacientes` (`ID`, `nombre`, `diagnostico`, `prioridad`, `idMedico`) VALUES (18, 'qui', 'Molestias pariatur incidunt officia nisi numquam quae.', 'baja', 18);
INSERT INTO `pacientes` (`ID`, `nombre`, `diagnostico`, `prioridad`, `idMedico`) VALUES (19, 'aliquam', 'Eveniet sapiente nostrum iste illo earum esse totam.', 'alta', 19);
INSERT INTO `pacientes` (`ID`, `nombre`, `diagnostico`, `prioridad`, `idMedico`) VALUES (20, 'qui', 'Dolores voluptate rerum eum.', 'baja', 20);
INSERT INTO `pacientes` (`ID`, `nombre`, `diagnostico`, `prioridad`, `idMedico`) VALUES (21, 'ut', 'Quos laudantium quam fugit aut rem ipsam aliquam.', 'alta', 21);
INSERT INTO `pacientes` (`ID`, `nombre`, `diagnostico`, `prioridad`, `idMedico`) VALUES (22, 'nobis', 'Dolores facere consequatur soluta alias ut voluptates repellat commodi.', 'media', 22);
INSERT INTO `pacientes` (`ID`, `nombre`, `diagnostico`, `prioridad`, `idMedico`) VALUES (23, 'ducimus', 'Delectus nulla ipsum nobis aut sequi ea et.', 'alta', 23);
INSERT INTO `pacientes` (`ID`, `nombre`, `diagnostico`, `prioridad`, `idMedico`) VALUES (24, 'illum', 'Est molestiae et qui vero.', 'alta', 24);
INSERT INTO `pacientes` (`ID`, `nombre`, `diagnostico`, `prioridad`, `idMedico`) VALUES (25, 'exercitationem', 'Voluptatibus voluptatem nulla et est.', 'alta', 25);
INSERT INTO `pacientes` (`ID`, `nombre`, `diagnostico`, `prioridad`, `idMedico`) VALUES (26, 'nihil', 'Similique et saepe provident praesentium voluptas nihil.', 'media', 26);
INSERT INTO `pacientes` (`ID`, `nombre`, `diagnostico`, `prioridad`, `idMedico`) VALUES (27, 'aspernatur', 'Ratione sit officiis qui laborum est.', 'alta', 27);
INSERT INTO `pacientes` (`ID`, `nombre`, `diagnostico`, `prioridad`, `idMedico`) VALUES (28, 'dolor', 'Fugiat ipsa minima molestiae iure molestias.', 'baja', 28);
INSERT INTO `pacientes` (`ID`, `nombre`, `diagnostico`, `prioridad`, `idMedico`) VALUES (29, 'non', 'Necessitatibus atque qui ut eius nihil et enim.', 'media', 29);
INSERT INTO `pacientes` (`ID`, `nombre`, `diagnostico`, `prioridad`, `idMedico`) VALUES (30, 'tempore', 'Id accusamus voluptates saepe quidem.', 'media', 30);
INSERT INTO `pacientes` (`ID`, `nombre`, `diagnostico`, `prioridad`, `idMedico`) VALUES (31, 'provident', 'Quibusdam neque ut tenetur quam.', 'baja', 1);
INSERT INTO `pacientes` (`ID`, `nombre`, `diagnostico`, `prioridad`, `idMedico`) VALUES (32, 'omnis', 'Voluptatem sint sed dolores non aspernatur nihil.', 'media', 2);
INSERT INTO `pacientes` (`ID`, `nombre`, `diagnostico`, `prioridad`, `idMedico`) VALUES (33, 'blanditiis', 'Voluptatum sunt dolorum dolorem cupiditate quos.', 'baja', 3);
INSERT INTO `pacientes` (`ID`, `nombre`, `diagnostico`, `prioridad`, `idMedico`) VALUES (34, 'possimus', 'Ducimus non omnis molestias quo minima odit.', 'media', 4);
INSERT INTO `pacientes` (`ID`, `nombre`, `diagnostico`, `prioridad`, `idMedico`) VALUES (35, 'eius', 'Temporibus sed adipisci nihil non est.', 'media', 5);
INSERT INTO `pacientes` (`ID`, `nombre`, `diagnostico`, `prioridad`, `idMedico`) VALUES (36, 'optio', 'Magni velit earum accusamus sunt.', 'baja', 6);
INSERT INTO `pacientes` (`ID`, `nombre`, `diagnostico`, `prioridad`, `idMedico`) VALUES (37, 'natus', 'Aut rerum laborum sint ut.', 'baja', 7);
INSERT INTO `pacientes` (`ID`, `nombre`, `diagnostico`, `prioridad`, `idMedico`) VALUES (38, 'illum', 'Non quo et voluptas.', 'alta', 8);
INSERT INTO `pacientes` (`ID`, `nombre`, `diagnostico`, `prioridad`, `idMedico`) VALUES (39, 'omnis', 'Quidem distinctio praesentium sapiente unde aut.', 'baja', 9);
INSERT INTO `pacientes` (`ID`, `nombre`, `diagnostico`, `prioridad`, `idMedico`) VALUES (40, 'ad', 'Sunt maiores tempora voluptatem dolores labore praesentium voluptates.', 'alta', 10);


#
# TABLE STRUCTURE FOR: recursos
#

DROP TABLE IF EXISTS `recursos`;

CREATE TABLE `recursos` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` char(50) DEFAULT NULL,
  `und_disp` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `tipo` (`tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;

INSERT INTO `recursos` (`ID`, `tipo`, `und_disp`) VALUES (1, 'velit', 2);
INSERT INTO `recursos` (`ID`, `tipo`, `und_disp`) VALUES (2, 'sunt', 10);
INSERT INTO `recursos` (`ID`, `tipo`, `und_disp`) VALUES (3, 'quaerat', 7);
INSERT INTO `recursos` (`ID`, `tipo`, `und_disp`) VALUES (4, 'libero', 35);
INSERT INTO `recursos` (`ID`, `tipo`, `und_disp`) VALUES (5, 'repellendus', 37);
INSERT INTO `recursos` (`ID`, `tipo`, `und_disp`) VALUES (6, 'qui', 9);
INSERT INTO `recursos` (`ID`, `tipo`, `und_disp`) VALUES (7, 'inventore', 31);
INSERT INTO `recursos` (`ID`, `tipo`, `und_disp`) VALUES (8, 'id', 8);
INSERT INTO `recursos` (`ID`, `tipo`, `und_disp`) VALUES (9, 'odio', 32);
INSERT INTO `recursos` (`ID`, `tipo`, `und_disp`) VALUES (10, 'laborum', 17);
INSERT INTO `recursos` (`ID`, `tipo`, `und_disp`) VALUES (11, 'vitae', 0);
INSERT INTO `recursos` (`ID`, `tipo`, `und_disp`) VALUES (12, 'aut', 20);
INSERT INTO `recursos` (`ID`, `tipo`, `und_disp`) VALUES (13, 'doloribus', 38);
INSERT INTO `recursos` (`ID`, `tipo`, `und_disp`) VALUES (14, 'ipsam', 7);
INSERT INTO `recursos` (`ID`, `tipo`, `und_disp`) VALUES (15, 'tempora', 32);
INSERT INTO `recursos` (`ID`, `tipo`, `und_disp`) VALUES (16, 'ipsa', 38);
INSERT INTO `recursos` (`ID`, `tipo`, `und_disp`) VALUES (17, 'nobis', 27);
INSERT INTO `recursos` (`ID`, `tipo`, `und_disp`) VALUES (18, 'perspiciatis', 7);
INSERT INTO `recursos` (`ID`, `tipo`, `und_disp`) VALUES (19, 'quis', 31);
INSERT INTO `recursos` (`ID`, `tipo`, `und_disp`) VALUES (20, 'sint', 38);
INSERT INTO `recursos` (`ID`, `tipo`, `und_disp`) VALUES (21, 'expedita', 1);
INSERT INTO `recursos` (`ID`, `tipo`, `und_disp`) VALUES (22, 'iure', 29);
INSERT INTO `recursos` (`ID`, `tipo`, `und_disp`) VALUES (23, 'sed', 14);
INSERT INTO `recursos` (`ID`, `tipo`, `und_disp`) VALUES (24, 'atque', 2);
INSERT INTO `recursos` (`ID`, `tipo`, `und_disp`) VALUES (25, 'ut', 18);


#
# TABLE STRUCTURE FOR: registro
#

DROP TABLE IF EXISTS `registro`;

CREATE TABLE `registro` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `fh_ingreso` timestamp NOT NULL DEFAULT current_timestamp(),
  `duracion` int(11) DEFAULT NULL,
  `idPaciente` int(11) DEFAULT NULL,
  `idCama` int(11) DEFAULT NULL,
  `esInterno` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `idPaciente` (`idPaciente`),
  KEY `idCama` (`idCama`),
  CONSTRAINT `registro_ibfk_1` FOREIGN KEY (`idPaciente`) REFERENCES `pacientes` (`ID`),
  CONSTRAINT `registro_ibfk_2` FOREIGN KEY (`idCama`) REFERENCES `camas` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4;

INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (1, '1972-04-12 12:39:27', 7, 1, 31, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (2, '2014-12-20 19:01:06', 9, 2, 32, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (3, '1976-04-28 03:24:47', 1, 3, 33, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (4, '1986-11-24 14:00:31', 3, 4, 34, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (5, '1995-02-25 06:27:24', 4, 5, 35, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (6, '1988-06-28 20:34:14', 1, 6, 36, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (7, '1998-10-16 16:27:34', 2, 7, 37, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (8, '2003-11-05 20:21:02', 9, 8, 38, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (9, '1983-07-29 22:34:23', 6, 9, 39, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (10, '1987-10-07 03:40:29', 6, 10, 41, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (11, '1999-08-25 00:52:02', 8, 11, 42, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (12, '1997-11-19 05:39:21', 9, 12, 43, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (13, '1977-10-05 15:53:04', 4, 13, 44, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (14, '2012-02-25 02:25:11', 5, 14, 45, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (15, '1990-02-25 13:21:29', 7, 15, 46, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (16, '1980-03-01 15:07:17', 1, 16, 47, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (17, '1970-09-12 13:49:45', 7, 17, 48, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (18, '1985-11-05 16:15:08', 4, 18, 49, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (19, '2008-08-11 00:42:34', 4, 19, 50, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (20, '1974-11-28 15:24:26', 5, 20, 51, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (21, '2013-08-06 22:43:57', 6, 21, 52, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (22, '2019-11-14 06:43:56', 9, 22, 53, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (23, '1979-08-13 23:49:29', 6, 23, 54, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (24, '1996-06-23 01:06:57', 1, 24, 55, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (25, '1978-06-06 14:05:26', 6, 25, 56, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (26, '1975-10-31 23:53:02', 5, 26, 57, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (27, '2012-04-02 17:52:19', 9, 27, 58, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (28, '1973-06-29 10:06:15', 2, 28, 59, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (29, '2001-11-11 20:35:19', 2, 29, 60, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (30, '1973-03-08 09:16:49', 9, 30, 31, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (31, '2017-07-17 05:40:06', 8, 1, 32, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (32, '2014-09-15 01:05:49', 6, 2, 33, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (33, '2000-07-28 12:05:18', 2, 3, 34, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (34, '2018-05-16 23:48:18', 6, 4, 35, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (35, '2004-09-26 14:30:02', 9, 5, 36, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (36, '1996-09-30 06:00:32', 2, 6, 37, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (37, '1984-05-16 17:00:04', 5, 7, 38, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (38, '1976-07-29 15:00:19', 5, 8, 39, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (39, '1971-08-14 06:11:18', 1, 9, 41, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (40, '2003-12-08 07:32:20', 2, 10, 42, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (41, '2002-12-17 22:06:55', 4, 11, 43, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (42, '1997-06-30 15:47:52', 9, 12, 44, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (43, '1984-09-27 12:54:53', 7, 13, 45, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (44, '2007-05-31 15:19:36', 5, 14, 46, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (45, '2010-06-28 03:08:34', 9, 15, 47, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (46, '1979-05-21 18:52:28', 6, 16, 48, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (47, '2012-04-12 11:32:43', 7, 17, 49, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (48, '2008-09-04 22:37:54', 2, 18, 50, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (49, '2019-07-09 13:48:06', 8, 19, 51, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (50, '1970-06-04 05:48:41', 7, 20, 52, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (51, '2007-08-08 10:44:29', 8, 21, 53, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (52, '1972-12-18 16:19:41', 1, 22, 54, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (53, '2008-10-19 02:07:27', 4, 23, 55, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (54, '2007-01-11 13:06:17', 3, 24, 56, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (55, '2017-06-05 01:19:35', 9, 25, 57, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (56, '1997-10-24 10:40:06', 7, 26, 58, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (57, '2010-01-16 19:07:17', 3, 27, 59, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (58, '1976-08-11 23:05:52', 4, 28, 60, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (59, '2012-10-17 00:17:39', 7, 29, 31, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (60, '2006-05-29 03:24:13', 6, 30, 32, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (61, '2002-05-10 01:43:14', 3, 1, 33, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (62, '1981-04-10 14:18:37', 9, 2, 34, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (63, '2015-08-08 10:21:14', 1, 3, 35, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (64, '1980-06-09 19:13:14', 3, 4, 36, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (65, '2009-02-05 08:38:18', 6, 5, 37, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (66, '2013-04-27 16:52:15', 9, 6, 38, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (67, '2014-11-21 17:53:07', 6, 7, 39, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (68, '2005-06-13 10:42:08', 8, 8, 41, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (69, '1997-01-30 15:41:36', 4, 9, 42, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (70, '2011-12-31 14:32:42', 8, 10, 43, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (71, '1970-12-27 19:00:29', 3, 11, 44, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (72, '1992-11-15 21:43:42', 8, 12, 45, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (73, '1971-08-24 19:02:16', 4, 13, 46, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (74, '1981-08-14 03:11:35', 2, 14, 47, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (75, '1993-06-11 04:34:30', 4, 15, 48, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (76, '2017-12-28 07:01:05', 7, 16, 49, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (77, '2001-05-29 00:35:47', 5, 17, 50, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (78, '1985-07-27 00:21:43', 5, 18, 51, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (79, '2010-08-31 17:10:21', 6, 19, 52, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (80, '1991-01-24 07:47:43', 9, 20, 53, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (81, '1992-08-02 02:43:30', 8, 21, 54, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (82, '1973-02-22 17:21:33', 9, 22, 55, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (83, '1974-09-16 00:24:35', 8, 23, 56, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (84, '1972-09-15 01:45:14', 6, 24, 57, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (85, '1998-09-18 21:03:27', 2, 25, 58, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (86, '1985-04-23 21:41:36', 7, 26, 59, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (87, '2007-11-22 04:45:13', 2, 27, 60, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (88, '1997-10-21 22:28:16', 3, 28, 31, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (89, '1972-09-20 18:31:21', 3, 29, 32, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (90, '2016-08-10 00:15:11', 3, 30, 33, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (91, '2017-03-03 01:36:03', 4, 1, 34, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (92, '2004-02-04 14:08:56', 1, 2, 35, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (93, '1993-04-13 02:26:42', 1, 3, 36, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (94, '2012-05-23 11:27:44', 5, 4, 37, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (95, '1983-07-28 08:49:11', 6, 5, 38, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (96, '1986-04-17 08:34:07', 4, 6, 39, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (97, '1979-12-15 03:52:43', 8, 7, 41, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (98, '2001-06-03 15:29:32', 4, 8, 42, 1);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (99, '1970-08-12 03:58:04', 7, 9, 43, 0);
INSERT INTO `registro` (`ID`, `fh_ingreso`, `duracion`, `idPaciente`, `idCama`, `esInterno`) VALUES (100, '1972-05-26 12:06:01', 4, 10, 44, 0);


#
# TABLE STRUCTURE FOR: soli_equipos
#

DROP TABLE IF EXISTS `soli_equipos`;

CREATE TABLE `soli_equipos` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `idEquipo` int(11) DEFAULT NULL,
  `idPaciente` int(11) DEFAULT NULL,
  `idMedico` int(11) DEFAULT NULL,
  `cantidad` char(128) DEFAULT NULL,
  `estado` enum('abierta','rechazado','prestado','cerrado') DEFAULT NULL,
  `fechaHora` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`ID`),
  KEY `idEquipo` (`idEquipo`),
  KEY `idPaciente` (`idPaciente`),
  KEY `idMedico` (`idMedico`),
  CONSTRAINT `soli_equipos_ibfk_1` FOREIGN KEY (`idEquipo`) REFERENCES `equipos` (`ID`),
  CONSTRAINT `soli_equipos_ibfk_2` FOREIGN KEY (`idPaciente`) REFERENCES `pacientes` (`ID`),
  CONSTRAINT `soli_equipos_ibfk_3` FOREIGN KEY (`idMedico`) REFERENCES `usuarios` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=utf8mb4;

INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (1, 1, 1, 1, '1', 'abierta', '1998-05-20 01:52:50');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (2, 2, 2, 2, '', 'abierta', '1980-04-27 16:31:45');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (3, 3, 3, 3, '1', 'rechazado', '2014-02-09 10:08:39');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (4, 4, 4, 4, '', 'rechazado', '1973-11-26 15:59:37');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (5, 5, 5, 5, '', 'prestado', '2014-06-21 10:34:20');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (6, 6, 6, 6, '', 'abierta', '1997-12-30 04:16:45');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (7, 7, 7, 7, '', 'abierta', '1991-02-03 02:56:31');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (8, 8, 8, 8, '1', 'abierta', '1987-03-19 20:22:44');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (9, 9, 9, 9, '1', 'rechazado', '1976-08-06 20:13:38');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (10, 10, 10, 10, '', 'cerrado', '1998-01-01 00:34:23');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (11, 11, 11, 11, '1', 'rechazado', '1974-08-27 00:33:32');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (12, 12, 12, 12, '1', 'abierta', '1979-12-25 03:12:40');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (13, 13, 13, 13, '1', 'abierta', '1991-05-27 02:04:03');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (14, 14, 14, 14, '', 'prestado', '1998-08-08 03:09:22');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (15, 15, 15, 15, '1', 'abierta', '2019-07-17 22:13:52');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (16, 16, 16, 16, '1', 'abierta', '2002-01-31 16:57:03');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (17, 17, 17, 17, '', 'rechazado', '2016-08-12 20:05:17');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (18, 18, 18, 18, '1', 'cerrado', '2011-07-28 05:06:56');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (19, 19, 19, 19, '', 'prestado', '1998-08-08 06:32:01');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (20, 20, 20, 20, '1', 'prestado', '2016-09-28 16:58:18');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (21, 1, 21, 21, '1', 'abierta', '2004-11-27 22:00:17');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (22, 2, 22, 22, '', 'cerrado', '1999-07-07 15:43:22');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (23, 3, 23, 23, '', 'prestado', '1979-12-04 04:28:47');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (24, 4, 24, 24, '1', 'prestado', '2009-03-16 13:42:40');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (25, 5, 25, 25, '1', 'prestado', '1975-01-25 20:20:13');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (26, 6, 26, 26, '', 'rechazado', '1976-09-12 09:19:31');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (27, 7, 27, 27, '1', 'prestado', '2011-02-03 21:10:16');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (28, 8, 28, 28, '1', 'cerrado', '2003-03-15 17:50:16');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (29, 9, 29, 29, '1', 'cerrado', '1973-06-09 03:01:59');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (30, 10, 30, 30, '1', 'prestado', '1970-12-01 11:49:18');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (31, 11, 31, 1, '1', 'cerrado', '2014-01-01 20:00:59');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (32, 12, 32, 2, '', 'prestado', '1971-11-02 02:49:54');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (33, 13, 33, 3, '1', 'prestado', '1986-12-27 11:36:48');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (34, 14, 34, 4, '1', 'prestado', '2016-12-13 10:02:36');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (35, 15, 35, 5, '1', 'prestado', '1984-12-10 03:58:55');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (36, 16, 36, 6, '', 'rechazado', '2008-02-29 20:00:24');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (37, 17, 37, 7, '', 'rechazado', '1991-08-12 16:36:45');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (38, 18, 38, 8, '1', 'prestado', '1990-10-13 21:15:02');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (39, 19, 39, 9, '1', 'abierta', '1974-05-25 13:04:11');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (40, 20, 40, 10, '1', 'abierta', '1973-02-10 09:50:35');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (41, 1, 1, 11, '1', 'prestado', '2007-09-18 03:04:38');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (42, 2, 2, 12, '', 'prestado', '2013-04-25 19:10:50');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (43, 3, 3, 13, '', 'prestado', '2014-04-25 03:11:18');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (44, 4, 4, 14, '', 'abierta', '2003-11-25 19:24:03');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (45, 5, 5, 15, '1', 'prestado', '1995-10-09 01:51:17');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (46, 6, 6, 16, '1', 'cerrado', '2012-06-15 06:02:24');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (47, 7, 7, 17, '', 'rechazado', '1979-04-04 15:15:06');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (48, 8, 8, 18, '', 'rechazado', '2003-10-03 00:40:48');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (49, 9, 9, 19, '1', 'cerrado', '2016-07-25 01:04:55');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (50, 10, 10, 20, '1', 'rechazado', '2015-03-22 18:55:38');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (51, 11, 11, 21, '', 'prestado', '2007-02-10 12:44:46');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (52, 12, 12, 22, '1', 'prestado', '1996-11-14 03:20:36');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (53, 13, 13, 23, '', 'cerrado', '1974-06-09 14:05:19');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (54, 14, 14, 24, '', 'cerrado', '1981-02-25 07:13:06');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (55, 15, 15, 25, '', 'prestado', '1989-08-31 10:19:52');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (56, 16, 16, 26, '1', 'cerrado', '1983-12-31 10:11:48');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (57, 17, 17, 27, '', 'rechazado', '1986-05-14 18:47:29');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (58, 18, 18, 28, '', 'prestado', '2009-03-23 17:26:56');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (59, 19, 19, 29, '1', 'abierta', '1978-03-04 07:04:45');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (60, 20, 20, 30, '', 'prestado', '2010-06-09 17:39:03');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (61, 1, 21, 1, '1', 'prestado', '1988-08-25 19:26:42');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (62, 2, 22, 2, '1', 'cerrado', '1980-02-23 08:26:55');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (63, 3, 23, 3, '', 'abierta', '2001-03-17 22:56:22');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (64, 4, 24, 4, '1', 'cerrado', '2001-11-21 16:34:37');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (65, 5, 25, 5, '1', 'rechazado', '1985-12-16 16:43:22');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (66, 6, 26, 6, '1', 'prestado', '1982-09-29 10:24:48');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (67, 7, 27, 7, '1', 'prestado', '2019-08-30 01:51:14');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (68, 8, 28, 8, '', 'rechazado', '2017-01-18 13:51:57');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (69, 9, 29, 9, '1', 'rechazado', '1999-04-22 00:13:27');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (70, 10, 30, 10, '', 'cerrado', '1997-09-18 19:23:45');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (71, 11, 31, 11, '1', 'rechazado', '1970-07-29 11:47:08');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (72, 12, 32, 12, '', 'abierta', '1976-06-15 16:47:04');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (73, 13, 33, 13, '', 'abierta', '1983-10-16 19:14:05');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (74, 14, 34, 14, '1', 'rechazado', '2004-09-01 17:49:55');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (75, 15, 35, 15, '', 'cerrado', '1995-07-03 16:58:49');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (76, 16, 36, 16, '1', 'rechazado', '1975-08-30 13:20:58');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (77, 17, 37, 17, '', 'abierta', '2019-10-07 01:53:04');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (78, 18, 38, 18, '1', 'prestado', '2005-10-21 17:45:22');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (79, 19, 39, 19, '1', 'cerrado', '1975-08-12 22:50:20');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (80, 20, 40, 20, '1', 'rechazado', '1979-02-08 02:14:39');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (81, 1, 1, 21, '', 'prestado', '2004-01-12 04:25:43');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (82, 2, 2, 22, '', 'rechazado', '2017-06-17 02:51:18');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (83, 3, 3, 23, '1', 'abierta', '1983-07-05 22:56:38');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (84, 4, 4, 24, '', 'prestado', '2009-06-28 15:35:07');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (85, 5, 5, 25, '', 'cerrado', '1985-10-01 09:53:11');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (86, 6, 6, 26, '', 'cerrado', '1970-07-22 02:11:49');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (87, 7, 7, 27, '1', 'abierta', '2004-09-10 19:24:29');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (88, 8, 8, 28, '', 'abierta', '2012-12-20 20:53:02');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (89, 9, 9, 29, '', 'rechazado', '1973-02-07 01:46:28');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (90, 10, 10, 30, '', 'cerrado', '1972-05-22 13:45:02');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (91, 11, 11, 1, '1', 'abierta', '1970-09-09 22:39:43');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (92, 12, 12, 2, '1', 'rechazado', '1999-03-11 13:19:34');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (93, 13, 13, 3, '1', 'abierta', '1995-12-19 00:11:12');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (94, 14, 14, 4, '1', 'prestado', '2015-05-27 03:39:08');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (95, 15, 15, 5, '', 'cerrado', '1997-01-21 05:10:06');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (96, 16, 16, 6, '1', 'rechazado', '1982-06-29 00:09:33');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (97, 17, 17, 7, '1', 'cerrado', '2019-12-19 08:57:33');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (98, 18, 18, 8, '1', 'prestado', '1989-07-22 11:54:04');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (99, 19, 19, 9, '1', 'cerrado', '1973-10-09 04:02:12');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (100, 20, 20, 10, '1', 'cerrado', '2014-04-08 07:08:27');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (101, 1, 21, 11, '', 'prestado', '1985-03-15 13:26:00');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (102, 2, 22, 12, '1', 'rechazado', '1982-10-20 16:52:33');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (103, 3, 23, 13, '', 'prestado', '2019-09-29 18:57:47');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (104, 4, 24, 14, '', 'prestado', '1998-08-06 20:04:35');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (105, 5, 25, 15, '', 'prestado', '1993-12-29 05:44:04');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (106, 6, 26, 16, '', 'cerrado', '2008-01-16 07:23:45');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (107, 7, 27, 17, '1', 'rechazado', '1983-01-23 16:21:06');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (108, 8, 28, 18, '', 'rechazado', '1988-06-24 09:20:22');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (109, 9, 29, 19, '1', 'prestado', '2000-03-13 04:07:13');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (110, 10, 30, 20, '', 'prestado', '1980-02-27 00:09:03');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (111, 11, 31, 21, '', 'prestado', '1985-09-01 22:03:49');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (112, 12, 32, 22, '', 'abierta', '2003-05-26 08:34:04');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (113, 13, 33, 23, '1', 'rechazado', '1989-08-10 06:32:43');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (114, 14, 34, 24, '1', 'cerrado', '2015-04-21 06:45:11');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (115, 15, 35, 25, '', 'abierta', '2010-04-16 02:17:39');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (116, 16, 36, 26, '', 'prestado', '2009-01-01 16:13:43');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (117, 17, 37, 27, '1', 'prestado', '1984-04-29 18:19:36');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (118, 18, 38, 28, '', 'abierta', '2019-01-31 11:09:34');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (119, 19, 39, 29, '', 'rechazado', '2009-01-30 08:16:43');
INSERT INTO `soli_equipos` (`ID`, `idEquipo`, `idPaciente`, `idMedico`, `cantidad`, `estado`, `fechaHora`) VALUES (120, 20, 40, 30, '', 'abierta', '2017-10-05 04:06:43');


#
# TABLE STRUCTURE FOR: soli_recursos
#

DROP TABLE IF EXISTS `soli_recursos`;

CREATE TABLE `soli_recursos` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `idRecurso` int(11) DEFAULT NULL,
  `idPaciente` int(11) DEFAULT NULL,
  `cantidad` char(128) DEFAULT NULL,
  `estado` enum('abierta','rechazado','prestado','cerrado') DEFAULT NULL,
  `fechaHora` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`ID`),
  KEY `idRecurso` (`idRecurso`),
  KEY `idPaciente` (`idPaciente`),
  CONSTRAINT `soli_recursos_ibfk_1` FOREIGN KEY (`idRecurso`) REFERENCES `recursos` (`ID`),
  CONSTRAINT `soli_recursos_ibfk_2` FOREIGN KEY (`idPaciente`) REFERENCES `pacientes` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4;

INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (1, 1, 1, '1', 'prestado', '1971-06-22 14:43:54');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (2, 2, 2, '3', 'abierta', '2009-05-01 07:57:43');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (3, 3, 3, '3', 'rechazado', '2011-12-11 17:25:27');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (4, 4, 4, '7', 'prestado', '1997-05-09 07:44:15');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (5, 5, 5, '9', 'cerrado', '1988-11-20 15:21:29');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (6, 6, 6, '9', 'abierta', '1977-09-29 15:22:23');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (7, 7, 7, '3', 'prestado', '1971-03-30 03:59:45');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (8, 8, 8, '9', 'abierta', '1992-02-03 01:16:22');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (9, 9, 9, '8', 'cerrado', '2005-01-04 11:49:56');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (10, 10, 10, '7', 'rechazado', '1991-05-28 02:33:30');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (11, 11, 11, '3', 'rechazado', '1971-02-12 03:39:29');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (12, 12, 12, '8', 'abierta', '2002-03-13 10:33:50');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (13, 13, 13, '3', 'prestado', '1990-04-12 04:57:15');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (14, 14, 14, '2', 'cerrado', '2017-12-14 22:21:23');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (15, 15, 15, '6', 'rechazado', '1991-04-20 00:11:33');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (16, 16, 16, '9', 'rechazado', '1994-09-25 18:12:35');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (17, 17, 17, '7', 'abierta', '2017-10-23 04:50:07');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (18, 18, 18, '7', 'abierta', '2004-11-13 03:58:41');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (19, 19, 19, '7', 'abierta', '1980-07-15 19:48:13');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (20, 20, 20, '9', 'rechazado', '1982-07-17 21:21:06');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (21, 21, 21, '4', 'abierta', '1990-12-12 13:35:10');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (22, 22, 22, '3', 'abierta', '1997-09-17 14:36:51');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (23, 23, 23, '8', 'prestado', '2016-10-15 01:30:48');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (24, 24, 24, '3', 'prestado', '1984-03-13 16:10:18');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (25, 25, 25, '2', 'prestado', '2007-03-08 14:56:35');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (26, 1, 26, '8', 'cerrado', '2017-03-27 11:18:57');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (27, 2, 27, '3', 'abierta', '1998-12-01 18:07:57');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (28, 3, 28, '2', 'cerrado', '1977-09-24 07:12:14');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (29, 4, 29, '1', 'cerrado', '2012-02-20 12:06:42');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (30, 5, 30, '6', 'abierta', '1990-06-14 18:00:46');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (31, 6, 31, '1', 'rechazado', '1975-12-25 10:15:12');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (32, 7, 32, '8', 'prestado', '1973-06-19 02:47:48');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (33, 8, 33, '7', 'cerrado', '2000-05-27 21:53:09');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (34, 9, 34, '5', 'rechazado', '1979-12-07 11:16:43');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (35, 10, 35, '4', 'rechazado', '1977-10-27 04:46:04');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (36, 11, 36, '8', 'cerrado', '2000-05-09 11:06:42');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (37, 12, 37, '1', 'abierta', '2013-03-28 22:03:20');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (38, 13, 38, '5', 'prestado', '2000-12-15 10:05:06');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (39, 14, 39, '7', 'prestado', '1995-12-03 01:52:15');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (40, 15, 40, '5', 'cerrado', '2013-03-08 13:44:08');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (41, 16, 1, '6', 'cerrado', '2004-08-31 05:46:56');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (42, 17, 2, '6', 'rechazado', '2013-11-14 22:34:46');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (43, 18, 3, '8', 'prestado', '1979-05-23 15:07:48');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (44, 19, 4, '2', 'prestado', '1971-06-17 23:35:29');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (45, 20, 5, '7', 'rechazado', '2006-03-11 17:33:49');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (46, 21, 6, '4', 'prestado', '2012-11-21 10:02:31');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (47, 22, 7, '7', 'cerrado', '1992-08-04 02:34:31');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (48, 23, 8, '8', 'abierta', '1991-01-27 00:38:41');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (49, 24, 9, '7', 'cerrado', '2015-08-22 00:41:46');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (50, 25, 10, '6', 'abierta', '2019-08-01 23:57:17');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (51, 1, 11, '2', 'prestado', '1991-08-23 19:19:18');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (52, 2, 12, '9', 'cerrado', '1985-10-29 12:48:34');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (53, 3, 13, '1', 'cerrado', '2012-01-15 07:20:06');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (54, 4, 14, '2', 'cerrado', '1971-09-19 05:46:19');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (55, 5, 15, '9', 'prestado', '1970-07-04 06:36:17');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (56, 6, 16, '9', 'cerrado', '2009-05-22 17:26:33');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (57, 7, 17, '8', 'prestado', '1975-03-12 18:29:24');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (58, 8, 18, '1', 'rechazado', '1984-08-14 21:45:33');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (59, 9, 19, '6', 'rechazado', '2003-05-08 06:49:06');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (60, 10, 20, '5', 'abierta', '2005-08-07 11:03:16');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (61, 11, 21, '8', 'rechazado', '1991-01-22 21:18:28');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (62, 12, 22, '6', 'rechazado', '1997-04-18 03:04:53');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (63, 13, 23, '4', 'cerrado', '2009-11-01 20:50:44');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (64, 14, 24, '8', 'cerrado', '1977-10-29 13:35:22');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (65, 15, 25, '6', 'abierta', '1999-06-27 10:50:06');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (66, 16, 26, '2', 'cerrado', '1980-10-13 04:15:25');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (67, 17, 27, '2', 'abierta', '2001-01-08 21:04:29');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (68, 18, 28, '3', 'prestado', '1980-03-14 02:45:07');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (69, 19, 29, '9', 'rechazado', '1970-01-13 03:43:51');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (70, 20, 30, '3', 'prestado', '2003-06-11 11:19:19');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (71, 21, 31, '7', 'cerrado', '1997-08-25 01:25:09');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (72, 22, 32, '9', 'cerrado', '1984-04-07 07:43:09');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (73, 23, 33, '9', 'abierta', '2018-10-20 14:16:56');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (74, 24, 34, '9', 'prestado', '2005-03-23 18:51:36');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (75, 25, 35, '4', 'abierta', '1988-08-21 13:19:56');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (76, 1, 36, '3', 'abierta', '2009-12-06 21:15:00');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (77, 2, 37, '1', 'rechazado', '2006-06-21 00:15:17');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (78, 3, 38, '9', 'rechazado', '2008-03-20 03:29:28');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (79, 4, 39, '9', 'abierta', '1972-12-12 15:17:01');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (80, 5, 40, '5', 'prestado', '2000-12-22 18:56:21');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (81, 6, 1, '4', 'cerrado', '2014-10-03 12:55:05');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (82, 7, 2, '2', 'prestado', '2010-10-19 22:14:21');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (83, 8, 3, '3', 'rechazado', '1973-06-07 16:21:05');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (84, 9, 4, '1', 'cerrado', '1988-05-02 00:20:56');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (85, 10, 5, '6', 'cerrado', '1970-12-12 22:18:02');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (86, 11, 6, '9', 'rechazado', '1982-04-23 18:10:54');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (87, 12, 7, '9', 'cerrado', '1997-11-25 15:51:30');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (88, 13, 8, '8', 'abierta', '2019-08-10 09:59:31');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (89, 14, 9, '3', 'prestado', '2014-06-05 11:41:28');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (90, 15, 10, '5', 'prestado', '1979-08-16 19:56:23');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (91, 16, 11, '3', 'rechazado', '2010-03-15 12:38:01');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (92, 17, 12, '7', 'cerrado', '1989-10-03 22:18:56');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (93, 18, 13, '5', 'rechazado', '2002-09-13 11:15:24');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (94, 19, 14, '6', 'prestado', '2017-02-19 13:41:47');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (95, 20, 15, '1', 'cerrado', '2010-10-24 13:18:25');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (96, 21, 16, '5', 'prestado', '2011-10-28 07:37:41');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (97, 22, 17, '7', 'cerrado', '1972-05-13 04:58:17');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (98, 23, 18, '1', 'prestado', '2001-06-24 16:12:15');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (99, 24, 19, '8', 'prestado', '1998-10-10 10:55:57');
INSERT INTO `soli_recursos` (`ID`, `idRecurso`, `idPaciente`, `cantidad`, `estado`, `fechaHora`) VALUES (100, 25, 20, '7', 'prestado', '1989-03-25 11:18:38');


#
# TABLE STRUCTURE FOR: usuarios
#

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` char(128) DEFAULT NULL,
  `mail` char(50) DEFAULT NULL,
  `rol` enum('admin','medic') DEFAULT NULL,
  `pass` char(128) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `mail` (`mail`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;

INSERT INTO `usuarios` (`ID`, `nombre`, `mail`, `rol`, `pass`) VALUES (1, 'Modi iusto vero aut deleniti.', 'harvey.arely@example.net', 'admin', 'bd2bcbc86d15a72a8598aa5ab957b0eb');
INSERT INTO `usuarios` (`ID`, `nombre`, `mail`, `rol`, `pass`) VALUES (2, 'Officia similique esse dolorem quod temporibus et.', 'gosinski@example.org', 'admin', '7cd38d85914d415929fcbe85d383f0ae');
INSERT INTO `usuarios` (`ID`, `nombre`, `mail`, `rol`, `pass`) VALUES (3, 'Magni sed sed perspiciatis at ipsam quisquam.', 'gorczany.amira@example.com', 'admin', '1625b90e3c46f4563242b17ae69d66e9');
INSERT INTO `usuarios` (`ID`, `nombre`, `mail`, `rol`, `pass`) VALUES (4, 'Accusamus sunt doloribus non et repellendus quis blanditiis.', 'kaley.boyle@example.org', 'admin', '5eb02dc559dcaf3a1e01f54b138f9ea5');
INSERT INTO `usuarios` (`ID`, `nombre`, `mail`, `rol`, `pass`) VALUES (5, 'Necessitatibus accusantium ut debitis autem.', 'johns.elmo@example.com', 'medic', 'a7713bd328fc0801666e2a413662fda6');
INSERT INTO `usuarios` (`ID`, `nombre`, `mail`, `rol`, `pass`) VALUES (6, 'At nam exercitationem nesciunt architecto repudiandae quis natus.', 'geraldine.doyle@example.com', 'admin', '6b3404ff85bc47c9cd8c1302ec6f6776');
INSERT INTO `usuarios` (`ID`, `nombre`, `mail`, `rol`, `pass`) VALUES (7, 'Modi laborum et cum voluptatum.', 'dubuque.mckenzie@example.com', 'admin', '6afc83e5da4d0b75122c9a88dd7bb803');
INSERT INTO `usuarios` (`ID`, `nombre`, `mail`, `rol`, `pass`) VALUES (8, 'Dolorem nostrum nam in velit possimus qui culpa.', 'hermann.thaddeus@example.com', 'admin', '8a880283edae98afdbee37804915ed7b');
INSERT INTO `usuarios` (`ID`, `nombre`, `mail`, `rol`, `pass`) VALUES (9, 'Aut vel aspernatur velit harum.', 'ratke.sydni@example.org', 'medic', '7e36b687cffc8dd5278cb564b660ad75');
INSERT INTO `usuarios` (`ID`, `nombre`, `mail`, `rol`, `pass`) VALUES (10, 'In voluptas sit nam hic quam hic perspiciatis.', 'qjast@example.org', 'admin', '78a42f35f9a733766756e6127d0fb4d7');
INSERT INTO `usuarios` (`ID`, `nombre`, `mail`, `rol`, `pass`) VALUES (11, 'Cum sed laudantium qui qui.', 'heaney.vesta@example.org', 'admin', '92e3de296954b48cb5e0d1a657dbfb3e');
INSERT INTO `usuarios` (`ID`, `nombre`, `mail`, `rol`, `pass`) VALUES (12, 'Autem quibusdam eos qui dolorem eveniet totam earum tempora.', 'kovacek.amya@example.net', 'admin', 'd319e33f0e6a35e737e111d0cae8d4b7');
INSERT INTO `usuarios` (`ID`, `nombre`, `mail`, `rol`, `pass`) VALUES (13, 'Omnis et est et architecto voluptatum vel aut.', 'williamson.annetta@example.net', 'medic', 'a293f8f1e26d86ed93efa19a685a71e5');
INSERT INTO `usuarios` (`ID`, `nombre`, `mail`, `rol`, `pass`) VALUES (14, 'Et magnam earum omnis deserunt.', 'gleason.montana@example.com', 'medic', 'e96dc26c34472dd8611924b1a238d556');
INSERT INTO `usuarios` (`ID`, `nombre`, `mail`, `rol`, `pass`) VALUES (15, 'Optio illum eos et ipsum.', 'okuphal@example.org', 'admin', '973d26cb20f25953e017be575af7ed48');
INSERT INTO `usuarios` (`ID`, `nombre`, `mail`, `rol`, `pass`) VALUES (16, 'Cupiditate ipsum quis accusantium et ducimus quo quae.', 'whomenick@example.net', 'medic', 'dc84e811922c64aeb62dfd1e06ab5c74');
INSERT INTO `usuarios` (`ID`, `nombre`, `mail`, `rol`, `pass`) VALUES (17, 'Excepturi iusto omnis laboriosam odit.', 'vernie.maggio@example.com', 'medic', '147fdecbdb606543c7e05da6067bb57c');
INSERT INTO `usuarios` (`ID`, `nombre`, `mail`, `rol`, `pass`) VALUES (18, 'Eos aperiam omnis saepe.', 'freddy50@example.org', 'admin', 'e5055f3b1d2c9072840498ec525a42b3');
INSERT INTO `usuarios` (`ID`, `nombre`, `mail`, `rol`, `pass`) VALUES (19, 'In dolores molestias at iure dolorum corrupti incidunt.', 'price.melody@example.org', 'medic', '19cd1591b5f114bce44faa31432eeda7');
INSERT INTO `usuarios` (`ID`, `nombre`, `mail`, `rol`, `pass`) VALUES (20, 'Dolorum quod aspernatur officia.', 'beier.nikko@example.net', 'medic', 'ce306e2eeaaff0e72710eb214a3eaf97');
INSERT INTO `usuarios` (`ID`, `nombre`, `mail`, `rol`, `pass`) VALUES (21, 'Cum sed sit temporibus et vel repudiandae magni.', 'lora.pfannerstill@example.net', 'medic', '284521b76960db3cc5b4a840aa6abe3b');
INSERT INTO `usuarios` (`ID`, `nombre`, `mail`, `rol`, `pass`) VALUES (22, 'Qui saepe reprehenderit quia blanditiis aut est.', 'bruen.orlando@example.net', 'admin', '827a2e94dc14991427029617cd711ef9');
INSERT INTO `usuarios` (`ID`, `nombre`, `mail`, `rol`, `pass`) VALUES (23, 'Sunt facere dignissimos qui rerum dicta quaerat deserunt illum.', 'cpurdy@example.net', 'admin', '72b4ac613997b36d926bd771b3913d2b');
INSERT INTO `usuarios` (`ID`, `nombre`, `mail`, `rol`, `pass`) VALUES (24, 'Neque voluptatem aliquam doloremque qui et ex quas.', 'dayne.rath@example.com', 'medic', '13c80c209f3815c3d7a0f7f0efbeba8e');
INSERT INTO `usuarios` (`ID`, `nombre`, `mail`, `rol`, `pass`) VALUES (25, 'Provident consequuntur repudiandae sequi aliquid.', 'mark.leuschke@example.com', 'admin', '1b419d7b92bd505c7d098dfe619f29fb');
INSERT INTO `usuarios` (`ID`, `nombre`, `mail`, `rol`, `pass`) VALUES (26, 'Quibusdam iure consectetur nostrum ut vel corporis at.', 'kessler.jeanette@example.com', 'admin', '1f414528c1f0724d06932ff22137ca97');
INSERT INTO `usuarios` (`ID`, `nombre`, `mail`, `rol`, `pass`) VALUES (27, 'Maxime laborum harum aliquam nulla.', 'antonia51@example.net', 'admin', '9d85a23c24c6ea30d20a70447b072c65');
INSERT INTO `usuarios` (`ID`, `nombre`, `mail`, `rol`, `pass`) VALUES (28, 'Ab voluptatum eligendi accusamus aperiam dolorem eos et.', 'goldner.josianne@example.com', 'admin', '42111d56abf3abd24c5aab8f2fe86930');
INSERT INTO `usuarios` (`ID`, `nombre`, `mail`, `rol`, `pass`) VALUES (29, 'Quibusdam autem blanditiis dolor quos.', 'ariane68@example.net', 'medic', 'f4a3ef6e8e249c2efe8f5f1b15c069fb');
INSERT INTO `usuarios` (`ID`, `nombre`, `mail`, `rol`, `pass`) VALUES (30, 'Ducimus sapiente unde ducimus.', 'sim57@example.org', 'admin', '01d26d04f170adee39d740e55d35efc3');


