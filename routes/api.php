<?php

use Laravel\Boost\Boost;
use Laravel\Mcp\Facades\Mcp;

Mcp::web('/mcp', Boost::class);