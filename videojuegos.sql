-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-01-2024 a las 10:51:58
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `videojuegos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videojuegos`
--

CREATE TABLE `videojuegos` (
  `id` int(4) NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `descipcion` text NOT NULL,
  `precio` float NOT NULL,
  `genero` varchar(100) NOT NULL,
  `plataforma` varchar(100) NOT NULL,
  `desarrollador` varchar(100) NOT NULL,
  `lanzamiento` int(4) NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `videojuegos`
--

INSERT INTO `videojuegos` (`id`, `nombre`, `descipcion`, `precio`, `genero`, `plataforma`, `desarrollador`, `lanzamiento`, `imagen`) VALUES
(1, 'The Legend of Zelda: Breath of the Wild', 'Aventura épica en un vasto mundo abierto', 53.57, 'Acción/Aventura', 'Nintendo Switch', 'Nintendo', 2017, 'zelda.jpg'),
(2, 'Overwatch', 'Shooter en primera persona con héroes únicos', 35.87, 'FPS', 'PC, Xbox, PS', 'Blizzard Entertainment', 2016, 'overwatch.jpg'),
(3, 'Red Dead Redemption 2', 'Historia épica en el salvaje oeste', 53.57, 'Acción/Aventura', 'PS, Xbox', 'Rockstar Games', 2018, 'red_dead_redemption_2.jpg'),
(4, 'Minecraft', 'Mundo abierto donde construyes y exploras', 22.89, 'Sandbox', 'Multiplataforma', 'Mojang', 2011, 'minecraft.jpg'),
(5, 'Fortnite', 'Juego de batalla real con construcción', 0, 'Battle Royale', 'Multiplataforma', 'Epic Games', 2017, 'fortnite.jpg'),
(6, 'Cyberpunk 2077', 'RPG de mundo abierto con temática futurista', 42.49, 'RPG', 'PC, Xbox, PS', 'CD Projekt', 2020, 'cyberpunk_2077.jpg'),
(7, 'Super Mario Odyssey', 'Aventura para salvar a la Princesa Peach', 49.99, 'Plataformas', 'Nintendo Switch', 'Nintendo', 2017, 'super_mario_odyssey.jpg'),
(8, 'The Witcher 3: Wild Hunt', 'RPG de mundo abierto con cazarrecompensas', 29.99, 'RPG', 'PC, Xbox, PS', 'CD Projekt', 2015, 'witcher_3.jpg'),
(9, 'Grand Theft Auto V', 'Crimen y caos en la ciudad de Los Santos', 29.99, 'Acción', 'Multiplataforma', 'Rockstar Games', 2013, 'gta_v.jpg'),
(10, 'Animal Crossing: New Horizons', 'Simulador de vida en una isla desierta', 53.57, 'Simulación', 'Nintendo Switch', 'Nintendo', 2020, 'animal_crossing.jpg'),
(11, 'Doom Eternal', 'Shooter frenético con demonios', 44.99, 'FPS', 'PC, Xbox, PS', 'id Software', 2020, 'doom_eternal.jpg'),
(12, 'The Elder Scrolls V: Skyrim', 'RPG épico de fantasía', 19.99, 'RPG', 'Multiplataforma', 'Bethesda Game Studios', 2011, 'skyrim.jpg'),
(13, 'God of War', 'Aventura mitológica con Kratos', 39.99, 'Acción/Aventura', 'PS', 'Santa Monica Studio', 2018, 'god_of_war.jpg'),
(14, 'Stardew Valley', 'Simulador de granja relajante', 13.99, 'Simulación', 'Multiplataforma', 'ConcernedApe', 2016, 'stardew_valley.jpg'),
(15, 'Halo: Master Chief Collection', 'Colección de juegos de la saga Halo', 49.99, 'FPS', 'Xbox, PC', '343 Industries', 2014, 'halo_master_chief_collection.jpg'),
(16, 'Celeste', 'Plataformas desafiantes con historia emotiva', 19.99, 'Plataformas', 'Multiplataforma', 'Maddy Makes Games', 2018, 'celeste.jpg'),
(17, 'Assassin\'s Creed Valhalla', 'Explora la era vikinga en esta aventura épica', 49.99, 'Acción/Aventura', 'Multiplataforma', 'Ubisoft Montreal', 2020, 'assassins_creed_valhalla.jpg'),
(18, 'Splatoon 2', 'Disfruta de disparos y pintura en un mundo colorido', 44.99, 'Shooter', 'Nintendo Switch', 'Nintendo', 2017, 'splatoon_2.jpg'),
(19, 'Resident Evil Village', 'Sobrevive a horrores en una misteriosa aldea', 59.99, 'Survival Horror', 'Multiplataforma', 'Capcom', 2021, 'resident_evil_village.jpg'),
(20, 'Ori and the Will of the Wisps', 'Aventura atmosférica en un mundo mágico', 29.99, 'Plataformas', 'PC, Xbox', 'Moon Studios', 2020, 'ori_and_the_will_of_the_wisps.jpg'),
(21, 'FIFA 22', 'Última entrega del popular juego de fútbol', 59.99, 'Deportes', 'Multiplataforma', 'EA Sports', 2021, 'fifa_22.jpg'),
(22, 'Call of Duty: Warzone', 'Batallas épicas en un campo de batalla masivo', 0, 'Battle Royale', 'Multiplataforma', 'Infinity Ward', 2020, 'call_of_duty_warzone.jpg'),
(23, 'Assassin\'s Creed Odyssey', 'Explora la antigua Grecia en esta aventura', 39.99, 'Acción/Aventura', 'Multiplataforma', 'Ubisoft Montreal', 2018, 'assassins_creed_odyssey.jpg'),
(24, 'Rocket League', 'Fútbol con coches en un enfoque frenético', 19.99, 'Deportes', 'Multiplataforma', 'Psyonix', 2015, 'rocket_league.jpg'),
(25, 'Mortal Kombat 11', 'Brutales peleas y fatalities en el torneo', 49.99, 'Lucha', 'Multiplataforma', 'NetherRealm Studios', 2019, 'mortal_kombat_11.jpg'),
(26, 'The Last of Us Part II', 'Emocionante historia de supervivencia en un mundo postapocalíptico', 59.99, 'Acción/Aventura', 'PS', 'Naughty Dog', 2020, 'the_last_of_us_part_ii.jpg'),
(27, 'Fall Guys: Ultimate Knockout', 'Batallas multijugador con personajes adorables', 19.99, 'Battle Royale', 'Multiplataforma', 'Mediatonic', 2020, 'fall_guys.jpg'),
(28, 'Minecraft Dungeons', 'Aventura en mazmorras en el universo de Minecraft', 19.99, 'Acción/Aventura', 'Multiplataforma', 'Mojang', 2020, 'minecraft_dungeons.jpg'),
(29, 'League of Legends', 'Juego de estrategia en línea con campeones únicos', 0, 'MOBA', 'PC', 'Riot Games', 2009, 'league_of_legends.jpg'),
(30, 'Ghost of Tsushima', 'Aventura samurái en el Japón feudal', 49.99, 'Acción/Aventura', 'PS', 'Sucker Punch Productions', 2020, 'ghost_of_tsushima.jpg'),
(31, 'Fortnite Capítulo 3', 'Nueva era con mapas actualizados y mecánicas frescas', 0, 'Battle Royale', 'Multiplataforma', 'Epic Games', 2022, 'fortnite_chapter_3.jpg'),
(32, 'Cyberpunk 2078', 'Secuela del RPG de mundo abierto con mejoras significativas', 59.99, 'RPG', 'PC, Xbox, PS', 'CD Projekt', 2023, 'cyberpunk_2078.jpg'),
(33, 'Among Us', 'Juego de traición y misterio en el espacio', 4.99, 'Multijugador', 'Multiplataforma', 'InnerSloth', 2018, 'among_us.jpg'),
(34, 'Rainbow Six Siege', 'Tácticas intensas en este shooter táctico', 29.99, 'FPS', 'Multiplataforma', 'Ubisoft Montreal', 2015, 'rainbow_six_siege.jpg'),
(35, 'Sekiro: Shadows Die Twice', 'Acción intensa en el Japón feudal con un shinobi', 49.99, 'Acción/Aventura', 'Multiplataforma', 'FromSoftware', 2019, 'sekiro_shadows_die_twice.jpg'),
(36, 'World of Warcraft: Shadowlands', 'Expansión del popular MMORPG', 39.99, 'MMORPG', 'PC', 'Blizzard Entertainment', 2020, 'world_of_warcraft_shadowlands.jpg'),
(37, 'No Man\'s Sky', 'Exploración espacial en un vasto universo generado proceduralmente', 29.99, 'Aventura', 'Multiplataforma', 'Hello Games', 2016, 'no_mans_sky.jpg'),
(38, 'Cuphead', 'Aventura con estética de dibujos animados de los años 30', 19.99, 'Plataformas', 'PC, Xbox', 'Studio MDHR', 2017, 'cuphead.jpg'),
(39, 'Persona 5', 'RPG japonés con elementos de simulación de vida', 39.99, 'RPG', 'PS', 'Atlus', 2016, '/persona_5.jpg'),
(40, 'Genshin Impact', 'Aventura de acción con un mundo abierto impresionante', 0, 'Acción/Aventura', 'Multiplataforma', 'miHoYo', 2020, 'genshin_impact.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `videojuegos`
--
ALTER TABLE `videojuegos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `videojuegos`
--
ALTER TABLE `videojuegos`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
