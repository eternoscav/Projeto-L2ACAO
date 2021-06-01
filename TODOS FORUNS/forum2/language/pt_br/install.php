<?php
/**
*
* install [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.2
* @package language: Brazilian Portuguese
* @original version $Id: install.php,v 1.131 2007/11/18 11:48:18 acydburn Exp $
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translator: phpBB Brasil - http://www.phpBBrasil.com.br/ - 2007-12-19 - 14:28
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
	'ADMIN_CONFIG'				=> 'Configuração do Administrador',
	'ADMIN_PASSWORD'			=> 'Senha do Administrador',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Confirme a Senha do Administrador',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Por favor, digite uma senha que tenha entre 6 e 30 caracteres.',
	'ADMIN_TEST'				=> 'Checar configurações do administrador',
	'ADMIN_USERNAME'			=> 'Nome de Usuário do Administrador',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Por favor, digite um nome de usuário que tenha entre 3 e 20 caracteres.',
	'APP_MAGICK'				=> 'Suporte a ImageMagick [ Anexos ]',
	'AUTHOR_NOTES'				=> 'Notas do autor<br />Â» %s',
	'AVAILABLE'					=> 'Disponível',
	'AVAILABLE_CONVERTORS'		=> 'Conversores disponíveis',

	'BEGIN_CONVERT'				    => 'Começar Conversão',
	'BLANK_PREFIX_FOUND'		    => 'Uma varredura em seu banco de dados mostrou que há uma instalação válida sem prefixo na tabela.',
	'BOARD_NOT_INSTALLED'			=> 'Nenhuma instalação encontrada',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'O Conversor Unificado de Fóruns do phpBB exige uma instalação padrão do phpBB3 para funcionar, por favor <a href="%s">proceda primeiro instalando o phpBB3</a>.',

	'CATEGORY'					=> 'Categoria',
	'CACHE_STORE'				=> 'Tipo de cache',
	'CACHE_STORE_EXPLAIN'		=> 'O local onde os dados serão guardados, arquivos de sistema são recomendados.',
	'CAT_CONVERT'				=> 'Converter',
	'CAT_INSTALL'				=> 'Instalar',
	'CAT_OVERVIEW'				=> 'Avaliação',
	'CAT_UPDATE'				=> 'Atualizar',
	'CHANGE'					=> 'Alterar',
	'CHECK_TABLE_PREFIX'		=> 'Por favor, verifique o prefixo de sua tabela e tente novamente.',
	'CLEAN_VERIFY'				=> 'Limpando e verificando a estrutura final',
	'CLEANING_USERNAMES'		=> 'Limpando nomes de usuário',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> é o nome de usuário a ser limpo para:',
	'COLLIDING_USERNAMES_FOUND'	=> 'Foram encontrados nomes de usuários coincidentes na sua antiga comunidade. Para completar a conversão, por favor, apague ou renomeie estes usuários de forma que lá tenha apenas um usuário em seu antigo fórum para cada nome de usuário limpo.',
	'COLLIDING_USER'			=> 'Â» id de usuário: <strong>%d</strong> nome de usuário: <strong>%s</strong> (%d mensagens)',
	'CONFIG_CONVERT'			=> 'Convertendo a configuração',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'Não foi possível gravar o arquivo de configuração. Métodos alternativos para este arquivo ser criado são apresentados abaixo.',
	'CONFIG_FILE_WRITTEN'		=> 'O arquivo de configuração foi gravado. Você pode passar agora para o próximo passo da instalação.',
	'CONFIG_PHPBB_EMPTY'		=> 'A variável de configuração do phpBB3 para â€œ%sâ€ está vazia.',
	'CONFIG_RETRY'				=> 'Voltar',
	'CONTACT_EMAIL_CONFIRM'		=> 'Confirmar e-mail de contato',
	'CONTINUE_CONVERT'			=> 'Continuar conversão',
	'CONTINUE_CONVERT_BODY'		=> 'Uma tentativa de conversão anterior foi determinada. Você pode agora escolher entre começar uma conversão nova ou continuar a conversão.',
	'CONTINUE_LAST'				=> 'Continuar com as últimas declarações',
	'CONTINUE_OLD_CONVERSION'	=> 'Continuar conversão iniciada anteriormente',
	'CONVERT'					=> 'Converter',
	'CONVERT_COMPLETE'			=> 'Conversão completada',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Você converteu com sucesso o seu fórum para phpBB3. Você pode agora entrar e <a href="../">acessar seu fórum</a>. Por favor, assegure-se que as configurações foram transferidas corretamente antes de habilitar seu fórum ao apagar o diretório install. E lembrando que o suporte para phpBB está disponível em <a href="http://www.phpbbrasil.com.br/">phpBB no Brasil</a>, também em <a href="http://www.phpbb.com/support/documentation/3.0/">Guia do Usuário (Inglês)</a> e em <a href="http://www.phpbb.com/community/viewforum.php?f=46">fóruns de suporte</a>',
	'CONVERT_INTRO'				=> 'Boas Vindas ao Conversor Unificado do phpBB3',
	'CONVERT_INTRO_BODY'		=> 'Aqui, você poderá converter e importar seu fórum para o phpBB. A lista abaixo mostra todos os módulos de conversão atualmente disponíveis. Se o seu fórum não esta na lista, por favor, vá ao website e verifique se o módulo de conversão dele já está disponível.',
	'CONVERT_NEW_CONVERSION'	=> 'Nova conversão',
	'CONVERT_NOT_EXIST'			=> 'O conversor especificado não existe',
	'CONVERT_OPTIONS'			=> 'Opções',
	'CONVERT_SETTINGS_VERIFIED'	=> 'A informação que você entrou foi verificada. Para começar o processo de Conversão pressione o botão abaixo',
	'CONV_ERR_FATAL'			=> 'Erro fatal na conversão',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'O upload de FTP para anexos está habilitado no fórum antigo. Por favor, desabilite a opção de upload de FTP e tenha certeza que um diretório de upload válido esteja especificado, então copie todos os arquivos de anexos para este novo diretório acessível. Uma vez que você fez isto, reinicie o conversor.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Não há nenhuma informação de configuração disponível para a conversão.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Não foi possível obter informações de acesso ao fórum.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Não foi possível obter as categorias.',
	'CONV_ERROR_GET_CONFIG'				=> 'Não foi possível restaurar sua configuração do fórum.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Não foi possível acessar/ler â€œ%sâ€.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Não foi possível obter informações de autenticação de grupo.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Encontrada inconsistência na tabela de grupos em add_bots() - você precisa adicionar todos os grupos especiais que você tiver manualmente.',
	'CONV_ERROR_INSERT_BOT'				=> 'Não foi possível inserir o bot na tabela users.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Não foi possível inserir o bot na tabela bots.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Não foi possível inserir o usuário na tabela user_group.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Mensagem de parser error',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Nota ao desenvolvedor: você tem que especificar $convertor[\'avatar_path\'] para usar %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'O caminho (path) para a raiz do fórum não foi especificada.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Nota ao desenvolvedor: você tem que especificar $convertor[\'avatar_gallery_path\'] para usar %s.',
	'CONV_ERROR_NO_GROUP'				=> 'O grupo â€œ%1$sâ€ não pôde ser encontrado em %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Nota ao desenvolvedor: você tem que especificar $convertor[\'ranks_path\'] para usar %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Nota ao desenvolvedor: você tem que especificar $convertor[\'smilies_path\'] para usar %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Nota ao desenvolvedor: você tem que especificar $convertor[\'upload_path\'] para usar %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Não foi possível inserir/atualizar a configuração de permissão.',
	'CONV_ERROR_PM_COUNT'				=> 'Não foi possível selecionar uma pasta de conta de MP.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Não foi possível inserir um novo fórum que substitui a categoria antiga.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Não foi possível inserir um novo fórum que substitui o antigo fórum.',
	'CONV_ERROR_USER_ACCESS'			=> 'Não foi possível obter informações de autenticação do usuário.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Erro no grupo â€œ%1$sâ€ definido em %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Esta página coleta os dados necessários para se ter acesso à fonte do seu fórum. Adicione os detalhes do banco de dados de seu fórum anterior; o conversor não mudará nada no banco de dados selecionado abaixo. A fonte do fórum deveria ser desabilitada para permitir uma conversão consistente.',
	'CONV_SAVED_MESSAGES'				=> 'Mensagens salvas',

	'COULD_NOT_COPY'			=> 'Não foi possível copiar o arquivo <strong>%1$s</strong> para <strong>%2$s</strong><br /><br />Por favor, verifique se o diretório existe e pode ser alterado pelo sistema',
	'COULD_NOT_FIND_PATH'		=> 'Não foi possível achar um patch para o fórum. Por favor, cheque as configurações e tente novamente.<br />Â» %s foi especificado como o caminho raiz.',

	'DBMS'						=> 'Tipo de banco de dados',
	'DB_CONFIG'					=> 'Configuração do Banco de Dados',
	'DB_CONNECTION'				=> 'Conexão de Banco de Dados',
	'DB_ERR_INSERT'				=> 'Erro enquanto processava a <code>INSERT</code> query',
	'DB_ERR_LAST'				=> 'Erro enquanto processava a <var>query_last</var>',
	'DB_ERR_QUERY_FIRST'		=> 'Erro enquanto executava <var>query_first</var>',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Erro enquanto executava <var>query_first</var>, %s (â€œ%sâ€).',
	'DB_ERR_SELECT'				=> 'Erro enquanto processava <code>SELECT</code> query.',
	'DB_HOST'					=> 'Nome do Servidor do Banco de Dados ou DSN',
	'DB_HOST_EXPLAIN'			=> 'DSN para nome de fonte de Dados somente é necessário para instalações em ODBC.',
	'DB_NAME'					=> 'Nome do Banco de Dados',
	'DB_PASSWORD'				=> 'Senha do Banco de Dados',
	'DB_PORT'					=> 'Porta do Servidor do Banco de Dados',
	'DB_PORT_EXPLAIN'			=> 'Deixe em branco caso você não saiba se o Servidor de Banco de Dados tem uma porta especifica ou não.',
	'DB_UPDATE_NOT_SUPPORTED'	=> 'Desculpe, mas este script não permite atualizar de versões do phpBB menor que “%1$s”. A versão que voce tem instalada atualmente é “%2$s”. Favor atualizar para uma próxima versão antes de rodar o script de atualização. Ajuda pode ser encontrada nos suportes brasileiros.',
	'DB_USERNAME'				=> 'Nome de Usuário do Banco de Dados',
	'DB_TEST'					=> 'Testar conexão',
	'DEFAULT_LANG'				=> 'Linguagem padrão do fórum',
	'DEFAULT_PREFIX_IS'			=> 'O conversor não pôde encontrar as tabelas com o prefixo especificado. Por favor, tenha certeza que você tem as antigas tabelas dentro do mesmo banco de dados da sua instalação do phpBB 3.0.x. O prefixo padrão da tabela para %1$s é <strong>%2$s</strong>',
	'DEV_NO_TEST_FILE'			=> 'Nenhum valor foi especificado para a variável test_file no conversor. Se você for um usuário deste conversor, você não deveria estar vendo este erro, por favor, informe esta mensagem ao autor de conversor. Se você for o autor do conversor, você tem que especificar o nome de um arquivo que exista na raiz do fórum para permitir que o path possa ser verificado.',
	'DIRECTORIES_AND_FILES'		=> 'Configuração de arquivo e diretório',
	'DISABLE_KEYS'				=> 'Desativando chaves',
	'DLL_FIREBIRD'				=> 'Firebird',
	'DLL_FTP'					=> 'Suporte a FTP Remoto [ Instalação ]',
	'DLL_GD'					=> 'Suporte a GD gráfico [ Confirmação Visual ]',
	'DLL_MBSTRING'				=> 'Suporte a caractere Multi-byte',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ via ODBC',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL with MySQLi Extension',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL 7.x/8.x',
	'DLL_SQLITE'				=> 'SQLite',
	'DLL_XML'					=> 'Suporte a XML [ Jabber ]',
	'DLL_ZLIB'					=> 'Suporte a compressão zlib [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'Baixar config',
	'DL_CONFIG_EXPLAIN'			=> 'Você pode baixar o arquivo config.php completo para o seu próprio PC. Você precisará então enviar manualmente o arquivo, substituindo qualquer config.php existente no diretório raiz de seu phpBB 3.0. Por favor, lembre-se de enviar o arquivo em formato ASCII (veja a documentação do seu software de FTP se você estiver em dúvida de como conseguir fazer isso). Quando você tiver enviado o arquivo config.php, clique â€œAquiâ€ para ir para à próxima etapa.',
	'DL_DOWNLOAD'				=> 'Download',
	'DONE'						=> 'Pronto',

	'ENABLE_KEYS'				=> 'Re-habilitando chaves. Isto pode demorar um tempo',

	'FILES_OPTIONAL'			=> 'Arquivos e diretórios adicionais',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>Opcional</strong> - As configurações destes arquivos, diretórios e permissões não são obrigatórias. O sistema de instalação tentará usar várias técnicas para criá-los se eles não existirem ou não puderem ser gravados. Porém, a presença destes fará com que a instalação fique mais rápida.',
	'FILES_REQUIRED'			=> 'Arquivos e diretórios',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Obrigatório</strong> - Para funcionar corretamente, o phpBB precisa poder ter acesso ou estar apto a gravar certos arquivos ou diretórios. Se você vir &quot;Não Encontrado&quot; você precisa criar este arquivo relevante ou diretório. Se você vir &quot;Gravação Não Permitida&quot; você precisa mudar as permissões no arquivo ou diretório para permitir que o phpBB o grave.',
	'FILLING_TABLE'				=> 'Ocupar tabela <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Ocupar tabelas',
	'FIREBIRD_DBMS_UPDATE_REQUIRED'		=> 'phpBB não suporta mais Firebird/Interbase menor que 2.1. Favor atualizar sua versão do Firebird para no mínimo 2.1.0 antes de continuar com a atualização.',
	'FINAL_STEP'				=> 'Processar passo final',
	'FORUM_ADDRESS'				=> 'Endereço do fórum',
	'FORUM_ADDRESS_EXPLAIN'		=> 'Esta é a URL de seu fórum anterior, por exemplo, <samp>http://www.example.com/phpBB2/</samp>. Se um endereço é digitado aqui e não estiver vazio, todo exemplo deste endereço será substituído por seu novo endereço de fórum dentro de mensagens, mensagens privadas e assinaturas.',
	'FORUM_PATH'				=> 'Diretório do fórum',
	'FORUM_PATH_EXPLAIN'		=> 'Este é o caminho <strong>relativo</strong> em disco para seu fórum anterior da <strong>raiz desta instalação do phpBB3</strong>',
	'FOUND'						=> 'Encontrado',
	'FTP_CONFIG'				=> 'Transferir config.php por FTP',
	'FTP_CONFIG_EXPLAIN'		=> 'phpBB detectou a presença de FTP neste servidor. Você pode tentar instalar seu config.php desta forma se você desejar. Você precisará suprir a informação listada abaixo. Lembre-se do seu nome de usuário e senha do seu servidor! (pergunte a seu site por detalhes se você tiver dúvidas sobre isto)',
	'FTP_PATH'					=> 'Diretório do FTP',
	'FTP_PATH_EXPLAIN'			=> 'Este é o path da raiz do seu diretório principal do phpBB, e.g. htdocs/phpBB3/',
	'FTP_UPLOAD'				=> 'Upload',

	'GPL'						=> 'General Public License',

	'INITIAL_CONFIG'			=> 'Configuração básica',
	'INITIAL_CONFIG_EXPLAIN'	=> 'Agora que a instalação determinou que seu servidor suporta o phpBB, você precisa adicionar algumas informações específicas. Se você não sabe como conectar ao seu banco de dados fale com seu provedor de hospedagem (em primeiro lugar) ou use os fóruns de suporte ao phpBB. Quando for adicionar os dados, por favor, assegure-se que você conferiu completamente antes de continuar.',
	'INSTALL_CONGRATS'			=> 'Parabéns',
	'INSTALL_CONGRATS_EXPLAIN'	=> '
        <p>Você instalou o phpBB %1$s com sucesso. A partir daqui, você tem duas opções sobre o que fazer com o seu phpBB3 recentemente instalado:</p>
        <h2>Converter um fórum existente em phpBB3</h2>
        <p>O Conversor Unificado de Fóruns do phpBB suporta a conversão de fóruns phpBB 2.0.x e outros sistemas de fóruns para phpBB3. Se você tem um fórum existente que você deseja converter, por favor, <a href="%2$s">proceda para o conversor</a>.</p>
        <h2>Ir para o seu novo fórum phpBB3!</h2>
        <p>Clicando no botão abaixo, ele o levará ao seu Painel de Controle da Administração (ACP). Gaste algum tempo para examinar as opções disponíveis para você. Lembre-se que existe suporte on-line disponível em <a href="http://www.phpbb.com/">phpBB no Brasil</a>, no <a href="http://www.phpbb.com/support/documentation/3.0/">Guia do Usuário (Inglês)</a> e também nos <a href="http://www.phpbb.com/phpBB/viewforum.php?f=46">Fóruns de suporte</a>, veja o <a href="%3$s">LEIA-ME</a> para maiores informações.</p><p><strong>Agora delete, mova ou renomeie o diretório install antes de você acessar o seu fórum. Se este diretório ainda está presente, só o Painel de Controle da Administração (ACP) será acessível.</strong></p>',
	'INSTALL_INTRO'				=> 'Bem Vindo à Instalação',

	'INSTALL_INTRO_BODY'		=> 'Com esta opção, é possível instalar o phpBB3 no seu servidor.</p><p>Para prosseguir, você precisará de seus dados do banco de dados. Se você não sabe os seus dados do banco de dados, por favor, contate o seu servidor e lhes peça. Você não poderá continuar sem adicionar os seus dados. Você precisa:</p>

	<ul>
	    <li>Tipo de Banco de Dados - o banco de dados que você estará usando.</li>
     	<li>Nome do servidor do Banco de Dados ou DNS - o endereço do servidor do banco de dados.</li>
        <li>A porta do Banco de Dados - a porta do servidor de banco de dados (na maioria das vezes isto não é necessário).</li>
        <li>Nome do Banco de Dados - o nome do banco de dados no servidor.</li>
        <li>Nome de usuário e senha do Banco de Dados - os dados de login para ter acesso ao banco de dados</li>
    </ul>
    
	<p><strong>Nota:</strong> se você está instalando usando SQLite, você deve informar o caminho completo para seu banco de dados no servidor DNS e deixar os campos de usuário e senha em branco. Por razões de segurança, você precisará estar seguro de que não haja maneiras de acessar este banco de dados diretamente pelo endereço da internet.</p>

	<p>phpBB3 suporta os seguintes banco de dados:</p>
	<ul>
		<li>MySQL 3.23 ou superior (MySQLi suportado)</li>
		<li>PostgreSQL 7.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>Firebird 2.1+</li>
		<li>MS SQL Server 2000 ou superior (direto ou via ODBC)</li>
		<li>Oracle</li>
	</ul>

	<p>Somente os bancos de dados que seu servidor suporta serão apresentados.',
	'INSTALL_INTRO_NEXT'		=> 'Para começar a instalação, por favor, pressione o botão abaixo.',
	'INSTALL_LOGIN'				=> 'Entrar',
	'INSTALL_NEXT'				=> 'Próximo',
	'INSTALL_NEXT_FAIL'			=> 'Alguns erros acorreram nos testes, corrija estes erros antes de ir para o próximo passo. Erros podem resultar em uma instalação parcial.',
	'INSTALL_NEXT_PASS'			=> 'Todos os testes básicos foram feitos, você pode continuar com a instalação agora. Se você mudou alguma permissão ou algum arquivo você pode refazer o teste agora se desejar.',
	'INSTALL_PANEL'				=> 'Painel de Instalação',
	'INSTALL_SEND_CONFIG'		=> 'Infelizmente o phpBB não pôde editar as configurações em config.php. Isto pode ser por que o arquivo não existe ou porque não pode ser editado. Um número de opções serão listadas abaixo para você poder completar a instalação do config.php.',
	'INSTALL_START'				=> 'Começar a Instalação',
	'INSTALL_TEST'				=> 'Testar novamente',
	'INST_ERR'					=> 'Erro da Instalação',
	'INST_ERR_DB_CONNECT'		=> 'Não foi possível conectar-se ao Banco de Dados, veja o motivo na mensagem abaixo.',
	'INST_ERR_DB_FORUM_PATH'	=> 'Os arquivos do Banco de Dados estão facilmente acessíveis. Você deveria colocar estes arquivos em um lugar não acessível.',
	'INST_ERR_DB_NO_ERROR'		=> 'Sem mensagem de erro',
	'INST_ERR_DB_NO_MYSQLI'		=> 'A versão de MySQL instalada nesta máquina é incompatível com as opções de â€œMySQL e MySQLi Extensionâ€ que você selecionou. Por favor, tente outra opção ao invés de â€œMySQLâ€.',
	'INST_ERR_DB_NO_SQLITE'		=> 'A versão de SQLite extension que você tem instalada é muito antiga, deve ser atualizada a pelo menos na versão 2.8.2.',
	'INST_ERR_DB_NO_ORACLE'		=> 'A versão do Oracle instalada nesta máquina lhe exige que você fixe o parâmetro de <var>NLS_CHARACTERSET</var> para <var>UTF8</var>. Atualize sua instalação para 9.2+ ou mude o parâmetro.',
	'INST_ERR_DB_NO_FIREBIRD'	=> 'A versão do Firebird instalada nesta máquina é anterior a 2.1+, por favor, atualize para uma versão mais nova.',
	'INST_ERR_DB_NO_FIREBIRD_PS'=> 'O banco de dados que você selecionou para o Firebird tem um tamanho de página menor que 8192, deve ter pelo menos 8192.',
	'INST_ERR_DB_NO_POSTGRES'	=> 'O banco de dados que você selecionou não foi criado na codificação <var>UNICODE</var> ou <var>UTF8</var>. Tente instalar com um banco de dados com codificação <var>UNICODE</var> ou <var>UTF8</var>',
	'INST_ERR_DB_NO_NAME'		=> 'Não foi especificado o Nome do Banco de Dados',
	'INST_ERR_EMAIL_INVALID'	=> 'O endereço de e-mail especificado é inválido',
	'INST_ERR_EMAIL_MISMATCH'	=> 'Os emails que você digitou não confirmam.',
	'INST_ERR_FATAL'			=> 'Erro fatal na instalação',
	'INST_ERR_FATAL_DB'			=> 'Um erro fatal e irrecuperável aconteceu no banco de dados. Isto pode ter ocorrido porque o usuário especificado não tem direitos apropriados para usar os comandos <code>CREATE TABLES</code> ou <code>INSERT</code> no banco de dados, etc. Mais informações podem ser conseguidas abaixo. Por favor, contate em primeiro lugar seu provedor de hospedagem ou os fóruns de suporte ao phpBB para uma ajuda adicional.',
	'INST_ERR_FTP_PATH'			=> 'Não pode ser mudado para o diretório especificados, por favor, cheque o caminho.',
	'INST_ERR_FTP_LOGIN'		=> 'Não pôde conectar ao servidor FTP, cheque seu nome de usuário e sua senha',
	'INST_ERR_MISSING_DATA'		=> 'Você deve preencher todos os campos.',
	'INST_ERR_NO_DB'			=> 'Não pode carregar o modulo PHP do Banco de Dados selecionado',
	'INST_ERR_PASSWORD_MISMATCH'    => 'As senhas especificadas não combinam.',
	'INST_ERR_PASSWORD_TOO_LONG'    => 'A senha especificada é muito grande. O máximo permitido é 30 caracteres.',
	'INST_ERR_PASSWORD_TOO_SHORT'   => 'A senha especificada é muito pequena. O mínimo permitido é 6 caracteres.',
	'INST_ERR_PREFIX'			=> 'Tabelas com o prefixo especificado já existem, por favor, escolha outro prefixo.',
	'INST_ERR_PREFIX_INVALID'	=> 'O prefixo da tabela que você especificou é inválido para seu banco de dados. Por favor, tente outro, removendo caracteres como o hífen',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'O prefixo especificado para a tabela é muito grande. O máximo permitido é %d caracteres.',
	'INST_ERR_USER_TOO_LONG'	=> 'O nome de usuário especificado é muito grande. O máximo permitido é 20 caracteres.',
	'INST_ERR_USER_TOO_SHORT'	=> 'O nome de usuário especificado é muito pequeno. O mínimo permitido é 3 caracteres.',
	'INVALID_PRIMARY_KEY'		=> 'Chave primária inválida : %s',

	'LONG_SCRIPT_EXECUTION'		=> 'Por favor, note que isto pode demorar um tempo... Por favor, não pare o processo.',

	// mbstring
	'MBSTRING_CHECK'						=> 'checando extensão <samp>mbstring</samp>',
	'MBSTRING_CHECK_EXPLAIN'				=> '<samp>mbstring</samp> é uma extensão PHP que provê funções string multibyte. Certas características de mbstring não são compatíveis com o phpBB e devem ser desabilitadas.',
	'MBSTRING_FUNC_OVERLOAD'				=> 'Função sobrecarregada',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> '<var>mbstring.func_overload</var> deve ser fixado em 0 ou 4',
	'MBSTRING_ENCODING_TRANSLATION'			=> 'Codificação de caracter transparente',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> deve ser fixado em 0',
	'MBSTRING_HTTP_INPUT'					=> 'Entrada HTTP de conversão de caracteres',
	'MBSTRING_HTTP_INPUT_EXPLAIN'			=> '<var>mbstring.http_input</var> deve ser fixado como <samp>omitir</samp>',
	'MBSTRING_HTTP_OUTPUT'					=> 'Saída HTTP de conversão de caracteres',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> deve ser fixado como <samp>omitir</samp>',

	'MAKE_FOLDER_WRITABLE'		=> 'Por favor, tenha certeza que esta pasta existe e pode ser editada pelo sistema e tente novamente:<br />Â»<strong>%s</strong>',
	'MAKE_FOLDERS_WRITABLE'		=> 'Por favor, tenha certeza que estas pastas existem e podem ser editadas pelo sistema e tente novamente:<br />Â»<strong>%s</strong>',
	
   // Mudanças 3.0.5
  'MYSQL_SCHEMA_UPDATE_REQUIRED'	=> 'Seu banco de dados MySQL está desatualizado. O phpBB detectou uma versão do MySQL 3.x/4.x, mas o servidor roda MySQL %2$s.<br /><strong>Antes de proceder com a atualização, você precisa atualizar o banco.</strong><br /><br />Por favor, vá até o <a href="http://www.phpbb.com/kb/article/doesnt-have-a-default-value-errors/">artigo sobre como atualizar o MySQL</a>. Se você encontrar problemas, basta pedir ajuda no <a href="http://www.phpbbrasil.com.br/phpBB/index.php">nosso suporte</a>.',
   // Mudanças 3.0.5
   
	'NAMING_CONFLICT'			=> 'Conflito nos nomes: %s e %s são ambos aliases<br /><br />%s',
	'NEXT_STEP'					=> 'Prosseguir para o próximo passo',
	'NOT_FOUND'					=> 'Não encontrado',
	'NOT_UNDERSTAND'			=> 'Não foi possível entender %s #%d, tabela %s (â€œ%sâ€)',
	'NO_CONVERTORS'				=> 'Nenhum conversor disponível para uso',
	'NO_CONVERT_SPECIFIED'		=> 'Nenhum conversor especificado',
	'NO_LOCATION'				=> 'Não foi possível determinar a localização. Se você sabe que o Imagemagick está instalado, você pode especificar a localização depois no seu Painel de Controle da Administração',
	'NO_TABLES_FOUND'			=> 'Nenhuma tabela encontrada.',

	'OVERVIEW_BODY'				=> 'Bem-vindo ao phpBB3!<br /><br />O phpBBâ„¢ é o sistema de fóruns open source (gratuito) mais usado no mundo. O phpBB3 é a versão mais recente e que vem sendo melhorada desde versões anteriores do script, que teve início em 2000. Como seus predecessores, o phpBB3 é rico em funcionalidades, amigável e com uma equipe completa e pronta para te ajudar ao redor do mundo. O phpBB3 traz diversas melhorias em relação ao seu mais popular antecessor, o phpBB2, e adiciona características novas não presentes em versões anteriores. Esperamos que o mesmo supere suas expectativas.<br /><br />A instalação irá guiá-lo ao longo de todo o processo, atualizando seu fórum de versões antigas para o novo phpBB3, bem como convertendo a partir de um sistema de fóruns diferente. Para mais informações, recomendamos a leitura do <a href="../docs/INSTALL.html">guia de instalação</a>.<br /><br />Para ler a licença do phpBB3 e aprender como obter suporte e fazê-lo corretamente, basta selecionar as opções correspondentes do menu ao lado. Para continuar, por favor, selecione a aba apropriada.',

	'PCRE_UTF_SUPPORT'				=> 'Suporte a PCRE UTF-8',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'O phpBB <strong>não irá</strong> funcionar se sua instalação do PHP não estiver compilada com suporte a extensão PCRE UTF-8',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'Propriedades do PHP getimagesize() está ativo',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Obrigatório</strong> - Em ordem para o phpBB funcionar corretamente, a função getimagesize() precisa estar ativa.',
	'PHP_OPTIONAL_MODULE'			=> 'Módulos opcionais',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>Opcional</strong> - Estes módulos ou aplicações são opcionais. Porém, se esiverem disponíveis, eles habilitarão características extras.',
	'PHP_SUPPORTED_DB'				=> 'Banco de dados suportados',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>Obrigatório</strong> - Você tem que ter suporte a pelo menos um banco de dados compatível dentro do PHP. Se nenhum módulo de banco de dados é mostrado como disponível, aconselhamos que você entre em contato com o seu provedor de hospedagem ou deverá rever a documentação pertinente a instalação do PHP.',
	'PHP_REGISTER_GLOBALS'			=> 'Configuração <var>register_globals</var> do PHP está desabilitada',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> 'O phpBB ainda funcionará sem esta configuração habilitada, mas se possível, é recomendado que register_globals esteja desabilitada na instalação do seu PHP por razões de segurança.',
	'PHP_SAFE_MODE'					=> 'Modo seguro',
	'PHP_SETTINGS'					=> 'Versão do PHP e configurações',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>Obrigatório</strong> - Para instalar o phpBB é necessário ter pelo menos a versão 4.3.3 do PHP instalada. Se o <var>modo seguro</var> estiver sendo exibido abaixo, sua instalação do PHP está trabalhando naquele modo. Isto imporá limitações na administração remota e em características semelhantes.',
	'PHP_URL_FOPEN_SUPPORT'			=> 'Propriedades do PHP <var>allow_url_fopen</var> está ativado',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'	=> '<strong>Opcional</strong> - Esta propriedade é opcional, entretanto certas funções do phpBB como avatares não irão funcionar corretamente sem esta propriedade.',
	'PHP_VERSION_REQD'				=> 'Versão do PHP >= 4.3.3',
	'POST_ID'						=> 'Poste ID',
	'PREFIX_FOUND'					=> 'Uma busca de suas tabelas mostrou uma instalação válida que usa <strong>%s</strong> como prefixo de tabela.',
	'PREPROCESS_STEP'				=> 'Executando funções de processamento',
	'PRE_CONVERT_COMPLETE'			=> 'Todos os passos da pré-conversão foram completados com sucesso. Você agora pode começar com o atual processo de conversão. Por favor, note que você pode ter que fazer manualmente e ajustar várias coisas. Depois da conversão, confira especialmente as permissões determinadas, reconstrua seu índice de busca que não é convertido e também crie arquivos seguros copiado corretamente, por exemplo, avatares e smilies.',
	'PROCESS_LAST'					=> 'Processando últimas declarações',

	'REFRESH_PAGE'				=> 'Atualize a página para continuar a conversão',
	'REFRESH_PAGE_EXPLAIN'		=> 'Se estiver selecionado como Sim, o conversor atualizará a página para continuar a conversão depois de ter terminado um passo. Se esta é sua primeira conversão com a finalidade de testar e para determinar qualquer erro com antecedência, nós sugerimos selecionar este opção para Não.',
	'REQUIREMENTS_TITLE'		=> 'Compatibilidade da instalação',
	'REQUIREMENTS_EXPLAIN'		=> 'Antes de continuar com a instalação completa, o phpBB irá fazer alguns testes em sua configuração de servidor e arquivos para assegurar que você pode instalar e utilizar o phpBB. Por favor, assegure que você leu completamente do princípio ao fim os resultados e não continuar até que todos os testes exigidos sejam executados. Se você desejar usar quaisquer das características que dependam dos testes opcionais, você deverá assegurar que estes testes sejam executados também.',
	'RETRY_WRITE'				=> 'Salvar novamente as configurações',
	'RETRY_WRITE_EXPLAIN'		=> 'Se você desejar, você pode alterar as permissões em config.php para permitir o phpBB de gravar isto. Se você desejar fazer isso, você pode clicar abaixo em Voltar para tentar novamente. Se lembre de alterar novamente as permissões em config.php para a situação anterior depois que o phpBB terminar a instalação.',

	'SCRIPT_PATH'				=> 'Path do script',
	'SCRIPT_PATH_EXPLAIN'		=> 'O caminho onde o phpBB está localizado, relativo ao nome de domínio, por exemplo <samp>/phpBB3</samp>',
	'SELECT_LANG'				=> 'Selecionar idioma',
	'SERVER_CONFIG'				=> 'Configuração do servidor',
	'SEARCH_INDEX_UNCONVERTED'	=> 'índex da busca não pode ser convertido',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'Sua busca antiga não pode ser convertida. A busca irá sempre retornar um valor vazio. Para criar uma nova busca, vá ao seu painel de administração, selecione Manutenção e então escolha Busca do submenu para gerar uma nova.',
	'SOFTWARE'					=> 'Software do fórum',
	'SPECIFY_OPTIONS'			=> 'Especificar opções de conversão',
	'STAGE_ADMINISTRATOR'		=> 'Detalhes do Administrador',
	'STAGE_ADVANCED'			=> 'Configurações Avançadas',
	'STAGE_ADVANCED_EXPLAIN'	=> 'As configurações desta página são necessárias somente se você necessita de alguma configuração diferente do padrão. Se você não tem certeza, só prossiga para a próxima página, que estas configurações poderão ser alteradas posteriormente via Painel de Controle da Administração.',
	'STAGE_CONFIG_FILE'			=> 'Arquivo de Configuração',
	'STAGE_CREATE_TABLE'		=> 'Criar Tabelas do Banco de Dados',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'As tabelas iniciais utilizadas pelo phpBB 3.0 foram criadas e completadas com conteúdo inicial do sistema. Prossiga para a próxima parte da instalação para finalizar o procedimento de instalação.',
	'STAGE_DATABASE'			=> 'Propriedades do Banco de Dados',
	'STAGE_FINAL'				=> 'Estágio Final',
	'STAGE_INTRO'				=> 'Introdução',
	'STAGE_IN_PROGRESS'			=> 'Conversão em progresso',
	'STAGE_REQUIREMENTS'		=> 'Requisitos',
	'STAGE_SETTINGS'			=> 'Propriedades',
	'STARTING_CONVERT'			=> 'Iniciar processo de conversão',
	'STEP_PERCENT_COMPLETED'	=> 'Passo <strong>%d</strong> de <strong>%d</strong>',
	'SUB_INTRO'					=> 'Introdução',
	'SUB_LICENSE'				=> 'Licença',
	'SUB_SUPPORT'				=> 'Suporte',
	'SUCCESSFUL_CONNECT'		=> 'Conexão realizada com sucesso!',
	'SUPPORT_BODY'				=> 'Será prestado um suporte completo para o atual lançamento estável do phpBB3, gratuitamente. Isto inclui: </p><ul><li>Instalação</li><li>Configuração</li><li>Questões técnicas</li><li>Problemas relativos a potenciais bugs no software</li><li>Atualizando de versões Candidatas a Lançamento (RC) para a versão mais recente e estável</li><li>Convertendo de phpBB 2.0.x para phpBB3</li><li>Convertendo de outro software de fóruns de discussão para phpBB3 (por favor, veja o <a href="http://www.phpbb.com/community/viewforum.php?f=65">Fórum de Conversões</a>)</li></ul><p>Nós recomendamos os usuários que ainda utilizam versões beta do phpBB3 para substituir a sua instalação por uma nova cópia da versão mais recente.</p><h2>MODs / Estilos</h2><p>Para assuntos relativos a MODs, por favor, crie uma mensagem dentro do <a href="http://www.phpbb.com/community/viewforum.php?f=81">Fórum de Modificações</a> apropriado.<br />Para assuntos relativo a estilos, templates e definições de imagens, por favor, crie uma mensagem dentro do <a href="http://www.phpbb.com/community/viewforum.php?f=80">Fórum de Estilos</a> apropriado.<br /><br />Se a sua pergunta se relacionar a um pacote específico, por favor, envie uma mensagem diretamente ao tópico dedicado a este pacote.</p><h2>Obtendo Suporte</h2><p><a href="http://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">Bem-vindo ao sistema de fóruns phpBB</a><br /><a href="http://www.phpbb.com/support/">Seção de Suporte</a><br /><a href="http://www.phpbb.com/support/documentation/3.0/quickstart/">Guia de Início Rápido</a><br /><br />Para certificar-se de que você fique atualizado com as notícias e lançamentos mais recentes, por que não <a href="http://www.phpbb.com/support/">se inscrever na nossa lista de correspondência</a>?<br /><br />',
	'SYNC_FORUMS'				=> 'Iniciando a sincronização de fóruns',
	'SYNC_POST_COUNT'			=> 'Sincronizando post_counts',
	'SYNC_POST_COUNT_ID'		=> 'Sincronizando post_counts de <var>entry</var> %1$s para %2$s.',
	'SYNC_TOPICS'				=> 'Iniciando a sincronização de tópicos',
	'SYNC_TOPIC_ID'				=> 'Sincronizando tópicos de <var>topic_id</var> %1$s para %2$s',

	'TABLES_MISSING'			=> 'Não foi possível encontrar estas tabelas<br />Â» <strong>%s</strong>.',
	'TABLE_PREFIX'				=> 'Prefixo para as tabelas no banco de dados',
	'TABLE_PREFIX_SAME'			=> 'O prefixo das tabelas precisa ser o mesmo usado pelo software que está sendo convertido.<br />Â» Foi especificado este prefixo %s',
	'TESTS_PASSED'				=> 'Os testes foram realizados com sucesso!',
	'TESTS_FAILED'				=> 'Os testes falharam!',

	'UNABLE_WRITE_LOCK'			=> 'Impossível de escrever, arquivo bloqueado',
	'UNAVAILABLE'				=> 'Indisponível',
	'UNWRITABLE'				=> 'Gravação Não Permitida',
	'UPDATE_TOPICS_POSTED'		=> 'Gerando informações dos tópicos postados',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Um erro ocorreu enquanto gerava novos tópicos no momento de adicionar informação. Você pode tentar novamente este passo no Painel de Administração após o processo de conversão ter sido completado.',
	'VERIFY_OPTIONS'			=> 'Verificando opções de conversão',
	'VERSION'					=> 'Versão',

	'WELCOME_INSTALL'			=> 'Boas vindas a Instalação do phpBB3',
	'WRITABLE'					=> 'Gravação Permitida',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> 'Todos os arquivos estão em dia com a última versão do phpBB. Você deve agora <a href="../ucp.php?mode=login">entrar-se na comunidade</a> e verificar se ao todo ela está trabalhando corretamente. Não se esqueça de excluir, renomear ou mover a pasta install da raiz no ftp! Favor nos enviar informações sobre seu servidor e configurações de comunidade do link <a href="../ucp.php?mode=login&amp;redirect=adm/index.php%3Fi=send_statistics%26mode=send_statistics">Enviar Estatísticas</a> no Painel de Controle Admin.',
	'ARCHIVE_FILE'				=> 'Arquivo fonte com dados',

	'BACK'				=> 'Voltar',
	'BINARY_FILE'		=> 'Arquivo binário',
	'BOT'				=> 'Espiões/Robôs',

	'CHANGE_CLEAN_NAMES'			=> 'O método usado para criar seguramente um nome de usuário não foi utilizado por múltiplos usuários foi alterado. Há alguns usuários que têm o mesmo nome quando comparado com o novo método. Você tem que apagar ou renomear estes usuários para ter certeza de que cada nome só é utilizado por um usuário antes de você prosseguir.',
	'CHECK_FILES'					=> 'Checar arquivos',
	'CHECK_FILES_AGAIN'				=> 'Checar arquivos novamente',
	'CHECK_FILES_EXPLAIN'			=> 'Com o próximo passo, todos arquivos serão analisados, este processo poderá levar um certo tempo se feito pela primeira vez.',
	'CHECK_FILES_UP_TO_DATE'		=> 'De acordo com seu banco de dados sua versão está atualizada. Você deve agora proceder com a checagem dos arquivos para ter certeza que além do banco de dados seus arquivos estão na última versão também do phpBB.',
	'CHECK_UPDATE_DATABASE'			=> 'Continuar com a atualização',
	'COLLECTED_INFORMATION'			=> 'Informações do arquivo',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'A lista abaixo demonstra informações sobre os arquivos necessários para atualizar. Favor leia a informação na frente de cada bloco para ter noção de qual a função de cada um e qual o correto para a sua atualização.',
 	'COLLECTING_FILE_DIFFS'			=> 'Coletando diferenças de arquivo',
	'COMPLETE_LOGIN_TO_BOARD'		=> 'Você deve agora <a href="../ucp.php?mode=login">entrar em sua comunidade</a> e verificar se está correta e trabalhando. Não se esqueça de excluir, renomear ou mover a sua pasta install encontrada no FTP do diretório!',
	'CONTINUE_UPDATE_NOW'           => 'Continuar o processo de atualização agora',	// Shown within the database update script at the end if called from the updater
	'CONTINUE_UPDATE'				=> 'Continuar atualização agora',					// Shown after file upload to indicate the update process is not yet finished
	'CURRENT_FILE'					=> 'Iniciando do arquivo original atual',
	'CURRENT_VERSION'				=> 'Versão atual',

	'DATABASE_TYPE'						=> 'Tipo do banco de dados',
	'DATABASE_UPDATE_INFO_OLD'			=> 'O arquivo de atualização do banco de dados está desatualizado. Verifique se foi feito o upload da versão mais recente corretamente!',
	'DELETE_USER_REMOVE'				=> 'Apagar usuário e remover mensagens',
	'DELETE_USER_RETAIN'				=> 'Apagar usuário, mas mantenha as mensagens',
	'DESTINATION'						=> 'Arquivo de destino',
	'DIFF_INLINE'						=> 'Na linha',
	'DIFF_RAW'							=> 'Raw diff unificada',
	'DIFF_SEP_EXPLAIN'					=> 'Fim do arquivo original atual / Iniciando um novo arquivo atualizado',
	'DIFF_SIDE_BY_SIDE'					=> 'Lado a Lado',
	'DIFF_UNIFIED'						=> 'Diff unificada',
	'DO_NOT_UPDATE'						=> 'Não atualizar este arquivo',
	'DONE'								=> 'Feito',
	'DOWNLOAD'							=> 'Download',
	'DOWNLOAD_AS'						=> 'Download como',
	'DOWNLOAD_UPDATE_METHOD_BUTTON'		=> 'Baixar arquivos modificados (recomendado)',
	// Mudanças 3.0.5
  'DOWNLOAD_CONFLICTS'				=> 'Mostrar conflitos deste arquivo',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Procurar por &lt;&lt;&lt; para local do conflito',
	// Mudanças 3.0.5
  'DOWNLOAD_UPDATE_METHOD'			=> 'Baixar arquivos modificados',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Uma vez feito o download, você deverá descompactar o arquivo(s). Você irá encontrar os arquivos modificados para fazer upload na raiz do seu phpBB no diretório com o mesmo. Favor fazer o envio destes arquivos para suas respectivas pastas. Depois que Você enviou os arquivos, novamente verifique os arquivos com o outro botão abaixo.',

	'ERROR'		    => 'Erro',
	'EDIT_USERNAME'	=> 'Editar nome de usuário',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Arquivo já está atualizado',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Arquivo não permite ser mudado',
	'FILE_USED'						=> 'Informação usada de',			// Single file
	'FILES_CONFLICT'				=> 'Conflito entre arquivos',
	'FILES_CONFLICT_EXPLAIN'		=> 'Os seguintes arquivos são modificados e não representam os arquivos originais das antigas versões. phpBB determinou que estes arquivos criam conflitos se eles tentam unificar-se. Investigue os problemas e tente manualmente resolver o problema ou continue a atualização escolhendo outro método de unificação. Se você resolveu os conflitos manualmente, verifique os arquivos novamente depois de tê-los modificado. Você também tem a escolha entre seu método de união preferido e o método para todo arquivo. O primeiro irá resultar em um arquivo onde as linhas de conflito serão apagadas, o outro irá resultar na perda dos arquivos novos.',
	'FILES_MODIFIED'				=> 'Arquivos modificados',
	'FILES_MODIFIED_EXPLAIN'		=> 'Os seguintes arquivos estão modificados e não representam os arquivos originais da versão passada. O arquivo atualizado é uma união entre estes dois arquivos, o velho com o novo.',
	'FILES_NEW'						=> 'Novos arquivos',
	'FILES_NEW_EXPLAIN'				=> 'Os seguintes arquivos não existem atualmente em sua instalação. Estes arquivos serão acrescentados na sua instalação.',
	'FILES_NEW_CONFLICT'			=> 'Novos arquivos em conflito',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Os seguintes arquivos estão na nova versão, porém foi determinando anteriormente a criação destes arquivos com o mesmo nome e posição. Este arquivo será sobre-escrito pelo novo arquivo.',
	'FILES_NOT_MODIFIED'			=> 'Arquivos sem modificação',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Os seguintes arquivos não são modificados e representam os arquivos originais do phpBB da versão para a qual você quer atualizar.',
	'FILES_UP_TO_DATE'				=> 'Arquivos já atualizados',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Os seguintes arquivos já estão atualizados e não precisam ser atualizados.',
	'FTP_SETTINGS'					=> 'Propriedades do FTP',
	'FTP_UPDATE_METHOD'				=> 'FTP envio',

	'INCOMPATIBLE_UPDATE_FILES'		=> 'Os arquivos atualizados encontrados são incompatíveis com sua versão instalada. Sua versão é %1$s e o arquivo de atualização é do phpBB %2$s para %3$s.',
	'INCOMPLETE_UPDATE_FILES'		=> 'Os arquivos de atualização estão incompletos',
	'INLINE_UPDATE_SUCCESSFUL'		=> 'A atualização do banco de dados foi realizado com sucesso. Agora você precisa continuar com o processo de atualização.',

	'KEEP_OLD_NAME'		=> 'Manter nome de usuário',

	'LATEST_VERSION'		=> 'última versão',
	'LINE'					=> 'Linha',
	'LINE_ADDED'			=> 'Adicionado',
	'LINE_MODIFIED'			=> 'Modificado',
	'LINE_REMOVED'			=> 'Removido',
	'LINE_UNMODIFIED'		=> 'Sem modificação',
	'LOGIN_UPDATE_EXPLAIN'	=> 'Em ordem de atualizar sua instalação, Você precisará entrar-se primeiramente.',

	'MAPPING_FILE_STRUCTURE'	=> 'Para usar o envio de arquivos daqui, basta mapear a localização dos arquivos de instalação.',

	'MERGE_MODIFICATIONS_OPTION'	=> 'Unir modificações',

	'MERGE_NO_MERGE_NEW_OPTION'	=> 'Não unir - use um novo arquivo',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'Não unir - use o arquivo atualmente instalado',
	'MERGE_MOD_FILE_OPTION'		=> 'Unifique as diferenças e utilize o código modificado para os blocos de erros',
	'MERGE_NEW_FILE_OPTION'		=> 'Unifique diferentes e use de novos arquivos para o conflito entre códigos',
	'MERGE_SELECT_ERROR'		=> 'Modos de unir arquivos não estão selecionados corretamente.',
	'MERGING_FILES'				=> 'Unindo diferenças',
	'MERGING_FILES_EXPLAIN'		=> 'Coletando atualmente as alterações finais de arquivo.<br /><br />Por favor, espere até que o phpBB complete todas as operações nos arquivos alterados.',

	'NEW_FILE'						=> 'Fim de novo arquivo atualizado',
	'NEW_USERNAME'					=> 'Novo nome de usuário',
	'NO_AUTH_UPDATE'				=> 'Sem autorização para atualizar',
	'NO_ERRORS'						=> 'Nenhum erro',
	'NO_UPDATE_FILES'				=> 'Não está atualizando os seguintes arquivos',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'Os seguintes arquivos são novos ou modificados, mas o diretório em que estão não foi encontrado em sua instalação. Se esta lista contiver arquivos de outros diretórios que não sejam language/ ou styles/ você pode ter modificado a estrutura do diretório e o update pode estar incompleto.',
	'NO_UPDATE_FILES_OUTDATED'		=> 'Nenhuma pasta de atualização encontrada. Por favor, tenha certeza que você enviou os arquivos corretamente para o FTP.<br /><br />Sua instalação <strong>NãO</strong> parece estar atualizada. Atualizações estão disponíveis para sua versão do phpBB %1$s, no site oficial <a href="http://www.phpbb.com/downloads.php" rel="external">http://www.phpbb.com/downloads.php</a>. Obtenha a versão correta para atualizar sua Versão %2$s para Versão %3$s.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Sua versão está em dia com as atualizações. Não é necessário rodar nenhuma ferramenta de Atualização. Se você deseja fazer uma análise de Integridade de Arquivos, tenha certeza de quem enviou os arquivos de atualização corretamente.',
	'NO_UPDATE_INFO'				=> 'Arquivo de atualização não foi encontrado.',
	'NO_UPDATES_REQUIRED'			=> 'Nenhuma atualização requerida',
	'NO_VISIBLE_CHANGES'			=> 'Nenhuma alteração visível',
	'NOTICE'						=> 'Notificar',
	'NUM_CONFLICTS'					=> 'Número de Conflitos',
	'NUMBER_OF_FILES_COLLECTED'		=> 'Temos atualmente diferenças sobre %1$d de %2$d arquivos coletados.<br />Por favor, espere até que a coleta de arquivos termine.',

	'OLD_UPDATE_FILES'		=> 'Os arquivos de atualização estão desatualizados. Os arquivos encontrados são para atualizar a versão %1$s para %2$s, mas a versão mais atual do phpBB é %3$s.',

	'PACKAGE_UPDATES_TO'				=> 'Pacote atual atualizado para a versão',
	'PERFORM_DATABASE_UPDATE'			=> 'Executar Atualização de Banco de Dados',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'Abaixo você encontra um botão para um script de atualização do banco de dados. A atualização do banco de dados pode demorar algum tempo, portanto não cancele a atualização mesmo parecendo lenta. Depois que a atualização do banco de dados for executada, siga as instruções para continuar com o processo de atualização.',
	'PREVIOUS_VERSION'					=> 'Versão Anterior',
	'PROGRESS'							=> 'Progresso',

	'RESULT'					=> 'Resultados',
	'RUN_DATABASE_SCRIPT'		=> 'Atualizar meu Banco de Dados agora',

	'SELECT_DIFF_MODE'			=> 'Selecionar modo diff ',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Selecionar formato de arquivo de download',
	'SELECT_FTP_SETTINGS'		=> 'Selecionar configurações de FTP',
	'SHOW_DIFF_CONFLICT'		=> 'Mostrar diferenças/conflitos',
	'SHOW_DIFF_FINAL'			=> 'Mostrar resultados',
	'SHOW_DIFF_MODIFIED'		=> 'Mostrar diferenças mescladas',
	'SHOW_DIFF_NEW'				=> 'Mostrar conteúdo do arquivo',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'Mostrar diferenças',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'Mostrar diferenças de modificação',
	'SOME_QUERIES_FAILED'		=> 'Algumas solicitações falharam. Os erros estão listados abaixo.',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'Provavelmente isto não é para se preocupar, atualização continuará. Se no final da instalação este erro persistir, entre em contato com o seu suporte para esclarecimentos e ajuda. Veja <a href="../docs/README.html">o arquivo de Ajuda</a> para maiores detalhes de como obter ajuda.',
	'STAGE_FILE_CHECK'			=> 'Conferir arquivos',
	'STAGE_UPDATE_DB'			=> 'Atualizar Banco de Dados',
	'STAGE_UPDATE_FILES'		=> 'Atualizar arquivos',
	'STAGE_VERSION_CHECK'		=> 'Verificar versão',
	'STATUS_CONFLICT'			=> 'Arquivos modificados que estão produzindo conflitos',
	'STATUS_MODIFIED'			=> 'Arquivo modificado',
	'STATUS_NEW'				=> 'Novo arquivo',
	'STATUS_NEW_CONFLICT'		=> 'Novo arquivo com conflito',
	'STATUS_NOT_MODIFIED'		=> 'Arquivo não modificado',
	'STATUS_UP_TO_DATE'			=> 'Arquivo já atualizado',

	'TOGGLE_DISPLAY'			=> 'Ver/Esconder lista de arquivos',
	'TRY_DOWNLOAD_METHOD'		=> 'Você pode querer experimentar o método de baixar arquivos modificados. &lt;br /&gt; Este método sempre funciona e é também o modo recomendado atualizar.',
	'TRY_DOWNLOAD_METHOD_BUTTON'=> 'Agora tente este método.',


	'UPDATE_COMPLETED'				=> 'Atualização Completada',
	'UPDATE_DATABASE'				=> 'Atualizar Banco de Dados',
	'UPDATE_DATABASE_EXPLAIN'		=> 'Na próxima etapa, o banco de dados será atualizado.',
	'UPDATE_DATABASE_SCHEMA'		=> 'Esquema de Banco de Dados atualizado',
	'UPDATE_FILES'					=> 'Arquivos atualizados',
	'UPDATE_FILES_NOTICE'			=> 'Por favor, tenha certeza de ter atualizado os arquivos de seu fórum também, pois este arquivo só atualiza seu banco de dados.',
	'UPDATE_INSTALLATION'			=> 'Atualizando a instalação do phpBB',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Com esta opção, é possível atualizar sua instalação do phpBB para sua última versão.<br /> Durante o processo, todos os arquivos passarão por uma análise de integridade. Você terá a chance de conferir todas as atualizações dos arquivos, suas modificações e possíveis erros antes de atualizar o sistema.<br/><br/> A atualização pode ser feita de duas maneiras.</p><h2>Atualização Manual</h2><p>Com esta atualização, você irá atualizar somente suas alterações para você ter certeza do que você alterou. Após você ter baixado o pacote, você precisará inserir os arquivos em seus respectivos diretórios. Uma vez efetuado este passo, você estará pronto para iniciar a verificação de integridade, para conferir se os arquivos estão em seus locais corretos.</p><h2>Atualização Automática via FTP</h2><p>Este método é similar ao primeiro, mas você não precisará baixar os arquivos e reenviá-los via FTP para seus lugares. O sistema fará tudo por você, basta declarar os seus dados de FTP, e assim que os arquivos forem enviados, você será redirecionado para a verificação da integridade dos arquivos, se tudo foi enviado e atualizado corretamente.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Anúncio de Lançamento</h1>

		<p>Por favor, leia <a href="%1$s" title="%1$s"><strong>este anúncio de lançamento para a última versão</strong></a> antes de continuar com sua atualização, pois contém informações úteis. Contém também todos os links para download do sistema assim como os logs de alterações.</p>

		<br />

		<h1>Como atualizar sua instalação com o Pacote de Atualização Automático</h1>

		<p>O modo recomendado de atualizar a sua instalação listada aqui só é válido para o pacote de atualização automático. Você também pode atualizar sua instalação usando os métodos listados dentro do documento INSTALL.html. Os passos para atualizar o phpBB3 automaticamente são:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Vá para <a href="http://www.phpbb.com/downloads/" title="http://www.phpbb.com/downloads/">a página de downloads do phpBB.com</a> e faça o download do arquivo "Pacote de Atualização Automática".<br /><br /></li>
			<li>Descompacte o arquivo.<br /><br /></li>
			<li>Envie a pasta install descompactada para seu diretório principal do phpBB (onde fica o arquivo config.php).<br /><br /></li>
		</ul>

		<p>Uma vez enviada a pasta, seu fórum ficará em estado de offline para usuários normais, até que se efetue a instalação ou atualização e a pasta install seja deletada.<br /><br />
		<strong><a href="%2$s" title="%2$s">Agora inicie sua instalação ou atualização apontando no navegador a pasta install</a>.</strong><br />
		<br />
        Você será guiado pelo processo de  atualização. Uma notificação será feita a você uma vez que a atualização estiver concluída.
		</p>
	',
	'UPDATE_INSTRUCTIONS_INCOMPLETE'	=> '

		<h1>Uma atualização incompleta foi detectada</h1>

		<p>O phpBB detectou uma atualização automática incompleta. Favor, tenha certeza que você seguiu todos os passos dentro da ferramenta de atualização automática. Abaixo, você encontrará o link novamente, ou vá diretamente para o seu diretório install.</p>
	',
	'UPDATE_METHOD'					=> 'Método de Atualização',
	'UPDATE_METHOD_EXPLAIN'			=> 'Você pode agora escolher como quer proceder sua atualização. Usando o método automático, será solicitado seu login e senha do FTP. Desta maneira, seus arquivos serão movidos e os antigos serão salvos como backup com extensão .bak. Se você escolher o método de envio manual, descompacte o pacote em seu computador e envie os arquivos manualmente depois.',
	'UPDATE_REQUIRES_FILE'			=> 'O atualizador requer que o seguinte arquivo esteja presente: %s',
	'UPDATE_SUCCESS'				=> 'Atualização efetuada com sucesso',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'Arquivos atualizados com sucesso. O próximo passo envolve a verificação de todos os arquivos novamente para conferir se os arquivos foram enviados corretamente.',
	'UPDATE_VERSION_OPTIMIZE'		=> 'Atualizando versão e otimizando tabelas',
	'UPDATING_DATA'					=> 'Atualizando dados',
	'UPDATING_TO_LATEST_STABLE'		=> 'Atualizando banco de dados para a versão lançada mais estável',
	'UPDATED_VERSION'				=> 'Versão atualizada',
	'UPLOAD_METHOD'					=> 'Método de envio',

	'UPDATE_DB_SUCCESS'				=> 'Banco de dados atualizado com sucesso',
	'USER_ACTIVE'					=> 'Usuário ativo',
	'USER_INACTIVE'					=> 'Usuário inativo',

	'VERSION_CHECK'				=> 'Verificar versão',
	'VERSION_CHECK_EXPLAIN'		=> 'Confira se a sua versão do phpBB está atualizada.',
	'VERSION_NOT_UP_TO_DATE'	=> 'Sua versão do phpBB não está atualizada. Continue com o processo de atualização.',
	'VERSION_NOT_UP_TO_DATE_ACP'=> 'Sua versão do phpBB não está atualizada.<br />Abaixo você encontra um link para os lançamentos atualizados, assim como instruções para efetuar sua atualização.',
	'VERSION_NOT_UP_TO_DATE_TITLE'	=> 'Sua instalação do phpBB não está atualizada.',
	'VERSION_UP_TO_DATE'		=> 'Sua instalação está atualizada. Nenhuma atualização é requerida no momento. Você pode continuar, no entanto, conferindo a integridade do seu sistema.',
	'VERSION_UP_TO_DATE_ACP'	=> 'Sua instalação está atualizada. Nenhuma atualização é requerida no momento. Você não precisa atualizar seu sistema.',
	'VIEWING_FILE_CONTENTS'		=> 'Vendo conteúdo de Arquivos',
	'VIEWING_FILE_DIFF'			=> 'Vendo diferenças de Arquivos',

	'WRONG_INFO_FILE_FORMAT'	=> 'Informação de Formato de Arquivo Inválida',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Grato, A Administração',
	'CONFIG_SITE_DESC'				=> 'Um pequeno texto para descrever seu fórum',
	'CONFIG_SITENAME'				=> 'seu_dominio.com',

	'DEFAULT_INSTALL_POST'			=> 'Isto é um exemplo de uma mensagem na sua instalação do phpBB3. Tudo parece estar funcionando. Se você desejar, você pode apagar esta mensagem e continuar com a configuração do seu fórum. Durante o processo de instalação, em sua primeira categoria e seu primeiro fórum, é determinada uma configuração apropriada de permissões pré-definidas para os grupos de usuários de administradores, bots, moderadores globais, visitantes, usuários registrados e usuários registrados através da COPPA. Se você também escolher apagar sua primeira categoria e seu primeiro fórum, não se esqueça de determinar permissões para todos estes grupos de usuários para todas as novas categorias e fóruns que você criar. é recomendado que sua primeira categoria e seu primeiro fórum sejam renomeados e feitas copias das permissões deles enquanto se estiver criando novas categorias e fóruns. Divirta-se!',

	'EXT_GROUP_ARCHIVES'			=> 'Arquivos',
	'EXT_GROUP_DOCUMENTS'			=> 'Documentos',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Arquivos para download',
	'EXT_GROUP_FLASH_FILES'			=> 'Arquivos Flash',
	'EXT_GROUP_IMAGES'				=> 'Imagens',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Texto plano',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime Media',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real Media',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows Media',

	'FORUMS_FIRST_CATEGORY'			=> 'Sua Primeira Categoria',
	'FORUMS_TEST_FORUM_DESC'		=> 'Descrição de seu primeiro fórum.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Seu Primeiro Fórum',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Administrador',
	'REPORT_WAREZ'					=> 'A mensagem contém links para software ilegal ou pirateado.',
	'REPORT_SPAM'					=> 'A mensagem reportada tem o único propósito de anunciar um website ou outro produto.',
	'REPORT_OFF_TOPIC'				=> 'A mensagem reportada é um off tópico.',
	'REPORT_OTHER'					=> 'A mensagem reportada não se encaixa em nenhuma categoria, favor use o campo de informação adicional.',

	'SMILIES_ARROW'					=> 'Seta',
	'SMILIES_CONFUSED'				=> 'Confuso',
	'SMILIES_COOL'					=> 'Tranquilo',
	'SMILIES_CRYING'				=> 'Chorando ou Muito Triste',
	'SMILIES_EMARRASSED'			=> 'Envergonhado',
	'SMILIES_EVIL'					=> 'Mal ou Muito Furioso',
	'SMILIES_EXCLAMATION'			=> 'Exclamação',
	'SMILIES_GEEK'					=> 'Geek',
	'SMILIES_IDEA'					=> 'Idéia',
	'SMILIES_LAUGHING'				=> 'Rindo',
	'SMILIES_MAD'					=> 'Furioso',
	'SMILIES_MR_GREEN'				=> 'Sr. Verde',
	'SMILIES_NEUTRAL'				=> 'Neutro',
	'SMILIES_QUESTION'				=> 'Dúvida',
	'SMILIES_RAZZ'					=> 'Legal',
	'SMILIES_ROLLING_EYES'			=> 'Virando os olhos',
	'SMILIES_SAD'					=> 'Triste',
	'SMILIES_SHOCKED'				=> 'Chocado',
	'SMILIES_SMILE'					=> 'Smile',
	'SMILIES_SURPRISED'				=> 'Surpreso',
	'SMILIES_TWISTED_EVIL'			=> 'Sádico',
	'SMILIES_UBER_GEEK'				=> 'Uber Geek',
	'SMILIES_VERY_HAPPY'			=> 'Muito Feliz',
	'SMILIES_WINK'					=> 'Piscada',

	'TOPICS_TOPIC_TITLE'			=> 'Bem-Vindo(a) ao phpBB3',
));

?>
