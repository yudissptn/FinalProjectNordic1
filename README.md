# FinalProjectNordic1
This project containing several web application to fulfill final project task. This project built using bootstrap4.
- Create leap year checker that could identify year is leap year or not. This app include database that check whether input year include in   database or not.
- Second app is to built HR- Information System. This app function is to make database for employee that has a CRUD method. The database     has several tables that have relation for each tables. 

# Leap Year Checker
- Firstly, create a login page to switch between different app by signing role for each user.
- In this login page user must enter correct username and password that will check by query in database.
- After user sign in, login page change to leap year checker.
- This page contain input element for user enter the input year and a button torun the checker
- To make year database from 1900 - 2019, use query insert method that loop from 1900 to 2019.
- When button pressed query will check whether input year is in database or not using same query method for login page.
- Alert massage will shown if input year is not in database
- If input year is in database code continue to divide with 4 and check whether remaining 0 or not. This using reminder operator '%'
- Check result, if the result 0 a massage will appear indicating that input year is a leap year and alert if it is not a leap year.

# HRIS
- Create tables in database for name, department and level of employee.
- After user enter the username and password for this app the login page change to HRIS app
- 
  
