CREATE TABLE coach
(
    id   bigserial  NOT NULL,
    name varchar NOT NULL,

    PRIMARY KEY (id)
);
CREATE TABLE country
(
    id      bigserial  NOT NULL,
    country varchar NOT NULL,

    PRIMARY KEY (id)
);
CREATE TABLE player
(
    id         bigserial  NOT NULL,
    name       varchar NOT NULL,
    team_id    bigint,
    number     bigint,
    role_id    bigint,
    nation     varchar NOT NULL,
    birth      date    NOT NULL,
    height     bigint,
    weight     bigint,
    match      bigint,
    goal       bigint,
    pass       bigint,
    yellowcard bigint,
    redcard    bigint,
    season     bigint,

    PRIMARY KEY (id)
);
CREATE TABLE role
(
    id   bigserial  NOT NULL,
    role varchar NOT NULL,

    PRIMARY KEY (id)
);
CREATE TABLE team
(
    id            bigserial  NOT NULL,
    name          varchar NOT NULL,
    tournament_id bigint,
    coach_id      bigint,
    country_id    bigint,
    date_id       bigint,

    PRIMARY KEY (id)
);
CREATE TABLE tournament
(
    id         bigserial  NOT NULL,
    tournament varchar NOT NULL,

    PRIMARY KEY (id)
);
CREATE TABLE match
(
    id   bigserial    NOT NULL,
    date timestamp NOT NULL,

    PRIMARY KEY (id)
);
