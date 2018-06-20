-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 20, 2018 at 08:48 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `date`) VALUES
(1, 'Post', 'This is a post\r\n', 'Thursday 24th of May 2018 09:46:43 AM'),
(2, 'Post', 'SedmogodiÅ¡nji maÄak iz Sinsinatija u SAD, Äije je ime Mister Bu (engl. Mister Boo) spasao je od trovanja celu porodicu. On je neprekidnim mjaukajnem, ... Å¡to inaÄe nikad ne radi, probudio svoje vlasnike...\r\n\r\nDa nije to uÄinio velika je moguÄ‡nost da bi doÅ¡lo do tragedije, jer se kuÄ‡a, dok su svi spavali, ispunila ugljen-monoksidom, gasom koji je do sada bezbroj puta Å¡irom sveta otrovao cele porodice na spavanju, jer je potpuno neprimetan - bez boje, mirisa i ukusa.\r\n\r\nMaÄak, Mister Boo je iÅ¡ao kroz hodnik posrÄ‡uÄ‡i i gubeÄ‡i ravnoteÅ¾u, i neprestano mjaukao.\r\n\r\n\"Onesvestio se nekoliko puta pokuÅ¡avajuÄ‡i da nas probudi. To je zaista neverovatno, jer nikad ranije nije mjaukao. Kao da je Äekao Äitav Å¾ivot da uradi tu herojsku stvar\" rekla je njegova vlasnica Keckes, koja se, kada je poÅ¡la za njim, takoÄ‘e onesvestila.\r\n\r\nNju su otac i brat izneli napolje, a kasnije je spasena i njena majka, koja je maÄka ponela sa sobom.\r\n\r\nIstraga je pokazala da je procureo gasni bojler u podrumu, a vatrogasci koji su doÅ¡li na lice mesta bili su vrlo sreÄ‡ni Å¡to su svi dobro, a porodici su savetovali da nabavi detektor za ugljen-monoksid.', 'Thursday 24th of May 2018 03:43:50 PM'),
(3, 'Post', '123\r\n', 'Thursday 24th of May 2018 05:10:46 PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
