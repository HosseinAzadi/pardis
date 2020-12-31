<?php


namespace Modules\PardisCore\Repositories;


use Modules\PardisCore\Models\Company;

class CompanyRepository
{
    public function all()
    {
        return Company::all();
    }
    public function allWithPaginate()
    {
        return Company::query()->paginate();
    }
}
