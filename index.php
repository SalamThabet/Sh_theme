 <?php get_header();
 $uri = get_theme_file_uri;
 ?>

<section class="hotels" id="hotels">
    <div class="container">
        <h3>الفنادق الموصى بها</h3>
        <div class="row">

            <?php
            $args = array(
                    'post_type' =>'hotels',
                'posts_per_page' => 3

            );
                $hotel = new WP_Query( $args );

            if ( $hotel->have_posts() ) {

                while ( $hotel->have_posts() ) {
                    $hotel->the_post(); ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <?php echo get_the_post_thumbnail(); ?>
                            <div class="card-block">
                                <h4 class="card-title"><?php the_title(); ?></h4>
                                <p class="card-text"> <?php  the_content(); ?> </p>
                                <a href="#" class="btn btn-primary">حجز</a>
                            </div>
                        </div>
                    </div>
             <?php   }

                wp_reset_postdata();
            } else {
              echo "Sorry No Post";
            }
            ?>

<!--            <div class="col-md-4 mb-4">-->
<!--                <div class="card">-->
<!--                    <img class="img-fluid" src="--><?php //echo $uri('asset/images/2.jpg')?><!--" alt="Card image cap">-->
<!--                    <div class="card-block">-->
<!--                        <h4 class="card-title">فندق الموفمبيك</h4>-->
<!--                        <p class="card-text">هنا نص تجريبي يوصف الخدمةهنا نص تجريبي يوصف الخدمة هنا نص تجريبي يوصف الخدمةهنا نص تجريبي يوصف الخدمة</p>-->
<!--                        <a href="#" class="btn btn-primary">حجز</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-4 mb-4">-->
<!--                <div class="card">-->
<!--                    <img class="img-fluid" src=" --><?php //echo $uri('asset/images/3.jpg') ?><!--" alt="Card image cap">-->
<!--                    <div class="card-block">-->
<!--                        <h4 class="card-title">فندق روتانا</h4>-->
<!--                        <p class="card-text">هنا نص تجريبي يوصف الخدمةهنا نص تجريبي يوصف الخدمة هنا نص تجريبي يوصف الخدمةهنا نص تجريبي يوصف الخدمة </p>-->
<!--                        <a href="#" class="btn btn-primary">حجز</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
</section>

<section class="places" id="places">
    <div class="container">
        <h3>أماكن سياحية</h3>
        <div class="row">
            <div class="col-md-3">
                <img src="<?php echo $uri('asset/images/4.jpg') ?>" class="img-fluid" >
                <a href="#">شرم الشيخ</a>
            </div>

            <div class="col-md-3">
                <img src="<?php echo $uri('asset/images/5.jpg')?>" class="img-fluid" >
                <a href="#">شرم الشيخ</a>
            </div>

            <div class="col-md-3">
                <img src="<?php echo $uri('asset/images/6.jpg')?>" class="img-fluid" >
                <a href="#">شرم الشيخ</a>
            </div>

            <div class="col-md-3">
                <img src="<?php echo $uri('asset/images/7.jpg')?>" class="img-fluid" >
                <a href="#">شرم الشيخ</a>
            </div>

            <div class="col-md-3">
                <img src="<?php echo $uri('asset/images/5.jpg')?>" class="img-fluid" >
                <a href="#">شرم الشيخ</a>
            </div>

            <div class="col-md-3">
                <img src="<?php echo $uri('asset/images/6.jpg')?>" class="img-fluid" >
                <a href="#">شرم الشيخ</a>
            </div>

            <div class="col-md-3">
                <img src="<?php echo $uri('asset/images/7.jpg')?>" class="img-fluid" >
                <a href="#">شرم الشيخ</a>
            </div>

            <div class="col-md-3">
                <img src="<?php echo $uri('asset/images/4.jpg')?>" class="img-fluid" >
                <a href="#">شرم الشيخ</a>
            </div>
        </div>
    </div>
</section>

<section class="services" id="services">
    <div class="container">
        <h3>خدماتنا</h3>
        <div class="row no-gutters">
            <div class="col-md-4">
                <div class="item-offers text-left">
                    <?php
                    $args = array(
                        'post_type' =>'service_post',
                        'posts_per_page' => 6,
                    );
                    $the_services = new WP_Query( $args );

                    if ( $the_services->have_posts() ) {

                        while ( $the_services->have_posts() ) {
                            $the_services->the_post();
                            if ($the_services->current_post % 2 == 0){ ?>
                            <div class="media">
                                <div class="media-body">
                                    <h5 class="mt-0">
                                        <a href=""><?php the_title(); ?></a>
                                    </h5>
                                    <p class="mb-0">
                                        <?php the_content() ?>
                                    </p>
                                </div>
                                <i class="fa fa-plane fa-2x align-self-start mr-3" aria-hidden="true"></i>
                            </div>

                        <?php }}
                        wp_reset_postdata();
                    }else {
                       echo "Sorry, No Post";
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="img-2">
                    <img src="<?php echo $uri('asset/images/offer-img.png')?>" alt="mobile" class="img-fluid">
                </div>
            </div>
            <div class="col-md-4">
                <div class="item-offers">


                    <?php


                    if ( $the_services->have_posts() ) {

                        while ( $the_services->have_posts() ) {
                            $the_services->the_post();
                            if ($the_services->current_post % 2 != 0){
                                ?>
                                <div class="media">
                                    <i class="fa fa-plane fa-2x align-self-start ml-3" aria-hidden="true"></i>
                                    <div class="media-body">
                                        <h5 class="mt-0">
                                            <a href=""><?php the_title(); ?></a>
                                        </h5>
                                        <p class="mb-0">
                                            <?php the_content(); ?>
                                        </p>
                                    </div>
                                </div>

                            <?php
                        }}
                        wp_reset_postdata();
                    } else {
                        echo "Sorry, No Post";
                    }
                    ?>


                </div>
            </div>
        </div>
    </div>
</section>

<section class="offer" id="offer">
    <div class="container">
        <h3>عروض خاصة</h3>
        <div class="item-offer text-center">
            <input id="item-type-all" name="radio-set-1" type="radio" class="item-type-all" checked="checked">
            <label for="item-type-all" class="label-type-all">الكل</label>

            <input id="item-type-1" name="radio-set-1" type="radio" class="item-type-1">
            <label for="item-type-1" class="label-type-1">باريس</label>

            <input id="item-type-2" name="radio-set-1" type="radio" class="item-type-2">
            <label for="item-type-2" class="label-type-2">القاهرة</label>

            <input id="item-type-3" name="radio-set-1" type="radio" class="item-type-3">
            <label for="item-type-3" class="label-type-3">لندن</label>

            <div class="row items">
                <div class="col-md-3 col-sm-6 item item-type-1">
                    <div class="card">
                        <img class="img-fluid" src="<?php echo $uri('asset/images/1.jpg')?>" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title">فندق الديرة</h4>
                            <hr>
                            <ul class="list-unstyled">
                                <li>فندق 5 نجوم</li>
                                <li>فندق 5 نجوم</li>
                                <li>فندق 5 نجوم</li>
                                <li>فندق 5 نجوم</li>
                                <li>فندق 5 نجوم</li>
                            </ul>
                            <hr>
                            <a href="#">احجز الآن</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item item-type-3">
                    <div class="card">
                        <img class="img-fluid" src="<?php echo $uri('asset/images/1.jpg')?>" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title">فندق الديرة</h4>
                            <hr>
                            <ul class="list-unstyled">
                                <li>فندق 5 نجوم</li>
                                <li>فندق 5 نجوم</li>
                                <li>فندق 5 نجوم</li>
                                <li>فندق 5 نجوم</li>
                                <li>فندق 5 نجوم</li>
                            </ul>
                            <hr>
                            <a href="#">احجز الآن</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item item-type-2">
                    <div class="card">
                        <img class="img-fluid" src="<?php echo $uri('asset/images/1.jpg')?>" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title">فندق الديرة</h4>
                            <hr>
                            <ul class="list-unstyled">
                                <li>فندق 5 نجوم</li>
                                <li>فندق 5 نجوم</li>
                                <li>فندق 5 نجوم</li>
                                <li>فندق 5 نجوم</li>
                                <li>فندق 5 نجوم</li>
                            </ul>
                            <hr>
                            <a href="#">احجز الآن</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item item-type-2">
                    <div class="card">
                        <img class="img-fluid" src="<?php echo $uri('asset/images/1.jpg')?>" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title">فندق الديرة</h4>
                            <hr>
                            <ul class="list-unstyled">
                                <li>فندق 5 نجوم</li>
                                <li>فندق 5 نجوم</li>
                                <li>فندق 5 نجوم</li>
                                <li>فندق 5 نجوم</li>
                                <li>فندق 5 نجوم</li>
                            </ul>
                            <hr>
                            <a href="#">احجز الآن</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="said">
    <div class="overlay">
        <div class="container">
            <h3>قالوا عنا</h3>
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="carousel-caption d-md-block">
                            <div class="img-said">
                                <img src="<?php echo $uri('asset/images/9.jpg')?>">
                            </div>
                            <p>
                                <i class="fa fa-quote-right"></i>
                                هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي
                                هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي
                                تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي
                                <i class="fa fa-quote-left"></i>
                            </p>
                            <h4>محمود الأدهم</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption d-md-block">
                            <div class="img-said">
                                <img src="<?php echo $uri('asset/images/9.jpg')?>">
                            </div>
                            <p>
                                <i class="fa fa-quote-right"></i>
                                هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي
                                هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي
                                تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي
                                <i class="fa fa-quote-left"></i>
                            </p>
                            <h4>محمود الأدهم</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption d-md-block">
                            <div class="img-said">
                                <img src="<?php echo $uri('asset/images/9.jpg')?>">
                            </div>
                            <p>
                                <i class="fa fa-quote-right"></i>
                                هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي
                                هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي
                                تجريبي هنا نص تجريبي هنا نص تجريبي هنا نص تجريبي
                                <i class="fa fa-quote-left"></i>
                            </p>
                            <h4>محمود الأدهم</h4>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



<section class="contacts" id="contacts">
    <div class="container">
        <h3 class="mb-5">تواصل معنا</h3>
        <div class="row mb-5">
            <div class="col-md-6">
                <div id="map"></div>
            </div>
            <div class="col-md-6">
                <div class="address">
                    <h4>
                        عنوان الشركة
                    </h4>
                    <ul class="list-unstyled">
                        <li>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            الولايات المتحدة الامريكية ولاية سانفرانسيسكو ميدان الاوبرا
                        </li>
                        <li>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            الامارات العربية المتحدة في منطقة بن راشد
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="form text-center">
            <h4 class="mb-5">
                ارسل لنا رسالة
            </h4>

            <form class="row">
                <div class="form-group col-sm-6">
                    <input type="text" class="form-control" placeholder="الاسم" required>
                </div>
                <div class="form-group col-sm-6">
                    <input type="email" class="form-control" placeholder="البريد الالكترونى" required>
                </div>
                <div class="form-group col-sm-12">
                    <textarea class="form-control" placeholder="الرسالة" required></textarea>
                </div>
                <button type="submit" class="btn">
                    ارسال
                </button>
            </form>
        </div>
    </div>
</section>


<?php get_footer(); ?>

