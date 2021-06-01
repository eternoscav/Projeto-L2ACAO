<?php
/**
*
* acp_permissions [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.6
* @package language: Brazilian Portuguese
* @original version $Id: permissions.php,v 1.38 2007/10/08 14:38:26 acydburn Exp $
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translator: phpBB Brasil - http://www.phpBBrasil.com.br/ - 2007-12-22 - 14:26
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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>Permissões são altamente dependentes e agrupadas dentro de quatro sessões majoritárias, os quais são:</p>

		<h2>Permissões Globais</h2>
		<p>Estas são usadas para controlar o acesso de um nível global e aplicar a toda a comunidade estas ações. Esta permissão é dividida em Permissões de Usuário, Permissões de Grupos, Administradores e Moderadores Globais.</p>

		<h2>Permissões Baseadas em Fórum</h2>
		<p>Estas são usadas para controlar o acesso a um Fórum apenas. Esta permissão é dividida em Permissões de Fórum, Moderadores do Fórum, Permissões de Usuários e Grupos.</p>

		<h2>Permissões de Regra</h2>
		<p>Estas são usadas para criar diferentes tipos de permissões para os tipos diferentes de permissões que mais tarde poderão ser criadas em permissões baseadas em regras. As regras padrão deverão acobertar o administrador da comunidade, o qual poderá regir a sua regra, adicionando/editando/deletando assim quando julgar necessário.</p>

		<h2>Permissões de Máscara</h2>
		<p>Estas são usadas para visualizar as permissões efetivas assinadas a Usuários, Moderadores (local ou global), Administradores ou Fóruns.</p>
	
		<br />

		<p>Para futuras informações de definição e gerenciamento de permissões do phpBB3, entre neste link ao lado. <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Capítulo 1.5 do nosso tutorial rápido</a>.</p>
	',

	'ACL_NEVER'				=> 'Nunca',
	'ACL_SET'				=> 'Definindo permissões',
	'ACL_SET_EXPLAIN'		=> 'Permissões são baseadas em um simples sistema de <samp>SIM</samp>/<samp>NãO</samp>. Definindo uma opção como <samp>NUNCA</samp> para um Usuário ou um grupo de Usuários sobrescreve qualquer valor assimilado para isto. Se você não deseja assimilar um valor para este Usuário ou grupo, selecione <samp>NãO</samp>. Se valores são atribuídos para esta opção ou outra qualquer elas irão ser usadas em preferência, senão <samp>NUNCA</samp> será quem assumirá de valor. Todos objetos marcados (com um checkbox a sua frente) irão copiar permissões se você definir.',
	'ACL_SETTING'			=> 'Propriedades',

	'ACL_TYPE_A_'			=> 'Permissões Administrativas',
	'ACL_TYPE_F_'			=> 'Permissões de Fórum',
	'ACL_TYPE_M_'			=> 'Permissões de Moderador',
	'ACL_TYPE_U_'			=> 'Permissões do Usuário',

	'ACL_TYPE_GLOBAL_A_'	=> 'Permissões Administrativas',
	'ACL_TYPE_GLOBAL_U_'	=> 'Permissões do Usuário',
	'ACL_TYPE_GLOBAL_M_'	=> 'Permissões do Moderador Global',
	'ACL_TYPE_LOCAL_M_'		=> 'Permissões do Fórum ao Moderador',
	'ACL_TYPE_LOCAL_F_'		=> 'Permissões do Fórum',
	
	'ACL_NO'				=> 'Não',
	'ACL_VIEW'				=> 'Visualizando permissões',
	'ACL_VIEW_EXPLAIN'		=> 'Aqui você pode ver as permissões efetivas que o Usuário/grupo está tendo. Uma marca vermelha indica que Usuário/grupo não tem a permissão, uma marca verde indica que o Usuário/grupo tem permissão para tal coisa.',
	'ACL_YES'				=> 'Sim',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Aqui você pode atribuir permissões de administrador a usuários ou grupos. Todos os usuários com permissões de administrador podem ver o Painel de Controle da Administração.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Aqui você pode nomear os usuários e grupos como moderadores do fórum. Para nomear os usuários que têm acesso aos fóruns, para definir permissões globais moderativas ou administradores, favor utilizar a página apropriada.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Aqui você pode alterar quais usuários e grupos podem acessar determinados fóruns. Para nomear moderadores ou definir os administradores, favor utilizar a página apropriada.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> 'Aqui voce pode copiar as permissões de fórum de um fórum para o outro ou mais de um fórum.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Aqui você pode atribuir permissões de moderador global a usuários ou grupos. Estes moderadores são como moderadores comuns, salvo se eles tiverem acesso a todos os fóruns em sua comunidade.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Aqui você pode atribuir permissões de fórum a grupos.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Aqui você pode nomear permissões globais a grupos - permissões de usuário, permissões de moderador global e permissões de administrador. As permissões de usuário incluem algumas funcionalidades como o uso de avatares, enviar mensagens privadas, etc. As permissões de moderador global como as de aprovar mensagens, gerenciar tópicos, gerenciar banimentos, etc., e por último as permissões de administrador como a de alterar as permissões, definir BBCodes personalizados, gerenciar fóruns, etc. As permissões individuais de usuários só deveriam ser alteradas em ocasiões raras, o melhor método está em adicionar estes usuários em grupos e atribuir as permissões ao grupo.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Aqui você está apto a gerenciar as definições para permissões de administradores. Regras são permissões efetivas, se você mudar uma regra os itens atribuídos a estas regras terão suas permissões modificadas juntamente.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Aqui você está apto a gerenciar as regras para permissões de Fórum. Regras são permissões efetivas, se você mudar uma regra os itens atribuídos a estas regras terão suas permissões modificadas juntamente.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Aqui você está apto a gerenciar as regras para permissões de Moderador. Regras são permissões efetivas, se você mudar uma regra os itens atribuídos a estas regras terão suas permissões modificadas juntamente.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Aqui você está apto a gerenciar as regras para permissões de Usuário. Regras são permissões efetivas, se você mudar uma regra os itens atribuídos a estas regras terão suas permissões modificadas juntamente.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Aqui você pode assimilar permissões de Fórum a Usuários.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Aqui você pode assimilar permissões globais para grupos - permissões de Usuários, permissões de Moderador global e permissões Administrativas. Permissões de Usuário incluem capacidades como o uso de avatares, enviando mensagens privadas, etc. Moderadores globais assim como aprovando mensagens, gerenciando tópicos, gerenciando banimentos, etc e por último permissões do administrador assim como alterar permissões, definir BBCodes personalizados, gerenciar fóruns, enfim, diversas funcionalidades que a ferramenta proporciona. Permissões individuais de Usuário deverão ser trocada apenas em ocasiões raras, o método preferido é colocando Usuários em grupos e definindo a estes grupos as permissões. Deste modo fica muito mais fácil gerenciar as permissões de um modo geral.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Aqui você pode visualizar as permissões Administrativas efetivas assimiladas ao grupo/Usuário selecionado.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Aqui você pode visualizar as permissões Moderadores globais efetivas assimiladas ao grupo/Usuário selecionado.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Aqui você pode visualizar as permissões de Fórum efetivas assimiladas ao grupo/Usuário selecionado.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Aqui você pode visualizar as permissões de Moderadores efetivas assimiladas ao grupo/Usuário selecionado.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Aqui você pode visualizar as permissões de Usuário efetivas assimiladas ao grupo/Usuário selecionado.',

	'ADD_GROUPS'				=> 'Adicionar grupo',
	'ADD_PERMISSIONS'			=> 'Adicionar permissões',
	'ADD_USERS'					=> 'Adicionar Usuários',
	'ADVANCED_PERMISSIONS'		=> 'Permissões avançadas',
	'ALL_GROUPS'				=> 'Selecionar todos os grupos',
	'ALL_NEVER'					=> 'Todos <samp>NUNCA</samp>',
	'ALL_NO'					=> 'Todos <samp>NãO</samp>',
	'ALL_USERS'					=> 'Selecionar todos os usuários',
	'ALL_YES'					=> 'Todos <samp>SIM</samp>',
	'APPLY_ALL_PERMISSIONS'		=> 'Aplicar',
	'APPLY_PERMISSIONS'			=> 'Aplicar permissões',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'As permissões e regras definidas para este item será aplicada somente a este item a todos os outros selecionados.',
	'AUTH_UPDATED'				=> 'Permissões foram atualizadas.',
	
	'COPY_PERMISSIONS_CONFIRM'				=> 'Voce tem certeza que deseja continuar esta operação? Esteja avisado que isto irá sobescrever qualquer permissão existente nos alvos selecionados.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'O fórum base que desejas copiar as permissões.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'		=> 'Os fórums de destino que voce quer as permissões copiadas e sejam aplicadas.',
	'COPY_PERMISSIONS_FROM'					=> 'Copiar permissões de',
	'COPY_PERMISSIONS_TO'					=> 'Aplicar permissões para',
	'CREATE_ROLE'				=> 'Criar regra',
	'CREATE_ROLE_FROM'			=> 'Usar definições de…',
	'CUSTOM'					=> 'Personalizada…',

	'DEFAULT'					=> 'Padrão',
	'DELETE_ROLE'				=> 'Remover regra',
	'DELETE_ROLE_CONFIRM'		=> 'Você tem certeza que deseja remover esta regra? Itens tendo esta regra atribuída  <strong>não</strong> terão perdido suas propriedades.',
	'DISPLAY_ROLE_ITEMS'		=> 'Visualizar itens usando esta regra',

	'EDIT_PERMISSIONS'			=> 'Editar permissões',
	'EDIT_ROLE'					=> 'Editar regra',

	'GROUPS_NOT_ASSIGNED'		=> 'Nenhum grupo atribuído para esta regra',

	'LOOK_UP_GROUP'				=> 'Visualizar grupo de Usuário',
	'LOOK_UP_USER'				=> 'Visualizar Usuário',

	'MANAGE_GROUPS'		=> 'Gerenciar grupos',
	'MANAGE_USERS'		=> 'Gerenciar Usuários',

	'NO_AUTH_SETTING_FOUND'		=> 'Propriedades das permissões não definidas.',
	'NO_ROLE_ASSIGNED'			=> 'Nenhuma regra assimilada…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Propriedades para esta regra não mudam as permissões na direita. Se você quer desabilitar/remover todas as permissões você deverá usar o “Todos <samp>NãO</samp>”.',
	'NO_ROLE_AVAILABLE'			=> 'Nenhuma regra disponível',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Determine um nome a regra.',
	'NO_ROLE_SELECTED'			=> 'Regra não pôde ser encontrada.',
	'NO_USER_GROUP_SELECTED'	=> 'Você não selecionou nenhum Usuário ou grupo.',

	'ONLY_FORUM_DEFINED'	=> 'Apenas fóruns definidos em sua seleção. Também selecione pelo menos um Usuário ou grupo.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'Permissões e regras também serão aplicadas a todos itens selecionados',
	'PLUS_SUBFORUMS'				=> '+ Sub-fóruns',

	'REMOVE_PERMISSIONS'			=> 'Remover permissões',
	'REMOVE_ROLE'					=> 'Remover regra',
	'RESULTING_PERMISSION'			=> 'Permissão resultante',
	'ROLE'							=> 'Regra',
	'ROLE_ADD_SUCCESS'				=> 'Regra adicionada com sucesso.',
	'ROLE_ASSIGNED_TO'				=> 'Usuário/grupos assinados a %s',
	'ROLE_DELETED'					=> 'Regra removida com sucesso.',
	'ROLE_DESCRIPTION'				=> 'Descrição da regra',

	'ROLE_ADMIN_FORUM'			=> 'Administração de Fóruns',
	'ROLE_ADMIN_FULL'			=> 'Administração Completa',
	'ROLE_ADMIN_STANDARD'		=> 'Administração Padrão',
	'ROLE_ADMIN_USERGROUP'		=> 'Administração de Usuários e Grupos',
	'ROLE_FORUM_BOT'			=> 'Acesso de Robôs (BOT)',
	'ROLE_FORUM_FULL'			=> 'Acesso Total',
	'ROLE_FORUM_LIMITED'		=> 'Acesso Limitado',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Acesso Limitado + Enquetes',
	'ROLE_FORUM_NOACCESS'		=> 'Sem acesso',
	'ROLE_FORUM_ONQUEUE'		=> 'Na Lista de Moderação',
	'ROLE_FORUM_POLLS'			=> 'Acesso Padrão + Enquetes',
	'ROLE_FORUM_READONLY'		=> 'Acesso de Leitura Apenas',
	'ROLE_FORUM_STANDARD'		=> 'Acesso Padrão',
	'ROLE_FORUM_NEW_MEMBER'		=> 'Usuário recém registrado',
	'ROLE_MOD_FULL'				=> 'Moderador Completo',
	'ROLE_MOD_QUEUE'			=> 'Moderador da Lista de Aprovação',
	'ROLE_MOD_SIMPLE'			=> 'Moderador Simples',
	'ROLE_MOD_STANDARD'			=> 'Moderador Padrão',
	'ROLE_USER_FULL'			=> 'Todas as Opções',
	'ROLE_USER_LIMITED'			=> 'Opções Limitadas',
	'ROLE_USER_NOAVATAR'		=> 'Sem Avatar',
	'ROLE_USER_NOPM'			=> 'Sem Mensagens Privadas',
	'ROLE_USER_STANDARD'		=> 'Opções Padrão',
	'ROLE_USER_NEW_MEMBER'		=> 'Usuário recém registrado',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Pode acessar a gerência do fórum e propriedades das permissões do fórum.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Tem acesso a todas as funções administrativas nesta comunidade.<br />Não recomendamos.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Tem acesso a maioria das ferramentas administrativas, mas não é permitido usar ferramentas do servidor e relacionadas.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Pode gerenciar grupos e usuários: Apto a trocar permissões, definições, gerenciar punições e gerenciar ranks.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Esta regra é recomendada para robôs e sistemas de busca.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Pode usar todas as ferramentas do fórum, incluindo postar fixos e anúncios. Pode também ignorar o limite do flood.<br /> Não é recomendado para usuários normais.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Pode usar algumas opções do fórum, mas não pode anexar ou utilizar de ícones de tópicos.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Igual ao Acesso Limitado, mas pode criar enquetes.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'Não pode ver ou acessar o fórum.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Pode usar a maioria das opções do fórum incluindo anexos, mas mensagens e tópicos precisam ser aprovadas por um moderador.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Igual ao Acesso Padrão, mas pode criar enquetes.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Pode ler o fórum, mas não pode criar novos tópicos ou responder tópicos.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Pode usar a maioria das opções do fórum incluindo anexos e excluir próprias mensagens, mas não pode bloquear próprios tópicos, e não pode criar enquetes.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'		=> 'Uma regra para membros de um grupo de recém registrados; contém <samp>NUNCA</samp> permissões que irão bloquear opções para novos usuários.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Pode usar todas opções da moderação, incluindo opções para banir.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Pode usar o campo de moderação para validar ou editar mensagens, porém nada mais que isso será permitido.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Pode usar apenas opções básicas de tópicos. Não pode enviar avisos ou usar a lista de aprovação dos moderadores.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Pode usar maioria das ferramentas da moderação, mas não pode banir usuários ou mudar o autor do tópico.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Pode usar todas as opções disponíveis para usuários, incluindo trocar o nome de usuário ou ignorar o controle de flood.<br />Não recomendado.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Pode acessar algumas opções do usuário. Anexos, e-mails, ou mensagens instant&acirc;neas não são permitidas.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Tem um limite de opções e não é permitido usar avatar.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Tem um limite de opções, e não é permitido usar mensagens privadas.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Pode acessar a maioria, mas nem todas as opções de usuário. Não pode mudar o nome de usuário ou ignorar o controle de flood.',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'		=> 'Uma regra para membros do grupo especial de recém registrados; contém <samp>NUNCA</samp> permissões que bloqueie opções para novos membros.',
	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Você está apto a entrar uma pequena explicação do que a regra está fazendo ou para o que ela significa. O texto que você entrar aqui será mostrado na tela de permissões também.',
	'ROLE_DESCRIPTION_LONG'			=> 'A descrição da regra é muito longa, limite de 4 mil caracteres.',
	'ROLE_DETAILS'					=> 'Detalhes da regra',
	'ROLE_EDIT_SUCCESS'				=> 'Regra adicionada com sucesso.',
	'ROLE_NAME'						=> 'Nome da regra',
	'ROLE_NAME_ALREADY_EXIST'		=> 'Uma regra com o nome <strong>%s</strong> já está em uso.',
	'ROLE_NOT_ASSIGNED'				=> 'Regra não foi assinada ainda.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'O Fórum(s) selecionado não existe.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'O grupo(s) selecionado não existe.',
	'SELECTED_USER_NOT_EXIST'		=> 'O Usuário(s) selecionado não existe.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'O Fórum que você selecionou aqui irá incluir todos sub-fóruns nesta seleção.',
	'SELECT_ROLE'					=> 'Selecionar regra…',
	'SELECT_TYPE'					=> 'Selecionar tipo',
	'SET_PERMISSIONS'				=> 'Definir permissões',
	'SET_ROLE_PERMISSIONS'			=> 'Definir permissões da regra',
	'SET_USERS_PERMISSIONS'			=> 'Definir permissões do Usuário',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Definir permissões de Usuário no Fórum',

	'TRACE_DEFAULT'					=> 'Por padrão toda permissão é <samp>NãO</samp> (marcado). A permissão pode ser sobrescrita por outras definições.',
	'TRACE_FOR'						=> 'Traçar para',
	'TRACE_GLOBAL_SETTING'			=> '%s (global)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'As permissões deste grupo está definida em <samp>NUNCA</samp> como resultado total, então o antigo resultado é mantido.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'As permissões deste grupo para este fórum está definida em <samp>NUNCA</samp> como resultado total, então o antigo resultado é mantido.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'As permissões deste grupo é definida para <samp>NUNCA</samp>, o qual se torna o novo valor total porque não foi definido ainda (defina para <samp>NãO</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'As permissões deste grupo para este fórum está definida em <samp>NUNCA</samp>, o qual se torna o novo valor total porque não foi definido ainda (defina para <samp>NãO</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'As permissões deste grupo estão definidas como <samp>NUNCA</samp>, o que sobrescreve o total de <samp>SIM</samp> para um <samp>NUNCA</samp> para este usuário.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'As permissões deste grupo para este fórum está definida como <samp>NUNCA</samp>, o que sobrescreve o total de <samp>SIM</samp> para um <samp>NUNCA</samp> para este usuário.',
	'TRACE_GROUP_NO'				=> 'A permissão para este grupo é <samp>NãO</samp>, assim o antigo valor total é mantido.',
	'TRACE_GROUP_NO_LOCAL'			=> 'A permissão para este grupo dentro deste fórum é <samp>NãO</samp>, assim o antigo valor total é mantido.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'As permissões deste grupo estão definidas como <samp>SIM</samp>, mas o total de <samp>NUNCA</samp> não pode ser sobrescrito.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'As permissões deste grupo dentro deste fórum estão definidas como <samp>SIM</samp>, mas o total de <samp>NUNCA</samp> não pode ser sobrescrito.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'As permissões deste grupo estão definidas como <samp>SIM</samp>, o qual se torna o novo valor total porque não foi definido ainda (defina para <samp>NãO</samp>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'As permissões deste grupo dentro deste fórum estão definidas como <samp>SIM</samp>, o qual se torna o novo valor total porque não foi definido ainda (defina para <samp>NãO</samp>).',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'As permissões deste grupo estão definidas como <samp>SIM</samp> e o total de permissões já está definido como <samp>SIM</samp>, então o resultado total é mantido.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'As permissões deste grupo dentro deste fórum estão definidas como <samp>SIM</samp> e o total de permissões já está definido como <samp>SIM</samp>, então o resultado total é mantido.',
	'TRACE_PERMISSION'				=> 'Traçar permissão - %s',
	'TRACE_RESULT'					=> 'Traçar resultado',
	'TRACE_SETTING'					=> 'Traçar propriedades',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'A permissão independente de usuário em fórum valerá como <samp>SIM</samp>, mas a permissão local está definida como <samp>SIM</samp>, então o resultado total é mantido. %sTraçar permissão global%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'A permissão independente de usuário em fórum valerá como <samp>SIM</samp> o qual sobrescreve o resultado local <samp>NUNCA</samp>. %sTraçar permissão global%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'A permissão independente de usuário em fórum valerá como <samp>NUNCA</samp> o qual não influência na permissão local. %sTraçar permissão global%s',

	'TRACE_USER_FOUNDER'					=> 'O Usuário está definido como fundador, entretanto permissões de administrador estão definidas como <samp>SIM</samp> por padrão.',
	'TRACE_USER_KEPT'						=> 'A permissão de usuários é <samp>NãO</samp>, então o valor total é mantido.',
	'TRACE_USER_KEPT_LOCAL'					=> 'A permissão de usuários para este fórum é <samp>NãO</samp>, então o valor total é mantido.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'A permissão de usuários está definida como <samp>NUNCA</samp> e o valor total é definido para <samp>NUNCA</samp>, então nada é alterado.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'A permissão de usuários para este fórum estão definidas como <samp>NUNCA</samp> e o valor total está definido como <samp>NUNCA</samp>, então nada é alterado.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'A permissão de usuários está definida como <samp>NUNCA</samp>, o qual se torna o valor total porque estava definido como NãO.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'A permissão de usuários para este fórum estão definidas como <samp>NUNCA</samp>, o qual se torna o valor total porque estava definido como NãO.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'A permissão de usuários está definida como <samp>NUNCA</samp> e sobrescreve o anterior <samp>SIM</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'A permissão de usuários para este fórum estão definidas como <samp>NUNCA</samp> e sobrescreve o anterior <samp>SIM</samp>.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'A permissão de usuários está definida como <samp>NãO</samp> e o valor total é definido para NãO, então este torna-se como padrão <samp>NUNCA</samp>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'A permissão de usuários para este fórum estão definidas como <samp>NãO</samp> e o valor total é definido para NãO, então este torna-se como padrão <samp>NUNCA</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'A permissão de usuários está definida como <samp>SIM</samp>, mas o total de <samp>NUNCA</samp> não pode ser sobrescrito.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'A permissão de usuários para este fórum estão definidas como <samp>SIM</samp>, mas o total de <samp>NUNCA</samp> não pode ser sobrescrito.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'A permissão de usuários está definida como <samp>SIM</samp>, o qual se torna o valor total porque estava definido como <samp>NãO</samp>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'A permissão de usuários para este fórum estão definidas como <samp>SIM</samp>, o qual se torna o valor total porque estava definido como <samp>NãO</samp>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'A permissão de usuários está definida como <samp>SIM</samp> e o valor total está definido como <samp>SIM</samp>, então nada foi trocado.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'A permissão de usuários para este fórum estão definidas como <samp>SIM</samp> e o valor total está definido como <samp>SIM</samp>, então nada é alterado.',
	'TRACE_WHO'								=> 'Quem',
	'TRACE_TOTAL'							=> 'Total',

	'USERS_NOT_ASSIGNED'			=> 'Nenhum Usuário atribuído a esta regra',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'é um membro dos seguintes grupos pré-definidos',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'é um membro usuário dos seguintes grupos definidos',

	'VIEW_ASSIGNED_ITEMS'	=> 'Ver itens atribuídos',
	'VIEW_LOCAL_PERMS'		=> 'Permissões locais',
	'VIEW_GLOBAL_PERMS'		=> 'Permissões globais',
	'VIEW_PERMISSIONS'		=> 'Ver permissões',

	'WRONG_PERMISSION_TYPE'				=> 'Tipo de permissão selecionada errada.',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'As configurações de permissão estão em um formato errado, o phpBB não os pode processar corretamente.',
));

?>
