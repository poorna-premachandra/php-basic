<?php

/*
Superglobals

group of global variables that are accessible from anywhere in a PHP script, including functions and classes.

They are associative arrays that store information about things such as the current request, the server, sessions, cookies and more.

There are nine different superglobals available.

$_GLOBALS           References variables in the global scope

$_SERVER            Contains info about the server such as hostname, file paths, etc

$_GET               Variables passed to the script via query params and GET forms

$_POST              Variables passed to the script via POST forms

$_FILES             Items uploaded to current script

$_COOKIE            Variables passed to script via HTTP cookies

$_SESSION           Session variables available to the script

$_REQUEST           Contains the contents of $_GET, $_POST and $_COOKIE

$_ENV               Variables passed to the current script via environment method
*/



//$_SERVER

//Common server variables
$requestMethod = $_SERVER['REQUEST_METHOD'] ?? '';
echo ($requestMethod); //GET
echo '</br>';

$serverProtocol = $_SERVER['SERVER_PROTOCOL'] ?? '';
echo ($serverProtocol); //HTTP/1.1
echo '</br>';

$serverName = $_SERVER['SERVER_NAME'] ?? '';
echo ($serverName); //localhost
echo '</br>';

$serverPort = $_SERVER['SERVER_PORT'] ?? '';
echo ($serverPort); //8000
echo '</br>';

$serverSoftware = $_SERVER['SERVER_SOFTWARE'] ?? '';
echo ($serverSoftware); //PHP/8.3.3 (Development Server)
echo '</br>';

$serverAdmin = $_SERVER['SERVER_ADMIN'] ?? '';
echo ($serverAdmin); //         This does not show anything since the admin is not configured 
echo '</br>';

$documentRoot = $_SERVER['DOCUMENT_ROOT'] ?? '';
echo ($documentRoot); //Users/poorna/Projects/PHP/php-basic/15.super_globals
echo '</br>';

$scriptFilename = $_SERVER['SCRIPT_FILENAME'] ?? '';
echo ($scriptFilename); //Users/poorna/Projects/PHP/php-basic/15.super_globals/index.php
echo '</br>';

$scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
echo ($scriptName); ///index.php
echo '</br>';

$phpSelf = $_SERVER['PHP_SELF'] ?? '';
echo ($phpSelf); ///index.php
echo '</br>';

$remoteAddr = $_SERVER['REMOTE_ADDR'] ?? '';
echo ($remoteAddr); ///::1
echo '</br>';

$connection = $_SERVER['HTTP_CONNECTION'] ?? '';
echo ($connection); //keep-alive
echo '</br>';

$host = $_SERVER['HTTP_HOST'] ?? '';
echo ($host); //localhost:8000
echo '</br>';

$referer = $_SERVER['HTTP_REFERER'] ?? '';
echo ($referer); //         This does not show anything since we load this page directly (there wasn't any redirections to this page)
echo '</br>';

$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
echo ($userAgent); //Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36
echo '</br>';

$queryString = $_SERVER['QUERY_STRING'] ?? '';
echo ($queryString); //      This does not show anything since URL does not contains any query params
echo '</br>';

$requestUri = $_SERVER['REQUEST_URI'] ?? '';
echo ($requestUri); ///
echo '</br>';



//Environment variables and $_GLOBALS

putenv('DB_HOST=localhost');
putenv('DB_USER=root');

echo getenv('DB_HOST'); //localhost
echo '</br>';
echo getenv('DB_USER'); //root
echo '</br>';

//var_dump(getenv()); //get all env variables

$foo = 'foo_global';

function test()
{
    $foo = 'foo_local';

    echo 'Global variable: ' . $GLOBALS['foo'];
    echo '</br>';

    echo 'Local variable: ' . $foo;
    echo '</br>';
}

test();



//$_GET

// http://localhost:8000/?name=brad
//echo $_GET['name'] ?? ''; //string(4) "brad"

// Be careful; if the user entered something like following it can be a security vulnerability. This will run the Javascript code.
// http://localhost:8000/?name=<script>alert(1);</script>

//A solution would be to wrap it with 'htmlspecialchars'.
echo htmlspecialchars($_GET['name'] ?? '');



//$_POST

//When doing a form submission, we can capture the POST submit event and do something
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $title = htmlspecialchars($_POST['title']) ?? ''; //always remmber to wrap with 'htmlspecialchars' to avoid executing Javascript
    $description = htmlspecialchars($_POST['description']) ?? '';

    //more code..
}



//$_REQUEST (Can use instead of $_GET or $_POST. But don't use this though. Keep using $_GET or $_POST for better readability.)



//$_FILES (Useful when working with file uploads)

/*
<input type="file" id="logo" name="logo"/>
*/

$file = $_FILES['logo'];

if ($file['error'] === UPLOAD_ERR_OK) {

    //Specify where to upload
    $uploadDir = 'uploads/';

    //Check and create directory
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    //Create file name
    $filename = uniqid() . '-' . $file['name'];

    //Specify supported file types
    $allowedExtensions = ['png', 'jpeg'];
    $fileExtension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

    //Check the file type before upload
    if (in_array($fileExtension, $allowedExtensions)) {
        //Upload file
        if (move_uploaded_file($file['tmp_name'], $uploadDir . $file)) {
            echo 'File upload success';
        } else {
            echo 'File upload error. Error: ' . $file['error'];
        }
    } else {
        echo 'Invalid file type';
    }
}



//$_SESSION

session_start(); //always start with this line to use sessions, usually at the begining of the file.

$_SESSION['name'] = 'John'; //create a session with value. a cookie is also created referring this session in the browser.

if (isset($_SESSION['name'])) {
    echo 'Name: ' . $_SESSION['name']; //fetching the value
}

unset($_SESSION['name']); //removing the value

session_destroy(); //destroy the session



//$_COOKIE (holds the values of cookies sent by the client's browser to the server)

setcookie('username', 'jdoe', time() + 3600, '/'); //setting a cookie
//'secure' param means cookie will not be set until the protocol is https
//'httponly' param means cookies will only be accessible via http protocol

$username = $_COOKIE['username'] ?? ''; //accessing the cookie

setcookie('username', '', time() - 3600, '/'); //deleting the cookie (basically we will expire the cookie)
