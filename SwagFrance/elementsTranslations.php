<?php

return [
    [
        'formName' => 'Product35',
        'elementName' => 'vouchertax',
        'label' => 'Bons de réduction TVA',
        'description' => null
    ],
    ['formName' => 'Product35', 'elementName' => 'discounttax', 'label' => 'Rabais TVA', 'description' => null],
    [
        'formName' => 'Rating',
        'elementName' => 'voteunlock',
        'label' => 'Les évaluations d\'articles doivent être publiées',
        'description' => null
    ],
    [
        'formName' => 'Product29',
        'elementName' => 'backendautoordernumber',
        'label' => 'Proposition automatique du numéro d\'article',
        'description' => null
    ],
    [
        'formName' => 'Product29',
        'elementName' => 'backendautoordernumberprefix',
        'label' => 'Préfixe pour le numéro d\'article généré automatiquement',
        'description' => null
    ],
    [
        'formName' => 'Rating',
        'elementName' => 'votedisable',
        'label' => 'Désactiver les évaluations d\'article',
        'description' => null
    ],
    [
        'formName' => 'Rating',
        'elementName' => 'votesendcalling',
        'label' => 'Envoyer un rappel automatique pour l\'évaluation d\'article',
        'description' => 'Après l\'achat, envoyer un courriel de rappel de l\'évaluation d\'article à l\'utilisateur'
    ],
    [
        'formName' => 'Rating',
        'elementName' => 'votecallingtime',
        'label' => 'Jours restants avant l\'envoi du courriel de rappel',
        'description' => 'Jours restants avant que le client reçoive le courriel de rappel concernant l\'évaluation d\'article'
    ],
    [
        'formName' => 'Product35',
        'elementName' => 'taxautomode',
        'label' => 'Déterminer la taxe de manière dynamique pour les rabais',
        'description' => null
    ],
    [
        'formName' => 'LastArticles',
        'elementName' => 'show',
        'label' => 'Afficher l\'historique d\'article',
        'description' => null
    ],
    [
        'formName' => 'LastArticles',
        'elementName' => 'controller',
        'label' => 'Sélection du contrôleur',
        'description' => null
    ],
    [
        'formName' => 'LastArticles',
        'elementName' => 'thumb',
        'label' => 'Dimensions de l\'image d\'aperçu',
        'description' => null
    ],
    [
        'formName' => 'LastArticles',
        'elementName' => 'lastarticlestoshow',
        'label' => 'Nombre d\'articles dans l\'historique (dernier consulté)',
        'description' => null
    ],
    [
        'formName' => 'Mail',
        'elementName' => 'mailer_encoding',
        'label' => 'Encodage du message',
        'description' => '8bit, 7bit, base64, binaire et quoted-printable'
    ],
    [
        'formName' => 'Mail',
        'elementName' => 'mailer_mailer',
        'label' => 'Méthode d\'envoi du courriel',
        'description' => 'courriel, smtp ou fichier'
    ],
    [
        'formName' => 'Mail',
        'elementName' => 'mailer_hostname',
        'label' => 'Nom d\'hôte pour l\'iD du message',
        'description' => 'Utilisé en en-tête grâce à HELO. En alternative, on utilise la valeur de SERVER_NAME ou de « localhost.localdomain ».'
    ],
    [
        'formName' => 'Mail',
        'elementName' => 'mailer_host',
        'label' => 'Hôte de messagerie',
        'description' => 'Il est également possible d\'utiliser un autre port sur ce modèle : [hostname:port] - Ex. : smtp1.example.com:25'
    ],
    [
        'formName' => 'Mail',
        'elementName' => 'mailer_port',
        'label' => 'Port standard',
        'description' => 'Définit le port du serveur SMTP standard'
    ],
    [
        'formName' => 'Mail',
        'elementName' => 'mailer_smtpsecure',
        'label' => 'Préfixe de connexion',
        'description' => '\'\', ssl, ou tls'
    ],
    [
        'formName' => 'Mail',
        'elementName' => 'mailer_username',
        'label' => 'Nom d\'utilisateur SMTP',
        'description' => null
    ],
    [
        'formName' => 'Mail',
        'elementName' => 'mailer_password',
        'label' => 'Mot de passe SMTP',
        'description' => null
    ],
    [
        'formName' => 'Mail',
        'elementName' => 'mailer_auth',
        'label' => 'Authentification de connexion',
        'description' => 'plain, login ou crammd5'
    ],
    [
        'formName' => 'Service',
        'elementName' => 'setoffline',
        'label' => 'Bloquer la boutique pour maintenance',
        'description' => null
    ],
    [
        'formName' => 'Service',
        'elementName' => 'offlineip',
        'label' => 'IP exclue du blocage',
        'description' => null
    ],
    ['formName' => 'AdvancedMenu', 'elementName' => 'show', 'label' => 'Afficher le menu', 'description' => null],
    [
        'formName' => 'AdvancedMenu',
        'elementName' => 'levels',
        'label' => 'Nombre de niveaux',
        'description' => null
    ],
    [
        'formName' => 'AdvancedMenu',
        'elementName' => 'caching',
        'label' => 'Activer la mise en cache',
        'description' => null
    ],
    [
        'formName' => 'AdvancedMenu',
        'elementName' => 'cachetime',
        'label' => 'Durée de mise en cache',
        'description' => null
    ],
    [
        'formName' => 'Compare',
        'elementName' => 'show',
        'label' => 'Afficher la comparaison',
        'description' => null
    ],
    [
        'formName' => 'Compare',
        'elementName' => 'maxComparisons',
        'label' => 'Nombre maximum d\'articles à comparer',
        'description' => null
    ],
    [
        'formName' => 'TagCloud',
        'elementName' => 'show',
        'label' => 'Afficher le nuage de tags',
        'description' => null
    ],
    [
        'formName' => 'TagCloud',
        'elementName' => 'controller',
        'label' => 'Sélection du contrôleur',
        'description' => null
    ],
    [
        'formName' => 'TagCloud',
        'elementName' => 'tagCloudClass',
        'label' => 'Nom de la catégorie de tags',
        'description' => null
    ],
    [
        'formName' => 'TagCloud',
        'elementName' => 'tagCloudMax',
        'label' => 'Nombre maximum de termes',
        'description' => null
    ],
    [
        'formName' => 'TagCloud',
        'elementName' => 'tagCloudSplit',
        'label' => 'Nombre de niveaux',
        'description' => null
    ],
    [
        'formName' => 'TagCloud',
        'elementName' => 'tagTime',
        'label' => 'La durée prise en compte, en jours',
        'description' => null
    ],
    [
        'formName' => 'Frontend30',
        'elementName' => 'articlesperpage',
        'label' => 'Articles par page',
        'description' => null
    ],
    [
        'formName' => 'Frontend30',
        'elementName' => 'orderbydefault',
        'label' => 'Listings de tri standard',
        'description' => null
    ],
    [
        'formName' => 'Frontend30',
        'elementName' => 'maxpages',
        'label' => 'Catégories Nombre max. de pages',
        'description' => null
    ],
    [
        'formName' => 'Frontend76',
        'elementName' => 'markasnew',
        'label' => 'Identifier l\'article comme nouveau (jours)',
        'description' => null
    ],
    [
        'formName' => 'Frontend76',
        'elementName' => 'markastopseller',
        'label' => 'Identifier l\'article comme best-seller (ventes)',
        'description' => null
    ],
    [
        'formName' => 'Frontend76',
        'elementName' => 'chartrange',
        'label' => 'Nombre de best-sellers pour les graphiques',
        'description' => null
    ],
    [
        'formName' => 'Frontend30',
        'elementName' => 'numberarticlestoshow',
        'label' => 'Choix du nombre d\'articles par page',
        'description' => null
    ],
    [
        'formName' => 'Frontend30',
        'elementName' => 'categorytemplates',
        'label' => 'Catégories de templates disponibles',
        'description' => null
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'maxpurchase',
        'label' => 'Quantité maximum d\'articles choisis / articles via le menu déroulant',
        'description' => null
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'notavailable',
        'label' => 'Texte pour les articles non disponibles',
        'description' => null
    ],
    [
        'formName' => 'Frontend77',
        'elementName' => 'maxcrosssimilar',
        'label' => 'Nombre d\'articles similaires en vente croisée',
        'description' => null
    ],
    [
        'formName' => 'Frontend77',
        'elementName' => 'maxcrossalsobought',
        'label' => 'Nombre d\'articles « Les clients ont également acheté » en vente croisée',
        'description' => null
    ],
    [
        'formName' => 'Frontend30',
        'elementName' => 'category_default_tpl',
        'label' => 'Template standard pour les nouvelles catégories',
        'description' => null
    ],
    [
        'formName' => 'Frontend76',
        'elementName' => 'chartinterval',
        'label' => 'Nombre de jours pris en compte pour la génération des best-sellers',
        'description' => null
    ],
    [
        'formName' => 'Frontend77',
        'elementName' => 'similarlimit',
        'label' => 'Nombre d\'articles similaires déterminés automatiquement (page détaillée)',
        'description' => null
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'basketshippinginfo',
        'label' => 'Afficher le délai de livraison dans le panier',
        'description' => null
    ],
    [
        'formName' => 'Frontend76',
        'elementName' => 'articlelimit',
        'label' => 'Nombre d\'articles proposés dans les nouveautés',
        'description' => null
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'inquiryid',
        'label' => 'Formulaire de demande Id',
        'description' => null
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'inquiryvalue',
        'label' => 'Valeur min. du panier à partir de laquelle on offre la possibilité d\'adresser une demande personnelle',
        'description' => null
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'usezoomplus',
        'label' => 'Visualisation par zoom au lieu de la lightbox sur la page détaillée',
        'description' => null
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'liveinstock',
        'label' => 'Interroger le stock disponible en temps réel sur la page détaillée',
        'description' => null
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'configmaxcombinations',
        'label' => 'Nombre maximum de variantes de configurateur par article',
        'description' => null
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'deactivatenoinstock',
        'label' => 'Désactiver les articles de déstockage sans stock disponible',
        'description' => null
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'showbundlemainarticle',
        'label' => 'Afficher l\'article principal de l\'offre groupée',
        'description' => null
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'deactivatebasketonnotification',
        'label' => 'Masquer le panier dans le courriel de confirmation de réception',
        'description' => 'Masquer le panier lorsque le courriel de confirmation de réception est activé et lorsque le stock disponible fait défaut'
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'instockinfo',
        'label' => 'Afficher le dépassement du stock disponible dans le panier',
        'description' => null
    ],
    [
        'formName' => 'Frontend30',
        'elementName' => 'categorydetaillink',
        'label' => 'Aller directement aux détails s\'il n\'y a qu\'un article disponible',
        'description' => null
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'configcustomfields',
        'label' => 'Configurateur champs de texte libre',
        'description' => null
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'detailtemplates',
        'label' => 'Page détaillée des templates disponibles',
        'description' => null
    ],
    [
        'formName' => 'Frontend30',
        'elementName' => 'maxsupplierscategory',
        'label' => 'Nombre max. de fabricants dans la barre latérale',
        'description' => null
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'minpassword',
        'label' => 'Longueur de mot de passe minimum (inscription)',
        'description' => null
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'defaultpayment',
        'label' => 'Mode de paiement standard (Id) (inscription)',
        'description' => null
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'newsletterdefaultgroup',
        'label' => 'Groupe d\'accueil standard (ID) pour les clients enregistrés (système / newsletter)',
        'description' => null
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'shopwaremanagedcustomernumbers',
        'label' => 'Shopware génère des numéros de client',
        'description' => null
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'ignoreagb',
        'label' => 'CGV - Désactiver la case à cocher sur la page caisse',
        'description' => null
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'countryshipping',
        'label' => 'Demander le pays / le land pour l\'adresse de livraison',
        'description' => null
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'actdprcheck',
        'label' => 'Les dispositions de protection des données doivent être acceptées via une case à cocher',
        'description' => null
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'paymentdefault',
        'label' => 'Moyen de paiement de secours (ID)',
        'description' => null
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'doubleemailvalidation',
        'label' => 'L\'adresse e-mail doit être saisie deux fois.',
        'description' => 'L\'adresse e-mail doit être saisie deux fois de manière à éviter les fautes de frappe.'
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'newsletterextendedfields',
        'label' => 'Demander des champs élargis dans l\'inscription à la newsletter',
        'description' => null
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'noaccountdisable',
        'label' => 'Désactiver « Aucun compte client »',
        'description' => null
    ],
    [
        'formName' => 'Statistics',
        'elementName' => 'blockIp',
        'label' => 'Exclure l\'iP des statistiques',
        'description' => null
    ],
    [
        'formName' => 'Google',
        'elementName' => 'tracking_code',
        'label' => 'ID Google Analytics',
        'description' => null
    ],
    [
        'formName' => 'Google',
        'elementName' => 'conversion_code',
        'label' => 'ID de conversion Google',
        'description' => null
    ],
    [
        'formName' => 'Google',
        'elementName' => 'anonymize_ip',
        'label' => 'Rendre l\'adresse IP anonyme',
        'description' => null
    ],
    [
        'formName' => 'InputFilter',
        'elementName' => 'sql_protection',
        'label' => 'Activer la protection contre les injections SQL',
        'description' => null
    ],
    [
        'formName' => 'InputFilter',
        'elementName' => 'xss_protection',
        'label' => 'Activer la protection contre les XSS',
        'description' => null
    ],
    [
        'formName' => 'InputFilter',
        'elementName' => 'rfi_protection',
        'label' => 'Activer la protection contre les inclusions de fichiers à distance',
        'description' => null
    ],
    [
        'formName' => 'Frontend71',
        'elementName' => 'vouchername',
        'label' => 'Désignation des bons de réduction',
        'description' => null
    ],
    [
        'formName' => 'Search',
        'elementName' => 'minsearchlenght',
        'label' => 'Longueur minimum du terme de recherche',
        'description' => null
    ],
    [
        'formName' => 'Frontend71',
        'elementName' => 'discountname',
        'label' => 'Désignation des rabais ',
        'description' => null
    ],
    [
        'formName' => 'Frontend71',
        'elementName' => 'surchargename',
        'label' => 'Désignation des quantités minorées',
        'description' => null
    ],
    [
        'formName' => 'Frontend60',
        'elementName' => 'no_order_mail',
        'label' => 'Ne pas envoyer la confirmation de commande au commerçant',
        'description' => null
    ],
    [
        'formName' => 'Search',
        'elementName' => 'badwords',
        'label' => 'Liste noire des mots de passe',
        'description' => null
    ],
    [
        'formName' => 'Frontend71',
        'elementName' => 'paymentsurchargeadd',
        'label' => 'Désignation du supplément en pourc. au titre du moyen de paiement',
        'description' => null
    ],
    [
        'formName' => 'Frontend71',
        'elementName' => 'paymentsurchargedev',
        'label' => 'Désignation du supplément en pourc. au titre du moyen de paiement',
        'description' => null
    ],
    [
        'formName' => 'Frontend71',
        'elementName' => 'discountnumber',
        'label' => 'Rabais numéro de commande',
        'description' => null
    ],
    [
        'formName' => 'Frontend71',
        'elementName' => 'surchargenumber',
        'label' => 'Quantités minorées numéro de commande',
        'description' => null
    ],
    [
        'formName' => 'Frontend71',
        'elementName' => 'paymentsurchargenumber',
        'label' => 'Supplément au titre du moyen de paiement (numéro de commande)',
        'description' => null
    ],
    [
        'formName' => 'Search',
        'elementName' => 'maxlivesearchresults',
        'label' => 'Nombre de résultats dans la recherche en direct',
        'description' => null
    ],
    [
        'formName' => 'Frontend71',
        'elementName' => 'ignoreshippingfreeforsurcharges',
        'label' => 'Toujours calculer les suppléments de paiement absolus pour les frais de port',
        'description' => null
    ],
    [
        'formName' => 'Frontend60',
        'elementName' => 'send_confirm_mail',
        'label' => 'Envoyer la confirmation d\'inscription au commerçant dans CC',
        'description' => null
    ],
    [
        'formName' => 'Frontend60',
        'elementName' => 'optinnewsletter',
        'label' => 'Double opt-in pour les inscriptions à la newsletter',
        'description' => null
    ],
    [
        'formName' => 'Frontend60',
        'elementName' => 'optinvote',
        'label' => 'Double opt-in pour les évaluations d\'articles',
        'description' => null
    ],
    [
        'formName' => 'Frontend71',
        'elementName' => 'shippingdiscountnumber',
        'label' => 'Règle d\'envoi de la réduction (numéro de commande)',
        'description' => null
    ],
    [
        'formName' => 'Frontend71',
        'elementName' => 'shippingdiscountname',
        'label' => 'Règle d\'envoi de la réduction (désignation)',
        'description' => null
    ],
    [
        'formName' => 'Frontend60',
        'elementName' => 'orderstatemailack',
        'label' => 'Modifications du statut de commande adresse CC',
        'description' => null
    ],
    [
        'formName' => 'Frontend93',
        'elementName' => 'premiumshippiungasketselect',
        'label' => 'Demande SQL avancée',
        'description' => null
    ],
    [
        'formName' => 'Frontend93',
        'elementName' => 'premiumshippingnoorder',
        'label' => 'Bloquer la commande en cas d\'indisponibilité des modes d\'expédition',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'routertolower',
        'label' => 'N\'utiliser que des minuscules dans les URL',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'redirectnotfound',
        'label' => 'Rediriger vers la page d\'accueil en cas de catégories/articles non disponibles',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seometadescription',
        'label' => 'Préparer la meta-description des articles/catégories',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'routerremovecategory',
        'label' => 'Supprimer l\'iD de catégorie de l\'URL',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seoqueryblacklist',
        'label' => 'Requêtes SEO-Nofollow',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seoviewportblacklist',
        'label' => 'Fenêtres SEO-Nofollow',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seoremovewhitespaces',
        'label' => 'Supprimer les espaces / sauts de ligne inutiles',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seoremovecomments',
        'label' => 'Supprimer les commentaires Html',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seoqueryalias',
        'label' => 'Alias de requête',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seobacklinkwhitelist',
        'label' => 'Backlinks SEO-Follow',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seorelcanonical',
        'label' => 'Utiliser des canonical tags SEO',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'routerlastupdate',
        'label' => 'Date de la dernière mise à jour',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'routercache',
        'label' => 'Tableau URL SEO et durée de mise en cache',
        'description' => null
    ],
    [
        'formName' => 'Frontend101',
        'elementName' => 'vatcheckendabled',
        'label' => 'Activer le module',
        'description' => null
    ],
    [
        'formName' => 'Frontend101',
        'elementName' => 'vatcheckadvancednumber',
        'label' => 'Numéro d\'identification TVA personnel pour le contrôle',
        'description' => null
    ],
    [
        'formName' => 'Frontend101',
        'elementName' => 'vatcheckadvanced',
        'label' => 'Activer le contrôle avancé',
        'description' => null
    ],
    [
        'formName' => 'Frontend101',
        'elementName' => 'vatcheckadvancedcountries',
        'label' => 'Pays valables pour le contrôle avancé',
        'description' => null
    ],
    [
        'formName' => 'Frontend101',
        'elementName' => 'vatcheckrequired',
        'label' => 'Identifier le numéro d\'identification TVA en tant que champ obligatoire',
        'description' => null
    ],
    [
        'formName' => 'Frontend101',
        'elementName' => 'vatcheckdebug',
        'label' => 'Activer les messages d\'erreur avancés',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'routerarticletemplate',
        'label' => 'URL SEO du template de l\'article',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'routercategorytemplate',
        'label' => 'URL SEO du template de catégorie',
        'description' => null
    ],
    [
        'formName' => 'Frontend101',
        'elementName' => 'vatchecknoservice',
        'label' => 'Lorsque le service n\'est pas disponible, effectuer seulement un contrôle simple',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seostaticurls',
        'label' => 'Autres URL SEO',
        'description' => null
    ],
    [
        'formName' => 'Frontend101',
        'elementName' => 'vatcheckconfirmation',
        'label' => 'Demander des avis de confirmation administratifs pour le contrôle avancé',
        'description' => null
    ],
    [
        'formName' => 'Frontend101',
        'elementName' => 'vatcheckvalidresponse',
        'label' => 'Résultats valables pour le contrôle avancé',
        'description' => null
    ],
    [
        'formName' => 'MasterData',
        'elementName' => 'shopName',
        'label' => 'Nom de la boutique',
        'description' => null
    ],
    [
        'formName' => 'MasterData',
        'elementName' => 'mail',
        'label' => 'Courriel du commerçant',
        'description' => null
    ],
    ['formName' => 'MasterData', 'elementName' => 'address', 'label' => 'Adresse', 'description' => null],
    [
        'formName' => 'MasterData',
        'elementName' => 'taxNumber',
        'label' => 'N° d\'identification TVA',
        'description' => null
    ],
    [
        'formName' => 'MasterData',
        'elementName' => 'bankAccount',
        'label' => 'Coordonnées bancaires',
        'description' => null
    ],
    [
        'formName' => 'MasterData',
        'elementName' => 'captchaColor',
        'label' => 'Couleur de police Captcha (R, G, B)',
        'description' => null
    ],
    [
        'formName' => 'Statistics',
        'elementName' => 'botBlackList',
        'label' => 'Liste des bots',
        'description' => null
    ],
    ['formName' => 'Core', 'elementName' => 'baseFile', 'label' => 'Fichier de base', 'description' => null],
    ['formName' => 'Esd', 'elementName' => 'esdKey', 'label' => 'Clé ESd', 'description' => null],
    [
        'formName' => 'Frontend79',
        'elementName' => 'blogdetailtemplates',
        'label' => 'Page de blog détaillée sur les templates disponibles',
        'description' => null
    ],
    [
        'formName' => 'Search',
        'elementName' => 'fuzzysearchdistance',
        'label' => 'Distance maximale pour la recherche floue, exprimée en pourcentage',
        'description' => null
    ],
    [
        'formName' => 'Search',
        'elementName' => 'fuzzysearchexactmatchfactor',
        'label' => 'Facteur pour les résultats précis',
        'description' => null
    ],
    [
        'formName' => 'Search',
        'elementName' => 'fuzzysearchlastupdate',
        'label' => 'Date de la dernière mise à jour',
        'description' => null
    ],
    [
        'formName' => 'Search',
        'elementName' => 'fuzzysearchmatchfactor',
        'label' => 'Facteur pour les résultats flous',
        'description' => null
    ],
    [
        'formName' => 'Search',
        'elementName' => 'fuzzysearchmindistancentop',
        'label' => 'Pertinence minimale pour l\'article phare, en pourcentage',
        'description' => null
    ],
    [
        'formName' => 'Search',
        'elementName' => 'fuzzysearchpartnamedistancen',
        'label' => 'Distance maximale pour les participations, en pourcentage',
        'description' => null
    ],
    [
        'formName' => 'Search',
        'elementName' => 'fuzzysearchpatternmatchfactor',
        'label' => 'Facteur pour les réponses partielles',
        'description' => null
    ],
    [
        'formName' => 'Search',
        'elementName' => 'fuzzysearchpricefilter',
        'label' => 'Sélection du filtre de prix',
        'description' => null
    ],
    [
        'formName' => 'Search',
        'elementName' => 'fuzzysearchresultsperpage',
        'label' => 'Résultats par page',
        'description' => null
    ],
    [
        'formName' => 'Search',
        'elementName' => 'fuzzysearchselectperpage',
        'label' => 'Sélection du nombre de résultats par page',
        'description' => null
    ],
    ['formName' => 'Esd', 'elementName' => 'esdMinSerials', 'label' => 'ESD-Min-Serials', 'description' => null],
    [
        'formName' => 'Recommendation',
        'elementName' => 'alsoBoughtShow',
        'label' => 'Affichage de la recommandation « Les clients ont également acheté »',
        'description' => null
    ],
    [
        'formName' => 'Recommendation',
        'elementName' => 'alsoBoughtPerPage',
        'label' => 'Nombre d\'articles par page dans la liste',
        'description' => null
    ],
    [
        'formName' => 'Recommendation',
        'elementName' => 'alsoBoughtMaxPages',
        'label' => 'Nombre maximum de pages dans la liste',
        'description' => null
    ],
    [
        'formName' => 'Recommendation',
        'elementName' => 'similarViewedShow',
        'label' => 'Affichage de la recommandation « Les clients ont également regardé »',
        'description' => null
    ],
    [
        'formName' => 'Recommendation',
        'elementName' => 'similarViewedPerPage',
        'label' => 'Nombre d\'articles par page dans la liste',
        'description' => null
    ],
    [
        'formName' => 'Recommendation',
        'elementName' => 'similarViewedMaxPages',
        'label' => 'Nombre maximum de pages dans la liste',
        'description' => null
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'revocationNotice',
        'label' => 'Affiche les informations relatives au droit de rétractation',
        'description' => null
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'newsletter',
        'label' => 'Affiche l\'inscription à la newsletter',
        'description' => null
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'bankConnection',
        'label' => 'Affiche la remarque relative aux coordonnées bancaires',
        'description' => null
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'additionalFreeText',
        'label' => 'Affiche la remarque supplémentaire',
        'description' => 'Snippet : ConfirmTextOrderDefault'
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'commentVoucherArticle',
        'label' => 'Affiche des options supplémentaires',
        'description' => 'Ajouter un article, ajouter un bon de réduction, fonction de commentaire'
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'premiumArticles',
        'label' => 'Affiche les articles bonus',
        'description' => null
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'countryNotice',
        'label' => 'Affiche la description de pays',
        'description' => null
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'nettoNotice',
        'label' => 'Affiche la remarque relative aux commandes nettes',
        'description' => null
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'basketHeaderColor',
        'label' => 'Couleur de fond de l\'en-tête du panier',
        'description' => '(Code hexadécimal)'
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'basketHeaderFontColor',
        'label' => 'Couleur de police de l\'en-tête du panier',
        'description' => '(Code hexadécimal)'
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'basketTableColor',
        'label' => 'Couleur de fond du tableau du panier',
        'description' => '(Code hexadécimal)'
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'mainFeatures',
        'label' => 'Template pour les caractéristiques essentielles',
        'description' => null
    ],
    ['formName' => 'Auth', 'elementName' => 'backendTimeout', 'label' => 'Temps écoulé', 'description' => null],
    [
        'formName' => 'Auth',
        'elementName' => 'backendLocales',
        'label' => 'Langues au choix',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'routerblogtemplate',
        'label' => 'URL SEO du template du blog',
        'description' => null
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'detailModal',
        'label' => 'Afficher les informations sur un article dans Modalbox',
        'description' => null
    ],
    ['formName' => 'TrustedShop', 'elementName' => 'tsid', 'label' => 'ID Trusted-Shop', 'description' => null],
    [
        'formName' => 'Frontend30',
        'elementName' => 'blogcategory',
        'label' => 'Afficher les articles de blog de la catégorie (ID) sur la page d\'accueil (ancienne base de template uniquement)',
        'description' => null
    ],
    [
        'formName' => 'Frontend30',
        'elementName' => 'bloglimit',
        'label' => 'Nombre d\'articles de blog sur la page d\'accueil',
        'description' => null
    ],
    ['formName' => 'MasterData', 'elementName' => 'company', 'label' => 'Entreprise', 'description' => null],
    [
        'formName' => 'Frontend100',
        'elementName' => 'routercampaigntemplate',
        'label' => 'URL SEO du template de page d\'accueil',
        'description' => null
    ],
    [
        'formName' => 'Frontend71',
        'elementName' => 'paymentSurchargeAbsolute',
        'label' => 'Augmentation forfaitaire pour le moyen de paiement (désignation)',
        'description' => null
    ],
    [
        'formName' => 'Frontend71',
        'elementName' => 'paymentSurchargeAbsoluteNumber',
        'label' => 'Augmentation forfaitaire pour le moyen de paiement (numéro de commande)',
        'description' => null
    ],
    [
        'formName' => 'StoreApi',
        'elementName' => 'StoreApiUrl',
        'label' => 'URL API boutique',
        'description' => null
    ],
    [
        'formName' => 'Newsletter',
        'elementName' => 'MailCampaignsPerCall',
        'label' => 'Nombre de courriels envoyés pour chaque demande de tâche Cron',
        'description' => null
    ],
    [
        'formName' => 'InputFilter',
        'elementName' => 'own_filter',
        'label' => 'Filtre personnel',
        'description' => null
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'accountPasswordCheck',
        'label' => 'Demander le mot de passe actuel pour les modifications de mot de passe',
        'description' => null
    ],
    [
        'formName' => 'InputFilter',
        'elementName' => 'refererCheck',
        'label' => 'Activer la vérification du référant',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'preferBasePath',
        'label' => 'Retirer le noyau Shopware de l\'URL ',
        'description' => 'Retire « shopware.php » des URL. Évite que les moteurs de recherche détectent à tort du contenu dupliqué dans la boutique. Si aucun ModRewrite n\'est disponible, cette case doit être décochée.'
    ],
    [
        'formName' => 'LegacyOptions',
        'elementName' => 'useShortDescriptionInListing',
        'label' => 'Toujours afficher la brève description des articles dans l\'affichage par listes',
        'description' => 'Influence : Best-seller, listes de catégories, univers de vente'
    ],
    [
        'formName' => 'Passwörter',
        'elementName' => 'defaultPasswordEncoder',
        'label' => 'Algorithme de mot de passe',
        'description' => 'Avec quel algorithme les mots de passe doivent-ils être verrouillés ?'
    ],
    [
        'formName' => 'Passwörter',
        'elementName' => 'liveMigration',
        'label' => 'Live Migration',
        'description' => 'Lors de la prochaine connexion, les mots de passe d\'utilisateur existants doivent-ils être hachés à nouveau avec d\'autres algorithmes de mots de passe ? Cette opération a lieu automatiquement en arrière-plan, de sorte que les mots de passe peuvent successivement être transposés sur de nouveaux algorithmes.'
    ],
    [
        'formName' => 'Passwörter',
        'elementName' => 'bcryptCost',
        'label' => 'Recours au calcul bcrypt',
        'description' => 'Plus le recours au calcul est important, plus il est compliqué pour un hacker potentiel de calculer un mot de passe non crypté pour le mot de passe verrouillé.'
    ],
    [
        'formName' => 'Passwörter',
        'elementName' => 'sha256iterations',
        'label' => 'Itérations Sha256',
        'description' => 'Plus le recours au calcul est important, plus il est compliqué pour un hacker potentiel de calculer un mot de passe non crypté pour le mot de passe verrouillé.'
    ],
    [
        'formName' => 'Frontend30',
        'elementName' => 'moveBatchModeEnabled',
        'label' => 'Déplacer les catégories en mode batch',
        'description' => null
    ],
    [
        'formName' => 'StoreApi',
        'elementName' => 'DummyPluginUrl',
        'label' => 'URL de téléchargement du Dummyplugin',
        'description' => null
    ],
    [
        'formName' => 'HttpCache',
        'elementName' => 'admin',
        'label' => 'Vue admin',
        'description' => 'Désactiver le cache pour les aperçus d\'articles et les commandes rapides'
    ],
    [
        'formName' => 'HttpCache',
        'elementName' => 'cacheControllers',
        'label' => 'Contrôleur Cache / durées',
        'description' => null
    ],
    [
        'formName' => 'HttpCache',
        'elementName' => 'noCacheControllers',
        'label' => 'Contrôleur NoCache / tags',
        'description' => null
    ],
    [
        'formName' => 'HttpCache',
        'elementName' => 'proxy',
        'label' => 'URL du proxy de secours',
        'description' => 'Lien vers le proxy http avec « http:// » au début.'
    ],
    [
        'formName' => 'HttpCache',
        'elementName' => 'proxyPrune',
        'label' => 'Activer le prune proxy',
        'description' => 'Activer la suppression automatique du cache.'
    ],
    [
        'formName' => 'Esd',
        'elementName' => 'downloadAvailablePaymentStatus',
        'label' => 'Autoriser le téléchargement en fonction du statut de paiement',
        'description' => 'Ici, vous devez définir le statut de paiement avec lequel il est possible de télécharger l\'article ESD.'
    ],
    [
        'formName' => 'Frontend30',
        'elementName' => 'forceArticleMainImageInListing',
        'label' => 'Toujours afficher l\'image d\'aperçu de l\'article dans l\'affichage par liste',
        'description' => null
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'sendOrderMail',
        'label' => 'Envoyer un courriel de finalisation de commande',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'forceCanonicalHttp',
        'label' => 'Canonical toujours avec HTTP',
        'description' => 'Cette option ne fonctionne pas si l\'option « Utiliser le SSL partout » est activée.'
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'requirePhoneField',
        'label' => 'Considérer le téléphone comme un champ obligatoire',
        'description' => 'Nous vous rappelons que vous devez configurer l\'indication de l\'astérisque avec le bloc de texte RegisterLabelPhone'
    ],
    ['formName' => 'SEPA', 'elementName' => 'sepaCompany', 'label' => 'Raison sociale', 'description' => null],
    ['formName' => 'SEPA', 'elementName' => 'sepaHeaderText', 'label' => 'Titre', 'description' => null],
    [
        'formName' => 'SEPA',
        'elementName' => 'sepaSellerId',
        'label' => 'Numéro d\'identification du créancier',
        'description' => null
    ],
    [
        'formName' => 'SEPA',
        'elementName' => 'sepaSendEmail',
        'label' => 'Envoyer automatiquement le mandat SEPA',
        'description' => null
    ],
    [
        'formName' => 'SEPA',
        'elementName' => 'sepaShowBic',
        'label' => 'Afficher le champ SEPA BIC',
        'description' => null
    ],
    [
        'formName' => 'SEPA',
        'elementName' => 'sepaRequireBic',
        'label' => 'Champ SEPA BIC requis',
        'description' => null
    ],
    [
        'formName' => 'SEPA',
        'elementName' => 'sepaShowBankName',
        'label' => 'Afficher le champ Établissement de crédit SEPA',
        'description' => null
    ],
    [
        'formName' => 'SEPA',
        'elementName' => 'sepaRequireBankName',
        'label' => 'Champ Établissement de crédit SEPA requis',
        'description' => null
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'paymentEditingInCheckoutPage',
        'label' => 'Données de la note de débit éditables dans le checkout',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seoSupplier',
        'label' => 'Utiliser les informations SEO du fabricant',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seoSupplierRouteTemplate',
        'label' => 'URL SEO du template du fabricant',
        'description' => null
    ],
    [
        'formName' => 'Log',
        'elementName' => 'logMail',
        'label' => 'Envoyer l\'erreur au commerçant',
        'description' => null
    ],
    [
        'formName' => 'Statistics',
        'elementName' => 'maximumReferrerAge',
        'label' => 'Âge maximum pour les données statistiques de référence',
        'description' => 'Les anciennes données de référence sont supprimées via la tâche Cron Supprimer si elle est active'
    ],
    [
        'formName' => 'Statistics',
        'elementName' => 'maximumImpressionAge',
        'label' => 'Âge maximum pour les impressions d\'articles',
        'description' => 'Les anciennes données d\'impression sont supprimées via la tâche Cron Supprimer si elle est active'
    ],
    [
        'formName' => 'Recommendation',
        'elementName' => 'showTellAFriend',
        'label' => 'Afficher la recommandation d\'article',
        'description' => null
    ],
    [
        'formName' => 'LastArticles',
        'elementName' => 'time',
        'label' => 'Délai d\'enregistrement en jours',
        'description' => null
    ],
    [
        'formName' => 'Esd',
        'elementName' => 'esdDownloadStrategy',
        'label' => 'Option de téléchargement pour les fichiers ESd',
        'description' => '<b>Attention</b> : Ce paramètre est susceptible d\'entraver le fonctionnement des téléchargements ESD. Ici, ne modifiez les paramètres que si vous savez à quoi ils servent. <br><br>Stratégie de téléchargement pour les fichiers ESD.<br><b>Link</b> : Dans certaines circonstances, il n\'est pas garanti parce que le lien peut être visible de l\'extérieur.<br><b>PHP</b> : Le lien ne peut pas être visualisé. Le PHP livre le fichier. Cela peut entraîner des problèmes pour les fichiers plus imposants.<br><b>X-Sendfile</b> : Compatible avec les plus gros fichiers et sûr. Module Apache X-Sendfile nécessaire. <br><b>X-Accel</b> : Équivaut au X-Sendfile. Requiert le module Nginx X-Accel.'
    ],
    [
        'formName' => 'SwagUpdate',
        'elementName' => 'update-api-endpoint',
        'label' => 'Endpoint API',
        'description' => null
    ],
    ['formName' => 'SwagUpdate', 'elementName' => 'update-channel', 'label' => 'Canal', 'description' => null],
    ['formName' => 'SwagUpdate', 'elementName' => 'update-code', 'label' => 'Code', 'description' => null],
    [
        'formName' => 'SwagUpdate',
        'elementName' => 'update-fake-version',
        'label' => 'Fausse version',
        'description' => null
    ],
    [
        'formName' => 'SwagUpdate',
        'elementName' => 'update-feedback-api-endpoint',
        'label' => 'Feedback sur l\'endpoint API',
        'description' => null
    ],
    [
        'formName' => 'SwagUpdate',
        'elementName' => 'update-send-feedback',
        'label' => 'Envoyer le feedback',
        'description' => null
    ],
    [
        'formName' => 'SwagUpdate',
        'elementName' => 'update-unique-id',
        'label' => 'Identifiant unique',
        'description' => null
    ],
    [
        'formName' => 'SwagUpdate',
        'elementName' => 'update-verify-signature',
        'label' => 'Vérifier la signature',
        'description' => null
    ],
    [
        'formName' => 'SwagAdvancedCart',
        'elementName' => 'expireDateInDays',
        'label' => 'Délai d\'enregistrement du panier en jours',
        'description' => 'Une fois le délai d\'enregistrement en jours dépassé, les paniers de session sont supprimés, mais pas les listes de favoris.'
    ],
    [
        'formName' => 'SwagAdvancedCart',
        'elementName' => 'clearBasketOnRestore',
        'label' => 'Vider les paniers existants lors de restauration d\'une liste de favoris',
        'description' => 'Cette fonction sert à ce que le client n\'ait pas d\'anciens articles dans son panier lorsqu\'il charge sa liste de favoris.'
    ],
    [
        'formName' => 'SwagAdvancedCart',
        'elementName' => 'shareViaMail',
        'label' => 'Partager via courriel',
        'description' => 'Lorsque ce paramètre est activé, les listes de favoris peuvent être partagées via courriel. Veuillez vérifier au préalable les dispositions légales en vigueur dans votre pays.'
    ],
    [
        'formName' => 'SwagAdvancedCart',
        'elementName' => 'alsoListShow',
        'label' => 'Recommander les combinaisons d\'articles',
        'description' => 'Avec cette fonction, sur la page détaillée des articles, on recommande aux clients des articles qu\'ils peuvent ajouter à la même liste de favoris.'
    ],
    [
        'formName' => 'SwagAdvancedCart',
        'elementName' => 'replaceNote',
        'label' => 'Remplacer le mémo',
        'description' => 'À l\'aide de cette fonction, vous pouvez remplacer les mémos via le plugin de listes de favoris. Dans la vitrine de boutique, le mémo ne sera plus accessible que via le lien direct.'
    ],
    [
        'formName' => 'SwagAdvancedCart',
        'elementName' => 'facebookAppId',
        'label' => 'ID de l\'appli Facebook',
        'description' => 'l\'iD d\'appli est requise pour les plugins sociaux de Facebook (mentions J\'aime et commentaires)'
    ],
    [
        'formName' => 'SwagAdvancedCart',
        'elementName' => 'facebookLikes',
        'label' => 'Mentions Facebook J\'aime',
        'description' => 'Lorsque ce paramètre est activé, les listes publiques de favoris peuvent être assorties de mentions J\'aime.'
    ],
    [
        'formName' => 'SwagAdvancedCart',
        'elementName' => 'facebookComments',
        'label' => 'Commentaires Facebook',
        'description' => 'Lorsque cette fonction est activée, il est possible de commenter les listes de favoris publiques via le plugin social de Facebook.'
    ],
    [
        'formName' => 'SwagBundle',
        'elementName' => 'SwagBundleExcludeVoucher',
        'label' => 'À l\'exclusion des bons en pourcentage pour les offres groupées',
        'description' => 'Empêche les bons en pourcentage de réduire le prix des offres groupées'
    ],
    [
        'formName' => 'SwagBundle',
        'elementName' => 'SwagBundleSubtractBundle',
        'label' => 'Tenir compte de la réduction d\'offre groupée pour le calcul du bon',
        'description' => 'Soustraire la réduction d\'offre groupée du pourcentage de réduction du bon'
    ],
    [
        'formName' => 'SwagCustomizing',
        'elementName' => 'imageSelectThumbnailSize',
        'label' => 'Sélection d\'image > Taille de vignette',
        'description' => 'Attention : Pour ce faire, la taille de la vignette doit être saisie dans l\'album correspondant.'
    ],
    [
        'formName' => 'SwagCustomizing',
        'elementName' => 'imageUploadThumbnailSize',
        'label' => 'Chargement d\'image > Taille de vignette',
        'description' => null
    ],
    [
        'formName' => 'SwagCustomizing',
        'elementName' => 'imageUploadMaxSize',
        'label' => 'Chargement d\'image > Taille d\'image maximum',
        'description' => null
    ],
    [
        'formName' => 'SwagCustomizing',
        'elementName' => 'imageUploadFileExtension',
        'label' => 'Chargement d\'image > Extensions de fichier',
        'description' => null
    ],
    [
        'formName' => 'SwagCustomizing',
        'elementName' => 'fileUploadFileExtension',
        'label' => 'Chargement de fichier > Extensions de fichier autorisées',
        'description' => null
    ],
    [
        'formName' => 'SwagCustomizing',
        'elementName' => 'uploadDir',
        'label' => 'Dossier de chargement',
        'description' => null
    ],
    [
        'formName' => 'SwagCustomizing',
        'elementName' => 'uploadMaxSize',
        'label' => 'Taille de fichier maximum pour le chargement',
        'description' => 'Si aucune valeur n\'est définie, la taille de fichier maximum est reprise dans le PHP.'
    ],
    [
        'formName' => 'SwagCustomizing',
        'elementName' => 'uploadMinSize',
        'label' => 'Taille de fichier minimum pour le chargement',
        'description' => null
    ],
    [
        'formName' => 'SwagCustomizing',
        'elementName' => 'displayImageSelectionDescription',
        'label' => 'Afficher la description dans la sélection d\'image',
        'description' => null
    ],
    [
        'formName' => 'SwagFuzzy',
        'elementName' => 'showSimilarSearchRequests',
        'label' => 'Affiche les demandes de recherche similaires',
        'description' => null
    ],
    [
        'formName' => 'SwagFuzzy',
        'elementName' => 'showMatchingKeywords',
        'label' => 'Affiche les termes de recherche adaptés / similaires',
        'description' => null
    ],
    [
        'formName' => 'SwagLiveShopping',
        'elementName' => 'displayRating',
        'label' => 'Afficher l\'évaluation d\'article ?',
        'description' => null
    ],
    [
        'formName' => 'SwagLiveShopping',
        'elementName' => 'listingText',
        'label' => 'Texte pour le listing LiveShopping',
        'description' => null
    ],
    [
        'formName' => 'SwagLiveShopping',
        'elementName' => 'listingBanner',
        'label' => 'Bannière pour le listing LiveShopping',
        'description' => null
    ],
    [
        'formName' => 'SwagLiveShopping',
        'elementName' => 'listingTemplate',
        'label' => 'Sélection du template',
        'description' => null
    ],
    [
        'formName' => 'SwagMultiEdit',
        'elementName' => 'addToQueuePerRequest',
        'label' => 'Nombre de produits en attente par requête',
        'description' => 'Le nombre de produits que vous souhaitez ajouter en attente pour chaque requête. Plus la valeur est élevée, plus la requête prend longtemps. Des valeurs trop basses entraînent des frais généraux'
    ],
    [
        'formName' => 'SwagMultiEdit',
        'elementName' => 'batchItemsPerRequest',
        'label' => 'Produits par demande batch',
        'description' => 'Le nombre de produits devant être traités pour chaque requête. Plus la valeur est élevée, plus la requête prend longtemps. Des valeurs trop basses entraînent des frais généraux'
    ],
    [
        'formName' => 'SwagMultiEdit',
        'elementName' => 'enableBackup',
        'label' => 'Permet la fonction de restauration',
        'description' => 'Permet la fonction de restauration.'
    ],
    [
        'formName' => 'SwagMultiEdit',
        'elementName' => 'backupPath',
        'label' => 'Chemin de sauvegarde',
        'description' => 'Chemin vers le lieu de stockage des deltas de restauration. Des permissions d\'écriture sont nécessaires'
    ],
    [
        'formName' => 'SwagMultiEdit',
        'elementName' => 'clearCache',
        'label' => 'Invalide les produits en mode batch',
        'description' => 'Supprime tout produit en cache qui a été modifié en mode batch. Lorsque de nombreux produits sont modifiés, cela peut être relativement long. Il est conseillé de supprimer le cache manuellement après cela.'
    ],
    [
        'formName' => 'SwagTicketSystem',
        'elementName' => 'sendCustomerNotification',
        'label' => 'Confirmation de ticket au client',
        'description' => null
    ],
    [
        'formName' => 'SwagTicketSystem',
        'elementName' => 'sendShopOperatorNotification',
        'label' => 'Notification en cas de nouveaux tickets / réponses aux tickets',
        'description' => null
    ],
    [
        'formName' => 'SwagTicketSystem',
        'elementName' => 'ticketAccountFormId',
        'label' => 'Mon compte - ID du formulaire',
        'description' => null
    ],
    [
        'formName' => 'Auth',
        'elementName' => 'firstRunWizardEnabled',
        'label' => '\'Assist 1e utilisat\' Démarrer sur appel de l’admin',
        'description' => null
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'serviceAttrField',
        'label' => 'Zone texte libre articles pr art. presta. service',
        'description' => null
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'showEsdWarning',
        'label' => 'Afficher case à cocher pr droit de rétracta. art. ESD',
        'description' => null
    ],
    [
        'formName' => 'Compare',
        'elementName' => 'compareShow',
        'label' => 'Afficher comparatif',
        'description' => null
    ],
    [
        'formName' => 'Esd',
        'elementName' => 'showEsd',
        'label' => 'Afficher téléchargem. imméd. sur cpte',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'PageNotFoundCode',
        'label' => 'Code d\'erreur "Page introuvable"',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'PageNotFoundDestination',
        'label' => 'Objectif "Page introuvable"',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seoCustomSiteRouteTemplate',
        'label' => 'URL SEO modèle pages boutique',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seoFormRouteTemplate',
        'label' => 'URL SEO modèle formulaire',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seoIndexPaginationLinks',
        'label' => 'Indexer contenu paginé',
        'description' => null
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'doublepasswordvalidation',
        'label' => 'Le mot de passe doit être saisi 2 fois',
        'description' => null
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'requireAdditionAddressLine1',
        'label' => 'Traiter ligne supp.adr. 1 comme champ oblig.',
        'description' => null
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'requireAdditionAddressLine2',
        'label' => 'Traiter ligne supp.adr. 2 comme champ oblig.',
        'description' => null
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'requirebirthdayfield',
        'label' => 'Traiter date naiss.comme champ oblig.',
        'description' => null
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'showAdditionAddressLine1',
        'label' => 'Afficher ligne suppl.adr. 1',
        'description' => null
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'showAdditionAddressLine2',
        'label' => 'Afficher ligne suppl.adr. 2',
        'description' => null
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'showbirthdayfield',
        'label' => 'Afficher date naiss.',
        'description' => null
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'showCompanySelectField',
        'label' => 'Afficher zone sélect."Je suis"',
        'description' => null
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'showphonenumberfield',
        'label' => 'Afficher téléph.',
        'description' => null
    ],
    [
        'formName' => 'Frontend60',
        'elementName' => 'emailfooterhtml',
        'label' => 'Pied page E - mail HTML',
        'description' => null
    ],
    [
        'formName' => 'Frontend60',
        'elementName' => 'emailfooterplain',
        'label' => 'Pied page E - mail txt brut',
        'description' => null
    ],
    [
        'formName' => 'Frontend60',
        'elementName' => 'emailheaderhtml',
        'label' => 'Entête E - mail HTML',
        'description' => null
    ],
    [
        'formName' => 'Frontend60',
        'elementName' => 'emailheaderplain',
        'label' => 'Entête E - mail txt brut',
        'description' => null
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'basketShowCalculation',
        'label' => 'Afficher calcul frais d\'envoi dans le panier',
        'description' => null
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'hideNoInstock',
        'label' => 'Ne pas afficher articles en déstockage sans stock',
        'description' => null
    ],
    [
        'formName' => 'MasterData',
        'elementName' => 'metaIsFamilyFriendly',
        'label' => 'La boutique est familiale',
        'description' => null
    ],
    [
        'formName' => 'Media',
        'elementName' => 'thumbnailNoiseFilter',
        'label' => 'Filtrage du son des miniatures',
        'description' => null
    ],
    [
        'formName' => 'Search',
        'elementName' => 'searchProductBoxLayout',
        'label' => 'M.en p.prod.',
        'description' => null
    ],
];
