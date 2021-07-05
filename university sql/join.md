# JOINS

## 1. Selezionare tutti gli studenti iscritti al Corso di Laurea in Economia
SELECT students.id, students.name, students.surname FROM students JOIN degrees ON students.degree_id = degrees.id WHERE degrees.name = 'Corso di Laurea in Economia'

## 2. Selezionare tutti i Corsi di Laurea del Dipartimento di Neuroscienze
SELECT degrees.name, degrees.id FROM degrees JOIN departments ON degrees.department_id = departments.id WHERE departments.name = "Dipartimento di Neuroscienze"

## 3. Selezionare tutti i corsi in cui insegna Fulvio Amato (id=44)
SELECT teachers.id as teacher_id, teachers.name, teachers.surname, teachers.office_number, courses.id, courses.name, courses.description 
FROM course_teacher
JOIN teachers
ON course_teacher.teacher_id = teachers.id
join courses
ON course_teacher.course_id = courses.id
WHERE teachers.id = 44

## 4. Selezionare tutti gli studenti con i dati relativi al corso di laurea a cui sono iscritti e il relativo dipartimento, in ordine alfabetico per cognome e nome
SELECT students.id, students.surname, students.name, students.registration_number, degrees.name as `nome_corso`, departments.name as `Nome Dipartimento`
FROM students
JOIN degrees
ON students.degree_id = degrees.id
JOIN departments
ON degrees.department_id = departments.id
ORDER BY students.surname ASC
## 5. Selezionare tutti i corsi di laurea con i relativi corsi e insegnanti
SELECT  courses.id AS 'course_id', courses.name, courses.description, courses.period, courses.year, courses.cfu, degrees.id AS 'degree_id', degrees.name, degrees.level, degrees.address, degrees.email, teachers.id AS 'teacher_id', teachers.name, teachers.surname, teachers.phone, teachers.email
FROM courses
JOIN degrees
ON courses.degree_id = degrees.id
JOIN course_teacher
ON courses.id = course_teacher.course_id
JOIN teachers
ON course_teacher.teacher_id = teachers.id
ORDER BY courses.year ASC

