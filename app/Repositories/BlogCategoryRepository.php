<?php

namespace App\Repositories;

use App\Models\BlogCategory as Model;
use Illuminate\Database\Eloquent\Collection;

class BlogCategoryRepository extends CoreRepository
{
    /**
     * @return string
     */
    protected function getModelClass()
    {
        return Model::class;
    }


    /**
     * Получить модель редактирования в админке
     *
     * @param int $id
     *
     * @return Model
     */

    public function getEdit($id)
    {
        return $this->startConditions()->find($id);
    }

    /**
     * Получить список категорий для вывода в выпадающем списке
     */

    public function getForComboBox()
    {
        return $this->startConditions()->all();
    }


}
