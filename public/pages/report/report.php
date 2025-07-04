<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aliens Abducted Me - Report an Abduction</title>
    <link rel="stylesheet" href="../../assets/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/bootstrap/dist/js/bootstrap.bundle.min.js">
    
    <link rel="icon" href="../../assets/images/fang.jpg" type="image/png">
</head>

<body>

    <div class="container">
        <p>Share your history of alien abduction:</p>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="row mb-3">
                <div class="col-sm-6 col-xs-12">
                    <label class="form-label" for="first_name">First Name</label>
                    <input class="form-control" type="text" name="first_name">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-6 col-xs-12">
                    <label class="form-label" for="last_name">Last Name</label>
                    <input class="form-control" type="text" name="last_name" />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-6 col-xs-12">
                    <label class="form-label" for="email">What is your email address? </label>
                    <input class="form-control" type="text" name="email" />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-6 col-xs-12">
                    <label class="form-label" for="when_it_happened">When did it happen? </label>
                    <input class="form-control" type="text" name="when_it_happened" />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-6 col-xs-12">
                    <label class="form-label" for="how_long">How long were you gone?</label>
                    <input class="form-control" type="text" name="how_long" />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-6 col-xs-12">
                    <label class="form-label" for="how_many">How many did you see ?</label>
                    <input class="form-control" type="text" name="how_many" />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-6 col-xs-12">
                    <label class="form-label" for="alien_description">Describe them:</label>
                    <input class="form-control" type="text" name="alien_description" />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-6 col-xs-12">
                    <label class="form-label" for="what_they_did">What did they do to you ?</label>
                    <input class="form-control" type="text" name="what_they_did">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-4 col-xs-12">

                    <label class="form-label" for="fang_spotted"> Have you see my dog fang?</label>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="fang_spotted" value="no">
                        <label for="form-check-label">No</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="fang_spotted" value="yes" class="form-check-input">
                        <label for="form-check-label"> Yes</label>
                    </div>

                </div>
                <div class="col-sm-4 col-xs-12">
                    <img src="../../assets/images/fang.jpg" alt="Fang">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-6 col-xs-12">
                    <label class="form-label" for="other">Anything else you want to add ?</label>
                    <textarea class="form-control" name="other" id="other"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <input class="btn btn-primary" type="submit" name="submit" value="Report an abduction">
                </div>
            </div>
        </form>
    </div>
</body>

</html>