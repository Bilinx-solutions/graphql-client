<?php

namespace Shipper\GraphqlClient\Enums;

abstract class Request
{
    const QUERY = 'query';
    const MUTATION = 'mutation';
    const RAW = 'raw';
}
