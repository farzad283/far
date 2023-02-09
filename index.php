<?php
/**
 * Modele index.php représente le modéle par défault du thème
*/
?>

<?php get_header()?>
<nav>
<a href="#">Java</a>
<a href="#">PHP</a>
<a href="#">Wordpress</a>
</nav>
<main>
    <h3>index.php</h3>
<?php 
if (have_posts()):
    while( have_posts()) : the_post();
        the_title('<h1>','</h1>');
        //the_content();
        //the_excerpt();
        echo wp_trim_words(get_the_excerpt(), 4);
    endwhile;
endif;
?>

<section>
    <ul>
        <li>Java Script</li>
        <li>CSS</li>
        <li>HTML</li>
        <li>PHP</li>
    </ul>
    <table border="1">
        <tr>
        <th>Course 1</th>
        <th>Course 2</th>
        <th>Course 3</th>
        </tr>
        <tr>
        <td>25 h</td>
        <td>38h</td>
        <td>60 h</td>
        </tr>
    </table>
</section>
</main>
<?php get_footer(); ?>