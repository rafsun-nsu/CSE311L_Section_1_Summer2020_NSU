SELECT Last_Name, Hire_Date
FROM employees
WHERE Hire_Date BETWEEN '1994-01-01' AND '1994-12-31'
	AND Salary > '9200';