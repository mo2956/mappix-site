<?php
$page = "contact";
$success = false;
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom    = htmlspecialchars(trim($_POST['nom'] ?? ''));
    $email  = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
    $sujet  = htmlspecialchars(trim($_POST['sujet'] ?? ''));
    $msg    = htmlspecialchars(trim($_POST['message'] ?? ''));
    if (!$nom)   $errors[] = 'nom';
    if (!$email) $errors[] = 'email';
    if (!$sujet) $errors[] = 'sujet';
    if (!$msg)   $errors[] = 'message';
    if (empty($errors)) {
        // mail('hello@lumiere-studio.fr', "Contact: $sujet", "De: $nom <$email>\n\n$msg");
        $success = true;
    }
}
?><!DOCTYPE html>
<html lang="fr"><head><meta charset="UTF-8"/><meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<title>Lumière Studio — Contact</title>
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
.lbl{font-size:.72rem;letter-spacing:.3em;text-transform:uppercase;color:var(--gold);margin-bottom:1rem;font-weight:500}
.wrap{display:grid;grid-template-columns:1fr 1.4fr;min-height:100vh;padding-top:80px}
.info{background:var(--dark);padding:6rem;display:flex;flex-direction:column;justify-content:center;position:relative;overflow:hidden}
.info::before{content:'';position:absolute;inset:0;background-image:radial-gradient(circle at 10% 90%,rgba(184,154,90,.15) 0%,transparent 50%)}
.info h1{font-family:'Cormorant Garamond',serif;font-size:clamp(2.5rem,4vw,4rem);font-weight:300;line-height:1.1;color:var(--paper);margin-bottom:1.5rem}
.info h1 em{font-style:italic;color:var(--gold)}
.info > p{font-size:.95rem;line-height:1.8;color:rgba(245,240,232,.6);margin-bottom:4rem;max-width:380px}
.ci{display:flex;flex-direction:column;gap:2rem}
.ci-row{display:flex;align-items:flex-start;gap:1.2rem}
.ci-icon{width:40px;height:40px;border:1px solid rgba(184,154,90,.3);display:flex;align-items:center;justify-content:center;flex-shrink:0;color:var(--gold);font-size:1rem}
.ci-text strong{display:block;font-size:.72rem;letter-spacing:.18em;text-transform:uppercase;color:var(--gold);margin-bottom:.3rem;font-weight:500}
.ci-text span{font-size:.9rem;color:rgba(245,240,232,.7);line-height:1.5}
.form-side{padding:6rem;display:flex;flex-direction:column;justify-content:center;animation:fu .8s ease both}
.form-side h2{font-family:'Cormorant Garamond',serif;font-size:2rem;font-weight:300;margin-bottom:.5rem}
.form-side > p{font-size:.9rem;color:var(--muted);margin-bottom:3rem;line-height:1.7}
.row2{display:grid;grid-template-columns:1fr 1fr;gap:1.5rem}
.fg{display:flex;flex-direction:column;gap:.5rem;margin-bottom:1.5rem}
.fg label{font-size:.72rem;letter-spacing:.18em;text-transform:uppercase;color:var(--muted);font-weight:500}
.fg input,.fg textarea,.fg select{padding:.9rem 1.1rem;border:1px solid var(--border);background:transparent;font-family:'DM Sans',sans-serif;font-size:.92rem;color:var(--ink);outline:none;transition:border-color .2s;-webkit-appearance:none}
.fg input:focus,.fg textarea:focus,.fg select:focus{border-color:var(--gold)}
.fg textarea{resize:vertical;min-height:130px}
.fg.err input,.fg.err textarea,.fg.err select{border-color:#c0392b}
.fg .em{font-size:.75rem;color:#c0392b;margin-top:.3rem}
.sub{width:100%;padding:1rem;background:var(--ink);color:var(--paper);border:2px solid var(--ink);font-family:'DM Sans',sans-serif;font-size:.82rem;letter-spacing:.18em;text-transform:uppercase;font-weight:500;cursor:pointer;transition:all .25s}
.sub:hover{background:var(--gold);border-color:var(--gold)}
.ok{background:#e8f5e9;border:1px solid #a5d6a7;padding:2rem;text-align:center;margin-bottom:2rem}
.ok h3{font-family:'Cormorant Garamond',serif;font-size:1.6rem;font-weight:400;color:#2e7d32;margin-bottom:.5rem}
.ok p{font-size:.9rem;color:#388e3c}
footer{border-top:1px solid var(--border);padding:3rem 6rem;display:flex;justify-content:space-between;align-items:center;color:var(--muted);font-size:.8rem}
footer a{color:var(--gold);text-decoration:none}
@keyframes fu{from{opacity:0;transform:translateY(20px)}to{opacity:1;transform:translateY(0)}}
@media(max-width:900px){nav{padding:1.2rem 2rem}.wrap{grid-template-columns:1fr}.info{padding:4rem 2rem;min-height:auto}.form-side{padding:3rem 2rem}.row2{grid-template-columns:1fr}footer{flex-direction:column;gap:1rem;padding:2rem;text-align:center}}
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
<div class="wrap">
  <div class="info">
    <p class="lbl">Parlons de votre projet</p>
    <h1>Travaillons<br><em>ensemble</em></h1>
    <p>Chaque grand projet commence par une conversation. Décrivez-nous votre vision et nous vous répondrons sous 24 h.</p>
    <div class="ci">
      <div class="ci-row">
        <div class="ci-icon">✉</div>
        <div class="ci-text"><strong>Email</strong><span>hello@lumiere-studio.fr</span></div>
      </div>
      <div class="ci-row">
        <div class="ci-icon">✆</div>
        <div class="ci-text"><strong>Téléphone</strong><span>+33 1 42 00 00 00</span></div>
      </div>
      <div class="ci-row">
        <div class="ci-icon">◎</div>
        <div class="ci-text"><strong>Adresse</strong><span>12 rue des Arts<br>75004 Paris, France</span></div>
      </div>
      <div class="ci-row">
        <div class="ci-icon">◷</div>
        <div class="ci-text"><strong>Horaires</strong><span>Lun–Ven, 9h–18h</span></div>
      </div>
    </div>
  </div>

  <div class="form-side">
    <?php if ($success): ?>
    <div class="ok">
      <h3>Message envoyé !</h3>
      <p>Merci pour votre message. Nous vous répondrons dans les 24 heures.</p>
    </div>
    <?php endif; ?>

    <p class="lbl">Formulaire de contact</p>
    <h2>Envoyez-nous un message</h2>
    <p>Tous les champs marqués sont obligatoires. Nous traitons vos données avec confidentialité.</p>

    <form method="POST" action="contact.php" novalidate>
      <div class="row2">
        <div class="fg <?=in_array('nom',$errors)?'err':''?>">
          <label for="nom">Votre nom *</label>
          <input type="text" id="nom" name="nom" value="<?=htmlspecialchars($_POST['nom']??'')?>" placeholder="Jean Dupont">
          <?php if(in_array('nom',$errors)):?><span class="em">Ce champ est requis</span><?php endif?>
        </div>
        <div class="fg <?=in_array('email',$errors)?'err':''?>">
          <label for="email">Adresse email *</label>
          <input type="email" id="email" name="email" value="<?=htmlspecialchars($_POST['email']??'')?>" placeholder="jean@exemple.fr">
          <?php if(in_array('email',$errors)):?><span class="em">Email invalide</span><?php endif?>
        </div>
      </div>
      <div class="fg <?=in_array('sujet',$errors)?'err':''?>">
        <label for="sujet">Sujet *</label>
        <select id="sujet" name="sujet">
          <option value="">— Choisissez un sujet</option>
          <option value="identite" <?=($_POST['sujet']??'')==='identite'?'selected':''?>>Identité de marque</option>
          <option value="web"      <?=($_POST['sujet']??'')==='web'?'selected':''?>>Design Web &amp; UX</option>
          <option value="da"       <?=($_POST['sujet']??'')==='da'?'selected':''?>>Direction Artistique</option>
          <option value="conseil"  <?=($_POST['sujet']??'')==='conseil'?'selected':''?>>Conseil Créatif</option>
          <option value="autre"    <?=($_POST['sujet']??'')==='autre'?'selected':''?>>Autre</option>
        </select>
        <?php if(in_array('sujet',$errors)):?><span class="em">Veuillez choisir un sujet</span><?php endif?>
      </div>
      <div class="fg <?=in_array('message',$errors)?'err':''?>">
        <label for="message">Votre message *</label>
        <textarea id="message" name="message" placeholder="Décrivez votre projet, vos besoins, votre budget indicatif..."><?=htmlspecialchars($_POST['message']??'')?></textarea>
        <?php if(in_array('message',$errors)):?><span class="em">Ce champ est requis</span><?php endif?>
      </div>
      <button type="submit" class="sub">Envoyer le message &rarr;</button>
    </form>
  </div>
</div>

<?php
$page = "contact";
$success = false;
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom    = htmlspecialchars(trim($_POST['nom'] ?? ''));
    $email  = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
    $sujet  = htmlspecialchars(trim($_POST['sujet'] ?? ''));
    $msg    = htmlspecialchars(trim($_POST['message'] ?? ''));
    if (!$nom)   $errors[] = 'nom';
    if (!$email) $errors[] = 'email';
    if (!$sujet) $errors[] = 'sujet';
    if (!$msg)   $errors[] = 'message';
    if (empty($errors)) {
        // mail('hello@lumiere-studio.fr', "Contact: $sujet", "De: $nom <$email>\n\n$msg");
        $success = true;
    }
}
?><!DOCTYPE html>
<html lang="fr"><head><meta charset="UTF-8"/><meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<title>Lumière Studio — Contact</title>
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
.lbl{font-size:.72rem;letter-spacing:.3em;text-transform:uppercase;color:var(--gold);margin-bottom:1rem;font-weight:500}
.wrap{display:grid;grid-template-columns:1fr 1.4fr;min-height:100vh;padding-top:80px}
.info{background:var(--dark);padding:6rem;display:flex;flex-direction:column;justify-content:center;position:relative;overflow:hidden}
.info::before{content:'';position:absolute;inset:0;background-image:radial-gradient(circle at 10% 90%,rgba(184,154,90,.15) 0%,transparent 50%)}
.info h1{font-family:'Cormorant Garamond',serif;font-size:clamp(2.5rem,4vw,4rem);font-weight:300;line-height:1.1;color:var(--paper);margin-bottom:1.5rem}
.info h1 em{font-style:italic;color:var(--gold)}
.info > p{font-size:.95rem;line-height:1.8;color:rgba(245,240,232,.6);margin-bottom:4rem;max-width:380px}
.ci{display:flex;flex-direction:column;gap:2rem}
.ci-row{display:flex;align-items:flex-start;gap:1.2rem}
.ci-icon{width:40px;height:40px;border:1px solid rgba(184,154,90,.3);display:flex;align-items:center;justify-content:center;flex-shrink:0;color:var(--gold);font-size:1rem}
.ci-text strong{display:block;font-size:.72rem;letter-spacing:.18em;text-transform:uppercase;color:var(--gold);margin-bottom:.3rem;font-weight:500}
.ci-text span{font-size:.9rem;color:rgba(245,240,232,.7);line-height:1.5}
.form-side{padding:6rem;display:flex;flex-direction:column;justify-content:center;animation:fu .8s ease both}
.form-side h2{font-family:'Cormorant Garamond',serif;font-size:2rem;font-weight:300;margin-bottom:.5rem}
.form-side > p{font-size:.9rem;color:var(--muted);margin-bottom:3rem;line-height:1.7}
.row2{display:grid;grid-template-columns:1fr 1fr;gap:1.5rem}
.fg{display:flex;flex-direction:column;gap:.5rem;margin-bottom:1.5rem}
.fg label{font-size:.72rem;letter-spacing:.18em;text-transform:uppercase;color:var(--muted);font-weight:500}
.fg input,.fg textarea,.fg select{padding:.9rem 1.1rem;border:1px solid var(--border);background:transparent;font-family:'DM Sans',sans-serif;font-size:.92rem;color:var(--ink);outline:none;transition:border-color .2s;-webkit-appearance:none}
.fg input:focus,.fg textarea:focus,.fg select:focus{border-color:var(--gold)}
.fg textarea{resize:vertical;min-height:130px}
.fg.err input,.fg.err textarea,.fg.err select{border-color:#c0392b}
.fg .em{font-size:.75rem;color:#c0392b;margin-top:.3rem}
.sub{width:100%;padding:1rem;background:var(--ink);color:var(--paper);border:2px solid var(--ink);font-family:'DM Sans',sans-serif;font-size:.82rem;letter-spacing:.18em;text-transform:uppercase;font-weight:500;cursor:pointer;transition:all .25s}
.sub:hover{background:var(--gold);border-color:var(--gold)}
.ok{background:#e8f5e9;border:1px solid #a5d6a7;padding:2rem;text-align:center;margin-bottom:2rem}
.ok h3{font-family:'Cormorant Garamond',serif;font-size:1.6rem;font-weight:400;color:#2e7d32;margin-bottom:.5rem}
.ok p{font-size:.9rem;color:#388e3c}
footer{border-top:1px solid var(--border);padding:3rem 6rem;display:flex;justify-content:space-between;align-items:center;color:var(--muted);font-size:.8rem}
footer a{color:var(--gold);text-decoration:none}
@keyframes fu{from{opacity:0;transform:translateY(20px)}to{opacity:1;transform:translateY(0)}}
@media(max-width:900px){nav{padding:1.2rem 2rem}.wrap{grid-template-columns:1fr}.info{padding:4rem 2rem;min-height:auto}.form-side{padding:3rem 2rem}.row2{grid-template-columns:1fr}footer{flex-direction:column;gap:1rem;padding:2rem;text-align:center}}
</style></head><body>
<nav>
  <a href="index.php" class="logo">Lumière<span>.</span></a>
  <ul class="links">
    <li><a href="index.php">Accueil</a></li>
    <li><a href="services.php">Services</a></li>
    <li><a href="about.php">À propos</a></li>
    <li><a href="contact.php" class="on">Contact</a></li>
    <li><a href="legal.php" class="on">Legal</a></li>

  </ul>
</nav>

<div class="wrap">
  <div class="info">
    <p class="lbl">Parlons de votre projet</p>
    <h1>Travaillons<br><em>ensemble</em></h1>
    <p>Chaque grand projet commence par une conversation. Décrivez-nous votre vision et nous vous répondrons sous 24 h.</p>
    <div class="ci">
      <div class="ci-row">
        <div class="ci-icon">✉</div>
        <div class="ci-text"><strong>Email</strong><span>hello@lumiere-studio.fr</span></div>
      </div>
      <div class="ci-row">
        <div class="ci-icon">✆</div>
        <div class="ci-text"><strong>Téléphone</strong><span>+33 1 42 00 00 00</span></div>
      </div>
      <div class="ci-row">
        <div class="ci-icon">◎</div>
        <div class="ci-text"><strong>Adresse</strong><span>12 rue des Arts<br>75004 Paris, France</span></div>
      </div>
      <div class="ci-row">
        <div class="ci-icon">◷</div>
        <div class="ci-text"><strong>Horaires</strong><span>Lun-Ven, 9h-18h</span></div>
      </div>
    </div>
  </div>

  <div class="form-side">
    <?php if ($success): ?>
    <div class="ok">
      <h3>Message envoyé !</h3>
      <p>Merci pour votre message. Nous vous répondrons dans les 24 heures.</p>
    </div>
    <?php endif; ?>

    <p class="lbl">Formulaire de contact</p>
    <h2>Envoyez-nous un message</h2>
    <p>Tous les champs marqués sont obligatoires. Nous traitons vos données avec confidentialité.</p>

    <form method="POST" action="contact.php" novalidate>
      <div class="row2">
        <div class="fg <?=in_array('nom',$errors)?'err':''?>">
          <label for="nom">Votre nom *</label>
          <input type="text" id="nom" name="nom" value="<?=htmlspecialchars($_POST['nom']??'')?>" placeholder="Jean Dupont">
          <?php if(in_array('nom',$errors)):?><span class="em">Ce champ est requis</span><?php endif?>
        </div>
        <div class="fg <?=in_array('email',$errors)?'err':''?>">
          <label for="email">Adresse email *</label>
          <input type="email" id="email" name="email" value="<?=htmlspecialchars($_POST['email']??'')?>" placeholder="jean@exemple.fr">
          <?php if(in_array('email',$errors)):?><span class="em">Email invalide</span><?php endif?>
        </div>
      </div>
      <div class="fg <?=in_array('sujet',$errors)?'err':''?>">
        <label for="sujet">Sujet *</label>
        <select id="sujet" name="sujet">
          <option value="">— Choisissez un sujet</option>
          <option value="identite" <?=($_POST['sujet']??'')==='identite'?'selected':''?>>Identité de marque</option>
          <option value="web"      <?=($_POST['sujet']??'')==='web'?'selected':''?>>Design Web &amp; UX</option>
          <option value="da"       <?=($_POST['sujet']??'')==='da'?'selected':''?>>Direction Artistique</option>
          <option value="conseil"  <?=($_POST['sujet']??'')==='conseil'?'selected':''?>>Conseil Créatif</option>
          <option value="autre"    <?=($_POST['sujet']??'')==='autre'?'selected':''?>>Autre</option>
        </select>
        <?php if(in_array('sujet',$errors)):?><span class="em">Veuillez choisir un sujet</span><?php endif?>
      </div>
      <div class="fg <?=in_array('message',$errors)?'err':''?>">
        <label for="message">Votre message *</label>
        <textarea id="message" name="message" placeholder="Décrivez votre projet, vos besoins, votre budget indicatif..."><?=htmlspecialchars($_POST['message']??'')?></textarea>
        <?php if(in_array('message',$errors)):?><span class="em">Ce champ est requis</span><?php endif?>
      </div>
      <button type="submit" class="sub">Envoyer le message &rarr;</button>
    </form>
  </div>
</div>

<footer>
  <span>&copy; <?=date('Y')?> Lumière Studio. Tous droits réservés.</span>
  <span>12 rue des Arts, 75004 Paris</span>
</footer>
</body></html>