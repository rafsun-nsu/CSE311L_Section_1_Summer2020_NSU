SELECT Job_ID, COUNT(*) AS 'Number of people'
FROM employees
GROUP by Job_ID;