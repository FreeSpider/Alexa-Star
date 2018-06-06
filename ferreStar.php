<?php
class ferreStar
{
    /**
     * constellation
     * @param int $month
     * @param int $day
     * @return string|mixed
     */
    public function star($month, $day)
    {
        if ($month < 1 || $month > 12 || $day < 1 || $day > 31) return false;
        $all_star = [
            ["20" => '水瓶座'],["19" => '双鱼座'],["21" => '白羊座'],["20" => '金牛座'],
            ["21" => '双子座'],["22" => '巨蟹座'],["23" => '狮子座'],["23" => '处女座'],
            ["23" => '天秤座'],["24" => '天蝎座'],["22" => '射手座'],["22" => '摩羯座'],
        ];
        if ($day < array_keys($all_star[$month - 1])[0]) $month - 1 < 0 ? $month = 11 : $month -= 2;
        return array_values($all_star[$month])[0];
    }
}
