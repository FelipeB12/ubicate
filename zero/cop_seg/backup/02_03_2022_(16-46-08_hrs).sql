SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE IF NOT EXISTS u494777114_empre;

USE u494777114_empre;

DROP TABLE IF EXISTS admins;

CREATE TABLE `admins` (
  `ad_id` int(22) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `ad_email` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `ad_pas` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO admins VALUES("1","Zero","zero@mail.com","adminzero");



DROP TABLE IF EXISTS login;

CREATE TABLE `login` (
  `u_nom` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `u_cor` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `u_cont` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `u_telf` int(11) NOT NULL,
  `nom_neg` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `u_id` int(22) NOT NULL AUTO_INCREMENT,
  `u_neg_id` int(22) NOT NULL,
  `neg_dir` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `u_cont_ad` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `u_pla` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO login VALUES("Administador 1","Ad1@mail.com","","0","","1","0","","ad1","");
INSERT INTO login VALUES("Administador 2","Ad2@mail.com","","0","","2","0","","ad2","");
INSERT INTO login VALUES("Administador 3","Ad3@mail.com","","0","nelson","3","0","xgrrbyjp725","ad3","");
INSERT INTO login VALUES("Administador 4","Ad4@mail.com","","0","","4","0","","ad4","");
INSERT INTO login VALUES("Administador 5","Ad5@mail.com","","0","","5","0","","ad5","");
INSERT INTO login VALUES("Administador 6","Ad6@mail.com","","0","","6","0","","ad6","");
INSERT INTO login VALUES("Administador 7","Ad7@mail.com","","0","","7","0","","ad7","");
INSERT INTO login VALUES("Administador 8","Ad8@mail.com","","0","","8","0","","ad8","");
INSERT INTO login VALUES("Administador 9","Ad9@mail.com","","0","","9","0","","ad9","");
INSERT INTO login VALUES("Administador 10","Ad10@mail.com","","0","","10","0","","ad10","");
INSERT INTO login VALUES("josefito","josefito@mail.com","ccc","123","ccc","19","0","no tengo","admin","17000");
INSERT INTO login VALUES("juan","juan@mail.com","123","123","123","20","0","123","admin","123");



DROP TABLE IF EXISTS tb_empresas;

CREATE TABLE `tb_empresas` (
  `Emp_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Emp_Nom` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `Usr_Id` int(11) NOT NULL,
  `Emp_Pro` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `Emp_Ser` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `Emp_Pre` int(255) NOT NULL,
  PRIMARY KEY (`Emp_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO tb_empresas VALUES("1","Empresa 1","1","Tennis Converse","venta","60000");
INSERT INTO tb_empresas VALUES("2","Empresa 2","2","Chaqueta de cuero","Venta","170000");
INSERT INTO tb_empresas VALUES("3","Empresa 3","3","Bufanda tejida","Venta","12000");
INSERT INTO tb_empresas VALUES("4","Empresa 4","4","Chaqueta rompeviento","Venta","120000");



DROP TABLE IF EXISTS tb_inf;

CREATE TABLE `tb_inf` (
  `Cat_Neg_Nom` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `Cat_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Neg_Id` int(11) NOT NULL,
  `Cat_Tel` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `Cat_Pro` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `Cat_Dir` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Cat_Pre` int(255) NOT NULL,
  `Cat_Des` text COLLATE utf8_spanish_ci NOT NULL,
  `Cat_hor` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`Cat_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO tb_inf VALUES("ccc","1","19","345","Felipe Beltrán","Cra 10b # 9-","0","345","345");



SET FOREIGN_KEY_CHECKS=1;