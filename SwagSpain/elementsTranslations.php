<?php

return [
    ['formName' => 'Product35', 'elementName' => 'vouchertax', 'label' => 'Vales IVA', 'description' => null],
    [
        'formName' => 'Product35',
        'elementName' => 'discounttax',
        'label' => 'Descuentos IVA',
        'description' => null
    ],
    [
        'formName' => 'Rating',
        'elementName' => 'voteunlock',
        'label' => 'Deben desbloquearse las valoraciones de artículos',
        'description' => null
    ],
    [
        'formName' => 'Product29',
        'elementName' => 'backendautoordernumber',
        'label' => 'Propuesta automática del número de artículo',
        'description' => null
    ],
    [
        'formName' => 'Product29',
        'elementName' => 'backendautoordernumberprefix',
        'label' => 'Prefijo para los números de artículos generados automáticamente',
        'description' => null
    ],
    [
        'formName' => 'Rating',
        'elementName' => 'votedisable',
        'label' => 'Desactivar las valoraciones de artículos',
        'description' => null
    ],
    [
        'formName' => 'Rating',
        'elementName' => 'votesendcalling',
        'label' => 'Enviar recordatorio automático para la valoración de artículos',
        'description' => 'Recordar al usuario la valoración del artículo por correo electrónico tras la compra'
    ],
    [
        'formName' => 'Rating',
        'elementName' => 'votecallingtime',
        'label' => 'Días hasta el envío del correo electrónico recordatorio',
        'description' => 'Días hasta que se recuerde al cliente la valoración de artículos por correo electrónico'
    ],
    [
        'formName' => 'Product35',
        'elementName' => 'taxautomode',
        'label' => 'Determinar los impuestos de los descuentos de forma dinámica',
        'description' => null
    ],
    [
        'formName' => 'LastArticles',
        'elementName' => 'show',
        'label' => 'Mostrar el historial de artículos',
        'description' => null
    ],
    [
        'formName' => 'LastArticles',
        'elementName' => 'controller',
        'label' => 'Selección del controlador',
        'description' => null
    ],
    [
        'formName' => 'LastArticles',
        'elementName' => 'thumb',
        'label' => 'Tamaño de la imagen de vista previa',
        'description' => null
    ],
    [
        'formName' => 'LastArticles',
        'elementName' => 'lastarticlestoshow',
        'label' => 'Número de artículos en el historial (últimos vistos)',
        'description' => null
    ],
    [
        'formName' => 'Mail',
        'elementName' => 'mailer_encoding',
        'label' => 'Codificación del mensaje',
        'description' => '8bit, 7bit, base64, binaria y quoted-printable'
    ],
    [
        'formName' => 'Mail',
        'elementName' => 'mailer_mailer',
        'label' => 'Método de envío del correo electrónico',
        'description' => 'correo electrónico, smtp o archivo'
    ],
    [
        'formName' => 'Mail',
        'elementName' => 'mailer_hostname',
        'label' => 'Nombre del host para la ID del mensaje',
        'description' => 'Se utiliza en la cabecera por medio de HELO. De lo contrario, se utilizará el valor del SERVER_NAME o "localhost.localdomain".'
    ],
    [
        'formName' => 'Mail',
        'elementName' => 'mailer_host',
        'label' => 'Host de correo electrónico',
        'description' => 'También se puede utilizar otro puerto a través de este modelo: [hostname:port] - Ejemplo: smtp1.example.com:25'
    ],
    [
        'formName' => 'Mail',
        'elementName' => 'mailer_port',
        'label' => 'Puerto estándar',
        'description' => 'Establece el puerto del servidor SMTP estándar'
    ],
    [
        'formName' => 'Mail',
        'elementName' => 'mailer_smtpsecure',
        'label' => 'Prefijo de conexión',
        'description' => '"", ssl, o tls'
    ],
    [
        'formName' => 'Mail',
        'elementName' => 'mailer_username',
        'label' => 'Nombre de usuario SMTP',
        'description' => null
    ],
    [
        'formName' => 'Mail',
        'elementName' => 'mailer_password',
        'label' => 'Contraseña SMTP',
        'description' => null
    ],
    [
        'formName' => 'Mail',
        'elementName' => 'mailer_auth',
        'label' => 'Autenticación de conexión',
        'description' => 'simple, inicio de sesión o crammd5'
    ],
    [
        'formName' => 'Service',
        'elementName' => 'setoffline',
        'label' => 'Bloquear la tienda por mantenimiento',
        'description' => null
    ],
    [
        'formName' => 'Service',
        'elementName' => 'offlineip',
        'label' => 'IP excluida del bloqueo',
        'description' => null
    ],
    ['formName' => 'AdvancedMenu', 'elementName' => 'show', 'label' => 'Mostrar menú', 'description' => null],
    [
        'formName' => 'AdvancedMenu',
        'elementName' => 'levels',
        'label' => 'Número de niveles',
        'description' => null
    ],
    ['formName' => 'AdvancedMenu', 'elementName' => 'caching', 'label' => 'Activar caché', 'description' => null],
    [
        'formName' => 'AdvancedMenu',
        'elementName' => 'cachetime',
        'label' => 'Tiempo de caché',
        'description' => null
    ],
    ['formName' => 'Compare', 'elementName' => 'show', 'label' => 'Mostrar comparativa', 'description' => null],
    [
        'formName' => 'Compare',
        'elementName' => 'maxComparisons',
        'label' => 'Número máximo de artículos a comparar',
        'description' => null
    ],
    [
        'formName' => 'TagCloud',
        'elementName' => 'show',
        'label' => 'Mostrar nube de etiquetas',
        'description' => null
    ],
    [
        'formName' => 'TagCloud',
        'elementName' => 'controller',
        'label' => 'Selección del controlador',
        'description' => null
    ],
    [
        'formName' => 'TagCloud',
        'elementName' => 'tagCloudClass',
        'label' => 'Nombre de la clase de etiquetas',
        'description' => null
    ],
    [
        'formName' => 'TagCloud',
        'elementName' => 'tagCloudMax',
        'label' => 'Número máximo de conceptos',
        'description' => null
    ],
    [
        'formName' => 'TagCloud',
        'elementName' => 'tagCloudSplit',
        'label' => 'Número de niveles',
        'description' => null
    ],
    [
        'formName' => 'TagCloud',
        'elementName' => 'tagTime',
        'label' => 'Tiempo considerado en días',
        'description' => null
    ],
    [
        'formName' => 'Frontend30',
        'elementName' => 'articlesperpage',
        'label' => 'Artículos por página',
        'description' => null
    ],
    [
        'formName' => 'Frontend30',
        'elementName' => 'orderbydefault',
        'label' => 'Clasificación de listas estándar',
        'description' => null
    ],
    [
        'formName' => 'Frontend30',
        'elementName' => 'maxpages',
        'label' => 'Categorías máx. número páginas',
        'description' => null
    ],
    [
        'formName' => 'Frontend76',
        'elementName' => 'markasnew',
        'label' => 'Marcar artículo como nuevo (días)',
        'description' => null
    ],
    [
        'formName' => 'Frontend76',
        'elementName' => 'markastopseller',
        'label' => 'Marcar el artículo como superventas (ventas)',
        'description' => null
    ],
    [
        'formName' => 'Frontend76',
        'elementName' => 'chartrange',
        'label' => 'Número de superventas para los gráficos',
        'description' => null
    ],
    [
        'formName' => 'Frontend30',
        'elementName' => 'numberarticlestoshow',
        'label' => 'Selección de artículos por página',
        'description' => null
    ],
    [
        'formName' => 'Frontend30',
        'elementName' => 'categorytemplates',
        'label' => 'Categorías de plantillas disponibles',
        'description' => null
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'maxpurchase',
        'label' => 'Cantidad máx. de artículos seleccionables / Artículos por menú desplegable',
        'description' => null
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'notavailable',
        'label' => 'Texto para artículos no disponibles',
        'description' => null
    ],
    [
        'formName' => 'Frontend77',
        'elementName' => 'maxcrosssimilar',
        'label' => 'Número de artículos similares de ventas cruzadas',
        'description' => null
    ],
    [
        'formName' => 'Frontend77',
        'elementName' => 'maxcrossalsobought',
        'label' => 'Número de artículos de ventas cruzadas tipo "Otros clientes también compraron..."',
        'description' => null
    ],
    [
        'formName' => 'Frontend30',
        'elementName' => 'category_default_tpl',
        'label' => 'Plantilla estándar para nuevas categorías',
        'description' => null
    ],
    [
        'formName' => 'Frontend76',
        'elementName' => 'chartinterval',
        'label' => 'Número de días considerados para la generación de superventas',
        'description' => null
    ],
    [
        'formName' => 'Frontend77',
        'elementName' => 'similarlimit',
        'label' => 'Número de artículos similares determinados automáticamente (página detallada)',
        'description' => null
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'basketshippinginfo',
        'label' => 'Indicar el tiempo de entrega en la cesta de la compra',
        'description' => null
    ],
    [
        'formName' => 'Frontend76',
        'elementName' => 'articlelimit',
        'label' => 'Número de artículos que se lanzan como novedades',
        'description' => null
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'inquiryid',
        'label' => 'ID formulario de solicitud',
        'description' => null
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'inquiryvalue',
        'label' => 'Mín. valor de la cesta de la compra a partir del cual se ofrece la opción de solicitud individual',
        'description' => null
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'usezoomplus',
        'label' => 'Visor de zoom en lugar de Lightbox en la página detallada',
        'description' => null
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'liveinstock',
        'label' => 'Consultar en tiempo real las existencias en la página detallada',
        'description' => null
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'configmaxcombinations',
        'label' => 'Número máximo de variantes del configurador por artículo',
        'description' => null
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'deactivatenoinstock',
        'label' => 'Desactivar artículos de liquidación sin existencias',
        'description' => null
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'showbundlemainarticle',
        'label' => 'Mostrar artículo principal en el paquete',
        'description' => null
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'deactivatebasketonnotification',
        'label' => 'Ocultar la cesta de la compra con la notificación de correo electrónico',
        'description' => 'Ocultar la cesta de la compra si la notificación por correo electrónico está activada y no hay existencias'
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'instockinfo',
        'label' => 'Indicar cuántas existencias menos hay en la cesta de la compra',
        'description' => null
    ],
    [
        'formName' => 'Frontend30',
        'elementName' => 'categorydetaillink',
        'label' => 'Saltar directamente a Detalles si solo hay un artículo',
        'description' => null
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'configcustomfields',
        'label' => 'Configurador campos de texto libre',
        'description' => null
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'detailtemplates',
        'label' => 'Página detallada de plantillas disponibles',
        'description' => null
    ],
    [
        'formName' => 'Frontend30',
        'elementName' => 'maxsupplierscategory',
        'label' => 'Máx. número de fabricantes en la barra lateral',
        'description' => null
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'minpassword',
        'label' => 'Longitud mínima de la contraseña (registro)',
        'description' => null
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'defaultpayment',
        'label' => 'Modalidad de pago estándar (ID) (registro)',
        'description' => null
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'newsletterdefaultgroup',
        'label' => 'Grupo de destinatarios estándar (ID) para clientes registrados (sistema / boletín de noticias)',
        'description' => null
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'shopwaremanagedcustomernumbers',
        'label' => 'Shopware genera números de clientes',
        'description' => null
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'ignoreagb',
        'label' => 'Condiciones generales de compra - Desactivar la casilla de verificación en la página de la caja',
        'description' => null
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'countryshipping',
        'label' => 'Consultar el país / Estado federal en la dirección de entrega',
        'description' => null
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'actdprcheck',
        'label' => 'Las condiciones de protección de datos deben aceptarse mediante una casilla de verificación',
        'description' => null
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'paymentdefault',
        'label' => 'Modalidad de pago como último recurso (ID)',
        'description' => null
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'doubleemailvalidation',
        'label' => 'La dirección de correo electrónico debe introducirse dos veces.',
        'description' => 'La dirección de correo electrónico debe introducirse dos veces para evitar erratas.'
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'newsletterextendedfields',
        'label' => 'Consultar los campos avanzados en el registro para el boletín de noticias',
        'description' => null
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'noaccountdisable',
        'label' => 'Desactivar "Ninguna cuenta de cliente"',
        'description' => null
    ],
    [
        'formName' => 'Statistics',
        'elementName' => 'blockIp',
        'label' => 'Excluir la IP de las estadísticas',
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
        'label' => 'ID Conversión Google',
        'description' => null
    ],
    [
        'formName' => 'Google',
        'elementName' => 'anonymize_ip',
        'label' => 'Anonimizar la dirección IP',
        'description' => null
    ],
    [
        'formName' => 'InputFilter',
        'elementName' => 'sql_protection',
        'label' => 'Activar protección inyección SQL',
        'description' => null
    ],
    [
        'formName' => 'InputFilter',
        'elementName' => 'xss_protection',
        'label' => 'Activar protección XSS',
        'description' => null
    ],
    [
        'formName' => 'InputFilter',
        'elementName' => 'rfi_protection',
        'label' => 'Activar protección RemoteFileInclusion',
        'description' => null
    ],
    [
        'formName' => 'Frontend71',
        'elementName' => 'vouchername',
        'label' => 'Definición vales',
        'description' => null
    ],
    [
        'formName' => 'Search',
        'elementName' => 'minsearchlenght',
        'label' => 'Longitud mínima de las palabras de búsqueda',
        'description' => null
    ],
    [
        'formName' => 'Frontend71',
        'elementName' => 'discountname',
        'label' => 'Definición descuentos',
        'description' => null
    ],
    [
        'formName' => 'Frontend71',
        'elementName' => 'surchargename',
        'label' => 'Definición cantidades mínimas',
        'description' => null
    ],
    [
        'formName' => 'Frontend60',
        'elementName' => 'no_order_mail',
        'label' => 'No enviar la confirmación del pedido al operador de la tienda',
        'description' => null
    ],
    [
        'formName' => 'Search',
        'elementName' => 'badwords',
        'label' => 'Lista negra de palabras clave',
        'description' => null
    ],
    [
        'formName' => 'Frontend71',
        'elementName' => 'paymentsurchargeadd',
        'label' => 'Definición proc. Suplemento por la modalidad de pago',
        'description' => null
    ],
    [
        'formName' => 'Frontend71',
        'elementName' => 'paymentsurchargedev',
        'label' => 'Definición proc. Descuento por la modalidad de pago',
        'description' => null
    ],
    [
        'formName' => 'Frontend71',
        'elementName' => 'discountnumber',
        'label' => 'Descuentos número de pedido',
        'description' => null
    ],
    [
        'formName' => 'Frontend71',
        'elementName' => 'surchargenumber',
        'label' => 'Cantidades mínimas número de pedido',
        'description' => null
    ],
    [
        'formName' => 'Frontend71',
        'elementName' => 'paymentsurchargenumber',
        'label' => 'Suplemento por la modalidad de pago (número de pedido)',
        'description' => null
    ],
    [
        'formName' => 'Search',
        'elementName' => 'maxlivesearchresults',
        'label' => 'Número de resultados en la búsqueda Live',
        'description' => null
    ],
    [
        'formName' => 'Frontend71',
        'elementName' => 'ignoreshippingfreeforsurcharges',
        'label' => 'Calcular siempre los suplementos absolutos de pago por los gastos de envío',
        'description' => null
    ],
    [
        'formName' => 'Frontend60',
        'elementName' => 'send_confirm_mail',
        'label' => 'Enviar la confirmación del registro al operador de la tienda como CC',
        'description' => null
    ],
    [
        'formName' => 'Frontend60',
        'elementName' => 'optinnewsletter',
        'label' => 'Doble opt-in para suscripciones al boletín de noticias',
        'description' => null
    ],
    [
        'formName' => 'Frontend60',
        'elementName' => 'optinvote',
        'label' => 'Doble opt-in para valoraciones de artículos',
        'description' => null
    ],
    [
        'formName' => 'Frontend71',
        'elementName' => 'shippingdiscountnumber',
        'label' => 'Regla de envíos descuentos (número de pedido)',
        'description' => null
    ],
    [
        'formName' => 'Frontend71',
        'elementName' => 'shippingdiscountname',
        'label' => 'Regla de envíos descuentos (definición)',
        'description' => null
    ],
    [
        'formName' => 'Frontend60',
        'elementName' => 'orderstatemailack',
        'label' => 'Estado del pedido - Modificaciones dirección CC',
        'description' => null
    ],
    [
        'formName' => 'Frontend93',
        'elementName' => 'premiumshippiungasketselect',
        'label' => 'Consulta SQL avanzada',
        'description' => null
    ],
    [
        'formName' => 'Frontend93',
        'elementName' => 'premiumshippingnoorder',
        'label' => 'Bloquear el pedido si no hay ninguna modalidad de envío disponible',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'routertolower',
        'label' => 'Utilizar solo minúsculas en las URL',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'redirectnotfound',
        'label' => 'Desviar a la página de inicio en las categorías/artículos no existentes',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seometadescription',
        'label' => 'Preparar descripción meta de artículos/categorías',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'routerremovecategory',
        'label' => 'Eliminar ID de categoría de la URL',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seoqueryblacklist',
        'label' => 'Peticiones SEO-Nofollow',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seoviewportblacklist',
        'label' => 'Ventanas gráficas SEO-Nofollow',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seoremovewhitespaces',
        'label' => 'Eliminar los espacios / saltos de línea superfluos',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seoremovecomments',
        'label' => 'Eliminar comentarios HTML',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seoqueryalias',
        'label' => 'Alias peticiones',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seobacklinkwhitelist',
        'label' => 'Enlaces de respaldo SEO-Follow',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seorelcanonical',
        'label' => 'Utilizar etiquetas Canonical SEO',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'routerlastupdate',
        'label' => 'Fecha de la última actualización',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'routercache',
        'label' => 'Tabla tiempo caché URL SEO',
        'description' => null
    ],
    [
        'formName' => 'Frontend101',
        'elementName' => 'vatcheckendabled',
        'label' => 'Activar módulo',
        'description' => null
    ],
    [
        'formName' => 'Frontend101',
        'elementName' => 'vatcheckadvancednumber',
        'label' => 'N.º ID IVA propio para la comprobación',
        'description' => null
    ],
    [
        'formName' => 'Frontend101',
        'elementName' => 'vatcheckadvanced',
        'label' => 'Activar comprobación avanzada',
        'description' => null
    ],
    [
        'formName' => 'Frontend101',
        'elementName' => 'vatcheckadvancedcountries',
        'label' => 'Países válidos para la comprobación avanzada',
        'description' => null
    ],
    [
        'formName' => 'Frontend101',
        'elementName' => 'vatcheckrequired',
        'label' => 'Marcar el n.º ID IVA como campo obligatorio',
        'description' => null
    ],
    [
        'formName' => 'Frontend101',
        'elementName' => 'vatcheckdebug',
        'label' => 'Activar declaración de error avanzada',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'routerarticletemplate',
        'label' => 'Plantilla de artículos URL SEO',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'routercategorytemplate',
        'label' => 'Plantilla de categorías URL SEO',
        'description' => null
    ],
    [
        'formName' => 'Frontend101',
        'elementName' => 'vatchecknoservice',
        'label' => 'Si no puede contactar con la asistencia técnica, realice solo una comprobación simple',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seostaticurls',
        'label' => 'Otras URL SEO',
        'description' => null
    ],
    [
        'formName' => 'Frontend101',
        'elementName' => 'vatcheckconfirmation',
        'label' => 'Solicitar mensaje de confirmación oficial en la comprobación avanzada',
        'description' => null
    ],
    [
        'formName' => 'Frontend101',
        'elementName' => 'vatcheckvalidresponse',
        'label' => 'Resultados vigentes en la comprobación avanzada',
        'description' => null
    ],
    [
        'formName' => 'MasterData',
        'elementName' => 'shopName',
        'label' => 'Nombre de la tienda',
        'description' => null
    ],
    [
        'formName' => 'MasterData',
        'elementName' => 'mail',
        'label' => 'Operador de la tienda correo electrónico',
        'description' => null
    ],
    ['formName' => 'MasterData', 'elementName' => 'address', 'label' => 'Dirección', 'description' => null],
    ['formName' => 'MasterData', 'elementName' => 'taxNumber', 'label' => 'ID IVA', 'description' => null],
    [
        'formName' => 'MasterData',
        'elementName' => 'bankAccount',
        'label' => 'Cuenta bancaria',
        'description' => null
    ],
    [
        'formName' => 'MasterData',
        'elementName' => 'captchaColor',
        'label' => 'Color letra captcha (R,V,A)',
        'description' => null
    ],
    [
        'formName' => 'Statistics',
        'elementName' => 'botBlackList',
        'label' => 'Lista de bots',
        'description' => null
    ],
    ['formName' => 'Core', 'elementName' => 'baseFile', 'label' => 'Archivo base', 'description' => null],
    ['formName' => 'Esd', 'elementName' => 'esdKey', 'label' => 'Tecla ESD', 'description' => null],
    [
        'formName' => 'Frontend79',
        'elementName' => 'blogdetailtemplates',
        'label' => 'Página detallada del blog de plantillas disponibles',
        'description' => null
    ],
    [
        'formName' => 'Search',
        'elementName' => 'fuzzysearchdistance',
        'label' => 'Distancia máxima para la búsqueda inexacta en porcentaje',
        'description' => null
    ],
    [
        'formName' => 'Search',
        'elementName' => 'fuzzysearchexactmatchfactor',
        'label' => 'Factor de resultados exactos',
        'description' => null
    ],
    [
        'formName' => 'Search',
        'elementName' => 'fuzzysearchlastupdate',
        'label' => 'Fecha de la última actualización',
        'description' => null
    ],
    [
        'formName' => 'Search',
        'elementName' => 'fuzzysearchmatchfactor',
        'label' => 'Factor de resultados inexactos',
        'description' => null
    ],
    [
        'formName' => 'Search',
        'elementName' => 'fuzzysearchmindistancentop',
        'label' => 'Relevancia mínima para artículos destacados en porcentaje',
        'description' => null
    ],
    [
        'formName' => 'Search',
        'elementName' => 'fuzzysearchpartnamedistancen',
        'label' => 'Distancia máxima para los nombres parciales en porcentaje',
        'description' => null
    ],
    [
        'formName' => 'Search',
        'elementName' => 'fuzzysearchpatternmatchfactor',
        'label' => 'Factor para resultados parciales',
        'description' => null
    ],
    [
        'formName' => 'Search',
        'elementName' => 'fuzzysearchpricefilter',
        'label' => 'Selección de filtro de precios',
        'description' => null
    ],
    [
        'formName' => 'Search',
        'elementName' => 'fuzzysearchresultsperpage',
        'label' => 'Resultados por página',
        'description' => null
    ],
    [
        'formName' => 'Search',
        'elementName' => 'fuzzysearchselectperpage',
        'label' => 'Selección de resultados por página',
        'description' => null
    ],
    ['formName' => 'Esd', 'elementName' => 'esdMinSerials', 'label' => 'Series mín. ESD', 'description' => null],
    [
        'formName' => 'Recommendation',
        'elementName' => 'alsoBoughtShow',
        'label' => 'Mostrar la recomendación "Otros clientes también compraron..."',
        'description' => null
    ],
    [
        'formName' => 'Recommendation',
        'elementName' => 'alsoBoughtPerPage',
        'label' => 'Número de artículos por página en la lista',
        'description' => null
    ],
    [
        'formName' => 'Recommendation',
        'elementName' => 'alsoBoughtMaxPages',
        'label' => 'Número máximo de páginas en la lista',
        'description' => null
    ],
    [
        'formName' => 'Recommendation',
        'elementName' => 'similarViewedShow',
        'label' => 'Mostrar la recomendación "Otros clientes también vieron..."',
        'description' => null
    ],
    [
        'formName' => 'Recommendation',
        'elementName' => 'similarViewedPerPage',
        'label' => 'Número de artículos por página en la lista',
        'description' => null
    ],
    [
        'formName' => 'Recommendation',
        'elementName' => 'similarViewedMaxPages',
        'label' => 'Número máximo de páginas en la lista',
        'description' => null
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'revocationNotice',
        'label' => 'Indicar instrucciones de revocación',
        'description' => null
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'newsletter',
        'label' => 'Indicar suscripción al boletín de noticias',
        'description' => null
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'bankConnection',
        'label' => 'Indicar nota sobre la cuenta bancaria',
        'description' => null
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'additionalFreeText',
        'label' => 'Indicar otra nota',
        'description' => 'Fragmento: ConfirmTextOrderDefault'
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'commentVoucherArticle',
        'label' => 'Indicar más opciones',
        'description' => 'Añadir artículo, añadir vale, función de comentarios'
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'premiumArticles',
        'label' => 'Indicar artículos con premio',
        'description' => null
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'countryNotice',
        'label' => 'Indicar descripción regional',
        'description' => null
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'nettoNotice',
        'label' => 'Mostrar nota para pedidos netos',
        'description' => null
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'basketHeaderColor',
        'label' => 'Color de fondo de la cabecera de la cesta de la compra',
        'description' => '(código hex.)'
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'basketHeaderFontColor',
        'label' => 'Color del texto de la cabecera de la cesta de la compra',
        'description' => '(código hex.)'
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'basketTableColor',
        'label' => 'Color de fondo de la tabla de la cesta de la compra',
        'description' => '(código hex.)'
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'mainFeatures',
        'label' => 'Plantilla para las características esenciales',
        'description' => null
    ],
    ['formName' => 'Auth', 'elementName' => 'backendTimeout', 'label' => 'Tiempo expirado', 'description' => null],
    [
        'formName' => 'Auth',
        'elementName' => 'backendLocales',
        'label' => 'Idiomas seleccionables',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'routerblogtemplate',
        'label' => 'Plantilla de blog URL SEO',
        'description' => null
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'detailModal',
        'label' => 'Mostrar detalles del artículo en Modalbox',
        'description' => null
    ],
    ['formName' => 'TrustedShop', 'elementName' => 'tsid', 'label' => 'ID Trusted Shops', 'description',],
    [
        'formName' => 'Frontend30',
        'elementName' => 'blogcategory',
        'label' => 'Mostrar entradas del blog de la categoría (ID) en la página de inicio (solo bases de plantillas antiguas)',
        'description',
    ],
    [
        'formName' => 'Frontend30',
        'elementName' => 'bloglimit',
        'label' => 'Número de entradas del blog en la página de inicio',
        'description',
    ],
    ['formName' => 'MasterData', 'elementName' => 'company', 'label' => 'Empresa', 'description' => null],
    [
        'formName' => 'Frontend100',
        'elementName' => 'routercampaigntemplate',
        'label' => 'Plantilla página de destino URL SEO',
        'description' => null
    ],
    [
        'formName' => 'Frontend71',
        'elementName' => 'paymentSurchargeAbsolute',
        'label' => 'Suplemento fijo por la modalidad de pago (definición)',
        'description' => null
    ],
    [
        'formName' => 'Frontend71',
        'elementName' => 'paymentSurchargeAbsoluteNumber',
        'label' => 'Suplemento fijo por la modalidad de pago (número de pedido)',
        'description' => null
    ],
    ['formName' => 'StoreApi', 'elementName' => 'StoreApiUrl', 'label' => 'URL tienda API', 'description' => null],
    [
        'formName' => 'Newsletter',
        'elementName' => 'MailCampaignsPerCall',
        'label' => 'Número de correos que se envían por cada activación del cronjob',
        'description' => null
    ],
    [
        'formName' => 'InputFilter',
        'elementName' => 'own_filter',
        'label' => 'Filtro propio',
        'description' => null
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'accountPasswordCheck',
        'label' => 'Consultar la contraseña actual al cambiar la contraseña',
        'description' => null
    ],
    [
        'formName' => 'InputFilter',
        'elementName' => 'refererCheck',
        'label' => 'Activar comprobación del remitente',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'preferBasePath',
        'label' => 'Eliminar el núcleo de Shopware de la URL',
        'description' => 'Elimina "shopware.php" de las URL. Evita que los buscadores reconozcan contenidos duplicados en la tienda de forma incorrecta. Si no hay disponible ningún ModRewrite, esta casilla debe ser eliminada.'
    ],
    [
        'formName' => 'LegacyOptions',
        'elementName' => 'useShortDescriptionInListing',
        'label' => 'Mostrar siempre la descripción breve del artículo en las vistas de lista',
        'description' => 'Influencia: Superventas, listas de categorías, centros comerciales'
    ],
    [
        'formName' => 'Passwörter',
        'elementName' => 'defaultPasswordEncoder',
        'label' => 'Algoritmo de contraseñas',
        'description' => '¿Con qué algoritmo deben codificarse las contraseñas?'
    ],
    [
        'formName' => 'Passwörter',
        'elementName' => 'liveMigration',
        'label' => 'Migración Live',
        'description' => '¿Deben unirse mediante hash las contraseñas de usuarios existentes con otros algoritmos de contraseña en el siguiente registro? Esto sucede de forma totalmente automática como proceso de fondo, de modo tal que las contraseñas pueden pasarse sucesivamente a un nuevo algoritmo.'
    ],
    [
        'formName' => 'Passwörter',
        'elementName' => 'bcryptCost',
        'label' => 'Trabajo de cálculo Bcrypt',
        'description' => 'Cuanto más alto es el trabajo de cálculo, más difícil resulta para un posible atacante calcular una contraseña de texto claro para la contraseña encriptada.'
    ],
    [
        'formName' => 'Passwörter',
        'elementName' => 'sha256iterations',
        'label' => 'Iteraciones Sha256',
        'description' => 'Cuanto más alto es el trabajo de cálculo, más difícil resulta para un posible atacante calcular una contraseña de texto claro para la contraseña encriptada.'
    ],
    [
        'formName' => 'Frontend30',
        'elementName' => 'moveBatchModeEnabled',
        'label' => 'Desplazar categorías en el modo batch',
        'description' => null
    ],
    [
        'formName' => 'StoreApi',
        'elementName' => 'DummyPluginUrl',
        'label' => 'URL de descarga de extensiones ficticias',
        'description' => null
    ],
    [
        'formName' => 'HttpCache',
        'elementName' => 'admin',
        'label' => 'Vista Admin',
        'description' => 'Desactivar caché en la vista previa de artículos y los pedidos rápidos'
    ],
    [
        'formName' => 'HttpCache',
        'elementName' => 'cacheControllers',
        'label' => 'Controlador de caché / Tiempos',
        'description' => null
    ],
    [
        'formName' => 'HttpCache',
        'elementName' => 'noCacheControllers',
        'label' => 'Etiquetas / Controlador no-caché',
        'description' => null
    ],
    [
        'formName' => 'HttpCache',
        'elementName' => 'proxy',
        'label' => 'URL proxy alternativa',
        'description' => 'Enlace al proxy HTTP con "http://" al principio.'
    ],
    [
        'formName' => 'HttpCache',
        'elementName' => 'proxyPrune',
        'label' => 'Activar corrección proxy',
        'description' => 'Activar el vaciado automático de la caché.'
    ],
    [
        'formName' => 'Esd',
        'elementName' => 'downloadAvailablePaymentStatus',
        'label' => 'Desbloquear descarga con el estado del pago',
        'description' => 'Defina aquí el estado del pago en el que es posible descargar el artículo ESD.'
    ],
    [
        'formName' => 'Frontend30',
        'elementName' => 'forceArticleMainImageInListing',
        'label' => 'Mostrar siempre la imagen de vista previa del artículo en las vistas de lista',
        'description' => null
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'sendOrderMail',
        'label' => 'Enviar correo electrónico de finalización del pedido',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'forceCanonicalHttp',
        'label' => 'Canonical siempre con HTTP',
        'description' => 'Esta opción no se aplica cuando está activada la opción "Utilizar SSl para todo".'
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'requirePhoneField',
        'label' => 'Tratar el teléfono como campo obligatorio',
        'description' => 'Tenga en cuenta que debe configurar la indicación del asterisco mediante la unidad de texto RegisterLabelPhone'
    ],
    [
        'formName' => 'SEPA',
        'elementName' => 'sepaCompany',
        'label' => 'Nombre de la empresa',
        'description' => null
    ],
    ['formName' => 'SEPA', 'elementName' => 'sepaHeaderText', 'label' => 'Título', 'description' => null],
    [
        'formName' => 'SEPA',
        'elementName' => 'sepaSellerId',
        'label' => 'Número de identificación del acreedor',
        'description' => null
    ],
    [
        'formName' => 'SEPA',
        'elementName' => 'sepaSendEmail',
        'label' => 'Enviar mandato SEPA automáticamente',
        'description' => null
    ],
    [
        'formName' => 'SEPA',
        'elementName' => 'sepaShowBic',
        'label' => 'Mostrar campo BIC SEPA',
        'description' => null
    ],
    [
        'formName' => 'SEPA',
        'elementName' => 'sepaRequireBic',
        'label' => 'Campo BIC SEPA obligatorio',
        'description' => null
    ],
    [
        'formName' => 'SEPA',
        'elementName' => 'sepaShowBankName',
        'label' => 'Mostrar campo Entidad de crédito SEPA',
        'description' => null
    ],
    [
        'formName' => 'SEPA',
        'elementName' => 'sepaRequireBankName',
        'label' => 'Campo Entidad de crédito SEPA obligatorio',
        'description' => null
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'paymentEditingInCheckoutPage',
        'label' => 'Datos del cargo editables en caja',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seoSupplier',
        'label' => 'Aplicar datos SEO del fabricante',
        'description' => null
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seoSupplierRouteTemplate',
        'label' => 'Plantilla del fabricante URL SEO',
        'description' => null
    ],
    [
        'formName' => 'Log',
        'elementName' => 'logMail',
        'label' => 'Enviar error al operador de la tienda',
        'description' => null
    ],
    [
        'formName' => 'Statistics',
        'elementName' => 'maximumReferrerAge',
        'label' => 'Antigüedad máxima de los datos estadísticos del remitente',
        'description' => 'Los datos antiguos del remitente se eliminarán mediante el cronjob Limpiar si están activos'
    ],
    [
        'formName' => 'Statistics',
        'elementName' => 'maximumImpressionAge',
        'label' => 'Antigüedad máxima de las imágenes de los artículos',
        'description' => 'Los datos de imágenes antiguos se eliminarán mediante el cronjob Limpiar si están activos'
    ],
    [
        'formName' => 'Recommendation',
        'elementName' => 'showTellAFriend',
        'label' => 'Mostrar Recomendar artículo',
        'description' => null
    ],
    [
        'formName' => 'LastArticles',
        'elementName' => 'time',
        'label' => 'Plazo de almacenamiento en días',
        'description' => null
    ],
    [
        'formName' => 'Esd',
        'elementName' => 'esdDownloadStrategy',
        'label' => 'Opción de descarga para archivos ESD',
        'description' => '<b>Atención</b>: Este ajuste podría afectar a la funcionalidad de las descargas ESD Modifique aquí el ajuste solo si sabe lo que hace.<br><br>Estrategia de descarga para archivos ESD.<br><b>Enlace</b>: Puede ser inseguro en algunos casos, pues el enlace puede verse desde fuera.<br><b>PHP</b>: No se puede ver el enlace. PHP emite el archivo. Esto puede causar problemas en los archivos más grandes.<br><b>X-Sendfile</b>: Soporta archivos más grandes y es seguro. Necesita el módulo X-Sendfile Apache. <br><b>X-Accel</b>: Equivalente a X-Sendfile. Necesita el módulo X-Accel de Nginx.'
    ],
    [
        'formName' => 'SwagUpdate',
        'elementName' => 'update-api-endpoint',
        'label' => 'API Endpoint',
        'description' => null
    ],
    ['formName' => 'SwagUpdate', 'elementName' => 'update-channel', 'label' => 'Canal', 'description' => null],
    ['formName' => 'SwagUpdate', 'elementName' => 'update-code', 'label' => 'Código', 'description' => null],
    [
        'formName' => 'SwagUpdate',
        'elementName' => 'update-fake-version',
        'label' => 'Versión falsa',
        'description' => null
    ],
    [
        'formName' => 'SwagUpdate',
        'elementName' => 'update-feedback-api-endpoint',
        'label' => 'Feedback API Endpoint',
        'description' => null
    ],
    [
        'formName' => 'SwagUpdate',
        'elementName' => 'update-send-feedback',
        'label' => 'Enviar feedback',
        'description' => null
    ],
    [
        'formName' => 'SwagUpdate',
        'elementName' => 'update-unique-id',
        'label' => 'Identificador único',
        'description' => null
    ],
    [
        'formName' => 'SwagUpdate',
        'elementName' => 'update-verify-signature',
        'label' => 'Verificación de firma',
        'description' => null
    ],
    [
        'formName' => 'SwagAdvancedCart',
        'elementName' => 'expireDateInDays',
        'label' => 'Cesta de la compra de sesión Plazo de almacenamiento en días',
        'description' => 'Una vez pasado el plazo de almacenamiento en días, se eliminarán las cestas de la compra de sesión, pero no las listas de deseos.'
    ],
    [
        'formName' => 'SwagAdvancedCart',
        'elementName' => 'clearBasketOnRestore',
        'label' => 'Vaciar la cesta de la compra existente al restablecer una lista de deseos',
        'description' => 'Esta función sirve para que, al cargar su lista de deseos, el cliente no tenga artículos antiguos en la cesta de la compra.'
    ],
    [
        'formName' => 'SwagAdvancedCart',
        'elementName' => 'shareViaMail',
        'label' => 'Compartir por correo electrónico',
        'description' => 'Si el ajuste está activado, las listas de deseos pueden compartirse por correo electrónico. Verifique antes las disposiciones legales de su país.'
    ],
    [
        'formName' => 'SwagAdvancedCart',
        'elementName' => 'alsoListShow',
        'label' => 'Recomendar combinaciones de artículos',
        'description' => 'Con esta función se recomiendan artículos de la misma lista de deseos a los clientes en la página detallada del artículo.'
    ],
    [
        'formName' => 'SwagAdvancedCart',
        'elementName' => 'replaceNote',
        'label' => 'Sustituir recordatorio',
        'description' => 'Con ayuda de esta función, puede sustituir el recordatorio por el plugin de la lista de deseos. En el "escaparate", el recordatorio solo se podrá activar a través del enlace directo.'
    ],
    [
        'formName' => 'SwagAdvancedCart',
        'elementName' => 'facebookAppId',
        'label' => 'ID app Facebook',
        'description' => 'La ID de la app se necesita para los plugins sociales de Facebook (datos de "Me gusta" y comentarios)'
    ],
    [
        'formName' => 'SwagAdvancedCart',
        'elementName' => 'facebookLikes',
        'label' => 'Datos "Me gusta" de Facebook',
        'description' => 'Las listas de deseos públicas pueden contar con datos de Me gusta si se activa un ajuste.'
    ],
    [
        'formName' => 'SwagAdvancedCart',
        'elementName' => 'facebookComments',
        'label' => 'Comentarios de Facebook',
        'description' => 'Cuando se activa esta función, es posible comentar las listas de deseos públicas con el plugin social de Facebook.'
    ],
    [
        'formName' => 'SwagBundle',
        'elementName' => 'SwagBundleExcludeVoucher',
        'label' => 'Excluir vales porcentuales por paquete',
        'description' => 'Excluir vales porcentuales del precio del paquete en reducción'
    ],
    [
        'formName' => 'SwagBundle',
        'elementName' => 'SwagBundleSubtractBundle',
        'label' => 'Incluir el descuento del paquete en la cuenta al calcular el vale',
        'description' => 'Aplicar descuento por paquete del descuento por vales porcentuales'
    ],
    [
        'formName' => 'SwagCustomizing',
        'elementName' => 'imageSelectThumbnailSize',
        'label' => 'Selección de imágenes > Tamaño de la vista en miniatura',
        'description' => 'Atención: Para ello, el tamaño de la vista en miniatura debe estar introducido en el álbum correspondiente.'
    ],
    [
        'formName' => 'SwagCustomizing',
        'elementName' => 'imageUploadThumbnailSize',
        'label' => 'Cargar imagen > Tamaño de la vista en miniatura',
        'description' => null
    ],
    [
        'formName' => 'SwagCustomizing',
        'elementName' => 'imageUploadMaxSize',
        'label' => 'Cargar imagen > Tamaño máximo de la imagen',
        'description' => null
    ],
    [
        'formName' => 'SwagCustomizing',
        'elementName' => 'imageUploadFileExtension',
        'label' => 'Cargar imagen > Extensión del archivo',
        'description' => null
    ],
    [
        'formName' => 'SwagCustomizing',
        'elementName' => 'fileUploadFileExtension',
        'label' => 'Cargar imagen > Extensiones de archivo permitidas',
        'description' => null
    ],
    [
        'formName' => 'SwagCustomizing',
        'elementName' => 'uploadDir',
        'label' => 'Índice de carga',
        'description' => null
    ],
    [
        'formName' => 'SwagCustomizing',
        'elementName' => 'uploadMaxSize',
        'label' => 'Tamaño máximo de los archivos de carga',
        'description' => 'Si no hay depositado ningún valor, PHP toma el tamaño máximo del archivo.'
    ],
    [
        'formName' => 'SwagCustomizing',
        'elementName' => 'uploadMinSize',
        'label' => 'Tamaño mínimo de los archivos de carga',
        'description' => null
    ],
    [
        'formName' => 'SwagCustomizing',
        'elementName' => 'displayImageSelectionDescription',
        'label' => 'Mostrar descripción debajo de la selección de la imagen',
        'description' => null
    ],
    [
        'formName' => 'SwagFuzzy',
        'elementName' => 'showSimilarSearchRequests',
        'label' => 'Mostrar búsquedas similares',
        'description' => null
    ],
    [
        'formName' => 'SwagFuzzy',
        'elementName' => 'showMatchingKeywords',
        'label' => 'Mostrar palabras de búsqueda adecuadas / similares',
        'description' => null
    ],
    [
        'formName' => 'SwagLiveShopping',
        'elementName' => 'displayRating',
        'label' => '¿Mostrar valoración del artículo?',
        'description' => null
    ],
    [
        'formName' => 'SwagLiveShopping',
        'elementName' => 'listingText',
        'label' => 'Texto para la lista de LiveShopping',
        'description' => null
    ],
    [
        'formName' => 'SwagLiveShopping',
        'elementName' => 'listingBanner',
        'label' => 'Banner para la lista de LiveShopping',
        'description' => null
    ],
    [
        'formName' => 'SwagLiveShopping',
        'elementName' => 'listingTemplate',
        'label' => 'Selección de plantillas',
        'description' => null
    ],
    [
        'formName' => 'SwagMultiEdit',
        'elementName' => 'addToQueuePerRequest',
        'label' => 'Número de productos por solicitud de cola',
        'description' => 'El número de productos que desea añadir a la cola mediante solicitud. Cuanto mayor sea el valor, más tiempo necesitará la solicitud. Unos valores demasiado bajos resultarán en gastos'
    ],
    [
        'formName' => 'SwagMultiEdit',
        'elementName' => 'batchItemsPerRequest',
        'label' => 'Productos por solicitud de lote',
        'description' => 'El número de productos que desea procesar por cada solicitud. Cuanto mayor sea el valor, más tiempo necesitará la solicitud. Unos valores demasiado bajos resultarán en gastos'
    ],
    [
        'formName' => 'SwagMultiEdit',
        'elementName' => 'enableBackup',
        'label' => 'Habilitar propiedad Restaurar',
        'description' => 'Habilitar la propiedad Restaurar'
    ],
    [
        'formName' => 'SwagMultiEdit',
        'elementName' => 'backupPath',
        'label' => 'Ruta de la copia de seguridad',
        'description' => 'Ruta para el almacenamiento de los deltas de restauración. Se necesitan permisos por escrito'
    ],
    [
        'formName' => 'SwagMultiEdit',
        'elementName' => 'clearCache',
        'label' => 'Invalidar productos en el modo batch',
        'description' => 'Eliminará la caché para cualquier producto cambiado en el modo batch. Si se cambian muchos productos, será muy lento. Se recomienda vaciar la caché manualmente después.'
    ],
    [
        'formName' => 'SwagTicketSystem',
        'elementName' => 'sendCustomerNotification',
        'label' => 'Confirmación del ticket al cliente',
        'description' => null
    ],
    [
        'formName' => 'SwagTicketSystem',
        'elementName' => 'sendShopOperatorNotification',
        'label' => 'Notificación para tickets nuevos / respondidos',
        'description' => null
    ],
    [
        'formName' => 'SwagTicketSystem',
        'elementName' => 'ticketAccountFormId',
        'label' => 'Mi cuenta - ID formulario',
        'description' => null
    ],
    [
        'formName' => 'Auth',
        'elementName' => 'firstRunWizardEnabled',
        'label' => '\'First Run Wizard\' iniciar al activar la parte trasera',
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'serviceAttrField',
        'label' => 'Campo de texto libre para artículos de servicios',
    ],
    [
        'formName' => 'Checkout',
        'elementName' => 'showEsdWarning',
        'label' => 'Casilla de verificación para visualizar el derecho a la revocación en los artículos ESD',
    ],
    [
        'formName' => 'Compare',
        'elementName' => 'compareShow',
        'label' => 'Mostrar comparación',
    ],
    [
        'formName' => 'Esd',
        'elementName' => 'showEsd',
        'label' => 'Mostrar las descargas inmediatas en la cuenta',
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'PageNotFoundCode',
        'label' => 'Código de error "Página no encontrada"',
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'PageNotFoundDestination',
        'label' => 'Destino "Página no encontrada"',
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seoCustomSiteRouteTemplate',
        'label' => 'Plantilla de páginas de la tienda con URL SEO',
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seoFormRouteTemplate',
        'label' => 'Plantilla de formulario URL SEO',
    ],
    [
        'formName' => 'Frontend100',
        'elementName' => 'seoIndexPaginationLinks',
        'label' => 'Indexar contenido paginado',
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'doublepasswordvalidation',
        'label' => 'La contraseña debe introducirse dos veces',
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'requireAdditionAddressLine1',
        'label' => 'Tratar la línea adicional de la dirección 1 como un campo obligatorio',
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'requireAdditionAddressLine2',
        'label' => 'Tratar la línea adicional de la dirección 2 como un campo obligatorio'
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'requirebirthdayfield',
        'label' => 'Tratar la fecha de nacimiento como un campo obligatorio',
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'showAdditionAddressLine1',
        'label' => 'Mostrar la línea adicional de la dirección 1',
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'showAdditionAddressLine2',
        'label' => 'Mostrar la línea adicional de la dirección 2',
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'showbirthdayfield',
        'label' => 'Mostrar fecha de nacimiento',
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'showCompanySelectField',
        'label' => 'Mostrar el campo de selección "Soy"',
    ],
    [
        'formName' => 'Frontend33',
        'elementName' => 'showphonenumberfield',
        'label' => 'Mostrar teléfono',
    ],
    [
        'formName' => 'Frontend60',
        'elementName' => 'emailfooterhtml',
        'label' => 'Pie de página de correo electrónico HTML',
    ],
    [
        'formName' => 'Frontend60',
        'elementName' => 'emailfooterplain',
        'label' => 'Pie de página de correo electrónico de texto simple',
    ],
    [
        'formName' => 'Frontend60',
        'elementName' => 'emailheaderhtml',
        'label' => 'Titular de correo electrónico HTML',
    ],
    [
        'formName' => 'Frontend60',
        'elementName' => 'emailheaderplain',
        'label' => 'Titular de correo electrónico de texto simple',
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'basketShowCalculation',
        'label' => 'Mostrar el cálculo de los gastos de envío en la cesta de la compra',
    ],
    [
        'formName' => 'Frontend79',
        'elementName' => 'hideNoInstock',
        'label' => 'No mostrar los artículos en liquidación sin existencias en almacén',
    ],
    [
        'formName' => 'MasterData',
        'elementName' => 'metaIsFamilyFriendly',
        'label' => 'La tienda es apta para familias',
    ],
    [
        'formName' => 'Media',
        'elementName' => 'thumbnailNoiseFilter',
        'label' => 'Filtro de ruído para las vistas en miniatura',
    ],
    [
        'formName' => 'Search',
        'elementName' => 'searchProductBoxLayout',
        'label' => 'Diseño del producto',
    ]
];
