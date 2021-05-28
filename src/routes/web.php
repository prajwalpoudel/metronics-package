<?php

Route::get('metronics', function () {
    $menus = [];
    return view('metronics::index', compact('menus'));
});
