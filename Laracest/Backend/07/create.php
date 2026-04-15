<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
</head>

<body>

    <form class="w-75 m-auto my-5" action="handleInsert.php" method="POST">

        <div class="mb-3">
            <label for="first_name" class="form-label">first_name</label>
            <input type="text" name="first_name" class="form-control" id="first_name">
        </div>

        <div class="mb-3">
            <label for="last_name" class="form-label">last_name</label>
            <input type="text" name="last_name" class="form-control" id="last_name">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input type="email" name="email" class="form-control" id="email">
        </div>

        <div class="mb-3">
            <label for="gender" class="form-label">gender</label>
            <input type="text" name="gender" class="form-control" id="gender">
        </div>

        <div class="mb-3">
            <label for="money" class="form-label">money</label>
            <input type="number" name="money" class="form-control" id="money">
        </div>

        <div class="mb-3">
            <label for="city" class="form-label">city</label>
            <input type="text" name="city" class="form-control" id="city">
        </div>

        <div class="mb-3">
            <label for="country" class="form-label">country</label>
            <input type="text" name="country" class="form-control" id="country">
        </div>

        <div class="mb-3">
            <label for="country_code" class="form-label">country_code</label>
            <input type="text" name="country_code" class="form-control" id="country_code">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</body>

</html>