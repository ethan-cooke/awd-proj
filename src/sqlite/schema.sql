-- Schema for TimeWarp Consoles database

create table customers
(
    id           int auto_increment,
    first_name            varchar(50)  null,
    last_name             varchar(50)  null,
    email                 varchar(50)  null,
    phone                 varchar(15)  null,
    address               varchar(50)  null,
    city                  varchar(50)  null,
    region                varchar(30)  null,
    postal_code           varchar(10)  null,
    username              varchar(50)  null,
    password              varchar(255) null,
    primary key (id),
    constraint unique_user unique (email, username)
);

create table categories
(
    code varchar(3)  not null,
    name varchar(30) not null,
    primary key (code)
);

create table orders
(
    id   int auto_increment,
    order_date datetime   null,
    customer_id       int        not null,
    stat   varchar(2) not null,
    primary key (id),
    foreign key (customer_id) references customers (id)
);

create table products
(
    id     int auto_increment,
    name     varchar(50)    not null,
    image    varchar(100)   not null,
    price    decimal(10, 2) not null,
    stock    int            not null,
    category varchar(3)     not null,
    primary key (id),
    foreign key (category) references categories (code)
);

create table order_items
(
    order_id   int not null,
    product_id int not null,
    qty        int not null,
    primary key (order_id, product_id),
    foreign key (order_id) references orders (id),
    foreign key (product_id) references products (id)
);

create index category on products (category);

