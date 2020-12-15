<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'alpha' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<i(*iu[=kXTz4tY?2*qsben:+|~2BV?u>e#*ok0#e<hceFV/5Sq)C)kz&7iVav)1' );
define( 'SECURE_AUTH_KEY',  '8tjd1B|vo<?Y1u,DcS~ik@p.p7yq3Rv?`u{QxusQ|6i,_Wj[mht:NE2dplUvL&H@' );
define( 'LOGGED_IN_KEY',    'aZW8;x0>,B-j&GJwNm>5Z|23Q`pof5hp]Vi+(bX`SX3/!;vp(}Tm#L}M3zUD$e#H' );
define( 'NONCE_KEY',        'GAP;b0 q5 0;RQRr( ~7:05$cani1{$l6mS-RyCwAY+#S:|xz;AG4>h=72-Mp@jT' );
define( 'AUTH_SALT',        '.kg@TUlffOHsxClGzBx)M!NyRZ.yE#UJzZ<}2J1g^y`&T]+-!.w}Gs0v(LB_GPny' );
define( 'SECURE_AUTH_SALT', 'SR?9;?V.7FsFBl-r-dzE{$Fi_eshq>hLGY8;BaL,{c^4Sj;Z,zOAT[z~w+w]UIz(' );
define( 'LOGGED_IN_SALT',   'g_/a;o7UJSbv%mIdHRfFQJPuxF8fIVk0l%9/>hHfQHYO5t(ILS]~:B#qjhe6[x]*' );
define( 'NONCE_SALT',       'fx[-]?ObRuA|mX?;/?p-/Fq6>dh95.:X@hD:J,h-Z*dgRyz;Y)! %p}K/SwqLQWN' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
