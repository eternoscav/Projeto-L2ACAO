<?php
/**
*
* posting [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.1
* @package language: Brazilian Portuguese
* @original version $Id: posting.php,v 1.50 2007/11/28 20:09:01 kellanved Exp $
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
// BBCodes 
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode é uma implementação especial de HTML que oferece um grande controle sobre como algo será mostrado. Nesta página você pode adicionar, remover e editar BBCodes personalizados.',
	'ADD_BBCODE'				=> 'Adicionar novo BBCode',

	'BBCODE_DANGER'				=> 'O BBCode que você está tentando inserir usa {TEXT} dentro de um atributo HTML. Esta é uma questão de segurança XSS. Tente usar meios mais restritivos como {SIMPLETEXT} ou {INTTEXT} tipo ao invés. Somente continue se estiver ciente do risco e considerar o uso do {TEXT} absolutamente inviolável.',
	'BBCODE_DANGER_PROCEED'		=> 'Continuar', //'I understand the risk',

	'BBCODE_ADDED'				=> 'BBCode adicionado com sucesso.',
	'BBCODE_EDITED'				=> 'BBCode editado com sucesso.',
	'BBCODE_NOT_EXIST'			=> 'O BBCode que você selecionou não existe.',
	'BBCODE_HELPLINE'			=> 'Linha de ajuda',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Este campo contém o texto quando passado com o mouse sobre o BBCode.',
	'BBCODE_HELPLINE_TEXT'		=> 'Texto de ajuda da linha',
	'BBCODE_HELPLINE_TOO_LONG'	=> 'A linha de ajuda que você digitou é muito longa.',
	'BBCODE_INVALID_TAG_NAME'	=> 'O nome do código BBCode que você selecionou já está em uso.',
	'BBCODE_INVALID'			=> 'Seu BBCode foi construído de uma forma inválida.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'Seu BBCode personalizado deve de conter um código de abertura e outro de fechamento do mesmo.',
	'BBCODE_TAG'				=> 'Código',
	'BBCODE_TAG_TOO_LONG'		=> 'O código definido é muito longo.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'O código que você definiu é muito longo, favor diminuir a definição de seu código.',
	'BBCODE_USAGE'				=> 'Uso do BBCode',
	'BBCODE_USAGE_EXAMPLE'		=> '[hilight={COLOR}]{TEXT}[/hilight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Aqui você pode definir como usar o BBCode. Troque qualquer variável pela variável correspondente (%sveja abaixo%s).',

	'EXAMPLE'						=> 'Exemplo:',
	'EXAMPLES'						=> 'Exemplos:',

	'HTML_REPLACEMENT'				=> 'Substituição de HTML',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Aqui você pode definir o HTML padrão para troca (cada template tem seu próprio HTML de troca). Não se esqueça de recolocar os que você usou acima!',

	'TOKEN'					=> 'Símbolo',
	'TOKENS'				=> 'Símbolos',
	'TOKENS_EXPLAIN'		=> 'Símbolos são campos especiais para que os usuários entrem com dados. A entrada do dado será validada somente se a mesma corresponder exatamente igual a definida. Se necessário, você pode numerar eles adicionando números ao final como último caractere, e.x. {TEXTO1}, {TEXTO2}.<br /><br />Como substituto do HTML você também pode usar qualquer string presente em seu diretório language/, como isto: {L_<em>&lt;nomestring&gt;</em>} onde <em>&lt;nomestring&gt;</em> é o nome da string traduzida que você quer adicionar. Por exemplo, {L_WROTE} será mostrada como "wrote" ou pela sua tradução de acordo com o idioma do usuário.<br /><br /><strong>Por favor, note que só os símbolos listados abaixo podem ser usados dentro dos BBCodes comuns.</strong>',
	'TOKEN_DEFINITION'		=> 'O que pode ser isto?',
	'TOO_MANY_BBCODES'		=> 'Você não pode criar nenhum BBCode a mais. Favor remover algum existente e tentar novamente.',

	'tokens'	=>	array(
		'TEXT'			=> 'Qualquer texto, incluindo caracteres estrangeiros, números, etcâ€¦ Você não deveria utilizar este símbolo em tags HTML. Ao invés tente usar o IDENTIFIER ou SIMPLETEXT.',
		'SIMPLETEXT'	=> 'Caracteres do alfabeto latino (A-Z), números, espaços, vírgulas, pontos, menos, mais, hífen e sublinhado',
		'INTTEXT'		=> 'Caracteres Unicode, números, espaços, vírgulas, pontos, menos, mais, hífen, sublinhado e espaço em branco.',
		'IDENTIFIER'	=> 'Caracteres do alfabeto latino (A-Z), números, hífen e sublinhado',
		'NUMBER'		=> 'Qualquer série de dígitos',
		'EMAIL'			=> 'Um endereço de e-mail válido',
		'URL'			=> 'Um endereço URL válido usando qualquer protocolo (http, ftp, etcâ€¦ não pode ser usado para exploits de javascript). Se nenhum for definido, &quot;http://&quot; é o padrão para a string',
		'LOCAL_URL'		=> 'Um endereço URL local. A URL deve ser relativa &agrave; página do tópico e não pode conter o protocolo do nome do servidor, sem o http e derivados',
		'COLOR'			=> 'Uma cor HTML, pode ser na forma numérica <samp>#FF1234</samp> ou um <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">estilo de cor CSS</a> tais como <samp>fúscia</samp> ou <samp>Borda Inativa</samp>'
	)
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'Nesta página você pode adicionar, remover e editar os ícones que Usuários poderão inserir em seus tópicos e mensagens. Estes ícones geralmente são mostrados próximo ao título do tópico ou na lista do fórum de escolha, ou nas respostas das mensagens, enfim, em qualquer local onde exista um campo de texto. Você pode criar e instalar novos pacotes de ícones se assim desejar.',
	'ACP_SMILIES_EXPLAIN'	=> 'Smilies ou Emoções são pequenos, geralmente usados para representar um sentimento ou Emoção expressada na mensagem. Desta página você pode adicionar, remover e editar as Emoções que podem ser usadas na comunidade em geral. Você poderá também criar e instalar novos pacotes de Emoções.',
	'ADD_SMILIES'			=> 'Adicionar múltiplas Emoções',
	'ADD_SMILEY_CODE'		=> 'Adicionar código adicional de emoção',
	'ADD_ICONS'				=> 'Adicionar múltiplos ícones',
	'AFTER_ICONS'			=> 'Depois de %s',
	'AFTER_SMILIES'			=> 'Depois de %s',

	'CODE'						=> 'Código',
	'CURRENT_ICONS'				=> 'ícones atuais',
	'CURRENT_ICONS_EXPLAIN'		=> 'Escolha o que fazer com os ícones instalados.',
	'CURRENT_SMILIES'			=> 'Emoções atuais',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Escolha o que fazer com as Emoções instaladas.',

	'DISPLAY_ON_POSTING'		=> 'Mostrar nas mensagens',
	'DISPLAY_POSTING'			=> 'Na página de postagem',
	'DISPLAY_POSTING_NO'		=> 'Não na página de postagem',
	
	

	'EDIT_ICONS'				=> 'Editar ícones',
	'EDIT_SMILIES'				=> 'Editar Emoções',
	'EMOTION'					=> 'Emoção',
	'EXPORT_ICONS'				=> 'Exportar e fazer o download de icons.pak',
	'EXPORT_ICONS_EXPLAIN'		=> '%sAo clicar neste link, a configuração de seus ícones instalados será criado o pacote dentro de <samp>icons.pak</samp> que quando feito o download serão criados arquivos <samp>.zip</samp> ou <samp>.tgz</samp> contendo todos os seus ícones e Emoções <samp>icons.pak</samp> para futura configuração%s.',
	'EXPORT_SMILIES'			=> 'Exportar e fazer download smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sAo clicar neste link, a configuração de seus ícones instalados será criado o pacote dentro de <samp>smilies.pak</samp> que quando feito o download serão criados arquivos <samp>.zip</samp> ou <samp>.tgz</samp> contendo todos os seus ícones e Emoções <samp>smilies.pak</samp> para futura configuração%s.',

	'FIRST'			=> 'Primeiro',

	'ICONS_ADD'				=> 'Adicionar um novo ícone',
	'ICONS_NONE_ADDED'		=> 'Nenhum ícone foi adicionado.',
	'ICONS_ONE_ADDED'		=> 'O ícone foi adicionado com sucesso.',
	'ICONS_ADDED'			=> 'Os ícones foram adicionados com sucesso.',
	'ICONS_CONFIG'			=> 'Configuração dos ícones',
	'ICONS_DELETED'			=> 'O ícone foi removido com sucesso.',
	'ICONS_EDIT'			=> 'Editar ícone',
	'ICONS_ONE_EDITED'		=> 'O ícone foi atualizado com sucesso.',
	'ICONS_NONE_EDITED'		=> 'Nenhum ícone foi atualizado.',
	'ICONS_EDITED'			=> 'Os ícones foram atualizados com sucesso.',
	'ICONS_HEIGHT'			=> 'Altura do ícone',
	'ICONS_IMAGE'			=> 'Imagem do ícone',
	'ICONS_IMPORTED'		=> 'O pacote de ícones foi instalado com sucesso.',
	'ICONS_IMPORT_SUCCESS'	=> 'O pacote de ícones foi importado com sucesso.',
	'ICONS_LOCATION'		=> 'Localização dos ícones',
	'ICONS_NOT_DISPLAYED'	=> 'Os seguintes ícones não são mostrados aos Usuários',
	'ICONS_ORDER'			=> 'Ordem dos ícones',
	'ICONS_URL'				=> 'Arquivo de imagem dos ícones',
	'ICONS_WIDTH'			=> 'Largura do ícone',
	'IMPORT_ICONS'			=> 'Instalar pacote de ícones',
	'IMPORT_SMILIES'		=> 'Instalar pacote de Emoções',

	'KEEP_ALL'			=> 'Manter todos',

	'MASS_ADD_SMILIES'	=> 'Adicionar múltiplas Emoções',

    'NO_ICONS_ADD'		=> 'Não existem ícones disponíveis para adicionar.',
	'NO_ICONS_EDIT'		=> 'Não existem ícones disponíveis para modificar.',
	'NO_ICONS_EXPORT'	=> 'Você não possui ícones para criar o pacote.',
	'NO_ICONS_PAK'		=> 'Nenhum pacote de ícone encontrado.',
	'NO_SMILIES_ADD'	=> 'Não existem emoções disponíveis para adicionar.',
	'NO_SMILIES_EDIT'	=> 'Não existem emoções disponíveis para editar.',
	'NO_SMILIES_EXPORT'	=> 'Você não possui Emoções para criar o pacote.',
	'NO_SMILIES_PAK'	=> 'Nenhum pacote de Emoções encontrado.',

	'PAK_FILE_NOT_READABLE'		=> 'Não foi possível ler o arquivo <samp>.pak</samp>.',

	'REPLACE_MATCHES'	=> 'Trocar marcados',

	'SELECT_PACKAGE'			=> 'Selecionar um arquivo de pacote',
	'SMILIES_ADD'				=> 'Adicionar uma nova emoção',
	'SMILIES_NONE_ADDED'		=> 'Nenhuma das emoções foram adicionadas.',
	'SMILIES_ONE_ADDED'			=> 'A emoção foi adicionada com sucesso.',
	'SMILIES_ADDED'				=> 'As emoções foram adicionadas com sucesso.',
	'SMILIES_CODE'				=> 'Código da emoção',
	'SMILIES_CONFIG'			=> 'Configuração da emoção',
	'SMILIES_DELETED'			=> 'A emoção foi removida com sucesso.',
	'SMILIES_EDIT'				=> 'Editar emoção',
	'SMILIE_NO_CODE'			=> 'A emoção “%s” foi ignorada, pois não foi colocado o código.',
	'SMILIE_NO_EMOTION'			=> 'A emoção “%s” foi ignorada, pois não foi colocada a emoção.',
	'SMILIES_NONE_EDITED'		=> 'Nenhuma das emoções foram atualizadas.',
	'SMILIES_ONE_EDITED'		=> 'A emoção foi atualizada com sucesso.',
	'SMILIES_EDITED'			=> 'As emoções foram atualizadas com sucesso.',
	'SMILIES_EMOTION'			=> 'Emoção',
	'SMILIES_HEIGHT'			=> 'Altura da emoção',
	'SMILIES_IMAGE'				=> 'Imagem da emoção',
	'SMILIES_IMPORTED'			=> 'O pacote de emoções foi instalado com sucesso.',
	'SMILIES_IMPORT_SUCCESS'	=> 'O pacote de emoções foi importado com sucesso.',
	'SMILIES_LOCATION'			=> 'Localização das emoções',
	'SMILIES_NOT_DISPLAYED'		=> 'As seguintes emoções não são mostradas aos Usuários',
	'SMILIES_ORDER'				=> 'Ordem das emoções',
	'SMILIES_URL'				=> 'Arquivo de imagem de emoção',
	'SMILIES_WIDTH'				=> 'Largura da emoção',
	'TOO_MANY_SMILIES'			=> 'Limite de %d smilies alcançado.',
	'WRONG_PAK_TYPE'	=> 'O pacote especificado não contém os dados apropriados.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'Deste painel de controle você pode adicionar, editar e remover palavras que serão automaticamente censuradas em seus fóruns. Em adicional, pessoas não estarão permitidas a registrarem nomes de usuário que contenham as palavras aqui censuradas. Palavras universais (*) são aceitas no campo das palavras, ex. *test* irá acertar detestável, test* deverá acertar teste, *testa irá acertar detesta.',
	'ADD_WORD'				=> 'Adicionar nova palavra',

	'EDIT_WORD'		=> 'Editar censura de palavra',
	'ENTER_WORD'	=> 'Você deve entrar uma palavra e sua substituta.',

	'NO_WORD'	=> 'Nenhuma palavra selecionada para editar.',

	'REPLACEMENT'	=> 'Trocar',

	'UPDATE_WORD'	=> 'Atualizar censura de palavras',

	'WORD'				=> 'Palavra',
	'WORD_ADDED'		=> 'A censura de palavras foi adicionada com sucesso.',
	'WORD_REMOVED'		=> 'A censura de palavras foi removida com sucesso.',
	'WORD_UPDATED'		=> 'A censura de palavras foi atualizada com sucesso.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'Usando este formulário você pode adicionar, editar, ver e remover os  ranks de usuário. Você também pode criar ranks personalizados, os quais  podem ser aplicados a um usuário pela Gerência de Usuários.',
	'ADD_RANK'				=> 'Adicionar novo rank',

	'MUST_SELECT_RANK'		=> 'Você deve selecionar um rank.',
	
	'NO_ASSIGNED_RANK'		=> 'Nenhum rank especial atribuído.',
	'NO_RANK_TITLE'			=> 'Você não especificou um título para este rank.',
	'NO_UPDATE_RANKS'		=> 'O rank foi deletado com sucesso. Entretanto Usuários usando este rank não tiveram suas contas atualizadas. Você terá de remover manualmente os ranks nestas contas.',

	'RANK_ADDED'			=> 'O rank foi adicionado com sucesso.',
	'RANK_IMAGE'			=> 'Imagem do rank',
	'RANK_IMAGE_EXPLAIN'	=> 'Use isto para definir uma pequena imagem associada ao rank do usuário. O caminho da mesma é relativo ao diretório raiz do phpBB.',
	'RANK_IMAGE_IN_USE'		=> '(Em uso)',
	'RANK_MINIMUM'			=> 'Mínimo de mensagens',
	'RANK_REMOVED'			=> 'O rank foi removido com sucesso.',
	'RANK_SPECIAL'			=> 'Definir como rank especial',
	'RANK_TITLE'			=> 'Título do rank',
	'RANK_UPDATED'			=> 'O rank foi atualizado com sucesso.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Aqui você pode controlar os nomes de usuários ao qual não são permitidos usar. Os nomes de usuários proibidos podem ser definidos com um símbolo para palavra universal (*). Por favor, note que você não poderá especificar um usuário que já esteja cadastrado, você primeiro terá de excluir o nome e então proibir o uso do mesmo.',
	'ADD_DISALLOW_EXPLAIN'	=> 'Você pode desabilitar um nome de usuário usando a palavra universal * para automaticamente banir caracteres conseq&uuml;entes',
	'ADD_DISALLOW_TITLE'	=> 'Adicionar um nome Proibido',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Você pode remover um nome proibido, selecione o nome e então pressione enviar para executar esta ação',
	'DELETE_DISALLOW_TITLE'		=> 'Remover um nome Proibido',
	'DISALLOWED_ALREADY'		=> 'O nome o qual você entrou não pode ser desabilitado. Este já existe na lista ou um usuário com este nome está presente nos registros.',
	'DISALLOWED_DELETED'		=> 'O nome Proibido foi removido com sucesso.',
	'DISALLOW_SUCCESSFUL'		=> 'O nome Proibido foi adicionado com sucesso.',

	'NO_DISALLOWED'				=> 'Nenhum nome Proibido',
	'NO_USERNAME_SPECIFIED'		=> 'Você não selecionou ou especificou um nome para editar.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Aqui você pode gerenciar as razões usadas para notificar e acusar mensagens quando desaprovadas pelos Usuários. Existe uma razão padrão (marcada com um *) você não poderá remover, esta razão normalmente é usada para mensagens que nenhuma outra razão se encaixam.',
	'ADD_NEW_REASON'		=> 'Adicionar nova razão',
	'AVAILABLE_TITLES'		=> 'Títulos disponíveis para razão',
	
	'IS_NOT_TRANSLATED'			=> 'Razão <strong>não</strong> foi localizada.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'Razão <strong>não</strong> foi localizada. Se você quiser fornecer o formulário localizado, especifique a chave correta dos arquivos de idioma da sessão de notificações.',
	'IS_TRANSLATED'				=> 'Razão foi localizada.',
	'IS_TRANSLATED_EXPLAIN'		=> 'Razão foi localizada. Se o título que você entrar aqui é especificado nos arquivos de idioma, o título e descrição serão usados então.',
	
	'NO_REASON'					=> 'Razão não pode ser encontrada.',
	'NO_REASON_INFO'			=> 'Você tem de especificar um título e uma descrição para esta razão.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Você não está apto a remover a razão padrão â€œOutroâ€.',

	'REASON_ADD'				=> 'Adicionar razão de notificação/proibição',
	'REASON_ADDED'				=> 'notificação/proibição adicionada com sucesso.',
	'REASON_ALREADY_EXIST'		=> 'Uma razão com este título já está em uso, favor entrar com outro título para esta razão.',
	'REASON_DESCRIPTION'		=> 'Descrição da razão',
	'REASON_DESC_TRANSLATED'	=> 'Descrição da razão demonstrada',
	'REASON_EDIT'				=> 'Editar razões de notificação/proibição',
	'REASON_EDIT_EXPLAIN'		=> 'Aqui você está apto a adicionar ou editar uma razão. Se a razão está traduzida a versão localizada será usada ao invés da descrição entrada aqui.',
	'REASON_REMOVED'			=> 'Notificação/proibição removida com sucesso.',
	'REASON_TITLE'				=> 'Título da razão',
	'REASON_TITLE_TRANSLATED'	=> 'Título mostrado da razão',
	'REASON_UPDATED'			=> 'Notificação/proibição atualizada com sucesso.',

	'USED_IN_REPORTS'		=> 'Usado nas Notificações',
));

?>
