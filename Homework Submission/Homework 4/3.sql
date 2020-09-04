SELECT dept.Department_Name AS 'Name', dept.Location_ID AS 'Location', COUNT(*) AS 'Number of people', AVG(Salary) AS 'Salary'
FROM departments dept 
	LEFT OUTER JOIN employees emp ON dept.Department_ID = emp.Department_ID
GROUP BY dept.Department_ID