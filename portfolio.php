<?php require'header.php'; ?>

<main class="main_portfolio">

    <div>
        <ul class="tabs">
            <li class="active"><a href="#pub">Publications</a></li>
            <li><a href="#algo">Algorithmes</a></li>
            <li id="divers"><a href="#">Divers</a></li>
        </ul>
        <div class="tabs-content">
            <div class="tab-content active" id="pub">
                <p>
                    <span class="titre_algo">1. Théoreme du rang et système linéaire</span><br><br>

                    C'est un travail sindé en deux parties : une partie basée sur la détermination du rang 
                    d'une famille de vecteurs, d'une application linéaire, d'une matrice… et d'une autre basée
                    sur la résolution de systèmes linéaires par la méthode de Gauss et les méthodes numériques.
                    <br><br>
                </p>
                <div>
                    <iframe src="fichier/th_rg_sys_lin.pdf" width="100%" height="800px"></iframe><br><br>
                </div>
                <div id="spoiler1">
                    <a class="btn btn-primary" href="#pubs" role="button">Voir plus &raquo;</a>
                    <span class="spoiler-content">
                        <span id="pubs" class="titre_algo">2. Principe de la NAT</span><br><br>
                        <p>
                            Le principe de la <strong>NAT</strong> est une étude sur les adresses IP, qui consiste à 
                            expliciter la façon dont une adresse IP publique parvient à communiquer avec une adresse IP
                            privée et inversement. Ce travail nous propose de découvrir trois parties essentielles :<br><br>
                            - La <strong>NAT</strong> <strong>statique</strong><br>
                            - La <strong>NAT</strong> <strong>dynamique</strong><br>
                            - Les problèmes liés à la <strong>NAT</strong> <strong>dynamique</strong><br><br>
                        </p>
                        <iframe src="fichier/nat.pdf" width="100%" height="500px"></iframe><br><br>
                        
                        <span id="pubs" class="titre_algo">3. La méthode <strong>SCRUM</strong></span><br><br>
                        <p>
                            Dans la gestion de projet moderne, des renouvellements méthodologiques sont mis en place 
                            afin de pouvoir bien organiser les projets, essentiellement des projets informatiques, et 
                            avoir une interaction qualifiée entre les acteurs du projet. Il s'agit des méthodes agiles. 
                            En effet, la méthode <strong>SCRUM</strong> est une méthode agile dont les ressources sont 
                            actualisées régulièrement et a comme principe de base, de s'apprêter à reorienter le projet 
                            en cas de besoin, pendant son évolution.<br><br>
                        </p>
                        <iframe src="fichier/scrum.pdf" width="100%" height="500px"></iframe><br><br>
                        <iframe src="fichier/Quiz_TOIWILOU_HASSANE.pdf" width="100%" height="500px"></iframe><br><br>
                    </span>
                </div>  
            </div>

            <div class="tab-content" id="algo"> 
		<p>
		 
                    L'objectif de cette partie est de mettre au point des algorithmes réutilisables pour des 
                    différents cas afin de faciliterer le codage. Il s'agit essentiellement de fonctions. 
                    <br><br>

                    <span class="titre_algo">1. Fonction de récupération d'une matrice</span><br><br>

                    Il s'agit d'une fonction qui prend en argument une chaine de caractères, identifie le nombre 
                    de lignes et de colonnes à partir des point-virgules et des virgules, et renvoie une matrice 
                    de dimensions correspondant aux nombre de lignes et de colonnes identifiés.
                </p>
                <div class="container">
                    <div class="slide"><iframe height="1200px" width="100%" src="https://repl.it/@Toiwilou/Matrice?lite=true" scrolling="no" frameborder="no" allowtransparency="true" allowfullscreen="true" sandbox="allow-forms allow-pointer-lock allow-popups allow-same-origin allow-scripts allow-modals"></iframe></div>
                </div>
                <br><br>
                <div id="spoiler2">
                    <a class="btn btn-primary" href="#algos" role="button">Vois plus &raquo;</a>
                    <span class="spoiler-content">
                        <p>
                            <span class="titre_algo">2. Programme voyelles</span></script><br><br>

                            Ici il est question d'un programme qui saisit un mot (de type chaine de caractères),
                            détermine le nombre de voyelles, et affiche ce dernier et les voyelles en question.
                            <br><br>
                        </p>
                        <iframe height="700px" width="100%" src="https://repl.it/@Toiwilou/Voyelles?lite=true" scrolling="no" frameborder="no" allowtransparency="true" allowfullscreen="true" sandbox="allow-forms allow-pointer-lock allow-popups allow-same-origin allow-scripts allow-modals"></iframe><br><br>

                        <p>
                            <span id="algos" class="titre_algo">3. Fonction de vérification d'un réel</span><br><br>

                            C'est une fonction qui prend comme argument un réel, vérifie si ce dernier est 
                            un entier ou pas et renvoie finalement un booléen.<br><br>
                        </p>
                        <iframe height="700px" width="100%" src="https://repl.it/@Toiwilou/IsInt?lite=true" scrolling="no" frameborder="no" allowtransparency="true" allowfullscreen="true" sandbox="allow-forms allow-pointer-lock allow-popups allow-same-origin allow-scripts allow-modals"></iframe><br><br>

                        <p>
			                <span class="titre_algo">4. Fonctions de parité</span></script><br><br>

                            Il s'agit de deux fonctions qui prennent comme argument un réel et renvoie une chaine 
                            de caractères qui donne la parité. L'une d'elles se base sur la division et l'autre 
                            sur un tableau.<br><br>
                        </p>
                        <iframe height="800px" width="100%" src="https://repl.it/@Toiwilou/Parited?lite=true" scrolling="no" frameborder="no" allowtransparency="true" allowfullscreen="true" sandbox="allow-forms allow-pointer-lock allow-popups allow-same-origin allow-scripts allow-modals"></iframe><br><br>
                    </span>
                </div> 
            </div>

            <div class="tab-content" id="diver">
                <p>
                    <a class="btn btn-primary" href="#diver" role="button">Voir plus &raquo;</a>
                </p>
            </div>
        </div>
    </div>

</main>

<?php require'footer.php'; ?>
