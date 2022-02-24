<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceImage;
use App\Models\Menu;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
{
    //
    public function index()
    {
        $menus = Menu::with('categories')->get();
        $categories = Category::select('id', 'name')->get();
        $popular = Category::where('popular', 1)->get();
        return view('services.service', compact('menus', 'popular', 'categories'));
    }

    public function search(Request $request)
    {
        if (!$request->ajax()) {
            return redirect()->back();
        }

        $data = $request->validate([
            'category_id' => 'required'
        ]);

        $ageExists = false;
        $minRatingExists = false;
        $languageExists = isset($request->language) ?  true : false;
        $genderExists = isset($request->gender) ? true : false;
        $priceMinExists = isset($request->priceMin) ? true : false;
        $priceMaxExists = isset($request->priceMax) ? true : false;


        $age = false;
        if (isset($request->age)) {
            if (is_numeric($request->age)) {
                $ageExists = true;
            }
        }

        if (isset($request->minRating)) {
            if (is_numeric($request->minRating)) {
                $minRatingExists = true;
            }
        }

        // dd($data['category_id']);
        $services =  DB::table('services')
            ->distinct()
            ->leftJoin('users', 'services.user_id', '=', 'users.id')
            // ->leftJoin('service_images', 'services.id', '=', 'service_images.service_id')
            ->select('services.*', 'users.name as users_name', 'users.primary_language', 'users.secondary_language', 'users.gender', 'users.profile_picture', 'users.seller_audio_link as audio_link')
            ->where('category_id', $data['category_id'])
            ->where('services.active', 1)
            ->when($ageExists, function ($q) {
                global $request;
                $q->where(function ($query) use ($request) {
                    $query->where('users.birth_date', '<=', Carbon::now()->subYears(intVal($request->age))->toDateString())
                        ->orWhereNull('users.birth_date');
                });
            })
            ->when($minRatingExists, function ($q) {
                global $request;
                $q->where(function ($query) use ($request) {
                    $query->where('services.rating', '>=', $request->minRating);
                });
            })
            ->when($genderExists, function ($q) {
                global $request;
                $q->where(function ($query) use ($request) {
                    switch ($request->gender) {
                        case '0':
                            $gender = 'Male';
                            break;

                        case '1':
                            $gender = 'Female';
                            break;

                        case '2':
                            $gender = 'Other';
                            break;

                        default:
                            $gender = 'Male';
                            break;
                    }
                    $query->where('users.gender', $gender)
                        ->orWhereNull('users.gender');
                });
            })
            ->when($priceMinExists, function ($q) {
                global $request;
                $q->where(function ($query) use ($request) {
                    $query->where('services.price', '>=', $request->priceMin);
                });
            })
            ->when($priceMaxExists, function ($q) {
                global $request;
                $q->where(function ($query) use ($request) {
                    $query->where('services.price', '<=', $request->priceMax);
                });
            })
            ->when($languageExists, function ($q) {
                global $request;
                $languages = [
                    'Afrikaans',
                    'Albanian',
                    'Arabic',
                    'Armenian',
                    'Bosnian',
                    'Basque',
                    'Bengali',
                    'Bulgarian',
                    'Catalan',
                    'Cambodian',
                    'Chinese',
                    'Chinese (Mandarin)',
                    'Croatian',
                    'Czech',
                    'Danish',
                    'Dutch',
                    'English',
                    'Estonian',
                    'Fiji',
                    'Finnish',
                    'French',
                    'Georgian',
                    'German',
                    'Greek',
                    'Gujarati',
                    'Hebrew',
                    'Hindi',
                    'Hungarian',
                    'Icelandic',
                    'Indonesian',
                    'Irish',
                    'Italian',
                    'Japanese',
                    'Javanese',
                    'Korean',
                    'Latin',
                    'Latvian',
                    'Lithuanian',
                    'Macedonian',
                    'Malay',
                    'Malayalam',
                    'Maltese',
                    'Maori',
                    'Marathi',
                    'Mongolian',
                    'Nepali',
                    'Norwegian',
                    'Persian',
                    'Polish',
                    'Portuguese',
                    'Punjabi',
                    'Quechua',
                    'Romanian',
                    'Russian',
                    'Samoan',
                    'Serbian',
                    'Slovak',
                    'Slovenian',
                    'Spanish',
                    'Swahili',
                    'Swedish ',
                    'Tamil',
                    'Tatar',
                    'Telugu',
                    'Thai',
                    'Tibetan',
                    'Tonga',
                    'Turkish',
                    'Ukrainian',
                    'Urdu',
                    'Uzbek',
                    'Vietnamese',
                    'Welsh',
                    'Xhosa'
                ];
                if (in_array($request->language, $languages)) {
                    $q->where(function ($query) use ($request) {
                        $query->where('primary_language', $request->language)->orWhere('secondary_language', $request->language);
                    });
                }
            })
            // ->where(function($q) {
            //     $q->where('service_images.default_image','=',1)
            //     ->orWhereNull('service_images.id');
            // })
            ->whereNotNull('users.id')
            ->where('users.seller_vacation_mode', '0')
            ->where('users.banned', '0')
            ->paginate(12);


        foreach ($services as $index => $service) {
            $img = ServiceImage::where('service_id', $service->id)->where('active', 1)->where('default_image', 1)->first();

            if ($img != null) {
                $service->file_name = $img->file_name;
            } else {
                $service->file_name = null;
            }
        }
        return response()->json($services);
    }

    public function service($id)
    {
        $id = intVal($id);
        $service = Service::with('images', 'category', 'user', 'ratings', 'posts')->whereId($id)->first();

        if ($service == null) {
            return redirect('/');
        }
        // print_r($service);
        // exit();
        return view('services.serviceSingle', compact('service'));
    }
}
