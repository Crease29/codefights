<?php
function domainType($domains)
{
    $m = ["org" => "organization", "com" => "commercial", "net" => "network", "info" => "information"];
    $r = [];

    foreach ($domains as $domain) {
        $r[] = $m[ end(explode('.', $domain)) ];
    }

    return $r;
}