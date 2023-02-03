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

Navigate to http://localhost:8000

Blake: You will see in the process.php file there is a basic insert into the database happening.  The Docker compose already took care of building the database. And the Dockerfile took care of installing the php mysqli so you can interact with the DB. To modify the table, open the ./dump/dump.sql file.  You will see the table creation code there.

Daniel: You will see in the process.php file there is a basic insert into redis happening.  The Docker compose already took care of spinning up the connection, and the Dockerfile installs the client so all you have to do is use it.

Michael: You will see in the index.php an ajax call to the server when you click the submit button.  That is how you can update the screen without reloading the page.  You will need to modify the page to make it serve movie recommendations.

We need to talk about how we want the data to be passed back and forth.  Specifically, when we store data in the database, 'how' it is represented is important because it impacts how we query and parse the strings that come out of it.