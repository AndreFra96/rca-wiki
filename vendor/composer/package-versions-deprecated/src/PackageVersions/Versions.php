<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'mediawiki/core';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/semver' => '1.7.2@647490bbcaf7fc4891c58f47b825eb99d19c377a',
  'cssjanus/cssjanus' => 'v1.3.0@93db9fb39c2f9bcf287715ae254c088b14a77799',
  'guzzlehttp/guzzle' => '6.5.5@9d4290de1cfd701f38099ef7e183b64b4b7b0c5e',
  'guzzlehttp/promises' => '1.4.1@8e7d04f1f6450fef59366c399cfad4b9383aa30d',
  'guzzlehttp/psr7' => '1.8.1@35ea11d335fd638b5882ff1725228b3d35496ab1',
  'liuggio/statsd-php-client' => 'v1.0.18@c42e6d6687b7b2d7683186ec7f4f03351cc3dbca',
  'oojs/oojs-ui' => 'v0.39.3@517e59fe02a6857c35220094b8ece47800a7344e',
  'pear/console_getopt' => 'v1.4.3@a41f8d3e668987609178c7c4a9fe48fecac53fa0',
  'pear/mail' => 'v1.4.1@9609ed5e42ac5b221dfd9af85de005c59d418ee7',
  'pear/mail_mime' => '1.10.8@094b39784aa02cef1a1e267a6fdfae0c42b8f2ac',
  'pear/net_smtp' => '1.9.1@ee0e156ab94b37ac7ad10623a4a62f10a2a2d421',
  'pear/net_socket' => 'v1.2.2@bbe6a12bb4f7059dba161f6ddd43f369c0ec8d09',
  'pear/pear-core-minimal' => 'v1.10.10@625a3c429d9b2c1546438679074cac1b089116a7',
  'pear/pear_exception' => 'v1.0.2@b14fbe2ddb0b9f94f5b24cf08783d599f776fff0',
  'pleonasm/bloom-filter' => '1.0.2@4a3292c9f83a778c44271bf4e4f6be1204b87f7b',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'symfony/polyfill-intl-idn' => 'v1.22.1@2d63434d922daf7da8dd863e7907e67ee3031483',
  'symfony/polyfill-intl-normalizer' => 'v1.22.1@43a0283138253ed1d48d352ab6d0bdb3f809f248',
  'symfony/polyfill-php72' => 'v1.22.1@cc6e6f9b39fe8075b3dabfbaf5b5f645ae1340c9',
  'wikimedia/assert' => 'v0.5.0@d8e97f15b8f3d3799899e3d56452d34511be5764',
  'wikimedia/at-ease' => 'v2.0.0@013ac61929797839c80a111a3f1a4710d8248e7a',
  'wikimedia/base-convert' => 'v2.0.1@449f0d0237cf1e0e71faec90680c88d4af6e711d',
  'wikimedia/cdb' => '1.4.1@d49d96232f045311dc1f21bf0d7e40adf82a1f1d',
  'wikimedia/cldr-plural-rule-parser' => 'v1.0.0@2b623a411b1a8efa4363e9fda9da496ab83a5d69',
  'wikimedia/common-passwords' => '0.2.0@b9db612730d427a55e28f4a9b143b87fd72173e0',
  'wikimedia/composer-merge-plugin' => 'v2.0.1@8ca2ed8ab97c8ebce6b39d9943e9909bb4f18912',
  'wikimedia/html-formatter' => '1.0.2@d6241e74d8091cf1fad91a764da5e1ba5f46e785',
  'wikimedia/ip-set' => '2.1.0@f84555041a405f0ea51c64a0c7fb5fac36e99b84',
  'wikimedia/ip-utils' => '1.0.0@c505b99c0dfab12254d64a5e064bddd13cf066ad',
  'wikimedia/less.php' => 'v3.1.0@a486d78b9bd16b72f237fc6093aa56d69ce8bd13',
  'wikimedia/object-factory' => 'v2.1.0@863aee60c8f9d964870b1a119d5d9e904233e1aa',
  'wikimedia/parsoid' => 'v0.12.2@15169a678f9f468ff6465035a32f28e8ec82003f',
  'wikimedia/php-session-serializer' => 'v1.0.7@9382814e701c94358ae02f3260b7ac4951385d83',
  'wikimedia/purtle' => 'v1.0.7@569064c065caae036cd5a685574b6f96f05cfe33',
  'wikimedia/relpath' => '2.1.1@35e701ff16abf461bb8676a9d9177f86fa0b2c94',
  'wikimedia/remex-html' => '2.2.0@7792461b0605b1fcd4bba47bf54cdc64790edb48',
  'wikimedia/running-stat' => 'v1.2.1@60eebada7cc64b7073d90e7d4bab00efaafa0ba9',
  'wikimedia/scoped-callback' => 'v3.0.0@0a480d9a9772634697c77598726cf24606597bd0',
  'wikimedia/services' => '2.0.1@5ef69a8a8b0d2ea115d08469bdab468f58fac820',
  'wikimedia/timestamp' => 'v3.0.0@42ce5586d2189826e28ebcf4cedc96226b6d77e2',
  'wikimedia/utfnormal' => 'v2.0.0@ec1ec7ce9e25cd275c532afd30bb6092a7633990',
  'wikimedia/wait-condition-loop' => 'v1.0.1@0321b8ca6a0f701f96e04e5e8e6d3e244ab05338',
  'wikimedia/wikipeg' => '2.0.5@df47c20859c80923d08ce906c5c7412161ef052f',
  'wikimedia/wrappedstring' => 'v3.2.0@11b01a2286fd377cb15c2f5561e10f56d58f37a9',
  'wikimedia/xmp-reader' => '0.7.0@4b8ab8ea23cc2ccf2530738081cb4e146d55b86b',
  'wikimedia/zest-css' => '1.1.5@bc3346fcf2a93f02a8a6697d98c305c14ef1869f',
  'zordius/lightncandy' => 'v1.2.5@37aa381e0f27d411a630062070c7a5a2174c62e7',
  'composer/package-versions-deprecated' => '1.11.99.1@7413f0b55a051e89485c5cb9f765fe24bb02a7b6',
  'composer/spdx-licenses' => '1.5.3@0c3e51e1880ca149682332770e25977c70cf9dae',
  'composer/xdebug-handler' => '1.4.6@f27e06cd9675801df441b3656569b328e04aa37c',
  'dnoegel/php-xdg-base-dir' => 'v0.1.1@8f8a6e48c5ecb0f991c2fdcf5f154a47d85f9ffd',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/dbal' => '3.0.0@ee6d1260d5cc20ec506455a585945d7bdb98662c',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/sql-formatter' => '1.1.0@5458bdcf176f6a53292e3f0cc73f292d6302fb0f',
  'felixfbecker/advanced-json-rpc' => 'v3.2.0@06f0b06043c7438959dbdeed8bb3f699a19be22e',
  'giorgiosironi/eris' => '0.10.0@d7cbea45ff7c7621d69589ae7f8a82f183673e69',
  'hamcrest/hamcrest-php' => 'v2.0.1@8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
  'johnkary/phpunit-speedtrap' => 'v3.3.0@9ba81d42676da31366c85d3ff8c10a8352d02030',
  'justinrainbow/json-schema' => '5.2.10@2ba9c8c862ecd5510ed16c6340aa9f6eadb4f31b',
  'mediawiki/mediawiki-codesniffer' => 'v34.0.0@a7f2480d022e288d9d8b2db827111996bb53e598',
  'mediawiki/mediawiki-phan-config' => '0.10.6@4bb1607bb41dd00b83ee81f7a4deb7889be16ac1',
  'mediawiki/phan-taint-check-plugin' => '3.2.1@4bc471bd790644398a6749eedd7a841e9a759bd6',
  'microsoft/tolerant-php-parser' => 'v0.0.23@1d76657e3271754515ace52501d3e427eca42ad0',
  'monolog/monolog' => '2.2.0@1cb1cde8e8dd0f70cc0fe51354a59acad9302084',
  'myclabs/deep-copy' => '1.10.2@776f831124e9c62e1a2c601ecc52e776d8bb7220',
  'netresearch/jsonmapper' => 'v2.1.0@e0f1e33a71587aca81be5cffbb9746510e1fe04e',
  'nikic/php-parser' => 'v4.4.0@bd43ec7152eaaab3bd8c6d0aa95ceeb1df8ee120',
  'nmred/kafka-php' => 'v0.1.5@317ad8c208684db8b9e6d2f5bf7f471e89a8b4eb',
  'phan/phan' => '3.2.6@e14110d4bef8643562b02a4003015c2c0dcc9fe4',
  'phar-io/manifest' => '2.0.1@85265efd3af7ba3ca4b2a2c34dbfc5788dd29133',
  'phar-io/version' => '3.1.0@bae7c545bef187884426f042434e561ab1ddb182',
  'php-parallel-lint/php-console-color' => 'v0.3@b6af326b2088f1ad3b264696c9fd590ec395b49e',
  'php-parallel-lint/php-console-highlighter' => 'v0.5@21bf002f077b177f056d8cb455c5ed573adfdbb8',
  'php-parallel-lint/php-parallel-lint' => 'v1.2.0@474f18bc6cc6aca61ca40bfab55139de614e51ca',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'phpspec/prophecy' => '1.13.0@be1996ed8adc35c3fd795488a653f4b518be70ea',
  'phpunit/php-code-coverage' => '7.0.14@bb7c9a210c72e4709cdde67f8b7362f672f2225c',
  'phpunit/php-file-iterator' => '2.0.3@4b49fb70f067272b659ef0174ff9ca40fdaa6357',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '2.1.3@2454ae1765516d20c4ffe103d85a58a9a3bd5662',
  'phpunit/php-token-stream' => '4.0.4@a853a0e183b9db7eed023d7933a858fa1c8d25a3',
  'phpunit/phpunit' => '8.5.15@038d4196d8e8cb405cd5e82cedfe413ad6eef9ef',
  'pimple/pimple' => 'v3.3.1@21e45061c3429b1e06233475cc0e1f6fc774d5b0',
  'psy/psysh' => 'v0.10.4@a8aec1b2981ab66882a01cce36a49b6317dc3560',
  'sabre/event' => '5.1.2@c120bec57c17b6251a496efc82b732418b49d50a',
  'sebastian/code-unit-reverse-lookup' => '1.0.2@1de8cd5c010cb153fcd68b8d0f64606f523f7619',
  'sebastian/comparator' => '3.0.3@1071dfcef776a57013124ff35e1fc41ccd294758',
  'sebastian/diff' => '3.0.3@14f72dd46eaf2f2293cbe79c93cc0bc43161a211',
  'sebastian/environment' => '4.2.4@d47bbbad83711771f167c72d4e3f25f7fcc1f8b0',
  'sebastian/exporter' => '3.1.3@6b853149eab67d4da22291d36f5b0631c0fd856e',
  'sebastian/global-state' => '3.0.1@474fb9edb7ab891665d3bfc6317f42a0a150454b',
  'sebastian/object-enumerator' => '3.0.4@e67f6d32ebd0c749cf9d1dbd9f226c727043cdf2',
  'sebastian/object-reflector' => '1.1.2@9b8772b9cbd456ab45d4a598d2dd1a1bced6363d',
  'sebastian/recursion-context' => '3.0.1@367dcba38d6e1977be014dc4b22f47a484dac7fb',
  'sebastian/resource-operations' => '2.0.2@31d35ca87926450c44eae7e2611d45a7a65ea8b3',
  'sebastian/type' => '1.1.4@0150cfbc4495ed2df3872fb31b26781e4e077eb4',
  'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019',
  'seld/jsonlint' => '1.8.3@9ad6ce79c342fbd44df10ea95511a1b24dee5b57',
  'squizlabs/php_codesniffer' => '3.5.8@9d583721a7157ee997f235f327de038e7ea6dac4',
  'symfony/console' => 'v5.2.6@35f039df40a3b335ebf310f244cb242b3a83ac8d',
  'symfony/polyfill-intl-grapheme' => 'v1.22.1@5601e09b69f26c1828b13b6bb87cb07cddba3170',
  'symfony/polyfill-php73' => 'v1.22.1@a678b42e92f86eca04b7fa4c0f6f19d097fb69e2',
  'symfony/polyfill-php80' => 'v1.22.1@dc3063ba22c2a1fd2f45ed856374d79114998f91',
  'symfony/service-contracts' => 'v2.2.0@d15da7ba4957ffb8f1747218be9e1a121fd298a1',
  'symfony/string' => 'v5.2.6@ad0bd91bce2054103f5eaa18ebeba8d3bc2a0572',
  'symfony/var-dumper' => 'v5.2.6@89412a68ea2e675b4e44f260a5666729f77f668e',
  'symfony/yaml' => 'v5.0.11@29b60e88ff11a45b708115004fdeacab1ee3dd5d',
  'theseer/tokenizer' => '1.2.0@75a63c33a8577608444246075ea0af0d052e452a',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'wikimedia/avro' => 'v1.9.0@b2e0c9d750da03d95ba979215397f62a6121ddea',
  'wikimedia/testing-access-wrapper' => '2.0.0@280e613c76f481f2fe90e0ea22361080b6ab0d65',
  'wmde/hamcrest-html-matchers' => 'v0.1.1@89e15f78c22535891318a4dd7580c63d83c766c6',
  'symfony/polyfill-ctype' => '1.99@',
  'symfony/polyfill-mbstring' => '1.99@',
  'mediawiki/core' => '1.0.0+no-version-set@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
