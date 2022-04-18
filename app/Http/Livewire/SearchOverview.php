<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Schema;
use Livewire\Component;
use App\Models\Administrators;
use App\Models\Categories;
use App\Models\User;
use App\Models\Settings;
use App\Models\Drugstores;
use App\Models\Medicines;
use App\Models\Diseases;
use App\Models\Symptoms;
use App\Models\Disease_symptoms;
use App\Models\Prescriptions;
use App\Models\Posts;
use App\Models\Tags;
use App\Models\Post_tags;

class SearchOverview extends Component
{

    public $searchTerm = "";
    public $data = [];

    public function change($value)
    {
        $this->searchTerm = $value;
    }

    public function render()
    {
        if (!empty($this->searchTerm)) {

            $listTable = [
                User::class,
                Administrators::class,
                Categories::class,
                Settings::class,
                Drugstores::class,
                Medicines::class,
                Diseases::class,
                Symptoms::class,
                Disease_symptoms::class,
                Prescriptions::class,
                Posts::class,
                Tags::class,
                Post_tags::class
            ];

            $param = $this->searchTerm;


            foreach ($listTable as $key => $value) {

                $data = $value::orderBy('created_at', 'DESC');

                $data->where(function ($data) use ($param, $value) {

                    $columns = Schema::getColumnListing((new $value())->getTable());

                    foreach ($columns as $valueColumn) {
                        $data->orWhere($valueColumn, "LIKE", "%{$param}%");
                    }
                });

                $data = $data->paginate(3);

                if ($data->count() > 0) {
                    $this->data[(new $value())->getTable()] = $data;
                }
            }
        }

        return view('livewire.search-overview');
    }
}
