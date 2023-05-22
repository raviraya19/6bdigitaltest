<!-- Hero Section Start Here -->
<section class="hero-section bg-primary-700 text-white">
    <div class="hero-slider">
        <?php if( have_rows('hero_sliders_rpt') ): ?>
            <?php  while( have_rows('hero_sliders_rpt') ) : the_row(); ?>
                <?php 
                    $title = get_sub_field("hero_title");
                    $sub_title = get_sub_field("hero_sub_title");
                    $description = get_sub_field("hero_description");
                    $cta_text = get_sub_field("hero_cta_text");
                    $cta_link = get_sub_field("hero_cta_link");
                    $image = get_sub_field("hero_image");
                ?>
                <div>
                    <div class="grid lg:grid-cols-2 h-screen">
                            <div class="flex items-center text-center h-full w-full px-6 lg:px-0 lg:text-left lg:max-w-xl mx-auto">
                                <div class="pt-32 py-28 lg:py-0">
                                    <?php if(!empty($sub_title)): ?>
                                        <h6 class="font-medium text-base mb-2"><?php echo $sub_title; ?></h6>
                                    <?php endif; ?>
                                    <?php if(!empty($title)): ?>
                                        <h1 class="text-5xl mb-5"><?php echo $title; ?></h1>
                                    <?php endif; ?>
                                    <?php if(!empty($description)): ?>
                                        <p class="max-w-xl">
                                        <?php echo $description; ?>
                                        </p>
                                    <?php endif; ?>
                                    <div class="mt-10">
                                    <?php if(!empty($cta_text)): ?>
                                            <a
                                                href="<?php echo $cta_link['url']; ?>"
                                                class="inline-block rounded-md py-3 px-5 bg-white p-1 text-gray-500 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                                            >
                                            <?php echo $cta_text; ?>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="relative flex-1 min-h-full">
                                <?php if(!empty($image)): ?>
                                    <img
                                    class="h-full lg:absolute inset-0 w-full object-cover"
                                    src="<?php echo $image['url']; ?>"
                                    alt=""
                                    />
                                <?php endif; ?>
                            </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>
<!-- Hero Section End Here -->