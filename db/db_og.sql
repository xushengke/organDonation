-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 02, 2018 at 11:51 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_og`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contact_id` int(10) UNSIGNED NOT NULL,
  `contact_address` text NOT NULL,
  `contact_phone` text NOT NULL,
  `contact_email` text NOT NULL,
  `contact_map` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `contact_address`, `contact_phone`, `contact_email`, `contact_map`) VALUES
(1, 'Trillium Gift of Life Network<br>\r\n483 Bay Street, South Tower, 4th Floor<br>\r\nToronto, ON M5G 2C9\r\n', 'General inquiries<br>\r\n1-800-263-2833<br>\r\n416-363-4001 (Toronto)\r\n', 'Please click here to contact us\r\nby sending an email, Thank you!', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2886.74677336147!2d-79.3845035846335!3d43.65343657912141!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b34cc8e24e5ab%3A0x746bd991335fc068!2s483+Bay+St%2C+Toronto%2C+ON+M5G+1P5!5e0!3m2!1szh-CN!2sca!4v1521060247611\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `event_id` int(10) UNSIGNED NOT NULL,
  `event_title` text NOT NULL,
  `event_pic` text NOT NULL,
  `event_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`event_id`, `event_title`, `event_pic`, `event_text`) VALUES
(1, 'Meeting', 'meeting.jpg', 'Time: Each Monday from 9:00AM -9:30AM<br>\r\nLocation: Fanshawe College - Centre for Digital and Performance Arts<br>\r\nDetailed Matters: At each meeting, we will invite the donor or the donatories. They will tell their stories about organ donation to the people who attending the meeting. Secondly, there will be psychological counselors and doctors to explain relevant knowledge to eliminate the misunderstanding of organ donation. People of any age can join to the meeting. After the meeting, there will be free snacks, coffee and milk, and the packaging of these foods and drinks will have the knowledge of organ donation to improve people s understanding of organ donation.'),
(2, 'Party', 'party.jpg', 'Time: Friday night 10:00PM - 1:00AM<br>\r\nLocation: 123 Richmond Street London, ON<br>\r\nDetailed Matters: The party is aimed mainly at young people. We will start by looking for volunteers at the university to get people to participate in organ donation themed parties, where they can be in a bar or in any place where they can hold a line. At the party, we will send a card to everyone who participates that there are some cartoon organs on the card, and people can exchange CARDS to get the contact information of each other to enhance mutual understanding, and using exchange CARDS to make people feel like organ donation.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image`
--

CREATE TABLE `tbl_image` (
  `image_id` int(10) UNSIGNED NOT NULL,
  `image_bcg` text NOT NULL,
  `image_logo` text NOT NULL,
  `image_facebook` text NOT NULL,
  `image_twitter` text NOT NULL,
  `image_youtube` text NOT NULL,
  `image_heart` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_image`
--

INSERT INTO `tbl_image` (`image_id`, `image_bcg`, `image_logo`, `image_facebook`, `image_twitter`, `image_youtube`, `image_heart`) VALUES
(1, 'promo_background.jpg', 'logo-01.svg', 'facebook_icon.svg', 'twitter_icon.svg', 'youtube_icon.svg', 'heart.svg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_map`
--

CREATE TABLE `tbl_map` (
  `map_id` int(10) UNSIGNED NOT NULL,
  `map_source` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_map`
--

INSERT INTO `tbl_map` (`map_id`, `map_source`) VALUES
(1, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2886.74677336147!2d-79.3845035846335!3d43.65343657912141!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b34cc8e24e5ab%3A0x746bd991335fc068!2s483+Bay+St%2C+Toronto%2C+ON+M5G+1P5!5e0!3m2!1szh-CN!2sca!4v1521060247611\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_memory`
--

CREATE TABLE `tbl_memory` (
  `memory_id` int(10) UNSIGNED NOT NULL,
  `memory_pic` text NOT NULL,
  `memory_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_memory`
--

INSERT INTO `tbl_memory` (`memory_id`, `memory_pic`, `memory_text`) VALUES
(1, '1.jpg', 'There is some good in this world, and it is worth fighting for.\r\n'),
(2, '2.jpg', 'Life\'s most persistent and urgent question is, \'What are you doing for others?\r\n\r\n\r\n'),
(3, '3.jpg', 'Hope is the thing with feathers that perches in the soul.\r\n'),
(4, '4.jpg', 'Life\'s under no obligation to give us what we expect.\r\n'),
(5, '5.jpg', 'They say a person needs just three things to be truly happy in this world: someone to love, something to do, and something to hope for.\r\n'),
(6, '6.jpg', 'Never lose hope. Storms make people stronger and never last forever.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_text`
--

CREATE TABLE `tbl_text` (
  `text_id` int(10) UNSIGNED NOT NULL,
  `text_title` text NOT NULL,
  `text_par1` text NOT NULL,
  `text_par2` text NOT NULL,
  `text_par3r` text NOT NULL,
  `text_par3b` text NOT NULL,
  `text_par4r` text NOT NULL,
  `text_par4b` text NOT NULL,
  `text_par5r` text NOT NULL,
  `text_par5b` text NOT NULL,
  `text_par6r` text NOT NULL,
  `text_par6b` text NOT NULL,
  `text_par7r` text NOT NULL,
  `text_par7b` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_text`
--

INSERT INTO `tbl_text` (`text_id`, `text_title`, `text_par1`, `text_par2`, `text_par3r`, `text_par3b`, `text_par4r`, `text_par4b`, `text_par5r`, `text_par5b`, `text_par6r`, `text_par6b`, `text_par7r`, `text_par7b`) VALUES
(1, 'ABOUT DONATION', 'Today, in Ontario, there are over 1,500 people waiting for a lifesaving organ transplant. This is their only treatment option, and every 3 days someone will die because they did not get their transplant in time.', 'But you can help. When you register your consent for organ and tissue donation, you let those waiting know that you would help them if you could.', 'One donor can save up to 8 lives', 'through organ donation and enhance the lives of up to 75 more through the gift of tissue.', 'Age alone does not disqualify someone from becoming a donor. \r\n', 'The oldest organ donor was over 90 and the oldest tissue donor was over 100. There’s always potential to be a donor; it shouldn’t stop you from registering.', 'Your current or past medical history does not prevent you from registering to be a donor. \r\n', 'Individuals with serious illnesses can, sometimes, be organ and/or tissue donors. Each potential donor is evaluated on a case-by-case basis.\r\n', 'All major religions support organ and tissue donation, \r\n', 'or respect an individual’s choice.\r\n', 'Organ and tissue donation does not impact funeral plans. \r\n', 'An open casket funeral is possible.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` mediumint(8) UNSIGNED NOT NULL,
  `user_fname` varchar(250) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_pass` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_level` varchar(15) NOT NULL,
  `user_ip` varchar(50) DEFAULT 'no',
  `user_first` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_name`, `user_pass`, `user_email`, `user_date`, `user_level`, `user_ip`, `user_first`) VALUES
(1, 'Shengke', 'xu', '123456', 'xushengke94@gmail.com', '2018-04-02 21:07:09', '', '::1', ''),
(69, 'ss', 'ss', 'ss', 'ss', '2018-03-31 01:50:23', '2', 'no', '1'),
(70, 'ddd', 'ddd', 'ddd', 'ddd', '2018-03-31 01:51:22', '2', '::1', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

CREATE TABLE `tbl_video` (
  `video_id` int(10) UNSIGNED NOT NULL,
  `video_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_video`
--

INSERT INTO `tbl_video` (`video_id`, `video_name`) VALUES
(1, 'OrganDonation.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `tbl_image`
--
ALTER TABLE `tbl_image`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `tbl_map`
--
ALTER TABLE `tbl_map`
  ADD PRIMARY KEY (`map_id`);

--
-- Indexes for table `tbl_memory`
--
ALTER TABLE `tbl_memory`
  ADD PRIMARY KEY (`memory_id`);

--
-- Indexes for table `tbl_text`
--
ALTER TABLE `tbl_text`
  ADD PRIMARY KEY (`text_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_video`
--
ALTER TABLE `tbl_video`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contact_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `event_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_image`
--
ALTER TABLE `tbl_image`
  MODIFY `image_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_map`
--
ALTER TABLE `tbl_map`
  MODIFY `map_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_memory`
--
ALTER TABLE `tbl_memory`
  MODIFY `memory_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_text`
--
ALTER TABLE `tbl_text`
  MODIFY `text_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `tbl_video`
--
ALTER TABLE `tbl_video`
  MODIFY `video_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
