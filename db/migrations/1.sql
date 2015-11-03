CREATE TABLE coach
(
    id   bigserial NOT NULL,
    name varchar   NOT NULL,

    PRIMARY KEY (id)
);
CREATE TABLE country
(
    id      bigserial NOT NULL,
    country varchar   NOT NULL,

    PRIMARY KEY (id)
);
CREATE TABLE tournament
(
    id         bigserial NOT NULL,
    tournament varchar   NOT NULL,

    PRIMARY KEY (id)
);
CREATE TABLE match
(
    id   bigserial NOT NULL,
    date timestamp NOT NULL,

    PRIMARY KEY (id)
);
CREATE TABLE team
(
    id            bigserial NOT NULL,
    coach_id      bigint,
    tournament_id bigint,
    country_id    bigint,
    date_id       bigint,
    name          varchar   NOT NULL,

    PRIMARY KEY (id),
    FOREIGN KEY (coach_id) REFERENCES coach,
    FOREIGN KEY (tournament_id) REFERENCES tournament,
    FOREIGN KEY (country_id) REFERENCES country,
    FOREIGN KEY (date_id) REFERENCES match
);
CREATE TABLE role
(
    id   bigserial NOT NULL,
    role varchar   NOT NULL,

    PRIMARY KEY (id)
);
CREATE TABLE player
(
    id         bigserial NOT NULL,
    team_id    bigint,
    role_id    bigint,
    name       varchar   NOT NULL,
    number     bigint,
    nation     varchar   NOT NULL,
    birth      date      NOT NULL,
    height     bigint,
    weight     bigint,
    match      bigint,
    goal       bigint,
    pass       bigint,
    yellowcard bigint,
    redcard    bigint,
    season     bigint,

    PRIMARY KEY (id),
    FOREIGN KEY (team_id) REFERENCES team,
    FOREIGN KEY (role_id) REFERENCES role
);
