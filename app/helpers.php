<?php

// app/helpers.php
function active($route) {
    return request()->routeIs($route) ? 'active' : '';
}