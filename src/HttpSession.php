<?php

namespace Mix\Http\Session;

use Mix\Core\Component;

/**
 * Class HttpSession
 * @package Mix\Http\Session
 * @author LIUJIAN <coder.keda@gmail.com>
 */
class HttpSession extends Component
{

    /**
     * 处理者
     * @var RedisHandler
     */
    public $handler;

    /**
     * session名
     * @var string
     */
    public $name = 'session_id';

    /**
     * 生存时间
     * @var int
     */
    public $maxLifetime = 7200;

    /**
     * SessionID 长度
     * @var int
     */
    public $sessionIdLength = 26;

    /**
     * 过期时间
     * @var int
     */
    public $cookieExpires = 0;

    /**
     * 有效的服务器路径
     * @var string
     */
    public $cookiePath = '/';

    /**
     * 有效域名/子域名
     * @var string
     */
    public $cookieDomain = '';

    /**
     * 仅通过安全的 HTTPS 连接传给客户端
     * @var bool
     */
    public $cookieSecure = false;

    /**
     * 仅可通过 HTTP 协议访问
     * @var bool
     */
    public $cookieHttpOnly = false;

    /**
     * 请求前置事件
     */
    public function onBeforeRequest()
    {
        parent::onBeforeRequest();
        // 针对每个请求执行初始化
        $this->handler->initializeRequest();
    }

    /**
     * 获取SessionId
     * @return string
     */
    public function getSessionId()
    {
        return $this->handler->getSessionId();
    }

    /**
     * 创建SessionId
     * @return bool
     */
    public function createSessionId()
    {
        return $this->handler->createSessionId();
    }

    /**
     * 赋值
     * @param $name
     * @param $value
     * @return bool
     */
    public function set($name, $value)
    {
        return $this->handler->set($name, $value);
    }

    /**
     * 取值
     * @param null $name
     * @return mixed|null
     */
    public function get($name = null)
    {
        return $this->handler->get($name);
    }

    /**
     * 判断是否存在
     * @param $name
     * @return bool
     */
    public function has($name)
    {
        return $this->handler->has($name);
    }

    /**
     * 删除
     * @param $name
     * @return bool
     */
    public function delete($name)
    {
        return $this->handler->delete($name);
    }

    /**
     * 清除session
     * @return bool
     */
    public function clear()
    {
        return $this->handler->clear();
    }

}
