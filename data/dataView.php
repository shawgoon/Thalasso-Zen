<?php include('../header.php'); ?>
<?php //$title='liste des avis utilisateurs'; ?>
<section>
    <table class="container">    
        <?php $sql = "SELECT * FROM view";
            $listView = $instance->query($sql)->fetchAll();
            ?>
            <h2>Tableau des avis clients</h2>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>N° chambre</th>
                    <th>N° utilisateur</th>
                    <th>N° reservation</th>
                    <th>Note</th>
                    <th>Commentaires</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i=0; $i<count($listView); $i++) { ?>
                    <tr>
                        <td><?php echo $listView[$i]['id_view'];?></td>
                        <td><?php echo $listView[$i]['id_chamber'];?></td>
                        <td><?php echo $listView[$i]['user_id'];?></td>
                        <td><?php echo $listView[$i]['id_reservation'];?></td>
                        <td><?php echo $listView[$i]['mark'];?></td>
                        <td><?php echo $listView[$i]['reviews'];?></td>
                        <td class="action">
                            <form action="http://localhost/Thalasso-Zen/adminUpdateupdateView.php" method="post">
                                <input type="hidden" name="id_view" value="<?php echo $listView[$i]['id_view'] ?>">
                                <button class="tableBtn" type="submit"><i class="fa-solid fa-pen"></i></button>
                            </form>
                            <form action="http://localhost/Thalasso-Zen/adminDelete/deleteView.php" method="post">
                                <input type="hidden" name="id_view" value="<?php echo $listView[$i]['id_view'] ?>">
                                <button class="tableBtn" type="submit"><i class="fa-regular fa-trash-can"></i></button>
                            </form>
                        </td>
                    </tr>
            </tbody>
                <?php } ?>
        </table>
    </section>
    <?php include('../footer.php') ?>