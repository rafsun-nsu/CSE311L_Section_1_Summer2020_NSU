SELECT Last_Name, Hire_Date, Department_ID
FROM employees
WHERE Department_ID IN ('20', '50')
ORDER by Hire_Date