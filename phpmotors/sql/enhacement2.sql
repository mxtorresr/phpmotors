/*1 Insert the following new client to the clients table (Note: The clientId and clientLevel fields should handle their own values and do not need to be part of this query.):
Tony, Stark, tony@starkent.com, Iam1ronM@n, "I am the real Ironman"*/
INSERT INTO clients (clientFirstname, clientLastname, clientEmail, clientPassword, clientLevel, comment) VALUES('Tony','Stark','tony@starkent.com','Iam1ronM@n', 1,'I am the real Ironman');
/*2 Modify the Tony Stark record to change the clientLevel to 3.*/
    UPDATE
        clients
    SET
        clientLevel = '3'
    WHERE
        clientPassword = 'Iam1ronM@n'
/*3 Modify the "GM Hummer" record to read "spacious interior" rather than "small interior" using a single query.*/
UPDATE
    inventory
SET
    invDescription = replace('Do you have 6 kids and like to go off-roading? The Hummer gives you the small interiors with an engine to get you out of any muddy or rocky situation.', 'small interior', 'spacious interior')
WHERE
    invModel = 'Hummer'
/*4 Use an inner join to select the invModel field from the inventory table and the classificationName field from the carclassification table for inventory items that belong to the "SUV" category.*/
SELECT invModel, classificationName
FROM inventory
INNER JOIN carclassification ON inventory.classificationId=carclassification.classificationId
WHERE carclassification.classificationName = 'SUV'
/*5 Delete the Jeep Wrangler from the database.*/
DELETE FROM inventory
WHERE invModel = 'Wrangler'
/*6 Update all records in the Inventory table to add "/phpmotors" to the beginning of the file path in the invImage and invThumbnail columns using a single query*/
UPDATE inventory
SET invImage=concat('/phpmotors',invImage),
	invThumbnail=concat('phpmotors', invThumbnail)