-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2017 at 01:17 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `opennews_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE latin1_general_ci NOT NULL,
  `comments` text COLLATE latin1_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `id` int(100) NOT NULL,
  `title` text NOT NULL,
  `page` text NOT NULL,
  `text1` text NOT NULL,
  `text2` text NOT NULL,
  `text3` text NOT NULL,
  `text4` text NOT NULL,
  `text5` text NOT NULL,
  `text6` text NOT NULL,
  `text7` text NOT NULL,
  `text8` text NOT NULL,
  `text9` text NOT NULL,
  `text10` text NOT NULL,
  `text11` text NOT NULL,
  `text12` text NOT NULL,
  `text13` text NOT NULL,
  `text14` text NOT NULL,
  `text15` text NOT NULL,
  `text16` text NOT NULL,
  `text17` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`id`, `title`, `page`, `text1`, `text2`, `text3`, `text4`, `text5`, `text6`, `text7`, `text8`, `text9`, `text10`, `text11`, `text12`, `text13`, `text14`, `text15`, `text16`, `text17`) VALUES
(1, 'opennews article', 'article', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.', 'A man fatally stabbed two passengers aboard a Portland commuter train after they tried to stop him from harassing two young women who appeared to be Muslim, police said on Saturday.\r\n\r\nPolice identified the assailant, who was arrested soon after the Friday afternoon attack, as Jeremy Joseph Christian of Portland, a 35-year-old convicted felon.', 'He was racist', 'A senior researcher with the Southern Poverty Law Center, in a blog post, said Christian’s Facebook page showed he held “some racist and other extremist beliefs.”</h4>\r\n\r\n<h4>The attack unfolded hours before the start of Ramadan, Islam\'s holy month, when most of the world\'s 1.6 billion Muslims observe a daily religious fast.</h4>\r\n\r\n<h4>“It’s too early to say whether last night’s violence was an act of domestic terrorism or a federal hate crime,” Loren Cannon, special agent in charge of the Federal Bureau of Investigation in Oregon, told a news conference on Saturday, adding the bureau had joined the investigation.', 'Xenophobic admonitions', 'Christian started shouting ethnic and religious slurs, apparently at the two young women, one of whom wore a Muslim head-covering, the Portland Police Department said in a statement.</h4>\r\n\r\n<h4>Three men who intervened were stabbed. Ricky John Best (53) of Happy Valley, Oregon died at the scene, while Taliesin Myrddin Namkai Meche (23) of Southeast Portland died at a hospital, police said. A third victim, Micah David-Cole Fletcher of 21, Southeast Portland, remained in a local hospital with serious but non-life-threatening injuries, police said.</h4>\r\n\r\n<h4>Christian was booked on two counts of aggravated murder and charges of attempted murder, intimidation and being a felon in possession of a restricted weapon, and was ordered held without bail. His arraignment is scheduled for Tuesday.</h4>\r\n\r\n<h4>The women, who had left the train before officers arrived, were later in contact with authorities, according to police, who have not released their identities.', 'Hijab-wearing woman', 'Dyjuana Hudson, the mother of one of them, told The Oregonian newspaper her 16-year-old daughter, who is black, boarded the train with a Muslim friend, who was wearing a hijab.</h4>\r\n\r\n<h4>The attacker approached the girls while screaming at them, Ms. Hudson told the newspaper, relaying an account her daughter had given her. “He was saying that Muslims should die.”</h4>\r\n\r\n<h4>On Friday, police said detectives wanted to speak to the two women. A detective later took a statement from her family, Ms. Hudson told the paper. She could not be reached for comment.</h4>\r\n\r\n<h4>Police declined to release details of Christian’s criminal history, but the newspaper reported he had been convicted of robbery, kidnapping and weapon charges, citing court records. It was not immediately clear if he had obtained an attorney.', 'Looks like a first-timer', 'The suspect had no known affiliation with a criminal gang member nor any mental health history, police said.</h4>\r\n\r\n<h4>In a statement, the Council on American-Islamic Relations blamed an increase in anti-Muslim incidents in part on President Donald Trump’s focus on militant Islamist groups and anti-immigrant rhetoric.</h4>\r\n\r\n<h4>The administration has said that while it strongly opposes Islamist militants, it has no quarrel with Islam.</h4>\r\n\r\n<h4>A Facebook page that appears to belong to Christian mentions “Jihadi Muslims” among people he disliked. The image on the page matches a photo of Christian released by police.</h4>\r\n\r\n<h4>“There is too much hatred in the world right now and far too much violence. Our current political climate allows far too much room for those who spread bigotry,” Portland Mayor Ted Wheeler told a news conference.', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.'),
(2, 'Opennews Home', 'home', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.'),
(3, 'Opennews International Page', 'international', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.', 'A man yelled xenophobic slurs at two apparently Muslim women and three men had tried to intervene.');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `id` int(255) DEFAULT NULL,
  `user_name` text,
  `email_addres` text,
  `pass_word` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_authors`
--

CREATE TABLE `tbl_authors` (
  `authorId` int(4) NOT NULL COMMENT 'author id',
  `author` varchar(50) NOT NULL COMMENT 'author text'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_authors`
--

INSERT INTO `tbl_authors` (`authorId`, `author`) VALUES
(1, 'Malkhan Singh'),
(2, 'Sweety Shukla'),
(3, 'Prangya Parmita Nayak'),
(4, 'Nidhi Saini');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `categoryId` int(4) NOT NULL COMMENT 'category id',
  `category` varchar(50) NOT NULL COMMENT 'category text'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`categoryId`, `category`) VALUES
(1, 'International'),
(2, 'National'),
(3, 'State'),
(4, 'Local');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_posts`
--

CREATE TABLE `tbl_posts` (
  `postId` int(11) NOT NULL,
  `ptitle` text NOT NULL COMMENT 'Post Title',
  `authorId` int(12) NOT NULL COMMENT 'Authors',
  `categoryId` int(12) NOT NULL COMMENT 'category Id',
  `pcontent` text NOT NULL,
  `psummery` text NOT NULL,
  `iurl` text NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_posts`
--

INSERT INTO `tbl_posts` (`postId`, `ptitle`, `authorId`, `categoryId`, `pcontent`, `psummery`, `iurl`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, 'MESS WOES AND HYGIENE BLUES: THE ANNUAL MESS REVIEW', 1, 0, 'Team MM conducted a survey among the students for the academic years 2015-16 & 2016-17 to know their views about their respective mess. Few questions that were asked are as follows:  A: Do you think the mess is spacious enough?  B: Are the number of serving counters and dining tables adequate?  C: Do you think the cooking area meets proper hygiene standards?  D: Are you satisfied with the quality of food being provided?  E: Do you think a centralized menu should exist for all halls?  The analysis of the above questions is depicted through the graphs.  The other feedback that was obtained for each of the Halls of Residence are as follows:  C.V. RAMAN HALL OF RESIDENCE:  In CVR majority of the boarders feel that seldom their suggestions in relation to mess menu are paid attention. Some even feel that the changes in the menu are done after discussion with the HEC, and they are always free to give suggestions. Most of the boarders demand mandatory feedback system in the mess twice in a semester. According to the', 'In the current academic year 2017-18 the caterers have been shuffled as follows:  HB to CVR; MSS to HB; SD to DBA/MSS; VS to SD; CVR to VS  KMS new caterer; GDB/MV unchanged  With the change of catere', 'la.jpg', 0, 1, '2017-09-02 14:58:01', 1, '2017-09-03 00:03:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reset_password`
--

CREATE TABLE `tbl_reset_password` (
  `id` bigint(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activation_id` varchar(32) NOT NULL,
  `agent` varchar(512) NOT NULL,
  `client_ip` varchar(32) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` bigint(20) NOT NULL DEFAULT '1',
  `createdDtm` datetime NOT NULL,
  `updatedBy` bigint(20) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `roleId` int(4) NOT NULL COMMENT 'role id',
  `role` varchar(50) NOT NULL COMMENT 'role text'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`roleId`, `role`) VALUES
(1, 'System Administrator'),
(2, 'Manager'),
(3, 'Employee'),
(4, 'Author');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userId` int(11) NOT NULL,
  `email` varchar(128) NOT NULL COMMENT 'login email',
  `password` varchar(128) NOT NULL COMMENT 'hashed login password',
  `name` varchar(128) DEFAULT NULL COMMENT 'full name of user',
  `mobile` varchar(20) DEFAULT NULL,
  `roleId` tinyint(4) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userId`, `email`, `password`, `name`, `mobile`, `roleId`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, 'malkhansinghrathaur@gmail.com', '$2y$10$WQQRBQDkxV/98bqK.24Dp.uMVS6KcztVqdwwTrOBLIWLSeSqE2gii', 'System Administrator', '8604033352', 1, 0, 0, '2017-08-31 00:00:00', 1, '2017-08-31 00:00:00'),
(2, 'malkhansinghrathaur52@outlook.com', '$2y$10$KDcf6/ZwbURsMFMQmLJKsu2jrcMUdDy2j9nHtiqRyJyvdwzL3QSwq', 'Malkhan Singh', '8604033352', 4, 0, 1, '2017-08-31 18:12:25', 1, '2017-08-31 18:13:14'),
(3, 'shubhamekka94@gmail.com', '$2y$10$LLyjuy588Ssb7YDPQpK6EOV2Xu/cBFGY3RKtCwMl1a2FAlhyjc1Ou', 'Shubham Ekka', '8005166898', 3, 0, 1, '2017-09-02 11:51:50', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created`, `modified`, `status`) VALUES
(4, 'Malkhan Singh', 'malkhansinghrathaur@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-07-15 22:04:31', '2017-07-15 22:04:31', '1'),
(5, 'sulkhan singh', 'sulkhansinghrathaur@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '2017-07-16 05:38:48', '2017-07-16 05:38:48', '1'),
(6, 'Hari Singh', 'harisinghrathaur@gmail.com', 'a9bcf1e4d7b95a22e2975c812d938889', '2017-07-27 05:46:17', '2017-07-27 05:46:17', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users_vote`
--

CREATE TABLE `users_vote` (
  `rateing_id` int(10) NOT NULL,
  `rating_options` text NOT NULL,
  `votes` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_vote`
--

INSERT INTO `users_vote` (`rateing_id`, `rating_options`, `votes`) VALUES
(1, 'Excellent', 4),
(2, 'Good', 1),
(3, 'Awesome', 0),
(4, 'Normal', 1),
(5, 'Need Changes', 0),
(6, 'Copied from others', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_authors`
--
ALTER TABLE `tbl_authors`
  ADD PRIMARY KEY (`authorId`);

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  ADD PRIMARY KEY (`postId`);

--
-- Indexes for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`roleId`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_authors`
--
ALTER TABLE `tbl_authors`
  MODIFY `authorId` int(4) NOT NULL AUTO_INCREMENT COMMENT 'author id', AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `categoryId` int(4) NOT NULL AUTO_INCREMENT COMMENT 'category id', AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  MODIFY `postId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `roleId` int(4) NOT NULL AUTO_INCREMENT COMMENT 'role id', AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
