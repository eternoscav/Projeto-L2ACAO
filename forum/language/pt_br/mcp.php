<?php
/**
*
* mcp [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.2
* @package language: Brazilian Portuguese
* @original version $Id: mcp.php,v 1.83 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translator: phpBB Brasil - http://www.phpBBrasil.com.br/ - 2007-12-17 - 15:06
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
	'ACTION'				=> 'Ação',
	'ACTION_NOTE'			=> 'Ação/Notar',
	'ADD_FEEDBACK'			=> 'Adicionar comentário',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Se você quiser adicionar um relatório aqui, por favor, preencha o seguinte formulário. Use somente texto; HTML, BBCode, etc. não são permitidos.',
	'ADD_WARNING'			=> 'Adicionar uma advertência',
	'ADD_WARNING_EXPLAIN'	=> 'Para enviar uma advertência a este usuário, por favor, preencha o seguinte formulário. Use somente texto; HTML, BBCode, etc. não são permitidos.',
	'ALL_ENTRIES'			=> 'Todas as entradas',
	'ALL_NOTES_DELETED'		=> 'Todas as notas de usuário foram removidas com sucesso',
	'ALL_REPORTS'			=> 'Todas as notificações',
	'ALREADY_REPORTED'		=> 'Esta mensagem já foi notificada',
	'ALREADY_REPORTED_PM'	=> 'A mensagem particular j&acute; foi notificada.',
	'ALREADY_WARNED'		=> 'Uma advertência já foi emitida para esta mensagem',
	'APPROVE'				=> 'Aprovar',
	'APPROVE_POST'			=> 'Aprovar mensagem',
	'APPROVE_POST_CONFIRM'	=> 'Você quer realmente aprovar esta mensagem?',
	'APPROVE_POSTS'			=> 'Aprovar mensagens',
	'APPROVE_POSTS_CONFIRM'	=> 'Você quer realmente aprovar as mensagens selecionadas?',

	'CANNOT_MOVE_SAME_FORUM'=> 'Você não pode mover um tópico ao fórum no qual ele já está.',
	'CANNOT_WARN_ANONYMOUS'	=> 'Você não pode advertir usuários visitantes não registrados',
	'CANNOT_WARN_SELF'		=> 'Você não pode se advertir',
	'CAN_LEAVE_BLANK'		=> 'Este espaço à esquerda pode ser em branco.',
	'CHANGE_POSTER'			=> 'Mudar autor da mensagem',
	'CLOSE_PM_REPORT'		=> 'Fechar reporte de MP',
	'CLOSE_PM_REPORT_CONFIRM'	=> 'Tem certeza que deseja fechar o reporte da MP?',
	'CLOSE_PM_REPORTS'		=> 'Fechar reportes de MPs',
	'CLOSE_PM_REPORTS_CONFIRM'	=> 'Tem certeza que deseja fechar os reportes das MPs?',
	'CLOSE_REPORT'			=> 'Fechar notificação',
	'CLOSE_REPORT_CONFIRM'	=> 'Você está certo que você quer fechar a notificação selecionada?',
	'CLOSE_REPORTS'			=> 'Fechar notificações',
	'CLOSE_REPORTS_CONFIRM'	=> 'Você está certo que você quer fechar as notificações selecionadas?',
	'DELETE_PM_REPORT'			=> 'Remover reportagem de MP',
	'DELETE_PM_REPORT_CONFIRM'	=> 'Tem certeza que deseja remover a reportação da MP?',
	'DELETE_PM_REPORTS'			=> 'Remover reportagens de MPs',
	'DELETE_PM_REPORTS_CONFIRM'	=> 'Tem certeza que deseja remover as reportações da MP?',
	
	'DELETE_POSTS'				=> 'Apagar mensagens',
	'DELETE_POSTS_CONFIRM'		=> 'Você está certo que você quer apagar estes mensagens?',
	'DELETE_POST_CONFIRM'		=> 'Você está certo que você quer apagar esta mensagem?',
	'DELETE_REPORT'				=> 'Apagar notificação',
	'DELETE_REPORT_CONFIRM'		=> 'Você está certo que você quer apagar a notificação selecionada?',
	'DELETE_REPORTS'			=> 'Apagar notificações',
	'DELETE_REPORTS_CONFIRM'	=> 'Você está certo que você quer apagar as notificações selecionadas?',
	'DELETE_SHADOW_TOPIC'		=> 'Apagar tópico fantasma',
	'DELETE_TOPICS'				=> 'Apagar tópicos selecionados',
	'DELETE_TOPICS_CONFIRM'		=> 'Você está certo que você quer apagar estes tópicos?',
	'DELETE_TOPIC_CONFIRM'		=> 'Você está certo que você quer apagar este tópico?',
	'DISAPPROVE'				=> 'Desaprovar',
	'DISAPPROVE_REASON'			=> 'Razão para desaprovação',
	'DISAPPROVE_POST'			=> 'Desaprovar mensagem',
	'DISAPPROVE_POST_CONFIRM'	=> 'Você está certo que você quer desaprovar esta mensagem?',
	'DISAPPROVE_POSTS'			=> 'Desaprovar mensagens',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Você está certo que você quer desaprovar as mensagens selecionadas?',
	'DISPLAY_LOG'				=> 'Exibir entradas anteriores a',
	'DISPLAY_OPTIONS'			=> 'Exibir opções',

	'EMPTY_REPORT'					=> 'Você tem que entrar com uma descrição ao selecionar esta razão',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Por favor, note que um ou vários tópicos foram apagados do banco de dados porque eles eram ou estavam vazios',

	'FEEDBACK'				=> 'Avaliação',
	'FORK'					=> 'Copiar',
	'FORK_TOPIC'			=> 'Copiar tópico',
	'FORK_TOPIC_CONFIRM'	=> 'Você está certo que você quer copiar este tópico?',
	'FORK_TOPICS'			=> 'Copiar tópicos selecionados',
	'FORK_TOPICS_CONFIRM'	=> 'Você está certo que você quer copiar os tópicos selecionados?',
	'FORUM_DESC'			=> 'Descrição',
	'FORUM_NAME'			=> 'Nome do fórum',
	'FORUM_NOT_EXIST'		=> 'O fórum que você selecionou não existe',
	'FORUM_NOT_POSTABLE'	=> 'O fórum que você selecionou não aceita mensagens',
	'FORUM_STATUS'			=> 'Estado do fórum',
	'FORUM_STYLE'			=> 'Estilo de fórum',

	'GLOBAL_ANNOUNCEMENT'	=> 'Anúncio global',

	'IP_INFO'				=> 'Informação de endereços de IP',
	'IPS_POSTED_FROM'		=> 'Endereços de IP que este usuário postou de',

	'LATEST_LOGS'				=> 'últimas 5 ações anotadas',
	'LATEST_REPORTED'			=> 'últimas 5 notificações',
	'LATEST_REPORTED_PMS'		=> 'últimas 5 MP reportadas',
	'LATEST_UNAPPROVED'			=> 'últimas 5 mensagens que esperam por aprovação',
	'LATEST_WARNING_TIME'		=> 'última advertência emitida',
	'LATEST_WARNINGS'			=> 'últimas 5 advertências',
	'LEAVE_SHADOW'				=> 'Deixar tópico fantasma no lugar',
	'LIST_REPORT'				=> '1 notificação',
	'LIST_REPORTS'				=> '%d notificações',//Not change the '%d'
	'LOCK'						=> 'Trancar',
	'LOCK_POST_POST'			=> 'Trancar mensagem',
	'LOCK_POST_POST_CONFIRM'	=> 'Você está certo que você quer editar prevendo esta mensagem?',
	'LOCK_POST_POSTS'			=> 'Trancar mensagens selecionados',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Você está certo que você quer editar prevendo as mensagens selecionadas?',
	'LOCK_TOPIC_CONFIRM'		=> 'Você está certo que você quer trancar este tópico?',
	'LOCK_TOPICS'				=> 'Trancar tópicos selecionados',
	'LOCK_TOPICS_CONFIRM'		=> 'Você está certo que você quer trancar todos os tópicos selecionados?',
	'LOGS_CURRENT_TOPIC'		=> 'Vendo atualmente registros de:',
	'LOGIN_EXPLAIN_MCP'			=> 'Para moderar este fórum você deve estar logado.',
	'LOGVIEW_VIEWTOPIC'			=> 'Ver tópico',
	'LOGVIEW_VIEWLOGS'			=> 'Ver registros do tópico',
	'LOGVIEW_VIEWFORUM'			=> 'Ver fórum',
	'LOOKUP_ALL'				=> 'Observar todos os IPs',
	'LOOKUP_IP'					=> 'Observar IP',

	'MARKED_NOTES_DELETED'		=> 'Todas as anotações de usuário marcadas foram removidas com sucesso',

	'MCP_ADD'						=> 'Adicionar uma advertência',

	'MCP_BAN'					=> 'Banindo',
	'MCP_BAN_EMAILS'			=> 'Banir e-mails',
	'MCP_BAN_IPS'				=> 'Banir IPs',
	'MCP_BAN_USERNAMES'			=> 'Banir Usuários',

	'MCP_LOGS'						=> 'Registros do moderador',
	'MCP_LOGS_FRONT'				=> 'Primeira página',
	'MCP_LOGS_FORUM_VIEW'			=> 'Registros de fórum',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Registros de tópico',

	'MCP_MAIN'						=> 'Principal ',
	'MCP_MAIN_FORUM_VIEW'			=> 'Ver fórum',
	'MCP_MAIN_FRONT'				=> 'Primeira página',
	'MCP_MAIN_POST_DETAILS'			=> 'Detalhes da mensagem',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Ver tópico',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Modificar para “Anúncio”',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Você está certo que você quer mudar este tópico em um “Anúncio”?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'Modificar para “Anúncios”',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Você está certo que você quer mudar os tópicos selecionados em “Anúncios”?',
	'MCP_MAKE_GLOBAL'				=> 'Modificar para “Anúncio Global”',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Você está certo que você quer mudar este tópico em um “Anúncio Global”?',
	'MCP_MAKE_GLOBALS'				=> 'Modificar para “Anúncios globais”',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Você está certo que você quer mudar os tópicos selecionados em “Anúncios globais”?',
	'MCP_MAKE_STICKY'				=> 'Modificar para “Fixo”',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Você está certo que você quer mudar este tópico para um tópico “Fixo”?',
	'MCP_MAKE_STICKIES'				=> 'Modificar para “Fixos”',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Você está certo que você quer mudar os tópicos selecionados em tópicos “Fixos”?',
	'MCP_MAKE_NORMAL'				=> 'Modificar para “Tópico Normal”',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Você está certo que você quer mudar este tópico em um “Tópico Normal”?',
	'MCP_MAKE_NORMALS'				=> 'Modificar para “Tópicos Normais”',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Você está certo que você quer mudar os tópicos selecionados em “Tópicos Normais”?',

	'MCP_NOTES'						=> 'Notas de usuário',
	'MCP_NOTES_FRONT'				=> 'Primeira página',
	'MCP_NOTES_USER'				=> 'Detalhes do usuário',

	'MCP_POST_REPORTS'				=> 'Notificações emitidas nesta mensagem',
	
	'MCP_PM_REPORTS'				=> 'MP reportadas',
	'MCP_PM_REPORT_DETAILS'			=> 'Detalhe de MP reportada',
	'MCP_PM_REPORTS_CLOSED'			=> 'Fechar MP reportada',
	'MCP_PM_REPORTS_CLOSED_EXPLAIN'	=> 'Esta é uma lista de todas as mensagens particulares reportadas no qual foram anteriormente solucionadas.',
	'MCP_PM_REPORTS_OPEN'			=> 'Abrir reporte de MP',
	'MCP_PM_REPORTS_OPEN_EXPLAIN'	=> 'Esta é uma lista de todas mensagens particulares reportadas que ainda requerem um status de solução.',
	
	'MCP_REPORTS'					=> 'Mensagens notificadas',
	'MCP_REPORT_DETAILS'			=> 'Detalhes da notificação',
	'MCP_REPORTS_CLOSED'			=> 'Notificações fechadas',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Esta é uma lista de todas as notificações sobre mensagens que foram previamente resolvidas.',
	'MCP_REPORTS_OPEN'				=> 'Notificações abertas',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Esta é uma lista de todas as mensagens notificadas que ainda serão controladas.',

	'MCP_QUEUE'								=> 'Espera de moderação',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Aprovar detalhes',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Mensagens esperando aprovação',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Esta é uma lista de todas as mensagens que requerem aprovação antes deles serem visíveis aos usuários',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Tópicos esperando aprovação',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Esta é uma lista de todos os tópicos que requerem aprovação antes deles serem visíveis aos usuários',

	'MCP_VIEW_USER'			=> 'Ver advertências de um usuário específico',

	'MCP_WARN'				=> 'Advertências',
	'MCP_WARN_FRONT'		=> 'Primeira página',
	'MCP_WARN_LIST'			=> 'Lista de advertências',
	'MCP_WARN_POST'			=> 'Advertir uma mensagem específica',
	'MCP_WARN_USER'			=> 'Advertir usuário',

	'MERGE_POSTS'			=> 'Unir mensagens',
	'MERGE_POSTS_CONFIRM'	=> 'Você está certo que você quer unir as mensagens selecionadas?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Usando a formulário abaixo, você pode unir mensagens selecionados em outro tópico. Estas mensagens não serão reordenadas e aparecerão como se os usuários os postaram no novo tópico.<br / > Por favor, entre no id do tópico de destino ou clique no botão “Selecionar” para procurar um.',
	'MERGE_TOPIC_ID'		=> 'Número de identificação do destino do tópico',
	'MERGE_TOPICS'			=> 'Unir tópicos',
	'MERGE_TOPICS_CONFIRM'	=> 'Você está certo que você quer unir os tópicos selecionados?',
	'MODERATE_FORUM'		=> 'Moderar fórum',
	'MODERATE_TOPIC'		=> 'Moderar tópico',
	'MODERATE_POST'			=> 'Moderar mensagem',
	'MOD_OPTIONS'			=> 'Opções do moderador',
	'MORE_INFO'				=> 'Informações adicionais',
	'MOST_WARNINGS'			=> 'Usuários com mais advertências',
	'MOVE_TOPIC_CONFIRM'	=> 'Você está certo que você quer mover o tópico para um novo fórum?',
	'MOVE_TOPICS'			=> 'Mover tópicos selecionados',
	'MOVE_TOPICS_CONFIRM'	=> 'Você está certo que você quer mover os tópicos selecionados para um novo fórum?',

	'NOTIFY_POSTER_APPROVAL'		=> 'Notificar o usuário sobre a aprovação da mensagem?',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'Notificar o usuário sobre a desaprovação da mensagem?',
	'NOTIFY_USER_WARN'				=> 'Notificar o usuário sobre a advertência?',
	'NOT_MODERATOR'					=> 'Você não é moderador deste fórum.',
	'NO_DESTINATION_FORUM'			=> 'Por favor, selecione um fórum para destino.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'Não há nenhum fórum de destino disponível.',
	'NO_ENTRIES'					=> 'Nenhum registro neste período.',
	'NO_FEEDBACK'					=> 'Nenhuma avaliação existente para este usuário.',
	'NO_FINAL_TOPIC_SELECTED'		=> 'Você tem que selecionar um tópico de destino por unir as mensagens.',
	'NO_MATCHES_FOUND'				=> 'Nenhuma partida encontrada.',
	'NO_POST'						=> 'Você tem que selecionar uma  mensagem para advertir o usuário por uma mensagem.',
	'NO_POST_REPORT'				=> 'Esta mensagem não foi notificada.',
	'NO_POST_SELECTED'				=> 'Você tem que selecionar uma mensagem pelo menos para executar esta ação.',
	'NO_REASON_DISAPPROVAL'			=> 'Por favor, dê uma razão apropriada para a desaprovação.',
	'NO_REPORT'						=> 'Nenhuma notificação encontrada',
	'NO_REPORTS'					=> 'Não foram encontradas notificações',
	'NO_REPORT_SELECTED'			=> 'Você deve selecionar pelo menos uma notificação para continuar com esta ação.',
	'NO_TOPIC_ICON'					=> 'Nenhum',
	'NO_TOPIC_SELECTED'				=> 'Você tem que selecionar um tópico pelo menos para executar esta ação.',
	'NO_TOPICS_QUEUE'				=> 'Não há tópicos esperando por aprovação.',

	'ONLY_TOPIC'			=> 'Somente tópico “%s”',
	'OTHER_USERS'			=> 'Outros usuários que enviaram mensagens deste IP',

	'PM_REPORT_CLOSED_SUCCESS'	=> 'O reporte da MP selecionada foi fechado com sucesso.',
	'PM_REPORT_DELETED_SUCCESS'	=> 'O reporte da MP selecionada foi removido com sucesso.',
	'PM_REPORTED_SUCCESS'		=> 'Esta mensagem particular foi reportada com sucesso.',
	'PM_REPORT_TOTAL'			=> 'No total existem <strong>1</strong> MP para revisar.',

	'PM_REPORTS_CLOSED_SUCCESS'	=> 'As Mensagens Particulares selecionadas foram fechadas com sucesso.',
	'PM_REPORTS_DELETED_SUCCESS'=> 'As Mensagens Particulares selecionadas foram removidas com sucesso.',

	'PM_REPORTS_TOTAL'			=> 'No total existem <strong>%d</strong> MP para serem revisadas.',
	'PM_REPORTS_ZERO_TOTAL'		=> 'Não existem MP para serem revisadas.',
	'PM_REPORT_DETAILS'			=> 'Detalhes da mensagem particular reportada',

	'POSTER'					=> 'Usuário postador',
	'POSTS_APPROVED_SUCCESS'	=> 'As mensagens selecionadas foram aprovadas.',
	'POSTS_DELETED_SUCCESS'		=> 'As mensagens selecionadas foram removidas com sucesso do banco de dados.',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'As mensagens selecionadas foram desaprovadas.',
	'POSTS_LOCKED_SUCCESS'		=> 'As mensagens selecionadas foram trancadas com sucesso.',
	'POSTS_MERGED_SUCCESS'		=> 'As mensagens selecionadas foram unidas.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'As mensagens selecionados foram destrancados com sucesso.',
	'POSTS_PER_PAGE'			=> 'Mensagens por página',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(Selecione 0 para ver todas as mensagens.)',
	'POST_APPROVED_SUCCESS'		=> 'A mensagem selecionada foi aprovada.',
	'POST_DELETED_SUCCESS'		=> 'A mensagem selecionada foi removida com sucesso do banco de dados.',
	'POST_DISAPPROVED_SUCCESS'	=> 'A mensagem selecionada foi desaprovada.',
	'POST_LOCKED_SUCCESS'		=> 'Mensagem trancada com sucesso.',
	'POST_NOT_EXIST'			=> 'A mensagem que você pediu não existe.',
	'POST_REPORTED_SUCCESS'		=> 'Esta mensagem foi notificada com sucesso.',
	'POST_UNLOCKED_SUCCESS'		=> 'Mensagem destrancada com sucesso.',

	'READ_USERNOTES'			=> 'Anotações de usuário',
	'READ_WARNINGS'				=> 'Advertências de usuário',
	'REPORTER'					=> 'Notificador',
	'REPORTED'					=> 'Notificado',
	'REPORTED_BY'				=> 'Notificado por',
	'REPORTED_ON_DATE'			=> 'em',
	'REPORTS_CLOSED_SUCCESS'	=> 'As notificações selecionadas foram fechadas com sucesso.',
	'REPORTS_DELETED_SUCCESS'	=> 'As notificações selecionadas foram apagadas com sucesso.',
	'REPORTS_TOTAL'				=> 'No total, há <strong>%d</strong> notificações para revisar.',
	'REPORTS_ZERO_TOTAL'		=> 'Não há nenhuma notificação para revisar.',
	'REPORT_CLOSED'				=> 'Esta notificação foi previamente fechada.',
	'REPORT_CLOSED_SUCCESS'		=> 'A notificação selecionada foi fechada com sucesso.',
	'REPORT_DELETED_SUCCESS'	=> 'A notificação selecionada foi apagada com sucesso.',
	'REPORT_DETAILS'			=> 'Detalhes da notificação',
	'REPORT_MESSAGE'			=> 'Notificar esta mensagem',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Use este formulário para notificar uma mensagem selecionada aos administradores do fórum. A notificação geralmente deve ser usada somente se a mensagem quebrar as regras de fórum.',
	'REPORT_NOTIFY'				=> 'Notificar mensagem',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Informa quando sua notificação for resolvida',
	'REPORT_POST_EXPLAIN'		=> 'Use este formulário para notificar a mensagem selecionada aos moderadores e administradores do fórum. A notificação geralmente deve ser usada somente se a mensagem quebrar as regras de fórum.',
	'REPORT_REASON'				=> 'Razão da notificação',
	'REPORT_TIME'				=> 'Hora da notificação',
	'REPORT_TOTAL'				=> 'No total há <strong>1</strong> notificação para revisar',
	'RESYNC'					=> 'Resincronizar',
	'RETURN_MESSAGE'			=> '%sVoltar para a mensagem%s',
	'RETURN_NEW_FORUM'			=> '%sVoltar para o fórum%s',
	'RETURN_NEW_TOPIC'			=> '%sVoltar para o novo tópico%s',
	'RETURN_PM'					=> '%sVoltar a mensagens particulares%s',
	'RETURN_POST'				=> '%sVoltar para o poste%s',
	'RETURN_QUEUE'				=> '%sVoltar para a espera%s',
	'RETURN_REPORTS'			=> '%sVoltar para as notificações%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sVoltar para o tópico%s',

	'SEARCH_POSTS_BY_USER'				=> 'Busca de mensagens por',
	'SELECT_ACTION'						=> 'Selecionar ação desejada',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Por favor, selecione o fórum que você deseja exibir este anúncio global.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Um ou mais dos tópicos selecionados são anúncios globais. Por favor, selecione o fórum que ao qual você deseja exibí-los.',
	'SELECT_MERGE'						=> 'Selecione para unir',
	'SELECT_TOPICS_FROM'				=> 'Selecionar tópicos de',
	'SELECT_TOPIC'						=> 'Selecionar tópico',
	'SELECT_USER'						=> 'Selecionar usuário',
	'SORT_ACTION'						=> 'Registro de ações',
	'SORT_DATE'							=> 'Data',
	'SORT_IP'							=> 'Endereço de IP',
	'SORT_WARNINGS'						=> 'Advertências',
	'SPLIT_AFTER'						=> 'Dividir o tópico a partir de uma mensagem selecionada',
	'SPLIT_FORUM'						=> 'Fórum para novo tópico',
	'SPLIT_POSTS'						=> 'Dividir mensagens selecionadas',
	'SPLIT_SUBJECT'						=> 'Título do novo tópico',
	'SPLIT_TOPIC_ALL'					=> 'Dividir tópico de mensagens selecionadas',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'Você está certo que você quer dividir este tópico?',
	'SPLIT_TOPIC_BEYOND'				=> 'Dividir tópico a partir da mensagem selecionada',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'Você está certo que você quer dividir este tópico a partir da mensagem selecionada?',
	'SPLIT_TOPIC_EXPLAIN'				=> 'Usando o formulário abaixo, você podem dividir um tópico em dois, ou selecionando as mensagens individualmente ou dividindo a partir de uma  mensagem selecionada',
	
	'THIS_PM_IP'				=> 'IP desta mensagem particular',
	
	'THIS_POST_IP'				=> 'IP para esta mensagem',
	'TOPICS_APPROVED_SUCCESS'	=> 'Os tópicos selecionados foram aprovados',
	'TOPICS_DELETED_SUCCESS'	=> 'Os tópicos selecionados foram removidos com sucesso do banco de dados',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'Os tópicos selecionados foram desaprovados',
	'TOPICS_FORKED_SUCCESS'		=> 'Os tópicos selecionados foram copiados com sucesso',
	'TOPICS_LOCKED_SUCCESS'		=> 'Os tópicos selecionados foram trancados',
	'TOPICS_MOVED_SUCCESS'		=> 'Os tópicos selecionados foram movidos com sucesso',
	'TOPICS_RESYNC_SUCCESS'		=> 'Os tópicos selecionados foram resincronizados',
	'TOPICS_TYPE_CHANGED'		=> 'Tipos de tópico alterados com sucesso.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'Os tópicos selecionados foram destrancados',
	'TOPIC_APPROVED_SUCCESS'	=> 'O tópico selecionado foi aprovado',
	'TOPIC_DELETED_SUCCESS'		=> 'O tópico selecionado foi removido com sucesso do banco de dados',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'O tópico selecionado foi desaprovado',
	'TOPIC_FORKED_SUCCESS'		=> 'O tópico selecionado foi copiado com sucesso',
	'TOPIC_LOCKED_SUCCESS'		=> 'O tópico selecionado foi trancado',
	'TOPIC_MOVED_SUCCESS'		=> 'O tópico selecionado foi movido com sucesso',
	'TOPIC_NOT_EXIST'			=> 'O tópico que você selecionou não existe',
	'TOPIC_RESYNC_SUCCESS'		=> 'O tópico selecionado foi resincronizado',
	'TOPIC_SPLIT_SUCCESS'		=> 'O tópico selecionado foi dividido com sucesso',
	'TOPIC_TIME'				=> 'Hora do tópico',
	'TOPIC_TYPE_CHANGED'		=> 'Tipo de tópico alterado com sucesso.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'O tópico selecionado foi destrancado',
	'TOTAL_WARNINGS'			=> 'Total de Advertências',

	'UNAPPROVED_POSTS_TOTAL'		=> 'No total há <strong>%d</strong> mensagens esperando por aprovação',
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> 'Não há nenhuma mensagem esperando por aprovação',
	'UNAPPROVED_POST_TOTAL'			=> 'No total há <strong>1</strong> mensagem esperando por aprovação',
	'UNLOCK'						=> 'Destrancar',
	'UNLOCK_POST'					=> 'Destrancar mensagem',
	'UNLOCK_POST_EXPLAIN'			=> 'Permitir editar',
	'UNLOCK_POST_POST'				=> 'Destrancar mensagem',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Você está certo que você quer permitir a edição desta mensagem?',
	'UNLOCK_POST_POSTS'				=> 'Destrancar mensagens selecionados',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Você está certo que você quer permitir a edição das mensagens selecionadas?',
	'UNLOCK_TOPIC'					=> 'Destrancar tópico',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Você está certo que você quer destrancar este tópico?',
	'UNLOCK_TOPICS'					=> 'Destrancar tópicos selecionados',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Você está certo que você quer destrancar todos os tópicos selecionados?',
	'USER_CANNOT_POST'				=> 'Você não pode postar neste fórum',
	'USER_CANNOT_REPORT'			=> 'Você não pode notificar mensagens neste fórum',
	'USER_FEEDBACK_ADDED'			=> 'Avaliação de usuário adicionada com sucesso.',
	'USER_WARNING_ADDED'			=> 'Usuário advertido com sucesso.',

	'VIEW_DETAILS'			=> 'Ver detalhes',
	'VIEW_POST'				=> 'Ver mensagem',
	'VIEW_PM'				=> 'Ver mensagem particular',
	'WARNED_USERS'			=> 'Usuários advertidos',
	'WARNED_USERS_EXPLAIN'	=> 'Esta é uma lista de usuários com advertências vigentes emitidas a eles.',
	'WARNING_PM_BODY'		=> 'A seguinte mensagem é uma advertência que foi emitida a você por um administrador ou moderador deste fórum.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Advertência do fórum emitida',
	'WARNING_POST_DEFAULT'	=> 'Esta é uma advertência relativa à seguinte mensagem feita por você: %s .',
	'WARNINGS_ZERO_TOTAL'	=> 'Nenhuma advertência existente.',

	'YOU_SELECTED_TOPIC'	=> 'Você selecionou o número do tópico %d: %s.',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Warez',
			'SPAM'		=> 'Spam',
			'OFF_TOPIC'	=> 'Off-tópico',
			'OTHER'		=> 'Outro'
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'A mensagem contém links para software ilegal ou pirata.',
			'SPAM'		=> 'A mensagem notificada tem o único propósito de anunciar um website ou outro produto.',
			'OFF_TOPIC'	=> 'A mensagem notificada é um off tópico.',
			'OTHER'		=> 'A mensagem notificada não se encaixa em qualquer outra categoria, favor use o campo de informação adicional.'
		)
	),
));

?>
