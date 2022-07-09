<?php include('../header.php'); ?>
<?php //$title='liste des chambres'; ?>
<section>
    <table class="container">    
        <?php $sql = "SELECT * FROM chambers";
            $listBedroom = $instance->query($sql)->fetchAll();
            ?>
            <h2>Tableau des chambres</h2>
            <thead>
                <tr>
                    <th>N° de chambre</th>
                    <th>Style de chambre</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i=0; $i<count($listBedroom); $i++) { ?>
                    <tr>
                        <td><?php echo $listBedroom[$i]['chambers_id'];?></td>
                        <td><?php echo $listBedroom[$i]['chamber_style'];?></td>
                        <td class="action">
                            <form action="http://localhost/Thalasso-Zen/adminUpdateupdateBedroom.php" method="post">
                                <input type="hidden" name="chambers_id" value="<?php echo $listBedroom[$i]['chambers_id'] ?>">
                                <button class="tableBtn" type="submit"><i class="fa-solid fa-pen"></i></button>
                            </form>
                            <form action="http://localhost/Thalasso-Zen/adminDelete/deleteBedroom.php" method="post">
                                <input type="hidden" name="chambers_id" value="<?php echo $listBedroom[$i]['chambers_id'] ?>">
                                <button class="tableBtn" type="submit"><i class="fa-solid fa-hand-holding-medical"></i></button>
                            </form>
                        </td>
                    </tr>
            </tbody>
                <?php } ?>
        </table>
    </section>
    <?php include('../footer.php') ?>