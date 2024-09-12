<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $details = $_POST['details'];
    $skills = $_POST['skills'];
    $task1 = $_POST['tsk1'];
    $task2 = $_POST['tsk2'];
    $task3 = $_POST['tsk3'];
    $task4 = $_POST['tsk4'];
    $task5 = $_POST['tsk5'];
    $mpm = $_POST['mpm'];
    $db = $_POST['db'];
    $prj = $_POST['prj'];
    $prt = $_POST['prt'];
    $ld = $_POST['ld'];
    $gt = $_POST['gt'];

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Dashboard</title>
    <!-- Add Bootstrap CSS Link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3">
                <h2>Sidebar</h2>
                <ul class="list-group">
                    <li class="list-group-item"><a href="#">Menu 1</a></li>
                    <li class="list-group-item"><a href="#">Menu 2</a></li>
                    <li class="list-group-item"><a href="#">Menu 3</a></li>
                </ul>
                <h2>My Social Profiles</h2>
                <ul class="list-group">
                    <li class="list-group-item"><a href="<?php echo $prt ?>" target="_blank">Google Site</a></li>
                    <li class="list-group-item"><a href="<?php echo $ld ?>" target="_blank">LinkedIn</a></li>
                    <li class="list-group-item"><a href="<?php echo $gt ?>" target="_blank">GitHub</a></li>
                </ul>
            </nav>
            <!-- Main content -->
            <main class="col-md-9">
                <div id="header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h1>Title</h1>
                            </div>
                            <div class="col-md-6">
                                <img src="assets/download.png" alt="" width="52" class="float-right">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="dashboard-item">
                        <div id="about-me" class="section-title">
                            <h2>About Me</h2>

                        </div>
                        <?php echo $details; ?>
                    </div>
                    <div class="dashboard-item">
                        <div id="my-skillset" class="section-title">
                            <h2>My Skillset</h2>
                        </div>
                        <?php echo $skills; ?>


                    </div>
                    <div class="dashboard-item">
                        <div id="assignments" class="section-title">
                            <h2>Assignments</h2>
                        </div>
                        <div class="btn-group">

                            <a href="<?php echo $task1 ?>"><button class="ocean-blue-button gradient-button">Task 1</button></a>
                            <a href="<?php echo $task2 ?>"><button class="sunset-orange-button gradient-button">Task 2</button></a>
                            <a href="<?php echo $task3 ?>"><button class="spring-green-button gradient-button">Task 3</button></a>
                            <a href="<?php echo $task4 ?>"><button class="royal-purple-button gradient-button">Task 4</button></a>
                            <a href="<?php echo $task5 ?>"><button class="ruby-red-button gradient-button">Task 5</button></a>
                            <a href="<?php echo $mpm ?>"> <button class="goldenrod-yellow-button gradient-button">Minor Project Module</button></a>

                            <a href="<?php echo $db ?>"> <button class="spring-green-button gradient-button">Database Module</button></a>
                        </div>
                    </div>
                    <div class="dashboard-item">
                        <div id="project-details" class="section-title">
                            <h2>My Project Details</h2>
                        </div>
                        <?php echo $prj; ?>

                    </div>
                </div>
            </main>
        </div>
    </div>

    <div id="footer">
        <!-- <h3>Footer Title</h3> -->
        <a href="https://github.com/devrajyguru" target="_blank">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2C6.48 2 2 6.48 2 12c0 4.41 2.86 8.13 6.84 9.44.5.09.68-.22.68-.48v-1.68c-2.77.6-3.36-1.34-3.36-1.34-.45-1.14-1.1-1.44-1.1-1.44-.9-.62.07-.61.07-.61 1 .07 1.52 1.01 1.52 1.01 1.09 1.89 2.85 1.35 3.54 1.03.11-.79.43-1.35.78-1.66-2.56-.29-5.25-1.28-5.25-5.71 0-1.26.45-2.3 1.2-3.12-.12-.29-.52-1.46.11-3.05 0 0 .96-.31 3.15 1.18a10.94 10.94 0 0 1 2.88-.39c.98.01 1.97.13 2.88.39 2.19-1.49 3.15-1.18 3.15-1.18.63 1.59.23 2.76.11 3.05.75.82 1.2 1.86 1.2 3.12 0 4.43-2.69 5.42-5.26 5.71.44.38.83 1.14.83 2.29v3.41c0 .27.18.58.69.48C21.14 20.13 24 16.41 24 12c0-5.52-4.48-10-10-10z" fill="#000" />
            </svg>
        </a>
    </div>

    <!-- Add Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>