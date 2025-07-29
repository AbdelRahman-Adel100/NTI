/* Task 1 */

SELECT c.title AS courses_title, COUNT(e.students_id) AS total_studentss
FROM courses c
LEFT JOIN enrollments e ON c.id = e.courses_id
GROUP BY c.id, c.title
HAVING COUNT(e.students_id) > 0;



/* Task 2 */

SELECT name
FROM studentss
WHERE id = (
    SELECT students_id
    FROM enrollments
    GROUP BY students_id
    ORDER BY COUNT(courses_id) ASC
    LIMIT 1
);




/* Task 3 */

SELECT name
FROM studentss
WHERE id NOT IN (
    SELECT DISTINCT students_id
    FROM enrollments
);




/* Task 4 */

SELECT name, (
    SELECT COUNT(*)
    FROM enrollments
    WHERE students_id = s.id
) 
AS courses_count
FROM studentss s
WHERE (
    SELECT COUNT(*)
    FROM enrollments
    WHERE students_id = s.id
) > 0;
