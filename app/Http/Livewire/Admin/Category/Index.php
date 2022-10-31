<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $categorys_id;

    public function deleteCategory($categorys_id)
    {
        $this->categorys_id = $categorys_id;
    }

    public function destroyCategory()
    {
        $category = Category::find($this->categorys_id);
        $path = 'uploads/category/'.$category->image;
        if(File::exists($path)){
            File::delete($path);
        }
        $category->delete();
        session()->flash('message', 'Category Deleted');
    }


    public function render()
    {
        $category = Category::orderBy('id', 'DESC')->paginate(6);
        return view('livewire.admin.category.index', ['category' => $category]);
    }

}
