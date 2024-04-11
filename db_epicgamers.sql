-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2024 at 06:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_epicgamers`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `accountid` bigint(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `displayname` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `isadmin` bit(1) NOT NULL DEFAULT b'0',
  `active` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`accountid`, `password`, `firstname`, `lastname`, `displayname`, `email`, `isadmin`, `active`) VALUES
(2, '123456', 'Leaf', 'Koder', 'Leaf Koder', 'leaf@gmail.com', b'0', b'1'),
(3, '123456', 'User', 'Admin', 'Administrator', 'tcs.admin@tcsshop.com', b'1', b'1'),
(4, '123456789', 'Doctor', 'Who', 'Who Doctor', 'drwho@gmail.com', b'0', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` bigint(20) NOT NULL,
  `accountid` bigint(10) NOT NULL,
  `purchasedate` datetime DEFAULT NULL,
  `status` bit(1) DEFAULT NULL,
  `paymentmethod` int(11) NOT NULL,
  `totalprice` float NOT NULL,
  `retired` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cartitem`
--

CREATE TABLE `cartitem` (
  `cartitemid` bigint(20) NOT NULL,
  `cartid` bigint(20) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `gameid` bigint(20) NOT NULL,
  `retired` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `gameid` bigint(20) NOT NULL,
  `gamename` text NOT NULL,
  `sale` float NOT NULL,
  `price` float NOT NULL,
  `saleprice` float NOT NULL,
  `genreid` int(11) NOT NULL,
  `first-img` varchar(500) NOT NULL,
  `developer` text NOT NULL,
  `publisher` text NOT NULL,
  `summary` text NOT NULL,
  `tag` varchar(50) NOT NULL,
  `second-img` varchar(500) NOT NULL,
  `third-img` varchar(500) NOT NULL,
  `fourth-img` varchar(100) NOT NULL,
  `fifth-img` varchar(100) NOT NULL,
  `icon` varchar(500) NOT NULL,
  `logo` varchar(500) NOT NULL,
  `retired` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`gameid`, `gamename`, `sale`, `price`, `saleprice`, `genreid`, `first-img`, `developer`, `publisher`, `summary`, `tag`, `second-img`, `third-img`, `fourth-img`, `fifth-img`, `icon`, `logo`, `retired`) VALUES
(5, 'ANNO: Mutationem', 0, 203000, 0, 1, 'game5.jpg', 'ThinkingStars', 'Lightning Games', 'ANNO: Mutationem is an action-adventure game with RPG elements set in a cyberpunk world featuring a unique mix of pixelated 2D & 3D graphic style with a rich dark and bizarre plot.', '', 'game5.jpg', 'game5.jpg', 'game5.jpg', 'game5.jpg', 'icon5.jpg', 'logo5.jpg', b'0'),
(6, 'Venice 2089', 0, 140000, 0, 2, 'game6.jpg', 'Safe Place Studio', 'Safe Place Studio', 'Explore a future Venice struggling with the effects of rising water slowly destroying the city as a bored teenager with your hoverboard and your trusty drone.', 'topsellers', 'game6.jpg', 'game6.jpg', 'game6.jpg', 'game6.jpg', 'icon6.jpg', 'logo6.jpg', b'0'),
(7, 'Atari Mania', 0, 133000, 0, 2, 'game7.jpg', 'iLLOGIKA Studios', 'Atari Inc', 'A wild journey through videogame history, Atari Mania is a microgame collection wrapped in a hilarious retro-driven narrative of exploration and surprise.', '', 'game7.jpg', 'game7.jpg', 'game7.jpg', 'game7.jpg', 'icon7.jpg', 'logo7.jpg', b'0'),
(8, 'Asterigos: Curse of the Stars', 0, 390000, 0, 2, 'game8.jpg', 'Acme Gamestudio', 'tinyBuild', 'Embark on a journey full of danger in this action RPG, inspired by Greek and Roman mythologies. Explore the breathtaking city of Aphes and forge your way through legions of unique foes and mythical bosses to discover the truth behind the citys curse.', '', 'game8.jpg', 'game8.jpg', 'game8.jpg', 'game8.jpg', 'icon8.jpg', 'logo8.jpg', b'0'),
(9, 'The Complex', 0.9, 108900, 108900, 2, 'game9.jpg', 'Wales Interactive, Good Gate Media', 'Wales Interactive', 'After a major bio-weapon attack on London two scientists find themselves in a locked-down laboratory with time and air running out. The Complex is an interactive sci-fi thriller movie where your decisions lead to one of eight suspenseful endings.', '', 'game9.jpg', 'game9.jpg', 'game9.jpg', 'game9.jpg', 'icon9.jpg', 'logo9.jpg', b'0'),
(10, 'Call of Cthulhu', 0, 260000, 0, 2, 'game10.jpg', 'Cyanide Studio', 'Focus Entertainment', '1924. Private Investigator Pierce is sent to look into the tragic death of the Hawkins. Plunge into a world of creeping madness and cosmic horror. Cryptic clues shadowy figures and pure terror bar your way as you fight to retain your sanity and solve an otherworldly mystery.', '', 'game10.jpg', 'game10.jpg', 'game10.jpg', 'game10.jpg', 'icon10.jpg', 'logo10.jpg', b'0'),
(11, 'Little Orpheus', 0, 150000, 0, 2, 'game11.jpg', 'The Chinese Room', 'Secret Mode', 'This definitive edition of the multiple-award-winning Apple Arcade hit by master storytellers The Chinese Room is remastered for the big screen and includes all bonus content of the original. A HERO WILL EMERGE!', '', 'game11.jpg', 'game11.jpg', 'game11.jpg', 'game11.jpg', 'icon11.jpg', 'logo11.jpg', b'0'),
(12, 'Destiny 2', 0, 0, 0, 2, 'game12.jpg', 'Bungie', 'Bungie', 'Destiny 2 is an action MMO with a single evolving world that you and your friends can join anytime anywhere absolutely free.', 'mostplayed', 'game12.jpg', 'game12.jpg', 'game12.jpg', 'game12.jpg', 'icon12.jpg', 'logo12.jpg', b'0'),
(13, 'A Plague Tale: Requiem', 0, 650000, 0, 0, 'game13.jpg', 'AsoboStudio', 'Focus Entertaiment', 'Embark on a heartrending journey into a brutal breathtaking world and discover the cost of saving those you love in a desperate struggle for survival. Strike from the shadows or unleash hell with a variety of weapons tools and unearthly powers.', 'mostplayed', 'game13.jpg', 'game13.jpg', 'game13.jpg', 'game13.jpg', 'icon13.jpg', 'logo13.jpg', b'0'),
(14, 'Marvels Spider-Man Remastered', 0, 1139000, 0, 2, 'game14.jpg', 'Insomniac Games, Nixxes Software', 'PlayStation PC LLC', 'In Marvel’s Spider-Man Remastered, the worlds of Peter Parker and Spider-Man collide in an original, action-packed story. Play as an experienced Peter Parker, fighting big crime and iconic villains in Marvel’s New York. Web-swing through vibrant neighborhoods and defeat villains with epic takedowns.', 'topsellers', 'game14.jpg', 'game14.jpg', 'game14.jpg', 'game14.jpg', 'icon14.jpg', 'logo14.jpg', b'0'),
(15, 'I Was a Teenage Exocolonist', 0, 233000, 0, 4, 'game15.jpg', 'Northway Games', 'Finji', 'Spend your teenage years on an alien planet in this narrative RPG with card-based battles. Explore grow up and fall in love. The choices you make and skills you master over ten years will determine the course of your life and the survival of your colony.', '', 'game15.jpg', 'game15.jpg', 'game15.jpg', 'game15.jpg', 'icon15.jpg', 'logo15.jpg', b'0'),
(16, 'KARDS - The WWII Card Game', 0, 0, 0, 4, 'game16.jpg', '1939 Games', '1939 Games', 'KARDS, The World War II Card Game, combines traditional CCG gameplay with innovative mechanics inspired by classic strategy games and real battlefield tactics. Take command and challenge other players in grand-scale warfare on the ground, air, or seas.', 'upcoming', 'game16.jpg', 'game16.jpg', 'game16.jpg', 'game16.jpg', 'icon16.jpg', 'logo16.jpg', b'0'),
(17, 'Nowhere Prophet', 0, 233000, 0, 4, 'game17.jpg', 'Sharkbomb Studios', 'No More Robots', 'Prepare your decks and go on a pilgrimage through the wasteland! Nowhere Prophet is a unique single-player card game. Travel across randomly generated maps and lead your followers in deep tactical combat. Discover new cards and build your deck as you explore this strange world', '', 'game17.jpg', 'game17.jpg', 'game17.jpg', 'game17.jpg', 'icon17.jpg', 'logo17.jpg', b'0'),
(18, 'Guild of Dungeoneering Ultimate Edition', 0, 186000, 0, 4, 'game18.jpg', 'Gambrinous', 'Gambrinous', 'Now fully rebuilt and remastered Guild of Dungeoneering Ultimate Edition is a turn-based dungeon crawler with a twist: instead of controlling the hero you build the dungeon around them.', '', 'game18.jpg', 'game18.jpg', 'game18.jpg', 'game18.jpg', 'icon18.jpg', 'logo18.jpg', b'0'),
(19, 'Roguebook', 0, 520000, 0, 4, 'game19.jpg', 'Abrakam Entertainment SA', 'Nacon', 'Embrace the challenge of a roguelike deckbuilder with unique mechanics from the developers of Faeria and Richard Garfield creator of Magic: The Gathering™. Build a team of two heroes unleash powerful combos and defeat the legends of the Roguebook!', '', 'game19.jpg', 'game19.jpg', 'game19.jpg', 'game19.jpg', 'icon19.jpg', 'logo19.jpg', b'0'),
(20, 'Void Tyrant', 0.4, 180000, 0, 4, 'game20.jpg', 'Quite Fresh Games', 'Armor Games Studios', 'Collect an intergalactic bounty of eccentric allies and deadly weapons explore vibrant planets and engage in risky turn-based battles to restore the Eyes of Chronos and save the galaxy in this strategic roguelike deckbuilder!', '', 'game20.jpg', 'game20.jpg', 'game20.jpg', 'game20.jpg', 'icon20.jpg', 'logo20.jpg', b'0'),
(21, 'Call of the Wild:The Angler', 0, 280000, 0, 5, 'game21.jpg', 'Expansive Worlds', 'Expansive Worlds', 'From the creators of theHunter: Call of the Wild comes a genre-defying fishing experience! Explore a vast open world in search of the perfect fishing spot. Ride the waters on your own or with friends as you embark on the journey to become a master angler.', '', 'game21.jpg', 'game21.jpg', 'game21.jpg', 'game21.jpg', 'icon21.jpg', 'logo21.jpg', b'0'),
(22, 'Bear and Breakfast', 0, 180000, 0, 5, 'game22.jpg', 'Gummy Cat', 'Armor Games Studios', 'Bear and Breakfast is a laid-back management adventure game where you build and run a bed and breakfast...but you’re a bear.', '', 'game22.jpg', 'game22.jpg', 'game22.jpg', 'game22.jpg', 'icon22.jpg', 'icon22.jpg', b'0'),
(23, 'Are You Smarter Than A 5th Grader?', 0, 330000, 0, 5, 'game23.jpg', 'Massive Miniteam', 'HandyGames', 'Based on the popular TV franchise this charming couch co-op quiz game for 1-8 players will have you face more than 6800 fully English-voiced questions. Prove how much you still know from school and that you are in fact smarter than a 5th grader.', '', 'game23.jpg', 'game23.jpg', 'game23.jpg', 'game23.jpg', 'icon23.jpg', 'logo23.jpg', b'0'),
(24, 'Terror of Hemasaurus', 0, 96800, 0, 0, 'game24.jpg', 'LorenLemcke', 'Digerati', 'A retro city smash em up with satisfying destruction physics. Play as a Giant Monster unleashing terror upon mankind in this modern arcade experience with the action turned up to eleven.', '', 'game24.jpg', 'game24.jpg', 'game24.jpg', 'game24.jpg', 'icon24.jpg', 'logo24.jpg', b'0'),
(25, 'GigaBash', 0.4, 326000, 0, 5, 'game25.jpg', 'PassionRepublic Games', 'PassionRepublic Games', 'Claim your place as king among Titans! GigaBash is a multiplayer arena brawler with gigantic film-inspired kaiju larger than life heroes, earth-shattering special attacks and fully destructible environments', '', 'game25.jpg', 'game25.jpg', 'game25.jpg', 'game25.jpg', 'icon25.jpg', 'logo25.jpg', b'0'),
(26, 'Dark Matter', 0, 19000, 0, 5, 'game26.jpg', 'Meridian4', 'Meridian4', 'Dark Matter is a retro 2D shoot ‘em up inspired by the 1980’s arcade classic Asteroids. The action will get frantic as you battle waves of enemy alien ships and deadly asteroids. When ready take the space carnage to Challenge Mode and rack up your score!', 'mostplayed', 'game26.jpg', 'game26.jpg', 'game26.jpg', 'game26.jpg', 'icon26.jpg', 'logo26.jpg', b'0'),
(27, 'Travellers Rest', 0, 140000, 0, 5, 'game27.jpg', 'Isolated Games', 'Isolated Games', 'You are an innkeeper on a journey to transform a run-down inn into a bustling social space. Brew your own beer run a farm explore the world and build relationships with your customers to create your own fantasy tavern!', '', 'game27.jpg', 'game27.jpg', 'game27.jpg', 'game27.jpg', 'icon27.jpg', 'logo27.jpg', b'0'),
(28, 'A Hero Rest', 0, 230000, 0, 6, 'game28.jpg', 'Vanargand Games', 'Vanargand Games', 'Build shops craft items with hundreds of customization options and manage your resources wisely to lead your Heroes to success. Immerse yourself as proprietor of a medieval fantasy town in a world abounding with Heroes and Monsters.', '', 'game28.jpg', 'game28.jpg', 'game28.jpg', 'game28.jpg', 'icon28.jpg', 'logo28.jpg', b'0'),
(29, 'RAILGRADE', 0, 464000, 0, 6, 'game29.jpg', 'Minakata Dynamics', 'TCS Publishing', 'RAILGRADE is a management sim about using railways to transport resources and power industry on an off-world colony. As administrator of the planet, help restore industrial production following a disastrous collapse of infrastructure.', '', 'game29.jpg', 'game29.jpg', 'game29.jpg', 'game29.jpg', 'icon29.jpg', 'logo29.jpg', b'0'),
(30, 'Banished', 0, 186000, 0, 6, 'game30.jpg', 'Shining Rock Software', 'Shining Rock Software', 'In this city-building strategy game, you control a group of exiled travelers who restart their lives in the wilderness. Guide them on their journey from humble beginnings to living in a thriving village.', '', 'game30.jpg', 'game30.jpg', 'game30.jpg', 'game30.jpg', 'icon30.jpg', 'logo30.jpg', b'0'),
(31, 'Prehistoric Kingdom', 0, 280000, 0, 6, 'game31.jpg', 'Blue Meridian', 'Crytivo Inc.', 'Prehistoric Kingdom provides a modern take on the tycoon simulator genre, focused on the creation and management of your very own prehistoric-themed zoo. Take control of limitless power to build, manage and grow the ultimate zoo for extinct animals.', '', 'game31.jpg', 'game31.jpg', 'game31.jpg', 'game31.jpg', 'icon31.jpg', 'logo31.jpg', b'0'),
(32, 'Power to the People', 0, 140000, 0, 6, 'game32.jpg', 'Hermes Interactive', 'Crytivo Inc.', 'Build and maintain a power grid for a constantly growing population, while fighting off all kinds of disasters in this thrilling resource management experience. Its time for you to give \"Power to the People\"! Do you have what it takes to keep the lights on?', '', 'game32.jpg', 'game32.jpg', 'game32.jpg', 'game32.jpg', 'icon32.jpg', 'logo32.jpg', b'0'),
(33, 'Patron', 0, 186000, 0, 6, 'game33.jpg', 'Overseer Games', 'Overseer Games', 'Patron is a survival city builder with a unique social dynamics system. Gather and produce resources, build your fledgling village into a prosperous city and navigate the intricate social tensions before they reach boiling point.', '', 'game33.jpg', 'game33.jpg', 'game33.jpg', 'game33.jpg', 'icon33.jpg', 'logo33.jpg', b'0'),
(34, 'Parkitect', 0, 250000, 0, 6, 'game34.jpg', 'Texel Raptor', 'Texel Raptor', 'Parkitect is a business simulation game that charges you with the construction and management of theme parks! Bringing back the best of classic theme park games with many new features and content on top. Now supports online co-op with up to 8 players!', '', 'game34.jpg', 'game34.jpg', 'game34.jpg', 'game34.jpg', 'icon34.jpg', 'logo34.jpg', b'0'),
(35, 'The Darkest Tales', 0, 186000, 0, 0, 'game35.jpg', 'Trinity Team', '101XP', 'When a nightmare creeps into reality the only ones that can help are those whose magical powers we believed in since childhood. A brave teddy bear heads to the far side of happily ever after to rescue his owner Alicia.', '', 'game35.jpg', 'game35.jpg', 'game35.jpg', 'game35.jpg', 'icon35.jpg', 'logo35.jpg', b'0'),
(36, 'Surviving the Aftermath', 0, 409999, 0, 6, 'game36.jpg', 'Iceflake Studios Oy', 'Paradox Interactive AB', 'Survive and thrive in a post-apocalyptic future — resources are scarce, but opportunity calls! Build the ultimate disaster proof colony, protect your colonists, and restore civilization to a devastated world.', '', 'game36.jpg', 'game36.jpg', 'game36.jpg', 'game36.jpg', 'icon36.jpg', 'logo36.jpg', b'0'),
(37, 'Despots Game', 0, 188000, 0, 7, 'game37.jpg', 'Konfa Games', 'tinyBuild', 'Roguelike, auto-battler, deep progression, gratuitous violence, pretzels!', '', 'game37.jpg', 'game37.jpg', 'game37.jpg', 'game37.jpg', 'icon37.jpg', 'logo37.jpg', b'0'),
(38, 'Pupperazzi', 0, 188000, 0, 7, 'game38.jpg', 'Sundae Month', 'Kitfox Games', 'Put your love for pups to the test - we have a bunch of dogs that need their photos taken, doggone it! Photograph and catalogue the finest (and derpiest) dogs to build your career, upgrade your camera, and discover new canines. WOOF.', '', 'game38.jpg', 'game38.jpg', 'game38.jpg', 'game38.jpg', 'icon38.jpg', 'logo38.jpg', b'0'),
(39, 'The Big Con', 0, 165000, 0, 7, 'game39.jpg', 'Mighty Yell', 'Skybound Games', 'Hustle and grift your way across America in the ‘90s as a teenage con artist on a crime-filled road trip adventure! Play as Ali, a curious and sarcastic high schooler who ditches band camp to go on a cross-country road trip to save her family video store.', '', 'game39.jpg', 'game39.jpg', 'game39.jpg', 'game39.jpg', 'icon39.jpg', 'logo39.jpg', b'0'),
(40, 'Deponia: The Complete Journey', 0, 250000, 0, 7, 'game40.jpg', 'Daedalic Entertainment', 'Daedalic Entertainment', 'Join Rufus on his thrilling journeys, for the first time in a complete edition with many new features, that will not only be a blast for hardcore adventure fans, but also those new to the genre.', '', 'game40.jpg', 'game40.jpg', 'game40.jpg', 'game40.jpg', 'icon40.jpg', 'logo40.jpg', b'0'),
(41, '3 out of 10: Season Two !!', 0, 0, 0, 7, 'game41.jpg', 'Terrible Posture Games, Inc.', 'Terrible Posture Games, Inc.', 'Caffeinated super-powers, sentient AIs, and rival game studios all stand in the way of Shovelworks studios as they struggle to finally make a game that scores better than “3 out of 10”. Will this be the Season that they finally do it?', 'free', 'game41.jpg', 'game41.jpg', 'game41.jpg', 'game41.jpg', 'icon41.jpg', 'logo41.jpg', b'0'),
(42, 'What Lies in the Multiverse', 0, 140000, 0, 7, 'game42.jpg', 'IguanaBee SpA.', 'Untold Tales S.A.', 'Welcome to What Lies in the Multiverse – a dimension-shifting, comedic adventure about worlds turned inside out through the powers of one gifted young boy and the misguided lessons of an eccentric scientist.', '', 'game42.jpg', 'game42.jpg', 'game42.jpg', 'game42.jpg', 'icon42.jpg', 'logo42.jpg', b'0'),
(43, 'Wildcat Gun Machine', 0, 170000, 0, 8, 'game43.jpg', 'Chunkybox Games', 'Daedalic Entertainment', 'Wildcat Gun Machine is a bullet hell dungeon crawler where you take on hordes of disgusting flesh beasts with a wide variety of guns, giant mech robots, and cute kittens.', '', 'game43.jpg', 'game43.jpg', 'game43.jpg', 'game43.jpg', 'icon43.jpg', 'logo43.jpg', b'0'),
(44, 'Riverbond', 0, 233000, 0, 8, 'game44.jpg', 'Riverbond', 'Riverbond', 'Riverbond is a fun and frantic couch co-op adventure game for 1 to 4 players set in a stunning voxel world. Embark on a heroic journey to complete missions, battle adorable enemies, and smash everything into tiny cubes!', '', 'game44.jpg', 'game44.jpg', 'game44.jpg', 'game44.jpg', 'icon44.jpg', 'logo44.jpg', b'0'),
(46, 'MythForce', 0, 280000, 0, 8, 'game46.jpg', 'Beamdog', 'Aspyr Media', 'Inspired by beloved 80s cartoons, MythForce unites swords & sorcery with gripping 1st-person combat in a roguelite adventure fit for Saturday mornings. Brave the dungeon alone or join forces with friends to take on an ever-changing Castle of Evil!', 'mostplayed', 'game46.jpg', 'game46.jpg', 'game46.jpg', 'game46.jpg', 'icon46.jpg', 'logo46.jpg', b'0'),
(47, 'Going Under', 0, 234000, 0, 8, 'game47.jpg', 'Aggro Crab Games', 'eam17 Digital Ltd', 'Going Under is a satirical dungeon crawler about exploring the ruins of failed tech startups. As an unpaid intern in the big city, you’ll wield office junk as weaponry as you make your way through the offbeat procedural dungeons beneath your company campus.', '', 'game47.jpg', 'game47.jpg', 'game47.jpg', 'game47.jpg', 'icon47.jpg', 'logo47.jpg', b'0'),
(48, 'Barony', 0, 164000, 0, 8, 'game48.jpg', 'Turning Wheel LLC', 'Turning Wheel LLC', 'Barony is the premier first-person roguelike with co-op. Cryptic items, brutal traps and devious monsters, like those found in classic roguelikes and CRPGs, await you. Conquer the dungeons alone, or gather a party in co-op with iconic and exotic RPG classes.', '', 'game48.jpg', 'game48.jpg', 'game48.jpg', 'game48.jpg', 'icon48.jpg', 'logo48.jpg', b'0'),
(49, 'Next Up Hero', 0, 186000, 0, 8, 'game49.jpg', 'Digital Continue', 'Aspyr Media, Inc.', '', '', 'game49.jpg', 'game49.jpg', 'game49.jpg', 'game49.jpg', 'icon49.jpg', 'logo49.jpg', b'0'),
(50, 'Kredolis', 0.4, 188000, 0, 9, 'game50.jpg', 'Pharos Interactive', 'Pharos Interactive', 'You find yourself shipwrecked on a beautiful unsunken island that was once part of Atlantis. Explore the mysteries of the island, and solve unique puzzles to enter the sunken lighthouse into the depths of Atlantis.', '', 'game50.jpg', 'game50.jpg', 'game50.jpg', 'game50.jpg', 'icon50.jpg', 'logo50.jpg', b'0'),
(51, 'Slime Rancher 2', 0, 288000, 0, 9, 'game51.jpg', 'Monomi Park', 'Monomi Park', 'Continue the adventures of Beatrix LeBeau as she journeys across the Slime Sea to Rainbow Island, a land brimming with ancient mysteries, and bursting with wiggly, new slimes to wrangle in this sequel to the smash-hit, Slime Rancher.', '', 'game51.jpg', 'game51.jpg', 'game51.jpg', 'game51.jpg', 'icon51.jpg', 'logo51.jpg', b'0'),
(52, 'Islets', 0, 186000, 0, 9, 'game52.jpg', 'Kyle Thompson', 'Armor Games Studios', 'Take to the sky and reunite a fragmented world in this surprisingly wholesome metroidvania! Help Iko adventure across beautiful hand-painted islands, receive letters from a quirky cast of characters, and face powerful monstrous adversaries.', '', 'game52.jpg', 'game52.jpg', 'game52.jpg', 'game52.jpg', 'icon52.jpg', 'logo52.jpg', b'0'),
(53, 'Kena: Bridge of Spirits', 0, 370000, 0, 9, 'game53.jpg', 'Exploration', 'Ember Lab', 'A story-driven, action adventure combining exploration with fast-paced combat. As Kena, players find and grow a team of charming spirit companions called the Rot, enhancing their abilities and creating new ways to manipulate the environment.', '', 'game53.jpg', 'game53.jpg', 'game53.jpg', 'game53.jpg', 'icon53.jpg', 'logo53.jpg', b'0'),
(54, 'TOEM', 0, 186000, 0, 9, 'game54.jpg', 'Something We Made', 'Something We Made', 'Set off on a delightful expedition and use your photographic eye to uncover the mysteries of the magical TOEM in this hand-drawn adventure game. Chat with quirky characters and solve their problems by snapping neat photos!', '', 'game54.jpg', 'game54.jpg', 'game54.jpg', 'game54.jpg', 'icon54.jpg', 'logo54.jpg', b'0'),
(55, 'JETT : The Far Shore', 0, 250000, 0, 9, 'game55.jpg', 'Superbrothers + Pine Scented', 'Superbrothers + Pine Scented', 'JETT : The Far Shore invites you on an interstellar expedition to carve out a future for a people haunted by oblivion in this cinematic action adventure.', '', 'game55.jpg', 'game55.jpg', 'game55.jpg', 'game55.jpg', 'icon55.jpg', 'logo55.jpg', b'0'),
(56, 'Source of Madness', 0.7, 131600, 131600, 0, 'game56.jpg', 'Carry Castle', 'Thunderful Publishing', 'Source of Madness is a side-scrolling dark action roguelite set in a twisted Lovecraftian inspired world powered by procedural generation and AI machine learning. Take on the role of a new Acolyte as they embark on a nightmarish odyssey.', '', 'game56.jpg', 'game56.jpg', 'game56.jpg', 'game56.jpg', 'icon56.jpg', 'logo56.jpg', b'0'),
(57, 'GigaBash', 0, 326000, 0, 10, 'game57.jpg', 'PassionRepublic Games', 'PassionRepublic Games', 'Claim your place as king among Titans! GigaBash is a multiplayer arena brawler with gigantic film-inspired kaiju, larger than life heroes, earth-shattering special attacks and fully destructible environments.', '', 'game57.jpg', 'game57.jpg', 'game57.jpg', 'game57.jpg', 'icon57.jpg', 'logo57.jpg', b'0'),
(58, 'THE KING OF FIGHTERS XV', 0, 630000, 0, 10, 'game58.jpg', 'SNK CORPORATION', 'SNK CORPORATION', 'SHATTER ALL EXPECTATIONS! The new \"XV\" that transcends everything!', 'topsellers', 'game58.jpg', 'game58.jpg', 'game58.jpg', 'game58.jpg', 'icon58.jpg', 'logo58.jpg', b'0'),
(59, 'Sifu', 0, 373000, 0, 10, 'game59.jpg', 'Sloclap', 'Sloclap', 'Sifu is the new game of Sloclap, the independent studio behind Absolver. A third person action game featuring intense hand-to-hand combat, it puts you in control of a young Kung-Fu student on a path of revenge.', 'topsellers', 'game59.jpg', 'game59.jpg', 'game59.jpg', 'game59.jpg', 'icon59.jpg', 'logo59.jpg', b'0'),
(60, 'SAMURAI SHODOWN', 0, 462000, 0, 10, 'game60.jpg', 'SNK', 'SNK', 'SAMURAI REBOOT! A brand new SAMURAI SHODOWN game takes aim for the world stage!', 'topsellers', 'game60.jpg', 'game60.jpg', 'game60.jpg', 'game60.jpg', 'icon60.jpg', 'logo60.jpg', b'0'),
(61, 'Kingdoms of Amalur: Re-Reckoning', 0, 456000, 0, 10, 'game61.jpg', 'KAIKO, Big Huge Games', 'THQ Nordic', 'The hit RPG returns! Remastered with stunning visuals and refined gameplay Re-Reckoning delivers intense, customizable RPG combat inside a sprawling game world.', '', 'game61.jpg', 'game61.jpg', 'game61.jpg', 'game61.jpg', 'icon61.jpg', 'logo61.jpg', b'0'),
(62, 'Override 2: Super Mech League', 0, 380000, 0, 10, 'game62.jpg', 'Modus Studios Brazil', 'Modus Games', 'Fight in Mech Leagues and soar to new heights, aiming to be the best pilot. Pick your playstyle across match types including 1v1, 2v2, free-for-all, Xenoswarm, King of the Hill and more, unlocking a slew of cosmetics and attachments for your mech of choice.', '', 'game62.jpg', 'game62.jpg', 'game62.jpg', 'game62.jpg', 'icon62.jpg', 'logo62.jpg', b'0'),
(63, 'Genshin Impact', 0, 0, 0, 2, 'game63.jpg', 'COGNOSPHERE PTE. LTD.', 'COGNOSPHERE PTE. LTD.', 'Embark on a journey across Teyvat to find your lost sibling and seek answers from The Seven — the gods of each element. Explore this wondrous world, join forces with a diverse range of characters, and unravel the countless mysteries that Teyvat holds...', 'mostplayed', 'game63.jpg', 'game63.jpg', 'game63.jpg', 'game63.jpg', 'icon63.jpg', 'logo63.jpg', b'0'),
(64, 'Assassin Creed® Mirage', 0, 0, 0, 0, 'game64.jpg', 'Ubisoft', 'Ubisoft', 'Experience the story of Basim, a cunning street thief seeking answers and justice as he navigates the bustling streets of ninth–century Baghdad.', 'upcoming', 'game64.jpg', 'game64.jpg', 'game64.jpg', 'game64.jpg', 'icon64.jpg', 'logo64.jpg', b'0'),
(65, 'Tower of Fantasy', 0, 0, 0, 2, 'game65.jpg', 'HOTTA STUDIO', 'LEVEL INFINITE', 'Embark together on your fantasy adventure! Set hundreds of years in the future on the distant planet of Aida, the shared open-world RPG, anime-infused sci-fi adventure Tower of Fantasy will be coming soon to Epic.', 'upcoming', 'game65.jpg', 'game65.jpg', 'game65.jpg', 'game65.jpg', 'icon65.jpg', 'logo65.jpg', b'0'),
(66, 'Dead Island 2', 0, 0, 0, 10, 'game66.jpg', 'Deep Silver Dambuster Studios', 'Deep Silver', 'A deadly virus is spreading across Los Angeles, turning inhabitants into zombies. Bitten, infected, but more than just immune, uncover the truth behind the outbreak and discover who -or what- you are. Pre-purchase now and get the Memories of Banoi!', 'upcoming', 'game66.jpg', 'game66.jpg', 'game66.jpg', 'game66.jpg', 'icon66.jpg', 'logo66.jpg', b'0'),
(67, 'Trifox', 0.9, 167400, 167400, 1, 'game67.jpg', 'Glowfish Interactive', 'Big Sugar', 'Trifox is a colourful and cartoonish action-adventure featuring a phenomenal fox with a multitude of talents! Choose from a trio of classes – Warrior Mage Engineer – or mix-and-match abilities to create a tailor-made hero! Inspired by the golden age of 3D platformers.', '', 'game67.jpg', 'game67.jpg', 'game67.jpg', 'game67.jpg', 'icon67.jpg', 'logo67.jpg', b'0'),
(68, 'Eville', 0, 0, 0, 5, 'game68.jpg', 'VestGames\r\n', 'Versus Evil', 'Betray your friends - and lie your way to victory. In the multiplayer social deduction game Eville you find yourself in a village riddled by a series of murders. Some say it might have been you - or was it? Convince others you\re not a murderer to stay alive!', 'upcoming', 'game68.jpg', 'game68.jpg', 'game68.jpg', 'game68.jpg', 'icon68.jpg', 'logo68.jpg', b'0'),
(69, 'Frontier Hunter: Erza Wheel of Fortune', 0, 0, 0, 1, 'game69.jpg', 'IceSitruuna', 'IceSitruuna', 'Frontier Hunter is a genuine Metroidvania game. Compared to our last work, Frontier Hunter has fuller stories, content, monsters, more exquisite scenes, smoother actions, and a more diversified, personalized cultivation system.', 'upcoming', 'game69.jpg', 'game69.jpg', 'game69.jpg', 'game69.jpg', 'icon69.jpg', 'logo69.jpg', b'0'),
(70, 'Evoland Legendary Edition', 0, 0, 0, 1, 'game70.jpg', 'Shiro Games', 'Shiro Unlimited', 'Evoland Legendary Edition brings you two great and unique RPGs, with their graphic style and gameplay changing as you progress through the game!', 'free', 'game70.jpg', 'game70.jpg', 'game70.jpg', 'game70.jpg', 'icon70.jpg', 'logo70.jpg', b'0'),
(71, 'Fallout 3: Game of the Yead Edition', 0, 0, 0, 2, 'game71.jpg', 'Bethesda Game Studios', 'Bethesda Softworks', 'Prepare for the Future™ Experience the most acclaimed game of 2008 like never before with Fallout 3: Game of the Year Edition. Create a character of your choosing and descend into a post-apocalyptic world where every minute is a fight for survival', 'free', 'game71.jpg', 'game71.jpg', 'game71.jpg', 'game71.jpg', 'icon71.jpg', 'logo71.jpg', b'0'),
(72, 'Saturnalia', 0, 0, 0, 2, 'game72.jpg', 'Santa Ragione', 'Santa Ragione', 'A Survival Horror Adventure: as an ensemble cast, explore an isolated village of ancient ritual – its labyrinthine roads change each time you lose all your characters.', 'free', 'game72.jpg', 'game72.jpg', 'game72.jpg', 'game72.jpg', 'icon72.jpg', 'logo72.jpg', b'0'),
(73, 'Warhammer 40,000: Battlesector', 0, 0, 0, 0, 'game73.jpg', 'Black Lab Games', 'Slitherine Ltd.', 'Experience every bone-rattling explosion and soul-crushing charge in Warhammer 40,000: Battlesector, the definitive battle-scale game of turn-based strategy and fast-paced combat that takes you to the battlefields of the 41st Millenium.', 'free', 'game73.jpg', 'game73.jpg', 'game73.jpg', 'game73.jpg', 'icon73.jpg', 'logo73.jpg', b'0'),
(74, 'Achilles: Legends Untold', 0, 140999, 0, 1, 'game74.jpg', 'Dark Point Games S.A.', 'Dark Point Games S.A.', 'End the conflict between Hades and Ares in this Souls-like action RPG. Battle gods defeat mythological creatures and gather resources alone or in co-op in Achilles: Legends Untold.', '', 'game74.jpg', 'game74.jpg', 'game74.jpg', 'game74.jpg', 'icon74.jpg', 'logo74.jpg', b'0'),
(75, 'Broken Pieces', 0, 233000, 0, 1, 'game75.jpg', 'Elseware Experience Benoit Dereau and Mael Vignau', 'Freedom Games', 'Broken Pieces is a psychological thriller taking place in a french coastal village somehow outside the flow of time. Solve the mysteries by putting the pieces of the story back together by figuring out the enigma behind this mystical place', 'mostplayed', 'game75.jpg', 'game75.jpg', 'game75.jpg', 'game75.jpg', 'icon75.jpg', 'logo75.jpg', b'0'),
(76, 'PUBG', 0, 0, 0, 1, 'game76.jpg', 'KRAFTON, Inc.', 'KRAFTON, Inc.', 'Play PUBG: BATTLEGROUNDS for free. Land at strategic locations, loot weapons and supplies, then survive to become the last team standing in fierce combat across diverse battlefields.', 'mostplayed', 'game76.jpg', 'game76.jpg', 'game76.jpg', 'game76.jpg', 'icon76.jpg', 'logo76.jpg', b'0'),
(77, 'Helldivers 2', 0, 0, 0, 0, 'game77.jpg', 'Arrowhead Game Studios', 'Sony Interactive Entertainment', 'Helldivers 2 is set a century after the triumph of \"Super Earth\", a self-described managed democracy, over the Cyborgs, Terminids, and The Illuminate during the events of the first game.', '', 'game77.jpg', 'game77.jpg', 'game77.jpg', 'game77.jpg', 'icon77.jpg', 'logo77.jpg', b'0'),
(78, 'Remnants 2', 0, 0, 0, 0, 'game78.jpg', 'Gunfire Games', 'Gearbox Publishing', 'In Remnant 2, you chase an apocalyptic entity known as the Root across dimensions to save existence, which you do by exploring dungeons, solving puzzles, and defeating huge and generally weird bosses.', '', 'game78.jpg', 'game78.jpg', 'game78.jpg', 'game78.jpg', 'icon78.jpg', 'logo78.jpg', b'0'),
(79, 'V Rising', 0, 789999, 0, 2, 'game79.jpg', 'Stunlock Studios', 'Level Infinite', 'Experience a Vampire Survival Action RPG adventure like no other. Awaken as a weakened Vampire after centuries of slumber. Hunt for blood to regain your strength while hiding from the scorching sun to survive.', '', 'game79.jpg', 'game79.jpg', 'game79.jpg', 'game79.jpg', 'icon79.jpg', 'logo79.jpg', b'0'),
(80, 'Barotrauma', 0, 0, 0, 2, 'game80.jpg', 'Undertow Games, FakeFish Games', 'Daedalic Entertainment', 'Barotrauma takes place several hundred years in the future. In this time, humanity has established various colonies on multiple planets.', '', 'game80.jpg', 'game80.jpg', 'game80.jpg', 'game80.jpg', 'icon80.jpg', 'logo80.jpg', b'0'),
(81, 'Valheim', 0, 0, 0, 0, 'game81.jpg', 'Iron Gate Studio, Fishlabs (Xbox)', 'Coffee Stain Publishing', 'Valheim is a brutal exploration and survival game for 1-10 players set in a procedurally-generated world inspired by Norse mythology.', '', 'game81.jpg', 'game81.jpg', 'game81.jpg', 'game81.jpg', 'icon81.jpg', 'logo81.jpg', b'0'),
(82, 'Omega Strikers', 0, 0, 0, 0, 'game82.jpg', 'Odyssey Interactive', 'Odyssey Interactive', 'Omega Strikers is a 3v3 competitive game where the objective is to knock out opponents and score goals against the enemy team using explosive attacks and abilities. Choose your character, smash opponents off the arena using explosive abilities, and score goals in chaotic, lightning fast matches!', '', 'game82.jpg', 'game82.jpg', 'game82.jpg', 'game82.jpg', 'icon82.jpg', 'logo82.jpg', b'0'),
(83, 'Monster Hunter Rise', 0, 0, 0, 1, 'game83.jpg', 'Capcom', 'Capcom', 'As with previous Monster Hunter titles, Monster Hunter Rise has the player take the role of a Hunter, tasked with slaying or capturing large monsters using a variety of weapons, tools, and environmental features to damage and weaken them while surviving their attacks.', '', 'game83.jpg', 'game83.jpg', 'game83.jpg', 'game83.jpg', 'icon83.jpg', 'logo83.jpg', b'0'),
(84, 'Darksiders Genesis', 0, 0, 0, 1, 'game84.jpg', 'Airship Syndicate', 'THQ Nordic', 'Genesis is an action/adventure that tears its way through hordes of demons, angels, and everything in-between on its way to Hell and back with guns blazing and swords swinging.', '', 'game84.jpg', 'game84.jpg', 'game84.jpg', 'game84.jpg', 'icon84.jpg', 'logo84.jpg', b'0'),
(85, 'Grannblue Fantasy Relink', 0, 0, 0, 1, 'game85.jpg', 'Osaka Cygames', 'Cygames', 'There exists a world where islands of all shapes and sizes float in a sea of clouds. It is a world forsaken by the gods. Once upon a time, people known as the Astrals attempted to seize control of this world with their overwhelming might, but the citizens of the skies repelled the invaders, thus ushering in a new era of peace.', '', 'game85.jpg', 'game85.jpg', 'game85.jpg', 'game85.jpg', 'icon85.jpg', 'logo85.jpg', b'0'),
(86, 'Lethal Company', 0, 0, 0, 2, 'game86.jpg', 'Zeekerss', 'Zeekerss', 'In Lethal Company, players obtain and sell scrap from abandoned, industrialized exomoons while avoiding traps, environmental hazards, and monsters. As employees of \"The Company\", players must sell enough scrap to meet a series of increasing profit quotas until they inevitably fail and the game starts over.', '', 'game86.jpg', 'game86.jpg', 'game86.jpg', 'game86.jpg', 'icon86.jpg', 'logo86.jpg', b'0'),
(87, 'This War of Mine', 0, 0, 0, 1, 'game87.jpg', '11 bit studios', '11 bit studios', 'This War of Mine is a survival-themed strategy game where the player controls a group of civilian survivors hiding inside a damaged house in the besieged fictional city of Pogoren, Graznavia. The main goal of the game is to stay alive during the war using the tools and materials that the player can gather.', '', 'game87.jpg', 'game87.jpg', 'game87.jpg', 'game87.jpg', 'icon87.jpg', 'logo87.jpg', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genreid` int(11) NOT NULL,
  `genrename` text NOT NULL,
  `retired` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genreid`, `genrename`, `retired`) VALUES
(0, 'Action', b'0'),
(1, 'Action-Adventure', b'0'),
(2, 'Adventure', b'0'),
(3, 'Application', b'0'),
(4, 'Card Game', b'0'),
(5, 'Casual', b'0'),
(6, 'City Builder', b'0'),
(7, 'Comedy', b'0'),
(8, 'Dungeon Crawler', b'0'),
(9, 'Exploration', b'0'),
(10, 'Fighting', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishid` bigint(20) NOT NULL,
  `accountid` bigint(10) NOT NULL,
  `gameid` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`accountid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`),
  ADD KEY `cart_ibfk_1` (`accountid`);

--
-- Indexes for table `cartitem`
--
ALTER TABLE `cartitem`
  ADD PRIMARY KEY (`cartitemid`),
  ADD KEY `cartid` (`cartid`),
  ADD KEY `gameid` (`gameid`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`gameid`),
  ADD KEY `genreid` (`genreid`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genreid`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishid`),
  ADD KEY `email` (`accountid`),
  ADD KEY `gameid` (`gameid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `accountid` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cartitem`
--
ALTER TABLE `cartitem`
  MODIFY `cartitemid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `gameid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genreid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`accountid`) REFERENCES `accounts` (`accountid`);

--
-- Constraints for table `cartitem`
--
ALTER TABLE `cartitem`
  ADD CONSTRAINT `cartitem_ibfk_1` FOREIGN KEY (`cartid`) REFERENCES `cart` (`cartid`),
  ADD CONSTRAINT `cartitem_ibfk_2` FOREIGN KEY (`gameid`) REFERENCES `game` (`gameid`);

--
-- Constraints for table `game`
--
ALTER TABLE `game`
  ADD CONSTRAINT `game_ibfk_1` FOREIGN KEY (`genreid`) REFERENCES `genre` (`genreid`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`accountid`) REFERENCES `accounts` (`accountid`),
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`gameid`) REFERENCES `game` (`gameid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
