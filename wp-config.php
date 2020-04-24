<?php
/**
 * Podstawowa konfiguracja WordPressa.
 *
 * Ten plik zawiera konfiguracje: ustawień MySQL-a, prefiksu tabel
 * w bazie danych, tajnych kluczy, używanej lokalizacji WordPressa
 * i ABSPATH. Więćej informacji znajduje się na stronie
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Kodeksu. Ustawienia MySQL-a możesz zdobyć
 * od administratora Twojego serwera.
 *
 * Ten plik jest używany przez skrypt automatycznie tworzący plik
 * wp-config.php podczas instalacji. Nie musisz korzystać z tego
 * skryptu, możesz po prostu skopiować ten plik, nazwać go
 * "wp-config.php" i wprowadzić do niego odpowiednie wartości.
 *
 * @package WordPress
 */

// ** Ustawienia MySQL-a - możesz uzyskać je od administratora Twojego serwera ** //
/** Nazwa bazy danych, której używać ma WordPress */
define('DB_NAME', 'artraaj_pharma');

/** Nazwa użytkownika bazy danych MySQL */
define('DB_USER', 'artraaj_pharma');

/** Hasło użytkownika bazy danych MySQL */
define('DB_PASSWORD', 'ph15MX$@');

/** Nazwa hosta serwera MySQL */
define('DB_HOST', 'sql5.progreso.pl');

/** Kodowanie bazy danych używane do stworzenia tabel w bazie danych. */
define('DB_CHARSET', 'utf8');

/** Typ porównań w bazie danych. Nie zmieniaj tego ustawienia, jeśli masz jakieś wątpliwości. */
define('DB_COLLATE', '');

/**#@+
 * Unikatowe klucze uwierzytelniania i sole.
 *
 * Zmień każdy klucz tak, aby był inną, unikatową frazą!
 * Możesz wygenerować klucze przy pomocy {@link https://api.wordpress.org/secret-key/1.1/salt/ serwisu generującego tajne klucze witryny WordPress.org}
 * Klucze te mogą zostać zmienione w dowolnej chwili, aby uczynić nieważnymi wszelkie istniejące ciasteczka. Uczynienie tego zmusi wszystkich użytkowników do ponownego zalogowania się.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')8NpW}D,LTbKPC;[Y^1[qw/TOw+~~hC:%ag(wJ<D)2Zq${G( xJRaHDEsU8-$E* ');
define('SECURE_AUTH_KEY',  'jp)lMLMWch-@ &cw#yw;K[|m$k0DW2rqruUK@efbd}k~@hDZ[yKsH|_OKe]JN~|.');
define('LOGGED_IN_KEY',    'x%DNvZ#?^vY v:v$%)-q)Ht+9NZHROGN^Gs,ZN{^eP&)zVIJG,%I^sIL-lo=3ND(');
define('NONCE_KEY',        '7vhv$%djp2WKIwSt09~C[ nsmnb7lm60Jh,@cGiHe<dMwaHebj|%v2wQ(B@x<qos');
define('AUTH_SALT',        'JNIli<z:})+}<<XLQ`b%VW}C0H>@9%hsyKtP[=[N^Pvd.5=c9+f<*Vh4%DHQ`k-c');
define('SECURE_AUTH_SALT', 'L#]MY(?DZlCB~-j}e}%)E?7Aqdc!}7iRG(56%,HEr1%mS=Efu0i/<y!&<`y!n|e)');
define('LOGGED_IN_SALT',   'IM-<7&*Dn>/_Q9;*I0#Njk[N0loG8{;YD/:V$AK$4De7pD&uEQN-qlNs5w+M&iGv');
define('NONCE_SALT',       'k&Olmo8k<-jj=5Le{^g<~0OdGmRi;{Bl}qrSHF;OUpCxq7>&lPF^!rILp28y$]b,');

/**#@-*/

/**
 * Prefiks tabel WordPressa w bazie danych.
 *
 * Możesz posiadać kilka instalacji WordPressa w jednej bazie danych,
 * jeżeli nadasz każdej z nich unikalny prefiks.
 * Tylko cyfry, litery i znaki podkreślenia, proszę!
 */
$table_prefix  = 'wp_';

/**
 * Kod lokalizacji WordPressa, domyślnie: angielska.
 *
 * Zmień to ustawienie, aby włączyć tłumaczenie WordPressa.
 * Odpowiedni plik MO z tłumaczeniem na wybrany język musi
 * zostać zainstalowany do katalogu wp-content/languages.
 * Na przykład: zainstaluj plik de_DE.mo do katalogu
 * wp-content/languages i ustaw WPLANG na 'de_DE', aby aktywować
 * obsługę języka niemieckiego.
 */
define('WPLANG', 'pl_PL');

/**
 * Dla programistów: tryb debugowania WordPressa.
 *
 * Zmień wartość tej stałej na true, aby włączyć wyświetlanie ostrzeżeń
 * podczas modyfikowania kodu WordPressa.
 * Wielce zalecane jest, aby twórcy wtyczek oraz motywów używali
 * WP_DEBUG w miejscach pracy nad nimi.
 */
define('WP_DEBUG', false);

/* To wszystko, zakończ edycję w tym miejscu! Miłego blogowania! */

/** Absolutna ścieżka do katalogu WordPressa. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ustawia zmienne WordPressa i dołączane pliki. */
require_once(ABSPATH . 'wp-settings.php');
