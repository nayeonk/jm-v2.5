<?php

declare (strict_types=1);
/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace DeliciousBrains\WP_Offload_Media\Gcp\Monolog\Handler;

use DeliciousBrains\WP_Offload_Media\Gcp\Monolog\Formatter\FormatterInterface;
use DeliciousBrains\WP_Offload_Media\Gcp\Monolog\Formatter\JsonFormatter;
use DeliciousBrains\WP_Offload_Media\Gcp\Monolog\Logger;
/**
 * CouchDB handler
 *
 * @author Markus Bachmann <markus.bachmann@bachi.biz>
 */
class CouchDBHandler extends \DeliciousBrains\WP_Offload_Media\Gcp\Monolog\Handler\AbstractProcessingHandler
{
    private $options;
    public function __construct(array $options = [], $level = \DeliciousBrains\WP_Offload_Media\Gcp\Monolog\Logger::DEBUG, bool $bubble = true)
    {
        $this->options = array_merge(['host' => 'localhost', 'port' => 5984, 'dbname' => 'logger', 'username' => null, 'password' => null], $options);
        parent::__construct($level, $bubble);
    }
    /**
     * {@inheritDoc}
     */
    protected function write(array $record) : void
    {
        $basicAuth = null;
        if ($this->options['username']) {
            $basicAuth = sprintf('%s:%s@', $this->options['username'], $this->options['password']);
        }
        $url = 'http://' . $basicAuth . $this->options['host'] . ':' . $this->options['port'] . '/' . $this->options['dbname'];
        $context = stream_context_create(['http' => ['method' => 'POST', 'content' => $record['formatted'], 'ignore_errors' => true, 'max_redirects' => 0, 'header' => 'Content-type: application/json']]);
        if (false === @file_get_contents($url, false, $context)) {
            throw new \RuntimeException(sprintf('Could not connect to %s', $url));
        }
    }
    /**
     * {@inheritDoc}
     */
    protected function getDefaultFormatter() : FormatterInterface
    {
        return new \DeliciousBrains\WP_Offload_Media\Gcp\Monolog\Formatter\JsonFormatter(\DeliciousBrains\WP_Offload_Media\Gcp\Monolog\Formatter\JsonFormatter::BATCH_MODE_JSON, false);
    }
}
