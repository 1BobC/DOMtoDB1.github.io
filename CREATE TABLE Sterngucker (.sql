CREATE TABLE Sterngucker (
        sg_id INTEGER NOT NULL
        AUTO_INCREMENT KEY,
        konstellation VARCHAR(128),
        hellstar VARCHAR(128),
        bayer VARCHAR(128),
        ambesten VARCHAR(128),
        hemisphäre VARCHAR(128),
        RA VARCHAR(128),
        Dek VARCHAR(128)
    )   ENGINE = InnoDB Charset = utf8;