<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'phar:///home/khb-core/current/www/data/Hacktoberfest/php-structure/php-structure-check/vendor/phpstan/phpstan/phpstan/vendor/ondrejmirtes/better-reflection/src/SourceLocator/SourceStubber/../../../../../jetbrains/phpstorm-stubs/json/json.stub-1603454189',
   'data' => 
  array (
    'ce22f9e9c13f3d921a6a92b72bbfea45' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Objects implementing JsonSerializable
 * can customize their JSON representation when encoded with
 * <b>json_encode</b>.
 * @link https://php.net/manual/en/class.jsonserializable.php
 * @since 5.4
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'JsonSerializable',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '29e58b895d17147532984fbb53e5796f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * Specify data which should be serialized to JSON
	 * @link https://php.net/manual/en/jsonserializable.jsonserialize.php
	 * @return mixed data which can be serialized by <b>json_encode</b>,
	 * which is a value of any type other than a resource.
	 * @since 5.4
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'JsonSerializable',
         'functionName' => 'jsonSerialize',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '90161977e0da9b179a049909480aa74d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param int $depth [optional]
	 * @param int $options [optional]
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'JsonIncrementalParser',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e5a9c15a6af0cd7b9a11db28b9b22598' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param string $json
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'JsonIncrementalParser',
         'functionName' => 'parse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '31d9f61dce3f8f3bcfee5f3db84db7ff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param string $filename
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'JsonIncrementalParser',
         'functionName' => 'parseFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '500a4b99bd26f8329fb7c9c4fe295581' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
	 * @param int $options [optional]
	 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'JsonIncrementalParser',
         'functionName' => 'get',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c8abc9f12d1c58d1e3bd5bc8b94307e6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * (PHP 5 &gt;= 5.2.0, PECL json &gt;= 1.2.0)<br/>
 * Returns the JSON representation of a value
 * @link https://php.net/manual/en/function.json-encode.php
 * @param mixed $value <p>
 * The <i>value</i> being encoded. Can be any type except
 * a resource.
 * </p>
 * <p>
 * All string data must be UTF-8 encoded.
 * </p>
 * <p>PHP implements a superset of
 * JSON - it will also encode and decode scalar types and <b>NULL</b>. The JSON standard
 * only supports these values when they are nested inside an array or an object.
 * </p>
 * @param int $flags [optional] <p>
 * Bitmask consisting of <b>JSON_HEX_QUOT</b>,
 * <b>JSON_HEX_TAG</b>,
 * <b>JSON_HEX_AMP</b>,
 * <b>JSON_HEX_APOS</b>,
 * <b>JSON_NUMERIC_CHECK</b>,
 * <b>JSON_PRETTY_PRINT</b>,
 * <b>JSON_UNESCAPED_SLASHES</b>,
 * <b>JSON_FORCE_OBJECT</b>,
 * <b>JSON_UNESCAPED_UNICODE</b>.
 * <b>JSON_THROW_ON_ERROR</b> The behaviour of these
 * constants is described on
 * the JSON constants page.
 * </p>
 * @param int $depth [optional] <p>
 * Set the maximum depth. Must be greater than zero.
 * </p>
 * @return string|false a JSON encoded string on success or <b>FALSE</b> on failure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'json_encode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '449514c61c5f2f7fa871127098ec7c0a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * (PHP 5 &gt;= 5.2.0, PECL json &gt;= 1.2.0)<br/>
 * Decodes a JSON string
 * @link https://php.net/manual/en/function.json-decode.php
 * @param string $json <p>
 * The <i>json</i> string being decoded.
 * </p>
 * <p>
 * This function only works with UTF-8 encoded strings.
 * </p>
 * <p>PHP implements a superset of
 * JSON - it will also encode and decode scalar types and <b>NULL</b>. The JSON standard
 * only supports these values when they are nested inside an array or an object.
 * </p>
 * @param bool $associative [optional] <p>
 * When <b>TRUE</b>, returned objects will be converted into
 * associative arrays.
 * </p>
 * @param int $depth [optional] <p>
 * User specified recursion depth.
 * </p>
 * @param int $flags [optional] <p>
 * Bitmask of JSON decode options:<br/>
 * {@see JSON_BIGINT_AS_STRING} decodes large integers as their original string value.<br/>
 * {@see JSON_INVALID_UTF8_IGNORE} ignores invalid UTF-8 characters,<br/>
 * {@see JSON_INVALID_UTF8_SUBSTITUTE} converts invalid UTF-8 characters to \\0xfffd,<br/>
 * {@see JSON_OBJECT_AS_ARRAY} decodes JSON objects as PHP array, since 7.2.0 used by default if $assoc parameter is null,<br/>
 * {@see JSON_THROW_ON_ERROR} when passed this flag, the error behaviour of these functions is changed. The global error state is left untouched, and if an error occurs that would otherwise set it, these functions instead throw a JsonException<br/>
 * </p>
 * @return mixed the value encoded in <i>json</i> in appropriate
 * PHP type. Values true, false and
 * null (case-insensitive) are returned as <b>TRUE</b>, <b>FALSE</b>
 * and <b>NULL</b> respectively. <b>NULL</b> is returned if the
 * <i>json</i> cannot be decoded or if the encoded
 * data is deeper than the recursion limit.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'json_decode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fe9dea59ebc7afcfc71c9d2f6491a670' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns the last error occurred
 * @link https://php.net/manual/en/function.json-last-error.php
 * @return int an integer, the value can be one of the following
 * constants:
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'json_last_error',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0f9953b4f9f1c7b62993e7e712052979' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns the error string of the last json_encode() or json_decode() call, which did not specify <b>JSON_THROW_ON_ERROR</b>.
 * @link https://php.net/manual/en/function.json-last-error-msg.php
 * @return string|false Returns the error message on success, "No error" if no error has occurred, or FALSE on failure.
 * @since 5.5
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'json_last_error_msg',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c7c9aad12659bc0039fc684a91415463' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * All &lt; and &gt; are converted to \\u003C and \\u003E.
 * @link https://php.net/manual/en/json.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e2fe476b57f64565c100b1dfa213eb44' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * All &#38;#38;s are converted to \\u0026.
 * @link https://php.net/manual/en/json.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b868ad4f23e1a17bcef8df07992394f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * All \' are converted to \\u0027.
 * @link https://php.net/manual/en/json.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c343cf1e06e29d453c7cad113d49ce3e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * All " are converted to \\u0022.
 * @link https://php.net/manual/en/json.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '72d6b80d0d83ff3841f6dbff11a25aa7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Outputs an object rather than an array when a non-associative array is
 * used. Especially useful when the recipient of the output is expecting
 * an object and the array is empty.
 * @link https://php.net/manual/en/json.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2723d50a3ee64ce0d2138c67abcc491f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Encodes numeric strings as numbers.
 * @since 5.3.3
 * @link https://php.net/manual/en/json.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '61f09ffa7f1fb4c7e74883aead69bc26' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Don\'t escape /.
 * @since 5.4
 * @link https://php.net/manual/en/json.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f70d6cec7bdef8b8610c51b697bacab3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Use whitespace in returned data to format it.
 * @since 5.4
 * @link https://php.net/manual/en/json.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cf3e16e7f0d092cbd965aee2156c63b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Encode multibyte Unicode characters literally (default is to escape as \\uXXXX).
 * @since 5.4
 * @link https://php.net/manual/en/json.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '00a6b57b7f49c7a5985bcb5011f4c829' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Occurs with underflow or with the modes mismatch.
 * @link https://php.net/manual/en/json.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '99f03068d11b5030bc104cb76104b448' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Control character error, possibly incorrectly encoded.
 * @link https://php.net/manual/en/json.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c4490f9d4fc92288012a9d4a2972633b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Malformed UTF-8 characters, possibly incorrectly encoded. This
 * constant is available as of PHP 5.3.3.
 * @link https://php.net/manual/en/json.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '48c5e0c8c264833e08a032e50d688f13' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * <p>
 * The object or array passed to <b>json_encode</b> include
 * recursive references and cannot be encoded.
 * If the <b>JSON_PARTIAL_OUTPUT_ON_ERROR</b> option was
 * given, <b>NULL</b> will be encoded in the place of the recursive reference.
 * </p>
 * <p>
 * This constant is available as of PHP 5.5.0.
 * </p>
 * @link https://php.net/manual/en/json.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e622864567a826d734a330101523d8fa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * <p>
 * The value passed to <b>json_encode</b> includes either
 * <b>NAN</b>
 * or <b>INF</b>.
 * If the <b>JSON_PARTIAL_OUTPUT_ON_ERROR</b> option was
 * given, 0 will be encoded in the place of these
 * special numbers.
 * </p>
 * <p>
 * This constant is available as of PHP 5.5.0.
 * </p>
 * @link https://php.net/manual/en/json.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e5dd2878ba4d6620e5d3ace4fd1fabcf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * <p>
 * A value of an unsupported type was given to
 * <b>json_encode</b>, such as a resource.
 * If the <b>JSON_PARTIAL_OUTPUT_ON_ERROR</b> option was
 * given, <b>NULL</b> will be encoded in the place of the unsupported value.
 * </p>
 * <p>
 * This constant is available as of PHP 5.5.0.
 * </p>
 * @link https://php.net/manual/en/json.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aba000380fc514bcf8ed5cb6ec19b1cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * No error has occurred.
 * @link https://php.net/manual/en/json.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a93cd495d6f102c63900a97ff10738c7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The maximum stack depth has been exceeded.
 * @link https://php.net/manual/en/json.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bed397cae0655592a280b52beeb24a53' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Syntax error.
 * @link https://php.net/manual/en/json.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e711f2725c35022a3ff7b2b594a541ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Decodes JSON objects as PHP array.
 * @since 5.4
 * @link https://php.net/manual/en/json.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c15abe2acbf36a5e7d15fad55c653d55' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Decodes large integers as their original string value.
 * @since 5.4
 * @link https://php.net/manual/en/json.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1e56e147aff44410def2ec5b7fb2fdba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Ensures that float values are always encoded as a float value.
 * @since 5.6.6
 * @link https://php.net/manual/en/json.constants.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd78895e39b46847a54d4d053bf0ef48d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The line terminators are kept unescaped when JSON_UNESCAPED_UNICODE is supplied.
 * It uses the same behaviour as it was before PHP 7.1 without this constant. Available since PHP 7.1.0.
 * @link https://php.net/manual/en/json.constants.php
 * @since 7.1
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '58698f74339b0e0c0c88ee4d2141fa99' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Ignore invalid UTF-8 characters.
 * @since 7.2
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '27e03666e8bf5db58adaa58a0ea86335' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Convert invalid UTF-8 characters to \\0xfffd (Unicode Character \'REPLACEMENT CHARACTER\').
 * @since 7.2
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cf716571452ba67133db705df6a93821' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A key starting with \\u0000 character was in the string passed to json_decode() when decoding a JSON object into a PHP object.
 * Available since PHP 7.0.0.
 * @link https://php.net/manual/en/json.constants.php
 * @since 7.0
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7377b7b591df3eb23ec0ac8588907e80' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Single unpaired UTF-16 surrogate in unicode escape contained in the JSON string passed to json_encode().
 * Available since PHP 7.0.0.
 * @link https://php.net/manual/en/json.constants.php
 * @since 7.0
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '54316452450462c997431d78f8c91503' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Throws JsonException if an error occurs instead of setting the global error state
 * that is retrieved with json_last_error() and json_last_error_msg().
 *
 * {@see JSON_PARTIAL_OUTPUT_ON_ERROR} takes precedence over JSON_THROW_ON_ERROR.
 * @since 7.3
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '190526aedcf67fea60e80b6cb9cc7c41' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Class JsonException
 *
 * <p>A new flag has been added, JSON_THROW_ON_ERROR, which can be used with
 * json_decode() or json_encode() and causes these functions to throw a
 * JsonException upon an error, instead of setting the global error state that
 * is retrieved with json_last_error(). JSON_PARTIAL_OUTPUT_ON_ERROR takes
 * precedence over <b>JSON_THROW_ON_ERROR</b>.
 * </p>
 *
 * @since 7.3
 * @link https://wiki.php.net/rfc/json_throw_on_error
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'JsonException',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
  ),
));