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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'db_wp' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'admin1234' );

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
define( 'AUTH_KEY',         '#Zd6 ~yLch_y{2Z.S$Fw~}iXC:|mVk*Fiu(-`e[IR6E$&Wkm%z$?GS6l:MVjK:R-' );
define( 'SECURE_AUTH_KEY',  '{UF,ek6]%MA7YUB*v3u;t6.YlK1C1b@IbT?$6hw)|Zc2[:iHX}}H|W!+jC-je@Mf' );
define( 'LOGGED_IN_KEY',    '66$|-K>le/{^/sK9sBJ>Whrv7jJA$z*^+DGPr|<ehl6ZFv4;_t|<5t|~)0[E3^IB' );
define( 'NONCE_KEY',        '~>Q0]xSa_:j0fD?o4m,[aYi`Y?ZfZiz,@h`6GRvymV@W6/wphh.4VnA:wmaclWj)' );
define( 'AUTH_SALT',        't^&`@YvDxQZ/z0gro^6XBNoC(G]mj0g(U+B:=BdHQ!G]A-&mv,11H_p[T<35{S0s' );
define( 'SECURE_AUTH_SALT', 'Day=IYModjQ4M#Y,>jk_J1L$?[!)<j<T^PJKRAl3W;)T(kv/x /cC-dLj1t:*J5Y' );
define( 'LOGGED_IN_SALT',   '~F[##YA2<DshA>]d^|cmQjQYKYFm;|Q$fptuF1XXhl4^@Va)TqfA]631T7@)dGJ>' );
define( 'NONCE_SALT',       'oNTQ6[5};9^1%?.M~uy>/y}d{Jd!Nu#Ah5OR{zYLGNnFP20_ge%V4PND[0Ri*(]d' );

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
