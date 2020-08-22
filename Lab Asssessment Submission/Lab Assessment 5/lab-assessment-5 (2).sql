SELECT Job_Id, MAX(Salary) as 'Maximum', MIN(Salary) as 'Minimum', SUM(Salary) as 'Sum', AVG(Salary) as 'Average'
FROM employees
GROUP BY Job_Id