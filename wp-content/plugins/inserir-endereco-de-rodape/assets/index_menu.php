<?php
    function dates()
    {
        add_menu_page(
            "Inserir endereço",
            "Inserir endereço",
            "manage_options",
            "dates_form",
            "dates_page",
            "dashicons-location",
            10
        );

    }

    function dates_page()
    {
        ?>
            <div class="wrap">
            <div id="icon-options-general" class="icon32"></div>
            <?php settings_errors(); ?>
       
            <form method="post" action="options.php" enctype="multipart/form-data">
                <?php
                    settings_fields("dates_form");
                    do_settings_sections("dates_form");
                    submit_button();
                ?>          
            </form>
        </div>
        <?php
    }
    add_action("admin_menu", "dates");

    function front_form(){

        add_settings_section("dates_form", "", "style_front_form", "dates_form");
        register_setting("dates_form", "cep");    
        register_setting("dates_form", "logradouro");
        register_setting("dates_form", "bairro");    
        register_setting("dates_form", "cidade");    
        register_setting("dates_form", "uf");    
    }

    function style_front_form(){
        
        include('form_dates.php');
    }

    add_action("admin_init", "front_form");
    

    