<?php $page="home"; ?><!DOCTYPE html>
<html lang="fr"><head><meta charset="UTF-8"/><meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<title>Lumière Studio</title>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;1,300;1,400&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
:root{--ink:#1a1714;--paper:#f5f0e8;--gold:#b89a5a;--muted:#7a7065;--border:rgba(184,154,90,.25);--dark:#2a2420}
body{font-family:'DM Sans',sans-serif;background:var(--dark);color:var(--paper);min-height:100vh;display:flex;flex-direction:column}

/* NAV */
nav{display:flex;align-items:center;justify-content:space-between;padding:2rem 5rem;border-bottom:1px solid rgba(184,154,90,.15)}
.logo{font-family:'Cormorant Garamond',serif;font-size:1.6rem;font-weight:600;letter-spacing:.08em;color:var(--paper);text-decoration:none}
.logo span{color:var(--gold)}
.nav-enter{font-size:.75rem;letter-spacing:.2em;text-transform:uppercase;color:var(--muted);text-decoration:none;border:1px solid rgba(184,154,90,.3);padding:.5rem 1.2rem;transition:all .2s}
.nav-enter:hover{border-color:var(--gold);color:var(--gold)}

/* HERO */
.hero{flex:1;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;padding:4rem 2rem;position:relative;overflow:hidden}
.hero::before{content:'';position:absolute;inset:0;background-image:radial-gradient(circle at 50% 40%,rgba(184,154,90,.12) 0%,transparent 60%)}
.hero-deco{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:600px;height:600px;border:1px solid rgba(184,154,90,.06);border-radius:50%;pointer-events:none}
.hero-deco::before{content:'';position:absolute;inset:60px;border:1px solid rgba(184,154,90,.05);border-radius:50%}
.hero-deco::after{content:'';position:absolute;inset:130px;border:1px solid rgba(184,154,90,.04);border-radius:50%}

.eyebrow{font-size:.72rem;letter-spacing:.35em;text-transform:uppercase;color:var(--gold);margin-bottom:2rem;animation:fu 1s ease both}
h1{font-family:'Cormorant Garamond',serif;font-size:clamp(3.5rem,8vw,7rem);font-weight:300;line-height:1.05;margin-bottom:1.5rem;animation:fu 1s ease .1s both}
h1 em{font-style:italic;color:var(--gold)}
.sub{font-size:1rem;line-height:1.8;color:rgba(245,240,232,.5);max-width:480px;margin:0 auto 3.5rem;animation:fu 1s ease .2s both}

/* ENTER BUTTON */
.enter-btn{display:inline-flex;align-items:center;gap:1rem;padding:1.1rem 2.8rem;background:transparent;border:1px solid rgba(184,154,90,.4);color:var(--paper);text-decoration:none;font-size:.82rem;letter-spacing:.2em;text-transform:uppercase;font-weight:500;transition:all .3s;animation:fu 1s ease .3s both;position:relative;overflow:hidden}
.enter-btn::before{content:'';position:absolute;inset:0;background:var(--gold);transform:scaleX(0);transform-origin:left;transition:transform .3s ease}
.enter-btn:hover::before{transform:scaleX(1)}
.enter-btn span{position:relative;z-index:1}
.enter-btn svg{position:relative;z-index:1;transition:transform .3s}
.enter-btn:hover svg{transform:translateX(4px)}

/* PAGES LINKS */
.pages{display:flex;gap:2.5rem;margin-top:5rem;animation:fu 1s ease .4s both}
.pages a{font-size:.75rem;letter-spacing:.18em;text-transform:uppercase;color:rgba(245,240,232,.3);text-decoration:none;transition:color .2s;padding-bottom:.3rem;border-bottom:1px solid transparent}
.pages a:hover{color:var(--gold);border-bottom-color:rgba(184,154,90,.4)}

/* FOOTER */
footer{padding:2rem 5rem;border-top:1px solid rgba(184,154,90,.1);display:flex;justify-content:space-between;align-items:center;font-size:.75rem;color:rgba(245,240,232,.25)}
footer a{color:rgba(184,154,90,.5);text-decoration:none;transition:color .2s}
footer a:hover{color:var(--gold)}

@keyframes fu{from{opacity:0;transform:translateY(20px)}to{opacity:1;transform:translateY(0)}}
@media(max-width:700px){nav{padding:1.5rem 2rem}.hero{padding:3rem 1.5rem}h1{font-size:3rem}.pages{flex-wrap:wrap;justify-content:center;gap:1.5rem}footer{flex-direction:column;gap:.8rem;text-align:center;padding:1.5rem 2rem}}
</style></head><body>

<nav>
  <a href="home.php" class="logo">Lumière<span>.</span></a>
  <a href="pages/index.php" class="nav-enter">Entrer dans le site</a>
</nav>

<section class="hero">
  <div class="hero-deco"></div>
  <p class="eyebrow">Studio créatif — Paris, France</p>
  <h1>Lumière<br><em>Studio</em></h1>
  <p class="sub">Identités visuelles intemporelles, design web et direction artistique pour les marques qui veulent durer.</p>

  <a href="pages/index.php" class="enter-btn">
    <span>Découvrir le studio</span>
    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
      <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </a>

  <div class="pages">
    <a href="pages/services.php">Services</a>
    <a href="pages/about.php">À propos</a>
    <a href="pages/contact.php">Contact</a>
    <a href="pages/legal.php">Mentions légales</a>
  </div>
</section>

<footer>
  <span>&copy; <?=date('Y')?> Lumière Studio SAS</span>
  <a href="pages/legal.php">Mentions légales</a>
</footer>

</body></html>
