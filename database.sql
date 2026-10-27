
CREATE DATABASE IF NOT EXISTS campus_events
CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;

USE campus_events;

CREATE TABLE IF NOT EXISTS registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    event_name VARCHAR(100) NOT NULL,
    registered_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
