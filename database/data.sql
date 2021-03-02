TRUNCATE `MENU`;

INSERT INTO
    `MENU` ( `ID`, `LABEL`, `POSITION`, `FILE` )
VALUES
    ( 1, 'Home', 10, 'index.php' ),
    ( 2, 'Videos', 20, 'videos.php' ),
    ( 3, 'Schematics', 30, 'schematics.php' ),
    ( 4, '?', 999, 'info2.php' )
;

TRUNCATE `VIDEO_CONTENT`;

INSERT INTO
    `VIDEO_CONTENT` ( `ID`, `LABEL`, `URL` )
VALUES
    ( 1, 'Back To The Future Trailer', 'https://www.youtube.com/embed/qvsgGtivCgs' ),
    ( 2, 'Back To The Future Part II Trailer', 'https://www.youtube.com/embed/MdENmefJRpw' ),
    ( 3, 'Back To The Future Part III Trailer', 'https://www.youtube.com/embed/3C8c3EoEfw4' ),
    ( 4, 'Back to the Future Time Travel', 'https://www.youtube.com/embed/FWG3Dfss3Jc' )
;

TRUNCATE `INFO`;

INSERT INTO
    `INFO` ( `ID`, `LABEL`, `DATA` )
VALUES
    ( 1, 'Author', 'The One and Only Doctor Emmett Brown' ),
    ( 2, 'System requirements', 'PHP >=5.3 <5.5<br>MySQL >=5.0 <=5.5' ),
    ( 3, 'Created', '2020.11.01.' ),
    ( 4, 'Last updated', '2009.06.30.' )
;
