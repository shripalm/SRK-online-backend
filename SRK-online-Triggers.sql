CREATE TRIGGER `address_update_stamp` BEFORE UPDATE ON `address`
 FOR EACH ROW BEGIN
	SET new.update_stamp = CURRENT_TIMESTAMP;
END

CREATE TRIGGER `admin_update_stamp` BEFORE UPDATE ON `admin`
 FOR EACH ROW BEGIN
	SET new.update_stamp = CURRENT_TIMESTAMP;
END

CREATE TRIGGER `cart_update_stamp` BEFORE UPDATE ON `cart`
 FOR EACH ROW BEGIN
	SET new.update_stamp = CURRENT_TIMESTAMP;
END

CREATE TRIGGER `category_update_stamp` BEFORE UPDATE ON `category`
 FOR EACH ROW BEGIN
	SET new.update_stamp = CURRENT_TIMESTAMP;
END

CREATE TRIGGER `delivery_update_stamp` BEFORE UPDATE ON `delivery`
 FOR EACH ROW BEGIN
	SET new.update_stamp = CURRENT_TIMESTAMP;
END

CREATE TRIGGER `item_update_stamp` BEFORE UPDATE ON `item`
 FOR EACH ROW BEGIN
	SET new.update_stamp = CURRENT_TIMESTAMP;
END

CREATE TRIGGER `payment_update_stamp` BEFORE UPDATE ON `payment`
 FOR EACH ROW BEGIN
	SET new.update_stamp = CURRENT_TIMESTAMP;
END

CREATE TRIGGER `refund_update_stamp` BEFORE UPDATE ON `refund`
 FOR EACH ROW BEGIN
	SET new.update_stamp = CURRENT_TIMESTAMP;
END

CREATE TRIGGER `sales_update_stamp` BEFORE UPDATE ON `sales`
 FOR EACH ROW BEGIN
	SET new.update_stamp = CURRENT_TIMESTAMP;
END

CREATE TRIGGER `shop_update_stamp` BEFORE UPDATE ON `shop`
 FOR EACH ROW BEGIN
	SET new.update_stamp = CURRENT_TIMESTAMP;
END

CREATE TRIGGER `user_update_stamp` BEFORE UPDATE ON `user`
 FOR EACH ROW BEGIN
	SET new.update_stamp = CURRENT_TIMESTAMP;
END

