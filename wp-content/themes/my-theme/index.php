<?php get_header(); ?>

<div class="container">

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    /**
     * La méthode the_post() permet de charger le post courant
     * Un post est un type de contenu, par exemple une actualité ou une page
     **/
    the_post(); 

    /**
     * La méthode the_content() affiche le contenu du post en cours
     * Il s'agit du contenu que vous avez renseigné dans le back-office
     * Il existe d'autres méthodes, par exemple pour afficher le Titre du contenu, on peut utiliser la méthode the_title()
     */
    the_content();
    ?>
    <section class="banniere">
      <div class="desc">
        <p class="rencontre"><?php the_field('banner_baseline'); ?></p>
        <p class="chaine"><b><?php the_field('banner_title_brown'); ?></b></p>
        <p class="question"><b><?php the_field('banner_title_green'); ?></b></p>
        <button class="buttonInscris"><?php the_field('banner_register_link'); ?></button>
      </div>
    
    </section>

    <section class="conference">
      <div class="conf_globlal">
          <h1 class="titre"> <?php the_field('conference_title'); ?></h1>
          <p class="textconf"><?php the_field('conference_content'); ?> </p> 
      </div>
    </section> 
    <section class="programme">
      <img class="banniereProgramme">
      <h1> Au programme</h1>
      <div class="toutProgramme">
        <div class="chaqueProgramme">
          <h2>Les végétaux dans la chaîne alimentaire</h2>
          <ul>
            <li><b> 8:30</b> Introduction par Christophe Fondation</li>
            <li><b> 9:00</b> Wim de Vries Wageningen University</li>
            <li><b> 9:45</b> Benjalin Alles Paris XIII University</li>
            <li><b> 10:15</b> Armando Perez Cueto Copenhagen University</li>
            <li><b> 10:45</b> Cofee break</li>
          </ul>
        </div>
        <div class="chaqueProgramme">
          <h2>Les activités de la Fondation</h2>
          <ul>
            <li><b> 11:15</b> Jacinthe Lafrénière, lauréate du prix de la recherche</li>
            <li><b> 9:00</b> Le projet EPICALIM de la Fondation</li>
            <li><b> 9:45</b> Cérémonie du prix de la recherche</li>
            <li><b> 10:45</b> Lunch</li>
            <li style="height:20px"></li>

            
          </ul>
        </div>
      </div>
      <button>s'inscrire aux rencontres</button>
      <div class=fleur></div>
    </section>

    
    <section class="orateurs">
      <h2 class="titre">Les orateurs <h2>
      <p class="p1">Les personnes suivantes prendront la paroles les unes après les autres</p>
      <div class="lesOrateurs">
        <div class="personne">
          <div class="imgOrateur"></div>
          <h3>Wim de Vries</h3>
          <p> lorem ipsum (6) </p>
          <button class="buttonOrateur">Lire la vidéo</button>
        </div>

        <div class="personne">
          <div class="imgOrateur"></div>
          <h3>Laurence Depezay</h3>
          <p> lorem ipsum (6) </p>
          <button class="buttonOrateur">Lire la vidéo</button>
        </div>

        <div class="personne">
          <div class="imgOrateur"></div>
          <h3>Armando Perez Cueto</h3>
          <p> lorem ipsum (6) </p>
          <button class="buttonOrateur">Lire la vidéo</button>
        </div>

        <div class="personne">
          <div class="imgOrateur"></div>
          <h3>Christophe</h3>
          <p> lorem ipsum (6) </p>
          <button class="buttonOrateur">Lire la vidéo</button>
        </div>

        <div class="personne">
          <div class="imgOrateur"></div>
          <h3>Benjamin Alles</h3>
          <p> lorem ipsum (6) </p>
          <button class="buttonOrateur">Lire la vidéo</button>
        </div>

        <div class="personne">
          <div class="imgOrateur"></div>
          <h3>Jacinthe Lafronière</h3>
          <p> lorem ipsum (6) </p>
          <button class="buttonOrateur">Lire la vidéo</button>
        </div>
      </div>

    </section>




<?php

  }
}
?>

</div>

<?php get_footer(); ?>