SELECT d.Department_name, d.Location_id, COUNT(e.Department_id) AS 'Number of employees', AVG(e.Salary) as 'Salary'
FROM employees e, departments d
GROUP BY d.Department_id