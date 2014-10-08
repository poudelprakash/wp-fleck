<?php
new theme_customizer();

class theme_customizer
{
    public function __construct()
    {   
        add_action( 'customize_register', array(&$this, 'customize_manager_fleck' ));

    }

    

    /**
     * Fleck Theme Customizer manager
     * @param  WP_Customizer_Manager $wp_manager
     * @return void
     */
    public function customize_manager_fleck( $wp_manager )
    {
        $this->home_link_section( $wp_manager );
    }


    public function home_link_section( $wp_manager )
    {

        $wp_manager->add_section( 'jumbotron_links_section', array(
            'title'          => 'Home Page Social Links',
            'priority'       => 35,
        ) );
       // Linkedin
        $wp_manager->add_setting( 'linkedin', array(
            'default'        => 'https://np.linkedin.com/in/poudelprakash/',
        ) );

        $wp_manager->add_control( 'linkedin', array(
            'label'   => 'Your Linkedin profile',
            'section' => 'jumbotron_links_section',
            'type'    => 'text',
            'priority' => 1
        ) );
        // Github
        $wp_manager->add_setting( 'github', array(
            'default'        => 'https://github.com/prakash014/',
        ) );

        $wp_manager->add_control( 'github', array(
            'label'   => 'Your Github profile',
            'section' => 'jumbotron_links_section',
            'type'    => 'text',
            'priority' => 2
        ) );
        // Bitbucket
        $wp_manager->add_setting( 'twitter', array(
            'default'        => 'https://twitter/poudelprakash/',
        ) );

        $wp_manager->add_control( 'twitter', array(
            'label'   => 'Your Twitter profile',
            'section' => 'jumbotron_links_section',
            'type'    => 'text',
            'priority' => 3
        ) );
        // Google Playstore
        $wp_manager->add_setting( 'playstore', array(
            'default'        => 'https://play.google.com/store/apps/developer?id=Prakash+Poudel',
        ) );

        $wp_manager->add_control( 'playstore', array(
            'label'   => 'Your playstore profile',
            'section' => 'jumbotron_links_section',
            'type'    => 'text',
            'priority' => 4
        ) );

        
    }

}

?>