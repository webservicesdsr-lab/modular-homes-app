<?php
/**
 * Home Page - Modular Homes
 * Path: /wp-content/themes/nexus-shell-theme/pages/home-page.php
 */

if (!defined('ABSPATH')) {
    exit;
}

$mh_hero_image = wp_get_attachment_image_url(119, 'full');
?>

<link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_directory_uri() . '/pages/home.css'); ?>">

<main id="mh-home" class="mh-home" aria-label="Modular Homes Home Page">
    <section
        class="mh-hero"
        aria-labelledby="mh-hero-title"
        style="background-image:
            linear-gradient(180deg, rgba(247,249,245,0.76) 0%, rgba(247,249,245,0.58) 22%, rgba(247,249,245,0.16) 48%, rgba(247,249,245,0.78) 100%),
            url('<?php echo esc_url($mh_hero_image); ?>');"
    >
        <div class="mh-shell">
            <div class="mh-hero__grid">
                <div class="mh-hero__intro">
                    <p class="mh-eyebrow">CUSTOM MODULAR HOMES · CLEVELAND, TN</p>

                    <h1 id="mh-hero-title">
                        Custom Modular Homes with Finishes Designed Around You
                    </h1>

                    <p class="mh-hero__lead">
                        Explore floor plans, personalize the interior details, and start with a more visual path toward your modular home.
                    </p>

                    <div class="mh-hero__actions">
                        <a class="mh-btn mh-btn--primary" href="#mh-builder-preview">Start Your Design</a>
                        <a class="mh-btn mh-btn--ghost" href="#mh-how-it-works">See How It Works</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mh-hero-bridge" aria-label="Customization options carousel">
        <div class="mh-shell">
            <div class="mh-showcase-wrap">
                <button class="mh-showcase-arrow mh-showcase-arrow--prev" type="button" aria-label="Previous slide">
                    <span aria-hidden="true">‹</span>
                </button>

                <div class="mh-showcase" id="mh-showcase">
                    <div class="mh-showcase__track" id="mh-showcase-track">
                        <article class="mh-service-card glass glass--soft" data-slide="0">
                            <div class="mh-service-card__media mh-service-card__media--flooring"></div>
                            <div class="mh-service-card__body">
                                <p class="mh-service-card__kicker">Finish Option</p>
                                <h3>Flooring</h3>
                                <p>Upgrade the feel of the home with warmer, cleaner, higher-end flooring selections.</p>
                                <div class="mh-service-tags">
                                    <span>LVP</span>
                                    <span>Tile</span>
                                    <span>Wood Look</span>
                                </div>
                            </div>
                        </article>

                        <article class="mh-service-card glass glass--strong" data-slide="1">
                            <div class="mh-service-card__media mh-service-card__media--kitchen"></div>
                            <div class="mh-service-card__body">
                                <p class="mh-service-card__kicker">Most Requested</p>
                                <h3>Kitchen Customization</h3>
                                <p>Shape the heart of the home with cabinets, countertops, backsplash, lighting, and layout upgrades.</p>
                                <div class="mh-service-tags">
                                    <span>Cabinets</span>
                                    <span>Counters</span>
                                    <span>Backsplash</span>
                                    <span>Lighting</span>
                                </div>
                            </div>
                        </article>

                        <article class="mh-service-card glass glass--soft" data-slide="2">
                            <div class="mh-service-card__media mh-service-card__media--bath"></div>
                            <div class="mh-service-card__body">
                                <p class="mh-service-card__kicker">Upgrade Path</p>
                                <h3>Bathroom Details</h3>
                                <p>Refine comfort and value with tile, vanities, fixtures, mirrors, and finish upgrades.</p>
                                <div class="mh-service-tags">
                                    <span>Tiling</span>
                                    <span>Vanities</span>
                                    <span>Fixtures</span>
                                </div>
                            </div>
                        </article>

                        <article class="mh-service-card glass glass--soft" data-slide="3">
                            <div class="mh-service-card__media mh-service-card__media--paint"></div>
                            <div class="mh-service-card__body">
                                <p class="mh-service-card__kicker">Customization</p>
                                <h3>Paint &amp; Wall Finishes</h3>
                                <p>Bring more personality into the home with curated paint palettes and accent wall direction.</p>
                                <div class="mh-service-tags">
                                    <span>Paint</span>
                                    <span>Accent Walls</span>
                                    <span>Trim</span>
                                </div>
                            </div>
                        </article>

                        <article class="mh-service-card glass glass--soft" data-slide="4">
                            <div class="mh-service-card__media mh-service-card__media--lighting"></div>
                            <div class="mh-service-card__body">
                                <p class="mh-service-card__kicker">House Flipper Energy</p>
                                <h3>Lighting &amp; Fixtures</h3>
                                <p>Add warmth and contrast with pendants, sconces, mirrors, hardware, and fixture packages.</p>
                                <div class="mh-service-tags">
                                    <span>Pendants</span>
                                    <span>Sconces</span>
                                    <span>Hardware</span>
                                </div>
                            </div>
                        </article>

                        <article class="mh-service-card glass glass--soft" data-slide="5">
                            <div class="mh-service-card__media mh-service-card__media--interior"></div>
                            <div class="mh-service-card__body">
                                <p class="mh-service-card__kicker">Full Interior Feel</p>
                                <h3>Interior Styling Direction</h3>
                                <p>Pull the entire space together with coordinated finish packages that feel intentional and elevated.</p>
                                <div class="mh-service-tags">
                                    <span>Modern</span>
                                    <span>Warm</span>
                                    <span>Luxury</span>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <button class="mh-showcase-arrow mh-showcase-arrow--next" type="button" aria-label="Next slide">
                    <span aria-hidden="true">›</span>
                </button>
            </div>

            <div class="mh-showcase-ui" aria-hidden="true">
                <div class="mh-showcase-dots" id="mh-showcase-dots">
                    <button type="button" class="is-active"></button>
                    <button type="button"></button>
                    <button type="button"></button>
                    <button type="button"></button>
                    <button type="button"></button>
                    <button type="button"></button>
                </div>
            </div>

            <div class="mh-hero__seo glass glass--soft">
                <p>
                    Looking for <strong>custom modular homes in Cleveland, TN</strong>? We help homeowners explore
                    modular home options while focusing on the high-value interior finishes, upgrades, and personalized
                    design details that make a home feel truly custom.
                </p>
            </div>
        </div>
    </section>

    <section id="mh-how-it-works" class="mh-section mh-section--intro" aria-labelledby="mh-intro-title">
        <div class="mh-shell">
            <div class="mh-section__heading">
                <p class="mh-section__eyebrow">DESIGN WITH MORE CLARITY</p>
                <h2 id="mh-intro-title">Explore the home first. Personalize the details that matter most.</h2>
                <p>
                    Start with a modular home direction, then move into the finishes, materials, and interior upgrades
                    that shape the final look and feel of the home.
                </p>
            </div>

            <div class="mh-feature-grid">
                <article class="mh-feature glass glass--soft">
                    <h3>Explore Modular Home Options</h3>
                    <p>Start with the layout and overall home style that fits your needs.</p>
                </article>

                <article class="mh-feature glass glass--soft">
                    <h3>Compare Interior Finishes</h3>
                    <p>Review cabinetry, counters, flooring, bathrooms, and material upgrades more visually.</p>
                </article>

                <article class="mh-feature glass glass--soft">
                    <h3>Understand the Price Direction</h3>
                    <p>See how finish decisions can influence the overall starting point of the project.</p>
                </article>

                <article class="mh-feature glass glass--soft">
                    <h3>Move Into Consultation Faster</h3>
                    <p>Arrive with a clearer design direction before speaking with the team.</p>
                </article>
            </div>
        </div>
    </section>

    <section id="mh-builder-preview" class="mh-section mh-builder-preview" aria-labelledby="mh-builder-title">
        <div class="mh-shell">
            <div class="mh-section__heading">
                <p class="mh-section__eyebrow">INTERACTIVE PREVIEW</p>
                <h2 id="mh-builder-title">See the Home. Feel the Finishes. Understand the Price.</h2>
                <p>
                    Instead of making people imagine the process, show them a more visual design studio experience with
                    modular home selections and interior finish decisions that update the estimate in real time.
                </p>
            </div>

            <div class="mh-builder glass glass--strong">
                <div class="mh-builder__media">
                    <div class="mh-builder-stage">
                        <div class="mh-builder-stage__image mh-builder-stage__image--base is-active" data-scene="base"></div>
                        <div class="mh-builder-stage__image mh-builder-stage__image--alt" data-scene="alt"></div>

                        <div class="mh-stage-hotspot mh-stage-hotspot--kitchen glass glass--pill">Kitchen Package</div>
                        <div class="mh-stage-hotspot mh-stage-hotspot--bath glass glass--pill">Bath Upgrade</div>
                        <div class="mh-stage-hotspot mh-stage-hotspot--floor glass glass--pill">Flooring</div>
                    </div>
                </div>

                <div class="mh-builder__panel">
                    <div class="mh-builder-card glass glass--soft">
                        <p class="mh-builder-card__eyebrow">Choose a direction</p>

                        <div class="mh-option-group">
                            <p class="mh-option-group__title">Home Type</p>
                            <div class="mh-option-row">
                                <button type="button" class="mh-select-chip is-active" data-price="0" data-scene-target="base">Modular Ranch</button>
                                <button type="button" class="mh-select-chip" data-price="16000" data-scene-target="alt">Expanded Family Plan</button>
                            </div>
                        </div>

                        <div class="mh-option-group">
                            <p class="mh-option-group__title">Interior Package</p>
                            <div class="mh-option-row">
                                <button type="button" class="mh-select-chip is-active" data-price="0">Standard</button>
                                <button type="button" class="mh-select-chip" data-price="12500">Comfort</button>
                                <button type="button" class="mh-select-chip" data-price="28500">Luxury</button>
                            </div>
                        </div>

                        <div class="mh-option-group">
                            <p class="mh-option-group__title">Finish Focus</p>
                            <div class="mh-toggle-list">
                                <button type="button" class="mh-toggle-item" data-price="6400">
                                    <span>Custom Cabinets</span>
                                    <strong>+$6,400</strong>
                                </button>
                                <button type="button" class="mh-toggle-item" data-price="4200">
                                    <span>Quartz Counters</span>
                                    <strong>+$4,200</strong>
                                </button>
                                <button type="button" class="mh-toggle-item" data-price="3100">
                                    <span>Premium Flooring</span>
                                    <strong>+$3,100</strong>
                                </button>
                            </div>
                        </div>

                        <div class="mh-estimate glass glass--pill">
                            <span>Estimated Starting Point</span>
                            <strong id="mh-live-price">$248,400</strong>
                        </div>

                        <div class="mh-builder-card__actions">
                            <a class="mh-btn mh-btn--primary" href="#mh-finishes">Explore Finishes</a>
                            <a class="mh-btn mh-btn--ghost" href="#mh-contact">Talk to a Builder</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mh-finishes" class="mh-section mh-finishes" aria-labelledby="mh-finishes-title">
        <div class="mh-shell">
            <div class="mh-section__heading">
                <p class="mh-section__eyebrow">WHERE THE VALUE GROWS</p>
                <h2 id="mh-finishes-title">Interior Finishes Are Where Your Home Becomes Yours</h2>
                <p>
                    Modular homes create the foundation. Your interior selections create the lifestyle. This is where
                    cabinetry, counters, lighting, baths, flooring, and material upgrades become the most meaningful
                    part of the conversation.
                </p>
            </div>

            <div class="mh-finish-layout">
                <div class="mh-finish-visual glass glass--strong">
                    <div class="mh-finish-visual__scene"></div>
                    <div class="mh-finish-swatch-tray glass glass--soft">
                        <button type="button" class="mh-swatch is-active" aria-label="Natural Oak"></button>
                        <button type="button" class="mh-swatch mh-swatch--light" aria-label="Soft White"></button>
                        <button type="button" class="mh-swatch mh-swatch--walnut" aria-label="Walnut"></button>
                        <button type="button" class="mh-swatch mh-swatch--charcoal" aria-label="Charcoal"></button>
                    </div>
                </div>

                <div class="mh-finish-grid">
                    <article class="mh-finish-card glass glass--soft">
                        <h3>Kitchen Cabinets</h3>
                        <p>Upgrade the most visible room in the home with cabinet styles that elevate the full space.</p>
                    </article>

                    <article class="mh-finish-card glass glass--soft">
                        <h3>Countertops</h3>
                        <p>Move beyond builder-basic surfaces and create a sharper premium look with better materials.</p>
                    </article>

                    <article class="mh-finish-card glass glass--soft">
                        <h3>Flooring</h3>
                        <p>Bring cohesion across living spaces with warmer, cleaner, and more durable finish packages.</p>
                    </article>

                    <article class="mh-finish-card glass glass--soft">
                        <h3>Bathrooms</h3>
                        <p>Improve comfort and value with tile, fixtures, lighting, and vanity details that feel custom.</p>
                    </article>

                    <article class="mh-finish-card glass glass--soft">
                        <h3>Lighting</h3>
                        <p>Layer in warmth and sophistication with upgraded fixture selections throughout the home.</p>
                    </article>

                    <article class="mh-finish-card glass glass--soft">
                        <h3>Custom Details</h3>
                        <p>Bring in trim, paint, accent walls, and special upgrades that create a more finished result.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="mh-section mh-process" aria-labelledby="mh-process-title">
        <div class="mh-shell">
            <div class="mh-section__heading">
                <p class="mh-section__eyebrow">HOW IT WORKS</p>
                <h2 id="mh-process-title">From Modular Home Lead to Personalized Interior Build</h2>
                <p>
                    Our model combines modular home sales opportunities with the interior customization work that gives
                    each project more value and personality.
                </p>
            </div>

            <div class="mh-process-grid">
                <article class="mh-process-step glass glass--soft">
                    <span class="mh-process-step__num">01</span>
                    <h3>Explore Modular Home Options</h3>
                    <p>Start with the layout, size, and overall direction that fits your needs and budget.</p>
                </article>

                <article class="mh-process-step glass glass--soft">
                    <span class="mh-process-step__num">02</span>
                    <h3>Choose Interior Finish Priorities</h3>
                    <p>Identify the spaces and upgrades that matter most, especially kitchen, bath, and flooring.</p>
                </article>

                <article class="mh-process-step glass glass--soft">
                    <span class="mh-process-step__num">03</span>
                    <h3>Schedule Your Consultation</h3>
                    <p>Send your direction, then move into a more detailed consultation with real next steps.</p>
                </article>
            </div>
        </div>
    </section>

    <section id="mh-contact" class="mh-section mh-cta" aria-labelledby="mh-cta-title">
        <div class="mh-shell">
            <div class="mh-cta__card glass glass--strong">
                <div class="mh-cta__content">
                    <p class="mh-section__eyebrow">READY TO START?</p>
                    <h2 id="mh-cta-title">Start Designing Your Modular Home Experience</h2>
                    <p>
                        Explore modular home possibilities, focus on the interior upgrades that matter most, and begin
                        with a clearer visual path toward your consultation.
                    </p>
                </div>

                <div class="mh-cta__actions">
                    <a class="mh-btn mh-btn--primary" href="#">Start My Design</a>
                    <a class="mh-btn mh-btn--ghost" href="#">Schedule Free Consultation</a>
                </div>
            </div>
        </div>
    </section>

    <section id="mh-faq" class="mh-section mh-faq" aria-labelledby="mh-faq-title">
        <div class="mh-shell">
            <div class="mh-section__heading">
                <p class="mh-section__eyebrow">COMMON QUESTIONS</p>
                <h2 id="mh-faq-title">Modular Homes FAQ — Cleveland, TN</h2>
                <p>
                    These questions support local SEO while helping visitors understand the modular home process and the
                    value of interior customization.
                </p>
            </div>

            <div class="mh-faq-list">
                <details class="mh-faq-item glass glass--soft" open>
                    <summary>What is a modular home?</summary>
                    <p>
                        A modular home is a home built in sections in a controlled environment and assembled on-site.
                        It can offer speed, quality control, and a wide range of layout possibilities.
                    </p>
                </details>

                <details class="mh-faq-item glass glass--soft">
                    <summary>Do modular homes in Cleveland, TN allow custom interior finishes?</summary>
                    <p>
                        Yes. One of the strongest opportunities is personalizing interior elements like cabinets,
                        counters, flooring, bathrooms, and lighting so the home feels more custom and premium.
                    </p>
                </details>

                <details class="mh-faq-item glass glass--soft">
                    <summary>Can I customize the interior of a modular home before construction?</summary>
                    <p>
                        In many cases, yes. Early planning makes it easier to define finish priorities and prepare for
                        remodeling or upgrade work that adds more value to the final project.
                    </p>
                </details>

                <details class="mh-faq-item glass glass--soft">
                    <summary>Why focus so much on the interiors?</summary>
                    <p>
                        Interior finishes are where the home becomes personal. They also tend to create stronger visual
                        differentiation and better perceived value for homeowners.
                    </p>
                </details>

                <details class="mh-faq-item glass glass--soft">
                    <summary>Do you serve areas beyond Cleveland, Tennessee?</summary>
                    <p>
                        The page is optimized for Cleveland, TN, but service can also extend through nearby areas in
                        Southeast Tennessee depending on the project.
                    </p>
                </details>
            </div>
        </div>
    </section>
</main>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is a modular home?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A modular home is a home built in sections in a controlled environment and assembled on-site. It can offer speed, quality control, and a wide range of layout possibilities."
      }
    },
    {
      "@type": "Question",
      "name": "Do modular homes in Cleveland, TN allow custom interior finishes?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. One of the strongest opportunities is personalizing interior elements like cabinets, counters, flooring, bathrooms, and lighting so the home feels more custom and premium."
      }
    },
    {
      "@type": "Question",
      "name": "Can I customize the interior of a modular home before construction?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "In many cases, yes. Early planning makes it easier to define finish priorities and prepare for remodeling or upgrade work that adds more value to the final project."
      }
    },
    {
      "@type": "Question",
      "name": "Why focus so much on the interiors?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Interior finishes are where the home becomes personal. They also tend to create stronger visual differentiation and better perceived value for homeowners."
      }
    },
    {
      "@type": "Question",
      "name": "Do you serve areas beyond Cleveland, Tennessee?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The page is optimized for Cleveland, TN, but service can also extend through nearby areas in Southeast Tennessee depending on the project."
      }
    }
  ]
}
</script>

<script src="<?php echo esc_url(get_stylesheet_directory_uri() . '/pages/home.js'); ?>"></script>