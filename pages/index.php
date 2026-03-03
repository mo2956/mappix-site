<?php $page="index"; ?><!DOCTYPE html>
<html lang="fr"><head><meta charset="UTF-8"/><meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<title>Lumière Studio — Accueil</title>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;1,300;1,400&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
:root{--ink:#1a1714;--paper:#f5f0e8;--gold:#b89a5a;--muted:#7a7065;--border:rgba(184,154,90,.25);--dark:#2a2420}
body{font-family:'DM Sans',sans-serif;background:var(--paper);color:var(--ink)}
nav{position:fixed;top:0;left:0;right:0;z-index:100;display:flex;align-items:center;justify-content:space-between;padding:1.3rem 4rem;background:rgba(245,240,232,.94);backdrop-filter:blur(12px);border-bottom:1px solid var(--border)}
.logo{font-family:'Cormorant Garamond',serif;font-size:1.5rem;font-weight:600;letter-spacing:.08em;color:var(--ink);text-decoration:none}
.logo span{color:var(--gold)}
.links{display:flex;gap:2.5rem;list-style:none}
.links a{font-size:.78rem;letter-spacing:.15em;text-transform:uppercase;color:var(--muted);text-decoration:none;font-weight:500;transition:color .2s}
.links a:hover,.links a.on{color:var(--gold)}
.btn{display:inline-flex;align-items:center;padding:.85rem 2rem;font-size:.8rem;letter-spacing:.15em;text-transform:uppercase;font-weight:500;text-decoration:none;transition:all .25s}
.bp{background:var(--ink);color:var(--paper);border:2px solid var(--ink)}.bp:hover{background:var(--gold);border-color:var(--gold)}
.bo{background:transparent;color:var(--ink);border:2px solid var(--border)}.bo:hover{border-color:var(--gold);color:var(--gold)}
.lbl{font-size:.72rem;letter-spacing:.3em;text-transform:uppercase;color:var(--gold);margin-bottom:1rem;font-weight:500}
.hero{min-height:100vh;display:grid;grid-template-columns:1fr 1fr;padding-top:80px}
.ht{display:flex;flex-direction:column;justify-content:center;padding:6rem 4rem 6rem 6rem;animation:fu 1s ease both}
h1{font-family:'Cormorant Garamond',serif;font-size:clamp(3rem,5vw,5.5rem);font-weight:300;line-height:1.1;margin-bottom:1.8rem}
h1 em{font-style:italic;color:var(--gold)}
.hdesc{font-size:1rem;line-height:1.8;color:var(--muted);max-width:420px;margin-bottom:3rem}
.bg{display:flex;gap:1rem;flex-wrap:wrap}
.hv{position:relative;overflow:hidden;animation:fi 1.2s ease .3s both}
.hv::before{content:'';position:absolute;inset:0;background:linear-gradient(135deg,#1a1714 0%,#3a2e22 50%,#5a4632 100%)}
.hp{position:absolute;inset:0;background-image:radial-gradient(circle at 30% 70%,rgba(184,154,90,.18) 0%,transparent 50%),radial-gradient(circle at 80% 20%,rgba(184,154,90,.12) 0%,transparent 40%)}
.hd{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:240px;height:240px;border:1px solid rgba(184,154,90,.2);border-radius:50%}
.hd::before{content:'';position:absolute;inset:30px;border:1px solid rgba(184,154,90,.15);border-radius:50%}
.hq{position:absolute;bottom:4rem;left:3rem;right:3rem;font-family:'Cormorant Garamond',serif;font-size:1.5rem;font-style:italic;font-weight:300;color:rgba(245,240,232,.8);line-height:1.5}
.hq cite{display:block;margin-top:1rem;font-family:'DM Sans',sans-serif;font-size:.7rem;letter-spacing:.2em;text-transform:uppercase;color:var(--gold);font-style:normal}
.hl{position:absolute;top:3rem;left:3rem;width:60px;height:1px;background:var(--gold)}
.stats{display:grid;grid-template-columns:repeat(3,1fr);border-top:1px solid var(--border);border-bottom:1px solid var(--border)}
.stat{padding:3rem;text-align:center;border-right:1px solid var(--border)}
.stat:last-child{border-right:none}
.sn{font-family:'Cormorant Garamond',serif;font-size:3.5rem;font-weight:300;color:var(--gold);line-height:1}
.sl{font-size:.74rem;letter-spacing:.2em;text-transform:uppercase;color:var(--muted);margin-top:.5rem}
.sec{padding:7rem 6rem}
h2{font-family:'Cormorant Garamond',serif;font-size:clamp(2rem,3.5vw,3.5rem);font-weight:300;line-height:1.2;margin-bottom:1.5rem}
.si{font-size:1rem;line-height:1.8;color:var(--muted);max-width:550px;margin-bottom:4rem}
.sg{display:grid;grid-template-columns:repeat(3,1fr);gap:1px;background:var(--border);border:1px solid var(--border)}
.sc{background:var(--paper);padding:2.5rem;transition:background .3s}.sc:hover{background:#ede8de}
.sc-n{font-family:'Cormorant Garamond',serif;font-size:1rem;color:var(--gold);margin-bottom:1.5rem;display:block}
.sc h3{font-family:'Cormorant Garamond',serif;font-size:1.4rem;font-weight:400;margin-bottom:.8rem}
.sc p{font-size:.88rem;line-height:1.7;color:var(--muted)}
.cta{margin:0 6rem;padding:4rem;background:var(--dark);display:flex;align-items:center;justify-content:space-between;gap:2rem}
.cta h3{font-family:'Cormorant Garamond',serif;font-size:2rem;font-weight:300;color:var(--paper)}
.cta h3 em{color:var(--gold);font-style:italic}
footer{border-top:1px solid var(--border);padding:3rem 6rem;display:flex;justify-content:space-between;align-items:center;color:var(--muted);font-size:.8rem;margin-top:4rem}
footer a{color:var(--gold);text-decoration:none}
@keyframes fu{from{opacity:0;transform:translateY(24px)}to{opacity:1;transform:translateY(0)}}
@keyframes fi{from{opacity:0}to{opacity:1}}
@media(max-width:900px){nav{padding:1.2rem 2rem}.hero{grid-template-columns:1fr}.ht{padding:3rem 2rem}.hv{min-height:55vw}.stats{grid-template-columns:1fr}.stat{border-right:none;border-bottom:1px solid var(--border)}.sec{padding:4rem 2rem}.sg{grid-template-columns:1fr}.cta{margin:0 2rem;flex-direction:column;text-align:center}footer{flex-direction:column;gap:1rem;text-align:center;padding:2rem}}
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
<section class="hero">
  <div class="ht">
    <p class="lbl">Studio créatif — Paris</p>
    <h1>L'art de la <em>présence</em> visuelle</h1>
    <p class="hdesc">Nous concevons des identités visuelles intemporelles qui révèlent l'essence de votre marque et créent des connexions durables.</p>
    <div class="bg">
      <a href="services.php" class="btn bp">Nos services &rarr;</a>
      <a href="contact.php" class="btn bo">Démarrer un projet</a>
    </div>
  </div>
  <div class="hv">
    <div class="hp"></div><div class="hd"></div><div class="hl"></div>
    <blockquote class="hq">"Le design est l'ambassadeur silencieux de votre marque."<cite>— Paul Rand</cite></blockquote>
  </div>
</section>
<div class="stats">
  <div class="stat"><div class="sn">12+</div><div class="sl">Années d'expérience</div></div>
  <div class="stat"><div class="sn">240</div><div class="sl">Projets réalisés</div></div>
  <div class="stat"><div class="sn">98%</div><div class="sl">Clients satisfaits</div></div>
</div>
<section class="sec">
  <p class="lbl">Ce que nous faisons</p>
  <h2>Des services pensés<br>pour votre croissance</h2>
  <p class="si">De l'identité de marque au développement web, chaque projet est traité avec la même rigueur créative.</p>
  <div class="sg">
    <div class="sc"><span class="sc-n">01</span><h3>Identité de Marque</h3><p>Logo, charte graphique, typographie — identités cohérentes et mémorables.</p></div>
    <div class="sc"><span class="sc-n">02</span><h3>Design Web</h3><p>Interfaces élégantes et expériences utilisateur fluides qui convertissent.</p></div>
    <div class="sc"><span class="sc-n">03</span><h3>Direction Artistique</h3><p>Stratégie visuelle globale pour campagnes et communication multicanal.</p></div>
  </div>
  <div style="margin-top:2.5rem"><a href="services.php" class="btn bo">Voir tous les services &rarr;</a></div>
</section>
<div class="cta">
  <h3>Prêt à donner vie à votre <em>vision</em> ?</h3>
  <a href="contact.php" class="btn bp">Nous contacter &rarr;</a>
</div>
<footer>
  <span>&copy; <?=date('Y')?> Lumière Studio. Tous droits réservés.</span>
  <div style="display:flex;gap:2rem">
    <a href="contact.php">hello@lumiere-studio.fr</a>
    <a href="legal.php">Mentions légales</a>
  </div>
</footer>
</body></html>