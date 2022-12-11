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

class AdminController extends Controller
{
    public function home() {
        return view('admin.home');
    }

    //items
    public function newItem(Request $request) {
        $result = Category::all();

        return view('admin.items.new')
            ->with('categories', $result);
    }

    public function storeItem(ItemRequest $request) {

        //hanle file upload
        if($request->hasFile('itemImage')){
            //get file name with extension
            $fileNameWithExt = $request->file('itemImage')->getClientOriginalName();

            //get just file namespace
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('itemImage')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('itemImage')->storeAs('public/itemImages', $fileNameToStore);
        }
        else {
            $fileNameToStore = 'noimage.jpg';
        }


        $item = new Item();
        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->quantity = $request->quantity;
        $item->category_id = $request->category;
        $item->item_image = $fileNameToStore;

        $item->save();
        return redirect()->route('admin.showItems');
    }

    public function editItem(Request $request) {
        $item = Item::findOrFail($request->id);
        $categories = Category::all();
        return view('admin.items.edit')
            ->with('item', $item)
            ->with('categories', $categories);
    }

    public function updateItem(EditItemRequest $request) {

        if($request->hasFile('itemImage')){
            //get file name with extension
            $fileNameWithExt = $request->file('itemImage')->getClientOriginalName();

            //get just file namespace
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('itemImage')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('itemImage')->storeAs('public/itemImages', $fileNameToStore);
        }

        $item = Item::findOrFail($request->item_id);

        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->quantity = $request->quantity;
        $item->category_id = $request->category;
        if($request->hasFile('itemImage')){
            Storage::delete('public/itemImages/'. $item->item_image);
            $item->item_image = $fileNameToStore;
        }

        $item->save();
        return redirect()->route('admin.showItems');

    }

    public function showItems() {
        $categories = Category::all();

        return view('admin.items.show')
            ->with('categories', $categories);
    }

    public function removeItem(Request $request) {
        $item = Item::findOrFail($request->id);

        return view('admin.items.remove')
            ->with('item', $item);
    }

    public function deleteItem(Request $request) {
        $item = Item::findOrFail($request->item_id);
        Storage::delete('public/itemImages/'. $item->item_image);
        $item->delete();

        return redirect()->route('admin.showItems');
    }


    //categories
    public function showCategories() {
        $categories = Category::all();

        return view('admin.categories.show')
            ->with('categories', $categories);
    }

    public function newCategory() {
        return view('admin.categories.new');
    }

    public function createCategory(CategoryRequest $request) {
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        return redirect()->route('admin.showCategories');
    }

    public function editCategory(Request $request){
        $category = Category::findOrFail($request->id);

        return view('admin.categories.edit')
            ->with('category', $category);
    }

    public function updateCategory(EditCategoryRequest $request) {
        $category = Category::findOrFail($request->category_id);
        $category->name = $request->name;
        $category->description = $request->description;

        $category->save();
        return redirect()->route('admin.showCategories');
    }

    public function removeCategory(Request $request) {
        $category = Category::findOrFail($request->id);
        return view('admin.categories.remove')
            ->with('category', $category);
    }

    public function deleteCategory(Request $request) {
        $category = Category::findOrFail($request->category_id);
        $category->delete();

        return redirect()->route('admin.showCategories');
    }


    //employees
    public function showEmployees() {
        $employess = Employee::all();

        return view('admin.employees.show')
            ->with('employees', $employess);
    }

    public function searchEmployees(Request $request) {
        $searchBy = $request->searchBy;
        $word = $request->word;

        $employees = Employee::where($searchBy, 'like', '%'.$word.'%')->get();

        // dd($employees);
        return view('admin.employees.show')
            ->with('employees', $employees);
    }

    public function newEmployee() {
        return view('admin.employees.new');
    }

    public function createEmployee(EmployeeRequest $request) {

        //hanle file upload
        if($request->hasFile('employeeImage')){
            //get file name with extension
            $fileNameWithExt = $request->file('employeeImage')->getClientOriginalName();

            //get just file namespace
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('employeeImage')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('employeeImage')->storeAs('public/employeeImages', $fileNameToStore);
        }
        else {
            $fileNameToStore = 'noimage.jpg';
        }


        $employee = new Employee();
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->password = $request->password;
        $employee->address = $request->address;
        $employee->gender = $request->gender;
        $employee->is_admin = 0;
        $employee->employee_image = $fileNameToStore;

        $employee->save();
        return redirect()->route('admin.showEmployees');
    }

    public function editEmployee(Request $request) {
        $employee = Employee::findOrFail($request->id);

        return view('admin.employees.edit')
            ->with('employee', $employee);
    }

    public function updateEmployee(EditEmployeeRequest $request) {

        if($request->hasFile('employeeImage')){
            //get file name with extension
            $fileNameWithExt = $request->file('employeeImage')->getClientOriginalName();

            //get just file namespace
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('employeeImage')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('employeeImage')->storeAs('public/employeeImages', $fileNameToStore);
        }

        $employee = Employee::findOrFail($request->employee_id);

        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->password = $request->password;
        $employee->address = $request->address;
        $employee->gender = $request->gender;
        $employee->is_admin = 0;

        if($request->hasFile('employeeImage')){
            if($employee->employee_image == 'noimage.jpg'){
                Storage::delete('public/employeeImages/'. $employee->employee_image);
            }
            $employee->employee_image = $fileNameToStore;
        }

        $employee->save();
        return redirect()->route('admin.showEmployees');

    }

    public function removeEmployee(Request $request) {
        $employee = Employee::findOrFail($request->id);

        return view('admin.employees.remove')
            ->with('employee', $employee);
    }

    public function deleteEmployee(Request $request) {
        $employee = Employee::findOrFail($request->employee_id);

        if($employee->employee_image != 'noimage.jpg'){
            Storage::delete('public/employeeImages/'. $employee->employee_image);
        }
        $employee->delete();

        return redirect()->route('admin.showEmployees');

    }


    //tables
    public function showTables() {
        $tables = Table::all();

        return view('admin.tables.show')
            ->with('tables', $tables);
    }

    public function toggleTables(Request $request) {
        $table = Table::findOrFail($request->table_id);

        if($table->status == 'Available'){
            $table->status = 'Occupied';
        }
        else {
            $table->status = 'Available';
        }

        $table->save();

        return redirect()->route('admin.showTables');
    }


    //available tables
    public function showAvailableTables() {
        $tables = Table::where('status', 'Available')->get();

        return view('admin.tables.available')
            ->with('tables', $tables);
    }

    public function toggleAvailableTables(Request $request) {
        $table = Table::findOrFail($request->table_id);

        if($table->status == 'Available'){
            $table->status = 'Occupied';
        }
        else {
            $table->status = 'Available';
        }

        $table->save();

        return redirect()->route('admin.showAvailableTables');
    }

    //occupied tables
    public function showOccupiedTables() {
        $tables = Table::where('status', 'Occupied')->get();

        return view('admin.tables.occupied')
            ->with('tables', $tables);
    }

    public function toggleOccupiedTables(Request $request) {
        $table = Table::findOrFail($request->table_id);

        if($table->status == 'Available'){
            $table->status = 'Occupied';
        }
        else {
            $table->status = 'Available';
        }

        $table->save();

        return redirect()->route('admin.showOccupiedTables');
    }

    public function newTable() {
        return view('admin.tables.new');
    }

    public function addTable(TableRequest $request) {
        $table = new Table();
        $table->status = $request->status;
        $table->capacity = $request->capacity;

        $table->save();

        return redirect()->route('admin.showTables');
    }

    public function removeTable(Request $request) {
        $table = Table::findOrFail($request->id);

        return view('admin.tables.remove')
            ->with('table', $table);
    }

    public function deleteTable(Request $request) {
        $table = Table::findOrFail($request->table_id);
        $table->delete();

        return redirect()->route('admin.showTables');
    }

    public function showProfile(Request $request) {
        $admin = $request->session()->get('admin');

        return view('admin.profile.show')
            ->with('employee', $admin);
    }

    public function editProfile(Request $request) {
        $admin = $request->session()->get('admin');

        return view('admin.profile.edit')
            ->with('employee', $admin);
    }

    public function updateProfile(EditProfileRequest $request) {
        $admin = $request->session()->get('admin');

        if($request->hasFile('employeeImage')){
            //get file name with extension
            $fileNameWithExt = $request->file('employeeImage')->getClientOriginalName();

            //get just file namespace
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('employeeImage')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('employeeImage')->storeAs('public/employeeImages', $fileNameToStore);
        }

        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->address = $request->address;
        $admin->gender = $request->gender;

        if($request->hasFile('employeeImage')){
            if($admin->employee_image == 'noimage.jpg'){
                Storage::delete('public/employeeImages/'. $admin->employee_image);
            }
            $admin->employee_image = $fileNameToStore;
        }

        $admin->save();
        return redirect()->route('admin.showProfile');
    }

    public function editPassword(Request $request) {
        return view('admin.profile.password');
    }

    public function updatePassword(PasswordRequest $request) {
        $admin = $request->session()->get('admin');

        $oldPass = $request->oldPass;
        $newPass = $request->newPass;
        $confirmPass = $request->confirmPass;

        if($oldPass == $admin->password){
            if($newPass == $confirmPass){
                $admin->password = $confirmPass;
                $admin->save();

                $request->session()->flash('message', 'Password successfully updated');
                return redirect()->route('admin.editPassword');
            }
            else {
                $request->session()->flash('message', 'Your passwords do not match!');
                return redirect()->route('admin.editPassword');
            }
        }
        else {
            $request->session()->flash('message', 'Incorrect Password, try again!');
            return redirect()->route('admin.editPassword');
        }
    }

    public function newOrder() {
        $categories = Category::all();
        $tables = Table::where('status', 'Available')->get();
        return view('admin.orders.new')
            ->with('categories', $categories)
            ->with('tables', $tables);
    }

    public function addOrder(Request $request) {
        $item = Item::findOrFail($request->item_id);
        // dd($item);
        $table = Table::findOrFail($request->table_id);

        $cartItem = Cart::add($item->id, $item->name, 1, $item->price);
        $cartItem->associate('Item');

        return redirect()->route('admin.cart');
    }

    public function retrieve() {
        // $item = Item::findOrFail($request->id);
        // $cartItem = Cart::add($item->id, $item->name, 1, $item->price);
        // // $cartItem->associate('Item');
        dd(Cart::content());
    }


}
