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
	'PLURAL_RULE'						=> 2,
	
	'DIGESTS_ALL_FORUMS'				=> 'Tous',
	'DIGESTS_AM'						=> ' AM', // non utilisé si les formats date/heure ne pemettent pas AM et PM
	'DIGESTS_AUTHOR'					=> 'Auteur',
	'DIGESTS_BAD_SEND_HOUR'				=> 'L’heure d’envoi du résumé de l’abonné %1$s est invalide. Il est %2$d. La valeur doit être supérieure ou égale à 0 et inférieure à 24.',
	'DIGESTS_BLOCK_IMAGES'				=> 'Bloquer les images',
	'DIGESTS_BLOCK_IMAGES_EXPLAIN'		=> 'Empêche l’affichage des images dans vos résumés, y compris les smileys et les images jointes aux messages ou aux messages privés. Utile pour les connexions lentes, lorsqu’il faut réduire l’utilisation de la bande passante, ou pour les forums actifs utilisant de nombreuses images. Les résumés au format texte n’affichent jamais d’image.',
	'DIGESTS_BOARD_LIMIT'				=> '%d (limite du forum)',
	'DIGESTS_BY'						=> 'Par',
	'DIGESTS_CLOSED_QUOTE'				=> ' »',
	'DIGESTS_CLOSED_QUOTE_TEXT'			=> ' »',
	'DIGESTS_COUNT_LIMIT'				=> 'Nombre maximal de messages dans le résumé',
	'DIGESTS_COUNT_LIMIT_EXPLAIN'		=> 'Saisissez un nombre supérieur à 0 si vous souhaitez limiter le nombre de messages dans le résumé.',
	'DIGESTS_DAILY'						=> 'Quotidien',
	'DIGESTS_DATE'						=> 'Date',
	'DIGESTS_DELIMITER'					=> ' ‹ ', // Utilisé pour faciliter l'affichage de la hiérarchie des noms de forum depuis l'index jusqu'en bas. Ne devrait pas changer dans les traductions linguistiques, sauf si un caractère différent est utilisé dans le fil d'Ariane.
	'DIGESTS_DISABLED_MESSAGE'			=> 'Pour accéder aux options de cette page, accédez au menu « Options de base » puis sélectionnez un type de résumé',
		'DIGESTS_DISCLAIMER_HTML'			=> '<p><a href="%5$s">Désabonnement en un clic</a></p><p>Vous pouvez aussi modifier ou supprimer votre abonnement aux forums depuis le <a href="%1$sucp.%3$s">Panneau de contrôle de l’utilisateur</a>.</p><p>Si vous avez des questions ou souhaitez nous contacter, veuillez adresser votre courriel à <a href="mailto:%4$s?subject=Digests">l’administrateur du forum %2$s</a>.</p>',
	'DIGESTS_DISCLAIMER_TEXT'			=> 'Désabonnement en un clic : %5$s
	
Vous pouvez aussi modifier ou supprimer votre abonnement aux forums depuis le Panneau de contrôle de l’utilisateur.
	
Si vous avez des questions ou souhaitez nous contacter, veuillez adresser votre courriel à l’administrateur du forum : %4$s.',
	'DIGESTS_EXPLANATION'				=> 'Les résumés récapitulent les messages publiés sur le forum et vous sont envoyés périodiquement par courriel. Ils peuvent être expédiés quotidiennement, hebdomadairement ou mensuellement, à l’heure de votre choix. Vous pouvez sélectionner les forums de votre choix ou, par défaut, demander à recevoir tous les messages des forums auxquels vous avez accès. Vous pouvez annuler votre abonnement à tout moment, simplement en revenant sur cette page. Nombreux sont les utilisateurs qui trouvent ces résumés très utiles. Nous vous encourageons à faire un essai !',
	'DIGESTS_FILTER_ERROR'				=> 'Le générateur de courriels a été appelé avec un user_digest_filter_type = %s invalide',
	'DIGESTS_FILTER_FOES'				=> 'Retirer du résumé les messages émis par les membres ignorés',
	'DIGESTS_FILTER_TYPE'				=> 'Type de messages à afficher dans le résumé',
	'DIGESTS_FOREIGN_LINK_REMOVED'		=> '[ Lien externe supprimé. Cliquez sur le lien du message ou du sujet pour voir ce lien. ]',
	'DIGESTS_FOREIGN_LINK_REMOVED_TEXT'	=> '[ Lien externe supprimé. Lisez le sujet du forum pour voir ce lien. ]',
	'DIGESTS_FORMAT_HTML'				=> 'Format HTML',
	'DIGESTS_FORMAT_HTML_EXPLAIN'		=> 'Les résumés seront envoyés au format HTML en utilisant les couleurs et polices du forum.',
	'DIGESTS_FORMAT_HTML_CLASSIC'		=> 'Format HTML présenté en tableaux',
	'DIGESTS_FORMAT_HTML_CLASSIC_EXPLAIN'	=> 'Similaire à Format HTML, mais les messages des sujets et les messages privés sont présentés dans des tableaux',
	'DIGESTS_FORMAT_PLAIN'				=> 'Format HTML simple',
	'DIGESTS_FORMAT_PLAIN_EXPLAIN'		=> 'Les résumés seront envoyés au format HTML sans couleur ni police',
	'DIGESTS_FORMAT_PLAIN_CLASSIC'		=> 'Format HTML simple présenté en tableaux',
	'DIGESTS_FORMAT_PLAIN_CLASSIC_EXPLAIN'	=> 'Similaire à Format HTML simple, mais les messages des sujets et les messages privés sont présentés dans des tableaux',
	'DIGESTS_FORMAT_STYLING'			=> 'Formatage du résumé',
	'DIGESTS_FORMAT_STYLING_EXPLAIN'	=> 'Veuillez noter que le rendu visuel peut varier selon le logiciel de courriel utilisé. Survolez un type de formatage pour en savoir davantage à son sujet.',
	'DIGESTS_FORMAT_TEXT'				=> 'Texte brut',
	'DIGESTS_FORMAT_TEXT_EXPLAIN'		=> 'Aucun formatage ne sera appliqué aux résumés. Seul du texte brut sera affiché, probablement dans une police à espacement fixe.',
	'DIGESTS_FORUMS_WANTED'				=> 'Forums souhaités',
	'DIGESTS_FREQUENCY'					=> 'Fréquence d’envoi du résumé',
	'DIGESTS_FREQUENCY_EXPLAIN'			=> 'Les résumés hebdomadaires sont envoyés le %s. Les résumés mensuels sont envoyés le premier du mois. Le temps universel coordonné (UTC) est utilisé pour déterminer le jour de la semaine.',
	'DIGESTS_FREQUENCY_SHORT'			=> 'Type de résumé',
	'DIGESTS_HOURS_ABBREVIATION' 		=> ' h',	// cf. : http://www.scienceeditingexperts.com/which-is-the-correct-abbreviation-for-hours-2h-2-h-2hs-2-hs-2hrs-or-2-hrs, DIGESTS_AM and DIGESTS_PM sont sinon utilisés si spécifié dans user_dateformat
	'DIGESTS_INSTALL_REQUIREMENTS'		=> 'Votre version de phpBB doit être > 3.3.0 et < 4.0 pour installer cette extension. Veuillez résoudre ce problème, puis réessayer d’activer l’extension.',
	'DIGESTS_INTRODUCTION' 				=> 'Voici le résumé des derniers messages publiés sur les forums de %s. <em>Ne répondez pas</em> à ce courriel pour répondre aux sujets, messages ou messages privés. <em>Veuillez plutôt vous rendre sur le forum</em> pour rejoindre la discussion ! En cas de problème d’affichage du résumé, assurez-vous de bien avoir chargé tout le contenu distant.',
	'DIGESTS_JUMP_TO_MSG'				=> 'Id Msg',
	'DIGESTS_JUMP_TO_POST'				=> 'Id Post',
	'DIGESTS_LASTVISIT_RESET'			=> 'Réinitialiser la date de ma dernière visite lorsque je reçois un résumé',
	'DIGESTS_LASTVISIT_RESET_EXPLAIN'	=> 'Lorsque l’option est activée, la date et l’heure de création de votre résumé seront utilisées pour mettre à jour votre date de dernière visite. Les notifications relatives aux sujets à l’heure à laquelle le résumé a été créé seront également marquées comme lues.',
	'DIGESTS_LINK'						=> 'Lien',
	'DIGESTS_MAILED_TOOLTIP'			=> 'Cliquez pour voir le détail des résumés envoyés',
	'DIGESTS_MARK_READ'					=> 'Marquer comme lu lorsqu’ils apparaissent dans le résumé',
	'DIGESTS_MAX_DISPLAY_WORDS'			=> 'Nombre maximal de mots à afficher dans un message',
	'DIGESTS_MAX_DISPLAY_WORDS_EXPLAIN'	=> 'Afin d’assurer un rendu cohérent, si un message doit être tronqué, le code HTML sera supprimé du message. Saisissez 0 pour autoriser l’affichage intégral du texte du message. Si l’option « N’afficher aucun texte de message » est cochée, ce champ sera ignoré et aucun texte de message n’apparaîtra dans le résumé.',
	'DIGESTS_MAX_SIZE'					=> 'Nombre maximal de mots à afficher dans un message',
	'DIGESTS_MAX_WORDS_NOTIFIER'		=> '… ',
	'DIGESTS_MIN_SIZE'					=> 'Nombre minimal de mots dans un message pour que celui-ci apparaisse dans le résumé',
	'DIGESTS_MIN_SIZE_EXPLAIN'			=> 'Si vous laissez ce champ à 0, tous les messages seront inclus dans le résumé, quel que soit le nombre de mots qu’ils contiennent.',
	'DIGESTS_MIN_POPULARITY_VALUE'		=> 'Valeur minimale de popularité',
	'DIGESTS_MIN_POPULARITY_VALUE_EXPLAIN'		=> 'Un sujet doit comporter au moins ce nombre de messages par jour sur la période que vous avez sélectionnée pour l’envoi de votre résumé (quotidien, hebdomadaire ou mensuel) afin d’apparaître dans votre résumé. La valeur saisie ne peut pas être inférieure à celle définie par l’administrateur du forum.',
	'DIGESTS_MONTHLY'					=> 'Mensuel',
	'DIGESTS_NEW'						=> 'Nouveau',
	'DIGESTS_NEW_POSTS_ONLY'			=> 'N’afficher que les nouveaux messages dans le résumé',
	'DIGESTS_NEW_POSTS_ONLY_EXPLAIN'	=> 'Cette option filtre tout message publié avant la date et l’heure de votre dernière visite sur ce forum. Si vous le visitez fréquemment et si vous lisez la plupart des messages, cela évitera l’affichage de messages redondants dans votre résumé. Vous risquez cependant d’en manquer certains dans les forums que vous n’avez pas lus.',
	'DIGESTS_NO_BOOKMARKED_POSTS'		=> 'Il n’y a pas de nouveau message marqué.',
	'DIGESTS_NO_CONSTRAINT'				=> 'Pas de limitation',
	'DIGESTS_NO_DETAILS_ERROR'			=> 'La base de données est peut-être incohérente. Aucun enregistrement de résumé détaillé n’a été trouvé pour cette date et cette heure.',
	'DIGESTS_NO_FORUMS_AVAILABLE'		=> 'Vous n’avez pas accès aux forums',
	'DIGESTS_NO_FORUMS_CHECKED' 		=> 'Au moins un forum doit être coché',
	'DIGESTS_NO_LIMIT'					=> 'Pas de limitation',
	'DIGESTS_NO_POSTS'					=> 'Il n’y a pas de nouveau message.',
	'DIGESTS_NO_POST_TEXT'				=> 'N’afficher aucun texte de message',
	'DIGESTS_NO_PRIVATE_MESSAGES'		=> 'Vous n’avez pas de nouveau message privé, ni de message privé non lu.',
	'DIGESTS_NO_TIMEZONE'				=> 'Vous devez spécifier <a href="%s">votre fuseau horaire/a> dans votre profil avant d’envoyer des résumés.',
	'DIGESTS_NONE'						=> 'Aucun (non abonné)',
	'DIGESTS_ON'						=> 'le',
	'DIGESTS_OPEN_QUOTE'				=> '« ',
	'DIGESTS_OPEN_QUOTE_TEXT'			=> '« ',
	'DIGESTS_PM'						=> ' PM', // non utilisé si les formats date/heure ne pemettent pas AM et PM
	'DIGESTS_PM_SUBJECT'				=> 'Sujet du message privé',
	'DIGESTS_POST_IMAGE_TEXT'			=> '<br>(Cliquez sur l’image pour l’afficher en taille réelle.)',
	'DIGESTS_POST_TEXT'					=> 'Texte du message',
	'DIGESTS_POST_TIME'					=> 'Date',
	'DIGESTS_POST_SIGNATURE_DELIMITER'	=> '<br>____________________<br>', // Placez ici du code HTML que vous souhaitez utiliser pour délimiter la fin d’un message du début de la ligne de signature (assurez-vous qu'il s'agisse de code HTML valide)
	'DIGESTS_POSTED_TO_THE_TOPIC'		=> 'posté sur le sujet',
	'DIGESTS_POSTS_TYPE_ANY'			=> 'Tous les messages',
	'DIGESTS_POSTS_TYPE_FIRST'			=> 'Le premier message des sujets',
	'DIGESTS_POWERED_BY'				=> 'phpBB Services',
	'DIGESTS_POWERED_BY_TEXT'			=> 'Extension Digests pour phpBB créée par',
	'DIGESTS_PRIVATE_MESSAGES_IN_DIGEST'	=> 'Ajouter mes messages privés non lus au résumé',
	'DIGESTS_PUBLISH_DATE'				=> 'Ce résumé a spécialement été généré pour %1$s le %2$s',
	'DIGESTS_REGISTER'					=> 'Recevoir des résumés ',
	'DIGESTS_REGISTER_EXPLAIN'			=> 'Vous pourrez modifier les réglages du résumé envoyé par courriel (ou bien vous désabonner) après avoir terminé l’enregistrement. Les valeurs par défaut du forum seront utilisées.',
	'DIGESTS_REMOVE_YOURS'				=> 'Exclure mes messages du résumé',
	'DIGESTS_REPLY'						=> 'Réponse',
	'DIGESTS_ROBOT'						=> 'Robot',
	'DIGESTS_SALUTATION' 				=> 'Bonjour',
	'DIGESTS_SEE_POPULAR_TOPICS_ONLY'	=> 'N’afficher que les sujets populaires',
	'DIGESTS_SELECT_FORUMS'				=> 'Inclure les messages des forums suivants',
	'DIGESTS_SELECT_FORUMS_EXPLAIN'		=> 'Veuillez noter que les catégories et les forums affichés sont uniquement ceux que vous êtes autorisés à lire. Le choix des forums est désactivé lorsque vous sélectionnez « Sujets cochés uniquement ». Les forums dont les accès sont protégés par mot de passe ne sont pas affichés et ne peuvent pas être sélectionnés. Si tous les forums sont décochés et si aucun sujet n’est coché, vous devez sélectionner au moins un forum afin de pouvoir soumettre correctement votre paramétrage.<br><br>Lorsque le nom d’un forum est affiché en caractères gras, cela signifie que l’administrateur force son affichage dans tous les résumés (autres que les seuls sujets cochés). Vous ne pouvez pas désélectionner ces forums. Les forums dont les noms sont barrés ne sont pas autorisés, par l’administrateur, à être affichés dans un résumé (autres que les seuls sujets cochés) et sont de ce fait décochés.',
	'DIGESTS_SEND_HOUR' 				=> 'Heure d’envoi',
	'DIGESTS_SEND_HOUR_EXPLAIN'			=> 'L’heure de réception du courriel contenant votre résumé est déterminée à partir du fuseau horaire que vous avez défini dans l’onglet « Préférences » du forum.',
	'DIGESTS_SEND_ON_NO_POSTS'	 		=> 'Envoyer un résumé s’il n’y a pas de nouveau message',
	'DIGESTS_SENDER'	 				=> 'Expéditeur',
	'DIGESTS_SENT_AT'					=> ' a reçu un résumé à ',
	'DIGESTS_SENT_TO'					=> 'envoyé à',
	'DIGESTS_SENT_YOU_A_MESSAGE'		=> 'vous envoie un message privé ayant pour objet',
	'DIGESTS_SHOW_ATTACHMENTS' 			=> 'Afficher les fichiers joints',
	'DIGESTS_SHOW_ATTACHMENTS_EXPLAIN'	=> 'Si l’option est activée, les images en fichiers joints apparaîtront dans votre résumé en bas du message ou du message privé. Les fichiers joints qui ne sont pas des images apparaîtront sous la forme de liens (résumés formatés uniquement). La balise BBCode [img] n’est pas affectée par ce réglage.',
	'DIGESTS_SHOW_NEW_POSTS_ONLY' 		=> 'Afficher uniquement les nouveaux messages',
	'DIGESTS_SHOW_PMS' 					=> 'Afficher mes messages privés',
	'DIGESTS_SIZE_ERROR'				=> 'Ce champ est obligatoire. Vous devez saisir une valeur positive entière, inférieure ou égale à la valeur maximale autorisée par l’administrateur du forum. Le maximum autorisé est %u. Si cette valeur est 0, il n’y a pas de limitation.',
	'DIGESTS_SIZE_ERROR_MIN'			=> 'Vous devez saisir une valeur entière ou laisser le champ vide. Si cette valeur est 0, il n’y a pas de limitation.',
	'DIGESTS_SKIP'						=> 'Passer au contenu',
	'DIGESTS_SKIPPED_AT'				=> ' n’a pas reçu de résumé à ',
	'DIGESTS_SKIPPED_TOOLTIP'			=> 'Cliquez pour voir le détail des résumés ignorés',
	'DIGESTS_SORT_BY'					=> 'Ordre de classement des messages',
	'DIGESTS_SORT_BY_EXPLAIN'			=> 'Tous les résumés sont classés par catégories puis par forums, tels qu’affichés sur l’index du forum. Les options de classement s’appliquent à l’ordre d’affichage des messages dans les forums et les sujets. Le classement « Ordre traditionnel » est utilisé par défaut depuis phpBB 2. Il présente d’abord le sujet dans lequel le dernier message a été publié (ordre descendant) puis les messages par ordre chronologique dans le sujet.',
	'DIGESTS_SORT_FORUM_TOPIC'			=> 'Ordre traditionnel',
	'DIGESTS_SORT_FORUM_TOPIC_DESC'		=> 'Ordre traditionnel, dernier message en premier',
	'DIGESTS_SORT_POST_DATE'			=> 'Du plus ancien au plus récent',
	'DIGESTS_SORT_POST_DATE_DESC'		=> 'Du plus récent au plus ancien',
	'DIGESTS_SORT_USER_ORDER'			=> 'Selon les préférences d’affichage de mon forum',
	'DIGESTS_SUBJECT_TITLE'				=> '%1$s : résumé %2$s',
	'DIGESTS_TAG_REPLACED'				=> '<strong>Note : le contenu a été supprimé pour des raisons de sécurité. Cliquez sur le lien du message ou du sujet pour visualiser l’intégralité du message.</strong>',
	'DIGESTS_TITLE'						=> 'Résumés',
	'DIGESTS_TRANSLATED_BY'				=> 'Traduit par',
	'DIGESTS_TRANSLATOR_NAME'			=> 'Philippe Bonnaure - www.macvf.fr',	// Leave null string to suppress translator name
	'DIGESTS_TRANSLATOR_CONTACT'		=> 'https://www.macvf.fr',	// Leave null string to suppress contact info, if used use: mailto:name@emailaddress.com or a URL if you have a website.
	'DIGESTS_TOC'						=> 'Sommaire',
	'DIGESTS_TOC_EXPLAIN'				=> 'Si le forum est très actif, vous pouvez inclure un sommaire dans votre résumé. Dans les résumés formatés, le sommaire comporte des liens qui permettent d’aller à un message en particulier ou à un message privé dans le résumé.',
	'DIGESTS_UNKNOWN'					=> 'Inconnu',
	'DIGESTS_UNREAD'					=> 'Non lu',
	'DIGESTS_UNSUBSCRIBE_FAILURE'		=> 'Nous n’avons hélas pas pu vous désabonner de la liste d’envoi des résumés.',
	'DIGESTS_UNSUBSCRIBE_SUCCESS'		=> 'Vous avez été désabonné de la liste d’envoi des résumés.',
	'DIGESTS_UPDATED'					=> 'Les réglages de votre résumé ont été enregistrés',
	'DIGESTS_USE_BOOKMARKS'				=> 'Sujets cochés uniquement',
	'DIGESTS_WEEKDAY' 					=> 'Dimanche,Lundi,Mardi,Mercredi,Jeudi,Vendredi,Samedi',
	'DIGESTS_WEEKLY'					=> 'Hebdomadaire',
	'DIGESTS_YOU_HAVE_PRIVATE_MESSAGES' => 'Vous avez de nouveaux messages privés',
	
	'UCP_DIGESTS'								=> 'Résumés',
	'UCP_DIGESTS_ADDITIONAL_CRITERIA'			=> 'Critères additionnels',
	'UCP_DIGESTS_ADDITIONAL_CRITERIA_OPTIONS'	=> 'Options des critères additionnels',
	'UCP_DIGESTS_BASICS'						=> 'Réglages généraux',
	'UCP_DIGESTS_BASICS_OPTIONS'				=> 'Options des réglages généraux',
	'UCP_DIGESTS_FORUMS_SELECTION'				=> 'Sélection des forums',
	'UCP_DIGESTS_FORUMS_SELECTION_OPTIONS'		=> 'Options de sélection des forums',
	'UCP_DIGESTS_MODE_ERROR'					=> 'Le module %s n’est pas reconnu par l’extension Digests',
	'UCP_DIGESTS_POST_FILTERS'					=> 'Filtrage des messages',
	'UCP_DIGESTS_POST_FILTERS_OPTIONS'			=> 'Options de filtrage des messages',
));
