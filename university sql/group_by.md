

## GROUP BY


## 1. Contare quanti iscritti ci sono stati ogni anno
SELECT COUNT(id) FROM students GROUP BY YEAR(enrolment_date)

## 2. Contare gli insegnanti che hanno l'ufficio nello stesso edificio
SELECT count(id) AS insegnanti_dipartimento, office_address FROM teachers GROUP BY office_address

## 3. Calcolare la media dei voti di ogni appello d'esame
SELECT AVG(vote) as media_voti, exam_id AS appello FROM `exam_student` GROUP BY exam_id

## 4. Contare quanti corsi di laurea ci sono per ogni dipartimento
SELECT COUNT(id) as n_corsi, department_id as dipartimenti FROM `degrees` GROUP BY department_id



