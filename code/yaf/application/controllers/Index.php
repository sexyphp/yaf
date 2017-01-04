<?php
/* 控制器
 * 默认的模块/控制器/动作, 都是以Index命名的, 当然,这是可通过配置文件修改的.
 * Action的命名规则是"名字+Action"
 *
 */

class IndexController extends Yaf_Controller_Abstract {
   public function indexAction() {//默认Action
       $this->getView()->assign("content", "Hello World");
   }
}
