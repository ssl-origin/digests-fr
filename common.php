<?php
/**
*
* @package phpBB Extension - Digests
* @copyright (c) 2016 Mark D. Hamill (mark@phpbbservices.com)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @french localisation by Philippe Bonnaure - Mac V.F - www.macvf.fr
************************************************************************************
* 12/01/17 : Initial localization
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

$lang = array_merge($lang, array(
	'DIGESTS_ALL_FORUMS'				=> 'Tous',
	'DIGESTS_AUTHOR'					=> 'Auteur',
	'DIGESTS_BAD_SEND_HOUR'				=> 'L\'heure d\'envoi du résumé de l\'utilisateur %s est invalide. Il est %d. La valeur doit être >= 0 et < 24.',
	'DIGESTS_BLOCK_IMAGES'				=> 'Bloquer les images',
	'DIGESTS_BLOCK_IMAGES_EXPLAIN'		=> 'Empêche l\'affichage des images dans vos résumés, y compris les smileys et les images jointes aux posts ou aux messages privés. Cela peut être utile pour les connexions lentes, lorsque l\'on est concerné par des limitations de bande passante ou pour les forums qui comportent de nombreuses images. Les résumés textuels n\'affichage jamais d\'images.',
	'DIGESTS_BOARD_LIMIT'				=> '%d (limite du Forum)',
	'DIGESTS_BY'						=> 'Par',
	'DIGESTS_CLOSED_QUOTE'				=> '"',
	'DIGESTS_COMMA'						=> ',',		// Utilisé pour les salutations
	'DIGESTS_COUNT_LIMIT'				=> 'Nombre de posts maximum dans le résumé',
	'DIGESTS_COUNT_LIMIT_EXPLAIN'		=> 'Saisissez un nombre supérieur à zéro si vous souhaitez limiter le nombre de posts dans le résumé.',
	'DIGESTS_DAILY'						=> 'Journalier',
	'DIGESTS_DATE'						=> 'Date',
	'DIGESTS_DISABLED_MESSAGE'			=> 'Pour activer les champs, sélectionnez Réglages généraux et sélectionnez le type de résumé',
	'DIGESTS_DISCLAIMER'				=> 'Ce résumé est envoyé aux membres enregistrés des forums <a href="%s">%s</a>. Vous pouvez modifier ou supprimer votre abonnement des forums depuis le <a href="%sucp.%s">Panneau de contrôle de l\'utilisateur</a>. Si vous avez des questions ou si vous souhaitez réagir veuillez le faire en vous adressant à <a href="mailto:%s?subject=Digests">%s webmaster</a>.',
	'DIGESTS_EXPLANATION'				=> 'Les résumés qui sont envoyés périodiquement sont constitués à partir des posts réalisés sur le forum. Les résumés peuvent être envoyés à une récurence journalière, hebdomadaire ou mensuelle et à une heure que vous choisisisez. Vous pouvez spécifier les forums dont les posts vous intéressent plus particulièrement, ou par défaut, vous pouvez sélectionner choisir de recevoir tous les posts de tous les forums. Vous pouvez annuler votre abonnement à tout moment en revenant simplement sur cette page. De nombreux utilisateurs trouvent ces résumés très utiles. Nous vous encourageons à faire un essai !',
	'DIGESTS_FILTER_ERROR'				=> 'Le générateur de courriels a été appelé avec un user_digest_filter_type = %s invalide',
	'DIGESTS_FILTER_FOES'				=> 'Retirer les posts des membres Ignorés',
	'DIGESTS_FILTER_TYPE'				=> 'Types des posts dans le résumé',
	'DIGESTS_FORMAT_HTML'				=> 'HTML',
	'DIGESTS_FORMAT_HTML_EXPLAIN'		=> 'Le HTML va permettre le formatage, l\'utilisation du BBCode et des signatures (si autorisé). Les feuilles de style sont appliquées si votre logiciel de courriers électronique l\'autorise.',
	'DIGESTS_FORMAT_HTML_CLASSIC'		=> 'HTML avec posts affichés dans des tables',
	'DIGESTS_FORMAT_HTML_CLASSIC_EXPLAIN'	=> 'Similaire au HTML, excepté que les sujets des posts sont listés dans des tables',
	'DIGESTS_FORMAT_PLAIN'				=> 'HTML pur',
	'DIGESTS_FORMAT_PLAIN_EXPLAIN'		=> 'Le HTML pur n\'applique pas les styles et les couleurs du forum',
	'DIGESTS_FORMAT_PLAIN_CLASSIC'		=> 'HTML pur avec posts affichés dans des tables',
	'DIGESTS_FORMAT_PLAIN_CLASSIC_EXPLAIN'	=> 'Similaire au HTML pur, excepté que les sujets des posts sont listés dans des tables',
	'DIGESTS_FORMAT_STYLING'			=> 'Style du résumé',
	'DIGESTS_FORMAT_STYLING_EXPLAIN'	=> 'Veuillez noter que le rendu actuel du style dépend des capacités de votre logiciel de courrier électronique. Déplacez votre curseur au-dessus des différents types de style pour en savoir plus à leur sujet.',
	'DIGESTS_FORMAT_TEXT'				=> 'Texte',
	'DIGESTS_FORMAT_TEXT_EXPLAIN'		=> 'Aucun texte codé en HTML n\'apparaîtra dans le résumé. Seul du texte sera affiché.',
	'DIGESTS_FORUMS_WANTED'				=> 'Forums souhaités',
	'DIGESTS_FREQUENCY'					=> 'Type de résumé souhaité',
	'DIGESTS_FREQUENCY_EXPLAIN'			=> 'Les résumés hebdomadaires sont envoyés le %s. Les résumés mensuels sont envoyés le premier du mois. Le temps universel coordonné (UTC) est utilisé pour déterminer le jour de la semaine.',
	'DIGESTS_FREQUENCY_SHORT'			=> 'Type de résumé',
	'DIGESTS_INTRODUCTION' 				=> 'Voici le dernier résumé des posts des forums %s. Veuillez visiter le forum et rejoindre le fil de discussion !',
	'DIGESTS_JUMP_TO_MSG'				=> 'ID Msg', 
	'DIGESTS_JUMP_TO_POST'				=> 'ID Post', 
	'DIGESTS_LASTVISIT_RESET'			=> 'Réinitialiser la date de ma dernière visite lorsque je m\'envoie un résumé',
	'DIGESTS_LASTVISIT_RESET_EXPLAIN'	=> 'Lorsque l\'option est activée, les posts sur le forum apparaîtront comme lu s\'ils ont été postés avant la date et l\'heure de création de votre résumé. La sélection de cette option permet d\'indiquer au forum que la lecture des posts de votre résumé équivaut à la lecture de ces posts sur le forum.',
	'DIGESTS_LINK'						=> 'Lien',
	'DIGESTS_MARK_READ'					=> 'Marqué comme lu lorsqu\'ils apparaissent dans le résumé',
	'DIGESTS_MAX_DISPLAY_WORDS'			=> 'Nombre maximal de mots à afficher dans un post',
	'DIGESTS_MAX_DISPLAY_WORDS_EXPLAIN'	=> 'Afin d\'assurer un rendu cohérent, si un post doit être tronqué le code HTML sera supprimé du post. Laissez vide ou indiquez 0 pour autoriser l\'affichage intégral du texte du post. Si l\'option &quot;N\'afficher aucun texte de posts&quot; est cochée, ce champ sera ignoré et aucun texte de post n\'apparaîtra dans le résumé.',
	'DIGESTS_MAX_SIZE'					=> 'Nombre maximal de mots à afficher dans un post',
	'DIGESTS_MAX_WORDS_NOTIFIER'		=> '... ',
	'DIGESTS_MIN_SIZE'					=> 'Nombre minimal de mots dans un post pour que celui-ci apparaisse dans le résumé',
	'DIGESTS_MIN_SIZE_EXPLAIN'			=> 'Si vous laissez ce champ vide ou si vous indiquez 0, tous les posts, quel que soit leur nombre de mots sera inclus dans le résumé.',
	'DIGESTS_MONTHLY'					=> 'Mensuel',
	'DIGESTS_NEW'						=> 'Nouveau',
	'DIGESTS_NEW_POSTS_ONLY'			=> 'N\'afficher que les nouveaux posts',
	'DIGESTS_NEW_POSTS_ONLY_EXPLAIN'	=> 'Cette option va filtrer tous les posts qui ont été postés avant la date et l\'heure de votre dernière visite sur ce forum. Si vous visitez le forum fréquemment et que vous lisez la plupart des posts, cela évitera l\'affichage de posts redondants dans votre résumé. Vous risquez cependant de manquer certains posts dans des forums que vous n\'avez pas lu.',
	'DIGESTS_NO_BOOKMARKED_POSTS'		=> 'Il n\'y a pas de nouveaux posts marqués.',
	'DIGESTS_NO_CONSTRAINT'				=> 'Sans contrainte',
	'DIGESTS_NO_FORUMS_CHECKED' 		=> 'Au moins un forum doit être coché',
	'DIGESTS_NO_LIMIT'					=> 'Sans limitation',
	'DIGESTS_NO_POSTS'					=> 'Il n\'y a pas de nouveaux posts.',
	'DIGESTS_NO_POST_TEXT'				=> 'N\'afficher aucun texte de posts',
	'DIGESTS_NO_PRIVATE_MESSAGES'		=> 'Vous n\'avez pas de messages privés nouveaux ou non lus.',
	'DIGESTS_NO_TIMEZONE'				=> 'Vous devez spécifier <a href="%s">votre fuseau horaire/a> dans votre profil avant d\'envoyer des résumés.',
	'DIGESTS_NONE'						=> 'Aucun (Désabonné)',
	'DIGESTS_ON'						=> 'Actif',
	'DIGESTS_OPEN_QUOTE'				=> '"',
	'DIGESTS_POST_IMAGE_TEXT'			=> '<br />(Cliquez sur l\'image pour l\'afficher en taille réelle.)',
	'DIGESTS_POST_TEXT'					=> 'Texte du post', 
	'DIGESTS_POST_TIME'					=> 'Heure du post', 
	'DIGESTS_POST_SIGNATURE_DELIMITER'	=> '<br />____________________<br />', // Placez ici du code HTML (assurez-vous qu'il s'agisse de code HTML valide) que vous souhaitez utiliser pour délimiter la fin d\'un post du début de la ligne de signature
	'DIGESTS_POSTED_TO_THE_TOPIC'		=> 'posté sur le sujet',
	'DIGESTS_POSTS_TYPE_ANY'			=> 'Tous les posts',
	'DIGESTS_POSTS_TYPE_FIRST'			=> 'Le premier post des sujets',
	'DIGESTS_POWERED_BY'				=> 'phpbbservices.com - traduction française www.macvf.fr',
	'DIGESTS_POWERED_BY_TEXT'			=> 'Extension Digests pour phpBB 3.1 créé par',
	'DIGESTS_PRIVATE_MESSAGES_IN_DIGEST'	=> 'Ajouter mes messages privés non lus',
	'DIGESTS_PUBLISH_DATE'				=> 'Le résumé a tout particulièrement été publié pour %s le %s',
	'DIGESTS_REGISTER'					=> 'Résumés reçus',
	'DIGESTS_REGISTER_EXPLAIN'			=> 'Les valeurs par défaut du forum seront utilisées. Vous pouvez ajuster les réglages du résumé ou vous désabonner après avoir terminé l\'enregistrement.',
	'DIGESTS_REMOVE_YOURS'				=> 'Retirer mes posts',
	'DIGESTS_REPLY'						=> 'Répondre',
	'DIGESTS_ROBOT'						=> 'Robot',
	'DIGESTS_SALUTATION' 				=> 'Bonjour',
	'DIGESTS_SELECT_FORUMS'				=> 'Inclure les posts de ces forums',
	'DIGESTS_SELECT_FORUMS_EXPLAIN'		=> 'Veuillez noter que les catégories et les forums affichés sont ceux que vous êtes autorisés à lire seulement. Le choix des forums est désactivé lorsque vous sélectionnez Sujets cochés seulement. Les forums dont les accès sont protégés par mot de passe ne sont pas affichés et ne peuvent pas être sélectionnés. Vous devez cocher au moins un forum lorsque l\'option Tous est décochée et qu\'aucun forum n\'est coché, afin de pouvoir soumettre correctement votre paramétrage.<br /><br />Les forums dont le nom est affiché en caractères gras (s\'il y en a) sont des forums que l\'administrateur force à afficher dans tous les résumés (autres que les seuls sujets cochés). Vous ne pouvez pas déselectionner ces forums. Les forums dont le nom est barré ne sont pas autorisés par l\'administrateur à être affichés dans un résumé (autres que les seuls sujets cochés) et sont de ce fait décochés.',
	'DIGESTS_SEND_HOUR' 				=> 'Heure d\'envoi',
	'DIGESTS_SEND_HOUR_EXPLAIN'			=> 'L\'heure de réception du résumé est l\'heure basée sur le fuseau horaire que vous avez défini dans les préférences du forum.',
	'DIGESTS_SEND_IF_NO_NEW_MESSAGES'	=> 'Envoyer le résumé s\'il n\'y a pas de nouveau messages :',
	'DIGESTS_SEND_ON_NO_POSTS'	 		=> 'Envoyer un résumé s\'il n\'y a pas de nouveau posts',
	'DIGESTS_SENDER'	 				=> 'Expéditeur',
	'DIGESTS_SENT_TO'					=> 'envoyé à',
	'DIGESTS_SENT_YOU_A_MESSAGE'		=> 'vous envoie un message privé ayant pour objet',
	'DIGESTS_SHOW_ATTACHMENTS' 			=> 'Afficher les pièces jointes',
	'DIGESTS_SHOW_ATTACHMENTS_EXPLAIN'	=> 'Si l\'option est activée, les images en pièces jointes apparaîtront dans votre résumé en bas du post ou du message privé. Les pièces jointes qui ne sont pas des images apparaîtront sous la forme de liens (résumés HTML seulement). La balise BBCode [img] n\'est pas impactée par ce réglage.',
	'DIGESTS_SHOW_NEW_POSTS_ONLY' 		=> 'Afficher les nouveaux posts seulement',
	'DIGESTS_SHOW_PMS' 					=> 'Afficher mes messages privés',
	'DIGESTS_SIZE_ERROR'				=> sprintf("Ce champ est un champ obligatoire. Vous devez saisir une valeur positive entière, inférieure ou égale à la valeur maximum autorisée par l'administrateur du Forum. La valeur maximale autorisée est %u. Si cette valeur est à zéro, il n'y a pas de limitation.", $config['phpbbservices_digests_max_items']),
	'DIGESTS_SIZE_ERROR_MIN'			=> 'Vous devez saisir une valeur entière ou laisser le champ vide. Si cette valeur est à zéro, il n\'y a pas de limitation.',
	'DIGESTS_SKIP'						=> 'Conserver le contenu',
	'DIGESTS_SORT_BY'					=> 'Ordre de classement des posts',
	'DIGESTS_SORT_BY_EXPLAIN'			=> 'Tous les résumés sont classés par catégories puis par forums, tels qu\'ils sont affiché sur l\'index principal. Les options de classement s\'appliquent à l\'ordre d\'affichage des posts dans les forum et les sujets. Ordre traditionnel est le classement par défaut utilisé depuis phpBB 2, qui correspond au sujet dans lequel le dernier post à été publié (ordre descendant) puis par ordre temporel dans le sujet.',
	'DIGESTS_SORT_FORUM_TOPIC'			=> 'Ordre traditionnel',
	'DIGESTS_SORT_FORUM_TOPIC_DESC'		=> 'Ordre traditionnel, Dernier post en premier',
	'DIGESTS_SORT_POST_DATE'			=> 'Du plus ancien au plus récent',
	'DIGESTS_SORT_POST_DATE_DESC'		=> 'Du plus récent au plus ancien',
	'DIGESTS_SORT_USER_ORDER'			=> 'Utiliser les préférences d\'affichage de mon forum',
	'DIGESTS_SUBJECT_TITLE'				=> 'Résumé %s %s',
	'DIGESTS_TITLE'						=> 'Résumés',
	'DIGESTS_TOC'						=> 'Sommaire',
	'DIGESTS_TOC_EXPLAIN'				=> 'Si le forum est très actif, vous pouvez inclure un sommaire dans votre résumé. Dans les résumés HTML, le sommaire comporte des liens qui permettent de sauter à un post en particulier ou à un message privé dans le résumé.',
	'DIGESTS_UNKNOWN'					=> 'Inconnu',
	'DIGESTS_UNREAD'					=> 'Non lu',
	'DIGESTS_UPDATED'					=> 'Les réglages de votre résumé ont été enregistrés',
	'DIGESTS_USE_BOOKMARKS'				=> 'Sujets cochés seulement',
	'DIGESTS_WEEKDAY' => array(
		0	=> 'Dimanche',
		1 	=> 'Lundi',
		2	=> 'Mardi',
		3	=> 'Mercredi',
		4	=> 'Jeudi',
		5	=> 'Vendredi',
		6	=> 'Samedi'),
	'DIGESTS_WEEKLY'					=> 'Hebdomadaire',
	'DIGESTS_YOU_HAVE_PRIVATE_MESSAGES' => '%s a des messages privés',
	'DIGESTS_YOUR_DIGEST_OPTIONS' 		=> 'Options du résumé pour %s :',
	
	'UCP_DIGESTS'								=> 'Résumés',
	'UCP_DIGESTS_ADDITIONAL_CRITERIA'			=> 'Critères additionnels',
	'UCP_DIGESTS_ADDITIONAL_CRITERIA_OPTIONS'	=> 'Options des critères additionnels',
	'UCP_DIGESTS_BASICS'						=> 'Réglages généraux',
	'UCP_DIGESTS_BASICS_OPTIONS'				=> 'Options des réglages généraux',
	'UCP_DIGESTS_FORUMS_SELECTION'				=> 'Sélection des forums',
	'UCP_DIGESTS_FORUMS_SELECTION_OPTIONS'		=> 'Options de sélection des forums',
	'UCP_DIGESTS_MODE_ERROR'					=> 'Digests a été appelé avec un mode de %s invalide',
	'UCP_DIGESTS_POST_FILTERS'					=> 'Filtrage des posts',
	'UCP_DIGESTS_POST_FILTERS_OPTIONS'			=> 'Option de filtrage des posts',
));
