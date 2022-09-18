<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Assignment 1</title>
    <!-- <link rel="stylesheet" href="style.css"> -->

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container shadow-lg my-5 bg-body rounded w-50 p-4 border">
        <form action="handle_form.php" method="post">
            <div class="row mb-3">
                <div class="col">
                    <label for="name" class="form-label fs-5">Name</label>
                    <input name="name" type="text" class="form-control" id="name">

                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="email" class="form-label fs-5">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class=" col">
                    <label for="phone" class="form-label fs-5">Phone #</label>
                    <input type="phone" class="form-control" id="phone" name="phone">
                </div>
            </div>
            <fieldset class="row mb-3">
                <div class="col">
                    <legend class="fs-5">Contact Preferences</legend>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="email" id="by_email" name="contact">
                        <label class="form-check-label" for="by_email">
                            Email
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="phone" id="by_phone" name="contact">
                        <label class="form-check-label" for="by_phone">
                            Phone
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="both" id="by_both" name="contact" checked>
                        <label class="form-check-label" for="by_both">
                            Both
                        </label>
                    </div>
                </div>
            </fieldset>
            <div class="row mb-3">
                <div class="col">
                    <label for="thai" class="form-label fs-5">Thoughts on Thai food?</label>
                    <select class="form-select" name="thai" id="thai">
                        <option value="1">Love it</option>
                        <option value="2">Hate it</option>
                        <option value="3">Never had it</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="comments" class="form-label fs-5">Additional Comments</label>
                    <textarea class="form-control" id="comments" rows="3" name="comments"></textarea>

                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="pwd" class="form-label fs-5">Password</label>
                    <input type="password" class="form-control" id="pwd" name="pwd">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

</body>

</html>