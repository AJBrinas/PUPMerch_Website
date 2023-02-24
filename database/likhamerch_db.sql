    SET NOCOUNT ON
    GO

    set nocount    on
    set dateformat mdy

    -- Table structure for table `accounts_tbl`
    --

    create database likhamerch_db;

    ----Creating table admin
    CREATE TABLE admin (
    admin_id int primary key NOT NULL,
    admin_name varchar(50) NOT NULL,
    ad_username varchar(50) NOT NULL,
    ad_pass varchar(50) NOT NULL,
    );
    ---- Dumping data for table admin
    INSERT INTO admin (admin_id, admin_name, ad_username, ad_pass) VALUES
    (1, 'admin', 'admin@gmail.com', '123');

    ----Creating table categories
    CREATE TABLE categories (
    cat_id int primary key NOT NULL identity(1,1),
    cat_title text NOT NULL,
    );

    ---- Dumping data for table categories
    INSERT INTO categories (cat_id, cat_title) values
    (1, 'T-shirt'),
    (2, 'Lanyard');

    ----Creating table order-prod
    CREATE TABLE order_products(
    order_id int primary key NOT NULL identity(1,1),
    product_id int 
        constraint FK_products
        foreign key references products(product_id),
    product_qty varchar(100) NOT NULL,
    ordertotal_amount varchar(10) NOT NULL,
    product_user int NOT NULL
        constraint FK_cust
        foreign key references customer (cust_id),
    order_date varchar(11) NOT NULL,
    order_confirm tinyint NOT NULL DEFAULT 0,
    order_delivery tinyint NOT NULL DEFAULT 0
    );

    ---- Dumping data for table order-prod
    INSERT INTO order_products (order_id, product_id, product_qty, ordertotal_amount, product_user, order_date, order_confirm, order_delivery) values
    (1, 1, 2, 100, 1, "2023-01-01", "2023-01-01", "2023-01-03");

    ----Creating table prod   
    CREATE TABLE products (
    product_id int primary key NOT NULL identity(1,1) ,
    product_cat int NOT NULL
        constraint FK_category
        foreign key references categories (cat_id),
    product_title varchar(255) NOT NULL,
    product_price varchar(100) NOT NULL,
    product_desc text NOT NULL,
    product_image text NOT NULL,
    product_qty int NOT NULL DEFAULT 0,
    product_keywords text DEFAULT NULL,
    product_status int NOT NULL DEFAULT 1
    );

    ---- Dumping data for table prod
    INSERT INTO products (product_id,product_cat,product_title,product_price,product_desc,product_image,product_qty,product_keywords,product_status) values
    (1, 1, 'Mula sayo Para sa Bayan', 200, 'Tshirt po ito', 'img', 30, 'Mula', 1);

    ----Creating table prod-cart   
    CREATE TABLE product_cart (
    product_id int NOT NULL
        constraint FK_product
        foreign key references products(product_id),
    cust_id int NOT NULL
        constraint FK_customer
        foreign key references customer(cust_id)
    );
    ---- Dumping data for prod-cart   
    INSERT INTO products (product_id,cust_id) values
    (1,1);

    ---- Creating table for customer
    CREATE TABLE customer(
    cust_id int primary key NOT NULL identity(1,1),
    cust_fname varchar(50) NOT NULL,
    cust_lname varchar(50) NOT NULL,
    cust_uname varchar(50) NOT NULL,
    cust_email varchar(50) NOT NULL,
    cust_pass varchar(50) NOT NULL,
    cust_mobile varchar(15) NOT NULL,
    cust_address varchar (100) NOT NULL,
    cust_city varchar(50) NOT NULL,
    );
    ---- Dumping data for customer
    INSERT INTO customer (cust_id, cust_fname, cust_lname, cust_uname, cust_email, cust_pass, cust_mobile, cust_address,cust_city) VALUES
    (1, 'Mejela', 'Gojol', 'mejela@gmail.com', 'sample1', '09557009175', 'Commonwealth', 'Quezon City');
