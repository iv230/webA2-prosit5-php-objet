<!DOCTYPE html>

<!--####################################
Auteur : Emma Prudent
Date : 2017
Contexte : Prosit Exia CESI - PHP/BDD
#######################################-->

<html>

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/styleConnexion.css" />
        <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
        <title>GOTO Mountains</title>
    </head>

    <body>

    <!-- L'en-tête -->    
    <header>
    <h1><strong>GOTO</strong>mountains</h1>
    </header>

    

    <!-- Le corps -->
    <div id="corps">

        <!-- Le menu -->
         <?php include("menu.php"); ?>
        <div class="container">
            
            
            <section>               
                <div id="container" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form method="post" action="scriptConnexion.php" autocomplete="on">
                                <h1>Connexion</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Pseudo : </label>
                                    <input id="username" name="pseudo" required="required" type="text" placeholder="pseudo"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Mot de passe : </label>
                                    <input id="password" name="motDePasse" required="required" type="password" placeholder="motdepasse" /> 
                                </p>
                            
                                <p class="login button"> 
                                    <input type="submit" value="Connexion" /> 
                                </p>
                                <p class="change_link">
                                    Pas encore inscrit ?
                                    <a href="#toregister" class="to_register">Inscription</a>
                                </p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  method="post" action="scriptInscription.php" autocomplete="on"> 
                                <h1> Inscription </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u" >Pseudo : </label>
                                    <input id="usernamesignup" name="pseudo" required="required" type="text" placeholder="pseudo" />
                                </p>
                        
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p" >Mot de passe : </label>
                                    <input id="passwordsignup" name="motDePasse" required="required" type="password" placeholder="mot de passe"/>
                                </p>
                                
                                <p class="signin button"> 
                                    <input type="submit" value="S'inscrire"/> 
                                </p>
                                <p class="change_link">  
                                    Déjà inscrit ?
                                    <a href="#tologin" class="to_register"> Connexion </a>
                                </p>
                            </form>
                        </div>
                        
                    </div>
                </div>  
            </section>
        </div>

        
    </div>
    
    </body>

</html>