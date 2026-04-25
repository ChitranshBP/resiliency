<?php /* Template Name: Single Post */ ?>
<?php get_header(); ?>

<main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <!-- Hero Section -->
    <section class="relative min-h-[500px] md:h-[60vh] flex items-center justify-center overflow-hidden pt-28 pb-12 md:pt-24 md:pb-0">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0 bg-[#0B2035]">
            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-full h-full object-cover">
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero_bg.png" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-full h-full object-cover">
            <?php endif; ?>
            <div class="absolute inset-0 bg-[#0B2035]/60 md:bg-gradient-to-r md:from-[#0B2035]/75 md:via-[#0B2035]/50 md:to-[#0B2035]/20"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-3xl reveal text-left">
                <div class="flex items-center gap-3 mb-4 sm:mb-6">
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                    <span class="text-[#23bfe2] text-xs sm:text-sm font-bold tracking-widest uppercase">
                        <?php
                        $categories = get_the_category();
                        if (!empty($categories)) {
                            echo esc_html($categories[0]->name);
                        } else {
                            echo 'Blog';
                        }
                        ?>
                    </span>
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-tight leading-tight mb-4 sm:mb-6">
                    <?php the_title(); ?>
                </h1>
                <div class="flex items-center gap-4 text-gray-300 text-sm font-light">
                    <span><i data-lucide="calendar" class="w-4 h-4 inline-block mr-1"></i><?php echo get_the_date(); ?></span>
                    <span><i data-lucide="user" class="w-4 h-4 inline-block mr-1"></i><?php the_author(); ?></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Post Content + Sidebar -->
    <section class="py-16 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-12">

                <!-- Main Content -->
                <article class="lg:w-2/3 reveal">
                    <div class="prose prose-lg max-w-none text-gray-600 leading-relaxed">
                        <?php the_content(); ?>
                    </div>

                    <!-- Post Tags -->
                    <?php
                    $tags = get_the_tags();
                    if ($tags) :
                    ?>
                    <div class="mt-8 pt-8 border-t border-gray-100">
                        <div class="flex flex-wrap gap-2">
                            <?php foreach ($tags as $tag) : ?>
                                <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" class="bg-[#23bfe2]/10 text-[#23bfe2] text-sm font-bold px-4 py-2 rounded-full uppercase tracking-wider hover:bg-[#23bfe2] hover:text-white transition-colors">
                                    <?php echo esc_html($tag->name); ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>

                    <!-- Post Navigation -->
                    <nav class="mt-12 pt-8 border-t border-gray-100 flex items-center justify-between">
                        <?php
                        $prev_post = get_previous_post();
                        $next_post = get_next_post();
                        ?>
                        <div class="w-1/2">
                            <?php if ($prev_post) : ?>
                                <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>" class="group flex items-center gap-3 p-4 rounded-2xl border border-gray-100 hover:border-[#23bfe2] transition-all">
                                    <i data-lucide="arrow-left" class="w-5 h-5 text-[#23bfe2] group-hover:-translate-x-1 transition-transform"></i>
                                    <div>
                                        <span class="text-xs text-gray-400 font-light uppercase tracking-wider">Previous</span>
                                        <p class="text-sm font-bold text-[#0B2035] group-hover:text-[#23bfe2] transition-colors truncate max-w-[180px]"><?php echo esc_html($prev_post->post_title); ?></p>
                                    </div>
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="w-1/2 text-right">
                            <?php if ($next_post) : ?>
                                <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>" class="group flex items-center justify-end gap-3 p-4 rounded-2xl border border-gray-100 hover:border-[#23bfe2] transition-all">
                                    <div>
                                        <span class="text-xs text-gray-400 font-light uppercase tracking-wider">Next</span>
                                        <p class="text-sm font-bold text-[#0B2035] group-hover:text-[#23bfe2] transition-colors truncate max-w-[180px]"><?php echo esc_html($next_post->post_title); ?></p>
                                    </div>
                                    <i data-lucide="arrow-right" class="w-5 h-5 text-[#23bfe2] group-hover:translate-x-1 transition-transform"></i>
                                </a>
                            <?php endif; ?>
                        </div>
                    </nav>
                </article>

                <!-- Sidebar -->
                <aside class="lg:w-1/3 reveal">
                    <div class="sticky top-8 space-y-8">

                        <!-- Related Posts -->
                        <div class="bg-gray-50 rounded-3xl p-8 border border-gray-100">
                            <h3 class="text-xl font-bold text-[#0B2035] mb-6">Related Articles</h3>
                            <?php
                            $current_id = get_the_ID();
                            $related_args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 3,
                                'post__not_in' => array($current_id),
                                'orderby' => 'rand',
                            );
                            $related_query = new WP_Query($related_args);
                            if ($related_query->have_posts()) :
                            ?>
                            <div class="space-y-4">
                                <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
                                <a href="<?php the_permalink(); ?>" class="group flex items-start gap-4 p-4 rounded-xl hover:bg-white transition-colors">
                                    <div class="w-12 h-12 rounded-lg bg-[#0B2035] flex items-center justify-center flex-shrink-0">
                                        <i data-lucide="file-text" class="w-5 h-5 text-[#23bfe2]"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-[#0B2035] group-hover:text-[#23bfe2] transition-colors leading-snug"><?php the_title(); ?></p>
                                        <p class="text-xs text-gray-400 font-light mt-1"><?php echo get_the_date(); ?></p>
                                    </div>
                                </a>
                                <?php endwhile; ?>
                            </div>
                            <?php
                            wp_reset_postdata();
                            endif;
                            ?>
                        </div>

                        <!-- CTA Card -->
                        <div class="bg-[#0B2035] rounded-3xl p-8 text-center">
                            <h3 class="text-xl font-bold text-white mb-3">Have Questions?</h3>
                            <p class="text-gray-300 font-light text-sm leading-relaxed mb-6">
                                Our team is here to help you find the right mental health treatment.
                            </p>
                            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="inline-flex items-center gap-2 bg-[#23bfe2] text-[#0B2035] font-bold px-8 py-3 rounded-full text-sm transition-all hover:bg-white hover:-translate-y-1 transform">
                                Contact Us <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </a>
                        </div>

                    </div>
                </aside>

            </div>
        </div>
    </section>

    <?php endwhile; else : ?>
    <!-- No Posts Found -->
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-[#0B2035] mb-4">Post Not Found</h2>
            <p class="text-gray-600 font-light">The post you are looking for does not exist or has been moved.</p>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-flex items-center gap-2 mt-6 bg-[#23bfe2] text-[#0B2035] font-bold px-8 py-4 rounded-full transition-all hover:-translate-y-1 transform">
                Return Home <i data-lucide="arrow-right" class="w-5 h-5"></i>
            </a>
        </div>
    </section>
    <?php endif; ?>
</main>

<?php get_footer(); ?>