<?php
/**
*
* search [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.0
* @package language: Brazilian Portuguese
* @original version $Id: search.php,v 1.26 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translator: phpBB Brasil - http://www.phpBBrasil.com.br/ - 2007-12-13 - 15:00
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
// phpBBrasil.com.br
$lang = array_merge($lang, array(
	'ALL_AVAILABLE'			=> 'Tudo disponível',
	'ALL_RESULTS'			=> 'Todos os Resultados',

	'DISPLAY_RESULTS'		=> 'Mostrar resultados',

	'FOUND_SEARCH_MATCH'	    => 'Foi encontrado %d vez',
	'FOUND_SEARCH_MATCHES'	    => 'Foi encontrado %d vezes',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'Foi encontrados mais de %d vezes',

	'GLOBAL'				=> 'Anúncio Global',

	'IGNORED_TERMS'			=> 'ignorado',
	'IGNORED_TERMS_EXPLAIN'	=> 'As seguintes palavras foram ignoradas na busca porque são palavras muito comuns: <strong>%s</strong>',

    'JUMP_TO_POST'			=> 'Pular para mensagem',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'O fórum requer que você seja registrado e esteja logado para ver suas próprias mensagens.',
// Mudanças 3.0.5
'LOGIN_EXPLAIN_UNREADSEARCH'=> 'A comunidade requer que esteja logado e seja registrado para rever os tópicos não visualizados ainda.',
  'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> 'Você especificou muitas palavras para sua busca. Por favor, não entre com mais do que %1$d palavras.',
// Mudanças 3.0.5
	'NO_KEYWORDS'			=> 'Você tem especificar pelo menos uma palavra para busca. Cada palavra tem que conter no mínimo %d caracteres e não pode conter mais do que %d caracteres.',//Not change the '%d'
	'NO_RECENT_SEARCHES'	=> 'Nenhuma busca foi feita recentemente.',
	'NO_SEARCH'				=> 'Desculpe-me, mas você não está permitido a usar a busca.',
	'NO_SEARCH_RESULTS'		=> 'Nenhum resultado foi encontrado.',
	'NO_SEARCH_TIME'		=> 'Desculpe, mas você não pode usar a busca no momento. Por favor, tente novamente daqui a alguns minutos.',
	'WORD_IN_NO_POST'		=> 'Nenhuma mensagem foi encontrada porque a palavra <strong>%s</strong> não foi achada em nenhuma mensagem.',
	'WORDS_IN_NO_POST'		=> 'Nenhuma mensagem foi encontrado porque as palavras <strong>%s</strong> não foram achadas em nenhuma mensagem.',

	'POST_CHARACTERS'		=> 'caracteres da mensagem',

	'RECENT_SEARCHES'		=> 'Buscas recentes',
	'RESULT_DAYS'			=> 'Limitar resultados anteriores',
	'RESULT_SORT'			=> 'Organizar resultado por',
	'RETURN_FIRST'			=> 'Retornar os primeiros',
	'RETURN_TO_SEARCH_ADV'	=> 'Retornar para a busca avançada',

	'SEARCHED_FOR'			    => 'Termo usado na busca',
	'SEARCHED_TOPIC'		    => 'Tópico procurado',
	'SEARCH_ALL_TERMS'		    => 'Procurar por todos os termos',
	'SEARCH_ANY_TERMS'		    => 'Procurar por qualquer termo',
	'SEARCH_AUTHOR'			    => 'Procurar por autor',
	'SEARCH_AUTHOR_EXPLAIN'	    => 'Use * como chave de busca para resultados parciais',
	'SEARCH_FIRST_POST'		    => 'Apenas a primeira mensagem dos tópicos',
	'SEARCH_FORUMS'			    => 'Buscar nos fóruns',
	'SEARCH_FORUMS_EXPLAIN'	    => 'Selecione o fórum ou os fóruns em que deseja procurar. A busca em Subfóruns é feita automaticamente se você não desabilitar a “busca de subfóruns“ logo abaixo.',
	'SEARCH_IN_RESULTS'		    => 'Procurar nesses resultados',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Coloque <strong>+</strong> na frente das palavras que tem que ser encontradas e coloque <strong>-</strong> nas palavras que <strong>não</strong> tem que ser encontradas. Coloque uma lista de palavras separadas por <strong>|</strong>. Use * como chave de busca para resultados parciais.',
	'SEARCH_MSG_ONLY'		    => 'Apenas mensagens de texto',
	'SEARCH_OPTIONS'		    => 'Opções de Busca',
	'SEARCH_QUERY'			    => 'Procurar consulta',
	'SEARCH_SUBFORUMS'		    => 'Procurar nos subfóruns',
	'SEARCH_TITLE_MSG'		    => 'Procurar no título e no corpo dos tópicos',
	'SEARCH_TITLE_ONLY'		    => 'Procurar somente no título dos tópicos',
	'SEARCH_WITHIN'			    => 'Procurar com',
	'SORT_ASCENDING'		    => 'Crescente',
	'SORT_AUTHOR'			    => 'Autor',
	'SORT_DESCENDING'		    => 'Decrescente',
	'SORT_FORUM'			    => 'Fórum',
	'SORT_POST_SUBJECT'		    => 'Assunto da Mensagem',
	'SORT_TIME'				    => 'Enviado em',

	'TOO_FEW_AUTHOR_CHARS'	=> 'Você deve especificar pelo menos %d caracteres do nome do autor.',
));

?>
