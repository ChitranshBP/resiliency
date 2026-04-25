<?php /* Template Name: Blog */ ?>
<?php get_header(); ?>

<main>
    <!-- Hero Section -->
    <section class="relative min-h-[500px] md:h-[60vh] flex items-center justify-center overflow-hidden pt-28 pb-12 md:pt-24 md:pb-0">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0 bg-[#0B2035]">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero_bg.png" alt="Our Blog" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-[#0B2035]/60 md:bg-gradient-to-r md:from-[#0B2035]/75 md:via-[#0B2035]/50 md:to-[#0B2035]/20"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-3xl reveal text-left">
                <div class="flex items-center gap-3 mb-4 sm:mb-6">
                    <span class="h-[2px] w-12 bg-[#23bfe2]"></span>
                    <span class="text-[#23bfe2] text-xs sm:text-sm font-bold tracking-widest uppercase">Insights & Education</span>
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-7xl font-bold text-white tracking-tight leading-tight mb-4 sm:mb-6">
                    Our <span class="text-[#23bfe2] font-light">Blog</span>
                </h1>
                <p class="text-base sm:text-lg md:text-xl text-gray-200 mb-6 sm:mb-10 leading-relaxed font-light max-w-2xl">
                    Expert insights on mental health, Deep TMS therapy, integrative psychiatry, and wellness from the team at Resiliency Mind + Body Medicine.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                    <a href="#articles" class="bg-[#23bfe2] text-[#0B2035] font-bold px-8 py-4 rounded-full text-center transition-all hover:bg-white hover:shadow-[0_10px_30px_rgba(35,191,226,0.3)] shadow-md hover:-translate-y-1 transform flex items-center justify-center gap-2">
                        Read Articles <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="/contact/" class="bg-transparent border border-white/30 text-white font-medium px-8 py-4 rounded-full text-center transition-all hover:bg-white/10 flex items-center justify-center">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Grid Section -->
    <section id="articles" class="py-16 bg-white relative overflow-hidden">
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-[#23bfe2]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-[#0B2035] mb-6">
                    Latest <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#23bfe2] to-[#1da1bf]">Articles</span>
                </h2>
                <p class="text-lg text-gray-600 font-light max-w-2xl mx-auto leading-relaxed">
                    Stay informed with the latest insights on mental health treatments, wellness strategies, and integrative psychiatry.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 reveal">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="group bg-white border border-gray-100 rounded-[2rem] overflow-hidden hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="h-48 overflow-hidden">
                                <?php the_post_thumbnail('medium', array('class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-300')); ?>
                            </div>
                        <?php else : ?>
                            <div class="h-48 bg-gradient-to-br from-[#0B2035] to-[#0B2035]/80 flex items-center justify-center">
                                <i data-lucide="brain" class="w-16 h-16 text-[#23bfe2]/30"></i>
                            </div>
                        <?php endif; ?>
                        <div class="p-8">
                            <?php
                            $categories = get_the_category();
                            if (!empty($categories)) :
                                $cat = $categories[0];
                            ?>
                            <div class="flex items-center gap-3 mb-4">
                                <span class="bg-[#23bfe2]/10 text-[#23bfe2] text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider"><?php echo esc_html($cat->name); ?></span>
                                <span class="text-gray-400 text-sm font-light"><?php echo get_the_date('M j, Y'); ?></span>
                            </div>
                            <?php else : ?>
                            <div class="flex items-center gap-3 mb-4">
                                <span class="text-gray-400 text-sm font-light"><?php echo get_the_date('M j, Y'); ?></span>
                            </div>
                            <?php endif; ?>
                            <h3 class="text-xl font-bold text-[#0B2035] mb-3 group-hover:text-[#23bfe2] transition-colors"><?php the_title(); ?></h3>
                            <p class="text-gray-600 font-light leading-relaxed line-clamp-2 mb-6"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                            <div class="flex items-center gap-2 text-[#23bfe2] font-bold text-sm group-hover:gap-3 transition-all">
                                Read More <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </div>
                        </div>
                    </a>
                <?php endwhile; else : ?>
                    <div class="col-span-full text-center py-16">
                        <p class="text-gray-500 text-lg font-light">No blog posts found. Check back soon for new content.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Newsletter CTA -->
    <section class="py-16 relative overflow-hidden bg-white">
        <div class="absolute inset-0 z-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-[#23bfe2]/10 via-transparent to-transparent"></div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 reveal">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#0B2035] mb-8 leading-tight">
                Stay <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#23bfe2] to-[#1da1bf]">Connected</span>
            </h2>
            <p class="text-xl text-gray-600 mb-12 font-light max-w-2xl mx-auto leading-relaxed">
                Subscribe to our newsletter for the latest insights on mental health, treatment breakthroughs, and wellness tips.
            </p>
            <div class="max-w-lg mx-auto">
                <div class="flex flex-col sm:flex-row gap-4">
                    <input type="email" placeholder="Enter your email address" class="flex-1 px-6 py-4 rounded-full border border-gray-200 focus:outline-none focus:border-[#23bfe2] focus:ring-2 focus:ring-[#23bfe2]/20 text-[#0B2035] font-light">
                    <button class="bg-[#0B2035] hover:bg-[#23bfe2] text-white hover:text-[#0B2035] font-bold px-8 py-4 rounded-full transition-all duration-300 shadow-xl hover:-translate-y-1 hover:shadow-2xl flex items-center justify-center gap-2">
                        Subscribe <i data-lucide="send" class="w-5 h-5"></i>
                    </button>
                </div>
                <p class="text-sm text-gray-400 font-light mt-4">No spam, ever. Unsubscribe anytime.</p>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>