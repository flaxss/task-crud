<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Register</title>
</head>
<body>
    <div class="container form bg-light col-md-4">
        <form action="{{ route('add.task') }}" method="POST">
            @csrf
            <div>
                <label class="form-label" for="task">Task</label>
                <input class="form-control" type="text" id="task" name="task">
            </div>
            <div>
                <label class="form-label" for="description">Description</label>
                <input class="form-control" type="text" id="description" name="description">
            </div>
            <div>
                <label class="form-label" for="difficulty">Difficulty</label>
                <input class="form-control" type="text" id="difficulty" name="difficulty">
            </div>
            <div>
                <label class="form-label" for="priority">Priority</label>
                <input class="form-control" type="text" id="priority" name="priority">
            </div>
            <button class="mt-2 btn btn-dark">Add Task</button>
        </form>
    </div>
</body>
</html>