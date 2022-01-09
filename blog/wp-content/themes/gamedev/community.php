


<section class="community">
    <div class="container">
        <div class="community__inner">
            <div class="community__soc">
                <?php
                $social = get_field('social', 'options');
                ?>
                <h3>
                    <?php echo $social['title'] ?>
                </h3>
                <div class="community__soc-icons">
                    <?php
                    if( is_array($social['social'])){
                        foreach ($social['social'] as $item) {
                            ?>
                            <div class="community__soc-icon">
                                <a href="<?php echo $item['title'] ?>">
                                    <img src="<?php echo $item['image']['url'] ?>" alt="<?php echo $item['image']['alt'] ?>">
                                </a>
                            </div>
                            <?php
                        }
                        ?>
                        <?php
                    }
                    ?>

                </div>
            </div>

            <div class="community__email">
                <h3>
                    Get the latest updates
                </h3>

                <div class="community__form">
                    <form>
                        <div class="community__form-all js_find_info">
                            <div class="community__form-input">
                                <input type="email" class="js_get_email" placeholder="Enter e-mail">
                            </div>
                            <div class="community__form-btn">
                                <button class="js_get_email_follow">Sign up</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>