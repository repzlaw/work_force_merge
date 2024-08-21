<?php

use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

// Load the user routes
require __DIR__.'/user.php';

// Load the admin routes
require __DIR__.'/admin.php';

// Load the employer routes
require __DIR__.'/employer.php';
