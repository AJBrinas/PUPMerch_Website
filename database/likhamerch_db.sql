CREATE DATABASE likhamerch_db;
GO

USE likhamerch_db;
GO

    ----Creating table admin
    CREATE TABLE admin (
    admin_id int primary key NOT NULL,
    admin_name varchar(50) NOT NULL,
    ad_username varchar(50) NOT NULL,
    ad_pass varchar(50) NOT NULL,
    );

    GO

    ---- Dumping data for table admin
    INSERT INTO admin (admin_id, admin_name, ad_username, ad_pass) VALUES
    (1, 'admin', 'admin@gmail.com', '123');
    GO
    ----Creating table categories
    CREATE TABLE categories (
    cat_id int primary key NOT NULL identity(1,1),
    cat_title text NOT NULL,
    );
    GO
    ---- Dumping data for table categories
    INSERT INTO categories (cat_title) values
    ('T-shirt'),
    ('Lanyard');
    GO
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
    order_date date NOT NULL,
    order_confirm date NOT NULL,
    order_delivery date NOT NULL,
    );
    GO
    ---- Dumping data for table order-prod
INSERT INTO order_products (product_id,product_qty, ordertotal_amount, product_user, order_date, order_confirm, order_delivery) values
(3, 2, 100, 1, '2023-01-01', '2023-01-01', '2023-01-03');
    GO
    
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
    GO
    ---- Dumping data for table prod
    INSERT INTO products (product_cat,product_title,product_price,product_desc,product_image,product_qty,product_keywords,product_status) values
    (1, 'Cats of PUP', 230, 'Limited Edition Likha Clothing PUPQC Merch', 'img', 30, 'cats', 0),
    (1, 'PUP est', 290, 'Limited Edition Likha Clothing PUPQC Merch', 'img', 30, 'PUP est', 0),
    (1, 'isko', 250, 'Limited Edition Likha Clothing PUPQC Merch', 'img', 30, 'isko', 0),
    (1, 'isko at iska', 350, 'Limited Edition Likha Clothing PUPQC Merch', 'img', 30, 'isko iska', 0),
    (1, 'iskolar', 300, 'Limited Edition Likha Clothing PUPQC Merch', 'img', 30, 'iskolar', 0),
    (1, 'Mula Sayo', 300, 'Limited Edition Likha Clothing PUPQC Merch', 'img', 30, 'Mula Sayo', 0),
    (1, 'PUPian', 200, 'Limited Edition Likha Clothing PUPQC Merch', 'img', 30, 'PUPian', 0),
    (1, 'PUPQC', 350, 'Limited Edition Likha Clothing PUPQC Merch', 'img', 30, 'PUPQC', 0),
    (2, 'Mula Sayo Para sa Bayan', 30, 'PUP Likha Lanyard', 'img', 30, 'Lanyard1', 0),
    (2, 'Countrys First ', 30, 'PUP Likha Lanyard', 'img', 30, 'Lanyard2', 0),
    (2, 'PUP Light of the Nation', 30, 'PUP Likha Lanyard', 'img', 30, 'Lanyard3', 0);
    GO
    ----Creating table prod-cart   
    CREATE TABLE product_cart (
    product_id int NOT NULL
        constraint FK_product
        foreign key references products(product_id),
    cust_id int NOT NULL
        constraint FK_customer
        foreign key references customer(cust_id)
    );
    GO
    ---- Dumping data for prod-cart   
    INSERT INTO product_cart (product_id,cust_id) values
    (3,1);
    GO
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
    GO
    ---- Dumping data for customer
    INSERT INTO customer (cust_fname, cust_lname, cust_uname, cust_email, cust_pass, cust_mobile, cust_address,cust_city) VALUES
    ('Mejela', 'Gojol', 'mgojol','mejela@gmail.com', 'sample1', '09557009175', 'Commonwealth', 'Quezon City');
    GO
