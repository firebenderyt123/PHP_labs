CREATE TABLE IF NOT EXISTS Comments (
    Id SERIAL PRIMARY KEY,
    Created DATE,
    Author VARCHAR(50),
    Comment VARCHAR(255),
    Art_Id INT,
    CONSTRAINT fk_Art_Id FOREIGN KEY (Art_Id) REFERENCES Notes(Id)
);