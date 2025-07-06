<?php include(__DIR__ . '/report.inc.php'); ?>

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

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="row mb-3">
                <div class="col-sm-6 col-xs-12">
                    <label class="form-label" for="first_name">First Name</label> <span class="text-danger">*</span>
                    <input class="form-control" type="text" name="first_name" value="<?php echo $first_name; ?>">
                    <span class="text-danger">
                        <?php echo $first_name_err; ?>
                    </span>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <label class="form-label" for="last_name">Last Name</label> <span class="text-danger">*</span>
                    <input class="form-control" type="text" name="last_name" value="<?php echo $last_name; ?>" />
                    <span class="text-danger">
                        <?php echo $last_name_err; ?>
                    </span>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-6 col-xs-12">
                    <label class="form-label" for="email">What is your email address? </label> <span class="text-danger">*</span>
                    <input class="form-control" type="text" name="email" value="<?php echo $email; ?>" />
                    <span class="text-danger">
                        <?php echo $email_err; ?>
                    </span>
                </div>

                <div class="col-sm-6 col-xs-12">
                    <label class="form-label" for="when_it_happened">When did it happen? </label> <span class="text-danger">*</span>
                    <input class="form-control" type="date" name="when_it_happened" value="<?php echo $when_it_happened; ?>" />
                    <span class="text-danger">
                        <?php echo $when_it_happened_err; ?>
                    </span>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-6 col-xs-12">
                    <label class="form-label" for="how_long">How long were you gone?</label> <span class="text-danger">*</span>
                    <input class="form-control" type="text" name="how_long" value="<?php echo $how_long; ?>" />
                    <span class="text-danger">
                        <?php echo $how_long_err; ?>
                    </span>
                </div>

                <div class="col-sm-6 col-xs-12">
                    <label class="form-label" for="how_many">How many did you see ?</label> <span class="text-danger">*</span>
                    <input class="form-control" type="text" name="how_many" value="<?php echo $how_many; ?>" />
                    <span class="text-danger">
                        <?php echo $how_many_err; ?>
                    </span>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-6 col-xs-12">
                    <label class="form-label" for="alien_description">Describe them:</label> <span class="text-danger">*</span>
                    <input class="form-control" type="text" name="alien_description" value="<?php echo $alien_description; ?>" />
                    <span class="text-danger">
                        <?php echo $alien_description_err; ?>
                    </span>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <label class="form-label" for="what_they_did">What did they do to you ?</label> <span class="text-danger">*</span>
                    <input class="form-control" type="text" name="what_they_did" value="<?php echo  $what_they_did; ?>">
                    <span class="text-danger">
                        <?php echo $what_they_did_err; ?>
                    </span>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-6 col-xs-12">

                    <label class="form-label" for="fang_spotted"> Have you see my dog fang?</label> <span class="text-danger">*</span>

                    <div class="form-check">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="fang_spotted"
                            value="no"
                            <?php if ($fang_spotted == 'no') echo 'checked';  ?> />
                        <label for="form-check-label">No</label>
                    </div>
                    <div class="form-check">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="fang_spotted"
                            value="yes"
                            <?php if ($fang_spotted == 'yes') echo 'checked'; ?> />
                        <label for="form-check-label"> Yes</label>
                    </div>

                    <span class="text-danger">
                        <?php echo $fang_spotted_err; ?>
                    </span>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <img src="../../assets/images/fang.jpg" alt="Fang">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-6 col-xs-12">
                    <label class="form-label" for="other">Anything else you want to add ?</label>
                    <textarea class="form-control" name="other" id="other"><?php echo $other; ?></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <input class="btn btn-primary" type="submit" name="submit" value="Report an abduction">
                </div>
            </div>
        </form>

        <p class="text-success">
            <?php echo $success_message; ?>
        </p>
        <p class="text-danger">
            <?php echo $error_message; ?>
        </p>
    </div>
</body>

</html>