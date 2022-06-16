<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>MaxMind Homework Assignment</title>
    <style type="text/css">
        #mesageBox {
            width: 40%;
            margin-left: 300px;
        }

        #wrapper {
            margin-top: 200px;
            z-index: 5;
        }

        #bg {
            position: fixed;
            top: 0;
            left: 0;

            /* Preserve aspet ratio */
            min-width: 100%;
            min-height: 100%;
            z-index: -1;
        }

        #geoHeading,
        #geoIntro {
            color: white;
        }

        #geoIntro {
            font-size: 30px;
        }

        #ip_selector {
            position: relative;
            top: 20px;
            left: 200px;
            font-weight: bold;
        }

        .active {
            display: block;
        }

        .hidden {
            display: none;
        }

        #ip_addressv4,
        #ip_addressv6 {
            font-size: 25px;
        }

        button {
            font-size: 25px !important;
        }
    </style>
</head>

<body>
