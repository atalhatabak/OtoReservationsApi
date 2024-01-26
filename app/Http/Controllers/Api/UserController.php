<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Region;
use App\Models\City;
use App\Models\Branch;
use App\Models\Reservation;
use App\Models\User;
use App\Models\Car;


class UserController extends Controller
{
    public function getBranchs(Request $request)
    {
        
        $branches = Branch::select('branches.id','branches.branch', 'cities.city', 'regions.region')
            ->join('cities', 'branches.city_id', '=', 'cities.id')
            ->join('regions', 'branches.region_id', '=', 'regions.id')
            ->get();
        $cities = City::select( 'cities.city',  'regions.region')
            ->join('regions', 'cities.region_id', '=', 'regions.id')
            ->get();
        $regions = Region::pluck('region');

        $data=[$branches,$cities,$regions];
        return response()->json(['message' => $data]);
    }
    public function getAvaibleDates(Request $request)
    {
        $aylar = array(1 => "Ocak",2 => "Şubat",3 => "Mart",4 => "Nisan",5 => "Mayıs",6 => "Haziran",7 => "Temmuz",8 => "Ağustos",9 => "Eylül",10 => "Ekim",11 => "Kasım",12 => "Aralık");
        $gunler = array("Pazar","Pazartesi","Salı", "Çarşamba", "Perşembe", "Cuma", "Cumartesi");
        $branch = $request->branch;

        $year=date("Y");
        $month=date("n"); // bu ayın numara olarak karşılığı, örn->1
        $day=date("d");

        function haftaninGunu($tarih) {
            $haftaninGunu = date('w', strtotime($tarih));
            return $haftaninGunu;
        }

        $data = array(); 
        for($i = $month; $i<=6; $i++){
            $data[$aylar[$i]] = [];
            for($e = 1; $e <= cal_days_in_month(CAL_GREGORIAN, $i, date('Y')); $e++){
                $sunData=date('Y')."-$i-$e";
                if(haftaninGunu($sunData) != 0){ // Gün Pazar mı kontrol ediliyor, pazarsa eklenmiyor
                    array_push($data[$aylar[$i]], $e." ".$gunler[haftaninGunu($sunData)]);
                }
                
            }
        } // $data dizisine bu aydan itibaren önümüzdeki 6 ay ve her ayın numara olarak günleri eklendi örn 'Ocak':['1','2','3'...]... 

        array_splice($data["Ocak"], 0, $day-1); // bu ayın ilk gününden bugüne kadar olan günler silindi


        return response()->json(['message' => $data  ]);
    }
    public function getCars(Request $request)
    {
        $user_id = (int) $request->user_id;
        $cars = Car::where('user_id', $user_id)->select('id','brand', 'model')->get();
        
        return response()->json(['message' => $cars]);
    }
    public function addCar(Request $request)
    {
        try{
            $validate = Validator::make($request->all(), 
            [
                'brand' => 'required',
                'model' => 'required',
                'user_id' => 'required',
            ]);
    
            if($validate->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'Eksik Bilgi',
                    'errors' => $validateUser->errors()
                ], 401);
            }
    
            $car= Car::create([
                'brand' => $request->brand,
                'model' => $request->model,
                'user_id' => (int) $request->user_id,
            ]);
            return response()->json([
                'status' => true,
                'message' => 'Araç Eklendi',
             ], 200);
        }
        catch(\Throwable $th){
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }        
    }

    public function getReservations(Request $request)
    {
        $user_id=$request->user_id;


        $reservations = Reservation::select('reservations.id','reservations.date','reservations.session','branches.branch','branches.address','cities.city','cars.brand','cars.model','reservations.report')
            ->join('cities', 'branches.city_id', '=', 'cities.id')
            ->join('branches','reservations.branch_id', '=', 'branches.id')
            ->join('cars','reservations.car_id', '=', 'cars.id')
            ->where('reservations.user_id', $user_id) // Sadece user_id değeri 1 olanları filtrele
            ->get();
        $data = $reservations;
        return response()->json(['message' => $data]);
    }

    public function addReservations(Request $request)
    {
        try{
            $validate = Validator::make($request->all(), 
            [
                'date' => 'required',
                'session' => 'required',
                'user_id' => 'required',
                'branch_id' => 'required',
                'car_id' => 'required',
            ]);
    
            if($validate->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'Eksik Bilgi',
                    'errors' => $validateUser->errors()
                ], 401);
            }

            // Şubat-2 Cuma-2024 bu şekilde gelen veri 2.2.2024 bu şekilde olacak şekilde güncelleniyor
            $aylar = array(1 => "Ocak",2 => "Şubat",3 => "Mart",4 => "Nisan",5 => "Mayıs",6 => "Haziran",7 => "Temmuz",8 => "Ağustos",9 => "Eylül",10 => "Ekim",11 => "Kasım",12 => "Aralık");
            $date=$request->date;
            $date=explode('-',$date);
            $day=$date[1];
            $day=explode(' ',$day);
            $day=$day[1];
            $month=$date[0];
            $month = array_search(ucfirst(strtolower($month)), $aylar);
            $year=$date[2];
            $date="$day.$month.$year";


            $car= Reservation::create([
                'date' => $date,
                'session' => $request->session,
                'user_id' => $request->user_id,
                'branch_id' => $request->branch_id,
                'car_id' => $request->car_id,

            ]);
            return response()->json([
                'status' => true,
                'message' => 'Rezervasyon Oluşturuldu',
             ], 200);
        }
        catch(\Throwable $th){
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }    
        
        
    }

    public function deleteReservation(Request $request)
        {
            $id=$request->id;
            $reservation = Reservation::find($id);
            if($reservation){
                $reservation->delete();
            }
            
            return response()->json(['message' => "Başarılı"]);
        }
}
