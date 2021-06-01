<?php
/**
*
* acp_search [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.0
* @package language: Brazilian Portuguese
* @original version $Id: search.php,v 1.21 2007/10/04 15:07:24 acydburn Exp $
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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Aqui você pode configurar o suporte para os índices das pesquisas. Se você normalmente só usa um suporte para as pesquisas, você deveria excluir todos os outros que não vai usar. Após alterar algumas configurações (número mínimo/máximo de caracteres) valerá a pena recriar o índice para poder refletir sobre as alterações.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Aqui você pode definir qual suporte de pesquisa será usado. Você pode configurar vários valores que podem determinar quanto processamento aquelas ações requerem. Algumas dessas configurações são as mesmas para todos os modos de procura.',

	'COMMON_WORD_THRESHOLD'					=> 'Limite de palavras comuns',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Palavras que existem em uma grande porcentagem de posts serão colocadas como comuns. Palavras comuns são ignoradas nas pesquisas. Configure para zero para desativar. Apenas tem efeito se ela está em mais de 100 mensagens. Se você desejar que palavras atualmente consideradas como comuns sejam reconsideradas, você terá de recriar o índice da busca.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Você tem certeza que deseja mudar para um diferente modo de pesquisa? Depois de mudar você terá que criar outro índice para seu novo modo. Se você não planeja voltar para um antigo modo de pesquisas, você pode deletá-lo.',
	'CONTINUE_DELETING_INDEX'				=> 'Continuar com o processo de remover previamente',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Um processo de remoção da índex foi inicializado. Em ordem para acessar a página inicial da busca você terá de completar isto ou cancelar.',
	'CONTINUE_INDEXING'						=> 'Continuar com o processo de indexação',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Um processo de indexação começou. Para acessar a página de pesquisa você terá que completar essa operação ou cancelá-la.',
	'CREATE_INDEX'							=> 'Criar índice',

	'DELETE_INDEX'							=> 'Excluir índice',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Apagamento do índice em progresso',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'O sistema de pesquisa está limpando seu índice. Isso pode levar alguns minutos.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'O modo de pesquisa por textos completos no MySQL só pode ser usado com MySQL4 e superiores.',
	'FULLTEXT_MYSQL_NOT_MYISAM'				=> 'Indexação de textos completos só pode ser usada com tabelas MyISAM.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Total de mensagens indexadas',
	'FULLTEXT_MYSQL_MBSTRING'				=> 'Suporte para caracteres non-latin UTF-8 usando mbstring:',
	'FULLTEXT_MYSQL_PCRE'					=> 'Suporte para caracteres non-latin UTF-8 usando PCRE:',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> 'Se o PCRE não tem propriedades de caractere unicode, a busca tentará utilizar o motor mbstring’s de expressões regulares.',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> 'Esta busca de fundo requer PCRE unicode propriedades de caracteres, disponível apenas em PHP 4.4, 5.1 e superior, se você quiser pesquisar por caracteres não latinos apenas.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Configuração geral de pesquisas',
	'GO_TO_SEARCH_INDEX'					=> 'Ir para o índice das pesquisas',

	'INDEX_STATS'							=> 'Estatísticas do índice',
	'INDEXING_IN_PROGRESS'					=> 'Indexação em progresso',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'O modo de pesquisa está no momento indexando todas as mensagens do fórum. Isso pode levar de alguns minutos &agrave; algumas horas dependendo do tamanho do seu fórum.',

	'LIMIT_SEARCH_LOAD'						=> 'Limite de tempo para carregar as pesquisas',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Se o 1 minuto de carregamento do sistema exceder esse valor, a página de pesquisa ficará offline, 1.0 equivale &agrave; 100% utilização de um processador. Isso só funciona em servidores baseados em UNIX.',

	'MAX_SEARCH_CHARS'						=> 'Número máximo de caracteres indexados por pesquisa',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Palavras que não tenham mais que esse número de caracteres serão indexados pela pesquisa.',
	'MIN_SEARCH_CHARS'						=> 'Número mínimo de caracteres indexados por pesquisa',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Palavras que tenham menos que esse número de caracteres serão indexados pela pesquisa.',
	
	// Mudanças 3.0.5
  'MAX_NUM_SEARCH_KEYWORDS'				=> 'Número máximo de palavras chaves permitidas',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'Número máximo de palavras que um usuário pode usar na busca. Se configurado como 0, eles poderão utilizar um número ilimitado.',
	// Mudanças 3.0.5
	
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Número mínimo de caracteres para se procurar por autor',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Os usuários têm de colocar no mínimo esse número de caracteres para poder fazer uma pesquisa pelo nome do autor. Se o nome de usuário do autor for menor que esse limite mínimo, você poderá fazer uma pesquisa pelo nome completo do autor.',

	'PROGRESS_BAR'							=> 'Barra de progresso',

	'SEARCH_GUEST_INTERVAL'					=> 'Intervalo de tempo entre as pesquisas para visitantes',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Número de segundos que os visitantes têm de esperar entre as pesquisas. Se um visitante fizer uma pesquisa, todos os outros têm de esperar o tempo mínimo para poderem fazer outra pesquisa.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> 'Todas as mensagens acima da id %1$d foram indexadas agora, do qual %2$d mensagens foram geradas com estes passos.<br />A taxa atual de indexação é de aproximadamente %3$.1f mensagens por segundo.<br />Indexação em progresso…',
	'SEARCH_INDEX_DELETE_REDIRECT'			=> 'Todas as mensagens acima da id %1$d foram removidas do sistema de busca.<br />Remoção em progresso…',
	'SEARCH_INDEX_CREATED'					=> 'Foram indexadas todas as mensagens no banco de dados desse fórum',
	'SEARCH_INDEX_REMOVED'					=> 'Foi apagado o índice de procura para esse modo.',
	'SEARCH_INTERVAL'						=> 'Intervalo de tempo entre as pesquisas',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Número de segundos que os usuários têm que esperar para fazer uma nova pesquisa. Esse intervalo é usado independente do usuário.',
	'SEARCH_STORE_RESULTS'					=> 'Tamanho do cache das pesquisas',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Configure como 0 se você quiser desabilitar o cache das pesquisas.',
	'SEARCH_TYPE'							=> 'Modo de pesquisa',
	'SEARCH_TYPE_EXPLAIN'					=> 'O phpBB permite &agrave; você escolher o modo de pesquisa que será usado. Por padrão, o phpBB irá usar seu próprio sistema de pesquisa por textos completos.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Você mudou o modo de pesquisa. Usando um novo modo de pesquisa você deve ter certeza que há um índice para o modo que você escolheu.',

	'TOTAL_WORDS'							=> 'Número total de palavras indexadas',
	'TOTAL_MATCHES'							=> 'Numero total de palavras relacionadas da pesquisa',

	'YES_SEARCH'							=> 'Habilitar pesquisas',
	'YES_SEARCH_EXPLAIN'					=> 'Habilitar o sistema de procura para os usuários, incluindo procura de membros.',
	'YES_SEARCH_UPDATE'						=> 'Habilitar a atualização do modo de texto completo',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'O modo de texto completo é atualizado quando se coloca uma mensagem, mesmo se a pesquisa está desabilitada.',
));

?>
