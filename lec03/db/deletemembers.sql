create table deletemembers (
    id char(15) not null,
    pass char(15) not null,
    name char(10) not null,
    email char(80),
    level int,
    point int,
    deletedate date
);
