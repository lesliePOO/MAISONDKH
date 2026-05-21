<?php
/*
Template Name: Menu
*/
get_header();
?>

<div class="container-menu">
  <h1 class="menu-title">Notre <span>Carte</span></h1>
  <div class="gold-line"></div>

  <!-- Onglets -->
  <div class="menu-tabs">
    <button class="tab-btn active" data-cat="Entrées">Entrées</button>
    <button class="tab-btn" data-cat="Plats">Plats</button>
    <button class="tab-btn" data-cat="Desserts">Desserts</button>
    <button class="tab-btn" data-cat="Boissons Chaudes">Boissons Chaudes</button>
    <button class="tab-btn" data-cat="Boissons Froides">Boissons Froides</button>
    <button class="tab-btn" data-cat="Vins & Cocktails">Vins & Cocktails</button>
  </div>

  <!-- Grille des plats -->
  <div id="menu-grid" class="menu-grid"></div>
</div>

<style>
.container-menu {
  max-width: 1300px;
  margin: 0 auto;
  padding: 60px 20px;
}
.menu-title {
  font-family: 'Cormorant Garamond', serif;
  font-size: 52px;
  font-weight: 400;
  text-align: center;
  margin-bottom: 0;
}
.menu-title span {
  color: #D4AF37;
  font-style: italic;
}
.gold-line {
  width: 80px;
  height: 2px;
  background: #D4AF37;
  margin: 20px auto 40px;
}
.menu-tabs {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 8px;
  margin-bottom: 48px;
}
.tab-btn {
  background: transparent;
  border: 1px solid #D4AF37;
  padding: 10px 24px;
  font-size: 12px;
  font-weight: 600;
  text-transform: uppercase;
  cursor: pointer;
  border-radius: 40px;
  transition: 0.3s;
  font-family: inherit;
}
.tab-btn.active,
.tab-btn:hover {
  background: #0f0f0c;
  color: #D4AF37;
  border-color: #0f0f0c;
}
.menu-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
  gap: 32px;
}
.menu-card {
  background: white;
  border-radius: 24px;
  overflow: hidden;
  box-shadow: 0 4px 15px rgba(0,0,0,0.05);
  transition: 0.3s;
}
.menu-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 15px 30px rgba(0,0,0,0.1);
}
.card-img {
  height: 200px;
  background: #f2ebe1;
  display: flex;
  align-items: center;
  justify-content: center;
}
.card-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.card-img span {
  color: #aaa;
  font-size: 14px;
}
.card-content {
  padding: 20px;
}
.menu-category {
  font-size: 10px;
  letter-spacing: 2px;
  color: #D4AF37;
  text-transform: uppercase;
}
.menu-item-name {
  font-family: 'Cormorant Garamond', serif;
  font-size: 24px;
  font-weight: 500;
  margin: 8px 0;
}
.menu-desc {
  font-size: 13px;
  color: #666;
  line-height: 1.5;
  margin-bottom: 16px;
}
.menu-footer {
  display: flex;
  justify-content: space-between;
  align-items: center;
  border-top: 1px solid #eee;
  padding-top: 16px;
}
.price {
  font-size: 22px;
  font-weight: bold;
  color: #5A3E2B;
}
.add-btn {
  background: #0f0f0c;
  color: #D4AF37;
  border: none;
  padding: 8px 20px;
  border-radius: 40px;
  cursor: pointer;
  font-size: 12px;
  transition: 0.3s;
}
.add-btn:hover {
  background: #D4AF37;
  color: #0f0f0c;
}
@media (max-width: 768px) {
  .menu-title { font-size: 36px; }
  .tab-btn { padding: 6px 16px; font-size: 10px; }
  .menu-grid { grid-template-columns: 1fr; }
}
</style>

<script>
// Données des plats
const platsData = {
  "Entrées": [
    { name: "Tartare de poisson fumé", desc: "Capitaine fumé, émulsion yassa au caviar citron, tuile de manioc.", price: 4900, img: "" },
    { name: "Huîtres de Douala gratinées", desc: "Huîtres locales, beurre d'escargot, champagne.", price: 6800, img: "" },
    { name: "Velouté de courge au gingembre", desc: "Crème de courge, gingembre confit, éclats de noix de pécan.", price: 3800, img: "" },
    { name: "Carpaccio de bœuf fumé", desc: "Tranches fines de bœuf fumé, huile de cacao, copeaux de parmesan.", price: 5200, img: "" },
    { name: "Nems de crevettes épicés", desc: "Crevettes sauvages, sauce tamarin gingembre, menthe fraîche.", price: 4500, img: "" }
  ],
  "Plats": [
    { name: "Poulet DG Prestige", desc: "Poulet fermier, plantains flambés au whisky, sauce aux cèpes.", price: 7900, img: "" },
    { name: "Nkui à la langouste", desc: "Recette bamiléké revisitée, langouste entière, épices kinkeliba.", price: 12900, img: "" },
    { name: "Saka-Saka royal", desc: "Feuilles de manioc fondantes, crabe farci, beurre de karité.", price: 7300, img: "" },
    { name: "Poisson braisé sauce ngom", desc: "Capitaine braisé, sauce arachide aux truffes noires.", price: 8900, img: "" },
    { name: "Maffé au bœuf Wagyu", desc: "Bœuf Wagyu, sauce arachide onctueuse, riz parfumé.", price: 11500, img: "" }
  ],
  "Desserts": [
    { name: "Mikado au chocolat grand cru", desc: "Gâteau moelleux cacao 75%, crème anglaise au miel d'Oku.", price: 3500, img: "" },
    { name: "Ananas rôti et sorbet gingembre", desc: "Ananas Victoria rôti, sorbet maison au gingembre frais.", price: 3200, img: "" },
    { name: "Koki revisité", desc: "Flan de haricot noir, crème coco-vanille, croustillant caramel.", price: 3900, img: "" },
    { name: "Tartelette passion meringuée", desc: "Fruit de la passion, meringue légère, croustillant praliné.", price: 3600, img: "" }
  ],
  "Boissons Chaudes": [
    { name: "Chocolat chambré épices", desc: "Chocolat noir 70%, cannelle, piment doux, chantilly.", price: 2800, img: "" },
    { name: "Café Penja grand cru", desc: "Pur arabica, torréfaction maison, servi avec mignardise.", price: 2200, img: "" },
    { name: "Infusion Kinkeliba prestige", desc: "Kinkeliba, feuilles de citronnelle, fleurs d'hibiscus.", price: 1800, img: "" },
    { name: "Chai latte camerounais", desc: "Thé épicé, lait mousseux, cannelle.", price: 2500, img: "" }
  ],
  "Boissons Froides": [
    { name: "Jus de bissap gingembre", desc: "Hibiscus bio, gingembre frais, touche de vanille.", price: 1900, img: "" },
    { name: "Limonade maison yuzu", desc: "Citron vert, yuzu, eau pétillante artisanale.", price: 2100, img: "" },
    { name: "Milkshake cacao & miel", desc: "Lait fermier, cacao cru, miel des hauts plateaux.", price: 2900, img: "" },
    { name: "Smoothie mangue ananas", desc: "Fruits frais, lait de coco, graines de chia.", price: 2600, img: "" }
  ],
  "Vins & Cocktails": [
    { name: "Moelleux de Loire", desc: "Chenin blanc, notes de miel et fruits exotiques (verre).", price: 3900, img: "" },
    { name: "Cocktail Bikutsi Spritz", desc: "Vin pétillant, liqueur de gingembre, hibiscus.", price: 4500, img: "" },
    { name: "Old Fashioned Cameroun", desc: "Whisky, bitter local, sucre de raphia.", price: 5200, img: "" },
    { name: "Mocktail Passion Baobab", desc: "Jus de fruit, sirop de baobab, menthe.", price: 3200, img: "" }
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
          ${item.img ? `<img src="${item.img}" alt="${item.name}">` : '<span>📸 Photo à venir</span>'}
        </div>
        <div class="card-content">
          <div class="menu-category">${currentCat.toUpperCase()}</div>
          <div class="menu-item-name">${item.name}</div>
          <div class="menu-desc">${item.desc}</div>
          <div class="menu-footer">
            <span class="price">${item.price.toLocaleString()} XAF</span>
            <button class="add-btn" data-name="${item.name}" data-price="${item.price}">Ajouter</button>
          </div>
        </div>
      </div>
    `;
  });
  document.querySelectorAll(".add-btn").forEach(btn => {
    btn.addEventListener("click", () => {
      alert(btn.dataset.name + " ajouté au panier !");
    });
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

<?php get_footer(); ?>