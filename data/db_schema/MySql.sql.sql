CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `domain`        varchar(128) NOT NULL,
  `username`      varchar(128) NOT NULL,
  `password`      varchar(128) NOT NULL,
  `email_address` varchar(255),
  `display_name`  varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE USER ADD CONSTRAINT constr_identity UNIQUE (domain, username)

insert into user(`id`, `domain`, `username`, `password`, `display_name`)
values(1, 'local', 'admin', '$2y$10$Vc7ZbhWLeIeZ6mypeIpd6uBelDKlQ8wXgL2vkKbLS4L7Zz/KgJM02', 'Administrator');