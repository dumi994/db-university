Modellizzare la struttura di una tabella per memorizzare tutti i dati riguardanti una università:
- sono presenti diversi dipartimenti, ciascuno con i propri corsi di laurea;
- ogni corso di laurea è formato da diversi corsi;
- ogni corso può essere tenuto da diversi insegnanti e prevede più appelli d'esame;
- ogni studente è iscritto ad un corso di laurea;
- per ogni appello d'esame a cui lo studente ha partecipato, è necessario memorizzare il voto ottenuto, anche se non sufficiente

# University

## Professori
- id    BIGINT PRIMARY KEY AUTOINCREMENT UNIQUE NOTNULL INDEX
- nome  VARCHAR(255) NOTNULL INDEX 
- cognome VARCHAR(255) NOTNULL INDEX 
- materia_insegnata VARCHAR(100) NOTNULL INDEX 
- email  VARCHAR(50) NOTNULL 
## Dipartimenti
- id    BIGINT PRIMARY KEY AUTOINCREMENT UNIQUE NOTNULL INDEX
- nome_dipartimento    VARCHAR(100) NOTNULL INDEX
- indirizzo VARCHAR(100) NOTNULL 

## Corsi
- id    BIGINT PRIMARY KEY AUTOINCREMENT UNIQUE NOTNULL INDEX
- nome   VARCHAR(100) NOTNULL INDEX
- numero_studenti   INT NOTNULL
## Studenti
- id   BIGINT PRIMARY KEY AUTOINCREMENT UNIQUE NOTNULL INDEX   
- nome  VARCHAR(100) NOTNULL INDEX
- cognome VARCHAR(100) NOTNULL INDEX
- corsi svolti TEXT NOTNULL
- appelli VARCHAR(100) NOTNULL INDEX
- voto appelli INT NOTNULL 
## Appelli
- data_1_appello DATA INT NOTNULL
- 2_appello DATA INT NOTNULL
- 3_appello DATA INT NOTNULL
- 4_appello DATA INT NOTNULL
- 5_appello DATA INT NOTNULL
- 6_appello DATA INT NOTNULL
- 7_appello DATA INT NOTNULL
- appello_straordinario DATA INT NOTNULLUN

## Voti
- voto INT NOTNULL

