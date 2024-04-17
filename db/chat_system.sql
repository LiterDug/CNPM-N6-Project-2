-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 17, 2024 lúc 04:59 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `chat_system`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chat`
--

CREATE TABLE `chat` (
  `chatid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `chatroomid` int(11) NOT NULL,
  `message` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `chat_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `chat`
--

INSERT INTO `chat` (`chatid`, `userid`, `chatroomid`, `message`, `chat_date`) VALUES
(1, 6, 2, 'adas', '2024-04-15 16:02:12'),
(2, 6, 2, 'fasfsa', '2024-04-15 16:02:15'),
(3, 6, 2, 'H?o', '2024-04-15 16:11:57'),
(4, 6, 2, 'dfsf', '2024-04-15 16:21:09'),
(5, 6, 2, 'cdiciadch', '2024-04-15 21:23:16'),
(6, 4, 2, '?dhauhasc', '2024-04-15 21:23:35'),
(7, 6, 5, 'Hi', '2024-04-17 16:13:58'),
(8, 6, 5, 'NH?T', '2024-04-17 16:21:14'),
(9, 6, 5, 'NH?T', '2024-04-17 16:36:02'),
(10, 6, 5, 'NH?T', '2024-04-17 16:36:39'),
(11, 6, 5, '?', '2024-04-17 17:48:41'),
(12, 6, 5, '?INH C?NG NH?T', '2024-04-17 17:48:46'),
(13, 6, 5, '?', '2024-04-17 17:48:51'),
(14, 6, 5, 'DINH CONG NHAT', '2024-04-17 17:49:16'),
(15, 6, 5, '?', '2024-04-17 17:49:23'),
(16, 6, 5, 'NH?T', '2024-04-17 17:49:32'),
(17, 6, 5, '?', '2024-04-17 17:49:37'),
(18, 6, 5, 'NH?T', '2024-04-17 17:54:25'),
(19, 6, 5, 'Nhất', '2024-04-17 18:03:23'),
(20, 6, 5, 'Nhất', '2024-04-17 18:04:03'),
(21, 6, 5, 'Nhất', '2024-04-17 18:05:53'),
(22, 6, 5, 'Alo', '2024-04-17 18:05:56'),
(23, 6, 5, 'đâsd', '2024-04-17 18:11:53'),
(24, 6, 5, 'adgfsfdf', '2024-04-17 18:12:04'),
(25, 9, 6, '123', '2024-04-17 18:31:52'),
(26, 9, 6, 'adsdasd', '2024-04-17 18:32:21'),
(27, 9, 6, 'ĐINH CÔNG NHẤT', '2024-04-17 21:57:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chatroom`
--

CREATE TABLE `chatroom` (
  `chatroomid` int(11) NOT NULL,
  `chat_name` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date_created` datetime NOT NULL,
  `chat_password` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `chatroom`
--

INSERT INTO `chatroom` (`chatroomid`, `chat_name`, `date_created`, `chat_password`, `userid`) VALUES
(1, 'My First Chat Room', '2017-09-11 13:20:18', 'leeann', 2),
(2, 'Free Entrance :)', '2017-09-11 13:20:51', '', 3),
(5, 'IT', '2024-04-15 21:25:11', '1234', 1),
(6, 'newbies', '2024-04-17 18:25:37', '', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chat_member`
--

CREATE TABLE `chat_member` (
  `chat_memberid` int(11) NOT NULL,
  `chatroomid` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `chat_member`
--

INSERT INTO `chat_member` (`chat_memberid`, `chatroomid`, `userid`) VALUES
(1, 1, 2),
(2, 2, 3),
(5, 5, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `uname` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `photo` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `access` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `uname`, `photo`, `access`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'upload/Untitled_1713163138.png', 1),
(2, 'lee', '7e0d7f8a5d96c24ffcc840f31bce72b2', 'lee', '', 2),
(3, 'julyn', 'bf70c261981e1708530982d56d2e8e01', 'julyn', '', 2),
(4, 'Manh', '202cb962ac59075b964b07152d234b70', 'Manh', '', 2),
(6, 'Hao', '202cb962ac59075b964b07152d234b70', 'Hao', 'upload/Untitled1_1713351887.png', 2),
(7, '123', '202cb962ac59075b964b07152d234b70', 'Hao', '', 2),
(8, 'Nhat', '202cb962ac59075b964b07152d234b70', 'Nhat', '', 2),
(9, 'Nhat123', '202cb962ac59075b964b07152d234b70', 'Đinh Công Nhất', '', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chatid`);

--
-- Chỉ mục cho bảng `chatroom`
--
ALTER TABLE `chatroom`
  ADD PRIMARY KEY (`chatroomid`);

--
-- Chỉ mục cho bảng `chat_member`
--
ALTER TABLE `chat_member`
  ADD PRIMARY KEY (`chat_memberid`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chat`
--
ALTER TABLE `chat`
  MODIFY `chatid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `chatroom`
--
ALTER TABLE `chatroom`
  MODIFY `chatroomid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `chat_member`
--
ALTER TABLE `chat_member`
  MODIFY `chat_memberid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chat_member`
--
ALTER TABLE `chat_member`
  ADD CONSTRAINT `chat_member_ibfk_1` FOREIGN KEY (`chat_memberid`) REFERENCES `chatroom` (`chatroomid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
