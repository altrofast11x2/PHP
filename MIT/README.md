board 라는 database 를 만든뒤에 sql 에 밑에 테이블을 추가해주세요.
    CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    subject VARCHAR(100) NOT NULL,
    writer VARCHAR(50) NOT NULL,
    message TEXT NOT NULL,
    status INT DEFAULT 0,
created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);