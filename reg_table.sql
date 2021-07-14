
--DATABASE NAME zetha--

-- Table structure for table `register_user`
--

DROP TABLE IF EXISTS `register_user`;
CREATE TABLE IF NOT EXISTS `register_user` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(250) NOT NULL DEFAULT '',
  `email` varchar(250) NOT NULL DEFAULT '',
  `phone` int(11) NOT NULL DEFAULT '',
  `gender` char(2) NOT NULL DEFAULT '',
  `address` varchar(250) NOT NULL DEFAULT '',
  `zipcode` int(11) NOT NULL DEFAULT '',
  `town` varchar(250) NOT NULL DEFAULT '',
  `state` varchar(250) NOT NULL DEFAULT '',
  `created_on` timestamp NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `users`
--

INSERT INTO `register_user` (`id`, `fullname`, `email`, `phone`, `gender`, `adress`, `zipcode`, `town`, `state`) VALUES
(1, 'garzal ahmad', 'muhdgazzali01@gmail.com', '07066492821', 'M', 'garki abuja', '998073', 'garki', 'abuja');
