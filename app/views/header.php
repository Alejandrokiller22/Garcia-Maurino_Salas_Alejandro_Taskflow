<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskFlow</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }
        main {
            max-width: 600px;
            margin: 0 auto;
        }
        h2 {
            text-align: center;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        .task-item {
            background: white;
            padding: 10px;
            margin-bottom: 10px;
            border-left: 5px solid transparent;
            border-radius: 4px;
        }
        .completed {
            text-decoration: line-through;
            color: gray;
        }
        .priority-alta {
            border-left-color: red;
        }
        .priority-media {
            border-left-color: orange;
        }
        .priority-baja {
            border-left-color: green;
        }
    </style>
</head>
<body>
<main>
