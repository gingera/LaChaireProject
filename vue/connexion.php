<! DOCTYPE html>
    <html>
        <head>
            <title>Connexion</title>
            <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
        </head>
        <body>
            <form action="../index.php" method="POST">
                <label>Adresse mail : </label><input type="text" name="mail" size="30"/><br/>
                <label>Mot de passe : </label><input type="password" name="mdp" size="30"/><br/>
                <SELECT name="Statut">
                    <OPTION VALUE="administrateur">Administrateur</OPTION>
                    <OPTION VALUE="moderateur">Modérateur</OPTION>
                    <OPTION VALUE="nonPorteur">Non porteur</OPTION>
                    <OPTION VALUE="porteur">Porteur de projet</OPTION>                    
                </SELECT><br/>
                <input type="submit" name="submit" value="Connexion">
            </form>
            
        </body>
    </html>