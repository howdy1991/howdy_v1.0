create table if not exists `pvt_messages` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`user_from` varchar(255) NOT NULL,
`user_to` varchar(255) NOT NULL,
`msg_body` text NOT NULL,
`date` date NOT NULL,
`opened` varchar(255) NOT NULL,
primary key (`id`)
)ENGINE =MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT = 10;