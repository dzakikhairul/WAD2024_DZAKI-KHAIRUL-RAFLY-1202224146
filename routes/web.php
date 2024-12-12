<?php
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::prefix('lecturers')->name('lecturers.')->group(function () {
    Route::get('/', [LecturerController::class, 'index'])->name('index'); 
    Route::get('/create', [LecturerController::class, 'create'])->name('create');
    Route::post('/', [LecturerController::class, 'store'])->name('store'); 
    Route::get('/{lecturer}', [LecturerController::class, 'show'])->name('show'); 
    Route::get('/{lecturer}/edit', [LecturerController::class, 'edit'])->name('edit');
    Route::put('/{lecturer}', [LecturerController::class, 'update'])->name('update'); 
    Route::delete('/{lecturer}', [LecturerController::class, 'destroy'])->name('destroy');
});

Route::prefix('students')->name('students.')->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('index'); 
    Route::get('/create', [StudentController::class, 'create'])->name('create'); 
    Route::post('/', [StudentController::class, 'store'])->name('store'); 
    Route::get('/{student}', [StudentController::class, 'show'])->name('show');
    Route::get('/{student}/edit', [StudentController::class, 'edit'])->name('edit'); 
    Route::put('/{student}', [StudentController::class, 'update'])->name('update'); 
    Route::delete('/{student}', [StudentController::class, 'destroy'])->name('destroy'); 
});
