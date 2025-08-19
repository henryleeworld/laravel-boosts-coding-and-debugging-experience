<?php

namespace App\Http\Controllers;

use App\Models\User;

class DebugController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        ds()->queriesOn(__('checking a user query'));
        User::query()->where('id', 20)->get();
        ds()->queriesOff();
    }
}
