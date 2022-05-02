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
define( 'DB_NAME', 'desafioshinier' );

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
define( 'AUTH_KEY',         '~Gn3#y,#.+-DtybK/h$N@zRfoy+/dl`>W.x0TqdU}Q*/2BZBLb[+&:m5q!G9;,8{' );
define( 'SECURE_AUTH_KEY',  'wc_G)GWd1D4F;,Q%4tEV2G!AOkRn)03dK.xp;6TL|P;fJp}$  c_`T}9(E5n]Fjj' );
define( 'LOGGED_IN_KEY',    'mrF98mV!2lhxEVWmB~jgfR nkR1[O@Dq}jVYbp2K{hN@7*1&_TZe0|AssOq<q#&}' );
define( 'NONCE_KEY',        'D+[4]dhphPllN2j}V2#!%(-_6Zv1k{}k(xIsT[d<1G*zQD/sv)/_1>p2Xyc%2Es!' );
define( 'AUTH_SALT',        '4wbc`mMzcE19>^H_D){=o:JGMCa?J-})q|E[W9H<Gh_;u[UvR AG 0[-W.V<+C_@' );
define( 'SECURE_AUTH_SALT', 'Pyx6J>MmKUA2{!yvepSciQIA/DVleG@^Ctx[e/!6pO`QXVglqP,poN6R>cIi>5{Z' );
define( 'LOGGED_IN_SALT',   '7~:@>#UC+i)S):P>(X{C53a^<K_p~P<p^3}.>p)AX@z?ug7d2yI5X9l&bDNC|PxR' );
define( 'NONCE_SALT',       '.]lk,Ui-6dXCdW=az15LzDxDZ)A<O{=Cfm<onIX:k(^~IlxYYRR?*M4f}>Dz}Uls' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
