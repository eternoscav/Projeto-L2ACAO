<?php
/**
*
* acp_profile [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.0
* @package language: Brazilian Portuguese
* @original version $Id: profile.php,v 1.26 2007/10/04 15:07:24 acydburn Exp $
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
// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'Adicionado com sucesso novo campo padrão.',
	'ALPHA_ONLY'			=> 'Alfanumérico apenas',
	'ALPHA_SPACERS'			=> 'Alfanumérico e espaços',
	'ALWAYS_TODAY'			=> 'Sempre a data corrente',

	'BOOL_ENTRIES_EXPLAIN'	=> 'Entre suas opções agora',
	'BOOL_TYPE_EXPLAIN'		=> 'Defina o tipo, entre campo de checagem (checkbox) ou escolha (radio). Um campo de checagem (checkbox) só será exibido se for assinalado por um determinado usuário. Naquele caso a <strong>segunda</strong> opção de idioma será utilizada. Botões de escolha (rádio) serão exibidos independentemente do valor deles.',

	'CHANGED_PROFILE_FIELD'		=> 'Campo de perfil atualizado com sucesso.',
	'CHARS_ANY'					=> 'Qualquer caractere',
	'CHECKBOX'					=> 'Checkbox',
	'COLUMNS'					=> 'Colunas',
	'CP_LANG_DEFAULT_VALUE'		=> 'Valor padrão',
	'CP_LANG_EXPLAIN'			=> 'Descrição do campo',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'A explicação para este campo apresentado para o usuário.',
	'CP_LANG_NAME'				=> 'Nome/título do campo apresentado ao usuário',
	'CP_LANG_OPTIONS'			=> 'Opções',
	'CREATE_NEW_FIELD'			=> 'Criar novo campo',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Ao menos um campo customizado de perfil não foi traduzido ainda. Favor entrar com as informações necessárias clicando em &quot;Traduzir&quot;.',

	'DEFAULT_ISO_LANGUAGE'			=> 'Idioma padrão [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'As entradas do idioma para o idioma padrão não são adicionados para este campo de perfil.',
	'DEFAULT_VALUE'					=> 'Valor padrão',
	'DELETE_PROFILE_FIELD'			=> 'Remover campo de perfil',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Você tem certeza que deseja remover este campo de perfil?',
	'DISPLAY_AT_PROFILE'			=> 'Mostrar no Painel do Usuário',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'O usuário está apto a modificar este campo do perfil no painel de controle do usuário.',
	'DISPLAY_AT_REGISTER'			=> 'Mostrar na tela de cadastro',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Se esta opção estiver ativada, o campo será exibido no momento do registro de novos usuários.',
	'DISPLAY_ON_VT'					=> 'Mostra na tela do tópico',
	'DISPLAY_ON_VT_EXPLAIN'			=> 'Se esta opção está habilitada, o campo será mostrado no pequeno perfil na tela do tópico.',
	'DISPLAY_PROFILE_FIELD'			=> 'Mostrar campo de perfil',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'O campo de perfil será exibido em todos os lugares permitidos de acordo com as configurações determinadas. Definindo esta configuração em “não”, esconderão estes campos nas páginas dos tópicos, perfil e o lista de membros.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'Entre suas opções agora, cada opção em uma linha',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Favor notar que você está apto a modificar suas opções de texto e também apto a adicionar novas opções ao final. Não é recomendado adicionar novas opções entre as opções atuais - isto pode resultar em opções erradas assimiladas a seus usuários. Isto também pode acontecer se você remover opções entre as existentes e as novas. Removendo opções do final resulta em usuários tendo este item revertido ao padrão inicial.',
	'EMPTY_FIELD_IDENT'				=> 'Campo vazio identificado',
	'EMPTY_USER_FIELD_NAME'			=> 'Favor entrar um nome/titulo deste campo',
	'ENTRIES'						=> 'Entradas',
	'EVERYTHING_OK'					=> 'Tudo OK',

	'FIELD_BOOL'				=> 'Booleano (Sim/Não)',
	'FIELD_DATE'				=> 'Data',
	'FIELD_DESCRIPTION'			=> 'Descrição do campo',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'A explicação deste campo apresentada ao usuário',
	'FIELD_DROPDOWN'			=> 'Caixa de rolagem',
	'FIELD_IDENT'				=> 'Identificação de campo',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'A identificação de campo escolhida já existe. Favor escolher outra identificação.',
	'FIELD_IDENT_EXPLAIN'		=> 'A identificação de campo é um nome para identificar o campo do perfil com o banco de dados e a template.',
	'FIELD_INT'					=> 'Números',
	'FIELD_LENGTH'				=> 'Tamanho da caixa de entrada',
	'FIELD_NOT_FOUND'			=> 'Campo de perfil não encontrado.',
	'FIELD_STRING'				=> 'Campos de texto singular',
	'FIELD_TEXT'				=> 'Campo de texto com barra de rolagem',
	'FIELD_TYPE'				=> 'Tipo de campo',
	'FIELD_TYPE_EXPLAIN'		=> 'Você não poderá mudar este tipo de campo mais tarde.',
	'FIELD_VALIDATION'			=> 'Validação de campo',
	'FIRST_OPTION'				=> 'Primeira opção',

	'HIDE_PROFILE_FIELD'			=> 'Ocultar campo de perfil',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Oculta o campo de perfil de todos os usuários com exceção do próprio usuário, administradores e moderadores estão aptos a ver este campo. Se a opção Exibir no painel de controle do usuário estiver desabilitada, o usuário não poderá ver ou alterar este campo, que poderá somente ser alterado pelos administradores.',

	'INVALID_CHARS_FIELD_IDENT'	=> 'Campo de identificação do perfil só pode conter a-z e _',
	'INVALID_FIELD_IDENT_LEN'	=> 'Campo de identificação pode ter apenas 17 caracteres ou menos',
	'ISO_LANGUAGE'				=> 'Idioma [%s]',

	'LANG_SPECIFIC_OPTIONS'		=> 'Opções específicas de idioma [<strong>%s</strong>]',

	'MAX_FIELD_CHARS'		=> 'Número máximo de caracteres',
	'MAX_FIELD_NUMBER'		=> 'Número máximo permitido',
	'MIN_FIELD_CHARS'		=> 'Número mínimo permitido',
	'MIN_FIELD_NUMBER'		=> 'Menor número permitido',

	'NO_FIELD_ENTRIES'			=> 'Nenhuma entrada definida',
	'NO_FIELD_ID'				=> 'Nenhum id de campo especificado.',
	'NO_FIELD_TYPE'				=> 'Nenhum tipo de campo especificado.',
	'NO_VALUE_OPTION'			=> 'Opção igual a um valor sem entrada',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Valores a não considerar. Se o campo é obrigatório, o usuário terá como retorno um erro, se ele escolher uma das opções escolhidas selecionadas aqui',
	'NUMBERS_ONLY'				=> 'Somente números (0-9)',

	'PROFILE_BASIC_OPTIONS'		=> 'Opções básicas',
	'PROFILE_FIELD_ACTIVATED'	=> 'Campo de perfil ativado com sucesso.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Campo de perfil desativado com sucesso.',
	'PROFILE_LANG_OPTIONS'		=> 'Opções de especificação de idioma',
	'PROFILE_TYPE_OPTIONS'		=> 'Opções de especificação do tipo de perfil',

	'RADIO_BUTTONS'				=> 'Botões de escolha',
	'REMOVED_PROFILE_FIELD'		=> 'Removido com sucesso este campo de perfil.',
	'REQUIRED_FIELD'			=> 'Campo obrigatório',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Forçar campo de perfil a ser preenchido ou especificado pelo usuário ou pelo administrador. Se mostrar na tela de cadastro estiver desabilitado, o campo poderá somente ser exigido quando o usuário editar seu perfil.',
	'ROWS'						=> 'Linhas',

	'SAVE'							=> 'Salvar',
	'SECOND_OPTION'					=> 'Segunda opção',
	'STEP_1_EXPLAIN_CREATE'			=> 'Aqui você pode entrar com os primeiros par&acirc;metros básicos de seu novo campo de perfil. Estas informações são necessárias para o segundo passo, onde você estará apto a definir as opções restantes, e onde você estará apto a rever e modificar seu perfil futuramente.',
	'STEP_1_EXPLAIN_EDIT'			=> 'Aqui você pode modificar os par&acirc;metros básicos de seu campo de perfil. As opções relevantes são recalculadas com o segundo passo, onde você está apto a rever e testar as definições modificadas.',
	'STEP_1_TITLE_CREATE'			=> 'Adicionar campo de perfil',
	'STEP_1_TITLE_EDIT'				=> 'Editar campo de perfil',
	'STEP_2_EXPLAIN_CREATE'			=> 'Aqui você está apto a definir algumas opções comuns que você pode querer ajustar.',
	'STEP_2_EXPLAIN_EDIT'			=> 'Aqui você está apto a modificar algumas opções comuns.<br /><strong>Favor note que as mudanças nos campos do perfil não irão afetar perfis existentes com dados especificados pelos seus usuários.</strong>',
	'STEP_2_TITLE_CREATE'			=> 'Opções de tipo especificado de perfil',
	'STEP_2_TITLE_EDIT'				=> 'Opções de tipo especificado de perfil',
	'STEP_3_EXPLAIN_CREATE'			=> 'Desde que você tenha um idioma de comunidade instalado, você tem de preencher os itens de idioma restantes também. O campo de perfil irá funcionar com o idioma padrão habilitado, poderá preencher os idiomas restantes para este campo em outro momento que desejar.',
	'STEP_3_EXPLAIN_EDIT'			=> 'Desde que você tenha mais de um idioma instalado na sua comunidade, você pode agora adicionar ou remover itens existentes nos idiomas restantes também. O campo de perfil irá trabalhar com o idioma padrão da comunidade habilitado.',
	'STEP_3_TITLE_CREATE'			=> 'Definições de idioma restantes',
	'STEP_3_TITLE_EDIT'				=> 'Definições de idioma',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Entre com uma frase padrão para ser mostrada, um valor padrão. Deixe em branco se você quiser mostrar estes vazios no primeiro momento.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Entre um texto padrão para ser mostrado, um valor padrão. Deixe em branco se quiser mostrar este vazio no primeiro momento.',
	'TRANSLATE'						=> 'Traduzir',

	'USER_FIELD_NAME'	=> 'Nome/título do campo apresentado ao usuário',

	'VISIBILITY_OPTION'				=> 'Opções de visibilidade',
));

?>
