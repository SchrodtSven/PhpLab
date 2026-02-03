<?php
/**
 * Implements PHP MB functions usable as public methods of StringClass instances
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.23
 * @since 2025-08-12
 */

namespace SchrodtSven\PhpLab\Types\Dry;
use SchrodtSven\PhpLab\Types\ListClass;

trait MultiByteStringTrait
{
    
        /**
         * Converting case in current string content - available modes:
         * 
         *  - \MB_CASE_UPPER, 
         *  - \MB_CASE_LOWER,
         *  - \MB_CASE_TITLE,
         *  - \MB_CASE_FOLD,
         *  - \MB_CASE_UPPER_SIMPLE,
         *  - \MB_CASE_LOWER_SIMPLE,
         *  - \MB_CASE_TITLE_SIMPLE,
         *  - \MB_CASE_FOLD_SIMPLE
         *
         * @link https://www.php.net/manual/en/function.mb-convert-case
         * @param [type] $mode
         * @param string|null $encoding
         * @return self
         */
        public function convertCase(int $mode = \MB_CASE_TITLE, ?string $encoding = null): self
        {
            $this->dta = mb_convert_case($this->dta, $mode, $encoding);
            return $this;
        }
        

        /**
         * Upper case current string content
         *
         * @param string|null $encoding
         * @return self
         */
        public function upper(?string $encoding = null): self
        {
            $this->dta = mb_strtoupper($this->dta, $encoding);
            return $this;
        }
        

        /**
         * Lower case current string content
         *
         * @param string|null $encoding
         * @return self
         */
        public function lower(?string $encoding = null): self
        {
            $this->dta = mb_strtolower($this->dta, $encoding);
            return $this;
        }
        
        /**
         * Getting current language
         *
         * @param string|null $language
         * @return string|boolean
         */
        public function getLanguage(): string|bool
        {
            return mb_language();
            
        }
        
        /**
         * Setting current language
         *
         * @param string|null $language
         * @return string
         */
        public function setLanguage(string $language): string
        {
            return mb_language($language);
            
        }
        //?string $language

        public function internalEncoding(?string $encoding = null): string|bool
        {
            return mb_internal_encoding($encoding);
            
        }
        

        public function httpInput(?string $type = null): array|string|false
        {
            return mb_http_input($type);
            
        }
        

        public function httpOutput(?string $encoding = null): string|bool
        {
            return mb_http_output($encoding);
            
        }
        

        public function detectOrder(array|string|null $encoding = null): array|bool
        {
            return mb_detect_order($encoding);
            
        }
        

        public function substituteCharacter(string|int|null $substituteCharacter = null): string|int|bool
        {
            return mb_substitute_character($substituteCharacter);
            
        }
        
        /**
         * Parse GET/POST/COOKIE data and set global variable
         *
         * @param string $string
         * @return string
         */
        public function parseStr(string $string): mixed
        {
            mb_parse_str($this->dta, $result);
            return $result;
            
        }
        

        public function outputHandler(string $string, int $status): self
        {
            $this->dta = mb_output_handler($this->dta, $status);
            return $this;
        }
        

        public function preferredMimeName(string $encoding): string|false
        {
            return mb_preferred_mime_name($encoding);
            
        }
        

        public function strlen(string $string, ?string $encoding): int
        {
            return mb_strlen($this->dta, $encoding);
            
        }
        
        /**
         * Find position of first occurrence of string in a string
         *
         * @param string $haystack
         * @param integer $offset
         * @param string|null $encoding
         * @return integer|false
         */
        public function pos(string $needle, int $offset = 0, ?string $encoding = null): int|false
        {
            return mb_strpos($needle, $this->dta, $offset, $encoding);
            
        }
        

        public function strrpos(string $haystack, string $needle, int $offset = 0, ?string $encoding = null): int|false
        {
            return mb_strrpos($haystack, $needle, $offset , $encoding);
            
        }
        

        public function stripos(string $haystack, string $needle, int $offset = 0, ?string $encoding = null): int|false
        {
            return mb_stripos($haystack, $needle, $offset, $encoding);
            
        }
        

        public function strripos(string $haystack, string $needle, int $offset = 0, ?string $encoding = null): int|false
        {
            return mb_strripos($haystack, $needle, $offset, $encoding);
            
        }
        

        public function strstr($haystack,  $needle, $beforeNeedle, $encoding): string|false
        {
            return mb_strstr($haystack,  $needle, $beforeNeedle, $encoding);
            
        }
        

        public function strrchr($haystack,  $needle, $beforeNeedle, $encoding): string|false
        {
            return mb_strrchr($haystack,  $needle, $beforeNeedle, $encoding);
            
        }
        

        public function stristr($haystack,  $needle, $beforeNeedle, $encoding): string|false
        {
            return mb_stristr($haystack,  $needle, $beforeNeedle, $encoding);
            
        }
        

        public function strrichr($haystack,  $needle, $beforeNeedle, $encoding): string|false
        {
            return mb_strrichr($haystack,  $needle, $beforeNeedle, $encoding);
            
        }
        

        public function substrCount(string $needle, ?string $encoding = null): int
        {
            return mb_substr_count($this->dta, $needle, $encoding);
            
        }
        

        public function substr(int $start, ?int $length, ?string $encoding = null): self
        {
            return new self(mb_substr($this->dta, $start, $length, $encoding));
        }
        

        public function cut(int $start, ?int $length, ?string $encoding = null): self
        {
            return new self(mb_strcut($this->dta, $start, $length, $encoding));
    
        }
        

        public function width(string $string, ?string $encoding = null): int
        {
            return mb_strwidth($this->dta, $encoding);
            
        }
        

        public function trimWidth(string $string, int $start, int $width, string $trim_marker = '', ?string $encoding  = null): self
        {
            $this->dta = mb_strimwidth($this->dta, $start, $width, $trim_marker = '', $encoding);
            return $this;
        }
        

        public function convert_encoding(string $toEncoding, array|string|null $fromEncoding = null): self
        {
            $this->content = mb_convert_encoding($this->dta, $toEncoding, $fromEncoding);
            return $this;
        }
        

        public function detect_encoding(array|string|null $encodings = null, bool $strict = false): string|false
        {
            return mb_detect_encoding($this->dta,$encodings, $strict);
            
        }
        

        public function listEncodings(): array
        {
            return mb_list_encodings();
            
        }
        

        public function encodingAliases(string $encoding): ListClass
        {
            return new ListClass(mb_encoding_aliases($encoding));
            
        }
        

        public function convertKana(string $string, string $mode = 'KV', ?string $encoding  = null): self
        {
            $this->dta = mb_convert_kana($this->dta, $mode, $encoding);
            return $this;
        }
        

        public function encodeMimeheader(?string $charset, ?string $transferEncoding, string $newline = "\n", int $indent = 0): self
        {
            $this->dta = mb_encode_mimeheader($this->dta, $charset, $transferEncoding, $newline, $indent);
            return $this;
        }
        

        public function decodeMimeheader(string $string): self
        {
            $this->dta = mb_decode_mimeheader($this->dta);
            return $this;
        }
        

        public function convertVariables(string $toEncoding, array|string $fromEncoding, mixed &...$vars): string|false
        {
            return mb_convert_variables($toEncoding, $fromEncoding, ...$vars);
            
        }
        

        public function encodeNumericentity(string $string, array $map, ?string $encoding = null, bool $hex = false): self
        {
            $this->dta = mb_encode_numericentity($this->dta, $map, $encoding, $hex);
            return $this;
        }
      
        public function getInfo(string $type = 'all'): array|string|int|false
        {
            return mb_get_info($type = 'all');
            
        }
        

        public function check_encoding(array|string|null $value = null, ?string $encoding = null): bool
        {
            return mb_check_encoding($value, $encoding);
            
        }
        

        public function regex_encoding(?string $encoding  = null): string|bool
        {
            return mb_regex_encoding($encoding);
            
        }
        

        public function regexSetOptions(?string $options): self
        {
            $this->dta = mb_regex_set_options($options);
            return $this;
        }
        
        // @FIXME
        public function regex(string $pattern, &$matches): bool
        {
            return mb_ereg($this->dta, $matches);
            
        }
        
        // @FIXME
        public function regexi(string $pattern, &$matches): bool
        {
            return mb_eregi($pattern, $this->dta, $matches);
            
        }
        

        public function regexReplace(string $pattern, string $replacement, string $string, ?string $options = null): self
        {
            $this->dta = mb_ereg_replace($pattern,$replacement, $this->dta, $options);
            return $this;
        }
        

        public function regexReplaceCallback(string $pattern, callable $callback, string $string, ?string $options = null): string|false|null
        {
            return mb_ereg_replace_callback($pattern,$callback, $this->dta, $options);
            
        }
        

        public function regexiReplace(string $pattern, $replacement, string $string, ?string $options = null): string|false|null
        {
            return mb_eregi_replace($pattern, $replacement, $this->dta, $options);
            
        }
        

        public function split(string $pattern, int $limit = -1): array|false
        {
            return mb_split($pattern, $this->dta, $limit);
            
        }
        

        public function regexMatch(string $pattern, string $string, ?string $options = null): bool
        {
            return mb_ereg_match($pattern, $this->dta, $options);
            
        }
        

        public function regexSearch(?string $pattern, ?string $options = null): bool
        {
            return mb_ereg_search($pattern, $options);
            
        }
        

        public function regexSearchPos(?string $pattern, ?string $options = null): array|false
        {
            return mb_ereg_search_pos($pattern, $options);
            
        }
        

        public function regexSearchRegs(?string $pattern, ?string $options = null): array|false
        {
            return mb_ereg_search_regs($pattern, $options);
            
        }
        

        public function regexSearchInit(?string $pattern, ?string $options = null): bool
        {
            return mb_ereg_search_init($this->dta, $pattern, $options);
            
        }
        

        public function regexSearchGetregs(): array|false
        {
            return mb_ereg_search_getregs();
            
        }
        

    

        public function regexSearchSetpos(int $offset): bool
        {
            return mb_ereg_search_setpos($offset);
            
        }
    }