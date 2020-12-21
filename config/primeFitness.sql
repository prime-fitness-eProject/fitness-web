CREATE DATABASE primeFitness;

CREATE TABLE faq
(
    id int IDENTITY(1,1) PRIMARY KEY,
    name NVARCHAR(20) NOT NULL,
    email NVARCHAR(100),
    address1 NVARCHAR(200),
    address2 NVARCHAR(200),
    city NVARCHAR(100),
    state NVARCHAR(100),
    zipcode NVARCHAR(100),
    message NVARCHAR(1000) NOT NULL
);

CREATE TABLE enquiry
(
    id int IDENTITY(1,1) PRIMARY KEY,
    name NVARCHAR(20) NOT NULL,
    email NVARCHAR(100),
    message NVARCHAR(1000) NOT NULL
)