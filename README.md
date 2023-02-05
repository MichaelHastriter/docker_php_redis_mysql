---
header-includes:
 - \usepackage{fvextra}
 - \DefineVerbatimEnvironment{Highlighting}{Verbatim}{breaklines,cmmandchars=\\\{\}}
 - \PassOptionsToPackage{hyphens}{url}\usepackage{hyperref}
---
<!-- If pandoc is installed, the command below can be used to compile this into a PDF for use on course web pages, etc.
pandoc -V geometry:margin=0.5in --number-sections -f markdown -t pdf -o hw3.pdf README.md
-->
# Blakeflix Overview
This web app uses Docker for multiple containers including redis, apache2/php, and mysql.

To Run:

Download all files.

Build a Docker image with
    docker build -t engine_img

Run containers with
    docker compose up

Navigate to http://localhost:8000 to see a sample movie selection with pull from DB and redis

Navigate to http://localhost:8000/form.php to see a sample registration form that saves the passed in values to the DB and redis

Blake: You will see in the process.php and process_form.php file there is a basic insert into the database happening.  The Docker compose already took care of building the database. And the Dockerfile took care of installing the php mysqli so you can interact with the DB. To modify the table, open the ./dump/dump.sql file.  You will see the table creation code there.

To log into the DB, open a terminal, and run docker exec -it
 db0-grp /bin/bash.

 Then, type mysql -u root -p
 password is example

 show databases; //this will show you the databases.
 use path; //this is the name of the database we create in docker-compose.yml
show tables; //to see the tables in the DB

to see the columns in one of the tables
SELECT `COLUMN_NAME` 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='path' 
    AND `TABLE_NAME`='Users';

    


Daniel: You will see in the process.php and process_form.php file there is a basic insert into redis happening.  The Docker compose already took care of spinning up the connection, and the Dockerfile installs the client so all you have to do is use it.

Michael: You will see in the index.php and form.php an ajax call to the server when you select a movie or click the submit button respectively.  That is how you can update the screen without reloading the page.  You will need to modify the page to make it serve movie recommendations.

We need to talk about how we want the data to be passed back and forth.  Specifically, when we store data in the database, 'how' it is represented is important because it impacts how we query and parse the strings that come out of it.