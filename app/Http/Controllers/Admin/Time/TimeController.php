<?php

namespace App\Http\Controllers\Admin\Time;

use App\Http\Controllers\Controller;
use App\Model\Admin\Time;
use App\Model\Admin\DetailBill;
use App\Model\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Validator;

class TimeController extends Controller
{
    public function __construct(Time $time, DetailBill $detail_bill)
    {
        $this->time        = $time;
        $this->detail_bill = $detail_bill;
    }

    public function index(Request $request)
    {
        $request_time_slots = $request->time_slots;
        $model_time         = $this->time;
		
		$offset     = 5;
		$start_page = 1;
		$page       = $request->get('page');
		$page_time  = $this->indexTable($page, $offset);

        $time_slots = !empty($request_time_slots) ? $this->search($request_time_slots) : $model_time;
        $time_slots = $time_slots->orderBy('time_start', 'asc')
            ->paginate($offset);
        $time_slots->setPath(URL::current());

    	return view('User.Admin.Time.index',[
            'time_slots'         => $time_slots,
            'model_time'         => $model_time,
            'page_time'          => $page_time,
            'request_time_slots' => $request_time_slots,
            'request'            => $request->all()
    	]);
    }

    public function search($request_time_slots)
    {
        $time_slots = $this->time;

        !empty($request_time_slots['time_start']) ? $time_slots = $time_slots->where('time_start', '>=', $request_time_slots['time_start']) : '';
        !empty($request_time_slots['time_end']) ? $time_slots = $time_slots->where('time_end', '<=', $request_time_slots['time_end']) : '';
        (isset($request_time_slots['status']) && $request_time_slots['status'] !== null) ? $time_slots = $time_slots->where('status', $request_time_slots['status']) : '';
        !empty($request_time_slots['start_created_at']) ? $time_slots = $time_slots->where('created_at', '>=', $request_time_slots['start_created_at'].' 00:00:00') : '';
        !empty($request_time_slots['end_created_at']) ? $time_slots = $time_slots->where('created_at', '<=', $request_time_slots['end_created_at'].' 23:59:59') : '';

        return $time_slots;
    }

    public function add()
    {
        $model_time = $this->time;
    	return view('User.Admin.Time.add', [
    		'model_time' => $model_time
    	]);
    }

    public function store(Request $request)
    {
		$time_request = $request->get('time');
		// $time_request['increase_price'] = preg_replace('/[^0-9]/', '', $time_request['increase_price']);

        $this->validatorManually($time_request)->validate();


		$time_slot                 = $this->time;
		$time_slot->time_start     = $time_request['time_start'];
		$time_slot->time_end       = $time_request['time_end'];
		$time_slot->name           = $time_request['name'];
		$time_slot->status         = $time_request['status'];
		$time_slot->created_at     = Helper::getCurrentDateTime();
		$time_slot->updated_at     = Helper::getCurrentDateTime();
		$time_slot->save();

        return redirect()->route('admin.time')
            ->with('success', 'Bạn đã thêm mới khoảng thời gian');
    }

    public function edit($id)
    {
        $model_time = $this->time;
        $time_slot  = $model_time->find($id);

        return view('User.Admin.Time.edit', [
            'time_slot'  => $time_slot,
            'model_time' => $model_time,
        ]);
    }

    public function update($id, Request $request)
    {
        $model_time        = $this->time;
        $model_detail_bill = $this->detail_bill;
        $time_request = $request->time;
        $isset_time   = false;
        $name_route   = 'admin.time.edit';

        $this->validatorManually($time_request)->validate();

        // Check isset time slot in bill
        $detail_bill = $model_detail_bill->where('id_time_slot', $id)
            ->first();
        $isset_time  = !empty($detail_bill) ? true : false;

        // Get pitch
        if(!$isset_time)
        {
            $time_slot = $model_time->find($id);

            $time_slot->name       = $time_request['name'];
            $time_slot->time_start = $time_request['time_start'];
            $time_slot->time_end   = $time_request['time_end'];
            $time_slot->status     = $time_request['status'];
            $time_slot->updated_at = Helper::getCurrentDateTime();
            $time_slot->save();

            return redirect()->route($name_route, ['id' => $id])
                ->with('success', 'Bạn đã sửa khung giờ');
        }

        return redirect()->route($name_route, ['id' => $id])
                ->with('error', 'Khung giờ đã được sử dụng, không thể chỉnh sửa');
    }




    private $array_validate = [
		'name'         => ['required', 'string', 'min:2', 'max:25'],
		'status'       => ['required', 'string', 'min:1', 'max:1'],
		'time_start'   => ['required', 'date_format:H:i'],
		'time_end'     => ['required', 'date_format:H:i', 'after:time_start'],
    ];

    private function validatorManually(array $data)
    {
        return Validator::make($data, $this->array_validate, $this->messages());
    }

    // private function validatorIncreasePrice(array $data)
    // {
    // 	$array_validate = $this->array_validate;
    // 	$array_validate['increase_price'] = ['required', 'string', 'min:5', 'max:7'];
    //     return Validator::make($data, $array_validate, $this->messages());
    // }

    private function messages()
    {
        return [
			'required'         => 'Không được để trống',
			'string'           => 'Sai định dạng',
			'max'              => 'Sai định dạng, dài hơn :max ký tự',
			'min'              => 'Sai định dạng, ngắn hơn :min ký tự',
			'status.max'       => 'Sai định dạng',
			'status.min'       => 'Sai định dạng',
			'date_format'      => 'Sai định dạng',
			'time_end.after'   => 'Giờ không hợp lệ',
        ];
    }
}
