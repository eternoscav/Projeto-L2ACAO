<?php
/**
*
* acp_modules [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.0
* @package language: Brazilian Portuguese
* @original version $Id: modules.php,v 1.13 2007/10/04 15:07:24 acydburn Exp $
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
//phpBBrasil.com.br
$lang = array_merge($lang, array(
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Aqui você está apto a gerenciar todos os tipos de módulos. Favor, note que o Painel de Controle da Administração possui uma estrutura de menu de três níveis (Categoria -> Categoria -> Módulo) pelo que os outros possuem uma estrutura de menu de dois níveis (Categoria -> Módulo) o qual deve de ser mantido. Também fique alerta porque você pode ser bloqueado se desabilitar ou excluir os módulos responsáveis pela gerencia da comunidade, muito cuidado quando estiver utilizando desta ferramenta.',
	'ADD_MODULE'					=> 'Adicionar módulo',
	'ADD_MODULE_CONFIRM'			=> 'Você tem certeza que deseja adicionar o seguinte módulo?',
	'ADD_MODULE_TITLE'				=> 'Adiciona módulo',

	'CANNOT_REMOVE_MODULE'	=> 'Impossível de remover módulo, isto foi assinado como fundamental. Remova ou mova todos principais antes de fazer esta ação.',
	'CATEGORY'				=> 'Categoria',
	'CHOOSE_MODE'			=> 'Escolher modo de módulo',
	'CHOOSE_MODE_EXPLAIN'	=> 'Escolha o modo de módulos para serem usados.',
	'CHOOSE_MODULE'			=> 'Escolher módulo',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Escolha o arquivo a ser chamado por este módulo.',
	'CREATE_MODULE'			=> 'Criar novo módulo',

	'DEACTIVATED_MODULE'	=> 'Desativar módulo',
	'DELETE_MODULE'			=> 'Remover módulo',
	'DELETE_MODULE_CONFIRM'	=> 'Tem certeza que desejar remover este módulo?',

	'EDIT_MODULE'			=> 'Editar módulo',
	'EDIT_MODULE_EXPLAIN'	=> 'Você está apto a definir propriedades do módulo',

	'HIDDEN_MODULE'			=> 'Ocultar módulo',

	'MODULE'					=> 'Módulo',
	'MODULE_ADDED'				=> 'Módulo adicionado com sucesso.',
	'MODULE_DELETED'			=> 'Módulo removido com sucesso.',
	'MODULE_DISPLAYED'			=> 'Módulo demonstrado',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Se você não desejar mostrar este módulo, mas quer usar ele, defina ocultar como ativado.',
	'MODULE_EDITED'				=> 'Módulo editado com sucesso.',
	'MODULE_ENABLED'			=> 'Módulo ativado',
	'MODULE_LANGNAME'			=> 'Nome de idioma do módulo',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Entre com o nome do módulo. Use constantes de idioma se o módulo estiver em algum arquivo de idioma.',
	'MODULE_TYPE'				=> 'Tipo do módulo',

	'NO_CATEGORY_TO_MODULE'	=> 'Não foi possível adicionar categoria para módulo. Favor remover/mover todo módulo agregado a este antes de prosseguir com esta ação.',
	'NO_MODULE'				=> 'Nenhum módulo encontrado.',
	'NO_MODULE_ID'			=> 'Nenhum módulo especificado.',
	'NO_MODULE_LANGNAME'	=> 'Nenhum idioma do módulo especificado.',
	'NO_PARENT'				=> 'Nenhum pai',

	'PARENT'				=> 'Pai',
	'PARENT_NO_EXIST'		=> 'Pai não existe.',

	'SELECT_MODULE'			=> 'Selecione um módulo',
));

?>
