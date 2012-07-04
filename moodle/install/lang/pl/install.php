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

$string['admindirname'] = 'Katalog admin';
$string['availablelangs'] = 'Dostępne paczki językowe';
$string['chooselanguagehead'] = 'Wybierz język';
$string['chooselanguagesub'] = 'Proszę wybrać język TYLKO do instalacji. Stronę i języki dla użytkowników będzie można wybrać na następnym ekranie.';
$string['clialreadyinstalled'] = 'Plik config.php już istnieje, użyj admin/cli/upgrade.php jeśli chcesz uaktualnić witrynę.';
$string['databasehost'] = 'Host bazy danych';
$string['databasename'] = 'Nazwa bazy danych';
$string['dataroot'] = 'Katalog z danymi';
$string['dbprefix'] = 'Prefiks tabel';
$string['dirroot'] = 'Katalog Moodle';
$string['environmenthead'] = 'Sprawdzam środowisko (ustawienia) ...';
$string['errorsinenvironment'] = 'Kontrola środowiska zakończona niepowodzeniem!';
$string['installation'] = 'Instalacja';
$string['langdownloaderror'] = 'Niestety język "{$a}" nie może zostać pobrany. Proces instalacji będzie kontynuowany w języku angielskim.';
$string['memorylimithelp'] = '<p>Limit pamięci PHP dla Twojego serwera jest ustawiony obecnie na {$a}.</p>

<p> Może to stworzyć sytuację, w której Moodle będzie miał w przyszłości problemy z pamięcią, zwłaszcza jeśli masz udostępnionych wiele modułów i/lub wielu użytkowników.</p>

<p>Jeśli jest to możliwe, zalecamy ustawienie konfiguracji PHP z wyższym limitem, np. 40M.
Istnieje kilka sposobów przeprowadzenia tej operacji, których możesz spróbować:</p>
<ol>
<li>Jeśli możesz przekompiluj PHP za pomocą <i>--enable-memory-limit</i>.
Pozwoli to Moodle ustawić samoczynnie limit pamięci.</li>
<li>Jeśli masz dostęp do pliku konfiguracyjnego php.ini, możesz w nim zmienić ustawienie <b>memory_limit</b> do wielkości np. 40M. W przypadku, gdy nie posiadasz dostępu możesz poprosić swojego administratora aby zrobił to za Ciebie.</li>
<li>Na niektórych serwerach PHP można stworzyć plik. htaccess w katalogu Moodle zawierający poniższą linię:
<blockquote><div>php_value memory_limit 40M</div></blockquote>
<p>Jednakże na niektórych serwerach będzie uniemożliwiało to poprawne działanie <b>wszystkich</b> stron PHP (ujrzysz błędy na wyświetlanych stronach), wtedy będziesz musiał usunąć plik .htaccess.</p></li>
</ol>';
$string['paths'] = 'Ścieżki';
$string['pathserrcreatedataroot'] = 'Katalog danych ({$a->dataroot}) nie może zostać utworzony przez instalator.';
$string['pathshead'] = 'Potwierdź ścieżki';
$string['pathsrodataroot'] = 'Główny katalog danych nie ma uprawnień do zapisu. ';
$string['pathsroparentdataroot'] = 'Nadrzędny katalog ({$a->parent}) jest tylko do odczytu. Katalog danych ({$a->dataroot}) nie może zostać utworzony przez instalator. ';
$string['pathssubdirroot'] = 'Pełna ścieżka do katalogu z instalacją Moodle.';
$string['pathsunsecuredataroot'] = 'Lokalizacja głównego katalogu danych nie jest bezpieczna';
$string['pathswrongadmindir'] = 'Katalog admin nie istnieje';
$string['phpextension'] = '{$a} rozszerzenie PHP';
$string['phpversion'] = 'Wersja PHP';
$string['phpversionhelp'] = '<p>Moodle wymaga wersji PHP co najmniej 4.3.0 lub 5.1.0 (5.0.x posiada kilka znanych problemów).</p> 
<p>Obecnie jest uruchomiona wersja {$a}</p>
<p>Musisz uaktualnić wersję PHP lub przenieść na host z nowszą wersją PHP!<br />(W przypadku wersji 5.0.x możesz dokonać downgrade do wersji 4.4.x)</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Widzisz tę stronę, ponieważ z powodzeniem zainstalowałeś i uruchomiłeś <strong>{$a->packname} {$a->packversion}</strong> na swoim komputerze.';
$string['welcomep30'] = 'Ten instalator <strong>{$a->installername}</strong> zawiera aplikacje, by stworzyć środowisko, w którym będzie działać <strong>Moodle</strong>, czyli';
$string['welcomep40'] = 'Pakiet zawiera <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'Wszystkie aplikacje w tym pakiecie maja własne, oddzielne licencje. Kompletny pakiet <strong>{$a->installername}</strong> jest <a href="http://www.opensource.org/docs/definition_plain.html">open source</a> i jest dystrybuowany na <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a> licencji.';
$string['welcomep60'] = 'Nastepujące strony przeprowadzą cię przez instalację <strong>Moodle</strong> na twoim komputerze. Możesz zaakceptować ustawienia domyślne, lub opcjonalnie, dostosować je do swoich potrzeb.';
$string['welcomep70'] = 'Kliknij przycisk "Dalej" żeby kontynuować instalację <strong>Moodle</strong>.';
$string['wwwroot'] = 'Adres w sieci';
