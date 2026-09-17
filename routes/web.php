<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ProgressController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeacherMaterialController;
use App\Http\Controllers\TeacherQuizController;
use App\Http\Controllers\TeacherStudentController;
use App\Http\Controllers\TeacherStatisticsController;
use App\Http\Controllers\TeacherCalendarController;
use App\Http\Controllers\TeacherMessageController;
use App\Http\Controllers\TeacherExportController;
use App\Http\Controllers\StudentStatisticsController;
use App\Http\Controllers\StudentCalendarController;
use App\Http\Controllers\StudentMessageController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminMaterialController;
use App\Http\Controllers\AdminQuizController;
use App\Http\Controllers\AdminCertificateController;

// Public Routes
Route::get('/', [HomeController::class, 'index']);

// Materials (Public)
Route::get('/materials', [MaterialController::class, 'index']);
Route::get('/materials/{id}', [MaterialController::class, 'show']);

// Auth Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected Routes (Auth required)
Route::middleware('auth')->group(function () {

    // Dashboard (Student)
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/progress', [ProgressController::class, 'index']);
    Route::post('/progress/{id}/start', [ProgressController::class, 'start']);
    Route::post('/progress/{id}/complete', [ProgressController::class, 'complete']);
    Route::get('/certificates', [CertificateController::class, 'index']);

    // Quiz (Student)
    Route::get('/quiz', [QuizController::class, 'index']);
    Route::get('/quiz/{id}', [QuizController::class, 'show']);
    Route::post('/quiz/{id}/result', [QuizController::class, 'result']);

    // Profile
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::put('/profile', [ProfileController::class, 'update']);
    Route::put('/profile/password', [ProfileController::class, 'updatePassword']);

    // Student Features
    Route::middleware('role:student')->group(function () {
        Route::get('/student/statistics', [StudentStatisticsController::class, 'index']);
        Route::get('/student/calendar', [StudentCalendarController::class, 'index']);
        Route::get('/student/messages', [StudentMessageController::class, 'index']);
        Route::get('/student/messages/{userId}', [StudentMessageController::class, 'conversation']);
        Route::post('/student/messages/send', [StudentMessageController::class, 'send']);
    });

    // Module System
    Route::get('/modules', [ModuleController::class, 'index']);
    Route::get('/modules/{id}', [ModuleController::class, 'show']);
    Route::get('/modules/{id}/lesson/{lessonId}', [ModuleController::class, 'lesson']);
    Route::post('/modules/{id}/lesson/{lessonId}/complete', [ModuleController::class, 'completeLesson']);
    Route::get('/modules/{id}/quiz', [ModuleController::class, 'quiz']);
        Route::post('/modules/{id}/quiz/submit', [ModuleController::class, 'quizSubmit']);
        Route::get('/modules/{id}/quiz/result', [ModuleController::class, 'quizResult']);
    Route::get('/certificates/module', [ModuleController::class, 'certificates']);
    Route::get('/certificates/module/{id}', [ModuleController::class, 'certificateShow']);
    Route::get('/certificates/module/{id}/verify', [ModuleController::class, 'certificateVerify']);

    // Notifications
    Route::get('/notifications', [NotificationController::class, 'index']);
    Route::get('/notifications/{id}', [NotificationController::class, 'read']);
    Route::post('/notifications/read-all', [NotificationController::class, 'readAll']);
    Route::get('/api/notifications/unread-count', [NotificationController::class, 'unreadCount']);

    // Teacher Routes
    Route::middleware('role:teacher')->prefix('teacher')->group(function () {
        Route::get('/', [TeacherController::class, 'index']);
        Route::get('/materials', [TeacherMaterialController::class, 'index']);
        Route::get('/materials/create', [TeacherMaterialController::class, 'create']);
        Route::post('/materials', [TeacherMaterialController::class, 'store']);
        Route::get('/materials/{id}/edit', [TeacherMaterialController::class, 'edit']);
        Route::put('/materials/{id}', [TeacherMaterialController::class, 'update']);
        Route::delete('/materials/{id}', [TeacherMaterialController::class, 'destroy']);
        Route::get('/quizzes', [TeacherQuizController::class, 'index']);
        Route::get('/quizzes/create', [TeacherQuizController::class, 'create']);
        Route::post('/quizzes', [TeacherQuizController::class, 'store']);
        Route::get('/quizzes/{id}/edit', [TeacherQuizController::class, 'edit']);
        Route::put('/quizzes/{id}', [TeacherQuizController::class, 'update']);
        Route::delete('/quizzes/{id}', [TeacherQuizController::class, 'destroy']);
        Route::get('/students', [TeacherStudentController::class, 'index']);
        Route::get('/statistics', [TeacherStatisticsController::class, 'index']);
        Route::get('/calendar', [TeacherCalendarController::class, 'index']);
        Route::get('/messages', [TeacherMessageController::class, 'index']);
        Route::get('/messages/{userId}', [TeacherMessageController::class, 'conversation']);
        Route::post('/messages/send', [TeacherMessageController::class, 'send']);
        Route::get('/export', [TeacherExportController::class, 'index']);
        Route::get('/export/csv', [TeacherExportController::class, 'downloadCsv']);
    });

    // Admin Routes
    Route::middleware('role:admin')->prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index']);
        Route::get('/users', [AdminUserController::class, 'index']);
        Route::get('/users/{id}/edit', [AdminUserController::class, 'edit']);
        Route::put('/users/{id}', [AdminUserController::class, 'update']);
        Route::delete('/users/{id}', [AdminUserController::class, 'destroy']);
        Route::get('/categories', [AdminCategoryController::class, 'index']);
        Route::post('/categories', [AdminCategoryController::class, 'store']);
        Route::put('/categories/{id}', [AdminCategoryController::class, 'update']);
        Route::delete('/categories/{id}', [AdminCategoryController::class, 'destroy']);
        Route::get('/materials', [AdminMaterialController::class, 'index']);
        Route::get('/quizzes', [AdminQuizController::class, 'index']);
        Route::get('/certificates', [AdminCertificateController::class, 'index']);
    });
});
