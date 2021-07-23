

-- Table structure for table `register_user`
--

DROP TABLE IF EXISTS `register_user`;
CREATE TABLE IF NOT EXISTS `register_user` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` int(11) NOT NULL,
  `gender` char(2) NOT NULL,
  `address` varchar(250) NOT NULL,
  `car_rent` varchar(250) NOT NULL,
  `zipcode` int(11) NOT NULL,
  `town` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `created_on` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- inserting data for table `users`
--

INSERT INTO `register_user` (`id`, `fullname`, `email`, `phone`, `gender`, `car_rent` `address`, `zipcode`, `town`, `state`) VALUES
(1, 'garzal ahmad', 'muhdgazzali01@gmail.com', '07066492821', 'M', 'honda accord' 'garki abuja', '998073', 'garki', 'abuja');
