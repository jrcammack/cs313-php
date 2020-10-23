CREATE TABLE topic(
   id SERIAL CONSTRAINT pk_topic PRIMARY KEY,
   name VARCHAR(50) CONSTRAINT nn_topic_1 NOT NULL
);

INSERT INTO topic 
(name)
VALUES ('Faith');

INSERT INTO topic 
(name)
VALUES ('Sacrifice');

INSERT INTO topic 
(name)
VALUES ('Charity');

CREATE TABLE link_scriptures_topics(
   topic_id int CONSTRAINT fk_link_1 REFERENCES topic(id),
   scriptures_id int CONSTRAINT fk_link_2 REFERENCES scriptures(id)
);