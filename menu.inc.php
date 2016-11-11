<tr class="logo" >        <td class="cote">&nbsp;</td>

        <th class="logo" style="text-align: center" scope="col"><img src="pictures/Logo.png" width="504px" height="207px"  alt="Logo"/></th>        <td class="cote">&nbsp;</td>

    </tr>
    <tr class="menu">
        <td class="cote">&nbsp;</td>
        <td style="text-align: center">
            <nav class="nav">
                <a class="btn btn-danger" type="button" href="index.php">Accueil</a>
                <a class="btn btn-danger" type="button" href="chambres.php">Nos chambres</a>
                <a class="btn btn-danger" type="button" href="livredor.php">Livre d'Or</a>
                <?php if (!isset($_COOKIE["token"])): ?>
                    <a class="btn btn-danger" type="button" href="connexion.php">Connexion</a>
                <?php else: ?>
                    <a class="btn btn-danger" type="button" href="reservationList.php">Mes réservations</a>
                    <a class="btn btn-danger" type="button" href="deconnexion.php">Déconnexion</a>
                <?php endif ?>
                <a id="btnManagement" class="btn btn-danger" type="button" href="management.php">Management</a></nav></td>
        <td class="cote">&nbsp;</td>
    </tr>
    <tr>        <td class="cote">&nbsp;</td>
        <td class="cote">&nbsp;</td>
        <td class="cote">&nbsp;</td>
</tr>
