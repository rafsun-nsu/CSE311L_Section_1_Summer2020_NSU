SELECT Manager_id, Min(Salary) as 'Lowest salary'
FROM employees
WHERE Manager_id IS NOT NULL AND Salary > 6000
GROUP BY Manager_id
ORDER BY Min(Salary) DESC