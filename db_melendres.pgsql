create database db_melendres;

\c db_melendres;

create table test(
    name varchar(50)
);

insert into test (name) values ('HOla');


/*Start*/

CREATE TABLE category(
    id SERIAL PRIMARY KEY, 
    name VARCHAR,
    code varchar(10),
    description varchar,


    auth varchar(10) DEFAULT 'Ninguno', /*DNI, RUC*/ 
    

    id_category INTEGER,


    updated_at timestamp, 
    created_at timestamp,
    FOREIGN KEY (id_category) REFERENCES category(id) 
);

