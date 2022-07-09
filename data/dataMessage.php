<?php include('../header.php'); ?>
<?php //$title='liste des messages contacts'; ?>
<section>
    <table class="container">    
        <?php $sql = "SELECT * FROM contacts";
            $listMessage = $instance->query($sql)->fetchAll();
            ?>
            <h2>Tableau des messages</h2>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>choix</th>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>email</th>
                    <th>Message</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i=0; $i<count($listMessage); $i++) { ?>
                    <tr>
                        <td><?php echo $listMessage[$i]['id'];?></td>
                        <td><?php echo $listMessage[$i]['choice'];?></td>
                        <td><?php echo $listMessage[$i]['firstname'];?></td>
                        <td><?php echo $listMessage[$i]['name'];?></td>
                        <td><?php echo $listMessage[$i]['email'];?></td>
                        <td><?php echo $listMessage[$i]['message'];?></td>
                        <td class="action">
                            <form action="http://localhost/Thalasso-Zen/adminUpdate/updateMessage.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $listMessage[$i]['id'] ?>">
                                <button class="tableBtn" type="submit"><i class="fa-solid fa-pen"></i></button>
                            </form>
                            <form action="http://localhost/Thalasso-Zen/adminDelete/deleteMessage.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $listMessage[$i]['id'] ?>">
                                <button class="tableBtn" type="submit"><i class="fa-regular fa-trash-can"></i></button>
                            </form>
                        </td>
                    </tr>
            </tbody>
                <?php } ?>
        </table>
    </section>
    <?php include('../footer.php') ?>