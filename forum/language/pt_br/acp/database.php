<?php
/**
*
* acp_database [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.1
* @package language: Brazilian Portuguese
* @original version $Id: database.php,v 1.25 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translator: phpBB Brasil - http://www.phpBBrasil.com.br/ - 2007-12-18 - 16:43
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
// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Aqui você pode fazer backup de todo seu conteúdo do phpBB. Você pode armazenar o arquivo resultante em sua pasta <samp>store/</samp> ou baixar ele diretamente. Dependendo da configuração de seu servidor você estará apto a comprimir o arquivo de diversas formas.',
	'ACP_RESTORE_EXPLAIN'	=> 'Isto irá fazer uma restauração completa de todas suas tabelas do phpBB de um arquivo antigo ou recente de backup. Se seu servidor suportar compressão, você poderá usar gzip ou bzip2 que estes serão descomprimidos automaticamente pelo sistema. <strong>ATENçãO</strong> Isto irá sobrescrever qualquer conteúdo existente. A restauração poderá levar muito tempo, por isso não saia desta página até que este processo esteja finalizado. Os backups estão armazenados dentro do diretório <samp>store/</samp> e assume que foram gerados através da função de backup do phpBB. Restaurações de backups que não foram gerados pelos criadores do sistema podem ou não funcionar corretamente.',

	'BACKUP_DELETE'		=> 'O arquivo de backup foi deletado com sucesso.',
	'BACKUP_INVALID'	=> 'O arquivo seleciona para backup é inválido.',
	'BACKUP_OPTIONS'	=> 'Opções de Backup',
	'BACKUP_SUCCESS'	=> 'O arquivo de backup foi criado com sucesso.',
	'BACKUP_TYPE'		=> 'Tipo de backup',

	'DATABASE'			=> 'Utilidades do banco de dados',
	'DATA_ONLY'			=> 'Conteúdo apenas',
	'DELETE_BACKUP'		=> 'Excluir backup',
	'DELETE_SELECTED_BACKUP'	=> 'Você tem certeza que deseja remover o backup selecionado?',
	'DESELECT_ALL'		=> 'Deselecionar todos',
	'DOWNLOAD_BACKUP'	=> 'Salvar backup',

	'FILE_TYPE'			=> 'Tipo de arquivo',
	'FILE_WRITE_FAIL'	=> 'Não foi possível escrever no arquivo a ser armazenado.',
	'FULL_BACKUP'		=> 'Completo',

	'RESTORE_FAILURE'		=> 'O arquivo de backup possivelmente está danificado.',
	'RESTORE_OPTIONS'		=> 'Opções de restauração',
	'RESTORE_SUCCESS'		=> 'O banco de dados foi restaurado com sucesso.<br /><br /> Sua comunidade deverá voltar ao momento que estava quando foi feito o backup.',

	'SELECT_ALL'			=> 'Selecionar todos',
	'SELECT_FILE'			=> 'Selecionar um arquivo',
	'START_BACKUP'			=> 'Iniciar backup',
	'START_RESTORE'			=> 'Iniciar restauração',
	'STORE_AND_DOWNLOAD'	=> 'Armazenar e fazer download',
	'STORE_LOCAL'			=> 'Armazenar arquivo localmente',
	'STRUCTURE_ONLY'		=> 'Apenas estrutura',

	'TABLE_SELECT'		=> 'Tabela selecionada',
	'TABLE_SELECT_ERROR'=> 'Você deve selecionar pelo menos uma tabela.',
));

?>
