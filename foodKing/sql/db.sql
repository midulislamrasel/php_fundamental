CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    role VARCHAR(50) NOT NULL,
    dob DATE NOT NULL,  -- Changed from VARCHAR(50) to DATE
    
    phone VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
);

-- Insert sample data
INSERT INTO users (name, email, role, dob, phone, password) VALUES
('Alice Johnson', 'abc@gmail.com', 'user', '1992-08-20', '555123456', '12345'),
('Bob Williams', 'bob@example.com', 'admin', '1985-03-10', '555789123', '12345'),
('Charlie Brown', 'charlie@example.com', 'user', '1988-12-05', '555456789', '12345'),
('David Lee', 'david@example.com', 'user', '1993-07-15', '555987654', '12345'),
('Emma Davis', 'emma@example.com', 'admin', '1979-06-25', '555654321', '12345'),
('Frank White', 'frank@example.com', 'user', '1982-09-30', '555234567', '12345'),
('Grace Martinez', 'grace@example.com', 'user', '1991-04-18', '555876543', '12345'),
('Henry Taylor', 'henry@example.com', 'admin', '1977-11-12', '555765432', '12345'),
('Ivy Rodriguez', 'ivy@example.com', 'user', '1986-02-08', '555345678', 'ivypass'),
('Jack Moore', 'jack@example.com', 'user', '1984-10-03', '555987123', 'jackpass'),
('Kelly Harris', 'kelly@example.com', 'admin', '1980-05-28', '555678912', 'kellypass'),
('Liam Clark', 'liam@example.com', 'user', '1994-01-22', '555789345', 'liampass'),
('Mia Lewis', 'mia@example.com', 'user', '1981-08-17', '555456789', 'miapass'),
('Noah Hall', 'noah@example.com', 'admin', '1978-03-14', '555123789', 'noahpass'),
('Olivia Walker', 'olivia@example.com', 'user', '1989-06-10', '555987654', 'oliviapass'),
('John Doe', 'john@example.com', 'admin', '1990-01-01', '123456789', 'password123'),
('Jane Smith', 'jane@example.com', 'user', '1995-05-15', '987654321', 'abc123');
