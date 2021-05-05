

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `Incidentes` (
  `id` int(2) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `lugar_incidente` varchar(15) NOT NULL,
  `tipo_incidente` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `Incidentes` (`id`, `nombre`, `lugar_incidente`, `tipo_incidente`) VALUES
(1, "prueba", "prueba1", "falla");


ALTER TABLE `Incidentes`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `Incidentes`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

