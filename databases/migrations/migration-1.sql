CREATE TABLE storage_media (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    original_name VARCHAR(100) NOT NULL,
    created_by INT(11) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    CONSTRAINT fk_storage_media_created_by FOREIGN KEY (created_by) REFERENCES users(id) ON DELETE CASCADE
);
