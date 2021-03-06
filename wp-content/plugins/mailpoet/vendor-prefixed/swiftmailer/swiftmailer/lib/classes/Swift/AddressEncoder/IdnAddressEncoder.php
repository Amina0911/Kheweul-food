<?php
namespace MailPoetVendor;
if (!defined('ABSPATH')) exit;
class Swift_AddressEncoder_IdnAddressEncoder implements Swift_AddressEncoder
{
 public function encodeString(string $address) : string
 {
 $i = \strrpos($address, '@');
 if (\false !== $i) {
 $local = \substr($address, 0, $i);
 $domain = \substr($address, $i + 1);
 if (\preg_match('/[^\\x00-\\x7F]/', $local)) {
 throw new Swift_AddressEncoderException('Non-ASCII characters not supported in local-part', $address);
 }
 if (\preg_match('/[^\\x00-\\x7F]/', $domain)) {
 $address = \sprintf('%s@%s', $local, \idn_to_ascii($domain, 0, \INTL_IDNA_VARIANT_UTS46));
 }
 }
 return $address;
 }
}
