SELECT Last_Name, Job_Id, Hire_Date 
FROM employees
WHERE Hire_Date BETWEEN '20-02-1998' AND '01-05-1998'
ORDER BY Hire_Date ASC