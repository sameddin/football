CREATE TABLE coach
(
  id   serial PRIMARY KEY NOT NULL,
  name varchar            NOT NULL
);
CREATE TABLE country
(
  id      serial PRIMARY KEY NOT NULL,
  country varchar            NOT NULL
);
CREATE TABLE player
(
  id         serial PRIMARY KEY NOT NULL,
  name       varchar            NOT NULL,
  team_id    bigint,
  number     bigint,
  role_id    bigint,
  nation     varchar            NOT NULL,
  birth      date               NOT NULL,
  height     bigint,
  weight     bigint,
  match      bigint,
  goal       bigint,
  pass       bigint,
  yellowcard bigint,
  redcard    bigint,
  season     bigint
);
CREATE TABLE role
(
  id   serial PRIMARY KEY NOT NULL,
  role varchar            NOT NULL
);
CREATE TABLE team
(
  id            serial PRIMARY KEY NOT NULL,
  name          varchar            NOT NULL,
  tournament_id bigint,
  coach_id      bigint,
  country_id    bigint
);
CREATE TABLE tournament
(
  id         serial PRIMARY KEY NOT NULL,
  tournament varchar            NOT NULL
);
