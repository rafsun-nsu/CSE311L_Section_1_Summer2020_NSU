SELECT Last_Name, Salary, Commission_pct
FROM employees
WHERE Commission_pct IS NULL
ORDER BY Salary DESC, Commission_pct DESC;