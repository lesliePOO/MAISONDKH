<?php
/*
Template Name: Accueil
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400&family=Inter:opsz,wght@14..32,300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
* { margin: 0; padding: 0; box-sizing: border-box; }
:root {
  --dark: #0f0f0c;
  --gold: #D4AF37;
  --gold-light: #E7C876;
  --cream: #FCF8F0;
  --sand: #F2EBE1;
  --cacao: #5A3E2B;
  --white: #FFFFFF;
}
body { font-family: 'Inter', sans-serif; background: var(--cream); color: var(--dark); scroll-behavior: smooth; }
h1, h2, h3, .logo, .menu-item-name { font-family: 'Cormorant Garamond', serif; font-weight: 500; letter-spacing: -0.01em; }
.container { max-width: 1400px; margin: 0 auto; padding: 0 32px; }

/* NAVBAR */
.navbar {
  position: fixed; top: 0; left: 0; width: 100%;
  background: rgba(252,248,240,0.96); backdrop-filter: blur(16px);
  z-index: 1000; padding: 18px 40px;
  display: flex; justify-content: space-between; align-items: center;
  border-bottom: 1px solid rgba(212,175,55,0.25); flex-wrap: wrap;
}
.logo { font-size: 28px; font-weight: 600; text-decoration: none; color: var(--dark); }
.logo span { color: var(--gold); font-style: italic; }
.nav-links { display: flex; gap: 28px; align-items: center; flex-wrap: wrap; }
.nav-links a { text-decoration: none; font-size: 11px; font-weight: 600; letter-spacing: 2px; text-transform: uppercase; color: #2a2a26; transition: color 0.3s; }
.nav-links a:hover { color: var(--gold); }
.btn-reserve-nav { background: var(--dark); color: var(--gold-light) !important; padding: 9px 22px; border-radius: 40px; }

/* HERO */
.hero {
  min-height: 100vh; position: relative;
  display: flex; align-items: center; justify-content: center;
  overflow: hidden; background: #0a0804;
}
.hero-bg {
  position: absolute; inset: 0;
  background:
    radial-gradient(ellipse 80% 60% at 60% 40%, rgba(212,175,55,0.08) 0%, transparent 70%),
    radial-gradient(ellipse 40% 40% at 20% 80%, rgba(90,62,43,0.3) 0%, transparent 60%),
    linear-gradient(160deg, #0a0804 0%, #12100a 50%, #0f0c07 100%);
}
.hero-lines { position: absolute; inset: 0; pointer-events: none; overflow: hidden; }
.hero-lines::before {
  content: ''; position: absolute; top: -50%; left: 55%;
  width: 1px; height: 200%;
  background: linear-gradient(to bottom, transparent, rgba(212,175,55,0.25), transparent);
  transform: rotate(15deg);
}
.hero-lines::after {
  content: ''; position: absolute; top: -50%; left: 70%;
  width: 1px; height: 200%;
  background: linear-gradient(to bottom, transparent, rgba(212,175,55,0.1), transparent);
  transform: rotate(15deg);
}
.hero-orb {
  position: absolute; width: 600px; height: 600px;
  background: radial-gradient(circle, rgba(212,175,55,0.06) 0%, transparent 70%);
  border-radius: 50%; top: 50%; left: 55%;
  transform: translate(-50%, -50%);
  animation: orbPulse 6s ease-in-out infinite;
}
@keyframes orbPulse {
  0%, 100% { transform: translate(-50%, -50%) scale(1); opacity: 0.6; }
  50% { transform: translate(-50%, -50%) scale(1.15); opacity: 1; }
}
.hero-content {
  position: relative; z-index: 10;
  max-width: 1400px; width: 100%; padding: 0 60px;
  display: grid; grid-template-columns: 1fr 1fr;
  align-items: center; gap: 80px; margin-top: 85px;
}
.hero-left { color: #fff; }
.hero-badge {
  display: inline-flex; align-items: center; gap: 10px;
  font-size: 11px; letter-spacing: 4px; color: var(--gold);
  text-transform: uppercase; margin-bottom: 28px;
}
.hero-badge::before, .hero-badge::after { content: ''; display: block; width: 30px; height: 1px; background: var(--gold); opacity: 0.6; }
.hero-title { font-family: 'Cormorant Garamond', serif; font-size: 88px; line-height: 0.92; font-weight: 300; color: #fff; margin-bottom: 8px; }
.hero-title em { font-style: italic; color: var(--gold); display: block; font-size: 96px; }
.hero-divider { width: 60px; height: 1px; background: linear-gradient(to right, var(--gold), transparent); margin: 32px 0; }
.hero-desc { font-size: 15px; line-height: 1.8; color: rgba(255,255,255,0.55); max-width: 420px; margin-bottom: 40px; }
.hero-cta { display: flex; gap: 16px; flex-wrap: wrap; }
.btn-hero-primary {
  background: var(--gold); color: #0a0804; padding: 16px 36px; border-radius: 2px;
  font-size: 11px; letter-spacing: 3px; font-weight: 700; text-transform: uppercase;
  text-decoration: none; display: inline-flex; align-items: center; gap: 10px;
  transition: all 0.3s; border: 1px solid var(--gold);
}
.btn-hero-primary:hover { background: transparent; color: var(--gold); }
.btn-hero-secondary {
  background: transparent; color: rgba(255,255,255,0.7); padding: 16px 36px; border-radius: 2px;
  font-size: 11px; letter-spacing: 3px; font-weight: 600; text-transform: uppercase;
  text-decoration: none; display: inline-flex; align-items: center; gap: 10px;
  border: 1px solid rgba(255,255,255,0.2); transition: all 0.3s;
}
.btn-hero-secondary:hover { border-color: var(--gold); color: var(--gold); }
.hero-stats { display: flex; gap: 0; margin-top: 56px; border-top: 1px solid rgba(255,255,255,0.08); padding-top: 32px; }
.hero-stat { flex: 1; padding-right: 32px; border-right: 1px solid rgba(255,255,255,0.08); }
.hero-stat:last-child { border-right: none; padding-right: 0; padding-left: 32px; }
.hero-stat:nth-child(2) { padding-left: 32px; }
.stat-num { font-family: 'Cormorant Garamond', serif; font-size: 42px; font-weight: 300; color: var(--gold); line-height: 1; }
.stat-label { font-size: 10px; letter-spacing: 2px; color: rgba(255,255,255,0.4); text-transform: uppercase; margin-top: 4px; }
.hero-right { display: flex; flex-direction: column; gap: 20px; }
.hero-visual-main {
  background: linear-gradient(145deg, rgba(212,175,55,0.06) 0%, rgba(15,12,7,0.8) 100%);
  border: 1px solid rgba(212,175,55,0.2); border-radius: 4px;
  padding: 56px 40px; text-align: center; position: relative; overflow: hidden;
}
.hero-visual-main::before {
  content: ''; position: absolute; top: 0; left: 0; right: 0; height: 1px;
  background: linear-gradient(to right, transparent, var(--gold), transparent);
}
.hero-visual-icon {
  font-size: 64px; margin-bottom: 20px; display: block;
  filter: drop-shadow(0 0 30px rgba(212,175,55,0.4));
  animation: float 4s ease-in-out infinite;
}
@keyframes float {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-8px); }
}
.hero-visual-main h3 { font-family: 'Cormorant Garamond', serif; font-size: 32px; font-weight: 300; color: #fff; margin-bottom: 10px; }
.hero-visual-main p { font-size: 12px; color: rgba(255,255,255,0.35); letter-spacing: 1px; }
.hero-cards-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
.hero-mini-card {
  background: rgba(255,255,255,0.03); border: 1px solid rgba(212,175,55,0.12);
  border-radius: 4px; padding: 22px; transition: 0.3s;
}
.hero-mini-card:hover { background: rgba(212,175,55,0.06); border-color: rgba(212,175,55,0.3); }
.hero-mini-card .mini-icon { font-size: 24px; margin-bottom: 10px; }
.hero-mini-card .mini-title { font-family: 'Cormorant Garamond', serif; font-size: 18px; color: #fff; margin-bottom: 4px; }
.hero-mini-card .mini-sub { font-size: 10px; color: rgba(255,255,255,0.35); letter-spacing: 1px; text-transform: uppercase; }
.hero-scroll {
  position: absolute; bottom: 32px; left: 50%; transform: translateX(-50%);
  display: flex; flex-direction: column; align-items: center; gap: 8px; z-index: 10; cursor: pointer;
}
.hero-scroll span { font-size: 9px; letter-spacing: 3px; color: rgba(255,255,255,0.3); text-transform: uppercase; }
.scroll-line {
  width: 1px; height: 40px;
  background: linear-gradient(to bottom, var(--gold), transparent);
  animation: scrollAnim 2s ease-in-out infinite;
}
@keyframes scrollAnim {
  0% { opacity: 0; transform: scaleY(0); transform-origin: top; }
  50% { opacity: 1; transform: scaleY(1); }
  100% { opacity: 0; }
}

/* MENU APERCU */
.menu-section { background: var(--white); padding: 100px 0; }
.section-label { font-size: 9px; letter-spacing: 5px; text-transform: uppercase; color: #7a9e7e; margin-bottom: 10px; }
.section-title { font-size: 52px; font-weight: 400; }
.section-title span { color: var(--gold); font-style: italic; }
.gold-line { width: 80px; height: 2px; background: var(--gold); margin: 20px 0 40px; }
.plats-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1px; background: #f0e6dc; margin-bottom: 48px; }
.plat-card { background: #fff; overflow: hidden; transition: 0.3s; }
.plat-card:hover { transform: translateY(-4px); box-shadow: 0 12px 32px rgba(0,0,0,0.08); }
.plat-img { height: 200px; overflow: hidden; }
.plat-img img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s; }
.plat-card:hover .plat-img img { transform: scale(1.05); }
.plat-body { padding: 20px; }
.plat-cat { font-size: 9px; letter-spacing: 2px; text-transform: uppercase; color: var(--gold); margin-bottom: 6px; }
.plat-name { font-family: 'Cormorant Garamond', serif; font-size: 22px; font-style: italic; color: var(--dark); margin-bottom: 8px; }
.plat-desc { font-size: 11px; color: #8a8a82; line-height: 1.7; }
.voir-menu-btn { text-align: center; }
.btn-voir-menu {
  background: var(--dark); color: var(--gold-light); padding: 14px 40px;
  text-decoration: none; font-size: 11px; letter-spacing: 3px; text-transform: uppercase;
  display: inline-block; transition: all 0.3s; border-radius: 2px;
}
.btn-voir-menu:hover { background: var(--gold); color: var(--dark); }

/* EXPERIENCE */
.experience-section { background: var(--cream); padding: 100px 0; }
.exp-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; }
.exp-img {
  height: 480px; background: var(--dark);
  display: flex; align-items: center; justify-content: center;
  flex-direction: column; gap: 16px; position: relative; border-radius: 4px;
}
.exp-img::before {
  content: ''; position: absolute; top: 20px; left: 20px; right: 20px; bottom: 20px;
  border: 1px solid rgba(212,175,55,0.2); pointer-events: none;
}
.exp-img span { font-size: 80px; opacity: 0.2; }
.exp-img p { font-size: 10px; letter-spacing: 3px; text-transform: uppercase; color: rgba(255,255,255,0.2); }
.exp-eyebrow { font-size: 9px; letter-spacing: 5px; text-transform: uppercase; color: #7a9e7e; margin-bottom: 12px; }
.exp-title { font-family: 'Cormorant Garamond', serif; font-size: 48px; font-weight: 300; margin-bottom: 20px; }
.exp-title span { font-style: italic; color: var(--gold); }
.exp-text { font-size: 13px; line-height: 2; color: #4a4a44; margin-bottom: 28px; }
.exp-list { list-style: none; display: flex; flex-direction: column; gap: 12px; margin-bottom: 36px; }
.exp-list li { display: flex; align-items: center; gap: 16px; font-size: 12px; color: #4a4a44; }
.exp-list li::before { content: ''; display: block; width: 20px; height: 1px; background: var(--gold); flex-shrink: 0; }
.btn-reserver {
  background: var(--dark); color: var(--gold-light); padding: 14px 36px;
  text-decoration: none; font-size: 11px; letter-spacing: 3px; text-transform: uppercase;
  display: inline-block; transition: all 0.3s;
}
.btn-reserver:hover { background: var(--gold); color: var(--dark); }

/* FOOTER */
.dkh-footer { background: var(--dark); padding: 48px 60px; text-align: center; border-top: 1px solid rgba(212,175,55,0.2); }
.dkh-footer-logo { font-family: 'Cormorant Garamond', serif; font-size: 28px; font-style: italic; color: var(--gold); letter-spacing: 4px; margin-bottom: 8px; }
.dkh-footer-slogan { font-size: 10px; letter-spacing: 4px; text-transform: uppercase; color: rgba(255,255,255,0.3); margin-bottom: 24px; }
.dkh-footer-links { display: flex; justify-content: center; gap: 32px; margin-bottom: 24px; }
.dkh-footer-links a { font-size: 10px; letter-spacing: 2px; text-transform: uppercase; color: rgba(255,255,255,0.4); text-decoration: none; transition: color 0.3s; }
.dkh-footer-links a:hover { color: var(--gold); }
.dkh-footer-copy { font-size: 10px; letter-spacing: 2px; color: rgba(255,255,255,0.2); }

@media (max-width: 1000px) {
  .hero-content { grid-template-columns: 1fr; padding: 0 24px; gap: 40px; }
  .hero-title { font-size: 56px; }
  .hero-title em { font-size: 62px; }
  .plats-grid { grid-template-columns: 1fr; }
  .exp-grid { grid-template-columns: 1fr; }
  .navbar { flex-direction: column; gap: 14px; }
}
</style>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- NAVBAR -->
<nav class="navbar">
  <a class="logo" href="<?php echo home_url('/wordpress'); ?>">Maison<span>KDR</span></a>
  <div class="nav-links">
    <a href="<?php echo home_url('/wordpress/menu'); ?>">MENU</a>
    <a href="<?php echo home_url('/wordpress/reservation'); ?>">RÉSERVATION</a>
    <a href="<?php echo home_url('/wordpress/boutique'); ?>">BOUTIQUE</a>
    <a href="<?php echo home_url('/wordpress/contact'); ?>">CONTACT</a>
    <a href="<?php echo home_url('/wordpress/reservation'); ?>" class="btn-reserve-nav">RÉSERVER</a>
  </div>
</nav>

<!-- HERO -->
<section class="hero">
  <div class="hero-bg"></div>
  <div class="hero-lines"></div>
  <div class="hero-orb"></div>
  <div class="hero-content">
    <div class="hero-left">
      <div class="hero-badge">Douala · Cameroun · Haute Table</div>
      <h1 class="hero-title">Haute<em>Gastronomie</em></h1>
      <div class="hero-divider"></div>
      <p class="hero-desc">Une expérience culinaire d'exception où chaque assiette raconte l'histoire des saveurs camerounaises sublimées par la technique gastronomique.</p>
      <div class="hero-cta">
        <a href="<?php echo home_url('/wordpress/reservation'); ?>" class="btn-hero-primary">Réserver une table &nbsp;→</a>
        <a href="<?php echo home_url('/wordpress/menu'); ?>" class="btn-hero-secondary">Voir le menu</a>
      </div>
      <div class="hero-stats">
        <div class="hero-stat"><div class="stat-num">80<span style="font-size:0.5em">%</span></div><div class="stat-label">Terroir local</div></div>
        <div class="hero-stat"><div class="stat-num">48</div><div class="stat-label">Couverts</div></div>
        <div class="hero-stat"><div class="stat-num">6</div><div class="stat-label">Catégories</div></div>
      </div>
    </div>
    <div class="hero-right">
      <div class="hero-visual-main">
        <span class="hero-visual-icon">🍽️</span>
        <h3>L'art de la table</h3>
        <p>Chaque assiette est une signature</p>
      </div>
      <div class="hero-cards-row">
        <div class="hero-mini-card">
          <div class="mini-icon">🌿</div>
          <div class="mini-title">Terroir</div>
          <div class="mini-sub">Produits nobles locaux</div>
        </div>
        <div class="hero-mini-card">
          <div class="mini-icon">👨‍🍳</div>
          <div class="mini-title">Chef étoilé</div>
          <div class="mini-sub">Spécialité : l'Eru</div>
        </div>
        <div class="hero-mini-card">
          <div class="mini-icon">🕯️</div>
          <div class="mini-title">Ambiance</div>
          <div class="mini-sub">Service d'exception</div>
        </div>
        <div class="hero-mini-card">
          <div class="mini-icon">🥂</div>
          <div class="mini-title">Vins & Cocktails</div>
          <div class="mini-sub">Carte exclusive</div>
        </div>
      </div>
    </div>
  </div>
  <div class="hero-scroll" onclick="document.getElementById('apercu').scrollIntoView({behavior:'smooth'})">
    <span>Découvrir</span>
    <div class="scroll-line"></div>
  </div>
</section>

<!-- APERCU MENU -->
<section class="menu-section" id="apercu">
  <div class="container">
    <div class="section-label">Carte de saison</div>
    <h2 class="section-title">Nos <span>Spécialités</span></h2>
    <div class="gold-line"></div>
    <div class="plats-grid">
      <?php
      $plats = new WP_Query(array(
        'post_type' => 'plat',
        'posts_per_page' => 6,
        'orderby' => 'rand'
      ));
      if ($plats->have_posts()) :
        while ($plats->have_posts()) : $plats->the_post();
          $terms = get_the_terms(get_the_ID(), 'categorie_plat');
          $cat = $terms ? $terms[0]->name : '';
      ?>
      <div class="plat-card">
        <?php if (has_post_thumbnail()) : ?>
          <div class="plat-img"><?php the_post_thumbnail('medium', array('alt' => get_the_title())); ?></div>
        <?php endif; ?>
        <div class="plat-body">
          <div class="plat-cat"><?php echo esc_html($cat); ?></div>
          <div class="plat-name"><?php the_title(); ?></div>
          <div class="plat-desc"><?php echo wp_trim_words(get_the_content(), 12); ?></div>
        </div>
      </div>
      <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
    <div class="voir-menu-btn">
      <a href="<?php echo home_url('/wordpress/menu'); ?>" class="btn-voir-menu">Voir toute la carte</a>
    </div>
  </div>
</section>

<!-- EXPERIENCE -->
<section class="experience-section">
  <div class="container">
    <div class="exp-grid">
      <div class="exp-img">
        <span>👨‍🍳</span>
        <p>Notre chef en cuisine</p>
      </div>
      <div>
        <div class="exp-eyebrow">Notre philosophie</div>
        <h2 class="exp-title">L'art de <span>sublimer</span> les saveurs</h2>
        <p class="exp-text">Chez MaisonKDR, chaque plat est une œuvre. Nous puisons dans la richesse des terroirs camerounais pour créer une cuisine gastronomique unique, entre tradition africaine et technique gastronomique.</p>
        <ul class="exp-list">
          <li>Produits frais sélectionnés chaque matin</li>
          <li>Spécialité du chef : l'Eru des peuples Bamenda</li>
          <li>Menu dégustation disponible sur réservation</li>
          <li>Privatisation possible pour événements</li>
        </ul>
        <a href="<?php echo home_url('/wordpress/reservation'); ?>" class="btn-reserver">Réserver maintenant</a>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="dkh-footer">
  <div class="dkh-footer-logo">MaisonKDR</div>
  <div class="dkh-footer-slogan">Créez · Savourez · Partagez</div>
  <div class="dkh-footer-links">
    <a href="<?php echo home_url('/wordpress'); ?>">Accueil</a>
    <a href="<?php echo home_url('/wordpress/menu'); ?>">Menu</a>
    <a href="<?php echo home_url('/wordpress/reservation'); ?>">Réservation</a>
    <a href="<?php echo home_url('/wordpress/contact'); ?>">Contact</a>
  </div>
  <div class="dkh-footer-copy">© 2026 MaisonKDR · Douala, Cameroun</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>