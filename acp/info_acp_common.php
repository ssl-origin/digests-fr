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
// « Page %s de %s », vous pouvez (et devez) écrire « Page %1$s de %2$s », cela permet
// aux traducteurs de réorganiser la sortie des données tout en s'assurant qu'elles restent correctes
//
// Vous n'en avez pas besoin lorsque des caractères de remplacement uniques sont utilisés, par exemple, « Message %d » est suffisant.
// De même, lorsqu'une chaîne de caractères ne contient que deux caractères de remplacement qui sont utilisés pour encadrer un texte
// dans une url, il n'est pas nécessaire de spécifier un ordre, par exemple « Cliquez sur %ICI%s » est suffisant
//
// Quelques caractères que vous pouvez copier/coller :
// ’ « » “ ” …
//

$lang = array_merge($lang, array(

	'PLURAL_RULE'											=> 2,

	'ACP_CAT_DIGESTS'										=> 'Digests',
	'ACP_DIGESTS_BALANCE_LOAD'								=> 'Gérer l’équilibrage de charge',
	'ACP_DIGESTS_BALANCE_LOAD_EXPLAIN'						=> 'Si trop de résumés envoyés à certaines heures causent des problèmes de performance, cette page rééquilibrera les abonnements aux résumés afin qu’à peu près le même nombre de résumés soit envoyé à chaque heure souhaitée. Le tableau ci-dessous montre le nombre actuel ainsi que le nom des abonnés aux résumés pour chaque heure, avec un marquage en gras des <strong>heures en surcharge</strong>. Cette fonction met à jour un minimum d’heures d’envoi des résumés. Les modifications ne concernent que les heures où le nombre d’abonnés dépasse la charge moyenne, et seulement pour ceux qui dépassent la moyenne horaire pour cette heure. <em>Attention</em> : certains abonnés pourraient être contrariés par le fait que leurs heures d’abonnement ont été modifiées et pourraient recevoir une notification par courriel, selon les paramètres généraux des résumés. Si vous le souhaitez, vous pouvez limiter l’équilibrage à un type de résumé, équilibrer pour des heures spécifiques et appliquer l’équilibrage aux heures définies.',
	'ACP_DIGESTS_BALANCE_OPTIONS'							=> 'Options d’équilibrage',
	'ACP_DIGESTS_CLEAR_CACHED_DIGESTS'						=> 'Effacer les rapports et le cache des résumés',
	'ACP_DIGESTS_CLEAR_CACHED_DIGESTS_EXPLAIN'				=> 'Depuis cette page, vous pouvez purger tous les résumés mis en cache dans le répertoire /store/phpbbservices/digests. Ces fichiers peuvent être envoyés par le générateur de courriels manuel, mais représentent une vulnérabilité potentielle de sécurité. S’ils sont exposés, il est recommandé de les supprimer.<br><br>%1$d fichiers au total sont dans le cache.<br>Noms des fichiers : %2$s.<br><br>Vous pouvez également effacer les rapports d’envoi de résumés générés par Digests.',
	'ACP_DIGESTS_GENERAL_SETTINGS'							=> 'Paramètres généraux',
	'ACP_DIGESTS_GENERAL_SETTINGS_EXPLAIN'					=> 'Cette page présente les paramètres généraux de l’extension Digests, qui permet de générer un résumé des messages publiés sur votre forum. Veuillez noter que si le moment de l’envoi des résumés doit être garanti, vous devez configurer et activer les tâches récurrentes, en utilisant le <a href="https://www.phpbb.com/customise/db/extension/digests_extension/faq/2716">Cron système</a> de phpBB. Sinon, les résumés de l’heure courante et des heures passées seront envoyés dès qu’il y aura de l’activité sur le forum. Pour plus d’informations, veuillez lire la <a href="https://www.phpbb.com/customise/db/extension/digests_extension/faq">FAQ de l’extension Digests.</a>',
	'ACP_DIGESTS_EDIT_SUBSCRIBERS'							=> 'Gérer les abonnés',
	'ACP_DIGESTS_EDIT_SUBSCRIBERS_EXPLAIN'					=> 'Cette page vous permet de voir qui reçoit ou non les résumés et de modifier individuellement leurs paramètres d’envoi.<br><br>Vous pouvez rapidement abonner des utilisateurs avec vos paramètres par défaut, ou désabonner des utilisateurs, en cochant les lignes souhaitées, puis en sélectionnant « Abonner uniquement les lignes cochées avec les valeurs par défaut » ou « Désabonner uniquement les lignes cochées » depuis le menu local « Avec la sélection » dans le coin inférieur droit de la page.',
	'ACP_DIGESTS_MASS_SUBSCRIBE_UNSUBSCRIBE'				=> 'Gestion globale des abonnements',
	'ACP_DIGESTS_MASS_SUBSCRIBE_UNSUBSCRIBE_EXPLAIN'		=> 'Cette fonction vous permet d’abonner ou de désabonner facilement et en une seule fois tous les membres du forum. Les paramètres par défaut de Digests sont utilisés pour abonner les membres. Si un membre est déjà abonné au résumé, l’abonnement global ne modifiera pas ses paramètres. Il n’est pas possible d’abonner un utilisateur à des forums spécifiques. Les utilisateurs sont systématiquement abonnés à tous les forums qu’ils peuvent lire. <strong>Attention</strong> : en utilisant cette option, les abonnés risquent de ne pas apprécier d’être abonnés ou désabonnés sans leur consentement.',
	'ACP_DIGESTS_REPORTS'									=> 'Rapport d’envoi des résumés',
	'ACP_DIGESTS_REPORTS_EXPLAIN'							=> 'Cette page permet de consulter les informations relatives aux résumés envoyés à diverses dates et heures, ainsi que des informations sur les performances du serveur. Cliquez sur l’en-tête d’une colonne pour la trier. Cliquez sur le nombre de résumés envoyés ou ignorés d’une ligne pour obtenir des détails sur l’instant où les résumés ont été envoyés ou ignorés pour les abonnés concernés par le créneau horaire.',
	'ACP_DIGESTS_RESET_CRON_RUN_TIME'						=> 'Réinitialiser le générateur de courriels',
	'ACP_DIGESTS_RESET_CRON_RUN_TIME_EXPLAIN'				=> '',
	'ACP_DIGESTS_SETTINGS'									=> 'Paramètres du résumé',
	'ACP_DIGESTS_TEST'										=> 'Déclencher le générateur de courriels',
	'ACP_DIGESTS_TEST_EXPLAIN'								=> 'Cette fonction permet de déclencher manuellement l’envoi d’un résumé aux fins de test ou de dépannage. Vous pouvez également l’utiliser afin de renvoyer des résumés pour des heures où ils auraient pu ne pas être expédiés. Seule une heure de résumé est traitée et aucune donnée utilisateur n’est modifiée.<br><br> <strong>Abonnés pouvant recevoir les résumés pour l’heure courante :</strong> %s',
	'ACP_DIGESTS_USER_DEFAULT_SETTINGS'						=> 'Paramètres par défaut de l’utilisateur',
	'ACP_DIGESTS_USER_DEFAULT_SETTINGS_EXPLAIN'				=> 'Ces paramètres permettent aux administrateurs de définir les valeurs par défaut que les utilisateurs voient lorsqu’ils s’abonnent à un résumé.',
	
	'LOG_CONFIG_DIGESTS_BAD_DIGEST_TYPE'					=> '<strong>Attention : l’abonné %1$s a un mauvais type de résumé %2$s. Un résumé quotidien est recommandé.</strong>',
	'LOG_CONFIG_DIGESTS_BAD_SEND_HOUR'						=> '<strong>L’heure d’envoi du résumé de l’utilisateur %1$s est invalide. La valeur indiquée est %2$d. Le nombre doit être >= 0 et < 24.</strong>',
	'LOG_CONFIG_DIGESTS_BALANCE_LOAD'						=> '<strong>Un équilibrage de charge d’envoi des résumés aux abonnés a été exécuté</strong>',
	'LOG_CONFIG_DIGESTS_BOARD_DISABLED'						=> '<strong>L’exécution du générateur de courriels de résumés a été interrompue car le forum est désactivé.</strong>',
	'LOG_CONFIG_DIGESTS_CACHE_CLEARED'						=> '<strong>Le répertoire store/phpbbservices/digests a été purgé</strong>',
	'LOG_CONFIG_DIGESTS_CLEAR_REPORT'						=> '<strong>Les rapports d’envoi de résumés ont été effacés</strong>',
	'LOG_CONFIG_DIGESTS_CLEAR_SPOOL_ERROR'					=> '<strong>Impossible de supprimer les fichiers dans le répertoire store/phpbbservices/digests. Cela peut être dû à un problème de permissions ou à un chemin d’accès incorrect. Le répertoire doit être accessible en écriture (777 sur les systèmes à base Unix).</strong>',
	'LOG_CONFIG_DIGESTS_CREATE_DIRECTORY_ERROR'				=> '<strong>Impossible de créer le répertoire %s. Cela peut être dû à des permissions insuffisantes. Le répertoire doit être accessible en écriture (777 sur les systèmes Unix).</strong>',
	'LOG_CONFIG_DIGESTS_CRITICAL_ERROR'						=> '<strong>Le générateur de courriels des résumés a rencontré une erreur inattendue.<br>Erreur numéro : [%1$s]<br>Erreur : %2$s<br>Programme : %3$s Ligne : %4$s</strong>',
	'LOG_CONFIG_DIGESTS_DEBUG_POSTS_CURRENT_HOUR'			=> '<strong>Débogage : requête SQL permettant de lister les messages à référencer dans les résumés : Date UTC : %s Heure UTC : %s SQL = %s</strong>',
	'LOG_CONFIG_DIGESTS_DEBUG_SHOULD_RUN'					=> '<strong>Débogage : exécution de la tâche cron ? %s, Digests peut fonctionner après cette heure : %s</strong>',
	'LOG_CONFIG_DIGESTS_DEBUG_SQL_CURRENT_HOUR'				=> '<strong>Débogage : requête SQL permettant de lister les abonnés : Date UTC : %s Heure UTC : %s SQL = %s</strong>',
	'LOG_CONFIG_DIGESTS_EDIT_SUBSCRIBERS'					=> '<strong>Modification des abonnés au résumé</strong>',
	'LOG_CONFIG_DIGESTS_EMAILING_FAILURE'					=> '<strong>L’envoi de résumés par courriel le le %1$s à %2$d h UTC a échoué. Temps d’exécution : %3$s sur %4$d secondes autorisées. %5$s Mo de mémoire ont été utilisés. Au total, %6$u résumés ont été envoyés par courriel, %7$u résumés ont été ignorés et %8$u tranches horaires ont été traitées avant que générateur de courriels ne soit interrompu.</strong>',
	'LOG_CONFIG_DIGESTS_EMAILING_SUCCESS'					=> '<strong>Envoi des résumés par courriel effectué le %1$s à %2$d h UTC. Temps d’exécution : %3$s sur %4$d secondes autorisées. %5$s Mo de mémoire ont été utilisés. Au total, %6$u résumés ont été envoyés par courriel, %7$u résumés ont été ignorés et %8$u tranches horaires ont été traitées.</strong>',
	'LOG_CONFIG_DIGESTS_EXCEPTION_ERROR'					=> '<strong>L’exception PHP d’essai/capture suivante est survenue : %s</strong>',
	'LOG_CONFIG_DIGESTS_FILE_CLOSE_ERROR'					=> '<strong>Impossible de fermer le fichier %s</strong>',
	'LOG_CONFIG_DIGESTS_FILE_OPEN_ERROR'					=> '<strong>Impossible d’ouvrir un fichier stocké dans le répertoire %s. Cela peut être dû à des permissions insuffisantes. Le répertoire doit être accessible en écriture (777 sur les systèmes Unix).</strong>',
	'LOG_CONFIG_DIGESTS_FILE_WRITE_ERROR'					=> '<strong>Impossible d’écrire dans le fichier %s. Cela peut être dû à des permissions insuffisantes. Le répertoire doit être accessible en écriture (777 sur les systèmes Unix).</strong>',
	'LOG_CONFIG_DIGESTS_FILTER_ERROR'						=> '<strong>Le générateur de courriels pour l’envoi des résumés a été appelé avec un user_digest_filter_type = %1$s invalide pour %2$s</strong>',
	'LOG_CONFIG_DIGESTS_FORMAT_ERROR'						=> '<strong>Le générateur de courriels pour l’envoi des résumés a été appelé avec un user_digest_format de %1$s pour %2$s</strong>',
	'LOG_CONFIG_DIGESTS_GENERAL'							=> '<strong>Paramètres généraux des résumés modifiés.</strong>',
	'LOG_CONFIG_DIGESTS_HOUR_RUN'							=> '<strong>Envoi des résumés le %1$s à %2$02d h UTC</strong>',
	'LOG_CONFIG_DIGESTS_INCONSISTENT_DATES'					=> '<strong>Une erreur inhabituelle est survenue. Aucune heure n’a été traitée car la dernière heure à laquelle les résumés ont été correctement envoyés (à %1$d) est postérieure à la préparation des résumés (à %2$d).</strong>',
	'LOG_CONFIG_DIGESTS_LOG_END'							=> '<strong>Arrêt du générateur de courriels des résumés. Au total, %1$u résumés ont été envoyés par courriel et %2$u résumés ont été ignorés.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_BAD'						=> '<strong>Impossible d’envoyer un résumé à %1$s ((%2$s). Ce problème doit être analysé et corrigé, car il indique probablement un dysfonctionnement général d’envoi de courriel.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_BAD_NO_EMAIL'				=> '<strong>Impossible d’envoyer un résumé à %s. Ce problème doit être analysé et corrigé car il indique probablement un dysfonctionnement général d’envoi de courriel.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_GOOD'						=> array(
																1 => '<strong>Un résumé %1$s a été %2$s %3$s (%4$s) le %5$s à %6$02d h UTC contenant %7$d message et %8$d message privé.</strong>',
																2 => '<strong>Un résumé %1$s a été %2$s %3$s (%4$s) le %5$s à %6$02d h UTC contenant %7$d messages et %8$d messages privés.</strong>',
	),
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_GOOD_DISK'				=> '<strong>Un résumé a été écrit dans le répertoire store/phpbbservices/digests/%s. Ce résumé n’a PAS été envoyé par courriel, mais a été placé ici aux fins d’analyse.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_GOOD_NO_EMAIL'			=> array(
																1 => '<strong>Un résumé %1$s a été %2$s %3$s (%4$s) le %5$s à %6$02d h UTC contenant %7$d message et %8$d message privé.</strong>',
																2 => '<strong>Un résumé %1$s a été %2$s %3$s le %4$s à %5$02d h UTC contenant %6$d messages et %7$d messages privés.</strong>',
															),
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_NONE'						=> '<strong>Le résumé n’a PAS été envoyé à %1$s (%2$s) car le paramétrage de ses filtres et ses préférences font qu’il n’y avait rien à envoyer.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_NONE_NO_EMAIL'			=> '<strong>Le résumé n’a PAS été envoyé à %s car le paramétrage de ses filtres et ses préférences font qu’il n’y avait rien à envoyer.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_START'							=> '<strong>Lancement du générateur de courriels de résumés.</strong>',
	'LOG_CONFIG_DIGESTS_MAILER_RAN_WITH_ERROR'				=> '<strong>Une erreur est survenue alors que le générateur de courriel était démarré. Un ou plusieurs résumés ont éventuellement pu être générés correctement.</strong>',
	'LOG_CONFIG_DIGESTS_MANUAL_RUN'							=> '<strong>Demande de lancement manuel du générateur de courriels</strong>',
	'LOG_CONFIG_DIGESTS_MESSAGE'							=> '<strong>%s</strong>',	// Utilisé pour le débogage général, sinon il est difficile de corriger des problèmes en mode cron.
	'LOG_CONFIG_DIGESTS_MASS_SUBSCRIBE_UNSUBSCRIBE'			=> '<strong>Exécution d’une action globale d’abonnement ou de désabonnement aux résumés</strong>',
	'LOG_CONFIG_DIGESTS_NO_ALLOWED_FORUMS'					=> '<strong>Attention : l’abonné %s n’a aucune permission sur le forum. Par conséquent, à moins qu’il n’y ait des forums requis, les résumés seront toujours vides.</strong>',
	'LOG_CONFIG_DIGESTS_NO_BOOKMARKS'						=> '<strong>Attention : l’abonné %s souhaite des sujets cochés dans son résumé, mais il n’a aucun sujet coché.</strong>',
	'LOG_CONFIG_DIGESTS_NO_RESOURCES'						=> '<strong>Arrêt anormal du générateur d’envoi des résumés. Les ressources système sont insuffisantes pour continuer à traiter les résumés. Une erreur a été générée lors de la création d’un résumé pour « %1$s » à %2$d UTC. Vous devriez peut-être mettre à niveau votre hébergement pour envoyer tous les résumés de manière fiable.</strong>',
	'LOG_CONFIG_DIGESTS_NOTIFICATION_ERROR'					=> '<strong>Impossible d’envoyer un courriel à %s pour l’informer de la modification de ses paramètres de résumés.</strong>',
	'LOG_CONFIG_DIGESTS_NOTIFICATION_SENT'					=> '<strong>Un courriel a été envoyé à %1$s (%2$s) indiquant que les paramètres de ses résumés ont été modifiés.</strong>',
	'LOG_CONFIG_DIGESTS_REGULAR_CRON_RUN'					=> '<strong>Le cron système de phpBB a été invoqué pour exécuter le générateur de courriels</strong>',
	'LOG_CONFIG_DIGESTS_RESET_CRON_RUN_TIME'				=> '<strong>L’heure d’exécution de la tâche planifiée pour l’envoi des résumés a été réinitialisée</strong>',
	'LOG_CONFIG_DIGESTS_RUN_TOO_SOON'						=> '<strong>Moins d’une heure s’est écoulée depuis le dernier envoi des résumés. Le démarrage de la tâche a été annulé.</strong>',
	'LOG_CONFIG_DIGESTS_SIMULATION_DATE_TIME'				=> '<strong>L’administrateur a choisi de créer des résumés le %s, heure du forum.</strong>',
	'LOG_CONFIG_DIGESTS_SORT_BY_ERROR'						=> '<strong>Le générateur de courriels a été appelé avec un user_digest_sortby = %1$s invalide pour %2$s</strong>',
	'LOG_CONFIG_DIGESTS_SYSTEM_CRON_RUN'					=> '<strong>Demande de lancement du générateur de courriels par le service cron</strong>',
	'LOG_CONFIG_DIGESTS_TIMEZONE_ERROR'						=> '<strong>Le user_timezone « %1$s » pour le nom d’utilisateur « %2$s » est invalide. Un fuseau horaire « %3$s » a été supposé. Veuillez demander à l’utilisateur de définir un fuseau horaire correct dans le panneau de contrôle de l’utilisateur. Voir http://php.net/manual/en/timezones.php pour une liste des fuseaux horaires valides.</strong>',
	'LOG_CONFIG_DIGESTS_USER_DEFAULTS'						=> '<strong>Modification des paramètres utilisateurs par défaut pour les résumés</strong>',
));
