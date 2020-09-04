SELECT Last_Name, Job_ID, MAX(Salary), MIN(Salary), AVG(Salary), SUM(Salary)
FROM employees
GROUP BY Job_ID;