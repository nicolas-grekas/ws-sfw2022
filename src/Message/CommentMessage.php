<?php

namespace App\Message;

class CommentMessage
{
    public function __construct(
        public readonly int $id,
        public readonly array $context = [],
    ) {
    }
}