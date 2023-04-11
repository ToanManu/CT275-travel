SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `travelvietnam`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `id_user` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_post` int(11) NOT NULL,
  `cmt` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `id_user`, `id_post`, `cmt`) VALUES
(59, 'toanB1910004@gmail.com', 13, '<p>gfgfd</p>'),
(81, 'admin', 14, '<p>dgf</p>'),
(82, 'admin', 14, '<p>gfdgfd</p>'),
(83, 'admin', 14, '<p>Test nhe cai cmt</p><p>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment_travelviewing`
--

CREATE TABLE `comment_travelviewing` (
  `id` int(11) NOT NULL,
  `id_user` varchar(1000) COLLATE utf32_unicode_ci NOT NULL,
  `id_post` int(11) NOT NULL,
  `cmt` text COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment_travelviewing`
--

INSERT INTO `comment_travelviewing` (`id`, `id_user`, `id_post`, `cmt`) VALUES
(1, 'admin', 4, 'test cmt'),
(2, 'admin', 4, '<p>Thu cmt</p>'),
(3, 'admin', 4, '<p>haha</p>'),
(4, 'admin', 3, '<p>hfh</p>'),
(5, 'admin', 3, '<p>dhgfhfjg</p>'),
(6, 'admin', 3, '<p>dhgfhfjg</p>'),
(7, 'admin', 3, '<p>dhgfhfjg</p>'),
(8, 'admin', 4, '<p>dasdasds</p>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `name` varchar(2000) COLLATE utf32_unicode_ci NOT NULL,
  `avatar` varchar(10000) COLLATE utf32_unicode_ci NOT NULL,
  `posts` text COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `name`, `avatar`, `posts`) VALUES
(13, '10 Best Vietnamese Food', './upload/image/gt7.jpg', '<p>Vietnamese food is known to be both healthy and robust in flavour, thanks its generous combination of fresh herbs and greens, paired with rice, noodles, seafood, pork and beef. While many cities such as Hanoi and Ho Chi Minh City offer plenty of fine-dining venues and five-star hotel restaurants decked out in extravagant settings, some of the best (and most authentic) Vietnamese delicacies are actually found at roadside eateries, vibrant street markets, and humble-looking restaurants.<br />\r\n&nbsp;<br />\r\nA typical meal includes rice or noodles, a meat or seafood dish, a vegetable dish, soup and nuoc cham (fermented fish sauce) for dipping, each of which can easily customised according to your preference. Here&rsquo;s a helpful guide on what to eat in Vietnam, most of which can be enjoyed just about any time of the day. While most are familiar with pho or spring rolls, there&rsquo;s a wide range of Vietnamese dishes only available in certain regions so be sure to try them out during your visit.</p>\r\n\r\n<p>Most Booked<br />\r\n<strong>HOTELS</strong></p>\r\n\r\n<p>Rating</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p><a href=\"javascript:void(0);\" rel=\"nofollow\" target=\"\">Brilliant Hotel</a>4.4/ 5</p>\r\n	</li>\r\n	<li>\r\n	<p><a href=\"javascript:void(0);\" rel=\"nofollow\" target=\"\">Hotel Nikko Saigon</a>4.6/ 5</p>\r\n	</li>\r\n	<li>\r\n	<p><a href=\"javascript:void(0);\" rel=\"nofollow\" target=\"\">Hanoi La Siesta Hotel Trendy</a>4.8/ 5</p>\r\n	</li>\r\n	<li>\r\n	<p><a href=\"javascript:void(0);\" rel=\"nofollow\" target=\"\">Hanoi Royal Palace Hotel 2</a>4.4/ 5</p>\r\n	</li>\r\n	<li>\r\n	<p><a href=\"javascript:void(0);\" rel=\"nofollow\" target=\"\">EdenStar Saigon Hotel &amp; Spa</a>4.2/ 5</p>\r\n	</li>\r\n	<li>\r\n	<p><a href=\"javascript:void(0);\" rel=\"nofollow\" target=\"\">Bay Hotel Ho Chi Minh</a>4.1/ 5</p>\r\n	</li>\r\n	<li>\r\n	<p><a href=\"javascript:void(0);\" rel=\"nofollow\" target=\"\">Helios Legend Hotel</a>4.5/ 5</p>\r\n	</li>\r\n	<li>\r\n	<p><a href=\"javascript:void(0);\" rel=\"nofollow\" target=\"\">Caravelle Saigon</a>4.5/ 5</p>\r\n	</li>\r\n	<li>\r\n	<p><a href=\"javascript:void(0);\" rel=\"nofollow\" target=\"\">Diamond Sea Hotel</a>4.3/ 5</p>\r\n	</li>\r\n	<li>\r\n	<p><a href=\"javascript:void(0);\" rel=\"nofollow\" target=\"\">Grandvrio City Danang By Route Inn Group</a>4.5/ 5</p>\r\n	</li>\r\n</ol>\r\n\r\n<p>Most Booked<br />\r\n<strong>TOURS</strong></p>\r\n\r\n<ol>\r\n	<li><a href=\"javascript:void(0);\" rel=\"nofollow\" target=\"\">Small-Group Halong Bay Day Cruise</a></li>\r\n	<li><a href=\"javascript:void(0);\" rel=\"nofollow\" target=\"\">Small-Group Saigon Night Tour &amp; Dinner Cruise</a></li>\r\n	<li><a href=\"javascript:void(0);\" rel=\"nofollow\" target=\"\">Local Flavors Food Walking Tour</a></li>\r\n	<li><a href=\"javascript:void(0);\" rel=\"nofollow\" target=\"\">Small-Group Full-Day Mekong Delta Cruise</a></li>\r\n	<li><a href=\"javascript:void(0);\" rel=\"nofollow\" target=\"\">Small-Group Half-Day Tour of Cu Chi Tunnels</a></li>\r\n	<li><a href=\"javascript:void(0);\" rel=\"nofollow\" target=\"\">Half-Day Cu Chi Tunnels Tour</a></li>\r\n	<li><a href=\"javascript:void(0);\" rel=\"nofollow\" target=\"\">Mekong Delta, My Tho &amp; Ben Tre Tour</a></li>\r\n	<li><a href=\"javascript:void(0);\" rel=\"nofollow\" target=\"\">Halong Bay Full-Day Boat Cruise</a></li>\r\n	<li><a href=\"javascript:void(0);\" rel=\"nofollow\" target=\"\">Cu Chi Tunnels Excursion</a></li>\r\n	<li><a href=\"javascript:void(0);\" rel=\"nofollow\" target=\"\">Small-Group Half-Day Ho Chi Minh City Tour</a></li>\r\n</ol>\r\n\r\n<p>1</p>\r\n\r\n<h2>Pho</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Pho is essentially Vietnam&rsquo;s signature dish, comprising rice noodles in a flavourful soup with meat and various greens, plus a side of nuoc cham (fermented fish) or chilli sauce. A basic bowl contains tai (beef slices), bo vien (beef meatballs) or nam (beef flank), topped with bean sprouts, lime wedges, and fresh herbs such as basil, mint, cilantro, and onions. Depending on the restaurant or roadside stall, you can also opt for more exotic ingredients such as gan (beef tendon), sach (thinly-sliced pig stomach), and ve don (flank with cartilage). Typically eaten for breakfast, pho is priced between VND 20,000 and VND 30,000 at a local restaurant or street market in Vietnam.</p>\r\n\r\n<p>2</p>\r\n\r\n<h2>Banh Mi</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Banh mi is a unique French-Vietnamese sandwich that&rsquo;s great for when you&rsquo;re in need of a quick meal. Priced between VND 10,000 and VND 15,000, it consists of a toasted baguette sandwich, pickled vegetables, pate, butter, soy sauce, cilantro, chillies, and hot peppers. Most banh mi sellers also offer a wide range of meat fillings, including heo quay (roasted pork belly), trung op la (fried egg), thit nuong (grilled pork loin), cha ca (fried fish with turmeric and dill), cha lua (boiled sausages), xa xiu (Chinese barbecued pork), and thit ga (poached chicken).</p>\r\n\r\n<p>3</p>\r\n\r\n<h2>Banh Xeo (Crispy Pancake)</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Similar to a crepe or pancake, banh xeo is made of rice flour, coconut milk, and turmeric, which you can fill it with vermicelli noodles, chicken, pork or beef slices, shrimps, sliced onions, beansprouts, and mushrooms. Most roadside stalls, local markets, and restaurants sell a platter of banh xeo for about VND 15,000 to VND 25,000, which usually comes with a side of fresh lettuce or rice papers. Eat like a local by wrapping your banh xeo in mustard leaf, lettuce leaves or rice papers together with nem lui (lemongrass pork skewers), mint leaves, basil, before dipping in fermented peanut sauce.</p>\r\n\r\n<p>4</p>\r\n\r\n<h2>Goi Cuon (Vietnamese Fresh Spring Rolls)</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Goi cuon (Vietnamese fresh spring rolls) consist of thin vermicelli noodles, pork slices, shrimp, basil, and lettuce, all tightly wrapped in translucent banh trang (rice papers). Due to its subtle flavour, goi cuon is usually dipped into ground chillies and a hoisin-based dipping sauce topped with crushed peanuts. This popular snack or appetiser is also a healthier alternative to cha gio, which is a deep-fried egg roll made with a combination of mung bean noodles, minced pork, and various spices.</p>\r\n\r\n<p>5</p>\r\n\r\n<h2>Mi Quang (Vietnamese Turmeric Noodles)</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Mi quang may be available at most restaurants in Vietnam, but it actually originates from Da Nang. Easily distinguished by its yellow-coloured rice noodles, this dish is a hearty mix of bone broth seasoned with fish sauce, black pepper, shallot, and garlic, as well as meaty ingredients such as river shrimp, boiled quails eggs, and roast pork. As with most Vietnamese dishes, mi quang also comes with a variety of herbs, including basil, peanuts, coriander, lettuce, sliced banana flowers, and sesame rice crackers.</p>\r\n\r\n<p>6</p>\r\n\r\n<h2>Bun Thit Nuong (Vermicelli Noodles With Grilled Pork)</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Bun thit nuong comprises thin vermicelli rice noodles, chopped lettuce, sliced cucumber, bean sprouts, pickled daikon, basil, chopped peanuts, and mint, topped with grilled pork shoulder. Unlike most noodle dishes, it doesn&rsquo;t come in a soup or broth, but with a side of nuoc cham sauce for diners to mix into for a flavourful ensemble. While bun thit nuong is quite filling on its own, you can also try another variation called bun thit nuong cha gio, which is topped with sliced cha gio (deep-fried Vietnamese spring rolls).</p>\r\n\r\n<p>7</p>\r\n\r\n<h2>Com Tam (Broken Rice)</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Com tam literally translate to &lsquo;broken rice&rsquo; in Vietnamese, and is traditionally served with fried egg, diced green onions, and a variety of meats. While it&rsquo;s a popular choice for breakfast or lunch, it can be enjoyed any time of the day as it is relatively inexpensive, with street markets and roadside food stalls selling for about VND 20,000 per bowl. Toppings options include suon nuong (barbecued pork chop), bi (shredded pork skin), and cha trung (steamed pork and egg patty). Com tam also comes with a side of pickled vegetables, cucumber slices, and nuoc cham Vietnamese dipping sauce.</p>\r\n\r\n<p>8</p>\r\n\r\n<h2>Banh Cuon (Rolled Cake)</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Also known as rolled cake, banh cuon is great for when you&rsquo;re feeling peckish whilst sightseeing in Vietnam. A combination of ground meat (chicken, shrimp, or pork), minced wood ear mushroom, onions, Vietnamese ham (cha lua), steamed beansprouts, and cucumbers that&rsquo;s wrapped in a steamed rice flour sheet, its overall taste is surprisingly mild despite the savoury ingredients. For added flavour, you can dip the banh cuon into nuoc cham sauce. Due to its popularity amongst travellers, you can easily spot plenty of roadside vendors selling banh cuon close to tourist sights and nightlife districts.</p>\r\n\r\n<p>9</p>\r\n\r\n<h2>Xoi Xeo (Sweet Sticky Rice)</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Xoi xeo is a sweet-savoury Vietnamese snack that&rsquo;s typically topped with green mung bean paste, soy sauce, and dried shallots. For a more substantial meal, many restaurants now offer a variety of ingredients such as pate, boiled chicken, cha lua (Vietnamese ham), marinated pork belly, or preserved eggs. A basic bowl typically costs VND 15,000, while add-ins range between VND 15,000 and VND 30,000. Xoi xeo can also be enjoyed for dessert, which consists of dried coconut shavings, roasted sesame seeds, and crystallised sugar.</p>\r\n\r\n<p>10</p>\r\n\r\n<h2>Ca Kho To (Caramelised Fish in Clay Pot)</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ca kho to is a must try if you&rsquo;re a fan of fish, consisting of a catfish fillet that&rsquo;s braised and served in a clay pot. Mostly available in cities in southern Vietnam, particularly Ho Chi Minh, this dish is prepared by slicing a whole catfish into fillets before caramelising it in a thick gravy made with a combination of soy sauce, fish sauce, sugar, shallots, garlic, and various spices and seasonings. Ca kho to is known for its intense sweet-salty flavour, so this dish is always served with a plate of white rice and fresh greens.</p>\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `travelviewing`
--

CREATE TABLE `travelviewing` (
  `id` int(11) NOT NULL,
  `title` varchar(2000) COLLATE utf32_unicode_ci NOT NULL,
  `iva1` varchar(2000) COLLATE utf32_unicode_ci NOT NULL,
  `iva2` varchar(2000) COLLATE utf32_unicode_ci NOT NULL,
  `iva3` varchar(2000) COLLATE utf32_unicode_ci NOT NULL,
  `content` text COLLATE utf32_unicode_ci NOT NULL,
  `code` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `Dday` date NOT NULL,
  `time` int(11) NOT NULL,
  `startingplace` varchar(1000) COLLATE utf32_unicode_ci NOT NULL,
  `ToLocation` varchar(1000) COLLATE utf32_unicode_ci NOT NULL,
  `Numberofseats` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `travelviewing`
--

INSERT INTO `travelviewing` (`id`, `title`, `iva1`, `iva2`, `iva3`, `content`, `code`, `Dday`, `time`, `startingplace`, `ToLocation`, `Numberofseats`) VALUES
(8, 'Du lịch Đà Nẵng - Ngũ Hành Sơn - Bà Nà - Phố Cổ Hội An dịp Lễ 30/4 từ Sài Gòn', './upload/image/images (2).jpg', './upload/image/lamp_tree_miniature_122836_3412x2000.jpg', './upload/image/34-hinh-anh-thien-nhien-dep-nhat-183-1.jpg', '<p>Điểm nhấn h&agrave;nh tr&igrave;nh</p>\r\n\r\n<table border=\"0\" cellpadding=\"1\" cellspacing=\"1\">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>H&agrave;nh tr&igrave;nh</strong></td>\r\n			<td><strong>Đ&agrave; Nẵng - Ngũ H&agrave;nh Sơn - B&agrave; N&agrave; - Phố Cổ Hội An&nbsp;</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Lịch tr&igrave;nh</strong></td>\r\n			<td><strong>3 ng&agrave;y 2 đ&ecirc;m</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Khởi h&agrave;nh</strong></td>\r\n			<td><strong>29,30/04 ;01/05</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Vận chuyển</strong></td>\r\n			<td><strong>M&aacute;y bay khứ hồi &amp; Xe du lịch đời mới</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><em><strong>Du lịch Đ&agrave; Nẵng - Ngũ H&agrave;nh Sơn - B&agrave; N&agrave; - Phố Cổ Hội An dịp Lễ 30/4 từ S&agrave;i G&ograve;n - Du lịch Đ&agrave; Nẵng&nbsp;</strong>h&agrave;nh tr&igrave;nh kh&aacute;m ph&aacute; th&agrave;nh phố biển sầm uất nhất dải đất Miền Trung nắng gi&oacute;. Tham quan Ngũ H&agrave;nh Sơn phong cảnh hữu t&igrave;nh&nbsp;với&nbsp;hệ thống c&aacute;c&nbsp;hang động,&nbsp;ch&ugrave;a chiền&nbsp;linh thi&ecirc;ng cổ k&iacute;nh. Một ng&agrave;y vi vu tr&ecirc;n cao nguy&ecirc;n B&agrave; N&agrave; để kh&aacute;m ph&aacute; những t&ograve;a l&acirc;u đ&agrave;i mang đường lối kiến tr&uacute;c Ch&acirc;u &Acirc;u. Xu&ocirc;i về Quảng Nam, du kh&aacute;ch sẽ phải ngỡ ng&agrave;ng trước một Hội An y&ecirc;n b&igrave;nh nằm tọa lạc b&ecirc;n&nbsp;s&ocirc;ng Thu Bồn. Phố Cổ Hội An hấp dẫn du kh&aacute;ch bởi những d&atilde;y nh&agrave; m&agrave;u v&agrave;ng, m&aacute;i ng&oacute;i nằm san s&aacute;t nhau, những cửa h&agrave;ng truyền thống&nbsp;v&agrave; ẩm thực phong ph&uacute;. Đặc biệt trong&nbsp;<strong>tour du lịch Đ&agrave; Nẵng&nbsp;</strong>n&agrave;y, du kh&aacute;ch c&ograve;n được trực tiếp&nbsp;xem show diễn&nbsp;K&yacute; Ức Hội An. Đ&acirc;y l&agrave; show diễn duy nhất của Việt Nam&nbsp;được c&ocirc;ng chiếu tại Quảng Trường Thời Đại - New York. V&agrave;&nbsp;được b&aacute;o ch&iacute; quốc tế ghi nhận l&agrave; show diễn thực cảnh&nbsp;đẹp nhất thế giới.</em></p>\r\n\r\n<p><a href=\"javascript:void(0)\" id=\"xemthem\">Xem th&ecirc;m &raquo;</a></p>\r\n\r\n<p>Lịch tr&igrave;nh</p>\r\n\r\n<p>NG&Agrave;Y 1 |&nbsp;TP.HCM &ndash; Đ&Agrave; NẴNG &ndash; HỘI AN (ăn trưa, chiều)</p>\r\n\r\n<p><strong>S&aacute;ng: &nbsp; &nbsp;Qu&yacute; kh&aacute;ch c&oacute; mặt tại ga quốc nội, s&acirc;n bay T&acirc;n Sơn Nhất trước giờ bay &iacute;t nhất ba tiếng.</strong></p>\r\n\r\n<ul>\r\n	<li>Đại diện c&ocirc;ng ty Du Lịch Việt đ&oacute;n v&agrave; hỗ trợ Qu&yacute; Kh&aacute;ch l&agrave;m thủ tục đ&oacute;n chuyến bay đi Đ&agrave; Nẵng.</li>\r\n	<li>Đến s&acirc;n bay, Hướng dẫn vi&ecirc;n đ&oacute;n đo&agrave;n Tham quan Ngũ H&agrave;nh Sơn - được v&iacute; như h&ograve;n non bộ khổng lồ giữa l&ograve;ng th&agrave;nh phố Đ&agrave; Nẵng với Động Huyền Kh&ocirc;ng, Ch&ugrave;a Linh Ứng, Ch&ugrave;a Tam Thai, Vọng Hải Đ&agrave;i, &hellip;mua sắm qu&agrave; lưu niệm tại l&agrave;ng nghề đi&ecirc;u khắc đ&aacute; Non Nước.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Trưa: &nbsp; D&ugrave;ng cơm trưa.</strong></p>\r\n\r\n<ul>\r\n	<li>Đến Hội An, tham quan Phố Cổ Hội An - di sản văn ho&aacute; thế giới với Ch&ugrave;a Cầu Nhật Bản, Hội Qu&aacute;n Ph&uacute;c Kiến, Nh&agrave; Cổ Ph&ugrave;ng Hưng&hellip;</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Chiều: &nbsp;D&ugrave;ng cơm chiều.</strong></p>\r\n\r\n<ul>\r\n	<li>Trải nghiệm Show diễn &ldquo;K&yacute; Ức Hội An&rdquo;, chương tr&igrave;nh văn h&oacute;a nghệ thuật ngo&agrave;i trời độc đ&aacute;o, với sự tổng h&ograve;a tinh tế của &acirc;m nhạc, thơ ca, &aacute;nh s&aacute;ng, nghệ thuật tr&igrave;nh diễn 3D, tạo h&igrave;nh, m&uacute;a&hellip; Vở diễn l&agrave; c&acirc;u chuyện t&aacute;i hiện lại những n&eacute;t văn h&oacute;a đặc trưng của Hội An 400 năm lịch sử với cuộc sống th&ocirc;n qu&ecirc; b&igrave;nh dị, tới những n&eacute;t ho&agrave;ng kim của một thương cảng sầm uất một thời. (chi ph&iacute; tự t&uacute;c)&nbsp;&nbsp; &nbsp;</li>\r\n	<li>Đo&agrave;n trở về, nghỉ đ&ecirc;m tại Đ&agrave; Nẵng. &nbsp; &nbsp; &nbsp;</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>NG&Agrave;Y 2 |&nbsp;Đ&Agrave; NẴNG &ndash; CAO NGUY&Ecirc;N B&Agrave; N&Agrave; (ăn s&aacute;ng, chiều) (ăn trưa tự t&uacute;c) (Xem th&ecirc;m)</p>\r\n\r\n<p>NG&Agrave;Y 3 |&nbsp;Đ&Agrave; NẴNG &ndash; TP.HCM (ăn s&aacute;ng, trưa) (Xem th&ecirc;m)</p>\r\n\r\n<p>Dịch vụ bao gồm v&agrave; kh&ocirc;ng bao gồm</p>\r\n\r\n<p>Giờ bay c&oacute; thể thay đổi theo quy định của h&agrave;ng kh&ocirc;ng. Du Lịch Việt sẽ thay đổi chương tr&igrave;nh cho ph&ugrave; hợp với giờ bay mới nhưng sẽ kh&ocirc;ng chịu tr&aacute;ch nhiệm về c&aacute;c khoản chi ph&iacute; ph&aacute;t sinh.<br />\r\n<strong>Gi&aacute; tour bao gồm:</strong><br />\r\n-&nbsp;&nbsp; &nbsp;V&eacute; m&aacute;y bay khứ hồi TP.HCM &ndash; Đ&Agrave; NẴNG &ndash; TP.HCM (Vietjet Air, VietNamAirlines&hellip;)<br />\r\n-&nbsp;&nbsp; &nbsp;Xe tham quan (xe 16 chỗ, 29 chỗ, 35 chỗ, 45 chỗ) t&ugrave;y theo số lượng kh&aacute;ch thực tế tr&ecirc;n chuyến đi.<br />\r\n-&nbsp;&nbsp; &nbsp;Kh&aacute;ch sạn ti&ecirc;u chuẩn đầy đủ tiện nghi 2 kh&aacute;ch người lớn/ ph&ograve;ng. Nếu lẻ người thứ 3, đ&oacute;ng phụ ph&iacute; ph&ograve;ng đơn hoặc ngủ gh&eacute;p ph&ograve;ng 3 kh&aacute;ch.<br />\r\n+ Kh&aacute;ch sạn 3 sao tại Đ&agrave; Nẵng: H&ugrave;ng Anh,&hellip;hoặc tương đương.<br />\r\n-&nbsp;&nbsp; &nbsp;Ăn uống theo chương tr&igrave;nh:&nbsp;<br />\r\n+ Ăn phụ: 2 bữa buffet s&aacute;ng tại kh&aacute;ch sạn.&nbsp;<br />\r\n+ Ăn ch&iacute;nh: 4 bữa ch&iacute;nh ti&ecirc;u chuẩn 150.000/bữa.<br />\r\n-&nbsp;&nbsp; &nbsp;V&eacute; tham quan theo chương tr&igrave;nh.&nbsp;<br />\r\n-&nbsp;&nbsp; &nbsp;Hướng dẫn vi&ecirc;n tiếng Việt vui vẻ nhiệt t&igrave;nh suốt chuyến đi.<br />\r\n-&nbsp;&nbsp; &nbsp;Bảo hiểm với mức bồi thường tối đa 100.000.000 đồng/trường hợp. Kh&ocirc;ng &aacute;p dụng cho kh&aacute;ch từ 80 tuổi trở l&ecirc;n.<br />\r\n-&nbsp;&nbsp; &nbsp;Qu&agrave; tặng: n&oacute;n du lịch Việt, nước, khăn lạnh.<br />\r\n<strong>Kh&ocirc;ng bao gồm:</strong><br />\r\n-&nbsp;&nbsp; &nbsp;Bia hay nước ngọt trong c&aacute;c bữa ăn.<br />\r\n-&nbsp;&nbsp; &nbsp;Tham quan ngo&agrave;i chương tr&igrave;nh.<br />\r\n-&nbsp;&nbsp; &nbsp;Chi ph&iacute; c&aacute; nh&acirc;n: điện thoại, giặt ủi&hellip;<br />\r\n-&nbsp;&nbsp; &nbsp;V&eacute; c&aacute;p treo đi B&agrave; N&agrave;, c&ocirc;ng vi&ecirc;n Ch&acirc;u &Aacute;, C&ocirc;ng vi&ecirc;n Suối kho&aacute;ng n&oacute;ng N&uacute;i Thần T&agrave;i, Show K&yacute; ức Hội An &hellip;<br />\r\n-&nbsp;&nbsp; &nbsp;1 bữa ăn trưa ng&agrave;y thứ 2 tham quan B&agrave; N&agrave;.<br />\r\n-&nbsp;&nbsp; &nbsp;Chi ph&iacute; b&atilde;i biển: d&ugrave;, v&otilde;ng, tắm nước ngọt&hellip;<br />\r\n-&nbsp;&nbsp; &nbsp;Thuế VAT.</p>\r\n\r\n<p>Ng&agrave;y khởi h&agrave;nh kh&aacute;c</p>\r\n\r\n<table>\r\n	<thead>\r\n		<tr>\r\n			<th>STT</th>\r\n			<th>Ng&agrave;y khởi h&agrave;nh</th>\r\n			<th>Đặc điểm</th>\r\n			<th>Gi&aacute; từ</th>\r\n			<th>Số Chỗ</th>\r\n			<th>Book tour</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>1</td>\r\n			<td>29/04/2021</td>\r\n			<td>Kh&aacute;ch sạn 3*</td>\r\n			<td>6,499,000đ</td>\r\n			<td>C&ograve;n 10 chỗ</td>\r\n			<td>\r\n			<p><a href=\"https://dulichviet.com.vn/thanh-toan-tour-du-lich?id=5464y2438424c4c4u25433\">Book</a>&nbsp;Chi tiết</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2</td>\r\n			<td>30/04/2021</td>\r\n			<td>Kh&aacute;ch sạn 3*</td>\r\n			<td>6,699,000đ</td>\r\n			<td>C&ograve;n 10 chỗ</td>\r\n			<td>\r\n			<p><a href=\"https://dulichviet.com.vn/thanh-toan-tour-du-lich?id=5464y2438424c4c4u264u2\">Book</a>&nbsp;Chi tiết</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3</td>\r\n			<td>01/05/2021</td>\r\n			<td>Kh&aacute;ch sạn 3*</td>\r\n			<td>6,499,000đ</td>\r\n			<td>C&ograve;n 10 chỗ</td>\r\n			<td>\r\n			<p><a href=\"https://dulichviet.com.vn/thanh-toan-tour-du-lich?id=5464y2438424c4c4u264v2\">Book</a>&nbsp;Chi tiết</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Ghi ch&uacute;</p>\r\n\r\n<p><strong>Gi&aacute; vé dành cho trẻ em:</strong><br />\r\n-&nbsp;&nbsp; &nbsp;Trẻ em dưới 02 tuổi: miễn gi&aacute; tour, gi&aacute; v&eacute; m&aacute;y bay theo quy định của h&atilde;ng h&agrave;ng kh&ocirc;ng, Cha, Mẹ hoặc người th&acirc;n đi k&egrave;m tự lo c&aacute;c chi ph&iacute; ăn, ngủ, tham quan (nếu c&oacute;) cho b&eacute;.&nbsp;<br />\r\n-&nbsp;&nbsp; &nbsp;Trẻ em từ 02 &ndash; dưới 05 tuổi: 100% gi&aacute; v&eacute; m&aacute;y bay; miễn gi&aacute; tour. Cha, Mẹ hoặc người th&acirc;n đi k&egrave;m tự lo c&aacute;c chi ph&iacute; ăn, ngủ, tham quan (nếu c&oacute;) cho b&eacute;. Hai người lớn chỉ k&egrave;m 1 trẻ em dưới 5 tuổi, trẻ em thứ 2 trở l&ecirc;n phải mua &frac12; v&eacute; tour.<br />\r\n-&nbsp;&nbsp; &nbsp;Trẻ em từ 05 &ndash; dưới 11 tuổi: 100% gi&aacute; v&eacute; m&aacute;y bay; 50% gi&aacute; tour. Bao gồm c&aacute;c dịch vụ ăn uống, ghế ngồi tr&ecirc;n xe v&agrave; ngủ chung với gia đ&igrave;nh. Hai người lớn chỉ được k&egrave;m 1 trẻ em từ 5 đến dưới 11 tuổi, trẻ em thứ 2 trở l&ecirc;n Cha, Mẹ n&ecirc;n mua th&ecirc;m 1 suất giường đơn.<br />\r\n-&nbsp;&nbsp; &nbsp;Từ 11 tuổi trở l&ecirc;n: 100% gi&aacute; tour v&agrave; ti&ecirc;u chuẩn như người lớn.<br />\r\nQuy định thanh to&aacute;n, hủy v&eacute;:<br />\r\n-&nbsp;&nbsp; &nbsp;Sau khi x&aacute;c nhận v&agrave; thanh to&aacute;n (&iacute;t nhất 50% tiền cọc giữ chỗ v&agrave; thanh to&aacute;n đủ 100% tổng gi&aacute; trị tiền tour trước 15 ng&agrave;y khởi h&agrave;nh).<br />\r\n-&nbsp;&nbsp; &nbsp; Khi đến ng&agrave;y thanh to&aacute;n đủ 100% tổng gi&aacute; trị tiền tour, nếu Qu&yacute; kh&aacute;ch kh&ocirc;ng thanh to&aacute;n đ&uacute;ng hạn v&agrave; đ&uacute;ng số tiền được xem như Qu&yacute; kh&aacute;ch tự &yacute; huỷ tour v&agrave; mất hết số tiền đ&atilde; đặt cọc giữ chỗ.<br />\r\n-&nbsp;&nbsp; &nbsp;V&eacute; M&aacute;y Bay / v&eacute; xe lửa / v&eacute; t&agrave;u cao tốc được xuất ngay sau khi qu&yacute; kh&aacute;ch đ&oacute;ng tiền v&agrave; c&oacute; x&aacute;c nhận sự ch&iacute;nh x&aacute;c về họ, t&ecirc;n (đ&uacute;ng từng k&yacute; tự ghi trong hộ chiếu hoặc CMND), ng&agrave;y-th&aacute;ng-năm sinh &hellip; của h&agrave;nh kh&aacute;ch theo y&ecirc;u cầu của h&atilde;ng vận chuyển. Mọi sự thay đổi li&ecirc;n quan đến v&eacute; đ&atilde; xuất: ng&agrave;y giờ đi, t&ecirc;n h&agrave;nh kh&aacute;ch, hủy v&eacute;, qu&yacute; kh&aacute;ch vui l&ograve;ng chịu chi ph&iacute; theo qui định sau:<br />\r\n* &nbsp; &nbsp;Ngay sau khi Qu&yacute; kh&aacute;ch đăng k&yacute; tour nếu hủy sẽ bị phạt tiền tour v&agrave; v&eacute; m&aacute;y bay: &nbsp;<br />\r\n-&nbsp;&nbsp; &nbsp;Ngay sau khi đặt cọc hoặc thanh to&aacute;n hoặc trước 15 ng&agrave;y: ph&iacute; hủy 35% tiền tour+ 100% V&eacute; m&aacute;y bay.<br />\r\n-&nbsp;&nbsp; &nbsp;Hủy 10 ng&agrave;y trước ng&agrave;y khởi h&agrave;nh: ph&iacute; hủy 50% tiền tour + 100% v&eacute; m&aacute;y bay.<br />\r\n-&nbsp;&nbsp; &nbsp;Hủy 07 ng&agrave;y trước ng&agrave;y khởi h&agrave;nh: ph&iacute; hủy 70% tiền tour &nbsp;+ 100% v&eacute; m&aacute;y bay.<br />\r\n-&nbsp;&nbsp; &nbsp;Hủy &nbsp;05 ng&agrave;y trước ng&agrave;y khởi h&agrave;nh: ph&iacute; hủy 100% tiền tour &nbsp;+ 100% v&eacute; m&aacute;y bay.&nbsp;<br />\r\n-&nbsp;&nbsp; &nbsp;Trường hợp qu&yacute; kh&aacute;ch đến trễ giờ khởi h&agrave;nh được t&iacute;nh l&agrave; hủy 5 ng&agrave;y trước ng&agrave;y khởi h&agrave;nh.<br />\r\n-&nbsp;&nbsp; &nbsp;Do t&iacute;nh chất l&agrave; đo&agrave;n gh&eacute;p kh&aacute;ch lẻ, Du Lịch Việt sẽ c&oacute; tr&aacute;ch nhiệm nhận kh&aacute;ch đăng k&yacute; cho đủ đo&agrave;n (10 kh&aacute;ch người lớn trở l&ecirc;n) th&igrave; đo&agrave;n sẽ khởi h&agrave;nh đ&uacute;ng lịch tr&igrave;nh. Nếu số lượng đo&agrave;n dưới 10 kh&aacute;ch, c&ocirc;ng ty c&oacute; tr&aacute;ch nhiệm th&ocirc;ng b&aacute;o cho kh&aacute;ch trước ng&agrave;y khởi h&agrave;nh 3 ng&agrave;y v&agrave; sẽ thỏa thuận lại ng&agrave;y khởi h&agrave;nh mới hoặc ho&agrave;n trả to&agrave;n bộ số tiền đ&atilde; đặt cọc tour.<br />\r\n-&nbsp;&nbsp; &nbsp;Việc huỷ bỏ chuyến đi phải được th&ocirc;ng b&aacute;o trực tiếp với C&ocirc;ng ty hoặc qua fax, email, tin nhắn v&agrave; phải được C&ocirc;ng ty x&aacute;c nhận. Việc huỷ bỏ bằng điện thoại kh&ocirc;ng được chấp nhận.<br />\r\n-&nbsp;&nbsp; &nbsp;C&aacute;c ng&agrave;y đặt cọc, thanh to&aacute;n, huỷ v&agrave; dời tour: kh&ocirc;ng t&iacute;nh thứ 7, Chủ Nhật.<br />\r\n-&nbsp;&nbsp; &nbsp;Trong những trường hợp bất khả kh&aacute;ng như: khủng bố, bạo động, thi&ecirc;n tai, lũ lụt&hellip; Tuỳ theo t&igrave;nh h&igrave;nh thực tế v&agrave; sự thuận tiện, an to&agrave;n của kh&aacute;ch h&agrave;ng, c&ocirc;ng ty Du Lịch sẽ chủ động th&ocirc;ng b&aacute;o cho kh&aacute;ch h&agrave;ng sự thay đổi như sau: huỷ hoặc thay thế bằng một chương tr&igrave;nh mới với chi ph&iacute; tương đương chương tr&igrave;nh tham quan trước đ&oacute;. Trong trường hợp chương tr&igrave;nh mới c&oacute; ph&aacute;t sinh th&igrave; Kh&aacute;ch h&agrave;ng sẽ thanh to&aacute;n khoản ph&aacute;t sinh n&agrave;y. Tuy nhi&ecirc;n, mỗi b&ecirc;n c&oacute; tr&aacute;ch nhiệm cố gắng tối đa, gi&uacute;p đỡ b&ecirc;n bị thiệt hại nhằm giảm thiểu c&aacute;c tổn thất g&acirc;y ra v&igrave; l&yacute; do bất khả kh&aacute;ng.&hellip;<br />\r\n-&nbsp;&nbsp; &nbsp;Đối với sự thay đổi lịch tr&igrave;nh, giờ bay do lỗi của h&atilde;ng h&agrave;ng kh&ocirc;ng, t&agrave;u hoả, t&agrave;u thuỷ, Du Lịch Việt sẽ kh&ocirc;ng chịu tr&aacute;ch nhiệm bất kỳ ph&aacute;t sinh n&agrave;o do lỗi tr&ecirc;n như: ph&aacute;t sinh bữa ăn, nh&agrave; h&agrave;ng, kh&aacute;ch sạn, phương tiện di chuyển, hướng dẫn vi&ecirc;n, &hellip;.&nbsp;</p>\r\n\r\n<p><strong>ĐIỀU KIỆN BẢO LƯU TOUR DO ẢNH HƯỞNG CỦA DỊCH COVID&nbsp;</strong><br />\r\n1. Kh&aacute;ch h&agrave;ng thuộc c&aacute;c điều kiện như sau:</p>\r\n\r\n<p>&bull; Kh&aacute;ch c&oacute; tour đi đến V&ugrave;ng đang c&oacute; Dịch, đang bị phong tỏa c&aacute;ch ly hoặc giản c&aacute;ch x&atilde; hội.</p>\r\n\r\n<p>&bull; Kh&aacute;ch đang bị c&aacute;ch ly phong tỏa do khu vực kh&aacute;ch lưu tr&uacute; đang nằm trong v&ugrave;ng Dịch.</p>\r\n\r\n<p>&bull; Kh&aacute;ch l&agrave; trường hợp F1, F2, F3,&hellip;đang được y&ecirc;u cầu c&aacute;ch ly tại nh&agrave; hoặc c&oacute; tiếp x&uacute;c qua người nghi nhiễm.&nbsp;<br />\r\n2. Kh&aacute;ch h&agrave;ng, nếu thuộc trong c&aacute;c trường hợp n&ecirc;u tr&ecirc;n sẽ được Bảo lưu tour cụ thể như sau:</p>\r\n\r\n<p>&bull; Bảo lưu trong thời gian 365 ng&agrave;y kể từ ng&agrave;y kh&aacute;ch th&ocirc;ng b&aacute;o cho c&ocirc;ng ty. Lưu &yacute;: Kh&aacute;ch h&agrave;ng phải cung cấp đầy đủ giấy tờ chứng minh đang thuộc c&aacute;c trường hợp tr&ecirc;n bao gồm : chứng minh nh&acirc;n d&acirc;n , sổ hộ khẩu, giấy x&aacute;c nhận của địa phương ( nếu thuộc điều kiện 2,3)<br />\r\n3.Trường hợp một số điểm tham quan trong chương tr&igrave;nh nằm trong v&ugrave;ng dịch, C&ocirc;ng ty sẽ thay đổi h&agrave;nh trinh, điểm tham quan hợp l&yacute; nhất.</p>\r\n\r\n<p><strong>Lưu &yacute; :</strong><br />\r\n-&nbsp;&nbsp; &nbsp;Khi đăng k&yacute; tour kh&aacute;ch h&agrave;ng bắt buộc phải gởi giấy tờ t&ugrave;y th&acirc;n cho đơn vị du lịch để v&agrave;o t&ecirc;n xuất v&eacute; v&agrave; mua bảo hiểm du lịch. Những giấy tờ c&aacute; nh&acirc;n của kh&aacute;ch h&agrave;ng (CMND hoặc Passport) thuộc về tr&aacute;ch nhiệm của kh&aacute;ch h&agrave;ng. Mọi vấn đề như h&igrave;nh ảnh, th&ocirc;ng tin giấy tờ trong bản gốc bị mờ, kh&ocirc;ng r&otilde; r&agrave;ng; Passport, CMND hết hạn,&hellip; kh&ocirc;ng đ&uacute;ng quy định của ph&aacute;p luật Việt Nam, Du Lịch Việt sẽ kh&ocirc;ng chịu tr&aacute;ch nhiệm v&agrave; sẽ kh&ocirc;ng ho&agrave;n trả bất cứ chi ph&iacute; ph&aacute;t sinh n&agrave;o.<br />\r\n-&nbsp;&nbsp; &nbsp;Đối với kh&aacute;ch Nước ngo&agrave;i/Việt Kiều: Khi đi tour phải mang theo đầy đủ Passport (Hộ Chiếu), Visa Việt Nam bản ch&iacute;nh c&ograve;n hạn sử dụng l&agrave;m thủ tục l&ecirc;n m&aacute;y bay theo qui định h&agrave;ng kh&ocirc;ng. &nbsp;<br />\r\n-&nbsp;&nbsp; &nbsp;Trẻ em (dưới 12 tuổi) khi đi du lịch mang theo giấy khai sinh (bản ch&iacute;nh hoặc sao y c&oacute; thị thực c&ograve;n hạn sử dụng) để &nbsp;l&agrave;m thủ tục h&agrave;ng kh&ocirc;ng.&nbsp;<br />\r\n-&nbsp;&nbsp; &nbsp;Qu&yacute; kh&aacute;ch từ 14 tuổi bắt buộc phải c&oacute; CMND hoặc Passport (c&ograve;n hạn sử dụng), KH&Ocirc;NG SỬ DỤNG GIẤY KHAI SINH. Nếu trẻ em từ 14 tuổi chưa c&oacute; CMND hoặc Passport bắt buộc phải c&oacute;', 'GHHJGFJĐ-GHJHGJHG', '2021-03-03', 3, 'Ha Noi', 'Da Nang', 15);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phonenumber` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(350) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `name`, `phonenumber`, `address`) VALUES
(0, 'admin', '11111111', 'Admin', '0347194217', '................................'),
(8, 'toanB1910004@gmail.com', '1111111', 'Toàn Đặng', '0347194217', ''),
(10, 'vantoan0605@gmail.com', '160799881', 'hghfghfg', '654645', '645645654645'),
(11, 'a@gmail.com', '12345678', '2a65', '113', 'moutain'),
(15, 'hgjfhg@gfd.com', '123456', 'hạnh', '656565', 'jgh');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment_travelviewing`
--
ALTER TABLE `comment_travelviewing`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `travelviewing`
--
ALTER TABLE `travelviewing`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `name` (`id`,`email`,`password`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT cho bảng `comment_travelviewing`
--
ALTER TABLE `comment_travelviewing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `travelviewing`
--
ALTER TABLE `travelviewing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
