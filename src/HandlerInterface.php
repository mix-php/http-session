<?php

namespace Mix\Http\Session;

/**
 * Interface HandlerInterface
 * @package Mix\Http\Session
 * @author LIUJIAN <coder.keda@gmail.com>
 */
interface HandlerInterface
{

    /**
     * 针对每个请求执行初始化
     */
    public function initializeRequest();

    /**
     * 加载 SessionId
     * @return bool
     */
    public function loadSessionId();

    /**
     * 创建 SessionId
     * @return bool
     */
    public function createSessionId();

    /**
     * 获取 SessionId
     * @return string
     */
    public function getSessionId();

    /**
     * 赋值
     * @param $name
     * @param $value
     * @return bool
     */
    public function set($name, $value);

    /**
     * 设置 cookie
     * @return bool
     */
    public function setCookie();

    /**
     * 取值
     * @param null $name
     * @return mixed|null
     */
    public function get($name = null);

    /**
     * 判断是否存在
     * @param $name
     * @return bool
     */
    public function has($name);

    /**
     * 删除
     * @param $name
     * @return bool
     */
    public function delete($name);

    /**
     * 清除session
     * @return bool
     */
    public function clear();

}
