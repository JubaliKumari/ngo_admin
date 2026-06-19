    <?php

    use App\Http\Controllers\ProfileController;
    use App\Http\Controllers\Api\CreaterUserController;

    use App\Http\Controllers\ProductController;
    use Illuminate\Support\Facades\Route;
    use App\Models\Product;

    Route::get('/', function () {
        return view('login');
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
    Route::post('/create-user', [CreaterUserController::class, 'store']);

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        Route::get('/admin/products', [ProductController::class, 'index']);        // list
        Route::get('/admin/products/create', [ProductController::class, 'create']); // show form ✅
        Route::post('/admin/products', [ProductController::class, 'store']); 
        Route::get('/admin/products/{id}/edit', [ProductController::class, 'create']); 
        Route::post('/admin/products/{id}/update', [ProductController::class, 'update']);
        Route::post('/admin/save-bill', [ProductController::class, 'storeBill']);// create 
        Route::get('/admin/billing', function () {
        $products = Product::all();
        return view('admin.billing.index', compact('products'));
        });  
    });

    require __DIR__.'/auth.php';
