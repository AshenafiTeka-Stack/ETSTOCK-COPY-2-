<?php

use App\Livewire\Categories\CategoryCreate;
use App\Livewire\Categories\CategoryEdit;
use App\Livewire\Categories\CategoryIndex;
use App\Livewire\Categories\CategoryShow;
use App\Livewire\Customers\CustomerCreate;
use App\Livewire\Customers\CustomerEdit;
use App\Livewire\Customers\CustomerIndex;
use App\Livewire\Customers\Customershow;
use App\Livewire\Inventories\InventoryCreate;
use App\Livewire\Inventories\InventoryEdit;
use App\Livewire\Inventories\InventoryIndex;
use App\Livewire\Inventories\InventoryShow;
use App\Livewire\POItems\POItemsCreate;
use App\Livewire\POItems\POItemsEdit;
use App\Livewire\POItems\POItemsIndex;
use App\Livewire\POItems\POItemsShow;
use App\Livewire\POrder\POrderCreate;
use App\Livewire\POrder\POrderEdit;
use App\Livewire\POrder\POrderEditShow;
use App\Livewire\POrder\POrderIndex;
use App\Livewire\POrder\POrderShow;
use App\Livewire\Product\ProductCreate;
use App\Livewire\Product\ProductEdit;
use App\Livewire\Product\ProductIndex;
use App\Livewire\Product\ProductShow;
use App\Livewire\Roles\RoleCreate;
use App\Livewire\Roles\RoleEdit;
use App\Livewire\Roles\RoleIndex;
use App\Livewire\Roles\RoleShow;
use App\Livewire\Salesoitems\SalesitemsCreate;
use App\Livewire\Salesoitems\SalesitemsIndex;
use App\Livewire\Salesoitems\SalesoitemsCreate;
use App\Livewire\Salesoitems\SalesoitemsEdit;
use App\Livewire\Salesoitems\SalesoitemsIndex;
use App\Livewire\Salesoitems\SalesoitemsShow;
use App\Livewire\Salesorders\SalesorderCreate;
use App\Livewire\Salesorders\SalesorderEdit;
use App\Livewire\Salesorders\SalesorderIndex;
use App\Livewire\Salesorders\SalesorderShow;
use App\Livewire\Stockadjutment\StockadjustmentsCreate;
use App\Livewire\Stockadjutment\StockadjustmentsEdit;
use App\Livewire\Stockadjutment\StockadjustmentsIndex;
use App\Livewire\Stockadjutment\StockadjustmentsShow;
use App\Livewire\Suppliers\SupplierCreate;
use App\Livewire\Suppliers\SupplierEdit;
use App\Livewire\Suppliers\SupplierIndex;
use App\Livewire\Suppliers\SupplierShow;
use App\Livewire\Users\UserCreate;
use App\Livewire\Users\UserEdit;
use App\Livewire\Users\UserIndex;
use App\Livewire\Users\UserShow;
use App\Livewire\Warehouse\WarehouseCreate;
use App\Livewire\Warehouse\WarehouseEdit;
use App\Livewire\Warehouse\WarehouseIndex;
use App\Livewire\Warehouse\WarehouseShow;
use Illuminate\Support\Facades\Route;

use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get("users", UserIndex::class)->name("users.index");
    Route::get("users/create", UserCreate::class)->name("users.create");
    Route::get("users/{id}/UserEdit", UserEdit::class)->name("users.edit");
    Route::get("users/{id}", UserShow::class)->name("users.show");

    Route::get("products", ProductIndex::class)->name("products.index");
    Route::get("products/create", ProductCreate::class)->name("products.create");
    Route::get("products/{product_id}/ProductEdit", ProductEdit::class)->name("products.edit");
    Route::get("products/{product_id}", ProductShow::class)->name("products.show");

    // Route::get("products", ProductIndex::class)->name("products.index")->middleware("permission:product.view|product.create|product.edit|product.delete");
    // Route::get("products/create", ProductCreate::class)->name("products.create")->middleware("permission:product.create");
    // Route::get("products/{id}/ProductEdit", ProductEdit::class)->name("products.edit")->middleware("permission:product.edit");
    // Route::get("products/{id}", ProductShow::class)->name("products.show")->middleware("permission:product.view");


    // Route::get("roles", RoleIndex::class)->name("roles.index")->middleware("permission:role.view|role.create|role.edit|role.delete");
    // Route::get("roles/create", RoleCreate::class)->name("roles.create")->middleware("permission:role.create");
    // Route::get("roles/{id}/RoleEdit", RoleEdit::class)->name("roles.edit")->middleware("permission:role.edit");
    // Route::get("roles/{id}", RoleShow::class)->name("roles.show")->middleware("permission:role.view");


    Route::get("roles", RoleIndex::class)->name("roles.index");
    Route::get("roles/create", RoleCreate::class)->name("roles.create");
    Route::get("roles/{id}/RoleEdit", RoleEdit::class)->name("roles.edit");
    Route::get("roles/{id}", RoleShow::class)->name("roles.show");


    Route::get("categories", CategoryIndex::class)->name("categories.index");
    Route::get("categories/create", CategoryCreate::class)->name("categories.create");
    Route::get("categories/{id}/CategoryEdit", CategoryEdit::class)->name("categories.edit");
    Route::get("categories/{id}", CategoryShow::class)->name("categories.show");

    Route::get("warehouses", WarehouseIndex::class)->name("warehouses.index");
    Route::get("warehouses/create", WarehouseCreate::class)->name("warehouses.create");
    Route::get("warehouses/{id}/WarehouseEdit", WarehouseEdit::class)->name("warehouses.edit");
    Route::get("warehouses/{id}", WarehouseShow::class)->name("warehouses.show");

    Route::get("customers", CustomerIndex::class)->name("customers.index");
    Route::get("customers/create", CustomerCreate::class)->name("customers.create");
    Route::get("customers/{id}/CustomerEdit", CustomerEdit::class)->name("customers.edit");
    Route::get("customers/{id}", CustomerShow::class)->name("customers.show");

    Route::get("suppliers", SupplierIndex::class)->name("suppliers.index");
    Route::get("suppliers/create", SupplierCreate::class)->name("suppliers.create");
    Route::get("suppliers/{id}/SupplierEdit", SupplierEdit::class)->name("suppliers.edit");
    Route::get("suppliers/{id}", SupplierShow::class)->name("suppliers.show");

    Route::get("poitems", POItemsIndex::class)->name("poitems.index");
    Route::get("poitems/create", POItemsCreate::class)->name("poitems.create");
    Route::get("poitems/{id}/POItemsEdit", POItemsEdit::class)->name("poitems.edit");
    Route::get("poitems/{id}", POItemsShow::class)->name("poitems.show");

    Route::get("porders", POrderIndex::class)->name("porders.index");
    Route::get("porders/create", POrderCreate::class)->name("porders.create");
    Route::get("porders/{id}/POrdersEdit", POrderEdit::class)->name("porders.edit");
    Route::get("porders/{id}", POrderShow::class)->name("porders.show");

    Route::get("inventories", InventoryIndex::class)->name("inventories.index");
    Route::get("inventories/create", InventoryCreate::class)->name("inventories.create");
    Route::get("inventories/{id}/InventoriesEdit", InventoryEdit::class)->name("inventories.edit");
    Route::get("inventories/{id}", InventoryShow::class)->name("inventories.show");

    Route::get("salesorders", SalesorderIndex::class)->name("salesorders.index");
    Route::get("salesorders/create", SalesorderCreate::class)->name("salesorders.create");
    Route::get("salesorders/{id}/SalesordersEdit", SalesorderEdit::class)->name("salesorders.edit");
    Route::get("salesorders/{id}", SalesorderShow::class)->name("salesorders.show");

    Route::get("salesoitems", SalesoitemsIndex::class)->name("salesoitems.index");
    Route::get("salesoitems/create", SalesoitemsCreate::class)->name("salesoitems.create");
    Route::get("salesoitems/{id}/SalesoitemsEdit", SalesoitemsEdit::class)->name("salesoitems.edit");
    Route::get("salesoitems/{id}", SalesoitemsShow::class)->name("salesoitems.show");

    Route::get("stockadjustments", StockadjustmentsIndex::class)->name("stockadjustments.index");
    Route::get("stockadjustments/create", StockadjustmentsCreate::class)->name("stockadjustments.create");
    Route::get("stockadjustments/{id}/StockAdjutmentEdit", StockadjustmentsEdit::class)->name("stockadjustments.edit");
    Route::get("stockadjustments/{id}", StockadjustmentsShow::class)->name("stockadjustments.show");

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__ . '/auth.php';
