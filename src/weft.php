<?php
// IDE stubs for the weft extension. Never loaded at runtime; they only tell
// editors (Intelephense, PhpStorm, ...) which symbols the extension provides.

namespace Weft {
    function run(callable $callback): void {}
    function go(callable $callback, mixed ...$args): int {}
    function sleep(float $seconds): void {}
    function pass(): void {}
    function cid(): int {}
    function exists(int $cid): bool {}
    function count(): int {}
    function suspend(): void {}
    function resume(int $cid): bool {}
    function after(float $seconds, callable $callback): int {}
    function tick(float $seconds, callable $callback): int {}
    function clear(int $timerId): bool {}

    class Channel
    {
        public function __construct(int $capacity = 1) {}
        public function push(mixed $value, float $timeout = -1): bool {}
        public function pop(float $timeout = -1): mixed {}
        public function close(): void {}
        public function isClosed(): bool {}
        public function length(): int {}
        public function capacity(): int {}
    }

    class Mutex
    {
        public function __construct() {}
        public function lock(float $timeout = -1): bool {}
        public function tryLock(): bool {}
        public function unlock(): void {}
        public function isLocked(): bool {}
    }

    class WaitGroup
    {
        public function __construct() {}
        public function add(int $delta = 1): void {}
        public function done(): void {}
        public function wait(float $timeout = -1): bool {}
        public function count(): int {}
    }

    class Socket
    {
        public static function connect(string $host, int $port, float $timeout = -1): static {}
        public static function listen(string $host, int $port, int $backlog = 128): static {}
        public function accept(float $timeout = -1): ?static {}
        public function send(string $data): int {}
        public function recv(int $max = 65536): ?string {}
        public function close(): void {}
        public function peer(): string {}
        public function local(): string {}
        public function isClosed(): bool {}
    }
}

namespace Weft\Http {
    /**
     * @return array{status: int, reason: string, body: string, headers: array<string, string>}
     */
    function request(string $method, string $url, array $headers = [], string $body = '', float $timeout = 30.0): array {}

    class Request
    {
        public function method(): string {}
        public function uri(): string {}
        public function path(): string {}
        public function queryString(): string {}
        public function query(): array {}
        public function headers(): array {}
        public function header(string $name): ?string {}
        public function cookies(): array {}
        public function body(): string {}
    }

    class Response
    {
        public function status(int $code): static {}
        public function header(string $name, string $value, bool $replace = true): static {}
        public function end(string $body = ''): bool {}
        public function isSent(): bool {}
    }

    class Server
    {
        public function __construct(string $host = '127.0.0.1', int $port = 8080, mixed $options = null) {}
        public function handle(callable $handler): static {}
        public function start(): void {}
    }
}
