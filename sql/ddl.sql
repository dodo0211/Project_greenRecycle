drop schema if exists `green_recycle_db`;
create schema `green_recycle_db`;

use `green_recycle_db`;

drop table if exists `cart_table`;
drop table if exists `product_table`;
drop table if exists `member_table`;

CREATE TABLE if not exists `member_table`(
	`id` varchar(20) not null unique,
	`password` varchar(20) not null,
	`name` varchar(20) not null,
	`phone` varchar(12) not null,
	`address` varchar(60) not null,
    `date` date not null,
	constraint `pk_member_phone` primary key(`phone`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;

CREATE TABLE if not exists `product_table` (
    `id` bigint auto_increment not null unique,
	`category` varchar(3) not null,
	`name` varchar(20) not null,
	`inventory` int not null,
	`price` int not null,
	`link` varchar(400) not null,
	`link_2` varchar(400) null default null,
	`link_3` varchar(400) null default null,
	`link_4` varchar(400) null default null,
	`link_5` varchar(400) null default null,
	`link_6` varchar(400) null default null,
	`link_7` varchar(400) null default null,
	`link_8` varchar(400) null default null,
    `date` date not null,
	constraint `pk_product_category_name` primary key (`category`, `id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;

 CREATE TABLE if not exists `cart_table` (
	`member_id` varchar(20) not null,
	`product_category` varchar(7) not null,
	`product_id` bigint not null,
	constraint `pk_cart_member_id_product_category_id` primary key(`member_id`, `product_category`, `product_id`),
	constraint `fk_cart_member_id` foreign key(`member_id`) references `member_table`(`id`) on delete cascade on update cascade,
	constraint `fk_cart_product_category_id` foreign key(`product_category`, `product_id`) references `product_table`(`category`, `id`) on delete cascade on update cascade
) ENGINE = InnoDB DEFAULT CHARSET = utf8;

show tables;

select * from `green_recycle_db`.`member_table`;
select * from `green_recycle_db`.`product_table`;

-- describe member_table;

