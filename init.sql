CREATE DATABASE library;
USE library;
-- 书籍信息
CREATE TABLE book
(
    bookNo varchar(10) primary key,
    bookName varchar(20)not null ,
    importDate date not null ,
    inLibStatus varchar(10) not null ,
    bookStatus varchar(10) not null ,
    bookPrice float(2) not null ,
    frequency int not null ,
    category varchar(20) not null
);

-- 管理员信息
CREATE TABLE admin
(
    adminname varchar(10) primary key,
    password varchar(10) not null
);

-- 读者信息
CREATE TABLE reader
(
    readerNo varchar(10) primary key,
    readerName varchar(20) not null
);

-- 借阅信息
CREATE TABLE borrowBook
(
    serialNumber unsigned int primary key AUTO_INCREMENT,
    readerNo varchar(10) not null,
    bookNo varchar(10) not null unique,
    borrowDate date not null,
    foreign key (readerNo) references reader(readerNo),
    foreign key (bookNo) references book(bookNo)
);

-- 归还信息
CREATE TABLE returnBook
(
    serialNumber unsigned int primary key,
    readerNo varchar(10) not null,
    bookNo varchar(10) not null,
    returnDate date not null,
    foreign key (readerNo) references reader(readerNo),
    foreign key (bookNo) references book(bookNo),
    foreign key (serialNumber) references borrowBook(serialNumber)
);

-- 罚款信息
CREATE TABLE fine
(
    serialNumber unsigned int primary key,
    readerNo varchar(10) not null,
    bookNo varchar(10) not null,
    fine float(2) check (fine>=0),
    lossResult varchar(20) not null,
    foreign key (readerNo) references reader(readerNo),
    foreign key (bookNo) references book(bookNo)
    -- TODO: 罚款流水号和借阅流水号一一对应，但是考虑到编程难度，暂时没有增加外码依赖
);

-- 遗失信息
CREATE TABLE loss
(
    bookNo varchar(10) primary key,
    lossResult varchar(20) not null,
    recordDate date not null,
    foreign key (bookNo) references book(bookNo)
);
