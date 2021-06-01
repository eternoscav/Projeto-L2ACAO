<?php
/**
*
* acp_forums [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.0
* @package language: Brazilian Portuguese
* @original version $Id: forums.php,v 1.32 2007/10/05 13:14:58 kellanved Exp $
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
// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> 'Auto-limpar tempo de mensagem',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'Número de dias desde a última mensagem ser enviada para ser removidas mensagens a partir desta data para menos.',
	'AUTO_PRUNE_FREQ'			=> 'Freq&uuml;ência auto-limpar',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Tempo em dias entre eventos do auto-limpar.',
	'AUTO_PRUNE_VIEWED'			=> 'Auto-limpar mensagens pelo tempo de visualização',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'Número de dias desde que o tópico teve a última visualização para ser removido.',
	'CONTINUE'						=> 'Continuar',

	'COPY_PERMISSIONS'				=> 'Copiar permissões de',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Para facilitar as permissões de um novo fórum, voce pode copiar as permissões existentes de outro fórum.',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Uma vez criada, o fórum terá as mesmas permissões das selecionadas aqui. Se nenhum fórum for selecionado, o novo fórum criado não será visualizado até obter permissões.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Se você selecionar a cópia de permissões, o fórum terá as mesmas permissões do fórum o qual você selecionou aqui. Isto irá sobrescrever qualquer permissão que você tenha previamente definido para este fórum. Se nenhum fórum for selecionado, as permissões para o mesmo continuarão intactas.',
	'COPY_TO_ACL'					=> 'Alternativamente, voce pode também pode %sdefinir novas permissões%s para este fórum.',
	'CREATE_FORUM'					=> 'Criar novo fórum',

	'DECIDE_MOVE_DELETE_CONTENT'		=> 'Excluir conteúdo ou mover para fórum',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'Excluir sub-fóruns ou mover para fórum',
	'DEFAULT_STYLE'						=> 'Estilo padrão',
	'DELETE_ALL_POSTS'					=> 'Remover mensagens',
	'DELETE_SUBFORUMS'					=> 'Remover mensagens e sub-fóruns',
	'DISPLAY_ACTIVE_TOPICS'				=> 'Habilitar tópicos ativos',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'Se definido como SIM, tópicos ativos em sub-fóruns serão mostrados abaixo desta categoria.',

	'EDIT_FORUM'					=> 'Editar fórum',
	'ENABLE_INDEXING'				=> 'Habilitar indexação de pesquisa',
	'ENABLE_INDEXING_EXPLAIN'		=> 'Se definido como SIM, mensagens criadas neste fórum serão adicionadas ao sistema de busca da comunidade.',
	'ENABLE_POST_REVIEW'			=> 'Habilitar review de fórum',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Se definido como SIM, usuários estarão aptos a revisar suas mensagens enquanto envia caso novas mensagens sejam adicionadas por outros usuários. Esta opção deverá estar desabilitada para fóruns com muito chat.',
	'ENABLE_QUICK_REPLY'			=> 'Habilitar resposta rápida',
	'ENABLE_QUICK_REPLY_EXPLAIN'	=> 'Habilita o Resposta Rápida neste fórum. Esta opção não será considerada se estiver desabilitado o mesmo na configuração do fórum ao todo.A opção de Resposta Rápida só será permitida a usuários que podem acessar o fórum e tem permissão do mesmo.',
	'ENABLE_RECENT'					=> 'Mostrar tópicos ativos',
	'ENABLE_RECENT_EXPLAIN'			=> 'Se definido como SIM, tópicos feitos neste fórum serão mostrados na lista de tópicos ativos.',
	'ENABLE_TOPIC_ICONS'			=> 'Habilitar smilies de tópicos',

	'FORUM_ADMIN'						=> 'Administração de Fórum',
	'FORUM_ADMIN_EXPLAIN'				=> 'No phpBB3 não existem categorias, tudo será baseado em cima do fórum. Cada fórum pode conter um número ilimitado de sub-fóruns e você pode determinar onde cada um pode ser criadas mensagens ou não (d.e. quando age como uma velha categoria). Aqui você pode adicionar, editar, excluir, bloquear, desbloquear individualmente cada fórum assim como gerenciar por outros controles. Se suas mensagens e tópicos estão fora de sincronia, aqui poderá ajustar automaticamente os mesmos. <strong>Você precisa copiar ou definir as permissões apropriadas para os fóruns recentemente criados para que eles sejam exibidos.</strong>',
	'FORUM_AUTO_PRUNE'					=> 'Habilitar auto-limpar',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'Limpa o fórum de tópicos, defina a freq&uuml;ência/idade abaixo.',
	'FORUM_CREATED'						=> 'Fórum criado com sucesso.',
	'FORUM_DATA_NEGATIVE'				=> 'Par&acirc;metros de limpeza não podem ser negativos.',
	'FORUM_DESC_TOO_LONG'				=> 'A descrição do fórum é muito longa, o máximo aceitável é de 4000 caracteres.',
	'FORUM_DELETE'						=> 'Remover fórum',
	'FORUM_DELETE_EXPLAIN'				=> 'O formulário abaixo irá permitir você remover um fórum. Se o fórum está aberto aos usuários você estará apto a decidir quando irá pegar as mensagens e tópicos que o mesmo contém.',
	'FORUM_DELETED'						=> 'Fórum removido com sucesso.',
	'FORUM_DESC'						=> 'Descrição',
	'FORUM_DESC_EXPLAIN'				=> 'Qualquer descrição aqui adicionada será demonstrada igualmente.',
	'FORUM_EDIT_EXPLAIN'				=> 'O formulário abaixo irá permitir a customizar este fórum. Favor notar que a moderação e o contador de mensagens são definidos pelas permissões de usuário ou via permissões de fórum.',
	'FORUM_IMAGE'						=> 'Imagem do fórum',
	'FORUM_IMAGE_EXPLAIN'				=> 'Localização, relativa &agrave; raiz do phpBB, para uma imagem adicional que represente o fórum em questão.',
	// Mudanças 3.0.5
  'FORUM_IMAGE_NO_EXIST'				=> 'A imagem do fórum especificado não existe',
  // Mudanças 3.0.5
	'FORUM_LINK_EXPLAIN'				=> 'URL completa (incluindo protocolo, por exemplo <samp>http://</samp>) para o local que este fórum levará o usuário.',
	'FORUM_LINK_TRACK'					=> 'Contar número de redirecionamentos',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'Grava o número de vezes que o fórum recebeu cliques.',
	'FORUM_NAME'						=> 'Nome do fórum',
	'FORUM_NAME_EMPTY'					=> 'Você deve definir um nome para este fórum.',
	'FORUM_PARENT'						=> 'Fórum pai',
	'FORUM_PASSWORD'					=> 'Senha do fórum',
	'FORUM_PASSWORD_CONFIRM'			=> 'Confirmar senha',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Somente necessária quando uma senha será inserida primeiramente.',
	'FORUM_PASSWORD_EXPLAIN'			=> 'Definir uma senha para o fórum é fundamental quando deseja-se restringir a entrada somente para usuários autorizados com a senha.',
	'FORUM_PASSWORD_UNSET'				=> 'Remover senha do fórum',
	'FORUM_PASSWORD_UNSET_EXPLAIN'		=> 'Clique aqui se você quiser remover a senha do fórum.',
	'FORUM_PASSWORD_OLD'				=> 'A senha do fórum está usando uma encriptação antiga e deveria ser alterada.',
	'FORUM_PASSWORD_MISMATCH'			=> 'As senhas não conferem.',
	'FORUM_PRUNE_SETTINGS'				=> 'Propriedades de limpar o fórum',
	'FORUM_RESYNCED'					=> 'Fórum “%s” resincronizado com sucesso',
	'FORUM_RULES_EXPLAIN'				=> 'Regras do fórum será mostrada em qualquer página dentro do fórum em especial.',
	'FORUM_RULES_LINK'					=> 'Link para regras do fórum',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'Entre com o link para um tópico da comunidade ou site onde as regras do fórum estão armazenadas.',
	'FORUM_RULES_PREVIEW'				=> 'Visualizar regras do fórum',
	'FORUM_RULES_TOO_LONG'				=> 'As regras do fórum deverão ser pelo menos 4000 caracteres.',
	'FORUM_SETTINGS'					=> 'Propriedades do fórum',
	'FORUM_STATUS'						=> 'Status do fórum',
	'FORUM_STYLE'						=> 'Estilo do fórum',
	'FORUM_TOPICS_PAGE'					=> 'Tópicos por página',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'Se nada for digitado, será considerado o padrão do phpBB.',
	'FORUM_TYPE'						=> 'Tipo do fórum',
	'FORUM_UPDATED'						=> 'Informação do fórum atualizadas com sucesso.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> 'Você quer alterar um fórum de postagem que tem sub-fóruns em um link. Por favor, mova todos os sub-fóruns para fora deste fórum antes de você prosseguir, porque depois de alterá-lo em um link você não será mais capaz de ver os sub-fóruns ligados atualmente a este fórum.',

	'GENERAL_FORUM_SETTINGS'	=> 'Propriedades gerais do fórum',

	'LINK'					=> 'Link',
	'LIST_INDEX'			=> 'Listar fórum na lista dos sub-fóruns',
	'LIST_INDEX_EXPLAIN'	=> 'Mostra um link para este fórum abaixo do fórum pai se algum subfórum existir.',
	'LIST_SUBFORUMS'			=> 'Listar subfóruns na legenda',
	'LIST_SUBFORUMS_EXPLAIN'	=> 'Exibir subfóruns na página principal e em outro local como um link com legenda se a opção \&quot;Listar fórum na lista dos subfóruns\&quot; estiver habilitada.',
	'LOCKED'				=> 'Trancado',

    'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'O fórum que você selecionou para mover mensagens é um fórum bloqueado onde não podem ser postadas mensagens. Selecione um fórum que seja permitido.',
	'MOVE_POSTS_TO'		            => 'Mover mensagens para',
	'MOVE_SUBFORUMS_TO'	            => 'Mover subfóruns para',

	'NO_DESTINATION_FORUM'			=> 'Você não especificou um fórum para mover o conteúdo',
	'NO_FORUM_ACTION'				=> 'Nenhuma ação definida para com o conteúdo do fórum',
	'NO_PARENT'						=> 'Nenhum pai',
	'NO_PERMISSIONS'				=> 'Não copiar permissões',
	'NO_PERMISSION_FORUM_ADD'		=> 'Você não tem permissões suficientes para adicionar um fórum.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'Você não tem permissões suficientes para excluir um fórum.',

    'PARENT_IS_LINK_FORUM'		=> 'O pai que você especificou é um fórum de link. Fóruns link não são capazes de suportar outros fóruns. Selecione um fórum ou categoria como este fórum pai.',
	'PARENT_NOT_EXIST'			=> 'Fórum pai não existe.',
	'PRUNE_ANNOUNCEMENTS'		=> 'Limpar anúncios',
	'PRUNE_STICKY'				=> 'Limpar fixos',
	'PRUNE_OLD_POLLS'			=> 'Limpar enquetes antigas',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Remove tópicos com enquetes sem votação e com mensagens antigas.',

	'REDIRECT_ACL'	=> 'Agora você está apto para %sdefinir permissões%s neste fórum.',

	'SYNC_IN_PROGRESS'			=> 'Sincronizando fórum',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'Barra de status da sincronia %1$d/%2$d.',

	'TYPE_CAT'			=> 'Categoria',
	'TYPE_FORUM'		=> 'Fórum',
	'TYPE_LINK'			=> 'Link',

	'UNLOCKED'			=> 'Destrancado',
));

?>
