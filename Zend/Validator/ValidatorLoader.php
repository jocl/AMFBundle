<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Validator
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */

namespace Tecbot\AMFBundle\Zend\Validator;

use Tecbot\AMFBundle\Zend\Loader\PluginClassLoader;

/**
 * Plugin Class Loader implementation for validators.
 *
 * @category   Zend
 * @package    Zend_Validator
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class ValidatorLoader extends PluginClassLoader
{
    /**
     * @var array Pre-aliased filter 
     */
    protected $plugins = array(
        'alnum'                        => 'Zend\Validator\Alnum',
        'alpha'                        => 'Zend\Validator\Alpha',
        'barcode_code_25_interleaved'  => 'Zend\Validator\Barcode\Code25interleaved',
        'barcode_code25_interleaved'   => 'Zend\Validator\Barcode\Code25interleaved',
        'barcode\\code_25_interleaved' => 'Zend\Validator\Barcode\Code25interleaved',
        'barcode\\code25_interleaved'  => 'Zend\Validator\Barcode\Code25interleaved',
        'barcode_code_25'              => 'Zend\Validator\Barcode\Code25',
        'barcode_code25'               => 'Zend\Validator\Barcode\Code25',
        'barcode\\code_25'             => 'Zend\Validator\Barcode\Code25',
        'barcode\\code25'              => 'Zend\Validator\Barcode\Code25',
        'barcode_code_39_ext'          => 'Zend\Validator\Barcode\Code39ext',
        'barcode_code39_ext'           => 'Zend\Validator\Barcode\Code39ext',
        'barcode\\code_39_ext'         => 'Zend\Validator\Barcode\Code39ext',
        'barcode\\code39_ext'          => 'Zend\Validator\Barcode\Code39ext',
        'barcode_code_39'              => 'Zend\Validator\Barcode\Code39',
        'barcode_code39'               => 'Zend\Validator\Barcode\Code39',
        'barcode\\code_39'             => 'Zend\Validator\Barcode\Code39',
        'barcode\\code39'              => 'Zend\Validator\Barcode\Code39',
        'barcode_code_93_ext'          => 'Zend\Validator\Barcode\Code93ext',
        'barcode_code93_ext'           => 'Zend\Validator\Barcode\Code93ext',
        'barcode\\code_93_ext'         => 'Zend\Validator\Barcode\Code93ext',
        'barcode\\code93_ext'          => 'Zend\Validator\Barcode\Code93ext',
        'barcode_code_93'              => 'Zend\Validator\Barcode\Code93',
        'barcode_code93'               => 'Zend\Validator\Barcode\Code93',
        'barcode\\code_93'             => 'Zend\Validator\Barcode\Code93',
        'barcode\\code93'              => 'Zend\Validator\Barcode\Code93',
        'barcode_ean_12'               => 'Zend\Validator\Barcode\Ean12',
        'barcode_ean12'                => 'Zend\Validator\Barcode\Ean12',
        'barcode\\ean_12'              => 'Zend\Validator\Barcode\Ean12',
        'barcode\\ean12'               => 'Zend\Validator\Barcode\Ean12',
        'barcode_ean_13'               => 'Zend\Validator\Barcode\Ean13',
        'barcode_ean13'                => 'Zend\Validator\Barcode\Ean13',
        'barcode\\ean_13'              => 'Zend\Validator\Barcode\Ean13',
        'barcode\\ean13'               => 'Zend\Validator\Barcode\Ean13',
        'barcode_ean_14'               => 'Zend\Validator\Barcode\Ean14',
        'barcode_ean14'                => 'Zend\Validator\Barcode\Ean14',
        'barcode\\ean_14'              => 'Zend\Validator\Barcode\Ean14',
        'barcode\\ean14'               => 'Zend\Validator\Barcode\Ean14',
        'barcode_ean_18'               => 'Zend\Validator\Barcode\Ean18',
        'barcode_ean18'                => 'Zend\Validator\Barcode\Ean18',
        'barcode\\ean_18'              => 'Zend\Validator\Barcode\Ean18',
        'barcode\\ean18'               => 'Zend\Validator\Barcode\Ean18',
        'barcode_ean_2'                => 'Zend\Validator\Barcode\Ean2',
        'barcode_ean2'                 => 'Zend\Validator\Barcode\Ean2',
        'barcode\\ean_2'               => 'Zend\Validator\Barcode\Ean2',
        'barcode\\ean2'                => 'Zend\Validator\Barcode\Ean2',
        'barcode_ean_5'                => 'Zend\Validator\Barcode\Ean5',
        'barcode_ean5'                 => 'Zend\Validator\Barcode\Ean5',
        'barcode\\ean_5'               => 'Zend\Validator\Barcode\Ean5',
        'barcode\\ean5'                => 'Zend\Validator\Barcode\Ean5',
        'barcode_ean_8'                => 'Zend\Validator\Barcode\Ean8',
        'barcode_ean8'                 => 'Zend\Validator\Barcode\Ean8',
        'barcode\\ean_8'               => 'Zend\Validator\Barcode\Ean8',
        'barcode\\ean8'                => 'Zend\Validator\Barcode\Ean8',
        'barcode_gtin_12'              => 'Zend\Validator\Barcode\Gtin12',
        'barcode_gtin12'               => 'Zend\Validator\Barcode\Gtin12',
        'barcode\\gtin_12'             => 'Zend\Validator\Barcode\Gtin12',
        'barcode\\gtin12'              => 'Zend\Validator\Barcode\Gtin12',
        'barcode_gtin_13'              => 'Zend\Validator\Barcode\Gtin13',
        'barcode_gtin13'               => 'Zend\Validator\Barcode\Gtin13',
        'barcode\\gtin_13'             => 'Zend\Validator\Barcode\Gtin13',
        'barcode\\gtin13'              => 'Zend\Validator\Barcode\Gtin13',
        'barcode_gtin_14'              => 'Zend\Validator\Barcode\Gtin14',
        'barcode_gtin14'               => 'Zend\Validator\Barcode\Gtin14',
        'barcode\\gtin_14'             => 'Zend\Validator\Barcode\Gtin14',
        'barcode\\gtin14'              => 'Zend\Validator\Barcode\Gtin14',
        'barcode_ident_code'           => 'Zend\Validator\Barcode\Identcode',
        'barcode_identcode'            => 'Zend\Validator\Barcode\Identcode',
        'barcode\\ident_code'          => 'Zend\Validator\Barcode\Identcode',
        'barcode\\identcode'           => 'Zend\Validator\Barcode\Identcode',
        'barcode_intelligent_mail'     => 'Zend\Validator\Barcode\Intelligentmail',
        'barcode_intelligentmail'      => 'Zend\Validator\Barcode\Intelligentmail',
        'barcode\\intelligent_mail'    => 'Zend\Validator\Barcode\Intelligentmail',
        'barcode\\intelligentmail'     => 'Zend\Validator\Barcode\Intelligentmail',
        'barcode_issn'                 => 'Zend\Validator\Barcode\Issn',
        'barcode\\issn'                => 'Zend\Validator\Barcode\Issn',
        'barcode_itf_14'               => 'Zend\Validator\Barcode\Itf14',
        'barcode_itf14'                => 'Zend\Validator\Barcode\Itf14',
        'barcode\\itf_14'              => 'Zend\Validator\Barcode\Itf14',
        'barcode\\itf14'               => 'Zend\Validator\Barcode\Itf14',
        'barcode_leit_code'            => 'Zend\Validator\Barcode\Leitcode',
        'barcode_leitcode'             => 'Zend\Validator\Barcode\Leitcode',
        'barcode\\leit_code'           => 'Zend\Validator\Barcode\Leitcode',
        'barcode\\leitcode'            => 'Zend\Validator\Barcode\Leitcode',
        'barcode_planet'               => 'Zend\Validator\Barcode\Planet',
        'barcode\\planet'              => 'Zend\Validator\Barcode\Planet',
        'barcode_post_net'             => 'Zend\Validator\Barcode\Postnet',
        'barcode_postnet'              => 'Zend\Validator\Barcode\Postnet',
        'barcode\\post_net'            => 'Zend\Validator\Barcode\Postnet',
        'barcode\\postnet'             => 'Zend\Validator\Barcode\Postnet',
        'barcode_royal_mail'           => 'Zend\Validator\Barcode\Royalmail',
        'barcode_royalmail'            => 'Zend\Validator\Barcode\Royalmail',
        'barcode\\royal_mail'          => 'Zend\Validator\Barcode\Royalmail',
        'barcode\\royalmail'           => 'Zend\Validator\Barcode\Royalmail',
        'barcode_sscc'                 => 'Zend\Validator\Barcode\Sscc',
        'barcode\\sscc'                => 'Zend\Validator\Barcode\Sscc',
        'barcode_upca'                 => 'Zend\Validator\Barcode\Upca',
        'barcode\\upca'                => 'Zend\Validator\Barcode\Upca',
        'barcode_upce'                 => 'Zend\Validator\Barcode\Upce',
        'barcode\\upce'                => 'Zend\Validator\Barcode\Upce',
        'barcode'                      => 'Zend\Validator\Barcode',
        'between'                      => 'Zend\Validator\Between',
        'callback'                     => 'Zend\Validator\Callback',
        'credit_card'                  => 'Zend\Validator\CreditCard',
        'creditcard'                   => 'Zend\Validator\CreditCard',
        'date'                         => 'Zend\Validator\Date',
        'db_\\no_record_exists'        => 'Zend\Validator\Db\NoRecordExists',
        'db_\\norecordexists'          => 'Zend\Validator\Db\NoRecordExists',
        'db\\no_record_exists'         => 'Zend\Validator\Db\NoRecordExists',
        'db\\norecordexists'           => 'Zend\Validator\Db\NoRecordExists',
        'db_\\record_exists'           => 'Zend\Validator\Db\RecordExists',
        'db_\\recordexists'            => 'Zend\Validator\Db\RecordExists',
        'db\\record_exists'            => 'Zend\Validator\Db\RecordExists',
        'db\\recordexists'             => 'Zend\Validator\Db\RecordExists',
        'digits'                       => 'Zend\Validator\Digits',
        'email_address'                => 'Zend\Validator\EmailAddress',
        'emailaddress'                 => 'Zend\Validator\EmailAddress',
        'file_count'                   => 'Zend\Validator\File\Count',
        'file\\count'                  => 'Zend\Validator\File\Count',
        'file_crc_32'                  => 'Zend\Validator\File\Crc32',
        'file_crc32'                   => 'Zend\Validator\File\Crc32',
        'file\\crc_32'                 => 'Zend\Validator\File\Crc32',
        'file\\crc32'                  => 'Zend\Validator\File\Crc32',
        'file_exclude_extension'       => 'Zend\Validator\File\ExcludeExtension',
        'file_excludeextension'        => 'Zend\Validator\File\ExcludeExtension',
        'file\\exclude_extension'      => 'Zend\Validator\File\ExcludeExtension',
        'file\\excludeextension'       => 'Zend\Validator\File\ExcludeExtension',
        'file_exclude_mime_type'       => 'Zend\Validator\File\ExcludeMimeType',
        'file_exclude_mimetype'        => 'Zend\Validator\File\ExcludeMimeType',
        'file_excludemimetype'         => 'Zend\Validator\File\ExcludeMimeType',
        'file\\exclude_mime_type'      => 'Zend\Validator\File\ExcludeMimeType',
        'file\\exclude_mimetype'       => 'Zend\Validator\File\ExcludeMimeType',
        'file\\excludemimetype'        => 'Zend\Validator\File\ExcludeMimeType',
        'file_exists'                  => 'Zend\Validator\File\Exists',
        'file\\exists'                 => 'Zend\Validator\File\Exists',
        'file_extension'               => 'Zend\Validator\File\Extension',
        'file\\extension'              => 'Zend\Validator\File\Extension',
        'file_files_size'              => 'Zend\Validator\File\FilesSize',
        'file_filessize'               => 'Zend\Validator\File\FilesSize',
        'file\\files_size'             => 'Zend\Validator\File\FilesSize',
        'file\\filessize'              => 'Zend\Validator\File\FilesSize',
        'file_hash'                    => 'Zend\Validator\File\Hash',
        'file\\hash'                   => 'Zend\Validator\File\Hash',
        'file_image_size'              => 'Zend\Validator\File\ImageSize',
        'file_imagesize'               => 'Zend\Validator\File\ImageSize',
        'file\\image_size'             => 'Zend\Validator\File\ImageSize',
        'file\\imagesize'              => 'Zend\Validator\File\ImageSize',
        'file_is_compressed'           => 'Zend\Validator\File\IsCompressed',
        'file_iscompressed'            => 'Zend\Validator\File\IsCompressed',
        'file\\is_compressed'          => 'Zend\Validator\File\IsCompressed',
        'file\\iscompressed'           => 'Zend\Validator\File\IsCompressed',
        'file_is_image'                => 'Zend\Validator\File\IsImage',
        'file_isimage'                 => 'Zend\Validator\File\IsImage',
        'file\\is_image'               => 'Zend\Validator\File\IsImage',
        'file\\isimage'                => 'Zend\Validator\File\IsImage',
        'file_md5'                     => 'Zend\Validator\File\Md5',
        'file\\md5'                    => 'Zend\Validator\File\Md5',
        'file_mime_type'               => 'Zend\Validator\File\MimeType',
        'file_mimetype'                => 'Zend\Validator\File\MimeType',
        'file\\mime_type'              => 'Zend\Validator\File\MimeType',
        'file\\mimetype'               => 'Zend\Validator\File\MimeType',
        'file_not_exists'              => 'Zend\Validator\File\NotExists',
        'file_notexists'               => 'Zend\Validator\File\NotExists',
        'file\\not_exists'             => 'Zend\Validator\File\NotExists',
        'file\\notexists'              => 'Zend\Validator\File\NotExists',
        'file_sha1'                    => 'Zend\Validator\File\Sha1',
        'file\\sha1'                   => 'Zend\Validator\File\Sha1',
        'file_size'                    => 'Zend\Validator\File\Size',
        'file\\size'                   => 'Zend\Validator\File\Size',
        'file_upload'                  => 'Zend\Validator\File\Upload',
        'file\\upload'                 => 'Zend\Validator\File\Upload',
        'file_word_count'              => 'Zend\Validator\File\WordCount',
        'file_wordcount'               => 'Zend\Validator\File\WordCount',
        'file\\word_count'             => 'Zend\Validator\File\WordCount',
        'file\\wordcount'              => 'Zend\Validator\File\WordCount',
        'float'                        => 'Zend\Validator\Float',
        'greater_than'                 => 'Zend\Validator\GreaterThan',
        'greaterthan'                  => 'Zend\Validator\GreaterThan',
        'hex'                          => 'Zend\Validator\Hex',
        'hostname'                     => 'Zend\Validator\Hostname',
        'iban'                         => 'Zend\Validator\Iban',
        'identical'                    => 'Zend\Validator\Identical',
        'in_array'                     => 'Zend\Validator\InArray',
        'inarray'                      => 'Zend\Validator\InArray',
        'int'                          => 'Zend\Validator\Int',
        'ip'                           => 'Zend\Validator\Ip',
        'isbn'                         => 'Zend\Validator\Isbn',
        'less_than'                    => 'Zend\Validator\LessThan',
        'lessthan'                     => 'Zend\Validator\LessThan',
        'not_empty'                    => 'Zend\Validator\NotEmpty',
        'notempty'                     => 'Zend\Validator\NotEmpty',
        'post_code'                    => 'Zend\Validator\PostCode',
        'postcode'                     => 'Zend\Validator\PostCode',
        'regex'                        => 'Zend\Validator\Regex',
        'sitemap_change_freq'          => 'Zend\Validator\Sitemap\Changefreq',
        'sitemap_changefreq'           => 'Zend\Validator\Sitemap\Changefreq',
        'sitemap\\change_freq'         => 'Zend\Validator\Sitemap\Changefreq',
        'sitemap\\changefreq'          => 'Zend\Validator\Sitemap\Changefreq',
        'sitemap_last_mod'             => 'Zend\Validator\Sitemap\Lastmod',
        'sitemap_lastmod'              => 'Zend\Validator\Sitemap\Lastmod',
        'sitemap\\last_mod'            => 'Zend\Validator\Sitemap\Lastmod',
        'sitemap\\lastmod'             => 'Zend\Validator\Sitemap\Lastmod',
        'sitemap_loc'                  => 'Zend\Validator\Sitemap\Loc',
        'sitemap\\loc'                 => 'Zend\Validator\Sitemap\Loc',
        'sitemap_priority'             => 'Zend\Validator\Sitemap\Priority',
        'sitemap\\priority'            => 'Zend\Validator\Sitemap\Priority',
        'string_length'                => 'Zend\Validator\StringLength',
        'stringlength'                 => 'Zend\Validator\StringLength',
    );
}
