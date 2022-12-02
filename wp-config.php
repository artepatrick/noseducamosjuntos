<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'artepatrick');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'artepatrick');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'arte_patrick');

/** Nome do host do MySQL */
define('DB_HOST', 'mysql380.umbler.com');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ',,=#WSPs[Sj}Ndwl X|@~[_^Y.~xc#[|pU(7j479{}GZ0&6;<ll0^sqA{KW#P8N.');
define('SECURE_AUTH_KEY',  'eR&bb8 N<jn_nkl%QJMfn4+9+>ZFS9!fo|Hs*3Y{Q]_jaa`C2Y<t;J[3x.(JCjqi');
define('LOGGED_IN_KEY',    '}9_WtCq!Cb_tn:1G6A&uj8gk||%|PIRPe0Hj8IdhDsJ+lqR=z{K>fef3P>V&~/|e');
define('NONCE_KEY',        'uypHqPWNP>m<zDxiv[)R@x?paUZJq-/1FV:a,HL-GqRFl(ljW<nR:_oAd_=1p!(7');
define('AUTH_SALT',        ')9#qd0o%0V_/N3dsNnps;ZT/goX<@WkyP3M/$-V6FS9|D0d~^{ZR;}j]~RJf7[rG');
define('SECURE_AUTH_SALT', 'D:.(x*HEL2A-kBY&!FX>!oYdF8*mQ=ZO3y;nfco<p)0vxuD:LyYO<gZ-.[`YW_ =');
define('LOGGED_IN_SALT',   'f`twLYmwYZLP;-Q%TG.r687T#L*Mu9NAuPI5noG#8H0oAn,5F[itWI~3Y>{3-A~0');
define('NONCE_SALT',       '5FS?>_d;;kun-Hk)YfQUY8zXTmN(RM>L1+^[*+6DC1CfeMNs6-yz$w3zin;VRaMG');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');

define('DISALLOW_FILE_EDIT', true);
define('DISALLOW_FILE_MODS', true);