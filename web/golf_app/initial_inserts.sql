-- inserts into lookup table to store all possibilities
INSERT INTO game_type_lookup
(game_type_id, game_type)
VALUES (nextval('game_type_lookup_s'), '9-Hole');

INSERT INTO game_type_lookup
(game_type_id, game_type)
VALUES (nextval('game_type_lookup_s'), '18-Hole');

-- inserting 1st test user
INSERT INTO users
(user_id, first_name, last_name)
VALUES (nextval('users_s'), 'Tiger', 'Woods');

INSERT INTO golf_game
(game_id, game_type_id, game_date, course_name, user_id, score)
VALUES (nextval('golf_game_s'), 1, '2020-03-23', 'Pebble Creek', currval('users_s'), 45);

-- inserting 2nd test user
INSERT INTO users
(user_id, first_name, last_name)
VALUES (nextval('users_s'), 'Bob', 'Hope');

INSERT INTO golf_game
(game_id, game_type_id, game_date, course_name, user_id, score)
VALUES (nextval('golf_game_s'), 2, '2020-04-18', 'Pinecrest', currval('users_s'), 40);

-- inserting 3rd test user
INSERT INTO users
(user_id, first_name, last_name)
VALUES (nextval('users_s'), 'Adam', 'Sandler');

INSERT INTO golf_game
(game_id, game_type_id, game_date, course_name, user_id, score)
VALUES (nextval('golf_game_s'), 2, '2020-01-05', 'Sandhills', currval('users_s'), 34);

-- inserting 4th test user
INSERT INTO users
(user_id, first_name, last_name)
VALUES (nextval('users_s'), 'Raymond', 'Holt');

INSERT INTO golf_game
(game_id, game_type_id, game_date, course_name, user_id, score)
VALUES (nextval('golf_game_s'), 1, '2020-08-14', 'South Ridge', currval('users_s'), 27);