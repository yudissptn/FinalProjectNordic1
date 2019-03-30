# FinalProjectNordic1
This project containing several web application to fulfill final project task. This project built using bootstrap4.
- Create leap year checker that could identify year is leap year or not. This app include database that check whether input year include in   database or not.
- Second app is to built HR- Information System. This app function is to make database for employee that has a CRUD method. The database     has several tables that have relation for each tables. 
- The last app is to built a Number Identifier app to check even, odd and prime number within database. 

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
- This page will shown tables that combination between name, departemen and level tables in the database
- To combining tables, using query join method.
- Option for edit and delete data shown in the right of table
- For update, using query update method
- For deleting, using query delete method
- In the bottom right of table, option for insert new data is shown. Using query insert for all the table that have relation by table id.
  
# Number Identifier
- Preapre table for number which is has two columns for id and number.
- Use query insert method that loop for 1 to 500 to insert number to database.
- Option for select even, odd and prime number shown using dropdown menu.
- To handle different option using switch case that read dropdown menu name.
- Even and odd option logic by devide by 2 whether it's zero or not.
- For prime number use looping to devide number by 1 until the number itself, whether the zero result greater than 3 or not.
- Result number will shown for different option.
