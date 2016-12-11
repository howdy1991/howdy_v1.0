create table if not exists `posts` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`body` test NOT NULL,
`date_added` date NOT NULL,
`added_by` varchar(255) NOT NULL,
`user_posted_to` varchar(255) NOT NULL,
primary key (`id`)
)ENGINE =MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT = 10;