<?php include(__DIR__ . '/index.inc.php'); ?>

<?php
$title = 'Aliens Abducted me';
include(__DIR__ . '../../templates/head.php');
?>

<body>
    <div class="container">

        <div class="row">

            <div class="col-xs-12">
                <h2>Aliens Abducted Me</h2>

                <p>Welcome, have you had an encounter with extraterrestrials? Were you abducted?
                    Have you seen my abducted dog, Fang? <a href="../report/report.php">Report it here!</a>
                </p>

            </div>

            <div class="col-xs-12">
                <table class="table table-striped">
                    <thead>
                        <th>Actions</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Fang Spotted</th>
                        <th>When it Happened</th>
                        <th>How Long</th>
                        <th>How Many</th>
                    </thead>
                    <tbody>
                        <?php foreach ($rows as $item) { ?>

                            <tr>
                                <td>
                                    <span>
                                        <a href="">Edit</a>
                                    </span>
                                    <span>
                                        <a href="../delete/delete.php?abduction_id=<?php echo $item['abduction_id']; ?>">
                                            Delete
                                        </a>
                                    </span>
                                </td>
                                <td><?php echo $item['first_name']; ?> </td>
                                <td><?php echo $item['last_name']; ?> </td>
                                <td><?php echo $item['email']; ?> </td>
                                <td><?php echo $item['fang_spotted']; ?> </td>
                                <td><?php echo $item['when_it_happened']; ?> </td>
                                <td><?php echo $item['how_long']; ?> </td>
                                <td><?php echo $item['how_many']; ?> </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>