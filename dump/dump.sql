CREATE TABLE Movies (
  id int NOT NULL AUTO_INCREMENT,
  title varchar(255),
  description varchar(255),
  PRIMARY KEY (id)
);

CREATE TABLE Users (
  id int NOT NULL AUTO_INCREMENT,
  name varchar(255),
  email varchar(255),
  PRIMARY KEY (id)
)