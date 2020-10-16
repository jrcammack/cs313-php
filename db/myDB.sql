--code to create DB structure
CREATE TABLE users(
	user_name VARCHAR(50) CONSTRAINT user_pk PRIMARY KEY,
 	first_name VARCHAR(30) CONSTRAINT user_nn1 NOT NULL,
 	last_name VARCHAR(30) CONSTRAINT user_nn2 NOT NULL
);

CREATE TABLE game_type_lookup(
	game_type_id int CONSTRAINT game_type_lookup_pk PRIMARY KEY,
 	game_type VARCHAR(30) CONSTRAINT game_type_lookup_nn1 NOT NULL
);

CREATE TABLE golf_game(
	game_id int CONSTRAINT golf_game_pk PRIMARY KEY,
 	game_type_id int CONSTRAINT golf_game_fk1 REFERENCES game_type_lookup(game_type_id),
   user_id int CONSTRAINT golf_game_fk2 REFERENCES users(user_id),
   game_date date CONSTRAINT golf_game_nn1 NOT NULL,
   course_name VARCHAR(100) CONSTRAINT golf_game_nn2 NOT NULL,
   score int CONSTRAINT golf_game_nn3 NOT NULL
);

--code to create pk sequences
CREATE SEQUENCE users_s
INCREMENT BY 1;

CREATE SEQUENCE game_type_lookup_s
INCREMENT BY 1;

CREATE SEQUENCE golf_game_s
INCREMENT BY 1;

--code to do initial inserts of lookup table
INSERT INTO game_type_lookup
(game_type_id, game_type)
VALUES (nextval('game_type_lookup_s'), '9-Hole');

INSERT INTO game_type_lookup
(game_type_id, game_type)
VALUES (nextval('game_type_lookup_s'), '18-Hole');