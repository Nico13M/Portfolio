<?php
/*
Plugin Name: Mon Compteur de Visite
Description: Un plugin pour compter les visites sur votre site.
Version: 1.0
Author: Martinez Nicolas
*/

// Fonction pour incrémenter le compteur de visite
function increment_visitor_count()
{
    $count = get_option('visitor_count', 0);
    $count++;
    update_option('visitor_count', $count);
}

// Action pour appeler la fonction d'incrémentation 
// lors de la visite du site
add_action('wp', 'increment_visitor_count');

// Shortcode pour afficher le compteur de visite dans le contenu
function visitor_count_shortcode()
{
    ob_start();
    display_visitor_count_to_page();
    return ob_get_clean();
}

add_shortcode('visitor_count', 'visitor_count_shortcode');

// Fonction pour afficher le compteur de visite total
function display_total_visitor_count()
{
    $total_count = get_option('visitor_count', 0);
    echo '<h3>Nombre de visites total depuis le début : 
    <span style="color: red;">' . $total_count . '</span></h3>';
}

// Fonction pour afficher le compteur de visite dans le contenu de la page
function display_visitor_count_to_page()
{
    $total_count = get_option('visitor_count', 0);
    echo '<p>Nombre de visites depuis le début : <span style="color: red;">' . $total_count . '</span></p>';
}

// Fonction pour afficher le compteur de visite et le tableau de statistiques
function display_visitor_count()
{
    if (is_admin()) {
        echo '<div class="wrap"><h1>Compteur de Visite</h1>';
        display_total_visitor_count();
        
        $total_count = get_option('visitor_count', 0);

        echo '<h3>Statistiques</h3>';
        display_statistics_table($total_count);

        echo '</div>';
    }
}

function display_statistics_table($total_count)
{
    $periods = array(
        '1 journée' => 'visitor_count_one_day',
        '1 semaine' => 'visitor_count_one_week',
        '1 mois' => 'visitor_count_one_month',
        '1 an' => 'visitor_count_one_year'
    );

    echo '<table class="widefat">
            <thead>
                <tr>
                    <th>Période</th>
                    <th>Nombre de visites</th>
                </tr>
            </thead>
            <tbody>';

    foreach ($periods as $period => $option_name) {
        $count = get_option($option_name, $total_count);
        echo '<tr>
                <td>' . $period . '</td>
                <td>' . $count . '</td>
              </tr>';
    }

    echo '</tbody>
          </table>';
}

// Action pour ajouter le menu personnalisé au tableau de bord
function add_visitor_count_menu()
{
    add_menu_page(
        'Compteur de Visite',
        'Compteur de Visite',
        'manage_options',
        'visitor_count_menu',
        'display_visitor_count',
        'dashicons-chart-bar',
        60
    );
}

add_action('admin_menu', 'add_visitor_count_menu');

// Action pour afficher le compteur de visite dans le tableau de bord
function add_visitor_count_to_dashboard()
{
    wp_add_dashboard_widget('visitor_count_dashboard', 'Compteur de Visite', 'display_visitor_count_dashboard');
}

function display_visitor_count_dashboard()
{
    $count = get_option('visitor_count', 0);
    echo '<p>Nombre de visites : ' . $count . '</p>';
    
}

add_action('wp_dashboard_setup', 'add_visitor_count_to_dashboard');
