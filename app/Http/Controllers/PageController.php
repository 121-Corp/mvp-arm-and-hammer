<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Query\JoinClause;
use App\Models\State;
use App\Models\StateBusinessContact;
use App\Models\BusinessContact;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{

    protected  $products;
    public function __construct()
    {
       $this->products = collect(Storage::json('public/jsons/products.json'));
    }

    public function index(){

        return view('home')->with([
            "title" => "YOUR NUTRITION POWERHOUSE",
            "subtitle" => "Set your dairy apart with feed ingredients that optimize the health of your herd.",
            "phrase" => "",
            "imgPathDesktop" => "images/Desk/Home/Banner_Home_2x.png",
            "imgPathMovil" => "images/Mobile/Home/Banner_Home_2x.png",
            "headerType" => "home",
            "products" => $this->products
        ]);
    }

    public function products(){
        return view('products')->with([
            "title" => "Dairy Products",
            "subtitle" => "",
            "phrase" => "Build cow health, production and resiliency with proven nutrition supplements and gut health solutions.",
            "imgPathDesktop" => "images/Desk/Products/Banner_Products_2x.png",
            "imgPathMovil" => "images/Mobile/Products/Banner_Products_2x.png",
            "headerType" => "default",
            "products" => $this->products
        ]);
    }
    public function productsDetails(Request $request){
        $product  = $this->products->where('name',$request['name'])->first();

        return view('product-detail')->with([
            "title" => "",
            "subtitle" => "",
            "phrase" => "",
            "imgPathDesktop" => "images/Desk/Product-Details/banner_desktop_2x.png",
            "imgPathMovil" => "images/Mobile/Product-Details/banner_mobile_2x.png",
            "headerType" => "details",
            "product" => $product
        ]);
    }

    public function distributors(Request $request){
        $distributors = null;
        $stateTitle = "";
        $searchWord = "";

        if ($request->has('state') && !empty($request->input("state"))) {
            $validatedData = $request->validate([
                'state' => 'regex:/^[a-zA-Z ]+$/i'
            ]);

            if (!empty($validatedData["state"])) {
                $searchWord = $validatedData["state"];

                if ($validatedData["state"] == 'united states' || $validatedData["state"] == 'us' || $validatedData["state"] == 'usa') {
                    // get all distributors
                    $distributors = BusinessContact::where('role', "distributor")->get();
                    $stateTitle = "United States";
                } else {
                    // get state
                    $states = State::where('name', 'like', '%'. $validatedData["state"] .'%')->get();

                    if ($states->isNotEmpty()) {
                        $stateTitle = $states->first()->name;

                        // get distributors
                        $distributors = StateBusinessContact::where('state', $states->first()->id)
                                            ->join('business_contacts', function (JoinClause $join) {
                                                $join->on('business_contacts.id', '=', 'state_business_contacts.contact')
                                                     ->where('business_contacts.role', 'distributor');
                                            })
                                            ->get();
                    }
                }
            }
        } else {
            // get all distributors
            $distributors = BusinessContact::where('role', "distributor")->get();
            $stateTitle = "United States";
            $searchWord = "United States";
        }

        return view('distributors')->with([
            "title" => "Distributors",
            "subtitle" => "",
            "phrase" => "Looking for an Arm & Hammer Animal Nutrition distributor near you?",
            "imgPathDesktop" => "images/Desk/Distributors/Banner_Distributors_2x.png",
            "imgPathMovil" => "images/Mobile/Distributors/Banner_Distributor_2x.png",
            "headerType" => "distributors",
            "distributors" => $distributors,
            "stateTitle" => $stateTitle,
            "searchWord" => $searchWord
        ]);
    }

    public function representatives(Request $request){
        $representatives = null;
        $stateTitle = "";
        $searchWord = "";

        if ($request->has('state') && !empty($request->input("state"))) {
            $validatedData = $request->validate([
                'state' => 'regex:/^[a-zA-Z ]+$/i'
            ]);

            if (!empty($validatedData["state"])) {
                $searchWord = $validatedData["state"];

                if ($validatedData["state"] == 'united states' || $validatedData["state"] == 'us' || $validatedData["state"] == 'usa') {
                    // get all representatives
                    $representatives = BusinessContact::where('role', "representative")
                                        ->join('region_business_contacts', function (JoinClause $join) {
                                            $join->on('region_business_contacts.contact', '=', 'business_contacts.id');
                                        })
                                        ->join('regions', function (JoinClause $join) {
                                            $join->on('regions.id', '=', 'region_business_contacts.region');
                                        })
                                        ->select([
                                            // all fields that you want to select
                                            "business_contacts.name as name",
                                            "business_contacts.email as email",
                                            "business_contacts.phone as phone",
                                            "business_contacts.url as url",
                                            "business_contacts.company as company",
                                            "business_contacts.role as role",
                                            "regions.name as region"
                                        ])
                                        ->get();
                    $stateTitle = "United States";
                } else {
                    // get state
                    $states = State::where('name', 'like', '%'. $validatedData["state"] .'%')->get();

                    if ($states->isNotEmpty()) {
                        $stateTitle = $states->first()->name;

                        // get representatives
                        $representatives = StateBusinessContact::where('state', $states->first()->id)
                                            ->join('business_contacts', function (JoinClause $join) {
                                                $join->on('business_contacts.id', '=', 'state_business_contacts.contact')
                                                     ->where('business_contacts.role', 'representative');
                                            })
                                            ->join('region_business_contacts', function (JoinClause $join) {
                                                $join->on('region_business_contacts.contact', '=', 'business_contacts.id');
                                            })
                                            ->join('regions', function (JoinClause $join) {
                                                $join->on('regions.id', '=', 'region_business_contacts.region');
                                            })
                                            ->select([
                                                // all fields that you want to select
                                                "business_contacts.name as name",
                                                "business_contacts.email as email",
                                                "business_contacts.phone as phone",
                                                "business_contacts.url as url",
                                                "business_contacts.company as company",
                                                "business_contacts.role as role",
                                                "regions.name as region"
                                            ])
                                            ->get();
                    }
                }
            }
        } else {
            // get all representatives
            $representatives = BusinessContact::where('role', "representative")
                                ->join('region_business_contacts', function (JoinClause $join) {
                                    $join->on('region_business_contacts.contact', '=', 'business_contacts.id');
                                })
                                ->join('regions', function (JoinClause $join) {
                                    $join->on('regions.id', '=', 'region_business_contacts.region');
                                })
                                ->select([
                                    // all fields that you want to select
                                    "business_contacts.name as name",
                                    "business_contacts.email as email",
                                    "business_contacts.phone as phone",
                                    "business_contacts.url as url",
                                    "business_contacts.company as company",
                                    "business_contacts.role as role",
                                    "regions.name as region"
                                ])
                                ->get();
            $stateTitle = "United States";
            $searchWord = "United States";
        }

        return view('representatives')->with([
            "title" => "Sales Representative",
            "subtitle" => "",
            "phrase" => "Looking for an Arm & Hammer Animal Nutrition sales representative near you?",
            "imgPathDesktop" => "images/Desk/Sales_Representative/Banner_Sales_2x.png",
            "imgPathMovil" => "images/Mobile/Sales_Representative/Banner_Sales_Representatives_2x.png",
            "headerType" => "representatives",
            "representatives" => $representatives,
            "stateTitle" => $stateTitle,
            "searchWord" => $searchWord
        ]);
    }

    public function contact(){
        return view('contact')->with([
            "title" => "Set Your Herd Apart",
            "subtitle" => "",
            "phrase" => "You’re ready to build a resilient herd. And, we’re here to help.",
            "imgPathDesktop" => "images/Desk/Contact/Contact-2x.png",
            "imgPathMovil" => "images/Mobile/Contact/Contact-2x.png",
            "headerType" => "contact"
        ]);
    }
}
