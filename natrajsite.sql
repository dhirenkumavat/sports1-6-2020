-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2020 at 12:52 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `natrajsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', '123', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aboutus`
--

CREATE TABLE `tbl_aboutus` (
  `id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `status` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_aboutus`
--

INSERT INTO `tbl_aboutus` (`id`, `image`, `content`, `status`, `create_date`) VALUES
(1, '1578120491237955.jpg', '<p xss=removed><strong><span xss=removed>Mahira Sports </span></strong><span xss=removed>is India’s premium sports infrastructure solutions company. We pride ourselves on offering our customers excellent service and expert technical knowledge, thereby ensuring the success of each project.</span></p>\r\n<p xss=removed><span xss=removed>Established in the year 2016, <strong><span xss=removed>Mahira Sports</span></strong>  has diversified into various business interests from Trading, Infrastructure Development, Import, and Distribution.  <strong><span xss=removed>Mahira Sports </span></strong>reputed clientele include Real Estate Developers, Sports Institutes, Government, Architects and Designers.</span></p>\r\n<p xss=removed><span xss=removed>We are proud to be associated with our suppliers from around the country, who  are established, reputed and renowned manufacturers.</span></p>\r\n<p xss=removed><span xss=removed>Being a turnkey developer and supplier of sports surfaces and infrastructure, we at <strong>Mahira Sports</strong> research and develop cutting edge products, in order to execute the complete project management.</span></p>\r\n<p> </p>', 1, '2020-01-04 06:48:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_careers`
--

CREATE TABLE `tbl_careers` (
  `id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `status` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_careers`
--

INSERT INTO `tbl_careers` (`id`, `image`, `content`, `status`, `create_date`) VALUES
(1, '1578120632438720.jpg', '<p>At Mahira sports, we hire, sustain and motivate individuals who have the determination and passion to make a notable contribution to our accomplishments. The company\'s heritage and perception are devised to attract and sustain the most excellent minds in the industry. To continue the legacy of success that we stand for, we are in constant search of talented, enthusiastic, and motivated individuals like you to be a part of our growing and high performing team. If you s our vision and are looking forward to overcoming challenges at work in a congenial and friendly culture and can act with compassion and integrity, then you might be the right fit for us. </p>\r\n<p>our culture is focused on you developing your skills through mentoring and training, and an open and collaborative team culture which allows you to learn from mistakes and improve rapidly. We don’t just work on specific functional skills such as sales or finance and accounts, but also focus on improving your team working and communication skills which are critical in the world we live in today. We are also performance-oriented which results in us stretching your rubber band as much as possible so that you are able to perform at high levels all the time. If you don’t push yourself and dream big, you can never accomplish great things. </p>\r\n<p> </p>', 1, '2020-01-04 06:50:32');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `catename` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `message` text NOT NULL,
  `cateimage` varchar(250) NOT NULL,
  `status` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `catename`, `image`, `message`, `cateimage`, `status`, `create_date`) VALUES
(1, 'Indoor Sports', '1578119806521375.jpg', '<p>Mahira Sports is one of the top global sports infrastructure providers and one of the largest and most successful in India. We are in fact the only multi-national sports infrastructure development company in India today.  Mahira Sports offers our customers a range of indoor surface options which allow you to choose the right option for yourself as each type of flooring works best under certain circumstances. The surface types that we offer are listed below some of them are in stock and can be installed immediately. Furthermore, Mahira Sports offers best in class installation capabilities which will ensure that your indoor floors perform for a long time.  When you work with us, you are accessing quality products, consultative objective advice, and cutting edge site management and installation skills.  The cost of choosing the wrong options is a diminished reputation,  injured players, downtime of the sports areas, and upset customers-we help you avoid such situations.</p>\r\n\r\n<hr>\r\n<p><strong>The kind of indoor sports areas that we can help you with include the following (others are also available):</strong></p>\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n <tbody>\r\n  <tr>\r\n   <td>Badminton</td>\r\n   <td>Football</td>\r\n   <td>Boxing and other such sports\r\n   </td>\r\n  </tr>\r\n  <tr>\r\n   <td>Football</td>\r\n   <td>Volleyball</td>\r\n   <td>\r\n   Indoor running tracks\r\n   </td>\r\n  </tr>\r\n  <tr>\r\n   <td>\r\n   <p>Table tennis</p>\r\n   </td>\r\n   <td>Gyms</td>\r\n   <td>Cricket</td>\r\n  </tr>\r\n  <tr>\r\n   <td>Basketball</td>\r\n   <td>\r\n   <p>Indoor playgrounds</p>\r\n   </td>\r\n   <td>\r\n   Dance and other such exercises\r\n</td>\r\n  </tr>\r\n </tbody>\r\n</table>\r\n\r\n<p> </p>\r\n', '1578119806887071.jpg', 1, '2020-01-03 07:25:47'),
(2, 'Outdoor Sports', '1578119962381618.jpg', '<p>Mahira Sports has a wide range of outdoor sports floorings some of which it keeps in stock. It is critical for a customer to choose the right vendors for outdoor areas as these are even more complex to install and degrade much quicker due to weather and climate.  At Mahira Sports we believe we are the best in doing outdoor areas because we do not take any shortcuts in doing the work for our customers. Every part of doing an outdoor project has to be carefully monitored and done correctly to achieve an outcome where your outdoor surface will last for 5 up to 15 years depending on the surface. This level of precision, integrity and skill is possessed by only a few companies and at Mahira Sports we take pride in doing the job the right way.  At Mahira Sports , we have sophisticated process starting from the time an order is closed to the final installation and handover-our site managers and installers are well trained as well, and we use high quality products from the best suppliers in the world.</p>', '1578119962320231.jpg', 1, '2020-01-03 07:26:05'),
(3, 'Education', '1578120113394693.png', '<p>Children are our future: shouldn’t we invest in the right quality facilities, which allow them to learn and flourish and create a more equitable society. Mahira Sports can offer you a package of flooring and furniture to ensure that your school provides a safe, high quality and vibrant place for children to learn.  By providing you with a one stop shop for furniture and flooring products/services, we help you save management time and resources.  Mahira Sports is in fact the only company in India that today can offer you education furniture, education flooring, and sports infrastructure all in one package. As most projects are complicated, many of our customers like the fact that they can have a vendor that can do so many things at one time for them.</p>', '1578120113606526.jpg', 1, '2020-01-03 07:26:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clients`
--

CREATE TABLE `tbl_clients` (
  `clients_id` int(11) NOT NULL,
  `featured_product_id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `status` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile_no` varchar(100) NOT NULL,
  `msg` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enquiry`
--

CREATE TABLE `tbl_enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_enquiry`
--

INSERT INTO `tbl_enquiry` (`id`, `name`, `city`, `email`, `mobile`, `message`, `status`, `create_date`) VALUES
(2, 'Name ', 'MALAYSIA', '999@gmail.com', 'ff', 'sfsf', 0, '2020-01-04 11:44:50'),
(3, 'Name ', 'ITALY', '999@gmail.com', '96555', 'ff', 0, '2020-01-04 11:45:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_featured_products`
--

CREATE TABLE `tbl_featured_products` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `heading` text NOT NULL,
  `status` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_featured_products`
--

INSERT INTO `tbl_featured_products` (`id`, `name`, `image`, `content`, `heading`, `status`, `create_date`) VALUES
(2, 'Sports Flooring', '1578054171376763.jpg', '<p>Mahira Sports was established in Germany in 1973 and has focused primarily on sports infrastructure solutions. Trust, quality, and performance: that is what Mahira Sports has offered its global clientele for over 45 years; that is why we have had sales over one billion US dollars, and a corporate history of close to half a century; and that is why our customers keep on coming back to us.</p>\r\n<p>We are a one-stop-shop for all your sports flooring requirements and provide services right from the design, planning, and set up to post-installation maintenance. Our sports floorings are certified by leading sports federations like FIFA, BWF, FIBA, ITF, etc. We also provide facility turnkey solutions and sports accessories.</p>\r\n<p>From multi-use gym flooring to competitive basketball courts, weight room flooring to yoga studios, volleyball flooring to indoor tennis courts, Mahira Sports co offers a wide range of indoor sports surfaces for many different activities and levels of competition. With every sports flooring solution, we provide the knowledge and expertise to make your project a success.</p>', 'Why Mahira Sports ?', 1, '2020-01-02 12:41:58'),
(3, 'Synthetic Flooring', '', '', '', 1, '2020-01-02 12:42:08'),
(4, 'Soccer Turf', '', '', '', 1, '2020-01-02 12:42:15'),
(5, 'Badminton Flooring', '', '', '', 1, '2020-01-02 12:42:25'),
(6, 'Pu Flooring', '', '', '', 1, '2020-01-02 12:42:32'),
(7, 'Wooden Sports Flooring', '', '', '', 1, '2020-01-02 12:42:39'),
(8, 'Vinyl Flooring', '', '', '', 1, '2020-01-02 12:42:47'),
(9, 'Kids Play Area Flooring', '', '', '', 1, '2020-01-02 12:42:54'),
(10, 'Artificial Grass', '', '', '', 1, '2020-01-02 12:43:01'),
(11, 'Pp Tiles', '', '', '', 1, '2020-01-02 12:43:07'),
(12, 'Squash Court', '', '', '', 1, '2020-01-02 12:43:15'),
(13, 'Basketball Floor', '', '', '', 1, '2020-01-02 12:43:24'),
(14, 'Tennis Court', '', '', '', 1, '2020-01-02 12:43:32'),
(15, 'Volleyball Court', '', '', '', 1, '2020-01-02 12:43:42'),
(16, 'Hockey Turf', '', '', '', 1, '2020-01-02 12:43:49'),
(17, 'Sports Construction Services', '', '', '', 1, '2020-01-02 12:43:55'),
(18, 'Rubber Flooring', '', '', '', 1, '2020-01-02 12:44:03'),
(19, 'Epdm Flooring', '', '', '', 1, '2020-01-02 12:44:08'),
(20, 'Synthetic Track', '', '', '', 1, '2020-01-02 12:44:18'),
(21, 'Gym Flooring', '', '', '', 1, '2020-01-02 12:44:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `subtype_id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `status` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id`, `type_id`, `subtype_id`, `image`, `status`, `create_date`) VALUES
(2, 1, 1, '1578032333719129.jpg', 1, '2020-01-03 06:18:53'),
(3, 1, 2, '1578049258900363.jpg', 1, '2020-01-03 11:00:58'),
(4, 1, 3, '1578049281932834.jpg', 1, '2020-01-03 11:01:21'),
(5, 1, 4, '1578049298402696.jpg', 1, '2020-01-03 11:01:38'),
(6, 1, 3, '1578049477381564.jpg', 1, '2020-01-03 11:04:37'),
(7, 1, 3, '1578049718994981.jpg', 1, '2020-01-03 11:08:38'),
(8, 1, 1, '1578049884135091.jpg', 1, '2020-01-03 11:11:24'),
(9, 1, 1, '1578049922473822.jpg', 1, '2020-01-03 11:12:02'),
(10, 1, 2, '1578050002115912.jpg', 1, '2020-01-03 11:13:22'),
(11, 2, 5, '1578050097943576.jpg', 1, '2020-01-03 11:14:57'),
(12, 2, 5, '1578050127844346.jpg', 1, '2020-01-03 11:15:27'),
(13, 2, 6, '1578050163119872.jpg', 1, '2020-01-03 11:16:03'),
(14, 2, 6, '1578050182729790.jpg', 1, '2020-01-03 11:16:22'),
(15, 2, 7, '1578050229340386.jpg', 1, '2020-01-03 11:17:09'),
(16, 2, 7, '1578050294822862.jpg', 1, '2020-01-03 11:18:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_maintenance`
--

CREATE TABLE `tbl_maintenance` (
  `id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `status` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_maintenance`
--

INSERT INTO `tbl_maintenance` (`id`, `image`, `content`, `status`, `create_date`) VALUES
(1, '1578120808726182.jpeg', '<p class=\"MsoNormal\"><span xss=removed>The fickle nature that is the professional sports industry trickles down to maintenance and engineering managers who work hard to keep the palaces where the teams play pristine and up to modern standards. At Mahira Sports, like in everything else we do, we use a customer-focused quality approach to doing maintenance. Maintenance like any service or product can be of high quality or not so high quality. At Mahira Sports, we provide high-quality maintenance backed up by machinery imported from Europe, strong standard operating procedures, and a well-trained team. Maintenance is only useful if it helps provide the benefits mentioned above, and our maintenance process will ensure that the money you are paying helps your field last longer, play better, and keep your customers happy. In other words, the return on investment will be high. Below you can see before and after images of the maintenance work we have done. </span></p>\r\n<p class=\"MsoNormal\"><strong><span xss=removed>Advantages of maintenance</span></strong></p>\r\n<ul type=\"disc\">\r\n<li class=\"MsoNormal\" xss=removed><span xss=removed>Your sports surface will last longer-life span can be extended by 25%</span></li>\r\n</ul>\r\n<ul type=\"disc\">\r\n<li class=\"MsoNormal\" xss=removed><span xss=removed>Your sports surfaces will provide better playability: players will enjoy playing for longer on your field</span></li>\r\n<li class=\"MsoNormal\" xss=removed><span xss=removed>You will avoid more injuries: injuries are a bad thing for the reputation of a sports business or school</span></li>\r\n<li class=\"MsoNormal\" xss=removed><span xss=removed>Your sports surface will look aesthetically better: in a competitive world, aesthetics are important</span></li>\r\n</ul>', 1, '2020-01-04 06:53:28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int(11) NOT NULL,
  `type` varchar(250) NOT NULL,
  `image` text NOT NULL,
  `title` text NOT NULL,
  `link` text NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `type`, `image`, `title`, `link`, `description`, `status`) VALUES
(9, 'Hero', '1577866405.jpg', 'WELCOME TO MS SPORTS', 'http://localhost/2020/january/Sports/', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id justo a arcu viverra placerat in eget dolor. In hac habitasse platea dictumst. Etiam porta diam sed lacus pharetra, elementum molestie metus fermentum.\r\n\r\n', 1),
(10, 'Hero', '1577867875.jpg', 'WELCOME TO MS SPORTS', 'http://localhost/2020/january/Sports/', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id justo a arcu viverra placerat in eget dolor. In hac habitasse platea dictumst. Etiam porta diam sed lacus pharetra, elementum molestie metus fermentum.\r\n\r\n', 1),
(13, 'Hero', 'Olympic_Green_Hockey_Field.jpg', 'WELCOME TO MS SPORTS', 'http://localhost/2020/january/Sports/', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id justo a arcu viverra placerat in eget dolor. In hac habitasse platea dictumst. Etiam porta diam sed lacus pharetra, elementum molestie metus fermentum.\r\n\r\n', 1),
(14, 'Hero', '24-02-2018-Speed-Skating-Mens-Mass-Start-03.jpg', 'WELCOME TO MS SPORTS', 'http://localhost/2020/january/Sports/', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id justo a arcu viverra placerat in eget dolor. In hac habitasse platea dictumst. Etiam porta diam sed lacus pharetra, elementum molestie metus fermentum.\r\n\r\n', 1),
(15, 'Maitnenance', '1578121474974880.jpg', '', '', '', 1),
(16, 'Maitnenance', '1578121483733995.jpg', '', '', '', 1),
(17, 'Maitnenance', '1578121488312581.jpg', '', '', '', 1),
(18, 'Maitnenance', '1578121494124647.jpg', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sociallink`
--

CREATE TABLE `tbl_sociallink` (
  `id` int(11) NOT NULL,
  `type` varchar(250) NOT NULL,
  `links` text NOT NULL,
  `status` int(11) NOT NULL,
  `Create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sociallink`
--

INSERT INTO `tbl_sociallink` (`id`, `type`, `links`, `status`, `Create_date`) VALUES
(11, 'FACEBOOK', 'https://www.facebook.com/', 1, '2020-01-01 07:50:39'),
(12, 'TWITTER', 'https://twitter.com/', 1, '2020-01-01 07:50:43'),
(13, 'LINKEDIN', 'https://in.linkedin.com/', 1, '2020-01-01 07:50:46'),
(14, 'GMAIL', 'https://mail.google.com/', 1, '2020-01-01 07:50:35'),
(15, 'INSTAGRAM', 'https://www.instagram.com/', 0, '2020-01-01 08:12:31'),
(16, 'YOUTUBE', 'https://www.youtube.com/', 0, '2020-01-01 08:12:27'),
(17, 'PINTEREST', 'https://in.pinterest.com/', 0, '2020-01-01 08:12:23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategory`
--

CREATE TABLE `tbl_subcategory` (
  `subid` int(11) NOT NULL,
  `cateid` int(11) NOT NULL,
  `subcatename` varchar(250) NOT NULL,
  `Images` varchar(250) NOT NULL,
  `Colors` varchar(250) NOT NULL,
  `certificates` varchar(250) NOT NULL,
  `specification` varchar(250) NOT NULL,
  `construction` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `status` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subcategory`
--

INSERT INTO `tbl_subcategory` (`subid`, `cateid`, `subcatename`, `Images`, `Colors`, `certificates`, `specification`, `construction`, `content`, `status`, `create_date`) VALUES
(2, 2, 'Acrylic', '1578135902650417.png', '', '', '', '', '<p>Synthetic Acrylic is a cost-effective, quality sports flooring system for indoor and outdoor use. It can be applied as a layering system and is primarily developed for multipurpose courts, basketball, badminton, futsal and volleyball courts and skating areas. Mahira sports also provide best in service capabilities in ensuring the flooring is installed properly which is critical for an outdoor floor.</p>\r\n', 1, '2020-01-03 07:27:22'),
(4, 1, 'PU Flooring', '1578136299868326.png', '', '', '', '', '<p>PU is a synthetically manufactured polymer surface designed for both indoor and outdoor use, which is durable, easily maintained. It has a seamless finish and the no of layers can be varied to suit client requirements</p>\r\n\r\n<p>Our PU flooring is one of the best types of sports floors that are incredibly multi-functional. Polyurethane is an indoor floor done on-site with multiple colors and multiple thicknesses. Additionally, it is highly customizable with multiple color options. Furthermore there is next to no maintenance costs and the top layer can easily be resurfaced</p>\r\n', 1, '2020-01-04 11:11:39'),
(5, 1, 'Vinyle flooring', '1578136430399169.png', '', '', '', '', '<p>Vinyl’s versatility has made it one of the most used indoor flooring in the industry. It’s superior comfort and exceptional finish make it the ultimate choice for several sports such as indoor basketball, yoga halls, table tennis, billiards, indoor badminton, indoor volleyball, and multi-purpose indoor facilities</p>\r\n', 1, '2020-01-04 11:13:50'),
(6, 2, 'Artificial Turf', '1578136513691623.png', '', '', '', '', '<p>Mahira Sports offers a wide range of turf products for different sporting uses. we provide only the highest-quality artificial turf materials approved by FIFA. We can supply anything from basic landscaping turf to the highest quality federation approved turf. The pile height (Blade height) varies based on the sport, ranging from 12mm for hockey to 60mm for Football. Artificial turf infill, which is required to keep the grass blades vertical, varies from a combination of rubber and silica to coiled grass infill depending on your choice of artificial turf.</p>\r\n', 1, '2020-01-04 11:15:13'),
(7, 2, 'PP Tiles', '1578136817544270.png', '', '', '', '', '<p>We provide<strong>  </strong>Environmentally friendly virgin polypropylene <strong>they do </strong>not contain any heavy metal; Anti-ultraviolet. Virtually do not need any maintenance, just need to clear the dust.  They can be 100% recyclable; do not have any smell. .it can be installed directly over the cement, asphalt or any other hard flat surface.</p>\r\n', 1, '2020-01-04 11:17:17'),
(8, 2, 'Children Play area ', '1578136880976942.png', '', '', '', '', '<p>EPDM or Ethylene Propylene Diene Monomer is an organic synthetic elastomer which has many properties equivalent to or better than those of natural virgin rubber, after curing. During the production of the elastomer, several additives are used to enhance colors and their stability. We understand and value your concerns, which is precisely why <strong>Mahira Sports </strong>offerings are more than just flooring beneath your feet. Our products are developed with care and expertise, so that your children will be safe, always. There are three products by Mahira Sports in this category covering Play Top imported flooring, Premium flooring, and budget offering.</p>\r\n', 1, '2020-01-04 11:21:20'),
(9, 1, 'Sports Vinyl', '', '', '', '', '', '', 1, '2020-01-04 11:25:37'),
(10, 1, 'Rubber Flooring', '', '', '', '', '', '', 1, '2020-01-04 11:25:57'),
(11, 1, 'Wooden Flooring', '', '', '', '', '', '', 1, '2020-01-04 11:26:12'),
(12, 2, 'Athletic Track Flooring', '', '', '', '', '', '', 1, '2020-01-04 11:27:16'),
(13, 2, 'PU Flooring', '', '', '', '', '', '', 1, '2020-01-04 11:27:51'),
(14, 2, 'Basketball Court', '', '', '', '', '', '', 1, '2020-01-04 11:28:47'),
(15, 2, 'Squash Court', '', '', '', '', '', '', 1, '2020-01-04 11:29:00'),
(16, 2, 'Tennis Court', '', '', '', '', '', '', 1, '2020-01-04 11:29:19'),
(17, 3, 'Vinyl and Rubber Floors', '', '', '', '', '', '', 1, '2020-01-04 11:30:06'),
(18, 3, 'Indoor Sports Infra', '', '', '', '', '', '', 1, '2020-01-04 11:30:34'),
(19, 3, 'Outdoor Sports Infra', '', '', '', '', '', '', 1, '2020-01-04 11:30:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subtype`
--

CREATE TABLE `tbl_subtype` (
  `subtypeid` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `subtype` varchar(250) NOT NULL,
  `status` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subtype`
--

INSERT INTO `tbl_subtype` (`subtypeid`, `type_id`, `subtype`, `status`, `create_date`) VALUES
(1, 1, 'Multi-purpose', 1, '2020-01-02 11:42:46'),
(2, 1, 'Badminton ', 1, '2020-01-02 11:42:59'),
(3, 1, 'Gym', 1, '2020-01-02 11:43:10'),
(4, 1, 'School', 1, '2020-01-02 11:43:18'),
(5, 2, 'Playground', 1, '2020-01-02 11:44:47'),
(6, 2, 'Tennis ', 1, '2020-01-02 11:45:04'),
(7, 2, 'Football/cricket', 1, '2020-01-02 11:45:12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type`
--

CREATE TABLE `tbl_type` (
  `typeid` int(11) NOT NULL,
  `type_name` varchar(250) NOT NULL,
  `status` int(11) NOT NULL,
  `Create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_type`
--

INSERT INTO `tbl_type` (`typeid`, `type_name`, `status`, `Create_date`) VALUES
(1, 'Indoor Site Images ', 1, '2020-01-02 11:28:31'),
(2, 'Outdoor Site Images ', 1, '2020-01-02 11:30:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_aboutus`
--
ALTER TABLE `tbl_aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_careers`
--
ALTER TABLE `tbl_careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_clients`
--
ALTER TABLE `tbl_clients`
  ADD PRIMARY KEY (`clients_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_enquiry`
--
ALTER TABLE `tbl_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_featured_products`
--
ALTER TABLE `tbl_featured_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_maintenance`
--
ALTER TABLE `tbl_maintenance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sociallink`
--
ALTER TABLE `tbl_sociallink`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  ADD PRIMARY KEY (`subid`);

--
-- Indexes for table `tbl_subtype`
--
ALTER TABLE `tbl_subtype`
  ADD PRIMARY KEY (`subtypeid`);

--
-- Indexes for table `tbl_type`
--
ALTER TABLE `tbl_type`
  ADD PRIMARY KEY (`typeid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_aboutus`
--
ALTER TABLE `tbl_aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_careers`
--
ALTER TABLE `tbl_careers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_clients`
--
ALTER TABLE `tbl_clients`
  MODIFY `clients_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_enquiry`
--
ALTER TABLE `tbl_enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_featured_products`
--
ALTER TABLE `tbl_featured_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_maintenance`
--
ALTER TABLE `tbl_maintenance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_sociallink`
--
ALTER TABLE `tbl_sociallink`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  MODIFY `subid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_subtype`
--
ALTER TABLE `tbl_subtype`
  MODIFY `subtypeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `typeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
