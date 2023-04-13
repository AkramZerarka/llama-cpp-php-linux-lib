<?php

namespace Kambo\LLamaCPPLinuxLib;

final class Info
{
    public function getPath() : string {
        return __DIR__ . '/../libllama.so';
    }
}
