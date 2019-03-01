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
    public function beforeInitialize();

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
     * 设置 cookie
     * @return bool
     */
    public function setCookie();

    /**
     * 赋值
     * @param $key
     * @param $value
     * @return bool
     */
    public function set($key, $value);

    /**
     * 取值
     * @param null $key
     * @return mixed
     */
    public function get($key = null);


    /**
     * 删除
     * @param $key
     * @return bool
     */
    public function delete($key);

    /**
     * 清除session
     * @return bool
     */
    public function clear();

    /**
     * 判断是否存在
     * @param $key
     * @return bool
     */
    public function has($key);

}
