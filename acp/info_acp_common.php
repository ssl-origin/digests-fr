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
// Quelques caractères que vous pouvez copier/coller :
// ’ « » “ ” …
//

$lang = array_merge($lang, array(

	'PLURAL_RULE'											=> 2,

	'ACP_CAT_DIGESTS'										=> 'Digests',
	'ACP_DIGESTS_BALANCE_LOAD'								=> 'Équilibrer la charge',
	'ACP_DIGESTS_BALANCE_LOAD_EXPLAIN'						=> 'Si trop de résumés envoyés à certaines heures causent des problèmes de performance, cette page rééquilibrera les abonnements aux résumés afin que le même nombre de résumés environ soit envoyé à chaque heure souhaitée. Le tableau ci-dessous montre le nombre actuel ainsi que le nom des abonnés aux résumés pour chaque heure, avec un marquage en gras des <strong>heures sur-allouées</strong>. Cette fonction met à jour les heures d’envoi des résumés de façon minimale. Les modifications ne se produisent que pour les heures où le nombre d’abonnés dépasse la charge moyenne, et seulement pour les abonnés qui dépassent la moyenne horaire pour cette heure. <em>Attention</em> : certains abonnés pourraient être contrariés par le fait que leurs heures d’abonnement ont été modifiées et pourraient recevoir une notification par courriel, selon le paramètre défini dans les paramètres généraux des résumés. Si vous le souhaitez, vous pouvez limiter l’équilibrage à un type de résumé, équilibrer pour des heures spécifiques et appliquer l’équilibrage à des heures spécifiques.',
	'ACP_DIGESTS_BALANCE_OPTIONS'							=> 'Options d’équilibrage',
	'ACP_DIGESTS_CLEAR_CACHED_DIGESTS'						=> 'Effacer les résumés et les rapports mis en cache',
	'ACP_DIGESTS_CLEAR_CACHED_DIGESTS_EXPLAIN'				=> 'Cette page permet de supprimer tous les résumés mis en cache dans le répertoire /store/phpbbservices/digests. Ceux-ci peuvent être générés par le générateur de courriels manuel mais représentent une vulnérabilité de sécurité potentielle. Si des fichiers sont affichés, il est recommandé de les supprimer.<br><br>%1$d fichiers au total sont dans le cache. Noms des fichiers : %2$s.<br><br>Vous pouvez également effacer toutes les rapports statistiques générés ici.',
	'ACP_DIGESTS_GENERAL_SETTINGS'							=> 'Réglages généraux',
	'ACP_DIGESTS_GENERAL_SETTINGS_EXPLAIN'					=> 'Cette rubrique présente les réglages généraux de Digests, un service permettant de générer un résumé des messages publiés sur vos forums. Veuillez noter que si les résumés doivent être délivrés rigoureusement en temps et en heure, vous devez paramétrer et activer le <a href="https://www.phpbb.com/customise/db/extension/digests_extension/faq/2716">Cron système</a> de phpBB. Sinon dès qu’il y aura trop de trafic sur le forum, les résumés de l’heure courante et des heures passées seront envoyés. Pour plus d’informations, veuillez lire les <a href="https://www.phpbb.com/customise/db/extension/digests_extension/faq">FAQs de l’extension Digests.</a>',
	'ACP_DIGESTS_EDIT_SUBSCRIBERS'							=> 'Éditer les abonnés',
	'ACP_DIGESTS_EDIT_SUBSCRIBERS_EXPLAIN'					=> 'Cette page vous permet de voir qui reçoit ou non les résumés et de modifier leurs paramètres individuels d’envoi de résumé.<br><br>Vous pouvez rapidement abonner des utilisateurs à vos résumés par défaut, ou désabonner des utilisateurs, en cochant leurs lignes, puis en sélectionnant "Abonner les lignes cochées uniquement avec les valeurs par défaut" ou "Désabonner les lignes cochées uniquement" depuis le menu local "Avec la sélection" dans le coin inférieur droit de la page.',
	'ACP_DIGESTS_MASS_SUBSCRIBE_UNSUBSCRIBE'				=> 'Abonnements/Désabonnements groupés',
	'ACP_DIGESTS_MASS_SUBSCRIBE_UNSUBSCRIBE_EXPLAIN'		=> 'Cette fonction permet aux administrateurs d’abonner ou de désabonner de manière simple et en une seule fois tous les membres de votre forum. Les réglages par défaut de Digests sont utilisés pour abonner les membres. Si un membre est déjà abonné au résumé, l’abonnement groupé ne modifiera pas ses réglages. Il n’est pas possible d’abonner un utilisateur à des forums particulier. Les utilisateurs sont systématiquement abonnés à tous les forums qu’ils peuvent lire. <strong>Attention</strong>: Attention en utilisant cette option, les abonnés risquent de ne pas apprécier d’être abonnés ou désabonnés sans leur consentement.',
	'ACP_DIGESTS_REPORTS'									=> 'Rapport d’envoi',
	'ACP_DIGESTS_REPORTS_EXPLAIN'							=> 'Cette page permet de voir les sommaires des résumés qui ont été envoyés à diverses dates et heures, ainsi que des informations sur les performances. Cliquez sur l’en-tête d’une colonne pour modifier la façon dont elle est triée. Cliquez sur le nombre de résumés envoyés  ou le nombre de résumés ignorés d’une ligne pour obtenir des détails sur l’instant où les actions d’envoi de résumés ou de résumés ignorés ont eu lieu pour les abonnés à l’heure correspondante.',
	'ACP_DIGESTS_RESET_CRON_RUN_TIME'						=> 'Réinitialiser le générateur de courriels',
	'ACP_DIGESTS_RESET_CRON_RUN_TIME_EXPLAIN'				=> '',
	'ACP_DIGESTS_SETTINGS'									=> 'Réglages du résumé',
	'ACP_DIGESTS_TEST'										=> 'Lancer le générateur de courriels manuellement',
	'ACP_DIGESTS_TEST_EXPLAIN'								=> 'Cette fonction permet de déclencher manuellement l’émission d’un résumé pour effectuer des tests de mise au point et en cas de problèmes. Vous pouvez également l’utiliser pour émettre des résumés à des heures données lorsqu’ils n’ont pas été envoyés. Seule une heure de résumé est générée et aucune donnée utilisateur n’est modifiée.<br><br> <strong>Abonnés pouvant recevoir les résumés pour l’heure courante :</strong> %s',
	'ACP_DIGESTS_USER_DEFAULT_SETTINGS'						=> 'Réglages par défaut de l’utilisateur',
	'ACP_DIGESTS_USER_DEFAULT_SETTINGS_EXPLAIN'				=> 'Ces réglages permettent aux administrateurs de définir les valeurs par défaut que les utilisateurs voient lorsqu’ils s’abonnent à un résumé.',
	
	'LOG_CONFIG_DIGESTS_BAD_DIGEST_TYPE'					=> '<strong>Attention : l’abonné %1$s a un mauvais type de résumé %2$s. Un résumé journalier est recommandé.</strong>',
	'LOG_CONFIG_DIGESTS_BAD_SEND_HOUR'						=> '<strong>L’heure d’envoi du résumé de l’utilisateur %1$s est invalide. Elle est à %2$d. Le nombre doit être compris entre >= 0 et < 24.</strong>',
	'LOG_CONFIG_DIGESTS_BALANCE_LOAD'						=> '<strong>L’équilibrage de la charge d’envoi des résumés aux abonnés a été lancé avec succès</strong>',
	'LOG_CONFIG_DIGESTS_BOARD_DISABLED'						=> '<strong>Tentative de lancement du générateur de courriels de résumés, mais interrompu car le forum est désactivé.</strong>',
	'LOG_CONFIG_DIGESTS_CACHE_CLEARED'						=> '<strong>Le dossier cache/phpbbservices/digests a été vidé</strong>',
	'LOG_CONFIG_DIGESTS_CLEAR_REPORT'						=> '<strong>Rapports statistiques de résumés effacés</strong>',
	'LOG_CONFIG_DIGESTS_CLEAR_SPOOL_ERROR'					=> '<strong>Impossible d’effacer les fichiers dans le dossier cache/phpbbservices/digests. Cela peut être dû à un problème de permissions ou à un chemin d’accès incorrect. Les permissions de fichier du dossier doivent être réglées sur écriture publique (777 sur les systèmes à base Unix).</strong>',
	'LOG_CONFIG_DIGESTS_CREATE_DIRECTORY_ERROR'				=> '<strong>Impossible de créer le dossier %s. Cela est peut-être dû à des permissions insuffisantes. Les permissions du dossier doivent être réglées en écriture publique (777 sur les systèmes Unix).</strong>',
	'LOG_CONFIG_DIGESTS_CRITICAL_ERROR'						=> '<strong>Le générateur de courriels des résumés a eu une erreur inattendue.<br>Erreur numéro : [%1$s]<br>Erreur : %2$s<br>Programme : %3$s Ligne : %4$s</strong>',
	'LOG_CONFIG_DIGESTS_DEBUG_POSTS_CURRENT_HOUR'			=> '<strong>Débogage : Requête abonnés message SQL : Date UTC : %s Heure UTC : %s SQL = %s</strong>',
	'LOG_CONFIG_DIGESTS_DEBUG_SHOULD_RUN'					=> '<strong>Débogage : Doit être lancé à : %s, digest peut fonctionner après cette heure : %s</strong>',
	'LOG_CONFIG_DIGESTS_DEBUG_SQL_CURRENT_HOUR'				=> '<strong>Débogage : Requête abonnés SQL : Date UTC : %s Heure UTC : %s SQL = %s</strong>',
	'LOG_CONFIG_DIGESTS_EDIT_SUBSCRIBERS'					=> '<strong>Édition des abonnés au résumé</strong>',
	'LOG_CONFIG_DIGESTS_EMAILING_FAILURE'					=> '<strong>Impossible d’envoyer le résumé le %1$s à %2$d h UTC. Temps d’exécution : %3$s sur %4$d secondes autorisées. %5$s Mo de mémoire ont été utilisés. Au total %6$u résumés ont été envoyés par courriel, %7$u résumés ont été ignorés et %8$u h ont été traitées avant que générateur de courriels ne soit interrompu.</strong>',
	'LOG_CONFIG_DIGESTS_EMAILING_SUCCESS'					=> '<strong>Envoi des résumés le %1$s à %2$d h UTC. Temps d’exécution : %3$s sur %4$d secondes autorisées. %5$s Mo de mémoire ont été utilisés. Au total %6$u résumés ont été envoyés par courriel, %7$u résumés ont été ignorés et %8$u h ont été traitées.</strong>',
	'LOG_CONFIG_DIGESTS_EXCEPTION_ERROR'					=> '<strong>L’exception PHP d’essai/capture suivante est survenue : %s</strong>',
	'LOG_CONFIG_DIGESTS_FILE_CLOSE_ERROR'					=> '<strong>Impossible de fermer le fichier %s</strong>',
	'LOG_CONFIG_DIGESTS_FILE_OPEN_ERROR'					=> '<strong>Impossible d’ouvrir gestionnaire de fichier vers le dossier %s. Cela est peut-être dû à permissions insuffisantes. Les permissions de fichier du dossier doivent être réglées en écriture publique (777 sur les systèmes Unix).</strong>',
	'LOG_CONFIG_DIGESTS_FILE_WRITE_ERROR'					=> '<strong>Impossible d’écrire dans le fichier %s. Cela est peut-être dû à permissions insuffisantes. Les permissions de fichier du dossier doivent être réglées sur écriture publique (777 sur les systèmes Unix).</strong>',
	'LOG_CONFIG_DIGESTS_FILTER_ERROR'						=> '<strong>Le générateur de courriels pour l’envoi des résumés a été appelé avec un user_digest_filter_type = %1$s invalide pour %2$s</strong>',
	'LOG_CONFIG_DIGESTS_FORMAT_ERROR'						=> '<strong>Le générateur de courriels pour l’envoi des résumés a été appelé avec un user_digest_format de %1$s pour %2$s</strong>',
	'LOG_CONFIG_DIGESTS_GENERAL'							=> '<strong>Réglages généraux des résumés modifiés.</strong>',
	'LOG_CONFIG_DIGESTS_HOUR_RUN'							=> '<strong>Envoi des résumés le %1$s à %2$02d h UTC</strong>',
	'LOG_CONFIG_DIGESTS_INCONSISTENT_DATES'					=> '<strong>Une erreur inhabituelle est survenue. Aucune heure n’a été traitée car la dernière heure à laquelle les résumés ont été envoyés avec succès (daté du %1$d) est située après la date de préparation des résumés (daté du %2$d).</strong>',
	'LOG_CONFIG_DIGESTS_LOG_END'							=> '<strong>Arrêt du générateur de courriels des résumés. Au total %1$u résumés ont été envoyés par courriel et %2$u résumés ont été ignorés.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_BAD'						=> '<strong>Impossible d’envoyer un résumé à %1$s ((%2$s). Ce problème doit être analysé et corrigé dans la mesure où cela signale probablement un problème d’envoi de courriel plus général.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_BAD_NO_EMAIL'				=> '<strong>Impossible d’envoyer un résumé à %s. Ce problème doit être analysé et corrigé dans la mesure où cela signale probablement un problème d’envoi de courriel plus général.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_GOOD'						=> array(
																1 => '<strong>Un résumé %1$s a été %2$s %3$s (%4$s) le %5$s à %6$02d h UTC contenant %7$d message et %8$d message privé.</strong>',
																2 => '<strong>Un résumé %1$s a été %2$s %3$s (%4$s) le %5$s à %6$02d h UTC contenant %7$d messages et %8$d messages privés.</strong>',
	),
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_GOOD_DISK'				=> '<strong>Un résumé a été écrit dans le répertoire store/phpbbservices/digests/%s. Ce résumé n’a PAS été envoyé par courriel, mais a été placé ici à des fins d’analyse.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_GOOD_NO_EMAIL'			=> array(
																1 => '<strong>Un résumé %1$s a été %2$s %3$s (%4$s) le %5$s à %6$02d h UTC contenant %7$d message et %8$d message privé.</strong>',
																2 => '<strong>Un résumé %1$s a été %2$s %3$s le %4$s à %5$02d h UTC contenant %6$d messages et %7$d messages privés.</strong>',
															),
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_NONE'						=> '<strong>Le résumé n’a PAS été envoyé à %1$s (%2$s) car le réglage de ses filtres et de ses préférences font qu’il n’y avait rien à envoyer.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_NONE_NO_EMAIL'			=> '<strong>Le résumé n’a PAS été envoyé à %s car le réglage de ses filtres et de ses préférences font qu’il n’y avait rien à envoyer.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_START'							=> '<strong>Lancement du générateur de courriels de résumés.</strong>',
	'LOG_CONFIG_DIGESTS_MAILER_RAN_WITH_ERROR'				=> '<strong>Une erreur est survenue alors que le générateur de courriel était démarré. Un ou plusieurs résumés ont peut-être pu être générés avec succès.</strong>',
	'LOG_CONFIG_DIGESTS_MANUAL_RUN'							=> '<strong>Demande de lancement manuel du générateur de courriels</strong>',
	'LOG_CONFIG_DIGESTS_MESSAGE'							=> '<strong>%s</strong>',	// Utilisé pour le débogage général, car il est sinon difficile de corriger des problèmes en mode cron.
	'LOG_CONFIG_DIGESTS_MASS_SUBSCRIBE_UNSUBSCRIBE'			=> '<strong>Éxécution d’une action d’abonnement ou de désabonnement groupé au résumé</strong>',
	'LOG_CONFIG_DIGESTS_NO_ALLOWED_FORUMS'					=> '<strong>Attention : l’abonné %s n’a aucune permission sur le forum, dans la mesure où il y a des forums requis, les résumés seront toujours vides.</strong>',
	'LOG_CONFIG_DIGESTS_NO_BOOKMARKS'						=> '<strong>Attention : l’abonné %s souhaite des sujets cochés dans son résumé, mais il n’a aucun sujet coché.</strong>',
	'LOG_CONFIG_DIGESTS_NO_RESOURCES'						=> '<strong>Arrêt anormal du générateur d’envoi des résumés. Les ressources système sont insuffisantes pour continuer à traiter les résumés. Une erreur a été générée lors de la création d’un résumé pour "%1$s" à %2$d UTC. Vous devriez peut-être mettre à niveau votre hébergement pour envoyer les résumés de manière fiable.</strong>',
	'LOG_CONFIG_DIGESTS_NOTIFICATION_ERROR'					=> '<strong>Impossible d’envoyer une notification par courriel du résumé généré par un administrateur à %s.</strong>',
	'LOG_CONFIG_DIGESTS_NOTIFICATION_SENT'					=> '<strong>Un courriel a été envoyé à %1$s (%2$s) indiquant que les réglages de son résumé ont été modifiés.</strong>',
	'LOG_CONFIG_DIGESTS_REGULAR_CRON_RUN'					=> '<strong>Demande de lancement du générateur de courriels par un cron (phpBB) régulier</strong>',
	'LOG_CONFIG_DIGESTS_RESET_CRON_RUN_TIME'				=> '<strong>L’heure d’envoi des résumés a été réinitialisé</strong>',
	'LOG_CONFIG_DIGESTS_RUN_TOO_SOON'						=> '<strong>Moins d’une heure s’est écoulée depuis le dernier envoi des résumés. Lancement annulé.</strong>',
	'LOG_CONFIG_DIGESTS_SIMULATION_DATE_TIME'				=> '<strong>L’administrateur a choisi de créer des résumés le %s, heure du forum.</strong>',
	'LOG_CONFIG_DIGESTS_SORT_BY_ERROR'						=> '<strong>Le générateur de courriels a été appelé avec un user_digest_sortby = %1$s invalide pour %2$s</strong>',
	'LOG_CONFIG_DIGESTS_SYSTEM_CRON_RUN'					=> '<strong>Demande de lancement du générateur de courriels par le service cron</strong>',
	'LOG_CONFIG_DIGESTS_TIMEZONE_ERROR'						=> '<strong>Le user_timezone "%1$s" pour le nom d’utilisateur "%2$s" est invalide. En considérant un fuseau horaire de "%3$s". Veuillez demander à l’utilisateur de régler son fuseau horaire dans le panneau de contrôle de l’utilisateur. Voir http://php.net/manual/en/timezones.php pour une liste des fuseaux horaires valides.</strong>',
	'LOG_CONFIG_DIGESTS_USER_DEFAULTS'						=> '<strong>Réglages par défaut des résumés utilisateurs modifiés</strong>',
));
