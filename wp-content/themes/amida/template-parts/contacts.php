<div class="our-contacts">

    <?php
    if ($contacts = carbon_get_theme_option('crb_contacts')) {
    ?>
        <div class="contacts">
            <h4>Связаться с нами:</h4>
            <div class="messengers-list">
                <?php
                foreach ($contacts as $contact) {
                    $contact_img = wp_get_attachment_image_url($contact['crb_contact_image'], 'full');
                ?>
                    <a href="<?php echo $contact['crb_contact_link'] ?>" class="messengers-list__item">
                        <img src="<?php echo $contact_img ?>" alt="Наши контакты">
                    </a>
                <?php
                }
                ?>
            </div>
        </div>
    <?php
    }
    ?>

    <?php
    if ($socials = carbon_get_theme_option('crb_socials')) {
    ?>
        <div class="socials">
            <h4 class="socials-head">Мы Вконтакте:</h4>
            <div class="socials-list">
                <?php
                foreach ($socials as $social) {
                    $soc_img = wp_get_attachment_image_url($social['crb_social_image'], 'full');
                ?>
                    <a href="<?php echo $social['crb_social_link'] ?>" class="messengers-list__item">
                        <img src="<?php echo $soc_img ?>" alt="Мы в соцсетях">
                    </a>
                <?php
                }
                ?>
            </div>
        </div>
    <?php
    }
    ?>

</div>