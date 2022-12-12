-- task3. assume you have this table

-- department table
-- --------------

-- dept_id     dept_name     dept_location
-- 10	        Account          Ghana
-- 20	        Market	         Nigeria
-- 30           Sales	         Warsaw


-- employee table
-- --------------

-- emp_id     emp_name     dept_id            salary
-- 1	         Kojo          20	            1000
-- 2	         black	       20	            5000
-- 3             John	       10	            4500
-- 4             ama	       30	            500


-- Write a query to return the table below

-- dept_id       count             salary_sum
-- 10	           1                 4500
-- 20	           2	             6000
-- 30              1	             500

SELECT dept_id, COUNT(dept_id) AS count, SUM(salary) AS salary_sum FROM employee GROUP BY dept_id;