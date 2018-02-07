CREATE TABLE users
(
   user_id    		INT NOT NULL AUTO_INCREMENT,
   username     	VARCHAR(128) NOT NULL,
   realname     	VARCHAR(128) NOT NULL,
   email        	VARCHAR(128) NOT NULL,
   password     	VARCHAR(256) NOT NULL,
   profession   	VARCHAR(128) NOT NULL,
   how_you_heard  	BOOLEAN NOT NULL,
   sex          	INT NOT NULL,
   bio          	TEXT NOT NULL,
   PRIMARY KEY  (user_id)
);
