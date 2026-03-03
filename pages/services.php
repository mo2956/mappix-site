<?php $page="services"; ?><!DOCTYPE html>
<html lang="fr"><head><meta charset="UTF-8"/><meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<title>Lumière Studio — Services</title>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;1,300;1,400&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
:root{--ink:#1a1714;--paper:#f5f0e8;--gold:#b89a5a;--muted:#7a7065;--border:rgba(184,154,90,.25);--dark:#2a2420}
body{font-family:'DM Sans',sans-serif;background:var(--paper);color:var(--ink)}
nav{position:fixed;top:0;left:0;right:0;z-index:100;display:flex;align-items:center;justify-content:space-between;padding:1.3rem 4rem;background:rgba(245,240,232,.94);backdrop-filter:blur(12px);border-bottom:1px solid var(--border)}
.logo{font-family:'Cormorant Garamond',serif;font-size:1.5rem;font-weight:600;letter-spacing:.08em;color:var(--ink);text-decoration:none}.logo span{color:var(--gold)}
.links{display:flex;gap:2.5rem;list-style:none}
.links a{font-size:.78rem;letter-spacing:.15em;text-transform:uppercase;color:var(--muted);text-decoration:none;font-weight:500;transition:color .2s}
.links a:hover,.links a.on{color:var(--gold)}
.btn{display:inline-flex;align-items:center;padding:.85rem 2rem;font-size:.8rem;letter-spacing:.15em;text-transform:uppercase;font-weight:500;text-decoration:none;transition:all .25s}
.bp{background:var(--ink);color:var(--paper);border:2px solid var(--ink)}.bp:hover{background:var(--gold);border-color:var(--gold)}
.lbl{font-size:.72rem;letter-spacing:.3em;text-transform:uppercase;color:var(--gold);margin-bottom:1rem;font-weight:500}
.ph{padding:10rem 6rem 5rem;border-bottom:1px solid var(--border);animation:fu .8s ease both}
h1{font-family:'Cormorant Garamond',serif;font-size:clamp(2.8rem,5vw,5rem);font-weight:300;line-height:1.1;margin-bottom:1.5rem}
h1 em{font-style:italic;color:var(--gold)}
.pd{font-size:1.05rem;line-height:1.8;color:var(--muted);max-width:580px}
.svc-list{padding:5rem 6rem}
.sr{display:grid;grid-template-columns:80px 1fr 1fr;gap:3rem;padding:3.5rem 0;border-bottom:1px solid var(--border);align-items:start}
.sr:last-child{border-bottom:none}
.sn{font-family:'Cormorant Garamond',serif;font-size:3rem;font-weight:300;color:var(--border);line-height:1}
h2{font-family:'Cormorant Garamond',serif;font-size:2rem;font-weight:400;margin-bottom:1rem}
.sp{font-size:.92rem;line-height:1.8;color:var(--muted);margin-bottom:1.5rem}
.tags{display:flex;flex-wrap:wrap;gap:.5rem}
.tag{font-size:.7rem;letter-spacing:.12em;text-transform:uppercase;padding:.35rem .9rem;border:1px solid var(--border);color:var(--muted)}
.dl h4{font-size:.72rem;letter-spacing:.2em;text-transform:uppercase;color:var(--gold);margin-bottom:1.2rem;font-weight:500}
.dl ul{list-style:none;padding:0}
.dl li{font-size:.88rem;line-height:1.7;color:var(--muted);padding:.4rem 0;border-bottom:1px solid rgba(184,154,90,.12)}
.dl li::before{content:'— ';color:var(--gold)}
.proc{background:var(--dark);padding:6rem}
.proc h2{font-family:'Cormorant Garamond',serif;font-size:clamp(2rem,3vw,3rem);font-weight:300;color:var(--paper);margin-bottom:.8rem}
.proc h2 em{color:var(--gold);font-style:italic}
.proc p{font-size:.9rem;color:rgba(245,240,232,.5);margin-bottom:4rem;letter-spacing:.05em}
.steps{display:grid;grid-template-columns:repeat(4,1fr);gap:2px;background:rgba(184,154,90,.15)}
.step{background:var(--dark);padding:2.5rem 2rem}
.step-n{font-family:'Cormorant Garamond',serif;font-size:2.5rem;font-weight:300;color:var(--gold);opacity:.4;line-height:1;margin-bottom:1.5rem}
.step h3{font-family:'Cormorant Garamond',serif;font-size:1.2rem;font-weight:400;color:var(--paper);margin-bottom:.8rem}
.step p{font-size:.82rem;line-height:1.7;color:rgba(245,240,232,.5)}
footer{border-top:1px solid var(--border);padding:3rem 6rem;display:flex;justify-content:space-between;align-items:center;color:var(--muted);font-size:.8rem}
footer a{color:var(--gold);text-decoration:none}
@keyframes fu{from{opacity:0;transform:translateY(24px)}to{opacity:1;transform:translateY(0)}}
@media(max-width:900px){nav{padding:1.2rem 2rem}.ph{padding:8rem 2rem 3rem}.svc-list{padding:3rem 2rem}.sr{grid-template-columns:1fr;gap:1.5rem}.proc{padding:4rem 2rem}.steps{grid-template-columns:1fr 1fr}footer{flex-direction:column;gap:1rem;text-align:center;padding:2rem}}
</style></head><body>
<nav>
  <a href="index.php" class="logo">Lumière<span>.</span></a>
  <ul class="links">
    <li><a href="index.php" class="on">Accueil</a></li>
    <li><a href="services.php">Services</a></li>
    <li><a href="about.php">À propos</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li><a href="legal.php">Mentions légales</a></li>
  </ul>
</nav>
<div class="ph">
  <p class="lbl">Expertise &amp; Savoir-faire</p>
  <h1>Nos <em>services</em></h1>
  <p class="pd">Chaque mission est une collaboration unique. Nous mettons notre expertise au service de vos ambitions avec méthode et passion.</p>
</div>
<section class="svc-list">
  <div class="sr">
    <div class="sn">01</div>
    <div><h2>Identité de Marque</h2><p class="sp">Votre marque est bien plus qu'un logo. C'est une promesse, une personnalité, un univers sensoriel. Nous construisons des identités qui parlent à votre cible et résistent à l'épreuve du temps.</p>
    <div class="tags"><span class="tag">Stratégie de marque</span><span class="tag">Logo &amp; symbole</span><span class="tag">Charte graphique</span></div></div>
    <div class="dl"><h4>Ce que nous livrons</h4><ul><li>Audit de marque existante</li><li>Conception logotype (3 pistes)</li><li>Palette couleurs &amp; typographies</li><li>Guide d'usage complet (PDF)</li><li>Déclinaisons print &amp; digital</li></ul></div>
  </div>
  <div class="sr">
    <div class="sn">02</div>
    <div><h2>Design Web &amp; UX</h2><p class="sp">Des interfaces pensées pour convertir. Nous combinons esthétique raffinée et ergonomie intuitive pour offrir des expériences digitales mémorables à vos utilisateurs.</p>
    <div class="tags"><span class="tag">UI Design</span><span class="tag">UX Research</span><span class="tag">Prototypage</span></div></div>
    <div class="dl"><h4>Ce que nous livrons</h4><ul><li>Wireframes &amp; maquettes Figma</li><li>Design system complet</li><li>Prototype interactif</li><li>Intégration HTML/CSS/PHP</li><li>Optimisation mobile &amp; SEO</li></ul></div>
  </div>
  <div class="sr">
    <div class="sn">03</div>
    <div><h2>Direction Artistique</h2><p class="sp">Pour les campagnes, les lancements produits ou la communication globale, nous pilotons la vision créative et assurons une cohérence visuelle irréprochable sur tous les supports.</p>
    <div class="tags"><span class="tag">Campagnes print</span><span class="tag">Social media</span><span class="tag">Motion design</span></div></div>
    <div class="dl"><h4>Ce que nous livrons</h4><ul><li>Concept créatif &amp; moodboard</li><li>Coordination production</li><li>Déclinaisons multi-formats</li><li>Retouche &amp; post-production</li><li>Librairie de visuels</li></ul></div>
  </div>
  <div class="sr">
    <div class="sn">04</div>
    <div><h2>Conseil Créatif</h2><p class="sp">Un regard extérieur acéré sur vos projets. Sessions de travail collaboratives, audits visuels et recommandations stratégiques pour élever votre communication.</p>
    <div class="tags"><span class="tag">Audit visuel</span><span class="tag">Workshop</span><span class="tag">Consulting</span></div></div>
    <div class="dl"><h4>Ce que nous livrons</h4><ul><li>Audit communication existante</li><li>Rapport de recommandations</li><li>Sessions de co-création</li><li>Roadmap créative 12 mois</li><li>Suivi mensuel optionnel</li></ul></div>
  </div>
</section>
<section class="proc">
  <p class="lbl" style="color:var(--gold)">Notre méthode</p>
  <h2>Un processus <em>éprouvé</em></h2>
  <p>De la première rencontre à la livraison finale, chaque étape est pensée pour votre sérénité.</p>
  <div class="steps">
    <div class="step"><div class="step-n">01</div><h3>Découverte</h3><p>Rencontre, écoute active et analyse de vos besoins, valeurs et objectifs.</p></div>
    <div class="step"><div class="step-n">02</div><h3>Stratégie</h3><p>Définition du positionnement créatif et de la direction artistique à adopter.</p></div>
    <div class="step"><div class="step-n">03</div><h3>Création</h3><p>Itérations créatives avec présentations et retours jusqu'à validation.</p></div>
    <div class="step"><div class="step-n">04</div><h3>Livraison</h3><p>Fichiers finaux, guides d'utilisation et accompagnement au déploiement.</p></div>
  </div>
</section>
<footer>
  <span>&copy; <?=date('Y')?> Lumière Studio. Tous droits réservés.</span>
  <div style="display:flex;gap:2rem">
    <a href="contact.php">hello@lumiere-studio.fr</a>
    <a href="legal.php">Mentions légales</a>
  </div>
</footer>
</body></html>
