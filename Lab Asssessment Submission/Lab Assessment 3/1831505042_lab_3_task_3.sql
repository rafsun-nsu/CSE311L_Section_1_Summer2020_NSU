SELECT Last_Name, Department_id
FROM employees
WHERE Department_id IN ('20', '50')
ORDER BY Last_Name ASC