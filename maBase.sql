
CREATE TABLE player(id serial primary key, pseudo TEXT NOT NULL, coordinate TEXT, shoot TEXT);
CREATE TABLE game(id serial primary key, player1_id integer references player(id) not null, player2_id integer references player(id) not null);

