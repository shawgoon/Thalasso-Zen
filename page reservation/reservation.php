%<?php include('../header.php'); ?>
<style>
    /* changement de css nav */
    /* user & admin */
    #session{
        background: #969494;
    }
    .userUpdate,
    .adminUpdate{
        background: #504646;
        color: #4FF216;
    }
    .userUpdate:hover,
    .adminUpdate:hover{
        background: #5f5858;
    }
    .userUpdate:hover{
        color: white;
    }
    /* public */
    #public{
        background: #504646;
    }
    #public a{
        color: #4FF216;
    }
    #public li:hover{
        background: #5f5858;
        }
</style>
<main>
    <section>
    <div class="sectionReservation">
            <div class="sectionReservationSide">
                <div class="grandTitre">Réservation</div>

                <form action="" method="POST">
                <input type="text">
                <input type="text">
                <select name="chambre" id="">
                    <option value="1">Familly</option>
                    <option value="2">Lover</option>
                    <option value="3">Friend</option>
                </select>
                <input type="tel">
                <input type="date">
                <input type="date">


                </form>
            </div>
        </div>
    </section>
</main>
<style>
    /* section reservation */
.sectionReservation{
    background-color: #505050;
}

.sectionReservationSide{
    width: 90%;
    margin: 0 auto;
    padding-bottom: 5rem;
}

/* section reservation */
.sectionReservation{
    background-color: #505050;
}

.sectionReservationSide{
    width: 90%;
    margin: 0 auto;
    padding-bottom: 5rem;
}

.grandTitre{
    color: #4FF216;
    font-size: 5rem;
    letter-spacing: 1rem;
    text-align: center;
    padding: 3rem 0 5rem 0;
}
</style>
<?php include('../footer.php'); ?>
<style>   
    /* changement de css footer */
footer{
    background: #504646;
    color: #4FF216;
}
footer a{
    color: #4FF216;
}
footer li:hover{
    background: #5f5858;
}
</style>