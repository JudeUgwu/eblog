-- INSERT QUERIES
INSERT INTO `users`(`username`,`email`,`password`,`photo`) VALUES('somto','somto@gmail.com','secret','https://images.pexels.com/photos/1704488/pexels-photo-1704488.jpeg');

INSERT INTO `users`(`username`,`email`,`password`,`photo`) VALUES('jane','jane@gmail.com','secret','https://images.pexels.com/photos/1704488/pexels-photo-1704488.jpeg');

INSERT INTO `users`(`username`,`email`,`password`,`photo`) VALUES('zubie','zubie@gmail.com','secret','https://images.pexels.com/photos/1704488/pexels-photo-1704488.jpeg');

INSERT INTO `users`(`username`,`email`,`password`,`photo`) VALUES('bella','bella@gmail.com','secret','https://images.pexels.com/photos/1704488/pexels-photo-1704488.jpeg');

-- RETRIEVE / SELECT QUERIES
SELECT * FROM `users` ;
SELECT `username`,`email` FROM `users`;
SELECT `username`,`email` FROM `users` ORDER BY `username` ASC ;
SELECT `username`,`email` FROM `users` WHERE `username`='jane';
SELECT * FROM `users` WHERE `username`='jane';
SELECT * FROM `users` WHERE `username`='jane' AND `password`='secret';
SELECT * FROM `users` WHERE (`username`='jude1' OR `email`='judeugwu@gmail.com') AND `password`='secret';
SELECT * FROM `users` WHERE `email` LIKE '%ronaldo  kjsfdjdkk%';

-- UPDATE QUERY
UPDATE `users` SET `username`='jude1' WHERE `email`='jude@gmail.com';
UPDATE `users` SET `password`='secret22' WHERE `email`='jude@gmail.com' AND `password`='secret';


-- DELETE QUERY
DELETE FROM `users` WHERE `email`='jude@gmail.com';