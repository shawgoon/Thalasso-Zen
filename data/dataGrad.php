<?php include('../header.php'); ?>
<?php //$title='liste des grades utilisateurs'; ?>
<section>
    <table class="container">    
        <?php $sql = "SELECT * FROM users";
            $listUsers = $instance->query($sql)->fetchAll();
            ?>
            <h2>Tableau des grades utilisateurs</h2>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>prénom</th>
                    <th>nom</th>
                    <th>Téléphone</th>
                    <th>email</th>
                    <th>password</th>
                    <th>Grade</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i=0; $i<count($listUsers); $i++) { ?>
                    <tr>
                        <td><?php echo $listUsers[$i]['user_id'];?></td>
                        <td><?php echo $listUsers[$i]['firstname'];?></td>
                        <td><?php echo $listUsers[$i]['name'];?></td>
                        <td><?php echo $listUsers[$i]['phonenumber'];?></td>
                        <td><?php echo $listUsers[$i]['email'];?></td>
                        <td><?php echo $listUsers[$i]['password'];?></td>
                        <td><?php echo $listUsers[$i]['grad_id'];?></td>
                        <td class="action">
                            <form action="http://localhost/Thalasso-Zen/adminUpdate/updateGrad.php" method="post">
                                <input type="hidden" name="user_id" value="<?php echo $listUsers[$i]['user_id'] ?>">
                                <button class="tableBtn" type="submit"><i class="fa-solid fa-pen"></i></button>
                            </form>
                        </td>
                    </tr>
            </tbody>
                <?php } ?>
        </table>
    </section>
    <?php include('../footer.php') ?>