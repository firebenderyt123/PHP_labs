CREATE TABLE IF NOT EXISTS Privileges (
    Id SERIAL PRIMARY KEY,
    Name VARCHAR(20),
    Password VARCHAR(20),
    Rights VARCHAR(1)
);