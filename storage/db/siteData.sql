-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.21-0ubuntu0.16.04.1 - (Ubuntu)
-- SO del servidor:              Linux
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando datos para la tabla cpg.jugadors: ~38 rows (aproximadamente)
DELETE FROM `jugadors`;
/*!40000 ALTER TABLE `jugadors` DISABLE KEYS */;
INSERT INTO `jugadors` (`id`, `nombre`, `pais_id`, `posicion_id`, `provincia_id`, `telefono`, `edad`, `fecha_nacimiento`, `altura`, `peso`, `club`, `historia`, `link_img`, `link_video`, `mensaje`, `pasaporte`, `documento`, `email`, `password`, `estado`, `habilitado`, `manager_id`, `remember_token`, `created_at`, `updated_at`, `slug`) VALUES
	(28, 'xavier ambrosio', 1, 3, 24, '2974197335', 20, NULL, 179, 79, 'Universidad de Belgrano', 'Luis Avila e Hijos\r\nLa banda', 'xavier-ambrosio.jpg', '', NULL, 0, NULL, 'ambrosio.xavier@gmail.com', '$2y$10$x.8bG37Fqe.LRK91xFxxdey2g7nYpVdl2/41S6PHBiXwx8K5D1ijS', '1', NULL, NULL, NULL, '2015-07-01 23:49:35', '2018-03-22 14:38:05', 'xavier-ambrosio-FB5d'),
	(29, 'Lucas Manuel Zelarayán', 1, 4, 5, '15340302321', 23, NULL, 172, 72, 'Belgrano de Córdoba', 'Las Palmas', 'Lucas-Manuel-Zelarayan.JPG', '1Qs_bcjaTbI', NULL, 1, NULL, 'lucasmanuel@hotmail.com', '$2y$10$HYU0Ro2.Ypy0wli60ov7n.w3J96v8mFSW4fg/NiskE.nesKiRc9mO', '1', NULL, NULL, NULL, '2015-07-02 00:34:06', '2018-03-22 14:38:05', 'lucas-manuel-zelarayan-oqZL'),
	(31, 'Ian ninkovic', 1, 3, 4, '2974303006', 20, NULL, 170, 67, 'Libre', 'CAI Comodoro Rivadavia, CA Rada Tilly,  CA Lanus(5ta y 6ta), Alcobendas Levitt(3ra div españa)\r\n*seleccion Comodoro Rivadavia, seleccion Chuvut	\r\n							', '', '', NULL, 1, NULL, 'iaan_1095@hotmail.com', '$2y$10$ffqXmmQuBjTWIHsZDGKvYOQm9VQ6zjE7SdulmmyPmc57DV/Yua8Qa', '1', NULL, NULL, NULL, '2015-08-11 14:44:18', '2018-03-22 14:38:05', 'ian-ninkovic-sRla'),
	(33, 'Gabriel Cevallos', 62, 1, 0, '+593999297743', 22, NULL, 178, 74, 'Valle del Chota', 'Formativas de LDU Quito; Aucas, Universidas Católica Quito.', 'Gabriel-Cevallos.jpg', '', NULL, 1, NULL, 'gabo_soccer1927@hotmail.com', '$2y$10$hzr4PkHteEDgLODemQCM9uepdOl58xIZ5Syd0GvrsjSWhiBr15/bW', '1', NULL, NULL, NULL, '2015-09-26 01:48:30', '2018-03-22 14:38:05', 'gabriel-cevallos-3pCO'),
	(34, 'Ale distefano', 1, 1, 1, '1538780061', 23, NULL, 186, 77, 'centro español', 'inferiores en mandiyu', 'Ale-distefano.jpg', 'BC-Fw0dLnLo', NULL, 1, NULL, 'jor_1192@hotmail.com', '$2y$10$BERIXHE90Is13v1xFO.YheJmAaCPdhjGgX2.2TUkkZs.HOBLT/fUC', '1', NULL, NULL, NULL, '2015-09-28 07:29:43', '2018-03-22 14:38:05', 'ale-distefano-AI1y'),
	(36, 'Walter Guerra', 1, 4, 24, '1131537675', 25, NULL, 173, 69, 'Ninguno', '8va y 7ma en Vélez, 6ta en Lamadrid', '', '', NULL, 0, NULL, 'waltergasolero@hotmail.com', '$2y$10$IFPnCQhfwY0V5MtquckzfuHB8wkO4jbp778tYcMwQg2qnPfO8Il5G', '1', NULL, NULL, NULL, '2015-10-08 18:22:59', '2018-03-22 14:38:05', 'walter-guerra-AEmg'),
	(37, 'Carlos "Torito" Messi', 1, 4, 5, '+351 351 351 351', 32, NULL, 185, 65, 'River', 'Comencé en River, a los 14 me llamaron del Málaga, pero me decidí por el Barza. Estuve dos años ahí, luego me llevaron al PSG donde lo saqué campeón 6 años seguidos. Genial ¿verdad? Actualmente estoy jugando en Belgrano, donde creo que algún día, quizás, ', 'Carlos-Torito-Messi.png', 'bVOTjO78BxE', NULL, 1, NULL, 'kuncitotevez@gmail.com', '$2y$10$918uREncwVCq3gJREzCYNe7ZR3nnXaWcoxWrTxMvOSpdR4oCkKvrK', '1', NULL, NULL, NULL, '2015-10-24 00:34:14', '2018-03-22 14:38:05', 'carlos-torito-messi-A680'),
	(40, 'Matías Gutman ', 1, 4, 24, '', 18, NULL, 176, 73, 'River plate', 'Boca y river ', 'Matias-Gutman.jpeg', '', NULL, 1, NULL, 'matigutman@gmail.com', '$2y$10$11ldAhL2Zv4N/u8rvtCLl.60gJa1agp.Vgprc.prko11vWCZdL.ye', '1', NULL, NULL, NULL, '2016-05-03 15:10:32', '2018-03-22 14:38:05', 'matias-gutman-CaWs'),
	(43, 'Santiago Villafañe', 1, 2, 4, '+542974299108', 20, NULL, 172, 68, 'Libre', '•	En el año 2005 a la edad de los 9 años fichado por la Comisión de Actividades Infantiles (CAI) ,que en ese entonces limitaba en la B Nacional (Liga de Ascenso), desde su escuelita de futbol para jugar en sus divisiones inferiores. \r\n•	Forme parte de la ', 'Santiago-Villafane.JPG', '', NULL, 1, NULL, 'santi.villafane10@gmail.com', '$2y$10$pOyz.Xk8AhpCZQ27FuiEFugsE/IqJ.bQywYj.MZxS1i6.PGOUMljK', '1', NULL, NULL, NULL, '2016-06-04 05:21:28', '2018-03-22 14:38:05', 'santiago-villafane-ZIlC'),
	(49, 'Gonzalo Marquez', 1, 3, 5, '3472432067', 33, NULL, 189, 105, '', '', '', '', NULL, 1, NULL, 'marquezgonzalo@gmail.com', '$2y$10$jqkPOQmJNLTRiYjtV0KWh.kWQEhjpvLL29q0FxccgYmKUuIkzNScO', '1', NULL, NULL, NULL, '2016-07-07 01:22:01', '2018-03-22 14:38:05', 'gonzalo-marquez-QJfG'),
	(59, 'Alejandro Solito', 1, 1, 24, '+54 1161959052', 22, NULL, 184, 78, 'Libre', 'Inferiores en Lanús \r\nPrimera en Talleres de Remedios de Escalada\r\nPre selección Argentina sub-20 2014', NULL, 'bt-nkcWDIoQ', NULL, 1, NULL, 'ale.solito@hotmail.com', '$2y$10$2G1IBYniyeeXztR4wZ/cG.CfmZXpGfrZ6f0V4ujvAi2l3r6QSdGPq', '1', NULL, NULL, NULL, '2018-01-31 02:30:39', '2018-03-22 14:38:05', 'alejandro-solito-B0tL'),
	(60, 'Alan Gonzalez', 1, 3, 1, '+542474417754', 19, NULL, 175, 70, 'Defensores de Salto Federal B', 'Douglas Haig de Pergamino', NULL, 'Sb0ZetzRQKg', NULL, 0, NULL, 'alan_20081@hotmail.com', '$2y$10$ePjVd.BALIdHmfdnNfXrGeYglYuhrsKG982XcQtoir2TMTrbo83eO', '1', NULL, NULL, NULL, '2018-01-31 20:56:33', '2018-03-22 14:38:05', 'alan-gonzalez-7ah0'),
	(62, 'Nazareno Catalan', 1, 2, 1, '2915123065', 19, NULL, 165, 59, 'Liga comercial', 'Sindicato luz y fuerza liga comercial', NULL, '0', NULL, 1, NULL, 'naza_speedway@hotmail.comcom', '$2y$10$XafchB1tgJ5D22W9uc4GaegGtiLPlW05DGnCgGHRFS96pH5IWV19u', '1', NULL, NULL, NULL, '2018-02-02 09:24:56', '2018-03-22 14:38:05', 'nazareno-catalan-WZen'),
	(64, 'Jonathan Gutierrez', 1, 4, 1, '+54 02262 15547476', 21, NULL, 179, 84, 'Villa del parque', NULL, 'profiles/n0KGM67JqnsKt87nYXRECCfszBNrGj5DLurfobhJ.jpeg', '0', NULL, 0, NULL, 'jonathan96_vdp@hotmail.com', '$2y$10$NEWTPf3UmTfOeSYxd6F92OE.tYObhxrJAK7VF0QQhoCnsOsKNTC0a', '1', NULL, NULL, NULL, '2018-02-05 15:46:03', '2018-03-22 14:38:05', 'jonathan-gutierrez-5sdi'),
	(65, 'Mateo Selser', 1, 2, 1, '1130196341', 20, NULL, 174, 63, 'Intercountry equipo campos de alvarez', 'Almagro', 'profiles/dKSg9txxkDurbmEtfDe86qC0L2lyGBi2hehtpapR.jpeg', '0', NULL, 0, NULL, 'mateselser@hotmail.com', '$2y$10$v5GmLEvkFEjlPLsclBs8Ku.c4.pDRBkNAMy1MCCFynnMK8ISYC.xa', '1', NULL, NULL, NULL, '2018-02-06 01:08:41', '2018-03-22 14:38:05', 'mateo-selser-pYUq'),
	(66, 'Gaston Andrada', 1, 4, 1, '+54  1123804354', 17, NULL, 166, 66, 'Quilmes', 'Independiente ,Banfield , Quilmes', 'public/profiles/xzazSGEP6SPgCzhKgAIyNBSYDfmMb8jmYas86lis.jpeg', 'vy457KFrdzE ', NULL, 1, NULL, 'gastonandrada@icloud.com', '$2y$10$VzPfYcK4F9t9uHceA9Dptupfu0RE2fkQGBPc5GnquobV./3SLJ3zS', '1', NULL, NULL, 'iIL32gVjCWx3qIoZLS1p6YtPtBE2tznvvJKT9Lte6SchbCpc11Rz06l0vbeX', '2018-02-06 04:55:17', '2018-03-22 14:38:05', 'gaston-andrada-buxn'),
	(67, 'Juan Rodríguez', 1, 4, 1, NULL, 19, NULL, 175, 80, 'Ninguno', NULL, 'profiles/1jxia7QUP40YoPEA7KHD5exDDiMSlQXBjaYMPrli.png', '0', NULL, 0, NULL, 'juanyorkcity@gmail.com', '$2y$10$NVuWK7pvrY2IDRXSlDsKzOpnYleHwyI/x4AZHTPpSacXVKtzb/Zia', '1', NULL, NULL, NULL, '2018-02-06 16:30:16', '2018-03-22 14:38:05', 'juan-rodriguez-WDnj'),
	(68, 'Franco Garrammone', 1, 2, 1, NULL, 22, NULL, 202, 66, NULL, 'Soy un jugador de barrio empece desde los 6 años en tor eos barriales ; me desarrolle en cadetes , patos de balcarse y actualmente juego en el cañon de mar del plata', NULL, '0', NULL, 0, NULL, 'evelyn_te_amo_mdp@hotmail.com', '$2y$10$TdecHrAmCACfUnCcQNGVMeYARbk7IAmdqlozOAM0C5Fcao6RhhQFK', '1', NULL, NULL, NULL, '2018-03-07 04:59:17', '2018-03-22 14:38:05', 'franco-garrammone-cJYD'),
	(70, 'Matias Guaymas', 1, 3, 1, NULL, 22, NULL, 170, 61, 'depotivo argento', 'San Miguel', 'public/profiles/YfeYyQJAwIMUpUEcua8334QKgHhLq9agf8VOetiF.jpeg', '0', NULL, 0, NULL, 'matiasguaymas1995@gmail.com', '$2y$10$i3FteZ5p5yPJQO6bvNfLnefP6AiNL9WkqKOND8F8DLq0AEG0jTNbm', '1', NULL, NULL, '1lXLAiWESrpg3686soiRXbt2O5LqYJJkSCkjWpI5Ftj1HGlbZxNH3mgZ6zj7', '2018-03-07 15:06:27', '2018-03-22 14:38:05', 'matias-guaymas-uYSD'),
	(71, 'Matias Guaymas', 1, 3, 1, '1131994148', 22, NULL, 170, 61, 'depotivo argento', 'San Miguel', 'public/profiles/43vSML9wOb4mDm1SylezJsrczpwPyPCb4stqtjIJ.jpeg', '0', NULL, 0, NULL, 'Matiascabjxd@hotmail.com', '$2y$10$skzGOL9dOxo1CrX8DtPVy.tgUovClGs17PDh6vikg7e6FKg1iO8PO', '1', NULL, NULL, NULL, '2018-03-07 15:08:12', '2018-03-22 14:38:05', 'matias-guaymas-5ALy'),
	(72, 'Martiniano Fernandez', 1, 2, 1, '+54 9 2227486838', 16, NULL, 181, 69, 'Escuela de Fútbol Infantil Lobos, Liga Lobense', 'Estuve en Provincial a préstamo por 6 meses.', 'public/profiles/h6ZP93zzGBaTxxPcyaSEOkeHfp9raLBCP5f4ikJH.jpeg', '0', NULL, 0, NULL, 'martinianofernandez25@hotmail.com', '$2y$10$FFMU2mWmWBYcaIm0UlC9RutG3QFF1QBNAf0yEFHIlcxht39sJvOpe', '1', NULL, NULL, 'EFNGuVILQ1GMLwek2BV4XiaFfd3vlc9teNvv0GCOK1rhmkX73hVhZkRYnFgA', '2018-03-07 17:44:41', '2018-03-22 14:38:05', 'martiniano-fernandez-XXYl'),
	(73, 'Tomas Ezequiel', 1, 4, 1, '2236819329', 13, NULL, 147, 64, 'En barrial', 'En quilmes mar del plata', 'public/profiles/epbWGFWZvc6DddI4AImRWYxqD3rA2oE17mlgYWKH.jpeg', '0', NULL, 0, NULL, 'tomasgiannini300@gmail.com', '$2y$10$5rEu2GU9jQ5K12aLc6eLm.coADAYelog44HEe7IctBgLExrfG3uOK', '1', NULL, NULL, NULL, '2018-03-07 18:37:30', '2018-03-22 14:38:05', 'tomas-ezequiel-2NaG'),
	(74, 'Alexis Sanchez', 1, 4, 24, '1127176151', 17, NULL, 165, 65, 'ningúno', 'club precidente Derqui', NULL, '0', NULL, 0, NULL, 'Alexis.sanchez.joel@gmeil.com', '$2y$10$Z2YSevn5l2OoyFfCQE5l9.RDJnmU2WHiSa3N6bP/lNx2REpij1DSG', '1', NULL, NULL, NULL, '2018-03-08 04:48:37', '2018-03-22 14:38:05', 'alexis-sanchez-NHAK'),
	(75, 'Agustin Ledesma', 1, 3, 1, '541141975919', 19, NULL, 168, 56, 'atletico escobar Liga escobarense', 'Ninguno', NULL, '0', NULL, 0, NULL, 'agustim_ledesma@hotmail.com', '$2y$10$Z.sJPvIlKwZEJSPuDbyEcuI/6IylXuxPFwKxo5q41hbvhNIiaOem2', '1', NULL, NULL, NULL, '2018-03-08 14:58:41', '2018-03-22 14:38:05', 'agustin-ledesma-BfH8'),
	(76, 'Federico Fournier', 1, 3, 1, '54 223 155031762', 24, NULL, 169, 70, 'Ninguno', 'De chico jugue en el Club Mar del plata, de mi cuidad. Unos pocos años hasta que me fui a Boca de Mar del Plata, donde jugue la mayoria de mi corta carrera. Luego jugue en un club de barrio llamado 2 de mayo. Mi sueño siempre fue jugar al futbol profesionalmente o de manera amateur.', 'public/profiles/buCyeYJAHdkXP0buDB9gtXB01a3PL9MBVH0vhlY3.jpeg', '0', NULL, 1, NULL, 'federicofournier@yahoo.com.ar', '$2y$10$voV35qLyHRxVf/v1vD6elOu3h5dbbkmVDlfuNHDsyfVWUos/iJxXG', '1', NULL, NULL, NULL, '2018-03-08 21:56:57', '2018-03-22 14:38:05', 'federico-fournier-jvIw'),
	(77, 'Kevin Carrizo', 1, 3, 1, '+540113611r691', 20, NULL, 179, 68, 'Club Atletico Trocha, Federal C', 'Inferiores En Club Atletico San Miguel.\r\nPrimera de A.E.M.O Liga Regional Obereña De Futbòl Misiones.', 'public/profiles/gTdanNjVSUWX2mkGVuU2qi3eLMgkt1dhkThtlMgB.jpeg', '0', NULL, 1, NULL, 'kc40399832@gmail.com', '$2y$10$upx4HQOd.uxPF18.q7D93.0tPzVuXI8gmbgqRwrYDcoC3W5XWtHBy', '1', NULL, NULL, NULL, '2018-03-09 22:01:45', '2018-03-22 14:38:05', 'kevin-carrizo-FvEA'),
	(78, 'Franco Andrada', 1, 4, 1, NULL, 21, NULL, 178, 72, 'Juego torneos amateur con amigos que juegan actualmente en clubes de primera.', 'Naci y creci respirando fútbol, recuerdo cada momento de mi infancia cerca de una pelota, mis padres varias veces me dijeron que aprendi antes a patear una pelota u otro objeto antes que a caminar, a los 4 años mi papá me inscribio en el club de barrio "Los Granados" para jugar futbol 11, jugaba con chicos mayored que yo, categoria 94 y 95, yo soy 96, siempre soñe con llegar a primera y tuve la oportunidad pero la desaproveche, a los 11 años jugaba en la prenovena del club Leandro N. Alem. Con 12 años un dia me toco jugar un amistoso con eñ club all boys de floresta, perdimos 4 a 3 y tuve la suerte de convertir dos goles y asistir en el tercero, al termimo del partido, el técnico de la categoria de all boys hablo conmigo y con mi viejo para llevarme a entrenar, fui, un año jugue ahi pero por problemas familiares no pude ir mas a entrenar y deje, a los 14 años retome en San Miguel, el trueno verde, club que me abrio las puertas para poder hacer lo que mas me gusta, jugue dos años en el club, a los 16 años me subieron a cuarta y jugamos algunos amistosos con primera, tuve ña suerte de realizar una pretemporada con Patricio Hernandez como DT, lamemtablemente no pude firmar contrato porque ya no habia lugar en el plantel y el tecnico me dijo que necesitaba un año de gimnasio, yo como un boludo me calente y deje. Termine la escuela y ahora estoy contento estudiando para juez profesional, pero aun quiero saber si tengo uma chance, yo solo necesito una oportunidad para aprovecharla al máximo, mi juego es el cambii de ritmo, siempre lo fue, sacarme un jugador de encima, tocar e ir a buscar, soy un jugador veloz y hábil con pelota dominada, no me achico con nadie, naci en calle de tierra y las vivi todas, para jugar soy pillo, soy muy responsable y extraño mucho volver a entrenar como antes. Me entreno diariamente pero me falta aun para estar 100% fisicamente. Gracias por leer mi historia de vida, dejo un cel y mai de contacto: 1135828760 ( soy de moreno, zona oeste) francoandrada.020@gmail.com', 'public/profiles/XevI23NAumk3xH3GWW2bi1yQNXDbTWtQgxgjkimT.jpeg', '0', NULL, 1, NULL, 'francoandrada.020@gmail.com', '$2y$10$1/JTK8RTipnGpjRzqKhmn.Eu9FNTMXztzgAcfn7q/R1TGl10WMYm6', '1', NULL, NULL, 'HkEjmCiW7mJR2iolnuoA9FXWNUOmHMutNivVm1Kf2JZsfFkmhRie5NeKh5OE', '2018-03-12 16:12:38', '2018-03-22 14:38:05', 'franco-andrada-37VB'),
	(79, 'Alejandro Arias', 1, 3, 1, '+541156042241', 18, NULL, 176, 75, 'Liga F.O.S', 'He ido a probarme a muchos clubes , como San Miguel , Atlas , Ferro pero en lugar que estuve bastante bien fue Huracán , no jugué ningún partido ni de AFA ni de liga pero enserio me sentía cómodo y por cosas económicas no pude seguir', 'public/profiles/bEwxPKjHpq7mIwBMrGtEAxKao3wDFiCuxVryEaTs.jpeg', '0', NULL, 0, NULL, 'quechamuyo_99@hotmail.com', '$2y$10$CDXGmADRCLf7i30leYVZ2.ZMqymDgOtn5vTdksNmQl6EpdyGz.mGi', '1', NULL, NULL, 'L9GX6co1jf1dcoS3V7y7YMaNQZcO6W1Gg0E35N0z3kxyYqtYjexRIQZ3I4As', '2018-03-12 16:37:55', '2018-03-22 14:38:05', 'alejandro-arias-1XOh'),
	(80, 'Nicolas Centurion', 1, 3, 1, '0111535828760', 23, NULL, 165, 68, 'Velez Sarfield, Deportivo Merlo, Club Atletico Lugano, Santa brigida.', 'Inferiores en Velez Sarfield hasta 6ta division, luego en Deportivo Merlo hasta 4ta division, algunos partido jugados en la reserva y de ahi pase a Lugano donde jugue 6 meses en la primera division siendo titular, luego de una lesion me dejaron libre y pase a jugar en la liga escobarense donde estoy actualmente entrenandome. Mediocampista central, aguerrido pero con buen primer toque, versatil y con buen manejo del balon, donde jugue siempre me daban las pelotas paradas, siempre soy preciso, me gusta jugar en el centro de la cancha pero no tengo problemas en jugar por las bandas, soy armador de juego, me gusta atacar. Ayudenme a cumplir mi sueño, gracias.', NULL, '0', 'Mail prueba 2', 1, NULL, 'frankitoandrada@hotmail.com', '$2y$10$x8liiOe1llFXSsmEP7s0NOctYuDpCpeXGoDAFVL6qmVJTDbq8aiX.', '1', NULL, NULL, NULL, '2018-03-12 17:30:52', '2018-03-22 14:45:38', 'nicolas-centurion-W3Fv'),
	(81, 'Facundo Batalla', 1, 4, 1, '1150231721', 22, NULL, 178, 68, 'Ninguno', 'Jugué de muy chico en Estudiantes de Buenos Aires y Almagro', 'public/profiles/kbprbB0jvaI0KuhH3PwQ0augIC3pe4AuwsgebTMh.jpeg', '0', NULL, 0, NULL, 'tobi.020212@gmail.com', '$2y$10$3/qqtDHDl.aO2pmRctW80eJpNwOViL.MXvV9ikhWDcvvcbAj4VDmq', '1', NULL, NULL, NULL, '2018-03-13 02:15:01', '2018-03-22 14:38:05', 'facundo-batalla-ZbYJ'),
	(82, 'Palavecino Demuth Daniel', 1, 4, 1, '1151115210', 24, NULL, 164, 68, 'Ninguno', 'Fui jugador de FC Midland asociado a Afa.', 'public/profiles/I3zjUFe8B5XWq1eZeUcerrmJgBhA9TZ6A14Liubk.jpeg', '0', NULL, 0, NULL, 'danielpalavecinodemuth@gmail.com', '$2y$10$zW9fm3G3QVzJ9Wu8WZ/ZWeFJaS9zuay.rbHvPJo0.DcPAylw/.NDq', '1', NULL, NULL, NULL, '2018-03-15 18:22:17', '2018-03-22 14:38:05', 'palavecino-demuth-daniel-LlJI'),
	(83, 'Test', 1, 3, 2, NULL, NULL, '2004-12-13', 118, 100, NULL, 'adasdasdadas', 'public/profiles/lB86Z4MVTv2iqZoTcMAMJIUQ0y49HXVwlIn6oifP.png', '0', 'Hola pepe, te faltando extender tu 12 historia para poder validar tu perfil.', 1, NULL, 'mail@a.com', '$2y$10$v2xX7qsmNJoGzDxv/FrF.u7emRkv6iIu2ICT5qPdMGI3NIX44oHBu', '5', NULL, 5, NULL, '2018-03-28 18:11:31', '2018-03-28 18:16:40', 'test-uN2I'),
	(84, 'Santiago Ariel Diaz Arguello', 1, 2, 1, '1131284793', NULL, '1998-03-01', 175, 72, 'Libre', '2004-2017 Club Atletico Lanus\r\nEntrenamientos 1ra Victoriano Arenas\r\nEntrenamiento Reserva de Lanus CA\r\nEntrenamiento reserva All Boys', 'public/profiles/pbKnojSFI1ZMJncIDIZIy6hldYJ080sPDPjfCRSv.jpeg', 'SU7GnCzEo6A', NULL, 1, NULL, 'sa.diazarguello@hotmail.com', '$2y$10$DS5AJy9IU3MqS/TgdSvLfOOtoP/q8MumHhI0Pr2NT9nAdXyy9Wl.q', '1', NULL, 7, NULL, '2018-03-30 00:18:11', '2018-03-30 00:34:07', 'santiago-ariel-diaz-arguello-XtV1'),
	(85, 'Huber Martínez', 1, 4, 1, '2216362445', 22, NULL, 162, 62, 'En ninguno', 'Villa Montoro', 'public/profiles/hhYJ5WdvnZGkGb9JWp5zd9cBUoosiVILZa9uEyCS.jpeg', '0', NULL, 0, NULL, 'martinezhuber08@gmail.com', '$2y$10$tVuLEx2YVYUO6clxD7nn2.j0gNtt6ujeLjvZkdyGJalBKUP7LTIk2', '1', NULL, NULL, NULL, '2018-03-30 15:28:51', '2018-03-30 15:28:51', 'huber-martinez-SNhg'),
	(86, 'Agustin Whitcomb', 1, 4, 1, '02266-15544807', 24, NULL, 165, 68, 'Liga local de Balcarce primera división', 'Juegue solamente en dos clubes desde los 4 años hasta los 15 en racing club y desde los 15 a los 24 en amigos unidos de Balcarce...En racing jugaba de volante por izquierda y en amigos unidos de 9, espero les sirva la información', NULL, '0', NULL, 1, NULL, 'agustin.loana17@gmail.com', '$2y$10$5HH0999l7nRzIwkmzjm.S.FlTjIZx.xfUmkrRxeljKwApD9P66Pxm', '1', NULL, NULL, 'SmgQqKdQReNLD0CGBUl5r94G7EKeeLqixTVH5Tcd4PjGxA9Uk3qHrrdK54cJ', '2018-04-03 14:17:40', '2018-04-05 17:17:42', 'agustin-whitcomb-bA7O'),
	(87, 'Francisco Maciel', 1, 4, 1, '0111569309871', 19, NULL, 168, 60, 'Deportivo Español, Reserva', 'Club Atlético Lanús, Club Victoriano Arenas', 'public/profiles/RRmhgYc6hHwcdevQ2k6UVgqRLsrm5RNvHxJTVjSm.jpeg', 'S0mgKXjBwy0', NULL, 1, NULL, 'franciscomaciel297@gmail.com', '$2y$10$pHm5nWUvOsul7QxQEqd24uppVkYTBrU2gZdpjotnkP7D6A5wianqS', '1', NULL, NULL, 'mnUaxfsKeZ1HwFWLAWA0IrgBvEgfnQtYNqmH91KshqTTFv5U4kEUkJdgSjaf', '2018-04-04 23:41:08', '2018-04-04 23:41:08', 'francisco-maciel-2pL5'),
	(88, 'Ezequiel Sali', 1, 3, 1, '+541158217509', 21, NULL, 178, 65, 'Asturiano, Futbol Amateur', 'Jugue en San lorenzo y San Martin de Burzaco. Despues de eso jugue en ligas intercountries y ahora en la liga de AIFA en el club Asturiano de vicente lopez.', 'public/profiles/IZrqMTs5YLSw0LGrgToAUddACcMmZD54yJZkvnIu.jpeg', 'qeZd8Emqi7w', NULL, 1, NULL, 'eze.sali@hotmail.com', '$2y$10$owZo9zIp/8VBN7TIKqmje.5/vlEdmHqzhO8py210oI1BVsTKTBX46', '1', NULL, NULL, NULL, '2018-04-05 03:35:16', '2018-04-05 03:35:16', 'ezequiel-sali-jImQ'),
	(89, 'Ezequiel Sali', 1, 3, 1, '+541158217509', 21, NULL, 178, 65, 'Asturiano, Futbol Amateur', 'Jugue en San lorenzo y San Martin de Burzaco. Despues de eso jugue en ligas intercountries y ahora en la liga de AIFA en el club Asturiano de vicente lopez.', NULL, 'qeZd8Emqi7w', NULL, 1, NULL, 'ezequielsali01@gmail.com', '$2y$10$EGpE2soyhr0GQ7UledyFreh7g5gplvhvKrA.iprS21f7UobppgUUG', '1', NULL, NULL, 'w9ro7iqRokjpSXLGtnu1EYMIGGTauz3bWhh42O1cvpKvJdafBqP3F4cXr7bv', '2018-04-05 03:36:18', '2018-04-05 03:36:18', 'ezequiel-sali-Twye');
/*!40000 ALTER TABLE `jugadors` ENABLE KEYS */;

-- Volcando datos para la tabla cpg.managers: ~7 rows (aproximadamente)
DELETE FROM `managers`;
/*!40000 ALTER TABLE `managers` DISABLE KEYS */;
INSERT INTO `managers` (`id`, `email`, `nombre`, `slug`, `password`, `nivel`, `terminos`, `link_img`, `remember_token`, `created_at`, `updated_at`, `facebook`, `instagram`, `twitter`, `telefono`, `zona`) VALUES
	(1, 'valentin@clickpassgoal.com', 'Valentin', 'valentin', '$2y$10$irJ1dCmgxC7m4JdsHJTLz.IMVVwmXtGqY2nOSZwm9iENA13HAU6DG', 10, 1, NULL, 'dQzs0nwMUT', '2018-03-22 14:32:38', '2018-03-29 22:51:56', NULL, NULL, NULL, NULL, NULL),
	(2, 'gonzalo@clickpassgoal.com', 'Gonzalo', 'gonzalo', '$2y$10$xfVZ1KBVQlbg.Ut.hu5Hku4h6oLYVsYqYz346AHi87jvsQZQnBZO6', 10, 1, NULL, 'gr0IvXyhau', '2018-03-22 14:32:38', '2018-03-22 18:28:28', NULL, NULL, NULL, NULL, NULL),
	(3, 'belisario@clickpassgoal.com', 'Belisario', 'belisario-n628', '$2y$10$GH4n72Ofk.RxMyZOj9.ceufT02ajjPqwVYdCMAlq/yvYJZCwGbbiu', 2, NULL, NULL, NULL, '2018-03-22 18:30:17', '2018-03-22 18:30:17', NULL, NULL, NULL, NULL, NULL),
	(6, 'francoandrada.020@gmail.com', 'Franco Andrada', 'franco-andrada-Y1df', '$2y$10$V20qob8TXmG1f0Q9iohSc.ufDULb6aA7jgOmSl7pGhWwRNfEL8OGO', 1, 1, NULL, 'hKIxzn7vxPtV8IGLBPw5lLkQ21JI8eajcitTmMHUnTZlmqPPlsBRLUItawEF', '2018-03-28 19:11:27', '2018-04-02 15:22:22', NULL, NULL, NULL, NULL, NULL),
	(7, 'matiasezequielprado4@gmail.com', 'Matias Prado', 'matias-prado-XYpx', '$2y$10$vZ73xsM0AKWr87U4EnFPhuu0XuH3GU.CpsjlehR2A37PvPBWW9/Ty', 1, 1, NULL, 'VjoHXoa4xOR9aPVQ3Ophf95BqsxAbnDbalc5ohtdyzt2FpKZdShhElBTJIen', '2018-03-29 14:54:20', '2018-03-30 01:46:46', NULL, NULL, NULL, NULL, NULL),
	(8, 'danielpalavecinodemuth@gmail.com', 'Daniel Palavecino', 'daniel-palavecino-68jb', '$2y$10$reGnifGt.cLtjgGeVMo7q.yfXqlNph2s9khAQ4mG6nKFeLEHfps5a', 1, NULL, NULL, NULL, '2018-03-30 01:16:42', '2018-03-30 01:16:42', NULL, NULL, NULL, NULL, NULL),
	(9, 'ulises.rivero.98.ur@gmail.com', 'Ulises Rivero', 'ulises-rivero-Adpz', '$2y$10$BkvzI2WFJPDo5m24UBYHhOhohS5AN1j2bQ.4fFQoBZ8Hg.CAbRUMW', 1, NULL, NULL, 'XZsyvhquydi5qW0ARfmzpXxTCxcOVm5REd8RAe5EoRuO7RdcuJoMhhEGlUOI', '2018-03-30 01:29:39', '2018-03-30 01:29:39', NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `managers` ENABLE KEYS */;

-- Volcando datos para la tabla cpg.pais: ~241 rows (aproximadamente)
DELETE FROM `pais`;
/*!40000 ALTER TABLE `pais` DISABLE KEYS */;
INSERT INTO `pais` (`id`, `code`, `nombre`, `img`, `created_at`, `updated_at`) VALUES
	(1, 'AR', 'Argentina', '', NULL, NULL),
	(2, 'US', 'United States', '', NULL, NULL),
	(3, 'CA', 'Canada', '', NULL, NULL),
	(4, 'AL', 'Albania', '', NULL, NULL),
	(5, 'DZ', 'Algeria', '', NULL, NULL),
	(6, 'DS', 'American Samoa', '', NULL, NULL),
	(7, 'AD', 'Andorra', '', NULL, NULL),
	(8, 'AO', 'Angola', '', NULL, NULL),
	(9, 'AI', 'Anguilla', '', NULL, NULL),
	(10, 'AQ', 'Antarctica', '', NULL, NULL),
	(11, 'AG', 'Antigua and/or Barbuda', '', NULL, NULL),
	(13, 'AM', 'Armenia', '', NULL, NULL),
	(14, 'AW', 'Aruba', '', NULL, NULL),
	(15, 'AU', 'Australia', '', NULL, NULL),
	(16, 'AT', 'Austria', '', NULL, NULL),
	(17, 'AZ', 'Azerbaijan', '', NULL, NULL),
	(18, 'BS', 'Bahamas', '', NULL, NULL),
	(19, 'BH', 'Bahrain', '', NULL, NULL),
	(20, 'BD', 'Bangladesh', '', NULL, NULL),
	(21, 'BB', 'Barbados', '', NULL, NULL),
	(22, 'BY', 'Belarus', '', NULL, NULL),
	(23, 'BE', 'Belgium', '', NULL, NULL),
	(24, 'BZ', 'Belize', '', NULL, NULL),
	(25, 'BJ', 'Benin', '', NULL, NULL),
	(26, 'BM', 'Bermuda', '', NULL, NULL),
	(27, 'BT', 'Bhutan', '', NULL, NULL),
	(28, 'BO', 'Bolivia', '', NULL, NULL),
	(29, 'BA', 'Bosnia and Herzegovina', '', NULL, NULL),
	(30, 'BW', 'Botswana', '', NULL, NULL),
	(31, 'BV', 'Bouvet Island', '', NULL, NULL),
	(32, 'BR', 'Brazil', '', NULL, NULL),
	(33, 'IO', 'British lndian Ocean Territory', '', NULL, NULL),
	(34, 'BN', 'Brunei Darussalam', '', NULL, NULL),
	(35, 'BG', 'Bulgaria', '', NULL, NULL),
	(36, 'BF', 'Burkina Faso', '', NULL, NULL),
	(37, 'BI', 'Burundi', '', NULL, NULL),
	(38, 'KH', 'Cambodia', '', NULL, NULL),
	(39, 'CM', 'Cameroon', '', NULL, NULL),
	(40, 'CV', 'Cape Verde', '', NULL, NULL),
	(41, 'KY', 'Cayman Islands', '', NULL, NULL),
	(42, 'CF', 'Central African Republic', '', NULL, NULL),
	(43, 'TD', 'Chad', '', NULL, NULL),
	(44, 'CL', 'Chile', '', NULL, NULL),
	(45, 'CN', 'China', '', NULL, NULL),
	(46, 'CX', 'Christmas Island', '', NULL, NULL),
	(47, 'CC', 'Cocos (Keeling) Islands', '', NULL, NULL),
	(48, 'CO', 'Colombia', '', NULL, NULL),
	(49, 'KM', 'Comoros', '', NULL, NULL),
	(50, 'CG', 'Congo', '', NULL, NULL),
	(51, 'CK', 'Cook Islands', '', NULL, NULL),
	(52, 'CR', 'Costa Rica', '', NULL, NULL),
	(53, 'HR', 'Croatia (Hrvatska)', '', NULL, NULL),
	(54, 'CU', 'Cuba', '', NULL, NULL),
	(55, 'CY', 'Cyprus', '', NULL, NULL),
	(56, 'CZ', 'Czech Republic', '', NULL, NULL),
	(57, 'DK', 'Denmark', '', NULL, NULL),
	(58, 'DJ', 'Djibouti', '', NULL, NULL),
	(59, 'DM', 'Dominica', '', NULL, NULL),
	(60, 'DO', 'Dominican Republic', '', NULL, NULL),
	(61, 'TP', 'East Timor', '', NULL, NULL),
	(62, 'EC', 'Ecuador', '', NULL, NULL),
	(63, 'EG', 'Egypt', '', NULL, NULL),
	(64, 'SV', 'El Salvador', '', NULL, NULL),
	(65, 'GQ', 'Equatorial Guinea', '', NULL, NULL),
	(66, 'ER', 'Eritrea', '', NULL, NULL),
	(67, 'EE', 'Estonia', '', NULL, NULL),
	(68, 'ET', 'Ethiopia', '', NULL, NULL),
	(69, 'FK', 'Falkland Islands (Malvinas)', '', NULL, NULL),
	(70, 'FO', 'Faroe Islands', '', NULL, NULL),
	(71, 'FJ', 'Fiji', '', NULL, NULL),
	(72, 'FI', 'Finland', '', NULL, NULL),
	(73, 'FR', 'France', '', NULL, NULL),
	(74, 'FX', 'France, Metropolitan', '', NULL, NULL),
	(75, 'GF', 'French Guiana', '', NULL, NULL),
	(76, 'PF', 'French Polynesia', '', NULL, NULL),
	(77, 'TF', 'French Southern Territories', '', NULL, NULL),
	(78, 'GA', 'Gabon', '', NULL, NULL),
	(79, 'GM', 'Gambia', '', NULL, NULL),
	(80, 'GE', 'Georgia', '', NULL, NULL),
	(81, 'DE', 'Germany', '', NULL, NULL),
	(82, 'GH', 'Ghana', '', NULL, NULL),
	(83, 'GI', 'Gibraltar', '', NULL, NULL),
	(84, 'GR', 'Greece', '', NULL, NULL),
	(85, 'GL', 'Greenland', '', NULL, NULL),
	(86, 'GD', 'Grenada', '', NULL, NULL),
	(87, 'GP', 'Guadeloupe', '', NULL, NULL),
	(88, 'GU', 'Guam', '', NULL, NULL),
	(89, 'GT', 'Guatemala', '', NULL, NULL),
	(90, 'GN', 'Guinea', '', NULL, NULL),
	(91, 'GW', 'Guinea-Bissau', '', NULL, NULL),
	(92, 'GY', 'Guyana', '', NULL, NULL),
	(93, 'HT', 'Haiti', '', NULL, NULL),
	(94, 'HM', 'Heard and Mc Donald Islands', '', NULL, NULL),
	(95, 'HN', 'Honduras', '', NULL, NULL),
	(96, 'HK', 'Hong Kong', '', NULL, NULL),
	(97, 'HU', 'Hungary', '', NULL, NULL),
	(98, 'IS', 'Iceland', '', NULL, NULL),
	(99, 'IN', 'India', '', NULL, NULL),
	(100, 'ID', 'Indonesia', '', NULL, NULL),
	(101, 'IR', 'Iran (Islamic Republic of)', '', NULL, NULL),
	(102, 'IQ', 'Iraq', '', NULL, NULL),
	(103, 'IE', 'Ireland', '', NULL, NULL),
	(104, 'IL', 'Israel', '', NULL, NULL),
	(105, 'IT', 'Italy', '', NULL, NULL),
	(106, 'CI', 'Ivory Coast', '', NULL, NULL),
	(107, 'JM', 'Jamaica', '', NULL, NULL),
	(108, 'JP', 'Japan', '', NULL, NULL),
	(109, 'JO', 'Jordan', '', NULL, NULL),
	(110, 'KZ', 'Kazakhstan', '', NULL, NULL),
	(111, 'KE', 'Kenya', '', NULL, NULL),
	(112, 'KI', 'Kiribati', '', NULL, NULL),
	(113, 'KP', 'Korea, Democratic People\'s Republic of', '', NULL, NULL),
	(114, 'KR', 'Korea, Republic of', '', NULL, NULL),
	(115, 'XK', 'Kosovo', '', NULL, NULL),
	(116, 'KW', 'Kuwait', '', NULL, NULL),
	(117, 'KG', 'Kyrgyzstan', '', NULL, NULL),
	(118, 'LA', 'Lao People\'s Democratic Republic', '', NULL, NULL),
	(119, 'LV', 'Latvia', '', NULL, NULL),
	(120, 'LB', 'Lebanon', '', NULL, NULL),
	(121, 'LS', 'Lesotho', '', NULL, NULL),
	(122, 'LR', 'Liberia', '', NULL, NULL),
	(123, 'LY', 'Libyan Arab Jamahiriya', '', NULL, NULL),
	(124, 'LI', 'Liechtenstein', '', NULL, NULL),
	(125, 'LT', 'Lithuania', '', NULL, NULL),
	(126, 'LU', 'Luxembourg', '', NULL, NULL),
	(127, 'MO', 'Macau', '', NULL, NULL),
	(128, 'MK', 'Macedonia', '', NULL, NULL),
	(129, 'MG', 'Madagascar', '', NULL, NULL),
	(130, 'MW', 'Malawi', '', NULL, NULL),
	(131, 'MY', 'Malaysia', '', NULL, NULL),
	(132, 'MV', 'Maldives', '', NULL, NULL),
	(133, 'ML', 'Mali', '', NULL, NULL),
	(134, 'MT', 'Malta', '', NULL, NULL),
	(135, 'MH', 'Marshall Islands', '', NULL, NULL),
	(136, 'MQ', 'Martinique', '', NULL, NULL),
	(137, 'MR', 'Mauritania', '', NULL, NULL),
	(138, 'MU', 'Mauritius', '', NULL, NULL),
	(139, 'TY', 'Mayotte', '', NULL, NULL),
	(140, 'MX', 'Mexico', '', NULL, NULL),
	(141, 'FM', 'Micronesia, Federated States of', '', NULL, NULL),
	(142, 'MD', 'Moldova, Republic of', '', NULL, NULL),
	(143, 'MC', 'Monaco', '', NULL, NULL),
	(144, 'MN', 'Mongolia', '', NULL, NULL),
	(145, 'ME', 'Montenegro', '', NULL, NULL),
	(146, 'MS', 'Montserrat', '', NULL, NULL),
	(147, 'MA', 'Morocco', '', NULL, NULL),
	(148, 'MZ', 'Mozambique', '', NULL, NULL),
	(149, 'MM', 'Myanmar', '', NULL, NULL),
	(150, 'NA', 'Namibia', '', NULL, NULL),
	(151, 'NR', 'Nauru', '', NULL, NULL),
	(152, 'NP', 'Nepal', '', NULL, NULL),
	(153, 'NL', 'Netherlands', '', NULL, NULL),
	(154, 'AN', 'Netherlands Antilles', '', NULL, NULL),
	(155, 'NC', 'New Caledonia', '', NULL, NULL),
	(156, 'NZ', 'New Zealand', '', NULL, NULL),
	(157, 'NI', 'Nicaragua', '', NULL, NULL),
	(158, 'NE', 'Niger', '', NULL, NULL),
	(159, 'NG', 'Nigeria', '', NULL, NULL),
	(160, 'NU', 'Niue', '', NULL, NULL),
	(161, 'NF', 'Norfork Island', '', NULL, NULL),
	(162, 'MP', 'Northern Mariana Islands', '', NULL, NULL),
	(163, 'NO', 'Norway', '', NULL, NULL),
	(164, 'OM', 'Oman', '', NULL, NULL),
	(165, 'PK', 'Pakistan', '', NULL, NULL),
	(166, 'PW', 'Palau', '', NULL, NULL),
	(167, 'PA', 'Panama', '', NULL, NULL),
	(168, 'PG', 'Papua New Guinea', '', NULL, NULL),
	(169, 'PY', 'Paraguay', '', NULL, NULL),
	(170, 'PE', 'Peru', '', NULL, NULL),
	(171, 'PH', 'Philippines', '', NULL, NULL),
	(172, 'PN', 'Pitcairn', '', NULL, NULL),
	(173, 'PL', 'Poland', '', NULL, NULL),
	(174, 'PT', 'Portugal', '', NULL, NULL),
	(175, 'PR', 'Puerto Rico', '', NULL, NULL),
	(176, 'QA', 'Qatar', '', NULL, NULL),
	(177, 'RE', 'Reunion', '', NULL, NULL),
	(178, 'RO', 'Romania', '', NULL, NULL),
	(179, 'RU', 'Russian Federation', '', NULL, NULL),
	(180, 'RW', 'Rwanda', '', NULL, NULL),
	(181, 'KN', 'Saint Kitts and Nevis', '', NULL, NULL),
	(182, 'LC', 'Saint Lucia', '', NULL, NULL),
	(183, 'VC', 'Saint Vincent and the Grenadines', '', NULL, NULL),
	(184, 'WS', 'Samoa', '', NULL, NULL),
	(185, 'SM', 'San Marino', '', NULL, NULL),
	(186, 'ST', 'Sao Tome and Principe', '', NULL, NULL),
	(187, 'SA', 'Saudi Arabia', '', NULL, NULL),
	(188, 'SN', 'Senegal', '', NULL, NULL),
	(189, 'RS', 'Serbia', '', NULL, NULL),
	(190, 'SC', 'Seychelles', '', NULL, NULL),
	(191, 'SL', 'Sierra Leone', '', NULL, NULL),
	(192, 'SG', 'Singapore', '', NULL, NULL),
	(193, 'SK', 'Slovakia', '', NULL, NULL),
	(194, 'SI', 'Slovenia', '', NULL, NULL),
	(195, 'SB', 'Solomon Islands', '', NULL, NULL),
	(196, 'SO', 'Somalia', '', NULL, NULL),
	(197, 'ZA', 'South Africa', '', NULL, NULL),
	(198, 'GS', 'South Georgia South Sandwich Islands', '', NULL, NULL),
	(199, 'ES', 'Spain', '', NULL, NULL),
	(200, 'LK', 'Sri Lanka', '', NULL, NULL),
	(201, 'SH', 'St. Helena', '', NULL, NULL),
	(202, 'PM', 'St. Pierre and Miquelon', '', NULL, NULL),
	(203, 'SD', 'Sudan', '', NULL, NULL),
	(204, 'SR', 'Suriname', '', NULL, NULL),
	(205, 'SJ', 'Svalbarn and Jan Mayen Islands', '', NULL, NULL),
	(206, 'SZ', 'Swaziland', '', NULL, NULL),
	(207, 'SE', 'Sweden', '', NULL, NULL),
	(208, 'CH', 'Switzerland', '', NULL, NULL),
	(209, 'SY', 'Syrian Arab Republic', '', NULL, NULL),
	(210, 'TW', 'Taiwan', '', NULL, NULL),
	(211, 'TJ', 'Tajikistan', '', NULL, NULL),
	(212, 'TZ', 'Tanzania, United Republic of', '', NULL, NULL),
	(213, 'TH', 'Thailand', '', NULL, NULL),
	(214, 'TG', 'Togo', '', NULL, NULL),
	(215, 'TK', 'Tokelau', '', NULL, NULL),
	(216, 'TO', 'Tonga', '', NULL, NULL),
	(217, 'TT', 'Trinidad and Tobago', '', NULL, NULL),
	(218, 'TN', 'Tunisia', '', NULL, NULL),
	(219, 'TR', 'Turkey', '', NULL, NULL),
	(220, 'TM', 'Turkmenistan', '', NULL, NULL),
	(221, 'TC', 'Turks and Caicos Islands', '', NULL, NULL),
	(222, 'TV', 'Tuvalu', '', NULL, NULL),
	(223, 'UG', 'Uganda', '', NULL, NULL),
	(224, 'UA', 'Ukraine', '', NULL, NULL),
	(225, 'AE', 'United Arab Emirates', '', NULL, NULL),
	(226, 'GB', 'United Kingdom', '', NULL, NULL),
	(227, 'UM', 'United States minor outlying islands', '', NULL, NULL),
	(228, 'UY', 'Uruguay', '', NULL, NULL),
	(229, 'UZ', 'Uzbekistan', '', NULL, NULL),
	(230, 'VU', 'Vanuatu', '', NULL, NULL),
	(231, 'VA', 'Vatican City State', '', NULL, NULL),
	(232, 'VE', 'Venezuela', '', NULL, NULL),
	(233, 'VN', 'Vietnam', '', NULL, NULL),
	(234, 'VG', 'Virgin Islands (British)', '', NULL, NULL),
	(235, 'VI', 'Virgin Islands (U.S.)', '', NULL, NULL),
	(236, 'WF', 'Wallis and Futuna Islands', '', NULL, NULL),
	(237, 'EH', 'Western Sahara', '', NULL, NULL),
	(238, 'YE', 'Yemen', '', NULL, NULL),
	(239, 'YU', 'Yugoslavia', '', NULL, NULL),
	(240, 'ZR', 'Zaire', '', NULL, NULL),
	(241, 'ZM', 'Zambia', '', NULL, NULL),
	(242, 'ZW', 'Zimbabwe', '', NULL, NULL);
/*!40000 ALTER TABLE `pais` ENABLE KEYS */;

-- Volcando datos para la tabla cpg.password_resets: ~0 rows (aproximadamente)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando datos para la tabla cpg.posicions: ~4 rows (aproximadamente)
DELETE FROM `posicions`;
/*!40000 ALTER TABLE `posicions` DISABLE KEYS */;
INSERT INTO `posicions` (`id`, `posicion`) VALUES
	(1, 'arquero'),
	(2, 'defensor'),
	(3, 'mediocampista'),
	(4, 'delantero');
/*!40000 ALTER TABLE `posicions` ENABLE KEYS */;

-- Volcando datos para la tabla cpg.provincias: ~24 rows (aproximadamente)
DELETE FROM `provincias`;
/*!40000 ALTER TABLE `provincias` DISABLE KEYS */;
INSERT INTO `provincias` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
	(1, 'Buenos Aires', NULL, NULL),
	(2, 'Catamarca', NULL, NULL),
	(3, 'Chaco', NULL, NULL),
	(4, 'Chubut', NULL, NULL),
	(5, 'Cordoba', NULL, NULL),
	(6, 'Corrientes', NULL, NULL),
	(7, 'Entre Rios', NULL, NULL),
	(8, 'Formosa', NULL, NULL),
	(9, 'Jujuy', NULL, NULL),
	(10, 'La Pampa', NULL, NULL),
	(11, 'La Rioja', NULL, NULL),
	(12, 'Mendoza', NULL, NULL),
	(13, 'Misiones', NULL, NULL),
	(14, 'Neuquen', NULL, NULL),
	(15, 'Rio Negro', NULL, NULL),
	(16, 'Salta', NULL, NULL),
	(17, 'San Juan', NULL, NULL),
	(18, 'San Luis', NULL, NULL),
	(19, 'Santa Cruz', NULL, NULL),
	(20, 'Santa Fe', NULL, NULL),
	(21, 'Santiago del Estero', NULL, NULL),
	(22, 'Tierra del Fuego', NULL, NULL),
	(23, 'Tucuman', NULL, NULL),
	(24, 'Capital Federal', NULL, NULL);
/*!40000 ALTER TABLE `provincias` ENABLE KEYS */;

-- Volcando datos para la tabla cpg.users: ~0 rows (aproximadamente)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;