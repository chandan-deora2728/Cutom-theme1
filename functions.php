<?php 
register_nav_menus(
    array('primary-menu'=>'Top Menu')
);
add_theme_support('post-thumbnails');
add_theme_support('custom-header');


register_sidebar(

    array(
        'name' => 'Sidebar Location',
        'id' => 'sidebar'
    )
    );

add_theme_support('custom-background');

add_post_type_support('page','excerpt');

function create_custom_post_type_projects() {
    register_post_type('projects',
        array(
            'labels'      => array(
                'name'          => __('Projects'),
                'singular_name' => __('Project'),
                'add_new'       => __('Add New'),
                'add_new_item'  => __('Add New Project'),
                'edit_item'     => __('Edit Project'),
                'new_item'      => __('New Project'),
                'view_item'     => __('View Project'),
                'search_items'  => __('Search Projects'),
                'not_found'     => __('No Projects found'),
                'menu_name'     => __('Projects')
            ),
            'public'      => true,
            'has_archive' => true,
            'rewrite'     => array('slug' => 'projects'),
            'menu_icon'   => 'dashicons-portfolio', // optional icon,
            'supports' => ['title', 'editor', 'thumbnail']
        )
    );
}
add_action('init', 'create_custom_post_type_projects');

function cutstom_post_type_news(){
    register_post_type('news',array('labels'=>array(
        'name'=> _("news"),'silbuler_name'=>_("new"),'add_new'=>_('Add New'),'add_new_item'=>_('Add New News')
    ),
    'public'=>true,'has_Archive'=>true,'menu_icon'   => 'dashicons-portfolio', // optional icon,
            'supports' => ['title', 'editor', 'thumbnail']));
}
add_action('init','cutstom_post_type_news');
?>