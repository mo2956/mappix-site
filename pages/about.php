<?php $page="about"; ?><!DOCTYPE html>
<html lang="fr"><head><meta charset="UTF-8"/><meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<title>Lumière Studio — À propos</title>
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
.split{display:grid;grid-template-columns:1fr 1fr;min-height:100vh;padding-top:80px}
.sd{background:var(--dark);display:flex;flex-direction:column;justify-content:center;padding:6rem;position:relative;overflow:hidden}
.sd::before{content:'';position:absolute;inset:0;background-image:radial-gradient(circle at 20% 80%,rgba(184,154,90,.15) 0%,transparent 50%)}
.line{width:60px;height:1px;background:var(--gold);margin-bottom:2rem}
.bq{font-family:'Cormorant Garamond',serif;font-size:clamp(2rem,3.5vw,3.2rem);font-weight:300;line-height:1.3;color:var(--paper);margin-bottom:2rem}
.bq em{font-style:italic;color:var(--gold)}
.sd > p{font-size:.88rem;line-height:1.8;color:rgba(245,240,232,.5);max-width:380px}
.sl{display:flex;flex-direction:column;justify-content:center;padding:6rem;animation:fu .8s ease both}
.sl h1{font-family:'Cormorant Garamond',serif;font-size:clamp(2.2rem,3.5vw,3.8rem);font-weight:300;line-height:1.1;margin-bottom:2rem}
.sl h1 em{font-style:italic;color:var(--gold)}
.sl p{font-size:.97rem;line-height:1.9;color:var(--muted);margin-bottom:1.4rem}
.vals{padding:5rem 6rem;border-top:1px solid var(--border)}
.vals h2{font-family:'Cormorant Garamond',serif;font-size:clamp(1.8rem,3vw,2.8rem);font-weight:300;margin-bottom:3rem}
.vg{display:grid;grid-template-columns:repeat(3,1fr);gap:1px;background:var(--border);border:1px solid var(--border)}
.v{background:var(--paper);padding:2.5rem;transition:background .3s}.v:hover{background:#ede8de}
.vi{font-size:1.3rem;margin-bottom:1.5rem;color:var(--gold)}
.v h3{font-family:'Cormorant Garamond',serif;font-size:1.4rem;font-weight:400;margin-bottom:.8rem}
.v p{font-size:.88rem;line-height:1.7;color:var(--muted)}
.team{padding:5rem 6rem;background:#ede8de}
.team h2{font-family:'Cormorant Garamond',serif;font-size:clamp(1.8rem,3vw,2.8rem);font-weight:300;margin-bottom:1rem}
.team > p{font-size:.95rem;line-height:1.8;color:var(--muted);max-width:500px;margin-bottom:3rem}
.tg{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem}
.tc{padding:2rem;border:1px solid var(--border);background:var(--paper)}
.av{width:56px;height:56px;border-radius:50%;background:var(--dark);display:flex;align-items:center;justify-content:center;margin-bottom:1.2rem;font-family:'Cormorant Garamond',serif;font-size:1.2rem;color:var(--gold)}
.tc h3{font-family:'Cormorant Garamond',serif;font-size:1.1rem;font-weight:400;margin-bottom:.2rem}
.tr{font-size:.7rem;letter-spacing:.18em;text-transform:uppercase;color:var(--gold);margin-bottom:.8rem}
.tc p{font-size:.84rem;line-height:1.6;color:var(--muted)}
footer{border-top:1px solid var(--border);padding:3rem 6rem;display:flex;justify-content:space-between;align-items:center;color:var(--muted);font-size:.8rem}
footer a{color:var(--gold);text-decoration:none}
@keyframes fu{from{opacity:0;transform:translateY(20px)}to{opacity:1;transform:translateY(0)}}
@media(max-width:900px){nav{padding:1.2rem 2rem}.split{grid-template-columns:1fr}.sd,.sl{padding:4rem 2rem}.vals{padding:3rem 2rem}.vg{grid-template-columns:1fr}.team{padding:3rem 2rem}.tg{grid-template-columns:1fr}footer{flex-direction:column;gap:1rem;padding:2rem;text-align:center}}
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
<section class="split">
  <div class="sd">
    <div class="line"></div>
    <p class="lbl">Notre manifeste</p>
    <blockquote class="bq">"Nous croyons que le beau est toujours <em>utile</em>."</blockquote>
    <p>Fondé en 2012, Lumière Studio est né de cette conviction : un design réfléchi crée de la valeur durable.</p>
  </div>
  <div class="sl">
    <p class="lbl">Notre histoire</p>
    <h1>Un studio à la croisée de l'art et du <em>commerce</em></h1>
    <p>Lumière Studio a été fondé par Élise Morel et Thomas Aubert, deux anciens directeurs artistiques réunis par une même obsession : créer des visuels qui durent. Ce qui a commencé comme une collaboration ponctuelle s'est transformé en un collectif de 8 spécialistes passionnés.</p>
    <p>Notre philosophie est simple : chaque client mérite une attention sur mesure. Nous refusons les modèles, les templates et les raccourcis. À la place, nous investissons dans la compréhension profonde de votre univers.</p>
  </div>
</section>
<section class="vals">
  <p class="lbl">Ce qui nous guide</p>
  <h2>Nos valeurs fondamentales</h2>
  <div class="vg">
    <div class="v"><div class="vi">◇</div><h3>Exigence</h3><p>Chaque pixel, chaque mot, chaque courbe fait l'objet d'une attention minutieuse. La médiocrité ne nous intéresse pas.</p></div>
    <div class="v"><div class="vi">○</div><h3>Authenticité</h3><p>Nous refusons les tendances au détriment de l'intemporel. Votre identité doit vous ressembler, pas ressembler à la mode du moment.</p></div>
    <div class="v"><div class="vi">△</div><h3>Collaboration</h3><p>Le meilleur travail naît d'une confiance mutuelle. Nous sommes vos partenaires créatifs, pas simplement vos prestataires.</p></div>
  </div>
</section>
<section class="team">
  <p class="lbl">Qui nous sommes</p>
  <h2>L'équipe</h2>
  <p>Huit experts réunis autour d'une passion commune : donner vie à des idées fortes avec une exécution irréprochable.</p>
  <div class="tg">
    <div class="tc"><div class="av">ÉM</div><h3>Élise Morel</h3><p class="tr">Co-fondatrice &amp; DA</p><p>15 ans d'expérience en direction artistique pour des marques de luxe et culturelles.</p></div>
    <div class="tc"><div class="av">TA</div><h3>Thomas Aubert</h3><p class="tr">Co-fondateur &amp; Stratégie</p><p>Expert en branding et positionnement, ancien directeur créatif international.</p></div>
    <div class="tc"><div class="av">CL</div><h3>Camille Laurent</h3><p class="tr">Lead Designer Web</p><p>Spécialiste UI/UX, elle transforme des concepts complexes en interfaces intuitives.</p></div>
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
