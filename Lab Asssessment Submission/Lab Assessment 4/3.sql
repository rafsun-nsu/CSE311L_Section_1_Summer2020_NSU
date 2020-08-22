SELECT e.Last_Name, e.Job_Id, d.Department_id, d.Department_name
FROM employees e, departments d, locations l
WHERE l.city = 'Toronto';