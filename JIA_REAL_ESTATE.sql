
CREATE DATABASE IF NOT EXISTS JIA_Real_Estate;


USE JIA_Real_Estate;


CREATE TABLE Agents (
    AgentID INT AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(100) NOT NULL,
    LastName VARCHAR(100) NOT NULL,
    Email VARCHAR(150) UNIQUE NOT NULL,
    Phone VARCHAR(15),
    OfficeAddress VARCHAR(255)
);


CREATE TABLE Properties (
    PropertyID INT AUTO_INCREMENT PRIMARY KEY,
    Address VARCHAR(255) NOT NULL,
    City VARCHAR(100) NOT NULL,
    State VARCHAR(50) NOT NULL,
    ZipCode VARCHAR(10),
    Price DECIMAL(10, 2) NOT NULL,
    Bedrooms INT,
    Bathrooms INT,
    SquareFeet INT,
    AgentID INT,
    Status ENUM('Available', 'Sold', 'Pending') DEFAULT 'Available',
    Image VARCHAR(255),
    FOREIGN KEY (AgentID) REFERENCES Agents(AgentID) ON DELETE SET NULL ON UPDATE CASCADE
);


INSERT INTO Agents (FirstName, LastName, Email, Phone, OfficeAddress)
VALUES
('John', 'Doe', 'john.doe@jiarealestate.com', '1234567890', '123 Real Estate St, NY'),
('Jane', 'Smith', 'jane.smith@jiarealestate.com', '0987654321', '456 Realtor Ave, NY');


INSERT INTO Properties (Address, City, State, ZipCode, Price, Bedrooms, Bathrooms, SquareFeet, AgentID, Status)
VALUES
('123 Maple Ave, Apt 4B', 'Flushing', 'NY', '11354', 1658.00, 1, 1, 500, 1, 'Available'),
('181 Mercer St, Apt 9A', 'New York', 'NY', '10012', 2895.00, 2, 2, 1140, 2, 'Available'),
('242 Greene St, Apt 1C', 'Bronx', 'NY', '10468', 1860.00, 2, 1, 1110, 1, 'Pending'),
('1200 College Ave', 'Bronx', 'NY', '10456', 500000.00, 4, 4, 2400, 2, 'Sold'),
('50 Wall St', 'Staten Island', 'NY', '10301', 500000.00, 3, 2, 1985, 2, 'Sold'),
('8635 21st Ave', 'Brooklyn', 'NY', '11214', 500000.00, 4, 3, 2110, 2, 'Sold'),
('8611 Winchester Blvd', 'Queens Village', 'NY', '11427', 500000.00, 3, 3, 2310, 2, 'Sold');



