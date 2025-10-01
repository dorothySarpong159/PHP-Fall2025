CREATE TABLE IF NOT EXISTS orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_name VARCHAR(255) NOT NULL,
    customer_email VARCHAR(255) NOT NULL,
    customer_phone VARCHAR(20) NOT NULL,
    customer_address VARCHAR(100) NOT NULL,
    pizza_size VARCHAR(50) NOT NULL,
    sauce VARCHAR (50) NOT NULL,
    crust_type VARCHAR(50) NOT NULL,
    cheese VARCHAR(50) NOT NULL,
    toppings VARCHAR(255),
    beverages VARCHAR(50),
    special_instructions TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);