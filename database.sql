create database edulab;

use edulab;

CREATE TABLE `users` (
    `id` int(11) NOT NULL auto_increment,
    `name` varchar(100) NOT NULL,
    `email` varchar(100) NOT NULL,
    `phone` varchar(11) NOT NULL,
    `plan` varchar(50) NOT NULL,
    `expiryDate` date NOT NULL,
    PRIMARY KEY  (`id`)
);