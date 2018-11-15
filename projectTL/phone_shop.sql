-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 12, 2018 lúc 12:55 PM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `phone_shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categoryID` varchar(50) NOT NULL,
  `SubcategoryID` varchar(120) NOT NULL,
  `categoryName` varchar(150) NOT NULL,
  `description` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `categoryID`, `SubcategoryID`, `categoryName`, `description`) VALUES
(1, 'C001', '', 'ĐIỆN THOẠI', ''),
(2, 'C002', '', 'LAPTOP', NULL),
(3, 'C003', '', 'TABLET', NULL),
(4, 'C004', '', 'APPLE', ''),
(5, 'C005', '', 'PHỤ KIỆN', ''),
(6, 'C006', '', 'SIM THẺ', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `fullName` varchar(100) NOT NULL,
  `birthDate` date DEFAULT NULL,
  `avatar` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `username`, `password`, `email`, `phone`, `address`, `status`, `fullName`, `birthDate`, `avatar`) VALUES
(1, 'tenloi', 'tienloi123', 'nguyentienloi160997@gmail.com', '1632155830', NULL, NULL, 'Nguyễn Tiến Lợi', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `employeeID` varchar(20) NOT NULL,
  `employeeName` varchar(100) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `birthDate` date DEFAULT NULL,
  `avatar` text,
  `roll` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `employees`
--

INSERT INTO `employees` (`id`, `employeeID`, `employeeName`, `address`, `email`, `password`, `phone`, `birthDate`, `avatar`, `roll`) VALUES
(1, 'kh1', 'tienloi', NULL, 'tienloi', 'tienloi123', NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetail`
--

CREATE TABLE `orderdetail` (
  `orderID` varchar(20) NOT NULL,
  `productID` varchar(20) NOT NULL,
  `unitPrice` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `discount` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `orderID` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `orderDate` date DEFAULT NULL,
  `shipperID` varchar(20) DEFAULT NULL,
  `shippedDate` date DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `productID` varchar(20) NOT NULL,
  `productName` varchar(150) NOT NULL,
  `supplierID` varchar(150) DEFAULT NULL,
  `categoryID` varchar(50) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unitPrice` int(11) DEFAULT NULL,
  `ParentPicre` int(11) NOT NULL,
  `discount` float DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `description` text,
  `image` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `productID`, `productName`, `supplierID`, `categoryID`, `quantity`, `unitPrice`, `ParentPicre`, `discount`, `status`, `description`, `image`) VALUES
(1, 'SP001', 'ASUS 123', 'S001', 'C002', 10, 5000000, 799000, 5, 1, 'X401 được định hướng thiết kế với vẻ đẹp đơn giản, lịch lãm, gọn nhẹ và không cầu kỳ về chi tiết, gồm 4 phiên bản màu gồm xanh đậm (họa tiết các đường vân ô vuông), trắng sáng (họa tiết vân ô vuông), xanh nhạt chanh và hồng tươi trẻ trung. Thân máy nhỏ gọn, nhẹ hơn giúp cho người dùng dễ dàng mang theo suốt lịch trình học tập, công việc.\r\n\r\nCác tính năng cải tiến hướng đến người dùng\r\n\r\nInstant On: với công nghệ SHE II, Asus cải tiến thời gian khởi động lại máy từ trạng thái ngủ trong vòng chỉ 2 giây, duy trì trạng thái standby suốt 2 tuần. Điều đặc biệt, tính năng tự động lưu trữ, backup dữ liệu khi pin xuống dưới ngưỡng 5% vốn chỉ đươc trang bị cho các notebook cao cấp hoặc ultrabook thế hệ mới nay cũng được áp dụng cho X401. Không còn phiền toái vì chờ đợi quá lâu hoặc lo lắng thất thoát dữ liệu, X401 mang lại cho bạn sự hài lòng cao nhất.', 'asuss.jpg'),
(2, 'SP002', 'Lenovo ', 'S001', 'C002', 10, 10000000, 12000000, 2, 1, 'Laptop Lenovo Thinkpad T470s có thiết kế độc đáo với kích thước nhỏ gọn, gam màu đen sang trọng đầy mạnh mẽ. Các góc máy vuông vức tạo vẻ đẹp nam tính, khỏe khoắn. Dòng T470s sở hữu màn hình kích thước 14 inches, độ phân giải HD 1366x768 pixels cho hình ảnh sắc nét, sống động, độ tương phản cao và vô cùng chân thực.\r\n\r\nLaptop Thinkpad T470s có cấu hình mạnh mẽ. Được trang bị bộ vi xử lý Intel Core i7-7300U với tốc độ 2.6GHz cùng bộ nhớ đệm 4MB. Card đồ họa Intel HD Graphics  620, RAM 8GB, ổ cứng SSD 256GB.\r\n\r\nThinkpad T470s có pin 6 cell cho thời gian sử dụng tương đối. Cùng với công nghệ tiết kiệm pin, máy có thể hoạt động mát, tiết kiệm điện năng nên có thể đáp ứng tốt nhu cầu sử dụng bình thường của bạn.\r\n\r\nLaptop trang bị bàn phím với kích thước tiêu chuẩn có độ nảy tốt, nhạy và khá mềm. Touchpad cảm ứng đa điểm nhạy bén theo từng thao tác chạm.\r\n\r\nLenovo Thinkpad T470s được trang bị đầy đủ các kết nối thông dụng như: USB, HDMI/VGA, khe cắm thẻ nhớ, tai nghe...', 'lelovo.jpg'),
(4, 'SP003', 'Macbook Pro', 'S001', 'C002', 5, 20000000, 23000000, 5, 1, 'Mảng smartphone có lẽ giờ đây không còn là trọng tâm cho sự chú ý của Microsoft nữa. \"Cha đẻ\" của hệ điều hành Windows hiện đang cảm thấy hạnh phúc với doanh số có được từ mảng tablet. Đối với họ, như thế là đã đủ rồi.\r\nTheo các con số có được từ Strategy Analytics, thị trường máy tính bảng đã có 46.6 triệu chiếc bán ra chỉ trong Quý 3/2016. So với quý trước thì chỉ giảm 1% nhưng so với quý 3 năm ngoái thì giảm đến 10%. Và những bản cập nhật về tình hình kinh doanh trong quý 4 sắp tới cũng dự báo một mức giảm nữa cho thị trường này.\r\n\r\nChứng kiến mức giảm như trên nhưng không phải ai cũng buồn, đặc biệt là Microsoft. Mặc dù thị trường tablet nhìn tổng thể đang sa sút nhưng riêng bản thân \"gã khổng lồ\" của Mỹ lại có một sự tăng trưởng đáng chú ý, qua đó giúp họ chiếm được tới 16% thị phần mảng máy tính bảng chỉ trong quý 3 vừa qua. So với năm 2015 thì thị phần của họ đã tăng thêm 3.2%.\r\n\r\nTín hiệu sáng sủa của Microsoft lại là \"hồi chuông\" dành cho tất cả các hãng công nghệ đang sản xuất tablet chạy Android. Tính tới thời điểm hiện tại, \"những chú robot xanh\" vẫn chiếm được 65% thị phần nhưng tốc độ bán hàng đang bị những chiếc tablet chạy Windows \"vượt mặt\".', 'mac.jpg'),
(5, 'SP004', 'Dell Vostro', 'S001', 'C002', 20, 4500000, 5000000, 1, 1, 'Chiếc laptop sở hữu thiết kế đẹp sang trọng và cấu hình mạnh – Dell Vostro 5468 đang được bán kèm theo chương trình khuyến mãi rất hấp dẫn tại Thế Giới Di Động, chúng ta cùng xem những thông tin hấp dẫn ấy là gì nhé.\r\nĐầu tiên, nếu là tân sinh viên, bạn có thể dùng điểm thi để đổi coupon giảm giá với mức giảm cao nhất có thể lên đến 20%. Có điểm là có giảm, điểm càng cao số tiền giảm càng nhiều.', 'dell.jpg'),
(6, 'SP006', 'Iphone 6S', 'S001', 'C004', 12, 6700000, 7000000, 1, 1, 'Sau nhiều lần giảm giá sốc, iPhone 6s Plus hiện đang là chiếc smartphone được rất nhiều người lựa chọn mua sắm tại Thế Giới Di Động. Với giá chỉ 11.990.000 đồng bạn sẽ sở hữu cho mình một thiết bị có thiết kế kim loại nguyên khối, màn hình Retina HD trứ danh cùng vi xử lý Apple A9 đầu bảng một thời.\r\n\r\nĐặc biệt hơn, khi mua iPhone 6s Plus ngay bây giờ bạn sẽ nhận được phiếu mua hàng trị giá 1.000.000 đồng, tha hồ mà mua sắm các sản phẩm khác tại Thế Giới Di Động. Chưa hết, giảm ngay 50% tối đa 200.000 nếu thanh toán lần đầu tiên bằng Zalo Pay.', 'ip6.jpg'),
(7, 'SP007', 'SamSung', 'S001', 'C001', 3, 3200000, 4500000, 1, 1, 'Trong thiết kế của bộ đôi Galaxy S6 và Galaxy S6 Edge vẫn có một chi tiết không được đánh giá cao về tính thẩm mỹ, đó là cụm camera lồi lên khá cao tạo cảm giác thô nhưng bù lại phần viền xung quanh máy ảnh hơi cao hơn mặt kính sẽ hạn chế sự trầy xước.', 'ss.jpg'),
(8, 'SP008', 'OPPO NEO 7', 'S001', 'C001', 9, 4500000, 5000000, 1, 1, 'Có thể thấy thay đổi lớn nhất giữa hai sản phẩm này nằm ở con chip xử lý. Thay vì sử dụng con chip MediaTek MT6582 (32-bit) thì Neo 7s đã được OPPO trang bị con chip Snapdragon 410 (64-bit).\r\n\r\nNói một chút về sự khác biệt giữa hai con chip này. Điều đầu tiên chắc chắn các bạn cũng đã biết là MT6582 và Snapdragon 410 đến từ hai nhà sản xuất khác nhau. Tất nhiên về mặt thương hiệu, uy tín, khả năng vận hành bền bỉ thì cá nhân mình vẫn thiên về các sản phẩm của Qualcomm.', 'oppo.jpg'),
(12, 'Sp009', 'NOKIA', 'S001', 'C001', 12, 1200000, 1450000, 1, 1, 'Nokia 5 là một điện thoại mới được trình làng đánh dấu sự trở lại ở sự kiện MWC 2017. Chiếc  điện thoại Nokia này mang trong mình nhiều thay đổi cùng mức giá bán hấp dẫn.', 'nokia.jpg'),
(13, 'Sp010', 'TABLET', 'S002', 'C003', 29, 7900000, 8400000, 1, 1, 'Một thiết bị có tên mã SM-T927A được đồn đoán là Galaxy View 2 vừa được xác nhận chứng chỉ Bluetooth và Wi-Fi. Có vẻ như sau 3 năm vắng bóng, thế hệ máy tính bảng Galaxy View sắp được Samsung khôi phục và làm mới lại.\r\nKhông có quá nhiều thông tin về cấu hình của thiết bị trên, tuy nhiên Galaxy View 2 đã được xác nhận là tên gọi chính thức. Chứng chỉ trên cũng tiết lộ sản phẩm này sẽ được trang bị công nghệ Bluetooth 5, Wi-Fi 2 băng tầng 2.4GHz và 5GHz và chạy Android 8.0 Oreo khi xuất xưởng.', 'tab.jpg'),
(14, 'Sp011', 'Tai Nghe', 'S002', 'C005', 3, 8300000, 9200000, 1, 1, 'Apple mới đây cho biết: Mức thuế đề xuất mới nhất của Hoa Kỳ đối với Trung Quốc sẽ ảnh hưởng đến một số dòng sản phẩm của họ, bao gồm cả Apple Watch, AirPods và HomePod.\r\nMức thuế được đề xuất là 25% cho các sản phẩm hoặc các thành phần trong sản phẩm sản xuất tại Trung Quốc. Điều này sẽ khiến giá bán tăng lên, giảm doanh thu của Apple.\r\n\r\nMột số sản phẩm khác cũng bị ảnh hưởng. Theo một là thư của Apple gửi cho Đại diện thương mại Hoa Kỳ vào hôm qua (7/9), nhà Táo cho biết: Mac Mini, Pencil, chuột không dây, trackpad, ốp lưng bằng da, bao da, bộ sạc, cáp và một số bộ phận bên trong cũng sẽ bị ảnh hưởng bởi thuế quan mới.\r\n\r\nApple gửi thư yêu cầu chính phủ Hoa Kỳ sửa đổi đề xuất và bỏ thuế quan đối với các loại sản phẩm trên. \"Mức thuế này làm ảnh hưởng đến các doanh nghiệp và người dùng Mỹ. Trong khi đó, tác dụng của nó trong việc thực hiện các mục tiêu của chính phủ đối với chính sách công nghệ Trung Quốc lại không rõ ràng\", Apple viết.', 'tainghe.jpg'),
(15, 'SP015', 'ASUS 1234', 'S001', 'C002', 10, 5000000, 799000, 5, 1, 'X401 được định hướng thiết kế với vẻ đẹp đơn giản, lịch lãm, gọn nhẹ và không cầu kỳ về chi tiết, gồm 4 phiên bản màu gồm xanh đậm (họa tiết các đường vân ô vuông), trắng sáng (họa tiết vân ô vuông), xanh nhạt chanh và hồng tươi trẻ trung. Thân máy nhỏ gọn, nhẹ hơn giúp cho người dùng dễ dàng mang theo suốt lịch trình học tập, công việc.\r\n\r\nCác tính năng cải tiến hướng đến người dùng\r\n\r\nInstant On: với công nghệ SHE II, Asus cải tiến thời gian khởi động lại máy từ trạng thái ngủ trong vòng chỉ 2 giây, duy trì trạng thái standby suốt 2 tuần. Điều đặc biệt, tính năng tự động lưu trữ, backup dữ liệu khi pin xuống dưới ngưỡng 5% vốn chỉ đươc trang bị cho các notebook cao cấp hoặc ultrabook thế hệ mới nay cũng được áp dụng cho X401. Không còn phiền toái vì chờ đợi quá lâu hoặc lo lắng thất thoát dữ liệu, X401 mang lại cho bạn sự hài lòng cao nhất.', 'asuss.jpg'),
(16, 'SP016', 'Dell Vostro1', 'S001', 'C002', 20, 4500000, 5000000, 1, 1, 'Chiếc laptop sở hữu thiết kế đẹp sang trọng và cấu hình mạnh – Dell Vostro 5468 đang được bán kèm theo chương trình khuyến mãi rất hấp dẫn tại Thế Giới Di Động, chúng ta cùng xem những thông tin hấp dẫn ấy là gì nhé.\r\nĐầu tiên, nếu là tân sinh viên, bạn có thể dùng điểm thi để đổi coupon giảm giá với mức giảm cao nhất có thể lên đến 20%. Có điểm là có giảm, điểm càng cao số tiền giảm càng nhiều.', 'dell.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shippers`
--

CREATE TABLE `shippers` (
  `id` int(11) NOT NULL,
  `shipperID` varchar(20) NOT NULL,
  `companyName` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `supplierID` varchar(20) NOT NULL,
  `companyName` varchar(150) NOT NULL,
  `address` varchar(150) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `website` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `suppliers`
--

INSERT INTO `suppliers` (`id`, `supplierID`, `companyName`, `address`, `phone`, `website`) VALUES
(1, 'S001', 'NIIT', 'Thanh Xuân, Hà Nội', NULL, NULL),
(2, 'S002', 'PPA', 'Cổ Nhuế, Hà Nội', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categoryID` (`categoryID`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Chỉ mục cho bảng `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Chỉ mục cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`orderID`,`productID`),
  ADD KEY `productID` (`productID`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shipperID` (`shipperID`),
  ADD KEY `username` (`username`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `productID` (`productID`),
  ADD KEY `supplierID` (`supplierID`),
  ADD KEY `categoryID` (`categoryID`);

--
-- Chỉ mục cho bảng `shippers`
--
ALTER TABLE `shippers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `shipperID` (`shipperID`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Chỉ mục cho bảng `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `supplierID` (`supplierID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `shippers`
--
ALTER TABLE `shippers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `orderdetail_ibfk_1` FOREIGN KEY (`orderID`) REFERENCES `orders` (`shipperID`),
  ADD CONSTRAINT `orderdetail_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `products` (`productID`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`shipperID`) REFERENCES `shippers` (`shipperID`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`username`) REFERENCES `customers` (`username`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`supplierID`) REFERENCES `suppliers` (`supplierID`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`categoryID`) REFERENCES `categories` (`categoryID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
