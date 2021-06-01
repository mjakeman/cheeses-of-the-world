# Cheeses of the World
*By Matthew Jakeman*

A website about cheese 🧀. Created in 2018 for NCEA Level 2 Digital Technologies AS 91370 using PHP and HTML5/CSS3.

![Splash Screen](screenshot.png)

This text document is valid markdown. It provides an overview on how the
website should be set up with a web server to operate correctly.

## Introduction
The website is roughly divided into two main parts:

```
index.php - main website
admin.php - admin portal
```

These two exist seperately of each other, with the exception of one link in the
footer. The admin username and password are 'admin' and 'cheese' respectively,
configurable in 'config.php'.



## Directory Structure
```
docs - Documentation, including Planning Document, Image Log, Concepts, etc
public - Public HTML pages that are served on the web server.
resources - Private PHP files, such as config.php, and templates.
```



## Setting Up The Database

By default, the website is configured to use the default user account installed
with XAMPP and MySQL. It uses "root" as the username, and does not require a
password. To change this, open `resources/config.php` and change the variables
"username" and "password" in the `$config` array. There are also a few other
variables that will need changing based on setup, which are marked below:

```php
$ROOT_URL = "http://localhost/";
// ^ Change this to whatever domain your web server is running on

$config = [
    "db" => [
        "server" => "localhost",
        // ^ Database server
        "dbname" => "cheese_shop",
        // ^ See next section
        "username" => "root",
        // ^ Change to your MySQL Username
        "password" => "",
        // ^ And password
    ],
    // [...]
];
```



### Importing the Database (IMPORTANT)
To import the database, open phpmyadmin (localhost/phpmyadmin), and create a
new, empty database called 'cheese_shop' (Case Sensitive). Under the 'Import' tab,
click 'Browse' and select the file 'cheese_shop.sql'. Wait for the import to complete.
The MySQL Database has now been setup correctly.

Optionally, the database name may be changed in 'config.php', if cheese_shop is unavailable.
Please see the code snippet in the previous section for more information.



## Setting Up PHP
Firstly, point the webserver to the 'public' folder. For example, a
typical Apache configuration might look like:

```
DocumentRoot "D:\cheeses-of-the-world\public"
<Directory "D:\cheeses-of-the-world\public">
```

### Enable File Uploads
Secondly, to use the admin portal for creating new records, enable file uploads.
This step is purely optional, and does not interfere with the functioning of the
website outside of the admin portal, but is recommended.

1. Find PHP's `php.ini` configuration file inside the php directory
of your web server. For example, in XAMPP, this file is located
at `xampp/php/php.ini`.
2. Find the setting 'file_uploads'.
3. Set this equal to 'On'.
4. Find the setting 'upload_max_filesize'.
5. Set it to '2M' for 2MB.
6. The final setting should look like:

```
file_uploads = On
upload_max_filesize = 2M
```
