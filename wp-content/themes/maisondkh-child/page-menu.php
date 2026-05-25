<?php
/*
Template Name: Menu
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,400&family=Josefin+Sans:wght@200;300;400&display=swap" rel="stylesheet">
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- NAVBAR -->
<nav class="dkh-nav">
  <a class="dkh-nav-logo" href="<?php echo home_url('/wordpress'); ?>">MaisonDKH</a>
  <div class="dkh-nav-links">
    <a href="<?php echo home_url('/wordpress'); ?>">Accueil</a>
    <a href="<?php echo home_url('/wordpress/menu'); ?>" class="active">Menu</a>
    <a href="<?php echo home_url('/wordpress/reservation'); ?>">Réservation</a>
    <a href="<?php echo home_url('/wordpress/boutique'); ?>">Boutique</a>
    <a href="<?php echo home_url('/wordpress/contact'); ?>">Contact</a>
  </div>
  <button class="dkh-nav-burger" onclick="document.querySelector('.dkh-nav-links').classList.toggle('open')">☰</button>
</nav>

<!-- MENU -->
<div class="container-menu">
  <h1 class="menu-title">Notre <span>Carte</span></h1>
  <div class="gold-line"></div>
  <div class="menu-tabs">
    <button class="tab-btn active" data-cat="Entrées">Entrées</button>
    <button class="tab-btn" data-cat="Plats">Plats</button>
    <button class="tab-btn" data-cat="Desserts">Desserts</button>
    <button class="tab-btn" data-cat="Boissons Chaudes">Boissons Chaudes</button>
    <button class="tab-btn" data-cat="Boissons Froides">Boissons Froides</button>
    <button class="tab-btn" data-cat="Vins & Cocktails">Vins & Cocktails</button>
  </div>
  <div id="menu-grid" class="menu-grid"></div>
</div>

<!-- FOOTER -->
<footer class="dkh-footer">
  <div class="dkh-footer-logo">MaisonDKH</div>
  <div class="dkh-footer-slogan">Créez · Savourez · Partagez</div>
  <div class="dkh-footer-links">
    <a href="<?php echo home_url('/wordpress'); ?>">Accueil</a>
    <a href="<?php echo home_url('/wordpress/menu'); ?>">Menu</a>
    <a href="<?php echo home_url('/wordpress/reservation'); ?>">Réservation</a>
    <a href="<?php echo home_url('/wordpress/contact'); ?>">Contact</a>
  </div>
  <div class="dkh-footer-copy">© 2026 MaisonDKH · Douala, Cameroun</div>
</footer>

<style>
.dkh-nav {
  position: sticky; top: 0; z-index: 100;
  background: rgba(250,248,243,0.97);
  border-bottom: 1px solid rgba(201,168,76,0.3);
  display: flex; justify-content: space-between; align-items: center;
  padding: 18px 60px; backdrop-filter: blur(10px);
}
.dkh-nav-logo {
  font-family: 'Cormorant Garamond', serif;
  font-size: 22px; font-style: italic;
  color: #1a1a18; text-decoration: none; letter-spacing: 3px;
}
.dkh-nav-links { display: flex; gap: 32px; }
.dkh-nav-links a {
  font-family: 'Josefin Sans', sans-serif;
  font-size: 10px; letter-spacing: 3px; text-transform: uppercase;
  color: #4a4a44; text-decoration: none; transition: color 0.3s;
}
.dkh-nav-links a:hover, .dkh-nav-links a.active { color: #C9A84C; }
.dkh-nav-burger { display: none; background: none; border: none; font-size: 22px; cursor: pointer; }
* { margin: 0; padding: 0; box-sizing: border-box; }
body { background: #faf8f3; font-family: 'Josefin Sans', sans-serif; }
.container-menu { max-width: 1300px; margin: 0 auto; padding: 60px 20px; }
.menu-title { font-family: 'Cormorant Garamond', serif; font-size: 52px; font-weight: 400; text-align: center; margin-bottom: 0; }
.menu-title span { color: #D4AF37; font-style: italic; }
.gold-line { width: 80px; height: 2px; background: #D4AF37; margin: 20px auto 40px; }
.menu-tabs { display: flex; flex-wrap: wrap; justify-content: center; gap: 8px; margin-bottom: 48px; }
.tab-btn {
  background: transparent; border: 1px solid rgba(201,168,76,0.5);
  padding: 10px 24px; font-size: 11px; font-weight: 400;
  text-transform: uppercase; letter-spacing: 2px;
  cursor: pointer; border-radius: 40px; transition: 0.3s;
  font-family: 'Josefin Sans', sans-serif; color: #4a4a44;
}
.tab-btn.active { background: #1a1a18; color: #D4AF37; border-color: #1a1a18; }
.tab-btn:hover:not(.active) { background: rgba(201,168,76,0.1); border-color: #C9A84C; color: #C9A84C; }
.menu-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 32px; }
.menu-card { background: white; border-radius: 24px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.05); transition: 0.3s; }
.menu-card:hover { transform: translateY(-5px); box-shadow: 0 15px 30px rgba(0,0,0,0.1); }
.card-img { height: 200px; background: #f2ebe1; overflow: hidden; }
.card-img img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s; }
.menu-card:hover .card-img img { transform: scale(1.05); }
.card-content { padding: 20px; }
.menu-category { font-size: 10px; letter-spacing: 2px; color: #D4AF37; text-transform: uppercase; }
.menu-item-name { font-family: 'Cormorant Garamond', serif; font-size: 24px; font-weight: 500; margin: 8px 0; }
.menu-desc { font-size: 13px; color: #666; line-height: 1.5; margin-bottom: 16px; }
.menu-footer { display: flex; justify-content: space-between; align-items: center; border-top: 1px solid #eee; padding-top: 16px; }
.price { font-size: 22px; font-weight: bold; color: #5A3E2B; }
.add-btn { background: #1a1a18; color: #D4AF37; border: none; padding: 8px 20px; border-radius: 40px; cursor: pointer; font-size: 12px; transition: 0.3s; }
.add-btn:hover { background: #D4AF37; color: #1a1a18; }
.chef-badge { display: inline-block; font-size: 9px; letter-spacing: 2px; text-transform: uppercase; color: #8B0000; border: 1px solid #8B0000; padding: 2px 8px; margin-left: 8px; }
.dkh-footer { background: #1a1a18; padding: 48px 60px; text-align: center; border-top: 1px solid rgba(201,168,76,0.2); }
.dkh-footer-logo { font-family: 'Cormorant Garamond', serif; font-size: 28px; font-style: italic; color: #C9A84C; letter-spacing: 4px; margin-bottom: 8px; }
.dkh-footer-slogan { font-size: 10px; letter-spacing: 4px; text-transform: uppercase; color: rgba(255,255,255,0.3); margin-bottom: 24px; }
.dkh-footer-links { display: flex; justify-content: center; gap: 32px; margin-bottom: 24px; }
.dkh-footer-links a { font-size: 10px; letter-spacing: 2px; text-transform: uppercase; color: rgba(255,255,255,0.4); text-decoration: none; transition: color 0.3s; }
.dkh-footer-links a:hover { color: #C9A84C; }
.dkh-footer-copy { font-size: 10px; letter-spacing: 2px; color: rgba(255,255,255,0.2); }
@media (max-width: 768px) {
  .dkh-nav { padding: 16px 20px; }
  .dkh-nav-links { display: none; flex-direction: column; position: absolute; top: 60px; left: 0; right: 0; background: #faf8f3; padding: 20px; border-bottom: 1px solid #eee; }
  .dkh-nav-links.open { display: flex; }
  .dkh-nav-burger { display: block; }
  .menu-title { font-size: 36px; }
  .tab-btn { padding: 6px 16px; font-size: 10px; }
  .menu-grid { grid-template-columns: 1fr; }
  .dkh-footer { padding: 40px 20px; }
  .dkh-footer-links { flex-wrap: wrap; gap: 16px; }
}
</style>

<script>
const platsData = {
  "Entrées": [
    { name: "Samoussa", desc: "Samoussa croustillant aux légumes épicés, sauce menthe-coriandre maison.", price: 2200, img: "https://restaurant-gastronomie.alwaysdata.net/wordpress/wp-content/uploads/2026/05/Samoussa-.jpg" },
    { name: "Blanc de poulet et purée de pommes", desc: "Poulet fermier rôti, purée onctueuse de pommes de terre, jus de viande réduit aux herbes fraîches.", price: 3000, img: "https://restaurant-gastronomie.alwaysdata.net/wordpress/wp-content/uploads/2026/05/Blanc-de-poulet-et-puree-de-pommes-.jpg" },
    { name: "Le poulet dans sa course dans les champs", desc: "Suprême de poulet fermier, légumes du marché sautés, vinaigrette tiède au citron.", price: 2500, img: "https://restaurant-gastronomie.alwaysdata.net/wordpress/wp-content/uploads/2026/05/Le-poulet-dans-sa-course-dans-les-champs.jpg" },
    { name: "Lignée de crevettes à la galette de maïs", desc: "Crevettes marinées, galette de maïs croustillante, sauce coco-gingembre maison.", price: 3500, img: "https://restaurant-gastronomie.alwaysdata.net/wordpress/wp-content/uploads/2026/05/Lignee-de-crevettes-a-la-galette-de-mais.jpg" },
    { name: "Salade au quinoa et à l'avocat", desc: "Quinoa bio, avocat crémeux, tomates cerises, vinaigrette au citron vert et coriandre fraîche.", price: 2800, img: "https://restaurant-gastronomie.alwaysdata.net/wordpress/wp-content/uploads/2026/05/Salade-au-quinoa-et-a-lavocat.jpg" },
    { name: "Union des aliments à graines", desc: "Assortiment de graines nobles, légumes croquants de saison, huile d'argan et herbes fraîches.", price: 2200, img: "https://restaurant-gastronomie.alwaysdata.net/wordpress/wp-content/uploads/2026/05/Union-des-aliments-a-graines.jpg" }
  ],
  "Plats": [
    { name: "Koki & Plantain vapeur", desc: "Koki traditionnel à base de graines de koki, accompagné de plantains vapeur.", price: 4500, img: "https://restaurant-gastronomie.alwaysdata.net/wordpress/wp-content/uploads/2026/05/Koki-Plantain.jpg" },
    { name: "Eru — Spécialité du Chef ★", desc: "Eru des peuples Bamenda (Nord-Ouest et Sud-Ouest du Cameroun), mijoté longuement avec plusieurs viandes, waterleaf et huile de palme.", price: 5000, img: "https://restaurant-gastronomie.alwaysdata.net/wordpress/wp-content/uploads/2026/05/Le-Eru-et-obstacles-animalier-.jpg", chef: true },
    { name: "Gombo gluant aux fruits de mer", desc: "Gombo gluant et glissant mijoté avec poissons, crevettes, peau et viande de bœuf, servi avec fufu de manioc.", price: 4800, img: "https://restaurant-gastronomie.alwaysdata.net/wordpress/wp-content/uploads/2026/05/Le-gombo-et-sa-bataille-de-fruits-de-mer.jpg" },
    { name: "Ndolé aux crevettes et viande", desc: "Ndolé camerounais aux feuilles amères, crevettes fraîches et viande mijotée, servi avec plantains.", price: 4500, img: "https://restaurant-gastronomie.alwaysdata.net/wordpress/wp-content/uploads/2026/05/Ndole-avec-viande-et-crevettes-La-meilleure-recette-_-Kelianfood.jpg" },
    { name: "Okok aux feuilles et bobolo de Yaoundé", desc: "Feuilles d'okok à la pâte d'arachides, jus de noix de palme pilées, poisson fumé effiloché, plusieurs viandes, bobolo de Yaoundé et manioc.", price: 4200, img: "https://restaurant-gastronomie.alwaysdata.net/wordpress/wp-content/uploads/2026/05/Okok-accompagne-des-Bobolo-.jpg" },
    { name: "Taro sauce jaune et viandes", desc: "Taro à la texture fondante proche de la purée, sauce jaune épicée aux épices nobles, accompagnement de viandes mixtes.", price: 4700, img: "https://restaurant-gastronomie.alwaysdata.net/wordpress/wp-content/uploads/2026/05/Taro-sauce-jaune-avec-son-escorte-animale.jpg" }
  ],
  "Desserts": [
    { name: "Ananas flambé et sphère de vanille", desc: "Ananas frais flambé, sphère de crème vanillée, caramel de coco.", price: 3000, img: "https://restaurant-gastronomie.alwaysdata.net/wordpress/wp-content/uploads/2026/05/Crambe-dananas-avec-sa-sprere-de-vainille-.jpg" },
    { name: "Fondant au chocolat fraise et vanille", desc: "Fondant coulant au cacao camerounais, coulis de fraise fraîche, glace vanille bourbon.", price: 3200, img: "https://restaurant-gastronomie.alwaysdata.net/wordpress/wp-content/uploads/2026/05/Fondant-au-chocolat-fraise-et-vanille-.jpg" },
    { name: "Gâteau au chocolat", desc: "Gâteau moelleux au cacao grand cru camerounais, ganache onctueuse, éclats de noisettes caramélisées.", price: 2800, img: "https://restaurant-gastronomie.alwaysdata.net/wordpress/wp-content/uploads/2026/05/Gateaux-au-chocolat.jpg" },
    { name: "Mousse au chocolat", desc: "Mousse aérienne au cacao camerounais, chantilly légère, copeaux de chocolat.", price: 2500, img: "https://restaurant-gastronomie.alwaysdata.net/wordpress/wp-content/uploads/2026/05/Mousse-au-chocolat.jpg" },
    { name: "Smoothie au chocolat", desc: "Smoothie épais au cacao cru, lait de coco, miel des hauts plateaux, graines de chia.", price: 2200, img: "https://restaurant-gastronomie.alwaysdata.net/wordpress/wp-content/uploads/2026/05/Smothie-au-chocolat.jpg" }
  ],
  "Boissons Chaudes": [
    { name: "Café Lacté", desc: "Espresso onctueux, lait entier mousseux, touche de caramel maison.", price: 1500, img: "https://restaurant-gastronomie.alwaysdata.net/wordpress/wp-content/uploads/2026/05/Cafe-Lacte.jpg" },
    { name: "Café Penja grand cru", desc: "Pur arabica de Penja, torréfaction artisanale, servi avec mignardise maison.", price: 2000, img: "https://restaurant-gastronomie.alwaysdata.net/wordpress/wp-content/uploads/2026/05/Cafe-Penja-grand-cru.jpg" },
    { name: "Thé à la menthe et au clou de girofle", desc: "Thé vert infusé à la menthe fraîche et clous de girofle, sucre de canne.", price: 1500, img: "https://restaurant-gastronomie.alwaysdata.net/wordpress/wp-content/uploads/2026/05/The-a-la-menthe-et-au-clou-de-girofle.jpg" },
    { name: "Thé à la menthe", desc: "Menthe fraîche du jardin, eau frémissante, miel d'Oku.", price: 1200, img: "https://restaurant-gastronomie.alwaysdata.net/wordpress/wp-content/uploads/2026/05/The-a-la-menthe.jpg" }
  ],
  "Boissons Froides": [
    { name: "Cocktail de fruits tropicaux", desc: "Mangue, ananas, fruit de la passion, citron vert, sirop de canne, glaçons.", price: 1800, img: "https://restaurant-gastronomie.alwaysdata.net/wordpress/wp-content/uploads/2026/05/Cocktail-de-fruis-tropicaux.jpg" },
    { name: "Notre cher Ginger", desc: "Gingembre frais pressé, citron vert, miel, eau pétillante artisanale.", price: 1500, img: "https://restaurant-gastronomie.alwaysdata.net/wordpress/wp-content/uploads/2026/05/Jus-de-gingemebre-Notre-cher-Ginger.jpg" },
    { name: "Notre cher Foléré", desc: "Bissap rouge bio, gingembre frais, vanille, sucre de canne, servi glacé.", price: 1500, img: "https://restaurant-gastronomie.alwaysdata.net/wordpress/wp-content/uploads/2026/05/Jus-doseille-Notre-cher-Folere.jpg" },
    { name: "Les saveurs du baobab", desc: "Jus de baobab, lait de coco, vanille, sucre roux.", price: 1800, img: "https://restaurant-gastronomie.alwaysdata.net/wordpress/wp-content/uploads/2026/05/Les-saveurs-du-baobab.jpg" }
  ],
  "Vins & Cocktails": [
    { name: "Baileys", desc: "Liqueur irlandaise crémeuse au whisky et chocolat, servie sur glace.", price: 3500, img: "https://restaurant-gastronomie.alwaysdata.net/wordpress/wp-content/uploads/2026/05/Baileys.jpg" },
    { name: "Balafon cocktail", desc: "Cocktail signature MaisonDKH, rhum ambré, jus de fruits tropicaux, grenadine.", price: 3200, img: "https://restaurant-gastronomie.alwaysdata.net/wordpress/wp-content/uploads/2026/05/Balafon-cocktail.jpg" },
    { name: "Blue Lagoon", desc: "Vodka, curaçao bleu, jus de citron frais, sucre de canne, soda.", price: 3800, img: "https://restaurant-gastronomie.alwaysdata.net/wordpress/wp-content/uploads/2026/05/Blue-Lagoon.jpg" },
    { name: "Clares Hills", desc: "Vin blanc sec, notes fruitées et florales, servi frais.", price: 4000, img: "https://restaurant-gastronomie.alwaysdata.net/wordpress/wp-content/uploads/2026/05/Clares-Hills.jpg" },
    { name: "Domaines des terres blanches", desc: "Vin blanc élégant, arômes de pêche blanche et de fleurs, finale minérale.", price: 4000, img: "https://restaurant-gastronomie.alwaysdata.net/wordpress/wp-content/uploads/2026/05/Domaines-des-terres-blanches.jpg" }
  ]
};

let currentCat = "Entrées";

function renderMenu() {
  const grid = document.getElementById("menu-grid");
  const items = platsData[currentCat];
  grid.innerHTML = "";
  items.forEach(item => {
    grid.innerHTML += `
      <div class="menu-card">
        <div class="card-img">
          <img src="${item.img}" alt="${item.name}" onerror="this.parentElement.style.background='#f2ebe1';this.style.display='none'">
        </div>
        <div class="card-content">
          <div class="menu-category">
            ${currentCat.toUpperCase()}
            ${item.chef ? '<span class="chef-badge">Spécialité du Chef</span>' : ''}
          </div>
          <div class="menu-item-name">${item.name}</div>
          <div class="menu-desc">${item.desc}</div>
          <div class="menu-footer">
            <span class="price">${item.price.toLocaleString()} XAF</span>
            <button class="add-btn">Commander</button>
          </div>
        </div>
      </div>
    `;
  });
}

document.querySelectorAll(".tab-btn").forEach(btn => {
  btn.addEventListener("click", () => {
    document.querySelectorAll(".tab-btn").forEach(b => b.classList.remove("active"));
    btn.classList.add("active");
    currentCat = btn.dataset.cat;
    renderMenu();
  });
});

renderMenu();
</script>

<?php wp_footer(); ?>
</body>
</html>