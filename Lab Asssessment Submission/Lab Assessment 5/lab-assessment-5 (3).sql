SELECT Job_Id, COUNT(Job_Id) as 'Number of employees'
FROM employees
GROUP BY Job_Id