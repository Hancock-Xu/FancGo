<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyStoreRequest;
use Carbon\Carbon;
use App\Company;


class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::where('published_at','<=', Carbon::now())->orderBy('published_at','desc')->paginate(config('companies.posts_per_page'));
        return view('Company.index',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = \Auth::user();
        if (!$user->company){
            return view('Company.create_company',['user'=>$user]);
        }else{
            
            $company = $user->company;
            return view('Company.detail',compact('company'));
            
            /*
             * TODO:创建已经注册公司的提醒页面。
             */
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyStoreRequest $request)
    {
        /**
         * 处理上传的公司logo,营业执照图片等
         */
        $inputs = $request->all();
        $user = \Auth::user();
        $company = $user->company;

        if (!$company) {
            $company = Company::create($inputs);
        }

        return view('Jobs.create',['company'=>$company]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::find($id)->firstOrFail();
        if ($company){
            return view('Company.detail',$company);
        }else{
            return view('not_found');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::findOrFail($id);
        if ($company){
            return view('Company.edit',['company'=>$company]);
        }else{
            return view('not_found');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyStoreRequest $request, $id)
    {
        $company = Company::findOrFail($id);
        $input = $request->all();
        $company->fill($input)->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::findOrFail($id);
        $company->delete();

        return redirect()->back();
    }
}
