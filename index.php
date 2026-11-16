<?php
// Centralisation des données pour chaque carré
$sections = [
    'scolarite et formation' => [
        'titre' => 'Scolarité et formation',
        'icone' => '🎓',
        'resume' => 'Parcours académique et diplômes',
        'contenu' => '
            <div class="item">
                <h3>Baccalauréat en cybersécurité</h3>
                <h4>Formation futur</h4>
                <span class="badge">2027 - 2030</span>
                <p><strong>Université du Québec en Outaouais</strong> — Gatineau</p>
            </div>
            <div class="item">
                <h3>DEC en Techniques de l\'informatique</h3>
                <span class="badge">2023 - 2027</span>
                <p><strong>Cégep de l\'Abitibi-Témiscamingue</strong> — Rouyn-Noranda</p>
            </div>
            <div class="item">
                <h3>Diplôme d\'études secondaires (DES)</h3>
                <span class="badge">2018-2023</span>
                <p><strong>École La Source</strong> — Rouyn-noranda</p>
            </div>
        '
    ],

    'competences et connaissance' => [
        'titre' => 'Compétences et connaissance',
        'icone' => '🧠',
        'resume' => 'Savoir-être et aptitudes professionnelles',
        'contenu' => '
            <div class="grid-tags">
                <div>
                    <h4>Programation</h4>
                    <span class="tag">PHP</span> <span class="tag">HTML</span> <span class="tag">JavaScript</span>
                     <span class="tag">Python</span> <span class="tag">MySQL</span> <span class="tag">C#</span> 
                    <span class="tag">C++</span> <span class="tag">Powershell</span> <span class="tag">Bash</span>
                </div>
                <div>
                    <h4>System d\'exploitation</h4>
                    <span class="tag">Windows Server</span> <span class="tag">Windows</span> <span class="tag">Linux</span>
                    <span class="tag">Mikrotik</span> <span class="tag">Cicso</span> <span class="tag">HP Procurve</span>
                    <span class="tag">Opensense</span> <span class="tag">VMware vSphere</span> <span class="tag">Proxmox</span>
                </div>
                <div>
                    <h4>Réseautique</h4>
                    <span class="tag">Wifi</span> <span class="tag">Vlan</span> <span class="tag">OSPF</span> 
                    <span class="tag">Tunnel VPN (Wireguard et IPsec)</span> <span class="tag">Téléphonie IP</span>
                    <span class="tag">VRRP</span> <span class="tag">Spanning Tree</span>
                </div>
            </div>
            <p class="intro-modal">Les Compétence que j\'ai dévelloper au fil de mon DEC :</p>
            <ul class="liste-competences">
                <li><strong>Gestion d\'un parc informatique :</strong> J\'ai appris à gérer un parc informatique a l\'aide des divers cours de maintenance et de soutiens à l\'utilisateur.</li>
                <li><strong>Gestion d\'une salle de serveurs</strong> J\'ai appris à gérer une salle de serveurs a l\'aide des divers cours de réseautique.</li>
                <li><strong>Gestion de projet git</strong> J\'ai du utiliser et comprendre Git dans le cadre de mes cours pour faire un suivit de projet qualitatif.</li>
                <li><strong>Soutenir des utilisateurs</strong> J\'ai appris comment bien aider des utilisateur à régler leurs problèmes informatiques.</li>
            
            </ul>
        '
    ],
    'realisations' => [
        'titre' => 'Réalisations',
        'icone' => '🚀',
        'resume' => 'Projets marquants',
        'contenu' => '
            <div class="projet-card">
                <div class="projet-header">
                    <h3>Construction d\'une voiture téléguidée</h3>
                    <span class="date">session automne 2026 • Durée : 15 semaines</span>
                </div>
                <div class="tags">
                    <span class="tag">Électronique</span> <span class="tag">Programmation</span> <span class="tag">Réseautique</span>
                </div>
                <p><strong>Description :</strong>Dans le cadre du cours de veille technologique j\'ai décider de faire une voiture téléguidée controler par wifi. Je la réalise à partire de rien, j\'ai acheté les divers pièce que j\'ai besoins et je les assembles pour faire la voiture. je doit aussi coder un logiciel en c++ pour faire interagir une manette et ma voiture téléguidé en elles.</p>
                <p><strong>Objectifs</strong> Faire une voiture téléguidé de A à Z.</p>
                <p><strong>Résultats :</strong> Je n\'ai pas encore finis de faire la voiture, mais le code est finit</p>
                <p><strong>Apprentissages :</strong> J\'ai du apprendre le C++ pour coder la voiture, J\'ai du en apprendre plus sur les circuits électriques pour comprendre comment branché les divers pièce entre elle.</p>
            </div>
        
            <div class="projet-card">
                <div class="projet-header">
                    <h3>Audit de sécurité passif (OSINT)</h3>
                    <span class="date">Octobre 2026 • Durée : 1 semaines</span>
                </div>
                <div class="tags">
                    <span class="tag">Cybersécurité</span> <span class="tag">Réseau</span>
                </div>
                <p><strong>Description :</strong>Je devais faire des recherche public sur une entreprise que j\'ai choisi (Technosub), sans jamais interagir directement avec l\'entreprise, c-a-d je ne devait pas faire de scan pour essayer de trouver des faille ou essayer de m\'introduire sur leur site.</p>
                <p><strong>Objectifs</strong> Cartographier l\'infrastructure web et physique pour trouver des failles potentiel qui pourais me permettre d\'obtenir des infomations sensibles.</p>
                <p><strong>Résultats :</strong> Technosub est très bien sécuriser, les seule faille potentiel interresante étais la découverte des adresses personelle de certain dirigeants</p>
                <p><strong>Apprentissages :</strong> Suivre une méthodologie stricte, découverte d\'outils d\'OSINT.</p>
            </div>
            

        '
    ],
    'contact' => [
        'titre' => 'Me contacter',
        'icone' => '✉️',
        'resume' => 'Courriel et formulaire de message',
        'contenu' => '
            <p>Intéressé par mon profil pour un stage ou une collaboration ? Écrivez-moi directement :</p>
            <p class="email-direct">📧 <strong>ton.nom@courriel.com</strong></p>
            <form action="index.php" method="POST" class="contact-form">
                <input type="text" name="nom" placeholder="Votre nom" required>
                <input type="email" name="email" placeholder="Votre adresse courriel" required>
                <textarea name="message" rows="4" placeholder="Votre message..." required></textarea>
                <button type="submit" name="envoyer">Envoyer le message</button>
            </form>
        '
    ]
];

$messageConfirmation = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['envoyer'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $messageConfirmation = "Merci $nom ! Votre message a bien été enregistré.";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio — Zackary Michaud</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main class="container">
        <header class="presentation-hero">
            <h1>Zackary Michaud</h1>
            <p class="sous-titre">Étudiant en Techniques de l'informatique</p>
            <p class="bio">
            </p>Depuis toujours, j'ai une fascination pour les appareils électroniques. 
            J'ai toujours voulu comprendre comment cela fonctionnait, alors quand je suis arrivé au cégep,
             le choix de l'informatique a rapidement été fait. 
             La réseautique est ce que je préfère le plus dans l'informatique et j'aimerais faire d'autres études après le cégep en cybersécurité
             Ce portfolio rassemble mon parcours, mes compétences et mes projets réalisés au fil de ma vie.
        </header>

        <?php if ($messageConfirmation): ?>
            <div class="alert-success"><?= $messageConfirmation ?></div>
        <?php endif; ?>

        <section class="grid-carres">
            <?php foreach ($sections as $cle => $info): ?>
                <div class="carre" data-target="modal-<?= $cle ?>">
                    <div class="carre-icone"><?= $info['icone'] ?></div>
                    <h2><?= $info['titre'] ?></h2>
                    <p><?= $info['resume'] ?></p>
                </div>
            <?php endforeach; ?>
        </section>
    </main>

    <?php foreach ($sections as $cle => $info): ?>
        <div id="modal-<?= $cle ?>" class="modal-overlay">
            <div class="modal-box">
                <button class="close-btn" aria-label="Fermer">&times;</button>
                <div class="modal-header">
                    <span class="modal-icone"><?= $info['icone'] ?></span>
                    <h2><?= $info['titre'] ?></h2>
                </div>
                <div class="modal-body">
                    <?= $info['contenu'] ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <script src="script.js"></script>
</body>
</html>