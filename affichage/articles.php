<?php
include("header.php");
include("../divers/connexion.php");
include("menu.php");
?>


    <div class="articles-contenu">
        <?php
             $sql = "SELECT titre, date, contenu_visuel, contenu_txt, idTagMetier, idAuteur FROM article JOIN auteur ON idAuteur=auteur.id JOIN tagdomaine ON idTagDomaine=tagdomaine.id JOIN tagmetier ON idTagMetier=tagmetier.id";
    $query = $pdo->prepare($sql);
    $query->execute();
    while($line = $query->fetch()) {
        echo
           '<div class="article col-md-3">
                <a href="# ">
                    <!--php -->
                    <div class="contenu">
                        <img src="'.$line['contenu_visuel'].'" />
                        <!--php-->
                        <div class="contenu-contenu">
                            <div class="contenu-date">
                                <p>'.$line['date'].'</p>
                            </div>
                            <h4>'.$line['titre'].'</h4>
                            <!--php-->
                            <div class="resume">
                                <p>'.$line['contenu_txt'].'</p>
                            </div>
                            <div class="btn-suite">
                                <p>lire la suite</p>
                            </div>
                        </div>';
        
         if($line == true){
     
        die(1);
    }
    }
        ?>

            <div class="cache-opaque"></div>
    </div>
    </a>
    </div>


    <div class="article col-md-3 row">
        <a href="# ">
            <!--php -->
            <div class="contenu">
                <img src="../img/Audiovisuel.jpg" />
                <!--php-->
                <div class="contenu-contenu">
                    <div class="contenu-date">
                        <p>date</p>
                    </div>
                    <h4>Lorem ipsum dolor sit amet</h4>
                    <!--php-->
                    <div class="resume">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse feugiat vestibulum dolor, eu euismod turpis tincidunt vel.</p>
                    </div>
                    <div class="btn-suite">
                        <p>lire la suite</p>
                    </div>
                    <!--php-->
                </div>
                <div class="cache-opaque"></div>
            </div>
        </a>
    </div>

    <div class="article col-md-3 row">
        <a href="# ">
            <!--php -->
            <div class="contenu">
                <img src="../img/Audiovisuel.jpg" />
                <!--php-->
                <div class="contenu-contenu">
                    <div class="contenu-date">
                        <p>date</p>
                    </div>
                    <h4>Lorem ipsum dolor sit amet</h4>
                    <!--php-->
                    <div class="resume">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse feugiat vestibulum dolor, eu euismod turpis tincidunt vel.</p>
                    </div>
                    <div class="btn-suite">
                        <p>lire la suite</p>
                    </div>
                    <!--php-->
                </div>
                <div class="cache-opaque"></div>
            </div>
        </a>
    </div>

    <div class="article col-md-3 row">
        <a href="# ">
            <!--php -->
            <div class="contenu">
                <img src="../img/Audiovisuel.jpg" />
                <!--php-->
                <div class="contenu-contenu">
                    <div class="contenu-date">
                        <p>date</p>
                    </div>
                    <h4>Lorem ipsum dolor sit amet</h4>
                    <!--php-->
                    <div class="resume">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse feugiat vestibulum dolor, eu euismod turpis tincidunt vel.</p>
                    </div>
                    <div class="btn-suite">
                        <p>lire la suite</p>
                    </div>
                    <!--php-->
                </div>
                <div class="cache-opaque"></div>
            </div>
        </a>
    </div>

    <div class="article col-md-3 row">
        <a href="# ">
            <!--php -->
            <div class="contenu">
                <img src="../img/Audiovisuel.jpg" />
                <!--php-->
                <div class="contenu-contenu">
                    <div class="contenu-date">
                        <p>date</p>
                    </div>
                    <h4>Lorem ipsum dolor sit amet</h4>
                    <!--php-->
                    <div class="resume">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse feugiat vestibulum dolor, eu euismod turpis tincidunt vel.</p>
                    </div>
                    <div class="btn-suite">
                        <p>lire la suite</p>
                    </div>
                    <!--php-->
                </div>
                <div class="cache-opaque"></div>
            </div>
        </a>
    </div>

    <div class="article col-md-3 row">
        <a href="# ">
            <!--php -->
            <div class="contenu">
                <img src="../img/Audiovisuel.jpg" />
                <!--php-->
                <div class="contenu-contenu">
                    <div class="contenu-date">
                        <p>date</p>
                    </div>
                    <h4>Lorem ipsum dolor sit amet</h4>
                    <!--php-->
                    <div class="resume">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse feugiat vestibulum dolor, eu euismod turpis tincidunt vel.</p>
                    </div>
                    <div class="btn-suite">
                        <p>lire la suite</p>
                    </div>
                    <!--php-->
                </div>
                <div class="cache-opaque"></div>
            </div>
        </a>
    </div>

    </div>
    <?php
include('footer.php');
?>
