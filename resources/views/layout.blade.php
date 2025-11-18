<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background-color: #f5f6fa;
        }

        /* SIDEBAR */
        .sidebar {
            width: 250px;
            height: calc(100vh - 56px); /* space for navbar */
            position: fixed;
            left: 0;
            top: 56px; /* FIX: start sidebar below navbar */
            background: #fff;
            border-right: 1px solid #e3e3e3;
            padding: 20px 0;
        }

    

        .sidebar .nav-link {
            color: #555;
            padding: 12px 20px;
            transition: 0.2s;
            font-size: 15px;
        }

        .sidebar .nav-link:hover {
            background: #e9ecef;
            border-radius: 8px;
            color: #000;
        }
        .sidebar .nav-link.active {
            background: green;
            color: white;
            border-radius: 8px;
        }

        /* MAIN CONTENT */
        .main-content {
            margin-left: 260px; /* space for sidebar */
            margin-top: 70px;   /* FIX: avoid overlapping navbar */
            padding: 25px;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 22px;
        }
    </style>
</head>

<body>

    <!-- TOP NAVBAR -->
    <nav class="navbar navbar-light bg-light shadow-sm fixed-top">
        <div class="container-fluid">
            <span class="navbar-brand">Student Management System</span>
        </div>
    </nav>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Students</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Teachers</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Courses</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Enrollment</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Payment</a></li>
        </ul>
    </div>

    <!-- MAIN CONTENT -->
    <div class="main-content">
        @yield('content')
    </div>

</body>

</html>
