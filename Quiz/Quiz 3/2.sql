SELECT Last_Name, Salary, Comission_pct
FROM employees
WHERE Comission_pct IS NOT NULL
ORDER BY Salary DESC;