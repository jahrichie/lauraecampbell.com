-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 05, 2013 at 09:17 PM
-- Server version: 5.1.68-cll
-- PHP Version: 5.3.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lauraeca_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `aboutcopy` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`aboutcopy`, `id`) VALUES
('<p>I believe that our  emotional  and cultural understanding of each other <b>has not</b> progressed at the same rate as our technological understanding. </p><br> \r\n\r\n<p>I believe that exploring the depth and range of the inner life of humanity, and it''s consequent actions, generates understanding. </p>\r\n<p>I believe that understanding breeds acceptance. I believe acceptance is an evolutionary step that desperately needs to occur in order for mankind to catch up with it''s runaway capability for destruction.</p> <p>I want to tell the stories of people I have never met, and in most cases, will never meet. I want to use those stories to deepen my understanding of myself. I want to move people to think, to laugh, to empathize; to relate.</p> <p>I am incredibly proud to call myself an actor and boldly, humbly, place myself in the lineage of some of the greatest artists in history. </p> ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE IF NOT EXISTS `education` (
  `tvtitle` text NOT NULL,
  `tvrole` text NOT NULL,
  `tvnetwork` text,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`tvtitle`, `tvrole`, `tvnetwork`, `id`) VALUES
('2005-2008: ', 'Columbia University, MFA Acting', '', 0),
('2001-2005:', 'Tulane University, BA Theatre', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE IF NOT EXISTS `film` (
  `tvtitle` text NOT NULL,
  `tvrole` text NOT NULL,
  `tvnetwork` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`tvtitle`, `tvrole`, `tvnetwork`, `id`) VALUES
('Hills Like White Elephants', 'Woman (lead)', 'Columbia Film/ dir. Bo Bishop', 0),
('American Splendor', 'Lead', 'Columbia Film/ dir. Mike Hill', 0),
('The Kiss', 'Woman (lead)', 'Columbia Film/ dir. Bo Bishop', 0),
('NOLA', 'Pam', 'New Orleans, LA/ dir. Harold Sylvester', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `reviewlink` text NOT NULL,
  `quotecopy` text NOT NULL,
  `logourl` text NOT NULL,
  `logopercent` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`reviewlink`, `quotecopy`, `logourl`, `logopercent`, `id`) VALUES
('http://www.variety.com/review/VE1117939158?refcatid=33', '"Magnetic newcomer <b>Laura E. Campbell deserves a gold star</b>, or at least a purple heart, for doggedly flirting and teasing her way around some painfully oracular dialogue as the gorgeous, promising college girl soothes our hero, the jobless, drug-addicted felon."', 'Variety.com', 70, 2),
('http://newyork.timeout.com/arts-culture/theater/28892/dust', '"With so little to chew on, most of the actors hunker down into energy-saver mode. <b>Not so Laura E. Campbell, who tartly milks a thankless nubile-love-interest role</b>..."', 'Time Out NY', 80, 6),
('http://www.theatermania.com/off-broadway/reviews/12-2008/dust_16433.html', '"There are sturdy performances from <b>Campbell</b>, McClarin and Schiappa, all of whom are <b>up to and beyond</b> what''s demanded of them."', 'Theater Mania', 85, 7),
('http://www.curtainup.com/dust.html', '"<b>Campbell has talent to spare</b>, and makes her Jenny more substantial than she is. She is the gem that sparkles in front of the footlights."', 'Curtain Up', 75, 8),
('http://www.backstage.com/bso/news_reviews/nyc/review_display.jsp?vnu_content_id=1003919995', 'Martin (Richard Masur) overcame a hardscrabble upbringing in Philadelphia to forge a successful hedge fund business, to the neglect and resentment of his unseen wife and his smart, nubile teenage daughter (<b>a winning Laura E. Campbell</b>)."', 'Backstage.com', 60, 9),
('http://www.njartsmaven.com/2010/10/review-lion-in-winter-roars-at-stnj.html', '"<b>The surprise performance comes from Laura Campbell</b> as Alais Capet, Henryâ€™s twenty-something mistress."', 'NJ Art Maven', 70, 10),
('http://www.nj.com/entertainment/arts/index.ssf/2010/10/the_lion_in_winter_review_anci.html', '"As Alais â€” Henryâ€™s mistress of seven years â€” <b>Laura Campbell</b> shows a seven-year itch to become queen. <b>Sheâ€™s so fierce</b> that many will think sheâ€™d be a better king than any of Henryâ€™s sons."', 'NJ.com', 80, 11),
('http://www.qonstage.com/QOnStage_articles/2010lion-rase/art_tpl_w-554.html', '"Howard is a lion to his lover Alais, <b>played with grit and smolder by Laura Campbell</b>. Like a willow, sheâ€™ll bend but there is steel in her spineâ€“a perfect match for a man old enough to be her grandfather. She leans into his touch in the opening scenes like the perfect little kitten, but you will see this kitty has claws."', 'Q On Stage', 90, 12);

-- --------------------------------------------------------

--
-- Table structure for table `specialskills`
--

CREATE TABLE IF NOT EXISTS `specialskills` (
  `tvtitle` text NOT NULL,
  `tvrole` text NOT NULL,
  `tvnetwork` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specialskills`
--

INSERT INTO `specialskills` (`tvtitle`, `tvrole`, `tvnetwork`, `id`) VALUES
('Singing: 	', 'Three years: Tulane Faculty', '', 0),
('Dialects:', 'Irish; Northern and Southern, standard British', '', 0),
('Athletics:', 'Pilates, basketball, soccer, snowboarding', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `theatre`
--

CREATE TABLE IF NOT EXISTS `theatre` (
  `tvtitle` text NOT NULL,
  `tvrole` text NOT NULL,
  `tvnetwork` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theatre`
--

INSERT INTO `theatre` (`tvtitle`, `tvrole`, `tvnetwork`, `id`) VALUES
('The Lion in Winter', 'Alias', 'NJ Shakespeare Theatre / dir. Paul Mullins', 0),
('Dinner', 'Sian', 'Bay Street Theatre /dir. David Esbjornson', 0),
('Dust', 'Jenny  	', 'West Side Theatre / dir. Scott Zigler ', 0),
('Taming of the Shrew', 'Widow/Curtis', '	Classic Stage Co. / dir. Tony Speciale ', 0),
('Another Country', 'Actor', 'Theatre at Riverside/ dir. Diane Paulus', 0),
('Pitched', 'Robin', 'Actor''s Playhouse/ dir. Luke Leonard', 0),
('Three Penny Opera', 'Jenny', 'Schapiro Theatre/ dir. Nikky Wolcz', 0),
('Fetes de la Nuit', 'Yvette', 'Theatre at Riverside/ dir. Kim Weild', 0),
('Largo Desolato', 'Marguerite', 'Schapiro Studio/ dir. Rebecca Easton', 0),
('The Welcome Mask', 'Daughter', 'Inverse Theatre Co./ dir. Michael Rau', 0),
('Who''s To Blame', 'Narrator', 'Schapiro Studio/ dir. Kristin Linklater', 0),
('The Lower Depths', 'Nastya', 'Schapiro Tehatre/ dir. Nicky & Ulla Wolcz', 0),
('The Lower Depths', 'Nastya\r\n', 'Schapiro Tehatre/ dir. Nicky & Ulla Wolcz', 0),
('After', 'Aurelie', 'Schapiro Theatre/ dir. Anne Bogart ', 0),
('Electra', 'Electra', 'Schapiro Theatre/ dir. Nicky & Ulla Wolcz', 0),
('The Gentleman Caller	', 'Fern', 'Schapiro Theatre/ dir. Anne Bogar', 0),
('Uncle Vanya	', 'Yelena', 'Lab 103 New Orleans/ dir. Bruce Podewell', 0),
('Big Love', 'Lydia', 'TU-Lab/ dir. Aimee Hayes', 0),
('Madame De Sade', 'Renee', 'TU-Mainstage/ dir. Bruce Podewell', 0),
('The Rivals', 'Lydia Languish', 'TU-Mainstage/ dir. Bruce Podewell', 0);

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE IF NOT EXISTS `training` (
  `tvtitle` text NOT NULL,
  `tvrole` text NOT NULL,
  `tvnetwork` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`tvtitle`, `tvrole`, `tvnetwork`, `id`) VALUES
('Voice:', 'Kristin Linklater, Andrea Harring', '', 0),
('Viewpoints:', 'Anne Bogart, Tina Landeau, Barney O''Hanlon', '', 0),
('Movement:', 'Nicky Wolcz (biomechanics, clowning, commedia dell''arte, mask work)  Anthony Sandoval (Suzuki)', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tv`
--

CREATE TABLE IF NOT EXISTS `tv` (
  `tvtitle` text NOT NULL,
  `tvrole` text NOT NULL,
  `tvnetwork` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tv`
--

INSERT INTO `tv` (`tvtitle`, `tvrole`, `tvnetwork`, `id`) VALUES
('Law & Order', 'Guest Lead', 'NBC', 0),
('Law & Order: Criminal Intent', 'Guest Lead', 'USA', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
