<?php

use App\Mcp\Servers\ProductServer;
use Laravel\Mcp\Facades\Mcp;

// Mcp::web('/mcp/demo', \App\Mcp\Servers\PublicServer::class);

Mcp::local('product', ProductServer::class);
