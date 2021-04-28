<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Calendar\CalendarView;

class CalendarController extends Controller
{
    public function show(Request $request){

		//クエリーのdateを受け取る
		$date = $request->input("date");
		
		//dateがYYYY-MMの形式かどうか判定する
		if($date && preg_match("/^[0-9]{4}-[0-9]{2}$/", $date)){
			$date = strtotime($date . "-01");
		}else{
			$date = null;
		}
		dd($date);
		//取得出来ない時は現在(=今月)を指定する
		if(!$date)$date = time();
		//dd($date);

		//カレンダーに渡す
		$calendar = new CalendarView($date);
        //dd($calendar);
		return view('calendar', [
			"calendar" => $calendar
		]);
	}
}
