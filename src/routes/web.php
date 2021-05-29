<?php

Route::get('metronic', function () {
    $menus = [];
    return view('metronics::index', compact('menus'));
});
