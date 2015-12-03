CREATE TABLE country
(
    id   bigserial NOT NULL,
    name varchar   NOT NULL,
    code varchar   NOT NULL,

    PRIMARY KEY (id)
);
CREATE TABLE coach
(
    id         bigserial NOT NULL,
    name       varchar   NOT NULL,
    birth      date      NOT NULL,
    country_id bigint    NOT NULL,

    PRIMARY KEY (id),
    FOREIGN KEY (country_id) REFERENCES country
);
CREATE TABLE manager
(
    id         bigserial NOT NULL,
    name       varchar   NOT NULL,
    birth      date      NOT NULL,
    country_id bigint    NOT NULL,

    PRIMARY KEY (id),
    FOREIGN KEY (country_id) REFERENCES country
);
CREATE TABLE tournament
(
    id         bigserial NOT NULL,
    name       varchar   NOT NULL,
    country_id bigint    NOT NULL,

    PRIMARY KEY (id),
    FOREIGN KEY (country_id) REFERENCES country
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
    match_id      bigint,
    tournament_id bigint,
    coach_id      bigint,
    manager_id    bigint    NOT NULL,
    country_id    bigint,
    name          varchar   NOT NULL,

    PRIMARY KEY (id),
    FOREIGN KEY (match_id) REFERENCES match ON DELETE SET NULL,
    FOREIGN KEY (tournament_id) REFERENCES tournament,
    FOREIGN KEY (coach_id) REFERENCES coach,
    FOREIGN KEY (manager_id) REFERENCES manager,
    FOREIGN KEY (country_id) REFERENCES country
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
    id         bigserial NOT NULL,
    team_id    bigint,
    role_id    bigint,
    season_id  bigint,
    country_id bigint    NOT NULL,
    name       varchar   NOT NULL,
    number     bigint,
    birth      date      NOT NULL,
    height     bigint,
    weight     bigint,

    PRIMARY KEY (id),
    FOREIGN KEY (team_id) REFERENCES team ON DELETE SET NULL,
    FOREIGN KEY (role_id) REFERENCES role,
    FOREIGN KEY (season_id) REFERENCES season,
    FOREIGN KEY (country_id) REFERENCES country
);
CREATE TABLE goal
(
    id        bigserial NOT NULL,
    player_id bigint    NOT NULL,
    match_id  bigint    NOT NULL,

    PRIMARY KEY (id),
    FOREIGN KEY (player_id) REFERENCES player ON DELETE CASCADE,
    FOREIGN KEY (match_id) REFERENCES match ON DELETE CASCADE
);
CREATE TABLE pass
(
    id        bigserial NOT NULL,
    player_id bigint    NOT NULL,
    match_id  bigint    NOT NULL,

    PRIMARY KEY (id),
    FOREIGN KEY (player_id) REFERENCES player ON DELETE CASCADE,
    FOREIGN KEY (match_id) REFERENCES match ON DELETE CASCADE
);
CREATE TABLE yellow_card
(
    id        bigserial NOT NULL,
    player_id bigint    NOT NULL,
    match_id  bigint    NOT NULL,

    PRIMARY KEY (id),
    FOREIGN KEY (player_id) REFERENCES player ON DELETE CASCADE,
    FOREIGN KEY (match_id) REFERENCES match ON DELETE CASCADE
);
CREATE TABLE red_card
(
    id        bigserial NOT NULL,
    player_id bigint    NOT NULL,
    match_id  bigint    NOT NULL,

    PRIMARY KEY (id),
    FOREIGN KEY (player_id) REFERENCES player ON DELETE CASCADE,
    FOREIGN KEY (match_id) REFERENCES match ON DELETE CASCADE
);
CREATE TABLE membership
(
    id        bigserial NOT NULL,
    player_id bigint    NOT NULL,
    team_id   bigint    NOT NULL,
    season_id bigint    NOT NULL,

    PRIMARY KEY (id),
    FOREIGN KEY (player_id) REFERENCES player ON DELETE CASCADE,
    FOREIGN KEY (team_id) REFERENCES team ON DELETE CASCADE,
    FOREIGN KEY (season_id) REFERENCES season
);
CREATE TABLE transfer
(
    id            bigserial NOT NULL,
    date          date      NOT NULL,
    sum           decimal   NOT NULL,
    term          varchar   NOT NULL,
    membership_id bigint    NOT NULL,

    PRIMARY KEY (id),
    FOREIGN KEY (membership_id) REFERENCES membership ON DELETE CASCADE
);
CREATE TABLE "user"
(
    id         bigserial NOT NULL,
    first_name varchar   NOT NULL,
    last_name  varchar   NOT NULL,
    email      varchar   NOT NULL,
    password   varchar   NOT NULL,

    PRIMARY KEY (id)
)
