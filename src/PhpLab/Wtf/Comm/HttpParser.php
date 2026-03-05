<?php 

declare(strict_types=1);

/**
 * Tiny parser for HTTP contexts
 *
 * @package PhpLab
 * @author  Sven Schrodt <sven@schrodt.nrw>
 * @version 0.1
 * @since 2025-03-06
 * @link https://github.com/SchrodtSven/PhpLab
 * 
 * @TODO implement support for multipart messages!!!
 */

namespace SchrodtSven\PhpLab\Wtf\Comm;


class HttpParser
{

    /**
     * Separator of headers and payload
     *
     * @var string
     */
    public const string MESSAGE_SEPARATOR = "\r\n\r\n";

    public const string HEADER_SEPARATOR = "\r\n";

    public const string HEADER_KEY_VAL_SEP = ":";

    public const string MESSAGE_ERROR = "The given string is not a valid HTTP message!";

    private array $headers = [];

    private string $header = '';

    private string $payload = '';

    private string $version = '';

    public function __construct(private string $msg)
    {
        if(!$this->assert($msg)) {
            throw new \Exception(self::MESSAGE_ERROR, 666);
        }
        $this->preParse();
    }

    public function assert(string $msg): bool
    {
        // @FIXME!!! add more assertions -> e.g: header line(s)
        return str_contains($msg, self::MESSAGE_SEPARATOR);
    }

    private function preParse(): void
    {
        $tmp = explode(self::MESSAGE_SEPARATOR, $this->msg);
       
        $this->header = $tmp[0];
        $this->payload = $tmp[1];
        $tmp = explode(self::HEADER_SEPARATOR, $this->header);

        $this->headers["start-line"] = trim(array_shift($tmp));
        $tmpSL = explode(' ', $this->headers["start-line"]);
        $this->version = $tmpSL[0];

        for($i=0;$i<count($tmp);$i++) {
            if(!str_contains($tmp[$i], self::HEADER_KEY_VAL_SEP)) {
                continue;
            } else {
                $prts = explode(self::HEADER_KEY_VAL_SEP, $tmp[$i]);
                $this->headers[$prts[0]] = trim($prts[1]);
            }
        }
    }


    /**
     * Get the value of headers
     *
     * @return array
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * Set the value of headers
     *
     * @param array $headers
     *
     * @return self
     */
    public function setHeaders(array $headers): self
    {
        $this->headers = $headers;

        return $this;
    }

    /**
     * Get the value of header
     *
     * @return string
     */
    public function getHeader(): string
    {
        return $this->header;
    }

    /**
     * Set the value of header
     *
     * @param string $header
     *
     * @return self
     */
    public function setHeader(string $header): self
    {
        $this->header = $header;

        return $this;
    }

    /**
     * Get the value of payload
     *
     * @return string
     */
    public function getPayload(): string
    {
        return $this->payload;
    }

    /**
     * Set the value of payload
     *
     * @param string $payload
     *
     * @return self
     */
    public function setPayload(string $payload): self
    {
        $this->payload = $payload;

        return $this;
    }

    /**
     * Get the value of version
     *
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * Set the value of version
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version): self
    {
        $this->version = $version;

        return $this;
    }
}