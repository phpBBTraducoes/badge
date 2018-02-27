<?php
/**
*
* Badge Award extension for the phpBB Forum Software package.
* Brazilian Portuguese translation by eunaumtenhoid (c) 2018 [ver 1.4.0] (https://github.com/phpBBTraducoes)
* @copyright (c) 2015 SiteSplat All rights reserved
* @license Proprietary
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'BADGE_MANAGE'			    => 'Prêmios de Emblema',
	'BADGE_MANAGE_EXPLAIN'	    => 'Uma visão geral de todos os emblemas premiados',
	'BADGE_RECENT'			    => 'Prêmios Recentes',
	'BADGE_USER'			    => 'Prêmios de emblema do usuário',
	'BADGE_INTRO_TITLE'		    => 'Emblema você que decide!',
	'BADGE_INTRO_TEASER_BODY'	=> 'Se você ganhou uma competição, ajudou ou até se juntou a nós, estamos felizes em celebrar sua contribuição para a nossa comunidade.',
	'BADGE_INTRO'	            => 'Se você ganhou uma competição, ajudou ou até se juntou a nós, estamos felizes em celebrar sua contribuição para a nossa comunidade.',
	'BADGE_AWARDS_TOPIC'	    => 'Prêmios',
	'BADGE_WALL_TITLE'	        => 'Meu mural da coleção de prêmios',
	
	'UCP_BADGE_TITLE'		    => 'Prêmios de Emblemas',
	'UCP_BADGE_EXPLAIN'		    => 'Uma visão geral de todos os seus emblemas premiados',

	// Conditions
	'BADGE_TYPE_AVATAR'			=> 'Avatar',
	'BADGE_TYPE_BADGES'			=> 'Emblemas Premiados',
	'BADGE_TYPE_BIRTHDAYS'		=> 'Idade do usuário',
	'BADGE_TYPE_CUSTOM'			=> 'Personalizadas',
	'BADGE_TYPE_DONATIONS'		=> 'Doações',
	'BADGE_TYPE_LIKEDD'			=> 'LikeBB',
	'BADGE_TYPE_MEMBERSHIP'		=> 'Dias de membro',
	'BADGE_TYPE_POSTS'			=> 'Posts',
	'BADGE_TYPE_PROFILEWALL'	=> 'Mural do perfil',
	'BADGE_TYPE_SIGNATURE'		=> 'Assinatura',
	'BADGE_TYPE_WARNINGS'		=> 'Advertência',
	'BADGE_TYPE_ZEBRA_FOES'		=> 'Inimigos',
	'BADGE_TYPE_ZEBRA_FRIENDS'	=> 'Amigos',

	'BADGE_USED'				=> 'usado',
	'BADGE_BETWEEN'				=> 'entre',
	'BADGE_AND'					=> 'e',
	'BADGE_MORE'				=> 'igual ou mais que',
	'MORE_BADGES'				=> '<a class="badge-more" href="%1$s"><span class="hidden-xs">&#43;%2$s mais</span><i class="visible-xs-inline-block fa fa-plus-circle"></i></a>',

	// Notifications
	'BADGE_NOTIFICATION_EVENT_ADDED'	=> '<strong>Emblemas atualizados</strong>:<br />Um novo emblema %1$s foi adicionado.',
	'BADGE_NOTIFICATION_EVENT_REMOVED'	=> '<strong>Emblemas atualizados</strong>:<br />Um emblema %1$s foi removido.',
	'BADGE_WHOHOO'	                    => 'Whoohoo!!! Há um novo emblema brilhante para comemorar, parabéns!<hr><strong>Você acabou de desbloquear um novo emblema</strong>, vá para <a href="%1$s">sua página de emblema</a> para ver todos eles!',

	// Misc
	'BADGE_LINK_AD'	                    => 'BBAwards por SiteSplat',
	'BADGE_LINK_AD_TITLE'	            => 'Temas Premium Profissionais e Extensões',
));
