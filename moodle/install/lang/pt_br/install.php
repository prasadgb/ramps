<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Automatically generated strings for Moodle installer
 *
 * Do not edit this file manually! It contains just a subset of strings
 * needed during the very first steps of installation. This file was
 * generated automatically by export-installer.php (which is part of AMOS
 * {@link http://docs.moodle.org/en/Development:Languages/AMOS}) using the
 * list of strings defined in /install/stringnames.txt.
 *
 * @package   installer
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['admindirname'] = 'Diretório admin';
$string['availablelangs'] = 'Lista de idiomas disponíveis';
$string['chooselanguagehead'] = 'Escolha um idioma';
$string['chooselanguagesub'] = 'Por favor, escolha o idioma para a instalação.Este idioma também será utilizado como idioma padrão do site, embora você possa mudar mais tarde.';
$string['clialreadyinstalled'] = 'O arquivo config.php já existe, por favor use admin/cli/upgrade.php, se você quiser atualizar o seu site.';
$string['cliinstallheader'] = 'Programa de instalação por linha de comando do Moodle {$a}';
$string['databasehost'] = 'Host da base de dados';
$string['databasename'] = 'Nome da base de dados';
$string['databasetypehead'] = 'Escolha o driver da base de dados';
$string['dataroot'] = 'Diretório de dados';
$string['dbprefix'] = 'Prefixo das tabelas';
$string['dirroot'] = 'Diretório Moodle';
$string['environmenthead'] = 'Verificando o ambiente ...';
$string['environmentsub2'] = 'Cada release do Moodle requer uma versão mínima do PHP e diversas extensões do PHP.
A verificação completa do ambiente é feita antes de cada instalação e atualização.';
$string['errorsinenvironment'] = 'Verificação do Ambiente falhou!';
$string['installation'] = 'Instalação';
$string['langdownloaderror'] = 'Infelizmente não foi possível fazer download do idioma "{$a}". O processo de instalação continuará em Inglês.';
$string['memorylimithelp'] = '<p>O limite de memória do PHP configurado atualmente no seu servidor é de {$a}.</p>

<p>Este limite pode causar problemas no futuro, especialmente quando muitos módulos estiverem ativados ou em caso de um número elevado de usuários.</p>

<p>É aconselhável a configuração do limite de memória com o valor mais alto possível, como 40M. Você pode tentar um dos seguintes caminhos:</p>
<ol>
<li>Se você puder, recompile o PHP com <i>--enable-memory-limit</i>.
Com esta operação Moodle será capaz de configurar o limite de memória sózinho.</li>
<li>Se você tiver acesso ao arquivo php.ini, você pode mudar o parâmetro <b>memory_limit</b> para um valor próximo a 40M. Se você não tiver acesso direto, peça ao administrador do sistema para fazer esta operação.</li>
<li>Em alguns servidores é possível fazer esta mudança criando um arquivo .htaccess no diretório Moodle. O arquivo deve conter a seguinte expressão:
<p><blockquote>php_value memory_limit 40M</blockquote></p>
<p>Alguns servidores não aceitam este procedimento e <b>todas</b> as páginas PHP do servidor ficam bloqueadas ou imprimem mensagens de erro. Neste caso será necessário excluir o arquivo .htaccess .</p>
</li></ol>';
$string['paths'] = 'Caminhos';
$string['pathserrcreatedataroot'] = 'O diretório de dados ({$a->dataroot}) não pode ser criado pelo instalador.';
$string['pathshead'] = 'Confirme os caminhos';
$string['pathsrodataroot'] = 'O diretório de dados raiz não pode ser acessado para escrita.';
$string['pathsroparentdataroot'] = 'O diretório pai ({$a->parent}) não pode ser escrito. O diretório de dados ({$a->dataroot}) não pode ser criado pelo instalador.';
$string['pathssubadmindir'] = 'Alguns poucos webhosts usam /admin como um URL especial para acesso ao painel de controle ou outras coisas. Infelizmente isto conflita com a localizaçao padrão das páginas do administrador Moodle. Você pode corrigir isso renomeando a pasta admin na sua instalação, e colocando esse novo nome aqui. Por exemplo: <em>moodleadmin</em>. Isto irá corrigir os links das páginas do administrador Moodle.';
$string['pathssubdataroot'] = 'Você precisa de um local onde o Moodle possa salvar arquivos enviados. Este diretório deve possuir permissões de leitura e escrita pelo usuário do servidor web
(geralmente \'nobody\' ou \'apache \'), mas não deverá ser acessível diretamente através da web. O instalador irá tentar criá-lo se ele não existir.';
$string['pathssubdirroot'] = 'Caminho completo do diretório para instalação do Moddle.';
$string['pathssubwwwroot'] = 'Endereço web completo onde o Moodle será acessado.
Não é possível acessar o Moodle usando múltiplos endereços. Se seu site tem múltiplos endereços públicos você deve configurar redirecionamentos permantentes em todos eles exceto esse. Se seu site é acessado tanto da Intranet como Internet, use o endereço público aqui e configure o DNS para que os usuários da Intranet possam usar o endereço público também. Se o endereço não estiver correto, por favo mude a URL no seu navegador para reiniciar a instalação com um valor diferente.';
$string['pathsunsecuredataroot'] = 'A localização da pasta de dados não é segura.';
$string['pathswrongadmindir'] = 'Diretório Admin não existe';
$string['phpextension'] = 'Extensão PHP {$a}';
$string['phpversion'] = 'Versão do PHP';
$string['phpversionhelp'] = '<p>Moodle requer a versão 4.3.0 de PHP ou posterior.</p>
<p>A sua versão é  a {$a}</p>
<p>Atualize a versão do PHP!</p>
(atenção, a versão 5.0.x tem muitos problemas - use a versão 5.1.0 ou a 4.4)';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Se você chegou nesta página, o pacote <strong>{$a->packname} {$a->packversion}</strong> foi instalado. Parabéns!';
$string['welcomep30'] = 'Esta versão do <strong>{$a->installername}</strong> inclui as aplicações para a criação de um ambiente em que <strong>Moodle</strong> possa operar:';
$string['welcomep40'] = 'O pacote inclui também o <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'O uso das aplicações incluídas neste pacote é regulamentado pelas respectivas licenças. O instalador completo <strong>{$a->installername}</strong> é <a href="http://www.opensource.org/docs/definition_plain.html">open source</a> e é distribuído com uma licença <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a>.';
$string['welcomep60'] = 'As seguinte páginas guiam passo a passo a configuração de <strong>Moodle</strong> no seu computador. Você pode usar a configuração padrão ou alterá-las de acordo com as suas necessidades.';
$string['welcomep70'] = 'Clicar o botão "Próxima" abaixo para continuar a configuração de <strong>Moodle</strong>.';
$string['wwwroot'] = 'Endereço web';
