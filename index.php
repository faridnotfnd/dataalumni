<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Alumni</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins';
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            overflow-x: hidden;
        }

        ul {
            list-style: none;
        }

        a {
            text-decoration: none;
        }

        .navigation {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 35px;
            max-width: 1070px;
            width: 100%;
            margin: auto;
        }

        .menu {
            display: flex;
            justify-content: center;
            flex: 1;
        }

        .menu li a {
            padding: 3px 10px;
            margin: 0 15px;
            color: #3b3b3b;
            font-weight: 500;
            letter-spacing: 0.5px;
            transition: all ease 0.3s;
        }

        .logo {
            font-size: 1.4rem;
            font-weight: 600;
            letter-spacing: 1px;
            color: #202020;
            margin-right: auto;
        }

        .menu li a:hover,
        .menu .active {
            transition: all ease 0.3s;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .content {
            padding: 40px;
        }

        .img-fluid {
            margin-left: 650px;
        }

        .col-lg-7 {
            max-width: 500px;
            margin-bottom: 400px;
        }
    </style>
</head>

<body>
    <nav class="navigation">
        <a href="index.html" class="logo">Data Alumni</a>
        <!-- menu -->
        <ul class="menu">
            <li><a href="">Home</a></li>
            <li><a href="input.php">input</a></li>
            <li><a href="data_alumni.php">result</a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="row align-items-center bg-light col-xxl-10 mx-auto py-4 content">
            <div class="col-lg-5">
                <div class="lc-block mb-4">
                    <img class="img-fluid shadow"
                        src="https://images.unsplash.com/photo-1525004866327-07739b938272?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MTZ8fGJ1aWxkaW5nfGVufDB8Mnx8fDE2MzQ1NTA4MDc&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=480&amp;h=480"
                        alt="Photo by Kaloyan Draganov">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="lc-block mb-4">
                    <div editable="rich">
                        <h1 class="rfs-30 fw-bold">Lorem ipsum dolor sit amet</h1>
                    </div>
                </div>
                <div class="lc-block mb-4">
                    <div editable="rich">
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et metus id ligula
                            malesuada placerat sit</p>
                    </div>
                </div>
                <div class="lc-block">
                    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.min.js"></script>
</body>

</html>