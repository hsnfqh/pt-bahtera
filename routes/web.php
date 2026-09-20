<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Main navigation routes matching the brief & wireframe
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/our-service', [PageController::class, 'services'])->name('services');
Route::get('/our-team', [PageController::class, 'team'])->name('team');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/contact-us', [PageController::class, 'contact'])->name('contact');

// Form submission route for Seafarer CV & Inquiries
Route::post('/contact-us/submit', [PageController::class, 'submitContact'])->name('contact.submit');
