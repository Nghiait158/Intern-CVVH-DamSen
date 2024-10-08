<?php

namespace App\Http\Controllers;
use App\Models\Location;
use App\Models\Area;
use App\Models\Category;

use Illuminate\Http\Request;

class KhamPhaController extends Controller
{
    public function index()
    {
        $data = $this->data();
        return view('khampha', $data);
    }
    function data() {
        $locations = [];
        for ($i = 1; $i <= 61; $i++) {
            $location = Location::find($i);
            $areaName = $location ? $location->category->area->areaName : 'N/A';
    
            $locations[] = [
                'loID' => $location ? $location->loID : null,
                'loName' => $location ? $location->loName : 'null',
                'areaName' => $areaName
            ];
        }
        // -------header--------
        $all_area = Area::all();
            $categories = Category::with('locations')->get();

            // Sắp xếp các location theo categoryID và lấy luôn tên category
            $categorizedLocations = [];
            foreach ($categories as $category) {
                $categorizedLocations[$category->categoryID] = [
                    'categoryName' => $category->categoryName,
                    'locations' => $category->locations
                ];
            }
        return [
            'locations' => $locations,
            'all_area' => $all_area,
            'categorizedLocations' => $categorizedLocations,
        ];
    }

    public function khamphachitiet($loID){
        // $locationDetail = Location::find($loID);
        $locationDetail = Location::with('images')->find($loID);
        $areaName = $locationDetail ? $locationDetail->category->area->areaName : 'N/A';
        $previousLocation = Location::where('loID', '<', $locationDetail->loID)->orderBy('loID', 'desc')->first();
        $nextLocation = Location::where('loID', '>', $locationDetail->loID)->orderBy('loID', 'asc')->first();
        // Lấy các địa điểm với categoryID khác nhau
        $randomLocations = Location::where('loID', '<>', $loID) // Loại bỏ địa điểm hiện tại
        ->with(['images' => function($query) {
            $query->limit(1); // Lấy tối đa 1 hình ảnh cho mỗi địa điểm
        }, 'category.area']) // Eager load category và area
        ->inRandomOrder() // Lấy ngẫu nhiên
        ->get()
        ->groupBy('categoryID') // Nhóm theo categoryID
        ->take(4) // Chọn 4 nhóm khác nhau
        ->flatMap(function ($group) {
            return $group->take(1); // Lấy một địa điểm từ mỗi nhóm
        }); 
        

        // -------------------header--------
        $all_area = Area::all();
            $categories = Category::with('locations')->get();

            // Sắp xếp các location theo categoryID và lấy luôn tên category
            $categorizedLocations = [];
            foreach ($categories as $category) {
                $categorizedLocations[$category->categoryID] = [
                    'categoryName' => $category->categoryName,
                    'locations' => $category->locations
                ];
            }
        $data = [
            'areaName'=>$areaName,
            'locationDetail' => $locationDetail,
            'images' => $locationDetail ? $locationDetail->images : [],
            'previousLocation' => $previousLocation,
            'nextLocation' => $nextLocation,
            'randomLocations' => $randomLocations,
            // -----header------
            'all_area' => $all_area,
            'categorizedLocations' => $categorizedLocations,
        ];
        // dd($images);
        return view('khamphaChiTiet', $data);

    }



    
    

}
