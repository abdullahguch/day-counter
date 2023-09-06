<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Days Between Dates Calculator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Day Counter</h2>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="form-group">
                                <label for="date1">Start Date:</label>
                                <input type="date" id="date1" name="date1" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="date2">End Date:</label>
                                <input type="date" id="date2" name="date2" class="form-control" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" name="calculate" class="btn btn-lg btn-primary mt-4 mb-4">Calculate</button>
                            </div>
                        </form>

                        <?php
                        if (isset($_POST['calculate'])) {
                            $date1 = $_POST['date1'];
                            $date2 = $_POST['date2'];

                            $timestamp1 = strtotime($date1);
                            $timestamp2 = strtotime($date2);

                            if ($timestamp1 === false || $timestamp2 === false) {
                                echo '<p class="text-danger mb-1">Invalid date format. Please use yyyy-mm-dd format.</p>';
                            } else {
                                $days = abs(($timestamp2 - $timestamp1) / (60 * 60 * 24));
                                echo '<p class="text-success mb-1">The number of days between the two dates is: ' . $days . ' days</p>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
