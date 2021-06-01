<?php
/**
*
* acp_groups [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.3
* @package language: Brazilian Portuguese
* @original version $Id: groups.php,v 1.29 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translator: phpBB Brasil - http://www.phpBBrasil.com.br/ - 2007-12-17 - 16:39
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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Deste painel você pode administrar todos seus grupos de usuário. Você pode remover, criar um novo ou editar um existente. Além disso, você pode escolher os moderadores dos grupos, selecionar o estado do grupo como aberto/oculto/fechado e definir um nome para o grupo assim como uma descrição.',
	'ADD_USERS'						=> 'Adicionar usuário',
	'ADD_USERS_EXPLAIN'				=> 'Aqui você pode adicionar novos usuários para o grupo. Você deve selecionar onde este grupo virá para os usuários selecionados. Adicionalmente você pode definir o usuário como líder do grupo. Favor entrar cada nome de usuário em uma linha separada.',

	'COPY_PERMISSIONS'				=> 'Copiar permissões de',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Uma vez criado, o grupo terá as mesmas permissões do que você selecionou aqui.',
	'CREATE_GROUP'					=> 'Criar novo grupo',

	'GROUPS_NO_MEMBERS'				=> 'Este grupo não tem membros',
	'GROUPS_NO_MODS'				=> 'Nenhum líder de grupo definido',

	'GROUP_APPROVE'					=> 'Aprovar membro',
	'GROUP_APPROVED'				=> 'Membros aprovados',
	'GROUP_AVATAR'					=> 'Avatar do grupo',
	'GROUP_AVATAR_EXPLAIN'			=> 'Esta imagem será mostrada no painel do grupo.',
	'GROUP_CLOSED'					=> 'Fechado',
	'GROUP_COLOR'					=> 'Cor do grupo',
	'GROUP_COLOR_EXPLAIN'			=> 'Define as cores dos nomes de usuários dos membros o qual irá aparecer colorido, deixe em branco para utilizar do padrão.',
	'GROUP_CONFIRM_ADD_USER'		=> 'Você está certo de que quer adicionar o usuário %1$s ao grupo?',
	'GROUP_CONFIRM_ADD_USERS'		=> 'Você está certo de que quer adicionar os usuários %1$s ao grupo?',
	'GROUP_CREATED'					=> 'Grupo criado com sucesso.',
	'GROUP_DEFAULT'					=> 'Faça grupo padrão para membros',
	'GROUP_DEFS_UPDATED'			=> 'Grupo padrão definido para todos os membros.',
	'GROUP_DELETE'					=> 'Remover membro do grupo',
	'GROUP_DELETED'					=> 'Grupo removido e grupo de usuário padrão definidos com sucesso.',
	'GROUP_DEMOTE'					=> 'Retirar líder do grupo',
	'GROUP_DESC'					=> 'Descrição do grupo',
	'GROUP_DETAILS'					=> 'Detalhes do grupo',
	'GROUP_EDIT_EXPLAIN'			=> 'Aqui você pode editar um grupo existente. Você pode alterar o nome, descrição e tipo (aberto, fechado, etc.). Você pode também definir atributos a estes grupos, tais como cores, ranks, etc. Mudanças feitas aqui sobrescrevem as configurações atuais dos usuários. Por favor, note que os membros destes grupos podem alterar as configurações de avatar do grupo, a menos que você defina permissões de usuário adequadas.',
	'GROUP_ERR_USERS_EXIST'			=> 'Os usuários especificados já pertencem a este grupo',
	'GROUP_FOUNDER_MANAGE'			=> 'Gerenciar apenas o fundador',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'A gerência deste grupo é restrita somente aos fundadores. Usuários que têm permissões de grupo ainda podem ver este grupo como também os membros deste grupo.',
	'GROUP_HIDDEN'					=> 'Oculto',
	'GROUP_LANG'					=> 'Idioma do grupo',
	'GROUP_LEAD'					=> 'Líderes do grupo',
	'GROUP_LEADERS_ADDED'			=> 'Novo líder adicionado ao grupo com sucesso.',
	'GROUP_LEGEND'					=> 'Mostrar grupo na legenda',
	'GROUP_LIST'					=> 'Membros atuais',
	'GROUP_LIST_EXPLAIN'			=> 'Esta é uma lista completa de todos os usuários atuais com filiação a este grupo. Você pode excluir membros (exceto os especiais) ou adicionar novos se julgar necessário.',
	'GROUP_MEMBERS'					=> 'Membros dos grupos',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Esta é uma lista completa de todos os membros deste grupo de usuários. Isto inclui sessões separadas para líderes, pendentes e membros existentes. Daqui você pode gerenciar todos os aspectos de quem foi membro deste grupo e qual sua situação atual. Para remover um líder, mas mantê-lo no grupo use destituir e então excluir. Use de promover para fazer o usuário de líder na seq&uuml;ência.',
	'GROUP_MESSAGE_LIMIT'			=> 'Limite de mensagens privadas por grupo',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Estas definições sobrescrevem as definições de usuário padrão. Se definir como 0 o padrão será usado como base para o limite.',
	'GROUP_MODS_ADDED'				=> 'Novos moderadores de grupo adicionado com sucesso.',
	'GROUP_MODS_DEMOTED'			=> 'Líder de grupo destituído com sucesso.',
	'GROUP_MODS_PROMOTED'			=> 'Membros de grupo promovido com sucesso.',
	'GROUP_NAME'					=> 'Nome do grupo',
	'GROUP_NAME_TAKEN'				=> 'O nome do grupo que você definiu já está em uso, defina outro nome para este grupo.',
	'GROUP_OPEN'					=> 'Aberto',
	'GROUP_PENDING'					=> 'Membros pendentes',
	'GROUP_MAX_RECIPIENTS'			=> 'Número máximo permitido de destinatários por mensagem privada.',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'Número máximo de destinatários permitidos em uma mensagem privada. Se for 0, será utilizado o maximo permitido pelo fórum.',
	'GROUP_OPTIONS_SAVE'			=> 'Vasta opções de grupo',
	'GROUP_PROMOTE'					=> 'Promover a líder do grupo',
	'GROUP_RANK'					=> 'Rank do grupo',
	'GROUP_RECEIVE_PM'				=> 'Grupo habilitado a receber mensagens privadas',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Favor notar que grupos ocultos não podem receber mensagens, por causa desta opção oculta.',
	'GROUP_REQUEST'					=> 'Solicitar',
	'GROUP_SETTINGS_SAVE'			=> 'Propriedades do grupo',
	'GROUP_SKIP_AUTH'				=> 'Não aplicar permissões ao líder do grupo',
	'GROUP_SKIP_AUTH_EXPLAIN'		=> 'Se aplicado como sim, o líder do grupo não terá as permiss&tilde;es deste grupo.',
	'GROUP_TYPE'					=> 'Tipo de grupo',
	'GROUP_TYPE_EXPLAIN'			=> 'Isto determinar quais usuários podem juntar-se ou ver o grupo.',
	'GROUP_UPDATED'					=> 'Preferências de grupo atualizadas com sucesso.',

	'GROUP_USERS_ADDED'				=> 'Novos usuários adicionados ao grupo com sucesso.',
	'GROUP_USERS_EXIST'				=> 'Os membros selecionados já estão inseridos no grupo.',
	'GROUP_USERS_REMOVE'			=> 'Novas configurações padrão e usuários removidos do grupo foram realizados com sucesso.',

	'MAKE_DEFAULT_FOR_ALL'	=> 'Tornar este grupo padrão para todos os membros',
	'MEMBERS'				=> 'Membros',

	'NO_GROUP'					=> 'Nenhum grupo especificado.',
	'NO_GROUPS_CREATED'			=> 'Nenhum grupo criado ainda.',
	'NO_PERMISSIONS'			=> 'Não copie permissões',
	'NO_USERS'					=> 'Você não inseriu nenhum usuário.',
	'NO_USERS_ADDED'			=> 'Nenhum usuário foi adicionado ao grupo.',
	'NO_VALID_USERS'         => 'Você não entrou em nenhum grupo elegível para tal ação.',

	'SPECIAL_GROUPS'			=> 'Grupos pré-definidos',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Grupos pré-definidos são grupos especiais, não podem ser deletados ou diretamente modificados. Porém, você ainda pode adicionar novos usuários e alterar configurações básicas do grupo.',

	'TOTAL_MEMBERS'				=> 'Membros',

	'USERS_APPROVED'				=> 'Usuários aprovados com sucesso.',
	'USER_DEFAULT'					=> 'Usuário Padrão',
	'USER_DEF_GROUPS'				=> 'Definições de Grupo por Usuário',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Estes são grupos criados por você ou outro administrador deste fórum. Você pode gerenciar os membros e também editar as propriedades do grupo ou até mesmo remover o grupo.',
	'USER_GROUP_DEFAULT'			=> 'Indicar grupo Padrão',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Clicando em Sim você irá indicar este grupo como padrão aos seus usuários do grupo.',
	'USER_GROUP_LEADER'				=> 'Definir o moderador do grupo',
));

?>