SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `cart` (
    `cart_id` int(11) NOT NULL,
    `user_id` int(11) NOT NULL,
    `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- create product table and insert data
CREATE TABLE `product` (
    `item_id` int(11) NOT NULL,
    `item_brand` varchar(200) NOT NULL,
    `item_name` varchar(255) NOT NULL,
    `item_price` double(10,2) NOT NULL,
    `item_image` varchar(255) NOT NULL,
    `item_register` datetime DEFAULT NULL,
    `item_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
    (1, 'Infusion', 'Acai Bowl', 4.99, './assets/Foods/Acai Bowl.jpg', '2020-03-28 11:08:57'), -- NOW()
    (2, 'Mort`s', 'Burger & Fries', 122.00, './assets/Foods/Burger & Fries.jpg', '2020-03-28 11:08:57'),
    (3, 'Rollins @Night', 'Chicken Wings', 122.00, './assets/Foods/Chicken Wings.jpg', '2020-03-28 11:08:57'),
    (4, 'Rollins @Night', 'Cinnamon Rolls', 3.49, './assets/Foods/Cinnamon Rolls.jpg', '2020-03-28 11:08:57'),
    (5, 'Wheatstone', 'Egg & Bacon Muffin', 122.00, './assets/Foods/Egg Muffin.jpg', '2020-03-28 11:08:57'),
    (6, 'Infusion', 'Green Smoothie', 122.00, './assets/Foods/Green Smoothie.jpg', '2020-03-28 11:08:57'),
    (7, 'Wheatstone', 'Avocado Panini', 5.99, './assets/Foods/Panini.jpg', '2020-03-28 11:08:57'),
    (8, 'Rollins @Night', 'Pizza Slice', 2.00, './assets/Foods/Pizza Slice.jpg', '2020-03-28 11:08:57'),
    (9, '1+5+3 Salads', 'Salad', 4.49, './assets/Foods/Salad.jpg', '2020-03-28 11:08:57'),
    (10, 'Sabai', 'Satay Sticks', 4.19, './assets/Foods/Satay.jpg', '2020-03-28 11:08:57'),
    (11, 'Starbucks', 'Starbucks Frap', 4.99, './assets/Foods/Starbucks.jpg', '2020-03-28 11:08:57'),
    (12, 'Mort`s', 'Tiger Stripe Ice Creame', 152.00, './assets/Foods/Tiger Stripe.jpg', '2020-03-28 11:08:57'),
    (13, 'Baja Grill', 'Burrito', 152.00, './assets/Foods/Burrito/jpg', '2020-03-28 11:08:57');

-- create user table and insert data
CREATE TABLE `user` (
    `user_id` int(11) NOT NULL,
    `first_name` varchar(100) NOT NULL,
    `last_name` varchar(100) NOT NULL,
    `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
    (1, 'Guest', 'User', '2022-08-07 12:00:00');

-- Indexes for table `cart`
ALTER TABLE `cart`
    ADD PRIMARY KEY (`cart_id`);

-- Indexes for table `product`
ALTER TABLE `product`
    ADD PRIMARY KEY (`item_id`);

-- Indexes for table `user`
ALTER TABLE `user`
    ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

-- AUTO_INCREMENT for table `cart`
ALTER TABLE `cart`
    MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

-- AUTO_INCREMENT for table `product`
ALTER TABLE `product`
    MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

-- AUTO_INCREMENT for table `user`
ALTER TABLE `user`
    MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;