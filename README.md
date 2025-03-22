# Poll Site
Poll site built with HTML, CSS and PHP.  
The project is geared towards learning the basics of Model-View-Controller(MVC)👩🏽‍💻 architecture.

```
└── Poll
    └── css
    └── controllers
        └── poll.php
        └── style.css
    └── models
        └── database.php
        └── PageData.php
        └── Poll.php
    └── partials
        └── _footer.php
        └── _header.php
    └── views
        └── page.php
        └── poll-results.php
        └── poll-template.php
    └── .gitignore
    └── index.php
    └── playground.php
    └── README.md
```
## Getting started
Using MySQL or MariaDB
``` sql
CREATE DATABASE playground;

USE playground;

CREATE TABLE poll (
    poll_id INT NOT NULL AUTO_INCREMENT,
    poll_question TEXT,
    yes INT DEFAULT 0,
    no INT DEFAULT 0,
    PRIMARY KEY (poll_id)
);

// inserting a single row of data.
INSERT INTO poll (poll_question) 
VALUES
("Are you familiar with Golang spiced with htmx?")
```
**Author:** Keys🚀