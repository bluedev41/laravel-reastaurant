<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Requests\ItemRequest;
use App\Http\Requests\EditItemRequest;
use App\Http\Requests\EditCategoryRequest;
use App\Http\Requests\EditEmployeeRequest;
use App\Http\Requests\EditProfileRequest;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\EmployeeRequest;
use App\Http\Requests\PasswordRequest;
use App\Http\Requests\TableRequest;
use App\Item;
use App\Category;
use App\Employee;
use App\Table;
use Gloudemans\Shoppingcart\Facades\Cart;



class EmployeeController extends Controller
{
    public function home() {
        $tables=Table::all();
        return view('employee.home')->with('tables', $tables);
    }

    public function showOrders() {
        return view('employee.orders.show');
    }

    public function editOrder() {
        return view('employee.orders.edit');
    }

    public function deleteOrder() {
        return view('employee.orders.delete');
    }

    public function newOrder() {
        return view('employee.orders.new');
    }

    public function showTables() {
        $tables = Table::all();

        return view('employee.tables.show')
        ->with('tables', $tables);
    }
    public function showCategories() {
        $categories = Category::all();

        return view('employee.categories.show')
        ->with('categories', $categories);
    }
    public function showItems() {
        $categories = Category::all();

        return view('employee.items.show')
            ->with('categories', $categories);
    }
    public function showProfile(Request $request) {
        $employee = $request->session()->get('employee');

        return view('employee.profile.show')
            ->with('employee', $employee);
    }
     //occupied tables
     public function showOccupiedTables() {
        $tables = Table::where('status', 'Occupied')->get();

        return view('employee.tables.occupied')
            ->with('tables', $tables);
    }
    public function showAvailableTables() {
        $tables = Table::where('status', 'Available')->get();

        return view('employee.tables.available')
            ->with('tables', $tables);
    }
    public function toggleTable(Request $request) {
        $table = Table::findOrFail($request->table_id);

        if($table->status == 'Available'){
            $table->status = 'Occupied';
        }
        else {
            $table->status = 'Available';
        }

        $table->save();

        return redirect()->route('employee.tables.show');
    }

}
