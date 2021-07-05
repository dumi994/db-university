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