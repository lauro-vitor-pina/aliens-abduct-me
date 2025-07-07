<?php include(__DIR__ . '/delete.inc.php'); ?>

<html>

<?php
$title = 'Aliens abdcted me - Delete';
require_once(__DIR__ . '../../templates/head.php');
?>

<body>
    <div class="container">

        <div class="row">
            <div class="col-xs-12">
                <h2>Delete</h2>
            </div>
        </div>

        <?php if ($abduction != null) { ?>

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                <input type="hidden" name="abduction_id" value="<?php echo $abduction['abduction_id']; ?>">

                <div class="row">

                    <div class="col-xs-12">
                        <p>
                            Are you sure that you want to delete the following abduction report ?
                        </p>
                    </div>
                    <div class="col-xs-12">
                        <p>
                            <b>First name:</b> <?php echo $abduction['first_name']; ?>
                        </p>
                        <p>
                            <b>Last name:</b> <?php echo $abduction['last_name']; ?>
                        </p>
                        <p>
                            <b>Email:</b> <?php echo $abduction['email']; ?>
                        </p>
                        <p>
                            <b> Have you see my dog fang ? :</b> &nbsp; <?php echo $abduction['fang_spotted']; ?>
                        </p>
                        <p>
                            <b>When it Happened:</b> <?php echo $abduction['when_it_happened']; ?>
                        </p>
                    </div>

                    <div class="col-xs-12">
                        <input type="submit" name="cancel" value="No" class="btn btn-secondary">
                        <input type="submit" name="confirm" value="Yes" class="btn btn-danger">
                    </div>
                </div>
            </form>

        <?php } else { ?>
            <div class="row">
                
                <div class="col-xs-12">
                    <span class="text-success">
                        <?php echo $message_success; ?>
                    </span>
                    <span class="text-danger">
                        <?php echo $message_error; ?>
                    </span>
                </div>
               
                <div class="col-xs-12">
                     <br/>
                    <a href="../index/index.php" class="btn btn-secondary">Back</a>
                </div>

            </div>
        <?php } ?>
    </div>

</body>

</html>