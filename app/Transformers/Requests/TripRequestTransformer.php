<?php

namespace App\Transformers\Requests;

use App\Transformers\Transformer;
use App\Transformers\User\UserTransformer;
use App\Transformers\Driver\DriverTransformer;
use App\Models\Request\Request as RequestModel;
use App\Transformers\User\AdHocUserTransformer;
use App\Transformers\Requests\RequestBillTransformer;
use Carbon\Carbon;
use App\Base\Constants\Masters\PaymentType;
use App\Base\Constants\Setting\Settings;


class TripRequestTransformer extends Transformer
{
    /**
     * Resources that can be included if requested.
     *
     * @var array
     */
    protected $availableIncludes = [
        'driverDetail','userDetail','requestBill'
    ];

    /**
     * A Fractal transformer.
     *
     * @param RequestModel $request
     * @return array
     */
    public function transform(RequestModel $request)
    {
        $params =  [
            'id' => $request->id,
            'request_number' => $request->request_number,
            'ride_otp'=>$request->ride_otp,
            'is_later' => $request->is_later,
            'user_id' => $request->user_id,
            'service_location_id'=>$request->service_location_id,
            'trip_start_time' => $request->converted_trip_start_time,
            'arrived_at' => $request->converted_arrived_at,
            'accepted_at' => $request->converted_accepted_at,
            'completed_at' => $request->converted_completed_at,
            'is_driver_started'=>$request->is_driver_started,
            'is_driver_arrived'=>$request->is_driver_arrived,
            'updated_at'=>$request->converted_updated_at,
            'is_trip_start'=>$request->is_trip_start,
            'total_distance'=>number_format($request->total_distance,2),
            'total_time'=>$request->total_time,
            'is_completed'=>$request->is_completed,
            'is_cancelled' => $request->is_cancelled,
            'cancel_method'=>$request->cancel_method,
            'payment_opt' => $request->payment_opt,
            'is_paid' => $request->is_paid,
            'user_rated' => $request->user_rated,
            'driver_rated' => $request->driver_rated,
            'unit' => $request->unit==0?'MILES':'KM',
            'zone_type_id'=>$request->zone_type_id,
            'vehicle_type_name'=>$request->vehicle_type_name,
            'vehicle_type_image'=>$request->vehicle_type_image,
            'car_make_name'=>$request->driverDetail?$request->driverDetail->car_make_name:'-',
            'car_model_name'=>$request->driverDetail?$request->driverDetail->car_model_name:'-',
            'pick_lat'=>$request->pick_lat,
            'pick_lng'=>$request->pick_lng,
            'drop_lat'=>$request->drop_lat,
            'drop_lng'=>$request->drop_lng,
            'pick_address'=>$request->pick_address,
            'drop_address'=>$request->drop_address,
            'requested_currency_code'=>$request->requested_currency_code,
            'requested_currency_symbol'=>$request->requested_currency_symbol,
            'user_cancellation_fee'=>0,
            'is_rental'=>(bool)$request->is_rental,
            'rental_package_id'=>$request->rental_package_id,
            'is_out_station'=>$request->is_out_station,
            'rental_package_name'=>$request->rentalPackage?$request->rentalPackage->name:'-',
            'show_drop_location'=>false,
            'show_otp_feature'=>true,
            'request_eta_amount'=>$request->request_eta_amount,
            'show_request_eta_amount'=>true,
            'ride_user_rating'=>0,
            'ride_driver_rating'=>0,
            'if_dispatch'=>false
        ];

        $maximum_time_for_find_drivers_for_regular_ride = (get_settings(Settings::MAXIMUM_TIME_FOR_FIND_DRIVERS_FOR_REGULAR_RIDE) * 60);

        $current_time = $current_time = Carbon::now();

        $trip_requested_time = Carbon::parse($request->created_at);

        $difference_request_duration = $trip_requested_time->diffInMinutes($current_time);

        $difference_request_duration = $difference_request_duration * 60;

        $final_interval = ($maximum_time_for_find_drivers_for_regular_ride - $difference_request_duration);

        if($final_interval<0){
            $final_interval =1;
        }
        $params['maximum_time_for_find_drivers_for_regular_ride'] = $final_interval;


        if (!$request->is_later) {
            $ride_type = 1;
        } else {
            $ride_type = 2;
        }

        $zone_type_price = $request->zoneType->zoneTypePrice()->where('price_type', $ride_type)->first();

        $params['free_waiting_time_in_mins_before_trip_start'] = $zone_type_price->free_waiting_time_in_mins_before_trip_start;

        $params['free_waiting_time_in_mins_before_trip_start'] = $zone_type_price->free_waiting_time_in_mins_before_trip_start;
        
        if($request->requestRating()->exists()){

          $params['ride_user_rating'] = $request->requestRating()->where('user_rating',1)->pluck('rating')->first();

            $params['ride_driver_rating'] = $request->requestRating()->where('driver_rating',1)->pluck('rating')->first();
        }
        if($request->if_dispatch){

            $params['if_dispatch'] = true;
            $params['show_request_eta_amount'] = false;
            $params['show_otp_feature'] = false;
        }

        if(get_settings('show_ride_otp_feature')=='0'){
            $params['show_otp_feature'] = false;  
        }
        
        if($request->payment_opt ==PaymentType::CARD){
            
            $params['payment_type_string'] = 'card';

        }elseif($request->payment_opt ==PaymentType::CASH){

            $params['payment_type_string'] = 'cash';
        }else{

            $params['payment_type_string'] = 'wallet';

        }

        if ($request->trip_start_time==null) {
            $params['cv_trip_start_time'] = null;
        }

        $timezone = $request->serviceLocationDetail->timezone?:env('SYSTEM_DEFAULT_TIMEZONE');

        $params['cv_trip_start_time'] = Carbon::parse($request->trip_start_time)->setTimezone($timezone)->format('h:i A');

        if ($request->completed_at==null) {
            $params['cv_completed_at'] = null;
        }
        $params['cv_completed_at'] = Carbon::parse($request->completed_at)->setTimezone($timezone)->format('h:i A');


        if($request->is_cancelled){

            if($request->requestCancellationFee()->exists()){

                $params['user_cancellation_fee'] = $request->requestCancellationFee()->where('user_id',$request->user_id)->pluck('cancellation_fee')->first()?:0;

                $params['driver_cancellation_fee'] = $request->requestCancellationFee()->where('driver_id',$request->driver_id)->pluck('cancellation_fee')->first()?:0;
            }

        }

        return $params;
    }

    /**
     * Include the driver of the request.
     *
     * @param RequestModel $request
     * @return \League\Fractal\Resource\Item|\League\Fractal\Resource\NullResource
     */
    public function includeDriverDetail(RequestModel $request)
    {
        $driverDetail = $request->driverDetail;

        return $driverDetail
        ? $this->item($driverDetail, new DriverTransformer)
        : $this->null();
    }
    /**
     * Include the user of the request.
     *
     * @param RequestModel $request
     * @return \League\Fractal\Resource\Item|\League\Fractal\Resource\NullResource
     */
    public function includeUserDetail(RequestModel $request)
    {
        if ($request->if_dispatch || $request->user_id==null) {
            // @TODO need to redirect with adhoc user transformer
            $userDetail = $request->adHocuserDetail;
            return $userDetail
        ? $this->item($userDetail, new AdHocUserTransformer)
        : $this->null();
        } else {
            $userDetail = $request->userDetail;
            return $userDetail
        ? $this->item($userDetail, new UserTransformer)
        : $this->null();
        }
    }
    /**
    * Include the calculated bill of the request.
    *
    * @param RequestModel $request
    * @return \League\Fractal\Resource\Item|\League\Fractal\Resource\NullResource
    */
    public function includeRequestBill(RequestModel $request)
    {
        $requestBill = $request->requestBillDetail;

        return $requestBill
        ? $this->item($requestBill, new RequestBillTransformer)
        : $this->null();
    }
}
