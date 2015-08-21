<?php
/**
	Plugin Name: Chart Plugin
	Description: Plugin to display graph
   	Plugin URI: http://abdellahaithadji.com
	Author: Abdellah Ait hadji
	Author URI: http://abdellahaithadji.com
	License: GPL2
	Version: 1.0.1
**/

/*  Copyright 2015 Abdellah Ait hadji (email : abdel@abdellahaithadji.com).

    This program is free software; you can redistribute it and/or modify.
  
*/

add_action("init", "charts_init");
add_action("add_meta_boxes", "charts_metaboxes");
add_action('wp_enqueue_scripts', 'my_custom_style_admin');
add_action('wp_enqueue_scripts', 'my_custom_script_admin');



function charts_init(){
 

		$labels = array(
			
			"name" => "Chart",
			"singular_name" => "Chart",
			"add_new" => "Ajouter un Chart",
			"add_new_item" => "Ajouter un nouveau Chart",
			"edit_item" => "Editer un Chart",
			"new_item" => "Nouveau Chart",
			"view_item" => "Voir le Chart",
			"search_items" => "Rechercher un Chart",
			"not_found" => "Aucun Chart",
			"not_found_in_trash" => "Aucun Chart dans la corbeille",
			"parent_item_colon" => "",
			"menu_name" => "Charts",	

		);       
                register_post_type("chart", array(
                    "public" => true,
                    "publicly_queryable" => false,
                    "labels" => $labels,
                    "menu_position" => 8,
                    "capability_type" => "post",
                    "supports" => array("item", "thumbnail",)
                ));

}

function charts_metaboxes(){
      
	add_meta_box("charts", "valeur", "charts_metabox", "chart", "normal", "high");
}

function charts_metabox($object){
wp_nonce_field("charts", "charts_nonce");
	?>
	<div class="title-custom-chart">
		<h4>Valeur1</h4>
	</div>
	<div class="title-custom-chart">	
		<input type="text" name="pourcentage"  value="">	
	</div>
<div class="title-custom-chart">
		<h4>Valeur2</h4>
	</div>
	<div class="title-custom-chart">	
		<input type="text" name="pourcentage" style="width:60%;" value="">	
	</div>
<div class="title-custom-chart">
		<h4>Valeur3</h4>
	</div>
	<div class="title-custom-chart">	
		<input type="text" name="pourcentage" style="width:60%;" value="">	
	</div>
<div class="title-custom-chart">
		<h4>Valeur4</h4>
	</div>
	<div class="title-custom-chart">	
		<input type="text" name="pourcentage" style="width:60%;" value="">	
	</div>
<div class="title-custom-chart">
		<h4>Valeur5</h4>
	</div>
	<div class="title-custom-chart">	
		<input type="text" name="pourcentage" style="width:60%;" value="">	
	</div>
<div class="title-custom-chart">
		<h4>Valeur6</h4>
	</div>
	<div class="title-custom-chart">	
		<input type="text" name="pourcentage" style="width:60%;" value="">	
	</div>
<div class="title-custom-chart">
		<h4>Valeur7</h4>
	</div>
	<div class="title-custom-chart">	
		<input type="text" name="pourcentage" style="width:60%;" value="">	
	</div>
	<?php

}

function charts_show($limit = 10){  	
    
    wp_enqueue_style("style", get_stylesheet_uri());    
    
}
function my_custom_style_admin() {
  
 wp_enqueue_style('twentysixty', plugins_url('css/admin-section.css', __FILE__));
}

function my_custom_script_admin() {
  
 wp_enqueue_script('twentysixty', plugins_url('js/Chart.js', __FILE__));
 wp_enqueue_script('twentysixty', plugins_url('js/app.js', __FILE__));
}

?>