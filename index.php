<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Time Tracker</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Game Time Tracker</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="save.php" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Player Name</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="game_time" class="form-label">Time Taken to Complete the Game</label>
                        <input type="time" class="form-control" id="game_time" name="game_time" required>
                    </div>
                    <div class="mb-3">
                        <label for="game_date" class="form-label">Date of the Game</label>
                        <input type="date" class="form-control" id="game_date" name="game_date" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
