<?php
namespace SwooleTcp;
class Server
{

    private $server;
    const MODE = SWOOLE_PROCESS;
    const SOCK = SWOOLE_SOCK_TCP;

    public function __construct(array $options)
    {
        if (isset($options['database_type'])) {

        }
    }

}
