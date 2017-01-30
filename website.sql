-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-01-2017 a las 01:50:13
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `website`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aereo`
--

CREATE TABLE IF NOT EXISTS `aereo` (
  `titulo` varchar(90) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `btnTitulo` varchar(45) DEFAULT NULL,
  `refCotizador` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`titulo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aereo`
--

INSERT INTO `aereo` (`titulo`, `descripcion`, `btnTitulo`, `refCotizador`) VALUES
('Calculá tu Vuelo', 'Todos nuestros socios pueden solicitar pasajes aéreos para volar a cualquier destino de Argentina, como asi tambien al exterior haciendo uso de nuestro cotizador.', 'IR AL COTIZADOR', 'http://www.mutualdepetroleros.tur.ar/servicios/ServiciosExternos/aereos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carousel`
--

CREATE TABLE IF NOT EXISTS `carousel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imgRef` varchar(120) DEFAULT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `buttonRef` varchar(120) DEFAULT NULL,
  `buttonText` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `carousel`
--

INSERT INTO `carousel` (`id`, `imgRef`, `titulo`, `descripcion`, `buttonRef`, `buttonText`) VALUES
(1, 'http://mutualjerarquico.ddns.net/res/img/turismo/slider/1.png', 'Bienvenido! Turismo Mutual de Petroleros Jerárquicos', NULL, NULL, NULL),
(2, 'http://mutualjerarquico.ddns.net/res/img/turismo/slider/2.jpg', 'Punta Cana', NULL, '/salida/3', 'Ver mas'),
(3, 'http://mutualjerarquico.ddns.net/res/img/turismo/slider/3.jpg', 'Salta', NULL, NULL, 'Ver mas'),
(4, 'http://mutualjerarquico.ddns.net/res/img/turismo/slider/4.jpg', 'Cruceros', NULL, NULL, 'Ver mas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `footer`
--

CREATE TABLE IF NOT EXISTS `footer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` varchar(90) DEFAULT NULL,
  `referencia` varchar(90) DEFAULT NULL,
  `icono` varchar(45) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `footer`
--

INSERT INTO `footer` (`id`, `texto`, `referencia`, `icono`, `tipo`) VALUES
(1, 'Servicios', 'home#service', NULL, 'Páginas'),
(2, 'Aéreos', 'home#aereos', NULL, 'Páginas'),
(3, 'Paquetes', 'home#paquetes', NULL, 'Páginas'),
(4, 'Av.Tehuelches 121 - Comodoro Rivadavia', 'https://goo.gl/maps/vhsiz9F3h1p', 'glyphicon glyphicon-home', 'Contacto'),
(5, '(0297) 4064825', 'tel: 2974064825', 'glyphicon glyphicon-phone', 'Contacto'),
(6, 'turismo@mutualdepetroleros.com ', 'mailto:turismo@mutualdepetroleros?Subject=Consulta%20web', 'glyphicon glyphicon-envelope', 'Contacto'),
(7, ' turismomutualdepetroleros', 'http://www.facebook.com/turismomutualdepetroleros', 'fa fa-facebook-square', 'Contacto'),
(8, 'http://www.mutualdepetroleros.com.ar', 'http://www.mutualdepetroleros.com.ar', 'fa fa-chrome', 'Sitios Relacionados'),
(9, 'http://www.petrolerosjerarquicos.org/', 'http://www.petrolerosjerarquicos.org/', 'fa fa-chrome', 'Sitios Relacionados'),
(10, 'Institucional', NULL, NULL, 'Páginas'),
(11, 'Financiación', NULL, NULL, 'Páginas'),
(12, NULL, NULL, NULL, 'Páginas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` varchar(45) DEFAULT NULL,
  `referencia` varchar(90) DEFAULT NULL,
  `id_child` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`id`, `texto`, `referencia`, `id_child`) VALUES
(1, 'Home', 'home#inicio', NULL),
(2, 'Servicios', 'home#service', NULL),
(3, 'Aereos', 'home#aereos', NULL),
(4, 'Paquetes Turisticos', 'home#paquetes', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquete`
--

CREATE TABLE IF NOT EXISTS `paquete` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imageURL` varchar(200) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `paquete`
--

INSERT INTO `paquete` (`id`, `imageURL`, `title`, `descripcion`) VALUES
(1, 'http://mutualjerarquico.ddns.net/res/img/turismo/paquetes/1.jpg', 'Cataratas del Iguazú', NULL),
(2, 'http://mutualjerarquico.ddns.net/res/img/turismo/paquetes/2.jpg', 'Mendoza', NULL),
(3, 'http://mutualjerarquico.ddns.net/res/img/turismo/paquetes/3.jpg', 'Norte argentino', NULL),
(4, 'http://mutualjerarquico.ddns.net/res/img/turismo/paquetes/4.jpg', 'Punta Cana', NULL),
(5, 'http://mutualjerarquico.ddns.net/res/img/turismo/paquetes/5.jpg', 'Río de Janeiro', NULL),
(6, 'http://mutualjerarquico.ddns.net/res/img/turismo/paquetes/6.jpg', 'Rivera Maya', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) DEFAULT NULL,
  `subtitulo` varchar(200) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `precio` varchar(90) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tipo_post_idx` (`tipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `post`
--

INSERT INTO `post` (`id`, `titulo`, `subtitulo`, `tipo`, `image`, `precio`) VALUES
(1, 'Mi primer post', 'mi primer subtitulo', 'flyer', 'http://iphonewalls.net/wp-content/uploads/2014/09/Sunflower%20Field%20Sunset%20iPhone%206%20Plus%20HD%20Wallpaper.jpg', NULL),
(2, 'Mi primer slider', 'un subtitulo', 'slider', NULL, NULL),
(3, 'Mi primer superpost', 'un sub', 'complete', NULL, '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post_imagenes`
--

CREATE TABLE IF NOT EXISTS `post_imagenes` (
  `id_imagen` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  PRIMARY KEY (`id_imagen`,`id_post`),
  KEY `fk_post_idx` (`id_post`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `post_imagenes`
--

INSERT INTO `post_imagenes` (`id_imagen`, `id_post`) VALUES
(1, 2),
(2, 2),
(3, 2),
(4, 3),
(5, 3),
(6, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post_image_collection`
--

CREATE TABLE IF NOT EXISTS `post_image_collection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(200) DEFAULT NULL,
  `alt` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `post_image_collection`
--

INSERT INTO `post_image_collection` (`id`, `url`, `alt`) VALUES
(1, 'http://www.wallpaperscharlie.com/wp-content/uploads/2016/07/Birds-in-Rain-HD-Images-2.jpg', '1'),
(2, 'https://ugc.kn3.net/i/origin/http://targuiviatges.com/sites/default/files/fotos/SENEGAL/blue-lagoon-reykjavik.jpg', '2'),
(3, 'http://cdn.litlepups.net/2016/04/04/sleep-cat-hd-wallpaper-wide-3563-wallpaper-wallscreenhd-com.jpg', '3'),
(4, 'http://167exq3fv17047q8wx12v2wm.wpengine.netdna-cdn.com/wp-content/uploads/2013/07/Cap-Cana-Adventure-Buggies-CD-9.jpg', '1'),
(5, 'http://zorrodelahorro.com.mx/wp-content/uploads/2016/07/punta-cana-delfin.jpg', '2'),
(6, 'http://www.viajayliga.com/wp-content/uploads/2015/03/punta-cana-entertainment.jpg', '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post_text`
--

CREATE TABLE IF NOT EXISTS `post_text` (
  `id_post` int(11) NOT NULL,
  `id_text_collection` int(11) NOT NULL,
  PRIMARY KEY (`id_post`,`id_text_collection`),
  KEY `fk_post_text_idx` (`id_text_collection`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `post_text`
--

INSERT INTO `post_text` (`id_post`, `id_text_collection`) VALUES
(3, 1),
(3, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post_text_collection`
--

CREATE TABLE IF NOT EXISTS `post_text_collection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) DEFAULT NULL,
  `parrafo` varchar(450) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `post_text_collection`
--

INSERT INTO `post_text_collection` (`id`, `titulo`, `parrafo`) VALUES
(1, 'titulo1', 'm ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget tellus quis urna pretium convallis nec quis nisl. Integer in nunc imperdiet, tincidunt purus eget, tempus nisi. Nam sagittis magna nisl, id pellentesque turpis vestibulum et. Pellentesque aliquet magna sed porttitor pharetra. Sed egestas nunc vel enim posuere volutpat. '),
(2, 'titulo2', 'Vivamus diam quam, iaculis nec leo et, blandit luctus justo. Etiam purus neque, commodo sit amet est ac, viverra egestas magna. In luctus lacus sapien, eu vehicula ex sollicitudin venenatis. Fusce dignissim eros augue, nec pharetra mauris tincidunt eu. Phasellus tempor, tellus ut dictum dictum, augue felis viverra orci, ac ullamcorper purus ligula non justo. Ut eu lorem sed odio vestibulum elementum'),
(3, 'titulo3', 'In hac habitasse platea dictumst. Vestibulum nec arcu aliquet, tincidunt quam ut, ullamcorper nulla. Integer at facilisis justo. Vivamus nibh justo, rutrum eget lacus sit amet, congue feugiat ipsum. Nulla facilisi. Vivamus sed lacinia sapien. Mauris sit amet condimentum justo. Curabitur mattis nibh eget ante vulputate ullamcorper. Proin ut posuere sem. Sed aliquet mauris neque, id dictum tortor elementum vel. Vivamus euismod a orci ac auctor.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `thumbnail`
--

CREATE TABLE IF NOT EXISTS `thumbnail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(90) DEFAULT NULL,
  `texto` varchar(200) DEFAULT NULL,
  `buttonText` varchar(45) DEFAULT NULL,
  `imageRef` varchar(200) DEFAULT NULL,
  `referencia` varchar(200) DEFAULT NULL,
  `tipoReferencia` varchar(90) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tipo_thum_idx` (`tipoReferencia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `thumbnail`
--

INSERT INTO `thumbnail` (`id`, `titulo`, `texto`, `buttonText`, `imageRef`, `referencia`, `tipoReferencia`) VALUES
(1, 'Aéreos', 'Cotizacion de aéreos nacional e internacional.', NULL, 'http://mutualjerarquico.ddns.net/res/img/turismo/servicios/aereo.jpg', 'home#aereos', 'referencia'),
(2, 'Alojamientos', 'Convenios exclusivos para socios en todo el pais.Gestionamos tus resevas de Hotel en el exterior.', NULL, 'http://mutualjerarquico.ddns.net/res/img/turismo/servicios/alojamiento.jpg', 'modal', 'modalAlojamiento'),
(3, 'Paquetes', 'Cotizacion de paquetes a la medida de sus necesitades de viaje', NULL, 'http://mutualjerarquico.ddns.net/res/img/turismo/servicios/paquetes.jpg', 'home#paquetes', 'referencia'),
(4, 'Cruceros', 'Nuestra Mutual trabaja junto a las más grandes empresas de cruceros', NULL, 'http://mutualjerarquico.ddns.net/res/img/turismo/servicios/crucero.jpg', NULL, 'modalCruceros'),
(5, 'Seguro de Viajero', 'Viaja protegido, cotizamos tu seguro', NULL, 'http://mutualjerarquico.ddns.net/res/img/turismo/seguroviajero.jpg', NULL, 'simple'),
(6, 'Alquiler de Vehiculos', 'Reservá tu auto para tus vacaciones', NULL, 'http://mutualjerarquico.ddns.net/res/img/turismo/alquilerAuto.jpg', NULL, 'simple');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_footer`
--

CREATE TABLE IF NOT EXISTS `tipo_footer` (
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_footer`
--

INSERT INTO `tipo_footer` (`nombre`) VALUES
('Contacto'),
('Páginas'),
('Sitios Relacionados');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_post`
--

CREATE TABLE IF NOT EXISTS `tipo_post` (
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_post`
--

INSERT INTO `tipo_post` (`nombre`) VALUES
('complete'),
('flyer'),
('slider');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_thumbnail`
--

CREATE TABLE IF NOT EXISTS `tipo_thumbnail` (
  `nombre` varchar(90) NOT NULL,
  PRIMARY KEY (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_thumbnail`
--

INSERT INTO `tipo_thumbnail` (`nombre`) VALUES
('modalAlojamiento'),
('modalCruceros'),
('referencia'),
('simple');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `password`, `estado`) VALUES
(1, 'cheke', 'ddf10d41d5d840f6a7d0079028ddd3d6', 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `fk_tipo_post` FOREIGN KEY (`tipo`) REFERENCES `tipo_post` (`nombre`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `post_imagenes`
--
ALTER TABLE `post_imagenes`
  ADD CONSTRAINT `fk_post` FOREIGN KEY (`id_post`) REFERENCES `post` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_image_collection` FOREIGN KEY (`id_imagen`) REFERENCES `post_image_collection` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `post_text`
--
ALTER TABLE `post_text`
  ADD CONSTRAINT `fk_post_text` FOREIGN KEY (`id_text_collection`) REFERENCES `post_text_collection` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_post_id` FOREIGN KEY (`id_post`) REFERENCES `post` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `thumbnail`
--
ALTER TABLE `thumbnail`
  ADD CONSTRAINT `fk_tipo_thumbnail` FOREIGN KEY (`tipoReferencia`) REFERENCES `tipo_thumbnail` (`nombre`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
