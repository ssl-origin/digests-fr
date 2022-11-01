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
	'DIGESTS_WEEKDAY' 					=> 'Dimanche,Lundi,Mardi,Mercredi,Jeudi,Vendredi,Samedi',
));

$weekdays = explode(',', $lang['DIGESTS_WEEKDAY']);

$lang = array_merge($lang, array(
	'PLURAL_RULE'											=> 2,

	'DIGESTS_ALL'											=> 'Tous',
	'DIGESTS_ALL_ALLOWED_FORUMS'							=> 'Tous les forums autorisés',
	'DIGESTS_ALL_HOURS'										=> 'Toutes les heures',
	'DIGESTS_ALL_TYPES'										=> 'Tous les types de résumés',
	'DIGESTS_ALL_SUBSCRIBED'								=> array(
																1 => 'Un total de %d membre a été abonné au service d’envoi du résumé',
																2 => 'Un total de %d membres a été abonné au service d’envoi du résumé',
															),
	'DIGESTS_ALL_UNSUBSCRIBED'								=> array(
																1 => 'Un total de %d membre a été désabonné du service d’envoi du résumé',
																2 => 'Un total de %d membres a été désabonné du service d’envoi du résumé',
															),
	'DIGESTS_APPLY_TO'										=> 'Appliquer à',
	'DIGESTS_AVERAGE'										=> 'Moyenne',
	'DIGESTS_BALANCE_APPLY_HOURS'							=> 'Appliquer l’équilibrage aux heures suivantes',
	'DIGESTS_BALANCE_LOAD'									=> 'Équilibrer la charge',
	'DIGESTS_BALANCE_HOURS'									=> 'Équilibrer les heures',
	'DIGESTS_BASED_ON'										=> '(UTC%+d)',
	'DIGESTS_CLEAR_CACHE_NOT_RUN'							=> 'Les résumés en cache n’ont pas été supprimés car cette fonction n’a pas été sélectionnée.',
	'DIGESTS_CLEAR_REPORT'									=> 'Effacer les rapports statistiques',
	'DIGESTS_CLEAR_REPORT_EXPLAIN'							=> 'Supprime tous les rapports statistiques d’envoi collectés.',
	'DIGESTS_CLEAR_REPORT_NOT_RUN'							=> 'Les rapports statistiques n’ont pas été supprimés car cette fonction n’a pas été sélectionnée.',
	'DIGESTS_CLEAR_REPORT_RUN'								=> 'Les rapports statistiques ont été supprimés',
	'DIGESTS_COLLAPSE'										=> 'Replier les paramètres du résumé de l’utilisateur',
	'DIGESTS_COMMA'											=> ', ',		// Used in salutations and to separate items in lists
	'DIGESTS_CREATE_DIRECTORY_ERROR'						=> 'Impossible de créer le répertoire %s. Cela peut être dû à des permissions insuffisantes. Le répertoire doit être accessible en écriture (777 sur les systèmes de type Unix).',
	'DIGESTS_CRON_TYPE'										=> 'Type de Cron',
	'DIGESTS_CRON_TYPE_MANUAL'								=> 'Manuel (PCA)',
	'DIGESTS_CRON_TYPE_PHPBB'								=> 'phpBB',
	'DIGESTS_CRON_TYPE_SYSTEM'								=> 'Système',
	'DIGESTS_CURRENT_VERSION_INFO'							=> 'Vous exécutez la version <strong>%s</strong>.',
	'DIGESTS_CUSTOM_STYLESHEET_PATH'						=> 'Chemin d’accès à la feuille de style personnalisée',
	'DIGESTS_CUSTOM_STYLESHEET_PATH_EXPLAIN'				=> 'Ce réglage ne s’applique que si l’option « Activer la feuille de style personnalisée » est activée. Dans ce cas, cette feuille de style sera appliquée à tous les résumés formatés. Le chemin d’accès doit être relatif à votre dossier de styles phpBB, qui doit normalement se trouver dans le sous-répertoire « theme ». <em>Note</em> : vous êtes responsable de la création de la feuille de style et de son enregistrement dans un fichier dont le nom est indiqué ici, à l’emplacement approprié sur votre serveur. Exemple : prosilver/theme/digest_stylesheet.css. Pour en savoir davantage sur la création de feuilles de style, cliquez <a href="https://www.w3schools.com/css/">ici</a>.',
	'DIGESTS_DATE_HOUR'										=> 'Date et heure (UTC)',
	'DIGESTS_DEBUG'											=> 'Activer le débogage des résumés',
	'DIGESTS_DEBUG_EXPLAIN'									=> 'Utilisé pour le débogage technique. Cette fonction permet d’enregistrer dans le journal d’administration certaines informations essentielles au dépannage, telles que les requêtes à la base de données utilisées pour assembler les résumés. Vous devez posséder des compétences en matière de développement pour interpréter ces informations.',
	'DIGESTS_DEFAULT'										=> 'Abonner les lignes cochées uniquement en utilisant les valeurs par défaut',
	'DIGESTS_DEFAULT_SHORT'									=> 'S’abonner en utilisant les valeurs par défaut',
	'DIGESTS_DAILY_ONLY'									=> 'Résumés quotidiens seulement',
	'DIGESTS_ENABLE_AUTO_SUBSCRIPTIONS'						=> 'Activer l’abonnement automatique',
	'DIGESTS_ENABLE_AUTO_SUBSCRIPTIONS_EXPLAIN'				=> 'Sélectionnez Oui, si vous souhaitez que les nouveaux membres qui s’inscrivent sur le forum reçoivent automatiquement le résumé. Les réglages par défaut définis dans la rubrique « Options par défaut de l’utilisateur » seront automatiquement appliqués. L’activation de cette option n’abonne <em>pas</em> les personnes qui ne sont pas abonnées, les membres inactifs, ni les nouveaux membres qui choisissent de ne pas recevoir le résumé lors de leur enregistrement au forum. Vous pouvez abonner des utilisateurs individuellement en utilisant la rubrique « Gérer les abonnés », ou abonner plusieurs utilisateurs en même temps depuis la rubrique « Gestion globale des abonnements ».',
	'DIGESTS_ENABLE_CUSTOM_STYLESHEET'						=> 'Activer la feuille de style personnalisée',
	'DIGESTS_ENABLE_CUSTOM_STYLESHEET_EXPLAIN'				=> 'Sélectionnez Non pour que la feuille de style utilisée par défaut soit celle sélectionnée dans le profil de l’utilisateur pour la génération formatée de son résumé.',
	'DIGESTS_ENABLE_LOG'									=> 'Inscrire toutes les actions du résumé dans le journal de l’administrateur',
	'DIGESTS_ENABLE_LOG_EXPLAIN'							=> 'Lorsque l’option est activée, toutes les actions réalisées par Digests seront enregistrées dans le journal d’administration (qui se trouve dans l’onglet Maintenance). Ce réglage permet de répondre aux questions concernant l’envoi des résumés, car il décrit ce qu’a fait le générateur de courriels, quand et pour quels abonnés. Cependant, son activation va rapidement générer de volumineux journaux d’administration, deux entrées au moins étant enregistrées chaque heure dans le journal. <em>Note</em> : les erreurs, les exceptions et les alertes sont toujours inscrites dans le journal de phpBB.',
	'DIGESTS_ENABLE_SUBSCRIBE_UNSUBSCRIBE'					=> 'Activer l’abonnement ou le désabonnement global d’utilisateurs',
	'DIGESTS_ENABLE_SUBSCRIBE_UNSUBSCRIBE_EXPLAIN'			=> 'Si vous choisissez Oui, lorsque vous cliquerez sur le bouton Envoyer, une action d’abonnement ou de désabonnement global d’utilisateurs va être déclenchée. Activez cette option avec précaution !',
	'DIGESTS_EXCLUDE_FORUMS'								=> 'Toujours exclure les forums suivants',
	'DIGESTS_EXCLUDE_FORUMS_EXPLAIN'						=> 'Saisissez le forum_id des forums qui ne doivent pas figurer dans le résumé. Séparez les forum_ids par des virgules. En indiquant 0, aucun forum ne sera exclu. Le forum_id d’un forum correspond à la valeur du paramètre « f » dans le champ de l’URL. Exemple : https://www.example.com/phpBB3/viewforum.php?f=1. N’utilisez pas de forum_ids qui correspondent à des catégories. <i>Ce réglage est ignoré si l’option « Sujets cochés seulement » est activée par l’utilisateur.</i>',
	'DIGESTS_EXECUTION_TIME'								=> 'Temps d’exécution (secondes)',
	'DIGESTS_EXPAND'										=> 'Agrandir les paramètres du résumé de l’utilisateur',
	'DIGESTS_FREQUENCY_EXPLAIN'								=> 'Les résumés hebdomadaires sont envoyés le jour de la semaine défini dans les réglages généraux de Digests. Les résumés mensuels sont envoyés le premier du mois. Le Temps Universel Coordonné (UTC) est utilisé pour déterminer le jour de la semaine.',
	'DIGESTS_FORMAT_FOOTER' 								=> 'Format du résumé',
	'DIGESTS_FROM_EMAIL_ADDRESS'							=> 'Adresse de courriel utilisée pour expédier les résumés',
	'DIGESTS_FROM_EMAIL_ADDRESS_EXPLAIN'					=> 'Lorsque les utilisateurs recoivent un résumé, cette adresse de courriel va s’afficher dans le champ « De ». S’il est laissé vide, l’adresse de courriel du forum sera utilisée. Faites attention lorsque vous utilisez une adresse de courriel dont le domaine ne correspond pas à celui sur lequel est hébergé le forum, car votre serveur de messagerie ou ceux des utilisateurs pourraient interpréter le courriel comme étant indésirable.',
	'DIGESTS_FROM_EMAIL_NAME'								=> 'Nom de l’expéditeur du courriel',
	'DIGESTS_FROM_EMAIL_NAME_EXPLAIN'						=> 'Il s’agit du nom qui apparaîtra en clair dans le champ « De » du logiciel de courriel client de l’utilisateur. Si le champ est laissé vide, l’extension Digests s’identifiera en tant que robot du forum.',
	'DIGESTS_HAS_UNSUBSCRIBED'								=> 'S’est désabonné',
	'DIGESTS_HOUR_SENT'										=> 'Heure d’envoi (UTC%+d)',
	'DIGESTS_HOUR_SENT_GMT'									=> 'Heure d’envoi par défaut (UTC)',
	'DIGESTS_IGNORE'										=> 'Ignorer les lignes cochées',
	'DIGESTS_ILLOGICAL_DATE'								=> 'Vos date et heure sont invalides. Veuillez les corriger et les envoyer à nouveau en utilisant le format de date et heure : AAAA-MM-JJ HH:MM:SS.',
	'DIGESTS_INCLUDE_ADMINS'								=> 'Inclure les administrateurs',
	'DIGESTS_INCLUDE_ADMINS_EXPLAIN'						=> 'Permet d’abonner ou de désabonner les administrateurs en complément des autres membres.',
	'DIGESTS_INCLUDE_FORUMS'								=> 'Toujours inclure les forums suivants',
	'DIGESTS_INCLUDE_FORUMS_EXPLAIN'						=> 'Saisissez le forum_id des forums qui doivent figurer dans le résumé. Séparez les forum_ids par des virgules. En indiquant 0, aucun forum ne sera inclus. Le forum_id d’un forum correspond à la valeur du paramètre « f » dans le champ de l’URL. Exemple : https://www.example.com/phpBB3/viewforum.php?f=1. N’utilisez pas de forum_ids qui correspondent à des catégories. <i>Ce réglage est ignoré si l’option « Sujets cochés seulement » est activée par l’utilisateur.</i>',
	'DIGESTS_LAST_SENT'										=> 'Dernier résumé envoyé',
	'DIGESTS_LIST_USERS' 								=> array(
																	1	=>	'%d Utilisateur',
																	2	=>	'%d Utilisateurs',
																),
	'DIGESTS_LOWERCASE_DIGEST_TYPE'							=> 'Mettre en minuscules la fréquence d’envoi dans le titre du résumé',
	'DIGESTS_LOWERCASE_DIGEST_TYPE_EXPLAIN'					=> 'Le titre du résumé sera, par exemple, « Mon forum phpBB : résumé quotidien », avec la première lettre de la fréquence d’envoi en minuscule.',
	'DIGESTS_MAILER_RAN_SUCCESSFULLY'						=> 'Le générateur de courriels a été lancé avec succès.',
	'DIGESTS_MAILER_RAN_WITH_ERROR'							=> 'Une erreur est survenue avec le générateur de courriels. Un ou plusieurs résumés ont pu être générés avec succès. Les journaux d’administration et d’erreurs phpBB peuvent contenir davantage d’informations.',
	'DIGESTS_MAILER_SPOOLED'								=> 'Tous les résumés créés pour la date et l’heure sélectionnées ont été enregistrés dans le répertoire store/phpbbservices/digests.',
	'DIGESTS_MARK_UNMARK_ROW'								=> 'Sélectionnez ou désélectionnez la ligne à modifier',
	'DIGESTS_MARK_ALL'										=> 'Sélectionnez ou désélectionnez toutes les lignes',
	'DIGESTS_MAX_CRON_HOURS'								=> 'Nombre d’heures maximum d’exécution par le générateur de courriels',
	'DIGESTS_MAX_CRON_HOURS_EXPLAIN'						=> 'Saisissez 0 (zéro) afin de traiter chaque heure tous les résumés de la file d’attente, lorsque le générateur de courriels s’exécute. Cependant, si votre hébergement est mutualisé, l’exécution du générateur de courriels risque de saturer les ressources du système et d’entraîner des erreurs. Ce problème est particulièrement susceptible de se manifester si vous avez de nombreux abonnés et si l’activité du forum est faible. La mise en place d’un <a href="https://wiki.phpbb.com/PhpBB3.1/RFC/Modular_cron#Use_system_cron">service cron</a> est la solution la plus simple pour réduire ce risque et vous assurer que vos résumés arrivent en temps et en heure.',
	'DIGESTS_MAX_ITEMS'										=> 'Nombre maximum de messages autorisés dans un résumé',
	'DIGESTS_MAX_ITEMS_EXPLAIN'								=> 'Pour des raisons de performances, vous pouvez avoir besoin de définir une limite absolue quant au nombre de messages dans un résumé. Si vous indiquez 0 (zéro), la taille du résumé sera illimitée. Vous pouvez saisir tout nombre entier de votre choix. Veuillez noter qu’un résumé est limité par le nombre de messages dans le type de résumé demandé (quotidien, hebdomadaire ou mensuel) ainsi que par d’autres critères définis par l’utilisateur.',
	'DIGESTS_MAIL_FREQUENCY' 								=> 'Fréquence d’envoi du résumé',
	'DIGESTS_MAILED'		 								=> 'Résumés envoyés',
	'DIGESTS_MAILER_RESET' 									=> 'Le générateur de courriels a été réinitialisé',
	'DIGESTS_MANAGE_THIS_USER'								=> 'Gérer cet utilisateur',
	'DIGESTS_MEMORY_USED'									=> 'Mémoire utilisée (Mo)',
	'DIGESTS_MIGRATE_UNSUPPORTED_VERSION'					=> 'La mise à niveau du MOD Digests (phpBB 3.0) vers l’extension Digests n’est possible qu’à partir de la version 2.2.6 du MOD. Vous utilisez la version %s. L’extension ne peut pas être mise à niveau ni installée. Veuillez consulter l’aide dans le forum de discussion de l’extension sur phpbb.com.',
	'DIGESTS_MIN_POPULARITY_SIZE'							=> 'Nombre de messages minimum pour la popularité d’un sujet',
	'DIGESTS_MIN_POPULARITY_SIZE_EXPLAIN'					=> 'Permet de définir le nombre minimum de messages par jour nécessaires à un sujet pour être considéré comme populaire. Un abonné ne peut pas définir une valeur inférieure à celle-ci. Cette valeur est uniquement appliquée sur la période sélectionnée par l’abonné : quotidienne, hebdomadaire ou mensuelle, afin de refléter la popularité récente d’un sujet.',
	'DIGESTS_MONTHLY_ONLY'									=> 'Résumés mensuels seulement',
	'DIGESTS_NEVER_VISITED'									=> 'Aucune visite',
	'DIGESTS_NO_SUBSCRIBERS'								=> '<em>Aucun abonné</em>',
	'DIGESTS_NO_DIGESTS_SENT'								=> 'Aucun résumé envoyé',
	'DIGESTS_NO_FILES'										=> '<em>Aucun fichier</em>',
	'DIGESTS_NO_MASS_ACTION'								=> 'Aucune action n’a été réalisée, car vous n’avez pas activé la fonction',
	'DIGESTS_NO_USERS_SELECTED'								=> 'Aucune modification n’a été effectuée ! Vous devez cocher une ou plusieurs cases pour effectuer des modifications d’abonnement sur les utilisateurs.',
	'DIGESTS_NOTIFY_ON_ADMIN_CHANGES'						=> 'Notifier un membre par courriel d’une modification de son résumé par un administrateur',
	'DIGESTS_NOTIFY_ON_ADMIN_CHANGES_EXPLAIN'				=> 'Les rubriques « Gérer les abonnés », « Équilibrer la charge » et « Gestion globale des abonnements » permettent à l’administrateur de modifier les paramètres d’envoi des résumés à un utilisateur. En choisissant « Oui », un courriel lui sera envoyé si un aspect de leur abonnement est modifié par un administrateur.',
	'DIGESTS_NUMBER_OF_SUBSCRIBERS'							=> 'Nombre d’abonnés',
	'DIGESTS_PMS_MARK_READ'									=> 'Marquer mes messages privés comme lus lorsqu’ils figurent dans le résumé',
	'DIGESTS_PROCESS_ENDED'									=> 'Fin du processus',
	'DIGESTS_PROCESS_STARTED'								=> 'Début du processus',
	'DIGESTS_RANDOM_HOUR'									=> 'Heure aléatoire',
	'DIGESTS_REBALANCED'									=> array(
																	1 => 'Pendant l’équilibrage, %d résumé d’abonné au total a eu son heure d’envoi de résumé modifiée.',
																	2 => 'Pendant l’équilibrage, %d résumés d’abonnés au total ont eu leur heure d’envoi de résumé modifiée.',
															),
	'DIGESTS_REGISTRATION_FIELD'							=> 'Proposer aux utilisateurs de s’abonner au résumé lorqu’ils s’enregistrent',
	'DIGESTS_REGISTRATION_FIELD_EXPLAIN'					=> 'Si cette option est activée, les utilisateurs peuvent s’abonner au service d’envoi de résumés lorsqu’ils créent leur compte. Les réglages par défaut du forum seront appliqués. La proposition d’abonnement ne s’affiche pas lorsque l’option d’abonnement automatique est activé.',
	'DIGESTS_REPLY_TO_EMAIL_ADDRESS'						=> 'Adresse de réponse au courriel',
	'DIGESTS_REPLY_TO_EMAIL_ADDRESS_EXPLAIN'				=> 'Lorsque les utilisateurs reçoivent un résumé, cette adresse sera utilisée s’ils répondent au courriel. Si le champ est laissé vide, c’est l’adresse de courriel de contact du forum qui sera utilisée. Faites attention lorsque vous utilisez une adresse de courriel dont le domaine ne correspond pas à celui sur lequel est hébergé le forum, car votre serveur de messagerie ou ceux des utilisateurs pourraient interpréter le courriel comme étant indésirable.',
	'DIGESTS_REPORTING_DAYS'								=> 'Nombre maximum de jours pour les rapports statistiques',
	'DIGESTS_REPORTING_DAYS_EXPLAIN'						=> 'Les rapports statistiques de résumés peuvent consommer beaucoup d’espace dans la base de données. Cette valeur limite la durée de conservation (en jours) des statistiques collectées. Les statistiques les plus anciennes sont automatiquement supprimées lorsque le générateur de courriels est exécuté. Saisissez 0 (zéro) pour autoriser une durée illimitée de conservation.',
	'DIGESTS_REPORTING_ENABLE'								=> 'Activer les rapports',
	'DIGESTS_REPORTING_ENABLE_EXPLAIN'						=> 'Lorsque cette option est activée, les rapports sont conservés lors de l’envoi des résumés, en affichant les statistiques horaires des courriels envoyés et certaines informations concernant les performances.',
	'DIGESTS_RESET_CRON_RUN_TIME'							=> 'Réinitialiser le générateur de courriels',
	'DIGESTS_RESET_CRON_RUN_TIME_EXPLAIN'					=> 'La réinitialisation du générateur de courriels entraîne la suppression de tous les résumés stockés dans la file d’attente. Lors de sa première exécution après la réinitialisation, seuls les résumés de l’heure courante seront générés. La réinitialisation peut être utile lorsque vous avez fini de tester l’envoi des résumés ou si le cron phpBB n’a pas fonctionné depuis un certain temps.',
	'DIGESTS_ROWS_PER_PAGE'									=> 'Lignes par page',
	'DIGESTS_ROWS_PER_PAGE_EXPLAIN'							=> 'Cette option contrôle le nombre de lignes par page qui apparaissent dans un tableau de données. Il est recommandé de laisser cette valeur à 20. Une valeur trop élevée peut déclencher une erreur PHP max_input_vars sur la page Éditer les abonnés.',
	'DIGESTS_RUN_TEST_CLEAR_SPOOL'							=> 'Purger le répertoire store/phpbbservices/digests',
	'DIGESTS_RUN_TEST_CLEAR_SPOOL_ERROR'					=> 'Impossible de purger les fichiers du répertoire store/phpbbservices/digests. Cela peut être dû à des permissions insuffisantes ou parce que le répertoire a été supprimé. Le répertoire doit être accessible en écriture (777 sur les systèmes de type Unix).',
	'DIGESTS_RUN_TEST_DATE_HOUR'							=> 'Date et heure de lancement',
	'DIGESTS_RUN_TEST_DATE_HOUR_EXPLAIN'							=> 'Utilisez le sélecteur de date et d’heure pour sélectionner une date et une heure. La date et l’heure que vous sélectionnez seront interprétées en fonction de votre fuseau horaire défini dans votre profil utilisateur (%s). Si cette opération a déjà été exécutée, la date et l’heure de la dernière exécution sont indiquées. Sinon, la date et l’heure courantes sont indiquées.',
	'DIGESTS_RUN_TEST_EMAIL_ADDRESS'						=> 'Adresse de courriel pour test',
	'DIGESTS_RUN_TEST_EMAIL_ADDRESS_EXPLAIN'				=> 'Si une adresse de courriel est indiquée dans ce champ, tous les résumés seront envoyés à cette adresse à l’heure spécifiée au lieu de l’adresse de courriel de contact du forum (%s). <em>Note</em> : ce champ est ignoré si vous avez sélectionné d’envoyer des courriels dans des fichiers.',
	'DIGESTS_RUN_TEST_SEND_TO_ADMIN'						=> 'Envoyer tous les résumés à l’adresse de courriel spécifiée',
	'DIGESTS_RUN_TEST_SEND_TO_ADMIN_EXPLAIN'				=> 'Si vous émettez des résumés par courriel pendant une phase de test, tous les résumés seront envoyés à l’adresse spécifiée dans le champ ci-dessous. <em>Note</em> : ce réglage sera ignoré si vous avez choisi d’envoyer des courriels vers des fichiers. Si vous choisissez Oui alors qu’aucune adresse n’a été spécifiée, l’adresse de courriel de contact du forum (%s) sera utilisée. <em>Attention</em> : certains serveurs de courriels pourraient interpréter ce grand volume de mails envoyés sur une brève période depuis une même adresse comme étant du courriel indésirable ou ayant un contenu inapproprié. À activer avec précaution. Si vous choisissez Non, les résumés seront aussi envoyés aux abonnés, ce qui pourrait les perturber.',
	'DIGESTS_RUN_TEST_SPOOL'								=> 'Enregistrer les résultats dans des fichiers au lieu de les envoyer par courriels',
	'DIGESTS_RUN_TEST_SPOOL_EXPLAIN'						=> 'Évite que les résumés ne soient envoyés par courriels. Au lieu de cela, chaque résumé est enregistré dans un fichier du répertoire store/phpbbservices/digests dont le nom est formaté ainsi : nom_utilisateur-aaaa-mm-jj-hh.html ou nom_utilisateur-aaaa-mm-jj-hh.txt (les fichiers avec un suffixe .txt sont des résumés en texte brut). nom_utilisateur est le nom de l’utilisateur sur le forum phpBB. aaaa indique l’année, mm le mois, jj le jour dans le mois et hh l’heure en UTC. Pour visualiser ces fichiers, commencez par les télécharger dans un répertoire local. Visualisez le fichier depuis un navigateur en utilisant la combinaison de touches CTRL+O ou CMD+O (Mac). <em>Note</em> : utilisez bien la lettre O, non le chiffre 0.',
	'DIGESTS_SALUTATION_FIELDS'								=> 'Sélectionner les champs de formule de politesse',
	'DIGESTS_SALUTATION_FIELDS_EXPLAIN'						=> 'Saisissez, le cas échéant, le nom des champs de profil personnalisé que vous souhaitez remplacer par le nom d’utilisateur pour la formule de politesse dans le résumé. Si laissé vide, le nom d’utilisateur est utilisé. Saisissez le(s) nom(s) d’identification des champs figurant sur la page des champs de profil personnalisés. Séparez le nom des champs par des virgules. <em>Remarque : </em> Les champs doivent être du type « Champ de texte unique ». Si aucun des champs de profil personnalisé n’existe ou s’il n’y a pas de valeur dans les champs de l’abonné, le nom d’utilisateur sera utilisé à la place. Exemple : prénom, nom de famille (si vous avez créé des champs de profil personnalisés avec ces noms). Une espace sera placée entre chaque champ de profil personnalisé pour la formule de politesse dans le résumé.',
	'DIGESTS_SEARCH_FOR_MEMBER'								=> 'Rechercher des membres',
	'DIGESTS_SEARCH_FOR_MEMBER_EXPLAIN'						=> 'Saisissez le nom complet ou partiel du membre ou l’adresse de courriel à rechercher, puis pressez la touche Entrée ou cliquez le bouton <strong>Valider</strong> ci-dessous. Laissez vide pour désactiver ce type de recherche. Les recherches de noms de membres ne sont pas sensibles à la casse. <em>Note</em> : un symbole @ doit être présent dans le champ pour qu’une recherche d’adressse de courriel soit effectuée.',
	'DIGESTS_SELECT_FORUMS_ADMIN_EXPLAIN'					=> 'Seuls les forums que l’utilisateur est autorisé à lire sont affichés dans la liste. Si vous souhaitez donner aux utilisateurs des accès à d’autres forums, étendez leurs permissions d’utilisateur du forum ou de groupe. Notez que vous pouvez aussi ajuster les forums qui apparaissent dans leur résumé. Si leur type de résumé est « Aucun », aucun résumé ne leur sera envoyé.',
	'DIGESTS_SHOW'											=> 'Afficher',
	'DIGESTS_SHOW_EMAIL'									=> 'Afficher l’adresse de courriel dans le journal',
	'DIGESTS_SHOW_EMAIL_EXPLAIN'							=> 'Si cette option est activée, l’adresse de courriel de l’abonné est ajoutée aux entrées du journal d’administration avec son nom d’utilisateur. Ce réglage peut servir en cas de problème avec le générateur de courriels.',
	'DIGESTS_SHOW_FORUM_PATH'								=> 'Afficher le chemin d’accès du forum dans le résumé',
	'DIGESTS_SHOW_FORUM_PATH_EXPLAIN'						=> 'Lorsque cette option est activée, les noms des catégories et des forums où se trouve un forum seront affichés. Par exemple : « Catégorie 1 &#8249; Forum 1 &#8249; Catégorie A &#8249; Forum B », en y incluant toute la hiérarchie dans laquelle se trouve le forum. Sinon, seul le nom du forum sera affiché, comme « Forum B » dans l’exemple ci-dessus.',
	'DIGESTS_SKIPPED'										=> 'Résumés ignorés',
	'DIGESTS_SORT_ORDER'									=> 'Ordre de classement',
	'DIGESTS_SORTING_AND_FILTERING'							=> 'Classement et filtrage',
	'DIGESTS_STOPPED_SUBSCRIBING'							=> 'S’est désinscrit',
	'DIGESTS_STRIP_TAGS'									=> 'Balises HTML à supprimer dans le résumé',
	'DIGESTS_STRIP_TAGS_EXPLAIN'							=> 'Lorsque le résumé comporte certaines balises HTML, les serveurs de courriels peuvent rejeter des courriels ou bloquer les émetteurs, ou encore placer le résumé dans le dossier des indésirables. Indiquez le nom des balises à exclure (sans les caractères < et >), en les séparant par des virgules. Par exemple, pour supprimer les balises vidéo et iframe, saisissez « video,iframe » dans ce champ. Évitez de saisir le nom de balises usuelles telles que h1, p et div, car elles sont nécessaires à la mise en forme du résumé.',
	'DIGESTS_SUBSCRIBE_EDITED'								=> 'Les réglages liés à votre abonnement au résumé ont été modifiés',
	'DIGESTS_SUBSCRIBE_SUBJECT'								=> 'Vous avez été abonné à la réception des résumés par courriel',
	'DIGESTS_SUBSCRIBE_ALL'									=> 'Abonner tout le monde',
	'DIGESTS_SUBSCRIBE_ALL_EXPLAIN'							=> 'Si vous choisissez Non, tout les utilisateurs seront désabonnés.',
	'DIGESTS_SUBSCRIBE_LITERAL'								=> 'S’abonner',
	'DIGESTS_SUBSCRIBED'									=> 'Les abonnés',
	'DIGESTS_SUBSCRIBERS_DAILY'                           	=> 'Abonnés quotidiens',
	'DIGESTS_SUBSCRIBERS_WEEKLY'                           	=> 'Abonnés hebdomadaires',
	'DIGESTS_SUBSCRIBERS_MONTHLY'                           => 'Abonnés mensuels',
	'DIGESTS_UNLINK_FOREIGN_URLS'							=> 'Supprimer les URL étrangères des résumés',
	'DIGESTS_UNLINK_FOREIGN_URLS_EXPLAIN'					=> 'Supprime les liens vers d’autres domaines dans les résumés. Certains systèmes de messagerie signalent les courriels contenant des liens vers d’autres domaines comme étant potentiellement indésirables. Cela peut entraîner le placement des résumés dans le dossier des indésirables, ou empêcher l’envoi de résumés par le serveur de messagerie sortant.',
	'DIGESTS_UNSUBSCRIBE'									=> 'Désabonner les lignes cochées uniquement',
	'DIGESTS_UNSUBSCRIBE_SUBJECT'							=> 'Vous avez été désabonné de la réception par courriels du résumé',
	'DIGESTS_UNSUBSCRIBED'									=> 'Les non-abonnés',
	'DIGESTS_USER_DIGESTS_MAX_DISPLAY_WORDS'				=> 'Nombre maximum de mots à afficher dans un message',
	'DIGESTS_USER_DIGESTS_MAX_DISPLAY_WORDS_EXPLAIN'		=> 'Saisissez -1 pour afficher l’intégralité du texte du message par défaut. Saisir 0 (zéro) signifie que l’utilisateur ne verra pas du tout le texte du message.',
	'DIGESTS_USER_DIGESTS_PM_MARK_READ'						=> 'Marquer les messages privés comme lus lorsqu’ils apparaissent dans le résumé',
	'DIGESTS_WEEKLY_DIGESTS_DAY'							=> 'Jour d’envoi des résumés hebdomadaires',
	'DIGESTS_WEEKLY_DIGESTS_DAY_EXPLAIN'					=> 'Le jour de la semaine utilise le temps UTC (Temps Universel Coordonné). En fonction de l’heure définie par les abonnés, ceux de l’hémisphère occidental peuvent recevoir leur résumé hebdomadaire un jour plus tôt que prévu.',
	'DIGESTS_WEEKLY_ONLY'									=> 'Résumés hebdomadaires uniquement',
	'DIGESTS_WITH_SELECTED'									=> 'Avec la sélection',
));
