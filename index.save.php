<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Burger Family</title>
        <meta name="description" content="Site dynamique sur les burgers">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font-Awesome CDN -->
        <link href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css" rel="stylesheet" />
        <!-- CSS Bootstrap 3.3.7 -->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <!-- CSS Perso -->
        <link rel="stylesheet" type="text/css" href="vendor/css/myStyle.css">
        <!-- Animate.css -->
        <link rel="stylesheet" type="text/css" href="vendor/css/animate.css">
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Holtwood+One+SC|Lato" rel="stylesheet">

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <div class="container site">
            <h1 class="text-logo"><span class="glyphicon glyphicon-cutlery wow bounceInLeft"></span> Burger Family <span class="glyphicon glyphicon-cutlery wow bounceInRight"></span></h1>

            <?php 
                require ('admin/database.php');

                echo '<nav>';
                    echo '<ul class="nav nav-pills wow bounceInDown">';

                        $bdd = Database::connect();
                        $declare = $bdd->query ( 'SELECT * FROM categories' );
                        $categories = $declare->fetchAll();

                        foreach ( $categories as $category  ) {
                            if ( $category['id'] == 1 ) {
                                echo  '<li role="presentation" class="active"><a href="#' . $category['id'] .'" data-toggle="tab">' . $category['name'] .'</a></li>';
                            } else {
                                echo  '<li role="presentation"><a href="#' . $category['id'] .'" data-toggle="tab">' . $category['name'] .'</a></li>';
                            }
                        }

                    echo '</ul>';
                echo '</nav>';

            ?>


            <div class="tab-content">
                <div class="tab-pane active" id="1">
                    <div class="row">
                        <div class="col-sm-6 col-md-4    wow fadeIn">
                            <div class="thumbnail">
                                <img src="assets/images/m1.png" alt="...">
                                <div class="price wow tada">8.90 €</div>
                                <div class="caption">
                                    <h4>Menu Classic</h4>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <span class="glyphicon glyphicon-info-sign wow tada"></span>
                                        </div>
                                        <div class="col-xs-11">
                                            <p class="text-center">Burger, Salade, Tomate, Cornichon<br /> + Frites + Boisson</p>
                                        </div>
                                    </div>                                    
                                    <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                </div>
                            </div>
                        </div> <!-- Fin menu 1 -->
                        <div class="col-sm-6 col-md-4   wow fadeIn">
                            <div class="thumbnail">
                                <img src="assets/images/m2.png" alt="...">
                                <div class="price wow tada">9.50 €</div>
                                <div class="caption">
                                    <h4>Menu Bacon</h4>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <span class="glyphicon glyphicon-info-sign wow tada"></span>
                                        </div>
                                        <div class="col-xs-11">
                                            <p class="text-center">Burger, Fromage, Bacon, Salade,<br /> Tomate + Frites + Boisson</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                </div>
                            </div>
                        </div> <!-- Fin menu 2 -->
                        <div class="col-sm-6 col-md-4  wow fadeIn">
                            <div class="thumbnail">
                                <img src="assets/images/m3.png" alt="...">
                                <div class="price wow tada">10.90 €</div>
                                <div class="caption">
                                    <h4>Menu Big</h4>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <span class="glyphicon glyphicon-info-sign wow tada"></span>
                                        </div>
                                        <div class="col-xs-11">
                                            <p class="text-center">Double Burger, Fromage, Salade, Cornichon + Frites + Boisson</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                </div>
                            </div>
                        </div> <!-- Fin menu 3 -->
                        <div class="col-sm-6 col-md-4  wow fadeIn">
                            <div class="thumbnail">
                                <img src="assets/images/m4.png" alt="...">
                                <div class="price wow tada">9.90 €</div>
                                <div class="caption">
                                    <h4>Menu Chicken</h4>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <span class="glyphicon glyphicon-info-sign wow tada"></span>
                                        </div>
                                        <div class="col-xs-11">
                                            <p class="text-center">Poulet Frit, Salade, Tomate,<br /> Mayonnaise + Frites + Boisson</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                </div>
                            </div>
                        </div> <!-- Fin menu 4 -->
                        <div class="col-sm-6 col-md-4  wow fadeIn">
                            <div class="thumbnail">
                                <img src="assets/images/m5.png" alt="...">
                                <div class="price wow tada">10.90 €</div>
                                <div class="caption">
                                    <h4>Menu Fish</h4>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <span class="glyphicon glyphicon-info-sign wow tada"></span>
                                        </div>
                                        <div class="col-xs-11">
                                            <p class="text-center">Poisson, Salade, Mayonnaise,<br /> Cornichon + Frites + Boisson</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                </div>
                            </div>
                        </div> <!-- Fin menu 5 -->
                        <div class="col-sm-6 col-md-4  wow fadeIn">
                            <div class="thumbnail">
                                <img src="assets/images/m6.png" alt="...">
                                <div class="price wow tada">11.90 €</div>
                                <div class="caption">
                                    <h4>Menu Double Steak</h4>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <span class="glyphicon glyphicon-info-sign wow tada"></span>
                                        </div>
                                        <div class="col-xs-11">
                                            <p class="text-center">Double Burger, Fromage, Bacon,<br /> Salade, Tomate + Frites + Boisson</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                </div>
                            </div>
                        </div> <!-- Fin menu 6 -->
                    </div> <!-- Fin row -->
                </div> <!-- Fin tab-pane #1 -->
                <div class="tab-pane" id="2">
                    <div class="row">
                        <div class="col-sm-6 col-md-4  wow fadeIn">
                            <div class="thumbnail">
                                <img src="assets/images/b1.png" alt="...">
                                <div class="price wow tada">5.90 €</div>
                                <div class="caption">
                                    <h4>Classic</h4>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <span class="glyphicon glyphicon-info-sign wow tada"></span>
                                        </div>
                                        <div class="col-xs-11">
                                            <p class="text-center">Sandwich: Burger, Salade,<br /> Tomate, Cornichon</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                </div>
                            </div>
                        </div> <!-- Fin burger 1 -->
                        <div class="col-sm-6 col-md-4  wow fadeIn">
                            <div class="thumbnail">
                                <img src="assets/images/b2.png" alt="...">
                                <div class="price wow tada">6.50 €</div>
                                <div class="caption">
                                    <h4>Bacon</h4>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <span class="glyphicon glyphicon-info-sign wow tada"></span>
                                        </div>
                                        <div class="col-xs-11">
                                            <p class="text-center">Sandwich: Burger, Fromage,<br /> Bacon, Salade, Tomate</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                </div>
                            </div>
                        </div> <!-- Fin burger 2 -->
                        <div class="col-sm-6 col-md-4  wow fadeIn">
                            <div class="thumbnail">
                                <img src="assets/images/b3.png" alt="...">
                                <div class="price wow tada">6.90 €</div>
                                <div class="caption">
                                    <h4>Big</h4>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <span class="glyphicon glyphicon-info-sign wow tada"></span>
                                        </div>
                                        <div class="col-xs-11">
                                            <p class="text-center">Sandwich: Double Burger,<br /> Fromage, Salade, Cornichon</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                </div>
                            </div>
                        </div> <!-- Fin burger 3 -->
                        <div class="col-sm-6 col-md-4  wow fadeIn">
                            <div class="thumbnail">
                                <img src="assets/images/b4.png" alt="...">
                                <div class="price wow tada">5.90 €</div>
                                <div class="caption">
                                    <h4>Chicken</h4>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <span class="glyphicon glyphicon-info-sign wow tada"></span>
                                        </div>
                                        <div class="col-xs-11">
                                            <p class="text-center">Sandwich: Poulet Frit,<br /> Salade, Tomate, Mayonnaise</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                </div>
                            </div>
                        </div> <!-- Fin burger 4 -->
                        <div class="col-sm-6 col-md-4  wow fadeIn">
                            <div class="thumbnail">
                                <img src="assets/images/b5.png" alt="...">
                                <div class="price wow tada">6.50 €</div>
                                <div class="caption">
                                    <h4>Menu Fish</h4>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <span class="glyphicon glyphicon-info-sign wow tada"></span>
                                        </div>
                                        <div class="col-xs-11">
                                            <p class="text-center">Sandwich: Poisson, Salade,<br /> Mayonnaise, Cornichon</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                </div>
                            </div>
                        </div> <!-- Fin burger 5 -->
                        <div class="col-sm-6 col-md-4  wow fadeIn">
                            <div class="thumbnail">
                                <img src="assets/images/b6.png" alt="...">
                                <div class="price wow tada">7.50 €</div>
                                <div class="caption">
                                    <h4>Double Steak</h4>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <span class="glyphicon glyphicon-info-sign wow tada"></span>
                                        </div>
                                        <div class="col-xs-11">
                                            <p class="text-center">Sandwich: Double Burger,<br /> Fromage, Bacon, Salade, Tomate</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                </div>
                            </div>
                        </div> <!-- Fin menu 6 -->
                    </div> <!-- Fin row -->
                </div> <!-- Fin tab-pane #2 -->
                <div class="tab-pane" id="3">
                    <div class="row">
                        <div class="col-sm-6 col-md-4  wow fadeIn">
                            <div class="thumbnail">
                                <img src="assets/images/s1.png" alt="...">
                                <div class="price wow tada">3.90 €</div>
                                <div class="caption">
                                    <h4>Frites</h4>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <span class="glyphicon glyphicon-info-sign wow tada"></span>
                                        </div>
                                        <div class="col-xs-11">
                                            <p class="text-center">Pommes de terre<br /> frites</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                </div>
                            </div>
                        </div> <!-- Fin snacks 1 -->
                        <div class="col-sm-6 col-md-4  wow fadeIn">
                            <div class="thumbnail">
                                <img src="assets/images/s2.png" alt="...">
                                <div class="price wow tada">3.40 €</div>
                                <div class="caption">
                                    <h4>Onion Rings</h4>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <span class="glyphicon glyphicon-info-sign wow tada"></span>
                                        </div>
                                        <div class="col-xs-11">
                                            <p class="text-center">Rondelles<br /> d'oignon frits</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                </div>
                            </div>
                        </div> <!-- Fin snacks 2 -->
                        <div class="col-sm-6 col-md-4  wow fadeIn">
                            <div class="thumbnail">
                                <img src="assets/images/s3.png" alt="...">
                                <div class="price wow tada">5.90 €</div>
                                <div class="caption">
                                    <h4>Nuggets</h4>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <span class="glyphicon glyphicon-info-sign wow tada"></span>
                                        </div>
                                        <div class="col-xs-11">
                                            <p class="text-center">Nuggets de<br /> poulet frits</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                </div>
                            </div>
                        </div> <!-- Fin snacks 3 -->
                        <div class="col-sm-6 col-md-4  wow fadeIn">
                            <div class="thumbnail">
                                <img src="assets/images/s4.png" alt="...">
                                <div class="price wow tada">3.50 €</div>
                                <div class="caption">
                                    <h4>Nuggets Fromage</h4>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <span class="glyphicon glyphicon-info-sign wow tada"></span>
                                        </div>
                                        <div class="col-xs-11">
                                            <p class="text-center">Nuggets de<br /> fromage frits</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                </div>
                            </div>
                        </div> <!-- Fin snacks 4 -->
                        <div class="col-sm-6 col-md-4  wow fadeIn">
                            <div class="thumbnail">
                                <img src="assets/images/s5.png" alt="...">
                                <div class="price wow tada">5.90 €</div>
                                <div class="caption">
                                    <h4>Ailes de Poulet</h4>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <span class="glyphicon glyphicon-info-sign wow tada"></span>
                                        </div>
                                        <div class="col-xs-11">
                                            <p class="text-center">Ailes de<br /> poulet Barbecue</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                </div>
                            </div>
                        </div> <!-- Fin snacks 5 -->
                        <div class="col-sm-6 col-md-4  wow fadeIn">
                            <div class="thumbnail">
                                <img src="assets/images/s6.png" alt="...">
                                <div class="price wow tada">2.50 €</div>
                                <div class="caption">
                                    <h4>Wrap Poulet</h4>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <span class="glyphicon glyphicon-info-sign wow tada"></span>
                                        </div>
                                        <div class="col-xs-11">
                                            <p class="text-center">Galette enrobé de Poulet, Salade, Tomate, Sauce gruyère</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                </div>
                            </div>
                        </div> <!-- Fin snacks 6 -->
                    </div> <!-- Fin row -->
                </div> <!-- Fin tab-pane #3 -->
                <div class="tab-pane" id="4">
                    <div class="row">
                        <div class="col-sm-6 col-md-4  wow fadeIn">
                            <div class="thumbnail">
                                <img src="assets/images/sa1.png" alt="...">
                                <div class="price wow tada">8.90 €</div>
                                <div class="caption">
                                    <h4>César Poulet Pané</h4>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <span class="glyphicon glyphicon-info-sign wow tada"></span>
                                        </div>
                                        <div class="col-xs-11">
                                            <p class="text-center">Poulet Pané, Salade, Tomate<br /> et la fameuse souce César</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                </div>
                            </div>
                        </div> <!-- Fin salade 1 -->
                        <div class="col-sm-6 col-md-4  wow fadeIn">
                            <div class="thumbnail">
                                <img src="assets/images/sa2.png" alt="...">
                                <div class="price wow tada">8.90 €</div>
                                <div class="caption">
                                    <h4>César Poulet Grillé</h4>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <span class="glyphicon glyphicon-info-sign wow tada"></span>
                                        </div>
                                        <div class="col-xs-11">
                                            <p class="text-center">Poulet Grillé, Salade, Tomate<br /> et la fameuse sauce César</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                </div>
                            </div>
                        </div> <!-- Fin salade 2 -->
                        <div class="col-sm-6 col-md-4  wow fadeIn">
                            <div class="thumbnail">
                                <img src="assets/images/sa3.png" alt="...">
                                <div class="price wow tada">5.90 €</div>
                                <div class="caption">
                                    <h4>Salade light</h4>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <span class="glyphicon glyphicon-info-sign wow tada"></span>
                                        </div>
                                        <div class="col-xs-11">
                                            <p class="text-center">Salade, Tomate, Concombre,<br /> Maïs et Vinaigre balsamique</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                </div>
                            </div>
                        </div> <!-- Fin salade 3 -->
                        <div class="col-sm-6 col-md-4  wow fadeIn">
                            <div class="thumbnail">
                                <img src="assets/images/sa4.png" alt="...">
                                <div class="price wow tada">7.90 €</div>
                                <div class="caption">
                                    <h4>Poulet Pané</h4>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <span class="glyphicon glyphicon-info-sign wow tada"></span>
                                        </div>
                                        <div class="col-xs-11">
                                            <p class="text-center">Poulet Pané, Salade, Tomate<br /> et la sauce de votre choix</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                </div>
                            </div>
                        </div> <!-- Fin salade 4 -->
                        <div class="col-sm-6 col-md-4 wow fadeIn">
                            <div class="thumbnail">
                                <img src="assets/images/sa5.png" alt="...">
                                <div class="price wow tada">7.90 €</div>
                                <div class="caption">
                                    <h4>Poulet Grillé</h4>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <span class="glyphicon glyphicon-info-sign wow tada"></span>
                                        </div>
                                        <div class="col-xs-11">
                                            <p class="text-center">Poulet Grillé, Salade, Tomate<br /> et la sauce de votre choix</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                </div>
                            </div>
                        </div> <!-- Fin salade 5 -->
                    </div> <!-- Fin row -->
                </div> <!-- Fin tab-pane #4 -->
                <div class="tab-pane" id="5">
                    <div class="row">
                        <div class="col-sm-6 col-md-4  wow fadeIn">
                            <div class="thumbnail">
                                <img src="assets/images/bo1.png" alt="...">
                                <div class="price wow tada">1.90 €</div>
                                <div class="caption">
                                    <h4>Coca-Cola</h4>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <span class="glyphicon glyphicon-info-sign wow tada"></span>
                                        </div>
                                        <div class="col-xs-11">
                                            <p class="text-center">Au choix :<br /> Petit, Moyen ou Grand</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                </div>
                            </div>
                        </div> <!-- Fin boisson 1 -->
                        <div class="col-sm-6 col-md-4  wow fadeIn">
                            <div class="thumbnail">
                                <img src="assets/images/bo2.png" alt="...">
                                <div class="price wow tada">1.90 €</div>
                                <div class="caption">
                                    <h4>Coca-Cola Light</h4>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <span class="glyphicon glyphicon-info-sign wow tada"></span>
                                        </div>
                                        <div class="col-xs-11">
                                            <p class="text-center">Au choix :<br /> Petit, Moyen ou Grand</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                </div>
                            </div>
                        </div> <!-- Fin boisson 2 -->
                        <div class="col-sm-6 col-md-4  wow fadeIn">
                            <div class="thumbnail">
                                <img src="assets/images/bo3.png" alt="...">
                                <div class="price wow tada">1.90 €</div>
                                <div class="caption">
                                    <h4>Coca-Cola Zéro</h4>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <span class="glyphicon glyphicon-info-sign wow tada"></span>
                                        </div>
                                        <div class="col-xs-11">
                                            <p class="text-center">Au choix :<br /> Petit, Moyen ou Grand</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                </div>
                            </div>
                        </div> <!-- Fin boisson 3 -->
                        <div class="col-sm-6 col-md-4  wow fadeIn">
                            <div class="thumbnail">
                                <img src="assets/images/bo4.png" alt="...">
                                <div class="price wow tada">1.90 €</div>
                                <div class="caption">
                                    <h4>Fanta</h4>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <span class="glyphicon glyphicon-info-sign wow tada"></span>
                                        </div>
                                        <div class="col-xs-11">
                                            <p class="text-center">Au choix :<br /> Petit, Moyen ou Grand</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                </div>
                            </div>
                        </div> <!-- Fin boisson 4 -->
                        <div class="col-sm-6 col-md-4  wow fadeIn">
                            <div class="thumbnail">
                                <img src="assets/images/bo5.png" alt="...">
                                <div class="price wow tada">1.90 €</div>
                                <div class="caption">
                                    <h4>Sprite</h4>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <span class="glyphicon glyphicon-info-sign wow tada"></span>
                                        </div>
                                        <div class="col-xs-11">
                                            <p class="text-center">Au choix :<br /> Petit, Moyen ou Grand</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                </div>
                            </div>
                        </div> <!-- Fin boisson 5 -->
                        <div class="col-sm-6 col-md-4  wow fadeIn">
                            <div class="thumbnail">
                                <img src="assets/images/bo6.png" alt="...">
                                <div class="price wow tada">1.90 €</div>
                                <div class="caption">
                                    <h4>Nestea</h4>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <span class="glyphicon glyphicon-info-sign wow tada"></span>
                                        </div>
                                        <div class="col-xs-11">
                                            <p class="text-center">Au choix :<br /> Petit, Moyen ou Grand</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                </div>
                            </div>
                        </div> <!-- Fin boisson 6 -->
                    </div> <!-- Fin row -->
                </div> <!-- Fin tab-pane #5 -->
                <div class="tab-pane" id="6">
                    <div class="row">
                        <div class="col-sm-6 col-md-4  wow fadeIn">
                            <div class="thumbnail">
                                <img src="assets/images/d1.png" alt="...">
                                <div class="price wow tada">4.90 €</div>
                                <div class="caption">
                                    <h4>Fondant au Chocolat</h4>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <span class="glyphicon glyphicon-info-sign wow tada"></span>
                                        </div>
                                        <div class="col-xs-11">
                                            <p class="text-center">Au choix :<br /> Chocolat Blanc ou au Lait</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                </div>
                            </div>
                        </div> <!-- Fin dessert 1 -->
                        <div class="col-sm-6 col-md-4  wow fadeIn">
                            <div class="thumbnail">
                                <img src="assets/images/d2.png" alt="...">
                                <div class="price wow tada">2.90 €</div>
                                <div class="caption">
                                    <h4>Muffin</h4>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <span class="glyphicon glyphicon-info-sign wow tada"></span>
                                        </div>
                                        <div class="col-xs-11">
                                            <p class="text-center">Au choix :<br /> Au fruits ou au Chocolat</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                </div>
                            </div>
                        </div> <!-- Fin dessert 2 -->
                        <div class="col-sm-6 col-md-4  wow fadeIn">
                            <div class="thumbnail">
                                <img src="assets/images/d3.png" alt="...">
                                <div class="price wow tada">2.90 €</div>
                                <div class="caption">
                                    <h4>Beignet</h4>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <span class="glyphicon glyphicon-info-sign wow tada"></span>
                                        </div>
                                        <div class="col-xs-11">
                                            <p class="text-center">Au choix :<br /> Au chocolat ou à la vanille</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                </div>
                            </div>
                        </div> <!-- Fin dessert 3 -->
                        <div class="col-sm-6 col-md-4  wow fadeIn">
                            <div class="thumbnail">
                                <img src="assets/images/d4.png" alt="...">
                                <div class="price wow tada">3.90 €</div>
                                <div class="caption">
                                    <h4>Milkshak</h4>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <span class="glyphicon glyphicon-info-sign wow tada"></span>
                                        </div>
                                        <div class="col-xs-11">
                                            <p class="text-center">Au choix :<br /> Fraise, Vanille ou Chocolat</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                </div>
                            </div>
                        </div> <!-- Fin dessert 4 -->
                        <div class="col-sm-6 col-md-4  wow fadeIn">
                            <div class="thumbnail">
                                <img src="assets/images/d5.png" alt="...">
                                <div class="price wow tada">4.90 €</div>
                                <div class="caption">
                                    <h4>Sundae</h4>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <span class="glyphicon glyphicon-info-sign wow tada"></span>
                                        </div>
                                        <div class="col-xs-11">
                                            <p class="text-center">Au choix :<br /> Fraise, Caramel, ou Chocolat</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                </div>
                            </div>
                        </div> <!-- Fin dessert 5 -->
                    </div> <!-- Fin row -->
                </div> <!-- Fin tab-pane #6 -->
                <div class="tab-pane" id="7">
                    <div class="alert alert-warning">
                        <p class="text-center">Toutes les images qui suivent, sont la propriétée de McDonalds. Ici elles sont modifiées afin de coller au site.</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-4  wow fadeIn">
                            <div class="thumbnail">
                                <img src="assets/images/sau1-sauceChinoise.png" alt="...">
                                <div class="price wow tada">0.40 €</div>
                                <div class="caption">
                                    <h4>Sauce Chinoise</h4>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <span class="glyphicon glyphicon-info-sign wow tada"></span>
                                        </div>
                                        <div class="col-xs-11">
                                            <p class="text-center">Délicieuse sauce chinoise<br /> qui éveillera vos babines</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                </div>
                            </div>
                        </div> <!-- Fin sauce 1 -->
                        <div class="col-sm-6 col-md-4  wow fadeIn">
                            <div class="thumbnail">
                                <img src="assets/images/sau2-sauceMoutarde.png" alt="...">
                                <div class="price wow tada">0.50 €</div>
                                <div class="caption">
                                    <h4>Sauce Moutarde</h4>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <span class="glyphicon glyphicon-info-sign wow tada"></span>
                                        </div>
                                        <div class="col-xs-11">
                                            <p class="text-center">Délicieuse sauce moutarde <br /> qui donnera du peps à vos aliments</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                </div>
                            </div>
                        </div> <!-- Fin sauce 2 -->
                        <div class="col-sm-6 col-md-4  wow fadeIn">
                            <div class="thumbnail">
                                <img src="assets/images/sau3-sauceBarbecue.png" alt="...">
                                <div class="price wow tada">0.50 €</div>
                                <div class="caption">
                                    <h4>Sauce Barbecue</h4>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <span class="glyphicon glyphicon-info-sign wow tada"></span>
                                        </div>
                                        <div class="col-xs-11">
                                            <p class="text-center">Délicieuse sauce barbecue.<br />Sensation de plaisir garanti</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                </div>
                            </div>
                        </div> <!-- Fin sauce 3 -->
                        <div class="col-sm-6 col-md-4  wow fadeIn">
                            <div class="thumbnail">
                                <img src="assets/images/sau4-sauceCreamy.png" alt="...">
                                <div class="price wow tada">0.60 €</div>
                                <div class="caption">
                                    <h4>Sauce Crème</h4>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <span class="glyphicon glyphicon-info-sign wow tada"></span>
                                        </div>
                                        <div class="col-xs-11">
                                            <p class="text-center">Délicieuse sauce crème<br />Explosion de saveur en perspective.</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                </div>
                            </div>
                        </div> <!-- Fin sauce 4 -->
                        <div class="col-sm-6 col-md-4  wow fadeIn">
                            <div class="thumbnail">
                                <img src="assets/images/sau5-sauceCurry.png" alt="...">
                                <div class="price wow tada">0.40 €</div>
                                <div class="caption">
                                    <h4>Sauce Curry</h4>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <span class="glyphicon glyphicon-info-sign wow tada"></span>
                                        </div>
                                        <div class="col-xs-11">
                                            <p class="text-center">Délicieuse sauce curry,<br />quelle épice fabuleuse</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                </div>
                            </div>
                        </div> <!-- Fin sauce 5 -->
                    </div> <!-- Fin row -->
                </div> <!-- Fin tab-pane #7 -->
                <footer>
                    <span class="glyphicon glyphicon-log-in glyphLogin"></span>
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <ul>
                                <li><a href="admin/index.php" id="askLogin">Administrer le site.</a></li>
                            </ul>
                        </div>
                    </div>
                </footer>
            </div> <!-- Fin tab-content -->
        </div> <!-- Fin container site -->



        <!-- JQuery -->
        <script type="text/javascript" src="vendor/js/jquery-3.1.1.min.js"></script>
        <!-- Script bootstrap 3.3.7 -->
        <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!-- Script wow -->
        <script src="vendor/js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
        <!-- Script perso -->
        <script type="text/javascript" src="vendor/js/myScript.js"></script>
    </body>
</html>