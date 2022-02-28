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
	'DIGESTS_WEEKDAY' 					=> 'Dimanche,Lundi,Mardi,Mercredi,Jeudi,Vendredi,Samedi',
));

$weekdays = explode(',', $lang['DIGESTS_WEEKDAY']);

$lang = array_merge($lang, array(
	'PLURAL_RULE'											=> 2,
	
	'DIGESTS_ALL'											=> 'Tous',
	'DIGESTS_ALL_ALLOWED_FORUMS'							=> 'Tous les forums autorisés',
	'DIGESTS_ALL_HOURS'										=> 'Toutes les heures',
	'DIGESTS_ALL_TYPES'										=> 'Tous les types de résumé',
	'DIGESTS_ALL_SUBSCRIBED'								=> array(
																1 => 'Un groupe de %d membre au total a été abonné au service d&apos;envoi du résumé',
																2 => 'Un groupe de %d membres au total a été abonné au service d&apos;envoi du résumé',
															),
	'DIGESTS_ALL_UNSUBSCRIBED'								=> array(
																1 => 'Un groupe de %d membre au total a été désabonné du service d&apos;envoi du résumé',
																2 => 'Un groupe de %d membres au total a été désabonné du service d&apos;envoi du résumé',
															),
	'DIGESTS_APPLY_TO'										=> 'Appliquer à',
	'DIGESTS_AVERAGE'										=> 'Moyenne',
	'DIGESTS_BALANCE_APPLY_HOURS'							=> 'Appliquer l&apos;équilibrage aux heures suivantes',
	'DIGESTS_BALANCE_LOAD'									=> 'Équilibrer la charge',
	'DIGESTS_BALANCE_HOURS'									=> 'Équilibrer les heures',
	'DIGESTS_BASED_ON'										=> '(Basée sur UTC%+d)',
	'DIGESTS_CLEAR_CACHE_NOT_RUN'							=> 'Les résumés mis en cache n‘ont pas été supprimés, car cette fonctionnalité n‘a pas été sélectionnée',
	'DIGESTS_CLEAR_REPORT'									=> 'Effacer les statistiques du rapport',
	'DIGESTS_CLEAR_REPORT_EXPLAIN'							=> 'Supprime toutes les statistiques de rapport d‘envoi collectées.',
	'DIGESTS_CLEAR_REPORT_NOT_RUN'							=> 'Les statistiques de rapport n‘ont pas été supprimées car cette fonctionnalité n‘a pas été sélectionnée',
	'DIGESTS_CLEAR_REPORT_RUN'								=> 'Les statistiques du rapport ont été supprimées',
	'DIGESTS_COLLAPSE'										=> 'Réduire les paramètres de résumé de l‘utilisateur',
	'DIGESTS_COMMA'											=> ', ',		// Utilisé dans les salutations et pour séparer les éléments des listes
	'DIGESTS_CREATE_DIRECTORY_ERROR'						=> 'Impossible de créer le dossier %s. Cela peut être dû à des autorisations insuffisantes. Les autorisations sur le dossier doivent être définies en écriture publique (777 sur les systèmes Unix).',
	'DIGESTS_CRON_TYPE'										=> 'Type de CRON',
	'DIGESTS_CRON_TYPE_MANUAL'								=> 'Manuel (PCA)',
	'DIGESTS_CRON_TYPE_PHPBB'								=> 'phpBB',
	'DIGESTS_CRON_TYPE_SYSTEM'								=> 'Système',
	'DIGESTS_CURRENT_VERSION_INFO'							=> 'Vous exécutez la version <strong>%s</strong>.',
	'DIGESTS_CUSTOM_STYLESHEET_PATH'						=> 'Chemin d&apos;accès à la feuille de style personnalisée',
	'DIGESTS_CUSTOM_STYLESHEET_PATH_EXPLAIN'				=> 'Ce paramètre s‘applique uniquement si la case Activer la feuille de style personnalisée est activée. Si elle est activée, cette feuille de style sera appliquée à tous les résumés stylés. Le chemin doit être un chemin relatif à partir de votre dossier de styles phpBB et doit normalement se trouver dans le sous-dossier du thème. <em>Remarque</em> : vous êtes responsable de la création de cette feuille de style et de sa mise en place dans un fichier portant le nom saisi ici à l‘emplacement approprié sur votre serveur. Exemple : prosilver/theme/digest_stylesheet.css. Pour plus d‘informations sur la création de feuilles de style, cliquez <a href="http://www.w3schools.com/css/">ici</a>.',
	'DIGESTS_DATE_HOUR'										=> 'Date et heure (UTC)',
	'DIGESTS_DEBUG'											=> 'Activer le débogage des résumés',
	'DIGESTS_DEBUG_EXPLAIN'									=> 'Utilisé pour le débogage technique. Cette fonction permet dl&apos;écrire certaines informations essentielles au dépannage dans le journal dl&apos;administration, telles que les requêtes à la base de données utilisées pour assembler les résumés. Vous devez normalement avoir des compétences en matière de développement pour interpréter ces informations.',
	'DIGESTS_DEFAULT'										=> 'Abonner les lignes cochées uniquement en utilisant les valeurs par défaut',
	'DIGESTS_DEFAULT_SHORT'									=> 'S&apos;abonner en utilisant les valeurs par défaut',
	'DIGESTS_DAILY_ONLY'									=> 'Résumés journaliers seulement',
	'DIGESTS_ENABLE_AUTO_SUBSCRIPTIONS'						=> 'Activer l&apos;abonnement automatique',
	'DIGESTS_ENABLE_AUTO_SUBSCRIPTIONS_EXPLAIN'				=> 'Sélectionnez Oui, si vous souhaitez que les nouveaux membres qui s&apos;inscrivent sur le forum reçoivent automatiquement le résumé. Les réglages par défaut définis dans la rubrique &ldquo;Options par défaut de l&apos;utilisateur&rdquo; seront automatiquement appliqués. L&apos;activation de cette option n&apos;abonne <em>pas</em> : les personnes qui ne sont pas abonnées, les membres inactifs ou encore les nouveaux membres qui choisissent de ne pas recevoir le résumé lors de leur enregistrement au forum. Vous pouvez abonner des utilisateurs individuellement en utilisant la rubrique &ldquo;Éditer les abonnés&rdquo;, ou abonner plusieurs utilisateurs en même temps depuis la rubrique &ldquo;Abonnement/Désabonnement groupé&rdquo;.',
	'DIGESTS_ENABLE_CUSTOM_STYLESHEET'						=> 'Activer la feuille de style personnalisée',
	'DIGESTS_ENABLE_CUSTOM_STYLESHEET_EXPLAIN'				=> 'Sélectionnez Non pour que  la feuille de style utilisée par défaut soit celle sélectionnée dans le profil de l&apos;utilisateur pour la génération stylée de son résumé.',
	'DIGESTS_ENABLE_LOG'									=> 'Inscrire toutes les actions du résumé dans le journal de l&apos;administrateur',
	'DIGESTS_ENABLE_LOG_EXPLAIN'							=> 'Si cette option est activée, toutes les actions de résumé seront écrites dans le journal d‘administration (qui se trouve dans l‘onglet de maintenance). Ceci est utile pour répondre aux questions de résumé car il indique ce que les résumés&rsquo; mailer l‘a fait, quand et pour quels abonnés. Mais l‘activer entraînera rapidement un journal d‘administration très long car au moins deux entrées seront écrites toutes les heures dans le journal. <em>Remarque</em> : les erreurs, les exceptions et les avertissements sont toujours écrits dans le journal des erreurs de phpBB.',
	'DIGESTS_ENABLE_SUBSCRIBE_UNSUBSCRIBE'					=> 'Activer l&apos;abonnement ou le désabonnement groupé d&apos;utilisateurs',
	'DIGESTS_ENABLE_SUBSCRIBE_UNSUBSCRIBE_EXPLAIN'			=> 'Si vous choisissez Oui, lorsque vous cliquerez sur le bouton Envoyer, une action d&apos;abonnement ou de désabonnement groupé d&apos;utlisateurs va être déclenchée. Activez cette option avec précaution !',
	'DIGESTS_EXCLUDE_FORUMS'								=> 'Toujours exclure les forums suivants',
	'DIGESTS_EXCLUDE_FORUMS_EXPLAIN'						=> 'Saisissez le forum_id des forums qui ne doivent pas figurer dans le résumé. Séparez les forum_id par des virgules. En indiquant 0, aucun forum ne sera exclu. Pour déterminer le forum_id d&apos;un forum, observez la valeur du paramètre &ldquo;f&rdquo; dans le champ de l&apos;URL. C&apos;est le forum_id. Exemple: http://www.example.com/phpBB3/viewforum.php?f=1. Ne pas utiliser de forum_ids qui correspondent à des catégories. <i>Ce réglage est ignoré si l&apos;option Sujets cochés seulement est cochée par l&apos;utilisateur.</i>',
	'DIGESTS_EXECUTION_TIME'								=> 'Temps d‘exécution (sec)',
	'DIGESTS_EXPAND'										=> 'Développer les paramètres de résumé de l‘utilisateur',
	'DIGESTS_FREQUENCY_EXPLAIN'								=> 'Les résumés hebdomadaires sont envoyés le jour de la semaine défini dans les réglages généraux de Digests. Les résumés mensuels sont envoyés le premier du mois. Le Temps Universel Coordonné (UTC) est utilisé pour déterminer le jour de la semaine.',
	'DIGESTS_FORMAT_FOOTER' 								=> 'Format du résumé',
	'DIGESTS_FROM_EMAIL_ADDRESS'							=> 'Adresse électronique utilisée pour expédier les résumés',
	'DIGESTS_FROM_EMAIL_ADDRESS_EXPLAIN'					=> 'Lorsque les utilisateurs recoivent un résumé, cette adresse électronique va s&apos;afficher dans le champ &ldquo;De&rdquo;. S&apos;il est laissé vide, l&apos;adresse électronique de votre Forum sera utilisé par défaut. Faites attention lorsque vous utilisez une adresse électronique dont le domaine ne correspond pas à celui sur lequel est hébergé votre Forum, dans la mesure où votre serveur de courriels ou le serveur de courriels des utilisateurs pourra interprêter le courriel comme étant du spam.',
	'DIGESTS_FROM_EMAIL_NAME'								=> 'Nom de l&apos;expéditeur du courriel',
	'DIGESTS_FROM_EMAIL_NAME_EXPLAIN'						=> 'Il s‘agit du nom PAR en clair qui apparaîtra dans le client de messagerie. S‘il est laissé vide, il s‘identifiera comme un robot de synthèse pour votre tableau.',
	'DIGESTS_HAS_UNSUBSCRIBED'								=> 'S&apos;est désabonné',
	'DIGESTS_HOUR_SENT'										=> 'Heure d&apos;envoi (basée sur UTC%+d)',
	'DIGESTS_HOUR_SENT_GMT'									=> 'Heure d&apos;envoi par défaut (UTC)',
	'DIGESTS_IGNORE'										=> 'Ignorer les lignes cochées',
	'DIGESTS_ILLOGICAL_DATE'								=> 'Vos date et heure sont invalides. Veuillez les corriger et les envoyer à nouveau en utilisant le format de date et heure : AAAA-MM-JJ HH:MM:SS.',
	'DIGESTS_INCLUDE_ADMINS'								=> 'Inclure les administrateurs',
	'DIGESTS_INCLUDE_ADMINS_EXPLAIN'						=> 'Permet d&apos;abonner ou de désabonner les administrateurs en plus des utilisateurs normaux.',
	'DIGESTS_INCLUDE_FORUMS'								=> 'Toujours inclure les forums suivants',
	'DIGESTS_INCLUDE_FORUMS_EXPLAIN'						=> 'Saisissez le forum_id des forums qui doivent figurer dans le résumé. Séparez les forum_id par des virgules. En indiquant 0, aucun forum ne sera inclus. Pour déterminer le forum_id d&apos;un forum, observez la valeur du paramètre &ldquo;f&rdquo; dans le champ de l&apos;URL. C&apos;est le forum_id. Exemple: http://www.example.com/phpBB3/viewforum.php?f=1. Ne pas utiliser de forum_ids qui correspondent à des catégories. <i>Ce réglage est ignoré si l&apos;option Sujets cochés seulement est cochée par l&apos;utilisateur.</i>',
	'DIGESTS_LAST_SENT'										=> 'Dernier résumé envoyé',
	'DIGESTS_LIST_USERS' 								=> array(
																	1	=>	'%d Utilisateur',
																	2	=>	'%d Utilisateurs',
																),
																	'DIGESTS_LOWERCASE_DIGEST_TYPE'							=> 'Indiquer la fréquence d&apos;envoi du résumé en lettres minuscules',
	'DIGESTS_LOWERCASE_DIGEST_TYPE_EXPLAIN'					=> 'En Anglais, le titre du résumé sera par exemple &ldquo;My board name Daily Digest&rdquo;. Dans certaines langues &ldquo;Digest Daily&rdquo; précède le nom du forum. En indiquant Oui, la fréquence du résumé apparaîtra ainsi &ldquo;Résumé journalier de mon forum&rdquo;, avec la première lettre de la fréquence d&apos;envoi en minuscule.',
	'DIGESTS_MAILER_RAN_SUCCESSFULLY'						=> 'Le générateur de courriels a été lancé avec succès.',
	'DIGESTS_MAILER_RAN_WITH_ERROR'							=> 'Une erreur est survenue avec le générateur de courriels. Un ou plusieurs résumés ont pu être générés avec succès. Les journaux d&apos;administration et d&apos;erreurs phpBB peuvent contenir plus d&apos;information.',
	'DIGESTS_MAILER_SPOOLED'								=> 'Tous les résumés créés pour la date et l&apos;heure ont été enregistrés dans le dossier store/phpbbservices/digests.',
	'DIGESTS_MARK_UNMARK_ROW'								=> 'Sélectionnez ou désélectionnez la ligne à modifier',
	'DIGESTS_MARK_ALL'										=> 'Sélectionnez ou désélectionnez toutes les lignes',
	'DIGESTS_MAX_CRON_HOURS'								=> 'Réglez-le sur 0 (zéro) pour traiter tous les résumés pour toutes les heures dans la file d‘attente lorsque le mailer est exécuté. Cependant, si vous avez un hébergement mutualisé, l‘exécution du mailer peut déclencher des limites de ressources et provoquer une erreur du mailer. Cela est plus susceptible de se produire si vous avez de nombreux abonnés et que le trafic sur le tableau est faible. La configuration d‘un <a href="https://wiki.phpbb.com/PhpBB3.1/RFC/Modular_cron#Use_system_cron">système cron</a> est le moyen le plus simple de minimiser ce problème et devrait également garantir l‘arrivée en temps opportun des résumés ',
	'DIGESTS_MAX_CRON_HOURS_EXPLAIN'						=> 'Saisissez zéro (0) afin de traiter tous les résumés de la file d&apos;attente toutes les heures, lorsque générateur de courriels est lancé. Cependant, si vous avez un <strong>hébergement mutualisé</strong> le lancement du générateur de courriel peut lui faire atteindre ses limites et entraîner des erreurs. Cela ne risque d&apos;arriver que si vous avez de nombreux abonnés et que le trafic sur votre forum est élevé. La mise en place d&apos;un <a href="https://wiki.phpbb.com/PhpBB3.1/RFC/Modular_cron#Use_system_cron">service cron</a> est la solution la plus simple pour réduire ce risque et de vous assurer que vos résumés arrivent en temps et en heure.',
	'DIGESTS_MAX_ITEMS'										=> 'Nombre maximum de posts autorisés dans un résumé',
	'DIGESTS_MAX_ITEMS_EXPLAIN'								=> 'Pour des raisons de performances, vous pouvez avoir besoin de définir une limite absolue quant au nombre de posts dans un résumé. Si vous indiquez 0 (zéro) le résumé pourra avoir une taille illimitée. Vous pouvez utiliser tout nombre entier de votre choix dans ce champ. Veuillez noter qu&apos;un résumé est contraint par le nombre de posts dans le type de résumé demandé (journalier, hebdomadaire ou mensuel) ainsi que d&apos;autres critères définis par l&apos;utilisateur.',
	'DIGESTS_MAIL_FREQUENCY' 								=> 'Fréquence d&apos;envoi du résumé',
	'DIGESTS_MAILED'		 								=> 'Résumés postés',
	'DIGESTS_MAILER_RESET' 									=> 'Le générateur de courriels a été réinitialisé',
	'DIGESTS_MANAGE_THIS_USER'								=> 'Gérer cet utilisateur',
	'DIGESTS_MEMORY_USED'									=> 'Mémoire utilisée (MB)',
	'DIGESTS_MIGRATE_UNSUPPORTED_VERSION'					=> 'Les mises à niveau des modifications des résumés (pour phpBB 3.0) sont prises en charge depuis la version 2.2.6 et suivantes. Vous utilisez la version %s. L&apos;extension ne peut pas être déplacée ou installée. Veuillez consulter l&apos;aide sur le forum de discussion pour l&apos;extension de phpbb.com.',
	'DIGESTS_MIN_POPULARITY_SIZE'							=> 'Nombre de posts minimum par sujet pour la popularité',
	'DIGESTS_MIN_POPULARITY_SIZE_EXPLAIN'					=> 'Permet de définir le nombre minimum de posts par jour nécessaires à un sujet pour être considéré comme populaire. Un abonné ne peut pas définir une valeur inférieure à celle-ci. Cette valeur est uniquement appliquée sur la période sélectionnée par l&apos;abonné : journalière, hebdomadaire ou mensuelle, afin de refléter ainsi la popularité récente d&apos;un sujet.',
	'DIGESTS_MONTHLY_ONLY'									=> 'Résumés mensuels seulement',
	'DIGESTS_NEVER_VISITED'									=> 'Jamais visité',
	'DIGESTS_NO_SUBSCRIBERS'								=> '<em>Aucun abonné</em>',
	'DIGESTS_NO_DIGESTS_SENT'								=> 'Aucun résumé envoyé',
	'DIGESTS_NO_FILES'										=> '<em>Aucun fichier</em>',
	'DIGESTS_NO_MASS_ACTION'								=> 'Aucune action n‘a été entreprise, car vous n‘avez pas activé la fonctionnalité',
	'DIGESTS_NO_USERS_SELECTED'								=> 'Aucune modification apportée ! Vous devez cocher une ou plusieurs cases pour modifier l‘abonnement des utilisateurs.',
	'DIGESTS_NOTIFY_ON_ADMIN_CHANGES'						=> 'Notifier un membre par courriel d&apos;une modification de son résumé par un administrateur',
	'DIGESTS_NOTIFY_ON_ADMIN_CHANGES_EXPLAIN'				=> 'Modifier les abonnés, équilibrer la charge et s‘abonner/désabonner en masse permettent à l‘administrateur de modifier les paramètres de résumé d‘un utilisateur. Si oui, des e-mails seront envoyés aux abonnés lorsqu‘un aspect de leur abonnement est modifié par un administrateur.',
	'DIGESTS_NUMBER_OF_SUBSCRIBERS'							=> 'Nombre d&apos;abonnés',
	'DIGESTS_PMS_MARK_READ'									=> 'Marquer mes messages privés comme lus lorsqu&apos;ils sont dans le résumé',
	'DIGESTS_PROCESS_ENDED'									=> 'Processus terminé',
	'DIGESTS_PROCESS_STARTED'								=> 'Le processus a commencé',
	'DIGESTS_RANDOM_HOUR'									=> 'Heure aléatoire',
	'DIGESTS_REBALANCED'									=> array(
																	1 => 'Pendant l&apos;équilibrage, %d résumé d&apos;abonné au total a eu son heure d&apos;envoi de résumé modifiée.',
																	2 => 'Pendant l&apos;équilibrage, %d résumés d&apos;abonné au total ont eu leur heure d&apos;envoi de résumé modifiée.',
															),
	'DIGESTS_REGISTRATION_FIELD'							=> 'Proposer aux utilisateurs de s&apos;abonner au résumé lorqu&apos;ils s&apos;enregistrent',
	'DIGESTS_REGISTRATION_FIELD_EXPLAIN'					=> 'Lorsque l&apos;option est activée, les utilisateurs peuvent au moment de leur enregistrement sur le forum, s&apos;abonner au service d&apos;envoi du résumé. Les réglages par défaut du forum seront appliqués. La proposition d&apos;abonnement ne s&apos;affiche pas lorsque l&apos;option Abonnement automatique est activé.',
	'DIGESTS_REPLY_TO_EMAIL_ADDRESS'						=> 'Adresse de réponse au couriel',
	'DIGESTS_REPORTING_DAYS'								=> 'Jours maximum de statistiques de rapport',
	'DIGESTS_REPORTING_DAYS_EXPLAIN'						=> 'Les résumés de rapports statistiques peuvent consommer beaucoup d‘espace dans la base de données. Cela limite le nombre de jours de statistiques collectées pour les statistiques de rapport. Les statistiques antérieures à celle-ci sont automatiquement supprimées lors de l‘exécution du logiciel de messagerie. Entrez 0 (zéro) pour autoriser un nombre illimité de jours de statistiques.',
	'DIGESTS_REPORTING_ENABLE'								=> 'Activer les rapports',
	'DIGESTS_REPORTING_ENABLE_EXPLAIN'						=> 'Lorsqu‘il est activé, les rapports sont conservés lorsque des résumés sont envoyés, affichant des statistiques horaires sur les e-mails envoyés et certaines informations sur les performances.',
	'DIGESTS_REPLY_TO_EMAIL_ADDRESS_EXPLAIN'				=> 'Lorsque les utilisateurs reçoivent un résumé, cette adresse électronique apparaîtra dans le champ &ldquo;Répondre&rdquo;. Si le champ est laissé vide, l&apos;adresse électronique de contact de votre forum sera utilisé. Faites attention lorsque vous utilisez une adresse électronique dont le domaine ne correspond pas à celui sur lequel est hébergé votre Forum, dans la mesure où votre serveur de courriels ou le serveur de courriels des utilisateurs pourra interprêter le courriel comme étant du spam.',
	'DIGESTS_RESET_CRON_RUN_TIME'							=> 'Réinitialiser le générateur de courriels',
	'DIGESTS_RESET_CRON_RUN_TIME_EXPLAIN'					=> 'La réintialisation du générateur de courriels, entraîne la suppression de tous les résumés stockés dans la file d&apos;attente. Aussi, lors de son premier lancement après la réinitialisation, seuls les résumés de l&apos;heure courante seront générés. La réinitialisation peut être utile lorsque vous avez terminé de tester les résumés ou si le cron phpBB n&apos;a pas fonctionné depuis un certain temps.',
	'DIGESTS_ROWS_PER_PAGE'									=> 'Nombre de lignes par page',
	'DIGESTS_ROWS_PER_PAGE_EXPLAIN'							=> 'Cela contrôle le nombre de lignes par page qui apparaissent dans un tableau de données. Il est recommandé de laisser cette valeur à 20. Définir cette valeur trop élevée peut déclencher une erreur PHP max_input_vars sur la page Modifier les abonnés.',
	'DIGESTS_RUN_TEST_CLEAR_SPOOL'							=> 'Effacer le dossier store/phpbbservices/digests',
	'DIGESTS_RUN_TEST_CLEAR_SPOOL_ERROR'					=> 'Impossible de supprimer tous les fichiers dans le dossier store/phpbbservices/digests. Cela est peut-être dû à des problèmes de permissions ou parce que le dossier a été supprimé. Les permissions de fichier du dossier doivent être réglées sur écriture publique (777 sur les systèmes Unix).',
	'DIGESTS_RUN_TEST_DATE_HOUR'							=> 'Date et heure de lancement',
	'DIGESTS_RUN_TEST_EMAIL_ADDRESS'						=> 'Adresse électronique de test',
	'DIGESTS_RUN_TEST_SEND_TO_ADMIN'						=> 'Envoyer tous les résumés à l&apos;adresse électronique spécifiée',
	'DIGESTS_RUN_TEST_SPOOL'								=> 'Écrire les résultats dans des fichiers au lieu de les envoyer par courriels',
	'DIGESTS_RUN_TEST_SPOOL_EXPLAIN'						=> 'Si oui, tous les fichiers de ce dossier seront effacés avant que les résumés ne soient stockés.',
	'DIGESTS_SALUTATION_FIELDS'								=> 'Sélectionner les champs de salutation',
	'DIGESTS_SALUTATION_FIELDS_EXPLAIN'						=> 'Saisissez, le cas échéant, le nom des champs de profil personnalisé que vous souhaitez remplacer par le nom d&apos;utilisateur pour la salutation dans le résumé. Si laissé vide, le nom d&apos;utilisateur est utilisé. Saisissez le(s) nom(s) d&apos;identification des champs figurant sur la page des champs de profil personnalisés. Séparez le nom des champs par des virgules. <em> Remarque : </ em> Les champs doivent être du type "Champ de texte unique". Si aucun des champs de profil personnalisé n&apos;existe ou s&apos;il n&apos;y a pas de valeur dans les champs de l&apos;abonné, le nom d&apos;utilisateur sera utilisé à la place. Exemple: prénom, nom de famille (si vous avez créé des champs de profil personnalisés avec ces noms). Un espace sera placé entre chaque champ de profil personnalisé pour la salutation dans le résumé.',
	'DIGESTS_SEARCH_FOR_MEMBER'								=> 'Rechercher des membres',
	'DIGESTS_SEARCH_FOR_MEMBER_EXPLAIN'						=> 'Saisissez le nom complet ou partiel du membre ou l&apos;adresse électronique à rechercher, puis appuyez sur <strong>Go</strong>. Laissez vide pour désactiver ce type de recherche. Les recherches de noms de membres ne sont pas sensibles à la casse. <em>Note</em> : Il doit y avoir un symbole @ dans le champ pour qu&apos;une recherche d&apos;email soit effectuée.',
	'DIGESTS_SELECT_FORUMS_ADMIN_EXPLAIN'					=> 'Seuls les forums que l&apos;utilisateur est autorisé à lire sont affichés dans la liste. Si vous souhaitez donner aux utilisateurs des accès à d&apos;autres forums non affichés ici, étendez leur permission d&apos;utilisateur du forum ou de groupe. Notez que vous pouvez aussi ajuster les forums qui apparaissent dans leur résumé. Si leur type de résumé est &ldquo;Aucun&rdquo; aucun résumé ne leur sera envoyé.',
	'DIGESTS_SHOW'											=> 'Afficher',
	'DIGESTS_SHOW_EMAIL'									=> 'Afficher l&apos;adresse électronique dans le journal',
	'DIGESTS_SHOW_EMAIL_EXPLAIN'							=> 'Si cette option est activée, l&apos;adresse électronique de l&apos;abonné est rajoutée dans les entrées du journal d&apos;administration avec son nom d&apos;utilisateur. Utile en cas de problème avec le générateur de courriels.',
	'DIGESTS_SHOW_FORUM_PATH'								=> 'Afficher le chemin d&apos;accès du forum dans le résumé',
	'DIGESTS_SHOW_FORUM_PATH_EXPLAIN'						=> 'Lorsque cette option est activée, les noms des catégories et des forums dans le lequel se trouve un forum vont être affichés. Par exemple: &ldquo;Catégorie 1 &#8249; Forum 1 &#8249; Catégorie A &#8249; Forum B&rdquo;, en y incluant toute la hiérarchie dans laquelle se trouve votre forum. Sinon, seul le nom du forum sera affiché, comme &ldquo;Forum B&rdquo; dans l&apos;exemple précédent.',
	'DIGESTS_SKIPPED'										=> 'Résumés ignorés',
	'DIGESTS_SORT_ORDER'									=> 'Ordre de classement',
	'DIGESTS_SORTING_AND_FILTERING'							=> 'Classement et filtrage',
	'DIGESTS_STOPPED_SUBSCRIBING'							=> 'S&apos;est désinscrit',
	'DIGESTS_STRIP_TAGS'									=> 'Balises HTML à supprimer dans le résumé',
	'DIGESTS_STRIP_TAGS_EXPLAIN'							=> 'Les serveurs de courriels peuvent rejeter des courriels ou blacklister les émetteurs lorsque le résumé comporte certaines balises HTML, ou encore placer le résumé dans le dossier des spam. Indiquez le nom des balises à exclure (sans les caractères &lt; ou &gt;), en les séparant par des virgules. Par exemple, pour supprimer les balises vidéo et iframe, saisissez &ldquo;video,iframe&rdquo; dans ce champ. Évitez de saisir le nom de balises usuelles telles que h1, p et div dans la mesure où elles sont nécessaires à la mise en forme du résumé.',
	'DIGESTS_SUBSCRIBE_EDITED'								=> 'Les réglages liés à votre abonnement au résumé ont été modifiés',
	'DIGESTS_SUBSCRIBE_SUBJECT'								=> 'Vous avez été abonné pour recevoir des résumés par courriel',
	'DIGESTS_SUBSCRIBE_ALL'									=> 'Abonner tout le monde',
	'DIGESTS_SUBSCRIBE_ALL_EXPLAIN'							=> 'Si vous choisissez Non, tout les utilisateurs seront désabonnés.',
	'DIGESTS_SUBSCRIBE_LITERAL'								=> 'S&apos;abonner',
	'DIGESTS_SUBSCRIBED'									=> 'Les abonnés',
	'DIGESTS_SUBSCRIBERS_DAILY'                           	=> 'Abonnés journaliers',
	'DIGESTS_SUBSCRIBERS_WEEKLY'                           	=> 'Abonnés hebdomadaires',
	'DIGESTS_SUBSCRIBERS_MONTHLY'                           => 'Abonnés mensuels',
	'DIGESTS_UNLINK_FOREIGN_URLS'							=> 'Supprimer les URL étrangères des résumés',
	'DIGESTS_UNLINK_FOREIGN_URLS_EXPLAIN'					=> 'Supprime les liens vers d&apos;autres domaines dans les résumés. Certains systèmes de messagerie signalent les courriels contenant des liens vers d&apos;autres domaines comme étant du spam potentiel. Cela peut entraîner l&apos;envoi des résumés dans le dossier de spam ou empêcher l&apos;envoi de résumés par le serveur de messagerie sortant.',
	'DIGESTS_UNSUBSCRIBE'									=> 'Désabonner les lignes cochées uniquement',
	'DIGESTS_UNSUBSCRIBE_SUBJECT'							=> 'Vous avez été désabonnés de la réception par courriels du résumé',
	'DIGESTS_UNSUBSCRIBED'									=> 'Les non abonnés',
	'DIGESTS_USER_DIGESTS_MAX_DISPLAY_WORDS'				=> 'Nombre maximum de mots à afficher dans un post',
	'DIGESTS_USER_DIGESTS_MAX_DISPLAY_WORDS_EXPLAIN'		=> 'Saisir -1 pour afficher l&apos;intégralité du texte du post par défaut. Saisir zéro (0) signifie que l&apos;utilisateur ne verra pas du tout le texte du post.',	
	'DIGESTS_USER_DIGESTS_PM_MARK_READ'						=> 'Marquer les messages privés comme lus lorsqu&apos;ils apparaissent dans le résumé',
	'DIGESTS_WEEKLY_DIGESTS_DAY'							=> 'Jour d&apos;envoi des résumés hebdomadaires',
	'DIGESTS_WEEKLY_DIGESTS_DAY_EXPLAIN'					=> 'Le jour de la semaine se base sur l&apos;UTC (Temps Universel Coordonné). En fonction de l&apos;heure souhaitée, les abonnés de l&apos;hémisphère occidental peuvent recevoir leur résumé hebdomadaire un jour plus tôt que prévu.',
	'DIGESTS_WEEKLY_ONLY'									=> 'Résumés hebdomadaires seulement',
	'DIGESTS_WITH_SELECTED'									=> 'Avec la sélection',

));
