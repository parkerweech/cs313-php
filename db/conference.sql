CREATE TABLE users
(
	id SERIAL PRIMARY KEY
	, username VARCHAR(28) UNIQUE NOT NULL
	, password VARCHAR(50) NOT NULL 
);

CREATE TABLE speakers
(
	id SERIAL PRIMARY KEY 
	, full_name VARCHAR(75) NOT NULL
);

CREATE TABLE sessions
(
	id SERIAL PRIMARY KEY
	, month SMALLINT NOT NULL
	, year SMALLINT NOT NULL 
);

CREATE TABLE notes
(
	id SERIAL PRIMARY KEY
	, content TEXT NOT NULL 
	, date DATE 
	, user_id INT NOT NULL REFERENCES users(id)
	, speaker_id INT NOT NULL REFERENCES speakers(id)
	, session_id INT NOT NULL REFERENCES sessions(id)
);

