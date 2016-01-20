load data local infile '/var/www/html/lamp_server/lamp_challenge/movies-2014.csv'
into table movies
fields terminated by ','
optionally enclosed by '"'
ignore 1 lines;