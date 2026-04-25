import sys
with open('../index.php', 'r', encoding='utf-8') as f:
    content = f.read()

content = content.replace("<?php include 'header.php'; ?>", "<?php get_header(); ?>")
content = content.replace("<?php include 'footer.php'; ?>", "<?php get_footer(); ?>")

# Fix backslash asset paths (Windows-style paths from source)
content = content.replace('src="assets\\', 'src="<?php echo get_template_directory_uri(); ?>/assets/')
content = content.replace('src="assets/', 'src="<?php echo get_template_directory_uri(); ?>/assets/')

links = [
    ('contact.php', '/contact/'),
    ('tms-therapy.php', '/tms-newportbeach/'),
    ('conditions.php', '/conditions/'),
    ('depression.php', '/tms-for-depression-orange-county/'),
    ('anxiety.php', '/tms-for-anxiety-newport-beach-ca/'),
    ('ocd.php', '/tms-for-ocd-newport-beach-ca/'),
    ('ptsd.php', '/tms-for-ptsd-orange-county/'),
    ('adhd.php', '/adhd-treatment-in-orange-county/'),
    ('bipolar.php', '/tms-for-bipolar-disorder/'),
    ('spravato-therapy.php', '/spravato-treatment-in-orange-county/'),
    ('integrative-psychiatry.php', '/integrative-psychiatry-orange-county/'),
    ('insurance.php', '/insurance/'),
    ('team.php', '/our-team/'),
    ('about.php', '/about-us/'),
    ('blog.php', '/blog/'),
    ('faqs.php', '/faqs/'),
    ('new-patient-form.php', '/new-patient-form/'),
    ('telehealth.php', '/telehealth/'),
    ('reviews.php', '/our-reviews/'),
    ('press-media.php', '/press-media/'),
    ('supplements.php', '/supplements-newport-beach-ca/'),
    ('weight-loss.php', '/weight-loss-in-orange-county/'),
    ('medication-management.php', '/conservative-medication-management/'),
    ('iv-vitamin-therapy.php', '/iv-therapy-newport-beach-ca/'),
    ('accelerated-tms.php', '/accelerated-tms-orange-county/'),
    ('substance-abuse.php', '/tms-for-substance-abuse/'),
    ('autism.php', '/autism-spectrum-support-orange-county/'),
    ('suicidal-ideation.php', '/treatment-for-suicidal-ideation-oragne-county/'),
    ('proliv-rx.php', '/proliv-rx/'),
    ('vns-therapy.php', '/vns-therapy/'),
]

for php, slug in links:
    old = 'href="' + php + '"'
    new = 'href="<?php echo esc_url(home_url("' + slug + '")); ?>"'
    content = content.replace(old, new)

with open('front-page.php', 'w', encoding='utf-8') as f:
    f.write(content)

print('Done! Lines:', content.count('\n') + 1)
# Verify key replacements
checks = [
    ("<?php get_header", "get_header present"),
    ("<?php get_footer", "get_footer present"),
    ("get_template_directory_uri", "template URI present"),
    ("home_url", "home_url present"),
    ("assets/images", "asset paths present"),
]
for pattern, label in checks:
    print(label + ':', pattern in content)
