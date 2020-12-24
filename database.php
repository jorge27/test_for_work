<?php

$userTable = '
  CREATE TABLE IF NOT EXISTS users(
    id int NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    email varchar(255) NOT NULL UNIQUE,
    password varchar(255) NOT NULL,
    created_at DATETIME,
    updated_at DATETIME,
    PRIMARY KEY (id)
  );
';

$reserPassword = '
  CREATE TABLE IF NOT EXISTS reset_passwords(
    id int NOT NULL AUTO_INCREMENT,
    user_id int NOT NULL,
    string_key varchar(255) NOT NULL,
    created_at DATETIME,
    updated_at DATETIME,
    PRIMARY KEY (id)
  );
';
