-- inserts into lookup table to store all possibilities
INSERT INTO game_type_lookup
(game_type_id, game_type)
VALUES (nextval('game_type_lookup_s'), '9-Hole');

INSERT INTO game_type_lookup
(game_type_id, game_type)
VALUES (nextval('game_type_lookup_s'), '18-Hole');

-- inserting 1st test user
INSERT INTO users
(user_name, first_name, last_name)
VALUES ('TWoody', 'Tiger', 'Woods');

INSERT INTO golf_game
(game_id, game_type_id, game_date, course_name, user_name, score)
VALUES (nextval('golf_game_s'), 1, '2020-03-23', 'Pebble Creek', 'TWoody', 45);

-- inserting 2nd test user
INSERT INTO users
(user_name, first_name, last_name)
VALUES ('bobbyhope', 'Bob', 'Hope');

INSERT INTO golf_game
(game_id, game_type_id, game_date, course_name, user_name, score)
VALUES (nextval('golf_game_s'), 2, '2020-04-18', 'Pinecrest', 'bobbyhope', 40);

-- inserting 3rd test user
INSERT INTO users
(user_name, first_name, last_name)
VALUES ('sandman', 'Adam', 'Sandler');

INSERT INTO golf_game
(game_id, game_type_id, game_date, course_name, user_name, score)
VALUES (nextval('golf_game_s'), 2, '2020-01-05', 'Sandhills', 'sandman', 34);

-- inserting 4th test user
INSERT INTO users
(user_name, first_name, last_name)
VALUES ('cheddarrulz', 'Raymond', 'Holt');

INSERT INTO golf_game
(game_id, game_type_id, game_date, course_name, user_name, score)
VALUES (nextval('golf_game_s'), 1, '2020-08-14', 'South Ridge', 'cheddarrulz', 27);

SELECT u.first_name, u.last_name, gt.game_type, g.game_date, g.course_name, g.score
FROM users u INNER JOIN golf_game g ON u.user_name = g.user_name
INNER JOIN game_type_lookup gt ON g.game_type_id = gt.game_type_id 
WHERE u.user_name = 'bobbyhope';