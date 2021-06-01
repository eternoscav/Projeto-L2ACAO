<?php
/**
*
* help_faq [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.6
* @package language: Brazilian Portuguese
* @original version $Id: help_faq.php,v 1.42 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translator: phpBB Brasil - http://www.phpBBrasil.com.br/ - 2007-12-19 - 14:26
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
		1 => 'Questões sobre login e registro'
	),
	array(
		0 => 'Por que não consigo entrar no fórum?',
		1 => 'Você deve ser um usuário cadastrado para poder entrar. Foi expulso do fórum? Surgirá uma mensagem se tal aconteceu. Caso haja uma expulsão, você deve contatar o webmaster ou o administrador do fórum e perguntar o motivo caso não saiba a razão. Caso esteja registrado e não se encontra expulso e mesmo assim não consiga entrar, verifique novamente se o seu nome de usuário e senha estão corretos. Normalmente é este o problema. Caso não saiba mesmo o que se possa passar e não seja nenhuma das razões acima descritas, contate o administrador do fórum porque poderá haver alguma configuração errada no sistema.'
	),
	array(
		0 => 'Devo me registrar para utilizar este fórum?',
		1 => 'Poderá não ser necessário. Está inteiramente ao critério do administrador dos fóruns se é necessário o registro de modo que seja possível aos usuários enviarem suas mensagens. Contudo, o registro dá-lhe acesso a funções adicionais e possivelmente fóruns que não estão disponíveis a visitantes. Alguns exemplos são o uso e definição de imagens avatares, uso de Mensagens Privadas, enviar e receber e-mail entre usuários, participação em grupos de usuários, etc. São necessários apenas alguns segundos para se fazer o registro, portanto é recomendável que o faça.'
	),
	array(
		0 => 'Por que não entro automaticamente no fórum?',
		1 => 'Se não assinalar salvar o login antes de clicar em entrar, o sistema não irá fazê-lo entrar da próxima vez que visitar o fórum. Isto evita o uso abusivo da sua conta por outra pessoa. Para se manter ligado e não necessitar de escrever o seu nome de usuário e senha assinale essa caixa quando entrar. Tal não é, no entanto recomendável caso acesse os fóruns através de um computador compartilhado por outros usuários, ou seja, bibliotecas, lan-houses cyber-café, departamento em universidade, etc.'
	),
	array(
		0 => 'Como posso ocultar o meu nome de usuário da lista de membros online?',
		1 => 'Em seu Painel de Controle do Usuário, na aba “Preferências do Fórum”, há uma opção de <em>Esconder meu status de online</em>. Se assinalar <em>Sim</em>, apenas os administradores, moderadores e você poderão ver que você se encontra online. Você será contado como um usuário oculto.'
	),
	array(
		0 => 'Esqueci a minha senha, o que devo fazer?',
		1 => 'Você deverá requerer outra senha. Apesar da sua senha não poder ser recuperada pela Administração do fórum pode, no entanto ser feito como que se nunca a tivesse registrado, ou seja, como que se estivesse a entrar pela primeira vez. Para fazer isto, clique em entrar e de seguida em <em>esqueci-me da senha</em>, e se seguir as instruções voltará a entrar no fórum em questão de alguns momentos.'
	),
	array(
		0 => 'Registrei-me, mas não consigo entrar no fórum, o que devo fazer?',
		1 => 'Primeiro verifique se você escreveu o nome de usuário e senha corretamente. Caso se encontrem bem então uma entre duas coisas poderão acontecer - se o a função de COPPA se encontra ativa nos fóruns e você clicou em Tenho menos de 13 anos de idade durante o seu registro, terá que seguir as instruções que receba. Se isto não é o caso, será que o seu registro necessite ser ativado? Alguns administradores preferem que o registro dos seus novos usuários seja ativado através de um e-mail, antes que possa efetivamente entrar nos fóruns. Caso isso aconteça, quando se registrou foi informado se a ativação seria ou não necessária. Se recebeu um e-mail então siga as suas instruções. Se não recebeu o e-mail, será que o endereço de e-mail é válido? Uma das razões para a ativação ser feita é para reduzir o número abusos do sistema por usuários disfarçados ou passando pelo anonimato. Você tem a certeza que o endereço de e-mail que forneceu é válido e correto tente então contactar o administrador do fórum.'
	),
	array(
		0 => 'Registrei-me anteriormente, mas não consigo mais entrar no fórum. O que devo fazer?',
		1 => 'As razões mais prováveis são: que escreveu um nome de usuário ou senha incorretamente (verifique o e-mail que lhe foi enviado quando se registrou inicialmente), ou o administrador poderá ter removido o seu registro por algum motivo. é comum administradores removerem registros de usuários que nunca colocaram mensagens, de modo que se reduza o tamanho do banco de dados. Tente registrar-se novamente e envolver-se nos assuntos dos fóruns.'
	),
	array(
		0 => 'O que é o COPPA?',
		1 => 'COPPA, ou Child Online Privacy and Protection Act, de 1998 é uma lei nos EUA que requer dos pais ou responsáveis legais a assinatura, autorizando o menor de 13 anos que visite o site, se este tiver conteúdo monitorado e/ou não condizente com a idade da criança. No Brasil, não temos esta lei, por isso os administradores devem sempre cobrar as regras do fórum e produzir conteúdo que crianças possam acessar.'
	),
	array(
		0 => 'Por que não posso me registrar?',
		1 => 'é possível que a comunidade baniu seu IP ou está temporariamente com um mesmo usuário tentando se registrar ou seu nome está indisponível. Além disso, o administrador pode ter desativado o registro por momento, aguarda e tente mais tarde novamente.',
	),
	array(
		0 => 'O que exatamente faz a opção de excluir todos os cookies?',
		1 => 'Deleta todos os cookies que a comunidade armazenar em seu computador. Cookies estes que o mantém logado, que o identifica como usuário padrão e muitas outras utilidades.',
	),
	array(
		0 => '--',
		1 => 'Preferências e configuração de usuários'
	),
	array(
		0 => 'Como mudo a minha configuração?',
		1 => 'Toda a sua configuração (após registrar-se) é guardada no banco de dados. Para alterar clique em <em>Painel de Controle do Usuário</em> (normalmente no topo das páginas, dependendo do estilo de fóruns em uso). A partir daí pode alterar a sua configuração.'
	),
	array(
		0 => 'A data e hora estão erradas. O que devo fazer?',
		1 => 'As datas provavelmente estão corretas, contudo pode acontecer que você veja horas de um fuso horário diferente de onde você normalmente se encontra ou inicialmente programou. Se for esse o caso deve mudar no seu perfil a opção para o fuso horário de modo que se abranja a sua área, ou seja, Londres, Paris, Nova Iorque, Sidney, ou onde se encontre. Note que a mudança do fuso horário bem como a maior parte das opções de perfil só é permitida a usuários registrados. Se ainda não é o seu caso chegou uma boa altura e razão para fazê-lo!'
	),
	array(
		0 => 'Alterei o fuso horário, mas a data e hora continuam erradas, como devo proceder?',
		1 => 'Se tiver a certeza que o fuso horário que escolheu é o correto, mas a hora não é a real, é possível que seja devido a mudança horária para ajustamento de hora diurna e noturna (ou horário de verão/inverno). O phpBB não se encontra desenhado para efetuar essas mudanças automaticamente, como tal devem ser ajustadas manualmente pelos usuários.'
	),
	array(
		0 => 'O idioma da minha nacionalidade não se encontra na lista. O que devo fazer?',
		1 => 'A razão mais provável é o administrador não ter instalado esse idioma ou o phpBB ainda não foi traduzido para a mesma. Peça ao administrador que instale esse <em>pacote de idioma</em> e, caso não exista, você poderá criar uma nova tradução. Para mais informações, consulte a página oficial do Grupo phpBB (siga o atalho final desta página).'
	),
	array(
		0 => 'Como posso usar uma imagem junto do meu nome de usuário?',
		1 => 'Deve haver duas imagens na parte inferior de cada nome de usuário quando se vê as mensagens - a primeira representa o Rank em que o usuário se encontra, normalmente em forma de blocos ou estrelas indicando a quantidade de mensagens que o usuário tenha e respectiva designação no Rank, ou o estatuto desse usuário nos fóruns. Abaixo dessas poderá existir uma imagem maior conhecida como Avatar, que é normalmente única ou pertencente a cada usuário. Está ao cargo do administrador dos fóruns permitir ou não o uso de avatares bem como a forma em como os usuários os possam postar. Se você não consegue colocar o seu, então possivelmente é decisão do administrador dos fóruns tendo configurado o sistema para não o permitir. Pergunte-lhe a razão (temos a certeza que existe uma boa justificativa!).'
	),
	array(
		0 => 'Como posso alterar o meu Rank?',
		1 => 'De uma forma geral o usuário normal não pode alterar diretamente o seu próprio Rank (os Ranks aparecem por debaixo do nome de usuário em tópicos e no <em>Painel do Usuário</em> dependendo tema de fórum em uso). A maior parte dos Ranks em fóruns indicam o número de mensagens que você tenha colocado ou indicam certo tipo de usuários, ou seja, moderadores e administradores poderão ter um Rank especial. Não abuse dos fóruns colocando mensagens desnecessárias apenas para aumentar o seu nível de rank, pois o moderador ou administrador poderão tomar alguma atitude contra, caso verifiquem que haja abuso.'
	),
	array(
		0 => 'Quando clico no e-mail de um usuário, ele me pede para entrar? Por quê?',
		1 => 'Desculpe, mas somente pessoal registrado pode enviar e-mail para pessoas via o sistema interno da comunidade, se o Administrador ativar esta opção. Isto é para prevenir o envio por usuários anônimos.'
	),
	array(
		0 => '--',
		1 => 'Questões sobre postagens'
	),
	array(
		0 => 'Como posso colocar uma mensagem em um fórum?',
		1 => 'Fácil, clique no botão respectivo tanto no fórum como no tópico onde se encontre (dependendo do estilo de fórum em uso, normalmente os botões têm a designação de <em>nova mensagem, novo tópico</em> ou <em>responder</em>). Talvez seja necessário o seu registro nos fóruns para poder postar mensagens. Existe uma lista de ações que lhe são permitidas, haja registro ou não, na parte inferior do lado direito da página de cada fórum (enviar mensagens novas, votar em enquetes, etc.).'
	),
	array(
		0 => 'Como posso editar ou remover uma mensagem?',
		1 => 'A menos que seja um administrador de fórum você apenas pode editar ou remover as suas próprias mensagens. Pode editar uma mensagem (por vezes apenas por um período limitado após ser colocada) clicando no botão <em>editar</em> na parte superior dessa mensagem (dependendo do estilo de fórum em uso). Caso alguém tenha já respondido a essa mensagem você encontrará um pequeno texto ao fundo, mencionando que foi editada e eventualmente quantas vezes. Isto não aparece apenas caso essa mensagem não tenha ainda respostas. Também não aparecerá caso a alteração seja efetuada por algum administrador ou moderador (possivelmente eles deixarão uma mensagem dizendo o que foi alterado e o motivo). Note que usuários normais não podem remover uma mensagem após alguém já ter colocado uma resposta.'
	),
	array(
		0 => 'Como adiciono uma assinatura a uma mensagem?',
		1 => 'Para adicionar uma assinatura a uma mensagem deverá primeiro criar uma no respectivo local em seu perfil. Uma vez criada poderá instruir o fórum, também em <em>Painel do Usuário</em>, pata <em>Sempre anexar minha assinatura</em> às mensagens ou colocá-la apenas quando assim pretender, assinalando <em>Adicionar assinatura</em> na lista de opções abaixo da caixa de escrita de cada mensagem.'
	),
	array(
		0 => 'Como posso adicionar uma enquete?',
		1 => 'Criar uma enquete é fácil. Quando se posta um tópico novo (ou editar a primeira mensagem de um tópico, caso tenha permissão para tal) encontra na parte inferior à caixa principal da mensagem um painel com o título <em>Adicionar enquete</em> (se você não vê isto é porque provavelmente não possui permissão para criar enquetes ou o tópico não é de sua autoria). Deverá escrever um título para a enquete no local apropriado e de seguida colocar pelo menos duas <em>Opções de escolha</em> (para adicionar uma opção escreva o que pretende e clique no botão <em>Adicionar opção de escolha para a enquete</em>. Deverá também estipular um limite tempo para a enquete, sendo 0 ilimitado. Poderá acontecer haver um limite no número de opções de escolha, estando esse limite ao critério e configuração do administrador dos fóruns.'
	),
	array(
		0 => 'Por que eu não posso adicionar mais opções nas enquetes?',
		1 => 'O limite de opções de enquetes é fixado pelo administrador do fórum. Se você acha que precisa adicionar mais opções para a sua enquete do que o número permitido, contate o administrador do fórum.'
	),
	array(
		0 => 'Como posso editar ou remover uma enquete?',
		1 => 'Da mesma forma que as mensagens as enquetes apenas poderão ser editadas pelo seu autor, um moderador ou o administrador dos fóruns. Para editar uma enquete, clique na primeira mensagem do tópico (esta mensagem é a que tem a enquete associada ao tópico). Caso ninguém tenha submetido voto os seus autores podem remover a enquete ou editar as suas opções de escolha. Contudo, se os usuários já colocaram votos apenas moderadores e administradores podem editar ou remover essa enquete. Isto é para evitar com que sejam alteradas as opções de escolha em enquetes em curso.'
	),
	array(
		0 => 'Por que não consigo entrar em um fórum?',
		1 => 'O acesso a alguns fóruns poderá estar limitado apenas a determinados usuários ou grupos. Para ver, ler, enviar uma mensagem ou executar outra ação, você pode necessitar de permissões especiais. Contate um moderador ou administrador do fórum para lhe conceder acesso.'
	),
	array(
		0 => 'Por que não é possível anexar arquivos?',
		1 => 'Permissões de anexos são concedidas a determinados fóruns, grupos, ou por base de usuário. O administrador do fórum pode não ter permitido adicionar anexos em um fórum específico ao qual você está tentando enviar uma mensagem, ou talvez somente certos grupos podem enviar anexos. Contate o administrador do fórum se você não estiver seguro sobre o porquê você não pode enviar anexos.'
	),
	array(
		0 => 'Por que eu recebi um aviso?',
		1 => 'Cada comunidade tem suas regras regidas pelo seu Administrador principal. Se eles sentirem que você quebrou as regras, eles podem lhe advertir. Por favor, note que esta é uma decisão do Administrador da Comunidade por isso o Grupo phpBB nada tem em relação com esta advertência.'
	),
	array(
		0 => 'Como posso reportar mensagens ao moderador?',
		1 => 'Se o Administrador da Comunidade permitiu esta opção, vá até a mensagem a ser reportada e você deverá visualizar por um botão que tem a importância de relatar mensagens abusivas. Clicando neste botão, os moderadores e administradores receberão um aviso de tal mensagem.'
	),
	array(
		0 => 'Qual a função do botão "Salvar" em um tópico?',
		1 => 'Ele irá permitir que você salve mensagens para serem completadas e enviadas em uma data futura. Para reiniciar esta opção, vá até o Painel do Usuário e siga a auto-explicação que irá encontrar.'
	),
	array(
		0 => 'Por que minha mensagem precisa ser aprovada?',
		1 => 'O Administrador da Comunidade dividiu que no fórum onde você está postando precisa ser aprovada a mensagem antes dela ser concretizada. Também pode ser possível que o Administrador tenha colocado você em um grupo particular e especial, onde este grupo precisa de prévia autorização para concretizar a mensagem. Contate o administrador para futuras informações.'
	),
	array(
		0 => 'Como eu posso "subir" meu tópico?',
		1 => 'Ao clicar em "Subir Tópico" quando você o estiver visualizando, você pode "subir" o tópico para o topo da página do fórum que está visualizando. Entretanto, se você não ver esta opção, então ela estará indisponível. é possível subir seu tópico para o topo respondendo ao mesmo. Porém, esteja certo de seguir as regras da comunidade, para não reviver tópicos passados.'
	),
	array(
		0 => '--',
		1 => 'Formatando e Tipos de Tópicos'
	),
	array(
		0 => 'O que é BBCode?',
		1 => 'BBCode é uma implementação especial de HTML. Se pode ou não usar BBCode nos fóruns está ao critério do administrador. (caso lhe seja permitido pode controlar o seu uso em <em>Desativar BBCode nesta mensagem</em>). O BBCode por si mesmo é similar em estilo ao HTML, as TAGs são introduzidas entre colchetes [and] em vez de <and> e proporcionam um maior controle do que e como algo é apresentado. Para mais informações sobre BBCode, veja o guia respectivo, acessível na página de postagem de mensagens.'
	),
	array(
		0 => 'Posso usar HTML?',
		1 => 'Não. Nesta comunidade não é possível postar utilizando HTML, existem BBCodes para reproduzem as funções de HTML em sua comunidade.'
	),
	array(
		0 => 'O que são Smilies?',
		1 => 'Smilies ou Emoticons são pequenas representações gráficas que podem ser usadas para expressar algum sentimento usando poucos caracteres, ou seja, :) quer dizer feliz, :( quer dizer triste. Uma lista completa de emoções pode ser vista no formulário junto à caixa de cada mensagem. Tente evitar o uso excessivo dos smilies já que podem tornar uma mensagem ilegível podendo o administrador ou um moderador remove-los ou apagar a mensagem no seu todo'
	),
	array(
		0 => 'Posso inserir imagens?',
		1 => 'As imagens podem ser inseridas em suas mensagens, desde que o administrador do fórum tenha ativado este recurso. Ao postar uma mensagem ou tópico, você poderá apenas incluir imagens em suas postagens, sejam elas as permitidas pelo administrador. Basta utilizar as TAGs BBcode [img]http://local.da.imagem.com[/img]. Para mais detalhes, consulte o <em>Guia BBcode</em>, disponível no painel de postagens.'
	),
	array(
		0 => 'O que são anúncios globais?',
		1 => 'Anúncio Global contém informações importantes e você deverá ler o quanto antes possível. Anúncio Global irá aparecer no topo de todas as páginas de cada fórum e também em seu Painel de Usuário. Querendo ou não você pode postar um anúncio global, tudo irá depender das suas permissões os quais são adicionadas pelo administrador da comunidade sobre seu usuário.'
	),
	array(
		0 => 'O que são anúncios?',
		1 => 'Os Anúncios contêm normalmente informação importante e você deve lê-los logo que eles surjam. Os Anúncios são automaticamente colocados no topo de cada página do fórum em que são postados. Se você possa ou não fazer uso dessa função depende das permissões que lhe foram dadas, configuradas pelo administrador.'
	),
	array(
		0 => 'O que são tópicos fixos?',
		1 => 'Tópicos Fixos aparecem nos topos dos fóruns e apenas na primeira página. Da mesma forma que os Anúncios está ao critério do Administrador dos fóruns determinar que permissões sejam necessárias para postar tópicos fixos em cada fórum.'
	),
	array(
		0 => 'O que são tópicos bloqueados?',
		1 => 'Os tópicos Bloqueados são dessa forma colocados por um moderador, administrador ou alguém que tenha permissões para fazê-lo nos fóruns. Quando um tópico se encontra bloqueado, apenas moderadores, administradores ou alguém com certas permissões poderão colocar respostas. Qualquer enquete existente no tópico automaticamente é anulada. Os tópicos podem ser bloqueados por várias razões.'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => 'O que são ícones de tópicos?',
		1 => 'ícones de Tópicos são imagens cujo podem ser associados com mensagens para indicar conteúdo. O uso dos ícones de tópicos dependerá das permissões escolhidas pelo administrador.'
	),
	array(
		0 => '--',
		1 => 'Níveis de usuários e grupos'
	),
	array(
		0 => 'O que são os Administradores?',
		1 => 'Administradores são pessoas com o nível máximo de controle sobre todos os aspectos do fórum. Podem controlar toda a operação dos fóruns, incluindo criar, editar ou remover fóruns, determinar permissões, expulsar usuários, criar grupos de usuários ou moderadores, etc. Eles possuem igualmente todos os poderes de moderador em todos os fóruns existentes.'
	),
	array(
		0 => 'O que são os Moderadores?',
		1 => 'Moderadores são usuários (ou grupos de usuários) cujo trabalho é supervisionar diariamente o funcionamento dos fóruns que lhes estejam designados. Eles têm o poder de editar ou remover mensagens, bloquear, desbloquear, mover, remover e subdividir tópicos nos fóruns onde são moderadores. Geralmente os moderadores fiscalizam mensagens que possam ir para além do assunto em discussão ou o uso de material abusivo ou ofensivo.'
	),
	array(
		0 => 'O que são grupos de usuários?',
		1 => '<em>Grupos de usuários</em> são uma forma dos administradores dos fóruns agrupar usuários. Cada usuário pode pertencer a vários grupos (isto difere da maioria dos outros tipos de Quadros de Mensagens) e a cada grupo podem ser dados direitos de acesso individuais. Isto torna mais fácil aos administradores destinar vários usuários como moderadores de um determinado fórum ou dar-lhes acesso a um fórum privado, etc.'
	),
	array(
		0 => 'Onde estão os grupos de usuário e como eu posso entrar em um?',
		1 => 'Você pode ver todos os grupos de usuários pela aba “Grupos de Usuários” dentro de seu Painel de Controle do Usuário. Se você quiser entrar em um grupo, proceda clicando no botão apropriado. Porém, nem todos os grupos estão abertos a acesso. Alguns podem exigir uma aprovação para entrar, alguns podem ser fechados e outros podem até mesmo ter membros escondidos. Se o grupo estiver aberto, você pode entrar nele clicando no botão apropriado. Se um grupo exige uma aprovação para entrar, você pode pedir para entrar clicando no botão apropriado. O líder do grupo de usuário precisará aprovar seu pedido e pode perguntar por que você quer se juntar ao grupo. Por favor, não importune o líder do grupo se eles rejeitarem seu pedido; eles terão as razões deles.'
	),
	array(
		0 => 'Como posso ser moderador de um grupo?',
		1 => 'Os Grupos de usuários são inicialmente criados pelo administrador dos fóruns o qual também encarrega alguém de ser moderador. Se estiver interessado em criar um Grupo de usuários o seu primeiro ponto de contato será, portanto, o administrador dos Fóruns, ao qual deverá contatar com uma Mensagem Privada circunstanciada.'
	),
	array(
		0 => 'Por que alguns grupos aparecem em cores diferentes?',
		1 => 'é possível para o Administrador da Comunidade atribuir cores aos membros de um grupo para facilitar a identificação dos mesmos membros destes grupos coloridos.'
	),
	array(
		0 => 'O que é um "Grupo Padrão"?',
		1 => 'Se você é um membro de um grupo com mais de um ou dois membros, o seu padrão é usado para determinar qual cor de grupo e rank deverá ser mostrado para você como padrão. O Administrador da Comunidade pode garantir permissões para mudar seu grupo pelo próprio Painel do Usuário.'
	),
	array(
		0 => 'O que é o link "A Equipe"?',
		1 => 'Esta página mostra a você uma lista completa da administração do site, incluindo administradores e moderadores e outros detalhes como os fóruns moderados por eles.'
	),
	array(
		0 => '--',
		1 => 'Questões sobre Mensagens Privadas'
	),
	array(
		0 => 'Não consigo enviar mensagens privadas. Como fazer?',
		1 => 'Há três razões para que tal possa acontecer; você não está registrado nos fóruns e/ou não se encontra ligado, o Administrador terá desligado a possibilidade da troca de Mensagens Privadas para todos os fóruns ou impede-o a si por algum motivo de enviar mensagens. Se for este o último caso você deverá perguntar ao administrador qual a razão, caso não a saiba.'
	),
	array(
		0 => 'Recebo mensagens privadas indesejáveis. Como devo proceder?',
		1 => 'Você pode bloquear um usuário de lhe enviar mensagens privadas usando as regras de mensagem dentro de seu Painel de Controle do Usuário. Se você estiver recebendo mensagens privadas abusivas de um usuário em particular, informe a um administrador do fórum; eles têm o poder para impedir que um usuário envie mensagens privadas.'
	),
	array(
		0 => 'Recebi mensagens de e-mail de alguém neste fórum com assuntos irrelevantes ou abusivos. O que devo fazer?',
		1 => 'Embora o sistema de e-mail neste fórum possua funções de segurança que tentam detectar usuários que enviem esse tipo de mensagens lamentamos que tal tenha acontecido. Você deve reportar o acontecido ao administrador dos fóruns com uma cópia completa do e-mail recebido, sendo muito importante que inclua os cabeçalhos (nesses encontram-se os detalhes do usuário que enviou o e-mail). O administrador poderá então agir em conformidade.'
	),
	array(
		0 => '--',
		1 => 'Amigos e Ignorados'
	),
	array(
		0 => 'O que são as minhas listas de Amigos e Ignorados?',
		1 => 'Você pode usar estas listas para organizar outros membros do fórum. Membros adicionados a lista de amigos serão listados em seu Painel de Controle do Usuário para rápido acesso aos mesmos para ver as opções dos mesmos para enviar mensagens privadas e demais ações. Mensagens destes usuários também serão marcadas com destaque. Se você adicionar um usuário à sua lista de Ignorados, todas as mensagens que ele enviar ficarão ocultas por padrão.'
	),
	array(
		0 => 'Como posso adicionar / remover amigos e ignorados na minha lista?',
		1 => 'Você pode adicionar um usuário na sua lista por duas maneiras. Com o perfil de cada usuário, existe um link para fazer esta adição de um amigo ou ignorado. Alternativamente dentro do seu Painel de Controle do Usuário, você pode adicionar diretamente os usuários entrando com o nome de usuário do membro. Você poderá remover também utilizando da mesma página.'
	),
	array(
		0 => '--',
		1 => 'Pesquisando nos Fóruns'
	),
	array(
		0 => 'Como posso pesquisar no fórum?',
		1 => 'Entrando com um termo de pesquisa na caixa de texto de pesquisa localizado na página principal da comunidade, dentro do fórum ou do tópico. Pesquisas Avançadas podem ser acessadas clicando em "Busca", link que estará no topo da Comunidade ou na sua índex em geral. Como ter acesso a busca pode depender do estilo usado.'
	),
	array(
		0 => 'Por que minha busca retorna sem resultados?',
		1 => 'Sua busca provavelmente foi muito vaga e incluiu muitos termos comuns que não são indexados no phpBB3. Seja mais específico e utilize das opções disponíveis na Busca Avançada.'
	),
	array(
		0 => 'Por que minha busca retorna uma página em branco?',
		1 => 'Sua busca retornou muitos resultados para o servidor suportar. Utilize da Busca Avançada para fazer a filtragem maior do resultado para o servidor conseguir suportar uma busca tão grande e intensa.'
	),
	array(
		0 => 'Como pesquiso por membros?',
		1 => 'Vá até "Membros" e clique em "Encontrar um membro". Uma vez em Membros, siga os passos auto-explicativos associados.'
	),
	array(
		0 => 'Como posso achar minhas próprias mensagens?',
		1 => 'Suas próprias mensagens podem ser recuperadas entrando em Busca Avançada e pesquisando pelo seu usuário ou clicando em seu Painel de Controle ou via sua própria página do perfil. Para pesquisar pelos seus tópicos, a mesma ação será necessária.'
	),
	array(
		0 => '--',
		1 => 'Acompanhar Tópicos e Favoritos'
	),
	array(
		0 => 'Qual a diferença entre Acompanhar ou Adicionar um tópico aos Favoritos?',
		1 => 'A função de adicionar aos Favoritos no phpBB 3 é similar ao seu navegador. Você não é necessariamente alertado quando existe uma atualização no tópico, mas você pode mais tarde voltar a este tópico. Em contrapartida, com ao Acompanhar um tópico, você será alertado de qualquer modificação realizada no tópico que previamente foi escolhido por você para esta ação, seja por e-mail ou por mensagem privada.'
	),
	array(
		0 => 'Como eu acompanho um fórum ou tópico?',
		1 => 'Para acompanhar um fórum específico, uma vez que tenha entrado no fórum escolhido, você verá esta opção como link no rodapé do fórum escolhido. Esta ação irá inscrever seu usuário e e-mail automaticamente como de escolha, o mesmo se aplica a um tópico. Para se inscrever em um tópico, basta responder e deixar a opção de ser alertado quando existirem novas respostas, opção disponível no momento do cadastro da sua resposta.'
	),
	array(
		0 => 'Como removo meu acompanhamento?',
		1 => 'Para remover sua inscrição, você simplesmente deve dirigir-se ao Painel de Controle do Usuário e seguir os links em acompanhados, processo auto-explicativo e tranq&uuml;ilo.'
	),
	array(
		0 => '--',
		1 => 'Anexos'
	),
	array(
		0 => 'Que tipo de anexo é permitido nesta comunidade?',
		1 => 'Cada Administrador de Comunidade pode permitir ou proibir certos tipos de anexos. Se você está inseguro sobre quais são permitidos ou não, entre em contato com o administrador desta comunidade para maiores informações.'
	),
	array(
		0 => 'Como encontro todos os meus anexos?',
		1 => 'Para encontrar todos seus anexos que você pessoalmente enviou os, vá até o Painel do Usuário, e siga as instruções que se encontram em anexos.'
	),
	array(
		0 => '--',
		1 => 'Questões em relação ao sistema phpBB3'
	),
	array(
		0 => 'Quem escreveu o phpBB?',
		1 => 'Este software (na sua versão padrão, não modificada) é produzido, publicado e com direitos reservados por phpBB Group. Está disponível sob a licença <em>GNU General Public Licence</em> e pode ser distribuído gratuitamente. Verifique o atalho para mais detalhes.'
	),
	array(
		0 => 'Por que não existem determinadas funções?',
		1 => 'Este software foi escrito e licenciado por phpBB Group. Se acreditar que alguma função pode ser adicionada, visite a nossa página oficial em phpbb.com e veja o que o Grupo phpBB pode dizer sobre o assunto. Por favor, não coloque mensagens com pedido de funções no fórum em phpbb.com, o Grupo usa a sourceforge para resolver situações relacionadas com funções novas. Por favor, leia cuidadosamente esse fórum para ver se alguma posição já foi tomada por nós, para a função em questão, seguindo então o procedimento lá mencionado.'
	),
	array(
        0 => 'Quem traduziu este phpBB para o português?',
	    1 => 'Este fórum phpBB foi traduzido pelo <a href="http://www.phpbbrasil.com.br/" target="_blank">Suporte phpBB Brasil</a>, sendo a tradução distribuída gratuitamente no atalho anteriormente citado. Para maiores detalhes faça-nos uma visita, teremos o prazer em recebê-lo!'
	),
	array(
		0 => 'Quem devo contatar sobre questões abusivas e/ou legais relacionadas com este fórum?',
		1 => 'Você deverá contatar o administrador dos fóruns. Se não conseguir saber quem seja, contate então um dos moderadores perguntando a quem deva expor o assunto. No caso de mesmo assim não obter resposta deve contatar o dono do domínio ou, caso o fórum se encontre a funcionar em um serviço grátis (por exemplo, yahoo, free.fr, f2s.com, etc.), a gerência ou o departamento de abusos desse serviço. Por favor, note que phpBB Group não possui absolutamente nenhum controle e não pode de qualquer maneira ser responsável sobre quando, onde e por quem este fórum é usado. Não há razão em contatar o phpBB Group em relação a qualquer questão legal (interrupção e desistência, de responsabilidade, comentário difamatório, etc.) não diretamente relacionado com o <em>site</em> phpbb.com ou o software discreto do phpBB por si mesmo. Caso envie algum e-mail a phpBB Group sobre o uso de terceiros deste software, poderá receber uma resposta concisa ou não receber resposta alguma.'
	)
);

?>
