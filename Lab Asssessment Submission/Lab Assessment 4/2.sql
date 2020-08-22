SELECT e.Last_Name, d.Department_name, l.Location_id, l.city
FROM employees e, departments d, locations l
WHERE e.Department_id = d.Department_id AND e.Comission_pct IS NOT NULL;