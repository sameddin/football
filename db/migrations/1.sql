CREATE TABLE coach
(
    id   bigserial NOT NULL,
    name varchar   NOT NULL,

    PRIMARY KEY (id)
);
CREATE TABLE country
(
    id   bigserial NOT NULL,
    name varchar   NOT NULL,

    PRIMARY KEY (id)
);
CREATE TABLE tournament
(
    id   bigserial NOT NULL,
    name varchar   NOT NULL,

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
    match_id      bigint,
    name          varchar   NOT NULL,

    PRIMARY KEY (id),
    FOREIGN KEY (coach_id) REFERENCES coach,
    FOREIGN KEY (tournament_id) REFERENCES tournament,
    FOREIGN KEY (country_id) REFERENCES country,
    FOREIGN KEY (match_id) REFERENCES match
);
CREATE TABLE role
(
    id   bigserial NOT NULL,
    name varchar   NOT NULL,

    PRIMARY KEY (id)
);
CREATE TABLE season
(
    id         bigserial NOT NULL,
    start_year bigint    NOT NULL,
    end_year   bigint    NOT NULL,

    PRIMARY KEY (id)
);
CREATE TABLE player
(
    id        bigserial NOT NULL,
    team_id   bigint,
    role_id   bigint,
    season_id bigint,
    name      varchar   NOT NULL,
    number    bigint,
    nation    varchar   NOT NULL,
    birth     date      NOT NULL,
    height    bigint,
    weight    bigint,

    PRIMARY KEY (id),
    FOREIGN KEY (team_id) REFERENCES team,
    FOREIGN KEY (role_id) REFERENCES role,
    FOREIGN KEY (season_id) REFERENCES season
);
CREATE TABLE goal
(
    id        bigserial NOT NULL,
    player_id bigint    NOT NULL,
    match_id  bigint    NOT NULL,

    PRIMARY KEY (id),
    FOREIGN KEY (player_id) REFERENCES player,
    FOREIGN KEY (match_id) REFERENCES match
);
CREATE TABLE pass
(
    id        bigserial NOT NULL,
    player_id bigint    NOT NULL,
    match_id  bigint    NOT NULL,

    PRIMARY KEY (id),
    FOREIGN KEY (player_id) REFERENCES player,
    FOREIGN KEY (match_id) REFERENCES match
);
CREATE TABLE yellow_card
(
    id        bigserial NOT NULL,
    player_id bigint    NOT NULL,
    match_id  bigint    NOT NULL,

    PRIMARY KEY (id),
    FOREIGN KEY (player_id) REFERENCES player,
    FOREIGN KEY (match_id) REFERENCES match
);
CREATE TABLE red_card
(
    id        bigserial NOT NULL,
    player_id bigint    NOT NULL,
    match_id  bigint    NOT NULL,

    PRIMARY KEY (id),
    FOREIGN KEY (player_id) REFERENCES player,
    FOREIGN KEY (match_id) REFERENCES match
);
