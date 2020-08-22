SELECT e.Last_Name, e.Salary, e.Comission_pct
FROM employees e
WHERE e.Comission_pct IS NOT NULL 
ORDER BY e.Salary DESC;