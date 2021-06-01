<?php
/**
*
* acp_attachments [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.2
* @package language: Brazilian Portuguese
* @original version $Id: attachments.php,v 1.31 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translator: phpBB Brasil - http://www.phpBBrasil.com.br/ - 2007-12-18 - 15:30
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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Aqui você pode configurar as principais propriedades para os anexos e as categorias especiais que incluem junto do sistema.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Aqui você pode adicionar, excluir, modificar ou desabilitar as extensões por grupos. Futuras opções irão requerer uma categoria especial para os mesmos, mudando o mecanismo de download e trocando o ícone que será mostrado na frente dos downloads permitidos para determinado grupo.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Aqui você pode gerenciar suas extensões permitidas. Para ativar suas extensões, favor entrar no painel de gerenciamento de grupos e extensões. Nós recomendamos que você não permita extensões de scripts (como <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, e as demais…)',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Aqui você estará apto a ver arquivos enviados ao diretório de anexos, mas que não estejam relacionados a nenhum tópico. Isto acontece se os usuários estão anexando arquivos, mas não postando o tópico. Você está apto a excluir os arquivos ou anexar eles a tópicos existentes. Anexar em tópicos existentes requer um ID de tópico válido, você deve determinar este ID por si mesmo, esta disponibilidade é para pessoas que estão esperando para fazer o envio de arquivos com outros programas e determinar um tópico para este arquivo, geralmente grandes arquivos.',
	'ADD_EXTENSION'						=> 'Adicionar extensão',
	'ADD_EXTENSION_GROUP'				=> 'Adicionar extensão ao grupo',
	'ADMIN_UPLOAD_ERROR'				=> 'Erros enquanto tentava anexar arquivos: %s',
	'ALLOWED_FORUMS'					=> 'Fóruns permitidos',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Apto a postar a extensão determinada no fórum selecionado(ou todos caso selecionados)',
	'ALLOWED_IN_PM_POST'				=> 'Permitido',
	'ALLOW_ATTACHMENTS'					=> 'Habilitar Anexos',
	'ALLOW_ALL_FORUMS'					=> 'Permitir todos fóruns',
	'ALLOW_IN_PM'						=> 'Permitir em Mensagem Privadas',
	'ALLOW_PM_ATTACHMENTS'				=> 'Permitir anexos em Mensagens Privadas',
	'ALLOW_SELECTED_FORUMS'				=> 'Somente fóruns selecionados abaixo',
	'ASSIGNED_EXTENSIONS'				=> 'Extensões determinadas',
	'ASSIGNED_GROUP'					=> 'Extensões por grupo determinadas',
	'ATTACH_EXTENSIONS_URL'				=> 'Extensões',
	'ATTACH_EXT_GROUPS_URL'				=> 'Extensões de grupo',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'Tamanho máximo de arquivo',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Tamanho máximo de cada arquivo, deixe 0 para ilimitado.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Mensagem de tamanho máximo',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Tamanho máximo de cada arquivo para anexos em mensagens privadas. 0 indica ilimitado.',
	'ATTACH_ORPHAN_URL'					=> 'Anexos órfãos',
	'ATTACH_POST_ID'					=> 'ID da mensagem',
	'ATTACH_QUOTA'						=> 'Tamanho da cota de anexo',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Tamanho máximo de disco disponível para os anexos para toda comunidade, com 0 será ilimitado.',
	'ATTACH_TO_POST'					=> 'Anexar arquivo a mensagem',

	'CAT_FLASH_FILES'			=> 'Arquivos Flash',
	'CAT_IMAGES'				=> 'Imagens',
	'CAT_QUICKTIME_FILES'		=> 'Arquivos QuickTime',
	'CAT_RM_FILES'				=> 'Arquivo RealMedia',
	'CAT_WM_FILES'				=> 'Arquivos Windows Media',
	'CHECK_CONTENT'            => 'Checar anexos',
    'CHECK_CONTENT_EXPLAIN'      => 'Alguns navegadores podem assumir valores incorretos de mimetype para upload de arquivos. Esta opção garante que arquivos deste tipo sejam rejeitados.',
	'CREATE_GROUP'				=> 'Criar um novo grupo',
	'CREATE_THUMBNAIL'			=> 'Criar uma miniatura',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Criar miniatura em todas as situações possíveis.',

	'DEFINE_ALLOWED_IPS'			=> 'Defina IPs/Servidores permitidos',
	'DEFINE_DISALLOWED_IPS'			=> 'Defina IPs/Servidores Proibidos',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Para especificar vários endereços IPs diferentes ou servidores, entre com cada um uma nova linha. Para especificar um arranjo de endereços IP separe o começo e o final com um (-), para especificar uma gama de IPs, use * ex. 200.*.*.*',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Você pode remover (ou excluir) múltiplos endereços de IP em apenas uma vez usando a combinação apropriada do mouse com o teclado de seu computador e do navegador. Endereços IPs excluídos têm um fundo azul.',
	'DISPLAY_INLINED'				=> 'Mostrar imagens em linha',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Se marcar para Não anexar imagens, a mesma aparecerá como um link.',
	'DISPLAY_ORDER'					=> 'Ordem dos anexos',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Ordenar anexos por tempo.',
	
	'EDIT_EXTENSION_GROUP'			=> 'Editar extensões de grupo',
	'EXCLUDE_ENTERED_IP'			=> 'Habilite para excluir o endereço IP/Servidor entrado.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Excluir IP de IPs/Servidores permitidos',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Excluir IP de IPs/Servidores Proibidos',
	'EXTENSIONS_UPDATED'			=> 'Extensão atualizada com sucesso',
	'EXTENSION_EXIST'				=> 'A extensão %s já existe',
	'EXTENSION_GROUP'				=> 'Extensão de Grupo',
	'EXTENSION_GROUPS'				=> 'Extensões de Grupos',
	'EXTENSION_GROUP_DELETED'		=> 'Extensão de grupo deletada com sucesso.',
	'EXTENSION_GROUP_EXIST'			=> 'A extensão de grupo %s já existe',

	'GO_TO_EXTENSIONS'		=> 'Ir para a gerência de extensões',
	'GROUP_NAME'			=> 'Nome do grupo',

	'IMAGE_LINK_SIZE'			=> 'Dimensões do link da imagem',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Mostrar a imagem anexada como um link de uma linha. Para desabilitar este comportamento, defina os valores como 0px por 0px.',
	'IMAGICK_PATH'				=> 'Caminho da imagem',
	'IMAGICK_PATH_EXPLAIN'		=> 'Endereço completo para o caminho de conversão do ImageMagick, ex. <samp>/usr/bin/</samp>',

	'MAX_ATTACHMENTS'				=> 'Número máximo de anexos por tópico',
	'MAX_ATTACHMENTS_PM'			=> 'Número máximo de anexos por mensagem',
	'MAX_EXTGROUP_FILESIZE'			=> 'Tamanho máximo do arquivo',
	'MAX_IMAGE_SIZE'				=> 'Dimensões máximas das imagens',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Tamanho máximo de uma imagem como anexo. Defina ambos os valores como 0px por 0px para desabilitar a verificação da dimensão.',
	'MAX_THUMB_WIDTH'				=> 'Tamanho máximo em largura da miniatura',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'Uma miniatura gerada não excederá o tamanho definido aqui',
	'MIN_THUMB_FILESIZE'			=> 'Tamanho máximo da miniatura',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Não crie uma miniatura para as imagens cujo tamanho sejam menores do que os determinados aqui.',
	'MODE_INLINE'					=> 'Na linha',
	'MODE_PHYSICAL'					=> 'Físico',

	'NOT_ALLOWED_IN_PM'			=> 'Proibido em mensagens privadas',
	'NOT_ALLOWED_IN_PM_POST'    => 'Não é permitido em Mensagens Privadas',
	'NOT_ASSIGNED'				=> 'Não determinado',
	'NO_EXT_GROUP'				=> 'Nenhum',
	'NO_EXT_GROUP_NAME'			=> 'Nenhum nome de grupo entrado',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Nenhum extensão de grupo definida.',
	'NO_FILE_CAT'				=> 'Nenhum',
	'NO_IMAGE'					=> 'Sem imagem',
	'NO_THUMBNAIL_SUPPORT'		=> 'A criação de Miniatura foi desabilitada porque não existe biblioteca GD instalada em seu servidor, ImageMagick não pôde ser encontrado.',
	'NO_UPLOAD_DIR'				=> 'O diretório de upload especificado não existe.',
	'NO_WRITE_UPLOAD'			=> 'O diretório de upload especificado não pode ser escrito. Favor alterar as permissões de pasta do diretório para CHMOD 777.',

	'ONLY_ALLOWED_IN_PM'	=> 'Permitido somente em mensagens privadas',
	'ORDER_ALLOW_DENY'		=> 'Permitir',
	'ORDER_DENY_ALLOW'		=> 'Proibir',

	'REMOVE_ALLOWED_IPS'		=> 'Remover ou restaurar IPs/Servidores <em>Permitidos</em>',
	'REMOVE_DISALLOWED_IPS'		=> 'Remover ou restaurar IPs/Servidores <em>Proibidos</em>',

	'SEARCH_IMAGICK'				=> 'Buscar por ImageMagick',
	'SECURE_ALLOW_DENY'				=> 'Permitir/Proibir lista',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Troque o comportamento padrão quando sistema de downloads seguro está ativo no Permitir/Proibir lista para uma <strong>lista branca</strong> (Permitir) ou uma <strong>lista negra</strong> (Proibir)',
	'SECURE_DOWNLOADS'				=> 'Permitir downloads seguros',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Com esta opção ativada, downloads serão limitados para IPs/Servidores que você definiu.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Downloads seguros não estão ativados. As propriedades abaixo serão aplicadas depois de ativar Downloads Seguros.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'A lista de IP foi atualizada com sucesso.',
	'SECURE_EMPTY_REFERRER'			=> 'Permitir referências vazias',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Downloads seguros são baseados em referências. Você deseja permitir downloads para aqueles que estão omitidos na referência?',
	'SETTINGS_CAT_IMAGES'			=> 'Propriedades das imagens',
	'SPECIAL_CATEGORY'				=> 'Categoria especial',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Categorias especiais se diferem das normais na mensagem.',
	'SUCCESSFULLY_UPLOADED'			=> 'Enviado com sucesso',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Extensão de grupo adicionada com sucesso',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Extensão de grupo atualizada com sucesso',

	'UPLOADING_FILES'				=> 'Enviando arquivos',
	'UPLOADING_FILE_TO'				=> 'Enviando arquivo “%1$s” para a mensagem número %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'Você não tem permissão para enviar arquivos para o fórum “%s”',
	'UPLOAD_DIR'					=> 'Diretório de envio',
	'UPLOAD_DIR_EXPLAIN'			=> 'Armazenar caminho para arquivos.',
	'UPLOAD_ICON'					=> 'Enviar ícone',
	'UPLOAD_NOT_DIR'				=> 'O caminho especificado não aparenta ser um diretório.',
));

?>