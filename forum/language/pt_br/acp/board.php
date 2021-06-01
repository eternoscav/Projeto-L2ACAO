<?php
/**
*
* acp_board [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.5
* @package language: Brazilian Portuguese
* @original version $Id: board.php,v 1.101 2007/11/03 20:29:39 acydburn Exp $
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translator: phpBB Brasil - http://www.phpBBrasil.com.br/ - 2008-02-27 - 15:27
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
// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Aqui você pode determinar as operações básicas de sua comunidade, dar um nome e descrição ao fórum, ajustar os valores padrão do fuso horário e idioma, entre outras configurações.',
	'CUSTOM_DATEFORMAT'				=> 'Padrão',
	'DEFAULT_DATE_FORMAT'			=> 'Formato da data',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'O formato da data é igual a função <code>date</code> do PHP.',
	'DEFAULT_LANGUAGE'				=> 'Idioma padrão',
	'DEFAULT_STYLE'					=> 'Estilo padrão',
	'DISABLE_BOARD'					=> 'Desativar comunidade',
	'DISABLE_BOARD_EXPLAIN'			=> 'Isto fará com que o fórum fique indisponível aos usuários. Você pode adicionar uma pequena mensagem explicando o motivo do fechamento.',
	'OVERRIDE_STYLE'				=> 'Mudar estilo do usuário',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Trocar estilo dos usuários pelo padrão.',
	'SITE_DESC'						=> 'Descrição do fórum',
	'SITE_NAME'						=> 'Nome do fórum',
	'SYSTEM_DST'					=> 'Habilitar Horário de Verão/<abbr title="Daylight Saving Time">DST</abbr>',
	'SYSTEM_TIMEZONE'				=> 'Sistema de fuso horário',
	'WARNINGS_EXPIRE'				=> 'Duração de advertência',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Número de dias que decorrerão antes da uma advertência expirar automaticamente do registro de um usuário.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Aqui você poderá ativar e desativar inúmeras funções da comunidade.',

	'ALLOW_ATTACHMENTS'			=> 'Permitir anexos',
	'ALLOW_BIRTHDAYS'			=> 'Permitir aniversários',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Permitir que os aniversários e a idade dos usuários sejam exibidas no perfil. Por favor, note que a lista de aniversário dentro do índice do fórum é controlada por uma configuração separada.',
	'ALLOW_BOOKMARKS'			=> 'Permitir função de favoritar tópicos',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'O usuário poderá adicionar tópicos como favoritos.',
	'ALLOW_BBCODE'				=> 'Permitir BBCode',
	'ALLOW_FORUM_NOTIFY'		=> 'Permitir acompanhar fóruns',
	'ALLOW_NAME_CHANGE'			=> 'Permitir mudanças do nome de usuário',
	'ALLOW_NO_CENSORS'			=> 'Permitir a desabilitação da censura de palavras',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Usuários podem escolher por desativar a censura automática de palavras de mensagens e mensagens privadas.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Permitir anexos em mensagens privadas',
	'ALLOW_PM_REPORT'			=> 'Permitir usuários reportarem mensagem privada',
	'ALLOW_PM_REPORT_EXPLAIN'	=> 'Se esta opção está ativa, usuários poderão reportar as mensagens privadas que receberem para os moderadores. A mensagem privada então poder&acute; ser vista pelo moderador no painel de moderação.',
	'ALLOW_QUICK_REPLY'			=> 'Permitir resposta rãpida',
	'ALLOW_QUICK_REPLY_EXPLAIN'	=> 'Esta opção define se resposta rápida estará habilitada ou não. Se isto estiver habilitado o fórum deverá ter a opção de resposta rápida habilitada também.',
	'ALLOW_QUICK_REPLY_BUTTON'	=> 'Enviar e habilitar resposta rápida em todos os fóruns',

	'ALLOW_SIG'					=> 'Permitir assinaturas',
	'ALLOW_SIG_BBCODE'			=> 'Permitir BBCode em assinaturas',
	'ALLOW_SIG_FLASH'			=> 'Permitir o uso do BBCode <code>[FLASH]</code> em assinaturas',
	'ALLOW_SIG_IMG'				=> 'Permitir o uso do BBCode <code>[IMG]</code> em assinaturas',
	'ALLOW_SIG_LINKS'			=> 'Permitir o uso de links nas assinaturas',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Se desativado, a tag BBCode <code>[URL]</code> e qualquer endereço/link URL será desabilitado na assinatura.',
	'ALLOW_SIG_SMILIES'			=> 'Permitir o uso de smilies nas assinaturas',
	'ALLOW_SMILIES'				=> 'Permitir smilies',
	'ALLOW_TOPIC_NOTIFY'		=> 'Permitir acompanhar tópicos',
	'BOARD_PM'					=> 'Mensagem privadas',
	'BOARD_PM_EXPLAIN'			=> 'Ativar ou desativar as mensagens privadas de todos os usuários.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Avatares geralmente são pequenos, imagens únicas que o usuário associa a si mesmo. Dependendo do estilo utilizado, eles geralmente são mostrados abaixo do rank ou nome do usuário visualizando o tópico. Aqui você pode determinar como os usuários poderão definir seus avatares. Note que para permitir o envio de avatares, será preciso ter um diretório configurado para o envio, e o seu servidor permita que os avatares sejam salvos dentro deste diretório. O limite de tamanho do arquivo só terá efeito sobre avatares que são enviados por seu computador (upload), esta função não será aplicada em links de avatares remotos.',
'ALLOW_AVATARS'					=> 'Habilitar avatares',
	'ALLOW_AVATARS_EXPLAIN'			=> 'Permite uso geral de avatares;<br />Se voce desabilitar em geral ou apenas avatares de certos modos, o avatar desabilitado não será mais mostrado no fórum, mas usuários ainda poderão fazer download de seus avatares no painel de controle dos usuários.',
	'ALLOW_LOCAL'					=> 'Permitir galeria de avatares',
	'ALLOW_REMOTE'					=> 'Permitir avatar remoto',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Avatar linkado de outro servidor',
	'ALLOW_REMOTE_UPLOAD'			=> 'Habilitar envio remoto de avatar',
	'ALLOW_REMOTE_UPLOAD_EXPLAIN'	=> 'Permite o envio de avatares de outros sites.',
	'ALLOW_UPLOAD'					=> 'Permitir o envio de avatar',
	'AVATAR_GALLERY_PATH'			=> 'Caminho para a galeria de avatares',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Caminho dentro do seu diretório raiz do phpBB para imagens pré-carregadas, ex. <samp>images/avatars/gallery</samp>',
	'AVATAR_STORAGE_PATH'			=> 'Caminho para o armazenamento de avatares',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Caminho dentro do seu diretório raiz do phpBB, ex. <samp>images/avatars/upload</samp>',
	'MAX_AVATAR_SIZE'				=> 'Dimensões máximas do avatar',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'Largura x Altura em pixels',
	'MAX_FILESIZE'					=> 'Tamanho máximo do arquivo de avatar',
	'MAX_FILESIZE_EXPLAIN'			=> 'Para arquivos de avatar enviados (upload).',
	'MIN_AVATAR_SIZE'				=> 'Dimensões mínimas do avatar',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'Largura x Altura em pixels',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Aqui você poderá definir todas as propriedades das Mensagens Privadas.',

	'ALLOW_BBCODE_PM'			=> 'Permitir BBCode em mensagens privadas',
	'ALLOW_FLASH_PM'			=> 'Permitir o uso do BBCode <code>[FLASH]</code>',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Note que a funcionalidade do uso do flash em mensagens privadas, se habilitado aqui, também dependerá das permissões.',
	'ALLOW_FORWARD_PM'			=> 'Permitir o "Encaminhamento" de mensagens privadas',
	'ALLOW_IMG_PM'				=> 'Permitir o uso do BBCode <code>[IMG]</code>',
	'ALLOW_MASS_PM'				=> 'Permitir o envio de mensagens privadas para múltiplos usuários e grupos',
	'ALLOW_MASS_PM_EXPLAIN'		=> 'O Envio de mensagens privadas para grupos pode ser definido por cada grupo na página de configurações.',
	'ALLOW_PRINT_PM'			=> 'Permitir visualização de impressão em mensagens privadas',
	'ALLOW_QUOTE_PM'			=> 'Permitir citação em mensagens privadas',
	'ALLOW_SIG_PM'				=> 'Permitir assinatura em mensagens privadas',
	'ALLOW_SMILIES_PM'			=> 'Permitir smilies em mensagens privadas',
	'BOXES_LIMIT'				=> 'Máximo de mensagens privadas por caixa',
	'BOXES_LIMIT_EXPLAIN'		=> 'Usuários não deverão receber mais do que este limite de mensagens em suas caixas de entrada. Determine este valor como 0 para permitir MPâ€™s ilimitadas.',
	'BOXES_MAX'					=> 'Máximo de pastas em Mensagens Privadas',
	'BOXES_MAX_EXPLAIN'			=> 'Por definição padrão, usuários podem criar pastas para armazenar mensagens privadas.',
	'ENABLE_PM_ICONS'			=> 'Ativar o uso de ícones de tópicos nas MP',
	'FULL_FOLDER_ACTION'		=> 'Ação padrão para pastas cheias',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Ação padrão a ser tomada se a pasta de um usuário está completamente cheia, se definida para todos, não será aplicável. A única exceção será para as mensagens enviadas onde a ação padrão é sempre excluir as mais antigas.',
	'HOLD_NEW_MESSAGES'			=> 'Segurar novas mensagens',
	'PM_EDIT_TIME'				=> 'Tempo limite de edição',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Limitar o tempo disponível para editar as mensagens privadas ainda não entregues. Definindo este valor como 0, essa função será desativada.',
	'PM_MAX_RECIPIENTS'			=> 'Número máximo de destinatários permitido.',
	'PM_MAX_RECIPIENTS_EXPLAIN'	=> 'Número máximo de destinatários permitidos em uma mensagem privada. Caso seja 0, um  número ilimitado é permitido. Está configuração pode ser ajustada para cada  grupo dentro da página de configurações de grupo.',

));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'		=> 'Aqui você poderá definir todas as propriedades para as Mensagens.',
	'ALLOW_POST_LINKS'				=> 'Permitir links em tópicos e mensagens privadas',
	'ALLOW_POST_LINKS_EXPLAIN'		=> 'Se desativado, a tag BBCode <code>[URL]</code> e os links automáticos também serão desabilitados.',
	'ALLOW_POST_FLASH'				=> 'Permitir o uso do BBCode <code>[FLASH]</code> em mensagens',
	'ALLOW_POST_FLASH_EXPLAIN'		=> 'Se desativado, a tag BBCode <code>[FLASH]</code> estará desabilitada nas mensagens. Caso contrário, os controles do sistema permitirão que os usuários possam usar a tag BBCode <code>[FLASH]</code>.',

	'BUMP_INTERVAL'					=> 'Intervalo de pulo',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Número em minutos, horas ou dias entre a última mensagem para um tópico e a habilidade de pular este tópico para cima. Deixando com 0 desabilita esta opção.',
	'CHAR_LIMIT'					=> 'Número máximo de caracteres por mensagem',
	'CHAR_LIMIT_EXPLAIN'			=> 'O número de caracteres permitidos em uma mensagem. Deixe 0 para ilimitado.',
	'DELETE_TIME'					=> 'Tempo para deletar',
	'DELETE_TIME_EXPLAIN'			=> 'Limita o tempo disponível para deletar uma nova mensagem. Deixando o valor como 0 irá desabilitar esta opção',
	'DISPLAY_LAST_EDITED'			=> 'Mostrar informação de última edição',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Escolha se será mostrada a última edição de cada mensagem no tópico.',
	'EDIT_TIME'						=> 'Tempo limite de edição',
	'EDIT_TIME_EXPLAIN'				=> 'Limite o tempo disponível para edição de uma nova mensagem. Definindo este valor como 0, essa função será desativada.',
	'FLOOD_INTERVAL'				=> 'Intervalo de mensagens',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Número de segundos que um usuário deverá esperar para postar outra mensagem.',
	'HOT_THRESHOLD'					=> 'Tópico quente',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Número de mensagens para o tópico ficar famoso ou "quente". Deixe 0 para desativar.',
	'MAX_POLL_OPTIONS'				=> 'Número máximo de opções na enquete',
	'MAX_POST_FONT_SIZE'			=> 'Tamanho máximo da fonte em mensagens',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Tamanho máximo da fonte permitida em uma mensagem. Deixe 0 para ilimitado.',
	'MAX_POST_IMG_HEIGHT'			=> 'Tamanho máximo de imagem',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Tamanho máximo para imagem/flash em mensagens. Deixe 0 para não ter limite.',
	'MAX_POST_IMG_WIDTH'			=> 'Largura máxima de uma imagem',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Largura máxima para imagem/flash em mensagens. Deixe 0 para não ter limite.',
	'MAX_POST_URLS'					=> 'Máximo de links por tópico',
	'MAX_POST_URLS_EXPLAIN'			=> 'Número máximo de links em um tópico. Deixe 0 para não ter limite.',
	'MIN_CHAR_LIMIT'				=> 'Mínimo de caracteres permitidos na mensagem',
	'MIN_CHAR_LIMIT_EXPLAIN'		=> 'Número mínimo de caracteres a serem escritos numa mensagem a ser adicionada ao fórum ou privada.',
	'POSTING'						=> 'Mensagem',
	'POSTS_PER_PAGE'				=> 'Mensagens por página',
	'QUOTE_DEPTH_LIMIT'				=> 'Máximo de citar permitido por mensagem',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Número máximo de citações em apenas uma mensagem. Deixe 0 para não controlar.',
	'SMILIES_LIMIT'					=> 'Máximo de smilies por mensagem',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Número máximo de smilies por mensagem, deixe 0 para não controlar',
	'TOPICS_PER_PAGE'				=> 'Tópicos por página',
	'SMILIES_PER_PAGE'				=> 'Smilies por página',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Aqui você pode definir tudo sobre assinaturas',

	'MAX_SIG_FONT_SIZE'				=> 'Tamanho máximo de fonte',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Tamanho máximo de fonte permitida em uma assinatura. Deixe 0 para sem limite.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Tamanho máximo da assinatura',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Tamanho máximo para imagem/flash em mensagens. Deixe 0 para sem limite.',
	'MAX_SIG_IMG_WIDTH'				=> 'Largura máxima de uma imagem',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Largura máxima para imagem/flash em mensagens. Deixe 0 para sem limite.',
	'MAX_SIG_LENGTH'				=> 'Máximo de texto na assinatura',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Número máximo de caracteres para uma assinatura.',
	'MAX_SIG_SMILIES'				=> 'Máximo de smilies na assinatura',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Número máximo de smilies na assinatura do usuário. Deixe 0 para sem limite.',
	'MAX_SIG_URLS'					=> 'Máximo de links na assinatura',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Número máximo de links para usar na assinatura. Deixe 0 para sem limite.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Aqui você estará apto a definir as propriedades de registro e de perfil do usuário',

	'ACC_ACTIVATION'			=> 'Ativação de registro',
	'ACC_ACTIVATION_EXPLAIN'	=> 'Isto determina se o usuário terá acesso imediato a comunidade.',
	'NEW_MEMBER_POST_LIMIT'			=> 'Limite de mensagems para novos membros',
	'NEW_MEMBER_POST_LIMIT_EXPLAIN'	=> 'Novos membros são <em>Recém Registrados (Novatos)</em> grupo até eles alcançarem este número de mensagens. Voce pode usar este grupo para evitar que eles fiquem usando o sistema de mensagem particular ou editar suas mensagens. <strong>O valor de 0 desabilita esta opção.</strong>',
	'NEW_MEMBER_GROUP_DEFAULT'		=> 'Define Recé Registrados grupo como padrão',
	'NEW_MEMBER_GROUP_DEFAULT_EXPLAIN'	=> 'Se definido como SIM e um valor de mensagens limite especificado, novos usuários estarão neste grupo e este grupo irá se tornar o grupo padrão dos mesmos. Esta opção irá servir caso queira determinar um rank ou avatar padrão para usuários recém cadastrados para controle maior',
	'ACC_ADMIN'					=> 'Pelo Administrador',
	'ACC_DISABLE'				=> 'Desativar',
	'ACC_NONE'					=> 'Nenhum',
	'ACC_USER'					=> 'Pelo Usuário',
//	'ACC_USER_ADMIN'			=> 'User + Admin',
	'ALLOW_EMAIL_REUSE'			=> 'Permitir re-utilização de e-mail',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Usuários diferentes podem utilizar do mesmo e-mail.',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'Número do Fax',
	'COPPA_MAIL'				=> 'Endereço de e-mail',
	'COPPA_MAIL_EXPLAIN'		=> 'Este endereço de e-mail é o local onde os pais enviarão a permissão de registro do filho.',
	'ENABLE_COPPA'				=> 'Ativar COPPA',
	'ENABLE_COPPA_EXPLAIN'		=> 'COPPA é uma política americana de controle do usuário, onde menores de 13 anos precisam de permissão dos pais para poder acessar a comunidade, no Brasil não temos esta lei.',
	'MAX_CHARS'					=> 'Máximo',
	'MIN_CHARS'					=> 'Mínimo',
	'NO_AUTH_PLUGIN'			=> 'Nenhum auto-plugin encontrado.',
	'PASSWORD_LENGTH'			=> 'Tamanho da senha',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Número máximo e mínimo permitido de caracteres na senha.',
	'REG_LIMIT'					=> 'Tentativas de cadastro',
	'REG_LIMIT_EXPLAIN'			=> 'Número de vezes que um usuário pode tentar fazer um registro antes de ser bloqueado por um período de tempo.',
	'USERNAME_ALPHA_ONLY'		=> 'Somente alfanuméricos',
	'USERNAME_ALPHA_SPACERS'	=> 'Alfanuméricos e espaços',
	'USERNAME_ASCII'			=> 'ASCII (não unicode internacional)',
	'USERNAME_LETTER_NUM'		=> 'Qualquer letra e número',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Qualquer letra, número, e espaço',
	'USERNAME_CHARS'			=> 'Limitar caracteres no nome de usuário',
	'USERNAME_CHARS_ANY'		=> 'Qualquer caractere',
	'USERNAME_CHARS_EXPLAIN'	=> 'Restringir alguns tipos de caracteres que possam ser usados no nome de usuário, caracteres como: espaço, -, +, _, [ e ]',
	'USERNAME_LENGTH'			=> 'Tamanho do nome de usuário',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Número máximo e mínimo permitido de caracteres no nome de usuário.',
));

// Feeds
$lang = array_merge($lang, array(
	'ACP_FEED_MANAGEMENT'				=> 'Geral Syndication Feeds opções (RSS)',
	'ACP_FEED_MANAGEMENT_EXPLAIN'		=> 'Este módulo torna disponível vários Feeds ATOM, passando qualquer BBCode em mensagens para fazer com que o mesmo seja interpretado pelos feed externos.',

	'ACP_FEED_GENERAL'					=> 'Definições gerais de feed ',
	'ACP_FEED_POST_BASED'				=> 'Baseado em mensagens definições de feeds',
	'ACP_FEED_TOPIC_BASED'				=> 'Baseado em tópicos definições de feeds',
	'ACP_FEED_SETTINGS_OTHER'			=> 'Outros feeds e definições',

	'ACP_FEED_ENABLE'					=> 'Habilitar Feeds',
	'ACP_FEED_ENABLE_EXPLAIN'			=> 'Habilita e Desabilita ATOM Feeds para toda a comunidade.<br />Desabilitando isto irá remover todos os Feeds da comunidade, não importando para quem este tópico pertencer.',
	'ACP_FEED_LIMIT'					=> 'Número de ítens',
	'ACP_FEED_LIMIT_EXPLAIN'			=> 'O máximo de número de feed para serem mostrados.',

	'ACP_FEED_OVERALL'					=> 'Habilitar feed toda comunidade',
	'ACP_FEED_OVERALL_EXPLAIN'			=> 'Novas mensagems por toda comunidade.',
	'ACP_FEED_FORUM'					=> 'Habilitar feeds por fórums',
	'ACP_FEED_FORUM_EXPLAIN'			=> 'Fórum e subfórum sozinhos em novos tópicos.',
	'ACP_FEED_TOPIC'					=> 'Habilitar feeds por tópicos',
	'ACP_FEED_TOPIC_EXPLAIN'			=> 'Tópico sozinho de nova mensagem.',

	'ACP_FEED_TOPICS_NEW'				=> 'Habilitar feed de novos tópicos',
	'ACP_FEED_TOPICS_NEW_EXPLAIN'		=> 'Habilita o â€œNovo Tópicoâ€ feed, no qual mostra o último tópico criado incluindo a primeira mensagem.',
	'ACP_FEED_TOPICS_ACTIVE'			=> 'Habilita tópicos de feed ativo',
	'ACP_FEED_TOPICS_ACTIVE_EXPLAIN'	=> 'Habilita o â€œTópicos Ativosâ€ feed,  no qual mostra o último tópico criado incluindo a última mensagem.',
	'ACP_FEED_NEWS'						=> 'Novos feed',
	'ACP_FEED_NEWS_EXPLAIN'				=> 'Puxa a primeira mensagem destes fórums. Selecione nenhum fórum para desabilitar o novos feed.<br />Selecione vários fórums segurando o <samp>CTRL</samp> e clicando.',

	'ACP_FEED_OVERALL_FORUMS'			=> 'Habilita feed por todo o fórum',
	'ACP_FEED_OVERALL_FORUMS_EXPLAIN'	=> 'Este feed mostra o última mensagem de todos os tópicos dos fórums.',
	'ACP_FEED_OVERALL_FORUMS_LIMIT'		=> 'Número de ítens por página para mostrar nos feeds de fórum',

	'ACP_FEED_HTTP_AUTH'				=> 'Permite autenticação HTTP',
	'ACP_FEED_HTTP_AUTH_EXPLAIN'		=> 'Habilita autenticação HTTP, no qual permite usuários receberem conteúdo que é oculto dos usuários visitantes por adicionar <samp>auth=http</samp> parametro para o feed URL. Favor notar que alguns setups de PHP requerem mudanças adicionais no arquivo .htaccess. Instruções podem ser encontradas neste mesmo arquivo.',
	
	'ACP_FEED_OVERALL_TOPIC'			=> 'Habilita sobre todos os tópicos',
	'ACP_FEED_OVERALL_TOPIC_EXPLAIN'	=> 'Habilita o “Todos Tópicos” feed',
	'ACP_FEED_OVERALL_TOPIC_LIMIT'		=> 'Número de itens por página para mostrar no feed de tópicos',
	'ACP_FEED_FORUM'					=> 'Habilita Por-Fórum Feeds',
	'ACP_FEED_FORUM_EXPLAIN'			=> 'Nova Mensagem de fórum sozinha.',
	'ACP_FEED_TOPIC'					=> 'Habilita Por-Tópico Feeds',
	'ACP_FEED_TOPIC_EXPLAIN'			=> 'Novas mensagem de tópico sozinho.',
	'ACP_FEED_NEWS'						=> 'Novos Feeds',
	'ACP_FEED_NEWS_EXPLAIN'				=> 'Puxa a primeira mensagem destes fórums. Selecione nenhum fórum para desabilitar este feed.<br />Selecione múltiplos fórums segurando o comando <samp>CTRL</samp> e clicando.',

	'ACP_FEED_GENERAL'					=> 'Opções Gerais de Feed',

	'ACP_FEED_ITEM_STATISTICS'			=> 'Estatística do item',
	'ACP_FEED_ITEM_STATISTICS_EXPLAIN'	=> 'Demonstra estatística individual do mais próximo item de feed<br />(Autor, data e hora, Respostas, Visitas)',
	'ACP_FEED_EXCLUDE_ID'				=> 'Excluir estes fórums',
	'ACP_FEED_EXCLUDE_ID_EXPLAIN'		=> 'Conteúdo desses não irá ser <strong>incluído nos feeds</strong>. Selecionando nenhum dos fórums para puxar dados de todos os fórums.<br />Seleciona/Deselecione múltiplos fórums segurando o <samp>CTRL</samp> e clicando.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'				=> 'Aqui voce pode selecionar e configurar os plugins de CAPTCHA, no qual implementa diversas maneiras de rejeitar novos cadastros de bots.',
	'AVAILABLE_CAPTCHAS'					=> 'Plugins disponíveis',
	'CAPTCHA_UNAVAILABLE'					=> 'O CAPTCHA não pode ser selecionado quando seus requerimentos não são encontrados.',
	'CAPTCHA_GD'							=> 'GD CAPTCHA',
	'CAPTCHA_GD_3D'							=> 'GD 3D Captcha',
	
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'GD CAPTCHA plano de fundo embaralhamento',
	'CAPTCHA_GD_EXPLAIN'					=> 'Usar GD para fazer mais avançada a CAPTCHA.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Usar plano de fundo para fazer o GD baseado em header CAPTCHA.',
	'CAPTCHA_GD_X_GRID'						=> 'GD CAPTCHA plano de fundo embaralhamento horizontal x-axis',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Usar poucas propriedades para fazer a confirmação. 0 irá desabilitar o embaralhamento do plano de fundo, deixando mais fácil a confirmação no modo horizontal.',
	'CAPTCHA_GD_Y_GRID'						=> 'GD CAPTCHA embaralhamento vertical y-axis',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Usar poucas propriedades para fazer a confirmação. 0 irá desabilitar o embaralhamento do plano de fundo, deixando mais fácil a confirmação no modo vertical.',
	
// Mudanças 3.0.5
  'CAPTCHA_GD_WAVE'						=> 'Distorção em forma de onda do GD CAPTCHA',
	'CAPTCHA_GD_WAVE_EXPLAIN'				=> 'Isto aplica uma distorção em forma de onda no CAPTCHA.',
	'CAPTCHA_GD_3D_NOISE'					=> 'Adicionar ruido 3D &agrave; objetos',
	'CAPTCHA_GD_3D_NOISE_EXPLAIN'			=> 'Isto adiciona alguns objetos ao CAPTCHA, além das letras.',
	'CAPTCHA_GD_FONTS'						=> 'Usar fontes diferentes',
	'CAPTCHA_GD_FONTS_EXPLAIN'				=> 'Esta configuração controla quantas formas diferentes das letras são usadas. Você pode usar formas diferentes ou simplesmente deixar como está. A adição de letras minúsculas é possível também.',
	'CAPTCHA_FONT_DEFAULT'					=> 'Padrão',
	'CAPTCHA_FONT_NEW'						=> 'Novas formas',
	'CAPTCHA_FONT_LOWER'					=> 'Também usar minúsculas',
// Mudanças 3.0.6	

	'CAPTCHA_NO_GD'							=> 'CAPTCHA sem GD',
	'CAPTCHA_PREVIEW_MSG'					=> 'Suas mudancas para a confirmação visual não foram salvas, isto é apenas um preview.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'O CAPTCHA como deverá aparecer usando as seguintes seleções.',

	'CAPTCHA_SELECT'						=> 'Plugins de CAPTCHA instalados',
	'CAPTCHA_SELECT_EXPLAIN'				=> 'O dropdown contem os plugins de CAPTCHA reconhecidos pelo phpBB nesta comunidade. Opções em cinza não foram encontradas pelo sistema e podem requere sua configuração.',
	'CAPTCHA_CONFIGURE'						=> 'Configurar CAPTCHAs',
	'CAPTCHA_CONFIGURE_EXPLAIN'				=> 'Mude as opções para o CAPTCHA selecionado.',
	'CONFIGURE'								=> 'Configurar',
	'CAPTCHA_NO_OPTIONS'					=> 'Este CAPTCHA não tem opç&otildes;es de configuração.',

	'VISUAL_CONFIRM_POST'					=> 'Habilitar confirmação visual para visitantes',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'Requer que visitantes entrem uma sequencia de caracteres para que sua mensagem seja postada, evita que bots adicionem mensagens a sua comunidade.',
	'VISUAL_CONFIRM_REG'					=> 'Habilitar confirmação visual para registrados',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'Requer novos usuários entrar uma sequencia de caracteres para que sua mensagem seja adicionada a comunidade, evita que seja adicionada mais do que o preciso para o mesmo.',
	'VISUAL_CONFIRM_REFRESH'				=> 'Habilita o refresh da imagem por usuários',
	'VISUAL_CONFIRM_REFRESH_EXPLAIN'		=> 'Permite usuários requerer uma nova imagem de confirmação, caso eles não consigam reconhecer os caracteres presente na imagem que lhe solicita para adicionar a mensagem. Alguns plugins não possuem esta opção.',
	// Mudanças 3.0.6
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'Estes detalhes definem o conteúdo usado para enviar cookies aos usuários do fórum. Na maioria dos casos, o padrão abaixo será suficiente para os requisitos. Se precisar modificar algo, faça-o com a certeza de que está correto, pois cookies errados podem evitar o login do usuário na comunidade.',

	'COOKIE_DOMAIN'				=> 'Domínio do Cookie',
	'COOKIE_NAME'				=> 'Nome do Cookie',
	'COOKIE_PATH'				=> 'Caminho do Cookie',
	'COOKIE_SECURE'				=> 'Cookie seguro',
	'COOKIE_SECURE_EXPLAIN'		=> 'Se seu servidor possui certificado SSL ativo deixe o mesmo como ativado, caso contrário deixe desativado, a grande maioria é desativado o correto.',
	'ONLINE_LENGTH'				=> 'Tempo online do usuário',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Número de tempo que um usuário será retirado da lista "Quem está online". Quanto maior este número, maior será os recursos necessários para manter a lista do "Quem está Online".',
	'SESSION_LENGTH'			=> 'Tamanho da sessão',
	'SESSION_LENGTH_EXPLAIN'	=> 'O usuário será deslogado após este período de tempo, em segundos.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Aqui você pode ativar e desativar algumas funções da comunidade, para reduzir o tamanho de processos necessários. Na maioria dos servidores não terá necessidade de desativar nenhuma das funções abaixo. Entretanto em alguns sistemas ou em servidores compartilhados será preciso desativar certas funções sem necessidade. Você também pode determinar limites de tempo para o sistema desativar determinadas funções.',

	'CUSTOM_PROFILE_FIELDS'			=> 'Personalizar campos de perfil',
	'LIMIT_LOAD'					=> 'Limite de carregamento do servidor',
	'LIMIT_LOAD_EXPLAIN'			=> 'Se o sistema de carregamento exceder 1 minuto, a comunidade irá se tornar off-line. O valor de 1.0 é igual a 100% de utilização de um processador. Isto somente funciona em sistemas baseados em UNIX.',
	'LIMIT_SESSIONS'				=> 'Limite das sessões',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Se o número de sessões excederem este valor em um minuto, a comunidade irá ficar desativada. Defina 0 para ilimitado.',
	'LOAD_CPF_MEMBERLIST'			=> 'Habilitar estilos para exibir os campos de perfil adicionais na lista de membros',
	'LOAD_CPF_VIEWPROFILE'			=> 'Exibir os campos de perfil adicionais no perfil dos usuários',
	'LOAD_CPF_VIEWTOPIC'			=> 'Exibir os campos de perfil adicionais nas páginas dos tópicos',
	'LOAD_USER_ACTIVITY'			=> 'Mostrar atividade do usuário',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Mostrar tópicos/fórum ativos no perfil do usuário e no painel de controle do mesmo. Extremamente recomendado desabilitar isto em comunidades com mais de 1 milhão de mensagens.',
	'RECOMPILE_STYLES'				=> 'Recompilar componentes do estilo',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Checa por atualizações dos componentes do estilo no sistema e os restauras se assim existir.',
	'YES_ANON_READ_MARKING'			=> 'Habilitar favoritos para anônimos',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Armazenar status lido/não lido para anônimos. Se desativado, os tópicos aparecerão como lidos sempre para os anônimos.',
	'YES_BIRTHDAYS'					=> 'Habilitar lista de aniversários',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Se desabilitado, a lista de aniversário não será exibida. Para fazer com que esta configuração tenha efeito, a opção de aniversário precisa também estar habilitada.',
	'YES_JUMPBOX'					=> 'Habilitar troca de fórum rápida',
	'YES_MODERATORS'				=> 'Habilitar a visualização de moderadores',
	'YES_ONLINE'					=> 'Habilitar "Quem Está Online" para usuários',
	'YES_ONLINE_EXPLAIN'			=> 'Mostra as informações dos usuários online no índice, nos tópicos e nos fóruns.',
	'YES_ONLINE_GUESTS'				=> 'Habilitar "Quem está Online" para anônimos',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Habilitar a demonstração de informação dos anônimos no fórum.',
	'YES_ONLINE_TRACK'				=> 'Habilitar a apresentação de quem está online/off-line no fórum',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Mostrar informações de online no perfil do usuário no fórum.',
	'YES_POST_MARKING'				=> 'Habilitar tópicos pontuados',
	'YES_POST_MARKING_EXPLAIN'		=> 'Indicará onde um usuário postou para o mesmo usuário.',
	'YES_READ_MARKING'				=> 'Habilitar marcação de servidor em tópico',
	'YES_READ_MARKING_EXPLAIN'		=> 'Armazena lido/não lido no banco de dados ou em um cookie.',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'Suporte a autenticação de plugins do phpBB, ou módulos. Isto permite você determinar como usuários são autenticados quando eles logan na comunidade. Por padrão três plugins são ativados; Banco de Dados, LDAP e Apache. Nem todos os métodos requerem informações adicionais, então preencha apenas os campos que são relevantes.',

	'AUTH_METHOD'				=> 'Selecione um método de autenticação',

	'APACHE_SETUP_BEFORE_USE'	=> 'Você tem de configurar a autenticação do apache antes de escolher o phpBB neste caso. O usuário que você utiliza para o apache tem de ser o mesmo utilizado no phpBB.',

	'LDAP_DN'						=> 'LDAP base <var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> 'Este é o Nome Distinto, localização da informação do usuário, ex. <samp>o=Meu Nome,c=BR</samp>',
	'LDAP_EMAIL'					=> 'Atributos de e-mail LDAP',
	'LDAP_EMAIL_EXPLAIN'			=> 'Defina isto ao nome de seu usuário (se existe um) em ordem para definir automaticamente o endereço de e-mail para novos usuários. Deixando estes resultados vazios no endereço de e-mail para usuários que acessam pela primeira vez.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'A autenticação do usuário no servidor LDAP não foi concluída com sucesso.',
	'LDAP_NO_EMAIL'					=> 'O atributo do e-mail especificado não existe.',
	'LDAP_NO_IDENTITY'				=> 'Não foi possível encontrar uma identificação de login para %s',
	'LDAP_PASSWORD'					=> 'Senha LDAP',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Deixe em branco para utilizar de uma ligação anônima. Senão complete no local de senha para o usuário acima. <strong>AVISO:</strong> Esta senha será armazenada no banco de dados sem criptografia, sendo visível para todos que poderem ter acesso ao seu banco de dados ou que possam ver esta página de configuração.',
	'LDAP_PORT'						=> 'Porta do servidor LDAP',
	'LDAP_PORT_EXPLAIN'				=> 'Opcionalmente, você pode especificar uma porta que deverá ser usada para conectar ao servidor LDAP ao invés da porta padrão 389.',
	'LDAP_SERVER'					=> 'Nome do servidor LDAP ',
	'LDAP_SERVER_EXPLAIN'			=> 'Se utilizando LDAP, este é o nome ou endereço de IP do servidor LDAP. Alternativamente você pode especificar uma URL como ldap://nomedoservidor:porta/',
	'LDAP_UID'						=> 'LDAP <var>uid</var>',
	'LDAP_UID_EXPLAIN'				=> 'Esta é a chave sob o qual irá ser feita a busca pela identidade de login entrada, e.x. <var>uid</var>, <var>sn</var>, etc.',
	'LDAP_USER'						=> 'LDAP usuário <var>dn</var>',
	'LDAP_USER_EXPLAIN'				=> 'Deixe em branco para utilizar de uma ligação anônima. Se preenchido no phpBB, use o nome distinto especificado ou login para tentar achar o usuário correto, por exemplo, <samp>uid=NomeDeUsuário,ou=MinhaUnidade,o=MinhaCompania,c=BR</samp>. Exigido por Servidores de Diretório Ativos.',
	'LDAP_USER_FILTER'				=> 'Filtro de usuário LDAP',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'Opcionalmente, você pode adicionar limitadores aos objetos procurados com filtros adicionais. Por exemplo: <samp>objectClass=posixGroup</samp> resultaria no uso de <samp>(&(uid=$username)(objectClass=posixGroup))</samp>',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Aqui você define as propriedades do servidor e domínios. Favor assegurar-se que o conteúdo entrado aqui está correto, erros irão resultar em e-mails contendo informações incorretas. Quando entrar com o domínio lembre-se que isto irá incluir http:// ou outro termo de protocolo. Somente altere o número da porta se seu servidor requisitar que o mesmo seja alterado, senão deixe como ela está. Seu servidor irá informar se precisar mudar.',

	'ENABLE_GZIP'				=> 'Ativar compressão GZip',
	'ENABLE_GZIP_EXPLAIN'		=> 'Conteúdo gerado será comprimido antes de mostrar ao usuário. Isto irá reduzir os gastos com banda do servidor, mas irá aumentar o uso do CPU tanto no cliente como no servidor. Requer que seu servidor tenha instalado ZLIB.',
	'FORCE_SERVER_VARS'			=> 'Forçar propriedades do servidor URL',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Se definido como sim as propriedades do servidor aqui será usadas em favor de um sistema automático com valores concretos',
	'ICONS_PATH'				=> 'Endereço de armazenamento dos ícones de mensagens',
	'ICONS_PATH_EXPLAIN'		=> 'Endereço do diretório raiz do seu phpBB, e.x. <samp>images/icons</samp>.',
	'PATH_SETTINGS'				=> 'Propriedades de endereço',
	'RANKS_PATH'				=> 'Endereço de armazenamento dos ranks',
	'RANKS_PATH_EXPLAIN'		=> 'Endereço do diretório raiz do seu phpBB, e.x. <samp>images/ranks</samp>.',
	'SCRIPT_PATH'				=> 'Endereço do script',
	'SCRIPT_PATH_EXPLAIN'		=> 'Endereço onde o phpBB se encontra, relativo ao nome de domínio, e.x. <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> 'Nome do domínio',
	'SERVER_NAME_EXPLAIN'		=> 'O nome de domínio no qual esta comunidade está funcionando (por exemplo: <samp>www.exemplo.com.br</samp>)',
	'SERVER_PORT'				=> 'Porta do servidor',
	'SERVER_PORT_EXPLAIN'		=> 'A porta que seu servidor está rodando, normalmente 80, só mude se tiver certeza disto',
	'SERVER_PROTOCOL'			=> 'Protocolo do servidor',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Isto é usado como o protocolo do servidor se estas definições são forçadas. Se estiver vazio ou sem protocolo forçado é determinado por cookies seguros (<samp>http://</samp> ou <samp>https://</samp>)',
	'SERVER_URL_SETTINGS'		=> 'Propriedades do servidor URL',
	'SMILIES_PATH'				=> 'Endereço de armazenamento dos smilies',
	'SMILIES_PATH_EXPLAIN'		=> 'Endereço do diretório raiz do seu phpBB, e.x. <samp>images/smilies</samp>',
	'UPLOAD_ICONS_PATH'			=> 'Endereço de armazenamento dos ícones de grupos de extensão',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Endereço do diretório raiz do seu phpBB, e.x. <samp>images/upload_icons</samp>',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Aqui você está apto a definir sessões e logins relacionados a suas propriedades',

	'ALL'							=> 'Todos',
	'ALLOW_AUTOLOGIN'				=> 'Permitir login automático', 
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Determina se os usuários podem fazer o autologin quando entrarem no fórum, assim sempre estarão logados quando entrar na comunidade.', 
	'AUTOLOGIN_LENGTH'				=> 'Autologin irá durar (em dias)', 
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Número de dias que o autologin fica ativo para os usuários, depois disto todos terão de refazer este processo.', 
	'BROWSER_VALID'					=> 'Validar navegador',
	'BROWSER_VALID_EXPLAIN'			=> 'Habilita validação por navegador por cada sessão aberta, isto faz com que aumente a segurança.',
	'CHECK_DNSBL'					=> 'Checar IP contra lista de IPs Bloqueados',
	'CHECK_DNSBL_EXPLAIN'			=> 'Se ativado, o endereço de IP do usuário será verificado no DNSBL quando for se registrar e no momento de criar mensagens: <a href="http://spamcop.net">spamcop.net</a> e <a href="http://www.spamhaus.org">www.spamhaus.org</a>. Esta verificação pode levar um tempo, dependendo das configuração do servidor. Se você experimentar uma queda na velocidade do fórum, recomendamos que esta opção seja desabilitada.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Checar validade do endereço de e-mail para gravar MX',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Se ativado, o domínio do e-mail entrado pelo usuário no momento do registro ou no perfil é checado para ver sua validade e ser gravado como correto.',
	'FORCE_PASS_CHANGE'				=> 'Forçar troca de senha',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Requer que o usuário altere sua senha depois de um tempo determinado. Fixando este valor em 0 esta opção é desativada.',
	'FORM_TIME_MAX'					=> 'Tempo máximo para enviar os formulários',
	'FORM_TIME_MAX_EXPLAIN'			=> 'O tempo que um usuário tem para enviar um formulário. Use -1 para desabilitar. Note que um formulário pode se tornar inválido se a sessão expirar, independente desta configuração.',
	'FORM_SID_GUESTS'				=> 'Ligar formulários &agrave;s sessões de visitantes',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'Se habilitado, o símbolo de formulário emitido aos visitantes será o de sessão exclusiva. Isto pode causar problemas com algum ISPs.',
	'FORWARDED_FOR_VALID'			=> 'Cabeçalho <var>X_FORWARDED_FOR</var> validado',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Sessões só terão continuidade se o cabeçalho do emissor <var>X_FORWARDED_FOR</var> for igual ao emissor previamente. Banimentos serão checados também pelo <var>X_FORWARDED_FOR</var>.',
	'IP_VALID'						=> 'Validação da sessão IP',
	'IP_VALID_EXPLAIN'				=> 'Determina o quanto de usuários é usado para validar uma sessão de IP; <samp>Todos</samp> compara o endereço completo, <samp>A.B.C</samp> os primeiros x.x.x, <samp>A.B</samp> o primeiro x.x, <samp>Nada</samp> desativa a checagem.',
	'MAX_LOGIN_ATTEMPTS'			=> 'Número máximo de logins permitidos',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Depois de ter atingido este número máximo de tentativas, o usuário precisará entrar com a confirmação visual para continuar logando na comunidade (um e-mail será enviado)',
	'NO_IP_VALIDATION'				=> 'Nenhum',
	'NO_REF_VALIDATION'            => 'Nenhum',
	'PASSWORD_TYPE'					=> 'Complexidade da senha',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Determina o quanto complexo a senha do usuário deverá ser para fazer login, aumenta a segurança das contas.',
	'PASS_TYPE_ALPHA'				=> 'Deverá ser alfa-numérico',
	'PASS_TYPE_ANY'					=> 'Sem requerimentos',
	'PASS_TYPE_CASE'				=> 'Deverá ser forma alta e baixa',
	'PASS_TYPE_SYMBOL'				=> 'Deverá conter símbolos',
	'REF_HOST'                  => 'Somente validado pelo host',
    'REF_PATH'                  => 'Validado adicionalmente pela pasta',
    'REFERER_VALID'               => 'Referência de validação',
    'REFERER_VALID_EXPLAIN'         => 'Se habilitado, as referências de pedidos de POST serão checadas com as configurações do host/pasta do script. Isto pode causar problema com fóruns usando domínios grandes ou login externo.',
	'TPL_ALLOW_PHP'					=> 'Permitir php nas templates',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Se esta opção está ativada, <code>PHP</code> e <code>INCLUDEPHP</code> serão reconhecidas e repassadas nas templates.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Esta informação é usada quando a comunidade envia um e-mail para seus usuários. Favor certificar-se de que o e-mail que você especificou é válido, qualquer mensagem perdida será enviada para este endereço. Se seu servidor não suporta a função nativa do PHP (php mail()), será preciso utilizar de um servidor SMTP. Isto requer o endereço de um servidor apropriado (pergunte ao seu provedor de e-mails). Se o servidor requerer autenticação (e somente se) entre com o nome de usuário necessário, senha e método de autenticação.',

	'ADMIN_EMAIL'					=> 'Endereço de e-mail para retorno',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Este será usado como endereço de retorno em todos os e-mails, o endereço de contato técnico. Isto será sempre usado como o <samp>Endereço de Retorno</samp> e <samp>Remetente</samp> nos e-mails.',
	'BOARD_EMAIL_FORM'				=> 'Usuário enviar e-mail pela comunidade',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'Ao invés de mostrar o endereço de e-mail do usuário, os usuários estarão aptos a enviar e-mails usando a comunidade.',
	'BOARD_HIDE_EMAILS'				=> 'Ocultar endereços de e-mail',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Esta função mantém o endereço de e-mail completamente privado.',
	'CONTACT_EMAIL'					=> 'Endereço de e-mail para contato',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Este endereço será usado quando um contato específico é necessário, e.x. spam, retorno de erro, etc. Ele será sempre usado como o <samp>De</samp> e <samp>Responder-Para</samp> endereços nos e-mails.',
	'EMAIL_FUNCTION_NAME'			=> 'Nome da função do e-mail',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'A função do e-mail usada para enviar via PHP.',
	'EMAIL_PACKAGE_SIZE'			=> 'Tamanho do pacote de e-mail',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Este Ã© o número de e-mails enviados em um pacote. Esta configuração é aplicada &agrave; citação; fixe este valor em 0 se você tiver problemas com notificação de e-mails não enviadas.',
	'EMAIL_SIG'						=> 'Assinatura de e-mail',
	'EMAIL_SIG_EXPLAIN'				=> 'Este texto será anexado a todos os e-mails enviados pela comunidade.',
	'ENABLE_EMAIL'					=> 'Habilitar e-mail',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Se este estiver desabilitado, nenhum e-mail será enviado pela comunidade, nem de cadastro. <em>Note que usuário e administrador na ativação requer ativo esta opção. Se atualmente usando usuário ou admin, desabilitando este não irá requerer ativação de cadastro para estes.</em>',
	'SMTP_AUTH_METHOD'				=> 'Método de autenticação por SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Usado somente se um usuário/senha é definido, pergunte ao seu provedor de e-mails para os dados corretos a usar nestes campos, apenas se sua comunidade não for capaz de enviar e-mails.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'USUáRIO',
	'SMTP_PASSWORD'					=> 'Senha SMTP',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Entre com uma senha somente se seu servidor SMTP requerer uma. <em><strong>Aviso:</strong> esta senha é guardada como texto plano sem criptografia no banco de dados.</em>',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'Porta do servidor SMTP',
	'SMTP_PORT_EXPLAIN'				=> 'Troque esta porta somente se for necessário e avisado pelo provedor de e-mails.',
	'SMTP_SERVER'					=> 'Endereço do servidor SMTP',
	'SMTP_SETTINGS'					=> 'Propriedades SMTP',
	'SMTP_USERNAME'					=> 'Usuário SMTP',
	'SMTP_USERNAME_EXPLAIN'			=> 'Somente entre com um usuário se seu SMTP requerer um.',
	'USE_SMTP'						=> 'Use o servidor SMTP para enviar e-mails',
	'USE_SMTP_EXPLAIN'				=> 'Selecione &quot;Sim&quot; se você quer ou tem que enviar e-mails por um servidor nomeado ao invés de usar a função de e-mail local.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Aqui você pode habilitar e controlar o uso de Jabber para mensagens instant&acirc;neas além de novidades da comunidade. Jabber é um protocolo código livre e por tanto pode ser usado por qualquer um. Alguns servidores Jabber incluem um gateway ou transportes o qual permite você contatar usuário em outra rede. Nem todos os servidores oferecem todos os transportes, e alterações no protocolo podem prevenir as operações destes transportes. Por favor, esteja certo de fornecer informações de contas já registradas - o phpBB se utilizará das informações que você nos fornece aqui.',

	'JAB_ENABLE'				=> 'Habilitar Jabber',
	'JAB_ENABLE_EXPLAIN'		=> 'Ativa o uso de mensagens e notificações via jabber',
	'JAB_GTALK_NOTE'			=> 'Por favor, note que o GTalk não funcionará porque a função <samp>dns_get_record</samp> não pôde ser encontrada. Esta função não está disponível no PHP4, e não está implementada nas plataformas Windows. Atualmente ele não trabalha em sistemas baseados em BSD, inclusive Mac OS.',
	'JAB_PACKAGE_SIZE'			=> 'Tamanho do pacote jabber',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Este é o número de mensagens enviadas em um pacote apenas. Se definido como 0, a mensagem é enviada imediatamente e não irá esperar pelo próximo envio.',
	'JAB_PASSWORD'				=> 'Senha Jabber',
	'JAB_PASSWORD_EXPLAIN'		=> '<em><strong>Aviso:</strong> esta senha é armazenada como texto plano no banco de dados, sem criptografia.</em>',
	'JAB_PORT'					=> 'Porta Jabber',
	'JAB_PORT_EXPLAIN'			=> 'Deixe em branco, a menos que você tenha conhecimento da porta correta, padrão 5222',
	'JAB_SERVER'				=> 'Servidor Jabber',
	'JAB_SERVER_EXPLAIN'		=> 'Ver %sjabber.org%s para uma lista de servidores',
	'JAB_SETTINGS_CHANGED'		=> 'Propriedades Jabber modificadas com sucesso.',
	'JAB_USE_SSL'				=> 'Usar SSL para conectar',
	'JAB_USE_SSL_EXPLAIN'		=> 'Se ativado, uma conexão segura irá tentar ser estabelecida. A porta do Jabber será modificada para 5223 se a porta 5222 for a especificada.',
	'JAB_USERNAME'				=> 'Usuário Jabber ou JID',
	'JAB_USERNAME_EXPLAIN'		=> 'Especifique um nome de usuário registrado ou JID válido. O nome de usuário não será conferido para validação. Se você especificar apenas um nome de usuário, então seu JID ser&aacute o nome do usuário e do servidor que você especificou anteriormente. Caso contrario especificar um JID válido, por exemplo, user@jabber.org.',
));

?>