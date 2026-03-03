<?php $page="legal"; ?><!DOCTYPE html>
<html lang="fr"><head><meta charset="UTF-8"/><meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<title>Lumière Studio — Mentions légales</title>
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

/* PAGE HERO */
.ph{padding:10rem 6rem 5rem;border-bottom:1px solid var(--border);display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:end;animation:fu .8s ease both}
.ph h1{font-family:'Cormorant Garamond',serif;font-size:clamp(3rem,5vw,5rem);font-weight:300;line-height:1.05}
.ph h1 em{font-style:italic;color:var(--gold)}
.ph-meta{display:flex;flex-direction:column;gap:1.2rem;padding-bottom:.4rem}
.meta-item strong{display:block;font-size:.7rem;letter-spacing:.2em;text-transform:uppercase;color:var(--gold);margin-bottom:.2rem;font-weight:500}
.meta-item span{font-size:.88rem;color:var(--muted)}

/* LAYOUT */
.body-wrap{display:grid;grid-template-columns:240px 1fr;gap:0;min-height:60vh}

/* SIDEBAR NAV */
.sidebar{padding:4rem 3rem;border-right:1px solid var(--border);position:sticky;top:80px;align-self:start;height:calc(100vh - 80px);overflow-y:auto}
.sidebar-title{font-size:.68rem;letter-spacing:.25em;text-transform:uppercase;color:var(--muted);margin-bottom:1.5rem;font-weight:500}
.toc{list-style:none;display:flex;flex-direction:column;gap:.2rem}
.toc a{font-size:.82rem;color:var(--muted);text-decoration:none;padding:.45rem .8rem;display:block;border-left:2px solid transparent;transition:all .2s;line-height:1.4}
.toc a:hover{color:var(--gold);border-left-color:var(--gold);background:rgba(184,154,90,.05)}
.toc a.active{color:var(--gold);border-left-color:var(--gold)}

/* CONTENT */
.content{padding:5rem 6rem}
.section-block{margin-bottom:4rem;padding-bottom:4rem;border-bottom:1px solid var(--border);scroll-margin-top:120px}
.section-block:last-child{border-bottom:none;margin-bottom:0}
.section-block h2{font-family:'Cormorant Garamond',serif;font-size:1.8rem;font-weight:400;margin-bottom:1.5rem;display:flex;align-items:center;gap:1rem}
.section-block h2::before{content:'';display:inline-block;width:28px;height:1px;background:var(--gold);flex-shrink:0}
.section-block h3{font-family:'Cormorant Garamond',serif;font-size:1.15rem;font-weight:400;color:var(--ink);margin:1.8rem 0 .7rem}
.section-block p{font-size:.92rem;line-height:1.85;color:var(--muted);margin-bottom:1rem}
.section-block p:last-child{margin-bottom:0}
.section-block a{color:var(--gold);text-decoration:none;border-bottom:1px solid rgba(184,154,90,.3);transition:border-color .2s}
.section-block a:hover{border-color:var(--gold)}
.section-block ul{list-style:none;padding:0;margin:.8rem 0 1rem}
.section-block li{font-size:.92rem;line-height:1.8;color:var(--muted);padding:.35rem 0 .35rem 1.4rem;position:relative;border-bottom:1px solid rgba(184,154,90,.08)}
.section-block li::before{content:'—';position:absolute;left:0;color:var(--gold);font-size:.8rem}
.highlight{background:rgba(184,154,90,.07);border-left:2px solid var(--gold);padding:1.2rem 1.5rem;margin:1.5rem 0;font-size:.9rem;line-height:1.8;color:var(--muted)}

/* UPDATE BADGE */
.update-badge{display:inline-flex;align-items:center;gap:.5rem;font-size:.72rem;letter-spacing:.15em;text-transform:uppercase;color:var(--gold);border:1px solid var(--border);padding:.4rem 1rem;margin-bottom:3rem}
.update-badge::before{content:'';width:6px;height:6px;background:var(--gold);border-radius:50%;display:inline-block}

footer{border-top:1px solid var(--border);padding:3rem 6rem;display:flex;justify-content:space-between;align-items:center;color:var(--muted);font-size:.8rem}
footer a{color:var(--gold);text-decoration:none}
@keyframes fu{from{opacity:0;transform:translateY(20px)}to{opacity:1;transform:translateY(0)}}

@media(max-width:1100px){.body-wrap{grid-template-columns:1fr}.sidebar{display:none}.content{padding:4rem 3rem}}
@media(max-width:900px){nav{padding:1.2rem 2rem}.ph{grid-template-columns:1fr;padding:8rem 2rem 3rem;gap:2rem}.content{padding:3rem 2rem}footer{flex-direction:column;gap:1rem;padding:2rem;text-align:center}}
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
  <div>
    <p class="lbl">Transparence &amp; Conformité</p>
    <h1>Mentions<br><em>légales</em></h1>
  </div>
  <div class="ph-meta">
    <div class="meta-item"><strong>Dernière mise à jour</strong><span><?=date('d/m/Y')?></span></div>
    <div class="meta-item"><strong>Applicable depuis</strong><span>1er janvier 2023</span></div>
    <div class="meta-item"><strong>Juridiction</strong><span>Droit français — RGPD</span></div>
  </div>
</div>

<div class="body-wrap">
  <!-- SIDEBAR -->
  <aside class="sidebar">
    <p class="sidebar-title">Sommaire</p>
    <ul class="toc">
      <li><a href="#editeur">Éditeur du site</a></li>
      <li><a href="#hebergement">Hébergement</a></li>
      <li><a href="#propriete">Propriété intellectuelle</a></li>
      <li><a href="#donnees">Données personnelles</a></li>
      <li><a href="#cookies">Cookies</a></li>
      <li><a href="#responsabilite">Responsabilité</a></li>
      <li><a href="#liens">Liens hypertextes</a></li>
      <li><a href="#droit">Droit applicable</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </aside>

  <!-- MAIN CONTENT -->
  <main class="content">

    <div class="update-badge">Mise à jour : <?=date('d F Y')?></div>

    <div class="section-block" id="editeur">
      <h2>Éditeur du site</h2>
      <p>Le présent site internet est édité par la société <strong>Lumière Studio SAS</strong>, société par actions simplifiée au capital de 10 000 €, immatriculée au Registre du Commerce et des Sociétés de Paris sous le numéro <strong>RCS Paris 123 456 789</strong>.</p>
      <h3>Coordonnées</h3>
      <ul>
        <li>Siège social : 12 rue des Arts, 75004 Paris, France</li>
        <li>Numéro de téléphone : +33 1 42 00 00 00</li>
        <li>Adresse email : <a href="mailto:hello@lumiere-studio.fr">hello@lumiere-studio.fr</a></li>
        <li>Numéro de TVA intracommunautaire : FR 12 123456789</li>
        <li>Code APE/NAF : 7410Z — Activités spécialisées de design</li>
      </ul>
      <h3>Direction de la publication</h3>
      <p>La directrice de la publication est <strong>Élise Morel</strong>, Co-fondatrice et Directrice Artistique de Lumière Studio SAS.</p>
    </div>

    <div class="section-block" id="hebergement">
      <h2>Hébergement</h2>
      <p>Ce site est hébergé par :</p>
      <ul>
        <li>Raison sociale : OVHcloud SAS</li>
        <li>Adresse : 2 rue Kellermann, 59100 Roubaix, France</li>
        <li>Téléphone : +33 9 72 10 10 07</li>
        <li>Site web : <a href="https://www.ovhcloud.com" target="_blank" rel="noopener">www.ovhcloud.com</a></li>
      </ul>
      <div class="highlight">Les données hébergées sont stockées exclusivement sur des serveurs situés en Union Européenne, conformément aux exigences du RGPD.</div>
    </div>

    <div class="section-block" id="propriete">
      <h2>Propriété intellectuelle</h2>
      <p>L'ensemble des éléments constituant ce site (textes, graphismes, logiciels, photographies, images, sons, plans, logos, marques, noms de domaine, etc.) est la propriété exclusive de <strong>Lumière Studio SAS</strong> ou de ses partenaires, et est protégé par les lois françaises et internationales relatives à la propriété intellectuelle.</p>
      <h3>Droits réservés</h3>
      <p>Toute reproduction, représentation, modification, publication, adaptation ou exploitation, totale ou partielle, des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite sans l'autorisation écrite préalable de Lumière Studio SAS.</p>
      <h3>Usage autorisé</h3>
      <p>Toute utilisation non autorisée du site ou de l'un quelconque des éléments qu'il contient sera considérée comme constitutive d'une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p>
    </div>

    <div class="section-block" id="donnees">
      <h2>Données personnelles</h2>
      <p>Lumière Studio SAS accorde une importance particulière à la protection de vos données personnelles et s'engage à les traiter dans le respect du <strong>Règlement Général sur la Protection des Données (RGPD)</strong> et de la loi Informatique et Libertés modifiée.</p>
      <h3>Données collectées</h3>
      <p>Dans le cadre de l'utilisation de ce site, nous pouvons être amenés à collecter les données suivantes :</p>
      <ul>
        <li>Données d'identification : nom, prénom, adresse email</li>
        <li>Données de contact : numéro de téléphone, adresse postale</li>
        <li>Données de navigation : adresse IP, pages visitées, durée des visites</li>
        <li>Données transmises via le formulaire de contact</li>
      </ul>
      <h3>Finalités du traitement</h3>
      <ul>
        <li>Réponse aux demandes de contact et devis</li>
        <li>Amélioration de l'expérience utilisateur du site</li>
        <li>Respect des obligations légales et réglementaires</li>
        <li>Prospection commerciale (avec votre consentement préalable)</li>
      </ul>
      <h3>Vos droits</h3>
      <p>Conformément au RGPD, vous disposez des droits suivants concernant vos données personnelles :</p>
      <ul>
        <li><strong>Droit d'accès</strong> : obtenir la confirmation que vos données sont traitées</li>
        <li><strong>Droit de rectification</strong> : faire corriger des données inexactes</li>
        <li><strong>Droit à l'effacement</strong> : demander la suppression de vos données</li>
        <li><strong>Droit à la portabilité</strong> : recevoir vos données dans un format lisible</li>
        <li><strong>Droit d'opposition</strong> : vous opposer au traitement de vos données</li>
      </ul>
      <p>Pour exercer ces droits, contactez notre Délégué à la Protection des Données à l'adresse <a href="mailto:dpo@lumiere-studio.fr">dpo@lumiere-studio.fr</a>. Vous disposez également du droit d'introduire une réclamation auprès de la <a href="https://www.cnil.fr" target="_blank" rel="noopener">CNIL</a>.</p>
      <div class="highlight">Vos données ne sont jamais vendues à des tiers. La durée de conservation n'excède pas 3 ans à compter du dernier contact.</div>
    </div>

    <div class="section-block" id="cookies">
      <h2>Cookies</h2>
      <p>Un cookie est un petit fichier texte déposé sur votre terminal lors de la visite d'un site. Ce site utilise des cookies dans le but d'améliorer votre expérience de navigation et d'analyser notre audience.</p>
      <h3>Types de cookies utilisés</h3>
      <ul>
        <li><strong>Cookies techniques</strong> : indispensables au bon fonctionnement du site (session, préférences)</li>
        <li><strong>Cookies analytiques</strong> : mesure d'audience via des outils anonymisés (avec votre consentement)</li>
        <li><strong>Cookies de préférence</strong> : mémorisation de vos choix d'affichage</li>
      </ul>
      <h3>Gestion des cookies</h3>
      <p>Vous pouvez à tout moment modifier vos préférences en matière de cookies via les paramètres de votre navigateur. La désactivation de certains cookies peut toutefois affecter votre expérience sur le site.</p>
      <p>Pour en savoir plus sur la gestion des cookies, consultez le site <a href="https://www.cnil.fr/fr/cookies-les-outils-pour-les-maitriser" target="_blank" rel="noopener">cnil.fr</a>.</p>
    </div>

    <div class="section-block" id="responsabilite">
      <h2>Responsabilité</h2>
      <p>Lumière Studio SAS s'efforce d'assurer l'exactitude et la mise à jour des informations diffusées sur ce site. Cependant, nous ne pouvons garantir l'exhaustivité, la précision ou l'actualité des informations publiées.</p>
      <h3>Limitation de responsabilité</h3>
      <p>Lumière Studio SAS décline toute responsabilité pour :</p>
      <ul>
        <li>Les interruptions ou indisponibilités du site liées à des opérations de maintenance</li>
        <li>Les dommages directs ou indirects résultant de l'utilisation du site</li>
        <li>Les erreurs ou omissions dans le contenu des pages</li>
        <li>La présence de virus ou autres composants malveillants sur le site</li>
      </ul>
    </div>

    <div class="section-block" id="liens">
      <h2>Liens hypertextes</h2>
      <p>Ce site peut contenir des liens vers des sites tiers. Lumière Studio SAS n'exerce aucun contrôle sur ces sites et décline toute responsabilité quant à leur contenu ou leur politique de confidentialité.</p>
      <p>Tout lien hypertexte pointant vers le présent site doit faire l'objet d'une autorisation préalable et écrite de Lumière Studio SAS. Pour toute demande, contactez-nous à <a href="mailto:hello@lumiere-studio.fr">hello@lumiere-studio.fr</a>.</p>
    </div>

    <div class="section-block" id="droit">
      <h2>Droit applicable</h2>
      <p>Les présentes mentions légales sont soumises au droit français. En cas de litige relatif à l'interprétation ou à l'exécution de ces mentions légales, les tribunaux français seront seuls compétents.</p>
      <p>Tout litige sera soumis à la juridiction exclusive des tribunaux du ressort de la Cour d'Appel de Paris, nonobstant pluralité de défendeurs ou appel en garantie.</p>
      <div class="highlight">Conformément à l'article 14 du Règlement (UE) n° 524/2013, la Commission Européenne met à disposition une plateforme de Résolution en Ligne des Litiges accessible à l'adresse <a href="https://ec.europa.eu/consumers/odr" target="_blank" rel="noopener">ec.europa.eu/consumers/odr</a>.</div>
    </div>

    <div class="section-block" id="contact">
      <h2>Contact</h2>
      <p>Pour toute question relative aux présentes mentions légales ou à la politique de confidentialité, vous pouvez nous contacter :</p>
      <ul>
        <li>Par email : <a href="mailto:legal@lumiere-studio.fr">legal@lumiere-studio.fr</a></li>
        <li>Par courrier : Lumière Studio SAS — Service Juridique, 12 rue des Arts, 75004 Paris</li>
        <li>Par téléphone : +33 1 42 00 00 00 (du lundi au vendredi, 9h–18h)</li>
      </ul>
    </div>

  </main>
</div>

<footer>
  <span>&copy; <?=date('Y')?> Lumière Studio SAS. Tous droits réservés.</span>
  <a href="index.php">&larr; Retour à l'accueil</a>
</footer>

<script>
// Highlight active TOC link on scroll
const sections = document.querySelectorAll('.section-block');
const links = document.querySelectorAll('.toc a');
const obs = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      links.forEach(l => l.classList.remove('active'));
      const active = document.querySelector('.toc a[href="#' + e.target.id + '"]');
      if (active) active.classList.add('active');
    }
  });
}, { rootMargin: '-30% 0px -60% 0px' });
sections.forEach(s => obs.observe(s));
</script>

</body></html>
