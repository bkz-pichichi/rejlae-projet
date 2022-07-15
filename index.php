<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie+edge">
    <title>Accueil</title>

    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="./styl.css">

</head>
<body>
    <?php
        include("header.php");
    ?>

    <div id="baniere">
        <img src="img/baniere.jpg" alt="">
    </div>
    
    <main>
        <div class="container-fluid">
            <div id="quiSommesNous">
                <h3>Qui sommes-nous</h3>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing 
                    Ducimus explicabo ratione blanditiis beatae impedit? 
                    Quis provident incidunt eaque. Nostrum sit consequatur 
                    consequuntur reiciendis optio voluptatum libero fuga cum provident id!
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Ducimus explicabo ratione blanditiis beatae impedit? 
                    Quis provident incidunt eaque. Nostrum sit consequatur 
                    consequuntur reiciendis optio voluptatum libero fuga cum provident id!
                </p>
            </div>

            <div id="mission">
                <h3>Notre mission</h3>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing 
                    Ducimus explicabo ratione blanditiis beatae impedit? 
                    Quis provident incidunt eaque. Nostrum sit consequatur 
                    consequuntur reiciendis optio voluptatum libero fuga cum provident id!
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Ducimus explicabo ratione blanditiis beatae impedit? 
                    Quis provident incidunt eaque. Nostrum sit consequatur 
                    consequuntur reiciendis optio voluptatum libero fuga cum provident id!
                </p>
            </div>

            <div id="sponsor">
                <h3>Nos sponsors</h3>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing 
                    Ducimus explicabo ratione blanditiis beatae impedit? 
                    Quis provident incidunt eaque. Nostrum sit consequatur 
                    consequuntur reiciendis optio voluptatum libero fuga cum provident id!
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Ducimus explicabo ratione blanditiis beatae impedit? 
                    Quis provident incidunt eaque. Nostrum sit consequatur 
                    consequuntur reiciendis optio voluptatum libero fuga cum provident id!
                </p>
            </div>

        </div>

        <div id="contacts" style="text-align:center;background-color: rgb(241, 239, 239); padding: 10px 0px" >
            <h3>Contactez-nous</h3>
            <div id="phone" style="font-weight: bold;">
                <i class="glyphicon glyphicon-earphone" style="font-size:40px;"></i>
                <p>
                    Tél: +229 xx xx xx xx
                 </p>
            </div>

            <div id="email" style="font-weight: bold;">
                <i class="glyphicon glyphicon-envelope" style="font-size:40px;"></i>
                <i class="fa fa-envelope-o"></i>
                <p>
                    E-mail: contact@gmail.com
                </p>
            </div>
        </div>
    </main>

    <?php
        include("footer.php");
    ?>
</body>
</html>