-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 01 avr. 2024 à 23:42
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bookstore`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `pc` int NOT NULL,
  `tel` int NOT NULL,
  `email` varchar(25) NOT NULL,
  `pwd` varchar(15) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `fname`, `lname`, `username`, `pc`, `tel`, `email`, `pwd`) VALUES
(1, 'admin', 'admin', 'admin01', 2097, 53247674, 'admin@bookstore.com', 'password');

-- --------------------------------------------------------

--
-- Structure de la table `author`
--

DROP TABLE IF EXISTS `author`;
CREATE TABLE IF NOT EXISTS `author` (
  `id_author` int NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `image` varchar(25) NOT NULL,
  `about` text NOT NULL,
  PRIMARY KEY (`id_author`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `author`
--

INSERT INTO `author` (`id_author`, `name`, `image`, `about`) VALUES
(1, 'J.K. Rowling', 'J-K-Rowling.jpg', 'J.K. Rowling is the author of the enduringly popular, era-defining Harry Potter book series, as well as several stand-alone novels for adults and children, and a bestselling crime fiction series written under the pen name Robert Galbraith.\r\n\r\nThe Harry Potter books have now sold over 600 million copies worldwide, been translated into 85 languages and made into eight blockbuster films. They continue to be discovered and loved by new generations of readers.\r\n\r\n'),
(2, 'Spencer Johnson', 'Spencer-Johnson.jpg', 'Patrick Spencer Johnson (November 24, 1938 – July 3, 2017) was an American physician and author. He was known for the ValueTales series of children\'s books, and for his 1998 self-help book Who Moved My Cheese?, which recurred on the New York Times Bestseller list, on the Publishers Weekly Hardcover nonfiction list. Johnson was the chairman of Spencer Johnson Partners.'),
(3, 'Brian Christian', 'Brian-Christian.png', 'Brian Christian is the author of the acclaimed bestsellers \"The Most Human Human,\" a New York Times editors’ choice and a New Yorker favorite book of the year, and \"Algorithms to Live By\" (with Tom Griffiths), a #1 Audible bestseller, Amazon best science book of the year and MIT Technology Review best book of the year.\r\n\r\nChristian’s writing has appeared in The New Yorker, The Atlantic, Wired, and The Wall Street Journal, as well as peer-reviewed journals such as Cognitive Science. He has been featured on The Daily Show and Radiolab, and has lectured at Google, Facebook, Microsoft, the Santa Fe Institute, and the London School of Economics. His work has won several awards, including publication in Best American Science & Nature Writing, and has been translated into nineteen languages.\r\n\r\nChristian holds degrees in computer science, philosophy, and poetry from Brown University and the University of Washington. A Visiting Scholar at the University of California, Berkeley, he lives in San Francisco.\r\n\r\n'),
(4, 'Robert T. Kiyosaki', 'Robert-T-Kiyosaki.jpg', 'Robert Toru Kiyosaki is an American businessman and author, known for the Rich Dad Poor Dad series of personal finance books. He is the founder of the Rich Dad Company, a private financial education company that provides personal finance and business education to people through books and videos, and Rich Global LLC, which filed for bankruptcy in 2012.[1]'),
(5, 'Daniel Way', 'Daniel-Way.jpg', 'Daniel Way (born December 27, 1974) is an American comic book writer, known for his work on Marvel Comics series such as Wolverine: Origins and Deadpool.\r\n\r\n'),
(6, 'Christopher John Pecoraro', 'Christopher-John-Pecoraro', 'Christopher John Pecoraro is a software engineer, author, and speaker from Pittsburgh, Pennsylvania and also lived abroad in Italy for ten years. He graduated from Saint Vincent College in 1999 and has spent most of his career building web-based software applications in various industries leading to peer-reviewed publications and speaking engagements at various conferences.\r\n\r\n'),
(7, 'Walter Tevis', 'Walter-Tevis.jpg', 'Walter Stone Tevis Jr. (February 28, 1928[4] – August 9, 1984[5]) was an American novelist and screenwriter. Three of his six novels were adapted into major films: The Hustler, The Color of Money and The Man Who Fell to Earth. A fourth, The Queen’s Gambit, was adapted into a miniseries with the same title and shown on Netflix in 2020. His books have been translated into at least 18 languages.\r\n\r\n'),
(8, 'Hedi Timoumi', 'Hedi-Timoumi.jpg', 'Hédi Timoumi, born January 13, 19491 in Nasrallah near Kairouan, is a Tunisian historian and academic specializing in the contemporary era.'),
(9, 'bla', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `id_book` int NOT NULL AUTO_INCREMENT,
  `id_genre` int NOT NULL,
  `id_author` int NOT NULL,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `length` int NOT NULL,
  `language` varchar(25) NOT NULL,
  `publisher` varchar(25) NOT NULL,
  `price` decimal(8,3) NOT NULL,
  `image` varchar(25) NOT NULL,
  `description` text NOT NULL,
  `qte` int NOT NULL,
  PRIMARY KEY (`id_book`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `book`
--

INSERT INTO `book` (`id_book`, `id_genre`, `id_author`, `title`, `length`, `language`, `publisher`, `price`, `image`, `description`, `qte`) VALUES
(1, 1, 1, 'harry potter and the philosopher\'s stone', 336, 'EN', 'BloomsBury', 35.200, 'harrypotter1.jpg', 'Harry Potter thinks he is an ordinary boy - until he is rescued by an owl, taken to Hogwarts School of Witchcraft and Wizardry, learns to play Quidditch and does battle in a deadly duel. The Reason ... HARRY POTTER IS A WIZARD!\r\n', 50),
(2, 1, 1, 'harry potter and the chamber of secrets', 384, 'EN', 'BloomsBury', 35.200, 'harrypotter2.jpg', 'The Dursleys were so mean and hideous that summer that all Harry Potter wanted was to get back to the Hogwarts School for Witchcraft and Wizardry. But just as he\'s packing his bags, Harry receives a warning from a strange, impish creature named Dobby who says that if Harry Potter returns to Hogwarts, disaster will strike.\r\n\r\nAnd strike it does. For in Harry\'s second year at Hogwarts, fresh torments and horrors arise, including an outrageously stuck-up new professor, Gilderoy Lockhart, a spirit named Moaning Myrtle who haunts the girls\' bathroom, and the unwanted attentions of Ron Weasley\'s younger sister, Ginny.\r\n\r\n', 50),
(3, 1, 1, 'harry potter and the prisoner of azkaban', 480, 'EN', 'BloomsBury', 35.200, 'harrypotter3.jpg', 'For twelve long years, the dread fortress of Azkaban held an infamous prisoner named Sirius Black. Convicted of killing thirteen people with a single curse, he was said to be the heir apparent to the Dark Lord, Voldemort.Now he has escaped, leaving only two clues as to where he might be headed: Harry Potter\'s defeat of You-Know-Who was Black\'s downfall as well. And the Azkaban guards heard Black muttering in his sleep, \"He\'s at Hogwarts... he\'s at Hogwarts.\"Harry Potter isn\'t safe, not even within the walls of his magical school, surrounded by his friends. Because on top of it all, there may be a traitor in their midst.\r\n', 50),
(4, 1, 1, 'harry potter and the goblet of fire', 640, 'EN', 'BloomsBury', 39.600, 'harrypotter4.jpg', 'Harry wants to get away from the pernicious Dursleys and go to the International Quidditch Cup with Hermione, Ron, and the Weasleys. He wants to dream about Cho Chang, his crush (and maybe do more than dream). He wants to find out about the mysterious event involving two other rival schools of magic, and a competition that hasn\'t happened for a hundred years. He wants to be a normal, fourteen-year-old wizard. Unfortunately for Harry Potter, he\'s not normal - even by wizarding standards.\r\n\r\nAnd in this case, different can be deadly.\r\n\r\n1', 50),
(5, 1, 1, 'harry potter and the order of the phoenix', 816, 'EN', 'BloomsBury', 39.600, 'harrypotter5.jpg', 'There is a door at the end of a silent corridor. And it\'s haunting Harry Potter\'s dreams. Why else would he be waking in the middle of the night, screaming in terror?It\'s not just the upcoming O.W.L. exams; a new teacher with a personality like poisoned honey; a venomous, disgruntled house-elf; or even the growing threat of He-Who-Must-Not-Be-Named. Now Harry Potter is faced with the unreliability of the very government of the magical world and the impotence of the authorities at Hogwarts.Despite this (or perhaps because of it), he finds depth and strength in his friends, beyond what even he knew; boundless loyalty; and unbearable sacrifice.', 50),
(6, 1, 1, 'harry potter and the half-blood prince', 560, 'EN', 'BloomsBury', 39.600, 'harrypotter6.jpg', 'The war against Voldemort is not going well; even Muggle governments are noticing. Ron scans the obituary pages of the Daily Prophet, looking for familiar names. Dumbledore is absent from Hogwarts for long stretches of time, and the Order of the Phoenix has already suffered losses. And yet...\r\n\r\nAs in all wars, life goes on. Sixth-year students learn to Apparate - and lose a few eyebrows in the process. The Weasley twins expand their business. Teenagers flirt and fight and fall in love. Classes are never straightforward, though Harry receives some extraordinary help from the mysterious Half-Blood Prince.\r\n\r\n', 50),
(7, 1, 1, 'harry potter and the deathly hallows', 640, 'EN', 'BloomsBury', 39.600, 'harrypotter7.jpg', '‘Give me Harry Potter,\' said Voldemort\'s voice, \'and none shall be harmed. Give me Harry Potter, and I shall leave the school untouched. Give me Harry Potter, and you will be rewarded.\'\r\n\r\nAs he climbs into the sidecar of Hagrid\'s motorbike and takes to the skies, leaving Privet Drive for the last time, Harry Potter knows that Lord Voldemort and the Death Eaters are not far behind. The protective charm that has kept Harry safe until now is broken, but he cannot keep hiding. The Dark Lord is breathing fear into everything Harry loves and to stop him Harry will have to find and destroy the remaining Horcruxes. The final battle must begin - Harry must stand and face his enemy...\r\n\r\nHaving become classics of our time, the Harry Potter stories never fail to bring comfort and escapism. With their message of hope, belonging and the enduring power of truth and love, the story of the Boy Who Lived continues to delight generations of new listeners.\r\n\r\n', 50),
(8, 1, 1, 'harry potter and the cursed child', 352, 'EN', 'Little, Brown', 44.900, 'harrypotter8.png', 'It was always difficult being Harry Potter and it isn\'t much easier now that he is an overworked employee of the Ministry of Magic, a husband, and father of three school-age children.\r\n\r\nWhile Harry grapples with a past that refuses to stay where it belongs, his youngest son, Albus, must struggle with the weight of a family legacy he never wanted. As past and present fuse ominously, both father and son learn the uncomfortable truth: Sometimes, darkness comes from unexpected places.\r\n\r\nThe playscript for Harry Potter and the Cursed Child was originally released as a \"special rehearsal edition\" alongside the opening of Jack Thorne\'s play in London\'s West End in summer 2016. Based on an original story by J.K. Rowling, John Tiffany, and Jack Thorne, the play opened to rapturous reviews from theatergoers and critics alike, while the official playscript became an immediate global bestseller.\r\n', 50),
(9, 5, 5, 'Deadpool : Evil Deadpool', 114, 'EN', 'Marvel', 3.000, 'deadpool.jpg', 'Would the real Wade Wilson please stand up? Deadpool returns to America, but he\'s not coming home alone! When a collection of Deadpool\'s discarded body parts meld to form an evil clone, the Merc With a Mouth faces off against himself for the crown of most hated former mercenary turned super hero turned pirate turned intergalactic bounty hunter.', 50),
(10, 2, 3, 'Algorithms to Live by', 368, 'EN', 'Brilliance Audio', 53.790, 'Algorithmstolivesby.png', 'All our lives are constrained by limited space and time, limits that give rise to a particular set of problems. What should we do, or leave undone, in a day or a lifetime? How much messiness should we accept? What balance of new activities and familiar favorites is the most fulfilling? These may seem like uniquely human quandaries, but they are not: computers, too, face the same constraints, so computer scientists have been grappling with their version of such problems for decades. And the solutions they\'ve found have much to teach us.\r\n\r\nIn a dazzlingly interdisciplinary work, acclaimed author Brian Christian and cognitive scientist Tom Griffiths show how the simple, precise algorithms used by computers can also untangle very human questions. They explain how to have better hunches and when to leave things to chance, how to deal with overwhelming choices and how best to connect with others. From finding a spouse to finding a parking spot, from organizing one\'s inbox to understanding the workings of human memory, Algorithms to Live By transforms the wisdom of computer science into strategies for human living.\r\n\r\n', 50),
(11, 6, 8, 'How Tunisians Became Tunisians', 164, 'EN', 'دار مجمد علي الحامي', 40.000, 'howtunisianbecometunisian', 'In this book, Hedi Timoumi tries to examine the various facets of Tunisian personality through a different methodology, starting from the present time, excavating the depths of  history, in search of the accumulations that led to the attainment of its present-day characteristics. He suggests new interpretations, likely to account for the eminence and uniqueness of Tunisian identity, that collective mentality which, as some thinkers believe, may help us explain why “revolution” has sparked off from Tunisia.\r\n\r\n', 50),
(12, 2, 6, 'Mastering Laravel', 204, 'EN', 'Packt Pub Ltd', 20.990, 'masteringlarvael.jpg', 'If you are an experienced novice or a capable PHP programmer who has a basic understanding of the concepts in modern PHP (at least version 5.4), this book is ideal for you. Basic object-oriented programming and database knowledge are expected. You should already know the way around Laravel, or have at least experimented with the framework.', 50),
(13, 3, 7, 'The Queen\'s Gambit', 243, 'EN', 'PENGUIN GROUP', 9.990, 'queengambit.jpg', 'Beth Harmon becomes an orphan when her parents are killed in an automobile accident. At eight years old, she is placed in an orphanage in Mount Sterling, Kentucky, where the children are given a tranquillizer twice a day. Plain and shy, she learns to play chess from the janitor in the basement and discovers that she is a chess genius. She is adopted by Alma and Allston Wheatley and goes to a local school, but remains an outsider. Desperate to study chess and having no money, she steals a chess magazine from a newspaper store and then some money from Alma Wheatley and a girl at school, so that she can enter a tournament. She also steals some of the tranquillizers to which she is becoming addicted. At thirteen she wins the tournament, and by sixteen she is competing in the US Open Championship. Like Fast Eddie (in \"The Hustler\"), she hates to lose.\r\n', 50),
(14, 4, 4, 'Rich Dad Poor Dad', 336, 'EN', 'Plata Publishing', 88.000, 'richdadpoordad.jpg', 'Rich Dad Poor Dad is Robert\'s story of growing up with two dads  his real father and the father of his best friend, his rich dad  and the ways in which both men shaped his thoughts about money and investing. The book explodes the myth that you need to earn a high income to be rich and explains the difference between working for money and having your money work for you.', 50),
(15, 3, 2, 'Who Moved My Cheese?', 94, 'EN', 'Penguin Audio', 3.000, 'whomovedmycheese.jpg', 'It would be all so easy if you had a map to the Maze.\r\nIf the same old routines worked.\r\nIf they\'d just stop moving \"The Cheese.\"\r\nBut things keep changing...\r\n\r\nMost people are fearful of change, both personal and professional, because they don\'t have any control over how or when it happens to them. Since change happens either to the individual or by the individual, Dr. Spencer Johnson, the co-author of the multimillion best seller The One Minute Manager, uses a deceptively simple story to show that when it comes to living in a rapidly changing world, what matters most is your attitude.\r\n\r\nExploring a simple way to take the fear and anxiety out of managing the future, Who Moved My Cheese? can help you discover how to anticipate, acknowledge, and accept change in order to have a positive impact on your job, your relationships, and every aspect of your life.\r\n\r\n', 50);

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `id_genre` int NOT NULL AUTO_INCREMENT,
  `genre` varchar(25) NOT NULL,
  PRIMARY KEY (`id_genre`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`id_genre`, `genre`) VALUES
(1, 'low fantasy'),
(2, 'computer science'),
(3, 'psychology'),
(4, 'autobiography'),
(5, 'comics'),
(6, 'sociology'),
(7, 'thriller');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `pc` int NOT NULL,
  `tel` int NOT NULL,
  `email` varchar(25) NOT NULL,
  `pwd` varchar(15) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `fname`, `lname`, `username`, `pc`, `tel`, `email`, `pwd`) VALUES
(1, 'Malek', 'Aiter', 'malek03', 2097, 53247674, 'malek.aiter03@gmail.com', 'malek03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
