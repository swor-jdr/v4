<?php
/**
 *
 * BBCore [English]
 *
 * @package language
 * @version $Id$
 * @copyright (c) 2015 SiteSplat.com
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB')) {
    exit;
}
if (empty($lang) || !is_array($lang)) {
    $lang = array();
}

// BBCore
$lang = array_merge($lang, array(

    'PM_NEW_MSG' => array(
        1 => 'You have %d New Private Message',
        2 => 'You have %d New Private Messages',
    ),
    'PM_UNREAD_MSG' => array(
        1 => 'You have %d Unread Private Message',
        2 => 'You have %d Unread Private Messages',
    ),
    'PM_NEW_MSG_BUBBLE' => array(
        1 => '%d',
        2 => '%d',
    ),

    'UCP_MAIN'                   => 'Overview',
    'UCP_MAIN_FRONT'             => 'Page de garde',
    'UCP_MAIN_SUBSCRIPTION'      => 'Gérer les abonnements',
    'UCP_MAIN_BOOKMARKS'         => 'Gérer les marque-pages',
    'UCP_MAIN_DRAFTS'            => 'Gérer les brouillons',
    'UCP_MAIN_ATTACHMENTS'       => 'Gérer les pièces jointes',

    'USER_PANEL'                     => 'Panneau du Joueur',
    'UCP_PROFILE'                => 'Profil',
    'UCP_PROFILE_PROFILE'            => 'Editer profil',
    'UCP_PROFILE_SIGNITURE'          => 'Editer signature',
    'UCP_PROFILE_AVATAR'         => 'Editer avatar',
    'UCP_PROFILE_SETTINGS'       => 'Paramètres',
    'UCP_AVATAR_SELECT_OPTIONS'    => 'Options de l\'avatar',
    'UCP_AVATAR_SELECT_UPLOAD'     => 'Upload l\'avatar depuis votre PC',
    'UCP_SUBMIT_TO_UPLOAD'         => 'Submit below to upload',

    'UCP_PREFERENCE'                 => 'Vos préférences',
    'UCP_PREFERENCE_SETTINGS'    => 'Editer les paramètres globaux',
    'UCP_PREFERENCE_DEFAULTS'    => 'Editer les paramètre d\'écriture',
    'UCP_PREFERENCE_OPTIONS'     => 'Editer les options visuelles',

    'UCP_MESSAGES'               => 'Messages',
    'UCP_PM_COMPOSE'             => 'Ecrire message',
    'UCP_PM_DRAFTS'              => 'Gérer les brouillons',
    'UCP_PM_INBOX'               => 'Inbox',
    'UCP_PM_OUTBOX'              => 'Sortants',
    'UCP_PM_SENTBOX'             => 'Envois',
    'UCP_PM_OPTIONS'             => 'Règles, dossiers &amp; paramètres',
    'UCP_NO_USER_CHANGE_ALLOWED'   => '**Le changement de pseudo n\'est pas autorisé**',
    'UCP_REGISTER_EMAIL_EXPLAIN'   => 'Please do not use disposable emails',

    'WIDTH_SIZE'                     => 'width',
    'PIXEL_SIZE'                 => 'px',
    'HEIGHT_SIZE'                => 'height',

    'UCP_GROUPS'                 => 'Groupes',
    'UCP_GROUPS_MEMBERSHIP'      => 'Editer le membre',
    'UCP_GROUPS_MANAGE'          => 'Gérer les groupes',

    'UCP_ZEBRA'                  => 'Amis &amp; Ignorés',
    'UCP_ZEBRA_FRIENDS'          => 'Gérer les amis',
    'UCP_ZEBRA_FOES'             => 'Gérer les ignorés',
    'UCP_APPLY'                    => 'Appliquer',
    'UCP_PM_DEFAULT_RULE_TAG'      => 'Par défaut',
    'UCP_PM_DEFAULT_RULE'          => 'Ne pas accepter de nouveaux messages',
    'UCP_PM_DEFAULT_RULE_EXPLAIN'  => 'Cette action ne sera déclenchée que si aucune des options ci-dessus est applicable . Les nouveaux messages seront retenus jusqu\'à ce que suffisamment d\'espace soit disponible .',
    'UCP_PM_NEW_MESSAGE'           => 'Nouveau message',
    'BIO'                          => 'Informations personnelles',
    'MANAGE'                       => 'Admonistrer',
    'JOINED_BOARD'                 => 'A rejoint le forum',
    'VISITED_BOARD'                => 'Dernière visite',
    'SEE_MORE'                     => 'En savoir plus',
    'ATTACH_SIGNATURE'             => 'Attacher la signature',

    'DELETE_POST_SOFT'             => 'Suppression du message soft',
    'DELETE_POST_PERMANENT'        => 'Suppression permanente',
    'DELETE_POST_SOFT_WARN'        => 'Le message peut-être récupéré',
    'DELETE_POST_PERMANENT_WARN'   => 'Le message ne peut PAS être récupéré',

    'POLL_MAX_OPTIONS_EXPLAIN_ALT' => 'Entrez le nombre maximum d\'options que l\'utilisateur peut sélectionner',
    'POLL_VOTE_CHANGE_LABEL'       => 'Autoriser la correction du vote',
    'NO_VOTES_NA'                  => 'N/A',
    'NOT_AVAILABLE'                => 'Indisponible',
    'POST_TOPIC_NEW'               => 'Nouveau sujet',
    'QUICK_REPLY_SHOW_HIDE'        => 'Montrer/Cacher la réponse rapide',
    'CHARACTERS_COUNT'             => 'Characters',
    'CHARACTERS_COUNT_REM'         => 'Remaining',
    'BOOKMARKED_TOPICS_UCP'        => 'Sujets favoris',
    'ATTACH_EXPLANATION_SORTABLE'  => 'Cliquer pour trier',
    'ATTACH_FORUM'                 => 'Liens',
    'MCP_DETAILS_LOG'              => 'Détails',
    'MCP_DETAIL_U_IP'              => 'Utilisateur &amp; IP',
    'MCP_MANAG_BAN'                => 'Gérer le bannissement',
    'MCP_UNAPPROVED_POSTS_ZERO'    => 'Il n\'y a pas de message en attente de validation',
    'MCP_REPORTS_ZERO'             => 'Il n\'y a pas de demande en attente',
    'MCP_PM_REPORTS_ZERO'          => 'Il n\'y a pas de MP à surveiller',


    'FORUMLIST_UNAPPROVED'         => 'Au moins un sujet de ce forum n\'a pas été approuvé',
    'FORUMLIST_UNAPPROVED_POST'    => 'Au moins un message de ce forum n\'a pas été approuvé',
    'FORUMLIST_LASTPOST'           => 'Voir le dernier messages',
    'TOPICS_POSTS_STATISTICS'      => 'Statistiques',
    'TOPICS_ROW_REPORTED'          => 'Ce message est en attente de modération',
    'TOPICS_ROW_NOT_APPROVED'      => 'Ce sujet n\'a pas été approuvé',
    'TOPICS_ROW_DELETED'           => 'Le sujet a été supprimé',
    'MODERATOR_PANEL_GENERAL'      => 'Tableau de bord',
    'ADMIN_PANEL_GENERAL'          => 'Panneau d\'administration',
    'RANK_IMAGE'                   => 'Rank image',

    'WELCOME_INDEX'                => 'Bienvenue',
    'FAQ'                          => 'FAQ',
    'CAPTION_FAQ'                  => 'Common knowledge place',
    'CAPTION_SEARCH'               => 'Rechercher',
    'CAPTION_MEMBERS'              => 'Vous cherchz quelqu\'un ?',
    'MEMBERS_CAP'                  => 'Members',
    'CAPTION_UCP'                  => 'Définir vos préférences',
    'UCP_CAP'                      => 'Panneau de l\'utilisateur',
    'INDEX_CAPTION'                => 'Page d\'index du forum',
    'VIEWTOPIC_CAP'                => 'Titre du sujet',
    'CAPTION_VIEWTOPIC'            => 'Description du sujet',
    'CAPTION_VIEWFORUM'            => 'Dérouler toutes les catégories du forum',
    'POSTINGS_CAP'                 => 'Editeur de texte',
    'CAPTION_POSTINGS'             => 'Posting things up!',

    'MCP_CAPTION'                  => 'This is where you get to use the Super Powers',
    'BOOTSTRAP_ELEMENT'            => 'Bootstrap Elements',
    'BOOTSTRAP_ELEMENT_CAPTION'    => 'Forum KickStart Documentation',
    'MAIN_FORUM'                   => 'Forum',
    'MAIN_MAIN_STUFF'              => 'The Main stuff',
    'MAIN_TRENDS'                  => 'See the trends',

    'MAIN_SEARCH_IT_UP'            => 'Search it up',
    'SUB_NO_ICON'                  => 'No Icon here at all',
    'EXAMPLE_WITH_ICON'            => 'Example With Icon',
    'EXAMPLE_LINK'                 => 'Example Link',
    'MAIN_SOCIAL'                  => 'Social',
    'SOCIAL_P'                     => 'Chat away',

    'MORE'                           => 'Plus',
    'EXPAND_CLOSE'                   => 'Close View',
    'MARK_TOPICS_READ'               => 'Marquer les sujets comme lus',
    'CONTACT'                        => 'Contact',
    'GET_IN_TOUCH'                   => 'Entrer en contact',
    'HANG_AROUND'                    => 'Hang around',
    'JOIN_THE_CLUB'                  => 'Join the club',
    'MENU'                       => 'MENU',
    'YOU_ARE_HERE'                   => 'Vous êtes ici',
    'IN_FOOTER'                      => 'In:',
    'REPLY'                      => 'Répondre',

    'LOGIN_REMEMBER'                 => 'Garder ma session active',
    'LOGIN_HIDE_ME'              => 'Cacher la session',
    'LOGIN_ME_IN'                    => 'Connexion',
    'SIGN_IN_ACCOUNT'                => 'Se connecter à mon compte',
    'CREATE_ACCOUNT'                 => 'Créer un compte',
    'GO_TO_SEARCH_ADV'             => 'Retour à la recherche avancée',

    'CREATE_ACCOUNT_DISABLED'      => 'Inscriptions fermées',
    'REGISTRATION_DISABLED'        => 'Il semblerait que les inscriptions soient fermées pour le moment. Il s\'agit peut-être d\'une mesure temporaire. Si vous pensez qu\'il s\'agit d\'une erreur, veuillez contacter l\'administrateur de ce site. Nous vous présentons nos excuses pour le dérangement que cela peut occasionner. Vous trouverez notre politique de vie privée et les conditions d\'utilisation ci-après.',
    'CONTACT_WEBMASTER'          => 'Contacter l\'administrateur',
    'CONFIRM_QA_EXPLAIN_ALT'       => 'Prouvez-nous que vous êtes humain',

    'PLUPLOAD_PLACE_INLINE'        => 'Inline',
    'PLUPLOAD_DELETE_FILE'         => 'Supprimer',


    'REG_CREATING'               => 'Création du profil...',
    'LOADING'                        => 'Chargement...',
    'SAVING'                         => 'Sauvegarde...',
    'CANCELLING'                     => 'Annulation...',
    'SENDING'                        => 'Envoi...',
    'SEARCHING'                  => 'Recherche...',
    'LOADING_LOG_IN'                 => 'Connexion...',
    'FILE_UPLOADING'                 => 'Uploading...',
    'CASTING_VOTE'               => 'Casting vote...',
    'LOADING_FORM'               => 'Loading form...',


    'MEMBERLIST_P_JOINED'          => 'S\'est inscrit',
    'MEMBERLIST_P_EXPL'            => 'Date d\'inscription de l\'utilisateur',
    'MEMBERLIST_P_DATE_EXPL'       => 'C\'est la dernière fois que je suis passé par là',
    'SPAMMER_PLACEHOLDER'          => 'Vous ne pouvez pas spammer notre forum en toute impunité !',
    'MARK_PLACEHOLDER'               => 'Marquez votre choix',
    'INFO_BOX'                       => 'Information:',
    'USER_REMOVE_PLACEHOLDER'      => 'Supprimer l\'utilisateur',
    'GROUP_REMOVE_PLACEHOLDER'     => 'Supprimer le groupe',
    'EDIT_LINK_PLACEHOLDER'        => 'url',
    'POST_IT_UP_PLACEHOLDER'       => 'Post it up!',
    'MESSAGE_ENTER_PLACEHOLDER'    => 'Entrer votre message',
    'FILE_COMMENT_PLACEHOLDER'     => 'Commenter le fichier',
    'HEIGTH_PLACEHOLDER'         => 'height',
    'WIDTH_PLACEHOLDER'          => 'width',
    'UCP_OCCUPATION_PLACEHOLDER'   => 'Décrivez rapidement ce que vous faites...',
    'UCP_INTERESTS_PLACEHOLDER'    => 'Décrivez vos intérêts...',
    'SOFT_DELETE_PLACEHOLDER'      => 'Insérez la raison si vous le souhaitez...',
    'ADD_DESCRIPTION'              => 'Ajouter une description',

    'FILE_SELECT'                    => 'Choisir le fichier',
    'FILE_CHANGE'                    => 'Changer',
    'SELECT_IMAGE'                   => 'Sélectionner l\'image',
    'NOTE'                           => 'Note',
    'EDIT_DRAFT'                 => 'Editer le brouillon',
    'PM_BALOON_NOTIFICATION'       => 'Autoriser les popup pour les messages privés',
    'DAYS_AGO'                       => 'Days ago',
    'WORK_IN_PROGRESS'               => 'Maintenance',
    'DISABLE_MESSAGE'              => 'Board inaccessible',
    'DISABLE_RETURN'               => 'Retour à l\'index',
    'BOARD_DISABLED_SHUFFLE'       => 'Amusez-vous et mélangez les lettres',
    'DISABLE_TEXT_TRY'             => 'Essayez vous-même',
    'DISABLE_TEXT_TYPE'            => 'Ecrivez n\'importe quoi et validez...',

    'GRAVATAR_EXPLAIN'               => 'If a <a href="//en.gravatar.com/" target="_blank">GRAVATAR</a> is associated to your email address, it will be set as default.',
    'GRAVATAR_EXPLAIN_CONFIRM'     => 'Confirmer l\'adresse mail',

    'DELETE_POLL'                    => 'Supprimer le sondage',
    'POLL_DELETE_HELPER'         => '(Ceci supprimera uniquement le sondage) check and submit',
    'JUMP_TO_POST'                   => 'Sauter vers le message',
    'JUMP_SELECT_FORUM'            => 'Sauter vers un forum',
    'JUMP_TO_PAGE_NUMBER'          => 'Rejoindre la page #',
    'VIEW_FIRST_UNREAD'            => 'Voir le premier message non lu',
    'BOOKMARK_TOPIC_REMOVE'        => 'Supprimer des favoris',

    'NEW_MESSAGES'               => 'Nouveaux messages',
    'YOU_HAVE'                   => 'Vous avez',
    'AND'                            => 'et',
    'HELLO'                      => 'Bonjour',
    'DISMISS_PM'                 => 'Defer 5 min',
    'READ_NOW'                       => 'Lire',
    'PRIVATE_MESSAGE_NEW'            => 'nouveau message privé',
    'PRIVATE_MESSAGE_UNREAD'         => 'messages privés non lus',
    'NO_PMS_INFO'                    => 'Accéder à votre messagerie',

    'DATES'                      => 'DATE',
    'POWERED'                        => 'Powered By',
    'HANDCRAFTED'                    => 'HandCrafted With',
    'BY'                         => 'By',

    'RECENT_TOPICS'              => 'Sujets récents',
    'TWITTER'                        => 'Twitter',
    'FAVORITES'                  => 'Favorites',

    'GALLERY'                        => 'Galerie',
    'CHAT'                           => 'Chat',
    'ABOUT'                      => 'A propos',
    'ABOUT_PART_ONE'             => 'BBOOTS&#8482; Is The First And Only Fully Responsive PhpBB&reg; Unofficial HTML5/CSS3 Theme. It’s Clean And Crisp Design Looks AWESOME Across All Browsers And Devices.',
    'ABOUT_PART_TWO'             => 'It Utilizes A Bootstrap Based Layout Which Has Been Long Waited For And That Is Sure To AMAZE The phpBB Fan Club.',
    'ABOUT_PART_THREE'               => 'The Unofficial Responsive Theme',
    'BB'                         => 'B',
    'BOOTS'                      => 'BOOTS',
    'BBOOTS'                     => 'BBOOTS',

    'BBOOTS_VERSION'                 => '<a href="http://www.sitesplat.com/phpBB3/">BBOOTS</a>',
    'U_LOGOUT'                       => 'Déconnexion',

    'SITESPLAT_STATISTICS'       => 'Statistiques',
    'SITESPLAT_SEE_DETAILS'      => 'Voir Details',
    'SITESPLAT_SEARCH_LAST_DAY'    => 'Posts des dernières 24h',
    'SITESPLAT_SEARCH_WEEK'      => 'Posts des 7 derniers jours',

    'SITESPLAT_TOTAL_POSTS'      => 'Messages',
    'SITESPLAT_TOTAL_TOPICS'         => 'Sujets',
    'SITESPLAT_TOTAL_USERS'      => 'Membres',
    'SITESPLAT_NEWEST_MEMBER'        => 'Nouvel arrivant',
    'SITESPLAT_USERS_ONLINE'         => 'Qui est en ligne ?',
    'SITESPLAT_MOST_USERS_ONLINE'    => 'Record de connexions',

    'BOOTSTRAP_VERSION'          => '3.3.5',
    'FLATBOOTS'                  => 'FLATBOOTS',
    'CHANGE_AVATAR'              => 'Modifier l\'avatar',
    'CHANGE_PASSWORD'                => 'Modifier le mot de passe',

    'ADMIN_TIPS'                     => 'Admin Tips &amp; Tricks',
    'ADMIN_TIP_INTRO'                => 'Did you know you can make your phpBB forum even more secure with some simple steps?',
    'ADMIN_TIP_ONE'              => 'Keep your software up to-date.',
    'ADMIN_TIP_TWO'              => 'Always use strong passwords that contain random sequence of letters, numbers and special characters.',
    'ADMIN_TIP_THREE'                => 'Restrict the admin folder access...',
    'ADMIN_CHECK_IT_BTN'             => 'Visit SiteSplat.com for more',

    'USER_MINI_PROFILE'          => 'Mini profil du joueur',
    'USER_MINI_PROFILE_VIEW_FULL'    => 'Voir le profil complet',
    'OFF_LINE'                   => 'Hors line',
    'USER_STATUS'                    => 'Statut',
    'USER'                       => 'Joueur',
    'TITLE'                      => 'Titre',
    'END_TIMELINE'               => 'Fin de timeline',
    'MEMBERS'                        => 'Membres',
    'DRAFTS'                         => 'Brouillons',
    'REPORTS'                        => 'Rapports',
    'MODERATOR_LOGS'                 => 'Moderator logs',
    'QUEUE'                      => 'File d\'attente',
    'LINKS'                      => 'Liens',
    'TOPIC_PERMISSIONS'          => 'Permissions du topic',
    'MODERATOR_OPTIONS'          => 'Modérer',
    'PASSWORD_EXPLAIN_CONFIRM'   => 'Confirmation du mot de passe',
    'FORUM_REDIRECTS'                => 'Redirects:',

    'FANCY_TOPICS_TITLE'             => 'Derniers messages du forum',
    'POST_BY'                        => 'Topic de',
    'REPLY_BY'                   => 'Réponse de',
    'NO_REPLIES'                     => 'Pas de réponse',
    'READ_MORE'                  => 'Lire plus',
    'RT_READ_MORE'               => 'LIRE PLUS',
    'VIEW_MORE_TOPICS'           => 'ANCIENS MESSAGES',
    'BACK_TO_START'              => 'RETOUR',

    'TOGGLE_NAV'                     => 'Toggle Navigation',

    'DEMO_LINK'                  => 'Demo link no icons',
    'DEMO_HEADER_MENU'           => 'Header intro example',

    'FLATBOOTS_INTRO'                => 'Bootstrap Framework',
    'FLATBOOTS_EXPLAIN'          => 'Over a dozen reusable components built to provide iconography, dropdowns, input groups, navigation, alerts, and much more...',
    'CALL_TO_ACTION_FOOTER'        => 'Swap-in out addons, use only what you really need!',
    'PURCHASE_NOW_BTN'             => 'Purchase now',
    'FLATBOOTS_ABOUT_PART_ONE'     => 'Bienvenue sur le forum de jeu de rôle narratif inspiré de la saga Star Wars. SWOR est un forum dont vous êtes le héros et construisez l\'histoire.',
    'FLATBOOTS_ABOUT_TITLE'      => 'Star Wars Online Roleplay',
    'DMCA'                       => 'DMCA',
    'TERMS'                      => 'Conditions générales',
    'ADVERTISE'                  => 'Advertise',
    'SITESPLAT'                  => 'SiteSplat',
    'JOIN_US_TWITTER'                => 'Suivez nous sur Twitter',
    'TWEET_EXAMPLE'              => 'Ceci est un exemple de tweet !',

));
