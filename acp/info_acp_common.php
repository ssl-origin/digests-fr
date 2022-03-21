<?php
/**
*
* @package phpBB Extension - Digests
* @copyright (c) 2021 Mark D. Hamill (mark@phpbbservices.com)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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

// NOTE À L'ATTENTION DES DÉVELOPPEURS
//
// Tous les fichiers de langue doivent utiliser l'encodage UTF-8 et les fichiers ne doivent pas contenir de BOM.
//
// Les caractères de remplacement peuvent désormais contenir des informations sur les commandes, par exemple au lieu de
// 'Page %s de %s ", vous pouvez (et devez) écrire " Page %1$s de %2$s ", cela permet
// aux traducteurs de réorganiser la sortie des données tout en s'assurant qu'elles restent correctes
//
// Vous n'en avez pas besoin lorsque des caractères de remplacement uniques sont utilisés, par exemple, "Message %d" est suffisant.
// De même, lorsqu'une chaîne de caractères ne contient que deux caractères de remplacement qui sont utilisés pour encadrer un texte
// dans une url, il n'est pas nécessaire de spécifier un ordre, par exemple "Cliquez sur %ICI%s" est suffisant
//
// Quelques caractères que vous pouvez copier/coller :
// ’ » “ ” …
//

$lang = array_merge($lang, array(

	'PLURAL_RULE'											=> 1,

	'ACP_CAT_DIGESTS'										=> 'Digests',
	'ACP_DIGESTS_BALANCE_LOAD'								=> 'Équilibrer la charge',
	'ACP_DIGESTS_BALANCE_LOAD_EXPLAIN'						=> 'Si le nombre de résumés envoyés est trop important à certaines heures de la journée, des problèmes de performance risquent de survenir. Cette page permet d&apos;équilibrer la répartition des abonnés au résumé de manière à ce qu&apos;un même nombre de résumés environ soit envoyé aux heures souhaitées. La table ci-dessous affiche le nombre et le noms des abonnés au résumé pour chacune des heures avec <strong>les heures surchargées affichées en gras</strong>. Cette fonction met à jour a minima les heures d&apos;envoi des résumés. Les modifications ne surviennent qu&apos;aux heures pour lesquelles le nombre d&apos;abonnés excède la charge moyenne et ne s&apos;appliquent qu&apos;aux abonnés de la tranche horaire correspondante. <em>Attention</em>: les abonnés risquent de ne pas apprécier que l&apos;heure de leur abonnenment soit modifiée et pourront recevoir une notification par courriel, en fonction du réglage dans les réglages généraux du résumé. Si vous le souhaitez, vous pouvez limiter l&apos;équilibrage à un type de résumé, équilibrer certaines heures et appliquer l&apos;équilibrage à certaines heures.',
	'ACP_DIGESTS_BALANCE_OPTIONS'							=> 'Options d&apos;équilibrage',
	'ACP_DIGESTS_CLEAR_CACHED_DIGESTS'						=> 'Effacer les résumés mis en cache',
	'ACP_DIGESTS_CLEAR_CACHED_DIGESTS_EXPLAIN'				=> 'Cette page vous permet de supprimer tous les résumés mis en cache dans le répertoire /store/phpbbservices/digests. Ceux-ci peuvent être générés par le courrier manuel, mais représentent une vulnérabilité de sécurité potentielle. Si des fichiers sont affichés, il est recommandé de les supprimer.<br><br>Un total de %1$d fichiers sont mis en cache. Noms de fichiers : %2$s',	
	'ACP_DIGESTS_GENERAL_SETTINGS'							=> 'Réglages généraux',
	'ACP_DIGESTS_GENERAL_SETTINGS_EXPLAIN'					=> 'Cette rubrique présente les réglages généraux de Digests, un service permettant de générer un résumé des posts publiés sur vos forums. Veuillez noter que si les résumés doivent être délivrés rigoureusement en temps et en heure, vous devez paramétrer et activer le <strong><a href="https://www.phpbb.com/customise/db/extension/digests_extension/faq/2716">service cron</a></strong> de phpBB. Sinon dès qu&apos;il y aura trop de trafic sur le forum, les résumés de l&apos;heure courante et des heures passées seront envoyés. Pour plus d&apos;informations, veuillez lire la FAQ de l&apos;extension Digests sur les forums de phpbb.com.',
	'ACP_DIGESTS_EDIT_SUBSCRIBERS'							=> 'Éditer les abonnés',
	'ACP_DIGESTS_EDIT_SUBSCRIBERS_EXPLAIN'					=> 'Cette page vous permet de voir qui reçoit ou ne reçoit pas de résumés et de modifier leurs paramètres de résumé individuels.<br><br>Vous pouvez rapidement inscrire les utilisateurs avec vos valeurs par défaut de résumé, ou désinscrire les utilisateurs, en vérifiant leurs lignes, puis en sélectionnant « S‘inscrire coché lignes utilisant uniquement les valeurs par défaut » ou « Désinscrire les lignes cochées uniquement » dans la liste déroulante « Avec sélectionné » dans le coin inférieur droit de la page.',
	'ACP_DIGESTS_MASS_SUBSCRIBE_UNSUBSCRIBE'				=> 'Abonnement/désabonnement de masse',
	'ACP_DIGESTS_MASS_SUBSCRIBE_UNSUBSCRIBE_EXPLAIN'		=> 'Cette fonctionnalité permet aux administrateurs d‘abonner ou de désabonner facilement tous les membres de votre forum en une seule fois. Les paramètres par défaut des résumés sont utilisés pour inscrire les membres. Si un membre a déjà un abonnement au résumé, un abonnement de masse conservera ses paramètres de résumé. Vous ne pouvez pas spécifier les forums auxquels vous serez abonné. Les utilisateurs seront abonnés à tous les forums qu‘ils peuvent lire. <strong>Attention</strong> : les abonnés peuvent ne pas être d‘accord s‘ils sont abonnés ou désabonnés sans leur consentement.', 
	'ACP_DIGESTS_REPORTS'									=> 'Rapport d‘envoi de courrier',
	'ACP_DIGESTS_REPORTS_EXPLAIN'							=> 'Cette page vous permet de voir les résumés qui ont été envoyés pour diverses dates et heures, ainsi que des informations sur les performances. Cliquez sur l‘en-tête d‘une colonne pour en modifier le tri. Cliquez sur la valeur de l‘envoi ou du saut d‘une ligne pour obtenir des détails sur le moment où les actions d‘envoi ou de saut ont eu lieu pour les abonnés de l‘heure en question.',
	'ACP_DIGESTS_RESET_CRON_RUN_TIME'						=> 'Réinitialiser le générateur de courriels',
	'ACP_DIGESTS_RESET_CRON_RUN_TIME_EXPLAIN'				=> '',
	'ACP_DIGESTS_SETTINGS'									=> 'Paramètres des résumés',
	'ACP_DIGESTS_TEST'										=> 'Lancer le générateur de courriels manuellement',
	'ACP_DIGESTS_TEST_EXPLAIN'								=> 'Cette fonctionnalité vous permet d‘exécuter manuellement des résumés pour les tests initiaux ou le dépannage. Vous pouvez également l‘utiliser pour recréer des résumés pendant des heures lorsqu‘ils n‘ont peut-être pas été envoyés. Une seule heure de résumés est créée et aucune donnée utilisateur n‘est modifiée.<br><br> <strong>Abonnés susceptibles de recevoir des résumés pour l‘heure en cours :</strong> %s',
	'ACP_DIGESTS_USER_DEFAULT_SETTINGS'						=> 'Paramètres par défaut de l‘utilisateur',
	'ACP_DIGESTS_USER_DEFAULT_SETTINGS_EXPLAIN'				=> 'Ces paramètres permettent aux administrateurs de définir les valeurs par défaut que les utilisateurs voient lorsqu‘ils s‘abonnent à un résumé.',
	
	'LOG_CONFIG_DIGESTS_BAD_DIGEST_TYPE'					=> '<strong>Attention : l&apos;abonné %1$s a un mauvais type de résumé %2$s. Un résumé journalier est recommandé.</strong>',
	'LOG_CONFIG_DIGESTS_BAD_SEND_HOUR'						=> '<strong>L&apos;heure d&apos;envoi du résumé de l&apos;utilisateur %1$s est invalide. Elle est à %2$d. Le nombre doit être compris entre >= 0 et < 24.</strong>',
	'LOG_CONFIG_DIGESTS_BALANCE_LOAD'						=> '<strong>L&apos;équilibrage de la charge d&apos;envoi des résumés aux abonnés a été lancé avec succès</strong>',
	'LOG_CONFIG_DIGESTS_BOARD_DISABLED'						=> '<strong>L‘exécution du courrier Digests a été tentée, mais s‘est arrêtée car la carte est désactivée</strong>',
	'LOG_CONFIG_DIGESTS_CACHE_CLEARED'						=> '<strong>Le dossier store/phpbbservices/digests a été vidé</strong>',
	'LOG_CONFIG_DIGESTS_CLEAR_REPORT'						=> '<strong>Statistiques des rapports de résumés effacés</strong>',
	'LOG_CONFIG_DIGESTS_CLEAR_SPOOL_ERROR'					=> '<strong>Impossible d&apos;effacer les fichiers dans le dossier cache/phpbbservices/digests. Cela peut être dû à un problème de permissions ou à un chemin d&apos;accès incorrect. Les permissions de fichier du dossier doivent être réglées sur écriture publique (777 sur les systèmes à base Unix).</strong>',
	'LOG_CONFIG_DIGESTS_CREATE_DIRECTORY_ERROR'				=> '<strong>Impossible de créer le dossier %s. Cela est peut-être dû à des permissions insuffisantes. Les permissions du dossier doivent être réglées en écriture publique (777 sur les systèmes Unix).</strong>',
	'LOG_CONFIG_DIGESTS_CRITICAL_ERROR'						=> '<strong>Le générateur de courriels des résumés a eu une erreur inattendue.<br>Erreur numéro : [%1$s]<br>Erreur : %2$s<br>Programme : %3$s Ligne : %4$s</strong>',
	'LOG_CONFIG_DIGESTS_DEBUG_POSTS_CURRENT_HOUR'			=> '<strong>Débogage : Requête abonnés post SQL : Date UTC : %s Heure UTC : %s SQL = %s</strong>',
	'LOG_CONFIG_DIGESTS_DEBUG_SHOULD_RUN'					=> '<strong>Débogage : Doit être lancé à : %s, digest peut fonctionner après cette heure : %s</strong>',
	'LOG_CONFIG_DIGESTS_DEBUG_SQL_CURRENT_HOUR'				=> '<strong>Débogage : Requête abonnés SQL : Date UTC : %s Heure UTC : %s SQL = %s</strong>',
	'LOG_CONFIG_DIGESTS_EDIT_SUBSCRIBERS'					=> '<strong>Édition des abonnés au résumé</strong>',
	'LOG_CONFIG_DIGESTS_EMAILING_FAILURE'					=> 'Impossible d‘envoyer les résumés par e-mail pour la date %1$s heure %2$d UTC. Temps d‘exécution : %3$s sur %4$d secondes autorisées. %5$s Mo de mémoire ont été utilisés. Au total, %6$u résumés ont été envoyés par e-mail, %7$u résumés ont été ignorés et %8$u heures ont été traitées avant l‘abandon de l‘envoi.</strong>',	
	'LOG_CONFIG_DIGESTS_EMAILING_SUCCESS'					=> '<strong>Résumés envoyés par e-mail pour la date %1$s heure %2$d UTC. Temps d‘exécution : %3$s sur %4$d secondes autorisées. %5$s Mo de mémoire ont été utilisés. Au total, %6$u résumés ont été envoyés par e-mail, %7$u résumés ont été ignorés et %8$u heures ont été traitées. </strong>',
	'LOG_CONFIG_DIGESTS_EXCEPTION_ERROR'					=> '<strong>L&apos;exception PHP d&apos;essai/capture suivante est survenue : %s</strong>',
	'LOG_CONFIG_DIGESTS_FILE_CLOSE_ERROR'					=> '<strong>Impossible de fermer le fichier %s</strong>',
	'LOG_CONFIG_DIGESTS_FILE_OPEN_ERROR'					=> '<strong>Impossible d&apos;ouvrir gestionnaire de fichier vers le dossier %s. Cela est peut-être dû à permissions insuffisantes. Les permissions de fichier du dossier doivent être réglées en écriture publique (777 sur les systèmes Unix).</strong>',
	'LOG_CONFIG_DIGESTS_FILE_WRITE_ERROR'					=> '<strong>Impossible d&apos;écrire dans le fichier %s. Cela est peut-être dû à permissions insuffisantes. Les permissions de fichier du dossier doivent être réglées sur écriture publique (777 sur les systèmes Unix).</strong>',
	'LOG_CONFIG_DIGESTS_FILTER_ERROR'						=> '<strong>Le générateur de courriels pour l&apos;envoi des résumés a été appelé avec un user_digest_filter_type = %1$s invalide pour %2$s</strong>',
	'LOG_CONFIG_DIGESTS_FORMAT_ERROR'						=> '<strong>Le générateur de courriels pour l&apos;envoi des résumés a été appelé avec un user_digest_format de %1$s pour %2$s</strong>',
	'LOG_CONFIG_DIGESTS_GENERAL'							=> '<strong>Réglages généraux des résumés modifiés.</strong>',
	'LOG_CONFIG_DIGESTS_HOUR_RUN'							=> '<strong>Envoi des résumés le %1$s à %2$02d h UTC</strong>',
	'LOG_CONFIG_DIGESTS_INCONSISTENT_DATES'					=> '<strong>Une erreur inhabituelle est survenue. Aucune heure n&apos;a été traitée car la dernière heure à laquelle les résumés ont été envoyés avec succès (daté du %1$d) est située après la date de préparation des résumés (daté du %2$d).</strong>',
	'LOG_CONFIG_DIGESTS_LOG_END'							=> '<strong>Fin de l‘expéditeur des résumés. Au total, %1$u résumés ont été envoyés par e-mail et %2$u résumés ont été ignorés</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_BAD'						=> '<strong>Impossible d&apos;envoyer un résumé à %1$s ((%2$s). Ce problème doit être analysé et corrigé dans la mesure où cela signale probablement un problème d&apos;envoi de courriel plus général.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_BAD_NO_EMAIL'				=> '<strong>Impossible d&apos;envoyer un résumé à %s. Ce problème doit être analysé et corrigé dans la mesure où cela signale probablement un problème d&apos;envoi de courriel plus général.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_GOOD'						=> array(
																1 => '<strong>Un résumé %1$s était %2$s %3$s (%4$s) pour la date %5$s et l‘heure %6$02d UTC contenant %7$d post et %8$d message privé.</strong>',
																2 => '<strong>Un résumé %1$s était %2$s %3$s (%4$s) pour la date %5$s et l‘heure %6$02d UTC contenant %7$d messages et %8$d messages privés.</strong>',
															),
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_GOOD_DISK'				=> '<strong>Un résumé a été écrit dans le répertoire store/phpbbservices/digests/%s. Ce résumé n&apos;a PAS été envoyé par courriel, mais a été placé ici à des fins d&apos;analyse.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_GOOD_NO_EMAIL'			=> array(
																1 => '<strong>Un résumé %1$s était %2$s %3$s (%4$s) pour la date %5$s et l‘heure %6$02d UTC contenant %7$d post et %8$d message privé</strong>',
																2 => '<strong>Un résumé %1$s était %2$s %3$s pour la date %4$s et l‘heure %5$02d UTC contenant %6$d messages et %7$d messages privés.</strong>',
															),
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_NONE'						=> '<strong>Le résumé n&apos;a PAS été envoyé à %1$s (%2$s) car le réglage de ses filtres et de ses préférences font qu&apos;il n&apos;y avait rien à envoyer.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_NONE_NO_EMAIL'			=> '<strong>Le résumé n&apos;a PAS été envoyé à %s car le réglage de ses filtres et de ses préférences font qu&apos;il n&apos;y avait rien à envoyer.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_START'							=> '<strong>Lancement du générateur de courriels de résumés.</strong>',
	'LOG_CONFIG_DIGESTS_MAILER_RAN_WITH_ERROR'				=> '<strong>Une erreur est survenue alors que le générateur de courriel était démarré. Un ou plusieurs résumés ont peut-être pu être générés avec succès.</strong>',
	'LOG_CONFIG_DIGESTS_MANUAL_RUN'							=> '<strong>Demande de lancement manuel du générateur de courriels</strong>',
	'LOG_CONFIG_DIGESTS_MESSAGE'							=> '<strong>%s</strong>',	// Utilisé pour le débogage général, car il est sinon difficile de corriger des problèmes en mode cron.
	'LOG_CONFIG_DIGESTS_MASS_SUBSCRIBE_UNSUBSCRIBE'			=> '<strong>Éxécution d&apos;une action d&apos;abonnement ou de désabonnement groupé au résumé</strong>',
	'LOG_CONFIG_DIGESTS_NO_ALLOWED_FORUMS'					=> '<strong>Attention : l&apos;abonné %s n&apos;a aucune permission sur le forum, dans la mesure où il y a des forums requis, les résumés seront toujours vides.</strong>',
	'LOG_CONFIG_DIGESTS_NO_BOOKMARKS'						=> '<strong>Attention : l&apos;abonné %s souhaite des sujets cochés dans son résumé, mais il n&apos;a aucun sujet coché.</strong>',
	'LOG_CONFIG_DIGESTS_NO_RESOURCES'						=> '<strong>
	Arrêt anormal du générateur d&apos;envoi des résumés. Les ressources système sont insuffisantes pour continuer à traiter les résumés. Une erreur a été générée lors de la création d&apos;un résumé pour "%1$s" à %2$d UTC. Vous devriez peut-être mettre à niveau votre hébergement pour envoyer les résumés de manière fiable.</strong>',
	'LOG_CONFIG_DIGESTS_NOTIFICATION_ERROR'					=> '<strong>Impossible d&apos;envoyer une notification par courriel du résumé généré par un administrateur à %s.</strong>',
	'LOG_CONFIG_DIGESTS_NOTIFICATION_SENT'					=> '<strong>Un courriel a été envoyé à %1$s (%2$s) indiquant que les réglages de son résumé ont été modifiés.</strong>',
	'LOG_CONFIG_DIGESTS_REGULAR_CRON_RUN'					=> '<strong>Demande de lancement du générateur de courriels par un cron (phpBB) régulier</strong>',
	'LOG_CONFIG_DIGESTS_RESET_CRON_RUN_TIME'				=> '<strong>L&apos;heure d&apos;envoi des résumés a été réinitialisé</strong>',
	'LOG_CONFIG_DIGESTS_RUN_TOO_SOON'						=> '<strong>Moins d&apos;une heure s&apos;est écoulée depuis le dernier envoi des résumés. Lancement annulé.</strong>',
	'LOG_CONFIG_DIGESTS_SIMULATION_DATE_TIME'				=> '<strong>L&apos;administrateur a choisi de créer des résumés le %s, heure du forum.</strong>',
	'LOG_CONFIG_DIGESTS_SORT_BY_ERROR'						=> '<strong>Le générateur de courriels a été appelé avec un user_digest_sortby = %1$s invalide pour %2$s</strong>',
	'LOG_CONFIG_DIGESTS_SYSTEM_CRON_RUN'					=> '<strong>Demande de lancement du générateur de courriels par le service cron</strong>',
	'LOG_CONFIG_DIGESTS_TIMEZONE_ERROR'						=> '<strong>Le user_timezone "%1$s" pour le nom d&apos;utilisateur "%2$s" est invalide. En considérant un fuseau horaire de "%3$s". Veuillez demander à l&apos;utilisateur de régler son fuseau horaire dans le panneau de contrôle de l&apos;utilisateur. Voir http://php.net/manual/en/timezones.php pour une liste des fuseaux horaires valides.</strong>',
	'LOG_CONFIG_DIGESTS_USER_DEFAULTS'						=> '<strong>Réglages par défaut des résumés utilisateurs modifiés</strong>',
));
