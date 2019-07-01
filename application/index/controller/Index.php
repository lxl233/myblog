<?php


namespace app\index\controller;

use app\common\impl\index\IndexImpl;
use think\App;
use think\Controller;

class Index extends Controller
{
    protected $indexImpl;
    public function __construct(App $app)
    {
        $this->indexImpl = new IndexImpl();
        parent::__construct($app);
    }

    public function index()
    {
        $data = $this->indexImpl->index();
        return view('', compact('data'));
    }

    public function details($id = 0)
    {
        $data = $this->indexImpl->details($id);
        return view();
    }
}