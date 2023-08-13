
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `sed_all_users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_role` tinyint(4) NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;



INSERT INTO `sed_all_users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_role`, `created_time`, `updated_time`) VALUES
(1, 'admin', 'admin@gmail.com', '76c6500023d898c9941090261d1d439d', 1, '2023-08-01 14:44:44', '2023-08-01 14:44:44');




CREATE TABLE `sed_commodity` (
  `commodity_id` int(11) NOT NULL,
  `commodity_title` varchar(255) NOT NULL,
  `commodity_summary` text NOT NULL,
  `commodity_description` text NOT NULL,
  `commodity_image` varchar(255) NOT NULL,
  `commodity_price` int(11) NOT NULL,
  `commodity_quantity` int(11) NOT NULL,
  `commodity_feature` tinyint(4) NOT NULL,
  `commodity_category` int(11) NOT NULL,
  `commodity_industry_brand` int(11) NOT NULL,
  `commodity_author` int(11) NOT NULL,
  `commodity_view` int(11) NOT NULL DEFAULT 0,
  `published_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `upload_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


INSERT INTO `sed_commodity` (`commodity_id`, `commodity_title`, `commodity_summary`, `commodity_description`, `commodity_image`, `commodity_price`, `commodity_quantity`, `commodity_feature`, `commodity_category`, `commodity_industry_brand`, `commodity_author`, `commodity_view`, `published_date`, `upload_status`) VALUES
(10, 'Iphone 14', '                                                                                                                                                Iphone 14 6.1\" 128GB (Black)                                ', '                                    <font size=\"2\">Iphone 14 is a 6.1 inch display smartphone with all day a battery life and great camera to capture stunning photos in low light and bright light with new dual camera system.</font><div style=\"\"><p style=\"box-sizing: border-box; line-height: var(--typography-p-lineHeight__1yqyf5p1w); font-family: Roboto, arial, sans-serif; background-color: rgb(255, 255, 255);\"></p><ul><li><font size=\"2\">6.7-inch Super Retina XDR display<font style=\"box-sizing: border-box;\">1</font></font></li><li><font size=\"2\">Advanced camera system for better photos in any light</font></li><li><font size=\"2\">Cinematic mode now in 4K Dolby Vision up to 30 fps</font></li><li><font size=\"2\">Action mode for smooth, steady, hand-held videos</font></li><li><font size=\"2\">A vital safety feature — Crash Detection</font></li><li><font size=\"2\">All-day battery life and up to 26 hours of video playback</font></li><li><font size=\"2\">A15 Bionic chip with 5-core GPU for lightning-fast performance</font></li></ul><p></p></div>                                ', 'Iphone141.png', 1399, 14, 1, 3, 3, 1, 0, '2023-08-01 11:37:58', 1),
(11, 'Samsung Channel Soundbar with wireless Subwoofer', '<span style=\"font-family: Roboto, arial, sans-serif; background-color: rgb(255, 255, 255);\"><font size=\"2\">The HT-S400 has 330W of room-filling sound, a wireless subwoofer for flexible installation and easy TV connectivity thanks to HDMI (ARC), or even wireless TV connectivity or integrated UI when used with select BRAVIA TVs.</font></span>', '<p style=\"box-sizing: border-box; line-height: var(--typography-p-lineHeight__1yqyf5p1w); font-family: Roboto, arial, sans-serif; background-color: rgb(255, 255, 255);\"><ul style=\"\"><li style=\"\"><font size=\"2\">330W, 2.1ch Sound bar with powerful wireless subwoofer</font></li><li style=\"\"><font size=\"2\">Compact, easy to use remote control</font></li><li style=\"\"><font size=\"2\">Integrated OLED display simplifies operation</font></li><li style=\"\"><font size=\"2\">S-Force PRO Front Surround; enveloping sound from only 2 front speakers</font></li><li style=\"\"><font size=\"2\">X-Balanced drivers with separated notch edge deliver distortion-free sound</font></li><li style=\"\"><font size=\"2\">1 x HDMI (ARC) connection, for simple set-up and easy 1-remote operation</font></li><li style=\"\"><font size=\"2\">1 x Optical input, with supplied cable, for easy connectivity with any TV</font></li><li style=\"\"><font size=\"2\">Bluetooth audio connectivity with select BRAVIA televisions*</font></li><li style=\"\"><font size=\"2\">Bluetooth connectivity for simple music playback from a Smartphone</font></li></ul></p>', 'Soundbar_Sony.png', 449, 10, 0, 7, 2, 1, 0, '2023-08-03 11:57:03', 1),
(12, 'Air Jordan Lows', '                                    <span style=\"color: rgb(17, 17, 17); font-family: \" helvetica=\"\" now=\"\" text\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);\"=\"\"><font size=\"2\">Inspired by the original that debuted in 1985, the Air Jordan 1 Low offers a clean, classic look that\'s familiar yet always fresh. With an iconic design that pairs perfectly with any \'fit, these kicks ensure you\'ll always be on point.</font></span>                                ', '                                    <ul style=\"\"><li style=\"\"><span style=\"font-family: inherit; font-style: inherit; font-variant-ligatures: inherit; font-variant-caps: inherit; font-weight: inherit; background-color: rgb(255, 255, 255); color: rgb(17, 17, 17);\"><font size=\"2\">Encapsulated Air-Sole unit provides lightweight cushioning</font></span></li><li style=\"\"><span style=\"font-family: inherit; font-style: inherit; font-variant-ligatures: inherit; font-variant-caps: inherit; font-weight: inherit; background-color: rgb(255, 255, 255); color: rgb(17, 17, 17);\"><font size=\"2\">Genuine leather in the upper offers durability and a premium look</font></span></li><li style=\"\"><span style=\"font-family: inherit; font-style: inherit; font-variant-ligatures: inherit; font-variant-caps: inherit; font-weight: inherit; background-color: rgb(255, 255, 255); color: rgb(17, 17, 17);\"><font size=\"2\">Solid rubber outsole enhances traction on a variety of surfaces</font></span></li></ul>                                ', 'Nike.png', 160, 5, 1, 6, 7, 1, 0, '2023-08-03 12:02:38', 1),
(13, 'Unisex Lacoste Branded Jacket', '                                    <span style=\"color: rgb(41, 41, 41); font-family: Archivo, Arial, Helvetica, sans-serif; background-color: rgb(255, 255, 255);\"><font size=\"2\">Dare to be bold in this Lacoste varsity jacket. Designed for your wellbeing. And the planet\'s.</font></span>                                ', '                                    <ul style=\"\"><li style=\"\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(41, 41, 41); font-family: Archivo, Arial, Helvetica, sans-serif;\"><font size=\"2\">Pocket on sleeve</font></span></li><li style=\"\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(41, 41, 41); font-family: Archivo, Arial, Helvetica, sans-serif;\"><font size=\"2\">Quilted lining</font></span></li><li style=\"\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(41, 41, 41); font-family: Archivo, Arial, Helvetica, sans-serif;\"><font size=\"2\">Crocodile branding on back</font></span></li><li style=\"\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(41, 41, 41); font-family: Archivo, Arial, Helvetica, sans-serif;\"><font size=\"2\">Embroidered crocodile on chest</font></span></li><li style=\"\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(41, 41, 41); font-family: Archivo, Arial, Helvetica, sans-serif;\"><font size=\"2\">Organic wool</font></span></li></ul>                                ', 'Lacoste.png', 250, 10, 1, 5, 9, 1, 0, '2023-08-03 12:06:09', 1),
(14, 'Pigeon Healthifry Digital Air Fryer', '<span style=\"color: rgb(15, 17, 17); font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; background-color: rgb(255, 255, 255);\"><font size=\"2\">Air Fryer with Appointment Function used to make fried foods such as meat, pastries, and potato chips.</font></span>', '<ul style=\"\"><li style=\"\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(15, 17, 17); font-family: &quot;Amazon Ember&quot;, Arial, sans-serif;\"><font size=\"2\">AIR FRYER CAPACITY: 4.2 litre capacity is enough to enjoy your favorite French fries, samosas, and nuggets without having to worry</font></span></li><li style=\"\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(15, 17, 17); font-family: &quot;Amazon Ember&quot;, Arial, sans-serif;\"><font size=\"2\">HEALTHIER FRIED FOOD: Pigeon Healthifry Digital Air Fryer is a tool that is used to cook food with 85% less oil which means with only one spoon of oil, you can cook your favorite food items. 360° HIGH SPEED AIR CIRCULARION TECHNOLOGY: Air fryers work by circulating hot air around a food item to create the same crispiness as traditional fried foods.</font></span></li></ul>', 'AirFryer.png', 250, 12, 1, 8, 11, 1, 0, '2023-08-03 12:15:18', 1),
(15, 'Sleepyhead Bae - 3 Seater Sofa', 'Ultimate comfort 3 seater sofa from D-DECOR', '<ul style=\"\"><li style=\"\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(15, 17, 17); font-family: &quot;Amazon Ember&quot;, Arial, sans-serif;\"><font size=\"2\">3 Seater | WARRANTY: 3 Year Manufacturing Warranty&nbsp;</font></span></li><li style=\"\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(15, 17, 17); font-family: &quot;Amazon Ember&quot;, Arial, sans-serif;\"><font size=\"2\">FEATURES : Durable</font></span></li><li style=\"\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(15, 17, 17); font-family: &quot;Amazon Ember&quot;, Arial, sans-serif;\"><font size=\"2\">Termite Resistant&nbsp;</font></span></li><li style=\"\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(15, 17, 17); font-family: &quot;Amazon Ember&quot;, Arial, sans-serif;\"><font size=\"2\">High-Density Foam&nbsp;</font></span></li><li style=\"\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(15, 17, 17); font-family: &quot;Amazon Ember&quot;, Arial, sans-serif;\"><font size=\"2\">ASSEMBLY: Fulfilled by Brand with-in 48 Hours from the Date of Delivery for Metros and with-in 4 days from the Date of Delivery for Non-Metros.</font></span></li></ul>', 'Sofa.png', 1000, 5, 1, 8, 12, 1, 0, '2023-08-03 12:19:35', 1),
(16, 'MacBook Air 15 inch', '                                    <font size=\"2\">The&nbsp;new 15 inch MacBook&nbsp;Air&nbsp;makes room for more of what you love with a spacious Liquid&nbsp;Retina&nbsp;display.</font>                                ', '                                    <ul style=\"\"><li style=\"\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(29, 29, 31); font-family: \" sf=\"\" pro=\"\" text\",=\"\" \"sf=\"\" icons\",=\"\" \"aos=\"\" \"helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" letter-spacing:=\"\" -0.016em;\"=\"\"><font size=\"2\">6-core Neural&nbsp;Engine</font></span></li><li style=\"\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(29, 29, 31); font-family: \" sf=\"\" pro=\"\" text\",=\"\" \"sf=\"\" icons\",=\"\" \"aos=\"\" \"helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" letter-spacing:=\"\" -0.016em;\"=\"\"><font size=\"2\">15.3-inch Liquid Retina display with True&nbsp;Tone³</font></span></li><li style=\"\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(29, 29, 31); font-family: \" sf=\"\" pro=\"\" text\",=\"\" \"sf=\"\" icons\",=\"\" \"aos=\"\" \"helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" letter-spacing:=\"\" -0.016em;\"=\"\"><font size=\"2\">1080p FaceTime HD&nbsp;camera</font></span></li><li style=\"\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(29, 29, 31); font-family: \" sf=\"\" pro=\"\" text\",=\"\" \"sf=\"\" icons\",=\"\" \"aos=\"\" \"helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" letter-spacing:=\"\" -0.016em;\"=\"\"><font size=\"2\">MagSafe 3 charging port</font></span></li><li style=\"\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(29, 29, 31); font-family: \" sf=\"\" pro=\"\" text\",=\"\" \"sf=\"\" icons\",=\"\" \"aos=\"\" \"helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" letter-spacing:=\"\" -0.016em;\"=\"\"><font size=\"2\">Two Thunderbolt/USB&nbsp;4 ports</font></span></li><li style=\"\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(29, 29, 31); font-family: \" sf=\"\" pro=\"\" text\",=\"\" \"sf=\"\" icons\",=\"\" \"aos=\"\" \"helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" letter-spacing:=\"\" -0.016em;\"=\"\"><font size=\"2\">Magic&nbsp;Keyboard with Touch&nbsp;ID</font></span></li><li style=\"\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(29, 29, 31); font-family: \" sf=\"\" pro=\"\" text\",=\"\" \"sf=\"\" icons\",=\"\" \"aos=\"\" \"helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" letter-spacing:=\"\" -0.016em;\"=\"\"><font size=\"2\">Force&nbsp;Touch trackpad</font></span></li><li style=\"\"><span style=\"background-color: rgb(255, 255, 255); color: rgb(29, 29, 31); font-family: \" sf=\"\" pro=\"\" text\",=\"\" \"sf=\"\" icons\",=\"\" \"aos=\"\" \"helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" letter-spacing:=\"\" -0.016em;\"=\"\"><font size=\"2\">35W Dual USB-C Port Power Adapter</font></span></li></ul><div class=\"rc-productbundle-pricecontainer\" data-messages-part=\"MQKX3X/A\" data-autom=\"mac-price-summary-15inch-best\" data-equalize-sec=\"price\" style=\"font-size: 24px; margin-top: 0.8em; line-height: 1.16667; font-weight: 600; letter-spacing: 0.009em; font-family: \" sf=\"\" pro=\"\" display\",=\"\" \"sf=\"\" icons\",=\"\" \"aos=\"\" \"helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" color:=\"\" rgb(29,=\"\" 29,=\"\" 31);=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" min-height:=\"\" 54px;\"=\"\"><div class=\"rc-prices typography-label rc-prices-default\" style=\"line-height: 1.16667; letter-spacing: 0.009em;\"><div class=\"rc-price\"></div></div></div>                                ', 'Screenshot_2023-08-03_at_10_13_45_pm1.png', 1799, 12, 1, 2, 3, 1, 0, '2023-08-03 12:50:39', 1),
(17, 'Airpods 3rd Generation', '<p class=\"MsoNormal\" style=\"margin: 0cm; font-family: Calibri, sans-serif;\"><font size=\"2\">AirPods (3rd generation) with MagSafe Charging Case</font><span style=\"font-size: 12pt;\"><o:p></o:p></span></p>', '<ul style=\"\"><li style=\"\"><span style=\"font-family: Calibri, sans-serif;\"><font size=\"2\">AirPods (3rd generation) with MagSafe Charging Case.</font></span></li><li style=\"\"><span style=\"font-family: Calibri, sans-serif;\"><font size=\"2\">Sweat and water resistant</font></span></li><li style=\"\"><span style=\"font-family: Calibri, sans-serif;\"><font size=\"2\">Active noise cancellation and adaptive transparency</font></span></li></ul>', 'Airpods.png', 399, 20, 1, 7, 3, 1, 0, '2023-08-03 12:53:26', 1),
(18, 'Iphone 13', 'Iphone 13 6.1\" 128GB (Black)', '<font size=\"2\">Iphone 13 is a 6.1 inch display smartphone with all day a battery life and great camera to capture stunning photos in low light and bright light with new dual camera system.</font><div><p style=\"box-sizing: border-box; line-height: var(--typography-p-lineHeight__1yqyf5p1w); font-family: Roboto, arial, sans-serif; background-color: rgb(255, 255, 255);\"></p><ul><li><font size=\"2\">6.1-inch Super Retina XDR display<font style=\"box-sizing: border-box;\">1</font></font></li><li><font size=\"2\">Advanced camera system for better photos in any light</font></li><li><font size=\"2\">Cinematic mode now in 4K Dolby Vision up to 30 fps</font></li><li><font size=\"2\">Action mode for smooth, steady, hand-held videos</font></li><li><font size=\"2\">A vital safety feature — Crash Detection</font></li><li><font size=\"2\">All-day battery life and up to 26 hours of video playback</font></li><li><font size=\"2\">A15 Bionic chip with 5-core GPU for lightning-fast performance</font></li></ul></div>', 'Iphone141.png', 999, 5, 1, 3, 3, 1, 0, '2023-08-06 04:50:24', 1);



CREATE TABLE `sed_current_customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_password` varchar(32) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_city` varchar(50) NOT NULL,
  `customer_zipcode` varchar(20) NOT NULL,
  `customer_phone` varchar(20) NOT NULL,
  `customer_country` varchar(100) NOT NULL,
  `customer_active` tinyint(4) NOT NULL COMMENT 'Active=1,Unactive=0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;



INSERT INTO `sed_current_customers` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_address`, `customer_city`, `customer_zipcode`, `customer_phone`, `customer_country`, `customer_active`) VALUES
(9, 'Nihal', 'Nih@gmail.com', '76c6500023d898c9941090261d1d439d', '105 Rundle Street', 'Adelaide', '5000', '0456789012', 'Australia', 1),
(10, 'Xiaolan wzt', 'Alicewzt@gmail.com', '76c6500023d898c9941090261d1d439d', '151 city road', 'Melbourne', '3006', '0456712345', 'Australia', 0),
(11, 'Pranjal Geng', 'pgone@gmail.com', '76c6500023d898c9941090261d1d439d', '888 glenelg jetty', 'Adelaide', '5023', '0450987234', 'Australia', 1);



CREATE TABLE `sed_division` (
  `id` int(11) NOT NULL,
  `division_name` varchar(100) NOT NULL,
  `division_description` text NOT NULL,
  `upload_status` tinyint(4) NOT NULL COMMENT 'Published=1,Unpublished=0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


INSERT INTO `sed_division` (`id`, `division_name`, `division_description`, `upload_status`) VALUES
(1, 'Computer', '                                    Computer Products', 1),
(2, 'Laptop', '                                    Laptop Products', 1),
(3, 'Smartphone', '                                    Smartphone Products', 1),
(5, 'Clothing', '                                    Clothing Products', 1),
(6, 'Shoes', 'Footwear Products                                ', 1),
(7, 'Accessories', '                                    Accessorie Products', 1),
(8, 'Home and Living', 'Lifestyle Products', 1);



CREATE TABLE `sed_frame` (
  `option_id` int(11) NOT NULL,
  `site_logo` varchar(100) NOT NULL,
  `site_favicon` varchar(100) NOT NULL,
  `site_copyright` varchar(255) NOT NULL,
  `site_contact_num1` varchar(100) NOT NULL,
  `site_contact_num2` varchar(100) NOT NULL,
  `site_facebook_link` varchar(100) NOT NULL,
  `site_twitter_link` varchar(100) NOT NULL,
  `site_google_plus_link` varchar(100) NOT NULL,
  `site_email_link` varchar(100) NOT NULL,
  `contact_title` varchar(255) NOT NULL,
  `contact_subtitle` varchar(255) NOT NULL,
  `contact_description` text NOT NULL,
  `company_location` varchar(255) NOT NULL,
  `company_number` varchar(100) NOT NULL,
  `company_email` varchar(100) NOT NULL,
  `company_facebook` varchar(100) NOT NULL,
  `company_twitter` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;



INSERT INTO `sed_frame` (`option_id`, `site_logo`, `site_favicon`, `site_copyright`, `site_contact_num1`, `site_contact_num2`, `site_facebook_link`, `site_twitter_link`, `site_google_plus_link`, `site_email_link`, `contact_title`, `contact_subtitle`, `contact_description`, `company_location`, `company_number`, `company_email`, `company_facebook`, `company_twitter`) VALUES
(1, 'NewLogo1.png', 'NewLogo2.png', 'Developed By Secure Programming Team 3', '0000000000', '0000000000', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.plus.google.com', 'https://www.gmail.com', 'Please leave your review', 'Its really important to us', ' Contact Description', '565 Bleckers Street', '7865454100', 'https://www.gmail.com', 'https://www.facebook.com', 'https://www.twitter.com');

-- --------------------------------------------------------

--
-- Table structure for table `sed_industry_brand`
--

CREATE TABLE `sed_industry_brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_description` text NOT NULL,
  `upload_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sed_industry_brand`
--

INSERT INTO `sed_industry_brand` (`brand_id`, `brand_name`, `brand_description`, `upload_status`) VALUES
(2, 'Samsung', ' Samsung Products', 1),
(3, 'Apple', '  Apple Products  ', 1),
(4, 'H&M', ' H&amp;M Products', 1),
(5, 'Adidas', '  Adidas Products', 1),
(7, 'Nike', '  Nike Products   ', 1),
(8, 'Zara', 'Clothing and Accessories', 1),
(9, 'Lacoste', '   Clothing and Footwear Products ', 1),
(10, 'Roush', 'Footwear&nbsp; Products', 1),
(11, 'Pigeon', 'Home and Living Products', 1),
(12, 'D-DECOR', 'Furniture Products', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sed_manage_order`
--

CREATE TABLE `sed_manage_order` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_total` float NOT NULL,
  `actions` varchar(50) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sed_manage_order`
--

INSERT INTO `sed_manage_order` (`order_id`, `customer_id`, `shipping_id`, `payment_id`, `order_total`, `actions`) VALUES
(10, 9, 11, 16, 178250, 'Pending'),
(11, 10, 12, 17, 23862.5, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `sed_manage_order_details`
--

CREATE TABLE `sed_manage_order_details` (
  `order_details_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `commodity_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `commodity_price` float NOT NULL,
  `commodity_sales_quantity` int(11) NOT NULL,
  `commodity_image` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sed_manage_order_details`
--

INSERT INTO `sed_manage_order_details` (`order_details_id`, `order_id`, `commodity_id`, `product_name`, `commodity_price`, `commodity_sales_quantity`, `commodity_image`) VALUES
(1, 2, 5, 'Product Five', 10000, 1, NULL),
(2, 3, 5, 'Product Five', 10000, 4, NULL),
(3, 3, 3, 'Product Three', 3500, 3, NULL),
(4, 3, 1, 'Product One', 20000, 1, NULL),
(5, 8, 4, 'Product Four', 350000, 1, 'pic3.jpg'),
(6, 9, 4, 'Product Four', 350000, 1, 'pic3.jpg'),
(7, 10, 6, 'Iphone 14', 1399, 1, 'Iphone14.png'),
(8, 11, 2, 'Face Covers 3-Pack', 1250, 1, 'feature-pic2.jpg'),
(9, 11, 1, 'Ultraboost DNA Black Python Shoes', 19500, 1, 'feature-pic1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sed_shippment`
--

CREATE TABLE `sed_shippment` (
  `shipping_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_name` varchar(50) NOT NULL,
  `shipping_email` varchar(100) NOT NULL,
  `shipping_address` text NOT NULL,
  `shipping_city` varchar(100) NOT NULL,
  `shipping_country` varchar(50) NOT NULL,
  `shipping_phone` varchar(20) NOT NULL,
  `shipping_zipcode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sed_shippment`
--

INSERT INTO `sed_shippment` (`shipping_id`, `customer_id`, `shipping_name`, `shipping_email`, `shipping_address`, `shipping_city`, `shipping_country`, `shipping_phone`, `shipping_zipcode`) VALUES
(11, 0, 'Nihal', 'Nih@gmail.com', '105 Rundle Street', 'Adelaide', 'Australia', '0456789012', '5000'),
(12, 0, 'Xiaolan wzt', 'Alicewzt@gmail.com', '151 city road', 'Melbourne', 'Australia', '7458000025', '3006');

-- --------------------------------------------------------

--
-- Table structure for table `sed_transaction_data`
--

CREATE TABLE `sed_transaction_data` (
  `payment_id` int(11) NOT NULL,
  `payment_type` varchar(50) NOT NULL,
  `actions` varchar(50) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sed_transaction_data`
--

INSERT INTO `sed_transaction_data` (`payment_id`, `payment_type`, `actions`) VALUES
(1, 'cashon', 'pending'),
(2, 'ssl', 'pending'),
(3, 'cashon', 'pending'),
(4, 'cashon', 'pending'),
(5, 'cashon', 'pending'),
(6, 'cashon', 'pending'),
(7, 'cashon', 'pending'),
(8, 'cashon', 'pending'),
(9, 'cashon', 'pending'),
(10, 'cashon', 'pending'),
(11, 'cashon', 'pending'),
(12, 'cashon', 'pending'),
(13, 'cashon', 'pending'),
(14, 'cashon', 'pending'),
(15, 'cashon', 'pending'),
(16, 'cashon', 'pending'),
(17, 'cashon', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `slider_id` int(11) NOT NULL,
  `slider_title` varchar(255) NOT NULL,
  `slider_image` varchar(255) NOT NULL,
  `slider_link` varchar(255) NOT NULL,
  `upload_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`role_id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'Author'),
(3, 'Editor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sed_all_users`
--
ALTER TABLE `sed_all_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `sed_commodity`
--
ALTER TABLE `sed_commodity`
  ADD PRIMARY KEY (`commodity_id`);

--
-- Indexes for table `sed_current_customers`
--
ALTER TABLE `sed_current_customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `sed_division`
--
ALTER TABLE `sed_division`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sed_frame`
--
ALTER TABLE `sed_frame`
  ADD PRIMARY KEY (`option_id`);

--
-- Indexes for table `sed_industry_brand`
--
ALTER TABLE `sed_industry_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `sed_manage_order`
--
ALTER TABLE `sed_manage_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `sed_manage_order_details`
--
ALTER TABLE `sed_manage_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `sed_shippment`
--
ALTER TABLE `sed_shippment`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `sed_transaction_data`
--
ALTER TABLE `sed_transaction_data`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sed_all_users`
--
ALTER TABLE `sed_all_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sed_commodity`
--
ALTER TABLE `sed_commodity`
  MODIFY `commodity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sed_current_customers`
--
ALTER TABLE `sed_current_customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sed_division`
--
ALTER TABLE `sed_division`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sed_frame`
--
ALTER TABLE `sed_frame`
  MODIFY `option_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sed_industry_brand`
--
ALTER TABLE `sed_industry_brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sed_manage_order`
--
ALTER TABLE `sed_manage_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sed_manage_order_details`
--
ALTER TABLE `sed_manage_order_details`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sed_shippment`
--
ALTER TABLE `sed_shippment`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sed_transaction_data`
--
ALTER TABLE `sed_transaction_data`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

