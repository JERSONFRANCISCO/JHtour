--
-- Table structure for table `tbl_posts`
--

CREATE TABLE IF NOT EXISTS `tbl_posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post` varchar(1024) NOT NULL,
  `date` varchar(20) NOT NULL,
  `user_id` bigint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=0 ;

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` bigint(3) unsigned NOT NULL AUTO_INCREMENT,
  `usuario` varchar(64) NOT NULL,
  `clave` varchar(128) NOT NULL,
  `foto` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=0 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `usuario`, `clave`, `foto`) VALUES
(1, 'usuario@usuario.com', '202cb962ac59075b964b07152d234b70', 'unknown.jpg'), (2, 'ana@usuario.com', '202cb962ac59075b964b07152d234b70', '2.jpg'), (3, 'juan@usuario.com', '202cb962ac59075b964b07152d234b70', '3.jpg'), (4, 'marco@usuario.com', '202cb962ac59075b964b07152d234b70', '4.jpg');

--
-- Constraints for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  ADD CONSTRAINT `tbl_posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
