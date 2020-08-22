SELECT e.Last_Name, d.Department_id, d.Department_name
FROM employees e, departments d
WHERE e.Department_id = d.Department_id;