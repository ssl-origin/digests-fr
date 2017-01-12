<?php
/**
*
* @package phpBB Extension - Digests
* @copyright (c) 2016 Mark D. Hamill (mark@phpbbservices.com)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @french localisation by Philippe Bonnaure - Mac V.F - www.macvf.fr
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

global $phpbb_container;

$config = $phpbb_container->get('config');
$helper = $phpbb_container->get('phpbbservices.digests.common');

$server_settings_url = append_sid('index.php?i=acp_board&amp;mode=server');

$lang = array_merge($lang, array(
	'ACP_CAT_DIGESTS'										=> 'Digests',
	'ACP_DIGESTS_SETTINGS'									=> 'Réglages Digest',
	'ACP_DIGESTS_GENERAL_SETTINGS'							=> 'Réglages généraux',
	'ACP_DIGESTS_GENERAL_SETTINGS_EXPLAIN'					=> 'Voici les réglages généraux des résumés. Veuillez noter que si les résumés doivent être délivrés rigoureusement en temps et en heure, vous devez alors paramétrer et <a href="'. $server_settings_url . '">activer</a> le <strong><a href="https://wiki.phpbb.com/Modular_cron#Use_system_cron">service cron</a></strong> de phpBB. Sinon dès qu\'il y aura du trafique sur le forum, les résumés de l\'heure courante et des heures passées seront envoyés. Pour plus d\'informations, veuillez lire la FAQ pour l\'extension Digests extension sur les forums de phpbb.com.',
	'ACP_DIGESTS_USER_DEFAULT_SETTINGS'						=> 'Réglages par défaut de l\'utilisateur',
	'ACP_DIGESTS_USER_DEFAULT_SETTINGS_EXPLAIN'				=> 'Ces réglages permettent aux administrateurs de définir les valeurs par défaut que les utilisateurs vont voir lorsqu\'ils vont s\'abonner à un résumé.',
	'ACP_DIGESTS_EDIT_SUBSCRIBERS'							=> 'Éditer les abonnés',
	'ACP_DIGESTS_EDIT_SUBSCRIBERS_EXPLAIN'					=> 'Cette page vous permet de voir qui reçoit ou non les les résumés. Vous pouvez ajouter de manière sélective des abonnements au résumé, désabonner des membres de manière sélective, et éditer tous les détails d\'un résumé lié à un abonnement individuel. En marquant les lignes en cochant les cases dans la première colonne, vous pouvez abonner les membres correspondants avec les valeurs par défaut ou les désabonner. Pour cela utiliser les commandes situées en bas de la page puis pressez Envoyert. Veuillez également noter que vous pouvez utiliser ces commandes pour classer et filtrer la liste en conjonction avec le bouton Actualiser.',
	'ACP_DIGESTS_BALANCE_LOAD'								=> 'Équilibrage de la charge',
	'ACP_DIGESTS_BALANCE_LOAD_EXPLAIN'						=> 'Si le nombre de résumés envoyés est top important à certaines heures de la journée, des problèmes de performance risquent de survenir, cette page permet d\'équilibrer les abonnements au résumé de manière à ce qu\'environ le même nombre de résumés soit envoyé toutes les heures. La table ci-dessous affiche le nombre d\'abonnements actuels pour chaque heure, avec l\'heure basée sur l\'heure du résumé dans les réglages généraux du résumé. Cette fonction met à jour a minima les heures d\'envoi des résumés. Les modifications ne surviennent que sur les heures pour lesquelles le nombre d\'abonnés excède la charge moyenne et seulement pour les abonnés qui excède la moyenne horaire pour l\'heure considérée. <em>Attention</em>: les abonnés risquent de ne pas apprécier que leur heure d\'abonenment soit modifiée.',
	'ACP_DIGESTS_MASS_SUBSCRIBE_UNSUBSCRIBE'				=> 'Abonnement/Désabonenement en masse',
	'ACP_DIGESTS_MASS_SUBSCRIBE_UNSUBSCRIBE_EXPLAIN'		=> 'Cette fonction permet aux administrateurs d\'abonner ou de désabonner de manière simple et en une seule fois tous les membres de votre forum. Les réglages par défaut du résumé sont utilisés lors de l\'abonnement de membres. Si un membre a déjà un abonnement au résumé, un abonnement en masse conservera leurs réglages. Vous ne pouvez pas spécifier les abonnements aux forums. Les utilisateurs seront abonnés à tous les forums auxquels ils ont un accès en lecture. <strong>Attention</strong>: les abonnés risquent de ne pas apprécier d\'être abonnés ou désabonnés sans leur consentement.',
	'ACP_DIGESTS_RESET_CRON_RUN_TIME'						=> 'Réinitialiser le générateur de courriels',
	'ACP_DIGESTS_RESET_CRON_RUN_TIME_EXPLAIN'				=> '',
	'ACP_DIGESTS_TEST'										=> 'Lancer manuellement le générateur de courriels',
	'ACP_DIGESTS_TEST_EXPLAIN'								=> 'Cette fonction permet de lancer manuellement des résumés à des fins de tests initiaux ou en cas de problèmes. Vous pouvez également l\'utiliser pour regénérer des résumés pour une date et une heure particulière. Le fuseau horaire du forum (actuellement ' . $helper->make_tz_offset($config['board_timezone']) . ' UTC) est utilisée lors du calcul de la date et de l\'heure. Veuillez noter que l\'instant d\'envoi des résumés dépend du trafique sur le forum, les résumés peuvent de ce fait parvenir en retard pour certains utilisateurs. Cela peut être corrigé si vous paramétrez un <a href="https://wiki.phpbb.com/Modular_cron#Use_system_cron">service cron</a> et <a href="'. $server_settings_url . '">activez</a> le <strong>service cron</strong> phpBB. Pour plus d\'informations, veuillez lire la FAQ pour l\'extension Digests extension sur les forums de phpbb.com.',

	'LOG_CONFIG_DIGESTS_BAD_DIGEST_TYPE'					=> '<strong>Attention : l\'abonné %s a un mauvais type de résumé %s. Un résumé journalier est recommandé.</strong>',
	'LOG_CONFIG_DIGESTS_BAD_SEND_HOUR'						=> '<strong>L\'heure d\'envoi du résumé de l\'utilisateur %s est invalide. Elle est à %d. Le nombre doit être compris entre >= 0 et < 24.</strong>',
	'LOG_CONFIG_DIGESTS_BALANCE_LOAD'						=> '<strong>L\'équilibrage de la charge d\'envoi des résumés aux abonnés a été lancé avec succès</strong>',
	'LOG_CONFIG_DIGESTS_BOARD_DISABLED'						=> '<strong>Un lancement du générateur de courriels a été tenté, mais il a été arrêté car le forum est désactivé.</strong>',
	'LOG_CONFIG_DIGESTS_CACHE_CLEARED'						=> '<strong>Le répertoire cache/phpbbservices/digests a été vidé',
	'LOG_CONFIG_DIGESTS_CLEAR_SPOOL_ERROR'					=> '<strong>Impossible d\'effacer les fichiers dans le répertoire cache/phpbbservices/digests. Cela peut être dû à un problème de permissions ou à un chemin d\'accès incorrect. Les permissions de fichier du répertoire doivent être réglées sur écriture publique (777 sur les systèmes Unix).</strong>',
	'LOG_CONFIG_DIGESTS_DIRECTORY_CREATE_ERROR'				=> '<strong>Impossible de créer un répertoire cache/phpbbservices/digests. Cela est peut-être dû à des problèmes de permissions avec le dossier contenant votre forum.</strong>',
	'LOG_CONFIG_DIGESTS_EDIT_SUBSCRIBERS'					=> '<strong>Édition des abonnés au résumé</strong>',
	'LOG_CONFIG_DIGESTS_FILE_CLOSE_ERROR'					=> '<strong>Impossible de fermer le fichier %s</strong>',
	'LOG_CONFIG_DIGESTS_FILE_OPEN_ERROR'					=> '<strong>Impossible d\'ouvrir gestionnaire de fichier vers le répertoire %s. Cela est peut-être dû à permissions insuffisantes. Les permissions de fichier du répertoire doivent être réglées sur écriture publique (777 sur les systèmes Unix).</strong>',
	'LOG_CONFIG_DIGESTS_FILE_WRITE_ERROR'					=> '<strong>Impossible d\'écrire dans le fichier %s. Cela est peut-être dû à permissions insuffisantes. Les permissions de fichier du répertoire doivent être réglées sur écriture publique (777 sur les systèmes Unix).</strong>',
	'LOG_CONFIG_DIGESTS_FILTER_ERROR'						=> '<strong>Le générateur de courriels pour l\'envoi des résumés a été appelé avec un user_digest_filter_type = %s invalide pour %s</strong>',
	'LOG_CONFIG_DIGESTS_FORMAT_ERROR'						=> '<strong>Le générateur de courriels pour l\'envoi des résumés a été appelé avec un user_digest_format de %s pour %s</strong>',
	'LOG_CONFIG_DIGESTS_GENERAL'							=> '<strong>Réglages généraux des résumés altérés</strong>',
	'LOG_CONFIG_DIGESTS_HOUR_RUN'							=> '<strong>Lancement des résumés à %s UTC</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_BAD'						=> '<strong>Impossible d\'envoyer un résumé à %s (%s). Ce problème doit être investigué et corrigé dans la mesure où cela signale probablement un problème d\'envoi de courriel plus général.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_BAD_NO_EMAIL'				=> '<strong>Impossible d\'envoyer un résumé à %s. Ce problème doit être investigué et corrigé dans la mesure où cela signale probablement un problème d\'envoi de courriel plus général.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_GOOD'						=> '<strong>Un résumé contenant %d posts et %d messages privés a été %s %s (%s) en date du %s et à l\'heure %d UTC.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_GOOD_DISK'				=> '<strong>Un résumé a été écrit dans le répertoire cache/phpbbservices/digests avec le nom de fichier %s. Ce résumé n\'a PAS été envoyé par courriel, mais placé ici à des fins d\'analyse.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_GOOD_NO_EMAIL'			=> '<strong>Un résumé contenant %d posts et %d messages privés a été %s %s (%s) en date du %s et à l\'heure %d UTC.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_NONE'						=> '<strong>Un résumé n\'a PAS été envoyé à %s (%s) car les filtres de l\'utilisateur et les préférences ont considéré qu\'il n\'y avait rien à envoyer.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_NONE_NO_EMAIL'			=> '<strong>Un résumé n\'a PAS été envoyé à %s car les filtres de l\'utilisateur et les préférences ont considéré qu\'il n\'y avait rien à envoyer.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_START'							=> '<strong>Lancement du générateur de courriels.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_END'							=> '<strong>Arrêt du générateur de courriels.</strong>',
	'LOG_CONFIG_DIGESTS_MAILER_RAN_WITH_ERROR'				=> '<strong>Une erreur est survenue alors que le générateur de courriel était lancé. Un ou plusieurs résumés ont peut-être pu être générés avec succès.</strong>',
	'LOG_CONFIG_DIGESTS_MANUAL_RUN'							=> '<strong>Demande de lancement manuel du générateur de courriels</strong>',
	'LOG_CONFIG_DIGESTS_MESSAGE'							=> '<strong>%s</strong>',	// Utilisé pour le débogage général, car il est sinon difficile de corriger des problèmes en mode cron.
	'LOG_CONFIG_DIGESTS_MASS_SUBSCRIBE_UNSUBSCRIBE'			=> '<strong>Éxécution d\'une action d\'abonnement ou de désabonnement en masse aux résumés</strong>',
	'LOG_CONFIG_DIGESTS_NO_ALLOWED_FORUMS'					=> '<strong>Attention : l\'abonné %s n\'a aucune permission sur le forum, dans la mesure où il y a des forums requis, les résumés seront toujours vides.</strong>',
	'LOG_CONFIG_DIGESTS_NO_BOOKMARKS'						=> '<strong>Attention : l\'abonné %s souhaite des sujets cochés dans son résumé, mais il n\'a aucun sujet coché.</strong>',
	'LOG_CONFIG_DIGESTS_NOTIFICATION_ERROR'					=> '<strong>Impossible d\'envoyer une notification par courriel du résumé généré par un administrateur à %s.</strong>',
	'LOG_CONFIG_DIGESTS_NOTIFICATION_SENT'					=> '<strong>Un courriel a été envoyé à %s (%s) en indiquant que les réglages de son résumé ont été modifiés.</strong>',	
	'LOG_CONFIG_DIGESTS_REGULAR_CRON_RUN'					=> '<strong>Demande de lancement du générateur de courriels par un cron (phpBB) régulier</strong>',
	'LOG_CONFIG_DIGESTS_RESET_CRON_RUN_TIME'				=> '<strong>L\'heure d\'envoi des résumés a été réinitialisé</strong>',
	'LOG_CONFIG_DIGESTS_RUN_TOO_SOON'						=> '<strong>Moins d\'une heure s\'est écoulée depuis le dernier lancement des résumés. Lancement annulé.</strong>',
	'LOG_CONFIG_DIGESTS_SIMULATION_DATE_TIME'				=> '<strong>L\'administrateur a choisi de créer des résumés pour %s à %d:00 heure du forum.</strong>',
	'LOG_CONFIG_DIGESTS_SORT_BY_ERROR'						=> "<strong>Le générateur de courriels a été appelé avec un user_digest_sortby = %s invalide pour %s</strong>",
	'LOG_CONFIG_DIGESTS_SYSTEM_CRON_RUN'					=> '<strong>Demande de lancement du générateur de courriels par le service cron</strong>',
	'LOG_CONFIG_DIGESTS_TIMEZONE_ERROR'						=> '<strong>Le user_timezone "%s" pour le nom d\'utilisateur "%s" est invalide. En considérant un fuseau horaire de "%s". Veuillez demander à l\'utilisateur de régler son fuseau horaire dans le panneau de contrôle de l\'utilisateur. Voir http://php.net/manual/en/timezones.php pour une liste des fuseaux horaires valides.</strong>',
	'LOG_CONFIG_DIGESTS_USER_DEFAULTS'						=> '<strong>Réglages par défaut des résumés utilisateurs altérés</strong>',
));
