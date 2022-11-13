<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivitySummary
{
    private $title;
    private $paramaters;

    // TODO 各サービス毎のクラスを作成する
    public function __construct($title, $paramaters)
    {
        $this->title = $title;
        $this->paramaters = $paramaters;
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function getParamaters()
    {
        return $this->paramaters;
    }
}

class MainController extends Controller
{
    public function index()
    {
        $section_names = ["サマリー", "詳細検索", "サービス連携"];
        $activity_summaries = array(
            new ActivitySummary("GitHub", array()),
            new ActivitySummary("Twitter", array()),
        );

        return view('index')->with([
            "section_names" => $section_names,
            "activity_summaries" => $activity_summaries,
        ]);
    }
}
