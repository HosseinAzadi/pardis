<?php

namespace Modules\PardisCore\Observers;

use App\Models\User;
use Modules\PardisCore\Models\Company;

class CompanyObserver
{
    /**
     * Handle the Company "created" event.
     *
     * @param Company $company
     * @return void
     */
    public function created(Company $company)
    {
        User::query()->where('id', auth()->user()->id)->update([
            'company_id' => $company->id
        ]);
    }

    /**
     * Handle the Company "updated" event.
     *
     * @param Company $company
     * @return void
     */
    public function updated(Company $company)
    {
        //
    }

    /**
     * Handle the Company "deleted" event.
     *
     * @param Company $company
     * @return void
     */
    public function deleted(Company $company)
    {
        //
    }

    /**
     * Handle the Company "restored" event.
     *
     * @param Company $company
     * @return void
     */
    public function restored(Company $company)
    {
        //
    }

    /**
     * Handle the Company "force deleted" event.
     *
     * @param Company $company
     * @return void
     */
    public function forceDeleted(Company $company)
    {
        //
    }
}
