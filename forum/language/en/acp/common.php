<?php
/**
*
* acp common [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.7
* @package language: Brazilian Portuguese
* @original version $Id: common.php,v 1.120 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translator: phpBB Brasil - http://www.phpBBrasil.com.br/ - 2008-02-27 - 15:33
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
// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Administradores',
	'ACP_ADMIN_LOGS'			=> 'Log dos Administradores',
	'ACP_ADMIN_ROLES'			=> 'Regras de Administrador',
	'ACP_ATTACHMENTS'			=> 'Anexos',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Propriedades de Anexos',
	'ACP_AUTH_SETTINGS'			=> 'Autenticação',
	'ACP_AUTOMATION'			=> 'Automação',
	'ACP_AVATAR_SETTINGS'		=> 'Propriedades do Avatar',

	'ACP_BACKUP'				=> 'Backup',
	'ACP_BAN'					=> 'Banir',
	'ACP_BAN_EMAILS'			=> 'Banir E-mails',
	'ACP_BAN_IPS'				=> 'Banir IPs',
	'ACP_BAN_USERNAMES'			=> 'Banir Usuários',
	'ACP_BBCODES'				=> 'BBCodes',
	'ACP_BOARD_CONFIGURATION'	=> 'Configuração do Fórum',
	'ACP_BOARD_FEATURES'		=> 'Características do Fórum',
	'ACP_BOARD_MANAGEMENT'		=> 'Administração do Fórum',
	'ACP_BOARD_SETTINGS'		=> 'Propriedades do Fórum',
	'ACP_BOTS'					=> 'Espiões/Robôs',
		'SETTING_TOO_LOW'      => 'Definição está muito pequena',
	'SETTING_TOO_BIG'      => 'Definição está muito grande',
	'SETTING_TOO_LONG'      => 'Definição está muito longa',
	'SETTING_TOO_SHORT'      => 'Definição está muito curta',
	'SHOW_ALL_OPERATIONS'	=> 'Mostrar todas operações',
	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_DATABASE'			=> 'Banco de Dados',
	'ACP_CAT_DOT_MODS'			=> '.Mods',
	'ACP_CAT_FORUMS'			=> 'Fóruns',
	'ACP_CAT_GENERAL'			=> 'Geral',
	'ACP_CAT_MAINTENANCE'		=> 'Manutenção',
	'ACP_CAT_PERMISSIONS'		=> 'Permissões',
	'ACP_CAT_POSTING'			=> 'Mensagens',
	'ACP_CAT_STYLES'			=> 'Estilos',
	'ACP_CAT_SYSTEM'			=> 'Sistema',
	'ACP_CAT_USERGROUP'			=> 'Usuários e Grupos',
	'ACP_CAT_USERS'				=> 'Usuários',
	'ACP_CLIENT_COMMUNICATION'	=> 'Comunicação com cliente',
	'ACP_COOKIE_SETTINGS'		=> 'Propriedades de Cookies',
	'ACP_CRITICAL_LOGS'			=> 'Log de Erros',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Campos de Perfil Personalizados',
	
	'ACP_DATABASE'				=> 'Manutenção do Banco de Dados',
	'ACP_DISALLOW'				=> 'Desativar',
	'ACP_DISALLOW_USERNAMES'	=> 'Nomes Censurados',
	
	'ACP_EMAIL_SETTINGS'		=> 'Propriedades de E-mail',
	'ACP_EXTENSION_GROUPS'		=> 'Administrar Grupos',
	
	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Permissões a Fórum',
	'ACP_FORUM_LOGS'				=> 'Logs do Fórum',
	'ACP_FORUM_MANAGEMENT'			=> 'Administração de Fórum',
	'ACP_FORUM_MODERATORS'			=> 'Moderadores de Fórum',
	'ACP_FORUM_PERMISSIONS'			=> 'Permissões de Fórum',
	'ACP_FORUM_PERMISSIONS_COPY'	=> 'Copiar permissões de Fórum',
	'ACP_FORUM_ROLES'				=> 'Regras de Fórum',

	'ACP_GENERAL_CONFIGURATION'		=> 'Configuração Geral',
	'ACP_GENERAL_TASKS'				=> 'Perguntas gerais',
	'ACP_GLOBAL_MODERATORS'			=> 'Moderadores Globais',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Permissões Globais',
	'ACP_GROUPS'					=> 'Grupos',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Permissões de Grupo em Fóruns',
	'ACP_GROUPS_MANAGE'				=> 'Gerenciar Grupos',
	'ACP_GROUPS_MANAGEMENT'			=> 'Administração de grupos',
	'ACP_GROUPS_PERMISSIONS'		=> 'Permissões de Grupo',
	
	'ACP_ICONS'					=> 'ícones de Tópicos',
	'ACP_ICONS_SMILIES'			=> 'Tópicos ícones/smilies',
	'ACP_IMAGESETS'				=> 'Grupo de Imagens',
	'ACP_INACTIVE_USERS'		=> 'Usuários Inativos',
	'ACP_INDEX'					=> 'índice do ACP',
	
	'ACP_JABBER_SETTINGS'		=> 'Propriedades de Jabber',
	
	'ACP_LANGUAGE'				=> 'Administração de Idiomas',
	'ACP_LANGUAGE_PACKS'		=> 'Pacotes de Idioma',
	'ACP_LOAD_SETTINGS'			=> 'Carregar Propriedades',
	'ACP_LOGGING'				=> 'Entrando',
	
	'ACP_MAIN'					=> 'índice do ACP',
	'ACP_MANAGE_EXTENSIONS'		=> 'Gerenciar Extensões',
	'ACP_MANAGE_FORUMS'			=> 'Gerenciar Fóruns',
	'ACP_MANAGE_RANKS'			=> 'Gerenciar Ranks',
	'ACP_MANAGE_REASONS'		=> 'Gerenciar Razões de Notificação/Negação',
	'ACP_MANAGE_USERS'			=> 'Gerenciar Usuários',
	'ACP_MASS_EMAIL'			=> 'E-mail em Massa',
	'ACP_MESSAGES'				=> 'Mensagens',
	'ACP_MESSAGE_SETTINGS'		=> 'Mensagens Privadas',
	'ACP_MODULE_MANAGEMENT'		=> 'Gerência de Módulo',
	'ACP_MOD_LOGS'				=> 'Log dos Moderadores',
	'ACP_MOD_ROLES'				=> 'Regras de Moderadores',
	
	'ACP_NO_ITEMS'				=> 'Sem itens.',
	
	'ACP_ORPHAN_ATTACHMENTS'	=> 'Anexos órfãos',
	
	'ACP_PERMISSIONS'			=> 'Permissões',
	'ACP_PERMISSION_MASKS'		=> 'Permissões de Máscara',
	'ACP_PERMISSION_ROLES'		=> 'Permissões de regras',
	'ACP_PERMISSION_TRACE'		=> 'Rastrear Permissões',
	'ACP_PHP_INFO'				=> 'Informação do PHP',
	'ACP_POST_SETTINGS'			=> 'Mensagens',
	'ACP_PRUNE_FORUMS'			=> 'Limpar Fóruns',
	'ACP_PRUNE_USERS'			=> 'Limpar Usuários',
	'ACP_PRUNING'				=> 'Limpando',
	
	'ACP_QUICK_ACCESS'			=> 'Acesso Rápido',
	
	'ACP_RANKS'					=> 'Ranks',
	'ACP_REASONS'				=> 'Razões para notificar/denunciar',
	'ACP_REGISTER_SETTINGS'		=> 'Registro de Usuários',

	'ACP_RESTORE'				=> 'Restaurar',
	'ACP_FEED'					=> 'Gerenciar Feed',
	'ACP_FEED_SETTINGS'			=> 'Opções Feed',

	'ACP_SEARCH'				=> 'Configuração da Busca',
	'ACP_SEARCH_INDEX'			=> 'índice da Busca',
	'ACP_SEARCH_SETTINGS'		=> 'Propriedades da Busca',

	'ACP_SECURITY_SETTINGS'		=> 'Propriedades de Segurança',
	'ACP_SEND_STATISTICS'		=> 'Enviar informação de estatística',
	'ACP_SERVER_CONFIGURATION'	=> 'Configuração do servidor',
	'ACP_SERVER_SETTINGS'		=> 'Propriedades do Servidor',
	'ACP_SIGNATURE_SETTINGS'	=> 'Propriedades de Assinatura',
	'ACP_SMILIES'				=> 'Smilies',
	'ACP_STYLE_COMPONENTS'		=> 'Componentes de Estilo',
	'ACP_STYLE_MANAGEMENT'		=> 'Gerência de estilo',
	'ACP_STYLES'				=> 'Estilos',
	'ACP_SUBMIT_CHANGES'		=> 'Enviar mudanças',
	'ACP_TEMPLATES'				=> 'Templates',
	'ACP_THEMES'				=> 'Temas',
	
	'ACP_UPDATE'					=> 'Atualizando',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Permissões de Usuários em Fóruns',
	'ACP_USERS_LOGS'				=> 'Log dos Usuários',
	'ACP_USERS_PERMISSIONS'			=> 'Permissões dos Usuários',
	'ACP_USER_ATTACH'				=> 'Anexos',
	'ACP_USER_AVATAR'				=> 'Avatares',
	'ACP_USER_FEEDBACK'				=> 'Feedback',
	'ACP_USER_GROUPS'				=> 'Grupos',
	'ACP_USER_MANAGEMENT'			=> 'Gerência de Usuário',
	'ACP_USER_OVERVIEW'				=> 'Visualizar',
	'ACP_USER_PERM'					=> 'Permissões',
	'ACP_USER_PREFS'				=> 'Preferências',
	'ACP_USER_PROFILE'				=> 'Perfil',
	'ACP_USER_RANK'					=> 'Rank',
	'ACP_USER_ROLES'				=> 'Regras de Usuário',
	'ACP_USER_SECURITY'				=> 'Segurança do usuário',
	'ACP_USER_SIG'					=> 'Assinatura',

	'ACP_USER_WARNINGS'				=> 'Avisos',

	'ACP_VC_SETTINGS'					=> 'CAPTCHA opções de módulo',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'Prévia da imagem CAPTCHA',
	'ACP_VERSION_CHECK'					=> 'Checar Atualizações',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Permissões Administrativas',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Permissões de Moderação',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Permissões de Fóruns',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Permissões de Moderadores Globais',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Permissões de Usuário',
	
	'ACP_WORDS'					=> 'Censura de Palavras',

	'ACTION'				=> 'Ação',
	'ACTIONS'				=> 'Ações',
	'ACTIVATE'				=> 'Ativar',
	'ADD'					=> 'Adicionar',
	'ADMIN'					=> 'Administração',
	'ADMIN_INDEX'			=> 'índice de Administração',
	'ADMIN_PANEL'			=> 'Painel de Administração',

// Mudan栳 3.0.5	
	'ADM_LOGOUT'			=> 'Deslogar do &nbsp;ACP',
// Mudan栳 3.0.5
    'ADM_LOGGED_OUT'      => 'Deslogado com sucesso no Painel de Administração do Fórum',

	'BACK'					=> 'Voltar',

	'COLOUR_SWATCH'			=> 'Cores seguras de navegação',
	'CONFIG_UPDATED'		=> 'Configuração atualizada com sucesso.',

	'DEACTIVATE'				=> 'Desativar',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'O caminho “%s” adicionado não existe.',
	'DIRECTORY_NOT_DIR'			=> 'O caminho “%s” adicionado não é um diretório.',
	'DIRECTORY_NOT_WRITABLE'	=> 'O caminho “%s” adicionado não tem permissão de escrita.',
	'DISABLE'					=> 'Desativar',
	'DOWNLOAD'					=> 'Salvar',
	'DOWNLOAD_AS'				=> 'Salvar como',
	'DOWNLOAD_STORE'			=> 'Salva ou armazena arquivo',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Você pode salvar diretamente o arquivo ou salvar em sua pasta <samp>store/</samp>.',

	'EDIT'					=> 'Editar',
	'ENABLE'				=> 'Habilitar',
	'EXPORT_DOWNLOAD'		=> 'Salvar',
	'EXPORT_STORE'			=> 'Armazenar',

	'GENERAL_OPTIONS'		=> 'Opções Gerais',
	'GENERAL_SETTINGS'		=> 'Propriedades Gerais',
	'GLOBAL_MASK'			=> 'Permissões Globais de máscara',

	'INSTALL'				=> 'Instalar',
	'IP'					=> 'Endereço IP',
	'IP_HOSTNAME'			=> 'Endereço IP ou servidor',

	'LOGGED_IN_AS'			=> 'Você está logado como:',
	'LOGIN_ADMIN'			=> 'Para administrar o fórum, você precisará entrar.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Para administrar o fórum, você precisa re-autenticar sua conta.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Você foi autenticado com sucesso e agora será redirecionado para o Painel de Controle da Administração.',
	'LOOK_UP_FORUM'			=> 'Selecione um Fórum',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Você está apto a selecionar mais de um fórum.',
	
	'MANAGE'				=> 'Gerenciar',
	'MENU_TOGGLE'           => 'Ocultar menu',
	'MORE'					=> 'Mais',			// Not used at the moment
	'MORE_INFORMATION'		=> 'Mais informações »',
	'MOVE_DOWN'				=> 'Mover para cima',
	'MOVE_UP'				=> 'Mover para baixo',
	
	'PARSE_BBCODE'          => 'BBCodes reconhecidos',
	'PARSE_SMILIES'         => 'Smilies reconheciods',
	'PARSE_URLS'            => 'Links reconhecidos',
	'PERMISSIONS_TRANSFERRED'			=> 'Transferência de permissão',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'   => 'Você tem as permissões atuais de %1$s. Você está apto para navegar na comunidade com estas permissões de usuário, mas não para acessar o painel administrativo desde que as permissões administrativas não foram transferidas. Você pode <a href="%2$s"><strong>reverter para suas permissões originais</strong></a> a qualquer momento.',

	'NOTIFY'				=> 'Notificação',
	'NO_ADMIN'				=> 'Você não está autorizado a Administrar este fórum.',
	'NO_EMAILS_DEFINED'		=> 'Não foi possível encontrar um e-mail válido',
	'NO_PASSWORD_SUPPLIED'	=> 'Você precisa entrar com sua senha para acessar o painel de administrador.',

	'OFF'					=> 'Desligado',
	'ON'					=> 'Ligado',

	'PROCEED_TO_ACP'					=> '%sEntrar no Painel de Controle da Administração%s',

	'REMIND'							=> 'Lembrar',
	'RESYNC'							=> 'Sincronizar',
	'RETURN_TO'							=> 'Retornar para…',

	'SELECT_ANONYMOUS'		=> 'Selecionar usuário anônimo',
	'SELECT_OPTION'			=> 'Selecionar opção',

	'UCP'					=> 'Painel de Controle do Usuário',
	'USERNAMES_EXPLAIN'		=> 'Adicione o nome de cada usuário em uma linha separada.',
	'USER_CONTROL_PANEL'	=> 'Painel de Controle do Usuário',

	'WARNING'				=> 'Aviso',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Esta página lista informações sobre a versão o PHP instalado neste servidor. Incluindo detalhes de módulos instalados, variáveis disponíveis e propriedades padrão. Esta informação pode ser útil quando diagnosticado problemas. Esteja ciente que certas hospedagens limitam estas informações por questão de segurança. Você está avisado a não passar detalhes desta página a outros exceto quando solicitado por <a href="http://www.phpbb.com/about/">membros oficiais</a> nos fóruns de suporte.',

	'NO_PHPINFO_AVAILABLE'	=> 'As informações sobre a sua configuração do PHP n⭠puderam ser determinadas. Phpinfo() foi desabilitado por questões de segurança.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Estes logs mostram todas as ações tomadas pelo administrador desta comunidade. Você pode escolher pelo usuário, data, IP ou ação. Se você tem permissões apropriadas você também poderá limpar certas operações ou todas as operações assim como desejar.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Estes logs mostram as ações tomadas pela comunidade sozinha. Este log permite a você informações para resolução de determinados problemas, como a não entrega de e-mails. Você pode escolher por usuário, data, IP ou ação. Se você tem permissões apropriadas também poderá limpar certas partes do log ou por inteiro se assim desejar.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Estes logs mostram as ações tomadas pelos moderadores, selecione um fórum da caixa de seleção. Você pode escolher pelo usuário, data, IP ou ação. Se você tem permissões apropriadas também poderá limpar certas partes do log ou por inteiro se assim desejar.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Estes logs mostram todas as ações tomadas pelos usuários.',
	'ALL_ENTRIES'				=> 'Todas as entradas',

	'DISPLAY_LOG'	=> 'Mostrar entradas antigas',

	'NO_ENTRIES'	=> 'Nenhuma entrada para este período',

	'SORT_IP'		=> 'Endereço IP',
	'SORT_DATE'		=> 'Data',
	'SORT_ACTION'	=> 'Ação de Log',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Obrigado por escolher o sistema phpBB como sua solução de fóruns. Esta tela irá permitir a você uma rápida visualização de todas as várias estatísticas de sua comunidade. Os links &agrave; esquerda permitem um controle de todos os aspectos de sua experiência com fóruns. Cada página terá instruções de como utilizar corretamente as funções.',
	'ADMIN_LOG'					=> 'Ações de Administrador Logado',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Aqui você terá uma visualização das últimas cinco ações tomadas pelos administradores. Uma cópia completa do log pode ser encontrada no item de menu apropriado abaixo.',
	'AVATAR_DIR_SIZE'			=> 'Tamanho do diretório de avatares',

	'BOARD_STARTED'		=> 'Comunidade iniciada em',
	'BOARD_VERSION'		=> 'Versão do fórum',

	'DATABASE_SERVER_INFO'	=> 'Servidor de banco de dados',
	'DATABASE_SIZE'			=> 'Tamanho do banco de dados',

	'FILES_PER_DAY'		=> 'Anexos por dia',
	'FORUM_STATS'		=> 'Estatísticas do fórum',

	'GZIP_COMPRESSION'	=> 'Compressão GZip',

	'NOT_AVAILABLE'		=> 'Não disponível',
	'NUMBER_FILES'		=> 'Número de anexos',
	'NUMBER_POSTS'		=> 'Número de mensagens',
	'NUMBER_TOPICS'		=> 'Número de tópicos',
	'NUMBER_USERS'		=> 'Número de usuários',
	'NUMBER_ORPHAN'		=> 'Anexos perdidos',
	'PHP_VERSION_OLD'	=> 'A versão do PHP deste servidor não será mais suportada pelo phpBB. %sDetalhes%s',

	'POSTS_PER_DAY'		=> 'Mensagens por dia',
	
    'PURGE_CACHE'           => 'Resetar cache do fórum',
	'PURGE_CACHE_CONFIRM'	=> 'Você tem certeza que deseja limpar o cache?',
    'PURGE_CACHE_EXPLAIN'   => 'Esta ação irá liberar todo o cache da comunidade, esta ação pode deixar a comunidade lenta até recuperar o cache novamente',
    	'PURGE_SESSIONS'			=> 'Remover todas as sessões',
	'PURGE_SESSIONS_CONFIRM'	=> 'Voce tem certeza que deseja remover todas as sessões? Isto irá deslogar todos os membros ativos no momento.',
	'PURGE_SESSIONS_EXPLAIN'	=> 'Remover todas as sessões. Isto irá deslogar todos os usurários por limpar a tabela de sessão da comunidade.',

    'RESET_DATE'			        => 'Resetar data de inicio do fórum',
	'RESET_DATE_CONFIRM'			=> 'Você tem certeza que deseja resetar a data de início do fórum?',
	'RESET_ONLINE'			        => 'Resetar recorde de usuários online',
	'RESET_ONLINE_CONFIRM'			=> 'Você tem certeza que deseja resetar o maior número de usuários online?',
	'RESYNC_POSTCOUNTS'		        => 'Resincronizar mensagens',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Somente mensagens existentes serão levadas em consideração. Mensagens notificadas ou punidas não serão levadas em conta.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Você tem certeza que deseja resincronizar contagem de mensagens?',
	'RESYNC_POST_MARKING'	        => 'Resincronizar tópicos',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Você tem certeza que deseja resincronizar tópicos adotados?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Primeiro desmarque todos os tópicos e então corretamente marque todos tópicos que tiveram alguma adição nos últimos 6 messes.',
	'RESYNC_STATS'			        => 'Resincronizar estatísticas',
	'RESYNC_STATS_CONFIRM'			=> 'Você tem certeza que deseja resincronizar estatísticas?',
	'RESYNC_STATS_EXPLAIN'			=> 'Recalcular o número total de mensagens, tópicos, usuários e arquivos.',
	'RUN'							=> 'Rodar agora',

	'STATISTIC'			        => 'Estatísticas',
	'STATISTIC_RESYNC_OPTIONS'  => 'Ferramentas de manutenção',

	'TOPICS_PER_DAY'	=> 'Tópicos por dia',

	'UPLOAD_DIR_SIZE'	=> 'Tamanho dos anexos postados',
	'USERS_PER_DAY'		=> 'Usuários por dia',

	'VALUE'					=> 'Valor',
	'VERSIONCHECK_FAIL'			=> 'Falha ao tentar obter a última versão disponível.',
	'VERSIONCHECK_FORCE_UPDATE'	=> 'Re-Checar versão',
	'VIEW_ADMIN_LOG'		=> 'Ver log de administrador',
	'VIEW_INACTIVE_USERS'	=> 'Ver usuários inativos',

	'WELCOME_PHPBB'			=> 'Bem-vindo ao phpBB',
	'WRITABLE_CONFIG'		=> 'Seu arquivo de configuração (config.php), atualmente permite que todos possam gravar (Escrever; 777). Nós recomendamos enfaticamente que você mude as permissões para 640, ou pelo menos para 644!',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Data inativa',
	'INACTIVE_REASON'				=> 'Razão',
	'INACTIVE_REASON_MANUAL'		=> 'Conta desativada pelo administrador',
	'INACTIVE_REASON_PROFILE'		=> 'Detalhes do perfil alterado',
	'INACTIVE_REASON_REGISTER'		=> 'Registro mais recente',
	'INACTIVE_REASON_REMIND'		=> 'Forçar a reativação do usuário',
	'INACTIVE_REASON_UNKNOWN'		=> 'Desconhecido',
	'INACTIVE_USERS'				=> 'Usuários inativos',
	'INACTIVE_USERS_EXPLAIN'		=> 'Esta é uma lista de usuários que se registraram, mas que estão com suas contas inativas. Você pode ativar, excluir ou lembrar (enviando um e-mail) estes usuários se assim desejar.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Esta é uma lista com os 10 últimos usuários registrados que tem contas inativas. Uma lista completa está disponível no item de menu apropriado ou seguindo o link abaixo onde você pode ativar, excluir ou lembrar (enviando um e-mail) estes usuários se assim desejar.',

	'NO_INACTIVE_USERS'	=> 'Nenhum usuário desativado',

	'SORT_INACTIVE'		=> 'Data inativa',
	'SORT_LAST_VISIT'	=> 'última visita',
	'SORT_REASON'		=> 'Razão',
	'SORT_REG_DATE'		=> 'Data de registro',
'SORT_LAST_REMINDER'=> 'último lembrado',
	'SORT_REMINDER'		=> 'Lembrete enviado',
	'USER_IS_INACTIVE'		=> 'Usuário está inativo',
));

// Send statistics page
$lang = array_merge($lang, array(
	'EXPLAIN_SEND_STATISTICS'	=> 'Favor envie informacoes sobre seu servidor, sua comunidade para o phpBB para analise de estatisticas. Toda informacao que podera identificar seu website foi removida - os dados sao inteiramente anonimos. Iremos nos basear para futuras mudancas no sistema com estas informacoes. As estatisticas serao tornadas publicas. Tambem iremos dividir estes dados com outros projetos em PHP, pois phpBB e feito com php.',
	'EXPLAIN_SHOW_STATISTICS'	=> 'Usando o botao abaixo podera ver todas as variaveis que serao enviadas ao phpBB.',
	'DONT_SEND_STATISTICS'		=> 'Retorna para o ACP se voce nao deseja enviar estatistica para o phpBB.',
	'GO_ACP_MAIN'				=> 'Ir a pagina incial do ACP',
	'HIDE_STATISTICS'			=> 'Ocultar detalhes',
	'SEND_STATISTICS'			=> 'Enviar informacao de estatistica',
	'SHOW_STATISTICS'			=> 'Mostrar detalhes',
	'THANKS_SEND_STATISTICS'	=> 'Obrigado por enviar sua informacao.',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Adicionar ou editar permissões de usuário</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Adicionar ou editar permissões de grupo</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Adicionar ou editar permissões de moderadores global</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Adicionar ou editar permissões de grupos dos moderadores globais</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Adicionar ou editar permissões de administrador ao usuário</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Adicionar ou editar permissão de administrador ao grupo</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Adicionar ou editar administradores</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Adicionar ou editar moderadores globais</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Adicionar ou editar o acesso de usuários ao fórum</strong> de %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Adicionar ou editar acesso ao fórum por moderadores</strong> de %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Adicionar ou editar acessos ao fórum por grupos</strong> de %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Adicionar ou editar acesso ao fórum por grupos de moderadores</strong> de %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Adicionar ou editar Moderadores</strong> de %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Adicionar ou editar permissões de fórum</strong> de %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Administradores Removidos</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Moderadores Globais Removidos</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Moderadores Removidos</strong> de %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Permissões de usuário/fórum removidas</strong> de %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Permissões transferidas de</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Próprias permissões restauradas após utilizar de</strong><br />» %s',
	
	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Tentativa de login falhou</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Login efetuado com sucesso</strong>',

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Removido anexos do usuário</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Adicionar ou remover extensões de anexos</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Extensões removidas de anexos</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Atualizar extensões de anexos</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Adicionada extensão ao grupo</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Editar extensão de grupo</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Removida extensão de grupo</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Arquivo órfão enviado ao tópico</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Arquivos órfãos deletados</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Usuários excluídos do banimento</strong> pela razão "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>IP excluído do banimento</strong> pela razão "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>E-mail excluído do banimento</strong> pela razão "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_USER'			=> '<strong>Usuário banido</strong> pela razão "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_IP'			=> '<strong>IP banido</strong> pela razão "<em>%1$s</em>"<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>E-mail banido</strong> pela razão "<em>%1$s</em>"<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Usuário desbanido</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>IP desbanido</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>E-mail desbanido</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Adicionar novo BBCode</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>Editar BBCode</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>Excluir BBCode</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>Novo robô adicionado</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Excluir robô</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Atualizar robôs existentes</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Log de admin resetado</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Log de erros resetado</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Log de moderadores resetado</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Log de usuário resetado</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Log de usuários resetado</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Alterada as propriedades dos anexos</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Alterada as propriedades de autenticação</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Alterada as propriedades de avatar</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Alterada as propriedades de cookies</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Alterada as propriedades de e-mail</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Alterada as propriedades do fórum</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Alterada as propriedades de carregamento</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Alterada as propriedades das mensagens privadas</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Alterada as propriedades de mensagens</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Alterada as propriedades de registro de usuário</strong>',
	'LOG_CONFIG_FEED'			=> '<strong>Alterada as propriedades do syndication feeds</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Alterada as propriedades da busca</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Alterada as propriedades de segurança</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Alterada as propriedades do servidor</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Alterada as propriedades da comunidade</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Alterada as propriedades de assinatura</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Alterada as propriedades de confirmação visual</strong>',

    'LOG_APPROVE_TOPIC'			=> '<strong>Tópico aprovado</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Usuário pular tópico</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Excluir mensagem</strong><br />» %s',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>Excluir tópico fantasma</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Tópico excluído</strong><br />» %s',
	'LOG_FORK'					=> '<strong>Tópico copiado</strong><br />» de %s',
	'LOG_LOCK'					=> '<strong>Tópico bloqueado</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Mensagem bloqueada</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Mensagens unidas</strong> em tópico<br />» %s',
	'LOG_MOVE'					=> '<strong>Tópicos movidos</strong><br />» de %1$s para %2$s',
	'LOG_PM_REPORT_CLOSED'		=> '<strong>Fechado PM reporte</strong><br />» %s',
	'LOG_PM_REPORT_DELETED'		=> '<strong>Deletado PM reporte</strong><br />» %s',
	'LOG_POST_APPROVED'			=> '<strong>Mensagem Aprovada</strong><br />é » %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Mensagem desaprovada %1$s com a seguinte razão</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Mensagem editada %1$s escrito por</strong><br />» %2$s',
	'LOG_REPORT_CLOSED'			=> '<strong>Notificação encerrada</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Notificação removida</strong><br />» %s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Mensagens divididas movidas</strong><br />» para %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Dividir mensagens</strong><br />» de %s',

	'LOG_TOPIC_APPROVED'		=> '<strong>Tópico aprovado</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Tópico rejeitado %1$s com o seguinte motivo</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Resincronizar contagem de tópicos</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Modificado tipo de tópico</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Tópico desbloqueado</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Mensagem desbloqueada</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Adicionar nome de usuário Proibido</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Remover nome de usuário Proibido</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Backup do banco de dados</strong>',
	'LOG_DB_DELETE'			=> '<strong>Backup do banco de dados removido</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Banco de dados restaurado</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Excluído IP/Nome de servidor da lista de download</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Adicionado IP/Nome de servidor para a lista de download</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Removido IP/Nome de servidor da lista de download</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Jabber erro</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>E-mail erro</strong><br />» %s',
	
	'LOG_FORUM_ADD'							=> '<strong>Criar novo fórum</strong><br />» %s',
	'LOG_FORUM_COPIED_PERMISSIONS'			=> '<strong>permissões de fórum copiadas</strong> de %1$s<br />» %2$s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Excluir fórum</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Excluir fórum e subfóruns</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Excluir fórum e mover subfóruns</strong> para %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Excluir fórum e mover mensagens </strong> para %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Excluir fórum e subfóruns, movendo mensagens</strong> para %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Deletado fórum, mensagens movidas</strong> para %1$s <strong>e subfóruns</strong> para %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Deletado fórum e suas mensagens</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Deletado fórum, suas mensagens e subfóruns</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Deletado fórum e suas mensagens, subfóruns movidos</strong> para %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Editado detalhes do fórum</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Fórum movido</strong> %1$s <strong>abaixo</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Fórum movido</strong> %1$s <strong>acima</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Fórum re-sincronizado</strong><br />» %s',
	
	'LOG_GENERAL_ERROR'	=> '<strong>Um erro geral ocorreu</strong>: %1$s <br />» %2$s',

	'LOG_GROUP_CREATED'		=> '<strong>Novo grupo de usuário criado</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Grupo “%1$s” definido como padrão para membros</strong><br />» %s',
	'LOG_GROUP_DELETE'		=> '<strong>Grupo de Usuários deletado</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Moderadores de Grupo</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Membros promovidos a moderadores do grupo</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Membros removidos do grupo</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Detalhes do grupo atualizado</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Adicionado novo moderador ao grupo</strong> %1$s<br />» %2$s',
	
	'LOG_USERS_ADDED'		=> '<strong>Adicionado novos membros ao grupo</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Membros aprovados ao grupo</strong> %1$s<br />» %2$s',
	'LOG_USERS_PENDING'		=> '<strong>Membro requer se juntar ao grupo %1$s e precisa ser aprovado</strong><br />» %2$s',

	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>Error while creating image</strong><br />» Error in %1$s on line %2$s: %3$s',
	'LOG_IMAGESET_ADD_DB'		    => '<strong>Adicionada nova imagem ao Banco de Dados</strong><br />» %s',
	'LOG_IMAGESET_ADD_FS'		    => '<strong>Adicionada nova imagem ao sistema</strong><br />» %s',
	'LOG_IMAGESET_DELETE'		    => '<strong>Deletado grupo de imagens</strong><br />» %s',
	'LOG_IMAGESET_EDIT_DETAILS'	    => '<strong>Editado propriedades de grupo de imagens</strong><br />» %s',
	'LOG_IMAGESET_EDIT'			    => '<strong>Editado grupo de imagens</strong><br />» %s',
	'LOG_IMAGESET_EXPORT'		    => '<strong>Exportado grupo de imagens</strong><br />» %s',
	'LOG_IMAGESET_LANG_MISSING'		=> '<strong>Grupo de imagens perdeu a localização “%2$s”</strong><br />» %1$s',
	'LOG_IMAGESET_LANG_REFRESHED'	=> '<strong>Atualizado localização “%2$s” do grupo de imagens</strong><br />» %1$s',
	'LOG_IMAGESET_REFRESHED'	    => '<strong>Atualizado grupo de imagens</strong><br />» %s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Ativado usuários inativos</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Excluir usuários inativos</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Enviar e-mail de ativação a usuários inativos</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Convertido de %1$s para phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Instalado phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Sessão IP/navegador/X_FORWARDED_FOR checagem falhou</strong><br />»IP usuário "<em>%1$s</em>" checado novamente na sessão de IP "<em>%2$s</em>", navegador de usuário "<em>%3$s</em>" checado novamente navegador de usuário "<em>%4$s</em>" e usuário X_FORWARDED_FOR string "<em>%5$s</em>" checada novamente a sessão X_FORWARDED_FOR string "<em>%6$s</em>".',

	'LOG_JAB_CHANGED'			=> '<strong>Conta Jabber modificada</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Senha Jabber modificada</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Conta Jabber registrada</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Modificada propriedades Jabber</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Idiomas deletados</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Idiomas instalados</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Detalhes dos idiomas atualizados</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Arquivo trocado de idioma</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Enviado arquivo de idioma e armazenado no local dos idiomas</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Enviar e-mail em massa</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Trocar criador de tópico no tópico "%1$s"</strong><br />» de %2$s para %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Módulo desabilitado</strong>',
	'LOG_MODULE_ENABLE'		=> '<strong>Módulo habilitado</strong>',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Módulo movido para baixo</strong><br />» %s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Módulo movido para cima</strong><br />» %s',
	'LOG_MODULE_REMOVED'	=> '<strong>Módulo removido</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Módulo adicionado</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Módulo editado</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Comportamento de administrador adicionado</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Comportamento de administrador editado</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Comportamento de administrador removido</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Comportamento de fórum adicioando</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Comportamento de fórum editado</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Comportamento de fórum removido</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Comportamento de moderadore adicionado</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Comportamento de moderador editado</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Comportamento de moderador removido </strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Comportamento de usuário adicionado</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Comportamento de usuário editado</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Comportamento de usuário removido/strong><br />» %s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Campo de perfil ativado</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Campo de perfil adicionado</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Campo de perfil desativado</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Campo de perfil modificado</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Campo de perfil removido</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Fóruns Removidos</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Auto-limpar fórum</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Usuários removidos</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Usuários removidos e mensagens deletadas</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Usuários removidos e mensagens retidas</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Removido cache</strong>',
	'LOG_PURGE_SESSIONS'		=> '<strong>Removido sessões</strong>',

	'LOG_RANK_ADDED'		=> '<strong>Adicionado novo rank</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Rank removido</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Rank atualizado</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Adicionado nota/proibição motivo</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Removido nota/proibição motivo</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Atualizado nota/proibição motivo</strong><br />» %s',
	'LOG_REFERER_INVALID'      => '<strong>Validação de referência falhou</strong><br />»A referência estava em <em>%1$s</em>. O pedido foi rejeitado e a sessão foi terminada.',

	'LOG_RESET_DATE'			=> '<strong>Resetar data de início da comunidade</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Maior número de usuários online resetar</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Contagem de mensagens dos usuários resincronizadas</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Tópicos pontuados resincronizados</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Mensagem, tópico e usuário, estatísticas resincronizadas</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Criado índex da busca por</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Removido índex da busca</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Adicionar novo estilo</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Excluir estilo</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Editar estilo</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Exportar estilo</strong><br />» %s',

	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Adicionada nova template ao banco de dados</strong><br />» %s',
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Adicionada nova template ao sistema</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Deletado o cache de arquivos da template <em>%1$s</em> em configurações de templates</strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Deletada definições de template</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Editada definições de template <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Editado detalhes de template</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Exportada definições de template</strong><br />» %s',
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Atualizada definições de template</strong><br />» %s',

	'LOG_THEME_ADD_DB'			=> '<strong>Adicionado novo tema ao banco de dados</strong><br />» %s',
	'LOG_THEME_ADD_FS'			=> '<strong>Adicionado novo tema ao sistema</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Tema deletado</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Editado detalhes de tema</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Editado tema <em>%1$s</em></strong><br />» Modificada classe <em>%2$s</em>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Tema editado <em>%1$s</em></strong><br />» Modificado arquivo <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Tema exportado</strong><br />» %s',
	'LOG_THEME_REFRESHED'		=> '<strong>Tema atualizado</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Atualizado banco de dados da versão %1$s para versão %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>Atualizado phpBB da versão %1$s para versão %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>Usuário ativado</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Usuário banido via Gerenciamento de usuário</strong> pelo motivo "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>Endereço IP banido via Gerenciamento de usuário</strong> pelo motivo "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>E-mail banido via Gerenciamento de usuário</strong> pelo motivo "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Usuário deletado</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Removidos todos anexos feito pelo usuário</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Removido avatar do usuário</strong><br />» %s',
	'LOG_USER_DEL_OUTBOX'	=> '<strong>Limpada caixa de saida do usuario</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Removido todas mensagens feitas pelo usuário</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Removida assinatura do usuário</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Usuário desativado</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Movida mensagens do usuário</strong><br />» mensagens de "%1$s" para fórum "%2$s"',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Trocada a senha do usuário</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Forçada re-ativação da conta do usuário</strong><br />» %s',
	'LOG_USER_REMOVED_NR'	=> '<strong>Removida marcacao de novos usuarios</strong><br />» %s',
	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Usuário "%1$s" trocou e-mail</strong><br />» de "%2$s" para "%3$s"',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Nome de usuário alterado</strong><br />» de "%1$s" para "%2$s"',
	'LOG_USER_USER_UPDATE'	=> '<strong>Atualizado detalhes do usuário</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Conta de usuário ativada</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Avatar de usuário removido/strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Assinatura do usuário removida</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Adicionado feedback sobre usuário</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Entrada adicionada:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Conta de usuário desativada</strong>',
	'LOG_USER_LOCK'				=> '<strong>Usuário trancou próprio tópico</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Movida todas mensagens para fórum "%s"</strong>',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Forçada re-ativação de conta do usuário</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Usuário desbloqueou próprio tópico</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Adicionada advertência ao usuário</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>A seguinte advertência foi adicionada a este usuário</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Usuário mudou grupo padrão</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Usuário denotou como lider do grupo</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Usuário juntou-se ao grupo</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Usuário juntou-se ao grupo e precisa ser aprovado</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Usuário resignou participação de grupo</strong><br />» %s',
	'LOG_WARNING_DELETED'		=> '<strong>Removido aviso de usuario</strong><br />» %s',
	'LOG_WARNINGS_DELETED'		=> '<strong>Removido %2$s avisos de usuário</strong><br />» %1$s', // Example: '<strong>Deleted 2 user warnings</strong><br />» username'
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>Removido todos os avisos do usuário</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Adicionada palavra censurada</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Deletada palavra censurada</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Editada palavra censurada</strong><br />» %s',
));

?>
