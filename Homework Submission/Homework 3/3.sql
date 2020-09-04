SELECT Last_Name, Job_ID, Hire_Date
FROM employees
WHERE Hire_Date BETWEEN '1998-02-20' AND '1998-05-01'
ORDER by Hire_Date;