<div class="header-home-page">
    <div class="content-wrapper">
        <div class="content">
            <div class="header">
                <div id="logo">
                    <img src="\intechtest\themes\front\images\static\logo.png" alt="logo.png">
                </div>

                <div id="mainmenu">
                    <div class="phone">
                        <i class="icon-phone"></i>
                        (800)508-2265
                    </div>

                    <div class="navigation">
                        <?php
                        $this->widget( 'zii.widgets.CMenu', array(
                            'items'=>array(
                                array('label' => 'Home', 'url' => array( '#' ) ),
                                array('label' => 'About', 'url' => array( '#', 'view' => 'about' ) ),
                                array('label' => 'Contact', 'url' => array( '#' ) ),
                                array('label' => 'Login', 'url' => array( '#' ) ),
                                array('label' => 'Logout ('.Yii::app()->user->name.')', 'url' => array( '#' ) )
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
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </h2>

                        <div class="text">
                            Etiam ac sodales orci, id tristique magna.
                            <br/>
                            Etiam sit amet lacus eu diam faucibus mattis. Nam convallis lobortis sapien, et consequat volutpat in.
                        </div>

                        <div class="button">
                            <div>
                                <input type="submit" name="submit" value="Submit"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="banner-category">
                    <div class="header-category">
                        Please select what kind of do you prefer
                        <i class="icon-arrow-down"></i>
                    </div>

                    <div class="other-categories-listing">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="icon-right-arrow"></i>
                                    <span>Popular industries</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-right-arrow"></i>
                                    <span>Olympic games</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-right-arrow"></i>
                                    <span>Live Healthy</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-right-arrow"></i>
                                    <span>Vegetables</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-right-arrow"></i>
                                    <span>Popular industries</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-right-arrow"></i>
                                    <span>Olympic games</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-right-arrow"></i>
                                    <span>Live Healthy</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-right-arrow"></i>
                                    <span>Vegetables</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-right-arrow"></i>
                                    <span>Popular industries</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-right-arrow"></i>
                                    <span>Olympic games</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-right-arrow"></i>
                                    <span>Live Healthy</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-right-arrow"></i>
                                    <span>Vegetables</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="categories-listing">
                        <ul>
                            <li>
                                <div>
                                    <div class="item-image">
                                        <label for="radio_phone">
                                            <img src="\intechtest\themes\front\images\static\category_phone.jpg" alt="category_phone.jpg">
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
                                                <input type="radio" name="radio" value="" id="radio_phone" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <div class="item-image">
                                        <label for="radio_mp3">
                                            <img src="\intechtest\themes\front\images\static\category_mp3.jpg" alt="category_mp3.jpg">
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
                                                <input type="radio" name="radio" value="" id="radio_mp3" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <div class="item-image">
                                        <label for="radio_tablet">
                                            <img src="\intechtest\themes\front\images\static\category_gps.jpg" alt="category_gps.jpg">
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
                                                <input type="radio" name="radio" value="" id="radio_tablet" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <div class="item-image">
                                        <label for="radio_gps">
                                            <img src="\intechtest\themes\front\images\static\category_phone.jpg" alt="category_phone.jpg">
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
                                                <input type="radio" name="radio" value="" id="radio_gps" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <div class="item-image">
                                        <label for="radio_laptop">
                                            <img src="\intechtest\themes\front\images\static\category_mp3.jpg" alt="category_mp3.jpg">
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
                                                <input type="radio" name="radio" value="" id="radio_laptop" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <div class="item-image">
                                        <label for="radio_camera">
                                            <img src="\intechtest\themes\front\images\static\category_gps.jpg" alt="category_gps.jpg">
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
                                                <input type="radio" name="radio" value="" id="radio_camera" />
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

<div class="content-wrapper">
    <div class="content">
        <div class="images-listing">
            <div class="cycle-slideshow carousel" data-cycle-fx="carousel" data-cycle-timeout="0" data-cycle-slides="> div"
                 data-allow-wrap="false" data-cycle-carousel-fluid="true" data-cycle-next="#next" data-cycle-prev="#prev" data-cycle-carousel-visible="3">
                <div>
                    <div>
                        <a href="#">
                            <img src="\intechtest\themes\front\images\static\slider1.jpg" alt="slider1.jpg">
                        </a>
                    </div>
                </div>

                <div>
                    <div>
                        <a href="#">
                            <img src="\intechtest\themes\front\images\static\slider2.jpg" alt="slider2.jpg">
                        </a>
                    </div>
                </div>

                <div>
                    <div>
                        <a href="#">
                            <img src="\intechtest\themes\front\images\static\slider1.jpg" alt="slider1.jpg">
                        </a>
                    </div>
                </div>

                <div>
                    <div>
                        <a href="#">
                            <img src="\intechtest\themes\front\images\static\slider2.jpg" alt="slider2.jpg">
                        </a>
                    </div>
                </div>

                <div>
                    <div>
                        <a href="#">
                            <img src="\intechtest\themes\front\images\static\slider1.jpg" alt="slider1.jpg">
                        </a>
                    </div>
                </div>
            </div>

            <div class="arrows">
                <a href="#" id="prev">
                    <i class="icon-left-arrow"></i>
                </a>
                <a href="#" id="next">
                    <i class="icon-right-arrow"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!--
<img src="\intechtest\themes\front\images\static\home.jpg" alt="mockup_dropopen.jpg">
-->