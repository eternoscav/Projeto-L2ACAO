<?php
/**
*
* help_bbcode [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.0
* @package language: Brazilian Portuguese
* @original version $Id: help_bbcode.php,v 1.27 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translator: phpBB Brasil - http://www.phpBBrasil.com.br/ - 2007-12-13 - 15:00
*/

/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
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
$help = array(
	array(
		0 => '--',
		1 => 'Introdução'
	),
	array(
		0 => 'O que é BBCode?',
		1 => 'BBCode é uma implementação especial da linguagem HTML. A possibilidade de se usar BBCode nas suas mensagens é determinada pelo Administrador do Fórum. Adicionalmente, você poderá desativar o BBCode em cada mensagem, assinalando em “Desativar BBCode”, abaixo da caixa principal de cada mensagem. O próprio BBCode é similar em estilo ao HTML, as TAGs são incluídas entre colchetes “[exemplo]”, em vez de “&lt;exemplo&gt;”, proporcionando uma maior facilidade na formatação de suas mensagens. A tarefa de adicionar BBCode às suas mensagens é facilitada pelo uso de um painel colocado imediatamente acima à caixa principal das mensagens, onde você pode escolher e aplicar os vários itens para o código que pretenda aplicar. Apesar da existência desse painel, tenha certeza que este guia lhe será útil.'
	),
	array(
		0 => '--',
		1 => 'Formatando Texto'
	),
	array(
		0 => 'Como criar texto em negrito, itálico e sublinhado',
		1 => 'O BBCode inclui TAGs que lhe permitem mudar rapidamente o estilo básico do texto. Isto é possível das seguintes formas: <ul><li>Para tornar uma parte do texto em negrito, basta incluí-la entre as TAGs <strong>[b][/b]</strong>, ou seja: <br /><br /><strong>[b]</strong>Olá<strong>[/b]</strong><br /><br />passará a ser <strong>Olá</strong></li><li>. Para sublinhar use <strong>[u][/u]</strong>, por exemplo:<br /><br /><strong>[u]</strong>Bom Dia<strong>[/u]</strong><br /><br />passa a ser <span style="text-decoration: underline">Bom Dia</span></li><li>. Para tornar o texto em itálico use <strong>[i][/i]</strong>, ou seja:<br /><br /> Isto é <strong>[i]</strong>ótimo!<strong>[/i]</strong><br /><br /> resulta em: Isto é <i>ótimo!</i></li></ul>'
	),
	array(
		0 => 'Como mudar a cor ou o tamanho do texto',
		1 => 'Para alterar a cor ou o tamanho do texto devem ser usadas as seguintes TAGs. Ter em mente que a forma como aparecerá no monitor de cada visitante depende do navegador ou do sistema que use: <ul><li> A mudança da cor do texto é feita englobando-o em <strong>[color=][/color]</strong>. Tanto pode especificar o nome de uma cor conhecida (terá que ser em inglês) (por exemplo, red, blue, yellow, etc.) ou especificando o seu valor hexadecimal, ou seja, #FFFFFF, #000000. Por exemplo, para criar texto em vermelho, você poderá usar:<br /><br /><strong>[color=red]</strong>Olá!<strong>[/color]</strong><br /><br />ou<br /><br /><strong>[color=#FF0000]</strong>Olá!<strong>[/color]</strong><br /><br /> Ambos resultarão em <span style="color:red">Olá!</span></li><li> A mudança do tamanho do texto pode ser feita de uma forma similar, usando <strong>[size=][/size]</strong>. Esta TAG está dependente do template do phpBB que o usuário está usando, mas o formato recomendado é um valor numérico representando o tamanho de texto em porcentagem (%), começando em 20 (tão pequeno que praticamente não se vê) até 200 (enorme). Por exemplo:<br /><br /><strong>[size=30]</strong>PEQUENO<strong>[/size]</strong><br /><br /> normalmente surge como <span style="font-size:30%;">PEQUENO</span><br /><br /> enquanto que:<br /><br /><strong>[size=200]</strong>ENORME!<strong>[/size]</strong><br /><br /> será <span style="font-size:200%;">ENORME!</span></li></ul>'
	),
	array(
		0 => 'Posso combinar TAGs de formato?',
		1 => 'Sim, claro que pode, por exemplo, para chamar a atenção de alguém, você poderá escrever:<br /><br /><strong>[size=200][color=red][b]</strong>OLHE PARA MIM!<strong>[/b][/color][/size]</strong><br /><br /> que irá aparecer como <span style="color:red;font-size:200%;"><strong>OLHE PARA MIM!</strong></span><br /><br /> No entanto, não recomendamos o uso de muito texto da forma que acabamos de descrever! Lembre-se que depende de você, o autor da mensagem, assegurar que os códigos sejam colocados corretamente. Por exemplo, isto está incorreto:<br /><br /><strong>[b][u]</strong>Isto está errado<strong>[/b][/u]</strong>'
	),
	array(
		0 => '--',
		1 => 'Citar e produzir texto de largura fixa'
	),
	array(
		0 => 'Citar texto em respostas',
		1 => 'Há duas formas de reproduzir texto previamente feito (normalmente uma réplica de uma mensagem anterior), com ou sem referência.<ul><li>Quando utiliza a função Citar para responder a uma mensagem no fórum, note que o texto dessa mensagem é adicionado ao corpo da mensagem incluído em um bloco <strong>[quote=""][/quote]</strong>. Este método permite-lhe citar com uma referência a uma pessoa ou o que você decida colocar! Por exemplo, para citar uma peça de texto que Mr. Blobby escreveu, você escreverá:<br /><br /><strong>[quote="Mr. Blobby"]</strong>O texto que Mr. Blobby escreveu irá aqui<strong>[/quote]</strong><br /><br /> No resultado será adicionado automaticamente, &quot;Mr. Blobby escreveu:&quot; antes do texto citado. Note que você <strong>deve</strong> incluir as aspas &quot;&quot; em volta do nome que deseja citar, eles não são opcionais.</li><li>O segundo método permite-lhe citar algo sem referência a alguém ou algo. Para o fazer, insira o texto entre as TAGs <strong>[quote][/quote]</strong>. Quando verificar a mensagem verá que simplesmente surge, Citação: antes do texto.</li></ul>'
	),
	array(
		0 => 'Produzir código ou texto com uma largura fixa',
		1 => 'Se desejar inserir uma porção de código, ou de fato algo que requeira uma largura fixa, por exemplo, tipo de fonte Courier que englobe o texto entre as TAGs <strong>[code][/code]</strong>, como por exemplo<br /><br /><strong>[code]</strong>echo &quot;Isto é algum código&quot;;<strong>[/code]</strong><br /><br />O formato usado entre as TAGs <strong>[code][/code]</strong> é preservado quando posteriormente for visto. A sintaxe PHP com caracteres realçados podem ser habilitados utilizando-se das TAGs <strong>[code=php][/code]</strong> e é recomendado quando se é postado amostras de códigos PHP para uma melhor leitura.'
	),
	array(
		0 => '--',
		1 => 'Gerar listas'
	),
	array(
		0 => 'Criar uma lista sem ordem específica',
		1 => 'O BBCode aceita dois tipos de listas, sem ordem e ordenada. São basicamente o mesmo que em HTML. Uma lista sem ordem produz cada item de uma forma seq&uuml;encial, um a seguir ao outro,  precedendo-o um caractere constante. Para criar, basta usar as TAGs <strong>[list][/list]</strong> e colocar cada item entre elas, usando <strong>[*]</strong> antes de cada um. Por exemplo, para listar as suas cores favoritas, poderá escrever:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Vermelho<br /><strong>[*]</strong>Azul<br /><strong>[*]</strong>Amarelo<br /><strong>[/list]</strong><br /><br /> Isto irá aparecer como:<ul><li>Vermelho</li><li>Azul</li><li>Amarelo</li></ul>'
	),
	array(
		0 => 'Criar uma lista ordenada',
		1 => 'O segundo tipo de listas, a ordenada, proporciona-lhe controle do que vá aparecer antes de cada item. Para criar uma lista ordenada você usará <strong>[list=1][/list]</strong> de modo que será criada uma lista numérica ou, <strong>[list=a][/list]</strong>, para uma lista alfabética. Da mesma forma que para o tipo de lista não ordenada, os itens são precedidos de <strong>[*]</strong>. Por exemplo:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Ir às compras<br /><strong>[*]</strong>Comprar um computador novo<br /><strong>[*]</strong>Insultar o computador ao ficar bloqueado<br /><strong>[/list]</strong><br /><br />produzirá o seguinte:<ol style="list-style-type: arabic-numbers"><li>Ir às compras</li><li>Comprar um computador novo</li><li>Insultar o computador ao ficar bloqueado</li></ol> Enquanto que para uma lista alfabética você usará:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>A primeira resposta<br /><strong>[*]</strong>A segunda resposta<br /><strong>[*]</strong>A terceira resposta<br /><strong>[/list]</strong><br /><br />resultando em <ol style="list-style-type: lower-alpha"><li>A primeira resposta</li><li>A segunda resposta</li><li>A terceira resposta</li></ol>'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Criar atalhos'
	),
	array(
		0 => 'Criar um atalho para outra página/site',
		1 => 'O phpBB BBCode aceita um número variável de formas para criar URIs (Indicadores de Recursos Uniformes) melhor conhecidos como URLs.<ul><li>A primeira dessas formas é usando a TAG <strong>[url=][/url]</strong>, o que quer que escreva depois do sinal = faz com que o conteúdo dessa TAG aja como um URL. Por exemplo, para fazer uma ligação ou atalho à página phpBB.com usa-se:<br /><br /><strong>[url=http://www.phpbb.com/]</strong>Visite o phpBB!<strong>[/url]</strong><br /><br /> Isto irá resultar no atalho seguinte: <a href="http://www.phpbb.com/">Visite o phpBB!</a>. Veja que a página irá abrir na mesma janela ou em uma janela nova, dependendo das preferências de browser dos usuários.</li><li> Se pretende que o URL esteja à vista, faça simplesmente isto:<br /><br /><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong><br /><br />Tal resultará no seguinte atalho: <a href="http://www.phpbb.com/">http://www.phpbb.com/</a></li><li> Adicionalmente, o phpBB possui algo chamado <i>Atalhos Mágicos</i>, recurso que permite transformar automaticamente qualquer URL escrito com uma sintaxe correta em um atalho sem ser necessário especificar quaisquer TAGs ou mesmo o prefixo http://. Por exemplo, escrevendo www.phpbb.com na sua mensagem, automaticamente resultará em <a href="http://www.phpbb.com/">www.phpbb.com/</a> quando vir essa mensagem.</li><li> A mesma coisa se aplica aos endereços de e-mail, podendo especificar o endereço. Por exemplo:<br /><br /><strong>[email]</strong>ninguem@domain.adr<strong>[/email]</strong><br /><br />que resultará em <a href="mailto:ninguem@domain.adr">ninguem@domain.adr</a>, ou pode apenas escrever ninguem@domain.adr na sua mensagem que será automaticamente convertido em atalho quando a mensagem for guardada.</li></ul> Como em todos os códigos BBCode aqui apresentados pode-se misturar URLs com quaisquer outras TAGs. Como por exemplo, <strong>[img][/img]</strong> (ver o item seguinte), <strong>[b][/b]</strong>, etc. Em relação ao formato das TAGs está totalmente dependente de você assegurar a ordem correta de início e fechamento, por exemplo:<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/url][/img]</strong><br /><br /><span style="text-decoration: underline">não é</span> correto, o que pode conduzir à sua mensagem ser removida por algum moderador ou Administrador. Como tal tenha cuidado.'
	),
	array(
		0 => '--',
		1 => 'Mostrar imagens em mensagens'
	),
	array(
		0 => 'Adicionar uma imagem a uma mensagem',
		1 => 'O phpBB BBCode incorpora uma TAG para incluir imagens nas suas mensagens. Dois fatores muito importantes devem ser lembrados quando se usa estas TAGs: Primeiro, que a maioria dos usuários preferem não ver muitas imagens em mensagens; segundo, a imagem que pretende mostrar deverá existir na internet (por exemplo, não pode existir apenas no seu computador, a menos que tenha um servidor de páginas na web!). Para mostrar uma imagem você terá que envolver a URL da imagem com as TAGs <strong>[img][/img]</strong>. Por exemplo:<br /><br /><strong>[img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img]</strong><br /><br /> Como deve ter notado na seção da URL acima, é possível englobar uma imagem com a TAG <strong>[url][/url]</strong> se assim o desejar, ou seja, <br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img][/url]</strong><br /><br />irá produzir:<br /><br /><a href="http://www.google.com/"><img src="http://www.google.com/intl/en_ALL/images/logo.gif" alt="" /></a>'
	),
	array(
		0 => 'Adicionando anexos em uma mensagem',
		1 => 'Os anexos agora podem ser adicionados em qualquer parte de uma mensagem usando a nova TAG BBCode <strong>[attachment=][/attachment]</strong>, se a funcionalidade de anexos estiver habilitada pelo administrador do fórum e se você tiver as permissões apropriadas para criar anexos. Dentro da área de postagem há um caixa (respectivamente um botão) para se adicionar os anexos.'
	),
	array(
		0 => '--',
		1 => 'Outros assuntos'
	),
	array(
		0 => 'Posso criar minhas próprias TAGs?',
		1 => 'Se você é um administrador deste fórum e tem as próprias permissões, você pode somar BBCodes adicionais pela seção de Personalização de BBCodes.'
	)
);

?>
