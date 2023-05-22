<?php 
    $title = get_field("hero_title");
    $sub_title = get_field("hero_sub_title");
    $description = get_field("hero_description");
    $cta_text = get_field("hero_cta_text");
    $cta_link = get_field("hero_cta_link");
    $image = get_field("hero_image");
?>
<!-- Hero Section Start Here -->
<section class="hero-section bg-primary-700 text-white">
    <div class="hero-slider">
        <div>
 <div class="grid lg:grid-cols-2 h-screen">
            <div class="flex items-center h-full w-full px-6 lg:px-0 lg:max-w-xl mx-auto">
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
       <div>
        <div class="grid lg:grid-cols-2 h-screen">
            <div class="flex items-center h-full w-full px-6 lg:px-0 lg:max-w-xl mx-auto">
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
    </div>
</section>
<!-- Hero Section End Here -->