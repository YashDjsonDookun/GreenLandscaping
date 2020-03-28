-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2020 at 12:40 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `green_landscaping`
--

-- --------------------------------------------------------

--
-- Table structure for table `admininstrators`
--

CREATE TABLE `admininstrators` (
  `adminID` int(4) NOT NULL,
  `adminEmail` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admininstrators`
--

INSERT INTO `admininstrators` (`adminID`, `adminEmail`) VALUES
(1, 'test@test.com'),
(2, 'admin@admin.com'),
(3, 'testing@testing.com'),
(4, 'Admin@email.mu'),
(5, 'Admin2@email2.mu'),
(6, 'tand@pak.tandpak');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `projectID` int(4) NOT NULL,
  `projectTitle` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `projectThumbnail` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `projectDescription` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`projectID`, `projectTitle`, `projectThumbnail`, `projectDescription`) VALUES
(1, 'Project 1', './assets/images/projects/project1.png', 'Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?'),
(2, 'Project 2', './assets/images/projects/project2.png', 'Massa enim nec dui nunc mattis enim ut tellus elementum. Tristique senectus et netus et malesuada fames ac. Faucibus vitae aliquet nec ullamcorper sit amet. Gravida quis blandit turpis cursus in hac habitasse platea.'),
(3, 'Project 3', './assets/images/projects/project3.png', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.'),
(4, 'Project 4', './assets/images/projects/project4.png', 'Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut'),
(5, 'Project 5', './assets/images/projects/project5.png', 'erum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.'),
(6, 'Project 6', './assets/images/projects/project6.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'),
(7, 'Project 7', './assets/images/projects/project7.png', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(8, 'Project 8', './assets/images/projects/project8.png', 'Enim nec dui nunc mattis enim ut tellus elementum. Iaculis at erat pellentesque adipiscing. Felis donec et odio pellentesque. Pretium fusce id velit ut tortor pretium viverra suspendisse potenti. Metus aliquam eleifend mi in nulla posuere.'),
(9, 'Project 9', './assets/images/projects/project9.png', 'Tellus molestie nunc non blandit massa enim nec dui. Adipiscing enim eu turpis egestas. Massa tincidunt nunc pulvinar sapien et.'),
(10, 'Project 10', 'https://d3tst8fsytim7l.cloudfront.net/wp-content/uploads/2018/10/16140348/Japanese-Gazebo.jpg', 'Nulla facilisi morbi tempus iaculis urna id volutpat. Vivamus arcu felis bibendum ut. Nulla pharetra diam sit amet nisl suscipit adipiscing bibendum.'),
(11, 'Project 11', 'https://wallpapers.lunean.com/images/wallpaperCollection/kyoto_japan_ginkaku_ji_silver_pavilion_temple_zen_garden.jpg', 'Aliquet eget sit amet tellus cras adipiscing enim. Massa tempor nec feugiat nisl pretium fusce id velit ut. Proin nibh nisl condimentum id. In egestas erat imperdiet sed euismod. Vitae tortor condimentum lacinia quis vel eros donec ac. Arcu dictum varius duis at consectetur lorem.'),
(12, 'Project 12', 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/db/Kenchoji_Pond.jpg/640px-Kenchoji_Pond.jpg', 'Nibh tellus molestie nunc non. In ornare quam viverra orci. Vitae et leo duis ut diam quam. Donec ultrices tincidunt arcu non sodales. Nisi lacus sed viverra tellus in hac habitasse platea dictumst.'),
(14, 'Project 13', 'https://p0.pxfuel.com/preview/163/355/718/kinkaku-ji-the-golden-pavilion-rokuon-ji-zen-royalty-free-thumbnail.jpg', 'Id interdum velit laoreet id. Tellus integer feugiat scelerisque varius morbi enim nunc faucibus. Urna et pharetra pharetra massa massa ultricies mi quis hendrerit. Arcu bibendum at varius vel pharetra vel turpis nunc. Lacus laoreet non curabitur gravida arcu ac.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admininstrators`
--
ALTER TABLE `admininstrators`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`projectID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admininstrators`
--
ALTER TABLE `admininstrators`
  MODIFY `adminID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `projectID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
