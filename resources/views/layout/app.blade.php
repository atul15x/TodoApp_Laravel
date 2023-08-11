<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="app.css" />
        <title>Todo App</title>
        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    </head>
    <body style="background-color: #23c08d;">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"
                    ><span
                        class="h3 mb-3 font-weight-bold"
                        style="
                            font-family: 'Righteous', cursive;
                            text-shadow: -4px -1px 4px rgba(150, 150, 150, 5);
                            color: #fff;
                            font-size: 1.5rem;
                        "
                        >Todo App</span
                    ></a
                >

            </div>
        </nav>

        <div class="container">@yield('content')</div>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>
