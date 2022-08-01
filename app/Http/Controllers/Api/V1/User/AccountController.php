<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Models\User;
use App\Models\Admin\Driver;
use App\Base\Constants\Auth\Role;
use App\Http\Controllers\ApiController;
use App\Transformers\User\UserTransformer;
use App\Transformers\Driver\DriverProfileTransformer;
use App\Transformers\Owner\OwnerProfileTransformer;

class AccountController extends ApiController
{
    /**
     * Get the current logged in user.
     * @group User-Management
     * @return \Illuminate\Http\JsonResponse
    * @responseFile responses/auth/authenticated_driver.json
    * @responseFile responses/auth/authenticated_user.json
     */
    public function me()
    {
        if (auth()->user()->hasRole(Role::DRIVER)) {
            $user = User::where('id', auth()->user()->id)->companyKey()->first();
            $driver_details = $user->driver;
            $user = fractal($driver_details, new DriverProfileTransformer)->parseIncludes(['onTripRequest.userDetail','onTripRequest.requestBill','metaRequest.userDetail']);
        } else if(auth()->user()->hasRole(Role::USER)) {
            $user = User::where('id', auth()->user()->id)->companyKey()->first();
            $user = fractal($user, new UserTransformer)->parseIncludes(['onTripRequest.driverDetail','onTripRequest.requestBill','metaRequest.driverDetail','favouriteLocations','laterMetaRequest.driverDetail']);
        }else{

            $user = User::where('id', auth()->user()->id)->first();

            $owner_details = $user->owner;

            $user = fractal($owner_details, new OwnerProfileTransformer);
        }

        if(auth()->user()->hasRole(Role::DISPATCHER)){

            $user = User::where('id',auth()->user()->id)->first();

            
        }

        return $this->respondOk($user);
    }
}
