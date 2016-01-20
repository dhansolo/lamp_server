drop table if exists movies;

create table movies (
	ID int not null AUTO_INCREMENT,
	title varchar(100),
    released date,
    distributor varchar(50),
    genre varchar(50),
    rating varchar(5),
    gross int,
    tickets int,
    imdb_id varchar(10),
    PRIMARY KEY(ID)
);