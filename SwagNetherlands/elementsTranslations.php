<?php

return [
    ['formName' => 'Product35', 'elementName' => 'vouchertax', 'label' => 'BTW vouchers', 'description' => ''],
    ['formName' => 'Product35', 'elementName' => 'discounttax', 'label' => 'BTW kortingen', 'description' => ''],
    [
        'formName' => 'Rating',
        'elementName' => 'voteunlock',
        'label' => 'Klantbeoordelingen moeten goedgekeurd worden',
        'description' => ''
    ],
    [
        'formName' => 'Product29',
        'elementName' => 'backendautoordernumber',
        'label' => 'Automatische suggesties voor artikelnummer',
        'description' => ''
    ],
    [
        'formName' => 'Product29',
        'elementName' => 'backendautoordernumberprefix',
        'label' => 'Prefix voor automatisch aangemaakte artikelnummers',
        'description' => ''
    ],
    [
        'formName' => 'Rating',
        'elementName' => 'votedisable',
        'label' => 'Artikelbeoordeling deactiveren',
        'description' => ''
    ],
    [
        'formName' => 'Rating',
        'elementName' => 'votesendcalling',
        'label' => 'Automatische herinnering artikelbeoordeling sturen',
        'description' => ''
    ],
    [
        'formName' => 'Rating',
        'elementName' => 'votecallingtime',
        'label' => 'Wachtdagen tot de herinneringsmail wordt verstuurd',
        'description' => ''
    ],
    [
        'formName' => 'Product35',
        'elementName' => 'taxautomode',
        'label' => 'Belasting voor kortingen dynamisch bepalen',
        'description' => ''
    ],
    [
        'formName' => 'LastArticles',
        'elementName' => 'show',
        'label' => 'Laatst bekeken artikelen tonen',
        'description' => ''
    ],
    [
        'formName' => 'LastArticles',
        'elementName' => 'controller',
        'label' => 'Keuze controller',
        'description' => ''
    ],
    ['formName' => 'LastArticles', 'elementName' => 'thumb', 'label' => 'Grootte afbeelding', 'description' => ''],
    [
        'formName' => 'LastArticles',
        'elementName' => 'lastarticlestoshow',
        'label' => 'Maximum aantal te tonen artikelen',
        'description' => ''
    ],
    [
        'formName' => 'Mail',
        'elementName' => 'mailer_encoding',
        'label' => 'Codering bericht',
        'description' => '8bit, 7bit, base64, binair of quoted-printable'
    ],
    [
        'formName' => 'Mail',
        'elementName' => 'mailer_mailer',
        'label' => 'Verzendmethode',
        'description' => 'mail, SMTP of bestand'
    ],
    [
        'formName' => 'Mail',
        'elementName' => 'mailer_hostname',
        'label' => 'Hostnaam bericht-ID',
        'description' => 'Wordt ontvangen in headers in een standaard HELO-string. Indien niet gedefinieerd wordt de waarde die van SERVER_NAME, "localhost.localdomain" terugkomt gebruikt.'
    ],
    [
        'formName' => 'Mail',
        'elementName' => 'mailer_host',
        'label' => 'Mailhost',
        'description' => 'U kunt ook een andere poort aangeven via het volgende format: [hostname:port] - e.g., smtp1.example.com:25'
    ],
    [
        'formName' => 'Mail',
        'elementName' => 'mailer_port',
        'label' => 'Standaardpoort',
        'description' => 'Stelt de standaard SMTP-serverpoort in.'
    ],
    [
        'formName' => 'Mail',
        'elementName' => 'mailer_smtpsecure',
        'label' => 'Verbindingsprefix',
        'description' => '"", ssl, of tls'
    ],
    [
        'formName' => 'Mail',
        'elementName' => 'mailer_username',
        'label' => 'SMTP-gebruikersnaam',
        'description' => ''
    ],
    ['formName' => 'Mail', 'elementName' => 'mailer_password', 'label' => 'SMTP-wachtwoord', 'description' => ''],
    [
        'formName' => 'Mail',
        'elementName' => 'mailer_auth',
        'label' => 'Authentificatie verbinding',
        'description' => 'normaal, login of crammd5'
    ],
    ['formName' => null, 'elementName' => 'cachesearch', 'label' => 'Cache zoeken', 'description' => ''],
    [
        'formName' => 'Service',
        'elementName' => 'setoffline',
        'label' => 'Winkel sluiten wegens onderhoud',
        'description' => ''
    ],
    [
        'formName' => 'Service',
        'elementName' => 'offlineip',
        'label' => 'Van sluiting uitgezonderd IP',
        'description' => ''
    ],
    [
        'formName' => 'AdvancedMenu',
        'elementName' => 'show',
        'label' => 'Activeer uitklapbaar menu in storefront',
        'description' => ''
    ],
    ['formName' => 'AdvancedMenu', 'elementName' => 'levels', 'label' => 'Aantal niveaus', 'description' => ''],
    [
        'formName' => 'AdvancedMenu',
        'elementName' => 'caching',
        'label' => 'Caching activeren',
        'description' => ''
    ],
    ['formName' => 'AdvancedMenu', 'elementName' => 'cachetime', 'label' => 'Cachetijd', 'description' => ''],
    [
        'formName' => 'Compare',
        'elementName' => 'show',
        'label' => 'Artikelvergelijking tonen',
        'description' => ''
    ],
    [
        'formName' => 'Compare',
        'elementName' => 'maxComparisons',
        'label' => 'Maximum aantal te vergelijken artikelen',
        'description' => ''
    ],
    ['formName' => 'TagCloud', 'elementName' => 'show', 'label' => 'Tag cloud tonen', 'description' => ''],
    ['formName' => 'TagCloud', 'elementName' => 'controller', 'label' => 'Keuze controller', 'description' => ''],
    ['formName' => 'TagCloud', 'elementName' => 'tagCloudClass', 'label' => 'Naam tagklasse', 'description' => ''],
    [
        'formName' => 'TagCloud',
        'elementName' => 'tagCloudMax',
        'label' => 'Maximum aantal begrippen',
        'description' => ''
    ],
    ['formName' => 'TagCloud', 'elementName' => 'tagCloudSplit', 'label' => 'Aantal stappen', 'description' => ''],
    [
        'formName' => 'TagCloud',
        'elementName' => 'tagTime',
        'label' => 'Meegetelde tijd in dagen',
        'description' => ''
    ],
    [
        'formName' => 'Frontend30',
        'elementName' => 'articlesperpage',
        'label' => 'Artikelen per pagina',
        'description' => ''
    ],
    [
        'formName' => 'Frontend30',
        'elementName' => 'orderbydefault',
        'label' => 'Standaardsortering listings',
        'description' => ''
    ],
    [
        'formName' => 'Frontend30',
        'elementName' => 'maxpages',
        'label' => 'Maximum aantal pagina\'s per categorie',
        'description' => ''
    ],
    [
        'formName' => 'Frontend76',
        'elementName' => 'markasnew',
        'label' => 'Meegetelde dagen voor nieuwe artikelen',
        'description' => ''
    ],
    [
        'formName' => 'Frontend76',
        'elementName' => 'markastopseller',
        'label' => 'Meegetelde dagen voor topsellers',
        'description' => ''
    ],
    [
        'formName' => 'Frontend76',
        'elementName' => 'chartrange',
        'label' => 'Aantal topsellers voor charts',
        'description' => ''
    ],
    [
        'formName' => 'Frontend30',
        'elementName' => 'numberarticlestoshow',
        'label' => 'Artikelkeuze per pagina',
        'description' => ''
    ],
    [
        'formName' => 'Frontend30',
        'elementName' => 'categorytemplates',
        'label' => 'Beschikbare templatecategorieën',
        'description' => ''
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'maxpurchase',
        'label' => 'Maximum aantal te kiezen artikelen via pulldownmenu',
        'description' => ''
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'notavailable',
        'label' => 'Tekst voor niet-beschikbare artikelen',
        'description' => ''
    ],
    [
        'formName' => 'Frontend77',
        'elementName' => 'maxcrosssimilar',
        'label' => 'Aantal gelijksoortige artikelen voor cross selling',
        'description' => ''
    ],
    [
        'formName' => 'Frontend77',
        'elementName' => 'maxcrossalsobought',
        'label' => 'Aantal artikelen "klanten kochten ook"',
        'description' => ''
    ],
    [
        'formName' => 'Frontend30',
        'elementName' => 'category_default_tpl',
        'label' => 'Standaard template voor nieuwe categorieën',
        'description' => ''
    ],
    [
        'formName' => 'Frontend76',
        'elementName' => 'chartinterval',
        'label' => 'Aantal mee te tellen dagen voor bepalen topseller',
        'description' => ''
    ],
    [
        'formName' => 'Frontend77',
        'elementName' => 'similarlimit',
        'label' => 'Aantal automatisch bepaalde soortgelijke artikelen (detailpagina)',
        'description' => ''
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'basketshippinginfo',
        'label' => 'Toon bezorgtijd in winkelmand',
        'description' => ''
    ],
    [
        'formName' => 'Frontend76',
        'elementName' => 'articlelimit',
        'label' => 'Aantal artikelen die als nieuw worden getoond',
        'description' => ''
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'inquiryid',
        'label' => 'ID aanvraagformulier',
        'description' => ''
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'inquiryvalue',
        'label' => 'Minimum winkelmandwaarde voor aanbieden individuele aanvragen',
        'description' => ''
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'usezoomplus',
        'label' => 'Zoom viewer in plaats van light box op detailpagina ',
        'description' => ''
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'liveinstock',
        'label' => 'Controleer voorraad in real time op detailpagina',
        'description' => ''
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'configmaxcombinations',
        'label' => 'Maximum aantal varianten per artikel',
        'description' => ''
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'deactivatenoinstock',
        'label' => 'Deactiveer niet-voorradige artikelen',
        'description' => ''
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'showbundlemainarticle',
        'label' => 'Toon hoofdartikelen in clusters',
        'description' => ''
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'deactivatebasketonnotification',
        'label' => 'Verberg "aan winkelmand toevoegen" optie indien artikel niet op voorraad',
        'description' => 'Klanten kunnen aangeven per e-mail geïnformeerd te willen worden als een artikel "nu op voorraad" is.'
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'instockinfo',
        'label' => 'Toon te weinig voorraad in winkelmand',
        'description' => ''
    ],
    [
        'formName' => 'Frontend30',
        'elementName' => 'categorydetaillink',
        'label' => 'Ga naar details indien slechts 1 artikel voorradig is',
        'description' => ''
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'configcustomfields',
        'label' => 'Configurator vrije tekstvelden',
        'description' => ''
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'detailtemplates',
        'label' => 'Beschikbare templates voor detailpagina',
        'description' => ''
    ],
    [
        'formName' => 'Frontend30',
        'elementName' => 'maxsupplierscategory',
        'label' => 'Maximum aantal producenten in sidebar',
        'description' => ''
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'minpassword',
        'label' => 'Minimumlengte wachtwoord (registratie)',
        'description' => ''
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'defaultpayment',
        'label' => 'Standaard betaalmethode ID (registratie)',
        'description' => ''
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'newsletterdefaultgroup',
        'label' => 'Standaard ontvangstgroep ID voor geregistreerde klanten (systeem / nieuwsbrief)',
        'description' => ''
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'shopwaremanagedcustomernumbers',
        'label' => 'Klantnummer automatisch aanmaken',
        'description' => ''
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'ignoreagb',
        'label' => 'Checkbox algemene voorwaarden op betaalpagina deactiveren',
        'description' => ''
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'countryshipping',
        'label' => 'Land met afleveradres vragen',
        'description' => ''
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'actdprcheck',
        'label' => 'Privacyregels moeten worden geaccepteerd via checkcbox',
        'description' => ''
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'paymentdefault',
        'label' => 'Standaard betaalmethode ID',
        'description' => ''
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'doubleemailvalidation',
        'label' => 'E-mailadres dient te worden bevestigd',
        'description' => 'Klanten moeten hun e-mailadres tweemaal invoeren om typefouten te vermijden.'
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'newsletterextendedfields',
        'label' => 'Controleer uitgebreide velden bij nieuwsbriefregistratie',
        'description' => ''
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'noaccountdisable',
        'label' => '"Geen klantrekening" deactiveren',
        'description' => ''
    ],
    [
        'formName' => 'Statistics',
        'elementName' => 'blockIp',
        'label' => 'IP uitsluiten van statistieken',
        'description' => ''
    ],
    [
        'formName' => 'Google',
        'elementName' => 'tracking_code',
        'label' => 'Google Analytics ID',
        'description' => ''
    ],
    [
        'formName' => 'Google',
        'elementName' => 'conversion_code',
        'label' => 'Google Conversion ID',
        'description' => ''
    ],
    ['formName' => 'Google', 'elementName' => 'anonymize_ip', 'label' => 'Anoniem IP-adres ', 'description' => ''],
    [
        'formName' => 'InputFilter',
        'elementName' => 'sql_protection',
        'label' => 'SQL injection-bescherming activeren',
        'description' => ''
    ],
    [
        'formName' => 'InputFilter',
        'elementName' => 'xss_protection',
        'label' => 'XXS-bescherming activeren',
        'description' => ''
    ],
    [
        'formName' => 'InputFilter',
        'elementName' => 'rfi_protection',
        'label' => 'Remote File Inclusion-bescherming activeren',
        'description' => ''
    ],
    [
        'formName' => 'Frontend71',
        'elementName' => 'vouchername',
        'label' => 'Omschrijving vouchers ',
        'description' => ''
    ],
    [
        'formName' => 'Search',
        'elementName' => 'minsearchlenght',
        'label' => 'Minimum lengte zoekterm',
        'description' => ''
    ],
    [
        'formName' => 'Frontend71',
        'elementName' => 'discountname',
        'label' => 'Omschrijving korting',
        'description' => ''
    ],
    [
        'formName' => 'Frontend71',
        'elementName' => 'surchargename',
        'label' => 'Omschrijving voorraadtekort',
        'description' => ''
    ],
    [
        'formName' => 'Frontend60',
        'elementName' => 'no_order_mail',
        'label' => 'Orderbevestiging niet aan winkeleigenaar sturen',
        'description' => ''
    ],
    [
        'formName' => 'Search',
        'elementName' => 'badwords',
        'label' => 'Blacklist voor keywords',
        'description' => ''
    ],
    [
        'formName' => 'Frontend71',
        'elementName' => 'paymentsurchargeadd',
        'label' => 'Omschrijving toeslag voor betaalwijze',
        'description' => ''
    ],
    [
        'formName' => 'Frontend71',
        'elementName' => 'paymentsurchargedev',
        'label' => 'Omschrijving korting voor betaalwijze',
        'description' => ''
    ],
    [
        'formName' => 'Frontend71',
        'elementName' => 'discountnumber',
        'label' => 'Bestelnummer voor kortingen',
        'description' => ''
    ],
    [
        'formName' => 'Frontend71',
        'elementName' => 'surchargenumber',
        'label' => 'Bestelnummer voor vooraadtekort',
        'description' => ''
    ],
    [
        'formName' => 'Frontend71',
        'elementName' => 'paymentsurchargenumber',
        'label' => 'Toeslag voor betaalwijze (bestelnummer)',
        'description' => ''
    ],
    [
        'formName' => 'Search',
        'elementName' => 'maxlivesearchresults',
        'label' => 'Aantal resultaten van live search',
        'description' => ''
    ],
    [
        'formName' => 'Frontend71',
        'elementName' => 'ignoreshippingfreeforsurcharges',
        'label' => 'Altijd absolute toeslagen voor verzendkosten berekenen',
        'description' => ''
    ],
    [
        'formName' => 'Frontend60',
        'elementName' => 'send_confirm_mail',
        'label' => 'Bevestiging registratie via CC aan winkeleigenaar sturen',
        'description' => ''
    ],
    [
        'formName' => 'Frontend60',
        'elementName' => 'optinnewsletter',
        'label' => 'Double opt in voor abonnement nieuwsbrief',
        'description' => ''
    ],
    [
        'formName' => 'Frontend60',
        'elementName' => 'optinvote',
        'label' => 'Double opt in voor klantbeoordelingen',
        'description' => ''
    ],
    [
        'formName' => 'Frontend71',
        'elementName' => 'shippingdiscountnumber',
        'label' => 'Bestelnummer voor korting verzendregel',
        'description' => ''
    ],
    [
        'formName' => 'Frontend71',
        'elementName' => 'shippingdiscountname',
        'label' => 'Omschrijving korting verzendregel',
        'description' => ''
    ],
    [
        'formName' => 'Frontend60',
        'elementName' => 'orderstatemailack',
        'label' => 'Orderstatus - wijzigingen CC-adres',
        'description' => ''
    ],
    [
        'formName' => 'Frontend93',
        'elementName' => 'premiumshippiungasketselect',
        'label' => 'Extended SQL-query',
        'description' => ''
    ],
    [
        'formName' => 'Frontend93',
        'elementName' => 'premiumshippingnoorder',
        'label' => 'Bestelling blokkeren indien geen beschikbare verzendwijze',
        'description' => ''
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'routertolower',
        'label' => 'Alleen onderkast bij URL\'s gebruiken',
        'description' => ''
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'redirectnotfound',
        'label' => 'Terug naar startpagina indien categorieën / artikelen niet aanwezig',
        'description' => ''
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seometadescription',
        'label' => 'Metabeschrijving van categorieën / artikelen aanmaken',
        'description' => ''
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'routerremovecategory',
        'label' => 'Categorie-ID uit URL verwijderen',
        'description' => ''
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seoqueryblacklist',
        'label' => 'SEO nofollow queries',
        'description' => ''
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seoviewportblacklist',
        'label' => 'SEO nofollow viewports',
        'description' => ''
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seoremovewhitespaces',
        'label' => 'Onnodige lege posities of regelafbrekingen verwijderen',
        'description' => ''
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seoremovecomments',
        'label' => 'HTML-commentaar verwijderen',
        'description' => ''
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seoqueryalias',
        'label' => 'Query aliassen',
        'description' => ''
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seobacklinkwhitelist',
        'label' => 'SEO follow backlinks',
        'description' => ''
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seorelcanonical',
        'label' => 'EO canonical tags gebruiken',
        'description' => ''
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'routerlastupdate',
        'label' => 'Datum laatst bijgewerkt',
        'description' => ''
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'routercache',
        'label' => 'SEO URLs caching tijdschema',
        'description' => ''
    ],
    [
        'formName' => 'Frontend101',
        'elementName' => 'vatcheckendabled',
        'label' => 'Module activeren',
        'description' => ''
    ],
    [
        'formName' => 'Frontend101',
        'elementName' => 'vatcheckadvancednumber',
        'label' => 'Afzonderlijke BTW ID voor verificatie',
        'description' => ''
    ],
    [
        'formName' => 'Frontend101',
        'elementName' => 'vatcheckadvanced',
        'label' => 'Uitgebreide verificatie activeren',
        'description' => ''
    ],
    [
        'formName' => 'Frontend101',
        'elementName' => 'vatcheckadvancedcountries',
        'label' => 'Geldige landen voor uitgebreide verificatie',
        'description' => ''
    ],
    [
        'formName' => 'Frontend101',
        'elementName' => 'vatcheckrequired',
        'label' => 'BTW ID-nummer als verplicht markeren',
        'description' => ''
    ],
    [
        'formName' => 'Frontend101',
        'elementName' => 'vatcheckdebug',
        'label' => 'Uitgebreide foutoutput activeren',
        'description' => ''
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'routerarticletemplate',
        'label' => 'SEO URLs artikel template',
        'description' => ''
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'routercategorytemplate',
        'label' => 'SEO URLs categorie template',
        'description' => ''
    ],
    [
        'formName' => 'Frontend101',
        'elementName' => 'vatchecknoservice',
        'label' => 'Normale verificatie uitvoeren indien service niet beschikbaar is',
        'description' => ''
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seostaticurls',
        'label' => 'Overige SEO URLs',
        'description' => ''
    ],
    [
        'formName' => 'Frontend101',
        'elementName' => 'vatcheckconfirmation',
        'label' => 'Officiële bevestiging aanvragen bij uitgebreide verificatie',
        'description' => ''
    ],
    [
        'formName' => 'Frontend101',
        'elementName' => 'vatcheckvalidresponse',
        'label' => 'Geldige resultaten bij uitgebreide verificatie',
        'description' => ''
    ],
    ['formName' => 'MasterData', 'elementName' => 'shopName', 'label' => 'Winkelnaam', 'description' => ''],
    ['formName' => 'MasterData', 'elementName' => 'mail', 'label' => 'E-mail winkeleigenaar', 'description' => ''],
    ['formName' => 'MasterData', 'elementName' => 'address', 'label' => 'Adres', 'description' => ''],
    ['formName' => 'MasterData', 'elementName' => 'taxNumber', 'label' => 'BTW ID', 'description' => ''],
    ['formName' => 'MasterData', 'elementName' => 'bankAccount', 'label' => 'Bankrekening', 'description' => ''],
    [
        'formName' => 'MasterData',
        'elementName' => 'captchaColor',
        'label' => 'Kleurcode font (R,G,B)',
        'description' => ''
    ],
    ['formName' => 'Statistics', 'elementName' => 'botBlackList', 'label' => 'Botlijst', 'description' => ''],
    ['formName' => 'Core', 'elementName' => 'baseFile', 'label' => 'Base file', 'description' => ''],
    ['formName' => 'Esd', 'elementName' => 'esdKey', 'label' => 'ESD-key', 'description' => ''],
    [
        'formName' => 'Frontend79',
        'elementName' => 'blogdetailtemplates',
        'label' => 'Beschikbare templates voor blog-detailpagina',
        'description' => ''
    ],
    [
        'formName' => 'Search',
        'elementName' => 'fuzzysearchdistance',
        'label' => 'Maximum afstand voor string matching (%)',
        'description' => ''
    ],
    [
        'formName' => 'Search',
        'elementName' => 'fuzzysearchexactmatchfactor',
        'label' => 'Factor voor exacte treffers',
        'description' => ''
    ],
    [
        'formName' => 'Search',
        'elementName' => 'fuzzysearchlastupdate',
        'label' => 'Laatste update',
        'description' => ''
    ],
    [
        'formName' => 'Search',
        'elementName' => 'fuzzysearchmatchfactor',
        'label' => 'Factor voor niet-exacte treffers',
        'description' => ''
    ],
    [
        'formName' => 'Search',
        'elementName' => 'fuzzysearchmindistancentop',
        'label' => 'Minimum relevantie voor topartikelen (%)',
        'description' => ''
    ],
    [
        'formName' => 'Search',
        'elementName' => 'fuzzysearchpartnamedistancen',
        'label' => 'Maximum afstand voor deelnamen (%)',
        'description' => ''
    ],
    [
        'formName' => 'Search',
        'elementName' => 'fuzzysearchpatternmatchfactor',
        'label' => 'Factor voor deeltreffers',
        'description' => ''
    ],
    [
        'formName' => 'Search',
        'elementName' => 'fuzzysearchpricefilter',
        'label' => 'Keuze prijsfilter',
        'description' => ''
    ],
    [
        'formName' => 'Search',
        'elementName' => 'fuzzysearchresultsperpage',
        'label' => 'Resultaten per pagina ',
        'description' => ''
    ],
    [
        'formName' => 'Search',
        'elementName' => 'fuzzysearchselectperpage',
        'label' => 'Keuzeresultaten per pagina',
        'description' => ''
    ],
    ['formName' => 'Esd', 'elementName' => 'esdMinSerials', 'label' => 'ESD-Min-Serials', 'description' => ''],
    [
        'formName' => 'Recommendation',
        'elementName' => 'alsoBoughtShow',
        'label' => '"Klanten kochten ook" aanbeveling tonen',
        'description' => ''
    ],
    [
        'formName' => 'Recommendation',
        'elementName' => 'alsoBoughtPerPage',
        'label' => 'Aantal artikelen per pagina in lijst',
        'description' => ''
    ],
    [
        'formName' => 'Recommendation',
        'elementName' => 'alsoBoughtMaxPages',
        'label' => 'Maximum aantal pagina\'s in lijst',
        'description' => ''
    ],
    [
        'formName' => 'Recommendation',
        'elementName' => 'similarViewedShow',
        'label' => '"Klanten bekeken ook" aanbevelingen tonen',
        'description' => ''
    ],
    [
        'formName' => 'Recommendation',
        'elementName' => 'similarViewedPerPage',
        'label' => 'Aantal artikelen per pagina in lijst',
        'description' => ''
    ],
    [
        'formName' => 'Recommendation',
        'elementName' => 'similarViewedMaxPages',
        'label' => 'Maximum aantal pagina\'s in lijst',
        'description' => ''
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'revocationNotice',
        'label' => 'Toon voorwaarden herroeping',
        'description' => ''
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'newsletter',
        'label' => 'Toon registratie nieuwsbrief',
        'description' => ''
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'bankConnection',
        'label' => 'Toon informatie bankverbinding',
        'description' => ''
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'additionalFreeText',
        'label' => 'Toon verdere informatie',
        'description' => 'Snippet: ConfirmTextOrderDefault'
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'commentVoucherArticle',
        'label' => 'Toon verdere opties',
        'description' => 'Voeg product, voucher, commentaarfunctie toe'
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'premiumArticles',
        'label' => 'Toon premieartikelen',
        'description' => ''
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'countryNotice',
        'label' => 'Toon landomschrijving',
        'description' => ''
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'nettoNotice',
        'label' => 'Toon informatie bij netto bestellingen',
        'description' => ''
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'basketHeaderColor',
        'label' => 'Achtergrondkleur kop winkelmand',
        'description' => '(Hex-Code)'
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'basketHeaderFontColor',
        'label' => 'Tekstkleur kop winkelmand',
        'description' => '(Hex-Code)'
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'basketTableColor',
        'label' => 'Achtergrondkleur winkelmandtabel',
        'description' => '(Hex-Code)'
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'mainFeatures',
        'label' => 'Template voor hoofdkenmerken',
        'description' => ''
    ],
    ['formName' => 'Auth', 'elementName' => 'backendTimeout', 'label' => 'Timeout', 'description' => ''],
    ['formName' => 'Auth', 'elementName' => 'backendLocales', 'label' => 'Taalkeuze', 'description' => ''],
    [
        'formName' => 'Frontend100',
        'elementName' => 'routerblogtemplate',
        'label' => 'SEO URLs blog template',
        'description' => ''
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'detailModal',
        'label' => 'Artikelgegevens in modal box tonen',
        'description' => ''
    ],
    [
        'formName' => 'Frontend30',
        'elementName' => 'blogcategory',
        'label' => 'Blog-invoeren tonen uit categorie (ID) op startpagina',
        'description' => ''
    ],
    [
        'formName' => 'Frontend30',
        'elementName' => 'bloglimit',
        'label' => 'Aantal blog-invoeren op startpagina',
        'description' => ''
    ],
    ['formName' => 'MasterData', 'elementName' => 'company', 'label' => 'Firma', 'description' => ''],
    [
        'formName' => 'Frontend100',
        'elementName' => 'routercampaigntemplate',
        'label' => 'SEO URLs landing page template',
        'description' => ''
    ],
    [
        'formName' => 'Frontend71',
        'elementName' => 'paymentSurchargeAbsolute',
        'label' => 'Omschrijving all-in toeslag op betaalwijze ',
        'description' => ''
    ],
    [
        'formName' => 'Frontend71',
        'elementName' => 'paymentSurchargeAbsoluteNumber',
        'label' => 'Omschrijving orderaantal voor all-in toeslag op betaalwijze ',
        'description' => ''
    ],
    ['formName' => 'StoreApi', 'elementName' => 'StoreApiUrl', 'label' => 'Store API URL', 'description' => ''],
    [
        'formName' => 'Newsletter',
        'elementName' => 'MailCampaignsPerCall',
        'label' => 'Aantal verstuurde e-mails per cronjob',
        'description' => ''
    ],
    ['formName' => 'InputFilter', 'elementName' => 'own_filter', 'label' => 'Eigen filter', 'description' => ''],
    [
        'formName' => 'Frontend33',
        'elementName' => 'accountPasswordCheck',
        'label' => 'Huidig wachtwoord bij wachtwoordwijziging controleren',
        'description' => ''
    ],
    [
        'formName' => 'InputFilter',
        'elementName' => 'refererCheck',
        'label' => 'Referrer-controle activeren',
        'description' => ''
    ],
    [
        'formName' => 'Esd',
        'elementName' => 'redirectDownload',
        'label' => 'Directe link naar downloadbestand',
        'description' => ''
    ],
    [
        'formName' => 'LegacyOptions',
        'elementName' => 'useShortDescriptionInListing',
        'label' => 'Altijd artikelomschrijving in listing views tonen ',
        'description' => 'Beïnvloede weergaven: meest verkocht, categorielijsten, emoties'
    ],
    [
        'formName' => 'Passwörter',
        'elementName' => 'defaultPasswordEncoder',
        'label' => 'Wachtwoord-algoritme',
        'description' => 'Met welke algoritme moet het wachtwoord worden versleuteld?'
    ],
    [
        'formName' => 'Passwörter',
        'elementName' => 'liveMigration',
        'label' => 'Live migration',
        'description' => 'Moeten beschikbare wachtwoorden worden geherformuleerd met andere algoritmen bij de volgend login? Dit verloopt automatisch op de achtergrond, zodat wachtwoorden geleidelijk kunnen worden omgezet in een nieuw algoritme.'
    ],
    [
        'formName' => 'Passwörter',
        'elementName' => 'bcryptCost',
        'label' => 'Bcrypt iteraties',
        'description' => 'Hoe hoger het aantal iteraties, des te moeilijker is het voor een potentiële hacker om het  clear-text wachtwoord te berekenen voor het versleutelde wachtwoord.'
    ],
    [
        'formName' => 'Passwörter',
        'elementName' => 'sha256iterations',
        'label' => 'Sha256 iteraties',
        'description' => 'Hoe hoger het aantal iteraties, des te moeilijker is het voor een potentiële hacker om het  clear-text wachtwoord te berekenen voor het versleutelde wachtwoord.'
    ],
    [
        'formName' => 'StoreApi',
        'elementName' => 'DummyPluginUrl',
        'label' => 'Dummy plugin download URL',
        'description' => ''
    ],
    [
        'formName' => 'HttpCache',
        'elementName' => 'admin',
        'label' => 'Admin view',
        'description' => 'Deactiveer cache voor voorvertoning artikel bij spoedbestelling'
    ],
    [
        'formName' => 'HttpCache',
        'elementName' => 'cacheControllers',
        'label' => 'Controller cache timeouts',
        'description' => ''
    ],
    [
        'formName' => 'HttpCache',
        'elementName' => 'noCacheControllers',
        'label' => 'Cache voor controlers overslaan / tags',
        'description' => ''
    ],
    [
        'formName' => 'HttpCache',
        'elementName' => 'proxy',
        'label' => 'Alternatieve proxy URL',
        'description' => 'Plaats "http://" voor HTTP-proxylinks'
    ],
    [
        'formName' => 'HttpCache',
        'elementName' => 'proxyPrune',
        'label' => 'Opschonen cache activeren',
        'description' => 'Maak automatisch opschonen cache mogelijk.'
    ],
    [
        'formName' => 'Esd',
        'elementName' => 'downloadAvailablePaymentStatus',
        'label' => 'Download met betaalstatus vrijgeven',
        'description' => 'Definieer de betaalstatus waarin een download van ESD-artikelen mogelijk is.'
    ],
    [
        'formName' => 'Frontend30',
        'elementName' => 'forceArticleMainImageInListing',
        'label' => 'Lijstweergave altijd met artikel-voorvertoning ',
        'description' => ''
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'sendOrderMail',
        'label' => 'Bestelopdracht versturen',
        'description' => ''
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'requirePhoneField',
        'label' => 'Telefoonveld verplicht stellen',
        'description' => 'Let er a.u.b. op dat u de asterisk-indicatie in de snippet RegisterLabelPhone moet configureren '
    ],
    [
        'formName' => 'SEPA',
        'elementName' => 'sepaCompany',
        'label' => 'Firmanaam',
        'description' => 'Naam van de crediteur dient te worden vermeld in de machtiging.'
    ],
    [
        'formName' => 'SEPA',
        'elementName' => 'sepaHeaderText',
        'label' => 'Koptekst',
        'description' => 'Koptekst van de machtiging.'
    ],
    [
        'formName' => 'SEPA',
        'elementName' => 'sepaSellerId',
        'label' => 'ID-nummer firma',
        'description' => 'Nummer crediteur dient te worden vermeld in de machtiging.'
    ],
    [
        'formName' => 'SEPA',
        'elementName' => 'sepaSendEmail',
        'label' => 'E-mail verzenden',
        'description' => 'Stuur een e-mail naar de klant met de bijgevoegde SEPA-machtiging.'
    ],
    [
        'formName' => 'SEPA',
        'elementName' => 'sepaShowBic',
        'label' => 'SEPA BIC-veld tonen',
        'description' => 'Sta de klant toe zijn BIC aan te geven bij het invullen van de SEPA-betaalgegevens.'
    ],
    [
        'formName' => 'SEPA',
        'elementName' => 'sepaRequireBic',
        'label' => 'SEPA BIC-veld vereist',
        'description' => 'Vraag de klant zijn BIC aan te geven bij het invullen van de SEPA-betaalgegevens. Deze optie wordt genegeerd als het veld verborgen is.'
    ],
    [
        'formName' => 'SEPA',
        'elementName' => 'sepaShowBankName',
        'label' => 'SEPA BIC-banknaamveld tonen',
        'description' => 'Sta de klant toe zijn banknaam aan te geven bij het invullen van de SEPA-betaalgegevens.'
    ],
    [
        'formName' => 'SEPA',
        'elementName' => 'sepaRequireBankName',
        'label' => 'SEPA BIC-banknaamveld vereist',
        'description' => 'Vraag de klant zijn banknaam aan te geven bij het invullen van de SEPA-betaalgegevens. Deze optie wordt genegeerd als het veld verborgen is.'
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'paymentEditingInCheckoutPage',
        'label' => 'Bewerken betaalgegevens op checkout-pagina toestaan',
        'description' => ''
    ],
    ['formName' => 'Frontend100', 'elementName' => 'seoSupplier', 'label' => 'SEO producent', 'description' => ''],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seoSupplierRouteTemplate',
        'label' => 'SEO URLs producent template',
        'description' => ''
    ],
    [
        'formName' => 'Statistics',
        'elementName' => 'maximumReferrerAge',
        'label' => 'Maximale ouderdom referrer-statistieken',
        'description' => 'Oude referrer-data worden gewist door de cron job call indien actief'
    ],
    [
        'formName' => 'Statistics',
        'elementName' => 'maximumImpressionAge',
        'label' => 'Maximale ouderdom impressions-statistieken',
        'description' => 'Oude impression-data worden gewist door de cron job call indien actief'
    ],
    [
        'formName' => 'Auth',
        'elementName' => 'firstRunWizardEnabled',
        'label' => '\'First Run Wizard\' bij oproepen van de backend starten',
        'description' => null,
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'serviceAttrField',
        'label' => 'Vrij artikeltekstveld voor dienstverleningsartikel',
        'description' => null,
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'showEsdWarning',
        'label' => 'Selectievakje recht van herroeping bij ESD-artikelen tonen',
        'description' => null,
    ],
    [
        'formName' => 'Compare',
        'elementName' => 'compareShow',
        'label' => 'Vergelijking tonen',
        'description' => null,
    ],
    [
        'formName' => 'Esd',
        'elementName' => 'esdDownloadStrategy',
        'label' => 'Downloadoptie voor ESD-bestanden',
        'description' => null,
    ],
    [
        'formName' => 'Esd',
        'elementName' => 'showEsd',
        'label' => 'Directe downloads in account tonen',
        'description' => null,
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'forceCanonicalHttp',
        'label' => 'Canonical altijd met HTTP',
        'description' => null,
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'PageNotFoundCode',
        'label' => '"Pagina niet gevonden" Foutcode',
        'description' => null,
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'PageNotFoundDestination',
        'label' => '"Pagina niet gevonden" Doel',
        'description' => null,
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'preferBasePath',
        'label' => 'Shopware-kernel uit URL verwijderen',
        'description' => null,
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seoCustomSiteRouteTemplate',
        'label' => 'SEO-urls shoppagina template',
        'description' => null,
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seoFormRouteTemplate',
        'label' => 'SEO-urls formulier template',
        'description' => null,
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seoIndexPaginationLinks',
        'label' => 'Gepagineerde inhoud indexeren',
        'description' => null,
    ],
    [
        'formName' => 'Frontend30',
        'elementName' => 'moveBatchModeEnabled',
        'label' => 'Categorieën in batchmodus verschuiven',
        'description' => null,
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'doublepasswordvalidation',
        'label' => 'Wachtwoord moet tweemaal worden ingevoerd',
        'description' => null,
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'requireAdditionAddressLine1',
        'label' => 'Extra adresregel 1 als verplicht veld behandelen',
        'description' => null,
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'requireAdditionAddressLine2',
        'label' => 'Extra adresregel 2 als verplicht veld behandelen',
        'description' => null,
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'requirebirthdayfield',
        'label' => 'Verjaardag als verplicht veld behandelen',
        'description' => null,
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'showAdditionAddressLine1',
        'label' => 'Extra adresregel 1 tonen',
        'description' => null,
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'showAdditionAddressLine2',
        'label' => 'Extra adresregel 2 tonen',
        'description' => null,
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'showbirthdayfield',
        'label' => 'Verjaardag tonen',
        'description' => null,
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'showCompanySelectField',
        'label' => 'Selectieveld "Ik ben" tonen',
        'description' => null,
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'showphonenumberfield',
        'label' => 'Telefoonnummer tonen',
        'description' => null,
    ],
    [
        'formName' => 'Frontend60',
        'elementName' => 'emailfooterhtml',
        'label' => 'E-mail footer HTML',
        'description' => null,
    ],
    [
        'formName' => 'Frontend60',
        'elementName' => 'emailfooterplain',
        'label' => 'E-mail footer plaintext',
        'description' => null,
    ],
    [
        'formName' => 'Frontend60',
        'elementName' => 'emailheaderhtml',
        'label' => 'E-mail header HTML',
        'description' => null,
    ],
    [
        'formName' => 'Frontend60',
        'elementName' => 'emailheaderplain',
        'label' => 'E-mail header plaintext',
        'description' => null,
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'basketShowCalculation',
        'label' => 'Berekening portokosten in winkelmandje tonen',
        'description' => null,
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'hideNoInstock',
        'label' => 'Verkoopartikelen zonder magazijnvoorraad niet tonen',
        'description' => null,
    ],
    [
        'formName' => 'LastArticles',
        'elementName' => 'time',
        'label' => 'Opslagtermijn in dagen',
        'description' => null,
    ],
    [
        'formName' => 'Log',
        'elementName' => 'logMail',
        'label' => 'Fout aan winkelexploitant zenden',
        'description' => null,
    ],
    [
        'formName' => 'MasterData',
        'elementName' => 'metaIsFamilyFriendly',
        'label' => 'Shop is familievriendelijk',
        'description' => null,
    ],
    [
        'formName' => 'Media',
        'elementName' => 'thumbnailNoiseFilter',
        'label' => 'Ruisfilter bij thumbnails',
        'description' => null,
    ],
    [
        'formName' => 'Recommendation',
        'elementName' => 'showTellAFriend',
        'label' => 'Artikel aanbevelen tonen',
        'description' => null,
    ],
    [
        'formName' => 'Search',
        'elementName' => 'searchProductBoxLayout',
        'label' => 'Productontwerp',
        'description' => null,
    ],
    [
        'formName' => 'SwagMultiEdit',
        'elementName' => 'addToQueuePerRequest',
        'label' => 'Aantal producten per queue aanvraag',
        'description' => null,
    ],
    [
        'formName' => 'SwagMultiEdit',
        'elementName' => 'batchItemsPerRequest',
        'label' => 'Producten per batch aanvraag',
        'description' => null,
    ],
    [
        'formName' => 'SwagMultiEdit',
        'elementName' => 'clearCache',
        'label' => 'Producten in batchmodus ongeldig verklaren',
        'description' => null,
    ],
    [
        'formName' => 'SwagMultiEdit',
        'elementName' => 'enableBackup',
        'label' => 'Functie backup instellen',
        'description' => null,
    ],
    [
        'formName' => 'SwagUpdate',
        'elementName' => 'update-api-endpoint',
        'label' => 'API eindpunt',
        'description' => null,
    ],
    [
        'formName' => 'SwagUpdate',
        'elementName' => 'update-channel',
        'label' => 'Kanaal',
        'description' => null,
    ],
    [
        'formName' => 'SwagUpdate',
        'elementName' => 'update-code',
        'label' => 'Code',
        'description' => null,
    ],
    [
        'formName' => 'SwagUpdate',
        'elementName' => 'update-fake-version',
        'label' => 'Fake versie',
        'description' => null,
    ],
    [
        'formName' => 'SwagUpdate',
        'elementName' => 'update-feedback-api-endpoint',
        'label' => 'Feedback API eindpunt',
        'description' => null,
    ],
    [
        'formName' => 'SwagUpdate',
        'elementName' => 'update-send-feedback',
        'label' => 'Feedback verzenden',
        'description' => null,
    ],
    [
        'formName' => 'SwagUpdate',
        'elementName' => 'update-unique-id',
        'label' => 'Unieke identifier',
        'description' => null,
    ],
    [
        'formName' => 'SwagUpdate',
        'elementName' => 'update-verify-signature',
        'label' => 'Handtekening controleren',
        'description' => null,
    ],
];
