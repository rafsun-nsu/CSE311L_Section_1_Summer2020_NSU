SELECT Last_Name, Manager_id, MAX(Salary) 
FROM employees 
WHERE Manager_id IS NOT NULL 
GROUP BY Manager_id 
	HAVING MIN(Salary) > 6000
ORDER BY Salary DESC