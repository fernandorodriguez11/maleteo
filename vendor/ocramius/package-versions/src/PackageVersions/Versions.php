<?php

declare(strict_types=1);

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = '__root__';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    public const VERSIONS          = array (
  'doctrine/annotations' => 'v1.8.0@904dca4eb10715b92569fbcd79e201d5c349b6bc',
  'doctrine/cache' => '1.10.0@382e7f4db9a12dc6c19431743a2b096041bcdd62',
  'doctrine/collections' => '1.6.4@6b1e4b2b66f6d6e49983cebfe23a21b7ccc5b0d7',
  'doctrine/common' => 'v2.11.0@b8ca1dcf6b0dc8a2af7a09baac8d0c48345df4ff',
  'doctrine/dbal' => 'v2.10.0@0c9a646775ef549eb0a213a4f9bd4381d9b4d934',
  'doctrine/doctrine-bundle' => '2.0.2@f96fac225563f5b3b4eeb2f80eb982b7f56484d8',
  'doctrine/doctrine-migrations-bundle' => '2.1.2@856437e8de96a70233e1f0cc2352fc8dd15a899d',
  'doctrine/event-manager' => '1.1.0@629572819973f13486371cb611386eb17851e85c',
  'doctrine/inflector' => '1.3.1@ec3a55242203ffa6a4b27c58176da97ff0a7aec1',
  'doctrine/instantiator' => '1.3.0@ae466f726242e637cebdd526a7d991b9433bacf1',
  'doctrine/lexer' => '1.2.0@5242d66dbeb21a30dd8a3e66bf7a73b66e05e1f6',
  'doctrine/migrations' => '2.2.0@8e124252d2f6be1124017d746d5994dd4095d66f',
  'doctrine/orm' => 'v2.7.0@4d763ca4c925f647b248b9fa01b5f47aa3685d62',
  'doctrine/persistence' => '1.3.3@99b196bbd4715a94fa100fac664a351ffa46d6a5',
  'doctrine/reflection' => 'v1.0.0@02538d3f95e88eb397a5f86274deb2c6175c2ab6',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'ocramius/package-versions' => '1.5.1@1d32342b8c1eb27353c8887c366147b4c2da673c',
  'ocramius/proxy-manager' => '2.2.3@4d154742e31c35137d5374c998e8f86b54db2e2f',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/log' => '1.1.2@446d54b4cb6bf489fc9d75f55843658e6f25d801',
  'sensio/framework-extra-bundle' => 'v5.5.1@dfc2c4df9f7d465a65c770e9feb578fe071636f7',
  'symfony/cache' => 'v5.0.1@d8df2c5a3ba88430c559145bc8b944cb578f9d65',
  'symfony/cache-contracts' => 'v2.0.1@23ed8bfc1a4115feca942cb5f1aacdf3dcdf3c16',
  'symfony/config' => 'v5.0.1@c0773efcc2c940ffbc4c34a0dba2836f2cf6dc9c',
  'symfony/console' => 'v5.0.1@dae5ef273d700771168ab889d9f8a19b2d206656',
  'symfony/dependency-injection' => 'v5.0.1@ab20e9076e8f1dfedd3921daf9f7686ad543877f',
  'symfony/doctrine-bridge' => 'v5.0.1@3d43fbcbb56bb3c5a781ee0fb09d85741e22423c',
  'symfony/dotenv' => 'v5.0.1@55a0afb9bf641e4cff66a0bc14918a9d9f6ecf2f',
  'symfony/error-handler' => 'v5.0.1@6ce16a495370e1495cb900e6bc7d769b5a1b8789',
  'symfony/event-dispatcher' => 'v5.0.1@7b738a51645e10f864cc25c24d232fb03f37b475',
  'symfony/event-dispatcher-contracts' => 'v2.0.1@af23c2584d4577d54661c434446fb8fbed6025dd',
  'symfony/filesystem' => 'v5.0.1@1d71f670bc5a07b9ccc97dc44f932177a322d4e6',
  'symfony/finder' => 'v5.0.1@17874dd8ab9a19422028ad56172fb294287a701b',
  'symfony/flex' => 'v1.5.3@59b42aa1d3385a21683601c15e63eb35d2ebe8a4',
  'symfony/form' => 'v5.0.1@62afdbdd7d27e65ec712759b6718ca0164fe74ed',
  'symfony/framework-bundle' => 'v5.0.1@ef6f8cc6a13488f00f18e56dcd49272a538a82f3',
  'symfony/http-foundation' => 'v5.0.1@83eb54b75f5365722d4ccdb6559fb099e799202e',
  'symfony/http-kernel' => 'v5.0.1@82b0584d17f4381c6beaf0b4e55a524720ca45a1',
  'symfony/inflector' => 'v5.0.1@aaeb5e293294070d1b061fa3d7889bac69909320',
  'symfony/intl' => 'v5.0.1@41f910d47883c6ab37087ca4a3332e21e1d682f4',
  'symfony/mime' => 'v5.0.1@0e6a4ced216e49d457eddcefb61132173a876d79',
  'symfony/options-resolver' => 'v5.0.1@1ad3d0ffc00cc1990e5c9c7bb6b81578ec3f5f68',
  'symfony/orm-pack' => 'v1.0.7@c57f5e05232ca40626eb9fa52a32bc8565e9231c',
  'symfony/polyfill-intl-icu' => 'v1.13.1@b3dffd68afa61ca70f2327f2dd9bbeb6aa53d70b',
  'symfony/polyfill-intl-idn' => 'v1.13.1@6f9c239e61e1b0c9229a28ff89a812dc449c3d46',
  'symfony/polyfill-mbstring' => 'v1.13.1@7b4aab9743c30be783b73de055d24a39cf4b954f',
  'symfony/polyfill-php73' => 'v1.13.1@4b0e2222c55a25b4541305a053013d5647d3a25f',
  'symfony/property-access' => 'v5.0.1@542a4f041c4bcbefdecbd537122959d0c388ecd9',
  'symfony/routing' => 'v5.0.1@145b6f63a0cc781c3300f48d9f250f9aded1e416',
  'symfony/service-contracts' => 'v2.0.1@144c5e51266b281231e947b51223ba14acf1a749',
  'symfony/stopwatch' => 'v5.0.1@d410282956706e0b08681a5527447a8e6b6f421e',
  'symfony/translation-contracts' => 'v2.0.1@8cc682ac458d75557203b2f2f14b0b92e1c744ed',
  'symfony/twig-bridge' => 'v5.0.1@09b1efdbedcba4953b448d8696333a1626db26d6',
  'symfony/twig-bundle' => 'v5.0.1@0294caa1eebd0dd89c305f35181fc113a25fe1f9',
  'symfony/twig-pack' => 'v1.0.0@8b278ea4b61fba7c051f172aacae6d87ef4be0e0',
  'symfony/var-dumper' => 'v5.0.1@a4862009387721e155be6dc115061f42ee209205',
  'symfony/var-exporter' => 'v5.0.1@1b9653e68d5b701bf6d9c91bdd3660078c9f4f28',
  'symfony/yaml' => 'v5.0.1@51b684480184fa767b97e28eaca67664e48dd3e9',
  'twig/extra-bundle' => 'v3.0.0@c56821429490e351003a09b7ed0c917feec2355f',
  'twig/twig' => 'v3.0.0@9b58bb8ac7a41d72fbb5a7dc643e07923e5ccc26',
  'zendframework/zend-code' => '3.4.1@268040548f92c2bfcba164421c1add2ba43abaaa',
  'zendframework/zend-eventmanager' => '3.2.1@a5e2583a211f73604691586b8406ff7296a946dd',
  'nikic/php-parser' => 'v4.3.0@9a9981c347c5c49d6dfe5cf826bb882b824080dc',
  'symfony/maker-bundle' => 'v1.14.3@c864e7f9b8d1e1f5f60acc3beda11299f637aded',
  'paragonie/random_compat' => '2.*@eebb04bc1d44864a98e261909b8a0f14bb647560',
  'symfony/polyfill-ctype' => '*@eebb04bc1d44864a98e261909b8a0f14bb647560',
  'symfony/polyfill-iconv' => '*@eebb04bc1d44864a98e261909b8a0f14bb647560',
  'symfony/polyfill-php72' => '*@eebb04bc1d44864a98e261909b8a0f14bb647560',
  'symfony/polyfill-php71' => '*@eebb04bc1d44864a98e261909b8a0f14bb647560',
  'symfony/polyfill-php70' => '*@eebb04bc1d44864a98e261909b8a0f14bb647560',
  'symfony/polyfill-php56' => '*@eebb04bc1d44864a98e261909b8a0f14bb647560',
  '__root__' => 'dev-master@eebb04bc1d44864a98e261909b8a0f14bb647560',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}