<?php


namespace app\common\interfaces\index;


interface IndexInterface
{
    /**
     * 首页
     * @return mixed
     */
    public function index();

    /**
     * 获取文章详情
     * @param $id
     * @return mixed
     */
    public  function details($id);
}