<div class="header-home-page">
    <div class="content-wrapper">
        <div class="content">
            <div class="header">
                <div id="logo">
                    <a href="<?php echo Yii::app()->baseUrl; ?>">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/static/logo.png" alt="logo.png">
                    </a>
                </div>

                <div id="mainmenu">
                    <div class="phone">
                        <a href="tel:8005082265">
                            <i class="icon-phone"></i>
                            <span>
                                (800)508-2265
                            </span>
                        </a>
                    </div>

                    <div class="navigation">
                        <i class="icon-menu"></i>
                        <?php
                        $this->widget( 'zii.widgets.CMenu', array(
                            'items'=>array(
                                array('label' => 'Home', 'url' => array( '' ), "linkOptions" => array( 'target' => "_blank" ) ),
                                array('label' => 'About', 'url' => array( '' ), "linkOptions" => array( 'target' => "_blank" ) ),
                                array('label' => 'Contact', 'url' => array( '' ), "linkOptions" => array( 'target' => "_blank" ) ),
                                array('label' => 'Login', 'url' => array( '' ), "linkOptions" => array( 'target' => "_blank" ) ),
                                array('label' => 'Logout ('.Yii::app()->user->name.')', 'url' => array( '' ), "linkOptions" => array( 'target' => "_blank" ) )
                            ),
                        ));
                        ?>
                    </div>
                </div>
                <!-- mainmenu -->
            </div>

            <div class="banner-details">
                <div class="banner-text">
                    <div>
                        <h2>
                            <?php echo $pageDetails->name; ?>
                        </h2>

                        <div class="text">
                            <?php echo $pageDetails->description; ?>
                        </div>

                        <div class="button">
                            <div>
                                <input type="submit" name="submit" value="Submit" class="btn_fancybox_home"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="banner-category">
                    <div class="header-category">
                        <input type="text" name="category" value="Please select what kind of do you prefer">
                        <i class="icon-arrow-down"></i>
                    </div>

                    <div class="other-categories-listing">
                        <ul>
                            <li>
                                <a href="#" data-filter="all">
                                    <i class="icon-right-arrow"></i>
                                    <span>All</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-filter="olympic-games">
                                    <i class="icon-right-arrow"></i>
                                    <span>Olympic games</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-filter="live-healthy">
                                    <i class="icon-right-arrow"></i>
                                    <span>Live Healthy</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-filter="vegetables">
                                    <i class="icon-right-arrow"></i>
                                    <span>Vegetables</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-filter="popular-industries">
                                    <i class="icon-right-arrow"></i>
                                    <span>Popular industries</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-filter="olympic-games">
                                    <i class="icon-right-arrow"></i>
                                    <span>Olympic games</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-filter="live-healthy">
                                    <i class="icon-right-arrow"></i>
                                    <span>Live Healthy</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-filter="vegetables">
                                    <i class="icon-right-arrow"></i>
                                    <span>Vegetables</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-filter="popular-industries">
                                    <i class="icon-right-arrow"></i>
                                    <span>Popular industries</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-filter="olympic-games">
                                    <i class="icon-right-arrow"></i>
                                    <span>Olympic games</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-filter="live-healthy">
                                    <i class="icon-right-arrow"></i>
                                    <span>Live Healthy</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-filter="vegetables">
                                    <i class="icon-right-arrow"></i>
                                    <span>Vegetables</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="categories-listing">
                        <ul>
                            <li class="popular-industries all">
                                <div>
                                    <div class="item-image">
                                        <label for="radio_phone">
                                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/static/category_phone.jpg" alt="category_phone.jpg">
                                        </label>
                                    </div>

                                    <div class="item-name">
                                        <label for="radio_phone">
                                            Phone
                                        </label>
                                    </div>

                                    <div class="item-id">
                                        <div class="radio-button">
                                            <div class="checked">
                                                <input type="radio" name="popular-industries" value="" id="radio_phone" checked="checked"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="vegetables all">
                                <div>
                                    <div class="item-image">
                                        <label for="radio_mp3">
                                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/static/category_mp3.jpg" alt="category_mp3.jpg">
                                        </label>
                                    </div>

                                    <div class="item-name">
                                        <label for="radio_mp3">
                                            MP3
                                        </label>
                                    </div>

                                    <div class="item-id">
                                        <div class="radio-button">
                                            <div>
                                                <input type="radio" name="vegetables" value="" id="radio_mp3" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="live-healthy all">
                                <div>
                                    <div class="item-image">
                                        <label for="radio_tablet">
                                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/static/category_gps.jpg" alt="category_gps.jpg">
                                        </label>
                                    </div>

                                    <div class="item-name">
                                        <label for="radio_tablet">
                                            Tablet
                                        </label>
                                    </div>

                                    <div class="item-id">
                                        <div class="radio-button">
                                            <div>
                                                <input type="radio" name="live-healthy" value="" id="radio_tablet" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="olympic-games all">
                                <div>
                                    <div class="item-image">
                                        <label for="radio_gps">
                                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/static/category_phone.jpg" alt="category_phone.jpg">
                                        </label>
                                    </div>

                                    <div class="item-name">
                                        <label for="radio_gps">
                                            GPS
                                        </label>
                                    </div>

                                    <div class="item-id">
                                        <div class="radio-button">
                                            <div>
                                                <input type="radio" name="olympic-games" value="" id="radio_gps" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="popular-industries all">
                                <div>
                                    <div class="item-image">
                                        <label for="radio_laptop">
                                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/static/category_mp3.jpg" alt="category_mp3.jpg">
                                        </label>
                                    </div>

                                    <div class="item-name">
                                        <label for="radio_laptop">
                                            Laptop
                                        </label>
                                    </div>

                                    <div class="item-id">
                                        <div class="radio-button">
                                            <div>
                                                <input type="radio" name="popular-industries" value="" id="radio_laptop" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="vegetables all">
                                <div>
                                    <div class="item-image">
                                        <label for="radio_camera">
                                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/static/category_gps.jpg" alt="category_gps.jpg">
                                        </label>
                                    </div>

                                    <div class="item-name">
                                        <label for="radio_camera">
                                            Camera
                                        </label>
                                    </div>

                                    <div class="item-id">
                                        <div class="radio-button">
                                            <div>
                                                <input type="radio" name="vegetables" value="" id="radio_camera" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $this->renderPartial( "//pages/slidesListing", $this->data ); ?>

<div id="fancybox_home_content" style="display: none;">
    <div>
        <h1>This is a modal window after clicked on Submit</h1>
    </div>
</div>

<!--
<img src="\intechtest\themes\front\images\static\home.jpg" alt="mockup_dropopen.jpg">
-->