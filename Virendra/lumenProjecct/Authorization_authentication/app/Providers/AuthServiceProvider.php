<?php


namespace App\Providers;
use App\Users;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->registerPolicies();

        $this->app['auth']->viaRequest('api', function ($request) {
            if ($request->header('Authorization')) {
            $key = explode(' ',$request->header('Authorization'));
            $user = Users::where('api_key', $key[1])->first();
            if(!empty($user)){
            $request->request->add(['userid' => $user->id]);
            }
            return $user;
            }
            });
    }
}
