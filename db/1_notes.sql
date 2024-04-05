CREATE TABLE IF NOT EXISTS Notes (
    Id SERIAL PRIMARY KEY,
    Created DATE,
    Title VARCHAR(50),
    Article VARCHAR(255)
);

INSERT INTO Notes (Id, Created, Title, Article)
VALUES
    (1, NOW(), 'Title 1', 'Acrticle 1'),
    (2, NOW(), 'Title 2', 'Acrticle 2'),
    (3, NOW(), 'Title 3', 'Acrticle 3'),
    (4, NOW(), 'Title 4', 'Acrticle 4'),
    (5, NOW(), 'Title 5', 'Acrticle 5')