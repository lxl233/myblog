<?php


namespace app\common\impl\index;


use app\common\interfaces\index\IndexInterface;
use app\common\model\Article as ArticleModel;
use app\common\model\Config as ConfigModel;
use think\exception\DbException;

class IndexImpl implements IndexInterface
{
    protected $configModel;
    protected $articleModel;
    public function __construct()
    {
        $this->configModel = new ConfigModel();
        $this->articleModel = new ArticleModel();
    }

    /**
     * 首页
     * @return mixed
     */
    public function index()
    {
        $data = array();
        try{
            $queryTitle = $this->configModel->where(['key' => 'myTitle'])->field(['val'])->find();
            $queryAnnouncement = $this->configModel->where(['key' => 'announcement'])->field(['val'])->find();
            $queryArticle = $this->articleModel->field(['id', 'title', 'content', 'create_time'])->select();
            $data['title'] = $queryTitle['val'];
            $data['announcement'] = $queryAnnouncement['val'];
            $data['data'] = $queryArticle;
        }catch (DbException $dbException){
        }
        return $data;
    }

    /**
     * 获取文章详情
     * @param $id
     * @return mixed
     */
    public function details($id)
    {
        $data = array();
        return $data;
    }
}