<?php include('../header.php'); ?>
<?php //$title='liste des réservations'; ?>
<section>
    <table class="container">    
        <?php $sql = "SELECT * FROM reservations";
            $listReservations = $instance->query($sql)->fetchAll();
            ?>
            <h2>Tableau des réservations</h2>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>N° utilisateur</th>
                    <th>N° chambre</th>
                    <th>Nombre de personne</th>
                    <th>Début de séjour</th>
                    <th>Fin de séjour</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i=0; $i<count($listReservations); $i++) { ?>
                    <tr>
                        <td><?php echo $listReservations[$i]['id_reservation'];?></td>
                        <td><?php echo $listReservations[$i]['id_user'];?></td>
                        <td><?php echo $listReservations[$i]['id_chamber'];?></td>
                        <td><?php echo $listReservations[$i]['people_number'];?></td>
                        <td><?php echo $listReservations[$i]['date_start'];?></td>
                        <td><?php echo $listReservations[$i]['date_end'];?></td>
                        <td class="action">
                            <form action="http://localhost/Thalasso-Zen/adminUpdateupdateReservations.php" method="post">
                                <input type="hidden" name="user_id" value="<?php echo $listReservations[$i]['user_id'] ?>">
                                <button class="tableBtn" type="submit"><i class="fa-solid fa-pen"></i></button>
                            </form>
                            <form action="http://localhost/Thalasso-Zen/adminDelete/deleteReservations.php" method="post">
                                <input type="hidden" name="user_id" value="<?php echo $listReservations[$i]['user_id'] ?>">
                                <button class="tableBtn" type="submit"><i class="fa-regular fa-trash-can"></i></button>
                            </form>
                        </td>
                    </tr>
            </tbody>
                <?php } ?>
        </table>
    </section>
    <?php include('../footer.php') ?>